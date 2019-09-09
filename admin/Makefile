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
ifneq ($(wildcard ../corpus/Makefile.submit),)
  include ../corpus/Makefile.submit
endif


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

DATE = ${shell date '+%F'}

## file statistics
statistics: ${OPUS}/statistics-${DATE}.md

## print usage on ObjectStorage
storage-usage:
	module load bioconda/3
	source /appl/opt/allas_conf
	rclone about pouta:

${OPUS}/statistics-${DATE}.md:
	echo '# Some file statistics of OUS releases' > $@
	echo '' >> $@
	echo "* size per corpus" >> $@
	echo '' >> $@
	echo '```' >> $@
	cd ${OPUS} && du -hs * |\
	grep -v statistics |\
	grep -v README >> $@
	echo '```' >> $@
	echo '' >> $@
	echo "* total size" >> $@
	echo '' >> $@
	echo '```' >> $@
	du -hs . >> $@
	echo '```' >> $@
	echo '' >> $@
	echo "* nr of files per corpus" >> $@
	echo '' >> $@
	echo '```' >> $@
	for c in ${CORPORA}; do \
	  echo -n "$$c: "; \
	  find ${OPUS}/$$c -type f | wc -l >> $@; \
	done
	echo '```' >> $@


update-api:
	./update-opus-api.sh

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
## BIG_CORPORA ...... corpora with files > 5G
## MASSIVE_CORPORA .. corpora with lots of languages (bitexts)
##
##-------------------------------------------------------------------

BIG_CORPORA = giga-fren MultiUN EUbookshop ParaCrawl OpenSubtitles
MASSIVE_CORPORA = JW300 Ubuntu GNOME
SWIFT_EXTRA = 
MAXSIZE = 5G

upload-all: upload-all-normal upload-all-big upload-all-massive

upload-all-normal:
	@for c in $(filter-out ${MASSIVE_CORPORA} ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c upload; \
	done

upload-all-big:
	@for c in ${BIG_CORPORA}; do \
	    ${MAKE} CORPUS=$$c SWIFT_EXTRA='--use-slo --segment-size ${MAXSIZE}' upload; \
	    swift post OPUS-$$c_segments --read-acl ".r:*"; \
	done

upload-all-massive:
	@for c in ${MASSIVE_CORPORA}; do \
	    ${MAKE} CORPUS=$$c upload-no-moses-tmx-smt; \
	done







upload-opensubs:
	${MAKE} CORPUS=OpenSubtitles SWIFT_EXTRA='--use-slo --segment-size ${MAXSIZE}' upload

upload-ubuntu:
	${MAKE} CORPUS=Ubuntu upload-no-smt

upload-gnome:
	${MAKE} CORPUS=GNOME upload

upload-kde4:
	${MAKE} CORPUS=KDE4 upload

upload-EUbookshop:
	${MAKE} CORPUS=EUbookshop SWIFT_EXTRA='--use-slo --segment-size ${MAXSIZE}' upload


## for some reason OpenSubs2018 sometimes breaks
## and not all files are uploaded 
## message: No JSON object could be decoded
## (what can we do about it?)

upload-opensubs2018:
	${MAKE} VERSIONS=v2018 upload-opensubs

upload-subs2018-zip-xml:
	@cd ${OPUS}; \
	cd OpenSubtitles; \
	for f in v2018/xml/*.zip; do \
	  swift upload OPUS-OpenSubtitles --changed --skip-identical \
		--use-slo --segment-size ${MAXSIZE} $$f ;\
	done; \
	cd ..;
	swift post OPUS-OpenSubtitles --read-acl ".r:*"

upload-euBookshop-zip-xml:
	@cd ${OPUS}; \
	cd EUbookshop; \
	for f in v2/xml/*.zip; do \
	  swift upload OPUS-EUbookshop --changed --skip-identical \
		--use-slo --segment-size ${MAXSIZE} $$f ;\
	done; \
	cd ..;
	swift post OPUS-EUbookshop --read-acl ".r:*"

upload-euBookshop-zip-en-xml:
	@cd ${OPUS}; \
	cd EUbookshop; \
	  swift upload OPUS-EUbookshop --changed --skip-identical \
		--use-slo --segment-size ${MAXSIZE} v2/xml/en.zip ;\
	cd ..;
	swift post OPUS-EUbookshop --read-acl ".r:*"


upload-subs2018-zip-raw:
	@cd ${OPUS}; \
	cd OpenSubtitles; \
	for f in v2018/raw/*.zip; do \
	  swift upload OPUS-OpenSubtitles --changed --skip-identical \
		--use-slo --segment-size ${MAXSIZE} $$f ;\
	done; \
	cd ..;
	swift post OPUS-OpenSubtitles --read-acl ".r:*"

upload-subs2018-gz:
	@cd ${OPUS}; \
	cd OpenSubtitles; \
	for f in v2018/xml/*.gz; do \
	  swift upload OPUS-OpenSubtitles --changed --skip-identical \
		--use-slo --segment-size ${MAXSIZE} $$f ;\
	done; \
	cd ..;
	swift post OPUS-OpenSubtitles --read-acl ".r:*"



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
	  echo "running find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \;"; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"


## upload for big corpora
upload-big:
	${MAKE} SWIFT_EXTRA='--use-slo --segment-size ${MAXSIZE}' upload


upload-no-smt:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  cd ${CORPUS}; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' \
			-not -path '*\/smt' -not -path '*\/dic' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"

upload-no-tmx-smt:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  cd ${CORPUS}; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' \
			-not -path '*\/tmx' -not -path '*\/smt' -not -path '*\/dic' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  cd ..; \
	done
	swift post ${CONTAINER} --read-acl ".r:*"

upload-no-moses-tmx-smt:
	@cd ${OPUS}; \
	for v in ${VERSIONS}; do \
	  swift delete ${CONTAINER} $$v/moses; \
	  cd ${CORPUS}; \
	  find $$v -mindepth 1 -maxdepth 1 -type d -not -path '*\/info' \
			-not -path '*\/moses' -not -path '*\/tmx' -not -path '*\/smt' -not -path '*\/dic' -exec \
	       swift upload ${CONTAINER} --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
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







## new upload target:
## - one container per version
## - separate containers for moses, tmx, smt
## - skip info

upload-new:
	@cd ${OPUS}; \
	cd ${CORPUS}; \
	for v in ${VERSIONS}; do \
	  cd $$v; \
	  find . -mindepth 1 -maxdepth 1 -type d \
		-not -path '*\/moses' \
		-not -path '*\/tmx' \
		-not -path '*\/smt' \
		-not -path '*\/info' -exec \
	       swift upload ${CONTAINER}-$$v --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	  swift post ${CONTAINER}-$$v --read-acl ".r:*"; \
	  for d in moses tmx smt; do \
	    if [ -d $$d ]; then \
	      cd $$d; \
	      find . -type f -exec \
	         swift upload ${CONTAINER}-$$v-$$d --changed --skip-identical ${SWIFT_EXTRA} {} \; ;\
	      swift post ${CONTAINER}-$$v-$$d --read-acl ".r:*"; \
	      cd ..; \
	    fi; \
	  done; \
	  cd ..; \
	done



delete-new:
	for v in ${VERSIONS}; do \
	  swift delete ${CONTAINER}-$$v; \
	  swift delete ${CONTAINER}-$$v-moses; \
	  swift delete ${CONTAINER}-$$v-tmx; \
	  swift delete ${CONTAINER}-$$v-smt; \
	done
