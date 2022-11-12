#---------------------------------------------------------------------
# compute overlaps between corpora
#---------------------------------------------------------------------
#
# TOOD:
#   - remove spaces (and other kind of normalisation?)
#   - make it possible to update counts when new corpora appear
#
# TODO: use GNU parallel for some things, e.g. removing spaces in pipe, something like
#    gzip -cd file | parallel --pipe --keep-order -q -L10000 --max-procs 25% sed 's/ *//g' > output
#    (how much speedup do we gain if any?)
#

include ../Makefile.def
include ../Makefile.submit

## name of all corpora and their released versions
CORPORA  := ${sort ${notdir ${shell find ${OPUSRELEASE} -mindepth 1 -maxdepth 1 -type d }}}
CORPUS   ?= ${firstword ${CORPORA}}
VERSIONS ?= $(sort ${notdir ${shell find ${OPUSRELEASE}/${CORPUS} -maxdepth 1 -mindepth 1 -type d}})
VERSION  ?= ${lastword ${VERSIONS}}




DATE := ${shell date '+%F'}

LANGUAGE ?= en

ALL_MONO              := $(filter-out %/latest/mono/${LANGUAGE}.txt.gz,${wildcard ${OPUSRELEASE}/*/*/mono/${LANGUAGE}.txt.gz})
ALL_MONO_DEDUP        := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.gz,${ALL_MONO})
ALL_MONO_DEDUP_COUNTS := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_MONO_DEDUP})
ALL_OVERLAP_FILES     := $(patsubst ${OPUSRELEASE}/%/mono/${LANGUAGE}.txt.gz,${LANGUAGE}/%.txt,${ALL_MONO})


# sentence index DBs

ALL_MONO_CDBS        := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.cdb.1,${ALL_MONO})
ALL_MONO_MCDBS       := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.mcdb,${ALL_MONO})

ALL_MONO_DEDUP_CDBS  := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.cdb.1,${ALL_MONO})
ALL_MONO_DEDUP_MCDBS := $(patsubst ${OPUSRELEASE}/%.txt.gz,${TMPDIR}/%.dedup.mcdb,${ALL_MONO})



## bitexts

LANGPAIR ?= de-en
SRCLANG := $(firstword $(subst -, ,${LANGPAIR}))
TRGLANG := $(lastword $(subst -, ,${LANGPAIR}))

ALL_PARA               := $(filter-out %/latest/moses/${LANGPAIR}.txt.gz,${wildcard ${OPUSRELEASE}/*/*/moses/${LANGPAIR}.txt.zip})
ALL_PARA_DEDUP         := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.gz,${ALL_PARA})
ALL_PARA_DEDUP_COUNTS  := $(patsubst %.dedup.gz,%.dedup.nrlines,${ALL_PARA_DEDUP})
ALL_PARA_OVERLAP_FILES := $(patsubst ${OPUSRELEASE}/%/moses/${LANGPAIR}.txt.zip,${LANGPAIR}/%.txt,${ALL_PARA})
ALL_PARA_DEDUP_MCDBS   := $(patsubst ${OPUSRELEASE}/%.txt.zip,${TMPDIR}/%.dedup.mcdb,${ALL_PARA})



.PHONY: all
all: ${ALL_OVERLAP_FILES}

.PHONY: all-bitexts
all-bitexts: ${ALL_PARA_OVERLAP_FILES}

## submit jobs on puhti@csc
.PHONY: job-puhti
job-puhti:
	${MAKE} HPC_MEM=128g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=1000 all.submit

.PHONY: job-bitext-puhti
job-bitext-puhti:
	${MAKE} HPC_MEM=64g HPC_CORES=16 CORES=4 THREADS=4 HPC_DISK=500 all-bitexts.submit


## print the files we want to create
.PHONY: info
info:
	@echo ${ALL_OVERLAP_FILES} | tr ' ' "\n"


## intermediate files (deduplicated texts, CDB-based and MCDB-based sentence index)
.PHONY: cdb mcdb dedup dedup-cdb dedup-mcdb counts
cdb: ${ALL_MONO_CDBS}
mcdb: ${ALL_MONO_MCDBS}
dedup: ${ALL_MONO_DEDUP}
dedup-cdb: ${ALL_MONO_DEDUP_CDBS}
dedup-mcdb: ${ALL_MONO_DEDUP_MCDBS}
counts: ${ALL_MONO_DEDUP_COUNTS}


.PHONY: overlaps
overlaps: ${LANGUAGE}/${CORPUS}/${VERSION}.txt

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
# variant 2: dedup first before creating the index
#------------------------------------------------

## create deduplicated monolingual corpus files
${TMPDIR}/%.dedup.gz: ${OPUSRELEASE}/%.txt.gz
	mkdir -p ${dir $@}
	${GZIP} -cd $< | ${SORT} -u | ${GZIP} -c > $@

## create CDB index databases
${TMPDIR}/%.dedup.cdb.1: ${TMPDIR}/%.dedup.gz
	${GZIP} -cd $< | ./add2cdb.pl ${@:1=}

## create MCDB index databases
${TMPDIR}/%.dedup.mcdb: ${TMPDIR}/%.dedup.gz
	${GZIP} -cd $< | ./add2mcdb.pl $@



# count lines
%.dedup.nrlines: %.dedup.gz
	${GZIP} -cd $< | wc -l > $@



## create deduplicated bitexts
## NOTE: spaces removed because sometimes a final space is added etc
${TMPDIR}/%/${LANGPAIR}.dedup.gz: ${OPUSRELEASE}/%/${LANGPAIR}.txt.zip
	mkdir -p ${dir $@}tmp
	unzip -d ${dir $@}tmp $<
	paste ${dir $@}tmp/*.${SRCLANG} ${dir $@}tmp/*.${TRGLANG} | \
	sed 's/ *//g' | ${SORT} -u | ${GZIP} -c > $@
	rm -f ${dir $@}tmp/*
	rmdir ${dir $@}tmp




#------------------------------------------------
# files with overlap counts (using DB index files)
# (index based on deduplicated corpora)
#------------------------------------------------

${LANGUAGE}/%.txt: ${ALL_MONO_DEDUP} ${ALL_MONO_DEDUP_COUNTS} ${ALL_MONO_DEDUP_MCDBS}
	mkdir -p ${dir $@}
	@for c in ${CORPORA}; do \
	  s=`cat $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.nrlines,$@)`; \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGUAGE}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz ]; then \
	        t=`cat ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.nrlines`; \
	        echo "count overlap with $$c $$v"; \
	        echo -n "$$c	$$v	$$t	" >> $@; \
	        if [ $$t -lt $$s ]; then \
	          ${GZIP} -cd ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.gz |\
	          ./find_in_mcdb.pl $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.mcdb,$@) >> $@; \
	        else \
	          ${GZIP} -cd $(patsubst ${LANGUAGE}/%.txt,${TMPDIR}/%/mono/${LANGUAGE}.dedup.gz,$@) |\
	          ./find_in_mcdb.pl ${TMPDIR}/$$c/$$v/mono/${LANGUAGE}.dedup.mcdb >> $@; \
	        fi; \
	        echo "/$$s" >> $@; \
	      fi \
	    fi \
	  done \
	done
	cut -f4 $@ | sed 's/^/scale=2;100*/' | bc > $@.percentage
	paste $@ $@.percentage > $@.new
	mv $@.new $@
	rm -f $@.percentage $@.new


## individual count files (good for incrementally updating scores ...)

test-count:
	make CORPUS1=TED2013 VERSION1=v1.1 CORPUS2=TED2020 VERSION2=v1 count-file

.PHONY: count-file
count-file: counts/${LANGUAGE}/${CORPUS1}_${VERSION1}-${CORPUS2}_${VERSION2}.txt

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


${LANGPAIR}/%.txt: ${ALL_PARA_DEDUP} ${ALL_PARA_DEDUP_COUNTS} ${ALL_PARA_DEDUP_MCDBS}
	mkdir -p ${dir $@}
	for c in ${CORPORA}; do \
	  for v in `find ${OPUSRELEASE}/$$c -mindepth 1 -maxdepth 1 -type d -printf "%f " | sort`; do \
	    if [ "$(patsubst ${LANGPAIR}/%.txt,%,$@)" != "$$c/$$v" ]; then \
	      if [ -e ${TMPDIR}/$$c/$$v/moses/${LANGPAIR}.dedup.gz ]; then \
	        make CORPUS1=$(patsubst ${LANGPAIR}/%/,%,$(dir $@)) VERSION1=${notdir ${@:.txt=}} CORPUS2=$$c VERSION2=$$v count-bitext; \
	      fi \
	    fi \
	  done \
	done
	find ${LANGPAIR} -type f | sort | xargs cat > $@

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


ALL_OVERLAP_FIXED = $(patsubst %.txt,%.fixed,${ALL_OVERLAP_FILES})

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

