

URL2011 = http://optima.jrc.it/Resources/DGT-TM-2011
URL2012 = http://optima.jrc.it/Resources/DGT-TM-2012
URL2013 = http://optima.jrc.it/Resources/DGT-TM-2013
URL2014 = http://optima.jrc.it/Resources/DGT-TM-2014


VOLUMES2011 = 	2004_1 2004_2 \
		2005_1 2005_2 2005_3 \
		2006_1 2006_2 2006_3 2006_4 2006_5 \
		2007_1 2007_2 2007_3 \
		2008_1 2008_2 2008_3 2008_4 \
		2009_1 2009_2 2009_3 2009_4 \
		2010_1 2010_2 2010_3 2010_4 
VOLUMES2012 = 	2011_1 2011_2 2011_3 2011_4
VOLUMES2013 = 	2012_1 2012_2 2012_3 2012_4 2012_5 2012_6
VOLUMES2014 = 	2013_1 2013_2 2013_3 2013_4 2013_5 2013_6 2013_7


ZIP2011 = $(patsubst %,Vol_%.zip,$(VOLUMES2011))
ZIP2012 = $(patsubst %,Vol_%.zip,$(VOLUMES2012))
ZIP2013 = $(patsubst %,Vol_%.zip,$(VOLUMES2013))
ZIP2014 = $(patsubst %,Vol_%.zip,$(VOLUMES2014))

DONE = $(patsubst %.tmx,%.done,$(wildcard *.tmx))

ALGXMLGZ = $(patsubst %.xm,%.xml.gz,$(wildcard ??-??/*.xml))
XMLGZ = $(patsubst %.xm,%.xml.gz,$(wildcard ??/*.xml))


all: fetch
	${MAKE} -j 4 convert
	rm -f *.zip *.tmx *.done
	${MAKE} -j 4 compress


fetch: $(ZIP2011) $(ZIP2012) $(ZIP2013) $(ZIP2014)

convert: $(DONE)

compress: ${ALGXMLGZ} ${XMLGZ}


$(ZIP2011):
	wget $(URL2011)/$@
	unzip $@

$(ZIP2012):
	wget $(URL2012)/$@
	unzip $@

$(ZIP2013):
	wget $(URL2013)/$@
	unzip $@

$(ZIP2014):
	wget $(URL2014)/$@
	unzip $@

$(DONE): %.done: %.tmx
	recode UTF-16..UTF-8 < "$<" |\
	sed 's/encoding="UTF-16LE"/encoding="UTF-8"/i' |\
	perl -p -e 's/lang=\"(..)-..\"/lang=\"$$1\"/' > "$@"
	letsmt_convert -i tmx -o xces "$@" ${subst ),_,${subst (,_,${<:.tmx=.xml}}}

$(ALGXMLGZ): %.xml.gz: %.xml
	sed 's/.xml/.xml.gz/g' < $< | gzip -c > $@
	rm -f $<

$(XMLGZ): %.xml.gz: %.xml
	gzip -f $<

