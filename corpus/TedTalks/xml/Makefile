# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)))

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

all: corpus web-corpus


include ../../Makefile.align
include ../../Makefile.html

corpus:

web-corpus:
	${MAKE} moses tmx


