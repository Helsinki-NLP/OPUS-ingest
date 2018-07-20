
## tidy up XML files from ../xml


XML = $(patsubst ../xml/%,%,$(shell find ../xml/ -name '*.xml.gz'))

all: ${XML}

$(XML): %:../xml/%
	mkdir -p $(dir $@)
	zcat $< | tidy -xml -utf8 -i -wrap -0 | gzip -c > $@

