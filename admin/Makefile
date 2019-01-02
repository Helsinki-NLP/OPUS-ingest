# -*-makefile-*-
#--------------------------------------------------------------------
# Joerg Tiedemann			2018-12-20
# tiedeman@gmail.com
#
# some admin tasks
#  - copying data to ObjectStorage
#  - syncing files to abel
#--------------------------------------------------------------------


## include generic target for submitting jobs
include ../corpus/Makefile.submit


## location on taito and abel
OPUS_TAITO = /proj/nlpl/data/OPUS
OPUS_ABEL  = /projects/nlpl/data/OPUS
OPUS       = ${OPUS_TAITO}

## user and host to access abel
ABEL_USER  = joerg@abel.uio.no

## name of all corpora and their released versions
CORPORA  = ${sort ${notdir ${shell find ${OPUS} -mindepth 1 -maxdepth 1 -type d }}}
CORPUS   = ${firstword ${CORPORA}}
VERSIONS = ${notdir ${shell find ${OPUS}/${CORPUS} -maxdepth 1 -mindepth 1 -type d}}

## container name for object storage
CONTAINER = OPUS-${CORPUS}

##-------------------------------------------------------------------
## uploading data to object storage
##-------------------------------------------------------------------
## sync selected release data to abel
## (raw XML data and sentence alignments)
##
##   make opus2abel.submit
##-------------------------------------------------------------------

opus2abel: opus2abel-moses
	for c in ${CORPORA}; do \
	  ssh ${ABEL_USER} mkdir -p ${OPUS_ABEL}/$$c/latest; \
	  rsync -ahv --delete \
		${OPUS}/$$c/latest/raw ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	  rsync -ahv --delete \
		--exclude '**/.*' \
		--exclude '**/*.alt.xml.gz' \
		--exclude '**/*.insert.xml.gz' \
		--exclude '**/*.misaligned.xml.gz' \
		--exclude '**/*.pct.xml.gz' \
		--exclude '**/*.spell.xml.gz' \
		--exclude '**/*.other.xml.gz' \
		--include '**/*.xml.gz' \
		--include '**/' \
		--exclude '*' \
	  ${OPUS}/$$c/latest/xml ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	  rsync -ahv ${OPUS}/$$c/latest/LICENSE \
		${OPUS}/$$c/latest/raw ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	  rsync -ahv ${OPUS}/$$c/latest/README \
		${OPUS}/$$c/latest/raw ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	done

opus2abel-moses:
	for c in ${CORPORA}; do \
	  ssh ${ABEL_USER} mkdir -p ${OPUS_ABEL}/$$c/latest; \
	  rsync -ahv --delete  \
	    ${OPUS}/$$c/latest/moses ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	  rsync -ahv --delete --exclude '**/*.tok.gz' \
	    ${OPUS}/$$c/latest/mono ${ABEL_USER}:${OPUS_ABEL}/$$c/latest/; \
	done


##-------------------------------------------------------------------
## uploading data to object storage
##-------------------------------------------------------------------
##
## NOTE!!!!!!!
##
## before running - don't forget to
## source /proj/OPUS/admin/project_2000661-openrc.sh
##
## corpora with some files bigger than 5GB: find . -size +5G
## (SWIFT_EXTRA can be set to extra swift arguments to take care
##  of bigger files - see 'all')
##
##-------------------------------------------------------------------

BIG_CORPORA = giga-fren MultiUN EUbookshop ParaCrawl OpenSubtitles
SWIFT_EXTRA = 

upload-all: upload-small upload-big

upload-small:
	@for c in $(filter-out ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c upload; \
	done

upload-big:
	@for c in $(filter ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c SWIFT_EXTRA='--use-slo --segment-size 5G' upload; \
	    swift post OPUS-$$c_segments --read-acl ".r:*"; \
	done

upload-opensubs:
	${MAKE} CORPUS=OpenSubtitles SWIFT_EXTRA='--use-slo --segment-size 5G' upload

upload-ubuntu:
	${MAKE} CORPUS=Ubuntu upload-no-smt

upload-gnome:
	${MAKE} CORPUS=GNOME upload

upload-kde4:
	${MAKE} CORPUS=KDE4 upload



## upload eflomal model priors
eflomal:
	mkdir priors
	cp ../eflomal/*.priors priors/
	find priors -type f -empty -delete
	gzip -f priors/*.priors
	swift upload OPUS-eflomal --changed --skip-identical priors
	swift post OPUS-eflomal --read-acl ".r:*"
	rm -f priors/*.priors.gz
	rmdir priors



## upload all subdir's in each version but not the info files
upload:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  cd ${CORPUS}; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"

upload-no-smt:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  cd ${CORPUS}; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' \
			-not -path '*\/smt' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"




## with all files
upload-all:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  cd ${CORPUS}; \
	  swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} $$v; \
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"



## a variant of uploading including a directory for the latest version
## (only latest is created and the actual version subdir is not created)

upload-with-latest:
	@cd ${OPUS}; \
	for v in ${VERSIONS} latest; do \
	  if [ `readlink ${CORPUS}/latest` != "$$v" ]; then \
	    cd ${CORPUS}; \
	    swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} $$v; \
	    cd ..; \
	  fi \
	done


