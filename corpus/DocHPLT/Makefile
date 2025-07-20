# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def


LANGUAGES := af ar az be bg bn bs ca cy en eo et eu fa fi ga gl gu he hi hr is ja kk kn ko lt lv mk ml mr ms mt nb ne nn si sk sl sq sr sw ta te th tr uk ur uz vi xh

## doc-aligned files are on LUMI in
## /scratch/project_462000688/dayyan/sharded_data/clean/combined


all:
	${MAKE} prepare
	${MAKE} release
	${MAKE} publish-release


DOCFILES    := $(patsubst src/%-deduped-docs.zip,raw/%.zip,$(wildcard src/*.zip))
DOCALGFILES := $(patsubst src/%.alignments.gz,xml/%.xml.gz,$(wildcard src/*.alignments.gz))


prepare: ${DOCFILES} ${DOCALGFILES}

prepare-docfiles: ${DOCFILES}
prepare-alignfiles: ${DOCALGFILES}

prepare-docfile-jobs:
	for d in ${DOCFILES}; do \
	  if [ ! -e $$d ]; then \
	    ${MAKE} HPC_DISK=500 HPC_MEM=64g $$d.submit; \
	  fi \
	done

## need to add the language prefix that was missing in the original doc-zip files

${DOCFILES}: raw/%.zip: src/%-deduped-docs.zip
	@mkdir -p ${TMPDIR}/$(dir $<) $(dir $@)
	rsync $< ${TMPDIR}/$<
	./add_path_prefix.py -z ${TMPDIR}/$< -p $(notdir $(@:.zip=)) 2>/dev/null
	rsync ${TMPDIR}/$< $@
	rm -f ${TMPDIR}/$<

#	@mkdir -p ${dir $@}
#	mv $< $@






PIVOT           := en
PIVOTED_BITEXTS := ${shell for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
			    for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
			      if [[ "$$t" > "$$s" ]]; then \
			         echo "xml/$$s-$$t.xml.gz"; \
			      fi \
			    done \
	                  done }

pivoting: ${PIVOTED_BITEXTS}

${PIVOTED_BITEXTS}:
	mkdir -p $@.d
	cd $@.d && opus2multi .. en $(subst -, ,$(notdir $(@:.xml.gz=)))
	cd $@.d && opus-pivoting *.xml | gzip -c > ../$(notdir $@)
	find $@.d -delete


PIVOTING_JOBS = $(addsuffix -job,${PIVOTED_BITEXTS})

${PIVOTING_JOBS}:
	if [ ! -e $(@:-job=) ]; then \
	  ${MAKE} HPC_MEM=128g $(@:-job=).submit; \
	fi

pivoting-jobs: ${PIVOTING_JOBS}




# en-fi.sample:
# 	opus_read -m 10000 -rd ../../OPUS/corpus -r v2 -d DocHPLT -p raw -af ../../OPUS/corpus/DocHPLT/v2/xml/en-fi.xml.gz -wm moses -s en -t fi > en-fi.sample

# en-fi.tsv.gz:
# 	opus_read -m 10000 -rd ../../OPUS/corpus -r v2 -d DocHPLT -p raw -af ../../OPUS/corpus/DocHPLT/v2/xml/en-fi.xml.gz -wm moses -s en -t fi | gzip -c > $@


${DOCALGFILES}: xml/%.xml.gz: src/%.alignments.gz
	@mkdir -p ${dir $@}
	mv $< $@



## skip tokenization for this corpus

# tokenize-jobs:
# 	mkdir -p log
# 	for l in $(LANGUAGES); do \
# 	  ${MAKE} LANGUAGE=$$l HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
# 	  tokenize-job.submit; \
# 	  rm -f tokenize-job.submit;\
# 	done

# ## tokenize and submit wordalign jobs when all languages are done
# tokenize-job:
# 	${MAKE} annotate_files




include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.tokenize-polyglot




test-tmx: ${CORPUSRELEASE}/xml/en-si.xml.gz
	${MAKE} ${CORPUSRELEASE}/tmx/en-si.tmx.gz
