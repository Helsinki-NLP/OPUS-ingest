#!/bin/bash -l
#SBATCH -J "idasync-subs"
#SBATCH -o idasync-subs.out.%j
#SBATCH -e idasync-subs.err.%j
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

## uncomment if you want to sync the whole download dir (this takes forever!)
# iput_wrapper -c -l /proj/nlpl/corpora/OPUS/download  -r /ida/sa/clarin/corpora/OPUS


SRCDIR=/proj/nlpl/corpora/OPUS/download
TRGDIR=/ida/sa/clarin/corpora/OPUS

## all sub-corpora (that don't have to be packaged)

CORPORA="OpenSubtitles2016 OpenSubtitles2018"

for c in ${CORPORA}; do
    if [ -f "$SRCDIR/$c.tar.gz" ]; then
	iput_wrapper -v -c -l $SRCDIR/$c.tar.gz  -r $TRGDIR
    fi
    if [ -d "$SRCDIR/$c" ]; then
	iput_wrapper -c -l $SRCDIR/$c  -r $TRGDIR/$c
    fi
done

echo "Finishing at `date`"
