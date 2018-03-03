# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
		     $(notdir $(wildcard ${CORPUSRAW}/???)) \
		     $(notdir $(wildcard ${CORPUSRAW}/????)))

corpus:
	${MAKE} convert
	${MAKE} annotate
	${MAKE} -C xml corpus
	rm -fr data

ru:
	make LANGUAGE=ru annotate_files
	make -C xml corpus
	make web-corpus
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


# include some standard OPUS targets for processing/annotating data

include ../Makefile.annotate
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

# convert all files for all languages (subdirectories in src/)

convert:
	mkdir -p raw
	gunzip src/*.tmx.gz
	( cd raw; letsmt_convert -i tmx -o xces ../src/*.tmx ${VERSION}.xml )
	perl -p -i -e 's/\.xml\"/\.xml.gz\"/g' raw/*=*/*.xml
	gzip raw/*/*.xml
	-( cd xml; ln -s ../raw/*-* . )
	gzip -f src/*.tmx
