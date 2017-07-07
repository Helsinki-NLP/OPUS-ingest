# -*-makefile-*-
#
# create source files from a single tab-separated file
# containing all texts in all languages,
# and move them to language-specific subdirectories
#
# on-line source not available!
#
#

include ../Makefile.def
include ../../Makefile.def

LANGUAGES = en fi fr de sv

all: ${LANGUAGES}

${LANGUAGES}:
	for l in ${LANGUAGES}; do \
	  mkdir $$l; \
	done
	perl ../../../tools/converter/MPC1/makeLanguageFiles.pl MPC1txt.tab ${LANGUAGES}
	for F in ${LANGUAGES}; do \
	  gzip -f $$F/*; \
	done
