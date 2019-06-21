
include ../Makefile.def
include Makefile.def

.PHONY: all
all:
	${MAKE} -C raw all
	${MAKE} -C xml all
	${MAKE} annotate
	${MAKE} wordalign
	${MAKE} publish

# 	${MAKE} udparse
# 	rm -fr data



# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.release
include ../Makefile.udparse
include ../Makefile.submit
