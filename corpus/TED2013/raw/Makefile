

URL = http://www.casmacat.eu/corpus/ted2013

LANGPAIRS = en-ar en-de en-es en-fa en-fr en-it en-nl en-pl en-pt en-ro en-ru en-sl en-tr en-zh


XLIFF = $(patsubst %,ted2013.%.xliff.gz,${LANGPAIRS})
ALGXML = $(foreach L,${LANGPAIRS},$L/ted2013.$L.xml.gz)


all: ${ALGXML}

${XLIFF}:
	wget ${URL}/$@


## need to do some complicated file tests because languages in the original
## xliff files are not alphabteically sorted!

${ALGXML}: 
	${MAKE} $(notdir $(@:xml.gz=xliff.gz))
	mkdir -p $(dir $@)
	-zcat $(notdir $(@:xml.gz=xliff.gz)) | tidy -xml -utf8 -f |\
	  sed 's/$$in_ext/$(word 1,$(subst -, ,$(dir $@)))/' |\
	  sed 's/$$out_ext/$(word 2,$(subst -, ,$(dir $@)))' > $@.xliff
	letsmt_convert -i xliff -o xces $@.xliff $(@:.gz=)
	if [ -e $(@:.gz=) ]; then \
	  sed 's/xml/xml.gz/' < $(@:.gz=) | gzip -c > $@; \
	  rm -f $(@:.gz=); \
	  rm -f $@.xliff; \
	else \
	  S=$(subst /,,$(lastword $(subst -, ,$(dir $@)))); \
	  T=$(firstword $(subst -, ,$(dir $@))); \
	  sed 's/xml/xml.gz/' < $$S-$$T/$(notdir $(@:.gz=)) |\
	  gzip -c > $$S-$$T/$(notdir $@); \
	  rm -f $$S-$$T/$(notdir $(@:.gz=)); \
	  rm -f $@.xliff; \
	  ( cd $(dir $@); ln -s ../$$S-$$T/$(notdir $@) . ); \
	fi
	gzip -f $(word 1,$(subst -, ,$(dir $@)))/$(notdir $(@:.gz=))
	gzip -f $(word 2,$(subst -, ,$(dir $@)))$(notdir $(@:.gz=))
	mkdir -p ../src
	mv $(notdir $(@:xml.gz=xliff.gz)) ../src/

