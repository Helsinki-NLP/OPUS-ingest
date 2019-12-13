


ALLRAW = ${wildcard /proj/nlpl/data/OPUS/*/latest/raw/*.zip}
ALLRAW_LANGID = ${subst /raw/,/raw-langid/,${ALLRAW}}

run-langid: ${ALLRAW_LANGID}

${ALLRAW_LANGID}:
	mkdir -p $(dir $@)
	TMPDIR=/proj/nlpl/data/OPUS/tmp opus_langid -f ${subst /raw-langid/,/raw/,$@} -t $@




CORPORA = ECB EMEA EUconst Europarl3 KDE4 KDEdoc MBS OpenOffice \
	OpenOffice3 OpenSubtitles OpenSubtitles2011 PHP \
	RF SETIMES SPC TEP WikiSource


fix-all-tmx:
	for c in ${CORPORA}; do \
	  make C=$$c fix-tmx; \
	done


fix-tmx:
	rm -f /home/opus/public_html/${C}/*.tmx.gz
	make -C ${C} html


LANGUAGES = en sv zh de

LANGPAIRS = ${shell \
	for s in ${LANGUAGES}; do \
	  for t in ${LANGUAGES}; do \
	    if [[ "$$s" < "$$t" ]]; then \
	      echo "$$s-$$t"; \
	    fi \
	  done \
	done  }


.SECONDEXPANSION:

%.txt: $$(firstword $$(subst -, ,%)) $$(lastword $$(subst -, ,%))
	echo $^

en:
	echo "hallo English"

sv:
	echo "hallo Swedish"


