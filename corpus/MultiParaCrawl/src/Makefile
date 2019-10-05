
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## release 4.0 languages
RELEASE4_LANGS = bg cs da de el es et fi fr ga hr hu it lv lt nl mt pl pt ro sk sl sv
BONUS4_TMX     = pl-de.${FILTER}.tmx.gz nl-fr.${FILTER}.tmx.gz

## release 5.0 languages
RELEASE5_LANGS = ${RELEASE4_LANGS}
RELEASE_LANGS  = ${RELEASE5_LANGS}
RELEASEURL     = https://s3.amazonaws.com/web-language-models/paracrawl/release${RELEASE}
RELEASED_TMX   = ${patsubst %,en-%.${FILTER}.tmx.gz,${RELEASE_LANGS}}


## conversion script to be used
## --> tmx2opus-tc = use TokyoCabinet as tmp DB

TMX2OPUS = tmx2opus
# TMX2OPUS = ../scripts/tmx2opus-tc


.PHONY: all
all: ${CORPUSRAW}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files
	for s in ${RELEASE_LANGS}; do \
	  for t in ${RELEASE_LANGS}; do \
	    if [[ "$$s" > "$$t" ]]; then \
	      opus-pivoting `ls ${CORPUSXML}/*$$s*.xml.gz | grep 'en'` \
	                    `ls ${CORPUSXML}/*$$t*.xml.gz | grep 'en'` \
	      | gzip -c > ${CORPUSXML}/$$t-$$s.xml.gz; \
	    else \
	      opus-pivoting `ls ${CORPUSXML}/*$$s*.xml.gz | grep 'en'` \
	                    `ls ${CORPUSXML}/*$$t*.xml.gz | grep 'en'` \
	      | gzip -c > ${CORPUSXML}/$$s-$$t.xml.gz; \
	    fi \
	  done \
	done

.PHONY: fetch
fetch: ${RELEASED_TMX}

.PHONY: convert
convert: ${CORPUSRAW}

${CORPUSRAW}:
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  gzip -cd ${PWD}/*.tmx.gz |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -o ${FILTER}.xml.gz )
	touch ${CORPUSRAW}

${RELEASED_TMX}:
	wget -q ${RELEASEURL}/$@




## testing to convert with the tokyo-cabinet DB for 
## makeing unique entries ...

convert-with-tc: ../raw-tc

../raw-tc:
	mkdir -p $@
	( cd $@ && \
	  gzip -cd ${PWD}/*.tmx.gz |\
	  ../scripts/tmx2opus-tc -u -d -o ${FILTER}.xml.gz )

fix:
	mkdir -p ../raw-fix
	( cd ../raw-fix && \
	  gzip -cd ${PWD}/en-sl.bicleaner07.tmx.gz ${PWD}/en-sv.bicleaner07.tmx.gz |\
	  ../scripts/tmx2opus -a -u -d -o ${FILTER}.xml )

