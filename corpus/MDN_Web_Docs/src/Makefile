# -*-makefile-*-

include ../Makefile.def
include ../../Makefile.def

.PHONY: all
all: fetch
	${MAKE} convert

fetch:
	git clone https://github.com/mdn/content.git
	git clone https://github.com/mdn/translated-content
	mv content/files/en-us en
	mv translated-content/files/* .
	rm -fr content translated-content
	mv pt-br pt_BR
	mv zh-cn zh_CN
	mv zh-tw zh_TW
	-mv src/ja/orphaned/mozilla/add-ons/webextensions/debugging_\(before_firefox_50\) src/ja/orphaned/mozilla/add-ons/webextensions/debugging_before_firefox_50
	touch $@

XML_FILES = $(patsubst %.md,%.xml.gz,$(shell find . -name '*.md'))

.PHONY: convert
convert: ${XML_FILES}

%.xml.gz: %.md
	@echo '<?xml version="1.0" encoding="UTF-8"?>' > $(@:.gz=)
	@echo '<text>'                                >> $(@:.gz=)
	pandoc --wrap=none -f markdown -t html $<     >> $(@:.gz=)
	@echo '</text>'                               >> $(@:.gz=)
	@${GZIP} $(@:.gz=)
