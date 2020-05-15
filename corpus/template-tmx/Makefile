# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TMX format (sentence aligned plain text) to OPUS
#
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#


include Makefile.def
include ../Makefile.def

## all TMX files in the src/ directory
## we will convert them to Moses and use moses2opus as the second step

TMXFILES   = ${wildcard src/*.tmx}
TMXGZFILES = ${wildcard src/*.tmx.gz}

TMXDONE    = ${TMXFILES:.tmx=_done}
TMXGZDONE  = ${TMXGZFILES:.tmx.gz=_done}

## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} convert
	${MAKE} xml/Makefile
	-mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files
	${MAKE} annotate
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index
	${MAKE} publish

## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if tmx2opus is not in your PATH
TMX2OPUS = tmx2opus

.PHONY: convert
convert: ${TMXDONE} ${TMXGZDONE}

${TMXDONE}: %_done: %.tmx
	mkdir -p raw
	cat $< | tidy -xml -utf8 > $<.tmp
	cd raw && ${TMX2OPUS} -o ${notdir $(<:.tmx=.xml.gz)} ../$<.tmp
	rm -f $<.tmp
	touch $@

${TMXGZDONE}: %_done: %.tmx.gz
	mkdir -p raw
	gzip -cd $< | tidy -xml -utf8 > $<.tmp
	cd raw && ${TMX2OPUS} -o ${notdir $(<:.tmx.gz=.xml.gz)} ../$<.tmp
	rm -f $<.tmp
	touch $@
