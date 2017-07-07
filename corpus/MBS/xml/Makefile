

LINKFILES = $(addsuffix .xml.gz,$(wildcard ??-??))


all: ${LINKFILES}

${LINKFILES}: %.xml.gz: %
	-( find $< -type f -name '*.xml.gz' |\
		sort | \
		xargs zgrep --no-filename '<link' >> $@.links )
	if [ -s $@.links ]; then \
	  echo '<?xml version="1.0" encoding="utf-8"?>' >$@.tmp; \
	  echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		  >>$@.tmp; \
	  echo '<cesAlign version="1.0">' >> $@.tmp; \
	  cat $@.links >> $@.tmp; \
	  echo '</cesAlign>' >> $@.tmp; \
	  gzip $@.tmp; \
	  mv $@.tmp.gz $@; \
	fi
	rm -f $@.links
