# -*-makefile-*-
#

PROJECT_HOME = ../

include ${PROJECT_HOME}Makefile.def


.PHONY: all links cleanup
all: links create-align-files cleanup

## better move than symlink ...
links:
	-mv ../raw/??-?? .

cleanup:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -d "$$s-$$t" ]; then \
		rm -fr "$$s-$$t"; \
	    fi; \
	  done; \
	done


include ${PROJECT_HOME}../Makefile.def
include ${PROJECT_HOME}../Makefile.align
include ${PROJECT_HOME}../Makefile.submit

