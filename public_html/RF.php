<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>RF</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>RF</h1><p>Declarations of Government Policy by the Swedish Government</p><p>5 languages, 10 bitexts<br>total number of files: 11<br>total number of tokens: 19.74k<br>total number of sentence fragments: 0.86k<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Simple example corpus</p>Complete download of aligned documents (in XML): <a href="download.php?f=RF.tar.gz">RF.tar.gz</a> (600K
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="RF/de_sample.html">de</a></th>
<th><a rel="nofollow" href="RF/en_sample.html">en</a></th>
<th><a rel="nofollow" href="RF/es_sample.html">es</a></th>
<th><a rel="nofollow" href="RF/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="RF/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/de.tar.gz">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="RF/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="RF/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="RF/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="RF/de-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (2 aligned documents, 0.2k links, 8.8k tokens)" href="download.php?f=RF/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="RF/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="RF/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="RF/en-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (31 links, 3.9k tokens)" href="download.php?f=RF/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (32 links, 3.7k tokens)" href="download.php?f=RF/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="RF/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="RF/es-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (2 aligned documents, 0.2k links, 9.9k tokens)" href="download.php?f=RF/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2 aligned documents, 0.2k links, 9.8k tokens)" href="download.php?f=RF/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (31 links, 4.2k tokens)" href="download.php?f=RF/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Swedish (sample file)" href="RF/fr-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (2 aligned documents, 0.2k links, 7.4k tokens)" href="download.php?f=RF/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (2 aligned documents, 0.2k links, 7.3k tokens)" href="download.php?f=RF/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (67 links, 2.8k tokens)" href="download.php?f=RF/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (2 aligned documents, 0.2k links, 8.3k tokens)" href="download.php?f=RF/fr-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=RF/sv.raw.tar.gz">sv</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=RF/de.parsed.tar.gz">de</a></th>
<th><a rel="nofollow" href="download.php?f=RF/en.parsed.tar.gz">en</a></th>
<th><a rel="nofollow" href="download.php?f=RF/es.parsed.tar.gz">es</a></th>
<th><a rel="nofollow" href="download.php?f=RF/fr.parsed.tar.gz">fr</a></th>
<th><a rel="nofollow" href="download.php?f=RF/sv.parsed.tar.gz">sv</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=RF/mono/RF.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=RF/mono/RF.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=RF/mono/RF.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=RF/mono/RF.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=RF/mono/RF.sv.gz">sv</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=RF/mono/RF.raw.de.gz">de</a>
</th><td>2</td> <td>4.5k</td> <td>0.2k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-English (177 sentence pairs, 5.16k words) - TMX format' href="download.php?f=RF/de-en.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Spanish (24 sentence pairs, 0.29k words) - TMX format' href="download.php?f=RF/de-es.tmx.gz">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-French (173 sentence pairs, 5.53k words) - TMX format' href="download.php?f=RF/de-fr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Swedish (178 sentence pairs, 4.54k words) - TMX format' href="download.php?f=RF/de-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=RF/mono/RF.raw.en.gz">en</a>
</th><td>2</td> <td>4.4k</td> <td>0.2k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-German (177 sentence pairs, 5.16k words) - Moses format' href="download.php?f=RF/de-en.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Spanish (25 sentence pairs, 0.35k words) - TMX format' href="download.php?f=RF/en-es.tmx.gz">25</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-French (175 sentence pairs, 5.79k words) - TMX format' href="download.php?f=RF/en-fr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Swedish (180 sentence pairs, 4.83k words) - TMX format' href="download.php?f=RF/en-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=RF/mono/RF.raw.es.gz">es</a>
</th><td>1</td> <td>2.0k</td> <td>28</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-German (24 sentence pairs, 0.29k words) - Moses format' href="download.php?f=RF/de-es.txt.zip">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-English (25 sentence pairs, 0.35k words) - Moses format' href="download.php?f=RF/en-es.txt.zip">25</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-French (21 sentence pairs, 0.35k words) - TMX format' href="download.php?f=RF/es-fr.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Swedish (28 sentence pairs, 0.39k words) - TMX format' href="download.php?f=RF/es-sv.tmx.gz">28</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=RF/mono/RF.raw.fr.gz">fr</a>
</th><td>2</td> <td>5.4k</td> <td>0.2k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-German (173 sentence pairs, 5.53k words) - Moses format' href="download.php?f=RF/de-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-English (175 sentence pairs, 5.79k words) - Moses format' href="download.php?f=RF/en-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Spanish (21 sentence pairs, 0.35k words) - Moses format' href="download.php?f=RF/es-fr.txt.zip">21</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Swedish (175 sentence pairs, 5.22k words) - TMX format' href="download.php?f=RF/fr-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=RF/mono/RF.raw.sv.gz">sv</a>
</th><td>4</td> <td>3.5k</td> <td>0.3k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-German (178 sentence pairs, 4.54k words) - Moses format' href="download.php?f=RF/de-sv.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-English (180 sentence pairs, 4.83k words) - Moses format' href="download.php?f=RF/en-sv.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Spanish (28 sentence pairs, 0.39k words) - Moses format' href="download.php?f=RF/es-sv.txt.zip">28</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-French (175 sentence pairs, 5.22k words) - Moses format' href="download.php?f=RF/fr-sv.txt.zip">0.2k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>