# Monolingual sentence indeces

Get all sentences for a given language, de-duplicate and then create an index over all sorted sentences.

* [De-duplicated lists of sorted sentences](index.txt) are available from the OPUS storage
* Sentence and word counts are in the files ending on `*.counts`


## De-duplicate and index


install pre-requisites (on puhti):

```
module load perl
cpanm MCDB_File
```


Create index database for a specific language, for example German:

```
make LANGUAGE=de all
```

This takes all monolingual corpus files from OPUS (need to be in the local OPUSNLPL path) in the selected language (de in the example above), de-duplicates and merges all of them and puts them into a database file (`de.sent2id.db` in the example above). This database provides a lookup table for all sentences as key and a unique ID as value.


To run this on puhti as a SLURM job:

```
make LANGUAGE=de job-puhti
```

There is also a script to create DB files for looking up sentences in a selected language (e.g. German) by their index. You can create them by running

```
make de.id2sent.db
```

Testing the lookup function is possible by running the `test_index.pl` script:

```
./test_index.pl de.id2sent.db 10000 5
```

This will print 5 sentences starting with index 10000. The index arguments are optional and default is starting at index 100 and printing 10 sentences.

Ready-made index files and de-duplicated data sets are available from allas. Download links are listed in [index.txt](index.txt).

The plain text files with de-duplicated sentences can also directly be used by the Berkeley RECNO database. For testing this, you need to unpack the `*.dedup.gz` of your choice and run `test_recno_index.pl` in the same way as the other test script.

```
gunzip de.dedup.gz
./test_recno_index.pl de.id2sent.db 10000 5
```



## Implementation

* based on https://github.com/gstrauss/mcdb
* Perl interface: https://metacpan.org/pod/MCDB_File
* python interface for mcdb: https://github.com/gstrauss/mcdb/blob/master/contrib/python-mcdb


alternative: cdb (but there is a 4gb file limit - so, doesn't work for big corpora)

* https://metacpan.org/pod/CDB_File
* https://pypi.org/project/python-cdb/
* https://pypi.org/project/pycdb/
* https://pypi.org/project/cdbx/ (http://opensource.perlig.de/cdbx/)
