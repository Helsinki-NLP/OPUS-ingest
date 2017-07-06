#-*-makefile-*-
#
# makefile for installing opus-tools
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>

include ../Makefile.common

PACKAGE = opus-tools
VERSION = latest

GITURL = https://bitbucket.org/tiedemann/opus-tools.git

PACKAGE_SOURCE = src
PACKAGE_HOME = build
PREFIX = /usr/local


.PHONY: all fetch install clean

all: fetch install clean

fetch: ${PACKAGE_SOURCE}

install: ${PREFIX}/bin/opus-read

clean:
	-make -C ${PACKAGE_SOURCE} clean

${PACKAGE_SOURCE}:
	git clone ${GITURL} ${PACKAGE_SOURCE}

${PACKAGE_HOME}/bin/opus-read: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || cpan Module::Install
	@perl -e 'use XML::Parser;' || cpan XML::Parser
	${MKDIR} ${PACKAGE_HOME}
	cd $< && perl Makefile.PL
	make -C $< all
	sudo make -C $< install
