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
	    if [[ "$$s" < "$$t" ]]; then \
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
all:
	-${MAKE} extract-devtest
	${MAKE} align-all
	${MAKE} testsets
	${MAKE} devsets
	${MAKE} cleanup
	touch all.done

.PHONY: all-jobs
all-jobs:
	-${MAKE} extract-devtest
	${MAKE} align-jobs
	while [ $(words $(wildcard done/*.gz)) -ne $(words $(LANGPAIRS)) ]; do \
	  echo "waiting for align jobs in devtest-xml"; \
	  sleep 10; \
	done
	${MAKE} testsets
	${MAKE} devsets
	touch all.done


check-broken:
	@for p in ${LANGPAIRS}; do \
	  if [ ! -e $$p.xml.gz ]; then \
	    if [ ! -e ../devtest-alt/$$p.xml.gz ]; then \
	      if [ -e done/$$p.xml.gz ]; then \
	        if [ `grep -i 'File exist' $$p.*.err.* | head -1 | wc -l` -gt 0 ]; then \
	          echo "missing: $$p"; \
	          rm -f done/$$p.xml.gz; \
	          ${MAKE} $$p-job; \
	        fi \
	      fi \
	    fi \
	  fi \
	done



## pivot-based multilingual dataset extraction

LINK_THRESHOLD   ?= 0.9
LINKED_DOCS      := linked-docs-with-scores-$(LINK_THRESHOLD).txt
MULTISET_HOMEDIR := multi-linksets-${LINK_THRESHOLD}
PIVOTSET_HOMEDIR := pivot-linksets-${LINK_THRESHOLD}
PIVOTSET_LINKS   := pivot-linksets-${LINK_THRESHOLD}.txt
PIVOTSET_FILE    := ${PIVOTSET_HOMEDIR}/pivot-data.tsv

pivot-linksets: ${LINKED_DOCS} $(PIVOTSET_LINKS) ${PIVOTSET_FILE}
	${MAKE} create-all-multisets

pivot-linksets-0.8:
	${MAKE} LINK_THRESHOLD=0.8 pivot-linksets

pivot-linksets-all:
	${MAKE} LINK_THRESHOLD=all pivot-linksets


## get a file with all linked documents in devtest

linked-docs-with-scores-all.txt:
	find . -name '*.xml.gz' | xargs zgrep '<linkGrp '   > $@.tmp
	find . -name '*.xml.gz' | xargs zgrep '<linkGrp '  >> $@.tmp
	find ../devtest-alt -name '*.xml.gz' | xargs zgrep '<linkGrp ' >> $@.tmp
	find ../devtest-alt -name '*.xml.gz' | xargs zgrep '<linkGrp ' >> $@.tmp
	grep -o 'fromDoc=[^ ]*"' $@.tmp | cut -f2 -d\" > $@.fromdoc
	grep -o 'toDoc=[^ ]*"' $@.tmp   | cut -f2 -d\" > $@.todoc
	grep -o 'score=[^ ]*"' $@.tmp   | cut -f2 -d\" > $@.score
	paste $@.fromdoc $@.todoc $@.score | sort -u | sort -k3,3 -t/ > $@
	rm -f $@.tmp $@.fromdoc $@.todoc $@.score


## extract document pairs above a certain alignment threshold (0.8 or 0.9)

linked-docs-with-scores-0.8.txt: linked-docs-with-scores-all.txt
	grep '	0.[8-9][0-9]*$$' $< > $@

linked-docs-with-scores-0.9.txt: linked-docs-with-scores-all.txt
	grep '	0.9[0-9]*$$' $< > $@


## find all linksets with a dedicated pivot language document
## (for a specific movieID) with the maximum number of aligned languages

${PIVOTSET_LINKS}: ${LINKED_DOCS}
	../scripts/find_link_pivot.pl < $< > $@

## extract the sentence alignments for all linksets listed in the file above
## the information about the link sets is stored in a new tsv file

MIN_NR_OF_MOVIES ?= 5
MIN_NR_OF_LANGS  ?= 10

${PIVOTSET_FILE}: ${PIVOTSET_LINKS}
	../scripts/extract_pivot_linksets.pl -m ${MIN_NR_OF_MOVIES} -l ${MIN_NR_OF_LANGS} -o $(dir $@) < $<



##--------------------------------------------------------------------------
## once all those link files have been extracted, we can start
## creating multi-parallel datasets, one per movieID in each language set
##
##   Each line in the tsv file needs to be used to call opus2multi
##   MULTI_NR sets the line number to be selected for `make create-multiset`
##   The generic `%-create-multiset` can be used to convert the set for each line
##   `make create-all-multiset` will call the generic target for all lines in the file
##
## NOTE: there can be thousands of lines in ${PIVOTSET_FILE}
##
## Examples:
##
##     make create-multiset
##     make MULTISET_NR=10 create-multiset
##     make 10-create-multiset
##     make create-all-multisets
##--------------------------------------------------------------------------

ifneq ($(wildcard ${PIVOTSET_FILE}),)

  NR_PIVOT_FILES    := $(shell wc -l < ${PIVOTSET_FILE})
  CREATE_MULTISETS  := $(addsuffix -create-multiset,$(shell seq ${NR_PIVOT_FILES}))
  EXTRACT_MULTISETS := $(addsuffix -extract-multiset,$(shell seq ${NR_PIVOT_FILES}))

  MULTISET_NR       ?= 1
  MULTISET_MOVIEDIR := $(shell head -${MULTISET_NR} ${PIVOTSET_FILE} | tail -1 | cut -f1)
  MULTISET_PIVOT    := $(shell head -${MULTISET_NR} ${PIVOTSET_FILE} | tail -1 | cut -f2)
  MULTISET_LANGS    := $(shell head -${MULTISET_NR} ${PIVOTSET_FILE} | tail -1 | cut -f3)

  MULTISET_DIR      := ${MULTISET_HOMEDIR}/${MULTISET_MOVIEDIR}
  PIVOTSET_DIR      := ${PIVOTSET_HOMEDIR}/${MULTISET_MOVIEDIR}

  MULTISET_ALGFILES := $(wildcard ${MULTISET_DIR}/*.xml)
  MULTISET_ALGSRC   := $(patsubst %.xml,%.src,${MULTISET_ALGFILES})
  MULTISET_ALGTRG   := $(patsubst %.xml,%.trg,${MULTISET_ALGFILES})

  MULTISET_PIVOT_TXT := ${MULTISET_DIR}.${MULTISET_PIVOT}
  MULTISET_ALG_TXTS  := $(patsubst %,${MULTISET_DIR}.%,${MULTISET_LANGS})

  create-multiset: ${MULTISET_DIR}
	${MAKE} extract-multiset

  create-all-multisets: ${CREATE_MULTISETS}

  %-create-multiset:
	${MAKE} MULTISET_NR=$(@:-create-multiset=) create-multiset


  ${MULTISET_DIR}: ${PIVOTSET_DIR}
	mkdir -p ${MULTISET_DIR}
	cd ${MULTISET_DIR} && opus2multi $(CURDIR)/${PIVOTSET_DIR} ${MULTISET_PIVOT} ${MULTISET_LANGS}


  extract-multiset: ${MULTISET_PIVOT_TXT} ${MULTISET_ALG_TXTS}

  create-all-multisets: ${EXTRACT_MULTISETS}

  %-extract-multiset:
	${MAKE} MULTISET_NR=$(@:-extract-multiset=) extract-multiset

  ${MULTISET_ALGSRC}: %.src: %.xml
	opus2bitext -e $@ -f $(@:.src=.trg) < $<

  ${MULTISET_ALGTRG}: %.trg: %.src
	@echo "target text is extracted"

  ${MULTISET_PIVOT_TXT}: ${MULTISET_ALGSRC}
	cp $< $@

  ${MULTISET_ALG_TXTS}: ${MULTISET_DIR}.%: ${MULTISET_DIR}/${MULTISET_PIVOT}-%.trg
	cp $< $@

endif





## old idea using graph cliques

.PHONY: linksets-0.8 linksets-0.9
linksets-0.8: linked-docs-with-scores-0.8.txt linksets-0.8.txt linksets-0.8.log
linksets-0.9: linked-docs-with-scores-0.9.txt linksets-0.9.txt linksets-0.9.log

linksets-%.txt: linked-docs-with-scores-%.txt
	../scripts/find_link_cliques.py < $< > $@

linksets-%.log: linksets-%.txt
	mkdir -p $(@:.log=)
	../scripts/extract_linksets.pl $(@:.log=) < $< 2> $@




## OBSOLETE?

linked-docs.txt:
	find . -name '*.xml.gz' | xargs zgrep -o 'fromDoc=[^ ]*"' | cut -f2 -d\" > $@.tmp
	find . -name '*.xml.gz' | xargs zgrep -o 'toDoc=[^ ]*"' | cut -f2 -d\"  >> $@.tmp
	find ../devtest-alt -name '*.xml.gz' | xargs zgrep -o 'fromDoc=[^ ]*"' | cut -f2 -d\" >> $@.tmp
	find ../devtest-alt -name '*.xml.gz' | xargs zgrep -o 'toDoc=[^ ]*"' | cut -f2 -d\"   >> $@.tmp
	sort $@.tmp > $@
	rm -f $@.tmp

linked-doc-counts.txt: linked-docs.txt
	sort $< | uniq -c > $@



##-------------------------------------------------------
## extraction of devtest files (released in DEVTEST_YEAR)
## also removes those files from original xml zipfile
##-------------------------------------------------------

.PHONY: extract-devtest
extract-devtest: ${LANG_ZIPFILES}

%.zip:
	mkdir -p ${CORPUS}/xml/$(@:.zip=)
	echo "reserved devtest subtitles (release year ${DEVTEST_YEAR})" > ${CORPUS}/xml/$(@:.zip=)/README
	unzip -n -q ../xml/$@ '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
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
	${MAKE} HPC_CORES=32 HPC_DISK=500 HPC_MEM=64g align.submit

BITEXT_ALIGN_JOBS := $(patsubst %,%-job,${LANGPAIRS})

align-jobs: ${BITEXT_ALIGN_JOBS}

.PHONY: ${BITEXT_ALIGN_JOBS}
${BITEXT_ALIGN_JOBS}:
	if [ ! -e $(@:-job=.xml.gz) ]; then \
	  ${MAKE} HPC_CORES=16 HPC_DISK=100 HPC_MEM=64g EMAIL= $(@:-job=.xml.gz).submit; \
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
	touch done/$@
	${MAKE} cleanup

#	if [ -e ${WORKHOME}/$@ ]; then touch done/$@; fi



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
	unzip -q -n -d $(dir $@) $@.zip
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



## time limit = 1 hour
## memory limit 1GB

ALIGN_TIME_LIMIT = 3600
ALIGN_MEM_LIMIT = 1000000

${ALGFILES}: ${WORKDIR}/${SRC}-${TRG}/%: ${WORKDIR}/${SRC}/% ${WORKDIR}/${TRG}/%
	mkdir -p $(dir $@)
	-( ulimit -t ${ALIGN_TIME_LIMIT} -v ${ALIGN_MEM_LIMIT} \
	   && ${SENTALIGN} $< $(patsubst ${WORKDIR}/${SRC}/%,${WORKDIR}/${TRG}/%,$<) > $@.out 2> $@.err )


