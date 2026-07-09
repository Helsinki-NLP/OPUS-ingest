# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TMX format (sentence aligned plain text) to OPUS
#
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#


include Makefile.def
include ../Makefile.def

WIKIDUMPS = https://dumps.wikimedia.org/other/contenttranslation
DOWNLOADINDEX = ${WIKIDUMPS}/${patsubst v%,%,${VERSION}}
RELEASEDTMX = $(sort ${shell wget -q -O - ${DOWNLOADINDEX} | grep -o 'cx-corpora[^"]*.tmx.gz'})
TMXFILES = ${patsubst %,${PWD}/src/%,${RELEASEDTMX}}
TMXDONE  = ${TMXFILES:.tmx.gz=_done}

## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} download
	${MAKE} convert
	${MAKE} xml/Makefile
	mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files
	${MAKE} annotate
	${MAKE} publish

#	${MAKE} udparse
#	${MAKE} wordalign


print-released-tmx:
	echo "${RELEASEDTMX}"
	echo "${${DOWNLOADINDEX}}"


## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_MEM=16g HPC_TIME=72:00 stage1-job.submit

stage1-job:
	${MAKE} download
	${MAKE} HPC_CORES=1 HPC_TIME=72:00 HPC_DISK=200 stage2-job.submit

stage2-job:
	${MAKE} convert
	${MAKE} xml/Makefile
	mv -f raw/*-* xml/ 
	${MAKE} -C xml create-align-files
	${MAKE} HPC_CORES=8 HPC_MEM=16g HPC_TIME=72:00 stage3-job.submit

## tokenize and publish (multi-threaded)
stage3-job:
	${MAKE} annotate
	${MAKE} publish


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if tmx2opus is not in your PATH
TMX2OPUS = ${PWD}/scripts/tmx2opus

ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: convert
convert: # ${TMXFILES}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find ${PWD}/src -name '*.tmx.gz' |\
	  xargs zcat | python3 ${PWD}/scripts/fix_encoding.py |\
	  ${TMX2OPUS} -a -e -I -u -d -t ${TMPDIR} -o wikimedia-${VERSION}.xml.gz; )

# ${UNICODE_CLEANUP} |\

## OLD: without alignment and keeping empty strings:
#
#	  ${TMX2OPUS} -I -u -d -t ${TMPDIR} -o wikimedia-${VERSION}.xml.gz; )

.PHONY: download
download: ${TMXFILES}
${TMXFILES}:
	mkdir -p ${dir $@}
	wget -q -O $@ ${DOWNLOADINDEX}/${notdir $@}
	gunzip -f $@
	-tidy -xml -utf8 ${@:.gz=} | gzip -c > $@
	rm -f ${@:.gz=}


#	gzip -cd | ${UNICODE_CLEANUP} | gzip -c > $@

#	wget -q -O - ${DOWNLOADINDEX}/${notdir $@} |\
#	gzip -cd | tidy -xml -utf8 | gzip -c > $@
