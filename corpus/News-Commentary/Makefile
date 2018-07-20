
include ../Makefile.def
include Makefile.def

CORPUSHOME       = ${OPUSCORPORA}/${CORPUS}11
CORPUSSRC        = ${CORPUSHOME}/src
CORPUSXML        = ${CORPUSHOME}/xml
CORPUSRAW        = ${CORPUSHOME}/raw
CORPUSPARSED     = ${CORPUSHOME}/parsed
CORPUSHTML       = ${OPUSHTML}/${CORPUS}11

.PHONY: corpus
corpus:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} annotate
	rm -fr data


.PHONY: all
all:
	${MAKE} corpus
	${MAKE} web-corpus


.PHONY: web-corpus
web-corpus: tmx moses alg_samples html


# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
