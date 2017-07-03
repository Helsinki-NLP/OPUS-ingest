#-*-makefile-*-
#
# makefile for installing Uplug under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Tue Jun 27, 2017
#

include ../Makefile.common


PACKAGE = uplug
VERSION = latest

GITURL = https://bitbucket.org/tiedemann/uplug.git

PERLMODULES =	Class::Inspector \
		File::ShareDir \
		IPC::Run \
		XML::Parser \
		XML::Simple \
		XML::Writer

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}

.PHONY: all fetch install clean install-prerequisites uninstall
all: fetch install clean

fetch: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}

install: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MAKE} install-prerequisites
	${MKDIR} ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}
	make -C $< PREFIX=${NLPL_SOFTWARE}/${PACKAGE}/${VERSION} all test install

clean: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
	make -C $< clean

install-prerequisites:
	@for m in ${PERLMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || cpan $$m; \
	done

${NLPL_SOURCES}/${PACKAGE}/${VERSION}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
