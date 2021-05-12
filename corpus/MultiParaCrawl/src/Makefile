
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## conversion script to be used
## --> tmx2opus-tc = use TokyoCabinet as tmp DB

PARACRAWL_URL = https://s3.amazonaws.com/web-language-models/paracrawl
PARACRAWL_TMX = $(patsubst ${PARACRAWL_URL}/%,%,${PARACRAWL_BONUS} \
		${shell wget -q -O - ${PARACRAWL_RELEASE} | \
			grep '${PARACRAWL_URL}' | \
			grep tmx | sed "s/^.*href='\([^']*\)'.*$$/\1/" | grep -v roam})


# TMX2OPUS  = tmx2opus
TMX2OPUS  = ../scripts/tmx2opus-btree
# TMX2OPUS = ../scripts/tmx2opus-tc
# OPUS_PIVOTING = opus-pivoting
OPUS_PIVOTING = ../scripts/opus-pivoting -t score -n 1


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all: ${CORPUSRAW}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} pivoting

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
	      ${OPUS_PIVOTING} `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
	                    	`ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
	      | gzip -c > ${CORPUSXML}/$$s-$$t/paracrawl-pivoted-${VERSION}.xml.gz; \
	      if [ -e ${CORPUSXML}/$$s-$$t.xml.gz ]; then \
	        mkdir -p backup; \
		mv -f ${CORPUSXML}/$$s-$$t.xml.gz backup/ ; \
	      fi; \
	    fi \
	  done \
	done
	${MAKE} -C ${CORPUSXML} create-align-files


.PHONY: fetch
fetch: ${PARACRAWL_TMX}

.PHONY: convert
convert: ${CORPUSRAW}


${PARACRAWL_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${PARACRAWL_URL}/$@


${CORPUSRAW}: ${PARACRAWL_TMX}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find ${PWD} -name '*.tmx.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o paracrawl${RELEASE}.xml.gz )
	touch ${CORPUSRAW}



## testing to convert with the tokyo-cabinet DB for 
## makeing unique entries ...

convert-with-tc: ../raw-tc

../raw-tc:
	mkdir -p $@
	( cd $@ && \
	  gzip -cd ${PWD}/*.tmx.gz |\
	  ../scripts/tmx2opus-tc -u -d -o ${FILTER}.xml.gz )








convert-btree-job: 
	${MAKE} HPC_DISK=500 HPC_CORES=1 HPC_MEM=16g HPC_TIME=7-00:00 HPC_QUEUE=longrun convert-with-btree.submit

convert-with-btree: ../raw-btree

../raw-btree:
	mkdir -p $@
	( cd $@ && \
	  find ${PWD} -name '*.tmx.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ../scripts/tmx2opus-btree -u -d -t ${TMPDIR} -o paracrawl${RELEASE}.xml.gz )
	touch $@



fix:
	mkdir -p ../raw-fix
	( cd ../raw-fix && \
	  gzip -cd ${PWD}/en-sl.bicleaner07.tmx.gz ${PWD}/en-sv.bicleaner07.tmx.gz |\
	  ../scripts/tmx2opus -a -u -d -o ${FILTER}.xml )

