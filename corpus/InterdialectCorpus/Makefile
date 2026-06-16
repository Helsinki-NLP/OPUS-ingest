# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in TAB-separated format to OPUS
#
# - assumes that there are tsv files in src/
#   with the file name in the format <corpus.xx-yy.tsv>
#   where <xx> is the source language ID
#         <yy> is the target language ID
#
#   (they may be compressed with gzip - additional suffix .gz is expected)
#
# - assumes that opus-tools are installed (tsv2opus in PATH)
#
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


.PHONY: all
all:
	${MAKE} import
#	${MAKE} extra
	${MAKE} publish

.PHONY: import
import:
	${MAKE} convert
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


.PHONY: fetch
fetch: InterdialectCorpus

InterdialectCorpus:
	git clone https://github.com/KurdishBLARK/InterdialectCorpus.git


## change this if tsv2opus is not in your PATH
TSV2OPUS = tsv2opus


## convert
.PHONY: convert
convert: xml/ckb-en.xml.gz xml/en-kmr.xml.gz

xml/ckb-en.xml.gz: raw/ckb/ckb-en.xml.gz raw/en/ckb-en.xml.gz
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' >  $(@:.gz=) 
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >>  $(@:.gz=) 
	echo '<cesAlign version="1.0">' >>  $(@:.gz=) 
	echo '<linkGrp targType="s" fromDoc="$(patsubst raw/%,%,$(firstword $^))" toDoc="$(patsubst raw/%,%,$(lastword $^))" >' >>  $(@:.gz=)
	zcat  $(firstword $^) | grep 's id' | cut -f2 -d\" > $@.1
	zcat  $(lastword $^)  | grep 's id' | cut -f2 -d\" > $@.2
	paste $@.1 $@.2 -d\; | sed 's/^/<link xtargets="/;s/$$/" \/>/;' >> $(@:.gz=)
	rm -f $@.1 $@.2
	echo '  </linkGrp>' >> $(@:.gz=)
	echo '</cesAlign>' >> $(@:.gz=)
	gzip -f $(@:.gz=)

xml/en-kmr.xml.gz: raw/en/kmr-en.xml.gz raw/kmr/kmr-en.xml.gz
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' >  $(@:.gz=) 
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >>  $(@:.gz=) 
	echo '<cesAlign version="1.0">' >>  $(@:.gz=)
	echo '<linkGrp targType="s" fromDoc="$(patsubst raw/%,%,$(firstword $^))" toDoc="$(patsubst raw/%,%,$(lastword $^))" >' >>  $(@:.gz=)
	zcat  $(firstword $^) | grep 's id' | cut -f2 -d\" > $@.1
	zcat  $(lastword $^)  | grep 's id' | cut -f2 -d\" > $@.2
	paste $@.1 $@.2 -d\; | sed 's/^/<link xtargets="/;s/$$/" \/>/;' >> $(@:.gz=)
	rm -f $@.1 $@.2
	echo '  </linkGrp>' >> $(@:.gz=)
	echo '</cesAlign>' >> $(@:.gz=)
	gzip -f $(@:.gz=)

raw/en/ckb-en.xml.gz:
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' > $(@:.gz=)
	echo '<text>' >> $(@:.gz=)
	cat InterdialectCorpus/CKB-ENG/CKB-ENG.ENG.xml >> $(@:.gz=)
	echo '</text>' >> $(@:.gz=)
	gzip -f $(@:.gz=)

raw/ckb/ckb-en.xml.gz:
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' > $(@:.gz=)
	echo '<text>' >> $(@:.gz=)
	cat InterdialectCorpus/CKB-ENG/CKB-ENG.CKB.xml >> $(@:.gz=)
	echo '</text>' >> $(@:.gz=)
	gzip -f $(@:.gz=)

raw/en/kmr-en.xml.gz:
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' > $(@:.gz=)
	echo '<text>' >> $(@:.gz=)
	cat InterdialectCorpus/KMR-ENG/KMR-ENG.eng.xml >> $(@:.gz=)
	echo '</text>' >> $(@:.gz=)
	gzip -f $(@:.gz=)

raw/kmr/kmr-en.xml.gz:
	mkdir -p $(dir $@)
	echo '<?xml version="1.0" encoding="utf-8"?>' > $(@:.gz=)
	echo '<text>' >> $(@:.gz=)
	cat InterdialectCorpus/KMR-ENG/KMR-ENG.kmr.xml >> $(@:.gz=)
	echo '</text>' >> $(@:.gz=)
	gzip -f $(@:.gz=)


