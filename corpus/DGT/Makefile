

include ../Makefile.def
include Makefile.def


.PHONY: all
all:
	${MAKE} convert_in_tmp
	${MAKE} annotate
	${MAKE} publish


#	${MAKE} -C raw all
#	${MAKE} -C xml all
#	${MAKE} annotate
#	${MAKE} publish

# 	${MAKE} udparse
# 	rm -fr data
#	${MAKE} wordalign
#	${MAKE} publish


.PHONY: convert_in_tmp
convert_in_tmp:
	mkdir -p ${TMPDIR}/DGT/raw
	mkdir -p ${TMPDIR}/DGT/xml
	rm -f rawtmp xmltmp
	ln -s ${TMPDIR}/DGT/raw rawtmp
	ln -s ${TMPDIR}/DGT/xml xmltmp
	cp raw/Makefile rawtmp/
	cp xml/Makefile xmltmp/
	${MAKE} -C rawtmp all
	mv ${TMPDIR}/DGT/raw/??-?? ${TMPDIR}/DGT/xml/
	${MAKE} -C xmltmp PROJECT_HOME=${PWD}/ all
	rsync -zav rawtmp/* raw/
	rsync -zav xmltmp/* xml/
	find ${TMPDIR}/DGT/raw -delete
	find ${TMPDIR}/DGT/xml -delete
	rm -f rawtmp xmltmp


## run word alignment
## - first create all info files (for estimating memory requirements)
## - then start all alignment jobs
run-wordalign: wordalign/Makefile
	${MAKE} ces_info
	${MAKE} -C wordalign submit-all





# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.release
include ../Makefile.udparse
include ../Makefile.submit
