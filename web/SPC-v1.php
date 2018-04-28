<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>SPC</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SPC</h1><p>This is a collection of parallel corpora collected by Hercules Dalianis and his research group for bilingual dictionary construction.<br/> More information in: Hercules Dalianis, Hao-chun Xing, Xin Zhang: <i>Creating a Reusable English-Chinese Parallel Corpus for Bilingual Dictionary Construction</i>, In Proceedings of LREC2010 (source: <a href="http://people.dsv.su.se/~hercules/SEC/">http://people.dsv.su.se/~hercules/SEC/</a>) and Konstantinos Charitakis (2007): <a href="http://dspace.utlib.ee/xmlui/bitstream/handle/10062/2576/stud-Charitakis-10.pdf?sequence=1">Using Parallel Corpora to Create a Greek-English Dictionary with UPLUG</a>, In Proceedings of NODALIDA 2007. Afrikaans-English: Aldin Draghoender and Mattias Kanhov: <a href="http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.174.6893">Creating a reusable English – Afrikaans parallel corpora for bilingual dictionary construction</a></p><p>4 languages, 3 bitexts<br>total number of files: 6<br>total number of tokens: 1.32M<br>total number of sentence fragments: 0.15M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. <table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SPC/v1/af_sample.html">af</a></th>
<th><a rel="nofollow" href="SPC/v1/el_sample.html">el</a></th>
<th><a rel="nofollow" href="SPC/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SPC/v1/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/v1/xml/af.zip">af</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="SPC/v1/af-en_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=SPC/v1/raw/af.zip">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/v1/xml/el.zip">el</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="SPC/v1/el-en_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=SPC/v1/raw/el.zip">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/v1/xml/en.zip">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (61.5k links, 0.7M tokens)" href="download.php?f=SPC/v1/xml/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (8.3k links, 0.4M tokens)" href="download.php?f=SPC/v1/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Chinese (sample file)" href="SPC/v1/en-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SPC/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SPC/v1/xml/zh.zip">zh</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (2.3k links, 0.1M tokens)" href="download.php?f=SPC/v1/xml/en-zh.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=SPC/v1/raw/zh.zip">zh</a></th></tr>
<tr><th></th>
<th>af</th>
<th>el</th>
<th>en</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=SPC/v1/mono/SPC.af.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=SPC/v1/mono/SPC.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=SPC/v1/mono/SPC.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=SPC/v1/mono/SPC.zh.gz">zh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=SPC/v1/mono/SPC.raw.af.gz">af</a>
</th><td>1</td> <td>0.4M</td> <td>63.1k</td><td></td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Afrikaans-English (52,064 sentence pairs, 0.60M words) - TMX format' href="download.php?f=SPC/v1/tmx/af-en.tmx.gz">52.1k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=SPC/v1/mono/SPC.raw.el.gz">el</a>
</th><td>1</td> <td>0.2M</td> <td>8.5k</td><td></td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Greek-English (7,035 sentence pairs, 0.38M words) - TMX format' href="download.php?f=SPC/v1/tmx/el-en.tmx.gz">7.0k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=SPC/v1/mono/SPC.raw.en.gz">en</a>
</th><td>3</td> <td>0.7M</td> <td>73.9k</td><td bgcolor="#fffaf0"><a rel="nofollow" title='English-Afrikaans (57,351 sentence pairs, 0.63M words) - Moses format' href="download.php?f=SPC/v1/moses/af-en.txt.zip">57.4k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='English-Greek (8,181 sentence pairs, 0.39M words) - Moses format' href="download.php?f=SPC/v1/moses/el-en.txt.zip">8.2k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='English-Chinese (2,212 sentence pairs, 0.13M words) - TMX format' href="download.php?f=SPC/v1/tmx/en-zh.tmx.gz">2.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=SPC/v1/mono/SPC.raw.zh.gz">zh</a>
</th><td>1</td> <td>61.5k</td> <td>2.2k</td><td></td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-English (2,228 sentence pairs, 0.13M words) - Moses format' href="download.php?f=SPC/v1/moses/en-zh.txt.zip">2.2k</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>