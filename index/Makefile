#---------------------------------------------------------------------
# de-duplicate and index sentences in OPUS
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

ALL_MONO_URLS    := $(patsubst %,https:%,$(shell find ${OPUSRELEASE}/ -name statistics.yaml | \
			xargs grep 'mono/${LANGUAGE}.txt.gz' | cut -f4 -d:))
ALL_MONO_DEDUP   := $(patsubst ${STORAGE_BASE}%.txt.gz,${INDEX_TMPDIR}/%.dedup,${ALL_MONO_URLS})
ALL_MONO_IDX     := $(patsubst ${STORAGE_BASE}%.txt.gz,${INDEX_TMPDIR}/%.idx,${ALL_MONO_URLS})
ALL_MONO_JSONL   := $(patsubst ${STORAGE_BASE}%.txt.gz,${INDEX_TMPDIR}/%.jsonl,${ALL_MONO_URLS})
# DOC_MONO_JSONL   := $(filter-out ${INDEX_TMPDIR}/ELRA% \
# 				${INDEX_TMPDIR}/ELRC% \
# 				${INDEX_TMPDIR}/fiskmo% \
# 				${INDEX_TMPDIR}/DGT% \
# 				${INDEX_TMPDIR}/HPLT% \
# 				${INDEX_TMPDIR}/JRC-Acquis% \
# 				${INDEX_TMPDIR}/MultiHPLT% \
# 				${INDEX_TMPDIR}/NLLB% \
# 				${INDEX_TMPDIR}/WikiMatrix% \
# 				${INDEX_TMPDIR}/CCMatrix% \
# 				${INDEX_TMPDIR}/CCAligned% \
# 				${INDEX_TMPDIR}/MultiCCAligned% \
# 				${INDEX_TMPDIR}/WMT-News% \
# 				${INDEX_TMPDIR}/XLEnt% \
# 				${INDEX_TMPDIR}/LinguaTools-WikiTitles% \
# 				${INDEX_TMPDIR}/ParaCrawl% \
# 				${INDEX_TMPDIR}/MultiParaCrawl%,${ALL_MONO_JSONL})

ALL_MONO_DONE      := $(patsubst ${INDEX_TMPDIR}/%.dedup,done/%.done,${ALL_MONO_DEDUP})
ALL_MONO_IDXDONE   := $(patsubst ${INDEX_TMPDIR}/%.idx,done/%.idx.done,${ALL_MONO_IDX})
ALL_MONO_JSONLDONE := $(patsubst ${INDEX_TMPDIR}/%.jsonl,done/%.jsonl.done,${ALL_MONO_JSONL})

TMP_SENTENCE_DB  := ${INDEX_TMPDIR}/${LANGUAGE}-sentences.db


## intermediate files that can be deleted after finishing up

.INTERMEDIATE: ${ALL_MONO_DEDUP}
.INTERMEDIATE: ${ALL_MONO_IDX}
.INTERMEDIATE: ${TMP_SENTENCE_DB}

# FIX_UNICODE := 	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'
FIX_UNICODE := 	${PARALLEL} ftfy


.PHONY: all
all: ${LANGUAGE}.counts
	${MAKE} ${LANGUAGE}.dedup.gz ${LANGUAGE}.db
	${MAKE} ${LANGUAGE}.idx.gz ${LANGUAGE}.idx.db


.PHONY: counts
counts: ${LANGUAGE}.counts

.PHONY: dedup
dedup: ${LANGUAGE}.dedup.gz

.PHONY: jsonl
jsonl: ${LANGUAGE}.jsonl.gz

print-jsonl:
	@echo "${ALL_MONO_JSONLDONE}" | tr ' ' "\n"

SWIFT_PARAMS = --use-slo --segment-size 5G --changed --skip-identical

STORAGE_FILES = ${LANGUAGE}.dedup.gz ${LANGUAGE}.db ${LANGUAGE}.idx.gz ${LANGUAGE}.idx.db

.PHONY: upload
upload:
	which a-get
	${LOAD_STORAGE_ENV} && \
	swift upload OPUS-index ${SWIFT_PARAMS} ${STORAGE_FILES}
	rm -f index.txt
	${MAKE} index.txt
	find done -name '${LANGUAGE}.done' | xargs git add
	git add ${LANGUAGE}.counts index.txt


.PHONY: upload-all
upload-all:
	which a-get
	${LOAD_STORAGE_ENV} && swift upload OPUS-index ${SWIFT_PARAMS} *.dedup.gz *.db *.idx.gz
	rm -f index.txt
	${MAKE} index.txt
	find done -name '*.done' | xargs git add
	git add *.counts index.txt


index.txt:
	which a-get
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.dedup.gz$$' | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' > $@
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.db$$'       | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> $@
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.idx.gz$$'   | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> $@
	${LOAD_STORAGE_ENV} && swift list OPUS-index | grep '\.idx.db$$'   | \
		sed 's#^#https://object.pouta.csc.fi/OPUS-index/#' >> $@


index-filesize.txt:
	which a-get
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.dedup.gz$$'  > $@
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.db$$'       >> $@
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.idx.gz$$'   >> $@
	${LOAD_STORAGE_ENV} && rclone ls allas:OPUS-index | grep  '\.idx.db$$'   >> $@



.PHONY: job-puhti
job-puhti:
	${MAKE} HPC_MEM=16g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 all.submit

.PHONY: job-puhti
dedup-job-puhti:
	${MAKE} HPC_MEM=16g HPC_CORES=8 CORES=4 THREADS=4 HPC_DISK=1000 dedup.submit


big-job-puhti:
	${MAKE} HPC_MEM=32g HPC_CORES=16 CORES=8 THREADS=8 HPC_DISK=3000 all.submit



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
	${MAKE} STORED_FILE=$@ retrieve
	if [ `find ${INDEX_TMPDIR} -name '*.dedup' | wc -l` -gt 0 ]; then \
	  if [ -e ${INDEX_TMPDIR}/$@ ]; then \
	    echo "merge all corpora with ${LANGUAGE}.dedup.gz"; \
	    find ${INDEX_TMPDIR} -name '*.dedup' |\
	    xargs ${MERGE} <(${GZIP} -cd ${INDEX_TMPDIR}/$@) | ${GZIP} -c > $@; \
	  else \
	    echo "merge all corpora into ${LANGUAGE}.dedup.gz"; \
	    find ${INDEX_TMPDIR} -name '*.dedup' |\
	    xargs ${MERGE} | ${GZIP} -c > $@; \
	  fi \
	fi


## create MCDB index databases
## OBSOLETE?

%.sent2id.db: %.dedup.gz
	mkdir -p ${INDEX_TMPDIR}
	${GZIP} -cd $< | ./add2mcdb.pl ${INDEX_TMPDIR}/$(notdir $@)
	mv -f ${INDEX_TMPDIR}/$(notdir $@) $@

%.id2sent.db: %.dedup.gz
	mkdir -p ${INDEX_TMPDIR}
	${GZIP} -cd $< | ./add2index.pl ${INDEX_TMPDIR}/$(notdir $@)
	mv -f ${INDEX_TMPDIR}/$(notdir $@) $@


## sqlite database of all sentences

${LANGUAGE}.db: ${LANGUAGE}.dedup.gz
	${MAKE} STORED_FILE=$@ retrieve
	${GZIP} -cd < $< | ./sent2sqlite.py ${INDEX_TMPDIR}/$@
	mv -f ${INDEX_TMPDIR}/$@ $@


## sentence index that maps corpus-specific indeces to the ID in the sentence ID

sentence-index: ${LANGUAGE}.idx.gz

${LANGUAGE}.idx.db: ${LANGUAGE}.idx.gz
	${MAKE} STORED_FILE=$@ retrieve
	echo "CREATE TABLE IF NOT EXISTS sentindex ( id, corpus, version, document, parID, sentID, length)" \
	| sqlite3 ${INDEX_TMPDIR}/$@
	echo "create index idx_location on sentindex (corpus,version,document,sentID);" | sqlite3 ${INDEX_TMPDIR}/$@
	${GZIP} -cd < $< | tr "\t" ',' | sqlite3  ${INDEX_TMPDIR}/$@ ".import /dev/stdin sentindex --csv"
	rsync ${INDEX_TMPDIR}/$@ $@


## merge index files into the existing list

${LANGUAGE}.idx.gz: ${ALL_MONO_IDXDONE}
	${MAKE} STORED_FILE=$@ retrieve
	if [ -e ${INDEX_TMPDIR}/$@ ]; then \
	  find ${INDEX_TMPDIR} -name '*.idx' | xargs cat <(${GZIP} -cd ${INDEX_TMPDIR}/$@) | ${GZIP} -c > $@; \
	else \
	  find ${INDEX_TMPDIR} -name '*.idx' | xargs cat | ${GZIP} -c > $@; \
	fi
	if [ -e ${TMP_SENTENCE_DB} ]; then rsync ${TMP_SENTENCE_DB} ${LANGUAGE}.db; fi


${TMP_SENTENCE_DB}:
	rsync ${LANGUAGE}.db $@

${INDEX_TMPDIR}/%.idx: ${TMP_SENTENCE_DB}
	mkdir -p ${dir $@}
	./opus_sentid_index.py \
		-c $(word 1,$(subst /, ,$(patsubst ${INDEX_TMPDIR}/%.idx,%,$@))) \
		-r $(word 2,$(subst /, ,$(patsubst ${INDEX_TMPDIR}/%.idx,%,$@))) \
		-l ${LANGUAGE} \
		-d ${TMP_SENTENCE_DB} > $@
	if [ -e $(notdir $@).db ]; then \
	  tr "\t" ',' < $@ | sqlite3 $(notdir $@).db ".import /dev/stdin sentindex --csv"; \
	fi




## jsonl format

${LANGUAGE}.jsonl.gz: ${ALL_MONO_JSONLDONE}
	${MAKE} STORED_FILE=$@ retrieve
	if [ -e ${INDEX_TMPDIR}/$@ ]; then \
	  find ${INDEX_TMPDIR} -name '*.jsonl' | xargs cat <(${GZIP} -cd ${INDEX_TMPDIR}/$@) | ${GZIP} -c > $@; \
	else \
	  find ${INDEX_TMPDIR} -name '*.jsonl' | xargs cat | ${GZIP} -c > $@; \
	fi


#	./opus_get_documents.py -j -sp \

${INDEX_TMPDIR}/%.jsonl:
	mkdir -p ${dir $@}
	./opus_get_documents.py -j \
		-c $(word 1,$(subst /, ,$(patsubst ${INDEX_TMPDIR}/%.jsonl,%,$@))) \
		-r $(word 2,$(subst /, ,$(patsubst ${INDEX_TMPDIR}/%.jsonl,%,$@))) \
		-l ${LANGUAGE} > $@


## download monolingual corpus and de-duplicate
#
# downloading and feeding directly into a pipe:
#	wget -O - -qq $(patsubst ${INDEX_TMPDIR}/%.dedup,${STORAGE_BASE}%.txt.gz,$@) |


${INDEX_TMPDIR}/%.dedup:
	mkdir -p ${dir $@}
	wget -qq -O $@.txt.gz $(patsubst ${INDEX_TMPDIR}/%.dedup,${STORAGE_BASE}%.txt.gz,$@)
	${GZIP} -cd < $@.txt.gz | ${FIX_UNICODE} | ${SORT} -u  > $@
	rm -f $@.txt.gz
	if [ -e $(notdir $(@:.dedup=.db)) ]; then \
	  if [ -s $@ ]; then \
	    cat $@ | ./sent2sqlite.py $(notdir $(@:.dedup=.db)); \
	  fi \
	fi

done/%.done: ${INDEX_TMPDIR}/%.dedup
	mkdir -p $(dir $@)
	touch $@

done/%.idx.done: ${INDEX_TMPDIR}/%.idx
	mkdir -p $(dir $@)
	touch $@

done/%.jsonl.done: ${INDEX_TMPDIR}/%.jsonl
	mkdir -p $(dir $@)
	touch $@




## retrieve a file from allas if it exists
## and sync it to the temporary file location as well

retrieve: ${INDEX_TMPDIR}/${STORED_FILE}

${INDEX_TMPDIR}/${STORED_FILE}:
	mkdir -p ${INDEX_TMPDIR}
	if [ ! -e ${STORED_FILE} ]; then \
	  if [ `grep '${STORED_FILE}' index.txt | wc -l` -gt 0 ]; then \
	    echo "download ${STORED_FILE}"; \
	    wget -qq ${STORAGE_BASE}index/${STORED_FILE}; \
	  fi \
	fi
	if [ -e ${STORED_FILE} ]; then \
	  rsync ${STORED_FILE} $@; \
	fi






## test targets


de.CCMatrix-v1.idx: de.sent2id.db
	perl opus_sentid_index.pl -c CCMatrix -r v1 -l de -d $< > $@

fi.OpenSubtitles-v2018.idx: fi.sent2id.db
	perl opus_sentid_index.pl -c OpenSubtitles -r v2018 -l fi -d $< > $@

sv.OpenSubtitles-v2018.idx: sv.sent2id.db
	perl opus_sentid_index.pl -c OpenSubtitles -r v2018 -l sv -d $< > $@

de.OpenSubtitles-v2018.idx: de.sent2id.db
	perl opus_sentid_index.pl -c OpenSubtitles -r v2018 -l de -d $< > $@

fi.Europarl-v8.idx: fi.sent2id.db
	perl opus_sentid_index.pl -c Europarl -r v8 -l fi -d $< > $@

sv.Europarl-v8.idx: sv.sent2id.db
	perl opus_sentid_index.pl -c Europarl -r v8 -l sv -d $< > $@


sv.OpenSubtitles-v2018.idx2: sv.sent2id.db
	cp $< ${LOCAL_SCRATCH}/$<
	perl opus_sentid_index.pl -c OpenSubtitles -r v2018 -l sv -d ${LOCAL_SCRATCH}/$< > $@

sv.OpenSubtitles-v2018.idx3:
	cp sv.db ${LOCAL_SCRATCH}/sv.db
	./opus_sentid_index.py -c OpenSubtitles -r v2018 -l sv -d ${LOCAL_SCRATCH}/sv.db > $@


# en.dedup.new.gz:
# 	gzip -cd en.dedup.gz | parallel --pipe --keep-order -q ${FIX_UNICODE} | gzip -c > $@

