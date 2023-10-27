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


# TSV2OPUS = tsv2opus
TSV2OPUS = ${HOME}/.local/perl5/bin/tsv2opus


## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} xml
#	${MAKE} extra
	${MAKE} publish


.PHONY: extra
extra:
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index


xml: raw
	mkdir -p $@ log
	mv $</??-?? $@/
	${MAKE} $@/Makefile
	${MAKE} -C $@ create-align-files
	${MAKE} annotate

raw: src
	mkdir -p $@
	cd $@ && cat ../$</zh-ja/zh-ja.bicleaner05.txt |\
	${UNICODE_CLEANUP} |\
	${TSV2OPUS} -z -b jparacrawl.zh-ja -s zh -t ja -S 2 -T 3 -O 0 -P 1
	cd raw && cat ../$</en-ja/en-ja.bicleaner05.txt |\
	${UNICODE_CLEANUP} |\
	${TSV2OPUS} -z -b jparacrawl.en-ja -s en -t ja -S 3 -T 4 -O 1 -P 2


URL_JAEN = http://www.kecl.ntt.co.jp/icl/lirg/jparacrawl/release/3.0/bitext/en-ja.tar.gz
URL_ZHJA = http://www.kecl.ntt.co.jp/icl/lirg/jparacrawl/release/2.0/bitext/zh-ja.tar.gz

src:
	mkdir -p $@
	wget -qq -O $@/zh-ja.tar.gz ${URL_ZHJA}
	wget -qq -O $@/en-ja.tar.gz ${URL_JAEN}
	tar -C $@ -xzf $@/zh-ja.tar.gz
	tar -C $@ -xzf $@/en-ja.tar.gz
	rm -f $@/zh-ja.tar.gz $@/en-ja.tar.gz
	mv $@/en-ja/LICENSE .
	mv $@/en-ja/CITATION .




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


OPUSTOKENIZER := ${OPUSTOOLS}/opus-tokenizer.py

include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


