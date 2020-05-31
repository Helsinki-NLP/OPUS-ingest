
CORPUS ?= RF


## container base name
CONTAINER   = project-OPUS-corpus
CSC_PROJECT = project_2000661


ifdef LOCAL_SCRATCH
  TMPDIR = ${LOCAL_SCRATCH}
endif

ifeq ("${shell hostname -d}","bullx")
  WORKDIR = ${TMPDIR}
else
  WORKDIR = /wrk/tiedeman
endif


#-------------------------------------------------
# download corpus from allas to local dir
# requires to load and configure allas-module!
#
#    module load allas
#    allas-conf -k
#-------------------------------------------------

CORPUSHOME = ${PWD}
LOCALOPUS  = ${TMPDIR}/OPUS

retrieve-local-corpus:
	${MAKE} CORPUSHOME=${LOCALOPUS}/corpus retrieve-corpus

retrieve-corpus:
ifneq (${wildcard ${CORPUSHOME}/${CORPUS}},,)
	mv ${CORPUSHOME}/${CORPUS} ${CORPUSHOME}/${CORPUS}-$(shell date +%F)
endif
	${MAKE} ${CORPUSHOME}/${CORPUS} \
		${CORPUSHOME}/${CORPUS}/raw \
		${CORPUSHOME}/${CORPUS}/xml \
		${CORPUSHOME}/${CORPUS}/parsed

${CORPUSHOME}/${CORPUS}:
	mkdir -p $@
	( cd $@; \
          for o in $(shell a-list ${CONTAINER}-${CORPUS}); do \
            a-get $$o; \
          done )

${CORPUSHOME}/${CORPUS}/raw:
	mkdir -p ${dir $@}
	( cd ${dir $@}; \
          for o in $(shell a-list ${CONTAINER}-${CORPUS}-raw); do \
            a-get $$o; \
          done )

${CORPUSHOME}/${CORPUS}/xml:
	mkdir -p ${dir $@}
	( cd ${dir $@}; \
          for o in $(shell a-list ${CONTAINER}-${CORPUS}-xml); do \
            a-get $$o; \
          done )

${CORPUSHOME}/${CORPUS}/parsed:
	mkdir -p ${dir $@}
	( cd ${dir $@}; \
          for o in $(shell a-list ${CONTAINER}-${CORPUS}-parsed); do \
            a-get $$o; \
          done )



#-------------------------------------------------
# upload data to allas
# requires to load and configure allas-module!
#
#    module load allas
#    allas-conf -k
#-------------------------------------------------


## corpora in OPUS
OPUS_CORPORA = $(subst /,,$(wildcard */))

## target flags for uploading corpora
OPUS_CORPORA_DONE   = $(patsubst %,${WORKDIR}/OPUS-corpus/%.allas,${OPUS_CORPORA})

.PHONY: upload-corpora
upload-corpora: ${OPUS_CORPORA_DONE}

.PHONY: update-corpus-storage
update-corpus-storage:
	rm -f ${WORKDIR}/OPUS-corpus/${CORPUS}.allas
	${MAKE} ${WORKDIR}/OPUS-corpus/${CORPUS}.allas

############################################
## new: treat all corpora the same!
## (and don't compress again)
############################################

APUT_FLAGS = -p ${CSC_PROJECT} --override --nc --skip-filelist


${OPUS_CORPORA_DONE}: ${WORKDIR}/OPUS-corpus/%.allas: %
	echo "upload $<"
	mkdir -p ${WORKDIR}/allas/$<
	( cd $<; \
	for d in `find . -mindepth 1 -maxdepth 1 -type d -printf ' %P'`; do \
	  echo "processing $</$$d"; \
	  mkdir -p ${WORKDIR}/allas/$</$$d; \
	  if [[ ( $$d == "xml" ) || ( $$d == "parsed" ) || ( $$d == "raw" ) ]]; then \
	    for f in `find $$d -mindepth 1 -maxdepth 1 -type d -printf ' %p'`; do \
	      echo "processing $</$$f"; \
	      tar -cf ${WORKDIR}/allas/$</$$f.tar $$f; \
	      a-put ${APUT_FLAGS} -b ${CONTAINER}-$<-$$d ${WORKDIR}/allas/$</$$f.tar; \
	      rm -f ${WORKDIR}/allas/$</$$f.tar; \
	    done; \
	    find $$d -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$$d-files.tar -T -; \
	    a-put ${APUT_FLAGS} -b ${CONTAINER}-$<-$$d ${WORKDIR}/allas/$</$$d-files.tar; \
	    rm -f ${WORKDIR}/allas/$</$$d-files.tar; \
	  else \
	    echo "processing $</$$d"; \
	    tar -cf ${WORKDIR}/allas/$</$$d.tar $$d; \
	    a-put ${APUT_FLAGS} -b ${CONTAINER}-$< ${WORKDIR}/allas/$</$$d.tar ; \
	    rm -f ${WORKDIR}/allas/$</$$d.tar; \
	  fi; \
	  rmdir ${WORKDIR}/allas/$</$$d; \
	done )
	cd $< && find . -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$<-files.tar -T -
	a-put ${APUT_FLAGS} -b ${CONTAINER}-$< ${WORKDIR}/allas/$</$<-files.tar
	rm -f ${WORKDIR}/allas/$</$<-files.tar
	rmdir ${WORKDIR}/allas/$<; \
	mkdir -p ${dir $@}
	touch $@

#	    a-put -p ${CSC_PROJECT} --nc --skip-filelist -b ${CONTAINER}-$< $$d ; \

OLD_CONTAINER = proj-OPUS-corpus-Bianet \
proj-OPUS-corpus-Books \
proj-OPUS-corpus-CAPES \
proj-OPUS-corpus-DGT \
proj-OPUS-corpus-DGT-data \
proj-OPUS-corpus-DGT-dic \
proj-OPUS-corpus-DGT-log \
proj-OPUS-corpus-DGT-parsed \
proj-OPUS-corpus-DGT-raw \
proj-OPUS-corpus-DGT-src \
proj-OPUS-corpus-DGT-src_segments \
proj-OPUS-corpus-DGT-tmxt \
proj-OPUS-corpus-DGT-xml \
proj-OPUS-corpus-DGT_segments \
proj-OPUS-corpus-DOGC \
proj-OPUS-corpus-ECB \
proj-OPUS-corpus-ECB_segments \
proj-OPUS-corpus-EhuHac \
proj-OPUS-corpus-Elhuyar \
proj-OPUS-corpus-Europarl \
proj-OPUS-corpus-Europarl-data \
proj-OPUS-corpus-Europarl-dic \
proj-OPUS-corpus-Europarl-multi \
proj-OPUS-corpus-Europarl-multilingwis \
proj-OPUS-corpus-Europarl-multilingwis_segments \
proj-OPUS-corpus-Europarl-scripts \
proj-OPUS-corpus-Europarl-xml \
proj-OPUS-corpus-Europarl_segments \
proj-OPUS-corpus-JRC-Acquis \
proj-OPUS-corpus-JRC-Acquis-log \
proj-OPUS-corpus-JRC-Acquis-raw \
proj-OPUS-corpus-JRC-Acquis-scripts \
proj-OPUS-corpus-JRC-Acquis-src \
proj-OPUS-corpus-JRC-Acquis-wordalign \
proj-OPUS-corpus-JRC-Acquis-xml \
proj-OPUS-corpus-JW300 \
proj-OPUS-corpus-JW300-data \
proj-OPUS-corpus-JW300-dic \
proj-OPUS-corpus-JW300-dic_segments \
proj-OPUS-corpus-JW300-v1 \
proj-OPUS-corpus-JW300_segments \
proj-OPUS-corpus-MBS \
proj-OPUS-corpus-MPC1 \
proj-OPUS-corpus-MontenegrinSubs \
proj-OPUS-corpus-MultiParaCrawl \
proj-OPUS-corpus-MultiParaCrawlTest \
proj-OPUS-corpus-MultiParaCrawl_segments \
proj-OPUS-corpus-MultiUN \
proj-OPUS-corpus-MultiUN-dic.old \
proj-OPUS-corpus-MultiUN-log \
proj-OPUS-corpus-MultiUN-raw \
proj-OPUS-corpus-MultiUN-src \
proj-OPUS-corpus-MultiUN-wordalign \
proj-OPUS-corpus-MultiUN-xml \
proj-OPUS-corpus-MultiUN-xml_segments \
proj-OPUS-corpus-OfisPublik \
proj-OPUS-corpus-OpenSubtitles-scripts \
proj-OPUS-corpus-OpenSubtitles-xml \
proj-OPUS-corpus-OpenSubtitles-xml_segments \
proj-OPUS-corpus-ParCor \
proj-OPUS-corpus-RF \
proj-OPUS-corpus-SETIMES \
proj-OPUS-corpus-SPC \
proj-OPUS-corpus-SciELO \
proj-OPUS-corpus-TED2013 \
proj-OPUS-corpus-TEP \
proj-OPUS-corpus-TedTalks \
proj-OPUS-corpus-TildeMODEL \
proj-OPUS-corpus-UN \
proj-OPUS-corpus-UNPC \
proj-OPUS-corpus-UNPC-cwb \
proj-OPUS-corpus-UNPC-cwb_segments \
proj-OPUS-corpus-UNPC-data \
proj-OPUS-corpus-UNPC-dic \
proj-OPUS-corpus-UNPC-hunalign \
proj-OPUS-corpus-UNPC-log \
proj-OPUS-corpus-UNPC-raw \
proj-OPUS-corpus-UNPC-scripts \
proj-OPUS-corpus-UNPC-src \
proj-OPUS-corpus-UNPC-src_segments \
proj-OPUS-corpus-UNPC-wordalign \
proj-OPUS-corpus-UNPC-wordalign_segments \
proj-OPUS-corpus-UNPC-xml \
proj-OPUS-corpus-UNPC-xml_segments \
proj-OPUS-corpus-WMT-News \
proj-OPUS-corpus-WikiSource \
proj-OPUS-corpus-Wikipedia \
proj-OPUS-corpus-XhosaNavy \
proj-OPUS-corpus-ada83 \
proj-OPUS-corpus-bible-gu \
proj-OPUS-corpus-fiskmo \
proj-OPUS-corpus-giga-fren \
proj-OPUS-corpus-giga-fren_segments \
proj-OPUS-corpus-hrenWaC \
proj-OPUS-corpus-komi \
proj-OPUS-corpus-memat \
proj-OPUS-corpus-sardware \
proj-OPUS-corpus-template-moses \
proj-OPUS-corpus-template-opusrr \
proj-OPUS-corpus-template-text \
proj-OPUS-corpus-template-tmx \
proj-OPUS-corpus-testcorpus \
proj-OPUS-corpus_segments

delete-old:
	for c in ${OLD_CONTAINER}; do \
	  swift delete $$c; \
	done


# ############################################
# # old: do it differntly for each corpus
# ############################################

# BIG_CORPORA = DGT JRC-Acquis JW300 MultiUN OpenSubtitles UNPC Europarl GlobalVoices News-Commentary QED EUbookshop
# NORMAL_CORPORA = $(filter-out ${BIG_CORPORA},$(OPUS_CORPORA))
# BIG_CORPORA_DONE    = $(patsubst %,${WORKDIR}/%.allas,${BIG_CORPORA})
# NORMAL_CORPORA_DONE = $(patsubst %,${WORKDIR}/%.allas,${NORMAL_CORPORA})

# ## number of files in a corpus dir to decide
# ## whethr to rclone or package it up
# MAX_NR_FILES = 10000

# ## for BIG_CORPORA:
# ## directories to split even further
# ## (only of max nr of files in those subdirs)
# SPLIT_SUB_DIRS = raw xml parsed
# MAX_NR_SUBDIR_FILES = 5000

# list-corpora:
# 	@echo ${OPUS_CORPORA}
# 	@echo ${BIG_CORPORA}
# 	@echo ${NORMAL_CORPORA}

# ## upload corpora to allas using both rclone sync and a-put
# ##
# # - all directories with > 10000 files --> package with a-put
# # - all directories with <= 10000 files --> rclone sync
# #
# ## - don't upload again if the package is already there
# ## TODO ---> do we need some other treatment later for updating corpora?


# upload-normal-corpora: ${NORMAL_CORPORA_DONE}

# ${NORMAL_CORPORA_DONE}: ${WORKDIR}/%.allas: %
# 	if [ `rclone ls allas:${CONTAINER}/$<.tar.zst | wc -l` -lt 1 ]; then \
# 	  if [ `find $< -type f | wc -l` -le ${MAX_NR_FILES} ]; then \
# 	    rclone -l sync $< allas:${CONTAINER}-$<; \
# 	  else \
# 	    a-put --skip-filelist -b ${CONTAINER} $<; \
# 	  fi \
# 	fi
# 	touch $@







# ## special treatment for big corpora
# ## - upload each subdirectory separately
# ## - special treatment for subdir's raw, xml, parsed
# ## - don't upload again if the package is already there
# ## TODO ---> do we need some other treatment later for updating corpora?

# upload-big-corpora: ${BIG_CORPORA_DONE}

# ${BIG_CORPORA_DONE}: ${WORKDIR}/%.allas: %
# 	cd $<; \
# 	mkdir -p ${WORKDIR}/allas/$<; \
# 	for d in `find . -mindepth 1 -maxdepth 1 -type d -printf ' %P'`; do \
# 	  echo "processing $</$$d"; \
# 	  if [ `find $$d -mindepth 1 -maxdepth 1 -type d | wc -l` -le 100 ]; then \
# 	    for f in `find $$d -mindepth 1 -maxdepth 1 -type d -printf ' %p'`; do \
# 	      a-put --skip-filelist -b ${CONTAINER}-$<-$$d $$f; \
# 	    done; \
# 	    find $$d -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$$d-files.tar -T -; \
# 	    a-put -b ${CONTAINER}-$<-$$d ${WORKDIR}/allas/$</$$d-files.tar; \
# 	    rm -f ${WORKDIR}/allas/$</$$d-files.tar; \
# 	  else \
# 	    a-put --skip-filelist -b ${CONTAINER}-$< $$d ; \
# 	  fi \
# 	done
# 	find . -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$<-files.tar -T -
# 	a-put --skip-filelist -b ${CONTAINER}-$< ${WORKDIR}/allas/$</$<-files.tar
# 	rm -f ${WORKDIR}/allas/$</$<-files.tar


# ${BIG_CORPORA_DONE}: %.allas: %
# 	cd $<; \
# 	for d in ${SPLIT_SUB_DIRS}; do \
# 	  if [ -d $$d ]; then \
# 	    if [ `ls $$d | wc -l` -le ${MAX_NR_SUBDIR_FILES} ]; then \
# 	      cd $$d; \
# 	      for l in `ls`; do \
# 	        if [ -d $$l ]; then \
# 	          if [ `rclone ls allas:${CONTAINER}-$<-$$d/$$l.tar.zst | wc -l` -lt 1 ]; then \
# 	            a-put --skip-filelist -b ${CONTAINER}-$<-$$d $$l; \
# 	          fi \
# 	        elif [ -f $$l ]; then \
# 	          if [ ! -h $$l ]; then \
# 	            rclone -l copyto $$l allas:${CONTAINER}-$<-$$d/$$l; \
# 	          fi \
# 	        fi \
# 	      done; \
# 	      cd ..; \
# 	    fi \
# 	  fi \
# 	done; \
# 	for d in `ls`; do \
# 	  if [ -d $$d ]; then \
# 	    allas-conf -k ${CSC_PROJECT}; \
# 	    if [ `a-list | grep "${CONTAINER}-$<-$$d" | wc -l` -lt 1 ]; then \
# 	      if [ `rclone ls allas:${CONTAINER}-$</$$d.tar.zst | wc -l` -lt 1 ]; then \
# 	        a-put --skip-filelist -b ${CONTAINER}-$< $$d; \
# 	      fi \
# 	    fi \
# 	  elif [ -f $$d ]; then \
# 	    if [ ! -h $$d ]; then \
# 	      rclone -l copy $$d allas:${CONTAINER}-$</$$d; \
# 	    fi \
# 	  fi \
# 	done
# 	touch $@


#######################################################################
## option 2:
## run through a loop to upload data
#######################################################################


## upload corpora to allas using both rclone sync and a-put
##
# - all directories with > 10000 files --> package with a-put
# - all directories with <= 10000 files --> rclone sync
#
## - don't upload again if the package is already there
## TODO ---> do we need some other treatment later for updating corpora?

upload-to-allas:
	for c in ${NORMAL_CORPORA}; do \
	    if [ -d $$c ]; then \
	      echo "processing $$c"; \
	      if [ `rclone ls allas:${CONTAINER}/$$c.tar.zst | wc -l` -lt 1 ]; then \
	        if [ `find $$c -type f | wc -l` -le ${MAX_NR_FILES} ]; then \
	          rclone -l sync $$c allas:${CONTAINER}-$$c; \
	        else \
	          a-put --skip-filelist -b ${CONTAINER} $$c; \
		fi \
	      fi \
	    fi \
	done


## special treatment for big corpora
## - upload each subdirectory separately
## - special treatment for subdir's raw, xml, parsed
## - don't upload again if the package is already there
## TODO ---> do we need some other treatment later for updating corpora?
upload-big-to-allas:
	for c in ${BIG_CORPORA}; do \
	  cd $$c; \
	  for d in raw xml parsed; do \
	    if [ -d $$d ]; then \
	      if [ `ls $$d | wc -l` -le ${MAX_NR_SUBDIR_FILES} ]; then \
	        cd $$d; \
	        for l in `ls`; do \
	          if [ -d $$l ]; then \
	            if [ `rclone ls allas:${CONTAINER}-$$c-$$d/$$l.tar.zst | wc -l` -lt 1 ]; then \
	              a-put --skip-filelist -b ${CONTAINER}-$$c-$$d $$l; \
	            fi \
	          elif [ -f $$l ]; then \
	            if [ ! -h $$l ]; then \
	              rclone -l copyto $$l allas:${CONTAINER}-$$c-$$d/$$l; \
	            fi \
	          fi \
	        done; \
	        cd ..; \
	      fi \
	    fi \
	  done; \
	  for d in `ls`; do \
	    if [ -d $$d ]; then \
	      if [ `a-list | grep "${CONTAINER}-$$c-$$d" | wc -l` -lt 1 ]; then \
	        if [ `rclone ls allas:${CONTAINER}-$$c/$$d.tar.zst | wc -l` -lt 1 ]; then \
	          a-put --skip-filelist -b ${CONTAINER}-$$c $$d; \
	        fi \
	      fi \
	    elif [ -f $$d ]; then \
	      if [ ! -h $$d ]; then \
	        rclone -l copy $$d allas:${CONTAINER}-$$c/$$d; \
	      fi \
	    fi \
	  done; \
	  cd ..; \
	done





#
# can we use the general upload thing above?
#
#
# ## special treatment of OpenSubtitles (because it is so big)
# opensubs-to-allas:
# 	for d in parsed raw xml; do \
# 	  cd OpenSubtitles/$$d; \
# 	  for c in `ls`; do \
# 	    if [ -d $$c ]; then \
# 	      if [ `rclone ls allas:${CONTAINER}-OpenSubtitles-$$d/$$c.tar.zst | wc -l` -lt 1 ]; then \
# 	        a-put --skip-filelist -b ${CONTAINER}-OpenSubtitles-$$d $$c; \
# 	      fi \
# 	    elif [ -f $$c ]; then \
# 	      if [ ! -h $$c ]; then \
# 	        rclone -l copy $$c allas:${CONTAINER}-OpenSubtitles-$$d/$$c; \
# 	      fi \
# 	    fi \
# 	  done \
# 	done
# 	cd OpenSubtitles; \
# 	for d in all alt cwb cwb-ud scripts src speaker-turns; do \
# 	  rclone -l copy $$d allas:${CONTAINER}-OpenSubtitles/$$d; \
# 	done
# 	cd OpenSubtitles; \
# 	for d in v1 v2011 v2012 v2013 v2015 v2016 realign; do \
# 	  if [ `rclone ls allas:${CONTAINER}-OpenSubtitles/$$d.tar.zst | wc -l` -lt 1 ]; then \
# 	    a-put --skip-filelist -b ${CONTAINER}-OpenSubtitles $$d; \
# 	  fi \
# 	done


# ## DGT is also big
# dgt-to-allas:
# 	for d in parsed raw xml; do \
# 	  cd OpenSubtitles/$$d; \
# 	  for c in `ls`; do \
# 	    if [ -d $$c ]; then \
# 	      if [ `rclone ls allas:${CONTAINER}-OpenSubtitles-$$d/$$c.tar.zst | wc -l` -lt 1 ]; then \
# 	        a-put --skip-filelist -b ${CONTAINER}-OpenSubtitles-$$d $$c; \
# 	      fi \
# 	    elif [ -f $$c ]; then \
# 	      if [ ! -h $$c ]; then \
# 	        rclone -l copy $$c allas:${CONTAINER}-OpenSubtitles-$$d/$$c; \
# 	      fi \
# 	    fi \
# 	  done \
# 	done







# ## upload corpora to allas using rclone sync
# sync-to-allas:
# 	for c in `ls`; do \
# 	  if [ -d $$c ]; then \
# 	      echo -n "processing $$c ... "; \
# 	    if [ `find $$c -type f | wc -l` -le ${MAX_NR_FILES} ]; then \
# 	      echo -n "syncing ... "; \
# 	      rclone -l sync $$c allas:${CONTAINER}-$$c; \
# 	      echo "done!"; \
# 	    else \
# 	      echo "too many files!"; \
# 	    fi; \
# 	  fi \
# 	done

# ## upload corpus packages to allas
# package-to-allas:
# 	for c in `ls`; do \
# 	  if [ -d $$c ]; then \
# 	      echo "processing $$c ... "; \
# 	    if [ `find $$c -type f | wc -l` -gt ${MAX_NR_FILES} ]; then \
# 	      a-put --skip-filelist -b ${CONTAINER} $$c; \
# 	    else \
# 	      echo "few files only --- do rclone sync instead!!"; \
# 	    fi; \
# 	  fi \
# 	done




## run language identification on all corpora

ALLRAW = ${wildcard /proj/nlpl/data/OPUS/*/latest/raw/*.zip}
ALLRAW_LANGID = ${subst /raw/,/raw-langid/,${ALLRAW}}

run-langid: ${ALLRAW_LANGID}

${ALLRAW_LANGID}:
	mkdir -p $(dir $@)
	TMPDIR=${OPUSRELEASE}/tmp opus_langid -f ${subst /raw-langid/,/raw/,$@} -t $@




# CORPORA = ECB EMEA EUconst Europarl3 KDE4 KDEdoc MBS OpenOffice \
# 	OpenOffice3 OpenSubtitles OpenSubtitles2011 PHP \
# 	RF SETIMES SPC TEP WikiSource


# fix-all-tmx:
# 	for c in ${CORPORA}; do \
# 	  make C=$$c fix-tmx; \
# 	done


# fix-tmx:
# 	rm -f /home/opus/public_html/${C}/*.tmx.gz
# 	make -C ${C} html


# LANGUAGES = en sv zh de

# LANGPAIRS = ${shell \
# 	for s in ${LANGUAGES}; do \
# 	  for t in ${LANGUAGES}; do \
# 	    if [[ "$$s" < "$$t" ]]; then \
# 	      echo "$$s-$$t"; \
# 	    fi \
# 	  done \
# 	done  }


# .SECONDEXPANSION:

# %.txt: $$(firstword $$(subst -, ,%)) $$(lastword $$(subst -, ,%))
# 	echo $^

# en:
# 	echo "hallo English"

# sv:
# 	echo "hallo Swedish"


