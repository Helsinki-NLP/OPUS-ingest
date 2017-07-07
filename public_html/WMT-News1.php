<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>WMT-News</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>WMT-News</h1><p>A parallel corpus of News Test Sets provided by WMT for training SMT: <a href="http://www.statmt.org/wmt14/">http://www.statmt.org/wmt14/</a></p><p>7 languages, 16 bitexts<br>total number of files: 49<br>total number of tokens: 2.85M<br>total number of sentence fragments: 0.12M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download of aligned documents (in XML): <a href="download.php?f=WMT-News/WMT-News1.tar.gz">WMT-News1.tar.gz</a> (34M
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="WMT-News/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="WMT-News/de_sample.html">de</a></th>
<th><a rel="nofollow" href="WMT-News/en_sample.html">en</a></th>
<th><a rel="nofollow" href="WMT-News/es_sample.html">es</a></th>
<th><a rel="nofollow" href="WMT-News/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="WMT-News/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="WMT-News/ru_sample.html">ru</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/cs.tar.gz">cs</a></th>
<th></th>
<td><a rel="nofollow" title="Czech-German (sample file)" href="WMT-News/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="WMT-News/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="WMT-News/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="WMT-News/cs-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="WMT-News/cs-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WMT-News/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (7 aligned documents, 16.6k links, 0.7M tokens)" href="download.php?f=WMT-News/xml/cs-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="WMT-News/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="WMT-News/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="WMT-News/de-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Russian (sample file)" href="WMT-News/de-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WMT-News/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (8 aligned documents, 19.6k links, 0.9M tokens)" href="download.php?f=WMT-News/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (8 aligned documents, 19.6k links, 0.9M tokens)" href="download.php?f=WMT-News/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="WMT-News/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="WMT-News/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="WMT-News/en-hi_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="WMT-News/en-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WMT-News/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (7 aligned documents, 16.6k links, 0.8M tokens)" href="download.php?f=WMT-News/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (7 aligned documents, 16.6k links, 0.8M tokens)" href="download.php?f=WMT-News/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (7 aligned documents, 16.6k links, 0.8M tokens)" href="download.php?f=WMT-News/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="WMT-News/es-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="WMT-News/es-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WMT-News/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (7 aligned documents, 16.6k links, 0.8M tokens)" href="download.php?f=WMT-News/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (7 aligned documents, 16.6k links, 0.8M tokens)" href="download.php?f=WMT-News/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (8 aligned documents, 19.6k links, 1.0M tokens)" href="download.php?f=WMT-News/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (7 aligned documents, 16.6k links, 0.9M tokens)" href="download.php?f=WMT-News/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="French-Russian (sample file)" href="WMT-News/fr-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=WMT-News/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/hi.tar.gz">hi</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (2 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=WMT-News/xml/en-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=WMT-News/hi.raw.tar.gz">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=WMT-News/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (2 aligned documents, 6.0k links, 0.2M tokens)" href="download.php?f=WMT-News/xml/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (2 aligned documents, 6.0k links, 0.3M tokens)" href="download.php?f=WMT-News/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (3 aligned documents, 9.0k links, 0.4M tokens)" href="download.php?f=WMT-News/xml/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (2 aligned documents, 6.0k links, 0.3M tokens)" href="download.php?f=WMT-News/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (2 aligned documents, 6.0k links, 0.3M tokens)" href="download.php?f=WMT-News/xml/fr-ru.xml.gz">ces</a></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=WMT-News/ru.raw.tar.gz">ru</a></th></tr>
<tr><th></th>
<th>cs</th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>fr</th>
<th>hi</th>
<th>ru</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=WMT-News/mono/WMT-News.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=WMT-News/mono/WMT-News.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=WMT-News/mono/WMT-News.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=WMT-News/mono/WMT-News.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=WMT-News/mono/WMT-News.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=WMT-News/mono/WMT-News.hi.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=WMT-News/mono/WMT-News.ru.gz">ru</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.cs.gz">cs</a>
</th><td>8</td> <td>0.4M</td> <td>19.6k</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Czech-German (16,559 sentence pairs, 0.63M words) - TMX format' href="download.php?f=WMT-News/cs-de.tmx.gz">16.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Czech-English (19,556 sentence pairs, 0.76M words) - TMX format' href="download.php?f=WMT-News/cs-en.tmx.gz">19.6k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Czech-Spanish (16,553 sentence pairs, 0.67M words) - TMX format' href="download.php?f=WMT-News/cs-es.tmx.gz">16.6k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Czech-French (16,551 sentence pairs, 0.68M words) - TMX format' href="download.php?f=WMT-News/cs-fr.tmx.gz">16.6k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Czech-Russian (5,998 sentence pairs, 0.21M words) - TMX format' href="download.php?f=WMT-News/cs-ru.tmx.gz">6.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.de.gz">de</a>
</th><td>8</td> <td>0.5M</td> <td>19.6k</td><td bgcolor="#fffbf1"><a rel="nofollow" title='German-Czech (16,573 sentence pairs, 0.63M words) - Moses format' href="download.php?f=WMT-News/cs-de.txt.zip">16.6k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='German-English (19,565 sentence pairs, 0.80M words) - TMX format' href="download.php?f=WMT-News/de-en.tmx.gz">19.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-Spanish (16,562 sentence pairs, 0.72M words) - TMX format' href="download.php?f=WMT-News/de-es.tmx.gz">16.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-French (16,560 sentence pairs, 0.72M words) - TMX format' href="download.php?f=WMT-News/de-fr.tmx.gz">16.6k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='German-Russian (5,998 sentence pairs, 0.22M words) - TMX format' href="download.php?f=WMT-News/de-ru.tmx.gz">6.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.en.gz">en</a>
</th><td>13</td> <td>0.7M</td> <td>31.6k</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Czech (19,576 sentence pairs, 0.76M words) - Moses format' href="download.php?f=WMT-News/cs-en.txt.zip">19.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-German (19,576 sentence pairs, 0.80M words) - Moses format' href="download.php?f=WMT-News/de-en.txt.zip">19.6k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Spanish (16,555 sentence pairs, 0.73M words) - TMX format' href="download.php?f=WMT-News/en-es.tmx.gz">16.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='English-French (19,557 sentence pairs, 0.86M words) - TMX format' href="download.php?f=WMT-News/en-fr.tmx.gz">19.6k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='English-Hindi (3,026 sentence pairs, 0.12M words) - TMX format' href="download.php?f=WMT-News/en-hi.tmx.gz">3.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='English-Russian (9,003 sentence pairs, 0.34M words) - TMX format' href="download.php?f=WMT-News/en-ru.tmx.gz">9.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.es.gz">es</a>
</th><td>7</td> <td>0.4M</td> <td>16.6k</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Spanish-Czech (16,573 sentence pairs, 0.67M words) - Moses format' href="download.php?f=WMT-News/cs-es.txt.zip">16.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Spanish-German (16,573 sentence pairs, 0.72M words) - Moses format' href="download.php?f=WMT-News/de-es.txt.zip">16.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Spanish-English (16,573 sentence pairs, 0.73M words) - Moses format' href="download.php?f=WMT-News/en-es.txt.zip">16.6k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Spanish-French (16,550 sentence pairs, 0.76M words) - TMX format' href="download.php?f=WMT-News/es-fr.tmx.gz">16.6k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Spanish-Russian (5,999 sentence pairs, 0.23M words) - TMX format' href="download.php?f=WMT-News/es-ru.tmx.gz">6.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.fr.gz">fr</a>
</th><td>8</td> <td>0.5M</td> <td>19.6k</td><td bgcolor="#fffbf1"><a rel="nofollow" title='French-Czech (16,573 sentence pairs, 0.68M words) - Moses format' href="download.php?f=WMT-News/cs-fr.txt.zip">16.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='French-German (16,573 sentence pairs, 0.72M words) - Moses format' href="download.php?f=WMT-News/de-fr.txt.zip">16.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='French-English (19,576 sentence pairs, 0.86M words) - Moses format' href="download.php?f=WMT-News/en-fr.txt.zip">19.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='French-Spanish (16,573 sentence pairs, 0.76M words) - Moses format' href="download.php?f=WMT-News/es-fr.txt.zip">16.6k</a>
</td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='French-Russian (5,998 sentence pairs, 0.23M words) - TMX format' href="download.php?f=WMT-News/fr-ru.tmx.gz">6.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.hi.gz">hi</a>
</th><td>2</td> <td>0.1M</td> <td>3.0k</td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Hindi-English (3,027 sentence pairs, 0.12M words) - Moses format' href="download.php?f=WMT-News/en-hi.txt.zip">3.0k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=WMT-News/mono/WMT-News.raw.ru.gz">ru</a>
</th><td>3</td> <td>0.2M</td> <td>9.0k</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Czech (6,003 sentence pairs, 0.21M words) - Moses format' href="download.php?f=WMT-News/cs-ru.txt.zip">6.0k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Russian-German (6,003 sentence pairs, 0.22M words) - Moses format' href="download.php?f=WMT-News/de-ru.txt.zip">6.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Russian-English (9,006 sentence pairs, 0.34M words) - Moses format' href="download.php?f=WMT-News/en-ru.txt.zip">9.0k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Russian-Spanish (6,003 sentence pairs, 0.23M words) - Moses format' href="download.php?f=WMT-News/es-ru.txt.zip">6.0k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Russian-French (6,003 sentence pairs, 0.23M words) - Moses format' href="download.php?f=WMT-News/fr-ru.txt.zip">6.0k</a>
</td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>