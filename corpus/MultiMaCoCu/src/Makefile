
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}



TMX2OPUS  = tmx2opus
# TMX2OPUS  = ../scripts/tmx2opus-btree
# TMX2OPUS = ../scripts/tmx2opus-tc

OPUS_PIVOTING = opus-pivoting
# OPUS_PIVOTING = ../scripts/opus-pivoting
# OPUS_PIVOTING = ../scripts/opus-pivoting -t score -n 1


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all:
	-ln -s ../../MaCoCu/src/*.tmx.gz .
	${MAKE} ${CORPUSRAW}
	${MAKE} pivoting

PIVOT = en




## link files sorted by pivot language sentence IDs

PIVOT_LINKFILES = ${patsubst %,%.alg,$(sort ${wildcard ${CORPUSXML}/*${PIVOT}*.xml.gz})}

## all new language combinations

PIVOTED_BITEXTS = ${shell for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
			    for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
			      if [[ "$$t" > "$$s" ]]; then \
			         echo "../xml/$$s-$$t.xml.gz"; \
			      fi \
			    done \
	                  done }

.PHONY: pivoting
pivoting: ${PIVOTED_BITEXTS}


.INTERMEDIATE: ${PIVOT_LINKFILES}

${PIVOT_LINKFILES}: %.alg: %
	gzip -cd $< | ../scripts/extract-links.pl -l $(notdir ${<:.xml.gz=}) -c ${PIVOT} | sort -k2,2 -k1,1nr > $@

.PHONY: pivot-linkfiles
pivot-linkfiles: ${PIVOT_LINKFILES}

${PIVOTED_BITEXTS}: ${PIVOT_LINKFILES}
	( s=$(firstword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  t=$(lastword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  mkdir -p ${CORPUSXML}/$$s-$$t; \
	  ../scripts/pivot-links.pl -a \
		`ls ${CORPUSXML}/*$$s*.xml.gz.alg | grep '${PIVOT}'` \
		`ls ${CORPUSXML}/*$$t*.xml.gz.alg | grep '${PIVOT}'` \
		$$s/macocu_${RELEASE}.xml.gz \
		$$t/macocu_${RELEASE}.xml.gz \
	  | gzip -c > ${CORPUSXML}/$$s-$$t/macocu-pivoted-${VERSION}.xml.gz; \
	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )


.PHONY: convert
convert:
	-ln -s ../../MaCoCu/src/*.tmx.gz .
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find -L ${PWD} -name '*.tmx.gz' | sort |\
	  xargs zcat | ${UNICODE_CLEANUP} |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o macocu_${RELEASE}.xml.gz )
	mkdir -p ${CORPUSXML}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/
	${MAKE} -C ${CORPUSXML} create-align-files
	touch $@


