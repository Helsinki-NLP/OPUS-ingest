<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>OfisPublik</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OfisPublik</h1>Texts from the Ofis Publik ar Brezhoneg (Breton Language Board) provided by Francis Tyers<p>2 languages, total number of files: 278<br>total number of tokens: 2.12M<br>total number of sentence fragments: 0.13M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following articles</a> if you use any part of the corpus in your own work:<br/> <ul><li>Tiedemann, J., 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012) and </li><li>Tyers, F. M. (2009) "Rule-based augmentation of training data in Breton-French statistical machine translation ". Proceedings of the 13th Annual Conference of the European Association of Machine Translation, EAMT09. pp. 213--218</ul><h3>Download</h3>Complete download (XML): <a href="download.php?f=OfisPublik/OfisPublik0.1.tar.gz">OfisPublik0.1.tar.gz</a> (19M
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="OfisPublik/br_sample.html">br</a></th>
<th><a rel="nofollow" href="OfisPublik/fr_sample.html">fr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OfisPublik/br.tar.gz">br</a></th>
<th></th>
<td><a rel="nofollow" title="Breton-French (sample file)" href="OfisPublik/br-fr_sample.html">view</a></td><th>br</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OfisPublik/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Breton' (139 aligned documents, 63.8k links, 2.1M tokens)" href="download.php?f=OfisPublik/xml/br-fr.xml.gz">ces</a></td>
<th></th>
<th>fr</th></tr>
<tr><th></th>
<th>br</th>
<th>fr</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>br</th><th>fr</th></tr> <tr><th>br</th><td>139</td> <td>1.1M</td> <td>63.8k</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Breton-French (62,418 sentence pairs, 1.77M words) - TMX format' href="download.php?f=OfisPublik/br-fr.tmx.gz">62.4k</a>
</td></tr> <tr><th>fr</th><td>139</td> <td>1.0M</td> <td>63.5k</td><td bgcolor="#ffffe3"><a rel="nofollow" title='French-Breton (63,422 sentence pairs, 1.79M words) - Moses format' href="download.php?f=OfisPublik/br-fr.txt.zip">63.4k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>