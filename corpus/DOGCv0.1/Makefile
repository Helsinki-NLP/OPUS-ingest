# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

# VERSION = $(shell date +%F)

CORPUSHOME       = ${OPUSCORPORA}/${CORPUS}v0.1
CORPUSSRC        = ${CORPUSHOME}/src
CORPUSXML        = ${CORPUSHOME}/xml
CORPUSRAW        = ${CORPUSHOME}/raw
CORPUSPARSED     = ${CORPUSHOME}/parsed
CORPUSHTML       = ${OPUSHTML}/${CORPUS}v0.1


corpus:
	${MAKE} -C src all
	${MAKE} annotate
	rm -fr data
	${MAKE} -C xml corpus

# make all:
#
# - fetch sources (src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (xml/Makefile)
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} corpus
	${MAKE} web-corpus
	rm -fr data

web-corpus:
	${MAKE} -C xml web-corpus
	${MAKE} html cwb-index
	${MAKE} cwb-index

real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
