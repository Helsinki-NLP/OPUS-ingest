#---------------------------------------------------------------------
# compute overlaps between corpora
#---------------------------------------------------------------------

include ../Makefile.def
include ../Makefile.submit

## names of all corpora and their released versions

CORPORA  := ${sort ${notdir ${shell find ${OPUSRELEASE} -mindepth 1 -maxdepth 1 -type d }}}
CORPUS   ?= ${firstword ${CORPORA}}
VERSIONS ?= $(sort ${notdir ${shell find ${OPUSRELEASE}/${CORPUS} -maxdepth 1 -mindepth 1 -type d}})
VERSION  ?= ${lastword ${VERSIONS}}


PARALLEL_ARGS := --pipe --keep-order -q -L10000 --max-procs 25%
PARALLEL := ${shell if [ `which parallel 2>/dev/null | wc -l` -gt 0 ]; then echo 'parallel ${PARALLEL_ARGS}'; fi }


## monolingual texts

LANGUAGE ?= en

ALL_MONO               := $(filter-out %/latest/mono/${LANGUAGE}.txt.gz,${wildcard ${OPUSRELEASE}/*/*/mono/${LANGUAGE}.txt.gz})
ALL_MONO_DEDUP         := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.gz,${ALL_MONO})
ALL_MONO_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_MONO_DEDUP})
ALL_MONO_DEDUP_MCDBS   := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.mcdb,${ALL_MONO})
ALL_MONO_OVERLAP_FILES := $(patsubst ${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,${LANGUAGE}/%.txt,${ALL_MONO})
OPUS_MONO_OVERLAPS     := $(patsubst ${LANGUAGE}/%.txt,../../OPUS/corpus/%/overlaps/${LANGUAGE}.tsv,${ALL_MONO_OVERLAP_FILES})


.PHONY: all-mono
all-mono:
	@${MAKE} ${ALL_MONO_DEDUP} ${ALL_MONO_DEDUP_COUNTS} ${ALL_MONO_DEDUP_MCDBS}
	@${MAKE} ${ALL_MONO_OVERLAP_FILES}

.PHONY: mono-overlaps
mono-overlaps: ${LANGUAGE}/${CORPUS}/${VERSION}.txt




## bitexts

LANGPAIR ?= de-en
SRCLANG := $(firstword $(subst -, ,${LANGPAIR}))
TRGLANG := $(lastword $(subst -, ,${LANGPAIR}))

ALL_PARA               := $(filter-out %/latest/moses/${LANGPAIR}.txt.zip,${wildcard ${OPUSRELEASE}/*/*/moses/${LANGPAIR}.txt.zip})
ALL_PARA_DEDUP         := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.gz,${ALL_PARA})
ALL_PARA_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_PARA_DEDUP})
ALL_PARA_DEDUP_MCDBS   := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.mcdb,${ALL_PARA})
ALL_PARA_OVERLAP_FILES := $(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,${LANGPAIR}/%.txt,${ALL_PARA})
OPUS_PARA_OVERLAPS     := $(patsubst ${LANGPAIR}/%.txt,../../OPUS/corpus/%/overlaps/${LANGPAIR}.tsv,${ALL_PARA_OVERLAP_FILES})


.PHONY: all-bitexts
all-bitexts:
	@${MAKE} ${ALL_PARA_DEDUP} ${ALL_PARA_DEDUP_COUNTS} ${ALL_PARA_DEDUP_MCDBS}
	@${MAKE} ${ALL_PARA_OVERLAP_FILES}

.PHONY: para-overlaps
para-overlaps: ${LANGPAIR}/${CORPUS}/${VERSION}.txt




##----------------------------------
## submit specific jobs on puhti@csc
##----------------------------------

.PHONY: job-puhti
job-mono-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 all-mono.submit

.PHONY: biglang-job-puhti
biglang-job-puhti:
	for l in en fr es it de zh ja ru; do \
	  ${MAKE} LANGUAGE=$$l job-mono-puhti; \
	done

.PHONY: job-bitext-puhti
job-bitext-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 all-bitexts.submit



## intermediate files (deduplicated texts, MCDB-based sentence index, sentence counts)

.PHONY: dedup index counts overlaps
dedup: ${ALL_MONO_DEDUP}
index: ${ALL_MONO_DEDUP_MCDBS}
counts: ${ALL_MONO_DEDUP_COUNTS}







#------------------------------------------------
# dedup first before creating the sentence index
#------------------------------------------------

## create deduplicated monolingual corpus files
${TMPDIR}/%.dedup.gz: ${OPUSRELEASE}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ${SORT} -u | ${GZIP} -c > $@

## create deduplicated bitexts
## NOTE: spaces removed for bitexts!
${TMPDIR}/%/${LANGPAIR}.dedup.gz: ${OPUSRELEASE}/%/${LANGPAIR}.txt.zip
	mkdir -p ${dir $@}tmp
	unzip -d ${dir $@}tmp $<
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





#-----------------------------------------------------------------
# overlap count files we can release
#-----------------------------------------------------------------

../../OPUS/corpus/%/overlaps/${LANGUAGE}.tsv: ${LANGUAGE}/%.txt
	mkdir -p $(dir $@)
	sort -k5,5nr -k4,4nr $< > $@

../../OPUS/corpus/%/overlaps/${LANGPAIR}.tsv: ${LANGPAIR}/%.txt
	mkdir -p $(dir $@)
	sort -k5,5nr -k4,4nr $< > $@



#------------------------------------------------
# files with overlap counts (using DB index files)
# (index based on deduplicated corpora)
#------------------------------------------------

${LANGUAGE}/%.txt: ${ALL_MONO}
	mkdir -p ${dir $@}
	if [ -e $(@:.txt=.tar.gz) ]; then tar -xzf $(@:.txt=.tar.gz); fi
	@for c in ${CORPORA}; do \
	  s=`cat $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.nrlines,$@)`; \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz ]; then \
	        ${MAKE} CORPUS1=$(patsubst ${LANGUAGE}/%/,%,$(dir $@)) VERSION1=${notdir ${@:.txt=}} \
			CORPUS2=$$c VERSION2=$$v count-mono; \
	      fi \
	    fi \
	  done \
	done
	find counts/${LANGUAGE} -name '$(subst /,_,$(patsubst ${LANGUAGE}/%.txt,%,$@))-*.txt' | \
	sort | xargs cat > $@
	${MAKE} $(@:.txt=.tar.gz)



## tar-ball to pack all individual count files
## and cleanup

${LANGUAGE}/%.tar.gz: counts/${LANGUAGE}
	mkdir -p $(dir $@)
	tar -czf $@ $</$(patsubst ${LANGUAGE}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt
	rm -f $</$(patsubst ${LANGUAGE}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt


## individual count files (good for incrementally updating scores ...)

test-count-mono:
	make CORPUS1=TED2013 VERSION1=v1.1 CORPUS2=TED2020 VERSION2=v1 count-mono

.PHONY: count-mono
count-mono: counts/${LANGUAGE}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt

counts/${LANGUAGE}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt: \
		${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.gz \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.gz \
		${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.nrlines \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.nrlines \
		${TMPDIR}/${CORPUS1}/${VERSION1}/mono/${LANGUAGE}.dedup.mcdb \
		${TMPDIR}/${CORPUS2}/${VERSION2}/mono/${LANGUAGE}.dedup.mcdb
	mkdir -p $(dir $@)
	echo -n "${CORPUS2}	${VERSION2}	"                    > $@
	cat $(word 4,$^) | tr "\n" "\t"                             >> $@
	if [ `cat $(word 3,$^)` -lt `cat $(word 4,$^)` ]; then \
	  ${GZIP} -cd $(word 1,$^) | ./find_in_mcdb.pl $(word 6,$^) >> $@; \
	else \
	  ${GZIP} -cd $(word 2,$^) | ./find_in_mcdb.pl $(word 5,$^) >> $@; \
	fi
	echo -n '/'                                                 >> $@
	cat $(word 3,$^)                                            >> $@
	cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	paste $@ $@.percentage > $@.new
	mv $@.new $@
	rm -f $@.percentage $@.new


#----------------------------------------------------------------------
# overlaps in bitexts
#----------------------------------------------------------------------

${LANGPAIR}/%.txt: ${ALL_PARA}
	mkdir -p ${dir $@}
	if [ -e $(@:.txt=.tar.gz) ]; then tar -xzf $(@:.txt=.tar.gz); fi
	@for c in ${CORPORA}; do \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGPAIR}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${TMPDIR}/$$c/$$v/moses/${LANGPAIR}.dedup.gz ]; then \
	        make CORPUS1=$(patsubst ${LANGPAIR}/%/,%,$(dir $@)) VERSION1=${notdir ${@:.txt=}} CORPUS2=$$c VERSION2=$$v count-bitext; \
	      fi \
	    fi \
	  done \
	done
	find counts/${LANGPAIR} -name '$(subst /,_,$(patsubst ${LANGPAIR}/%.txt,%,$@))-*.txt' | \
	sort | xargs cat > $@
	${MAKE} $(@:.txt=.tar.gz)


## tar-ball to pack all individual count files
## and cleanup

${LANGPAIR}/%.tar.gz: counts/${LANGPAIR}
	mkdir -p $(dir $@)
	tar -czf $@ $</$(patsubst ${LANGPAIR}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt
	rm -f $</$(patsubst ${LANGPAIR}/%/,%,$(dir $@))_${notdir ${@:.tar.gz=}}-*.txt


test-count-bitext:
	make CORPUS1=TED2013 VERSION1=v1.1 CORPUS2=TED2020 VERSION2=v1 count-bitext

.PHONY: count-bitext
count-bitext: counts/${LANGPAIR}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt

counts/${LANGPAIR}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt: \
		${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.gz \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.gz \
		${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.nrlines \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.nrlines \
		${TMPDIR}/${CORPUS1}/${VERSION1}/moses/${LANGPAIR}.dedup.mcdb \
		${TMPDIR}/${CORPUS2}/${VERSION2}/moses/${LANGPAIR}.dedup.mcdb
	mkdir -p $(dir $@)
	echo -n "${CORPUS2}	${VERSION2}	"                    > $@
	cat $(word 4,$^) | tr "\n" "\t"                             >> $@
	if [ `cat $(word 3,$^)` -lt `cat $(word 4,$^)` ]; then \
	  ${GZIP} -cd $(word 1,$^) | ./find_in_mcdb.pl $(word 6,$^) >> $@; \
	else \
	  ${GZIP} -cd $(word 2,$^) | ./find_in_mcdb.pl $(word 5,$^) >> $@; \
	fi
	echo -n '/'                                                 >> $@
	cat $(word 3,$^)                                            >> $@
	cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	paste $@ $@.percentage > $@.new
	mv $@.new $@
	rm -f $@.percentage $@.new








###################################################################################################
## other ways of counting and sorting stuff (don't needed anymore?!)
###################################################################################################

# markdown pages (not necessary anymore)

OPUS_OVERLAP_MDFILES  := $(patsubst ${LANGUAGE}/%.txt,../../OPUS/corpus/%/overlaps/${LANGUAGE}.md,${ALL_MONO_OVERLAP_FILES})

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




ALL_MONO_CDBS        := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.cdb.1,${ALL_MONO})
ALL_MONO_MCDBS       := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.mcdb,${ALL_MONO})
ALL_MONO_DEDUP_CDBS  := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.cdb.1,${ALL_MONO})

.PHONY: cdb mcdb dedup-cdb
cdb: ${ALL_MONO_CDBS}
mcdb: ${ALL_MONO_MCDBS}
dedup-cdb: ${ALL_MONO_DEDUP_CDBS}

#------------------------------------------------
# variant 1: creating the index from raw monolingual text
#------------------------------------------------

## create CDB index databases
${TMPDIR}/%.cdb.1: ${OPUSRELEASE}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ./add2cdb.pl ${@:1=}

## create MCDB index databases
${TMPDIR}/%.mcdb: ${OPUSRELEASE}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ./add2mcdb.pl $@


#------------------------------------------------
# variant 2: creating cdb index from de-duplicated texts
#------------------------------------------------

## create CDB index databases
${TMPDIR}/%.dedup.cdb.1: ${TMPDIR}/%.dedup.gz
	${GZIP} -cd $< | ./add2cdb.pl ${@:1=}




#------------------------------------------------
# files with overlap counts (using DB index files)
# (index based on raw corpora)
#------------------------------------------------

raw/${LANGUAGE}/%.txt: ${ALL_MONO_MCDBS}
	mkdir -p ${dir $@}
	@for c in ${CORPORA}; do \
	  s=`${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,$@) | wc -l`; \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${OPUSRELEASE}/$$c/$$v/mono/${LANGUAGE}.txt.gz ]; then \
	        echo "count overlap with $$c $$v"; \
	        echo -n "$$c	$$v	" >> $@; \
	        ${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,$@) |\
	        ./find_in_mcdb.pl ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.mcdb >> $@; \
	        echo "/$$s" >> $@; \
	      fi \
	    fi \
	  done \
	done
	cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	paste $@ $@.percentage > $@.new
	mv $@.new $@
	rm -f $@.percentage $@.new


#------------------------------------------------
# files with overlap counts (using sort/uniq/grep)
# (scales well but inefficient for combinations of big and small corpora)
# NOTE: counts are relative to deduplicated corpora!
# --> this is different from the raw counts above!
#------------------------------------------------

sortbased/${LANGUAGE}/%.txt: ${ALL_MONO_DEDUP}
	mkdir -p ${dir $@}
	@for c in ${CORPORA}; do \
	  s=`${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.gz,$@) | wc -l`; \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${OPUSRELEASE}/$$c/$$v/mono/${LANGUAGE}.txt.gz ]; then \
	        echo "count overlap with $$c $$v"; \
	        echo -n "$$c	$$v	" >> $@; \
	        ${MAKE} -s ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz; \
	        ${GZIP} -cd ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz | wc -l | tr "\n" "\t" >> $@; \
	        ${SORT} -m \
		<(${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.gz,$@)) \
		<(${GZIP} -cd ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz) | \
	        uniq -c | grep -v '^ *1 ' | wc -l | tr "\n"  '/' >> $@; \
	        echo $$s >> $@; \
	      fi \
	    fi \
	  done \
	done
	cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	paste $@ $@.percentage > $@.new
	mv $@.new $@
	rm -f $@.percentage $@.new


ALL_OVERLAP_FIXED = $(patsubst %.txt,%.fixed,${ALL_MONO_OVERLAP_FILES})

fix: ${ALL_OVERLAP_FIXED}

${ALL_OVERLAP_FIXED}:
	@if [ -e $(@:.fixed=.txt) ]; then \
	  if [ `head -1 $(@:.fixed=.txt) | perl -e '@a=split(/\t/,<>);print scalar @a;'` -eq 5 ]; then \
	    echo "fix $@"; \
	    echo "#!/usr/bin/bash" > $@.sh; \
	    cut -f1,2 $(@:.fixed=.txt) | tr "\t" '/' | \
	    sed 's#^#pigz -cd < /projappl/nlpl/data/OPUS/#;s#$$#/mono/en.txt.gz | wc -l#' >> $@.sh; \
	    chmod +x $@.sh; \
	    $@.sh > $@; \
	    rm -f $@.sh; \
	  fi \
	fi

