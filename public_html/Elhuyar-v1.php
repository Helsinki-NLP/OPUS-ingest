<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Elhuyar</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Elhuyar</h1>A corpus provided by the foundation Elhuyar (http://webcorpusak.elhuyar.eus/sarrera_paraleloa.html) and submitted to OPUS by Joseba Garcia Beaumont<p>2 languages, total number of files: 2<br>total number of tokens: 20.09M<br>total number of sentence fragments: 1.35M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. Reference: San Vicente, I. and I. Manterola (2012). <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/231_Paper.pdf">PaCo2: A Fully Automated tool for gathering Parallel Corpora from the Web</a>. In Proceedings of the 8th international conference on Language Resources and Evaluation, LREC12. 23-25 May, Istanbul, Turkey.<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Elhuyar/v1/es_sample.html">es</a></th>
<th><a rel="nofollow" href="Elhuyar/v1/eu_sample.html">eu</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Elhuyar/v1/xml/es.zip">es</a></th>
<th></th>
<td><a rel="nofollow" title="Spanish-Basque (sample file)" href="Elhuyar/v1/es-eu_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Elhuyar/v1/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Elhuyar/v1/xml/eu.zip">eu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (0.6M links, 20.1M tokens)" href="download.php?f=Elhuyar/v1/xml/es-eu.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Elhuyar/v1/raw/eu.zip">eu</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=Elhuyar/v1/parsed/es.zip">es</a></th>
<th><a rel="nofollow" href="download.php?f=Elhuyar/v1/parsed/eu.zip">eu</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=Elhuyar/v1/mono/Elhuyar.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=Elhuyar/v1/mono/Elhuyar.eu.gz">eu</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=Elhuyar/v1/mono/Elhuyar.raw.es.gz">es</a>
</th><td>1</td> <td>11.2M</td> <td>0.7M</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Basque (610,796 sentence pairs, 16.82M words) - TMX format' href="download.php?f=Elhuyar/v1/tmx/es-eu.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=Elhuyar/v1/mono/Elhuyar.raw.eu.gz">eu</a>
</th><td>1</td> <td>8.9M</td> <td>0.7M</td><td bgcolor="#daffc7"><a rel="nofollow" title='Basque-Spanish (642,347 sentence pairs, 17.34M words) - Moses format' href="download.php?f=Elhuyar/v1/moses/es-eu.txt.zip">0.6M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>