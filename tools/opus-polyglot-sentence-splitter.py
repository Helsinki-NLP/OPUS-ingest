#!/usr/bin/env python3

import argparse
import xml.parsers.expat
import polyglot
from polyglot.text import Text, Word
from xml.sax.saxutils import XMLGenerator
from xml.sax.xmlreader import AttributesNSImpl
import sys


parser = argparse.ArgumentParser()
parser.add_argument("-l", "--language", type=str, default="en", help="Language to be split (ISO-639-1 landuage code)")
args = parser.parse_args()
language = args.language

parser = xml.parsers.expat.ParserCreate()
writer = XMLGenerator(sys.stdout, 'utf-8')


## TODO: what kind of acceptable HTML tags are missing here?

contentTags = {'p': 1,
               'li': 1,
               'h1': 1,
               'h2': 1,
               'h3': 1,
               'h4': 1,
               'div': 1,
               'tr': 1,
               'th': 1}




def start_element(name, attrs):
    global textStr
    global contentTags
    global tagList
    if name in contentTags:
        if textStr:
            split_text(textStr)
        writer.startElement(name, attrs)
    else:
        textStr = textStr + '__TAG__'
        tag = {'name': name, 'attrs': attrs}
        tagList.insert(0,tag)

def end_element(name):
    global textStr
    global contentTags
    global tagList
    if name in contentTags:
        if textStr:
            split_text(textStr)
        writer.endElement(name)
    else:
        textStr = textStr + '__TAG__'
        tag = {'name': name}
        tagList.insert(0,tag)

def char_data(data):
    global textStr
    textStr = textStr + data

def split_text(text):
    global sentID
    global textStr
    global language
    global tagList
    writer.characters("\n")
    text = Text(textStr, hint_language_code=language)
    for s in text.sentences:
        sentID += 1
        segments = s.split('__TAG__')
        
        sent = ' '.join(segments)
        if not sent.isspace():
            writer.startElement('s', { 'id': str(sentID) })

        i = 0
        while i < len(segments)-1:
            writer.characters(segments[i])
            if (len(tagList) > 0):
                tag = tagList.pop()
                if 'attrs' in tag:
                    writer.startElement(tag['name'], tag['attrs'])
                else:
                    writer.endElement(tag['name'])
            i += 1
        writer.characters(segments[-1])

        if not sent.isspace():
            writer.endElement('s')
        writer.characters("\n")

    textStr = ''
        


textStr   = ''
sentID    = 0
tagList   = list()

parser.StartElementHandler = start_element
parser.EndElementHandler = end_element
parser.CharacterDataHandler = char_data

writer.startDocument()
for line in sys.stdin:
    parser.Parse(line)

while (len(tagList) > 0):
    tag = tagList.pop()
    if 'attrs' in tag:
        writer.startElement(tag['name'], tag['attrs'])
    else:
        writer.endElement(tag['name'])
    writer.characters("\n")

    
writer.endDocument()
