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

LANGUAGES = en iu

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


## change this if moses2opus is not in your PATH
TSV2OPUS = tsv2opus


.PHONY: fetch
fetch: src/Nunavut-Hansard-Inuktitut-English-Parallel-Corpus-3.0

src/Nunavut-Hansard-Inuktitut-English-Parallel-Corpus-3.0:
	mkdir -p src
	wget -O src/data.tar.gz \
	https://nrc-digital-repository.canada.ca/eng/view/dataset/?id=c7e34fa7-7629-43c2-bd6d-19b32bf64f60
	tar -C src -xzf src/data.tar.gz
	rm -f src/data.tar.gz

.PHONY: convert
convert: src/Nunavut-Hansard-Inuktitut-English-Parallel-Corpus-3.0
	cp $</LICENSE .
	cp $</README INFO
	tr "\t" '_' < $</split/train.id > $</split/train.origin
	paste $</split/train.en $</split/train.iu $</split/train.origin |\
	grep -v '^		' > $</split/train.en-iu.tsv
	${TSV2OPUS} -O 2 -P 3 -s en -t iu -z -b nunavut_hansard < $</split/train.en-iu.tsv
	mkdir -p raw xml
	mv en iu raw/
	mv en-iu xml/
	${MAKE} xml/Makefile
	${MAKE} -C xml create-align-files
