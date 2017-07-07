# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
		     $(notdir $(wildcard ${CORPUSRAW}/???)) \
		     $(notdir $(wildcard ${CORPUSRAW}/????)))

VERSION = $(shell date +%F)

corpus:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} -C xml corpus
	${MAKE} annotate
	rm -fr data

# make all:
#
# - fetch sources (src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (xml/Makefile)
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} corpus
	${MAKE} web-corpus
	rm -fr data

web-corpus:
	${MAKE} -C xml web-corpus
	${MAKE} sample-files
	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}_backup.php
	${MAKE} html
	cp ${OPUSPUB}/${CORPUS}.php ${OPUSPUB}/${CORPUS}${VERSION}.php

#	${MAKE} cwb-index


# move alignment files for aligning the same language 
# to another directory
# (otherwise things can fail in wordalign, tmx, moses ...)
same-language:
	mkdir -p same-lang
	-for l in ${LANGUAGES}; do \
		mv xml/$$l-$$l.* same-lang/;\
	done


SAMPLEFILES = $(patsubst %.tmx.gz,%_sample.html,\
		$(wildcard ${OPUSHTML}/${CORPUS}/*.tmx.gz))

sample-files: $(SAMPLEFILES)

$(SAMPLEFILES): %_sample.html: %.tmx.gz
	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"' >$@
	echo '"http://www.w3.org/TR/REC-html40/loose.dtd">' >> $@
	echo '<html>' >> $@
	echo '<head>' >> $@
	echo '<title>Untitled Document</title>' >> $@
	echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">' >> $@
	echo '</head>' >> $@
	echo '<body>' >> $@
	echo '<p>' >> $@
	zgrep '</tuv>' $< |\
	sed 's/^.*<seg>//;s#</seg></tuv>#<br/>#' |\
	head -100 |\
	sed ': loop; n; a <hr/>' >> $@
	echo '</body></html/>' >> $@

real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
include ../Makefile.html
include ../Makefile.udparse

# convert all files for all languages (subdirectories in src/)

convert:
	( cd raw; ../scripts/convert_tatoeba.pl \
		../src/sentences.csv \
		../src/links.csv \
		../src/tags.csv )
	-( cd xml; ln -s ../raw/*.xml.gz . )



