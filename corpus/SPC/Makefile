# -*-makefile-*-

include Makefile.def
include ../Makefile.def

# make all:
#
# - fetch html sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)


all:
	${MAKE} -C src all
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

include ../Makefile.preprocess
include ../Makefile.annotate
include ../Makefile.parse
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

convert_afen: raw/af/20.xml.gz raw/en/20.xml.gz

raw/en/20.xml.gz raw/af/20.xml.gz: raw/%/20.xml.gz: src/%/20.txt.gz
	gzip -cd $< > $<.tmp
	letsmt_convert -i text -o xml $<.tmp $@.tmp
	gzip -c < $@.tmp > $@
	rm $<.tmp $@.tmp

# convert all files for all languages (subdirectories in src/)

convert: convert_afen preprocess annotate


