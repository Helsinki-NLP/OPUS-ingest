

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


LANGUAGE ?= en


## subtitle files to be converted
## in srt format and possibly also in sub format

SUBFILES     := $(shell if [ -e ${WORKDIR}/sub ]; then find ${WORKDIR}/sub -type f; fi)
SUB2SRTFILES := $(patsubst sub/%,${WORKDIR}/srt/%,${SUBFILES})


## srt-files for a specific languages

SRTFILES     := $(shell if [ -e ${WORKDIR}/srt/${LANGUAGE} ]; then find ${WORKDIR}/srt/${LANGUAGE} -type f; fi)
SRT2XMLFILES := $(patsubst ${WORKDIR}/srt/%.gz,${WORKDIR}/${CORPUS}/xml/%.xml,${SRTFILES})


## all languages that have been extracted and zipfiles of srt-files converted to XML
## (tokenized and raw)

LANGUAGES    := $(shell if [ -e ${WORKDIR}/srt ]; then ls ${WORKDIR}/srt/; fi)
LANGZIPXML   := $(patsubst %,../xml/new/%.zip,${LANGUAGES})
LANGZIPRAW   := $(patsubst %,../raw/new/%.zip,${LANGUAGES})


all:
	${MAKE} extract
	${MAKE} sort
	${MAKE} convert
	${MAKE} cleanup



.PHONY: extract
extract: ${WORKDIR}/srt
	if [ -e ${WORKDIR}/sub ]; then \
	  ${MAKE} convert-sub2srt; \
	fi

.PHONY: sort
sort: ${WORKDIR}/srt
	for l in `find $< -mindepth 1 -maxdepth 1 -type d -printf "%f "`; do \
	  tar -cf $$l.tar -C $< $$l; \
	done

.PHONY: convert
convert: ${LANGZIPXML} ${LANGZIPRAW}

.PHONY: cleanup
cleanup:
	find ${WORKDIR} -delete

.PHONY: convert-srt2xml
convert-srt2xml: ${SRT2XMLFILES}

.PHONY: convert-sub2srt
convert-sub2srt: ${SUB2SRTFILES}



## extract all srt-files from the OpenSubs tarball

${WORKDIR}/files: ${SUBTITLE_TARBALL}
	mkdir -p $(dir $@)
	-tar -C ${dir $@} -xf $<


## sort srt-files into language-specific sub-dirs

${WORKDIR}/srt: ${WORKDIR}/files
	cd ${WORKDIR} && \
	find files -type f | ${SUBTITLE_LANGSORT} ${SUBTITLE_METADATA}


## convert from sub to srt format

${SUB2SRTFILES}: ${WORKDIR}/srt/%: ${WORKDIR}/sub/%
	mkdir -p $(dir $@)
	gzip -cd $< > $@.sub
	../scripts/sub2srt/sub2srt $@.sub | gzip -c > $@
	rm -f $@.sub


## convert srt-files into XML and pack them up into a zip-file
## the conversion includes creating untokenized (raw) files

${LANGZIPXML}:
	if [ -e $(notdir $(@:.zip=)).tar ]; then \
	  mkdir -p ${WORKDIR}/srt; \
	  tar -xf $(notdir $(@:.zip=)).tar -C ${WORKDIR}/srt; \
	fi
	-${MAKE} LANGUAGE=$(notdir $(@:.zip=)) convert-srt2xml
	mkdir -p $(dir $@)
	find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -empty -delete
	cd ${WORKDIR} && zip -rq ${CORPUS}/xml/$(notdir $(@:.zip=)) ${PWD}/$@


## pack untokenized (raw) files into language-specific zip-files

${LANGZIPRAW}: ../raw/%: ../xml/%
	mkdir -p $(dir $@)
	find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.zip=)) -empty -delete
	cd ${WORKDIR} && zip -rq ${CORPUS}/raw/$(notdir $(@:.zip=)) ${PWD}/$@




SRT2XML = ../scripts/srt2xml.py

${SRT2XMLFILES}: ${WORKDIR}/${CORPUS}/xml/%.xml: ${WORKDIR}/srt/%.gz
	mkdir -p $(dir $@) $(dir $<)
	mkdir -p $(dir $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw/%,$<))
	if ${SRT2XML} -l $(firstword $(subst /, ,$(patsubst ${WORKDIR}/srt/%,%,$<))) -r $<.raw $< $<.xml; then \
	  tidy -xml -utf8 -i < $<.xml > $@ 2>/dev/null; \
	  mv $<.raw > $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw/%,$<); \
	fi
	rm -f $<.raw $<.xml

