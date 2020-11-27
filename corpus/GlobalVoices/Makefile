
include ../Makefile.def
include Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} annotate
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} publish
	${MAKE} cwb-index

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


# include some standard OPUS targets for processing/annotating data

include ../Makefile.process
# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
# include ../Makefile.html
include ../Makefile.release
include ../Makefile.submit
include ../Makefile.udparse
