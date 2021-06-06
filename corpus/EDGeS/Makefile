# -*-makefile-*-
#


include Makefile.def
include ../Makefile.def

## make all:
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} annotate
#	${MAKE} udparse
#	${MAKE} wordalign
	${MAKE} -j 1 OPUSCWB=${OPUSHOME}/cwb-restricted cwb-index
	cd ${OPUSHOME}/cwb-restricted/reg/${CORPUS}-${VERSION} && \
	perl ${PWD}/scripts/fix-reg-names.pl ${PWD}/src/OpusEDGeS_${VERSION}/langcodes_biblenames.tsv
#	${MAKE} publish

index:
	${MAKE} OPUSCWB=${OPUSHOME}/cwb-restricted cwb-index

fix-registry:
	cd ${OPUSHOME}/cwb-restricted/reg/${CORPUS}-${VERSION} && \
	perl ${PWD}/scripts/fix-reg-names.pl ${PWD}/src/OpusEDGeS_${VERSION}/langcodes_biblenames.tsv




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

