
URL   = http://lpg.uoc.edu/DOGC

YEARS = 1998 1999 2000 2001 2002 2003 2004 \
	2005 2006 2007 2008 2009 2010 2011 \
	2012 2013

TEXTS = $(patsubst %,DOGC-%,${YEARS})

SRCTEXTS = $(patsubst %,%-cat.txt.gz,${TEXTS})
TRGTEXTS = $(patsubst %,%-spa.txt.gz,${TEXTS})

SRCXML = $(patsubst %-cat.txt.gz,../raw/ca/%.xml.gz,$(SRCTEXTS))
TRGXML = $(patsubst %-spa.txt.gz,../raw/es/%.xml.gz,$(TRGTEXTS))


all: ${SRCXML} ${TRGXML}

${SRCTEXTS}:
	wget $(URL)/$(@:.gz=)
	gzip -f $(@:.gz=)

${TRGTEXTS}:
	wget $(URL)/$(@:.gz=)
	gzip -f $(@:.gz=)

${SRCXML}: ../raw/ca/%.xml.gz: %-cat.txt.gz
	gzip -cd $< |\
	sed 's/^[—-]/\n-/'  |\
	sed 's/|$$/|\n/g'  |\
	sed 's/();/();\n/g' > $<.ca
	mkdir -p $(dir $@)
	letsmt_convert \
		-i text -o xml -l ca \
		-n whitespace,header,ligatures \
		-b lingua $<.ca $(@:.gz=)
	rm -f $<.ca
	gzip -f $(@:.gz=)

${TRGXML}: ../raw/es/%.xml.gz: %-spa.txt.gz
	gzip -cd $< |\
	sed 's/^[—-]/\n--/'  |\
	sed 's/|$$/|\n/g'  |\
	sed 's/();/();\n/g' > $<.es
	mkdir -p $(dir $@)
	letsmt_convert \
		-i text -o xml -l es \
		-n whitespace,header,ligatures \
		-b lingua $<.es $(@:.gz=)
	rm -f $<.es
	gzip -f $(@:.gz=)

