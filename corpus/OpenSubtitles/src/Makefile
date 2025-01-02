

include ../Makefile.def
include ../../Makefile.def


## subtitle tarball with all files to be extracted
## metadata provides information about those files from the opensubs DB

SUBTITLE_TARBALL  := ${CURDIR}/export-2024.tar
SUBTITLE_METADATA := ${CURDIR}/export-2024.tsv.gz

## work directory with fast I/O
## and script for sorting subtitle files by language

WORKDIR           := ${TMPDIR}/OPUS/${CORPUS}/src
SUBTITLE_LANGSORT := ${CURDIR}/../scripts/sort_by_language.pl


## subtitle files to be converted (srt-files)
## for a specific selected language

LANGUAGE      ?= en
SRTFILES      := $(shell if [ -e ${WORKDIR}/srt/${LANGUAGE} ]; then find ${WORKDIR}/srt/${LANGUAGE} -type f; fi)
SRT2XML_FILES := $(patsubst ${WORKDIR}/srt/%.gz,${WORKDIR}/${CORPUS}/xml/%.xml,${SRTFILES})


## subtitle files in sub-format
## to be converted into srt format

SUBFILES      := $(shell if [ -e ${WORKDIR}/sub ]; then find ${WORKDIR}/sub -type f; fi)
SUB2SRT_FILES := $(patsubst sub/%,${WORKDIR}/srt/%,${SUBFILES})


## all languages that have been extracted

ifneq ($(wildcard subtitles.done),)
  LANGUAGES := $(patsubst %.tar,%,$(notdir $(wildcard subtitles/*.tar)))
else ifneq ($(wildcard ${WORKDIR}/srt),)
  LANGUAGES := $(notdir $(wildcard ${WORKDIR}/srt/*))
endif


## zipfiles of srt-files converted to XML
## (tokenized (xml) and untokenized (raw))
## NOTE: ze needs to be handled separately!

LANG_TAR_SRT := $(patsubst %,srt/%.tar,${LANGUAGES})
LANG_ZIP_XML := $(patsubst %,${CORPUSXML}/new/%.zip,$(filter-out ze,${LANGUAGES}))
ZE_ZIP_XML   := ${CORPUSXML}/new/zh_ze.zip


##--------------------
## top-level targets
##--------------------

.PHONY: all
all:
	${MAKE} extract
	${MAKE} convert
	${MAKE} cleanup

.PHONY: extract
extract: subtitles.done

## convert srt files into XML
## - convert all languages
## - convert a specific language (e.g. `make en-convert`)
## - special treatment for bilingual subtitles (ze)

.PHONY: convert
convert: ${LANG_ZIP_XML} ${ZE_ZIP_XML}

.PHONY: %-convert
%-convert:
	${MAKE} ${CORPUSXML}/new/$(patsubst %-convert,%.zip,$@)

.PHONY: ze-convert
ze-convert: ${CORPUSXML}/new/zh_ze.zip

.PHONY: cleanup
cleanup:
	if [ -d ${WORKDIR} ]; then find ${WORKDIR} -delete; fi

.PHONY: print-langs
print-langs:
	@echo ${LANGUAGES}

##--------------------
## submit SLURM jobs
##--------------------

.PHONY: all-jobs
all-jobs:
	${MAKE} extract-job
	while [ ! -e subtitles.done ]; do \
	  echo "waiting for subtitle extraction job"; \
	  sleep 10; \
	done
	${MAKE} convert-jobs

.PHONY: extract-job
extract-job:
	${MAKE} HPC_DISK=100 HPC_MEM=4g HPC_CORES=1 HPC_MODULES= extract.submit

CONVERT_JOBS = $(patsubst %,%-convert-job,${LANGUAGES})

.PHONY: convert-jobs
convert-jobs: ${CONVERT_JOBS}

.PHONY: ${CONVERT_JOBS}
${CONVERT_JOBS}: subtitles.done
	if [ ! -e ${CORPUSXML}/new/$(@:-job=).zip ]; then \
	  ${MAKE} HPC_DISK=100 HPC_MEM=32g HPC_CORES=16 HPC_MODULES= EMAIL= $(@:-job=).submit; \
	fi



##-----------------------------------
## extraction and conversion targets
##-----------------------------------

subtitles.done:
	${MAKE} ${WORKDIR}/srt
	if [ -e ${WORKDIR}/sub ]; then \
	  ${MAKE} convert-sub2srt; \
	fi
	mkdir -p subtitles
	for l in `find ${WORKDIR}/srt -mindepth 1 -maxdepth 1 -type d -printf "%f "`; do \
	  tar -cf subtitles/$$l.tar -C ${WORKDIR}/srt $$l; \
	done
	touch $@

.PHONY: convert-srt2xml
convert-srt2xml: ${SRT2XML_FILES}

.PHONY: convert-sub2srt
convert-sub2srt: ${SUB2SRT_FILES}



## extract all srt-files from the OpenSubs tarball

${WORKDIR}/files: ${SUBTITLE_TARBALL}
	mkdir -p $(dir $@)
	-tar -C ${dir $@} -xf $<


## sort srt-files into language-specific sub-dirs

${WORKDIR}/srt: ${WORKDIR}/files
	cd ${WORKDIR} && \
	find files -type f | ${SUBTITLE_LANGSORT} ${SUBTITLE_METADATA}


## convert from sub to srt format

${SUB2SRT_FILES}: ${WORKDIR}/srt/%: ${WORKDIR}/sub/%
	mkdir -p $(dir $@)
	gzip -cd $< > $@.sub
	../scripts/sub2srt/sub2srt $@.sub | gzip -c > $@
	rm -f $@.sub


## convert srt-files into XML and pack them up into a zip-file
## the conversion includes creating untokenized (raw) files

# ${LANG_ZIP_XML}:
${CORPUSXML}/new/%.zip: subtitles/%.tar
	mkdir -p ${WORKDIR}/srt
	tar -xf $< -C ${WORKDIR}/srt
	-${MAKE} LANGUAGE=$(notdir $(@:.zip=)) convert-srt2xml
	find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -empty -delete
	find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.zip=)) -empty -delete
	mkdir -p ${CORPUSXML}/new ${CORPUSRAW}/new
	if [ `find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq $@ ${CORPUS}/xml/$(notdir $(@:.zip=)); \
	fi
	if [ `find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.zip=)) -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq ${CORPUSRAW}/new/$(notdir $@) ${CORPUS}/raw/$(notdir $(@:.zip=)); \
	fi


${CORPUSXML}/new/zh_ze.zip: subtitles/ze.tar
	mkdir -p ${WORKDIR}/srt
	tar -xf $< -C ${WORKDIR}/srt
	-${MAKE} LANGUAGE=ze convert-srt2xml
	find ${WORKDIR}/${CORPUS}/xml/ze -empty -delete
	find ${WORKDIR}/${CORPUS}/raw/ze -empty -delete
	find ${WORKDIR}/${CORPUS}/xml2/ze -empty -delete
	find ${WORKDIR}/${CORPUS}/raw2/ze -empty -delete
	mv ${WORKDIR}/${CORPUS}/xml/ze ${WORKDIR}/${CORPUS}/xml/zh_ze
	mv ${WORKDIR}/${CORPUS}/raw/ze ${WORKDIR}/${CORPUS}/raw/zh_ze
	mv ${WORKDIR}/${CORPUS}/xml2/ze ${WORKDIR}/${CORPUS}/xml/en_ze
	mv ${WORKDIR}/${CORPUS}/raw2/ze ${WORKDIR}/${CORPUS}/raw/en_ze
	mkdir -p ${CORPUSXML}/new ${CORPUSRAW}/new
	if [ `find ${WORKDIR}/${CORPUS}/xml/zh_ze -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq $@ ${CORPUS}/xml/zh_ze; \
	fi
	if [ `find ${WORKDIR}/${CORPUS}/raw/zh_ze -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq ${CORPUSRAW}/new/zh_ze.zip ${CORPUS}/raw/zh_ze; \
	fi
	if [ `find ${WORKDIR}/${CORPUS}/xml/en_ze -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq ${CORPUSXML}/new/en_ze.zip ${CORPUS}/xml/en_ze; \
	fi
	if [ `find ${WORKDIR}/${CORPUS}/raw/en_ze -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq ${CORPUSRAW}/new/en_ze.zip ${CORPUS}/raw/en_ze; \
	fi


subtitles/%.tar: subtitles.done


##------------------------------------------------------------------
## extract subtitle files from the previous data export
## --> this can be used to convert srt-files that have been missed
##     by the previous release like Occitan, for example
## e.g. run for Occitan: `make oc-convert-prev`
##------------------------------------------------------------------


# MISSING_PREV_LANGS := ast az kn ku oc sw
MISSING_PREV_LANGS := ast az be egy ext haw km kn ku lb mn me my nb nn oc pt_MZ sco sw syr
MISSING_PREV_LANG_TARGETS := $(patsubst %,%-convert-prev,${MISSING_PREV_LANGS})

subtitles-prev.done: ${MISSING_PREV_LANG_TARGETS}
	touch $@

CONVERT_PREV_JOBS = $(patsubst %,%-convert-prev-job,${MISSING_PREV_LANGS})

.PHONY: convert-prev-jobs
convert-prev-jobs: ${CONVERT_PREV_JOBS}


.PHONY: ${CONVERT_PREV_JOBS}
${CONVERT_PREV_JOBS}:
	if [ ! -e ${CORPUSXML}/prev/$(@:-convert-prev-job=).zip ]; then \
	  ${MAKE} HPC_DISK=100 HPC_MEM=32g HPC_CORES=16 HPC_MODULES= EMAIL= $(@:-job=).submit; \
	fi

.PHONY: %-convert-prev
%-convert-prev:
	${MAKE} ${CORPUSXML}/prev/$(patsubst %-convert-prev,%.zip,$@)

lang2to3 = $(shell \
	if   [ "$1" == "pt_MZ" ]; then echo "pom"; \
	elif [ "$1" == "pt_BR" ]; then echo "pob"; \
	elif [ "$1" == "me" ]; then echo "mne"; \
	elif [ "$1" == "my" ]; then echo "bur"; \
	elif [ "$1" == "zh" ]; then echo "chi"; \
	elif [ "$1" == "syc" ]; then echo "syr"; \
	else iso639 -3 -n $1; \
	fi )

subtitles-prev/%.tar: export_all_subs.files
	mkdir -p $(dir $@)
	zgrep '"$(call lang2to3,$(notdir $(@:.tar=)))"' export_all.csv.gz |\
	sed 's/","/	/g' | cut -f2 | sort > $@.file-ids
	join -1 1 -2 2 $@.file-ids $< | cut -f2 -d' ' > $@.files
	mkdir -p ${WORKDIR}/$@.d
	tar -C ${WORKDIR}/$@.d -xf export_all_subs.tar -T $@.files
	cd ${WORKDIR}/$@.d && \
	find data -type f | ${SUBTITLE_LANGSORT} $(CURDIR)/export_all.csv.gz
	tar -cf $@ -C ${WORKDIR}/$@.d/srt $(notdir $(@:.tar=))

export_all_subs.files:
	tar -tf export_all_subs.tar |\
	grep '\.gz' | \
	sed 's/\/\([0-9]*\)\.gz/\/\1.gz	\1/' | \
	sort -k2,2 > $@

${CORPUSXML}/prev/%.zip: subtitles-prev/%.tar
	mkdir -p ${WORKDIR}/srt
	tar -xf $< -C ${WORKDIR}/srt
	-${MAKE} LANGUAGE=$(notdir $(@:.zip=)) convert-srt2xml
	find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -empty -delete
	find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.zip=)) -empty -delete
	mkdir -p ${CORPUSXML}/prev ${CORPUSRAW}/prev
	if [ `find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq $@ ${CORPUS}/xml/$(notdir $(@:.zip=)); \
	fi
	if [ `find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.zip=)) -type f | wc -l` -gt 0 ]; then \
	  cd ${WORKDIR} && zip -rq ${CORPUSRAW}/prev/$(notdir $@) ${CORPUS}/raw/$(notdir $(@:.zip=)); \
	fi






SRT2XML = ../scripts/srt2xml.py

${SRT2XML_FILES}: ${WORKDIR}/${CORPUS}/xml/%.xml: ${WORKDIR}/srt/%.gz
	mkdir -p $(dir $@) $(dir $<)
	mkdir -p $(dir $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw/%,$@))
	if ${SRT2XML} -l $(firstword $(subst /, ,$(patsubst ${WORKDIR}/srt/%,%,$<))) -r $<.raw $< $<.xml; then \
	  tidy -xml -utf8 -i < $<.xml > $@ 2>/dev/null; \
	  mv $<.raw $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw/%,$@); \
	fi
	rm -f $<.raw $<.xml

## special treatment for bilingual subtitles (ze)

	if [ $(firstword $(subst /, ,$(patsubst ${WORKDIR}/srt/%,%,$<))) == 'ze' ]; then \
	  mkdir -p $(dir $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/xml2/%,$@)); \
	  mkdir -p $(dir $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw2/%,$@)); \
	  tidy -xml -utf8 -i \
		< $(<:.gz=2.gz).xml \
		> $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/xml2/%,$@) 2>/dev/null; \
	  mv $(<:.gz=2.gz).raw $(patsubst ${WORKDIR}/${CORPUS}/xml/%,${WORKDIR}/${CORPUS}/raw2/%,$@); \
	fi
