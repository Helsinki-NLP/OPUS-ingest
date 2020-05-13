<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>SciELO</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>SciELO</h1>Parallel corpus of full-text articles in Portuguese, English and Spanish from SciELO<br/>Source: <a href="https://sites.google.com/view/felipe-soares/datasets">https://sites.google.com/view/felipe-soares/datasets</a><p>3 languages, 3 bitexts<br>total number of files: 7<br>total number of tokens: 208.70M<br>total number of sentence fragments: 7.05M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. A parallel corpus of full-text scientific articles collected from <a href="https://www.scielo.org/en">Scielo database</a> in the following languages: English, Portuguese and Spanish. The corpus is sentence aligned for all language pairs, as well as trilingual aligned for a small subset of sentences. Alignment was carried out using the Hunalign algorithm. <br/> DOI: <a href ="https://doi.org/10.6084/m9.figshare.5382757.v2">https://doi.org/10.6084/m9.figshare.5382757.v2</a></br/>If you use this corpus, please cite the following work: <blockquote>@inproceedings{soares2018large,<br/>title={A Large Parallel Corpus of Full-Text Scientific Articles},<br/>author={Soares, Felipe and Moreira, Viviane and Becker, Karin},<br/>booktitle={Proceedings of the Eleventh International Conference on Language Resources and Evaluation (LREC-2018)},<br/>year={2018}<br/>}</blockquote><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="SciELO/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="SciELO/v1/es_sample.html">es</a></th>
<th><a rel="nofollow" href="SciELO/v1/pt_sample.html">pt</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SciELO/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="SciELO/v1/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="SciELO/v1/en-pt_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SciELO/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SciELO/v1/xml/es.zip">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (2 aligned documents, 0.4M links, 28.3M tokens)" href="download.php?f=SciELO/v1/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="SciELO/v1/es-pt_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=SciELO/v1/raw/es.zip">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=SciELO/v1/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (2 aligned documents, 3.1M links, 188.2M tokens)" href="download.php?f=SciELO/v1/xml/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (0.3M links, 16.6M tokens)" href="download.php?f=SciELO/v1/xml/es-pt.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=SciELO/v1/raw/pt.zip">pt</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=SciELO/v1/parsed/en.zip">en</a></th>
<th><a rel="nofollow" href="download.php?f=SciELO/v1/parsed/es.zip">es</a></th>
<th><a rel="nofollow" href="download.php?f=SciELO/v1/parsed/pt.zip">pt</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=SciELO/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=SciELO/v1/mono/es.tok.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=SciELO/v1/mono/pt.tok.gz">pt</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=SciELO/v1/mono/en.txt.gz">en</a>
</th><td>3</td> <td>98.6M</td> <td>3.5M</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='English-Spanish (416,322 sentence pairs, 25.11M words) - TMX format' href="download.php?f=SciELO/v1/tmx/en-es.tmx.gz">0.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (2,747,083 sentence pairs, 151.73M words) - TMX format' href="download.php?f=SciELO/v1/tmx/en-pt.tmx.gz">2.7M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=SciELO/v1/mono/es.txt.gz">es</a>
</th><td>2</td> <td>14.7M</td> <td>0.4M</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Spanish-English (433,695 sentence pairs, 25.70M words) - Moses format' href="download.php?f=SciELO/v1/moses/en-es.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Spanish-Portuguese (247,568 sentence pairs, 14.85M words) - TMX format' href="download.php?f=SciELO/v1/tmx/es-pt.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=SciELO/v1/mono/pt.txt.gz">pt</a>
</th><td>2</td> <td>95.4M</td> <td>3.1M</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (3,084,830 sentence pairs, 167.51M words) - Moses format' href="download.php?f=SciELO/v1/moses/en-pt.txt.zip">3.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Spanish (255,914 sentence pairs, 14.98M words) - Moses format' href="download.php?f=SciELO/v1/moses/es-pt.txt.zip">0.3M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>