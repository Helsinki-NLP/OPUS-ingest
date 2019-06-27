# -*-makefile-*-
#


include ../Makefile.def

# sentence-align all document pairs

all:
	${MAKE} SENTALIGN=../scripts/align.pl all-align
	find . -type d -empty | xargs rmdir

include ../../Makefile.def
include ../../Makefile.align
