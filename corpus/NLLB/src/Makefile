#-*-makefile-*-

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


NLLB_STORAGE = https://storage.googleapis.com/allennlp-data-bucket/nllb


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR = ${LOCAL_SCRATCH}
endif


PWD            := ${shell pwd}
THREADS        := 4

TSV_BITEXTS    := $(sort $(wildcard *.bitextf.tsv.gz))
XML_BITEXTS    := ${patsubst %.bitextf.tsv.gz,../xml/%.xml.gz,${TSV_BITEXTS}}
LANGUAGES      := $(sort $(subst -, ,${patsubst %.bitextf.tsv.gz,%,${TSV_BITEXTS}}))
XML_CORPORA    := ${patsubst %,../raw/%/$(CORPUS).xml.gz,${LANGUAGES}}
TXT_CORPORA    := ${patsubst %,../raw/%/$(CORPUS).txt.gz,${LANGUAGES}}
TXT_CORPUS_IDS := ${patsubst %,${TMPDIR}/$(CORPUS).%.ids.gz,${LANGUAGES}}
SENTDBS        := ${patsubst %,${TMPDIR}/$(CORPUS).%.db,${LANGUAGES}}

TSV2OPUS       := ${PWD}/../scripts/tsv2opus
GZIP           := ${shell which pigz 2>/dev/null || echo gzip}
SORT           := LC_ALL=C sort -T ${TMPDIR} --parallel=${THREADS}
JOIN           := LC_ALL=C join



.PHONY: all
all:
	${MAKE} fetch
	${MAKE} txtids
	${MAKE} bitexts
	${MAKE} cleanup


## run a test after fetching with ace-ban

test-txt-ids:
	make LANGUAGES="ace ban" txtids

test-bitext: test-txt-ids
	make ../xml/ace-ban.xml.gz


## process all languages except English

NON_ENGLISH_BITEXTS := ${filter-out ../xml/%-en.xml.gz,${filter-out ../xml/en-%.xml.gz,${XML_BITEXTS}}}

non-english: non-english-txtids
	${MAKE} non-english-bitexts

non-english-txtids:
	make LANGUAGES="${filter-out en,${LANGUAGES}}" txtids

non-english-bitexts: ${NON_ENGLISH_BITEXTS}


#-------------------------------------------------------------
# fetching the data
#-------------------------------------------------------------

.PHONY: fetch txtids bitexts cleanup
fetch: fetch-nllb fetch-ccmatrix
	${MAKE} convert-nllb

fetch-nllb:
	tr '}' "\n" < dataset_infos.json | grep checksums | grep storage | cut -f4 -d\" | \
	xargs wget -q
	touch $@

fetch-ccmatrix:
	tr '}' "\n" < dataset_infos.json | grep checksums | grep statmt | cut -f4 -d\" | \
	xargs wget -q
	touch $@

NLLB_FILES     := $(filter-out %.tsv.gz,$(wildcard *.gz))
NLLB_CONVERTED := $(addsuffix .converted,${NLLB_FILES})

.PHONY: convert-nllb
convert-nllb: ${NLLB_CONVERTED}

.INTERMEDIATE: ${NLLB_FILES}

${NLLB_FILES}:
	wget ${NLLB_STORAGE}/$@

${NLLB_CONVERTED}: %.gz.converted: %.gz
	( s=$(shell grep '^$(firstword $(subst -, ,$(<:.gz=)))' nllb-langid-mapping.txt | cut -f2); \
	  t=$(shell grep '^$(lastword $(subst -, ,$(<:.gz=)))' nllb-langid-mapping.txt | cut -f2); \
	  f=$$s-$$t.bitextf.tsv.gz; \
	  ${GZIP} -cd < $< | cut -f3 > $<.score; \
	  ${GZIP} -cd < $< | cut -f1,2,4- > $<.rest; \
	  paste $<.score $<.rest | ${GZIP} -c > $$f; \
	  rm -f $<.score $<.rest; )
	rm -f $<
	touch $@

## fetching via datasets and huggingface:
## this seems to break for various reasons

.PHONY: fetch-via-huggingface
fetch-via-huggingface:
	python3 ../scripts/fetch.py


## fetching via git lfs
## but HF git is not complete!

fetch-via-git: nllb

nllb:
	module load git-lfs && git lfs install
	module load git-lfs && git clone https://huggingface.co/datasets/allenai/nllb




txtids: ${TXT_CORPUS_IDS}
bitexts: ${XML_BITEXTS}
cleanup:
	rm -f ${TXT_CORPUS_IDS}
	rm -f ${TSV_BITEXTS}



##----------------------------------
## NEW: also with metadata
##----------------------------------

TXT2XML = ../scripts/txt2xml_with_metadata.pl


## remove control characters, leading and trailing spaces and some other stuff

UNICODE_CLEANUP = perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;s/\&\s*\#\s*160\s*\;/ /g;s/^\s*//;s/\t\s*//g;s/\s*\t//g;s/\s*$$//g;'


## a simple pipeline to convert XML corpus data to tsv files with IDs and sentences

XML_TO_TXT_AND_ID = grep -a '</s>' | cut -f2 -d'<' | sed 's/^s id=\"\([0-9]*\)\".*\">/\1>/' | \
			tr '>' "\t" | sed 's/\&gt\;/\>/g;s/\&lt\;/\</g;s/\&amp\;/\&/g;'


## sentence alignments in XCES align format
## - check whether the plain text files with IDs exist
## - if not: create them and store them in temp files
## - add IDs in two steps to the parallel data
${XML_BITEXTS}: ../xml/%.xml.gz: %.bitextf.tsv.gz # ${XML_CORPORA}
	if [ -e ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz ]; then \
	  ln -s ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz $@.mono.gz; \
	else \
	  ${GZIP} -cd ../raw/$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	  ${XML_TO_TXT_AND_ID} | ${GZIP} -c > $@.mono.gz; \
	fi
	zcat $< | cut -f1,2,3 | ${UNICODE_CLEANUP} | ${SORT} -k2,2 -t'	' | ${GZIP} -c > $@.biling.gz
	${JOIN} -t'	' -1 2 -2 2 -o 2.1 2.2 2.3 1.1 <(${GZIP} -cd $@.mono.gz) <(${GZIP} -cd $@.biling.gz) |\
	${GZIP} -c > $@.srcids.gz
	rm -f $@.mono.gz $@.biling.gz
	if [ -e ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz ]; then \
	  ln -s ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz $@.mono.gz; \
	else \
	  ${GZIP} -cd ../raw/$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	  ${XML_TO_TXT_AND_ID} | ${GZIP} -c > $@.mono.gz; \
	fi
	zcat $@.srcids.gz | ${SORT} -k3,3 -t'	' | ${GZIP} -c > $@.biling.gz
	rm -f $@.srcids.gz
	${JOIN} -t'	' -1 2 -2 3 -o 2.1 2.4 1.1 <(${GZIP} -cd $@.mono.gz) <(${GZIP} -cd $@.biling.gz) |\
	${SORT} -k1nr | \
	../scripts/tsv2cesalign.pl \
	    $(firstword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz \
	    $(lastword  $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	${GZIP} -c > $@
	rm -f $@.srcids.gz $@.mono.gz $@.biling.gz


## corpus files - sorted unique sentences
${XML_CORPORA}:
	${MAKE} ${patsubst %.xml.gz,%.txt.gz,$@}
	${GZIP} -cd ${patsubst %.xml.gz,%.txt.gz,$@} | ${TXT2XML} | ${GZIP} -c > $@
	rm -f ${patsubst %.xml.gz,%.txt.gz,$@}


## sorted set of unique sentences for each language
${TXT_CORPORA}:
	mkdir -p ${dir $@}
	if [ `find . -name '${patsubst ../raw/%/,%-*.bitextf.tsv.gz,$(dir $@)}' | wc -l` -gt 0 ]; then \
	  find . -name '${patsubst ../raw/%/,%-*.bitextf.tsv.gz,$(dir $@)}' | xargs ${GZIP} -cd |\
	  cut -f2,4,6,7 | ${UNICODE_CLEANUP} | ${SORT} -u -k1,1 -t'	' | ${GZIP} -c > $@.txt1.gz; \
	fi
	if [ `find . -name '${patsubst ../raw/%/,*-%.bitextf.tsv.gz,$(dir $@)}' | wc -l` -gt 0 ]; then \
	  find . -name '${patsubst ../raw/%/,*-%.bitextf.tsv.gz,$(dir $@)}' | xargs ${GZIP} -cd |\
	  cut -f3,5,8,9 | ${UNICODE_CLEANUP} | ${SORT} -u -k1,1 -t'	'  | ${GZIP} -c > $@.txt2.gz; \
	fi
	if [ -e $@.txt1.gz ]; then \
	  if [ -e $@.txt2.gz ]; then \
	    ${SORT} -u -k1,1 -t'	' -m <(${GZIP} -cd $@.txt1.gz) <(${GZIP} -cd $@.txt2.gz) | \
	    ${GZIP} -c > $@; \
	    rm -f $@.txt1.gz $@.txt2.gz; \
	  else \
	    mv $@.txt1.gz $@; \
	  fi \
	else \
	  mv $@.txt2.gz $@; \
	fi

## plain text files with sentence IDs
${TXT_CORPUS_IDS}: ${TMPDIR}/$(CORPUS).%.ids.gz: ../raw/%/$(CORPUS).xml.gz
	${GZIP} -cd $< | ${XML_TO_TXT_AND_ID} | ${GZIP} -c > $@


