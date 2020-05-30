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
            tid = trgdb[fields[2]]
            print("\t".join((sid,tid,fields[0])), flush=True);
        else:
            print("not found (trg): " + fields[2], file=sys.stderr, flush=True)
    else:
        print("not found (src): " + fields[1], file=sys.stderr, flush=True)

            

    count += 1
    if (count % 10000 == 0):
        print('.', end = '', file=sys.stderr, flush=True)
    if (count % 500000 == 0):
        print(count, file=sys.stderr, flush=True)

srcdb.close()
trgdb.close()

