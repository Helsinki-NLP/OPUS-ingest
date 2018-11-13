#
# NOTES
#
#  - some language pairs still require large amounts of memory
#    (e.g. en-fr does not run with 64g)
#    --> set MEM=128g
#
#  - en-fr still crashes with 128GB!
#    make MEM=256g QUEUE=hugemem LANGPAIR=en-fr all.submit
#
#


LANGPAIR = fi-sv

SRC = $(word 1,${subst -, ,${LANGPAIR}})
TRG = $(word 2,${subst -, ,${LANGPAIR}})


STEMSIZE = 4

OPUS = ${wildcard /proj/nlpl/data/OPUS/*/latest/moses/${SRC}-${TRG}.txt.zip}
# OPUS = ${wildcard /proj/nlpl/data/OPUS/EUconst/latest/moses/${SRC}-${TRG}.txt.zip}

WORKDIR = work/${SRC}-${TRG}
EFLOMAL = ${HOME}/appl_taito/tools/eflomal

## skip e-mailing ...
##
# WHOAMI = $(shell whoami)
# ifeq ("$(WHOAMI)","tiedeman")
#   EMAIL = jorg.tiedemann@helsinki.fi
# endif


MEM      = 32g
THREADS  = 2
NODES    = 1
QUEUE    = serial
WALLTIME = 72


all: ${WORKDIR}/${SRC}-${TRG}.priors
data: ${WORKDIR}/train.${SRC}-${TRG}


all-langs:
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/*-*.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    make LANGPAIR=$$p all.submit; \
	  fi \
	done


## languages with 2-letter codes
all-langs2:
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/??-??.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    make LANGPAIR=$$p all.submit; \
	  fi \
	done


## languages with 3-letter codes
all-langs3:
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/???-???.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    make LANGPAIR=$$p all.submit; \
	  fi \
	done
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/??-???.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    make LANGPAIR=$$p all.submit; \
	  fi \
	done
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/???-??.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    make LANGPAIR=$$p all.submit; \
	  fi \
	done





all-langs-test:
	for p in $(patsubst %.txt.zip,%,\
		$(sort $(notdir \
		$(wildcard /proj/nlpl/data/OPUS/*/latest/moses/??-??.txt.zip)))); do \
	  if [ ! -e work/$$p/$$p.priors ]; then \
	    echo "make MEM=64g LANGPAIR=$$p all.submit"; \
	  fi \
	done



${WORKDIR}/train.${SRC}:
	mkdir -p ${dir $@}
	rm -f $@
	rm -f ${@:.${SRC}=.${TRG}}
	for c in ${OPUS}; do \
	  cp $$c ${dir $@}; \
	  unzip -d ${dir $@} -o ${dir $@}${SRC}-${TRG}.txt.zip; \
	  cat ${dir $@}*.${SRC} | tr "\t" " " | sed 's/^[[:space:]]*//;s/[[:space:]]*$$//' >> $@.src; \
	  cat ${dir $@}*.${TRG} | tr "\t" " " | sed 's/^[[:space:]]*//;s/[[:space:]]*$$//' >> $@.trg; \
	  rm -f ${dir $@}*.${SRC} ${dir $@}*.${TRG}; \
	  rm -f ${dir $@}*.ids; \
	  rm -f ${dir $@}*.zip; \
	done
	mv $@.src $@
	mv $@.trg ${@:.${SRC}=.${TRG}}

${WORKDIR}/train.${TRG}: ${WORKDIR}/train.${SRC}
	@echo "done!"


MOSESSCRIPTS = /proj/nlpl/software/moses/4.0-65c75ff/moses/scripts
LOAD_MOSES   = module use -a /proj/nlpl/software/modulefiles && module load moses &&
TOKENIZER    = ${MOSESSCRIPTS}/tokenizer
RECASER      = ${MOSESSCRIPTS}/recaser


## check whether we have a UDPipe model for source tokenization
## fallback: moses tokenizer
ifeq (${shell ./udpipe-tokenizer -l ${SRC} -M},)
  SRCTOKENIZER = $(TOKENIZER)/tokenizer.perl -no-escape -threads $(THREADS) -l ${SRC}
else
  SRCTOKENIZER = ./udpipe-tokenizer -l ${SRC}
endif

## check whether we have a UDPipe model for target tokenization
## fallback: moses tokenizer
ifeq (${shell ./udpipe-tokenizer -l ${TRG} -M},)
  TRGTOKENIZER = $(TOKENIZER)/tokenizer.perl -no-escape -threads $(THREADS) -l ${TRG}
else
  TRGTOKENIZER = ./udpipe-tokenizer -l ${TRG}
endif



%.tok.${SRC}: %.${SRC}
	$(LOAD_MOSES) cat $< |\
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	$(TOKENIZER)/replace-unicode-punctuation.perl |\
	$(TOKENIZER)/remove-non-printing-char.perl |\
	$(TOKENIZER)/normalize-punctuation.perl -l ${SRC} |\
	$(SRCTOKENIZER) |\
	$(TOKENIZER)/lowercase.perl |\
	sed 's/  */ /g;s/^ *//g;s/ *$$//g' > $@

%.tok.${TRG}: %.${TRG}
	$(LOAD_MOSES) cat $< |\
	perl -CS -pe 'tr[\x{9}\x{A}\x{D}\x{20}-\x{D7FF}\x{E000}-\x{FFFD}\x{10000}-\x{10FFFF}][]cd;' |\
	$(TOKENIZER)/replace-unicode-punctuation.perl |\
	$(TOKENIZER)/remove-non-printing-char.perl |\
	$(TOKENIZER)/normalize-punctuation.perl -l ${TRG} |\
	$(TRGTOKENIZER) |\
	$(TOKENIZER)/lowercase.perl |\
	sed 's/  */ /g;s/^ *//g;s/ *$$//g' > $@



${WORKDIR}/train.${SRC}-${TRG}: ${WORKDIR}/train.tok.${SRC} ${WORKDIR}/train.tok.${TRG}
	$(MOSESSCRIPTS)/training/clean-corpus-n.perl \
		${<:.${SRC}=} $(SRC) $(TRG) \
		$@ \
		0 100 $@.lines
	${MOSESSCRIPTS}/training/wrappers/make-factor-stem.perl ${STEMSIZE} $@.$(SRC) $@.stem.$(SRC)
	${MOSESSCRIPTS}/training/wrappers/make-factor-stem.perl ${STEMSIZE} $@.$(TRG) $@.stem.$(TRG)
	paste -d\\t $@.stem.$(SRC) $@.stem.$(TRG) |\
        gawk -F\\t 'BEGIN { OFS = " ||| " } { print $$1, $$2; }' >$@
	rm -f $@.$(SRC) $@.stem.$(SRC)
	rm -f $@.$(TRG) $@.stem.$(TRG)



${WORKDIR}/${SRC}-${TRG}.priors: 
	${MAKE} ${WORKDIR}/train.${SRC}-${TRG}
	${EFLOMAL}/align.py \
		-i ${WORKDIR}/train.${SRC}-${TRG} \
		--model 3 \
		-f ${@:.priors=.fwd} -r ${@:.priors=.rev}
	${EFLOMAL}/makepriors.py \
		-i ${WORKDIR}/train.${SRC}-${TRG} \
		-f ${@:.priors=.fwd} -r ${@:.priors=.rev} \
		--priors $@
	rm -f ${WORKDIR}/train.*
	rm -f ${WORKDIR}/README ${WORKDIR}/LICENSE ${WORKDIR}/all.submit
	rm -f ${@:.priors=.fwd}
	rm -f ${@:.priors=.rev}





%.submit:
	mkdir -p ${WORKDIR}
	echo '#!/bin/bash -l' > $@
	echo '#SBATCH -J "${@:.submit=}"' >>$@
	echo '#SBATCH -o ${@:.submit=}.out.%j' >> $@
	echo '#SBATCH -e ${@:.submit=}.err.%j' >> $@
	echo '#SBATCH --mem=${MEM}' >> $@
ifdef EMAIL
	echo '#SBATCH --mail-type=END' >> $@
	echo '#SBATCH --mail-user=${EMAIL}' >> $@
endif
	echo '#SBATCH -n ${THREADS}' >> $@
	echo '#SBATCH -N 1' >> $@
	echo '#SBATCH -p ${QUEUE}' >> $@
	echo '#SBATCH -t ${WALLTIME}:00:00' >> $@
	echo 'module unload efmaral' >> $@
	echo 'module load python-env/3.4.5' >> $@
	echo 'module list' >> $@
	echo 'cd $${SLURM_SUBMIT_DIR:-.}' >> $@
	echo 'pwd' >> $@
	echo 'echo "Starting at `date`"' >> $@
	echo '${MAKE} -j ${THREADS} SRC=${SRC} TRG="${TRG}" ${@:.submit=}' >> $@
	echo 'echo "Finishing at `date`"' >> $@
	sbatch $@
	mv $@ ${WORKDIR}/$@
