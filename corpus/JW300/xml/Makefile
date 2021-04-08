# -*-makefile-*-

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.sentalign

all: sentalign-all
jobs: 
	${MAKE} EMAIL= HPC_CORES=8 sentalign-source-jobs



.PHONY: normalise-langcodes
normalise-langcodes:
	for d in `ls .`; do \
	  if [ -d $$d ]; then \
	    n=`echo $$d | tr '-' '_' | sed s/cyrl/Cyrl/`; \
	    if [ ! "$$n" = "$$d" ]; then \
	      echo "move $$d to $$n"; \
	      mv $$d $$n; \
	    fi \
	  fi \
	done


normalise-tarfiles:
	for d in `ls *.tar`; do \
	  if [ -f $$d ]; then \
	    n=`echo $$d | tr '-' '_' | sed s/cyrl/Cyrl/`; \
	    if [ ! "$$n" = "$$d" ]; then \
	      echo "move $$d to $$n"; \
	      mv $$d $$n; \
	    fi \
	  fi \
	done
