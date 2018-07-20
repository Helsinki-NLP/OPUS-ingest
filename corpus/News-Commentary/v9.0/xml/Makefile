# -*-makefile-*-
#


include ../Makefile.def


.PHONY: all links cleanup
all: links create-align-files cleanup

links:
	-ln -s ../raw/*-* .

cleanup:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -d "$$s-$$t" ]; then \
		rm -fr "$$s-$$t"; \
	    fi; \
	  done; \
	done


include ../../Makefile.def
include ../../Makefile.align
