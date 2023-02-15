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

LANGUAGES = en is


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
	${MAKE} cleanup

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


fetch:
	wget https://repository.clarin.is/repository/xmlui/bitstream/handle/20.500.12537/24/Parice_dev_test.20.05.zip
	unzip Parice_dev_test.20.05.zip
	mv Parice_dev_test.20.05/csv/eea/eea_train_en.csv Parice_dev_test.20.05/csv/eea/eea_train_is.tmp
	mv Parice_dev_test.20.05/csv/eea/eea_train_is.csv Parice_dev_test.20.05/csv/eea/eea_train_en.csv
	mv Parice_dev_test.20.05/csv/eea/eea_train_is.tmp Parice_dev_test.20.05/csv/eea/eea_train_is.csv



TRAIN_DATA = $(sort $(subst _meta.csv,,$(subst _en.csv,,$(subst _is.csv,,\
		$(wildcard Parice_dev_test.20.05/csv/*/*_train_*.csv)))))

## convert
.PHONY: convert
convert: ${TRAIN_DATA}
	mkdir -p raw xml
	mv en is raw/
	mv en-is xml
	${MAKE} xml/Makefile
	${MAKE} -C xml create-align-files


${TRAIN_DATA}: %: %_meta.csv %_en.csv %_is.csv
	tr "\t" "_" < $< > $@.id
	paste $@_en.csv $@_is.csv $@.id > $@.tsv
	mkdir -p raw
	${TSV2OPUS} -z -s en -t is -b $(notdir $@) -O 2 -P 5 < $@.tsv

cleanup:
	rm -f Parice_dev_test.20.05.zip
	rm -fr Parice_dev_test.20.05
