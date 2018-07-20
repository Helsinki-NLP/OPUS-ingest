# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

all: corpus web-corpus

include ../../Makefile.align
include ../../Makefile.html

corpus: create-align-files

web-corpus: moses tmx


