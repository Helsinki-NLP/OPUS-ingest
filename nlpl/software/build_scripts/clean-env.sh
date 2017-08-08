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
ME=$(whoami)

if [ `hostname --domain` == "csc.fi" ]; then
    export NLPL_HOME=/proj/nlpl
    export PERL5LIB=$NLPL_HOME/software/share/perl5:$NLPL_HOME/software/lib64/perl5:$NLPL_HOME/software/lib/perl5
    module load StdEnv
else
    export NLPL_HOME=$NLPL_ABEL
    export PERL5LIB=$NLPL_HOME/software/share/perl5:$NLPL_HOME/software/lib64/perl5:$NLPL_HOME/software/lib/perl5
    module load gcc
    module load perlmodules
    eval $(perl -Mlocal::lib=$NLPL_HOME/software)
    export PERL_CPANM_HOME=$NLPL_HOME/software/.cpanm
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
export HOME=$NLPL_HOME/software


# TODO: anything else that needs to be done?
