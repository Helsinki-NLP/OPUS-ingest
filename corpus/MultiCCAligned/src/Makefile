
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}



MAXSIZE = 50000

ALIGNED_LANGUAGES = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="en_XX' | cut -f2 -d'>' | cut -f1 -d'<')

ALIGNED_DOCS  = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="en_XX' | cut -f2 -d'"')

ALIGNED_SENTS = $(shell wget -qq -O - http://www.statmt.org/cc-aligned/index.html | \
		grep '<a href="sentence-aligned' | cut -f2 -d'"')

ALIGNED_WITH_LANG = ${patsubst %.tsv.xz,%.tsv.gz,${ALIGNED_SENTS}}


# TSV2OPUS  = tsv2opus
TSV2OPUS  = ../scripts/tsv2opus-btree
# TSV2OPUS = ../scripts/tsv2opus-tc


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif



.PHONY: all
all: ${CORPUSRAW}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} pivoting


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
convert: ${CORPUSRAW}

${CORPUSRAW}: ${ALIGNED_WITH_LANG}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find -L ${PWD} -name '*.tsv.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TSV2OPUS} -r -u -d -t ${TMPDIR} -o ccaligned-${VERSION}.xml.gz )
	touch ${CORPUSRAW}


%.tsv.gz: %.tsv.xz
	xzcat $< | \
	sed 's/$$/\t$(firstword $(subst -, ,$(notdir $(@:.tsv.gz=))))\t$(lastword $(subst -, ,$(notdir $(@:.tsv.gz=))))/' |\
	gzip -c > $@




PIVOT = en

pivoting:
	${MAKE} -C ${CORPUSXML} create-align-files
	for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
	  for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
	    if [[ "$$t" > "$$s" ]]; then \
	      mkdir -p ${CORPUSXML}/$$s-$$t; \
	      echo "processing ..."; \
	      ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'; \
	      ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'; \
	      opus-pivoting `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
	                    	`ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
	      | gzip -c > ${CORPUSXML}/$$s-$$t/ccaligned-pivoted-${VERSION}.xml.gz; \
	      if [ -e ${CORPUSXML}/$$s-$$t.xml.gz ]; then \
	        mkdir -p backup; \
		mv -f ${CORPUSXML}/$$s-$$t.xml.gz backup/ ; \
	      fi; \
	    fi \
	  done \
	done
	${MAKE} -C ${CORPUSXML} create-align-files
