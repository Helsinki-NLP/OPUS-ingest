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

## only sync raw xml files to abel

rsync -ahv \
    --exclude '**/src/' \
    --exclude '**/raw/' \
    --exclude '**/parsed/' \
    --exclude '**/*align*/' \
    --exclude '**/ud/' \
    --exclude '**/cwb*/' \
    --include '*/' \
    --include '**/xml/*.xml.gz' \
    --include '**/xml/**/*.xml.gz' \
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
