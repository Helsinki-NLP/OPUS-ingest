


# todo


* metadata from imdb/omdb
  - https://www.omdb.org/en/us/content/Help:DataDownload
  - https://developer.imdb.com/non-commercial-datasets/
  - https://datasets.imdbws.com
  


* file-counts for big files are wrong in v2024 index-files
* intralingual links and alternative links are still missing in v2024 release
* v2018 release has more metadata, also a field "machine_translated" - where does that information come from?


* some problems with align-files (in xml and devtest-xml):

grep 'File exists' *.err.*

es-it and es-fr are restarted in devtest-xml
--> did it work now?
--> do we have to re-run things again?


make check-broken



* rerun some monolingual text extraction

grep lines *-release.err.*
el-release.err.26106045:parse errors: 38978 lines
en-release.err.26106048:parse errors: 139272 lines
es-release.err.26106051:parse errors: 75791 lines
fa-release.err.26106058:parse errors: 324587 lines
fr-release.err.26106062:parse errors: 125042 lines
fr-release.err.26106062:parse errors: 11061 lines
hr-release.err.26106069:parse errors: 1301865 lines
hr-release.err.26106069:parse errors: 740 lines
hu-release.err.26106070:parse errors: 87163 lines
id-release.err.26106072:parse errors: 66118 lines
id-release.err.26106072:parse errors: 2433 lines
it-release.err.26106076:parse errors: 42258 lines
ja-release.err.26106077:parse errors: 9987 lines
nl-release.err.26106100:parse errors: 89260 lines
pl-release.err.26106106:parse errors: 65747 lines
pt_BR-release.err.26106109:parse errors: 194111 lines
pt-release.err.26106108:parse errors: 88471 lines


* some devtest-xml align jobs failed!


* use https://pypi.org/project/lingua-language-detector/ instead?
* or use https://pypi.org/project/heliport/ --> fastest!



* some English and Arabic conversion failed because I corrupted the srt2xml script
--> damn
--> > 5000 files for English are affected
--> > 6000 files for Arabic are affected


* missing in srt2xml: as

find other missing languages with:
`grep 'Cannot find language with code' src/*.err.* | cut -f1 -d: | sort -u`


grep 'Cannot find language with code' *.err.* | cut -f1 -d: | sort -u
as-convert.err.25786448
ext-convert.err.25786556
ga-convert.err.25786520
gd-convert.err.25786550
ig-convert.err.25786456
mni-convert.err.25786563
mr-convert.err.25786564
ne-convert.err.25786542
nv-convert.err.25786531
or-convert.err.25786534
ps-convert.err.25786462
sat-convert.err.25786460
se-convert.err.25786507
tk-convert.err.25786532
tok-convert.err.25786505
uz-convert.err.25786442



# done

* make dev and test set (from 2024?)
* convert ast files in old release
* convert aze files in old release
* convert kan files in old release
* convert kur files in old release
* convert oci files in old release
* convert swa files in old release
* update langid to something more recent than langid.py
* move srt2xml-test.py to srt2xml.py
* redo 'ze' (need to be split into zh and en)

