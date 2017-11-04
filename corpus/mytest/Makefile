# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} corpus
	${MAKE} publish

## standard procedures are specified in the following makefiles
##
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.html .......... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing


include ../Makefile.process
include ../Makefile.html
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


# include ../Makefile.tokenize
include ../Makefile.tag
# include ../Makefile.annotate
