
OUTCODE=utf-8
INCODE=iso-8859-1

HTML2XML = tidy -utf8 -i -asxml -m -f /dev/null

DATA = $(OPUSDATA)/$(CORPUS)
ALL = $(patsubst $(DATA)/php_manual_%.tar.bz2,%,\
	$(wildcard $(DATA)/php_manual*.tar.bz2))



all:
	make LA=pl INCODE=ISO-8859-2 decompress
	make LA=pt_BR INCODE=ISO-8859-1 decompress
	make LA=ro INCODE=ISO-8859-2 decompress
	make LA=ru INCODE=windows-1251 decompress
	make LA=sk INCODE=ISO-8859-2 decompress
	make LA=sv INCODE=ISO-8859-1 decompress
	make LA=sl INCODE=ISO-8859-1 decompress
	make LA=tr INCODE=ISO-8859-9 decompress
	make LA=tw INCODE=BIG-5 decompress
	make LA=zh INCODE=BIG-5 decompress
	for l in ${ALL}; do make LA=$$l decompress; done




decompress: ${LA}

${LA}:
	mkdir ${LA};
	mkdir ${LA}/html;
	( cd ${LA}/html/; tar xf $(DATA)/php_manual_${LA}.tar.bz2; )
	find ${LA}/html/ -name '*.html' \
		-exec recode ${INCODE}..${OUTCODE} {} \;
	find ${LA}/html/ -name '*.html' -exec ${HTML2XML} {} \;
#	find ${LA}/html/ -name '*.html' -exec ${SCRIPTS}htmlexpand {} \;


# remove English files from translation directories

cleanUS:
	for l in jp de sv fr es; do \
		find $$l -exec grep -l 'content="en-US"' {} \; |\
		xargs rm -f; \
	done

