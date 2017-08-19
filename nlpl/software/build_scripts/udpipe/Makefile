#-*-makefile-*-
#
# makefile for installing subtitle alignment tools under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Mon Jul  3, 2017
#

include ../Makefile.common


PACKAGE = udpipe
VERSION = latest
GITURL  = https://github.com/ufal/udpipe.git


## latest models
MODELS-170801     = ud-2.0-170801
MODELS-170801_URL = https://lindat.mff.cuni.cz/repository/xmlui/bitstream/handle/11234/1-2364/udpipe-${MODELS}.zip

## previous version
MODELS-170315     = ud-2.0-conll17-170315
MODELS_170315-URL = https://lindat.mff.cuni.cz/repository/xmlui/bitstream/handle/11234/1-1990/udpipe-${MODELS}.tar


MODELS     = ${MODELS-170801}
MODELS_URL = ${MODELS-170801_URL}


PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}

export PATH:=${PACKAGE_HOME}/bin:${PATH}
export LD_LIBRARY_PATH:=${PACKAGE_HOME}/lib:${LD_LIBRARY_PATH}
export PERL5LIB:=${PACKAGE_HOME}/share/perl5:${PACKAGE_HOME}/lib64/perl5:${PERL5LIB}


.PHONY: all fetch install install-prerequisites re-install clean uninstall

all: install

fetch: 	${PACKAGE_SOURCE} ${PACKAGE_HOME}/${MODELS}

install: ${PACKAGE_HOME}/bin/udpipe \
	${PACKAGE_HOME}/models \
	${PACKAGE_HOME}/share/perl5/Ufal/UDPipe.pm

re-install:
	rm -fr ${PACKAGE_SOURCE}
	${MAKE} install

clean:
	-make -C ${PACKAGE_SOURCE} clean


${PACKAGE_SOURCE}:
	${MKDIR} ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_HOME}/models: ${PACKAGE_HOME}/${MODELS}
	rm -f $@
	ln -s $</models $@

${PACKAGE_HOME}/${MODELS}:
	${MKDIR} $@
	wget -O $@.zip ${MODELS_URL}
	unzip -d $@ $@.zip
	mv $@/udpipe-${MODELS} $@/models
	rm -f $@.zip

${PACKAGE_HOME}/${MODELS-170315}:
	wget -O $@.tar ${MODELS-170315_URL}
	tar -C $@ -xf $@.tar
	rm -f $@.tar

${PACKAGE_HOME}/bin/udpipe: ${PACKAGE_SOURCE}
	module load StdEnv && ${MAKE} -C $</src exe lib
	${MKDIR} ${dir $@} ${PACKAGE_HOME}/lib
	${INSTALL_BIN} $</src/udpipe $@
	${INSTALL_DATA} $</src/libudpipe.a ${PACKAGE_HOME}/lib/libudpipe.a
	touch $@

## in case we need to install swig

SWIG_VERSION = 3.0.12
SWIG_URL = https://sourceforge.net/projects/swig/files/swig/swig-${SWIG_VERSION}/swig-${SWIG_VERSION}.tar.gz/download

${PACKAGE_SOURCE}/swig-${SWIG_VERSION}: ${PACKAGE_SOURCE}
	wget -O $@.tar.gz ${SWIG_URL}
	tar -C $< -xzf $@.tar.gz
	rm -f $@.tar.gz
	cd $@ && ./configure --prefix=${PACKAGE_HOME}
	make -C $@
	make -C $@ install
	make -C $@ clean


## perl bindings

${PACKAGE_HOME}/share/perl5/Ufal/UDPipe.pm: ${PACKAGE_SOURCE}
	swig -help || ${MAKE} ${PACKAGE_SOURCE}/swig-${SWIG_VERSION}
	module load StdEnv && \
	PERL_INCLUDE=$(dir ${shell locate perl.h | grep perl5 | head -1}) \
	${MAKE} -C $</bindings/perl all
	${MKDIR} ${dir $@}
	${MKDIR} ${dir $@} ${PACKAGE_HOME}/share/perl5/auto/Ufal/UDPipe
	${INSTALL_DATA} $</bindings/perl/Ufal/UDPipe.pm $@
	${INSTALL_BIN} $</bindings/perl/auto/Ufal/UDPipe/UDPipe.so \
		${PACKAGE_HOME}/share/perl5/auto/Ufal/UDPipe/UDPipe.so

uninstall:
	rm -fr ${PACKAGE_SOURCE}
	rm -fr ${PACKAGE_HOME}
