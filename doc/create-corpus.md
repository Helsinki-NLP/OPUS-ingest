
# Create a new corpus

There are a few templates for creating a new corpus to cover the most common cases, for example, to create a data set from given parallel text files or data sets from a collection of TMX files. Templates are given in sub-directories `OPUS/corpus/template-*`.


## Step 0: Clone OPUS

Retrieve the latest OPUS repository from github in some dedicated work directory (if not done already):

```
cd /scratch/project_200066
git clone git@github.com:Helsinki-NLP/OPUS.git
```


## Step 1: Prepare the new corpus

Make a copy of the appropriate template directory, for example, the TMX template. Give the OPUS a unciye, short and desriptive name. In this example we simply call the new corpus `MyCorpus`

```
cp OPUS/corpus
cp -R template-tmx MyCorpus
```

Edit the information in the `MyCorpus/Makefile.def` in that new corpus directory. Specify the license, copyrights and any kind of information that should appear on the corpus website (including acknowledgements, links etc). Make sure that the file still stays a valid GNU Makefile and that information can be inserted in the website templates using some simple sed commands (no single quotes and other special characters that may break it - this is a bit unpredicatable - check `OPUS/corpus/Makefile.release` for more details).

Also add the necessary license to the directory (plain text file with the name `LICENSE`).


## Step 2: Add data

Put all the source files (TMX files in the example case) in the `OPUS/corpus/MyCorpus/src` directory.

```
cp *.tmx *.tmx.gz MyCorpus/src/
```


## Step 3: Compile the new corpus


Make sure that all pre-requisites are installed and available from the makefiles. This is not yet very well documented and often very CSC specific. On `puhti` it may be sufficient to load the NLPL modules:

```
module use -a /projappl/nlpl/software/modules/etc
module load nlpl-opus nlpl-efmaral nlpl-moses
```

After that compile the corpus:

```
cd MyCorpus
make all
```

Again, this can be run as a SLURM job, for example, `make all.submit` or using multiple cores using `make HPC_CORES=4 all.submit`. For big corpora, this needs to be optimized and may be better run in several steps. The command above makes all steps including UD parsing, word alignment, translation-phrase-table extraction, CWB indexing and also creates the release with all necessary files.

If everything works well, this runs smoothely without any big trouble, however, this is very unlikely. Prepare for debuggins and various intermediate problems ....


# Template-specific information

## template-text

todo

## template-moses

todo

## template-tmx

todo

## template-opusrr

todo