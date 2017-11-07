<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MultiUN</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MultiUN</h1>This is a collection of translated documents from the United Nations originally compiled by Andreas Eisele and Yu Chen (see <a href="http://www.euromatrixplus.net/multi-un/">http://www.euromatrixplus.net/multi-un/</a>). Please cite <a href="http://www.dfki.de/lt/publication_show.php?id=4790">MultiUN: A Multilingual corpus from United Nation Documents, Andreas Eisele and Yu Chen, LREC 2010</a><p>7 languages, 21 bitexts<br>total number of files: 420,404<br>total number of tokens: 1.64G<br>total number of sentence fragments: 69.30M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/>
<!--
<h3>Download
</h3>Complete download (XML): <a href="download.php?f=MultiUN/MultiUN1.tar.gz">MultiUN1.tar.gz</a> (25G
)<br>
-->
<p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MultiUN/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="MultiUN/de_sample.html">de</a></th>
<th><a rel="nofollow" href="MultiUN/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MultiUN/es_sample.html">es</a></th>
<th><a rel="nofollow" href="MultiUN/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="MultiUN/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="MultiUN/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/ar.tar.gz">ar</a></th>
<th></th>
<td><a rel="nofollow" title="Arabic-German (sample file)" href="MultiUN/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="MultiUN/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="MultiUN/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="MultiUN/ar-fr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="MultiUN/ar-ru_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="MultiUN/ar-zh_sample.html">view</a></td><th>ar</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (3,784 aligned documents, 0.2M links, 11.4M tokens)" href="download.php?f=MultiUN/ar-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="MultiUN/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="MultiUN/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="MultiUN/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="MultiUN/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="MultiUN/de-zh_sample.html">view</a></td><th>de</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (67,617 aligned documents, 10.6M links, 552.8M tokens)" href="download.php?f=MultiUN/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (3,750 aligned documents, 0.2M links, 12.0M tokens)" href="download.php?f=MultiUN/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="MultiUN/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="MultiUN/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="MultiUN/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="MultiUN/en-zh_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (67,567 aligned documents, 10.9M links, 288.5M tokens)" href="download.php?f=MultiUN/ar-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (3,739 aligned documents, 0.2M links, 6.2M tokens)" href="download.php?f=MultiUN/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (73,047 aligned documents, 12.2M links, 359.9M tokens)" href="download.php?f=MultiUN/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="MultiUN/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="MultiUN/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="MultiUN/es-zh_sample.html">view</a></td><th>es</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (67,523 aligned documents, 10.7M links, 617.0M tokens)" href="download.php?f=MultiUN/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (3,738 aligned documents, 0.2M links, 13.3M tokens)" href="download.php?f=MultiUN/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (87,480 aligned documents, 14.2M links, 828.4M tokens)" href="download.php?f=MultiUN/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (72,681 aligned documents, 12.1M links, 429.8M tokens)" href="download.php?f=MultiUN/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Russian (sample file)" href="MultiUN/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="MultiUN/fr-zh_sample.html">view</a></td><th>fr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (67,529 aligned documents, 11.0M links, 541.0M tokens)" href="download.php?f=MultiUN/ar-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (3,741 aligned documents, 0.2M links, 11.5M tokens)" href="download.php?f=MultiUN/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (79,147 aligned documents, 13.0M links, 647.7M tokens)" href="download.php?f=MultiUN/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (68,677 aligned documents, 11.6M links, 312.0M tokens)" href="download.php?f=MultiUN/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (79,010 aligned documents, 13.0M links, 716.8M tokens)" href="download.php?f=MultiUN/fr-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Chinese (sample file)" href="MultiUN/ru-zh_sample.html">view</a></td><th>ru</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MultiUN/zh.tar.gz">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (67,316 aligned documents, 10.9M links, 343.5M tokens)" href="download.php?f=MultiUN/ar-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (3,993 aligned documents, 0.2M links, 7.8M tokens)" href="download.php?f=MultiUN/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (67,167 aligned documents, 10.5M links, 368.2M tokens)" href="download.php?f=MultiUN/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (67,016 aligned documents, 10.8M links, 105.0M tokens)" href="download.php?f=MultiUN/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (67,052 aligned documents, 10.6M links, 431.5M tokens)" href="download.php?f=MultiUN/fr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (67,175 aligned documents, 11.2M links, 357.5M tokens)" href="download.php?f=MultiUN/ru-zh.xml.gz">ces</a></td>
<th></th>
<th>zh</th></tr>
<tr><th></th>
<th>ar</th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>fr</th>
<th>ru</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>ar</th><th>de</th><th>en</th><th>es</th><th>fr</th><th>ru</th><th>zh</th></tr> <tr><th>ar</th><td>68,870</td> <td>271.5M</td> <td>11.1M</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Arabic-German (141,054 sentence pairs, 9.13M words) - TMX format' href="download.php?f=MultiUN/ar-de.tmx.gz">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-English (8,232,775 sentence pairs, 429.85M words) - TMX format' href="download.php?f=MultiUN/ar-en.tmx.gz">8.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-Spanish (8,571,066 sentence pairs, 480.10M words) - TMX format' href="download.php?f=MultiUN/ar-es.tmx.gz">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-French (8,465,983 sentence pairs, 469.14M words) - TMX format' href="download.php?f=MultiUN/ar-fr.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-Russian (8,578,526 sentence pairs, 410.26M words) - TMX format' href="download.php?f=MultiUN/ar-ru.tmx.gz">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Arabic-Chinese (8,406,222 sentence pairs, 212.07M words) - TMX format' href="download.php?f=MultiUN/ar-zh.tmx.gz">8.4M</a>
</td></tr> <tr><th>de</th><td>4,034</td> <td>6.7M</td> <td>0.2M</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='German-Arabic (165,090 sentence pairs, 9.63M words) - Moses format' href="download.php?f=MultiUN/ar-de.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='German-English (127,388 sentence pairs, 9.03M words) - TMX format' href="download.php?f=MultiUN/de-en.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='German-Spanish (132,540 sentence pairs, 10.25M words) - TMX format' href="download.php?f=MultiUN/de-es.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='German-French (133,185 sentence pairs, 9.94M words) - TMX format' href="download.php?f=MultiUN/de-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Russian (132,147 sentence pairs, 8.57M words) - TMX format' href="download.php?f=MultiUN/de-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='German-Chinese (149,468 sentence pairs, 4.99M words) - TMX format' href="download.php?f=MultiUN/de-zh.tmx.gz">0.1M</a>
</td></tr> <tr><th>en</th><td>100,373</td> <td>443.5M</td> <td>17.2M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Arabic (9,759,125 sentence pairs, 470.66M words) - Moses format' href="download.php?f=MultiUN/ar-en.txt.zip">9.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-German (162,981 sentence pairs, 10.19M words) - Moses format' href="download.php?f=MultiUN/de-en.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (9,275,905 sentence pairs, 554.86M words) - TMX format' href="download.php?f=MultiUN/en-es.tmx.gz">9.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (10,480,212 sentence pairs, 603.22M words) - TMX format' href="download.php?f=MultiUN/en-fr.tmx.gz">10.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Russian (9,473,527 sentence pairs, 472.76M words) - TMX format' href="download.php?f=MultiUN/en-ru.tmx.gz">9.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Chinese (8,040,926 sentence pairs, 234.23M words) - TMX format' href="download.php?f=MultiUN/en-zh.tmx.gz">8.0M</a>
</td></tr> <tr><th>es</th><td>5,683</td> <td>30.1M</td> <td>1.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Arabic (10,119,379 sentence pairs, 521.87M words) - Moses format' href="download.php?f=MultiUN/ar-es.txt.zip">10.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Spanish-German (162,078 sentence pairs, 11.07M words) - Moses format' href="download.php?f=MultiUN/de-es.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (11,350,967 sentence pairs, 621.02M words) - Moses format' href="download.php?f=MultiUN/en-es.txt.zip">11.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (9,438,110 sentence pairs, 595.18M words) - TMX format' href="download.php?f=MultiUN/es-fr.tmx.gz">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Russian (8,754,497 sentence pairs, 480.51M words) - TMX format' href="download.php?f=MultiUN/es-ru.tmx.gz">8.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Chinese (8,366,483 sentence pairs, 276.77M words) - TMX format' href="download.php?f=MultiUN/es-zh.tmx.gz">8.4M</a>
</td></tr> <tr><th>fr</th><td>90,826</td> <td>474.3M</td> <td>14.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Arabic (9,929,567 sentence pairs, 507.91M words) - Moses format' href="download.php?f=MultiUN/ar-fr.txt.zip">9.9M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='French-German (164,025 sentence pairs, 10.84M words) - Moses format' href="download.php?f=MultiUN/de-fr.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (13,172,019 sentence pairs, 682.27M words) - Moses format' href="download.php?f=MultiUN/en-fr.txt.zip">13.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (11,441,889 sentence pairs, 657.87M words) - Moses format' href="download.php?f=MultiUN/es-fr.txt.zip">11.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Russian (9,706,565 sentence pairs, 515.35M words) - TMX format' href="download.php?f=MultiUN/fr-ru.tmx.gz">9.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Chinese (8,287,626 sentence pairs, 267.45M words) - TMX format' href="download.php?f=MultiUN/fr-zh.tmx.gz">8.3M</a>
</td></tr> <tr><th>ru</th><td>81,258</td> <td>328.5M</td> <td>13.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-Arabic (10,206,243 sentence pairs, 450.09M words) - Moses format' href="download.php?f=MultiUN/ar-ru.txt.zip">10.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Russian-German (164,792 sentence pairs, 9.50M words) - Moses format' href="download.php?f=MultiUN/de-ru.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-English (11,654,416 sentence pairs, 533.69M words) - Moses format' href="download.php?f=MultiUN/en-ru.txt.zip">11.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-Spanish (10,605,056 sentence pairs, 535.28M words) - Moses format' href="download.php?f=MultiUN/es-ru.txt.zip">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-French (11,761,738 sentence pairs, 572.32M words) - Moses format' href="download.php?f=MultiUN/fr-ru.txt.zip">11.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Russian-Chinese (8,166,238 sentence pairs, 190.99M words) - TMX format' href="download.php?f=MultiUN/ru-zh.tmx.gz">8.2M</a>
</td></tr> <tr><th>zh</th><td>69,360</td> <td>83.1M</td> <td>10.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-Arabic (9,832,293 sentence pairs, 231.17M words) - Moses format' href="download.php?f=MultiUN/ar-zh.txt.zip">9.8M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-German (176,933 sentence pairs, 5.37M words) - Moses format' href="download.php?f=MultiUN/de-zh.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-English (9,564,315 sentence pairs, 259.72M words) - Moses format' href="download.php?f=MultiUN/en-zh.txt.zip">9.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-Spanish (9,847,770 sentence pairs, 303.59M words) - Moses format' href="download.php?f=MultiUN/es-zh.txt.zip">9.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-French (9,690,914 sentence pairs, 291.49M words) - Moses format' href="download.php?f=MultiUN/fr-zh.txt.zip">9.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Chinese-Russian (9,557,007 sentence pairs, 209.74M words) - Moses format' href="download.php?f=MultiUN/ru-zh.txt.zip">9.6M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>