
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}


RELEASED_TMX      = $(wildcard *.cc40-wide15-wide16-wide17.tmx.gz)
CONVERTED_BITEXTS = ${patsubst %.tmx.gz,%.done,${RELEASED_TMX}}
MAXSIZE = 100000


.PHONY: all
all: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files



# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;s/\&\s*\#\s*160\s*\;/ /g;'
UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'


${CONVERTED_BITEXTS}: %.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && gzip -cd ${PWD}/$< | ${UNICODE_CLEANUP} | tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@

