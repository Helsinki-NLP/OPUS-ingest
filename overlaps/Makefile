#---------------------------------------------------------------------
# compute overlaps between corpora
#---------------------------------------------------------------------
#
# TODO: better recipes for updating counts with new incoming corpora
#

SHELL := bash

include ../Makefile.def
include ../Makefile.submit


# place where to find OPUS data sets
# TODO: don't require local files

# OPUSDATASETS = ${OPUSRELEASE}
OPUSDATASETS = ${OPUSNLPL}

## names of all corpora and their released versions

CORPORA  := ${sort ${notdir ${shell find ${OPUSDATASETS} -mindepth 1 -maxdepth 1 -type d }}}
CORPUS   ?= ${firstword ${CORPORA}}
VERSIONS ?= $(sort ${notdir ${shell find ${OPUSDATASETS}/${CORPUS} -maxdepth 1 -mindepth 1 -type d}})
VERSION  ?= ${lastword ${VERSIONS}}


PARALLEL_ARGS := --pipe --keep-order -q -L10000 --max-procs 25%
PARALLEL := ${shell if [ `which parallel 2>/dev/null | wc -l` -gt 0 ]; then echo 'parallel ${PARALLEL_ARGS}'; fi }


# FIND_IN_MCDB := ./find_in_mcdb.pl -t
FIND_IN_MCDB := ./find_in_mcdb.pl


## monolingual texts

LANGUAGE ?= en

ALL_MONO               := $(filter-out %/latest/mono/${LANGUAGE}.txt.gz,${wildcard ${OPUSDATASETS}/*/*/mono/${LANGUAGE}.txt.gz})
ALL_MONO_DEDUP         := $(patsubst ${OPUSDATASETS}/%.txt.gz,${TMPDIR}/%.dedup.gz,${ALL_MONO})
ALL_MONO_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_MONO_DEDUP})
ALL_MONO_DEDUP_MCDBS   := $(patsubst ${OPUSDATASETS}/%.txt.gz,${TMPDIR}/%.dedup.mcdb,${ALL_MONO})
ALL_MONO_OVERLAP_FILES := $(patsubst ${OPUSDATASETS}/%/mono/${LANGUAGE}.txt.gz,${LANGUAGE}/%.txt,${ALL_MONO})
OPUS_MONO_OVERLAPS     := $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGUAGE}.tsv,${ALL_MONO_OVERLAP_FILES})

OPUS_NEWMONO_OVERLAPS  := $(patsubst ${LANGUAGE}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGUAGE}.new.tsv,${ALL_MONO_OVERLAP_FILES})


.NOTINTERMEDIATE: ${ALL_MONO_OVERLAP_FILES}

.PHONY: all-mono
all-mono: ${ALL_MONO_DEDUP} ${ALL_MONO_DEDUP_COUNTS} ${ALL_MONO_DEDUP_MCDBS}
	${MAKE} all-mono-overlaps

.PHONY: all-mono-overlaps
all-mono-overlaps: ${OPUS_MONO_OVERLAPS}

.PHONY: mono-overlaps
mono-overlaps: ${OPUSRELEASE}/${CORPUS}/${VERSION}/overlaps/${LANGUAGE}.tsv



## all bitexts with English in either source or target language
## (only if the directory does not exist yet)
## --> enable updating with new counts for new corpora

job-en-bitexts-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 en-bitexts.submit

en-bitexts:
	for l in `find ${OPUSDATASETS} -name '*-en.tmx.gz' -printf "%f\n" | sed 's/\-en\.tmx.gz//' | grep -v '\.' | sort -u`; do \
	  if [ ! -e $$l-en ]; then \
	    make LANGPAIR=$$l-en all-para; \
	    find ${TMPDIR} -name '*.dedup.*' -delete; \
	  fi \
	done
	for l in `find ${OPUSDATASETS} -name 'en-*.tmx.gz' -printf "%f\n" | sed 's/\.tmx.gz//;s/^en-//;' | grep -v '\.' | sort -u`; do \
	  if [ ! -e en-$$l ]; then \
	    make LANGPAIR=en-$$l all-para; \
	    find ${TMPDIR} -name '*.dedup.*' -delete; \
	  fi \
	done




## bitexts

LANGPAIR ?= de-en
SRCLANG := $(firstword $(subst -, ,${LANGPAIR}))
TRGLANG := $(lastword $(subst -, ,${LANGPAIR}))

ALL_PARA               := $(filter-out %/latest/moses/${LANGPAIR}.txt.zip,${wildcard ${OPUSDATASETS}/*/*/moses/${LANGPAIR}.txt.zip})
ALL_PARA_DEDUP         := $(patsubst ${OPUSDATASETS}/%.txt.zip,${TMPDIR}/%.dedup.gz,${ALL_PARA})
ALL_PARA_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_PARA_DEDUP})
ALL_PARA_DEDUP_MCDBS   := $(patsubst ${OPUSDATASETS}/%.txt.zip,${TMPDIR}/%.dedup.mcdb,${ALL_PARA})
ALL_PARA_OVERLAP_FILES := $(patsubst ${OPUSDATASETS}/%/moses/${LANGPAIR}.txt.zip,${LANGPAIR}/%.txt,${ALL_PARA})
OPUS_PARA_OVERLAPS     := $(patsubst ${LANGPAIR}/%.txt,${OPUSRELEASE}/%/overlaps/${LANGPAIR}.tsv,${ALL_PARA_OVERLAP_FILES})



.NOTINTERMEDIATE: ${ALL_PARA_OVERLAP_FILES}

.PHONY: all-para
all-para: ${ALL_PARA_DEDUP} ${ALL_PARA_DEDUP_COUNTS} ${ALL_PARA_DEDUP_MCDBS}
	${MAKE} all-para-overlaps

.PHONY: all-para-overlaps
all-para-overlaps: ${OPUS_PARA_OVERLAPS}

.PHONY: para-overlaps
para-overlaps: ${OPUSRELEASE}/${CORPUS}/${VERSION}/overlaps/${LANGPAIR}.tsv




##----------------------------------
## submit specific jobs on puhti@csc
##----------------------------------

## TODO: there is some kind of memory leak
##       mcdb requires a lot of memory and for English it still crashes with 128GB RAM

.PHONY: job-puhti
job-mono-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 all-mono.submit

.PHONY: job-english-puhti
job-english-puhti:
	${MAKE} HPC_MEM=256g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 LANGUAGE=en all-mono.submit

.PHONY: biglang-job-puhti
biglang-job-puhti:
	for l in en fr es it de zh ja ru; do \
	  ${MAKE} LANGUAGE=$$l job-mono-puhti; \
	done

.PHONY: job-bitext-puhti
job-bitext-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 all-para.submit



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

## old version: just keep the same as in the text file for the release
## new version above: cleaner structure and more complete stats

${OPUSRELEASE}/%/overlaps/${LANGUAGE}.old.tsv: ${LANGUAGE}/%.txt
	mkdir -p $(dir $@)
	sort -k5,5nr -k4,4nr $< > $@

${OPUSRELEASE}/%/overlaps/${LANGPAIR}.old.tsv: ${LANGPAIR}/%.txt
	mkdir -p $(dir $@)
	sort -k5,5nr -k4,4nr $< > $@


#------------------------------------------------
# dedup first before creating the sentence index
#------------------------------------------------

## create deduplicated monolingual corpus files
${TMPDIR}/%.dedup.gz: ${OPUSDATASETS}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ${SORT} -u | ${GZIP} -c > $@

## create deduplicated bitexts
## NOTE: spaces removed for bitexts!
${TMPDIR}/%/${LANGPAIR}.dedup.gz: ${OPUSDATASETS}/%/${LANGPAIR}.txt.zip
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



#------------------------------------------------
# files with overlap counts (using DB index files)
# (index based on deduplicated corpora)
#------------------------------------------------

${LANGUAGE}/%.txt: ${ALL_MONO}
	mkdir -p ${dir $@}
	if [ -e $(@:.txt=.tar.gz) ]; then tar -xzf $(@:.txt=.tar.gz); fi
	@for c in ${CORPORA}; do \
	  s=`cat $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.nrlines,$@)`; \
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
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

## pack individual count files if the cumulative count file exist
tar-mono-counts:
	@for c in ${CORPORA}; do \
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ -e ${LANGUAGE}/$$c/$$v.txt ]; then \
	      if [ ! -e ${LANGUAGE}/$$c/$$v.tar.gz ]; then \
	        make ${LANGUAGE}/$$c/$$v.tar.gz; \
	      fi \
	    fi \
	  done \
	done


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
	  ${GZIP} -cd $(word 1,$^) | ${FIND_IN_MCDB} $(word 6,$^) >> $@; \
	else \
	  ${GZIP} -cd $(word 2,$^) | ${FIND_IN_MCDB} $(word 5,$^) >> $@; \
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
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
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

## pack individual count files if the cumulative count file exist
tar-para-counts:
	@for c in ${CORPORA}; do \
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ -e ${LANGPAIR}/$$c/$$v.txt ]; then \
	      if [ ! -e ${LANGPAIR}/$$c/$$v.tar.gz ]; then \
	        make ${LANGPAIR}/$$c/$$v.tar.gz; \
	      fi \
	    fi \
	  done \
	done


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
	  ${GZIP} -cd $(word 1,$^) | ${FIND_IN_MCDB} $(word 6,$^) >> $@; \
	else \
	  ${GZIP} -cd $(word 2,$^) | ${FIND_IN_MCDB} $(word 5,$^) >> $@; \
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




ALL_MONO_CDBS        := $(patsubst ${OPUSDATASETS}/%.txt.gz,${TMPDIR}/%.cdb.1,${ALL_MONO})
ALL_MONO_MCDBS       := $(patsubst ${OPUSDATASETS}/%.txt.gz,${TMPDIR}/%.mcdb,${ALL_MONO})
ALL_MONO_DEDUP_CDBS  := $(patsubst ${OPUSDATASETS}/%.txt.gz,${TMPDIR}/%.dedup.cdb.1,${ALL_MONO})

.PHONY: cdb mcdb dedup-cdb
cdb: ${ALL_MONO_CDBS}
mcdb: ${ALL_MONO_MCDBS}
dedup-cdb: ${ALL_MONO_DEDUP_CDBS}

#------------------------------------------------
# variant 1: creating the index from raw monolingual text
#------------------------------------------------

## create CDB index databases
${TMPDIR}/%.cdb.1: ${OPUSDATASETS}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ./add2cdb.pl ${@:1=}

## create MCDB index databases
${TMPDIR}/%.mcdb: ${OPUSDATASETS}/%.txt.gz
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
	  s=`${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${OPUSDATASETS}/%/mono/${LANGUAGE}.txt.gz,$@) | wc -l`; \
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${OPUSDATASETS}/$$c/$$v/mono/${LANGUAGE}.txt.gz ]; then \
	        echo "count overlap with $$c $$v"; \
	        echo -n "$$c	$$v	" >> $@; \
	        ${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${OPUSDATASETS}/%/mono/${LANGUAGE}.txt.gz,$@) |\
	        ${FIND_IN_MCDB} ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.mcdb >> $@; \
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
	  for v in `find ${OPUSDATASETS}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${OPUSDATASETS}/$$c/$$v/mono/${LANGUAGE}.txt.gz ]; then \
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

