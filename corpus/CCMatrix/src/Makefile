#-*-makefile-*-

include ../../Makefile.def
include ../Makefile.def

## use the fast local-scratch partition if available
TMPDIR ?= /media/ccmatrix/tmp
ifdef LOCAL_SCRATCH
  TMPDIR = ${LOCAL_SCRATCH}
endif


PWD            := ${shell pwd}
THREADS        ?= 8

TSV_BITEXTS    := $(shell wget -qq -O - ${SOURCE_URL} | grep -o '[a-z]*-[a-z]*.bitextf.tsv.gz' | sort -u)
XML_BITEXTS    := ${patsubst %.bitextf.tsv.gz,../xml/%.xml.gz,${TSV_BITEXTS}}
LANGUAGES      := $(sort $(subst -, ,${patsubst %.bitextf.tsv.gz,%,${TSV_BITEXTS}}))
XML_CORPORA    := ${patsubst %,../raw/%/$(CORPUS).xml.gz,${LANGUAGES}}
TXT_CORPORA    := ${patsubst %,../raw/%/$(CORPUS).txt.gz,${LANGUAGES}}
TXT_CORPUS_IDS := ${patsubst %,${TMPDIR}/$(CORPUS).%.ids.gz,${LANGUAGES}}
SENTDBS        := ${patsubst %,${TMPDIR}/$(CORPUS).%.db,${LANGUAGES}}

TSV2OPUS       := ${PWD}/../scripts/tsv2opus
SORT           := sort -T ${TMPDIR} --parallel=${THREADS}
GZIP           := ${shell which pigz 2>/dev/null || echo gzip}




.PHONY: all
all:
	${MAKE} txtids
	${MAKE} bitexts
	${MAKE} cleanup

.PHONY: fetch txtids bitexts cleanup
fetch: ${TSV_BITEXTS}
txtids: ${TXT_CORPUS_IDS}
bitexts: ${XML_BITEXTS}
cleanup:
	rm -f ${TXT_CORPUS_IDS}
	rm -f ${TSV_BITEXTS}

.PHONY: missing
missing: ../raw/es/CCMatrix.xml.gz ../raw/fr/CCMatrix.xml.gz


txtids-tmp: $(filter-out %.es.ids.gz %.fr.ids.gz,${TXT_CORPUS_IDS})

## sentence alignments in XCES align format
## - check whether the plain text files with IDs exist
## - if not: create them and store them in temp files
## - add IDs in two steps to the parallel data
${XML_BITEXTS}: ../xml/%.xml.gz: %.bitextf.tsv.gz # ${XML_CORPORA}
	if [ -e ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz ]; then \
	  ln -s ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz $@.mono.gz; \
	else \
	  ${GZIP} -cd ../raw/$(firstword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	  grep -a '</s>' | cut -f2 -d'<' | sed 's/^s id=\"//;s/\">/>/;' | \
	  tr '>' "\t" | sed 's/\&gt\;/\>/g;s/\&lt\;/\</g;s/\&amp\;/\&/g;' | ${GZIP} -c > $@.mono.gz; \
	fi
	zcat $< | ${SORT} -k2 -t'	' | ${GZIP} -c > $@.biling.gz
	join -t'	' -1 2 -2 2 -o 2.1 2.2 2.3 1.1   <(${GZIP} -cd $@.mono.gz) <(${GZIP} -cd $@.biling.gz) |\
	${GZIP} -c > $@.srcids.gz
	rm -f $@.mono.gz $@.biling.gz
	if [ -e ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz ]; then \
	  ln -s ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=))).ids.gz $@.mono.gz; \
	else \
	  ${GZIP} -cd ../raw/$(lastword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	  grep -a '</s>' | cut -f2 -d'<' | sed 's/^s id=\"//;s/\">/>/;' | \
	  tr '>' "\t" | sed 's/\&gt\;/\>/g;s/\&lt\;/\</g;s/\&amp\;/\&/g;' | ${GZIP} -c > $@.mono.gz; \
	fi
	zcat $@.srcids.gz | ${SORT} -k3 -t'	' | ${GZIP} -c > $@.biling.gz
	rm -f $@.srcids.gz
	join -t'	' -1 2 -2 3 -o 2.1 2.4 1.1   <(${GZIP} -cd $@.mono.gz) <(${GZIP} -cd $@.biling.gz) |\
	${SORT} -k1nr | \
	../scripts/tsv2cesalign.pl \
	  $(firstword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz \
	  $(lastword $(subst -, ,$(<:.bitextf.tsv.gz=)))/${CORPUS}.xml.gz |\
	${GZIP} -c > $@
	rm -f $@.srcids.gz $@.mono.gz $@.biling.gz

## corpus files - sorted unique sentences
${XML_CORPORA}:
	${MAKE} ${patsubst %.xml.gz,%.txt.gz,$@}
	${GZIP} -cd ${patsubst %.xml.gz,%.txt.gz,$@} | ../scripts/txt2xml.pl | \
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' \
	| perl -CS -pe 's/\&\s*\#\s*160\s*\;/ /g' \
	| perl -pe 's/[\p{C}-[\n\t]]/ /g;' \
	| recode -f utf8..utf16 | recode -f utf16..utf8 |\
	${GZIP} -c > $@
	rm -f ${patsubst %.xml.gz,%.txt.gz,$@}

## sorted set of unique sentences for each language
${TXT_CORPORA}:
	mkdir -p ${dir $@}
	-zcat ${patsubst ../raw/%/$(CORPUS).txt.gz,%-*.bitextf.tsv.gz,$@} |\
	cut -f2 | ${SORT} -u | ${GZIP} -c > $@.txt1.gz
	-zcat ${patsubst ../raw/%/$(CORPUS).txt.gz,*-%.bitextf.tsv.gz,$@} |\
	cut -f3 | ${SORT} -u | ${GZIP} -c > $@.txt2.gz
	sort -u -m <(${GZIP} -cd $@.txt1.gz) <(${GZIP} -cd $@.txt2.gz) | ${GZIP} -c > $@
	rm -f $@.txt1.gz $@.txt2.gz

${TXT_CORPUS_IDS}: ${TMPDIR}/$(CORPUS).%.ids.gz: ../raw/%/$(CORPUS).xml.gz
	${GZIP} -cd $< |\
	grep -a '</s>' | cut -f2 -d'<' | sed 's/^s id=\"//;s/\">/>/;' | \
	tr '>' "\t" | sed 's/\&gt\;/\>/g;s/\&lt\;/\</g;s/\&amp\;/\&/g;' | \
	${GZIP} -c > $@.tmp
	mv -f $@.tmp $@

## OBSOLETE .... DB files for sentences in a corpus
${SENTDBS}:
	-zcat ${patsubst ${TMPDIR}/$(CORPUS).%.db,%-*.bitextf.tsv.gz,$@} |\
	cut -f2 | ${SORT} -u | ${GZIP} -c > $@.txt1.gz
	-zcat ${patsubst ${TMPDIR}/$(CORPUS).%.db,*-%.bitextf.tsv.gz,$@} |\
	cut -f3 | ${SORT} -u | ${GZIP} -c > $@.txt2.gz
	-zcat $@.txt1.gz $@.txt2.gz | ${SORT} -u | ${GZIP} -c > $@.txt.gz
	rm -f $@.txt1.gz $@.txt2.gz
	zcat $@.txt.gz | perl ../scripts/add2cdb.pl $@
	rm -f $@.txt.gz
	touch $@


${TSV_BITEXTS}:
	wget -qq -O $@ ${SOURCE_URL}$@

download-size:
	wget -qq -O - ${SOURCE_URL} |\
	grep -o '> *[0-9\.]*[GMK]<' | tr '<>' '  ' |\
	perl -e 'while (<>){/^ *([0-9\.]*)([GKM]?)/;$$a=$$1;$$b=$$2;if ($$b eq "G"){$$a*=1000000000} elsif ($$b eq "M"){$$a*=1000000} elsif ($$b eq "K"){$$a*=1000} $$c+=$$a;} printf "total size: %7.2fG\n",$$c/1000000000;'



##-------------------------------------------------------
## old style of creating alignment files using DB files
##-------------------------------------------------------

# ${XML_BITEXTS}: ../xml/%.xml.gz:  %.bitextf.tsv.gz ${XML_CORPORA}
# 	mkdir -p ${dir $@}
# 	if [ -e ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=)))).db1 ]; then \
# 	  if [ -e ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=)))).db1 ]; then \
# 	${GZIP} -cd $< | \
# 	../scripts/tsv2links.pl \
# 	  ${TMPDIR}/$(CORPUS).$(firstword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=)))).db \
# 	  ${TMPDIR}/$(CORPUS).$(lastword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=)))).db \
# 	  $(firstword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=))))/${CORPUS}.xml.gz \
# 	  $(lastword $(subst -, ,$(notdir $(<:.bitextf.tsv.gz=))))/${CORPUS}.xml.gz |\
# 	${GZIP} -c > $@; \
# 	rm -f $<; \
# 	fi \
# 	fi

# ${XML_CORPORA}:
# 	mkdir -p ${dir $@}
# 	-zcat ${patsubst ../raw/%/$(CORPUS).xml.gz,%-*.bitextf.tsv.gz,$@} |\
# 	cut -f2 | ${SORT} -u | ${GZIP} -c > $@.txt1.gz
# 	-zcat ${patsubst ../raw/%/$(CORPUS).xml.gz,*-%.bitextf.tsv.gz,$@} |\
# 	cut -f3 | ${SORT} -u | ${GZIP} -c > $@.txt2.gz
# 	sort -u -m <(${GZIP} -cd $@.txt1.gz) <(${GZIP} -cd $@.txt2.gz) | ${GZIP} -c > $@.txt.gz
# 	rm -f $@.txt1.gz $@.txt2.gz
# 	zcat $@.txt.gz | perl ../scripts/add2cdb.pl \
# 	${patsubst ../raw/%/$(CORPUS).xml.gz,${TMPDIR}/$(CORPUS).%.db,$@} |\
# 	${GZIP} -c > $@
# 	rm -f $@.txt.gz



## fix XML entities (now hopefully correct in txt2xml)

FIXED_XML = ${patsubst %,%.fixed,${XML_CORPORA}}

${FIXED_XML}: %.fixed: %
	${GZIP} -cd $< | \
	perl -e 'while (<>){if (/^( *\<s [^\>]*>)(.*)(\<\/s\> *$$)/){($$a,$$b,$$c) = ($$1,$$2,$$3); $$b=~s/\&/\&amp\;/g;$$b=~s/\>/\&gt\;/g;$$b=~s/\</\&lt\;/g;print "$$a$$b$$c\n";} else{print;} }' |\
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' \
	| perl -CS -pe 's/\&\s*\#\s*160\s*\;/ /g' \
	| perl -pe 's/[\p{C}-[\n\t]]/ /g;' \
	| recode -f utf8..utf16 | recode -f utf16..utf8 |\
	${GZIP} -c > $@
	mv -f $@ $<
	touch $@

fix-xml: ${FIXED_XML}
