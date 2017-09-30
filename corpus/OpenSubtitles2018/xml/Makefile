# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def

## project on abel
PROJECT = nn9442k
DATAHOME = /work/users/joerg/OPUS/corpus/${CORPUS}
LOCALTMP = /tmp
DICHOME = ../dic

# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters

## old:
# SENTALIGN  = ${TOOLS}/opus/${CORPUS}/subalign.pl -t 0.5 -a 2

## - use OpenSubtitles2012 dictionaries for lexical matching
# SENTALIGN  = ../scripts/subalign.pl -t 0.5 -a 0.75 \
		-r '-b -i 5 -m 10 -d /usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2012/dic/${SRC}-${TRG}.dic' -m 10


##############################################################
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
##############################################################
## more relaxed
#SENTALIGN  = ../scripts/subalign.pl -t 0.5 -a 0.5 \
#		-r '-b -i 5 -m 10 -d /usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2012/dic/${SRC}-${TRG}.dic' -m 10

# SENTALIGN  = ../scripts/subalign.pl -t 0.5 -a 0.5 -d 0.5 \
		-r '-b -i 5 -m 10 -d /usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2012/dic/${SRC}-${TRG}.dic' -m 10


## with preliminary dic from 2016 and "lagom" overlap threshold (0.75)

SENTALIGN  = ../scripts/subalign.pl -A -t 0.5 -a 0.5 -d 0.75 \
		-r '-b -i 5 -m 10 -d ${DICHOME}/${SRC}-${TRG}.dic' -m 10


##############################################################
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
##############################################################




# all language sub directories
#
# LANGUAGES = $(sort $(wildcard ??) $(wildcard ??_??))

# pre-defined list of languages
# (useful if they do not exist here yet)

#######################
## not converted!
## pt_br
#######################

LANGUAGES=af ar bg bn br bs ca cs da de el en eo es et eu fa fi fr gl he hi hr hu hy is id it ja ka kk ko lt lv mk ml ms nl no pl pt pt_br ro ru si sk sl sq sr sv ta te th tl tr uk ur vi ze_en ze_zh zh_cn zh_tw

# division into different language sets
# (require different amount of walltime for each)
BIGLANG   = ar bg cs el en es fr he hr hu it nl pl pt pt_br ro ru sr tr
MEDLANG   = bs da de et fi sv sk sl zh_cn
SMALLLANG = af bn br ca eo eu fa gl hi hy is id ja ka kk ko lt lv mk ml ms no si sq ta te th tl uk ur vi ze_zh ze_en zh_tw

BIGLANG2   = ar bg cs el en es fr he hr hu it nl pl pt ro ru sr


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


ICXML = $(wildcard *ic*.xml.gz)

fix:
	for f in ${ICXML}; do \
	  zcat $$f | sed 's#"ic/#"is/#' | gzip -c > $$f.tmp;\
	  mv $$f $$f.backup;\
	  mv $$f.tmp `echo $$f | sed 's/ic/is/'`; \
	done

available:
	for l in ${LANGUAGES}; do \
	  if [ ! -e /projects/researchers/researchers01/plison/data/opensubs2018/$$l.tar.gz ]; then \
	    echo "$$l not found"; \
	  fi \
	done


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
	  ${MAKE} -j ${NRJOBS} \
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



## copy all files from Pierre's workdir
## pack all files into tar-archive with compressed xml files

copy: ${LANGUAGES}
pack: $(patsubst %,${DATAHOME}/xml/%.tar,${LANGUAGES})
pack-small: $(patsubst %,${DATAHOME}/xml/%.tar,${SMALLLANG})
pack-pob: ${DATAHOME}/xml/pt_br.tar

submit-pack:
	echo '#! /bin/bash' > $@
	echo 'make -j 2 pack' >> $@; \
	sbatch  -A ${PROJECT} -c 2 --mem-per-cpu=2G -t 72:00:00 $@ || rm -f $@; \

submit-pack-small:
	echo '#! /bin/bash' > $@
	echo 'make -j 2 pack-small' >> $@; \
	sbatch  -A ${PROJECT} -c 2 --mem-per-cpu=2G -t 24:00:00 $@ || rm -f $@; \

submit-pack-pob:
	echo '#! /bin/bash' > $@
	echo 'make pack-pob' >> $@; \
	sbatch  -A ${PROJECT} -c 1 --mem-per-cpu=2G -t 24:00:00 $@ || rm -f $@; \


${LANGUAGES}:
	mkdir -p $@
	../scripts/copy_files.pl $(patsubst %/xml,%,${shell pwd}) ${notdir $@}
	tar -C $@ -xvzf $@/*.tar.gz
	rm -f $@/*.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f

#	../scripts/copy_files.pl ${CORPUSHOME} ${notdir $@}


## pack all files into one tar-archive
${DATAHOME}/xml/%.tar: ${DATAHOME}/xml/%
	tar -C ${dir $@} -cf $@ $(notdir $<)

## copy language data to working dir
${patsubst %,${DATAHOME}/xml/%,${LANGUAGES}}:
	mkdir -p $@
	../scripts/copy_files.pl ${DATAHOME} ${notdir $@}
	tar -C $@ -xvzf $@/*.tar.gz
	rm -f $@/*.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f



COPY_LANG = $(patsubst %,submit-copy-%.sh,$(LANGUAGES))

submit-all-copy: $(COPY_LANG)

$(COPY_LANG):
	if [ ! -d ${HOME}/work/OPUS/corpus/OpenSubtitles2018/xml/$(patsubst submit-copy-%.sh,%,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'touch $@.running' >> $@; \
	  echo 'make $(patsubst submit-copy-%.sh,%,$@)' >> $@; \
	  echo 'rm -f $@.running $@.sh' >> $@; \
	  sbatch  -A ${PROJECT} -c 1 --mem-per-cpu=8G -t 8:00:00 $@ || rm -f $@; \
	fi


submit-all-align: submit-bigbig submit-bigmed submit-bigsmall \
		submit-medmed submit-medsmall submit-smallsmall


submit-bigbig:
	for s in ${BIGLANG}; do \
	  for t in ${BIGLANG}; do \
	    make WALLTIME=72 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=72 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-bigbig2:
	for s in ${BIGLANG2}; do \
	  for t in ${BIGLANG2}; do \
	    make WALLTIME=72 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=72 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-bigmed:
	for s in ${BIGLANG}; do \
	  for t in ${MEDLANG}; do \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-bigsmall:
	for s in ${BIGLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-medmed:
	for s in ${MEDLANG}; do \
	  for t in ${MEDLANG}; do \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=48 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-medsmall:
	for s in ${MEDLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make WALLTIME=12 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-smallsmall:
	for s in ${SMALLLANG}; do \
	  for t in ${SMALLLANG}; do \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$t XXTRG=$$s submit-xx; \
	  done \
	done

submit-again:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$s XXTRG=$$t submit-xx; \
	  done \
	done

submit-ca-small:
	for t in ${SMALLLANG}; do \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=ca XXTRG=$$t submit-xx; \
	    make CORES=2 WALLTIME=8 SRC=xx TRG=xx XXSRC=$$t XXTRG=ca submit-xx; \
	done



## submit jobs for all language pairs

submit-all:
	make submit-bigbig
	make submit-bigmed
	make submit-bigsmall
	make submit-medmed
	make submit-medsmall
	make submit-smallsmall



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


## don't use submit - always use submit-xx now!

submit:
	${MAKE} XXSRC=${SRC} XXTRG=${TRG} SRC=xx TRG=xx submit-xx


## avoid expensive find operations --> use other variables for lang's
## NEW 2017-09-05: run in local temp dir to avoid any I/O bottlenecks
#
# I may have to add specifications bout the local temp size requirements:
#  #SBATCH --gres=localtmp:N
# (N = space in GiB)

## run job in local tmp dir
## everything in local tmp instead of workdir or home (even dic-file)
## NEW 2017-09-20: even copy ~/local

COMMON_PATH = /bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/usr/java/latest/bin:/opt/rocks/bin:/opt/rocks/sbin

submit-xx:
	if [ "${XXSRC}" != "${XXTRG}" ]; then \
	  if [ "${XXSRC}" == "${XXSORTSRC}" ]; then \
	    if [ ! -e "${XXSRC}-${XXTRG}.scheduled" ]; then \
	      if [ ! -e "${XXSRC}-${XXTRG}.running" ]; then \
	        if [ ! -e "${XXSRC}-${XXTRG}.xml.gz" ]; then \
	touch ${XXSRC}-${XXTRG}.scheduled; \
	echo '#! /bin/bash' > $(XXSRC)-${XXTRG}.sh; \
	echo '#SBATCH --gres=localtmp:40' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'TMPDIR=`mktemp -d -p ${LOCALTMP}`' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'mkdir -p $$TMPDIR/OPUS/corpus/${CORPUS}/xml' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'ln -s ${OPUSHOME}/tools $$TMPDIR/OPUS/tools' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp ${OPUSHOME}/corpus/Makefile* $$TMPDIR/OPUS/corpus/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp ${CORPUSHOME}/Makefile* $$TMPDIR/OPUS/corpus/${CORPUS}/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp -R ${CORPUSHOME}/scripts $$TMPDIR/OPUS/corpus/${CORPUS}/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp -R ${HOME}/local $$TMPDIR/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'mkdir $$TMPDIR/OPUS/corpus/${CORPUS}/dic' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp ${CORPUSHOME}/dic/$(XXSRC)-${XXTRG}.dic $$TMPDIR/OPUS/corpus/${CORPUS}/dic/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'cp ${CORPUSHOME}/xml/Makefile* $$TMPDIR/OPUS/corpus/${CORPUS}/xml/' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'touch $(XXSRC)-${XXTRG}.running' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -f $(XXSRC)-${XXTRG}.scheduled' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'export PATH=$$TMPDIR/local/bin:${COMMON_PATH}' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'export LD_LIBRARY_PATH=$$TMPDIR/local/lib' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'export PERL5LIB=$$TMPDIR/local/share/perl5:$$TMPDIR/local/lib64/perl5' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'make -j 2 ${DATAHOME}/xml/${XXSRC}.tar ${DATAHOME}/xml/${XXTRG}.tar' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'tar -C $$TMPDIR/OPUS/corpus/${CORPUS}/xml -xf ${DATAHOME}/xml/${XXSRC}.tar' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'tar -C $$TMPDIR/OPUS/corpus/${CORPUS}/xml -xf ${DATAHOME}/xml/${XXTRG}.tar' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'make -C $$TMPDIR/OPUS/corpus/${CORPUS}/xml/ -j ${CORES} SRC=${XXSRC} TRG=$(XXTRG) NRJOBS=${CORES} align-files' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -fr $$TMPDIR/OPUS/corpus/${CORPUS}/xml/${XXSRC}' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -fr $$TMPDIR/OPUS/corpus/${CORPUS}/xml/${XXTRG}' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'mkdir $$TMPDIR/OPUS/corpus/${CORPUS}/xml/${XXSRC}' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'mkdir $$TMPDIR/OPUS/corpus/${CORPUS}/xml/${XXTRG}' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'make -C $$TMPDIR/OPUS/corpus/${CORPUS}/xml/  -j ${CORES} SRC=${XXSRC} TRG=$(XXTRG) NRJOBS=${CORES} align' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'mv $$TMPDIR/OPUS/corpus/${CORPUS}/xml/*.xml.gz .' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -fr $$TMPDIR/OPUS' >> $(XXSRC)-${XXTRG}.sh; \
	echo 'rm -f $(XXSRC)-${XXTRG}.running $(XXSRC)-${XXTRG}.sh' \
			>> $(XXSRC)-${XXTRG}.sh; \
	sbatch  -A ${PROJECT} -c ${CORES} --mem-per-cpu=2G \
			-o align-$(XXSRC)-${XXTRG}-%j.out \
			-e align-$(XXSRC)-${XXTRG}-%j.err \
			-t ${WALLTIME}:00:00 $(XXSRC)-${XXTRG}.sh || \
	rm -f ${XXSRC}-${XXTRG}.scheduled; \
	        fi \
	      fi \
	    fi \
	  fi \
	fi



## clean tmp files on local nodes
## (assumed to be listed in file "nodes-to-clean")

clean-local-tmp:
	for n in `cat nodes-to-clean`; do \
	  echo "clean $$n";\
	  ssh $$n "rm -fr /tmp/tmp*/OPUS"; \
	done



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
##
## NEW: now also with alternative links

${SRC}-${TRG}.xml.gz: ${SRC} ${TRG}
	make -j ${NRJOBS} align-files
	-find ${SRC}-${TRG} -type d -empty  -exec rmdir {} \;
	-( find ${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep -v '/alt/' | sort |\
		xargs zgrep --no-filename 'link' >> $@.links )
	-( find ${SRC}-${TRG} -type f -name '*.xml.gz' | \
		grep '/alt/' | sort |\
		xargs zgrep --no-filename 'link' >> $@.altlinks )
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
	if [ -s $@.altlinks ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.altlinks >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  mv $@.tmp ${SRC}-${TRG}.alt.xml; \
	  gzip -f ${SRC}-${TRG}.alt.xml; \
	fi
	rm -f $@.links $@.altlinks
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
