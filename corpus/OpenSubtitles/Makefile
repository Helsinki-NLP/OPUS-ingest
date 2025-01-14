# -*-makefile-*-

include Makefile.def
include ../Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} -C raw all
	${MAKE} -C devtest-xml all
	${MAKE} -C devtest-raw all
	${MAKE} -C intra all


.PHONY: all-jobs
all-jobs:
	${MAKE} -C src all-jobs
	${MAKE} -C xml all-jobs
	${MAKE} -C raw all-jobs
	${MAKE} -C devtest-xml all-jobs
	${MAKE} -C devtest-raw all-jobs
	${MAKE} -C intra all-jobs


.PHONY: testsets
testsets:
	${MAKE} -C devtest-xml all
	${MAKE} -C devtest-raw all




## OLD?
intraling-website: ${OPUSPUB}/${CORPUS}-alt-${VERSION}.php

${OPUSPUB}/${CORPUS}-alt-${VERSION}.php:
	scripts/make-intraling-website.pl ${CORPUS} ${VERSION} > $@
	chmod 644 $@


# include som standard OPUS variables/targets

include ../Makefile.process
include ../Makefile.release
include ../Makefile.submit

