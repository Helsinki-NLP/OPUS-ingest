# -*-makefile-*-
#

include ../Makefile.def
include ../../Makefile.def

# all the UD1.2 languages (except ga - seems incomplete)
PIVOT = en
TRGLANGS = bg cs da de el es et fi fr hu it mt nl pl pt ro sl sv

SRC   = $(PIVOT)
TRG   = $(firstword ${TRGLANGS})

MOSESHOME = ${HOME}/projects/SMT/new-mosesdecoder
MOSESSCRIPTS = ${MOSESHOME}/scripts
TOKENIZER = ${MOSESSCRIPTS}/tokenizer/tokenizer.perl
OPUS2MOSES = $(UPLUGHOME)/tools/xces2moses

ALIGNMENTS     = grow-diag-final-and intersect # srctotgt tgttosrc grow
ALIGNMENT      = $(firstword ${ALIGNMENTS})


SORTEDSRC = $(firstword $(sort $(SRC) $(TRG)))
SORTEDTRG = $(lastword $(sort $(SRC) $(TRG)))

run:
	for s in ${PIVOT} ${TRGLANGS}; do \
		make SRC=mt TRG=$$s align; \
		make SRC=$$s TRG=mt align; \
	done
	make all



.PHONY: all
all: ${PIVOT}-${TRG}.xml.gz
	for s in ${PIVOT} ${TRGLANGS}; do \
	  for t in ${PIVOT} ${TRGLANGS}; do \
		make SRC=$$s TRG=$$t align; \
	  done \
	done

## find all common 1:1 links (through a pivot language)
${PIVOT}-${TRG}.xml.gz:
ifneq (${TRG},${PIVOT})
	${TOOLS}/public/opus-tools/scripts/opus2multi \
		-s 1  ~/OPUS/corpus/DGT/xml ${PIVOT} ${TRGLANGS}
	gzip -f *.xml
	chmod -w *xml.gz
endif


parallel: parallel/${PIVOT}.tok.gz


# make a tokenized multilingual corpus

parallel/${SRC}.tok.gz:
	${MAKE} SRC=${TRG} TRG=${SRC} parallel/${SRC}.tok.gz

parallel/${TRG}.tok.gz: ${PIVOT}-${TRG}.xml.gz
	mkdir -p $(dir $@)
	$(OPUS2MOSES) -d ../raw \
		-s ${PIVOT} -t ${TRG} \
		-p ${dir $@}${PIVOT}-${TRG}.ids \
		${PIVOT}-${TRG}.xml.gz $@
ifeq (${TRG},mt)
	sed 's/$$/ |||/' < $@.${TRG} > $@.tmp
	java -Xmx6g -jar mlrs.jar -i $@.tmp -o $@.tok
	tr "\n"  ' ' < $@.tok | sed "s/ | | | /\n/g" |\
	gzip -c > $@
	rm -f $@.tmp $@.tok
else
	./udpipe-tokenize.pl -l ${TRG} < $@.${TRG} |\
	gzip -c > $@
endif
	rm -f $@.${TRG}
	mv $@.${PIVOT} $(dir $@)${PIVOT}-${TRG}
	gzip -f $(dir $@)${PIVOT}-${TRG}
	gzip -f ${dir $@}${PIVOT}-${TRG}.ids

parallel/${PIVOT}.tok.gz:
	for l in ${TRGLANGS}; do \
	  ${MAKE} TRG=$$l parallel/$$l.tok.gz; \
	done
	if [ -e parallel/${PIVOT}-${TRG}.gz ]; then \
	  mv parallel/${PIVOT}-${TRG}.gz parallel/${PIVOT}.gz; \
	else \
	  if [ -e parallel/${PIVOT}-${SRC}.gz ]; then \
	    mv parallel/${PIVOT}-${SRC}.gz parallel/${PIVOT}.gz; \
	  fi \
	fi
	gzip -cd parallel/${PIVOT}.gz |\
	./udpipe-tokenize.pl -l ${PIVOT} |\
	gzip -c > $@
	rm -f ${PIVOT}.gz
	rm -f parallel/${PIVOT}-??.gz



# align a language pair

.PHONY: align
align:
	if [ ! "${SRC}" = "${TRG}" ]; then \
	  if [ "${SRC}" = "${SORTEDSRC}" ]; then \
	    if [ "${TRG}" = "${SORTEDTRG}" ]; then \
	        make SRC=${SRC} TRG=${TRG} \
		${SRC}-${TRG}/model/aligned.${ALIGNMENT}.gz; \
	    fi \
	  fi \
	fi




# word alignment on 4-char-prefixes with efmaral
# and alignment symmetrisation

${SRC}-${TRG}/c.true.%.gz:
	mkdir -p $(dir $@)
	rm -f $@
	( cd ${dir $@}; \
	  ln -s $(patsubst ${SRC}-${TRG}/c.true.%.gz,../parallel/%.tok.gz,$@) $(notdir $@) )


${SRC}-${TRG}/model/aligned.${ALIGNMENT}.gz: parallel/${SRC}.tok.gz parallel/${TRG}.tok.gz
	mkdir -p ${dir $@}
	${MAKE} ${SRC}-${TRG}/c.true.${SRC}.gz ${SRC}-${TRG}/c.true.${TRG}.gz
	gzip -cd ${SRC}-${TRG}/c.true.${SRC}.gz > ${SRC}-${TRG}/c.true.${SRC}
	${MOSESSCRIPTS}/training/wrappers/make-factor-stem.perl 4 \
		${SRC}-${TRG}/c.true.${SRC} \
		${SRC}-${TRG}/c.stem.${SRC}
	rm -f ${SRC}-${TRG}/c.true.${SRC}
	gzip -cd ${SRC}-${TRG}/c.true.${TRG}.gz > ${SRC}-${TRG}/c.true.${TRG}
	${MOSESSCRIPTS}/training/wrappers/make-factor-stem.perl 4 \
		${SRC}-${TRG}/c.true.${TRG} \
		${SRC}-${TRG}/c.stem.${TRG}
	rm -f ${SRC}-${TRG}/c.true.${TRG}
	efmaral.py -i	${SRC}-${TRG}/c.stem.${SRC} \
			${SRC}-${TRG}/c.stem.${TRG} \
		> ${SRC}-${TRG}/model/aligned.${SRC}-${TRG}
	efmaral.py -r -i ${SRC}-${TRG}/c.stem.${SRC} \
			${SRC}-${TRG}/c.stem.${TRG} \
		> ${SRC}-${TRG}/model/aligned.${TRG}-${SRC}
	rm -f ${SRC}-${TRG}/c.stem.${SRC}
	rm -f ${SRC}-${TRG}/c.stem.${TRG}
	for a in ${ALIGNMENTS}; do \
	  atools -c $$a \
		-i ${SRC}-${TRG}/model/aligned.${SRC}-${TRG} \
		-j ${SRC}-${TRG}/model/aligned.${TRG}-${SRC} |\
	  gzip -c > ${SRC}-${TRG}/model/aligned.$$a.gz; \
	done
	mv ${SRC}-${TRG}/model/aligned.${SRC}-${TRG} ${SRC}-${TRG}/model/aligned.srctotgt
	mv ${SRC}-${TRG}/model/aligned.${TRG}-${SRC} ${SRC}-${TRG}/model/aligned.tgttosrc
	gzip -f ${SRC}-${TRG}/model/aligned.srctotgt
	gzip -f ${SRC}-${TRG}/model/aligned.tgttosrc




# ## OLD alignment with GIZA++

# ${SRC}-${TRG}/model/aligned.${ALIGNMENT}.gz: 
# 	mkdir -p tmp ${dir $@}
# 	make ${SRC}-${TRG}/c.clean.${SRC} ${SRC}-${TRG}/c.clean.${TRG}
# 	${MOSESSCRIPTS}/training/train-model.perl \
# 		-parallel \
# 		-external-bin-dir=${HOME}/projects/SMT/bin \
# 		-root-dir ${SRC}-${TRG} \
# 		-temp-dir tmp \
# 		-corpus ${SRC}-${TRG}/c.clean -f ${SRC} -e ${TRG} \
# 		-alignment ${ALIGNMENT} \
# 		--last-step 3
# 	gzip -f ${SRC}-${TRG}/model/aligned.${ALIGNMENT}


