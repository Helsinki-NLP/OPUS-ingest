#!/usr/bin/env python3

import argparse
# import polyglot
# from polyglot.text import Text, Word
from xml.sax.saxutils import XMLGenerator
import sys
import os



import json
# import polyglot
# from polyglot.text import Text, Word


parser = argparse.ArgumentParser()
parser.add_argument("-s", "--source-language", type=str, default="en")
parser.add_argument("-t", "--target-language", type=str, default="is")

args = parser.parse_args()
srclang = args.source_language
trglang = args.target_language


if not os.path.isdir(srclang):
    os.mkdir(srclang)
if not os.path.isdir(trglang):
    os.mkdir(trglang)


algwriter = XMLGenerator(sys.stdout, 'utf-8')
algwriter.startDocument()
algwriter.startElement('cesAlign',{"version": "1.0"})
algwriter.characters("\n")

filename = ''
parid = ''
tid = 0

for line in sys.stdin:
    data = json.loads(line)
    ids = data['source_identifiers'].split(' ')
    srcsents = data[srclang].split("\t")
    trgsents = data[trglang].split("\t")

    pid,doc,sid = ids[0].split('/')
    pid,_ = pid.split('_')

    if filename != doc:

        if filename:
            if parid:
                srcwriter.endElement('p')
                trgwriter.endElement('p')
                srcwriter.characters("\n")
                trgwriter.characters("\n")
            srcwriter.endElement('text')
            trgwriter.endElement('text')
            srcwriter.characters("\n")
            trgwriter.characters("\n")
            srcwriter.endDocument()
            trgwriter.endDocument()
            algwriter.endElement('linkGrp')
            algwriter.characters("\n")
                    
        srcfile = open(f"{srclang}/{doc}", 'wb')
        srcwriter = XMLGenerator(srcfile, 'utf-8')
        srcwriter.startDocument()
        srcwriter.startElement('text',{})
        srcwriter.characters("\n")
        trgfile = open(f"{trglang}/{doc}", 'wb')
        tid = 0
        trgwriter = XMLGenerator(trgfile, 'utf-8')
        trgwriter.startDocument()
        trgwriter.startElement('text',{})
        trgwriter.characters("\n")
        algwriter.startElement('linkGrp',{"fromDoc": f"{srclang}/{doc}","toDoc": f"{trglang}/{doc}"})
        algwriter.characters("\n")
        filename = doc
            

    if parid != pid:
        if parid:
            srcwriter.endElement('p')
            trgwriter.endElement('p')
            srcwriter.characters("\n")
            trgwriter.characters("\n")
        srcwriter.startElement('p',{'id': pid})
        trgwriter.startElement('p',{'id': pid})
        srcwriter.characters("\n")
        trgwriter.characters("\n")
        parid = pid

    sids = []
    for i in ids:
        _,_,sid = i.split('/')
        sids.append(sid)
        srcwriter.startElement('s',{'id': sid})
        srcwriter.characters(srcsents.pop(0))
        srcwriter.endElement('s')
        srcwriter.characters("\n")

    tids = []
    for t in trgsents:
        tid = tid+1
        tids.append(tid)
        trgwriter.startElement('s',{'id': str(tid)})
        trgwriter.characters(t)
        trgwriter.endElement('s')
        trgwriter.characters("\n")

    sidstr = ' '.join(sids)
    tidstr = ' '.join(str(x) for x in tids)
    algwriter.startElement('link',{"xtargets": f"{sidstr};{tidstr}"})
    algwriter.endElement('link')
    algwriter.characters("\n")


if filename:
    if parid:
        srcwriter.endElement('p')
        trgwriter.endElement('p')
        srcwriter.characters("\n")
        trgwriter.characters("\n")
    srcwriter.endElement('text')
    trgwriter.endElement('text')
    srcwriter.characters("\n")
    trgwriter.characters("\n")
    srcwriter.endDocument()
    trgwriter.endDocument()
    algwriter.endElement('linkGrp')
    algwriter.characters("\n")
    algwriter.endElement('cesAlign')
    algwriter.characters("\n")
    
srcwriter.endDocument()
trgwriter.endDocument()
algwriter.endDocument()
