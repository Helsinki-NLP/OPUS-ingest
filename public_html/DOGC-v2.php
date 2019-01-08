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
<div class="header"><?php include("header.php"); ?></div><h1>DOGC</h1>This is a collection of documents from the official journal of the Catalan Goverment in Catalan and Spanish provided by Antoni Oliver Gonzalez from the Universitat Oberta de Catalunya. The data is provided under the license provided at <a href="http://www.gencat.cat/web/cat/avis_legal.htm">http://www.gencat.cat/web/cat/avis_legal.htm</a><p>2 languages, total number of files: 2<br>total number of tokens: 311.16M<br>total number of sentence fragments: 21.87M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="DOGC/v2/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="DOGC/v2/es_sample.html">es</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DOGC/v2/xml/ca.zip">ca</a></th>
<th></th>
<td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="DOGC/v2/ca-es_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=DOGC/v2/raw/ca.zip">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=DOGC/v2/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (10.9M links, 167.0M tokens)" href="download.php?f=DOGC/v2/xml/ca-es.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=DOGC/v2/raw/es.zip">es</a></th></tr>
<tr><th></th>
<th>ca</th>
<th>es</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=DOGC/v2/mono/DOGC.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=DOGC/v2/mono/DOGC.es.gz">es</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=DOGC/v2/mono/DOGC.raw.ca.gz">ca</a>
</th><td>1</td> <td>163.0M</td> <td>10.9M</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Catalan-Spanish (4,763,575 sentence pairs, 219.45M words) - TMX format' href="download.php?f=DOGC/v2/tmx/ca-es.tmx.gz">4.8M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=DOGC/v2/mono/DOGC.raw.es.gz">es</a>
</th><td>1</td> <td>148.2M</td> <td>10.9M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Catalan (10,933,622 sentence pairs, 313.42M words) - Moses format' href="download.php?f=DOGC/v2/moses/ca-es.txt.zip">10.9M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>