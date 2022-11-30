#---------------------------------------------------------------------
# de-duplicate and index
#---------------------------------------------------------------------
#

SHELL := bash

include ../Makefile.def
include ../Makefile.submit


# place where to find OPUS data sets
# TODO: don't require local files

# OPUSDATASETS = ${OPUSRELEASE}
OPUSDATASETS = ${OPUSNLPL}

STORAGE_BASE = https://object.pouta.csc.fi/OPUS-

## monolingual texts

LANGUAGE ?= en

INDEX_TMPDIR = ${TMPDIR}/index_tmp_${LANGUAGE}

ALL_MONO_URLS   := $(patsubst %,https:%,$(shell find ${OPUSRELEASE}/ -name statistics.yaml | \
			xargs grep 'mono/${LANGUAGE}.txt.gz' | cut -f4 -d:))
ALL_MONO_DEDUP  := $(patsubst ${STORAGE_BASE}%.txt.gz,${INDEX_TMPDIR}/%.dedup,${ALL_MONO_URLS})
ALL_MONO_DONE   := $(patsubst ${INDEX_TMPDIR}/%.dedup,done/%.done,${ALL_MONO_DEDUP})


.INTERMEDIATE: ${ALL_MONO_DEDUP}


.PHONY: all
all: ${LANGUAGE}.sent2id.db

.PHONY: job-puhti
job-puhti:
	${MAKE} HPC_MEM=16g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 all.submit



.PHONY: dedup
dedup: ${ALL_MONO_DEDUP}

## merge all deduplicated files
${LANGUAGE}.dedup.gz: ${ALL_MONO_DONE}
	if [ -e $@ ]; then \
	  find ${INDEX_TMPDIR} -name '*.dedup' |\
	  xargs ${SORT} -m -u <(${GZIP} -cd $@) | ${GZIP} -c > ${INDEX_TMPDIR}/$@; \
	else \
	  find ${INDEX_TMPDIR} -name '*.dedup' |\
	  xargs ${SORT} -m -u | ${GZIP} -c > ${INDEX_TMPDIR}/$@; \
	fi
	mv -f ${INDEX_TMPDIR}/$@ $@


## create MCDB index databases
%.sent2id.db: %.dedup.gz
	${GZIP} -cd $< | ./add2mcdb.pl $@

## download monolingual corpus and de-duplicate
${INDEX_TMPDIR}/%.dedup:
	mkdir -p ${dir $@}
	wget -O - -qq $(patsubst ${INDEX_TMPDIR}/%.dedup,${STORAGE_BASE}%.txt.gz,$@) |\
	${GZIP} -cd | ${SORT} -u > $@

done/%.done: ${INDEX_TMPDIR}/%.dedup
	mkdir -p $(dir $@)
	touch $@
