# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def

# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters

## old:
# SENTALIGN  = ${TOOLS}/opus/${CORPUS}/subalign.pl -t 0.5 -a 2

## - use OpenSubtitles2012 dictionaries for lexical matching
SENTALIGN  = ../scripts/subalign.pl -t 0.5 -a 0.75 \
		-r '-b -i 5 -m 10 -d /usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2012/dic/${SRC}-${TRG}.dic' -m 10


# all language sub directories
#
# LANGUAGES = $(sort $(wildcard ??) $(wildcard ??_??))

# pre-defined list of languages
# (useful if they do not exist here yet)

LANGUAGES=af ar bg bn br bs ca cs da de el en eo es et eu fa fi fr gl he hi hr hu hy is id it ja ka kk ko lt lv mk ml ms nl no pl pt pt_br ro ru si sk sl sq sr sv ta te th tl tr uk ur vi zh zh_en zh_zh zh_tw

# division into different language sets
# (require different amount of walltime for each)
BIGLANG   = ar bg cs el en es fr he hr hu it nl pl pt pt_br ro ru sr tr
MEDLANG   = ar bs da de et fi sv sk sl zh
SMALLLANG = af bn br ca eo eu fa gl hi hy is id ja ka kk ko lt lv mk ml ms no si sq ta te th tl uk ur vi zh_en zh_zh zh_tw


# source and target language
# xx - to avoid expensive find operations with subdirectories that contain
#      thousands of files

SRC = xx
TRG = xx

# XXSRC and XXTRG are variables used for submitting jobs
# without doing find on language directories

XXSRC = $(firstword ${LANGUAGES})
XXTRG = $(lastword ${LANGUAGES})

# sorted version of language pair
# to avoid language pair duplication

XXSORTSRC = $(firstword $(sort ${XXSRC} ${XXTRG}))
XXSORTTRG = $(lastword $(sort ${XXSRC} ${XXTRG}))

# cluster parameters:
# - WALLTIME - walltime to be allocated
# - CORES - number of CPU cores to be allocated

WALLTIME = 24
CORES = 16


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

# make as many jobs as CPU cores
NRJOBS = ${CORES}

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


copy: ${LANGUAGES}

${HOME}/work/OpenSubtitles2016/xml/%:
	mkdir -p ${HOME}/work/OpenSubtitles2016/xml/${notdir $@}
	../scripts/copy_files.pl ${HOME}/work/OpenSubtitles2016 ${notdir $@}
	tar -C $@ -xvzf $@/*.tar.gz
	rm -f $@/*.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f

#	find $@ -name '*.xml' | xargs -P $$(( ${CORES}/2  )) gzip -f


${LANGUAGES}: %: ${HOME}/work/OpenSubtitles2016/xml/%
	rm -f $@
	ln -s $< .

submit-copy:
	echo '#! /bin/bash' > copy.sh; \
	echo 'perl ../scripts/copy_files.pl' >> copy.sh; \
	sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 24:00:00 copy.sh; \



## submit jobs for all language pairs

submit-all:
	for s in ${BIGLANG}; do \
	  for t in ${BIGLANG}; do \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done
	for s in ${BIGLANG}; do \
	  for t in ${MEDLANG}; do \
	    make WALLTIME=24 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=24 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done
	for s in ${BIGLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done
	for s in ${MEDLANG}; do \
	  for t in ${MEDLANG}; do \
	    make WALLTIME=24 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=24 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done
	for s in ${MEDLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done
	for s in ${SMALLLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done


submit-all-simple:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
		make SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	  done \
	done


## submit only language pairs with English
## (set EN if you wnat to use a different target language)
EN = en

submit-en:
	for s in ${LANGUAGES}; do \
	  make SRC=xx TRG=xx XXSRC=$$s XXTRG=${EN} submit-xx; \
	  make SRC=xx TRG=xx XXSRC=${EN} XXTRG=$$s submit-xx; \
	done


## always use submit-xx now!

submit:
	${MAKE} XXSRC=${SRC} XXTRG=${TRG} SRC=xx TRG=xx submit-xx


## avoid expensive find operations --> use other variables for lang's

submit-xx:
	if [ "${XXSRC}" != "${XXTRG}" ]; then \
	  if [ "${XXSRC}" == "${XXSORTSRC}" ]; then \
	    if [ ! -e "${XXSRC}-${XXTRG}.scheduled" ]; then \
	      if [ ! -e "${XXSRC}-${XXTRG}.running" ]; then \
	        if [ ! -e "${XXSRC}-${XXTRG}.xml.gz" ]; then \
	touch ${XXSRC}-${XXTRG}.scheduled; \
	echo '#! /bin/bash' > $(XXSRC)-${XXTRG}.sh; \
	echo 'touch $(XXSRC)-${XXTRG}.running' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -f $(XXSRC)-${XXTRG}.scheduled' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'make -j 2 SRC=${XXSRC} TRG=$(XXTRG) ${XXSRC} ${XXTRG}' \
			>> $(XXSRC)-${XXTRG}.sh; \
	echo 'make SRC=${XXSRC} TRG=$(XXTRG) NRJOBS=${CORES} align' \
			>> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -f $(XXSRC)-${XXTRG}.running $(XXSRC)-${XXTRG}.sh' \
			>> $(XXSRC)-${XXTRG}.sh; \
	sbatch  -A nn9106k -c ${CORES} --mem-per-cpu=2G \
			-t ${WALLTIME}:00:00 $(XXSRC)-${XXTRG}.sh || \
	rm -f ${XXSRC}-${XXTRG}.scheduled; \
	        fi \
	      fi \
	    fi \
	  fi \
	fi



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

${SRC}-${TRG}.xml.gz: ${SRC} ${TRG}
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
