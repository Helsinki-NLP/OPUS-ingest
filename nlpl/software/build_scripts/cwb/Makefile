#-*-makefile-*-
#
# makefile for installing CWB under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Sun Jul  2, 2017
#

include ../Makefile.common


PACKAGE = cwb
VERSION = latest

PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}

SVN_CWB = http://svn.code.sf.net/p/cwb/code/cwb/trunk
SVN_CWBPERL = http://svn.code.sf.net/p/cwb/code/perl/trunk
SVN_CQPWEB = http://svn.code.sf.net/p/cwb/code/gui/cqpweb/trunk
SVN_EUROPARL = http://svn.code.sf.net/p/cwb/code/gui/europarl/trunk
SVN_CWBDOC = http://svn.code.sf.net/p/cwb/code/doc
SVN_CWBENC = http://svn.code.sf.net/p/cwb/code/import


export PATH:=${PACKAGE_HOME}/bin:${PATH}
export LD_LIBRARY_PATH:=${PACKAGE_HOME}/lib:${LD_LIBRARY_PATH}
export CPP_INCLUDE_PATH:=${PACKAGE_HOME}/include:${CPP_INCLUDE_PATH}
export MANPATH:=${PACKAGE_HOME}/man:${MANPATH}
export PERL5LIB:=${PACKAGE_HOME}/share/perl5:${PACKAGE_HOME}/lib64/perl5:${PERL5LIB}


.PHONY: all fetch install re-install clean uninstall

all: fetch install clean

fetch: 	${PACKAGE_SOURCE} \
	${PACKAGE_SOURCE}/perl \
	${PACKAGE_HOME}/cqpweb \
	${PACKAGE_HOME}/europarl \
	${PACKAGE_HOME}/cwbdoc \
	${PACKAGE_HOME}/cwbenc


install: ${PACKAGE_HOME}/bin/cqp
	perl -e 'use CWB;'  || ${MAKE} CWB
	perl -e 'use CWB::CL;'  || ${MAKE} CWB-CL
	perl -e 'use CWB::CQI;'  || ${MAKE} CWB-CQI
	perl -e 'use CWB::Web::Query;' || ${MAKE} CWB-Web

## make test fails for CWB::CL ...
CWB CWB-CL CWB-CQI CWB-Web: ${PACKAGE_SOURCE}/perl
	cd $</$@ && perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C $</$@ all install clean

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean: ${PACKAGE_SOURCE}
	${MAKE} -C $< clean

${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	svn export ${SVN_CWB} $@

${PACKAGE_SOURCE}/perl: | ${PACKAGE_SOURCE}
	${MKDIR} ${dir $@}
	svn export ${SVN_CWBPERL} $@

${PACKAGE_HOME}/cqpweb: | ${PACKAGE_SOURCE}
	${MKDIR} ${dir $@}
	svn export ${SVN_CQPWEB} $@

${PACKAGE_HOME}/europarl: | ${PACKAGE_SOURCE}
	${MKDIR} ${dir $@}
	svn export ${SVN_EUROPARL} $@

${PACKAGE_HOME}/cwbdoc: | ${PACKAGE_SOURCE}
	${MKDIR} ${dir $@}
	svn export ${SVN_CWBDOC} $@

${PACKAGE_HOME}/cwbenc: | ${PACKAGE_SOURCE}
	${MKDIR} ${dir $@}
	svn export ${SVN_CWBENC} $@



${PACKAGE_HOME}/bin/cqp: ${PACKAGE_SOURCE} ${PACKAGE_SOURCE}/pcre-8.40
	mv $</config.mk $</config.original
	sed -e 's/# PLATFORM-SPECIFIC.*$$/PLATFORM = linux-64/' \
	    -e 's|# PREFIX = .*$$|PREFIX = ${PACKAGE_HOME}|' \
	    -e 's|# DEFAULT_REGISTRY .*$$|DEFAULT_REGISTRY = ${NLPL_DATASETS}/cwb|' \
	< $</config.original > $</config.mk
	${MKDIR} ${NLPL_DATASETS}/cwb
	${MAKE} -C $< clean
	${MAKE} -C $< depend
	${MAKE} -C $< all
	${MAKE} -C $< install
	${MAKE} -C $< clean

.PHONY: install-prerequistes
install-prerequistes: ${PACKAGE_SOURCE}/pcre-8.40

${PACKAGE_SOURCE}/pcre-8.40:
	wget -O $@.tar.gz https://ftp.pcre.org/pub/pcre/pcre-8.40.tar.gz
	tar -C ${dir $@} -xzf $@.tar.gz
	cd $@ && ./configure 	--enable-unicode-properties \
				--prefix=${PACKAGE_HOME}
	${MAKE} -C $@ all install clean


uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
