# -*-makefile-*-
#
# * this makefile should produce gzipped text-files in subdirectories
#   specifying the language of the file (2-letter codes)
# * all text files have to be in UTF-8!!!
# * parallel documents must have the same name!!
#

include ../Makefile.def
include ../../Makefile.def

FILES = 1988 1996
LANGUAGES = de en fr sv

all: ${LANGUAGES}

${LANGUAGES}:
	mkdir -p $@
	for f in ${FILES}; do\
		${MAKE} LANGUAGE=$@ $@/$$f.txt.gz; \
	done


${LANGUAGE}/%.txt.gz: %${LANGUAGE}.txt
	recode l1..utf8 < $< | gzip -c > $@

