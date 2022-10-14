# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

# VERSION = $(shell date +%F)


# make all:
#
# - fetch sources (src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (xml/Makefile)
# - make the download page (make html)
# - create CWB index for on-line search

.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} -C xml corpus
	${MAKE} udparse
	${MAKE} wordalign
	rm -fr data
	${MAKE} cwb-index
	${MAKE} publish


.PHONY: real-clean
real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
# include ../Makefile.tag
include ../Makefile.tokenize-fast

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse
