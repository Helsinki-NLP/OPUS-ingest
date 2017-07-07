# -*-makefile-*-
#


include ../Makefile.def
include ../../Makefile.def

all: en en-fa fa en-fa.xml.gz tokenize


tokenize: fa/TEP.xml.gz en/TEP.xml.gz

fa/TEP.xml.gz: ../raw/fa/TEP.xml.gz
	mkdir -p `dirname $@`
	zcat $< |\
	perl -e 'while (<>){if (/(<s id="[0-9]+">)(.+)(<\/s>)/){$$a=$$1;$$b=$$2;$$c=$$3;print $$a,"<w>";@w=split(/\s+/,$$b);print join("</w><w>",@w);print "</w>",$$c,"\n";}else{print;}}' |\
	tidy -xml -utf8 -i |\
	gzip -c > $@

en/TEP.xml.gz: ../raw/en/TEP.xml.gz
	mkdir -p `dirname $@`
	zcat $< |\
	perl -e 'while (<>){if (/(<s id="[0-9]+">)(.+)(<\/s>)/){$$a=$$1;$$b=$$2;$$c=$$3;print $$a,"<w>";@w=split(/\s+/,$$b);print join("</w><w>",@w);print "</w>",$$c,"\n";}else{print;}}' |\
	tidy -xml -utf8 -i |\
	gzip -c > $@.tmp.gz
	$(TAG) -in $@.tmp.gz -out $@
	rm -f $@.tmp.gz


#en en-fa fa: %: ../raw/%
#	ln -s $< $@

en-fa.xml.gz: ../xml/en-fa/TEP.xml.gz
	cp $< $@

#	ln -s $< $@



include ../../Makefile.annotate
