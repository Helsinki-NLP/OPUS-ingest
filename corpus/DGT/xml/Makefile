# -*-makefile-*-
#


include ../Makefile.def

## the find command is a simple trick to
## avoid re-doing existing files
## pitfall: if the original raw file changed 
##          then this will cause problems!
## --> would be better to avoid creating
##     the raw files again when updating the corpus
## this should work now ...

.PHONY: all links cleanup
all: links create-align-files cleanup
	find . -name '*.xml.gz' | xargs touch

## better move than symlink ...
links:
	-mv ../raw/??-?? .
# 	-ln -s ../raw/??-?? .

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
include ../../Makefile.submit

