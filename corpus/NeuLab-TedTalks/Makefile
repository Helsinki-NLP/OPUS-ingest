# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#
# - assumes that there are plain text files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#
# TODO
# - does not work well for multilingual corpora yet
#   (converts for every language pair!)


include Makefile.def
include ../Makefile.def


## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} convert
	${MAKE} annotate
#	${MAKE} udparse
#	${MAKE} wordalign
#	${MAKE} cwb-index
	${MAKE} publish

convert: ${CORPUSRAW}

${CORPUSRAW}: ${CORPUSSRC}/all_talks_train-detok.tsv
	mkdir -p ${CORPUSRAW}
	cd ${CORPUSRAW} && cat $< | ${CORPUSHOME}/scripts/tsv2opus
	find ${CORPUSRAW} -name '*.xml' | xargs gzip -f
	mkdir -p ${CORPUSXML}
	mv ${CORPUSRAW}/*-*.xml.gz ${CORPUSXML}/
	touch $@

${CORPUSSRC}/all_talks_train.tsv:
	mkdir -p ${dir $@}
	wget http://phontron.com/data/ted_talks.tar.gz
	tar -xzf ted_talks.tar.gz -C ${CORPUSSRC}
	rm -f ted_talks.tar.gz

detokenize: ${CORPUSSRC}/all_talks_train-detok.tsv

${CORPUSSRC}/all_talks_train-detok.tsv: ${CORPUSSRC}/all_talks_train.tsv
	scripts/split.pl $<
	for f in `head -1 $<`; do \
	  echo "detokenize $$f"; \
	  ${OPUSTOOLS}/moses-scripts/scripts/tokenizer/detokenizer.perl -l $$f < $$f > $$f.detok; \
	done
	head -1 $< > $@
	paste `head -1 $< | sed 's/	/.detok	/g;s/$$/.detok/'` >> $@
	rm -f ?? ??-?? talk_name
#	rm -f *.detok


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

