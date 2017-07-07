# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

LANGUAGES = $(sort $(notdir $(wildcard ${CORPUSRAW}/[a-z][a-z]) $(wildcard ${CORPUSRAW}/[a-z][a-z]_[A-Z][A-Z])))
SRC=ca
TRG=de

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

all: corpus web-corpus

corpus: create-align-files

web-corpus: tmx moses

include ../../Makefile.align
include ../../Makefile.html



remove-empty:
	mkdir -p ../empty-xml
	grep '^0$$' *-*.tmx.info |\
	sed 's/\.tmx\.info//' |\
	cut -f1 -d ':' |\
	sort | uniq | tr "\n" ' ' > empty.txt
	for f in `cat empty.txt`; do \
		mv $$f.* ../empty-xml/;\
	done
	rm empty.txt
	mv cn cn.info ../empty-xml/
	mv lb lb.info ../empty-xml/
	mv po po.info ../empty-xml/
	mv zh zh.info ../empty-xml/

