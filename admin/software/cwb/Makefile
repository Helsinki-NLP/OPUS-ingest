#-*-makefile-*-
#
# makefile for installing CWB o OPUS
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
#

PACKAGE = cwb
VERSION = latest

PACKAGE_SOURCE = src
PACKAGE_HOME = build
PREFIX = /usr/local

SVN_CWB = http://svn.code.sf.net/p/cwb/code/cwb/trunk
SVN_CWBPERL = http://svn.code.sf.net/p/cwb/code/perl/trunk
SVN_CQPWEB = http://svn.code.sf.net/p/cwb/code/gui/cqpweb/trunk
SVN_EUROPARL = http://svn.code.sf.net/p/cwb/code/gui/europarl/trunk
SVN_CWBDOC = http://svn.code.sf.net/p/cwb/code/doc
SVN_CWBENC = http://svn.code.sf.net/p/cwb/code/import


.PHONY: all fetch install re-install clean uninstall

all: fetch install clean

fetch: 	${PACKAGE_SOURCE} \
	${PACKAGE_SOURCE}/perl \
	${PACKAGE_HOME}/cqpweb \
	${PACKAGE_HOME}/europarl \
	${PACKAGE_HOME}/cwbdoc \
	${PACKAGE_HOME}/cwbenc


install: ${PREFIX}/bin/cqp
	perl -e 'use CWB;'  || ${MAKE} CWB
	perl -e 'use CWB::CL;'  || ${MAKE} CWB-CL
	perl -e 'use CWB::CQI;'  || ${MAKE} CWB-CQI
	perl -e 'use CWB::Web::Query;' || ${MAKE} CWB-Web

## make test fails for CWB::CL ...
CWB CWB-CL CWB-CQI CWB-Web: ${PACKAGE_SOURCE}/perl
	cd $</$@ && perl Makefile.PL PREFIX=${PREFIX}
	make -C $</$@ all 
	sudo make -C $</$@ install
	make -C $</$@ clean

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



${PREFIX}/bin/cqp: ${PACKAGE_SOURCE} ${PACKAGE_SOURCE}/pcre-8.40
	mv $</config.mk $</config.original
	sed -e 's/# PLATFORM-SPECIFIC.*$$/PLATFORM = linux-64/' \
	    -e 's|# PREFIX = .*$$|PREFIX = ${PREFIX}|' \
	    -e 's|# DEFAULT_REGISTRY .*$$|DEFAULT_REGISTRY = ${NLPL_DATASETS}/cwb|' \
	< $</config.original > $</config.mk
	${MKDIR} ${NLPL_DATASETS}/cwb
	${MAKE} -C $< clean
	${MAKE} -C $< depend
	${MAKE} -C $< all
	sudo ${MAKE} -C $< install
	${MAKE} -C $< clean

.PHONY: install-prerequistes
install-prerequistes: ${PACKAGE_SOURCE}/pcre-8.40

${PACKAGE_SOURCE}/pcre-8.40:
	wget -O $@.tar.gz https://ftp.pcre.org/pub/pcre/pcre-8.40.tar.gz
	tar -C ${dir $@} -xzf $@.tar.gz
	cd $@ && ./configure 	--enable-unicode-properties
	${MAKE} -C $@ all 
	sudo ${MAKE} -C install
	${MAKE} -C clean

