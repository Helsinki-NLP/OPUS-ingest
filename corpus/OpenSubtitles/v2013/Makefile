# -*-makefile-*-

include Makefile.def
include ../Makefile.def

CORPUSHOME       = ${OPUSCORPORA}/${CORPUS}2013
CORPUSSRC        = ${CORPUSHOME}/src
CORPUSXML        = ${CORPUSHOME}/xml
CORPUSRAW        = ${CORPUSHOME}/raw
CORPUSPARSED     = ${CORPUSHOME}/parsed
CORPUSHTML       = ${OPUSHTML}/${CORPUS}2013

# make all:
#
# - fetch html sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)

## OLD: use OPUSDATA and make src in this makefile
#	${MAKE} src

all:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} link2012
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data

## skip MOSES and TMX files
web:
	${MAKE} MOSES= TMX= website


## create symbolic links to OpenSubtitles2012 files
## -> this is necessary to find alignments also between
##    new files and old ones in the 2012 release
## -> scripts/subalign.pl should then skip linked file pairs


## all subtitle files in OpenSubtitles2012

SUBS12XML = $(subst ../OpenSubtitles2012/,,\
		$(shell find ../OpenSubtitles2012/xml/$(SRC) -mindepth 2 -type f))

SUBS12RAW = $(subst ../OpenSubtitles2012/,,\
		$(shell find ../OpenSubtitles2012/raw/$(SRC) -mindepth 2 -type f))



## make symbolic links to the OpenSubtitles2012 files

.PHONY: link2012 link2012xml link2012raw
link2012:
	for l in ${LANGUAGES}; do \
		${MAKE} SRC=$$l link2012xml link2012raw; \
	done

link2012xml: ${SUBS12XML}
${SUBS12XML}: %:../OpenSubtitles2012/%
	mkdir -p $(dir $@)
	( cd $(dir $@); ln -s ../../../../$< $(notdir $@) )

#	ln -s $(realpath $<) $@

.PHONY: link2012raw
link2012raw: ${SUBS12RAW}
${SUBS12RAW}: %:../OpenSubtitles2012/%
	mkdir -p $(dir $@)
	( cd $(dir $@); ln -s ../../../../$< $(notdir $@) )




refresh_html:
	make html
	rm -f ${OPUSPUB}/OpenSubtitles_v4.php
	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/OpenSubtitles_v4.php


## convert corpus to Moses/TMX format with other types of sentence alignments
## (srtalign = synchronized time-based alignment)
## (hunalign = hunalign with realign flag (using uplug))

moses-srtalign:
	make	CORPUSXML=${PWD}/srtalign \
		CORPUSHTML=${PWD}/srtalign moses

tmx-srtalign:
	make	CORPUSXML=${PWD}/srtalign \
		CORPUSHTML=${PWD}/srtalign tmx

moses-hunalign:
	make	CORPUSXML=${PWD}/hunalign \
		CORPUSHTML=${PWD}/hunalign moses

tmx-hunalign:
	make	CORPUSXML=${PWD}/hunalign \
		CORPUSHTML=${PWD}/hunalign tmx



real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw

# include som standard OPUS variables/targets

include ../Makefile.annotate
include ../Makefile.parse
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release

# convert all files for all languages (subdirectories in src/)

convert: preprocess # annotate


# pre-processing is special for EUonst (from html to xml)
# --> skip conversion from text (do not use standard ../Makefile.preprocess)
# --> skip markup and run only the XMLFIX + sentence markup

preprocess:
	for l in ${LANGUAGES}; do \
		${MAKE} LANGUAGE=$$l preprocess_files; \
	done

clean-raw:
	for l in ${LANGUAGES}; do \
	    if [ -d "raw/$$l" ]; then \
		rm -fr raw/$$l; \
	    fi \
	done

# SRCDIR = home directory of source files for current language
# RAWFILES = XML targets with minimal markup (sentence boundaries)

# set LANGUAGE to a non-existing language
# to make sure that we do not have to do 'find' if we don't need to
LANGUAGE = xxxx

SRCDIR   = src/${LANGUAGE}
XMLFILES =  $(patsubst src/%.srt.gz,xml/%.${XMLEXT}, \
		$(shell find ${SRCDIR} -name '*.srt.gz'))

# convert all files from source format to "raw-xml"

preprocess_files: ${XMLFILES}


# guess character encoding
GUESS_ENC = $(TOOLS)/opus/$(CORPUS)/guess_encoding.pl

# 3-letter code of the current language (needed for some tools)
LANG3 = $(shell $(ISO639) $(LANGUAGE))

# this is a better charset identifier (uses chared)
# with fallback to guess_encoding
CHAR_DETECT = $(TOOLS)/opus/$(CORPUS)/char_detect.pl


UPLUG_OLD_HOME  = ${TOOLS}/public/uplug-old
UPLUG_OLD_TOOLS = ${UPLUG_OLD_HOME}/tools

# SRT2XML = $(UPLUG_OLD_TOOLS)/subtitles/srt2xml.pl
SRT2XML = srt2xml


xml/${LANGUAGE}/%.${XMLEXT}: src/${LANGUAGE}/%.srt.gz
	mkdir -p $(shell dirname $@)
	mkdir -p $(shell dirname $(patsubst xml/%,raw/%,$@))
	gzip -cd $< |\
	$(SRT2XML) \
		-l "$(LANG3)" \
		-r $(patsubst xml/%,raw/%,$@) \
		-e 'utf8' | \
	tidy -xml -utf8 -i | \
	gzip -c > $@


# before: srt files were in different encoding formats
# now: conversion to utf-8 happens in src/

# fromdos is not necessary now anymore (also done in src/)
# 	fromdos |\

# using a charset guesser:
#		-e $(shell $(CHAR_DETECT) $(LANGUAGE) $<) |\


# using the old guesser:
#		-e $(shell $(GUESS_ENC) $(LANG3) $<) |\


SRTFILES   = $(patsubst xml/%.${XMLEXT},src/%.srt.gz,${XMLFILES})


# language detection using the Google API
# (may not be used in batch processes .... too bad!)

LANGID_GOOGLE = ${TOOLS}/opus/${CORPUS}/langdetect.pl
GOOGLEGUESS = $(patsubst %,%.google,${SRTFILES})

detect: ${GOOGLEGUESS}


${GOOGLEGUESS}: %.google: %
	zcat $< | ${LANGID_GOOGLE}

#	# @( L=`zcat $< | ${LANGID_GOOGLE}`; \
#	#   if [ "$$L" != "${LANGUAGE}" ]; then \
#	# 	echo "$< $$L"; \
#	#   fi )




# language detection with textcat

TEXTCAT = ${TOOLS}/public/language_guesser/textcat/text_cat \
		-d ${TOOLS}/public/language_guesser/textcat/LM


TEXTCATGUESS = $(patsubst %,%.textcat,${SRTFILES})

textcat: ${TEXTCATGUESS}

${TEXTCATGUESS}: %.textcat: %
	@echo -n "$<  "
	@zcat $< | ${TEXTCAT} - |\
	sed 's/ or//g'


# test language detecttion with langid.py

LANGID = ${TOOLS}/public/language_guesser/langid/langid.py
LANGIDGUESS = $(patsubst %,%.langid,${SRTFILES})

langid: ${LANGIDGUESS}

langid-server:
	-nohup ${LANGID} --port=9008 -s &

${LANGIDGUESS}: %.langid: %
	@echo -n "$<  "
	@zcat $< | ${LANGID} -

#	@zcat $< | head -200 |\
#	curl -d @- 127.0.1.1:9008/detect |\
#	sed 's/^.*confidence://' |\
#	sed 's/\}.*$$//'



# test language detecttion with cld

CLD = ${TOOLS}/public/language_guesser/cld
CLDGUESS = $(patsubst %,%.cld,${SRTFILES})

cld: ${CLDGUESS}

${CLDGUESS}: %.cld: %
	@echo -n "$<  "
	@zcat $< | ${CLD}



# test language detecttion with langdetect

LANGDETECT = java -jar \
	${TOOLS}/public/language_guesser/langdetect/lib/langdetect.jar \
	--detectlang \
	-d ${TOOLS}/public/language_guesser/langdetect/profiles
LANGDETECTGUESS = $(patsubst %,%.langdetect,${SRTFILES})

langdetect: ${LANGDETECTGUESS}

${LANGDETECTGUESS}: %.langdetect: %
	@zcat $< > /tmp/tttt
	@echo -n "$<  "
	@${LANGDETECT} /tmp/tttt
	@rm /tmp/tttt


LANGIDENT = ${TOOLS}/public/language_guesser/langident.pl
LANGIDENTGUESS = $(patsubst %,%.langident,${SRTFILES})

langident: ${LANGIDENTGUESS}

${LANGIDENTGUESS}: %.langident: %
	@echo -n "$<  "
	@zcat $< | ${LANGIDENT}


LANGDISCR = ${TOOLS}/public/language_guesser/lang_discr/lang_discr.pl
LANGDISCRGUESS = $(patsubst %,%.langdiscr,${SRTFILES})

langdiscr: ${LANGDISCRGUESS}

${LANGDISCRGUESS}: %.langdiscr: %
	@echo -n "$<  "
	@${LANGDISCR} $< hr bs sr




MYLANGID = $(patsubst %,%.mylangid,${SRTFILES})
MYLANGDETECT = ${TOOLS}/opus/${CORPUS}/langident.pl

mylangid: ${MYLANGID}

${MYLANGID}: %.mylangid: %
	@echo -n "$<  "
	@${MYLANGDETECT} $<


SR_HR_DETECT = python ${TOOLS}/public/language_guesser/language_identifier/language_identifier.py ${TOOLS}/public/language_guesser/language_identifier/hr-rs.classifier
SR_HR_GUESS = $(patsubst %,%.srhr,${SRTFILES})

srhr_detect: ${SR_HR_GUESS}

${SR_HR_GUESS}: %.srhr: %
	@zcat $< > /tmp/tttt
	@echo -n "$<  "
	@${SR_HR_DETECT} /tmp/tttt utf8
	@rm /tmp/tttt



# compare my old simple character encoding guesser
# with the new chardet models .....


COMPARE_CHARDET = ${TOOLS}/opus/${CORPUS}/compare_chardetect.pl

compare_chardet:
	for l in ${LANGUAGES}; do \
	  find src/$$l -name '*.srt.gz' | \
	  xargs ${COMPARE_CHARDET} $$l; \
	done
