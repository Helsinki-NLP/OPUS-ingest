# Many-to-English Machine Translation Dataset

This is a large scale machine translation dataset for over 500 languages to English.
This dataset is curated from various sources; please see acknowlegement section. 

+ Github: https://github.com/thammegowda/006-many-to-eng
+ Paper: 
+ Download Links:
+ Website: 

This dataset is collected using mtdata https://github.com/thammegowda/mtdata 


Files
=====

+ train.raw.tsv.gz     <-- Training data in raw form, before cleaning, deduping and tokenization

+ train.v1.eng.tok.gz  <-- good training data, tokenized; english side
+ train.v1.src.tok.gz  <-- good training data, tokenized; source size
+ train.v1.lang.gz     <-- lang ID of source side sentences
+ train.v1.prov.gz     <-- provinance of training record (if you want to see where we got this record)

+ train.v1.tok.stats.tsv  <-- stats such as sentence and token count per language

+ devs-combo-shuf10k-raw+tok.tgz  <-- dev data that has random 10K sentences for validation 
+ devtests-raw+tok.tgz    <-- all the dev and test data; both raw and tokenized
+ citations.bib  <-- BibTeX of articles which published the datastes collected in this work

Note: train.v1.{eng.tok,src.tok,lang,prov} are plain text files after running gunzip.
They should have same number of lines. Line number is the way to cross refrence between them.


Data Size
=========
```
(head -1 && tail -1) <  train.v1.tok.stats.tsv
Lang    Sents   Source  English
Total   473791770       9001780032      9072887211
```
This data set has 473M sentences, 9 Billion source tokens and 9 Billion English tokens, after deduplication and cleaning.
The raw data (train.raw.tsv.gz) is much larger.


```
$ cut -f1  train.v1.tok.stats.tsv  | grep  '^[a-z]' | wc -l
560
```

It has 560 languages on source side. Target side is English.
However, not all languages have sufficient training data.

```
cat  train.v1.tok.stats.tsv  | grep  '^[a-z]' | less  | awk -F '\t' 'int($2) >= 10000' |wc -l
334
```
=> 334 langs have atleast 10,000 sentences


```
cat  train.v1.tok.stats.tsv  | grep  '^[a-z]' | less  | awk -F '\t' 'int($3) >= 1000000' |wc -l
214
```

214 languages have atleast 1 Million source tokens.



== Acknowledgements

All the data consolidated in this work are retrieved from various sources. If you use this dataset, please cite all the articles in `citations.bib` file. 
We are enabling this derived dataset to be easily accessible, with the intention to accelerate the reseach of language technologies to low resource languages. However, if you view this derived dataset as a violation of intellectual property rights, please let us know, so we will be happy to remove it from the corpus.

Thanks to all the amazing folks who spent years of effort in creating parallel datasets.

Most notably, these: 
+ OPUS  -- Thanks ^ billion
++ JW300
++ OPUS100
+ StatMT.org -- Thanks ^ Billion
  ++ Lots and lots of thanks for the test sets
+ NeuLab for TEDTalks
  ++ Japanese-English dataset
+ Wikimatrix
+ Joshua Indian Parallel Corpus
+ PMIndia Corpus
+ Paracrawl 
+ IITB Hindi-English 
+ TILDE MODEL



