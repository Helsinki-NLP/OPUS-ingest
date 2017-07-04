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

if [ `hostname --domain` == "csc.fi" ]; then
    export NLPL_HOME=/proj/nlpl
    module load StdEnv
else
    export NLPL_HOME=/projects/nlpl
fi

# basic environment paths
export MANPATH=/usr/local/share/man:/usr/share/man/overrides:/usr/share/man:/usr/man
export PERL5LIB=$NLPL_HOME/software/share/perl5:$NLPL_HOME/software/lib64/perl5
export LD_LIBRARY_PATH=
export USERAPPL=
export PATH=/usr/lib64/qt-3.3/bin:/usr/local/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/appl/bin
export BOOST_ROOT=

# make software home the home directory
# for module installation via cpan or pip
export HOME=$NLPL_HOME/software


# TODO: anything else that needs to be done?
