#!/usr/bin/env python3

import argparse
import xml.parsers.expat
from mosestokenizer import MosesTokenizer
from xml.sax.saxutils import XMLGenerator
from xml.sax.xmlreader import AttributesNSImpl
import sys

import polyglot
from polyglot.text import Text, Word

import MeCab
import mecab_ko

## languages supported by fast_mosestokenizer
supportedLangs = ["as","bn","ca","cs","de","el","en","es","et","fi","fr","ga","gu","hi","hu","is","it","kn","lt","lv","ml","ni","mr","nl","or","pa","pl","pt","ro","ru","sk","sl","sv","ta","te","ue","zh"]

## languages we want to use by fast_mosestokenizer
mosesLangs = ["as","bn","ca","cs","de","el","en","es","et","fi","fr","ga","gu","hi","hu","is","it","kn","lt","lv","ml","ni","mr","nl","or","pa","pl","pt","ro","ru","sk","sl","sv","ta","te","ue","zh"]


parser = argparse.ArgumentParser()
parser.add_argument("-l", "--language", type=str, default="en", help="Language to be tokenized (ISO-639-1 landuage code)")
parser.add_argument('--polyglot', dest='polyglot', action='store_true')
args = parser.parse_args()


parser = xml.parsers.expat.ParserCreate()
writer = XMLGenerator(sys.stdout, 'utf-8')

mecab = False
polyglot = False
language = args.language

if args.polyglot:
    print('Use polyglot!', file=sys.stderr)
    polyglot = True
# elif language in supportedLangs:
elif language in mosesLangs:
    print('Use mosestokenizer!', file=sys.stderr)
    tokenizer = MosesTokenizer(language)
elif language == 'ko':
    print('Use MeCab-ko!', file=sys.stderr)
    mecab = True
    tokenizer = mecab_ko.Tagger("-Owakati")
elif language == 'ja':
    print('Use MeCab!', file=sys.stderr)
    mecab = True
    tokenizer = MeCab.Tagger("-Owakati")
else:
    print('Use polyglot!', file=sys.stderr)
    polyglot = True
    tokenizer = MosesTokenizer('en')


def start_element(name, attrs):
    global inSent
    global sentStr
    global sentCount
    global sentID
    global wordID
    if inSent and sentStr:
        tokenize_text(sentStr)
        sentStr = ''
    if name == 's':
        inSent = True
        sentCount += 1
        sentStr = ''
        wordID = 0
        if 'id' in attrs:
            sentID = attrs['id']
        else:
            sentID = str(sentCount)
        if not sentCount % 2000:
            sys.stderr.write('.')
            if not sentCount % 100000:
                sys.stderr.write(f" {sentCount}\n")
            sys.stderr.flush()
    writer.startElement(name, attrs)

def end_element(name):
    global inSent
    global sentStr
    global sentID
    global wordID
    if inSent and sentStr:
        if polyglot:
            tokenize_polyglot(sentStr,language)
        elif mecab:
            tokenize_mecab(sentStr)
        else:
            tokenize_text(sentStr)
        sentStr = ''
    if name == 's':
        inSent = False
    writer.endElement(name)

def char_data(data):
    global inSent
    global sentStr
    if inSent:
        sentStr = sentStr + data
    else:
        writer.characters(data)

def tokenize_text(text):
    global sentID
    global wordID
    writer.characters("\n")
    for t in tokenizer.tokenize(text):
        wordID+=1
        writer.characters("    ")
        writer.startElement('w', { 'id': ''.join([sentID, '.', str(wordID)])})
        writer.characters(t)
        writer.endElement('w')
        writer.characters("\n")

def tokenize_polyglot(text,lang):
    global sentID
    global wordID
    writer.characters("\n")
    textobj = Text(text, hint_language_code=lang)
    for t in textobj.words:
        wordID+=1
        writer.characters("    ")
        writer.startElement('w', { 'id': ''.join([sentID, '.', str(wordID)])})
        writer.characters(t)
        writer.endElement('w')
        writer.characters("\n")

def tokenize_mecab(text):
    global sentID
    global wordID
    writer.characters("\n")
    for t in tokenizer.parse(text).split():
        wordID+=1
        writer.characters("    ")
        writer.startElement('w', { 'id': ''.join([sentID, '.', str(wordID)])})
        writer.characters(t)
        writer.endElement('w')
        writer.characters("\n")


inSent    = False
sentStr   = ''
sentID    = ''
sentCount = 0
wordID    = 0

parser.StartElementHandler = start_element
parser.EndElementHandler = end_element
parser.CharacterDataHandler = char_data

writer.startDocument()
for line in sys.stdin:
    parser.Parse(line)
writer.endDocument()
