
LANGPAIRS=$(patsubst hrenwac.%.tmx.gz,../xml/%,$(wildcard *.tmx.gz))
PWD=$(shell pwd)

BASEURL=http://www.nljubesic.net/upload/hrenwac
LANGS=hr en

.PHONY: all fetch convert


all: fetch 
	${MAKE} convert

fetch: hrenwac.en-hr.tmx.gz

hrenwac.en-hr.tmx.gz:
	wget ${BASEURL}/hrenwac.en-hr.tmx.gz


convert: $(LANGPAIRS)
	touch ${LANGS}
	mkdir -p ../raw
	-mv -f ../xml/?? ../raw/
	-gzip ../xml/*/*.xml
	-gzip ../raw/*/*.xml


$(LANGPAIRS): ../xml/%: hrenwac.%.tmx.gz
	mkdir -p ../xml
	( cd ../xml; \
	letsmt_convert -i tmx -o xces $(PWD)/$< $(patsubst %.tmx.gz,%,$<).xml )


