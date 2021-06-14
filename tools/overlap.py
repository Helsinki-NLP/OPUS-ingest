#!/usr/bin/env python3
from argparse import ArgumentParser
import string
import sys

CHARS = string.digits + string.punctuation + '¿¡' + string.whitespace

parser = ArgumentParser()
parser.add_argument('-r', '--remove', action='store_true', help="Turn on remove mode: filter out sentences in test")
parser.add_argument('test', help='Test file to compute check overlap with')
args = parser.parse_args()

sents = set()
with open(args.test) as test_file:
    sents = {line.strip(CHARS).lower() for line in test_file}
size_sents = len(sents)

count = 0
for line in sys.stdin:
    segment = line.strip(CHARS).lower()
    present = segment in sents

    # Count lines and print found to stderr if not filtering
    if not args.remove and present:
        count += 1
        sents.remove(segment)
        sys.stderr.write('Found line: ' + line)
    # Print lines if not counting overlap
    elif args.remove and not present:
        sys.stdout.write(line)

if not args.remove:
    print('Overlap % with {}: {:.3f}'.format(sys.argv[1], count/size_sents*100))
