<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Bianet</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Bianet</h1>A parallel news corpus in Turkish, Kurdish and English; Source: <a href="https://d-ataman.github.io/bianet/">https://d-ataman.github.io/bianet/</a><br/>Bianet collects 3,214 Turkish articles with their sentence-aligned Kurdish or English translations from the <a href="http://bianet.org/">Bianet online newspaper</a>. This corpus is distributed under the CC-BY-SA-4.0 open license.<p>3 languages, 3 bitexts<br>total number of files: 6<br>total number of tokens: 2.25M<br>total number of sentence fragments: 0.14M<br><p>If you use Bianet, please cite: Ataman, D. (2018) Bianet: A Parallel News Corpus in Turkish, Kurdish and English. In Proceedings of the LREC 2018 Workshop MLP-Moment. pp. 14-17. <a href="http://lrec-conf.org/workshops/lrec2018/W19/pdf/6_W19.pdf">pdf</a><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Bianet/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Bianet/v1/ku_sample.html">ku</a></th>
<th><a rel="nofollow" href="Bianet/v1/tr_sample.html">tr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Bianet/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Kurdish (sample file)" href="Bianet/v1/en-ku_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="Bianet/v1/en-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Bianet/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Bianet/v1/xml/ku.zip">ku</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-English' (6.5k links, 0.3M tokens)" href="download.php?f=Bianet/v1/xml/en-ku.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Kurdish-Turkish (sample file)" href="Bianet/v1/ku-tr_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Bianet/v1/raw/ku.zip">ku</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Bianet/v1/xml/tr.zip">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (35.1k links, 1.6M tokens)" href="download.php?f=Bianet/v1/xml/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Kurdish' (7.4k links, 0.3M tokens)" href="download.php?f=Bianet/v1/xml/ku-tr.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Bianet/v1/raw/tr.zip">tr</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=Bianet/v1/parsed/en.zip">en</a></th>
<th>ku</th>
<th><a rel="nofollow" href="download.php?f=Bianet/v1/parsed/tr.zip">tr</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Bianet/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized ku plain text' href="download.php?f=Bianet/v1/mono/ku.tok.gz">ku</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=Bianet/v1/mono/tr.tok.gz">tr</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Bianet/v1/mono/en.txt.gz">en</a>
</th><td>2</td> <td>1.0M</td> <td>57.4k</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='English-Kurdish (6,051 sentence pairs, 0.26M words) - TMX format' href="download.php?f=Bianet/v1/tmx/en-ku.tmx.gz">6.1k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='English-Turkish (31,749 sentence pairs, 1.27M words) - TMX format' href="download.php?f=Bianet/v1/tmx/en-tr.tmx.gz">31.7k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ku plain text' href="download.php?f=Bianet/v1/mono/ku.txt.gz">ku</a>
</th><td>2</td> <td>0.3M</td> <td>19.3k</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Kurdish-English (6,402 sentence pairs, 0.26M words) - Moses format' href="download.php?f=Bianet/v1/moses/en-ku.txt.zip">6.4k</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Kurdish-Turkish (6,944 sentence pairs, 0.26M words) - TMX format' href="download.php?f=Bianet/v1/tmx/ku-tr.tmx.gz">6.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=Bianet/v1/mono/tr.txt.gz">tr</a>
</th><td>2</td> <td>0.9M</td> <td>61.2k</td><td bgcolor="#ffffea"><a rel="nofollow" title='Turkish-English (34,770 sentence pairs, 1.32M words) - Moses format' href="download.php?f=Bianet/v1/moses/en-tr.txt.zip">34.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Turkish-Kurdish (7,325 sentence pairs, 0.26M words) - Moses format' href="download.php?f=Bianet/v1/moses/ku-tr.txt.zip">7.3k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>