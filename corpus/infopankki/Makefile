# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# from the OPUS resource repository to OPUS internal
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)


OPUSRR_DATA = /proj/OPUS/rsnapshots/daily.0/opusrr/media/letsmt/letsmt/www-data/infopankki
OPUSRR_USER = joerg


include Makefile.def
include ../Makefile.def


## make all:
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} convert
	${MAKE} annotate
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} publish

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




convert: ${CORPUSRAW}

${CORPUSRAW}: ${OPUSRR_DATA}/${OPUSRR_USER}/xml
	mkdir -p $@
	rsync -za --exclude '*\.git*' $</* $@/
	find $@ -name '*.xml' | xargs -P 8 gzip -f 
	mkdir -p ${CORPUSXML}
	mv -f $@/*-* ${CORPUSXML}/
	${MAKE} xml/Makefile
	${MAKE} -C ${CORPUSXML} create-align-files
