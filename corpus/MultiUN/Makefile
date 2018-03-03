# -*-makefile-*-

# set important variables

include Makefile.def
include ../Makefile.def

LANGUAGES = ar de en es fr ru zh
RAWLANGS  = $(patsubst %,raw/%,$(LANGUAGES))

corpus:
	${MAKE} -C src corpus
	${MAKE} $(RAWLANGS)
	${MAKE} -C raw corpus
	-( cd xml; ln -s ../raw/* . )
	${MAKE} html
	-( rm xml/?? )
	${MAKE} annotate
	${MAKE} refresh-html
	rm -fr data un

continue:
	${MAKE} html
	-( rm xml/?? )
	${MAKE} annotate
	${MAKE} refresh-html
	rm -fr data un


$(RAWLANGS): raw/%: src/multiUN.%.tgz
	tar -xzf $<
	find un/xml/ -name '*.xml' | \
	xargs rename 's/-..\.xml$$/.xml/'
	rm -fr $@
	mkdir -p raw
	mv un/xml/* raw/
	find $@ -name '*.xml' | \
	xargs perl -i -p -e 's/<s n=/<s id=/g'
	find $@ -name '*.xml' | xargs gzip
	for f in `find $@ -name '*:*'`; do \
	  mv $$f `echo $$f | tr ':' '_'`; \
	done
	touch $@


# make all:
#
# - fetch sources (src/Makefile)
# - tokenise and sentence splitting
# - sentence alignment (xml/Makefile)
# - make the download page (make html)
# - create CWB index for on-line search

all:
	${MAKE} corpus
	${MAKE} web-corpus
	rm -fr data

web-corpus:
	${MAKE} -C xml web-corpus
	${MAKE} refresh-html
	${MAKE} cwb-index


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit

