

## all raw XML files (that will be big)
#RAWXML = ${patsubst %.srt,../raw/%.xml.gz,${wildcard */*.srt}}
RAWTXT = ${patsubst %.srt,../txt/%.txt,${wildcard */*.srt}}
#RAWTXT = ${patsubst %.srt,../txt/%.txt,${wildcard fi/*.srt}}
#RAWTXT = ${patsubst %.srt,../txt/%.txt,${wildcard en/*.srt}}
XMLFILES = ${patsubst ../txt/%.txt,../xml/%.xml.gz,${RAWTXT}}

.PHONY: all
all: .langdirs .rename
	${MAKE} resplit
	${MAKE} convert
#	${MAKE} cleanup

.PHONY: convert
convert: ${XMLFILES}

.PHONY: resplit
resplit: .rename
	@mkdir -p ../txt
	python3 resplit2.py -i . -o ../txt

.resplit:
	${MAKE} resplit
	touch $@	

.PHONY: cleanup
cleanup:
	rm -fr AllSrt_Dec2016a
	rm -f .rename
	find . -type f -name '*.srt' | xargs rm
	-rmdir `cut -f3 -d'.' QED_v2.0a_srts_list.txt | sort | uniq`
	rm -f .langdirs
	rm -f .resplit

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

## convert to plain text
${RAWTXT}: .resplit

#${RAWTXT}: ../txt/%.txt: %.srt
#	@mkdir -p ${dir $@}
#	python3 resplit.py -i $< 2>/dev/null > $@

${XMLFILES}: ../xml/%.xml.gz: ../txt/%.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	gzip -f ${@:.gz=}

## convert to XML (and cleanup srt file)
#${RAWXML}: ../raw/%.xml.gz: %.srt
#	-mkdir -p ${dir $@}
#	-mkdir -p $(patsubst ../raw/%,../xml/%,${dir $@})
#	srt2xml -r $@ -e utf8 -l ${firstword ${subst /, ,$<}} $< |\
#		gzip -c	> $(patsubst ../raw/%,../xml/%,$@)
#	rm -f $<
