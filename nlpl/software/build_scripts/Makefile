#-*-makefile-*-
#
# makefile for installing build_scripts and modules
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Sun Jul  2, 2017
#

include Makefile.common

# config file for cpan
CPANCONFIG = ${NLPL_SOFTWARE}/.cpan/CPAN/MyConfig.pm

# nlpl modules
MODULEDIR = ../modulefiles
MODULES = ${patsubst ${MODULEDIR}/%,${NLPL_MODULES}/%,${wildcard ${MODULEDIR}/*/*lua}}

# nlpl build scripts
# TODO: do we need more than Makfiles in subdirs?
BUILDSCRIPTS = 	${NLPL_BUILD}/Makefile.common \
		${NLPL_BUILD}/clean-env.sh \
		${patsubst %,${NLPL_BUILD}/%,${wildcard */Makefile}}

# all software to be installed
SOFTWARE = ${dir ${wildcard ${NLPL_BUILD}/*/Makefile}}


# install all build scripts and modules
.PHONY: install
install: ${CPANCONFIG} ${BUILDSCRIPTS} ${MODULES}

.PHONY: install-software
install-software: ${CPANCONFIG} ${BUILDSCRIPTS}
	( source ${NLPL_BUILD}/clean-env.sh; \
	  for s in ${SOFTWARE}; do \
	    ${MAKE} -C $$s all install; \
	  done; )

# list files that would be installed
.PHONY: list
list:
	@echo "---------- CONFIG FILES --------"
	@echo ${CPANCONFIG}
	@echo "---------- MODULES -------------"
	@echo ${MODULES}
	@echo "---------- SOFTWARE ------------"
	@echo ${SOFTWARE}
	@echo "---------- BUILD SCRIPTS -------"
	@echo ${BUILDSCRIPTS}

${CPANCONFIG}: ${NLPL_SOFTWARE}/%: ../%
	${MKDIR} ${dir $@}
	if [ -e $@ ]; then mv $@ $@.`date +%F`; fi
	${INSTALL_DATA} $< $@

${MODULES}: ${NLPL_MODULES}/%: ${MODULEDIR}/%
	${MKDIR} ${dir $@}
	${INSTALL_DATA} $< $@

${BUILDSCRIPTS}: ${NLPL_BUILD}/%: %
	${MKDIR} ${dir $@}
	${INSTALL_DATA} $< $@
