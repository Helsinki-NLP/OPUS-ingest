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

SHELL := bash

include Makefile.def
include ../Makefile.def


## LANGUAGES = unique file extensions of files in src (.gz will be removed)
## FILES = file basenames

ifneq ($(wildcard src),)
  LANGUAGES := $(sort $(patsubst src/data_%.txt.train,%,$(wildcard src/data_*.train)))
else
  LANGUAGES := bn en fil hi id ja khm lo ms my th vi zh
endif



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


continue:
	${MAKE} annotate
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


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate

.PHONY: fetch
fetch: src

ALT-Parallel-Corpus-${RELEASE_DATE}:
	wget https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/$@.zip
	unzip $@.zip
	rm -f $@.zip

tools: ALT-Parallel-Corpus-${RELEASE_DATE}
	wget https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/$@.zip
	wget https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/URL-train.txt
	wget https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/URL-dev.txt
	wget https://www2.nict.go.jp/astrec-att/member/mutiyama/ALT/URL-test.txt
	unzip $@.zip
	gzip -f URL-*.txt
	sed 's/20190531/${RELEASE_DATE}/' < tools/doit.sh | \
	sed 's/bg en fil id ja khm lo ms my th vi zh/bg en fil hi id ja khm lo ms my th vi zh/'  \
	> tools/split.sh
	chmod +x tools/split.sh
	rm -f $@.zip
	cp $</README.txt INFO

src: tools
	cd tools && ./split.sh
	mkdir -p src
	mv tools/data_*.train src/
	mv src/data_bg.txt.train src/data_bn.txt.train




## change this if moses2opus is not in your PATH
# MOSES2OPUS = moses2opus
MOSES2OPUS = ${PWD}/scripts/alt2opus

## convert
.PHONY: convert
convert: src
	${MAKE} raw

raw:
	mkdir -p raw xml
	( cd raw; \
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ "$$s" \< "$$t" ]; then \
	      echo "processing $$s-$$t"; \
	      ${MOSES2OPUS} -z -s $$s -t $$t -b data_train \
		../src/data_$$s.txt.train  ../src/data_$$t.txt.train |\
	      gzip -c > ../xml/$$s-$$t.xml.gz; \
	    fi \
	  done \
	done )

