
SHELL = bash

include ../../Makefile.def
include ../Makefile.def

all: ${CORPUSXML}
	${MAKE} cleanup

FILE_EXT = xxx
TXTFILES = ${wildcard */*.${FILE_EXT}}
XMLFILES = ${patsubst %.txt,${CORPUSXML}/%.xml.gz,${TXTFILES}}
RAWFILES = ${patsubst %.txt,${CORPUSRAW}/%.xml.gz,${TXTFILES}}


${CORPUSXML}: ${CORPUSRAW}
	${MAKE} FILE_EXT=txt xmlfiles

${CORPUSRAW}: .unpacked
	${MAKE} merge-subdirs
	${MAKE} normalise-langcodes
	${MAKE} FILE_EXT=txt rawfiles

#.unpacked: articles.tar.gz
#	tar -xzf articles.tar.gz \
#	--transform='s#^.*/\([a-z]*\)\_\([^/]*\).txt#\1/\2.txt#'
#	touch $@

.unpacked: articles.tar.gz
	tar -xzf articles.tar.gz \
	--transform='s#^.*/\([^/]*\)\_\([^/]*\).txt#\1/\2.txt#'
	touch $@


merge-subdirs:
	for d in `find . -maxdepth 1 -mindepth 1 -type d -name '*-*' -printf "%f\n" | cut -f1 -d- | sort -u`; do \
	  echo "processing '$$d'"; \
	  if [ `ls $$d-*/*.txt | cut -f2 -d/ | sort | uniq -c | grep -v '^ *1 ' | wc -l` -gt 0 ]; then \
	    echo "cannot merge $$d variants"; \
	  else \
	    echo "merge $$d variants"; \
	    mkdir -p $$d; \
	    mv $$d-*/* $$d/; \
	    rmdir $$d-*; \
	  fi \
	done 

normalise-langcodes:
	for d in `ls .`; do \
	  if [ -d $$d ]; then \
	    i=`iso639 -2 -k $$d`; \
	    if [ ! "$$i" = "xx" ]; then \
	      s=`echo $$d | cut -f2 -d- | sed s/cyrl/Cyrl/`; \
	      if [ ! "$$s" = "$$d" ]; then \
	        n="$${i}_$$s"; \
	      else \
	        n="$$i"; \
	      fi; \
	      if [ ! "$$n" = "$$d" ]; then \
	        echo "move $$d to $$n"; \
	        mkdir -p $$n; \
	        mv $$d/* $$n/; \
	        rmdir $$d; \
	      fi \
	    fi \
	  fi \
	done


## TODO: is this too dangerous?
.PHONY: cleanup
cleanup:
	find . -maxdepth 1 -mindepth 1 -type d |\
	xargs rm -fr
#	rm -fr ?? ??? home


.PHONY: xmlfiles
xmlfiles: ${XMLFILES}

## make sure that the raw files are produced before the tokenized ones
${XMLFILES}: ${CORPUSXML}/%.xml.gz: %.txt ${CORPUSRAW}/%.xml.gz
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	./white-space-tokenizer.pl >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	gzip -f ${@:.gz=}

#	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}


.PHONY: rawfiles
rawfiles: ${RAWFILES}

${RAWFILES}: ${CORPUSRAW}/%.xml.gz: %.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	./detokenizer.perl -l ${dir $<} -q |\
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	gzip -f ${@:.gz=}
