# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} moses
	${MAKE} copy-tmx-files
	${MAKE} publish

more:
	${MAKE} moses
	${MAKE} copy-tmx-files
	${MAKE} publish


copy-tmx-files:
	mkdir -p ${CORPUSRELEASE}/tmx
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ "$$s" < "$$t" ]]; then \
	      f=`ls src/$$s-$$t.*tmx.gz src/*/$$s-$$t.*tmx.gz 2>/dev/null | tail -1`; \
	      if [ "$$f" == "" ]; then \
	        f=`ls src/$$t-$$s.*tmx.gz src/*/$$t-$$s.*tmx.gz 2>/dev/null | tail -1`; \
	      fi; \
	      if [ "$$f" != "" ]; then \
		if [ ! -e ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz ]; then \
		  rsync $$f ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
		  touch ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
		fi \
              fi; \
	    fi \
	  done \
	done


## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 fetch-job.submit


fetch-job:
	${MAKE} -C src fetch
	${MAKE} HPC_CORES=4 HPC_MEM=8g HPC_TIME=72:00 convert-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src convert
	${MAKE} tokenize-jobs

tokenize-jobs:
	for l in $(sort $(notdir $(wildcard ${CORPUSRAW}/??))); do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=8 HPC_MEM=4g HPC_TIME=72:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
tokenize-job:
	${MAKE} annotate_files
	if [ `ls log/.*tok* | wc -l` == ${words ${LANGUAGES}} ]; then \
	  ${MAKE} HPC_CORES=8 HPC_MEM=32g HPC_DISK=2000 HPC_TIME=72:00 publish-job.submit; \
	fi

publish-job:
	${MAKE} moses
	${MAKE} copy-tmx-files
	${MAKE} publish
#	${MAKE} wordalign/Makefile
#	${MAKE} -C wordalign submit-all
#	${MAKE} HPC_CORES=8 HPC_MEM=8g HPC_TIME=72:00 udparse.submit

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

include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-simple
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate

