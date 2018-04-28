#!/bin/bash -l
#SBATCH -J "idasync-subs"
#SBATCH -o idasync-subs-v2018.out.%j
#SBATCH -e idasync-subs-v2018.err.%j
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

iput_wrapper -c -l $SRCDIR/OpenSubtitles/v2018  -r $TRGDIR/OpenSubtitles/v2018

echo "Finishing at `date`"
