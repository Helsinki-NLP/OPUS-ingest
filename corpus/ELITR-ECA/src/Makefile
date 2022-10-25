

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.submit


MONOTEXTS := ${wildcard elitr-eca-v1.0/monolingual/??/*.txt}
MONOXML   := ${patsubst elitr-eca-v1.0/monolingual/%.txt,../raw/%.xml.gz,${MONOTEXTS}}
TIDYRAW   := ${MONOXML:.xml.gz=.tidy.xml.gz}
TIDYXML   := ${patsubst ../raw/%,../xml/%,${TIDYRAW}}

LANGPAIRS := $(notdir ${wildcard elitr-eca-v1.0/parallel/??2??})
LANGPAIR  = ${firstword ${LANGPAIRS}}
SRC       = ${firstword $(sort $(subst 2, ,${LANGPAIR}))}
TRG       = ${lastword  $(sort $(subst 2, ,${LANGPAIR}))}

## all bitext files from the current language pair

BITEXTS   = ${patsubst elitr-eca-v1.0/parallel/${LANGPAIR}/%.tsv,\
		../xml/${SRC}-${TRG}/%.xml.gz,\
		${wildcard elitr-eca-v1.0/parallel/${LANGPAIR}/*.tsv}}

## some basic cleanup

CLEANUP_SCRIPTS = dos2unix | perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;'

## option to reverse language direction from tsv file

ifneq (${SRC}2${TRG},${LANGPAIR})
  CONVERT_OPTION = -r
endif


.PHONY: all
all: elitr-eca-v1.0
	${MAKE} monolingual
	${MAKE} langpairs

.PHONY: langpairs
langpairs: ${LANGPAIRS}
${LANGPAIRS}:
	make LANGPAIR=$@ bitexts

.PHONY: bitexts
bitexts: ${BITEXTS}
${BITEXTS}: ../xml/${SRC}-${TRG}/%.xml.gz: elitr-eca-v1.0/parallel/${LANGPAIR}/%.tsv
	${MAKE} ${patsubst ../xml/${SRC}-${TRG}/%,../raw/${SRC}/%,$@} \
		${patsubst ../xml/${SRC}-${TRG}/%,../raw/${TRG}/%,$@}
	mkdir -p ${dir $@}
	cat $< | ${CLEANUP_SCRIPTS} |\
	../scripts/para2opus.pl ${CONVERT_OPTION} \
		${patsubst ../xml/${SRC}-${TRG}/%,../raw/${SRC}/%,$@} \
		${patsubst ../xml/${SRC}-${TRG}/%,../raw/${TRG}/%,$@} |\
	sed 's#../raw/##g' | gzip -c > $@


elitr-eca-v1.0:
	wget http://data.statmt.org/elitr-eca/elitr-eca-v1.0.tar.gz
	tar -xzf elitr-eca-v1.0.tar.gz
	rm -f elitr-eca-v1.0.tar.gz

.PHONY: monolingual
monolingual: ${MONOXML}

${MONOXML}: ../raw/%.xml.gz: elitr-eca-v1.0/monolingual/%.txt
	mkdir -p ${dir $@}
	cat $< | ${CLEANUP_SCRIPTS} |\
	../scripts/mono2opus.pl |\
	gzip -c > $@


tidy: ${TIDYRAW} ${TIDYXML}

%.tidy.xml.gz: %.xml.gz
	zcat $< | tidy -xml -utf8 -i -wrap 0 | gzip -c > $@
