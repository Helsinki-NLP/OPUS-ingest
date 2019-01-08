<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>hrenWaC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>hrenWaC</h1><p>The Croatian-English Parallel Web Corpus - The parallel document pair candidates were automatically extracted from the hrWaC corpus by Nikola Ljubešić. These candidates were manually checked by Daša Berović and Danijela Merkler under the supervision of Marko Tadić. The collection is available from <a href="http://www.nljubesic.net/resources/corpora/hrenwac/">http://www.nljubesic.net/resources/corpora/hrenwac</a> provided under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA license</a></p><p>2 languages, total number of files: 2<br>total number of tokens: 4.96M<br>total number of sentence fragments: 0.20M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="hrenWaC/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="hrenWaC/v1/hr_sample.html">hr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=hrenWaC/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="hrenWaC/v1/en-hr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=hrenWaC/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=hrenWaC/v1/xml/hr.zip">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (99.0k links, 5.0M tokens)" href="download.php?f=hrenWaC/v1/xml/en-hr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=hrenWaC/v1/raw/hr.zip">hr</a></th></tr>
<tr><th></th>
<th>en</th>
<th>hr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=hrenWaC/v1/mono/hrenWaC.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=hrenWaC/v1/mono/hrenWaC.hr.gz">hr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=hrenWaC/v1/mono/hrenWaC.raw.en.gz">en</a>
</th><td>1</td> <td>2.6M</td> <td>99.0k</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Croatian (96,395 sentence pairs, 4.88M words) - TMX format' href="download.php?f=hrenWaC/v1/tmx/en-hr.tmx.gz">96.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=hrenWaC/v1/mono/hrenWaC.raw.hr.gz">hr</a>
</th><td>1</td> <td>2.3M</td> <td>99.0k</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Croatian-English (99,001 sentence pairs, 4.96M words) - Moses format' href="download.php?f=hrenWaC/v1/moses/en-hr.txt.zip">99.0k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>