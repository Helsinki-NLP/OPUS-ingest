
include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.submit


WORKDIR   := ${TMPDIR}/OPUS/${CORPUS}/src
LANGUAGES := $(sort $(notdir $(wildcard ${WORKDIR}/raw/*)))
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

POFILES   := $(shell if [ -e ${WORKDIR} ]; then find ${WORKDIR} -type f -name '*.po'; fi)
POCONVERT := $(addsuffix .done,${POFILES})


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
extract: ${WORKDIR}/tmp
convert: ${POCONVERT}
algfiles: ${ALGFILES}
zipfiles: ${LANGZIPS}


## testing the conversion targets

.PHONY: test-conversion
test-conversion:
	mkdir -p ${WORKDIR}/tmp/tmp.dir/test
	cp nb.po ${WORKDIR}/tmp/tmp.dir/test/
	make POFILES=${WORKDIR}/tmp/tmp.dir/test/nb.po convert
	make CORPUSXML=$(CURDIR)/test/xml algfiles
	make CORPUSRAW=$(CURDIR)/test/raw zipfiles
	make CORPUSXML=$(CURDIR)/test/xml ${CORPUSXML}/nb-en.xml.gz



${TRANSLATION_DUMP}:
	wget -q ${TRANSLATION_DUMPS_URL}/translations-%.tar.gz

${WORKDIR}/tmp: ${TRANSLATION_DUMP}
	mkdir -p $(dir $@)
	rsync ${TRANSLATION_DUMP} ${WORKDIR}/
	tar -C $(dir $@) -xf $<

${POCONVERT}: %.done: %
	@( s=en; \
	  t=$(subst -,_,$(notdir $(<:.po=))); \
	  d=$(dir $(patsubst ${WORKDIR}/tmp/tmp.%/,%.xml,$(dir $<))); \
	  f=$(notdir $(patsubst ${WORKDIR}/tmp/tmp.%/,%.xml,$(dir $<))); \
	  echo "make $$s-$$t/$$d$$f"; \
	  mkdir -p ${WORKDIR}/raw/$$s/$$d; \
	  mkdir -p ${WORKDIR}/raw/$$t/$$d; \
	  mkdir -p ${WORKDIR}/$$s-$$t/$$d; \
	  mkdir -p $@.d/$$s/$$d; \
	  mkdir -p $@.d/$$t/$$d; \
	  cd $@.d; \
	  po2opus -s $$s -t $$t -S $$s/$$d$$f -T $$t/$$d$$f $< \
	  | gzip -c > ${WORKDIR}/$$s-$$t/$$d$$f.gz; \
	  if [ ! -e ${WORKDIR}/raw/$$s/$$d$$f ]; then \
	    echo "mv $$s/$$d/$$f ${WORKDIR}/raw/$$s/$$d$$f"; \
	    mv $$s/$$d/$$f ${WORKDIR}/raw/$$s/$$d$$f; \
	  fi; \
	  if [ `grep '</s>' $$t/$$d$$f | wc -l` -gt 0 ]; then \
	    mv -f $$t/$$d/$$f ${WORKDIR}/raw/$$t/$$d$$f; \
	  fi; \
	  if [ `zgrep 'xtargets' ${WORKDIR}/$$s-$$t/$$d$$f.gz | wc -l` -eq 0 ]; then \
	    rm -f ${WORKDIR}/$$s-$$t/$$d$$f.gz; \
	  fi; )
	@touch $@


${CORPUSRAW}/%.zip: ${WORKDIR}/raw/%
	find $< -empty -delete
	if [ -e $< ]; then \
	  mkdir -p ${CORPUSRAW} ${WORKDIR}/${CORPUS}/raw; \
	  mv $< ${WORKDIR}/${CORPUS}/raw/ ; \
	  cd ${WORKDIR} && zip -rq $@ ${CORPUS}/raw/$(notdir $<); \
	  find ${WORKDIR}/${CORPUS}/raw/$(notdir $<) -delete; \
	fi


## merge all individual sentence alignment files
## swap languages if necessary

swap_langs = $(lastword $(subst -, ,$1))-$(firstword $(subst -, ,$1))

${CORPUSXML}/%.xml.gz:
	mkdir -p $(dir $@)
	rm -f $@.links
	if [ -e ${WORKDIR}/$(notdir $(@:.xml.gz=)) ]; then \
	  find ${WORKDIR}/$(notdir $(@:.xml.gz=)) -type f -name '*.xml.gz' | sort \
	  | xargs zgrep --no-filename 'link' \
	  | sed 's/\.xml\"/\.xml.gz\"/g;' >> $@.links; \
	elif [ -e ${WORKDIR}/$(call swap_langs,$(notdir $(@:.xml.gz=))) ]; then \
	  find ${WORKDIR}/$(call swap_langs,$(notdir $(@:.xml.gz=))) -type f -name '*.xml.gz' | sort \
	  | xargs zgrep --no-filename 'link' \
	  | opus-swap-align \
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
