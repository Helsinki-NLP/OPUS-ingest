<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>DOGC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>DOGC</h1>This is a collection of documents from the official journal of the Catalan Goverment in Catalan and Spanish provided by Antoni Oliver Gonzalez from the Universitat Oberta de Catalunya. The data is provided under the license provided at <a href="http://www.gencat.cat/web/cat/avis_legal.htm">http://www.gencat.cat/web/cat/avis_legal.htm</a><p>2 languages, total number of files: 32<br>total number of tokens: 80.35M<br>total number of sentence fragments: 6.73M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download of aligned documents (in XML): <a href="download.php?f=DOGC/DOGC2014-07-17.tar.gz">DOGC2014-07-17.tar.gz</a> (702M
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="DOGC/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="DOGC/es_sample.html">es</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DOGC/ca.tar.gz">ca</a></th>
<th></th>
<td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="DOGC/ca-es_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=DOGC/ca.raw.tar.gz">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DOGC/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (16 aligned documents, 3.4M links, 80.4M tokens)" href="download.php?f=DOGC/ca-es.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=DOGC/es.raw.tar.gz">es</a></th></tr>
<tr><th></th>
<th>ca</th>
<th>es</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=DOGC/mono/DOGC.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=DOGC/mono/DOGC.es.gz">es</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=DOGC/mono/DOGC.raw.ca.gz">ca</a>
</th><td>16</td> <td>55.2M</td> <td>3.4M</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Catalan-Spanish (1,660,344 sentence pairs, 71.47M words) - TMX format' href="download.php?f=DOGC/ca-es.tmx.gz">1.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=DOGC/mono/DOGC.raw.es.gz">es</a>
</th><td>16</td> <td>25.1M</td> <td>3.4M</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Spanish-Catalan (3,361,309 sentence pairs, 102.45M words) - Moses format' href="download.php?f=DOGC/ca-es.txt.zip">3.4M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>