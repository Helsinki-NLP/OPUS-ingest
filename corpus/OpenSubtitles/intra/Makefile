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


LOGALL    := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.log.gz))
XMLALL    := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.xml.gz))
XMLINSERT := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.insert.xml.gz))
XMLPCT    := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.pct.xml.gz))
XMLSPELL  := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.spell.xml.gz))
XMLOTHER  := $(patsubst %,${CORPUSRELEASE}/intra/%,$(wildcard *.other.xml.gz))

TMXINSERT := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.tmx.gz,$(XMLINSERT))
TMXPCT    := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.tmx.gz,$(XMLPCT))
TMXSPELL  := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.tmx.gz,$(XMLSPELL))
TMXOTHER  := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.tmx.gz,$(XMLOTHER))

MOINSERT  := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.txt.zip,$(XMLINSERT))
MOPCT     := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.txt.zip,$(XMLPCT))
MOSPELL   := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.txt.zip,$(XMLSPELL))
MOOTHER   := $(patsubst %.xml.gz,${CORPUSRELEASE}/intra/%.txt.zip,$(XMLOTHER))


TAB2TMX   := bitext2tmx
SENTALIGN := ../scripts/find_translation_alternatives.pl -m


.PHONY: all
all: ${INTRAFILES}
	${MAKE} cleanup


## make release files for the intralingual alignments

.PHONY: release-all
# release-all: ${XMLALL} ${LOGALL} ${MOINSERT} ${MOPCT} ${MOSPELL} ${TMXINSERT} ${TMXPCT} ${TMXSPELL}
release-all: ${XMLALL} ${LOGALL} ${TMXOTHER}



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







tmx:
	make -j 2 tmx-insert 
	make -j 2 tmx-spell 
	make -j 2 tmx-pct 
	make -j 2 tmx-other

moses:
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


${CORPUSRELEASE}/intra/%.tmx.gz: ${CORPUSRELEASE}/intra/%.txt.zip
	unzip $<
	( S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  P=$$S-$$T; \
	  s="$${S}1"; t="$${T}2"; \
	  paste ${CORPUS}.$$P.$$s ${CORPUS}.$$P.$$t |\
	  sed = - | sed 'N;s/\n/\t/' | sort -k 2 | uniq -f 1 | sort -n |\
	  cut -f2,3 |\
	  $(TAB2TMX) -s $$S -t $$T |\
	  gzip -c > $@; \
	  rm -f ${CORPUS}.$$P.$$s ${CORPUS}.$$P.$$t; )

${CORPUSRELEASE}/intra/%.txt.zip: ${CORPUSRELEASE}/intra/%.xml.gz
	( S="$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  T="$(lastword  $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  s="$${S}1"; t="$${T}2"; \
	  P=$$S-$$T; \
	  opus_read -rd ${OPUSRELEASE} -r ${VERSION} -d ${CORPUS} -p raw \
			-S 1-100 -T 1-100 -s $$S -t $$T -af $< \
			-wm moses -w ${CORPUS}.$$P.$$s ${CORPUS}.$$P.$$t; \
	  zip $@ ${CORPUS}.$$P.$$s ${CORPUS}.$$P.$$t; \
	  rm -f ${CORPUS}.$$P.$$s ${CORPUS}.$$P.$$t; )

${LOGALL} ${XMLALL}: ${CORPUSRELEASE}/intra/%.gz: %.gz
	mkdir -p $(dir $@)
	rsync $< $@

