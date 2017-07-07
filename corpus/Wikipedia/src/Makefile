# -*-makefile-*-
#
# * this makefile should produce gzipped text-files in subdirectories
#   specifying the language of the file (2-letter codes)
# * all text files have to be in UTF-8!!!
# * parallel documents must have the same name!!
#

include ../Makefile.def
include ../../Makefile.def

LANGPAIRS = $(notdir $(wildcard Wikipedia_Corpora/????))
LANGPAIR = ${firstword ${LANGPAIRS}}

SRC = $(shell echo ${LANGPAIR} | sed 's/..$$//')
TRG = $(shell echo ${LANGPAIR} | sed 's/^..//')

FILES = $(patsubst %.txt,%,\
		$(patsubst Wikipedia_Corpora/${LANGPAIR}/${TRG}-%,%,\
		$(wildcard Wikipedia_Corpora/${LANGPAIR}/${TRG}*.txt)))

WIKISRCFILES = $(patsubst %.${SRC},%,$(wildcard wiki*.$(SRC)-$(TRG).$(SRC)))

.PHONY: all
all: all.converted

all.converted: Wikipedia\ Corpora.zip
	unzip Wikipedia\ Corpora.zip
	mv Wikipedia\ Corpora Wikipedia_Corpora
	${MAKE} move-wiki-files
	${MAKE} convert-wiki-files
	rm -fr Wikipedia_Corpora
	rm -f wiki*
	mkdir -p ../raw ../xml
	cp -R ?? ../raw/
	cp -R ??-?? ../xml/
	perl -i -p -e 's/\.xml/\.xml\.gz/' ../xml/??-??/*.xml
	gzip -f ../xml/??-??/*.xml
	gzip -f ../raw/??/*.xml
	rm -fr ?? ??-??
	touch $@

.PHONY: move-wiki-files convert-wiki-files
move-wiki-files:
	for l in ${LANGPAIRS}; do\
	  ${MAKE} LANGPAIR=$$l $$l.moved;\
	done
	mv Wikipedia_Corpora/plen/wiki.en wiki.pl-en.en
	mv Wikipedia_Corpora/plen/wiki.pl wiki.pl-en.pl
	mv Wikipedia_Corpora/*/wiki* .

convert-wiki-files:
	for l in ${LANGPAIRS}; do\
	  ${MAKE} LANGPAIR=$$l $$l.converted;\
	done

${LANGPAIR}.moved:
	for f in ${FILES}; do\
	  mv Wikipedia_Corpora/${LANGPAIR}/${SRC}-$$f*.txt wiki$$f.${SRC}-${TRG}.${SRC};\
	  mv Wikipedia_Corpora/${LANGPAIR}/${TRG}-$$f*.txt wiki$$f.${SRC}-${TRG}.${TRG};\
	done
	touch $@

${LANGPAIR}.converted:
	for s in ${WIKISRCFILES}; do \
	  letsmt_convert -i moses -o xces \
		$$s.${SRC} $$s.${TRG} $$s.xml; \
	done
	touch $@
