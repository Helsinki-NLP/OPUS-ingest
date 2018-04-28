<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>TEP</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>TEP</h1><p><a href="http://ece.ut.ac.ir/nlp/resources.html">TEP: Tehran English-Persian parallel corpus</a></p><p>The first free Eng-Per corpus, provided by the Natural Language and Text Processing Laboratory, University of Tehran</p><p>Usage of this package for any research or non-commercial purposes requires the precondition that you cite the following paper:</p><p>M. T. Pilevar, H. Faili, and A. H. Pilevar, “TEP: Tehran English-Persian Parallel Corpus”, in proceedings of 12th International Conference on Intelligent Text Processing and Computational Linguistics (CICLing-2011). </p><p>2 languages, total number of files: 2<br>total number of tokens: 8.90M<br>total number of sentence fragments: 1.22M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="TEP/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="TEP/v1/fa_sample.html">fa</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TEP/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Persian (sample file)" href="TEP/v1/en-fa_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=TEP/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TEP/v1/xml/fa.zip">fa</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (0.6M links, 8.9M tokens)" href="download.php?f=TEP/v1/xml/en-fa.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=TEP/v1/raw/fa.zip">fa</a></th></tr>
<tr><th></th>
<th>en</th>
<th>fa</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=TEP/v1/mono/TEP.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=TEP/v1/mono/TEP.fa.gz">fa</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=TEP/v1/mono/TEP.raw.en.gz">en</a>
</th><td>1</td> <td>4.5M</td> <td>0.6M</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Persian (594,353 sentence pairs, 8.82M words) - TMX format' href="download.php?f=TEP/v1/tmx/en-fa.tmx.gz">0.6M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=TEP/v1/mono/TEP.raw.fa.gz">fa</a>
</th><td>1</td> <td>4.4M</td> <td>0.6M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Persian-English (612,086 sentence pairs, 8.90M words) - Moses format' href="download.php?f=TEP/v1/moses/en-fa.txt.zip">0.6M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>