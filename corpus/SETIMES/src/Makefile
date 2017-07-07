#---------------------------------------------------------------------------
# Copyright (C) 2009 Jörg Tiedemann
# j.tiedemann@rug.nl
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#---------------------------------------------------------------------------



# LANGIDS = ${subst corpora/,,${wildcard corpora/??}}
# LANGIDPAIRS = $(shell echo "${LANGIDS} " | sed 's/ \([^ ]*\) /+\1 /g')

LANGIDS = bg el en hr mk ro sq sr tr

# BITEXTS=${wildcard corpora/??/full/??-??.txt}


# source language and target language ID 
# (will be overwritten when running batch)

SRC = el
TRG = bg

NR_JOBS = 2

MYTIDY = $(TOOLS)/SETIMES/mytidy.pl
FRAN2XML = $(TOOLS)/SETIMES/fran2xml.pl


# plain text file targets in GIZA++/Moses format (1 file per language)

MOSES=$(patsubst %.xml.gz,%.txt.zip,$(wildcard *.xml.gz))
# TMX=$(patsubst %.xml.gz,%.tmx.zip,$(wildcard *.xml.gz))
TMX=$(patsubst %.xml.gz,%.tmx.gz,$(wildcard *.xml.gz))
TMXZIP=$(patsubst %.xml.gz,%.tmx.zip,$(wildcard *.xml.gz))

# Uplug which is used for pre-processing and sentence alignment (wrappers)

UPLUGHOME = $(HOME)/projects/Uplug/uplug
UPLUG = $(UPLUGHOME)/uplug

#----------------------------------------------------------------------------

all: convert moses tmxfiles

getall:
	for s in $(LANGIDS); do \
	  for t in $(LANGIDS); do \
	    if [ $$s != $$t ]; then \
		make SRC=$$s TRG=$$t $$t-$$s.txt; \
	    fi \
	  done \
	done

${TRG}-${SRC}.txt:
	wget http://elx.dlsi.ua.es/~fran/SETIMES/corpora/${SRC}/full/$@

#corpora:
#	wget -r --no-parent --no-host-directories --cut-dirs=2 \
#		http://elx.dlsi.ua.es/~fran/SETIMES/corpora

convert:
	for s in $(LANGIDS); do \
	  for t in $(LANGIDS); do \
	    if [ -e "$$s-$$t.txt" ]; then \
	      if [ ! -e xml/$$t-$$s.xml.gz ]; then \
	        make SRC=$$s TRG=$$t xml/$$s-$$t.xml.gz; \
	      fi \
	    fi; \
	    if [ -e "$$t-$$s.txt" ]; then \
	      if [ ! -e xml/$$s-$$t.xml.gz ]; then \
	        make SRC=$$t TRG=$$s xml/$$t-$$s.xml.gz; \
	      fi \
	    fi \
	  done \
	done
	rm -fr corpora



# convert and tokenize .....


xml/${SRC}-${TRG}.xml.gz: ${SRC}-${TRG}.txt
	mkdir -p xml/${SRC}
	mkdir -p xml/${TRG}
	$(FRAN2XML) xml/${SRC}/${SRC}-${TRG}.xml.gz \
			 xml/${TRG}/${SRC}-${TRG}.xml.gz \
			 $< | \
	gzip -c > $@
	gunzip xml/${SRC}/${SRC}-${TRG}.xml.gz
	gunzip xml/${TRG}/${SRC}-${TRG}.xml.gz
	$(MYTIDY) xml/${SRC}/${SRC}-${TRG}.xml >xml/${SRC}/${SRC}-${TRG}.tidy
	$(MYTIDY) xml/${TRG}/${SRC}-${TRG}.xml >xml/${TRG}/${SRC}-${TRG}.tidy
	if [ -e "${UPLUGHOME}/systems/pre/${SRC}/toktag" ]; then \
		${UPLUG} pre/${SRC}/toktag -in xml/${SRC}/${SRC}-${TRG}.tidy \
			-out xml/${SRC}/${SRC}-${TRG}.xml.gz; \
	else \
		${UPLUG} pre/tok -in xml/${SRC}/${SRC}-${TRG}.tidy \
			-out xml/${SRC}/${SRC}-${TRG}.xml.gz; \
	fi
	if [ -e "${UPLUGHOME}/systems/pre/${TRG}/toktag" ]; then \
		${UPLUG} pre/${TRG}/toktag -in xml/${TRG}/${SRC}-${TRG}.tidy \
			-out xml/${TRG}/${SRC}-${TRG}.xml.gz; \
	else \
		${UPLUG} pre/tok -in xml/${TRG}/${SRC}-${TRG}.tidy \
			-out xml/${TRG}/${SRC}-${TRG}.xml.gz; \
	fi
	rm -f xml/${SRC}/${SRC}-${TRG}.tidy
	rm -f xml/${TRG}/${SRC}-${TRG}.tidy
	rm -f xml/${SRC}/${SRC}-${TRG}.xml
	rm -f xml/${TRG}/${SRC}-${TRG}.xml



xml/${SRC}-${TRG}.old.xml.gz: ${SRC}-${TRG}.txt
	mkdir -p xml/${SRC}
	mkdir -p xml/${TRG}
	$(FRAN2XML) xml/${SRC}/${SRC}-${TRG}.xml.gz \
			 xml/${TRG}/${SRC}-${TRG}.xml.gz \
			 $< | \
	gzip -c > $@
	if [ -e "${UPLUGHOME}/systems/pre/${SRC}/toktag" ]; then \
		${UPLUG} pre/${SRC}/toktag -in xml/${SRC}/${SRC}-${TRG}.xml.gz\
			-out xml/${SRC}/${SRC}-${TRG}.tok.gz; \
	else \
		${UPLUG} pre/tok -in xml/${SRC}/${SRC}-${TRG}.xml.gz \
			-out xml/${SRC}/${SRC}-${TRG}.tok.gz; \
	fi
	if [ -e "${UPLUGHOME}/systems/pre/${TRG}/toktag" ]; then \
		${UPLUG} pre/${TRG}/toktag -in xml/${TRG}/${SRC}-${TRG}.xml.gz\
			-out xml/${TRG}/${SRC}-${TRG}.tok.gz; \
	else \
		${UPLUG} pre/tok -in xml/${TRG}/${SRC}-${TRG}.xml.gz \
			-out xml/${TRG}/${SRC}-${TRG}.tok.gz; \
	fi
	mv xml/${SRC}/${SRC}-${TRG}.tok.gz xml/${SRC}/${SRC}-${TRG}.xml.gz
	mv xml/${TRG}/${SRC}-${TRG}.tok.gz xml/${TRG}/${SRC}-${TRG}.xml.gz




#----------------------------------------------------------------------------
# convert all bitexts to Moses format
#----------------------------------------------------------------------------

moses: $(MOSES)

$(MOSES): %.txt.zip: %.xml.gz
	( S=`echo $< | sed 's/^\(..\).*/\1/'`; \
	  T=`echo $< | sed 's/^..-\(..\).*/\1/'`; \
	  gzip -cd $< |\
	  $(UPLUGHOME)/tools/opus2moses.pl -d . \
		-e $$S-$$T.$$S -f $$S-$$T.$$T > /dev/null 2>/dev/null;\
	  zip $@ $$S-$$T.$$S $$S-$$T.$$T; \
	  rm -f $$S-$$T.$$S $$S-$$T.$$T; )



#----------------------------------------------------------------------------
# convert all bitexts to TMX format
#----------------------------------------------------------------------------

tmxfiles: $(TMX)
tmxzipfiles: $(TMXZIP)

#$(TMX): %.tmx.zip: %.tmx
#	rm -f $@
#	zip $@ $<
#	rm -f $<

%.tmx.gz: %.xml.gz
	${UPLUGHOME}/tools/xces2tmx -d . \
		-s $(shell echo '$@' | sed 's#\(..\)-.*#\1#' ) \
		-t $(shell echo '$@' | sed 's#.*-\(..\).*#\1#' ) \
		$< | gzip -c > $@


%.tmx: %.tmx.gz
	gzip -cd $< > $@

%.tmx.zip: %.tmx
	zip $@ $<
	rm -f $<


# tmxfiles: $(TMX)

# $(TMX): %.tmx.zip: %.tmx
# 	rm -f $@
# 	zip $@ $<
# 	rm -f $<

# %.tmx: %.xml.gz
# 	${UPLUGHOME}/tools/xces2tmx -d . -s ${SRC} -t ${TRG} $< \
# 		> $@ 2> /dev/null 

#$(TMX): %.tmx.zip: %.xml.gz
#	${UPLUGHOME}/tools/xces2tmx -d . -s ${SRC} -t ${TRG} $< 2> /dev/null |\
#	zip $@ -


