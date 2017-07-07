# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
		     $(notdir $(wildcard ${CORPUSRAW}/???)) \
		     $(notdir $(wildcard ${CORPUSRAW}/????)))

all: corpus web-corpus

include ../../Makefile.align
include ../../Makefile.html

corpus:

web-corpus:
	${MAKE} OPUS2MOSES=../scripts/xces2plain moses tmx


