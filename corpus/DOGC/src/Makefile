


all: ../xml/ca-es/dogc.xml.gz
	${MAKE} cleanup

fetch: DOGC-2021-cat-spa.txt

convert: ../xml/ca-es/dogc.xml.gz

cleanup:
	rm -f DOGC-2021-cat-spa.txt DOGC-2021-cat-spa.zip


DOGC-2021-cat-spa.txt: %.txt: %.zip
	unzip $<
	touch $@

DOGC-2021-cat-spa.zip:
	wget http://lpg.uoc.edu/corpusDOGC/DOGC-2021-cat-spa.zip

../xml/ca-es/dogc.xml.gz:
	${MAKE} DOGC-2021-cat-spa.txt
	mkdir -p ${dir $@}
	mkdir -p ../raw
	moses2opus -z -s ca -t es -b dogc DOGC-2021-cat-spa.txt | gzip -c > $@
	mv ca es ../raw/
	rm -f DOGC-2021-cat-spa.txt




## old recipes from previous versions

# URL   = http://lpg.uoc.edu/DOGC/

# YEARS = 1998-2014

# TEXTS = $(patsubst %,DOGC-%,${YEARS})

# SRCTEXTS = $(patsubst %,%.ca,${TEXTS})
# TRGTEXTS = $(patsubst %,%.es,${TEXTS})

# ALGXML = ${patsubst %,../xml/ca-es/%.xml.gz,${TEXTS}}


# all: ${SRCTEXTS} ${TRGTEXTS} ${ALGXML}

# ${SRCTEXTS}:
# 	wget ${URL}/${patsubst %.ca,%-cat.txt.gz,$@}
# 	gunzip ${patsubst %.ca,%-cat.txt.gz,$@}
# 	mv ${patsubst %.ca,%-cat.txt,$@} $@

# ${TRGTEXTS}:
# 	wget ${URL}/${patsubst %.es,%-spa.txt.gz,$@}
# 	gunzip ${patsubst %.es,%-spa.txt.gz,$@}
# 	mv ${patsubst %.es,%-spa.txt,$@} $@


# ${ALGXML}:
# 	${MAKE} ${patsubst ../xml/ca-es/%.xml.gz,%.ca,$@}
# 	${MAKE} ${patsubst ../xml/ca-es/%.xml.gz,%.es,$@}
# 	letsmt_convert -i moses -o xces \
# 			${patsubst ../xml/ca-es/%.xml.gz,%.ca,$@} \
# 			${patsubst ../xml/ca-es/%.xml.gz,%.es,$@} \
# 			${patsubst ../xml/ca-es/%.xml.gz,%.xml,$@}
# 	mkdir -p ../raw/ca ../raw/es ../xml/ca-es
# 	gzip -f ${patsubst ../xml/ca-es/%.xml.gz,ca/%.xml,$@}
# 	gzip -f ${patsubst ../xml/ca-es/%.xml.gz,es/%.xml,$@}
# 	mv ${patsubst ../xml/ca-es/%,ca/%,$@} \
# 		${patsubst ../xml/ca-es/%,../raw/ca/%,$@}
# 	mv ${patsubst ../xml/ca-es/%,es/%,$@} \
# 		${patsubst ../xml/ca-es/%,../raw/es/%,$@}
# 	perl -pi -e 's/\.xml/\.xml.gz/g' ${patsubst ../xml/%.xml.gz,%.xml,$@}
# 	gzip -f ${patsubst ../xml/%.gz,%,$@}
# 	mv ${patsubst ../xml/%,%,$@} $@

