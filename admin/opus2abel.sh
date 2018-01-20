#!/bin/bash -l
#
# sync some OPUS data between taito and abel
# with parallel rsync's
#
#SBATCH -J opus2abel
#SBATCH -t 3-00:00:00
#SBATCH -N 1
#SBATCH -n 1
#SBATCH --mem=4g
#SBATCH --mail-type=END
#SBATCH --mail-user=jorg.tiedemann@helsinki.fi
#SBATCH

OPUS_TAITO=/proj/nlpl/data/OPUS
OPUS_ABEL=joerg@abel.uio.no:/projects/nlpl/data/OPUS

cd $OPUS_TAITO


## include sent-align files from download
## NEW 2017-12-09: include also raw-xml-file downloads

rsync -ahv --delete \
    --exclude '**/.*' \
    --exclude '**/DOGC-new/' \
    --exclude '**/Europarl3/' \
    --exclude '**/OpenSubtitles2011/' \
    --exclude '**/OpenSubtitles2012/' \
    --exclude '**/OpenSubtitles2013/' \
    --exclude '**/OpenSubtitles2015/' \
    --exclude '**/OpenSubtitles2016/' \
    --include '**/' \
    --include '**/*.xml.gz' \
    --include '**/*.raw.tar.gz' \
    --exclude '*' \
    download ${OPUS_ABEL}/


## NEW 2017-12-09: don't sync raw/xml dir's
##                 (too many files)

exit



## only sync raw xml files to abel

rsync -ahv --delete \
    --exclude '**/.*' \
    --exclude '**/dic/' \
    --exclude '**/src/' \
    --exclude '**/log/' \
    --exclude '**/data/' \
    --exclude '**/scripts/' \
    --exclude '**/parsed/' \
    --exclude '**/*align*/' \
    --exclude '**/ud/' \
    --exclude '**/cwb*/' \
    --exclude '**/xml/*/' \
    --exclude '**/DOGC-new/' \
    --exclude '**/Europarl3/' \
    --exclude '**/OpenSubtitles2011/' \
    --exclude '**/OpenSubtitles2012/' \
    --exclude '**/OpenSubtitles2013/' \
    --exclude '**/OpenSubtitles2015/' \
    --exclude '**/OpenSubtitles2016/' \
    --exclude '**/ParCor/' \
    --include '**/' \
    --include '**/raw/*.xml.gz' \
    --include '**/xml/*.xml.gz' \
    --include '**/raw/**/*.xml.gz' \
    --exclude '*' \
    corpus ${OPUS_ABEL}/




# CORPORA="Books DGT DOGC EMEA EUbookshop \
#     Europarl2 Europarl3-clean Europarl \
#     hrenWaC JRC-Acquis \
#     MBS MultiUN News-Commentary11 OfisPublik OpenOffice3 \
#     OpenSubtitles \
#     RF Tanzil TED2013 TedTalks TEP \
#     UN Wikipedia WikiSource WMT-News \
#     ECB EUconst GlobalVoices GNOME KDE4 KDEdoc \
#     Tatoeba PHP Ubuntu"

# ## sync selected corpora

# echo -n $CORPORA | parallel -d ' ' \
# rsync --delete --delete-excluded \
#     --exclude '*' \
#     --include '*/raw/*.xml.gz' \
#     -ahv {} ${OPUS_ABEL}/corpus/


## sync all data in corpus
#
# ls -1 | parallel rsync --delete -ahv {} ${OPUSNLPL}/corpus/
