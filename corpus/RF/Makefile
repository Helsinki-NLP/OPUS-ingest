# -*-makefile-*-

include Makefile.def
include ../Makefile.def

# make all:
#
# - fetch html sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)

all:
	${MAKE} convert
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw

# include som standard OPUS variables/targets

include ../Makefile.process
# include ../Makefile.preprocess
include ../Makefile.annotate
include ../Makefile.udparse
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release

# convert all files for all languages (subdirectories in src/)

convert: preprocess annotate
parse: updarse
