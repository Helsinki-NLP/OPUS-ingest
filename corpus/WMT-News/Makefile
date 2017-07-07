
include ../Makefile.def
include Makefile.def

.PHONY: corpus
corpus:
	${MAKE} -C raw all
	${MAKE} annotate
	${MAKE} -C xml all
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
include ../Makefile.html
include ../Makefile.udparse

