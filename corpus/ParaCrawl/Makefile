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
	${MAKE} fetch
	${MAKE} corpus
	${MAKE} publish

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
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


DOWNLOADURL = https://s3.amazonaws.com/web-language-models/paracrawl
TRGLANGS = ${sort de fr es it pt nl pl cs ro fi lv}
RELEASE = release${VERSION}

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
	    wget ${DOWNLOADURL}/${RELEASE}/paracrawl-${RELEASE}.en-$$l.zipporah0-dedup-clean.tgz; \
	    tar -xzf paracrawl-${RELEASE}.en-$$l.zipporah0-dedup-clean.tgz;\
	    echo $$s;\
	    echo $$t;\
	    cd raw; \
	    ${MOSES2OPUS} -s $$s -t $$t  \
		-x -b paracrawl-zipporah0-dedup-clean.$$s-$$t \
		../*-clean.$$s ../*-clean.$$t |\
	    gzip -c > ../xml/$$s-$$t.xml.gz; \
	    cd ..; \
	  fi; \
	  rm -f paracrawl-${RELEASE}.en-$$l.zipporah0-dedup-clean.*; \
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
