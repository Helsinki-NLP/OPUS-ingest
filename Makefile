

PIP = pip

UBUNTU_PACKAGES = libicu-dev \
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

OpusTools-perl Uplug subalign:
	git clone https://github.com/Helsinki-NLP/$@.git

.PHONY: install-opustools-perl
install-opustools-perl: OpusTools-perl
	git clone https://github.com/Helsinki-NLP/OpusTools-perl.git
	cd OpusTools-perl && perl Makefile.PL
	${MAKE} -C OpusTools-perl all
	${MAKE} -C OpusTools-perl install

.PHONY: install-uplug
install-uplug: Uplug
	git clone https://github.com/Helsinki-NLP/Uplug.git
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
	git clone https://github.com/Helsinki-NLP/subalign.git
	cd subalign && perl Makefile.PL
	${MAKE} -C subalign all
	${MAKE} -C subalign install