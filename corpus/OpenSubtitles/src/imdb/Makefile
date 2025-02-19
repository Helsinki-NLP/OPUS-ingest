


IMDB_DATASETS = title.basics.tsv.gz name.basics.tsv.gz title.akas.tsv.gz title.crew.tsv.gz title.episode.tsv.gz title.principals.tsv.gz title.ratings.tsv.gz

all: ${IMDB_DATASETS}

${IMDB_DATASETS}:
	wget https://datasets.imdbws.com/$@
