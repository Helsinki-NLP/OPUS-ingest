
include ../Makefile.def
include Makefile.def

.PHONY: all
all:
	${MAKE} -C raw all
	${MAKE} annotate
	${MAKE} -C xml all
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} publish


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
include ../Makefile.process
include ../Makefile.release
include ../Makefile.submit
include ../Makefile.udparse


