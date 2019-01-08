<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MontenegrinSubs</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MontenegrinSubs</h1><p>2 languages, total number of files: 220<br>total number of tokens: 1.07M<br>total number of sentence fragments: 0.14M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MontenegrinSubs/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="MontenegrinSubs/v1/me_sample.html">me</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MontenegrinSubs/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-me (sample file)" href="MontenegrinSubs/v1/en-me_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MontenegrinSubs/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MontenegrinSubs/v1/xml/me.zip">me</a></th>
<td><a rel="nofollow" title="sentence alignments for 'me-English' (110 aligned documents, 68.5k links, 1.1M tokens)" href="download.php?f=MontenegrinSubs/v1/xml/en-me.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MontenegrinSubs/v1/raw/me.zip">me</a></th></tr>
<tr><th></th>
<th>en</th>
<th>me</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=MontenegrinSubs/v1/mono/MontenegrinSubs.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized me plain text' href="download.php?f=MontenegrinSubs/v1/mono/MontenegrinSubs.me.gz">me</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=MontenegrinSubs/v1/mono/MontenegrinSubs.raw.en.gz">en</a>
</th><td>110</td> <td>0.6M</td> <td>73.5k</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-me (58,934 sentence pairs, 0.78M words) - TMX format' href="download.php?f=MontenegrinSubs/v1/tmx/en-me.tmx.gz">58.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized me plain text' href="download.php?f=MontenegrinSubs/v1/mono/MontenegrinSubs.raw.me.gz">me</a>
</th><td>110</td> <td>0.5M</td> <td>69.5k</td><td bgcolor="#fffdf1"><a rel="nofollow" title='me-English (65,042 sentence pairs, 0.80M words) - Moses format' href="download.php?f=MontenegrinSubs/v1/moses/en-me.txt.zip">65.0k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>