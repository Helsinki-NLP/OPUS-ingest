# -*-makefile-*-


DOWNLOAD_URL = http://data.statmt.org/gourmet/corpora
RELEASE_URL = https://gourmet-project.eu/data-model-releases
RELEASED_BITEXTS = $(patsubst ${DOWNLOAD_URL}/%.zip,%, \
		${shell wget -q -O - ${RELEASE_URL} | \
			grep '${DOWNLOAD_URL}' | \
			grep href | grep zip | sed 's/^.*href="\([^"]*\)".*$$/\1/'})


.PHONY: all
all: ${RELEASED_BITEXTS}

print-released:
	echo "${RELEASED_BITEXTS}"

fetch-bg-en: bg-en.20190625.tgz

bg-en.20190625.tgz:
	wget -q -O $@ ${DOWNLOAD_URL}/$@

${RELEASED_BITEXTS}:
	mkdir -p ${dir $@}
	wget -q -O $@.zip ${DOWNLOAD_URL}/$@.zip
	unzip -q -o $@.zip
	rm -f $@.zip
	touch $@
