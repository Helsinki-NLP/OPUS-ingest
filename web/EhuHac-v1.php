<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>EhuHac</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>EhuHac</h1>Source: Hizkuntzen Arteko Corpusa (HAC). Ibon Sarasola, Pello Salaburu, Josu Landa, 2015. Bilbo: UPV/EHU (Euskara Institutoa). ISBN: 978-84-693-9891-3 (https://www.ehu.eus/ehg/hac/)<p>4 languages, 3 bitexts<br>total number of files: 6<br>total number of tokens: 66.65M<br>total number of sentence fragments: 3.90M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. Data available from https://www.ehu.eus/ehg/hac/liburua, submitted to OPUS by Joseba Garcia Beaumont<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="EhuHac/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="EhuHac/v1/es_sample.html">es</a></th>
<th><a rel="nofollow" href="EhuHac/v1/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="EhuHac/v1/fr_sample.html">fr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EhuHac/v1/xml/en.zip">en</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="English-Basque (sample file)" href="EhuHac/v1/en-eu_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=EhuHac/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EhuHac/v1/xml/es.zip">es</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Basque (sample file)" href="EhuHac/v1/es-eu_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=EhuHac/v1/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EhuHac/v1/xml/eu.zip">eu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (0.6M links, 22.2M tokens)" href="download.php?f=EhuHac/v1/xml/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (0.6M links, 21.9M tokens)" href="download.php?f=EhuHac/v1/xml/es-eu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Basque-French (sample file)" href="EhuHac/v1/eu-fr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EhuHac/v1/raw/eu.zip">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EhuHac/v1/xml/fr.zip">fr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Basque' (0.6M links, 22.5M tokens)" href="download.php?f=EhuHac/v1/xml/eu-fr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=EhuHac/v1/raw/fr.zip">fr</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=EhuHac/v1/parsed/en.zip">en</a></th>
<th><a rel="nofollow" href="download.php?f=EhuHac/v1/parsed/es.zip">es</a></th>
<th><a rel="nofollow" href="download.php?f=EhuHac/v1/parsed/eu.zip">eu</a></th>
<th><a rel="nofollow" href="download.php?f=EhuHac/v1/parsed/fr.zip">fr</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.eu.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.fr.gz">fr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.raw.en.gz">en</a>
</th><td>1</td> <td>12.7M</td> <td>0.6M</td><td></td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Basque (563,633 sentence pairs, 18.07M words) - TMX format' href="download.php?f=EhuHac/v1/tmx/en-eu.tmx.gz">0.6M</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.raw.es.gz">es</a>
</th><td>1</td> <td>12.0M</td> <td>0.7M</td><td></td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Spanish-Basque (586,839 sentence pairs, 18.14M words) - TMX format' href="download.php?f=EhuHac/v1/tmx/es-eu.tmx.gz">0.6M</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.raw.eu.gz">eu</a>
</th><td>3</td> <td>29.1M</td> <td>2.0M</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Basque-English (585,210 sentence pairs, 18.65M words) - Moses format' href="download.php?f=EhuHac/v1/moses/en-eu.txt.zip">0.6M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Basque-Spanish (609,912 sentence pairs, 18.63M words) - Moses format' href="download.php?f=EhuHac/v1/moses/es-eu.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Basque-French (581,379 sentence pairs, 18.13M words) - TMX format' href="download.php?f=EhuHac/v1/tmx/eu-fr.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=EhuHac/v1/mono/EhuHac.raw.fr.gz">fr</a>
</th><td>1</td> <td>12.8M</td> <td>0.6M</td><td></td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-Basque (602,360 sentence pairs, 18.62M words) - Moses format' href="download.php?f=EhuHac/v1/moses/eu-fr.txt.zip">0.6M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>