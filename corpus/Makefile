# -*-makefile-*-
#
# prepare connection to allas (project_2003093):
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
# fetch from old containers (requires release project)
#
#   make CORPUSNAME.fetchold
#
#
# store individual sub-directories in a corpus
#
#   make CORPUSNAME/raw.allas
#   make CORPUSNAME/xml.allas
#   ...
#
# fetch individual sub-directories from allas:
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
	@which a-get
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

add-yaml-files:
	find ${OPUSRELEASE}/ -mindepth 1 -maxdepth 1 -type d -exec ${OPUSTOOLS}/info2yaml.pl {} \;

redo-yaml-files:
	find ${OPUSRELEASE}/ -mindepth 1 -maxdepth 1 -type d -exec ${OPUSTOOLS}/info2yaml.pl -b {} \;


fix-readme-encoding:
	find ${OPUSRELEASE}/ -name 'README' -exec ${OPUSTOOLS}/remove-unicode-chars.sh {} \;



.PHONY: index
index:
	rm -f index-info.txt
	${MAKE} ${OPUSRELEASE}/index-info.txt

${OPUSRELEASE}/index-info.txt: index-info.txt
	cp $< $@

index-info.txt:
	find ${OPUSRELEASE}/ -name 'info.yaml' | sed 's#^${OPUSRELEASE}/##' | sort > $@

add-index-files:
	for c in ${sort ${notdir ${shell find ${OPUSRELEASE}/ -mindepth 1 -maxdepth 1 -type d }}}; do \
	  rsync ${OPUSRELEASE}/$$c/releases.txt ${OPUSCORPORA}/$$c/releases.txt;\
	  rsync ${OPUSRELEASE}/$$c/info.txt ${OPUSCORPORA}/$$c/info.txt;\
	  rsync -zav ${OPUSRELEASE}/$$c/*.info ${OPUSCORPORA}/$$c/;\
	  rsync -zav ${OPUSRELEASE}/$$c/index*.txt ${OPUSCORPORA}/$$c/;\
	done
	git add ${OPUSCORPORA}/*/info.txt \
		${OPUSCORPORA}/*/releases.txt \
		${OPUSCORPORA}/*/*.info \
		${OPUSCORPORA}/*/index*.txt



delete_extra_done_files_on_allas:
	which a-get
	for s in `find ${OPUSRELEASE}/ -name 'statistics.yaml'  | xargs grep 'done' | cut -f1 -d: | sort -u`; do \
	  for w in `grep 'url: .*_done\.zip' $$s | sed 's#^.*https://object.pouta.csc.fi/##'`; do \
	    c=`echo $$w | cut -f1 -d/`; \
	    f=`echo $$w | cut -f2- -d/`; \
	    if [ "$$f" != "" ]; then \
	      echo "swift delete $$c $$f"; \
	      swift delete $$c $$f; \
	    fi \
	  done; \
	  c=`echo $$s | sed 's#^${OPUSRELEASE}/##' | cut -f1 -d/`; \
	  echo "redo index files in ${OPUSRELEASE}/$$c"; \
	  swift list OPUS-$$c > ${OPUSRELEASE}/$$c/index.txt; \
	  rclone ls allas:OPUS-$$c --max-depth 5 > ${OPUSRELEASE}/$$c/index-filesize.txt; \
	  ${OPUSTOOLS}/info2yaml.pl -b ${OPUSRELEASE}/$$c; \
	done




