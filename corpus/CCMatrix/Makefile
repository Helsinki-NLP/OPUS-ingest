# -*-makefile-*-
#
# set important variables: EDIT Makefile.def !!!
#



include Makefile.def
include ../Makefile.def


# OPUSTOKENIZER = perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' | \
# 		${OPUSTOOLS}/opus-tokenize.py

OPUSTOKENIZER := ${UNICODE_CLEANUP} | ${OPUSTOOLS}/opus-tokenize.py

## make all:
##
## - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
## - prepare, align, annotate corpus (see ../Makefile.process)
## - index, package and publish corpus (see ../Makefile.process)

all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish



SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))



## It's a bit silly but counting takes so much time and resources that we need
## to create several jobs with different resource needs ....

FIND_ALGFILE = find ${CORPUSXML} -maxdepth 1 -type f -name '*.xml.gz'
GIGANTIC_CES = ${shell ${FIND_ALGFILE} -size +1200M}
HUGE_CES     = ${filter-out ${GIGANTIC_CES},${shell ${FIND_ALGFILE} -size +250M}}
BIG_CES      = ${filter-out ${GIGANTIC_CES} ${HUGE_CES},${shell ${FIND_ALGFILE} -size +100M}}
SMALL_CES    = ${shell ${FIND_ALGFILE} -size -50M}
MEDIUM_CES   = ${filter-out ${SMALL_CES},${shell ${FIND_ALGFILE} -size -100M}}

HUGE_LANGPAIR     = $(patsubst ${CORPUSXML}/%.xml.gz,%,${HUGE_CES})
GIGANTIC_LANGPAIR = $(patsubst ${CORPUSXML}/%.xml.gz,%,${GIGANTIC_CES})
GIGANTIC_INFO     = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${GIGANTIC_CES})
HUGE_INFO         = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${HUGE_CES})
BIG_INFO          = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${BIG_CES})
MEDIUM_INFO       = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${MEDIUM_CES})
SMALL_INFO        = $(patsubst ${CORPUSXML}/%.xml.gz,${CORPUSRELEASE}/info/%.info,${SMALL_CES})

check-infofiles:
	@echo "gigantic"
	@for f in ${GIGANTIC_INFO}; do \
	  if [ ! -e $$f ]; then echo "missing $$f"; fi \
	done
	@echo "huge"
	@for f in ${HUGE_INFO}; do \
	  if [ ! -e $$f ]; then echo "missing $$f"; fi \
	done
	@echo "big"
	@for f in ${BIG_INFO}; do \
	  if [ ! -e $$f ]; then echo "missing $$f"; fi \
	done
	@echo "small"
	@for f in ${SMALL_INFO}; do \
	  if [ ! -e $$f ]; then echo "missing $$f"; fi \
	done


infofile-jobs:
	${MAKE} gigantic-infofile-jobs
	${MAKE} huge-infofile-jobs
	${MAKE} HPC_CORES=16 HPC_MEM=128g HPC_TIME=3-00 big-infofiles.submit; \
	${MAKE} HPC_CORES=16 HPC_MEM=128g HPC_TIME=3-00 medium-infofiles.submit; \
	${MAKE} HPC_CORES=16 HPC_MEM=64g HPC_TIME=3-00 small-infofiles.submit; \

gigantic-infofile-jobs:
	for l in $(filter-out en-es en-fr,${GIGANTIC_LANGPAIR}); do \
	  rm -f ces_info_file.submit; \
	  find ${CORPUSRELEASE}/info -name $$l.info -empty -delete; \
	  ${MAKE} HPC_CORES=1 HPC_MEM=64g LANGPAIR=$$l ces_info_file.submit; \
	done
	rm -f ces_info_file.submit
	find ${CORPUSRELEASE}/info -name en-es.info -empty -delete
	${MAKE} HPC_CORES=1 HPC_MEM=128g LANGPAIR=en-es ces_info_file.submit
	rm -f ces_info_file.submit
	find ${CORPUSRELEASE}/info -name en-fr.info -empty -delete
	${MAKE} HPC_CORES=1 HPC_MEM=128g LANGPAIR=en-es ces_info_file.submit


huge-infofile-jobs:
	for l in ${HUGE_LANGPAIR}; do \
	  rm -f ces_info_file.submit; \
	  ${MAKE} HPC_CORES=1 HPC_MEM=32g LANGPAIR=$$l ces_info_file.submit; \
	done

big-infofiles: ${BIG_INFO}
medium-infofiles: ${MEDIUM_INFO}
small-infofiles: ${SMALL_INFO}



sample-files: $(SAMPLEFILES)


## submit a job for fetching and processing all data
all-job:
	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=8g HPC_TIME=3-00:00 convert-job.submit
#	${MAKE} HPC_CORES=1 HPC_DISK=500 HPC_MEM=16g HPC_TIME=7-00:00 HPC_QUEUE=longrun convert-job.submit

## a job for fetching and converting all files
## that will submit tokenization jobs when ready
convert-job:
	${MAKE} -C src all
	${MAKE} tokenize-jobs

tokenize-jobs:
	for l in $(LANGUAGES); do \
	  if [ -d raw/$$l ]; then \
	    if [ ! -e log/.$$l.tokenize.done ]; then \
	      ${MAKE} MAKEARGS="LANGUAGE=$$l" LANGUAGE=$$l \
		HPC_CORES=1 HPC_MEM=4g HPC_TIME=72:00 \
	      tokenize-job.submit; \
	      rm -f tokenize-job.submit;\
	    fi \
	  fi \
	done


## tokenize and submit wordalign jobs when all languages are done
tokenize-job: 
	${MAKE} annotate_files
	if [ `ls log/.*tok* | wc -l` == ${words ${LANGUAGES}} ]; then \
	  ${MAKE} HPC_CORES=8 HPC_MEM=32g HPC_TIME=72:00 HPC_DISK=3000 publish-job.submit; \
	fi

publish-job:
	${MAKE} moses tmx
	${MAKE} sample-files
	${MAKE} publish
#	${MAKE} wordalign/Makefile
#	${MAKE} -C wordalign submit-all

moses-tmx: moses tmx


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
##   Makefile.tokenize ........ tokenization only
##   Makefile.tag ............. tokenization and PoS tagging (if available)
##   Makefile.annotate ........ all annotation in Uplug

include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-simple
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate



## use a different tool
OPUS2MOSES = opus2bitext

## overwrite recipe for sample files
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


# overwrite recipe for creating moses packages
# --> don't read XML files but use the provided TSV files
$(MOSES):
	@${MKDIR} ${dir $@}
	( S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $@)))));\
	  T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $@)))));\
	  BASE=${CORPUS}.$(patsubst %.txt.zip,%,$(notdir $@));\
	  if [ "$$S" == "$$T" ]; then S=$${S}1;T=$${T}2; fi; \
	  mkdir -p ${LOCALTMP}; \
	  wget -qq -O - ${SOURCE_URL}$(patsubst %.txt.zip,%.bitextf.tsv.gz,$(notdir $@)) |\
	  zcat | \
	  tee >(cut -f2 > ${LOCALTMP}/$$BASE.$$S) >(cut -f3 > ${LOCALTMP}/$$BASE.$$T) |\
	  cut -f1 > ${LOCALTMP}/$$BASE.scores; \
	  rm -f $@; \
	  ${MKDIR} ${TMPDIR}/$$BASE; \
	  ${MAKE} PACKAGE="${CORPUS}.$$S-$$T in Moses format" ${TMPDIR}/$$BASE/README; \
	  ${MAKE} ${TMPDIR}/$$BASE/LICENSE; \
	  zip -j ${LOCALTMP}/${notdir $@} ${TMPDIR}/$$BASE/README ${TMPDIR}/$$BASE/LICENSE \
		 ${LOCALTMP}/$$BASE.$$S ${LOCALTMP}/$$BASE.$$T ${LOCALTMP}/$$BASE.scores; \
	  mv -f ${LOCALTMP}/${notdir $@} $@; \
	  rm -f ${LOCALTMP}/$$BASE.$$S ${LOCALTMP}/$$BASE.$$T ${LOCALTMP}/$$BASE.scores;\
	  rm -f ${TMPDIR}/$$BASE/README ${TMPDIR}/$$BASE/LICENSE;\
	  rmdir ${TMPDIR}/$$BASE; )
	sleep 1
	${MKDIR} ${dir ${PACKAGES}}
	echo "$@" | sed "s#${OPUSRELEASE}/##" >> ${PACKAGES}
	chmod 644 $@



## custom recipe for converting into TMX format: 
##    don't sort/uniq (already done in plain text format)!
$(TMX): ${CORPUSRELEASE}/tmx/%.tmx.gz: ${CORPUSRELEASE}/moses/%.txt.zip
	@${MKDIR} ${dir $@}
	-( mkdir -p ${LOCALTMP}/tmx; \
	   cd ${LOCALTMP}/tmx; \
	   unzip $< -x README INFO LICENSE; \
	   S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	   T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	   BASE=${CORPUS}.$(patsubst %.txt.zip,%,$(notdir $<));\
	   SEXT=$$S; TEXT=$$T; \
	   if [ "$$SEXT" == "$$TEXT" ]; then SEXT=$${SEXT}1;TEXT=$${TEXT}2; fi; \
	   paste $$BASE.$$SEXT $$BASE.$$TEXT |\
	   $(TAB2TMX) -s $$S -t $$T |\
	   ${GZIP} -c > $@; \
	   rm -f $$BASE.$$SEXT $$BASE.$$TEXT $$BASE.ids $$BASE.xml; )
	${MKDIR} ${dir ${PACKAGES}}
	echo "$@" | sed "s#${OPUSRELEASE}/##" >> ${PACKAGES}
	chmod 644 $@




FIXED_XML = ${patsubst %.xml.gz,%.fixed,${wildcard raw/*/*.gz}}

${FIXED_XML}: %.fixed: %.xml.gz
	${GZIP} -cd $< | \
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' \
	| perl -CS -pe 's/\&\s*\#\s*160\s*\;/ /g' \
	| perl -pe 's/[\p{C}-[\n\t]]/ /g;' \
	| recode -f utf8..utf16 | recode -f utf16..utf8 |\
	perl -e 'while (<>){if (/^( *\<s [^\>]*>)(.*)(\<\/s\> *$$)/){($$a,$$b,$$c) = ($$1,$$2,$$3); while($$b=~s/\&([^a-z\#0-9]+[^;])/\&amp\;$$1/){1;};$$b=~s/\&([^;]*)$$/\&amp\;$$1/;$$b=~s/\>/\&gt\;/g;$$b=~s/\</\&lt\;/g;$$b=~s/^\s*//;$$b=~s/\s*$$//;print "$$a$$b$$c\n";} else{print;} }' |\
	${GZIP} -c > $@
	mv -f $@ $<
	touch $@

fix-xml: ${FIXED_XML}


#	scripts/decode-html-entities.pl |\

LINKFIXED_XML = ${patsubst %.xml.gz,%.linkfixed,${wildcard xml/*.xml.gz}}
linkfix: ${LINKFIXED_XML}

${LINKFIXED_XML}: %.linkfixed: %.xml.gz
	${GZIP} -cd $< | sed 's#>"#>#' | ${GZIP} -c > $@
	mv -f $@ $<
	touch $@





## fix readme\s in various packages

READMES = ${shell find /projappl/nlpl/data/OPUS/CCMatrix/v1 -name README}

fix-readmes:
	for f in ${READMES}; do \
	  grep -v 'If you use the dataset' $$f |\
	  sed 's#This corpus has been extracted.*$$#This corpus has been extracted from web crawls using the margin-based bitext mining techniques described at https://github.com/facebookresearch/LASER/tree/master/tasks/CCMatrix.\nPlease, cite the following papers:\n * Holger Schwenk, Guillaume Wenzek, Sergey Edunov, Edouard Grave, Armand Joulin and Angela Fan, CCMatrix: Mining Billions of High-Quality Parallel Sentences on the WEB (https://arxiv.org/abs/1911.04944),\n * Angela Fan, Shruti Bhosale, Holger Schwenk, Zhiyi Ma, Ahmed El-Kishky, Siddharth Goyal, Mandeep Baines, Onur Celebi, Guillaume Wenzek, Vishrav Chaudhary, Naman Goyal, Tom Birch, Vitaliy Liptchinsky, Sergey Edunov, Edouard Grave, Michael Auli, and Armand Joulin. Beyond English-Centric Multilingual Machine Translation (https://arxiv.org/abs/2010.11125)\nand also acknowledge OPUS for the service provided here by citing Jörg Tiedemann, Parallel Data, Tools and Interfaces in OPUS (https://www.aclweb.org/anthology/L12-1246/)#'  > $$f.tmp; \
	  mv -f $$f $$f.bak; \
	  mv -f $$f.tmp $$f; \
	done

ZIPFILES = ${shell find /projappl/nlpl/data/OPUS/CCMatrix/v1 -name '*.zip'}

fix-zipfiles:
	for f in ${ZIPFILES}; do \
	  unzip $$f README; \
	  grep -v 'If you use the dataset' README |\
	  sed 's#This corpus has been extracted.*$$#This corpus has been extracted from web crawls using the margin-based bitext mining techniques described at https://github.com/facebookresearch/LASER/tree/master/tasks/CCMatrix.\nPlease, cite the following papers:\n * Holger Schwenk, Guillaume Wenzek, Sergey Edunov, Edouard Grave, Armand Joulin and Angela Fan, CCMatrix: Mining Billions of High-Quality Parallel Sentences on the WEB (https://arxiv.org/abs/1911.04944),\n * Angela Fan, Shruti Bhosale, Holger Schwenk, Zhiyi Ma, Ahmed El-Kishky, Siddharth Goyal, Mandeep Baines, Onur Celebi, Guillaume Wenzek, Vishrav Chaudhary, Naman Goyal, Tom Birch, Vitaliy Liptchinsky, Sergey Edunov, Edouard Grave, Michael Auli, and Armand Joulin. Beyond English-Centric Multilingual Machine Translation (https://arxiv.org/abs/2010.11125)\nand also acknowledge OPUS for the service provided here by citing Jörg Tiedemann, Parallel Data, Tools and Interfaces in OPUS (https://www.aclweb.org/anthology/L12-1246/)#'  > README.tmp; \
	  mv -f README.tmp README; \
	  zip -f $$f README; \
	  rm -f README; \
	done
