# -*-makefile-*-

include ../Makefile.def
include ../../Makefile.def



TXT2UTF8=$(TOOLS)/opus/text2utf8.pl


all: sce eucouncil 20afen

20afen: af/20.txt.gz en/20.txt.gz

af/20.txt.gz: 20afr.txt
	mkdir -p af
	fromdos < $< | grep . | gzip -c > $@

en/20.txt.gz: 20eng.txt
	mkdir -p en
	fromdos < $< | grep . | gzip -c > $@


sce: zh/sce.txt.gz en/sce.txt.gz

zh/sce.txt.gz:
	unzip SCE-English-Chinese-parallel-corpora.zip
	mkdir -p zh
	$(TXT2UTF8) < SCE-English-Chinese-parallel-corpora/Chinese\ 104563\ characters.txt | gzip -c > $@

en/sce.txt.gz:
	unzip SCE-English-Chinese-parallel-corpora.zip
	mkdir -p en
	$(TXT2UTF8) < SCE-English-Chinese-parallel-corpora/English\ 75,997\ words.txt | gzip -c > $@
	rm -fr SCE-English-Chinese-parallel-corpora


eucouncil: en/eucouncil.txt.gz el/eucouncil.txt.gz

en/eucouncil.txt.gz:
	unzip eucouncil00enel.zip
	mkdir -p `dirname $@`
	$(TXT2UTF8) < eucouncil00en.txt | gzip -c > $@
	rm eucouncil00el.txt eucouncil00en.txt

el/eucouncil.txt.gz:
	unzip eucouncil00enel.zip
	mkdir -p `dirname $@`
	$(TXT2UTF8) < eucouncil00el.txt | gzip -c > $@
	rm eucouncil00el.txt eucouncil00en.txt

