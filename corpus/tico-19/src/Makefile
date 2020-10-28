
TICO19_URL     = https://tico-19.github.io
TICO19_RELEASE = ${TICO19_URL}/memories.html
TICO19_DATADIR = /data/TM/

TICO19_TMX = $(patsubst ${TICO19_DATADIR}%.zip,%, \
		${shell wget -q -O - ${TICO19_RELEASE} | \
			grep '${TICO19_DATADIR}' | \
			grep tmx | sed 's/^.*href="\([^"]*\)".*$$/\1/'})


all: ${TICO19_TMX}


${TICO19_TMX}:
	rm -f $@.zip
	wget -q ${TICO19_URL}${TICO19_DATADIR}$@.zip
	unzip $@.zip
	rm $@.zip

