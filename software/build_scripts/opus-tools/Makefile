#-*-makefile-*-
#
# makefile for installing opus-tools under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Tue Jun 27, 2017
#

include ../Makefile.common


PACKAGE = opus-tools
VERSION = 0.02

GITURL = https://bitbucket.org/tiedemann/opus-tools.git

.PHONY: all fetch install clean
all: ${NLPL_BIN}/opus-read

fetch: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
install: ${NLPL_BIN}/opus-read
clean:

${NLPL_SOURCES}/${PACKAGE}/${VERSION}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${NLPL_BIN}/opus-read: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	@perl -e 'use XML::Parser;' || cpan XML::Parser
	cd $< && perl Makefile.PL PREFIX=${NLPL_SOFTWARE}
	make -C $< install
	make -C $< clean
