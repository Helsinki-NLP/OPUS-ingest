""" re-split SRT files """

# pylint: disable=invalid-name, line-too-long

import sys
import os.path
import logging
import argparse
from mosestokenizer import MosesSentenceSplitter

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

lines = []

if not os.path.isfile(args.input):
    logging.warning('Not a file: %s', args.input)
    sys.exit()

follows = False

with open(args.input) as f:
    for line in f.readlines():
        if '-->' in line:
            follows = True
            continue
        elif follows:
            line = line.rstrip()
            if line:
                lines.append(line)
            else:
                follows = False

language = args.input.split('.')[0]

if lines:
    splitter = MosesSentenceSplitter(language, more=False)

    data = '\n'.join(lines)
    for sentence in splitter([data]):
        print(sentence)

        splitter.close()
else:
    print()
