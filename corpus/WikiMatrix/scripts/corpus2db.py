#!/usr/bin/python3
#-*-python-*-
#
#

import sys
import argparse
from sqlitedict import SqliteDict

parser = argparse.ArgumentParser(description='Hash a corpus')
parser.add_argument('-db', type=str, default='corpus.db',
                    help='database file name')
args = parser.parse_args()


mydict = SqliteDict(args.db)

count = 0
for line in sys.stdin:
    fields = line.rstrip().split("\t");
    mydict[fields[1]] = fields[0]
    count += 1
    if (count % 100000 == 0):
        print('.', end = '', flush=True)
        mydict.commit()
    if (count % 5000000 == 0):
        print(count, flush=True)
        mydict.commit()

mydict.commit()
mydict.close()
