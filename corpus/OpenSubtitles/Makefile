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


.PHONY: all-jobs
all-jobs:
	${MAKE} -C src all-jobs
	while [ ! -e src/all.done ]; do \
	  echo "waiting for subtitle conversion jobs"; \
	  sleep 10; \
	done
	${MAKE} -C xml all-jobs
	${MAKE} -C raw all-jobs
	while [ ! -e xml/all.done ] &&  [ ! -e raw/all.done ]; do \
	  echo "waiting for merging and alignment jobs"; \
	  sleep 10; \
	done
	${MAKE} -C devtest-xml testsets.submit


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

