


all: ../LICENSE mizan.en mizan.fa
	${MAKE} cleanup

cleanup:
	rm -fr mizan Mizan

mizan.fa: mizan
	cp mizan/mizan_fa.txt mizan.fa

mizan.en: mizan
	cp mizan/mizan_en.txt mizan.en

../LICENSE: Mizan
	mv Mizan/LICENSE.md ../LICENSE


INTERMEDIATE: Mizan mizan

Mizan:
	git clone https://github.com/omidkashefi/Mizan.git

mizan: Mizan
	unzip Mizan/mizan.zip
