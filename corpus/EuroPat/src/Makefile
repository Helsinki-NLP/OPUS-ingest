
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## conversion script to be used
## --> tmx2opus-tc = use TokyoCabinet as tmp DB

EUROPAT_URL = https://web-language-models.s3.amazonaws.com/europat/release${RELEASE}
EUROPAT_TMX = $(patsubst ${EUROPAT_URL}/%,%, \
		${shell wget -q -O - ${EUROPAT_RELEASE} | \
			grep '${EUROPAT_URL}' | \
			grep tmx | sed 's/^.*href="\([^"]*\)".*$$/\1/' })


# TMX2OPUS  = tmx2opus
TMX2OPUS  = ../scripts/tmx2opus-btree
# TMX2OPUS = ../scripts/tmx2opus-tc


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all: ${CORPUSRAW}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}
	${MAKE} pivoting

PIVOT = en

pivoting:
	${MAKE} -C ${CORPUSXML} create-align-files
	for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
	  for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
	    if [[ "$$t" > "$$s" ]]; then \
	      mkdir -p ${CORPUSXML}/$$s-$$t; \
	      opus-pivoting `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
	                    	`ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
	      | gzip -c > ${CORPUSXML}/$$s-$$t/europat-pivoted${RELEASE}.xml.gz; \
	      if [ `zcat ${CORPUSXML}/$$s-$$t/paracrawl-pivoted${RELEASE}.xml.gz | head | wc -l` == "0" ]; then \
	        rm -f ${CORPUSXML}/$$s-$$t/paracrawl-pivoted${RELEASE}.xml.gz; \
	      fi; \
	    fi \
	  done \
	done
	${MAKE} -C ${CORPUSXML} create-align-files

.PHONY: fetch
fetch: ${EUROPAT_TMX}

.PHONY: convert
convert: ${CORPUSRAW}


${EUROPAT_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${EUROPAT_URL}/$@


${CORPUSRAW}: ${EUROPAT_TMX}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find ${PWD} -name '*.tmx.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o europat${RELEASE}.xml.gz )
	touch ${CORPUSRAW}




