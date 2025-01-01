#
# remove generated subtitles from zip files
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


LANG_ZIPFILES  := $(notdir $(wildcard ../xml/*.zip))

.PHONY: all
all: ${LANG_ZIPFILES}

%.zip:
	mkdir -p ${CORPUS}/xml/$(@:.zip=)
	echo "reserved devtest subtitles (release year ${DEVTEST_YEAR})" > ${CORPUS}/xml/$(@:.zip=)/README
	-unzip ../xml/$@ '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
	zip -rq $@ ${CORPUS}/xml/$(@:.zip=)
	find ${CORPUS}/xml/$(@:.zip=) -delete
	-zip ../xml/$@ -d '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
