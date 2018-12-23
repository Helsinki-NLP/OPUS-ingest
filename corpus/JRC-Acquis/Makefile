
include ../Makefile.def
include Makefile.def

.PHONY: corpus
corpus:
	${MAKE} -C src all
	${MAKE} annotate
	rm -fr data

.PHONY: all
all:
	${MAKE} corpus
	${MAKE} web-corpus

.PHONY: web-corpus
web-corpus: html-local
#	${MAKE} tmx moses alg_samples
#	${MAKE} html
#	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}${VERSION}.php
#	${MAKE} cwb-index


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

