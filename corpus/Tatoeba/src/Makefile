# -*-makefile-*-
#
#

TATOEBA_EXPORTS = http://downloads.tatoeba.org/exports

## files that we need to download for OPUS
TATOEBA_DATA = 	sentences_detailed.tar.bz2 \
		links.tar.bz2 \
		tags.tar.bz2 \
		sentences_in_lists.tar.bz2

## additional files available from Tatoeba
## (maybe useful for later versions of OPUS?)
TATOEBA_MORE = 	sentences.tar.bz2 \
		sentences_CC0.tar.bz2 \
		user_lists.tar.bz2 \
		jpn_indices.tar.bz2 \
		sentences_with_audio.tar.bz2 \
		user_languages.tar.bz2 \
		users_sentences.csv


CSVFILES = $(patsubst %.tar.bz2,%.csv.gz,${wildcard *.tar.bz2})

.PHONY: all
all: fetch
	${MAKE} sentences_detailed_new.csv.gz

.PHONY: fetch
fetch: ${TATOEBA_DATA}
	${MAKE} csv-files
	gzip -f *.csv

.PHONY: csv-files
csv-files: ${CSVFILES}


## grep the new / modified sentences compared to previsouly archived version
sentences_detailed_new.csv.gz: sentences_detailed.csv.gz
	touch sentences_detailed_old.csv
	if [ -e "archive/sentences_detailed.csv.gz" ]; then \
	  zcat archive/sentences_detailed.csv.gz > sentences_detailed_old.csv; \
	fi
	zcat $< > sentences_detailed_new.csv
	comm -1 -3 sentences_detailed_old.csv sentences_detailed_new.csv |\
	gzip -c > $@
	rm -f sentences_detailed_old.csv sentences_detailed_new.csv

## archive the current version (overwrite previously archived ones)
archive: ${wildcard *.csv.gz}
	mkdir -p $@
	mv -f $^ $@/
	rm -f $@/sentences_detailed_new.csv.gz

## unpack all tar-balls
${CSVFILES}: %.csv.gz: %.tar.bz2
	tar -xf $<
	rm -f $<
	gzip -f $(@:.gz=)

## download all files
${TATOEBA_DATA}:
	wget ${TATOEBA_EXPORTS}/$@


