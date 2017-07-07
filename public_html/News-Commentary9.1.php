<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>News-Commentary</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>News-Commentary</h1><p>A parallel corpus of News Commentaries provided by WMT for training SMT. The source is taken from CASMACAT: <a href="http://www.casmacat.eu/corpus/news-commentary">http://www.casmacat.eu/corpus/news-commentary</a></p><p>12 languages, 63 bitexts<br>total number of files: 126<br>total number of tokens: 203.21M<br>total number of sentence fragments: 7.71M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download of aligned documents (in XML): <a href="download.php?f=News-Commentary/News-Commentary9.1.tar.gz">News-Commentary9.1.tar.gz</a> (2.5G
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="News-Commentary/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="News-Commentary/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="News-Commentary/de_sample.html">de</a></th>
<th><a rel="nofollow" href="News-Commentary/en_sample.html">en</a></th>
<th><a rel="nofollow" href="News-Commentary/es_sample.html">es</a></th>
<th><a rel="nofollow" href="News-Commentary/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="News-Commentary/it_sample.html">it</a></th>
<th><a rel="nofollow" href="News-Commentary/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="News-Commentary/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="News-Commentary/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="News-Commentary/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="News-Commentary/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/ar.tar.gz">ar</a></th>
<th></th>
<td><a rel="nofollow" title="Arabic-Czech (sample file)" href="News-Commentary/ar-cs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="News-Commentary/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="News-Commentary/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="News-Commentary/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="News-Commentary/ar-fr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="News-Commentary/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="News-Commentary/ar-ja_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="News-Commentary/ar-nl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="News-Commentary/ar-pt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="News-Commentary/ar-ru_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="News-Commentary/ar-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/cs.tar.gz">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (0.1M links, 5.6M tokens)" href="download.php?f=News-Commentary/xml/ar-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-German (sample file)" href="News-Commentary/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="News-Commentary/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="News-Commentary/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="News-Commentary/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="News-Commentary/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="News-Commentary/cs-ja_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="News-Commentary/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="News-Commentary/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="News-Commentary/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="News-Commentary/cs-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (0.1M links, 7.8M tokens)" href="download.php?f=News-Commentary/xml/ar-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (0.1M links, 6.4M tokens)" href="download.php?f=News-Commentary/xml/cs-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="News-Commentary/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="News-Commentary/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="News-Commentary/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="News-Commentary/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="News-Commentary/de-ja_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="News-Commentary/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="News-Commentary/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="News-Commentary/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="News-Commentary/de-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (0.2M links, 9.2M tokens)" href="download.php?f=News-Commentary/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (0.1M links, 6.8M tokens)" href="download.php?f=News-Commentary/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (0.2M links, 10.1M tokens)" href="download.php?f=News-Commentary/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="News-Commentary/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="News-Commentary/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="News-Commentary/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="News-Commentary/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="News-Commentary/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="News-Commentary/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="News-Commentary/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="News-Commentary/en-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (0.2M links, 9.0M tokens)" href="download.php?f=News-Commentary/xml/ar-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (0.1M links, 7.0M tokens)" href="download.php?f=News-Commentary/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (0.2M links, 9.3M tokens)" href="download.php?f=News-Commentary/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (0.2M links, 10.4M tokens)" href="download.php?f=News-Commentary/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="News-Commentary/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="News-Commentary/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="News-Commentary/es-ja_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="News-Commentary/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="News-Commentary/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="News-Commentary/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="News-Commentary/es-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (0.1M links, 8.2M tokens)" href="download.php?f=News-Commentary/xml/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (0.1M links, 3.3M tokens)" href="download.php?f=News-Commentary/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (0.2M links, 8.8M tokens)" href="download.php?f=News-Commentary/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (0.2M links, 10.1M tokens)" href="download.php?f=News-Commentary/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (0.2M links, 9.1M tokens)" href="download.php?f=News-Commentary/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Italian (sample file)" href="News-Commentary/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="News-Commentary/fr-ja_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="News-Commentary/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="News-Commentary/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="News-Commentary/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="News-Commentary/fr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (26.4k links, 1.5M tokens)" href="download.php?f=News-Commentary/xml/ar-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (13.1k links, 0.7M tokens)" href="download.php?f=News-Commentary/xml/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (14.2k links, 0.8M tokens)" href="download.php?f=News-Commentary/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (18.6k links, 1.0M tokens)" href="download.php?f=News-Commentary/xml/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (18.3k links, 1.1M tokens)" href="download.php?f=News-Commentary/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (13.6k links, 0.8M tokens)" href="download.php?f=News-Commentary/xml/fr-it.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="News-Commentary/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="News-Commentary/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="News-Commentary/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="News-Commentary/it-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/ja.tar.gz">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (1.1k links, 52.2k tokens)" href="download.php?f=News-Commentary/xml/ar-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (1.2k links, 50.6k tokens)" href="download.php?f=News-Commentary/xml/cs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (1.2k links, 51.5k tokens)" href="download.php?f=News-Commentary/xml/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (1.2k links, 57.2k tokens)" href="download.php?f=News-Commentary/xml/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (1.2k links, 57.1k tokens)" href="download.php?f=News-Commentary/xml/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (1.0k links, 51.5k tokens)" href="download.php?f=News-Commentary/xml/fr-ja.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="News-Commentary/ja-ru_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="News-Commentary/ja-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/ja.raw.tar.gz">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/nl.tar.gz">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (9.9k links, 0.5M tokens)" href="download.php?f=News-Commentary/xml/ar-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (6.2k links, 0.3M tokens)" href="download.php?f=News-Commentary/xml/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (0.5k links, 30.3k tokens)" href="download.php?f=News-Commentary/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (1.8k links, 96.3k tokens)" href="download.php?f=News-Commentary/xml/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (3.7k links, 0.2M tokens)" href="download.php?f=News-Commentary/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (0.5k links, 32.1k tokens)" href="download.php?f=News-Commentary/xml/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (4.7k links, 0.3M tokens)" href="download.php?f=News-Commentary/xml/it-nl.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="News-Commentary/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="News-Commentary/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="News-Commentary/nl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (21.3k links, 1.2M tokens)" href="download.php?f=News-Commentary/xml/ar-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (10.0k links, 0.5M tokens)" href="download.php?f=News-Commentary/xml/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (5.8k links, 0.3M tokens)" href="download.php?f=News-Commentary/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (7.3k links, 0.4M tokens)" href="download.php?f=News-Commentary/xml/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (9.2k links, 0.5M tokens)" href="download.php?f=News-Commentary/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (6.0k links, 0.4M tokens)" href="download.php?f=News-Commentary/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (3.7k links, 0.2M tokens)" href="download.php?f=News-Commentary/xml/it-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (3.4k links, 0.2M tokens)" href="download.php?f=News-Commentary/xml/nl-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="News-Commentary/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="News-Commentary/pt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (0.1M links, 6.5M tokens)" href="download.php?f=News-Commentary/xml/ar-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (0.1M links, 6.0M tokens)" href="download.php?f=News-Commentary/xml/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (0.2M links, 7.8M tokens)" href="download.php?f=News-Commentary/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (0.2M links, 8.5M tokens)" href="download.php?f=News-Commentary/xml/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (0.2M links, 8.0M tokens)" href="download.php?f=News-Commentary/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (0.1M links, 7.6M tokens)" href="download.php?f=News-Commentary/xml/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (9.7k links, 0.5M tokens)" href="download.php?f=News-Commentary/xml/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (1.2k links, 49.5k tokens)" href="download.php?f=News-Commentary/xml/ja-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (0.5k links, 28.5k tokens)" href="download.php?f=News-Commentary/xml/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (3.9k links, 0.2M tokens)" href="download.php?f=News-Commentary/xml/pt-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Chinese (sample file)" href="News-Commentary/ru-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=News-Commentary/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=News-Commentary/zh.tar.gz">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (84.4k links, 4.0M tokens)" href="download.php?f=News-Commentary/xml/ar-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (55.5k links, 2.3M tokens)" href="download.php?f=News-Commentary/xml/cs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (81.8k links, 3.6M tokens)" href="download.php?f=News-Commentary/xml/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (91.6k links, 4.2M tokens)" href="download.php?f=News-Commentary/xml/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (74.2k links, 3.8M tokens)" href="download.php?f=News-Commentary/xml/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (77.8k links, 4.0M tokens)" href="download.php?f=News-Commentary/xml/fr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (6.5k links, 0.3M tokens)" href="download.php?f=News-Commentary/xml/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (0.6k links, 21.1k tokens)" href="download.php?f=News-Commentary/xml/ja-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (1.7k links, 78.6k tokens)" href="download.php?f=News-Commentary/xml/nl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (5.4k links, 0.3M tokens)" href="download.php?f=News-Commentary/xml/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (70.6k links, 2.9M tokens)" href="download.php?f=News-Commentary/xml/ru-zh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=News-Commentary/zh.raw.tar.gz">zh</a></th></tr>
<tr><th></th>
<th>ar</th>
<th>cs</th>
<th>de</th>
<th>en</th>
<th>es</th>
<th>fr</th>
<th>it</th>
<th>ja</th>
<th>nl</th>
<th>pt</th>
<th>ru</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=News-Commentary/mono/News-Commentary.ar.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=News-Commentary/mono/News-Commentary.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=News-Commentary/mono/News-Commentary.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=News-Commentary/mono/News-Commentary.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=News-Commentary/mono/News-Commentary.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=News-Commentary/mono/News-Commentary.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=News-Commentary/mono/News-Commentary.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=News-Commentary/mono/News-Commentary.ja.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=News-Commentary/mono/News-Commentary.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=News-Commentary/mono/News-Commentary.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=News-Commentary/mono/News-Commentary.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=News-Commentary/mono/News-Commentary.zh.gz">zh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.ar.gz">ar</a>
</th><td>11</td> <td>27.7M</td> <td>1.0M</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Arabic-Czech (114,000 sentence pairs, 5.02M words) - TMX format' href="download.php?f=News-Commentary/ar-cs.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Arabic-German (147,118 sentence pairs, 6.98M words) - TMX format' href="download.php?f=News-Commentary/ar-de.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Arabic-English (174,565 sentence pairs, 8.19M words) - TMX format' href="download.php?f=News-Commentary/ar-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Arabic-Spanish (158,154 sentence pairs, 8.19M words) - TMX format' href="download.php?f=News-Commentary/ar-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Arabic-French (142,252 sentence pairs, 7.27M words) - TMX format' href="download.php?f=News-Commentary/ar-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Arabic-Italian (26,069 sentence pairs, 1.31M words) - TMX format' href="download.php?f=News-Commentary/ar-it.tmx.gz">26.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Arabic-Japanese (569 sentence pairs, 27.83k words) - TMX format' href="download.php?f=News-Commentary/ar-ja.tmx.gz">0.6k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Arabic-Dutch (9,602 sentence pairs, 0.47M words) - TMX format' href="download.php?f=News-Commentary/ar-nl.tmx.gz">9.6k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Arabic-Portuguese (20,820 sentence pairs, 1.04M words) - TMX format' href="download.php?f=News-Commentary/ar-pt.tmx.gz">20.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Arabic-Russian (127,549 sentence pairs, 5.73M words) - TMX format' href="download.php?f=News-Commentary/ar-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Arabic-Chinese (47,585 sentence pairs, 2.15M words) - TMX format' href="download.php?f=News-Commentary/ar-zh.tmx.gz">47.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.cs.gz">cs</a>
</th><td>11</td> <td>20.0M</td> <td>0.9M</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-Arabic (114,601 sentence pairs, 5.03M words) - Moses format' href="download.php?f=News-Commentary/ar-cs.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Czech-German (134,744 sentence pairs, 5.61M words) - TMX format' href="download.php?f=News-Commentary/cs-de.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Czech-English (145,952 sentence pairs, 5.95M words) - TMX format' href="download.php?f=News-Commentary/cs-en.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Czech-Spanish (139,729 sentence pairs, 6.34M words) - TMX format' href="download.php?f=News-Commentary/cs-es.tmx.gz">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-French (111,832 sentence pairs, 5.02M words) - TMX format' href="download.php?f=News-Commentary/cs-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Czech-Italian (12,929 sentence pairs, 0.60M words) - TMX format' href="download.php?f=News-Commentary/cs-it.tmx.gz">12.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Czech-Japanese (622 sentence pairs, 26.07k words) - TMX format' href="download.php?f=News-Commentary/cs-ja.tmx.gz">0.6k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Czech-Dutch (6,088 sentence pairs, 0.29M words) - TMX format' href="download.php?f=News-Commentary/cs-nl.tmx.gz">6.1k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Czech-Portuguese (9,759 sentence pairs, 0.45M words) - TMX format' href="download.php?f=News-Commentary/cs-pt.tmx.gz">9.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-Russian (128,333 sentence pairs, 5.16M words) - TMX format' href="download.php?f=News-Commentary/cs-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Czech-Chinese (29,670 sentence pairs, 1.26M words) - TMX format' href="download.php?f=News-Commentary/cs-zh.tmx.gz">29.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.de.gz">de</a>
</th><td>11</td> <td>28.1M</td> <td>1.1M</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='German-Arabic (147,221 sentence pairs, 6.98M words) - Moses format' href="download.php?f=News-Commentary/ar-de.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='German-Czech (134,923 sentence pairs, 5.61M words) - Moses format' href="download.php?f=News-Commentary/cs-de.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-English (200,306 sentence pairs, 8.87M words) - TMX format' href="download.php?f=News-Commentary/de-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Spanish (171,674 sentence pairs, 8.45M words) - TMX format' href="download.php?f=News-Commentary/de-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='German-French (158,736 sentence pairs, 7.75M words) - TMX format' href="download.php?f=News-Commentary/de-fr.tmx.gz">0.2M</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='German-Italian (14,145 sentence pairs, 0.68M words) - TMX format' href="download.php?f=News-Commentary/de-it.tmx.gz">14.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Japanese (582 sentence pairs, 27.48k words) - TMX format' href="download.php?f=News-Commentary/de-ja.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Dutch (519 sentence pairs, 27.27k words) - TMX format' href="download.php?f=News-Commentary/de-nl.tmx.gz">0.5k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='German-Portuguese (5,721 sentence pairs, 0.28M words) - TMX format' href="download.php?f=News-Commentary/de-pt.tmx.gz">5.7k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='German-Russian (157,039 sentence pairs, 6.79M words) - TMX format' href="download.php?f=News-Commentary/de-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='German-Chinese (44,008 sentence pairs, 2.08M words) - TMX format' href="download.php?f=News-Commentary/de-zh.tmx.gz">44.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.en.gz">en</a>
</th><td>11</td> <td>31.3M</td> <td>1.2M</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='English-Arabic (174,753 sentence pairs, 8.20M words) - Moses format' href="download.php?f=News-Commentary/ar-en.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='English-Czech (146,231 sentence pairs, 5.95M words) - Moses format' href="download.php?f=News-Commentary/cs-en.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-German (200,742 sentence pairs, 8.88M words) - Moses format' href="download.php?f=News-Commentary/de-en.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Spanish (193,452 sentence pairs, 9.34M words) - TMX format' href="download.php?f=News-Commentary/en-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-French (182,509 sentence pairs, 8.77M words) - TMX format' href="download.php?f=News-Commentary/en-fr.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='English-Italian (18,489 sentence pairs, 0.88M words) - TMX format' href="download.php?f=News-Commentary/en-it.tmx.gz">18.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Japanese (637 sentence pairs, 30.03k words) - TMX format' href="download.php?f=News-Commentary/en-ja.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='English-Dutch (1,808 sentence pairs, 85.40k words) - TMX format' href="download.php?f=News-Commentary/en-nl.tmx.gz">1.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='English-Portuguese (7,231 sentence pairs, 0.35M words) - TMX format' href="download.php?f=News-Commentary/en-pt.tmx.gz">7.2k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='English-Russian (163,747 sentence pairs, 7.25M words) - TMX format' href="download.php?f=News-Commentary/en-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='English-Chinese (50,488 sentence pairs, 2.40M words) - TMX format' href="download.php?f=News-Commentary/en-zh.tmx.gz">50.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.es.gz">es</a>
</th><td>11</td> <td>31.7M</td> <td>1.1M</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Spanish-Arabic (158,635 sentence pairs, 8.20M words) - Moses format' href="download.php?f=News-Commentary/ar-es.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Spanish-Czech (140,136 sentence pairs, 6.34M words) - Moses format' href="download.php?f=News-Commentary/cs-es.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Spanish-German (171,874 sentence pairs, 8.45M words) - Moses format' href="download.php?f=News-Commentary/de-es.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Spanish-English (193,790 sentence pairs, 9.35M words) - Moses format' href="download.php?f=News-Commentary/en-es.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Spanish-French (154,111 sentence pairs, 8.15M words) - TMX format' href="download.php?f=News-Commentary/es-fr.tmx.gz">0.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Spanish-Italian (18,135 sentence pairs, 0.98M words) - TMX format' href="download.php?f=News-Commentary/es-it.tmx.gz">18.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Japanese (602 sentence pairs, 32.51k words) - TMX format' href="download.php?f=News-Commentary/es-ja.tmx.gz">0.6k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Spanish-Dutch (3,629 sentence pairs, 0.19M words) - TMX format' href="download.php?f=News-Commentary/es-nl.tmx.gz">3.6k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Spanish-Portuguese (9,073 sentence pairs, 0.49M words) - TMX format' href="download.php?f=News-Commentary/es-pt.tmx.gz">9.1k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Spanish-Russian (150,383 sentence pairs, 7.09M words) - TMX format' href="download.php?f=News-Commentary/es-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Spanish-Chinese (41,744 sentence pairs, 2.34M words) - TMX format' href="download.php?f=News-Commentary/es-zh.tmx.gz">41.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.fr.gz">fr</a>
</th><td>11</td> <td>28.2M</td> <td>1.0M</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='French-Arabic (142,308 sentence pairs, 7.27M words) - Moses format' href="download.php?f=News-Commentary/ar-fr.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='French-Czech (112,135 sentence pairs, 5.02M words) - Moses format' href="download.php?f=News-Commentary/cs-fr.txt.zip">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='French-German (158,969 sentence pairs, 7.76M words) - Moses format' href="download.php?f=News-Commentary/de-fr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='French-English (182,761 sentence pairs, 8.77M words) - Moses format' href="download.php?f=News-Commentary/en-fr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='French-Spanish (154,338 sentence pairs, 8.16M words) - Moses format' href="download.php?f=News-Commentary/es-fr.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='French-Italian (13,558 sentence pairs, 0.72M words) - TMX format' href="download.php?f=News-Commentary/fr-it.tmx.gz">13.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-Japanese (519 sentence pairs, 27.26k words) - TMX format' href="download.php?f=News-Commentary/fr-ja.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-Dutch (522 sentence pairs, 28.48k words) - TMX format' href="download.php?f=News-Commentary/fr-nl.tmx.gz">0.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='French-Portuguese (5,965 sentence pairs, 0.32M words) - TMX format' href="download.php?f=News-Commentary/fr-pt.tmx.gz">6.0k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='French-Russian (140,240 sentence pairs, 6.55M words) - TMX format' href="download.php?f=News-Commentary/fr-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='French-Chinese (42,662 sentence pairs, 2.33M words) - TMX format' href="download.php?f=News-Commentary/fr-zh.tmx.gz">42.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.it.gz">it</a>
</th><td>10</td> <td>3.8M</td> <td>0.1M</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Italian-Arabic (26,303 sentence pairs, 1.31M words) - Moses format' href="download.php?f=News-Commentary/ar-it.txt.zip">26.3k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Italian-Czech (13,115 sentence pairs, 0.60M words) - Moses format' href="download.php?f=News-Commentary/cs-it.txt.zip">13.1k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Italian-German (14,146 sentence pairs, 0.68M words) - Moses format' href="download.php?f=News-Commentary/de-it.txt.zip">14.1k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Italian-English (18,511 sentence pairs, 0.88M words) - Moses format' href="download.php?f=News-Commentary/en-it.txt.zip">18.5k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Italian-Spanish (18,247 sentence pairs, 0.98M words) - Moses format' href="download.php?f=News-Commentary/es-it.txt.zip">18.2k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Italian-French (13,559 sentence pairs, 0.72M words) - Moses format' href="download.php?f=News-Commentary/fr-it.txt.zip">13.6k</a>
</td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Italian-Dutch (4,640 sentence pairs, 0.24M words) - TMX format' href="download.php?f=News-Commentary/it-nl.tmx.gz">4.6k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Italian-Portuguese (3,544 sentence pairs, 0.19M words) - TMX format' href="download.php?f=News-Commentary/it-pt.tmx.gz">3.5k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Italian-Russian (9,640 sentence pairs, 0.45M words) - TMX format' href="download.php?f=News-Commentary/it-ru.tmx.gz">9.6k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Italian-Chinese (3,731 sentence pairs, 0.20M words) - TMX format' href="download.php?f=News-Commentary/it-zh.tmx.gz">3.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.ja.gz">ja</a>
</th><td>8</td> <td>99.8k</td> <td>4.7k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Japanese-Arabic (569 sentence pairs, 27.83k words) - Moses format' href="download.php?f=News-Commentary/ar-ja.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Japanese-Czech (622 sentence pairs, 26.07k words) - Moses format' href="download.php?f=News-Commentary/cs-ja.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Japanese-German (582 sentence pairs, 27.48k words) - Moses format' href="download.php?f=News-Commentary/de-ja.txt.zip">0.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Japanese-English (637 sentence pairs, 30.03k words) - Moses format' href="download.php?f=News-Commentary/en-ja.txt.zip">0.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Japanese-Spanish (602 sentence pairs, 32.51k words) - Moses format' href="download.php?f=News-Commentary/es-ja.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Japanese-French (519 sentence pairs, 27.26k words) - Moses format' href="download.php?f=News-Commentary/fr-ja.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Japanese-Russian (586 sentence pairs, 23.92k words) - TMX format' href="download.php?f=News-Commentary/ja-ru.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Chinese (570 sentence pairs, 1.82k words) - TMX format' href="download.php?f=News-Commentary/ja-zh.tmx.gz">0.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.nl.gz">nl</a>
</th><td>10</td> <td>0.9M</td> <td>33.0k</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Dutch-Arabic (9,814 sentence pairs, 0.48M words) - Moses format' href="download.php?f=News-Commentary/ar-nl.txt.zip">9.8k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Dutch-Czech (6,228 sentence pairs, 0.29M words) - Moses format' href="download.php?f=News-Commentary/cs-nl.txt.zip">6.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-German (519 sentence pairs, 27.27k words) - Moses format' href="download.php?f=News-Commentary/de-nl.txt.zip">0.5k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Dutch-English (1,814 sentence pairs, 85.46k words) - Moses format' href="download.php?f=News-Commentary/en-nl.txt.zip">1.8k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Dutch-Spanish (3,698 sentence pairs, 0.19M words) - Moses format' href="download.php?f=News-Commentary/es-nl.txt.zip">3.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-French (522 sentence pairs, 28.48k words) - Moses format' href="download.php?f=News-Commentary/fr-nl.txt.zip">0.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Dutch-Italian (4,739 sentence pairs, 0.24M words) - Moses format' href="download.php?f=News-Commentary/it-nl.txt.zip">4.7k</a>
</td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Dutch-Portuguese (3,328 sentence pairs, 0.17M words) - TMX format' href="download.php?f=News-Commentary/nl-pt.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-Russian (476 sentence pairs, 24.75k words) - TMX format' href="download.php?f=News-Commentary/nl-ru.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Dutch-Chinese (888 sentence pairs, 46.19k words) - TMX format' href="download.php?f=News-Commentary/nl-zh.tmx.gz">0.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.pt.gz">pt</a>
</th><td>10</td> <td>2.3M</td> <td>75.9k</td><td bgcolor="#ffffef"><a rel="nofollow" title='Portuguese-Arabic (21,183 sentence pairs, 1.05M words) - Moses format' href="download.php?f=News-Commentary/ar-pt.txt.zip">21.2k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Portuguese-Czech (10,022 sentence pairs, 0.46M words) - Moses format' href="download.php?f=News-Commentary/cs-pt.txt.zip">10.0k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Portuguese-German (5,723 sentence pairs, 0.28M words) - Moses format' href="download.php?f=News-Commentary/de-pt.txt.zip">5.7k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Portuguese-English (7,242 sentence pairs, 0.35M words) - Moses format' href="download.php?f=News-Commentary/en-pt.txt.zip">7.2k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Portuguese-Spanish (9,186 sentence pairs, 0.49M words) - Moses format' href="download.php?f=News-Commentary/es-pt.txt.zip">9.2k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Portuguese-French (5,966 sentence pairs, 0.32M words) - Moses format' href="download.php?f=News-Commentary/fr-pt.txt.zip">6.0k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Portuguese-Italian (3,642 sentence pairs, 0.19M words) - Moses format' href="download.php?f=News-Commentary/it-pt.txt.zip">3.6k</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Portuguese-Dutch (3,399 sentence pairs, 0.17M words) - Moses format' href="download.php?f=News-Commentary/nl-pt.txt.zip">3.4k</a>
</td><td></td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Portuguese-Russian (3,894 sentence pairs, 0.19M words) - TMX format' href="download.php?f=News-Commentary/pt-ru.tmx.gz">3.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Portuguese-Chinese (3,087 sentence pairs, 0.17M words) - TMX format' href="download.php?f=News-Commentary/pt-zh.tmx.gz">3.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.ru.gz">ru</a>
</th><td>11</td> <td>24.1M</td> <td>1.0M</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Russian-Arabic (127,677 sentence pairs, 5.74M words) - Moses format' href="download.php?f=News-Commentary/ar-ru.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Russian-Czech (128,693 sentence pairs, 5.17M words) - Moses format' href="download.php?f=News-Commentary/cs-ru.txt.zip">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Russian-German (157,309 sentence pairs, 6.80M words) - Moses format' href="download.php?f=News-Commentary/de-ru.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Russian-English (164,047 sentence pairs, 7.26M words) - Moses format' href="download.php?f=News-Commentary/en-ru.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Russian-Spanish (150,696 sentence pairs, 7.10M words) - Moses format' href="download.php?f=News-Commentary/es-ru.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-French (140,621 sentence pairs, 6.56M words) - Moses format' href="download.php?f=News-Commentary/fr-ru.txt.zip">0.1M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Russian-Italian (9,640 sentence pairs, 0.45M words) - Moses format' href="download.php?f=News-Commentary/it-ru.txt.zip">9.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Japanese (586 sentence pairs, 23.92k words) - Moses format' href="download.php?f=News-Commentary/ja-ru.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Dutch (476 sentence pairs, 24.75k words) - Moses format' href="download.php?f=News-Commentary/nl-ru.txt.zip">0.5k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Russian-Portuguese (3,894 sentence pairs, 0.19M words) - Moses format' href="download.php?f=News-Commentary/pt-ru.txt.zip">3.9k</a>
</td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Russian-Chinese (36,590 sentence pairs, 1.37M words) - TMX format' href="download.php?f=News-Commentary/ru-zh.tmx.gz">36.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=News-Commentary/mono/News-Commentary.raw.zh.gz">zh</a>
</th><td>11</td> <td>4.9M</td> <td>0.3M</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Chinese-Arabic (47,775 sentence pairs, 2.15M words) - Moses format' href="download.php?f=News-Commentary/ar-zh.txt.zip">47.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Czech (29,783 sentence pairs, 1.26M words) - Moses format' href="download.php?f=News-Commentary/cs-zh.txt.zip">29.8k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Chinese-German (44,113 sentence pairs, 2.08M words) - Moses format' href="download.php?f=News-Commentary/de-zh.txt.zip">44.1k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-English (50,701 sentence pairs, 2.40M words) - Moses format' href="download.php?f=News-Commentary/en-zh.txt.zip">50.7k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Chinese-Spanish (41,818 sentence pairs, 2.34M words) - Moses format' href="download.php?f=News-Commentary/es-zh.txt.zip">41.8k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Chinese-French (42,685 sentence pairs, 2.33M words) - Moses format' href="download.php?f=News-Commentary/fr-zh.txt.zip">42.7k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Chinese-Italian (3,757 sentence pairs, 0.20M words) - Moses format' href="download.php?f=News-Commentary/it-zh.txt.zip">3.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Japanese (570 sentence pairs, 1.82k words) - Moses format' href="download.php?f=News-Commentary/ja-zh.txt.zip">0.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Chinese-Dutch (921 sentence pairs, 46.35k words) - Moses format' href="download.php?f=News-Commentary/nl-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Chinese-Portuguese (3,155 sentence pairs, 0.17M words) - Moses format' href="download.php?f=News-Commentary/pt-zh.txt.zip">3.2k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Chinese-Russian (36,629 sentence pairs, 1.38M words) - Moses format' href="download.php?f=News-Commentary/ru-zh.txt.zip">36.6k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>