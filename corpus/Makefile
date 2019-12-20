#----------------------------------------
# upload data to allas
#----------------------------------------

## container base name
CONTAINER = proj-OPUS-corpus
CSC_PROJECT = project_2000661

## corpora in OPUS
OPUS_CORPORA = $(subst /,,$(wildcard */))
BIG_CORPORA = DGT JRC-Acquis JW300 MultiUN OpenSubtitles UNPC Europarl GlobalVoices News-Commentary QED EUbookshop
NORMAL_CORPORA = $(filter-out ${BIG_CORPORA},$(OPUS_CORPORA))

WORKDIR = /wrk/tiedeman

## target flags for uploading corpora
OPUS_CORPORA_DONE   = $(patsubst %,${WORKDIR}/%.allas,${OPUS_CORPORA})
BIG_CORPORA_DONE    = $(patsubst %,${WORKDIR}/%.allas,${BIG_CORPORA})
NORMAL_CORPORA_DONE = $(patsubst %,${WORKDIR}/%.allas,${NORMAL_CORPORA})

## number of files in a corpus dir to decide
## whethr to rclone or package it up
MAX_NR_FILES = 10000

## for BIG_CORPORA:
## directories to split even further
## (only of max nr of files in those subdirs)
SPLIT_SUB_DIRS = raw xml parsed
MAX_NR_SUBDIR_FILES = 5000


list-corpora:
	@echo ${OPUS_CORPORA}
	@echo ${BIG_CORPORA}
	@echo ${NORMAL_CORPORA}

upload-corpora: ${OPUS_CORPORA_DONE}


## upload corpora to allas using both rclone sync and a-put
##
# - all directories with > 10000 files --> package with a-put
# - all directories with <= 10000 files --> rclone sync
#
## - don't upload again if the package is already there
## TODO ---> do we need some other treatment later for updating corpora?


upload-normal-corpora: ${NORMAL_CORPORA_DONE}

${NORMAL_CORPORA_DONE}: ${WORKDIR}/%.allas: %
	if [ `rclone ls allas:${CONTAINER}/$<.tar.zst | wc -l` -lt 1 ]; then \
	  if [ `find $< -type f | wc -l` -le ${MAX_NR_FILES} ]; then \
	    rclone -l sync $< allas:${CONTAINER}-$<; \
	  else \
	    a-put --skip-filelist -b ${CONTAINER} $<; \
	  fi \
	fi
	touch $@



## special treatment for big corpora
## - upload each subdirectory separately
## - special treatment for subdir's raw, xml, parsed
## - don't upload again if the package is already there
## TODO ---> do we need some other treatment later for updating corpora?

upload-big-corpora: ${BIG_CORPORA_DONE}

${BIG_CORPORA_DONE}: ${WORKDIR}/%.allas: %
	cd $<; \
	mkdir -p ${WORKDIR}/allas/$<; \
	for d in `find . -mindepth 1 -maxdepth 1 -type d -printf ' %P'`; do \
	  echo "processing $</$$d"; \
	  if [ `find $$d -mindepth 1 -maxdepth 1 -type d | wc -l` -le 100 ]; then \
	    for f in `find $$d -mindepth 1 -maxdepth 1 -type d -printf ' %p'`; do \
	      a-put --skip-filelist -b ${CONTAINER}-$<-$$d $$f; \
	    done; \
	    find $$d -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$$d-files.tar -T -; \
	    a-put -b ${CONTAINER}-$<-$$d ${WORKDIR}/allas/$</$$d-files.tar; \
	    rm -f ${WORKDIR}/allas/$</$$d-files.tar; \
	  else \
	    a-put --skip-filelist -b ${CONTAINER}-$< $$d ; \
	  fi \
	done
	find . -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$<-files.tar -T -
	a-put --skip-filelist -b ${CONTAINER}-$< ${WORKDIR}/allas/$</$<-files.tar
	rm -f ${WORKDIR}/allas/$</$<-files.tar


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
	TMPDIR=/proj/nlpl/data/OPUS/tmp opus_langid -f ${subst /raw-langid/,/raw/,$@} -t $@




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


