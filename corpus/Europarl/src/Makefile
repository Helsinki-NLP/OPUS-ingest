



RAWDIR = ../raw
LANGUAGES = $(notdir $(wildcard txt/??))

SRC=bg
TRG=ro

SENTSPLITTER = ./tools/split-sentences-joerg.perl
ALIGNER = ./sentence-align-corpus-joerg.perl


NRJOBS = 4
MAKE_MORE = ${MAKE} -j ${NRJOBS} 


.PHONY: all
all: europarl.tgz tools
	${MAKE} sentalign
	${MAKE} cleanup


.PHONY: cleanup
cleanup:
	rm -fr txt aligned
	rm -f europarl.tgz

europarl.tgz:
	wget http://www.statmt.org/europarl/v7/europarl.tgz

txt: europarl.tgz
	tar -xzf $<

tools.tgz:
	http://www.statmt.org/europarl/v7/tools.tgz

sentence-align-corpus.perl tools: tools.tgz
	tar -xzf $<


SRCFILES=$(patsubst txt/$(SRC)/%.txt,${RAWDIR}/$(SRC)/%.xml.gz,$(wildcard txt/$(SRC)/*.txt))
TRGFILES=$(patsubst txt/$(TRG)/%.txt,${RAWDIR}/$(TRG)/%.xml.gz,$(wildcard txt/$(TRG)/*.txt))


XMLFILES=$(patsubst ${RAWDIR}/$(SRC)/%.xml.gz,${RAWDIR}/$(SRC)/%.xml,$(wildcard ${RAWDIR}/$(SRC)/*.xml.gz))
CESFILES=$(patsubst aligned/${SRC}-${TRG}/$(SRC)/%.txt,${RAWDIR}/$(SRC)-$(TRG)/%.xml.gz,$(wildcard aligned/${SRC}-${TRG}/${SRC}/*.txt))

.PHONY: sentalign
sentalign:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
		if [ "$$s" != "$$t" ] ; then \
		  if [ -d ${RAWDIR}/$$t-$$s ]; then \
			echo "$$t-$$s exists!"; \
		  else \
		    if [ ! -d ${RAWDIR}/$$s-$$t ]; then \
			${MAKE} SRC=$$s TRG=$$t ${RAWDIR}/$$s-$$t; \
		    fi; \
		  fi; \
		fi; \
	  done; \
	done



.PHONY: bitext
bitext: ${RAWDIR}/$(SRC)-$(TRG)

${RAWDIR}/$(SRC)-$(TRG): aligned/${SRC}-${TRG}
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

${RAWDIR}/$(SRC)-$(TRG)/%.xml: aligned/$(SRC)-$(TRG)/$(SRC)/%.txt aligned/$(SRC)-$(TRG)/$(TRG)/%.txt 
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

