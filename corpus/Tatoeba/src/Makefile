
TATOEBA_EXPORTS = http://downloads.tatoeba.org/exports

TATOEBA_DATA = 	sentences.tar.bz2 \
		sentences_detailed.tar.bz2 \
		sentences_CC0.tar.bz2 \
		links.tar.bz2 \
		tags.tar.bz2 \
		user_lists.tar.bz2 \
		sentences_in_lists.tar.bz2 \
		jpn_indices.tar.bz2 \
		sentences_with_audio.tar.bz2 \
		user_languages.tar.bz2 \
		users_sentences.csv


CSVFILES = $(patsubst %.tar.bz2,%.csv.gz,${wildcard *.tar.bz2})

all: fetch


fetch: ${TATOEBA_DATA}
	${MAKE} csv-files
	gzip -f *.csv

csv-files: ${CSVFILES}

archive: ${wildcard *.csv.gz}
	mkdir -p $@
	mv $^ $@/


${CSVFILES}: %.csv.gz: %.tar.bz2
	tar -xf $<
	rm -f $<
	gzip -f $(@:.gz=)

${TATOEBA_DATA}:
	wget ${TATOEBA_EXPORTS}/$@


