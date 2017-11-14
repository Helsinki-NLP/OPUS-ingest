# -*-makefile-*-

include Makefile.def
include ../Makefile.def


.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C raw all
	${MAKE} annotate
	( cd xml; ln -s ../raw/*.gz . )
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data


.PHONY: real-clean
real-clean:
	${MAKE} clean-xml
	${MAKE} clean-raw


# include som standard OPUS variables/targets

include ../Makefile.process
# include ../Makefile.annotate
include ../Makefile.tag
include ../Makefile.cwb
include ../Makefile.html
include ../Makefile.udparse

