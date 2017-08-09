



docids.txt:
	find ../parsed -mindepth 2 -name '*.xml.gz' | \
	sort | nl -w 1 | sed 's#../parsed/##' > $@

sentids.txt:
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<s [^>]*id="[^ ]*"[^>]*>' | \
	sed "s/gz:<s .*id=\"\([^ ]*\)\".*>/gz\t\1/" |\
	nl -w 1 | sed 's#../parsed/##' > $@

wordids.txt:
	find ../parsed/ -mindepth 2 -name '*.xml.gz' | \
	sort | xargs zgrep -o '<w [^>]*id="[^ ]*"[^>]*>' | \
	sed "s/gz:<w .*id=\"\([^ ]*\)\".*>/gz\t\1/" |\
	nl -w 1 | sed 's#../parsed/##' > $@
