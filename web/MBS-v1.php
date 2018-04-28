<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>MBS</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>MBS</h1>Corpus "Moniteur belge/Belgisch Staatsblad" provided by Tom Vanallemeersch. See Vanallemeersch (2010) <a href="http://www.ccl.kuleuven.be/~tallem/Paper_Belgisch_Staatsblad_Corpus.pdf">Belgisch Staatsblad Corpus: Retrieving French-Dutch Sentences from Official Documents</a>, Proceedings of LREC 7, Malta (please cite). The corpus is available for research purposes. Original Source: <a href="http://www.ccl.kuleuven.be/~tallem/">http://www.ccl.kuleuven.be/~tallem/</a><p>2 languages, total number of files: 20<br>total number of tokens: 161.32M<br>total number of sentence fragments: 10.06M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="MBS/v1/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="MBS/v1/nl_sample.html">nl</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MBS/v1/xml/fr.zip">fr</a></th>
<th></th>
<td><a rel="nofollow" title="French-Dutch (sample file)" href="MBS/v1/fr-nl_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=MBS/v1/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=MBS/v1/xml/nl.zip">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (10 aligned documents, 5.0M links, 169.6M tokens)" href="download.php?f=MBS/v1/xml/fr-nl.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=MBS/v1/raw/nl.zip">nl</a></th></tr>
<tr><th></th>
<th>fr</th>
<th>nl</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=MBS/v1/mono/MBS.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=MBS/v1/mono/MBS.nl.gz">nl</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=MBS/v1/mono/MBS.raw.fr.gz">fr</a>
</th><td>10</td> <td>83.5M</td> <td>5.0M</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='French-Dutch (2,426,847 sentence pairs, 107.04M words) - TMX format' href="download.php?f=MBS/v1/tmx/fr-nl.tmx.gz">2.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=MBS/v1/mono/MBS.raw.nl.gz">nl</a>
</th><td>10</td> <td>77.8M</td> <td>5.0M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (5,028,737 sentence pairs, 141.33M words) - Moses format' href="download.php?f=MBS/v1/moses/fr-nl.txt.zip">5.0M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>