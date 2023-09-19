#!/usr/bin/env python3

import csv, sys
ipt = csv.reader(sys.stdin, skipinitialspace=True)
opt = csv.writer(sys.stdout, delimiter='\t', quoting=csv.QUOTE_MINIMAL, quotechar='"')
for line in ipt:
	_ = opt.writerow(line)
        
