

include ../../Makefile.def
include ../Makefile.def

all: ${CORPUSXML}
	${MAKE} cleanup

TXTFILES = ${wildcard */*.txt}
XMLFILES = ${patsubst %.txt,${CORPUSXML}/%.xml.gz,${TXTFILES}}
RAWFILES = ${patsubst %.txt,${CORPUSRAW}/%.xml.gz,${TXTFILES}}


${CORPUSXML}: ${CORPUSRAW}
	${MAKE} xmlfiles

${CORPUSRAW}: .unpacked
	${MAKE} rawfiles

#.unpacked: articles.tar.gz
#	tar -xzf articles.tar.gz \
#	--transform='s#^.*/\([a-z]*\)\_\([^/]*\).txt#\1/\2.txt#'
#	touch $@

.unpacked: articles.tar.gz
	tar -xzf articles.tar.gz \
	--transform='s#^.*/\([^/]*\)\_\([^/]*\).txt#\1/\2.txt#'
	touch $@


.PHONY: cleanup
cleanup:
	rm -fr ?? ??? home


.PHONY: xmlfiles
xmlfiles: ${XMLFILES}

## make sure that the raw files are produced before the tokenized ones
${XMLFILES}: ${CORPUSXML}/%.xml.gz: %.txt ${CORPUSRAW}/%.xml.gz
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	./white-space-tokenizer.pl >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	gzip -f ${@:.gz=}

#	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}


.PHONY: rawfiles
rawfiles: ${RAWFILES}

${RAWFILES}: ${CORPUSRAW}/%.xml.gz: %.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	${MOSESSCRIPTS}/tokenizer/detokenizer.perl -l ${dir $<} -q |\
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	gzip -f ${@:.gz=}
