<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>ParaCrawl</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>ParaCrawl</h1>Parallel corpora from Web Crawls collected in the <a href="http://paracrawl.eu/download.html">ParaCrawl project</a><p>14 languages, 13 bitexts<br>total number of files: 2,448<br>total number of tokens: 4.55G<br>total number of sentence fragments: 282.88M<br>
<!--
<p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/>
-->
<h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. The data is released under the <a href="https://creativecommons.org/share-your-work/public-domain/cc0/">Creative Commons CC0 license</a> ("no rights reserved"), see <a href="http://paracrawl.eu/download.html">http://paracrawl.eu/download.html</a> for more details<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="ParaCrawl/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="ParaCrawl/de_sample.html">de</a></th>
<th><a rel="nofollow" href="ParaCrawl/en_sample.html">en</a></th>
<th><a rel="nofollow" href="ParaCrawl/es_sample.html">es</a></th>
<th><a rel="nofollow" href="ParaCrawl/et_sample.html">et</a></th>
<th><a rel="nofollow" href="ParaCrawl/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="ParaCrawl/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="ParaCrawl/it_sample.html">it</a></th>
<th><a rel="nofollow" href="ParaCrawl/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="ParaCrawl/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="ParaCrawl/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="ParaCrawl/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="ParaCrawl/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="ParaCrawl/ru_sample.html">ru</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/cs.tar.gz">cs</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="ParaCrawl/cs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/de.tar.gz">de</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="ParaCrawl/de-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (101 aligned documents, 10.0M links, 215.2M tokens)" href="download.php?f=ParaCrawl/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (364 aligned documents, 36.4M links, 1.1G tokens)" href="download.php?f=ParaCrawl/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="ParaCrawl/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="ParaCrawl/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="ParaCrawl/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="ParaCrawl/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="ParaCrawl/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="ParaCrawl/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="ParaCrawl/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="ParaCrawl/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="ParaCrawl/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="ParaCrawl/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="ParaCrawl/en-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/es.tar.gz">es</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (161 aligned documents, 16.0M links, 760.2M tokens)" href="download.php?f=ParaCrawl/en-es.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/et.tar.gz">et</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (13 aligned documents, 1.3M links, 40.5M tokens)" href="download.php?f=ParaCrawl/en-et.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/et.raw.tar.gz">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/fi.tar.gz">fi</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (7 aligned documents, 0.6M links, 19.5M tokens)" href="download.php?f=ParaCrawl/en-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/fi.raw.tar.gz">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/fr.tar.gz">fr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (277 aligned documents, 27.6M links, 1.3G tokens)" href="download.php?f=ParaCrawl/en-fr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/it.tar.gz">it</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (84 aligned documents, 8.3M links, 359.3M tokens)" href="download.php?f=ParaCrawl/en-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/lv.tar.gz">lv</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (3 aligned documents, 0.2M links, 8.9M tokens)" href="download.php?f=ParaCrawl/en-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/lv.raw.tar.gz">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/nl.tar.gz">nl</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (26 aligned documents, 2.6M links, 102.8M tokens)" href="download.php?f=ParaCrawl/en-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/pl.tar.gz">pl</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (13 aligned documents, 1.3M links, 47.9M tokens)" href="download.php?f=ParaCrawl/en-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/pt.tar.gz">pt</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (29 aligned documents, 2.8M links, 131.9M tokens)" href="download.php?f=ParaCrawl/en-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/ro.tar.gz">ro</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (25 aligned documents, 2.5M links, 76.3M tokens)" href="download.php?f=ParaCrawl/en-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=ParaCrawl/ro.raw.tar.gz">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=ParaCrawl/ru.tar.gz">ru</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (121 aligned documents, 12.1M links, 367.8M tokens)" href="download.php?f=ParaCrawl/en-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=ParaCrawl/ru.raw.tar.gz">ru</a></th></tr>
<tr><th></th>
<th>cs</th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>fi</th>
<th>fr</th>
<th>it</th>
<th>lv</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.et.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.lv.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.ru.gz">ru</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.cs.gz">cs</a>
</th><td>101</td> <td>116.4M</td> <td>11.1M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (10,018,010 sentence pairs, 161.22M words) - TMX format' href="download.php?f=ParaCrawl/cs-en.tmx.gz">10.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.de.gz">de</a>
</th><td>364</td> <td>534.4M</td> <td>42.4M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-English (36,345,228 sentence pairs, 929.44M words) - TMX format' href="download.php?f=ParaCrawl/de-en.tmx.gz">36.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.en.gz">en</a>
</th><td>1,224</td> <td>2.2G</td> <td>142.3M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (10,019,079 sentence pairs, 161.23M words) - Moses format' href="download.php?f=ParaCrawl/cs-en.txt.zip">10.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (36,351,010 sentence pairs, 929.50M words) - Moses format' href="download.php?f=ParaCrawl/de-en.txt.zip">36.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (16,000,865 sentence pairs, 674.30M words) - TMX format' href="download.php?f=ParaCrawl/en-es.tmx.gz">16.0M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='English-Estonian (1,297,557 sentence pairs, 32.73M words) - TMX format' href="download.php?f=ParaCrawl/en-et.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Finnish (624,038 sentence pairs, 16.47M words) - TMX format' href="download.php?f=ParaCrawl/en-fi.tmx.gz">0.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (27,621,795 sentence pairs, 1.15G words) - TMX format' href="download.php?f=ParaCrawl/en-fr.tmx.gz">27.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Italian (8,318,247 sentence pairs, 311.74M words) - TMX format' href="download.php?f=ParaCrawl/en-it.tmx.gz">8.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Latvian (242,220 sentence pairs, 7.65M words) - TMX format' href="download.php?f=ParaCrawl/en-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Dutch (2,560,421 sentence pairs, 90.62M words) - TMX format' href="download.php?f=ParaCrawl/en-nl.tmx.gz">2.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='English-Polish (1,275,117 sentence pairs, 40.86M words) - TMX format' href="download.php?f=ParaCrawl/en-pl.tmx.gz">1.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Portuguese (2,809,328 sentence pairs, 115.11M words) - TMX format' href="download.php?f=ParaCrawl/en-pt.tmx.gz">2.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Romanian (2,459,145 sentence pairs, 65.78M words) - TMX format' href="download.php?f=ParaCrawl/en-ro.tmx.gz">2.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Russian (12,057,826 sentence pairs, 292.23M words) - TMX format' href="download.php?f=ParaCrawl/en-ru.tmx.gz">12.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.es.gz">es</a>
</th><td>161</td> <td>388.0M</td> <td>18.7M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (16,001,324 sentence pairs, 674.32M words) - Moses format' href="download.php?f=ParaCrawl/en-es.txt.zip">16.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.et.gz">et</a>
</th><td>13</td> <td>19.7M</td> <td>1.5M</td><td></td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-English (1,297,570 sentence pairs, 32.73M words) - Moses format' href="download.php?f=ParaCrawl/en-et.txt.zip">1.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.fi.gz">fi</a>
</th><td>7</td> <td>8.6M</td> <td>0.7M</td><td></td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-English (624,058 sentence pairs, 16.47M words) - Moses format' href="download.php?f=ParaCrawl/en-fi.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.fr.gz">fr</a>
</th><td>277</td> <td>705.9M</td> <td>32.1M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (27,622,876 sentence pairs, 1.15G words) - Moses format' href="download.php?f=ParaCrawl/en-fr.txt.zip">27.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.it.gz">it</a>
</th><td>84</td> <td>180.2M</td> <td>9.8M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (8,318,479 sentence pairs, 311.75M words) - Moses format' href="download.php?f=ParaCrawl/en-it.txt.zip">8.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.lv.gz">lv</a>
</th><td>3</td> <td>4.1M</td> <td>0.3M</td><td></td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Latvian-English (242,227 sentence pairs, 7.65M words) - Moses format' href="download.php?f=ParaCrawl/en-lv.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.nl.gz">nl</a>
</th><td>26</td> <td>51.3M</td> <td>3.0M</td><td></td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Dutch-English (2,560,472 sentence pairs, 90.63M words) - Moses format' href="download.php?f=ParaCrawl/en-nl.txt.zip">2.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.pl.gz">pl</a>
</th><td>13</td> <td>22.7M</td> <td>1.5M</td><td></td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Polish-English (1,275,162 sentence pairs, 40.86M words) - Moses format' href="download.php?f=ParaCrawl/en-pl.txt.zip">1.3M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.pt.gz">pt</a>
</th><td>29</td> <td>66.3M</td> <td>3.2M</td><td></td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-English (2,809,379 sentence pairs, 115.11M words) - Moses format' href="download.php?f=ParaCrawl/en-pt.txt.zip">2.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.ro.gz">ro</a>
</th><td>25</td> <td>38.6M</td> <td>2.9M</td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Romanian-English (2,459,752 sentence pairs, 65.79M words) - Moses format' href="download.php?f=ParaCrawl/en-ro.txt.zip">2.5M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=ParaCrawl/mono/ParaCrawl.raw.ru.gz">ru</a>
</th><td>121</td> <td>182.4M</td> <td>13.4M</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-English (12,059,881 sentence pairs, 292.24M words) - Moses format' href="download.php?f=ParaCrawl/en-ru.txt.zip">12.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>