# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

DOWNLOADURL = https://s3.amazonaws.com/web-language-models/paracrawl
TRGLANGS = ${sort de fr es it pt nl pl cs ro fi lv et ru}

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
	if [ `ls log/.*tokenize.done | wc -l` == 14 ]; then \
	  ${MAKE} HPC_CORES=8 HPC_MEM=4g HPC_TIME=72:00 publish-job.submit; \
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


## temporary test with my local opus-tools
MOSES2OPUS = ${HOME}/research/nlpl/opus-tools/scripts/moses2opus

## fetch and convert (simple for-loop - cannot run in parallel)
fetch:
	mkdir -p raw xml
	for l in ${TRGLANGS}; do \
	  s=`echo "en $$l" | tr " " "\n" | sort | head -1`;\
	  t=`echo "en $$l" | tr " " "\n" | sort | tail -1`;\
	  echo "xml/$$s-$$t.xml.gz"; \
	  if [ ! -e "xml/$$s-$$t.xml.gz" ]; then \
	    wget ${DOWNLOADURL}/${VERSION}/paracrawl-${VERSION}.en-$$l.zipporah0-dedup-clean.tgz; \
	    tar -xzf paracrawl-${VERSION}.en-$$l.zipporah0-dedup-clean.tgz;\
	    echo $$s;\
	    echo $$t;\
	    cd raw; \
	    ${MOSES2OPUS} -s $$s -t $$t  \
		-z -b paracrawl-zipporah0-dedup-clean.$$s-$$t \
		-p 100000 \
		../*-clean.$$s ../*-clean.$$t |\
	    gzip -c > ../xml/$$s-$$t.xml.gz; \
	    cd ..; \
	  fi; \
	  rm -f paracrawl-${VERSION}.en-$$l.zipporah0-dedup-clean.*; \
	done




## TODO: if we want to run conversion in parallel:
##       try using multiple targets for sentence alignments

## sort lang IDs in language pairs
## (is there a simpler way to it?)
## this is not used for anything at the moment ...
LANGPAIRS = ${shell for l in ${TRGLANGS}; do \
			echo -n "en $$l" | tr ' ' "\n" | sort | \
			tr "\n" ' ' | sed 's/\(..\) \(..\)/\1-\2/';\
		    done}

## TODO: use these targets to run conversion in parallel?
ALGFILES = ${patsubst %,xml/%.xml.gz,${LANGPAIRS}}
CONVERT_DONE = ${patsubst %,log/%.convert.done,${TRGLANGS}}
