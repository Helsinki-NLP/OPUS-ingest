# NLPL Activity: Create a new home for OPUS #

The goal of this activity is to set up OPUS inside of a proper IT framework and to provide tools and services for working with the data.

* Temporary OPUS server on CSC: http://vm1017.kaj.pouta.csc.fi
* [Admin](Admin.md)
* [Using ObjectStorage](ObjectStorage.md)
* [Setting up LetsMT repository](LetsMT.md) (mostly obsolete)
* [To-do and wish-list](ToDo.md)

## Software and Modules

OPUS-related software and modules are available on taito:

* look into `/proj/nlpl/software/`
* modules: nlpl-uplug and nlpl-opus

~~~~
module use -a /proj/nlpl/modules
module load nlpl-opus
~~~~

You can try running `opus-read` to look at specific bitexts

~~~~
# aligned English-French subtitles
opus-read OpenSubtitles2016/en-fr | less

# more info about opus-read
man opus-read
~~~~

More information about using modules (is this the package we use on taito?)
 * http://modules.sourceforge.net
 * https://modules.readthedocs.io/en/stable/INSTALL.html
 * https://modules.readthedocs.io/en/stable/module.html
 * http://modules.sourceforge.net/tcl/modulefile.html
 * http://modules.sourceforge.net/c/modulefile.html

## Data

* All OPUS data sets are now available on taito: `/proj/nlpl/corpora/OPUS`. 
* The most important sub-directory is `/proj/nlpl/corpora/OPUS/corpus`. 
* More (but slightly outdated) information about the corpus structure, data formats is available on the OPUS-Wiki: http://vm1017.kaj.pouta.csc.fi/trac
* We have a temporary server on CSC: http://vm1017.kaj.pouta.csc.fi/


# Tasks

## Data-related tasks

* move data to project directory on CSC (what is a good permanent space?)
* corpus creation/processing environment on CSC
* regular syncing to Abel
* improved (consistent) pre-processing pipelines
* cleanup corpus creation procedures

Some statistics:

* ca 16 million files in corpus/
* 1.4 TB  corpus
* 1.4 TB  html
* 150 GB  src-data
* 106 GB  cwb
* 690 GB  wordalign


## Virtual Web Server ##

* access to data and on-line services
* user interface, documentation and info point

## Tools and Services ##

* download via FIN-CLARIN?
* corpus-search (via FIN-CLARIN?); I need to keep my multilingual interfaces ...
* word alignment database (mySQL)

## Documentation ##

* finding and downloading data from OPUS
* web interfaces
* contributing
* F.A.Q.'s

## Admin F.A.Q. ##

 * Can I run cronjobs on taito? Yes it's possible. One needs to remember which server it's installed, so please use taito-login3.csc.fi or taito-login4.csc.fi instead of generic taito.csc.fi alias.
 * Can I run cronjobs on abel? Yes. Set them from the login nodes with crontab -e
 * How do I use the cPouta service on CSC? check the user guide at https://research.csc.fi/pouta-user-guide
 * Can I create a disk image of my virtual server on CSC? Yes! Check https://research.csc.fi/pouta-adding-images