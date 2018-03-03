
include ../Makefile.def
include Makefile.def


SRCDIR = src/l10n.gnome.org/POT

SCRIPTS = ${OPUSTOOLS}/KDE4
PO2EN   = ${SCRIPTS}/po2en
PO2XCES = ${SCRIPTS}/po2xces

SRC=de
TRG=fi

ALGFILES = $(patsubst $(SRCDIR)/%,xml/$(SRC)-$(TRG)/%.xml.gz,\
	   $(shell find ${SRCDIR}/ -name '*.$(SRC).po' -o -name '*.$(TRG).po' | sed 's/\.\($(SRC)\|$(TRG)\)\.po//' | sort | uniq -c | grep '^ *2 ' | sed 's/^ *2 //'))

ENGFILES = $(patsubst %.fr.po,%.en.po,$(shell find ${SRCDIR}/ -name '*.fr.po'))


.PHONY: corpus
corpus:
	${MAKE} -C src all
	${MAKE} all-align
	${MAKE} -C xml all
	${MAKE} annotate
	rm -fr data


.PHONY: all
all:
	${MAKE} corpus
	${MAKE} web-corpus


.PHONY: web-corpus
web-corpus:
	${MAKE} tmx moses alg_samples
	-cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}_backup.php
	${MAKE} html
	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}${VERSION}.php
#	${MAKE} cwb-index



.PHONY: all-align
all-align: ${ENFILES}
	for s in $(filter-out POT,${LANGUAGES}); do \
	  for t in $(filter-out POT,${LANGUAGES}); do \
	    if `perl -e "exit 0 if ('$$s' lt '$$t');exit 1;"`; then \
		${MAKE} SRC=$$s TRG=$$t align; \
	    fi; \
	  done; \
	done




## dummy files for English (taken from the French localization files)

.PHONY: english
english: ${ENGFILES}

${ENGFILES}: %.en.po: %.fr.po
	${PO2EN} $< $@


.PHONY: align
align: ${ALGFILES}


${ALGFILES}: xml/$(SRC)-$(TRG)/%.xml.gz: $(SRCDIR)/%.$(SRC).po $(SRCDIR)/%.$(TRG).po
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
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

