#!/usr/bin/env python3


import sys
import re
from xml.parsers.expat import ParserCreate, ExpatError, errors

_RE_COMBINE_WHITESPACE = re.compile(r"\s+")
_RE_REMOVE_XMLJUNK = re.compile(r"^.*<\?xml ")


def start_element(name, attrs):
    global inSent
    global sentStr
    
    if name == 's':
        inSent = True
        sentStr = ''

def end_element(name):
    global inSent
    global sentStr
    global _RE_COMBINE_WHITESPACE
    
    if name == 's':
        print(_RE_COMBINE_WHITESPACE.sub(" ", sentStr).strip())
        inSent = False
        sentStr = ''


def char_data(data):
    global inSent
    global sentStr
    if inSent:
        sentStr = sentStr + data

inSent    = False
sentStr   = ''

parser = ParserCreate()
parser.StartElementHandler = start_element
parser.EndElementHandler = end_element
parser.CharacterDataHandler = char_data

errorCount = 0;

for line in sys.stdin:
    if '<?xml ' in line:
        parser = ParserCreate()
        parser.StartElementHandler = start_element
        parser.EndElementHandler = end_element
        parser.CharacterDataHandler = char_data
        line = _RE_REMOVE_XMLJUNK.sub('<?xml ',line)
    try:
        parser.Parse(line)
    except ExpatError as err:
        # sys.stderr.write("Error:" + errors.messages[err.code] + "\n")
        # sys.stderr.write(f"parse error: {line}")
        errorCount += 1
        
if errorCount:
    sys.stderr.write(f"parse errors: {errorCount} lines\n")
    
