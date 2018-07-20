#
# usage:
#

# CHAR=iso-8859-1
CHAR=utf-8

#--------------------------
# LA codes:
#
# 33 - frensh
# 34 - spanish
# 46 - swedish
# 49 - german
# 81 - japanese


UNJAR=jar xf


all:
	make LA=jp ID=81 decompress
	make LA=de ID=49 decompress
	make LA=sv ID=46 decompress
	make LA=fr ID=33 decompress
	make LA=es ID=34 decompress
	make LA=en ID=01 decompress
	make cleanUS

# remove English files from translation directories

cleanUS:
	for l in jp de sv fr es; do \
		find $$l -exec grep -l 'content="en-US"' {} \; |\
		xargs rm -f; \
	done


decompress: ${LA}

${LA}:
	mkdir ${LA}
	mv *${ID}*.tgz ${LA}/
	( cd ${LA};tar xzf *.tgz )
	( cd ${LA}; unzip \*.zip; )
	( cd ${LA}; find . -name '*.jar' -exec ${UNJAR} {} \; )
	mv ${LA}/*.tgz .
	rm -fr ${LA}/picture
	rm -fr ${LA}/*.idx
	rm ${LA}/*.*

jp:
	mkdir jp
	mv *${ID}*.zip jp/
	( cd jp;unzip \*.zip )
	mv jp/helpcontent_*.zip .
	( cd jp; unzip \*.zip; )
	( cd jp; find . -name '*.jar' -exec ${UNJAR} {} \; )
	rm -fr jp/picture
	rm -fr jp/*.idx
	rm jp/*.*

