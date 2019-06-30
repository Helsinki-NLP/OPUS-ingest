# -*-makefile-*-

include Makefile.def
include ../Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} annotate
	${MAKE} publish

#	${MAKE} html
#	${MAKE} cwb-index
#	rm -fr data



## run word alignment
## - first create all info files (for estimating memory requirements)
## - then start all alignment jobs
run-wordalign: wordalign/Makefile
	${MAKE} ces_info
	${MAKE} -C wordalign submit-all


.PHONY: real-clean
real-clean:
	${MAKE} clean-xml
	${MAKE} clean-raw


# include som standard OPUS variables/targets

include ../Makefile.process
# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
include ../Makefile.udparse

