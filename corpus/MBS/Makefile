# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

# make all:
#
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} convert_year
	${MAKE} -C xml all
	${MAKE} annotate
	${MAKE} html
	${MAKE} cwb-index


redo:
	${MAKE} annotate
	${MAKE} html
	${MAKE} cwb-index


real-clean:
	${MAKE} clean-xml
	${MAKE} clean-raw




FRTARS = $(wildcard $(CORPUSSRC)/*_fr_txt.tar.gz)
NLTARS = $(wildcard $(CORPUSSRC)/*_nl_txt.tar.gz)

TXTDIRS = $(patsubst %_fr_txt.tar.gz,%,$(FRTARS))

textdirs: $(TXTDIRS)

$(TXTDIRS): %: %_fr_txt.tar.gz %_nl_txt.tar.gz
	mkdir -p $@
	( cd $@; tar -xzf $<; )
	( cd $@; tar -xzf $@_nl_txt.tar.gz; )


# only one text per year

FRYEARTXT = $(addsuffix .fr,$(TXTDIRS))
NLYEARTXT = $(addsuffix .nl,$(TXTDIRS))

YEARALG=$(patsubst $(CORPUSSRC)/%.fr,$(CORPUSXML)/fr-nl/%.xml.gz,$(FRYEARTXT))

convert_year: $(FRTARS) $(NLTARS)
	make textdirs
	make yeartexts
	touch src/fr src/nl
	mkdir -p xml
	make yearalg
	rm -fr $(TXTDIRS)
	rm -f src/*.fr src/*.nl
	mkdir -p raw
	mv xml/?? raw/
	( cd xml; ln -s ../raw/?? . )

yeartexts: $(FRYEARTXT) $(NLYEARTXT)

$(FRYEARTXT): %.fr: %
	find $< -name '*_fr.txt' |\
	sort |\
	xargs cat |\
	recode l1..utf8 > $@

$(NLYEARTXT): %.nl: %
	find $< -name '*_nl.txt' |\
	sort |\
	xargs cat |\
	recode l1..utf8 > $@

yearalg: ${YEARALG}

${YEARALG}: $(CORPUSXML)/fr-nl/%.xml.gz: $(CORPUSSRC)/%.fr $(CORPUSSRC)/%.nl
	( cd xml; \
	  letsmt_convert -i moses -o xces $^ \
	  $(patsubst $(CORPUSXML)/fr-nl/%.xml.gz,%.xml,$@) )
	perl -pi -e 's/\.xml/\.xml.gz/g' $(patsubst %.xml.gz,%.xml,$@)
	gzip $(patsubst %.xml.gz,%.xml,$@)
	gzip $(subst /fr-nl/,/fr/,$(patsubst %.xml.gz,%.xml,$@))
	gzip $(subst /fr-nl/,/nl/,$(patsubst %.xml.gz,%.xml,$@))















# the following would create LOTS of files .....
# (as in the original corpus)


FRTXT = $(patsubst %_fr.txt,%.fr,$(shell find src/ -name '*_fr.txt'))
NLTXT = $(patsubst %_nl.txt,%.nl,$(shell find src/ -name '*_nl.txt'))

ALGFILES = $(patsubst src/%.fr,xml/fr-nl/%.xml.gz,$(FRTXT))


convert_many: $(FRTARS) $(NLTARS)
	make textdirs
	make textfiles
	make moses2xml
	rm -fr $(TXTDIRS)

textfiles: $(FRTXT) $(NLTXT)

moses2xml: ${ALGFILES}

%.fr: %_fr.txt
	recode l1..utf8 < $< > $@

%.fr: %_fr.txt
	recode l1..utf8 < $< > $@

# this doesn't work ....

# ${ALGFILES}: xml/fr-nl/%.xml.gz: src/%.fr src/%.nl
#	letsmt_convert -i moses -o xces $^ $@.xml
#	gzip -c < $@.xml > $@
#	rm -f $@



# include some standard OPUS targets for processing/annotating data

include ../Makefile.annotate
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit


