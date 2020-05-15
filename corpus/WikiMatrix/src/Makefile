
include ../../Makefile.def
include ../Makefile.def

PWD := ${shell pwd}

WIKI_BITEXTS   = $(sort ${wildcard v1/WikiMatrix.*.tsv.gz})
WIKI_LANGPAIRS = ${patsubst v1/WikiMatrix.%.tsv.gz,%,${WIKI_BITEXTS}}
WIKI_LANGS     = ${sort ${subst -, ,${WIKI_LANGPAIRS}}}

SENTALGS = ${patsubst %,../xml/%.xml.gz,${WIKI_LANGPAIRS}}
XMLDOCS  = ${patsubst %,../raw/%/WikiMatrix.xml.gz,${WIKI_LANGS}}


.PHONY: all
all: fetch convert


.PHONY: fetch
fetch: v1

.PHONY: convert
convert:
	${MAKE} -j 1 tsv2db
	${MAKE} ${XMLDOCS}


## TODO: better make sure that this is not run in parallel!

.PHONY: tsv2db
tsv2db: ${SENTALGS}

${SENTALGS}: ../xml/%.xml.gz: v1/WikiMatrix.%.tsv.gz
	mkdir -p ${dir $@}
	zcat $< | ../scripts/tsv2db.pl -l ${patsubst ../xml/%.xml.gz,%,$@} > $@.txt
	../scripts/alg2xml.pl \
		-s $(firstword $(subst -, ,${patsubst ../xml/%.xml.gz,%,$@}))/WikiMatrix.xml.gz \
		-t $(lastword $(subst -, ,${patsubst ../xml/%.xml.gz,%,$@}))/WikiMatrix.xml.gz \
		< $@.txt > $@
	rm -f $@.txt


.SECONDARY: corpus.%

${XMLDOCS}: ../raw/%/WikiMatrix.xml.gz: corpus.%
	mkdir -p ${dir $@}
	../scripts/text2xml < $< | gzip -c > $@
	rm -f $<

v1:
	wget https://dl.fbaipublicfiles.com/laser/WikiMatrix/WikiMatrix.v1.1620_language_pairs.tar
	tar -xf WikiMatrix.v1.1620_language_pairs.tar
	rm -f WikiMatrix.v1.1620_language_pairs.tar


