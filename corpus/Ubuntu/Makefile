
include ../Makefile.def
include Makefile.def


SRCDIR = src/rosetta-utopic

SCRIPTS = ${OPUSTOOLS}/KDE4
PO2EN   = ${SCRIPTS}/po2en
PO2XCES = ${SCRIPTS}/po2xces
ALIGNPO = ${TOOLS}/align-po

SRC=de
TRG=fi

ALGFILES = $(patsubst %.po,xml/$(SRC)-$(TRG)/%.xml.gz,\
	   $(shell find $(SRCDIR)/$(SRC) $(SRCDIR)/$(TRG) -name '*.po' -exec basename {} \; | sort | uniq -c | grep '^ *2 ' | sed 's/^ *2 //'))

ENGFILES = $(patsubst ${SRCDIR}/fr/%,${SRCDIR}/en/%,$(shell find ${SRCDIR}/fr -name '*.po'))



.PHONY: corpus
corpus:
	${MAKE} -C src all
	${MAKE} all-align
	${MAKE} -C xml all
	${MAKE} annotate
	rm -fr data


.PHONY: all
all: corpus
	${MAKE} web-corpus


.PHONY: web-corpus
web-corpus: tmx moses alg_samples html
#	${MAKE} cwb-index



.PHONY: all-align
all-align: ${ENFILES}
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if `perl -e "exit 0 if ('$$s' lt '$$t');exit 1;"`; then \
		${MAKE} SRC=$$s TRG=$$t align; \
	    fi; \
	  done; \
	done



## dummy files for English (taken from the French localization files)

.PHONY: english
english: ${ENGFILES}

${ENGFILES}: ${SRCDIR}/en/%: ${SRCDIR}/fr/%
	${PO2EN} $< $@


.PHONY: align
align: ${ALGFILES}


${ALGFILES}: xml/$(SRC)-$(TRG)/%.xml.gz: $(SRCDIR)/$(SRC)/LC_MESSAGES/%.po $(SRCDIR)/$(TRG)/LC_MESSAGES/%.po
	mkdir -p $(dir $@)
	mkdir -p $(dir $(patsubst xml/$(SRC)-$(TRG)/%,raw/$(SRC)/%,$@))
	mkdir -p $(dir $(patsubst xml/$(SRC)-$(TRG)/%,raw/$(TRG)/%,$@))
	${PO2XCES} $^ $(@:.gz=) \
	  	$(patsubst xml/$(SRC)-$(TRG)/%.xml.gz,raw/$(SRC)/%.xml,$@) \
	  	$(patsubst xml/$(SRC)-$(TRG)/%.xml.gz,raw/$(TRG)/%.xml,$@) 
	if [ -s $(@:.gz=) ]; then \
	  sed 's#raw/##g' < $(@:.gz=) | gzip -c > $@; \
	fi
	rm -f $(@:.gz=)
	-gzip -f $(patsubst xml/$(SRC)-$(TRG)/%.xml.gz,raw/$(SRC)/%.xml,$@)
	-gzip -f $(patsubst xml/$(SRC)-$(TRG)/%.xml.gz,raw/$(TRG)/%.xml,$@)



# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
include ../Makefile.html
