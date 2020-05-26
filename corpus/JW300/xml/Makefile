# -*-makefile-*-

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.sentalign

all: sentalign-all
jobs: sentalign-source-jobs

new-jobs: 
	${MAKE} HPC_CORES=4 HPC_MEM=8g new-sentalign-source-jobs


check:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ "$$s" < "$$t" ]]; then \
	      if [ ! -e $$s-$$t.xml.gz ]; then \
		${MAKE} $$s-$$t.xml.gz; \
	      fi \
	    fi \
	  done \
	done
