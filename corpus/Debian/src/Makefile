
URL   = http://i18n.debian.org/material/po


.PHONY: all
all: i18n.debian.org/material/po lang-ids

i18n.debian.org/material/po: 	i18n.debian.org/material/po/testing \
				i18n.debian.org/material/po/unstable

i18n.debian.org/material/po/testing:
	wget -r --no-parent -A '*.gz' ${URL}/testing

i18n.debian.org/material/po/unstable:
	wget -r --no-parent -A '*.gz' ${URL}/unstable

lang-ids: i18n.debian.org/material/po
	touch `find $</ -name '*.po.gz' | grep -v reduced | grep -v '@' | sed 's/^[^_]*\_[^_]*\_\(.*\)\.po.gz/\1/' | egrep '^(..|.._..)$$' | sort |uniq` en
	touch $@



# 	rm -f master merged