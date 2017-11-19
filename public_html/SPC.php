<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>SPC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SPC</h1><p>This is a collection of parallel corpora collected by Hercules Dalianis and his research group for bilingual dictionary construction.<br/> More information in: Hercules Dalianis, Hao-chun Xing, Xin Zhang: <i>Creating a Reusable English-Chinese Parallel Corpus for Bilingual Dictionary Construction</i>, In Proceedings of LREC2010 (source: <a href="http://people.dsv.su.se/~hercules/SEC/">http://people.dsv.su.se/~hercules/SEC/</a>) and Konstantinos Charitakis (2007): <a href="http://dspace.utlib.ee/xmlui/bitstream/handle/10062/2576/stud-Charitakis-10.pdf?sequence=1">Using Parallel Corpora to Create a Greek-English Dictionary with UPLUG</a>, In Proceedings of NODALIDA 2007. Afrikaans-English: Aldin Draghoender and Mattias Kanhov: <a href="http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.174.6893">Creating a reusable English – Afrikaans parallel corpora for bilingual dictionary construction</a></p><p />4 languages, 3 bitexts<br />total number of files: 6<br />total number of tokens: 1.32M<br />total number of sentence fragments: 0.15M<br /><p />Please <a href="http://opus.nlpl.eu/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/><h3>Download</h3>Complete download (XML): <a href="download.php?f=SPC/SPCv1.tar.gz">SPCv1.tar.gz</a> (7,6M
)<br /><p /><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SPC/af_sample.html">af</a></th>
<th><a rel="nofollow" href="SPC/el_sample.html">el</a></th>
<th><a rel="nofollow" href="SPC/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SPC/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/af.tar.gz">af</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="SPC/af-en_sample.html">view</a></td><td></td><th>af</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/el.tar.gz">el</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="SPC/el-en_sample.html">view</a></td><td></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (61.5k links, 0.7M tokens)" href="download.php?f=SPC/xml/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (8.3k links, 0.4M tokens)" href="download.php?f=SPC/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Chinese (sample file)" href="SPC/en-zh_sample.html">view</a></td><th><a rel="nofollow" href="SPC/en_parse_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/zh.tar.gz">zh</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (2.3k links, 0.1M tokens)" href="download.php?f=SPC/xml/en-zh.xml.gz">ces</a></td>
<th></th>
<th>zh</th></tr>
<tr><th></th>
<th>af</th>
<th>el</th>
<th><a rel="nofollow" href="download.php?f=SPC/en_parse.tar.gz">en</a></th>
<th>zh</th>
<th></th></tr>
</table>
</div><p /><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>af</th><th>el</th><th>en</th><th>zh</th></tr> <tr><th>af</th><td>1</td> <td>0.4M</td> <td>63.1k</td><td></td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Afrikaans-English (52,064 sentence pairs, 0.60M words) - TMX format' href="download.php?f=SPC/af-en.tmx.gz">52.1k</a>
</td><td></td></tr> <tr><th>el</th><td>1</td> <td>0.2M</td> <td>8.5k</td><td></td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Greek-English (7,035 sentence pairs, 0.38M words) - TMX format' href="download.php?f=SPC/el-en.tmx.gz">7.0k</a>
</td><td></td></tr> <tr><th>en</th><td>3</td> <td>0.7M</td> <td>73.9k</td><td bgcolor="#fffaf0"><a rel="nofollow" title='English-Afrikaans (57,351 sentence pairs, 0.63M words) - Moses format' href="download.php?f=SPC/af-en.txt.zip">57.4k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='English-Greek (8,181 sentence pairs, 0.39M words) - Moses format' href="download.php?f=SPC/el-en.txt.zip">8.2k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='English-Chinese (2,212 sentence pairs, 0.13M words) - TMX format' href="download.php?f=SPC/en-zh.tmx.gz">2.2k</a>
</td></tr> <tr><th>zh</th><td>1</td> <td>61.5k</td> <td>2.2k</td><td></td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-English (2,228 sentence pairs, 0.13M words) - Moses format' href="download.php?f=SPC/en-zh.txt.zip">2.2k</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p /><hr /><div class="footer"></div>
</body>
</html>