# -*- coding: utf-8 -*- 

import gzip,tarfile,re,os,sys,io,tarfile,time,collections,uuid,subprocess, gc
from io import BytesIO
from gzip import GzipFile
from tarfile import TarInfo
import xml.etree.ElementTree as et
import utils
import pandas, sys
from srt2xml import SubtitleConverter, BilingualConverter
from ruamel_yaml.cyaml import CDumper
 
exportFile = "/projects/researchers/researchers01/plison/data/raw/export_all.csv"
infoFile = "/projects/researchers/researchers01/plison/data/raw/subtitles_all.txt"
omdbFile = "/projects/researchers/researchers01/plison/data/raw/omdb.txt"
imdbFile = "/projects/researchers/researchers01/plison/data/raw/title.basics.tsv"
metadataFile = "/projects/researchers/researchers01/plison/data/raw/subs-metadata.csv"
sub2srt = os.path.dirname(os.path.abspath(__file__)) + "/sub2srt.pl"
ssa2srt = os.path.dirname(os.path.abspath(__file__)) + "/ssa2srt.pl"

class Subtitle:
    
    def __init__(self, subid, imdb, langcode, format, numcds, date, year):
        self.subid = subid
        self.imdb = imdb
        self.langcode = langcode
        self.subformat = format
        self.fps = None
        self.files = [None]*numcds
        self.year = year if year else "unknown"
        self.meta = {"source":{},"subtitle":{"date":date},"id":str(subid)}
        
        
    def addFilePointer(self, fileid, cdnum, fd, offset, size):
        if cdnum > len(self.files):
            print("cdum", cdnum, "/", len(self.files))
            cdnum = (len(self.files)-1)
        self.files[cdnum-1] = (fileid, fd, offset, size)
   
    def getFileObjects(self):
        inputs = []
        for f in self.files:
            if f:
                fileid, fd, offset,size = f    
                fd.seek(offset,0)
                content = BytesIO(fd.read(size))
                input = GzipFile(str(fileid),'rb',fileobj=content)
                try:
                    firstline = input.readline().decode("utf-8","ignore")
                    if self.subformat == "ssa":
                        input = self.convertFromSsa(input)
                    elif self.subformat != "srt":
                        input = self.convertFromSub(input)
                    elif re.match("\{\d+\}\{\d+\}", firstline):
                        input = self.convertFromSub(input)
                    input.seek(0)
                except:
                    sys.stderr.write("Conversion problem: %s\n"%sys.exc_info()[1])
                    continue
                
                # special case for Georgian (Python does not include the georgian-ps encoding)
                if self.langcode=="ka":
                    inputtext = input.read()
                    import chardet
                    detected = chardet.detect(inputtext)["encoding"]
                    if detected is None or "utf-8" not in detected.lower():
                        sys.stderr.write("Converting Georgian subtitle to UTF-8\n")
                        p = subprocess.Popen("iconv -f georgian-ps -t utf-8", shell=True,
                                        stdin=subprocess.PIPE,stdout=subprocess.PIPE)
                        out, err = p.communicate(inputtext)
                        input = BytesIO(out)
                    else:
                        input = BytesIO(inputtext)
                        
                inputs.append(input) 
        return inputs
    
     
    def __eq__(self, other):
        if hasattr(other,"subid"):
            return self.subid == other.subid
        return False


    def convertFromSsa(self, gzipfile):
        sys.stderr.write("Converting subtitle from ssa to srt\n")
        binaryContent= gzipfile.read()
        tempfile = "/tmp/" + str(uuid.uuid4()) + ".sub"
        fd = open(tempfile, 'wb')                   
        fd.write(binaryContent)        
        fd.close()
 
        p = subprocess.Popen(ssa2srt + " " + tempfile, shell=True, stdout=subprocess.PIPE)
        stdout, stderr = p.communicate()
        os.remove(tempfile)
        try:
            p.terminate()
        except:
            pass
        return BytesIO(stdout)
    
    
    def convertFromSub(self,gzipfile):
        sys.stderr.write("Converting subitle from sub to srt\n")
        binaryContent= gzipfile.read()
        tempfile = "/tmp/" + str(uuid.uuid4()) + ".sub"
        fd = open(tempfile, 'wb')                   
        fd.write(binaryContent)        
        fd.close()

        tempfile2 = "/tmp/" + str(uuid.uuid4()) + ".srt"
        cmd = "%s %s %s"%(sub2srt,tempfile, tempfile2)
        cmd += " --fps=%f"%self.fps if self.fps else ""

        lang = utils.getLanguage(self.langcode)
        encoding = lang.encodings[1] if len(lang.encodings) > 1 else "utf-8"
        cmd += " --fenc=" + encoding 
        
        subprocess.call(cmd, shell=True)
        if not os.path.exists(tempfile2) or os.stat(tempfile2).st_size < 100:
            raise RuntimeError("Conversion of %s to srt failed"%self.subformat)            
        fd = open(tempfile2, 'rb')
        content = fd.read()
        fd.close()
        os.remove(tempfile)
        os.remove(tempfile2)
        
        return BytesIO(content)



def extractSubtitles():
    
    subtitles = {}
    fd = open(infoFile, 'r')
    fd.readline()
    for line in fd:
        split = line.split('\t')
        if len(split) == 16:
            subid = int(split[0])
            year = split[2]
            langcode = split[4]
            if langcode == "pb":
                langcode = "pt_br"
            imdb = int(split[6])
            subformat = split[7]
            sumcds = int(split[8])
            if sumcds < 1:
                sumcds = 1
            date = split[5].split(" ")[0]
            sub = Subtitle(subid, imdb, langcode, subformat, sumcds,date, year)
            if split[10]:
                sub.fps = float(split[10])
            if langcode not in subtitles:
                subtitles[langcode] = {}
            subtitles[langcode][subid] = sub
    fd.close()
    
    return subtitles



def addFilePointers(langcode, subset, archive):
    subs = pandas.read_csv("../data/raw/export_all.csv", 
                           names=["MovieID", "IDSubtitleFile", "SubLanguageID",
                                  "IDSubtitle", "SubActualCD", "SubSumCD", 
                                  "SubFormat", "MovieName", "MovieYear", 
                                  "MovieImdbID", "UserRank", "SubDownloadsCnt", 
                                  "SeriesIMDBParent", "SeriesSeason", "SeriesEpisode", 
                                  "SubHearingImpaired", "SubFormat"], 
                           na_values=["N"], escapechar="\\")
    subs = subs
    subs = subs[subs.IDSubtitleFile.notnull()]
    if langcode == "ze":
        langcodes = ["ze", "zhe"]
    else:
        langcodes = utils.getLanguage(langcode).codes
    subs = subs[subs.SubLanguageID.isin(langcodes)]
    print("size after lang filter", len(subs))
    subs = subs[subs.IDSubtitle.isin(subset)]
    print("size after partition filter", len(subs))
    subs.IDSubtitleFile = subs.IDSubtitleFile.astype(int)
    subs.SubActualCD = subs.SubActualCD.fillna(1).astype(int)
    subs = subs.set_index("IDSubtitleFile")
    files = subs[["IDSubtitle", "SubActualCD"]].to_dict("index")
    
    
    fdtar = tarfile.open(archive, mode='r')
    fdbin = open(archive, mode='rb')
    for subfile in fdtar:
        fileId = os.path.basename(subfile.name).split(".")[0]
        try:
            fileId = int(fileId)
        except:
            continue
        if fileId in files:
            subid, cdnum = files[fileId]["IDSubtitle"], files[fileId]["SubActualCD"]
            if subid in subset:
                sub = subset[subid]
                offset,size = subfile.offset_data, subfile.size
                sub.addFilePointer(fileId, cdnum, fdbin, offset, size)
    fdtar.close()
   

def addNumCds(subset):
    
    for sub in subset.values():
        numactual = len([x for x in sub.files if x])
        numtotal = len(sub.files)
        sub.meta["source"]["cds"] = "%i/%i"%(numactual,numtotal)
        if numactual != numtotal:
            cdlist = [str(i+1) for i in range(0,numtotal) if sub.files[i]]
            sub.meta["source"]["cds"] += " (%s)"%(",".join(cdlist))
 
         

def addImdbInfo(subset):   
    imdbs = {}
    for sub in subset.values():
        imdb = sub.imdb
        if imdb not in imdbs:
            imdbs[imdb] = [sub]
        else:
            imdbs[imdb].append(sub)
            
    fd = open(omdbFile, 'r', encoding="latin-1")
    fd.readline()
    nb_augmented1, nb_augmented2 = 0, 0
    for line in fd:
        split = line.split('\t')
        imdb = int(split[0])
        if imdb in imdbs:
            for sub in imdbs[imdb]:
                try:
                    sub.meta["source"]["year"]=re.match("\d+", split[3]).group(0)
                except:
                    sub.meta["source"]["year"]=0
                sub.meta["source"]["duration"]=split[5]
                sub.meta["source"]["genre"]=split[6]
                sub.meta["source"]["original"]=split[17]
                sub.meta["source"]["country"]=split[18]
                nb_augmented1 = nb_augmented1 + 1

    fd.close()

    imdb_data = pandas.read_csv(imdbFile, sep="\t", na_values=["N"], escapechar="\\", header=0)
    print("finished imdb extraction", len(imdb_data))
    imdb_data = imdb_data[imdb_data.tconst.notnull()]
    imdb_data.startYear = imdb_data.startYear.fillna(0).astype(int)
    imdb_data.runtimeMinutes = imdb_data.runtimeMinutes.replace("Comedy",0).fillna(0).astype(int)
    imdb_data.tconst = imdb_data.tconst.str.lstrip("t").astype(int)
    imdb_data = imdb_data[imdb_data.tconst.isin(set(imdbs.keys()))]
    print("finished imdb filtering", len(imdb_data))
    for _, row in imdb_data.iterrows():
        for sub in imdbs[row.tconst]:
            try:
                if row.startYear > 0:
                    sub.meta["source"]["year"]=str(row.startYear)
                if row.runtimeMinutes > 0:
                    sub.meta["source"]["duration"]=str(int(row.runtimeMinutes))
                if type(row.genres)==str:
                    sub.meta["source"]["genre"]=str(row.genres)
                nb_augmented2 = nb_augmented2 + 1
            except:
                print("Unexpected error:", sys.exc_info()[0])
                continue

    print("Number of augmented subtitles: OMDB %i, IMDB %i"%(nb_augmented1, nb_augmented2))      


    

def addMetadata(subset):   

    df = pandas.read_csv(metadataFile, header=0)
    df = df[df.IDSubtitle.isin(subset)]
    nb_insertions = 0
    for row_i, row in df.iterrows():
        subId = row.IDSubtitle
        sub = subset[subId]
        rating = ((-10 * row.SubBad) + ((row.SubRating-5)*row.SubSumVotes)
                  + (2 if row.UserRank in ["trusted", "subtranslator"] else 0)
                  + (4 if row.SubFromTrusted==1 else 0)
                  + (1*row.SubVersion))
        sub.meta["subtitle"]["rating"] = str(rating)
        sub.meta["subtitle"]["version"] = str(row.SubVersion)
        sub.meta["source"]["HD"] = str(row.SubHD)
        sub.meta["subtitle"]["machine_translated"] = str(row.SubAutoTranslation)
        nb_insertions += 1
    sys.stderr.write("Number of inserted meta-data: %i\n"%nb_insertions)
   

def _addToArchive(output, filename, archive):
    output.seek(0)
    xmlInfo = TarInfo(filename)
    xmlInfo.size = len(output.getbuffer())
    xmlInfo.mtime = time.time()
    archive.addfile(xmlInfo,output)    
    output.close()
 
 
 
def selectSubtitles(archiveFile, langcode, nbPartitions, part):   

    sys.stderr.write("Reading the subtitle table...\n")    
    subtitles = extractSubtitles()
    subtitles_keylist = sorted(list(subtitles[langcode].keys()))
    subtitles_list = [subtitles[langcode][k] for k in subtitles_keylist]
    partlength = int(len(subtitles_list)/nbPartitions)
    partstart = (part-1)*partlength
    partend = part*partlength if part < nbPartitions else len(subtitles_list)
    subset = {s.subid:s for s in subtitles_list[partstart:partend]}
    
    sys.stderr.write("Finished reading the subtitle table.\n")
    sys.stderr.write("Reading the export and archive file...\n")
    addFilePointers(langcode, subset, archiveFile)
    sys.stderr.write("Finished reading the archive file.\n")
    sys.stderr.write("Reading the additional databases...\n")
    addNumCds(subset)
    addImdbInfo(subset)
    addMetadata(subset)
    sys.stderr.write("Finished reading the databases.\n")

    nbSubtitles = sum([len([f for f in s.files if f]) for s in subset.values()])
    sys.stderr.write("--> Processing %i subtitles (code: %s)\n"%(nbSubtitles,langcode))
    return subset
 
 


def closeFd(*descriptors):
    """Close file descriptors."""
    
    for descriptor in descriptors:
        if isinstance(descriptor, list):
            for descriptor2 in descriptor:
                descriptor2.close()
        elif descriptor:
            descriptor.close()

 
  
def addSubtitle(sub, tokTarFile, rawTarFile, language, encoding, alwaysSplit):

    srtFiles = ", ".join([str(s[0])+"."+sub.subformat for s in sub.files if s])
    if not srtFiles:
        sys.stderr.write(str(sub.subid) + " not in archive\n")
        return
    path = sub.year + "/" + str(sub.imdb) + "/" + str(sub.subid) + ".xml"
    sys.stderr.write("Processing %s (output file: %s)\n"%(srtFiles, path))

    input = sub.getFileObjects()  
    if not input:
        return              
    output = BytesIO()
    routput = BytesIO() if rawTarFile else None

    try:
        converter = SubtitleConverter(input,output,routput,language,sub.meta, 
                                      encoding, alwaysSplit)  
        converter.doConversion()
        nbcorrections = float(converter.spellchecker.nbCorrections)
        if converter.nbTokens == 0:
            raise RuntimeError("number of converted tokens is zero!")
        elif (nbcorrections/converter.nbTokens) > 0.01:
            sys.stderr.write("%i suspicious tokens, switching to aggressive correction...\n"%nbcorrections)              
            closeFd(input,output,routput)
            input = sub.getFileObjects()             
            output = BytesIO()
            routput = BytesIO() if rawTarFile else None
            converter = SubtitleConverter(input,output,routput,language,sub.meta, 
                                      encoding, alwaysSplit, aggressive=True)  
            converter.doConversion()
            
        _addToArchive(output,path,tokTarFile)
        if rawTarFile:
            _addToArchive(routput,path,rawTarFile)
    except KeyboardInterrupt:
        raise
    except:
        sys.stderr.write("Processing error: %s\n"%sys.exc_info()[1])  
        try:  
            converter.tokeniser.close()
        except NameError:
            sys.stderr.write("WARNING: cannot free tokeniser")
            pass
        gc.collect()
    
    closeFd(input, output, routput)         
         

def addBilingualSubtitle(sub, tokTarFile,tokTarFile2, rawTarFile, rawTarFile2,
                        language, language2, encoding, alwaysSplit):

    srtFiles = ", ".join([str(s[0]) +"."+sub.subformat for s in sub.files if s])
    if not srtFiles:
        sys.stderr.write(str(sub.subid) + " not in archive\n")
        return
    path = sub.year + "/" + str(sub.imdb) + "/" + str(sub.subid) + ".xml"
    sys.stderr.write("Processing %s (output files: %s)\n"%(srtFiles, path))

    input = sub.getFileObjects()  
    if not input:
        return              
    output = BytesIO()
    output2 = BytesIO()
    routput = BytesIO() if rawTarFile else None
    routput2 = BytesIO() if rawTarFile else None

    try:
        converter = BilingualConverter(input,output,output2,routput,routput2,
                                       language,language2, sub.meta, encoding, alwaysSplit)  
        converter.doConversion()

        if (language.getProb(converter.text) < language2.getProb(converter.text) and
            language2.getProb(converter.text2) < language.getProb(converter.text2)):
            sys.stderr.write("Erroneous language ordering, re-processing subtitle...\n")
            addBilingualSubtitle(sub, tokTarFile2, tokTarFile, rawTarFile2, rawTarFile,
                                 language2, language, encoding, alwaysSplit)
        else:                 
            _addToArchive(output,path,tokTarFile)
            _addToArchive(output2,path,tokTarFile2)
            if rawTarFile:
                _addToArchive(routput,path,rawTarFile)
                _addToArchive(routput2,path,rawTarFile2)
    except KeyboardInterrupt:
        raise
    except:
        sys.stderr.write("Processing error: %s\n"%sys.exc_info()[1])    
        try:  
            converter.tokeniser.close()
            converter.tokeniser2.close()
        except NameError:
            pass
        
    closeFd(input,output,output2, routput, routput2)

        
 
def convertArchive(archiveFile, tokTarFile, langcode=None, encoding=None, 
                   alwaysSplit=False, rawTarFile=None, nbPartitions=1, part=1):
    
    if not langcode:
        langcode = re.search(r'([^/]+)\.tar',archiveFile).group(1) 
    if langcode == "ze":
        return convertBilingualArchive(archiveFile,tokTarFile,langcode,encoding,
                                       alwaysSplit,rawTarFile,nbPartitions,part)
    
    subset = selectSubtitles(archiveFile, langcode, nbPartitions, part)
    language = utils.getLanguage(langcode)  
    
    tokTarFile = tarfile.open(tokTarFile, mode='w')
    if rawTarFile:
        rawTarFile = tarfile.open(rawTarFile, mode='w')
            
    for sub in subset.values():             
        try:  
            addSubtitle(sub, tokTarFile, rawTarFile, language, encoding, alwaysSplit)          
        except KeyboardInterrupt:
            break

    tokTarFile.close() 
    if rawTarFile:
        rawTarFile.close() 


def convertBilingualArchive(archiveFile, tokTarFile, langcode=None, encoding=None, 
                   alwaysSplit=False, rawTarFile=None, nbPartitions=1, part=1):
           

    language = utils.getLanguage("zt") 
    language2 = utils.getLanguage("en")         
    subset = selectSubtitles(archiveFile, "ze", nbPartitions, part)
    
    incrementPath = lambda p : re.sub("(\w+)(?=\.|$|\-raw\.)", "\g<1>2", p, 1)
    tokTarFile = tarfile.open(tokTarFile, mode='w')
    tokTarFile2 = tarfile.open(incrementPath(tokTarFile.name), mode='w')
    if rawTarFile:
        rawTarFile = tarfile.open(rawTarFile, mode='w')
        rawTarFile2 = tarfile.open(incrementPath(rawTarFile.name), mode='w')
    else:
        rawTarFile2 = None
        
    for sub in subset.values():             
        try:  
            addBilingualSubtitle(sub,tokTarFile,tokTarFile2,rawTarFile,rawTarFile2, 
                                 language, language2, encoding, alwaysSplit)                     
        except KeyboardInterrupt:
            break

    tokTarFile.close() 
    tokTarFile2.close() 
    if rawTarFile:
        rawTarFile.close() 
        rawTarFile2.close() 
        

if __name__ == '__main__':
    
    import argparse
 
    cmdOptions = argparse.ArgumentParser(prog="tar2xml")
    cmdOptions.add_argument("archiveFile", 
                               help="Path to the archive file in tar format")
    cmdOptions.add_argument("tokTarFile", 
                          help="""Path to the archive output file. If omitted, 
                          writes to the standard output""")
    cmdOptions.add_argument("-r", dest="rawTarFile", 
                          help="raw output file (without tokenization)")
    cmdOptions.add_argument("-l", dest="langcode", help="language code (ISO-639-3)")
    cmdOptions.add_argument("-e",dest="encoding",  
                          help="text encoding for the srt-file (if omitted, try to detect automatically)")
    cmdOptions.add_argument("-s", dest="alwaysSplit", action='store_true', 
                          help="always start a new sentence at new time frames (default is false)")
    cmdOptions.add_argument("-n", dest="nbPartitions", default=1,type=int,
                            help="Number of partitions for processing the archive file")
    cmdOptions.add_argument("-p", dest="part", default=1, type=int,
                            help="Part to process in the partitioned archive")


    args = vars(cmdOptions.parse_args())

    convertArchive(**args)  
    
    
    
   
        
        