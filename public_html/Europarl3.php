<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>Europarl3</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Europarl3</h1><p>A parallel corpus extracted from the European Parliament web site by Philipp Koehn (University of Edinburgh). Appr. 40 million words per language. The main intended use is to aid statistical machine translation research.</p><p>More information can be found at <a href="http://www.statmt.org/europarl/">http://www.statmt.org/europarl/</a>. The main difference in this release vs. the first release in 2002 and second release in 2003 is that it is larger and it comes with improved processing tools that allow the creation of parallel corpora between any two of the 11 languages. Some data is now tagged with the original language the text was spoken in.</p><p />11 languages, 55 bitexts<br />total number of files: 7,034<br />total number of tokens: 404.01M<br />total number of sentence fragments: 15.81M<br /><p />Please <a href="http://opus.nlpl.eu/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/><h3>Download</h3>

<p>New version available: <a href="http://opus.nlpl.eu/Europarl.php">Europarlv7</a>.</p>

<!--
NEW: <a href="http://urd.let.rug.nl/~vannoord/trees/Treebank/Machine/europarl3/COMPACT/">Dutch Europarl3 Treebank (parsed with Alpino)</a>.</p>Complete download (XML): <a href="download.php?f=Europarl3/Europarl3.tar.gz">Europarl3.tar.gz</a> (3,5G
)<br /><p />
-->

<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Europarl3/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Europarl3/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Europarl3/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Europarl3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Europarl3/es_sample.html">es</a></th>
<th><a rel="nofollow" href="Europarl3/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Europarl3/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Europarl3/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Europarl3/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Europarl3/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Europarl3/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/da.tar.gz">da</a></th>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="Europarl3/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="Europarl3/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="Europarl3/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="Europarl3/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="Europarl3/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="Europarl3/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="Europarl3/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="Europarl3/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="Europarl3/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="Europarl3/da-sv_sample.html">view</a></td><th>da</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (656 aligned documents, 1.3M links, 74.6M tokens)" href="download.php?f=Europarl3/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="Europarl3/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="Europarl3/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="Europarl3/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="Europarl3/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="Europarl3/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="Europarl3/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="Europarl3/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="Europarl3/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="Europarl3/de-sv_sample.html">view</a></td><th>de</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (534 aligned documents, 0.7M links, 56.0M tokens)" href="download.php?f=Europarl3/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (535 aligned documents, 0.7M links, 56.0M tokens)" href="download.php?f=Europarl3/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="Europarl3/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="Europarl3/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="Europarl3/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="Europarl3/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="Europarl3/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="Europarl3/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="Europarl3/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="Europarl3/el-sv_sample.html">view</a></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (655 aligned documents, 1.3M links, 76.5M tokens)" href="download.php?f=Europarl3/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (656 aligned documents, 1.3M links, 76.6M tokens)" href="download.php?f=Europarl3/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (534 aligned documents, 0.7M links, 57.4M tokens)" href="download.php?f=Europarl3/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="Europarl3/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="Europarl3/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Europarl3/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="Europarl3/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="Europarl3/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="Europarl3/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="Europarl3/en-sv_sample.html">view</a></td><th><a rel="nofollow" href="Europarl3/en_parse_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (657 aligned documents, 1.3M links, 77.7M tokens)" href="download.php?f=Europarl3/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (657 aligned documents, 1.3M links, 77.6M tokens)" href="download.php?f=Europarl3/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (536 aligned documents, 0.7M links, 58.6M tokens)" href="download.php?f=Europarl3/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (656 aligned documents, 1.3M links, 79.5M tokens)" href="download.php?f=Europarl3/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="Europarl3/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="Europarl3/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="Europarl3/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="Europarl3/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="Europarl3/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="Europarl3/es-sv_sample.html">view</a></td><th>es</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/fi.tar.gz">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (608 aligned documents, 1.2M links, 60.9M tokens)" href="download.php?f=Europarl3/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (608 aligned documents, 1.2M links, 60.8M tokens)" href="download.php?f=Europarl3/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (491 aligned documents, 0.6M links, 44.6M tokens)" href="download.php?f=Europarl3/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (607 aligned documents, 1.3M links, 62.6M tokens)" href="download.php?f=Europarl3/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (609 aligned documents, 1.2M links, 63.7M tokens)" href="download.php?f=Europarl3/es-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="Europarl3/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="Europarl3/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="Europarl3/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="Europarl3/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="Europarl3/fi-sv_sample.html">view</a></td><th>fi</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (659 aligned documents, 1.3M links, 81.0M tokens)" href="download.php?f=Europarl3/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (659 aligned documents, 1.3M links, 80.9M tokens)" href="download.php?f=Europarl3/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (537 aligned documents, 0.7M links, 61.1M tokens)" href="download.php?f=Europarl3/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (658 aligned documents, 1.3M links, 82.9M tokens)" href="download.php?f=Europarl3/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (660 aligned documents, 1.3M links, 84.0M tokens)" href="download.php?f=Europarl3/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (611 aligned documents, 1.3M links, 66.8M tokens)" href="download.php?f=Europarl3/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Italian (sample file)" href="Europarl3/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="Europarl3/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="Europarl3/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="Europarl3/fr-sv_sample.html">view</a></td><th>fr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (655 aligned documents, 1.2M links, 76.1M tokens)" href="download.php?f=Europarl3/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (655 aligned documents, 1.2M links, 75.9M tokens)" href="download.php?f=Europarl3/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (533 aligned documents, 0.6M links, 57.1M tokens)" href="download.php?f=Europarl3/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (654 aligned documents, 1.3M links, 77.9M tokens)" href="download.php?f=Europarl3/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (656 aligned documents, 1.2M links, 79.0M tokens)" href="download.php?f=Europarl3/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (607 aligned documents, 1.2M links, 62.2M tokens)" href="download.php?f=Europarl3/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (658 aligned documents, 1.3M links, 82.4M tokens)" href="download.php?f=Europarl3/fr-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Dutch (sample file)" href="Europarl3/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="Europarl3/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="Europarl3/it-sv_sample.html">view</a></td><th>it</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/nl.tar.gz">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (656 aligned documents, 1.3M links, 76.7M tokens)" href="download.php?f=Europarl3/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (656 aligned documents, 1.3M links, 76.6M tokens)" href="download.php?f=Europarl3/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (534 aligned documents, 0.7M links, 57.6M tokens)" href="download.php?f=Europarl3/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (655 aligned documents, 1.3M links, 78.5M tokens)" href="download.php?f=Europarl3/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (657 aligned documents, 1.3M links, 79.6M tokens)" href="download.php?f=Europarl3/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (608 aligned documents, 1.3M links, 62.7M tokens)" href="download.php?f=Europarl3/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (659 aligned documents, 1.3M links, 83.0M tokens)" href="download.php?f=Europarl3/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (655 aligned documents, 1.3M links, 78.0M tokens)" href="download.php?f=Europarl3/it-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="Europarl3/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="Europarl3/nl-sv_sample.html">view</a></td><th>nl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (657 aligned documents, 1.3M links, 78.0M tokens)" href="download.php?f=Europarl3/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (657 aligned documents, 1.3M links, 77.9M tokens)" href="download.php?f=Europarl3/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (535 aligned documents, 0.7M links, 58.7M tokens)" href="download.php?f=Europarl3/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (656 aligned documents, 1.3M links, 79.9M tokens)" href="download.php?f=Europarl3/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (658 aligned documents, 1.3M links, 81.0M tokens)" href="download.php?f=Europarl3/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (609 aligned documents, 1.2M links, 64.0M tokens)" href="download.php?f=Europarl3/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (660 aligned documents, 1.3M links, 84.4M tokens)" href="download.php?f=Europarl3/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (656 aligned documents, 1.2M links, 79.4M tokens)" href="download.php?f=Europarl3/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (659 aligned documents, 1.3M links, 80.3M tokens)" href="download.php?f=Europarl3/nl-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="Europarl3/pt-sv_sample.html">view</a></td><th>pt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl3/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (608 aligned documents, 1.2M links, 68.1M tokens)" href="download.php?f=Europarl3/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (608 aligned documents, 1.2M links, 67.9M tokens)" href="download.php?f=Europarl3/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (489 aligned documents, 0.7M links, 49.8M tokens)" href="download.php?f=Europarl3/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (608 aligned documents, 1.2M links, 69.8M tokens)" href="download.php?f=Europarl3/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (610 aligned documents, 1.1M links, 70.9M tokens)" href="download.php?f=Europarl3/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (606 aligned documents, 1.2M links, 59.2M tokens)" href="download.php?f=Europarl3/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (611 aligned documents, 1.2M links, 74.0M tokens)" href="download.php?f=Europarl3/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (607 aligned documents, 1.1M links, 69.3M tokens)" href="download.php?f=Europarl3/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (609 aligned documents, 1.2M links, 70.0M tokens)" href="download.php?f=Europarl3/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (610 aligned documents, 1.1M links, 71.3M tokens)" href="download.php?f=Europarl3/pt-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="Europarl3/sv_parse_sample.html">sv</a></th></tr>
<tr><th></th>
<th>da</th>
<th>de</th>
<th>el</th>
<th><a rel="nofollow" href="download.php?f=Europarl3/en_parse.tar.gz">en</a></th>
<th>es</th>
<th>fi</th>
<th>fr</th>
<th>it</th>
<th>nl</th>
<th>pt</th>
<th><a rel="nofollow" href="download.php?f=Europarl3/sv_parse.tar.gz">sv</a></th>
<th></th></tr>
</table>
</div><p /><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>da</th><th>de</th><th>el</th><th>en</th><th>es</th><th>fi</th><th>fr</th><th>it</th><th>nl</th><th>pt</th><th>sv</th></tr> <tr><th>da</th><td>659</td> <td>37.5M</td> <td>1.6M</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-German (1,261,491 sentence pairs, 56.53M words) - TMX format' href="download.php?f=Europarl3/da-de.tmx.gz">1.3M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Danish-Greek (663,406 sentence pairs, 31.56M words) - TMX format' href="download.php?f=Europarl3/da-el.tmx.gz">0.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-English (1,276,452 sentence pairs, 60.09M words) - TMX format' href="download.php?f=Europarl3/da-en.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Spanish (1,260,302 sentence pairs, 60.82M words) - TMX format' href="download.php?f=Europarl3/da-es.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Danish-Finnish (1,211,379 sentence pairs, 46.83M words) - TMX format' href="download.php?f=Europarl3/da-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-French (1,291,200 sentence pairs, 62.65M words) - TMX format' href="download.php?f=Europarl3/da-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Italian (1,204,817 sentence pairs, 58.05M words) - TMX format' href="download.php?f=Europarl3/da-it.tmx.gz">1.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Dutch (1,294,720 sentence pairs, 58.59M words) - TMX format' href="download.php?f=Europarl3/da-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Portuguese (1,244,148 sentence pairs, 59.76M words) - TMX format' href="download.php?f=Europarl3/da-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Swedish (1,126,138 sentence pairs, 49.66M words) - TMX format' href="download.php?f=Europarl3/da-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>de</th><td>659</td> <td>37.5M</td> <td>1.5M</td><td bgcolor="#ccffcc"><a rel="nofollow" title='German-Danish (1,283,400 sentence pairs, 56.72M words) - Moses format' href="download.php?f=Europarl3/da-de.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Greek (642,412 sentence pairs, 31.02M words) - TMX format' href="download.php?f=Europarl3/de-el.tmx.gz">0.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-English (1,285,382 sentence pairs, 61.43M words) - TMX format' href="download.php?f=Europarl3/de-en.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Spanish (1,252,016 sentence pairs, 61.37M words) - TMX format' href="download.php?f=Europarl3/de-es.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='German-Finnish (1,210,155 sentence pairs, 47.72M words) - TMX format' href="download.php?f=Europarl3/de-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-French (1,289,030 sentence pairs, 63.47M words) - TMX format' href="download.php?f=Europarl3/de-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Italian (1,200,478 sentence pairs, 58.78M words) - TMX format' href="download.php?f=Europarl3/de-it.tmx.gz">1.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Dutch (1,283,136 sentence pairs, 58.63M words) - TMX format' href="download.php?f=Europarl3/de-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Portuguese (1,239,421 sentence pairs, 60.43M words) - TMX format' href="download.php?f=Europarl3/de-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='German-Swedish (1,122,087 sentence pairs, 50.38M words) - TMX format' href="download.php?f=Europarl3/de-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>el</th><td>537</td> <td>26.3M</td> <td>1.0M</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Greek-Danish (674,801 sentence pairs, 31.65M words) - Moses format' href="download.php?f=Europarl3/da-el.txt.zip">0.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Greek-German (652,938 sentence pairs, 31.11M words) - Moses format' href="download.php?f=Europarl3/de-el.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Greek-English (646,680 sentence pairs, 32.53M words) - TMX format' href="download.php?f=Europarl3/el-en.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Spanish (652,037 sentence pairs, 33.59M words) - TMX format' href="download.php?f=Europarl3/el-es.tmx.gz">0.7M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Greek-Finnish (602,341 sentence pairs, 25.44M words) - TMX format' href="download.php?f=Europarl3/el-fi.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-French (660,573 sentence pairs, 33.99M words) - TMX format' href="download.php?f=Europarl3/el-fr.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Greek-Italian (620,547 sentence pairs, 31.92M words) - TMX format' href="download.php?f=Europarl3/el-it.tmx.gz">0.6M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Greek-Dutch (657,497 sentence pairs, 31.94M words) - TMX format' href="download.php?f=Europarl3/el-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Greek-Portuguese (646,427 sentence pairs, 33.24M words) - TMX format' href="download.php?f=Europarl3/el-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Greek-Swedish (640,158 sentence pairs, 30.42M words) - TMX format' href="download.php?f=Europarl3/el-sv.tmx.gz">0.6M</a>
</td></tr> <tr><th>en</th><td>658</td> <td>39.4M</td> <td>1.5M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='English-Danish (1,294,285 sentence pairs, 60.25M words) - Moses format' href="download.php?f=Europarl3/da-en.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-German (1,304,847 sentence pairs, 61.61M words) - Moses format' href="download.php?f=Europarl3/de-en.txt.zip">1.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='English-Greek (656,326 sentence pairs, 32.62M words) - Moses format' href="download.php?f=Europarl3/el-en.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='English-Spanish (1,279,592 sentence pairs, 65.36M words) - TMX format' href="download.php?f=Europarl3/en-es.tmx.gz">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='English-Finnish (1,233,985 sentence pairs, 51.17M words) - TMX format' href="download.php?f=Europarl3/en-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-French (1,312,353 sentence pairs, 67.42M words) - TMX format' href="download.php?f=Europarl3/en-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Italian (1,229,682 sentence pairs, 62.77M words) - TMX format' href="download.php?f=Europarl3/en-it.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Dutch (1,291,767 sentence pairs, 62.54M words) - TMX format' href="download.php?f=Europarl3/en-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Portuguese (1,266,116 sentence pairs, 64.35M words) - TMX format' href="download.php?f=Europarl3/en-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Swedish (1,136,106 sentence pairs, 53.51M words) - TMX format' href="download.php?f=Europarl3/en-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>es</th><td>660</td> <td>40.5M</td> <td>1.5M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Danish (1,279,204 sentence pairs, 61.00M words) - Moses format' href="download.php?f=Europarl3/da-es.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-German (1,274,190 sentence pairs, 61.58M words) - Moses format' href="download.php?f=Europarl3/de-es.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Spanish-Greek (663,264 sentence pairs, 33.68M words) - Moses format' href="download.php?f=Europarl3/el-es.txt.zip">0.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-English (1,298,692 sentence pairs, 65.54M words) - Moses format' href="download.php?f=Europarl3/en-es.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Finnish (1,195,273 sentence pairs, 51.09M words) - TMX format' href="download.php?f=Europarl3/es-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-French (1,281,594 sentence pairs, 67.39M words) - TMX format' href="download.php?f=Europarl3/es-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Italian (1,201,207 sentence pairs, 62.80M words) - TMX format' href="download.php?f=Europarl3/es-it.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Dutch (1,262,452 sentence pairs, 62.17M words) - TMX format' href="download.php?f=Europarl3/es-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Portuguese (1,245,438 sentence pairs, 64.90M words) - TMX format' href="download.php?f=Europarl3/es-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Spanish-Swedish (1,114,277 sentence pairs, 53.88M words) - TMX format' href="download.php?f=Europarl3/es-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>fi</th><td>611</td> <td>26.4M</td> <td>1.4M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Danish (1,229,395 sentence pairs, 46.96M words) - Moses format' href="download.php?f=Europarl3/da-fi.txt.zip">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-German (1,232,448 sentence pairs, 47.88M words) - Moses format' href="download.php?f=Europarl3/de-fi.txt.zip">1.2M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Finnish-Greek (613,075 sentence pairs, 25.51M words) - Moses format' href="download.php?f=Europarl3/el-fi.txt.zip">0.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-English (1,253,246 sentence pairs, 51.32M words) - Moses format' href="download.php?f=Europarl3/en-fi.txt.zip">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Spanish (1,218,597 sentence pairs, 51.26M words) - Moses format' href="download.php?f=Europarl3/es-fi.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-French (1,243,989 sentence pairs, 53.53M words) - TMX format' href="download.php?f=Europarl3/fi-fr.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Italian (1,151,630 sentence pairs, 49.12M words) - TMX format' href="download.php?f=Europarl3/fi-it.tmx.gz">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Dutch (1,228,327 sentence pairs, 48.65M words) - TMX format' href="download.php?f=Europarl3/fi-nl.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Portuguese (1,182,262 sentence pairs, 50.21M words) - TMX format' href="download.php?f=Europarl3/fi-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Swedish (1,147,212 sentence pairs, 44.56M words) - TMX format' href="download.php?f=Europarl3/fi-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>fr</th><td>662</td> <td>43.7M</td> <td>1.5M</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Danish (1,310,042 sentence pairs, 62.82M words) - Moses format' href="download.php?f=Europarl3/da-fr.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-German (1,308,123 sentence pairs, 63.67M words) - Moses format' href="download.php?f=Europarl3/de-fr.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='French-Greek (670,528 sentence pairs, 34.09M words) - Moses format' href="download.php?f=Europarl3/el-fr.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-English (1,329,782 sentence pairs, 67.60M words) - Moses format' href="download.php?f=Europarl3/en-fr.txt.zip">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Spanish (1,300,501 sentence pairs, 67.59M words) - Moses format' href="download.php?f=Europarl3/es-fr.txt.zip">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-Finnish (1,262,669 sentence pairs, 53.69M words) - Moses format' href="download.php?f=Europarl3/fi-fr.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='French-Italian (1,241,236 sentence pairs, 65.25M words) - TMX format' href="download.php?f=Europarl3/fr-it.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Dutch (1,311,645 sentence pairs, 65.07M words) - TMX format' href="download.php?f=Europarl3/fr-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Portuguese (1,269,960 sentence pairs, 66.43M words) - TMX format' href="download.php?f=Europarl3/fr-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-Swedish (1,145,583 sentence pairs, 55.75M words) - TMX format' href="download.php?f=Europarl3/fr-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>it</th><td>658</td> <td>39.0M</td> <td>1.4M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Italian-Danish (1,223,552 sentence pairs, 58.21M words) - Moses format' href="download.php?f=Europarl3/da-it.txt.zip">1.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Italian-German (1,217,731 sentence pairs, 58.95M words) - Moses format' href="download.php?f=Europarl3/de-it.txt.zip">1.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Italian-Greek (631,604 sentence pairs, 32.01M words) - Moses format' href="download.php?f=Europarl3/el-it.txt.zip">0.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-English (1,245,139 sentence pairs, 62.93M words) - Moses format' href="download.php?f=Europarl3/en-it.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Spanish (1,218,792 sentence pairs, 62.98M words) - Moses format' href="download.php?f=Europarl3/es-it.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Finnish (1,168,846 sentence pairs, 49.26M words) - Moses format' href="download.php?f=Europarl3/fi-it.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-French (1,259,491 sentence pairs, 65.44M words) - Moses format' href="download.php?f=Europarl3/fr-it.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Italian-Dutch (1,229,409 sentence pairs, 60.57M words) - TMX format' href="download.php?f=Europarl3/it-nl.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Portuguese (1,190,327 sentence pairs, 61.95M words) - TMX format' href="download.php?f=Europarl3/it-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Swedish (1,062,696 sentence pairs, 51.43M words) - TMX format' href="download.php?f=Europarl3/it-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>nl</th><td>659</td> <td>39.5M</td> <td>1.6M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Dutch-Danish (1,312,818 sentence pairs, 58.76M words) - Moses format' href="download.php?f=Europarl3/da-nl.txt.zip">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Dutch-German (1,298,690 sentence pairs, 58.78M words) - Moses format' href="download.php?f=Europarl3/de-nl.txt.zip">1.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Dutch-Greek (666,490 sentence pairs, 32.02M words) - Moses format' href="download.php?f=Europarl3/el-nl.txt.zip">0.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-English (1,313,076 sentence pairs, 62.74M words) - Moses format' href="download.php?f=Europarl3/en-nl.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Spanish (1,278,115 sentence pairs, 62.33M words) - Moses format' href="download.php?f=Europarl3/es-nl.txt.zip">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Dutch-Finnish (1,242,924 sentence pairs, 48.77M words) - Moses format' href="download.php?f=Europarl3/fi-nl.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-French (1,328,926 sentence pairs, 65.26M words) - Moses format' href="download.php?f=Europarl3/fr-nl.txt.zip">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Dutch-Italian (1,245,025 sentence pairs, 60.74M words) - Moses format' href="download.php?f=Europarl3/it-nl.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Portuguese (1,256,629 sentence pairs, 61.67M words) - TMX format' href="download.php?f=Europarl3/nl-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Dutch-Swedish (1,142,067 sentence pairs, 51.64M words) - TMX format' href="download.php?f=Europarl3/nl-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>pt</th><td>660</td> <td>40.9M</td> <td>1.4M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-Danish (1,262,818 sentence pairs, 59.92M words) - Moses format' href="download.php?f=Europarl3/da-pt.txt.zip">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-German (1,260,119 sentence pairs, 60.63M words) - Moses format' href="download.php?f=Europarl3/de-pt.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Portuguese-Greek (656,390 sentence pairs, 33.33M words) - Moses format' href="download.php?f=Europarl3/el-pt.txt.zip">0.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-English (1,284,202 sentence pairs, 64.53M words) - Moses format' href="download.php?f=Europarl3/en-pt.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Spanish (1,265,770 sentence pairs, 65.10M words) - Moses format' href="download.php?f=Europarl3/es-pt.txt.zip">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Finnish (1,202,023 sentence pairs, 50.36M words) - Moses format' href="download.php?f=Europarl3/fi-pt.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-French (1,288,517 sentence pairs, 66.63M words) - Moses format' href="download.php?f=Europarl3/fr-pt.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Italian (1,207,522 sentence pairs, 62.12M words) - Moses format' href="download.php?f=Europarl3/it-pt.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Dutch (1,273,178 sentence pairs, 61.84M words) - Moses format' href="download.php?f=Europarl3/nl-pt.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Swedish (1,096,686 sentence pairs, 52.84M words) - TMX format' href="download.php?f=Europarl3/pt-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th>sv</th><td>611</td> <td>33.4M</td> <td>1.5M</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Danish (1,150,265 sentence pairs, 49.85M words) - Moses format' href="download.php?f=Europarl3/da-sv.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-German (1,167,977 sentence pairs, 50.72M words) - Moses format' href="download.php?f=Europarl3/de-sv.txt.zip">1.2M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Swedish-Greek (654,075 sentence pairs, 30.50M words) - Moses format' href="download.php?f=Europarl3/el-sv.txt.zip">0.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-English (1,153,904 sentence pairs, 53.66M words) - Moses format' href="download.php?f=Europarl3/en-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Spanish (1,136,845 sentence pairs, 54.06M words) - Moses format' href="download.php?f=Europarl3/es-sv.txt.zip">1.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Swedish-Finnish (1,171,666 sentence pairs, 44.71M words) - Moses format' href="download.php?f=Europarl3/fi-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-French (1,163,459 sentence pairs, 55.91M words) - Moses format' href="download.php?f=Europarl3/fr-sv.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Italian (1,079,164 sentence pairs, 51.57M words) - Moses format' href="download.php?f=Europarl3/it-sv.txt.zip">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Dutch (1,159,289 sentence pairs, 51.78M words) - Moses format' href="download.php?f=Europarl3/nl-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Portuguese (1,115,365 sentence pairs, 52.99M words) - Moses format' href="download.php?f=Europarl3/pt-sv.txt.zip">1.1M</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p /><hr /><div class="footer"></div>
</body>
</html>