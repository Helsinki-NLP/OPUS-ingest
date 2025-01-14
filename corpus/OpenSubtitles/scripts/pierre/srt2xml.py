# -*- coding: utf-8 -*- 

## TODO: fix negated contractions in English -- isn 't ---> is n't

description = """
Convert srt files (movie subtitles) to tokenized XML (utf-8) based on a 
simple tokenization and sentence splitting procedure.

"""

import sys, os, io,json,re,time
import xml.etree.cElementTree as et
import utils
from utils import Tokeniser,SpellChecker
    
# Regex to detect the subtitle indices at the start of each block    
numberRegex = re.compile("(\d+)\s?\r*\n")
# Regex to detect the start time --> end time line for each block
# (a bit complicated, since many variants are available)
timingRegex = re.compile("\s*(\-?\d+[:,\s\.]\s?\-?\d+[:,\s\.]\s?\-?\d+(?:[:,\s\.،]\s?\d+))\s*\-[\-\s]?"
                         + ">\s*(\-?\d+[:,\s\.]\s?\-?\d+[:,\s\.]\s?\-?\d+(?:[:,\s\.،]\s?\d+))")
# Regex to detect html tags
tagRegex = re.compile("<\s*\/?\s*?\w+(?:\s\w+(?:=['\"]?(?:.*?)['\"]?)?)*\s*?\/?\s*>")
# Regex to detect srt-type tags
tagRegex2 = re.compile("\{[yY]:[ib]\d?\}(.*?)(?:(?:\{[yY]\})|$)")
tagRegex3 = re.compile(r"{\\[bius]\d}(.*?){\\[bius]\d}")
# Regex to detect characters to remove
tostripRegex = re.compile("[\\&\\<\\>]")
# Regex to detect multiple occurrence of punctuation marks (except the dot)
toReduceRegex = re.compile(r"([\?!:,;]|\s)\1+")

# Sentence-ending markers (strong and weak)
stopPunctuations1 = ['!','?', '！','？', '؟','।']
stopPunctuations2 = ['.', ':', ';','。','；','：','|']

# Quotation markers (double and single)
quotationRegex = re.compile("``|''|´´|[“„”«»]")
quotationRegex2 = re.compile("[‘’›‹]")

wrongStartRegex = re.compile("[%s%s\]\),،]+\w+"%("".join(stopPunctuations1),"".join(stopPunctuations2)))
flippedStartRegex = re.compile("[%s%s\]\),،\"\(]+"%("".join(stopPunctuations1),"".join(stopPunctuations2)))
wrongEndRegex = re.compile("[\(\-\[]$")
flippedEndRegex = re.compile("[\(\-\[\"\)]$")

# Languages for which multiple alternative encodings are possible
difficult_langs = ["zh", 'zt','ja','ko','bg','el','he','th','ru','sr']

PAUSE_THR1 = 1       # > 1 second --> most probably new sentence
PAUSE_THR2 = 3       # > 3 second --> definitely new sentence
WORDS_THR = 40       # Higher bound on number of words in sentence

    
class SubtitleConverter:

    def __init__(self, input, output, rawOutput=None, language=None, 
                meta=None, encoding=None, alwaysSplit=False, aggressive=False):
        """Creates a new converter for a given input and output (as file
        objects). A second file object for the raw output can also be provided.
        
        Args:
            input(file object or list of file objects): raw subtitle files
            output(file object): XML subtitle file for the tokenised output
            rawOutput(file object): XML subtitle file for the untokenised output
            language(Language object): language for the subtitle
            meta(dict): meta-data to append to the end of the XML file(s)
            encoding(str): file encoding to use to read the raw subtitle files
            alwaysSplit(bool): whether to always split subtitle blocks as new 
                sentences (default is false).
            aggressive(bool): whether to perform a more aggressive spellchecking
                correction of the tokens.
        """
                    
        self.lang = language
        self.alwaysSplit = alwaysSplit
        if self.lang and self.lang.alwaysSplit:
            self.alwaysSplit = True            
            
        self.inputs = input if isinstance(input,list) else [input]
                    
        self.encodings = [encoding] if encoding else []
        self.encodings += (self.lang.encodings if self.lang else [])
        if not self.lang or self.lang.codes[0] in difficult_langs:
            detected = detectEncoding(self.inputs[0], self.encodings)
            self.encodings = [detected] + self.encodings

        if self.lang and self.lang.direction=="rtl":
            self.flipPunctuation = detectFlippedPunctuation(self.inputs[0], self.encodings)
        else:
            self.flipPunctuation = False
        
        self.aggressive = aggressive

        self.output = output
        self.rawOutput = rawOutput   
        self.meta = meta    
        
    
    def doConversion(self):   
        """Performs the conversion process, reading the full subtitle file
        and writing the converted content into the output file.
        """  
             
        self.curLine = None                     # Current line in the raw file
        self.curBlock = None                    # Current block
        self.curLineIndex = 0                   # Current line index in the raw file
        self.timeOffset = 0                     # Time offset (for multi-CD subtitles)

        self.sid = 0                            # Current sentence identifier
        self.nbTokens = 0                       # Total number of words
        self.nbIgnoredBlocks = 0                # Number of ignored subtitle blocks
        self.sentence = Sentence()     # Tokens in the current sentence
        self.text = ""                          # Collection of all subtitle lines
        
        # Starting the tokeniser and spellchecker
        self.tokeniser = Tokeniser(self.lang)
        self.spellchecker = SpellChecker(self.lang)
        
        self._startDocument()          
              
        # Looping on the subtitle blocks
        block = self._readBlock()
        while block:              
            # Ignoring spurious subtitle blocks    
            if block.isSpurious():
                self.nbIgnoredBlocks += 1
                block = self._readBlock()
                continue
            self._writeBlock(block) 
            block = self._readBlock()
            
        self._flushDocument()
        self.tokeniser.close()
        
        
       
    def _startDocument(self):
        """Writes the header of the XML subtitle file. 
        
        """
        id = self.meta["id"] if self.meta and "id" in self.meta else ""
        if not id and self.inputs and  hasattr(self.inputs[0],"name"):
            id = os.path.basename(self.inputs[0].name).split(".")[0]
        id = id.encode("utf-8")
            
        self.output.write(b'<?xml version="1.0" encoding="utf-8"?>\n')
        self.output.write(b'<document id="' + id + b'">\n')
        if self.rawOutput:
            self.rawOutput.write(b'<?xml version="1.0" encoding="utf-8"?>\n')
            self.rawOutput.write(b'<document id="' + id + b'">\n') 
              
   
    def _readBlock(self, recursive=0):
        """Reads one subtitle block and returns it.
          
        """
        block = SubtitleBlock()
        block.previous = self.curBlock
        block.offset = self.timeOffset
        
        # Reads the very first line
        if not self.curLine:
            self._readline()
        elif recursive > 20:
            raise RuntimeError("Wrong encoding format for subtitle")
            
        # Continues until a non-empty line is found
        while self.curLine and not self.curLine.strip():
            self._readline()

        # If we arrive at the end of the file object, checks whether any
        # other file should be read (in case of multi-CD subtitles). If yes,
        # opens the new file and continue.  Else, returns None.
        if not self.curLine:
            self.inputs.pop(0)
            self.curLineIndex = 0
            
            if self.inputs:
                nextBlock = self._readBlock()
                lasttime = tosecs(block.previous.end) if block.previous else 0
                # shifting the start and end times after the first CD
                if nextBlock and nextBlock.start and lasttime > tosecs(nextBlock.start):
                    nextBlock.start = addsecs(nextBlock.start, lasttime-self.timeOffset)
                    nextBlock.end = addsecs(nextBlock.end, lasttime-self.timeOffset)
                    self.timeOffset = lasttime
                return nextBlock
            else:
                return None
                  
        # Detects the subtitle identifier
        numberMatch = numberRegex.match(self.curLine)
        if numberMatch:
            block.setId(int(numberMatch.group(1)))
            self._readline()
        else:        
            block.setId((self.curBlock.id+1) if self.curBlock else 1)
         
        # Ignores empty lines
        while self.curLine and not self.curLine.strip():
            self._readline() 
            
        # Detects the start and end time           
        timingMatch = timingRegex.match(self.curLine)
        if not timingMatch:
            sys.stderr.write("Cannot parse timing (line number: %i): %s"
                             %(self.curLineIndex, self.curLine))
            self._readline()
            self.nbIgnoredBlocks += 1
            return self._readBlock(recursive+1)
        block.setTiming(timingMatch.group(1), timingMatch.group(2)) 
   
        # Reads the subtitle content until we arrive at the next subtitle ID
        # or the end of the file (NB: simply stopping at an empty line does
        # not always work, since some files strangely contain empty lines 
        # within subtitle blocks).
        self._readline()
        while self.curLine.strip():
            block.addLine(self.curLine, self.flipPunctuation)
            self._readline()          
        while self.curLine and not numberRegex.match(self.curLine):
            block.addLine(self.curLine, self.flipPunctuation)
            self._readline()

        self.curBlock = block
        return block
    
    
    def _readline(self):
        """ Reads the next line in the file, decodes it according to the
        current encoding, and returns it. If a decoding error is detected,
        tries to change the encoding if an alternative is possible.
        
        """
        if self.inputs:
            binaryLine = self.inputs[0].readline()
        self.curLine = None
        while self.curLine==None and self.encodings:
            encoding = self.encodings[0]  
            try:
                self.curLine = binaryLine.decode(encoding)
            except UnicodeDecodeError:
                # If we get a decoding error, removes the encoding from
                # the list of possible encodings, and retry.
                self.encodings.remove(encoding)

        if self.curLine==None:
            raise RuntimeError("Decoding error (encoding: %s, line: %i)"
                             %(encoding, self.curLineIndex))
        elif self.curLineIndex==0:
            self.curLine = self.curLine.lstrip("\ufeff")

        self.curLineIndex += 1
  
                      
    def _writeBlock(self, block):
        """ Processes the block content by doing sentence segmentation, 
        tokenisation, and writes the results into the XML file.
        
        """
        # First check whether the block is a continuation of the previous
        # sentence. If not, "flush" the current sentence to start a new one.
        if not self._isContinuation(block):    
            self._flushSentence()
         
        self.sentence.addStamp("T%sS"%block.id, block.start)
        
        # Loops on each line of the subtitle block
        for linenum in range(0,len(block.lines)):
            self.sentence.addRawChar(' ' if self.sentence.raw else '')
            self._recordLine(block, linenum)       
            
        self.sentence.addStamp("T%sE"%block.id, block.end)
    
        
  
    def _recordLine(self, block, linenum):
        """ Records the subtitle line, checking for the occurrence of 
        end-of-sentence markers along the way, and flushing the current 
        sentence in that case.
        
        """
        # Doing the actual tokenisation
        line = block.lines[linenum]
        tokens = self.tokeniser.tokenise(line)   
        curPos = 0       # Current character position in the line

        upperline = len([c for c in line if c.isupper() or not c.isalpha()]) > 2*len(line)/3
        for i, token in enumerate(tokens):  
            
            curPos += len(token)

            # Assume a new sentence if an utterance started with "-" is found   
            if (token=="-" and i < len(tokens)-1 and 
                (tokens[i+1][0].isupper() or (self.lang and self.lang.unicase))):
                self._flushSentence()

            # Handle all-uppercase tokens
            emphasised = block.isEmphasised(linenum, curPos)
            prev = self.sentence.lastToken
            if token.isupper() and ((not token.istitle() and self.spellchecker.lm) or upperline):
                corrected = self.spellchecker.recapitalise(token, prev, upperline)
                if corrected != token:
                    self.sentence.addToken(token, emphasised|(not upperline), alternative=corrected)
                else:
                    self.sentence.addToken(token, emphasised)
           
            # Usual case
            else:
                corrected, prob = self.spellchecker.spellcheck(token, prev)
                if prev in stopPunctuations2 and corrected.istitle():
                    self._flushSentence()
                emphasised = block.isEmphasised(linenum, curPos)
                if corrected == token:
                    self.sentence.addToken(token, emphasised)
                elif prob > 0.8:
                    self.sentence.addToken(corrected, emphasised, initial=token)
                elif self.aggressive and prob > 0.6:
                    self.sentence.addToken(corrected, emphasised, initial=token)                    
                else:
                    self.sentence.addToken(token, emphasised, alternative=corrected)
                
            while curPos < len(line) and line[curPos].isspace():
                self.sentence.addRawChar(line[curPos])
                curPos += 1
                
            # Do not flush the sentence for the last token in the last line
            if ((linenum==len(block.lines)-1 or isinstance(self,BilingualConverter)) 
                and (i==len(tokens)-1or (i < len(tokens)-1 and tokens[i+1]=="\""))):
                continue
            
            if token[0] in stopPunctuations1:
                self._flushSentence()
            elif (token[0] in stopPunctuations2 and i > 0 and 
                (i==len(tokens)-1 or tokens[i+1][0].isupper() or tokens[i+1][0]=="l"
                 or (self.lang and self.lang.unicase))):
                self._flushSentence()
                    
 
    
    def _isContinuation(self, block):
        """Returns true if the block is likely to be a continuation of the current
        sentence
        
        """
        if (not self.sentence or not block.lines 
            or not block.previous or not block.previous.lines):
            return True
        elif self.alwaysSplit:
            return False
         
        score = 0     #Initial continuation score
        
        # Scoring based on the end of the previous block
        lastline = block.previous.lines[-1].rstrip(")]} ")
        stopEndings = stopPunctuations1 + stopPunctuations2 + ["\""]
        if lastline.endswith("..."):
            score += 2
        elif lastline and lastline[-1] in stopEndings:
            score += -3
            
        # Scoring based on the beginning of the current block
        newline = block.lines[0].lstrip("'[*# ")
        if not newline:
            score += -2        
        elif lastline.endswith("-") and newline.startswith("-"):
            score += 2
        elif newline[0] in ["-","\"", "¿", "¡", "'"]:
            score += -2
        elif newline.startswith("..."):
            score += 2
        elif newline[0].isupper():
            score += -3
        elif newline[0].islower():     
            score += 2        
        elif newline[0].isnumeric() or (self.lang and self.lang.unicase):
            score += 1

        # Scoring based on time gaps
        if block.start and block.previous.end:
            pause = tosecs(block.start) - tosecs(block.previous.end)
            score += (-1 if pause > PAUSE_THR1 else 0)
            score += (-1 if pause > PAUSE_THR2 else 0)
            
        # Scoring based on sentence lengths
        score += (-1 if self.sentence.getNbStamps() >3 else 0)
        score += (-1 if self.sentence.getNbTokens() > WORDS_THR else 0)  
        return True if score > 0 else False
        


    def _flushSentence(self):
        """ Writes the tokens to the XML file (and the untokenised output if
        that option is activated) and clears the current sentence.
        
        """ 
        nbTokens = self.sentence.getNbTokens()
        if not nbTokens:
            return
        self.nbTokens += nbTokens 
        self.sid += 1
        self._pruneTokens()           
        self._writeTokens()
        if self.rawOutput:
            self._writeRaw()
        
        # We record the text content for language identification purposes
        self.text += self.sentence.rawCorrected + "\n"
        
        self.sentence = Sentence() 
        
  
  
    def _pruneTokens(self):
        toPrune = True
        while toPrune:
            toPrune = False
            entities= self.sentence.entities
            for i in range(1, len(entities)-4):
                if (entities[i][0]=="w"  and (entities[i][1]=="..." or entities[i][1]=="-") 
                    and entities[i+1][0]=="time" and entities[i+2][0]=="time" 
                    and entities[i+3][0]=="w" and entities[i+3][1]==entities[i][1]):
                    self.sentence.entities = entities[0:i] +entities[i+1:i+3] + entities[i+4:]
                    self.sentence.raw = self.sentence.raw.replace("... ...", " ")
                    self.sentence.raw = self.sentence.raw.replace("- -", " ")
                    toPrune = True
        
          
    def _writeTokens(self):
        """ Writes the tokens in self.sentence to the XML file. 
                
        """
        builder = et.TreeBuilder()  
        sattrs = {"id":str(self.sid)}
        if self.sentence.isEmphasised():
            sattrs.update({"emphasis":"true"})
            for w in self.sentence.getTokens():
                del w[2]["emphasis"]
        builder.start("s",sattrs)
        tokid = 0
        entities= self.sentence.getEntities()
        for i, entity in enumerate(entities):
            
            if entity[0]=="w":
                token = entity[1]
                tokid += 1
              
                builder.data("\n    ")
                wattrs = {"id":"%i.%i"%(self.sid,tokid)}
                wattrs.update(entity[2])
                builder.start("w",wattrs)
                builder.data(token)
                builder.end("w") 
                     
            # Write a <time> entity
            elif entity[0]=="time":
                builder.data("\n    ")
                builder.start("time",entity[1])
                builder.end("time")    
          
        builder.data("\n  ")
        builder.end("s")
        tree = et.ElementTree(builder.close())
        self.output.write(b"  ")
        tree.write(self.output, encoding='utf-8')
        self.output.write(b"\n") 
        
        
               
    def _writeRaw(self):
        """ Writes the raw sentence to the XML file. 
                
        """
        builder = et.TreeBuilder()  
        attrs =  {"id":str(self.sid)}
        builder.start("s",attrs)

        # Add timing info at the beginning of the sentence
        entities = self.sentence.getEntities()
        if entities and entities[0][0] == "time":
            builder.data("\n    ")
            builder.start("time",entities[0][1])
            builder.end("time")  
            
        builder.data("\n")
        builder.data(self.sentence.raw)
          
        # Add timing info at the end of the sentence
        if entities and entities[-1][0] == "time":
            builder.data("\n    ")
            builder.start("time",entities[-1][1])
            builder.end("time")   
          
        builder.data("\n  ")
        builder.end("s")
        tree = et.ElementTree(builder.close())
        self.rawOutput.write(b"  ")
        tree.write(self.rawOutput, encoding='utf-8')
        self.rawOutput.write(b"\n") 
    
    
    
    def _extractMetadata(self):
        """ Extracts meta-data on the subtitle and the conversion process,
        in order to append it to the end of the XML file.
        
        """
        meta = self.meta if self.meta else {}
        if "id" in meta:
            del meta["id"]
        meta["subtitle"] = meta["subtitle"] if "subtitle" in meta else {}
        meta["conversion"] = {}
        if self.lang:
            meta["subtitle"]["language"] = self.lang.name
             # Performs language identification
            langProb = self.lang.getProb(self.text)
            if langProb < 0.1 and not isinstance(self, BilingualConverter):
                msg = "Subtitle is not encoded in " + self.lang.name
                msg += " (distrib: " + str(utils.getProbDist(self.text)) + ")"
                raise RuntimeError(msg)
            meta["subtitle"]["confidence"] = str(langProb)
        
        if self.curBlock:
            meta["subtitle"]["blocks"] = str(self.curBlock.id)
            meta["subtitle"]["duration"] = self.curBlock.end
   
        meta["conversion"]["sentences"] = str(self.sid)
        meta["conversion"]["tokens"] = str(self.nbTokens)
        meta["conversion"]["encoding"] = self.encodings[0]
        meta["conversion"]["ignored_blocks"] = str(self.nbIgnoredBlocks)
        sc = self.spellchecker
        meta["conversion"]["unknown_words"] = str(sc.nbUnknowns)
        meta["conversion"]["corrected_words"] = str(sc.nbCorrections)
        meta["conversion"]["truecased_words"] = str(sc.nbTruecased)
        return meta
    
    
    def _flushDocument(self):
        """ Adds the final meta-data to the XML file, and closes the XML document.
        
        """
        self._flushSentence()
        meta = self._extractMetadata()
        metaBuilder = et.TreeBuilder()
        metaBuilder.start("meta")
        
        for part in meta:
            metaBuilder.data("\n    ")
            metaBuilder.start(part)
            if isinstance(meta[part],dict):
                for key in meta[part]:
                    metaBuilder.data("\n      ")
                    metaBuilder.start(key)
                    metaBuilder.data(meta[part][key])
                    metaBuilder.end(key)
            metaBuilder.data("\n    ")
            metaBuilder.end(part)
        
        metaBuilder.data("\n  ")   
        metaBuilder.end("meta")
        tree = et.ElementTree(metaBuilder.close())
        for fd in [self.output,self.rawOutput]:
            if fd:
                fd.write(b"  ")
                tree.write(fd, encoding='utf-8')
                fd.write(b"\n</document>\n") 
                
    
    def closeOutputs(self):           
        if self.output != sys.stdout.buffer:
            self.output.close()
        if self.rawOutput:
            self.rawOutput.close()
                

class Sentence:
    """Representation of a tokenised sentence (with time stamps).
    
    """
    
    def __init__(self):
        self.entities = []
        self.lastToken = None
        self.raw = ""  
        self.rawCorrected = ""  
        
    def addToken(self, token, emphasised, initial=None, alternative=None):
        emphasis = "true" if emphasised else None
        attrs = {"emphasis":emphasis,"initial":initial,"alternative":alternative}
        attrs = {k:attrs[k] for k in attrs if attrs[k]}
        self.entities.append(("w", token, attrs))
        corrected = alternative if alternative else token
        self.lastToken = corrected
        self.raw += token
        self.rawCorrected += corrected
    
    def addRawChar(self, c):
        self.raw += c
        self.rawCorrected += c
        
    def addStamp(self, stamp, timing):
        self.entities.append(("time", {"id":stamp,"value":timing}))
        
    def getStamps(self):
        return [x for x in self.entities if x[0]=="time"]

    def getTokens(self):
        return [x for x in self.entities if x[0]=="w"]
    
    def getNbStamps(self):
        return len(self.getStamps())
    
    def getNbTokens(self):
        return len(self.getTokens())
    
    def isEmphasised(self):
        foundToken = False
        for x in self.entities:
            if x[0]=="w" and "emphasis" not in x[2]:
                return False
            foundToken=True
        return foundToken

    def __nonzero__(self):
        return bool(self.entities)
    
    def getEntities(self):
        return self.entities
        
        
class BilingualConverter(SubtitleConverter):
    """Special converter for handling bilingual subtitles (with the first line
    of each block in one language, and the second line in another).
    """

    def __init__(self, input, output, output2, rawOutput=None,rawOutput2=None, 
                 language=None,language2=None, meta=None, encoding=None, alwaysSplit=False):
        """Creates a new converter for a given input and output (as file
        objects). A second file object for the raw output can also be provided.
        
        Args:
            output2(file object): XML file for second language
            rawOutput2(file object): XML file for second language
            language2(Language object): second language
        
        The other arguments are similar to the SubtitleConverter.
        
        """                 
        SubtitleConverter.__init__(self, input, output, rawOutput, language, 
                                   meta, encoding, alwaysSplit)
        self.encodings += language2.encodings
        detected = detectEncoding(self.inputs[0], self.encodings)
        self.encodings = [detected] + self.encodings
            
        self.lang2 = language2
        self.output2 = output2
        self.rawOutput2 = rawOutput2
          
         
    
    def doConversion(self):   
        """Performs the conversion process, reading the full subtitle file
        and writing the converted content into the output file.
        
        """       
        self.text2 = ""            
        self.nbTokens2 = 0
        self.sid2 = 0
        self.tokeniser2 = Tokeniser(self.lang2)
        self.spellchecker2 = SpellChecker(self.lang2)
        SubtitleConverter.doConversion(self) 
        self.tokeniser2.close()        
        
        
    def _startDocument(self):
        SubtitleConverter._startDocument(self)
        self._switchLanguage()
        SubtitleConverter._startDocument(self)
        self._switchLanguage()
        
    def _flushDocument(self):
        SubtitleConverter._flushDocument(self)
        self._switchLanguage()
        SubtitleConverter._flushDocument(self)
        self._switchLanguage()
          
    
    def _writeBlock(self, block):
        """Processes the block content (doing sentence segmentation and 
        tokenisation) in the particular case of "bilingual" subtitles, where
        two languages are used in the subtitle (one on each line).
        
        In this setting, we always split sentences at the end of each block.
        
        """
        self.sentence.addStamp("T%sS"%block.id, block.start)
        
        # Loops on each line of the subtitle block
        for linenum in range(0,max(1,len(block.lines)//2)):
            self.sentence.addRawChar(' ' if self.sentence.raw else '')
            self._recordLine(block, linenum)               
        self.sentence.addStamp("T%sE"%block.id, block.end)
        self._flushSentence()
        
        if len(block.lines)> 1:
            self._switchLanguage()              
            self.sentence.addStamp("T%sS"%block.id, block.start)
            for linenum in range(len(block.lines)//2,len(block.lines)):
                self.sentence.addRawChar(' ' if self.sentence.raw else '')
                self._recordLine(block, linenum)               
            self.sentence.addStamp("T%sE"%block.id, block.end)
            self._flushSentence()
            self._switchLanguage()
        
    
         
    def _switchLanguage(self):
        self.output, self.output2 = self.output2, self.output
        self.rawOutput, self.rawOutput2 = self.rawOutput2, self.rawOutput
        self.text, self.text2 = self.text2, self.text
        self.nbTokens, self.nbTokens2 = self.nbTokens2, self.nbTokens
        self.lang, self.lang2 = self.lang2, self.lang
        self.sid, self.sid2 = self.sid2, self.sid
        self.tokeniser, self.tokeniser2 = self.tokeniser2, self.tokeniser
        self.spellchecker, self.spellchecker2 = self.spellchecker2, self.spellchecker
         

    def closeOutputs(self):           
        SubtitleConverter.closeOutputs(self)           
        if self.output2 != sys.stdout.buffer:
            self.output2.close()
        if self.rawOutput2:
            self.rawOutput2.close()

 

class SubtitleBlock:
    """Representation of a subtitle block (with an identifier, a start time, 
    an end time, and a list of (usually 1 or 2) lines.
    
    """
    
    def __init__(self):
        """Initialises the block. """
        self.lines = []
        self.start = None
        self.end = None
        self.previous = None
        self.offset = 0
        self.tags = []
        self.id = 0
        
    def setId(self, id):
        """Sets the block identifier. """
        self.id = id
         
    def setTiming(self, start, end):
        """Sets the timing for the block (in seconds). """
        self.start = addsecs(start, self.offset)
        self.end = addsecs(end, self.offset)      
    
    def addLine(self, line, flipPunctuation=False):
        """Adds the line to the block. The method also strips html tags,
        spurious characters and punctuations, and non-standard quotation marks.
        
        """
        line = line.strip()
        splits = re.split(r"\\[nN]", line)
        if len(splits) > 1:
            for s in splits:
                self.addLine(s)
            return
        if not line:
            return
        elif len(self.lines) > 10:
            raise RuntimeError("Too many lines in subtitle block: " + " ; ".join(self.lines))
        
        line = quotationRegex.sub("\"", line)  
        line = quotationRegex2.sub("'", line)  
        line = tagRegex2.sub("<i>\g<1></i>", line)
        line = tagRegex3.sub("<i>\g<1></i>", line)
        line = re.sub(r"{[\w\\]+}", "", line)
        line = line.replace("…", "...").replace("‥", "...")
        line = toReduceRegex.sub("\g<1>", line)
       
        # Search for emphasis tags
        ematch = tagRegex.search(line)
        while ematch:
            pos, tag = ematch.start(), ematch.group()
            self.tags.append((len(self.lines), pos, "/" not in tag))
            line = line[:pos] + line[pos+len(tag):]
            ematch = tagRegex.search(line)
 
        line = tagRegex.sub("", line)
        line = tostripRegex.sub("", line)
                   
        if flipPunctuation:
            startpunctmatch = flippedStartRegex.match(line)
            endpunctmatch = flippedEndRegex.search(line)
            startpunct = startpunctmatch.group() if startpunctmatch else ""
            endpunct = endpunctmatch.group() if endpunctmatch else ""
            core = line.lstrip(startpunct).rstrip(endpunct)
            endpunct2 = endpunct[::-1].replace(")", "(").replace("]", "[")
            startpunct2 = startpunct[::-1].replace("(", ")").replace("[", "]")
            line2 = endpunct2 + core + startpunct2
    #        sys.stderr.write("Flipping from " + line + " to " + line2 + "\n")
            line = line2
               
        self.lines.append(line)
        
   
    def isEmphasised(self, linenum, position): 
        """Returns true if the given line and character position is part of an
        emphasised (using <i>,<b> or <font> tags) substring in the original 
        subtitle block.
        
        """
        for i, tag1 in enumerate(self.tags):
            if tag1[2]:          
                tag2 = next(iter([t for t in self.tags[i+1:] if not t[2]]), None)
                if tag2 and (linenum >=tag1[0] and linenum <=tag2[0] and 
                        (position >= tag1[1] or linenum > tag1[0]) and 
                        (position <=tag2[1] or linenum < tag2[0])):
                     return True
        return False
    
    def __str__(self):
        """Returns a string representation of the block.
        
        """
        s = ""
        if self.id:
            s += str(self.id) + "\n"
        if self.start and self.end:
            s += self.start + " --> " + self.end + "\n"
        s += "\n".join(self.lines)
        return s
    
    def isSpurious(self):
        """Returns true if the block is considered as "purious, i.e.
        if it contains an URL, the "opensubtitles" mention, or is a 
        "moving" subtitle (with one single character appended to the 
        previous block).
        
        """
        if not self.start or not self.end:
            return True
        for l in self.lines:
            l2 = l.lower()
            if ("http" in l2 or "www" in l2 or "opensubtitles" in l2
                or ".com" in l2):
                return True
            
        if self.previous:
            curStr = " ".join(self.lines)  
            prevStr = " ".join(self.previous.lines)
            for i in range(0,3):
                if len(curStr)==len(prevStr)+i and curStr[:-i]==prevStr:
                    return True
        return False
        

def convertSubtitle(srtFile=None, xmlFile=None, langcode=None,encoding=None, 
                    alwaysSplit=False, rawOutput=None,meta=None, aggressive=False):
    """Converts a .srt subtitle to the XML representation.  
    
    Args:
        srtFile(file path or None): path to the srt file. If set to None,
            reads from standard input
        xmlFile(file path or None): path to the XML output file. If set to
            None, write to the standard output
        langcode(str): 2- or 3-letters code for the subtitle language
        encoding(str): file encoding for the subtitle.
        alwaysSplit(bool): whether to systematically consider each block
            to start a new sentence.
        rawOutput(file path or None): path to the XML file for the (untokenised)
            output. Leave to None to avoid generating this output.
        meta(dict): Meta-data about the subtitle to write at the end of the 
            XML file(s).
            
    """
    if srtFile:
        input = io.open(srtFile,mode='rb') 
    else:
        input = io.TextIOWrapper(sys.stdin.buffer,mode='rb')        
        
    output = io.open(xmlFile,'wb') if xmlFile else sys.stdout.buffer
    rawOutput = io.open(rawOutput,'wb') if rawOutput else None
    
    if langcode=="ze":
        incrementPath = lambda p : re.sub("(\w+)(?=\.|$)", "\g<1>2", p, 1)
        output2 = io.open(incrementPath(xmlFile),'wb') if xmlFile else sys.stdout.buffer
        rawOutput2 = io.open(incrementPath(rawOutput),'wb') if rawOutput else None
        lang = utils.getLanguage("zt")
        lang2 = utils.getLanguage("en")      
        converter = BilingualConverter([input], output,output2,rawOutput,rawOutput2,
                                       lang,lang2, meta, encoding, alwaysSplit) 
    else:    
        lang = utils.getLanguage(langcode) if langcode else None
        converter = SubtitleConverter([input],output,rawOutput,lang,
                                  meta, encoding,alwaysSplit, aggressive)
    converter.doConversion()
    converter.closeOutputs()

        
     
     
def detectEncoding(input, alternatives):
    """Tries to detected the encoding using chardet.  The detection
    is performed incrementally.
    
    Args:
        - input(file object): the file object with the content
        - alternatives(list): list of alternative encodings
            
    """
    if not input or not hasattr(input,"fileno"):
        return "utf-8"
    try:
        from chardet.universaldetector import UniversalDetector
    except RuntimeError:
        sys.stderr.write("Cannot find chardet\n")
        return "utf-8"

    detector = UniversalDetector()
    for line in input.readlines():
        detector.feed(line)
        if detector.done: break
    detector.close()
    input.seek(0)
    
    if "encoding" in detector.result and detector.result["encoding"]:
        encoding = detector.result["encoding"].lower().rstrip("-sig")
        # Correcting some detection errors in chardet
        encoding = "windows-1250" if encoding=="iso-8859-2" else encoding
        encoding = "windows-1252" if encoding=="asc" else encoding
        encoding = "shiftjis" if encoding=="shift_j" else encoding
        confidence = detector.result['confidence']
    else:
        encoding = "unknown"
        confidence = 0.0
    
    sys.stderr.write("Detected encoding: %s with confidence %f\n"
                     %(encoding, detector.result['confidence']))
    if confidence > 0.3 and (not alternatives or encoding in alternatives):
        return encoding
    else:
        raise RuntimeError("Unsupported encoding %s (not in %s)"
                           %(encoding,str(alternatives)))
   


def detectFlippedPunctuation(input, encodings):   
    """ Checks whether the punctuation marks were flipped because of lack of support
    for right-to-left languages. """
    nbFlipped = 0
    nbLines = 0
    flipped = False
    encodings2 = list(encodings)
    for l in input.readlines():
        curLine = None
        while curLine==None and encodings2:
            encoding = encodings2[0]  
            try:
                curLine = l.decode(encoding)
            except UnicodeDecodeError:
                encodings2.remove(encoding)
        if not curLine:
            raise RuntimeError("Reading error, aborting detection of flipped punctuation marks")
        curLine = curLine.strip()
        if wrongStartRegex.match(curLine) and not curLine.startswith(".."):
            nbFlipped += 1
        elif wrongEndRegex.search(curLine):
            nbFlipped += 1
        elif (curLine.startswith("(") or curLine.endswith(")")) and curLine.count("(") > curLine.count(")"):
            nbFlipped += 1
        if nbFlipped > 10 and nbFlipped > nbLines/15:
            flipped = True
            break
        elif nbLines > 400:
            break
        nbLines += 1
    input.seek(0)
    if flipped:
        sys.stderr.write("Punctuation marks will be flipped.\n")
    return flipped
    
    
    
def tosecs(timeStr):
    """ Convert the time string as a number of seconds.
    
    """
    if not timeStr:
        return 0
    split = re.split("[^0-9\-]",timeStr)
    split = [s for s in split if s]
    if len(split) >=3:
        secs = 3600*int(split[0]) + 60*int(split[1]) + int(split[2])
    else:
        return 0
    if len(split)==4:
        secs += int(split[3])/1000.0
    return secs

def addsecs(timeStr, offset):
    """ Adds a number of seconds to the given time string.
    
    """
    if not offset:
        return timeStr
    totalSecs = tosecs(timeStr) + offset
    m, s = divmod(totalSecs, 60)
    h, m = divmod(m, 60)
    return "%02d:%02d:"%(h,m) + ("%.3f"%s).replace(".",",")

 
        
if __name__ == '__main__':
    """ Parse the command line arguments. 
    
    """
    import argparse
 
    cmdOptions = argparse.ArgumentParser(prog="srt2xml", description=description)
    cmdOptions.add_argument("srtFile", nargs='?',
                               help="Path to the subtitle file in srt format")
    cmdOptions.add_argument("xmlFile", 
                          help="""Path to the output XML file. If omitted, 
                          writes to the standard output""", nargs='?')
    cmdOptions.add_argument("-r", dest="rawOutput", 
                          help="raw XML output file (without tokenization)")
    cmdOptions.add_argument("-l", dest="langcode", help="language code (ISO-639-3)")
    cmdOptions.add_argument("-e",dest="encoding",  
                          help="text encoding for the srt-file (if omitted, try to detect automatically)")
    cmdOptions.add_argument("-s", dest="alwaysSplit", action='store_true', 
                          help="always start a new sentence at new time frames (default is false)")
    cmdOptions.add_argument("-a", dest="aggressive", action='store_true', 
                          help="perform aggressive spellchecking (default is false)")
    cmdOptions.add_argument("-m", dest="meta", help="meta-data")


    args = vars(cmdOptions.parse_args())
    if args["meta"]:
        args["meta"]=json.loads(args["meta"])
  
    convertSubtitle(**args)  
        
    
   
        
        
