

all: ../raw/en-fa

../raw/en-fa: TEP.en TEP.fa
	mkdir -p en
	mkdir -p fa
	cp TEP.en en/TEP.txt
	cp TEP.fa fa/TEP.tmp
	fromdos en/TEP.txt
	fromdos fa/TEP.tmp
	uconv --remove-signature fa/TEP.tmp > fa/TEP.txt
	rm fa/TEP.tmp
	letsmt_convert -i moses -s en -t fa -o xces -O TEP \
			en/TEP.txt fa/TEP.txt
	mkdir -p ../raw/en ../raw/fa
	mv en/*.xml ../raw/en/
	mv fa/*.xml ../raw/fa/
	mv en-fa ../xml/
	find ../raw -name '*.xml' | xargs gzip
	find ../xml -name '*.xml' | xargs perl -pi -e 's/\.xml/\.xml.gz/g'
	find ../xml -name '*.xml' | xargs gzip
