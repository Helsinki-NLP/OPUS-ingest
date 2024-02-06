#!/usr/bin/env python3


import argparse
import xml.parsers.expat
import zipfile
import os
import urllib.request
import sqlite3
import sys
from os.path import exists



storage_url_base = 'https://object.pouta.csc.fi/OPUS-'


parser = argparse.ArgumentParser(prog='opus_sentid_index',
    description='Read OPUS documents and extract sentence IDs and row numbers from an index DB')

parser.add_argument('-d', '--database', help='Database', required=True)
parser.add_argument('-c', '--corpus', help='Corpus name', required=True)
parser.add_argument('-r', '--release', help='Release version', required=True)
parser.add_argument('-l', '--language', help='Language', required=True)
parser.add_argument('-f', '--file_name',help='File name (if not given, prints all files)')
parser.add_argument('-v', '--verbose', help='verbose output', action='store_true', default=False)

args = parser.parse_args()

verbose = args.verbose;

corpus    = args.corpus
release   = args.release
data_url  = storage_url_base + corpus + '/' + release + '/raw/' + args.language + '.zip'
data_file = corpus + '_' + release + '_raw_' + args.language + '.zip'



if not exists(data_file):
    sys.stderr.write(f"Downloading {data_url}\n")
    urllib.request.urlretrieve(data_url, data_file)
    
lzip = zipfile.ZipFile(data_file)


def start_element(name, attrs):
    global inSent, sentStr, sentCount, sentID
    global parCount, parID
              
    if name == 's':
        inSent = True
        sentCount += 1
        sentStr = ''
        if 'id' in attrs:
            sentID = attrs['id']
        else:
            sentID = str(sentCount)
        if not sentCount % 2000:
            sys.stderr.write('.')
            if not sentCount % 100000:
                sys.stderr.write(f" {sentCount}\n")
            sys.stderr.flush()

    elif name == 'p' or name == 'P':
        parCount += 1
        if 'id' in attrs:
            parID = attrs['id']
        else:
            parID = str(sentCount)


            
def end_element(name):
    global inSent, sentStr, sentID
    global parStr, parID
    global corpus, release, document
    global cur, con, verbose
        
    if name == 's':
        sentStr = sentStr.lstrip().rstrip()
        res = cur.execute("""SELECT ROWID FROM sentences WHERE sentence = ?""", [sentStr])
        record = res.fetchone()
        if record:
            print("\t".join([str(record[0]),corpus,release,document,str(parID),str(sentID),str(len(sentStr))]))
        else:
            ## insert a new sentence!
            if verbose:
                sys.stderr.write('NEW SENTENCES - ' + sentID + ': ' + sentStr + "\n")
            cur.execute("""INSERT OR IGNORE INTO sentences VALUES(?)""", [sentStr])
            con.commit()                
            res = cur.execute("""SELECT ROWID FROM sentences WHERE sentence = ?""", [sentStr])
            record = res.fetchone()
            if record:
                print("\t".join([str(record[0]),corpus,release,document,str(parID),str(sentID),str(len(sentStr))]))
            else:
                sys.stderr.write('FAILED TO INSERT - ' + sentID + ': ' + sentStr + "\n")

    elif name == 'p' or name == 'P':
        parID = 0

        sentStr = ''
        inSent = False


def char_data(data):
    global inSent
    global sentStr
    if inSent:
        sentStr = sentStr + data


## wait for max 2 hours
# con = sqlite3.connect(args.database, timeout=7200, isolation_level='EXCLUSIVE')
con = sqlite3.connect(args.database, timeout=7200)
con.execute("PRAGMA journal_mode=WAL")
cur = con.cursor()

cur.execute("CREATE TABLE IF NOT EXISTS sentences ( sentence TEXT UNIQUE PRIMARY KEY NOT NULL )")

count = 0

for filename in lzip.namelist():
    if filename[-4:] == '.xml':

        parser = xml.parsers.expat.ParserCreate()
        parser.StartElementHandler = start_element
        parser.EndElementHandler = end_element
        parser.CharacterDataHandler = char_data

        inSent    = False
        sentStr   = ''
        sentID    = ''
        sentCount = 0
        parCount  = 0
        parID     = 0

        errorCount = 0
        
        document  = '/'.join(filename.split('/')[2:])

        if verbose:
            sys.stderr.write(f"process {filename} ({count} sentences done)\n")
        with lzip.open(filename, 'r') as f:
            for line in f:
                try:
                    parser.Parse(line)
                except:
                    errorCount += 1
                    if verbose:
                        sys.stderr.write(f"error parsing {line}\n")

        count += sentCount
        if errorCount > 0:
            sys.stderr.write(f"XML parsing errors for {filename}: {errorCount} lines\n")


sys.stderr.write(f"A total of {count} sentences found\n")
os.unlink(data_file)


