# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#



include Makefile.def
include ../Makefile.def


LANGUAGES := $(sort $(subst -, ,$(patsubst src/%.bitextf.tsv.gz,%,$(wildcard src/*.bitextf.tsv.gz))))
CES       := $(patsubst src/%.bitextf.tsv.gz,${CORPUSXML}/%.xml.gz,$(wildcard src/*.bitextf.tsv.gz))


# OPUSTOKENIZER = perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' | \
# 		${OPUSTOOLS}/opus-tokenize.py


## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish


### submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=2 HPC_MEM=8g fetch-job.submit

## a job for fetching all files
## that will submit a conversion job when ready
fetch-job:
	${MAKE} -C src fetch-nllb fetch-ccmatrix
	${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_TIME=3-00:00 HPC_MEM=16g moses-tmx-job.submit
	${MAKE} HPC_CORES=16 HPC_DISK=1000 HPC_MEM=64g HPC_TIME=3-00:00 convert-job.submit
#	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=8g HPC_TIME=3-00:00 convert-job.submit
#	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=16g HPC_TIME=7-00:00 HPC_QUEUE=longrun convert-job.submit

## a job for converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src convert-nllb
	${MAKE} -C src txtids
	${MAKE} -C src bitexts
	${MAKE} -C src cleanup
	${MAKE} tokenize-jobs

tokenize-jobs:
	for l in $(LANGUAGES); do \
	  if [ -d raw/$$l ]; then \
	    if [ ! -e log/.$$l.tokenize.done ]; then \
	      ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
	      tokenize-job.submit; \
	      rm -f tokenize-job.submit;\
	    fi \
	  fi \
	done

NON_BIG_LANGUAGES = $(filter-out en es fr,${LANGUAGES})
NON_EN_LANGUAGES = $(filter-out en,${LANGUAGES})

non-big-mono-job:
	${MAKE} HPC_CORES=8 HPC_DISK=1000 HPC_MEM=16g HPC_TIME=3-00:00 non-big-mono.submit

non-en-mono-job:
	${MAKE} HPC_CORES=8 HPC_DISK=1000 HPC_MEM=16g HPC_TIME=3-00:00 non-en-mono.submit

non-big-mono:
	${MAKE} LANGUAGES="${NON_BIG_LANGUAGES}" mono_tok lang_info freq_counts

non-en-mono:
	${MAKE} LANGUAGES="${NON_EN_LANGUAGES}" mono_tok lang_info freq_counts

en-mono:
	${MAKE} LANGUAGES="en" mono_tok lang_info freq_counts


NON_EN_NLLB_XML_FILES := $(patsubst %.xml.gz,%.counts.gz,\
		$(filter-out ${CORPUSXML}/en/%,$(wildcard ${CORPUSXML}/*/*.xml.gz)))

non-en-wordcounts: ${NON_EN_NLLB_XML_FILES}



## tokenize and submit wordalign jobs when all languages are done
tokenize-job: 
	${MAKE} annotate_files
	if [ `ls log/.*tok* | wc -l` == ${words ${LANGUAGES}} ]; then \
	  ${MAKE} HPC_CORES=8 HPC_MEM=32g HPC_TIME=72:00 HPC_DISK=3000 publish-job.submit; \
	fi


moses-tmx-job: moses tmx
	${MAKE} HPC_CORES=8 HPC_DISK=500 txt_info.submit
	${MAKE} HPC_CORES=8 tmx_info.submit

info-file-job:
	${MAKE} HPC_MODULES="parallel git" THREADS=4 HPC_CORES=4 HPC_MEM=128g HPC_TIME=3-00:00 ces_info.submit

publish-job:
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish



SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))

sample-files: ${SAMPLEFILES}


## standard procedures are specified in the following makefiles
##
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.html .......... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing


include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize-simple . simple regex tokenizer
##   Makefile.tokenize ........ tokenization only
##   Makefile.tag ............. tokenization and PoS tagging (if available)
##   Makefile.annotate ........ all annotation in Uplug

include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-simple
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate







# ## use a different tool
# OPUS2MOSES = opus2bitext



# ## overwrite recipe for sample files
# $(ALG_SAMPLES): ${CORPUSPUB}/%_sample.html: ${CORPUSRELEASE}/tmx/%.tmx.gz
# 	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"' >$@
# 	echo '"http://www.w3.org/TR/REC-html40/loose.dtd">' >> $@
# 	echo '<html>' >> $@
# 	echo '<head>' >> $@
# 	echo '<title>Untitled Document</title>' >> $@
# 	echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">' >> $@
# 	echo '</head>' >> $@
# 	echo '<body>' >> $@
# 	echo '<p>' >> $@
# 	zgrep '</tuv>' $< |\
# 	sed 's/^.*<seg>//;s#</seg></tuv>#<br/>#' |\
# 	head -100 |\
# 	sed ': loop; n; a <hr/>' >> $@
# 	echo '</body></html/>' >> $@
# 	chmod 644 $@

# overwrite recipe for creating moses packages
# --> don't read XML files but use the provided TSV files
$(MOSES):
	@${MKDIR} ${dir $@}
	( S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $@)))));\
	  T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $@)))));\
	  BASE=${CORPUS}.$(patsubst %.txt.zip,%,$(notdir $@));\
	  if [ "$$S" == "$$T" ]; then S=$${S}1;T=$${T}2; fi; \
	  mkdir -p ${LOCALTMP}; \
	  zcat src/$(patsubst %.txt.zip,%.bitextf.tsv.gz,$(notdir $@)) | \
	  tee >(cut -f2 > ${LOCALTMP}/$$BASE.$$S) >(cut -f3 > ${LOCALTMP}/$$BASE.$$T) |\
	  cut -f1 > ${LOCALTMP}/$$BASE.scores; \
	  rm -f $@; \
	  ${MKDIR} ${TMPDIR}/$$BASE; \
	  ${MAKE} PACKAGE="${CORPUS}.$$S-$$T in Moses format" ${TMPDIR}/$$BASE/README; \
	  ${MAKE} ${TMPDIR}/$$BASE/LICENSE; \
	  zip -j ${LOCALTMP}/${notdir $@} ${TMPDIR}/$$BASE/README ${TMPDIR}/$$BASE/LICENSE \
		 ${LOCALTMP}/$$BASE.$$S ${LOCALTMP}/$$BASE.$$T ${LOCALTMP}/$$BASE.scores; \
	  mv -f ${LOCALTMP}/${notdir $@} $@; \
	  rm -f ${LOCALTMP}/$$BASE.$$S ${LOCALTMP}/$$BASE.$$T ${LOCALTMP}/$$BASE.scores;\
	  rm -f ${TMPDIR}/$$BASE/README ${TMPDIR}/$$BASE/LICENSE;\
	  rmdir ${TMPDIR}/$$BASE; )
	sleep 1
	${MKDIR} ${dir ${PACKAGES}}
	echo "$@" | sed "s#${OPUSRELEASE}/##" >> ${PACKAGES}
	chmod 644 $@


test-tmx: $(firstword $(TMX))

## custom recipe for converting into TMX format: 
##    don't sort/uniq (already done in plain text format)!
$(TMX): ${CORPUSRELEASE}/tmx/%.tmx.gz: ${CORPUSRELEASE}/moses/%.txt.zip
	@${MKDIR} ${dir $@}
	-( mkdir -p ${LOCALTMP}/tmx; \
	   cd ${LOCALTMP}/tmx; \
	   unzip $< -x README INFO LICENSE; \
	   S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	   T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	   BASE=${CORPUS}.$(patsubst %.txt.zip,%,$(notdir $<));\
	   SEXT=$$S; TEXT=$$T; \
	   if [ "$$SEXT" == "$$TEXT" ]; then SEXT=$${SEXT}1;TEXT=$${TEXT}2; fi; \
	   paste $$BASE.$$SEXT $$BASE.$$TEXT |\
	   $(TAB2TMX) -s $$S -t $$T |\
	   ${GZIP} -c > $@; \
	   rm -f $$BASE.$$SEXT $$BASE.$$TEXT $$BASE.ids $$BASE.xml; )
	${MKDIR} ${dir ${PACKAGES}}
	echo "$@" | sed "s#${OPUSRELEASE}/##" >> ${PACKAGES}
	chmod 644 $@

