#
# remove generated subtitles from zip files
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


LANG_ZIPFILES  := $(notdir $(wildcard ../raw/*.zip))

.PHONY: all
all: ${LANG_ZIPFILES}

%.zip:
	mkdir -p ${CORPUS}/raw/$(@:.zip=)
	echo "reserved devtest subtitles (release year ${DEVTEST_YEAR})" > ${CORPUS}/raw/$(@:.zip=)/README
	-unzip ../raw/$@ '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
	zip -rq $@ ${CORPUS}/raw/$(@:.zip=)
	find ${CORPUS}/raw/$(@:.zip=) -delete
	-zip ../raw/$@ -d '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
