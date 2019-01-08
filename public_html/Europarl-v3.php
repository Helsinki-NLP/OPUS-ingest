<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Europarl</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Europarl</h1><p>A parallel corpus extracted from the European Parliament web site by Philipp Koehn (University of Edinburgh). Appr. 40 million words per language. The main intended use is to aid statistical machine translation research.</p><p>More information can be found at <a href="http://www.statmt.org/europarl/">http://www.statmt.org/europarl/</a>. The main difference in this release vs. the first release in 2002 and second release in 2003 is that it is larger and it comes with improved processing tools that allow the creation of parallel corpora between any two of the 11 languages. Some data is now tagged with the original language the text was spoken in.</p><p>11 languages, 55 bitexts<br>total number of files: 7,034<br>total number of tokens: 404.01M<br>total number of sentence fragments: 15.81M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Europarl/v3/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Europarl/v3/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Europarl/v3/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Europarl/v3/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Europarl/v3/es_sample.html">es</a></th>
<th><a rel="nofollow" href="Europarl/v3/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Europarl/v3/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Europarl/v3/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Europarl/v3/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Europarl/v3/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Europarl/v3/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/da.zip">da</a></th>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="Europarl/v3/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="Europarl/v3/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="Europarl/v3/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="Europarl/v3/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="Europarl/v3/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="Europarl/v3/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="Europarl/v3/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="Europarl/v3/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="Europarl/v3/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="Europarl/v3/da-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/da.zip">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/de.zip">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (656 aligned documents, 1.3M links, 74.6M tokens)" href="download.php?f=Europarl/v3/xml/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="Europarl/v3/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="Europarl/v3/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="Europarl/v3/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="Europarl/v3/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="Europarl/v3/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="Europarl/v3/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="Europarl/v3/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="Europarl/v3/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="Europarl/v3/de-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/el.zip">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (534 aligned documents, 0.7M links, 56.0M tokens)" href="download.php?f=Europarl/v3/xml/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (535 aligned documents, 0.7M links, 56.0M tokens)" href="download.php?f=Europarl/v3/xml/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="Europarl/v3/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="Europarl/v3/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="Europarl/v3/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="Europarl/v3/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="Europarl/v3/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="Europarl/v3/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="Europarl/v3/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="Europarl/v3/el-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (655 aligned documents, 1.3M links, 76.5M tokens)" href="download.php?f=Europarl/v3/xml/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (656 aligned documents, 1.3M links, 76.6M tokens)" href="download.php?f=Europarl/v3/xml/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (534 aligned documents, 0.7M links, 57.4M tokens)" href="download.php?f=Europarl/v3/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="Europarl/v3/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="Europarl/v3/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Europarl/v3/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="Europarl/v3/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="Europarl/v3/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="Europarl/v3/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="Europarl/v3/en-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (657 aligned documents, 1.3M links, 77.7M tokens)" href="download.php?f=Europarl/v3/xml/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (657 aligned documents, 1.3M links, 77.6M tokens)" href="download.php?f=Europarl/v3/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (536 aligned documents, 0.7M links, 58.6M tokens)" href="download.php?f=Europarl/v3/xml/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (656 aligned documents, 1.3M links, 79.5M tokens)" href="download.php?f=Europarl/v3/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="Europarl/v3/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="Europarl/v3/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="Europarl/v3/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="Europarl/v3/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="Europarl/v3/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="Europarl/v3/es-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/fi.zip">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (608 aligned documents, 1.2M links, 60.9M tokens)" href="download.php?f=Europarl/v3/xml/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (608 aligned documents, 1.2M links, 60.8M tokens)" href="download.php?f=Europarl/v3/xml/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (491 aligned documents, 0.6M links, 44.6M tokens)" href="download.php?f=Europarl/v3/xml/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (607 aligned documents, 1.3M links, 62.6M tokens)" href="download.php?f=Europarl/v3/xml/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (609 aligned documents, 1.2M links, 63.7M tokens)" href="download.php?f=Europarl/v3/xml/es-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="Europarl/v3/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="Europarl/v3/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="Europarl/v3/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="Europarl/v3/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="Europarl/v3/fi-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (659 aligned documents, 1.3M links, 81.0M tokens)" href="download.php?f=Europarl/v3/xml/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (659 aligned documents, 1.3M links, 80.9M tokens)" href="download.php?f=Europarl/v3/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (537 aligned documents, 0.7M links, 61.1M tokens)" href="download.php?f=Europarl/v3/xml/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (658 aligned documents, 1.3M links, 82.9M tokens)" href="download.php?f=Europarl/v3/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (660 aligned documents, 1.3M links, 84.0M tokens)" href="download.php?f=Europarl/v3/xml/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (611 aligned documents, 1.3M links, 66.8M tokens)" href="download.php?f=Europarl/v3/xml/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Italian (sample file)" href="Europarl/v3/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="Europarl/v3/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="Europarl/v3/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="Europarl/v3/fr-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/it.zip">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (655 aligned documents, 1.2M links, 76.1M tokens)" href="download.php?f=Europarl/v3/xml/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (655 aligned documents, 1.2M links, 75.9M tokens)" href="download.php?f=Europarl/v3/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (533 aligned documents, 0.6M links, 57.1M tokens)" href="download.php?f=Europarl/v3/xml/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (654 aligned documents, 1.3M links, 77.9M tokens)" href="download.php?f=Europarl/v3/xml/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (656 aligned documents, 1.2M links, 79.0M tokens)" href="download.php?f=Europarl/v3/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (607 aligned documents, 1.2M links, 62.2M tokens)" href="download.php?f=Europarl/v3/xml/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (658 aligned documents, 1.3M links, 82.4M tokens)" href="download.php?f=Europarl/v3/xml/fr-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Dutch (sample file)" href="Europarl/v3/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="Europarl/v3/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="Europarl/v3/it-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/it.zip">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/nl.zip">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (656 aligned documents, 1.3M links, 76.7M tokens)" href="download.php?f=Europarl/v3/xml/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (656 aligned documents, 1.3M links, 76.6M tokens)" href="download.php?f=Europarl/v3/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (534 aligned documents, 0.7M links, 57.6M tokens)" href="download.php?f=Europarl/v3/xml/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (655 aligned documents, 1.3M links, 78.5M tokens)" href="download.php?f=Europarl/v3/xml/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (657 aligned documents, 1.3M links, 79.6M tokens)" href="download.php?f=Europarl/v3/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (608 aligned documents, 1.3M links, 62.7M tokens)" href="download.php?f=Europarl/v3/xml/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (659 aligned documents, 1.3M links, 83.0M tokens)" href="download.php?f=Europarl/v3/xml/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (655 aligned documents, 1.3M links, 78.0M tokens)" href="download.php?f=Europarl/v3/xml/it-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="Europarl/v3/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="Europarl/v3/nl-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/nl.zip">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (657 aligned documents, 1.3M links, 78.0M tokens)" href="download.php?f=Europarl/v3/xml/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (657 aligned documents, 1.3M links, 77.9M tokens)" href="download.php?f=Europarl/v3/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (535 aligned documents, 0.7M links, 58.7M tokens)" href="download.php?f=Europarl/v3/xml/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (656 aligned documents, 1.3M links, 79.9M tokens)" href="download.php?f=Europarl/v3/xml/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (658 aligned documents, 1.3M links, 81.0M tokens)" href="download.php?f=Europarl/v3/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (609 aligned documents, 1.2M links, 64.0M tokens)" href="download.php?f=Europarl/v3/xml/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (660 aligned documents, 1.3M links, 84.4M tokens)" href="download.php?f=Europarl/v3/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (656 aligned documents, 1.2M links, 79.4M tokens)" href="download.php?f=Europarl/v3/xml/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (659 aligned documents, 1.3M links, 80.3M tokens)" href="download.php?f=Europarl/v3/xml/nl-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="Europarl/v3/pt-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/pt.zip">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Europarl/v3/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (608 aligned documents, 1.2M links, 68.1M tokens)" href="download.php?f=Europarl/v3/xml/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (608 aligned documents, 1.2M links, 67.9M tokens)" href="download.php?f=Europarl/v3/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (489 aligned documents, 0.7M links, 49.8M tokens)" href="download.php?f=Europarl/v3/xml/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (608 aligned documents, 1.2M links, 69.8M tokens)" href="download.php?f=Europarl/v3/xml/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (610 aligned documents, 1.1M links, 70.9M tokens)" href="download.php?f=Europarl/v3/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (606 aligned documents, 1.2M links, 59.2M tokens)" href="download.php?f=Europarl/v3/xml/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (611 aligned documents, 1.2M links, 74.0M tokens)" href="download.php?f=Europarl/v3/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (607 aligned documents, 1.1M links, 69.3M tokens)" href="download.php?f=Europarl/v3/xml/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (609 aligned documents, 1.2M links, 70.0M tokens)" href="download.php?f=Europarl/v3/xml/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (610 aligned documents, 1.1M links, 71.3M tokens)" href="download.php?f=Europarl/v3/xml/pt-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Europarl/v3/raw/sv.zip">sv</a></th></tr>
<tr><th></th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>fi</th>
<th>fr</th>
<th>it</th>
<th>nl</th>
<th>pt</th>
<th>sv</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=Europarl/v3/mono/Europarl.da.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=Europarl/v3/mono/Europarl.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=Europarl/v3/mono/Europarl.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Europarl/v3/mono/Europarl.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=Europarl/v3/mono/Europarl.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=Europarl/v3/mono/Europarl.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=Europarl/v3/mono/Europarl.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=Europarl/v3/mono/Europarl.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=Europarl/v3/mono/Europarl.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=Europarl/v3/mono/Europarl.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=Europarl/v3/mono/Europarl.sv.gz">sv</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.da.gz">da</a>
</th><td>659</td> <td>37.5M</td> <td>1.6M</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-German (1,261,782 sentence pairs, 58.96M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-de.tmx.gz">1.3M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Danish-Greek (663,552 sentence pairs, 33.01M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-el.tmx.gz">0.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-English (1,276,713 sentence pairs, 62.62M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-en.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Spanish (1,260,569 sentence pairs, 63.16M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-es.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Danish-Finnish (1,211,583 sentence pairs, 48.89M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-French (1,291,418 sentence pairs, 65.13M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Italian (1,205,062 sentence pairs, 61.10M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-it.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Dutch (1,294,996 sentence pairs, 62.55M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Portuguese (1,244,433 sentence pairs, 62.04M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Swedish (1,126,265 sentence pairs, 51.61M words) - TMX format' href="download.php?f=Europarl/v3/tmx/da-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.de.gz">de</a>
</th><td>659</td> <td>37.5M</td> <td>1.5M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Danish (1,283,400 sentence pairs, 59.16M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-de.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='German-Greek (642,450 sentence pairs, 32.29M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-el.tmx.gz">0.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-English (1,285,419 sentence pairs, 63.51M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-en.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-Spanish (1,252,077 sentence pairs, 63.38M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-es.tmx.gz">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='German-Finnish (1,210,198 sentence pairs, 49.38M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-French (1,289,068 sentence pairs, 65.52M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-Italian (1,200,530 sentence pairs, 61.45M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-it.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-Dutch (1,283,182 sentence pairs, 62.65M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-Portuguese (1,239,456 sentence pairs, 62.33M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='German-Swedish (1,122,409 sentence pairs, 51.98M words) - TMX format' href="download.php?f=Europarl/v3/tmx/de-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.el.gz">el</a>
</th><td>537</td> <td>26.3M</td> <td>1.0M</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Greek-Danish (674,801 sentence pairs, 33.10M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-el.txt.zip">0.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Greek-German (652,938 sentence pairs, 32.38M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-el.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-English (646,714 sentence pairs, 33.82M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-en.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Greek-Spanish (652,070 sentence pairs, 34.73M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-es.tmx.gz">0.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Greek-Finnish (602,370 sentence pairs, 26.21M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-fi.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Greek-French (660,609 sentence pairs, 35.19M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-fr.tmx.gz">0.7M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Italian (620,568 sentence pairs, 33.40M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-it.tmx.gz">0.6M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Dutch (657,535 sentence pairs, 34.13M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Greek-Portuguese (646,462 sentence pairs, 34.33M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-pt.tmx.gz">0.6M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Greek-Swedish (640,336 sentence pairs, 31.46M words) - TMX format' href="download.php?f=Europarl/v3/tmx/el-sv.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.en.gz">en</a>
</th><td>658</td> <td>39.4M</td> <td>1.5M</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Danish (1,294,285 sentence pairs, 62.79M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-en.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-German (1,304,847 sentence pairs, 63.69M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-en.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='English-Greek (656,326 sentence pairs, 33.90M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-en.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Spanish (1,279,629 sentence pairs, 66.97M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-es.tmx.gz">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='English-Finnish (1,234,004 sentence pairs, 52.70M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-French (1,312,372 sentence pairs, 69.40M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Italian (1,229,711 sentence pairs, 65.34M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-it.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Dutch (1,291,810 sentence pairs, 66.40M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Portuguese (1,266,137 sentence pairs, 65.95M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Swedish (1,136,301 sentence pairs, 55.12M words) - TMX format' href="download.php?f=Europarl/v3/tmx/en-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.es.gz">es</a>
</th><td>660</td> <td>40.5M</td> <td>1.5M</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Danish (1,279,204 sentence pairs, 63.35M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-es.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-German (1,274,190 sentence pairs, 63.59M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-es.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Spanish-Greek (663,264 sentence pairs, 34.82M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-es.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-English (1,298,692 sentence pairs, 67.15M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-es.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Finnish (1,195,308 sentence pairs, 52.50M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-fi.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-French (1,281,645 sentence pairs, 69.18M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-fr.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Italian (1,201,270 sentence pairs, 65.21M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-it.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Dutch (1,262,519 sentence pairs, 66.15M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Portuguese (1,245,482 sentence pairs, 66.36M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Spanish-Swedish (1,114,478 sentence pairs, 55.37M words) - TMX format' href="download.php?f=Europarl/v3/tmx/es-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.fi.gz">fi</a>
</th><td>611</td> <td>26.4M</td> <td>1.4M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Danish (1,229,395 sentence pairs, 49.03M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-fi.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-German (1,232,448 sentence pairs, 49.55M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-fi.txt.zip">1.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Finnish-Greek (613,075 sentence pairs, 26.28M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-fi.txt.zip">0.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-English (1,253,246 sentence pairs, 52.84M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-fi.txt.zip">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Spanish (1,218,597 sentence pairs, 52.66M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-fi.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-French (1,244,012 sentence pairs, 55.13M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fi-fr.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Italian (1,151,670 sentence pairs, 51.18M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fi-it.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Dutch (1,228,362 sentence pairs, 52.05M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fi-nl.tmx.gz">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Portuguese (1,182,277 sentence pairs, 51.58M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fi-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Swedish (1,147,400 sentence pairs, 45.98M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fi-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.fr.gz">fr</a>
</th><td>662</td> <td>43.7M</td> <td>1.5M</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Danish (1,310,042 sentence pairs, 65.33M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-fr.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-German (1,308,123 sentence pairs, 65.72M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-fr.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='French-Greek (670,528 sentence pairs, 35.28M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-fr.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-English (1,329,782 sentence pairs, 69.58M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-fr.txt.zip">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Spanish (1,300,501 sentence pairs, 69.38M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-fr.txt.zip">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-Finnish (1,262,669 sentence pairs, 55.29M words) - Moses format' href="download.php?f=Europarl/v3/moses/fi-fr.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Italian (1,241,279 sentence pairs, 67.92M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fr-it.tmx.gz">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Dutch (1,311,686 sentence pairs, 68.96M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fr-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Portuguese (1,269,979 sentence pairs, 68.12M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fr-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='French-Swedish (1,145,771 sentence pairs, 57.38M words) - TMX format' href="download.php?f=Europarl/v3/tmx/fr-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.it.gz">it</a>
</th><td>658</td> <td>39.0M</td> <td>1.4M</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Italian-Danish (1,223,552 sentence pairs, 61.28M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-it.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-German (1,217,731 sentence pairs, 61.62M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-it.txt.zip">1.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Italian-Greek (631,604 sentence pairs, 33.49M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-it.txt.zip">0.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-English (1,245,139 sentence pairs, 65.50M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-it.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Spanish (1,218,792 sentence pairs, 65.38M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-it.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Finnish (1,168,846 sentence pairs, 51.32M words) - Moses format' href="download.php?f=Europarl/v3/moses/fi-it.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Italian-French (1,259,491 sentence pairs, 68.11M words) - Moses format' href="download.php?f=Europarl/v3/moses/fr-it.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Dutch (1,229,468 sentence pairs, 65.18M words) - TMX format' href="download.php?f=Europarl/v3/tmx/it-nl.tmx.gz">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Portuguese (1,190,370 sentence pairs, 64.16M words) - TMX format' href="download.php?f=Europarl/v3/tmx/it-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Swedish (1,062,891 sentence pairs, 53.68M words) - TMX format' href="download.php?f=Europarl/v3/tmx/it-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.nl.gz">nl</a>
</th><td>659</td> <td>39.5M</td> <td>1.6M</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Danish (1,312,818 sentence pairs, 62.73M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-nl.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-German (1,298,690 sentence pairs, 62.80M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-nl.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Dutch-Greek (666,490 sentence pairs, 34.22M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-nl.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-English (1,313,076 sentence pairs, 66.60M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-nl.txt.zip">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-Spanish (1,278,115 sentence pairs, 66.31M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-nl.txt.zip">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Dutch-Finnish (1,242,924 sentence pairs, 52.17M words) - Moses format' href="download.php?f=Europarl/v3/moses/fi-nl.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-French (1,328,926 sentence pairs, 69.14M words) - Moses format' href="download.php?f=Europarl/v3/moses/fr-nl.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Italian (1,245,025 sentence pairs, 65.35M words) - Moses format' href="download.php?f=Europarl/v3/moses/it-nl.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Portuguese (1,256,668 sentence pairs, 65.74M words) - TMX format' href="download.php?f=Europarl/v3/tmx/nl-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Dutch-Swedish (1,142,301 sentence pairs, 55.08M words) - TMX format' href="download.php?f=Europarl/v3/tmx/nl-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.pt.gz">pt</a>
</th><td>660</td> <td>40.9M</td> <td>1.4M</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Danish (1,262,818 sentence pairs, 62.22M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-pt.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-German (1,260,119 sentence pairs, 62.53M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-pt.txt.zip">1.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Portuguese-Greek (656,390 sentence pairs, 34.42M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-pt.txt.zip">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-English (1,284,202 sentence pairs, 66.12M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-pt.txt.zip">1.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Spanish (1,265,770 sentence pairs, 66.56M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-pt.txt.zip">1.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Finnish (1,202,023 sentence pairs, 51.74M words) - Moses format' href="download.php?f=Europarl/v3/moses/fi-pt.txt.zip">1.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-French (1,288,517 sentence pairs, 68.31M words) - Moses format' href="download.php?f=Europarl/v3/moses/fr-pt.txt.zip">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Italian (1,207,522 sentence pairs, 64.33M words) - Moses format' href="download.php?f=Europarl/v3/moses/it-pt.txt.zip">1.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Dutch (1,273,178 sentence pairs, 65.91M words) - Moses format' href="download.php?f=Europarl/v3/moses/nl-pt.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Swedish (1,096,865 sentence pairs, 54.30M words) - TMX format' href="download.php?f=Europarl/v3/tmx/pt-sv.tmx.gz">1.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=Europarl/v3/mono/Europarl.raw.sv.gz">sv</a>
</th><td>611</td> <td>33.4M</td> <td>1.5M</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Danish (1,150,265 sentence pairs, 51.80M words) - Moses format' href="download.php?f=Europarl/v3/moses/da-sv.txt.zip">1.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-German (1,167,977 sentence pairs, 52.34M words) - Moses format' href="download.php?f=Europarl/v3/moses/de-sv.txt.zip">1.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Swedish-Greek (654,075 sentence pairs, 31.55M words) - Moses format' href="download.php?f=Europarl/v3/moses/el-sv.txt.zip">0.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-English (1,153,904 sentence pairs, 55.27M words) - Moses format' href="download.php?f=Europarl/v3/moses/en-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Spanish (1,136,845 sentence pairs, 55.56M words) - Moses format' href="download.php?f=Europarl/v3/moses/es-sv.txt.zip">1.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Swedish-Finnish (1,171,666 sentence pairs, 46.15M words) - Moses format' href="download.php?f=Europarl/v3/moses/fi-sv.txt.zip">1.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-French (1,163,459 sentence pairs, 57.55M words) - Moses format' href="download.php?f=Europarl/v3/moses/fr-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Italian (1,079,164 sentence pairs, 53.83M words) - Moses format' href="download.php?f=Europarl/v3/moses/it-sv.txt.zip">1.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Dutch (1,159,289 sentence pairs, 55.24M words) - Moses format' href="download.php?f=Europarl/v3/moses/nl-sv.txt.zip">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Portuguese (1,115,365 sentence pairs, 54.47M words) - Moses format' href="download.php?f=Europarl/v3/moses/pt-sv.txt.zip">1.1M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>