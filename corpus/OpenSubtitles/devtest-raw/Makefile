#
# remove generated subtitles from zip files
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


LANG_ZIPFILES  := $(notdir $(wildcard ../raw/*.zip))

.PHONY: all all-jobs
all all-jobs:
	-${MAKE} extract-devtest
	${MAKE} testsets
	${MAKE} devsets
	touch all.done


.PHONY: extract-devtest
extract-devtest: ${LANG_ZIPFILES}

%.zip:
	mkdir -p ${CORPUS}/raw/$(@:.zip=)
	echo "reserved devtest subtitles (release year ${DEVTEST_YEAR})" > ${CORPUS}/raw/$(@:.zip=)/README
	unzip ../raw/$@ '*/$(@:.zip=)/${DEVTEST_YEAR}/*'
	zip -rq $@ ${CORPUS}/raw/$(@:.zip=)
	find ${CORPUS}/raw/$(@:.zip=) -delete
	zip ../raw/$@ -d '*/$(@:.zip=)/${DEVTEST_YEAR}/*'



TESTSET_ALG_FILES  := $(patsubst ../devtest-xml/test/%.xml.gz,test/%.log,$(wildcard ../devtest-xml/test/*.xml.gz))
DEVSET_ALG_FILES   := $(patsubst ../devtest-xml/dev/%.xml.gz,dev/%.log,$(wildcard ../devtest-xml/dev/*.xml.gz))


testsets: ${TESTSET_ALG_FILES}
devsets: ${DEVSET_ALG_FILES}


# for plain text files:
#
#  zcat test/de-en.xml.gz | opus2bitext -D -c 0.8 -C overlap -e source-file -f target-file

${TESTSET_ALG_FILES} ${DEVSET_ALG_FILES}: %.log: ../devtest-xml/%.xml.gz
	mkdir -p $(dir $@)
	zcat $< | \
	opus2bitext -D \
		-e $(@:.log=.$(firstword $(subst -, ,$(notdir $(@:.log=))))) \
		-f $(@:.log=.$(lastword $(subst -, ,$(notdir $(@:.log=))))) 2> $@

## for selecting only high-overlapping alignments do:
#
#	opus2bitext -c 0.8 -C overlap \
#		-e $(@:.log=.$(firstword $(subst -, ,$(notdir $(@:.log=))))) \
#		-f $(@:.log=.$(lastword $(subst -, ,$(notdir $(@:.log=))))) 2> $@


../devtest-xml/%.xml.gz:
	${MAKE} -C ../devtest-xml $(patsubst ../devtest-xml/%.xml.gz,%.xml.gz,$@)
