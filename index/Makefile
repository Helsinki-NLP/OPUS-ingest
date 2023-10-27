#---------------------------------------------------------------------
# de-duplicate and index
#---------------------------------------------------------------------
#

SHELL := bash

include ../Makefile.def
include ../Makefile.submit


STORAGE_BASE = https://object.pouta.csc.fi/OPUS-

CSC_PROJECT      := project_2000661
HPC_MODULES      += allas parallel
LOAD_STORAGE_ENV := module load allas && allas-conf -k ${CSC_PROJECT}


## monolingual texts

LANGUAGE ?= en

INDEX_TMPDIR = ${TMPDIR}/index_tmp_${LANGUAGE}

ALL_MONO_URLS   := $(patsubst %,https:%,$(shell find ${OPUSRELEASE}/ -name statistics.yaml | \
			xargs grep 'mono/${LANGUAGE}.txt.gz' | cut -f4 -d:))
ALL_MONO_DEDUP  := $(patsubst ${STORAGE_BASE}%.txt.gz,${INDEX_TMPDIR}/%.dedup,${ALL_MONO_URLS})
ALL_MONO_DONE   := $(patsubst ${INDEX_TMPDIR}/%.dedup,done/%.done,${ALL_MONO_DEDUP})

.INTERMEDIATE: ${ALL_MONO_DEDUP}

# FIX_UNICODE := 	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'
FIX_UNICODE := 	${PARALLEL} ftfy


.PHONY: all
all: ${LANGUAGE}.counts
	${MAKE} ${LANGUAGE}.dedup.gz ${LANGUAGE}.db # ${LANGUAGE}.sent2id.db


.PHONY: counts
counts: ${LANGUAGE}.counts

.PHONY: dedup
dedup: ${LANGUAGE}.dedup.gz


SWIFT_PARAMS = --use-slo --segment-size 5G --changed --skip-identical

.PHONY: upload
upload:
	which a-get
	${LOAD_STORAGE_ENV} && swift upload OPUS-index ${SWIFT_PARAMS} ${LANGUAGE}.dedup.gz ${LANGUAGE}.*.db
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.dedup.gz$$' | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' > index.txt
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.db$$'       | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> index.txt
	find done -name '${LANGUAGE}.done' | xargs git add
	git add ${LANGUAGE}.counts index.txt


.PHONY: upload-all
upload-all:
	which a-get
	${LOAD_STORAGE_ENV} && swift upload OPUS-index ${SWIFT_PARAMS} *.dedup.gz *.db
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.dedup.gz$$' | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' > index.txt
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.db$$'       | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> index.txt
	find done -name '*.done' | xargs git add
	git add *.counts index.txt


index.txt:
	which a-get
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.dedup.gz$$' | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' > $@
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.db$$'       | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> $@

index-filesize.txt:
	which a-get
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.dedup.gz$$'  > $@
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.db$$'       >> $@



.PHONY: job-puhti
job-puhti:
	${MAKE} HPC_MEM=16g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 all.submit

.PHONY: job-puhti
dedup-job-puhti:
	${MAKE} HPC_MEM=16g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 dedup.submit



## line (=sentence) count and word count
${LANGUAGE}.counts: ${ALL_MONO_DONE}
	${MAKE} ${LANGUAGE}.dedup.gz
	${GZIP} -cd ${LANGUAGE}.dedup.gz | wc -lw |\
	sed 's/^ *//;s/  */	/g' > $@


counts-from-storage:
	for l in aa ca cs de en es et eu fi fr ga nb nds nn no se sk sv; do \
	  wget -qq -O - ${STORAGE_BASE}index/$$l.dedup.gz |\
	  ${GZIP} -cd | wc -lw | sed 's/^ *//;s/  */	/g' > $$l.counts; \
	done


## merge all deduplicated files
## download the old dedup file in case it exists
## and no local file exists
${LANGUAGE}.dedup.gz: ${ALL_MONO_DONE}
	if [ ! -e $@ ]; then \
	  if [ `grep '${LANGUAGE}\.dedup\.gz' index.txt | wc -l` -gt 0 ]; then \
	    echo "download ${LANGUAGE}.dedup.gz"; \
	    wget -qq ${STORAGE_BASE}index/${LANGUAGE}.dedup.gz; \
	  fi \
	fi
	if [ `find ${INDEX_TMPDIR} -name '*.dedup' | wc -l` -gt 0 ]; then \
	  if [ -e $@ ]; then \
	    echo "merge all corpora with ${LANGUAGE}.dedup.gz"; \
	    find ${INDEX_TMPDIR} -name '*.dedup' |\
	    xargs ${MERGE} <(${GZIP} -cd $@) | ${GZIP} -c > ${INDEX_TMPDIR}/$@; \
	    mv -f ${INDEX_TMPDIR}/$@ $@; \
	  else \
	    echo "merge all corpora into ${LANGUAGE}.dedup.gz"; \
	    find ${INDEX_TMPDIR} -name '*.dedup' |\
	    xargs ${MERGE} | ${GZIP} -c > ${INDEX_TMPDIR}/$@; \
	    mv -f ${INDEX_TMPDIR}/$@ $@; \
	  fi \
	fi


## create MCDB index databases
%.sent2id.db: %.dedup.gz
	${GZIP} -cd $< | ./add2mcdb.pl $@

%.id2sent.db: %.dedup.gz
	${GZIP} -cd $< | ./add2index.pl $@

%.db: %.dedup.gz
	${GZIP} -cd < $< | ./sent2sqlite.py $@


en.dedup.new.gz:
	gzip -cd en.dedup.gz | parallel --pipe --keep-order -q ${FIX_UNICODE} | gzip -c > $@

## download monolingual corpus and de-duplicate
${INDEX_TMPDIR}/%.dedup:
	mkdir -p ${dir $@}
	wget -O - -qq $(patsubst ${INDEX_TMPDIR}/%.dedup,${STORAGE_BASE}%.txt.gz,$@) |\
	${GZIP} -cd | ${FIX_UNICODE} | ${SORT} -u  > $@
	if [ -e $(notdir $(@:.dedup=.db)) ]; then \
	  if [ -s $@ ]; then \
	    cat $@ | ./sent2sqlite.py $@; \
	  fi \
	fi

done/%.done: ${INDEX_TMPDIR}/%.dedup
	mkdir -p $(dir $@)
	touch $@
