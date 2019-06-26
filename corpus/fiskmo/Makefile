# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#

include Makefile.def
include ../Makefile.def


LANGUAGES = fi sv


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
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} publish

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


include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if moses2opus is not in your PATH
# MOSES2OPUS = moses2opus
MOSES2OPUS = ${HOME}/appl_taito/bin/moses2opus

ALGFILES = ${patsubst src/%.txt.gz,xml/%.xml.gz,${wildcard src/*.txt.gz}}

.PHONY: convert
convert: xml/Makefile ${ALGFILES}

${ALGFILES}: xml/%.xml.gz: src/%.txt.gz
	zcat $< | cut -f2 | gzip -c > $<.sim.gz
	zcat $< | cut -f3 | gzip -c > $<.sv.gz
	zcat $< | cut -f4 | gzip -c > $<.fi.gz
	mkdir -p raw xml log
	mkdir -p xml/fi-sv
	cd raw && \
	${MOSES2OPUS} 	-z \
			-s fi -t sv \
			-b $(notdir $@) \
			-l ../$<.sim.gz -d \
			../$<.fi.gz ../$<.sv.gz |\
	gzip -c > ../$@
	rm -f $<.sim.gz $<.fi.gz $<.sv.gz


