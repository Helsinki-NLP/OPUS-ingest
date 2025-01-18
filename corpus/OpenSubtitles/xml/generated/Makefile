#
# remove generated subtitles from zip files
#

include ../../../Makefile.def
include ../../Makefile.def
include ../../../Makefile.submit


LANG_ZIPFILES  := $(notdir $(wildcard ../*.zip))
GENERATED_SUBS := $(wildcard ../../src/generated-subtitles-*)

.PHONY: all
all: ${LANG_ZIPFILES}

generated-subtitles.txt: ${GENERATED_SUBS}
	cat $^ | grep '^[0-9]' | sort -u > $@

%.generated: ../%.zip generated-subtitles.txt
	unzip -Z1 $< | grep '\.xml' | sed 's/\/\([^\/]*\).xml/\/\1.xml	\1/' | sort -k2,2 > $@.all
	join -1 1 -2 2 generated-subtitles.txt $@.all | cut -f2 -d' ' > $@
	rm -f $@.all

%.zip: %.generated
	mkdir -p ${CORPUS}/xml/$(@:.zip=)
	echo "archive of generated subtitles" > ${CORPUS}/xml/$(@:.zip=)/README
	if [ -s $< ]; then cat $< | xargs unzip ../$@; fi
	zip -rq $@ ${CORPUS}/xml/$(@:.zip=)
	find ${CORPUS}/xml/$(@:.zip=) -delete
	if [ -s $< ]; then cat $< | xargs zip ../$@ -d; fi
