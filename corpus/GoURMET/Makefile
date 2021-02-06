# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#
# - assumes that there are plain text files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#
# TODO
# - does not work well for multilingual corpora yet
#   (converts for every language pair!)


include Makefile.def
include ../Makefile.def


## LANGUAGES = unique file extensions of files in src (.gz will be removed)
## FILES = file basenames

LANGUAGES  = am hbs en ky ru sr sw tr
FILES      = $(sort $(basename $(subst .gz,,${wildcard src/*/*.*.gz} ${wildcard src/*.*.gz})))
CONVERTED  = ${patsubst %,%_done,${FILES}}

## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} annotate
	${MAKE} publish
	${MAKE} cwb-index
#	${MAKE} wordalign
#	${MAKE} udparse

## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
# include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-fast
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus


## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	${MAKE} -C xml create-align-files

print-converted:
	echo ${CONVERTED}

${CONVERTED}:
	mkdir -p raw xml log
	for s in $(LANGUAGES); do \
	  for t in $(LANGUAGES); do \
	    if [ "$$s" \< "$$t" ]; then \
	      if [ -e "$(@:_done=).$$s.gz" ]; then \
		if [ -e "$(@:_done=).$$t.gz" ]; then \
		  mkdir -p xml/$$s-$$t; \
		  cd raw; \
		  ${MOSES2OPUS} -z \
			-s $$s -t $$t \
			-b $(notdir $(@:_done=)).$$s-$$t \
			../$(@:_done=).$$s.gz \
			../$(@:_done=).$$t.gz |\
		  gzip -c > ../xml/$$s-$$t/$(notdir $(@:_done=)).xml.gz; \
		  cd ..; \
	        fi \
	      fi \
	    fi \
	  done \
	done
	touch $@

