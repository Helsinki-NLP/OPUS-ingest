# -*-makefile-*-

# LANGUAGES := $(sort 	$(patsubst %.tar,%,$(notdir $(wildcard src/subtitles-all/*.tar))) \
# 			$(patsubst %.zip,%,$(notdir $(wildcard raw/*.zip))))

LANGUAGES := $(sort $(patsubst %.zip,%,$(notdir $(wildcard raw/*.zip))))


include Makefile.def
include ../Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} -C raw all
	${MAKE} -C devtest-xml all
	${MAKE} -C devtest-raw all
	${MAKE} -C intra all


.PHONY: all-jobs
all-jobs:
	${MAKE} -C src all-jobs
	${MAKE} -C xml all-jobs
	${MAKE} -C raw all-jobs
	${MAKE} -C devtest-xml all-jobs
	${MAKE} -C devtest-raw all-jobs
	${MAKE} -C intra all-jobs


.PHONY: testsets
testsets:
	${MAKE} -C devtest-xml all
	${MAKE} -C devtest-raw all



#fix-info:
#	${OPUSTOOLS}/info2yaml.pl -b ${OPUSRELEASE}/${CORPUS}
#	${MAKE} ${OPUSRELEASE}/${CORPUS}/info.txt
#	make ${CORPUSRELEASE}/info/fi.info ${CORPUSRELEASE}/info/ru.info ${CORPUSRELEASE}/info/sv.info
#	${OPUSTOOLS}/info2yaml.pl -b ${OPUSRELEASE}/${CORPUS}
#	make -C ${OPUSHOME}/admin CORPUS=${CORPUS} VERSION=${VERSION} archive-infofiles


intraling-website: ${OPUSPUB}/${CORPUS}-alt-${VERSION}.php

${OPUSPUB}/${CORPUS}-alt-${VERSION}.php:
	scripts/make-intraling-website.pl ${CORPUS} ${VERSION} > $@
	chmod 644 $@


# include som standard OPUS variables/targets

include ../Makefile.process
include ../Makefile.release
include ../Makefile.submit






## fixing the stupid error of misspelling es_419


# 149_FILES = $(patsubst %,%.fixed,$(shell find . -name '*es_149*.xml.gz'))

# fix-149: $(149_FILES)

# $(149_FILES):
# 	@echo $@
# 	-@if [ ! -e $(subst es_149,es_419,$(@:.fixed=)) ]; then \
# 	  zcat $(@:.fixed=) | sed 's/es_149/es_419/g' | gzip -c > $(subst es_149,es_419,$(@:.fixed=)); \
# 	fi

# release149:
# 	${MAKE} ${CORPUSRELEASE}/xml/es_419.zip ${CORPUSRELEASE}/raw/es_419.zip


# 149_MOSES = $(patsubst %,%.fixed,${wildcard ${CORPUSRELEASE}/intra/*es_149*.zip})

# fix-moses: $(149_MOSES)

# test-moses: ${CORPUSRELEASE}/moses/es_149-vi.txt.zip.fixed

# $(149_MOSES):
# 	rm -fr $@.d
# 	mkdir -p $@.d
# 	unzip -d $@.d $(@:.fixed=)
# 	for d in `ls $@.d/ | grep 'es_149'`; do \
# 	  n=`echo $$d | sed 's/es_149/es_419/g'`; \
# 	  mv $@.d/$$d $@.d/$$n; \
# 	  mv $@.d/README $@.d/README.old; \
# 	  sed 's/es_149/es_419/g' < $@.d/README.old > $@.d/README; \
# 	  rm -f $@.d/README.old; \
# 	done
# 	cd $@.d && zip $(subst es_149,es_419,$(@:.fixed=)) *
# 	rm -fr $@.d


# 149_INFO = $(patsubst %,%.fixed,${wildcard ${CORPUSRELEASE}/info/*es_149*.info})

# fix-info: $(149_INFO)

# $(149_INFO):
# 	mv $(@:.fixed=) $(subst es_149,es_419,$(@:.fixed=))


# 149_TMX = $(patsubst %,%.fixed,${wildcard ${CORPUSRELEASE}/intra/*es_149*.xml.gz})

# fix-tmx: $(149_TMX)

# $(149_TMX):
# 	zcat $(@:.fixed=) | sed 's/es_149/es_419/g' | gzip -c > $(subst es_149,es_419,$(@:.fixed=))


# 149_WEB = $(patsubst %,%.fixed,${wildcard ${CORPUSPUB}/*es_149*})

# fix-web: $(149_WEB)

# $(149_WEB):
# 	mv $(@:.fixed=) $(subst es_149,es_419,$(@:.fixed=))


