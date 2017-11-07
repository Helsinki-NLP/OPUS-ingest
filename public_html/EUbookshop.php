<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>EUbookshop</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>EUbookshop</h1>Corpus of documents from the EU bookshop<p>48 languages, 794 bitexts<br>total number of files: 135,785<br>total number of tokens: 3.60G<br>total number of sentence fragments: 173.20M<br>

<p>Please <a href="http://opus.lingfil.uu.se/eubookshop-lrec2014.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> 
  Raivis Skadi&ncedil;&#X0161;, J�rg Tiedemann, Roberts Rozis and Daiga Deksne (2014): <i>Billions of Parallel Words for Free</i>, 
    In Proceedings of <a href="http://lrec2014.lrec-conf.org/">LREC 2014</a>, Reykjavik, Iceland [<a href="eubookshop-lrec2014.txt">bib</a>] [<a href="eubookshop-lrec2014.pdf">pdf</a>]<br/>

    <h3>Download</h3>Source: <a href="http://bookshop.europa.eu">http://bookshop.europa.eu</a> - Thanks to Tilde (http://www.tilde.com) for collecting the data, within the EU ICT PSP project LetsMT! (<a href="https://www.letsmt.eu/">https://www.letsmt.eu/</a>)
<br/>
Complete download of aligned documents (in XML): <a href="download.php?f=EUbookshop/EUbookshop0.2.tar.gz">EUbookshop0.2.tar.gz</a> (33G
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="EUbookshop/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="EUbookshop/be_sample.html">be</a></th>
<th><a rel="nofollow" href="EUbookshop/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="EUbookshop/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="EUbookshop/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="EUbookshop/cn_sample.html">cn</a></th>
<th><a rel="nofollow" href="EUbookshop/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="EUbookshop/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="EUbookshop/da_sample.html">da</a></th>
<th><a rel="nofollow" href="EUbookshop/de_sample.html">de</a></th>
<th><a rel="nofollow" href="EUbookshop/el_sample.html">el</a></th>
<th><a rel="nofollow" href="EUbookshop/en_sample.html">en</a></th>
<th><a rel="nofollow" href="EUbookshop/es_sample.html">es</a></th>
<th><a rel="nofollow" href="EUbookshop/et_sample.html">et</a></th>
<th><a rel="nofollow" href="EUbookshop/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="EUbookshop/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="EUbookshop/fr_BE_sample.html">fr_BE</a></th>
<th><a rel="nofollow" href="EUbookshop/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="EUbookshop/gd_sample.html">gd</a></th>
<th><a rel="nofollow" href="EUbookshop/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="EUbookshop/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="EUbookshop/is_sample.html">is</a></th>
<th><a rel="nofollow" href="EUbookshop/it_sample.html">it</a></th>
<th><a rel="nofollow" href="EUbookshop/ja_sample.html">ja</a></th>
<th></th>
<th><a rel="nofollow" href="EUbookshop/lb_sample.html">lb</a></th>
<th><a rel="nofollow" href="EUbookshop/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="EUbookshop/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="EUbookshop/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="EUbookshop/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="EUbookshop/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="EUbookshop/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="EUbookshop/nl_BE_sample.html">nl_BE</a></th>
<th><a rel="nofollow" href="EUbookshop/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="EUbookshop/po_sample.html">po</a></th>
<th><a rel="nofollow" href="EUbookshop/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="EUbookshop/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="EUbookshop/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="EUbookshop/sh_sample.html">sh</a></th>
<th><a rel="nofollow" href="EUbookshop/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="EUbookshop/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="EUbookshop/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="EUbookshop/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="EUbookshop/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="EUbookshop/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="EUbookshop/tc_sample.html">tc</a></th>
<th><a rel="nofollow" href="EUbookshop/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="EUbookshop/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="EUbookshop/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ar.tar.gz">ar</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Arabic-Bulgarian (sample file)" href="EUbookshop/ar-bg_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Czech (sample file)" href="EUbookshop/ar-cs_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Danish (sample file)" href="EUbookshop/ar-da_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="EUbookshop/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Greek (sample file)" href="EUbookshop/ar-el_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="EUbookshop/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="EUbookshop/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="EUbookshop/ar-et_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="EUbookshop/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="EUbookshop/ar-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Irish (sample file)" href="EUbookshop/ar-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="EUbookshop/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hungarian (sample file)" href="EUbookshop/ar-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="EUbookshop/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="EUbookshop/ar-ja_sample.html">view</a></td><th>ar</th>
<td></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="EUbookshop/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="EUbookshop/ar-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Maltese (sample file)" href="EUbookshop/ar-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="EUbookshop/ar-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="EUbookshop/ar-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="EUbookshop/ar-pt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Romanian (sample file)" href="EUbookshop/ar-ro_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="EUbookshop/ar-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="EUbookshop/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="EUbookshop/ar-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Swedish (sample file)" href="EUbookshop/ar-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="EUbookshop/ar-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="EUbookshop/ar-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/be.tar.gz">be</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="EUbookshop/be-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Russian (sample file)" href="EUbookshop/be-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/be.raw.tar.gz">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/bg.tar.gz">bg</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (3 aligned documents, 18 links, 10.7k tokens)" href="download.php?f=EUbookshop/ar-bg.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="EUbookshop/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="EUbookshop/bg-ca_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="EUbookshop/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Welsh (sample file)" href="EUbookshop/bg-cy_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="EUbookshop/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="EUbookshop/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="EUbookshop/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="EUbookshop/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="EUbookshop/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="EUbookshop/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="EUbookshop/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="EUbookshop/bg-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="EUbookshop/bg-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Gaelic (sample file)" href="EUbookshop/bg-gd_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="EUbookshop/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="EUbookshop/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="EUbookshop/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="EUbookshop/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="EUbookshop/bg-ja_sample.html">view</a></td><th>bg</th>
<td></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="EUbookshop/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="EUbookshop/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="EUbookshop/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="EUbookshop/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Bokmål, Norwegian (sample file)" href="EUbookshop/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="EUbookshop/bg-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="EUbookshop/bg-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="EUbookshop/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="EUbookshop/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="EUbookshop/bg-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="EUbookshop/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="EUbookshop/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="EUbookshop/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="EUbookshop/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="EUbookshop/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="EUbookshop/bg-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="EUbookshop/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="EUbookshop/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="EUbookshop/bg-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/bg.raw.tar.gz">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/bs.tar.gz">bs</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (0.4k links, 72.5k tokens)" href="download.php?f=EUbookshop/bg-bs.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="EUbookshop/bs-cs_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="EUbookshop/bs-de_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="EUbookshop/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="EUbookshop/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="EUbookshop/bs-es_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="EUbookshop/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="EUbookshop/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="EUbookshop/bs-fr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="EUbookshop/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="EUbookshop/bs-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="EUbookshop/bs-it_sample.html">view</a></td><td></td><th>bs</th>
<td></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="EUbookshop/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="EUbookshop/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="EUbookshop/bs-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Bokmål, Norwegian (sample file)" href="EUbookshop/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Dutch (sample file)" href="EUbookshop/bs-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Polish (sample file)" href="EUbookshop/bs-pl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="EUbookshop/bs-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-sh (sample file)" href="EUbookshop/bs-sh_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="EUbookshop/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="EUbookshop/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="EUbookshop/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="EUbookshop/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swedish (sample file)" href="EUbookshop/bs-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="EUbookshop/bs-tr_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/bs.raw.tar.gz">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ca.tar.gz">ca</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (19 aligned documents, 1.2k links, 87.0k tokens)" href="download.php?f=EUbookshop/bg-ca.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Catalan-Czech (sample file)" href="EUbookshop/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Welsh (sample file)" href="EUbookshop/ca-cy_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="EUbookshop/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="EUbookshop/ca-de_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="EUbookshop/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="EUbookshop/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="EUbookshop/ca-es_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="EUbookshop/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="EUbookshop/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="EUbookshop/ca-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="EUbookshop/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Gaelic (sample file)" href="EUbookshop/ca-gd_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="EUbookshop/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="EUbookshop/ca-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="EUbookshop/ca-it_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="EUbookshop/ca-ja_sample.html">view</a></td><th>ca</th>
<td></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="EUbookshop/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="EUbookshop/ca-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="EUbookshop/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Bokmål, Norwegian (sample file)" href="EUbookshop/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Dutch (sample file)" href="EUbookshop/ca-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Polish (sample file)" href="EUbookshop/ca-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="EUbookshop/ca-pt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="EUbookshop/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Russian (sample file)" href="EUbookshop/ca-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="EUbookshop/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="EUbookshop/ca-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Swedish (sample file)" href="EUbookshop/ca-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="EUbookshop/ca-uk_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ca.raw.tar.gz">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cn.tar.gz">cn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="cn-Danish (sample file)" href="EUbookshop/cn-da_sample.html">view</a></td><td><a rel="nofollow" title="cn-German (sample file)" href="EUbookshop/cn-de_sample.html">view</a></td><td><a rel="nofollow" title="cn-Greek (sample file)" href="EUbookshop/cn-el_sample.html">view</a></td><td><a rel="nofollow" title="cn-English (sample file)" href="EUbookshop/cn-en_sample.html">view</a></td><td><a rel="nofollow" title="cn-Spanish (sample file)" href="EUbookshop/cn-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cn-French (sample file)" href="EUbookshop/cn-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Italian (sample file)" href="EUbookshop/cn-it_sample.html">view</a></td><td></td><th>cn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Dutch (sample file)" href="EUbookshop/cn-nl_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Portuguese (sample file)" href="EUbookshop/cn-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/cn.raw.tar.gz">cn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cs.tar.gz">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (4 aligned documents, 0.1k links, 27.5k tokens)" href="download.php?f=EUbookshop/ar-cs.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (703 aligned documents, 0.2M links, 20.2M tokens)" href="download.php?f=EUbookshop/bg-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (0.4k links, 65.8k tokens)" href="download.php?f=EUbookshop/bs-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (20 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-cs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Czech-Welsh (sample file)" href="EUbookshop/cs-cy_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Danish (sample file)" href="EUbookshop/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="EUbookshop/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="EUbookshop/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="EUbookshop/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="EUbookshop/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="EUbookshop/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="EUbookshop/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="EUbookshop/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="EUbookshop/cs-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="EUbookshop/cs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Gaelic (sample file)" href="EUbookshop/cs-gd_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="EUbookshop/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="EUbookshop/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="EUbookshop/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="EUbookshop/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="EUbookshop/cs-ja_sample.html">view</a></td><th>cs</th>
<td></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="EUbookshop/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="EUbookshop/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="EUbookshop/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Maltese (sample file)" href="EUbookshop/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Bokmål, Norwegian (sample file)" href="EUbookshop/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="EUbookshop/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="EUbookshop/cs-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="EUbookshop/cs-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="EUbookshop/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="EUbookshop/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="EUbookshop/cs-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="EUbookshop/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="EUbookshop/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="EUbookshop/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="EUbookshop/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="EUbookshop/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swahili (sample file)" href="EUbookshop/cs-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="EUbookshop/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="EUbookshop/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="EUbookshop/cs-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cy.tar.gz">cy</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Bulgarian' (12.5k tokens)" href="download.php?f=EUbookshop/bg-cy.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Catalan' (12.5k tokens)" href="download.php?f=EUbookshop/ca-cy.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Czech' (0.6k links, 21.9k tokens)" href="download.php?f=EUbookshop/cs-cy.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Welsh-Danish (sample file)" href="EUbookshop/cy-da_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-German (sample file)" href="EUbookshop/cy-de_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Greek (sample file)" href="EUbookshop/cy-el_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="EUbookshop/cy-en_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Spanish (sample file)" href="EUbookshop/cy-es_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Estonian (sample file)" href="EUbookshop/cy-et_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Finnish (sample file)" href="EUbookshop/cy-fi_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-French (sample file)" href="EUbookshop/cy-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Irish (sample file)" href="EUbookshop/cy-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Croatian (sample file)" href="EUbookshop/cy-hr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Hungarian (sample file)" href="EUbookshop/cy-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Italian (sample file)" href="EUbookshop/cy-it_sample.html">view</a></td><td></td><th>cy</th>
<td></td><td><a rel="nofollow" title="Welsh-Lithuanian (sample file)" href="EUbookshop/cy-lt_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Latvian (sample file)" href="EUbookshop/cy-lv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Dutch (sample file)" href="EUbookshop/cy-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Polish (sample file)" href="EUbookshop/cy-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Portuguese (sample file)" href="EUbookshop/cy-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Slovak (sample file)" href="EUbookshop/cy-sk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Slovenian (sample file)" href="EUbookshop/cy-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Swedish (sample file)" href="EUbookshop/cy-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Ukrainian (sample file)" href="EUbookshop/cy-uk_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/cy.raw.tar.gz">cy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/da.tar.gz">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Arabic' (8 aligned documents, 81 links, 0.1M tokens)" href="download.php?f=EUbookshop/ar-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (694 aligned documents, 0.2M links, 19.5M tokens)" href="download.php?f=EUbookshop/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (28 aligned documents, 2.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-cn' (18.7k tokens)" href="download.php?f=EUbookshop/cn-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (1,107 aligned documents, 0.4M links, 29.5M tokens)" href="download.php?f=EUbookshop/cs-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Welsh' (0.5k links, 22.0k tokens)" href="download.php?f=EUbookshop/cy-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="EUbookshop/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="EUbookshop/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="EUbookshop/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="EUbookshop/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="EUbookshop/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="EUbookshop/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="EUbookshop/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="EUbookshop/da-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="EUbookshop/da-ga_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Gaelic (sample file)" href="EUbookshop/da-gd_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="EUbookshop/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="EUbookshop/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="EUbookshop/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="EUbookshop/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="EUbookshop/da-ja_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Luxembourgish (sample file)" href="EUbookshop/da-lb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="EUbookshop/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="EUbookshop/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="EUbookshop/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Maltese (sample file)" href="EUbookshop/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Bokmål, Norwegian (sample file)" href="EUbookshop/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="EUbookshop/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="EUbookshop/da-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="EUbookshop/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-po (sample file)" href="EUbookshop/da-po_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="EUbookshop/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="EUbookshop/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="EUbookshop/da-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="EUbookshop/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="EUbookshop/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="EUbookshop/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="EUbookshop/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="EUbookshop/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swahili (sample file)" href="EUbookshop/da-sw_sample.html">view</a></td><td><a rel="nofollow" title="Danish-tc (sample file)" href="EUbookshop/da-tc_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="EUbookshop/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="EUbookshop/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="EUbookshop/da-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/da.raw.tar.gz">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (10 aligned documents, 0.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/ar-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (725 aligned documents, 0.2M links, 19.6M tokens)" href="download.php?f=EUbookshop/bg-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (0.4k links, 69.3k tokens)" href="download.php?f=EUbookshop/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (30 aligned documents, 2.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-cn' (20.6k tokens)" href="download.php?f=EUbookshop/cn-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (1,153 aligned documents, 0.4M links, 30.7M tokens)" href="download.php?f=EUbookshop/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Welsh' (0.6k links, 22.8k tokens)" href="download.php?f=EUbookshop/cy-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (6,880 aligned documents, 5.0M links, 404.9M tokens)" href="download.php?f=EUbookshop/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="EUbookshop/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="EUbookshop/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="EUbookshop/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="EUbookshop/de-et_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="EUbookshop/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EUbookshop/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EUbookshop/de-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="German-Irish (sample file)" href="EUbookshop/de-ga_sample.html">view</a></td><td><a rel="nofollow" title="German-Gaelic (sample file)" href="EUbookshop/de-gd_sample.html">view</a></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="EUbookshop/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="EUbookshop/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="EUbookshop/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="EUbookshop/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="EUbookshop/de-ja_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Luxembourgish (sample file)" href="EUbookshop/de-lb_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="EUbookshop/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="EUbookshop/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="EUbookshop/de-mk_sample.html">view</a></td><td><a rel="nofollow" title="German-Maltese (sample file)" href="EUbookshop/de-mt_sample.html">view</a></td><td><a rel="nofollow" title="German-Bokmål, Norwegian (sample file)" href="EUbookshop/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="EUbookshop/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="EUbookshop/de-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="EUbookshop/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-po (sample file)" href="EUbookshop/de-po_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="EUbookshop/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="EUbookshop/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="EUbookshop/de-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="EUbookshop/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="EUbookshop/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Albanian (sample file)" href="EUbookshop/de-sq_sample.html">view</a></td><td><a rel="nofollow" title="German-Serbian (sample file)" href="EUbookshop/de-sr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="EUbookshop/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Swahili (sample file)" href="EUbookshop/de-sw_sample.html">view</a></td><td><a rel="nofollow" title="German-tc (sample file)" href="EUbookshop/de-tc_sample.html">view</a></td><td><a rel="nofollow" title="German-Turkish (sample file)" href="EUbookshop/de-tr_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="EUbookshop/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="EUbookshop/de-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (5 aligned documents, 0.1k links, 14.8k tokens)" href="download.php?f=EUbookshop/ar-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (692 aligned documents, 0.2M links, 21.8M tokens)" href="download.php?f=EUbookshop/bg-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (0.4k links, 78.3k tokens)" href="download.php?f=EUbookshop/bs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (30 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-cn' (22.3k tokens)" href="download.php?f=EUbookshop/cn-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (1,118 aligned documents, 0.4M links, 33.4M tokens)" href="download.php?f=EUbookshop/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Welsh' (2 aligned documents, 0.5k links, 38.8k tokens)" href="download.php?f=EUbookshop/cy-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (6,116 aligned documents, 3.7M links, 367.1M tokens)" href="download.php?f=EUbookshop/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (6,284 aligned documents, 4.2M links, 375.8M tokens)" href="download.php?f=EUbookshop/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="EUbookshop/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="EUbookshop/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="EUbookshop/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="EUbookshop/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="EUbookshop/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="EUbookshop/el-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="EUbookshop/el-ga_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Gaelic (sample file)" href="EUbookshop/el-gd_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="EUbookshop/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="EUbookshop/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="EUbookshop/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="EUbookshop/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="EUbookshop/el-ja_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Luxembourgish (sample file)" href="EUbookshop/el-lb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="EUbookshop/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="EUbookshop/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="EUbookshop/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="EUbookshop/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Bokmål, Norwegian (sample file)" href="EUbookshop/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="EUbookshop/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="EUbookshop/el-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="EUbookshop/el-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="EUbookshop/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="EUbookshop/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="EUbookshop/el-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="EUbookshop/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="EUbookshop/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="EUbookshop/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="EUbookshop/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="EUbookshop/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="EUbookshop/el-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="EUbookshop/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="EUbookshop/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="EUbookshop/el-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/el.raw.tar.gz">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (30 aligned documents, 1.7k links, 0.4M tokens)" href="download.php?f=EUbookshop/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (5 links, 0.3k tokens)" href="download.php?f=EUbookshop/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (740 aligned documents, 0.2M links, 22.8M tokens)" href="download.php?f=EUbookshop/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (4 aligned documents, 0.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (35 aligned documents, 4.2k links, 0.3M tokens)" href="download.php?f=EUbookshop/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cn' (23.7k tokens)" href="download.php?f=EUbookshop/cn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (1,182 aligned documents, 0.5M links, 34.8M tokens)" href="download.php?f=EUbookshop/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/cy-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (7,006 aligned documents, 5.1M links, 437.5M tokens)" href="download.php?f=EUbookshop/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (15,373 aligned documents, 9.6M links, 717.6M tokens)" href="download.php?f=EUbookshop/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (6,421 aligned documents, 4.1M links, 406.7M tokens)" href="download.php?f=EUbookshop/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="EUbookshop/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="EUbookshop/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="EUbookshop/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EUbookshop/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EUbookshop/en-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="EUbookshop/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Gaelic (sample file)" href="EUbookshop/en-gd_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="EUbookshop/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="EUbookshop/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="EUbookshop/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="EUbookshop/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="EUbookshop/en-ja_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Luxembourgish (sample file)" href="EUbookshop/en-lb_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="EUbookshop/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="EUbookshop/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="EUbookshop/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="EUbookshop/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-Bokmål, Norwegian (sample file)" href="EUbookshop/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="EUbookshop/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="EUbookshop/en-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="EUbookshop/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-po (sample file)" href="EUbookshop/en-po_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="EUbookshop/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="EUbookshop/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="EUbookshop/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-sh (sample file)" href="EUbookshop/en-sh_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="EUbookshop/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="EUbookshop/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="EUbookshop/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="EUbookshop/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="EUbookshop/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="EUbookshop/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-tc (sample file)" href="EUbookshop/en-tc_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="EUbookshop/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="EUbookshop/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="EUbookshop/en-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (7 aligned documents, 0.2k links, 50.1k tokens)" href="download.php?f=EUbookshop/ar-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (714 aligned documents, 0.2M links, 21.8M tokens)" href="download.php?f=EUbookshop/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (0.4k links, 80.8k tokens)" href="download.php?f=EUbookshop/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (34 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-cn' (21.1k tokens)" href="download.php?f=EUbookshop/cn-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (1,152 aligned documents, 0.4M links, 33.6M tokens)" href="download.php?f=EUbookshop/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Welsh' (0.5k links, 22.3k tokens)" href="download.php?f=EUbookshop/cy-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (6,064 aligned documents, 3.9M links, 348.0M tokens)" href="download.php?f=EUbookshop/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (7,345 aligned documents, 5.0M links, 402.3M tokens)" href="download.php?f=EUbookshop/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (6,018 aligned documents, 3.8M links, 373.5M tokens)" href="download.php?f=EUbookshop/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (7,637 aligned documents, 5.3M links, 437.9M tokens)" href="download.php?f=EUbookshop/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="EUbookshop/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="EUbookshop/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="EUbookshop/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="EUbookshop/es-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Irish (sample file)" href="EUbookshop/es-ga_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Gaelic (sample file)" href="EUbookshop/es-gd_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="EUbookshop/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="EUbookshop/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="EUbookshop/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="EUbookshop/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="EUbookshop/es-ja_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Luxembourgish (sample file)" href="EUbookshop/es-lb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="EUbookshop/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="EUbookshop/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Macedonian (sample file)" href="EUbookshop/es-mk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="EUbookshop/es-mt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Bokmål, Norwegian (sample file)" href="EUbookshop/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="EUbookshop/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="EUbookshop/es-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="EUbookshop/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-po (sample file)" href="EUbookshop/es-po_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="EUbookshop/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="EUbookshop/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="EUbookshop/es-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="EUbookshop/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="EUbookshop/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Albanian (sample file)" href="EUbookshop/es-sq_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Serbian (sample file)" href="EUbookshop/es-sr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="EUbookshop/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="EUbookshop/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-tc (sample file)" href="EUbookshop/es-tc_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Turkish (sample file)" href="EUbookshop/es-tr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="EUbookshop/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="EUbookshop/es-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/et.tar.gz">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (4 aligned documents, 99 links, 23.3k tokens)" href="download.php?f=EUbookshop/ar-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (696 aligned documents, 0.2M links, 18.5M tokens)" href="download.php?f=EUbookshop/bg-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (0.4k links, 57.3k tokens)" href="download.php?f=EUbookshop/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (20 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (1,123 aligned documents, 0.4M links, 27.1M tokens)" href="download.php?f=EUbookshop/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Welsh' (0.5k links, 20.5k tokens)" href="download.php?f=EUbookshop/cy-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (1,096 aligned documents, 0.4M links, 26.1M tokens)" href="download.php?f=EUbookshop/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (1,113 aligned documents, 0.4M links, 26.3M tokens)" href="download.php?f=EUbookshop/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (1,093 aligned documents, 0.3M links, 29.1M tokens)" href="download.php?f=EUbookshop/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (1,140 aligned documents, 0.4M links, 30.3M tokens)" href="download.php?f=EUbookshop/en-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (1,115 aligned documents, 0.4M links, 29.3M tokens)" href="download.php?f=EUbookshop/es-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="EUbookshop/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="EUbookshop/et-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="EUbookshop/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Gaelic (sample file)" href="EUbookshop/et-gd_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="EUbookshop/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="EUbookshop/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="EUbookshop/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="EUbookshop/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="EUbookshop/et-ja_sample.html">view</a></td><th>et</th>
<td></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="EUbookshop/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="EUbookshop/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="EUbookshop/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="EUbookshop/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Bokmål, Norwegian (sample file)" href="EUbookshop/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="EUbookshop/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="EUbookshop/et-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="EUbookshop/et-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="EUbookshop/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="EUbookshop/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="EUbookshop/et-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="EUbookshop/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="EUbookshop/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="EUbookshop/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="EUbookshop/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="EUbookshop/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="EUbookshop/et-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="EUbookshop/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="EUbookshop/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="EUbookshop/et-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/et.raw.tar.gz">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fi.tar.gz">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (5 aligned documents, 0.1k links, 25.7k tokens)" href="download.php?f=EUbookshop/ar-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (688 aligned documents, 0.2M links, 18.0M tokens)" href="download.php?f=EUbookshop/bg-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (0.4k links, 58.3k tokens)" href="download.php?f=EUbookshop/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (27 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (1,108 aligned documents, 0.4M links, 26.6M tokens)" href="download.php?f=EUbookshop/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Welsh' (0.6k links, 20.5k tokens)" href="download.php?f=EUbookshop/cy-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (3,924 aligned documents, 1.8M links, 130.8M tokens)" href="download.php?f=EUbookshop/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (3,972 aligned documents, 1.9M links, 132.6M tokens)" href="download.php?f=EUbookshop/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (3,857 aligned documents, 1.7M links, 143.8M tokens)" href="download.php?f=EUbookshop/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (4,026 aligned documents, 2.1M links, 149.1M tokens)" href="download.php?f=EUbookshop/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (3,969 aligned documents, 1.9M links, 143.1M tokens)" href="download.php?f=EUbookshop/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (1,103 aligned documents, 0.4M links, 23.4M tokens)" href="download.php?f=EUbookshop/et-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="EUbookshop/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-French (sample file)" href="EUbookshop/fi-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Irish (sample file)" href="EUbookshop/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Gaelic (sample file)" href="EUbookshop/fi-gd_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="EUbookshop/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="EUbookshop/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="EUbookshop/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="EUbookshop/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="EUbookshop/fi-ja_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Luxembourgish (sample file)" href="EUbookshop/fi-lb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="EUbookshop/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="EUbookshop/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="EUbookshop/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="EUbookshop/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Bokmål, Norwegian (sample file)" href="EUbookshop/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="EUbookshop/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="EUbookshop/fi-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="EUbookshop/fi-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="EUbookshop/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="EUbookshop/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="EUbookshop/fi-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="EUbookshop/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="EUbookshop/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="EUbookshop/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="EUbookshop/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="EUbookshop/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="EUbookshop/fi-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="EUbookshop/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="EUbookshop/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="EUbookshop/fi-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/fi.raw.tar.gz">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (29 aligned documents, 1.2k links, 0.4M tokens)" href="download.php?f=EUbookshop/ar-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (720 aligned documents, 0.2M links, 20.2M tokens)" href="download.php?f=EUbookshop/bg-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (0.4k links, 74.9k tokens)" href="download.php?f=EUbookshop/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (32 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-cn' (23.5k tokens)" href="download.php?f=EUbookshop/cn-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (1,144 aligned documents, 0.4M links, 31.3M tokens)" href="download.php?f=EUbookshop/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Welsh' (0.6k links, 25.5k tokens)" href="download.php?f=EUbookshop/cy-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (6,801 aligned documents, 4.5M links, 405.2M tokens)" href="download.php?f=EUbookshop/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (14,980 aligned documents, 8.9M links, 678.5M tokens)" href="download.php?f=EUbookshop/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (6,302 aligned documents, 4.2M links, 405.8M tokens)" href="download.php?f=EUbookshop/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (16,947 aligned documents, 10.8M links, 838.7M tokens)" href="download.php?f=EUbookshop/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (7,514 aligned documents, 5.0M links, 440.5M tokens)" href="download.php?f=EUbookshop/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (1,104 aligned documents, 0.4M links, 26.6M tokens)" href="download.php?f=EUbookshop/et-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (3,982 aligned documents, 1.9M links, 150.0M tokens)" href="download.php?f=EUbookshop/fi-fr.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="French-Irish (sample file)" href="EUbookshop/fr-ga_sample.html">view</a></td><td><a rel="nofollow" title="French-Gaelic (sample file)" href="EUbookshop/fr-gd_sample.html">view</a></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="EUbookshop/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="EUbookshop/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="EUbookshop/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="EUbookshop/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="EUbookshop/fr-ja_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Luxembourgish (sample file)" href="EUbookshop/fr-lb_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="EUbookshop/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="EUbookshop/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="EUbookshop/fr-mk_sample.html">view</a></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="EUbookshop/fr-mt_sample.html">view</a></td><td><a rel="nofollow" title="French-Bokmål, Norwegian (sample file)" href="EUbookshop/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EUbookshop/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-po (sample file)" href="EUbookshop/fr-po_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="EUbookshop/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="EUbookshop/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="EUbookshop/fr-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="EUbookshop/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="EUbookshop/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="EUbookshop/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Serbian (sample file)" href="EUbookshop/fr-sr_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="EUbookshop/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Swahili (sample file)" href="EUbookshop/fr-sw_sample.html">view</a></td><td><a rel="nofollow" title="French-tc (sample file)" href="EUbookshop/fr-tc_sample.html">view</a></td><td><a rel="nofollow" title="French-Turkish (sample file)" href="EUbookshop/fr-tr_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="EUbookshop/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="EUbookshop/fr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fr_BE.tar.gz">fr_BE</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (0 tokens)" href="download.php?f=EUbookshop/cs-fr_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (2 aligned documents, 18 links, 0.4k tokens)" href="download.php?f=EUbookshop/da-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (2 aligned documents, 25 links, 0.5k tokens)" href="download.php?f=EUbookshop/de-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (2 aligned documents, 30 links, 0.7k tokens)" href="download.php?f=EUbookshop/el-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2 aligned documents, 24 links, 0.7k tokens)" href="download.php?f=EUbookshop/en-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (2 aligned documents, 23 links, 0.5k tokens)" href="download.php?f=EUbookshop/es-fr_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (2 aligned documents, 25 links, 0.5k tokens)" href="download.php?f=EUbookshop/fi-fr_BE.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="French-Irish (sample file)" href="EUbookshop/fr_BE-ga_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Italian (sample file)" href="EUbookshop/fr_BE-it_sample.html">view</a></td><td></td><th>fr_BE</th>
<td><a rel="nofollow" title="French-Luxembourgish (sample file)" href="EUbookshop/fr_BE-lb_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="EUbookshop/fr_BE-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="EUbookshop/fr_BE-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="EUbookshop/fr_BE-mt_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr_BE-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EUbookshop/fr_BE-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="EUbookshop/fr_BE-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="EUbookshop/fr_BE-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="EUbookshop/fr_BE-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="EUbookshop/fr_BE-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/fr_BE.raw.tar.gz">fr_BE</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ga.tar.gz">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Arabic' (15 links, 1.6k tokens)" href="download.php?f=EUbookshop/ar-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (189 aligned documents, 56.7k links, 3.3M tokens)" href="download.php?f=EUbookshop/bg-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (15 aligned documents, 0.1k links, 10.3k tokens)" href="download.php?f=EUbookshop/ca-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (195 aligned documents, 77.2k links, 3.8M tokens)" href="download.php?f=EUbookshop/cs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Welsh' (0.4k links, 20.8k tokens)" href="download.php?f=EUbookshop/cy-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (226 aligned documents, 89.7k links, 6.3M tokens)" href="download.php?f=EUbookshop/da-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-German' (230 aligned documents, 0.1M links, 7.1M tokens)" href="download.php?f=EUbookshop/de-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (224 aligned documents, 0.1M links, 8.2M tokens)" href="download.php?f=EUbookshop/el-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (244 aligned documents, 0.1M links, 7.9M tokens)" href="download.php?f=EUbookshop/en-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Spanish' (222 aligned documents, 0.1M links, 6.6M tokens)" href="download.php?f=EUbookshop/es-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (191 aligned documents, 63.8k links, 3.5M tokens)" href="download.php?f=EUbookshop/et-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (208 aligned documents, 83.4k links, 4.6M tokens)" href="download.php?f=EUbookshop/fi-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (226 aligned documents, 0.1M links, 7.8M tokens)" href="download.php?f=EUbookshop/fr-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (2 aligned documents, 1 links, 7 tokens)" href="download.php?f=EUbookshop/fr_BE-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Gaelic (sample file)" href="EUbookshop/ga-gd_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="EUbookshop/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="EUbookshop/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="EUbookshop/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Italian (sample file)" href="EUbookshop/ga-it_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Japanese (sample file)" href="EUbookshop/ga-ja_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Luxembourgish (sample file)" href="EUbookshop/ga-lb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="EUbookshop/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="EUbookshop/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="EUbookshop/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="EUbookshop/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Bokmål, Norwegian (sample file)" href="EUbookshop/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="EUbookshop/ga-nl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="EUbookshop/ga-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Polish (sample file)" href="EUbookshop/ga-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Portuguese (sample file)" href="EUbookshop/ga-pt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="EUbookshop/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Russian (sample file)" href="EUbookshop/ga-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="EUbookshop/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="EUbookshop/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="EUbookshop/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="EUbookshop/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swedish (sample file)" href="EUbookshop/ga-sv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="EUbookshop/ga-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Turkish (sample file)" href="EUbookshop/ga-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Chinese (sample file)" href="EUbookshop/ga-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ga.raw.tar.gz">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/gd.tar.gz">gd</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Bulgarian' (48 links, 3.4k tokens)" href="download.php?f=EUbookshop/bg-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Catalan' (64 links, 3.7k tokens)" href="download.php?f=EUbookshop/ca-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Czech' (21 links, 3.1k tokens)" href="download.php?f=EUbookshop/cs-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Danish' (21 links, 3.5k tokens)" href="download.php?f=EUbookshop/da-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-German' (69 links, 3.4k tokens)" href="download.php?f=EUbookshop/de-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Greek' (38 links, 3.6k tokens)" href="download.php?f=EUbookshop/el-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-English' (100 links, 3.6k tokens)" href="download.php?f=EUbookshop/en-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Spanish' (53 links, 3.4k tokens)" href="download.php?f=EUbookshop/es-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Estonian' (21 links, 3.0k tokens)" href="download.php?f=EUbookshop/et-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Finnish' (34 links, 3.2k tokens)" href="download.php?f=EUbookshop/fi-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-French' (83 links, 3.5k tokens)" href="download.php?f=EUbookshop/fr-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Irish' (71 links, 3.7k tokens)" href="download.php?f=EUbookshop/ga-gd.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Gaelic-Hungarian (sample file)" href="EUbookshop/gd-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Italian (sample file)" href="EUbookshop/gd-it_sample.html">view</a></td><td></td><th>gd</th>
<td></td><td><a rel="nofollow" title="Gaelic-Lithuanian (sample file)" href="EUbookshop/gd-lt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Latvian (sample file)" href="EUbookshop/gd-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Maltese (sample file)" href="EUbookshop/gd-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Dutch (sample file)" href="EUbookshop/gd-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Polish (sample file)" href="EUbookshop/gd-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Portuguese (sample file)" href="EUbookshop/gd-pt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Romanian (sample file)" href="EUbookshop/gd-ro_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Slovak (sample file)" href="EUbookshop/gd-sk_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Slovenian (sample file)" href="EUbookshop/gd-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Swedish (sample file)" href="EUbookshop/gd-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/gd.raw.tar.gz">gd</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/hr.tar.gz">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (0.7k tokens)" href="download.php?f=EUbookshop/ar-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (17 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (4 aligned documents, 0.7k links, 83.9k tokens)" href="download.php?f=EUbookshop/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (2 aligned documents, 0.7k links, 48.5k tokens)" href="download.php?f=EUbookshop/ca-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (18 aligned documents, 4.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Welsh' (0.5k links, 21.2k tokens)" href="download.php?f=EUbookshop/cy-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (18 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (17 aligned documents, 3.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (19 aligned documents, 3.8k links, 0.3M tokens)" href="download.php?f=EUbookshop/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (23 aligned documents, 6.2k links, 0.4M tokens)" href="download.php?f=EUbookshop/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (20 aligned documents, 5.3k links, 0.4M tokens)" href="download.php?f=EUbookshop/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (18 aligned documents, 3.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (19 aligned documents, 4.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (20 aligned documents, 5.4k links, 0.4M tokens)" href="download.php?f=EUbookshop/fr-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (7 aligned documents, 0.5k links, 37.2k tokens)" href="download.php?f=EUbookshop/ga-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="EUbookshop/hr-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="EUbookshop/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="EUbookshop/hr-ja_sample.html">view</a></td><th>hr</th>
<td></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="EUbookshop/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="EUbookshop/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="EUbookshop/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="EUbookshop/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Bokmål, Norwegian (sample file)" href="EUbookshop/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="EUbookshop/hr-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="EUbookshop/hr-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="EUbookshop/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="EUbookshop/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="EUbookshop/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-sh (sample file)" href="EUbookshop/hr-sh_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="EUbookshop/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="EUbookshop/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="EUbookshop/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="EUbookshop/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="EUbookshop/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="EUbookshop/hr-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="EUbookshop/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="EUbookshop/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="EUbookshop/hr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/hr.raw.tar.gz">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/hu.tar.gz">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Arabic' (4 aligned documents, 0.1k links, 26.8k tokens)" href="download.php?f=EUbookshop/ar-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (690 aligned documents, 0.2M links, 18.6M tokens)" href="download.php?f=EUbookshop/bg-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (34 links, 5.1k tokens)" href="download.php?f=EUbookshop/bs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (19 aligned documents, 1.2k links, 85.8k tokens)" href="download.php?f=EUbookshop/ca-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (1,121 aligned documents, 0.4M links, 28.9M tokens)" href="download.php?f=EUbookshop/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Welsh' (0.5k links, 21.8k tokens)" href="download.php?f=EUbookshop/cy-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (1,099 aligned documents, 0.4M links, 27.9M tokens)" href="download.php?f=EUbookshop/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (1,120 aligned documents, 0.4M links, 28.7M tokens)" href="download.php?f=EUbookshop/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (1,098 aligned documents, 0.4M links, 32.1M tokens)" href="download.php?f=EUbookshop/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (1,148 aligned documents, 0.5M links, 32.0M tokens)" href="download.php?f=EUbookshop/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (1,123 aligned documents, 0.4M links, 30.8M tokens)" href="download.php?f=EUbookshop/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (1,112 aligned documents, 0.4M links, 25.8M tokens)" href="download.php?f=EUbookshop/et-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (1,098 aligned documents, 0.4M links, 24.9M tokens)" href="download.php?f=EUbookshop/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (1,114 aligned documents, 0.4M links, 28.4M tokens)" href="download.php?f=EUbookshop/fr-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (194 aligned documents, 78.3k links, 3.8M tokens)" href="download.php?f=EUbookshop/ga-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Gaelic' (30 links, 3.1k tokens)" href="download.php?f=EUbookshop/gd-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (17 aligned documents, 1.7k links, 98.5k tokens)" href="download.php?f=EUbookshop/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="EUbookshop/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="EUbookshop/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="EUbookshop/hu-ja_sample.html">view</a></td><th>hu</th>
<td></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="EUbookshop/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="EUbookshop/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="EUbookshop/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="EUbookshop/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Bokmål, Norwegian (sample file)" href="EUbookshop/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="EUbookshop/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="EUbookshop/hu-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="EUbookshop/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-po (sample file)" href="EUbookshop/hu-po_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="EUbookshop/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="EUbookshop/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="EUbookshop/hu-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="EUbookshop/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="EUbookshop/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="EUbookshop/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="EUbookshop/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="EUbookshop/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swahili (sample file)" href="EUbookshop/hu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-tc (sample file)" href="EUbookshop/hu-tc_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="EUbookshop/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="EUbookshop/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="EUbookshop/hu-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/hu.raw.tar.gz">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/is.tar.gz">is</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (35 aligned documents, 5.5k links, 0.3M tokens)" href="download.php?f=EUbookshop/bg-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (38 aligned documents, 7.3k links, 0.4M tokens)" href="download.php?f=EUbookshop/cs-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (48 aligned documents, 8.6k links, 0.5M tokens)" href="download.php?f=EUbookshop/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (48 aligned documents, 9.1k links, 0.5M tokens)" href="download.php?f=EUbookshop/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (46 aligned documents, 8.4k links, 0.5M tokens)" href="download.php?f=EUbookshop/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (47 aligned documents, 9.9k links, 0.5M tokens)" href="download.php?f=EUbookshop/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (48 aligned documents, 8.3k links, 0.5M tokens)" href="download.php?f=EUbookshop/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (36 aligned documents, 7.4k links, 0.3M tokens)" href="download.php?f=EUbookshop/et-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (48 aligned documents, 10.6k links, 0.4M tokens)" href="download.php?f=EUbookshop/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (48 aligned documents, 9.0k links, 0.5M tokens)" href="download.php?f=EUbookshop/fr-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (15 aligned documents, 4.9k links, 0.3M tokens)" href="download.php?f=EUbookshop/ga-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (37 aligned documents, 6.7k links, 0.4M tokens)" href="download.php?f=EUbookshop/hu-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="EUbookshop/is-it_sample.html">view</a></td><td></td><th>is</th>
<td></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="EUbookshop/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="EUbookshop/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="EUbookshop/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="EUbookshop/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Bokmål, Norwegian (sample file)" href="EUbookshop/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="EUbookshop/is-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="EUbookshop/is-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="EUbookshop/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="EUbookshop/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="EUbookshop/is-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="EUbookshop/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="EUbookshop/is-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="EUbookshop/is-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="EUbookshop/is-tr_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/is.raw.tar.gz">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (9 aligned documents, 0.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/ar-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (716 aligned documents, 0.2M links, 21.2M tokens)" href="download.php?f=EUbookshop/bg-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (30 links, 5.5k tokens)" href="download.php?f=EUbookshop/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (31 aligned documents, 3.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-cn' (21.3k tokens)" href="download.php?f=EUbookshop/cn-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (1,145 aligned documents, 0.5M links, 33.5M tokens)" href="download.php?f=EUbookshop/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Welsh' (0.6k links, 23.2k tokens)" href="download.php?f=EUbookshop/cy-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (6,881 aligned documents, 4.9M links, 424.4M tokens)" href="download.php?f=EUbookshop/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (8,737 aligned documents, 6.1M links, 483.5M tokens)" href="download.php?f=EUbookshop/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (6,274 aligned documents, 4.2M links, 395.4M tokens)" href="download.php?f=EUbookshop/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (9,028 aligned documents, 6.6M links, 527.5M tokens)" href="download.php?f=EUbookshop/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (7,059 aligned documents, 4.8M links, 406.7M tokens)" href="download.php?f=EUbookshop/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (1,111 aligned documents, 0.4M links, 28.5M tokens)" href="download.php?f=EUbookshop/et-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (3,974 aligned documents, 2.0M links, 145.2M tokens)" href="download.php?f=EUbookshop/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (8,737 aligned documents, 5.9M links, 496.2M tokens)" href="download.php?f=EUbookshop/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (2 aligned documents, 25 links, 0.5k tokens)" href="download.php?f=EUbookshop/fr_BE-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Irish' (227 aligned documents, 0.1M links, 7.3M tokens)" href="download.php?f=EUbookshop/ga-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Gaelic' (54 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (19 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (1,122 aligned documents, 0.4M links, 30.7M tokens)" href="download.php?f=EUbookshop/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (48 aligned documents, 8.8k links, 0.5M tokens)" href="download.php?f=EUbookshop/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Japanese (sample file)" href="EUbookshop/it-ja_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Luxembourgish (sample file)" href="EUbookshop/it-lb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="EUbookshop/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="EUbookshop/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="EUbookshop/it-mk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Maltese (sample file)" href="EUbookshop/it-mt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Bokmål, Norwegian (sample file)" href="EUbookshop/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="EUbookshop/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="EUbookshop/it-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="EUbookshop/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-po (sample file)" href="EUbookshop/it-po_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="EUbookshop/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="EUbookshop/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="EUbookshop/it-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="EUbookshop/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="EUbookshop/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="EUbookshop/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Serbian (sample file)" href="EUbookshop/it-sr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="EUbookshop/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swahili (sample file)" href="EUbookshop/it-sw_sample.html">view</a></td><td><a rel="nofollow" title="Italian-tc (sample file)" href="EUbookshop/it-tc_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Turkish (sample file)" href="EUbookshop/it-tr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="EUbookshop/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="EUbookshop/it-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ja.tar.gz">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (2.5k tokens)" href="download.php?f=EUbookshop/ar-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (2 aligned documents, 19.2k tokens)" href="download.php?f=EUbookshop/bg-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (23.0k tokens)" href="download.php?f=EUbookshop/ca-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (3 aligned documents, 73 links, 26.3k tokens)" href="download.php?f=EUbookshop/cs-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (3 aligned documents, 95 links, 25.4k tokens)" href="download.php?f=EUbookshop/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (2 aligned documents, 0.1k links, 9.5k tokens)" href="download.php?f=EUbookshop/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (3 aligned documents, 2 links, 26.9k tokens)" href="download.php?f=EUbookshop/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (4 aligned documents, 0.1k links, 38.9k tokens)" href="download.php?f=EUbookshop/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (3 aligned documents, 97 links, 31.3k tokens)" href="download.php?f=EUbookshop/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (3 aligned documents, 88 links, 22.1k tokens)" href="download.php?f=EUbookshop/et-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (3 aligned documents, 98 links, 21.8k tokens)" href="download.php?f=EUbookshop/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (3 aligned documents, 99 links, 31.8k tokens)" href="download.php?f=EUbookshop/fr-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Irish' (0.1k tokens)" href="download.php?f=EUbookshop/ga-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (16.8k tokens)" href="download.php?f=EUbookshop/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (2 aligned documents, 97 links, 9.1k tokens)" href="download.php?f=EUbookshop/hu-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (3 aligned documents, 0.1k links, 29.4k tokens)" href="download.php?f=EUbookshop/it-ja.xml.gz">ces</a></td>
<th></th>
<th>ja</th>
<td></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="EUbookshop/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="EUbookshop/ja-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Maltese (sample file)" href="EUbookshop/ja-mt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Bokmål, Norwegian (sample file)" href="EUbookshop/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="EUbookshop/ja-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="EUbookshop/ja-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="EUbookshop/ja-pt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="EUbookshop/ja-ro_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="EUbookshop/ja-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="EUbookshop/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="EUbookshop/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="EUbookshop/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="EUbookshop/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="EUbookshop/ja-sv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swahili (sample file)" href="EUbookshop/ja-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="EUbookshop/ja-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="EUbookshop/ja-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ja.raw.tar.gz">ja</a></th></tr>
<tr><th></th>
<th>ar</th>
<th>be</th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cn</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>fi</th>
<th>fr</th>
<th>fr_BE</th>
<th>ga</th>
<th>gd</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th></th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th>nl_BE</th>
<th>pl</th>
<th>po</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sh</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>sw</th>
<th>tc</th>
<th>tr</th>
<th>uk</th>
<th>zh</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/lb.tar.gz">lb</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Danish' (3 aligned documents, 19.3k tokens)" href="download.php?f=EUbookshop/da-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-German' (4 aligned documents, 21.1k tokens)" href="download.php?f=EUbookshop/de-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Greek' (3 aligned documents, 23.3k tokens)" href="download.php?f=EUbookshop/el-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-English' (4 aligned documents, 24.7k tokens)" href="download.php?f=EUbookshop/en-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Spanish' (3 aligned documents, 23.0k tokens)" href="download.php?f=EUbookshop/es-lb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Finnish' (2 aligned documents, 0.6k tokens)" href="download.php?f=EUbookshop/fi-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-French' (3 aligned documents, 24.6k tokens)" href="download.php?f=EUbookshop/fr-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Irish' (7 tokens)" href="download.php?f=EUbookshop/ga-lb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Italian' (3 aligned documents, 25.1k tokens)" href="download.php?f=EUbookshop/it-lb.xml.gz">ces</a></td>
<td></td>
<th>lb</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Dutch (sample file)" href="EUbookshop/lb-nl_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-Dutch (sample file)" href="EUbookshop/lb-nl_BE_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Portuguese (sample file)" href="EUbookshop/lb-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Swedish (sample file)" href="EUbookshop/lb-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/lb.raw.tar.gz">lb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/lt.tar.gz">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (4 aligned documents, 0.1k links, 27.1k tokens)" href="download.php?f=EUbookshop/ar-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (695 aligned documents, 0.2M links, 19.7M tokens)" href="download.php?f=EUbookshop/bg-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (0.3k links, 65.4k tokens)" href="download.php?f=EUbookshop/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (21 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (1,123 aligned documents, 0.4M links, 29.3M tokens)" href="download.php?f=EUbookshop/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Welsh' (0.6k links, 21.1k tokens)" href="download.php?f=EUbookshop/cy-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (1,097 aligned documents, 0.4M links, 28.1M tokens)" href="download.php?f=EUbookshop/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (1,116 aligned documents, 0.4M links, 28.5M tokens)" href="download.php?f=EUbookshop/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (1,090 aligned documents, 0.4M links, 31.2M tokens)" href="download.php?f=EUbookshop/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (1,138 aligned documents, 0.5M links, 32.7M tokens)" href="download.php?f=EUbookshop/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (1,115 aligned documents, 0.4M links, 31.7M tokens)" href="download.php?f=EUbookshop/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (1,124 aligned documents, 0.4M links, 26.6M tokens)" href="download.php?f=EUbookshop/et-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (1,106 aligned documents, 0.4M links, 25.3M tokens)" href="download.php?f=EUbookshop/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (1,101 aligned documents, 0.4M links, 28.8M tokens)" href="download.php?f=EUbookshop/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (194 aligned documents, 77.7k links, 3.7M tokens)" href="download.php?f=EUbookshop/ga-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Gaelic' (26 links, 3.1k tokens)" href="download.php?f=EUbookshop/gd-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (18 aligned documents, 4.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (1,109 aligned documents, 0.4M links, 27.8M tokens)" href="download.php?f=EUbookshop/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (36 aligned documents, 6.1k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (1,113 aligned documents, 0.4M links, 30.6M tokens)" href="download.php?f=EUbookshop/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (3 aligned documents, 83 links, 26.6k tokens)" href="download.php?f=EUbookshop/ja-lt.xml.gz">ces</a></td>
<th>lt</th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="EUbookshop/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="EUbookshop/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="EUbookshop/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Bokmål, Norwegian (sample file)" href="EUbookshop/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="EUbookshop/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="EUbookshop/lt-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="EUbookshop/lt-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="EUbookshop/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="EUbookshop/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="EUbookshop/lt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="EUbookshop/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="EUbookshop/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="EUbookshop/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="EUbookshop/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="EUbookshop/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="EUbookshop/lt-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="EUbookshop/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="EUbookshop/lt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="EUbookshop/lt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/lt.raw.tar.gz">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/lv.tar.gz">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (4 aligned documents, 0.1k links, 28.9k tokens)" href="download.php?f=EUbookshop/ar-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (692 aligned documents, 0.2M links, 19.9M tokens)" href="download.php?f=EUbookshop/bg-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (0.4k links, 61.5k tokens)" href="download.php?f=EUbookshop/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (20 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (1,129 aligned documents, 0.4M links, 29.4M tokens)" href="download.php?f=EUbookshop/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Welsh' (0.6k links, 21.4k tokens)" href="download.php?f=EUbookshop/cy-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (1,101 aligned documents, 0.4M links, 27.9M tokens)" href="download.php?f=EUbookshop/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (1,122 aligned documents, 0.4M links, 28.6M tokens)" href="download.php?f=EUbookshop/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (1,091 aligned documents, 0.4M links, 31.1M tokens)" href="download.php?f=EUbookshop/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (1,153 aligned documents, 0.5M links, 33.0M tokens)" href="download.php?f=EUbookshop/en-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (1,121 aligned documents, 0.4M links, 31.6M tokens)" href="download.php?f=EUbookshop/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (1,127 aligned documents, 0.4M links, 26.3M tokens)" href="download.php?f=EUbookshop/et-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (1,108 aligned documents, 0.4M links, 25.6M tokens)" href="download.php?f=EUbookshop/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (1,113 aligned documents, 0.4M links, 29.7M tokens)" href="download.php?f=EUbookshop/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (194 aligned documents, 70.9k links, 3.7M tokens)" href="download.php?f=EUbookshop/ga-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Gaelic' (23 links, 3.0k tokens)" href="download.php?f=EUbookshop/gd-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (18 aligned documents, 4.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (1,113 aligned documents, 0.4M links, 27.5M tokens)" href="download.php?f=EUbookshop/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (37 aligned documents, 6.6k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (1,122 aligned documents, 0.4M links, 31.1M tokens)" href="download.php?f=EUbookshop/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (3 aligned documents, 86 links, 28.2k tokens)" href="download.php?f=EUbookshop/ja-lv.xml.gz">ces</a></td>
<th>lv</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (1,127 aligned documents, 0.5M links, 28.6M tokens)" href="download.php?f=EUbookshop/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="EUbookshop/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="EUbookshop/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Bokmål, Norwegian (sample file)" href="EUbookshop/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="EUbookshop/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="EUbookshop/lv-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="EUbookshop/lv-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="EUbookshop/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="EUbookshop/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="EUbookshop/lv-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="EUbookshop/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="EUbookshop/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="EUbookshop/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="EUbookshop/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="EUbookshop/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="EUbookshop/lv-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="EUbookshop/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="EUbookshop/lv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="EUbookshop/lv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/lv.raw.tar.gz">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/mk.tar.gz">mk</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (11 aligned documents, 2.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (3 aligned documents, 0.5k links, 83.2k tokens)" href="download.php?f=EUbookshop/bs-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (11 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/cs-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (10 aligned documents, 1.1k links, 70.1k tokens)" href="download.php?f=EUbookshop/da-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-German' (11 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/de-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (11 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (13 aligned documents, 2.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Spanish' (11 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/es-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (11 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/et-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-French' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/fr-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (7 aligned documents, 0.5k links, 42.4k tokens)" href="download.php?f=EUbookshop/ga-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (12 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (11 aligned documents, 1.3k links, 76.3k tokens)" href="download.php?f=EUbookshop/hu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (83 links, 3.9k tokens)" href="download.php?f=EUbookshop/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Italian' (11 aligned documents, 1.2k links, 82.6k tokens)" href="download.php?f=EUbookshop/it-mk.xml.gz">ces</a></td>
<td></td>
<th>mk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (11 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (11 aligned documents, 2.7k links, 0.2M tokens)" href="download.php?f=EUbookshop/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="EUbookshop/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Bokmål, Norwegian (sample file)" href="EUbookshop/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="EUbookshop/mk-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="EUbookshop/mk-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="EUbookshop/mk-pt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="EUbookshop/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Russian (sample file)" href="EUbookshop/mk-ru_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-sh (sample file)" href="EUbookshop/mk-sh_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="EUbookshop/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="EUbookshop/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="EUbookshop/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="EUbookshop/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="EUbookshop/mk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swahili (sample file)" href="EUbookshop/mk-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="EUbookshop/mk-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="EUbookshop/mk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/mk.raw.tar.gz">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/mt.tar.gz">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Arabic' (4 aligned documents, 0.2k links, 28.7k tokens)" href="download.php?f=EUbookshop/ar-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (581 aligned documents, 0.1M links, 14.1M tokens)" href="download.php?f=EUbookshop/bg-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (15 aligned documents, 1.5k links, 89.1k tokens)" href="download.php?f=EUbookshop/ca-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (888 aligned documents, 0.3M links, 20.0M tokens)" href="download.php?f=EUbookshop/cs-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (881 aligned documents, 0.2M links, 19.5M tokens)" href="download.php?f=EUbookshop/da-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (876 aligned documents, 0.3M links, 20.1M tokens)" href="download.php?f=EUbookshop/de-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (865 aligned documents, 0.3M links, 23.7M tokens)" href="download.php?f=EUbookshop/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (893 aligned documents, 0.3M links, 21.8M tokens)" href="download.php?f=EUbookshop/en-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (877 aligned documents, 0.3M links, 21.1M tokens)" href="download.php?f=EUbookshop/es-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (889 aligned documents, 0.3M links, 18.5M tokens)" href="download.php?f=EUbookshop/et-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (877 aligned documents, 0.3M links, 18.4M tokens)" href="download.php?f=EUbookshop/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (877 aligned documents, 0.3M links, 21.7M tokens)" href="download.php?f=EUbookshop/fr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (189 aligned documents, 77.4k links, 3.9M tokens)" href="download.php?f=EUbookshop/ga-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Gaelic' (64 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (14 aligned documents, 1.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (885 aligned documents, 0.3M links, 19.7M tokens)" href="download.php?f=EUbookshop/hu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (28 aligned documents, 5.8k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (877 aligned documents, 0.3M links, 20.9M tokens)" href="download.php?f=EUbookshop/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Japanese' (2 aligned documents, 19.0k tokens)" href="download.php?f=EUbookshop/ja-mt.xml.gz">ces</a></td>
<th>mt</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (883 aligned documents, 0.3M links, 19.4M tokens)" href="download.php?f=EUbookshop/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (891 aligned documents, 0.3M links, 19.7M tokens)" href="download.php?f=EUbookshop/lv-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (10 aligned documents, 1.0k links, 66.6k tokens)" href="download.php?f=EUbookshop/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-Bokmål, Norwegian (sample file)" href="EUbookshop/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="EUbookshop/mt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="EUbookshop/mt-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Polish (sample file)" href="EUbookshop/mt-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="EUbookshop/mt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="EUbookshop/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Russian (sample file)" href="EUbookshop/mt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="EUbookshop/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="EUbookshop/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="EUbookshop/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="EUbookshop/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swedish (sample file)" href="EUbookshop/mt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="EUbookshop/mt-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Maltese-Turkish (sample file)" href="EUbookshop/mt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="EUbookshop/mt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Chinese (sample file)" href="EUbookshop/mt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/mt.raw.tar.gz">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nb.tar.gz">nb</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Bulgarian' (53 aligned documents, 15.2k links, 1.2M tokens)" href="download.php?f=EUbookshop/bg-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Bosnian' (0.3k links, 63.3k tokens)" href="download.php?f=EUbookshop/bs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Catalan' (24 tokens)" href="download.php?f=EUbookshop/ca-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Czech' (59 aligned documents, 20.3k links, 1.2M tokens)" href="download.php?f=EUbookshop/cs-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Danish' (91 aligned documents, 24.5k links, 1.8M tokens)" href="download.php?f=EUbookshop/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-German' (94 aligned documents, 27.0k links, 1.9M tokens)" href="download.php?f=EUbookshop/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Greek' (88 aligned documents, 20.3k links, 2.1M tokens)" href="download.php?f=EUbookshop/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-English' (93 aligned documents, 28.5k links, 2.1M tokens)" href="download.php?f=EUbookshop/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Spanish' (93 aligned documents, 25.5k links, 2.1M tokens)" href="download.php?f=EUbookshop/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Estonian' (58 aligned documents, 20.1k links, 1.1M tokens)" href="download.php?f=EUbookshop/et-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Finnish' (94 aligned documents, 28.4k links, 1.7M tokens)" href="download.php?f=EUbookshop/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-French' (93 aligned documents, 26.7k links, 2.1M tokens)" href="download.php?f=EUbookshop/fr-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Irish' (21 aligned documents, 4.7k links, 0.3M tokens)" href="download.php?f=EUbookshop/ga-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Croatian' (4 aligned documents, 1.3k links, 91.2k tokens)" href="download.php?f=EUbookshop/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Hungarian' (57 aligned documents, 17.8k links, 1.1M tokens)" href="download.php?f=EUbookshop/hu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Icelandic' (45 aligned documents, 9.1k links, 0.5M tokens)" href="download.php?f=EUbookshop/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Italian' (92 aligned documents, 25.2k links, 2.0M tokens)" href="download.php?f=EUbookshop/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Japanese' (78 tokens)" href="download.php?f=EUbookshop/ja-nb.xml.gz">ces</a></td>
<th>nb</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Lithuanian' (57 aligned documents, 19.3k links, 1.2M tokens)" href="download.php?f=EUbookshop/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Latvian' (58 aligned documents, 19.8k links, 1.2M tokens)" href="download.php?f=EUbookshop/lv-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Macedonian' (3 aligned documents, 1.4k links, 0.1M tokens)" href="download.php?f=EUbookshop/mk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bokmål, Norwegian-Maltese' (40 aligned documents, 6.2k links, 0.3M tokens)" href="download.php?f=EUbookshop/mt-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bokmål, Norwegian-Dutch (sample file)" href="EUbookshop/nb-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bokmål, Norwegian-Polish (sample file)" href="EUbookshop/nb-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bokmål, Norwegian-Portuguese (sample file)" href="EUbookshop/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Romanian (sample file)" href="EUbookshop/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Russian (sample file)" href="EUbookshop/nb-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bokmål, Norwegian-Slovak (sample file)" href="EUbookshop/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Slovenian (sample file)" href="EUbookshop/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Albanian (sample file)" href="EUbookshop/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Serbian (sample file)" href="EUbookshop/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Swedish (sample file)" href="EUbookshop/nb-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bokmål, Norwegian-Swahili (sample file)" href="EUbookshop/nb-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bokmål, Norwegian-Turkish (sample file)" href="EUbookshop/nb-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bokmål, Norwegian-Chinese (sample file)" href="EUbookshop/nb-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/nb.raw.tar.gz">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nl.tar.gz">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (8 aligned documents, 96 links, 0.2M tokens)" href="download.php?f=EUbookshop/ar-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (697 aligned documents, 0.2M links, 21.2M tokens)" href="download.php?f=EUbookshop/bg-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bosnian' (0.4k links, 71.3k tokens)" href="download.php?f=EUbookshop/bs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Catalan' (32 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-cn' (21.0k tokens)" href="download.php?f=EUbookshop/cn-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (1,109 aligned documents, 0.4M links, 31.4M tokens)" href="download.php?f=EUbookshop/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Welsh' (0.6k links, 22.9k tokens)" href="download.php?f=EUbookshop/cy-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (6,858 aligned documents, 5.2M links, 425.8M tokens)" href="download.php?f=EUbookshop/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (7,430 aligned documents, 5.9M links, 446.5M tokens)" href="download.php?f=EUbookshop/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (6,169 aligned documents, 4.2M links, 393.8M tokens)" href="download.php?f=EUbookshop/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (7,610 aligned documents, 6.1M links, 486.7M tokens)" href="download.php?f=EUbookshop/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (6,224 aligned documents, 4.5M links, 378.0M tokens)" href="download.php?f=EUbookshop/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (1,098 aligned documents, 0.4M links, 28.5M tokens)" href="download.php?f=EUbookshop/et-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (3,954 aligned documents, 2.0M links, 145.5M tokens)" href="download.php?f=EUbookshop/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (7,379 aligned documents, 5.4M links, 451.1M tokens)" href="download.php?f=EUbookshop/fr-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (226 aligned documents, 0.1M links, 7.6M tokens)" href="download.php?f=EUbookshop/ga-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Gaelic' (45 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (19 aligned documents, 4.7k links, 0.3M tokens)" href="download.php?f=EUbookshop/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (1,103 aligned documents, 0.4M links, 29.7M tokens)" href="download.php?f=EUbookshop/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (47 aligned documents, 9.2k links, 0.5M tokens)" href="download.php?f=EUbookshop/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (7,389 aligned documents, 5.8M links, 466.7M tokens)" href="download.php?f=EUbookshop/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (3 aligned documents, 88 links, 30.1k tokens)" href="download.php?f=EUbookshop/ja-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Luxembourgish' (3 aligned documents, 22.9k tokens)" href="download.php?f=EUbookshop/lb-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (1,097 aligned documents, 0.4M links, 30.6M tokens)" href="download.php?f=EUbookshop/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (1,105 aligned documents, 0.4M links, 30.3M tokens)" href="download.php?f=EUbookshop/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Macedonian' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (873 aligned documents, 0.3M links, 20.6M tokens)" href="download.php?f=EUbookshop/mt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bokmål, Norwegian' (91 aligned documents, 26.9k links, 2.0M tokens)" href="download.php?f=EUbookshop/nb-nl.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="EUbookshop/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-po (sample file)" href="EUbookshop/nl-po_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="EUbookshop/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="EUbookshop/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="EUbookshop/nl-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="EUbookshop/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="EUbookshop/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Albanian (sample file)" href="EUbookshop/nl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Serbian (sample file)" href="EUbookshop/nl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="EUbookshop/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swahili (sample file)" href="EUbookshop/nl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-tc (sample file)" href="EUbookshop/nl-tc_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Turkish (sample file)" href="EUbookshop/nl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="EUbookshop/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="EUbookshop/nl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nl_BE.tar.gz">nl_BE</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (2 aligned documents, 0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/cs-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (5 aligned documents, 0.6k links, 16.9k tokens)" href="download.php?f=EUbookshop/da-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (5 aligned documents, 0.8k links, 17.0k tokens)" href="download.php?f=EUbookshop/de-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (5 aligned documents, 0.7k links, 21.6k tokens)" href="download.php?f=EUbookshop/el-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (5 aligned documents, 0.8k links, 18.4k tokens)" href="download.php?f=EUbookshop/en-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (5 aligned documents, 0.6k links, 15.4k tokens)" href="download.php?f=EUbookshop/es-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (0.1k links, 2.9k tokens)" href="download.php?f=EUbookshop/et-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (5 aligned documents, 0.7k links, 13.5k tokens)" href="download.php?f=EUbookshop/fi-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (3 aligned documents, 0.7k links, 20.7k tokens)" href="download.php?f=EUbookshop/fr-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (2 aligned documents, 23 links, 0 tokens)" href="download.php?f=EUbookshop/fr_BE-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (2 aligned documents, 2 links, 7 tokens)" href="download.php?f=EUbookshop/ga-nl_BE.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/hu-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (5 aligned documents, 0.7k links, 19.0k tokens)" href="download.php?f=EUbookshop/it-nl_BE.xml.gz">ces</a></td>
<td></td>
<th>nl_BE</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Luxembourgish' (0 tokens)" href="download.php?f=EUbookshop/lb-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (2 aligned documents, 0.1k links, 3.4k tokens)" href="download.php?f=EUbookshop/lt-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (2 aligned documents, 0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/lv-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (2 aligned documents, 0.1k links, 3.7k tokens)" href="download.php?f=EUbookshop/mt-nl_BE.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Polish (sample file)" href="EUbookshop/nl_BE-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="EUbookshop/nl_BE-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="EUbookshop/nl_BE-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="EUbookshop/nl_BE-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="EUbookshop/nl_BE-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/nl_BE.raw.tar.gz">nl_BE</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/pl.tar.gz">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (5 aligned documents, 0.1k links, 34.3k tokens)" href="download.php?f=EUbookshop/ar-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (708 aligned documents, 0.2M links, 20.9M tokens)" href="download.php?f=EUbookshop/bg-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bosnian' (0.4k links, 67.6k tokens)" href="download.php?f=EUbookshop/bs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Catalan' (22 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (1,151 aligned documents, 0.4M links, 31.1M tokens)" href="download.php?f=EUbookshop/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Welsh' (0.6k links, 21.8k tokens)" href="download.php?f=EUbookshop/cy-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (1,110 aligned documents, 0.4M links, 29.2M tokens)" href="download.php?f=EUbookshop/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (1,358 aligned documents, 0.5M links, 34.4M tokens)" href="download.php?f=EUbookshop/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (1,149 aligned documents, 0.4M links, 33.9M tokens)" href="download.php?f=EUbookshop/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (1,387 aligned documents, 0.5M links, 39.3M tokens)" href="download.php?f=EUbookshop/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (1,356 aligned documents, 0.5M links, 37.9M tokens)" href="download.php?f=EUbookshop/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (1,125 aligned documents, 0.4M links, 27.6M tokens)" href="download.php?f=EUbookshop/et-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (1,110 aligned documents, 0.4M links, 26.2M tokens)" href="download.php?f=EUbookshop/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (1,345 aligned documents, 0.5M links, 35.4M tokens)" href="download.php?f=EUbookshop/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Irish' (196 aligned documents, 77.0k links, 3.8M tokens)" href="download.php?f=EUbookshop/ga-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Gaelic' (44 links, 3.5k tokens)" href="download.php?f=EUbookshop/gd-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (17 aligned documents, 4.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (1,125 aligned documents, 0.4M links, 28.9M tokens)" href="download.php?f=EUbookshop/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (38 aligned documents, 6.6k links, 0.4M tokens)" href="download.php?f=EUbookshop/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (1,346 aligned documents, 0.5M links, 37.5M tokens)" href="download.php?f=EUbookshop/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (3 aligned documents, 89 links, 28.8k tokens)" href="download.php?f=EUbookshop/ja-pl.xml.gz">ces</a></td>
<th>pl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (1,121 aligned documents, 0.5M links, 29.4M tokens)" href="download.php?f=EUbookshop/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (1,130 aligned documents, 0.4M links, 29.7M tokens)" href="download.php?f=EUbookshop/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Macedonian' (10 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Maltese' (881 aligned documents, 0.3M links, 19.0M tokens)" href="download.php?f=EUbookshop/mt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bokmål, Norwegian' (59 aligned documents, 19.9k links, 1.3M tokens)" href="download.php?f=EUbookshop/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (1,146 aligned documents, 0.4M links, 32.1M tokens)" href="download.php?f=EUbookshop/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (2 aligned documents, 0.1k links, 3.5k tokens)" href="download.php?f=EUbookshop/nl_BE-pl.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="EUbookshop/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="EUbookshop/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="EUbookshop/pl-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="EUbookshop/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="EUbookshop/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Albanian (sample file)" href="EUbookshop/pl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Serbian (sample file)" href="EUbookshop/pl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="EUbookshop/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swahili (sample file)" href="EUbookshop/pl-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="EUbookshop/pl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="EUbookshop/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="EUbookshop/pl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/po.tar.gz">po</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Danish' (18.9k tokens)" href="download.php?f=EUbookshop/da-po.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'po-German' (16.0k tokens)" href="download.php?f=EUbookshop/de-po.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-English' (4.6k tokens)" href="download.php?f=EUbookshop/en-po.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Spanish' (21.9k tokens)" href="download.php?f=EUbookshop/es-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-French' (23.1k tokens)" href="download.php?f=EUbookshop/fr-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Hungarian' (17.9k tokens)" href="download.php?f=EUbookshop/hu-po.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Italian' (20.4k tokens)" href="download.php?f=EUbookshop/it-po.xml.gz">ces</a></td>
<td></td>
<th>po</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Dutch' (21.0k tokens)" href="download.php?f=EUbookshop/nl-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="po-Portuguese (sample file)" href="EUbookshop/po-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="po-tc (sample file)" href="EUbookshop/po-tc_sample.html">view</a></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/po.raw.tar.gz">po</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (5 aligned documents, 0.1k links, 33.9k tokens)" href="download.php?f=EUbookshop/ar-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (696 aligned documents, 0.2M links, 21.3M tokens)" href="download.php?f=EUbookshop/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (31 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/ca-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-cn' (20.0k tokens)" href="download.php?f=EUbookshop/cn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (1,124 aligned documents, 0.4M links, 32.0M tokens)" href="download.php?f=EUbookshop/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Welsh' (0.5k links, 22.9k tokens)" href="download.php?f=EUbookshop/cy-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (5,945 aligned documents, 3.7M links, 323.1M tokens)" href="download.php?f=EUbookshop/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (6,143 aligned documents, 4.0M links, 332.2M tokens)" href="download.php?f=EUbookshop/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (5,851 aligned documents, 3.6M links, 350.2M tokens)" href="download.php?f=EUbookshop/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (6,318 aligned documents, 4.2M links, 361.4M tokens)" href="download.php?f=EUbookshop/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (6,201 aligned documents, 4.0M links, 351.7M tokens)" href="download.php?f=EUbookshop/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (1,103 aligned documents, 0.4M links, 28.7M tokens)" href="download.php?f=EUbookshop/et-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (3,946 aligned documents, 1.9M links, 141.9M tokens)" href="download.php?f=EUbookshop/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (6,240 aligned documents, 4.1M links, 364.4M tokens)" href="download.php?f=EUbookshop/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (2 aligned documents, 24 links, 0.5k tokens)" href="download.php?f=EUbookshop/fr_BE-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Irish' (223 aligned documents, 0.1M links, 6.8M tokens)" href="download.php?f=EUbookshop/ga-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Gaelic' (52 links, 3.0k tokens)" href="download.php?f=EUbookshop/gd-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (18 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (1,109 aligned documents, 0.4M links, 30.2M tokens)" href="download.php?f=EUbookshop/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (48 aligned documents, 8.8k links, 0.5M tokens)" href="download.php?f=EUbookshop/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (6,082 aligned documents, 4.1M links, 347.6M tokens)" href="download.php?f=EUbookshop/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (3 aligned documents, 0.1k links, 30.4k tokens)" href="download.php?f=EUbookshop/ja-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Luxembourgish' (3 aligned documents, 21.9k tokens)" href="download.php?f=EUbookshop/lb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (1,102 aligned documents, 0.4M links, 30.8M tokens)" href="download.php?f=EUbookshop/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (1,104 aligned documents, 0.4M links, 30.3M tokens)" href="download.php?f=EUbookshop/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (10 aligned documents, 1.2k links, 77.1k tokens)" href="download.php?f=EUbookshop/mk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (874 aligned documents, 0.3M links, 20.9M tokens)" href="download.php?f=EUbookshop/mt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bokmål, Norwegian' (91 aligned documents, 24.8k links, 2.0M tokens)" href="download.php?f=EUbookshop/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (6,001 aligned documents, 4.0M links, 346.0M tokens)" href="download.php?f=EUbookshop/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (5 aligned documents, 0.7k links, 19.4k tokens)" href="download.php?f=EUbookshop/nl_BE-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (1,143 aligned documents, 0.4M links, 32.4M tokens)" href="download.php?f=EUbookshop/pl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-po' (0 tokens)" href="download.php?f=EUbookshop/po-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="EUbookshop/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="EUbookshop/pt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="EUbookshop/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="EUbookshop/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="EUbookshop/pt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="EUbookshop/pt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="EUbookshop/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="EUbookshop/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-tc (sample file)" href="EUbookshop/pt-tc_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="EUbookshop/pt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="EUbookshop/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="EUbookshop/pt-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ro.tar.gz">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Arabic' (3 aligned documents, 100 links, 21.9k tokens)" href="download.php?f=EUbookshop/ar-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (703 aligned documents, 0.2M links, 21.9M tokens)" href="download.php?f=EUbookshop/bg-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (0.4k links, 73.4k tokens)" href="download.php?f=EUbookshop/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (13 aligned documents, 0.8k links, 49.9k tokens)" href="download.php?f=EUbookshop/ca-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (710 aligned documents, 0.3M links, 24.1M tokens)" href="download.php?f=EUbookshop/cs-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (687 aligned documents, 0.3M links, 23.1M tokens)" href="download.php?f=EUbookshop/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (709 aligned documents, 0.3M links, 22.7M tokens)" href="download.php?f=EUbookshop/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (686 aligned documents, 0.3M links, 25.3M tokens)" href="download.php?f=EUbookshop/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (736 aligned documents, 0.3M links, 26.9M tokens)" href="download.php?f=EUbookshop/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (716 aligned documents, 0.3M links, 25.9M tokens)" href="download.php?f=EUbookshop/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (695 aligned documents, 0.3M links, 22.0M tokens)" href="download.php?f=EUbookshop/et-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (681 aligned documents, 0.3M links, 20.5M tokens)" href="download.php?f=EUbookshop/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (705 aligned documents, 0.3M links, 22.4M tokens)" href="download.php?f=EUbookshop/fr-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (188 aligned documents, 67.2k links, 3.8M tokens)" href="download.php?f=EUbookshop/ga-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Gaelic' (50 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (16 aligned documents, 3.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (692 aligned documents, 0.3M links, 21.9M tokens)" href="download.php?f=EUbookshop/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (36 aligned documents, 6.2k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (712 aligned documents, 0.3M links, 25.1M tokens)" href="download.php?f=EUbookshop/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (2 aligned documents, 20.1k tokens)" href="download.php?f=EUbookshop/ja-ro.xml.gz">ces</a></td>
<th>ro</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (694 aligned documents, 0.3M links, 23.6M tokens)" href="download.php?f=EUbookshop/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (695 aligned documents, 0.3M links, 23.3M tokens)" href="download.php?f=EUbookshop/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (11 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (583 aligned documents, 0.2M links, 15.5M tokens)" href="download.php?f=EUbookshop/mt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bokmål, Norwegian' (53 aligned documents, 17.8k links, 1.2M tokens)" href="download.php?f=EUbookshop/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (687 aligned documents, 0.3M links, 24.9M tokens)" href="download.php?f=EUbookshop/nl-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (716 aligned documents, 0.3M links, 24.8M tokens)" href="download.php?f=EUbookshop/pl-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (696 aligned documents, 0.3M links, 25.2M tokens)" href="download.php?f=EUbookshop/pt-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="EUbookshop/ro-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="EUbookshop/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="EUbookshop/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="EUbookshop/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="EUbookshop/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="EUbookshop/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swahili (sample file)" href="EUbookshop/ro-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="EUbookshop/ro-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="EUbookshop/ro-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ro.raw.tar.gz">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (13 aligned documents, 1.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/ar-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Belarusian' (0.2k tokens)" href="download.php?f=EUbookshop/be-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (18 aligned documents, 0.8k links, 81.0k tokens)" href="download.php?f=EUbookshop/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (5.5k tokens)" href="download.php?f=EUbookshop/ca-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (26 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/cs-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (32 aligned documents, 5.5k links, 0.3M tokens)" href="download.php?f=EUbookshop/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (44 aligned documents, 9.0k links, 0.5M tokens)" href="download.php?f=EUbookshop/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (33 aligned documents, 7.1k links, 0.3M tokens)" href="download.php?f=EUbookshop/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (109 aligned documents, 50.1k links, 2.9M tokens)" href="download.php?f=EUbookshop/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (44 aligned documents, 8.5k links, 0.5M tokens)" href="download.php?f=EUbookshop/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (26 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/et-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (34 aligned documents, 6.5k links, 0.3M tokens)" href="download.php?f=EUbookshop/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (63 aligned documents, 16.1k links, 1.0M tokens)" href="download.php?f=EUbookshop/fr-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Irish' (4 aligned documents, 0.2k links, 11.5k tokens)" href="download.php?f=EUbookshop/ga-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (5 aligned documents, 1.0k links, 64.6k tokens)" href="download.php?f=EUbookshop/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (26 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (3 aligned documents, 0.5k links, 30.3k tokens)" href="download.php?f=EUbookshop/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (37 aligned documents, 6.6k links, 0.4M tokens)" href="download.php?f=EUbookshop/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (2 aligned documents, 93 links, 8.9k tokens)" href="download.php?f=EUbookshop/ja-ru.xml.gz">ces</a></td>
<th>ru</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (25 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (26 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Macedonian' (2 aligned documents, 10 links, 0.4k tokens)" href="download.php?f=EUbookshop/mk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Maltese' (19 aligned documents, 1.1k links, 98.3k tokens)" href="download.php?f=EUbookshop/mt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bokmål, Norwegian' (7 aligned documents, 0.5k links, 31.1k tokens)" href="download.php?f=EUbookshop/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (35 aligned documents, 6.7k links, 0.4M tokens)" href="download.php?f=EUbookshop/nl-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (28 aligned documents, 2.7k links, 0.2M tokens)" href="download.php?f=EUbookshop/pl-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (39 aligned documents, 6.5k links, 0.4M tokens)" href="download.php?f=EUbookshop/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (18 aligned documents, 1.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/ro-ru.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="EUbookshop/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="EUbookshop/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Albanian (sample file)" href="EUbookshop/ru-sq_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Serbian (sample file)" href="EUbookshop/ru-sr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="EUbookshop/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swahili (sample file)" href="EUbookshop/ru-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Turkish (sample file)" href="EUbookshop/ru-tr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="EUbookshop/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="EUbookshop/ru-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sh.tar.gz">sh</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Bosnian' (2 aligned documents, 0.3k links, 20.4k tokens)" href="download.php?f=EUbookshop/bs-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-English' (0.6k links, 24.2k tokens)" href="download.php?f=EUbookshop/en-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Croatian' (0.5k links, 20.3k tokens)" href="download.php?f=EUbookshop/hr-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sh</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Macedonian' (11.3k tokens)" href="download.php?f=EUbookshop/mk-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="sh-Albanian (sample file)" href="EUbookshop/sh-sq_sample.html">view</a></td><td><a rel="nofollow" title="sh-Serbian (sample file)" href="EUbookshop/sh-sr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sh.raw.tar.gz">sh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sk.tar.gz">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (4 aligned documents, 87 links, 28.0k tokens)" href="download.php?f=EUbookshop/ar-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (695 aligned documents, 0.2M links, 20.0M tokens)" href="download.php?f=EUbookshop/bg-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (0.4k links, 63.1k tokens)" href="download.php?f=EUbookshop/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (21 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (1,140 aligned documents, 0.4M links, 30.6M tokens)" href="download.php?f=EUbookshop/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Welsh' (0.6k links, 21.9k tokens)" href="download.php?f=EUbookshop/cy-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (1,099 aligned documents, 0.4M links, 28.7M tokens)" href="download.php?f=EUbookshop/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (1,122 aligned documents, 0.4M links, 29.1M tokens)" href="download.php?f=EUbookshop/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (1,094 aligned documents, 0.3M links, 31.7M tokens)" href="download.php?f=EUbookshop/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (1,154 aligned documents, 0.5M links, 33.7M tokens)" href="download.php?f=EUbookshop/en-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (1,128 aligned documents, 0.4M links, 32.6M tokens)" href="download.php?f=EUbookshop/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (1,116 aligned documents, 0.4M links, 27.2M tokens)" href="download.php?f=EUbookshop/et-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (1,102 aligned documents, 0.4M links, 25.8M tokens)" href="download.php?f=EUbookshop/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (1,119 aligned documents, 0.4M links, 29.8M tokens)" href="download.php?f=EUbookshop/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (194 aligned documents, 66.2k links, 3.8M tokens)" href="download.php?f=EUbookshop/ga-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Gaelic' (91 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (18 aligned documents, 3.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (1,116 aligned documents, 0.4M links, 28.3M tokens)" href="download.php?f=EUbookshop/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (38 aligned documents, 7.2k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (1,127 aligned documents, 0.4M links, 32.0M tokens)" href="download.php?f=EUbookshop/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (3 aligned documents, 93 links, 26.7k tokens)" href="download.php?f=EUbookshop/ja-sk.xml.gz">ces</a></td>
<th>sk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (1,117 aligned documents, 0.4M links, 29.4M tokens)" href="download.php?f=EUbookshop/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (1,123 aligned documents, 0.4M links, 29.3M tokens)" href="download.php?f=EUbookshop/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (11 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (886 aligned documents, 0.3M links, 19.8M tokens)" href="download.php?f=EUbookshop/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bokmål, Norwegian' (59 aligned documents, 20.3k links, 1.3M tokens)" href="download.php?f=EUbookshop/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (1,102 aligned documents, 0.4M links, 31.2M tokens)" href="download.php?f=EUbookshop/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (2 aligned documents, 0.1k links, 3.4k tokens)" href="download.php?f=EUbookshop/nl_BE-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (1,130 aligned documents, 0.4M links, 30.5M tokens)" href="download.php?f=EUbookshop/pl-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (1,111 aligned documents, 0.4M links, 31.7M tokens)" href="download.php?f=EUbookshop/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (703 aligned documents, 0.3M links, 23.9M tokens)" href="download.php?f=EUbookshop/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (25 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/ru-sk.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="EUbookshop/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="EUbookshop/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="EUbookshop/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="EUbookshop/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="EUbookshop/sk-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="EUbookshop/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="EUbookshop/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="EUbookshop/sk-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sk.raw.tar.gz">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sl.tar.gz">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (5 aligned documents, 0.1k links, 34.8k tokens)" href="download.php?f=EUbookshop/ar-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (687 aligned documents, 0.2M links, 18.2M tokens)" href="download.php?f=EUbookshop/bg-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (2 aligned documents, 0.4k links, 71.1k tokens)" href="download.php?f=EUbookshop/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (21 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (1,111 aligned documents, 0.4M links, 28.1M tokens)" href="download.php?f=EUbookshop/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Welsh' (0.5k links, 22.0k tokens)" href="download.php?f=EUbookshop/cy-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (1,088 aligned documents, 0.3M links, 27.0M tokens)" href="download.php?f=EUbookshop/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (1,108 aligned documents, 0.4M links, 27.3M tokens)" href="download.php?f=EUbookshop/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (1,079 aligned documents, 0.3M links, 29.6M tokens)" href="download.php?f=EUbookshop/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (1,141 aligned documents, 0.4M links, 31.1M tokens)" href="download.php?f=EUbookshop/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (1,105 aligned documents, 0.4M links, 29.6M tokens)" href="download.php?f=EUbookshop/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (1,103 aligned documents, 0.4M links, 25.1M tokens)" href="download.php?f=EUbookshop/et-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (1,092 aligned documents, 0.4M links, 24.1M tokens)" href="download.php?f=EUbookshop/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (1,107 aligned documents, 0.3M links, 28.3M tokens)" href="download.php?f=EUbookshop/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (0 tokens)" href="download.php?f=EUbookshop/fr_BE-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (195 aligned documents, 78.4k links, 3.9M tokens)" href="download.php?f=EUbookshop/ga-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Gaelic' (27 links, 3.2k tokens)" href="download.php?f=EUbookshop/gd-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (19 aligned documents, 4.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (1,098 aligned documents, 0.4M links, 26.2M tokens)" href="download.php?f=EUbookshop/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (38 aligned documents, 7.1k links, 0.3M tokens)" href="download.php?f=EUbookshop/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (1,105 aligned documents, 0.4M links, 29.6M tokens)" href="download.php?f=EUbookshop/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (3 aligned documents, 81 links, 26.1k tokens)" href="download.php?f=EUbookshop/ja-sl.xml.gz">ces</a></td>
<th>sl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (1,100 aligned documents, 0.4M links, 27.0M tokens)" href="download.php?f=EUbookshop/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (1,111 aligned documents, 0.4M links, 26.9M tokens)" href="download.php?f=EUbookshop/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (12 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (883 aligned documents, 0.3M links, 19.4M tokens)" href="download.php?f=EUbookshop/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bokmål, Norwegian' (59 aligned documents, 20.5k links, 1.3M tokens)" href="download.php?f=EUbookshop/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (1,091 aligned documents, 0.4M links, 28.9M tokens)" href="download.php?f=EUbookshop/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (2 aligned documents, 0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/nl_BE-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (1,113 aligned documents, 0.4M links, 28.2M tokens)" href="download.php?f=EUbookshop/pl-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (1,093 aligned documents, 0.4M links, 29.2M tokens)" href="download.php?f=EUbookshop/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (693 aligned documents, 0.3M links, 22.2M tokens)" href="download.php?f=EUbookshop/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (26 aligned documents, 1.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/ru-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (1,107 aligned documents, 0.4M links, 27.5M tokens)" href="download.php?f=EUbookshop/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="EUbookshop/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="EUbookshop/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="EUbookshop/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="EUbookshop/sl-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="EUbookshop/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="EUbookshop/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="EUbookshop/sl-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sl.raw.tar.gz">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sq.tar.gz">sq</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (4 aligned documents, 1.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (5 aligned documents, 0.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/bs-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/cs-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (3 aligned documents, 14 links, 0.5k tokens)" href="download.php?f=EUbookshop/da-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-German' (4 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/de-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (8 aligned documents, 2.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Spanish' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/es-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (4 aligned documents, 1.9k links, 98.6k tokens)" href="download.php?f=EUbookshop/et-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (4 aligned documents, 2.1k links, 99.6k tokens)" href="download.php?f=EUbookshop/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (4 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/fr-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (5 links, 0.2k tokens)" href="download.php?f=EUbookshop/ga-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (6 aligned documents, 2.4k links, 0.1M tokens)" href="download.php?f=EUbookshop/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (4 aligned documents, 0.1k links, 7.6k tokens)" href="download.php?f=EUbookshop/hu-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (4 aligned documents, 98 links, 7.9k tokens)" href="download.php?f=EUbookshop/it-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (0.1k tokens)" href="download.php?f=EUbookshop/ja-sq.xml.gz">ces</a></td>
<th>sq</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (4 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (4 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (5 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/mt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bokmål, Norwegian' (4 aligned documents, 1.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/nb-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Dutch' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/nl-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Polish' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/pl-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/pt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/ro-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Russian' (3 aligned documents, 7 links, 0.5k tokens)" href="download.php?f=EUbookshop/ru-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-sh' (2 aligned documents, 0.7k links, 31.0k tokens)" href="download.php?f=EUbookshop/sh-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (4 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (5 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="EUbookshop/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swedish (sample file)" href="EUbookshop/sq-sv_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swahili (sample file)" href="EUbookshop/sq-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="EUbookshop/sq-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="EUbookshop/sq-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sq.raw.tar.gz">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sr.tar.gz">sr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (4 aligned documents, 1.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (4 aligned documents, 0.6k links, 85.7k tokens)" href="download.php?f=EUbookshop/bs-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' (4 aligned documents, 1.9k links, 97.6k tokens)" href="download.php?f=EUbookshop/cs-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' (3 aligned documents, 4 links, 0.4k tokens)" href="download.php?f=EUbookshop/da-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-German' (4 aligned documents, 1.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/de-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (6 aligned documents, 1.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Spanish' (4 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/es-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (4 aligned documents, 1.7k links, 89.1k tokens)" href="download.php?f=EUbookshop/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (4 aligned documents, 1.9k links, 90.1k tokens)" href="download.php?f=EUbookshop/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-French' (4 aligned documents, 1.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/fr-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (0.1k tokens)" href="download.php?f=EUbookshop/ga-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (5 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' (4 aligned documents, 74 links, 6.0k tokens)" href="download.php?f=EUbookshop/hu-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Italian' (4 aligned documents, 57 links, 6.4k tokens)" href="download.php?f=EUbookshop/it-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (12 tokens)" href="download.php?f=EUbookshop/ja-sr.xml.gz">ces</a></td>
<th>sr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (4 aligned documents, 1.6k links, 97.3k tokens)" href="download.php?f=EUbookshop/lt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (4 aligned documents, 1.6k links, 93.3k tokens)" href="download.php?f=EUbookshop/lv-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (5 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (3 aligned documents, 4 links, 0.4k tokens)" href="download.php?f=EUbookshop/mt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bokmål, Norwegian' (4 aligned documents, 1.4k links, 95.1k tokens)" href="download.php?f=EUbookshop/nb-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Dutch' (4 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/nl-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Polish' (4 aligned documents, 1.9k links, 99.5k tokens)" href="download.php?f=EUbookshop/pl-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (3 aligned documents, 5 links, 0.4k tokens)" href="download.php?f=EUbookshop/pt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (4 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/ro-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Russian' (3 aligned documents, 6 links, 0.4k tokens)" href="download.php?f=EUbookshop/ru-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-sh' (2 aligned documents, 0.3k links, 20.7k tokens)" href="download.php?f=EUbookshop/sh-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (4 aligned documents, 1.7k links, 94.9k tokens)" href="download.php?f=EUbookshop/sk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (5 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/sl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (7 aligned documents, 2.3k links, 0.1M tokens)" href="download.php?f=EUbookshop/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swedish (sample file)" href="EUbookshop/sr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Swahili (sample file)" href="EUbookshop/sr-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="EUbookshop/sr-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="EUbookshop/sr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sr.raw.tar.gz">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Arabic' (5 aligned documents, 90 links, 28.6k tokens)" href="download.php?f=EUbookshop/ar-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (689 aligned documents, 0.2M links, 19.6M tokens)" href="download.php?f=EUbookshop/bg-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bosnian' (0.4k links, 65.2k tokens)" href="download.php?f=EUbookshop/bs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Catalan' (27 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/ca-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (1,106 aligned documents, 0.4M links, 28.4M tokens)" href="download.php?f=EUbookshop/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Welsh' (0.6k links, 21.7k tokens)" href="download.php?f=EUbookshop/cy-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (3,896 aligned documents, 1.8M links, 139.8M tokens)" href="download.php?f=EUbookshop/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (3,955 aligned documents, 1.8M links, 140.6M tokens)" href="download.php?f=EUbookshop/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (3,831 aligned documents, 1.5M links, 152.3M tokens)" href="download.php?f=EUbookshop/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (4,006 aligned documents, 2.0M links, 156.3M tokens)" href="download.php?f=EUbookshop/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (3,941 aligned documents, 1.8M links, 151.9M tokens)" href="download.php?f=EUbookshop/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (1,095 aligned documents, 0.4M links, 25.7M tokens)" href="download.php?f=EUbookshop/et-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (3,925 aligned documents, 1.9M links, 128.2M tokens)" href="download.php?f=EUbookshop/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (3,970 aligned documents, 1.8M links, 159.6M tokens)" href="download.php?f=EUbookshop/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (2 aligned documents, 25 links, 0.5k tokens)" href="download.php?f=EUbookshop/fr_BE-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Irish' (207 aligned documents, 88.1k links, 5.1M tokens)" href="download.php?f=EUbookshop/ga-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Gaelic' (37 links, 3.4k tokens)" href="download.php?f=EUbookshop/gd-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (18 aligned documents, 4.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (1,094 aligned documents, 0.4M links, 26.7M tokens)" href="download.php?f=EUbookshop/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (48 aligned documents, 10.0k links, 0.5M tokens)" href="download.php?f=EUbookshop/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (3,956 aligned documents, 1.9M links, 153.6M tokens)" href="download.php?f=EUbookshop/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (2 aligned documents, 72 links, 8.3k tokens)" href="download.php?f=EUbookshop/ja-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Luxembourgish' (2 aligned documents, 0.7k tokens)" href="download.php?f=EUbookshop/lb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (1,092 aligned documents, 0.4M links, 27.5M tokens)" href="download.php?f=EUbookshop/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (1,099 aligned documents, 0.4M links, 27.4M tokens)" href="download.php?f=EUbookshop/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Macedonian' (11 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Maltese' (877 aligned documents, 0.3M links, 19.3M tokens)" href="download.php?f=EUbookshop/mt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bokmål, Norwegian' (94 aligned documents, 28.0k links, 1.9M tokens)" href="download.php?f=EUbookshop/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (3,934 aligned documents, 1.9M links, 153.3M tokens)" href="download.php?f=EUbookshop/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (5 aligned documents, 0.7k links, 16.3k tokens)" href="download.php?f=EUbookshop/nl_BE-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (1,119 aligned documents, 0.4M links, 28.7M tokens)" href="download.php?f=EUbookshop/pl-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (3,923 aligned documents, 1.8M links, 152.9M tokens)" href="download.php?f=EUbookshop/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (688 aligned documents, 0.3M links, 22.7M tokens)" href="download.php?f=EUbookshop/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (35 aligned documents, 5.9k links, 0.3M tokens)" href="download.php?f=EUbookshop/ru-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (1,101 aligned documents, 0.4M links, 28.2M tokens)" href="download.php?f=EUbookshop/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (1,089 aligned documents, 0.4M links, 26.2M tokens)" href="download.php?f=EUbookshop/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Albanian' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/sq-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Serbian' (4 aligned documents, 1.8k links, 97.0k tokens)" href="download.php?f=EUbookshop/sr-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Swahili (sample file)" href="EUbookshop/sv-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Turkish (sample file)" href="EUbookshop/sv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="EUbookshop/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="EUbookshop/sv-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sv.raw.tar.gz">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sw.tar.gz">sw</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (3 aligned documents, 8 links, 0.4k tokens)" href="download.php?f=EUbookshop/bg-sw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Czech' (3 aligned documents, 15 links, 0.5k tokens)" href="download.php?f=EUbookshop/cs-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Danish' (3 aligned documents, 11 links, 0.5k tokens)" href="download.php?f=EUbookshop/da-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-German' (3 aligned documents, 15 links, 0.5k tokens)" href="download.php?f=EUbookshop/de-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (3 aligned documents, 6 links, 0.5k tokens)" href="download.php?f=EUbookshop/el-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/en-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (3 aligned documents, 14 links, 0.5k tokens)" href="download.php?f=EUbookshop/es-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (3 aligned documents, 14 links, 0.5k tokens)" href="download.php?f=EUbookshop/et-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (3 aligned documents, 17 links, 0.5k tokens)" href="download.php?f=EUbookshop/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-French' (3 aligned documents, 16 links, 0.7k tokens)" href="download.php?f=EUbookshop/fr-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (5 links, 0.2k tokens)" href="download.php?f=EUbookshop/ga-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (2 aligned documents, 7 links, 0.3k tokens)" href="download.php?f=EUbookshop/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hungarian' (3 aligned documents, 15 links, 0.6k tokens)" href="download.php?f=EUbookshop/hu-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Italian' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/it-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Japanese' (96 tokens)" href="download.php?f=EUbookshop/ja-sw.xml.gz">ces</a></td>
<th>sw</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (3 aligned documents, 14 links, 0.5k tokens)" href="download.php?f=EUbookshop/lv-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Macedonian' (2 aligned documents, 8 links, 0.3k tokens)" href="download.php?f=EUbookshop/mk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (3 aligned documents, 14 links, 0.5k tokens)" href="download.php?f=EUbookshop/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bokmål, Norwegian' (3 aligned documents, 13 links, 0.5k tokens)" href="download.php?f=EUbookshop/nb-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Dutch' (3 aligned documents, 14 links, 0.6k tokens)" href="download.php?f=EUbookshop/nl-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Polish' (3 aligned documents, 15 links, 0.6k tokens)" href="download.php?f=EUbookshop/pl-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (3 aligned documents, 15 links, 0.5k tokens)" href="download.php?f=EUbookshop/pt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Romanian' (3 aligned documents, 14 links, 0.6k tokens)" href="download.php?f=EUbookshop/ro-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Russian' (3 aligned documents, 7 links, 0.5k tokens)" href="download.php?f=EUbookshop/ru-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (3 aligned documents, 17 links, 0.6k tokens)" href="download.php?f=EUbookshop/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (3 aligned documents, 12 links, 0.5k tokens)" href="download.php?f=EUbookshop/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Albanian' (3 aligned documents, 16 links, 0.6k tokens)" href="download.php?f=EUbookshop/sq-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Serbian' (3 aligned documents, 3 links, 0.4k tokens)" href="download.php?f=EUbookshop/sr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Swedish' (3 aligned documents, 15 links, 0.5k tokens)" href="download.php?f=EUbookshop/sv-sw.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Swahili-Turkish (sample file)" href="EUbookshop/sw-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="EUbookshop/sw-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/sw.raw.tar.gz">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/tc.tar.gz">tc</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Danish' (0.6k links, 37.2k tokens)" href="download.php?f=EUbookshop/da-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-German' (0.5k links, 34.3k tokens)" href="download.php?f=EUbookshop/de-tc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-English' (0.2k links, 22.9k tokens)" href="download.php?f=EUbookshop/en-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Spanish' (0.5k links, 40.3k tokens)" href="download.php?f=EUbookshop/es-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-French' (0.5k links, 41.5k tokens)" href="download.php?f=EUbookshop/fr-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Hungarian' (0.6k links, 36.3k tokens)" href="download.php?f=EUbookshop/hu-tc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Italian' (0.5k links, 38.7k tokens)" href="download.php?f=EUbookshop/it-tc.xml.gz">ces</a></td>
<td></td>
<th>tc</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Dutch' (0.5k links, 39.3k tokens)" href="download.php?f=EUbookshop/nl-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-po' (18.3k tokens)" href="download.php?f=EUbookshop/po-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Portuguese' (18.3k tokens)" href="download.php?f=EUbookshop/pt-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/tc.raw.tar.gz">tc</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/tr.tar.gz">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (0.6k tokens)" href="download.php?f=EUbookshop/ar-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (54 aligned documents, 14.4k links, 1.0M tokens)" href="download.php?f=EUbookshop/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (0.4k links, 68.1k tokens)" href="download.php?f=EUbookshop/bs-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (58 aligned documents, 19.5k links, 1.2M tokens)" href="download.php?f=EUbookshop/cs-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' (50 aligned documents, 13.0k links, 0.8M tokens)" href="download.php?f=EUbookshop/da-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-German' (55 aligned documents, 19.4k links, 1.2M tokens)" href="download.php?f=EUbookshop/de-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (55 aligned documents, 14.5k links, 1.3M tokens)" href="download.php?f=EUbookshop/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (67 aligned documents, 24.1k links, 1.6M tokens)" href="download.php?f=EUbookshop/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Spanish' (56 aligned documents, 20.2k links, 1.5M tokens)" href="download.php?f=EUbookshop/es-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (53 aligned documents, 15.2k links, 0.9M tokens)" href="download.php?f=EUbookshop/et-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (51 aligned documents, 17.4k links, 0.9M tokens)" href="download.php?f=EUbookshop/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-French' (61 aligned documents, 22.2k links, 1.6M tokens)" href="download.php?f=EUbookshop/fr-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Irish' (17 aligned documents, 4.8k links, 0.3M tokens)" href="download.php?f=EUbookshop/ga-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (16 aligned documents, 4.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' (52 aligned documents, 15.8k links, 0.9M tokens)" href="download.php?f=EUbookshop/hu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (17 aligned documents, 2.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Italian' (55 aligned documents, 16.4k links, 1.1M tokens)" href="download.php?f=EUbookshop/it-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (0.1k tokens)" href="download.php?f=EUbookshop/ja-tr.xml.gz">ces</a></td>
<th>tr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (51 aligned documents, 17.7k links, 1.0M tokens)" href="download.php?f=EUbookshop/lt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (55 aligned documents, 17.4k links, 1.0M tokens)" href="download.php?f=EUbookshop/lv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (11 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Maltese' (36 aligned documents, 5.8k links, 0.3M tokens)" href="download.php?f=EUbookshop/mt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bokmål, Norwegian' (30 aligned documents, 11.3k links, 0.7M tokens)" href="download.php?f=EUbookshop/nb-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Dutch' (51 aligned documents, 16.1k links, 1.0M tokens)" href="download.php?f=EUbookshop/nl-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (57 aligned documents, 19.0k links, 1.2M tokens)" href="download.php?f=EUbookshop/pl-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (54 aligned documents, 15.0k links, 1.1M tokens)" href="download.php?f=EUbookshop/pt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (55 aligned documents, 18.8k links, 1.2M tokens)" href="download.php?f=EUbookshop/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Russian' (8 aligned documents, 1.2k links, 71.8k tokens)" href="download.php?f=EUbookshop/ru-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (57 aligned documents, 18.5k links, 1.1M tokens)" href="download.php?f=EUbookshop/sk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (56 aligned documents, 18.1k links, 1.1M tokens)" href="download.php?f=EUbookshop/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (4 aligned documents, 2.0k links, 99.9k tokens)" href="download.php?f=EUbookshop/sr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swedish' (51 aligned documents, 16.7k links, 0.9M tokens)" href="download.php?f=EUbookshop/sv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swahili' (3 aligned documents, 14 links, 0.6k tokens)" href="download.php?f=EUbookshop/sw-tr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="EUbookshop/tr-zh_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=EUbookshop/tr.raw.tar.gz">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/uk.tar.gz">uk</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (8.6k tokens)" href="download.php?f=EUbookshop/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (3 aligned documents, 20.6k tokens)" href="download.php?f=EUbookshop/ca-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (4 aligned documents, 1.5k links, 71.5k tokens)" href="download.php?f=EUbookshop/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Welsh' (0.4k links, 21.1k tokens)" href="download.php?f=EUbookshop/cy-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (4 aligned documents, 1.4k links, 71.6k tokens)" href="download.php?f=EUbookshop/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (5 aligned documents, 1.7k links, 76.9k tokens)" href="download.php?f=EUbookshop/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (4 aligned documents, 0.8k links, 65.3k tokens)" href="download.php?f=EUbookshop/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (6 aligned documents, 1.8k links, 94.0k tokens)" href="download.php?f=EUbookshop/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (4 aligned documents, 1.4k links, 77.3k tokens)" href="download.php?f=EUbookshop/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (4 aligned documents, 1.5k links, 66.6k tokens)" href="download.php?f=EUbookshop/et-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (4 aligned documents, 1.6k links, 66.2k tokens)" href="download.php?f=EUbookshop/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (5 aligned documents, 1.6k links, 87.0k tokens)" href="download.php?f=EUbookshop/fr-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (0.3k links, 17.4k tokens)" href="download.php?f=EUbookshop/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (4 aligned documents, 1.5k links, 72.4k tokens)" href="download.php?f=EUbookshop/hu-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (4 aligned documents, 1.6k links, 78.2k tokens)" href="download.php?f=EUbookshop/it-uk.xml.gz">ces</a></td>
<td></td>
<th>uk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (4 aligned documents, 1.5k links, 70.1k tokens)" href="download.php?f=EUbookshop/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (4 aligned documents, 1.5k links, 70.0k tokens)" href="download.php?f=EUbookshop/lv-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.7k links, 30.6k tokens)" href="download.php?f=EUbookshop/mt-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (4 aligned documents, 1.5k links, 75.9k tokens)" href="download.php?f=EUbookshop/nl-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (4 aligned documents, 1.6k links, 72.7k tokens)" href="download.php?f=EUbookshop/pl-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (4 aligned documents, 1.5k links, 78.6k tokens)" href="download.php?f=EUbookshop/pt-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (2 aligned documents, 0.3k links, 13.8k tokens)" href="download.php?f=EUbookshop/ru-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (4 aligned documents, 1.5k links, 71.6k tokens)" href="download.php?f=EUbookshop/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (4 aligned documents, 1.4k links, 71.3k tokens)" href="download.php?f=EUbookshop/sl-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (4 aligned documents, 1.5k links, 71.0k tokens)" href="download.php?f=EUbookshop/sv-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=EUbookshop/uk.raw.tar.gz">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/zh.tar.gz">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (3 aligned documents, 0.6k tokens)" href="download.php?f=EUbookshop/ar-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (4 aligned documents, 14.4k tokens)" href="download.php?f=EUbookshop/bg-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (5 aligned documents, 21.4k tokens)" href="download.php?f=EUbookshop/cs-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (5 aligned documents, 8.4k tokens)" href="download.php?f=EUbookshop/da-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (11 aligned documents, 84.6k tokens)" href="download.php?f=EUbookshop/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (5 aligned documents, 18.4k tokens)" href="download.php?f=EUbookshop/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (18 aligned documents, 0.1M tokens)" href="download.php?f=EUbookshop/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (9 aligned documents, 40.4k tokens)" href="download.php?f=EUbookshop/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (5 aligned documents, 11.6k tokens)" href="download.php?f=EUbookshop/et-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (5 aligned documents, 6.6k tokens)" href="download.php?f=EUbookshop/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (15 aligned documents, 0.1M tokens)" href="download.php?f=EUbookshop/fr-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Irish' (2 aligned documents, 1.1k tokens)" href="download.php?f=EUbookshop/ga-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (73 tokens)" href="download.php?f=EUbookshop/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (5 aligned documents, 21.0k tokens)" href="download.php?f=EUbookshop/hu-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (6 aligned documents, 31.4k tokens)" href="download.php?f=EUbookshop/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (2 aligned documents, 2.5k tokens)" href="download.php?f=EUbookshop/ja-zh.xml.gz">ces</a></td>
<th>zh</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (5 aligned documents, 8.5k tokens)" href="download.php?f=EUbookshop/lt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (5 aligned documents, 33.6k tokens)" href="download.php?f=EUbookshop/lv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (82 tokens)" href="download.php?f=EUbookshop/mk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Maltese' (4 aligned documents, 2.6k tokens)" href="download.php?f=EUbookshop/mt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bokmål, Norwegian' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/nb-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (5 aligned documents, 21.5k tokens)" href="download.php?f=EUbookshop/nl-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (6 aligned documents, 15.2k tokens)" href="download.php?f=EUbookshop/pl-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (7 aligned documents, 25.4k tokens)" href="download.php?f=EUbookshop/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (4 aligned documents, 30.5k tokens)" href="download.php?f=EUbookshop/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (8 aligned documents, 14.2k tokens)" href="download.php?f=EUbookshop/ru-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (5 aligned documents, 23.1k tokens)" href="download.php?f=EUbookshop/sk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (5 aligned documents, 21.2k tokens)" href="download.php?f=EUbookshop/sl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/sq-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (2 aligned documents, 41 tokens)" href="download.php?f=EUbookshop/sr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (5 aligned documents, 19.4k tokens)" href="download.php?f=EUbookshop/sv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/sw-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/tr-zh.xml.gz">ces</a></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=EUbookshop/zh.raw.tar.gz">zh</a></th></tr>
<tr><th></th>
<th>ar</th>
<th>be</th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cn</th>
<th>cs</th>
<th>cy</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>fi</th>
<th>fr</th>
<th>fr_BE</th>
<th>ga</th>
<th>gd</th>
<th>hr</th>
<th>hu</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th></th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>mt</th>
<th>nb</th>
<th>nl</th>
<th>nl_BE</th>
<th>pl</th>
<th>po</th>
<th>pt</th>
<th>ro</th>
<th>ru</th>
<th>sh</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>sw</th>
<th>tc</th>
<th>tr</th>
<th>uk</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ar.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=EUbookshop/mono/EUbookshop.be.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=EUbookshop/mono/EUbookshop.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=EUbookshop/mono/EUbookshop.bs.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cn plain text' href="download.php?f=EUbookshop/mono/EUbookshop.cn.gz">cn</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=EUbookshop/mono/EUbookshop.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized cy plain text' href="download.php?f=EUbookshop/mono/EUbookshop.cy.gz">cy</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=EUbookshop/mono/EUbookshop.da.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=EUbookshop/mono/EUbookshop.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=EUbookshop/mono/EUbookshop.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=EUbookshop/mono/EUbookshop.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=EUbookshop/mono/EUbookshop.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=EUbookshop/mono/EUbookshop.et.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=EUbookshop/mono/EUbookshop.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr_BE plain text' href="download.php?f=EUbookshop/mono/EUbookshop.fr_BE.gz">fr_BE</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ga.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gd plain text' href="download.php?f=EUbookshop/mono/EUbookshop.gd.gz">gd</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.hr.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=EUbookshop/mono/EUbookshop.hu.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=EUbookshop/mono/EUbookshop.is.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=EUbookshop/mono/EUbookshop.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ja.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized lb plain text' href="download.php?f=EUbookshop/mono/EUbookshop.lb.gz">lb</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.lt.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=EUbookshop/mono/EUbookshop.lv.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.mk.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.mt.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=EUbookshop/mono/EUbookshop.nb.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl_BE plain text' href="download.php?f=EUbookshop/mono/EUbookshop.nl_BE.gz">nl_BE</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized po plain text' href="download.php?f=EUbookshop/mono/EUbookshop.po.gz">po</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=EUbookshop/mono/EUbookshop.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized sh plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sh.gz">sh</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sk.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sl.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sq.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sr.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sv.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=EUbookshop/mono/EUbookshop.sw.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tc plain text' href="download.php?f=EUbookshop/mono/EUbookshop.tc.gz">tc</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.tr.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.uk.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=EUbookshop/mono/EUbookshop.zh.gz">zh</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ar.gz">ar</a>
</th><td>30</td> <td>80.0k</td> <td>4.5k</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Bulgarian (18 sentence pairs, 0.67k words) - TMX format' href="download.php?f=EUbookshop/ar-bg.tmx.gz">18</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Czech (109 sentence pairs, 3.09k words) - TMX format' href="download.php?f=EUbookshop/ar-cs.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Danish (80 sentence pairs, 2.46k words) - TMX format' href="download.php?f=EUbookshop/ar-da.tmx.gz">80</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-German (142 sentence pairs, 4.37k words) - TMX format' href="download.php?f=EUbookshop/ar-de.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Greek (107 sentence pairs, 5.02k words) - TMX format' href="download.php?f=EUbookshop/ar-el.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Arabic-English (1,604 sentence pairs, 61.27k words) - TMX format' href="download.php?f=EUbookshop/ar-en.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Spanish (178 sentence pairs, 7.23k words) - TMX format' href="download.php?f=EUbookshop/ar-es.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Estonian (99 sentence pairs, 2.40k words) - TMX format' href="download.php?f=EUbookshop/ar-et.tmx.gz">99</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Finnish (111 sentence pairs, 2.78k words) - TMX format' href="download.php?f=EUbookshop/ar-fi.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Arabic-French (1,210 sentence pairs, 55.40k words) - TMX format' href="download.php?f=EUbookshop/ar-fr.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Irish (15 sentence pairs, 0.51k words) - TMX format' href="download.php?f=EUbookshop/ar-ga.tmx.gz">15</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Hungarian (106 sentence pairs, 3.13k words) - TMX format' href="download.php?f=EUbookshop/ar-hu.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Italian (159 sentence pairs, 5.51k words) - TMX format' href="download.php?f=EUbookshop/ar-it.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Lithuanian (107 sentence pairs, 2.96k words) - TMX format' href="download.php?f=EUbookshop/ar-lt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Latvian (112 sentence pairs, 3.13k words) - TMX format' href="download.php?f=EUbookshop/ar-lv.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Maltese (193 sentence pairs, 5.81k words) - TMX format' href="download.php?f=EUbookshop/ar-mt.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Dutch (96 sentence pairs, 3.26k words) - TMX format' href="download.php?f=EUbookshop/ar-nl.tmx.gz">96</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Polish (103 sentence pairs, 2.92k words) - TMX format' href="download.php?f=EUbookshop/ar-pl.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Portuguese (102 sentence pairs, 3.62k words) - TMX format' href="download.php?f=EUbookshop/ar-pt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Romanian (100 sentence pairs, 3.36k words) - TMX format' href="download.php?f=EUbookshop/ar-ro.tmx.gz">100</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Arabic-Russian (1,020 sentence pairs, 38.83k words) - TMX format' href="download.php?f=EUbookshop/ar-ru.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Slovak (87 sentence pairs, 2.54k words) - TMX format' href="download.php?f=EUbookshop/ar-sk.tmx.gz">87</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Slovenian (145 sentence pairs, 4.77k words) - TMX format' href="download.php?f=EUbookshop/ar-sl.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Swedish (90 sentence pairs, 2.56k words) - TMX format' href="download.php?f=EUbookshop/ar-sv.tmx.gz">90</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.be.gz">be</a>
</th><td>1</td> <td>0.1k</td> <td>13</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-English (5 sentence pairs, 0.12k words) - TMX format' href="download.php?f=EUbookshop/be-en.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.bg.gz">bg</a>
</th><td>751</td> <td>10.1M</td> <td>0.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Arabic (18 sentence pairs, 0.67k words) - Moses format' href="download.php?f=EUbookshop/ar-bg.txt.zip">18</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Bosnian (343 sentence pairs, 19.20k words) - TMX format' href="download.php?f=EUbookshop/bg-bs.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bulgarian-Catalan (1,166 sentence pairs, 48.00k words) - TMX format' href="download.php?f=EUbookshop/bg-ca.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bulgarian-Czech (180,023 sentence pairs, 8.14M words) - TMX format' href="download.php?f=EUbookshop/bg-cs.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bulgarian-Danish (162,839 sentence pairs, 8.20M words) - TMX format' href="download.php?f=EUbookshop/bg-da.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-German (172,749 sentence pairs, 8.02M words) - TMX format' href="download.php?f=EUbookshop/bg-de.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Greek (194,877 sentence pairs, 10.55M words) - TMX format' href="download.php?f=EUbookshop/bg-el.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-English (187,943 sentence pairs, 9.50M words) - TMX format' href="download.php?f=EUbookshop/bg-en.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Spanish (187,518 sentence pairs, 10.29M words) - TMX format' href="download.php?f=EUbookshop/bg-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Estonian (178,459 sentence pairs, 7.77M words) - TMX format' href="download.php?f=EUbookshop/bg-et.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Finnish (176,464 sentence pairs, 7.42M words) - TMX format' href="download.php?f=EUbookshop/bg-fi.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-French (168,604 sentence pairs, 8.47M words) - TMX format' href="download.php?f=EUbookshop/bg-fr.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Bulgarian-Irish (38,411 sentence pairs, 1.79M words) - TMX format' href="download.php?f=EUbookshop/bg-ga.tmx.gz">38.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Gaelic (48 sentence pairs, 1.64k words) - TMX format' href="download.php?f=EUbookshop/bg-gd.tmx.gz">48</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Bulgarian-Croatian (2,681 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/bg-hr.tmx.gz">2.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Hungarian (177,819 sentence pairs, 7.99M words) - TMX format' href="download.php?f=EUbookshop/bg-hu.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Bulgarian-Icelandic (5,220 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/bg-is.tmx.gz">5.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Italian (179,400 sentence pairs, 8.92M words) - TMX format' href="download.php?f=EUbookshop/bg-it.tmx.gz">0.2M</a>
</td><td></td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bulgarian-Lithuanian (186,634 sentence pairs, 8.21M words) - TMX format' href="download.php?f=EUbookshop/bg-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Latvian (186,362 sentence pairs, 8.51M words) - TMX format' href="download.php?f=EUbookshop/bg-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Bulgarian-Macedonian (2,520 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/bg-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Maltese (120,994 sentence pairs, 4.94M words) - TMX format' href="download.php?f=EUbookshop/bg-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bulgarian-Bokmål, Norwegian (14,451 sentence pairs, 0.64M words) - TMX format' href="download.php?f=EUbookshop/bg-nb.tmx.gz">14.5k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bulgarian-Dutch (188,217 sentence pairs, 9.76M words) - TMX format' href="download.php?f=EUbookshop/bg-nl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Polish (198,390 sentence pairs, 9.43M words) - TMX format' href="download.php?f=EUbookshop/bg-pl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bulgarian-Portuguese (181,306 sentence pairs, 9.56M words) - TMX format' href="download.php?f=EUbookshop/bg-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Romanian (201,883 sentence pairs, 10.27M words) - TMX format' href="download.php?f=EUbookshop/bg-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bulgarian-Russian (824 sentence pairs, 26.30k words) - TMX format' href="download.php?f=EUbookshop/bg-ru.tmx.gz">0.8k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Slovak (178,271 sentence pairs, 8.43M words) - TMX format' href="download.php?f=EUbookshop/bg-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bulgarian-Slovenian (157,256 sentence pairs, 7.18M words) - TMX format' href="download.php?f=EUbookshop/bg-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Bulgarian-Albanian (1,471 sentence pairs, 65.91k words) - TMX format' href="download.php?f=EUbookshop/bg-sq.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Bulgarian-Serbian (1,465 sentence pairs, 61.91k words) - TMX format' href="download.php?f=EUbookshop/bg-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Swedish (176,433 sentence pairs, 8.63M words) - TMX format' href="download.php?f=EUbookshop/bg-sv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Swahili (8 sentence pairs, 0.24k words) - TMX format' href="download.php?f=EUbookshop/bg-sw.tmx.gz">8</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bulgarian-Turkish (13,494 sentence pairs, 0.55M words) - TMX format' href="download.php?f=EUbookshop/bg-tr.tmx.gz">13.5k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.bs.gz">bs</a>
</th><td>5</td> <td>27.7k</td> <td>0.9k</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Bulgarian (343 sentence pairs, 19.20k words) - Moses format' href="download.php?f=EUbookshop/bg-bs.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Czech (376 sentence pairs, 20.32k words) - TMX format' href="download.php?f=EUbookshop/bs-cs.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-German (357 sentence pairs, 18.96k words) - TMX format' href="download.php?f=EUbookshop/bs-de.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Greek (367 sentence pairs, 20.69k words) - TMX format' href="download.php?f=EUbookshop/bs-el.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-English (557 sentence pairs, 31.17k words) - TMX format' href="download.php?f=EUbookshop/bs-en.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Spanish (374 sentence pairs, 23.66k words) - TMX format' href="download.php?f=EUbookshop/bs-es.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Estonian (367 sentence pairs, 17.32k words) - TMX format' href="download.php?f=EUbookshop/bs-et.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Finnish (400 sentence pairs, 19.46k words) - TMX format' href="download.php?f=EUbookshop/bs-fi.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-French (341 sentence pairs, 19.29k words) - TMX format' href="download.php?f=EUbookshop/bs-fr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Croatian (626 sentence pairs, 34.73k words) - TMX format' href="download.php?f=EUbookshop/bs-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Hungarian (32 sentence pairs, 1.92k words) - TMX format' href="download.php?f=EUbookshop/bs-hu.tmx.gz">32</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Italian (29 sentence pairs, 1.99k words) - TMX format' href="download.php?f=EUbookshop/bs-it.tmx.gz">29</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Lithuanian (331 sentence pairs, 17.31k words) - TMX format' href="download.php?f=EUbookshop/bs-lt.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Latvian (361 sentence pairs, 19.09k words) - TMX format' href="download.php?f=EUbookshop/bs-lv.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Macedonian (434 sentence pairs, 24.69k words) - TMX format' href="download.php?f=EUbookshop/bs-mk.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Bokmål, Norwegian (321 sentence pairs, 18.09k words) - TMX format' href="download.php?f=EUbookshop/bs-nb.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Dutch (378 sentence pairs, 21.23k words) - TMX format' href="download.php?f=EUbookshop/bs-nl.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Polish (379 sentence pairs, 20.50k words) - TMX format' href="download.php?f=EUbookshop/bs-pl.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Romanian (377 sentence pairs, 22.20k words) - TMX format' href="download.php?f=EUbookshop/bs-ro.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-sh (281 sentence pairs, 15.68k words) - TMX format' href="download.php?f=EUbookshop/bs-sh.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Slovak (360 sentence pairs, 18.79k words) - TMX format' href="download.php?f=EUbookshop/bs-sk.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Slovenian (403 sentence pairs, 21.36k words) - TMX format' href="download.php?f=EUbookshop/bs-sl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Bosnian-Albanian (720 sentence pairs, 45.15k words) - TMX format' href="download.php?f=EUbookshop/bs-sq.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Serbian (572 sentence pairs, 33.65k words) - TMX format' href="download.php?f=EUbookshop/bs-sr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Swedish (377 sentence pairs, 20.01k words) - TMX format' href="download.php?f=EUbookshop/bs-sv.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Turkish (406 sentence pairs, 20.71k words) - TMX format' href="download.php?f=EUbookshop/bs-tr.tmx.gz">0.4k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ca.gz">ca</a>
</th><td>37</td> <td>0.1M</td> <td>6.1k</td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Bulgarian (1,175 sentence pairs, 48.08k words) - Moses format' href="download.php?f=EUbookshop/bg-ca.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Czech (1,729 sentence pairs, 70.07k words) - TMX format' href="download.php?f=EUbookshop/ca-cs.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Catalan-Danish (2,415 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/ca-da.tmx.gz">2.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-German (2,249 sentence pairs, 88.71k words) - TMX format' href="download.php?f=EUbookshop/ca-de.tmx.gz">2.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Catalan-Greek (2,467 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/ca-el.tmx.gz">2.5k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Catalan-English (3,746 sentence pairs, 0.16M words) - TMX format' href="download.php?f=EUbookshop/ca-en.tmx.gz">3.7k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Spanish (3,012 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/ca-es.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Catalan-Estonian (1,788 sentence pairs, 64.89k words) - TMX format' href="download.php?f=EUbookshop/ca-et.tmx.gz">1.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-Finnish (2,529 sentence pairs, 89.62k words) - TMX format' href="download.php?f=EUbookshop/ca-fi.tmx.gz">2.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-French (3,052 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-fr.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Irish (122 sentence pairs, 4.61k words) - TMX format' href="download.php?f=EUbookshop/ca-ga.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Gaelic (64 sentence pairs, 2.11k words) - TMX format' href="download.php?f=EUbookshop/ca-gd.tmx.gz">64</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Croatian (639 sentence pairs, 26.06k words) - TMX format' href="download.php?f=EUbookshop/ca-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Hungarian (1,125 sentence pairs, 45.27k words) - TMX format' href="download.php?f=EUbookshop/ca-hu.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Catalan-Italian (2,933 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-it.tmx.gz">2.9k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Lithuanian (1,943 sentence pairs, 73.31k words) - TMX format' href="download.php?f=EUbookshop/ca-lt.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Catalan-Latvian (1,775 sentence pairs, 68.02k words) - TMX format' href="download.php?f=EUbookshop/ca-lv.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Catalan-Maltese (1,488 sentence pairs, 60.58k words) - TMX format' href="download.php?f=EUbookshop/ca-mt.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Dutch (3,127 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-nl.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Polish (1,821 sentence pairs, 74.39k words) - TMX format' href="download.php?f=EUbookshop/ca-pl.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Catalan-Portuguese (2,810 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-pt.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Catalan-Romanian (769 sentence pairs, 32.27k words) - TMX format' href="download.php?f=EUbookshop/ca-ro.tmx.gz">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Catalan-Slovak (1,960 sentence pairs, 77.76k words) - TMX format' href="download.php?f=EUbookshop/ca-sk.tmx.gz">2.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Catalan-Slovenian (1,892 sentence pairs, 77.60k words) - TMX format' href="download.php?f=EUbookshop/ca-sl.tmx.gz">1.9k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Swedish (1,791 sentence pairs, 71.77k words) - TMX format' href="download.php?f=EUbookshop/ca-sv.tmx.gz">1.8k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cn plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.cn.gz">cn</a>
</th><td>1</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.cs.gz">cs</a>
</th><td>1,194</td> <td>16.3M</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Arabic (109 sentence pairs, 3.09k words) - Moses format' href="download.php?f=EUbookshop/ar-cs.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Czech-Bulgarian (211,812 sentence pairs, 8.80M words) - Moses format' href="download.php?f=EUbookshop/bg-cs.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Bosnian (391 sentence pairs, 20.45k words) - Moses format' href="download.php?f=EUbookshop/bs-cs.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Czech-Catalan (1,757 sentence pairs, 70.26k words) - Moses format' href="download.php?f=EUbookshop/ca-cs.txt.zip">1.8k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Welsh (560 sentence pairs, 15.16k words) - TMX format' href="download.php?f=EUbookshop/cs-cy.tmx.gz">0.6k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Czech-Danish (321,390 sentence pairs, 14.52M words) - TMX format' href="download.php?f=EUbookshop/cs-da.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Czech-German (348,116 sentence pairs, 14.64M words) - TMX format' href="download.php?f=EUbookshop/cs-de.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Czech-Greek (326,146 sentence pairs, 15.81M words) - TMX format' href="download.php?f=EUbookshop/cs-el.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-English (384,665 sentence pairs, 16.93M words) - TMX format' href="download.php?f=EUbookshop/cs-en.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Czech-Spanish (359,726 sentence pairs, 17.65M words) - TMX format' href="download.php?f=EUbookshop/cs-es.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Estonian (349,355 sentence pairs, 13.39M words) - TMX format' href="download.php?f=EUbookshop/cs-et.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Finnish (349,089 sentence pairs, 12.82M words) - TMX format' href="download.php?f=EUbookshop/cs-fi.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-French (337,241 sentence pairs, 15.19M words) - TMX format' href="download.php?f=EUbookshop/cs-fr.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Czech-Irish (52,664 sentence pairs, 2.30M words) - TMX format' href="download.php?f=EUbookshop/cs-ga.tmx.gz">52.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Gaelic (21 sentence pairs, 0.69k words) - TMX format' href="download.php?f=EUbookshop/cs-gd.tmx.gz">21</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Czech-Croatian (3,700 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/cs-hr.tmx.gz">3.7k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Hungarian (352,314 sentence pairs, 14.00M words) - TMX format' href="download.php?f=EUbookshop/cs-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Czech-Icelandic (6,828 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/cs-is.tmx.gz">6.8k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Czech-Italian (388,873 sentence pairs, 17.54M words) - TMX format' href="download.php?f=EUbookshop/cs-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Japanese (45 sentence pairs, 1.52k words) - TMX format' href="download.php?f=EUbookshop/cs-ja.tmx.gz">45</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Lithuanian (370,438 sentence pairs, 14.32M words) - TMX format' href="download.php?f=EUbookshop/cs-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Latvian (366,214 sentence pairs, 14.50M words) - TMX format' href="download.php?f=EUbookshop/cs-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Czech-Macedonian (2,683 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/cs-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Czech-Maltese (240,910 sentence pairs, 9.24M words) - TMX format' href="download.php?f=EUbookshop/cs-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Czech-Bokmål, Norwegian (19,222 sentence pairs, 0.78M words) - TMX format' href="download.php?f=EUbookshop/cs-nb.tmx.gz">19.2k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-Dutch (352,509 sentence pairs, 16.14M words) - TMX format' href="download.php?f=EUbookshop/cs-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Polish (373,138 sentence pairs, 15.56M words) - TMX format' href="download.php?f=EUbookshop/cs-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-Portuguese (352,641 sentence pairs, 16.57M words) - TMX format' href="download.php?f=EUbookshop/cs-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Romanian (268,878 sentence pairs, 12.37M words) - TMX format' href="download.php?f=EUbookshop/cs-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Czech-Russian (1,818 sentence pairs, 83.11k words) - TMX format' href="download.php?f=EUbookshop/cs-ru.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Czech-Slovak (378,079 sentence pairs, 15.76M words) - TMX format' href="download.php?f=EUbookshop/cs-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Slovenian (338,363 sentence pairs, 14.18M words) - TMX format' href="download.php?f=EUbookshop/cs-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Czech-Albanian (1,640 sentence pairs, 64.70k words) - TMX format' href="download.php?f=EUbookshop/cs-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Czech-Serbian (1,485 sentence pairs, 57.52k words) - TMX format' href="download.php?f=EUbookshop/cs-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Swedish (341,730 sentence pairs, 14.70M words) - TMX format' href="download.php?f=EUbookshop/cs-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Swahili (14 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/cs-sw.tmx.gz">14</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Czech-Turkish (17,943 sentence pairs, 0.66M words) - TMX format' href="download.php?f=EUbookshop/cs-tr.tmx.gz">17.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Czech-Ukrainian (1,448 sentence pairs, 42.51k words) - TMX format' href="download.php?f=EUbookshop/cs-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cy plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.cy.gz">cy</a>
</th><td>12</td> <td>90.5k</td> <td>4.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Czech (573 sentence pairs, 15.24k words) - Moses format' href="download.php?f=EUbookshop/cs-cy.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Danish (467 sentence pairs, 14.77k words) - TMX format' href="download.php?f=EUbookshop/cy-da.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-German (565 sentence pairs, 15.87k words) - TMX format' href="download.php?f=EUbookshop/cy-de.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Greek (476 sentence pairs, 14.50k words) - TMX format' href="download.php?f=EUbookshop/cy-el.tmx.gz">0.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Welsh-English (2,867 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/cy-en.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Spanish (495 sentence pairs, 15.88k words) - TMX format' href="download.php?f=EUbookshop/cy-es.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Estonian (532 sentence pairs, 13.47k words) - TMX format' href="download.php?f=EUbookshop/cy-et.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Finnish (556 sentence pairs, 13.94k words) - TMX format' href="download.php?f=EUbookshop/cy-fi.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-French (572 sentence pairs, 17.43k words) - TMX format' href="download.php?f=EUbookshop/cy-fr.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Irish (396 sentence pairs, 11.00k words) - TMX format' href="download.php?f=EUbookshop/cy-ga.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Croatian (524 sentence pairs, 14.86k words) - TMX format' href="download.php?f=EUbookshop/cy-hr.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Hungarian (529 sentence pairs, 13.98k words) - TMX format' href="download.php?f=EUbookshop/cy-hu.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Italian (556 sentence pairs, 16.04k words) - TMX format' href="download.php?f=EUbookshop/cy-it.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Lithuanian (590 sentence pairs, 14.68k words) - TMX format' href="download.php?f=EUbookshop/cy-lt.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Latvian (549 sentence pairs, 14.44k words) - TMX format' href="download.php?f=EUbookshop/cy-lv.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Dutch (547 sentence pairs, 16.15k words) - TMX format' href="download.php?f=EUbookshop/cy-nl.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Polish (547 sentence pairs, 14.79k words) - TMX format' href="download.php?f=EUbookshop/cy-pl.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Portuguese (519 sentence pairs, 15.86k words) - TMX format' href="download.php?f=EUbookshop/cy-pt.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Slovak (557 sentence pairs, 15.34k words) - TMX format' href="download.php?f=EUbookshop/cy-sk.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Slovenian (521 sentence pairs, 14.72k words) - TMX format' href="download.php?f=EUbookshop/cy-sl.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Swedish (553 sentence pairs, 15.52k words) - TMX format' href="download.php?f=EUbookshop/cy-sv.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Ukrainian (357 sentence pairs, 10.53k words) - TMX format' href="download.php?f=EUbookshop/cy-uk.tmx.gz">0.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.da.gz">da</a>
</th><td>7,081</td> <td>208.2M</td> <td>8.7M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Arabic (80 sentence pairs, 2.46k words) - Moses format' href="download.php?f=EUbookshop/ar-da.txt.zip">80</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Danish-Bulgarian (183,536 sentence pairs, 8.79M words) - Moses format' href="download.php?f=EUbookshop/bg-da.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Danish-Catalan (2,556 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/ca-da.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Czech (363,088 sentence pairs, 15.46M words) - Moses format' href="download.php?f=EUbookshop/cs-da.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Danish-Welsh (474 sentence pairs, 14.80k words) - Moses format' href="download.php?f=EUbookshop/cy-da.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-German (4,429,322 sentence pairs, 205.73M words) - TMX format' href="download.php?f=EUbookshop/da-de.tmx.gz">4.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Greek (3,329,491 sentence pairs, 159.34M words) - TMX format' href="download.php?f=EUbookshop/da-el.tmx.gz">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-English (4,526,068 sentence pairs, 219.82M words) - TMX format' href="download.php?f=EUbookshop/da-en.tmx.gz">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Spanish (3,586,724 sentence pairs, 192.51M words) - TMX format' href="download.php?f=EUbookshop/da-es.tmx.gz">3.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Estonian (318,557 sentence pairs, 13.57M words) - TMX format' href="download.php?f=EUbookshop/da-et.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Finnish (1,631,457 sentence pairs, 65.85M words) - TMX format' href="download.php?f=EUbookshop/da-fi.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-French (4,072,276 sentence pairs, 209.09M words) - TMX format' href="download.php?f=EUbookshop/da-fr.tmx.gz">4.1M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Danish-Irish (69,460 sentence pairs, 3.45M words) - TMX format' href="download.php?f=EUbookshop/da-ga.tmx.gz">69.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Gaelic (20 sentence pairs, 0.61k words) - TMX format' href="download.php?f=EUbookshop/da-gd.tmx.gz">20</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Danish-Croatian (2,731 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/da-hr.tmx.gz">2.7k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Hungarian (312,831 sentence pairs, 13.88M words) - TMX format' href="download.php?f=EUbookshop/da-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Danish-Icelandic (8,194 sentence pairs, 0.31M words) - TMX format' href="download.php?f=EUbookshop/da-is.tmx.gz">8.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Italian (4,425,332 sentence pairs, 219.86M words) - TMX format' href="download.php?f=EUbookshop/da-it.tmx.gz">4.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Japanese (76 sentence pairs, 2.40k words) - TMX format' href="download.php?f=EUbookshop/da-ja.tmx.gz">76</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Lithuanian (324,318 sentence pairs, 13.91M words) - TMX format' href="download.php?f=EUbookshop/da-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Latvian (322,690 sentence pairs, 14.19M words) - TMX format' href="download.php?f=EUbookshop/da-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Danish-Macedonian (1,064 sentence pairs, 43.44k words) - TMX format' href="download.php?f=EUbookshop/da-mk.tmx.gz">1.1k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Danish-Maltese (216,499 sentence pairs, 9.11M words) - TMX format' href="download.php?f=EUbookshop/da-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Danish-Bokmål, Norwegian (23,343 sentence pairs, 1.02M words) - TMX format' href="download.php?f=EUbookshop/da-nb.tmx.gz">23.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Dutch (4,658,736 sentence pairs, 233.89M words) - TMX format' href="download.php?f=EUbookshop/da-nl.tmx.gz">4.7M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Polish (328,330 sentence pairs, 15.33M words) - TMX format' href="download.php?f=EUbookshop/da-pl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Portuguese (3,290,934 sentence pairs, 169.89M words) - TMX format' href="download.php?f=EUbookshop/da-pt.tmx.gz">3.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Danish-Romanian (234,459 sentence pairs, 12.13M words) - TMX format' href="download.php?f=EUbookshop/da-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Danish-Russian (5,085 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/da-ru.tmx.gz">5.1k</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Danish-Slovak (319,272 sentence pairs, 14.64M words) - TMX format' href="download.php?f=EUbookshop/da-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Slovenian (292,972 sentence pairs, 13.51M words) - TMX format' href="download.php?f=EUbookshop/da-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Albanian (13 sentence pairs, 0.38k words) - TMX format' href="download.php?f=EUbookshop/da-sq.tmx.gz">13</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Serbian (4 sentence pairs, 0.12k words) - TMX format' href="download.php?f=EUbookshop/da-sr.tmx.gz">4</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Danish-Swedish (1,618,335 sentence pairs, 74.86M words) - TMX format' href="download.php?f=EUbookshop/da-sv.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Swahili (10 sentence pairs, 0.27k words) - TMX format' href="download.php?f=EUbookshop/da-sw.tmx.gz">10</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Danish-tc (557 sentence pairs, 22.23k words) - TMX format' href="download.php?f=EUbookshop/da-tc.tmx.gz">0.6k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Danish-Turkish (12,354 sentence pairs, 0.51M words) - TMX format' href="download.php?f=EUbookshop/da-tr.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Danish-Ukrainian (1,373 sentence pairs, 41.93k words) - TMX format' href="download.php?f=EUbookshop/da-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.de.gz">de</a>
</th><td>15,585</td> <td>346.4M</td> <td>18.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Arabic (142 sentence pairs, 4.37k words) - Moses format' href="download.php?f=EUbookshop/ar-de.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Bulgarian (194,798 sentence pairs, 8.54M words) - Moses format' href="download.php?f=EUbookshop/bg-de.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Bosnian (365 sentence pairs, 19.03k words) - Moses format' href="download.php?f=EUbookshop/bs-de.txt.zip">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='German-Catalan (2,562 sentence pairs, 98.87k words) - Moses format' href="download.php?f=EUbookshop/ca-de.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Czech (396,737 sentence pairs, 15.56M words) - Moses format' href="download.php?f=EUbookshop/cs-de.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Welsh (578 sentence pairs, 15.93k words) - Moses format' href="download.php?f=EUbookshop/cy-de.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Danish (4,798,796 sentence pairs, 210.82M words) - Moses format' href="download.php?f=EUbookshop/da-de.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Greek (3,685,674 sentence pairs, 165.76M words) - TMX format' href="download.php?f=EUbookshop/de-el.tmx.gz">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-English (8,312,724 sentence pairs, 358.00M words) - TMX format' href="download.php?f=EUbookshop/de-en.tmx.gz">8.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Spanish (4,458,732 sentence pairs, 223.36M words) - TMX format' href="download.php?f=EUbookshop/de-es.tmx.gz">4.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Estonian (324,301 sentence pairs, 12.67M words) - TMX format' href="download.php?f=EUbookshop/de-et.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-Finnish (1,701,969 sentence pairs, 64.12M words) - TMX format' href="download.php?f=EUbookshop/de-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-French (7,699,861 sentence pairs, 356.91M words) - TMX format' href="download.php?f=EUbookshop/de-fr.tmx.gz">7.7M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='German-Irish (80,432 sentence pairs, 3.69M words) - TMX format' href="download.php?f=EUbookshop/de-ga.tmx.gz">80.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Gaelic (69 sentence pairs, 2.08k words) - TMX format' href="download.php?f=EUbookshop/de-gd.tmx.gz">69</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='German-Croatian (3,051 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/de-hr.tmx.gz">3.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Hungarian (340,858 sentence pairs, 14.46M words) - TMX format' href="download.php?f=EUbookshop/de-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='German-Icelandic (8,621 sentence pairs, 0.32M words) - TMX format' href="download.php?f=EUbookshop/de-is.tmx.gz">8.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Italian (5,396,034 sentence pairs, 250.70M words) - TMX format' href="download.php?f=EUbookshop/de-it.tmx.gz">5.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Japanese (96 sentence pairs, 3.41k words) - TMX format' href="download.php?f=EUbookshop/de-ja.tmx.gz">96</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Lithuanian (328,046 sentence pairs, 13.31M words) - TMX format' href="download.php?f=EUbookshop/de-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Latvian (332,890 sentence pairs, 13.43M words) - TMX format' href="download.php?f=EUbookshop/de-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='German-Macedonian (2,788 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/de-mk.tmx.gz">2.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='German-Maltese (227,521 sentence pairs, 9.16M words) - TMX format' href="download.php?f=EUbookshop/de-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='German-Bokmål, Norwegian (25,563 sentence pairs, 1.08M words) - TMX format' href="download.php?f=EUbookshop/de-nb.tmx.gz">25.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Dutch (5,191,363 sentence pairs, 245.45M words) - TMX format' href="download.php?f=EUbookshop/de-nl.tmx.gz">5.2M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='German-Polish (412,790 sentence pairs, 17.64M words) - TMX format' href="download.php?f=EUbookshop/de-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Portuguese (3,526,838 sentence pairs, 171.92M words) - TMX format' href="download.php?f=EUbookshop/de-pt.tmx.gz">3.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='German-Romanian (246,152 sentence pairs, 11.84M words) - TMX format' href="download.php?f=EUbookshop/de-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='German-Russian (8,303 sentence pairs, 0.31M words) - TMX format' href="download.php?f=EUbookshop/de-ru.tmx.gz">8.3k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Slovak (332,760 sentence pairs, 14.13M words) - TMX format' href="download.php?f=EUbookshop/de-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='German-Slovenian (306,396 sentence pairs, 13.25M words) - TMX format' href="download.php?f=EUbookshop/de-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='German-Albanian (1,624 sentence pairs, 65.97k words) - TMX format' href="download.php?f=EUbookshop/de-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='German-Serbian (1,364 sentence pairs, 53.47k words) - TMX format' href="download.php?f=EUbookshop/de-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='German-Swedish (1,642,086 sentence pairs, 71.66M words) - TMX format' href="download.php?f=EUbookshop/de-sv.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Swahili (13 sentence pairs, 0.32k words) - TMX format' href="download.php?f=EUbookshop/de-sw.tmx.gz">13</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-tc (508 sentence pairs, 17.60k words) - TMX format' href="download.php?f=EUbookshop/de-tc.tmx.gz">0.5k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-Turkish (18,003 sentence pairs, 0.73M words) - TMX format' href="download.php?f=EUbookshop/de-tr.tmx.gz">18.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='German-Ukrainian (1,585 sentence pairs, 48.95k words) - TMX format' href="download.php?f=EUbookshop/de-uk.tmx.gz">1.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.el.gz">el</a>
</th><td>6,486</td> <td>213.2M</td> <td>10.0M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Arabic (108 sentence pairs, 5.03k words) - Moses format' href="download.php?f=EUbookshop/ar-el.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Greek-Bulgarian (220,798 sentence pairs, 10.97M words) - Moses format' href="download.php?f=EUbookshop/bg-el.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Bosnian (380 sentence pairs, 20.80k words) - Moses format' href="download.php?f=EUbookshop/bs-el.txt.zip">0.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Greek-Catalan (2,772 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/ca-el.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Greek-Czech (373,479 sentence pairs, 16.51M words) - Moses format' href="download.php?f=EUbookshop/cs-el.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Welsh (480 sentence pairs, 14.51k words) - Moses format' href="download.php?f=EUbookshop/cy-el.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Danish (3,593,990 sentence pairs, 163.07M words) - Moses format' href="download.php?f=EUbookshop/da-el.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-German (4,022,798 sentence pairs, 169.78M words) - Moses format' href="download.php?f=EUbookshop/de-el.txt.zip">4.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (3,618,897 sentence pairs, 164.64M words) - TMX format' href="download.php?f=EUbookshop/el-en.tmx.gz">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (3,479,749 sentence pairs, 182.41M words) - TMX format' href="download.php?f=EUbookshop/el-es.tmx.gz">3.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Estonian (291,034 sentence pairs, 13.72M words) - TMX format' href="download.php?f=EUbookshop/el-et.tmx.gz">0.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Greek-Finnish (1,513,572 sentence pairs, 60.25M words) - TMX format' href="download.php?f=EUbookshop/el-fi.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (3,722,930 sentence pairs, 184.66M words) - TMX format' href="download.php?f=EUbookshop/el-fr.tmx.gz">3.7M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Greek-Irish (90,669 sentence pairs, 5.05M words) - TMX format' href="download.php?f=EUbookshop/el-ga.tmx.gz">90.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Gaelic (38 sentence pairs, 0.95k words) - TMX format' href="download.php?f=EUbookshop/el-gd.tmx.gz">38</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Greek-Croatian (3,443 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/el-hr.tmx.gz">3.4k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Hungarian (324,606 sentence pairs, 15.40M words) - TMX format' href="download.php?f=EUbookshop/el-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Greek-Icelandic (7,927 sentence pairs, 0.30M words) - TMX format' href="download.php?f=EUbookshop/el-is.tmx.gz">7.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Italian (3,696,044 sentence pairs, 176.10M words) - TMX format' href="download.php?f=EUbookshop/el-it.tmx.gz">3.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Japanese (2 sentence pairs, 47 words) - TMX format' href="download.php?f=EUbookshop/el-ja.tmx.gz">2</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Greek-Lithuanian (314,998 sentence pairs, 14.59M words) - TMX format' href="download.php?f=EUbookshop/el-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Latvian (311,006 sentence pairs, 14.77M words) - TMX format' href="download.php?f=EUbookshop/el-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Greek-Macedonian (2,817 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/el-mk.tmx.gz">2.8k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Greek-Maltese (238,499 sentence pairs, 11.35M words) - TMX format' href="download.php?f=EUbookshop/el-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Greek-Bokmål, Norwegian (19,355 sentence pairs, 0.93M words) - TMX format' href="download.php?f=EUbookshop/el-nb.tmx.gz">19.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Dutch (3,742,596 sentence pairs, 179.85M words) - TMX format' href="download.php?f=EUbookshop/el-nl.tmx.gz">3.7M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Greek-Polish (338,468 sentence pairs, 16.81M words) - TMX format' href="download.php?f=EUbookshop/el-pl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (3,200,056 sentence pairs, 160.94M words) - TMX format' href="download.php?f=EUbookshop/el-pt.tmx.gz">3.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Greek-Romanian (235,522 sentence pairs, 12.48M words) - TMX format' href="download.php?f=EUbookshop/el-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Greek-Russian (6,386 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/el-ru.tmx.gz">6.4k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Slovak (303,008 sentence pairs, 14.94M words) - TMX format' href="download.php?f=EUbookshop/el-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Slovenian (274,856 sentence pairs, 13.84M words) - TMX format' href="download.php?f=EUbookshop/el-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Greek-Albanian (1,631 sentence pairs, 69.96k words) - TMX format' href="download.php?f=EUbookshop/el-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Greek-Serbian (1,594 sentence pairs, 66.00k words) - TMX format' href="download.php?f=EUbookshop/el-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Swedish (1,410,263 sentence pairs, 65.02M words) - TMX format' href="download.php?f=EUbookshop/el-sv.tmx.gz">1.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Swahili (6 sentence pairs, 0.21k words) - TMX format' href="download.php?f=EUbookshop/el-sw.tmx.gz">6</a>
</td><td></td><td bgcolor="#fffaf0"><a rel="nofollow" title='Greek-Turkish (13,119 sentence pairs, 0.63M words) - TMX format' href="download.php?f=EUbookshop/el-tr.tmx.gz">13.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Greek-Ukrainian (736 sentence pairs, 28.55k words) - TMX format' href="download.php?f=EUbookshop/el-uk.tmx.gz">0.7k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.en.gz">en</a>
</th><td>37,663</td> <td>1.2G</td> <td>66.4M</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='English-Arabic (1,721 sentence pairs, 62.31k words) - Moses format' href="download.php?f=EUbookshop/ar-en.txt.zip">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Belarusian (5 sentence pairs, 0.12k words) - Moses format' href="download.php?f=EUbookshop/be-en.txt.zip">5</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Bulgarian (221,229 sentence pairs, 10.27M words) - Moses format' href="download.php?f=EUbookshop/bg-en.txt.zip">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Bosnian (558 sentence pairs, 31.18k words) - Moses format' href="download.php?f=EUbookshop/bs-en.txt.zip">0.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='English-Catalan (4,205 sentence pairs, 0.17M words) - Moses format' href="download.php?f=EUbookshop/ca-en.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Czech (455,472 sentence pairs, 18.23M words) - Moses format' href="download.php?f=EUbookshop/cs-en.txt.zip">0.5M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='English-Welsh (3,079 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/cy-en.txt.zip">3.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Danish (4,980,755 sentence pairs, 227.18M words) - Moses format' href="download.php?f=EUbookshop/da-en.txt.zip">5.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (9,333,066 sentence pairs, 372.18M words) - Moses format' href="download.php?f=EUbookshop/de-en.txt.zip">9.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (4,022,952 sentence pairs, 169.58M words) - Moses format' href="download.php?f=EUbookshop/el-en.txt.zip">4.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (4,793,394 sentence pairs, 250.08M words) - TMX format' href="download.php?f=EUbookshop/en-es.tmx.gz">4.8M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='English-Estonian (368,619 sentence pairs, 15.79M words) - TMX format' href="download.php?f=EUbookshop/en-et.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Finnish (1,840,588 sentence pairs, 73.23M words) - TMX format' href="download.php?f=EUbookshop/en-fi.tmx.gz">1.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (9,408,178 sentence pairs, 448.98M words) - TMX format' href="download.php?f=EUbookshop/en-fr.tmx.gz">9.4M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Irish (95,704 sentence pairs, 4.50M words) - TMX format' href="download.php?f=EUbookshop/en-ga.tmx.gz">95.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Gaelic (100 sentence pairs, 2.20k words) - TMX format' href="download.php?f=EUbookshop/en-gd.tmx.gz">100</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='English-Croatian (5,754 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/en-hr.tmx.gz">5.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Hungarian (372,905 sentence pairs, 16.16M words) - TMX format' href="download.php?f=EUbookshop/en-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='English-Icelandic (9,237 sentence pairs, 0.35M words) - TMX format' href="download.php?f=EUbookshop/en-is.tmx.gz">9.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Italian (5,831,612 sentence pairs, 281.98M words) - TMX format' href="download.php?f=EUbookshop/en-it.tmx.gz">5.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Japanese (96 sentence pairs, 2.98k words) - TMX format' href="download.php?f=EUbookshop/en-ja.tmx.gz">96</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='English-Lithuanian (376,587 sentence pairs, 16.03M words) - TMX format' href="download.php?f=EUbookshop/en-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Latvian (384,016 sentence pairs, 16.74M words) - TMX format' href="download.php?f=EUbookshop/en-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='English-Macedonian (2,335 sentence pairs, 94.85k words) - TMX format' href="download.php?f=EUbookshop/en-mk.tmx.gz">2.3k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Maltese (242,859 sentence pairs, 10.08M words) - TMX format' href="download.php?f=EUbookshop/en-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='English-Bokmål, Norwegian (26,960 sentence pairs, 1.15M words) - TMX format' href="download.php?f=EUbookshop/en-nb.tmx.gz">27.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (5,401,921 sentence pairs, 265.90M words) - TMX format' href="download.php?f=EUbookshop/en-nl.tmx.gz">5.4M</a>
</td><td></td><td bgcolor="#d8ffc8"><a rel="nofollow" title='English-Polish (464,777 sentence pairs, 20.87M words) - TMX format' href="download.php?f=EUbookshop/en-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (3,792,399 sentence pairs, 192.87M words) - TMX format' href="download.php?f=EUbookshop/en-pt.tmx.gz">3.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='English-Romanian (279,813 sentence pairs, 14.28M words) - TMX format' href="download.php?f=EUbookshop/en-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='English-Russian (45,009 sentence pairs, 1.69M words) - TMX format' href="download.php?f=EUbookshop/en-ru.tmx.gz">45.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-sh (530 sentence pairs, 22.21k words) - TMX format' href="download.php?f=EUbookshop/en-sh.tmx.gz">0.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='English-Slovak (394,396 sentence pairs, 17.67M words) - TMX format' href="download.php?f=EUbookshop/en-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Slovenian (343,277 sentence pairs, 15.67M words) - TMX format' href="download.php?f=EUbookshop/en-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='English-Albanian (2,014 sentence pairs, 81.81k words) - TMX format' href="download.php?f=EUbookshop/en-sq.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Serbian (1,417 sentence pairs, 56.94k words) - TMX format' href="download.php?f=EUbookshop/en-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='English-Swedish (1,764,927 sentence pairs, 81.35M words) - TMX format' href="download.php?f=EUbookshop/en-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Swahili (15 sentence pairs, 0.39k words) - TMX format' href="download.php?f=EUbookshop/en-sw.tmx.gz">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-tc (207 sentence pairs, 2.49k words) - TMX format' href="download.php?f=EUbookshop/en-tc.tmx.gz">0.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='English-Turkish (22,070 sentence pairs, 0.88M words) - TMX format' href="download.php?f=EUbookshop/en-tr.tmx.gz">22.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Ukrainian (1,748 sentence pairs, 56.10k words) - TMX format' href="download.php?f=EUbookshop/en-uk.tmx.gz">1.7k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.es.gz">es</a>
</th><td>7,716</td> <td>223.5M</td> <td>8.2M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Arabic (179 sentence pairs, 7.24k words) - Moses format' href="download.php?f=EUbookshop/ar-es.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Spanish-Bulgarian (215,305 sentence pairs, 11.03M words) - Moses format' href="download.php?f=EUbookshop/bg-es.txt.zip">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Bosnian (382 sentence pairs, 23.77k words) - Moses format' href="download.php?f=EUbookshop/bs-es.txt.zip">0.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Spanish-Catalan (3,409 sentence pairs, 0.15M words) - Moses format' href="download.php?f=EUbookshop/ca-es.txt.zip">3.4k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Spanish-Czech (411,337 sentence pairs, 18.84M words) - Moses format' href="download.php?f=EUbookshop/cs-es.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Welsh (506 sentence pairs, 15.94k words) - Moses format' href="download.php?f=EUbookshop/cy-es.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Danish (3,829,616 sentence pairs, 197.57M words) - Moses format' href="download.php?f=EUbookshop/da-es.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-German (4,750,170 sentence pairs, 228.73M words) - Moses format' href="download.php?f=EUbookshop/de-es.txt.zip">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (3,752,059 sentence pairs, 186.73M words) - Moses format' href="download.php?f=EUbookshop/el-es.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (5,215,515 sentence pairs, 257.76M words) - Moses format' href="download.php?f=EUbookshop/en-es.txt.zip">5.2M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Estonian (343,128 sentence pairs, 16.52M words) - TMX format' href="download.php?f=EUbookshop/es-et.tmx.gz">0.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-Finnish (1,691,520 sentence pairs, 75.95M words) - TMX format' href="download.php?f=EUbookshop/es-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (4,587,422 sentence pairs, 251.16M words) - TMX format' href="download.php?f=EUbookshop/es-fr.tmx.gz">4.6M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Spanish-Irish (78,385 sentence pairs, 4.05M words) - TMX format' href="download.php?f=EUbookshop/es-ga.tmx.gz">78.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Gaelic (53 sentence pairs, 2.06k words) - TMX format' href="download.php?f=EUbookshop/es-gd.tmx.gz">53</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Spanish-Croatian (4,877 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/es-hr.tmx.gz">4.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Hungarian (346,696 sentence pairs, 16.87M words) - TMX format' href="download.php?f=EUbookshop/es-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Spanish-Icelandic (7,998 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/es-is.tmx.gz">8.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Italian (4,303,371 sentence pairs, 228.93M words) - TMX format' href="download.php?f=EUbookshop/es-it.tmx.gz">4.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Japanese (82 sentence pairs, 2.14k words) - TMX format' href="download.php?f=EUbookshop/es-ja.tmx.gz">82</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Lithuanian (344,850 sentence pairs, 16.45M words) - TMX format' href="download.php?f=EUbookshop/es-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Latvian (351,412 sentence pairs, 17.21M words) - TMX format' href="download.php?f=EUbookshop/es-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Spanish-Macedonian (2,591 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/es-mk.tmx.gz">2.6k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Spanish-Maltese (226,395 sentence pairs, 10.55M words) - TMX format' href="download.php?f=EUbookshop/es-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Spanish-Bokmål, Norwegian (24,412 sentence pairs, 1.18M words) - TMX format' href="download.php?f=EUbookshop/es-nb.tmx.gz">24.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (4,052,962 sentence pairs, 220.59M words) - TMX format' href="download.php?f=EUbookshop/es-nl.tmx.gz">4.1M</a>
</td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Spanish-Polish (432,381 sentence pairs, 21.83M words) - TMX format' href="download.php?f=EUbookshop/es-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (3,655,472 sentence pairs, 204.47M words) - TMX format' href="download.php?f=EUbookshop/es-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Spanish-Romanian (258,835 sentence pairs, 14.54M words) - TMX format' href="download.php?f=EUbookshop/es-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Spanish-Russian (7,904 sentence pairs, 0.33M words) - TMX format' href="download.php?f=EUbookshop/es-ru.tmx.gz">7.9k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Slovak (347,810 sentence pairs, 17.58M words) - TMX format' href="download.php?f=EUbookshop/es-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Spanish-Slovenian (309,319 sentence pairs, 15.70M words) - TMX format' href="download.php?f=EUbookshop/es-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Spanish-Albanian (1,614 sentence pairs, 77.37k words) - TMX format' href="download.php?f=EUbookshop/es-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Spanish-Serbian (1,453 sentence pairs, 66.44k words) - TMX format' href="download.php?f=EUbookshop/es-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-Swedish (1,629,729 sentence pairs, 83.22M words) - TMX format' href="download.php?f=EUbookshop/es-sv.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Swahili (12 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/es-sw.tmx.gz">12</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-tc (470 sentence pairs, 20.83k words) - TMX format' href="download.php?f=EUbookshop/es-tc.tmx.gz">0.5k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Spanish-Turkish (18,837 sentence pairs, 0.87M words) - TMX format' href="download.php?f=EUbookshop/es-tr.tmx.gz">18.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Spanish-Ukrainian (1,375 sentence pairs, 46.82k words) - TMX format' href="download.php?f=EUbookshop/es-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.et.gz">et</a>
</th><td>1,151</td> <td>12.6M</td> <td>0.7M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Arabic (99 sentence pairs, 2.40k words) - Moses format' href="download.php?f=EUbookshop/ar-et.txt.zip">99</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Bulgarian (202,560 sentence pairs, 8.35M words) - Moses format' href="download.php?f=EUbookshop/bg-et.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Bosnian (374 sentence pairs, 17.39k words) - Moses format' href="download.php?f=EUbookshop/bs-et.txt.zip">0.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Estonian-Catalan (1,829 sentence pairs, 65.16k words) - Moses format' href="download.php?f=EUbookshop/ca-et.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Czech (402,844 sentence pairs, 14.34M words) - Moses format' href="download.php?f=EUbookshop/cs-et.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-Welsh (546 sentence pairs, 13.53k words) - Moses format' href="download.php?f=EUbookshop/cy-et.txt.zip">0.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Danish (361,458 sentence pairs, 14.46M words) - Moses format' href="download.php?f=EUbookshop/da-et.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-German (371,700 sentence pairs, 13.48M words) - Moses format' href="download.php?f=EUbookshop/de-et.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Greek (326,175 sentence pairs, 14.29M words) - Moses format' href="download.php?f=EUbookshop/el-et.txt.zip">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Estonian-English (425,993 sentence pairs, 16.89M words) - Moses format' href="download.php?f=EUbookshop/en-et.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Estonian-Spanish (386,473 sentence pairs, 17.58M words) - Moses format' href="download.php?f=EUbookshop/es-et.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Finnish (345,397 sentence pairs, 11.75M words) - TMX format' href="download.php?f=EUbookshop/et-fi.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Estonian-French (309,263 sentence pairs, 13.30M words) - TMX format' href="download.php?f=EUbookshop/et-fr.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#f9ffda"><a rel="nofollow" title='Estonian-Irish (46,905 sentence pairs, 2.02M words) - TMX format' href="download.php?f=EUbookshop/et-ga.tmx.gz">46.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Gaelic (21 sentence pairs, 0.58k words) - TMX format' href="download.php?f=EUbookshop/et-gd.tmx.gz">21</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Estonian-Croatian (3,599 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/et-hr.tmx.gz">3.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Hungarian (346,513 sentence pairs, 13.12M words) - TMX format' href="download.php?f=EUbookshop/et-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Estonian-Icelandic (6,884 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/et-is.tmx.gz">6.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Italian (333,011 sentence pairs, 14.32M words) - TMX format' href="download.php?f=EUbookshop/et-it.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Japanese (58 sentence pairs, 1.58k words) - TMX format' href="download.php?f=EUbookshop/et-ja.tmx.gz">58</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Lithuanian (366,258 sentence pairs, 13.48M words) - TMX format' href="download.php?f=EUbookshop/et-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Latvian (367,516 sentence pairs, 13.89M words) - TMX format' href="download.php?f=EUbookshop/et-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Estonian-Macedonian (2,533 sentence pairs, 90.85k words) - TMX format' href="download.php?f=EUbookshop/et-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Maltese (242,176 sentence pairs, 8.63M words) - TMX format' href="download.php?f=EUbookshop/et-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Estonian-Bokmål, Norwegian (19,021 sentence pairs, 0.70M words) - TMX format' href="download.php?f=EUbookshop/et-nb.tmx.gz">19.0k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Dutch (357,465 sentence pairs, 15.65M words) - TMX format' href="download.php?f=EUbookshop/et-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Estonian-Polish (363,996 sentence pairs, 14.55M words) - TMX format' href="download.php?f=EUbookshop/et-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Portuguese (336,124 sentence pairs, 15.25M words) - TMX format' href="download.php?f=EUbookshop/et-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Romanian (255,446 sentence pairs, 11.32M words) - TMX format' href="download.php?f=EUbookshop/et-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Estonian-Russian (1,810 sentence pairs, 79.14k words) - TMX format' href="download.php?f=EUbookshop/et-ru.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Slovak (358,228 sentence pairs, 14.24M words) - TMX format' href="download.php?f=EUbookshop/et-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Slovenian (328,472 sentence pairs, 12.89M words) - TMX format' href="download.php?f=EUbookshop/et-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Estonian-Albanian (1,616 sentence pairs, 59.36k words) - TMX format' href="download.php?f=EUbookshop/et-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Serbian (1,410 sentence pairs, 48.14k words) - TMX format' href="download.php?f=EUbookshop/et-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Swedish (339,222 sentence pairs, 13.75M words) - TMX format' href="download.php?f=EUbookshop/et-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Swahili (12 sentence pairs, 0.31k words) - TMX format' href="download.php?f=EUbookshop/et-sw.tmx.gz">12</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Estonian-Turkish (14,015 sentence pairs, 0.49M words) - TMX format' href="download.php?f=EUbookshop/et-tr.tmx.gz">14.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Estonian-Ukrainian (1,447 sentence pairs, 38.40k words) - TMX format' href="download.php?f=EUbookshop/et-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.fi.gz">fi</a>
</th><td>4,055</td> <td>63.1M</td> <td>3.6M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Arabic (111 sentence pairs, 2.78k words) - Moses format' href="download.php?f=EUbookshop/ar-fi.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Finnish-Bulgarian (200,281 sentence pairs, 7.95M words) - Moses format' href="download.php?f=EUbookshop/bg-fi.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Bosnian (411 sentence pairs, 19.54k words) - Moses format' href="download.php?f=EUbookshop/bs-fi.txt.zip">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Finnish-Catalan (2,846 sentence pairs, 97.36k words) - Moses format' href="download.php?f=EUbookshop/ca-fi.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Finnish-Czech (402,260 sentence pairs, 13.71M words) - Moses format' href="download.php?f=EUbookshop/cs-fi.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Welsh (569 sentence pairs, 14.00k words) - Moses format' href="download.php?f=EUbookshop/cy-fi.txt.zip">0.6k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Danish (1,775,183 sentence pairs, 67.89M words) - Moses format' href="download.php?f=EUbookshop/da-fi.txt.zip">1.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-German (1,861,003 sentence pairs, 66.03M words) - Moses format' href="download.php?f=EUbookshop/de-fi.txt.zip">1.9M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Greek (1,656,958 sentence pairs, 61.82M words) - Moses format' href="download.php?f=EUbookshop/el-fi.txt.zip">1.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-English (2,039,833 sentence pairs, 75.77M words) - Moses format' href="download.php?f=EUbookshop/en-fi.txt.zip">2.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Spanish (1,822,537 sentence pairs, 78.21M words) - Moses format' href="download.php?f=EUbookshop/es-fi.txt.zip">1.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Estonian (402,517 sentence pairs, 12.61M words) - Moses format' href="download.php?f=EUbookshop/et-fi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-French (1,717,258 sentence pairs, 72.65M words) - TMX format' href="download.php?f=EUbookshop/fi-fr.tmx.gz">1.7M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Finnish-Irish (62,692 sentence pairs, 2.59M words) - TMX format' href="download.php?f=EUbookshop/fi-ga.tmx.gz">62.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Gaelic (34 sentence pairs, 0.76k words) - TMX format' href="download.php?f=EUbookshop/fi-gd.tmx.gz">34</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Finnish-Croatian (4,490 sentence pairs, 0.15M words) - TMX format' href="download.php?f=EUbookshop/fi-hr.tmx.gz">4.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Hungarian (346,532 sentence pairs, 12.15M words) - TMX format' href="download.php?f=EUbookshop/fi-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Finnish-Icelandic (9,997 sentence pairs, 0.31M words) - TMX format' href="download.php?f=EUbookshop/fi-is.tmx.gz">10.0k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Italian (1,743,154 sentence pairs, 71.81M words) - TMX format' href="download.php?f=EUbookshop/fi-it.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Japanese (84 sentence pairs, 1.48k words) - TMX format' href="download.php?f=EUbookshop/fi-ja.tmx.gz">84</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Lithuanian (360,959 sentence pairs, 12.36M words) - TMX format' href="download.php?f=EUbookshop/fi-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Latvian (358,600 sentence pairs, 12.63M words) - TMX format' href="download.php?f=EUbookshop/fi-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Finnish-Macedonian (2,722 sentence pairs, 94.21k words) - TMX format' href="download.php?f=EUbookshop/fi-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Finnish-Maltese (241,190 sentence pairs, 8.40M words) - TMX format' href="download.php?f=EUbookshop/fi-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Finnish-Bokmål, Norwegian (26,937 sentence pairs, 0.96M words) - TMX format' href="download.php?f=EUbookshop/fi-nb.tmx.gz">26.9k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Dutch (1,813,773 sentence pairs, 75.06M words) - TMX format' href="download.php?f=EUbookshop/fi-nl.tmx.gz">1.8M</a>
</td><td></td><td bgcolor="#ddffc7"><a rel="nofollow" title='Finnish-Polish (351,373 sentence pairs, 13.30M words) - TMX format' href="download.php?f=EUbookshop/fi-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Portuguese (1,679,825 sentence pairs, 72.49M words) - TMX format' href="download.php?f=EUbookshop/fi-pt.tmx.gz">1.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Finnish-Romanian (243,317 sentence pairs, 10.35M words) - TMX format' href="download.php?f=EUbookshop/fi-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Finnish-Russian (5,923 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/fi-ru.tmx.gz">5.9k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Slovak (345,060 sentence pairs, 12.84M words) - TMX format' href="download.php?f=EUbookshop/fi-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Slovenian (314,351 sentence pairs, 11.84M words) - TMX format' href="download.php?f=EUbookshop/fi-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Finnish-Albanian (1,759 sentence pairs, 62.72k words) - TMX format' href="download.php?f=EUbookshop/fi-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Finnish-Serbian (1,520 sentence pairs, 51.51k words) - TMX format' href="download.php?f=EUbookshop/fi-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Swedish (1,742,651 sentence pairs, 66.82M words) - TMX format' href="download.php?f=EUbookshop/fi-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Swahili (14 sentence pairs, 0.32k words) - TMX format' href="download.php?f=EUbookshop/fi-sw.tmx.gz">14</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Finnish-Turkish (16,000 sentence pairs, 0.53M words) - TMX format' href="download.php?f=EUbookshop/fi-tr.tmx.gz">16.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Finnish-Ukrainian (1,559 sentence pairs, 40.39k words) - TMX format' href="download.php?f=EUbookshop/fi-uk.tmx.gz">1.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.fr.gz">fr</a>
</th><td>17,261</td> <td>445.8M</td> <td>18.5M</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Arabic (1,245 sentence pairs, 55.71k words) - Moses format' href="download.php?f=EUbookshop/ar-fr.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='French-Bulgarian (189,370 sentence pairs, 9.10M words) - Moses format' href="download.php?f=EUbookshop/bg-fr.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Bosnian (352 sentence pairs, 19.41k words) - Moses format' href="download.php?f=EUbookshop/bs-fr.txt.zip">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='French-Catalan (3,449 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-fr.txt.zip">3.4k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='French-Czech (384,552 sentence pairs, 16.20M words) - Moses format' href="download.php?f=EUbookshop/cs-fr.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Welsh (587 sentence pairs, 17.51k words) - Moses format' href="download.php?f=EUbookshop/cy-fr.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Danish (4,437,569 sentence pairs, 215.44M words) - Moses format' href="download.php?f=EUbookshop/da-fr.txt.zip">4.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-German (8,558,340 sentence pairs, 370.58M words) - Moses format' href="download.php?f=EUbookshop/de-fr.txt.zip">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (4,064,319 sentence pairs, 189.27M words) - Moses format' href="download.php?f=EUbookshop/el-fr.txt.zip">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (10,617,855 sentence pairs, 469.26M words) - Moses format' href="download.php?f=EUbookshop/en-fr.txt.zip">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (4,937,007 sentence pairs, 258.58M words) - Moses format' href="download.php?f=EUbookshop/es-fr.txt.zip">4.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Estonian (351,918 sentence pairs, 14.20M words) - Moses format' href="download.php?f=EUbookshop/et-fr.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='French-Finnish (1,878,652 sentence pairs, 74.84M words) - Moses format' href="download.php?f=EUbookshop/fi-fr.txt.zip">1.9M</a>
</td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='French-Irish (88,575 sentence pairs, 4.58M words) - TMX format' href="download.php?f=EUbookshop/fr-ga.tmx.gz">88.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Gaelic (83 sentence pairs, 1.93k words) - TMX format' href="download.php?f=EUbookshop/fr-gd.tmx.gz">83</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='French-Croatian (4,969 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/fr-hr.tmx.gz">5.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Hungarian (320,747 sentence pairs, 14.05M words) - TMX format' href="download.php?f=EUbookshop/fr-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='French-Icelandic (8,564 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/fr-is.tmx.gz">8.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Italian (5,199,678 sentence pairs, 264.65M words) - TMX format' href="download.php?f=EUbookshop/fr-it.tmx.gz">5.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Japanese (83 sentence pairs, 3.70k words) - TMX format' href="download.php?f=EUbookshop/fr-ja.tmx.gz">83</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Lithuanian (319,386 sentence pairs, 13.71M words) - TMX format' href="download.php?f=EUbookshop/fr-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='French-Latvian (333,110 sentence pairs, 14.64M words) - TMX format' href="download.php?f=EUbookshop/fr-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='French-Macedonian (2,736 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/fr-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='French-Maltese (235,068 sentence pairs, 10.46M words) - TMX format' href="download.php?f=EUbookshop/fr-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='French-Bokmål, Norwegian (25,309 sentence pairs, 1.17M words) - TMX format' href="download.php?f=EUbookshop/fr-nb.tmx.gz">25.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Dutch (4,808,465 sentence pairs, 248.13M words) - TMX format' href="download.php?f=EUbookshop/fr-nl.tmx.gz">4.8M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-Polish (410,047 sentence pairs, 18.61M words) - TMX format' href="download.php?f=EUbookshop/fr-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (3,687,337 sentence pairs, 197.34M words) - TMX format' href="download.php?f=EUbookshop/fr-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='French-Romanian (226,810 sentence pairs, 11.51M words) - TMX format' href="download.php?f=EUbookshop/fr-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='French-Russian (14,913 sentence pairs, 0.65M words) - TMX format' href="download.php?f=EUbookshop/fr-ru.tmx.gz">14.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='French-Slovak (331,082 sentence pairs, 14.79M words) - TMX format' href="download.php?f=EUbookshop/fr-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Slovenian (296,378 sentence pairs, 13.89M words) - TMX format' href="download.php?f=EUbookshop/fr-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='French-Albanian (1,497 sentence pairs, 65.87k words) - TMX format' href="download.php?f=EUbookshop/fr-sq.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Serbian (1,411 sentence pairs, 59.32k words) - TMX format' href="download.php?f=EUbookshop/fr-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='French-Swedish (1,664,407 sentence pairs, 80.54M words) - TMX format' href="download.php?f=EUbookshop/fr-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Swahili (16 sentence pairs, 0.44k words) - TMX format' href="download.php?f=EUbookshop/fr-sw.tmx.gz">16</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-tc (486 sentence pairs, 19.86k words) - TMX format' href="download.php?f=EUbookshop/fr-tc.tmx.gz">0.5k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='French-Turkish (20,487 sentence pairs, 0.90M words) - TMX format' href="download.php?f=EUbookshop/fr-tr.tmx.gz">20.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Ukrainian (1,587 sentence pairs, 54.17k words) - TMX format' href="download.php?f=EUbookshop/fr-uk.tmx.gz">1.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr_BE plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.fr_BE.gz">fr_BE</a>
</th><td>2</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ga.gz">ga</a>
</th><td>246</td> <td>4.0M</td> <td>0.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Arabic (15 sentence pairs, 0.51k words) - Moses format' href="download.php?f=EUbookshop/ar-ga.txt.zip">15</a>
</td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Irish-Bulgarian (55,946 sentence pairs, 2.19M words) - Moses format' href="download.php?f=EUbookshop/bg-ga.txt.zip">55.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Catalan (132 sentence pairs, 4.66k words) - Moses format' href="download.php?f=EUbookshop/ca-ga.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Irish-Czech (76,787 sentence pairs, 2.80M words) - Moses format' href="download.php?f=EUbookshop/cs-ga.txt.zip">76.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Irish-Welsh (407 sentence pairs, 11.05k words) - Moses format' href="download.php?f=EUbookshop/cy-ga.txt.zip">0.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Irish-Danish (88,553 sentence pairs, 4.01M words) - Moses format' href="download.php?f=EUbookshop/da-ga.txt.zip">88.6k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-German (101,077 sentence pairs, 4.20M words) - Moses format' href="download.php?f=EUbookshop/de-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Greek (114,991 sentence pairs, 5.37M words) - Moses format' href="download.php?f=EUbookshop/el-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-English (133,363 sentence pairs, 5.34M words) - Moses format' href="download.php?f=EUbookshop/en-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Spanish (106,008 sentence pairs, 4.75M words) - Moses format' href="download.php?f=EUbookshop/es-ga.txt.zip">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Estonian (63,071 sentence pairs, 2.45M words) - Moses format' href="download.php?f=EUbookshop/et-ga.txt.zip">63.1k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Irish-Finnish (81,935 sentence pairs, 3.05M words) - Moses format' href="download.php?f=EUbookshop/fi-ga.txt.zip">81.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-French (110,921 sentence pairs, 5.26M words) - Moses format' href="download.php?f=EUbookshop/fr-ga.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Gaelic (71 sentence pairs, 2.32k words) - TMX format' href="download.php?f=EUbookshop/ga-gd.tmx.gz">71</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Irish-Croatian (491 sentence pairs, 20.43k words) - TMX format' href="download.php?f=EUbookshop/ga-hr.tmx.gz">0.5k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Irish-Hungarian (49,846 sentence pairs, 2.12M words) - TMX format' href="download.php?f=EUbookshop/ga-hu.tmx.gz">49.8k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Irish-Icelandic (4,632 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/ga-is.tmx.gz">4.6k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-Italian (87,029 sentence pairs, 4.19M words) - TMX format' href="download.php?f=EUbookshop/ga-it.tmx.gz">87.0k</a>
</td><td></td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Irish-Lithuanian (52,122 sentence pairs, 2.17M words) - TMX format' href="download.php?f=EUbookshop/ga-lt.tmx.gz">52.1k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Latvian (52,408 sentence pairs, 2.29M words) - TMX format' href="download.php?f=EUbookshop/ga-lv.tmx.gz">52.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Irish-Macedonian (523 sentence pairs, 22.29k words) - TMX format' href="download.php?f=EUbookshop/ga-mk.tmx.gz">0.5k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Irish-Maltese (57,671 sentence pairs, 2.57M words) - TMX format' href="download.php?f=EUbookshop/ga-mt.tmx.gz">57.7k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Irish-Bokmål, Norwegian (4,514 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/ga-nb.tmx.gz">4.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Dutch (88,597 sentence pairs, 4.54M words) - TMX format' href="download.php?f=EUbookshop/ga-nl.tmx.gz">88.6k</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Polish (52,174 sentence pairs, 2.33M words) - TMX format' href="download.php?f=EUbookshop/ga-pl.tmx.gz">52.2k</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-Portuguese (86,426 sentence pairs, 4.43M words) - TMX format' href="download.php?f=EUbookshop/ga-pt.tmx.gz">86.4k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Romanian (47,848 sentence pairs, 2.32M words) - TMX format' href="download.php?f=EUbookshop/ga-ro.tmx.gz">47.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Russian (189 sentence pairs, 5.13k words) - TMX format' href="download.php?f=EUbookshop/ga-ru.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Slovak (51,728 sentence pairs, 2.35M words) - TMX format' href="download.php?f=EUbookshop/ga-sk.tmx.gz">51.7k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Slovenian (52,347 sentence pairs, 2.34M words) - TMX format' href="download.php?f=EUbookshop/ga-sl.tmx.gz">52.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Albanian (5 sentence pairs, 0.18k words) - TMX format' href="download.php?f=EUbookshop/ga-sq.tmx.gz">5</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Irish-Swedish (68,639 sentence pairs, 3.26M words) - TMX format' href="download.php?f=EUbookshop/ga-sv.tmx.gz">68.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Swahili (5 sentence pairs, 0.17k words) - TMX format' href="download.php?f=EUbookshop/ga-sw.tmx.gz">5</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Irish-Turkish (4,390 sentence pairs, 0.17M words) - TMX format' href="download.php?f=EUbookshop/ga-tr.tmx.gz">4.4k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gd plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.gd.gz">gd</a>
</th><td>1</td> <td>2.2k</td> <td>0.2k</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Bulgarian (48 sentence pairs, 1.64k words) - Moses format' href="download.php?f=EUbookshop/bg-gd.txt.zip">48</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Catalan (64 sentence pairs, 2.11k words) - Moses format' href="download.php?f=EUbookshop/ca-gd.txt.zip">64</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Czech (21 sentence pairs, 0.69k words) - Moses format' href="download.php?f=EUbookshop/cs-gd.txt.zip">21</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Danish (20 sentence pairs, 0.61k words) - Moses format' href="download.php?f=EUbookshop/da-gd.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-German (69 sentence pairs, 2.08k words) - Moses format' href="download.php?f=EUbookshop/de-gd.txt.zip">69</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Greek (38 sentence pairs, 0.95k words) - Moses format' href="download.php?f=EUbookshop/el-gd.txt.zip">38</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-English (100 sentence pairs, 2.20k words) - Moses format' href="download.php?f=EUbookshop/en-gd.txt.zip">100</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Spanish (53 sentence pairs, 2.06k words) - Moses format' href="download.php?f=EUbookshop/es-gd.txt.zip">53</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Estonian (21 sentence pairs, 0.58k words) - Moses format' href="download.php?f=EUbookshop/et-gd.txt.zip">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Finnish (34 sentence pairs, 0.76k words) - Moses format' href="download.php?f=EUbookshop/fi-gd.txt.zip">34</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-French (83 sentence pairs, 1.93k words) - Moses format' href="download.php?f=EUbookshop/fr-gd.txt.zip">83</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Irish (71 sentence pairs, 2.32k words) - Moses format' href="download.php?f=EUbookshop/ga-gd.txt.zip">71</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Hungarian (30 sentence pairs, 0.73k words) - TMX format' href="download.php?f=EUbookshop/gd-hu.tmx.gz">30</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Italian (54 sentence pairs, 1.76k words) - TMX format' href="download.php?f=EUbookshop/gd-it.tmx.gz">54</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Lithuanian (26 sentence pairs, 0.71k words) - TMX format' href="download.php?f=EUbookshop/gd-lt.tmx.gz">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Latvian (23 sentence pairs, 0.61k words) - TMX format' href="download.php?f=EUbookshop/gd-lv.tmx.gz">23</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Maltese (64 sentence pairs, 2.03k words) - TMX format' href="download.php?f=EUbookshop/gd-mt.tmx.gz">64</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Dutch (44 sentence pairs, 1.06k words) - TMX format' href="download.php?f=EUbookshop/gd-nl.tmx.gz">44</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Polish (40 sentence pairs, 1.25k words) - TMX format' href="download.php?f=EUbookshop/gd-pl.tmx.gz">40</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Portuguese (51 sentence pairs, 1.55k words) - TMX format' href="download.php?f=EUbookshop/gd-pt.tmx.gz">51</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Romanian (50 sentence pairs, 1.76k words) - TMX format' href="download.php?f=EUbookshop/gd-ro.tmx.gz">50</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Slovak (91 sentence pairs, 1.95k words) - TMX format' href="download.php?f=EUbookshop/gd-sk.tmx.gz">91</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Slovenian (26 sentence pairs, 0.87k words) - TMX format' href="download.php?f=EUbookshop/gd-sl.tmx.gz">26</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Swedish (37 sentence pairs, 1.00k words) - TMX format' href="download.php?f=EUbookshop/gd-sv.tmx.gz">37</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.hr.gz">hr</a>
</th><td>23</td> <td>0.2M</td> <td>8.7k</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Bulgarian (2,709 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/bg-hr.txt.zip">2.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Bosnian (639 sentence pairs, 34.83k words) - Moses format' href="download.php?f=EUbookshop/bs-hr.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Croatian-Catalan (642 sentence pairs, 26.09k words) - Moses format' href="download.php?f=EUbookshop/ca-hr.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Czech (4,058 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/cs-hr.txt.zip">4.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Welsh (534 sentence pairs, 14.90k words) - Moses format' href="download.php?f=EUbookshop/cy-hr.txt.zip">0.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Danish (2,764 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/da-hr.txt.zip">2.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-German (3,332 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/de-hr.txt.zip">3.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Greek (3,779 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/el-hr.txt.zip">3.8k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Croatian-English (6,104 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/en-hr.txt.zip">6.1k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Croatian-Spanish (5,264 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/es-hr.txt.zip">5.3k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Estonian (3,907 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/et-hr.txt.zip">3.9k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Finnish (4,867 sentence pairs, 0.15M words) - Moses format' href="download.php?f=EUbookshop/fi-hr.txt.zip">4.9k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Croatian-French (5,324 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/fr-hr.txt.zip">5.3k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Irish (502 sentence pairs, 20.50k words) - Moses format' href="download.php?f=EUbookshop/ga-hr.txt.zip">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Croatian-Hungarian (1,655 sentence pairs, 59.95k words) - TMX format' href="download.php?f=EUbookshop/hr-hu.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-Italian (2,912 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-it.tmx.gz">2.9k</a>
</td><td></td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Lithuanian (3,705 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-lt.tmx.gz">3.7k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Latvian (3,615 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-lv.tmx.gz">3.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Macedonian (2,513 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/hr-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Croatian-Maltese (1,581 sentence pairs, 59.24k words) - TMX format' href="download.php?f=EUbookshop/hr-mt.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Croatian-Bokmål, Norwegian (1,241 sentence pairs, 52.09k words) - TMX format' href="download.php?f=EUbookshop/hr-nb.tmx.gz">1.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Croatian-Dutch (4,270 sentence pairs, 0.17M words) - TMX format' href="download.php?f=EUbookshop/hr-nl.tmx.gz">4.3k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Polish (3,581 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-pl.tmx.gz">3.6k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Portuguese (2,790 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-pt.tmx.gz">2.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Romanian (3,090 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-ro.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Russian (929 sentence pairs, 35.80k words) - TMX format' href="download.php?f=EUbookshop/hr-ru.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-sh (428 sentence pairs, 19.10k words) - TMX format' href="download.php?f=EUbookshop/hr-sh.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Slovak (3,533 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-sk.tmx.gz">3.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Slovenian (3,720 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-sl.tmx.gz">3.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Croatian-Albanian (2,042 sentence pairs, 90.20k words) - TMX format' href="download.php?f=EUbookshop/hr-sq.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Croatian-Serbian (1,605 sentence pairs, 68.53k words) - TMX format' href="download.php?f=EUbookshop/hr-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Swedish (3,644 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-sv.tmx.gz">3.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Swahili (7 sentence pairs, 0.22k words) - TMX format' href="download.php?f=EUbookshop/hr-sw.tmx.gz">7</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Turkish (3,903 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-tr.tmx.gz">3.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Ukrainian (313 sentence pairs, 8.25k words) - TMX format' href="download.php?f=EUbookshop/hr-uk.tmx.gz">0.3k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.hu.gz">hu</a>
</th><td>1,159</td> <td>14.9M</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Arabic (106 sentence pairs, 3.13k words) - Moses format' href="download.php?f=EUbookshop/ar-hu.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hungarian-Bulgarian (207,746 sentence pairs, 8.54M words) - Moses format' href="download.php?f=EUbookshop/bg-hu.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Bosnian (32 sentence pairs, 1.92k words) - Moses format' href="download.php?f=EUbookshop/bs-hu.txt.zip">32</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hungarian-Catalan (1,151 sentence pairs, 45.44k words) - Moses format' href="download.php?f=EUbookshop/ca-hu.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Czech (412,794 sentence pairs, 14.96M words) - Moses format' href="download.php?f=EUbookshop/cs-hu.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Welsh (538 sentence pairs, 14.03k words) - Moses format' href="download.php?f=EUbookshop/cy-hu.txt.zip">0.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Danish (352,408 sentence pairs, 14.69M words) - Moses format' href="download.php?f=EUbookshop/da-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-German (392,443 sentence pairs, 15.44M words) - Moses format' href="download.php?f=EUbookshop/de-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Hungarian-Greek (373,080 sentence pairs, 16.08M words) - Moses format' href="download.php?f=EUbookshop/el-hu.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hungarian-English (438,264 sentence pairs, 17.25M words) - Moses format' href="download.php?f=EUbookshop/en-hu.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Hungarian-Spanish (395,545 sentence pairs, 17.88M words) - Moses format' href="download.php?f=EUbookshop/es-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Estonian (400,337 sentence pairs, 13.97M words) - Moses format' href="download.php?f=EUbookshop/et-hu.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Finnish (399,830 sentence pairs, 12.94M words) - Moses format' href="download.php?f=EUbookshop/fi-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-French (364,206 sentence pairs, 14.90M words) - Moses format' href="download.php?f=EUbookshop/fr-hu.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Hungarian-Irish (72,494 sentence pairs, 2.54M words) - Moses format' href="download.php?f=EUbookshop/ga-hu.txt.zip">72.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Gaelic (30 sentence pairs, 0.73k words) - Moses format' href="download.php?f=EUbookshop/gd-hu.txt.zip">30</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Hungarian-Croatian (1,683 sentence pairs, 60.12k words) - Moses format' href="download.php?f=EUbookshop/hr-hu.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Hungarian-Icelandic (6,333 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/hu-is.tmx.gz">6.3k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Italian (344,763 sentence pairs, 15.24M words) - TMX format' href="download.php?f=EUbookshop/hu-it.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Japanese (67 sentence pairs, 2.93k words) - TMX format' href="download.php?f=EUbookshop/hu-ja.tmx.gz">67</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Lithuanian (348,965 sentence pairs, 13.08M words) - TMX format' href="download.php?f=EUbookshop/hu-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Latvian (351,901 sentence pairs, 13.48M words) - TMX format' href="download.php?f=EUbookshop/hu-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hungarian-Macedonian (1,217 sentence pairs, 45.77k words) - TMX format' href="download.php?f=EUbookshop/hu-mk.tmx.gz">1.2k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Hungarian-Maltese (241,083 sentence pairs, 9.08M words) - TMX format' href="download.php?f=EUbookshop/hu-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Hungarian-Bokmål, Norwegian (16,862 sentence pairs, 0.66M words) - TMX format' href="download.php?f=EUbookshop/hu-nb.tmx.gz">16.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Dutch (347,308 sentence pairs, 15.60M words) - TMX format' href="download.php?f=EUbookshop/hu-nl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Polish (361,878 sentence pairs, 14.87M words) - TMX format' href="download.php?f=EUbookshop/hu-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Portuguese (338,173 sentence pairs, 15.71M words) - TMX format' href="download.php?f=EUbookshop/hu-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Hungarian-Romanian (250,131 sentence pairs, 11.59M words) - TMX format' href="download.php?f=EUbookshop/hu-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Hungarian-Russian (1,970 sentence pairs, 87.38k words) - TMX format' href="download.php?f=EUbookshop/hu-ru.tmx.gz">2.0k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Slovak (354,698 sentence pairs, 14.36M words) - TMX format' href="download.php?f=EUbookshop/hu-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Slovenian (311,549 sentence pairs, 12.78M words) - TMX format' href="download.php?f=EUbookshop/hu-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Albanian (114 sentence pairs, 4.32k words) - TMX format' href="download.php?f=EUbookshop/hu-sq.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Serbian (71 sentence pairs, 2.99k words) - TMX format' href="download.php?f=EUbookshop/hu-sr.tmx.gz">71</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Swedish (323,208 sentence pairs, 13.49M words) - TMX format' href="download.php?f=EUbookshop/hu-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Swahili (14 sentence pairs, 0.37k words) - TMX format' href="download.php?f=EUbookshop/hu-sw.tmx.gz">14</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hungarian-tc (613 sentence pairs, 22.68k words) - TMX format' href="download.php?f=EUbookshop/hu-tc.tmx.gz">0.6k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Hungarian-Turkish (14,832 sentence pairs, 0.54M words) - TMX format' href="download.php?f=EUbookshop/hu-tr.tmx.gz">14.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hungarian-Ukrainian (1,478 sentence pairs, 42.01k words) - TMX format' href="download.php?f=EUbookshop/hu-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.is.gz">is</a>
</th><td>48</td> <td>0.2M</td> <td>13.6k</td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Icelandic-Bulgarian (5,430 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/bg-is.txt.zip">5.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Icelandic-Czech (7,242 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/cs-is.txt.zip">7.2k</a>
</td><td></td><td bgcolor="#ffeee9"><a rel="nofollow" title='Icelandic-Danish (8,537 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EUbookshop/da-is.txt.zip">8.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Icelandic-German (9,000 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EUbookshop/de-is.txt.zip">9.0k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Icelandic-Greek (8,382 sentence pairs, 0.31M words) - Moses format' href="download.php?f=EUbookshop/el-is.txt.zip">8.4k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Icelandic-English (9,783 sentence pairs, 0.35M words) - Moses format' href="download.php?f=EUbookshop/en-is.txt.zip">9.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Spanish (8,247 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/es-is.txt.zip">8.2k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Estonian (7,338 sentence pairs, 0.22M words) - Moses format' href="download.php?f=EUbookshop/et-is.txt.zip">7.3k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Icelandic-Finnish (10,596 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EUbookshop/fi-is.txt.zip">10.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-French (8,953 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/fr-is.txt.zip">9.0k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Icelandic-Irish (4,900 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/ga-is.txt.zip">4.9k</a>
</td><td></td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Icelandic-Hungarian (6,656 sentence pairs, 0.22M words) - Moses format' href="download.php?f=EUbookshop/hu-is.txt.zip">6.7k</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Italian (8,326 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/is-it.tmx.gz">8.3k</a>
</td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Icelandic-Lithuanian (5,795 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/is-lt.tmx.gz">5.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Icelandic-Latvian (6,179 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/is-lv.tmx.gz">6.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Macedonian (81 sentence pairs, 2.43k words) - TMX format' href="download.php?f=EUbookshop/is-mk.tmx.gz">81</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Icelandic-Maltese (5,465 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/is-mt.tmx.gz">5.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Icelandic-Bokmål, Norwegian (8,596 sentence pairs, 0.33M words) - TMX format' href="download.php?f=EUbookshop/is-nb.tmx.gz">8.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Dutch (8,731 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/is-nl.tmx.gz">8.7k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Icelandic-Polish (6,267 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/is-pl.tmx.gz">6.3k</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Portuguese (8,362 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/is-pt.tmx.gz">8.4k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Romanian (5,901 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/is-ro.tmx.gz">5.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Russian (461 sentence pairs, 17.96k words) - TMX format' href="download.php?f=EUbookshop/is-ru.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Icelandic-Slovak (6,930 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/is-sk.tmx.gz">6.9k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Icelandic-Slovenian (6,701 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/is-sl.tmx.gz">6.7k</a>
</td><td></td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Swedish (9,414 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/is-sv.tmx.gz">9.4k</a>
</td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Icelandic-Turkish (2,521 sentence pairs, 89.50k words) - TMX format' href="download.php?f=EUbookshop/is-tr.tmx.gz">2.5k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.it.gz">it</a>
</th><td>9,151</td> <td>265.7M</td> <td>11.1M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Arabic (161 sentence pairs, 5.52k words) - Moses format' href="download.php?f=EUbookshop/ar-it.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Italian-Bulgarian (210,277 sentence pairs, 9.62M words) - Moses format' href="download.php?f=EUbookshop/bg-it.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Bosnian (29 sentence pairs, 1.99k words) - Moses format' href="download.php?f=EUbookshop/bs-it.txt.zip">29</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Italian-Catalan (3,316 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-it.txt.zip">3.3k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Italian-Czech (451,865 sentence pairs, 18.72M words) - Moses format' href="download.php?f=EUbookshop/cs-it.txt.zip">0.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Welsh (569 sentence pairs, 16.11k words) - Moses format' href="download.php?f=EUbookshop/cy-it.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Danish (4,820,574 sentence pairs, 226.25M words) - Moses format' href="download.php?f=EUbookshop/da-it.txt.zip">4.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-German (5,878,917 sentence pairs, 257.86M words) - Moses format' href="download.php?f=EUbookshop/de-it.txt.zip">5.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Greek (4,087,904 sentence pairs, 181.29M words) - Moses format' href="download.php?f=EUbookshop/el-it.txt.zip">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (6,490,019 sentence pairs, 291.99M words) - Moses format' href="download.php?f=EUbookshop/en-it.txt.zip">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (4,695,714 sentence pairs, 236.13M words) - Moses format' href="download.php?f=EUbookshop/es-it.txt.zip">4.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Estonian (382,708 sentence pairs, 15.29M words) - Moses format' href="download.php?f=EUbookshop/et-it.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Finnish (1,912,299 sentence pairs, 74.15M words) - Moses format' href="download.php?f=EUbookshop/fi-it.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-French (5,745,771 sentence pairs, 274.30M words) - Moses format' href="download.php?f=EUbookshop/fr-it.txt.zip">5.7M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Italian-Irish (120,302 sentence pairs, 4.88M words) - Moses format' href="download.php?f=EUbookshop/ga-it.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Gaelic (54 sentence pairs, 1.76k words) - Moses format' href="download.php?f=EUbookshop/gd-it.txt.zip">54</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Italian-Croatian (2,931 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/hr-it.txt.zip">2.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Hungarian (402,377 sentence pairs, 16.21M words) - Moses format' href="download.php?f=EUbookshop/hu-it.txt.zip">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Italian-Icelandic (8,669 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/is-it.txt.zip">8.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Japanese (92 sentence pairs, 3.19k words) - TMX format' href="download.php?f=EUbookshop/it-ja.tmx.gz">92</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Lithuanian (353,171 sentence pairs, 15.11M words) - TMX format' href="download.php?f=EUbookshop/it-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Latvian (348,940 sentence pairs, 15.29M words) - TMX format' href="download.php?f=EUbookshop/it-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Italian-Macedonian (1,209 sentence pairs, 51.07k words) - TMX format' href="download.php?f=EUbookshop/it-mk.tmx.gz">1.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Italian-Maltese (234,558 sentence pairs, 10.16M words) - TMX format' href="download.php?f=EUbookshop/it-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Italian-Bokmål, Norwegian (23,997 sentence pairs, 1.10M words) - TMX format' href="download.php?f=EUbookshop/it-nb.tmx.gz">24.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Dutch (5,152,716 sentence pairs, 260.65M words) - TMX format' href="download.php?f=EUbookshop/it-nl.tmx.gz">5.2M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Polish (436,392 sentence pairs, 19.94M words) - TMX format' href="download.php?f=EUbookshop/it-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Portuguese (3,627,436 sentence pairs, 187.98M words) - TMX format' href="download.php?f=EUbookshop/it-pt.tmx.gz">3.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Italian-Romanian (259,163 sentence pairs, 13.14M words) - TMX format' href="download.php?f=EUbookshop/it-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Italian-Russian (6,145 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/it-ru.tmx.gz">6.1k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Italian-Slovak (355,875 sentence pairs, 16.25M words) - TMX format' href="download.php?f=EUbookshop/it-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Slovenian (321,158 sentence pairs, 14.97M words) - TMX format' href="download.php?f=EUbookshop/it-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Albanian (93 sentence pairs, 4.13k words) - TMX format' href="download.php?f=EUbookshop/it-sq.tmx.gz">93</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Serbian (54 sentence pairs, 2.81k words) - TMX format' href="download.php?f=EUbookshop/it-sr.tmx.gz">54</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Italian-Swedish (1,679,502 sentence pairs, 79.38M words) - TMX format' href="download.php?f=EUbookshop/it-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Swahili (16 sentence pairs, 0.42k words) - TMX format' href="download.php?f=EUbookshop/it-sw.tmx.gz">16</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-tc (483 sentence pairs, 20.12k words) - TMX format' href="download.php?f=EUbookshop/it-tc.tmx.gz">0.5k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Italian-Turkish (15,349 sentence pairs, 0.64M words) - TMX format' href="download.php?f=EUbookshop/it-tr.tmx.gz">15.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Italian-Ukrainian (1,504 sentence pairs, 48.53k words) - TMX format' href="download.php?f=EUbookshop/it-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ja.gz">ja</a>
</th><td>4</td> <td>2.5k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Czech (50 sentence pairs, 1.57k words) - Moses format' href="download.php?f=EUbookshop/cs-ja.txt.zip">50</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Danish (89 sentence pairs, 2.45k words) - Moses format' href="download.php?f=EUbookshop/da-ja.txt.zip">89</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-German (111 sentence pairs, 3.46k words) - Moses format' href="download.php?f=EUbookshop/de-ja.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Greek (2 sentence pairs, 47 words) - Moses format' href="download.php?f=EUbookshop/el-ja.txt.zip">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-English (115 sentence pairs, 3.06k words) - Moses format' href="download.php?f=EUbookshop/en-ja.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Spanish (97 sentence pairs, 2.21k words) - Moses format' href="download.php?f=EUbookshop/es-ja.txt.zip">97</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Estonian (75 sentence pairs, 1.64k words) - Moses format' href="download.php?f=EUbookshop/et-ja.txt.zip">75</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Finnish (97 sentence pairs, 1.52k words) - Moses format' href="download.php?f=EUbookshop/fi-ja.txt.zip">97</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-French (99 sentence pairs, 3.79k words) - Moses format' href="download.php?f=EUbookshop/fr-ja.txt.zip">99</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Hungarian (81 sentence pairs, 2.99k words) - Moses format' href="download.php?f=EUbookshop/hu-ja.txt.zip">81</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Italian (109 sentence pairs, 3.27k words) - Moses format' href="download.php?f=EUbookshop/it-ja.txt.zip">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lithuanian (64 sentence pairs, 2.34k words) - TMX format' href="download.php?f=EUbookshop/ja-lt.tmx.gz">64</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Latvian (68 sentence pairs, 1.74k words) - TMX format' href="download.php?f=EUbookshop/ja-lv.tmx.gz">68</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Dutch (85 sentence pairs, 3.48k words) - TMX format' href="download.php?f=EUbookshop/ja-nl.tmx.gz">85</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Polish (75 sentence pairs, 3.05k words) - TMX format' href="download.php?f=EUbookshop/ja-pl.tmx.gz">75</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Portuguese (93 sentence pairs, 3.62k words) - TMX format' href="download.php?f=EUbookshop/ja-pt.tmx.gz">93</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Russian (90 sentence pairs, 2.96k words) - TMX format' href="download.php?f=EUbookshop/ja-ru.tmx.gz">90</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Slovak (68 sentence pairs, 2.54k words) - TMX format' href="download.php?f=EUbookshop/ja-sk.tmx.gz">68</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Slovenian (60 sentence pairs, 2.40k words) - TMX format' href="download.php?f=EUbookshop/ja-sl.tmx.gz">60</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Swedish (57 sentence pairs, 1.45k words) - TMX format' href="download.php?f=EUbookshop/ja-sv.tmx.gz">57</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lb plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.lb.gz">lb</a>
</th><td>4</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.lt.gz">lt</a>
</th><td>1,149</td> <td>14.7M</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Arabic (107 sentence pairs, 2.96k words) - Moses format' href="download.php?f=EUbookshop/ar-lt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Lithuanian-Bulgarian (218,994 sentence pairs, 8.88M words) - Moses format' href="download.php?f=EUbookshop/bg-lt.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Bosnian (335 sentence pairs, 17.37k words) - Moses format' href="download.php?f=EUbookshop/bs-lt.txt.zip">0.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Lithuanian-Catalan (1,982 sentence pairs, 73.58k words) - Moses format' href="download.php?f=EUbookshop/ca-lt.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Czech (436,108 sentence pairs, 15.43M words) - Moses format' href="download.php?f=EUbookshop/cs-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Welsh (602 sentence pairs, 14.73k words) - Moses format' href="download.php?f=EUbookshop/cy-lt.txt.zip">0.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Danish (367,532 sentence pairs, 14.87M words) - Moses format' href="download.php?f=EUbookshop/da-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-German (376,085 sentence pairs, 14.19M words) - Moses format' href="download.php?f=EUbookshop/de-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Greek (362,362 sentence pairs, 15.30M words) - Moses format' href="download.php?f=EUbookshop/el-lt.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Lithuanian-English (445,813 sentence pairs, 17.27M words) - Moses format' href="download.php?f=EUbookshop/en-lt.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Lithuanian-Spanish (396,967 sentence pairs, 17.62M words) - Moses format' href="download.php?f=EUbookshop/es-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Estonian (425,764 sentence pairs, 14.50M words) - Moses format' href="download.php?f=EUbookshop/et-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Finnish (422,560 sentence pairs, 13.33M words) - Moses format' href="download.php?f=EUbookshop/fi-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-French (368,355 sentence pairs, 14.73M words) - Moses format' href="download.php?f=EUbookshop/fr-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Lithuanian-Irish (76,939 sentence pairs, 2.67M words) - Moses format' href="download.php?f=EUbookshop/ga-lt.txt.zip">76.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Gaelic (26 sentence pairs, 0.71k words) - Moses format' href="download.php?f=EUbookshop/gd-lt.txt.zip">26</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Lithuanian-Croatian (3,912 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-lt.txt.zip">3.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Hungarian (409,656 sentence pairs, 14.01M words) - Moses format' href="download.php?f=EUbookshop/hu-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Lithuanian-Icelandic (6,115 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/is-lt.txt.zip">6.1k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Lithuanian-Italian (412,783 sentence pairs, 16.26M words) - Moses format' href="download.php?f=EUbookshop/it-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Japanese (77 sentence pairs, 2.38k words) - Moses format' href="download.php?f=EUbookshop/ja-lt.txt.zip">77</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Latvian (381,851 sentence pairs, 14.35M words) - TMX format' href="download.php?f=EUbookshop/lt-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Macedonian (2,681 sentence pairs, 98.62k words) - TMX format' href="download.php?f=EUbookshop/lt-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Lithuanian-Maltese (240,882 sentence pairs, 8.77M words) - TMX format' href="download.php?f=EUbookshop/lt-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Bokmål, Norwegian (18,230 sentence pairs, 0.70M words) - TMX format' href="download.php?f=EUbookshop/lt-nb.tmx.gz">18.2k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Lithuanian-Dutch (362,329 sentence pairs, 15.88M words) - TMX format' href="download.php?f=EUbookshop/lt-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Polish (375,286 sentence pairs, 14.87M words) - TMX format' href="download.php?f=EUbookshop/lt-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Portuguese (342,350 sentence pairs, 15.48M words) - TMX format' href="download.php?f=EUbookshop/lt-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Lithuanian-Romanian (269,815 sentence pairs, 12.04M words) - TMX format' href="download.php?f=EUbookshop/lt-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Lithuanian-Russian (1,853 sentence pairs, 81.33k words) - TMX format' href="download.php?f=EUbookshop/lt-ru.tmx.gz">1.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Slovak (378,367 sentence pairs, 14.99M words) - TMX format' href="download.php?f=EUbookshop/lt-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Slovenian (334,296 sentence pairs, 13.38M words) - TMX format' href="download.php?f=EUbookshop/lt-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Lithuanian-Albanian (1,560 sentence pairs, 58.28k words) - TMX format' href="download.php?f=EUbookshop/lt-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Lithuanian-Serbian (1,388 sentence pairs, 50.07k words) - TMX format' href="download.php?f=EUbookshop/lt-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Swedish (345,992 sentence pairs, 14.19M words) - TMX format' href="download.php?f=EUbookshop/lt-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Swahili (16 sentence pairs, 0.40k words) - TMX format' href="download.php?f=EUbookshop/lt-sw.tmx.gz">16</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Lithuanian-Turkish (16,460 sentence pairs, 0.57M words) - TMX format' href="download.php?f=EUbookshop/lt-tr.tmx.gz">16.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Lithuanian-Ukrainian (1,450 sentence pairs, 38.99k words) - TMX format' href="download.php?f=EUbookshop/lt-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.lv.gz">lv</a>
</th><td>1,165</td> <td>14.9M</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Arabic (112 sentence pairs, 3.13k words) - Moses format' href="download.php?f=EUbookshop/ar-lv.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Latvian-Bulgarian (212,612 sentence pairs, 9.17M words) - Moses format' href="download.php?f=EUbookshop/bg-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Bosnian (374 sentence pairs, 19.19k words) - Moses format' href="download.php?f=EUbookshop/bs-lv.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Latvian-Catalan (1,812 sentence pairs, 68.28k words) - Moses format' href="download.php?f=EUbookshop/ca-lv.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Czech (422,478 sentence pairs, 15.55M words) - Moses format' href="download.php?f=EUbookshop/cs-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Welsh (561 sentence pairs, 14.50k words) - Moses format' href="download.php?f=EUbookshop/cy-lv.txt.zip">0.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Danish (365,608 sentence pairs, 15.13M words) - Moses format' href="download.php?f=EUbookshop/da-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-German (379,642 sentence pairs, 14.30M words) - Moses format' href="download.php?f=EUbookshop/de-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Greek (347,831 sentence pairs, 15.41M words) - Moses format' href="download.php?f=EUbookshop/el-lv.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Latvian-English (445,891 sentence pairs, 17.94M words) - Moses format' href="download.php?f=EUbookshop/en-lv.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Latvian-Spanish (394,620 sentence pairs, 18.34M words) - Moses format' href="download.php?f=EUbookshop/es-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Estonian (426,704 sentence pairs, 14.88M words) - Moses format' href="download.php?f=EUbookshop/et-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Finnish (418,456 sentence pairs, 13.58M words) - Moses format' href="download.php?f=EUbookshop/fi-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-French (380,918 sentence pairs, 15.64M words) - Moses format' href="download.php?f=EUbookshop/fr-lv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Latvian-Irish (70,037 sentence pairs, 2.77M words) - Moses format' href="download.php?f=EUbookshop/ga-lv.txt.zip">70.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Gaelic (23 sentence pairs, 0.61k words) - Moses format' href="download.php?f=EUbookshop/gd-lv.txt.zip">23</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Latvian-Croatian (3,950 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-lv.txt.zip">4.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Hungarian (406,908 sentence pairs, 14.37M words) - Moses format' href="download.php?f=EUbookshop/hu-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Latvian-Icelandic (6,507 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/is-lv.txt.zip">6.5k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Latvian-Italian (400,825 sentence pairs, 16.37M words) - Moses format' href="download.php?f=EUbookshop/it-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Japanese (81 sentence pairs, 1.78k words) - Moses format' href="download.php?f=EUbookshop/ja-lv.txt.zip">81</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Lithuanian (447,783 sentence pairs, 15.48M words) - Moses format' href="download.php?f=EUbookshop/lt-lv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Latvian-Macedonian (2,426 sentence pairs, 88.49k words) - TMX format' href="download.php?f=EUbookshop/lv-mk.tmx.gz">2.4k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Latvian-Maltese (249,412 sentence pairs, 9.31M words) - TMX format' href="download.php?f=EUbookshop/lv-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Latvian-Bokmål, Norwegian (18,812 sentence pairs, 0.75M words) - TMX format' href="download.php?f=EUbookshop/lv-nb.tmx.gz">18.8k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Latvian-Dutch (358,039 sentence pairs, 16.04M words) - TMX format' href="download.php?f=EUbookshop/lv-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Polish (371,823 sentence pairs, 15.28M words) - TMX format' href="download.php?f=EUbookshop/lv-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Latvian-Portuguese (341,208 sentence pairs, 15.77M words) - TMX format' href="download.php?f=EUbookshop/lv-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Latvian-Romanian (261,017 sentence pairs, 11.99M words) - TMX format' href="download.php?f=EUbookshop/lv-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Latvian-Russian (1,871 sentence pairs, 80.91k words) - TMX format' href="download.php?f=EUbookshop/lv-ru.tmx.gz">1.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Slovak (374,361 sentence pairs, 15.03M words) - TMX format' href="download.php?f=EUbookshop/lv-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Slovenian (332,136 sentence pairs, 13.59M words) - TMX format' href="download.php?f=EUbookshop/lv-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Latvian-Albanian (1,553 sentence pairs, 59.34k words) - TMX format' href="download.php?f=EUbookshop/lv-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Latvian-Serbian (1,260 sentence pairs, 46.86k words) - TMX format' href="download.php?f=EUbookshop/lv-sr.tmx.gz">1.3k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Swedish (337,874 sentence pairs, 14.14M words) - TMX format' href="download.php?f=EUbookshop/lv-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Swahili (13 sentence pairs, 0.30k words) - TMX format' href="download.php?f=EUbookshop/lv-sw.tmx.gz">13</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Latvian-Turkish (15,845 sentence pairs, 0.58M words) - TMX format' href="download.php?f=EUbookshop/lv-tr.tmx.gz">15.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Ukrainian (1,455 sentence pairs, 39.88k words) - TMX format' href="download.php?f=EUbookshop/lv-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.mk.gz">mk</a>
</th><td>13</td> <td>96.3k</td> <td>4.7k</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Bulgarian (2,591 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/bg-mk.txt.zip">2.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Bosnian (448 sentence pairs, 24.83k words) - Moses format' href="download.php?f=EUbookshop/bs-mk.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Czech (3,007 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/cs-mk.txt.zip">3.0k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Macedonian-Danish (1,094 sentence pairs, 43.75k words) - Moses format' href="download.php?f=EUbookshop/da-mk.txt.zip">1.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-German (3,151 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/de-mk.txt.zip">3.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Macedonian-Greek (3,206 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/el-mk.txt.zip">3.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-English (2,580 sentence pairs, 98.36k words) - Moses format' href="download.php?f=EUbookshop/en-mk.txt.zip">2.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Macedonian-Spanish (2,879 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/es-mk.txt.zip">2.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Estonian (2,850 sentence pairs, 94.85k words) - Moses format' href="download.php?f=EUbookshop/et-mk.txt.zip">2.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Finnish (3,058 sentence pairs, 98.69k words) - Moses format' href="download.php?f=EUbookshop/fi-mk.txt.zip">3.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Macedonian-French (3,104 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/fr-mk.txt.zip">3.1k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Irish (532 sentence pairs, 22.37k words) - Moses format' href="download.php?f=EUbookshop/ga-mk.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Croatian (2,779 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/hr-mk.txt.zip">2.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Hungarian (1,245 sentence pairs, 46.15k words) - Moses format' href="download.php?f=EUbookshop/hu-mk.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Icelandic (83 sentence pairs, 2.44k words) - Moses format' href="download.php?f=EUbookshop/is-mk.txt.zip">83</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Italian (1,228 sentence pairs, 51.38k words) - Moses format' href="download.php?f=EUbookshop/it-mk.txt.zip">1.2k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Lithuanian (2,856 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/lt-mk.txt.zip">2.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Macedonian-Latvian (2,692 sentence pairs, 92.04k words) - Moses format' href="download.php?f=EUbookshop/lv-mk.txt.zip">2.7k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Macedonian-Maltese (931 sentence pairs, 35.22k words) - TMX format' href="download.php?f=EUbookshop/mk-mt.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Macedonian-Bokmål, Norwegian (1,350 sentence pairs, 58.42k words) - TMX format' href="download.php?f=EUbookshop/mk-nb.tmx.gz">1.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Dutch (2,758 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/mk-nl.tmx.gz">2.8k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Polish (2,690 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/mk-pl.tmx.gz">2.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Portuguese (1,142 sentence pairs, 50.48k words) - TMX format' href="download.php?f=EUbookshop/mk-pt.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Romanian (2,642 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/mk-ro.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Russian (10 sentence pairs, 0.31k words) - TMX format' href="download.php?f=EUbookshop/mk-ru.tmx.gz">10</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Slovak (2,597 sentence pairs, 99.26k words) - TMX format' href="download.php?f=EUbookshop/mk-sk.tmx.gz">2.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Slovenian (2,660 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/mk-sl.tmx.gz">2.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Macedonian-Albanian (1,780 sentence pairs, 77.93k words) - TMX format' href="download.php?f=EUbookshop/mk-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Macedonian-Serbian (1,641 sentence pairs, 69.02k words) - TMX format' href="download.php?f=EUbookshop/mk-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Swedish (2,648 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/mk-sv.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Swahili (8 sentence pairs, 0.23k words) - TMX format' href="download.php?f=EUbookshop/mk-sw.tmx.gz">8</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Turkish (2,984 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/mk-tr.tmx.gz">3.0k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.mt.gz">mt</a>
</th><td>902</td> <td>10.4M</td> <td>0.5M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Arabic (196 sentence pairs, 5.83k words) - Moses format' href="download.php?f=EUbookshop/ar-mt.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Maltese-Bulgarian (142,488 sentence pairs, 5.24M words) - Moses format' href="download.php?f=EUbookshop/bg-mt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Maltese-Catalan (1,505 sentence pairs, 60.69k words) - Moses format' href="download.php?f=EUbookshop/ca-mt.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Czech (280,537 sentence pairs, 9.78M words) - Moses format' href="download.php?f=EUbookshop/cs-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Danish (240,482 sentence pairs, 9.54M words) - Moses format' href="download.php?f=EUbookshop/da-mt.txt.zip">0.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-German (255,438 sentence pairs, 9.60M words) - Moses format' href="download.php?f=EUbookshop/de-mt.txt.zip">0.3M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Maltese-Greek (294,971 sentence pairs, 12.06M words) - Moses format' href="download.php?f=EUbookshop/el-mt.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-English (285,816 sentence pairs, 10.68M words) - Moses format' href="download.php?f=EUbookshop/en-mt.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Spanish (259,197 sentence pairs, 11.08M words) - Moses format' href="download.php?f=EUbookshop/es-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Estonian (274,180 sentence pairs, 9.07M words) - Moses format' href="download.php?f=EUbookshop/et-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Finnish (274,084 sentence pairs, 8.86M words) - Moses format' href="download.php?f=EUbookshop/fi-mt.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-French (262,929 sentence pairs, 10.96M words) - Moses format' href="download.php?f=EUbookshop/fr-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Maltese-Irish (77,022 sentence pairs, 2.86M words) - Moses format' href="download.php?f=EUbookshop/ga-mt.txt.zip">77.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Gaelic (64 sentence pairs, 2.03k words) - Moses format' href="download.php?f=EUbookshop/gd-mt.txt.zip">64</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Maltese-Croatian (1,597 sentence pairs, 59.33k words) - Moses format' href="download.php?f=EUbookshop/hr-mt.txt.zip">1.6k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Hungarian (281,942 sentence pairs, 9.58M words) - Moses format' href="download.php?f=EUbookshop/hu-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Maltese-Icelandic (5,717 sentence pairs, 0.19M words) - Moses format' href="download.php?f=EUbookshop/is-mt.txt.zip">5.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Italian (272,618 sentence pairs, 10.71M words) - Moses format' href="download.php?f=EUbookshop/it-mt.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Lithuanian (282,273 sentence pairs, 9.30M words) - Moses format' href="download.php?f=EUbookshop/lt-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Latvian (282,540 sentence pairs, 9.82M words) - Moses format' href="download.php?f=EUbookshop/lv-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Maltese-Macedonian (960 sentence pairs, 35.60k words) - Moses format' href="download.php?f=EUbookshop/mk-mt.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Maltese-Bokmål, Norwegian (5,916 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/mt-nb.tmx.gz">5.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Dutch (233,256 sentence pairs, 10.04M words) - TMX format' href="download.php?f=EUbookshop/mt-nl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Polish (242,406 sentence pairs, 9.41M words) - TMX format' href="download.php?f=EUbookshop/mt-pl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Portuguese (226,236 sentence pairs, 10.12M words) - TMX format' href="download.php?f=EUbookshop/mt-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Maltese-Romanian (164,106 sentence pairs, 6.80M words) - TMX format' href="download.php?f=EUbookshop/mt-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Maltese-Russian (1,107 sentence pairs, 58.36k words) - TMX format' href="download.php?f=EUbookshop/mt-ru.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Slovak (232,193 sentence pairs, 9.05M words) - TMX format' href="download.php?f=EUbookshop/mt-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Slovenian (230,791 sentence pairs, 9.01M words) - TMX format' href="download.php?f=EUbookshop/mt-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Albanian (16 sentence pairs, 0.45k words) - TMX format' href="download.php?f=EUbookshop/mt-sq.tmx.gz">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Serbian (4 sentence pairs, 0.15k words) - TMX format' href="download.php?f=EUbookshop/mt-sr.tmx.gz">4</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Swedish (227,767 sentence pairs, 9.22M words) - TMX format' href="download.php?f=EUbookshop/mt-sv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Swahili (13 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/mt-sw.tmx.gz">13</a>
</td><td></td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Maltese-Turkish (5,439 sentence pairs, 0.18M words) - TMX format' href="download.php?f=EUbookshop/mt-tr.tmx.gz">5.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Maltese-Ukrainian (629 sentence pairs, 17.31k words) - TMX format' href="download.php?f=EUbookshop/mt-uk.tmx.gz">0.6k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.nb.gz">nb</a>
</th><td>95</td> <td>0.9M</td> <td>44.1k</td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bokmål, Norwegian-Bulgarian (14,872 sentence pairs, 0.65M words) - Moses format' href="download.php?f=EUbookshop/bg-nb.txt.zip">14.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bokmål, Norwegian-Bosnian (326 sentence pairs, 18.18k words) - Moses format' href="download.php?f=EUbookshop/bs-nb.txt.zip">0.3k</a>
</td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bokmål, Norwegian-Czech (19,957 sentence pairs, 0.79M words) - Moses format' href="download.php?f=EUbookshop/cs-nb.txt.zip">20.0k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Bokmål, Norwegian-Danish (24,183 sentence pairs, 1.03M words) - Moses format' href="download.php?f=EUbookshop/da-nb.txt.zip">24.2k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Bokmål, Norwegian-German (26,497 sentence pairs, 1.09M words) - Moses format' href="download.php?f=EUbookshop/de-nb.txt.zip">26.5k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Bokmål, Norwegian-Greek (20,037 sentence pairs, 0.93M words) - Moses format' href="download.php?f=EUbookshop/el-nb.txt.zip">20.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Bokmål, Norwegian-English (28,188 sentence pairs, 1.16M words) - Moses format' href="download.php?f=EUbookshop/en-nb.txt.zip">28.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Bokmål, Norwegian-Spanish (25,041 sentence pairs, 1.19M words) - Moses format' href="download.php?f=EUbookshop/es-nb.txt.zip">25.0k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Bokmål, Norwegian-Estonian (19,810 sentence pairs, 0.71M words) - Moses format' href="download.php?f=EUbookshop/et-nb.txt.zip">19.8k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Bokmål, Norwegian-Finnish (28,020 sentence pairs, 0.97M words) - Moses format' href="download.php?f=EUbookshop/fi-nb.txt.zip">28.0k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Bokmål, Norwegian-French (26,256 sentence pairs, 1.18M words) - Moses format' href="download.php?f=EUbookshop/fr-nb.txt.zip">26.3k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Bokmål, Norwegian-Irish (4,695 sentence pairs, 0.19M words) - Moses format' href="download.php?f=EUbookshop/ga-nb.txt.zip">4.7k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bokmål, Norwegian-Croatian (1,264 sentence pairs, 52.34k words) - Moses format' href="download.php?f=EUbookshop/hr-nb.txt.zip">1.3k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bokmål, Norwegian-Hungarian (17,560 sentence pairs, 0.67M words) - Moses format' href="download.php?f=EUbookshop/hu-nb.txt.zip">17.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Bokmål, Norwegian-Icelandic (9,023 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/is-nb.txt.zip">9.0k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Bokmål, Norwegian-Italian (24,822 sentence pairs, 1.12M words) - Moses format' href="download.php?f=EUbookshop/it-nb.txt.zip">24.8k</a>
</td><td></td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Bokmål, Norwegian-Lithuanian (18,992 sentence pairs, 0.71M words) - Moses format' href="download.php?f=EUbookshop/lt-nb.txt.zip">19.0k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bokmål, Norwegian-Latvian (19,520 sentence pairs, 0.76M words) - Moses format' href="download.php?f=EUbookshop/lv-nb.txt.zip">19.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bokmål, Norwegian-Macedonian (1,388 sentence pairs, 59.06k words) - Moses format' href="download.php?f=EUbookshop/mk-nb.txt.zip">1.4k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Bokmål, Norwegian-Maltese (6,124 sentence pairs, 0.22M words) - Moses format' href="download.php?f=EUbookshop/mt-nb.txt.zip">6.1k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Bokmål, Norwegian-Dutch (25,684 sentence pairs, 1.12M words) - TMX format' href="download.php?f=EUbookshop/nb-nl.tmx.gz">25.7k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bokmål, Norwegian-Polish (18,943 sentence pairs, 0.77M words) - TMX format' href="download.php?f=EUbookshop/nb-pl.tmx.gz">18.9k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Bokmål, Norwegian-Portuguese (23,504 sentence pairs, 1.11M words) - TMX format' href="download.php?f=EUbookshop/nb-pt.tmx.gz">23.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bokmål, Norwegian-Romanian (16,961 sentence pairs, 0.77M words) - TMX format' href="download.php?f=EUbookshop/nb-ro.tmx.gz">17.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bokmål, Norwegian-Russian (458 sentence pairs, 18.86k words) - TMX format' href="download.php?f=EUbookshop/nb-ru.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Bokmål, Norwegian-Slovak (19,330 sentence pairs, 0.80M words) - TMX format' href="download.php?f=EUbookshop/nb-sk.tmx.gz">19.3k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bokmål, Norwegian-Slovenian (19,495 sentence pairs, 0.82M words) - TMX format' href="download.php?f=EUbookshop/nb-sl.tmx.gz">19.5k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Bokmål, Norwegian-Albanian (1,412 sentence pairs, 63.35k words) - TMX format' href="download.php?f=EUbookshop/nb-sq.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bokmål, Norwegian-Serbian (1,313 sentence pairs, 55.89k words) - TMX format' href="download.php?f=EUbookshop/nb-sr.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Bokmål, Norwegian-Swedish (26,711 sentence pairs, 1.11M words) - TMX format' href="download.php?f=EUbookshop/nb-sv.tmx.gz">26.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bokmål, Norwegian-Swahili (12 sentence pairs, 0.36k words) - TMX format' href="download.php?f=EUbookshop/nb-sw.tmx.gz">12</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Bokmål, Norwegian-Turkish (10,649 sentence pairs, 0.43M words) - TMX format' href="download.php?f=EUbookshop/nb-tr.tmx.gz">10.6k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.nl.gz">nl</a>
</th><td>7,687</td> <td>247.6M</td> <td>10.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Arabic (96 sentence pairs, 3.26k words) - Moses format' href="download.php?f=EUbookshop/ar-nl.txt.zip">96</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Dutch-Bulgarian (213,252 sentence pairs, 10.44M words) - Moses format' href="download.php?f=EUbookshop/bg-nl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Bosnian (384 sentence pairs, 21.29k words) - Moses format' href="download.php?f=EUbookshop/bs-nl.txt.zip">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Dutch-Catalan (3,500 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-nl.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Dutch-Czech (406,450 sentence pairs, 17.25M words) - Moses format' href="download.php?f=EUbookshop/cs-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Welsh (555 sentence pairs, 16.18k words) - Moses format' href="download.php?f=EUbookshop/cy-nl.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Danish (5,068,913 sentence pairs, 240.75M words) - Moses format' href="download.php?f=EUbookshop/da-nl.txt.zip">5.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-German (5,668,617 sentence pairs, 252.41M words) - Moses format' href="download.php?f=EUbookshop/de-nl.txt.zip">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Greek (4,094,792 sentence pairs, 184.88M words) - Moses format' href="download.php?f=EUbookshop/el-nl.txt.zip">4.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (5,964,564 sentence pairs, 274.85M words) - Moses format' href="download.php?f=EUbookshop/en-nl.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (4,355,872 sentence pairs, 226.93M words) - Moses format' href="download.php?f=EUbookshop/es-nl.txt.zip">4.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Estonian (409,880 sentence pairs, 16.66M words) - Moses format' href="download.php?f=EUbookshop/et-nl.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Finnish (1,984,697 sentence pairs, 77.43M words) - Moses format' href="download.php?f=EUbookshop/fi-nl.txt.zip">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (5,275,922 sentence pairs, 256.41M words) - Moses format' href="download.php?f=EUbookshop/fr-nl.txt.zip">5.3M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Dutch-Irish (112,855 sentence pairs, 5.22M words) - Moses format' href="download.php?f=EUbookshop/ga-nl.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Gaelic (44 sentence pairs, 1.06k words) - Moses format' href="download.php?f=EUbookshop/gd-nl.txt.zip">44</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Dutch-Croatian (4,612 sentence pairs, 0.18M words) - Moses format' href="download.php?f=EUbookshop/hr-nl.txt.zip">4.6k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Hungarian (397,772 sentence pairs, 16.55M words) - Moses format' href="download.php?f=EUbookshop/hu-nl.txt.zip">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Dutch-Icelandic (9,153 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/is-nl.txt.zip">9.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Italian (5,650,930 sentence pairs, 269.14M words) - Moses format' href="download.php?f=EUbookshop/it-nl.txt.zip">5.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Japanese (88 sentence pairs, 3.50k words) - Moses format' href="download.php?f=EUbookshop/ja-nl.txt.zip">88</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Lithuanian (417,846 sentence pairs, 16.99M words) - Moses format' href="download.php?f=EUbookshop/lt-nl.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Dutch-Latvian (413,094 sentence pairs, 17.14M words) - Moses format' href="download.php?f=EUbookshop/lv-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Dutch-Macedonian (3,078 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/mk-nl.txt.zip">3.1k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Dutch-Maltese (263,587 sentence pairs, 10.55M words) - Moses format' href="download.php?f=EUbookshop/mt-nl.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Dutch-Bokmål, Norwegian (26,592 sentence pairs, 1.14M words) - Moses format' href="download.php?f=EUbookshop/nb-nl.txt.zip">26.6k</a>
</td><td></td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Dutch-Polish (381,548 sentence pairs, 17.99M words) - TMX format' href="download.php?f=EUbookshop/nl-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (3,618,385 sentence pairs, 189.77M words) - TMX format' href="download.php?f=EUbookshop/nl-pt.tmx.gz">3.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Dutch-Romanian (261,231 sentence pairs, 13.68M words) - TMX format' href="download.php?f=EUbookshop/nl-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Dutch-Russian (6,142 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/nl-ru.tmx.gz">6.1k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Slovak (365,070 sentence pairs, 16.99M words) - TMX format' href="download.php?f=EUbookshop/nl-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Dutch-Slovenian (323,950 sentence pairs, 15.26M words) - TMX format' href="download.php?f=EUbookshop/nl-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Dutch-Albanian (1,684 sentence pairs, 72.24k words) - TMX format' href="download.php?f=EUbookshop/nl-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Dutch-Serbian (1,493 sentence pairs, 61.39k words) - TMX format' href="download.php?f=EUbookshop/nl-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Swedish (1,755,204 sentence pairs, 82.96M words) - TMX format' href="download.php?f=EUbookshop/nl-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Swahili (13 sentence pairs, 0.34k words) - TMX format' href="download.php?f=EUbookshop/nl-sw.tmx.gz">13</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-tc (478 sentence pairs, 19.45k words) - TMX format' href="download.php?f=EUbookshop/nl-tc.tmx.gz">0.5k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Dutch-Turkish (14,912 sentence pairs, 0.62M words) - TMX format' href="download.php?f=EUbookshop/nl-tr.tmx.gz">14.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Dutch-Ukrainian (1,499 sentence pairs, 48.01k words) - TMX format' href="download.php?f=EUbookshop/nl-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl_BE plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.nl_BE.gz">nl_BE</a>
</th><td>5</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.pl.gz">pl</a>
</th><td>1,400</td> <td>18.4M</td> <td>0.9M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Arabic (103 sentence pairs, 2.92k words) - Moses format' href="download.php?f=EUbookshop/ar-pl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Polish-Bulgarian (231,331 sentence pairs, 10.14M words) - Moses format' href="download.php?f=EUbookshop/bg-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Bosnian (393 sentence pairs, 20.61k words) - Moses format' href="download.php?f=EUbookshop/bs-pl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Polish-Catalan (1,855 sentence pairs, 74.63k words) - Moses format' href="download.php?f=EUbookshop/ca-pl.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Czech (437,376 sentence pairs, 16.69M words) - Moses format' href="download.php?f=EUbookshop/cs-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Welsh (557 sentence pairs, 14.85k words) - Moses format' href="download.php?f=EUbookshop/cy-pl.txt.zip">0.6k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Danish (370,706 sentence pairs, 16.31M words) - Moses format' href="download.php?f=EUbookshop/da-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Polish-German (465,907 sentence pairs, 18.65M words) - Moses format' href="download.php?f=EUbookshop/de-pl.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Polish-Greek (387,679 sentence pairs, 17.58M words) - Moses format' href="download.php?f=EUbookshop/el-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Polish-English (539,941 sentence pairs, 22.24M words) - Moses format' href="download.php?f=EUbookshop/en-pl.txt.zip">0.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Polish-Spanish (489,347 sentence pairs, 23.15M words) - Moses format' href="download.php?f=EUbookshop/es-pl.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Estonian (419,610 sentence pairs, 15.55M words) - Moses format' href="download.php?f=EUbookshop/et-pl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Finnish (409,064 sentence pairs, 14.23M words) - Moses format' href="download.php?f=EUbookshop/fi-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-French (465,662 sentence pairs, 19.74M words) - Moses format' href="download.php?f=EUbookshop/fr-pl.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Polish-Irish (76,437 sentence pairs, 2.84M words) - Moses format' href="download.php?f=EUbookshop/ga-pl.txt.zip">76.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Gaelic (40 sentence pairs, 1.25k words) - Moses format' href="download.php?f=EUbookshop/gd-pl.txt.zip">40</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Polish-Croatian (3,971 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-pl.txt.zip">4.0k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Polish-Hungarian (424,120 sentence pairs, 15.86M words) - Moses format' href="download.php?f=EUbookshop/hu-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Polish-Icelandic (6,558 sentence pairs, 0.22M words) - Moses format' href="download.php?f=EUbookshop/is-pl.txt.zip">6.6k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Polish-Italian (501,991 sentence pairs, 21.17M words) - Moses format' href="download.php?f=EUbookshop/it-pl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Japanese (85 sentence pairs, 3.09k words) - Moses format' href="download.php?f=EUbookshop/ja-pl.txt.zip">85</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Polish-Lithuanian (444,435 sentence pairs, 16.04M words) - Moses format' href="download.php?f=EUbookshop/lt-pl.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Latvian (432,165 sentence pairs, 16.39M words) - Moses format' href="download.php?f=EUbookshop/lv-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Polish-Macedonian (3,054 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/mk-pl.txt.zip">3.1k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Polish-Maltese (282,184 sentence pairs, 9.94M words) - Moses format' href="download.php?f=EUbookshop/mt-pl.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Polish-Bokmål, Norwegian (19,624 sentence pairs, 0.78M words) - Moses format' href="download.php?f=EUbookshop/nb-pl.txt.zip">19.6k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Polish-Dutch (438,450 sentence pairs, 19.14M words) - Moses format' href="download.php?f=EUbookshop/nl-pl.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Polish-Portuguese (363,872 sentence pairs, 17.77M words) - TMX format' href="download.php?f=EUbookshop/pl-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Romanian (279,036 sentence pairs, 13.32M words) - TMX format' href="download.php?f=EUbookshop/pl-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Polish-Russian (2,563 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/pl-ru.tmx.gz">2.6k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Slovak (375,802 sentence pairs, 16.13M words) - TMX format' href="download.php?f=EUbookshop/pl-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Slovenian (334,727 sentence pairs, 14.32M words) - TMX format' href="download.php?f=EUbookshop/pl-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Polish-Albanian (1,683 sentence pairs, 65.61k words) - TMX format' href="download.php?f=EUbookshop/pl-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-Serbian (1,519 sentence pairs, 56.85k words) - TMX format' href="download.php?f=EUbookshop/pl-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Swedish (348,787 sentence pairs, 15.55M words) - TMX format' href="download.php?f=EUbookshop/pl-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Swahili (14 sentence pairs, 0.38k words) - TMX format' href="download.php?f=EUbookshop/pl-sw.tmx.gz">14</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Polish-Turkish (17,402 sentence pairs, 0.65M words) - TMX format' href="download.php?f=EUbookshop/pl-tr.tmx.gz">17.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Ukrainian (1,530 sentence pairs, 44.63k words) - TMX format' href="download.php?f=EUbookshop/pl-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized po plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.po.gz">po</a>
</th><td>1</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.pt.gz">pt</a>
</th><td>6,381</td> <td>184.6M</td> <td>7.0M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Arabic (102 sentence pairs, 3.62k words) - Moses format' href="download.php?f=EUbookshop/ar-pt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Bulgarian (202,483 sentence pairs, 10.15M words) - Moses format' href="download.php?f=EUbookshop/bg-pt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Catalan (3,155 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-pt.txt.zip">3.2k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Portuguese-Czech (403,310 sentence pairs, 17.62M words) - Moses format' href="download.php?f=EUbookshop/cs-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Welsh (526 sentence pairs, 15.91k words) - Moses format' href="download.php?f=EUbookshop/cy-pt.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Danish (3,557,890 sentence pairs, 174.48M words) - Moses format' href="download.php?f=EUbookshop/da-pt.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-German (3,817,564 sentence pairs, 176.30M words) - Moses format' href="download.php?f=EUbookshop/de-pt.txt.zip">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (3,492,270 sentence pairs, 165.05M words) - Moses format' href="download.php?f=EUbookshop/el-pt.txt.zip">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (4,172,215 sentence pairs, 198.98M words) - Moses format' href="download.php?f=EUbookshop/en-pt.txt.zip">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (3,959,340 sentence pairs, 210.50M words) - Moses format' href="download.php?f=EUbookshop/es-pt.txt.zip">4.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Estonian (382,749 sentence pairs, 16.16M words) - Moses format' href="download.php?f=EUbookshop/et-pt.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Finnish (1,830,252 sentence pairs, 74.56M words) - Moses format' href="download.php?f=EUbookshop/fi-pt.txt.zip">1.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (4,029,715 sentence pairs, 203.38M words) - Moses format' href="download.php?f=EUbookshop/fr-pt.txt.zip">4.0M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Portuguese-Irish (106,250 sentence pairs, 4.98M words) - Moses format' href="download.php?f=EUbookshop/ga-pt.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Gaelic (51 sentence pairs, 1.55k words) - Moses format' href="download.php?f=EUbookshop/gd-pt.txt.zip">51</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Portuguese-Croatian (2,820 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/hr-pt.txt.zip">2.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Hungarian (384,324 sentence pairs, 16.60M words) - Moses format' href="download.php?f=EUbookshop/hu-pt.txt.zip">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Portuguese-Icelandic (8,758 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/is-pt.txt.zip">8.8k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Italian (3,984,789 sentence pairs, 193.86M words) - Moses format' href="download.php?f=EUbookshop/it-pt.txt.zip">4.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Japanese (103 sentence pairs, 3.66k words) - Moses format' href="download.php?f=EUbookshop/ja-pt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Lithuanian (389,212 sentence pairs, 16.46M words) - Moses format' href="download.php?f=EUbookshop/lt-pt.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Latvian (388,110 sentence pairs, 16.74M words) - Moses format' href="download.php?f=EUbookshop/lv-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Portuguese-Macedonian (1,165 sentence pairs, 50.88k words) - Moses format' href="download.php?f=EUbookshop/mk-pt.txt.zip">1.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Maltese (254,476 sentence pairs, 10.59M words) - Moses format' href="download.php?f=EUbookshop/mt-pt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Portuguese-Bokmål, Norwegian (24,459 sentence pairs, 1.12M words) - Moses format' href="download.php?f=EUbookshop/nb-pt.txt.zip">24.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (3,954,330 sentence pairs, 195.57M words) - Moses format' href="download.php?f=EUbookshop/nl-pt.txt.zip">4.0M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Polish (413,144 sentence pairs, 18.83M words) - Moses format' href="download.php?f=EUbookshop/pl-pt.txt.zip">0.4M</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Portuguese-Romanian (257,512 sentence pairs, 13.75M words) - TMX format' href="download.php?f=EUbookshop/pt-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Portuguese-Russian (6,113 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/pt-ru.tmx.gz">6.1k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Slovak (357,315 sentence pairs, 16.98M words) - TMX format' href="download.php?f=EUbookshop/pt-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Slovenian (314,548 sentence pairs, 15.19M words) - TMX format' href="download.php?f=EUbookshop/pt-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Albanian (16 sentence pairs, 0.48k words) - TMX format' href="download.php?f=EUbookshop/pt-sq.tmx.gz">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Serbian (5 sentence pairs, 0.16k words) - TMX format' href="download.php?f=EUbookshop/pt-sr.tmx.gz">5</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Swedish (1,641,291 sentence pairs, 81.26M words) - TMX format' href="download.php?f=EUbookshop/pt-sv.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Swahili (12 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/pt-sw.tmx.gz">12</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Portuguese-Turkish (14,054 sentence pairs, 0.61M words) - TMX format' href="download.php?f=EUbookshop/pt-tr.tmx.gz">14.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Portuguese-Ukrainian (1,478 sentence pairs, 50.05k words) - TMX format' href="download.php?f=EUbookshop/pt-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ro.gz">ro</a>
</th><td>747</td> <td>13.2M</td> <td>0.5M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Arabic (100 sentence pairs, 3.36k words) - Moses format' href="download.php?f=EUbookshop/ar-ro.txt.zip">100</a>
</td><td></td><td bgcolor="#dfffc7"><a rel="nofollow" title='Romanian-Bulgarian (229,532 sentence pairs, 10.76M words) - Moses format' href="download.php?f=EUbookshop/bg-ro.txt.zip">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Romanian-Bosnian (389 sentence pairs, 22.31k words) - Moses format' href="download.php?f=EUbookshop/bs-ro.txt.zip">0.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Catalan (783 sentence pairs, 32.35k words) - Moses format' href="download.php?f=EUbookshop/ca-ro.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Czech (310,939 sentence pairs, 13.04M words) - Moses format' href="download.php?f=EUbookshop/cs-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Danish (259,530 sentence pairs, 12.67M words) - Moses format' href="download.php?f=EUbookshop/da-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-German (275,745 sentence pairs, 12.42M words) - Moses format' href="download.php?f=EUbookshop/de-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Greek (271,891 sentence pairs, 13.04M words) - Moses format' href="download.php?f=EUbookshop/el-ro.txt.zip">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Romanian-English (324,553 sentence pairs, 15.02M words) - Moses format' href="download.php?f=EUbookshop/en-ro.txt.zip">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Romanian-Spanish (293,214 sentence pairs, 15.24M words) - Moses format' href="download.php?f=EUbookshop/es-ro.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Estonian (287,885 sentence pairs, 11.90M words) - Moses format' href="download.php?f=EUbookshop/et-ro.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Romanian-Finnish (278,272 sentence pairs, 10.87M words) - Moses format' href="download.php?f=EUbookshop/fi-ro.txt.zip">0.3M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Romanian-French (254,486 sentence pairs, 12.03M words) - Moses format' href="download.php?f=EUbookshop/fr-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Romanian-Irish (63,018 sentence pairs, 2.52M words) - Moses format' href="download.php?f=EUbookshop/ga-ro.txt.zip">63.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Gaelic (50 sentence pairs, 1.76k words) - Moses format' href="download.php?f=EUbookshop/gd-ro.txt.zip">50</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Croatian (3,390 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-ro.txt.zip">3.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Hungarian (287,420 sentence pairs, 12.18M words) - Moses format' href="download.php?f=EUbookshop/hu-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Romanian-Icelandic (6,196 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/is-ro.txt.zip">6.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Italian (298,445 sentence pairs, 13.82M words) - Moses format' href="download.php?f=EUbookshop/it-ro.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Lithuanian (314,027 sentence pairs, 12.72M words) - Moses format' href="download.php?f=EUbookshop/lt-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Latvian (297,049 sentence pairs, 12.60M words) - Moses format' href="download.php?f=EUbookshop/lv-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Romanian-Macedonian (2,960 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/mk-ro.txt.zip">3.0k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Romanian-Maltese (190,510 sentence pairs, 7.11M words) - Moses format' href="download.php?f=EUbookshop/mt-ro.txt.zip">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Romanian-Bokmål, Norwegian (17,543 sentence pairs, 0.78M words) - Moses format' href="download.php?f=EUbookshop/nb-ro.txt.zip">17.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Dutch (295,165 sentence pairs, 14.31M words) - Moses format' href="download.php?f=EUbookshop/nl-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Polish (323,215 sentence pairs, 14.03M words) - Moses format' href="download.php?f=EUbookshop/pl-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Portuguese (285,819 sentence pairs, 14.37M words) - Moses format' href="download.php?f=EUbookshop/pt-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Romanian-Russian (1,215 sentence pairs, 68.78k words) - TMX format' href="download.php?f=EUbookshop/ro-ru.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Slovak (261,846 sentence pairs, 12.57M words) - TMX format' href="download.php?f=EUbookshop/ro-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Slovenian (243,728 sentence pairs, 11.38M words) - TMX format' href="download.php?f=EUbookshop/ro-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Romanian-Albanian (1,692 sentence pairs, 75.34k words) - TMX format' href="download.php?f=EUbookshop/ro-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Romanian-Serbian (1,522 sentence pairs, 66.69k words) - TMX format' href="download.php?f=EUbookshop/ro-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Swedish (250,216 sentence pairs, 12.35M words) - TMX format' href="download.php?f=EUbookshop/ro-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Swahili (13 sentence pairs, 0.39k words) - TMX format' href="download.php?f=EUbookshop/ro-sw.tmx.gz">13</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Romanian-Turkish (17,271 sentence pairs, 0.71M words) - TMX format' href="download.php?f=EUbookshop/ro-tr.tmx.gz">17.3k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.ru.gz">ru</a>
</th><td>109</td> <td>1.4M</td> <td>79.6k</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Arabic (1,045 sentence pairs, 39.02k words) - Moses format' href="download.php?f=EUbookshop/ar-ru.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Bulgarian (841 sentence pairs, 26.55k words) - Moses format' href="download.php?f=EUbookshop/bg-ru.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Czech (1,893 sentence pairs, 84.56k words) - Moses format' href="download.php?f=EUbookshop/cs-ru.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Russian-Danish (5,461 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/da-ru.txt.zip">5.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Russian-German (8,987 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EUbookshop/de-ru.txt.zip">9.0k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Russian-Greek (7,123 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/el-ru.txt.zip">7.1k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Russian-English (49,830 sentence pairs, 1.77M words) - Moses format' href="download.php?f=EUbookshop/en-ru.txt.zip">49.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Russian-Spanish (8,443 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/es-ru.txt.zip">8.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Estonian (1,884 sentence pairs, 80.36k words) - Moses format' href="download.php?f=EUbookshop/et-ru.txt.zip">1.9k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Finnish (6,463 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/fi-ru.txt.zip">6.5k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Russian-French (15,987 sentence pairs, 0.68M words) - Moses format' href="download.php?f=EUbookshop/fr-ru.txt.zip">16.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Irish (190 sentence pairs, 5.13k words) - Moses format' href="download.php?f=EUbookshop/ga-ru.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Croatian (981 sentence pairs, 36.47k words) - Moses format' href="download.php?f=EUbookshop/hr-ru.txt.zip">1.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Russian-Hungarian (2,050 sentence pairs, 88.40k words) - Moses format' href="download.php?f=EUbookshop/hu-ru.txt.zip">2.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Icelandic (480 sentence pairs, 18.03k words) - Moses format' href="download.php?f=EUbookshop/is-ru.txt.zip">0.5k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Russian-Italian (6,605 sentence pairs, 0.26M words) - Moses format' href="download.php?f=EUbookshop/it-ru.txt.zip">6.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Japanese (92 sentence pairs, 2.96k words) - Moses format' href="download.php?f=EUbookshop/ja-ru.txt.zip">92</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Lithuanian (1,911 sentence pairs, 82.14k words) - Moses format' href="download.php?f=EUbookshop/lt-ru.txt.zip">1.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Latvian (1,939 sentence pairs, 81.83k words) - Moses format' href="download.php?f=EUbookshop/lv-ru.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Macedonian (10 sentence pairs, 0.31k words) - Moses format' href="download.php?f=EUbookshop/mk-ru.txt.zip">10</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Maltese (1,145 sentence pairs, 59.21k words) - Moses format' href="download.php?f=EUbookshop/mt-ru.txt.zip">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Bokmål, Norwegian (459 sentence pairs, 18.87k words) - Moses format' href="download.php?f=EUbookshop/nb-ru.txt.zip">0.5k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Russian-Dutch (6,637 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/nl-ru.txt.zip">6.6k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Russian-Polish (2,669 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/pl-ru.txt.zip">2.7k</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Russian-Portuguese (6,515 sentence pairs, 0.26M words) - Moses format' href="download.php?f=EUbookshop/pt-ru.txt.zip">6.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Russian-Romanian (1,233 sentence pairs, 69.02k words) - Moses format' href="download.php?f=EUbookshop/ro-ru.txt.zip">1.2k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Slovak (1,831 sentence pairs, 84.14k words) - TMX format' href="download.php?f=EUbookshop/ru-sk.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Russian-Slovenian (1,589 sentence pairs, 76.01k words) - TMX format' href="download.php?f=EUbookshop/ru-sl.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Albanian (7 sentence pairs, 0.15k words) - TMX format' href="download.php?f=EUbookshop/ru-sq.tmx.gz">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Serbian (6 sentence pairs, 0.15k words) - TMX format' href="download.php?f=EUbookshop/ru-sr.tmx.gz">6</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Swedish (5,504 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/ru-sv.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Swahili (7 sentence pairs, 0.20k words) - TMX format' href="download.php?f=EUbookshop/ru-sw.tmx.gz">7</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Russian-Turkish (1,100 sentence pairs, 35.75k words) - TMX format' href="download.php?f=EUbookshop/ru-tr.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Ukrainian (255 sentence pairs, 8.56k words) - TMX format' href="download.php?f=EUbookshop/ru-uk.tmx.gz">0.3k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sh plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sh.gz">sh</a>
</th><td>2</td> <td>13.1k</td> <td>1.1k</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Bosnian (281 sentence pairs, 15.68k words) - Moses format' href="download.php?f=EUbookshop/bs-sh.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='sh-English (559 sentence pairs, 22.31k words) - Moses format' href="download.php?f=EUbookshop/en-sh.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Croatian (467 sentence pairs, 19.37k words) - Moses format' href="download.php?f=EUbookshop/hr-sh.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='sh-Albanian (593 sentence pairs, 28.04k words) - TMX format' href="download.php?f=EUbookshop/sh-sq.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Serbian (312 sentence pairs, 16.59k words) - TMX format' href="download.php?f=EUbookshop/sh-sr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sk.gz">sk</a>
</th><td>1,165</td> <td>15.5M</td> <td>0.7M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Arabic (87 sentence pairs, 2.54k words) - Moses format' href="download.php?f=EUbookshop/ar-sk.txt.zip">87</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Bulgarian (198,081 sentence pairs, 8.99M words) - Moses format' href="download.php?f=EUbookshop/bg-sk.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Bosnian (374 sentence pairs, 18.90k words) - Moses format' href="download.php?f=EUbookshop/bs-sk.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovak-Catalan (1,989 sentence pairs, 77.95k words) - Moses format' href="download.php?f=EUbookshop/ca-sk.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovak-Czech (430,464 sentence pairs, 16.78M words) - Moses format' href="download.php?f=EUbookshop/cs-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Welsh (570 sentence pairs, 15.41k words) - Moses format' href="download.php?f=EUbookshop/cy-sk.txt.zip">0.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Danish (354,815 sentence pairs, 15.49M words) - Moses format' href="download.php?f=EUbookshop/da-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-German (372,601 sentence pairs, 14.88M words) - Moses format' href="download.php?f=EUbookshop/de-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Greek (331,852 sentence pairs, 15.49M words) - Moses format' href="download.php?f=EUbookshop/el-sk.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-English (452,097 sentence pairs, 18.86M words) - Moses format' href="download.php?f=EUbookshop/en-sk.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Spanish (383,956 sentence pairs, 18.60M words) - Moses format' href="download.php?f=EUbookshop/es-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Estonian (404,099 sentence pairs, 15.10M words) - Moses format' href="download.php?f=EUbookshop/et-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Finnish (392,094 sentence pairs, 13.64M words) - Moses format' href="download.php?f=EUbookshop/fi-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-French (373,440 sentence pairs, 15.74M words) - Moses format' href="download.php?f=EUbookshop/fr-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Slovak-Irish (65,645 sentence pairs, 2.77M words) - Moses format' href="download.php?f=EUbookshop/ga-sk.txt.zip">65.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Gaelic (91 sentence pairs, 1.95k words) - Moses format' href="download.php?f=EUbookshop/gd-sk.txt.zip">91</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovak-Croatian (3,865 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-sk.txt.zip">3.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Hungarian (399,338 sentence pairs, 15.15M words) - Moses format' href="download.php?f=EUbookshop/hu-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Slovak-Icelandic (7,205 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/is-sk.txt.zip">7.2k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Italian (400,755 sentence pairs, 17.25M words) - Moses format' href="download.php?f=EUbookshop/it-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Japanese (80 sentence pairs, 2.58k words) - Moses format' href="download.php?f=EUbookshop/ja-sk.txt.zip">80</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Lithuanian (429,178 sentence pairs, 15.99M words) - Moses format' href="download.php?f=EUbookshop/lt-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Latvian (426,093 sentence pairs, 15.99M words) - Moses format' href="download.php?f=EUbookshop/lv-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovak-Macedonian (2,932 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/mk-sk.txt.zip">2.9k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Maltese (258,648 sentence pairs, 9.48M words) - Moses format' href="download.php?f=EUbookshop/mt-sk.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Slovak-Bokmål, Norwegian (19,999 sentence pairs, 0.80M words) - Moses format' href="download.php?f=EUbookshop/nb-sk.txt.zip">20.0k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Dutch (415,009 sentence pairs, 18.01M words) - Moses format' href="download.php?f=EUbookshop/nl-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Polish (425,257 sentence pairs, 17.13M words) - Moses format' href="download.php?f=EUbookshop/pl-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Portuguese (401,351 sentence pairs, 17.95M words) - Moses format' href="download.php?f=EUbookshop/pt-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Romanian (290,597 sentence pairs, 13.14M words) - Moses format' href="download.php?f=EUbookshop/ro-sk.txt.zip">0.3M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Slovak-Russian (1,909 sentence pairs, 85.52k words) - Moses format' href="download.php?f=EUbookshop/ru-sk.txt.zip">1.9k</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Slovenian (334,148 sentence pairs, 14.36M words) - TMX format' href="download.php?f=EUbookshop/sk-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Slovak-Albanian (1,584 sentence pairs, 63.66k words) - TMX format' href="download.php?f=EUbookshop/sk-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Slovak-Serbian (1,395 sentence pairs, 53.53k words) - TMX format' href="download.php?f=EUbookshop/sk-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Swedish (347,961 sentence pairs, 15.29M words) - TMX format' href="download.php?f=EUbookshop/sk-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Swahili (16 sentence pairs, 0.41k words) - TMX format' href="download.php?f=EUbookshop/sk-sw.tmx.gz">16</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovak-Turkish (17,109 sentence pairs, 0.64M words) - TMX format' href="download.php?f=EUbookshop/sk-tr.tmx.gz">17.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovak-Ukrainian (1,429 sentence pairs, 41.58k words) - TMX format' href="download.php?f=EUbookshop/sk-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sl.gz">sl</a>
</th><td>1,153</td> <td>14.1M</td> <td>0.7M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Arabic (147 sentence pairs, 4.78k words) - Moses format' href="download.php?f=EUbookshop/ar-sl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovenian-Bulgarian (184,301 sentence pairs, 7.73M words) - Moses format' href="download.php?f=EUbookshop/bg-sl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Slovenian-Bosnian (409 sentence pairs, 21.45k words) - Moses format' href="download.php?f=EUbookshop/bs-sl.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovenian-Catalan (1,910 sentence pairs, 77.75k words) - Moses format' href="download.php?f=EUbookshop/ca-sl.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Czech (399,002 sentence pairs, 15.19M words) - Moses format' href="download.php?f=EUbookshop/cs-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovenian-Welsh (530 sentence pairs, 14.76k words) - Moses format' href="download.php?f=EUbookshop/cy-sl.txt.zip">0.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Danish (328,991 sentence pairs, 14.31M words) - Moses format' href="download.php?f=EUbookshop/da-sl.txt.zip">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-German (346,782 sentence pairs, 14.03M words) - Moses format' href="download.php?f=EUbookshop/de-sl.txt.zip">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Greek (315,367 sentence pairs, 14.46M words) - Moses format' href="download.php?f=EUbookshop/el-sl.txt.zip">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-English (405,653 sentence pairs, 16.83M words) - Moses format' href="download.php?f=EUbookshop/en-sl.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-Spanish (354,039 sentence pairs, 16.72M words) - Moses format' href="download.php?f=EUbookshop/es-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Estonian (376,337 sentence pairs, 13.74M words) - Moses format' href="download.php?f=EUbookshop/et-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Finnish (361,350 sentence pairs, 12.62M words) - Moses format' href="download.php?f=EUbookshop/fi-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-French (337,028 sentence pairs, 14.78M words) - Moses format' href="download.php?f=EUbookshop/fr-sl.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Slovenian-Irish (76,084 sentence pairs, 2.82M words) - Moses format' href="download.php?f=EUbookshop/ga-sl.txt.zip">76.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Gaelic (26 sentence pairs, 0.87k words) - Moses format' href="download.php?f=EUbookshop/gd-sl.txt.zip">26</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Slovenian-Croatian (4,010 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-sl.txt.zip">4.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Hungarian (365,074 sentence pairs, 13.59M words) - Moses format' href="download.php?f=EUbookshop/hu-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Slovenian-Icelandic (7,014 sentence pairs, 0.24M words) - Moses format' href="download.php?f=EUbookshop/is-sl.txt.zip">7.0k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovenian-Italian (372,633 sentence pairs, 15.94M words) - Moses format' href="download.php?f=EUbookshop/it-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Japanese (74 sentence pairs, 2.45k words) - Moses format' href="download.php?f=EUbookshop/ja-sl.txt.zip">74</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Lithuanian (392,227 sentence pairs, 14.34M words) - Moses format' href="download.php?f=EUbookshop/lt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Slovenian-Latvian (382,894 sentence pairs, 14.53M words) - Moses format' href="download.php?f=EUbookshop/lv-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovenian-Macedonian (2,980 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/mk-sl.txt.zip">3.0k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Slovenian-Maltese (268,232 sentence pairs, 9.51M words) - Moses format' href="download.php?f=EUbookshop/mt-sl.txt.zip">0.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Slovenian-Bokmål, Norwegian (20,217 sentence pairs, 0.83M words) - Moses format' href="download.php?f=EUbookshop/nb-sl.txt.zip">20.2k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-Dutch (371,425 sentence pairs, 16.24M words) - Moses format' href="download.php?f=EUbookshop/nl-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Polish (391,301 sentence pairs, 15.32M words) - Moses format' href="download.php?f=EUbookshop/pl-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovenian-Portuguese (356,963 sentence pairs, 16.08M words) - Moses format' href="download.php?f=EUbookshop/pt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Romanian (278,179 sentence pairs, 11.93M words) - Moses format' href="download.php?f=EUbookshop/ro-sl.txt.zip">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovenian-Russian (1,652 sentence pairs, 76.89k words) - Moses format' href="download.php?f=EUbookshop/ru-sl.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Slovak (378,503 sentence pairs, 15.24M words) - Moses format' href="download.php?f=EUbookshop/sk-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Albanian (1,720 sentence pairs, 68.66k words) - TMX format' href="download.php?f=EUbookshop/sl-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Slovenian-Serbian (1,520 sentence pairs, 58.20k words) - TMX format' href="download.php?f=EUbookshop/sl-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Swedish (315,969 sentence pairs, 13.83M words) - TMX format' href="download.php?f=EUbookshop/sl-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Swahili (12 sentence pairs, 0.31k words) - TMX format' href="download.php?f=EUbookshop/sl-sw.tmx.gz">12</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovenian-Turkish (16,668 sentence pairs, 0.64M words) - TMX format' href="download.php?f=EUbookshop/sl-tr.tmx.gz">16.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovenian-Ukrainian (1,352 sentence pairs, 39.94k words) - TMX format' href="download.php?f=EUbookshop/sl-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sq.gz">sq</a>
</th><td>9</td> <td>85.1k</td> <td>3.8k</td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Bulgarian (1,494 sentence pairs, 66.34k words) - Moses format' href="download.php?f=EUbookshop/bg-sq.txt.zip">1.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Albanian-Bosnian (729 sentence pairs, 45.33k words) - Moses format' href="download.php?f=EUbookshop/bs-sq.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Czech (1,974 sentence pairs, 69.19k words) - Moses format' href="download.php?f=EUbookshop/cs-sq.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Danish (14 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/da-sq.txt.zip">14</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-German (1,897 sentence pairs, 70.35k words) - Moses format' href="download.php?f=EUbookshop/de-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Greek (1,957 sentence pairs, 74.59k words) - Moses format' href="download.php?f=EUbookshop/el-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-English (2,223 sentence pairs, 84.72k words) - Moses format' href="download.php?f=EUbookshop/en-sq.txt.zip">2.2k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Spanish (1,935 sentence pairs, 82.52k words) - Moses format' href="download.php?f=EUbookshop/es-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Estonian (1,931 sentence pairs, 63.54k words) - Moses format' href="download.php?f=EUbookshop/et-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Finnish (2,120 sentence pairs, 67.34k words) - Moses format' href="download.php?f=EUbookshop/fi-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-French (1,773 sentence pairs, 70.29k words) - Moses format' href="download.php?f=EUbookshop/fr-sq.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Irish (5 sentence pairs, 0.18k words) - Moses format' href="download.php?f=EUbookshop/ga-sq.txt.zip">5</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Albanian-Croatian (2,367 sentence pairs, 94.86k words) - Moses format' href="download.php?f=EUbookshop/hr-sq.txt.zip">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Hungarian (118 sentence pairs, 4.34k words) - Moses format' href="download.php?f=EUbookshop/hu-sq.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Italian (96 sentence pairs, 4.16k words) - Moses format' href="download.php?f=EUbookshop/it-sq.txt.zip">96</a>
</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Albanian-Lithuanian (1,736 sentence pairs, 60.78k words) - Moses format' href="download.php?f=EUbookshop/lt-sq.txt.zip">1.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Latvian (1,877 sentence pairs, 63.59k words) - Moses format' href="download.php?f=EUbookshop/lv-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Macedonian (2,057 sentence pairs, 82.36k words) - Moses format' href="download.php?f=EUbookshop/mk-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Maltese (17 sentence pairs, 0.45k words) - Moses format' href="download.php?f=EUbookshop/mt-sq.txt.zip">17</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Bokmål, Norwegian (1,445 sentence pairs, 63.98k words) - Moses format' href="download.php?f=EUbookshop/nb-sq.txt.zip">1.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Dutch (2,031 sentence pairs, 77.19k words) - Moses format' href="download.php?f=EUbookshop/nl-sq.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Polish (2,047 sentence pairs, 70.22k words) - Moses format' href="download.php?f=EUbookshop/pl-sq.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Portuguese (17 sentence pairs, 0.49k words) - Moses format' href="download.php?f=EUbookshop/pt-sq.txt.zip">17</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Romanian (1,975 sentence pairs, 79.44k words) - Moses format' href="download.php?f=EUbookshop/ro-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Russian (7 sentence pairs, 0.15k words) - Moses format' href="download.php?f=EUbookshop/ru-sq.txt.zip">7</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Albanian-sh (655 sentence pairs, 28.55k words) - Moses format' href="download.php?f=EUbookshop/sh-sq.txt.zip">0.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Slovak (1,880 sentence pairs, 68.20k words) - Moses format' href="download.php?f=EUbookshop/sk-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Slovenian (2,021 sentence pairs, 73.08k words) - Moses format' href="download.php?f=EUbookshop/sl-sq.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Albanian-Serbian (1,921 sentence pairs, 87.69k words) - TMX format' href="download.php?f=EUbookshop/sq-sr.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Swedish (1,680 sentence pairs, 66.36k words) - TMX format' href="download.php?f=EUbookshop/sq-sv.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Swahili (15 sentence pairs, 0.44k words) - TMX format' href="download.php?f=EUbookshop/sq-sw.tmx.gz">15</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Turkish (1,796 sentence pairs, 68.44k words) - TMX format' href="download.php?f=EUbookshop/sq-tr.tmx.gz">1.8k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sr.gz">sr</a>
</th><td>7</td> <td>59.1k</td> <td>3.1k</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Bulgarian (1,495 sentence pairs, 62.20k words) - Moses format' href="download.php?f=EUbookshop/bg-sr.txt.zip">1.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Serbian-Bosnian (586 sentence pairs, 33.80k words) - Moses format' href="download.php?f=EUbookshop/bs-sr.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Czech (1,849 sentence pairs, 62.57k words) - Moses format' href="download.php?f=EUbookshop/cs-sr.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Danish (4 sentence pairs, 0.12k words) - Moses format' href="download.php?f=EUbookshop/da-sr.txt.zip">4</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-German (1,621 sentence pairs, 58.19k words) - Moses format' href="download.php?f=EUbookshop/de-sr.txt.zip">1.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Greek (1,946 sentence pairs, 71.11k words) - Moses format' href="download.php?f=EUbookshop/el-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-English (1,608 sentence pairs, 59.96k words) - Moses format' href="download.php?f=EUbookshop/en-sr.txt.zip">1.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Spanish (1,762 sentence pairs, 71.65k words) - Moses format' href="download.php?f=EUbookshop/es-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Estonian (1,704 sentence pairs, 52.46k words) - Moses format' href="download.php?f=EUbookshop/et-sr.txt.zip">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Finnish (1,898 sentence pairs, 56.47k words) - Moses format' href="download.php?f=EUbookshop/fi-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-French (1,682 sentence pairs, 64.18k words) - Moses format' href="download.php?f=EUbookshop/fr-sr.txt.zip">1.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Croatian (1,923 sentence pairs, 73.33k words) - Moses format' href="download.php?f=EUbookshop/hr-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Hungarian (73 sentence pairs, 3.00k words) - Moses format' href="download.php?f=EUbookshop/hu-sr.txt.zip">73</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Italian (55 sentence pairs, 2.82k words) - Moses format' href="download.php?f=EUbookshop/it-sr.txt.zip">55</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Lithuanian (1,547 sentence pairs, 52.60k words) - Moses format' href="download.php?f=EUbookshop/lt-sr.txt.zip">1.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Serbian-Latvian (1,532 sentence pairs, 50.87k words) - Moses format' href="download.php?f=EUbookshop/lv-sr.txt.zip">1.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Macedonian (1,949 sentence pairs, 74.23k words) - Moses format' href="download.php?f=EUbookshop/mk-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Maltese (4 sentence pairs, 0.15k words) - Moses format' href="download.php?f=EUbookshop/mt-sr.txt.zip">4</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Bokmål, Norwegian (1,343 sentence pairs, 56.37k words) - Moses format' href="download.php?f=EUbookshop/nb-sr.txt.zip">1.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Dutch (1,824 sentence pairs, 66.52k words) - Moses format' href="download.php?f=EUbookshop/nl-sr.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Polish (1,921 sentence pairs, 61.95k words) - Moses format' href="download.php?f=EUbookshop/pl-sr.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Portuguese (5 sentence pairs, 0.16k words) - Moses format' href="download.php?f=EUbookshop/pt-sr.txt.zip">5</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Romanian (1,814 sentence pairs, 71.29k words) - Moses format' href="download.php?f=EUbookshop/ro-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Russian (6 sentence pairs, 0.15k words) - Moses format' href="download.php?f=EUbookshop/ru-sr.txt.zip">6</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Serbian-sh (315 sentence pairs, 16.61k words) - Moses format' href="download.php?f=EUbookshop/sh-sr.txt.zip">0.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Slovak (1,717 sentence pairs, 58.52k words) - Moses format' href="download.php?f=EUbookshop/sk-sr.txt.zip">1.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Slovenian (1,820 sentence pairs, 62.99k words) - Moses format' href="download.php?f=EUbookshop/sl-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Serbian-Albanian (2,253 sentence pairs, 92.80k words) - Moses format' href="download.php?f=EUbookshop/sq-sr.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Swedish (1,421 sentence pairs, 54.14k words) - TMX format' href="download.php?f=EUbookshop/sr-sv.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Swahili (3 sentence pairs, 0.11k words) - TMX format' href="download.php?f=EUbookshop/sr-sw.tmx.gz">3</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Turkish (1,599 sentence pairs, 58.78k words) - TMX format' href="download.php?f=EUbookshop/sr-tr.tmx.gz">1.6k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sv.gz">sv</a>
</th><td>4,033</td> <td>71.5M</td> <td>3.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Arabic (90 sentence pairs, 2.56k words) - Moses format' href="download.php?f=EUbookshop/ar-sv.txt.zip">90</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swedish-Bulgarian (199,322 sentence pairs, 9.26M words) - Moses format' href="download.php?f=EUbookshop/bg-sv.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Bosnian (385 sentence pairs, 20.10k words) - Moses format' href="download.php?f=EUbookshop/bs-sv.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Swedish-Catalan (2,101 sentence pairs, 81.50k words) - Moses format' href="download.php?f=EUbookshop/ca-sv.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Czech (386,609 sentence pairs, 15.68M words) - Moses format' href="download.php?f=EUbookshop/cs-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Welsh (562 sentence pairs, 15.56k words) - Moses format' href="download.php?f=EUbookshop/cy-sv.txt.zip">0.6k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Danish (1,744,278 sentence pairs, 76.96M words) - Moses format' href="download.php?f=EUbookshop/da-sv.txt.zip">1.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-German (1,766,771 sentence pairs, 73.53M words) - Moses format' href="download.php?f=EUbookshop/de-sv.txt.zip">1.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-Greek (1,508,832 sentence pairs, 66.40M words) - Moses format' href="download.php?f=EUbookshop/el-sv.txt.zip">1.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-English (1,915,479 sentence pairs, 83.83M words) - Moses format' href="download.php?f=EUbookshop/en-sv.txt.zip">1.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Spanish (1,736,680 sentence pairs, 85.47M words) - Moses format' href="download.php?f=EUbookshop/es-sv.txt.zip">1.7M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Swedish-Estonian (384,836 sentence pairs, 14.65M words) - Moses format' href="download.php?f=EUbookshop/et-sv.txt.zip">0.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-Finnish (1,891,118 sentence pairs, 68.80M words) - Moses format' href="download.php?f=EUbookshop/fi-sv.txt.zip">1.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-French (1,786,729 sentence pairs, 82.68M words) - Moses format' href="download.php?f=EUbookshop/fr-sv.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Swedish-Irish (86,526 sentence pairs, 3.76M words) - Moses format' href="download.php?f=EUbookshop/ga-sv.txt.zip">86.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Gaelic (37 sentence pairs, 1.00k words) - Moses format' href="download.php?f=EUbookshop/gd-sv.txt.zip">37</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Swedish-Croatian (4,013 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-sv.txt.zip">4.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swedish-Hungarian (365,031 sentence pairs, 14.31M words) - Moses format' href="download.php?f=EUbookshop/hu-sv.txt.zip">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Swedish-Icelandic (9,905 sentence pairs, 0.35M words) - Moses format' href="download.php?f=EUbookshop/is-sv.txt.zip">9.9k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Italian (1,808,996 sentence pairs, 81.56M words) - Moses format' href="download.php?f=EUbookshop/it-sv.txt.zip">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Japanese (68 sentence pairs, 1.49k words) - Moses format' href="download.php?f=EUbookshop/ja-sv.txt.zip">68</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Lithuanian (392,017 sentence pairs, 15.17M words) - Moses format' href="download.php?f=EUbookshop/lt-sv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Latvian (383,384 sentence pairs, 15.11M words) - Moses format' href="download.php?f=EUbookshop/lv-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Swedish-Macedonian (2,956 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/mk-sv.txt.zip">3.0k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Swedish-Maltese (254,247 sentence pairs, 9.68M words) - Moses format' href="download.php?f=EUbookshop/mt-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swedish-Bokmål, Norwegian (27,696 sentence pairs, 1.13M words) - Moses format' href="download.php?f=EUbookshop/nb-sv.txt.zip">27.7k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Dutch (1,888,414 sentence pairs, 85.23M words) - Moses format' href="download.php?f=EUbookshop/nl-sv.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Polish (394,947 sentence pairs, 16.57M words) - Moses format' href="download.php?f=EUbookshop/pl-sv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Portuguese (1,759,633 sentence pairs, 83.30M words) - Moses format' href="download.php?f=EUbookshop/pt-sv.txt.zip">1.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Swedish-Romanian (278,348 sentence pairs, 12.94M words) - Moses format' href="download.php?f=EUbookshop/ro-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Swedish-Russian (5,884 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/ru-sv.txt.zip">5.9k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Slovak (386,502 sentence pairs, 16.15M words) - Moses format' href="download.php?f=EUbookshop/sk-sv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Slovenian (355,571 sentence pairs, 14.67M words) - Moses format' href="download.php?f=EUbookshop/sl-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Swedish-Albanian (2,020 sentence pairs, 70.97k words) - Moses format' href="download.php?f=EUbookshop/sq-sv.txt.zip">2.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Swedish-Serbian (1,731 sentence pairs, 58.83k words) - Moses format' href="download.php?f=EUbookshop/sr-sv.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Swahili (13 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/sv-sw.tmx.gz">13</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swedish-Turkish (15,435 sentence pairs, 0.60M words) - TMX format' href="download.php?f=EUbookshop/sv-tr.tmx.gz">15.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Swedish-Ukrainian (1,451 sentence pairs, 42.67k words) - TMX format' href="download.php?f=EUbookshop/sv-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.sw.gz">sw</a>
</th><td>3</td> <td>0.3k</td> <td>18</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Bulgarian (8 sentence pairs, 0.24k words) - Moses format' href="download.php?f=EUbookshop/bg-sw.txt.zip">8</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Czech (15 sentence pairs, 0.36k words) - Moses format' href="download.php?f=EUbookshop/cs-sw.txt.zip">15</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Danish (11 sentence pairs, 0.29k words) - Moses format' href="download.php?f=EUbookshop/da-sw.txt.zip">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-German (15 sentence pairs, 0.35k words) - Moses format' href="download.php?f=EUbookshop/de-sw.txt.zip">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Greek (6 sentence pairs, 0.21k words) - Moses format' href="download.php?f=EUbookshop/el-sw.txt.zip">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-English (17 sentence pairs, 0.42k words) - Moses format' href="download.php?f=EUbookshop/en-sw.txt.zip">17</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Spanish (14 sentence pairs, 0.42k words) - Moses format' href="download.php?f=EUbookshop/es-sw.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Estonian (14 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/et-sw.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Finnish (17 sentence pairs, 0.39k words) - Moses format' href="download.php?f=EUbookshop/fi-sw.txt.zip">17</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-French (16 sentence pairs, 0.44k words) - Moses format' href="download.php?f=EUbookshop/fr-sw.txt.zip">16</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Irish (5 sentence pairs, 0.17k words) - Moses format' href="download.php?f=EUbookshop/ga-sw.txt.zip">5</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Croatian (7 sentence pairs, 0.22k words) - Moses format' href="download.php?f=EUbookshop/hr-sw.txt.zip">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Hungarian (15 sentence pairs, 0.37k words) - Moses format' href="download.php?f=EUbookshop/hu-sw.txt.zip">15</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Italian (17 sentence pairs, 0.43k words) - Moses format' href="download.php?f=EUbookshop/it-sw.txt.zip">17</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Lithuanian (17 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/lt-sw.txt.zip">17</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Latvian (14 sentence pairs, 0.31k words) - Moses format' href="download.php?f=EUbookshop/lv-sw.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Macedonian (8 sentence pairs, 0.23k words) - Moses format' href="download.php?f=EUbookshop/mk-sw.txt.zip">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Maltese (14 sentence pairs, 0.36k words) - Moses format' href="download.php?f=EUbookshop/mt-sw.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Bokmål, Norwegian (13 sentence pairs, 0.38k words) - Moses format' href="download.php?f=EUbookshop/nb-sw.txt.zip">13</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Dutch (14 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/nl-sw.txt.zip">14</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Polish (15 sentence pairs, 0.39k words) - Moses format' href="download.php?f=EUbookshop/pl-sw.txt.zip">15</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Portuguese (15 sentence pairs, 0.41k words) - Moses format' href="download.php?f=EUbookshop/pt-sw.txt.zip">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Romanian (14 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/ro-sw.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Russian (7 sentence pairs, 0.20k words) - Moses format' href="download.php?f=EUbookshop/ru-sw.txt.zip">7</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Slovak (17 sentence pairs, 0.41k words) - Moses format' href="download.php?f=EUbookshop/sk-sw.txt.zip">17</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Slovenian (12 sentence pairs, 0.31k words) - Moses format' href="download.php?f=EUbookshop/sl-sw.txt.zip">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Albanian (16 sentence pairs, 0.44k words) - Moses format' href="download.php?f=EUbookshop/sq-sw.txt.zip">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Serbian (3 sentence pairs, 0.11k words) - Moses format' href="download.php?f=EUbookshop/sr-sw.txt.zip">3</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Swedish (15 sentence pairs, 0.38k words) - Moses format' href="download.php?f=EUbookshop/sv-sw.txt.zip">15</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Turkish (14 sentence pairs, 0.32k words) - TMX format' href="download.php?f=EUbookshop/sw-tr.tmx.gz">14</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tc plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.tc.gz">tc</a>
</th><td>1</td> <td>18.3k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='tc-Danish (557 sentence pairs, 22.23k words) - Moses format' href="download.php?f=EUbookshop/da-tc.txt.zip">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-German (508 sentence pairs, 17.60k words) - Moses format' href="download.php?f=EUbookshop/de-tc.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tc-English (207 sentence pairs, 2.49k words) - Moses format' href="download.php?f=EUbookshop/en-tc.txt.zip">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-Spanish (470 sentence pairs, 20.83k words) - Moses format' href="download.php?f=EUbookshop/es-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-French (488 sentence pairs, 19.88k words) - Moses format' href="download.php?f=EUbookshop/fr-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='tc-Hungarian (614 sentence pairs, 22.68k words) - Moses format' href="download.php?f=EUbookshop/hu-tc.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-Italian (483 sentence pairs, 20.12k words) - Moses format' href="download.php?f=EUbookshop/it-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-Dutch (478 sentence pairs, 19.45k words) - Moses format' href="download.php?f=EUbookshop/nl-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.tr.gz">tr</a>
</th><td>67</td> <td>0.7M</td> <td>33.4k</td><td></td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='Turkish-Bulgarian (14,035 sentence pairs, 0.55M words) - Moses format' href="download.php?f=EUbookshop/bg-tr.txt.zip">14.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Bosnian (419 sentence pairs, 20.82k words) - Moses format' href="download.php?f=EUbookshop/bs-tr.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Czech (19,236 sentence pairs, 0.68M words) - Moses format' href="download.php?f=EUbookshop/cs-tr.txt.zip">19.2k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Turkish-Danish (12,800 sentence pairs, 0.52M words) - Moses format' href="download.php?f=EUbookshop/da-tr.txt.zip">12.8k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Turkish-German (19,074 sentence pairs, 0.74M words) - Moses format' href="download.php?f=EUbookshop/de-tr.txt.zip">19.1k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Greek (14,171 sentence pairs, 0.64M words) - Moses format' href="download.php?f=EUbookshop/el-tr.txt.zip">14.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Turkish-English (23,706 sentence pairs, 0.90M words) - Moses format' href="download.php?f=EUbookshop/en-tr.txt.zip">23.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Turkish-Spanish (19,914 sentence pairs, 0.89M words) - Moses format' href="download.php?f=EUbookshop/es-tr.txt.zip">19.9k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Turkish-Estonian (14,965 sentence pairs, 0.49M words) - Moses format' href="download.php?f=EUbookshop/et-tr.txt.zip">15.0k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Turkish-Finnish (17,164 sentence pairs, 0.54M words) - Moses format' href="download.php?f=EUbookshop/fi-tr.txt.zip">17.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Turkish-French (21,864 sentence pairs, 0.92M words) - Moses format' href="download.php?f=EUbookshop/fr-tr.txt.zip">21.9k</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Turkish-Irish (4,725 sentence pairs, 0.17M words) - Moses format' href="download.php?f=EUbookshop/ga-tr.txt.zip">4.7k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Turkish-Croatian (4,369 sentence pairs, 0.15M words) - Moses format' href="download.php?f=EUbookshop/hr-tr.txt.zip">4.4k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Turkish-Hungarian (15,602 sentence pairs, 0.55M words) - Moses format' href="download.php?f=EUbookshop/hu-tr.txt.zip">15.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Turkish-Icelandic (2,726 sentence pairs, 91.01k words) - Moses format' href="download.php?f=EUbookshop/is-tr.txt.zip">2.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Italian (16,199 sentence pairs, 0.65M words) - Moses format' href="download.php?f=EUbookshop/it-tr.txt.zip">16.2k</a>
</td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Turkish-Lithuanian (17,395 sentence pairs, 0.58M words) - Moses format' href="download.php?f=EUbookshop/lt-tr.txt.zip">17.4k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Turkish-Latvian (17,002 sentence pairs, 0.59M words) - Moses format' href="download.php?f=EUbookshop/lv-tr.txt.zip">17.0k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Turkish-Macedonian (3,443 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/mk-tr.txt.zip">3.4k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Turkish-Maltese (5,755 sentence pairs, 0.19M words) - Moses format' href="download.php?f=EUbookshop/mt-tr.txt.zip">5.8k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Turkish-Bokmål, Norwegian (11,041 sentence pairs, 0.44M words) - Moses format' href="download.php?f=EUbookshop/nb-tr.txt.zip">11.0k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Dutch (15,896 sentence pairs, 0.63M words) - Moses format' href="download.php?f=EUbookshop/nl-tr.txt.zip">15.9k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Polish (18,689 sentence pairs, 0.66M words) - Moses format' href="download.php?f=EUbookshop/pl-tr.txt.zip">18.7k</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Turkish-Portuguese (14,821 sentence pairs, 0.62M words) - Moses format' href="download.php?f=EUbookshop/pt-tr.txt.zip">14.8k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Turkish-Romanian (18,462 sentence pairs, 0.72M words) - Moses format' href="download.php?f=EUbookshop/ro-tr.txt.zip">18.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Turkish-Russian (1,146 sentence pairs, 36.26k words) - Moses format' href="download.php?f=EUbookshop/ru-tr.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Slovak (18,197 sentence pairs, 0.66M words) - Moses format' href="download.php?f=EUbookshop/sk-tr.txt.zip">18.2k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Slovenian (17,741 sentence pairs, 0.65M words) - Moses format' href="download.php?f=EUbookshop/sl-tr.txt.zip">17.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Turkish-Albanian (2,126 sentence pairs, 73.16k words) - Moses format' href="download.php?f=EUbookshop/sq-tr.txt.zip">2.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Turkish-Serbian (1,946 sentence pairs, 63.95k words) - Moses format' href="download.php?f=EUbookshop/sr-tr.txt.zip">1.9k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Turkish-Swedish (16,485 sentence pairs, 0.61M words) - Moses format' href="download.php?f=EUbookshop/sv-tr.txt.zip">16.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Swahili (14 sentence pairs, 0.32k words) - Moses format' href="download.php?f=EUbookshop/sw-tr.txt.zip">14</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.uk.gz">uk</a>
</th><td>6</td> <td>41.3k</td> <td>2.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Czech (1,506 sentence pairs, 42.86k words) - Moses format' href="download.php?f=EUbookshop/cs-uk.txt.zip">1.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Welsh (359 sentence pairs, 10.54k words) - Moses format' href="download.php?f=EUbookshop/cy-uk.txt.zip">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Danish (1,399 sentence pairs, 42.12k words) - Moses format' href="download.php?f=EUbookshop/da-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-German (1,627 sentence pairs, 49.30k words) - Moses format' href="download.php?f=EUbookshop/de-uk.txt.zip">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ukrainian-Greek (764 sentence pairs, 28.74k words) - Moses format' href="download.php?f=EUbookshop/el-uk.txt.zip">0.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Ukrainian-English (1,793 sentence pairs, 56.35k words) - Moses format' href="download.php?f=EUbookshop/en-uk.txt.zip">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Spanish (1,419 sentence pairs, 47.19k words) - Moses format' href="download.php?f=EUbookshop/es-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Estonian (1,491 sentence pairs, 38.70k words) - Moses format' href="download.php?f=EUbookshop/et-uk.txt.zip">1.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Finnish (1,613 sentence pairs, 40.70k words) - Moses format' href="download.php?f=EUbookshop/fi-uk.txt.zip">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Ukrainian-French (1,629 sentence pairs, 54.53k words) - Moses format' href="download.php?f=EUbookshop/fr-uk.txt.zip">1.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Croatian (314 sentence pairs, 8.26k words) - Moses format' href="download.php?f=EUbookshop/hr-uk.txt.zip">0.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Hungarian (1,518 sentence pairs, 42.31k words) - Moses format' href="download.php?f=EUbookshop/hu-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Italian (1,541 sentence pairs, 48.85k words) - Moses format' href="download.php?f=EUbookshop/it-uk.txt.zip">1.5k</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Lithuanian (1,506 sentence pairs, 39.32k words) - Moses format' href="download.php?f=EUbookshop/lt-uk.txt.zip">1.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Latvian (1,494 sentence pairs, 40.15k words) - Moses format' href="download.php?f=EUbookshop/lv-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Maltese (651 sentence pairs, 17.49k words) - Moses format' href="download.php?f=EUbookshop/mt-uk.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Dutch (1,532 sentence pairs, 48.26k words) - Moses format' href="download.php?f=EUbookshop/nl-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Polish (1,571 sentence pairs, 44.90k words) - Moses format' href="download.php?f=EUbookshop/pl-uk.txt.zip">1.6k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Portuguese (1,517 sentence pairs, 50.40k words) - Moses format' href="download.php?f=EUbookshop/pt-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Russian (255 sentence pairs, 8.56k words) - Moses format' href="download.php?f=EUbookshop/ru-uk.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Slovak (1,461 sentence pairs, 41.81k words) - Moses format' href="download.php?f=EUbookshop/sk-uk.txt.zip">1.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Slovenian (1,386 sentence pairs, 40.13k words) - Moses format' href="download.php?f=EUbookshop/sl-uk.txt.zip">1.4k</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Swedish (1,484 sentence pairs, 42.95k words) - Moses format' href="download.php?f=EUbookshop/sv-uk.txt.zip">1.5k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=EUbookshop/mono/EUbookshop.raw.zh.gz">zh</a>
</th><td>18</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>
