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
	${MKDIR} ${OPUS_TOOLS}/public
	if [ -e ${OPUS_TOOLS}/public/${PACKAGE} ]; then \
	  cd ${OPUS_TOOLS}/public/${PACKAGE} && git pull; \
	else \
	  git clone ${GITURL} ${OPUS_TOOLS}/public/${PACKAGE}; \
	fi
	ln -s ${OPUS_TOOLS}/public/${PACKAGE} $@

${PACKAGE_HOME}/bin/opus-read: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	@perl -e 'use XML::Parser;' || cpan XML::Parser
	${MKDIR} ${PACKAGE_HOME}
	cd $< && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $< install clean
	touch $@

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
