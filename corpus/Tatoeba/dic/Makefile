
include ../Makefile.def
include ../../Makefile.def

DICFILES = $(patsubst ../xml/%.xml.gz,%.dic,$(wildcard ../xml/*.xml.gz))

all: $(DICFILES)

# in case no phrase-table exists: make a dummy one ...
# (!!! run make all in wordalign first !!!!)
%/phrase-table.gz:
	mkdir -p $(dir $@)
	echo '' | gzip -c > $@

%.dic: ${CORPUSWORDALIGN}/%/model/phrase-table.gz
	zcat $< |\
	perl ${OPUSTOOLS}/phrase2dic.pl \
	  -s $(word 1,$(subst -, ,$(subst ., ,$@))) \
	  -t $(word 2,$(subst -, ,$(subst ., ,$@))) \
	> $@

