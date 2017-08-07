#!/bin/bash
#
# make a clean environment for installing software
# activate with 'source clean-env.sh'
#
# created: Wed Jun 28, 2017
# jorg.tiedemann@helsinki.fi


# remove all preloaded modules
module purge


# make everything writeable for nlpl-members
umask u=rwx,g=rx,o=rx

# NLPL_ABEL=/projects/nlpl
NLPL_ABEL=/usit/abel/u1/joerg/nlpl


if [ `hostname --domain` == "csc.fi" ]; then
    export NLPL_HOME=/proj/nlpl
    export PATH=/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/appl/bin
    export PERL5LIB=$NLPL_HOME/software/share/perl5:$NLPL_HOME/software/lib64/perl5
    module load StdEnv
else
    export NLPL_HOME=$NLPL_ABEL
    export PATH=/hpc/bin:/opt/gold/bin:/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/ganglia/bin:/opt/ganglia/sbin:/usr/java/latest/bin:/opt/rocks/bin:/opt/rocks/sbin:/cluster/bin
    export PERL5LIB=$NLPL_HOME/software/share/perl5:$NLPL_HOME/software/lib64/perl5:/hpc/lib/perl5:/cluster/lib/perl5
    module load perlmodules
fi

# basic environment paths
export MANPATH=/usr/local/share/man:/usr/share/man/overrides:/usr/share/man:/usr/man
export LD_LIBRARY_PATH=
export USERAPPL=
export BOOST_ROOT=

# make software home the home directory
# for module installation via cpan or pip
export HOME=$NLPL_HOME/software


# TODO: anything else that needs to be done?
