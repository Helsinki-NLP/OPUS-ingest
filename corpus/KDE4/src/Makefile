
include ../../Makefile.def
include ../Makefile.def


DIR = ${PWD}
DATA = l10n-kde4

SCRIPTS = ${TOOLS}/$(CORPUS)
PO2EN   = ${SCRIPTS}/po2en -v
PO2XCES = ${SCRIPTS}/po2xces
ALIGNPO = ${TOOLS}/align-po

SRCDIR=$(wildcard ${DATA}/??) $(wildcard ${DATA}/???) $(wildcard ${DATA}/??_??)
LANGUAGES = $(patsubst ${DATA}/%,%,$(SRCDIR)) en
SORTLANG = ${shell echo '${LANGUAGES}' | tr " " "\n" | sort | uniq}
#TMX=$(patsubst %.ces.gz,%.tmx.zip,$(wildcard xml/*.ces.gz))
TMX=$(patsubst %.ces.gz,%.tmx.gz,$(wildcard xml/*.ces.gz))

SRC = de
TRG = en

tttt:
	echo ${LANGUAGES}
	echo ${SORTLANG}

# ALIGNFILES = $(shell cat ${SRC}-${TRG}.files)
ALIGNFILES = $(shell if [ -e ${SRC}-${TRG}.files ]; then sort ${SRC}-${TRG}.files; fi)



all: download alignall allces pre_all

new: alignall allces pre_all

english:
	make alignall
	make SRC=en pre_src

sr:
	make alignall
	make SRC=sr pre_src

download:  ${DATA}
	( cd $<; svn update; )

${DATA}:
	ln -s $(OPUSDATA)/$(OPUS)/$@ $@
	svn co svn://anonsvn.kde.org/home/kde/trunk/l10n-kde4

#${DATA}:
#	svn co svn://websvn.kde.org:443/home/kde/trunk/l10n-kde4

#${DATA}:
#	wget -r ftp://ftp.kde.org/pub/kde/stable/latest/src/kde-l10n/
#	wget -r ftp://ftp.df.lth.se/pub/kde/stable/latest/src/kde-l10n/
#	svn co svn://websvn.kde.org:443/home/kde/trunk/l10n-kde4


alignall:
	for s in $(SORTLANG); do \
	  for t in $(SORTLANG); do \
	    if [ $$s != $$t ]; then \
	      if [ -d "xml/$$t-$$s" ]; then \
		echo "skip $$s-$$t ($$t-$$s exists already)!" ; \
	      else \
		make SRC=$$s TRG=$$t xml/$$s-$$t; \
	      fi; \
	    fi; \
	  done; \
	done

move:
	mkdir -p xml-wrong
	for s in $(SORTLANG); do \
	  e=`echo "$(SORTLANG)" | sed "s/^.*$$s//"`; \
	  for t in $$e; do \
	    if [ -d "xml/$$t-$$s" ]; then \
		mv xml/$$t-$$s* xml-wrong/; \
		make SRC=$$s TRG=$$t xml/$$s-$$t; \
	    fi; \
	  done \
	done
	make allces

allces:
	for s in $(SORTLANG); do \
	  for t in $(SORTLANG); do \
	  	if [ -d "xml/$$t-$$s" ]; then \
			make xml/$$t-$$s.ces.gz; \
		fi; \
	  done \
	done


%.ces.gz: %.ces
	gzip -f $<

%.ces: %
	echo '<?xml version="1.0" encoding="utf-8"?>' > $@
	echo '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'>>$@
	echo '<cesAlign version="1.0">' >> $@
	find $< -name '*.ces' | \
	sort | \
	xargs cat | \
	grep 'link' >> $@; \
	echo "</cesAlign>" >> $@


## always make a new list of files to be aligned!

xml/${SRC}-${TRG}:
	rm -f ${SRC}-${TRG}.files
	make ${SRC}-${TRG}.files
	if [ -s ${SRC}-${TRG}.files ]; then make align; fi
	rm -f ${SRC}-${TRG}.files

${SRC}-${TRG}.files: ${DATA}/${SRC} ${DATA}/${TRG}
	( cd ${DATA}/${SRC}; find . -name '*.po' > ${DIR}/$@.src; )
	( cd ${DATA}/${TRG}; find . -name '*.po' > ${DIR}/$@.trg; )
	cat $@.src $@.trg | \
	sort | uniq -c | \
	grep '^ *2 ' | \
	sed -e 's/^ *2 *\.\//xml\/${SRC}-${TRG}\//' \
	    -e 's/\.po$$/.ces/' > $@
	rm -f $@.src $@.trg

# special treatment for pairs with 'en'

${SRC}-en.files: ${DATA}/${SRC} ${DATA}/en
	( cd ${DATA}/${SRC}; find . -name '*.po' > ${DIR}/$@.src; )
	cat $@.src | \
	sort | \
	sed -e 's/^\.\//xml\/${SRC}-${TRG}\//' \
	    -e 's/\.po$$/.ces/' > $@
	rm -f $@.src

en-${TRG}.files: ${DATA}/en ${DATA}/${TRG}
	( cd ${DATA}/${TRG}; find . -name '*.po' > ${DIR}/$@.trg; )
	cat $@.trg | \
	sort | \
	sed -e 's/^\.\//xml\/${SRC}-${TRG}\//' \
	    -e 's/\.po$$/.ces/' > $@
	rm -f $@.trg


align:  ${ALIGNFILES}


xml/${SRC}-${TRG}/%.ces: ${DATA}/${SRC}/%.po ${DATA}/${TRG}/%.po
	mkdir -p `dirname $@`
	${PO2XCES} $^ $@ \
		$(patsubst xml/${SRC}-${TRG}/%.ces,xml/${SRC}/%.xml,$@) \
		$(patsubst xml/${SRC}-${TRG}/%.ces,xml/${TRG}/%.xml,$@)

zip: xml/${SRC} xml/${TRG}
	find xml/${SRC} -name '*.xml' -exec gzip {} \;
	find xml/${TRG} -name '*.xml' -exec gzip {} \;

${DATA}/en:
	mkdir -p $@

${DATA}/en/%.po:
	if [ ${SRC} == 'en' ]; then \
		${PO2EN} $(subst /en/,/${TRG}/,$@) $@; \
	else \
		${PO2EN} $(subst /en/,/${SRC}/,$@) $@; \
	fi



#################################################################

tidy:
	find xml/${SRC} -name '*.xml' -exec ./mytidy.pl {} > {}.tidy \;


pre_all:
	for l in ${SORTLANG}; do \
		make SRC=$$l pre_src; \
	done

pre_src:
	find xml/${SRC} -name '*.xml' |\
	sed 's/\.xml$$/.xml.gz/' > ${SRC}.files
	make pre
	rm -f ${SRC}.files

UPLUGHOME = ${HOME}/projects/uplug
UPLUGSYS = ${HOME}/projects/uplug/systems
UPLUG = ${UPLUGHOME}/uplug

XMLFILES = $(shell if [ -e ${SRC}.files ]; then cat ${SRC}.files; fi)

UPLUGTOK =	af ar be bg bn bn_IN br bs ca crh cs csb cy da el \
		eo es et eu fa fi fy ga gl gu ha he hi hr hsb hu hy \
		is ka kk km kn ko ku lb lt lv mk mr ms mt nds ne nb nl nn nso \
		oc or pa pl ps pt pt_BR ro ru rw se sk sl sr sv ta te \
		tg th tr uk uz ven vi wa xh zu
TOKPAT = $(shell echo ${UPLUGTOK} | tr " " '|')

## insert this for uplug tokenization if not all should be tokenized ...
## (only the ones listed in UPLUGTOK)
##
#			case ${SRC} in \
#			${TOKPAT}) ${UPLUG} pre/tok -in $< -out $<.tok ;; \
#			*) mv $< $<.tok ;; \
#			esac \

tt:
	case ${LLL} in \
	${TOKPAT}) echo "ok" ;; \
	esac


pre: ${XMLFILES}


%.tidy: %.xml
	./mytidy.pl $< > $@
	rm -f $<

%.xml.gz: %.tidy
	if [ -e ${UPLUGSYS}/pre/${SRC}/tok ]; then \
		${UPLUG} pre/${SRC}/tok -in $< -out $<.tok; \
	else \
		if [ -e ${UPLUGSYS}/pre/${SRC}/toktag ]; then \
			${UPLUG} pre/${SRC}/toktag -in $< -out $<.tok; \
		else \
			${UPLUG} pre/tok -in $< -out $<.tok;\
		fi; \
	fi
	if [ -e ${UPLUGSYS}/pre/${SRC}/tagchunk ]; then \
		${UPLUG} pre/${SRC}/tagchunk -in $<.tok -out $<.tag; \
		mv $<.tag $<.tok; \
	else \
		if [ -e ${UPLUGSYS}/pre/${SRC}/tag ]; then \
			${UPLUG} pre/${SRC}/tag -in $<.tok -out $<.tag; \
			mv $<.tag $<.tok; \
		fi; \
	fi
	tidy -utf8 -xml --force-output y -i $<.tok | \
	gzip -c > $@
	rm -f $<
	rm -f $<.tok

#	gzip -c < $<.tok > $@
#	mv $<.tok $<




#${DATA}/en: ${SRCDIR}
#	mkdir -p $@
#	for l in ${LANGUAGES}; do \
#		cd ${DATA}/$$l; \
#		find . -name '*.po' -exec \
#			${PO2EN} ${DIR}/${DATA}/$$l/{} ${DIR}/$@/{} \;; \
#		cd ${DIR}; \
#	done




#----------------------------------------------------------------------------
# convert all bitexts to TMX format
#----------------------------------------------------------------------------

tmxfiles: $(TMX)

#$(TMX): %.tmx.zip: %.tmx
#	rm -f $@
#	zip $@ $<
#	rm -f $<

#%.tmx: %.ces.gz
#	${UPLUGHOME}/tools/xces2tmx -d . \
#		-s $(shell echo '$@' | sed 's#.*/\(..\)-.*#\1#' ) \
#		-t $(shell echo '$@' | sed 's#.*-\(..\).*#\1#' ) \
#		$< > $@ 2> /dev/null

%.tmx.gz: %.ces.gz
	${UPLUGHOME}/tools/xces2tmx -d . \
		-s $(shell echo '$@' | sed 's#.*/\(..\)-.*#\1#' ) \
		-t $(shell echo '$@' | sed 's#.*-\(..\).*#\1#' ) \
		$< | gzip -c > $@


# tmxfiles:
# 	for s in ${SORTLANG}; do \
# 	  for t in ${SORTLANG}; do \
# 		if [ -d xml/$$t-$$s ]; then \
# 			make SRC=$$s TRG=$$t xml/$$t-$$s.tmx.zip; \
# 		fi; \
# 	  done; \
# 	done

# xml/${SRC}-${TRG}.tmx: %.tmx: %.ces.gz
# 	${UPLUGHOME}/tools/xces2tmx -s ${SRC} -t ${TRG} $< > $@


# %.tmx.zip: %.tmx
# 	rm -f $@
# 	zip $@ $<
# 	rm -f $<

