#-*-makefile-*-
#
# makefile for installing opus-tools under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Tue Jun 27, 2017
#

include ../Makefile.common


PACKAGE = opus-tools
VERSION = latest

GITURL = https://bitbucket.org/tiedemann/opus-tools.git

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install re-install clean uninstall

all: ${PACKAGE_HOME}/bin/opus-read

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_HOME}/bin/opus-read

re-install:
	rm -fr ${PACKAGE_SOURCE}
	rm -f ${PACKAGE_HOME}/bin/opus-read
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/bin/opus-read: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	@perl -e 'use XML::Parser;' || ${CPAN} XML::Parser
	${MKDIR} ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< install clean
	touch $@

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
