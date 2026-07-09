

import io
import sys

input = io.TextIOWrapper(sys.stdin.buffer, encoding='utf-8', errors='replace')

for line in input:
    print(line, end='')
    
