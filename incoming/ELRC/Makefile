
include ../../corpus/Makefile.submit

LOAD_MODS = module use -a /projappl/nlpl/software/modules/etc/; \
		module load nlpl-opus nlpl-efmaral nlpl-moses;

# https://www.cmcrossroads.com/article/gnu-make-meets-file-names-spaces-them

s? = $(subst \\ ,?,$1)
?s = $(subst ?,\\ ,$1)

DIRS := $(shell find . -maxdepth 1 -name 'ELRC_*' | sed 's/ /\\\\ /g')
DIRS := $(call s?,$(DIRS))


DATASET_IDS      := ${shell cat elrc-metadata.txt | cut -f1 -d ' '}
DATASET_LICENSES := ${shell cat elrc-metadata.txt | cut -f2 -d ' '}
DATASET_DIRS     := ${shell cat elrc-metadata.txt | cut -f3- -d ' ' | sed 's/ /\\\\ /g'}
DATASET_DIRS     := $(call s?,$(DATASET_DIRS))

ID = 1

DATASET_ID      := ${word ${ID},${DATASET_IDS}}
DATASET_LICENSE := ${word ${ID},${DATASET_LICENSES}}
DATASET_DIR     := ${word ${ID},${DATASET_DIRS}}

PWD        := ${shell pwd}
CORPUSHOME  = ${PWD}/../../corpus
RELEASEHOME = ${PWD}/../../public_html
TEMPLATEDIR = ${CORPUSHOME}/template-tmx
CORPUSDIR   = ${CORPUSHOME}/${DATASET_ID}


all:
	${LOAD_MODS} \
	for i in `seq ${words ${DATASET_IDS}}`; do \
	  ${MAKE} ID=$$i corpus; \
	done
	${MAKE} move-failed

print-ids:
	@echo "${DATASET_IDS}" | tr " " "\n" | grep -n .

print-dataset:
	@echo ${DATASET_ID}

missing:
	${LOAD_MODS} \
	for d in ${DATASET_IDS}; do \
	  ${MAKE} -C ../../corpus/$$d all; \
	done

missing-xml:
	${LOAD_MODS} \
	for d in ${DATASET_IDS}; do \
	  if [ ! -d ../../corpus/$$d/xml ]; then \
	    ${MAKE} -C ../../corpus/$$d all; \
	  fi \
	done


deffiles:
	for i in `seq ${words ${DATASET_IDS}}`; do \
	  ${MAKE} ID=$$i deffile; \
	done

html:
	${LOAD_MODS} \
	for d in ${DATASET_IDS}; do \
	  ${MAKE} -C ../../corpus/$$d alg_samples corpus_samples html; \
	done


move-failed:
	mkdir -p ../../corpus-failed-${shell date "+%Y-%m-%d"}
	for d in ${DATASET_IDS}; do \
	  if [ ! -d ../../corpus/$$d/xml ]; then \
	    echo $$d; \
	    mv -f ../../corpus/$$d ../../corpus-failed-${shell date "+%Y-%m-%d"}/ ; \
	  fi \
	done


${DATASET_IDS}:
	${MAKE} ID=$@ corpus
	touch $@

corpus: ${CORPUSDIR}


SRCHTML = ${DATASET_ID}: $(call ?s,$(DATASET_DIR)) (public data set from <a href="https://www.elrc-share.eu">https://www.elrc-share.eu</a>)
EXTRAHTML = For more information, please look at <a href="https://www.elrc-share.eu">https://www.elrc-share.eu</a>) and data set with ID ${DATASET_ID}. Data Quality Indicators can be seen in this <a href="/${DATASET_ID}/VALREP.pdf">document</a>.

${CORPUSDIR}:
	@echo "${DATASET_DIR}"
	cp -R ${TEMPLATEDIR} $@
	cp "${wildcard ${DATASET_DIR}/*_licence0.pdf}" $@/LICENSE.pdf
	cp "${wildcard ${DATASET_DIR}/*_VALREP.pdf}" $@/VALREP.pdf
	mkdir -p ${RELEASEHOME}/${DATASET_ID}
	cp $@/LICENSE.pdf ${RELEASEHOME}/${DATASET_ID}/
	cp $@/VALREP.pdf ${RELEASEHOME}/${DATASET_ID}/
	chmod 644 ${RELEASEHOME}/${DATASET_ID}/*.pdf
	cd "${wildcard ${DATASET_DIR}/*_dataset}" && \
	for f in `find . -name '*.tmx'`; do \
	  cp "$$f" > "$@/src/`basename $${f//[^a-zA-Z0-9\-\/\.]/_}`"; \
	done
	gzip -f $@/src/*.tmx
	sed 	-e 's#LICENSE = #LICENSE = <a href="/${DATASET_ID}/LICENSE.pdf">${DATASET_LICENSE}</a>#' \
		-e 's#COPYRIGHT = #COPYRIGHT = <a href="https://www.elrc-share.eu">ELRC</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< ${TEMPLATEDIR}/Makefile.def > $@/Makefile.def
	${MAKE} -C $@ all

#	  cp "$$f" "$@/src/`basename $${f//[^a-zA-Z0-9\-\/\.]/_}`"; \


deffile: ${CORPUSDIR}/Makefile.def

## make the def file once again
${CORPUSDIR}/Makefile.def: Makefile
	@echo "${DATASET_DIR}"
	mkdir -p ${dir $@}
	cp "${wildcard ${DATASET_DIR}/*_licence0.pdf}" ${dir $@}/LICENSE.pdf
	cp "${wildcard ${DATASET_DIR}/*_VALREP.pdf}" ${dir $@}/VALREP.pdf
	mkdir -p ${RELEASEHOME}/${DATASET_ID}
	cp ${dir $@}/LICENSE.pdf ${RELEASEHOME}/${DATASET_ID}/
	cp ${dir $@}/VALREP.pdf ${RELEASEHOME}/${DATASET_ID}/
	chmod 644 ${RELEASEHOME}/${DATASET_ID}/*.pdf
	sed 	-e 's#LICENSE = #LICENSE = <a href="/${DATASET_ID}/LICENSE.pdf">${DATASET_LICENSE}</a>#' \
		-e 's#COPYRIGHT = #COPYRIGHT = <a href="https://www.elrc-share.eu">ELRC</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< ${TEMPLATEDIR}/Makefile.def > ${dir $@}/Makefile.def




## OLD: expected TMX files in dataset-dir
## NOW: can also include subdir's

# ${CORPUSDIR}: ${TEMPLATEDIR}
# 	cp -R $< $@
# 	cp "${wildcard ${DATASET_DIR}/*_licence0.pdf}" $@/LICENSE.pdf
# 	cp "${wildcard ${DATASET_DIR}/*_VALREP.pdf}" $@/VALREP.pdf
# 	cd "${wildcard ${DATASET_DIR}/*_dataset}" && \
# 	for f in *.tmx; do cp "$$f" "$@/src/$${f// /_}"; done
# 	sed 	-e 's#LICENSE = #LICENSE = ${DATASET_LICENSE}#' \
# 		-e 's#COPYRIGHT = #COPYRIGHT = ELRC#' \
# 		-e 's#SRCHTML=.*$$#SRCHTML=$(call ?s,$(DATASET_DIR))#' \
# 		-e 's#EXTRAHTML=.*$$#EXTRAHTML=public data set from https://www.elrc-share.eu#' \
# 	< ${TEMPLATEDIR}/Makefile.def > $@/Makefile.def
# 	${MAKE} -C $@ all


elrc-website: ${RELEASEHOME}/ELRC.php

${RELEASEHOME}/ELRC.php:
	@echo '<?php include("count.php"); ?>' > $@
	@echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">' >> $@
	@echo '<html><head><title>ELRC</title>' >> $@
	@echo '  <link rev="made" href="mailto:Joerg%20Tiedemann">' >> $@
	@echo '  <meta name="robots" content="NOFOLLOW">' >> $@
	@echo '  <link rel="stylesheet" type="text/css" href="index.css">' >> $@
	@echo '</head>' >> $@
	@echo '<body>' >> $@
	@echo '  <div class="header">' >> $@
	@echo '    <?php include("header.php"); ?>' >> $@
	@echo '  </div><h1>ELRC public data sets</h1>' >> $@
	@echo '  <table>' >> $@
	@for i in `seq ${words ${DATASET_IDS}}`; do \
	  if [ -e ${RELEASEHOME}/`echo "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//"`.php ]; then \
	  echo '    <tr>' >> $@; \
	  echo "      <td>$$i</td>" >> $@; \
	  echo -n '      <td><a href="' >> $@; \
	  echo -n "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo -n '.php">' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo -n "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo '</a></td>' >> $@; \
	  echo -n '      <td>' >> $@; \
	  echo -n "${DATASET_DIRS}" | cut -f$$i -d ' ' | tr "\n\?" '  ' | sed "s/ $$//" >> $@; \
	  echo '</td>' >> $@; \
	  echo -n '      <td>' >> $@; \
	  echo -n "${DATASET_LICENSES}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo '</td>' >> $@; \
	  echo '    </tr>' >> $@; \
	  fi \
	done
	@echo '  </table>' >> $@
	@echo '</body>' >> $@
	@echo '</html>' >> $@
	@chmod 644 $@
