

OMDB_DATASETS = all_movies.csv.bz2 all_series.csv.bz2 all_seasons.csv.bz2 all_episodes.csv.bz2 all_games.csv.bz2 all_movieseries.csv.bz2 \
		movie_languages.csv.bz2 movie_countries.csv.bz2 movie_details.csv.bz2 movie_categories.csv.bz2  all_votes.csv.bz2


all: ${OMDB_DATASETS}

${OMDB_DATASETS}:
	wget http://www.omdb.org/data/$@

