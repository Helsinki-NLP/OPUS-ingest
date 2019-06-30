



RAWDIR = ../raw
XMLDIR = ../xml

LANGUAGES = $(notdir $(wildcard txt/??))

SRC=bg
TRG=ro

VERSION = 8
PREV_VERSION = 7



SENTSPLITTER = ./tools/split-sentences-joerg.perl
ALIGNER = ./sentence-align-corpus-joerg.perl


NRJOBS = 4
MAKE_MORE = ${MAKE} -j ${NRJOBS} 


.PHONY: all
all: tools europarl-v${VERSION}.tgz
	${MAKE} txt
	for s in ${LANGUAGES}; do \
	  ${MAKE} SRC=$$s srcxml; \
	done
	${MAKE} sentalign
	${MAKE} cleanup


.PHONY: cleanup
cleanup:
	rm -fr txt aligned

.PHONY: fetch
fetch: europarl-v${VERSION}

europarl-v${VERSION}.tgz:
	wget -O $@ http://www.statmt.org/europarl/v${VERSION}/europarl.tgz

europarl-v${VERSION}: %: %.tgz
	mkdir -p $@
	tar -C $@ -xzf $@.tgz

txt:
	${MAKE} fetch
	${MAKE} VERSION=${PREV_VERSION} fetch
	${MAKE} compare
	rm -fr europarl-v${VERSION}
	rm -fr europarl-v${PREV_VERSION}

TXTFILES = $(patsubst europarl-v${VERSION}/%,%,${wildcard europarl-v${VERSION}/txt/??/*.txt})

compare: ${TXTFILES}

${TXTFILES}: %: europarl-v${VERSION}/%
	@mkdir -p ${dir $@}
	@if [ ! -e europarl-v${PREV_VERSION}/$@ ]; then \
	  mv $< $@; \
	elif ! diff -q $< europarl-v${PREV_VERSION}/$@ &>/dev/null; then \
	  echo "$@ differs"; \
	  mv $< $@; \
	fi


## v9 is the same data as v8 but just with doc boundaries ....
europarl-v9:
	mkdir -p $@
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.cs-en.tsv.gz
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.cs-pl.tsv.gz
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.de-en.tsv.gz
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.es-pt.tsv.gz
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.fi-en.tsv.gz
	cd $@ && wget http://www.statmt.org/europarl/v9/training/europarl-v9.lt-en.tsv.gz



tools.tgz:
	http://www.statmt.org/europarl/v8/tools.tgz

sentence-align-corpus.perl tools: tools.tgz
	tar -xzf $<


SRCFILES=$(patsubst txt/$(SRC)/%.txt,${RAWDIR}/$(SRC)/%.xml.gz,$(wildcard txt/$(SRC)/*.txt))
TRGFILES=$(patsubst txt/$(TRG)/%.txt,${RAWDIR}/$(TRG)/%.xml.gz,$(wildcard txt/$(TRG)/*.txt))


XMLFILES=$(patsubst ${RAWDIR}/$(SRC)/%.xml.gz,${RAWDIR}/$(SRC)/%.xml,$(wildcard ${RAWDIR}/$(SRC)/*.xml.gz))
CESFILES=$(patsubst aligned/${SRC}-${TRG}/$(SRC)/%.txt,${XMLDIR}/$(SRC)-$(TRG)/%.xml.gz,$(wildcard aligned/${SRC}-${TRG}/${SRC}/*.txt))

.PHONY: sentalign
sentalign:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
		if [ "$$s" != "$$t" ] ; then \
		  if [ -d ${XMLDIR}/$$t-$$s ]; then \
			echo "$$t-$$s exists!"; \
		  else \
			${MAKE} SRC=$$s TRG=$$t ${XMLDIR}/$$s-$$t; \
		  fi; \
		fi; \
	  done; \
	done


# sentalign:
# 	for s in ${LANGUAGES}; do \
# 	  for t in ${LANGUAGES}; do \
# 		if [ "$$s" != "$$t" ] ; then \
# 		  if [ -d ${RAWDIR}/$$t-$$s ]; then \
# 			echo "$$t-$$s exists!"; \
# 		  else \
# 		    if [ ! -d ${RAWDIR}/$$s-$$t ]; then \
# 			${MAKE} SRC=$$s TRG=$$t ${RAWDIR}/$$s-$$t; \
# 		    fi; \
# 		  fi; \
# 		fi; \
# 	  done; \
# 	done



.PHONY: bitext
bitext: ${XMLDIR}/$(SRC)-$(TRG)

${XMLDIR}/$(SRC)-$(TRG): aligned/${SRC}-${TRG}
	${MAKE_MORE} srcxml
	${MAKE_MORE} trgxml
	mkdir -p $@
	${MAKE} ces

.PHONY: srcxml trgxml
srcxml: $(SRCFILES)
trgxml: $(TRGFILES)


$(XMLFILES): %: %.gz
	gunzip $<
	sed "s/ID=\([0-9]*\)\([ >]\)/ID=\"\1\"\2/g" $@ |\
	gzip -c > $<
	rm $@

$(SRCFILES): ${RAWDIR}/$(SRC)/%.xml.gz: txt/$(SRC)/%.txt
	mkdir -p ${RAWDIR}/$(SRC)
	${SENTSPLITTER} -l ${SRC} < $< |\
	sed "s/^\#\#\([0-9]*\)\#\# \(.*\)$$/<s id=\"\1\">\n\2\n\<\/s\>/" |\
	./europarl2xml.pl -t | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@
	touch $(SRC)

$(TRGFILES): ${RAWDIR}/$(TRG)/%.xml.gz: txt/$(TRG)/%.txt
	mkdir -p ${RAWDIR}/$(TRG)
	${SENTSPLITTER} -l ${TRG} < $< |\
	sed "s/^\#\#\([0-9]*\)\#\# \(.*\)$$/<s id=\"\1\">\n\2\n\<\/s\>/" |\
	./europarl2xml.pl -t | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@
	touch $(TRG)


.PHONY: ces
ces: $(CESFILES)

$(CESFILES): %.xml.gz: %.xml
	gzip -f $<

${XMLDIR}/$(SRC)-$(TRG)/%.xml: aligned/$(SRC)-$(TRG)/$(SRC)/%.txt aligned/$(SRC)-$(TRG)/$(TRG)/%.txt 
	grep -v '^<' $< |\
        perl -e 'while(<>){while(/\#\#([0-9][0-9]*)\#\#/g){print "$$1 ";}print "\n"}' > $@.src.ids
	grep -v '^<' $^ |\
	grep -v $< | cut -f2 -d ':' | \
        perl -e 'while(<>){while(/\#\#([0-9][0-9]*)\#\#/g){print "$$1 ";}print "\n"}' > $@.trg.ids
	echo '<?xml version="1.0" encoding="utf-8"?>' > $@
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' >> $@
	echo '<cesAlign version="1.0">' >> $@
	echo -n "<linkGrp targType=\"s\" fromDoc=\"" >> $@
	echo -n "$^" | \
	sed 's#aligned/$(SRC)-$(TRG)/##g;s/\.txt/.xml.gz/g;s/  */\" toDoc=\"/' >> $@
	echo "\">" >> $@
	paste -d ';' $@.src.ids $@.trg.ids |\
	sed 's/ ;/;/;s/ $$//;s/^/<link xtargets="/;s#$$#" />#;' >> $@
	echo '</linkGrp>' >> $@
	echo '</cesAlign>' >>$@
	rm -f $@.src.ids
	rm -f $@.trg.ids
	rm -f $^

aligned/$(SRC)-$(TRG)/$(SRC)/%.xml.gz: aligned/$(SRC)-$(TRG)

aligned/$(SRC)-$(TRG)/$(TRG)/%.xml.gz: aligned/$(SRC)-$(TRG)

%.xml.gz: %.xml
	gzip -f $<

aligned/${SRC}-${TRG}: txt/${SRC} txt/${TRG}
	${ALIGNER} ${SRC} ${TRG}


include ../../Makefile.submit