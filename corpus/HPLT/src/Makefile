
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}



RELEASED_TMX      = $(wildcard *.tmx.gz)
CONVERTED_BITEXTS = ${patsubst %.tmx.gz,%.done,${RELEASED_TMX}}
MAXSIZE = 1000000


.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files

fetch:
	for l in ${TRG_LANGUAGES}; do \
	  wget -q https://object.pouta.csc.fi/HPLT-bitexts-v3/clean/$$l-en/$$l-en.all_collections.tmx.gz; \
	done
	zcat  no-en.all_collections.tmx.gz | sed 's/lang="no"/lang="nn"/g' | gzip -c > nn-en.all_collections.tmx.gz
	rm -f no-en.all_collections.tmx.gz
	touch $@


# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;s/\&\s*\#\s*160\s*\;/ /g;'
# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'
UNICODE_CLEANUP := ftfy


${CONVERTED_BITEXTS}: %.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
#	( cd ${CORPUSRAW} && gzip -cd ${PWD}/$< | ${UNICODE_CLEANUP} | tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	( cd ${CORPUSRAW} && ../scripts/fix_utf8_errors.py ${PWD}/$< | tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@

