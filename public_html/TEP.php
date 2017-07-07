<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>TEP</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>TEP</h1><p><a href="http://ece.ut.ac.ir/nlp/resources.html">TEP: Tehran English-Persian parallel corpus</a></p><p>The first free Eng-Per corpus, provided by the Natural Language and Text Processing Laboratory, University of Tehran</p><p>Usage of this package for any research or non-commercial purposes requires the precondition that you cite the following paper:</p><p>M. T. Pilevar, H. Faili, and A. H. Pilevar, “TEP: Tehran English-Persian Parallel Corpus”, in proceedings of 12th International Conference on Intelligent Text Processing and Computational Linguistics (CICLing-2011). </p><p />2 languages, total number of files: 2<br />total number of tokens: 8.90M<br />total number of sentence fragments: 1.22M<br /><p />Please <a href="http://opus.lingfil.uu.se/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/><h3>Download</h3>Complete download (XML): <a href="download.php?f=TEP/TEP0.1.tar.gz">TEP0.1.tar.gz</a> (50M
)<br /><p /><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="TEP/en_sample.html">en</a></th>
<th><a rel="nofollow" href="TEP/fa_sample.html">fa</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TEP/en.tar.gz">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Persian (sample file)" href="TEP/en-fa_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TEP/fa.tar.gz">fa</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (0.6M links, 8.9M tokens)" href="download.php?f=TEP/xml/en-fa.xml.gz">ces</a></td>
<th></th>
<th>fa</th></tr>
<tr><th></th>
<th>en</th>
<th>fa</th>
<th></th></tr>
</table>
</div><p /><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>en</th><th>fa</th></tr> <tr><th>en</th><td>1</td> <td>4.5M</td> <td>0.6M</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Persian (594,353 sentence pairs, 8.82M words) - TMX format' href="download.php?f=TEP/en-fa.tmx.gz">0.6M</a>
</td></tr> <tr><th>fa</th><td>1</td> <td>4.4M</td> <td>0.6M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Persian-English (612,086 sentence pairs, 8.90M words) - Moses format' href="download.php?f=TEP/en-fa.txt.zip">0.6M</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p /><hr /><div class="footer"></div>
</body>
</html>