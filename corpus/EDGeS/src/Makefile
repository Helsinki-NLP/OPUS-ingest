
include ../../Makefile.def
include ../Makefile.def


# TEXTDIR = OpusEDGeS
TEXTDIR = OpusEDGeS_v1.01

TEXTS    = ${wildcard ${TEXTDIR}/Texts/*.xml}
RAWTEXTS = $(patsubst ${TEXTDIR}/Texts/%.xml,../raw/%/bible.xml.gz,${TEXTS})

ALIGNMENTS = ${wildcard ${TEXTDIR}/Alignments/*.xml}
XMLALIGN   = $(patsubst ${TEXTDIR}/Alignments/%.xml,../xml/%.xml.gz,${ALIGNMENTS})


all: ${RAWTEXTS} ${XMLALIGN}

${RAWTEXTS}: ../raw/%/bible.xml.gz: ${TEXTDIR}/Texts/%.xml
	mkdir -p ${dir $@}
	gzip -c < $< > $@

${XMLALIGN}: ../xml/%.xml.gz: ${TEXTDIR}/Alignments/%.xml
	mkdir -p ${dir $@}
	sed 's#\.xml#/bible.xml.gz#g' < $< | gzip -c > $@
