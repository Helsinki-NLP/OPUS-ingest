<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>CAPES</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>CAPES</h1>Parallel corpus of theses and dissertation abstracts in Portuguese and English from CAPES<br/>Source: <a href="https://sites.google.com/view/felipe-soares/datasets">https://sites.google.com/view/felipe-soares/datasets</a><p>2 languages, total number of files: 2<br>total number of tokens: 77.56M<br>total number of sentence fragments: 2.32M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J. Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3><p>Below you can download data files for all language pairs in different formats and with different kind of annotation (if available). You can click on the various links as explained below. In addition to the files shown on this webpage, OPUS also provides pre-compiled word alignments and phrase tables, bilingual dictionaries, frequency counts, and these files can be found through the <a href="/index.php">resources search form on the top-level website of OPUS</a>. A parallel corpus of theses and dissertations abstracts in English and Portuguese were collected from the CAPES website (Coordenação de Aperfeiçoamento de Pessoal de Nível Superior) - Brazil. The corpus is sentence aligned for all language pairs. Approximately 240,000 documents were collected and aligned using the Hunalign algorithm. <br/> DOI: <a href ="https://doi.org/10.6084/m9.figshare.5995519.v2">https://doi.org/10.6084/m9.figshare.5995519.v2</a></br/>If you use this corpus, please cite the following work: <blockquote>@inproceedings{soares2018parallel,<br/>  title={A Parallel Corpus of Theses and Dissertations Abstracts},<br/>  author={Soares, Felipe and Yamashita, Gabrielli Harumi and Anzanello, Michel Jose},<br/>  booktitle={International Conference on Computational Processing of the Portuguese Language},<br/>  pages={345--352},<br/>  year={2018},<br/>  organization={Springer}<br/>}</blockquote><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="CAPES/v1/en_sample.html">en</a></th>
<th><a rel="nofollow" href="CAPES/v1/pt_sample.html">pt</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CAPES/v1/xml/en.zip">en</a></th>
<th></th>
<td><a rel="nofollow" title="English-Portuguese (sample file)" href="CAPES/v1/en-pt_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=CAPES/v1/raw/en.zip">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=CAPES/v1/xml/pt.zip">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (1.2M links, 77.6M tokens)" href="download.php?f=CAPES/v1/xml/en-pt.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=CAPES/v1/raw/pt.zip">pt</a></th></tr>
<tr><th></th>
<th><a rel="nofollow" href="download.php?f=CAPES/v1/parsed/en.zip">en</a></th>
<th><a rel="nofollow" href="download.php?f=CAPES/v1/parsed/pt.zip">pt</a></th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=CAPES/v1/mono/en.tok.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=CAPES/v1/mono/pt.tok.gz">pt</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=CAPES/v1/mono/en.txt.gz">en</a>
</th><td>1</td> <td>38.4M</td> <td>1.2M</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Portuguese (1,155,955 sentence pairs, 68.54M words) - TMX format' href="download.php?f=CAPES/v1/tmx/en-pt.tmx.gz">1.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=CAPES/v1/mono/pt.txt.gz">pt</a>
</th><td>1</td> <td>39.1M</td> <td>1.2M</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-English (1,157,610 sentence pairs, 68.64M words) - Moses format' href="download.php?f=CAPES/v1/moses/en-pt.txt.zip">1.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>