PIP = pip

UBUNTU_PACKAGES = libboost-all-dev \
		libicu-dev \
		liblingua-sentence-perl \
		libxml-parser-perl \
		libxml-writer-perl \
		recode \
		parallel \
		pigz \
		python3-pip \
		tidy

.PHONY: install
install: requirements.txt
	apt install ${UBUNTU_PACKAGES}
	pip install -r requirements.txt
	${MAKE} install-opustools-perl
	${MAKE} install-subalign
	${MAKE} install-uplug
	${MAKE} install-yasa
	${MAKE} OPUS-admin

install-yasa:
	git clone https://github.com/Helsinki-NLP/yasa.git
	cd yasa && ./configure
	${MAKE} -C yasa install

OpusTools-perl Uplug subalign:
	git clone https://github.com/Helsinki-NLP/$@.git

.PHONY: install-opustools-perl
install-opustools-perl: OpusTools-perl
	cd OpusTools-perl && perl Makefile.PL
	${MAKE} -C OpusTools-perl all
	${MAKE} -C OpusTools-perl install

.PHONY: install-uplug
install-uplug: Uplug
	cd Uplug/uplug-main && perl Makefile.PL
	${MAKE} -C Uplug/uplug-main all
	${MAKE} -C Uplug/uplug-main install
	cd Uplug/uplug-hunalign-dics && perl Makefile.PL
	${MAKE} -C Uplug/uplug-hunalign-dics all
	${MAKE} -C Uplug/uplug-hunalign-dics install
	cd Uplug/uplug-treetagger && perl Makefile.PL
	${MAKE} -C Uplug/uplug-treetagger all
	${MAKE} -C Uplug/uplug-treetagger install

.PHONY: install-subalign
install-subalign: subalign
	cd subalign && perl Makefile.PL
	${MAKE} -C subalign all
	${MAKE} -C subalign install

OPUS-admin:
	git clone git@github.com:Helsinki-NLP/OPUS-admin.git



YEAR ?= $(shell date +%Y)

doc/released-${YEAR}.txt:
	find OPUS/corpus -name info.yaml | sort | \
	xargs egrep -H 'release date:.* ${YEAR}$$' -A10 |\
	egrep '(release date:|sentences:|tokens:|translation units:|\-\-)' |\
	sed 's#OPUS/corpus/##' | sed 's#/info.yaml.#	#' | tr '/' "\t" > $@

doc/released-fall-2022.txt:
	find OPUS/corpus -name info.yaml | sort | \
	xargs egrep -H 'release date:.* (Sep|Oct|Nov|Dec).*2022$$' -A10 |\
	egrep '(release date:|sentences:|tokens:|translation units:|\-\-)' |\
	sed 's#OPUS/corpus/##' | sed 's#/info.yaml.#	#' | tr '/' "\t" > $@
