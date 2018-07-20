# -*-makefile-*-
#
# Makefile for creating "raw" files from annotated ones
# (simply use letsmt_detokenizer)
#
#

ifndef LANGUAGE
  LANGUAGE=en
endif

LANGUAGES=$(notdir $(wildcard ../xml/??) $(wildcard ../xml/??_??) $(wildcard ../xml/???))

XML=$(patsubst ../xml/%,%,$(shell find ../xml/${LANGUAGE} -name '*.xml.gz'))


all: ${LANGUAGES}

${LANGUAGES}:
	make LANGUAGE=$@ detokenize

detokenize: ${XML}

${XML}: %: ../xml/%
	mkdir -p `dirname $@`
	gzip -cd $< > $@.___tmp___
	letsmt_detokenize -l ${LANGUAGE} $@.___tmp___ $@
	rm -f $@.___tmp___
