# -*-makefile-*-
#
# Makefile targets for tokenization and tagging
#
#

ifndef LANGUAGE
  LANGUAGE=$(firstword ${LANGUAGES})
endif

RAWDIR   = raw/${LANGUAGE}
XMLFILES = $(subst :,\:,$(patsubst raw/%,xml/%,$(shell find ${RAWDIR}/ -name '*.${XMLEXT}')))


TAG = uplug -f opus/annotate opus/${LANGUAGE}/tag

## OLD: for-loop (cannot be parallelized)
##
# annotate:
# 	for l in ${LANGUAGES}; do \
# 		${MAKE} LANGUAGE=$$l annotate_files; \
# 	done

ANNOTATE_DONE = ${patsubst %,log/.%.annotate.done,${LANGUAGES}}
annotate: ${ANNOTATE_DONE}

${ANNOTATE_DONE}:
	${MAKE} LANGUAGE=${patsubst log/.%.annotate.done,%,$@} annotate_files
	mkdir -p ${dir $@}
	touch $@

annotate_files: ${XMLFILES}

xml/${LANGUAGE}/%: raw/${LANGUAGE}/%
	mkdir -p $(shell dirname $@)
	${TAG} -in "$<" -out "$@"

#	${TAG} -in "$<" | tidy -i -xml -utf8 -wrap 0 | gzip -c > "$@"

clean-xml:
	for l in ${LANGUAGES}; do \
	    if [ -d "xml/$$l" ]; then \
		rm -fr xml/$$l; \
	    fi \
	done
