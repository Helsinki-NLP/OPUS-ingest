
include ../Makefile.def
include Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} annotate
	rm -fr data
	${MAKE} wordalign
	${MAKE} publish


# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.udparse
include ../Makefile.submit
