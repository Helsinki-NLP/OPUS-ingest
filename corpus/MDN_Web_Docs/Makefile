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

## make all:
##
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} corpus-basic
	${MAKE} remove-unlikely-alignments
	${MAKE} publish

.PHONY: job-all
job-all:
	${MAKE} HPC_MEM=8g HPC_CORES=8 HPC_DISK=100 THREADS=8 all.submit


## remove sentence alignments with zero score
## (empty alignments or results of broken sentence alignment runs)
## TODO: need to fix the generic calls to a sentence aligner!

FIXED_ALIGN_FILES = $(patsubst xml/%.xml.gz,log/%.fixed.xml.gz,$(wildcard xml/*.xml.gz))
remove-unlikely-alignments: ${FIXED_ALIGN_FILES}

${FIXED_ALIGN_FILES}: log/%.fixed.xml.gz: xml/%.xml.gz
	mv $< $@
	${ZCAT} $@ | sed -e 's/>/>\n/' | grep -v 'certainty="0"' | grep . | ${GZIP} -c > $<
	touch $@


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
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
