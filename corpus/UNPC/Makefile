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


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} publish

#	${MAKE} udparse
#	${MAKE} wordalign

run-wordalign: wordalign/Makefile
	${MAKE} ces_info
	${MAKE} -C wordalign submit-all


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


include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate

