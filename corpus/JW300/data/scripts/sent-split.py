""" Split data into sentences """

# pylint: disable=invalid-name

from typing import List, Tuple, Iterator
import logging
import os
import os.path
import sys
import re
import argparse
from tqdm import tqdm
from mosestokenizer import MosesSentenceSplitter, MosesPunctuationNormalizer

logger = logging.getLogger(__name__)
#logging.getLogger('mosestokenizer').setLevel(logging.WARNING)
logging.getLogger('mosestokenizer').setLevel(logging.INFO)

parser = argparse.ArgumentParser(prog='sent-split',
                                 description='Sentence split document with mosestokenizer')

parser.add_argument('-i', '--input',
                    type=str,
                    required=True,
                    help='Input directory')
parser.add_argument('-o', '--output',
                    type=str,
                    required=True,
                    help='Output directory')
parser.add_argument('-p', '--punkt',
                    action='store_true',
                    help='Normalize punctuation')
parser.add_argument('-r', '--realign',
                    action='store_true',
                    help='Realign input')

args = parser.parse_args()

if not os.path.isdir(args.input):
    logger.warning('Not a directory: %s', args.input)
    sys.exit()

if not os.path.isdir(args.output):
    logger.warning('Not a directory: %s', args.output)
    sys.exit()


def file_reader(inputfile: str, max_chunk_size: int = 100):
    """ Read in file in chunks """

    with open(inputfile) as f:
        chunk_size = 0
        data = []
        for line in f:
            line.rstrip('\n')
            data.append(line)
            doyield = False

            if line.strip().endswith('?'):
                doyield = True
            else:
                chunk_size += 1
                if chunk_size >= max_chunk_size:
                    if line.strip().endswith('.'):
                        doyield = True
            if doyield:
                # logger.info('yielding with chunk size %d', chunk_size)
                chunk_size = 0
                yield ''.join(data)
                data = []

        yield ''.join(data)


def directory_reader(indir: str) -> Iterator[Tuple[str, str]]:
    """ Read in a directory. Output: filename, data """

    for root, _dirs, files in os.walk(indir):

        for fn in files:
            fp = os.path.join(root, fn)
            for data in file_reader(fp):
                yield fn, data


def doc_splitter(document: str, docsplitter, punkt=None) -> Iterator[List[str]]:
    """ Converts document to sentences based on arguments """

    # Filter out empty lines
    docs = list(filter(lambda s: s.strip(), document.split('\n')))

    if punkt:
        docs = [punkt(doc) for doc in docs]

    if args.realign:
        docs = ['\n'.join(docs)]
        for sentence in docsplitter(docs):
            yield sentence
    else:
        # Feed items separately to moses-tokenizer to force proper splitting
        for doc in docs:
            # print(doc)
            for sentence in docsplitter([doc]):
                yield sentence


splitters = dict()
punkters = dict()

# Split Bible references correctly
bibleregexs = r'\b[A-Z][a-z]+\.$'
bibleregexe = r'^\d+:\d+[^\w]'

for filename, filedata in tqdm(directory_reader(args.input)):
    _s = filename.split('.')
    lang = _s[0]
    shortfn = '.'.join(_s[1:])

    if lang in splitters:
        splitter = splitters[lang]
    else:
        splitter = MosesSentenceSplitter(lang, more=False)
        splitters[lang] = splitter

    mosespunkt = None

    if args.punkt:
        if lang in punkters:
            mosespunkt = punkters[lang]
        else:
            mosespunkt = MosesPunctuationNormalizer(lang)
            punkters[lang] = mosespunkt

    # print(filename, lang, shortfn)
    langdir = '%s/%s' % (args.output, lang)
    if not os.path.isdir(langdir):
        os.mkdir(langdir)

    outfilename = '%s/%s/%s' % (args.output, lang, shortfn)

    with open(outfilename, 'a') as of:
        prev = None
        for sent in doc_splitter(filedata, splitter, punkt=mosespunkt):
            if not prev:
                prev = sent
            else:
                # print(re.search(bibleregexs, prev))
                # print(prev)
                # print(re.search(bibleregexe, sent))
                # print(sent)

                if re.search(bibleregexs, prev) and re.search(bibleregexe, sent):
                    # Bible quotation
                    prev = prev + ' ' + sent
                else:
                    print(prev, file=of, flush=True)
                    prev = sent
        if prev:
            print(prev, file=of, flush=True)

#    break

for splitter in splitters.values():
    if not splitter.closed:
        splitter.close()
