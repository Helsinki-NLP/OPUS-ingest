
RAWDIR = ../raw
LANGUAGES = $(sort $(notdir $(wildcard split/??)) $(notdir $(wildcard split/???)))
TIDYXLIFF = $(patsubst %.gz,%.clean.gz,${wildcard xliff/*.xliff.gz})

.PHONY: all
all: split.tgz

split.tgz:
	wget http://casmacat.eu/corpus/global-voices-tar-balls/$@
	${MAKE} split aligned-doc xliff
	${MAKE} convert
	${MAKE} tidy-xliff
	${MAKE} sentalign
	${MAKE} cleanup

.PHONY: convert
convert:
	for l in ${LANGUAGES}; do \
	  ${MAKE} SRC=$$l srcxml; \
	done

.PHONY: cleanup
cleanup:
	rm -fr split aligned-doc xliff
	rm -f xliff.tgz

aligned-doc.tgz xliff.tgz:
	wget http://casmacat.eu/corpus/global-voices-tar-balls/$@

aligned-doc: aligned-doc.tgz
	tar -xzf $<

xliff: xliff.tgz
	tar -xzf $<

split: split.tgz
	tar -xzf $<
	find split -type f | sed 's/^/"/;s/$$/"/'  > split-files.txt
	cat split-files.txt | sed 's/"$$/.txt"/' | tr '|:%' '__' > split-files-clean.txt
	paste -d ' ' split-files.txt split-files-clean.txt | sed 's/^/mv /' > move.sh
	chmod +x move.sh
	./move.sh
	rm -f move.sh split-files.txt split-files-clean.txt


SRCFILES=$(patsubst split/$(SRC)/%.txt,${RAWDIR}/$(SRC)/%.xml.gz,$(wildcard split/$(SRC)/*.txt))
TRGFILES=$(patsubst split/$(TRG)/%.txt,${RAWDIR}/$(TRG)/%.xml.gz,$(wildcard split/$(TRG)/*.txt))


XMLFILES=$(patsubst ${RAWDIR}/$(SRC)/%.xml.gz,${RAWDIR}/$(SRC)/%.xml,$(wildcard ${RAWDIR}/$(SRC)/*.xml.gz))

.PHONY: sentalign
sentalign:
	mkdir -p ../xml
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ $$s != $$t ]; then \
	      if [ ! -e ../xml/$$s-$$t.xml.gz ]; then \
	        if [ ! -e ../xml/$$t-$$s.xml.gz ]; then \
		  perl gv2xces.pl $$s $$t > ../xml/$$s-$$t.xml; \
		  if [ -s ../xml/$$s-$$t.xml ]; then \
			gzip -f ../xml/$$s-$$t.xml; \
		  else \
			rm -f ../xml/$$s-$$t.xml; \
		  fi; \
		fi; \
	      fi \
	    fi \
	  done \
	done


.PHONY: srcxml trgxml
srcxml: $(SRCFILES)
trgxml: $(TRGFILES)



tidy-xliff: ${TIDYXLIFF}

%.xliff.clean: %.xliff.gz
	-gzip -cd < $< | tidy -utf8 -xml -wrap 0 -i -o $@

%.xliff.clean.gz: %.xliff.clean
	if [ -e $< ]; then gzip -f $<; fi


$(SRCFILES):  ${RAWDIR}/$(SRC)/%.xml.gz: split/$(SRC)/%.txt
	mkdir -p ${RAWDIR}/$(SRC)
	./gv2xml.pl < $< | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@

$(TRGFILES):  ${RAWDIR}/$(TRG)/%.xml.gz: split/$(TRG)/%.txt
	mkdir -p ${RAWDIR}/$(TRG)
	./gv2xml.pl < $< | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@

