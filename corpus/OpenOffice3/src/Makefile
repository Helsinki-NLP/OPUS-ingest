
LANGS = $(notdir $(wildcard help/??)) $(notdir $(wildcard help/??-??))
NORM  = $(subst -,_,$(notdir $(wildcard help/??-??)))

UNJAR=jar xf


all: help
	for l in ${LANGS}; do make LA=$$l convert; done
#	if [ ! -e zh_CN ]; then ln -s zh-CN zh_CN; fi
#	if [ ! -e zh_CN ]; then ln -s en-GB en_GB; fi


# link language directories to "normalized" names
# (underscore instead of hyphen)

link_langs: $(NORM)

$(NORM):
	ln -s $(subst _,-,$@) $@


# unpack help texts

help: ${OPUSDATA}/${CORPUS}/help.tar.gz
	tar -xzf $<

# unpack all jar files (not really converting anything ...)

convert: ${LA}

${LA}:
	mkdir $@
	mv help/$@/*.jar $@
	( cd $@; find . -name '*.jar' -exec ${UNJAR} {} \; )
	rm -fr ${LA}/picture
	rm -fr ${LA}/*.idx
	rm ${LA}/*.*
	make cleanUS

# remove English files from translation directories

cleanUS:
	find ${LA} -exec grep -l 'content="en-US"' {} \; |\
	xargs rm -f; \

