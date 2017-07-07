# -*-makefile-*-

# set important variables
#
# !!! EDIT Makefile.def !!!
#

include Makefile.def
include ../Makefile.def

# make all:
#
# - fetch sources (src/Makefile)  <--- put your own procedures in here!!!
# - sentence splitting
# - sentence alignment (raw/Makefile)
# - tokenization and language specific annotation (tagging, parsing)
# - make the download page (make html)
# - create CWB index for on-line search
# - run word alignment

all:
	${MAKE} -C src all
	${MAKE} preprocess
	${MAKE} -C raw all
	${MAKE} annotate
	( cd xml; ln -s ../raw/*-* .; )
	${MAKE} html
	${MAKE} cwb-index
	${MAKE} -C wordalign all
	${MAKE} clean

clean:
	rm -fr data

real-clean:
	${MAKE} -C raw clean-align
	${MAKE} clean-xml
	${MAKE} clean-raw
	rm -f xml/*-*

# standard procedures are specified in the following makefiles

include ../Makefile.preprocess
include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.html

