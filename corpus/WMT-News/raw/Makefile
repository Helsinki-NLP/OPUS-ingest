
LANGUAGES = cs de en es et fi fr gu hi hu it kk lt lv ro ru tr zh
SRC = $(firstword $(LANGUAGES))

DEVSRCXML = $(patsubst ../src/2019/dev/%-src.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/2019/dev/*-src.${SRC}.sgm))
TESTSRCXML = $(patsubst ../src/2019/sgm/%-src.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/2019/sgm/*-src.${SRC}.sgm))

DEVREFXML = $(patsubst ../src/2019/dev/%-ref.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/2019/dev/*-ref.${SRC}.sgm))
TESTREFXML = $(patsubst ../src/2019/sgm/%-ref.$(SRC).sgm,$(SRC)/%.xml.gz,$(wildcard ../src/2019/sgm/*-ref.${SRC}.sgm))


all: 
	for l in ${LANGUAGES}; do \
	  ${MAKE} SRC=$$l convert; \
	done

convert: $(DEVSRCXML) $(TESTSRCXML) \
	$(DEVREFXML) $(TESTREFXML)

$(DEVSRCXML): $(SRC)/%.xml.gz: ../src/2019/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 -q |\
	gzip -c > $@

$(TESTSRCXML): $(SRC)/%.xml.gz: ../src/2019/sgm/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@


$(DEVREFXML): $(SRC)/%.xml.gz: ../src/2019/dev/%-ref.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 -q |\
	gzip -c > $@

$(TESTREFXML): $(SRC)/%.xml.gz: ../src/2019/sgm/%-ref.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@






es/news-test2008.xml.gz en/news-test2008.xml.gz de/news-test2008.xml.gz: $(SRC)/%.xml.gz: ../src/2019/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#</hl\s*$$#</hl>#g' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@

fr/news-test2008.xml.gz: $(SRC)/%.xml.gz: ../src/2019/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#</hl\s*$$##g' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@

en/newstest2014-ruen.xml.gz: $(SRC)/%.xml.gz: ../src/2019/dev/%-src.$(SRC).sgm
	mkdir -p $(dir $@)
	sed 's#<seg #<s #;s#</seg>#</s>#' < $< |\
	sed 's#<security#\&lt;security#' |\
	tidy -xml -utf8 -i -wrap 0 |\
	gzip -c > $@
