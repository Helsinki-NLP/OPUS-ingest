help([[
This module loads various tools for working with OPUS data.
]])
whatis("Version: 0.1")
whatis("URL: https://bitbucket.org/hy-crossNLP/nlpl-opus")
whatis("Description: Tools for OPUS")

-- make sure there is some version of perl
always_load("uplug")

local basepath = "/proj/nlpl/software"
local package = "opus"
local version = "0.1"

-- add binaries and libraries to env

prepend_path("PATH", pathJoin(basepath, "bin"))
prepend_path("PATH", pathJoin(basepath, "opus-tools/0.02/bin"))
prepend_path("PERL5LIB", pathJoin(basepath, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "share/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "opus-tools/0.02/share/perl5"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "lib"))
prepend_path("MANPATH", pathJoin(basepath, "share/man"))
prepend_path("MANPATH", pathJoin(basepath, "opus-tools/0.02/share/man"))
