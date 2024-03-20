#---------------------------------------------------------------------
# compute overlaps between corpora
#---------------------------------------------------------------------
#
# TODO: use some kind LSH for detection duplicates?
#       https://github.com/ZJaume/gaoya
#

SHELL := bash

include ../Makefile.def
include ../Makefile.submit


RELEASE_INFO     := ${OPUSGITHOME}/info/RELEASES.tsv
OPUS_STORAGE_URL := https://object.pouta.csc.fi


## names of all corpora and their released versions

CORPORA  := $(sort $(shell cut -f1 ${RELEASE_INFO}))
CORPUS   ?= ${firstword ${CORPORA}}
VERSIONS := $(sort $(shell grep '^${CORPUS}	' ${RELEASE_INFO} | cut -f2))
VERSION  ?= ${lastword ${VERSIONS}}


PARALLEL_ARGS := --pipe --keep-order -q -L10000 --max-procs 25%
PARALLEL := ${shell if [ `which parallel 2>/dev/null | wc -l` -gt 0 ]; then echo 'parallel ${PARALLEL_ARGS}'; fi }


# FIND_IN_MCDB := ./find_in_mcdb.pl -t
FIND_IN_MCDB := ./find_in_mcdb.pl


## monolingual texts

LANGUAGE ?= en

ALL_MONO_INDEXFILES    := $(sort $(shell find ${OPUSRELEASE}/ -name 'index.txt' | xargs grep '/mono/${LANGUAGE}.txt.gz' | cut -f1 -d:))
ALL_MONO               := $(subst index.txt:,,$(sort \
				$(shell find ${OPUSRELEASE}/ -name 'index.txt' | xargs grep '/mono/${LANGUAGE}.txt.gz')))
ALL_MONO_CORPORA       := $(patsubst ${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,%,${ALL_MONO})
ALL_MONO_DEDUP         := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.gz,${ALL_MONO})
ALL_MONO_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_MONO_DEDUP})
ALL_MONO_DEDUP_MCDBS   := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.mcdb,${ALL_MONO})
ALL_MONO_OVERLAP_FILES := $(patsubst ${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,${LANGUAGE}/%.txt,${ALL_MONO})
OPUS_MONO_OVERLAPS     := $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGUAGE}.tsv,${ALL_MONO_OVERLAP_FILES})

OPUS_NEWMONO_OVERLAPS  := $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGUAGE}.new.tsv,${ALL_MONO_OVERLAP_FILES})




##------------------------------------------------------------------------------------
## submit specific jobs on puhti@csc
##------------------------------------------------------------------------------------

## TODO: there is some kind of memory leak
##       mcdb requires a lot of memory and for English/French/Spanish it still crashes with 128GB RAM

HPC_BIG_MEM = 128g
HPC_BIG_CORES = 8
HPC_BIG_DISK = 1000

.PHONY: job-puhti
job-mono-puhti:
	${MAKE} HPC_MEM=${HPC_BIG_MEM} HPC_CORES=${HPC_BIG_CORES} CORES=4 THREADS=4 HPC_DISK=${HPC_BIG_DISK} HPC_TIME=72:00 all-mono.submit

.PHONY: job-hugelang-puhti
job-biglang-puhti:
	for l in de es fr pt ru zh; do \
	  ${MAKE} LANGUAGE=$$l HPC_BIG_MEM=256g job-mono-puhti; \
	done

job-english-puhti:
	${MAKE} LANGUAGE=en HPC_BIG_MEM=373g HPC_BIG_DISK=3000 job-mono-puhti


## compute bitext overlaps
## need some better way of distributing this over many jobs!

## create separate jobs for each language pair
## problem: might hit max-job limit
## problem: no good way of allocating resources (now all have the same big mem allocation and 24h)
.PHONY: english-bitext-jobs-puhti
english-bitext-jobs-puhti:
	${MAKE} en-bitext-jobs

## create one job for all language pairs
## problem: will time out before done
.PHONY: job-english-bitexts-puhti
job-english-bitexts-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 HPC_TIME=72:00 en-bitexts.submit


## job for a single language pair
.PHONY: job-bitext-puhti
job-bitext-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 HPC_TIME=72:00 all-para.submit


## only some selected languages
.PHONY: hplt-english-bitext-jobs
hplt-english-bitext-jobs:
	make 	FIND_LANGUAGES_ALIGNED_TO_ENGLISH='echo "ar bs ca"' \
		FIND_LANGUAGES_ALIGNED_FROM_ENGLISH='echo "et eu fi ga gl hi hr is mk mt nn sq sr sw zh_hant"' \
	en-bitext-jobs

hplt-mono-jobs:
	for l in ar bs ca et eu fi ga gl hi hr is mk mt nn sq sr sw; do \
	  ${MAKE} LANGUAGE=$$l HPC_BIG_MEM=64g HPC_BIG_CORES=4 HPC_BIG_DISK=500 job-mono-puhti; \
	done


#----------------------------------------------------------------------
# overlaps in bitexts
#----------------------------------------------------------------------

## all bitexts with English in either source or target language

FIND_LANGUAGES_ALIGNED_TO_ENGLISH = find ${OPUSRELEASE}/ -name 'index.txt' | \
		xargs grep '.*-en.tmx.gz' | \
		sed 's|^.*/\([^/]*\)\-en\.tmx.gz|\1|' | \
		grep -v '\.' | sort -u

FIND_LANGUAGES_ALIGNED_FROM_ENGLISH = find ${OPUSRELEASE}/ -name 'index.txt' | \
		xargs grep 'en-.*.tmx.gz' | \
		sed 's|^.*/en-\([^/]*\)\.tmx.gz|\1|' | \
		grep -v '\.' | sort -u

en-bitexts:
	-for l in `${FIND_LANGUAGES_ALIGNED_TO_ENGLISH}`; do \
	    echo "make LANGPAIR=$$l-en update-para"; \
	    make LANGPAIR=$$l-en update-para; \
	done
	-for l in `${FIND_LANGUAGES_ALIGNED_FROM_ENGLISH}`; do \
	    echo "make LANGPAIR=en-$$l update-para"; \
	    make LANGPAIR=en-$$l update-para; \
	done
	find ${TMPDIR} -name '*.dedup.*' -delete

en-bitext-jobs:
	-for l in `${FIND_LANGUAGES_ALIGNED_TO_ENGLISH}`; do \
	    echo "make LANGPAIR=$$l-en update-para-job"; \
	    make LANGPAIR=$$l-en update-para-job; \
	done
	-for l in `${FIND_LANGUAGES_ALIGNED_FROM_ENGLISH}`; do \
	    echo "make LANGPAIR=en-$$l update-para-job"; \
	    make LANGPAIR=en-$$l update-para-job; \
	done
	find ${TMPDIR} -name '*.dedup.*' -delete


##------------------------------------------------
## test targets for counting overlaps in monolingual data:
##------------------------------------------------

test-count-mono:
	make CORPUS1=TED2013 VERSION1=v1.1 CORPUS2=TED2020 VERSION2=v1 count-mono

test-overlap-mono:
	make LANGUAGE=ace ace/wikimedia/v20190628.txt

test-mono:
	make LANGUAGE=ace all-mono


##------------------------------------------------
## test targets for counting overlaps in bitexts:
##------------------------------------------------

test-count-bitext:
	make CORPUS1=TED2013 VERSION1=v1.1 CORPUS2=TED2020 VERSION2=v1 count-bitext

test-overlap-bitext:
	make LANGPAIR=ace-id ace-id/wikimedia/v20190628.txt

test-para:
	make LANGUAGE=ace ace/wikimedia/v20190628.txt


print-info:
	@echo "${CORPUS}"
	@echo "${VERSIONS}"
	@echo "${ALL_MONO_CORPORA}"




##------------------------------------------------------------------------------------
#
# TODO: avoid creating all dedup's and mcdb's if not needed
# (that's only the case if there is no update in the corpus with LANGUAGE involved)

.NOTINTERMEDIATE: ${ALL_MONO_OVERLAP_FILES}

.PHONY: all-mono
all-mono: ${ALL_MONO_DEDUP} ${ALL_MONO_DEDUP_COUNTS} ${ALL_MONO_DEDUP_MCDBS}
	${MAKE} all-mono-overlaps

.PHONY: all-mono-overlaps
all-mono-overlaps: ${OPUS_MONO_OVERLAPS}

.PHONY: mono-overlaps
mono-overlaps: ${OPUSRELEASE}/${CORPUS}/${VERSION}/overlaps/${LANGUAGE}.tsv





## bitexts

LANGPAIR ?= de-en
SRCLANG := $(firstword $(subst -, ,${LANGPAIR}))
TRGLANG := $(lastword $(subst -, ,${LANGPAIR}))

ALL_PARA_INDEXFILES    := $(sort $(shell find ${OPUSRELEASE}/ -name 'index.txt' | xargs grep '/moses/${LANGPAIR}.txt.zip' | cut -f1 -d:))
ALL_PARA               := $(subst index.txt:,,$(sort \
				$(shell find ${OPUSRELEASE}/ -name 'index.txt' | xargs grep '/moses/${LANGPAIR}.txt.zip')))
ALL_PARA_CORPORA       := $(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,%,${ALL_PARA})
ALL_PARA_DEDUP         := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.gz,${ALL_PARA})
ALL_PARA_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_PARA_DEDUP})
ALL_PARA_DEDUP_MCDBS   := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.mcdb,${ALL_PARA})
ALL_PARA_OVERLAP_FILES := $(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,${LANGPAIR}/%.txt,${ALL_PARA})
OPUS_PARA_OVERLAPS     := $(patsubst ${LANGPAIR}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGPAIR}.tsv,${ALL_PARA_OVERLAP_FILES})

print-info-para:
	@echo "${OPUS_PARA_OVERLAPS}"


##------------------------------------------------------------------------------------
# TODO: avoid creating all dedup's and mcdb's if not needed for the LANGPAIR
# (no updates in the corpus for the current LANGPAIR)

.NOTINTERMEDIATE: ${ALL_PARA_OVERLAP_FILES}

.PHONY: all-para
all-para: ${ALL_PARA_DEDUP} ${ALL_PARA_DEDUP_COUNTS} ${ALL_PARA_DEDUP_MCDBS}
	${MAKE} all-para-overlaps

.PHONY: all-para-overlaps
all-para-overlaps: ${OPUS_PARA_OVERLAPS}

.PHONY: para-overlaps
para-overlaps: ${OPUSRELEASE}/${CORPUS}/${VERSION}/overlaps/${LANGPAIR}.tsv


## print some stats about the overlap scores we have
## compare with what we exoect to see
## print a list of corpora for which a score seems to be missing
.PHONY: check-para-completeness
check-para-completeness:
	@echo "nr of existing parallel datatsets for ${LANGPAIR}: $(words ${ALL_PARA})"
	@echo -n "nr of ${LANGPAIR} bitexts with overlap scores: "
	@find ${LANGPAIR} -name '*.txt' | wc -l
	@echo -n "nr of ${LANGPAIR} bitexts listed in overlap scores: "
	@find ${LANGPAIR} -name '*.txt' | xargs cat | cut -f1,2 | sort | uniq -c | wc -l
	@echo -n "nr of ${LANGPAIR} bitexts with $(words ${ALL_PARA}) overlap scores: " 
	@find ${LANGPAIR} -name '*.txt' | xargs cat | cut -f1,2 | sort | uniq -c | \
	grep '$(words ${ALL_PARA}) ' | wc -l
	@for c in $(firstword $(subst /, ,$(patsubst ${OPUSRELEASE}/%,%,${ALL_PARA}))); do \
	  if [ `find ${LANGPAIR} -name '*.txt' | xargs cat | grep '$$c' | wc -l` -eq 0 ]; then \
	    echo "not found in counts: $$c"; \
	  fi \
	done
	@for c in $(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,%,${ALL_PARA}); do \
	  if [ ! -e ${LANGPAIR}/$$c.txt ]; then \
	    echo "no counts for: $$c"; \
	  fi \
	done
#	@echo "overlap scores not available for all bitexts:"
#	@find ${LANGPAIR} -name '*.txt' | xargs cat | cut -f1,2 | sort | uniq -c | \
#	grep -v '$(words ${ALL_PARA}) '


## update overlap scores only for language pairs where there is a bitext
## for which no overlap scores exist yet
.PHONY: update-para
update-para:
	@echo "nr of existing parallel datatsets for ${LANGPAIR}: $(words ${ALL_PARA})"
	@echo -n "nr of ${LANGPAIR} bitexts with overlap scores: "
	@find ${LANGPAIR} -name '*.txt' | wc -l
	@if [ `find ${LANGPAIR} -name '*.txt' | wc -l` -lt $(words ${ALL_PARA}) ]; then \
	  echo "make all-para (for ${LANGPAIR})"; \
	  ${MAKE} all-para; \
	fi


.PHONY: update-para-job
update-para-job:
	@echo "nr of existing parallel datatsets for ${LANGPAIR}: $(words ${ALL_PARA})"
	@echo -n "nr of ${LANGPAIR} bitexts with overlap scores: "
	@find ${LANGPAIR} -name '*.txt' | wc -l
	@if [ `find ${LANGPAIR} -name '*.txt' | wc -l` -lt $(words ${ALL_PARA}) ]; then \
	  echo "submit all-para (for ${LANGPAIR})"; \
	  ${MAKE} HPC_MEM=128g HPC_CORES=2 CORES=2 THREADS=2 HPC_DISK=500 HPC_TIME=24:00 all-para.submit; \
	fi

## print bitext for which we miss overlap scores
.PHONY: missing-para
missing-para:
	@echo $(filter-out $(patsubst ${LANGPAIR}/%.txt,%,$(sort $(shell find ${LANGPAIR} -name '*.txt'))),\
			$(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,%,${ALL_PARA}))



## intermediate files (deduplicated texts, MCDB-based sentence index, sentence counts)

.PHONY: dedup index counts overlaps
dedup: ${ALL_MONO_DEDUP}
index: ${ALL_MONO_DEDUP_MCDBS}
counts: ${ALL_MONO_DEDUP_COUNTS}





#-----------------------------------------------------------------
# overlap count files we can release
#-----------------------------------------------------------------

${OPUSRELEASE}/%/overlaps/${LANGUAGE}.tsv: ${LANGUAGE}/%.txt
	@mkdir -p $(dir $@)
	@grep -v '	0	' $< > $@.0
	@cut -f1,2 $@.0 > $@.12
	@cut -f3 $@.0 > $@.3
	@cut -f4 $@.0 | cut -f1 -d '/' > $@.4a
	@cut -f4 $@.0 | cut -f2 -d '/' > $@.4b
	@cut -f5 $@.0 > $@.5
	@paste $@.4a $@.3 -d '/' | sed 's/^/scale=2;100*/' | bc > $@.6
	@paste $@.12 $@.4b $@.3 $@.4a $@.5 $@.6 |\
	sort -k6,6nr -k4,4nr |\
	sed 's/^/$(word 2,$(subst /, ,$<))	$(word 3,$(subst /, ,$(<:.txt=)))	/' > $@.sorted
	@echo "corpus A	release A	corpus B	release B	size A	size B	A∩B	A∩B/A	A∩B/B" > $@
	@cat $@.sorted >> $@
	@rm -f $@.0 $@.12 $@.3 $@.4a $@.4b $@.5 $@.6 $@.sorted
	@echo "$@ done"

${OPUSRELEASE}/%/overlaps/${LANGPAIR}.tsv: ${LANGPAIR}/%.txt
	@mkdir -p $(dir $@)
	@grep -v '	0	' $< > $@.0
	@cut -f1,2 $@.0 > $@.12
	@cut -f3 $@.0 > $@.3
	@cut -f4 $@.0 | cut -f1 -d '/' > $@.4a
	@cut -f4 $@.0 | cut -f2 -d '/' > $@.4b
	@cut -f5 $@.0 > $@.5
	@paste $@.4a $@.3 -d '/' | sed 's/^/scale=2;100*/' | bc > $@.6
	@paste $@.12 $@.4b $@.3 $@.4a $@.5 $@.6 |\
	sort -k6,6nr -k4,4nr |\
	sed 's/^/$(word 2,$(subst /, ,$<))	$(word 3,$(subst /, ,$(<:.txt=)))	/' > $@.sorted
	@echo "corpus A	release A	corpus B	release B	size A	size B	A∩B	A∩B/A	A∩B/B" > $@
	@cat $@.sorted >> $@
	@rm -f $@.0 $@.12 $@.3 $@.4a $@.4b $@.5 $@.6 $@.sorted
	@echo "$@ done"


#------------------------------------------------
# dedup first before creating the sentence index
#------------------------------------------------


## create deduplicated monolingual corpus files
${TMPDIR}/%.dedup.gz:
	mkdir -p ${dir $@}
	wget -qq -O $@.txt.gz ${OPUS_STORAGE_URL}/OPUS-$(patsubst ${TMPDIR}/%.dedup.gz,%.txt.gz,$@)
	${GZIP} -cd < $@.txt.gz | ${PARALLEL} sed 's/ *//g' | ${SORT} -u | ${GZIP} -c > $@
	rm -f $@.txt.gz

#	wget -qq -O - ${OPUS_STORAGE_URL}/OPUS-$(patsubst ${TMPDIR}/%.dedup.gz,%.txt.gz,$@) |\
#	${GZIP} -cd | ${PARALLEL} sed 's/ *//g' | ${SORT} -u | ${GZIP} -c > $@


## create deduplicated bitexts
## NOTE: spaces removed for bitexts!
${TMPDIR}/%/${LANGPAIR}.dedup.gz:
	mkdir -p ${dir $@}tmp
	wget -qq -O ${dir $@}tmp/bitext.zip \
		$(patsubst ${TMPDIR}/%/${LANGPAIR}.dedup.gz,${OPUS_STORAGE_URL}/OPUS-%/${LANGPAIR}.txt.zip,$@)
	unzip -d ${dir $@}tmp ${dir $@}tmp/bitext.zip
	rm -f ${dir $@}tmp/bitext.zip
	paste ${dir $@}tmp/*.${SRCLANG} ${dir $@}tmp/*.${TRGLANG} | \
	${PARALLEL} sed 's/ *//g' | ${SORT} -u | ${GZIP} -c > $@
	rm -f ${dir $@}tmp/*
	rmdir ${dir $@}tmp

## create MCDB index databases
${TMPDIR}/%.dedup.mcdb: ${TMPDIR}/%.dedup.gz
	${GZIP} -cd $< | ./add2mcdb.pl $@

# count lines (sentences)
%.dedup.nrlines: %.dedup.gz
	${GZIP} -cd $< | wc -l > $@




#--------------------------------------------------------------
# summary of all overlaps for a selected language
# between the selected corpus and all other corpora
#--------------------------------------------------------------


${LANGUAGE}/%.txt: ${ALL_MONO_INDEXFILES}
	mkdir -p ${dir $@}
	if [ -e $(@:.txt=.tar.gz) ]; then tar -xzf $(@:.txt=.tar.gz); fi
	( c1=$(patsubst ${LANGUAGE}/%/,%,$(dir $@)) \
	   v1=${notdir ${@:.txt=}}; \
	   for d in ${ALL_MONO_CORPORA}; do \
	     if [ "$${c1}/$$v1" != "$$d" ]; then \
	       c=`echo $$d | cut -f1 -d/`; \
	       v=`echo $$d | cut -f2 -d/`; \
	       if [ ! -e counts/${LANGUAGE}/$${c1}_$${v1}-$$c_$$v.txt ]; then \
	         echo ".... need to make counts/${LANGUAGE}/$${c1}_$${v1}-$${c}_$${v}.txt"; \
	         ${MAKE} CORPUS1=$${c1} VERSION1=$${v1} CORPUS2=$$c VERSION2=$$v count-mono; \
	       fi \
	     fi \
	   done )
	find counts/${LANGUAGE} -name '$(subst /,_,$(patsubst ${LANGUAGE}/%.txt,%,$@))-*.txt' | \
	sort | xargs cat > $@
	${MAKE} $(@:.txt=.tar.gz)


#	           if [ -e ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz ]; then \
#	              ${MAKE} CORPUS1=$${c1} VERSION1=$${v1} CORPUS2=$$c VERSION2=$$v count-mono; \
#	           fi


## tar-ball to pack all individual count files
## and cleanup

${LANGUAGE}/%.tar.gz: counts/${LANGUAGE}
	mkdir -p $(dir $@)
	tar -czf $@ $</$(patsubst ${LANGUAGE}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt
	rm -f $</$(patsubst ${LANGUAGE}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt

## pack individual count files if the cumulative count file exist
tar-mono-counts:
	for c in ${CORPORA}; do \
	  for v in `grep "^$$c	" ${RELEASE_INFO} | cut -f2 | sort -u`; do \
	    if [ -e ${LANGUAGE}/$$c/$$v.txt ]; then \
	      if [ ! -e ${LANGUAGE}/$$c/$$v.tar.gz ]; then \
	        make ${LANGUAGE}/$$c/$$v.tar.gz; \
	      fi \
	    fi \
	  done \
	done


## individual count files (good for incrementally updating scores ...)


.PHONY: count-mono
count-mono: counts/${LANGUAGE}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt

counts/${LANGUAGE}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt:
	@${MAKE} ${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.gz \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.gz \
		${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.nrlines \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.nrlines \
		${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.mcdb \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.mcdb
	@mkdir -p $(dir $@)
	@echo "create $@"
	@echo -n "${CORPUS2}	${VERSION2}	"  > $@
	@cat ${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.nrlines | tr "\n" "\t" >> $@
	@if [ `cat ${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.nrlines` -lt \
	     `cat ${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.nrlines` ]; then \
	  echo "... find sentences from ${CORPUS1}/${VERSION1} in index of ${CORPUS2}/${VERSION2}"; \
	  ${GZIP} -cd ${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.gz | \
		${FIND_IN_MCDB} ${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.mcdb >> $@; \
	else \
	  echo "... find sentences from ${CORPUS2}/${VERSION2} in index of ${CORPUS1}/${VERSION1}"; \
	  ${GZIP} -cd ${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.gz | \
		${FIND_IN_MCDB} ${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.mcdb >> $@; \
	fi
	@echo -n '/'                                                          >> $@
	@cat ${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.nrlines  >> $@
	@cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	@paste $@ $@.percentage > $@.new
	@mv $@.new $@
	@rm -f $@.percentage $@.new




#--------------------------------------------------------------
# summary of all overlaps for bitexts of a selected language pair
# between the selected corpus and all other corpora
#--------------------------------------------------------------

${LANGPAIR}/%.txt: ${ALL_PARA_INDEXFILES}
	mkdir -p ${dir $@}
	if [ -e $(@:.txt=.tar.gz) ]; then tar -xzf $(@:.txt=.tar.gz); fi
	@( c1=$(patsubst ${LANGPAIR}/%/,%,$(dir $@)); \
	   v1=${notdir ${@:.txt=}}; \
	   for d in ${ALL_PARA_CORPORA}; do \
	     if [ "$${c1}/$$v1" != "$$d" ]; then \
	       c=`echo $$d | cut -f1 -d/`; \
	       v=`echo $$d | cut -f2 -d/`; \
	       if [ ! -e counts/${LANGPAIR}/$${c1}_$${v1}-$${c}_$${v}.txt ]; then \
	         echo ".... need to make counts/${LANGPAIR}/$${c1}_$${v1}-$${c}_$${v}.txt"; \
	         ${MAKE} CORPUS1=$${c1} VERSION1=$${v1} CORPUS2=$$c VERSION2=$$v count-bitext; \
	       fi \
	     fi \
	   done )
	find counts/${LANGPAIR} -name '$(subst /,_,$(patsubst ${LANGPAIR}/%.txt,%,$@))-*.txt' | \
	sort | xargs cat > $@
	${MAKE} $(@:.txt=.tar.gz)

#	           if [ -e ${TMPDIR}/$$c/$$v/moses/${LANGPAIR}.dedup.gz ]; then \
#	             echo ".... need to make counts/${LANGPAIR}/$${c1}_$${v1}-$${c}_$${v}.txt"; \
#	             make CORPUS1=$${c1} VERSION1=$${v1} CORPUS2=$$c VERSION2=$$v count-bitext; \
#	           fi



## tar-ball to pack all individual count files
## and cleanup

${LANGPAIR}/%.tar.gz: counts/${LANGPAIR}
	mkdir -p $(dir $@)
	tar -czf $@ $</$(patsubst ${LANGPAIR}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt
	rm -f $</$(patsubst ${LANGPAIR}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt

## pack individual count files if the cumulative count file exist
tar-para-counts:
	@for c in ${CORPORA}; do \
	  for v in `grep '^$$c	' ${RELEASE_INFO} | cut -f2 | sort -u`; do \
	    if [ -e ${LANGPAIR}/$$c/$$v.txt ]; then \
	      if [ ! -e ${LANGPAIR}/$$c/$$v.tar.gz ]; then \
	        make ${LANGPAIR}/$$c/$$v.tar.gz; \
	      fi \
	    fi \
	  done \
	done


.PHONY: count-bitext
count-bitext: counts/${LANGPAIR}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt


counts/${LANGPAIR}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt:
	@${MAKE} ${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.gz \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.gz \
		${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.nrlines \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.nrlines \
		${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.mcdb \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.mcdb
	@mkdir -p $(dir $@)
	@echo -n "${CORPUS2}	${VERSION2}	" > $@
	@cat ${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.nrlines | tr "\n" "\t" >> $@
	@if [ `cat ${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.nrlines` -lt \
	     `cat ${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.nrlines` ]; then \
	  echo "... find sentences from ${CORPUS1}/${VERSION1} in index of ${CORPUS2}/${VERSION2}"; \
	  ${GZIP} -cd ${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.gz | \
		${FIND_IN_MCDB} ${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.mcdb >> $@; \
	else \
	  echo "... find sentences from ${CORPUS2}/${VERSION2} in index of ${CORPUS1}/${VERSION1}"; \
	  ${GZIP} -cd ${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.gz | \
		${FIND_IN_MCDB} ${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.mcdb >> $@; \
	fi
	@echo -n '/'                                                 >> $@
	@cat ${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.nrlines  >> $@
	@cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	@paste $@ $@.percentage > $@.new
	@mv $@.new $@
	@rm -f $@.percentage $@.new








###################################################################################################
## other ways of counting and sorting stuff (don't needed anymore?!)
###################################################################################################

# markdown pages (not necessary anymore)

OPUS_OVERLAP_MDFILES  := $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGUAGE}.md,${ALL_MONO_OVERLAP_FILES})

## in case we want to have markdown files
## but GitHub understands tsv-files and displays them well!
## --> can skip markdown copies!

%.md: %.tsv
	echo "# Overlap with other corpora"                               > $@
	echo ""                                                          >> $@
	echo "Estimation of the overlap with other OPUS corpora"         >> $@
	echo "based on the number of matching sentences in language '$(notdir $(<:.txt=))'." >> $@
	echo "(de-duplicated, exact matches)"                                 >> $@
	echo ""                                                               >> $@
	echo "| corpus | version | size | matching sentences | percentage |"  >> $@
	echo "|--------|:-------:|-----:|-------------------:|-----------:|"  >> $@
	sed 's/	/ | /g;s/^/| /;s/$$/ |/' < $<                                 >> $@
	echo ""                                                               >> $@




# ALL_MONO_MCDBS := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.mcdb,${ALL_MONO})

# .PHONY: mcdb
# mcdb: ${ALL_MONO_MCDBS}

# ## create MCDB index databases
# ${TMPDIR}/%.mcdb: ${OPUSRELEASE}/%.txt.gz
# 	mkdir -p ${dir $@}
# 	wget -qq -O - ${OPUS_STORAGE_URL}/OPUS-$(patsubst ${TMPDIR}/%.mcdb,%.txt.gz,$@) |\
# 	${GZIP} -cd $< | ./add2mcdb.pl $@

