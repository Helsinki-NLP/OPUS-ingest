# -*-makefile-*-
#

LANGUAGES   = $(sort $(notdir $(wildcard ${CORPUSRAW}/??)) \
                     $(notdir $(wildcard ${CORPUSRAW}/???)) \
                     $(notdir $(wildcard ${CORPUSRAW}/????)))


all:
	${MAKE} all-wordalign

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.wordalign-new


