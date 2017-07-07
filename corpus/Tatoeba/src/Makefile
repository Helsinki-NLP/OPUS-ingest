

URLS = 	http://tatoeba.org/files/downloads/sentences.csv \
	http://tatoeba.org/files/downloads/links.csv \
	http://tatoeba.org/files/downloads/tags.csv

#	http://tatoeba.org/files/downloads/sentences_detailed.csv


SOURCES = $(patsubst http://tatoeba.org/files/downloads/%,%,$(URLS))

all: $(SOURCES)

$(SOURCES): 
	wget $(patsubst %,http://tatoeba.org/files/downloads/%,$@)

