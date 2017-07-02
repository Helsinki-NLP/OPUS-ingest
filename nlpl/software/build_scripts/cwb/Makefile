#-*-makefile-*-
#
# makefile for installing CWB under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Sun Jul  2, 2017
#

include ../Makefile.common


PACKAGE = cwb
VERSION = 3.0.0

CWBTAR = https://sourceforge.net/projects/cwb/files/cwb/cwb-3.0.0/cwb-3.0.0-linux-x86_64.tar.gz/download
CWBPERL = http://svn.code.sf.net/p/cwb/code/perl/trunk/CWB
CLPERL = http://svn.code.sf.net/p/cwb/code/perl/branches/3.0/CWB-CL
WEBPERL = http://svn.code.sf.net/p/cwb/code/perl/trunk/CWB-Web
CQIPERL = http://svn.code.sf.net/p/cwb/code/perl/trunk/CWB-CQI
CQPPERL = http://svn.code.sf.net/p/cwb/code/gui/cqpweb/branches/3.2.11


PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}


.PHONY: all fetch install re-install clean

all: ${PACKAGE_HOME}/bin/pdf2xml

fetch: 	${PACKAGE_SOURCE} \
	${PACKAGE_SOURCE}/perl/cwb \
	${PACKAGE_SOURCE}/perl/cl \
	${PACKAGE_SOURCE}/perl/web \
	${PACKAGE_SOURCE}/perl/cqi \
	${PACKAGE_SOURCE}/perl/cqp


install: ${PACKAGE_HOME}/bin/cqp

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean:

${PACKAGE_SOURCE}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	wget ${CWBTAR} -O $@.tar.gz
	tar -C ${NLPL_SOURCES}/${PACKAGE} -xzf $@.tar.gz
	find ${NLPL_SOURCES}/${PACKAGE} -mindepth 1 -maxdepth 1 -type d -exec mv {} $@ \;
	rm -f $@.tar.gz

${PACKAGE_SOURCE}/perl/cwb: ${PACKAGE_SOURCE}
	mkdir -p ${dir $@}
	svn export ${CWBPERL} $@

${PACKAGE_SOURCE}/perl/cl: ${PACKAGE_SOURCE}
	mkdir -p ${dir $@}
	svn export ${CLPERL} $@

${PACKAGE_SOURCE}/perl/web: ${PACKAGE_SOURCE}
	mkdir -p ${dir $@}
	svn export ${WEBPERL} $@

${PACKAGE_SOURCE}/perl/cqi: ${PACKAGE_SOURCE}
	mkdir -p ${dir $@}
	svn export ${CQIPERL} $@

${PACKAGE_SOURCE}/perl/cqp: ${PACKAGE_SOURCE}
	mkdir -p ${dir $@}
	svn export ${CQPPERL} $@

${PACKAGE_HOME}/bin/cqp: ${PACKAGE_SOURCE}
	sed 's#^PREFIX=.*$$#PREFIX=${PACKAGE_HOME}#' \
		< ${PACKAGE_SOURCE}/install-cwb.sh > ${PACKAGE_SOURCE}/install.sh
	chmod +x ${PACKAGE_SOURCE}/install.sh
	mkdir -p ${PACKAGE_HOME}
	cd ${PACKAGE_SOURCE} && ./install.sh

