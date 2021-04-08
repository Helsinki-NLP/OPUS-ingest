
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}



ALIGNED_SENTS = ${wildcard XLEnt/Combined/*.tsv.gz}
ALIGNED_WITH_LANG = ${patsubst %.tsv.gz,%.lang.gz,${ALIGNED_SENTS}}
CONVERTED_BITEXTS = ${patsubst %.tsv.gz,%.done,${ALIGNED_SENTS}}
ALIGNED_LANGUAGES = ${patsubst en-%.tsv.gz,%,${notdir ${ALIGNED_SENTS}}}


TSV2OPUS  = ../scripts/tsv2opus-btree

## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all: XLEnt/Combined
	${MAKE} convert
	${MAKE} pivoting


.PHONY: fetch
fetch: XLEnt/Combined

XLEnt/Combined:
	wget http://data.statmt.org/xlent/XLEnt.tar.gz
	tar -xzf XLEnt.tar.gz
	rm -f XLEnt.tar.gz


.PHONY: convert
convert: ${CORPUSRAW}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


${CORPUSRAW}: ${ALIGNED_WITH_LANG}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find -L ${PWD} -name '*.lang.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TSV2OPUS} -r -u -d -t ${TMPDIR} -o xlent-${VERSION}.xml.gz )
	touch ${CORPUSRAW}


## add languages
%.lang.gz: %.tsv.gz
	zcat $< | \
	sed 's/$$/\t$(firstword $(subst -, ,$(notdir $(<:.tsv.gz=))))\t$(lastword $(subst -, ,$(notdir $(<:.tsv.gz=))))/' |\
	gzip -c > $@


PIVOT = en

## all alignment files with pivot language
PIVOTALGFILES = ${wildcard ${CORPUSXML}/${PIVOT}-*.xml.gz} \
		${wildcard ${CORPUSXML}/*-${PIVOT}.xml.gz}

## all language pairs that can be made out of pivot alignments
NEWLANGPAIRS = ${shell \
	for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
	  for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
	    if [[ "$$t" > "$$s" ]]; then echo $$s-$$t; fi \
	  done \
	done}

## all new pivot-based alignment files
NEWALGFILES = ${patsubst %,${CORPUSXML}/%.xml.gz,${NEWLANGPAIRS}}

${NEWALGFILES}: ${PIVOTALGFILES}
	mkdir -p ${@:.xml.gz=}
	( s=${firstword ${subst -, ,${notdir ${@:.xml.gz=}}}}; \
	  t=${lastword ${subst -, ,${notdir ${@:.xml.gz=}}}}; \
	  opus-pivoting `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
	                `ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
	      | gzip -c > ${CORPUSXML}/$$s-$$t/xlent-pivoted-${VERSION}.xml.gz; \
	  if [ -e $@ ]; then \
	    mv -f $@ ${CORPUSXML}/$$s-$$t/; \
	  fi; \
	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )

pivoting: ${NEWALGFILES}





