
WORKDIR     = /wrk/tiedeman
CSC_PROJECT = project_2000661
CONTAINER   = $(subst /,-,$(patsubst /%,%,${shell pwd}))


SYNC_DIRS    = admin API doc img eflomal cwb-ud
PACK_DIRS    = BACKUP download public_html_old public_html incoming wordalign-multi wordalign tools
WMT_DIRS     = WMT14 WMT16 WMT17 WMT18 WMT19


SYNC_DIRS_DONE    = $(patsubst %,${WORKDIR}/${CSC_PROJECT}/%.allas,${SYNC_DIRS})
PACK_DIRS_DONE    = $(patsubst %,${WORKDIR}/${CSC_PROJECT}/%.allas,${PACK_DIRS})
WMT_DIRS_DONE     = $(patsubst %,${WORKDIR}/${CSC_PROJECT}/%.allas,${WMT_DIRS})
CWB_DIRS_DONE     = ${WORKDIR}/${CSC_PROJECT}/cwb.allas

all: ${SYNC_DIRS_DONE} ${PACK_DIRS_DONE} ${WMT_DIRS_DONE}

sync-dirs: ${SYNC_DIRS_DONE}
pack-dirs: ${PACK_DIRS_DONE}
pack-cwb: ${WORKDIR}/${CSC_PROJECT}/cwb.allas

${SYNC_DIRS_DONE}: ${WORKDIR}/${CSC_PROJECT}/%.allas: %
	rclone --progress -l sync $< allas:proj-OPUS/$<
	mkdir -p $(dir $@)
	touch $@


${PACK_DIRS_DONE}: ${WORKDIR}/${CSC_PROJECT}/%.allas: %
	a-put --skip-filelist -p ${CSC_PROJECT} -b ${CONTAINER} $<
	mkdir -p $(dir $@)
	touch $@

${WORKDIR}/${CSC_PROJECT}/cwb.allas: cwb/data cwb/reg
	a-put --skip-filelist -p ${CSC_PROJECT} -b ${CONTAINER}-cwb-reg ${wildcard cwb/reg/*}
	a-put --skip-filelist -p ${CSC_PROJECT} -b ${CONTAINER}-cwb-data ${wildcard cwb/data/*}
	mkdir -p $(dir $@)
	touch $@


${WMT_DIRS_DONE}: ${WORKDIR}/${CSC_PROJECT}/%.allas: %
	a-put --skip-filelist -p ${CSC_PROJECT} -b ${CONTAINER} $<
	mkdir -p $(dir $@)
	touch $@