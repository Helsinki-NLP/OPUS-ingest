# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
		     $(notdir $(wildcard ${CORPUSRAW}/???)) \
		     $(notdir $(wildcard ${CORPUSRAW}/????)))

# VERSION = $(shell date +%F)


## for fetching the previous releases you need to configure allas
##    module load allas
##    allas-conf -k -p project_2003093
##
## after releasing a new version:
## Don't forget to store the project on allas again for next time
##    ${MAKE} -C .. CORPUS=Tatoeba store

all:
	${MAKE} -C .. CORPUS=Tatoeba fetch
	${MAKE} -C src all
	${MAKE} convert
	${MAKE} -C src archive
	${MAKE} xml/Makefile
	mv -f raw/*-* xml/
	${MAKE} -C xml create-align-files
	rm -f log/.tok* log/.*.done
	${MAKE} more

all-job:
	${MAKE} -C .. CORPUS=Tatoeba fetch
	${MAKE} HPC_CORES=8 HPC_MEM=16g HPC_TIME=72:00 all.submit

more:
	${MAKE} annotate
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish

store-tatoeba:
	${MAKE} -C .. CORPUS=Tatoeba store


## temporary fix for a problem created by opus-merge-align
## (multiple closing tags for linkGrp)

FIX_LINKGRP = $(patsubst %.xml.gz,%.old.gz,$(wildcard xml/*.xml.gz))
fix-linkgrp: ${FIX_LINKGRP}
${FIX_LINKGRP}: %.old.gz: %.xml.gz
	mv $< $@
	zcat $@ | uniq | gzip -c > $<
	touch $@


## BEFORE MOVING TO NEW opus2moses:
# 	${MAKE} OPUS2MOSES=scripts/xces2plain moses tmx

## EXTRA stuff:
#	${MAKE} udparse
#	${MAKE} wordalign



# move alignment files for aligning the same language 
# to another directory
# (otherwise things can fail in wordalign, tmx, moses ...)
same-language:
	mkdir -p same-lang
	-for l in ${LANGUAGES}; do \
	  mkdir -p same-lang/$$l-$$l; \
	  mv xml/$$l-$$l/* same-lang/$$l-$$l/;\
	  rmdir xml/$$l-$$l; \
	done

#	  mv xml/$$l-$$l.xml.gz same-lang/$$l-$$l/${VERSION}.xml.gz;\



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
include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize
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
