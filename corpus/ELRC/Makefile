
include ../Makefile.def
include ../Makefile.submit

# TMX_TEMPLATEDIR := ${OPUSHOME}/templates/multi-tmx
TMX_TEMPLATEDIR := ${OPUSHOME}/templates/tmx
TXT_TEMPLATEDIR := ${OPUSHOME}/templates/moses

MTDATA_INDEX    := https://raw.githubusercontent.com/thammegowda/mtdata/master/mtdata/index
ELRC_MTDATA     := elrc_share.tsv
ELRC_MTDATA_URL := ${MTDATA_INDEX}/${ELRC_MTDATA}

ifneq ($(wildcard ${ELRC_MTDATA}),)
  ELRC_CORPORA     := ${shell cut -f3 ${ELRC_MTDATA} | sort -u}
  ELRC_CORPUS      ?= ${firstword ${ELRC_CORPORA}}
  ELRC_NAME        := ${shell grep '	${ELRC_CORPUS}	' ${ELRC_MTDATA} | cut -f4 | head -1}
  ELRC_DESCRIPTION := ${shell grep '	${ELRC_CORPUS}	' ${ELRC_MTDATA} | cut -f5 | head -1}
  ELRC_BROWSE_URL  := ${shell grep '	${ELRC_CORPUS}	' ${ELRC_MTDATA} | cut -f6 | head -1}
  ELRC_URL         := ${shell grep '	${ELRC_CORPUS}	' ${ELRC_MTDATA} | cut -f7 | head -1}
  ELRC_LICENSE     := ${shell grep '	${ELRC_CORPUS}	' ${ELRC_MTDATA} | cut -f8 | head -1}
else
  ELRC_CORPORA     := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | cut -f3 | sort -u}
  ELRC_CORPUS      ?= ${firstword ${ELRC_CORPORA}}
  ELRC_NAME        := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | grep '	${ELRC_CORPUS}	' | cut -f4 | head -1}
  ELRC_DESCRIPTION := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | grep '	${ELRC_CORPUS}	' | cut -f5 | head -1}
  ELRC_BROWSE_URL  := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | grep '	${ELRC_CORPUS}	' | cut -f6 | head -1}
  ELRC_URL         := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | grep '	${ELRC_CORPUS}	' | cut -f7 | head -1}
  ELRC_LICENSE     := ${shell wget -O - -qq ${ELRC_MTDATA_URL} | grep '	${ELRC_CORPUS}	' | cut -f8 | head -1}
endif


ELRC_NAME_CLEAN  := ${shell echo ${ELRC_NAME} | tr -cd '0-9a-zA-Z_.-' | cut -f1-3 -d_ | sed -r 's/^(.{20}).*$$/\1/'}
CORPUSNAME       := ELRC-${ELRC_CORPUS}-${ELRC_NAME_CLEAN}
CORPUSDIR        := ${OPUSCORPORA}/ELRC-${ELRC_CORPUS}-${ELRC_NAME_CLEAN}


## convert all ELRC corpora
all: ${ELRC_MTDATA}
	@for c in ${ELRC_CORPORA}; do \
	  echo "import ELRC $$c"; \
	  ${MAKE} ELRC_CORPUS=$$c corpus; \
	done

corpus: ${CORPUSDIR}


## release all imported data sets
release-all: ${ELRC_MTDATA}
	@for c in ${ELRC_CORPORA}; do \
	  ${MAKE} ELRC_CORPUS=$$c release; \
	done

## make public releases on allas and the OPUS website
release:
	@if [ -e ${OPUSPUB}/${CORPUSNAME} ]; then \
	  echo "release ${CORPUSNAME}"; \
	  ${MAKE} -C ${CORPUSDIR} release; \
	else \
	  echo "nothing to release yet for ${CORPUSNAME}"; \
	fi



## same as all but create individual import jobs
all-jobs: ${ELRC_MTDATA}
	@for c in ${ELRC_CORPORA}; do \
	  ${MAKE} ELRC_CORPUS=$$c import-job; \
	done

## submit a job to import a corpus
import-job:
	@if [ ! -d ${CORPUSDIR} ]; then \
	  echo "create import job for ${CORPUSNAME}"; \
	  ${MAKE} EMAIL= HPC_MEM=16g HPC_TIME=12:00 HPC_CORES=2 corpus.submit; \
	else \
	  echo "${CORPUSNAME} import already done?"; \
	fi

wordalign-job:
	@if [ ! -d ${CORPUSDIR}/wordalign ]; then \
	  echo "create wordalign job for ${CORPUSNAME}"; \
	  ${MAKE} -C ${CORPUSDIR} EMAIL= HPC_MEM=16g HPC_TIME=8:00 HPC_CORES=2 wordalign.submit; \
	else \
	  echo "${CORPUSNAME} wordalign already done?"; \
	fi






print-corpus-info-all:
	@for c in ${ELRC_CORPORA}; do \
	  ${MAKE} -s ELRC_CORPUS=$$c print-corpus-info; \
	  echo ''; \
	done

print-corpus-info:
	@echo "${ELRC_CORPUS}"
	@echo "${ELRC_NAME}"
	@echo "${ELRC_NAME_CLEAN}"
	@echo "$(subst ",'',${ELRC_DESCRIPTION})"   ## replace "
	@echo "${ELRC_BROWSE_URL}"
	@echo "${ELRC_URL}"
	@echo "${ELRC_LICENSE}"
	@echo "import to ${CORPUSDIR}"

elrc-mtdata: ${ELRC_MTDATA}

${ELRC_MTDATA}:
	wget -O $@ ${MTDATA_INDEX}/$@


retry-failed:
	@for c in ${ELRC_CORPORA}; do \
	  ${MAKE} ELRC_CORPUS=$$c restart-import; \
	done

restart-import:
	if [ -d ${CORPUSDIR} ]; then \
	  if [ ! -d ${CORPUSDIR}/xml ]; then \
	    echo "${ELRC_CORPUS} import failed (try to restart in ${CORPUSDIR})"; \
	    ${MAKE} -C ${CORPUSDIR} all; \
	  elif [ ! -e ${OPUSPUB}/${CORPUSNAME}.php ]; then \
	    ${MAKE} -C ${CORPUSDIR} publish; \
	  fi \
	fi


SRCHTML = $(subst ',&apos;,$(subst ",&quot;,${ELRC_DESCRIPTION}))   # replace " and '
EXTRAHTML = ELRC-${ELRC_CORPUS}-${ELRC_NAME} is a public data set distributed by the <a href="${ELRC_BROWSE_URL}">https://www.elrc-share.eu</a>

CITENOTE = Please acknowledge the <a href="${ELRC_BROWSE_URL}">original sources and providers</a> of the data and also <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use the OPUS packages and downloads in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)


${CORPUSDIR}:
	mkdir -p $@/src
	wget -O $@/src/data.zip ${ELRC_URL}
	unzip -d $@/src $@/src/data.zip
	rm -f $@/src/data.zip
	find $@/src -type f |\
	  perl -e 'use File::Copy;while(<>){chomp;$$f=~s/[^a-zA-Z0-9\.\_\-]/\_/g;move($$_,$$f);}'
	find $@/src -type f -exec mv {} $@/src/ \;
	if [ `find $@/src -name '*.tmx' | wc -l` -gt 0 ]; then \
	  cp -R ${TMX_TEMPLATEDIR}/* $@/; \
	else \
	  cp -R ${TXT_TEMPLATEDIR}/* $@/; \
	fi
	if [ `find $@/src -iname '*licen*.pdf' | wc -l` -ne 0 ]; then \
	  find $@/src -iname '*licen*.pdf' -exec mv -f "{}" $@/LICENSE.pdf \; ;\
	fi
	if [ `find $@/src -iname '*licen*.txt' | wc -l` -ne 0 ]; then \
	  find $@/src -iname '*licen*.txt' -exec mv -f "{}" $@/LICENSE \; ;\
	fi
	if [ `find $@/src -iname '*valrep*.pdf' | wc -l` -ne 0 ]; then \
	  find $@/src -iname '*valrep*.pdf' -exec mv -f "{}" $@/VALREP.pdf \; ;\
	fi
	if [ `find $@/src -iname '*meta*.txt' | wc -l` -ne 0 ]; then \
	  find $@/src -iname '*meta*.txt' -exec mv -f "{}" $@/METADATA.txt \; ;\
	fi
	if [ `find $@/src -iname '*readme*' | wc -l` -ne 0 ]; then \
	  find $@/src -iname '*readme*' -exec mv -f "{}" $@/INFO \; ;\
	fi
	sed 	-e 's#LICENSE = #LICENSE = ${ELRC_LICENSE}#' \
		-e 's#COPYRIGHT = #COPYRIGHT = Check details at <a href="${ELRC_BROWSE_URL}">ELRC share</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< $@/Makefile.def > $@/Makefile.new
	echo 'CITENOTE = ${CITENOTE}' >> $@/Makefile.new
	mv -f $@/Makefile.new $@/Makefile.def
	${MAKE} -C $@ all



redo-makefile:
	sed 	-e 's#LICENSE = #LICENSE = ${ELRC_LICENSE}#' \
		-e 's#COPYRIGHT = #COPYRIGHT = Check details at <a href="${ELRC_BROWSE_URL}">ELRC share</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< ${CORPUSDIR}/Makefile.def | grep -v 'CITENOTE' > ${CORPUSDIR}/Makefile.new
	echo 'CITENOTE = ${CITENOTE}' >> ${CORPUSDIR}/Makefile.new
	mv -f ${CORPUSDIR}/Makefile.new ${CORPUSDIR}/Makefile.def

redo-website:
	rm -f ${OPUSPUB}/${CORPUSNAME}.php ${OPUSPUB}/${CORPUSNAME}-v1.php
	${MAKE} -C ${CORPUSDIR} website


move-failed:
	@for c in ${ELRC_CORPORA}; do \
	  echo "check ELRC-$$c"; \
	  ${MAKE} -s ELRC_CORPUS=$$c move-if-failed; \
	done

move-if-failed:
	mkdir -p ../../corpus-failed-${shell date "+%Y-%m-%d"}
	if [ -d ${CORPUSDIR} ]; then \
	  if [ ! -d ${CORPUSDIR}/xml ]; then \
	    echo "${ELRC_CORPUS} import failed (see ${CORPUSDIR})"; \
	    mv -f ${CORPUSDIR} ../../corpus-failed-${shell date "+%Y-%m-%d"}/ ; \
	  fi \
	fi


ELRC_WEBSITES := ${wildcard ${OPUSPUB}/ELRC-*.php}

elrc-website: ${OPUSPUB}/ELRC_SHARE.php

${OPUSPUB}/ELRC_SHARE.php: ${ELRC_WEBSITES}
	${MAKE} ${ELRC_MTDATA}
	@echo '<?php include("count.php"); ?>' > $@
	@echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">' >> $@
	@echo '<html><head><title>ELRC</title>' >> $@
	@echo '  <link rev="made" href="mailto:Joerg%20Tiedemann">' >> $@
	@echo '  <meta name="robots" content="NOFOLLOW">' >> $@
	@echo '  <link rel="stylesheet" type="text/css" href="index.css">' >> $@
	@echo '</head>' >> $@
	@echo '<body>' >> $@
	@echo '  <div class="header">' >> $@
	@echo '    <?php include("header.php"); ?>' >> $@
	@echo '  </div><h1>ELRC public data sets</h1>' >> $@
	@echo '  <table>' >> $@
	@for c in ${ELRC_CORPORA}; do \
	  name=`grep "	$$c	" ${ELRC_MTDATA} | cut -f4 | head -1`; \
	  clean_name=`echo $${name} | tr -cd '0-9a-zA-Z_.-' | cut -f1-3 -d_ | sed -r 's/^(.{20}).*$$/\1/'`; \
	  description=`grep "	$$c	" ${ELRC_MTDATA} | cut -f5 | head -1 | sed 's/"/&quot;/g'`; \
	  license=`grep "	$$c	" ${ELRC_MTDATA} | cut -f8 | head -1`; \
	  corpus="ELRC-$$c-$${clean_name}"; \
	  echo "$${corpus}.php"; \
	  if [ -d ${OPUSPUB}/$${corpus} ]; then \
	    echo '    <tr>'                            >> $@; \
	    echo -n '      <td><a href="'              >> $@; \
	    echo -n "$${corpus}.php\">"                >> $@; \
	    echo -n "$${corpus}"                       >> $@; \
	    echo '</a></td>'                           >> $@; \
	    echo -n '      <td>'                       >> $@; \
	    echo -n "$${description}"                  >> $@; \
	    echo '</td>'                               >> $@; \
	    echo -n '      <td>'                       >> $@; \
	    echo -n "$${license}"                      >> $@; \
	    echo '</td>' >> $@; \
	    echo '    </tr>'                           >> $@; \
	  fi \
	done
	@echo '  </table>' >> $@
	@echo '</body>' >> $@
	@echo '</html>' >> $@
	@chmod 644 $@
	rm -f ${ELRC_MTDATA}
