# -*-makefile-*-
#
# copy and convert the oringally released TEI files
# to fit OPUS data structures


include ../../Makefile.def
include ../Makefile.def

WORKDIR = ${TMPDIR}/OPUS/corpus/${CORPUS}
LANGUAGES = ar en es fr ru zh

RAWCORPORA = ${patsubst %,${CORPUSRAW}/%,${LANGUAGES}}
BITEXTS = ${patsubst %,${CORPUSXML}/%.xml.gz,\
		${notdir ${wildcard ${WORKDIR}/UN${VERSION}-TEI/links/*-*}}}


## make all data and swap sentence alignment if necessary
.PHONY: all
all: ${CORPUSXML} ${RAWCORPORA}
	@for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -e "${CORPUSXML}/$${s}-$${t}.xml.gz" ]; then \
	      if [[ "$$s" > "$$t" ]]; then \
		echo "swap alignments for $$s and $$t"; \
		zcat ${CORPUSXML}/$${s}-$${t}.xml.gz |\
		opus-swap-align |\
		gzip -c > ${CORPUSXML}/$${t}-$${s}.xml.gz; \
		rm -f ${CORPUSXML}/$${s}-$${t}.xml.gz; \
	      fi \
	    fi \
	  done \
	done


## get all corpus files, compress and move
${CORPUSRAW}/%: ${WORKDIR}/UN${VERSION}-TEI/%
	mkdir -p ${dir $@}
	find $< -name '*.xml' | xargs -P 8 gzip -f
	if [ -d $@ ]; then mv $@ $@.${shell date +%F}; fi
	mv $< $@
	touch $@

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
.PHONY: unpack-links
unpack-links: ${WORKDIR}/UN${VERSION}-TEI/links
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
## strange: fromDoc and toDoc seem to be wrong ....
${CORPUSXML}/%.xml.gz: ${WORKDIR}/UN${VERSION}-TEI/links/%
	mkdir -p ${dir $@}
	find $< -type f -name '*.lnk' \
	| sort \
	| xargs grep --no-filename 'link' \
	| sed 's/\.xml"/\.xml.gz"/g' \
	| sed 's/fromDoc/toNewDoc/' \
	| sed 's/toDoc/fromNewDoc/' \
	| sed 's/NewDoc/Doc/g' \
	| sed 's#"Xml/#"#g' 
	| ../scripts/fix-doclinks.pl >> $@.links; \
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




###### old targets for fixing and swapping bitexts

swap-align:
	@for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -e "${CORPUSXML}/$${s}-$${t}.xml.gz" ]; then \
	      if [[ "$$s" > "$$t" ]]; then \
		echo "swap alignments for $$s and $$t"; \
		zcat ${CORPUSXML}/$${s}-$${t}.xml.gz |\
		opus-swap-align |\
		gzip -c > ${CORPUSXML}/$${t}-$${s}.xml.gz; \
		rm -f ${CORPUSXML}/$${s}-$${t}.xml.gz; \
	      fi \
	    fi \
	  done \
	done


fix-align:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -e "${CORPUSXML}/$${s}-$${t}.xml.gz" ]; then \
		echo "fix $${s}-$${t}"; \
		zcat ${CORPUSXML}/$${s}-$${t}.xml.gz \
		| sed 's/fromDoc/toNewDoc/' \
		| sed 's/toDoc/fromNewDoc/' \
		| sed 's/NewDoc/Doc/g' \
		| gzip -c > ${CORPUSXML}/$${s}-$${t}.tmp.gz; \
		mv -f ${CORPUSXML}/$${s}-$${t}.tmp.gz ${CORPUSXML}/$${s}-$${t}.xml.gz; \
	    fi \
	  done \
	done

fix-doclinks:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -e "${CORPUSXML}/$${s}-$${t}.xml.gz" ]; then \
		echo "fix $${s}-$${t}"; \
		zcat ${CORPUSXML}/$${s}-$${t}.xml.gz \
		| ../scripts/fix-doclinks.pl \
		| gzip -c > ${CORPUSXML}/$${s}-$${t}.tmp.gz; \
		mv -f ${CORPUSXML}/$${s}-$${t}.tmp.gz ${CORPUSXML}/$${s}-$${t}.xml.gz; \
	    fi \
	  done \
	done
