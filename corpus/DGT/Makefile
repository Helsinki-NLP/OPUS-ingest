
include ../Makefile.def
include Makefile.def

.PHONY: all
all:
	${MAKE} -C raw all
	${MAKE} -C xml all
	${MAKE} annotate
	${MAKE} publish

# 	${MAKE} udparse
# 	rm -fr data
#	${MAKE} wordalign
#	${MAKE} publish


## run word alignment
## - first create all info files (for estimating memory requirements)
## - then start all alignment jobs
run-wordalign: wordalign/Makefile
	${MAKE} ces_info
	${MAKE} -C wordalign submit-all


find-problems:
	for l in ${LANGUAGES}; do \
	  ls -al xml/$$l | grep ' 60 ' |\
	  sed "s#^.* #$$l/#" >> $@; \
	done




# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.release
include ../Makefile.udparse
include ../Makefile.submit
