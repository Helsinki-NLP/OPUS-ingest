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
MODULEDIR = ../../modules
MODULES = ${patsubst ${MODULEDIR}/%,${NLPL_MODULES}/%,${wildcard ${MODULEDIR}/*/*lua}}

# nlpl build scripts
BUILDSCRIPTS = 	${NLPL_SOFTWARE}/build_scripts/Makefile.common \
		${NLPL_SOFTWARE}/build_scripts/clean-env.sh \
		${patsubst %,${NLPL_SOFTWARE}/build_scripts/%,${wildcard */Makefile}}



# install all build scripts and modules
.PHONY: install
install: ${CPANCONFIG} ${BUILDSCRIPTS} ${MODULES}

# list files that would be installed
.PHONY: list
list:
	@echo ${CPANCONFIG}
	@echo ${MODULES}
	@echo ${BUILDSCRIPTS}

${CPANCONFIG}: ${NLPL_SOFTWARE}/%: ../%
	mkdir -p ${dir $@}
	${INSTALL_DATA} $< $@

${MODULES}: ${NLPL_MODULES}/%: ${MODULEDIR}/%
	mkdir -p ${dir $@}
	${INSTALL_DATA} $< $@

${BUILDSCRIPTS}: ${NLPL_SOFTWARE}/build_scripts/%: %
	mkdir -p ${dir $@}
	${INSTALL_DATA} $< $@
