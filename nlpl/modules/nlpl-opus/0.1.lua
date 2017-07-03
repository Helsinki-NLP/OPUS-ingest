help([[
This module loads various tools for working with OPUS data.
]])
whatis("Version: 0.1")
whatis("URL: https://bitbucket.org/hy-crossNLP/nlpl-opus")
whatis("Description: Tools for OPUS")

-- make sure there is some version of perl
always_load("nlpl-uplug", "nlpl-cwb")

local basepath = "/proj/nlpl/software"
local package = "nlpl-opus"
local version = "0.1"

-- add binaries and libraries to env

prepend_path("PATH", pathJoin(basepath, "bin"))
prepend_path("PATH", pathJoin(basepath, "opus-tools/latest/bin"))
prepend_path("PATH", pathJoin(basepath, "pdf2xml/latest/bin"))
prepend_path("PATH", pathJoin(basepath, "letsmt/dev/bin"))

prepend_path("PERL5LIB", pathJoin(basepath, "lib64/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "share/perl5"))

prepend_path("PERL5LIB", pathJoin(basepath, "opus-tools/latest/share/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "pdf2xml/latest/share/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "letsmt/dev/share/perl5"))
prepend_path("PERL5LIB", pathJoin(basepath, "letsmt/dev/lib64/perl5"))

prepend_path("PYTHONPATH", pathJoin(basepath, "letsmt/dev/lib/python2.6/site-packages"))

prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "lib"))
prepend_path("LD_LIBRARY_PATH", pathJoin(basepath, "letsmt/dev/lib"))

prepend_path("MANPATH", pathJoin(basepath, "share/man"))
prepend_path("MANPATH", pathJoin(basepath, "opus-tools/latest/share/man"))
prepend_path("MANPATH", pathJoin(basepath, "pdf2xml/latest/share/man"))
prepend_path("MANPATH", pathJoin(basepath, "letsmt/dev/share/man"))
