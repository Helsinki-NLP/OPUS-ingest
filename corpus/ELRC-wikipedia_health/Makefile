# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TMX format (sentence aligned plain text) to OPUS
#
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#


include Makefile.def
include ../Makefile.def

## all TMX files in the src/ directory

# TMXGZFILES = ${wildcard src/*.tmx.gz}
TMXGZFILES = ${shell find src -name '*.tmx.gz'}


## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign


.PHONY: all
all:
	${MAKE} import
#	${MAKE} extra
	${MAKE} publish

.PHONY: import
import:
	${MAKE} convert
	${MAKE} -C xml create-align-files
	${MAKE} annotate

.PHONY: extra
extra:
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if tmx2opus is not in your PATH
TMX2OPUS = tmx2opus

.PHONY: convert
convert: ${CORPUSRAW}
	${MAKE} xml/Makefile
	-mv -f raw/*-* xml/ 


${CORPUSRAW}: ${TMXGZFILES}
	mkdir -p ${CORPUSRAW}
	( cd ${CORPUSRAW} && \
	  find -L ../src -name '*.tmx.gz' |\
	  xargs zcat |\
	  perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	  ${TMX2OPUS} -u -d -t ${TMPDIR} -o ${CORPUS}.xml.gz )
	mkdir -p ${CORPUSXML}
	-mv -f ${CORPUSRAW}/*-* ${CORPUSXML}/ 
	touch ${CORPUSRAW}








PIVOT ?= en

## link files sorted by pivot language sentence IDs

PIVOT_LINKFILES = ${patsubst %,%.alg,${wildcard ${CORPUSXML}/*${PIVOT}*.xml.gz}}

## all new language combinations

PIVOTED_BITEXTS = ${shell for s in $(filter-out ${PIVOT},${LANGUAGES}); do \
			    for t in $(filter-out ${PIVOT},${LANGUAGES}); do \
			      if [[ "$$t" > "$$s" ]]; then \
			         echo "${CORPUSXML}/xml/$$s-$$t.xml.gz"; \
			      fi \
			    done \
	                  done }


pivoting: ${PIVOTED_BITEXTS}
	${MAKE} delete-empty-bitexts

.INTERMEDIATE: ${PIVOT_LINKFILES}

${PIVOT_LINKFILES}: %.alg: %
	gzip -cd $< | scripts/extract-links.pl -l $(notdir ${<:.xml.gz=}) -c ${PIVOT} | sort -k2,2 -k1,1nr > $@

${PIVOTED_BITEXTS}: ${PIVOT_LINKFILES}
	( s=$(firstword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  t=$(lastword $(subst -, ,${notdir $(@:.xml.gz=)})); \
	  mkdir -p ${CORPUSXML}/$$s-$$t; \
	  scripts/pivot-links.pl -a \
		`ls ${CORPUSXML}/*$$s*.xml.gz.alg | grep '${PIVOT}'` \
		`ls ${CORPUSXML}/*$$t*.xml.gz.alg | grep '${PIVOT}'` \
		$$s/${CORPUS}.xml.gz \
		$$t/${CORPUS}.xml.gz \
	  | gzip -c > ${CORPUSXML}/$$s-$$t/${CORPUS}-pivoted.xml.gz; \
	  ${MAKE} -C ${CORPUSXML} SRC=$$s TRG=$$t create-align-file; )



