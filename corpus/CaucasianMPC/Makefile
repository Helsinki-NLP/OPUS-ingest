# -*-makefile-*-
#
#  TODO: need to fix inconsistent TSV files first
#

include Makefile.def
include ../Makefile.def


## LANGUAGES = unique file extensions of files in src (.gz will be removed)
## FILES = file basenames


FILES = ${wildcard Multilingual-Parallel-Corpus/*/*tsv}
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


## change this if tsv2opus is not in your PATH
TSV2OPUS = tsv2opus


.PHONY: fetch
fetch:
	git clone https://github.com/danielinux7/Multilingual-Parallel-Corpus.git


## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	-mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files




## TSV files are not consistent:
## e.g. ab-en is sometimes English in the first column and sometimes in the second
## --> need to check for each file and language pair!


${CONVERTED}: %_done: %
	@echo "convert $<"
	@mkdir -p raw xml log
	cd raw && \
	cat ../$< |\
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	${TSV2OPUS} -z \
		-s $(firstword $(subst -, ,$(word 2,$(subst /, ,$<)))) \
		-t $(lastword $(subst -, ,$(word 2,$(subst /, ,$<)))) \
		-b $(basename $(notdir $<))
	@touch $@

