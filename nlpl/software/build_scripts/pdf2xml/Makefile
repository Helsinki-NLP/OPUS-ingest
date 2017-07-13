#-*-makefile-*-
#
# makefile for installing pdf2xml under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Sat Jul  1, 2017
#

include ../Makefile.common


PACKAGE = pdf2xml
VERSION = latest

GITURL = https://bitbucket.org/tiedemann/pdf2xml.git

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install re-install clean uninstall

all: ${PACKAGE_HOME}/bin/pdf2xml

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_HOME}/bin/pdf2xml

re-install:
	rm -fr ${PACKAGE_SOURCE}
	rm -f ${PACKAGE_HOME}/bin/pdf2xml
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/bin/pdf2xml: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MKDIR} ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< all test install clean
	touch $@

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
