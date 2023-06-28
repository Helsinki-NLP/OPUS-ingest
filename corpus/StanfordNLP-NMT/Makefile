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

LANGUAGES = en cs de vi

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

.PHONY: fetch
fetch: iwslt15.en-vi.en wmt14.en-de.en wmt14.en-de.de iwslt15.en-vi.vi wmt15.en-cs.en wmt15.en-cs.cs

wmt15.en-cs.en:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/wmt15.en-cs/train.en |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l en > wmt15.en-cs.en

wmt15.en-cs.cs:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/wmt15.en-cs/train.cs |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l cs > wmt15.en-cs.cs

wmt14.en-de.en:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/wmt14.en-de/train.en |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l en > wmt14.en-de.en

wmt14.en-de.de:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/wmt14.en-de/train.de |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l de > wmt14.en-de.de

iwslt15.en-vi.en:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/iwslt15.en-vi/train.en |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l en > iwslt15.en-vi.en

iwslt15.en-vi.vi:
	wget -O - -qq https://nlp.stanford.edu/projects/nmt/data/iwslt15.en-vi/train.vi |\
	${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l vi > iwslt15.en-vi.vi



## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus

## convert
.PHONY: convert
convert: xml/en-vi.xml.gz xml/de-en.xml.gz xml/cs-en.xml.gz

xml/cs-en.xml.gz:
	${MAKE} fetch
	mkdir -p raw xml
	cd raw && ${MOSES2OPUS} -z -s cs -t en -b wmt15 ../wmt15.en-cs.cs ../wmt15.en-cs.en |\
	gzip -c > ../$@

xml/de-en.xml.gz:
	${MAKE} fetch
	mkdir -p raw xml
	cd raw && ${MOSES2OPUS} -z -s de -t en -b wmt14 ../wmt14.en-de.de ../wmt14.en-de.en |\
	gzip -c > ../$@

xml/en-vi.xml.gz:
	${MAKE} fetch
	mkdir -p raw xml
	cd raw && ${MOSES2OPUS} -z -s en -t vi -b wmt14 ../iwslt15.en-vi.en ../iwslt15.en-vi.vi |\
	gzip -c > ../$@

