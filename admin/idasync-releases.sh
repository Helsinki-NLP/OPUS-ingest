#!/bin/bash -l
#SBATCH -J "idasync-releases"
#SBATCH -o idasync-releases.out.%j
#SBATCH -e idasync-releases.err.%j
#SBATCH --mem=4g
#SBATCH --mail-type=END
#SBATCH --mail-user=jorg.tiedemann@helsinki.fi
#SBATCH -n 1
#SBATCH -N 1
#SBATCH -p longrun
#SBATCH -t 7-00:00:00

module purge
module load irods
module list
cd ${SLURM_SUBMIT_DIR:-.}
pwd
echo "Starting at `date`"


SRCDIR=/proj/nlpl/data/OPUS/releases
TRGDIR=/ida/sa/clarin/corpora/OPUS/releases

## all sub-corpora (that don't have to be packaged)

CORPORA="Books DGT DOGC \
         EMEA EUbookshop Europarl \
         giga-fren hrenWaC JRC-Acquis \
         MBS MontenegrinSubs MPC1 MultiUN \
         News-Commentary \
         OfisPublik OpenOffice \
         RF SETIMES SPC Tanzil TED2013 TedTalks TEP \
         UN Wikipedia WikiSource WMT-News XhosaNavy"


## leave "OpenSubtitles" as a separate job
## because it is so big (idasync-opensubs.sh)



## sub-corpora with many files that need to be packaged
## (because they have too many files)

TARCORPORA="ECB EUconst GlobalVoices GNOME \
            KDE4 KDEdoc \
            Tatoeba PHP Ubuntu"

for c in ${TARCORPORA}; do
    if [ -f "$SRCDIR/$c.tar.gz" ]; then
	iput_wrapper -v -c -l $SRCDIR/$c.tar.gz  -r $TRGDIR
    fi
    echo "packing $c into $c.all.tar ..."
    if [ -d "$SRCDIR/$c" ]; then
	tar -C $SRCDIR -cf $c.all.tar $c
	iput_wrapper -c -l $c.all.tar  -r $TRGDIR
	rm -f $c.all.tar
    fi
done

for c in ${CORPORA}; do
    if [ -f "$SRCDIR/$c.tar.gz" ]; then
	iput_wrapper -v -c -l $SRCDIR/$c.tar.gz  -r $TRGDIR
    fi
    if [ -d "$SRCDIR/$c" ]; then
	iput_wrapper -c -l $SRCDIR/$c  -r $TRGDIR/$c
    fi
done

echo "Finishing at `date`"
