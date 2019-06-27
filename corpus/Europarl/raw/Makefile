
include ../../Makefile.def
include ../Makefile.def


.PHONY: all
all: create-align-files

include ../../Makefile.align


### OLD ..........

# LINKFILES = $(patsubst %,%.xml.gz,$(wildcard ??-??))

# SRC=xx
# TRG=yy

# all: ${LINKFILES}

# ${LINKFILES}:
# 	make 	SRC=$(word 1,$(subst -, ,$(subst ., ,$@))) \
# 		TRG=$(word 2,$(subst -, ,$(subst ., ,$@))) $@
# 	rm -fr  $(firstword $(subst ., ,$@))

# this needs to be here at the end to override the previous target ...

# include ../../Makefile.align




# ## below is a small fix to have sorted alignment files
# ## (sorted by filenames - this is important for CWB!!!)
# ## this is to fix the current version but in newer builds
# ## this shouldn't be a problem anymore

# SORTFILES = $(patsubst %.xml.gz,%.old.gz,$(wildcard ??-??.xml.gz))

# .PHONY: sort-align
# sort-align: ${SORTFILES}

# ${SORTFILES}: %.old.gz: %.xml.gz
# 	mv $< $@
# 	zcat $@ | ../scripts/sort-align-files.pl | gzip -c > $<
# 	touch $@

