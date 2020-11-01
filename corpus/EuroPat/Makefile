# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} moses
	${MAKE} copy-tmx-files
	${MAKE} sample-files
	${MAKE} publish



SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))

sample-files: $(SAMPLEFILES)

copy-tmx-files:
	mkdir -p ${CORPUSRELEASE}/tmx
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ "$$s" < "$$t" ]]; then \
	      if [ -e "src/$$s-$$t.${FILTER}.tmx.gz" ]; then \
		rsync src/$$s-$$t.${FILTER}.tmx.gz ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
		touch ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
	      elif [ -e "src/$$t-$$s.${FILTER}.tmx.gz" ]; then \
		rsync src/$$t-$$s.${FILTER}.tmx.gz ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
		touch ${CORPUSRELEASE}/tmx/$$s-$$t.tmx.gz; \
	      fi \
	    fi \
	  done \
	done

## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=16g HPC_TIME=7-00:00 HPC_QUEUE=longrun convert-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src all
	${MAKE} tokenize-jobs

tokenize-jobs:
	for l in $(LANGUAGES); do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
tokenize-job:
	${MAKE} annotate_files
	if [ `ls log/.*tok* | wc -l` == ${words ${LANGUAGES}} ]; then \
	  ${MAKE} HPC_CORES=2 HPC_MEM=64g HPC_TIME=72:00 publish-job.submit; \
	fi

publish-job-no-english:
	${MAKE} LANGUAGES="${RELEASE_LANGS}" publish-job

publish-job:
	${MAKE} moses
	${MAKE} copy-tmx-files
	${MAKE} sample-files
	${MAKE} publish
	${MAKE} wordalign/Makefile
	${MAKE} -C wordalign submit-all
	${MAKE} HPC_CORES=2 HPC_MEM=8g HPC_TIME=72:00 udparse.submit

## standard procedures are specified in the following makefiles
##
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.html .......... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing


include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize-simple . simple regex tokenizer
##   Makefile.tokenize-moses .. moses tokenizer
##   Makefile.tokenize ........ tokenization only
##   Makefile.tag ............. tokenization and PoS tagging (if available)
##   Makefile.annotate ........ all annotation in Uplug

# include ../Makefile.tokenize-simple
include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


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
	chmod 644 $@
