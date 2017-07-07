
URL   = https://l10n.gnome.org/POT


.PHONY: all
all: l10n.gnome.org/POT lang-ids

l10n.gnome.org/POT:
	wget -r --no-parent -A po ${URL}

lang-ids: l10n.gnome.org/POT
	touch `find l10n.gnome.org/POT/ -name '*.po' | grep -v reduced | grep -v '@' | grep -v 'lo-build' | sed 's/^.*\.\([^.]*\)\.po/\1/' | sort |uniq` en
	rm -f master merged
	touch $@
