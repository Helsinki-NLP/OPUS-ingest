
include ../../Makefile.def
include ../Makefile.def

WORKDIR = ${TMPDIR}/OPUS/corpus/${CORPUS}
LANGUAGES = ar en es fr ru zh

RAWCORPORA = ${patsubst %,${CORPUSRAW}/%,${LANGUAGES}}
BITEXTS = ${patsubst %,${CORPUSXML}/%.xml.gz,\
		${notdir ${wildcard ${WORKDIR}/UN${VERSION}-TEI/links/*-*}}}


.PHONY: all
all: ${CORPUSXML} ${RAWCORPORA}


## get all corpus files, compress and move
${RAWCORPORA}: ${CORPUSRAW}/%: ${WORKDIR}/UN${VERSION}-TEI/%
	mkdir -p ${dir $@}
	find $< -name '*.xml' | xargs -P 8 gzip -f
	mv $< $@

## extract tar-ball for each language
${WORKDIR}/UN${VERSION}-TEI/%: UN${VERSION}-TEI.%.tar.gz
	mkdir -p ${dir $@}
	tar -C ${WORKDIR} -xzf $<

## update all link files
${CORPUSXML}: UN${VERSION}-TEI.links.tar.gz
	${MAKE} ${WORKDIR}/UN${VERSION}-TEI/links
	${MAKE} bitexts
	rm -fr ${WORKDIR}/UN${VERSION}-TEI/links

.PHONY: bitexts
bitexts: ${BITEXTS}

## extract link files, change dir names, move readme/disclaimer
${WORKDIR}/UN${VERSION}-TEI/links: UN${VERSION}-TEI.links.tar.gz
	mkdir -p ${WORKDIR}
	tar -C ${WORKDIR} -xzf $<
	-mv -f $@/DISCLAIMER ../LICENSE
	-mv -f $@/README ../
	-mv -f $@/UN${VERSION}.pdf ../
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -d "${WORKDIR}/UN${VERSION}-TEI/links/$${s}_$${t}" ]; then \
		mv "${WORKDIR}/UN${VERSION}-TEI/links/$${s}_$${t}" \
		   "${WORKDIR}/UN${VERSION}-TEI/links/$${s}-$${t}"; \
	    fi \
	  done \
	done

## merge all link files into one big alignment file
${CORPUSXML}/%.xml.gz: ${WORKDIR}/UN${VERSION}-TEI/links/%
	mkdir -p ${dir $@}
	find $< -type f -name '*.lnk' \
	| sort \
	| xargs grep --no-filename 'link' \
	| sed 's/\.xml"/\.xml.gz"/g' \
	| sed 's/"Xml/"/g' >> $@.links; \
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' > $@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >> $@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.links >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip -f $@.tmp; \
	  mv -f $@.tmp.gz $@; \
	fi
	rm -f $@.links

