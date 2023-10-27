# -*-makefile-*-
#
# template for converting translated plain text files to OPUS
#
# - assumes that there are plain text files in src/
# - assumes that they are sorted into proper subdir's
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
# - depending on the size you may want to run things in steps / parallel
#   (TODO: we need to document how)

include Makefile.def
include ../Makefile.def

# OPUSTOKENIZER = perl -CSD -pe "s/\N{U+200B}//gu" | ${PWD}/scripts/opus-tokenize.py
OPUSTOKENIZER = ${UNICODE_CLEANUP} | ${PWD}/scripts/opus-tokenize.py


## make all:
##
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} align
	${MAKE} publish
#	${MAKE} udparse


create-corpus-files:
	${MAKE} annotate
	${MAKE} align

all-job:
	${MAKE} HPC_CORES=16 HPC_MEM=16g HPC_DISK=500 convert-job.submit

convert-job:
	${MAKE} -C src all-runlocal
	${MAKE} HPC_CORES=16 HPC_MEM=16g HPC_DISK=1500 annotate-job.submit

annotate-job:
	${MAKE} annotate-runlocal
	${MAKE} align-jobs

align-jobs:
	${MAKE} xml/Makefile
	${MAKE} -C xml EMAIL= HPC_CORES=8 HPC_TIME=3-00 sentalign-source-localuplug-jobs
#	${MAKE} -C xml EMAIL= HPC_CORES=8 HPC_TIME=3-00 sentalign-source-jobs

publish-job:
	${MAKE} -C xml cleanup
	${MAKE} HPC_CORES=16 HPC_MEM=16g publish.submit


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


include ../Makefile.tokenize-fast
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
