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
	${MAKE} convert
	${MAKE} align
	${MAKE} wordalign
	${MAKE} publish

## standard procedures are specified in the following makefiles
##
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.html .......... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing


include ../Makefile.process
include ../Makefile.html
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


# include ../Makefile.tokenize
include ../Makefile.tag
# include ../Makefile.annotate


RAWFILES = ${patsubst src/%.srt,raw/%.xml.gz,${shell find src -name '*.srt'}}

convert: ${RAWFILES}

${RAWFILES}: raw/%.xml.gz: src/%.srt
	mkdir -p ${dir $@}
	mkdir -p ${dir ${patsubst raw/%,xml/%,$@}}
	-iconv -f ${shell file -i $< | sed 's/^.*charset=//'} -t utf8 < $< |\
	dos2unix |\
	srt2xml -l ${word 2,${subst /, ,$@}} \
		-r $(@:.gz=) |\
	tidy -xml -utf8 > ${patsubst raw/%.xml.gz,xml/%.xml,$@}
	gzip -f $(@:.gz=)
	gzip -f ${patsubst raw/%.xml.gz,xml/%.xml,$@}


# ${RAWFILES}: raw/%.xml.gz: src/%.srt
# 	mkdir -p ${dir $@}
# 	mkdir -p ${dir ${patsubst raw/%,xml/%,$@}}
# 	( module load python-env/3.5.3 && \
# 	  python3 scripts/srt2xml.py \
# 		-l ${word 2,${subst /, ,$@}} \
# 		-r $(@:.gz=) -n \
# 		$< ${patsubst raw/%.xml.gz,xml/%.xml,$@} )
# 	gzip -f $(@:.gz=)
# 	gzip -f ${patsubst raw/%.xml.gz,xml/%.xml,$@}

