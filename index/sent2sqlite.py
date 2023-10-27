#!/usr/bin/env python3

import sys
import sqlite3

con = sqlite3.connect(sys.argv[1])
cur = con.cursor()

cur.execute("CREATE TABLE IF NOT EXISTS sentences ( sentence TEXT UNIQUE PRIMARY KEY NOT NULL )")

buffer = []
buffersize = 100000
bufferCount = 0

for line in sys.stdin:
    buffer.append(tuple([line.rstrip()]))
    if len(buffer) >= buffersize:
        cur.executemany("""INSERT OR IGNORE INTO sentences VALUES(?)""", buffer)
        con.commit()
        buffer = []
        
        bufferCount += 1
        sys.stderr.write('.')
        if not bufferCount % 100:
            sys.stderr.write(f" {bufferCount} * {buffersize}\n")
        sys.stderr.flush()



if len(buffer) > 0:
    cur.executemany("""INSERT OR IGNORE INTO sentences VALUES(?)""", buffer)
    con.commit()
