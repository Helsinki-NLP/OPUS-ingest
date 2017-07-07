# -*-makefile-*-
#
# get source files and move them to language subdirectories
# create symbolic links from 2-letter codes to 3-letter codes
#
# on-line source do not exist anymore!
#
#

include ../Makefile.def
include ../../Makefile.def

all: unpack

unpack: $(OPUSDATA)/$(CORPUS)/EUconst-html.tar.gz
	tar -xzf $<



#-------------------------
# fetch from the web
# (source does not exist anymore ?!)
#-------------------------

LANGUAGES2 = es cs da de et el en fr ga it lv lt hu mt nl pl pt sk sl fi sv

fetch: ${LANGUAGES2}

${LANGUAGES2}:
	wget -nH --cut-dirs=2 -X smartapi -r http://europa.eu.int/eur-lex/lex/$@/treaties/dat/12004V/htm/12004V.html
	find $@ -type f -name '*.htm' -exec mv {} {}l \;
	mv $@/treaties/dat/12004V/htm/* $@/
	rm -fr $@/treaties
	rm -fr css
	rm -f robots.txt
	( cd $@; rename "s/$@././i" *.html; )


# delete all upper-case language IDs from the file names!
# (usually not necessary: it's done above already ...)

fix_names:
	for l in ${LANGUAGES2}; do \
	  cd $$l; \
	  rename "s/$$l././i" *.html; \
	  cd ..; \
	done


# only if we want links to 3-letter language IDs

links: ${LANGUAGES3}

${LANGUAGES3}:
	ln -s $(shell $(ISO639) $@) $@

