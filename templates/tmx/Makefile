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
	${MAKE} import
#	${MAKE} extra
	${MAKE} publish

.PHONY: import
import:
	${MAKE} convert
	${MAKE} -C xml create-align-files
	${MAKE} annotate

.PHONY: extra
extra:
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index

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


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if tmx2opus is not in your PATH
TMX2OPUS = tmx2opus

# BASIC_FILTERS = | perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' \
#		| perl -CS -pe 's/\&\s*\#\s*160\s*\;/ /g' \
#		| perl -pe 's/[\p{C}-[\n\t]]/ /g;' \
#		| recode -f utf8..utf16 | recode -f utf16..utf8

BASIC_FILTERS := | ${UNICODE_CLEANUP}


.PHONY: convert
convert: ${TMXDONE} ${TMXGZDONE}
	${MAKE} xml/Makefile
	-mv -f raw/*-* xml/


## - do some basic tidying up to avoid problems
## - use tidy only if the file is not too big
##   tidy limit: 1GB compressed file size
## - then convert to OPUS XML

${TMXDONE}: %_done: %.tmx
	mkdir -p raw
	-if [ `stat -c%s $<` -ge 1073741824 ]; then \
	  cat $< ${BASIC_FILTERS} > $<.tmp; \
	else \
	  cat $< ${BASIC_FILTERS} | tidy -xml -utf8 -q > $<.tmp; \
	fi
	if [ -s $<.tmp ]; then \
	  cd raw && ${TMX2OPUS} -r -o ${notdir $(<:.tmx=.xml.gz)} ../$<.tmp; \
	else \
	  cd raw && ${TMX2OPUS} -r -o ${notdir $(<:.tmx=.xml.gz)} ../$<; \
	fi
	rm -f $<.tmp
	touch $@

## tidy limit: 250MB compressed file size

${TMXGZDONE}: %_done: %.tmx.gz
	mkdir -p raw
	-if [ `stat -c%s $<` -ge 268435456 ]; then \
	  gzip -cd $< ${BASIC_FILTERS} > $<.tmp; \
	else \
	  gzip -cd $< ${BASIC_FILTERS} | tidy -xml -utf8 -q > $<.tmp; \
	fi
	if [ -s $<.tmp ]; then \
	  cd raw && ${TMX2OPUS} -r -o ${notdir $(<:.tmx.gz=.xml.gz)} ../$<.tmp; \
	else \
	  cd raw && gzip -cd ../$< | ${TMX2OPUS} -r -o ${notdir $(<:.tmx=.xml.gz)}; \
	fi
	rm -f $<.tmp
	touch $@
