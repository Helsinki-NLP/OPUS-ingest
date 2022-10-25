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
	mkdir -p english/raw
	mv ${CORPUSRAW}/*en* english/raw/
	${MAKE} annotate
	${MAKE} publish

#	${MAKE} moses tmx
#	${MAKE} sample-files


ALLXMLFILES = ${patsubst ${CORPUSRAW}/%,${CORPUSXML}/%,${wildcard ${CORPUSRAW}/*/*.xml.gz}}

tokenize-all: ${ALLXMLFILES}

${CORPUSXML}/%.xml.gz: ${CORPUSRAW}/%.xml.gz
	zcat $< |\
	python3 scripts/opus-tokenize.py \
		-l $(word 1,$(subst /, ,${patsubst ${CORPUSXML}/%,%,$@})) |\
	gzip -c > $@


SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))

sample-files: $(SAMPLEFILES)

## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_DISK=2000 HPC_MEM=16g HPC_TIME=14-00:00 HPC_QUEUE=longrun convert-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src convert
	${MAKE} HPC_CORES=1 HPC_MEM=256g HPC_TIME=3-00:00 pivoting-job.submit

pivoting-job:
	${MAKE} tokenize-jobs
	${MAKE} -C src pivoting
	mkdir -p english/raw english/xml
	-mv ${CORPUSRAW}/*en* english/raw/
	-mv ${CORPUSXML}/en-* english/xml/
	-mv ${CORPUSXML}/*-en english/xml/
	-mv ${CORPUSXML}/*-en.* english/xml/

only-pivoting-job:
	${MAKE} -C src pivoting
	mkdir -p english/raw english/xml
	-mv ${CORPUSRAW}/*en* english/raw/
	-mv ${CORPUSXML}/en-* english/xml/
	-mv ${CORPUSXML}/*-en english/xml/
	-mv ${CORPUSXML}/*-en.* english/xml/

tokenize-jobs:
	mkdir -p log
	for l in $(filter-out en,$(sort $(notdir $(wildcard ${CORPUSRAW}/??)))); do \
	  ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
	  tokenize-job.submit; \
	  rm -f tokenize-job.submit;\
	done

## tokenize and submit wordalign jobs when all languages are done
tokenize-job:
	${MAKE} annotate_files
	if [ `ls log/.*tok* | wc -l` == ${words $(filter-out en,${LANGUAGES})} ]; then \
	  ${MAKE} HPC_CORES=4 HPC_MEM=128g HPC_TIME=72:00 publish.submit; \
	fi


# publish-job:
# 	${MAKE} moses tmx
# 	${MAKE} sample-files
# 	${MAKE} publish
# #	${MAKE} wordalign/Makefile
# #	${MAKE} -C wordalign submit-all
# #	${MAKE} HPC_CORES=2 HPC_MEM=8g HPC_TIME=72:00 udparse.submit



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

include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-simple
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate






## 
## this should work now without specifying
##

## use a different tool
# OPUS2MOSES = opus2bitext

# $(SAMPLEFILES): ${CORPUSPUB}/%_sample.html: ${CORPUSRELEASE}/tmx/%.tmx.gz
# 	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"' >$@
# 	echo '"http://www.w3.org/TR/REC-html40/loose.dtd">' >> $@
# 	echo '<html>' >> $@
# 	echo '<head>' >> $@
# 	echo '<title>Untitled Document</title>' >> $@
# 	echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">' >> $@
# 	echo '</head>' >> $@
# 	echo '<body>' >> $@
# 	echo '<p>' >> $@
# 	zgrep '</tuv>' $< |\
# 	sed 's/^.*<seg>//;s#</seg></tuv>#<br/>#' |\
# 	head -100 |\
# 	sed ': loop; n; a <hr/>' >> $@
# 	echo '</body></html/>' >> $@
# 	chmod 644 $@


FIND_ALGFILE = find ${CORPUSXML} -maxdepth 1 -type f -name '*.xml.gz'
SMALL_CES    = ${shell ${FIND_ALGFILE} -size -50M}
SMALL_INFO   = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${SMALL_CES})

small-infofiles: ${SMALL_INFO}

CESNEW_INFO  = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info-new/%.info,${CES})
CORPUSCOUNTS = ${patsubst %.xml.gz,%.counts.gz,\
		${shell find ${CORPUSXML} -mindepth 2 -type f -name '*.xml.gz'}}

create-ces-info:
	${MAKE} corpuscounts
	${MAKE} new-ces-info

new-ces-info: ${CESNEW_INFO}
corpuscounts: ${CORPUSCOUNTS}

%.counts.gz: %.xml.gz
	@mkdir -p ${dir $@}
	${GZIP} -cd < $< | opus-countwords | grep . | gzip -c > $@

${CORPUSRELEASE}/info-new/%.info: ${CORPUSRELEASE}/xml/%.xml.gz
	mkdir -p ${dir $@}
	${GZCAT} $< |\
	opus-bitextsize -d ${CORPUSXML} > $@
	chmod 644 $@
