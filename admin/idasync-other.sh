#!/bin/bash -l
#SBATCH -J "idasync-other"
#SBATCH -o idasync-other.out.%j
#SBATCH -e idasync-other.err.%j
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

## some additional data sets (mainly for backup purposes)
## - source data for various corpora
## - incoming data
## - html files from the web server
## - various tools
## - trac snapshots (wiki page)

SRCDIR=/proj/nlpl/data/OPUS
TRGDIR=/ida/sa/clarin/corpora/OPUS


iput_wrapper -c -l $SRCDIR/data  -r $TRGDIR/data

OTHER="img incoming public_html tools trac"

for c in ${OTHER}; do
    if [ -f "$SRCDIR/$c.tar.gz" ]; then
	iput_wrapper -v -c -l $SRCDIR/$c.tar.gz  -r $TRGDIR
    elif [ -d "$SRCDIR/$c" ]; then
	echo "packing $c into OPUS-$c.tar ..."
	tar -C $SRCDIR -czf OPUS-$c.tar.gz $c
	iput_wrapper -c -l OPUS-$c.tar.gz  -r $TRGDIR
	rm -f OPUS-$c.tar.gz
    fi
done

echo "Finishing at `date`"
