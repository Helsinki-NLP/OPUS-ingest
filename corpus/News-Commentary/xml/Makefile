# -*-makefile-*-
#


include ../Makefile.def


.PHONY: all move-links cleanup
all:
	${MAKE} move-links
	${MAKE} create-align-files
	${MAKE} cleanup

move-links:
	mv ../raw/*-* .

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
