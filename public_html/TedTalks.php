<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>TedTalks</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>TedTalks</h1>This is a Croatian-English parallel corpus of transcribed and translated TED talks, originally extracted from <a href="https://wit3.fbk.eu">https://wit3.fbk.eu</a>. The corpus is compiled by &#381;eljko Agi&#263; and is taken from <a href="http://lt.ffzg.hr/zagic">http://lt.ffzg.hr/zagic</a> provided under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">CC-BY-NC-SA license</a>.<p>2 languages, total number of files: 2<br>total number of tokens: 2.81M<br>total number of sentence fragments: 0.17M<br><p>Please <a href="http://opus.nlpl.eu/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download (XML): <a href="download.php?f=TedTalks/TedTalks0.1.tar.gz">TedTalks0.1.tar.gz</a> (26M
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="TedTalks/en_sample.html">en</a></th>
<th><a rel="nofollow" href="TedTalks/hr_sample.html">hr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TedTalks/en.tar.gz">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="TedTalks/en-hr_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=TedTalks/hr.tar.gz">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (86.3k links, 2.8M tokens)" href="download.php?f=TedTalks/en-hr.xml.gz">ces</a></td>
<th></th>
<th>hr</th></tr>
<tr><th></th>
<th>en</th>
<th>hr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>en</th><th>hr</th></tr> <tr><th>en</th><td>1</td> <td>1.5M</td> <td>86.9k</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='English-Croatian (81,969 sentence pairs, 2.71M words) - TMX format' href="download.php?f=TedTalks/en-hr.tmx.gz">82.0k</a>
</td></tr> <tr><th>hr</th><td>1</td> <td>1.3M</td> <td>87.1k</td><td bgcolor="#edffce"><a rel="nofollow" title='Croatian-English (86,348 sentence pairs, 2.81M words) - Moses format' href="download.php?f=TedTalks/en-hr.txt.zip">86.3k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>