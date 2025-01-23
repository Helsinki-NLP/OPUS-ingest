
include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.submit


WORKDIR   := ${TMPDIR}/OPUS/${CORPUS}/src
LANGUAGES := $(sort $(subst -, ,$(notdir $(wildcard ${WORKDIR}/${CORPUS}/raw/*))))
LANGZIPS  := $(patsubst %,${CORPUSRAW}/%.zip,${LANGUAGES})
LANGPAIRS := ${shell \
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ "$$s" < "$$t" ]]; then \
	      echo "$$s-$$t"; \
	    fi \
	  done \
	done  }
ALGFILES  := $(patsubst %,${CORPUSXML}/%.xml.gz,${LANGPAIRS})


TRANSLATION_DUMP := $(patsubst v%,translations-%.tar.gz,${VERSION})

POFILEDIRS := $(shell if [ -e ${WORKDIR}/files ]; then find ${WORKDIR}/files -mindepth 2 -type d; fi)
POCONVERT  := $(addsuffix .done,${POFILEDIRS})


.PHONY: all
all: all.done

all.done:
	${MAKE} extract
	${MAKE} convert
	${MAKE} algfiles
	${MAKE} zipfiles
	touch $@


.PHONY: all-jobs
all-jobs:
	if [ ! -e all.done ]; then \
	  ${MAKE} HPC_CORES=32 HPC_DISK=500 HPC_MEM=32g EMAIL= $(@:-jobs=).submit; \
	fi


.PHONY: extract convert algfiles zipfiles 
extract: ${WORKDIR}/files
convert: ${POCONVERT}
algfiles: ${ALGFILES}
zipfiles: ${LANGZIPS}


## testing the conversion targets

.PHONY: test-conversion
test-conversion:
	mkdir -p ${WORKDIR}/files/tmp/tmp.dir/test
	cp *.po ${WORKDIR}/files/tmp/tmp.dir/test/
	make POFILEDIRS=${WORKDIR}/files/tmp/tmp.dir/test convert
	mkdir -p $(CURDIR)/test/xml $(CURDIR)/test/raw
	make CORPUSXML=$(CURDIR)/test/xml algfiles
	make CORPUSRAW=$(CURDIR)/test/raw zipfiles


## download the tarball of localisation files

${TRANSLATION_DUMP}:
	wget -q ${TRANSLATION_DUMPS_URL}/translations-%.tar.gz


## extract all localisation files

${WORKDIR}/files: ${TRANSLATION_DUMP}
	mkdir -p $@
	tar -C $@ -xf $<


## convert all .po files for a specific project dir

PO2OPUS = multipo2opus

${POCONVERT}: %.done: %
	if [ $(words $(wildcard $</*.po)) -gt 0 ]; then \
	  ${PO2OPUS} -d ${WORKDIR}/${CORPUS}/raw \
		     -o $(patsubst ${WORKDIR}/files/tmp/tmp.%,%.xml,$<) \
		     $(wildcard $</*.po); \
	fi
	@touch $@


# zip all raw xml files

${CORPUSRAW}/%.zip: ${WORKDIR}/${CORPUS}/raw/%
	find $< -empty -delete
	if [ -e $< ]; then \
	  cd ${WORKDIR} && zip -rq $@ ${CORPUS}/raw/$(notdir $<); \
	  find ${WORKDIR}/${CORPUS}/raw/$(notdir $<) -delete; \
	fi


## merge all individual sentence alignment files for a specific langpair

${CORPUSXML}/%.xml.gz:
	mkdir -p $(dir $@)
	rm -f $@.links
	if [ -e ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.xml.gz=)) ]; then \
	  find ${WORKDIR}/${CORPUS}/raw/$(notdir $(@:.xml.gz=)) -type f -name '*.xml' | sort \
	  | xargs grep --no-filename 'link' \
	  | sed 's/\.xml\"/\.xml.gz\"/g;' >> $@.links; \
	fi
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >>$@.tmp; \
	  echo '<cesAlign version="1.0">'              >> $@.tmp; \
	  cat $@.links                                 >> $@.tmp; \
	  echo '</cesAlign>'                           >> $@.tmp; \
	  gzip -f $@.tmp; \
	  mv $@.tmp.gz $@; \
	fi
	rm -f $@.links
