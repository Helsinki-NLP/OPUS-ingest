


# TODO

* more systematic names (that do not clash with other container names)
* rename work, OPUS-WMT, ... (into something like OPUS-work-xxxx)


problematic ones:

* rsnapshots: crawls with many files
* WMTxx: big and a lot of unnecessary models/data files
* FoTran: some permission problems
* wordalign: big (do we still need those GIZA++ alignments?)
* work: what is this?
* corpus



# Where are all the data on allas?

Data can be stored in different ways on allas.
For more information on data migration, see https://docs.csc.fi/#data/Allas/migration_tutorial/
Depending on the data, different ways of storing them is preferred, Here are the options used for OPUS:

* pakckaged in compressed archives using the a-tools
* synced directories using `rclone -l sync`
* released data copied with swift (nlpl-OPUS releases)

Packaged data is good for storing static data.
Syncing directories is good for data that might change incrementally.

Problem: some data sets are to big to be synced (file number limits in allas buckets). This applies especially to corpus directories.


## Corpus files

All corpora are copied to containers with the name `OPUS-corpus-corpusname` (with corpusname replaced by the name of the corpus). Corpora with < 10,000 files in the corpus directory (in total) are copied using `rclone sync` and all other corpora are uploaded using `a-put` (besides of OpenSubtitles?).


## Synced directories

Most synced directories are in the container called `proj-OPUS`. Cloned using the command

```
rclone --progress -l sync dirname allas:proj-OPUS/dirname
```

Use `rclone -l sync allas:work/dirname dirname` to retrieve the data. Of course, replace `dirname` with the dir name that you want to copy. Note that rclone completely overwrites the destination directory. The following directories are synced:

* admin
* API
* doc
* img
* eflomal
* cwb-ud

* running: cwb



* OLD: in container `work`

* admin
* API
* cwb
* cwb-restricted
* cwb-ud
* doc
* eflomal
* img


## Compressed packages

* Compressed packages are in the container `OPUS`
* list packages using `a-list OPUS`
* upload with `a-put -b OPUS <path>`


The directories that are packaged there are currently:

* BACKUP
* download
* public_html_old
* public_html
* incoming
* wordalign-multi
* wordalign
* tools
* API		(also synced)
* admin		(also synced)
* eflomal	(also synced)



## WMT

WMT data, scripts, models are stored in `OPUS-WMT`

* WMT14
* WMT16
* WMT17
* WMT18
* WMT19

NOTE: some files are missing because of access permissions.


## fiskmö

* released files are on allas in the container `fiskmo` and 
* development data files are in `proj-fiskmo`
* SVENFI with access keys for OPUS repositories


## CrossNLP

Data stored in project_2000309

* research data from `/wrk/tiedeman` in container `crossnlp` (but also in `crossnlp-work`?)
* project data from /proj/OPUS/work are in `crossnlp-OPUS`

