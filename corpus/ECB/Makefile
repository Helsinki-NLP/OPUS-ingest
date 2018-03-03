# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

# make all:
#
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} convert
	${MAKE} -C xml all
	${MAKE} tokenize
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw

ORGTMX   = $(wildcard src/*.tmx.xz)
TMX_DONE = $(patsubst %.tmx.xz,%.done,$(ORGTMX))    
XMLFILES = $(patsubst raw/%,xml/%,$(shell find raw -name '*.xml.gz'))


convert: $(TMX_DONE)
	mkdir -p raw xml
	mv ?? raw/
	mv ??-?? xml/
	find raw -name '*.xml' | xargs gzip
	find xml -name '*.xml' | xargs perl -pi -e 's/\.xml/\.xml.gz/g'
	find xml -name '*.xml' | xargs gzip

# convert from TMX to OPUS XML
# the Perl one-liner takes care of '_unicode_...' in the original TMX files

$(TMX_DONE): %.done: %.tmx.xz
	xzcat $< |\
	perl -p -e \
	'use Encode;s/_unicode_([0-9]+)_/encode("utf8",chr($$1))/eg;' > $<.tmx
	letsmt_convert -i tmx -o xces $<.tmx $(patsubst src/%.done,%.xml,$@)
	rm -f $<.tmx
	touch $@

tokenize: ${XMLFILES}

${XMLFILES}: xml/%: raw/%
	mkdir -p `dirname $@`
	zcat $< |\
	perl -e 'while (<>){if (/(<s id="[0-9]+">)(.+)(<\/s>)/){$$a=$$1;$$b=$$2;$$c=$$3;print $$a,"<w>";@w=split(/\s+/,$$b);print join("</w><w>",@w);print "</w>",$$c,"\n";}else{print;}}' |\
	tidy -xml -utf8 -i |\
	gzip -c > $@


# uplug is just too slow for such a simple task ....
#
#	${UPLUG} pre/ws-tok -in $< -out $@



# include some standard OPUS targets for processing/annotating data

include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit




