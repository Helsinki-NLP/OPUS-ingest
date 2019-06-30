# -*-makefile-*-
#
# template for converting translated plain text files to OPUS
#
# - assumes that there are plain text files in src/
# - assumes that they are sorted into proper subdir's
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
# - depending on the size you may want to run things in steps / parallel
#   (TODO: we need to document how)

include Makefile.def
include ../Makefile.def

## make all:
##
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} SENTALIGN=srtalign corpus
	${MAKE} publish

convert:
	${MAKE} -C src all

## run word alignment
## - first create all info files (for estimating memory requirements)
## - then start all alignment jobs
run-wordalign: wordalign/Makefile
	${MAKE} ces_info
	${MAKE} -C wordalign submit-all-wordalign


## standard procedures are specified in the following makefiles
##
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
