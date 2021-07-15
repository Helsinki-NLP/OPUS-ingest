

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

install: requirememts.txt
	sudo apt install ${UBUNTU_PACKAGES}
	sudo pip install -r requirememts.txt
	git clone https://github.com/Helsinki-NLP/OpusTools-perl.git
	${MAKE} install-opustools-perl
	${MAKE} install-subalign
	${MAKE} install-uplug

install-opustools-perl:
	cd OpusTools-perl && perl Makefile.PL
	${MAKE} -C OpusTools-perl all
	sudo ${MAKE} -C OpusTools-perl install

install-uplug:
	git clone https://github.com/Helsinki-NLP/Uplug.git
	cd Uplug/uplug-main && perl Makefile.PL
	${MAKE} -C Uplug/uplug-main all
	sudo ${MAKE} -C Uplug/uplug-main install
	cd Uplug/uplug-hunalign-dics && perl Makefile.PL
	${MAKE} -C Uplug/uplug-hunalign-dics all
	sudo ${MAKE} -C Uplug/uplug-hunalign-dics install
	cd Uplug/uplug-treetagger && perl Makefile.PL
	${MAKE} -C Uplug/uplug-treetagger all
	sudo ${MAKE} -C Uplug/uplug-treetagger install

install-subalign:
	https://github.com/Helsinki-NLP/subalign.git
	cd subalign && perl Makefile.PL
	${MAKE} -C subalign all
	sudo ${MAKE} -C subalign install
