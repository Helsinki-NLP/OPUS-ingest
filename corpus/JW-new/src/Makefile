
include ../../Makefile.def
include ../Makefile.def

.PHONY: all convert
all: .unpacked
## merging and normalising lang-dirs is not a good idea! 
## this overwrites some language variants and script variants!
#	${MAKE} merge-subdirs
#	${MAKE} normalise-langcodes
	${MAKE} convert
	${MAKE} cleanup

LANGDIRS = $(shell find . -maxdepth 1 -mindepth 1 -type d -printf '%f\n')
XMLDIRS  = ${patsubst %,${CORPUSXML}/%,${LANGDIRS}}
RAWDIRS  = ${patsubst %,${CORPUSRAW}/%,${LANGDIRS}}

LANGDIR  = ${firstword ${LANGDIRS}}
TXTFILES = ${wildcard ${LANGDIR}/*.txt}
XMLFILES = ${patsubst %.txt,${CORPUSXML}/%.xml.gz,${TXTFILES}}
RAWFILES = ${patsubst %.txt,${CORPUSRAW}/%.xml.gz,${TXTFILES}}


crawl: wol.jw.org.tar.gz

wol.jw.org.tar.gz:
	-wget2 -r --random-wait -N -w 1 https://wol.jw.org/
	tar -czf $@ wol.jw.org
	rm -fr wol.jw.org


.PHONY: convert convert-to-xml convert-to-raw
convert: ${RAWDIRS} ${XMLDIRS}
convert-to-xml: ${XMLFILES}
convert-to-raw: ${RAWFILES}

${XMLDIRS}: ${CORPUSXML}/%: %
	${MAKE} LANGDIR=$< convert-to-xml

${RAWDIRS}: ${CORPUSRAW}/%: %
	${MAKE} LANGDIR=$< convert-to-raw

## TODO: is this too dangerous?
.PHONY: cleanup
cleanup:
	find . -maxdepth 1 -mindepth 1 -type d |\
	xargs rm -fr

.unpacked: articles.tar.gz
	tar -xzf articles.tar.gz \
	--transform='s#^.*/\([^/]*\)\_\([^/]*\).txt#\1/\2.txt#'
	touch $@




## make sure that the raw files are produced before the tokenized ones
${CORPUSXML}/%.xml.gz: %.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	./white-space-tokenizer.pl >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	${GZIP} -f ${@:.gz=}

#	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}


${CORPUSRAW}/%.xml.gz: %.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	./detokenizer.perl -l $(subst /,,${dir $<}) -q |\
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	${GZIP} -f ${@:.gz=}



.PHONY: merge-subdirs
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

.PHONY: normalise-langcodes
normalise-langcodes:
	for d in `ls .`; do \
	  if [ -d $$d ]; then \
	    i=`iso639 -2 -k $$d`; \
	    if [ ! "$$i" = "xx" ]; then \
	      s=`echo $$d | cut -f2- -d- | sed s/cyrl/Cyrl/`; \
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

