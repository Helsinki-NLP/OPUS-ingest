# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

TRGLANGS = fr

## make all:
##
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

.PHONY: all
all:
	${MAKE} log/.fetch
	${MAKE} annotate
	${MAKE} publish
	${MAKE} wordalign


## submit a job for fetching and processing all data
.PHONY: all-job
all-job:
	${MAKE} HPC_CORES=1 HPC_MEM=16g HPC_TIME=12:00 fetch-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
.PHONY: fetch-job
fetch-job:
	${MAKE} log/.fetch
	${MAKE} HPC_CORES=1 HPC_MEM=4g HPC_TIME=48:00 convert-job.submit

## a job for converting to opus format
## that will submit tokenization jobs when ready
.PHONY: convert-job
convert-job:
	${MAKE} log/.convert
	for l in en ${TRGLANGS}; do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=8 HPC_MEM=4g HPC_TIME=48:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
.PHONY: tokenize-job
tokenize-job:
	${MAKE} annotate_files
	touch log/.${LANGUAGE}.tokenize.done
	if [ -e log/.en.tokenize.done ]; then \
	  if [ -e log/.fr.tokenize.done ]; then \
	    ${MAKE} HPC_CORES=8 HPC_MEM=4g HPC_TIME=72:00 publish-job.submit; \
	  fi; \
	fi

.PHONY: publish-job
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

## fetch and convert
## - get the tarball
## - cleanup the data by converting to ISO text and back to UTF8
## - convert to OPUS format




log/.fetch:
	mkdir -p ${dir $@} src
	wget http://www.statmt.org/wmt10/training-giga-fren.tar
	tar -xf training-giga-fren.tar
	rm -f training-giga-fren.tar
	zcat giga-fren.release2.fixed.en.gz | \
	iconv -f UTF-8 -t ISO-8859-1//TRANSLIT | \
	iconv -f ISO-8859-1 -t UTF-8 | \
	perl -pe 'tr/\000-\037/ /;$_.="\n";' |\
	gzip -c > src/giga-fren.release2.fixed.en.gz
	zcat giga-fren.release2.fixed.fr.gz | \
	iconv -f UTF-8 -t ISO-8859-1//TRANSLIT | \
	iconv -f ISO-8859-1 -t UTF-8 | \
	perl -pe 'tr/\000-\037/ /;$_.="\n";' |\
	gzip -c > src/giga-fren.release2.fixed.fr.gz
	rm -f giga-fren.release2.fixed.en.gz
	rm -f giga-fren.release2.fixed.fr.gz
	touch $@


log/.convert: log/.fetch
	mkdir -p ${dir $@}
	mkdir -p raw xml
	( cd raw ; \
	  ${MOSES2OPUS} -s en -t fr  \
		-z -b giga-fren.release2.fixed \
		-p 100000 \
		../src/giga-fren.release2.fixed.en.gz \
		../src/giga-fren.release2.fixed.fr.gz |\
	    gzip -c > ../xml/en-fr.xml.gz; \
	  cd .. )
	touch $@
