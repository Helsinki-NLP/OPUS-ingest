#-*-makefile-*-
#
# makefile for installing pdf2xml under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Sat Jul  1, 2017
#

include ../Makefile.common


PACKAGE = pdf2xml
VERSION = 0.2.7

GITURL = https://bitbucket.org/tiedemann/pdf2xml.git

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install re-install clean

all: ${PACKAGE_HOME}/bin/pdf2xml

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_HOME}/bin/pdf2xml

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/bin/pdf2xml: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	mkdir -p ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< all test install clean
	touch $@