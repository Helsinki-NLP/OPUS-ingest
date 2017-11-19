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
<div class="header"><?php include("header.php"); ?></div><h1>EUbookshop</h1>Corpus of documents from the EU bookshop

<hr>

<h2>Important Note</h2>

<p>
A new version of the corpus is in progress! All files will gradually be replaced by new ones until the conversion is finished. The old TMX and Moses files will NOT be available anymore! For reference, I will keep the raw (untokenized) XML files and the sentence alignment files from the old version. You can download a tar-ball with those files from <a href="download.php?f=EUbookshop_v1.tar.gz">this URL</a> (12GB).
</p>

<hr>


<p>48 languages, 760 bitexts<br>total number of files: 128,031<br>total number of tokens: 2.92G<br>total number of sentence fragments: 172.60M<br><p>Please <a href="http://opus.nlpl.eu/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)
<br/>
<br/>
Source: <a href="http://bookshop.europa.eu">http://bookshop.europa.eu</a>. Thanks to <a href="http://www.tilde.com">Tilde</a> for collecting the data, within the EU ICT PSP project <a href="https://www.letsmt.eu/">LetsMT!</a>
<br/>

<h3>Download</h3>
<!--
Complete download (XML): <a href="download.php?f=EUbookshop/EUbookshop0.1.tar.gz">EUbookshop0.1.tar.gz</a> (57G
)<br>
-->
<p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
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
<td></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="EUbookshop/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="EUbookshop/ar-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Maltese (sample file)" href="EUbookshop/ar-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="EUbookshop/ar-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="EUbookshop/ar-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="EUbookshop/ar-pt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Romanian (sample file)" href="EUbookshop/ar-ro_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="EUbookshop/ar-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="EUbookshop/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="EUbookshop/ar-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Swedish (sample file)" href="EUbookshop/ar-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="EUbookshop/ar-zh_sample.html">view</a></td><th>ar</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/be.tar.gz">be</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="EUbookshop/be-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Russian (sample file)" href="EUbookshop/be-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/bg.tar.gz">bg</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (3 aligned documents, 16 links, 9.0k tokens)" href="download.php?f=EUbookshop/xml/ar-bg.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="EUbookshop/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="EUbookshop/bg-ca_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="EUbookshop/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Welsh (sample file)" href="EUbookshop/bg-cy_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="EUbookshop/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="EUbookshop/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="EUbookshop/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="EUbookshop/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="EUbookshop/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="EUbookshop/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="EUbookshop/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="EUbookshop/bg-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Irish (sample file)" href="EUbookshop/bg-ga_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Gaelic (sample file)" href="EUbookshop/bg-gd_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="EUbookshop/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="EUbookshop/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="EUbookshop/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="EUbookshop/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="EUbookshop/bg-ja_sample.html">view</a></td><th>bg</th>
<td></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="EUbookshop/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="EUbookshop/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="EUbookshop/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Maltese (sample file)" href="EUbookshop/bg-mt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="EUbookshop/bg-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="EUbookshop/bg-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="EUbookshop/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="EUbookshop/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="EUbookshop/bg-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="EUbookshop/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="EUbookshop/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="EUbookshop/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="EUbookshop/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="EUbookshop/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swahili (sample file)" href="EUbookshop/bg-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="EUbookshop/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="EUbookshop/bg-zh_sample.html">view</a></td><th>bg</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/bs.tar.gz">bs</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (0.4k links, 16.9k tokens)" href="download.php?f=EUbookshop/xml/bg-bs.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="EUbookshop/bs-cs_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="EUbookshop/bs-de_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="EUbookshop/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="EUbookshop/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="EUbookshop/bs-es_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="EUbookshop/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="EUbookshop/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="EUbookshop/bs-fr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="EUbookshop/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="EUbookshop/bs-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="EUbookshop/bs-it_sample.html">view</a></td><td></td><th>bs</th>
<td></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="EUbookshop/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="EUbookshop/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="EUbookshop/bs-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Dutch (sample file)" href="EUbookshop/bs-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Polish (sample file)" href="EUbookshop/bs-pl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="EUbookshop/bs-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-sh (sample file)" href="EUbookshop/bs-sh_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="EUbookshop/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="EUbookshop/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="EUbookshop/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="EUbookshop/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swedish (sample file)" href="EUbookshop/bs-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>bs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ca.tar.gz">ca</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (19 aligned documents, 0.9k links, 51.3k tokens)" href="download.php?f=EUbookshop/xml/bg-ca.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Catalan-Czech (sample file)" href="EUbookshop/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Welsh (sample file)" href="EUbookshop/ca-cy_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="EUbookshop/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="EUbookshop/ca-de_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="EUbookshop/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="EUbookshop/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="EUbookshop/ca-es_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="EUbookshop/ca-et_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="EUbookshop/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="EUbookshop/ca-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Irish (sample file)" href="EUbookshop/ca-ga_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Gaelic (sample file)" href="EUbookshop/ca-gd_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="EUbookshop/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="EUbookshop/ca-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="EUbookshop/ca-it_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="EUbookshop/ca-ja_sample.html">view</a></td><th>ca</th>
<td></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="EUbookshop/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="EUbookshop/ca-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Maltese (sample file)" href="EUbookshop/ca-mt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Dutch (sample file)" href="EUbookshop/ca-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Polish (sample file)" href="EUbookshop/ca-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="EUbookshop/ca-pt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="EUbookshop/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Russian (sample file)" href="EUbookshop/ca-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="EUbookshop/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="EUbookshop/ca-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Swedish (sample file)" href="EUbookshop/ca-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="EUbookshop/ca-uk_sample.html">view</a></td><td></td><th>ca</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cn.tar.gz">cn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="cn-Danish (sample file)" href="EUbookshop/cn-da_sample.html">view</a></td><td><a rel="nofollow" title="cn-German (sample file)" href="EUbookshop/cn-de_sample.html">view</a></td><td><a rel="nofollow" title="cn-Greek (sample file)" href="EUbookshop/cn-el_sample.html">view</a></td><td><a rel="nofollow" title="cn-English (sample file)" href="EUbookshop/cn-en_sample.html">view</a></td><td><a rel="nofollow" title="cn-Spanish (sample file)" href="EUbookshop/cn-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cn-French (sample file)" href="EUbookshop/cn-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Italian (sample file)" href="EUbookshop/cn-it_sample.html">view</a></td><td></td><th>cn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Dutch (sample file)" href="EUbookshop/cn-nl_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cn-Portuguese (sample file)" href="EUbookshop/cn-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cn</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cs.tar.gz">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (4 aligned documents, 0.1k links, 27.5k tokens)" href="download.php?f=EUbookshop/xml/ar-cs.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (703 aligned documents, 0.2M links, 10.5M tokens)" href="download.php?f=EUbookshop/xml/bg-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (0.4k links, 64.8k tokens)" href="download.php?f=EUbookshop/xml/bs-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (20 aligned documents, 1.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-cs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Czech-Welsh (sample file)" href="EUbookshop/cs-cy_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Danish (sample file)" href="EUbookshop/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="EUbookshop/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="EUbookshop/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="EUbookshop/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="EUbookshop/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="EUbookshop/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="EUbookshop/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="EUbookshop/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="EUbookshop/cs-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Irish (sample file)" href="EUbookshop/cs-ga_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Gaelic (sample file)" href="EUbookshop/cs-gd_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="EUbookshop/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="EUbookshop/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="EUbookshop/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="EUbookshop/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="EUbookshop/cs-ja_sample.html">view</a></td><th>cs</th>
<td></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="EUbookshop/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="EUbookshop/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="EUbookshop/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Maltese (sample file)" href="EUbookshop/cs-mt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="EUbookshop/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="EUbookshop/cs-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="EUbookshop/cs-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="EUbookshop/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="EUbookshop/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="EUbookshop/cs-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="EUbookshop/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="EUbookshop/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="EUbookshop/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="EUbookshop/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="EUbookshop/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swahili (sample file)" href="EUbookshop/cs-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="EUbookshop/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="EUbookshop/cs-zh_sample.html">view</a></td><th>cs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/cy.tar.gz">cy</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Bulgarian' (12.2k tokens)" href="download.php?f=EUbookshop/xml/bg-cy.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Catalan' (12.2k tokens)" href="download.php?f=EUbookshop/xml/ca-cy.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Welsh-Czech' (0.6k links, 21.4k tokens)" href="download.php?f=EUbookshop/xml/cs-cy.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Welsh-Danish (sample file)" href="EUbookshop/cy-da_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-German (sample file)" href="EUbookshop/cy-de_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Greek (sample file)" href="EUbookshop/cy-el_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="EUbookshop/cy-en_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Spanish (sample file)" href="EUbookshop/cy-es_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Estonian (sample file)" href="EUbookshop/cy-et_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Finnish (sample file)" href="EUbookshop/cy-fi_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-French (sample file)" href="EUbookshop/cy-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Irish (sample file)" href="EUbookshop/cy-ga_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Croatian (sample file)" href="EUbookshop/cy-hr_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Hungarian (sample file)" href="EUbookshop/cy-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Italian (sample file)" href="EUbookshop/cy-it_sample.html">view</a></td><td></td><th>cy</th>
<td></td><td><a rel="nofollow" title="Welsh-Lithuanian (sample file)" href="EUbookshop/cy-lt_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Latvian (sample file)" href="EUbookshop/cy-lv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Dutch (sample file)" href="EUbookshop/cy-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Polish (sample file)" href="EUbookshop/cy-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Portuguese (sample file)" href="EUbookshop/cy-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Slovak (sample file)" href="EUbookshop/cy-sk_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Slovenian (sample file)" href="EUbookshop/cy-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Swedish (sample file)" href="EUbookshop/cy-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Ukrainian (sample file)" href="EUbookshop/cy-uk_sample.html">view</a></td><td></td><th>cy</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/da.tar.gz">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Arabic' (8 aligned documents, 0.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ar-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (694 aligned documents, 0.2M links, 10.0M tokens)" href="download.php?f=EUbookshop/xml/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (28 aligned documents, 2.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-cn' (18.7k tokens)" href="download.php?f=EUbookshop/xml/cn-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (1,107 aligned documents, 0.4M links, 29.1M tokens)" href="download.php?f=EUbookshop/xml/cs-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Welsh' (0.4k links, 21.5k tokens)" href="download.php?f=EUbookshop/xml/cy-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="EUbookshop/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="EUbookshop/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="EUbookshop/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="EUbookshop/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="EUbookshop/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="EUbookshop/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="EUbookshop/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="EUbookshop/da-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Irish (sample file)" href="EUbookshop/da-ga_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Gaelic (sample file)" href="EUbookshop/da-gd_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="EUbookshop/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="EUbookshop/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="EUbookshop/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="EUbookshop/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="EUbookshop/da-ja_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Luxembourgish (sample file)" href="EUbookshop/da-lb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="EUbookshop/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="EUbookshop/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="EUbookshop/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Maltese (sample file)" href="EUbookshop/da-mt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="EUbookshop/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="EUbookshop/da-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="EUbookshop/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-po (sample file)" href="EUbookshop/da-po_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="EUbookshop/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="EUbookshop/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="EUbookshop/da-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="EUbookshop/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="EUbookshop/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="EUbookshop/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="EUbookshop/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="EUbookshop/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swahili (sample file)" href="EUbookshop/da-sw_sample.html">view</a></td><td><a rel="nofollow" title="Danish-tc (sample file)" href="EUbookshop/da-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="EUbookshop/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="EUbookshop/da-zh_sample.html">view</a></td><th>da</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (10 aligned documents, 0.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ar-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (725 aligned documents, 0.2M links, 10.4M tokens)" href="download.php?f=EUbookshop/xml/bg-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (0.4k links, 68.3k tokens)" href="download.php?f=EUbookshop/xml/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (30 aligned documents, 2.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-cn' (20.6k tokens)" href="download.php?f=EUbookshop/xml/cn-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (1,153 aligned documents, 0.5M links, 31.1M tokens)" href="download.php?f=EUbookshop/xml/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Welsh' (0.6k links, 22.2k tokens)" href="download.php?f=EUbookshop/xml/cy-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (6,880 aligned documents, 5.2M links, 405.4M tokens)" href="download.php?f=EUbookshop/xml/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="EUbookshop/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="EUbookshop/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="EUbookshop/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="EUbookshop/de-et_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="EUbookshop/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EUbookshop/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="EUbookshop/de-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="German-Irish (sample file)" href="EUbookshop/de-ga_sample.html">view</a></td><td><a rel="nofollow" title="German-Gaelic (sample file)" href="EUbookshop/de-gd_sample.html">view</a></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="EUbookshop/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="EUbookshop/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="EUbookshop/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="EUbookshop/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="EUbookshop/de-ja_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Luxembourgish (sample file)" href="EUbookshop/de-lb_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="EUbookshop/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="EUbookshop/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="EUbookshop/de-mk_sample.html">view</a></td><td><a rel="nofollow" title="German-Maltese (sample file)" href="EUbookshop/de-mt_sample.html">view</a></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="EUbookshop/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="EUbookshop/de-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="EUbookshop/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-po (sample file)" href="EUbookshop/de-po_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="EUbookshop/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="EUbookshop/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="EUbookshop/de-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="EUbookshop/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="EUbookshop/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Albanian (sample file)" href="EUbookshop/de-sq_sample.html">view</a></td><td><a rel="nofollow" title="German-Serbian (sample file)" href="EUbookshop/de-sr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="EUbookshop/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Swahili (sample file)" href="EUbookshop/de-sw_sample.html">view</a></td><td><a rel="nofollow" title="German-tc (sample file)" href="EUbookshop/de-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="EUbookshop/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="EUbookshop/de-zh_sample.html">view</a></td><th>de</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (5 aligned documents, 0.1k links, 14.8k tokens)" href="download.php?f=EUbookshop/xml/ar-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (692 aligned documents, 0.2M links, 13.1M tokens)" href="download.php?f=EUbookshop/xml/bg-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (0.4k links, 77.5k tokens)" href="download.php?f=EUbookshop/xml/bs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (30 aligned documents, 2.7k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-cn' (22.3k tokens)" href="download.php?f=EUbookshop/xml/cn-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (1,118 aligned documents, 0.4M links, 33.7M tokens)" href="download.php?f=EUbookshop/xml/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Welsh' (2 aligned documents, 0.5k links, 38.4k tokens)" href="download.php?f=EUbookshop/xml/cy-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (6,116 aligned documents, 3.8M links, 365.8M tokens)" href="download.php?f=EUbookshop/xml/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (6,284 aligned documents, 4.4M links, 375.7M tokens)" href="download.php?f=EUbookshop/xml/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="EUbookshop/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="EUbookshop/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="EUbookshop/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="EUbookshop/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="EUbookshop/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="EUbookshop/el-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Irish (sample file)" href="EUbookshop/el-ga_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Gaelic (sample file)" href="EUbookshop/el-gd_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="EUbookshop/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="EUbookshop/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="EUbookshop/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="EUbookshop/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="EUbookshop/el-ja_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Luxembourgish (sample file)" href="EUbookshop/el-lb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="EUbookshop/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="EUbookshop/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="EUbookshop/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="EUbookshop/el-mt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="EUbookshop/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="EUbookshop/el-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="EUbookshop/el-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="EUbookshop/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="EUbookshop/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="EUbookshop/el-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="EUbookshop/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="EUbookshop/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="EUbookshop/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="EUbookshop/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="EUbookshop/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="EUbookshop/el-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="EUbookshop/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="EUbookshop/el-zh_sample.html">view</a></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (30 aligned documents, 1.7k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (6 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (740 aligned documents, 0.2M links, 13.0M tokens)" href="download.php?f=EUbookshop/xml/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (4 aligned documents, 0.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (35 aligned documents, 4.3k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cn' (23.7k tokens)" href="download.php?f=EUbookshop/xml/cn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (1,182 aligned documents, 0.5M links, 35.2M tokens)" href="download.php?f=EUbookshop/xml/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/cy-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (7,006 aligned documents, 5.2M links, 438.1M tokens)" href="download.php?f=EUbookshop/xml/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (15,373 aligned documents, 10.2M links, 731.4M tokens)" href="download.php?f=EUbookshop/xml/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (6,421 aligned documents, 4.3M links, 406.5M tokens)" href="download.php?f=EUbookshop/xml/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="EUbookshop/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="EUbookshop/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="EUbookshop/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EUbookshop/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="EUbookshop/en-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="EUbookshop/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Gaelic (sample file)" href="EUbookshop/en-gd_sample.html">view</a></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="EUbookshop/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="EUbookshop/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="EUbookshop/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="EUbookshop/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="EUbookshop/en-ja_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Luxembourgish (sample file)" href="EUbookshop/en-lb_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="EUbookshop/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="EUbookshop/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="EUbookshop/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="EUbookshop/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="EUbookshop/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="EUbookshop/en-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="EUbookshop/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-po (sample file)" href="EUbookshop/en-po_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="EUbookshop/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="EUbookshop/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="EUbookshop/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-sh (sample file)" href="EUbookshop/en-sh_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="EUbookshop/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="EUbookshop/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="EUbookshop/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="EUbookshop/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="EUbookshop/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Swahili (sample file)" href="EUbookshop/en-sw_sample.html">view</a></td><td><a rel="nofollow" title="English-tc (sample file)" href="EUbookshop/en-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="EUbookshop/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="EUbookshop/en-zh_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (7 aligned documents, 0.2k links, 49.7k tokens)" href="download.php?f=EUbookshop/xml/ar-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (714 aligned documents, 0.2M links, 12.1M tokens)" href="download.php?f=EUbookshop/xml/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (0.4k links, 79.1k tokens)" href="download.php?f=EUbookshop/xml/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (34 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-cn' (21.1k tokens)" href="download.php?f=EUbookshop/xml/cn-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (1,152 aligned documents, 0.4M links, 33.6M tokens)" href="download.php?f=EUbookshop/xml/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Welsh' (0.5k links, 21.8k tokens)" href="download.php?f=EUbookshop/xml/cy-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (6,064 aligned documents, 4.0M links, 346.0M tokens)" href="download.php?f=EUbookshop/xml/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (7,345 aligned documents, 5.2M links, 403.0M tokens)" href="download.php?f=EUbookshop/xml/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (6,018 aligned documents, 4.0M links, 372.5M tokens)" href="download.php?f=EUbookshop/xml/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (7,637 aligned documents, 5.5M links, 438.6M tokens)" href="download.php?f=EUbookshop/xml/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="EUbookshop/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="EUbookshop/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="EUbookshop/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="EUbookshop/es-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Irish (sample file)" href="EUbookshop/es-ga_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Gaelic (sample file)" href="EUbookshop/es-gd_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="EUbookshop/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="EUbookshop/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="EUbookshop/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="EUbookshop/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="EUbookshop/es-ja_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Luxembourgish (sample file)" href="EUbookshop/es-lb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="EUbookshop/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="EUbookshop/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Macedonian (sample file)" href="EUbookshop/es-mk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="EUbookshop/es-mt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="EUbookshop/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="EUbookshop/es-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="EUbookshop/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-po (sample file)" href="EUbookshop/es-po_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="EUbookshop/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="EUbookshop/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="EUbookshop/es-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="EUbookshop/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="EUbookshop/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Albanian (sample file)" href="EUbookshop/es-sq_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Serbian (sample file)" href="EUbookshop/es-sr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="EUbookshop/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="EUbookshop/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-tc (sample file)" href="EUbookshop/es-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="EUbookshop/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="EUbookshop/es-zh_sample.html">view</a></td><th>es</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/et.tar.gz">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (4 aligned documents, 0.1k links, 9.0k tokens)" href="download.php?f=EUbookshop/xml/ar-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (696 aligned documents, 0.2M links, 0 tokens)" href="download.php?f=EUbookshop/xml/bg-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (0.4k links, 16.9k tokens)" href="download.php?f=EUbookshop/xml/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (20 aligned documents, 1.8k links, 59.1k tokens)" href="download.php?f=EUbookshop/xml/ca-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (1,123 aligned documents, 0.4M links, 14.6M tokens)" href="download.php?f=EUbookshop/xml/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Welsh' (0.5k links, 12.2k tokens)" href="download.php?f=EUbookshop/xml/cy-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (1,096 aligned documents, 0.4M links, 13.9M tokens)" href="download.php?f=EUbookshop/xml/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (1,113 aligned documents, 0.4M links, 14.5M tokens)" href="download.php?f=EUbookshop/xml/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (1,093 aligned documents, 0.4M links, 18.0M tokens)" href="download.php?f=EUbookshop/xml/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (1,140 aligned documents, 0.5M links, 17.8M tokens)" href="download.php?f=EUbookshop/xml/en-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (1,115 aligned documents, 0.4M links, 16.8M tokens)" href="download.php?f=EUbookshop/xml/es-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="EUbookshop/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="EUbookshop/et-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Irish (sample file)" href="EUbookshop/et-ga_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Gaelic (sample file)" href="EUbookshop/et-gd_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="EUbookshop/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="EUbookshop/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="EUbookshop/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="EUbookshop/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="EUbookshop/et-ja_sample.html">view</a></td><th>et</th>
<td></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="EUbookshop/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="EUbookshop/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="EUbookshop/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Maltese (sample file)" href="EUbookshop/et-mt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="EUbookshop/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="EUbookshop/et-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="EUbookshop/et-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="EUbookshop/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="EUbookshop/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="EUbookshop/et-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="EUbookshop/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="EUbookshop/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="EUbookshop/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="EUbookshop/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="EUbookshop/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swahili (sample file)" href="EUbookshop/et-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="EUbookshop/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="EUbookshop/et-zh_sample.html">view</a></td><th>et</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fi.tar.gz">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (5 aligned documents, 0.1k links, 25.6k tokens)" href="download.php?f=EUbookshop/xml/ar-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (688 aligned documents, 0.2M links, 8.7M tokens)" href="download.php?f=EUbookshop/xml/bg-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (0.4k links, 56.9k tokens)" href="download.php?f=EUbookshop/xml/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (27 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (1,108 aligned documents, 0.4M links, 26.2M tokens)" href="download.php?f=EUbookshop/xml/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Welsh' (0.6k links, 19.9k tokens)" href="download.php?f=EUbookshop/xml/cy-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (3,924 aligned documents, 1.9M links, 130.1M tokens)" href="download.php?f=EUbookshop/xml/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (3,972 aligned documents, 2.0M links, 132.2M tokens)" href="download.php?f=EUbookshop/xml/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (3,858 aligned documents, 1.8M links, 143.8M tokens)" href="download.php?f=EUbookshop/xml/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (4,026 aligned documents, 2.2M links, 148.6M tokens)" href="download.php?f=EUbookshop/xml/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (3,969 aligned documents, 1.9M links, 142.5M tokens)" href="download.php?f=EUbookshop/xml/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (1,103 aligned documents, 0.4M links, 11.7M tokens)" href="download.php?f=EUbookshop/xml/et-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="EUbookshop/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-French (sample file)" href="EUbookshop/fi-fr_BE_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Irish (sample file)" href="EUbookshop/fi-ga_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Gaelic (sample file)" href="EUbookshop/fi-gd_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="EUbookshop/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="EUbookshop/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="EUbookshop/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="EUbookshop/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="EUbookshop/fi-ja_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Luxembourgish (sample file)" href="EUbookshop/fi-lb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="EUbookshop/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="EUbookshop/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="EUbookshop/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Maltese (sample file)" href="EUbookshop/fi-mt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="EUbookshop/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="EUbookshop/fi-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="EUbookshop/fi-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="EUbookshop/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="EUbookshop/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="EUbookshop/fi-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="EUbookshop/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="EUbookshop/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="EUbookshop/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="EUbookshop/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="EUbookshop/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swahili (sample file)" href="EUbookshop/fi-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="EUbookshop/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="EUbookshop/fi-zh_sample.html">view</a></td><th>fi</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (29 aligned documents, 1.3k links, 59.9k tokens)" href="download.php?f=EUbookshop/xml/ar-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (720 aligned documents, 0.2M links, 0 tokens)" href="download.php?f=EUbookshop/xml/bg-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (0.4k links, 16.9k tokens)" href="download.php?f=EUbookshop/xml/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (32 aligned documents, 3.6k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-cn' (0 tokens)" href="download.php?f=EUbookshop/xml/cn-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (1,144 aligned documents, 0.4M links, 14.4M tokens)" href="download.php?f=EUbookshop/xml/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Welsh' (0.6k links, 12.2k tokens)" href="download.php?f=EUbookshop/xml/cy-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (6,801 aligned documents, 4.7M links, 181.0M tokens)" href="download.php?f=EUbookshop/xml/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (14,980 aligned documents, 9.5M links, 314.2M tokens)" href="download.php?f=EUbookshop/xml/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (6,302 aligned documents, 4.3M links, 202.0M tokens)" href="download.php?f=EUbookshop/xml/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (16,947 aligned documents, 11.6M links, 415.1M tokens)" href="download.php?f=EUbookshop/xml/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (7,514 aligned documents, 5.3M links, 212.2M tokens)" href="download.php?f=EUbookshop/xml/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (1,104 aligned documents, 0.4M links, 0 tokens)" href="download.php?f=EUbookshop/xml/et-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (3,982 aligned documents, 2.0M links, 59.9M tokens)" href="download.php?f=EUbookshop/xml/fi-fr.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="French-Irish (sample file)" href="EUbookshop/fr-ga_sample.html">view</a></td><td><a rel="nofollow" title="French-Gaelic (sample file)" href="EUbookshop/fr-gd_sample.html">view</a></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="EUbookshop/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="EUbookshop/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="EUbookshop/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="EUbookshop/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="EUbookshop/fr-ja_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Luxembourgish (sample file)" href="EUbookshop/fr-lb_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="EUbookshop/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="EUbookshop/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="EUbookshop/fr-mk_sample.html">view</a></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="EUbookshop/fr-mt_sample.html">view</a></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EUbookshop/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-po (sample file)" href="EUbookshop/fr-po_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="EUbookshop/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="EUbookshop/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="EUbookshop/fr-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="EUbookshop/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="EUbookshop/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="EUbookshop/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Serbian (sample file)" href="EUbookshop/fr-sr_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="EUbookshop/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Swahili (sample file)" href="EUbookshop/fr-sw_sample.html">view</a></td><td><a rel="nofollow" title="French-tc (sample file)" href="EUbookshop/fr-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="EUbookshop/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="EUbookshop/fr-zh_sample.html">view</a></td><th>fr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/fr_BE.tar.gz">fr_BE</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (67 links, 1.8k tokens)" href="download.php?f=EUbookshop/xml/cs-fr_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (2 aligned documents, 71 links, 1.8k tokens)" href="download.php?f=EUbookshop/xml/da-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (2 aligned documents, 95 links, 2.2k tokens)" href="download.php?f=EUbookshop/xml/de-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (2 aligned documents, 0.1k links, 2.7k tokens)" href="download.php?f=EUbookshop/xml/el-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (2 aligned documents, 91 links, 2.8k tokens)" href="download.php?f=EUbookshop/xml/en-fr_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (2 aligned documents, 96 links, 2.5k tokens)" href="download.php?f=EUbookshop/xml/es-fr_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (2 aligned documents, 84 links, 1.7k tokens)" href="download.php?f=EUbookshop/xml/fi-fr_BE.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="French-Irish (sample file)" href="EUbookshop/fr_BE-ga_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Italian (sample file)" href="EUbookshop/fr_BE-it_sample.html">view</a></td><td></td><th>fr_BE</th>
<td><a rel="nofollow" title="French-Luxembourgish (sample file)" href="EUbookshop/fr_BE-lb_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="EUbookshop/fr_BE-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="EUbookshop/fr_BE-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="EUbookshop/fr_BE-mt_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="EUbookshop/fr_BE-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="EUbookshop/fr_BE-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="EUbookshop/fr_BE-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="EUbookshop/fr_BE-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="EUbookshop/fr_BE-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="EUbookshop/fr_BE-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>fr_BE</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ga.tar.gz">ga</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Arabic' (16 links, 1.5k tokens)" href="download.php?f=EUbookshop/xml/ar-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Bulgarian' (189 aligned documents, 61.2k links, 2.0M tokens)" href="download.php?f=EUbookshop/xml/bg-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Catalan' (15 aligned documents, 0.1k links, 10.1k tokens)" href="download.php?f=EUbookshop/xml/ca-ga.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Czech' (195 aligned documents, 85.2k links, 4.0M tokens)" href="download.php?f=EUbookshop/xml/cs-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Welsh' (0.4k links, 20.7k tokens)" href="download.php?f=EUbookshop/xml/cy-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Danish' (226 aligned documents, 0.1M links, 6.9M tokens)" href="download.php?f=EUbookshop/xml/da-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-German' (230 aligned documents, 0.1M links, 7.7M tokens)" href="download.php?f=EUbookshop/xml/de-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Greek' (224 aligned documents, 0.1M links, 8.4M tokens)" href="download.php?f=EUbookshop/xml/el-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (244 aligned documents, 0.2M links, 8.6M tokens)" href="download.php?f=EUbookshop/xml/en-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Spanish' (222 aligned documents, 0.1M links, 6.7M tokens)" href="download.php?f=EUbookshop/xml/es-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Estonian' (191 aligned documents, 72.0k links, 2.3M tokens)" href="download.php?f=EUbookshop/xml/et-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-Finnish' (208 aligned documents, 93.0k links, 4.7M tokens)" href="download.php?f=EUbookshop/xml/fi-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (226 aligned documents, 0.1M links, 4.2M tokens)" href="download.php?f=EUbookshop/xml/fr-ga.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (2 aligned documents, 2 links, 7 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-ga.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Irish-Gaelic (sample file)" href="EUbookshop/ga-gd_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Croatian (sample file)" href="EUbookshop/ga-hr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Hungarian (sample file)" href="EUbookshop/ga-hu_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Icelandic (sample file)" href="EUbookshop/ga-is_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Italian (sample file)" href="EUbookshop/ga-it_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Japanese (sample file)" href="EUbookshop/ga-ja_sample.html">view</a></td><th>ga</th>
<td><a rel="nofollow" title="Irish-Luxembourgish (sample file)" href="EUbookshop/ga-lb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Lithuanian (sample file)" href="EUbookshop/ga-lt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Latvian (sample file)" href="EUbookshop/ga-lv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Macedonian (sample file)" href="EUbookshop/ga-mk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Maltese (sample file)" href="EUbookshop/ga-mt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/ga-nb_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="EUbookshop/ga-nl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Dutch (sample file)" href="EUbookshop/ga-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Polish (sample file)" href="EUbookshop/ga-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Portuguese (sample file)" href="EUbookshop/ga-pt_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Romanian (sample file)" href="EUbookshop/ga-ro_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Russian (sample file)" href="EUbookshop/ga-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Irish-Slovak (sample file)" href="EUbookshop/ga-sk_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Slovenian (sample file)" href="EUbookshop/ga-sl_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Albanian (sample file)" href="EUbookshop/ga-sq_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Serbian (sample file)" href="EUbookshop/ga-sr_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swedish (sample file)" href="EUbookshop/ga-sv_sample.html">view</a></td><td><a rel="nofollow" title="Irish-Swahili (sample file)" href="EUbookshop/ga-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Irish-Chinese (sample file)" href="EUbookshop/ga-zh_sample.html">view</a></td><th>ga</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/gd.tar.gz">gd</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Bulgarian' (49 links, 2.2k tokens)" href="download.php?f=EUbookshop/xml/bg-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Catalan' (63 links, 3.7k tokens)" href="download.php?f=EUbookshop/xml/ca-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Czech' (25 links, 3.1k tokens)" href="download.php?f=EUbookshop/xml/cs-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Danish' (26 links, 3.5k tokens)" href="download.php?f=EUbookshop/xml/da-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-German' (73 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/de-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Greek' (38 links, 3.6k tokens)" href="download.php?f=EUbookshop/xml/el-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-English' (0.1k links, 3.6k tokens)" href="download.php?f=EUbookshop/xml/en-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Spanish' (53 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/es-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Estonian' (27 links, 2.2k tokens)" href="download.php?f=EUbookshop/xml/et-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Finnish' (36 links, 3.2k tokens)" href="download.php?f=EUbookshop/xml/fi-gd.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-French' (88 links, 2.2k tokens)" href="download.php?f=EUbookshop/xml/fr-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Irish' (72 links, 3.7k tokens)" href="download.php?f=EUbookshop/xml/ga-gd.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Gaelic-Hungarian (sample file)" href="EUbookshop/gd-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Italian (sample file)" href="EUbookshop/gd-it_sample.html">view</a></td><td></td><th>gd</th>
<td></td><td><a rel="nofollow" title="Gaelic-Lithuanian (sample file)" href="EUbookshop/gd-lt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Latvian (sample file)" href="EUbookshop/gd-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Maltese (sample file)" href="EUbookshop/gd-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Dutch (sample file)" href="EUbookshop/gd-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Polish (sample file)" href="EUbookshop/gd-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Gaelic-Portuguese (sample file)" href="EUbookshop/gd-pt_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Romanian (sample file)" href="EUbookshop/gd-ro_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Slovak (sample file)" href="EUbookshop/gd-sk_sample.html">view</a></td><td><a rel="nofollow" title="Gaelic-Slovenian (sample file)" href="EUbookshop/gd-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Swedish (sample file)" href="EUbookshop/gd-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>gd</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/hr.tar.gz">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (0.7k tokens)" href="download.php?f=EUbookshop/xml/ar-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (17 aligned documents, 3.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (4 aligned documents, 0.7k links, 82.6k tokens)" href="download.php?f=EUbookshop/xml/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (2 aligned documents, 0.6k links, 48.3k tokens)" href="download.php?f=EUbookshop/xml/ca-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (18 aligned documents, 4.3k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Welsh' (0.5k links, 20.9k tokens)" href="download.php?f=EUbookshop/xml/cy-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (18 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (17 aligned documents, 3.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (19 aligned documents, 4.0k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (23 aligned documents, 6.4k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (20 aligned documents, 5.5k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (18 aligned documents, 4.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (19 aligned documents, 5.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (20 aligned documents, 5.6k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/fr-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Irish' (7 aligned documents, 0.7k links, 47.5k tokens)" href="download.php?f=EUbookshop/xml/ga-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="EUbookshop/hr-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="EUbookshop/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="EUbookshop/hr-ja_sample.html">view</a></td><th>hr</th>
<td></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="EUbookshop/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="EUbookshop/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="EUbookshop/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Maltese (sample file)" href="EUbookshop/hr-mt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="EUbookshop/hr-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="EUbookshop/hr-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="EUbookshop/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="EUbookshop/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="EUbookshop/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-sh (sample file)" href="EUbookshop/hr-sh_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="EUbookshop/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="EUbookshop/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="EUbookshop/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="EUbookshop/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="EUbookshop/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swahili (sample file)" href="EUbookshop/hr-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="EUbookshop/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="EUbookshop/hr-zh_sample.html">view</a></td><th>hr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/hu.tar.gz">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Arabic' (4 aligned documents, 0.1k links, 26.7k tokens)" href="download.php?f=EUbookshop/xml/ar-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (690 aligned documents, 0.2M links, 9.4M tokens)" href="download.php?f=EUbookshop/xml/bg-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (34 links, 5.0k tokens)" href="download.php?f=EUbookshop/xml/bs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (19 aligned documents, 1.2k links, 84.9k tokens)" href="download.php?f=EUbookshop/xml/ca-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (1,121 aligned documents, 0.4M links, 28.5M tokens)" href="download.php?f=EUbookshop/xml/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Welsh' (0.6k links, 21.1k tokens)" href="download.php?f=EUbookshop/xml/cy-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (1,099 aligned documents, 0.4M links, 27.5M tokens)" href="download.php?f=EUbookshop/xml/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (1,120 aligned documents, 0.4M links, 28.6M tokens)" href="download.php?f=EUbookshop/xml/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (1,098 aligned documents, 0.4M links, 32.1M tokens)" href="download.php?f=EUbookshop/xml/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (1,148 aligned documents, 0.5M links, 31.9M tokens)" href="download.php?f=EUbookshop/xml/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (1,123 aligned documents, 0.4M links, 30.5M tokens)" href="download.php?f=EUbookshop/xml/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (1,112 aligned documents, 0.4M links, 13.9M tokens)" href="download.php?f=EUbookshop/xml/et-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (1,098 aligned documents, 0.4M links, 24.6M tokens)" href="download.php?f=EUbookshop/xml/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (1,114 aligned documents, 0.4M links, 12.8M tokens)" href="download.php?f=EUbookshop/xml/fr-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Irish' (194 aligned documents, 87.1k links, 4.0M tokens)" href="download.php?f=EUbookshop/xml/ga-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Gaelic' (29 links, 3.0k tokens)" href="download.php?f=EUbookshop/xml/gd-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (17 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="EUbookshop/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="EUbookshop/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="EUbookshop/hu-ja_sample.html">view</a></td><th>hu</th>
<td></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="EUbookshop/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="EUbookshop/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="EUbookshop/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Maltese (sample file)" href="EUbookshop/hu-mt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="EUbookshop/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="EUbookshop/hu-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="EUbookshop/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-po (sample file)" href="EUbookshop/hu-po_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="EUbookshop/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="EUbookshop/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="EUbookshop/hu-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="EUbookshop/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="EUbookshop/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="EUbookshop/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="EUbookshop/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="EUbookshop/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swahili (sample file)" href="EUbookshop/hu-sw_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-tc (sample file)" href="EUbookshop/hu-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="EUbookshop/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="EUbookshop/hu-zh_sample.html">view</a></td><th>hu</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/is.tar.gz">is</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (35 aligned documents, 6.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/bg-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (38 aligned documents, 8.6k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/cs-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (48 aligned documents, 10.1k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (48 aligned documents, 10.5k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (46 aligned documents, 9.6k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (47 aligned documents, 11.3k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (48 aligned documents, 9.6k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (36 aligned documents, 8.7k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/et-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (48 aligned documents, 12.1k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (48 aligned documents, 10.5k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/fr-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Irish' (15 aligned documents, 6.0k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/ga-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (37 aligned documents, 8.1k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/hu-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="EUbookshop/is-it_sample.html">view</a></td><td></td><th>is</th>
<td></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="EUbookshop/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="EUbookshop/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="EUbookshop/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Maltese (sample file)" href="EUbookshop/is-mt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="EUbookshop/is-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="EUbookshop/is-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="EUbookshop/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="EUbookshop/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="EUbookshop/is-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="EUbookshop/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="EUbookshop/is-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="EUbookshop/is-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>is</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (9 aligned documents, 0.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ar-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (716 aligned documents, 0.2M links, 11.8M tokens)" href="download.php?f=EUbookshop/xml/bg-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (29 links, 5.3k tokens)" href="download.php?f=EUbookshop/xml/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (31 aligned documents, 3.5k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-cn' (21.3k tokens)" href="download.php?f=EUbookshop/xml/cn-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (1,145 aligned documents, 0.5M links, 33.6M tokens)" href="download.php?f=EUbookshop/xml/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Welsh' (0.5k links, 22.6k tokens)" href="download.php?f=EUbookshop/xml/cy-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (6,881 aligned documents, 5.1M links, 424.1M tokens)" href="download.php?f=EUbookshop/xml/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (8,737 aligned documents, 6.5M links, 492.5M tokens)" href="download.php?f=EUbookshop/xml/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (6,274 aligned documents, 4.4M links, 394.6M tokens)" href="download.php?f=EUbookshop/xml/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (9,028 aligned documents, 7.1M links, 537.0M tokens)" href="download.php?f=EUbookshop/xml/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (7,059 aligned documents, 5.0M links, 406.7M tokens)" href="download.php?f=EUbookshop/xml/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (1,111 aligned documents, 0.4M links, 16.4M tokens)" href="download.php?f=EUbookshop/xml/et-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (3,974 aligned documents, 2.0M links, 144.6M tokens)" href="download.php?f=EUbookshop/xml/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (8,736 aligned documents, 6.3M links, 240.3M tokens)" href="download.php?f=EUbookshop/xml/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (2 aligned documents, 0.1k links, 2.7k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Irish' (227 aligned documents, 0.1M links, 7.9M tokens)" href="download.php?f=EUbookshop/xml/ga-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Gaelic' (55 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/gd-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (19 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (1,122 aligned documents, 0.4M links, 30.4M tokens)" href="download.php?f=EUbookshop/xml/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (48 aligned documents, 10.2k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Japanese (sample file)" href="EUbookshop/it-ja_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Luxembourgish (sample file)" href="EUbookshop/it-lb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="EUbookshop/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="EUbookshop/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="EUbookshop/it-mk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Maltese (sample file)" href="EUbookshop/it-mt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="EUbookshop/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="EUbookshop/it-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="EUbookshop/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-po (sample file)" href="EUbookshop/it-po_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="EUbookshop/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="EUbookshop/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="EUbookshop/it-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="EUbookshop/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="EUbookshop/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="EUbookshop/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Serbian (sample file)" href="EUbookshop/it-sr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="EUbookshop/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swahili (sample file)" href="EUbookshop/it-sw_sample.html">view</a></td><td><a rel="nofollow" title="Italian-tc (sample file)" href="EUbookshop/it-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="EUbookshop/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="EUbookshop/it-zh_sample.html">view</a></td><th>it</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ja.tar.gz">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (2.5k tokens)" href="download.php?f=EUbookshop/xml/ar-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (2 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/bg-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (22.9k tokens)" href="download.php?f=EUbookshop/xml/ca-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (3 aligned documents, 78 links, 26.0k tokens)" href="download.php?f=EUbookshop/xml/cs-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (3 aligned documents, 98 links, 25.3k tokens)" href="download.php?f=EUbookshop/xml/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (2 aligned documents, 0.1k links, 9.5k tokens)" href="download.php?f=EUbookshop/xml/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (3 aligned documents, 2 links, 26.8k tokens)" href="download.php?f=EUbookshop/xml/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (4 aligned documents, 0.1k links, 38.8k tokens)" href="download.php?f=EUbookshop/xml/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (3 aligned documents, 94 links, 31.1k tokens)" href="download.php?f=EUbookshop/xml/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (3 aligned documents, 88 links, 2.5k tokens)" href="download.php?f=EUbookshop/xml/et-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (3 aligned documents, 98 links, 21.7k tokens)" href="download.php?f=EUbookshop/xml/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (3 aligned documents, 0.1k links, 2.5k tokens)" href="download.php?f=EUbookshop/xml/fr-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Irish' (0.1k tokens)" href="download.php?f=EUbookshop/xml/ga-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (16.6k tokens)" href="download.php?f=EUbookshop/xml/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (2 aligned documents, 93 links, 9.1k tokens)" href="download.php?f=EUbookshop/xml/hu-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (3 aligned documents, 0.1k links, 29.3k tokens)" href="download.php?f=EUbookshop/xml/it-ja.xml.gz">ces</a></td>
<th></th>
<th>ja</th>
<td></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="EUbookshop/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="EUbookshop/ja-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Maltese (sample file)" href="EUbookshop/ja-mt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="EUbookshop/ja-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="EUbookshop/ja-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="EUbookshop/ja-pt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="EUbookshop/ja-ro_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="EUbookshop/ja-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="EUbookshop/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="EUbookshop/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="EUbookshop/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="EUbookshop/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="EUbookshop/ja-sv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swahili (sample file)" href="EUbookshop/ja-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="EUbookshop/ja-zh_sample.html">view</a></td><th>ja</th></tr>
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
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Danish' (3 aligned documents, 19.3k tokens)" href="download.php?f=EUbookshop/xml/da-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-German' (4 aligned documents, 21.0k tokens)" href="download.php?f=EUbookshop/xml/de-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Greek' (3 aligned documents, 23.3k tokens)" href="download.php?f=EUbookshop/xml/el-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-English' (4 aligned documents, 24.7k tokens)" href="download.php?f=EUbookshop/xml/en-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Spanish' (3 aligned documents, 22.9k tokens)" href="download.php?f=EUbookshop/xml/es-lb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Finnish' (2 aligned documents, 0.6k tokens)" href="download.php?f=EUbookshop/xml/fi-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-French' (3 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/fr-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-French' (0 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Irish' (7 tokens)" href="download.php?f=EUbookshop/xml/ga-lb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Italian' (3 aligned documents, 25.0k tokens)" href="download.php?f=EUbookshop/xml/it-lb.xml.gz">ces</a></td>
<td></td>
<th>lb</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Dutch (sample file)" href="EUbookshop/lb-nl_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-Dutch (sample file)" href="EUbookshop/lb-nl_BE_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Portuguese (sample file)" href="EUbookshop/lb-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Swedish (sample file)" href="EUbookshop/lb-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>lb</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/lt.tar.gz">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (4 aligned documents, 0.1k links, 27.0k tokens)" href="download.php?f=EUbookshop/xml/ar-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (695 aligned documents, 0.2M links, 9.9M tokens)" href="download.php?f=EUbookshop/xml/bg-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (0.4k links, 63.9k tokens)" href="download.php?f=EUbookshop/xml/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (21 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (1,123 aligned documents, 0.5M links, 28.9M tokens)" href="download.php?f=EUbookshop/xml/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Welsh' (0.6k links, 20.6k tokens)" href="download.php?f=EUbookshop/xml/cy-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (1,097 aligned documents, 0.4M links, 27.8M tokens)" href="download.php?f=EUbookshop/xml/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (1,116 aligned documents, 0.4M links, 28.2M tokens)" href="download.php?f=EUbookshop/xml/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (1,090 aligned documents, 0.4M links, 31.2M tokens)" href="download.php?f=EUbookshop/xml/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (1,138 aligned documents, 0.5M links, 32.4M tokens)" href="download.php?f=EUbookshop/xml/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (1,115 aligned documents, 0.4M links, 31.3M tokens)" href="download.php?f=EUbookshop/xml/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (1,124 aligned documents, 0.5M links, 14.0M tokens)" href="download.php?f=EUbookshop/xml/et-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (1,106 aligned documents, 0.5M links, 25.0M tokens)" href="download.php?f=EUbookshop/xml/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (1,101 aligned documents, 0.4M links, 12.5M tokens)" href="download.php?f=EUbookshop/xml/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (11 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Irish' (194 aligned documents, 85.2k links, 3.8M tokens)" href="download.php?f=EUbookshop/xml/ga-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Gaelic' (31 links, 3.1k tokens)" href="download.php?f=EUbookshop/xml/gd-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (18 aligned documents, 4.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (1,109 aligned documents, 0.4M links, 27.4M tokens)" href="download.php?f=EUbookshop/xml/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (36 aligned documents, 7.4k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (1,113 aligned documents, 0.4M links, 30.4M tokens)" href="download.php?f=EUbookshop/xml/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (3 aligned documents, 87 links, 26.5k tokens)" href="download.php?f=EUbookshop/xml/ja-lt.xml.gz">ces</a></td>
<th>lt</th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="EUbookshop/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="EUbookshop/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Maltese (sample file)" href="EUbookshop/lt-mt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="EUbookshop/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="EUbookshop/lt-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="EUbookshop/lt-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="EUbookshop/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="EUbookshop/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="EUbookshop/lt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="EUbookshop/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="EUbookshop/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="EUbookshop/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="EUbookshop/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="EUbookshop/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swahili (sample file)" href="EUbookshop/lt-sw_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="EUbookshop/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="EUbookshop/lt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="EUbookshop/lt-zh_sample.html">view</a></td><th>lt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/lv.tar.gz">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (4 aligned documents, 0.1k links, 28.8k tokens)" href="download.php?f=EUbookshop/xml/ar-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (692 aligned documents, 0.2M links, 10.1M tokens)" href="download.php?f=EUbookshop/xml/bg-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (0.4k links, 60.5k tokens)" href="download.php?f=EUbookshop/xml/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (20 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (1,129 aligned documents, 0.4M links, 29.1M tokens)" href="download.php?f=EUbookshop/xml/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Welsh' (0.5k links, 20.9k tokens)" href="download.php?f=EUbookshop/xml/cy-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (1,101 aligned documents, 0.4M links, 27.7M tokens)" href="download.php?f=EUbookshop/xml/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (1,122 aligned documents, 0.4M links, 28.5M tokens)" href="download.php?f=EUbookshop/xml/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (1,091 aligned documents, 0.4M links, 31.1M tokens)" href="download.php?f=EUbookshop/xml/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (1,153 aligned documents, 0.5M links, 33.0M tokens)" href="download.php?f=EUbookshop/xml/en-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (1,121 aligned documents, 0.4M links, 31.4M tokens)" href="download.php?f=EUbookshop/xml/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (1,127 aligned documents, 0.5M links, 14.0M tokens)" href="download.php?f=EUbookshop/xml/et-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (1,108 aligned documents, 0.4M links, 25.3M tokens)" href="download.php?f=EUbookshop/xml/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (1,113 aligned documents, 0.4M links, 13.1M tokens)" href="download.php?f=EUbookshop/xml/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (21 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Irish' (194 aligned documents, 79.1k links, 3.9M tokens)" href="download.php?f=EUbookshop/xml/ga-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Gaelic' (26 links, 3.0k tokens)" href="download.php?f=EUbookshop/xml/gd-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (18 aligned documents, 4.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (1,113 aligned documents, 0.4M links, 27.2M tokens)" href="download.php?f=EUbookshop/xml/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (37 aligned documents, 7.8k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (1,122 aligned documents, 0.4M links, 30.9M tokens)" href="download.php?f=EUbookshop/xml/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (3 aligned documents, 82 links, 27.9k tokens)" href="download.php?f=EUbookshop/xml/ja-lv.xml.gz">ces</a></td>
<th>lv</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (1,127 aligned documents, 0.5M links, 28.2M tokens)" href="download.php?f=EUbookshop/xml/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="EUbookshop/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Maltese (sample file)" href="EUbookshop/lv-mt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="EUbookshop/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="EUbookshop/lv-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="EUbookshop/lv-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="EUbookshop/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="EUbookshop/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="EUbookshop/lv-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="EUbookshop/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="EUbookshop/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="EUbookshop/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="EUbookshop/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="EUbookshop/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swahili (sample file)" href="EUbookshop/lv-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="EUbookshop/lv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="EUbookshop/lv-zh_sample.html">view</a></td><th>lv</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/mk.tar.gz">mk</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (11 aligned documents, 2.9k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (3 aligned documents, 0.4k links, 81.8k tokens)" href="download.php?f=EUbookshop/xml/bs-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (11 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/cs-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (10 aligned documents, 1.1k links, 74.3k tokens)" href="download.php?f=EUbookshop/xml/da-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-German' (11 aligned documents, 3.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/de-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (11 aligned documents, 3.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (13 aligned documents, 2.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Spanish' (11 aligned documents, 3.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/es-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (11 aligned documents, 3.0k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/et-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (11 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-French' (11 aligned documents, 3.4k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/fr-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Irish' (7 aligned documents, 0.6k links, 48.3k tokens)" href="download.php?f=EUbookshop/xml/ga-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (12 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (11 aligned documents, 1.4k links, 80.7k tokens)" href="download.php?f=EUbookshop/xml/hu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (94 links, 3.9k tokens)" href="download.php?f=EUbookshop/xml/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Italian' (11 aligned documents, 1.3k links, 87.6k tokens)" href="download.php?f=EUbookshop/xml/it-mk.xml.gz">ces</a></td>
<td></td>
<th>mk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (11 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Maltese (sample file)" href="EUbookshop/mk-mt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="EUbookshop/mk-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="EUbookshop/mk-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="EUbookshop/mk-pt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="EUbookshop/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Russian (sample file)" href="EUbookshop/mk-ru_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-sh (sample file)" href="EUbookshop/mk-sh_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="EUbookshop/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="EUbookshop/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="EUbookshop/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="EUbookshop/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="EUbookshop/mk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swahili (sample file)" href="EUbookshop/mk-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="EUbookshop/mk-zh_sample.html">view</a></td><th>mk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/mt.tar.gz">mt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Arabic' (4 aligned documents, 0.2k links, 28.7k tokens)" href="download.php?f=EUbookshop/xml/ar-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Bulgarian' (581 aligned documents, 0.2M links, 7.6M tokens)" href="download.php?f=EUbookshop/xml/bg-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Catalan' (15 aligned documents, 1.4k links, 88.6k tokens)" href="download.php?f=EUbookshop/xml/ca-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Czech' (888 aligned documents, 0.3M links, 19.9M tokens)" href="download.php?f=EUbookshop/xml/cs-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Danish' (881 aligned documents, 0.3M links, 19.4M tokens)" href="download.php?f=EUbookshop/xml/da-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (876 aligned documents, 0.3M links, 20.2M tokens)" href="download.php?f=EUbookshop/xml/de-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (865 aligned documents, 0.3M links, 23.8M tokens)" href="download.php?f=EUbookshop/xml/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (893 aligned documents, 0.3M links, 21.9M tokens)" href="download.php?f=EUbookshop/xml/en-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (877 aligned documents, 0.3M links, 21.1M tokens)" href="download.php?f=EUbookshop/xml/es-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Estonian' (889 aligned documents, 0.3M links, 10.4M tokens)" href="download.php?f=EUbookshop/xml/et-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Finnish' (877 aligned documents, 0.3M links, 18.4M tokens)" href="download.php?f=EUbookshop/xml/fi-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (877 aligned documents, 0.3M links, 10.3M tokens)" href="download.php?f=EUbookshop/xml/fr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (12 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Irish' (189 aligned documents, 85.3k links, 4.0M tokens)" href="download.php?f=EUbookshop/xml/ga-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Gaelic' (63 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/gd-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Croatian' (14 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hr-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Hungarian' (885 aligned documents, 0.3M links, 19.6M tokens)" href="download.php?f=EUbookshop/xml/hu-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Icelandic' (28 aligned documents, 6.9k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/is-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (877 aligned documents, 0.3M links, 21.0M tokens)" href="download.php?f=EUbookshop/xml/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Japanese' (2 aligned documents, 18.8k tokens)" href="download.php?f=EUbookshop/xml/ja-mt.xml.gz">ces</a></td>
<th>mt</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Lithuanian' (883 aligned documents, 0.3M links, 19.4M tokens)" href="download.php?f=EUbookshop/xml/lt-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Latvian' (891 aligned documents, 0.3M links, 19.7M tokens)" href="download.php?f=EUbookshop/xml/lv-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Macedonian' (10 aligned documents, 1.0k links, 71.0k tokens)" href="download.php?f=EUbookshop/xml/mk-mt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Maltese-BokmÃ¥l, Norwegian (sample file)" href="EUbookshop/mt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="EUbookshop/mt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="EUbookshop/mt-nl_BE_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Polish (sample file)" href="EUbookshop/mt-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="EUbookshop/mt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Romanian (sample file)" href="EUbookshop/mt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Russian (sample file)" href="EUbookshop/mt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Maltese-Slovak (sample file)" href="EUbookshop/mt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Slovenian (sample file)" href="EUbookshop/mt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Albanian (sample file)" href="EUbookshop/mt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Serbian (sample file)" href="EUbookshop/mt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swedish (sample file)" href="EUbookshop/mt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Swahili (sample file)" href="EUbookshop/mt-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Maltese-Ukrainian (sample file)" href="EUbookshop/mt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Maltese-Chinese (sample file)" href="EUbookshop/mt-zh_sample.html">view</a></td><th>mt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nb.tar.gz">nb</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (53 aligned documents, 15.6k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/bg-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' (0.3k links, 61.0k tokens)" href="download.php?f=EUbookshop/xml/bs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' (20 tokens)" href="download.php?f=EUbookshop/xml/ca-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (59 aligned documents, 21.3k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/cs-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (91 aligned documents, 25.7k links, 1.8M tokens)" href="download.php?f=EUbookshop/xml/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (94 aligned documents, 28.2k links, 2.0M tokens)" href="download.php?f=EUbookshop/xml/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (88 aligned documents, 21.6k links, 2.1M tokens)" href="download.php?f=EUbookshop/xml/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (93 aligned documents, 30.1k links, 2.1M tokens)" href="download.php?f=EUbookshop/xml/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (93 aligned documents, 26.6k links, 2.1M tokens)" href="download.php?f=EUbookshop/xml/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (58 aligned documents, 21.4k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/et-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (94 aligned documents, 30.0k links, 1.8M tokens)" href="download.php?f=EUbookshop/xml/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (93 aligned documents, 28.0k links, 0.9M tokens)" href="download.php?f=EUbookshop/xml/fr-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Irish' (21 aligned documents, 5.7k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/ga-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (4 aligned documents, 1.3k links, 88.9k tokens)" href="download.php?f=EUbookshop/xml/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (57 aligned documents, 19.0k links, 1.2M tokens)" href="download.php?f=EUbookshop/xml/hu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (45 aligned documents, 10.2k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (92 aligned documents, 26.4k links, 2.0M tokens)" href="download.php?f=EUbookshop/xml/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Japanese' (55 tokens)" href="download.php?f=EUbookshop/xml/ja-nb.xml.gz">ces</a></td>
<th>nb</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (57 aligned documents, 20.4k links, 1.2M tokens)" href="download.php?f=EUbookshop/xml/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (58 aligned documents, 20.8k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/lv-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' (3 aligned documents, 1.4k links, 98.4k tokens)" href="download.php?f=EUbookshop/xml/mk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Maltese' (40 aligned documents, 7.2k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/mt-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="EUbookshop/nb-nl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Polish (sample file)" href="EUbookshop/nb-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="EUbookshop/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="EUbookshop/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="EUbookshop/nb-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="EUbookshop/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="EUbookshop/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="EUbookshop/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="EUbookshop/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="EUbookshop/nb-sv_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swahili (sample file)" href="EUbookshop/nb-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="EUbookshop/nb-zh_sample.html">view</a></td><th>nb</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nl.tar.gz">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (8 aligned documents, 0.1k links, 9.0k tokens)" href="download.php?f=EUbookshop/xml/ar-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (697 aligned documents, 0.2M links, 0 tokens)" href="download.php?f=EUbookshop/xml/bg-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bosnian' (0.4k links, 16.9k tokens)" href="download.php?f=EUbookshop/xml/bs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Catalan' (32 aligned documents, 3.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-cn' (0 tokens)" href="download.php?f=EUbookshop/xml/cn-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (1,109 aligned documents, 0.4M links, 14.8M tokens)" href="download.php?f=EUbookshop/xml/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Welsh' (0.5k links, 12.2k tokens)" href="download.php?f=EUbookshop/xml/cy-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (6,858 aligned documents, 5.3M links, 198.2M tokens)" href="download.php?f=EUbookshop/xml/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (7,430 aligned documents, 6.2M links, 215.5M tokens)" href="download.php?f=EUbookshop/xml/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (6,169 aligned documents, 4.4M links, 202.7M tokens)" href="download.php?f=EUbookshop/xml/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (7,610 aligned documents, 6.4M links, 249.2M tokens)" href="download.php?f=EUbookshop/xml/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (6,224 aligned documents, 4.6M links, 188.1M tokens)" href="download.php?f=EUbookshop/xml/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (1,098 aligned documents, 0.4M links, 0 tokens)" href="download.php?f=EUbookshop/xml/et-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (3,954 aligned documents, 2.1M links, 61.0M tokens)" href="download.php?f=EUbookshop/xml/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (7,379 aligned documents, 5.7M links, 0 tokens)" href="download.php?f=EUbookshop/xml/fr-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (226 aligned documents, 0.1M links, 4.2M tokens)" href="download.php?f=EUbookshop/xml/ga-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Gaelic' (41 links, 2.2k tokens)" href="download.php?f=EUbookshop/xml/gd-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (19 aligned documents, 4.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (1,103 aligned documents, 0.4M links, 14.0M tokens)" href="download.php?f=EUbookshop/xml/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (47 aligned documents, 10.6k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (7,389 aligned documents, 6.1M links, 233.4M tokens)" href="download.php?f=EUbookshop/xml/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (3 aligned documents, 95 links, 2.5k tokens)" href="download.php?f=EUbookshop/xml/ja-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Luxembourgish' (3 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/lb-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (1,097 aligned documents, 0.4M links, 14.0M tokens)" href="download.php?f=EUbookshop/xml/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (1,105 aligned documents, 0.4M links, 14.0M tokens)" href="download.php?f=EUbookshop/xml/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Macedonian' (11 aligned documents, 3.3k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/mk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (873 aligned documents, 0.3M links, 10.2M tokens)" href="download.php?f=EUbookshop/xml/mt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (91 aligned documents, 28.2k links, 0.9M tokens)" href="download.php?f=EUbookshop/xml/nb-nl.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="EUbookshop/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-po (sample file)" href="EUbookshop/nl-po_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="EUbookshop/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="EUbookshop/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="EUbookshop/nl-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="EUbookshop/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="EUbookshop/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Albanian (sample file)" href="EUbookshop/nl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Serbian (sample file)" href="EUbookshop/nl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="EUbookshop/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swahili (sample file)" href="EUbookshop/nl-sw_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-tc (sample file)" href="EUbookshop/nl-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="EUbookshop/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="EUbookshop/nl-zh_sample.html">view</a></td><th>nl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/nl_BE.tar.gz">nl_BE</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (2 aligned documents, 0.2k links, 5.1k tokens)" href="download.php?f=EUbookshop/xml/cs-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (5 aligned documents, 0.7k links, 18.4k tokens)" href="download.php?f=EUbookshop/xml/da-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (5 aligned documents, 0.9k links, 18.8k tokens)" href="download.php?f=EUbookshop/xml/de-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (5 aligned documents, 0.8k links, 23.6k tokens)" href="download.php?f=EUbookshop/xml/el-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (5 aligned documents, 0.8k links, 20.5k tokens)" href="download.php?f=EUbookshop/xml/en-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (5 aligned documents, 0.7k links, 17.4k tokens)" href="download.php?f=EUbookshop/xml/es-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (0.1k links, 0 tokens)" href="download.php?f=EUbookshop/xml/et-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (5 aligned documents, 0.8k links, 14.7k tokens)" href="download.php?f=EUbookshop/xml/fi-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (3 aligned documents, 0.7k links, 0 tokens)" href="download.php?f=EUbookshop/xml/fr-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (2 aligned documents, 94 links, 0 tokens)" href="download.php?f=EUbookshop/xml/fr_BE-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Irish' (2 aligned documents, 1 links, 7 tokens)" href="download.php?f=EUbookshop/xml/ga-nl_BE.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/xml/hu-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (5 aligned documents, 0.8k links, 21.1k tokens)" href="download.php?f=EUbookshop/xml/it-nl_BE.xml.gz">ces</a></td>
<td></td>
<th>nl_BE</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Luxembourgish' (0 tokens)" href="download.php?f=EUbookshop/xml/lb-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (2 aligned documents, 0.1k links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/lt-nl_BE.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (2 aligned documents, 0.1k links, 3.3k tokens)" href="download.php?f=EUbookshop/xml/lv-nl_BE.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (2 aligned documents, 0.1k links, 3.7k tokens)" href="download.php?f=EUbookshop/xml/mt-nl_BE.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Polish (sample file)" href="EUbookshop/nl_BE-pl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="EUbookshop/nl_BE-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="EUbookshop/nl_BE-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="EUbookshop/nl_BE-sl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="EUbookshop/nl_BE-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>nl_BE</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/pl.tar.gz">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (5 aligned documents, 0.1k links, 34.0k tokens)" href="download.php?f=EUbookshop/xml/ar-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (708 aligned documents, 0.2M links, 10.9M tokens)" href="download.php?f=EUbookshop/xml/bg-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bosnian' (0.4k links, 66.7k tokens)" href="download.php?f=EUbookshop/xml/bs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Catalan' (22 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (1,151 aligned documents, 0.5M links, 31.1M tokens)" href="download.php?f=EUbookshop/xml/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Welsh' (0.5k links, 21.2k tokens)" href="download.php?f=EUbookshop/xml/cy-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (1,110 aligned documents, 0.4M links, 28.9M tokens)" href="download.php?f=EUbookshop/xml/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (1,358 aligned documents, 0.5M links, 36.0M tokens)" href="download.php?f=EUbookshop/xml/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (1,149 aligned documents, 0.4M links, 34.2M tokens)" href="download.php?f=EUbookshop/xml/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (1,387 aligned documents, 0.6M links, 40.9M tokens)" href="download.php?f=EUbookshop/xml/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (1,356 aligned documents, 0.5M links, 39.5M tokens)" href="download.php?f=EUbookshop/xml/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (1,125 aligned documents, 0.5M links, 15.0M tokens)" href="download.php?f=EUbookshop/xml/et-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (1,110 aligned documents, 0.4M links, 25.9M tokens)" href="download.php?f=EUbookshop/xml/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (1,345 aligned documents, 0.5M links, 16.8M tokens)" href="download.php?f=EUbookshop/xml/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (55 links, 1.8k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Irish' (196 aligned documents, 84.8k links, 3.9M tokens)" href="download.php?f=EUbookshop/xml/ga-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Gaelic' (3.1k tokens)" href="download.php?f=EUbookshop/xml/gd-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (17 aligned documents, 4.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (1,125 aligned documents, 0.5M links, 28.6M tokens)" href="download.php?f=EUbookshop/xml/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (38 aligned documents, 8.0k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (1,346 aligned documents, 0.6M links, 38.9M tokens)" href="download.php?f=EUbookshop/xml/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (3 aligned documents, 89 links, 28.7k tokens)" href="download.php?f=EUbookshop/xml/ja-pl.xml.gz">ces</a></td>
<th>pl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (1,121 aligned documents, 0.5M links, 29.1M tokens)" href="download.php?f=EUbookshop/xml/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (1,130 aligned documents, 0.5M links, 29.4M tokens)" href="download.php?f=EUbookshop/xml/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Macedonian' (10 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/mk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Maltese' (882 aligned documents, 0.3M links, 20.0M tokens)" href="download.php?f=EUbookshop/xml/mt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-BokmÃ¥l, Norwegian' (59 aligned documents, 20.9k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (1,146 aligned documents, 0.5M links, 15.3M tokens)" href="download.php?f=EUbookshop/xml/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (2 aligned documents, 0.2k links, 5.3k tokens)" href="download.php?f=EUbookshop/xml/nl_BE-pl.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="EUbookshop/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="EUbookshop/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="EUbookshop/pl-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="EUbookshop/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="EUbookshop/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Albanian (sample file)" href="EUbookshop/pl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Serbian (sample file)" href="EUbookshop/pl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="EUbookshop/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swahili (sample file)" href="EUbookshop/pl-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="EUbookshop/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="EUbookshop/pl-zh_sample.html">view</a></td><th>pl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/po.tar.gz">po</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Danish' (18.8k tokens)" href="download.php?f=EUbookshop/xml/da-po.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'po-German' (16.0k tokens)" href="download.php?f=EUbookshop/xml/de-po.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-English' (2.8k tokens)" href="download.php?f=EUbookshop/xml/en-po.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Spanish' (21.9k tokens)" href="download.php?f=EUbookshop/xml/es-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-French' (0 tokens)" href="download.php?f=EUbookshop/xml/fr-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Hungarian' (17.9k tokens)" href="download.php?f=EUbookshop/xml/hu-po.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Italian' (20.3k tokens)" href="download.php?f=EUbookshop/xml/it-po.xml.gz">ces</a></td>
<td></td>
<th>po</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'po-Dutch' (0 tokens)" href="download.php?f=EUbookshop/xml/nl-po.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="po-Portuguese (sample file)" href="EUbookshop/po-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="po-tc (sample file)" href="EUbookshop/po-tc_sample.html">view</a></td><td></td><td></td><td></td><th>po</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (5 aligned documents, 0.1k links, 33.9k tokens)" href="download.php?f=EUbookshop/xml/ar-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (696 aligned documents, 0.2M links, 11.7M tokens)" href="download.php?f=EUbookshop/xml/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (31 aligned documents, 3.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ca-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-cn' (20.0k tokens)" href="download.php?f=EUbookshop/xml/cn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (1,124 aligned documents, 0.4M links, 31.8M tokens)" href="download.php?f=EUbookshop/xml/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Welsh' (0.5k links, 22.4k tokens)" href="download.php?f=EUbookshop/xml/cy-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (5,945 aligned documents, 3.8M links, 321.3M tokens)" href="download.php?f=EUbookshop/xml/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (6,143 aligned documents, 4.1M links, 331.7M tokens)" href="download.php?f=EUbookshop/xml/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (5,851 aligned documents, 3.7M links, 349.3M tokens)" href="download.php?f=EUbookshop/xml/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (6,318 aligned documents, 4.4M links, 360.6M tokens)" href="download.php?f=EUbookshop/xml/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (6,201 aligned documents, 4.1M links, 350.3M tokens)" href="download.php?f=EUbookshop/xml/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (1,103 aligned documents, 0.4M links, 16.4M tokens)" href="download.php?f=EUbookshop/xml/et-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (3,946 aligned documents, 1.9M links, 141.1M tokens)" href="download.php?f=EUbookshop/xml/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (6,240 aligned documents, 4.2M links, 176.0M tokens)" href="download.php?f=EUbookshop/xml/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (2 aligned documents, 99 links, 2.5k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Irish' (223 aligned documents, 0.1M links, 6.9M tokens)" href="download.php?f=EUbookshop/xml/ga-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Gaelic' (52 links, 3.0k tokens)" href="download.php?f=EUbookshop/xml/gd-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (18 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (1,109 aligned documents, 0.4M links, 29.8M tokens)" href="download.php?f=EUbookshop/xml/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (48 aligned documents, 10.2k links, 0.6M tokens)" href="download.php?f=EUbookshop/xml/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (6,082 aligned documents, 4.2M links, 346.4M tokens)" href="download.php?f=EUbookshop/xml/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (3 aligned documents, 0.1k links, 30.3k tokens)" href="download.php?f=EUbookshop/xml/ja-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Luxembourgish' (3 aligned documents, 21.8k tokens)" href="download.php?f=EUbookshop/xml/lb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (1,102 aligned documents, 0.4M links, 30.4M tokens)" href="download.php?f=EUbookshop/xml/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (1,104 aligned documents, 0.4M links, 30.1M tokens)" href="download.php?f=EUbookshop/xml/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (10 aligned documents, 1.2k links, 82.2k tokens)" href="download.php?f=EUbookshop/xml/mk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (874 aligned documents, 0.3M links, 20.9M tokens)" href="download.php?f=EUbookshop/xml/mt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (91 aligned documents, 26.1k links, 2.0M tokens)" href="download.php?f=EUbookshop/xml/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (6,001 aligned documents, 4.1M links, 172.7M tokens)" href="download.php?f=EUbookshop/xml/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (5 aligned documents, 0.8k links, 21.4k tokens)" href="download.php?f=EUbookshop/xml/nl_BE-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (1,143 aligned documents, 0.4M links, 32.6M tokens)" href="download.php?f=EUbookshop/xml/pl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-po' (3 tokens)" href="download.php?f=EUbookshop/xml/po-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="EUbookshop/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="EUbookshop/pt-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="EUbookshop/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="EUbookshop/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="EUbookshop/pt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="EUbookshop/pt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="EUbookshop/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="EUbookshop/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-tc (sample file)" href="EUbookshop/pt-tc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="EUbookshop/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="EUbookshop/pt-zh_sample.html">view</a></td><th>pt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ro.tar.gz">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Arabic' (3 aligned documents, 0.1k links, 21.9k tokens)" href="download.php?f=EUbookshop/xml/ar-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (703 aligned documents, 0.2M links, 11.9M tokens)" href="download.php?f=EUbookshop/xml/bg-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (0.4k links, 72.2k tokens)" href="download.php?f=EUbookshop/xml/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (13 aligned documents, 0.8k links, 49.5k tokens)" href="download.php?f=EUbookshop/xml/ca-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (710 aligned documents, 0.3M links, 24.0M tokens)" href="download.php?f=EUbookshop/xml/cs-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (687 aligned documents, 0.3M links, 23.0M tokens)" href="download.php?f=EUbookshop/xml/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (709 aligned documents, 0.3M links, 23.1M tokens)" href="download.php?f=EUbookshop/xml/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (686 aligned documents, 0.3M links, 25.3M tokens)" href="download.php?f=EUbookshop/xml/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (736 aligned documents, 0.4M links, 27.5M tokens)" href="download.php?f=EUbookshop/xml/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (716 aligned documents, 0.3M links, 26.4M tokens)" href="download.php?f=EUbookshop/xml/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (695 aligned documents, 0.3M links, 12.5M tokens)" href="download.php?f=EUbookshop/xml/et-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (681 aligned documents, 0.3M links, 20.4M tokens)" href="download.php?f=EUbookshop/xml/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (705 aligned documents, 0.3M links, 10.9M tokens)" href="download.php?f=EUbookshop/xml/fr-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Irish' (188 aligned documents, 72.7k links, 3.9M tokens)" href="download.php?f=EUbookshop/xml/ga-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Gaelic' (51 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/gd-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (16 aligned documents, 3.7k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (692 aligned documents, 0.3M links, 21.7M tokens)" href="download.php?f=EUbookshop/xml/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (36 aligned documents, 7.5k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (712 aligned documents, 0.3M links, 25.5M tokens)" href="download.php?f=EUbookshop/xml/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (2 aligned documents, 19.9k tokens)" href="download.php?f=EUbookshop/xml/ja-ro.xml.gz">ces</a></td>
<th>ro</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (694 aligned documents, 0.3M links, 23.3M tokens)" href="download.php?f=EUbookshop/xml/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (695 aligned documents, 0.3M links, 23.2M tokens)" href="download.php?f=EUbookshop/xml/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/mk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Maltese' (583 aligned documents, 0.2M links, 15.4M tokens)" href="download.php?f=EUbookshop/xml/mt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (53 aligned documents, 19.1k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (687 aligned documents, 0.3M links, 12.5M tokens)" href="download.php?f=EUbookshop/xml/nl-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (716 aligned documents, 0.4M links, 25.0M tokens)" href="download.php?f=EUbookshop/xml/pl-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (696 aligned documents, 0.3M links, 25.3M tokens)" href="download.php?f=EUbookshop/xml/pt-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="EUbookshop/ro-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="EUbookshop/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="EUbookshop/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="EUbookshop/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="EUbookshop/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="EUbookshop/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swahili (sample file)" href="EUbookshop/ro-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="EUbookshop/ro-zh_sample.html">view</a></td><th>ro</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (13 aligned documents, 1.0k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/ar-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Belarusian' (0.2k tokens)" href="download.php?f=EUbookshop/xml/be-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (18 aligned documents, 1.0k links, 56.8k tokens)" href="download.php?f=EUbookshop/xml/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (5.5k tokens)" href="download.php?f=EUbookshop/xml/ca-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (26 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/cs-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (32 aligned documents, 5.5k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (44 aligned documents, 9.6k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (33 aligned documents, 7.8k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (109 aligned documents, 52.0k links, 2.8M tokens)" href="download.php?f=EUbookshop/xml/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (44 aligned documents, 8.9k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (26 aligned documents, 2.0k links, 78.9k tokens)" href="download.php?f=EUbookshop/xml/et-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (34 aligned documents, 6.7k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (63 aligned documents, 16.8k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/fr-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Irish' (4 aligned documents, 0.2k links, 11.4k tokens)" href="download.php?f=EUbookshop/xml/ga-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (5 aligned documents, 1.0k links, 64.5k tokens)" href="download.php?f=EUbookshop/xml/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (26 aligned documents, 2.3k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (3 aligned documents, 0.5k links, 30.1k tokens)" href="download.php?f=EUbookshop/xml/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (37 aligned documents, 7.0k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (2 aligned documents, 97 links, 8.8k tokens)" href="download.php?f=EUbookshop/xml/ja-ru.xml.gz">ces</a></td>
<th>ru</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (25 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (26 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Macedonian' (2 aligned documents, 12 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/mk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Maltese' (19 aligned documents, 1.3k links, 96.9k tokens)" href="download.php?f=EUbookshop/xml/mt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (7 aligned documents, 0.5k links, 30.8k tokens)" href="download.php?f=EUbookshop/xml/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (35 aligned documents, 6.8k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/nl-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (28 aligned documents, 2.9k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/pl-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (39 aligned documents, 6.9k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (18 aligned documents, 1.4k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ro-ru.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="EUbookshop/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="EUbookshop/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Albanian (sample file)" href="EUbookshop/ru-sq_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Serbian (sample file)" href="EUbookshop/ru-sr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="EUbookshop/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swahili (sample file)" href="EUbookshop/ru-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="EUbookshop/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="EUbookshop/ru-zh_sample.html">view</a></td><th>ru</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sh.tar.gz">sh</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Bosnian' (2 aligned documents, 0.3k links, 20.3k tokens)" href="download.php?f=EUbookshop/xml/bs-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-English' (0.6k links, 24.2k tokens)" href="download.php?f=EUbookshop/xml/en-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Croatian' (0.5k links, 20.4k tokens)" href="download.php?f=EUbookshop/xml/hr-sh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sh</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sh-Macedonian' (11.3k tokens)" href="download.php?f=EUbookshop/xml/mk-sh.xml.gz">ces</a></td>
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
<td></td><td></td><td><a rel="nofollow" title="sh-Albanian (sample file)" href="EUbookshop/sh-sq_sample.html">view</a></td><td><a rel="nofollow" title="sh-Serbian (sample file)" href="EUbookshop/sh-sr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sh</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sk.tar.gz">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (4 aligned documents, 0.1k links, 27.9k tokens)" href="download.php?f=EUbookshop/xml/ar-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (695 aligned documents, 0.2M links, 10.3M tokens)" href="download.php?f=EUbookshop/xml/bg-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (0.4k links, 62.0k tokens)" href="download.php?f=EUbookshop/xml/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (21 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (1,140 aligned documents, 0.5M links, 30.5M tokens)" href="download.php?f=EUbookshop/xml/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Welsh' (0.5k links, 21.3k tokens)" href="download.php?f=EUbookshop/xml/cy-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (1,099 aligned documents, 0.4M links, 28.4M tokens)" href="download.php?f=EUbookshop/xml/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (1,122 aligned documents, 0.4M links, 29.4M tokens)" href="download.php?f=EUbookshop/xml/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (1,094 aligned documents, 0.4M links, 32.0M tokens)" href="download.php?f=EUbookshop/xml/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (1,154 aligned documents, 0.5M links, 34.3M tokens)" href="download.php?f=EUbookshop/xml/en-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (1,128 aligned documents, 0.4M links, 32.7M tokens)" href="download.php?f=EUbookshop/xml/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (1,116 aligned documents, 0.4M links, 14.6M tokens)" href="download.php?f=EUbookshop/xml/et-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (1,102 aligned documents, 0.4M links, 25.6M tokens)" href="download.php?f=EUbookshop/xml/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (1,119 aligned documents, 0.4M links, 13.6M tokens)" href="download.php?f=EUbookshop/xml/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (58 links, 1.9k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Irish' (194 aligned documents, 76.2k links, 4.0M tokens)" href="download.php?f=EUbookshop/xml/ga-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Gaelic' (91 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/gd-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (18 aligned documents, 4.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (1,116 aligned documents, 0.4M links, 28.0M tokens)" href="download.php?f=EUbookshop/xml/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (38 aligned documents, 8.5k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (1,127 aligned documents, 0.4M links, 32.0M tokens)" href="download.php?f=EUbookshop/xml/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (3 aligned documents, 93 links, 26.4k tokens)" href="download.php?f=EUbookshop/xml/ja-sk.xml.gz">ces</a></td>
<th>sk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (1,117 aligned documents, 0.5M links, 29.1M tokens)" href="download.php?f=EUbookshop/xml/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (1,123 aligned documents, 0.5M links, 29.0M tokens)" href="download.php?f=EUbookshop/xml/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Maltese' (886 aligned documents, 0.3M links, 19.7M tokens)" href="download.php?f=EUbookshop/xml/mt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (59 aligned documents, 21.5k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (1,102 aligned documents, 0.4M links, 14.7M tokens)" href="download.php?f=EUbookshop/xml/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (2 aligned documents, 0.2k links, 5.3k tokens)" href="download.php?f=EUbookshop/xml/nl_BE-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (1,130 aligned documents, 0.5M links, 30.4M tokens)" href="download.php?f=EUbookshop/xml/pl-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (1,111 aligned documents, 0.4M links, 31.5M tokens)" href="download.php?f=EUbookshop/xml/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (703 aligned documents, 0.3M links, 23.8M tokens)" href="download.php?f=EUbookshop/xml/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (25 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ru-sk.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="EUbookshop/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="EUbookshop/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="EUbookshop/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="EUbookshop/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swahili (sample file)" href="EUbookshop/sk-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="EUbookshop/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="EUbookshop/sk-zh_sample.html">view</a></td><th>sk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sl.tar.gz">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (5 aligned documents, 0.2k links, 34.8k tokens)" href="download.php?f=EUbookshop/xml/ar-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (687 aligned documents, 0.2M links, 9.4M tokens)" href="download.php?f=EUbookshop/xml/bg-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (2 aligned documents, 0.4k links, 69.8k tokens)" href="download.php?f=EUbookshop/xml/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (21 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (1,111 aligned documents, 0.4M links, 27.9M tokens)" href="download.php?f=EUbookshop/xml/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Welsh' (0.5k links, 21.5k tokens)" href="download.php?f=EUbookshop/xml/cy-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (1,088 aligned documents, 0.4M links, 26.9M tokens)" href="download.php?f=EUbookshop/xml/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (1,108 aligned documents, 0.4M links, 27.3M tokens)" href="download.php?f=EUbookshop/xml/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (1,079 aligned documents, 0.3M links, 29.8M tokens)" href="download.php?f=EUbookshop/xml/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (1,141 aligned documents, 0.4M links, 31.2M tokens)" href="download.php?f=EUbookshop/xml/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (1,105 aligned documents, 0.4M links, 29.5M tokens)" href="download.php?f=EUbookshop/xml/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (1,103 aligned documents, 0.4M links, 13.4M tokens)" href="download.php?f=EUbookshop/xml/et-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (1,092 aligned documents, 0.4M links, 24.0M tokens)" href="download.php?f=EUbookshop/xml/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (1,107 aligned documents, 0.4M links, 12.5M tokens)" href="download.php?f=EUbookshop/xml/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (63 links, 1.3k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Irish' (195 aligned documents, 84.6k links, 4.0M tokens)" href="download.php?f=EUbookshop/xml/ga-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Gaelic' (3.0k tokens)" href="download.php?f=EUbookshop/xml/gd-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (19 aligned documents, 4.3k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (1,098 aligned documents, 0.4M links, 26.0M tokens)" href="download.php?f=EUbookshop/xml/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (38 aligned documents, 8.3k links, 0.4M tokens)" href="download.php?f=EUbookshop/xml/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (1,105 aligned documents, 0.4M links, 29.5M tokens)" href="download.php?f=EUbookshop/xml/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (3 aligned documents, 79 links, 25.9k tokens)" href="download.php?f=EUbookshop/xml/ja-sl.xml.gz">ces</a></td>
<th>sl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (1,100 aligned documents, 0.4M links, 26.7M tokens)" href="download.php?f=EUbookshop/xml/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (1,111 aligned documents, 0.4M links, 26.9M tokens)" href="download.php?f=EUbookshop/xml/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (12 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Maltese' (883 aligned documents, 0.3M links, 19.5M tokens)" href="download.php?f=EUbookshop/xml/mt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (59 aligned documents, 21.6k links, 1.3M tokens)" href="download.php?f=EUbookshop/xml/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (1,091 aligned documents, 0.4M links, 13.5M tokens)" href="download.php?f=EUbookshop/xml/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (2 aligned documents, 0.2k links, 4.6k tokens)" href="download.php?f=EUbookshop/xml/nl_BE-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (1,113 aligned documents, 0.4M links, 28.1M tokens)" href="download.php?f=EUbookshop/xml/pl-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (1,093 aligned documents, 0.4M links, 29.1M tokens)" href="download.php?f=EUbookshop/xml/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (693 aligned documents, 0.3M links, 22.1M tokens)" href="download.php?f=EUbookshop/xml/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (26 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ru-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (1,107 aligned documents, 0.4M links, 27.4M tokens)" href="download.php?f=EUbookshop/xml/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="EUbookshop/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="EUbookshop/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="EUbookshop/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swahili (sample file)" href="EUbookshop/sl-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="EUbookshop/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="EUbookshop/sl-zh_sample.html">view</a></td><th>sl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sq.tar.gz">sq</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (4 aligned documents, 1.8k links, 57.7k tokens)" href="download.php?f=EUbookshop/xml/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (5 aligned documents, 0.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/bs-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/cs-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (3 aligned documents, 17 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/da-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-German' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/de-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (8 aligned documents, 2.4k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Spanish' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/es-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (4 aligned documents, 2.2k links, 57.7k tokens)" href="download.php?f=EUbookshop/xml/et-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (4 aligned documents, 2.3k links, 98.0k tokens)" href="download.php?f=EUbookshop/xml/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (4 aligned documents, 2.0k links, 57.7k tokens)" href="download.php?f=EUbookshop/xml/fr-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Irish' (4 links, 0.2k tokens)" href="download.php?f=EUbookshop/xml/ga-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (6 aligned documents, 2.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (4 aligned documents, 0.1k links, 7.5k tokens)" href="download.php?f=EUbookshop/xml/hu-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (4 aligned documents, 0.1k links, 7.8k tokens)" href="download.php?f=EUbookshop/xml/it-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (88 tokens)" href="download.php?f=EUbookshop/xml/ja-sq.xml.gz">ces</a></td>
<th>sq</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (5 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Maltese' (3 aligned documents, 22 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/mt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' (4 aligned documents, 1.5k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/nb-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Dutch' (4 aligned documents, 2.2k links, 57.7k tokens)" href="download.php?f=EUbookshop/xml/nl-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Polish' (4 aligned documents, 2.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/pl-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (3 aligned documents, 19 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/pt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ro-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Russian' (3 aligned documents, 12 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/ru-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-sh' (2 aligned documents, 0.7k links, 31.0k tokens)" href="download.php?f=EUbookshop/xml/sh-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (5 aligned documents, 2.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="EUbookshop/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swedish (sample file)" href="EUbookshop/sq-sv_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swahili (sample file)" href="EUbookshop/sq-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="EUbookshop/sq-zh_sample.html">view</a></td><th>sq</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sr.tar.gz">sr</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (4 aligned documents, 1.8k links, 48.2k tokens)" href="download.php?f=EUbookshop/xml/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (4 aligned documents, 0.6k links, 84.1k tokens)" href="download.php?f=EUbookshop/xml/bs-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' (4 aligned documents, 1.9k links, 96.4k tokens)" href="download.php?f=EUbookshop/xml/cs-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' (3 aligned documents, 5 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/da-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-German' (4 aligned documents, 1.7k links, 99.9k tokens)" href="download.php?f=EUbookshop/xml/de-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (4 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (6 aligned documents, 1.7k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Spanish' (4 aligned documents, 1.8k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/es-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (4 aligned documents, 1.8k links, 48.2k tokens)" href="download.php?f=EUbookshop/xml/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (4 aligned documents, 2.0k links, 88.6k tokens)" href="download.php?f=EUbookshop/xml/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-French' (4 aligned documents, 1.8k links, 48.2k tokens)" href="download.php?f=EUbookshop/xml/fr-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Irish' (0.1k tokens)" href="download.php?f=EUbookshop/xml/ga-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (5 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' (4 aligned documents, 81 links, 5.9k tokens)" href="download.php?f=EUbookshop/xml/hu-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Italian' (4 aligned documents, 56 links, 6.3k tokens)" href="download.php?f=EUbookshop/xml/it-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (14 tokens)" href="download.php?f=EUbookshop/xml/ja-sr.xml.gz">ces</a></td>
<th>sr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (4 aligned documents, 1.8k links, 95.6k tokens)" href="download.php?f=EUbookshop/xml/lt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (4 aligned documents, 1.5k links, 92.2k tokens)" href="download.php?f=EUbookshop/xml/lv-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (5 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Maltese' (3 aligned documents, 9 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/mt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' (4 aligned documents, 1.4k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/nb-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Dutch' (4 aligned documents, 1.9k links, 48.2k tokens)" href="download.php?f=EUbookshop/xml/nl-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Polish' (4 aligned documents, 2.0k links, 98.3k tokens)" href="download.php?f=EUbookshop/xml/pl-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (3 aligned documents, 8 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/pt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (4 aligned documents, 2.0k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ro-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Russian' (3 aligned documents, 9 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/ru-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-sh' (2 aligned documents, 0.3k links, 20.7k tokens)" href="download.php?f=EUbookshop/xml/sh-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (4 aligned documents, 1.8k links, 93.6k tokens)" href="download.php?f=EUbookshop/xml/sk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (5 aligned documents, 1.9k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/sl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (7 aligned documents, 2.3k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swedish (sample file)" href="EUbookshop/sr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Swahili (sample file)" href="EUbookshop/sr-sw_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="EUbookshop/sr-zh_sample.html">view</a></td><th>sr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Arabic' (5 aligned documents, 0.1k links, 28.6k tokens)" href="download.php?f=EUbookshop/xml/ar-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (689 aligned documents, 0.2M links, 10.0M tokens)" href="download.php?f=EUbookshop/xml/bg-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bosnian' (0.4k links, 63.9k tokens)" href="download.php?f=EUbookshop/xml/bs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Catalan' (27 aligned documents, 2.1k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/ca-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (1,106 aligned documents, 0.4M links, 28.4M tokens)" href="download.php?f=EUbookshop/xml/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Welsh' (0.5k links, 21.2k tokens)" href="download.php?f=EUbookshop/xml/cy-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (3,896 aligned documents, 1.9M links, 139.0M tokens)" href="download.php?f=EUbookshop/xml/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (3,955 aligned documents, 1.9M links, 140.6M tokens)" href="download.php?f=EUbookshop/xml/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (3,831 aligned documents, 1.6M links, 152.3M tokens)" href="download.php?f=EUbookshop/xml/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (4,006 aligned documents, 2.0M links, 156.2M tokens)" href="download.php?f=EUbookshop/xml/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (3,941 aligned documents, 1.8M links, 151.6M tokens)" href="download.php?f=EUbookshop/xml/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (1,095 aligned documents, 0.4M links, 13.6M tokens)" href="download.php?f=EUbookshop/xml/et-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (3,925 aligned documents, 2.0M links, 127.6M tokens)" href="download.php?f=EUbookshop/xml/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (3,970 aligned documents, 1.9M links, 68.7M tokens)" href="download.php?f=EUbookshop/xml/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (2 aligned documents, 89 links, 2.3k tokens)" href="download.php?f=EUbookshop/xml/fr_BE-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Irish' (207 aligned documents, 95.7k links, 5.2M tokens)" href="download.php?f=EUbookshop/xml/ga-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Gaelic' (36 links, 3.4k tokens)" href="download.php?f=EUbookshop/xml/gd-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (18 aligned documents, 4.2k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (1,094 aligned documents, 0.4M links, 26.4M tokens)" href="download.php?f=EUbookshop/xml/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (48 aligned documents, 11.3k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (3,956 aligned documents, 1.9M links, 153.4M tokens)" href="download.php?f=EUbookshop/xml/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (2 aligned documents, 79 links, 8.2k tokens)" href="download.php?f=EUbookshop/xml/ja-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Luxembourgish' (2 aligned documents, 0.6k tokens)" href="download.php?f=EUbookshop/xml/lb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (1,092 aligned documents, 0.4M links, 27.3M tokens)" href="download.php?f=EUbookshop/xml/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (1,099 aligned documents, 0.4M links, 27.2M tokens)" href="download.php?f=EUbookshop/xml/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Macedonian' (11 aligned documents, 3.1k links, 0.2M tokens)" href="download.php?f=EUbookshop/xml/mk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Maltese' (877 aligned documents, 0.3M links, 19.3M tokens)" href="download.php?f=EUbookshop/xml/mt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (94 aligned documents, 29.4k links, 1.9M tokens)" href="download.php?f=EUbookshop/xml/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (3,934 aligned documents, 2.0M links, 69.1M tokens)" href="download.php?f=EUbookshop/xml/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (5 aligned documents, 0.7k links, 18.1k tokens)" href="download.php?f=EUbookshop/xml/nl_BE-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (1,119 aligned documents, 0.4M links, 28.8M tokens)" href="download.php?f=EUbookshop/xml/pl-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (3,923 aligned documents, 1.9M links, 152.4M tokens)" href="download.php?f=EUbookshop/xml/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (688 aligned documents, 0.3M links, 22.6M tokens)" href="download.php?f=EUbookshop/xml/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (35 aligned documents, 6.3k links, 0.3M tokens)" href="download.php?f=EUbookshop/xml/ru-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (1,101 aligned documents, 0.4M links, 28.2M tokens)" href="download.php?f=EUbookshop/xml/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (1,089 aligned documents, 0.4M links, 26.1M tokens)" href="download.php?f=EUbookshop/xml/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Albanian' (4 aligned documents, 2.2k links, 0.1M tokens)" href="download.php?f=EUbookshop/xml/sq-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Serbian' (4 aligned documents, 1.8k links, 95.5k tokens)" href="download.php?f=EUbookshop/xml/sr-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Swahili (sample file)" href="EUbookshop/sv-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="EUbookshop/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="EUbookshop/sv-zh_sample.html">view</a></td><th>sv</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/sw.tar.gz">sw</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Bulgarian' (3 aligned documents, 8 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/bg-sw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Czech' (3 aligned documents, 24 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/cs-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Danish' (3 aligned documents, 19 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/da-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-German' (3 aligned documents, 20 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/de-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (3 aligned documents, 12 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/el-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-English' (3 aligned documents, 27 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/en-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (3 aligned documents, 18 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/es-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Estonian' (3 aligned documents, 16 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/et-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Finnish' (3 aligned documents, 27 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/fi-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-French' (3 aligned documents, 25 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/fr-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Irish' (4 links, 0.2k tokens)" href="download.php?f=EUbookshop/xml/ga-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Croatian' (2 aligned documents, 7 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/hr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Hungarian' (3 aligned documents, 23 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/hu-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Italian' (3 aligned documents, 23 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/it-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Japanese' (96 tokens)" href="download.php?f=EUbookshop/xml/ja-sw.xml.gz">ces</a></td>
<th>sw</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Lithuanian' (3 aligned documents, 25 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/lt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Latvian' (3 aligned documents, 23 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/lv-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Macedonian' (2 aligned documents, 8 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/mk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Maltese' (3 aligned documents, 18 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/mt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-BokmÃ¥l, Norwegian' (3 aligned documents, 16 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/nb-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Dutch' (3 aligned documents, 24 links, 0.3k tokens)" href="download.php?f=EUbookshop/xml/nl-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Polish' (3 aligned documents, 19 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/pl-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (3 aligned documents, 20 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/pt-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Romanian' (3 aligned documents, 20 links, 0.6k tokens)" href="download.php?f=EUbookshop/xml/ro-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Russian' (3 aligned documents, 12 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/ru-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovak' (3 aligned documents, 20 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/sk-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Slovenian' (3 aligned documents, 22 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/sl-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Albanian' (3 aligned documents, 20 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/sq-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Serbian' (3 aligned documents, 9 links, 0.4k tokens)" href="download.php?f=EUbookshop/xml/sr-sw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Swedish' (3 aligned documents, 24 links, 0.5k tokens)" href="download.php?f=EUbookshop/xml/sv-sw.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="EUbookshop/sw-zh_sample.html">view</a></td><th>sw</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/tc.tar.gz">tc</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Danish' (0.6k links, 37.1k tokens)" href="download.php?f=EUbookshop/xml/da-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-German' (0.5k links, 34.3k tokens)" href="download.php?f=EUbookshop/xml/de-tc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-English' (0.1k links, 21.1k tokens)" href="download.php?f=EUbookshop/xml/en-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Spanish' (0.6k links, 40.2k tokens)" href="download.php?f=EUbookshop/xml/es-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-French' (0.5k links, 18.3k tokens)" href="download.php?f=EUbookshop/xml/fr-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Hungarian' (0.6k links, 36.3k tokens)" href="download.php?f=EUbookshop/xml/hu-tc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Italian' (0.6k links, 38.7k tokens)" href="download.php?f=EUbookshop/xml/it-tc.xml.gz">ces</a></td>
<td></td>
<th>tc</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Dutch' (0.5k links, 18.3k tokens)" href="download.php?f=EUbookshop/xml/nl-tc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-po' (18.3k tokens)" href="download.php?f=EUbookshop/xml/po-tc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'tc-Portuguese' (18.3k tokens)" href="download.php?f=EUbookshop/xml/pt-tc.xml.gz">ces</a></td>
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
<td></td><td></td><td></td><th>tc</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/tr.tar.gz">tr</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (51 aligned documents, 18.7k links, 0.5M tokens)" href="download.php?f=EUbookshop/xml/lt-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td></td><td></td><th>tr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/uk.tar.gz">uk</a></th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (8.0k tokens)" href="download.php?f=EUbookshop/xml/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (3 aligned documents, 19.7k tokens)" href="download.php?f=EUbookshop/xml/ca-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (4 aligned documents, 1.5k links, 70.1k tokens)" href="download.php?f=EUbookshop/xml/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Welsh' (0.3k links, 20.2k tokens)" href="download.php?f=EUbookshop/xml/cy-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (4 aligned documents, 1.3k links, 70.4k tokens)" href="download.php?f=EUbookshop/xml/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (5 aligned documents, 1.6k links, 75.4k tokens)" href="download.php?f=EUbookshop/xml/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (4 aligned documents, 0.8k links, 64.3k tokens)" href="download.php?f=EUbookshop/xml/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (6 aligned documents, 1.7k links, 92.6k tokens)" href="download.php?f=EUbookshop/xml/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (4 aligned documents, 1.4k links, 76.1k tokens)" href="download.php?f=EUbookshop/xml/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (4 aligned documents, 1.5k links, 33.8k tokens)" href="download.php?f=EUbookshop/xml/et-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (4 aligned documents, 1.5k links, 64.9k tokens)" href="download.php?f=EUbookshop/xml/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (5 aligned documents, 1.5k links, 35.3k tokens)" href="download.php?f=EUbookshop/xml/fr-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (0.3k links, 16.7k tokens)" href="download.php?f=EUbookshop/xml/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (4 aligned documents, 1.5k links, 70.9k tokens)" href="download.php?f=EUbookshop/xml/hu-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (4 aligned documents, 1.5k links, 76.7k tokens)" href="download.php?f=EUbookshop/xml/it-uk.xml.gz">ces</a></td>
<td></td>
<th>uk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (4 aligned documents, 1.4k links, 68.9k tokens)" href="download.php?f=EUbookshop/xml/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (4 aligned documents, 1.5k links, 68.8k tokens)" href="download.php?f=EUbookshop/xml/lv-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Maltese' (0.7k links, 30.5k tokens)" href="download.php?f=EUbookshop/xml/mt-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (4 aligned documents, 1.5k links, 33.8k tokens)" href="download.php?f=EUbookshop/xml/nl-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (4 aligned documents, 1.5k links, 71.2k tokens)" href="download.php?f=EUbookshop/xml/pl-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (4 aligned documents, 1.5k links, 77.3k tokens)" href="download.php?f=EUbookshop/xml/pt-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (2 aligned documents, 0.3k links, 13.8k tokens)" href="download.php?f=EUbookshop/xml/ru-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (4 aligned documents, 1.4k links, 70.3k tokens)" href="download.php?f=EUbookshop/xml/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (4 aligned documents, 1.3k links, 70.0k tokens)" href="download.php?f=EUbookshop/xml/sl-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (4 aligned documents, 1.4k links, 69.6k tokens)" href="download.php?f=EUbookshop/xml/sv-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th>uk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=EUbookshop/zh.tar.gz">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (3 aligned documents, 0.6k tokens)" href="download.php?f=EUbookshop/xml/ar-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (4 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/bg-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (5 aligned documents, 21.3k tokens)" href="download.php?f=EUbookshop/xml/cs-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (5 aligned documents, 8.4k tokens)" href="download.php?f=EUbookshop/xml/da-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (11 aligned documents, 83.7k tokens)" href="download.php?f=EUbookshop/xml/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (5 aligned documents, 18.4k tokens)" href="download.php?f=EUbookshop/xml/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (18 aligned documents, 0.1M tokens)" href="download.php?f=EUbookshop/xml/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (9 aligned documents, 39.9k tokens)" href="download.php?f=EUbookshop/xml/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (5 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/et-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (5 aligned documents, 6.6k tokens)" href="download.php?f=EUbookshop/xml/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (15 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/fr-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Irish' (2 aligned documents, 1.1k tokens)" href="download.php?f=EUbookshop/xml/ga-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (73 tokens)" href="download.php?f=EUbookshop/xml/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (5 aligned documents, 20.8k tokens)" href="download.php?f=EUbookshop/xml/hu-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (6 aligned documents, 31.2k tokens)" href="download.php?f=EUbookshop/xml/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (2 aligned documents, 2.5k tokens)" href="download.php?f=EUbookshop/xml/ja-zh.xml.gz">ces</a></td>
<th>zh</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (5 aligned documents, 8.4k tokens)" href="download.php?f=EUbookshop/xml/lt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (5 aligned documents, 33.0k tokens)" href="download.php?f=EUbookshop/xml/lv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (82 tokens)" href="download.php?f=EUbookshop/xml/mk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Maltese' (4 aligned documents, 2.6k tokens)" href="download.php?f=EUbookshop/xml/mt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (2 aligned documents, 0.1k tokens)" href="download.php?f=EUbookshop/xml/nb-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (5 aligned documents, 0 tokens)" href="download.php?f=EUbookshop/xml/nl-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (6 aligned documents, 14.9k tokens)" href="download.php?f=EUbookshop/xml/pl-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (7 aligned documents, 25.2k tokens)" href="download.php?f=EUbookshop/xml/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (4 aligned documents, 29.8k tokens)" href="download.php?f=EUbookshop/xml/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (8 aligned documents, 14.1k tokens)" href="download.php?f=EUbookshop/xml/ru-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (5 aligned documents, 22.9k tokens)" href="download.php?f=EUbookshop/xml/sk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (5 aligned documents, 21.0k tokens)" href="download.php?f=EUbookshop/xml/sl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/xml/sq-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (2 aligned documents, 43 tokens)" href="download.php?f=EUbookshop/xml/sr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (5 aligned documents, 19.3k tokens)" href="download.php?f=EUbookshop/xml/sv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (2 aligned documents, 0.2k tokens)" href="download.php?f=EUbookshop/xml/sw-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th>zh</th></tr>
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
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>ar</th><th>be</th><th>bg</th><th>bs</th><th>ca</th><th>cn</th><th>cs</th><th>cy</th><th>da</th><th>de</th><th>el</th><th>en</th><th>es</th><th>et</th><th>fi</th><th>fr</th><th>fr_BE</th><th>ga</th><th>gd</th><th>hr</th><th>hu</th><th>is</th><th>it</th><th>ja</th><th>lb</th><th>lt</th><th>lv</th><th>mk</th><th>mt</th><th>nb</th><th>nl</th><th>nl_BE</th><th>pl</th><th>po</th><th>pt</th><th>ro</th><th>ru</th><th>sh</th><th>sk</th><th>sl</th><th>sq</th><th>sr</th><th>sv</th><th>sw</th><th>tc</th><th>tr</th><th>uk</th><th>zh</th></tr> <tr><th>ar</th><td>30</td> <td>78.2k</td> <td>4.5k</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Bulgarian (16 sentence pairs, 0.64k words) - TMX format' href="download.php?f=EUbookshop/ar-bg.tmx.gz">16</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Czech (105 sentence pairs, 2.81k words) - TMX format' href="download.php?f=EUbookshop/ar-cs.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Danish (101 sentence pairs, 3.04k words) - TMX format' href="download.php?f=EUbookshop/ar-da.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-German (160 sentence pairs, 5.18k words) - TMX format' href="download.php?f=EUbookshop/ar-de.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Greek (107 sentence pairs, 4.96k words) - TMX format' href="download.php?f=EUbookshop/ar-el.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Arabic-English (1,592 sentence pairs, 59.85k words) - TMX format' href="download.php?f=EUbookshop/ar-en.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Spanish (190 sentence pairs, 7.48k words) - TMX format' href="download.php?f=EUbookshop/ar-es.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Estonian (106 sentence pairs, 2.64k words) - TMX format' href="download.php?f=EUbookshop/ar-et.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Finnish (119 sentence pairs, 3.34k words) - TMX format' href="download.php?f=EUbookshop/ar-fi.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Arabic-French (1,219 sentence pairs, 54.41k words) - TMX format' href="download.php?f=EUbookshop/ar-fr.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Irish (16 sentence pairs, 0.53k words) - TMX format' href="download.php?f=EUbookshop/ar-ga.tmx.gz">16</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Hungarian (135 sentence pairs, 4.00k words) - TMX format' href="download.php?f=EUbookshop/ar-hu.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Italian (182 sentence pairs, 6.50k words) - TMX format' href="download.php?f=EUbookshop/ar-it.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Lithuanian (108 sentence pairs, 3.00k words) - TMX format' href="download.php?f=EUbookshop/ar-lt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Latvian (109 sentence pairs, 2.96k words) - TMX format' href="download.php?f=EUbookshop/ar-lv.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Maltese (197 sentence pairs, 5.93k words) - TMX format' href="download.php?f=EUbookshop/ar-mt.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Dutch (108 sentence pairs, 3.47k words) - TMX format' href="download.php?f=EUbookshop/ar-nl.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Polish (118 sentence pairs, 3.59k words) - TMX format' href="download.php?f=EUbookshop/ar-pl.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Portuguese (114 sentence pairs, 3.90k words) - TMX format' href="download.php?f=EUbookshop/ar-pt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Romanian (117 sentence pairs, 3.78k words) - TMX format' href="download.php?f=EUbookshop/ar-ro.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Russian (984 sentence pairs, 33.56k words) - TMX format' href="download.php?f=EUbookshop/ar-ru.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Slovak (107 sentence pairs, 3.35k words) - TMX format' href="download.php?f=EUbookshop/ar-sk.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Slovenian (158 sentence pairs, 4.90k words) - TMX format' href="download.php?f=EUbookshop/ar-sl.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Swedish (107 sentence pairs, 3.17k words) - TMX format' href="download.php?f=EUbookshop/ar-sv.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>be</th><td>1</td> <td>0.1k</td> <td>13</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-English (6 sentence pairs, 0.13k words) - TMX format' href="download.php?f=EUbookshop/be-en.tmx.gz">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>bg</th><td>751</td> <td>0</td> <td>0.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Arabic (16 sentence pairs, 0.64k words) - Moses format' href="download.php?f=EUbookshop/ar-bg.txt.zip">16</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Bosnian (349 sentence pairs, 18.54k words) - TMX format' href="download.php?f=EUbookshop/bg-bs.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bulgarian-Catalan (938 sentence pairs, 38.27k words) - TMX format' href="download.php?f=EUbookshop/bg-ca.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Czech (187,584 sentence pairs, 8.07M words) - TMX format' href="download.php?f=EUbookshop/bg-cs.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Danish (167,738 sentence pairs, 8.06M words) - TMX format' href="download.php?f=EUbookshop/bg-da.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bulgarian-German (183,318 sentence pairs, 8.14M words) - TMX format' href="download.php?f=EUbookshop/bg-de.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Greek (204,175 sentence pairs, 10.43M words) - TMX format' href="download.php?f=EUbookshop/bg-el.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-English (197,182 sentence pairs, 9.48M words) - TMX format' href="download.php?f=EUbookshop/bg-en.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Spanish (193,848 sentence pairs, 10.17M words) - TMX format' href="download.php?f=EUbookshop/bg-es.tmx.gz">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Estonian (184,033 sentence pairs, 7.61M words) - TMX format' href="download.php?f=EUbookshop/bg-et.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bulgarian-Finnish (182,754 sentence pairs, 7.27M words) - TMX format' href="download.php?f=EUbookshop/bg-fi.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-French (177,948 sentence pairs, 8.45M words) - TMX format' href="download.php?f=EUbookshop/bg-fr.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='Bulgarian-Irish (42,170 sentence pairs, 1.87M words) - TMX format' href="download.php?f=EUbookshop/bg-ga.tmx.gz">42.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Gaelic (49 sentence pairs, 1.63k words) - TMX format' href="download.php?f=EUbookshop/bg-gd.tmx.gz">49</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Bulgarian-Croatian (2,686 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/bg-hr.tmx.gz">2.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Hungarian (184,275 sentence pairs, 7.87M words) - TMX format' href="download.php?f=EUbookshop/bg-hu.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Bulgarian-Icelandic (6,191 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/bg-is.tmx.gz">6.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Italian (187,862 sentence pairs, 8.89M words) - TMX format' href="download.php?f=EUbookshop/bg-it.tmx.gz">0.2M</a>
</td><td></td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Lithuanian (193,587 sentence pairs, 8.10M words) - TMX format' href="download.php?f=EUbookshop/bg-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Latvian (192,950 sentence pairs, 8.40M words) - TMX format' href="download.php?f=EUbookshop/bg-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Bulgarian-Macedonian (2,529 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/bg-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Maltese (125,078 sentence pairs, 4.83M words) - TMX format' href="download.php?f=EUbookshop/bg-mt.tmx.gz">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (14,905 sentence pairs, 0.64M words) - TMX format' href="download.php?f=EUbookshop/bg-nb.tmx.gz">14.9k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bulgarian-Dutch (195,349 sentence pairs, 9.69M words) - TMX format' href="download.php?f=EUbookshop/bg-nl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Polish (205,513 sentence pairs, 9.29M words) - TMX format' href="download.php?f=EUbookshop/bg-pl.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bulgarian-Portuguese (187,573 sentence pairs, 9.38M words) - TMX format' href="download.php?f=EUbookshop/bg-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bulgarian-Romanian (207,858 sentence pairs, 10.14M words) - TMX format' href="download.php?f=EUbookshop/bg-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bulgarian-Russian (942 sentence pairs, 25.27k words) - TMX format' href="download.php?f=EUbookshop/bg-ru.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Slovak (187,791 sentence pairs, 8.48M words) - TMX format' href="download.php?f=EUbookshop/bg-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bulgarian-Slovenian (163,052 sentence pairs, 7.12M words) - TMX format' href="download.php?f=EUbookshop/bg-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Bulgarian-Albanian (1,499 sentence pairs, 61.62k words) - TMX format' href="download.php?f=EUbookshop/bg-sq.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bulgarian-Serbian (1,439 sentence pairs, 56.69k words) - TMX format' href="download.php?f=EUbookshop/bg-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Swedish (180,663 sentence pairs, 8.45M words) - TMX format' href="download.php?f=EUbookshop/bg-sv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Swahili (8 sentence pairs, 0.24k words) - TMX format' href="download.php?f=EUbookshop/bg-sw.tmx.gz">8</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>bs</th><td>5</td> <td>27.0k</td> <td>0.9k</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Bulgarian (365 sentence pairs, 18.70k words) - Moses format' href="download.php?f=EUbookshop/bg-bs.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Czech (385 sentence pairs, 19.66k words) - TMX format' href="download.php?f=EUbookshop/bs-cs.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-German (357 sentence pairs, 17.87k words) - TMX format' href="download.php?f=EUbookshop/bs-de.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Greek (372 sentence pairs, 19.80k words) - TMX format' href="download.php?f=EUbookshop/bs-el.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-English (556 sentence pairs, 30.03k words) - TMX format' href="download.php?f=EUbookshop/bs-en.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Spanish (374 sentence pairs, 22.41k words) - TMX format' href="download.php?f=EUbookshop/bs-es.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Estonian (373 sentence pairs, 16.61k words) - TMX format' href="download.php?f=EUbookshop/bs-et.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Finnish (387 sentence pairs, 17.78k words) - TMX format' href="download.php?f=EUbookshop/bs-fi.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-French (348 sentence pairs, 18.96k words) - TMX format' href="download.php?f=EUbookshop/bs-fr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Croatian (625 sentence pairs, 33.57k words) - TMX format' href="download.php?f=EUbookshop/bs-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Hungarian (31 sentence pairs, 1.84k words) - TMX format' href="download.php?f=EUbookshop/bs-hu.tmx.gz">31</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Italian (28 sentence pairs, 1.97k words) - TMX format' href="download.php?f=EUbookshop/bs-it.tmx.gz">28</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Lithuanian (333 sentence pairs, 16.07k words) - TMX format' href="download.php?f=EUbookshop/bs-lt.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Latvian (367 sentence pairs, 18.26k words) - TMX format' href="download.php?f=EUbookshop/bs-lv.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Macedonian (420 sentence pairs, 22.73k words) - TMX format' href="download.php?f=EUbookshop/bs-mk.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-BokmÃ¥l, Norwegian (312 sentence pairs, 16.58k words) - TMX format' href="download.php?f=EUbookshop/bs-nb.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Dutch (383 sentence pairs, 20.70k words) - TMX format' href="download.php?f=EUbookshop/bs-nl.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Polish (373 sentence pairs, 18.65k words) - TMX format' href="download.php?f=EUbookshop/bs-pl.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Romanian (374 sentence pairs, 21.32k words) - TMX format' href="download.php?f=EUbookshop/bs-ro.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-sh (282 sentence pairs, 15.44k words) - TMX format' href="download.php?f=EUbookshop/bs-sh.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Slovak (354 sentence pairs, 17.62k words) - TMX format' href="download.php?f=EUbookshop/bs-sk.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Slovenian (409 sentence pairs, 20.43k words) - TMX format' href="download.php?f=EUbookshop/bs-sl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bosnian-Albanian (725 sentence pairs, 43.41k words) - TMX format' href="download.php?f=EUbookshop/bs-sq.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Serbian (562 sentence pairs, 31.89k words) - TMX format' href="download.php?f=EUbookshop/bs-sr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Swedish (367 sentence pairs, 18.75k words) - TMX format' href="download.php?f=EUbookshop/bs-sv.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>ca</th><td>37</td> <td>0.1M</td> <td>6.5k</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Catalan-Bulgarian (941 sentence pairs, 38.29k words) - Moses format' href="download.php?f=EUbookshop/bg-ca.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Catalan-Czech (1,690 sentence pairs, 67.24k words) - TMX format' href="download.php?f=EUbookshop/ca-cs.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Catalan-Danish (2,321 sentence pairs, 96.10k words) - TMX format' href="download.php?f=EUbookshop/ca-da.tmx.gz">2.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-German (2,278 sentence pairs, 86.32k words) - TMX format' href="download.php?f=EUbookshop/ca-de.tmx.gz">2.3k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Catalan-Greek (2,328 sentence pairs, 96.06k words) - TMX format' href="download.php?f=EUbookshop/ca-el.tmx.gz">2.3k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Catalan-English (3,810 sentence pairs, 0.16M words) - TMX format' href="download.php?f=EUbookshop/ca-en.tmx.gz">3.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Spanish (3,061 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-es.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Catalan-Estonian (1,713 sentence pairs, 61.43k words) - TMX format' href="download.php?f=EUbookshop/ca-et.tmx.gz">1.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-Finnish (2,490 sentence pairs, 86.11k words) - TMX format' href="download.php?f=EUbookshop/ca-fi.tmx.gz">2.5k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Catalan-French (3,120 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/ca-fr.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Irish (126 sentence pairs, 4.53k words) - TMX format' href="download.php?f=EUbookshop/ca-ga.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Gaelic (63 sentence pairs, 2.08k words) - TMX format' href="download.php?f=EUbookshop/ca-gd.tmx.gz">63</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Croatian (567 sentence pairs, 22.85k words) - TMX format' href="download.php?f=EUbookshop/ca-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Hungarian (1,139 sentence pairs, 45.45k words) - TMX format' href="download.php?f=EUbookshop/ca-hu.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Catalan-Italian (3,053 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/ca-it.tmx.gz">3.1k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Lithuanian (1,852 sentence pairs, 68.29k words) - TMX format' href="download.php?f=EUbookshop/ca-lt.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Catalan-Latvian (1,714 sentence pairs, 64.32k words) - TMX format' href="download.php?f=EUbookshop/ca-lv.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Catalan-Maltese (1,395 sentence pairs, 55.99k words) - TMX format' href="download.php?f=EUbookshop/ca-mt.tmx.gz">1.4k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Catalan-Dutch (3,089 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/ca-nl.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Polish (1,720 sentence pairs, 69.55k words) - TMX format' href="download.php?f=EUbookshop/ca-pl.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Catalan-Portuguese (2,791 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/ca-pt.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Catalan-Romanian (737 sentence pairs, 30.49k words) - TMX format' href="download.php?f=EUbookshop/ca-ro.tmx.gz">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Slovak (1,907 sentence pairs, 74.07k words) - TMX format' href="download.php?f=EUbookshop/ca-sk.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Slovenian (1,786 sentence pairs, 71.88k words) - TMX format' href="download.php?f=EUbookshop/ca-sl.tmx.gz">1.8k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Swedish (1,820 sentence pairs, 70.77k words) - TMX format' href="download.php?f=EUbookshop/ca-sv.tmx.gz">1.8k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>cn</th><td>1</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>cs</th><td>1,194</td> <td>16.3M</td> <td>1.0M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Arabic (105 sentence pairs, 2.81k words) - Moses format' href="download.php?f=EUbookshop/ar-cs.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Czech-Bulgarian (222,797 sentence pairs, 8.76M words) - Moses format' href="download.php?f=EUbookshop/bg-cs.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Bosnian (401 sentence pairs, 19.80k words) - Moses format' href="download.php?f=EUbookshop/bs-cs.txt.zip">0.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Czech-Catalan (1,723 sentence pairs, 67.46k words) - Moses format' href="download.php?f=EUbookshop/ca-cs.txt.zip">1.7k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Welsh (537 sentence pairs, 13.44k words) - TMX format' href="download.php?f=EUbookshop/cs-cy.tmx.gz">0.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Danish (330,824 sentence pairs, 14.14M words) - TMX format' href="download.php?f=EUbookshop/cs-da.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-German (375,561 sentence pairs, 14.87M words) - TMX format' href="download.php?f=EUbookshop/cs-de.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Greek (343,205 sentence pairs, 15.73M words) - TMX format' href="download.php?f=EUbookshop/cs-el.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-English (404,916 sentence pairs, 16.80M words) - TMX format' href="download.php?f=EUbookshop/cs-en.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Czech-Spanish (372,879 sentence pairs, 17.46M words) - TMX format' href="download.php?f=EUbookshop/cs-es.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Estonian (366,479 sentence pairs, 13.11M words) - TMX format' href="download.php?f=EUbookshop/cs-et.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Finnish (356,055 sentence pairs, 12.36M words) - TMX format' href="download.php?f=EUbookshop/cs-fi.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-French (359,195 sentence pairs, 15.17M words) - TMX format' href="download.php?f=EUbookshop/cs-fr.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Czech-Irish (58,889 sentence pairs, 2.44M words) - TMX format' href="download.php?f=EUbookshop/cs-ga.tmx.gz">58.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Gaelic (25 sentence pairs, 0.80k words) - TMX format' href="download.php?f=EUbookshop/cs-gd.tmx.gz">25</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Czech-Croatian (3,842 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/cs-hr.tmx.gz">3.8k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Hungarian (358,296 sentence pairs, 13.55M words) - TMX format' href="download.php?f=EUbookshop/cs-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Czech-Icelandic (8,041 sentence pairs, 0.28M words) - TMX format' href="download.php?f=EUbookshop/cs-is.tmx.gz">8.0k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Czech-Italian (404,527 sentence pairs, 17.33M words) - TMX format' href="download.php?f=EUbookshop/cs-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Japanese (59 sentence pairs, 2.25k words) - TMX format' href="download.php?f=EUbookshop/cs-ja.tmx.gz">59</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Lithuanian (379,512 sentence pairs, 13.89M words) - TMX format' href="download.php?f=EUbookshop/cs-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Latvian (372,608 sentence pairs, 14.04M words) - TMX format' href="download.php?f=EUbookshop/cs-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Czech-Macedonian (2,806 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/cs-mk.tmx.gz">2.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Czech-Maltese (251,896 sentence pairs, 9.05M words) - TMX format' href="download.php?f=EUbookshop/cs-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (20,198 sentence pairs, 0.79M words) - TMX format' href="download.php?f=EUbookshop/cs-nb.tmx.gz">20.2k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Czech-Dutch (365,850 sentence pairs, 15.86M words) - TMX format' href="download.php?f=EUbookshop/cs-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Polish (393,164 sentence pairs, 15.40M words) - TMX format' href="download.php?f=EUbookshop/cs-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-Portuguese (366,656 sentence pairs, 16.29M words) - TMX format' href="download.php?f=EUbookshop/cs-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Romanian (283,014 sentence pairs, 12.33M words) - TMX format' href="download.php?f=EUbookshop/cs-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Czech-Russian (1,977 sentence pairs, 85.51k words) - TMX format' href="download.php?f=EUbookshop/cs-ru.tmx.gz">2.0k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Slovak (392,693 sentence pairs, 15.51M words) - TMX format' href="download.php?f=EUbookshop/cs-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Slovenian (354,423 sentence pairs, 14.04M words) - TMX format' href="download.php?f=EUbookshop/cs-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Czech-Albanian (1,737 sentence pairs, 62.39k words) - TMX format' href="download.php?f=EUbookshop/cs-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Czech-Serbian (1,556 sentence pairs, 55.50k words) - TMX format' href="download.php?f=EUbookshop/cs-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Czech-Swedish (357,080 sentence pairs, 14.54M words) - TMX format' href="download.php?f=EUbookshop/cs-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Swahili (23 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/cs-sw.tmx.gz">23</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Czech-Ukrainian (1,378 sentence pairs, 39.52k words) - TMX format' href="download.php?f=EUbookshop/cs-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>cy</th><td>12</td> <td>89.6k</td> <td>4.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Czech (555 sentence pairs, 13.52k words) - Moses format' href="download.php?f=EUbookshop/cs-cy.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Danish (437 sentence pairs, 13.06k words) - TMX format' href="download.php?f=EUbookshop/cy-da.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-German (534 sentence pairs, 14.05k words) - TMX format' href="download.php?f=EUbookshop/cy-de.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Greek (497 sentence pairs, 14.31k words) - TMX format' href="download.php?f=EUbookshop/cy-el.tmx.gz">0.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Welsh-English (2,902 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/cy-en.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Spanish (496 sentence pairs, 15.05k words) - TMX format' href="download.php?f=EUbookshop/cy-es.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Estonian (512 sentence pairs, 12.18k words) - TMX format' href="download.php?f=EUbookshop/cy-et.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Finnish (539 sentence pairs, 12.45k words) - TMX format' href="download.php?f=EUbookshop/cy-fi.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-French (550 sentence pairs, 15.55k words) - TMX format' href="download.php?f=EUbookshop/cy-fr.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Irish (397 sentence pairs, 10.62k words) - TMX format' href="download.php?f=EUbookshop/cy-ga.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Croatian (503 sentence pairs, 13.29k words) - TMX format' href="download.php?f=EUbookshop/cy-hr.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Hungarian (540 sentence pairs, 12.97k words) - TMX format' href="download.php?f=EUbookshop/cy-hu.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Italian (509 sentence pairs, 13.81k words) - TMX format' href="download.php?f=EUbookshop/cy-it.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Lithuanian (570 sentence pairs, 12.87k words) - TMX format' href="download.php?f=EUbookshop/cy-lt.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Latvian (521 sentence pairs, 12.62k words) - TMX format' href="download.php?f=EUbookshop/cy-lv.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Welsh-Dutch (521 sentence pairs, 14.46k words) - TMX format' href="download.php?f=EUbookshop/cy-nl.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Polish (512 sentence pairs, 12.75k words) - TMX format' href="download.php?f=EUbookshop/cy-pl.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Portuguese (499 sentence pairs, 14.07k words) - TMX format' href="download.php?f=EUbookshop/cy-pt.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Slovak (527 sentence pairs, 13.48k words) - TMX format' href="download.php?f=EUbookshop/cy-sk.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Slovenian (501 sentence pairs, 13.14k words) - TMX format' href="download.php?f=EUbookshop/cy-sl.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Swedish (508 sentence pairs, 13.26k words) - TMX format' href="download.php?f=EUbookshop/cy-sv.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Welsh-Ukrainian (283 sentence pairs, 7.67k words) - TMX format' href="download.php?f=EUbookshop/cy-uk.tmx.gz">0.3k</a>
</td><td></td></tr> <tr><th>da</th><td>7,081</td> <td>207.9M</td> <td>9.3M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Arabic (101 sentence pairs, 3.04k words) - Moses format' href="download.php?f=EUbookshop/ar-da.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Danish-Bulgarian (191,117 sentence pairs, 8.67M words) - Moses format' href="download.php?f=EUbookshop/bg-da.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Danish-Catalan (2,487 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/ca-da.txt.zip">2.5k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Czech (378,409 sentence pairs, 15.15M words) - Moses format' href="download.php?f=EUbookshop/cs-da.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Welsh (448 sentence pairs, 13.11k words) - Moses format' href="download.php?f=EUbookshop/cy-da.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-German (4,541,746 sentence pairs, 203.04M words) - TMX format' href="download.php?f=EUbookshop/da-de.tmx.gz">4.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Greek (3,430,492 sentence pairs, 155.73M words) - TMX format' href="download.php?f=EUbookshop/da-el.tmx.gz">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-English (4,624,587 sentence pairs, 215.45M words) - TMX format' href="download.php?f=EUbookshop/da-en.tmx.gz">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Spanish (3,638,006 sentence pairs, 187.89M words) - TMX format' href="download.php?f=EUbookshop/da-es.tmx.gz">3.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Estonian (337,958 sentence pairs, 13.41M words) - TMX format' href="download.php?f=EUbookshop/da-et.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Finnish (1,669,661 sentence pairs, 64.46M words) - TMX format' href="download.php?f=EUbookshop/da-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-French (4,165,459 sentence pairs, 202.83M words) - TMX format' href="download.php?f=EUbookshop/da-fr.tmx.gz">4.2M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Danish-Irish (83,432 sentence pairs, 3.92M words) - TMX format' href="download.php?f=EUbookshop/da-ga.tmx.gz">83.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Gaelic (26 sentence pairs, 0.85k words) - TMX format' href="download.php?f=EUbookshop/da-gd.tmx.gz">26</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Danish-Croatian (2,848 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/da-hr.tmx.gz">2.8k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Hungarian (323,210 sentence pairs, 13.65M words) - TMX format' href="download.php?f=EUbookshop/da-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Danish-Icelandic (9,583 sentence pairs, 0.35M words) - TMX format' href="download.php?f=EUbookshop/da-is.tmx.gz">9.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Italian (4,527,233 sentence pairs, 214.49M words) - TMX format' href="download.php?f=EUbookshop/da-it.tmx.gz">4.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Japanese (75 sentence pairs, 2.24k words) - TMX format' href="download.php?f=EUbookshop/da-ja.tmx.gz">75</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Lithuanian (331,427 sentence pairs, 13.50M words) - TMX format' href="download.php?f=EUbookshop/da-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Latvian (332,050 sentence pairs, 13.93M words) - TMX format' href="download.php?f=EUbookshop/da-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Danish-Macedonian (1,109 sentence pairs, 42.69k words) - TMX format' href="download.php?f=EUbookshop/da-mk.tmx.gz">1.1k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Danish-Maltese (229,634 sentence pairs, 9.04M words) - TMX format' href="download.php?f=EUbookshop/da-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (24,404 sentence pairs, 1.03M words) - TMX format' href="download.php?f=EUbookshop/da-nb.tmx.gz">24.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Dutch (4,764,927 sentence pairs, 229.45M words) - TMX format' href="download.php?f=EUbookshop/da-nl.tmx.gz">4.8M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Polish (338,565 sentence pairs, 14.95M words) - TMX format' href="download.php?f=EUbookshop/da-pl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Danish-Portuguese (3,355,761 sentence pairs, 166.14M words) - TMX format' href="download.php?f=EUbookshop/da-pt.tmx.gz">3.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Romanian (243,942 sentence pairs, 11.96M words) - TMX format' href="download.php?f=EUbookshop/da-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Danish-Russian (5,057 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/da-ru.tmx.gz">5.1k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Slovak (328,783 sentence pairs, 14.34M words) - TMX format' href="download.php?f=EUbookshop/da-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Slovenian (307,857 sentence pairs, 13.44M words) - TMX format' href="download.php?f=EUbookshop/da-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Albanian (16 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/da-sq.tmx.gz">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Serbian (5 sentence pairs, 0.15k words) - TMX format' href="download.php?f=EUbookshop/da-sr.tmx.gz">5</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Danish-Swedish (1,658,536 sentence pairs, 73.59M words) - TMX format' href="download.php?f=EUbookshop/da-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Swahili (17 sentence pairs, 0.24k words) - TMX format' href="download.php?f=EUbookshop/da-sw.tmx.gz">17</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Danish-tc (567 sentence pairs, 22.12k words) - TMX format' href="download.php?f=EUbookshop/da-tc.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Danish-Ukrainian (1,284 sentence pairs, 38.32k words) - TMX format' href="download.php?f=EUbookshop/da-uk.tmx.gz">1.3k</a>
</td><td></td></tr> <tr><th>de</th><td>15,585</td> <td>353.4M</td> <td>20.0M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Arabic (160 sentence pairs, 5.18k words) - Moses format' href="download.php?f=EUbookshop/ar-de.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Bulgarian (209,082 sentence pairs, 8.70M words) - Moses format' href="download.php?f=EUbookshop/bg-de.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Bosnian (366 sentence pairs, 17.95k words) - Moses format' href="download.php?f=EUbookshop/bs-de.txt.zip">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='German-Catalan (2,603 sentence pairs, 96.52k words) - Moses format' href="download.php?f=EUbookshop/ca-de.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='German-Czech (432,217 sentence pairs, 15.85M words) - Moses format' href="download.php?f=EUbookshop/cs-de.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Welsh (550 sentence pairs, 14.12k words) - Moses format' href="download.php?f=EUbookshop/cy-de.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Danish (4,961,882 sentence pairs, 208.70M words) - Moses format' href="download.php?f=EUbookshop/da-de.txt.zip">5.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Greek (3,830,923 sentence pairs, 163.69M words) - TMX format' href="download.php?f=EUbookshop/de-el.tmx.gz">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-English (8,711,956 sentence pairs, 356.52M words) - TMX format' href="download.php?f=EUbookshop/de-en.tmx.gz">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Spanish (4,622,557 sentence pairs, 220.59M words) - TMX format' href="download.php?f=EUbookshop/de-es.tmx.gz">4.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Estonian (342,276 sentence pairs, 12.59M words) - TMX format' href="download.php?f=EUbookshop/de-et.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='German-Finnish (1,746,089 sentence pairs, 63.27M words) - TMX format' href="download.php?f=EUbookshop/de-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-French (8,214,871 sentence pairs, 357.61M words) - TMX format' href="download.php?f=EUbookshop/de-fr.tmx.gz">8.2M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='German-Irish (88,146 sentence pairs, 3.84M words) - TMX format' href="download.php?f=EUbookshop/de-ga.tmx.gz">88.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Gaelic (73 sentence pairs, 2.11k words) - TMX format' href="download.php?f=EUbookshop/de-gd.tmx.gz">73</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='German-Croatian (3,206 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/de-hr.tmx.gz">3.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Hungarian (361,258 sentence pairs, 14.48M words) - TMX format' href="download.php?f=EUbookshop/de-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='German-Icelandic (9,863 sentence pairs, 0.35M words) - TMX format' href="download.php?f=EUbookshop/de-is.tmx.gz">9.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Italian (5,686,148 sentence pairs, 251.76M words) - TMX format' href="download.php?f=EUbookshop/de-it.tmx.gz">5.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Japanese (95 sentence pairs, 3.25k words) - TMX format' href="download.php?f=EUbookshop/de-ja.tmx.gz">95</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Lithuanian (340,608 sentence pairs, 12.98M words) - TMX format' href="download.php?f=EUbookshop/de-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Latvian (339,490 sentence pairs, 13.25M words) - TMX format' href="download.php?f=EUbookshop/de-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='German-Macedonian (2,930 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/de-mk.tmx.gz">2.9k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='German-Maltese (241,596 sentence pairs, 9.18M words) - TMX format' href="download.php?f=EUbookshop/de-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (26,668 sentence pairs, 1.09M words) - TMX format' href="download.php?f=EUbookshop/de-nb.tmx.gz">26.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Dutch (5,406,793 sentence pairs, 245.44M words) - TMX format' href="download.php?f=EUbookshop/de-nl.tmx.gz">5.4M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='German-Polish (462,490 sentence pairs, 18.65M words) - TMX format' href="download.php?f=EUbookshop/de-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='German-Portuguese (3,609,256 sentence pairs, 169.39M words) - TMX format' href="download.php?f=EUbookshop/de-pt.tmx.gz">3.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Romanian (263,857 sentence pairs, 12.08M words) - TMX format' href="download.php?f=EUbookshop/de-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='German-Russian (8,718 sentence pairs, 0.31M words) - TMX format' href="download.php?f=EUbookshop/de-ru.tmx.gz">8.7k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Slovak (346,594 sentence pairs, 14.15M words) - TMX format' href="download.php?f=EUbookshop/de-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='German-Slovenian (321,269 sentence pairs, 13.30M words) - TMX format' href="download.php?f=EUbookshop/de-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='German-Albanian (1,641 sentence pairs, 60.86k words) - TMX format' href="download.php?f=EUbookshop/de-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='German-Serbian (1,426 sentence pairs, 51.25k words) - TMX format' href="download.php?f=EUbookshop/de-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='German-Swedish (1,683,147 sentence pairs, 70.91M words) - TMX format' href="download.php?f=EUbookshop/de-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Swahili (18 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/de-sw.tmx.gz">18</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-tc (509 sentence pairs, 17.21k words) - TMX format' href="download.php?f=EUbookshop/de-tc.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='German-Ukrainian (1,509 sentence pairs, 45.64k words) - TMX format' href="download.php?f=EUbookshop/de-uk.tmx.gz">1.5k</a>
</td><td></td></tr> <tr><th>el</th><td>6,486</td> <td>213.3M</td> <td>11.1M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Arabic (108 sentence pairs, 4.96k words) - Moses format' href="download.php?f=EUbookshop/ar-el.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc7"><a rel="nofollow" title='Greek-Bulgarian (234,635 sentence pairs, 10.90M words) - Moses format' href="download.php?f=EUbookshop/bg-el.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Bosnian (386 sentence pairs, 19.93k words) - Moses format' href="download.php?f=EUbookshop/bs-el.txt.zip">0.4k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Greek-Catalan (2,636 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/ca-el.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Greek-Czech (399,122 sentence pairs, 16.51M words) - Moses format' href="download.php?f=EUbookshop/cs-el.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Welsh (502 sentence pairs, 14.33k words) - Moses format' href="download.php?f=EUbookshop/cy-el.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Danish (3,732,230 sentence pairs, 159.79M words) - Moses format' href="download.php?f=EUbookshop/da-el.txt.zip">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-German (4,222,331 sentence pairs, 168.12M words) - Moses format' href="download.php?f=EUbookshop/de-el.txt.zip">4.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (3,758,195 sentence pairs, 162.31M words) - TMX format' href="download.php?f=EUbookshop/el-en.tmx.gz">3.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (3,578,906 sentence pairs, 178.99M words) - TMX format' href="download.php?f=EUbookshop/el-es.tmx.gz">3.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Estonian (309,646 sentence pairs, 13.64M words) - TMX format' href="download.php?f=EUbookshop/el-et.tmx.gz">0.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Greek-Finnish (1,582,419 sentence pairs, 59.49M words) - TMX format' href="download.php?f=EUbookshop/el-fi.tmx.gz">1.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (3,848,096 sentence pairs, 180.66M words) - TMX format' href="download.php?f=EUbookshop/el-fr.tmx.gz">3.8M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Greek-Irish (100,524 sentence pairs, 5.32M words) - TMX format' href="download.php?f=EUbookshop/el-ga.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Gaelic (38 sentence pairs, 0.91k words) - TMX format' href="download.php?f=EUbookshop/el-gd.tmx.gz">38</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Greek-Croatian (3,577 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/el-hr.tmx.gz">3.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Hungarian (333,635 sentence pairs, 15.22M words) - TMX format' href="download.php?f=EUbookshop/el-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Greek-Icelandic (9,020 sentence pairs, 0.33M words) - TMX format' href="download.php?f=EUbookshop/el-is.tmx.gz">9.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Italian (3,833,402 sentence pairs, 172.80M words) - TMX format' href="download.php?f=EUbookshop/el-it.tmx.gz">3.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Japanese (2 sentence pairs, 47 words) - TMX format' href="download.php?f=EUbookshop/el-ja.tmx.gz">2</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Lithuanian (334,216 sentence pairs, 14.45M words) - TMX format' href="download.php?f=EUbookshop/el-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Latvian (333,005 sentence pairs, 14.76M words) - TMX format' href="download.php?f=EUbookshop/el-lv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Greek-Macedonian (2,978 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/el-mk.tmx.gz">3.0k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Greek-Maltese (239,617 sentence pairs, 10.74M words) - TMX format' href="download.php?f=EUbookshop/el-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (20,438 sentence pairs, 0.94M words) - TMX format' href="download.php?f=EUbookshop/el-nb.tmx.gz">20.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Dutch (3,891,972 sentence pairs, 177.76M words) - TMX format' href="download.php?f=EUbookshop/el-nl.tmx.gz">3.9M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Greek-Polish (360,829 sentence pairs, 16.78M words) - TMX format' href="download.php?f=EUbookshop/el-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (3,296,894 sentence pairs, 158.12M words) - TMX format' href="download.php?f=EUbookshop/el-pt.tmx.gz">3.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Greek-Romanian (248,328 sentence pairs, 12.40M words) - TMX format' href="download.php?f=EUbookshop/el-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Greek-Russian (6,932 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/el-ru.tmx.gz">6.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Slovak (328,835 sentence pairs, 15.25M words) - TMX format' href="download.php?f=EUbookshop/el-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Slovenian (293,236 sentence pairs, 13.94M words) - TMX format' href="download.php?f=EUbookshop/el-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Greek-Albanian (1,758 sentence pairs, 68.50k words) - TMX format' href="download.php?f=EUbookshop/el-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Greek-Serbian (1,665 sentence pairs, 63.72k words) - TMX format' href="download.php?f=EUbookshop/el-sr.tmx.gz">1.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Swedish (1,470,156 sentence pairs, 64.35M words) - TMX format' href="download.php?f=EUbookshop/el-sv.tmx.gz">1.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Swahili (12 sentence pairs, 0.23k words) - TMX format' href="download.php?f=EUbookshop/el-sw.tmx.gz">12</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Greek-Ukrainian (747 sentence pairs, 28.31k words) - TMX format' href="download.php?f=EUbookshop/el-uk.tmx.gz">0.7k</a>
</td><td></td></tr> <tr><th>en</th><td>37,663</td> <td>1.2G</td> <td>87.1M</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='English-Arabic (1,722 sentence pairs, 61.01k words) - Moses format' href="download.php?f=EUbookshop/ar-en.txt.zip">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Belarusian (6 sentence pairs, 0.13k words) - Moses format' href="download.php?f=EUbookshop/be-en.txt.zip">6</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Bulgarian (235,201 sentence pairs, 10.32M words) - Moses format' href="download.php?f=EUbookshop/bg-en.txt.zip">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Bosnian (557 sentence pairs, 30.04k words) - Moses format' href="download.php?f=EUbookshop/bs-en.txt.zip">0.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='English-Catalan (4,281 sentence pairs, 0.17M words) - Moses format' href="download.php?f=EUbookshop/ca-en.txt.zip">4.3k</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='English-Czech (486,661 sentence pairs, 18.20M words) - Moses format' href="download.php?f=EUbookshop/cs-en.txt.zip">0.5M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='English-Welsh (3,112 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/cy-en.txt.zip">3.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Danish (5,128,138 sentence pairs, 223.33M words) - Moses format' href="download.php?f=EUbookshop/da-en.txt.zip">5.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-German (9,890,525 sentence pairs, 371.99M words) - Moses format' href="download.php?f=EUbookshop/de-en.txt.zip">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (4,236,883 sentence pairs, 167.72M words) - Moses format' href="download.php?f=EUbookshop/el-en.txt.zip">4.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (4,953,540 sentence pairs, 246.11M words) - TMX format' href="download.php?f=EUbookshop/en-es.tmx.gz">5.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Estonian (389,705 sentence pairs, 15.65M words) - TMX format' href="download.php?f=EUbookshop/en-et.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Finnish (1,888,466 sentence pairs, 72.07M words) - TMX format' href="download.php?f=EUbookshop/en-fi.tmx.gz">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (10,014,993 sentence pairs, 446.73M words) - TMX format' href="download.php?f=EUbookshop/en-fr.tmx.gz">10.0M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Irish (108,182 sentence pairs, 4.94M words) - TMX format' href="download.php?f=EUbookshop/en-ga.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Gaelic (105 sentence pairs, 2.17k words) - TMX format' href="download.php?f=EUbookshop/en-gd.tmx.gz">0.1k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='English-Croatian (6,070 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/en-hr.tmx.gz">6.1k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='English-Hungarian (381,127 sentence pairs, 15.84M words) - TMX format' href="download.php?f=EUbookshop/en-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='English-Icelandic (10,548 sentence pairs, 0.39M words) - TMX format' href="download.php?f=EUbookshop/en-is.tmx.gz">10.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Italian (6,156,025 sentence pairs, 281.89M words) - TMX format' href="download.php?f=EUbookshop/en-it.tmx.gz">6.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Japanese (99 sentence pairs, 3.16k words) - TMX format' href="download.php?f=EUbookshop/en-ja.tmx.gz">99</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Lithuanian (381,019 sentence pairs, 15.49M words) - TMX format' href="download.php?f=EUbookshop/en-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='English-Latvian (392,131 sentence pairs, 16.48M words) - TMX format' href="download.php?f=EUbookshop/en-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='English-Macedonian (2,537 sentence pairs, 94.59k words) - TMX format' href="download.php?f=EUbookshop/en-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Maltese (256,847 sentence pairs, 9.94M words) - TMX format' href="download.php?f=EUbookshop/en-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (28,365 sentence pairs, 1.16M words) - TMX format' href="download.php?f=EUbookshop/en-nb.tmx.gz">28.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (5,661,191 sentence pairs, 266.66M words) - TMX format' href="download.php?f=EUbookshop/en-nl.tmx.gz">5.7M</a>
</td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='English-Polish (507,396 sentence pairs, 21.58M words) - TMX format' href="download.php?f=EUbookshop/en-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (3,863,570 sentence pairs, 188.61M words) - TMX format' href="download.php?f=EUbookshop/en-pt.tmx.gz">3.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='English-Romanian (298,434 sentence pairs, 14.43M words) - TMX format' href="download.php?f=EUbookshop/en-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='English-Russian (46,405 sentence pairs, 1.66M words) - TMX format' href="download.php?f=EUbookshop/en-ru.tmx.gz">46.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-sh (533 sentence pairs, 22.15k words) - TMX format' href="download.php?f=EUbookshop/en-sh.tmx.gz">0.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='English-Slovak (400,651 sentence pairs, 17.43M words) - TMX format' href="download.php?f=EUbookshop/en-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='English-Slovenian (358,128 sentence pairs, 15.55M words) - TMX format' href="download.php?f=EUbookshop/en-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='English-Albanian (2,234 sentence pairs, 83.23k words) - TMX format' href="download.php?f=EUbookshop/en-sq.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Serbian (1,531 sentence pairs, 56.30k words) - TMX format' href="download.php?f=EUbookshop/en-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='English-Swedish (1,806,689 sentence pairs, 80.25M words) - TMX format' href="download.php?f=EUbookshop/en-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Swahili (24 sentence pairs, 0.37k words) - TMX format' href="download.php?f=EUbookshop/en-sw.tmx.gz">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-tc (133 sentence pairs, 0.52k words) - TMX format' href="download.php?f=EUbookshop/en-tc.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='English-Ukrainian (1,647 sentence pairs, 51.31k words) - TMX format' href="download.php?f=EUbookshop/en-uk.tmx.gz">1.6k</a>
</td><td></td></tr> <tr><th>es</th><td>7,716</td> <td>223.6M</td> <td>8.9M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Arabic (192 sentence pairs, 7.50k words) - Moses format' href="download.php?f=EUbookshop/ar-es.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Spanish-Bulgarian (225,545 sentence pairs, 10.96M words) - Moses format' href="download.php?f=EUbookshop/bg-es.txt.zip">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Bosnian (376 sentence pairs, 22.43k words) - Moses format' href="download.php?f=EUbookshop/bs-es.txt.zip">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Spanish-Catalan (3,461 sentence pairs, 0.15M words) - Moses format' href="download.php?f=EUbookshop/ca-es.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Spanish-Czech (431,212 sentence pairs, 18.71M words) - Moses format' href="download.php?f=EUbookshop/cs-es.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Welsh (508 sentence pairs, 15.11k words) - Moses format' href="download.php?f=EUbookshop/cy-es.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Danish (3,910,572 sentence pairs, 193.38M words) - Moses format' href="download.php?f=EUbookshop/da-es.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-German (4,955,230 sentence pairs, 226.39M words) - Moses format' href="download.php?f=EUbookshop/de-es.txt.zip">5.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (3,891,738 sentence pairs, 183.69M words) - Moses format' href="download.php?f=EUbookshop/el-es.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (5,421,668 sentence pairs, 254.20M words) - Moses format' href="download.php?f=EUbookshop/en-es.txt.zip">5.4M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Estonian (356,331 sentence pairs, 16.21M words) - TMX format' href="download.php?f=EUbookshop/es-et.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-Finnish (1,730,421 sentence pairs, 74.52M words) - TMX format' href="download.php?f=EUbookshop/es-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (4,762,799 sentence pairs, 246.56M words) - TMX format' href="download.php?f=EUbookshop/es-fr.tmx.gz">4.8M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Spanish-Irish (78,310 sentence pairs, 3.85M words) - TMX format' href="download.php?f=EUbookshop/es-ga.tmx.gz">78.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Gaelic (53 sentence pairs, 1.79k words) - TMX format' href="download.php?f=EUbookshop/es-gd.tmx.gz">53</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Spanish-Croatian (5,067 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/es-hr.tmx.gz">5.1k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Hungarian (355,108 sentence pairs, 16.62M words) - TMX format' href="download.php?f=EUbookshop/es-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Spanish-Icelandic (9,206 sentence pairs, 0.37M words) - TMX format' href="download.php?f=EUbookshop/es-is.tmx.gz">9.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Italian (4,410,697 sentence pairs, 224.44M words) - TMX format' href="download.php?f=EUbookshop/es-it.tmx.gz">4.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Japanese (72 sentence pairs, 1.76k words) - TMX format' href="download.php?f=EUbookshop/es-ja.tmx.gz">72</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Spanish-Lithuanian (349,817 sentence pairs, 15.96M words) - TMX format' href="download.php?f=EUbookshop/es-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Latvian (355,570 sentence pairs, 16.80M words) - TMX format' href="download.php?f=EUbookshop/es-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Spanish-Macedonian (2,735 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/es-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Spanish-Maltese (237,277 sentence pairs, 10.45M words) - TMX format' href="download.php?f=EUbookshop/es-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (25,486 sentence pairs, 1.19M words) - TMX format' href="download.php?f=EUbookshop/es-nb.tmx.gz">25.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (4,119,080 sentence pairs, 215.49M words) - TMX format' href="download.php?f=EUbookshop/es-nl.tmx.gz">4.1M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Spanish-Polish (474,290 sentence pairs, 22.69M words) - TMX format' href="download.php?f=EUbookshop/es-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (3,720,324 sentence pairs, 199.59M words) - TMX format' href="download.php?f=EUbookshop/es-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Spanish-Romanian (278,089 sentence pairs, 14.85M words) - TMX format' href="download.php?f=EUbookshop/es-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Spanish-Russian (8,256 sentence pairs, 0.33M words) - TMX format' href="download.php?f=EUbookshop/es-ru.tmx.gz">8.3k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Slovak (365,356 sentence pairs, 17.52M words) - TMX format' href="download.php?f=EUbookshop/es-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Spanish-Slovenian (324,707 sentence pairs, 15.68M words) - TMX format' href="download.php?f=EUbookshop/es-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Spanish-Albanian (1,686 sentence pairs, 75.04k words) - TMX format' href="download.php?f=EUbookshop/es-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Spanish-Serbian (1,474 sentence pairs, 63.12k words) - TMX format' href="download.php?f=EUbookshop/es-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-Swedish (1,669,361 sentence pairs, 81.90M words) - TMX format' href="download.php?f=EUbookshop/es-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Swahili (16 sentence pairs, 0.31k words) - TMX format' href="download.php?f=EUbookshop/es-sw.tmx.gz">16</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-tc (600 sentence pairs, 26.37k words) - TMX format' href="download.php?f=EUbookshop/es-tc.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Spanish-Ukrainian (1,316 sentence pairs, 43.85k words) - TMX format' href="download.php?f=EUbookshop/es-uk.tmx.gz">1.3k</a>
</td><td></td></tr> <tr><th>et</th><td>1,151</td> <td>0</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Arabic (106 sentence pairs, 2.64k words) - Moses format' href="download.php?f=EUbookshop/ar-et.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Estonian-Bulgarian (211,980 sentence pairs, 8.23M words) - Moses format' href="download.php?f=EUbookshop/bg-et.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Bosnian (387 sentence pairs, 16.71k words) - Moses format' href="download.php?f=EUbookshop/bs-et.txt.zip">0.4k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Estonian-Catalan (1,749 sentence pairs, 61.67k words) - Moses format' href="download.php?f=EUbookshop/ca-et.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Czech (428,171 sentence pairs, 14.13M words) - Moses format' href="download.php?f=EUbookshop/cs-et.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-Welsh (528 sentence pairs, 12.25k words) - Moses format' href="download.php?f=EUbookshop/cy-et.txt.zip">0.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Danish (387,896 sentence pairs, 14.37M words) - Moses format' href="download.php?f=EUbookshop/da-et.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-German (396,701 sentence pairs, 13.46M words) - Moses format' href="download.php?f=EUbookshop/de-et.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Greek (352,217 sentence pairs, 14.30M words) - Moses format' href="download.php?f=EUbookshop/el-et.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Estonian-English (454,629 sentence pairs, 16.83M words) - Moses format' href="download.php?f=EUbookshop/en-et.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Estonian-Spanish (406,260 sentence pairs, 17.33M words) - Moses format' href="download.php?f=EUbookshop/es-et.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Finnish (367,750 sentence pairs, 11.57M words) - TMX format' href="download.php?f=EUbookshop/et-fi.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-French (327,657 sentence pairs, 13.05M words) - TMX format' href="download.php?f=EUbookshop/et-fr.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Estonian-Irish (53,820 sentence pairs, 2.18M words) - TMX format' href="download.php?f=EUbookshop/et-ga.tmx.gz">53.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Gaelic (27 sentence pairs, 0.71k words) - TMX format' href="download.php?f=EUbookshop/et-gd.tmx.gz">27</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Estonian-Croatian (3,867 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/et-hr.tmx.gz">3.9k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Hungarian (364,595 sentence pairs, 12.92M words) - TMX format' href="download.php?f=EUbookshop/et-hu.tmx.gz">0.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Estonian-Icelandic (8,050 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/et-is.tmx.gz">8.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Italian (355,686 sentence pairs, 14.22M words) - TMX format' href="download.php?f=EUbookshop/et-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Japanese (45 sentence pairs, 1.11k words) - TMX format' href="download.php?f=EUbookshop/et-ja.tmx.gz">45</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Lithuanian (386,145 sentence pairs, 13.24M words) - TMX format' href="download.php?f=EUbookshop/et-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Latvian (386,678 sentence pairs, 13.74M words) - TMX format' href="download.php?f=EUbookshop/et-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Estonian-Macedonian (2,623 sentence pairs, 85.71k words) - TMX format' href="download.php?f=EUbookshop/et-mk.tmx.gz">2.6k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Maltese (256,314 sentence pairs, 8.49M words) - TMX format' href="download.php?f=EUbookshop/et-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (20,168 sentence pairs, 0.71M words) - TMX format' href="download.php?f=EUbookshop/et-nb.tmx.gz">20.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Dutch (378,815 sentence pairs, 15.55M words) - TMX format' href="download.php?f=EUbookshop/et-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Polish (380,822 sentence pairs, 14.24M words) - TMX format' href="download.php?f=EUbookshop/et-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Portuguese (353,736 sentence pairs, 15.01M words) - TMX format' href="download.php?f=EUbookshop/et-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Romanian (268,040 sentence pairs, 11.24M words) - TMX format' href="download.php?f=EUbookshop/et-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Estonian-Russian (1,935 sentence pairs, 77.44k words) - TMX format' href="download.php?f=EUbookshop/et-ru.tmx.gz">1.9k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Slovak (380,636 sentence pairs, 14.13M words) - TMX format' href="download.php?f=EUbookshop/et-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Slovenian (348,853 sentence pairs, 12.89M words) - TMX format' href="download.php?f=EUbookshop/et-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Estonian-Albanian (1,762 sentence pairs, 56.37k words) - TMX format' href="download.php?f=EUbookshop/et-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Serbian (1,514 sentence pairs, 46.80k words) - TMX format' href="download.php?f=EUbookshop/et-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Swedish (359,531 sentence pairs, 13.61M words) - TMX format' href="download.php?f=EUbookshop/et-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Swahili (13 sentence pairs, 0.31k words) - TMX format' href="download.php?f=EUbookshop/et-sw.tmx.gz">13</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Estonian-Ukrainian (1,383 sentence pairs, 35.49k words) - TMX format' href="download.php?f=EUbookshop/et-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>fi</th><td>4,055</td> <td>62.8M</td> <td>3.9M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Arabic (119 sentence pairs, 3.34k words) - Moses format' href="download.php?f=EUbookshop/ar-fi.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Finnish-Bulgarian (210,185 sentence pairs, 7.84M words) - Moses format' href="download.php?f=EUbookshop/bg-fi.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Bosnian (401 sentence pairs, 17.87k words) - Moses format' href="download.php?f=EUbookshop/bs-fi.txt.zip">0.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Finnish-Catalan (2,801 sentence pairs, 93.71k words) - Moses format' href="download.php?f=EUbookshop/ca-fi.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#ddffc7"><a rel="nofollow" title='Finnish-Czech (417,407 sentence pairs, 13.31M words) - Moses format' href="download.php?f=EUbookshop/cs-fi.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Welsh (555 sentence pairs, 12.52k words) - Moses format' href="download.php?f=EUbookshop/cy-fi.txt.zip">0.6k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Danish (1,835,266 sentence pairs, 66.68M words) - Moses format' href="download.php?f=EUbookshop/da-fi.txt.zip">1.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-German (1,932,079 sentence pairs, 65.39M words) - Moses format' href="download.php?f=EUbookshop/de-fi.txt.zip">1.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Greek (1,752,371 sentence pairs, 61.23M words) - Moses format' href="download.php?f=EUbookshop/el-fi.txt.zip">1.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-English (2,116,245 sentence pairs, 74.80M words) - Moses format' href="download.php?f=EUbookshop/en-fi.txt.zip">2.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Spanish (1,880,903 sentence pairs, 76.95M words) - Moses format' href="download.php?f=EUbookshop/es-fi.txt.zip">1.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Estonian (433,926 sentence pairs, 12.49M words) - Moses format' href="download.php?f=EUbookshop/et-fi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-French (1,771,597 sentence pairs, 71.17M words) - TMX format' href="download.php?f=EUbookshop/fi-fr.tmx.gz">1.8M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Finnish-Irish (70,313 sentence pairs, 2.74M words) - TMX format' href="download.php?f=EUbookshop/fi-ga.tmx.gz">70.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Gaelic (36 sentence pairs, 0.81k words) - TMX format' href="download.php?f=EUbookshop/fi-gd.tmx.gz">36</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Finnish-Croatian (4,648 sentence pairs, 0.15M words) - TMX format' href="download.php?f=EUbookshop/fi-hr.tmx.gz">4.6k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Hungarian (348,933 sentence pairs, 11.74M words) - TMX format' href="download.php?f=EUbookshop/fi-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Finnish-Icelandic (11,347 sentence pairs, 0.34M words) - TMX format' href="download.php?f=EUbookshop/fi-is.tmx.gz">11.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Finnish-Italian (1,789,255 sentence pairs, 70.59M words) - TMX format' href="download.php?f=EUbookshop/fi-it.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Japanese (73 sentence pairs, 1.13k words) - TMX format' href="download.php?f=EUbookshop/fi-ja.tmx.gz">73</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Lithuanian (373,193 sentence pairs, 11.97M words) - TMX format' href="download.php?f=EUbookshop/fi-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Latvian (372,539 sentence pairs, 12.32M words) - TMX format' href="download.php?f=EUbookshop/fi-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Finnish-Macedonian (2,862 sentence pairs, 92.72k words) - TMX format' href="download.php?f=EUbookshop/fi-mk.tmx.gz">2.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Finnish-Maltese (254,504 sentence pairs, 8.28M words) - TMX format' href="download.php?f=EUbookshop/fi-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (28,306 sentence pairs, 0.97M words) - TMX format' href="download.php?f=EUbookshop/fi-nb.tmx.gz">28.3k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Dutch (1,863,560 sentence pairs, 73.85M words) - TMX format' href="download.php?f=EUbookshop/fi-nl.tmx.gz">1.9M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Polish (363,146 sentence pairs, 12.91M words) - TMX format' href="download.php?f=EUbookshop/fi-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Portuguese (1,723,948 sentence pairs, 71.24M words) - TMX format' href="download.php?f=EUbookshop/fi-pt.tmx.gz">1.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Finnish-Romanian (255,329 sentence pairs, 10.28M words) - TMX format' href="download.php?f=EUbookshop/fi-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Finnish-Russian (6,101 sentence pairs, 0.19M words) - TMX format' href="download.php?f=EUbookshop/fi-ru.tmx.gz">6.1k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Slovak (369,975 sentence pairs, 12.76M words) - TMX format' href="download.php?f=EUbookshop/fi-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Slovenian (333,655 sentence pairs, 11.84M words) - TMX format' href="download.php?f=EUbookshop/fi-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Finnish-Albanian (1,853 sentence pairs, 61.18k words) - TMX format' href="download.php?f=EUbookshop/fi-sq.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Finnish-Serbian (1,587 sentence pairs, 50.70k words) - TMX format' href="download.php?f=EUbookshop/fi-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Swedish (1,797,399 sentence pairs, 65.90M words) - TMX format' href="download.php?f=EUbookshop/fi-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Swahili (24 sentence pairs, 0.30k words) - TMX format' href="download.php?f=EUbookshop/fi-sw.tmx.gz">24</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Finnish-Ukrainian (1,403 sentence pairs, 34.95k words) - TMX format' href="download.php?f=EUbookshop/fi-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>fr</th><td>17,261</td> <td>0</td> <td>0</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Arabic (1,256 sentence pairs, 54.75k words) - Moses format' href="download.php?f=EUbookshop/ar-fr.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='French-Bulgarian (201,796 sentence pairs, 9.11M words) - Moses format' href="download.php?f=EUbookshop/bg-fr.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Bosnian (361 sentence pairs, 19.07k words) - Moses format' href="download.php?f=EUbookshop/bs-fr.txt.zip">0.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='French-Catalan (3,512 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-fr.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='French-Czech (413,390 sentence pairs, 16.23M words) - Moses format' href="download.php?f=EUbookshop/cs-fr.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Welsh (566 sentence pairs, 15.63k words) - Moses format' href="download.php?f=EUbookshop/cy-fr.txt.zip">0.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Danish (4,572,366 sentence pairs, 209.68M words) - Moses format' href="download.php?f=EUbookshop/da-fr.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-German (9,210,829 sentence pairs, 372.58M words) - Moses format' href="download.php?f=EUbookshop/de-fr.txt.zip">9.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (4,243,883 sentence pairs, 185.78M words) - Moses format' href="download.php?f=EUbookshop/el-fr.txt.zip">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (11,412,897 sentence pairs, 468.77M words) - Moses format' href="download.php?f=EUbookshop/en-fr.txt.zip">11.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (5,158,180 sentence pairs, 254.54M words) - Moses format' href="download.php?f=EUbookshop/es-fr.txt.zip">5.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Estonian (375,017 sentence pairs, 14.00M words) - Moses format' href="download.php?f=EUbookshop/et-fr.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='French-Finnish (1,954,251 sentence pairs, 73.53M words) - Moses format' href="download.php?f=EUbookshop/fi-fr.txt.zip">2.0M</a>
</td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='French-Irish (97,199 sentence pairs, 4.75M words) - TMX format' href="download.php?f=EUbookshop/fr-ga.tmx.gz">97.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Gaelic (87 sentence pairs, 1.86k words) - TMX format' href="download.php?f=EUbookshop/fr-gd.tmx.gz">87</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='French-Croatian (5,140 sentence pairs, 0.21M words) - TMX format' href="download.php?f=EUbookshop/fr-hr.tmx.gz">5.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Hungarian (333,947 sentence pairs, 13.90M words) - TMX format' href="download.php?f=EUbookshop/fr-hu.tmx.gz">0.3M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='French-Icelandic (9,877 sentence pairs, 0.38M words) - TMX format' href="download.php?f=EUbookshop/fr-is.tmx.gz">9.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Italian (5,499,455 sentence pairs, 263.09M words) - TMX format' href="download.php?f=EUbookshop/fr-it.tmx.gz">5.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Japanese (89 sentence pairs, 3.83k words) - TMX format' href="download.php?f=EUbookshop/fr-ja.tmx.gz">89</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Lithuanian (337,934 sentence pairs, 13.38M words) - TMX format' href="download.php?f=EUbookshop/fr-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Latvian (352,144 sentence pairs, 14.49M words) - TMX format' href="download.php?f=EUbookshop/fr-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='French-Macedonian (2,908 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/fr-mk.tmx.gz">2.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='French-Maltese (249,984 sentence pairs, 10.37M words) - TMX format' href="download.php?f=EUbookshop/fr-mt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (26,518 sentence pairs, 1.17M words) - TMX format' href="download.php?f=EUbookshop/fr-nb.tmx.gz">26.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Dutch (5,059,188 sentence pairs, 247.65M words) - TMX format' href="download.php?f=EUbookshop/fr-nl.tmx.gz">5.1M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-Polish (454,106 sentence pairs, 19.39M words) - TMX format' href="download.php?f=EUbookshop/fr-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (3,780,449 sentence pairs, 193.25M words) - TMX format' href="download.php?f=EUbookshop/fr-pt.tmx.gz">3.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='French-Romanian (246,808 sentence pairs, 11.83M words) - TMX format' href="download.php?f=EUbookshop/fr-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='French-Russian (15,577 sentence pairs, 0.61M words) - TMX format' href="download.php?f=EUbookshop/fr-ru.tmx.gz">15.6k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='French-Slovak (347,019 sentence pairs, 14.68M words) - TMX format' href="download.php?f=EUbookshop/fr-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Slovenian (313,618 sentence pairs, 13.86M words) - TMX format' href="download.php?f=EUbookshop/fr-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='French-Albanian (1,625 sentence pairs, 64.93k words) - TMX format' href="download.php?f=EUbookshop/fr-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Serbian (1,477 sentence pairs, 56.43k words) - TMX format' href="download.php?f=EUbookshop/fr-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='French-Swedish (1,721,342 sentence pairs, 79.51M words) - TMX format' href="download.php?f=EUbookshop/fr-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Swahili (25 sentence pairs, 0.44k words) - TMX format' href="download.php?f=EUbookshop/fr-sw.tmx.gz">25</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-tc (497 sentence pairs, 19.84k words) - TMX format' href="download.php?f=EUbookshop/fr-tc.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='French-Ukrainian (1,447 sentence pairs, 47.92k words) - TMX format' href="download.php?f=EUbookshop/fr-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>fr_BE</th><td>2</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>ga</th><td>246</td> <td>4.3M</td> <td>0.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Arabic (16 sentence pairs, 0.53k words) - Moses format' href="download.php?f=EUbookshop/ar-ga.txt.zip">16</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Irish-Bulgarian (60,474 sentence pairs, 2.29M words) - Moses format' href="download.php?f=EUbookshop/bg-ga.txt.zip">60.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Catalan (136 sentence pairs, 4.58k words) - Moses format' href="download.php?f=EUbookshop/ca-ga.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Irish-Czech (84,775 sentence pairs, 2.95M words) - Moses format' href="download.php?f=EUbookshop/cs-ga.txt.zip">84.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Irish-Welsh (407 sentence pairs, 10.67k words) - Moses format' href="download.php?f=EUbookshop/cy-ga.txt.zip">0.4k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Danish (105,172 sentence pairs, 4.52M words) - Moses format' href="download.php?f=EUbookshop/da-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-German (111,958 sentence pairs, 4.42M words) - Moses format' href="download.php?f=EUbookshop/de-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Irish-Greek (126,813 sentence pairs, 5.66M words) - Moses format' href="download.php?f=EUbookshop/el-ga.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Irish-English (150,626 sentence pairs, 5.85M words) - Moses format' href="download.php?f=EUbookshop/en-ga.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Spanish (106,417 sentence pairs, 4.56M words) - Moses format' href="download.php?f=EUbookshop/es-ga.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Irish-Estonian (71,282 sentence pairs, 2.62M words) - Moses format' href="download.php?f=EUbookshop/et-ga.txt.zip">71.3k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Irish-Finnish (91,521 sentence pairs, 3.22M words) - Moses format' href="download.php?f=EUbookshop/fi-ga.txt.zip">91.5k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Irish-French (123,112 sentence pairs, 5.51M words) - Moses format' href="download.php?f=EUbookshop/fr-ga.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Gaelic (72 sentence pairs, 2.31k words) - TMX format' href="download.php?f=EUbookshop/ga-gd.tmx.gz">72</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Irish-Croatian (644 sentence pairs, 26.48k words) - TMX format' href="download.php?f=EUbookshop/ga-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Irish-Hungarian (56,833 sentence pairs, 2.29M words) - TMX format' href="download.php?f=EUbookshop/ga-hu.tmx.gz">56.8k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Irish-Icelandic (5,602 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/ga-is.tmx.gz">5.6k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Irish-Italian (103,018 sentence pairs, 4.68M words) - TMX format' href="download.php?f=EUbookshop/ga-it.tmx.gz">0.1M</a>
</td><td></td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Irish-Lithuanian (58,545 sentence pairs, 2.32M words) - TMX format' href="download.php?f=EUbookshop/ga-lt.tmx.gz">58.5k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Latvian (59,290 sentence pairs, 2.45M words) - TMX format' href="download.php?f=EUbookshop/ga-lv.tmx.gz">59.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Irish-Macedonian (542 sentence pairs, 21.96k words) - TMX format' href="download.php?f=EUbookshop/ga-mk.tmx.gz">0.5k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Irish-Maltese (64,698 sentence pairs, 2.72M words) - TMX format' href="download.php?f=EUbookshop/ga-mt.tmx.gz">64.7k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Irish-BokmÃ¥l, Norwegian (5,427 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/ga-nb.tmx.gz">5.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Irish-Dutch (103,886 sentence pairs, 5.02M words) - TMX format' href="download.php?f=EUbookshop/ga-nl.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Polish (58,571 sentence pairs, 2.47M words) - TMX format' href="download.php?f=EUbookshop/ga-pl.tmx.gz">58.6k</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Irish-Portuguese (85,896 sentence pairs, 4.17M words) - TMX format' href="download.php?f=EUbookshop/ga-pt.tmx.gz">85.9k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Romanian (52,626 sentence pairs, 2.42M words) - TMX format' href="download.php?f=EUbookshop/ga-ro.tmx.gz">52.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Russian (190 sentence pairs, 5.08k words) - TMX format' href="download.php?f=EUbookshop/ga-ru.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Irish-Slovak (58,196 sentence pairs, 2.52M words) - TMX format' href="download.php?f=EUbookshop/ga-sk.tmx.gz">58.2k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Irish-Slovenian (57,726 sentence pairs, 2.48M words) - TMX format' href="download.php?f=EUbookshop/ga-sl.tmx.gz">57.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Albanian (4 sentence pairs, 0.11k words) - TMX format' href="download.php?f=EUbookshop/ga-sq.tmx.gz">4</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Irish-Swedish (75,072 sentence pairs, 3.41M words) - TMX format' href="download.php?f=EUbookshop/ga-sv.tmx.gz">75.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-Swahili (4 sentence pairs, 0.11k words) - TMX format' href="download.php?f=EUbookshop/ga-sw.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>gd</th><td>1</td> <td>2.2k</td> <td>0.2k</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Bulgarian (49 sentence pairs, 1.63k words) - Moses format' href="download.php?f=EUbookshop/bg-gd.txt.zip">49</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Catalan (63 sentence pairs, 2.08k words) - Moses format' href="download.php?f=EUbookshop/ca-gd.txt.zip">63</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Czech (25 sentence pairs, 0.80k words) - Moses format' href="download.php?f=EUbookshop/cs-gd.txt.zip">25</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Danish (26 sentence pairs, 0.85k words) - Moses format' href="download.php?f=EUbookshop/da-gd.txt.zip">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-German (73 sentence pairs, 2.11k words) - Moses format' href="download.php?f=EUbookshop/de-gd.txt.zip">73</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Greek (38 sentence pairs, 0.91k words) - Moses format' href="download.php?f=EUbookshop/el-gd.txt.zip">38</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-English (105 sentence pairs, 2.17k words) - Moses format' href="download.php?f=EUbookshop/en-gd.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Spanish (53 sentence pairs, 1.79k words) - Moses format' href="download.php?f=EUbookshop/es-gd.txt.zip">53</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Estonian (27 sentence pairs, 0.71k words) - Moses format' href="download.php?f=EUbookshop/et-gd.txt.zip">27</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Finnish (36 sentence pairs, 0.81k words) - Moses format' href="download.php?f=EUbookshop/fi-gd.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-French (87 sentence pairs, 1.86k words) - Moses format' href="download.php?f=EUbookshop/fr-gd.txt.zip">87</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Irish (72 sentence pairs, 2.31k words) - Moses format' href="download.php?f=EUbookshop/ga-gd.txt.zip">72</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Hungarian (29 sentence pairs, 0.71k words) - TMX format' href="download.php?f=EUbookshop/gd-hu.tmx.gz">29</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Italian (55 sentence pairs, 1.70k words) - TMX format' href="download.php?f=EUbookshop/gd-it.tmx.gz">55</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Lithuanian (31 sentence pairs, 0.85k words) - TMX format' href="download.php?f=EUbookshop/gd-lt.tmx.gz">31</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Latvian (26 sentence pairs, 0.69k words) - TMX format' href="download.php?f=EUbookshop/gd-lv.tmx.gz">26</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Maltese (63 sentence pairs, 1.99k words) - TMX format' href="download.php?f=EUbookshop/gd-mt.tmx.gz">63</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Dutch (40 sentence pairs, 0.91k words) - TMX format' href="download.php?f=EUbookshop/gd-nl.tmx.gz">40</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Portuguese (51 sentence pairs, 1.44k words) - TMX format' href="download.php?f=EUbookshop/gd-pt.tmx.gz">51</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Romanian (51 sentence pairs, 1.76k words) - TMX format' href="download.php?f=EUbookshop/gd-ro.tmx.gz">51</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Slovak (91 sentence pairs, 1.94k words) - TMX format' href="download.php?f=EUbookshop/gd-sk.tmx.gz">91</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Swedish (36 sentence pairs, 0.97k words) - TMX format' href="download.php?f=EUbookshop/gd-sv.tmx.gz">36</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>hr</th><td>23</td> <td>0.2M</td> <td>9.3k</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Bulgarian (2,996 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/bg-hr.txt.zip">3.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Bosnian (640 sentence pairs, 33.69k words) - Moses format' href="download.php?f=EUbookshop/bs-hr.txt.zip">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Croatian-Catalan (570 sentence pairs, 22.88k words) - Moses format' href="download.php?f=EUbookshop/ca-hr.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Czech (4,238 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/cs-hr.txt.zip">4.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Welsh (512 sentence pairs, 13.33k words) - Moses format' href="download.php?f=EUbookshop/cy-hr.txt.zip">0.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Danish (2,886 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/da-hr.txt.zip">2.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Croatian-German (3,515 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/de-hr.txt.zip">3.5k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Greek (3,952 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/el-hr.txt.zip">4.0k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Croatian-English (6,384 sentence pairs, 0.24M words) - Moses format' href="download.php?f=EUbookshop/en-hr.txt.zip">6.4k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Croatian-Spanish (5,479 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/es-hr.txt.zip">5.5k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Estonian (4,215 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/et-hr.txt.zip">4.2k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Croatian-Finnish (5,061 sentence pairs, 0.15M words) - Moses format' href="download.php?f=EUbookshop/fi-hr.txt.zip">5.1k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Croatian-French (5,574 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/fr-hr.txt.zip">5.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Croatian-Irish (658 sentence pairs, 26.56k words) - Moses format' href="download.php?f=EUbookshop/ga-hr.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Croatian-Hungarian (1,736 sentence pairs, 61.20k words) - TMX format' href="download.php?f=EUbookshop/hr-hu.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Italian (3,004 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-it.tmx.gz">3.0k</a>
</td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Lithuanian (3,755 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-lt.tmx.gz">3.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Latvian (3,762 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-lv.tmx.gz">3.8k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Croatian-Macedonian (2,589 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/hr-mk.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Croatian-Maltese (1,733 sentence pairs, 63.42k words) - TMX format' href="download.php?f=EUbookshop/hr-mt.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (1,237 sentence pairs, 49.12k words) - TMX format' href="download.php?f=EUbookshop/hr-nb.tmx.gz">1.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Croatian-Dutch (4,385 sentence pairs, 0.17M words) - TMX format' href="download.php?f=EUbookshop/hr-nl.tmx.gz">4.4k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Polish (3,643 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-pl.tmx.gz">3.6k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Portuguese (2,840 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/hr-pt.tmx.gz">2.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Romanian (3,315 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-ro.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Russian (917 sentence pairs, 34.75k words) - TMX format' href="download.php?f=EUbookshop/hr-ru.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-sh (430 sentence pairs, 18.93k words) - TMX format' href="download.php?f=EUbookshop/hr-sh.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Croatian-Slovak (3,736 sentence pairs, 0.13M words) - TMX format' href="download.php?f=EUbookshop/hr-sk.tmx.gz">3.7k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Slovenian (3,886 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-sl.tmx.gz">3.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Croatian-Albanian (2,120 sentence pairs, 88.04k words) - TMX format' href="download.php?f=EUbookshop/hr-sq.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Croatian-Serbian (1,637 sentence pairs, 66.24k words) - TMX format' href="download.php?f=EUbookshop/hr-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Swedish (3,762 sentence pairs, 0.14M words) - TMX format' href="download.php?f=EUbookshop/hr-sv.tmx.gz">3.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Swahili (7 sentence pairs, 0.22k words) - TMX format' href="download.php?f=EUbookshop/hr-sw.tmx.gz">7</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Ukrainian (272 sentence pairs, 6.72k words) - TMX format' href="download.php?f=EUbookshop/hr-uk.tmx.gz">0.3k</a>
</td><td></td></tr> <tr><th>hu</th><td>1,159</td> <td>14.7M</td> <td>0.9M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Arabic (135 sentence pairs, 4.00k words) - Moses format' href="download.php?f=EUbookshop/ar-hu.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hungarian-Bulgarian (217,379 sentence pairs, 8.45M words) - Moses format' href="download.php?f=EUbookshop/bg-hu.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Bosnian (31 sentence pairs, 1.84k words) - Moses format' href="download.php?f=EUbookshop/bs-hu.txt.zip">31</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hungarian-Catalan (1,168 sentence pairs, 45.64k words) - Moses format' href="download.php?f=EUbookshop/ca-hu.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Hungarian-Czech (425,820 sentence pairs, 14.56M words) - Moses format' href="download.php?f=EUbookshop/cs-hu.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Welsh (551 sentence pairs, 13.02k words) - Moses format' href="download.php?f=EUbookshop/cy-hu.txt.zip">0.6k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Hungarian-Danish (367,675 sentence pairs, 14.51M words) - Moses format' href="download.php?f=EUbookshop/da-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-German (419,938 sentence pairs, 15.51M words) - Moses format' href="download.php?f=EUbookshop/de-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Hungarian-Greek (390,482 sentence pairs, 15.99M words) - Moses format' href="download.php?f=EUbookshop/el-hu.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hungarian-English (454,228 sentence pairs, 16.98M words) - Moses format' href="download.php?f=EUbookshop/en-hu.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hungarian-Spanish (410,155 sentence pairs, 17.69M words) - Moses format' href="download.php?f=EUbookshop/es-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Estonian (424,549 sentence pairs, 13.81M words) - Moses format' href="download.php?f=EUbookshop/et-hu.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Finnish (409,282 sentence pairs, 12.57M words) - Moses format' href="download.php?f=EUbookshop/fi-hu.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-French (384,291 sentence pairs, 14.79M words) - Moses format' href="download.php?f=EUbookshop/fr-hu.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Hungarian-Irish (81,148 sentence pairs, 2.72M words) - Moses format' href="download.php?f=EUbookshop/ga-hu.txt.zip">81.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Gaelic (29 sentence pairs, 0.71k words) - Moses format' href="download.php?f=EUbookshop/gd-hu.txt.zip">29</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Hungarian-Croatian (1,767 sentence pairs, 61.37k words) - Moses format' href="download.php?f=EUbookshop/hr-hu.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Hungarian-Icelandic (7,706 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/hu-is.tmx.gz">7.7k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Italian (355,606 sentence pairs, 15.02M words) - TMX format' href="download.php?f=EUbookshop/hu-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Japanese (72 sentence pairs, 2.27k words) - TMX format' href="download.php?f=EUbookshop/hu-ja.tmx.gz">72</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Lithuanian (355,714 sentence pairs, 12.74M words) - TMX format' href="download.php?f=EUbookshop/hu-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Latvian (358,094 sentence pairs, 13.18M words) - TMX format' href="download.php?f=EUbookshop/hu-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hungarian-Macedonian (1,306 sentence pairs, 46.45k words) - TMX format' href="download.php?f=EUbookshop/hu-mk.tmx.gz">1.3k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hungarian-Maltese (252,334 sentence pairs, 8.95M words) - TMX format' href="download.php?f=EUbookshop/hu-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (17,945 sentence pairs, 0.68M words) - TMX format' href="download.php?f=EUbookshop/hu-nb.tmx.gz">17.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Dutch (359,867 sentence pairs, 15.45M words) - TMX format' href="download.php?f=EUbookshop/hu-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Hungarian-Polish (376,075 sentence pairs, 14.63M words) - TMX format' href="download.php?f=EUbookshop/hu-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Portuguese (345,641 sentence pairs, 15.32M words) - TMX format' href="download.php?f=EUbookshop/hu-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Hungarian-Romanian (263,696 sentence pairs, 11.55M words) - TMX format' href="download.php?f=EUbookshop/hu-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Hungarian-Russian (2,137 sentence pairs, 87.88k words) - TMX format' href="download.php?f=EUbookshop/hu-ru.tmx.gz">2.1k</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Slovak (360,354 sentence pairs, 14.01M words) - TMX format' href="download.php?f=EUbookshop/hu-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Slovenian (328,298 sentence pairs, 12.69M words) - TMX format' href="download.php?f=EUbookshop/hu-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Albanian (126 sentence pairs, 4.24k words) - TMX format' href="download.php?f=EUbookshop/hu-sq.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Serbian (81 sentence pairs, 2.93k words) - TMX format' href="download.php?f=EUbookshop/hu-sr.tmx.gz">81</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Hungarian-Swedish (334,512 sentence pairs, 13.28M words) - TMX format' href="download.php?f=EUbookshop/hu-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Swahili (22 sentence pairs, 0.36k words) - TMX format' href="download.php?f=EUbookshop/hu-sw.tmx.gz">22</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hungarian-tc (594 sentence pairs, 21.37k words) - TMX format' href="download.php?f=EUbookshop/hu-tc.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hungarian-Ukrainian (1,386 sentence pairs, 38.37k words) - TMX format' href="download.php?f=EUbookshop/hu-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>is</th><td>48</td> <td>0.3M</td> <td>15.6k</td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Icelandic-Bulgarian (6,465 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/bg-is.txt.zip">6.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Icelandic-Czech (8,535 sentence pairs, 0.28M words) - Moses format' href="download.php?f=EUbookshop/cs-is.txt.zip">8.5k</a>
</td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Icelandic-Danish (10,014 sentence pairs, 0.36M words) - Moses format' href="download.php?f=EUbookshop/da-is.txt.zip">10.0k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Icelandic-German (10,348 sentence pairs, 0.36M words) - Moses format' href="download.php?f=EUbookshop/de-is.txt.zip">10.3k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Greek (9,588 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/el-is.txt.zip">9.6k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Icelandic-English (11,202 sentence pairs, 0.39M words) - Moses format' href="download.php?f=EUbookshop/en-is.txt.zip">11.2k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Icelandic-Spanish (9,535 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/es-is.txt.zip">9.5k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Icelandic-Estonian (8,636 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/et-is.txt.zip">8.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Icelandic-Finnish (12,068 sentence pairs, 0.35M words) - Moses format' href="download.php?f=EUbookshop/fi-is.txt.zip">12.1k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Icelandic-French (10,392 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/fr-is.txt.zip">10.4k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Irish (5,924 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/ga-is.txt.zip">5.9k</a>
</td><td></td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Icelandic-Hungarian (8,094 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/hu-is.txt.zip">8.1k</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Icelandic-Italian (9,694 sentence pairs, 0.38M words) - TMX format' href="download.php?f=EUbookshop/is-it.tmx.gz">9.7k</a>
</td><td></td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Lithuanian (6,937 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/is-lt.tmx.gz">6.9k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Icelandic-Latvian (7,375 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/is-lv.tmx.gz">7.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Macedonian (92 sentence pairs, 2.63k words) - TMX format' href="download.php?f=EUbookshop/is-mk.tmx.gz">92</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Maltese (6,568 sentence pairs, 0.22M words) - TMX format' href="download.php?f=EUbookshop/is-mt.tmx.gz">6.6k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (9,648 sentence pairs, 0.36M words) - TMX format' href="download.php?f=EUbookshop/is-nb.tmx.gz">9.6k</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Icelandic-Dutch (10,012 sentence pairs, 0.37M words) - TMX format' href="download.php?f=EUbookshop/is-nl.tmx.gz">10.0k</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Icelandic-Polish (7,534 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/is-pl.tmx.gz">7.5k</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Icelandic-Portuguese (9,635 sentence pairs, 0.38M words) - TMX format' href="download.php?f=EUbookshop/is-pt.tmx.gz">9.6k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Icelandic-Romanian (7,119 sentence pairs, 0.27M words) - TMX format' href="download.php?f=EUbookshop/is-ro.tmx.gz">7.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Russian (469 sentence pairs, 17.72k words) - TMX format' href="download.php?f=EUbookshop/is-ru.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Icelandic-Slovak (8,113 sentence pairs, 0.28M words) - TMX format' href="download.php?f=EUbookshop/is-sk.tmx.gz">8.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Icelandic-Slovenian (7,850 sentence pairs, 0.27M words) - TMX format' href="download.php?f=EUbookshop/is-sl.tmx.gz">7.8k</a>
</td><td></td><td></td><td bgcolor="#fff2ed"><a rel="nofollow" title='Icelandic-Swedish (10,627 sentence pairs, 0.37M words) - TMX format' href="download.php?f=EUbookshop/is-sv.tmx.gz">10.6k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>it</th><td>9,151</td> <td>270.4M</td> <td>12.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Arabic (184 sentence pairs, 6.52k words) - Moses format' href="download.php?f=EUbookshop/ar-it.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Italian-Bulgarian (222,048 sentence pairs, 9.61M words) - Moses format' href="download.php?f=EUbookshop/bg-it.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Bosnian (28 sentence pairs, 1.97k words) - Moses format' href="download.php?f=EUbookshop/bs-it.txt.zip">28</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Italian-Catalan (3,450 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-it.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Italian-Czech (475,156 sentence pairs, 18.58M words) - Moses format' href="download.php?f=EUbookshop/cs-it.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Welsh (518 sentence pairs, 13.87k words) - Moses format' href="download.php?f=EUbookshop/cy-it.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Danish (4,965,986 sentence pairs, 221.32M words) - Moses format' href="download.php?f=EUbookshop/da-it.txt.zip">5.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-German (6,248,881 sentence pairs, 259.79M words) - Moses format' href="download.php?f=EUbookshop/de-it.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Greek (4,281,834 sentence pairs, 178.45M words) - Moses format' href="download.php?f=EUbookshop/el-it.txt.zip">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (6,923,834 sentence pairs, 293.03M words) - Moses format' href="download.php?f=EUbookshop/en-it.txt.zip">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (4,849,974 sentence pairs, 232.15M words) - Moses format' href="download.php?f=EUbookshop/es-it.txt.zip">4.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Estonian (411,432 sentence pairs, 15.25M words) - Moses format' href="download.php?f=EUbookshop/et-it.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Finnish (1,981,811 sentence pairs, 73.09M words) - Moses format' href="download.php?f=EUbookshop/fi-it.txt.zip">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-French (6,140,141 sentence pairs, 273.81M words) - Moses format' href="download.php?f=EUbookshop/fr-it.txt.zip">6.1M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Italian-Irish (142,152 sentence pairs, 5.47M words) - Moses format' href="download.php?f=EUbookshop/ga-it.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Gaelic (55 sentence pairs, 1.70k words) - Moses format' href="download.php?f=EUbookshop/gd-it.txt.zip">55</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Italian-Croatian (3,028 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/hr-it.txt.zip">3.0k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Italian-Hungarian (419,896 sentence pairs, 16.04M words) - Moses format' href="download.php?f=EUbookshop/hu-it.txt.zip">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Italian-Icelandic (10,112 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/is-it.txt.zip">10.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Japanese (86 sentence pairs, 3.02k words) - TMX format' href="download.php?f=EUbookshop/it-ja.tmx.gz">86</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Lithuanian (359,941 sentence pairs, 14.68M words) - TMX format' href="download.php?f=EUbookshop/it-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Latvian (357,897 sentence pairs, 15.01M words) - TMX format' href="download.php?f=EUbookshop/it-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Italian-Macedonian (1,268 sentence pairs, 50.54k words) - TMX format' href="download.php?f=EUbookshop/it-mk.tmx.gz">1.3k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Italian-Maltese (250,583 sentence pairs, 10.12M words) - TMX format' href="download.php?f=EUbookshop/it-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (25,042 sentence pairs, 1.11M words) - TMX format' href="download.php?f=EUbookshop/it-nb.tmx.gz">25.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Dutch (5,380,994 sentence pairs, 259.39M words) - TMX format' href="download.php?f=EUbookshop/it-nl.tmx.gz">5.4M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Polish (477,910 sentence pairs, 20.68M words) - TMX format' href="download.php?f=EUbookshop/it-pl.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Portuguese (3,704,537 sentence pairs, 183.80M words) - TMX format' href="download.php?f=EUbookshop/it-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Italian-Romanian (280,333 sentence pairs, 13.49M words) - TMX format' href="download.php?f=EUbookshop/it-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Italian-Russian (6,417 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/it-ru.tmx.gz">6.4k</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Italian-Slovak (365,441 sentence pairs, 16.04M words) - TMX format' href="download.php?f=EUbookshop/it-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Slovenian (338,759 sentence pairs, 14.95M words) - TMX format' href="download.php?f=EUbookshop/it-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Albanian (100 sentence pairs, 4.26k words) - TMX format' href="download.php?f=EUbookshop/it-sq.tmx.gz">100</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Serbian (55 sentence pairs, 2.67k words) - TMX format' href="download.php?f=EUbookshop/it-sr.tmx.gz">55</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Italian-Swedish (1,729,718 sentence pairs, 78.42M words) - TMX format' href="download.php?f=EUbookshop/it-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Swahili (22 sentence pairs, 0.39k words) - TMX format' href="download.php?f=EUbookshop/it-sw.tmx.gz">22</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Italian-tc (615 sentence pairs, 25.54k words) - TMX format' href="download.php?f=EUbookshop/it-tc.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Italian-Ukrainian (1,403 sentence pairs, 44.43k words) - TMX format' href="download.php?f=EUbookshop/it-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>ja</th><td>4</td> <td>2.5k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Czech (65 sentence pairs, 2.31k words) - Moses format' href="download.php?f=EUbookshop/cs-ja.txt.zip">65</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Danish (91 sentence pairs, 2.29k words) - Moses format' href="download.php?f=EUbookshop/da-ja.txt.zip">91</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-German (108 sentence pairs, 3.29k words) - Moses format' href="download.php?f=EUbookshop/de-ja.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Greek (2 sentence pairs, 47 words) - Moses format' href="download.php?f=EUbookshop/el-ja.txt.zip">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-English (116 sentence pairs, 3.23k words) - Moses format' href="download.php?f=EUbookshop/en-ja.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Spanish (88 sentence pairs, 1.84k words) - Moses format' href="download.php?f=EUbookshop/es-ja.txt.zip">88</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Estonian (63 sentence pairs, 1.17k words) - Moses format' href="download.php?f=EUbookshop/et-ja.txt.zip">63</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Finnish (92 sentence pairs, 1.19k words) - Moses format' href="download.php?f=EUbookshop/fi-ja.txt.zip">92</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-French (105 sentence pairs, 3.91k words) - Moses format' href="download.php?f=EUbookshop/fr-ja.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Hungarian (82 sentence pairs, 2.31k words) - Moses format' href="download.php?f=EUbookshop/hu-ja.txt.zip">82</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Italian (104 sentence pairs, 3.11k words) - Moses format' href="download.php?f=EUbookshop/it-ja.txt.zip">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lithuanian (66 sentence pairs, 2.05k words) - TMX format' href="download.php?f=EUbookshop/ja-lt.tmx.gz">66</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Latvian (56 sentence pairs, 1.39k words) - TMX format' href="download.php?f=EUbookshop/ja-lv.tmx.gz">56</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Dutch (87 sentence pairs, 3.33k words) - TMX format' href="download.php?f=EUbookshop/ja-nl.tmx.gz">87</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Polish (70 sentence pairs, 2.62k words) - TMX format' href="download.php?f=EUbookshop/ja-pl.tmx.gz">70</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Portuguese (86 sentence pairs, 2.96k words) - TMX format' href="download.php?f=EUbookshop/ja-pt.tmx.gz">86</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Russian (90 sentence pairs, 2.68k words) - TMX format' href="download.php?f=EUbookshop/ja-ru.tmx.gz">90</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Slovak (61 sentence pairs, 2.26k words) - TMX format' href="download.php?f=EUbookshop/ja-sk.tmx.gz">61</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Slovenian (59 sentence pairs, 2.11k words) - TMX format' href="download.php?f=EUbookshop/ja-sl.tmx.gz">59</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Swedish (63 sentence pairs, 1.53k words) - TMX format' href="download.php?f=EUbookshop/ja-sv.tmx.gz">63</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>lb</th><td>4</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>lt</th><td>1,149</td> <td>14.4M</td> <td>0.9M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Arabic (108 sentence pairs, 3.00k words) - Moses format' href="download.php?f=EUbookshop/ar-lt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Lithuanian-Bulgarian (229,825 sentence pairs, 8.81M words) - Moses format' href="download.php?f=EUbookshop/bg-lt.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Bosnian (348 sentence pairs, 16.19k words) - Moses format' href="download.php?f=EUbookshop/bs-lt.txt.zip">0.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Lithuanian-Catalan (1,894 sentence pairs, 68.59k words) - Moses format' href="download.php?f=EUbookshop/ca-lt.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Czech (452,991 sentence pairs, 15.07M words) - Moses format' href="download.php?f=EUbookshop/cs-lt.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lithuanian-Welsh (591 sentence pairs, 12.95k words) - Moses format' href="download.php?f=EUbookshop/cy-lt.txt.zip">0.6k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Lithuanian-Danish (381,216 sentence pairs, 14.53M words) - Moses format' href="download.php?f=EUbookshop/da-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-German (395,302 sentence pairs, 13.93M words) - Moses format' href="download.php?f=EUbookshop/de-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Greek (388,945 sentence pairs, 15.22M words) - Moses format' href="download.php?f=EUbookshop/el-lt.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Lithuanian-English (457,529 sentence pairs, 16.80M words) - Moses format' href="download.php?f=EUbookshop/en-lt.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Lithuanian-Spanish (409,381 sentence pairs, 17.22M words) - Moses format' href="download.php?f=EUbookshop/es-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Estonian (455,121 sentence pairs, 14.34M words) - Moses format' href="download.php?f=EUbookshop/et-lt.txt.zip">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Lithuanian-Finnish (443,311 sentence pairs, 13.01M words) - Moses format' href="download.php?f=EUbookshop/fi-lt.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-French (391,929 sentence pairs, 14.45M words) - Moses format' href="download.php?f=EUbookshop/fr-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Lithuanian-Irish (84,540 sentence pairs, 2.83M words) - Moses format' href="download.php?f=EUbookshop/ga-lt.txt.zip">84.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Gaelic (31 sentence pairs, 0.85k words) - Moses format' href="download.php?f=EUbookshop/gd-lt.txt.zip">31</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Lithuanian-Croatian (4,122 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-lt.txt.zip">4.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Hungarian (423,373 sentence pairs, 13.72M words) - Moses format' href="download.php?f=EUbookshop/hu-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Lithuanian-Icelandic (7,360 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/is-lt.txt.zip">7.4k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Lithuanian-Italian (425,134 sentence pairs, 15.87M words) - Moses format' href="download.php?f=EUbookshop/it-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Japanese (77 sentence pairs, 2.08k words) - Moses format' href="download.php?f=EUbookshop/ja-lt.txt.zip">77</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Latvian (399,145 sentence pairs, 13.96M words) - TMX format' href="download.php?f=EUbookshop/lt-lv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Macedonian (2,737 sentence pairs, 95.20k words) - TMX format' href="download.php?f=EUbookshop/lt-mk.tmx.gz">2.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Lithuanian-Maltese (255,335 sentence pairs, 8.66M words) - TMX format' href="download.php?f=EUbookshop/lt-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (19,145 sentence pairs, 0.71M words) - TMX format' href="download.php?f=EUbookshop/lt-nb.tmx.gz">19.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Dutch (373,829 sentence pairs, 15.60M words) - TMX format' href="download.php?f=EUbookshop/lt-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Polish (386,166 sentence pairs, 14.43M words) - TMX format' href="download.php?f=EUbookshop/lt-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Portuguese (349,866 sentence pairs, 15.07M words) - TMX format' href="download.php?f=EUbookshop/lt-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Lithuanian-Romanian (279,899 sentence pairs, 11.80M words) - TMX format' href="download.php?f=EUbookshop/lt-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Lithuanian-Russian (1,943 sentence pairs, 79.25k words) - TMX format' href="download.php?f=EUbookshop/lt-ru.tmx.gz">1.9k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Lithuanian-Slovak (393,738 sentence pairs, 14.68M words) - TMX format' href="download.php?f=EUbookshop/lt-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Lithuanian-Slovenian (348,765 sentence pairs, 13.12M words) - TMX format' href="download.php?f=EUbookshop/lt-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Lithuanian-Albanian (1,616 sentence pairs, 55.78k words) - TMX format' href="download.php?f=EUbookshop/lt-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Lithuanian-Serbian (1,432 sentence pairs, 48.58k words) - TMX format' href="download.php?f=EUbookshop/lt-sr.tmx.gz">1.4k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Lithuanian-Swedish (360,829 sentence pairs, 13.93M words) - TMX format' href="download.php?f=EUbookshop/lt-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Swahili (24 sentence pairs, 0.39k words) - TMX format' href="download.php?f=EUbookshop/lt-sw.tmx.gz">24</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Lithuanian-Turkish (17,169 sentence pairs, 0.57M words) - TMX format' href="download.php?f=EUbookshop/lt-tr.tmx.gz">17.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Lithuanian-Ukrainian (1,355 sentence pairs, 35.61k words) - TMX format' href="download.php?f=EUbookshop/lt-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>lv</th><td>1,165</td> <td>14.8M</td> <td>0.9M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Arabic (109 sentence pairs, 2.96k words) - Moses format' href="download.php?f=EUbookshop/ar-lv.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Latvian-Bulgarian (223,369 sentence pairs, 9.10M words) - Moses format' href="download.php?f=EUbookshop/bg-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Bosnian (381 sentence pairs, 18.37k words) - Moses format' href="download.php?f=EUbookshop/bs-lv.txt.zip">0.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Latvian-Catalan (1,762 sentence pairs, 64.69k words) - Moses format' href="download.php?f=EUbookshop/ca-lv.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Czech (437,250 sentence pairs, 15.17M words) - Moses format' href="download.php?f=EUbookshop/cs-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Welsh (533 sentence pairs, 12.67k words) - Moses format' href="download.php?f=EUbookshop/cy-lv.txt.zip">0.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Danish (381,869 sentence pairs, 14.95M words) - Moses format' href="download.php?f=EUbookshop/da-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-German (393,002 sentence pairs, 14.17M words) - Moses format' href="download.php?f=EUbookshop/de-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Greek (378,020 sentence pairs, 15.46M words) - Moses format' href="download.php?f=EUbookshop/el-lv.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Latvian-English (462,041 sentence pairs, 17.76M words) - Moses format' href="download.php?f=EUbookshop/en-lv.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Latvian-Spanish (405,316 sentence pairs, 17.99M words) - Moses format' href="download.php?f=EUbookshop/es-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Estonian (455,409 sentence pairs, 14.81M words) - Moses format' href="download.php?f=EUbookshop/et-lv.txt.zip">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Finnish (441,105 sentence pairs, 13.34M words) - Moses format' href="download.php?f=EUbookshop/fi-lv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-French (405,704 sentence pairs, 15.55M words) - Moses format' href="download.php?f=EUbookshop/fr-lv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Latvian-Irish (78,268 sentence pairs, 2.95M words) - Moses format' href="download.php?f=EUbookshop/ga-lv.txt.zip">78.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Gaelic (26 sentence pairs, 0.69k words) - Moses format' href="download.php?f=EUbookshop/gd-lv.txt.zip">26</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Latvian-Croatian (4,121 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-lv.txt.zip">4.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Hungarian (420,633 sentence pairs, 14.12M words) - Moses format' href="download.php?f=EUbookshop/hu-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Latvian-Icelandic (7,794 sentence pairs, 0.24M words) - Moses format' href="download.php?f=EUbookshop/is-lv.txt.zip">7.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Latvian-Italian (416,211 sentence pairs, 16.15M words) - Moses format' href="download.php?f=EUbookshop/it-lv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Japanese (69 sentence pairs, 1.42k words) - Moses format' href="download.php?f=EUbookshop/ja-lv.txt.zip">69</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Lithuanian (474,204 sentence pairs, 15.18M words) - Moses format' href="download.php?f=EUbookshop/lt-lv.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Latvian-Macedonian (2,566 sentence pairs, 88.12k words) - TMX format' href="download.php?f=EUbookshop/lv-mk.tmx.gz">2.6k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Latvian-Maltese (262,460 sentence pairs, 9.23M words) - TMX format' href="download.php?f=EUbookshop/lv-mt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (19,741 sentence pairs, 0.75M words) - TMX format' href="download.php?f=EUbookshop/lv-nb.tmx.gz">19.7k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Latvian-Dutch (370,767 sentence pairs, 15.89M words) - TMX format' href="download.php?f=EUbookshop/lv-nl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Polish (382,657 sentence pairs, 14.88M words) - TMX format' href="download.php?f=EUbookshop/lv-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Portuguese (348,134 sentence pairs, 15.39M words) - TMX format' href="download.php?f=EUbookshop/lv-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Latvian-Romanian (272,870 sentence pairs, 11.88M words) - TMX format' href="download.php?f=EUbookshop/lv-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Latvian-Russian (2,014 sentence pairs, 79.83k words) - TMX format' href="download.php?f=EUbookshop/lv-ru.tmx.gz">2.0k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Latvian-Slovak (389,637 sentence pairs, 14.76M words) - TMX format' href="download.php?f=EUbookshop/lv-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Slovenian (351,220 sentence pairs, 13.60M words) - TMX format' href="download.php?f=EUbookshop/lv-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Latvian-Albanian (1,623 sentence pairs, 56.96k words) - TMX format' href="download.php?f=EUbookshop/lv-sq.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Serbian (1,254 sentence pairs, 42.38k words) - TMX format' href="download.php?f=EUbookshop/lv-sr.tmx.gz">1.3k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Latvian-Swedish (353,644 sentence pairs, 13.96M words) - TMX format' href="download.php?f=EUbookshop/lv-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Swahili (22 sentence pairs, 0.34k words) - TMX format' href="download.php?f=EUbookshop/lv-sw.tmx.gz">22</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Ukrainian (1,385 sentence pairs, 37.10k words) - TMX format' href="download.php?f=EUbookshop/lv-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>mk</th><td>13</td> <td>95.6k</td> <td>5.0k</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Bulgarian (2,889 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/bg-mk.txt.zip">2.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Bosnian (435 sentence pairs, 22.88k words) - Moses format' href="download.php?f=EUbookshop/bs-mk.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Czech (3,148 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/cs-mk.txt.zip">3.1k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Macedonian-Danish (1,144 sentence pairs, 43.06k words) - Moses format' href="download.php?f=EUbookshop/da-mk.txt.zip">1.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-German (3,314 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/de-mk.txt.zip">3.3k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Macedonian-Greek (3,401 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/el-mk.txt.zip">3.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-English (2,762 sentence pairs, 97.45k words) - Moses format' href="download.php?f=EUbookshop/en-mk.txt.zip">2.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Macedonian-Spanish (3,036 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/es-mk.txt.zip">3.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Macedonian-Estonian (2,967 sentence pairs, 89.88k words) - Moses format' href="download.php?f=EUbookshop/et-mk.txt.zip">3.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Finnish (3,221 sentence pairs, 97.20k words) - Moses format' href="download.php?f=EUbookshop/fi-mk.txt.zip">3.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Macedonian-French (3,346 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/fr-mk.txt.zip">3.3k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Macedonian-Irish (552 sentence pairs, 22.06k words) - Moses format' href="download.php?f=EUbookshop/ga-mk.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Croatian (2,874 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/hr-mk.txt.zip">2.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Hungarian (1,340 sentence pairs, 46.90k words) - Moses format' href="download.php?f=EUbookshop/hu-mk.txt.zip">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Icelandic (94 sentence pairs, 2.64k words) - Moses format' href="download.php?f=EUbookshop/is-mk.txt.zip">94</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Italian (1,292 sentence pairs, 50.91k words) - Moses format' href="download.php?f=EUbookshop/it-mk.txt.zip">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Lithuanian (3,095 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/lt-mk.txt.zip">3.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Macedonian-Latvian (2,846 sentence pairs, 91.80k words) - Moses format' href="download.php?f=EUbookshop/lv-mk.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Macedonian-Maltese (965 sentence pairs, 35.05k words) - TMX format' href="download.php?f=EUbookshop/mk-mt.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Macedonian-BokmÃ¥l, Norwegian (1,366 sentence pairs, 55.59k words) - TMX format' href="download.php?f=EUbookshop/mk-nb.tmx.gz">1.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Dutch (2,889 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/mk-nl.tmx.gz">2.9k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Polish (2,813 sentence pairs, 99.18k words) - TMX format' href="download.php?f=EUbookshop/mk-pl.tmx.gz">2.8k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Macedonian-Portuguese (1,191 sentence pairs, 49.25k words) - TMX format' href="download.php?f=EUbookshop/mk-pt.tmx.gz">1.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Macedonian-Romanian (2,778 sentence pairs, 0.12M words) - TMX format' href="download.php?f=EUbookshop/mk-ro.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Russian (11 sentence pairs, 0.30k words) - TMX format' href="download.php?f=EUbookshop/mk-ru.tmx.gz">11</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Slovak (2,738 sentence pairs, 97.13k words) - TMX format' href="download.php?f=EUbookshop/mk-sk.tmx.gz">2.7k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Slovenian (2,755 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/mk-sl.tmx.gz">2.8k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Macedonian-Albanian (1,871 sentence pairs, 76.46k words) - TMX format' href="download.php?f=EUbookshop/mk-sq.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Macedonian-Serbian (1,698 sentence pairs, 67.10k words) - TMX format' href="download.php?f=EUbookshop/mk-sr.tmx.gz">1.7k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Swedish (2,726 sentence pairs, 0.10M words) - TMX format' href="download.php?f=EUbookshop/mk-sv.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Swahili (8 sentence pairs, 0.22k words) - TMX format' href="download.php?f=EUbookshop/mk-sw.tmx.gz">8</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>mt</th><td>902</td> <td>10.4M</td> <td>0.6M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Arabic (200 sentence pairs, 5.95k words) - Moses format' href="download.php?f=EUbookshop/ar-mt.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Maltese-Bulgarian (148,196 sentence pairs, 5.15M words) - Moses format' href="download.php?f=EUbookshop/bg-mt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Maltese-Catalan (1,409 sentence pairs, 56.06k words) - Moses format' href="download.php?f=EUbookshop/ca-mt.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Czech (295,398 sentence pairs, 9.62M words) - Moses format' href="download.php?f=EUbookshop/cs-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Danish (256,365 sentence pairs, 9.50M words) - Moses format' href="download.php?f=EUbookshop/da-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-German (273,208 sentence pairs, 9.65M words) - Moses format' href="download.php?f=EUbookshop/de-mt.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Greek (278,484 sentence pairs, 11.22M words) - Moses format' href="download.php?f=EUbookshop/el-mt.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-English (303,226 sentence pairs, 10.57M words) - Moses format' href="download.php?f=EUbookshop/en-mt.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Maltese-Spanish (273,098 sentence pairs, 11.01M words) - Moses format' href="download.php?f=EUbookshop/es-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Estonian (291,569 sentence pairs, 8.96M words) - Moses format' href="download.php?f=EUbookshop/et-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Maltese-Finnish (291,312 sentence pairs, 8.76M words) - Moses format' href="download.php?f=EUbookshop/fi-mt.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Maltese-French (281,096 sentence pairs, 10.90M words) - Moses format' href="download.php?f=EUbookshop/fr-mt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Maltese-Irish (85,028 sentence pairs, 3.01M words) - Moses format' href="download.php?f=EUbookshop/ga-mt.txt.zip">85.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Gaelic (63 sentence pairs, 1.99k words) - Moses format' href="download.php?f=EUbookshop/gd-mt.txt.zip">63</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Maltese-Croatian (1,754 sentence pairs, 63.54k words) - Moses format' href="download.php?f=EUbookshop/hr-mt.txt.zip">1.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Hungarian (297,103 sentence pairs, 9.48M words) - Moses format' href="download.php?f=EUbookshop/hu-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Maltese-Icelandic (6,897 sentence pairs, 0.22M words) - Moses format' href="download.php?f=EUbookshop/is-mt.txt.zip">6.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Italian (292,457 sentence pairs, 10.70M words) - Moses format' href="download.php?f=EUbookshop/it-mt.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Lithuanian (300,397 sentence pairs, 9.22M words) - Moses format' href="download.php?f=EUbookshop/lt-mt.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Maltese-Latvian (299,996 sentence pairs, 9.77M words) - Moses format' href="download.php?f=EUbookshop/lv-mt.txt.zip">0.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Maltese-Macedonian (996 sentence pairs, 35.44k words) - Moses format' href="download.php?f=EUbookshop/mk-mt.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Maltese-BokmÃ¥l, Norwegian (6,863 sentence pairs, 0.24M words) - TMX format' href="download.php?f=EUbookshop/mt-nb.tmx.gz">6.9k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Dutch (250,257 sentence pairs, 10.11M words) - TMX format' href="download.php?f=EUbookshop/mt-nl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Polish (255,928 sentence pairs, 9.32M words) - TMX format' href="download.php?f=EUbookshop/mt-pl.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Maltese-Portuguese (238,290 sentence pairs, 10.03M words) - TMX format' href="download.php?f=EUbookshop/mt-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Maltese-Romanian (173,296 sentence pairs, 6.73M words) - TMX format' href="download.php?f=EUbookshop/mt-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Maltese-Russian (1,211 sentence pairs, 58.63k words) - TMX format' href="download.php?f=EUbookshop/mt-ru.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Slovak (246,621 sentence pairs, 9.07M words) - TMX format' href="download.php?f=EUbookshop/mt-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Slovenian (244,346 sentence pairs, 9.06M words) - TMX format' href="download.php?f=EUbookshop/mt-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Albanian (21 sentence pairs, 0.43k words) - TMX format' href="download.php?f=EUbookshop/mt-sq.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Serbian (9 sentence pairs, 0.18k words) - TMX format' href="download.php?f=EUbookshop/mt-sr.tmx.gz">9</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Maltese-Swedish (240,120 sentence pairs, 9.12M words) - TMX format' href="download.php?f=EUbookshop/mt-sv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Swahili (17 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/mt-sw.tmx.gz">17</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Maltese-Ukrainian (646 sentence pairs, 17.42k words) - TMX format' href="download.php?f=EUbookshop/mt-uk.tmx.gz">0.6k</a>
</td><td></td></tr> <tr><th>nb</th><td>95</td> <td>1.0M</td> <td>46.6k</td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (15,364 sentence pairs, 0.64M words) - Moses format' href="download.php?f=EUbookshop/bg-nb.txt.zip">15.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bosnian (319 sentence pairs, 16.62k words) - Moses format' href="download.php?f=EUbookshop/bs-nb.txt.zip">0.3k</a>
</td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (21,048 sentence pairs, 0.80M words) - Moses format' href="download.php?f=EUbookshop/cs-nb.txt.zip">21.0k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (25,381 sentence pairs, 1.04M words) - Moses format' href="download.php?f=EUbookshop/da-nb.txt.zip">25.4k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (27,779 sentence pairs, 1.10M words) - Moses format' href="download.php?f=EUbookshop/de-nb.txt.zip">27.8k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (21,250 sentence pairs, 0.95M words) - Moses format' href="download.php?f=EUbookshop/el-nb.txt.zip">21.2k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (29,811 sentence pairs, 1.18M words) - Moses format' href="download.php?f=EUbookshop/en-nb.txt.zip">29.8k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (26,206 sentence pairs, 1.20M words) - Moses format' href="download.php?f=EUbookshop/es-nb.txt.zip">26.2k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (21,141 sentence pairs, 0.72M words) - Moses format' href="download.php?f=EUbookshop/et-nb.txt.zip">21.1k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (29,676 sentence pairs, 0.99M words) - Moses format' href="download.php?f=EUbookshop/fi-nb.txt.zip">29.7k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (27,625 sentence pairs, 1.19M words) - Moses format' href="download.php?f=EUbookshop/fr-nb.txt.zip">27.6k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Irish (5,626 sentence pairs, 0.23M words) - Moses format' href="download.php?f=EUbookshop/ga-nb.txt.zip">5.6k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (1,263 sentence pairs, 49.35k words) - Moses format' href="download.php?f=EUbookshop/hr-nb.txt.zip">1.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (18,756 sentence pairs, 0.69M words) - Moses format' href="download.php?f=EUbookshop/hu-nb.txt.zip">18.8k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (10,116 sentence pairs, 0.36M words) - Moses format' href="download.php?f=EUbookshop/is-nb.txt.zip">10.1k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (26,025 sentence pairs, 1.12M words) - Moses format' href="download.php?f=EUbookshop/it-nb.txt.zip">26.0k</a>
</td><td></td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (20,028 sentence pairs, 0.72M words) - Moses format' href="download.php?f=EUbookshop/lt-nb.txt.zip">20.0k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (20,557 sentence pairs, 0.76M words) - Moses format' href="download.php?f=EUbookshop/lv-nb.txt.zip">20.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Macedonian (1,388 sentence pairs, 55.85k words) - Moses format' href="download.php?f=EUbookshop/mk-nb.txt.zip">1.4k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Maltese (7,103 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/mt-nb.txt.zip">7.1k</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (26,749 sentence pairs, 1.13M words) - TMX format' href="download.php?f=EUbookshop/nb-nl.tmx.gz">26.7k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Polish (19,820 sentence pairs, 0.77M words) - TMX format' href="download.php?f=EUbookshop/nb-pl.tmx.gz">19.8k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (24,577 sentence pairs, 1.12M words) - TMX format' href="download.php?f=EUbookshop/nb-pt.tmx.gz">24.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (18,160 sentence pairs, 0.80M words) - TMX format' href="download.php?f=EUbookshop/nb-ro.tmx.gz">18.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (465 sentence pairs, 18.67k words) - TMX format' href="download.php?f=EUbookshop/nb-ru.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (20,405 sentence pairs, 0.81M words) - TMX format' href="download.php?f=EUbookshop/nb-sk.tmx.gz">20.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (20,539 sentence pairs, 0.84M words) - TMX format' href="download.php?f=EUbookshop/nb-sl.tmx.gz">20.5k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Albanian (1,443 sentence pairs, 59.94k words) - TMX format' href="download.php?f=EUbookshop/nb-sq.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Serbian (1,328 sentence pairs, 53.03k words) - TMX format' href="download.php?f=EUbookshop/nb-sr.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (27,880 sentence pairs, 1.12M words) - TMX format' href="download.php?f=EUbookshop/nb-sv.tmx.gz">27.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swahili (15 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/nb-sw.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>nl</th><td>0</td> <td>0</td> <td>0</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Arabic (108 sentence pairs, 3.47k words) - Moses format' href="download.php?f=EUbookshop/ar-nl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Dutch-Bulgarian (224,169 sentence pairs, 10.41M words) - Moses format' href="download.php?f=EUbookshop/bg-nl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Bosnian (398 sentence pairs, 20.81k words) - Moses format' href="download.php?f=EUbookshop/bs-nl.txt.zip">0.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Dutch-Catalan (3,459 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/ca-nl.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Dutch-Czech (428,486 sentence pairs, 17.05M words) - Moses format' href="download.php?f=EUbookshop/cs-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Welsh (527 sentence pairs, 14.49k words) - Moses format' href="download.php?f=EUbookshop/cy-nl.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Danish (5,220,067 sentence pairs, 236.83M words) - Moses format' href="download.php?f=EUbookshop/da-nl.txt.zip">5.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-German (5,961,624 sentence pairs, 253.18M words) - Moses format' href="download.php?f=EUbookshop/de-nl.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Greek (4,292,920 sentence pairs, 183.20M words) - Moses format' href="download.php?f=EUbookshop/el-nl.txt.zip">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (6,309,350 sentence pairs, 276.53M words) - Moses format' href="download.php?f=EUbookshop/en-nl.txt.zip">6.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (4,450,623 sentence pairs, 222.11M words) - Moses format' href="download.php?f=EUbookshop/es-nl.txt.zip">4.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Estonian (439,139 sentence pairs, 16.64M words) - Moses format' href="download.php?f=EUbookshop/et-nl.txt.zip">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Finnish (2,058,894 sentence pairs, 76.40M words) - Moses format' href="download.php?f=EUbookshop/fi-nl.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (5,599,898 sentence pairs, 256.83M words) - Moses format' href="download.php?f=EUbookshop/fr-nl.txt.zip">5.6M</a>
</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Dutch-Irish (132,942 sentence pairs, 5.81M words) - Moses format' href="download.php?f=EUbookshop/ga-nl.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Gaelic (40 sentence pairs, 0.91k words) - Moses format' href="download.php?f=EUbookshop/gd-nl.txt.zip">40</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Dutch-Croatian (4,762 sentence pairs, 0.18M words) - Moses format' href="download.php?f=EUbookshop/hr-nl.txt.zip">4.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Hungarian (417,932 sentence pairs, 16.46M words) - Moses format' href="download.php?f=EUbookshop/hu-nl.txt.zip">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Dutch-Icelandic (10,572 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/is-nl.txt.zip">10.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Italian (5,950,012 sentence pairs, 268.64M words) - Moses format' href="download.php?f=EUbookshop/it-nl.txt.zip">6.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Japanese (94 sentence pairs, 3.36k words) - Moses format' href="download.php?f=EUbookshop/ja-nl.txt.zip">94</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Lithuanian (437,035 sentence pairs, 16.79M words) - Moses format' href="download.php?f=EUbookshop/lt-nl.txt.zip">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Dutch-Latvian (434,167 sentence pairs, 17.07M words) - Moses format' href="download.php?f=EUbookshop/lv-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Dutch-Macedonian (3,259 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/mk-nl.txt.zip">3.3k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Dutch-Maltese (284,254 sentence pairs, 10.65M words) - Moses format' href="download.php?f=EUbookshop/mt-nl.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (27,837 sentence pairs, 1.15M words) - Moses format' href="download.php?f=EUbookshop/nb-nl.txt.zip">27.8k</a>
</td><td></td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Dutch-Polish (397,670 sentence pairs, 17.80M words) - TMX format' href="download.php?f=EUbookshop/nl-pl.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (3,688,828 sentence pairs, 185.76M words) - TMX format' href="download.php?f=EUbookshop/nl-pt.tmx.gz">3.7M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Dutch-Romanian (274,303 sentence pairs, 13.70M words) - TMX format' href="download.php?f=EUbookshop/nl-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Dutch-Russian (6,206 sentence pairs, 0.23M words) - TMX format' href="download.php?f=EUbookshop/nl-ru.tmx.gz">6.2k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Slovak (372,388 sentence pairs, 16.70M words) - TMX format' href="download.php?f=EUbookshop/nl-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Dutch-Slovenian (342,320 sentence pairs, 15.31M words) - TMX format' href="download.php?f=EUbookshop/nl-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Dutch-Albanian (1,775 sentence pairs, 69.32k words) - TMX format' href="download.php?f=EUbookshop/nl-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Dutch-Serbian (1,572 sentence pairs, 60.66k words) - TMX format' href="download.php?f=EUbookshop/nl-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Swedish (1,797,009 sentence pairs, 81.76M words) - TMX format' href="download.php?f=EUbookshop/nl-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Swahili (21 sentence pairs, 0.36k words) - TMX format' href="download.php?f=EUbookshop/nl-sw.tmx.gz">21</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-tc (477 sentence pairs, 18.90k words) - TMX format' href="download.php?f=EUbookshop/nl-tc.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Dutch-Ukrainian (1,424 sentence pairs, 44.48k words) - TMX format' href="download.php?f=EUbookshop/nl-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>nl_BE</th><td>5</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>pl</th><td>1,400</td> <td>19.0M</td> <td>1.0M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Arabic (118 sentence pairs, 3.59k words) - Moses format' href="download.php?f=EUbookshop/ar-pl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Polish-Bulgarian (243,021 sentence pairs, 10.06M words) - Moses format' href="download.php?f=EUbookshop/bg-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Bosnian (388 sentence pairs, 18.77k words) - Moses format' href="download.php?f=EUbookshop/bs-pl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Polish-Catalan (1,761 sentence pairs, 69.83k words) - Moses format' href="download.php?f=EUbookshop/ca-pl.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Polish-Czech (466,849 sentence pairs, 16.60M words) - Moses format' href="download.php?f=EUbookshop/cs-pl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Welsh (524 sentence pairs, 12.81k words) - Moses format' href="download.php?f=EUbookshop/cy-pl.txt.zip">0.5k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Polish-Danish (387,345 sentence pairs, 16.00M words) - Moses format' href="download.php?f=EUbookshop/da-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-German (526,064 sentence pairs, 19.76M words) - Moses format' href="download.php?f=EUbookshop/de-pl.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Polish-Greek (418,990 sentence pairs, 17.63M words) - Moses format' href="download.php?f=EUbookshop/el-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Polish-English (593,818 sentence pairs, 23.05M words) - Moses format' href="download.php?f=EUbookshop/en-pl.txt.zip">0.6M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Polish-Spanish (540,469 sentence pairs, 24.13M words) - Moses format' href="download.php?f=EUbookshop/es-pl.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Estonian (444,883 sentence pairs, 15.31M words) - Moses format' href="download.php?f=EUbookshop/et-pl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Finnish (429,629 sentence pairs, 13.91M words) - Moses format' href="download.php?f=EUbookshop/fi-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-French (518,561 sentence pairs, 20.59M words) - Moses format' href="download.php?f=EUbookshop/fr-pl.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Polish-Irish (84,316 sentence pairs, 3.00M words) - Moses format' href="download.php?f=EUbookshop/ga-pl.txt.zip">84.3k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Polish-Croatian (4,057 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-pl.txt.zip">4.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Hungarian (446,399 sentence pairs, 15.68M words) - Moses format' href="download.php?f=EUbookshop/hu-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Polish-Icelandic (7,938 sentence pairs, 0.26M words) - Moses format' href="download.php?f=EUbookshop/is-pl.txt.zip">7.9k</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Polish-Italian (553,534 sentence pairs, 22.00M words) - Moses format' href="download.php?f=EUbookshop/it-pl.txt.zip">0.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Japanese (81 sentence pairs, 2.66k words) - Moses format' href="download.php?f=EUbookshop/ja-pl.txt.zip">81</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Lithuanian (463,742 sentence pairs, 15.66M words) - Moses format' href="download.php?f=EUbookshop/lt-pl.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Polish-Latvian (451,988 sentence pairs, 16.06M words) - Moses format' href="download.php?f=EUbookshop/lv-pl.txt.zip">0.5M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Polish-Macedonian (3,202 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/mk-pl.txt.zip">3.2k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Polish-Maltese (300,408 sentence pairs, 9.90M words) - Moses format' href="download.php?f=EUbookshop/mt-pl.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Polish-BokmÃ¥l, Norwegian (20,653 sentence pairs, 0.78M words) - Moses format' href="download.php?f=EUbookshop/nb-pl.txt.zip">20.7k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Polish-Dutch (463,252 sentence pairs, 19.03M words) - Moses format' href="download.php?f=EUbookshop/nl-pl.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Polish-Portuguese (382,519 sentence pairs, 17.65M words) - TMX format' href="download.php?f=EUbookshop/pl-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Romanian (296,579 sentence pairs, 13.43M words) - TMX format' href="download.php?f=EUbookshop/pl-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Polish-Russian (2,749 sentence pairs, 0.11M words) - TMX format' href="download.php?f=EUbookshop/pl-ru.tmx.gz">2.7k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Slovak (388,698 sentence pairs, 15.75M words) - TMX format' href="download.php?f=EUbookshop/pl-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Slovenian (350,525 sentence pairs, 14.16M words) - TMX format' href="download.php?f=EUbookshop/pl-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Polish-Albanian (1,758 sentence pairs, 62.17k words) - TMX format' href="download.php?f=EUbookshop/pl-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Polish-Serbian (1,577 sentence pairs, 54.82k words) - TMX format' href="download.php?f=EUbookshop/pl-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Swedish (369,861 sentence pairs, 15.49M words) - TMX format' href="download.php?f=EUbookshop/pl-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Swahili (18 sentence pairs, 0.38k words) - TMX format' href="download.php?f=EUbookshop/pl-sw.tmx.gz">18</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Polish-Ukrainian (1,447 sentence pairs, 40.86k words) - TMX format' href="download.php?f=EUbookshop/pl-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>po</th><td>1</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>pt</th><td>6,381</td> <td>184.0M</td> <td>7.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Arabic (114 sentence pairs, 3.90k words) - Moses format' href="download.php?f=EUbookshop/ar-pt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Bulgarian (212,180 sentence pairs, 10.01M words) - Moses format' href="download.php?f=EUbookshop/bg-pt.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Catalan (3,141 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/ca-pt.txt.zip">3.1k</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Portuguese-Czech (425,849 sentence pairs, 17.41M words) - Moses format' href="download.php?f=EUbookshop/cs-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Welsh (506 sentence pairs, 14.12k words) - Moses format' href="download.php?f=EUbookshop/cy-pt.txt.zip">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Danish (3,653,080 sentence pairs, 171.11M words) - Moses format' href="download.php?f=EUbookshop/da-pt.txt.zip">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-German (3,933,163 sentence pairs, 174.07M words) - Moses format' href="download.php?f=EUbookshop/de-pt.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (3,625,635 sentence pairs, 162.55M words) - Moses format' href="download.php?f=EUbookshop/el-pt.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (4,280,420 sentence pairs, 195.01M words) - Moses format' href="download.php?f=EUbookshop/en-pt.txt.zip">4.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (4,055,574 sentence pairs, 205.94M words) - Moses format' href="download.php?f=EUbookshop/es-pt.txt.zip">4.1M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Portuguese-Estonian (406,845 sentence pairs, 15.98M words) - Moses format' href="download.php?f=EUbookshop/et-pt.txt.zip">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Finnish (1,895,143 sentence pairs, 73.47M words) - Moses format' href="download.php?f=EUbookshop/fi-pt.txt.zip">1.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (4,164,280 sentence pairs, 199.78M words) - Moses format' href="download.php?f=EUbookshop/fr-pt.txt.zip">4.2M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Portuguese-Irish (106,635 sentence pairs, 4.71M words) - Moses format' href="download.php?f=EUbookshop/ga-pt.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Gaelic (51 sentence pairs, 1.44k words) - Moses format' href="download.php?f=EUbookshop/gd-pt.txt.zip">51</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Portuguese-Croatian (2,872 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/hr-pt.txt.zip">2.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Hungarian (398,747 sentence pairs, 16.26M words) - Moses format' href="download.php?f=EUbookshop/hu-pt.txt.zip">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Portuguese-Icelandic (10,107 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/is-pt.txt.zip">10.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Italian (4,101,955 sentence pairs, 190.08M words) - Moses format' href="download.php?f=EUbookshop/it-pt.txt.zip">4.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Japanese (100 sentence pairs, 3.02k words) - Moses format' href="download.php?f=EUbookshop/ja-pt.txt.zip">100</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Portuguese-Lithuanian (402,754 sentence pairs, 16.11M words) - Moses format' href="download.php?f=EUbookshop/lt-pt.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Latvian (401,827 sentence pairs, 16.41M words) - Moses format' href="download.php?f=EUbookshop/lv-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Portuguese-Macedonian (1,224 sentence pairs, 49.76k words) - Moses format' href="download.php?f=EUbookshop/mk-pt.txt.zip">1.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Maltese (269,936 sentence pairs, 10.54M words) - Moses format' href="download.php?f=EUbookshop/mt-pt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (25,681 sentence pairs, 1.13M words) - Moses format' href="download.php?f=EUbookshop/nb-pt.txt.zip">25.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (4,057,119 sentence pairs, 191.87M words) - Moses format' href="download.php?f=EUbookshop/nl-pt.txt.zip">4.1M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Polish (439,308 sentence pairs, 18.78M words) - Moses format' href="download.php?f=EUbookshop/pl-pt.txt.zip">0.4M</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Portuguese-Romanian (274,608 sentence pairs, 13.85M words) - TMX format' href="download.php?f=EUbookshop/pt-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Portuguese-Russian (6,374 sentence pairs, 0.25M words) - TMX format' href="download.php?f=EUbookshop/pt-ru.tmx.gz">6.4k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Slovak (357,037 sentence pairs, 16.43M words) - TMX format' href="download.php?f=EUbookshop/pt-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Slovenian (329,054 sentence pairs, 15.05M words) - TMX format' href="download.php?f=EUbookshop/pt-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Albanian (18 sentence pairs, 0.40k words) - TMX format' href="download.php?f=EUbookshop/pt-sq.tmx.gz">18</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Serbian (8 sentence pairs, 0.17k words) - TMX format' href="download.php?f=EUbookshop/pt-sr.tmx.gz">8</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Swedish (1,684,618 sentence pairs, 80.05M words) - TMX format' href="download.php?f=EUbookshop/pt-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Swahili (18 sentence pairs, 0.32k words) - TMX format' href="download.php?f=EUbookshop/pt-sw.tmx.gz">18</a>
</td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Portuguese-Ukrainian (1,398 sentence pairs, 46.22k words) - TMX format' href="download.php?f=EUbookshop/pt-uk.tmx.gz">1.4k</a>
</td><td></td></tr> <tr><th>ro</th><td>747</td> <td>13.4M</td> <td>0.6M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Arabic (117 sentence pairs, 3.78k words) - Moses format' href="download.php?f=EUbookshop/ar-ro.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Romanian-Bulgarian (239,372 sentence pairs, 10.68M words) - Moses format' href="download.php?f=EUbookshop/bg-ro.txt.zip">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Romanian-Bosnian (389 sentence pairs, 21.45k words) - Moses format' href="download.php?f=EUbookshop/bs-ro.txt.zip">0.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Catalan (756 sentence pairs, 30.64k words) - Moses format' href="download.php?f=EUbookshop/ca-ro.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Czech (330,868 sentence pairs, 13.05M words) - Moses format' href="download.php?f=EUbookshop/cs-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Danish (273,893 sentence pairs, 12.56M words) - Moses format' href="download.php?f=EUbookshop/da-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-German (299,457 sentence pairs, 12.73M words) - Moses format' href="download.php?f=EUbookshop/de-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Greek (291,189 sentence pairs, 13.03M words) - Moses format' href="download.php?f=EUbookshop/el-ro.txt.zip">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Romanian-English (350,224 sentence pairs, 15.24M words) - Moses format' href="download.php?f=EUbookshop/en-ro.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Romanian-Spanish (318,914 sentence pairs, 15.63M words) - Moses format' href="download.php?f=EUbookshop/es-ro.txt.zip">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Estonian (306,701 sentence pairs, 11.88M words) - Moses format' href="download.php?f=EUbookshop/et-ro.txt.zip">0.3M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Romanian-Finnish (296,528 sentence pairs, 10.86M words) - Moses format' href="download.php?f=EUbookshop/fi-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-French (278,844 sentence pairs, 12.38M words) - Moses format' href="download.php?f=EUbookshop/fr-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Romanian-Irish (68,501 sentence pairs, 2.63M words) - Moses format' href="download.php?f=EUbookshop/ga-ro.txt.zip">68.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Gaelic (51 sentence pairs, 1.76k words) - Moses format' href="download.php?f=EUbookshop/gd-ro.txt.zip">51</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Romanian-Croatian (3,646 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-ro.txt.zip">3.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Hungarian (306,257 sentence pairs, 12.19M words) - Moses format' href="download.php?f=EUbookshop/hu-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Romanian-Icelandic (7,481 sentence pairs, 0.27M words) - Moses format' href="download.php?f=EUbookshop/is-ro.txt.zip">7.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Italian (324,798 sentence pairs, 14.21M words) - Moses format' href="download.php?f=EUbookshop/it-ro.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Lithuanian (331,052 sentence pairs, 12.55M words) - Moses format' href="download.php?f=EUbookshop/lt-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Latvian (315,362 sentence pairs, 12.56M words) - Moses format' href="download.php?f=EUbookshop/lv-ro.txt.zip">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Romanian-Macedonian (3,127 sentence pairs, 0.12M words) - Moses format' href="download.php?f=EUbookshop/mk-ro.txt.zip">3.1k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Romanian-Maltese (202,480 sentence pairs, 7.06M words) - Moses format' href="download.php?f=EUbookshop/mt-ro.txt.zip">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (18,845 sentence pairs, 0.81M words) - Moses format' href="download.php?f=EUbookshop/nb-ro.txt.zip">18.8k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Dutch (313,796 sentence pairs, 14.39M words) - Moses format' href="download.php?f=EUbookshop/nl-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Romanian-Polish (347,805 sentence pairs, 14.20M words) - Moses format' href="download.php?f=EUbookshop/pl-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Romanian-Portuguese (308,316 sentence pairs, 14.52M words) - Moses format' href="download.php?f=EUbookshop/pt-ro.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Romanian-Russian (1,328 sentence pairs, 67.54k words) - TMX format' href="download.php?f=EUbookshop/ro-ru.tmx.gz">1.3k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Slovak (275,690 sentence pairs, 12.58M words) - TMX format' href="download.php?f=EUbookshop/ro-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Slovenian (255,432 sentence pairs, 11.37M words) - TMX format' href="download.php?f=EUbookshop/ro-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Romanian-Albanian (1,780 sentence pairs, 71.55k words) - TMX format' href="download.php?f=EUbookshop/ro-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Romanian-Serbian (1,619 sentence pairs, 65.30k words) - TMX format' href="download.php?f=EUbookshop/ro-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Romanian-Swedish (260,766 sentence pairs, 12.22M words) - TMX format' href="download.php?f=EUbookshop/ro-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Swahili (19 sentence pairs, 0.33k words) - TMX format' href="download.php?f=EUbookshop/ro-sw.tmx.gz">19</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>ru</th><td>109</td> <td>1.4M</td> <td>88.7k</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Russian-Arabic (997 sentence pairs, 33.62k words) - Moses format' href="download.php?f=EUbookshop/ar-ru.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Bulgarian (961 sentence pairs, 25.52k words) - Moses format' href="download.php?f=EUbookshop/bg-ru.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Russian-Czech (2,064 sentence pairs, 87.09k words) - Moses format' href="download.php?f=EUbookshop/cs-ru.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Danish (5,457 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/da-ru.txt.zip">5.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Russian-German (9,514 sentence pairs, 0.32M words) - Moses format' href="download.php?f=EUbookshop/de-ru.txt.zip">9.5k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Russian-Greek (7,769 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/el-ru.txt.zip">7.8k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Russian-English (51,780 sentence pairs, 1.73M words) - Moses format' href="download.php?f=EUbookshop/en-ru.txt.zip">51.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Russian-Spanish (8,877 sentence pairs, 0.34M words) - Moses format' href="download.php?f=EUbookshop/es-ru.txt.zip">8.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Estonian (2,012 sentence pairs, 78.33k words) - Moses format' href="download.php?f=EUbookshop/et-ru.txt.zip">2.0k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Finnish (6,716 sentence pairs, 0.20M words) - Moses format' href="download.php?f=EUbookshop/fi-ru.txt.zip">6.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Russian-French (16,750 sentence pairs, 0.64M words) - Moses format' href="download.php?f=EUbookshop/fr-ru.txt.zip">16.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Irish (191 sentence pairs, 5.09k words) - Moses format' href="download.php?f=EUbookshop/ga-ru.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Russian-Croatian (991 sentence pairs, 35.85k words) - Moses format' href="download.php?f=EUbookshop/hr-ru.txt.zip">1.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Russian-Hungarian (2,262 sentence pairs, 89.34k words) - Moses format' href="download.php?f=EUbookshop/hu-ru.txt.zip">2.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Icelandic (507 sentence pairs, 17.98k words) - Moses format' href="download.php?f=EUbookshop/is-ru.txt.zip">0.5k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Russian-Italian (6,933 sentence pairs, 0.25M words) - Moses format' href="download.php?f=EUbookshop/it-ru.txt.zip">6.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Japanese (91 sentence pairs, 2.68k words) - Moses format' href="download.php?f=EUbookshop/ja-ru.txt.zip">91</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Lithuanian (2,027 sentence pairs, 80.19k words) - Moses format' href="download.php?f=EUbookshop/lt-ru.txt.zip">2.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Latvian (2,089 sentence pairs, 80.71k words) - Moses format' href="download.php?f=EUbookshop/lv-ru.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Macedonian (12 sentence pairs, 0.30k words) - Moses format' href="download.php?f=EUbookshop/mk-ru.txt.zip">12</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Maltese (1,260 sentence pairs, 59.42k words) - Moses format' href="download.php?f=EUbookshop/mt-ru.txt.zip">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (466 sentence pairs, 18.68k words) - Moses format' href="download.php?f=EUbookshop/nb-ru.txt.zip">0.5k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Russian-Dutch (6,793 sentence pairs, 0.24M words) - Moses format' href="download.php?f=EUbookshop/nl-ru.txt.zip">6.8k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Russian-Polish (2,906 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/pl-ru.txt.zip">2.9k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Russian-Portuguese (6,869 sentence pairs, 0.26M words) - Moses format' href="download.php?f=EUbookshop/pt-ru.txt.zip">6.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Russian-Romanian (1,349 sentence pairs, 67.79k words) - Moses format' href="download.php?f=EUbookshop/ro-ru.txt.zip">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Slovak (1,922 sentence pairs, 83.07k words) - TMX format' href="download.php?f=EUbookshop/ru-sk.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Russian-Slovenian (1,699 sentence pairs, 75.66k words) - TMX format' href="download.php?f=EUbookshop/ru-sl.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Albanian (12 sentence pairs, 0.29k words) - TMX format' href="download.php?f=EUbookshop/ru-sq.tmx.gz">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Serbian (9 sentence pairs, 0.17k words) - TMX format' href="download.php?f=EUbookshop/ru-sr.tmx.gz">9</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Russian-Swedish (5,775 sentence pairs, 0.20M words) - TMX format' href="download.php?f=EUbookshop/ru-sv.tmx.gz">5.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Swahili (12 sentence pairs, 0.22k words) - TMX format' href="download.php?f=EUbookshop/ru-sw.tmx.gz">12</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Ukrainian (271 sentence pairs, 8.72k words) - TMX format' href="download.php?f=EUbookshop/ru-uk.tmx.gz">0.3k</a>
</td><td></td></tr> <tr><th>sh</th><td>2</td> <td>13.1k</td> <td>1.1k</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Bosnian (282 sentence pairs, 15.44k words) - Moses format' href="download.php?f=EUbookshop/bs-sh.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='sh-English (562 sentence pairs, 22.25k words) - Moses format' href="download.php?f=EUbookshop/en-sh.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Croatian (469 sentence pairs, 19.20k words) - Moses format' href="download.php?f=EUbookshop/hr-sh.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='sh-Albanian (597 sentence pairs, 27.82k words) - TMX format' href="download.php?f=EUbookshop/sh-sq.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='sh-Serbian (309 sentence pairs, 16.19k words) - TMX format' href="download.php?f=EUbookshop/sh-sr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>sk</th><td>1,165</td> <td>15.6M</td> <td>0.8M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Arabic (107 sentence pairs, 3.35k words) - Moses format' href="download.php?f=EUbookshop/ar-sk.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Bulgarian (215,847 sentence pairs, 9.19M words) - Moses format' href="download.php?f=EUbookshop/bg-sk.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Bosnian (370 sentence pairs, 17.75k words) - Moses format' href="download.php?f=EUbookshop/bs-sk.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovak-Catalan (1,940 sentence pairs, 74.29k words) - Moses format' href="download.php?f=EUbookshop/ca-sk.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovak-Czech (459,416 sentence pairs, 16.76M words) - Moses format' href="download.php?f=EUbookshop/cs-sk.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovak-Welsh (540 sentence pairs, 13.55k words) - Moses format' href="download.php?f=EUbookshop/cy-sk.txt.zip">0.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Danish (373,085 sentence pairs, 15.35M words) - Moses format' href="download.php?f=EUbookshop/da-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-German (397,900 sentence pairs, 15.11M words) - Moses format' href="download.php?f=EUbookshop/de-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Greek (367,861 sentence pairs, 15.95M words) - Moses format' href="download.php?f=EUbookshop/el-sk.txt.zip">0.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-English (472,173 sentence pairs, 18.82M words) - Moses format' href="download.php?f=EUbookshop/en-sk.txt.zip">0.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Spanish (411,743 sentence pairs, 18.76M words) - Moses format' href="download.php?f=EUbookshop/es-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Estonian (438,444 sentence pairs, 15.19M words) - Moses format' href="download.php?f=EUbookshop/et-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Finnish (429,120 sentence pairs, 13.74M words) - Moses format' href="download.php?f=EUbookshop/fi-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-French (398,986 sentence pairs, 15.79M words) - Moses format' href="download.php?f=EUbookshop/fr-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Slovak-Irish (75,803 sentence pairs, 3.03M words) - Moses format' href="download.php?f=EUbookshop/ga-sk.txt.zip">75.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Gaelic (91 sentence pairs, 1.94k words) - Moses format' href="download.php?f=EUbookshop/gd-sk.txt.zip">91</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovak-Croatian (4,102 sentence pairs, 0.13M words) - Moses format' href="download.php?f=EUbookshop/hr-sk.txt.zip">4.1k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Hungarian (416,878 sentence pairs, 14.99M words) - Moses format' href="download.php?f=EUbookshop/hu-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Slovak-Icelandic (8,462 sentence pairs, 0.28M words) - Moses format' href="download.php?f=EUbookshop/is-sk.txt.zip">8.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Italian (421,297 sentence pairs, 17.23M words) - Moses format' href="download.php?f=EUbookshop/it-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Japanese (76 sentence pairs, 2.32k words) - Moses format' href="download.php?f=EUbookshop/ja-sk.txt.zip">76</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Lithuanian (457,191 sentence pairs, 15.88M words) - Moses format' href="download.php?f=EUbookshop/lt-sk.txt.zip">0.5M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Latvian (454,699 sentence pairs, 15.94M words) - Moses format' href="download.php?f=EUbookshop/lv-sk.txt.zip">0.5M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Slovak-Macedonian (3,100 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/mk-sk.txt.zip">3.1k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Slovak-Maltese (279,427 sentence pairs, 9.60M words) - Moses format' href="download.php?f=EUbookshop/mt-sk.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (21,224 sentence pairs, 0.82M words) - Moses format' href="download.php?f=EUbookshop/nb-sk.txt.zip">21.2k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Dutch (435,036 sentence pairs, 17.94M words) - Moses format' href="download.php?f=EUbookshop/nl-sk.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovak-Polish (451,238 sentence pairs, 16.95M words) - Moses format' href="download.php?f=EUbookshop/pl-sk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Portuguese (410,791 sentence pairs, 17.54M words) - Moses format' href="download.php?f=EUbookshop/pt-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Romanian (311,748 sentence pairs, 13.25M words) - Moses format' href="download.php?f=EUbookshop/ro-sk.txt.zip">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovak-Russian (2,000 sentence pairs, 84.19k words) - Moses format' href="download.php?f=EUbookshop/ru-sk.txt.zip">2.0k</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Slovenian (350,814 sentence pairs, 14.28M words) - TMX format' href="download.php?f=EUbookshop/sk-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Slovak-Albanian (1,670 sentence pairs, 61.53k words) - TMX format' href="download.php?f=EUbookshop/sk-sq.tmx.gz">1.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Slovak-Serbian (1,453 sentence pairs, 51.65k words) - TMX format' href="download.php?f=EUbookshop/sk-sr.tmx.gz">1.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Swedish (369,029 sentence pairs, 15.21M words) - TMX format' href="download.php?f=EUbookshop/sk-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Swahili (19 sentence pairs, 0.37k words) - TMX format' href="download.php?f=EUbookshop/sk-sw.tmx.gz">19</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovak-Ukrainian (1,327 sentence pairs, 38.04k words) - TMX format' href="download.php?f=EUbookshop/sk-uk.tmx.gz">1.3k</a>
</td><td></td></tr> <tr><th>sl</th><td>1,153</td> <td>14.0M</td> <td>0.7M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Arabic (160 sentence pairs, 4.92k words) - Moses format' href="download.php?f=EUbookshop/ar-sl.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovenian-Bulgarian (193,185 sentence pairs, 7.71M words) - Moses format' href="download.php?f=EUbookshop/bg-sl.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovenian-Bosnian (422 sentence pairs, 20.53k words) - Moses format' href="download.php?f=EUbookshop/bs-sl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Catalan (1,811 sentence pairs, 72.10k words) - Moses format' href="download.php?f=EUbookshop/ca-sl.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Czech (421,996 sentence pairs, 15.11M words) - Moses format' href="download.php?f=EUbookshop/cs-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Welsh (509 sentence pairs, 13.18k words) - Moses format' href="download.php?f=EUbookshop/cy-sl.txt.zip">0.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Danish (348,417 sentence pairs, 14.29M words) - Moses format' href="download.php?f=EUbookshop/da-sl.txt.zip">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-German (366,545 sentence pairs, 14.12M words) - Moses format' href="download.php?f=EUbookshop/de-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Slovenian-Greek (338,746 sentence pairs, 14.61M words) - Moses format' href="download.php?f=EUbookshop/el-sl.txt.zip">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-English (426,641 sentence pairs, 16.75M words) - Moses format' href="download.php?f=EUbookshop/en-sl.txt.zip">0.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-Spanish (373,621 sentence pairs, 16.74M words) - Moses format' href="download.php?f=EUbookshop/es-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Estonian (402,554 sentence pairs, 13.79M words) - Moses format' href="download.php?f=EUbookshop/et-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Finnish (387,600 sentence pairs, 12.69M words) - Moses format' href="download.php?f=EUbookshop/fi-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-French (359,784 sentence pairs, 14.82M words) - Moses format' href="download.php?f=EUbookshop/fr-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Slovenian-Irish (82,334 sentence pairs, 2.96M words) - Moses format' href="download.php?f=EUbookshop/ga-sl.txt.zip">82.3k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Slovenian-Croatian (4,222 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-sl.txt.zip">4.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Hungarian (388,081 sentence pairs, 13.55M words) - Moses format' href="download.php?f=EUbookshop/hu-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Slovenian-Icelandic (8,268 sentence pairs, 0.27M words) - Moses format' href="download.php?f=EUbookshop/is-sl.txt.zip">8.3k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovenian-Italian (396,581 sentence pairs, 15.99M words) - Moses format' href="download.php?f=EUbookshop/it-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Japanese (69 sentence pairs, 2.15k words) - Moses format' href="download.php?f=EUbookshop/ja-sl.txt.zip">69</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Lithuanian (413,114 sentence pairs, 14.15M words) - Moses format' href="download.php?f=EUbookshop/lt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Slovenian-Latvian (408,590 sentence pairs, 14.61M words) - Moses format' href="download.php?f=EUbookshop/lv-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovenian-Macedonian (3,119 sentence pairs, 0.10M words) - Moses format' href="download.php?f=EUbookshop/mk-sl.txt.zip">3.1k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Slovenian-Maltese (285,288 sentence pairs, 9.59M words) - Moses format' href="download.php?f=EUbookshop/mt-sl.txt.zip">0.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (21,358 sentence pairs, 0.85M words) - Moses format' href="download.php?f=EUbookshop/nb-sl.txt.zip">21.4k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovenian-Dutch (396,031 sentence pairs, 16.35M words) - Moses format' href="download.php?f=EUbookshop/nl-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Polish (413,087 sentence pairs, 15.20M words) - Moses format' href="download.php?f=EUbookshop/pl-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovenian-Portuguese (376,909 sentence pairs, 15.98M words) - Moses format' href="download.php?f=EUbookshop/pt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Romanian (293,563 sentence pairs, 11.96M words) - Moses format' href="download.php?f=EUbookshop/ro-sl.txt.zip">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovenian-Russian (1,788 sentence pairs, 76.69k words) - Moses format' href="download.php?f=EUbookshop/ru-sl.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Slovak (406,522 sentence pairs, 15.36M words) - Moses format' href="download.php?f=EUbookshop/sk-sl.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Slovenian-Albanian (1,808 sentence pairs, 66.97k words) - TMX format' href="download.php?f=EUbookshop/sl-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Slovenian-Serbian (1,560 sentence pairs, 56.01k words) - TMX format' href="download.php?f=EUbookshop/sl-sr.tmx.gz">1.6k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Swedish (330,573 sentence pairs, 13.75M words) - TMX format' href="download.php?f=EUbookshop/sl-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Swahili (22 sentence pairs, 0.35k words) - TMX format' href="download.php?f=EUbookshop/sl-sw.tmx.gz">22</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovenian-Ukrainian (1,252 sentence pairs, 36.07k words) - TMX format' href="download.php?f=EUbookshop/sl-uk.tmx.gz">1.3k</a>
</td><td></td></tr> <tr><th>sq</th><td>9</td> <td>84.2k</td> <td>4.3k</td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Bulgarian (1,776 sentence pairs, 65.64k words) - Moses format' href="download.php?f=EUbookshop/bg-sq.txt.zip">1.8k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Albanian-Bosnian (734 sentence pairs, 43.52k words) - Moses format' href="download.php?f=EUbookshop/bs-sq.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Czech (2,118 sentence pairs, 66.86k words) - Moses format' href="download.php?f=EUbookshop/cs-sq.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Danish (17 sentence pairs, 0.36k words) - Moses format' href="download.php?f=EUbookshop/da-sq.txt.zip">17</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-German (1,948 sentence pairs, 65.26k words) - Moses format' href="download.php?f=EUbookshop/de-sq.txt.zip">1.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Greek (2,093 sentence pairs, 72.72k words) - Moses format' href="download.php?f=EUbookshop/el-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Albanian-English (2,420 sentence pairs, 85.35k words) - Moses format' href="download.php?f=EUbookshop/en-sq.txt.zip">2.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Spanish (2,016 sentence pairs, 79.64k words) - Moses format' href="download.php?f=EUbookshop/es-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Albanian-Estonian (2,146 sentence pairs, 60.33k words) - Moses format' href="download.php?f=EUbookshop/et-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Finnish (2,290 sentence pairs, 65.48k words) - Moses format' href="download.php?f=EUbookshop/fi-sq.txt.zip">2.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-French (1,993 sentence pairs, 69.53k words) - Moses format' href="download.php?f=EUbookshop/fr-sq.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Irish (4 sentence pairs, 0.11k words) - Moses format' href="download.php?f=EUbookshop/ga-sq.txt.zip">4</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Albanian-Croatian (2,485 sentence pairs, 92.63k words) - Moses format' href="download.php?f=EUbookshop/hr-sq.txt.zip">2.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Hungarian (130 sentence pairs, 4.25k words) - Moses format' href="download.php?f=EUbookshop/hu-sq.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Italian (103 sentence pairs, 4.30k words) - Moses format' href="download.php?f=EUbookshop/it-sq.txt.zip">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Albanian-Lithuanian (1,977 sentence pairs, 60.39k words) - Moses format' href="download.php?f=EUbookshop/lt-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Albanian-Latvian (1,986 sentence pairs, 61.25k words) - Moses format' href="download.php?f=EUbookshop/lv-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Macedonian (2,130 sentence pairs, 80.34k words) - Moses format' href="download.php?f=EUbookshop/mk-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Maltese (22 sentence pairs, 0.43k words) - Moses format' href="download.php?f=EUbookshop/mt-sq.txt.zip">22</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Albanian-BokmÃ¥l, Norwegian (1,489 sentence pairs, 60.25k words) - Moses format' href="download.php?f=EUbookshop/nb-sq.txt.zip">1.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Dutch (2,183 sentence pairs, 74.10k words) - Moses format' href="download.php?f=EUbookshop/nl-sq.txt.zip">2.2k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Polish (2,175 sentence pairs, 66.58k words) - Moses format' href="download.php?f=EUbookshop/pl-sq.txt.zip">2.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Portuguese (19 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/pt-sq.txt.zip">19</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Romanian (2,116 sentence pairs, 75.62k words) - Moses format' href="download.php?f=EUbookshop/ro-sq.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Russian (12 sentence pairs, 0.29k words) - Moses format' href="download.php?f=EUbookshop/ru-sq.txt.zip">12</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Albanian-sh (659 sentence pairs, 28.33k words) - Moses format' href="download.php?f=EUbookshop/sh-sq.txt.zip">0.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Slovak (2,025 sentence pairs, 66.04k words) - Moses format' href="download.php?f=EUbookshop/sk-sq.txt.zip">2.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Slovenian (2,195 sentence pairs, 71.44k words) - Moses format' href="download.php?f=EUbookshop/sl-sq.txt.zip">2.2k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Albanian-Serbian (1,999 sentence pairs, 85.27k words) - TMX format' href="download.php?f=EUbookshop/sq-sr.tmx.gz">2.0k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Swedish (1,772 sentence pairs, 64.99k words) - TMX format' href="download.php?f=EUbookshop/sq-sv.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Swahili (19 sentence pairs, 0.40k words) - TMX format' href="download.php?f=EUbookshop/sq-sw.tmx.gz">19</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>sr</th><td>7</td> <td>58.2k</td> <td>3.2k</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Bulgarian (1,767 sentence pairs, 61.99k words) - Moses format' href="download.php?f=EUbookshop/bg-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Serbian-Bosnian (577 sentence pairs, 32.06k words) - Moses format' href="download.php?f=EUbookshop/bs-sr.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Czech (1,936 sentence pairs, 60.71k words) - Moses format' href="download.php?f=EUbookshop/cs-sr.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Danish (5 sentence pairs, 0.15k words) - Moses format' href="download.php?f=EUbookshop/da-sr.txt.zip">5</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-German (1,696 sentence pairs, 56.11k words) - Moses format' href="download.php?f=EUbookshop/de-sr.txt.zip">1.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Greek (2,043 sentence pairs, 69.05k words) - Moses format' href="download.php?f=EUbookshop/el-sr.txt.zip">2.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-English (1,679 sentence pairs, 58.45k words) - Moses format' href="download.php?f=EUbookshop/en-sr.txt.zip">1.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Spanish (1,781 sentence pairs, 68.16k words) - Moses format' href="download.php?f=EUbookshop/es-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Serbian-Estonian (1,837 sentence pairs, 51.28k words) - Moses format' href="download.php?f=EUbookshop/et-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Finnish (1,983 sentence pairs, 55.64k words) - Moses format' href="download.php?f=EUbookshop/fi-sr.txt.zip">2.0k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-French (1,750 sentence pairs, 61.16k words) - Moses format' href="download.php?f=EUbookshop/fr-sr.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Croatian (1,963 sentence pairs, 71.13k words) - Moses format' href="download.php?f=EUbookshop/hr-sr.txt.zip">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Hungarian (81 sentence pairs, 2.93k words) - Moses format' href="download.php?f=EUbookshop/hu-sr.txt.zip">81</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Italian (55 sentence pairs, 2.67k words) - Moses format' href="download.php?f=EUbookshop/it-sr.txt.zip">55</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Lithuanian (1,762 sentence pairs, 53.69k words) - Moses format' href="download.php?f=EUbookshop/lt-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Serbian-Latvian (1,490 sentence pairs, 45.92k words) - Moses format' href="download.php?f=EUbookshop/lv-sr.txt.zip">1.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Macedonian (2,015 sentence pairs, 72.45k words) - Moses format' href="download.php?f=EUbookshop/mk-sr.txt.zip">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Maltese (9 sentence pairs, 0.18k words) - Moses format' href="download.php?f=EUbookshop/mt-sr.txt.zip">9</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-BokmÃ¥l, Norwegian (1,340 sentence pairs, 53.11k words) - Moses format' href="download.php?f=EUbookshop/nb-sr.txt.zip">1.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Dutch (1,940 sentence pairs, 66.03k words) - Moses format' href="download.php?f=EUbookshop/nl-sr.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Polish (1,999 sentence pairs, 60.11k words) - Moses format' href="download.php?f=EUbookshop/pl-sr.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Portuguese (8 sentence pairs, 0.17k words) - Moses format' href="download.php?f=EUbookshop/pt-sr.txt.zip">8</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Serbian-Romanian (1,933 sentence pairs, 70.12k words) - Moses format' href="download.php?f=EUbookshop/ro-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Russian (9 sentence pairs, 0.17k words) - Moses format' href="download.php?f=EUbookshop/ru-sr.txt.zip">9</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Serbian-sh (313 sentence pairs, 16.23k words) - Moses format' href="download.php?f=EUbookshop/sh-sr.txt.zip">0.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Slovak (1,800 sentence pairs, 56.80k words) - Moses format' href="download.php?f=EUbookshop/sk-sr.txt.zip">1.8k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Serbian-Slovenian (1,886 sentence pairs, 60.98k words) - Moses format' href="download.php?f=EUbookshop/sl-sr.txt.zip">1.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Serbian-Albanian (2,326 sentence pairs, 90.07k words) - Moses format' href="download.php?f=EUbookshop/sq-sr.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Swedish (1,494 sentence pairs, 53.59k words) - TMX format' href="download.php?f=EUbookshop/sr-sv.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Swahili (9 sentence pairs, 0.14k words) - TMX format' href="download.php?f=EUbookshop/sr-sw.tmx.gz">9</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>sv</th><td>4,033</td> <td>71.4M</td> <td>3.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Arabic (107 sentence pairs, 3.17k words) - Moses format' href="download.php?f=EUbookshop/ar-sv.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Swedish-Bulgarian (206,815 sentence pairs, 9.11M words) - Moses format' href="download.php?f=EUbookshop/bg-sv.txt.zip">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Bosnian (381 sentence pairs, 18.85k words) - Moses format' href="download.php?f=EUbookshop/bs-sv.txt.zip">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Swedish-Catalan (2,129 sentence pairs, 80.36k words) - Moses format' href="download.php?f=EUbookshop/ca-sv.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Czech (409,187 sentence pairs, 15.58M words) - Moses format' href="download.php?f=EUbookshop/cs-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Welsh (518 sentence pairs, 13.31k words) - Moses format' href="download.php?f=EUbookshop/cy-sv.txt.zip">0.5k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-Danish (1,804,831 sentence pairs, 75.86M words) - Moses format' href="download.php?f=EUbookshop/da-sv.txt.zip">1.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Swedish-German (1,828,773 sentence pairs, 72.96M words) - Moses format' href="download.php?f=EUbookshop/de-sv.txt.zip">1.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Greek (1,584,903 sentence pairs, 65.87M words) - Moses format' href="download.php?f=EUbookshop/el-sv.txt.zip">1.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-English (1,979,832 sentence pairs, 82.90M words) - Moses format' href="download.php?f=EUbookshop/en-sv.txt.zip">2.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Spanish (1,791,912 sentence pairs, 84.31M words) - Moses format' href="download.php?f=EUbookshop/es-sv.txt.zip">1.8M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Swedish-Estonian (413,069 sentence pairs, 14.59M words) - Moses format' href="download.php?f=EUbookshop/et-sv.txt.zip">0.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-Finnish (1,967,636 sentence pairs, 68.03M words) - Moses format' href="download.php?f=EUbookshop/fi-sv.txt.zip">2.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-French (1,861,077 sentence pairs, 81.79M words) - Moses format' href="download.php?f=EUbookshop/fr-sv.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Swedish-Irish (94,143 sentence pairs, 3.93M words) - Moses format' href="download.php?f=EUbookshop/ga-sv.txt.zip">94.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Gaelic (36 sentence pairs, 0.97k words) - Moses format' href="download.php?f=EUbookshop/gd-sv.txt.zip">36</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Swedish-Croatian (4,151 sentence pairs, 0.14M words) - Moses format' href="download.php?f=EUbookshop/hr-sv.txt.zip">4.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Swedish-Hungarian (382,354 sentence pairs, 14.16M words) - Moses format' href="download.php?f=EUbookshop/hu-sv.txt.zip">0.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Swedish-Icelandic (11,209 sentence pairs, 0.38M words) - Moses format' href="download.php?f=EUbookshop/is-sv.txt.zip">11.2k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Italian (1,877,212 sentence pairs, 80.76M words) - Moses format' href="download.php?f=EUbookshop/it-sv.txt.zip">1.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Japanese (75 sentence pairs, 1.57k words) - Moses format' href="download.php?f=EUbookshop/ja-sv.txt.zip">75</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Lithuanian (414,387 sentence pairs, 14.99M words) - Moses format' href="download.php?f=EUbookshop/lt-sv.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Latvian (406,796 sentence pairs, 14.99M words) - Moses format' href="download.php?f=EUbookshop/lv-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Swedish-Macedonian (3,057 sentence pairs, 0.11M words) - Moses format' href="download.php?f=EUbookshop/mk-sv.txt.zip">3.1k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Swedish-Maltese (269,792 sentence pairs, 9.61M words) - Moses format' href="download.php?f=EUbookshop/mt-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (29,048 sentence pairs, 1.14M words) - Moses format' href="download.php?f=EUbookshop/nb-sv.txt.zip">29.0k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Dutch (1,950,391 sentence pairs, 84.20M words) - Moses format' href="download.php?f=EUbookshop/nl-sv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Polish (424,651 sentence pairs, 16.60M words) - Moses format' href="download.php?f=EUbookshop/pl-sv.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Portuguese (1,819,760 sentence pairs, 82.26M words) - Moses format' href="download.php?f=EUbookshop/pt-sv.txt.zip">1.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Swedish-Romanian (294,859 sentence pairs, 12.88M words) - Moses format' href="download.php?f=EUbookshop/ro-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Swedish-Russian (6,270 sentence pairs, 0.21M words) - Moses format' href="download.php?f=EUbookshop/ru-sv.txt.zip">6.3k</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Slovak (418,040 sentence pairs, 16.26M words) - Moses format' href="download.php?f=EUbookshop/sk-sv.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Swedish-Slovenian (374,687 sentence pairs, 14.63M words) - Moses format' href="download.php?f=EUbookshop/sl-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Swedish-Albanian (2,208 sentence pairs, 69.42k words) - Moses format' href="download.php?f=EUbookshop/sq-sv.txt.zip">2.2k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Swedish-Serbian (1,799 sentence pairs, 58.01k words) - Moses format' href="download.php?f=EUbookshop/sr-sv.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Swahili (22 sentence pairs, 0.34k words) - TMX format' href="download.php?f=EUbookshop/sv-sw.tmx.gz">22</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Swedish-Ukrainian (1,344 sentence pairs, 39.06k words) - TMX format' href="download.php?f=EUbookshop/sv-uk.tmx.gz">1.3k</a>
</td><td></td></tr> <tr><th>sw</th><td>3</td> <td>0.3k</td> <td>31</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Bulgarian (8 sentence pairs, 0.24k words) - Moses format' href="download.php?f=EUbookshop/bg-sw.txt.zip">8</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Czech (24 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/cs-sw.txt.zip">24</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Danish (19 sentence pairs, 0.27k words) - Moses format' href="download.php?f=EUbookshop/da-sw.txt.zip">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-German (20 sentence pairs, 0.35k words) - Moses format' href="download.php?f=EUbookshop/de-sw.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Greek (12 sentence pairs, 0.23k words) - Moses format' href="download.php?f=EUbookshop/el-sw.txt.zip">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-English (27 sentence pairs, 0.41k words) - Moses format' href="download.php?f=EUbookshop/en-sw.txt.zip">27</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Spanish (18 sentence pairs, 0.39k words) - Moses format' href="download.php?f=EUbookshop/es-sw.txt.zip">18</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Estonian (16 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/et-sw.txt.zip">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Finnish (27 sentence pairs, 0.37k words) - Moses format' href="download.php?f=EUbookshop/fi-sw.txt.zip">27</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-French (25 sentence pairs, 0.44k words) - Moses format' href="download.php?f=EUbookshop/fr-sw.txt.zip">25</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Irish (4 sentence pairs, 0.11k words) - Moses format' href="download.php?f=EUbookshop/ga-sw.txt.zip">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Croatian (7 sentence pairs, 0.22k words) - Moses format' href="download.php?f=EUbookshop/hr-sw.txt.zip">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Hungarian (23 sentence pairs, 0.36k words) - Moses format' href="download.php?f=EUbookshop/hu-sw.txt.zip">23</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Italian (23 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/it-sw.txt.zip">23</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Lithuanian (25 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/lt-sw.txt.zip">25</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Latvian (23 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/lv-sw.txt.zip">23</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Macedonian (8 sentence pairs, 0.22k words) - Moses format' href="download.php?f=EUbookshop/mk-sw.txt.zip">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Maltese (18 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/mt-sw.txt.zip">18</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-BokmÃ¥l, Norwegian (16 sentence pairs, 0.35k words) - Moses format' href="download.php?f=EUbookshop/nb-sw.txt.zip">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Dutch (24 sentence pairs, 0.40k words) - Moses format' href="download.php?f=EUbookshop/nl-sw.txt.zip">24</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Polish (19 sentence pairs, 0.39k words) - Moses format' href="download.php?f=EUbookshop/pl-sw.txt.zip">19</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Portuguese (20 sentence pairs, 0.37k words) - Moses format' href="download.php?f=EUbookshop/pt-sw.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Romanian (20 sentence pairs, 0.34k words) - Moses format' href="download.php?f=EUbookshop/ro-sw.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Russian (12 sentence pairs, 0.22k words) - Moses format' href="download.php?f=EUbookshop/ru-sw.txt.zip">12</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Slovak (20 sentence pairs, 0.37k words) - Moses format' href="download.php?f=EUbookshop/sk-sw.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Slovenian (22 sentence pairs, 0.35k words) - Moses format' href="download.php?f=EUbookshop/sl-sw.txt.zip">22</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Albanian (20 sentence pairs, 0.41k words) - Moses format' href="download.php?f=EUbookshop/sq-sw.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Serbian (9 sentence pairs, 0.14k words) - Moses format' href="download.php?f=EUbookshop/sr-sw.txt.zip">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Swedish (24 sentence pairs, 0.37k words) - Moses format' href="download.php?f=EUbookshop/sv-sw.txt.zip">24</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>tc</th><td>1</td> <td>18.3k</td> <td>1.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='tc-Danish (567 sentence pairs, 22.12k words) - Moses format' href="download.php?f=EUbookshop/da-tc.txt.zip">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-German (509 sentence pairs, 17.21k words) - Moses format' href="download.php?f=EUbookshop/de-tc.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tc-English (138 sentence pairs, 0.53k words) - Moses format' href="download.php?f=EUbookshop/en-tc.txt.zip">0.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='tc-Spanish (601 sentence pairs, 26.39k words) - Moses format' href="download.php?f=EUbookshop/es-tc.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-French (499 sentence pairs, 19.86k words) - Moses format' href="download.php?f=EUbookshop/fr-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-Hungarian (595 sentence pairs, 21.37k words) - Moses format' href="download.php?f=EUbookshop/hu-tc.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='tc-Italian (616 sentence pairs, 25.55k words) - Moses format' href="download.php?f=EUbookshop/it-tc.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='tc-Dutch (477 sentence pairs, 18.90k words) - Moses format' href="download.php?f=EUbookshop/nl-tc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>tr</th><td>0</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Turkish-Lithuanian (18,419 sentence pairs, 0.58M words) - Moses format' href="download.php?f=EUbookshop/lt-tr.txt.zip">18.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>uk</th><td>6</td> <td>40.3k</td> <td>2.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Czech (1,448 sentence pairs, 39.96k words) - Moses format' href="download.php?f=EUbookshop/cs-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Welsh (284 sentence pairs, 7.67k words) - Moses format' href="download.php?f=EUbookshop/cy-uk.txt.zip">0.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Danish (1,325 sentence pairs, 38.61k words) - Moses format' href="download.php?f=EUbookshop/da-uk.txt.zip">1.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-German (1,559 sentence pairs, 46.07k words) - Moses format' href="download.php?f=EUbookshop/de-uk.txt.zip">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ukrainian-Greek (793 sentence pairs, 28.63k words) - Moses format' href="download.php?f=EUbookshop/el-uk.txt.zip">0.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-English (1,689 sentence pairs, 51.52k words) - Moses format' href="download.php?f=EUbookshop/en-uk.txt.zip">1.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Spanish (1,369 sentence pairs, 44.34k words) - Moses format' href="download.php?f=EUbookshop/es-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Estonian (1,438 sentence pairs, 35.86k words) - Moses format' href="download.php?f=EUbookshop/et-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Finnish (1,468 sentence pairs, 35.34k words) - Moses format' href="download.php?f=EUbookshop/fi-uk.txt.zip">1.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-French (1,499 sentence pairs, 48.31k words) - Moses format' href="download.php?f=EUbookshop/fr-uk.txt.zip">1.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Croatian (272 sentence pairs, 6.72k words) - Moses format' href="download.php?f=EUbookshop/hr-uk.txt.zip">0.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Hungarian (1,442 sentence pairs, 38.78k words) - Moses format' href="download.php?f=EUbookshop/hu-uk.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Italian (1,451 sentence pairs, 44.83k words) - Moses format' href="download.php?f=EUbookshop/it-uk.txt.zip">1.5k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Lithuanian (1,419 sentence pairs, 36.00k words) - Moses format' href="download.php?f=EUbookshop/lt-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Latvian (1,439 sentence pairs, 37.46k words) - Moses format' href="download.php?f=EUbookshop/lv-uk.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Maltese (675 sentence pairs, 17.66k words) - Moses format' href="download.php?f=EUbookshop/mt-uk.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Dutch (1,462 sentence pairs, 44.81k words) - Moses format' href="download.php?f=EUbookshop/nl-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Polish (1,504 sentence pairs, 41.25k words) - Moses format' href="download.php?f=EUbookshop/pl-uk.txt.zip">1.5k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Portuguese (1,447 sentence pairs, 46.66k words) - Moses format' href="download.php?f=EUbookshop/pt-uk.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Russian (271 sentence pairs, 8.72k words) - Moses format' href="download.php?f=EUbookshop/ru-uk.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Slovak (1,370 sentence pairs, 38.34k words) - Moses format' href="download.php?f=EUbookshop/sk-uk.txt.zip">1.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Slovenian (1,298 sentence pairs, 36.33k words) - Moses format' href="download.php?f=EUbookshop/sl-uk.txt.zip">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Swedish (1,392 sentence pairs, 39.47k words) - Moses format' href="download.php?f=EUbookshop/sv-uk.txt.zip">1.4k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>zh</th><td>18</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>