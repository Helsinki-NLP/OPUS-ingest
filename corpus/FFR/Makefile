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
	${MAKE} fetch
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


GITHUB_URL = https://raw.githubusercontent.com/bonaventuredossou/ffr-v1/master

# BASIC_FILTERS = | perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' \
#		| perl -CS -pe 's/\&\s*\#\s*160\s*\;/ /g' \
#		| perl -pe 's/[\p{C}-[\n\t]]/ /g;' \
#		| recode -f utf8..utf16 | recode -f utf16..utf8

BASIC_FILTERS := | ${UNICODE_CLEANUP}

fetch:
	mkdir -p src
	wget -O src/ffr_daily_for_emnlp.fon-fr.tsv \
		${GITHUB_URL}/FFR-Dataset/FFR%20Dataset%20v2/ffr_daily_for_emnlp.txt
	wget -O src/ffr_dataset_v2.fon-fr.tsv \
		${GITHUB_URL}/FFR-Dataset/FFR%20Dataset%20v2/ffr_dataset_v2.txt
	wget -O src/Fon_French_Parallel_Data.fon-fr.tsv \
		${GITHUB_URL}/FFR-Dataset/FFR_Daily_Dialogues/Fon_French_Parallel_Data.txt
	dos2unix src/*.tsv
#	wget -O src/ffr_dataset_fon_fr_with_diacritics.fon-fr.tsv \
#		${GITHUB_URL}/FFR-Dataset/ffr_dataset_fon_fr_with_diacritics.txt
#	wget -O - ${GITHUB_URL}/FFR-Dataset/FFR_Daily_Dialogues/Fon_French_Parallel_Data_25377.csv |\
#	tail -n +2 | tr "," "\t" > src/Fon_French_Parallel_Data_25377.fon-fr.tsv



## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	-mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files


${CONVERTED}: %_done: %
	@echo "convert $<"
	@mkdir -p raw xml log
	@if [ $(suffix $<) == .gz ]; then \
	  cd raw; \
	  ${GZIP} -cd < ../$< |\
	  ${TSV2OPUS} -z \
		-s $(firstword $(subst .,,$(subst -, ,$(suffix $(<:.tsv.gz=))))) \
		-t $(lastword $(subst .,,$(subst -, ,$(suffix $(<:.tsv.gz=))))) \
		-b $(notdir $(basename $(<:.tsv.gz=))); \
	else \
	  cd raw; \
	  ${TSV2OPUS} -z \
		-s $(firstword $(subst .,,$(subst -, ,$(suffix $(<:.tsv=))))) \
		-t $(lastword $(subst .,,$(subst -, ,$(suffix $(<:.tsv=))))) \
		-b $(notdir $(basename $(<:.tsv.gz=))) < ../$<; \
	fi
	@touch $@

