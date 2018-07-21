
include ../Makefile.def
include ../../Makefile.def

DICFILES = $(patsubst ../xml/%.xml.gz,%.dic,$(wildcard ../xml/*.xml.gz))

all: $(DICFILES)

%.dic: ${CORPUSWORDALIGN}/%/model/phrase-table-filtered.gz
	zcat $< |\
	perl ${OPUSTOOLS}/phrase2dic.pl \
	  -s $(word 1,$(subst -, ,$(subst ., ,$@))) \
	  -t $(word 2,$(subst -, ,$(subst ., ,$@))) \
	> $@

