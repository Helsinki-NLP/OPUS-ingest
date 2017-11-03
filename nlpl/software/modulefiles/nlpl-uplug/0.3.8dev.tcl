#%Module1.0##################################################################
#

set basepath    %%NLP_SOFTWARE%%

# set appname    uplug
set appname    [lrange [split [module-info name] {/-}] 1 1]
set appversion [lrange [split [module-info name] {/}] 1 1]
set apphome    $basepath/modulefiles/$appname/$appversion

set package     $appname
set version     $appversion


## URL of application homepage:
set appurl     https://bitbucket.org/tiedemann/uplug

## Short description of package:
module-whatis   "NLP tools for processing parallel corpora"


## Load any needed modules:
module load gcc/4.9.1
module load perlmodules

## Modify as needed, removing any variables not needed.  Non-path variables
## can be set with "setenv VARIABLE value".
prepend-path    PATH           $basepath/bin
prepend-path    PATH           $basepath/$package/$version/bin

prepend-path    LD_LIBRARY_PATH   $basepath/lib
prepend-path    LD_LIBRARY_PATH   $basepath/$package/$version/lib


prepend-path    PERL5LIB          $basepath/lib64/perl5
prepend-path    PERL5LIB          $basepath/share/perl5
prepend-path    PERL5LIB          $basepath/$package/$version/lib64/perl5
prepend-path    PERL5LIB          $basepath/$package/$version/share/perl5

prepend-path    MANPATH           $basepath/share/man
prepend-path    MANPATH           $basepath/$package/$version/man


## These lines are for logging module usage.  Don't remove them:
set modulefile [lrange [split [module-info name] {/}] 0 0]
set version    [lrange [split [module-info name] {/}] 1 1]
set action     [module-info mode]
system logger -t module -p local6.info DATE=\$(date +%FT%T),USER=\$USER,JOB=\$\{SLURM_JOB_ID=NOJOB\},APP=$modulefile,VERSION=$version,ACTION=$action
## Don't remove this line!  For some reason, it has to be here...

