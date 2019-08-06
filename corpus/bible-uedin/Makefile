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
	${MAKE} bitexts
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


BITEXTS = ${patsubst %,${CORPUSXML}/%.xml.gz,${LANGPAIRS}}

.PHONY: bitexts
bitexts: ${BITEXTS}

${BITEXTS}: ${CORPUSRAW}
	@mkdir -p ${dir $@}
	echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >> ${@:.gz=}
	echo '<cesAlign version="1.0">' >> ${@:.gz=}
	for s in ${wildcard ${CORPUSRAW}/${firstword ${subst -, ,${notdir $@}}}/*.xml.gz}; do \
	  for t in ${wildcard ${CORPUSRAW}/${lastword ${subst -, ,${notdir ${@:.xml.gz=}}}}/*.xml.gz}; do \
	    perl scripts/verse-align.pl $$s $$t | \
		grep 'link' | \
		sed "s#${CORPUSRAW}/##g" >> ${@:.gz=}; \
	  done \
	done
	echo '</cesAlign>' >> ${@:.gz=}
	gzip -f ${@:.gz=}

