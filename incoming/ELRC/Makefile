
include ../../corpus/Makefile.submit

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
TEMPLATEDIR = ${CORPUSHOME}/template-tmx
CORPUSDIR   = ${CORPUSHOME}/${DATASET_ID}



all:
	for i in `seq ${words ${DATASET_IDS}}`; do \
	  ${MAKE} ID=$$i corpus; \
	done


corpus: ${CORPUSDIR}

${CORPUSDIR}: ${TEMPLATEDIR}
	cp -R $< $@
	cp ${DATASET_DIR}/*_licence0.pdf $@/LICENSE.pdf
	cp ${DATASET_DIR}/*_VALREP.pdf $@/VALREP.pdf
	cd ${DATASET_DIR}/*_dataset && \
	for f in *.tmx; do cp "$$f" "$@/src/$${f// /_}"; done
	sed 	-e 's#LICENSE = #LICENSE = ${DATASET_LICENSE}#' \
		-e 's#COPYRIGHT = #COPYRIGHT = ELRC#' \
		-e 's#SRCHTML=.*$$#SRCHTML=$(call ?s,$(DATASET_DIR))#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=public data set from https://www.elrc-share.eu#' \
	< ${TEMPLATEDIR}/Makefile.def > $@/Makefile.def
	${MAKE} -C $@ all

