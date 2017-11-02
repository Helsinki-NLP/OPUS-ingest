#!/bin/bash -l
#
# sync between /proj/OPUS and proj/nlpl/corpora/OPUS
# with parallel rsync's
#
#SBATCH -J opus2nlpl
#SBATCH -t 3-00:00:00
#SBATCH -N 1
#SBATCH -n 8
#SBATCH --mem=4g
#SBATCH --mail-type=END
#SBATCH --mail-user=jorg.tiedemann@helsinki.fi
#SBATCH


OPUSDIR=/proj/OPUS
NLPLDIR=/proj/nlpl
OPUSNLPL=$NLPLDIR/data/OPUS
SUBDIR='admin annotated cwb cwb-ud data download img incoming public_html tools trac wordalign wordalign-multi'

cd $OPUSDIR
echo -n $SUBDIR | parallel -d ' ' rsync --delete -ahv {} ${OPUSNLPL}/
cd $OPUSDIR/corpus
mkdir -p ${OPUSNLPL}/corpus

## new: sync files and subdirs from corpus but not symbolic links!

find . -maxdepth 1 -type f -not -name '.*' | sort | parallel rsync --delete -ahv {} ${OPUSNLPL}/corpus/
find . -maxdepth 1 -type d -not -name '.*' | sort | parallel rsync --delete -ahv {} ${OPUSNLPL}/corpus/

## old: would also include symbolic links
#
# ls -1 | parallel rsync --delete -ahv {} ${OPUSNLPL}/corpus/
