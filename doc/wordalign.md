
# Word alignment


`corpus/Makefile.wordalign` includes the batch commands for running word alignment on OPUS corpora and extracting phrase translation tables from the aligned data. Start by creating a sub directory `wordalign` in your corpus directory (`OPUSHOME/corpus/<mycorpus>/wordalign`) that contains

```
# -*-makefile-*-
#

all:
        ${MAKE} all-wordalign

include ../Makefile.def
include ../../Makefile.def
include ../../Makefile.wordalign
```

All commands need to be started inside of the wordalign directory.


## Quickstart

Running all word alignments, phrase table extractions for all language pairs:

```
make wordalign-all
make cleanup-all
```

Submitting jobs for all language pairs running alignment and phrase-table extraction in different steps:

```
make submit-all
```

ATTENTION: This may create many jobs!



## Pre-requisites

All data files must be converted to XML, sentence aligned and tokenized (in `OPUSHOME/corpus/<mycorpus>/xml`). Sentence alignment is stored in XCES align format and follows the naming conventions in OPUS.



## Run word alignment on the server


The following commands can be used to start the complete alignment and extraction process for selected (German - English in the example below) or all language pairs:


* `make SRC=de TRG=en wordalign`: align & extract phrase-table for "de-en" 
* `make wordalign-all`:           run wordalign for all language pairs
* `make cleanup-all`:             cleanup for all language pairs



## Run step-wise

You can run individual steps for one bitext (set SRC and TRG like above). You must run the commands in the order given below!


* `make wordalign-prepare`:  convert and preprocess bitext
* `make wordalign-align`:    run word-aligner
* `make wordalign-pt`:       extract phrase-table
* `make wordalign-filter`:   significance filtering



## Run alignment jobs on a cluster

Start jobs on HPC cluster for a selected language pair (set language pair with SRC and TRG):

```
   make submit-wordalign
```

This will trigger all sub-tasks below by submitting new jobs
at the end of the previous task. Each sub-task may require 
different resources (in terms of memory or walltime).

```
   make submit-wordalign-prepare
   make submit-wordalign-align
   make submit-wordalign-pt
   make submit-wordalign-filter
```

## Run alignment jobs for all languages on a cluster


Start jobs on HPC cluster for all language pairs:


* `make submit-all`:         run ACTION (default=wordalign) for all bitexts
* `make submit-all-prepare`: convert & preprocess all bitexts
* `make submit-all-align`:   word-align all bitext
* `make submit-all-pt`:      extract all phrase tables
* `make submit-all-filter`:  significance filtering for all bitexts
