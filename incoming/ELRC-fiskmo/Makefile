
include ../../corpus/Makefile.submit

LOAD_MODS = module use -a /projappl/nlpl/software/modules/etc/; \
		module load nlpl-opus nlpl-efmaral nlpl-moses;

## handle spaces in strings
s? = $(subst \\ ,?,$1)
?s = $(subst ?,\\ ,$1)

DATASET_IDS      := ${shell cat elrc-metadata.txt | cut -f1 | tr ' ' '_'}
DATASET_FORMATS  := ${shell cat elrc-metadata.txt | cut -f3 | sed 's/^Format: //'}
DATASET_NAMES    := ${shell cat elrc-metadata.txt | cut -f2 | sed 's/ /\\\\ /g'}
DATASET_NAMES    := $(call s?,$(DATASET_NAMES))
DATASET_LICENSES := ${shell cat elrc-metadata.txt | cut -f4 | sed 's/^License: //' | sed 's/ /\\\\ /g'}
DATASET_LICENSES := $(call s?,$(DATASET_LICENSES))
DATASET_LINKS    := ${shell cat elrc-metadata.txt | cut -f5 | sed 's/^Link: //'}

ID = 1

DATASET_ID      := $(shell echo ${word ${ID},${DATASET_IDS}} | sed 's/^[0-9]*\_//')
DATASET_DIR     := ELRC_04.06.20/${word ${ID},${DATASET_IDS}}
DATASET_NAME    := ${word ${ID},${DATASET_NAMES}}
DATASET_FORMAT  := ${word ${ID},${DATASET_FORMATS}}
DATASET_LICENSE := ${word ${ID},${DATASET_LICENSES}}
DATASET_LINK    := ${word ${ID},${DATASET_LINKS}}



PWD         := ${shell pwd}
CORPUSHOME   = ${PWD}/../../corpus
RELEASEHOME  = ${PWD}/../../public_html
TMX_TEMPLATE = ${CORPUSHOME}/template-tmx
TXT_TEMPLATE = ${CORPUSHOME}/template-text
CORPUSDIR    = ${CORPUSHOME}/${DATASET_ID}

all:
	${LOAD_MODS} \
	for i in `seq ${words ${DATASET_IDS}}`; do \
	  ${MAKE} ID=$$i corpus; \
	done
	${MAKE} move-failed

elrc-metadata.txt: ELRC_data_corpora_list_by_Ksenia_4.6.20.txt
	sed 's/\r$$//' < $< | tail -n +4 | tr "\n" "\t" |\
	sed -e 's/\t\t\t*/\n/g' |\
	grep 'TMX' > $@


corpus: ${CORPUSDIR}


SRCHTML = ${DATASET_ID}: $(call ?s,$(DATASET_NAME)) (public data set from <a href="${DATASET_LINK}">https://www.elrc-share.eu</a>)
EXTRAHTML = For more information, please look at <a href="https://www.elrc-share.eu">https://www.elrc-share.eu</a>) and data set with ID ${DATASET_ID}.


${CORPUSDIR}:
	@echo "${DATASET_ID} = ${DATASET_DIR}"
ifeq (${DATASET_FORMAT},TMX)
	cp -R ${TMX_TEMPLATE} $@
endif
ifeq (${DATASET_FORMAT},TXT)
	cp -R ${TXT_TEMPLATE} $@
endif
	cp ${DATASET_DIR}/licence.pdf $@/LICENSE.pdf
	mkdir -p ${RELEASEHOME}/${DATASET_ID}
	cp $@/LICENSE.pdf ${RELEASEHOME}/${DATASET_ID}/
	chmod 644 ${RELEASEHOME}/${DATASET_ID}/*.pdf
	cp ${DATASET_DIR}/src/* $@/src/
	gzip -f $@/src/*.tmx
	sed 	-e 's#LICENSE = #LICENSE = <a href="/${DATASET_ID}/LICENSE.pdf">$(call ?s,$(DATASET_LICENSE))</a>#' \
		-e 's#COPYRIGHT = #COPYRIGHT = <a href="https://www.elrc-share.eu">ELRC</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< $@/Makefile.def > $@/Makefile.def-new
	mv $@/Makefile.def-new $@/Makefile.def
	${MAKE} -C $@ all


move-failed:
	mkdir -p ../../corpus-failed-${shell date "+%Y-%m-%d"}
	for d in ${DATASET_IDS}; do \
	  if [ ! -d ../../corpus/$$d/xml ]; then \
	    echo $$d; \
	    mv -f ../../corpus/$$d ../../corpus-failed-${shell date "+%Y-%m-%d"}/ ; \
	  fi \
	done
