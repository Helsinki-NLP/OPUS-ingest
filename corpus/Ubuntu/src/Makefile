

## see https://translations.launchpad.net/ubuntu/lunar/+language-packs


URL          = http://launchpadlibrarian.net/181516986/ubuntu-utopic-translations.tar.gz
DISTRIBUTION = rosetta-utopic

# URL          = https://launchpadlibrarian.net/661168893/ubuntu-lunar-translations.tar.gz
# DISTRIBUTION = rosetta-lunar

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
