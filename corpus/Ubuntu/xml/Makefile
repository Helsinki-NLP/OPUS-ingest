# -*-makefile-*-
#


include ../Makefile.def

.PHONY: all cleanup
all: create-align-files cleanup

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
