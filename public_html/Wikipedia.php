<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Wikipedia</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Wikipedia</h1><p>This is a corpus of parallel sentences extracted from Wikipedia by Krzysztof Wołk and Krzysztof Marasek. Please cite the following publication if you use the data: Krzysztof Wołk and Krzysztof Marasek: <i><a href="http://www.sciencedirect.com/science/article/pii/S2212017314005453">Building Subject-aligned Comparable Corpora and Mining it for Truly Parallel Sentence Pairs.</a></i>, Procedia Technology, 18, Elsevier, p.126-132, 2014</p><p>20 languages, 36 bitexts<br>total number of files: 114<br>total number of tokens: 610.13M<br>total number of sentence fragments: 25.90M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download of aligned documents (in XML): <a href="download.php?f=Wikipedia/Wikipedia1.0.tar.gz">Wikipedia1.0.tar.gz</a> (7.8G
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Wikipedia/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="Wikipedia/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="Wikipedia/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="Wikipedia/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Wikipedia/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Wikipedia/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Wikipedia/es_sample.html">es</a></th>
<th><a rel="nofollow" href="Wikipedia/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="Wikipedia/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Wikipedia/he_sample.html">he</a></th>
<th><a rel="nofollow" href="Wikipedia/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Wikipedia/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Wikipedia/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Wikipedia/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Wikipedia/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Wikipedia/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Wikipedia/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Wikipedia/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="Wikipedia/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="Wikipedia/vi_sample.html">vi</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/ar.tar.gz">ar</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="Wikipedia/ar-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="Wikipedia/ar-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/bg.tar.gz">bg</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="Wikipedia/bg-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/bg.raw.tar.gz">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/cs.tar.gz">cs</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Czech-English (sample file)" href="Wikipedia/cs-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="Wikipedia/cs-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/de.tar.gz">de</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="German-English (sample file)" href="Wikipedia/de-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-Polish (sample file)" href="Wikipedia/de-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/el.tar.gz">el</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="Wikipedia/el-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="Wikipedia/el-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/el.raw.tar.gz">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (0.2M links, 6.7M tokens)" href="download.php?f=Wikipedia/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (79.8k links, 3.1M tokens)" href="download.php?f=Wikipedia/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (27.7k links, 0.9M tokens)" href="download.php?f=Wikipedia/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (6 aligned documents, 2.5M links, 101.9M tokens)" href="download.php?f=Wikipedia/xml/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (0.1M links, 4.4M tokens)" href="download.php?f=Wikipedia/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="Wikipedia/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="Wikipedia/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Wikipedia/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="Wikipedia/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="Wikipedia/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="Wikipedia/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="Wikipedia/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="Wikipedia/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="Wikipedia/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="Wikipedia/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="Wikipedia/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="Wikipedia/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="Wikipedia/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="Wikipedia/en-vi_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Wikipedia/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/es.tar.gz">es</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (5 aligned documents, 1.8M links, 86.1M tokens)" href="download.php?f=Wikipedia/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="Wikipedia/es-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/fa.tar.gz">fa</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (97.1k links, 5.1M tokens)" href="download.php?f=Wikipedia/xml/en-fa.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Polish (sample file)" href="Wikipedia/fa-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/fa.raw.tar.gz">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/fr.tar.gz">fr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2 aligned documents, 0.8M links, 40.8M tokens)" href="download.php?f=Wikipedia/xml/en-fr.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Polish (sample file)" href="Wikipedia/fr-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/he.tar.gz">he</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (0.1M links, 6.2M tokens)" href="download.php?f=Wikipedia/xml/en-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Polish (sample file)" href="Wikipedia/he-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/he.raw.tar.gz">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/hu.tar.gz">hu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (61.5k links, 2.3M tokens)" href="download.php?f=Wikipedia/xml/en-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="Wikipedia/hu-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/hu.raw.tar.gz">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/it.tar.gz">it</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (3 aligned documents, 1.0M links, 48.8M tokens)" href="download.php?f=Wikipedia/xml/en-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="Wikipedia/it-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/nl.tar.gz">nl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (2 aligned documents, 0.8M links, 37.6M tokens)" href="download.php?f=Wikipedia/xml/en-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Polish (sample file)" href="Wikipedia/nl-pl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/pl.tar.gz">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (2 aligned documents, 0.8M links, 38.8M tokens)" href="download.php?f=Wikipedia/xml/ar-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (62.5k links, 2.4M tokens)" href="download.php?f=Wikipedia/xml/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (0.2M links, 4.3M tokens)" href="download.php?f=Wikipedia/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (12.2k links, 0.4M tokens)" href="download.php?f=Wikipedia/xml/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (0.2M links, 15.5M tokens)" href="download.php?f=Wikipedia/xml/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (0.2M links, 6.7M tokens)" href="download.php?f=Wikipedia/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Persian' (6.1k links, 0.3M tokens)" href="download.php?f=Wikipedia/xml/fa-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (51.7k links, 2.2M tokens)" href="download.php?f=Wikipedia/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hebrew' (10.0k links, 0.3M tokens)" href="download.php?f=Wikipedia/xml/he-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (41.1k links, 1.4M tokens)" href="download.php?f=Wikipedia/xml/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (0.2M links, 10.1M tokens)" href="download.php?f=Wikipedia/xml/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (0.2M links, 7.5M tokens)" href="download.php?f=Wikipedia/xml/nl-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="Wikipedia/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="Wikipedia/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="Wikipedia/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="Wikipedia/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="Wikipedia/pl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Vietnamese (sample file)" href="Wikipedia/pl-vi_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Wikipedia/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/pt.tar.gz">pt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (5 aligned documents, 1.8M links, 91.7M tokens)" href="download.php?f=Wikipedia/xml/en-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (0.2M links, 10.1M tokens)" href="download.php?f=Wikipedia/xml/pl-pt.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/ro.tar.gz">ro</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (2 aligned documents, 0.4M links, 22.7M tokens)" href="download.php?f=Wikipedia/xml/en-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (6.7k links, 0.3M tokens)" href="download.php?f=Wikipedia/xml/pl-ro.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/ro.raw.tar.gz">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/ru.tar.gz">ru</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (2 aligned documents, 0.6M links, 24.4M tokens)" href="download.php?f=Wikipedia/xml/en-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (0.2M links, 5.8M tokens)" href="download.php?f=Wikipedia/xml/pl-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/sl.tar.gz">sl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (0.1M links, 5.6M tokens)" href="download.php?f=Wikipedia/xml/en-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (17.3k links, 0.7M tokens)" href="download.php?f=Wikipedia/xml/pl-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/sl.raw.tar.gz">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/tr.tar.gz">tr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (2 aligned documents, 0.2M links, 9.0M tokens)" href="download.php?f=Wikipedia/xml/en-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (16.0k links, 0.9M tokens)" href="download.php?f=Wikipedia/xml/pl-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=Wikipedia/tr.raw.tar.gz">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Wikipedia/vi.tar.gz">vi</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (58.1k links, 1.3M tokens)" href="download.php?f=Wikipedia/xml/en-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Polish' (90.4k links, 3.8M tokens)" href="download.php?f=Wikipedia/xml/pl-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Wikipedia/vi.raw.tar.gz">vi</a></th></tr>
<tr><th></th>
<th>ar</th>
<th>bg</th>
<th>cs</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>fa</th>
<th>fr</th>
<th>he</th>
<th>hu</th>
<th>it</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sl</th>
<th>tr</th>
<th>vi</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=Wikipedia/mono/Wikipedia.ar.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=Wikipedia/mono/Wikipedia.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=Wikipedia/mono/Wikipedia.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=Wikipedia/mono/Wikipedia.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=Wikipedia/mono/Wikipedia.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Wikipedia/mono/Wikipedia.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=Wikipedia/mono/Wikipedia.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=Wikipedia/mono/Wikipedia.fa.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=Wikipedia/mono/Wikipedia.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=Wikipedia/mono/Wikipedia.he.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=Wikipedia/mono/Wikipedia.hu.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=Wikipedia/mono/Wikipedia.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=Wikipedia/mono/Wikipedia.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=Wikipedia/mono/Wikipedia.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=Wikipedia/mono/Wikipedia.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.sl.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=Wikipedia/mono/Wikipedia.tr.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=Wikipedia/mono/Wikipedia.vi.gz">vi</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.ar.gz">ar</a>
</th><td>3</td> <td>24.9M</td> <td>1.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Arabic-English (146,131 sentence pairs, 5.34M words) - TMX format' href="download.php?f=Wikipedia/ar-en.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Arabic-Polish (820,203 sentence pairs, 31.71M words) - TMX format' href="download.php?f=Wikipedia/ar-pl.tmx.gz">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.bg.gz">bg</a>
</th><td>1</td> <td>1.4M</td> <td>79.8k</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bulgarian-English (77,068 sentence pairs, 2.27M words) - TMX format' href="download.php?f=Wikipedia/bg-en.tmx.gz">77.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.cs.gz">cs</a>
</th><td>2</td> <td>1.7M</td> <td>90.2k</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Czech-English (25,396 sentence pairs, 0.59M words) - TMX format' href="download.php?f=Wikipedia/cs-en.tmx.gz">25.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Czech-Polish (61,475 sentence pairs, 1.78M words) - TMX format' href="download.php?f=Wikipedia/cs-pl.tmx.gz">61.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.de.gz">de</a>
</th><td>7</td> <td>45.5M</td> <td>2.6M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='German-English (2,414,839 sentence pairs, 84.00M words) - TMX format' href="download.php?f=Wikipedia/de-en.tmx.gz">2.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='German-Polish (165,745 sentence pairs, 3.29M words) - TMX format' href="download.php?f=Wikipedia/de-pl.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.el.gz">el</a>
</th><td>2</td> <td>2.3M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Greek-English (100,692 sentence pairs, 3.37M words) - TMX format' href="download.php?f=Wikipedia/el-en.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Greek-Polish (12,069 sentence pairs, 0.31M words) - TMX format' href="download.php?f=Wikipedia/el-pl.tmx.gz">12.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.en.gz">en</a>
</th><td>39</td> <td>275.8M</td> <td>10.7M</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='English-Arabic (151,136 sentence pairs, 5.38M words) - Moses format' href="download.php?f=Wikipedia/ar-en.txt.zip">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='English-Bulgarian (79,781 sentence pairs, 2.29M words) - Moses format' href="download.php?f=Wikipedia/bg-en.txt.zip">79.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='English-Czech (27,723 sentence pairs, 0.60M words) - Moses format' href="download.php?f=Wikipedia/cs-en.txt.zip">27.7k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-German (2,459,662 sentence pairs, 84.38M words) - Moses format' href="download.php?f=Wikipedia/de-en.txt.zip">2.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='English-Greek (104,076 sentence pairs, 3.39M words) - Moses format' href="download.php?f=Wikipedia/el-en.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Spanish (1,741,038 sentence pairs, 70.90M words) - TMX format' href="download.php?f=Wikipedia/en-es.tmx.gz">1.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Persian (95,675 sentence pairs, 3.88M words) - TMX format' href="download.php?f=Wikipedia/en-fa.tmx.gz">95.7k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='English-French (803,670 sentence pairs, 33.79M words) - TMX format' href="download.php?f=Wikipedia/en-fr.tmx.gz">0.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Hebrew (138,054 sentence pairs, 4.94M words) - TMX format' href="download.php?f=Wikipedia/en-he.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='English-Hungarian (56,068 sentence pairs, 1.50M words) - TMX format' href="download.php?f=Wikipedia/en-hu.tmx.gz">56.1k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='English-Italian (944,698 sentence pairs, 39.72M words) - TMX format' href="download.php?f=Wikipedia/en-it.tmx.gz">0.9M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='English-Dutch (791,558 sentence pairs, 29.38M words) - TMX format' href="download.php?f=Wikipedia/en-nl.tmx.gz">0.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Polish (168,620 sentence pairs, 11.65M words) - TMX format' href="download.php?f=Wikipedia/en-pl.tmx.gz">0.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Portuguese (1,695,332 sentence pairs, 71.35M words) - TMX format' href="download.php?f=Wikipedia/en-pt.tmx.gz">1.7M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Romanian (355,195 sentence pairs, 16.97M words) - TMX format' href="download.php?f=Wikipedia/en-ro.tmx.gz">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='English-Russian (541,548 sentence pairs, 18.67M words) - TMX format' href="download.php?f=Wikipedia/en-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='English-Slovenian (81,524 sentence pairs, 2.54M words) - TMX format' href="download.php?f=Wikipedia/en-sl.tmx.gz">81.5k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Turkish (157,273 sentence pairs, 6.30M words) - TMX format' href="download.php?f=Wikipedia/en-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Vietnamese (36,280 sentence pairs, 0.76M words) - TMX format' href="download.php?f=Wikipedia/en-vi.tmx.gz">36.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.es.gz">es</a>
</th><td>6</td> <td>44.5M</td> <td>2.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-English (1,811,428 sentence pairs, 71.52M words) - Moses format' href="download.php?f=Wikipedia/en-es.txt.zip">1.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Spanish-Polish (148,389 sentence pairs, 5.21M words) - TMX format' href="download.php?f=Wikipedia/es-pl.tmx.gz">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.fa.gz">fa</a>
</th><td>2</td> <td>2.7M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Persian-English (97,091 sentence pairs, 3.89M words) - Moses format' href="download.php?f=Wikipedia/en-fa.txt.zip">97.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Persian-Polish (5,968 sentence pairs, 0.18M words) - TMX format' href="download.php?f=Wikipedia/fa-pl.tmx.gz">6.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.fr.gz">fr</a>
</th><td>3</td> <td>18.8M</td> <td>0.9M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='French-English (818,302 sentence pairs, 33.93M words) - Moses format' href="download.php?f=Wikipedia/en-fr.txt.zip">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='French-Polish (49,798 sentence pairs, 1.69M words) - TMX format' href="download.php?f=Wikipedia/fr-pl.tmx.gz">49.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.he.gz">he</a>
</th><td>2</td> <td>3.0M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Hebrew-English (139,853 sentence pairs, 4.95M words) - Moses format' href="download.php?f=Wikipedia/en-he.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Hebrew-Polish (9,879 sentence pairs, 0.24M words) - TMX format' href="download.php?f=Wikipedia/he-pl.tmx.gz">9.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.hu.gz">hu</a>
</th><td>2</td> <td>1.9M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Hungarian-English (61,472 sentence pairs, 1.54M words) - Moses format' href="download.php?f=Wikipedia/en-hu.txt.zip">61.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Hungarian-Polish (40,230 sentence pairs, 0.96M words) - TMX format' href="download.php?f=Wikipedia/hu-pl.tmx.gz">40.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.it.gz">it</a>
</th><td>4</td> <td>27.2M</td> <td>1.2M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Italian-English (957,004 sentence pairs, 39.82M words) - Moses format' href="download.php?f=Wikipedia/en-it.txt.zip">1.0M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Italian-Polish (208,229 sentence pairs, 7.97M words) - TMX format' href="download.php?f=Wikipedia/it-pl.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.nl.gz">nl</a>
</th><td>3</td> <td>21.8M</td> <td>1.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='Dutch-English (797,122 sentence pairs, 29.45M words) - Moses format' href="download.php?f=Wikipedia/en-nl.txt.zip">0.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Dutch-Polish (163,323 sentence pairs, 5.39M words) - TMX format' href="download.php?f=Wikipedia/nl-pl.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.pl.gz">pl</a>
</th><td>19</td> <td>52.4M</td> <td>2.4M</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Polish-Arabic (823,715 sentence pairs, 31.75M words) - Moses format' href="download.php?f=Wikipedia/ar-pl.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Polish-Czech (62,507 sentence pairs, 1.79M words) - Moses format' href="download.php?f=Wikipedia/cs-pl.txt.zip">62.5k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Polish-German (169,739 sentence pairs, 3.31M words) - Moses format' href="download.php?f=Wikipedia/de-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Polish-Greek (12,222 sentence pairs, 0.31M words) - Moses format' href="download.php?f=Wikipedia/el-pl.txt.zip">12.2k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Polish-English (172,664 sentence pairs, 11.67M words) - Moses format' href="download.php?f=Wikipedia/en-pl.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Polish-Spanish (151,174 sentence pairs, 5.23M words) - Moses format' href="download.php?f=Wikipedia/es-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Polish-Persian (6,092 sentence pairs, 0.18M words) - Moses format' href="download.php?f=Wikipedia/fa-pl.txt.zip">6.1k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Polish-French (51,685 sentence pairs, 1.70M words) - Moses format' href="download.php?f=Wikipedia/fr-pl.txt.zip">51.7k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Polish-Hebrew (10,006 sentence pairs, 0.25M words) - Moses format' href="download.php?f=Wikipedia/he-pl.txt.zip">10.0k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Polish-Hungarian (41,116 sentence pairs, 0.97M words) - Moses format' href="download.php?f=Wikipedia/hu-pl.txt.zip">41.1k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Polish-Italian (210,435 sentence pairs, 7.99M words) - Moses format' href="download.php?f=Wikipedia/it-pl.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Polish-Dutch (167,081 sentence pairs, 5.46M words) - Moses format' href="download.php?f=Wikipedia/nl-pl.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Polish-Portuguese (206,711 sentence pairs, 7.39M words) - TMX format' href="download.php?f=Wikipedia/pl-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Polish-Romanian (6,616 sentence pairs, 0.20M words) - TMX format' href="download.php?f=Wikipedia/pl-ro.tmx.gz">6.6k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Polish-Russian (167,136 sentence pairs, 4.00M words) - TMX format' href="download.php?f=Wikipedia/pl-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Polish-Slovenian (16,996 sentence pairs, 0.47M words) - TMX format' href="download.php?f=Wikipedia/pl-sl.tmx.gz">17.0k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Polish-Turkish (15,860 sentence pairs, 0.60M words) - TMX format' href="download.php?f=Wikipedia/pl-tr.tmx.gz">15.9k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Polish-Vietnamese (89,564 sentence pairs, 2.96M words) - TMX format' href="download.php?f=Wikipedia/pl-vi.tmx.gz">89.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.pt.gz">pt</a>
</th><td>6</td> <td>50.2M</td> <td>2.0M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-English (1,767,438 sentence pairs, 72.16M words) - Moses format' href="download.php?f=Wikipedia/en-pt.txt.zip">1.8M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Portuguese-Polish (208,756 sentence pairs, 7.41M words) - Moses format' href="download.php?f=Wikipedia/pl-pt.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.ro.gz">ro</a>
</th><td>3</td> <td>11.1M</td> <td>0.4M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Romanian-English (360,499 sentence pairs, 17.01M words) - Moses format' href="download.php?f=Wikipedia/en-ro.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Romanian-Polish (6,742 sentence pairs, 0.21M words) - Moses format' href="download.php?f=Wikipedia/pl-ro.txt.zip">6.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.ru.gz">ru</a>
</th><td>3</td> <td>14.5M</td> <td>0.7M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Russian-English (572,717 sentence pairs, 19.01M words) - Moses format' href="download.php?f=Wikipedia/en-ru.txt.zip">0.6M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Russian-Polish (170,227 sentence pairs, 4.02M words) - Moses format' href="download.php?f=Wikipedia/pl-ru.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.sl.gz">sl</a>
</th><td>2</td> <td>3.0M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Slovenian-English (140,124 sentence pairs, 4.33M words) - Moses format' href="download.php?f=Wikipedia/en-sl.txt.zip">0.1M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Slovenian-Polish (17,288 sentence pairs, 0.47M words) - Moses format' href="download.php?f=Wikipedia/pl-sl.txt.zip">17.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.tr.gz">tr</a>
</th><td>3</td> <td>4.7M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-English (159,979 sentence pairs, 6.32M words) - Moses format' href="download.php?f=Wikipedia/en-tr.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Turkish-Polish (15,993 sentence pairs, 0.60M words) - Moses format' href="download.php?f=Wikipedia/pl-tr.txt.zip">16.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=Wikipedia/mono/Wikipedia.raw.vi.gz">vi</a>
</th><td>2</td> <td>2.7M</td> <td>0.1M</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Vietnamese-English (58,116 sentence pairs, 0.98M words) - Moses format' href="download.php?f=Wikipedia/en-vi.txt.zip">58.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Vietnamese-Polish (90,428 sentence pairs, 2.97M words) - Moses format' href="download.php?f=Wikipedia/pl-vi.txt.zip">90.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>