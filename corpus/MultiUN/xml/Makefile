# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

LANGUAGES = ar de en es fr ru zh

all: corpus web-corpus

corpus: create-align-files

web-corpus: tmx moses

include ../../Makefile.align
include ../../Makefile.html
