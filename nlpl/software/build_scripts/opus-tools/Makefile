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

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install re-install clean

all: ${PACKAGE_HOME}/bin/opus-read

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_HOME}/bin/opus-read

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/bin/opus-read: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	@perl -e 'use XML::Parser;' || cpan XML::Parser
	mkdir -p ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< install clean
	touch $@
