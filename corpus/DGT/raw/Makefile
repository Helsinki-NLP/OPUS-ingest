
# example
# https://wt-public.emm4u.eu/Resources/DGT-TM-2015/Vol_2014_1.zip


URL2011 = http://wt-public.emm4u.eu/Resources/DGT-TM-2011
URL2012 = http://wt-public.emm4u.eu/Resources/DGT-TM-2012
URL2013 = http://wt-public.emm4u.eu/Resources/DGT-TM-2013
URL2014 = http://wt-public.emm4u.eu/Resources/DGT-TM-2014
URL2015 = http://wt-public.emm4u.eu/Resources/DGT-TM-2015
URL2016 = http://wt-public.emm4u.eu/Resources/DGT-TM-2016
URL2017 = http://wt-public.emm4u.eu/Resources/DGT-TM-2017
URL2018 = http://wt-public.emm4u.eu/Resources/DGT-TM-2018
URL2019 = http://wt-public.emm4u.eu/Resources/DGT-TM-2019


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
VOLUMES2015 = 	2014_1 2014_2 2014_3
VOLUMES2016 = 	2015_1 2015_2 2015_3 2015_4 2015_5 2015_6 2015_7
VOLUMES2017 = 	2016_1 2016_2 2016_3 2016_4 2016_5 2016_6 2016_7 2016_8 2016_9
VOLUMES2018 = 	2017_1 2017_2
VOLUMES2019 = 	2018_1 2018_2 2018_3


ZIP2011 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2011))
ZIP2012 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2012))
ZIP2013 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2013))
ZIP2014 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2014))
ZIP2015 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2015))
ZIP2016 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2016))
ZIP2017 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2017))
ZIP2018 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2018))
ZIP2019 = $(patsubst %,../src/Vol_%.zip,$(VOLUMES2019))

## one file for testing
ZIPTEST = ../src/Vol_2018_3.zip


## make targets for English XML files
## --> assume that there is English in all TMX files
ENXML = $(patsubst %.tmx,en/%.xml.gz,$(wildcard *.tmx))


all: fetch
	${MAKE} convert
	rm -f *.zip *.txt *.pdf
	find . -name '*.tmx' | xargs rm -f


## fetching and renaming files that have brackets
.PHONY: fetch
fetch: 	$(ZIP2011) $(ZIP2012) $(ZIP2013) $(ZIP2014) \
	$(ZIP2015) $(ZIP2016) $(ZIP2017) $(ZIP2018) \
	$(ZIP2019)
	-find . -type f -name '*\(*.tmx' | perl -pe 'print $$_; s/[\(\) ]/_/g' | xargs -n2 mv

## fetch a test file
.PHONY: fetch-test
fetch-test: ${ZIPTEST}

## convert all tmx files
.PHONY: convert
convert: ${ENXML}


## use English XML files as main target (assuming that there is always English)
en/%.xml.gz: %.tmx
	tmx2opus -r -o "${<:.tmx=.xml.gz}" "$<"


## TODO: could we make this more general to download files
##       for each release year?

$(ZIP2011):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2011)/${notdir $@}
	unzip -o $@

$(ZIP2012):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2012)/${notdir $@}
	unzip -o $@

$(ZIP2013):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2013)/${notdir $@}
	unzip -o $@

$(ZIP2014):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2014)/${notdir $@}
	unzip -o $@

$(ZIP2015):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2015)/${notdir $@}
	unzip -o $@

$(ZIP2016):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2016)/${notdir $@}
	unzip -o $@

$(ZIP2017):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2017)/${notdir $@}
	unzip -o $@

$(ZIP2018):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2018)/${notdir $@}
	unzip -o $@

$(ZIP2019):
	mkdir -p ${dir $@}
	wget -O $@ $(URL2019)/${notdir $@}
	unzip -o $@
