
## NOTE!!!!!!!
##
## before running - don't forget to
## source /proj/OPUS/admin/project_2000661-openrc.sh


OPUS     = /proj/nlpl/data/OPUS
CORPORA  = ${sort ${notdir ${shell find ${OPUS} -mindepth 1 -maxdepth 1 -type d }}}
CORPUS   = ${firstword ${CORPORA}}
VERSIONS = ${notdir ${shell find ${OPUS}/${CORPUS} -maxdepth 1 -mindepth 1 -type d}}
CONTAINER = OPUS-${CORPUS}

##
## corpora with some files bigger than 5GB: find . -size +5G
## (SWIFT_EXTRA can be set to extra swift arguments to take care
##  of bigger files - see 'all')
##

BIG_CORPORA = giga-fren MultiUN EUbookshop ParaCrawl OpenSubtitles
SWIFT_EXTRA = 

## missing corpora in import
MISSING = PHP RF SETIMES SPC Tanzil Tatoeba TED2013 TedTalks TEP Ubuntu UN Wikipedia WikiSource WMT-News XhosaNavy

all:
	@for c in $(filter-out ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c upload; \
	done
	@for c in $(filter ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c SWIFT_EXTRA='--use-slo --segment-size 5G' upload; \
	done

missing:
	@for c in $(MISSING); do \
	    ${MAKE} CORPUS=$$c upload; \
	done
	@for c in $(filter ${BIG_CORPORA},${CORPORA}); do \
	    ${MAKE} CORPUS=$$c SWIFT_EXTRA='--use-slo --segment-size 5G' upload; \
	done


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
