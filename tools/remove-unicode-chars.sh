#!/usr/bin/bash
#
# remove unwanted unicode characters in UTF-8 text
# by transliterating to LATIN1 and then back to UTF-8
#
# DANGER: this overwrites the original!
#

backup=$1.$(date +%F)
mv $1 $backup
iconv -c -f UTF-8 -t LATIN1//TRANSLIT < $backup | iconv -f LATIN1 -t UTF-8 > $1
if [ `diff $1 $backup | wc -l` -eq 0 ]; then
    echo "$1 remains unmodified"
    rm -f $backup
else
    echo "modified $1"
fi
