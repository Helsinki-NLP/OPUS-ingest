

include ../Makefile.def
include ../../Makefile.def


## subtitle tarball with all files to be extracted
## metadata provides information about those files from the opensubs DB

SUBTITLE_TARBALL  := ${PWD}/export-2024.tar
SUBTITLE_METADATA := ${PWD}/export-2024.tsv.gz

## work directory with fast I/O
## and script for sorting subtitle files by language

WORKDIR           := ${TMPDIR}/OPUS/${CORPUS}/src
SUBTITLE_LANGSORT := ${PWD}/../scripts/sort_by_language.pl


## subtitle files to be converted
## in srt format and possibly also in sub format

SUBFILES     := $(shell if [ -e ${WORKDIR}/sub ]; then find ${WORKDIR}/sub -type f; fi)
SRTFILES     := $(shell if [ -e ${WORKDIR}/srt ]; then find ${WORKDIR}/srt -type f; fi)

SUB2SRTFILES := $(patsubst sub/%,${WORKDIR}/srt/%,${SUBFILES})
SRT2XMLFILES := $(patsubst ${WORKDIR}/srt/%.gz,../xml/%.xml.gz,${SRTFILES})



all:
	-${MAKE} extract
	-${MAKE} convert-sub2srt
	${MAKE} convert
	${MAKE} cleanup



.PHONY: extract
extract: ${WORKDIR}/srt

.PHONY: convert
convert: ${SRT2XMLFILES}

.PHONY: convert-sub2srt
convert-sub2srt: ${SUB2SRTFILES}

.PHONY: cleanup
cleanup:
	find ${WORKDIR}/OPUS -delete


${WORKDIR}/files: ${SUBTITLE_TARBALL}
	mkdir -p $(dir $@)
	tar -C ${dir $@} -xf $<

${WORKDIR}/srt: ${WORKDIR}/files
	cd ${WORKDIR} && \
	find files -type f | ${SUBTITLE_LANGSORT} ${SUBTITLE_METADATA}


${SUB2SRTFILES}: ${WORKDIR}/srt/%: ${WORKDIR}/sub/%
	mkdir -p $(dir $@)
	gzip -cd $< > $@.sub
	../scripts/sub2srt/sub2srt $@.sub | gzip -c > $@
	rm -f $@.sub

SRT2XML = ../scripts/srt2xml.py

${SRT2XMLFILES}: ../xml/%.xml.gz: ${WORKDIR}/srt/%.gz
	mkdir -p $(dir $@) $(dir $(patsubst ../xml/%,../raw/%,$@))
	if ${SRT2XML} -l $(word 3,$(subst /, ,$@)) -r $<.raw $< $<.xml; then \
	  tidy -xml -utf8 -i < $<.xml 2>/dev/null | gzip -c > $@; \
	  gzip -c < $<.raw > $(patsubst ../xml/%,../raw/%,$@); \
	fi
	rm -f $<.raw $<.xml

