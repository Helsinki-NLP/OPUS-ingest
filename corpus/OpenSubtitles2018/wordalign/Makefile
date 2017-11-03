# -*-makefile-*-
#


all:
	${MAKE} all-wordalign


include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.wordalign


failed = es-pl  fr-pl  he-pt     hu-nl  it-ru  pt_br-ru  ro-tr\
	es-pl  fr-pt  he-pt     hu-nl  it-sr  pt-sr     ro-tr\
	fr-it  fr-pt  hr-pl     hu-pl  it-sr  pt-sr\
	fr-it  fr-sr  hr-pl     hu-pl  nl-sr  ro-ru\
	fr-nl  fr-sr  hr-pt_br  hu-pt  nl-sr  ro-ru\
	fr-nl  fr-tr  hr-ro     hu-pt  pl-pt  ro-sl\
	fr-pl  fr-tr  hr-ro     it-ru  pl-pt  ro-sl

fix:
	for l in ${failed}; do \
	  make LANGPAIR=$$l submit-wordalign-align;\
	done
