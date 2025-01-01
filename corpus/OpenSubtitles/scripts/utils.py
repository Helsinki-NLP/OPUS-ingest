# -*- coding: utf-8 -*-



import os, json, io, collections, re, unicodedata, sys, errno, math
from subprocess import Popen, PIPE
from mosestokenizer import MosesTokenizer
import polyglot
from polyglot.text import Text

supportedTokeniserLangs = ["as", "bn", "ca", "cs", "de", "el", "en", "es", "et", "fi", "fr", "ga", "gu", "hi" ,"hu", "is", "it", "kn", "lt", "lv", "ml", "ni", "mr", "nl", "or", "pa", "pl", "pt", "ro", "ru", "sk", "sl", "sv", "ta", "te", "ue", "zh"]


# Path to tokenisation script
# TOKENISER_PATH = "/proj/nlpl/software/moses/4.0-65c75ff/moses/scripts/tokenizer/tokenizer.perl"
TOKENISER_PATH = "/users/tiedeman/projappl/mosesdecoder/scripts/tokenizer/tokenizer.perl"

# Path and model for the Kytea sentence segmentation tool (only necessary for Japanese)
# KYTEA_PATH = "/cluster/home/plison/mt/kytea"
# KYTEA_JAPANESE = "/cluster/home/plison/mt/kytea/models/jp-0.4.7-5.mod"

# models from https://www.phontron.com/kytea/download/model/
KYTEA_PATH = "/users/tiedeman/.local"
KYTEA_JAPANESE = "/users/tiedeman/.local/share/kytea"

os.environ["LD_LIBRARY_PATH"] += ":" + KYTEA_PATH + "/lib"

# Path for the dictionaries and language models (bigrams)
DICO_PATH = "/proj/nlpl/data/OPUS/tools/opus/OpenSubtitles2018/unigrams"
LM_PATH = "/proj/nlpl/data/OPUS/tools/opus/OpenSubtitles2018/bigrams"

# Language data (codes, names, encodings, scripts, dictionaries)
languages = {'kur': 'ku', 'ku': {'codes': ['kur', 'ku', 'kmr', 'ckb', 'sdh', 'lki'], 'name': 'Kurdish', 'scripts': ['latin', 'arabic', 'cyrillic'], 'encodings': ['utf-8','windows-1252', 'windows-1256', 'iso-8859-6', 'iso-8859-1', 'koi8-r','windows-1251','maccyrillic','iso-8859-5','ibm855','ibm866']}, 'kan': 'kn', 'kn': {'codes':
['kan', 'kn'], 'name': 'Kannada', 'scripts': ['knda'], 'encodings': ['utf-8']}, 'wel': 'cy', 'cym': 'cy', 'cy': {'codes':
['wel', 'cy', 'cym'], 'name': 'Welsh', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'aze': 'az', 'az': {'codes': ['aze', 'az', 'azj', 'azb'], 'name': 'Azerbaijani', 'scripts': ['latin', 'arabic', 'cyrillic'], 'encodings': ['utf-8','windows-1252', 'windows-1256', 'iso-8859-6', 'iso-8859-1', 'koi8-r','windows-1251','maccyrillic','iso-8859-5','ibm855','ibm866']}, 'arg': 'an', 'an': {'codes': ['arg', 'an'], 'name': 'Aragonese', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']},'ast': {'codes':
['ast'], 'name': 'Asturian', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'amh': 'am', 'am': {'codes':
['amh', 'am'], 'name': 'Amharic', 'scripts': ['ethi'], 'encodings': ['utf-8']}, 'alb': 'sq', 'scc': 'sr', 'ita': 'it', 'per': 'fa', 'gl': {'codes':
['glg', 'gl'], 'name': 'Galician', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'mne': 'me', 'ell': 'el', 'hrv': 'hr', 'tr':
{'codes': ['tur', 'tr'], 'name': 'Turkish', 'scripts': ['latin'], 'encodings':
['utf-8', 'windows-1254', 'iso-8859-9']}, 'lv': {'codes': ['lav', 'lv'], 'name':
'Latvian', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1257', 'iso-8859-4']}, 
'lt': {'codes': ['lit', 'lt'], 'name': 'Lithuanian', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1257', 'iso-8859-4']}, 'nob': 'nb', 'nno': 'nn', 'nor': 'no',
'th': {'codes': ['tha', 'th'], 'name': 'Thai', 'scripts': ['thai'], 'encodings':
['utf-8', 'tis-620']}, 'te': {'codes': ['tel', 'te'], 'name':
'Telugu', 'scripts': ['telugu'], 'encodings': ['utf-8']}, 'fin': 'fi', 'ta': {'codes': ['tam', 'ta'], 'name': 'Tamil',
'scripts': ['tamil'], 'encodings': ['utf-8']},
'ger': 'de', 'dan': 'da', 'de': {'scripts': ['latin'], 'codes': ['ger', 'de'],
'name': 'German', 'encodings':['utf-8', 'windows-1252', 'iso-8859-1']}, 
             'cz':'cs', 'da': {'codes': ['dan', 'da'], 'name':
'Danish', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1252', 'iso-8859-1']}, 'mon': 'mn', 'geo': 'ka', 'hin': 'hi', 'eus': 'eu', 'baq': 'eu', "gre":"el", 'el':
{'codes': ['ell', 'el'], 'name': 'Greek', 'scripts': ['greek'], 'encodings':
['utf-8', 'windows-1253', 'iso-8859-7']}, 'eo': {'codes': ['epo', 'eo'], 'name':
'Esperanto', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1252',
'iso-8859-1']}, 'en': {'scripts': ['latin'], 'codes': ['eng', 'en'], 'name':
'English', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'tel': 'te', 
'ara': 'ar','eu': {'codes': ['baq', 'eu', 'eus'], 'name': 'Basque', 'scripts': ['latin'],
'encodings': ['utf-8', 'windows-1252', 'iso-8859-1']}, 'et': {'codes': ['est',
'et'], 'name': 'Estonian', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'ur': {'codes': ['urd', 'ur'], 'name': 'Urdu',
'scripts': ['arabic'], 'encodings': ['utf-8', 'windows-1256', 'iso-8859-6']},
'arm': 'hy', 'es': {'scripts': ['latin'], 'codes': ['spa', 'es'], 'name':
'Spanish', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'es_es': {'scripts': ['latin'], 'codes': ['spa', 'es'], 'name':
'Spanish', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'es_149': {'scripts': ['latin'], 'codes': ['spa', 'es'], 'name':
'Spanish', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'ru': {'codes': ['rus', 'ru'], 'name':
'Russian', 'scripts': ['cyrillic'], 'encodings': ['utf-8','koi8-r','windows-1251',
'maccyrillic','iso-8859-5','ibm855','ibm866']},'est': 'et', 'ice': 'is', 'ro': {'scripts':
['latin'], 'codes': ['rum', 'ro'], 'name': 'Romanian', 'encodings':
['utf-8', 'windows-1250', 'iso-8859-2']}, 'tur': 'tr', 'be': {'codes': ['bel',
'be'], 'name': 'Belarusian', 'scripts': ['cyrillic'], 'encodings': ['utf-8',
'koi8-r', 'windows-1251', 'iso-8859-5']}, 'bg': {'codes': ['bul', 'bg'], 'name':
'Bulgarian', 'scripts': ['cyrillic'], 'encodings': ['utf-8', 'windows-1251',
'iso-8859-5']}, 'uk': {'codes': ['ukr', 'uk'], 'name': 'Ukrainian', 'scripts':
['cyrillic'], 'encodings': ['utf-8', 'windows-1251', 'koi8-u', 'iso-8859-5']},
'rum': 'ro', 'bn': {'codes': ['ben', 'bn'], 'name': 'Bengali', 'scripts':
['bengali'], 'encodings': ['utf-8']}, 'br':
{'codes': ['bre', 'br'], 'name': 'Breton', 'scripts': ['latin'], 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'bs': {'codes': ['bos', 'bs'], 'name':
'Bosnian', 'scripts': ['latin'], 'encodings': ['utf-8','windows-1250', 'windows-1251', 'windows-1252', 
'iso-8859-2', 'iso-8859-5']}, 'rus': 'ru', 'ja': {'codes': ['jpn', 'ja'], 'name': 'Japanese',
'scripts': ['japanese'], 'encodings': ['utf-8', 'shiftjis','euc-jp', 'cp932','iso-2022-jp']}, 
'pt': {'scripts':['latin'], 'codes': ['por', 'pt'], 'name': 'Portuguese', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'bos': 'bs', 'glg': 'gl', 'vie': 'vi',
'ca': {'codes': ['cat', 'ca'], 'name': 'Catalan', 'scripts': ['latin'],
'encodings': ['utf-8', 'windows-1252', 'iso-8859-1']}, 'por': 'pt', 'ukr': 'uk',
'pol': 'pl', 'fi': {'codes': ['fin', 'fi'], 'name': 'Finnish', 'scripts':
['latin'], 'encodings': ['utf-8', 'windows-1252', 'iso-8859-1']}, 'cs':
{'scripts': ['latin'], 'codes': ['cze', 'cz','cs'], 'name': 'Czech', 'encodings':
['utf-8', 'windows-1250', 'iso-8859-2']}, 'zh_cn':'zh', 'zh': {'codes': ['chi', 'zh', 'zho', 'cmn', 'yue'], 'name':
'Chinese (simplified)', 'scripts': ['chinese'], 'encodings': ['utf-8', 'big5',
'gb2312', 'gb18030','hz-gb-2312']}, 'bre': 'br', 'pob': 'pb', 'tgl': 'tl', 'fre': 'fr', 'chi': 'zh',
'af': {'codes': ['afr', 'af'], 'name': 'Afrikaans', 'scripts': ['latin'],
'encodings': ['utf-8', 'windows-1252', 'iso-8859-1']}, 'swe': 'sv', 'tl':
{'codes': ['tgl', 'tl'], 'name': 'Tagalog', 'scripts': ['latin'], 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'pb':'pt_br', 'pt_br': {'scripts': ['latin'], 'codes':
['pob', 'pt', 'pt_br', 'por'], 'name': 'Portuguese (BR)', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'heb': 'he', 'kor': 'ko', 'dut': 'nl',
'pl': {'scripts': ['latin'], 'codes': ['pol', 'pl'], 'name': 'Polish',
'encodings': ['utf-8', 'windows-1250', 'iso-8859-2']}, 'hy': {'codes': ['arm',
'hy'], 'name': 'Armenian', 'scripts': ['latin'], 'encodings': ['utf-8']}, 'hr': {'codes': ['hrv', 'hr'], 'name':
'Croatian', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1250',
'iso-8859-2']}, 'hun': 'hu', 'hu': {'codes': ['hun', 'hu'], 'name': 'Hungarian',
'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1250', 'iso-8859-2']},
'hi': {'codes': ['hin', 'hi'], 'name': 'Hindi', 'scripts': ['devanagari'],
'encodings': ['utf-8']}, 'bul': 'bg', 'he':
{'codes': ['heb', 'he'], 'name': 'Hebrew', 'scripts': ['hebrew'], 'encodings':
['utf-8', 'windows-1255', 'iso-8859-8']}, 'me': {'codes': ['mne', 'me'], 'name':
'Montenegrin', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1252',
'iso-8859-1']}, 'ben': 'bn', 'zht': 'zt', 'bel': 'be', 'ml': {'codes': ['mal',
'ml'], 'name': 'Malayalam', 'scripts': ['malayalam'], 'encodings': ['utf-8']}, 'slv': 'sl', 'mn': {'codes': ['mon', 'mn'],
'name': 'Mongolian', 'scripts': ['mongolian'], 'encodings': ['utf-8']}, 'mk': {'codes': ['mac', 'mk', 'mkd'], 'name':
'Macedonian', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1251',
'iso-8859-5']}, 'cat': 'ca', 'slo': 'sk', 'zhe': 'ze', 'ms': {'codes': ['may',
'ms'], 'name': 'Malay', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'my': {'codes': ['bur', 'my','mya'], 'name':
'Burmese', 'scripts': ['burmese'], 'encodings': ['utf-8']}, 'jpn': 'ja', 'vi': {'codes': ['vie', 'vi'], 'name':
'Vietnamese', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1258',
'iso-8859-1']}, 'is': {'codes': ['ice', 'is'], 'name': 'Icelandic', 'scripts':
['latin'], 'encodings': ['utf-8', 'iso-8859-4']}, 'it': {'scripts': ['latin'],
'codes': ['ita', 'it'], 'name': 'Italian', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'zt': {'codes': ['zht', 'zt', 'zh','zh_tw', 'zho', 'cmn', 'yue'], 'name':
'Chinese (traditional)', 'scripts': ['chinese'], 'encodings': ['utf-8', 'big5',
'gb2312', 'gb18030','hz-gb-2312']}, 'yue': {'codes': ['yue', 'zht', 'zt', 'zh','zh_tw', 'zho', 'cmn'], 'name':
'Chinese (traditional)', 'scripts': ['chinese'], 'encodings': ['utf-8', 'big5',
'gb2312', 'gb18030','hz-gb-2312']}, 'zh_tw': {'codes': ['zht', 'zt', 'zh','zh_tw', 'zho', 'cmn', 'yue'], 'name':
'Chinese (traditional)', 'scripts': ['chinese'], 'encodings': ['utf-8', 'big5',
'gb2312', 'gb18030','hz-gb-2312']}, 'ar': {'codes': ['ara', 'ar'], 'name': 'Arabic', 'scripts':
['arabic'], 'encodings': ['utf-8', 'windows-1256', 'iso-8859-6']}, 'khm': 'km',
'tam': 'ta', 'ind': 'id', 'spa': 'es', 'id': {'codes': ['ind', 'id'], 'name':
'Indonesian', 'scripts': ['latin'], 'encodings': ['utf-8', 'windows-1252',
'iso-8859-1']}, 'cze': 'cs', 'nl': {'scripts': ['latin'], 'codes': ['dut',
'nl'], 'name': 'Dutch', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'eng': 'en', 'lit': 'lt', 'bur': 'my',
'sin': 'si', 'afr': 'af', 'fr': {'scripts': ['latin'], 'codes': ['fre', 'fr'],
'name': 'French', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'may': 'ms', 'fa': {'codes': ['per', 'fa', 'fas'], 'name': 'Persian', 'scripts': ['arabic'], 'encodings': ['utf-8',
'windows-1256', 'mac_farsi', 'iso-8859-6']}, 'mac': 'mk', 'kaz': 'kk', 'lav': 'lv', 
'mal':'ml', 'urd': 'ur', 'ka': {'codes': ['geo', 'ka'], 'name': 'Georgian', 'scripts':
['georgian'], 'encodings': ['utf-8','georgian-ps']}, 'kk':
{'codes': ['kaz', 'kk'], 'name': 'Kazakh', 'scripts': ['cyrillic'], 'encodings':
['utf-8', 'windows-1251', 'windows-1252', 'koi8-r', 'iso-8859-1']}, "scr":"sr",
'sr': {'codes': ['scc', 'sr'], 'name':'Serbian', 'scripts': ['latin', 'cyrillic'], 
'encodings': ['utf-8','windows-1250', 'windows-1251', 'windows-1252', 'iso-8859-2', 
'iso-8859-5']},'sq': {'codes': ['alb', 'sq'], 'name': 'Albanian', 'scripts': ['latin'],
'encodings': ['utf-8', 'windows-1250', 'iso-8859-2']}, 'no': {'codes': ['nor', 'no','nb', 'nn', 'nob', 'nno'], 'name': 'Norwegian', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'nb': {'codes': ['nor', 'no','nb', 'nob'], 'name': 'Norwegian Bokmål', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'nn': {'codes': ['nor', 'no', 'nn', 'nno'], 'name': 'Norwegian Nynorsk', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1252', 'iso-8859-1']}, 'ko': {'codes': ['kor', 'ko'], 'name': 'Korean',
'scripts': ['korean'], 'encodings': ['utf-8', 'euc-kr','iso-2022-kr','cp949']}, 'sv': {'scripts':
['latin'], 'codes': ['swe', 'sv', 'se'], 'name': 'Swedish', 'encodings':
['utf-8', 'windows-1252', 'iso-8859-1']}, 'km': {'codes': ['khm', 'km'], 'name':
'Khmer', 'scripts': ['khmer'], 'encodings': ['utf-8']}, 'sk': {'codes': ['slo', 'sk'], 'name': 'Slovak', 'scripts':
['latin'], 'encodings': ['utf-8', 'windows-1250', 'iso-8859-2']}, 'epo': 'eo',
'si': {'codes': ['sin', 'si'], 'name': 'Sinhalese', 'scripts': ['sinhala'],
'encodings': ['utf-8']}, 'sl': {'codes': ['slv',
'sl'], 'name': 'Slovenian', 'scripts': ['latin'], 'encodings': ['utf-8',
'windows-1250', 'iso-8859-2']}, 'tha': 'th'}



tokenisation_rules = {"fr":{"ujourd' hui":"ujourd'hui"}}
       
class Tokeniser():
    """Tokeniser (and spelling corrector)."""
    
    def __init__(self, language=None):
        """Initialises the tokeniser and dictionary for a particular language.
        
        Args:
            language(Language object): language for the tokeniser (None if unknown).
        
        """
        
        self.language = language
        self.tokprocess = None
        
        lcode = language.codes[0]
        lcode = lcode if lcode.lower()!="pt_br" else "pt"
        
        if "Japanese" in self.language.name:
            self.cmd = KYTEA_PATH + "/bin/kytea -notags -model " + KYTEA_JAPANESE
            self.tokprocess = Popen(self.cmd, 1, shell=True, stdin=PIPE, stdout=PIPE) if self.cmd else None
            self.tool = 'kytea'
        elif lcode in supportedTokeniserLangs:
            self.MosesTokenizer = MosesTokenizer(lcode)
            self.tool = 'moses'
        else:
            self.MosesTokenizer = MosesTokenizer('en')
            self.polyglot = lcode
            self.tool = 'polyglot'

        self.rules = tokenisation_rules.get(self.language.codes[0], {})
        
        # if isinstance(language, Language):
        #     self.language = language
        # elif isinstance(language,str):
        #     self.language = getLanguage(language)
        # else:
        #     sys.stderr.write("Using English as default tokenisation language\n")
        #     self.language = getLanguage("en")
            
        # if "Japanese" in self.language.name:
        #     self.cmd = KYTEA_PATH + "/bin/kytea -notags -model " + KYTEA_JAPANESE
        # elif "Chinese" in self.language.name:
        #     self.cmd = None

        # elif:
        #     lcode = self.language.codes[0]
        #     lcode = lcode if lcode!="pt_br" else "pt"
        #     if lcode in supportedTokeniserLangs:
        #         self.MosesTokenizer = MosesTokenizer(lcode)
        # else:
        #     self.MosesTokenizer = MosesTokenizer('en')
        #     self.polyglot = True
        # # else:
        # #     self.cmd = TOKENISER_PATH + " -no-escape -q -b "
        # #     lcode = self.language.codes[0]
        # #     lcode = lcode if lcode!="pt_br" else "pt"
        # #     self.cmd += "-l %s" %lcode
             
        # Starts a process with the tokeniser tool
        # self.tokprocess = Popen(self.cmd, 1, shell=True, stdin=PIPE, stdout=PIPE) if self.cmd else None
        # self.rules = tokenisation_rules.get(self.language.codes[0], {})
        
 
  
    def tokenise(self, sentence):
        """Tokenises the given sentence and corrects the tokens 
        with OCR errors or misplaced accents
        
        """
        if self.language.name.startswith("Chinese"):
            import jieba
            tokens = jieba.cut(sentence, cut_all=False)
            sentence2 = " ".join(tokens)
        elif self.tool == 'moses':
            tokens = self.MosesTokenizer.tokenize(sentence)
            sentence2 = " ".join(tokens)
        elif self.tool == 'polyglot':
            textobj = Text(sentence, hint_language_code=self.polyglot)
            tokens = textobj.words
            sentence2 = " ".join(tokens)
        else:
            sentence2 = self._feedprocess(sentence)
            for left, right in self.rules.items():
                sentence2 = sentence2.replace(left, right)
        sentence2 = sentence2.replace(". . .", "...")
        tokens = sentence2.split()
        return self._postprocess(tokens)
            
                  
         
    def _feedprocess(self, sentence):
        try:
            self.tokprocess.stdin.write((sentence + "\n").encode('utf-8'))
            self.tokprocess.stdin.flush()
        except IOError as e:
            sys.stderr.write("Error: " + str(e) + "\n")
            sys.exit()
            if e.errno == errno.EPIPE or e.errno == errno.EINVAL:
                return []
            else:
                raise
        if self.tokprocess.poll() == None:
            sentence = self.tokprocess.stdout.readline().decode('utf-8')
        if "kytea" in self.cmd:
            sentence = sentence.replace("\\", "")
        return sentence
    
    
    def _postprocess(self, tokens):
        
        corrected = []
        while tokens:      
            token = tokens.pop(0)
            if token.startswith("-"):
                corrected.append("-")
                token = token[1:]
            elif token.startswith("..."):
                corrected.append("...")
                token = token[3:]
            elif token.endswith("..."):
                corrected.append(token[:-3])
                token = "..."
            elif token.endswith("-"):
                corrected.append(token[:-1])
                corrected.append("-")
                continue 
            if token:
                corrected.append(token)            
        return corrected
    
    
    def close(self):
        """Closes the tokenisation processes."""
        
        if self.tokprocess:
            self.tokprocess.terminate()
            self.tokprocess.stdin.close()
            self.tokprocess.stdout.close()
            self.tokprocess = None
        
    
wordRegex = re.compile("\w[\w\-']*$")
digitRegex = re.compile("\d")

class SpellChecker():
   
    def __init__(self, language=None):
       
       if isinstance(language,str):
           language = getLanguage(language)
       self.language = language
       self.dictionary = language.getDictionary() if language else None
       self.lm = language.getLanguageModel() if language else None
       self.nbUnknowns = 0
       self.nbCorrections = 0
       self.nbTruecased = 0
       
    
    def _score(self, token, previous=None):
        if self.lm:
            if previous:
                scores = self.lm.full_scores(previous + " " + token, False, False)                        
            else:
                scores = self.lm.full_scores(token, True, False)
            for logprob, _, out_of_vocab in scores:
               pass
            if token=="l":
                logprob -= 3.0
            return logprob, not out_of_vocab
        elif self.dictionary:
            if self.dictionary.isWord(token):
                return self.dictionary.getFrequency(token), True
            else:
                return -10, False
        return 0, True
    
    
    def recapitalise(self, token, previous=None, upperline=False):
        
        scores = {}
        logprob, isword = self._score(token, previous)
        scores[token] = logprob + (0 if isword else -5)
        scores[token] += (-1.0 if upperline else 0.0)
        
        alttoken1 = token.lower()
        logprob1, isword1 = self._score(alttoken1, previous) 
        scores[alttoken1] = logprob1 + (-0.4 if isword1 else -5)
        
        alttoken2 = token[0]  + token[1:].lower()
        logprob2, isword2 = self._score(alttoken2, previous)
        scores[alttoken2] = logprob2 + (-0.5 if isword2 else -5)
        
        if not isword and not isword1 and not isword2:
            alternatives1 = list(self._getAlternatives(alttoken1, previous))
            alternatives2 = list(self._getAlternatives(alttoken2, previous))
            for alt in alternatives1 + alternatives2:
                scores[alt] = self._score(alt, previous)[0] -0.5
            self.nbUnknowns += 1
         
        best = max(scores, key=lambda t : scores[t])
        if best!=token:
            self.nbTruecased += 1
            if not previous:
                best = best[0].upper() + best[1:]
            if best!=alttoken1 and best!=alttoken2:
                self.nbCorrections += 1
        return best
    
       
    def spellcheck(self, token, previous=None):
        """Spell-check the word.  The method first checks if the word is in the
        dictionary.  If yes, the word is returned.  Else, the method search for
        a possible correction, and returns it.  If no correction could be found,
        the initial word is returned.  
        
        """    

        if not wordRegex.match(token) or digitRegex.search(token):
            return token, 1.0
        elif self.language and "latin" not in self.language.scripts:
            return token, 1.0
        try:
            token.encode("iso-8859-1")
        except:
            return token, 1.0
                             
        score, isword = self._score(token, previous)
        if score < -6.0:
            score2, isword2 = self._score(token.strip("-'"), previous)
            score, isword= max(score, score2), max(isword, isword2)
        if token.istitle():
            score += (5.0 if token[0]!= "I" else 2.0)
        elif not previous and token.startswith("l"):
            score += -2
        else:
            score += 1.0
        altprobs = {token:math.pow(10,score)}
        total =altprobs[token]
        if not isword or score < -6.0:
            alternatives = self._getAlternatives(token, previous)
            for alt in alternatives:
                score = self._score(alt, previous)[0]
                altprobs[alt] = math.pow(10, score)
                total += altprobs[alt]
        for alt in altprobs:
            altprobs[alt] = altprobs[alt] / total
        best = max(altprobs.keys(), key=lambda a : altprobs[a])      

        if not isword:
            self.nbUnknowns += 1
        if best != token:
            before = ((previous + " ") if previous else "") + token
            after = ((previous + " ") if previous else "") + best
            if altprobs[best] > 0.5:
                sys.stderr.write("Correction: %s -> %s (probability %f)\n" % (before, after, altprobs[best]))
            self.nbCorrections += 1
        
        return best, altprobs[best]
         
            

    def _getAlternatives(self, word, previous=None, recursive=True):
        """Finds the best correction for the word, if one can be found.  The
        method tries to correct common OCR errors, wrong accents, and a few 
        other heuristics.
        
        """   
        corrections = set([])
        if word in ["ain","aren","couldn","didn","doesn","don","hadn",
                    "hasn","haven","mustn","needn","shan","shouldn",
                    "wasn","weren", "wouldn","won", "isn"]:
            return corrections
        
        if previous and word.isupper():
            corrections.add(word.lower())
        elif (recursive and self.language and not self.language.unicase and word.isalpha() 
            and not word.islower() and not word.isupper() and not word.istitle()):
            return corrections.union(self._getAlternatives(word.lower(), previous, False))
        
        combis = set([word])
        for i in range(0, len(word)):
            newcomb = set(combis)
            c = word[i]
            if c == "i" or c=="I":
                for co in combis:
                    newcomb.add(co[:i] + "l" + co[i+1:])
            elif c=="l":
                for co in combis:
                    newcomb.add(co[:i] + "i" + co[i+1:])
                    if i==0:
                        newcomb.add("I" + co[1:])
            combis = newcomb
            if len(combis)>200:
                sys.stderr.write("Problematic word is " + word + "\n")
                break
        for co in combis:
            if self.dictionary.isWord(co):
                corrections.add(co)
   
        # Wrong accents
        if self.dictionary.no_accents:
            corrected = self.dictionary.correctAccents(word)
            if corrected != word:
                corrections.add(corrected)
        
        # correcting errors such as "entertainin" --> "entertaining"
        if (self.language and "en" in self.language.codes 
            and word.endswith("in") and self.dictionary.isWord(word + "g")):
            corrections.add(word + "g")      
        return corrections


from langid.langid import LanguageIdentifier, model
identifier = LanguageIdentifier.from_modelstring(model, norm_probs=True)


## use either langid.py or OpenLID/fasttext

def getProbDist(text):
    # return getProbDistLangid(text)
    return getProbDistOpenLID(text)


def getProbDistLangid(text):
    result = identifier.rank(text)
    result2 = {}
    for r in result:
        if r[1]>0.01:
            result2[r[0]]=r[1]
    return result2


import fasttext
from openlid import clean_text
from huggingface_hub import hf_hub_download
# from iso639 import languages

OpenLidModelPath = hf_hub_download(repo_id="laurievb/OpenLID-v2", filename="openlid_v2.bin")
OpenLidModel = fasttext.load_model(OpenLidModelPath)

def getProbDistOpenLID(text):
    input_text = clean_text(text)
    result = OpenLidModel.predict(text[:1024].replace("\n", " "), k=5)
    probs = result[1]
    result2 = {}
    for i,r in enumerate(result[0]):
        p=probs[i]
        l=r[10:13]
        result2[l]=p
        # iso = languages.get(part3=l)
        # result2[iso.part1]=p
    return result2



class Language:
    """Representation of a "language", with a name, 2- and 3-letters code,
    preferred encoding formats, writing script, and dictionary (only available
    for a subset of languages).
    
    """
             
    def __init__(self, name, scripts):
        """Initialises the language object"""
        
        self.name = name
        self.codes = [] 
        self.dictionary = None
        self.lm = None
        self.scripts = scripts
        self.encodings = []
        if "arabic" in self.scripts or "hebrew" in self.scripts:
            self.direction = "rtl"
        else:
            self.direction = "ltr"
        if [s for s in self.scripts if s != "latin" and s != "cyrillic" and s != "greek"]:
            self.unicase = True
        else:
            self.unicase = False
        if [s for s in self.scripts if s != "latin" and s != "cyrillic" 
            and s != "greek" and s!="hebrew"]: #and s!="arabic"
            self.alwaysSplit = True
        else:
            self.alwaysSplit = False
        
        
            
    def getDictionary(self):
        """Constructs the dictionary for the language."""
        
        if isinstance(self.dictionary, Dictionary):
            return self.dictionary
        elif self.dictionary:
            sys.stderr.write("Constructing dictionary..\n")
            accented = self.codes[0] in ["fr","de","es","it","pt"]
            self.dictionary = Dictionary(self.dictionary, accented)
            return self.dictionary
        return None
    
        
    
    def getLanguageModel(self):
        import kenlm
        if isinstance(self.lm, kenlm.LanguageModel):
            return self.lm
        elif self.lm:
            sys.stderr.write("Constructing language model...\n")
            self.lm = kenlm.LanguageModel(self.lm)
            return self.lm
        return None
    

    def __str__(self):
        """Returns the language name."""
        return self.name
        
    def __repr__(self):
        """Returns the language name."""
        return self.__str__()
   
    def __hash__(self):
        """Returns the hash of the language name."""
        return self.name.__hash__()
   
    def __eq__(self, other):
        """Returns true if other is a language with the same name, false otherwise."""
        
        if isinstance(other, Language):
            return other.name == self.name
        return other == self.name or other in self.codes
    
    def getProb(self, text):
        """Returns the probability that the given text is written in the language, 
        using the langid library.
        
        """
        distribOpenLID = getProbDist(text)
        prob = sum([distribOpenLID[x] for x in self.codes if x in distribOpenLID])
        if prob > 0.1:
            return prob
    
        shortcode = self.codes[0]
        distrib = getProbDistLangid(text)
        
        ## Asturian: accept es as a valid language (is that reasonable?)
        if "ast" in self.codes and not "ast" in distrib:
            if 'es' in distrib:
                return distrib["es"]
        ## Czech: confusion between 
        if "cs" in self.codes:
            return sum([distrib[x] for x in ["cs","cz"] if x in distrib])
        if "pt_br" in self.codes:
            return sum([distrib[x] for x in ["pt","pt_br"] if x in distrib])            
        if "no" in self.codes:
            return sum([distrib[x] for x in ["nb","no"] if x in distrib])
        elif "sr" in self.codes or "hr" in self.codes or "bs" in self.codes:
            prob = 0.0
            for l in ["sr","hr","bs"]:
                multi = 1.0 if l==shortcode else 0.5
                prob += ((distrib[l]*multi) if l in distrib else 0)
            return prob
        elif shortcode in distrib:
            return distrib[shortcode]
            return max(distrib["hr"]-0.2,0.0)
        elif "lb" in distrib and "lav" in self.codes:
            return max(distrib["lb"]-0.2,0.0)   
        elif "ru" in distrib and "ukr" in self.codes:
            return max(distrib["ru"]-0.4,0.0)   
        elif "zh" in distrib and "zt" in self.codes:
            return max(distrib["zh"] - 0.1,0.0)
        elif "ms" in distrib and "id" in self.codes:
            return max(distrib["ms"]-0.4,0.0) 
        elif "id" in distrib and "ms" in self.codes:
            return max(distrib["id"]-0.4,0.0)
        
        return sum([distribOpenLID[x] for x in self.codes if x in distribOpenLID])
        # return 0.0
    

def getLanguage(langcode):
    """Returns the language object given the code. If no language can be found
    with the provided code, raises a RuntimeError".
    
    """
    if langcode.lower() in languages.keys():
        content = languages[langcode.lower()]
        if isinstance(content, dict):
            lang = Language(content["name"], content["scripts"])
            lang.encodings = content["encodings"]
            lang.codes = sorted(content["codes"], key=lambda k: len(k) - (4 if "_" in k else 0))
            for c in lang.codes:
                if os.path.exists("%s/%s.dic"%(DICO_PATH,c)):
                    lang.dictionary = "%s/%s.dic"%(DICO_PATH,c)
                if os.path.exists("%s/%s.blm"%(LM_PATH,c)):
                    lang.lm = "%s/%s.blm"%(LM_PATH,c)
            return lang
        else:
            return getLanguage(content)
    else:
        raise RuntimeError("Cannot find language with code %s" % langcode)

   
class Dictionary():
    """Representation of a dictionary containing a list of words for a given 
    language along with their unigram frequencies. The dictionary is used
    to perform spell-checking of the documents, and correct common errors
    (such as OCR errors and wrong accents).
    
    """
    def __init__(self, dicFile, accented=False):
        """Creates a new dictionary from a given file.  Each line in the file 
        must contain a word followed by a space or tab and an integer 
        representing the frequency of the word.
        
        """
        sys.stderr.write("Building dictionary from " + dicFile + "\n")
        if not os.path.exists(dicFile):
            raise RuntimeError("Unigrams file " + dicFile + " cannot be found")
        self.dicFile = dicFile
        self.words = collections.defaultdict(int)
        with io.open(dicFile, encoding="utf-8") as dico:
            for l in dico:
                if not l.startswith("%%") and not l.startswith("#"):
                    split = l.split()
                    word = split[0].strip()
                    frequency = int(split[1].strip())
                    self.words[word] = frequency
        
        sys.stderr.write("Total number of words in dictionary: %i\n" % (len(self.words)))
        
        # Creating a non-accented version of the dictionary (only performed if we 
        # can detect accents in the dictionary). 
        self.no_accents = {}
        first_words = list(self.words.keys())[0:100]
        if accented:
            sys.stderr.write("Creating unaccented version of dictionary " + dicFile + "\n")
            for w in self.words:
                stripped = strip(w)
                if (stripped not in self.no_accents or 
                    self.words[w] > self.words[self.no_accents[stripped]]):
                    self.no_accents[stripped] = w
      
               
 
    def isWord(self, word):
        """Returns true if the (lowercased) word can be found in the dictionary,
        and false otherwise.
        
        """
        wlow = word.lower()
        return wlow in self.words or re.sub(r"['-]", "", wlow) in self.words
    
    
    def correctAccents(self, word):
        if self.no_accents:
            stripped = strip(word)
            if stripped in self.no_accents:
                return self.no_accents[stripped]
        return word
        
        
    def getWords(self):
        """Returns the (word,frequency) pairs in the dictionary."""
        return self.words
    
  
    def getFrequency(self, word):
        """Returns the frequency of the word in the dictionary."""
        wlow = word.lower()
        if wlow in self.words:
            return self.words[wlow]
        elif re.sub(r"['-]", "", wlow):
            return self.words[re.sub(r"['-]", "", wlow)]
        else:
            return 0


# Equivalence table between specific (German) characters and their ascii encoding
eqTable = {ord('ß'):'ss', ord('ç'):'c', ord('ä'):'ae', ord('ö'):'oe', ord('ü'):'ue', 
           ord('Ö'):'Oe', ord("Ü"):"Ue", ord("Ä"):'Ae'}


def strip(word):
    """Strips the word of accents and punctuation."""
    
    
    word2 = word.translate(eqTable)   
    normalised = unicodedata.normalize('NFKD', word2)       
    stripped = normalised.encode("ascii", "replace").decode("ascii")
 #   stripped = re.sub(r"[\.,;':\-!]", "", stripped)
    return stripped


   
        


  
