# -*-makefile-*-



include Makefile.def
include ../Makefile.def

LANGUAGES = $(sort $(notdir $(wildcard converted/[a-z][a-z]) $(wildcard converted/[a-z][a-z]_[A-Z][A-Z])))
LANGUAGE = be


FILTEREDXML = $(patsubst converted/%,filtered/%,\
		$(shell find converted/${LANGUAGE} -name '*.xml.gz'))
SENTALGFILES = $(patsubst converted/%,${CORPUSXML}/%,\
		$(wildcard converted/*.xml.gz))

encode-en:
	cwb-encode -c utf8 -R /proj/OPUS/cwb/reg/EUbookshop/en -d /proj/OPUS/cwb/data/EUbookshop/en -f cwbtmp/en -xsB -S p:0+id -S style:0+type -S file:0+name -S chunk:0+type+id -S s:0+hun+lang+tree+lem+id+pos -P hun -P lem -P pos -P tree


corpus:
	${MAKE} convert
	${MAKE} -C converted corpus
	${MAKE} filter-alignments filter-xml
	${MAKE} -C xml remove-empty
	-( cd xml; ln -s ../raw/?? . )
	-( cd xml; ln -s ../raw/??_?? . )
	${MAKE} html
	-( rm xml/?? )
	-( rm xml/??_?? )
	${MAKE} annotate
	${MAKE} refresh-html
	rm -fr data

continue:
	${MAKE} filter-alignments 
	${MAKE} filter-xml
	${MAKE} annotate


all:
	${MAKE} corpus
	${MAKE} web-corpus
	rm -fr data

web-corpus:
	${MAKE} -C xml web-corpus
	${MAKE} refresh-html
	${MAKE} cwb-index


real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# use uplug-readalign to filter the raw sentence alignments
# (sentence alignment in xml/ will only contain sentences that match
#  the language ID)

filter-alignments: ${SENTALGFILES}

${SENTALGFILES}: ${CORPUSXML}/%: converted/%
	( cd converted; \
	  uplug-readalign \
	  -s $(word 1, $(subst _, ,$(word 1, $(subst -, ,\
	     $(patsubst converted/%.xml.gz,%,$<))))) \
	  -t $(word 1, $(subst _, ,$(word 2, $(subst -, ,\
	     $(patsubst converted/%.xml.gz,%,$<))))) \
	  -c 0 -S 2 -T 2 -l $(patsubst converted/%,%,$<) |\
	  gzip -c > $@ )

# filter-xml: remove all sentences that do not match the given language

filter-xml:
	for l in ${LANGUAGES}; do \
		make LANGUAGE=$$l filter-xml-lang; \
	done

filter-xml-lang: ${FILTEREDXML}
	mkdir -p raw
	( cd raw; ln -s ../filtered/${LANGUAGE} ${LANGUAGE} )

${FILTEREDXML}: filtered/%: converted/%
	mkdir -p $(dir $@)
	zcat $< | scripts/filter.pl -l ${LANGUAGE} | gzip -c > $@


# include some standard OPUS targets for processing/annotating data
# (we tag only - parsing takes too long!)

include ../Makefile.tag
# include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.html


ifndef SRC_DIR
  SRC_DIR=BX7191073
endif



RAW_DIRS=$(patsubst ../src/%,converted/%,$(wildcard ../src/[A-Z]*))
RAW_FILES=$(patsubst ../src/$(SRC_DIR)/$(SRC_DIR).%.pdf,converted/%/$(SRC_DIR)/$(SRC_DIR).xml.gz,$(wildcard ../src/$(SRC_DIR)/*.pdf))

# RAW_DIRS=$(patsubst src/%,raw/%,$(wildcard src/[A-Z]*))
# RAW_FILES=$(patsubst src/$(SRC_DIR)/$(SRC_DIR).%.pdf,raw/%/$(SRC_DIR)/$(SRC_DIR).xml.gz,$(wildcard src/$(SRC_DIR)/*.pdf))


LT_TMX = $(patsubst ${CORPUSXML}/lt-%.xml.gz,${CORPUSHTML}/lt-%.tmx.gz,$(CES))\
	$(patsubst ${CORPUSXML}/%-lt.xml.gz,${CORPUSHTML}/%-lt.tmx.gz,$(CES))

lt-tmx: ${LT_TMX}


convert: $(RAW_DIRS)
	make move-incorrect-ids

$(RAW_DIRS): converted/%: src/%
	${MAKE} SRC_DIR=$(notdir $<) convert-pdfs

convert-pdfs: $(RAW_FILES)

%.xml.gz: %.xml
	-gzip -f $<


converted/%/$(SRC_DIR)/$(SRC_DIR).xml: src/$(SRC_DIR)/$(SRC_DIR).%.pdf
	mkdir -p $(dir $@)
	-( ( pdf2xml -X $< | \
	    uplug pre/sent -l $(word 2, $(subst /, ,$@)) | \
	    scripts/check_lang.pl -l $(word 2, $(subst /, ,$@)) > $@ ) || \
	  rmdir $(dir $@) )


move-incorrect-ids:
	cp -R converted/gr/* converted/el/
	rm -fr converted/gr
	cp -R converted/ho/* converted/hu/
	rm -fr converted/ho
	mv converted/lx converted/lb
	mv converted/no converted/nb
	mv converted/vl converted/nl_BE
	mv converted/fb converted/fr_BE


CLEAN_FILES = $(patsubst raw/%,clean/%,$(wildcard raw/$(SRC)/*/*.xml.gz))

checkall:
	for l in ${LANGUAGES}; do \
		make SRC=$$l checklang; \
	done

checklang: ${CLEAN_FILES}

clean/%.xml.gz: raw/%.xml.gz
	mkdir -p $(dir $@)
	zcat $< | \
	scripts/check_lang.pl -l ${SRC} |\
	gzip -c > $@

