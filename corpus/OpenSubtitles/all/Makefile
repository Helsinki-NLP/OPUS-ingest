# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit

## files with all alignments (also alternative ones)
ALLALG = $(patsubst ../xml/%.xml.gz,%.all.xml.gz,${wildcard ../xml/*.xml.gz})

## make files with ALL sentence alignments
all: ${ALLALG}

${ALLALG}: %.all.xml.gz: ../xml/%.xml.gz
	echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >>$@.tmp
	echo '<cesAlign version="1.0">' >> $@.tmp
	zgrep --no-filename 'link' $< >> $@.tmp
	if [ -e ../alt/${@:all.xml.gz=alt.xml.gz} ]; then \
	  zgrep --no-filename 'link' ../alt/${@:all.xml.gz=alt.xml.gz} >> $@.tmp; \
	fi
	echo '</cesAlign>' >> $@.tmp
	gzip $@.tmp
	mv $@.tmp.gz $@

