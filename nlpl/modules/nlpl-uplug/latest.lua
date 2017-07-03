help([[
This module loads Uplug with various tools for processing parallel corpora.
]])
whatis("Version: latest")
whatis("URL: https://bitbucket.org/tiedemann/uplug")
whatis("Description: NLP tools for processing parallel corpora")

local basepath = "/proj/nlpl/software"
local package = "uplug"
local version = "latest"

-- add binaries and libraries to env

prepend_path("PATH", pathJoin(basepath, "bin"))
prepend_path("PATH", pathJoin(basepath, package, version, "bin"))

prepend_path("PERL5LIB", pathJoin(basepath, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "share/perl5"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "lib"))

prepend_path("PERL5LIB", pathJoin(basepath, package, version, "share/perl5"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, package, version, "lib"))

prepend_path("MANPATH", pathJoin(basepath, "share/man"))
