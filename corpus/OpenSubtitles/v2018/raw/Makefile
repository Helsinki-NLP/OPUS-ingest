# -*-makefile-*-
#

include ../../Makefile.def
include ../Makefile.def
include ../../Makefile.submit


# all language sub directories
#
# LANGUAGES = $(sort $(wildcard ??) $(wildcard ??_??))

# pre-defined list of languages
# (useful if they do not exist here yet)

LANGUAGES=af ar bg bn br bs ca cs da de el en eo es et eu fa fi fr gl he hi hr hu hy is id it ja ka kk ko lt lv mk ml ms nl no pl pt pt_br ro ru si sk sl sq sr sv ta te th tl tr uk ur vi ze_zh ze_en zh_cn zh_tw

# division into different language sets
# (require different amount of walltime for each)
BIGLANG   = ar bg cs el en es fr he hr hu it nl pl pt pt_br ro ru sr tr
MEDLANG   = ar bs da de et fi sv sk sl zh_cn
SMALLLANG = af bn br ca eo eu fa gl hi hy is id ja ka kk ko lt lv mk ml ms no si sq ta te th tl uk ur vi ze_en ze_zh zh_tw



all: ${LANGUAGES}

# move files from abel from Pierre's workdir

${LANGUAGES}:
	mkdir -p $@
	rsync ${ABEL_USER}@${ABEL}:${ABEL_TARDIR}/$@-raw.tar.gz $@/
	tar -C $@ --skip-old-files -xvzf $@/$@-raw.tar.gz
	rm -f $@/$@-raw.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f


## zh_tw has different name on abel (zt)
## zh_cn is just zh on abel

zh_tw:
	mkdir -p $@
	rsync ${ABEL_USER}@${ABEL}:${ABEL_TARDIR}/zt-raw.tar.gz $@/$@-raw.tar.gz
	tar -C $@ --skip-old-files -xvzf $@/$@-raw.tar.gz
	rm -f $@/$@-raw.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f

zh_cn:
	mkdir -p $@
	rsync ${ABEL_USER}@${ABEL}:${ABEL_TARDIR}/zh-raw.tar.gz $@/$@-raw.tar.gz
	tar -C $@ --skip-old-files -xvzf $@/$@-raw.tar.gz
	rm -f $@/$@-raw.tar.gz
	find $@ -name '*.xml' | xargs -P 8 gzip -f


copy:
	${MAKE} HPC_MEM=4g HPC_TIME=72:00 all.submit




# ## OLD: move to workdir

# ${HOME}/work/OpenSubtitles2016/raw/%:
# 	mkdir -p ${HOME}/work/OpenSubtitles2016/raw/${notdir $@}
# 	../scripts/copy_raw_files.pl ${HOME}/work/OpenSubtitles2016 \
# 		${notdir $@}
# 	tar -C $@ --skip-old-files -xvzf $@/*.tar.gz
# 	rm -f $@/*.tar.gz
# 	find $@ -name '*.xml' | xargs -P 8 gzip -f

# #	find $@ -name '*.xml' | xargs -P $$(( ${CORES}/2  )) gzip -f


# ${LANGUAGES}: %: ${HOME}/work/OpenSubtitles2016/raw/%
# 	rm -f $@
# 	ln -s $< .


# submit:
# 	echo '#! /bin/bash' > copy.sh; \
# 	echo 'make all' >> copy.sh; \
# 	sbatch  -A nn9447k -c 1 --mem-per-cpu=2G \
# 		-t 48:00:00 copy.sh; \

