# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)))

corpus:
	${MAKE} convert
	${MAKE} annotate
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
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

include ../Makefile.annotate
include ../Makefile.cwb
## include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

# convert all files for all languages (subdirectories in src/)

convert:
	( cd raw; \
	  ../scripts/moses2opus.pl ../src/*.en.gz ../src/*.hr.gz ted_talks )
	-( cd xml; ln -s ../raw/*.xml.gz . )



