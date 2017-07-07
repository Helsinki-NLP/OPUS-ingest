
LANGUAGES = cs de en es fr hi ru
SRC = $(firstword $(LANGUAGES))

DEVXML = $(patsubst ../src/dev/%-src.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/dev/*-src.${SRC}.sgm))

TESTXML = $(patsubst ../src/test-full/%-src.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/test-full/*-src.${SRC}.sgm))


all: 
	for l in ${LANGUAGES}; do \
	  ${MAKE} SRC=$$l convert; \
	done

convert: $(DEVXML) $(TESTXML)

$(DEVXML): $(SRC)/%.xml.gz: ../src/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 -q |\
	gzip -c > $@

$(TESTXML): $(SRC)/%.xml.gz: ../src/test-full/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@

es/news-test2008.xml.gz en/news-test2008.xml.gz de/news-test2008.xml.gz: $(SRC)/%.xml.gz: ../src/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#</hl\s*$$#</hl>#g' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@

fr/news-test2008.xml.gz: $(SRC)/%.xml.gz: ../src/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#</hl\s*$$##g' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@

en/newstest2014-ruen.xml.gz: $(SRC)/%.xml.gz: ../src/test-full/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#<security#\&lt;security#' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@
