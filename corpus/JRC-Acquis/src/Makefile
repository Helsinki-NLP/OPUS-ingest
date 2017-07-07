
CORPUS_URL = http://optima.jrc.it/Acquis/JRC-Acquis.3.0/corpus
ALIGN_URL = http://optima.jrc.it/Acquis/JRC-Acquis.3.0/alignmentsHunAlign

LANGUAGES = bg cs da de el en es et fi fr hu it lt lv mt nl pl pt ro sk sl sv

TAR = $(patsubst %,jrc-%.tgz,$(LANGUAGES))
ALGFILES = $(patsubst jrc-%,../xml/%,$(wildcard jrc-*.xml.gz))

SRC = fr
TRG = en

.PHONY: all fetch convert clean

all: fetch
	${MAKE} ${LANGUAGES}
	${MAKE} convert
	rm -fr ${LANGUAGES}

fetch: ${TAR}
	for s in $(sort $(LANGUAGES)); do \
	  for t in $(sort $(LANGUAGES)); do \
	    if [ "$$s" != "$$t" ] ; then \
	      if [ ! -e jrc-$$t-$$s.xml.gz ]; then \
		${MAKE} SRC=$$s TRG=$$t jrc-$$s-$$t.xml.gz; \
	      fi \
	    fi \
	  done \
	done

convert: ${ALGFILES}

$(TAR):
	wget $(CORPUS_URL)/$@

${LANGUAGES}: %: jrc-%.tgz
	tar -xzf $<
	touch $@

jrc-%.xml.gz:
	wget $(ALIGN_URL)/$@

../xml/%.xml.gz: jrc-%.xml.gz
	${MAKE} $(word 2,$(subst -, ,$(subst ., ,$<)))
	${MAKE} $(word 3,$(subst -, ,$(subst ., ,$<)))
	mkdir -p $(dir $@)
	gzip -cd $< | ../scripts/convert-jrc.pl | gzip -c > $@

clean:
	rm -f $(TAR)
	rm -f jrc-*.xml.gz
	rm -fr ${LANGUAGES}
