# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#
# - assumes that there are plain text files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (moses2opus in PATH)
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

ifneq ($(wildcard src/v2),)
  LANGUAGES = $(sort $(subst .,,$(suffix $(wildcard src/v2/*/train.*))))
  FILES     = $(sort $(basename $(wildcard src/v2/*/train.*)))
  CONVERTED = ${patsubst %,%_done,${FILES}}
else ifneq ($(wildcard ${CORPUSRAW}),)
  LANGUAGES = $(sort $(wildcard ${CORPUSRAW}/*))
endif




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
	${MAKE} raw
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


## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus

src/v2:
	mkdir -p src
	wget -O src/v2.zip 'https://ai4b-my.sharepoint.com/:u:/g/personal/sumanthdoddapaneni_ai4bharat_org/EXhX84sbTQhLrsURCU9DlUwBVyJ10cYK9bQQe1SMljf_yA?e=q7GJpb&download=1'
	cd src && unzip v2.zip
	rm -f src/v2.zip

raw:
	${MAKE} src/v2
	${MAKE} convert

## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	${MAKE} -C xml create-align-files

${CONVERTED}:
	mkdir -p raw xml log
	if [ $(words $(wildcard ${@:_done=.*})) -eq 2 ]; then \
	  p=$(patsubst src/v2/%/,%,$(dir $@)); \
	  s=$(subst .,,$(suffix $(firstword $(sort $(wildcard ${@:_done=.*}))))); \
	  t=$(subst .,,$(suffix $(lastword $(sort $(wildcard ${@:_done=.*}))))); \
	  S=$(firstword $(sort $(wildcard ${@:_done=.*}))); \
	  T=$(lastword $(sort $(wildcard ${@:_done=.*}))); \
	  mkdir -p xml/$$p; \
	  cd raw; \
	  ${MOSES2OPUS} -z -s $$s -t $$t -b train.$$p ../$$S ../$$T |\
	  gzip -c > ../xml/$$p/train.$$p.xml.gz; \
	  cd ..; \
	fi
	touch $@

