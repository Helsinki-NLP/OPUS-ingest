# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


# source and target languages

LANGUAGES := $(sort $(patsubst %.zip,%,$(wildcard *.zip)))

SRC ?= fi
TRG ?= sv

WORKHOME := ${TMPDIR}/OPUS/${CORPUS}/raw
WORKDIR  := ${WORKHOME}/${SRC}-${TRG}


PREV_RELEASE := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018

NEW_ZIPFILES  := $(sort $(notdir $(wildcard new/*.zip) $(wildcard prev/*.zip)))
PREV_ZIPFILES := $(notdir $(wildcard ${PREV_RELEASE}/raw/*.zip))

NEW_ZIPFILES_LOWCASE := $(shell echo "${NEW_ZIPFILES}" | tr 'A-Z' 'a-z')
OLD_ZIPFILES := $(filter-out ze_zh.zip ze_en.zip ${NEW_ZIPFILES} ${NEW_ZIPFILES_LOWCASE},${PREV_ZIPFILES})


## merge old and new data

.PHONY: all all-jobs

all: ${NEW_ZIPFILES}
	${MAKE} copy-prev-release-files
	touch all.done

LEFT_TO_DO := $(filter-out $(notdir $(wildcard done/*.zip)),${NEW_ZIPFILES})

.PHONY: cleanup
cleanup:
	if [ $(words ${LEFT_TO_DO}) -eq 0 ]; then \
	  ${MAKE} copy-prev-release-files; \
	  if [ -d ${WORKHOME} ]; then \
	    find ${WORKHOME} -delete; \
	  fi; \
	  touch all.done; \
	fi


.PHONY: copy-prev-release-files
copy-prev-release-files:
	for z in ${OLD_ZIPFILES}; do \
	  if [ ! -e $$z ]; then \
	    cp ${PREV_RELEASE}/raw/$$z $$z; \
	  fi \
	done


MERGE_NEW_JOBS := $(patsubst %.zip,%-job,${NEW_ZIPFILES})

all-jobs: ${MERGE_NEW_JOBS}
	while [ $(words ${LEFT_TO_DO}) -ne 0 ]; do \
	  echo "waiting for merging raw zipfile jobs"; \
	  sleep 10; \
	fi
	touch all.done


.PHONY: ${MERGE_NEW_JOBS}
${MERGE_NEW_JOBS}:
	if [ ! -e $(@:-job=.zip) ]; then \
	  ${MAKE} HPC_CORES=1 HPC_DISK=200 HPC_MEM=4g EMAIL= $(@:-job=.zip).submit; \
	fi


.PHONY: print-only-in-previous-release
print-only-in-previous-release:
	@echo "${OLD_ZIPFILES}"

## merge previous XML files with new files
## TODO: is there a risk for a racing situation with the INFO file
##       between parallel jobs creating zip files?

%.zip:
	mkdir -p ${WORKDIR}
	if [ -e new/$@ ]; then unzip -n -q -d ${WORKDIR} new/$@; fi
	if [ -e prev/$@ ]; then unzip -n -q -d ${WORKDIR} prev/$@; fi
	${MAKE} ${WORKDIR}/previous/$@
	unzip -d ${WORKDIR}/${CORPUS}/raw -n ${WORKDIR}/previous/$@
	rm -f ${WORKDIR}/previous/$@
	echo "${CORPUS}/raw/$(@:.zip=)" > ${WORKDIR}/INFO
	echo "${CORPUS}"               >> ${WORKDIR}/INFO
	echo "${VERSION}"              >> ${WORKDIR}/INFO
	cd ${WORKDIR} && zip -q -r ${PWD}/$@ INFO ${CORPUS}/raw/$(@:.zip=)
	rm -fr ${WORKDIR}/${CORPUS}/raw/$(@:.zip=)
	find ${WORKDIR} -delete
	-${MAKE} -C generated $@
	-${MAKE} -C ../devtest-raw $@
	mkdir -p done
	touch done/$@
	${MAKE} cleanup


## extract and move files from previous release

SUBTITLE_LANGSORT  := ${PWD}/../scripts/sort_by_language.pl
PREVIOUS_RELEASE   := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018/raw
PREVIOUS_INFO_FILE := ${PWD}/../src/export_all.csv.gz

find_prev_langzip = $(shell \
	if   [ -e ${PREVIOUS_RELEASE}/$1 ]; then echo $1; \
	elif [ -e ${PREVIOUS_RELEASE}/`echo -n $1 | tr 'A-Z' 'a-z'` ]; then echo -n $1 | tr 'A-Z' 'a-z'; \
	elif [ "$1" == "zh_ze.zip" ]; then echo 'ze_zh.zip'; \
	elif [ "$1" == "en_ze.zip" ]; then echo 'ze_en.zip'; \
	else echo $1; \
	fi )

${WORKDIR}/previous/%.zip:
	mkdir -p $@.d/xml/$(notdir $(@:.zip=))
	( o=${PREVIOUS_RELEASE}/$(call find_prev_langzip,$(notdir $@)); \
	  if [ -e $$o ]; then \
	    unzip -q -d $@.d $$o; \
	    cd  $@.d && find ${CORPUS} -type f | ${SUBTITLE_LANGSORT} ${PREVIOUS_INFO_FILE}; \
	  fi )
	if [ $(notdir $(@:.zip=)) == zh_CN ]; then mv $@.d/xml/zh $@.d/xml/zh_CN; fi
	if [ $(notdir $(@:.zip=)) == zh_ze ]; then mv $@.d/xml/ze $@.d/xml/zh_ze; fi
	if [ $(notdir $(@:.zip=)) == en_ze ]; then mv $@.d/xml/ze $@.d/xml/en_ze; fi
	cd $@.d/xml && zip -r -q $@ $(notdir $(@:.zip=))
	find $@.d -delete

