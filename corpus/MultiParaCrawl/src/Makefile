
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## conversion script to be used
## --> tmx2opus-tc = use TokyoCabinet as tmp DB

PARACRAWL7.1_URL = https://s3.amazonaws.com/web-language-models/paracrawl
PARACRAWL7.1_TMX = $(patsubst ${PARACRAWL_URL}/%,%,${PARACRAWL_BONUS} \
		${shell wget -q -O - ${PARACRAWL_RELEASE} | \
			grep '${PARACRAWL_URL}' | \
			grep tmx | sed "s/^.*href='\([^']*\)'.*$$/\1/" | grep -v roam})

RELEASE8_TMX_URLS = $(shell wget -q -O - https://www.paracrawl.eu/ | \
			grep 'tmx\.gz' | grep -v deferred | grep -v roam |\
			sed "s/^.*href='\([^']*\)'.*$$/\1/" |\
			sed 's|archive.org/download/ParaCrawl-v8.*/|s3.amazonaws.com/web-language-models/paracrawl/release8/|')

RELEASE8_TMX_URLS_ORG = $(shell wget -q -O - https://www.paracrawl.eu/ | \
			grep 'tmx\.gz' | grep -v deferred | grep -v roam |\
			sed "s/^.*href='\([^']*\)'.*$$/\1/")


RELEASE8_TMX = ${patsubst %,release8/%,${notdir ${RELEASE8_TMX_URLS}}}


PARACRAWL_TMX = ${RELEASE8_TMX}




# TMX2OPUS  = tmx2opus
TMX2OPUS  = ../scripts/tmx2opus-btree
# TMX2OPUS = ../scripts/tmx2opus-tc
# OPUS_PIVOTING = opus-pivoting
# OPUS_PIVOTING = ../scripts/opus-pivoting -t score -n 1
OPUS_PIVOTING = ../scripts/opus-pivoting


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all: ${CORPUSRAW}
	${MAKE} pivoting

PIVOT = en




## link files sorted by pivot language sentence IDs

PIVOT_LINKFILES = ${patsubst %,%.alg,${wildcard ${CORPUSXML}/*${PIVOT}*.xml.gz}}

## all new language combinations

PIVOTED_BITEXTS = ${shell for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
			    for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
			      if [[ "$$t" > "$$s" ]]; then \
			         echo "../xml/$$s-$$t.xml.gz"; \
			      fi \
			    done \
	                  done }


pivoting: ${PIVOTED_BITEXTS}
	${MAKE} delete-empty-bitexts

.INTERMEDIATE: ${PIVOT_LINKFILES}

${PIVOT_LINKFILES}: %.alg: %
	gzip -cd $< | ../scripts/extract-links.pl -l $(notdir ${<:.xml.gz=}) -c ${PIVOT} | sort -k2,2 -k1,1nr > $@

${PIVOTED_BITEXTS}: ${PIVOT_LINKFILES}
	( s=$(firstword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  t=$(lastword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  mkdir -p ${CORPUSXML}/$$s-$$t; \
	  ../scripts/pivot-links.pl -a \
		`ls ${CORPUSXML}/*$$s*.xml.gz.alg | grep '${PIVOT}'` \
		`ls ${CORPUSXML}/*$$t*.xml.gz.alg | grep '${PIVOT}'` \
		$$s/paracrawl${RELEASE}.xml.gz \
		$$t/paracrawl${RELEASE}.xml.gz \
	  | gzip -c > ${CORPUSXML}/$$s-$$t/paracrawl-pivoted-${VERSION}.xml.gz; \
	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )





# ${PIVOTED_BITEXTS}:
# 	( s=$(firstword $(subst -, ,${notdir $(@:.xml.gz=)})); \
# 	  t=$(lastword $(subst -, ,${notdir $(@:.xml.gz=)})); \
# 	  mkdir -p ${CORPUSXML}/$$s-$$t; \
# 	  ${OPUS_PIVOTING} -a `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
# 	                      `ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
# 	      | gzip -c > ${CORPUSXML}/$$s-$$t/paracrawl-pivoted-${VERSION}.xml.gz; \
# 	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )



## OLD: loop over languages
## NEW: define targets as above (can do this in parallel)

# pivoting:
# 	mkdir -p ${CORPUSXML}
# 	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
# 	${MAKE} -C .. xml/Makefile
# 	${MAKE} -C ${CORPUSXML} create-align-files
# 	for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
# 	  for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
# 	    if [[ "$$t" > "$$s" ]]; then \
# 	      mkdir -p ${CORPUSXML}/$$s-$$t; \
# 	      echo "processing ..."; \
# 	      ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'; \
# 	      ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'; \
# 	      ${OPUS_PIVOTING} `ls ${CORPUSXML}/*$$s*.xml.gz | grep '${PIVOT}'` \
# 	                    	`ls ${CORPUSXML}/*$$t*.xml.gz | grep '${PIVOT}'` \
# 	      | gzip -c > ${CORPUSXML}/$$s-$$t/paracrawl-pivoted-${VERSION}.xml.gz; \
# 	    fi \
# 	  done \
# 	done
# 	${MAKE} -C ${CORPUSXML} create-align-files

## don't move previous link files away anymore
## --> this removes some non-English language pairs
##
#	      if [ -e ${CORPUSXML}/$$s-$$t.xml.gz ]; then \
#	        mkdir -p backup; \
#		mv -f ${CORPUSXML}/$$s-$$t.xml.gz backup/ ; \
#	      fi;


.PHONY: fetch
fetch: fetch${RELEASE}

fetch8:
	mkdir -p release8
	-for t in ${RELEASE8_TMX_URLS}; do \
	  f=`basename $$t`; \
	  if [ ! -e release8/$$f ]; then \
	    echo "wget -q -O release8/$$f $$t"; \
	    wget -q -O release8/$$f $$t; \
	  fi \
	done
	touch $@

.PHONY: fetch7
fetch7: ${PARACRAWL7.1_TMX}

.PHONY: convert
convert: ${CORPUSRAW}


${PARACRAWL7.1_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${PARACRAWL7.1_URL}/$@


${CORPUSRAW}: # ${PARACRAWL_TMX}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find -L ${PWD} -name '*.tmx.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o paracrawl${RELEASE}.xml.gz )
	mkdir -p ${CORPUSXML}
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
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

