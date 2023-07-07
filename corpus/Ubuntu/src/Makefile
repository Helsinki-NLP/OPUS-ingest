URL          = http://launchpadlibrarian.net/181516986/ubuntu-utopic-translations.tar.gz
DISTRIBUTION = rosetta-utopic

.PHONY: all
all: ${DISTRIBUTION}

${DISTRIBUTION}:
	wget $(URL)
	tar -xzf $(notdir $(URL))
	rm -f $(notdir $(URL))
	${MAKE} lang-ids

## TODO: some localization files are incomplete and contain placeholders
## examples: aa and ab have no real translations ...

lang-ids:
	-ln -s ${DISTRIBUTION}/?? .
	-ln -s ${DISTRIBUTION}/??_?? .
	-ln -s ${DISTRIBUTION}/??? .
	rm -f aa ab
