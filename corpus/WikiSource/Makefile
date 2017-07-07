# -*-makefile-*-

include Makefile.def
include ../Makefile.def

# make all:
#
# - fetch html sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)

HUNPOSLANGS = \
	cs \
	da \
	de \
	en \
	pt \
	ru \
	sl \
	sv \
	tr

SVMTOOLLANGS = \
	ca \
	es

MELTLANGS = \
	fr



parse:
### for all languages using hunpos and malt, the procedure is the same
	for L in ${HUNPOSLANGS}; do \
	    if [ -d "${CORPUSHOME}/xml/$${L}/" ]; then \
		if [ ! -e ${CORPUSHOME}/annotated/$${L}/ ]; then \
			mkdir -p ${CORPUSHOME}/annotated/$${L}; \
			cd ${CORPUSHOME}/xml/$${L} ; \
			gunzip -r * ; \
			for F in `find . -name '*.xml'` ; do F=`echo $${F}|sed 's/^\.\///'` ; T=`echo $${F}| sed 's/.xml/_tag.xml/'` ; D=`echo $${F}| sed 's/^[^\/]*$$//' | sed 's/^\(.*\)\/[^\/]*$$/\1/'` ; mkdir -p ${CORPUSHOME}/annotated/$${L}/$${D} ; ${OPUSHOME}/tools/uplug/uplug systems/pre/$${L}/tagHunPos -in ${CORPUSHOME}/xml/$${L}/$${F} > ${CORPUSHOME}/annotated/$${L}/$${T} ; gzip $${F} ; \
			mv ${CORPUSHOME}/annotated/$${L}/$${T} ${CORPUSHOME}/annotated/$${L}/$${F} ; \
			sh ${OPUSHOME}/tools/parser/maltparser/parse_$${L}.sh ${CORPUSHOME}/annotated/$${L}/$${F} ${OPUSHOME}/ ; gzip ${CORPUSHOME}/annotated/$${L}/$${F} ; done \
		fi \
	    fi \
	done
### French uses MElt instead of hunpos
	for L in ${MELTLANGS}; do \
	    if [ -d "${CORPUSHOME}/xml/$${L}/" ]; then \
		if [ ! -e ${CORPUSHOME}/annotated/$${L}/ ]; then \
			mkdir -p ${CORPUSHOME}/annotated/$${L}; \
			cd ${CORPUSHOME}/xml/$${L} ; \
			gunzip -r * ; \
			for F in `find . -name '*.xml'` ; do F=`echo $${F}|sed 's/^\.\///'` ; T=`echo $${F}| sed 's/.xml/_tag.xml/'` ; D=`echo $${F}| sed 's/^[^\/]*$$//' | sed 's/^\(.*\)\/[^\/]*$$/\1/'` ; mkdir -p ${CORPUSHOME}/annotated/$${L}/$${D} ; ${OPUSHOME}/tools/uplug/uplug systems/pre/$${L}/tagMElt -in ${CORPUSHOME}/xml/$${L}/$${F} > ${CORPUSHOME}/annotated/$${L}/$${T} ; gzip $${F} ; \
			mv ${CORPUSHOME}/annotated/$${L}/$${T} ${CORPUSHOME}/annotated/$${L}/$${F} ; \
			sh ${OPUSHOME}/tools/parser/maltparser/parse_$${L}.sh ${CORPUSHOME}/annotated/$${L}/$${F} ${OPUSHOME}/ ; gzip ${CORPUSHOME}/annotated/$${L}/$${F} ; done \
		fi \
	    fi \
	done
### Spanish and Catalan uses svmtool instead of hunpos
	for L in ${SVMTOOLLANGS}; do \
	    if [ -d "${CORPUSHOME}/xml/$${L}/" ]; then \
		if [ ! -e ${CORPUSHOME}/annotated/$${L}/ ]; then \
			mkdir -p ${CORPUSHOME}/annotated/$${L}; \
			cd ${CORPUSHOME}/xml/$${L} ; \
			gunzip -r * ; \
			for F in `find . -name '*.xml'` ; do F=`echo $${F}|sed 's/^\.\///'` ; T=`echo $${F}| sed 's/.xml/_tag.xml/'` ; D=`echo $${F}| sed 's/^[^\/]*$$//' | sed 's/^\(.*\)\/[^\/]*$$/\1/'` ; mkdir -p ${CORPUSHOME}/annotated/$${L}/$${D} ; ${OPUSHOME}/tools/uplug/uplug systems/pre/$${L}/tagSvmTool -in ${CORPUSHOME}/xml/$${L}/$${F} > ${CORPUSHOME}/annotated/$${L}/$${T} ; gzip $${F} ; \
			mv ${CORPUSHOME}/annotated/$${L}/$${T} ${CORPUSHOME}/annotated/$${L}/$${F} ; \
			sh ${OPUSHOME}/tools/parser/maltparser/parse_$${L}.sh ${CORPUSHOME}/annotated/$${L}/$${F} ${OPUSHOME}/ ; gzip ${CORPUSHOME}/annotated/$${L}/$${F} ; done \
		fi \
	    fi \
	done



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
include ../Makefile.cwb
include ../Makefile.html

# convert all files for all languages (subdirectories in src/)

convert: preprocess annotate


