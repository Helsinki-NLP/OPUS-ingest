#-*-makefile-*-
#
# makefile for installing Uplug under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Tue Jun 27, 2017
#

include ../Makefile.common


PACKAGE = uplug
VERSION = 0.3.8dev

GITURL = https://bitbucket.org/tiedemann/uplug.git

PERLMODULES =	Class::Inspector \
		File::ShareDir \
		IPC::Run \
		XML::Parser \
		XML::Simple \
		XML::Writer

.PHONY: all fetch install clean install-prerequisites
all: fetch install clean

fetch: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}

install: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MAKE} install-prerequisites
	mkdir -p ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}
	make -C $< PREFIX=${NLPL_SOFTWARE}/${PACKAGE}/${VERSION} all test install

clean: ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
	make -C $< clean

install-prerequisites:
	@for m in ${PERLMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || cpan $$m; \
	done

${NLPL_SOURCES}/${PACKAGE}/${VERSION}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

