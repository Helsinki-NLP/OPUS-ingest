#-*-makefile-*-
#
# makefile for installing LetsMT under NLPL
#
# Joerg Tiedemann <jorg.tiedemann@helsinki.fi>
# created: Tue Jun 27, 2017
#

include ../Makefile.common

PACKAGE = letsmt
VERSION = dev

# GITURL = https://bitbucket.org/hy-crossNLP/letsmt-repository
GITURL = git@bitbucket.org:hy-crossNLP/letsmt-repository.git



PACKAGE_SOURCE = ${NLPL_SOURCES}/${PACKAGE}/${VERSION}
PACKAGE_HOME = ${NLPL_SOFTWARE}/${PACKAGE}/${VERSION}

export PATH:=${PACKAGE_HOME}/bin:${PATH}
export LD_LIBRARY_PATH:=${PACKAGE_HOME}/lib:${LD_LIBRARY_PATH}
export MANPATH:=${PACKAGE_HOME}/man:${MANPATH}
export PERL5LIB:=${PACKAGE_HOME}/share/perl5:${PACKAGE_HOME}/lib64/perl5:${PERL5LIB}
export PYTHONPATH:=${PACKAGE_HOME}/lib/python2.6/site-packages:${PYTHONPATH}
export JAVA_HOME=/usr/lib/jvm/java



PERLMODULES =	inc::latest \
		Cwd \
		Data::Dumper \
		Digest::MD5 \
		Encode \
		Encode::Locale \
		File::Basename \
		File::Copy::Recursive \
		FileHandle \
		File::Temp \
		Readonly \
		File::BOM \
		File::GetLineMaxLength \
		Filesys::DiskUsage \
		FindBin \
		HTTP::Request::Common \
		Inline \
		Inline::Java \
		Log::Log4perl \
		LWP::UserAgent \
		Lingua::Sentence \
		Lingua::Identify::CLD \
		Crypt::SSLeay \
		URI::Escape \
		URI::Query \
		XML::Parser \
		XML::Simple \
		Switch

# Class::Sniff
# Lingua::Identify::Blacklists

CPAN = http://search.cpan.org/CPAN/authors/id/
CPANMODULES = 	E/ET/ETJ/Inline-Java-0.58 \
		T/TI/TIEDEMANN/Lingua-Identify-Blacklists-0.04b

.PHONY: all fetch install clean install-prerequisites

all test install: ${PACKAGE_SOURCE}/perllib/LetsMT/Makefile
	make -C ${dir $<} PREFIX=${PACKAGE_HOME} $@

fetch: ${PACKAGE_SOURCE}

clean: ${PACKAGE_SOURCE}
	make -C $< clean

PREREQUISITES = install-cpan-modules \
		software-tokyocabinet \
		software-tokyotyrant \
		software-hunalign \
		software-chared \
		software-opennlp \
		software-tika

install-prerequisites: ${PREREQUISITES}
	@for m in ${PERLMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || cpan $$m; \
	done

${PACKAGE_SOURCE}:
	mkdir -p ${NLPL_SOURCES}/${PACKAGE}
	git clone ${GITURL} $@

${PACKAGE_SOURCE}/perllib/LetsMT/Makefile: ${PACKAGE_SOURCE}
	@perl -e 'use inc::Module::Install;' || ${MAKE} -C ../perl-install all
	${MAKE} install-prerequisites
	cd  ${dir $@} && perl Makefile.PL PREFIX=${PACKAGE_HOME}



HUNALIGN = ${PACKAGE_SOURCE}/lib/hunalign-1.1
CHARED   = ${PACKAGE_SOURCE}/lib/chared-1.2
OPENNLP  = ${PACKAGE_SOURCE}/lib/apache-opennlp-1.5.2-incubating
TIKA     = ${PACKAGE_SOURCE}/lib/tika-app-1.1.jar

TOKYOCABINET      = $(patsubst  %.tar.gz,%,${wildcard ${PACKAGE_SOURCE}/lib/tokyocabinet-[0-9]*.tar.gz})
TOKYOCABINET_PERL = $(patsubst  %.tar.gz,%,${wildcard ${PACKAGE_SOURCE}/lib/tokyocabinet-perl-[0-9]*.tar.gz})
TOKYOTYRANT      = $(patsubst  %.tar.gz,%,${wildcard ${PACKAGE_SOURCE}/lib/tokyotyrant-[0-9]*.tar.gz})
TOKYOTYRANT_PERL = $(patsubst  %.tar.gz,%,${wildcard ${PACKAGE_SOURCE}/lib/tokyotyrant-perl-[0-9]*.tar.gz})



.PHONY: software-tokyocabinet
software-tokyocabinet: ${PACKAGE_HOME}/bin/tctmgr
${TOKYOCABINET}.tar.gz: ${PACKAGE_SOURCE}
${PACKAGE_HOME}/bin/tctmgr: ${TOKYOCABINET}.tar.gz
	tar -C ${PACKAGE_SOURCE}/lib -zxf $<
	cd ${TOKYOCABINET} && \
		./configure --prefix=${PACKAGE_HOME}
	make -C ${TOKYOCABINET} all install clean
	rm -fr ${TOKYOCABINET}
	tar -C ${PACKAGE_SOURCE}/lib -zxf ${TOKYOCABINET_PERL}.tar.gz
	cd ${TOKYOCABINET_PERL} && \
		perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C ${TOKYOCABINET_PERL} all install clean
	rm -fr ${TOKYOCABINET_PERL}


.PHONY: software-tokyotyrant
software-tokyotyrant: ${PACKAGE_HOME}/bin/ttserver
${TOKYOTYRANT}.tar.gz: ${PACKAGE_SOURCE}
${PACKAGE_HOME}/bin/ttserver: ${TOKYOTYRANT}.tar.gz
	tar -C ${PACKAGE_SOURCE}/lib -zxf $<
	cd ${TOKYOTYRANT} && \
		./configure --with-tc=${PACKAGE_HOME} \
		            --prefix=${PACKAGE_HOME}
	make -C ${TOKYOTYRANT} all install clean
	rm -fr ${TOKYOTYRANT}
	tar -C ${PACKAGE_SOURCE}/lib -zxf ${TOKYOTYRANT_PERL}.tar.gz
	cd ${TOKYOTYRANT_PERL} && \
		perl Makefile.PL PREFIX=${PACKAGE_HOME}
	make -C ${TOKYOTYRANT_PERL} all install clean
	rm -fr ${TOKYOTYRANT_PERL}


.PHONY: software-hunalign
software-hunalign: ${PACKAGE_HOME}/bin/hunalign
${HUNALIGN}.tgz: ${PACKAGE_SOURCE}
${PACKAGE_HOME}/bin/hunalign: ${HUNALIGN}.tgz
	tar -C ${PACKAGE_SOURCE}/lib -zxf $<
	make -C ${HUNALIGN}/src/hunalign CC=g++
	mkdir -p ${dir $@}
	${INSTALL_BIN} ${HUNALIGN}/src/hunalign/hunalign ${PACKAGE_HOME}/bin/hunalign
	rm -fr ${HUNALIGN}


.PHONY: software-chared
software-chared: ${PACKAGE_HOME}/bin/chared
${CHARED}.tar.gz: ${PACKAGE_SOURCE}
${PACKAGE_HOME}/bin/chared: ${CHARED}.tar.gz
	tar -C ${PACKAGE_SOURCE}/lib -zxf $<
	( cd ${CHARED} && \
	  python setup.py install --prefix=${PACKAGE_HOME} )
	rm -fr ${CHARED}


.PHONY: software-opennlp
software-opennlp: ${PACKAGE_HOME}/bin/opennlp
${PACKAGE_SOURCE}/lib/${OPENNLP}-bin.tar.gz: ${PACKAGE_SOURCE}
${PACKAGE_HOME}/bin/opennlp: ${OPENNLP}-bin.tar.gz
	tar -C ${PACKAGE_SOURCE}/lib -zxf $<
	mkdir -p ${dir $@} ${PACKAGE_HOME}/lib
	${INSTALL_BIN} ${OPENNLP}/bin/opennlp ${PACKAGE_HOME}/bin/opennlp
	${INSTALL_BIN} ${OPENNLP}/lib/*.jar ${PACKAGE_HOME}/lib
	rm -fr ${OPENNLP}


.PHONY: software-tika
software-tika: ${patsubst ${PACKAGE_SOURCE}/%,${PACKAGE_HOME}/%,${TIKA}}
${TIKA}: ${PACKAGE_SOURCE}
${patsubst ${PACKAGE_SOURCE}/%,${PACKAGE_HOME}/%,${TIKA}}: ${TIKA}
	${INSTALL_BIN} $< $@


.PHONY: software-tidy
software-tidy: ${PACKAGE_HOME}/bin/tidy
${NLPL_SOURCES}/tidy-html5:
	git clone https://github.com/htacg/tidy-html5.git $@
${PACKAGE_HOME}/bin/tidy: ${NLPL_SOURCES}/tidy-html5
	cd $</build/cmake && \
	  cmake ../.. 	-DCMAKE_BUILD_TYPE=Release \
			-DCMAKE_INSTALL_PREFIX=${PACKAGE_HOME}
	make -C $</build/cmake install clean


.PHONY: install-cpan-modules
install-cpan-modules:
	@for m in ${CPANMODULES}; do \
	  wget ${CPAN}/$$m.tar.gz; \
	  tar -xzf `basename $$m | tr "\n" '.'`tar.gz; \
	  cd `basename $$m` && perl Makefile.PL PREFIX=${NLPL_SOFTWARE};cd ..; \
	  cd `basename $$m` && ${MAKE} all install;cd ..; \
	  rm -fr `basename $$m`; \
	  rm -f `basename $$m | tr "\n" '.'`tar.gz; \
	done



