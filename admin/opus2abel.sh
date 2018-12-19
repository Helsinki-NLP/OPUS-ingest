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

make opus2abel
