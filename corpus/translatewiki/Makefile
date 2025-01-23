# -*-makefile-*-
#


include Makefile.def
include ../Makefile.def



.PHONY: all
all:
	${MAKE} -C src all
	${MAKE} -C xml all
	${MAKE} publish


publish-moses:
	${MAKE} moses
	${MAKE} txt_info



## temporary fix to get rid of empty links

fix-release-files:
	${MAKE} remove-empty-links
	tar -cf xml.tar xml
	cp xml/Makefile new/Makefile
	find xml -delete
	mv new xml
	find ${CORPUSRELEASE}/moses -delete
	find ${CORPUSRELEASE}/xml -name '*.xml.gz' -delete
	find ${CORPUSPUB} -name '*.html' -delete
	${MAKE} delete-empty-bitexts
	${MAKE} publish
	${MAKE} publish-moses

NEWALGFILES = $(patsubst xml/%,new/%,$(wildcard xml/*.xml.gz))
MOVE_NEWALGFILES = $(addsuffix .move,$(wildcard new/*.xml.gz))

remove-empty-links: ${NEWALGFILES}

${NEWALGFILES}: new/%: xml/%
	mkdir -p $(dir $@)
	zgrep -v ';"' $< | gzip -c > $@
	if [ `zgrep xtargets $@ | head -1 | wc -l` == "0" ]; then \
	  echo "empty bitext $@ --> delete"; \
	  rm -f $@; \
	fi

move-xml-files: ${MOVE_NEWALGFILES}

${MOVE_NEWALGFILES}: %.move: %
	@if [ `diff <(gzip -cd $<) <(gzip -cd xml/$(notdir $<)) | wc -l` -gt 0 ]; then \
	  echo "$< changed"; \
	  mv $< xml/$(notdir $<); \
	fi
	rm -f $<


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb



## select one of the following to set the annotation level in xml/

include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


