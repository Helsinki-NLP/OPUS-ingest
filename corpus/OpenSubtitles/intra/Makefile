# -*-makefile-*-
#


include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


LANGUAGES  := $(sort $(patsubst %.zip,%,$(notdir $(wildcard ${CORPUSRAW}/*.zip))))
LANGPAIRS  := $(foreach L,${LANGUAGES},$L-$L)
INTRAFILES := $(addsuffix .xml.gz,${LANGPAIRS})

LANGUAGE  ?= af
LANGPAIR  := ${LANGUAGE}-${LANGUAGE}
WORKDIR   := ${TMPDIR}/OPUS/${CORPUS}/intra

MOVIES    := $(patsubst ${WORKDIR}/${LANGUAGE}/%,%,$(wildcard ${WORKDIR}/${LANGUAGE}/*/*))
ALGFILES  := $(addprefix ${WORKDIR}/$(LANGUAGE)-$(LANGUAGE)/,${MOVIES})




TMXINSERT= $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.insert.xml.gz))
TMXPCT   = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.pct.xml.gz))
TMXSPELL = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.spell.xml.gz))
TMXOTHER = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.other.xml.gz))

MOINSERT= $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.insert.xml.gz))
MOPCT   = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.pct.xml.gz))
MOSPELL = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.spell.xml.gz))
MOOTHER = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.other.xml.gz))

CES      = $(wildcard *.xml.gz)
CES_INFO = $(patsubst %.xml.gz,../xml/%.info,${CES})
CES_PUB  = $(patsubst %,${CORPUSHTML}/%,${CES})

## sample from "other"
ALG_SAMPLES = $(patsubst %.other.xml.gz,${CORPUSPUB}/%_sample.html, ${wildcard *.other.xml.gz})


TAB2TMX    = ${UPLUGHOME}/tools/tab2tmx
OPUS2MOSES = $(UPLUGHOME)/tools/xces2moses




SENTALIGN  = ../scripts/find_translation_alternatives.pl -m


.PHONY: all
all: ${INTRAFILES}
	${MAKE} cleanup

ALIGN_JOBS := $(patsubst %,%-job,${LANGPAIRS})

.PHONY: all-jobs
all-jobs: ${ALIGN_JOBS}

.PHONY: ${ALIGN_JOBS}
${ALIGN_JOBS}:
	if [ ! -e $(@:-job=.xml.gz) ]; then \
	  ${MAKE} HPC_CORES=16 HPC_DISK=500 HPC_MEM=32g EMAIL= $(@:-job=.xml.gz).submit; \
	fi



.PHONY: align
align: ${LANGPAIR}.xml.gz


.PHONY: cleanup
cleanup:
	if [ $(words $(wildcard done/*.gz)) -eq $(words $(LANGPAIRS)) ]; then \
	  if [ -d ${WORKDIR} ]; then \
	    find ${WORKDIR} -delete; \
	  fi; \
	  touch all.done; \
	fi



ALIGN_LOG_FILES := ${WORKDIR}/${LANGPAIR}.log.zip

ALIGN_CATEGORY_FILES := ${WORKDIR}/${LANGPAIR}.all.xml.gz \
			${WORKDIR}/${LANGPAIR}.other.xml.gz \
			${WORKDIR}/${LANGPAIR}.pct.xml.gz \
			${WORKDIR}/${LANGPAIR}.insert.xml.gz \
			${WORKDIR}/${LANGPAIR}.spell.xml.gz \
			${WORKDIR}/${LANGPAIR}.misaligned.xml.gz

%.xml.gz:
	${MAKE} LANGUAGE=$(firstword $(subst -, ,$(@:.xml.gz=))) ${WORKDIR}/$@
	mv -f ${WORKDIR}/$(@:.xml.gz=*.xml.gz) .
	mv -f ${WORKDIR}/$(@:.xml.gz=*.log.*) .
	mkdir -p done
	touch done/$@
	${MAKE} cleanup

${WORKDIR}/${LANGPAIR}.xml.gz: ${WORKDIR}/${LANGUAGE}
	${MAKE} align-files
	${MAKE} ${ALIGN_CATEGORY_FILES}
	${MAKE} ${ALIGN_LOG_FILES}
	mv -f ${WORKDIR}/${LANGPAIR}.all.xml.gz $@
	find ${WORKDIR}/${LANGPAIR} -delete
	find ${WORKDIR}/${LANGUAGE} -delete

${WORKDIR}/${LANGPAIR}.log.tar:
	cd ${WORKDIR} && find ${LANGPAIR} -name '*.log.gz' > ${LANGPAIR}.files
	tar -C ${WORKDIR} -cf ${WORKDIR}/${LANGPAIR}.log.tar -T ${WORKDIR}/${LANGPAIR}.files
	rm -f ${WORKDIR}/${LANGPAIR}.files

${WORKDIR}/${LANGPAIR}.log.zip:
	find ${WORKDIR}/${LANGPAIR} -type f -name '*.log.gz' -exec gunzip -f {} \;
	find ${WORKDIR}/${LANGPAIR} -type f -name '*.log' -empty -delete
	cd ${WORKDIR} && zip -rq $(notdir $@) ${LANGPAIR} -i '*.log'



#-----------------------------
# temporary target for creating zip files instead of tarballs for the logfiles
#-----------------------------

ALL_LOG_ZIP = $(patsubst %.tar,%.zip,$(wildcard *.log.tar))

move-to-zip: ${ALL_LOG_ZIP}

%.log.zip: %.log.tar
	mkdir -p ${WORKDIR}/$@.d
	tar -C ${WORKDIR}/$@.d -xf $<
	find ${WORKDIR}/$@.d -name '*.gz' | xargs gunzip -f
	find ${WORKDIR}/$@.d/$(@:.log.zip=) -empty -delete
	mkdir -p ${WORKDIR}/$@.d/$(@:.log.zip=)
	echo "# alignment logfiles" > ${WORKDIR}/$@.d/$(@:.log.zip=)/README
	cd ${WORKDIR}/$@.d && zip -rq ${WORKDIR}/$@ $(@:.log.zip=) -i '*.log'
	mv ${WORKDIR}/$@ $@
	find ${WORKDIR}/$@.d -delete

#-----------------------------


${ALIGN_CATEGORY_FILES}:
	-( find ${WORKDIR}/${LANGPAIR} -type f -name '*.$(patsubst ${LANGPAIR}.%,%,$(notdir $@))' | \
		sort | xargs zgrep --no-filename 'link' |\
		sed 's|${WORKDIR}/||g;s/\.xml\"/\.xml.gz\"/g;' > $@.links )
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.links >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip $@.tmp; \
	  mv $@.tmp.gz $@; \
	fi
	rm -f $@.links


.PHONY: align-files
align-files: ${ALGFILES}




${WORKDIR}/${LANGUAGE}: ${WORKDIR}/%: ${CORPUSXML}/%.zip
	mkdir -p $(dir $@)
	rsync $< $@.zip
	unzip -q -d $(dir $@) $@.zip
	rm -f $@.zip
	mv ${WORKDIR}/${CORPUS}/xml/$(notdir $@) ${WORKDIR}/
	touch $@


# intralingual sentence alignments for each movie

${ALGFILES}: ${WORKDIR}/${LANGPAIR}/%: ${WORKDIR}/${LANGUAGE}/%
	mkdir -p $(dir $@)
	-${SENTALIGN} $< $@ > $@.log



ALLCESFILES=$(wildcard *.xml.gz)

remove_empty: remove_empty_align remove_empty_dir

remove_empty_align:
	for f in ${ALLCESFILES}; do \
	  zgrep '<link ' $$f | head -1 > $$f.links; \
	  if [ ! -s $$f.links ]; then \
		echo "$$f is empty! --> remove"; \
		rm -f $$f; \
	  fi; \
	  rm -f $$f.links; \
	done

remove_empty_dir:
	find . -type d -empty | xargs rmdir







tmx: ${CORPUSHTML}
	make -j 2 tmx-insert 
	make -j 2 tmx-spell 
	make -j 2 tmx-pct 
	make -j 2 tmx-other

moses: ${CORPUSHTML}
	make -j 2 mo-insert 
	make -j 2 mo-spell 
	make -j 2 mo-pct 
	make -j 2 mo-other

tmx-insert: $(TMXINSERT)
tmx-spell: $(TMXSPELL)
tmx-pct: $(TMXPCT)
tmx-other: $(TMXOTHER)

mo-insert: $(MOINSERT)
mo-spell: $(MOSPELL)
mo-pct: $(MOPCT)
mo-other: $(MOOTHER)


%.tmx.gz: %.txt.zip
	unzip $<
	( S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  P=$$S-$$T; \
	  SEXT="$$S"; TEXT="$$T"; \
	  if [ "$$SEXT" = "$$TEXT" ]; then SEXT=$${SEXT}1;TEXT=$${TEXT}2; fi; \
	  paste ${CORPUS}.$$P.$$SEXT ${CORPUS}.$$P.$$TEXT |\
	  sed = - | sed 'N;s/\n/\t/' | sort -k 2 | uniq -f 1 | sort -n |\
	  cut -f2,3 |\
	  $(TAB2TMX) -s $$S -t $$T |\
	  gzip -c > $@; \
	  rm -f ${CORPUS}.$$P.$$SEXT ${CORPUS}.$$P.$$TEXT ${CORPUS}.$$P.ids; )

${CORPUSHTML}/%.txt.zip: %.xml.gz
	( S="$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  T="$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  P=$$S-$$T; \
	  if [ "$$S" = "$$T" ]; then S="$${S}1";T="$${T}2"; fi; \
	  $(OPUS2MOSES) -d ${CORPUSRAW} -s $$S -t $$T \
		-P ${CORPUS}.$$P.ids \
		$< ${CORPUS}.$$P; \
	  rm -f $@; \
	  sed 's/  */ /g' < ${CORPUS}.$$P.$$S > ${CORPUS}.$$P.$$S.tmp; \
	  sed 's/  */ /g' < ${CORPUS}.$$P.$$T > ${CORPUS}.$$P.$$T.tmp; \
	  mv ${CORPUS}.$$P.$$S.tmp ${CORPUS}.$$P.$$S; \
	  mv ${CORPUS}.$$P.$$T.tmp ${CORPUS}.$$P.$$T; \
	  zip $@ ${CORPUS}.$$P.$$S ${CORPUS}.$$P.$$T ${CORPUS}.$$P.ids; \
	  rm -f ${CORPUS}.$$P.$$S ${CORPUS}.$$P.$$T ${CORPUS}.$$P.ids; )


${CES_INFO}: ../xml/%.info: %.xml.gz
	zgrep 'fromDoc' $< | wc -l > $@
	zgrep 'xtargets' $< | wc -l >> $@
	( zgrep 'fromDoc' $< | \
	  tr ' ' "\n" | grep 'fromDoc' | cut -f2 -d '"' |\
	  xargs zcat | \
	  grep '</w>' | wc -l >> $@ )
	( zgrep 'toDoc' $< | \
	  tr ' ' "\n" | grep 'toDoc' | cut -f2 -d '"' |\
	  xargs zcat | \
	  grep '</w>' | wc -l >> $@ )


${CES_PUB}: ${CORPUSHTML}/%: %
	-mv $< $@
	-ln -s ${subst ${OPUSHOME},../../..,$@} $<


# -N '\/0\/' is used to filter out some strange files in OpenSubtitles2012
# which would be used for many sample files (year = 0)
# (they look messy and should actually be removed from the corpus)

${ALG_SAMPLES}: ${CORPUSPUB}/%_sample.html: %.other.xml.gz
	@mkdir -p ${dir $@}
	$(UPLUGTOOLS)/uplug-readalign \
		-h -m 100 \
		-N '\/(0|11.*)\/' \
	$< > $@
