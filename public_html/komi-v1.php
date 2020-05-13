<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>komi</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>komi v1</h1>This is a parallel corpus of Komi-Russian legal texts taken from <a href="http://rkomi.ru/">http://rkomi.ru/</a> and <a href="http://rkomi.ru/km/">http://rkomi.ru/km/</a> collected by Marina Fedina<p>2 languages, total number of files: 1,377<br>total number of tokens: 1.40M<br>total number of sentence fragments: 84.71k<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <h3>Other releases:</h3><p><ul></ul></p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="komi/v1/kv_sample.html">kv</a></th>
<th><a rel="nofollow" href="komi/v1/ru_sample.html">ru</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=komi/v1/xml/kv.zip">kv</a></th>
<th></th>
<td><a rel="nofollow" title="Komi-Russian (sample file)" href="komi/v1/kv-ru_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=komi/v1/raw/kv.zip">kv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=komi/v1/xml/ru.zip">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Komi' (688 aligned documents, 35.4k links, 1.4M tokens)" href="download.php?f=komi/v1/xml/kv-ru.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=komi/v1/raw/ru.zip">ru</a></th></tr>
<tr><th></th>
<th>kv</th>
<th><a rel="nofollow" href="download.php?f=komi/v1/parsed/ru.zip">ru</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized kv plain text' href="download.php?f=komi/v1/mono/kv.tok.gz">kv</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=komi/v1/mono/ru.tok.gz">ru</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kv plain text' href="download.php?f=komi/v1/mono/kv.txt.gz">kv</a>
</th><td>688</td> <td>0.7M</td> <td>41.5k</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=komi/v1/mono/ru.txt.gz">ru</a>
</th><td>689</td> <td>0.7M</td> <td>43.2k</td><td bgcolor="#ffffef"><a rel="nofollow" title='Russian-Komi (35,172 sentence pairs, 1.05M words) - Moses format' href="download.php?f=komi/v1/moses/kv-ru.txt.zip">35.2k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>