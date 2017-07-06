#-*-makefile-*-
#
# makefile for installing software
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
#

include Makefile.common

# all software to be installed
SOFTWARE = ${dir ${wildcard */Makefile}}

.PHONY: install
install:
	for s in ${SOFTWARE}; do \
		${MAKE} -C $$s all;\
		sudo ${MAKE} -C $$s install; \
		${MAKE} -C $$s clean; \
	done

