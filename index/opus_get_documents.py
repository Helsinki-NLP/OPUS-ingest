#!/usr/bin/env python3


import argparse
import zipfile
import os
import urllib.request
import sqlite3
import sys
import base64
import json

from os.path import exists
from xml.parsers.expat import ParserCreate, ExpatError, errors



storage_url_base = 'https://object.pouta.csc.fi/OPUS-'


parser = argparse.ArgumentParser(prog='opus_sentid_index',
    description='Read OPUS documents and extract sentence IDs and row numbers from an index DB')

parser.add_argument('-c', '--corpus', help='Corpus name', required=True)
parser.add_argument('-r', '--release', help='Release version', required=True)
parser.add_argument('-l', '--language', help='Language', required=True)
parser.add_argument('-v', '--verbose', help='verbose output', action='store_true', default=False)
parser.add_argument('-64', '--base64', help='base64 encoding', action='store_true', default=False)
parser.add_argument('-j', '--json', help='print JSON lines', action='store_true', default=False)
parser.add_argument('-sp', '--skip-outside-paragraph-documents', help='skip sentence outside of paragraphs to be treated as documents', action='store_true', default=False)


args = parser.parse_args()

verbose = args.verbose;
base64_encode = args.base64;
json_encode = args.json;
skip_sentdocs = args.skip_outside_paragraph_documents

corpus    = args.corpus
release   = args.release
language  = args.language

data_url  = storage_url_base + corpus + '/' + release + '/raw/' + language + '.zip'
data_file = corpus + '_' + release + '_raw_' + language + '.zip'



if not exists(data_file):
    sys.stderr.write(f"Downloading {data_url}\n")
    urllib.request.urlretrieve(data_url, data_file)
    
lzip = zipfile.ZipFile(data_file)


def start_element(name, attrs):
    global sents, sentStr, inSent, inPar, sentCount, docCount
              
    if name == 's':
        inSent = True
        sentCount += 1
        sentStr = ''
        if not sentCount % 5000:
            sys.stderr.write('.')
            if not sentCount % 100000:
                sys.stderr.write(f" {sentCount} ({docCount} documents)\n")
            sys.stderr.flush()

    elif name == 'p' or name == 'P':
        if sents:
            parStr = ' '.join(sents)
            pars.append(parStr)
            sents = []
        inPar = True

def end_element(name):
    global sents, pars, sentStr, inSent, inPar
    global corpus, skip_sentdocs
        
    if name == 's':
        inSent = True
        if sentStr.strip():
            sents.append(sentStr.strip())
            sentStr = ''
            if not inPar and corpus != 'OpenSubtitles' and corpus != 'TED2020' and corpus != 'QED':
                # sys.stderr.write(f"sentence outside paragraph --> treat as document\n")
                if not skip_sentdocs:
                    print_document(sents)
                sents = []

    elif name == 'p' or name == 'P':
        inPar = False
        if sents:
            parStr = ' '.join(sents)
            pars.append(parStr)
            sents = []

    elif name == 'time':
        if sentStr.strip():
            sents.append(sentStr.strip())
            sentStr = ''
        if sents:
            parStr = ' '.join(sents)
            pars.append(parStr)
            sents = []

    elif name == 'doc' or name == 'SPEAKER' or name == 'text':
        if sents:
            parStr = ' '.join(sents)
            pars.append(parStr)
            sents = []
        if pars:
            print_document(pars)
            pars = []


def char_data(data):
    global inSent
    global sentStr
    if inSent:
        sentStr = sentStr + data


def print_document(pars):
    global base64_encode, json_encode, docCount
    docCount += 1
    if json_encode:
        global corpus, document, release, language
        data = {'corpus': corpus, 'release': release, 'id': docCount,
                'document': document, 'document_language': language,
                'text': "\n".join(pars)}
        print(json.dumps(data, ensure_ascii=False))
    elif base64_encode:
        print(base64.b64encode("\n\n".join(pars).encode()))
    else:
        print("\n\n".join(pars))
        print("\n\n")




count = 1
docCount = 0

for filename in lzip.namelist():
    if filename[-4:] == '.xml':

        parser = ParserCreate()
        parser.StartElementHandler = start_element
        parser.EndElementHandler = end_element
        parser.CharacterDataHandler = char_data

        inSent    = False
        inPar     = False
        sents     = []
        pars      = []
        sentStr   = ''
        sentCount = 0
        errorCount = 0
        
        document  = '/'.join(filename.split('/')[2:])

        if verbose:
            sys.stderr.write(f"process {filename} ({count} sentences / {docCount} documents done)\n")
        with lzip.open(filename, 'r') as f:
            for line in f:
                try:
                    parser.Parse(line)
                except:
                    errorCount += 1
                    if verbose:
                        sys.stderr.write("Error:", errors.messages[err.code])
                        sys.stderr.write(f"error parsing {line}\n")

        if pars:
            print_document(pars)
        if sents:
            print_document(sents)

        count += sentCount
        if errorCount > 0:
            sys.stderr.write(f"XML parsing errors for {filename}: {errorCount} lines\n")


sys.stderr.write(f"A total of {count} sentences found\n")
os.unlink(data_file)


