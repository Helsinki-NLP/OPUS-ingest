<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>SETIMES</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SETIMES</h1><p>A parallel corpus of news articles in the Balkan languages, originally extracted from <a href="http://www.setimes.com">http://www.setimes.com</a>. The corpus is compiled by Nikola Ljubešić and is taken from <a href="http://www.nljubesic.net/resources/corpora/setimes/">http://www.nljubesic.net/resources/corpora/setimes</a> provided under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA license</a></p><p>10 languages, 45 bitexts<br>total number of files: 90<br>total number of tokens: 425.89M<br>total number of sentence fragments: 17.60M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SETIMES/v2/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="SETIMES/v2/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="SETIMES/v2/el_sample.html">el</a></th>
<th><a rel="nofollow" href="SETIMES/v2/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SETIMES/v2/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="SETIMES/v2/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="SETIMES/v2/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="SETIMES/v2/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="SETIMES/v2/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="SETIMES/v2/tr_sample.html">tr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/bg.zip">bg</a></th>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="SETIMES/v2/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="SETIMES/v2/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="SETIMES/v2/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="SETIMES/v2/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="SETIMES/v2/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="SETIMES/v2/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="SETIMES/v2/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="SETIMES/v2/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="SETIMES/v2/bg-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/bg.zip">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/bs.zip">bs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (0.1M links, 6.4M tokens)" href="download.php?f=SETIMES/v2/xml/bg-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="SETIMES/v2/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="SETIMES/v2/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="SETIMES/v2/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="SETIMES/v2/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="SETIMES/v2/bs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="SETIMES/v2/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="SETIMES/v2/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="SETIMES/v2/bs-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/bs.zip">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (0.2M links, 10.7M tokens)" href="download.php?f=SETIMES/v2/xml/bg-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (0.1M links, 6.6M tokens)" href="download.php?f=SETIMES/v2/xml/bs-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="SETIMES/v2/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="SETIMES/v2/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="SETIMES/v2/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="SETIMES/v2/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="SETIMES/v2/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="SETIMES/v2/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="SETIMES/v2/el-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (0.2M links, 10.3M tokens)" href="download.php?f=SETIMES/v2/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.1M links, 6.4M tokens)" href="download.php?f=SETIMES/v2/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (0.2M links, 11.2M tokens)" href="download.php?f=SETIMES/v2/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="SETIMES/v2/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="SETIMES/v2/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="SETIMES/v2/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="SETIMES/v2/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="SETIMES/v2/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="SETIMES/v2/en-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (0.1M links, 6.2M tokens)" href="download.php?f=SETIMES/v2/xml/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (0.2M links, 9.8M tokens)" href="download.php?f=SETIMES/v2/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/en-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="SETIMES/v2/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="SETIMES/v2/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="SETIMES/v2/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="SETIMES/v2/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="SETIMES/v2/hr-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/hr.zip">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/mk.zip">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (0.2M links, 10.4M tokens)" href="download.php?f=SETIMES/v2/xml/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (0.1M links, 6.4M tokens)" href="download.php?f=SETIMES/v2/xml/bs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (0.2M links, 10.7M tokens)" href="download.php?f=SETIMES/v2/xml/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (0.2M links, 10.3M tokens)" href="download.php?f=SETIMES/v2/xml/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/hr-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="SETIMES/v2/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="SETIMES/v2/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="SETIMES/v2/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="SETIMES/v2/mk-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/mk.zip">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/ro.zip">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/v2/xml/bg-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (0.1M links, 6.6M tokens)" href="download.php?f=SETIMES/v2/xml/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (0.2M links, 10.8M tokens)" href="download.php?f=SETIMES/v2/xml/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (0.2M links, 10.5M tokens)" href="download.php?f=SETIMES/v2/xml/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (0.2M links, 9.8M tokens)" href="download.php?f=SETIMES/v2/xml/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/v2/xml/mk-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="SETIMES/v2/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="SETIMES/v2/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="SETIMES/v2/ro-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/ro.zip">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/sq.zip">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/v2/xml/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (0.1M links, 6.6M tokens)" href="download.php?f=SETIMES/v2/xml/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (0.2M links, 11.6M tokens)" href="download.php?f=SETIMES/v2/xml/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (0.2M links, 11.3M tokens)" href="download.php?f=SETIMES/v2/xml/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/v2/xml/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (0.2M links, 10.7M tokens)" href="download.php?f=SETIMES/v2/xml/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (0.2M links, 10.9M tokens)" href="download.php?f=SETIMES/v2/xml/ro-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="SETIMES/v2/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="SETIMES/v2/sq-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/sq.zip">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/sr.zip">sr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (0.2M links, 10.1M tokens)" href="download.php?f=SETIMES/v2/xml/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (0.1M links, 6.2M tokens)" href="download.php?f=SETIMES/v2/xml/bs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (0.2M links, 10.9M tokens)" href="download.php?f=SETIMES/v2/xml/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/v2/xml/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (0.2M links, 9.3M tokens)" href="download.php?f=SETIMES/v2/xml/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (0.2M links, 10.1M tokens)" href="download.php?f=SETIMES/v2/xml/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (0.2M links, 10.3M tokens)" href="download.php?f=SETIMES/v2/xml/ro-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (0.2M links, 11.0M tokens)" href="download.php?f=SETIMES/v2/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="SETIMES/v2/sr-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/sr.zip">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/v2/xml/tr.zip">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (0.1M links, 6.0M tokens)" href="download.php?f=SETIMES/v2/xml/bs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (0.2M links, 9.8M tokens)" href="download.php?f=SETIMES/v2/xml/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (0.2M links, 8.9M tokens)" href="download.php?f=SETIMES/v2/xml/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/v2/xml/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/v2/xml/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/v2/xml/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (0.2M links, 9.3M tokens)" href="download.php?f=SETIMES/v2/xml/sr-tr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=SETIMES/v2/raw/tr.zip">tr</a></th></tr>
<tr><th></th>
<th>bg</th>
<th>bs</th>
<th>el</th>
<th>en</th>
<th>hr</th>
<th>mk</th>
<th>ro</th>
<th>sq</th>
<th>sr</th>
<th>tr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.bs.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.hr.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.mk.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.sq.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.sr.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.tr.gz">tr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.bg.gz">bg</a>
</th><td>9</td> <td>44.6M</td> <td>1.8M</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bulgarian-Bosnian (135,728 sentence pairs, 5.44M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-bs.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Greek (210,525 sentence pairs, 9.12M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-el.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-English (211,184 sentence pairs, 8.76M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bulgarian-Croatian (201,745 sentence pairs, 8.12M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Macedonian (205,262 sentence pairs, 8.83M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Romanian (208,947 sentence pairs, 8.98M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Albanian (209,617 sentence pairs, 9.09M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Serbian (209,251 sentence pairs, 8.51M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Turkish (204,243 sentence pairs, 7.91M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bg-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.bs.gz">bs</a>
</th><td>9</td> <td>28.3M</td> <td>1.2M</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-Bulgarian (136,009 sentence pairs, 5.45M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-bs.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-Greek (137,317 sentence pairs, 5.67M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-el.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-English (138,054 sentence pairs, 5.48M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-en.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Croatian (138,105 sentence pairs, 5.29M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-hr.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-Macedonian (132,491 sentence pairs, 5.47M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-Romanian (137,079 sentence pairs, 5.66M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bosnian-Albanian (137,658 sentence pairs, 5.71M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Serbian (135,656 sentence pairs, 5.32M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Turkish (133,680 sentence pairs, 4.98M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/bs-tr.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.el.gz">el</a>
</th><td>9</td> <td>47.4M</td> <td>1.9M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Bulgarian (212,437 sentence pairs, 9.18M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-el.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Greek-Bosnian (137,602 sentence pairs, 5.67M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-el.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Greek-English (224,811 sentence pairs, 9.64M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Croatian (203,267 sentence pairs, 8.44M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Macedonian (205,343 sentence pairs, 9.16M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Romanian (210,442 sentence pairs, 9.32M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Greek-Albanian (224,289 sentence pairs, 10.04M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Serbian (222,021 sentence pairs, 9.35M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Greek-Turkish (205,188 sentence pairs, 8.22M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/el-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.en.gz">en</a>
</th><td>9</td> <td>44.8M</td> <td>1.9M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Bulgarian (213,160 sentence pairs, 8.83M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-en.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='English-Bosnian (138,387 sentence pairs, 5.48M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-en.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='English-Greek (227,168 sentence pairs, 9.72M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-en.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='English-Croatian (204,110 sentence pairs, 8.16M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Macedonian (205,811 sentence pairs, 8.82M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Romanian (211,069 sentence pairs, 9.03M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='English-Albanian (225,165 sentence pairs, 9.72M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Serbian (222,808 sentence pairs, 9.08M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Turkish (205,756 sentence pairs, 8.02M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/en-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.hr.gz">hr</a>
</th><td>9</td> <td>40.2M</td> <td>1.8M</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Croatian-Bulgarian (203,465 sentence pairs, 8.18M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-hr.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Croatian-Bosnian (138,402 sentence pairs, 5.30M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-hr.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Greek (205,008 sentence pairs, 8.50M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-hr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Croatian-English (205,910 sentence pairs, 8.23M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-hr.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Croatian-Macedonian (197,136 sentence pairs, 8.19M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/hr-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Romanian (202,052 sentence pairs, 8.38M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/hr-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Albanian (203,298 sentence pairs, 8.51M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/hr-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Serbian (202,200 sentence pairs, 7.94M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/hr-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Turkish (197,562 sentence pairs, 7.41M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/hr-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.mk.gz">mk</a>
</th><td>9</td> <td>44.6M</td> <td>1.8M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Bulgarian (207,169 sentence pairs, 8.89M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Macedonian-Bosnian (132,779 sentence pairs, 5.48M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-mk.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Greek (207,262 sentence pairs, 9.23M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-English (207,777 sentence pairs, 8.89M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Croatian (198,876 sentence pairs, 8.25M words) - Moses format' href="download.php?f=SETIMES/v2/moses/hr-mk.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Romanian (204,271 sentence pairs, 9.05M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/mk-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Albanian (204,692 sentence pairs, 9.17M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/mk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Serbian (205,348 sentence pairs, 8.59M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/mk-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Turkish (201,386 sentence pairs, 8.00M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/mk-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.ro.gz">ro</a>
</th><td>9</td> <td>46.8M</td> <td>1.8M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Bulgarian (210,842 sentence pairs, 9.05M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Romanian-Bosnian (137,365 sentence pairs, 5.67M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-ro.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Greek (212,359 sentence pairs, 9.39M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-English (213,047 sentence pairs, 9.10M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Croatian (203,777 sentence pairs, 8.44M words) - Moses format' href="download.php?f=SETIMES/v2/moses/hr-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Macedonian (206,168 sentence pairs, 9.12M words) - Moses format' href="download.php?f=SETIMES/v2/moses/mk-ro.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Albanian (210,405 sentence pairs, 9.39M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/ro-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Serbian (208,684 sentence pairs, 8.79M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/ro-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Turkish (204,271 sentence pairs, 8.25M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/ro-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.sq.gz">sq</a>
</th><td>9</td> <td>48.2M</td> <td>1.9M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Bulgarian (211,518 sentence pairs, 9.16M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Albanian-Bosnian (137,953 sentence pairs, 5.72M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-sq.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Albanian-Greek (226,577 sentence pairs, 10.12M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Albanian-English (227,516 sentence pairs, 9.80M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Croatian (205,044 sentence pairs, 8.57M words) - Moses format' href="download.php?f=SETIMES/v2/moses/hr-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Macedonian (206,601 sentence pairs, 9.24M words) - Moses format' href="download.php?f=SETIMES/v2/moses/mk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Romanian (212,320 sentence pairs, 9.46M words) - Moses format' href="download.php?f=SETIMES/v2/moses/ro-sq.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Serbian (222,303 sentence pairs, 9.47M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/sq-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Turkish (205,261 sentence pairs, 8.39M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/sq-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.sr.gz">sr</a>
</th><td>9</td> <td>42.9M</td> <td>1.8M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Bulgarian (211,172 sentence pairs, 8.57M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Serbian-Bosnian (135,945 sentence pairs, 5.33M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-sr.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Serbian-Greek (224,311 sentence pairs, 9.43M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Serbian-English (225,169 sentence pairs, 9.15M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Croatian (203,989 sentence pairs, 8.00M words) - Moses format' href="download.php?f=SETIMES/v2/moses/hr-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Macedonian (207,295 sentence pairs, 8.66M words) - Moses format' href="download.php?f=SETIMES/v2/moses/mk-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Romanian (210,612 sentence pairs, 8.86M words) - Moses format' href="download.php?f=SETIMES/v2/moses/ro-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Serbian-Albanian (224,595 sentence pairs, 9.56M words) - Moses format' href="download.php?f=SETIMES/v2/moses/sq-sr.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Turkish (204,122 sentence pairs, 7.78M words) - TMX format' href="download.php?f=SETIMES/v2/tmx/sr-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=SETIMES/v2/mono/SETIMES.raw.tr.gz">tr</a>
</th><td>9</td> <td>38.3M</td> <td>1.8M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Bulgarian (206,071 sentence pairs, 7.97M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bg-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Bosnian (133,958 sentence pairs, 4.99M words) - Moses format' href="download.php?f=SETIMES/v2/moses/bs-tr.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Greek (207,029 sentence pairs, 8.28M words) - Moses format' href="download.php?f=SETIMES/v2/moses/el-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-English (207,678 sentence pairs, 8.08M words) - Moses format' href="download.php?f=SETIMES/v2/moses/en-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Croatian (199,260 sentence pairs, 7.47M words) - Moses format' href="download.php?f=SETIMES/v2/moses/hr-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Macedonian (203,231 sentence pairs, 8.06M words) - Moses format' href="download.php?f=SETIMES/v2/moses/mk-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Romanian (206,104 sentence pairs, 8.32M words) - Moses format' href="download.php?f=SETIMES/v2/moses/ro-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Albanian (207,107 sentence pairs, 8.45M words) - Moses format' href="download.php?f=SETIMES/v2/moses/sq-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Serbian (205,993 sentence pairs, 7.84M words) - Moses format' href="download.php?f=SETIMES/v2/moses/sr-tr.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>