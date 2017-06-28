help([[
This module loads Uplug with various tools for processing parallel corpora.
]])
whatis("Version: 0.3.8dev (latest from bitbucket)")
whatis("URL: https://bitbucket.org/tiedemann/uplug")
whatis("Description: NLP tools for processing parallel corpora")

-- make sure there is some version of perl
always_load("perl")

local basepath = "/proj/nlpl/software"

-- add binaries and libraries to env

prepend_path("PATH", pathJoin(basepath, "bin"))
prepend_path("PERL5LIB", pathJoin(basepath, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "share/perl5"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "lib"))
prepend_path("MANPATH", pathJoin(basepath, "share/man"))
