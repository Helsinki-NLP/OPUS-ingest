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

## align-timeout = 6 hours
# corpus: 
#	${MAKE} ALIGNTIMEOUT=21600 all-align

corpus: 
	${MAKE} SENTALIGN="uplug align/gma" all-align

web-corpus: moses tmx


