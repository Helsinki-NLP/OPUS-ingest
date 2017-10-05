# -*-makefile-*-
#


include ../../Makefile.def
include ../Makefile.def


TMXINSERT= $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.insert.xml.gz))
TMXPCT   = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.pct.xml.gz))
TMXSPELL = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.spell.xml.gz))
TMXOTHER = $(patsubst %.xml.gz,${CORPUSHTML}/%.tmx.gz,$(wildcard *.other.xml.gz))

MOINSERT= $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.insert.xml.gz))
MOPCT   = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.pct.xml.gz))
MOSPELL = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.spell.xml.gz))
MOOTHER = $(patsubst %.xml.gz,${CORPUSHTML}/%.txt.zip,$(wildcard *.other.xml.gz))


TAB2TMX    = ${UPLUGHOME}/tools/tab2tmx
OPUS2MOSES = $(UPLUGHOME)/tools/xces2moses


# subalign.pl: find best candidate pair with most time overlap
#   -t .... time overlap score threshold
#   -a .... align score threshold
#   -r .... re-alignment parameters

# SENTALIGN  = ${TOOLS}/opus/${CORPUS}/subalign.pl -t 0.5 -a 2


## NEW for 2013: add -L to skip pairs of symbolic links!
## --> at least one file has to be a new one (src or trg)

SENTALIGN  = ../scripts/find_translation_alternatives.pl -m
walltime = 24

LANGUAGES = $(sort $(wildcard ??) $(wildcard ??_??))
BIGLANG   = ar bg cs el en es fr he hr hu it nl pl pt pt_br ro ru sr tr
MEDLANG   = ar bs da de et fi sv sk sl zh
SMALLLANG = af bn br ca eo eu fa gl hi hy ic id ja ka kk ko lt lv mk ml ms no si sq ta te th tl uk ur vi zh_en zh_zh zh_tw


LANGUAGE = af
MEM=2G

ALGFILES = $(addsuffix .xml.gz,\
	   $(addprefix $(LANGUAGE)-,\
	   $(shell find $(LANGUAGE)/ -maxdepth 2 -mindepth 2 -type d)))

all:
	for l in ${LANGUAGES}; do \
	  ${MAKE} LANGUAGE=$$l align; \
	done
	${MAKE} remove_empty remove_empty_align remove_empty_dir


submit-all:
	for l in ${BIGLANG}; do \
		make walltime=96 LANGUAGE=$$l submit; \
	done
	for l in ${MEDLANG}; do \
		make walltime=48 LANGUAGE=$$l submit; \
	done
	for l in ${SMALLLANG}; do \
		make walltime=24 LANGUAGE=$$l submit; \
	done


submit-new:
	echo '#! /bin/bash' > ${LANGUAGE}.sh
	echo 'touch ${LANGUAGE}.running' >> ${LANGUAGE}.sh
	echo '. /cluster/bin/jobsetup' >> ${LANGUAGE}.sh
	echo 'mkdir -p /tmp/OPUS/corpus/OpenSubtitles2016/alt' >> ${LANGUAGE}.sh
	echo 'cd /tmp/OPUS' >> ${LANGUAGE}.sh
	echo 'ln -s ${HOME}/OPUS/tools .' >> ${LANGUAGE}.sh
	echo 'cd corpus' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/Makefile* .' >> ${LANGUAGE}.sh
	echo 'cd OpenSubtitles2016' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/OpenSubtitles2016/Makefile* .' >> ${LANGUAGE}.sh
	echo 'ln -s ${HOME}/OPUS/corpus/OpenSubtitles2016/scripts .' >> ${LANGUAGE}.sh
	echo 'scripts/copy_files.pl `pwd` ${LANGUAGE}' >> ${LANGUAGE}.sh
	echo 'cd alt' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/Makefile .' >> ${LANGUAGE}.sh
	echo 'ln -s ../xml/${LANGUAGE} .' >> ${LANGUAGE}.sh
	echo 'make LANGUAGE=${LANGUAGE} align' >> $(LANGUAGE).sh
	echo 'tar -cf /tmp/$(LANGUAGE).tar $(LANGUAGE)-${LANGUAGE} $(LANGUAGE)-${LANGUAGE}*.xml.gz' >> ${LANGUAGE}.sh
	echo 'mv /tmp/${LANGUAGE}.tar ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/' >> ${LANGUAGE}.sh
	echo 'rm ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/${LANGUAGE}.running ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/${LANGUAGE}.sh' >> ${LANGUAGE}.sh
	sbatch  -A nn9106k -c 1 --mem-per-cpu=2G -t ${walltime}:00:00 $(LANGUAGE).sh



submit-with-scratch:
	echo '#! /bin/bash' > ${LANGUAGE}.sh
	echo 'touch ${LANGUAGE}.running' >> ${LANGUAGE}.sh
	echo '. /cluster/bin/jobsetup' >> ${LANGUAGE}.sh
	echo 'chkfile $(LANGUAGE).tar.gz' >> ${LANGUAGE}.sh
	echo 'mkdir -p $$SCRATCH/OPUS/corpus/OpenSubtitles2016/alt' >> ${LANGUAGE}.sh
	echo 'cd $$SCRATCH/OPUS' >> ${LANGUAGE}.sh
	echo 'ln -s ${HOME}/OPUS/tools .' >> ${LANGUAGE}.sh
	echo 'cd corpus' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/Makefile* .' >> ${LANGUAGE}.sh
	echo 'cd OpenSubtitles2016' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/OpenSubtitles2016/Makefile* .' >> ${LANGUAGE}.sh
	echo 'ln -s ${HOME}/OPUS/corpus/OpenSubtitles2016/scripts .' >> ${LANGUAGE}.sh
	echo 'scripts/copy_files.pl `pwd` ${LANGUAGE}' >> ${LANGUAGE}.sh
	echo 'cd alt' >> ${LANGUAGE}.sh
	echo 'cp ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/Makefile .' >> ${LANGUAGE}.sh
	echo 'ln -s ../xml/${LANGUAGE} .' >> ${LANGUAGE}.sh
	echo 'make LANGUAGE=${LANGUAGE} align' >> $(LANGUAGE).sh
	echo 'tar -cf $$SCRATCH/$(LANGUAGE).tar $(LANGUAGE)-${LANGUAGE} $(LANGUAGE)-${LANGUAGE}*.xml.gz' >> ${LANGUAGE}.sh
	echo 'mv $$SCRATCH/${LANGUAGE}.tar ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/' >> ${LANGUAGE}.sh
	echo 'rm ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/${LANGUAGE}.running ${HOME}/OPUS/corpus/OpenSubtitles2016/alt/${LANGUAGE}.sh' >> ${LANGUAGE}.sh
	sbatch  -A nn9106k -c 1 --mem-per-cpu=2G -t ${walltime}:00:00 $(LANGUAGE).sh




submit:
	if [ -e "$(LANGUAGE)" ]; then \
	  if [ ! -e "$(LANGUAGE)-$(LANGUAGE).xml.gz" ]; then \
	    if [ ! -e "$(LANGUAGE)-$(LANGUAGE).scheduled" ]; then \
	      if [ ! -e "$(LANGUAGE)-$(LANGUAGE).running" ]; then \
	    echo '#! /bin/bash' > $(LANGUAGE).sh; \
	    echo 'touch ${LANGUAGE}-${LANGUAGE}.running' >> $(LANGUAGE).sh; \
	    echo 'make LANGUAGE=${LANGUAGE} align' >> $(LANGUAGE).sh; \
	    echo 'rm -f ${LANGUAGE}-${LANGUAGE}.running' >> $(LANGUAGE).sh; \
	    echo 'rm -f ${LANGUAGE}-${LANGUAGE}.scheduled' >> $(LANGUAGE).sh; \
	    touch ${LANGUAGE}-${LANGUAGE}.scheduled; \
	    sbatch  -A nn9106k -c 1 --mem-per-cpu=${MEM} \
		-t ${walltime}:00:00 $(LANGUAGE).sh || \
	    rm -f ${LANGUAGE}-${LANGUAGE}.scheduled; \
	      fi \
	    fi \
	  fi \
	fi



align:
	${MAKE} ${LANGUAGE}-${LANGUAGE}.xml.gz
	${MAKE} ${LANGUAGE}-${LANGUAGE}.other.xml.gz
	${MAKE} ${LANGUAGE}-${LANGUAGE}.pct.xml.gz
	${MAKE} ${LANGUAGE}-${LANGUAGE}.insert.xml.gz
	${MAKE} ${LANGUAGE}-${LANGUAGE}.spell.xml.gz
	${MAKE} ${LANGUAGE}-${LANGUAGE}.misaligned.xml.gz

${LANGUAGE}-${LANGUAGE}.xml.gz: 
	${MAKE} align-files
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.all.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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

${LANGUAGE}-${LANGUAGE}.other.xml.gz: 
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.other.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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

${LANGUAGE}-${LANGUAGE}.pct.xml.gz: 
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.pct.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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

${LANGUAGE}-${LANGUAGE}.insert.xml.gz: 
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.insert.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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

${LANGUAGE}-${LANGUAGE}.spell.xml.gz: 
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.spell.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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

${LANGUAGE}-${LANGUAGE}.misaligned.xml.gz: 
	-( find ${LANGUAGE}-${LANGUAGE} -type f -name '*.misaligned.xml.gz' | \
		sort | xargs zgrep --no-filename 'link' >> $@.links )
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




align-files: ${ALGFILES}
	-find ${LANGUAGE}-${LANGUAGE} -type d -empty -exec rmdir {} \;

# sentence alignment for each movie

${ALGFILES}: ${LANGUAGE}-${LANGUAGE}/%.xml.gz: ${LANGUAGE}/%
	mkdir -p $(dir $@)
	-${SENTALIGN} $< $(@:.xml.gz=) > ${@:.xml.gz=.log}
	if [ ! -s $(@:.xml.gz=.log) ]; then \
	  rm -f $(@:.xml.gz=.log); else gzip -f $(@:.xml.gz=.log); \
	fi
# 	if [ -s $(@:.gz=) ]; then gzip $(@:.gz=); else rm -f $(@:.gz=); fi



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







tmx: ${CORPUSHTML}
	make -j 2 tmx-insert 
	make -j 2 tmx-spell 
	make -j 2 tmx-pct 
	make -j 2 tmx-other

moses: ${CORPUSHTML}
	make -j 2 mo-insert 
	make -j 2 mo-spell 
	make -j 2 mo-pct 
	make -j 2 mo-other

tmx-insert: $(TMXINSERT)
tmx-spell: $(TMXSPELL)
tmx-pct: $(TMXPCT)
tmx-other: $(TMXOTHER)

mo-insert: $(MOINSERT)
mo-spell: $(MOSPELL)
mo-pct: $(MOPCT)
mo-other: $(MOOTHER)


%.tmx.gz: %.txt.zip
	unzip $<
	( S=$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  T=$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))));\
	  P=$$S-$$T; \
	  SEXT="$$S"; TEXT="$$T"; \
	  if [ "$$SEXT" = "$$TEXT" ]; then SEXT=$${SEXT}1;TEXT=$${TEXT}2; fi; \
	  paste ${CORPUS}.$$P.$$SEXT ${CORPUS}.$$P.$$TEXT |\
	  sed = - | sed 'N;s/\n/\t/' | sort -k 2 | uniq -f 1 | sort -n |\
	  cut -f2,3 |\
	  $(TAB2TMX) -s $$S -t $$T |\
	  gzip -c > $@; \
	  rm -f ${CORPUS}.$$P.$$SEXT ${CORPUS}.$$P.$$TEXT ${CORPUS}.$$P.ids; )

${CORPUSHTML}/%.txt.zip: %.xml.gz
	( S="$(firstword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  T="$(lastword $(subst -, ,$(firstword $(subst ., ,$(notdir $<)))))";\
	  P=$$S-$$T; \
	  if [ "$$S" = "$$T" ]; then S="$${S}1";T="$${T}2"; fi; \
	  $(OPUS2MOSES) -d ${CORPUSRAW} -s $$S -t $$T \
		-P ${CORPUS}.$$P.ids \
		$< ${CORPUS}.$$P; \
	  rm -f $@; \
	  sed 's/  */ /g' < ${CORPUS}.$$P.$$S > ${CORPUS}.$$P.$$S.tmp; \
	  sed 's/  */ /g' < ${CORPUS}.$$P.$$T > ${CORPUS}.$$P.$$T.tmp; \
	  mv ${CORPUS}.$$P.$$S.tmp ${CORPUS}.$$P.$$S; \
	  mv ${CORPUS}.$$P.$$T.tmp ${CORPUS}.$$P.$$T; \
	  zip $@ ${CORPUS}.$$P.$$S ${CORPUS}.$$P.$$T ${CORPUS}.$$P.ids; \
	  rm -f ${CORPUS}.$$P.$$S ${CORPUS}.$$P.$$T ${CORPUS}.$$P.ids; )
