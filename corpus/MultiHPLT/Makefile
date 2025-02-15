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
	${MAKE} publish

#	mkdir -p english/raw
#	mv ${CORPUSRAW}/*en* english/raw/


## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_DISK=1000 HPC_MEM=16g HPC_TIME=3-00:00 convert-job.submit
#	${MAKE} HPC_CORES=1 HPC_DISK=2000 HPC_MEM=16g HPC_TIME=14-00:00 HPC_QUEUE=longrun convert-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src convert
	${MAKE} HPC_CORES=16 HPC_MEM=32g HPC_DISK=100 HPC_TIME=3-00:00 pivoting-job.submit
#	${MAKE} HPC_CORES=1 HPC_MEM=256g HPC_DISK=100 HPC_TIME=3-00:00 pivoting-job.submit

pivoting-job:
	${MAKE} tokenize-jobs
	${MAKE} -C src pivoting
	${MAKE} delete-empty-bitexts
	if [ `ls log/.*tok* | wc -l` == ${words ${LANGUAGES}} ]; then \
	  ${MAKE} HPC_CORES=8 THREADS=4 HPC_MEM=128g HPC_TIME=72:00 HPC_DISK=500 publish.submit; \
	fi


ttt:
	${OPUSTOOLS}/info2yaml.pl -b ${OPUSRELEASE}/${CORPUS}
#	${MAKE} ${OPUSRELEASE}/${CORPUS}/info.txt

finish-import:
	${MAKE} MAKEARGS="LANGUAGE=en" LANGUAGE=en tokenize-job
	${MAKE} publish
	${MAKE} release

#	mkdir -p english/raw english/xml
#	-mv ${CORPUSRAW}/*en* english/raw/
#	-mv ${CORPUSXML}/en-* english/xml/
#	-mv ${CORPUSXML}/*-en english/xml/
#	-mv ${CORPUSXML}/*-en.* english/xml/



only-pivoting-job:
	${MAKE} -C src pivoting
	${MAKE} delete-empty-bitexts
#	mkdir -p english/raw english/xml
#	-mv ${CORPUSRAW}/*en* english/raw/
#	-mv ${CORPUSXML}/en-* english/xml/
#	-mv ${CORPUSXML}/*-en english/xml/
#	-mv ${CORPUSXML}/*-en.* english/xml/

#	for l in $(filter-out en,$(sort $(notdir $(wildcard ${CORPUSRAW}/?? ${CORPUSRAW}/??_*)))); do

tokenize-jobs:
	mkdir -p log
	for l in $(sort $(notdir $(wildcard ${CORPUSRAW}/?? ${CORPUSRAW}/??_*))); do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
tokenize-job:
	${MAKE} annotate_files


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
##   Makefile.tokenize-moses .. moses tokenizer
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

eng-package: ${CORPUSRELEASE}/xml/en.zip
