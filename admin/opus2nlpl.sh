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
OPUSNLPL=$NLPLDIR/corpora/OPUS
SUBDIR='admin annotated cwb cwb-ud data download img incoming public_html tools trac udwordalign wordalign wordalign-multi'

cd $OPUSDIR
echo -n $SUBDIR | parallel -d ' ' rsync --delete -ahv {} ${OPUSNLPL}/
cd $OPUSDIR/corpus
mkdir -p ${OPUSNLPL}/corpus
ls -1 | parallel rsync --delete -ahv {} ${OPUSNLPL}/corpus/
