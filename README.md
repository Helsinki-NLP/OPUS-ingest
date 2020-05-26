
# OPUS - a collection of parallel corpora and tools


## Structure of the repository

* `admin/`: administration stuff
* `corpus`: corpus data corpus build scripts/makefiles
* `cwb`: Corpus Workbench index files and registeries
* `doc`: (rudimentary) documentation
* `eflomal`: word alignment models (eflomal priors)
* `img`: project images
* `incoming`: incoming data sets
* `public_html`: websites and data sample files
* `tools`: scripts and tools


## Pre-requisites

* OpusTools
* OpusTools-perl
* Moses
* recode
* tidy


## TODO

* clearly define pre-requisites
* make build scripts more readable
* consistent language codes
* get rid of hard-coded paths to tools and make the repo more general and less depending on specific environments (like the one on puhti/CSC)
* better documentation (as always)
* more efficient pre-processing
* consistent pre-processing (UD-based?)
* more frequent corpus updates (Tatoeba, wikimedia and other frequently changing corpora)
* streamline corpus creation, processing and maintenance procedures
* improve integration/updates of OPUS-API and website updates
