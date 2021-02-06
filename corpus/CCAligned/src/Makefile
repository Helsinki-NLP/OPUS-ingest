
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}



MAXSIZE = 50000

ALIGNED_LANGUAGES = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="en_XX' | cut -f2 -d'>' | cut -f1 -d'<')

ALIGNED_DOCS  = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="en_XX' | cut -f2 -d'"')

ALIGNED_SENTS = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="sentence-aligned' | grep -v '_rom' | cut -f2 -d'"')

CONVERTED_BITEXTS = ${patsubst %.tsv.xz,%.done,${ALIGNED_SENTS}}


.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


.PHONY: fetch
fetch: ${ALIGNED_SENTS}

.PHONY: download-docalign download-sentalign
download-docalign: ${ALIGNED_DOCS}
download-sentalign: ${ALIGNED_SENTS}

${ALIGNED_DOCS}:
	wget -qq -O $@ ${SOURCE_URL}/$@

${ALIGNED_SENTS}:
	mkdir -p ${dir $@}
	wget -qq -O $@ ${SOURCE_URL}/$@

.PHONY: convert
convert: ${CONVERTED_BITEXTS}

${CONVERTED_BITEXTS}: %.done: %.tsv.xz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  mkdir -p ${CORPUSRAW}; \
	  s=$(firstword $(subst -, ,$(notdir $(@:.done=)))) \
	  t=$(lastword $(subst -, ,$(notdir $(@:.done=)))) \
	  xzcat ${PWD}/$< | \
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ../scripts/tsv2opus -p ${MAXSIZE} -r -z \
		-s $(firstword $(subst -, ,$(notdir $(@:.done=)))) \
		-t $(lastword $(subst -, ,$(notdir $(@:.done=)))) \
		-b $(notdir $(@:.done=)) )
	touch $@


