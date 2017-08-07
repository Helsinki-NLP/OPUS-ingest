#!/bin/bash

gzip -cd $1 | tidy -xml -utf8 -i -wrap 0 | gzip -c > $1.tidy.gz

