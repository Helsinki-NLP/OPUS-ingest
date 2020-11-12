
include ../Makefile.def
include ../../Makefile.def

RAWDIR    = ../raw
LANGUAGES = $(sort $(notdir $(wildcard split/??)) $(notdir $(wildcard split/???))\
		   $(notdir $(wildcard ${RAWDIR}/??)) $(notdir $(wildcard ${RAWDIR}/???)))

## homedir for the CASMACAT downloads
# CASMACAT = http://casmacat.eu/corpus/global-voices-tar-balls-${VERSION}
CASMACAT = http://casmacat.eu/corpus/global-voices-tar-balls


.PHONY: all
all: ${VERSION}.done

${VERSION}.done:
	${MAKE} convert
	${MAKE} sentalign
	${MAKE} cleanup
	touch $@


.PHONY: convert
convert: convert-${VERSION}.done

convert-${VERSION}.done:
	${MAKE} split
	${MAKE} convert-files
	touch $@

.PHONY: convert-files
convert-files:
	for l in ${LANGUAGES}; do \
	  echo "${MAKE} SRC=$$l srcxml"; \
	  ${MAKE} SRC=$$l srcxml; \
	done



#	${MAKE} split

convert-elkosq:
	find split/ko -type f | sed 's/^/"/;s/$$/"/'  > split-files.txt
	cat split-files.txt | sed 's/.txt.txt"/.txt"/' | tr '|:%&;' '____' > split-files-clean.txt
	paste -d ' ' split-files.txt split-files-clean.txt | sed 's/^/mv /' > move.sh
	chmod +x move.sh
	./move.sh
	${MAKE} SRC=ko srcxml; \




.PHONY: cleanup
cleanup:
	rm -fr split aligned-doc xliff
	rm -f xliff.tgz


split.tgz aligned-doc.tgz xliff.tgz:
	wget ${CASMACAT}/$@

aligned-doc: aligned-doc.tgz
	tar -xzf $<

xliff: xliff.tgz
	tar -xzf $<

split: split.tgz
	tar -xzf $<
	find split -type f | sed 's/^/"/;s/$$/"/'  > split-files.txt
	cat split-files.txt | sed 's/"$$/.txt"/' | sed 's/.txt.txt"/.txt"/' | \
	tr '|:%&;' '____' > split-files-clean.txt
	paste -d ' ' split-files.txt split-files-clean.txt | sed 's/^/mv /' > move.sh
	chmod +x move.sh
	./move.sh
	rm -f move.sh split-files.txt split-files-clean.txt
	touch $@


SRCFILES=$(sort $(patsubst split/$(SRC)/%.txt,${RAWDIR}/$(SRC)/%.xml.gz,$(wildcard split/$(SRC)/*.txt)))
TRGFILES=$(sort $(patsubst split/$(TRG)/%.txt,${RAWDIR}/$(TRG)/%.xml.gz,$(wildcard split/$(TRG)/*.txt)))

XMLFILES=$(patsubst ${RAWDIR}/$(SRC)/%.xml.gz,${RAWDIR}/$(SRC)/%.xml,$(wildcard ${RAWDIR}/$(SRC)/*.xml.gz))

.PHONY: sentalign
sentalign: sentalign-${VERSION}.done

sentalign-${VERSION}.done:
	${MAKE} aligned-doc xliff
	${MAKE} tidy-xliff
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
	touch $@


.PHONY: srcxml trgxml
srcxml: $(SRCFILES)
trgxml: $(TRGFILES)


TIDYXLIFF = $(patsubst %.gz,%.clean.gz,${wildcard xliff/*.xliff.gz})

tidy-xliff: ${TIDYXLIFF}

%.xliff.clean: %.xliff.gz
	-gzip -cd < $< | tidy -utf8 -xml -wrap 0 -i -o $@

%.xliff.clean.gz: %.xliff.clean
	if [ -e $< ]; then gzip -f $<; fi


# $(SRCFILES):  
${RAWDIR}/$(SRC)/%.xml.gz: split/$(SRC)/%.txt
	mkdir -p ${RAWDIR}/$(SRC)
	./gv2xml.pl < $< | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@

$(TRGFILES):  ${RAWDIR}/$(TRG)/%.xml.gz: split/$(TRG)/%.txt
	mkdir -p ${RAWDIR}/$(TRG)
	./gv2xml.pl < $< | tidy -utf8 -xml -wrap 0 -i | gzip -c > $@



include ../../Makefile.submit
