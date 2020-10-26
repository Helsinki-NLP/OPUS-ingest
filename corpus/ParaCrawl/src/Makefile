
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

## release 4.0 languages
RELEASE4_LANGS = bg cs da de el es et fi fr ga hr hu it lv lt nl mt pl pt ro sk sl sv
REGULAR4_TMX   = ${patsubst %,release4/en-%.${FILTER}.tmx.gz,${RELEASE4_LANGS}}
BONUS4_TMX     = release4/pl-de.${FILTER}.tmx.gz release4/nl-fr.${FILTER}.tmx.gz
RELEASE4_TMX   = ${REGULAR4_TMX} ${BONUS4_TMX}
BONUS4_URL     = https://s3.amazonaws.com/web-language-models/paracrawl/ebay


## release 5.0 languages
RELEASE5_LANGS = ${RELEASE4_LANGS}
RELEASE5_TMX   = ${patsubst %,releas5/en-%.${FILTER}.tmx.gz,${RELEASE5_LANGS}}


RELEASE7_LANGS = bg cs da de el es et fi fr ga hr hu is it lt lv mt nb nl nn pl pt ro sk sl sv
RELEASE7_PAIRS = ${patsubst %,en-%,${RELEASE7_LANGS}}
EXTRA7_PAIRS   = es-eu es-ca es-gl
BONUS7_PAIRS   = en-ha en-ig en-my en-km en-ne en-ps en-ru en-si en-so en-sw en-tl
REGULAR7_TMX   = ${patsubst %,release7/%.tmx.gz,${RELEASE7_PAIRS} ${EXTRA7_PAIRS}}
BONUS7_TMX     = ${patsubst %,release7/%.tmx.gz,${BONUS7_PAIRS}}
RELEASE7_TMX   = ${REGULAR7_TMX} ${BONUS7_TMX} ${BONUS4_TMX}
BONUS7_URL     = https://s3.amazonaws.com/web-language-models/paracrawl/bonus



RELEASED_TMX      = ${RELEASE7_TMX}
RELEASEURL        = https://s3.amazonaws.com/web-language-models/paracrawl/release${RELEASE}
CONVERTED_BITEXTS = ${patsubst %.tmx.gz,%.done,${RELEASED_TMX}}
MAXSIZE = 50000


.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


.PHONY: fetch
fetch: ${RELEASED_TMX}

fetch4-bonus: ${BONUS4_TMX}

.PHONY: convert
convert: ${CONVERTED_BITEXTS}

${REGULAR4_TMX} ${REGULAR5_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${RELEASEURL}/${notdir $@}

${BONUS4_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${BONUS4_URL}/${notdir $@}


${REGULAR7_TMX}:
	mkdir -p ${dir $@}
	( cd ${dir $@} && \
	  wget -q https://s3.amazonaws.com/web-language-models/paracrawl/release7.1/${notdir $@} || \
	  wget -q https://s3.amazonaws.com/web-language-models/paracrawl/release7/${notdir $@} )

${BONUS7_TMX}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${BONUS7_URL}/${notdir $@}


${CONVERTED_BITEXTS}: %.done: %.tmx.gz
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
