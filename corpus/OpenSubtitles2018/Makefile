# -*-makefile-*-

include Makefile.def
include ../Makefile.def


SRC = xx
TRG = xx

HPC_PROJECT = nn9447k

UNRELIABLE = $(patsubst %,unreliable/xml/%,${LANGUAGES})

all: ${UNRELIABLE}
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data

## index with ALL sentence alignments (also alternative ones
## NOTE: this is probably not going to work for CWB as documents are 
##       aligned to several other documents in the same language

cwb-all-index:
	${MAKE} -C xml complete-align-files
	${MAKE} ALGEXT=all.xml.gz cwb-index

cwb-all-index-ud:
	${MAKE} -C xml complete-align-files
	${MAKE} ALGEXT=all.xml.gz cwb-index-ud


move: ${UNRELIABLE}

## move unreliable files
## (language identifier confidence below 0.1)

unreliable/xml/%: xml/%
	find $</ -type f |\
	xargs scripts/move-unreliable.pl
	-find $</ -type d -empty -exec rmdir {} \;
	-find $</ -type d -empty -exec rmdir {} \;
	-find $(subst xml,raw,$<)/ -type d -empty -exec rmdir {} \;
	-find $(subst xml,raw,$<)/ -type d -empty -exec rmdir {} \;


submit:
	echo '#! /bin/bash' > move.sh; \
	echo 'make move' >> move.sh; \
	sbatch  -A ${HPC_PROJECT} -c 1 --mem-per-cpu=2G \
		-t 48:00:00 move.sh



submit-convert:
	echo '#! /bin/bash' > moses-${SRC}-${TRG}.sh; \
	echo 'make /usit/abel/u1/joerg/OPUS/html/OpenSubtitles2016/${SRC}-${TRG}.txt.zip' >> moses-${SRC}-${TRG}.sh; \
	sbatch  -A ${HPC_PROJECT} -c 1 --mem-per-cpu=2G \
		-t 8:00:00 moses-${SRC}-${TRG}.sh

# include som standard OPUS variables/targets

include ../Makefile.process
include ../Makefile.annotate
include ../Makefile.cwb
include ../Makefile.html
include ../Makefile.submit
include ../Makefile.udparse
# include ../Makefile.parse


pack:
	@echo '!!!!!!!! skip this for subtitles because it is too big !!!!!!!!!!'


TMXSH=$(patsubst %.tmx.gz,%.sh,${TMX})
INFOSH=$(patsubst ${CORPUSXML}/%.info,%.sh,${CES_INFO})
LANGSH = $(patsubst %,%.sh,${LANGUAGES})


submit-all-tmx: $(TMXSH)
submit-all-info: $(INFOSH)
submit-all-pack: $(LANGSH)


$(TMXSH):
	if [ ! -e $(patsubst %.sh,%.tmx.gz,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,%.txt.zip,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,%.tmx.gz,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A ${HPC_PROJECT} -c 1 --mem-per-cpu=2G \
		-t 12:00:00 $@; \
	fi

$(INFOSH):
	if [ ! -e $(patsubst %.sh,${CORPUSXML}/%.info,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.txt.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.tmx.info,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A ${HPC_PROJECT} -c 1 --mem-per-cpu=2G \
		-t 2:00:00 $@; \
	fi

$(LANGSH):
	if [ ! -e $(patsubst %.sh,${CORPUSHTML}/%.tar.gz,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSHTML}/%.tar.gz,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSHTML}/%.raw.tar.gz,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A ${HPC_PROJECT} -c 1 --mem-per-cpu=2G \
		-t 12:00:00 $@; \
	fi


