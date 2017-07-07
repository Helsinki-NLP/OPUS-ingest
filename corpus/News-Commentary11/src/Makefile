



RAWDIR = ../raw
LANGUAGES = $(notdir $(wildcard txt/??))

SRC=bg
TRG=ro

SENTSPLITTER = ./tools/split-sentences-joerg.perl
ALIGNER = ./sentence-align-corpus-joerg.perl


NRJOBS = 4
MAKE_MORE = ${MAKE} -j ${NRJOBS} 


.PHONY: all
all: txt
	${MAKE} sentalign
	${MAKE} cleanup

.PHONY: cleanup
cleanup:
	rm -fr txt aligned
	rm -f txt.tgz

txt.tgz:
	wget http://www.casmacat.eu/corpus/news-commentary/txt.tgz

txt: txt.tgz
	tar -xzf $<
	( cd txt; ln -s Arabic ar )
	( cd txt; ln -s Chinese zh )
	( cd txt; ln -s Czech cs )
	( cd txt; ln -s Dutch nl )
	( cd txt; ln -s English en )
	( cd txt; ln -s French fr )
	( cd txt; ln -s German de )
	( cd txt; ln -s Italian it )
	( cd txt; ln -s Japanese ja )
	( cd txt; ln -s Portuguese pt )
	( cd txt; ln -s Russian ru )
	( cd txt; ln -s Spanish es )


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
	./nc2xml.pl -t | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@
	touch $(SRC)

$(TRGFILES): ${RAWDIR}/$(TRG)/%.xml.gz: txt/$(TRG)/%.txt
	mkdir -p ${RAWDIR}/$(TRG)
	${SENTSPLITTER} -l ${TRG} < $< |\
	sed "s/^\#\#\([0-9]*\)\#\# \(.*\)$$/<s id=\"\1\">\n\2\n\<\/s\>/" |\
	./nc2xml.pl -t | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@
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

