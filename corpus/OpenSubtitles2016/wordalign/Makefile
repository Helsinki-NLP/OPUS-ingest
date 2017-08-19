# -*-makefile-*-
#


all:
	${MAKE} all-wordalign


include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.wordalign



## OLD stuff

# fix-enfr:
# 	make SRC=en TRG=fr wordalign


# MEM      = 128g
# WALLTIME = 12
# THREADS  = 2

# %.submit:
# 	echo '#!/bin/bash -l' > $@
# 	echo '#SBATCH -J "${@:.submit=}"' >>$@
# 	echo '#SBATCH -o ${@:.submit=}.out.%j' >> $@
# 	echo '#SBATCH -e ${@:.submit=}.err.%j' >> $@
# 	echo '#SBATCH --mem=${MEM}' >> $@
# 	echo '#SBATCH --mail-type=END' >> $@
# 	echo '#SBATCH --mail-user=jorg.tiedemann@helsinki.fi' >> $@
# 	echo '#SBATCH -n 1' >> $@
# 	echo '#SBATCH -N 1' >> $@
# 	echo '#SBATCH -t ${WALLTIME}:00:00' >> $@
# 	echo 'module purge' >> $@
# 	echo 'module load python-env/3.4.1' >> $@
# 	echo 'module list' >> $@
# 	echo 'cd $${SLURM_SUBMIT_DIR:-.}' >> $@
# 	echo 'pwd' >> $@
# 	echo 'echo "Starting at `date`"' >> $@
# 	echo '${MAKE} -j ${THREADS} ${@:.submit=}' >> $@
# 	echo 'echo "Finishing at `date`"' >> $@
# 	sbatch $@
