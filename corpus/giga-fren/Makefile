# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

TRGLANGS = fr

## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} fetch
	${MAKE} annotate
	${MAKE} publish
	${MAKE} wordalign


## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_MEM=4g HPC_TIME=48:00 fetch-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
fetch-job:
	${MAKE} fetch
	for l in en ${TRGLANGS}; do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=8 HPC_MEM=4g HPC_TIME=48:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
tokenize-job:
	${MAKE} annotate_files
	if [ -e log/.en.tokenize.done ]; then \
	  if [ -e log/.fr.tokenize.done ]; then \
	    ${MAKE} HPC_CORES=8 HPC_MEM=4g HPC_TIME=72:00 publish-job.submit; \
	  fi; \
	fi

publish-job:
	${MAKE} publish
	${MAKE} wordalign-submit

## standard procedures are specified in the following makefiles
##
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.html .......... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing


include ../Makefile.submit
include ../Makefile.process
# include ../Makefile.release
include ../Makefile.html
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize-simple . simple regex tokenizer
##   Makefile.tokenize ........ tokenization only
##   Makefile.tag ............. tokenization and PoS tagging (if available)
##   Makefile.annotate ........ all annotation in Uplug

# include ../Makefile.tokenize-simple
# include ../Makefile.tokenize-moses
include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


MOSES2OPUS = moses2opus

fetch:
	wget http://www.statmt.org/wmt10/training-giga-fren.tar
	tar -xf training-giga-fren.tar
	mkdir -p raw xml
	( cd raw ; \
	  ${MOSES2OPUS} -s en -t fr  \
		-z -b giga-fren.release2.fixed \
		-p 100000 \
		../giga-fren.release2.fixed.en.gz ../giga-fren.release2.fixed.fr.gz |\
	    gzip -c > ../xml/en-fr.xml.gz; \
	  cd .. )
	rm -f giga-fren.release2.fixed.en.gz
	rm -f giga-fren.release2.fixed.fr.gz
	rm -f training-giga-fren.tar
