
# OPUS - a collection of parallel corpora and tools


## Structure of the repository

* `corpus`: corpus data corpus build scripts/makefiles
* `doc`: (rudimentary) documentation
* `eflomal`: recipes for creating eflomal priors
* `incoming`: notes about incoming data sets
* `templates`: template recipes for importing additional data sets
* `tools`: some additional scripts and tools (mostly obsolete)


## Submodules and generated files

* `admin`: administration stuff (submodule OPUS-admin)
* `public_html`: websites and data sample files (submodule OPUS-website)
* `cwb`: Corpus Workbench index files and registeries (generated)



## Pre-requisites

* python packages: opustools, polyglot, fast-mosestokenizer
* Perl modules: OpusTools, Uplug and dependencies
* subalign (for subtitle conversion and alignment)
* recode, tidy, pigz, GNU parallel and other common GNU/Unix tools
* Moses and eflomal (optional for word alignment and phrase table extraction)
* the corpus work bench (CWB) and cwb Perl modules (optional for cwb index generation)


## Documentation

NOTE: The documentation belowe requires serious updates!

* [Creating a new corpus](doc/create-corpus.md)
* [Updating corpora](doc/update-corpus.md)
* [Word alignment](doc/wordalign.md)


## TODO

* make build scripts more readable
* consistent language codes
* get rid of hard-coded paths to tools and make the repo more general and less depending on specific environments (like the one on puhti/CSC)
* better documentation (as always)
* more efficient pre-processing
* consistent pre-processing (UD-based?)
* more frequent corpus updates (Tatoeba, wikimedia and other frequently changing corpora)
* streamline corpus creation, processing and maintenance procedures
* improve integration/updates of OPUS-API and website updates
* ...