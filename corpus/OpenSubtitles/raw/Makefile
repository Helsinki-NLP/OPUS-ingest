# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


# source and target languages

LANGUAGES := $(sort $(patsubst %.zip,%,$(wildcard *.zip)))

SRC ?= $(firstword ${LANGUAGES} fi)
TRG ?= $(lastword sv ${LANGUAGES})

WORKHOME := ${TMPDIR}/OPUS/${CORPUS}/raw
WORKDIR  := ${WORKHOME}/${SRC}-${TRG}


PREV_RELEASE := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018

NEW_ZIPFILES  := $(notdir $(wildcard new/*.zip))
PREV_ZIPFILES := $(notdir $(wildcard ${PREV_RELEASE}/raw/*.zip))

NEW_ZIPFILES_LOWCASE := $(shell echo "${NEW_ZIPFILES}" | tr 'A-Z' 'a-z')
OLD_ZIPFILES := $(filter-out ${NEW_ZIPFILES} ${NEW_ZIPFILES_LOWCASE},${PREV_ZIPFILES})


## merge old and new data

.PHONY: merge-all merge-jobs

merge-all: ${NEW_ZIPFILES}
	for z in ${OLD_ZIPFILES}; do \
	  if [ ! -e $$z ]; then \
	    cp ${PREV_RELEASE}/raw/$$z $$z; \
	  fi \
	done

.PHONY: print-only-in-previous-release
print-only-in-previous-release:
	@echo "${OLD_ZIPFILES}"


MERGE_NEW_JOBS := $(patsubst %.zip,%-job,${NEW_ZIPFILES})

merge-jobs: ${MERGE_NEW_JOBS}

.PHONY: ${MERGE_NEW_JOBS}
${MERGE_NEW_JOBS}:
	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=4g $(@:-job=.zip).submit


## merge previous XML files with new files

%.zip: new/%.zip
	mkdir -p ${WORKDIR}
	rsync $< ${WORKDIR}/$@
	unzip -q -d ${WORKDIR} ${WORKDIR}/$@
	rm -f ${WORKDIR}/$@
	-${MAKE} ${WORKDIR}/previous/$@
	-if [ -s ${WORKDIR}/previous/$@ ]; then \
	  unzip -d ${WORKDIR}/${CORPUS}/raw -n ${WORKDIR}/previous/$@; \
	  rm -f ${WORKDIR}/previous/$@; \
	fi
	cd ${WORKDIR} && zip -q -r ${PWD}/$@ ${CORPUS}/raw/$(@:.zip=)
	rm -fr ${WORKDIR}/${CORPUS}/raw/$(@:.zip=)
	find ${WORKDIR} -delete
	${MAKE} -C generated $@
	${MAKE} -C ../devtest-xml $@

## extract and move files from previous release

SUBTITLE_LANGSORT  := ${PWD}/../scripts/sort_by_language.pl
PREVIOUS_RELEASE   := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018/raw
PREVIOUS_INFO_FILE := ${PWD}/../src/export_all.csv.gz

${WORKDIR}/previous/%.zip:
	( l=$(notdir $(@:.zip=)); \
	  o=${PREVIOUS_RELEASE}/$$l.zip; \
	  if [ ! -e $$o ]; then \
	    o=`echo $$o | tr 'A-Z' 'a-z'`; \
	  fi; \
	  if [ -e $$o ]; then \
	    mkdir -p $(dir $@); \
	    unzip -q -d $(dir $@) $$o; \
	    cd  $(dir $@) && find ${CORPUS} -type f | ${SUBTITLE_LANGSORT} ${PREVIOUS_INFO_FILE}; \
	    cd ${WORKDIR}/previous/xml && zip -r -q $@ $$l; \
	  fi )

${WORKDIR}/previous/zh_ze.zip:
	mkdir -p $(dir $@)/zh
	unzip -q -d $(dir $@)/zh ${PREVIOUS_RELEASE}/ze_zh.zip
	cd  $(dir $@)/zh && find ${CORPUS} -type f | ${SUBTITLE_LANGSORT} ${PREVIOUS_INFO_FILE}
	mv ${WORKDIR}/previous/zh/raw/ze ${WORKDIR}/previous/zh/raw/zh_ze
	cd ${WORKDIR}/previous/zh/raw && zip -r -q $@ zh_ze

${WORKDIR}/previous/en_ze.zip:
	mkdir -p $(dir $@)/en
	unzip -q -d $(dir $@)/en ${PREVIOUS_RELEASE}/ze_en.zip
	cd  $(dir $@)/en && find ${CORPUS} -type f | ${SUBTITLE_LANGSORT} ${PREVIOUS_INFO_FILE}
	mv ${WORKDIR}/previous/en/raw/ze ${WORKDIR}/previous/en/raw/en_ze
	cd ${WORKDIR}/previous/en/raw && zip -r -q $@ en_ze
