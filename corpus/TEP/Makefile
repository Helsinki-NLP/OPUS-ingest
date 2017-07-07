
# -*-makefile-*-

include Makefile.def
include ../Makefile.def


all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


do:
	make -C xml tokenize
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


# include som standard OPUS variables/targets

include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.parse
include ../Makefile.html

# convert all files for all languages (subdirectories in src/)
