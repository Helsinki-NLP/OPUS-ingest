<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>memat</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>memat</h1><a href="http://statmt.org/memat/">Xhosa-English parallel corpora</a>, funded by EPSRC, the Medical Machine Translation project worked on machine translation between ixiXhosa and English, with a focus on the medical domain.<p>2 languages, total number of files: 80<br>total number of tokens: 4.03M<br>total number of sentence fragments: 0.33M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. Please, acknowledge <a href="http://statmt.org/memat/">the EPSRC project</a> and the OPUS project for providing the data.<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="memat/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="memat/v1/xh_sample.html">xh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=memat/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Xhosa (sample file)" href="memat/v1/en-xh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=memat/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=memat/v1/xml/xh.zip">xh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-English' (40 aligned documents, 0.2M links, 4.0M tokens)" href="download.php?f=memat/v1/xml/en-xh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=memat/v1/raw/xh.zip">xh</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=memat/v1/parsed/en.zip">en</a></th>
<th>xh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=memat/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=memat/v1/mono/xh.tok.gz">xh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=memat/v1/mono/en.txt.gz">en</a>
</th><td>40</td> <td>2.4M</td> <td>0.2M</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='English-Xhosa (150,453 sentence pairs, 3.44M words) - TMX format' href="download.php?f=memat/v1/tmx/en-xh.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=memat/v1/mono/xh.txt.gz">xh</a>
</th><td>40</td> <td>1.7M</td> <td>0.2M</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Xhosa-English (154,763 sentence pairs, 3.46M words) - Moses format' href="download.php?f=memat/v1/moses/en-xh.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>