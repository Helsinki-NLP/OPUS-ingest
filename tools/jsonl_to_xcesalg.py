#!/usr/bin/env python3

import argparse
import xml.parsers.expat
import polyglot
from polyglot.text import Text, Word
from xml.sax.saxutils import XMLGenerator
from xml.sax.xmlreader import AttributesNSImpl
import sys


parser = argparse.ArgumentParser()
parser.add_argument("-l", "--language", type=str, default="en",
                    help="Language to be split (ISO-639-1 landuage code)")
args = parser.parse_args()
language = args.language

parser = xml.parsers.expat.ParserCreate()
writer = XMLGenerator(sys.stdout, 'utf-8')


## list of XML/HTML tags we consider to delimit content
## we want to segment into sentences
##
## TODO: what kind of relevant tags are missing here?

contentTags = {'p': 1,
               'li': 1,
               'h1': 1,
               'h2': 1,
               'h3': 1,
               'h4': 1,
               'div': 1,
               'tr': 1,
               'th': 1}


## string for marking XML tags to be inserted back
## into the string after sentence splitting

tagMarker = '__tag__'


## XML parser handles

def start_element(name, attrs):
    global textStr
    global contentTags
    global tagList
    global tagMarker
    
    if name in contentTags:
        if textStr:
            split_text(textStr)
        writer.startElement(name, attrs)
    else:
        textStr = textStr + tagMarker
        tag = {'name': name, 'attrs': attrs}
        tagList.insert(0,tag)

def end_element(name):
    global textStr
    global contentTags
    global tagList
    global tagMarker
    
    if name in contentTags:
        if textStr:
            split_text(textStr)
        writer.endElement(name)
    else:
        textStr = textStr + tagMarker
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
    global tagMarker

    openTags = list()
    
    writer.characters("\n")
    text = Text(textStr, hint_language_code=language)
    for s in text.sentences:

        ## split into segments that are divided by XML tags
        ## merge into a sentence string without XML tags to make
        ## it possible to check whether it is more than just whitespaces
        
        segments = s.split(tagMarker)
        sent = ' '.join(segments)

        ## start a new sentence (unless it's all whitespace characters)
        ## re-open XML tags that are spilling over from the previous sentence        

        if not sent.isspace():
            sentID += 1
            writer.startElement('s', { 'id': str(sentID) })
            for i in range(len(openTags)):
                writer.startElement(openTags[i]['name'], openTags[i]['attrs'])

        
        ## run through all segments and insert XML tags we saved in tagList
        ## the final segment comes after the last XML tag we have inserted
                
        for i in range(len(segments)-1):
            writer.characters(segments[i])
            if (len(tagList) > 0):
                tag = tagList.pop()
                if 'attrs' in tag:
                    writer.startElement(tag['name'], tag['attrs'])
                    openTags.append(tag)
                else:
                    writer.endElement(tag['name'])
                    if (len(openTags)):
                        openTags.pop()
        
        writer.characters(segments[-1])

        
        ## close the sentence unless it was not opened (just whitespaces)
        ## close all XML tags that are still open to ensure well-formedness
        ## those will be re-opened in the next sentence again to ensure consistency
        
        if not sent.isspace():
            for i in reversed(range(len(openTags))):
                writer.endElement(openTags[i]['name'])
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
