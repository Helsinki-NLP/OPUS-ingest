# -*-makefile-*-
#
#


include Makefile.def
include ../Makefile.def

## setting the base information for the data sets
LANGUAGES  = fi sv
DATASETS   = kho kko asd
FINLEX_URL = https://data.finlex.fi/download/xml
FINLEX_XML = ${patsubst %,srcdata/%,${DATASETS}}

## pick the first data set and the first language
DATASET  = $(firstword ${DATASETS})
LANGUAGE = $(firstword ${LANGUAGES})

## raw XML with sentence boundaries added
RAWXML = ${patsubst srcdata/${DATASET}/${LANGUAGE}/%,\
		    raw/${LANGUAGE}/${DATASET}/%.gz,\
		    ${wildcard srcdata/${DATASET}/${LANGUAGE}/*/*.xml}}

## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all: prepare bitexts

prepare:
	${MAKE} fetch
	${MAKE} convert
	${MAKE} cleanup
	${MAKE} annotate
bitexts:
	${MAKE} align
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

.PHONY: fetch
fetch: ${FINLEX_XML}

${FINLEX_XML}:
	mkdir -p ${dir $@}
	wget -O $@-fi.zip ${FINLEX_URL}/${notdir $@}/${notdir $@}-fi.zip
	wget -O $@-sv.zip ${FINLEX_URL}/${notdir $@}/${notdir $@}-sv.zip
	unzip -d srcdata $@-fi.zip
	unzip -d srcdata $@-sv.zip
	rm -f $@-fi.zip $@-sv.zip



## convert
.PHONY: convert
convert:
	for l in ${LANGUAGES}; do \
	  for d in ${DATASETS}; do \
	    ${MAKE} DATASET=$$d LANGUAGE=$$l convert-dataset; \
	  done \
	done

.PHONY: convert-dataset
convert-dataset: ${RAWXML}
${RAWXML}: raw/${LANGUAGE}/${DATASET}/%.gz: srcdata/${DATASET}/${LANGUAGE}/%
	mkdir -p ${dir $@}
	uplug pre/sent -l ${LANGUAGE} -in $< | \
	tidy -xml -utf8 -i -w 0 | gzip -c > $@


## cleanup the srcdata directory
## but create some flags that we're done here
.PHONY: cleanup
cleanup:
	rm -fr ${FINLEX_XML}
	touch ${FINLEX_XML}


## tidy up xml ... 

# TIDYXMLFILES=${patsubst xml/%,tidyxml/%,$(wildcard xml/*/*/*/*.xml.gz)}
# TIDYRAWFILES=${patsubst raw/%,tidyraw/%,$(wildcard raw/*/*/*/*.xml.gz)}

# tidyxml: ${TIDYXMLFILES}
# ${TIDYXMLFILES}: tidyxml/%: xml/%
# 	mkdir -p ${dir $@}
# 	zcat $< | tidy -xml -utf8 -i -w 0 | gzip -c > $@

# tidyraw: ${TIDYRAWFILES}
# ${TIDYRAWFILES}: tidyraw/%: raw/%
# 	mkdir -p ${dir $@}
# 	zcat $< | tidy -xml -utf8 -i -w 0 | gzip -c > $@
