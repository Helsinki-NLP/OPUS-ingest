# -*-makefile-*-
#


align:
	${MAKE} ACTION=wordalign-align all-wordalign
	${MAKE} cleanup-all

all:
	${MAKE} all-wordalign


include ../Makefile.def
include ../../Makefile.def

CORPUSXML        = ${CORPUSHOME}/parsed
CORPUSWORDALIGN  = ${CORPUSHOME}/wordalign-ud
CORPUSDIC        = ${CORPUSHOME}/dic-ud

include ../../Makefile.wordalign




