<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>OpenSubtitles</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OpenSubtitles</h1><p>A collection of documents from <a href="http://www.opensubtitles.org/">http://www.opensubtitles.org/</a>.<br/><b>IMPORTANT:</b> If you use the OpenSubtitle corpus: <br/>Please, add a link to <b>http://www.opensubtitles.org/</b> to your website and to your reports and publications produced with the data! I promised this when I got the data from the providers of that website!</p> <p>Resources: <ul><li><a href="http://opus.lingfil.uu.se/OpenSubtitles2011/movies.txt">A list of movie names and their corresponding IDs (= 2nd subdir)</a></li><li><a href="http://opus.lingfil.uu.se/OpenSubtitles2011/wordalign/">Word alignment for the entire OpenSubtitles2011 corpus</a></li><li><a href="http://opus.lingfil.uu.se/OpenSubtitles2011/wordalign/truecaser/">True caser models for all languages in OpenSubtitles2011</a></li><li><a href="http://opus.lingfil.uu.se/OpenSubtitles2011/wordalign/lm/">Monolingual data for all languages in OpenSubtitles2011</a></li><li><a href="http://opus.lingfil.uu.se/OpenSubtitles2011/overlaps">Overlaps in the corpus (Estonian only)</a>; detected by <a href="http://corporal.sourceforge.net/">CorporAl</a></li></p><p>0 languages, total number of files: <br>total number of sentence fragments: <br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th></th></tr>
<tr><th></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>