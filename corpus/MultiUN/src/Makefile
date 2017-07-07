
SOURCEURL = http://www.euromatrixplus.net/media/un-release
ARCHIVES  = $(patsubst %,multiUN.%.tgz,$(LANGUAGES))
RAWLANGS  = $(patsubst %,raw/%,$(LANGUAGES))

corpus: fetch

fetch: $(ARCHIVES)

$(ARCHIVES):
	wget -q $(SOURCEURL)/$@
