

URL = http://www.casmacat.eu/corpus/news-commentary

LANGPAIRS = ar-en ar-fr cs-ar cs-en cs-zh de-ar de-cs de-en de-fr de-nl de-zh en-nl es-ar es-cs es-de es-en es-fr es-it es-ja es-nl es-pt es-ru es-zh fr-cs fr-en fr-nl fr-zh it-ar it-cs it-de it-en it-fr it-nl it-zh ja-ar ja-cs ja-de ja-en ja-fr ja-zh nl-ar nl-cs nl-zh pt-ar pt-cs pt-de pt-en pt-fr pt-it pt-nl pt-zh ru-ar ru-cs ru-de ru-en ru-fr ru-it ru-ja ru-nl ru-pt ru-zh zh-ar zh-en 

XLIFF = $(patsubst %,news-commentary-v9.%.xliff.gz,${LANGPAIRS})
# ALGXML = $(patsubst %,%/news-commentary-v9.xml.gz,$(LANGPAIRS))
ALGXML = $(foreach L,${LANGPAIRS},$L/news-commentary-v9.$L.xml.gz)


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


## old: not good because it over-writes the monolingual files each time
##      it appears together with another language

# ${ALGXML}: %/news-commentary-v9.xml.gz: news-commentary-v9.%.xliff.gz
# 	mkdir -p $(dir $@)
# 	-zcat $< | tidy -xml -utf8 -f |\
# 	sed 's/$$in_ext/$(word 1,$(subst -, ,$(dir $@)))/' |\
# 	sed 's/$$out_ext/$(word 2,$(subst -, ,$(dir $@)))' > $@.xliff
# 	letsmt_convert -i xliff -o xces $@.xliff $(notdir $(@:.gz=))
# 	sed 's/xml/xml.gz/' < $(@:.gz=) | gzip -c > $@
# 	gzip -f $(word 1,$(subst -, ,$(dir $@)))/$(notdir $(@:.gz=))
# 	gzip -f $(word 2,$(subst -, ,$(dir $@)))$(notdir $(@:.gz=))
# 	rm -f $(@:.gz=)
# 	rm -f $@.xliff

