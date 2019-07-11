
include ../../Makefile.def
include ../Makefile.def

## release 4.0 languages
RELEASE_LANGS = bg da el sk sl sv ga hr mt lt hu et de fr es it pt nl pl cs ro fi lv 

RELEASEURL   = https://s3.amazonaws.com/web-language-models/paracrawl/release${RELEASE}
BONUSURL     = https://s3.amazonaws.com/web-language-models/paracrawl/ebay
RELEASED_TMX = ${patsubst %,en-%.bicleaner07.tmx.gz,${RELEASE_LANGS}}
BONUS_TMX    = pl-de.bicleaner07.tmx.gz nl-fr.bicleaner07.tmx.gz

CONVERTED_BITEXTS = ${patsubst %.tmx.gz,${shell pwd}/%.done,${RELEASED_TMX} ${BONUS_TMX}}
MAXSIZE = 50000

.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files

.PHONY: fetch
fetch: ${RELEASED_TMX} ${BONUS_TMX}

.PHONY: convert
convert: ${CONVERTED_BITEXTS}

${RELEASED_TMX}:
	wget ${RELEASEURL}/$@

${BONUS_TMX}:
	wget ${BONUSURL}/$@

${CONVERTED_BITEXTS}: %.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  gzip -cd $< | tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@

