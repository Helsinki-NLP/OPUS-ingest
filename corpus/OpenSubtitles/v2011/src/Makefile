

TOOLS=/home/joerg/OPUS/tools

all: movies.txt cleanup remove-unreliable move-reliable sub2srt



movies.txt: export_all.tar
	make files
	zcat files/export_all.txt.gz | \
	${TOOLS}/opus/OpenSubtitles2011/sort_files.pl 2>$@.log >$@


cleanup:
	mv files/export_all.txt.gz .
	rm -fr files
	make remove_empty_dir

files: export_all.tar
	tar -xf export_all.tar
	touch files

remove_empty_dir:
	-find . -type d -empty | xargs rmdir
	-find . -type d -empty | xargs rmdir
	-find . -type d -empty | xargs rmdir


## OLD:
# UNRELIABLE = ass bn haw egy hy syr af te tw ty nb

## NEW:
UNRELIABLE = ass haw egy hy syr af te tw ty nb nn no oc sco zh lb

# UNRELIABLE_MISTAGGED = ar ca id el syr

remove-unreliable:
	mkdir -p unreliable
	-mv ${UNRELIABLE} unreliable/


## old stuff: remove unreliable mistagged
## now: move reliable mistagged instead

#	mkdir -p mistagged/unreliable
#	mkdir -p mistagged/unreliable/af
#	mv mistagged/af/2004 mistagged/unreliable/af/
#	( cd mistagged; mv ${UNRELIABLE_MISTAGGED} unreliable/; )



## take care of some mistagged files:
## - treat detected language as "kind of" reliable
## - only for selected languages

RELIABLE = 	az be bg bs ca cs da de en es et fa fr he hr hu is it lt lv \
		mk ms nb nl pl pt ro ru vi

## two special cases: 
## - afrikaans: one file in 2004 is not correct
## - move chinese (not copy) and make hyphens to underscores


move-reliable:
	mkdir -p af
	-cp -R mistagged/af .
	-rm -f af/2004/9680/3778568_1of1.srt.gz
	-( cd mistagged; cp -R ${RELIABLE} ../; )
	-mv mistagged/zh-CN zh_cn
	-mv mistagged/zh-TW zh_tw


#-------------------------------------------
# convert all *.sub-files to srt-format
#-------------------------------------------

sub-files.txt: # movies.txt
	find . -name '*.sub.gz' | \
	sed 's/\.sub\.gz/\.srt\.gz/'> sub-files.txt

SUB2SRT = $(shell cat sub-files.txt)

# try to convert *.sub files to SRT format
# if this fails (output is empty) then 
# check if the original file is actually in SRT format (very simple check)

$(SUB2SRT): %.srt.gz: %.sub.gz
	rm -f $(subst .gz,,$@) $(subst .gz,,$<) $@
	-( gunzip $<; \
	 $(TOOLS)/public/converter/sub2srt $(subst .gz,,$<) $(subst .gz,,$@) )
	if [ -s $(subst .gz,,$@) ]; then \
	  gzip -f $(subst .gz,,$@); \
	else \
	  if grep -q -- '-->' $(subst .gz,,$<); then \
	    cp $(subst .gz,,$<) $(subst .gz,,$@); \
	    gzip -f $(subst .gz,,$@); \
	  else \
	    rm -f $(subst .gz,,$@); \
	  fi; \
	fi
	-( gzip -f $(subst .gz,,$<) )

sub2srt:
	$(MAKE) sub-files.txt
	${MAKE} convert_sub2srt
	rm -f sub-files.txt

convert_sub2srt: $(SUB2SRT)



refresh-sub2srt:
	find . -name '*.sub.gz' | xargs touch
	make sub2srt
