#-*-makefile-*-
#
# install perl build modules
#
# created: Wed Jun 28, 2017
# jorg.tiedemann@helsinki.fi


include ../Makefile.common

PACKAGE = perl-install

## Perl installation modules

CPANURL = http://search.cpan.org/CPAN/authors/id

MODULES = 	version \
		Module::Metadata \
		Module::ScanDeps \
		Test::Requires \
		File::Remove \
		CPAN::Meta \
		YAML YAML::Tiny \
		JSON::PP \
		ExtUtils::MakeMaker \
		Module::Install


### list modules here that need to be installed
### with force

FORCEMODULES = 

### list specific modules here if you want to
### fetch sources from cpan and install from source

# CPANMODULES = /E/ET/ETHER/Module-Metadata-1.000033 \
# 		/T/TO/TOKUHIROM/Test-Requires-0.10 \
# 		/R/RS/RSCHUPP/Module-ScanDeps-1.23 \
# 		/S/SH/SHLOMIF/File-Remove-1.57 \
# 		/D/DA/DAGOLDEN/CPAN-Meta-2.150010 \
# 		/E/ET/ETHER/YAML-Tiny-1.70 \
# 		/I/IS/ISHIGAKI/JSON-PP-2.94 \
# 		/B/BI/BINGOS/ExtUtils-MakeMaker-7.30 \
# 		/E/ET/ETHER/Module-Install-1.18




.PHONY: all
all: install-from-source force-install-with-cpan install-with-cpan


## install modules with cpan

.PHONY: install-from-cpan
install-with-cpan:
	@for m in ${MODULES}; do \
	  echo "test module $$m"; \
	  if [ "$$m" == "Module::Install" ]; then \
	    perl -e "use inc::$$m;" || ${CPAN} $$m; \
	  else \
	    perl -e "use $$m;" || ${CPAN} $$m; \
	  fi; \
	done

.PHONY: force-install-from-cpan
force-install-with-cpan:
	@for m in ${FORCEMODULES}; do \
	  echo "test module $$m"; \
	  perl -e "use $$m;" || ${CPAN} -fi $$m; \
	done

.PHONY: install-from-source
install-from-source:
	@for m in ${CPANMODULES}; do \
	  wget ${CPANURL}/$$m.tar.gz; \
	  tar -xzf `basename $$m | tr "\n" '.'`tar.gz; \
	  cd `basename $$m` && perl Makefile.PL PREFIX=${NLPL_SOFTWARE};cd ..; \
	  cd `basename $$m` && ${MAKE} all install;cd ..; \
	  rm -fr `basename $$m`; \
	  rm -f `basename $$m | tr "\n" '.'`tar.gz; \
	done




