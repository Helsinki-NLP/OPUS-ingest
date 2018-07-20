# -*-makefile-*-
#


include ../Makefile.def

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

all: corpus web-corpus

corpus:
	${MAKE} all-align

web-corpus:
	${MAKE} tmx
	${MAKE} moses


include ../../Makefile.def
include ../../Makefile.align
include ../../Makefile.html
