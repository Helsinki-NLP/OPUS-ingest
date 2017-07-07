<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>OpenOffice</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OpenOffice</h1><p>A collection of documents from <a href="http://www.openoffice.org/">http://www.openoffice.org/</a>. The original documentation of the office package Openoffice.org contains 2014 English documents which have been partly translated into 5 languages: French, Spanish, Swedish, German, and Japanese. The original documentation in English comprises about 500,000 words and translations contain between 400,000 and 500,000 words per language. All documents have been tokenized and, except for the Spanish part, tagged with parts of speech. The English part of the corpus has been marked with syntactic chunks as well.</p><p />6 languages, 15 bitexts<br />total number of files: 10,934<br />total number of tokens: 2.61M<br />total number of sentence fragments: 0.25M<br /><p />Please <a href="http://opus.lingfil.uu.se/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/><h3>Download</h3>Complete download (XML): <a href="download.php?f=OpenOffice/OpenOffice.tar.gz">OpenOffice.tar.gz</a> (34M
)<br /><p /><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="OpenOffice/de_sample.html">de</a></th>
<th><a rel="nofollow" href="OpenOffice/en_sample.html">en</a></th>
<th><a rel="nofollow" href="OpenOffice/es_sample.html">es</a></th>
<th><a rel="nofollow" href="OpenOffice/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="OpenOffice/jp_sample.html">jp</a></th>
<th><a rel="nofollow" href="OpenOffice/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/de.tar.gz">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="OpenOffice/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="OpenOffice/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="OpenOffice/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="OpenOffice/de-jp_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="OpenOffice/de-sv_sample.html">view</a></td><th><a rel="nofollow" href="OpenOffice/de_parse_sample.html">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (2,014 aligned documents, 42.9k links, 1.0M tokens)" href="download.php?f=OpenOffice/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="OpenOffice/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="OpenOffice/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="OpenOffice/en-jp_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="OpenOffice/en-sv_sample.html">view</a></td><th><a rel="nofollow" href="OpenOffice/en_parse_sample.html">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (1,738 aligned documents, 37.8k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (1,738 aligned documents, 38.6k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="OpenOffice/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="OpenOffice/es-jp_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="OpenOffice/es-sv_sample.html">view</a></td><th>es</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (1,739 aligned documents, 37.1k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (1,739 aligned documents, 38.0k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (1,738 aligned documents, 38.5k links, 1.0M tokens)" href="download.php?f=OpenOffice/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Japanese (sample file)" href="OpenOffice/fr-jp_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="OpenOffice/fr-sv_sample.html">view</a></td><th>fr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/jp.tar.gz">jp</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (1,690 aligned documents, 30.6k links, 0.7M tokens)" href="download.php?f=OpenOffice/xml/de-jp.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (1,690 aligned documents, 32.6k links, 0.7M tokens)" href="download.php?f=OpenOffice/xml/en-jp.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (1,689 aligned documents, 32.9k links, 0.7M tokens)" href="download.php?f=OpenOffice/xml/es-jp.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (1,690 aligned documents, 32.8k links, 0.8M tokens)" href="download.php?f=OpenOffice/xml/fr-jp.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="OpenOffice/jp-sv_sample.html">view</a></td><th>jp</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenOffice/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (1,739 aligned documents, 37.9k links, 0.8M tokens)" href="download.php?f=OpenOffice/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (1,739 aligned documents, 38.9k links, 0.8M tokens)" href="download.php?f=OpenOffice/xml/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (1,738 aligned documents, 39.5k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (1,739 aligned documents, 38.7k links, 0.9M tokens)" href="download.php?f=OpenOffice/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (1,690 aligned documents, 33.5k links, 0.7M tokens)" href="download.php?f=OpenOffice/xml/jp-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="OpenOffice/sv_parse_sample.html">sv</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=OpenOffice/de_parse.tar.gz">de</a></th>
<th><a rel="nofollow" href="download.php?f=OpenOffice/en_parse.tar.gz">en</a></th>
<th>es</th>
<th>fr</th>
<th>jp</th>
<th><a rel="nofollow" href="download.php?f=OpenOffice/sv_parse.tar.gz">sv</a></th>
<th></th></tr>
</table>
</div><p /><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>de</th><th>en</th><th>es</th><th>fr</th><th>jp</th><th>sv</th></tr> <tr><th>de</th><td>2,014</td> <td>0.5M</td> <td>47.5k</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-English (35,146 sentence pairs, 0.73M words) - TMX format' href="download.php?f=OpenOffice/de-en.tmx.gz">35.1k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-Spanish (31,832 sentence pairs, 0.72M words) - TMX format' href="download.php?f=OpenOffice/de-es.tmx.gz">31.8k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-French (30,938 sentence pairs, 0.70M words) - TMX format' href="download.php?f=OpenOffice/de-fr.tmx.gz">30.9k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='German-Japanese (24,755 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenOffice/de-jp.tmx.gz">24.8k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='German-Swedish (31,597 sentence pairs, 0.64M words) - TMX format' href="download.php?f=OpenOffice/de-sv.tmx.gz">31.6k</a>
</td></tr> <tr><th>en</th><td>2,014</td> <td>0.5M</td> <td>44.9k</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-German (42,391 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenOffice/de-en.txt.zip">42.4k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Spanish (32,791 sentence pairs, 0.77M words) - TMX format' href="download.php?f=OpenOffice/en-es.tmx.gz">32.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-French (31,902 sentence pairs, 0.75M words) - TMX format' href="download.php?f=OpenOffice/en-fr.tmx.gz">31.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='English-Japanese (24,594 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenOffice/en-jp.tmx.gz">24.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Swedish (32,794 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenOffice/en-sv.tmx.gz">32.8k</a>
</td></tr> <tr><th>es</th><td>1,738</td> <td>0.5M</td> <td>40.0k</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Spanish-German (37,747 sentence pairs, 0.75M words) - Moses format' href="download.php?f=OpenOffice/de-es.txt.zip">37.7k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Spanish-English (38,034 sentence pairs, 0.79M words) - Moses format' href="download.php?f=OpenOffice/en-es.txt.zip">38.0k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Spanish-French (32,218 sentence pairs, 0.81M words) - TMX format' href="download.php?f=OpenOffice/es-fr.tmx.gz">32.2k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Spanish-Japanese (24,710 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenOffice/es-jp.tmx.gz">24.7k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Spanish-Swedish (33,190 sentence pairs, 0.75M words) - TMX format' href="download.php?f=OpenOffice/es-sv.tmx.gz">33.2k</a>
</td></tr> <tr><th>fr</th><td>1,739</td> <td>0.5M</td> <td>39.4k</td><td bgcolor="#fffcf1"><a rel="nofollow" title='French-German (37,022 sentence pairs, 0.73M words) - Moses format' href="download.php?f=OpenOffice/de-fr.txt.zip">37.0k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='French-English (37,403 sentence pairs, 0.78M words) - Moses format' href="download.php?f=OpenOffice/en-fr.txt.zip">37.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='French-Spanish (38,364 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenOffice/es-fr.txt.zip">38.4k</a>
</td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='French-Japanese (24,597 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenOffice/fr-jp.tmx.gz">24.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='French-Swedish (32,081 sentence pairs, 0.73M words) - TMX format' href="download.php?f=OpenOffice/fr-sv.tmx.gz">32.1k</a>
</td></tr> <tr><th>jp</th><td>1,690</td> <td>0.3M</td> <td>33.6k</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-German (29,097 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenOffice/de-jp.txt.zip">29.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-English (28,932 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenOffice/en-jp.txt.zip">28.9k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Japanese-Spanish (29,606 sentence pairs, 0.57M words) - Moses format' href="download.php?f=OpenOffice/es-jp.txt.zip">29.6k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Japanese-French (29,701 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenOffice/fr-jp.txt.zip">29.7k</a>
</td><td></td><td bgcolor="#fff7f0"><a rel="nofollow" title='Japanese-Swedish (24,470 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenOffice/jp-sv.tmx.gz">24.5k</a>
</td></tr> <tr><th>sv</th><td>1,739</td> <td>0.4M</td> <td>40.7k</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Swedish-German (37,927 sentence pairs, 0.67M words) - Moses format' href="download.php?f=OpenOffice/de-sv.txt.zip">37.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swedish-English (38,355 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenOffice/en-sv.txt.zip">38.4k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swedish-Spanish (39,452 sentence pairs, 0.78M words) - Moses format' href="download.php?f=OpenOffice/es-sv.txt.zip">39.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swedish-French (38,592 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenOffice/fr-sv.txt.zip">38.6k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Swedish-Japanese (29,614 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenOffice/jp-sv.txt.zip">29.6k</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p /><hr /><div class="footer"></div>
</body>
</html>