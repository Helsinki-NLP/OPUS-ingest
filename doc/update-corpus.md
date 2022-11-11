
# Update corpus

Some corpora need to be updated from time to time because the source
data is growing, for example the Tatoeba data set. These instructions
refer to the use of update scripts on `puhti` at CSC and data storage
on `allas`. You will need appropriate permissions to run those steps!


## Step 0: Clone OPUS-ingest

This is only necessary if you do not have OPUS-ingest installed and
set up already.  See [create corpus instructions](create-corpus.md)
for more details about setting up the repository and pre-requsites.


## Step 1: retrieve data from allas

Retrieve all the previous corpus data from allas using the
[a_tools](https://docs.csc.fi/data/Allas/using_allas/a_commands/). Here
we use the example of `Tatoeba`:

Configure access to ObjectStorage at allas:

```
module load allas
allas-conf -k
```

Login with your password and select project OPUS-corpus `project_2003093`.

```
cd OPUS-ingest/corpus
make CORPUS=Tatoeba fetch
```

This retrieves all data related to that corpus and this make take
quite some time. Note that this makes a fresh copy of that corpus
directory. The call above moves the old sub-directory to a backup copy
in `OPUS-ingest/corpus/Tatoeba-<date>` (with date being the current date).



## Step 2: Update the corpus

This depends very much on the corpus and the scripts associated with
it. In most cases, you need to adjust the `Makefile.def` file and
possibly also in the corpus-specific makefiles in all
sub-directories. For Tatoeba, for example, it should be sufficient to
run:

```
cd Tatoeba
make all
```

This can be submitted as a job to the SLURM batch job manager using,
e.g., `make HPC_CORES=4 all.submit`.  This will hopefully do all kinds
of updates and will also create a new release. Probably, something
will go wrong and you need to fix issues here and there, running
various steps individually and fix bugs in scriptsand settings.



## Step 3: Refresh data on allas

Upload the new data to allas. ATTENTION: This will overwrite the
existing data files on allas! You may need to refresh the allas
configuration:

```
module load allas
allas-conf -k
```

Then run the update command in the `OPUS-ingest/corpus` directory:

```
cd ..
make CORPUS=Tatoeba store
```


# Known issues

* Tokenization and annotation of new data files may not start without deleting the flags in the log directory that indicate that those steps are already done (hidden files that start with a '.'). Quick fix: delete those files in `log/`.
* Updating will not work for word alignment and phrase-table extraction. This needs to be done from scratch and only works if the old word alignment directories are taken away.
* Updating the CWB index files may not work properly. You may have to remove the files in the corpus-specific sub-directory `Tatoeba/cwb`.