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


SRCDIR=/proj/nlpl/data/OPUS/releases
TRGDIR=/ida/sa/clarin/corpora/OPUS/releases

## all sub-corpora (that don't have to be packaged)

CORPORA="OpenSubtitles"

for c in ${CORPORA}; do
    if [ -f "$SRCDIR/$c.tar.gz" ]; then
	iput_wrapper -v -c -l $SRCDIR/$c.tar.gz  -r $TRGDIR
    fi
    if [ -d "$SRCDIR/$c" ]; then
	iput_wrapper -c -l $SRCDIR/$c  -r $TRGDIR/$c
    fi
done

echo "Finishing at `date`"
