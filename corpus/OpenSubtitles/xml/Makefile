# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


# source and target languages

LANGUAGES := $(sort $(patsubst %.zip,%,$(wildcard *.zip)))

SRC ?= $(firstword ${LANGUAGES} fi)
TRG ?= $(lastword sv ${LANGUAGES})


PREV_RELEASE := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018

NEW_ZIPFILES  := $(notdir $(wildcard new/*.zip))
PREV_ZIPFILES := $(notdir $(wildcard ${PREV_RELEASE}/xml/*.zip))

NEW_ZIPFILES_LOWCASE := $(shell echo "${NEW_ZIPFILES}" | tr 'A-Z' 'a-z')
OLD_ZIPFILES := $(filter-out ${NEW_ZIPFILES} ${NEW_ZIPFILES_LOWCASE},${PREV_ZIPFILES})


LANGPAIRS := ${shell \
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ ! "$$s" > "$$t" ]]; then \
	      echo "$$s-$$t"; \
	    fi \
	  done \
	done  }

BITEXT_ALGFILES := $(patsubst %,%.xml.gz,${LANGPAIRS})
MAX_SLURM_JOBS  := 200

.PRECIOUS: ${BITEXT_ALGFILES}

WORKHOME   := ${TMPDIR}/OPUS/${CORPUS}/xml
WORKDIR    := ${WORKHOME}/${SRC}-${TRG}
DIC_HOME   := ${WORKHOME}/dic
DICTIONARY := ${DIC_HOME}/${SRC}-${TRG}.dic.gz
PREV_DICS  := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018/dic/




# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters


SENTALIGN  = ../scripts/subalign.pl -A -t 0.5 -a 0.5 -d 0.75 \
		-r '-b -i 5 -m 10 -d ${DICTIONARY}' -m 10


SRC_MOVIES    := $(patsubst ${WORKDIR}/${SRC}/%,%,$(wildcard ${WORKDIR}/${SRC}/*/*))
TRG_MOVIES    := $(patsubst ${WORKDIR}/${TRG}/%,%,$(wildcard ${WORKDIR}/${TRG}/*/*))
COMMON_MOVIES := $(filter ${TRG_MOVIES},$(SRC_MOVIES))
ALGFILES      := $(addprefix ${WORKDIR}/$(SRC)-$(TRG)/,${COMMON_MOVIES})

print_common_movies: ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}
	@echo "nr of source movies: $(words ${SRC_MOVIES})"
	@echo "nr of target movies: $(words ${TRG_MOVIES})"
	@echo "nr of common movies: $(words ${COMMON_MOVIES})"
	@echo "first in the list: $(firstword ${COMMON_MOVIES})"
	@echo "last in the list: $(lastword ${COMMON_MOVIES})"




.PHONY: all

all: ${BITEXT_ALGFILES}



## merge old and new data

.PHONY: merge-all merge-jobs

merge-all: ${NEW_ZIPFILES}
	for z in ${OLD_ZIPFILES}; do \
	  if [ ! -e $$z ]; then \
	    cp ${PREV_RELEASE}/xml/$$z $$z; \
	  fi \
	done


MERGE_NEW_JOBS := $(patsubst %,%-job,${NEW_ZIPFILES})

merge-jobs: ${MERGE_NEW_JOBS}

${MERGE_NEW_JOBS}:
	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=4g $(@:-job=.zip).submit



## alignment tasks

.PHONY: align align-all align-job align-jobs

align: $(SRC)-$(TRG).xml.gz

align-all: ${BITEXT_ALGFILES}

align-job:
	${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_MEM=16g align.submit

BITEXT_ALIGN_JOBS := $(patsubst %,%-job,${LANGPAIRS})

align-jobs: ${BITEXT_ALIGN_JOBS}

${BITEXT_ALIGN_JOBS}:
	${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_MEM=16g $(@:-job=.xml.gz).submit




##----------------------------------------------------------------
## temporary target to move files to new/

NEW_XML_FILES = $(patsubst %,new/%.zip,${LANGUAGES})

move-to-new: ${NEW_XML_FILES}

new/%.zip:
	mkdir -p ${WORKDIR}/$(dir $@) $(dir $@)
	rsync $(notdir $@) ${WORKDIR}/$@
	unzip -q -d ${WORKDIR} ${WORKDIR}/$@
	rm -f ${WORKDIR}/$@
	mkdir -p ${WORKDIR}/${CORPUS}/xml
	mv ${WORKDIR}/${CORPUS}/$(notdir $(@:.zip=)) ${WORKDIR}/${CORPUS}/xml/
	find ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=)) -name '*.xml.gz' \
	| xargs -P 8 gunzip -f
	cd ${WORKDIR} && zip -q -r $@ ${CORPUS}/xml/$(notdir $(@:.zip=))
	mv ${WORKDIR}/$@ $@
	rm -fr ${WORKDIR}/${CORPUS}/xml/$(notdir $(@:.zip=))
	mkdir -p old
	mv $(notdir $@) old/

##----------------------------------------------------------------





%.xml.gz:
	( s=$(firstword $(subst -, ,$(@:.xml.gz=))); \
	  t=$(lastword $(subst -, ,$(@:.xml.gz=))); \
	  d=${WORKHOME}/$$s-$$t; \
	  ${MAKE} SRC=$$s TRG=$$t WORKDIR=$$d $$d/$@; \
	  for f in $@ $(@:.xml.gz=.log.gz) $(@:.xml.gz=.err.gz); do \
	    if [ -s $$d/$$f ]; then \
	      mv -f $$d/$$f $$f; \
	    fi \
	  done; \
	  mkdir -p ../alt; \
	  if [ -s $$d/$(@:.xml.gz=.alt.xml.gz) ]; then \
	    mv -f $$d/$(@:.xml.gz=.alt.xml.gz) ../alt/$(@:.xml.gz=.alt.xml.gz); \
	  fi )


$(sort ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}): ${WORKDIR}/%: %.zip
	mkdir -p $(dir $@)
	rsync $< $@.zip
	unzip -q -d $(dir $@) $@.zip
	rm -f $@.zip
	mv ${WORKDIR}/${CORPUS}/xml/$(notdir $@) ${WORKDIR}/
	touch $@


## merge previous XML files with new files

%.zip: new/%.zip
	mkdir -p ${WORKDIR}
	rsync $< ${WORKDIR}/$@
	unzip -q -d ${WORKDIR} ${WORKDIR}/$@
	rm -f ${WORKDIR}/$@
	-${MAKE} ${WORKDIR}/previous/$@
	-if [ -s ${WORKDIR}/previous/$@ ]; then \
	  unzip -d ${WORKDIR}/${CORPUS}/xml -n ${WORKDIR}/previous/$@; \
	  rm -f ${WORKDIR}/previous/$@; \
	fi
	cd ${WORKDIR} && zip -q -r ${PWD}/$@ ${CORPUS}/xml/$(@:.zip=)
	rm -fr ${WORKDIR}/${CORPUS}/xml/$(@:.zip=)


## extract and move files from previous release

SUBTITLE_LANGSORT  := ${PWD}/../scripts/sort_by_language.pl
PREVIOUS_RELEASE   := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018/xml
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



${DICTIONARY}:
	mkdir -p $(dir $@)
	if [ -e ${PREV_DICS}/$(notdir $@) ]; then \
	  cp ${PREV_DICS}/$(notdir $@) $@; \
	elif [ -e ${PREV_DICS}/`echo $(notdir $@) | tr 'A-Z' 'a-z'` ]; then \
	  cp ${PREV_DICS}/`echo $(notdir $@) | tr 'A-Z' 'a-z'` $@; \
	else \
	  echo '' | gzip -c > $@; \
	fi


.PRECIOUS: ${WORKDIR}/${SRC}-${TRG}.xml.gz

${WORKDIR}/${SRC}-${TRG}.xml.gz: ${WORKDIR}/${SRC} ${WORKDIR}/${TRG} ${DICTIONARY}
	${MAKE} align-files
	find ${WORKDIR}/${SRC}-${TRG} -empty -delete
	-( find ${WORKDIR}/${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep -v '/alt/' | sort |\
		xargs zgrep --no-filename 'link' | sed 's/\.xml\"/\.xml.gz\"/g' >> $@.links )
	-( find ${WORKDIR}/${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep '/alt/' | sort |\
		xargs zgrep --no-filename 'link' | sed 's/\.xml\"/\.xml.gz\"/g' >> $@.altlinks )
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
	-find ${WORKDIR}/${SRC}-${TRG} -name '*.out' | xargs cat | sed 's#${WORKDIR}/##' | gzip -c > $(@:.xml.gz=.log.gz)
	-find ${WORKDIR}/${SRC}-${TRG} -name '*.err' | xargs cat | sed 's#${WORKDIR}/##' | gzip -c > $(@:.xml.gz=.err.gz)
	-rm -f $@.links $@.altlinks
	-rm -fr ${WORKDIR}/${SRC}-${TRG}






# sentence alignment for each movie

.PHONY: align-files
align-files: ${ALGFILES}

${ALGFILES}: ${WORKDIR}/${SRC}-${TRG}/%: ${WORKDIR}/${SRC}/% ${WORKDIR}/${TRG}/%
	mkdir -p $(dir $@)
	${SENTALIGN} $< $(patsubst ${WORKDIR}/${SRC}/%,${WORKDIR}/${TRG}/%,$<) > $@.out 2> $@.err


