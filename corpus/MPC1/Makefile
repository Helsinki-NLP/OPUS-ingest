# -*-makefile-*-

include Makefile.def
include ../Makefile.def

# make all:
#
# - fetch sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)

parse:
	    if [ -d "${CORPUSHOME}/xml/sv/" ]; then \
		mkdir -p ${CORPUSHOME}/annotated/sv; \
		cd ${CORPUSHOME}/xml/sv ; \
		gunzip *.gz ; \
		for F in *.xml ; do T=`echo $${F}| sed 's/.xml/_tag.xml/'` ; ${OPUSHOME}/tools/uplug/uplug systems/pre/sv/tagHunPos -in ${CORPUSHOME}/xml/sv/$${F} > ${CORPUSHOME}/annotated/sv/$${T} ; \
		sh ${OPUSHOME}/tools/parser/maltparser/parse_swedish.sh ${CORPUSHOME}/annotated/sv/$${T} ${OPUSHOME}/ ; done \
	    fi

all:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data
	rm -fr xml/data


real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include som standard OPUS variables/targets

include ../Makefile.preprocess
include ../Makefile.annotate
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
include ../Makefile.udparse

# convert all files for all languages (subdirectories in src/)

convert: preprocess annotate

