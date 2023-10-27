
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}


RELEASED_TMX      = $(wildcard *.tmx.gz)
CONVERTED_BITEXTS = ${patsubst %.tmx.gz,%.done,${RELEASED_TMX}}
MAXSIZE = 1000000


.PHONY: all
all: fetch
	${MAKE} convert

convert: ${CONVERTED_BITEXTS}
	${MAKE} -C .. xml/Makefile
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files



# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;s/\&\s*\#\s*160\s*\;/ /g;'
# UNICODE_CLEANUP := perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'

# UNICODE_CLEANUP := ftfy


fetch:
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1816/MaCoCu-tr-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1815/MaCoCu-bg-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1814/MaCoCu-hr-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1813/MaCoCu-sl-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1817/MaCoCu-mk-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1812/MaCoCu-is-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1811/MaCoCu-mt-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1818/MaCoCu-sq-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1819{/MaCoCu-sr-en.cyrillic.tmx.gz,/MaCoCu-sr-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1820{/MaCoCu-bs-en.cyrillic.tmx.gz,/MaCoCu-bs-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1821{/MaCoCu-cnr-en.cyrillic.tmx.gz,/MaCoCu-cnr-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1857/MaCoCu-ca-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1856/MaCoCu-el-en.tmx.gz
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1858/MaCoCu-uk-en.tmx.gz




fetch-all:
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1816{/MaCoCu-tr-en.doc.txt.gz,/MaCoCu-tr-en.sent.txt.gz,/MaCoCu-tr-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1815{/MaCoCu-bg-en.doc.txt.gz,/MaCoCu-bg-en.sent.txt.gz,/MaCoCu-bg-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1814{/MaCoCu-hr-en.doc.txt.gz,/MaCoCu-hr-en.sent.txt.gz,/MaCoCu-hr-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1813{/MaCoCu-sl-en.doc.txt.gz,/MaCoCu-sl-en.sent.txt.gz,/MaCoCu-sl-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1817{/MaCoCu-mk-en.doc.txt.gz,/MaCoCu-mk-en.sent.txt.gz,/MaCoCu-mk-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1812{/MaCoCu-is-en.doc.txt.gz,/MaCoCu-is-en.sent.txt.gz,/MaCoCu-is-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1811{/MaCoCu-mt-en.doc.txt.gz,/MaCoCu-mt-en.sent.txt.gz,/MaCoCu-mt-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1818{/MaCoCu-sq-en.doc.txt.gz,/MaCoCu-sq-en.sent.txt.gz,/MaCoCu-sq-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1819{/MaCoCu-sr-en.cyrillic.doc.txt.gz,/MaCoCu-sr-en.cyrillic.sent.txt.gz,/MaCoCu-sr-en.cyrillic.tmx.gz,/MaCoCu-sr-en.latin.doc.txt.gz,/MaCoCu-sr-en.latin.sent.txt.gz,/MaCoCu-sr-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1820{/MaCoCu-bs-en.cyrillic.doc.txt.gz,/MaCoCu-bs-en.cyrillic.sent.txt.gz,/MaCoCu-bs-en.cyrillic.tmx.gz,/MaCoCu-bs-en.latin.doc.txt.gz,/MaCoCu-bs-en.latin.sent.txt.gz,/MaCoCu-bs-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1821{/MaCoCu-cnr-en.cyrillic.doc.txt.gz,/MaCoCu-cnr-en.cyrillic.sent.txt.gz,/MaCoCu-cnr-en.cyrillic.tmx.gz,/MaCoCu-cnr-en.latin.doc.txt.gz,/MaCoCu-cnr-en.latin.sent.txt.gz,/MaCoCu-cnr-en.latin.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1857{/MaCoCu-ca-en.doc.txt.gz,/MaCoCu-ca-en.sent.txt.gz,/MaCoCu-ca-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1856{/MaCoCu-el-en.doc.txt.gz,/MaCoCu-el-en.sent.txt.gz,/MaCoCu-el-en.tmx.gz}
	curl --remote-name-all https://www.clarin.si/repository/xmlui/bitstream/handle/11356/1858{/MaCoCu-uk-en.doc.txt.gz,/MaCoCu-uk-en.sent.txt.gz,/MaCoCu-uk-en.tmx.gz}


${CONVERTED_BITEXTS}: %.done: %.tmx.gz
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && gzip -cd ${PWD}/$< | ${UNICODE_CLEANUP} | tmx2opus -p ${MAXSIZE} -o $(notdir $(@:.done=.xml.gz)) )
	touch $@

