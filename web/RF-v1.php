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
<div class="header"><?php include("header.php"); ?></div><h1>RF</h1><p>Declarations of Government Policy by the Swedish Government</p><p>5 languages, 10 bitexts<br>total number of files: 11<br>total number of tokens: 19.74k<br>total number of sentence fragments: 0.86k<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <p>RF is a tiny parallel corpus of the Declarations of the Swedish Government and its translations. The corpus was originally compiled by Erik Tjong Kim Sang (At Uppsala University at that time) and mainly serves as a small example corpus and for educational purposes.</p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="RF/v1/de_sample.html">de</a></th>
<th><a rel="nofollow" href="RF/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="RF/v1/es_sample.html">es</a></th>
<th><a rel="nofollow" href="RF/v1/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="RF/v1/sv_sample.html">sv</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/v1/xml/de.zip">de</a></th>
<th></th>
<td><a rel="nofollow" title="German-English (sample file)" href="RF/v1/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="RF/v1/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="RF/v1/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="RF/v1/de-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/v1/raw/de.zip">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (2 aligned documents, 0.2k links, 8.8k tokens)" href="download.php?f=RF/v1/xml/de-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="RF/v1/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="RF/v1/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="RF/v1/en-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/v1/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (31 links, 3.9k tokens)" href="download.php?f=RF/v1/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (32 links, 3.7k tokens)" href="download.php?f=RF/v1/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-French (sample file)" href="RF/v1/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="RF/v1/es-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/v1/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/v1/xml/fr.zip">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (2 aligned documents, 0.2k links, 9.9k tokens)" href="download.php?f=RF/v1/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2 aligned documents, 0.2k links, 9.8k tokens)" href="download.php?f=RF/v1/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (31 links, 4.2k tokens)" href="download.php?f=RF/v1/xml/es-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Swedish (sample file)" href="RF/v1/fr-sv_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=RF/v1/raw/fr.zip">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=RF/v1/xml/sv.zip">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (2 aligned documents, 0.2k links, 7.4k tokens)" href="download.php?f=RF/v1/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (2 aligned documents, 0.2k links, 7.3k tokens)" href="download.php?f=RF/v1/xml/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (67 links, 2.8k tokens)" href="download.php?f=RF/v1/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (2 aligned documents, 0.2k links, 8.3k tokens)" href="download.php?f=RF/v1/xml/fr-sv.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/raw/sv.zip">sv</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/parsed/de.zip">de</a></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/parsed/en.zip">en</a></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/parsed/es.zip">es</a></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/parsed/fr.zip">fr</a></th>
<th><a rel="nofollow" href="download.php?f=RF/v1/parsed/sv.zip">sv</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=RF/v1/mono/de.tok.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=RF/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=RF/v1/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=RF/v1/mono/fr.tok.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=RF/v1/mono/sv.tok.gz">sv</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=RF/v1/mono/de.txt.gz">de</a>
</th><td>2</td> <td>4.5k</td> <td>0.2k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-English (177 sentence pairs, 5.16k words) - TMX format' href="download.php?f=RF/v1/tmx/de-en.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Spanish (24 sentence pairs, 0.29k words) - TMX format' href="download.php?f=RF/v1/tmx/de-es.tmx.gz">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-French (173 sentence pairs, 5.53k words) - TMX format' href="download.php?f=RF/v1/tmx/de-fr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Swedish (178 sentence pairs, 4.54k words) - TMX format' href="download.php?f=RF/v1/tmx/de-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=RF/v1/mono/en.txt.gz">en</a>
</th><td>2</td> <td>4.4k</td> <td>0.2k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-German (177 sentence pairs, 5.16k words) - Moses format' href="download.php?f=RF/v1/moses/de-en.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Spanish (25 sentence pairs, 0.35k words) - TMX format' href="download.php?f=RF/v1/tmx/en-es.tmx.gz">25</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-French (175 sentence pairs, 5.79k words) - TMX format' href="download.php?f=RF/v1/tmx/en-fr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Swedish (180 sentence pairs, 4.83k words) - TMX format' href="download.php?f=RF/v1/tmx/en-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=RF/v1/mono/es.txt.gz">es</a>
</th><td>1</td> <td>2.0k</td> <td>28</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-German (24 sentence pairs, 0.29k words) - Moses format' href="download.php?f=RF/v1/moses/de-es.txt.zip">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-English (25 sentence pairs, 0.35k words) - Moses format' href="download.php?f=RF/v1/moses/en-es.txt.zip">25</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-French (21 sentence pairs, 0.35k words) - TMX format' href="download.php?f=RF/v1/tmx/es-fr.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Swedish (28 sentence pairs, 0.39k words) - TMX format' href="download.php?f=RF/v1/tmx/es-sv.tmx.gz">28</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=RF/v1/mono/fr.txt.gz">fr</a>
</th><td>2</td> <td>5.4k</td> <td>0.2k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-German (173 sentence pairs, 5.53k words) - Moses format' href="download.php?f=RF/v1/moses/de-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-English (175 sentence pairs, 5.79k words) - Moses format' href="download.php?f=RF/v1/moses/en-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Spanish (21 sentence pairs, 0.35k words) - Moses format' href="download.php?f=RF/v1/moses/es-fr.txt.zip">21</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Swedish (175 sentence pairs, 5.22k words) - TMX format' href="download.php?f=RF/v1/tmx/fr-sv.tmx.gz">0.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=RF/v1/mono/sv.txt.gz">sv</a>
</th><td>4</td> <td>3.5k</td> <td>0.3k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-German (178 sentence pairs, 4.54k words) - Moses format' href="download.php?f=RF/v1/moses/de-sv.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-English (180 sentence pairs, 4.83k words) - Moses format' href="download.php?f=RF/v1/moses/en-sv.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Spanish (28 sentence pairs, 0.39k words) - Moses format' href="download.php?f=RF/v1/moses/es-sv.txt.zip">28</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-French (175 sentence pairs, 5.22k words) - Moses format' href="download.php?f=RF/v1/moses/fr-sv.txt.zip">0.2k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>