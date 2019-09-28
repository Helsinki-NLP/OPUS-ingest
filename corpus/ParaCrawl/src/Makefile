
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## release 4.0 languages
RELEASE4_LANGS = bg cs da de el es et fi fr ga hr hu it lv lt nl mt pl pt ro sk sl sv
BONUS4_TMX     = pl-de.${FILTER}.tmx.gz nl-fr.${FILTER}.tmx.gz

## release 5.0 languages
RELEASE5_LANGS = ${RELEASE4_LANGS}
BONUS5_TMX     = 


RELEASE_LANGS  = ${RELEASE5_LANGS}
RELEASEURL     = https://s3.amazonaws.com/web-language-models/paracrawl/release${RELEASE}
BONUSURL       = https://s3.amazonaws.com/web-language-models/paracrawl/ebay
RELEASED_TMX   = ${patsubst %,en-%.${FILTER}.tmx.gz,${RELEASE_LANGS}}
BONUS_TMX      = ${BONUS5_TMX}

CONVERTED_BITEXTS = ${patsubst %.tmx.gz,${PWD}/%.done,${RELEASED_TMX} ${BONUS_TMX}}
MAXSIZE = 50000

.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


.PHONY: fetch
fetch: ${RELEASED_TMX} ${BONUS_TMX}

.PHONY: convert
convert: ${CONVERTED_BITEXTS}

${RELEASED_TMX}:
	wget -q ${RELEASEURL}/$@

${BONUS_TMX}:
	wget -q ${BONUSURL}/$@

${CONVERTED_BITEXTS}: ${PWD}/%.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  gzip -cd ${PWD}/$< | \
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@





convert-new: ../newraw

../newraw:
	mkdir -p $@
	( cd $@ && \
	  gzip -cd ${PWD}/*.tmx.gz |\
	  tmx2opus -u -d -o ${FILTER}.xml.gz )
	touch $@
