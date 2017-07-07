# -*-makefile-*-
#
# * this makefile should produce gzipped text-files in subdirectories
#   specifying the language of the file (2-letter codes)
# * all text files have to be in UTF-8!!!
# * parallel documents must have the same name!!
#

include ../Makefile.def
include ../../Makefile.def

SRCFILES = $(patsubst %_bre.txt,%.br,$(wildcard *_bre.txt))
TRGFILES = $(patsubst %_fra.txt,%.fr,$(wildcard *_fra.txt))

ALGFILES = $(patsubst %_bre.txt,../xml/br-fr/%.xml.gz,$(wildcard *_bre.txt))


all: normalize convert

convert: $(ALGFILES)


$(ALGFILES): ../xml/br-fr/%.xml.gz: %.br %.fr
	letsmt_convert -i moses -o xces \
		"$(patsubst ../xml/br-fr/%.xml.gz,%.br,$@)" \
		"$(patsubst ../xml/br-fr/%.xml.gz,%.fr,$@)" \
		"$(patsubst ../xml/br-fr/%.xml.gz,%.xml,$@)"
	mkdir -p ../xml/br-fr ../raw/br ../raw/fr
	mv br/*.xml ../raw/br/
	mv fr/*.xml ../raw/fr/
	mv br-fr/*.xml ../xml/br-fr/
	perl -i -p -e 's/\.xml/\.xml\.gz/' ../xml/br-fr/*.xml
	gzip -f ../xml/*/*.xml
	gzip -f ../raw/*/*.xml


$(SRCFILES): %.br: %_bre.txt
	grep . "$<" > "$@"

$(TRGFILES): %.fr: %_fra.txt
	grep . "$<" > "$@"


normalize:
	-for f in `ls *.txt`; do \
		mv "$$f" `echo "$$f" | tr "'" "_"`; \
	done
