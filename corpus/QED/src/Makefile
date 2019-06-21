

## all raw XML files (that will be big)
RAWXML = ${patsubst %.srt,../raw/%.xml.gz,${wildcard */*.srt}}

.PHONY: all
all: .langdirs .rename
	${MAKE} convert cleanup

.PHONY: convert
convert: ${RAWXML}

.PHONY: cleanup
cleanup:
	rm -fr AllSrt_Dec2016a
	rm -f .rename
	-rmdir `cut -f3 -d'.' QED_v2.0a_srts_list.txt | sort | uniq`
	rm -f .langdirs

## extract srt files
AllSrt_Dec2016a:
	tar -xzf QED_v2.0a_srts.tgz
	-find $@ -type f -name '*\:*.srt' | perl -pe 'print $$_; s/[\:\(\) ]/_/g' | xargs -n2 mv


## create language directories
.langdirs:
	mkdir -p `cut -f3 -d'.' QED_v2.0a_srts_list.txt | sort | uniq`
	touch $@

## rename all files and move them into the language directories
.rename: AllSrt_Dec2016a .langdirs
	-find $< -type f -name '*.srt' | \
	perl -pe 'print $$_; s/^.*\/(.*)\.(.*)\.(.*?)\.(.*?)\.srt*$$/$$3\/$$1.srt/g' | \
	xargs -n2 mv -f
	touch $@

## convert to XML (and cleanup srt file)
${RAWXML}: ../raw/%.xml.gz: %.srt
	-mkdir -p ${dir $@}
	-mkdir -p $(patsubst ../raw/%,../xml/%,${dir $@})
	srt2xml -r $@ -e utf8 -l ${firstword ${subst /, ,$<}} $< |\
		gzip -c	> $(patsubst ../raw/%,../xml/%,$@)
	rm -f $<
