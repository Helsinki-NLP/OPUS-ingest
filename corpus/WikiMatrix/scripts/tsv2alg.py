#!/usr/bin/python3
#-*-python-*-
#
#

import sys
import argparse
from sqlitedict import SqliteDict

parser = argparse.ArgumentParser(description='Hash a corpus')
parser.add_argument('-s', type=str, default='source.db',
                    help='source language database')
parser.add_argument('-t', type=str, default='target.db',
                    help='target language database')
args = parser.parse_args()


srcdb = SqliteDict(args.s)
trgdb = SqliteDict(args.t)

count = 0
for line in sys.stdin:
    fields = line.rstrip().split("\t");
    if fields[1] in srcdb:
        if fields[2] in trgdb:
            sid = srcdb[fields[1]]
            tid = srcdb[fields[2]]
            print("\t".join(sid,tid,fields[0]));

    count += 1
    if (count % 100000 == 0):
        print('.', end = '', flush=True)
    if (count % 5000000 == 0):
        print(count, flush=True)

srcdb.close()
trgdb.close()

