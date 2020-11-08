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
	${MAKE} sample-files
	${MAKE} publish


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

OPUS2MOSES := opus2bitext -c 1.04 -C score


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


# ALLXMLFILES = ${patsubst ${CORPUSRAW}/%,${CORPUSXML}/%,${wildcard ${CORPUSRAW}/*/*.xml.gz}}

# annotate tokenize-all: ${ALLXMLFILES}

# ${CORPUSXML}/%.xml.gz: ${CORPUSRAW}/%.xml.gz
# 	zcat $< |\
# 	python3 scripts/opus-tokenize.py \
# 		-l $(word 1,$(subst /, ,${patsubst ${CORPUSXML}/%,%,$@})) |\
# 	gzip -c > $@


SAMPLEFILES = $(patsubst ${CORPUSRELEASE}/tmx/%.tmx.gz,${CORPUSPUB}/%_sample.html,\
		$(wildcard ${CORPUSRELEASE}/tmx/*.tmx.gz))

sample-files: $(SAMPLEFILES)

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
