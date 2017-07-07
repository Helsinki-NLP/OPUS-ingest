# -*-makefile-*-
#


include ../Makefile.def

# sentence-align all document pairs
# convert all bitexts to TMX
# convert all bitexts to Moses format

all: corpus web-corpus

corpus: br-fr.xml.gz


br-fr.xml: br-fr
	echo '<?xml version="1.0" encoding="utf-8"?>' >$@
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >> $@
	echo '<cesAlign version="1.0">' >> $@
	zcat br-fr/*.xml.gz | grep 'link' >> $@
	echo '</cesAlign>' >> $@

%.gz: %
	gzip -f $<

br fr:
	ln -s ../raw/$@ $@



web-corpus:
	${MAKE} tmx
	${MAKE} moses


include ../../Makefile.def
include ../../Makefile.html
