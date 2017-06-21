

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

