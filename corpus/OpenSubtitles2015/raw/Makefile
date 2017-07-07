


TIDYXML = $(patsubst %.xml.gz,%.tidy.gz,$(shell find . -name '*.xml.gz' -type f))

all: $(TIDYXML)

$(TIDYXML): %.tidy.gz: %.xml.gz
	zcat $< |\
	tidy -xml -utf8 -wrap 0 | \
	gzip -c > $@
	mv $@ $<

