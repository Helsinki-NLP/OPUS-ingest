# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
		     $(notdir $(wildcard ${CORPUSRAW}/???)) \
		     $(notdir $(wildcard ${CORPUSRAW}/????)))

# VERSION = $(shell date +%F)

all:
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} -C src archive
	${MAKE} xml/Makefile
	mv -f raw/*-* xml/
	${MAKE} -C xml create-align-files
	${MAKE} annotate
	${MAKE} same-language
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish


## BEFORE MOVING TO NEW opus2moses:
# 	${MAKE} OPUS2MOSES=scripts/xces2plain moses tmx

## EXTRA stuff:
#	${MAKE} udparse
#	${MAKE} wordalign


more:
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish


# move alignment files for aligning the same language 
# to another directory
# (otherwise things can fail in wordalign, tmx, moses ...)
same-language:
	mkdir -p same-lang
	-for l in ${LANGUAGES}; do \
		mv xml/$$l-$$l.* same-lang/;\
	done



## create sample files from TMX rather than from XCES files
## --> more efficient (non-monotonic sentence alignments!)

SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))

sample-files: $(SAMPLEFILES)

real-clean:
	${MAKE} -C xml clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw


# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.release
include ../Makefile.submit
include ../Makefile.udparse


# convert the Tatoeba database to OPUS XML (in raw/)

convert:
	mkdir -p raw xml
	( cd raw; ../scripts/tatoeba2opus.pl \
		../src/sentences_detailed_new.csv.gz \
		../src/links.csv.gz \
		../src/tags.csv.gz \
		../src/sentences_in_lists.csv.gz \
		../src/users_sentences.csv.gz )
	find raw -type f -name '*.xml' | xargs gzip -f


$(SAMPLEFILES): ${CORPUSPUB}/%_sample.html: ${CORPUSRELEASE}/tmx/%.tmx.gz
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
