# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def


corpus:
	${MAKE} -C src all
	${MAKE} convert
	rm -fr data

# make all:
#
# - fetch sources (src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (xml/Makefile)
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} corpus
	${MAKE} web-corpus
	rm -fr data

web-corpus:
	${MAKE} -C xml web-corpus
	${MAKE} html
	${MAKE} cwb-index


real-clean:
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

include ../Makefile.preprocess
include ../Makefile.annotate
include ../Makefile.parse
include ../Makefile.cwb
include ../Makefile.html

# convert all files for all languages (subdirectories in src/)

convert: preprocess annotate


