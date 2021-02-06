
include ../../Makefile.def
include ../Makefile.def




TEXTS    = ${wildcard OpusEDGeS/Texts/*.xml}
RAWTEXTS = $(patsubst OpusEDGeS/Texts/%.xml,../raw/%/bible.xml.gz,${TEXTS})

ALIGNMENTS = ${wildcard OpusEDGeS/Alignments/*.xml}
XMLALIGN   = $(patsubst OpusEDGeS/Alignments/%.xml,../xml/%.xml.gz,${ALIGNMENTS})


all: ${RAWTEXTS} ${XMLALIGN}

${RAWTEXTS}: ../raw/%/bible.xml.gz: OpusEDGeS/Texts/%.xml
	mkdir -p ${dir $@}
	gzip -c < $< > $@

${XMLALIGN}: ../xml/%.xml.gz: OpusEDGeS/Alignments/%.xml
	mkdir -p ${dir $@}
	sed 's#\.xml#/bible.xml.gz#g' < $< | gzip -c > $@
