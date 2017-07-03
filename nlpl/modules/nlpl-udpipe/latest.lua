help([[
This module loads UDPipe.
]])
whatis("Version: latest")
whatis("URL: https://github.com/ufal/udpipe.git/")
whatis("Description: UDPipe")

local basepath = "/proj/nlpl/software"
local package = "udpipe"
local version = "latest"

-- add binaries and libraries to env

prepend_path("PATH", pathJoin(basepath, "bin"))
prepend_path("PATH", pathJoin(basepath, package, version, "bin"))

prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "lib"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, package, version, "lib"))

prepend_path("PERL5LIB", pathJoin(basepath, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "share/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, package, version, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, package, version, "share/perl5"))

prepend_path("MANPATH", pathJoin(basepath, "share/man"))
prepend_path("MANPATH", pathJoin(basepath, package, version, "man"))

prepend_path("UDPIPE_MODELS", pathJoin(basepath, package, version, "models"))
