
include ../../Makefile.def
include ../Makefile.def

PWD         := ${shell pwd}
DOWNLOADURL := https://tilde-model.s3-eu-west-1.amazonaws.com

all: fetch
	${MAKE} convert
	${MAKE} -C .. xml/Makefile
	mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	${MAKE} -C ${CORPUSXML} create-align-files


CONVERTED_DONE = ${patsubst %.tmx.zip,%.done,${wildcard *.tmx.zip}}

.PHONY: convert
convert: ${CONVERTED_DONE}

%.done: %.tmx.zip
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  unzip -p ${PWD}/$< | \
	  tmx2opus -o $(notdir $(@:.done=.xml.gz)) )
	touch $@

EESC = ${shell \
	for s in de en fr; do \
	  for t in bg cs da de el en es et fi fr hr hu is it lt lv mt nl pl pt ro sk sl sv; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo EESC2017.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

RAPID = ${shell \
	for s in de en fr; do \
	  for t in bg cs da de el en es et fi fr hr hu is it lt lv mt nl no pl pt ro sk sl sv; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo rapid2016.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }


ECB = ${shell \
	for s in bg cs da de el en es et fi fr hr hu it lt lv mt nl pl pt ro sk sl; do \
	  for t in cs da de el en es et fi fr hr hu it lt lv mt nl pl pt ro sk sl sv; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo ecb2017.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

EMA = ${shell \
	for s in de en fr; do \
	  for t in bg cs da de el en es et fi fr hr hu is it lt lv mt nl no pl pt ro sk sl sv; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo EMA2016.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

WorldBank = ${shell \
	for s in en; do \
	  for t in es fr hr pl pt ro ru sq sr tr uk; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo worldbank.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

AirBaltic = ${shell \
	for s in de en et fi lt lv ru; do \
	  for t in de en et fi lt lv ru; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo airbaltic.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

LiveRiga = ${shell \
	for s in de en lv ru; do \
	  for t in de en lv ru; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo liveriga.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

CzechTourism = ${shell \
	for s in de en es fr it pl pt ru; do \
	  for t in de en es fr it pl pt ru; do \
	    if [[ "$$s" < "$$t" ]]; then \
		echo czechtourism.$$s-$$t.tmx.zip; \
	    fi \
	  done \
	done }

OTHER = filharmonija.lt.en-lt.tmx.zip mupa.hu.en-hu.tmx.zip fold.en-lv.tmx.zip

TMXFILES = ${EESC} ${RAPID} ${ECB} ${EMA} ${WorldBank} ${AirBaltic} ${LiveRiga} ${CzechTourism} ${OTHER}

.PHONY: fetch
fetch: ${TMXFILES}

${TMXFILES}:
	wget ${DOWNLOADURL}/$@
