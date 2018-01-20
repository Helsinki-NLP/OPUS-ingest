#!/bin/bash
#
# make a clean environment for installing software
# activate with 'source clean-env.sh'
#
# created: Wed Jun 28, 2017
# jorg.tiedemann@helsinki.fi
#
# HISTORY / CHANGES
#
#  21/12/2017 - make nlpl-common the homedir for common lib's and binaries


# remove all preloaded modules
module purge


# make everything writeable for nlpl-members
umask u=rwx,g=rx,o=rx

NLPL_ABEL=/projects/nlpl
ME=$(whoami)

if [ `hostname --domain` == "csc.fi" ]; then
    export NLPL_HOME=/proj/nlpl
    export NLPL_COMMON=$NLPL_HOME/software/nlpl-common
    export PERL5LIB=$NLPL_COMMON/share/perl5:$NLPL_COMMON/lib64/perl5:$NLPL_COMMON/lib/perl5
    module load StdEnv
    mkdir -p $NLPL_COMMON
else
    export NLPL_HOME=$NLPL_ABEL
    export NLPL_COMMON=$NLPL_HOME/software/nlpl-common
    export PERL5LIB=$NLPL_COMMON/share/perl5:$NLPL_COMMON/lib64/perl5:$NLPL_COMMON/lib/perl5
    module load gcc/4.9.1
    module load perlmodules
    mkdir -p $NLPL_COMMON
    eval $(perl -Mlocal::lib=$NLPL_COMMON)
    export PERL_CPANM_HOME=/tmp/cpanm_$USER
    export PERL_MB_OPT="--prefix $NLPL_COMMON"
    export PERL_MM_OPT="PREFIX=$NLPL_COMMON"
fi

# basic environment paths

export PATH=$(echo ${PATH} | sed "s/:[^:]*${ME}[^:]*//g")
export MANPATH=$(echo ${MANPATH} | sed "s/:[^:]*${ME}[^:]*//g")
export LD_LIBRARY_PATH=$(echo ${LD_LIBRARY_PATH} | sed "s/:[^:]*${ME}[^:]*//g")
export LD_INCLUDE_PATH=$(echo ${LD_INCLUDE_PATH} | sed "s/:[^:]*${ME}[^:]*//g")
export LD_RUN_PATH=$(echo ${LD_RUN_PATH} | sed "s/:[^:]*${ME}[^:]*//g")
export USERAPPL=
export BOOST_ROOT=

# make software home the home directory
# for module installation via cpan or pip
export HOME=$NLPL_COMMON


# TODO: anything else that needs to be done?
