# -*-makefile-*-

include Makefile.def
include ../Makefile.def

CORPUSHOME       = ${OPUSCORPORA}/${CORPUS}3
CORPUSSRC        = ${CORPUSHOME}/src
CORPUSXML        = ${CORPUSHOME}/xml
CORPUSRAW        = ${CORPUSHOME}/raw
CORPUSPARSED     = ${CORPUSHOME}/parsed
CORPUSHTML       = ${OPUSHTML}/${CORPUS}3

# make all:
#
# - fetch html sources (in src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (in xml/Makefile)



all:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include som standard OPUS variables/targets

include ../Makefile.annotate
# include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit


# convert all files for all languages (subdirectories in src/)

convert: preprocess annotate


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

SRCDIR   = src/${LANGUAGE}
RAWFILES = $(patsubst src/%.html,raw/%.${XMLEXT}, \
		$(shell find ${SRCDIR} -name '*.html'))


# convert all files from source format to "raw-xml"

preprocess_files: ${RAWFILES}

# XMLFIX: a little perl hack to get some additional markup around 
#      free-standing texts in the source XML (add <p> tags!)
#      (not nice but seems to work ....)

XMLFIX=perl -e 'while (<>){s/(\/\S+\>)([^\<]+)(<)/$$1<p>$$2<\/p>$$3/gs;print;}'

raw/${LANGUAGE}/%.${XMLEXT}: src/${LANGUAGE}/%.html
	mkdir -p $(shell dirname $@)
	${XMLFIX} $< |\
	${SENT} -out $@



## a quick fix to add meta data rom old xml files to new ones
## (useful when doing new annotations from raw data)
## (raw data does not include meta information like speaker etc)
##
## assume that old xml files are in ${HOME}/OPUS/corpus/Europarl3/

NEWXMLFILES = $(patsubst xml/%,newxml/%,$(wildcard xml/${LANGUAGE}/*.gz))

fix-meta: ${NEWXMLFILES}

${NEWXMLFILES}: newxml/%: xml/%
	mkdir -p $(dir $@)
	perl tools/fix-meta.pl ${HOME}/OPUS/corpus/Europarl3/$< $< | \
	tidy -xml -utf8 -i -wrap 0 | gzip -c > $@

