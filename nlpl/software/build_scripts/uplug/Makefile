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


export PATH:=${PACKAGE_HOME}/bin:${PATH}
export LD_LIBRARY_PATH:=${PACKAGE_HOME}/lib:${LD_LIBRARY_PATH}
export MANPATH:=${PACKAGE_HOME}/man:${MANPATH}
export PERL5LIB:=${PACKAGE_HOME}/share/perl5:${PACKAGE_HOME}/lib64/perl5:${PERL5LIB}


.PHONY: all fetch install clean install-prerequisites uninstall
all: fetch install clean

fetch: ${PACKAGE_SOURCE}

install: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MAKE} install-prerequisites
	${MKDIR} ${PACKAGE_HOME}
	make -C $< PREFIX=${PACKAGE_HOME} all test install

clean: ${PACKAGE_SOURCE}
	make -C $< clean

install-prerequisites:
	@for m in ${PERLMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || cpan $$m; \
	done

${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
