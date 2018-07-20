
LANGPAIRS=$(patsubst setimes.%.tmx.gz,../xml/%,$(wildcard *.tmx.gz))
PWD=$(shell pwd)

BASEURL=http://www.nljubesic.net/upload/setimes
LANGS=bg bs el en hr mk ro sq sr tr

.PHONY: all fetch convert


all: fetch 
	make convert

fetch:
	for s in $(LANGS); do \
	  for t in $(LANGS); do \
	    if [ $$s != $$t ]; then \
		if [ ! -e setimes.$$s-$$t.tmx.gz ]; then \
		  if [ ! -e setimes.$$t-$$s.tmx.gz ]; then \
		    wget ${BASEURL}/setimes.$$s-$$t.tmx.gz; \
		  fi \
		fi \
	    fi \
	  done \
	done


convert: $(LANGPAIRS)
	touch ${LANGS}
	mkdir -p ../raw
	-mv -f ../xml/?? ../raw/
	-gzip ../xml/*/*.xml
	-gzip ../raw/*/*.xml


$(LANGPAIRS): ../xml/%: setimes.%.tmx.gz
	mkdir -p ../xml
	( cd ../xml; \
	letsmt_convert -i tmx -o xces $(PWD)/$< $(patsubst %.tmx.gz,%,$<).xml )



# text versions for training/testing langdetect models

langdetect-data:
	for l in ${LANGS}; do \
	  zgrep "xml:lang=\"$$l\"" setimes.bg-$$l.tmx.gz | \
	  sed 's/<[^>]*>//g' |  sed 's/\[[^\]]*\]//g' | \
	  sed 's/\&amp\;/\&/g;s/\&lt\;/\</g;s/\&gt\;/\>/g;' |\
	  sed 's/^ *//;s/ *$$//' | head -5000 > $$l.train; \
	done
	for l in ${LANGS}; do \
	  zgrep "xml:lang=\"$$l\"" setimes.bg-$$l.tmx.gz | \
	  sed 's/<[^>]*>//g' |  sed 's/\[[^\]]*\]//g' | \
	  sed 's/\&amp\;/\&/g;s/\&lt\;/\</g;s/\&gt\;/\>/g;' |\
	  sed 's/^ *//;s/ *$$//' | tail -200 > $$l.test; \
	done
	zgrep "xml:lang=\"bg\"" setimes.bg-en.tmx.gz | \
	  sed 's/<[^>]*>//g' |  sed 's/\[[^\]]*\]//g' | \
	  sed 's/\&amp\;/\&/g;s/\&lt\;/\</g;s/\&gt\;/\>/g;' |\
	  sed 's/^ *//;s/ *$$//' | head -5000 > bg.train
	zgrep "xml:lang=\"bg\"" setimes.bg-en.tmx.gz | \
	  sed 's/<[^>]*>//g' |  sed 's/\[[^\]]*\]//g' | \
	  sed 's/\&amp\;/\&/g;s/\&lt\;/\</g;s/\&gt\;/\>/g;' |\
	  sed 's/^ *//;s/ *$$//' | tail -200 > bg.test


