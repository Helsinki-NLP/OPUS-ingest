# -*-makefile-*-

include Makefile.def
include ../Makefile.def

UNRELIABLE = $(patsubst %,unreliable/xml/%,${LANGUAGES})

CWB_EXTRA_ARGS = -U time
UDLANGUAGES = eu bg hr cs da nl en et ft fr de el he hi hu \
               id ga it la nb fa pl pt ro sl es sv ta

all: ${UNRELIABLE}
	${MAKE} -C xml all
	${MAKE} html
	${MAKE} cwb-index
	rm -fr data

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
	sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 48:00:00 move.sh



submit-convert:
	echo '#! /bin/bash' > moses-${SRC}-${TRG}.sh; \
	echo 'make /usit/abel/u1/joerg/OPUS/html/OpenSubtitles2016/${SRC}-${TRG}.txt.zip' >> moses-${SRC}-${TRG}.sh; \
	sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 8:00:00 moses-${SRC}-${TRG}.sh

# include som standard OPUS variables/targets

include ../Makefile.annotate
include ../Makefile.parse
include ../Makefile.cwb
include ../Makefile.html
include ../Makefile.udparse


pack:
	@echo '!!!!!!!! skip this for subtitles because it is too big !!!!!!!!!!'


TMXSH=$(patsubst %.tmx.gz,%.sh,${TMX})
INFOSH=$(patsubst ${CORPUSXML}/%.info,%.sh,${CES_INFO})
LANGSH = $(patsubst %,%.sh,${LANGUAGES})


submit-all-tmx: $(TMXSH)
submit-all-info: $(INFOSH)
submit-all-pack: $(LANGSH)

submit-udparse:
	${MAKE} HPC_TIME=72:00 HPC_CORES=16 MAKEARGS='LANGUAGE=${L}' udparse_files.submit
	rm -f udparse_files.submit

udparse-en:
	${MAKE} L=en submit-udparse


$(TMXSH):
	if [ ! -e $(patsubst %.sh,%.tmx.gz,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,%.txt.zip,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,%.tmx.gz,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 6:00:00 $@; \
	fi

$(INFOSH):
	if [ ! -e $(patsubst %.sh,${CORPUSXML}/%.info,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.txt.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.tmx.info,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 2:00:00 $@; \
	fi

$(LANGSH):
	if [ ! -e $(patsubst %.sh,${CORPUSHTML}/%.tar.gz,$@) ]; then \
	  echo '#! /bin/bash' > $@; \
	  echo 'make $(patsubst %.sh,${CORPUSXML}/%.info,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSHTML}/%.tar.gz,$@)' >> $@; \
	  echo 'make $(patsubst %.sh,${CORPUSHTML}/%.raw.tar.gz,$@)' >> $@; \
	  echo 'rm -f $@' >> $@; \
	  sbatch  -A nn9106k -c 1 --mem-per-cpu=2G \
		-t 12:00:00 $@; \
	fi




# copy all data files from abel ....
#

copy-xml-from-abel:
	for l in af ar bg bn br bs ca cs da de el en eo es et eu fa fi fr gl he hi hr hu hy is id it ja ka kk ko lt lv mk ml ms nl no pl pt pt_br ro ru si sk sl sq sr sv ta te th tl tr uk ur vi ze_en ze_zh; do \
	  make SRC=$$l copy-from-abel; \
	done

# special cases: zh_cn zh_tw

copy-chinese-xml-from-abel:
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/zh.tar.gz xml/
	mkdir -p xml/zh_cn raw/zh_cn
	tar -C xml/zh_cn -xzf xml/zh.tar.gz
	rm -f xml/zh.tar.gz
	find  xml/zh_cn -name '*.xml' | xargs -P 8 gzip -f
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/zh-raw.tar.gz raw/
	tar -C raw/zh_cn -xzf raw/zh-raw.tar.gz
	rm -f raw/zh-raw.tar.gz
	find  raw/zh_cn -name '*.xml' | xargs -P 8 gzip -f
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/zt.tar.gz xml/
	mkdir -p xml/zh_tw raw/zh_tw
	tar -C xml/zh_tw -xzf xml/zt.tar.gz
	rm -f xml/zt.tar.gz
	find  xml/zh_tw -name '*.xml' | xargs -P 8 gzip -f
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/zt-raw.tar.gz raw/
	tar -C raw/zh_tw -xzf raw/zt-raw.tar.gz
	rm -f raw/zt-raw.tar.gz
	find  raw/zh_tw -name '*.xml' | xargs -P 8 gzip -f


copy-align-from-abel:
	rsync -av joerg@abel.uio.no:OPUS/corpus/OpenSubtitles2016/xml-work/*.xml.gz xml/
	mkdir -p log/align
	rsync -zav joerg@abel.uio.no:OPUS/corpus/OpenSubtitles2016/xml-work/align-* log/align/
	gzip -f log/align/align-*

copy-alt-from-abel:
	rsync -av joerg@abel.uio.no:OPUS/corpus/OpenSubtitles2016/alt/*.gz alt/
	mkdir -p log/alt
	rsync -zav joerg@abel.uio.no:OPUS/corpus/OpenSubtitles2016/alt/slurm* log/alt/
	gzip -f log/alt/slurm*

copy-html-from-abel:
	rsync -av joerg@abel.uio.no:OPUS/html/OpenSubtitles2016/*.gz /srv/OPUS/html/OpenSubtitles2016/
	rsync -av joerg@abel.uio.no:OPUS/html/OpenSubtitles2016/*.zip ${HOME}/OPUS/html/OpenSubtitles2016/
	rsync -zav joerg@abel.uio.no:OPUS/corpus/OpenSubtitles2016/xml/*.info xml/


copy-from-abel:
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/${SRC}.tar.gz xml/
	mkdir -p xml/${SRC} raw/${SRC}
	tar -C xml/${SRC} -xzf xml/${SRC}.tar.gz
	rm -f xml/${SRC}.tar.gz
	find  xml/${SRC} -name '*.xml' | xargs -P 8 gzip -f
	scp joerg@abel.uio.no:/projects/researchers/researchers01/plison/data/opensubs2016/${SRC}-raw.tar.gz raw/
	tar -C raw/${SRC} -xzf raw/${SRC}-raw.tar.gz
	rm -f raw/${SRC}-raw.tar.gz
	find  raw/${SRC} -name '*.xml' | xargs -P 8 gzip -f
