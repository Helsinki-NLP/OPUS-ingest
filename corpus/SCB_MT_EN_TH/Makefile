# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TAB-separated format to OPUS
#
# - assumes that there are tsv files in src/
#   with the file name in the format <corpus.xx-yy.tsv>
#   where <xx> is the source language ID
#         <yy> is the target language ID
#
#   (they may be compressed with gzip - additional suffix .gz is expected)
#
# - assumes that opus-tools are installed (tsv2opus in PATH)
#
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#
# TODO
# - does not work well for multilingual corpora yet
#   (converts for every language pair!)


include Makefile.def
include ../Makefile.def


## LANGUAGES = unique file extensions of files in src (.gz will be removed)
## FILES = file basenames


FILES     = $(sort ${wildcard scb*/*.tsv})
LANGUAGES = en th
CONVERTED = ${patsubst %,%_done,${FILES}}

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
	${MAKE} fetch
	${MAKE} csv2tsv
	${MAKE} convert
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


.PHONY: fetch
fetch:
	wget https://github.com/vistec-AI/dataset-releases/releases/download/scb-mt-en-th-2020_v1.0/scb-mt-en-th-2020.tar.gz
	tar -xzf scb-mt-en-th-2020.tar.gz
	rm -f scb-mt-en-th-2020.tar.gz

TSVFILES = $(patsubst %.csv,%.tsv,$(wildcard scb*/*.csv))
# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;s/\&\s*\#\s*160\s*\;/ /g;'

csv2tsv: ${TSVFILES}

${TSVFILES}: %.tsv: %.csv
	./csv2tsv.py < $< | tail -n +2 > $@


## change this if tsv2opus is not in your PATH
TSV2OPUS = tsv2opus


## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	-mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files


${CONVERTED}: %_done: %
	@echo "convert $<"
	@mkdir -p raw xml log
	cd raw && \
	${UNICODE_CLEANUP} < ../$< |\
	${TSV2OPUS} -z -s en -t th -b $(notdir ${<:.tsv=})
	@touch $@

