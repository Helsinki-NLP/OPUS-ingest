
include ../Makefile.def
include Makefile.def

.PHONY: corpus
corpus:
	${MAKE} -C src all
	${MAKE} annotate
	rm -fr data


.PHONY: all
all:
	${MAKE} corpus
	${MAKE} web-corpus

backup: before-${VERSION}

before-${VERSION}:
	mkdir $@
	mv dic* raw xml src wordalign $@/
	mkdir xml raw src dic wordalign
	-mv $@/dic*/Makefile dic/
	-mv $@/xml/Makefile xml/
	-mv $@/raw/Makefile raw/
	-mv $@/src/Makefile src/
	-mv $@/src/*.pl src/
	-mv $@/src/*.sh src/
	-mv $@/wordalign/Makefile wordalign/


.PHONY: web-corpus
web-corpus: tmx moses alg_samples html


# include some standard OPUS targets for processing/annotating data

# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
