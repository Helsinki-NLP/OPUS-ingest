#
# This Makefile is only a temporary fix
# to improve the conversion from srt to xml
#
#

include ../Makefile.def
include ../../Makefile.def


LANGUAGES = $(sort $(wildcard ??) $(wildcard ???) $(wildcard ??_??))
LANGUAGE  = ca

LANG3    = $(shell $(ISO639) $(LANGUAGE))
XMLFILES = $(patsubst %,fixed/%,$(shell find ${LANGUAGE} -name '*.xml.gz'))

FIXEDXML=$(patsubst fixed/%,check/%,\
		$(shell find fixed/${LANGUAGE} -name '*.xml.gz'))

all: fix-all


fix-all:
	for l in ${LANGUAGES}; do \
		make LANGUAGE=$$l fix; \
	done

check-all:
	for l in ${LANGUAGES}; do \
		make LANGUAGE=$$l checks; \
	done


fix: ${XMLFILES}

$(XMLFILES): fixed/%.xml.gz: ../src/%.srt.gz
	mkdir -p $(dir $@)
	mkdir -p $(dir $(patsubst fixed/%,fixed-tok/%,$@))
	gzip -cd $< |\
	srt2xml \
		-l "$(LANG3)" \
		-r $@ \
		-e 'utf8' | \
	tidy -xml -utf8 -i | \
	gzip -c > $(patsubst fixed/%,fixed-tok/%,$@)

checks: ${FIXEDXML}

${FIXEDXML}: check/%: fixed/%
	mkdir -p $(dir $@)
	zgrep '<' $< > $@.1
	zgrep '<' $(patsubst fixed/%,%,$<) > $@.2
	diff $@.1 $@.2 > $@
	rm -f $@.1 $@.2

