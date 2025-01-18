# -*-makefile-*-
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
all:
	${MAKE} publish


ttt:
	make ${CORPUSRELEASE}/mono/aa.txt.gz
#	make ${CORPUSRELEASE}/raw/aa.zip
#	make ${CORPUSRELEASE}/moses/aa-en.txt.zip
#	make ${CORPUSRELEASE}/tmx/aa-en.tmx.gz


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb


## select one of the following to set the annotation level in xml/

include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


