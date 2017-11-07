<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>SETIMES</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SETIMES</h1><p>A parallel corpus of news articles in the Balkan languages, originally extracted from <a href="http://www.setimes.com">http://www.setimes.com</a>. The corpus is PUBLIC DOMAIN, but if you use it in your work, please cite: Francis M. Tyers and Murat Alperen (2010), "South-East European Times: A parallel corpus of the Balkan languages".</p><p />9 languages, 36 bitexts<br />total number of files: 72<br />total number of tokens: 341.83M<br />total number of sentence fragments: 11.94M<br /><p />Please <a href="http://opus.lingfil.uu.se/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/><h3>Download</h3>Complete download (XML): <a href="download.php?f=SETIMES/SETIMES1.tar.gz">SETIMES1.tar.gz</a> (2,3G
)<br /><p /><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SETIMES/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="SETIMES/el_sample.html">el</a></th>
<th><a rel="nofollow" href="SETIMES/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SETIMES/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="SETIMES/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="SETIMES/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="SETIMES/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="SETIMES/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="SETIMES/tr_sample.html">tr</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/bg.tar.gz">bg</a></th>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="SETIMES/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="SETIMES/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="SETIMES/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="SETIMES/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="SETIMES/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="SETIMES/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="SETIMES/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="SETIMES/bg-tr_sample.html">view</a></td><th>bg</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (0.2M links, 10.1M tokens)" href="download.php?f=SETIMES/bg-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="SETIMES/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="SETIMES/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="SETIMES/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="SETIMES/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="SETIMES/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="SETIMES/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="SETIMES/el-tr_sample.html">view</a></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (0.2M links, 9.1M tokens)" href="download.php?f=SETIMES/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (0.2M links, 9.5M tokens)" href="download.php?f=SETIMES/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="SETIMES/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="SETIMES/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="SETIMES/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="SETIMES/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="SETIMES/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="SETIMES/en-tr_sample.html">view</a></td><th><a rel="nofollow" href="SETIMES/en_parse_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/hr.tar.gz">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (0.2M links, 8.7M tokens)" href="download.php?f=SETIMES/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (0.2M links, 9.1M tokens)" href="download.php?f=SETIMES/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (0.2M links, 8.7M tokens)" href="download.php?f=SETIMES/en-hr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="SETIMES/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="SETIMES/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="SETIMES/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="SETIMES/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="SETIMES/hr-tr_sample.html">view</a></td><th>hr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/mk.tar.gz">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (0.2M links, 9.2M tokens)" href="download.php?f=SETIMES/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (0.2M links, 9.8M tokens)" href="download.php?f=SETIMES/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (0.2M links, 8.8M tokens)" href="download.php?f=SETIMES/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (0.2M links, 9.2M tokens)" href="download.php?f=SETIMES/hr-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="SETIMES/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="SETIMES/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="SETIMES/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="SETIMES/mk-tr_sample.html">view</a></td><th>mk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/ro.tar.gz">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/bg-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (0.2M links, 10.2M tokens)" href="download.php?f=SETIMES/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (0.2M links, 9.5M tokens)" href="download.php?f=SETIMES/mk-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="SETIMES/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="SETIMES/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="SETIMES/ro-tr_sample.html">view</a></td><th>ro</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/sq.tar.gz">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (0.2M links, 10.6M tokens)" href="download.php?f=SETIMES/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (0.2M links, 9.9M tokens)" href="download.php?f=SETIMES/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (0.2M links, 10.2M tokens)" href="download.php?f=SETIMES/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (0.2M links, 9.5M tokens)" href="download.php?f=SETIMES/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (0.2M links, 10.7M tokens)" href="download.php?f=SETIMES/ro-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="SETIMES/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="SETIMES/sq-tr_sample.html">view</a></td><th>sq</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/sr.tar.gz">sr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (0.2M links, 9.2M tokens)" href="download.php?f=SETIMES/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (0.2M links, 9.7M tokens)" href="download.php?f=SETIMES/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.2M links, 9.0M tokens)" href="download.php?f=SETIMES/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (0.2M links, 9.5M tokens)" href="download.php?f=SETIMES/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (0.2M links, 9.2M tokens)" href="download.php?f=SETIMES/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (0.2M links, 9.7M tokens)" href="download.php?f=SETIMES/ro-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (0.2M links, 9.8M tokens)" href="download.php?f=SETIMES/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="SETIMES/sr-tr_sample.html">view</a></td><th>sr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SETIMES/tr.tar.gz">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (0.2M links, 9.0M tokens)" href="download.php?f=SETIMES/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (0.2M links, 9.6M tokens)" href="download.php?f=SETIMES/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (0.2M links, 8.7M tokens)" href="download.php?f=SETIMES/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (0.2M links, 9.0M tokens)" href="download.php?f=SETIMES/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (0.2M links, 8.7M tokens)" href="download.php?f=SETIMES/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (0.2M links, 9.4M tokens)" href="download.php?f=SETIMES/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (0.2M links, 9.4M tokens)" href="download.php?f=SETIMES/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (0.2M links, 8.8M tokens)" href="download.php?f=SETIMES/sr-tr.xml.gz">ces</a></td>
<th></th>
<th>tr</th></tr>
<tr><th></th>
<th>bg</th>
<th>el</th>
<th><a rel="nofollow" href="download.php?f=SETIMES/en_parse.tar.gz">en</a></th>
<th>hr</th>
<th>mk</th>
<th>ro</th>
<th>sq</th>
<th>sr</th>
<th>tr</th>
<th></th></tr>
</table>
</div><p /><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>bg</th><th>el</th><th>en</th><th>hr</th><th>mk</th><th>ro</th><th>sq</th><th>sr</th><th>tr</th></tr> <tr><th>bg</th><td>8</td> <td>37.4M</td> <td>1.3M</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Greek (168,958 sentence pairs, 8.83M words) - TMX format' href="download.php?f=SETIMES/bg-el.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-English (160,605 sentence pairs, 7.93M words) - TMX format' href="download.php?f=SETIMES/bg-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Croatian (154,616 sentence pairs, 7.53M words) - TMX format' href="download.php?f=SETIMES/bg-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Macedonian (156,604 sentence pairs, 8.05M words) - TMX format' href="download.php?f=SETIMES/bg-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Romanian (167,437 sentence pairs, 8.67M words) - TMX format' href="download.php?f=SETIMES/bg-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Albanian (166,327 sentence pairs, 8.70M words) - TMX format' href="download.php?f=SETIMES/bg-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Serbian (161,075 sentence pairs, 7.99M words) - TMX format' href="download.php?f=SETIMES/bg-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Turkish (164,997 sentence pairs, 7.82M words) - TMX format' href="download.php?f=SETIMES/bg-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>el</th><td>8</td> <td>40.2M</td> <td>1.3M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Bulgarian (169,095 sentence pairs, 8.83M words) - Moses format' href="download.php?f=SETIMES/bg-el.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-English (165,532 sentence pairs, 8.45M words) - TMX format' href="download.php?f=SETIMES/el-en.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Greek-Croatian (159,464 sentence pairs, 8.03M words) - TMX format' href="download.php?f=SETIMES/el-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Macedonian (163,224 sentence pairs, 8.63M words) - TMX format' href="download.php?f=SETIMES/el-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Romanian (175,816 sentence pairs, 9.40M words) - TMX format' href="download.php?f=SETIMES/el-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Albanian (174,328 sentence pairs, 9.41M words) - TMX format' href="download.php?f=SETIMES/el-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Serbian (166,467 sentence pairs, 8.54M words) - TMX format' href="download.php?f=SETIMES/el-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Turkish (172,808 sentence pairs, 8.47M words) - TMX format' href="download.php?f=SETIMES/el-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>en</th><td>8</td> <td>36.1M</td> <td>1.3M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Bulgarian (160,742 sentence pairs, 7.93M words) - Moses format' href="download.php?f=SETIMES/bg-en.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Greek (165,764 sentence pairs, 8.46M words) - Moses format' href="download.php?f=SETIMES/el-en.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Croatian (158,181 sentence pairs, 7.60M words) - TMX format' href="download.php?f=SETIMES/en-hr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Macedonian (153,725 sentence pairs, 7.82M words) - TMX format' href="download.php?f=SETIMES/en-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Romanian (171,663 sentence pairs, 8.76M words) - TMX format' href="download.php?f=SETIMES/en-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='English-Albanian (171,009 sentence pairs, 8.83M words) - TMX format' href="download.php?f=SETIMES/en-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Serbian (163,522 sentence pairs, 7.94M words) - TMX format' href="download.php?f=SETIMES/en-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Turkish (165,714 sentence pairs, 7.71M words) - TMX format' href="download.php?f=SETIMES/en-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>hr</th><td>8</td> <td>36.8M</td> <td>1.3M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Bulgarian (154,725 sentence pairs, 7.53M words) - Moses format' href="download.php?f=SETIMES/bg-hr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Greek (159,640 sentence pairs, 8.03M words) - Moses format' href="download.php?f=SETIMES/el-hr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-English (158,368 sentence pairs, 7.61M words) - Moses format' href="download.php?f=SETIMES/en-hr.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Macedonian (158,765 sentence pairs, 8.08M words) - TMX format' href="download.php?f=SETIMES/hr-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Romanian (175,716 sentence pairs, 8.93M words) - TMX format' href="download.php?f=SETIMES/hr-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Croatian-Albanian (175,058 sentence pairs, 9.01M words) - TMX format' href="download.php?f=SETIMES/hr-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Serbian (170,666 sentence pairs, 8.28M words) - TMX format' href="download.php?f=SETIMES/hr-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Turkish (170,464 sentence pairs, 7.90M words) - TMX format' href="download.php?f=SETIMES/hr-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>mk</th><td>8</td> <td>37.0M</td> <td>1.3M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Bulgarian (156,722 sentence pairs, 8.05M words) - Moses format' href="download.php?f=SETIMES/bg-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Greek (163,440 sentence pairs, 8.63M words) - Moses format' href="download.php?f=SETIMES/el-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-English (153,906 sentence pairs, 7.82M words) - Moses format' href="download.php?f=SETIMES/en-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Croatian (158,930 sentence pairs, 8.09M words) - Moses format' href="download.php?f=SETIMES/hr-mk.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Romanian (158,006 sentence pairs, 8.40M words) - TMX format' href="download.php?f=SETIMES/mk-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Albanian (156,451 sentence pairs, 8.40M words) - TMX format' href="download.php?f=SETIMES/mk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Macedonian-Serbian (157,425 sentence pairs, 8.10M words) - TMX format' href="download.php?f=SETIMES/mk-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Turkish (157,191 sentence pairs, 7.63M words) - TMX format' href="download.php?f=SETIMES/mk-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>ro</th><td>8</td> <td>41.4M</td> <td>1.4M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Bulgarian (167,568 sentence pairs, 8.67M words) - Moses format' href="download.php?f=SETIMES/bg-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Greek (176,028 sentence pairs, 9.41M words) - Moses format' href="download.php?f=SETIMES/el-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-English (171,904 sentence pairs, 8.77M words) - Moses format' href="download.php?f=SETIMES/en-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Croatian (175,922 sentence pairs, 8.93M words) - Moses format' href="download.php?f=SETIMES/hr-ro.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Macedonian (158,168 sentence pairs, 8.41M words) - Moses format' href="download.php?f=SETIMES/mk-ro.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Albanian (176,044 sentence pairs, 9.47M words) - TMX format' href="download.php?f=SETIMES/ro-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Serbian (168,546 sentence pairs, 8.56M words) - TMX format' href="download.php?f=SETIMES/ro-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Turkish (170,019 sentence pairs, 8.27M words) - TMX format' href="download.php?f=SETIMES/ro-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>sq</th><td>8</td> <td>41.5M</td> <td>1.4M</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Bulgarian (166,444 sentence pairs, 8.71M words) - Moses format' href="download.php?f=SETIMES/bg-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Greek (174,528 sentence pairs, 9.42M words) - Moses format' href="download.php?f=SETIMES/el-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-English (171,218 sentence pairs, 8.83M words) - Moses format' href="download.php?f=SETIMES/en-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Croatian (175,247 sentence pairs, 9.01M words) - Moses format' href="download.php?f=SETIMES/hr-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Macedonian (156,600 sentence pairs, 8.40M words) - Moses format' href="download.php?f=SETIMES/mk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Romanian (176,247 sentence pairs, 9.47M words) - Moses format' href="download.php?f=SETIMES/ro-sq.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Serbian (167,971 sentence pairs, 8.64M words) - TMX format' href="download.php?f=SETIMES/sq-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Turkish (169,320 sentence pairs, 8.34M words) - TMX format' href="download.php?f=SETIMES/sq-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>sr</th><td>8</td> <td>37.5M</td> <td>1.3M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Bulgarian (161,194 sentence pairs, 7.99M words) - Moses format' href="download.php?f=SETIMES/bg-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Greek (166,674 sentence pairs, 8.55M words) - Moses format' href="download.php?f=SETIMES/el-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-English (163,733 sentence pairs, 7.95M words) - Moses format' href="download.php?f=SETIMES/en-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Croatian (170,895 sentence pairs, 8.29M words) - Moses format' href="download.php?f=SETIMES/hr-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Serbian-Macedonian (157,595 sentence pairs, 8.11M words) - Moses format' href="download.php?f=SETIMES/mk-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Romanian (168,747 sentence pairs, 8.57M words) - Moses format' href="download.php?f=SETIMES/ro-sr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Albanian (168,158 sentence pairs, 8.64M words) - Moses format' href="download.php?f=SETIMES/sq-sr.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Turkish (165,900 sentence pairs, 7.76M words) - TMX format' href="download.php?f=SETIMES/sr-tr.tmx.gz">0.2M</a>
</td></tr> <tr><th>tr</th><td>8</td> <td>33.9M</td> <td>1.3M</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Bulgarian (165,105 sentence pairs, 7.82M words) - Moses format' href="download.php?f=SETIMES/bg-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Greek (172,997 sentence pairs, 8.47M words) - Moses format' href="download.php?f=SETIMES/el-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-English (165,905 sentence pairs, 7.72M words) - Moses format' href="download.php?f=SETIMES/en-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Croatian (170,649 sentence pairs, 7.91M words) - Moses format' href="download.php?f=SETIMES/hr-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Macedonian (157,344 sentence pairs, 7.63M words) - Moses format' href="download.php?f=SETIMES/mk-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Romanian (170,202 sentence pairs, 8.28M words) - Moses format' href="download.php?f=SETIMES/ro-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Albanian (169,491 sentence pairs, 8.35M words) - Moses format' href="download.php?f=SETIMES/sq-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Serbian (166,077 sentence pairs, 7.76M words) - Moses format' href="download.php?f=SETIMES/sr-tr.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p /><hr /><div class="footer"></div>
</body>
</html>