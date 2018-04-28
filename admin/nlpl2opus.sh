#!/bin/bash -l
#
# sync between proj/nlpl/corpora/OPUS and proj/OPUS (except releases)
# with parallel rsync's
#
#SBATCH -J nlpl2opus
#SBATCH -p longrun
#SBATCH -t 7-00:00:00
#SBATCH -N 1
#SBATCH -n 8
#SBATCH --mem=4g
#SBATCH --mail-type=END
#SBATCH --mail-user=jorg.tiedemann@helsinki.fi
#SBATCH


OPUSDIR=/proj/OPUS
NLPLDIR=/proj/nlpl
OPUSNLPL=$NLPLDIR/data/OPUS
SUBDIR='admin annotated cwb cwb-ud data download img incoming nlpl public_html tools trac web wordalign wordalign-multi'

cd $OPUSNLPL
echo -n $SUBDIR | parallel -d ' ' rsync --delete -ahv {} ${OPUSDIR}/
cd $OPUSNLPL/corpus
mkdir -p ${OPUSDIR}/corpus

## new: sync files and subdirs from corpus but not symbolic links!

find . -maxdepth 1 -type f -not -name '.*' | sort | parallel rsync --delete -ahv {} ${OPUSDIR}/corpus/
find . -maxdepth 1 -type d -not -name '.*' | sort | parallel rsync --delete -ahv {} ${OPUSDIR}/corpus/

