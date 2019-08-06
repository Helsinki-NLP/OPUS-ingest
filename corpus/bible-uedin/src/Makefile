
include ../../Makefile.def
include ../Makefile.def

BIBLES = ${wildcard bible-corpus/bibles/*.xml}
BIBLES_DONE = ${patsubst %.xml,%.done,${BIBLES}}

ifndef BIBLE
  BIBLE = ${firstword ${BIBLES}}
endif

BIBLE_DONE = ${patsubst %.xml,%.done,${BIBLE}}
BIBLE_LANG3 = ${shell grep -o "iso639=[\'\"][^ ]*[\'\"]" "${BIBLE}" | sed "s/iso639=[\'\"]\([^ ]*\)[\'\"]/\1/"}
BIBLE_LANG2 = ${shell opus-iso639 ${BIBLE_LANG3}}

ifeq (${BIBLE_LANG2},)
  BIBLE_LANG2 = ${BIBLE_LANG3}
endif


all: bible-corpus
	${MAKE} convert


convert: ${BIBLES_DONE}

.PHONY: convert-bible
convert-bible:
	mkdir -p ${CORPUSRAW}/${BIBLE_LANG2}
	xml2opus -l ${BIBLE_LANG2} -H cesHeader < ${BIBLE} | \
	gzip -c > ${CORPUSRAW}/${BIBLE_LANG2}/${notdir ${BIBLE}}.gz

bible-corpus: 
	git clone https://github.com/christos-c/bible-corpus

${BIBLES_DONE}: %.done: %.xml
	${MAKE} BIBLE=$< convert-bible
	touch $@



lang:
	@echo "${BIBLE}	${BIBLE_LANG3} - ${BIBLE_LANG2}"

all-lang:
	for b in ${BIBLES}; do make BIBLE=$$b lang; done


