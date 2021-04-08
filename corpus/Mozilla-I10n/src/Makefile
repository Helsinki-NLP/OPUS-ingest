
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

# TMX2OPUS  = tmx2opus
# TMX2OPUS  = ../scripts/tmx2opus-btree
# TMX2OPUS = ../scripts/tmx2opus-tc

TMX2OPUS = ${HOME}/perl5/bin/tmx2opus


TMXFILES = ${shell find . -name '*.tmx'}

## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all: 
	${MAKE} fetch
	${MAKE} convert
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} pivoting
	${MAKE} deduplicate
	-mv -f *-*.xml.gz ${CORPUSXML}/ 


.PHONY: fetch
fetch: mt-training-data

mt-training-data:
	git clone https://github.com/mozilla-l10n/mt-training-data.git


.PHONY: convert
convert: ${CORPUSRAW}
	echo "done!"




# PIVOT = en_us
PIVOT = en

.PHONY: pivoting
pivoting:
	${MAKE} -C ${CORPUSXML} create-align-files
	for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
	  for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
	    if [[ "$$t" > "$$s" ]]; then \
	      mkdir -p ${CORPUSXML}/$$s-$$t; \
	      S=`ls ${CORPUSXML}/$$s-${PIVOT}.xml.gz ${CORPUSXML}/${PIVOT}-$$s.xml.gz 2>/dev/null | head -1`; \
	      T=`ls ${CORPUSXML}/$$t-${PIVOT}.xml.gz ${CORPUSXML}/${PIVOT}-$$t.xml.gz 2>/dev/null | head -1`; \
	      if [ -e "$$S" ] && [ -e "$$T" ]; then \
	        echo "processing ..."; \
	        echo "$$S"; echo "$$T"; \
	        opus-pivoting $$S $$T | gzip -c > ${CORPUSXML}/$$s-$$t/mozilla-i10n-pivoted-${VERSION}.xml.gz; \
	        if [ -e ${CORPUSXML}/$$s-$$t.xml.gz ]; then \
	          mkdir -p backup; \
		  mv -f ${CORPUSXML}/$$s-$$t.xml.gz backup/ ; \
	        fi; \
	      fi \
	    fi \
	  done \
	done
	${MAKE} -C ${CORPUSXML} create-align-files

# this is slow for big data sets:
#
#	      S=`find ${CORPUSXML} \( -name $$s-${PIVOT}.xml.gz -o -name ${PIVOT}-$$s.xml.gz \)`; \
#	      T=`find ${CORPUSXML} \( -name $$t-${PIVOT}.xml.gz -o -name ${PIVOT}-$$t.xml.gz \)`; \
#
# at least better is:
#
#	      S=`find ${CORPUSXML} -max-depth 1 \( -name $$s-${PIVOT}.xml.gz -o -name ${PIVOT}-$$s.xml.gz \)`; \
#	      T=`find ${CORPUSXML} -max-depth 1 \( -name $$t-${PIVOT}.xml.gz -o -name ${PIVOT}-$$t.xml.gz \)`; \
#
# but ls seems to be the fastest ...


.PHONY: deduplicate
deduplicate:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	      if [ -e "${CORPUSXML}/$$s-$$t.xml.gz" ]; then \
		echo "make $$s-$$t.xml"; \
		echo '<?xml version="1.0" encoding="utf-8"?>' >$$s-$$t.xml; \
		echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >>$$s-$$t.xml; \
		echo '<cesAlign version="1.0">' >> $$s-$$t.xml; \
		zgrep --no-filename '<linkGrp' ${CORPUSXML}/$$s-$$t.xml.gz >>$$s-$$t.xml; \
		zgrep --no-filename 'xtarget' ${CORPUSXML}/$$s-$$t.xml.gz | sort -u >> $$s-$$t.xml; \
		zgrep --no-filename '</linkGrp' ${CORPUSXML}/$$s-$$t.xml.gz >>$$s-$$t.xml; \
		echo '</cesAlign>' >> $$s-$$t.xml; \
		gzip -f $$s-$$t.xml; \
	      fi \
	  done \
	done


## new: change en-US to en (default English)

${CORPUSRAW}: ${TMXFILES}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find ${PWD} -name '*.tmx' |\
	  xargs cat |\
	  sed 's/="en-US"/="en"/g' |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o mozilla-i10n-${VERSION}.xml.gz )
	touch ${CORPUSRAW}

