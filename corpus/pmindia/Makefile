# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TAB-separated format to OPUS
#
# - assumes that there are tsv files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (tsv2opus in PATH)
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


FILES     = $(sort ${wildcard src/*.tsv} ${wildcard src/*.tsv.gz})
LANGUAGES = $(sort $(subst -, ,$(subst .,,$(suffix $(basename $(notdir $(subst .gz,,${FILES})))))))
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

job-csc:
	${MAKE} HPC_CORES=4 HPC_MEM=8g HPC_TIME=8:00 all.submit

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


DOWNLOAD_URLS := `mtdata list | grep Statmt-pmindia-$(patsubst v%,%,${VERSION}) | cut -f2`

fetch:
	mkdir -p src
	cd src && for f in ${DOWNLOAD_URLS}; do wget $$f; done
	wget -O INFO https://data.statmt.org/pmindia/README


## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	-mv -f raw/*-* xml/
	${MAKE} -C xml create-align-files


## NOTE: source and target language are swapped (compared to file name)

${CONVERTED}: %_done: %
	@echo "convert $<"
	@mkdir -p raw xml log
	@if [ $(suffix $<) == .gz ]; then \
	  cd raw; \
	  ${GZIP} -cd < ../$< |\
	  ${TSV2OPUS} -z \
		-t $(firstword $(subst .,,$(subst -, ,$(suffix $(<:.tsv.gz=))))) \
		-s $(lastword $(subst .,,$(subst -, ,$(suffix $(<:.tsv.gz=))))) \
		-b $(notdir $(basename $(<:.tsv.gz=))); \
	else \
	  cd raw; \
	  ${TSV2OPUS} -z \
		-t $(firstword $(subst .,,$(subst -, ,$(suffix $(<:.tsv=))))) \
		-s $(lastword $(subst .,,$(subst -, ,$(suffix $(<:.tsv=))))) \
		-b $(notdir $(basename $(<:.tsv.gz=))) < ../$<; \
	fi
	@touch $@

