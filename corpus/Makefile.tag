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



# TAG = ${UPLUG} pre/tok

# ifneq ($(strip $(wildcard ${UPLUGHOME}/systems/pre/${LANGUAGE}-tag)),)
#   TAG=${UPLUG} pre/${LANGUAGE}-tag
# endif

TAG = uplug -f opus/annotate opus/${LANGUAGE}/tag


annotate:
	for l in ${LANGUAGES}; do \
		${MAKE} LANGUAGE=$$l annotate_files; \
	done

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
