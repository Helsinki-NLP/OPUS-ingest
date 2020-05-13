<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>FINLEX</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>FINLEX</h1>The <a href="https://www.finlex.fi/en/">Finlex Data Base</a> is a comprehensive collection of legislative and other judicial information of Finland, which is available in Finnish, Swedish and partially in English. This corpus is taken from the <a href="https://data.finlex.fi/en/main">Semantic Finlex serice</a> that provides the data as linked open data and also <a href="https://data.finlex.fi/en/download">raw XML files</a>. The data has been pre-processed and paragraph-aligned by <a href="https://kitwiki.csc.fi/twiki/bin/view/FinCLARIN/KielipankkiFrontpage">FIN-CLARIN</a> and the team behind the <a href="https://www.kielipankki.fi/language-bank/">Language Bank of Finland</a>.<p>2 languages, total number of files: 91,644<br>total number of tokens: 54.32M<br>total number of sentence fragments: 2.36M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="FINLEX/v1/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="FINLEX/v1/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=FINLEX/v1/xml/fi.zip">fi</a></th>
<th></th>
<td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="FINLEX/v1/fi-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=FINLEX/v1/raw/fi.zip">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=FINLEX/v1/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (45,822 aligned documents, 1.2M links, 54.3M tokens)" href="download.php?f=FINLEX/v1/xml/fi-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=FINLEX/v1/raw/sv.zip">sv</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=FINLEX/v1/parsed/fi.zip">fi</a></th>
<th><a rel="nofollow" href="download.php?f=FINLEX/v1/parsed/sv.zip">sv</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=FINLEX/v1/mono/fi.tok.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=FINLEX/v1/mono/sv.tok.gz">sv</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=FINLEX/v1/mono/fi.txt.gz">fi</a>
</th><td>45,822</td> <td>23.9M</td> <td>1.2M</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Swedish (879,859 sentence pairs, 42.91M words) - TMX format' href="download.php?f=FINLEX/v1/tmx/fi-sv.tmx.gz">0.9M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=FINLEX/v1/mono/sv.txt.gz">sv</a>
</th><td>45,822</td> <td>30.4M</td> <td>1.2M</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Finnish (1,157,566 sentence pairs, 49.29M words) - Moses format' href="download.php?f=FINLEX/v1/moses/fi-sv.txt.zip">1.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>