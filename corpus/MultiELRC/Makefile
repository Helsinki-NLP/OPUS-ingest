

include ../Makefile.def
include ../Makefile.submit

TEMPLATEDIR := ${OPUSHOME}/templates/pivot-tmx


MULTI_ELRC_CORPORA    := $(shell ls ${OPUSCORPORA} | grep 'ELRC\-[0-9]*\-' | cut -f1,3- -d'-' | cut -f1,2 -d '_' | \
			sort | uniq -c | sort -nr | sed 's/^ *//' | grep -v '^1 ' | cut -f2 -d' ' | grep -v NTEU)
MULTI_ELRC_CORPUS     ?= $(firstword ${MULTI_ELRC_CORPORA})
MULTI_ELRC_SUBCORPORA := $(notdir $(wildcard ${OPUSCORPORA}/ELRC-*-$(word 2,$(subst -, ,${MULTI_ELRC_CORPUS}))*))

CORPUSNAME            := ${MULTI_ELRC_CORPUS}
CORPUSDIR             := ${OPUSCORPORA}/${CORPUSNAME}


.PHONY: all
all:
	for c in ${MULTI_ELRC_CORPORA}; do \
	  ${MAKE} MULTI_ELRC_CORPUS=$$c corpus; \
	done


## print some info about the corpora to be produces
.PHONY: info
info:
	@echo "${MULTI_ELRC_CORPORA}" | tr ' ' "\n"
	@echo "selected: ${MULTI_ELRC_CORPUS}"
	@echo "included: ${MULTI_ELRC_SUBCORPORA}"


## same as all but create individual import jobs
.PHONY: all-jobs
all-jobs:
	@for c in ${MULTI_ELRC_CORPORA}; do \
	  ${MAKE} MULTI_ELRC_CORPUS=$$c import-job; \
	done


## submit a job to import a corpus
.PHONY: import-job
import-job:
	@if [ ! -d ${CORPUSDIR} ]; then \
	  echo "create import job for ${MULTI_ELRC_CORPUS}"; \
	  ${MAKE} EMAIL= HPC_MEM=16g HPC_TIME=12:00 HPC_CORES=2 corpus.submit; \
	else \
	  echo "${MULTI_ELRC_CORPUS} import already done?"; \
	fi


.PHONY: corpus
corpus: ${CORPUSDIR}



## release all imported data sets
release-all: ${ELRC_MTDATA}
	@for c in ${MULTI_ELRC_CORPORA}; do \
	  ${MAKE} MULTI_ELRC_CORPUS=$$c release; \
	done

## make public releases on allas and the OPUS website
release:
	@if [ -e ${OPUSPUB}/${CORPUSNAME} ]; then \
	  echo "release ${CORPUSNAME}"; \
	  ${MAKE} -C ${CORPUSDIR} release; \
	else \
	  echo "nothing to release yet for ${CORPUSNAME}"; \
	fi



${CORPUSDIR}:
	cp -R ${TEMPLATEDIR} $@
	for c in ${MULTI_ELRC_SUBCORPORA}; do \
	  mkdir -p $@/src/$$c; \
	  find ${OPUSCORPORA}/$$c/src -name '*.tmx*' -exec cp {} $@/src/$$c/ \; ;\
	  cp ${OPUSCORPORA}/$$c/LICENSE* $@/ 2>/dev/null; \
	  cp ${OPUSCORPORA}/$$c/Makefile.def $@/; \
	done
	find $@/src -name '*.tmx' -exec gzip -f {} \;
	${MAKE} -C $@ all




