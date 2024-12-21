
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}


RELEASED_TMX      := ${wildcard *.tmx.gz}
CONVERTED_BITEXTS := ${patsubst %.tmx.gz,%.done,${RELEASED_TMX}}
MAXSIZE           := 50000


.PHONY: all
all: fetch
	${MAKE} convert

.PHONY: convert
convert: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


## fetch TMX files from various places
## --> this needs to be adjusted for a new release

fetch:
	for l in azj tg hy ps si so sw tl; do \
	  wget -qq -O en-$$l.tmx.gz https://web-language-models.s3.amazonaws.com/paracrawl/bonus/en-$$l.tmx.gz; \
	done
	for l in hi id ko vi; do \
	  wget -qq -O en-$$l.tmx.gz https://www.cs.jhu.edu/~phi/paracrawl/paracrawl-release10v5.en-$$l.filter-1.05.tmx.gz; \
	done
	for l in km lo my ne th; do \
	  wget -qq -O en-$$l.tmx.gz https://www.cs.jhu.edu/~phi/paracrawl/paracrawl-release10v5.en-$$l.filter-1.00.tmx.gz; \
	done
	for l in pl-cs en-uk en-zh; do \
	  wget -qq -O $$l.tmx.gz https://web-language-models.s3.amazonaws.com/paracrawl/bonus/$$l-v1.tmx.gz; \
	done
	wget -qq -O en-ru.tmx.gz https://web-language-models.s3.amazonaws.com/paracrawl/bonus/en-ru.tmx.gz
	wget -qq -O nl-fr.tmx.gz https://web-language-models.s3.amazonaws.com/paracrawl/ebay/nl-fr.bicleaner07.tmx.gz
	wget -qq -O pl-de.tmx.gz https://web-language-models.s3.amazonaws.com/paracrawl/ebay/pl-de.bicleaner07.tmx.gz
	touch $@


## convert from TMX to OPUS format
## - take care of strange unicode variants of < and > before ftfy normalizes them
## - convert_langcodes converts language codes if necessary
## - tmx2opus finally converts to OPUS XML format

.PHONY: convert
convert: ${CONVERTED_BITEXTS}

${CONVERTED_BITEXTS}: %.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  gzip -cd ${PWD}/$< | \
	  sed 's/＜/\&lt;/g;s/＞/\&gt;/g;s/NBSP;/\#160;/g;' | \
	  ftfy \
	  $(call convert_langcodes,${PWD}/$<) | \
	  tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@


## convert lang tags in TMX files from 3-letter codes to OPUS 2-letter codes
## (this will be insterted in conversion pipeline above)

convert_langcodes = $(shell \
	for l in `zcat $1 | head -1000 | grep -o 'xml:lang="..."' | sort -u | cut -f2 -d\"`; do \
	  L=`iso639 -n -2 -k $$l`; \
	  if [ "$$l" != "$$L" ]; then \
	    echo -n "| sed 's/xml:lang=\"$$l\"/xml:lang=\"$$L\"/'"; \
	  fi \
	done )
