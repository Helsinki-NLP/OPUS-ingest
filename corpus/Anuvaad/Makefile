# -*-makefile-*-
#
# template for converting aligned parallel corpora 
# in MOSES format (sentence aligned plain text) to OPUS
#
# - assumes that there are plain text files in src/
#   (they may be compressed with gzip)
# - assumes that opus-tools are installed (moses2opus in PATH)
#
# BEFORE RUNNING:
# - set corpus-specific info in Makefile.def
# - change the include of preprocessing Makefiles if necessary
#   (Makefile.tag for PoS tagging or Makefile.annotate)
#
# TODO
# - does not work well for multilingual corpora yet
#   (converts for every language pair!)


include Makefile.def
include ../Makefile.def


## FILES = all files with 2-letter suffix in src
## FILEBASE = filenames without language IDs
## LANGUAGES = taken from file extensions
## CONVERTED = flag to indicate that a bitext is converted

FILES     = $(shell find src -name '*.??' | grep -v '__MACOSX')
FILEBASE  = $(sort $(basename ${FILES}))
LANGUAGES = $(sort $(subst .,,$(suffix ${FILES})))
CONVERTED = ${patsubst %,%_done,${FILEBASE}}


## all downloads from the project

DOWNLOADS = https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/anuvaad_general_corpus_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/asianetnews_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/betterindia_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/business_standard_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/catchnews-en-hi-20210320.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/dd-national-en-hi-20210320.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/dd-sports-en-hi-20210320.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/drivespark-en-hi-20210303.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/drivespark-en-kn-20210303.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/drivespark-en-ml-20210303.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/drivespark-en-ta-20210303.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/drivespark-en-te-20210303.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/dwnews_2004_2020_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/dwnews_2008_2020_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/fin_express_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/goodreturns_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/goodreturns_20210320_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/goodreturns_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/goodreturns_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/goodreturns_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/gu-govt_20210320_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_business_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_business_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_business_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_business_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_business_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_education_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_education_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_education_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_entertainment_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_entertainment_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_entertainment_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_entertainment_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_entertainment_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_general_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_general_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_general_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_lifestyle_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_lifestyle_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_lifestyle_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_lifestyle_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_news_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_news_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_news_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_news_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_news_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_sports_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_sports_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_sports_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_sports_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_sports_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_tech_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_tech_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_tech_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ie_tech_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/ik-2021-v1-en-te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/internal-judicial-2021-v1-en-te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-business_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-business_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-education_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-education_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-entertainment_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-entertainment_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-lifestyle_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-lifestyle_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-news_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-news_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-sports_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-sports_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-tech_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/jagran-tech_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/legal-terms-2021-v1-en-te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-entertainment_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-entertainment_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-financial_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-financial_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-healthcare_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-healthcare_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-lifestyle_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-lifestyle_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-news_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-news_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-sports_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-sports_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-tech_20210501_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/lokmat-tech_20210501_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/marketfeed_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/mk_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nativeplanet-en-hi-20210315.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nativeplanet-en-kn-20210315.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nativeplanet-en-ml-20210315.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nativeplanet-en-ta-20210315.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nativeplanet-en-te-20210315.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/newsonair_2019_2020_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/nouns-dict-2021-v1-en-te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/oneindia_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pa_govt_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pa_govt_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_as.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_or.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pib_2017_2020_en_ur.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2009_2016_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2014_2016_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2014_2016_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_as.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_or.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pibarchives_2015_2016_en_ur.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/pranabmukherjee_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/prothomalo_2014_2020_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/sakshi_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/sentinel_20210320_en_as.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/sentinel_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/thewire_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/thewire_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/thewire_20210320_en_ur.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/toi_20210320_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/tribune_20210320_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/tribune_20210320_en_pa.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/wikipedia-en-hi-20210201.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/wikipedia-en-ml-20210201.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/wikipedia-en-ta-20210201.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/wikipedia-en-te-20210201.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_bn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_gu.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_hi.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_kn.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_ml.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_mr.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_ta.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zee_30042021_en_te.zip \
https://anuvaad-parallel-corpus.s3-us-west-2.amazonaws.com/zeebiz_20210320_en_hi.zip

DOWNLOADS_BASE_URL = $(firstword $(dir ${DOWNLOADS}))
DOWNLOADS_BASENAME = $(patsubst %,src/%,$(basename $(notdir ${DOWNLOADS})))



## make all:
## - convert (see below)
## - annotate (tokenize/tag/chunk depending on Makefile that is included)
## - udparse (parse with UDPipe)
## - publish (various packages, cwb index, website etc)
## - wordalign

.PHONY: all
all:
	${MAKE} fetch
	${MAKE} import
#	${MAKE} extra
	${MAKE} publish

.PHONY: import
import:
	${MAKE} convert
	${MAKE} annotate

.PHONY: extra
extra:
	${MAKE} udparse
	${MAKE} wordalign
	${MAKE} cwb-index


## standard procedures are specified in the following makefiles
##
##   Makefile.submit ....... submit a job to our cluster
##   Makefile.process ...... standard corpus processing tasks
##   Makfile.release ....... download packages and website
##   Makefile.cwb .......... indexing with CWB
##   Makfile.udparse ....... dependency parsing

include ../Makefile.submit
include ../Makefile.process
include ../Makefile.release
include ../Makefile.cwb
include ../Makefile.udparse


## select one of the following to set the annotation level in xml/
##
##   Makefile.tokenize ..... tokenization only
##   Makefile.tag .......... tokenization and PoS tagging (if available)
##   Makefile.annotate ..... all annotation in Uplug


include ../Makefile.tokenize-polyglot
# include ../Makefile.tokenize-fast
# include ../Makefile.tokenize-moses
# include ../Makefile.tokenize
# include ../Makefile.tag
# include ../Makefile.annotate


## change this if moses2opus is not in your PATH
MOSES2OPUS = moses2opus


.PHONY: fetch
fetch: ${DOWNLOADS_BASENAME}

${DOWNLOADS_BASENAME}:
	mkdir -p $@
	wget -O $@/data.zip ${DOWNLOADS_BASE_URL}$(patsubst src/%,%.zip,$@)
	unzip -d $@ $@/data.zip
	rm -f $@/data.zip

.PHONY: convert
convert: ${CONVERTED} xml/Makefile
	${MAKE} -C xml create-align-files

${CONVERTED}:
	mkdir -p raw xml log
	( b=$(patsubst src/%_done,%,$@); \
	  d=$(dir $(patsubst src/%_done,%,$@)); \
	  for s in $(sort $(subst .,,$(suffix $(wildcard $(@:_done=).*)))); do \
	    for t in $(sort $(subst .,,$(suffix $(wildcard $(@:_done=).*)))); do \
	      if [ "$$s" \< "$$t" ]; then \
	          echo "convert $$b ($$s-$$t)"; \
	          mkdir -p xml/$$s-$$t/$$d; \
	          cd raw; \
	          ${MOSES2OPUS} -z -s $$s -t $$t -b $$b \
			../src/$$b.$$s ../src/$$b.$$t |\
		  gzip -c > ../xml/$$s-$$t/$$b.xml.gz; \
	          cd .. ;\
	      fi \
	    done \
	  done )
	touch $@

