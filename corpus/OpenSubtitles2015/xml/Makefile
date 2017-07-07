# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def

# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters

# SENTALIGN  = ${TOOLS}/opus/${CORPUS}/subalign.pl -t 0.5 -a 2


## NEW for 2013: add -L to skip pairs of symbolic links!
## --> at least one file has to be a new one (src or trg)
## NEW for 2015: do not skip pairs of symbolic links
## --> re-do alignment from scratch! (because there was a problem with 2013)
## - use OpenSubtitles2012 dictionaries for lexical matching

SENTALIGN  = ../scripts/subalign.pl -t 0.5 -a 2 \
		-r '-b -i 5 -m 10 -d /home/opus/OPUS/corpus/OpenSubtitles2012/dic/${SRC}-${TRG}.dic' -m 10


LANGUAGES = $(sort $(wildcard ??) $(wildcard ??_??))


#
# phony language targets ...
#
# ALLSRC - all possible source languages
# ALLTRG - all possible target languages (same as ALLSRC)
#
# LANGUAGES comes from ../../Makefile.def, should be sorted alphabetically

ALLSRC = $(addsuffix .src,$(LANGUAGES))
ALLTRG = $(addsuffix .trg,$(LANGUAGES))

# make all:
#
# - for all possible source languages
#   - for all possible target languages
#     - align all source files to appropriate target language files
#       (only if the target language is not yet aligned to the source language)
# sentence alignments will be in one file per language pair (SRCTRG.xml.gz)
# (but also in indivudal files for each language pair and file pair)
#


# 1) align with quite high score threshold but no synchronization
# 2) align remaining stuff with lower threshold but synchronization

NRJOBS = 4

all:
	make all-align



# all: all-align

all-align: ${ALLSRC}

clean-align:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -d "$$s-$$t" ]; then \
		rm -fr $$s-$$t; \
		rm -f $$s-$$t.xml; \
	    fi \
	  done \
	done


# SRC - current source language (take first if not set)
# TRG - current target language (take last if not set)

ifndef SRC
  SRC=$(firstword ${LANGUAGES})
endif
ifndef TRG
  TRG=$(lastword ${LANGUAGES})
endif

# language ID's sorted alphabetically

SORTSRC = $(firstword $(sort ${SRC} ${TRG}))
SORTTRG = $(lastword $(sort ${SRC} ${TRG}))

## align all files for the current language pair
## (if not already aligned in opposite direction)

align:
	if [ "${SRC}" != "${TRG}" ]; then \
	  ${MAKE} \
		SRC=$(SORTSRC) TRG=$(SORTTRG) \
		$(SORTSRC)-$(SORTTRG).xml.gz; \
	fi


## call 'make $ALLTRG' for all languages once as source language

$(ALLSRC): %.src: %
	${MAKE} SRC=$< ${ALLTRG}


## for all languages as target language: align to current source language

alltrg: $(ALLTRG)

$(ALLTRG): %.trg: %
	${MAKE} SRC=$(SRC) TRG=$< align



# all alignment file targets for the current language pair:
#
# files with the same name are parallel documents!
# --> grep those and make them alignment targets!


ALGFILES = $(addprefix $(SRC)-$(TRG)/,\
	   $(shell find $(SRC)/ $(TRG)/ -maxdepth 2 -mindepth 2 -type d \
			-printf "%P\n" | sort | uniq -c | \
			grep '^ *2 *' | sed 's/^ *2 *//'))

## this is the final target (all sentence alignments in one file)
## NOTE: I removed the immediate dependency on ${ALGFILES} because
##       the makefile would redo a lot of things otherwise
##       (trying to align movies for which no good match was found before
##        which means that the align directory is removed)
## --> call 'make align-files' instead ....

${SRC}-${TRG}.xml.gz: 
	make -j ${NRJOBS} align-files
	-( find ${SRC}-${TRG} -type f -name '*.xml.gz' | sort |\
		xargs zgrep --no-filename 'link' >> $@.links )
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.links >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip $@.tmp; \
	  mv $@.tmp.gz $@; \
	fi
	rm -f $@.links
	rm -fr ${SRC}-${TRG}


align-files: ${ALGFILES}
	-find ${SRC}-${TRG} -type d -empty -exec rmdir {} \;

# sentence alignment for each movie

${ALGFILES}: ${SRC}-${TRG}/%: ${SRC}/% ${TRG}/%
	${SENTALIGN} $< $(patsubst ${SRC}/%,${TRG}/%,$<)



ALLCESFILES=$(wildcard *.xml.gz)

remove_empty: remove_empty_align remove_empty_dir

remove_empty_align:
	for f in ${ALLCESFILES}; do \
	  zgrep '<link ' $$f | head -1 > $$f.links; \
	  if [ ! -s $$f.links ]; then \
		echo "$$f is empty! --> remove"; \
		rm -f $$f; \
	  fi; \
	  rm -f $$f.links; \
	done

remove_empty_dir:
	find . -type d -empty | xargs rmdir







fix-all-align-files:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
		make SRC=$$s TRG=$$t fix-align-files; \
	  done \
	done

fix-align-files:
	if [ "${SRC}" != "${TRG}" ]; then \
	  if [ -d "${SRC}-${TRG}" ]; then \
	find ${SRC}-${TRG} -type f -name '*.xml.gz' |\
		xargs zgrep --no-filename 'link' >> ${SRC}-${TRG}.links; \
	if [ -s ${SRC}-${TRG}.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >${SRC}-${TRG}.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>${SRC}-${TRG}.tmp; \
	  echo '<cesAlign version="1.0">' >> ${SRC}-${TRG}.tmp; \
	  cat ${SRC}-${TRG}.links >> ${SRC}-${TRG}.tmp; \
	  echo '</cesAlign>' >> ${SRC}-${TRG}.tmp; \
	  gzip ${SRC}-${TRG}.tmp; \
	  mv ${SRC}-${TRG}.tmp.gz ${SRC}-${TRG}.xml.gz; \
	fi; \
	rm -f ${SRC}-${TRG}.links; \
	  fi; \
	fi
