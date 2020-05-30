
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

WIKI_BITEXTS   = $(sort ${wildcard v1/WikiMatrix.*.tsv.gz})
WIKI_LANGPAIRS = ${patsubst v1/WikiMatrix.%.tsv.gz,%,${WIKI_BITEXTS}}
WIKI_LANGS     = ${sort ${subst -, ,${WIKI_LANGPAIRS}}}

SENTALGS  = ${patsubst %,../xml/%.xml.gz,${WIKI_LANGPAIRS}}
XMLDOCS   = ${patsubst %,../raw/%/WikiMatrix.xml.gz,${WIKI_LANGS}}
SENTDBS   = ${patsubst %,../db/WikiMatrix.%.cdb,${WIKI_LANGS}}
UNIQSENTS = ${patsubst %,${TMPDIR}/WikiMatrix.sent.%.txt,${WIKI_LANGS}}

ifdef LOCAL_SCRATCH
  TMPDIR = ${LOCAL_SCRATCH}
endif

ifneq (${HPC_CORES},1)
  THREADS = ${HPC_CORES}
endif

THREADS ?= 4


.PHONY: all
all: fetch
	${MAKE} convert

all-job:
	${MAKE} HPC_DISK=1000 all.submit

convert-job:
	${MAKE} HPC_DISK=1000 convert.submit

.PHONY: fetch
fetch: v1

.PHONY: convert
convert: ${XMLDOCS} ${SENTALGS}

xmldocs: ${XMLDOCS}
sentdbs: ${SENTDBS}
sentalgs: ${SENTALGS}

## get the source files

v1:
	wget https://dl.fbaipublicfiles.com/laser/WikiMatrix/WikiMatrix.v1.1620_language_pairs.tar
	tar -xf WikiMatrix.v1.1620_language_pairs.tar
	rm -f WikiMatrix.v1.1620_language_pairs.tar


## raw corpus files

${XMLDOCS}: ../raw/%/WikiMatrix.xml.gz: ${TMPDIR}/WikiMatrix.sent.%.txt
	mkdir -p ${dir $@}
	../scripts/text2xml.pl < $< | gzip -c > $@


## in memory without any key-value store
## ---> requires quite some memory 

${SENTALGS}: ../xml/%.xml.gz: v1/WikiMatrix.%.tsv.gz ${UNIQSENTS}
	mkdir -p ${dir $@}
	zcat $< | \
	( s=${firstword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
	  t=${lastword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
	  zcat $< | ../scripts/tsv2alg-mem.pl \
		-S $$s/WikiMatrix.xml.gz \
		-T $$t/WikiMatrix.xml.gz \
		-s ${TMPDIR}/WikiMatrix.sent.$$s.txt \
		-t ${TMPDIR}/WikiMatrix.sent.$$t.txt |\
	  gzip -c > $@ )


## sentence alignment files
## CDB-based lookup: fast but still takes quite some time

# ${SENTALGS}: ../xml/%.xml.gz: v1/WikiMatrix.%.tsv.gz ${SENTDBS}
# 	mkdir -p ${dir $@}
# 	zcat $< | \
# 	( s=${firstword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  t=${lastword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  zcat $< | ../scripts/tsv2alg.pl \
# 		-S $$s/WikiMatrix.xml.gz \
# 		-T $$s/WikiMatrix.xml.gz \
# 		-s ../db/WikiMatrix.$$s.cdb \
# 		-t ../db/WikiMatrix.$$t.cdb |\
# 	  gzip -c > $@ )


## with SQLite - this is very slow ....
#
# ${SENTALGS}: ../xml/%.xml.gz: v1/WikiMatrix.%.tsv.gz 
# 	${MAKE} ../db/WikiMatrix.${firstword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}.db \
# 		../db/WikiMatrix.${lastword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}.db
# 	mkdir -p ${dir $@}
# 	zcat $< | \
# 	( s=${firstword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  t=${lastword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  zcat $< | python3 ../scripts/tsv2alg.py \
# 		-s ../db/WikiMatrix.$$s.db \
# 		-t ../db/WikiMatrix.$$t.db \
# 		> $@.txt )
# 	( s=${firstword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  t=${lastword ${subst -, ,${patsubst ../xml/%.xml.gz,%,$@}}}; \
# 	  ../scripts/alg2xml.pl -s $$s -t $$t < $@.txt |\
# 	  gzip -c > $@ )
# 	rm -f $@.txt



.SECONDARY: ${TMPDIR}/WikiMatrix.sent.%.txt

${TMPDIR}/WikiMatrix.sent.%.txt:
	rm -f $@.tmp
	( l=${patsubst ${TMPDIR}/WikiMatrix.sent.%.txt,%,$@}; \
	  for d in `ls v1/WikiMatrix.$$l-*.tsv.gz 2>/dev/null`; do \
	    zcat $$d | cut -f2 >> $@.tmp; \
	  done; \
	  for d in `ls v1/WikiMatrix.*-$$l.tsv.gz 2>/dev/null`; do \
	    zcat $$d | cut -f3 >> $@.tmp; \
	  done )
	LANG=C sort -T ${TMPDIR} $@.tmp --parallel=${THREADS} -u $@.tmp | \
	cat -n | sed 's/^ *//' > $@
	rm -f $@.tmp


## CDB database (NOTE: 4GB limit! --> fixed now?!)
../db/WikiMatrix.%.cdb: ${TMPDIR}/WikiMatrix.sent.%.txt
	mkdir -p ${dir $@}
	../scripts/corpus2cdb.pl $@ < $<

## SQLite database
../db/WikiMatrix.%.db: ${TMPDIR}/WikiMatrix.sent.%.txt
	mkdir -p ${dir $@}
	python3 ../scripts/corpus2db.py -db $@ < $<



XMLALGFILES = ${wildcard ../xml/*.xml.gz}
XMLALGFIX = ${patsubst ../xml/%.xml.gz,../xml-new/%.xml.gz,${XMLALGFILES}}

fix-xml-issues: ${XMLALGFIX}

${XMLALGFIX}:
	mkdir -p ${dir $@}
	( s=${firstword ${subst -, ,${patsubst ../xml-new/%.xml.gz,%,$@}}}; \
	  t=${lastword ${subst -, ,${patsubst ../xml-new/%.xml.gz,%,$@}}}; \
	  zcat $(patsubst ../xml-new/%.xml.gz,../xml/%.xml.gz,$@) | \
	  sed "s#toDoc=\"$$s/WikiMatrix.xml.gz\"#toDoc=\"$$t/WikiMatrix.xml.gz\"#" |\
	  gzip -c > $@; )
