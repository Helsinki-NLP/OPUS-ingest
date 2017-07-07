
URL   = http://lpg.uoc.edu/DOGC/

YEARS = 1998-2014

TEXTS = $(patsubst %,DOGC-%,${YEARS})

SRCTEXTS = $(patsubst %,%.ca,${TEXTS})
TRGTEXTS = $(patsubst %,%.es,${TEXTS})

ALGXML = ${patsubst %,../xml/ca-es/%.xml.gz,${TEXTS}}


all: ${SRCTEXTS} ${TRGTEXTS} ${ALGXML}

${SRCTEXTS}:
	wget ${URL}/${patsubst %.ca,%-cat.txt.gz,$@}
	gunzip ${patsubst %.ca,%-cat.txt.gz,$@}
	mv ${patsubst %.ca,%-cat.txt,$@} $@

${TRGTEXTS}:
	wget ${URL}/${patsubst %.es,%-spa.txt.gz,$@}
	gunzip ${patsubst %.es,%-spa.txt.gz,$@}
	mv ${patsubst %.es,%-spa.txt,$@} $@


${ALGXML}:
	${MAKE} ${patsubst ../xml/ca-es/%.xml.gz,%.ca,$@}
	${MAKE} ${patsubst ../xml/ca-es/%.xml.gz,%.es,$@}
	letsmt_convert -i moses -o xces \
			${patsubst ../xml/ca-es/%.xml.gz,%.ca,$@} \
			${patsubst ../xml/ca-es/%.xml.gz,%.es,$@} \
			${patsubst ../xml/ca-es/%.xml.gz,%.xml,$@}
	mkdir -p ../raw/ca ../raw/es ../xml/ca-es
	gzip -f ${patsubst ../xml/ca-es/%.xml.gz,ca/%.xml,$@}
	gzip -f ${patsubst ../xml/ca-es/%.xml.gz,es/%.xml,$@}
	mv ${patsubst ../xml/ca-es/%,ca/%,$@} \
		${patsubst ../xml/ca-es/%,../raw/ca/%,$@}
	mv ${patsubst ../xml/ca-es/%,es/%,$@} \
		${patsubst ../xml/ca-es/%,../raw/es/%,$@}
	perl -pi -e 's/\.xml/\.xml.gz/g' ${patsubst ../xml/%.xml.gz,%.xml,$@}
	gzip -f ${patsubst ../xml/%.gz,%,$@}
	mv ${patsubst ../xml/%,%,$@} $@
