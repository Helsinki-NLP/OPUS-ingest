
include ../Makefile.def
include ../Makefile.submit

MTDATA_INDEX = https://raw.githubusercontent.com/thammegowda/mtdata/master/mtdata/index
ELRC_MTDATA  = elrc_share.tsv

ELRC_CORPORA     := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | cut -f3 | sort -u}
ELRC_CORPUS      ?= ${firstword ${ELRC_CORPORA}}
ELRC_NAME        := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | grep '	${ELRC_CORPUS}	' | cut -f4 | head -1}
ELRC_NAME_CLEAN  := ${shell echo ${ELRC_NAME} | tr -cd '0-9a-zA-Z_.-' | cut -f1-3 -d_ | sed -r 's/^(.{20}).*$$/\1/'}
ELRC_DESCRIPTION := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | grep '	${ELRC_CORPUS}	' | cut -f5 | head -1}
ELRC_BROWSE_URL  := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | grep '	${ELRC_CORPUS}	' | cut -f6 | head -1}
ELRC_URL         := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | grep '	${ELRC_CORPUS}	' | cut -f7 | head -1}
ELRC_LICENSE     := ${shell wget -O - -qq ${MTDATA_INDEX}/${ELRC_MTDATA} | grep '	${ELRC_CORPUS}	' | cut -f8 | head -1}

LOAD_MODS = module use -a /projappl/nlpl/software/modules/etc/; \
		module load nlpl-opus nlpl-efmaral nlpl-moses;


PWD         := ${shell pwd}
OPUSHOME    := ${PWD}/../..
CORPUSHOME  := ${PWD}/..
RELEASEHOME := ${PWD}/../../public_html
# TEMPLATEDIR := ${OPUSHOME}/templates/multi-tmx
TEMPLATEDIR := ${OPUSHOME}/templates/tmx


CORPUSNAME  = ELRC-${ELRC_CORPUS}-${ELRC_NAME}
CORPUSDIR   = ${CORPUSHOME}/ELRC-${ELRC_CORPUS}-${ELRC_NAME_CLEAN}



all:
	@for c in ${ELRC_CORPORA}; do \
	  ${MAKE} -s ELRC_CORPUS=$$c corpus; \
	done


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


${ELRC_MTDATA}:
	wget -O $@ ${MTDATA_INDEX}/$@


corpus: ${CORPUSDIR}



SRCHTML = $(subst ",'',${ELRC_DESCRIPTION})   # replace "
EXTRAHTML = ELRC-${ELRC_CORPUS}-${ELRC_NAME} is a public data set distributed by the <a href="https://www.elrc-share.eu">https://www.elrc-share.eu</a>



${CORPUSDIR}:
	cp -R ${TEMPLATEDIR} $@
	mkdir -p $@/src
	wget -O $@/src/data.zip ${ELRC_URL}
	unzip -d $@/src $@/src/data.zip
	find $@/src -name '*.tmx' |\
	perl -e 'use File::Copy;while(<>){chomp;$$i++;move($$_,"$@/src/$$i.tmx");}'
	gzip -f $@/src/*.tmx
	sed 	-e 's#LICENSE = #LICENSE = ${ELRC_LICENSE}#' \
		-e 's#COPYRIGHT = #COPYRIGHT = Check details at <a href="https://www.elrc-share.eu">ELRC share</a>#' \
		-e 's#SRCHTML=.*$$#SRCHTML=${SRCHTML}#' \
		-e 's#EXTRAHTML=.*$$#EXTRAHTML=${EXTRAHTML}#' \
	< ${TEMPLATEDIR}/Makefile.def > $@/Makefile.def
	${MAKE} -C $@ all




move-failed:
	mkdir -p ../../corpus-failed-${shell date "+%Y-%m-%d"}
	for d in ${DATASET_IDS}; do \
	  if [ ! -d ../../corpus/$$d/xml ]; then \
	    echo $$d; \
	    mv -f ../../corpus/$$d ../../corpus-failed-${shell date "+%Y-%m-%d"}/ ; \
	  fi \
	done


${DATASET_IDS}:
	${MAKE} ID=$@ corpus
	touch $@


elrc-website: ${RELEASEHOME}/ELRC.php

${RELEASEHOME}/ELRC.php:
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
	@for i in `seq ${words ${DATASET_IDS}}`; do \
	  if [ -e ${RELEASEHOME}/`echo "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//"`.php ]; then \
	  echo '    <tr>' >> $@; \
	  echo "      <td>$$i</td>" >> $@; \
	  echo -n '      <td><a href="' >> $@; \
	  echo -n "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo -n '.php">' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo -n "${DATASET_IDS}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo '</a></td>' >> $@; \
	  echo -n '      <td>' >> $@; \
	  echo -n "${DATASET_DIRS}" | cut -f$$i -d ' ' | tr "\n\?" '  ' | sed "s/ $$//" >> $@; \
	  echo '</td>' >> $@; \
	  echo -n '      <td>' >> $@; \
	  echo -n "${DATASET_LICENSES}" | cut -f$$i -d ' ' | tr "\n" ' ' | sed "s/ $$//" >> $@; \
	  echo '</td>' >> $@; \
	  echo '    </tr>' >> $@; \
	  fi \
	done
	@echo '  </table>' >> $@
	@echo '</body>' >> $@
	@echo '</html>' >> $@
	@chmod 644 $@
