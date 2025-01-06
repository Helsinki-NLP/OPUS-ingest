#
# remove generated subtitles from zip files
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


LANG_ZIPFILES  := $(notdir $(wildcard ../xml/*.zip))
LANGUAGES      := $(sort $(patsubst %.zip,%,$(wildcard *.zip)))

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

SRC ?= fi
TRG ?= sv

PREV_RELEASE  := /projappl/nlpl/data/OPUS/OpenSubtitles/v2018
WORKHOME      := ${TMPDIR}/OPUS/${CORPUS}/devtest-xml
WORKDIR       := ${WORKHOME}/${SRC}-${TRG}
DIC_HOME      := ${WORKHOME}/dic
DICTIONARY    := ${DIC_HOME}/${SRC}-${TRG}.dic.gz
PREV_DICS     := ${PREV_RELEASE}/dic

SENTALIGN  := ../scripts/subalign.pl -A -t 0.5 -a 0.5 -d 0.75 \
		-r '-b -i 5 -m 10 -d ${DICTIONARY}' -m 10

SRC_MOVIES    := $(patsubst ${WORKDIR}/${SRC}/%,%,$(wildcard ${WORKDIR}/${SRC}/*/*))
TRG_MOVIES    := $(patsubst ${WORKDIR}/${TRG}/%,%,$(wildcard ${WORKDIR}/${TRG}/*/*))
COMMON_MOVIES := $(filter ${TRG_MOVIES},$(SRC_MOVIES))
ALGFILES      := $(addprefix ${WORKDIR}/$(SRC)-$(TRG)/,${COMMON_MOVIES})



.PHONY: all
all: ${LANG_ZIPFILES}
	${MAKE} align-all
	${MAKE} testsets
	${MAKE} devsets
	${MAKE} cleanup


##-------------------------------------------------------
## extraction of devtest files (released in DEVTEST_YEAR)
## also removes those files from original xml zipfile
##-------------------------------------------------------

%.zip:
	mkdir -p ${CORPUS}/xml/$(@:.zip=)
	echo "reserved devtest subtitles (release year ${DEVTEST_YEAR})" > ${CORPUS}/xml/$(@:.zip=)/README
	unzip ../xml/$@ '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
	zip -rq $@ ${CORPUS}/xml/$(@:.zip=)
	find ${CORPUS}/xml/$(@:.zip=) -delete
	zip ../xml/$@ -d '*/$(@:.zip=)/${DEVTEST_YEAR}/*'


##---------------------------------------
## alignment-related targets
##---------------------------------------

.PHONY: cleanup
cleanup:
	if [ $(words $(wildcard done/*.gz)) -eq $(words $(LANGPAIRS)) ]; then \
	  if [ -d ${WORKHOME} ]; then \
	    find ${WORKHOME} -delete; \
	  fi; \
	  touch all.done; \
	fi

.PHONY: print-common-movies
print-common-movies: ${WORKDIR}/${SRC} ${WORKDIR}/${TRG}
	@echo "================================================"
	@echo "nr of source movies: $(words ${SRC_MOVIES})"
	@echo "nr of target movies: $(words ${TRG_MOVIES})"
	@echo "nr of common movies: $(words ${COMMON_MOVIES})"
	@echo "first in the list: $(firstword ${COMMON_MOVIES})"
	@echo "last in the list: $(lastword ${COMMON_MOVIES})"
	@echo "================================================"


.PHONY: align align-all align-job align-jobs

align: $(SRC)-$(TRG).xml.gz

align-all: ${BITEXT_ALGFILES}

align-job:
	${MAKE} HPC_CORES=32 HPC_DISK=500 HPC_MEM=16g align.submit

BITEXT_ALIGN_JOBS := $(patsubst %,%-job,${LANGPAIRS})

align-jobs: ${BITEXT_ALIGN_JOBS}

.PHONY: ${BITEXT_ALIGN_JOBS}
${BITEXT_ALIGN_JOBS}:
	if [ ! -e $(@:-job=.xml.gz) ]; then \
	  ${MAKE} HPC_CORES=16 HPC_DISK=100 HPC_MEM=16g EMAIL= $(@:-job=.xml.gz).submit; \
	fi


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
	  mkdir -p ../devtest-alt; \
	  if [ -s $$d/$(@:.xml.gz=.alt.xml.gz) ]; then \
	    mv -f $$d/$(@:.xml.gz=.alt.xml.gz) ../devtest-alt/$(@:.xml.gz=.alt.xml.gz); \
	  fi )
	mkdir -p done
	if [ -e ${WORKHOME}/$@ ]; then touch done/$@; fi
	${MAKE} cleanup




MAX_NR_MOVIES_TEST := 5
MIN_NR_MOVIES_TEST := 1

TESTSET_ALG_FILES  := $(addprefix test/,$(wildcard *.xml.gz))
DEVSET_ALG_FILES   := $(addprefix dev/,$(wildcard *.xml.gz))



.PHONY: testsets
testsets: ${TESTSET_ALG_FILES}

## extract test set movies with the highest alignment score (above 0.8 if possible)
## - take the top MAX_NR_MOVIES_TEST subtitle pairs if more that that exist
## - or leave at least one devset subtitle pair if more than MIN_NR_MOVIES_TEST exist
## - or take all the ones above 0.8 alignment score
## - or take MIN_NR_MOVIES_TEST or all we have from any subtitle pair

test/%.xml.gz: %.xml.gz
	mkdir -p $(dir $@)
	zgrep linkGrp $< | grep score | cut -f2,6,8 -d\" | tr '"' "\t" | sort -nr > $<.scores
	if [ `grep '^0.[89]' $<.scores | wc -l` -gt ${MAX_NR_MOVIES_TEST} ]; then \
	  head -n ${MAX_NR_MOVIES_TEST} $<.scores > $@.scores; \
	elif [ `grep '^0.[89]' $<.scores | wc -l` -gt ${MIN_NR_MOVIES_TEST} ]; then \
	  grep '^0.[89]' $<.scores | head -n -1 > $@.scores; \
	elif [ `grep '^0.[89]' $<.scores | wc -l` -gt 1 ]; then \
	  grep '^0.[89]' $<.scores > $@.scores; \
	else \
	  head -${MIN_NR_MOVIES_TEST} $<.scores > $@.scores; \
	fi
	f=`cut -f2,3 $@.scores | tr "\n" "\t" | tr "\t" '|' | sed 's/.$$//'` && \
	opus-read -l -n "($$f)" $< | gzip -c > $@
	if [ `zgrep '<link ' $@ | wc -l` -eq 0 ]; then rm -f $@; fi


.PHONY: devsets
devsets: ${DEVSET_ALG_FILES}

## take all subtitle pairs that are not part of the test set as the devset
## remove the file if there is no link

dev/%.xml.gz: test/%.xml.gz
	mkdir -p $(dir $@)
	f=`cut -f2,3 $<.scores | tr "\n" "\t" | tr "\t" '|' | sed 's/.$$//'` && \
	opus-read -l -N "($$f)" $(notdir $<) | gzip -c > $@
	if [ `zgrep '<link ' $@ | wc -l` -eq 0 ]; then rm -f $@; fi


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
	rm -f $@.links $@.altlinks
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


