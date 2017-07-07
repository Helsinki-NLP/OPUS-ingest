
include ../Makefile.def
include ../../Makefile.def


HUNALIGN   = ${UPLUG} align/hun
OPUS2MOSES = $(UPLUGHOME)/tools/xces2moses

SRC=bg
TRG=mk

PAIRS = $(shell zgrep fromDoc ../xml/${SRC}-${TRG}.xml.gz  | \
	        sed 's/^.*fromDoc="//;s/" *toDoc="/+/;s/".*$$//')


# run hunalign for all language pairs

all:
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [ -f "../xml/$$s-$$t.xml.gz" ]; then \
		make SRC=$$s TRG=$$t ces; \
	    fi \
	  done \
	done

all-en:
	for t in ${LANGUAGES}; do \
	    if [ -f "../xml/en-$$t.xml.gz" ]; then \
		make SRC=en TRG=$$t ces; \
	    fi; \
	    if [ -f "../xml/$$t-en.xml.gz" ]; then \
		make SRC=$$t TRG=en ces; \
	    fi; \
	done \



# run hunalign for all subtitle pairs (selected by the time-align approach)

ces: ${SRC}-${TRG}.xml.gz

${SRC}-${TRG}.xml.gz:
	make ${SRC} ${TRG}
	echo '<?xml version="1.0" encoding="utf-8"?>' > ${SRC}-${TRG}.xml
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">' \
		>> ${SRC}-${TRG}.xml
	echo '<cesAlign version="1.0">' >> ${SRC}-${TRG}.xml
	make pairs
	echo '</cesAlign>' >> ${SRC}-${TRG}.xml
	gzip -f ${SRC}-${TRG}.xml

#	rm ${SRC} ${TRG}


pairs: ${PAIRS}

${PAIRS}:
	${HUNALIGN} -src $(shell echo $@ | sed 's/+/ -trg /')  |\
	grep 'link' >> ${SRC}-${TRG}.xml





# make the plain text version

moses: ${SRC}-${TRG}.${SRC}

${SRC}-${TRG}.${SRC}: ${SRC}-${TRG}.xml.gz
	  $(OPUS2MOSES) -d ../raw -s ${SRC} -t ${TRG} $< ${SRC}-${TRG}




${SRC}:
	ln -s ../xml/${SRC} .

${TRG}:
	ln -s ../xml/${TRG} .


