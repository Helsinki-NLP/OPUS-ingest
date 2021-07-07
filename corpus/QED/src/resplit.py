""" re-split SRT files """

# pylint: disable=invalid-name, line-too-long

import sys
import os.path
import logging
import argparse
from mosestokenizer import MosesSentenceSplitter
from util import srt_reader, srt_reader2

logging.basicConfig(level=logging.INFO)
logging.getLogger('mosestokenizer').setLevel(logging.INFO)

logger = logging.getLogger('resplit')

parser = argparse.ArgumentParser(prog='srt-moses',
                                 description='Re-split srt text')

parser.add_argument('-i', '--input',
                    type=str,
                    required=True,
                    help='Input file')

args = parser.parse_args()

if not os.path.isfile(args.input):
    logging.warning('Not a file: %s', args.input)
    sys.exit()


language = args.input.split('.')[0]
splitter = MosesSentenceSplitter(language, more=False, even_more=True)

for ls in srt_reader2(args.input):

    #data = '\n'.join(ls)
    # print(data)
    for sentence in splitter(ls):
        print(sentence)


if splitter:
    splitter.close()
