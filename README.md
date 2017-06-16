# NLPL Activity: Create a new home for OPUS #

The goal of this activity is to setup OPUS inside of a proper IT framework.

## Data ##

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