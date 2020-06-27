

VERSION   = ${lastword ${sort ${notdir ${wildcard opus-100-corpus/v*}}}}
LANGPAIRS = ${patsubst %,opus-100-corpus-%-${VERSION}.tar.gz,${notdir ${wildcard opus-100-corpus/${VERSION}/supervised/*}}}


all: publish

opus-100-corpus:
	wget -r -np -nH -R "index.html*" -e robots=off http://data.statmt.org/opus-100-corpus/v1.0/

opus-100-corpus-${VERSION}.tar.gz: opus-100-corpus/${VERSION}
	tar -czf $@ opus-100-corpus

${LANGPAIRS}: opus-100-corpus-%-${VERSION}.tar.gz: opus-100-corpus/${VERSION}/supervised/%
	tar -czf $@ $<

opus-100-corpus-zeroshot-${VERSION}.tar.gz: opus-100-corpus/${VERSION}/zero-shot
	tar -czf $@ $<


publish: ${LANGPAIRS} opus-100-corpus-zeroshot-${VERSION}.tar.gz opus-100-corpus-${VERSION}.tar.gz
	mkdir -p /projappl/nlpl/data/OPUS/opus-100/${VERSION}
	mv *-${VERSION}.tar.gz /projappl/nlpl/data/OPUS/opus-100/${VERSION}
