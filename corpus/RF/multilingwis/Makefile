
include ../Makefile.def
include ../../Makefile.def



LANGPAIRS = ${notdir $(wildcard $(CORPUSWORDALIGN)-ud/*-*)}
ALIGNDBS = ${patsubst %,%.db,${LANGPAIRS}}

OPUS-TOOLS = ${HOME}/appl_taito/tools/OpusTools-perl

ALIGN2DB = ${OPUS-TOOLS}/scripts/multilingwis/align2db.pl
OPUS2MLW = ${OPUS-TOOLS}/scripts/multilingwis/opus2mlw.pl
TAGID2DB = ${OPUS-TOOLS}/scripts/multilingwis/tagid-db.pl

# ALIGN2DB = /homeappl/home/tiedeman/research/nlpl/opus-tools/scripts/multilingwis/align2db.pl
# OPUS2MLW = /homeappl/home/tiedeman/research/nlpl/opus-tools/scripts/multilingwis/opus2mlw.pl
# TAGID2DB = /homeappl/home/tiedeman/research/nlpl/opus-tools/scripts/multilingwis/tagid-db.pl

all: ${CORPUS}.tsv

docids.txt:
	find ../parsed -mindepth 2 -name '*.xml.gz' | \
	sort | nl -w 1 | sed 's#../parsed/##' > $@

sentids.txt:
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<s [^>]*id="[^ ]*"[^>]*>' | \
	sed "s/gz:<s .*id=\"\([^ ]*\)\".*>/gz\t\1/" |\
	nl -w 1 | sed 's#../parsed/##' > $@

wordids.txt:
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<w [^>]*id="[^ ]*"[^>]*>' | \
	sed "s/gz:<w .*id=\"\([^ ]*\)\".*>/gz\t\1/" |\
	nl -w 1 | sed 's#../parsed/##' > $@

docid.db:
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<[ws] [^>]*id="[^ ]*"[^>]*>' | \
	sed 's#../parsed/##' |\
	${TAGID2DB} -d $@ -s 'sentid.db'

sentid.db: docid.db
	@echo "done!"

${ALIGNDBS}:
	${ALIGN2DB} \
		$(CORPUSWORDALIGN)-ud/$(@:.db=)/bitext.xml.gz \
		$(CORPUSWORDALIGN)-ud/$(@:.db=)/model/aligned.grow-diag-final-and.gz

# ${CORPUS}.tsv: docids.txt sentids.txt wordids.txt ${ALIGNDBS}
# 	${OPUS2MLW} $^ > $@

${CORPUS}.tsv: docid.db sentid.db ${ALIGNDBS}
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<s [^>]*id="[^ ]*"[^>]*>' | \
	sed 's#../parsed/##' |\
	${OPUS2MLW} $^ > $@
