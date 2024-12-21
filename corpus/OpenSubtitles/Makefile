# -*-makefile-*-

include Makefile.def
include ../Makefile.def


SRC = xx
TRG = xx

all:

convert:
	${MAKE} -C src all

convert-job:
	${MAKE} HPC_DISK=200 HPC_MEM=16g HPC_CORES=16 HPC_MODULES= convert.submit

intraling-website: ${OPUSPUB}/${CORPUS}-alt-${VERSION}.php

${OPUSPUB}/${CORPUS}-alt-${VERSION}.php:
	scripts/make-intraling-website.pl ${CORPUS} ${VERSION} > $@
	chmod 644 $@


# include som standard OPUS variables/targets

include ../Makefile.process
include ../Makefile.release
include ../Makefile.submit


# include ../Makefile.annotate
# include ../Makefile.cwb
# include ../Makefile.html
# include ../Makefile.udparse
# include ../Makefile.parse


