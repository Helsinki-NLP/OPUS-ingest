
# Create a new corpus

There are a few templates for creating a new corpus to cover the most
common cases, for example, to create a data set from given parallel
text files or data sets from a collection of TMX files. Templates are
given in sub-directories of `OPUS-ingest/template/`.


## Step 0: Clone OPUS-ingest

Retrieve the latest OPUS-ingest repository from github in some
dedicated work directory (if not done already):

```
git clone git@github.com:Helsinki-NLP/OPUS-ingest.git
git submodule update --init --recursive --remote
```

Install pre-requisites tools and libaries. On Ubuntu, it may work to
just run inside `OPUS-ingest`

```
make install
```


## Step 1: Prepare the new corpus

Make a copy of the appropriate template directory, for example, the
TMX template. Give the OPUS a unciye, short and desriptive name. In
this example we simply call the new corpus `MyCorpus`

```
cd OPUS-ingest/corpus
cp -R ../template/tmx MyCorpus
```

Edit the information in the `MyCorpus/Makefile.def` in that new corpus
directory. Specify the license, copyrights and any kind of information
that should appear on the corpus website (including acknowledgements,
links etc). Make sure that the file still stays a valid GNU Makefile
and that information can be inserted in the website templates using
some simple sed commands (no single quotes and other special
characters that may break it - this is a bit unpredicatable - check
`OPUS/corpus/Makefile.release` for more details).

Also add the necessary license to the directory (plain text file with the name `LICENSE`).


## Step 2: Add data

Put all the source files (TMX files in the example case) in the `OPUS/corpus/MyCorpus/src` directory.

```
cp *.tmx *.tmx.gz MyCorpus/src/
```


## Step 3: Compile the new corpus


Make sure that all pre-requisites are installed and available from the
makefiles. This is not yet very well documented and often very CSC
specific. On `puhti` it may be sufficient to load the NLPL modules:

```
module use -a /projappl/nlpl/software/modules/etc
module load parallel git nlpl-cwb nlpl-opus nlpl-moses
```

After that compile and publish the corpus. (Note that you need
permissions to the release directory, see `OPUSRELEASE` in
[corpus/Makefile.def](https://github.com/Helsinki-NLP/OPUS-ingest/blob/master/corpus/Makefile.def).

```
cd MyCorpus
make all
```

On puhti@CSC, you can submit the import job to SLURM by running

```
make all.submit
```

Importing and publishing data can be done in various steps, which
depend on the particular corpus, dataset and settings in the
Makefile. High-level steps are:

```
make import
make publish
```

The first one converts all data and creates the OPUS files we keep as
our main internal resource. This step includes tokenisation and may
also include other steps like POS tagging and sentence alignment if
that is activated or necessary for the corpus. The second step
includes the conversion to all release formats and creates proper
packages that can be placed into the release directory. This includes
aligned plain text files (Moses format), TMX files and
language-specific packages. The release is places in `releases` with
the following structure:

~~~
releases/corpusname/version ........... corpus release with version <version>
releases/corpusname/version/raw ....... untokenized XML files
releases/corpusname/version/xml ....... tokenized XML files (possibly more annotation)
releases/corpusname/version/moses ..... plain text files for each bitext (Moses format)
releases/corpusname/version/tmx ....... translation memory exchange format for each bitext
releases/corpusname/version/parsed .... parsed corpora in XML (not all data sets are parsed)
releases/corpusname/version/mono ...... monolingual plain text files for each language
releases/corpusname/version/freq ...... token frequency lists
releases/corpusname/version/smt ....... word alignments and extracted phrase translation tables
releases/corpusname/version/dic ....... a rough dictionary extracted from word alignment
~~~


Publishing also includes the generation of
websites and sample files to be placed on the OPUS web
server. Those files are located in `public_html/`.

~~~
public_html/corpusname.php
public_html/corpusname-version.php
public_html/corpusname/version/*.html
~~~




Statistics about all bitexts will also be produced and stored together with info files
in the release directory:

~~~
releases/corpusname/info.yaml
releases/corpusname/version/info.yaml
releases/corpusname/version/statistics.yaml
~~~



## Step 4: Release the corpus

For this step you will need a valid ssh key to the OPUS server (for
the website and sample files) and also access to the official data
storage (allas@CSC)! On CSC, you need to load the allas modules and
login into the project that serves the data.

```
module load allas
allas-conf -k
```

Select the correct project (NLPL-OPUS) and then run:

```
make release
```

This will upload the corpus to an allas ObjectStorage container and
copy the website and corpus sample files to the public OPUS web
server. It also copies the CWB index files if they have been created
(for on-line corpus search).



# Template-specific information


## template/text

todo

## template/moses

todo

## template/tmx

todo

## template/multi-tmx

todo

## template/pivot-tmx

todo

## template/opusrr

todo