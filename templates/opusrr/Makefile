# -*-makefile-*-
#
# template for fetching aligned parallel corpora 
# from the OPUS repository server
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



## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all: xml
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index
	${MAKE} publish


## TODO: add some dependency here to update if necessary

xml:
	git clone ssh://${OPUSRR_USER}@${OPUSRR_HOST}/var/lib/letsmt/www-data/.githome/${REPO_NAME}
	cd ${REPO_NAME} && git checkout ${REPO_USER}
	${MAKE} xml/Makefile
	mv ${REPO_NAME}/xml/*-* xml/
	mkdir -p raw
	mv ${REPO_NAME}/xml/* raw/
	find xml -name '*.xml' | xargs gzip -f
	find raw -name '*.xml' | xargs gzip -f
	${MAKE} -C xml create-align-files
	${MAKE} annotate
	rm -fr ${REPO_NAME}


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
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


