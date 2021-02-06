# -*-makefile-*-
#
# prepare connection to allas:
#
#   module load allas
#   allas-conf
#
# store / fetch work files (complete corpus):
#
#   make CORPUS=CORPUSNAME store
#   make CORPUS=CORPUSNAME fetch
#
# alternative way to store / fetch work files for a corpus:
#
#   make CORPUSNAME.stored
#   make CORPUSNAME.fetched
#
#
# store individual sub-directories in a corpus
#
#   make CORPUSNAME/raw.allas
#   make CORPUSNAME/xml.allas
#   ...
#
# fetch individual dub-directories from allas:
#
#  make CORPUSNAME/src.fetch
#  make CORPUSNAME/xml.fetch
#  make CORPUSNAME/raw/en.fetch
#  ...
#
#


include Makefile.def

## container base name
CONTAINER = ${WORK_CONTAINER_BASENAME}

#-------------------------------------------------
# download corpus from allas to local dir
# requires to load and configure allas-module!
#
#    module load allas
#    allas-conf -k
#
# select work project!
#-------------------------------------------------

## corpora in OPUS
OPUS_CORPORA         = $(subst /,,$(wildcard */))
OPUS_CORPORA_STORED  = ${patsubst %,%.stored,${OPUS_CORPORA}}
OPUS_CORPORA_FETCHED = ${patsubst %,%.fetched,${OPUS_CORPORA}}


.PHONY: store store-corpus update-corpus-storage
.PHONY: fetch fetch-corpus retrieve-corpus
store store-corpus update-corpus-storage: ${CORPUS}.stored
fetch fetch-corpus retrieve-corpus: ${CORPUS}.fetched


${OPUS_CORPORA_FETCHED}:
	@if [ -d ${@:.fetched=} ]; then \
	  mv ${@:.fetched=} ${@:.fetched=}-$(shell date +%F); \
	fi
	${MAKE} ${@:.fetched=.fetch}
	touch $@


%.fetch:
	@if   [[ ${words ${subst /, ,$@}} -eq 1 ]]; then \
	  c=${notdir ${@:.fetch=}}; \
	  mkdir -p $$c; \
	  cd $$c; \
	  a-get ${CONTAINER}-$$c/$$c-files.tar; \
          for o in `a-list ${CONTAINER}-$$c | tr "\n" ' '`; do \
            a-get $$o; \
          done; \
	  cd ..; \
	  ${MAKE} ${@:.fetch=/raw.fetch}; \
	  ${MAKE} ${@:.fetch=/xml.fetch}; \
	  ${MAKE} ${@:.fetch=/parsed.fetch}; \
	elif [[ ${words ${subst /, ,$@}} -eq 2 ]]; then \
	  c=${firstword ${subst /, ,$@}}; \
	  d=${notdir ${@:.fetch=}}; \
	  mkdir -p $$c; \
	  cd $$c; \
	  if [[ ( $$d == "xml" ) || ( $$d == "parsed" ) || ( $$d == "raw" ) ]]; then \
	    a-get ${CONTAINER}-$$c-$$d/$$d-files.tar; \
            for o in `a-list ${CONTAINER}-$$c-$$d | tr "\n" ' '`; do \
              a-get $$o; \
            done \
	  else \
	    a-get ${CONTAINER}-$$c/$$d.tar; \
	  fi \
	else \
	  c=${word 1,${subst /, ,$@}}; \
	  d=${word 2,${subst /, ,$@}}; \
	  f=${notdir ${@:.fetch=}}; \
	  mkdir -p $$c; \
	  cd $$c; \
	  a-get ${CONTAINER}-$$c-$$d/$$f.tar; \
	fi

## fetch from the old containers
## NOTE: need to use the release project on allas!
%.fetchold:
	${MAKE} CONTAINER=project-OPUS-corpus ${@:.fetchold=.fetch}



APUT_FLAGS = -p ${CSC_WORK_PROJECT} --override --nc --skip-filelist

## store corpus data on allas
## cleanup untracked files in local git tree
## --> this is quite dangerous (but convenient)

${OPUS_CORPORA_STORED}: %.stored: %
	echo "upload $<"
	for d in `find $< -mindepth 1 -maxdepth 1 -type d -printf ' %P'`; do \
	  echo "processing $</$$d"; \
	  ${MAKE} $</$$d.allas; \
	done
	mkdir -p ${WORKDIR}/allas/$<
	cd $< && find . -maxdepth 1 -type f | grep -v '\.allas' | \
	tar -cf ${WORKDIR}/allas/$</$<-files.tar -T -
	a-put ${APUT_FLAGS} -b ${CONTAINER}-$< ${WORKDIR}/allas/$</$<-files.tar
	rm -f ${WORKDIR}/allas/$</$<-files.tar
	rmdir ${WORKDIR}/allas/$<; \
	git clean -df $<
	touch $@

## store a corpus sub-directory on allas
## treat xml/raw/parsed as special cases (separate packages per language!)
## TODO: do we have to make sure that this is a subdir we want to store?

%.allas: %
	mkdir -p ${WORKDIR}/allas/$<
	( d=${notdir $<}; \
	  c=$(patsubst %/,%,${dir $<}); \
	  b=${subst /,-,$<}; \
	  cd ${dir $<}; \
	  if [[ ( $$d == "xml" ) || ( $$d == "parsed" ) || ( $$d == "raw" ) ]]; then \
	    for f in `find $$d -mindepth 1 -maxdepth 1 -type d -printf ' %p'`; do \
	      echo "processing ${dir $<}$$f"; \
	      tar -cf ${WORKDIR}/allas/$$c/$$f.tar $$f; \
	      a-put ${APUT_FLAGS} -b ${CONTAINER}-$$b ${WORKDIR}/allas/$$c/$$f.tar; \
	      rm -f ${WORKDIR}/allas/$$c/$$f.tar; \
	    done; \
	    find $$d -maxdepth 1 -type f | tar -cf ${WORKDIR}/allas/$</$$d-files.tar -T -; \
	    a-put ${APUT_FLAGS} -b ${CONTAINER}-$$b ${WORKDIR}/allas/$</$$d-files.tar; \
	    rm -f ${WORKDIR}/allas/$</$$d-files.tar; \
	  else \
	    echo "processing $<"; \
	    tar -cf ${WORKDIR}/allas/$</$$d.tar $$d; \
	    a-put ${APUT_FLAGS} -b ${CONTAINER}-$$c ${WORKDIR}/allas/$</$$d.tar; \
	    rm -f ${WORKDIR}/allas/$</$$d.tar; \
	  fi; )
	rmdir ${WORKDIR}/allas/$<
	touch $@




## run language identification on all corpora

ALLRAW = ${wildcard /proj/nlpl/data/OPUS/*/latest/raw/*.zip}
ALLRAW_LANGID = ${subst /raw/,/raw-langid/,${ALLRAW}}

run-langid: ${ALLRAW_LANGID}

${ALLRAW_LANGID}:
	mkdir -p $(dir $@)
	TMPDIR=${OPUSRELEASE}/tmp opus_langid -f ${subst /raw-langid/,/raw/,$@} -t $@



