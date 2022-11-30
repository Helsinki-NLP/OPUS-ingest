

# Create sentence indexes


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



## Implementation

* based on https://github.com/gstrauss/mcdb
* Perl interface: https://metacpan.org/pod/MCDB_File
* python interface for mcdb: https://github.com/gstrauss/mcdb (https://github.com/gstrauss/mcdb/blob/master/contrib/python-mcdb/sample.py)


alterantive: cdb (but there is a 4gb file limit - so, doesn't work for big corpora)

* https://pypi.org/project/python-cdb/
* https://pypi.org/project/pycdb/
* https://pypi.org/project/cdbx/ (http://opensource.perlig.de/cdbx/)
