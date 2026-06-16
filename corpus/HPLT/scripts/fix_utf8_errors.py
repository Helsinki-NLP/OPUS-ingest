#!/usr/bin/env python3

import gzip
import sys

with gzip.open(sys.argv[1],'rt', encoding='utf-8', errors='replace') as file:
    for line in file:
        print(line.rstrip())
    
