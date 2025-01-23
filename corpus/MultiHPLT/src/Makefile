
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}


TMX2OPUS  = $(CURDIR)/../scripts/tmx2opus-btree
# TMX2OPUS  = tmx2opus
# TMX2OPUS = ../scripts/tmx2opus-tc

OPUS_PIVOTING = $(CURDIR)/../scripts/opus-pivoting
# OPUS_PIVOTING = opus-pivoting
# OPUS_PIVOTING = ../scripts/opus-pivoting -t score -n 1


## use the fast local-scratch partition if available
ifdef LOCAL_SCRATCH
  TMPDIR       = ${LOCAL_SCRATCH}
endif


.PHONY: all
all:
	${MAKE} convert
	${MAKE} pivoting

PIVOT = en




## link files sorted by pivot language sentence IDs

PIVOT_LINKFILES = ${addsuffix .alg,${wildcard ${CORPUSXML}/${PIVOT}-*.xml.gz} ${wildcard ${CORPUSXML}/*-${PIVOT}.xml.gz}}

## all new language combinations

PIVOTED_BITEXTS = ${shell for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
			    for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
			      if [[ "$$t" > "$$s" ]]; then \
			         echo "../xml/$$s-$$t.xml.gz"; \
			      fi \
			    done \
	                  done }

.PHONY: pivoting
pivoting: ${PIVOTED_BITEXTS}


.INTERMEDIATE: ${PIVOT_LINKFILES}

${PIVOT_LINKFILES}: %.alg: %
	gzip -cd $< | ../scripts/extract-links.pl -l $(notdir ${<:.xml.gz=}) -c ${PIVOT} | sort -k2,2 -k1,1nr > $@

.PHONY: pivot-linkfiles
pivot-linkfiles: ${PIVOT_LINKFILES}

${PIVOTED_BITEXTS}: ${PIVOT_LINKFILES}
	( s=$(firstword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  t=$(lastword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  mkdir -p ${CORPUSXML}/$$s-$$t; \
	  ../scripts/pivot-links.pl -a \
		`ls ${CORPUSXML}/*$$s*.xml.gz.alg | grep '${PIVOT}'` \
		`ls ${CORPUSXML}/*$$t*.xml.gz.alg | grep '${PIVOT}'` \
		$$s/hplt_${RELEASE}.xml.gz \
		$$t/hplt_${RELEASE}.xml.gz \
	  | gzip -c > ${CORPUSXML}/$$s-$$t/hplt-pivoted-${VERSION}.xml.gz; \
	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )


# .PHONY: convert
# convert: ${CORPUSRAW}

# ${CORPUSRAW}:
# 	mkdir -p ${CORPUSRAW}
# 	( cd ${CORPUSRAW} && \
# 	  find -L ${PWD} -name '*.tmx.gz' |\
# 	  xargs zcat | ${UNICODE_CLEANUP} |\
# 	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o hplt_${RELEASE}.xml.gz )
# 	mkdir -p ${CORPUSXML}
# 	${MAKE} -C .. xml/Makefile
# 	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/
# 	${MAKE} -C ${CORPUSXML} create-align-files
# 	touch ${CORPUSRAW}


.PHONY: convert
convert:
	-ln -s ../../HPLT/src/*.tmx.gz .
	${MAKE} -j1 convert-tmx-files
	mv *.tmx.gz.d/*-* ${CORPUSXML}/
	${MAKE} merge-corpus-files
	${MAKE} -C .. xml/Makefile
	${MAKE} -C ${CORPUSXML} create-align-files


CONVERTED_LANGS    := $(notdir $(wildcard *.tmx.gz.d/*))
CONVERTED_CORPORA  := $(patsubst %,${CORPUSRAW}/%/hplt_${RELEASE}.xml.gz,${CONVERTED_LANGS})

merge-corpus-files: ${CONVERTED_CORPORA}

${CONVERTED_CORPORA}:
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="UTF-8"?>' > $(@:.gz=)
	echo "<text>"                                >> $(@:.gz=)
	ls -rt *.tmx.gz.d/$(patsubst ${CORPUSRAW}/%/,%,$(dir $@))/*.xml.gz \
	| xargs zgrep --no-filename '<s id'          >> $(@:.gz=)
	echo "</text>"                               >> $(@:.gz=)
	gzip -f $(@:.gz=)



TMXFILES      := $(sort $(wildcard *.tmx.gz))
TMXFILES_DONE := $(addsuffix .done,${TMXFILES})

convert-tmx-files: ${TMXFILES_DONE}

${TMXFILES_DONE}: %.done: %
	mkdir -p $<.d
	cd $<.d && zcat ${CURDIR}/$< | ${UNICODE_CLEANUP} \
	| ${TMX2OPUS} -u -d -t ${TMPDIR} -D ${CORPUSSRC}/langdb -o hplt_${RELEASE}.xml.gz
	touch $@




## testing to convert with the tokyo-cabinet DB for 
## makeing unique entries ...

convert-with-tc: ../raw-tc

../raw-tc:
	mkdir -p $@
	( cd $@ && \
	  gzip -cd ${PWD}/*.tmx.gz |\
	  ../scripts/tmx2opus-tc -u -d -o ${FILTER}.xml.gz )








convert-btree-job: 
	${MAKE} HPC_DISK=500 HPC_CORES=1 HPC_MEM=16g HPC_TIME=7-00:00 HPC_QUEUE=longrun convert-with-btree.submit

convert-with-btree: ../raw-btree

../raw-btree:
	mkdir -p $@
	( cd $@ && \
	  find ${PWD} -name '*.tmx.gz' |\
	  xargs zcat | ${UNICODE_CLEANUP} |\
	  ../scripts/tmx2opus-btree -u -d -t ${TMPDIR} -o hplt_${RELEASE}.xml.gz )
	touch $@


