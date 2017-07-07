
include ../Makefile.def
include ../../Makefile.def

# DICFILES = $(patsubst ../xml/%.xml.gz,%.dic,$(wildcard ../xml/*.xml.gz))
DICFILES = $(patsubst ../wordalign/%,%.dic,$(wildcard ../wordalign/*-*))

all: $(DICFILES)

%.dic: ${CORPUSWORDALIGN}/%/model/phrase-table-filtered.gz
	if [ -e $< ]; then \
	  zcat $< |\
	  perl ${OPUSTOOLS}/phrase2dic.pl \
	    -s $(word 1,$(subst -, ,$(subst ., ,$@))) \
	    -t $(word 2,$(subst -, ,$(subst ., ,$@))) \
	  > $@; \
	fi

%/phrase-table-filtered.gz:
	echo "WARNING: phrase-table $@ does not exist!"
