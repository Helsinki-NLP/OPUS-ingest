# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


# source and target languages

LANGUAGES := $(sort $(patsubst %.zip,%,$(wildcard *.zip)))

SRC ?= $(firstword ${LANGUAGES} fi)
TRG ?= $(lastword sv ${LANGUAGES})


PREV_RELEASE  := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018

NEW_ZIPFILES  := $(sort $(notdir $(wildcard new/*.zip) $(wildcard prev/*.zip)))
PREV_ZIPFILES := $(notdir $(wildcard ${PREV_RELEASE}/xml/*.zip))

NEW_ZIPFILES_LOWCASE := $(shell echo "${NEW_ZIPFILES}" | tr 'A-Z' 'a-z')
OLD_ZIPFILES := $(filter-out ze_zh.zip ze_en.zip ${NEW_ZIPFILES} ${NEW_ZIPFILES_LOWCASE},${PREV_ZIPFILES})

LANGPAIRS := ${shell \
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ ! "$$s" > "$$t" ]]; then \
	      echo "$$s-$$t"; \
	    fi \
	  done \
	done  }

BITEXT_ALGFILES := $(patsubst %,%.xml.gz,${LANGPAIRS})

.PRECIOUS: ${BITEXT_ALGFILES}

WORKHOME   := ${TMPDIR}/OPUS/${CORPUS}/xml
WORKDIR    := ${WORKHOME}/${SRC}-${TRG}
DIC_HOME   := ${WORKHOME}/dic
DICTIONARY := ${DIC_HOME}/${SRC}-${TRG}.dic.gz
PREV_DICS  := ${PREV_RELEASE}/dic


# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters


SENTALIGN  = ../scripts/subalign.pl -A -t 0.5 -a 0.5 -d 0.75 \
		-r '-b -i 5 -m 10 -d ${DICTIONARY}' -m 10


## find movies that exist for both, source and target language
##
##   SRC_MOVIES    = all movie IDs in the source language
##   TRG_MOVIES    = all movie IDs in the target language
##   COMMON_MOVIES = movie IDs that exist in both lists
##   ALGFILES      = alignment directory for each common movie

SRC_MOVIES    := $(patsubst ${WORKDIR}/${SRC}/%,%,$(wildcard ${WORKDIR}/${SRC}/*/*))
TRG_MOVIES    := $(patsubst ${WORKDIR}/${TRG}/%,%,$(wildcard ${WORKDIR}/${TRG}/*/*))
COMMON_MOVIES := $(filter ${TRG_MOVIES},$(SRC_MOVIES))
ALGFILES      := $(addprefix ${WORKDIR}/$(SRC)-$(TRG)/,${COMMON_MOVIES})




##------------------------
## top-level targets
##------------------------


.PHONY: all
all:
	${MAKE} merge-all
	${MAKE} align-all


.PHONY: all-jobs
all-jobs:
	${MAKE} merge-jobs
	while [ ! `ls *.zip | wc -l` -eq $(words ${NEW_ZIPFILES}) ]; do \
	  echo "waiting for merge jobs"; \
	  sleep 10; \
	done
	for z in ${OLD_ZIPFILES}; do \
	  if [ ! -e $$z ]; then \
	    cp ${PREV_RELEASE}/xml/$$z $$z; \
	  fi \
	done
	${MAKE} align-jobs


.PHONY: print-common-movies
print-common-movies: ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}
	@echo "================================================"
	@echo "nr of source movies: $(words ${SRC_MOVIES})"
	@echo "nr of target movies: $(words ${TRG_MOVIES})"
	@echo "nr of common movies: $(words ${COMMON_MOVIES})"
	@echo "first in the list: $(firstword ${COMMON_MOVIES})"
	@echo "last in the list: $(lastword ${COMMON_MOVIES})"
	@echo "================================================"


##--------------------------
## high-level targets for
## merging old and new data
##--------------------------

.PHONY: merge-all merge-jobs

merge-all: ${NEW_ZIPFILES}
	for z in ${OLD_ZIPFILES}; do \
	  if [ ! -e $$z ]; then \
	    cp ${PREV_RELEASE}/xml/$$z $$z; \
	  fi \
	done

.PHONY: print-only-in-previous-release
print-only-in-previous-release:
	@echo "${OLD_ZIPFILES}"


MERGE_NEW_JOBS := $(patsubst %.zip,%-job,${NEW_ZIPFILES})

merge-jobs: ${MERGE_NEW_JOBS}

.PHONY: ${MERGE_NEW_JOBS}
${MERGE_NEW_JOBS}:
	if [ ! -e $(@:-job=.zip) ]; then \
	  ${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=4g EMAIL= $(@:-job=.zip).submit; \
	fi


##-----------------------------------------------------------------------------
## high-level alignment tasks
##  - make align ...... make alignments for a selected language pair (SRC-TRG)
##  - make align-all .. align all language pairs
##  - make align-job .. submit alignment job for a selected langpair (SRC-TRG)
##  - make align-jobs . submit alignment jobs for all language pairs
##-----------------------------------------------------------------------------


.PHONY: align align-all align-job align-jobs

align: $(SRC)-$(TRG).xml.gz

align-all: ${BITEXT_ALGFILES}

align-job:
	${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_MEM=16g align.submit

BITEXT_ALIGN_JOBS := $(patsubst %,%-job,${LANGPAIRS})

align-jobs: ${BITEXT_ALIGN_JOBS}

.PHONY: ${BITEXT_ALIGN_JOBS}
${BITEXT_ALIGN_JOBS}:
	if [ ! -e $(@:-job=.xml.gz) ]; then \
	  ${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_MEM=16g EMAIL= $(@:-job=.xml.gz).submit; \
	fi





##---------------------------------------------------------
## merge previous XML files with new files
## remove generated subtitles (done in subdir generated/)
##---------------------------------------------------------

%.zip:
	mkdir -p ${WORKDIR}
	if [ -e new/$@ ]; then unzip -n -q -d ${WORKDIR} new/$@; fi
	if [ -e prev/$@ ]; then unzip -n -q -d ${WORKDIR} prev/$@; fi
	${MAKE} ${WORKDIR}/previous/$@
	unzip -q -d ${WORKDIR}/${CORPUS}/xml -n ${WORKDIR}/previous/$@
	rm -f ${WORKDIR}/previous/$@
	cd ${WORKDIR} && zip -q -r ${PWD}/$@ ${CORPUS}/xml/$(@:.zip=)
	rm -fr ${WORKDIR}/${CORPUS}/xml/$(@:.zip=)
	find ${WORKDIR} -delete
	-${MAKE} -C generated $@
	-${MAKE} -C ../devtest-xml $@


## extract and move files from previous release

SUBTITLE_LANGSORT  := ${PWD}/../scripts/sort_by_language.pl
PREVIOUS_RELEASE   := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018/xml
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
	if [ $(notdir $(@:.zip=)) == zh_ze ]; then mv $@.d/xml/ze $@.d/xml/zh_ze; fi
	if [ $(notdir $(@:.zip=)) == en_ze ]; then mv $@.d/xml/ze $@.d/xml/en_ze; fi
	cd $@.d/xml && zip -r -q $@ $(notdir $(@:.zip=))
	find $@.d -delete

##-------------------------------
## alignment-related targets
##-------------------------------

%.xml.gz:
	( s=$(firstword $(subst -, ,$(@:.xml.gz=))); \
	  t=$(lastword $(subst -, ,$(@:.xml.gz=))); \
	  d=${WORKHOME}/$$s-$$t; \
	  ${MAKE} SRC=$$s TRG=$$t WORKDIR=$$d $$d/$@; \
	  for f in $@ $(@:.xml.gz=.out.gz) $(@:.xml.gz=.err.gz); do \
	    if [ -s $$d/$$f ]; then \
	      mv -f $$d/$$f $$f; \
	    fi \
	  done; \
	  mkdir -p ../alt; \
	  if [ -s $$d/$(@:.xml.gz=.alt.xml.gz) ]; then \
	    mv -f $$d/$(@:.xml.gz=.alt.xml.gz) ../alt/$(@:.xml.gz=.alt.xml.gz); \
	  fi )
	mkdir -p done
	touch done/$@


## work copies of source and target language subtitles

$(sort ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}): ${WORKDIR}/%: %.zip
	mkdir -p $(dir $@)
	rsync $< $@.zip
	unzip -q -d $(dir $@) $@.zip
	rm -f $@.zip
	mv ${WORKDIR}/${CORPUS}/xml/$(notdir $@) ${WORKDIR}/
	touch $@

## bilingual dictionary from previous release (used in alignment)

${DICTIONARY}:
	mkdir -p $(dir $@)
	if [ -e ${PREV_DICS}/$(notdir $@) ]; then \
	  cp ${PREV_DICS}/$(notdir $@) $@; \
	elif [ -e ${PREV_DICS}/`echo $(notdir $@) | tr 'A-Z' 'a-z'` ]; then \
	  cp ${PREV_DICS}/`echo $(notdir $@) | tr 'A-Z' 'a-z'` $@; \
	else \
	  echo '' | gzip -c > $@; \
	fi

## sentence alignment file in work directory

${WORKDIR}/${SRC}-${TRG}.xml.gz: $(sort ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}) ${DICTIONARY}
	${MAKE} print-common-movies
	${MAKE} align-files
	find ${WORKDIR}/${SRC}-${TRG} -empty -delete
	-( find ${WORKDIR}/${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep -v '/alt/' | sort |\
		xargs zgrep --no-filename 'link' |\
		sed 's|${WORKDIR}/||g;s/\.xml\"/\.xml.gz\"/g;' >> $@.links )
	-( find ${WORKDIR}/${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep '/alt/' | sort |\
		xargs zgrep --no-filename 'link' |\
		sed 's|${WORKDIR}/||g;s/\.xml\"/\.xml.gz\"/g;' >> $@.altlinks )
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.links >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip -f $@.tmp; \
	  mv $@.tmp.gz $@; \
	fi
	if [ -s $@.altlinks ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.altlinks >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip -f $@.tmp; \
	  mv -f $@.tmp.gz $(@:.xml.gz=.alt.xml.gz); \
	fi
	-find ${WORKDIR}/${SRC}-${TRG} -name '*.out' | xargs cat | sed 's|${WORKDIR}/||g' | gzip -c > $(@:.xml.gz=.out.gz)
	-find ${WORKDIR}/${SRC}-${TRG} -name '*.err' | xargs cat | sed 's|${WORKDIR}/||g' | gzip -c > $(@:.xml.gz=.err.gz)
	-rm -f $@.links $@.altlinks
	find ${WORKDIR}/${SRC}-${TRG} -delete
	for l in $(sort ${SRC} ${TRG}); do \
	  find ${WORKDIR}/$$l -delete; \
	done
	rm -f ${DICTIONARY}


# sentence alignment for each movie

.PHONY: align-files
align-files: ${ALGFILES}

${ALGFILES}: ${WORKDIR}/${SRC}-${TRG}/%: ${WORKDIR}/${SRC}/% ${WORKDIR}/${TRG}/%
	mkdir -p $(dir $@)
	${SENTALIGN} $< $(patsubst ${WORKDIR}/${SRC}/%,${WORKDIR}/${TRG}/%,$<) > $@.out 2> $@.err


