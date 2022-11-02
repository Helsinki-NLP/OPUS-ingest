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

LANGUAGES = $(sort $(subst .,,$(suffix $(subst .gz,,${wildcard src/*.??} ${wildcard src/*.???}))))
FILES     = $(sort $(basename $(subst .gz,,${wildcard src/*.??} ${wildcard src/*.???})))
CONVERTED = ${patsubst %,%_done,${FILES}}

## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} convert
	${MAKE} annotate
	${MAKE} wordalign
	${MAKE} cwb-index
	${MAKE} publish

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
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus


## convert
.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	${MAKE} -C xml create-align-files

${CONVERTED}:
	mkdir -p raw xml log
	for s in $(sort $(subst .,,$(suffix $(subst .gz,,${wildcard $(@:_done=)*})))); do \
	  for t in $(sort $(subst .,,$(suffix $(subst .gz,,${wildcard $(@:_done=)*})))); do \
	    if [ "$$s" != "$$t" ]; then \
	      if [ ! -e "xml/$$t-$$s/$(notdir $(@:_done=)).xml.gz" ]; then \
		if [ -e "$(@:_done=).$$s.gz" ]; then \
		  src="$(@:_done=).$$s.gz"; \
		else \
		  src="$(@:_done=).$$s"; \
		fi; \
		if [ -e "$(@:_done=).$$t.gz" ]; then \
		  trg="$(@:_done=).$$t.gz"; \
		else \
		  trg="$(@:_done=).$$t"; \
		fi; \
		mkdir -p xml/$$s-$$t; \
		if [ -e $$src ]; then \
		  if [ -e $$trg ]; then \
		    cd raw; \
		    ${MOSES2OPUS} -z \
			-s $$s -t $$t \
			-b $(notdir $(@:_done=)) \
			../$$src ../$$trg |\
		    gzip -c > ../xml/$$s-$$t/$(notdir $(@:_done=)).xml.gz; \
		    cd ..; \
	          fi \
	        fi \
	      fi \
	    fi \
	  done \
	done
	touch $@

