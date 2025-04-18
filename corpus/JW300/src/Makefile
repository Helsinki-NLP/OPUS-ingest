
include ../../Makefile.def
include ../Makefile.def
include Makefile.rename

.PHONY: all
all: .unpacked2
## merging and normalising lang-dirs is not a good idea! 
## this overwrites some language variants and script variants!
#	${MAKE} merge-subdirs
#	${MAKE} normalise-and-merge-langcodes
	${MAKE} normalise-langcodes
	${MAKE} rename
	${MAKE} filtertrash
	${MAKE} convert

LANGDIRS = $(shell find . -maxdepth 1 -mindepth 1 -type d -printf '%f\n')
LANGDONE = $(patsubst %,%.done,${LANGDIRS})

LANGDIR  = ${firstword ${LANGDIRS}}
TXTFILES = ${wildcard ${LANGDIR}/*.txt}
RAWFILES = ${patsubst %.txt,${CORPUSRAW}/%.xml.gz,${TXTFILES}}


.PHONY: convert convert-to-raw
convert: ${LANGDONE}
convert-to-raw: ${RAWFILES}

${LANGDONE}: .unpacked2
	${MAKE} LANGDIR=${@:.done=} convert-to-raw
	rm -fr ${@:.done=}
	touch $@

${RAWDIRS}: ${CORPUSRAW}/%: %
	${MAKE} LANGDIR=$< convert-to-raw


.unpacked: articles.tar.gz
	tar -xzf articles.tar.gz \
	--transform='s#^.*/\([^/]*\)\_\([^/]*\).txt#\1/\2.txt#'
	touch $@

.unpacked2: output.tar.gz
	tar -xzf output.tar.gz --strip-components=1
	touch $@


${CORPUSRAW}/%.xml.gz: %.txt
	@mkdir -p ${dir $@}
	@echo '<?xml version="1.0" encoding="utf-8"?>' > ${@:.gz=}
	@echo '<text>' >> ${@:.gz=}
	@cat -n $< | \
	sed 's/\&/\&amp;/g;s/>/\&gt;/g;s/</\&lt;/g;' |\
	sed 's/^ *\([0-9][0-9]*\)\s*/<s id="\1">/;s#\s*$$#</s>#' >> ${@:.gz=}
	@echo '</text>' >> ${@:.gz=}
	${GZIP} -f ${@:.gz=}

#	./detokenizer.perl -l $(subst /,,${dir $<}) -q |\



.PHONY: normalise-langcodes
normalise-langcodes:
	for d in `ls .`; do \
	  if [ -d $$d ]; then \
	    n=`echo $$d | tr '-' '_' | sed s/cyrl/Cyrl/`; \
	    if [ ! "$$n" = "$$d" ]; then \
	      echo "move $$d to $$n"; \
	      mv $$d $$n; \
	    fi \
	  fi \
	done



## OLD: merge sub-dirs with different language variants
## --> not such a good idea ....

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

.PHONY: normalise-and-merge-langcodes
normalise-and-merge-langcodes:
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

