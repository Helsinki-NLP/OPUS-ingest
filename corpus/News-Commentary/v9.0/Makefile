
include ../Makefile.def
include Makefile.def

CORPUSHOME       = ${OPUSCORPORA}/${CORPUS}v9.0
CORPUSSRC        = ${CORPUSHOME}/src
CORPUSXML        = ${CORPUSHOME}/xml
CORPUSRAW        = ${CORPUSHOME}/raw
CORPUSPARSED     = ${CORPUSHOME}/parsed
CORPUSHTML       = ${OPUSHTML}/${CORPUS}v9.0

.PHONY: corpus
corpus:
	${MAKE} -C raw all
	${MAKE} -C xml all
	${MAKE} annotate
	rm -fr data


.PHONY: all
all:
	${MAKE} corpus
	${MAKE} web-corpus


.PHONY: web-corpus
web-corpus: tmx moses alg_samples html
	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}${VERSION}.php


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
