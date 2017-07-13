#-*-makefile-*-
#
# makefile for installing subtitle alignment tools under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Mon Jul  3, 2017
#

include ../Makefile.common


PACKAGE = subalign
VERSION = latest

GITURL = https://bitbucket.org/tiedemann/subalign.git

PERLMODULES =	File::ShareDir \
		File::BOM \
		IO::File \
		IPC::Open3 \
		XML::Parser \
		Encode \
		Locale::Codes::Language


PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install install-prerequisites re-install clean uninstall

all: ${PACKAGE_HOME}/bin/srtalign

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_HOME}/bin/srtalign

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/bin/srtalign: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MAKE} install-prerequisites
	${MKDIR} ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< install clean
	touch $@

install-prerequisites:
	@for m in ${PERLMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || cpan $$m; \
	done

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
