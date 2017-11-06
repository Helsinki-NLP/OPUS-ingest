#!/bin/bash -l
#SBATCH -J "idasync"
#SBATCH -o idasync.out.%j
#SBATCH -e idasync.err.%j
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

./idasync-download.sh
./idasync-other-download.sh
./idasync-other.sh

echo "Finishing at `date`"
