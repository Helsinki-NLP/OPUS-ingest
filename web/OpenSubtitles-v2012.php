<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>OpenSubtitles2012</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OpenSubtitles2012</h1>

<p>A collection of documents from <a href="http://www.opensubtitles.org/">http://www.opensubtitles.org/</a>.<br/>
<a href="OpenSubtitles2018.php">Look at the latest package of OpenSubtitles2018!</a>
</p>

<p>
<b>IMPORTANT:</b> If you use the OpenSubtitle corpus: <br/>Please, add a link to <b>http://www.opensubtitles.org/</b> to your website and to your reports and publications produced with the data! I promised this when I got the data from the providers of that website!</p>

<p> This is a slightly cleaner and bigger version of the subtitle collection using improved sentence alignment and better language checking.<br/>
The previous release is still available <a href="OpenSubtitles-v2011.php">here</a>.
</p>

<p>55 languages, 1,076 bitexts<br>total number of files: 1,415,879<br>total number of tokens: 8.48G<br>total number of sentence fragments: 1.24G<br><p>Please <a href="http://opus.nlpl.eu/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/>

<h3>News</h3>

<ul>
  <li><b>2014-10-23:</b> <a href="https://github.com/AlJohri/OpenSubtitles">Scripts for OpenSubtitles2012/2013</a> (by Atul Johri)</li>
  <li><b>2013-11-18:</b> <a href="OpenSubtitles-v2013.php">An extension of the subtitle corpus is available</a></li>
</ul>


<h3>Download</h3>

<p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles2012/af_sample.html">af</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/az_sample.html">az</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/be_sample.html">be</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/da_sample.html">da</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/de_sample.html">de</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/el_sample.html">el</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/en_sample.html">en</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/es_sample.html">es</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/et_sample.html">et</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/fr_sample.html">fr</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles2012/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/he_sample.html">he</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/id_sample.html">id</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/is_sample.html">is</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/it_sample.html">it</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/pt_br_sample.html">pt_br</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/si_sample.html">si</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/th_sample.html">th</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/zh_sample.html">zh</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/zh_cn_sample.html">zh_cn</a></th>
<th><a rel="nofollow" href="OpenSubtitles2012/zh_tw_sample.html">zh_tw</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/af.tar.gz">af</a></th>
<th></th>
<td><a rel="nofollow" title="Afrikaans-Arabic (sample file)" href="OpenSubtitles2012/af-ar_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Catalan (sample file)" href="OpenSubtitles2012/af-ca_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-German (sample file)" href="OpenSubtitles2012/af-de_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Greek (sample file)" href="OpenSubtitles2012/af-el_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="OpenSubtitles2012/af-en_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Spanish (sample file)" href="OpenSubtitles2012/af-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-French (sample file)" href="OpenSubtitles2012/af-fr_sample.html">view</a></td><th>af</th>
<td></td><td><a rel="nofollow" title="Afrikaans-Hebrew (sample file)" href="OpenSubtitles2012/af-he_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Hungarian (sample file)" href="OpenSubtitles2012/af-hu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Italian (sample file)" href="OpenSubtitles2012/af-it_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Korean (sample file)" href="OpenSubtitles2012/af-ko_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Malay (sample file)" href="OpenSubtitles2012/af-ms_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Polish (sample file)" href="OpenSubtitles2012/af-pl_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Portuguese (sample file)" href="OpenSubtitles2012/af-pt_sample.html">view</a></td><td></td><th>af</th>
<td><a rel="nofollow" title="Afrikaans-Romanian (sample file)" href="OpenSubtitles2012/af-ro_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Russian (sample file)" href="OpenSubtitles2012/af-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Vietnamese (sample file)" href="OpenSubtitles2012/af-vi_sample.html">view</a></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/af.raw.tar.gz">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ar.tar.gz">ar</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Arabic-Afrikaans' (0.6k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/af-ar.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Arabic-Bulgarian (sample file)" href="OpenSubtitles2012/ar-bg_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Bosnian (sample file)" href="OpenSubtitles2012/ar-bs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Catalan (sample file)" href="OpenSubtitles2012/ar-ca_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Czech (sample file)" href="OpenSubtitles2012/ar-cs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Danish (sample file)" href="OpenSubtitles2012/ar-da_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="OpenSubtitles2012/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Greek (sample file)" href="OpenSubtitles2012/ar-el_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="OpenSubtitles2012/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="OpenSubtitles2012/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="OpenSubtitles2012/ar-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Persian (sample file)" href="OpenSubtitles2012/ar-fa_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="OpenSubtitles2012/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="OpenSubtitles2012/ar-fr_sample.html">view</a></td><th>ar</th>
<td></td><td><a rel="nofollow" title="Arabic-Hebrew (sample file)" href="OpenSubtitles2012/ar-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="OpenSubtitles2012/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hungarian (sample file)" href="OpenSubtitles2012/ar-hu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Indonesian (sample file)" href="OpenSubtitles2012/ar-id_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Icelandic (sample file)" href="OpenSubtitles2012/ar-is_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="OpenSubtitles2012/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="OpenSubtitles2012/ar-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Korean (sample file)" href="OpenSubtitles2012/ar-ko_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="OpenSubtitles2012/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="OpenSubtitles2012/ar-lv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Macedonian (sample file)" href="OpenSubtitles2012/ar-mk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malay (sample file)" href="OpenSubtitles2012/ar-ms_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/ar-nb_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="OpenSubtitles2012/ar-nl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="OpenSubtitles2012/ar-pl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles2012/ar-pt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles2012/ar-pt_br_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Romanian (sample file)" href="OpenSubtitles2012/ar-ro_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="OpenSubtitles2012/ar-ru_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Sinhala (sample file)" href="OpenSubtitles2012/ar-si_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="OpenSubtitles2012/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="OpenSubtitles2012/ar-sl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Albanian (sample file)" href="OpenSubtitles2012/ar-sq_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Serbian (sample file)" href="OpenSubtitles2012/ar-sr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Swedish (sample file)" href="OpenSubtitles2012/ar-sv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Thai (sample file)" href="OpenSubtitles2012/ar-th_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="OpenSubtitles2012/ar-tr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Ukrainian (sample file)" href="OpenSubtitles2012/ar-uk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Urdu (sample file)" href="OpenSubtitles2012/ar-ur_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Vietnamese (sample file)" href="OpenSubtitles2012/ar-vi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles2012/ar-zh_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles2012/ar-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles2012/ar-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/az.tar.gz">az</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Czech (sample file)" href="OpenSubtitles2012/az-cs_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Azerbaijani-German (sample file)" href="OpenSubtitles2012/az-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Spanish (sample file)" href="OpenSubtitles2012/az-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-French (sample file)" href="OpenSubtitles2012/az-fr_sample.html">view</a></td><th>az</th>
<td></td><td><a rel="nofollow" title="Azerbaijani-Hebrew (sample file)" href="OpenSubtitles2012/az-he_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Hungarian (sample file)" href="OpenSubtitles2012/az-hu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Polish (sample file)" href="OpenSubtitles2012/az-pl_sample.html">view</a></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Slovak (sample file)" href="OpenSubtitles2012/az-sk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/az.raw.tar.gz">az</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/be.tar.gz">be</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Spanish (sample file)" href="OpenSubtitles2012/be-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/be.raw.tar.gz">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bg.tar.gz">bg</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (7,947 aligned documents, 6.0M links, 86.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-bg.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="OpenSubtitles2012/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="OpenSubtitles2012/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="OpenSubtitles2012/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="OpenSubtitles2012/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="OpenSubtitles2012/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="OpenSubtitles2012/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="OpenSubtitles2012/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="OpenSubtitles2012/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="OpenSubtitles2012/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="OpenSubtitles2012/bg-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Persian (sample file)" href="OpenSubtitles2012/bg-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="OpenSubtitles2012/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="OpenSubtitles2012/bg-fr_sample.html">view</a></td><th>bg</th>
<td></td><td><a rel="nofollow" title="Bulgarian-Hebrew (sample file)" href="OpenSubtitles2012/bg-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="OpenSubtitles2012/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="OpenSubtitles2012/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Indonesian (sample file)" href="OpenSubtitles2012/bg-id_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="OpenSubtitles2012/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="OpenSubtitles2012/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="OpenSubtitles2012/bg-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Kazakh (sample file)" href="OpenSubtitles2012/bg-kk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="OpenSubtitles2012/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="OpenSubtitles2012/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="OpenSubtitles2012/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="OpenSubtitles2012/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malay (sample file)" href="OpenSubtitles2012/bg-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="OpenSubtitles2012/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="OpenSubtitles2012/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles2012/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles2012/bg-pt_br_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="OpenSubtitles2012/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="OpenSubtitles2012/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="OpenSubtitles2012/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="OpenSubtitles2012/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="OpenSubtitles2012/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="OpenSubtitles2012/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="OpenSubtitles2012/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="OpenSubtitles2012/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Thai (sample file)" href="OpenSubtitles2012/bg-th_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="OpenSubtitles2012/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="OpenSubtitles2012/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Urdu (sample file)" href="OpenSubtitles2012/bg-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Vietnamese (sample file)" href="OpenSubtitles2012/bg-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles2012/bg-zh_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles2012/bg-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles2012/bg-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bg.raw.tar.gz">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bn.tar.gz">bn</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Persian (sample file)" href="OpenSubtitles2012/bn-fa_sample.html">view</a></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bn.raw.tar.gz">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bs.tar.gz">bs</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Arabic' (1,127 aligned documents, 0.9M links, 12.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-bs.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (1,847 aligned documents, 1.6M links, 22.0M tokens)" href="download.php?f=OpenSubtitles2012/bg-bs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="OpenSubtitles2012/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="OpenSubtitles2012/bs-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Danish (sample file)" href="OpenSubtitles2012/bs-da_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="OpenSubtitles2012/bs-de_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="OpenSubtitles2012/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="OpenSubtitles2012/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="OpenSubtitles2012/bs-es_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="OpenSubtitles2012/bs-et_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="OpenSubtitles2012/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="OpenSubtitles2012/bs-fr_sample.html">view</a></td><th>bs</th>
<td></td><td><a rel="nofollow" title="Bosnian-Hebrew (sample file)" href="OpenSubtitles2012/bs-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="OpenSubtitles2012/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="OpenSubtitles2012/bs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Indonesian (sample file)" href="OpenSubtitles2012/bs-id_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="OpenSubtitles2012/bs-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="OpenSubtitles2012/bs-it_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Japanese (sample file)" href="OpenSubtitles2012/bs-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Korean (sample file)" href="OpenSubtitles2012/bs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="OpenSubtitles2012/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="OpenSubtitles2012/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="OpenSubtitles2012/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malay (sample file)" href="OpenSubtitles2012/bs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Dutch (sample file)" href="OpenSubtitles2012/bs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Polish (sample file)" href="OpenSubtitles2012/bs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles2012/bs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles2012/bs-pt_br_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="OpenSubtitles2012/bs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Russian (sample file)" href="OpenSubtitles2012/bs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Sinhala (sample file)" href="OpenSubtitles2012/bs-si_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="OpenSubtitles2012/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="OpenSubtitles2012/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="OpenSubtitles2012/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="OpenSubtitles2012/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swedish (sample file)" href="OpenSubtitles2012/bs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Thai (sample file)" href="OpenSubtitles2012/bs-th_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="OpenSubtitles2012/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="OpenSubtitles2012/bs-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Vietnamese (sample file)" href="OpenSubtitles2012/bs-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="OpenSubtitles2012/bs-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="OpenSubtitles2012/bs-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/bs.raw.tar.gz">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ca.tar.gz">ca</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Afrikaans' (0.7k links, 14.9k tokens)" href="download.php?f=OpenSubtitles2012/af-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Arabic' (39 aligned documents, 38.4k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/ar-ca.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (51 aligned documents, 53.9k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-ca.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (6 aligned documents, 6.8k links, 97.6k tokens)" href="download.php?f=OpenSubtitles2012/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Czech (sample file)" href="OpenSubtitles2012/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="OpenSubtitles2012/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="OpenSubtitles2012/ca-de_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="OpenSubtitles2012/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="OpenSubtitles2012/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="OpenSubtitles2012/ca-es_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="OpenSubtitles2012/ca-et_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="OpenSubtitles2012/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="OpenSubtitles2012/ca-fr_sample.html">view</a></td><th>ca</th>
<td></td><td><a rel="nofollow" title="Catalan-Hebrew (sample file)" href="OpenSubtitles2012/ca-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="OpenSubtitles2012/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="OpenSubtitles2012/ca-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="OpenSubtitles2012/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="OpenSubtitles2012/ca-it_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="OpenSubtitles2012/ca-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Korean (sample file)" href="OpenSubtitles2012/ca-ko_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="OpenSubtitles2012/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="OpenSubtitles2012/ca-lv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="OpenSubtitles2012/ca-mk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Malay (sample file)" href="OpenSubtitles2012/ca-ms_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Dutch (sample file)" href="OpenSubtitles2012/ca-nl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Polish (sample file)" href="OpenSubtitles2012/ca-pl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles2012/ca-pt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles2012/ca-pt_br_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="OpenSubtitles2012/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Russian (sample file)" href="OpenSubtitles2012/ca-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="OpenSubtitles2012/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="OpenSubtitles2012/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="OpenSubtitles2012/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="OpenSubtitles2012/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Swedish (sample file)" href="OpenSubtitles2012/ca-sv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Thai (sample file)" href="OpenSubtitles2012/ca-th_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="OpenSubtitles2012/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="OpenSubtitles2012/ca-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Vietnamese (sample file)" href="OpenSubtitles2012/ca-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="OpenSubtitles2012/ca-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="OpenSubtitles2012/ca-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ca.raw.tar.gz">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/cs.tar.gz">cs</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (7,816 aligned documents, 6.0M links, 86.5M tokens)" href="download.php?f=OpenSubtitles2012/ar-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Azerbaijani' (36 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-cs.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (14,632 aligned documents, 12.5M links, 170.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-cs.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (1,789 aligned documents, 1.6M links, 21.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (63 aligned documents, 67.1k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/ca-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="OpenSubtitles2012/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="OpenSubtitles2012/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="OpenSubtitles2012/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="OpenSubtitles2012/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="OpenSubtitles2012/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="OpenSubtitles2012/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Basque (sample file)" href="OpenSubtitles2012/cs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Persian (sample file)" href="OpenSubtitles2012/cs-fa_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="OpenSubtitles2012/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="OpenSubtitles2012/cs-fr_sample.html">view</a></td><th>cs</th>
<td></td><td><a rel="nofollow" title="Czech-Hebrew (sample file)" href="OpenSubtitles2012/cs-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Croatian (sample file)" href="OpenSubtitles2012/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="OpenSubtitles2012/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Indonesian (sample file)" href="OpenSubtitles2012/cs-id_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="OpenSubtitles2012/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="OpenSubtitles2012/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="OpenSubtitles2012/cs-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="OpenSubtitles2012/cs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="OpenSubtitles2012/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="OpenSubtitles2012/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="OpenSubtitles2012/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Malay (sample file)" href="OpenSubtitles2012/cs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="OpenSubtitles2012/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="OpenSubtitles2012/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles2012/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles2012/cs-pt_br_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Romanian (sample file)" href="OpenSubtitles2012/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="OpenSubtitles2012/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="OpenSubtitles2012/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="OpenSubtitles2012/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="OpenSubtitles2012/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="OpenSubtitles2012/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="OpenSubtitles2012/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="OpenSubtitles2012/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Thai (sample file)" href="OpenSubtitles2012/cs-th_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="OpenSubtitles2012/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="OpenSubtitles2012/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Urdu (sample file)" href="OpenSubtitles2012/cs-ur_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Vietnamese (sample file)" href="OpenSubtitles2012/cs-vi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles2012/cs-zh_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles2012/cs-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles2012/cs-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/da.tar.gz">da</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Arabic' (3,361 aligned documents, 3.0M links, 45.0M tokens)" href="download.php?f=OpenSubtitles2012/ar-da.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (5,185 aligned documents, 5.1M links, 71.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bosnian' (915 aligned documents, 0.9M links, 12.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (41 aligned documents, 44.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (5,843 aligned documents, 5.9M links, 81.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="OpenSubtitles2012/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="OpenSubtitles2012/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="OpenSubtitles2012/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="OpenSubtitles2012/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="OpenSubtitles2012/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Basque (sample file)" href="OpenSubtitles2012/da-eu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Persian (sample file)" href="OpenSubtitles2012/da-fa_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="OpenSubtitles2012/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="OpenSubtitles2012/da-fr_sample.html">view</a></td><th>da</th>
<td></td><td><a rel="nofollow" title="Danish-Hebrew (sample file)" href="OpenSubtitles2012/da-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Croatian (sample file)" href="OpenSubtitles2012/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="OpenSubtitles2012/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Indonesian (sample file)" href="OpenSubtitles2012/da-id_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="OpenSubtitles2012/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="OpenSubtitles2012/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="OpenSubtitles2012/da-ja_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Kazakh (sample file)" href="OpenSubtitles2012/da-kk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Korean (sample file)" href="OpenSubtitles2012/da-ko_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="OpenSubtitles2012/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="OpenSubtitles2012/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="OpenSubtitles2012/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Malay (sample file)" href="OpenSubtitles2012/da-ms_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="OpenSubtitles2012/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="OpenSubtitles2012/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles2012/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles2012/da-pt_br_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Romanian (sample file)" href="OpenSubtitles2012/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="OpenSubtitles2012/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="OpenSubtitles2012/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="OpenSubtitles2012/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="OpenSubtitles2012/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="OpenSubtitles2012/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="OpenSubtitles2012/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="OpenSubtitles2012/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Thai (sample file)" href="OpenSubtitles2012/da-th_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="OpenSubtitles2012/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="OpenSubtitles2012/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Urdu (sample file)" href="OpenSubtitles2012/da-ur_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Vietnamese (sample file)" href="OpenSubtitles2012/da-vi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles2012/da-zh_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles2012/da-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles2012/da-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/da.raw.tar.gz">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Afrikaans' (0.7k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2012/af-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (2,113 aligned documents, 1.6M links, 23.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Azerbaijani' (33 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (3,741 aligned documents, 3.1M links, 45.6M tokens)" href="download.php?f=OpenSubtitles2012/bg-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (493 aligned documents, 0.4M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2012/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (31 aligned documents, 33.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/ca-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (4,121 aligned documents, 3.7M links, 51.8M tokens)" href="download.php?f=OpenSubtitles2012/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (1,825 aligned documents, 1.8M links, 26.5M tokens)" href="download.php?f=OpenSubtitles2012/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="OpenSubtitles2012/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="OpenSubtitles2012/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="OpenSubtitles2012/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="OpenSubtitles2012/de-et_sample.html">view</a></td><td><a rel="nofollow" title="German-Basque (sample file)" href="OpenSubtitles2012/de-eu_sample.html">view</a></td><td><a rel="nofollow" title="German-Persian (sample file)" href="OpenSubtitles2012/de-fa_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="OpenSubtitles2012/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="OpenSubtitles2012/de-fr_sample.html">view</a></td><th>de</th>
<td></td><td><a rel="nofollow" title="German-Hebrew (sample file)" href="OpenSubtitles2012/de-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Croatian (sample file)" href="OpenSubtitles2012/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="OpenSubtitles2012/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Indonesian (sample file)" href="OpenSubtitles2012/de-id_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="OpenSubtitles2012/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="OpenSubtitles2012/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="OpenSubtitles2012/de-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Korean (sample file)" href="OpenSubtitles2012/de-ko_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="OpenSubtitles2012/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="OpenSubtitles2012/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="OpenSubtitles2012/de-mk_sample.html">view</a></td><td><a rel="nofollow" title="German-Malay (sample file)" href="OpenSubtitles2012/de-ms_sample.html">view</a></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="OpenSubtitles2012/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="OpenSubtitles2012/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles2012/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles2012/de-pt_br_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Romanian (sample file)" href="OpenSubtitles2012/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="OpenSubtitles2012/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="OpenSubtitles2012/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="OpenSubtitles2012/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="OpenSubtitles2012/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Albanian (sample file)" href="OpenSubtitles2012/de-sq_sample.html">view</a></td><td><a rel="nofollow" title="German-Serbian (sample file)" href="OpenSubtitles2012/de-sr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="OpenSubtitles2012/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Thai (sample file)" href="OpenSubtitles2012/de-th_sample.html">view</a></td><td><a rel="nofollow" title="German-Turkish (sample file)" href="OpenSubtitles2012/de-tr_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="OpenSubtitles2012/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Urdu (sample file)" href="OpenSubtitles2012/de-ur_sample.html">view</a></td><td><a rel="nofollow" title="German-Vietnamese (sample file)" href="OpenSubtitles2012/de-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="OpenSubtitles2012/de-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="OpenSubtitles2012/de-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Afrikaans' (0.7k links, 14.7k tokens)" href="download.php?f=OpenSubtitles2012/af-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (7,514 aligned documents, 5.6M links, 83.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-el.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (14,323 aligned documents, 11.3M links, 166.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (1,610 aligned documents, 1.4M links, 19.3M tokens)" href="download.php?f=OpenSubtitles2012/bs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (62 aligned documents, 61.2k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/ca-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (14,357 aligned documents, 12.2M links, 174.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (5,051 aligned documents, 4.8M links, 70.8M tokens)" href="download.php?f=OpenSubtitles2012/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (3,852 aligned documents, 3.2M links, 48.6M tokens)" href="download.php?f=OpenSubtitles2012/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="OpenSubtitles2012/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="OpenSubtitles2012/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="OpenSubtitles2012/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Basque (sample file)" href="OpenSubtitles2012/el-eu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Persian (sample file)" href="OpenSubtitles2012/el-fa_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="OpenSubtitles2012/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="OpenSubtitles2012/el-fr_sample.html">view</a></td><th>el</th>
<td></td><td><a rel="nofollow" title="Greek-Hebrew (sample file)" href="OpenSubtitles2012/el-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Croatian (sample file)" href="OpenSubtitles2012/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="OpenSubtitles2012/el-hu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Indonesian (sample file)" href="OpenSubtitles2012/el-id_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="OpenSubtitles2012/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="OpenSubtitles2012/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="OpenSubtitles2012/el-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="OpenSubtitles2012/el-ko_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="OpenSubtitles2012/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="OpenSubtitles2012/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="OpenSubtitles2012/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Malay (sample file)" href="OpenSubtitles2012/el-ms_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="OpenSubtitles2012/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="OpenSubtitles2012/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles2012/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles2012/el-pt_br_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Romanian (sample file)" href="OpenSubtitles2012/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="OpenSubtitles2012/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="OpenSubtitles2012/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="OpenSubtitles2012/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="OpenSubtitles2012/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="OpenSubtitles2012/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="OpenSubtitles2012/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="OpenSubtitles2012/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Thai (sample file)" href="OpenSubtitles2012/el-th_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="OpenSubtitles2012/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="OpenSubtitles2012/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Urdu (sample file)" href="OpenSubtitles2012/el-ur_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Vietnamese (sample file)" href="OpenSubtitles2012/el-vi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles2012/el-zh_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles2012/el-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles2012/el-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/el.raw.tar.gz">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (0.7k links, 14.4k tokens)" href="download.php?f=OpenSubtitles2012/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (10,765 aligned documents, 8.4M links, 132.0M tokens)" href="download.php?f=OpenSubtitles2012/ar-en.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (23,580 aligned documents, 20.5M links, 304.1M tokens)" href="download.php?f=OpenSubtitles2012/bg-en.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (2,292 aligned documents, 2.1M links, 30.3M tokens)" href="download.php?f=OpenSubtitles2012/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (98 aligned documents, 99.2k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2012/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (28,114 aligned documents, 26.0M links, 371.7M tokens)" href="download.php?f=OpenSubtitles2012/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (8,004 aligned documents, 8.1M links, 121.2M tokens)" href="download.php?f=OpenSubtitles2012/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (6,724 aligned documents, 6.1M links, 92.0M tokens)" href="download.php?f=OpenSubtitles2012/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (23,636 aligned documents, 20.4M links, 317.4M tokens)" href="download.php?f=OpenSubtitles2012/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="OpenSubtitles2012/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="OpenSubtitles2012/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="OpenSubtitles2012/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="OpenSubtitles2012/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="OpenSubtitles2012/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="OpenSubtitles2012/en-fr_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Galician (sample file)" href="OpenSubtitles2012/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="OpenSubtitles2012/en-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Croatian (sample file)" href="OpenSubtitles2012/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="OpenSubtitles2012/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="OpenSubtitles2012/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="OpenSubtitles2012/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="OpenSubtitles2012/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="OpenSubtitles2012/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="OpenSubtitles2012/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="OpenSubtitles2012/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="OpenSubtitles2012/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="OpenSubtitles2012/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="OpenSubtitles2012/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="OpenSubtitles2012/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="OpenSubtitles2012/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="OpenSubtitles2012/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles2012/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles2012/en-pt_br_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Romanian (sample file)" href="OpenSubtitles2012/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="OpenSubtitles2012/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="OpenSubtitles2012/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="OpenSubtitles2012/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="OpenSubtitles2012/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="OpenSubtitles2012/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="OpenSubtitles2012/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="OpenSubtitles2012/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="OpenSubtitles2012/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="OpenSubtitles2012/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="OpenSubtitles2012/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="OpenSubtitles2012/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="OpenSubtitles2012/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles2012/en-zh_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles2012/en-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles2012/en-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Afrikaans' (0.7k links, 13.8k tokens)" href="download.php?f=OpenSubtitles2012/af-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (9,040 aligned documents, 6.9M links, 104.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Azerbaijani' (32 links, 0.4k tokens)" href="download.php?f=OpenSubtitles2012/az-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Belarusian' (1.0k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/be-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (18,616 aligned documents, 15.3M links, 226.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (2,003 aligned documents, 1.8M links, 25.0M tokens)" href="download.php?f=OpenSubtitles2012/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (119 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (20,689 aligned documents, 18.0M links, 259.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (6,827 aligned documents, 6.5M links, 97.3M tokens)" href="download.php?f=OpenSubtitles2012/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (5,322 aligned documents, 4.6M links, 69.9M tokens)" href="download.php?f=OpenSubtitles2012/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (18,961 aligned documents, 15.6M links, 241.6M tokens)" href="download.php?f=OpenSubtitles2012/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (46,884 aligned documents, 43.1M links, 670.3M tokens)" href="download.php?f=OpenSubtitles2012/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="OpenSubtitles2012/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Basque (sample file)" href="OpenSubtitles2012/es-eu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Persian (sample file)" href="OpenSubtitles2012/es-fa_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="OpenSubtitles2012/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="OpenSubtitles2012/es-fr_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Galician (sample file)" href="OpenSubtitles2012/es-gl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hebrew (sample file)" href="OpenSubtitles2012/es-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="OpenSubtitles2012/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="OpenSubtitles2012/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Indonesian (sample file)" href="OpenSubtitles2012/es-id_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="OpenSubtitles2012/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="OpenSubtitles2012/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="OpenSubtitles2012/es-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="OpenSubtitles2012/es-ko_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="OpenSubtitles2012/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="OpenSubtitles2012/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Macedonian (sample file)" href="OpenSubtitles2012/es-mk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Malay (sample file)" href="OpenSubtitles2012/es-ms_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="OpenSubtitles2012/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="OpenSubtitles2012/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles2012/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles2012/es-pt_br_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="OpenSubtitles2012/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="OpenSubtitles2012/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="OpenSubtitles2012/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="OpenSubtitles2012/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="OpenSubtitles2012/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Albanian (sample file)" href="OpenSubtitles2012/es-sq_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Serbian (sample file)" href="OpenSubtitles2012/es-sr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="OpenSubtitles2012/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Thai (sample file)" href="OpenSubtitles2012/es-th_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Turkish (sample file)" href="OpenSubtitles2012/es-tr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="OpenSubtitles2012/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Urdu (sample file)" href="OpenSubtitles2012/es-ur_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Vietnamese (sample file)" href="OpenSubtitles2012/es-vi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles2012/es-zh_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles2012/es-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles2012/es-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/et.tar.gz">et</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (3,888 aligned documents, 3.2M links, 45.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-et.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (5,642 aligned documents, 5.2M links, 68.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (891 aligned documents, 0.9M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (37 aligned documents, 41.4k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/ca-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (5,640 aligned documents, 5.3M links, 69.6M tokens)" href="download.php?f=OpenSubtitles2012/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (3,183 aligned documents, 3.3M links, 45.4M tokens)" href="download.php?f=OpenSubtitles2012/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (1,587 aligned documents, 1.5M links, 20.7M tokens)" href="download.php?f=OpenSubtitles2012/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (5,111 aligned documents, 4.5M links, 62.8M tokens)" href="download.php?f=OpenSubtitles2012/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (7,185 aligned documents, 6.9M links, 96.7M tokens)" href="download.php?f=OpenSubtitles2012/en-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (6,225 aligned documents, 5.6M links, 79.6M tokens)" href="download.php?f=OpenSubtitles2012/es-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="OpenSubtitles2012/et-eu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Persian (sample file)" href="OpenSubtitles2012/et-fa_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="OpenSubtitles2012/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="OpenSubtitles2012/et-fr_sample.html">view</a></td><th>et</th>
<td></td><td><a rel="nofollow" title="Estonian-Hebrew (sample file)" href="OpenSubtitles2012/et-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="OpenSubtitles2012/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="OpenSubtitles2012/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Indonesian (sample file)" href="OpenSubtitles2012/et-id_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="OpenSubtitles2012/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="OpenSubtitles2012/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="OpenSubtitles2012/et-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="OpenSubtitles2012/et-ko_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="OpenSubtitles2012/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="OpenSubtitles2012/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="OpenSubtitles2012/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malay (sample file)" href="OpenSubtitles2012/et-ms_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="OpenSubtitles2012/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="OpenSubtitles2012/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles2012/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles2012/et-pt_br_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="OpenSubtitles2012/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="OpenSubtitles2012/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="OpenSubtitles2012/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="OpenSubtitles2012/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="OpenSubtitles2012/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="OpenSubtitles2012/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="OpenSubtitles2012/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="OpenSubtitles2012/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Thai (sample file)" href="OpenSubtitles2012/et-th_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="OpenSubtitles2012/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="OpenSubtitles2012/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Urdu (sample file)" href="OpenSubtitles2012/et-ur_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Vietnamese (sample file)" href="OpenSubtitles2012/et-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles2012/et-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles2012/et-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/et.raw.tar.gz">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/eu.tar.gz">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bulgarian' (0.7k links, 8.4k tokens)" href="download.php?f=OpenSubtitles2012/bg-eu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Czech' (0.7k links, 8.4k tokens)" href="download.php?f=OpenSubtitles2012/cs-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Danish' (0.7k links, 8.9k tokens)" href="download.php?f=OpenSubtitles2012/da-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-German' (0.7k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/de-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Greek' (0.6k links, 8.3k tokens)" href="download.php?f=OpenSubtitles2012/el-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (0.8k links, 9.9k tokens)" href="download.php?f=OpenSubtitles2012/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (0.7k links, 8.6k tokens)" href="download.php?f=OpenSubtitles2012/es-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (0.7k links, 8.5k tokens)" href="download.php?f=OpenSubtitles2012/et-eu.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Basque-Finnish (sample file)" href="OpenSubtitles2012/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-French (sample file)" href="OpenSubtitles2012/eu-fr_sample.html">view</a></td><th>eu</th>
<td></td><td><a rel="nofollow" title="Basque-Hebrew (sample file)" href="OpenSubtitles2012/eu-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Croatian (sample file)" href="OpenSubtitles2012/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hungarian (sample file)" href="OpenSubtitles2012/eu-hu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Dutch (sample file)" href="OpenSubtitles2012/eu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Polish (sample file)" href="OpenSubtitles2012/eu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="OpenSubtitles2012/eu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="OpenSubtitles2012/eu-pt_br_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Romanian (sample file)" href="OpenSubtitles2012/eu-ro_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="OpenSubtitles2012/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="OpenSubtitles2012/eu-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="OpenSubtitles2012/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Swedish (sample file)" href="OpenSubtitles2012/eu-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Turkish (sample file)" href="OpenSubtitles2012/eu-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Chinese (sample file)" href="OpenSubtitles2012/eu-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/eu.raw.tar.gz">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fa.tar.gz">fa</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Arabic' (10 aligned documents, 4.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ar-fa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bulgarian' (12 aligned documents, 4.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/bg-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bengali' (0.3k links, 13.3k tokens)" href="download.php?f=OpenSubtitles2012/bn-fa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Czech' (13 aligned documents, 3.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Danish' (5 aligned documents, 3.6k links, 86.2k tokens)" href="download.php?f=OpenSubtitles2012/da-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-German' (4 aligned documents, 2.3k links, 46.8k tokens)" href="download.php?f=OpenSubtitles2012/de-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Greek' (18 aligned documents, 5.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/el-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (37 aligned documents, 11.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/en-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Spanish' (19 aligned documents, 8.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/es-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Estonian' (2 aligned documents, 1.5k links, 40.0k tokens)" href="download.php?f=OpenSubtitles2012/et-fa.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Persian-Finnish (sample file)" href="OpenSubtitles2012/fa-fi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-French (sample file)" href="OpenSubtitles2012/fa-fr_sample.html">view</a></td><th>fa</th>
<td></td><td><a rel="nofollow" title="Persian-Hebrew (sample file)" href="OpenSubtitles2012/fa-he_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hindi (sample file)" href="OpenSubtitles2012/fa-hi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Croatian (sample file)" href="OpenSubtitles2012/fa-hr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hungarian (sample file)" href="OpenSubtitles2012/fa-hu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Persian-Italian (sample file)" href="OpenSubtitles2012/fa-it_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Lithuanian (sample file)" href="OpenSubtitles2012/fa-lt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Macedonian (sample file)" href="OpenSubtitles2012/fa-mk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Malay (sample file)" href="OpenSubtitles2012/fa-ms_sample.html">view</a></td><td><a rel="nofollow" title="Persian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/fa-nb_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Dutch (sample file)" href="OpenSubtitles2012/fa-nl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Polish (sample file)" href="OpenSubtitles2012/fa-pl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles2012/fa-pt_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles2012/fa-pt_br_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Romanian (sample file)" href="OpenSubtitles2012/fa-ro_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Russian (sample file)" href="OpenSubtitles2012/fa-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Slovak (sample file)" href="OpenSubtitles2012/fa-sk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Slovenian (sample file)" href="OpenSubtitles2012/fa-sl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Albanian (sample file)" href="OpenSubtitles2012/fa-sq_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Serbian (sample file)" href="OpenSubtitles2012/fa-sr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Swedish (sample file)" href="OpenSubtitles2012/fa-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Turkish (sample file)" href="OpenSubtitles2012/fa-tr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Ukrainian (sample file)" href="OpenSubtitles2012/fa-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Vietnamese (sample file)" href="OpenSubtitles2012/fa-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Chinese (sample file)" href="OpenSubtitles2012/fa-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Chinese (sample file)" href="OpenSubtitles2012/fa-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fa.raw.tar.gz">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fi.tar.gz">fi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (5,424 aligned documents, 4.4M links, 57.2M tokens)" href="download.php?f=OpenSubtitles2012/ar-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (9,320 aligned documents, 8.3M links, 104.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (1,254 aligned documents, 1.2M links, 14.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (54 aligned documents, 55.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (9,962 aligned documents, 9.2M links, 113.8M tokens)" href="download.php?f=OpenSubtitles2012/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (5,562 aligned documents, 5.4M links, 70.5M tokens)" href="download.php?f=OpenSubtitles2012/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (2,892 aligned documents, 2.6M links, 34.7M tokens)" href="download.php?f=OpenSubtitles2012/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (8,941 aligned documents, 7.7M links, 101.5M tokens)" href="download.php?f=OpenSubtitles2012/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (15,323 aligned documents, 14.3M links, 193.8M tokens)" href="download.php?f=OpenSubtitles2012/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (11,574 aligned documents, 10.3M links, 139.1M tokens)" href="download.php?f=OpenSubtitles2012/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (4,715 aligned documents, 4.5M links, 54.8M tokens)" href="download.php?f=OpenSubtitles2012/et-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' (0.7k links, 7.9k tokens)" href="download.php?f=OpenSubtitles2012/eu-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Persian' (6 aligned documents, 3.6k links, 78.4k tokens)" href="download.php?f=OpenSubtitles2012/fa-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="OpenSubtitles2012/fi-fr_sample.html">view</a></td><th>fi</th>
<td></td><td><a rel="nofollow" title="Finnish-Hebrew (sample file)" href="OpenSubtitles2012/fi-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="OpenSubtitles2012/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="OpenSubtitles2012/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Indonesian (sample file)" href="OpenSubtitles2012/fi-id_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="OpenSubtitles2012/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="OpenSubtitles2012/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="OpenSubtitles2012/fi-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="OpenSubtitles2012/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="OpenSubtitles2012/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="OpenSubtitles2012/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="OpenSubtitles2012/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malay (sample file)" href="OpenSubtitles2012/fi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="OpenSubtitles2012/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="OpenSubtitles2012/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles2012/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles2012/fi-pt_br_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="OpenSubtitles2012/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="OpenSubtitles2012/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="OpenSubtitles2012/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="OpenSubtitles2012/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="OpenSubtitles2012/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="OpenSubtitles2012/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="OpenSubtitles2012/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="OpenSubtitles2012/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Thai (sample file)" href="OpenSubtitles2012/fi-th_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="OpenSubtitles2012/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="OpenSubtitles2012/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Urdu (sample file)" href="OpenSubtitles2012/fi-ur_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Vietnamese (sample file)" href="OpenSubtitles2012/fi-vi_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles2012/fi-zh_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles2012/fi-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles2012/fi-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fi.raw.tar.gz">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Afrikaans' (0.7k links, 15.3k tokens)" href="download.php?f=OpenSubtitles2012/af-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (6,454 aligned documents, 4.9M links, 75.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Azerbaijani' (34 links, 0.4k tokens)" href="download.php?f=OpenSubtitles2012/az-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (12,760 aligned documents, 10.5M links, 155.6M tokens)" href="download.php?f=OpenSubtitles2012/bg-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (1,387 aligned documents, 1.2M links, 17.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (73 aligned documents, 71.7k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2012/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (13,829 aligned documents, 12.2M links, 174.9M tokens)" href="download.php?f=OpenSubtitles2012/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (4,999 aligned documents, 5.0M links, 73.5M tokens)" href="download.php?f=OpenSubtitles2012/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (4,680 aligned documents, 4.1M links, 62.1M tokens)" href="download.php?f=OpenSubtitles2012/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (13,751 aligned documents, 11.2M links, 174.8M tokens)" href="download.php?f=OpenSubtitles2012/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (27,904 aligned documents, 25.4M links, 392.5M tokens)" href="download.php?f=OpenSubtitles2012/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (21,027 aligned documents, 18.3M links, 283.5M tokens)" href="download.php?f=OpenSubtitles2012/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (4,645 aligned documents, 4.3M links, 60.8M tokens)" href="download.php?f=OpenSubtitles2012/et-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Basque' (0.7k links, 8.0k tokens)" href="download.php?f=OpenSubtitles2012/eu-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Persian' (8 aligned documents, 3.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (8,440 aligned documents, 7.6M links, 102.2M tokens)" href="download.php?f=OpenSubtitles2012/fi-fr.xml.gz">ces</a></td>
<th></th>
<th>fr</th>
<td></td><td><a rel="nofollow" title="French-Hebrew (sample file)" href="OpenSubtitles2012/fr-he_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Croatian (sample file)" href="OpenSubtitles2012/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="OpenSubtitles2012/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Indonesian (sample file)" href="OpenSubtitles2012/fr-id_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="OpenSubtitles2012/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="OpenSubtitles2012/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="OpenSubtitles2012/fr-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Korean (sample file)" href="OpenSubtitles2012/fr-ko_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="OpenSubtitles2012/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="OpenSubtitles2012/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="OpenSubtitles2012/fr-mk_sample.html">view</a></td><td><a rel="nofollow" title="French-Malay (sample file)" href="OpenSubtitles2012/fr-ms_sample.html">view</a></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="OpenSubtitles2012/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="OpenSubtitles2012/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles2012/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles2012/fr-pt_br_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Romanian (sample file)" href="OpenSubtitles2012/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="OpenSubtitles2012/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="OpenSubtitles2012/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="OpenSubtitles2012/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="OpenSubtitles2012/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="OpenSubtitles2012/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Serbian (sample file)" href="OpenSubtitles2012/fr-sr_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="OpenSubtitles2012/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Thai (sample file)" href="OpenSubtitles2012/fr-th_sample.html">view</a></td><td><a rel="nofollow" title="French-Turkish (sample file)" href="OpenSubtitles2012/fr-tr_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="OpenSubtitles2012/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Urdu (sample file)" href="OpenSubtitles2012/fr-ur_sample.html">view</a></td><td><a rel="nofollow" title="French-Vietnamese (sample file)" href="OpenSubtitles2012/fr-vi_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles2012/fr-zh_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles2012/fr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles2012/fr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/fr.raw.tar.gz">fr</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bn</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th></th>
<th>gl</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th></th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th>zh_cn</th>
<th>zh_tw</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/gl.tar.gz">gl</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (0.1k links, 1.8k tokens)" href="download.php?f=OpenSubtitles2012/en-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Spanish' (0.1k links, 1.7k tokens)" href="download.php?f=OpenSubtitles2012/es-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>gl</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Polish (sample file)" href="OpenSubtitles2012/gl-pl_sample.html">view</a></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/gl.raw.tar.gz">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/he.tar.gz">he</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Afrikaans' (0.6k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/af-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Arabic' (7,155 aligned documents, 5.4M links, 75.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Azerbaijani' (27 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bulgarian' (12,566 aligned documents, 9.0M links, 137.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bosnian' (1,485 aligned documents, 1.2M links, 17.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Catalan' (51 aligned documents, 47.4k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Czech' (12,520 aligned documents, 9.2M links, 140.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Danish' (4,796 aligned documents, 4.2M links, 65.2M tokens)" href="download.php?f=OpenSubtitles2012/da-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-German' (3,255 aligned documents, 2.4M links, 37.6M tokens)" href="download.php?f=OpenSubtitles2012/de-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Greek' (11,880 aligned documents, 8.5M links, 134.6M tokens)" href="download.php?f=OpenSubtitles2012/el-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (19,484 aligned documents, 14.5M links, 240.8M tokens)" href="download.php?f=OpenSubtitles2012/en-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Spanish' (15,417 aligned documents, 11.2M links, 180.8M tokens)" href="download.php?f=OpenSubtitles2012/es-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Estonian' (5,079 aligned documents, 4.1M links, 61.0M tokens)" href="download.php?f=OpenSubtitles2012/et-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Basque' (0.6k links, 7.9k tokens)" href="download.php?f=OpenSubtitles2012/eu-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Persian' (7 aligned documents, 4.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Finnish' (7,965 aligned documents, 6.2M links, 86.8M tokens)" href="download.php?f=OpenSubtitles2012/fi-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-French' (11,358 aligned documents, 8.3M links, 134.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-he.xml.gz">ces</a></td>
<th>he</th>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Hebrew-Croatian (sample file)" href="OpenSubtitles2012/he-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Hungarian (sample file)" href="OpenSubtitles2012/he-hu_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Indonesian (sample file)" href="OpenSubtitles2012/he-id_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Icelandic (sample file)" href="OpenSubtitles2012/he-is_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Italian (sample file)" href="OpenSubtitles2012/he-it_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Japanese (sample file)" href="OpenSubtitles2012/he-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Korean (sample file)" href="OpenSubtitles2012/he-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Lithuanian (sample file)" href="OpenSubtitles2012/he-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Latvian (sample file)" href="OpenSubtitles2012/he-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Macedonian (sample file)" href="OpenSubtitles2012/he-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malay (sample file)" href="OpenSubtitles2012/he-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/he-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Dutch (sample file)" href="OpenSubtitles2012/he-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Polish (sample file)" href="OpenSubtitles2012/he-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles2012/he-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles2012/he-pt_br_sample.html">view</a></td><th>he</th>
<td><a rel="nofollow" title="Hebrew-Romanian (sample file)" href="OpenSubtitles2012/he-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Russian (sample file)" href="OpenSubtitles2012/he-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Sinhala (sample file)" href="OpenSubtitles2012/he-si_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovak (sample file)" href="OpenSubtitles2012/he-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovenian (sample file)" href="OpenSubtitles2012/he-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Albanian (sample file)" href="OpenSubtitles2012/he-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Serbian (sample file)" href="OpenSubtitles2012/he-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Swedish (sample file)" href="OpenSubtitles2012/he-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Thai (sample file)" href="OpenSubtitles2012/he-th_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Turkish (sample file)" href="OpenSubtitles2012/he-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Ukrainian (sample file)" href="OpenSubtitles2012/he-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Urdu (sample file)" href="OpenSubtitles2012/he-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Vietnamese (sample file)" href="OpenSubtitles2012/he-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles2012/he-zh_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles2012/he-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles2012/he-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/he.raw.tar.gz">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hi.tar.gz">hi</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Persian' (0.3k links, 20.2k tokens)" href="download.php?f=OpenSubtitles2012/fa-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>hi</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hi.raw.tar.gz">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hr.tar.gz">hr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (6,355 aligned documents, 4.9M links, 69.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-hr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (11,542 aligned documents, 9.8M links, 132.9M tokens)" href="download.php?f=OpenSubtitles2012/bg-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (1,059 aligned documents, 1.0M links, 13.0M tokens)" href="download.php?f=OpenSubtitles2012/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (53 aligned documents, 56.4k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (11,803 aligned documents, 10.6M links, 139.4M tokens)" href="download.php?f=OpenSubtitles2012/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (4,565 aligned documents, 4.6M links, 63.2M tokens)" href="download.php?f=OpenSubtitles2012/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (3,161 aligned documents, 2.8M links, 39.4M tokens)" href="download.php?f=OpenSubtitles2012/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (11,148 aligned documents, 9.2M links, 131.3M tokens)" href="download.php?f=OpenSubtitles2012/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (18,002 aligned documents, 16.4M links, 234.4M tokens)" href="download.php?f=OpenSubtitles2012/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (14,472 aligned documents, 12.5M links, 179.0M tokens)" href="download.php?f=OpenSubtitles2012/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (4,606 aligned documents, 4.4M links, 57.5M tokens)" href="download.php?f=OpenSubtitles2012/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' (0.7k links, 8.2k tokens)" href="download.php?f=OpenSubtitles2012/eu-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Persian' (10 aligned documents, 4.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (7,569 aligned documents, 7.0M links, 86.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (10,067 aligned documents, 8.8M links, 126.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-hr.xml.gz">ces</a></td>
<th>hr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hebrew' (9,464 aligned documents, 7.0M links, 105.1M tokens)" href="download.php?f=OpenSubtitles2012/he-hr.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="OpenSubtitles2012/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Indonesian (sample file)" href="OpenSubtitles2012/hr-id_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="OpenSubtitles2012/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="OpenSubtitles2012/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="OpenSubtitles2012/hr-ja_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Kazakh (sample file)" href="OpenSubtitles2012/hr-kk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="OpenSubtitles2012/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="OpenSubtitles2012/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="OpenSubtitles2012/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="OpenSubtitles2012/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malay (sample file)" href="OpenSubtitles2012/hr-ms_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="OpenSubtitles2012/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="OpenSubtitles2012/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles2012/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles2012/hr-pt_br_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="OpenSubtitles2012/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="OpenSubtitles2012/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="OpenSubtitles2012/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="OpenSubtitles2012/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="OpenSubtitles2012/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="OpenSubtitles2012/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="OpenSubtitles2012/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="OpenSubtitles2012/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Thai (sample file)" href="OpenSubtitles2012/hr-th_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="OpenSubtitles2012/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="OpenSubtitles2012/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Urdu (sample file)" href="OpenSubtitles2012/hr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Vietnamese (sample file)" href="OpenSubtitles2012/hr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles2012/hr-zh_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles2012/hr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles2012/hr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hr.raw.tar.gz">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hu.tar.gz">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Afrikaans' (0.7k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2012/af-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Arabic' (7,107 aligned documents, 5.5M links, 77.2M tokens)" href="download.php?f=OpenSubtitles2012/ar-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Azerbaijani' (31 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (13,534 aligned documents, 11.4M links, 152.2M tokens)" href="download.php?f=OpenSubtitles2012/bg-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (1,496 aligned documents, 1.3M links, 17.4M tokens)" href="download.php?f=OpenSubtitles2012/bs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (57 aligned documents, 61.3k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/ca-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (14,420 aligned documents, 12.8M links, 166.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (4,829 aligned documents, 5.0M links, 66.7M tokens)" href="download.php?f=OpenSubtitles2012/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (3,959 aligned documents, 3.4M links, 47.0M tokens)" href="download.php?f=OpenSubtitles2012/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (13,575 aligned documents, 11.3M links, 157.6M tokens)" href="download.php?f=OpenSubtitles2012/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (25,506 aligned documents, 23.0M links, 325.3M tokens)" href="download.php?f=OpenSubtitles2012/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (18,488 aligned documents, 16.0M links, 225.4M tokens)" href="download.php?f=OpenSubtitles2012/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (4,980 aligned documents, 4.8M links, 60.4M tokens)" href="download.php?f=OpenSubtitles2012/et-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Basque' (0.7k links, 8.4k tokens)" href="download.php?f=OpenSubtitles2012/eu-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Persian' (7 aligned documents, 2.6k links, 75.7k tokens)" href="download.php?f=OpenSubtitles2012/fa-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (8,616 aligned documents, 7.9M links, 95.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (13,509 aligned documents, 11.7M links, 164.8M tokens)" href="download.php?f=OpenSubtitles2012/fr-hu.xml.gz">ces</a></td>
<th>hu</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Hebrew' (11,542 aligned documents, 8.6M links, 126.2M tokens)" href="download.php?f=OpenSubtitles2012/he-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (10,279 aligned documents, 9.1M links, 118.1M tokens)" href="download.php?f=OpenSubtitles2012/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Indonesian (sample file)" href="OpenSubtitles2012/hu-id_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="OpenSubtitles2012/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="OpenSubtitles2012/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="OpenSubtitles2012/hu-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="OpenSubtitles2012/hu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="OpenSubtitles2012/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="OpenSubtitles2012/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="OpenSubtitles2012/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Malay (sample file)" href="OpenSubtitles2012/hu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="OpenSubtitles2012/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="OpenSubtitles2012/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles2012/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles2012/hu-pt_br_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="OpenSubtitles2012/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="OpenSubtitles2012/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="OpenSubtitles2012/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="OpenSubtitles2012/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="OpenSubtitles2012/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="OpenSubtitles2012/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="OpenSubtitles2012/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="OpenSubtitles2012/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Thai (sample file)" href="OpenSubtitles2012/hu-th_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="OpenSubtitles2012/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="OpenSubtitles2012/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Urdu (sample file)" href="OpenSubtitles2012/hu-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Vietnamese (sample file)" href="OpenSubtitles2012/hu-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles2012/hu-zh_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles2012/hu-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles2012/hu-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/hu.raw.tar.gz">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/id.tar.gz">id</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Arabic' (5 aligned documents, 3.1k links, 41.6k tokens)" href="download.php?f=OpenSubtitles2012/ar-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bulgarian' (7 aligned documents, 4.9k links, 99.0k tokens)" href="download.php?f=OpenSubtitles2012/bg-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bosnian' (2 aligned documents, 1.8k links, 64.9k tokens)" href="download.php?f=OpenSubtitles2012/bs-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Czech' (8 aligned documents, 6.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Danish' (6 aligned documents, 4.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/da-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-German' (4 aligned documents, 4.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/de-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Greek' (7 aligned documents, 5.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/el-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-English' (26 aligned documents, 17.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/en-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Spanish' (9 aligned documents, 5.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/es-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Estonian' (4 aligned documents, 3.8k links, 69.8k tokens)" href="download.php?f=OpenSubtitles2012/et-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Finnish' (7 aligned documents, 5.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fi-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-French' (8 aligned documents, 5.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fr-id.xml.gz">ces</a></td>
<th>id</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hebrew' (3 aligned documents, 2.1k links, 54.8k tokens)" href="download.php?f=OpenSubtitles2012/he-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Croatian' (5 aligned documents, 4.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/hr-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hungarian' (7 aligned documents, 5.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/hu-id.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Indonesian-Italian (sample file)" href="OpenSubtitles2012/id-it_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Lithuanian (sample file)" href="OpenSubtitles2012/id-lt_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Latvian (sample file)" href="OpenSubtitles2012/id-lv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Malay (sample file)" href="OpenSubtitles2012/id-ms_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/id-nb_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Dutch (sample file)" href="OpenSubtitles2012/id-nl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Polish (sample file)" href="OpenSubtitles2012/id-pl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles2012/id-pt_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles2012/id-pt_br_sample.html">view</a></td><th>id</th>
<td><a rel="nofollow" title="Indonesian-Romanian (sample file)" href="OpenSubtitles2012/id-ro_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Russian (sample file)" href="OpenSubtitles2012/id-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Slovak (sample file)" href="OpenSubtitles2012/id-sk_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Slovenian (sample file)" href="OpenSubtitles2012/id-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Serbian (sample file)" href="OpenSubtitles2012/id-sr_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Swedish (sample file)" href="OpenSubtitles2012/id-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Turkish (sample file)" href="OpenSubtitles2012/id-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/id.raw.tar.gz">id</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/is.tar.gz">is</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Arabic' (238 aligned documents, 0.3M links, 3.7M tokens)" href="download.php?f=OpenSubtitles2012/ar-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (371 aligned documents, 0.5M links, 6.2M tokens)" href="download.php?f=OpenSubtitles2012/bg-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (57 aligned documents, 72.6k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/bs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (8 aligned documents, 9.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (439 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (432 aligned documents, 0.5M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2012/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (291 aligned documents, 0.3M links, 4.6M tokens)" href="download.php?f=OpenSubtitles2012/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (367 aligned documents, 0.4M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2012/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (536 aligned documents, 0.7M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2012/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (461 aligned documents, 0.6M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2012/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (260 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2012/et-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (496 aligned documents, 0.6M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (408 aligned documents, 0.5M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-is.xml.gz">ces</a></td>
<th>is</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hebrew' (311 aligned documents, 0.3M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2012/he-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (379 aligned documents, 0.5M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2012/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (405 aligned documents, 0.5M links, 6.5M tokens)" href="download.php?f=OpenSubtitles2012/hu-is.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="OpenSubtitles2012/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Japanese (sample file)" href="OpenSubtitles2012/is-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="OpenSubtitles2012/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="OpenSubtitles2012/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="OpenSubtitles2012/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Malay (sample file)" href="OpenSubtitles2012/is-ms_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="OpenSubtitles2012/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="OpenSubtitles2012/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles2012/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles2012/is-pt_br_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="OpenSubtitles2012/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="OpenSubtitles2012/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="OpenSubtitles2012/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="OpenSubtitles2012/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="OpenSubtitles2012/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="OpenSubtitles2012/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="OpenSubtitles2012/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="OpenSubtitles2012/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Thai (sample file)" href="OpenSubtitles2012/is-th_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="OpenSubtitles2012/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="OpenSubtitles2012/is-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Vietnamese (sample file)" href="OpenSubtitles2012/is-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="OpenSubtitles2012/is-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="OpenSubtitles2012/is-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/is.raw.tar.gz">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Afrikaans' (0.6k links, 13.8k tokens)" href="download.php?f=OpenSubtitles2012/af-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (4,221 aligned documents, 3.2M links, 49.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (7,996 aligned documents, 6.5M links, 95.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (887 aligned documents, 0.8M links, 11.3M tokens)" href="download.php?f=OpenSubtitles2012/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (48 aligned documents, 48.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (7,631 aligned documents, 6.6M links, 94.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (2,648 aligned documents, 2.7M links, 39.8M tokens)" href="download.php?f=OpenSubtitles2012/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (3,313 aligned documents, 2.9M links, 43.3M tokens)" href="download.php?f=OpenSubtitles2012/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (8,158 aligned documents, 6.6M links, 101.2M tokens)" href="download.php?f=OpenSubtitles2012/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (13,972 aligned documents, 12.0M links, 184.2M tokens)" href="download.php?f=OpenSubtitles2012/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (10,916 aligned documents, 9.0M links, 139.5M tokens)" href="download.php?f=OpenSubtitles2012/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (2,847 aligned documents, 2.7M links, 37.8M tokens)" href="download.php?f=OpenSubtitles2012/et-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Persian' (9 aligned documents, 4.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (4,778 aligned documents, 4.4M links, 57.8M tokens)" href="download.php?f=OpenSubtitles2012/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (9,074 aligned documents, 7.5M links, 115.8M tokens)" href="download.php?f=OpenSubtitles2012/fr-it.xml.gz">ces</a></td>
<th>it</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hebrew' (6,432 aligned documents, 4.7M links, 75.7M tokens)" href="download.php?f=OpenSubtitles2012/he-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (5,854 aligned documents, 5.2M links, 73.1M tokens)" href="download.php?f=OpenSubtitles2012/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (8,306 aligned documents, 6.9M links, 96.9M tokens)" href="download.php?f=OpenSubtitles2012/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Indonesian' (6 aligned documents, 4.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/id-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (300 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2012/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Japanese (sample file)" href="OpenSubtitles2012/it-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="OpenSubtitles2012/it-ko_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="OpenSubtitles2012/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="OpenSubtitles2012/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="OpenSubtitles2012/it-mk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Malay (sample file)" href="OpenSubtitles2012/it-ms_sample.html">view</a></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="OpenSubtitles2012/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="OpenSubtitles2012/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles2012/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles2012/it-pt_br_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Romanian (sample file)" href="OpenSubtitles2012/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="OpenSubtitles2012/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="OpenSubtitles2012/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="OpenSubtitles2012/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="OpenSubtitles2012/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="OpenSubtitles2012/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Serbian (sample file)" href="OpenSubtitles2012/it-sr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="OpenSubtitles2012/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Thai (sample file)" href="OpenSubtitles2012/it-th_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Turkish (sample file)" href="OpenSubtitles2012/it-tr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="OpenSubtitles2012/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Urdu (sample file)" href="OpenSubtitles2012/it-ur_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Vietnamese (sample file)" href="OpenSubtitles2012/it-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="OpenSubtitles2012/it-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="OpenSubtitles2012/it-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ja.tar.gz">ja</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (154 aligned documents, 0.1M links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (203 aligned documents, 0.2M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/bg-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bosnian' (37 aligned documents, 29.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (6 aligned documents, 5.9k links, 54.6k tokens)" href="download.php?f=OpenSubtitles2012/ca-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (203 aligned documents, 0.2M links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (139 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (58 aligned documents, 41.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (211 aligned documents, 0.2M links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (274 aligned documents, 0.2M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2012/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (220 aligned documents, 0.2M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2012/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (143 aligned documents, 0.1M links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/et-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (160 aligned documents, 0.1M links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (191 aligned documents, 0.2M links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-ja.xml.gz">ces</a></td>
<th>ja</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hebrew' (189 aligned documents, 0.2M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/he-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (162 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (202 aligned documents, 0.2M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/hu-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Icelandic' (3 aligned documents, 3.9k links, 30.7k tokens)" href="download.php?f=OpenSubtitles2012/is-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (112 aligned documents, 91.9k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/it-ja.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Japanese-Korean (sample file)" href="OpenSubtitles2012/ja-ko_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="OpenSubtitles2012/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="OpenSubtitles2012/ja-lv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Macedonian (sample file)" href="OpenSubtitles2012/ja-mk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Malay (sample file)" href="OpenSubtitles2012/ja-ms_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="OpenSubtitles2012/ja-nl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="OpenSubtitles2012/ja-pl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles2012/ja-pt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles2012/ja-pt_br_sample.html">view</a></td><th>ja</th>
<td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="OpenSubtitles2012/ja-ro_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="OpenSubtitles2012/ja-ru_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Sinhala (sample file)" href="OpenSubtitles2012/ja-si_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="OpenSubtitles2012/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="OpenSubtitles2012/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="OpenSubtitles2012/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="OpenSubtitles2012/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="OpenSubtitles2012/ja-sv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Thai (sample file)" href="OpenSubtitles2012/ja-th_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="OpenSubtitles2012/ja-tr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ukrainian (sample file)" href="OpenSubtitles2012/ja-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Vietnamese (sample file)" href="OpenSubtitles2012/ja-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="OpenSubtitles2012/ja-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="OpenSubtitles2012/ja-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ja.raw.tar.gz">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/kk.tar.gz">kk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Bulgarian' (1.1k links, 12.8k tokens)" href="download.php?f=OpenSubtitles2012/bg-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Danish' (1.1k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2012/da-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (1.2k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2012/en-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>kk</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Croatian' (1.1k links, 13.2k tokens)" href="download.php?f=OpenSubtitles2012/hr-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Dutch (sample file)" href="OpenSubtitles2012/kk-nl_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Polish (sample file)" href="OpenSubtitles2012/kk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Portuguese (sample file)" href="OpenSubtitles2012/kk-pt_sample.html">view</a></td><td></td><th>kk</th>
<td><a rel="nofollow" title="Kazakh-Romanian (sample file)" href="OpenSubtitles2012/kk-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Serbian (sample file)" href="OpenSubtitles2012/kk-sr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/kk.raw.tar.gz">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ko.tar.gz">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Afrikaans' (0.6k links, 12.9k tokens)" href="download.php?f=OpenSubtitles2012/af-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Arabic' (10 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ar-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (10 aligned documents, 12.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/bg-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bosnian' (4 aligned documents, 3.9k links, 51.7k tokens)" href="download.php?f=OpenSubtitles2012/bs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Catalan' (2 aligned documents, 1.8k links, 32.6k tokens)" href="download.php?f=OpenSubtitles2012/ca-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (13 aligned documents, 14.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Danish' (7 aligned documents, 8.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/da-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (5 aligned documents, 4.5k links, 78.5k tokens)" href="download.php?f=OpenSubtitles2012/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (13 aligned documents, 12.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (17 aligned documents, 16.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/en-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (14 aligned documents, 13.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/es-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (7 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/et-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (9 aligned documents, 10.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (14 aligned documents, 13.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/fr-ko.xml.gz">ces</a></td>
<th>ko</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hebrew' (13 aligned documents, 14.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/he-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (12 aligned documents, 14.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (12 aligned documents, 12.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/hu-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (9 aligned documents, 10.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Japanese' (2 aligned documents, 2.6k links, 20.3k tokens)" href="download.php?f=OpenSubtitles2012/ja-ko.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Korean-Macedonian (sample file)" href="OpenSubtitles2012/ko-mk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Malay (sample file)" href="OpenSubtitles2012/ko-ms_sample.html">view</a></td><td><a rel="nofollow" title="Korean-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/ko-nb_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="OpenSubtitles2012/ko-nl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="OpenSubtitles2012/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles2012/ko-pt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles2012/ko-pt_br_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Romanian (sample file)" href="OpenSubtitles2012/ko-ro_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Russian (sample file)" href="OpenSubtitles2012/ko-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="OpenSubtitles2012/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="OpenSubtitles2012/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Albanian (sample file)" href="OpenSubtitles2012/ko-sq_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Serbian (sample file)" href="OpenSubtitles2012/ko-sr_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swedish (sample file)" href="OpenSubtitles2012/ko-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Turkish (sample file)" href="OpenSubtitles2012/ko-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Korean-Vietnamese (sample file)" href="OpenSubtitles2012/ko-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="OpenSubtitles2012/ko-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="OpenSubtitles2012/ko-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ko.raw.tar.gz">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/lt.tar.gz">lt</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (314 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (397 aligned documents, 0.4M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2012/bg-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (94 aligned documents, 93.3k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (7 aligned documents, 7.2k links, 97.6k tokens)" href="download.php?f=OpenSubtitles2012/ca-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (436 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2012/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (325 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2012/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (160 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2012/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (355 aligned documents, 0.4M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2012/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (480 aligned documents, 0.5M links, 6.8M tokens)" href="download.php?f=OpenSubtitles2012/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (446 aligned documents, 0.4M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2012/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (314 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2012/et-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Persian' (2 aligned documents, 1.3k links, 43.5k tokens)" href="download.php?f=OpenSubtitles2012/fa-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (358 aligned documents, 0.4M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (387 aligned documents, 0.4M links, 5.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-lt.xml.gz">ces</a></td>
<th>lt</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hebrew' (387 aligned documents, 0.3M links, 4.9M tokens)" href="download.php?f=OpenSubtitles2012/he-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (355 aligned documents, 0.4M links, 4.6M tokens)" href="download.php?f=OpenSubtitles2012/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (376 aligned documents, 0.4M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2012/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Indonesian' (1.0k links, 29.6k tokens)" href="download.php?f=OpenSubtitles2012/id-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (34 aligned documents, 43.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (224 aligned documents, 0.3M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2012/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (20 aligned documents, 16.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ja-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="OpenSubtitles2012/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="OpenSubtitles2012/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malay (sample file)" href="OpenSubtitles2012/lt-ms_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="OpenSubtitles2012/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="OpenSubtitles2012/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles2012/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles2012/lt-pt_br_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="OpenSubtitles2012/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="OpenSubtitles2012/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="OpenSubtitles2012/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="OpenSubtitles2012/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="OpenSubtitles2012/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="OpenSubtitles2012/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="OpenSubtitles2012/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="OpenSubtitles2012/lt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Thai (sample file)" href="OpenSubtitles2012/lt-th_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="OpenSubtitles2012/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="OpenSubtitles2012/lt-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Vietnamese (sample file)" href="OpenSubtitles2012/lt-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="OpenSubtitles2012/lt-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="OpenSubtitles2012/lt-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/lt.raw.tar.gz">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/lv.tar.gz">lv</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (97 aligned documents, 99.4k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/ar-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (110 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/bg-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (13 aligned documents, 14.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (3 aligned documents, 2.7k links, 32.7k tokens)" href="download.php?f=OpenSubtitles2012/ca-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (124 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (94 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2012/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (57 aligned documents, 67.6k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (105 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (154 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2012/en-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (125 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2012/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (107 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/et-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (102 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (133 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2012/fr-lv.xml.gz">ces</a></td>
<th>lv</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hebrew' (110 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/he-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (112 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (113 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Indonesian' (1.1k links, 34.2k tokens)" href="download.php?f=OpenSubtitles2012/id-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (11 aligned documents, 13.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (78 aligned documents, 91.4k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (6 aligned documents, 7.2k links, 44.8k tokens)" href="download.php?f=OpenSubtitles2012/ja-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (41 aligned documents, 43.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="OpenSubtitles2012/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Malay (sample file)" href="OpenSubtitles2012/lv-ms_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="OpenSubtitles2012/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="OpenSubtitles2012/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles2012/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles2012/lv-pt_br_sample.html">view</a></td><th>lv</th>
<td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="OpenSubtitles2012/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="OpenSubtitles2012/lv-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="OpenSubtitles2012/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="OpenSubtitles2012/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="OpenSubtitles2012/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="OpenSubtitles2012/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="OpenSubtitles2012/lv-sv_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Thai (sample file)" href="OpenSubtitles2012/lv-th_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="OpenSubtitles2012/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="OpenSubtitles2012/lv-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Vietnamese (sample file)" href="OpenSubtitles2012/lv-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="OpenSubtitles2012/lv-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="OpenSubtitles2012/lv-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/lv.raw.tar.gz">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/mk.tar.gz">mk</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Arabic' (706 aligned documents, 0.7M links, 9.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (871 aligned documents, 0.9M links, 12.4M tokens)" href="download.php?f=OpenSubtitles2012/bg-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (229 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (10 aligned documents, 10.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ca-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (854 aligned documents, 0.9M links, 12.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (650 aligned documents, 0.7M links, 10.2M tokens)" href="download.php?f=OpenSubtitles2012/da-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-German' (257 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2012/de-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (809 aligned documents, 0.8M links, 11.5M tokens)" href="download.php?f=OpenSubtitles2012/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (918 aligned documents, 1.0M links, 14.7M tokens)" href="download.php?f=OpenSubtitles2012/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Spanish' (918 aligned documents, 1.0M links, 13.7M tokens)" href="download.php?f=OpenSubtitles2012/es-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (645 aligned documents, 0.7M links, 9.5M tokens)" href="download.php?f=OpenSubtitles2012/et-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Persian' (0.8k links, 24.4k tokens)" href="download.php?f=OpenSubtitles2012/fa-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (768 aligned documents, 0.8M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-French' (694 aligned documents, 0.7M links, 10.5M tokens)" href="download.php?f=OpenSubtitles2012/fr-mk.xml.gz">ces</a></td>
<th>mk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hebrew' (794 aligned documents, 0.7M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2012/he-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (796 aligned documents, 0.9M links, 11.3M tokens)" href="download.php?f=OpenSubtitles2012/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (734 aligned documents, 0.8M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2012/hu-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (64 aligned documents, 78.9k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Italian' (471 aligned documents, 0.5M links, 7.1M tokens)" href="download.php?f=OpenSubtitles2012/it-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Japanese' (46 aligned documents, 41.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ja-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Korean' (1.2k links, 13.3k tokens)" href="download.php?f=OpenSubtitles2012/ko-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (99 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (38 aligned documents, 45.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Malay (sample file)" href="OpenSubtitles2012/mk-ms_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="OpenSubtitles2012/mk-nl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="OpenSubtitles2012/mk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles2012/mk-pt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles2012/mk-pt_br_sample.html">view</a></td><th>mk</th>
<td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="OpenSubtitles2012/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Russian (sample file)" href="OpenSubtitles2012/mk-ru_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Sinhala (sample file)" href="OpenSubtitles2012/mk-si_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="OpenSubtitles2012/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="OpenSubtitles2012/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="OpenSubtitles2012/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="OpenSubtitles2012/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="OpenSubtitles2012/mk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Thai (sample file)" href="OpenSubtitles2012/mk-th_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="OpenSubtitles2012/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="OpenSubtitles2012/mk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Urdu (sample file)" href="OpenSubtitles2012/mk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Vietnamese (sample file)" href="OpenSubtitles2012/mk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="OpenSubtitles2012/mk-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="OpenSubtitles2012/mk-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/mk.raw.tar.gz">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ms.tar.gz">ms</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Afrikaans' (0.7k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2012/af-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Arabic' (1,273 aligned documents, 1.2M links, 17.3M tokens)" href="download.php?f=OpenSubtitles2012/ar-ms.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bulgarian' (1,519 aligned documents, 1.6M links, 21.5M tokens)" href="download.php?f=OpenSubtitles2012/bg-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bosnian' (216 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Catalan' (15 aligned documents, 18.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ca-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Czech' (1,533 aligned documents, 1.6M links, 21.9M tokens)" href="download.php?f=OpenSubtitles2012/cs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Danish' (969 aligned documents, 1.1M links, 15.4M tokens)" href="download.php?f=OpenSubtitles2012/da-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-German' (396 aligned documents, 0.4M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2012/de-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Greek' (1,471 aligned documents, 1.5M links, 20.8M tokens)" href="download.php?f=OpenSubtitles2012/el-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (2,362 aligned documents, 2.6M links, 36.8M tokens)" href="download.php?f=OpenSubtitles2012/en-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Spanish' (1,843 aligned documents, 1.9M links, 27.6M tokens)" href="download.php?f=OpenSubtitles2012/es-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Estonian' (1,013 aligned documents, 1.1M links, 15.2M tokens)" href="download.php?f=OpenSubtitles2012/et-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Persian' (13 aligned documents, 4.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Finnish' (1,343 aligned documents, 1.4M links, 18.1M tokens)" href="download.php?f=OpenSubtitles2012/fi-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-French' (1,315 aligned documents, 1.5M links, 20.6M tokens)" href="download.php?f=OpenSubtitles2012/fr-ms.xml.gz">ces</a></td>
<th>ms</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hebrew' (1,307 aligned documents, 1.3M links, 18.8M tokens)" href="download.php?f=OpenSubtitles2012/he-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Croatian' (1,349 aligned documents, 1.4M links, 19.2M tokens)" href="download.php?f=OpenSubtitles2012/hr-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hungarian' (1,510 aligned documents, 1.6M links, 20.9M tokens)" href="download.php?f=OpenSubtitles2012/hu-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Indonesian' (3 aligned documents, 2.8k links, 54.0k tokens)" href="download.php?f=OpenSubtitles2012/id-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Icelandic' (97 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2012/is-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Italian' (898 aligned documents, 1.0M links, 13.5M tokens)" href="download.php?f=OpenSubtitles2012/it-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Japanese' (71 aligned documents, 65.3k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/ja-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Korean' (5 aligned documents, 5.2k links, 68.6k tokens)" href="download.php?f=OpenSubtitles2012/ko-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Lithuanian' (115 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2012/lt-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Latvian' (44 aligned documents, 58.6k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/lv-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Macedonian' (269 aligned documents, 0.3M links, 4.2M tokens)" href="download.php?f=OpenSubtitles2012/mk-ms.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malay-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles2012/ms-nb_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Dutch (sample file)" href="OpenSubtitles2012/ms-nl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Polish (sample file)" href="OpenSubtitles2012/ms-pl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles2012/ms-pt_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles2012/ms-pt_br_sample.html">view</a></td><th>ms</th>
<td><a rel="nofollow" title="Malay-Romanian (sample file)" href="OpenSubtitles2012/ms-ro_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Russian (sample file)" href="OpenSubtitles2012/ms-ru_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Sinhala (sample file)" href="OpenSubtitles2012/ms-si_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovak (sample file)" href="OpenSubtitles2012/ms-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovenian (sample file)" href="OpenSubtitles2012/ms-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Albanian (sample file)" href="OpenSubtitles2012/ms-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Serbian (sample file)" href="OpenSubtitles2012/ms-sr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Swedish (sample file)" href="OpenSubtitles2012/ms-sv_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Thai (sample file)" href="OpenSubtitles2012/ms-th_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Turkish (sample file)" href="OpenSubtitles2012/ms-tr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Ukrainian (sample file)" href="OpenSubtitles2012/ms-uk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Urdu (sample file)" href="OpenSubtitles2012/ms-ur_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Vietnamese (sample file)" href="OpenSubtitles2012/ms-vi_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles2012/ms-zh_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles2012/ms-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles2012/ms-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ms.raw.tar.gz">ms</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/nb.tar.gz">nb</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Arabic' (1,262 aligned documents, 1.2M links, 17.2M tokens)" href="download.php?f=OpenSubtitles2012/ar-nb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (1,966 aligned documents, 2.0M links, 27.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' (335 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' (22 aligned documents, 24.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/ca-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (2,244 aligned documents, 2.3M links, 31.6M tokens)" href="download.php?f=OpenSubtitles2012/cs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (2,411 aligned documents, 2.5M links, 34.6M tokens)" href="download.php?f=OpenSubtitles2012/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (1,205 aligned documents, 1.3M links, 17.7M tokens)" href="download.php?f=OpenSubtitles2012/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (2,007 aligned documents, 2.0M links, 28.5M tokens)" href="download.php?f=OpenSubtitles2012/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (3,082 aligned documents, 3.2M links, 47.3M tokens)" href="download.php?f=OpenSubtitles2012/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (2,543 aligned documents, 2.6M links, 37.7M tokens)" href="download.php?f=OpenSubtitles2012/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (1,185 aligned documents, 1.3M links, 18.0M tokens)" href="download.php?f=OpenSubtitles2012/et-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Persian' (3 aligned documents, 2.0k links, 55.1k tokens)" href="download.php?f=OpenSubtitles2012/fa-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (2,395 aligned documents, 2.5M links, 31.5M tokens)" href="download.php?f=OpenSubtitles2012/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (2,145 aligned documents, 2.2M links, 32.2M tokens)" href="download.php?f=OpenSubtitles2012/fr-nb.xml.gz">ces</a></td>
<th>nb</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hebrew' (1,693 aligned documents, 1.6M links, 23.7M tokens)" href="download.php?f=OpenSubtitles2012/he-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (1,827 aligned documents, 1.9M links, 25.9M tokens)" href="download.php?f=OpenSubtitles2012/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (1,894 aligned documents, 2.0M links, 26.6M tokens)" href="download.php?f=OpenSubtitles2012/hu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Indonesian' (1.7k links, 24.9k tokens)" href="download.php?f=OpenSubtitles2012/id-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (368 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2012/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (1,328 aligned documents, 1.4M links, 20.2M tokens)" href="download.php?f=OpenSubtitles2012/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Japanese' (58 aligned documents, 54.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/ja-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Korean' (4 aligned documents, 4.8k links, 68.8k tokens)" href="download.php?f=OpenSubtitles2012/ko-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (165 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2012/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (59 aligned documents, 71.7k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/lv-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' (317 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2012/mk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Malay' (410 aligned documents, 0.5M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2012/ms-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="OpenSubtitles2012/nb-nl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Polish (sample file)" href="OpenSubtitles2012/nb-pl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="OpenSubtitles2012/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="OpenSubtitles2012/nb-pt_br_sample.html">view</a></td><th>nb</th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="OpenSubtitles2012/nb-ro_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="OpenSubtitles2012/nb-ru_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Sinhala (sample file)" href="OpenSubtitles2012/nb-si_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="OpenSubtitles2012/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="OpenSubtitles2012/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="OpenSubtitles2012/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="OpenSubtitles2012/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="OpenSubtitles2012/nb-sv_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Thai (sample file)" href="OpenSubtitles2012/nb-th_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Turkish (sample file)" href="OpenSubtitles2012/nb-tr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="OpenSubtitles2012/nb-uk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Urdu (sample file)" href="OpenSubtitles2012/nb-ur_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Vietnamese (sample file)" href="OpenSubtitles2012/nb-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="OpenSubtitles2012/nb-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="OpenSubtitles2012/nb-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/nb.raw.tar.gz">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/nl.tar.gz">nl</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (7,881 aligned documents, 6.0M links, 91.2M tokens)" href="download.php?f=OpenSubtitles2012/ar-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (15,110 aligned documents, 12.6M links, 183.5M tokens)" href="download.php?f=OpenSubtitles2012/bg-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bosnian' (1,809 aligned documents, 1.6M links, 22.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Catalan' (65 aligned documents, 66.4k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ca-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (16,263 aligned documents, 14.5M links, 205.0M tokens)" href="download.php?f=OpenSubtitles2012/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (6,618 aligned documents, 6.3M links, 93.3M tokens)" href="download.php?f=OpenSubtitles2012/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (4,487 aligned documents, 3.9M links, 57.7M tokens)" href="download.php?f=OpenSubtitles2012/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (15,732 aligned documents, 12.9M links, 196.2M tokens)" href="download.php?f=OpenSubtitles2012/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (29,149 aligned documents, 27.1M links, 414.2M tokens)" href="download.php?f=OpenSubtitles2012/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (21,603 aligned documents, 18.8M links, 287.6M tokens)" href="download.php?f=OpenSubtitles2012/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (5,793 aligned documents, 5.3M links, 73.3M tokens)" href="download.php?f=OpenSubtitles2012/et-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Basque' (0.7k links, 8.8k tokens)" href="download.php?f=OpenSubtitles2012/eu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Persian' (11 aligned documents, 4.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (10,999 aligned documents, 9.8M links, 129.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (15,163 aligned documents, 13.1M links, 200.4M tokens)" href="download.php?f=OpenSubtitles2012/fr-nl.xml.gz">ces</a></td>
<th>nl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hebrew' (13,184 aligned documents, 9.7M links, 154.2M tokens)" href="download.php?f=OpenSubtitles2012/he-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (12,648 aligned documents, 11.0M links, 154.7M tokens)" href="download.php?f=OpenSubtitles2012/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (15,195 aligned documents, 13.4M links, 186.4M tokens)" href="download.php?f=OpenSubtitles2012/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Indonesian' (11 aligned documents, 6.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/id-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (452 aligned documents, 0.5M links, 7.6M tokens)" href="download.php?f=OpenSubtitles2012/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (8,425 aligned documents, 7.0M links, 106.9M tokens)" href="download.php?f=OpenSubtitles2012/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (212 aligned documents, 0.2M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/ja-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Kazakh' (1.1k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2012/kk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (10 aligned documents, 10.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (402 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2012/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (119 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Macedonian' (876 aligned documents, 0.9M links, 13.0M tokens)" href="download.php?f=OpenSubtitles2012/mk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Malay' (1,707 aligned documents, 1.8M links, 25.1M tokens)" href="download.php?f=OpenSubtitles2012/ms-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (2,439 aligned documents, 2.5M links, 35.3M tokens)" href="download.php?f=OpenSubtitles2012/nb-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Polish (sample file)" href="OpenSubtitles2012/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles2012/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles2012/nl-pt_br_sample.html">view</a></td><th>nl</th>
<td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="OpenSubtitles2012/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="OpenSubtitles2012/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="OpenSubtitles2012/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="OpenSubtitles2012/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="OpenSubtitles2012/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Albanian (sample file)" href="OpenSubtitles2012/nl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Serbian (sample file)" href="OpenSubtitles2012/nl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="OpenSubtitles2012/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Thai (sample file)" href="OpenSubtitles2012/nl-th_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Turkish (sample file)" href="OpenSubtitles2012/nl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="OpenSubtitles2012/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Urdu (sample file)" href="OpenSubtitles2012/nl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Vietnamese (sample file)" href="OpenSubtitles2012/nl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles2012/nl-zh_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles2012/nl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles2012/nl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pl.tar.gz">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Afrikaans' (0.7k links, 13.8k tokens)" href="download.php?f=OpenSubtitles2012/af-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (6,851 aligned documents, 5.5M links, 75.7M tokens)" href="download.php?f=OpenSubtitles2012/ar-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Azerbaijani' (35 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (14,426 aligned documents, 12.3M links, 166.0M tokens)" href="download.php?f=OpenSubtitles2012/bg-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bosnian' (1,781 aligned documents, 1.6M links, 21.6M tokens)" href="download.php?f=OpenSubtitles2012/bs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Catalan' (63 aligned documents, 64.8k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/ca-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (17,052 aligned documents, 15.7M links, 203.9M tokens)" href="download.php?f=OpenSubtitles2012/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (5,829 aligned documents, 5.7M links, 78.3M tokens)" href="download.php?f=OpenSubtitles2012/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (3,888 aligned documents, 3.5M links, 48.6M tokens)" href="download.php?f=OpenSubtitles2012/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (13,244 aligned documents, 11.3M links, 159.1M tokens)" href="download.php?f=OpenSubtitles2012/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (28,283 aligned documents, 26.6M links, 378.6M tokens)" href="download.php?f=OpenSubtitles2012/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (19,004 aligned documents, 16.7M links, 237.6M tokens)" href="download.php?f=OpenSubtitles2012/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (5,515 aligned documents, 5.1M links, 66.2M tokens)" href="download.php?f=OpenSubtitles2012/et-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Basque' (0.7k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/eu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Persian' (7 aligned documents, 2.9k links, 68.2k tokens)" href="download.php?f=OpenSubtitles2012/fa-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (11,811 aligned documents, 10.5M links, 129.4M tokens)" href="download.php?f=OpenSubtitles2012/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (12,208 aligned documents, 11.0M links, 155.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Galician' (0.1k links, 1.6k tokens)" href="download.php?f=OpenSubtitles2012/gl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hebrew' (11,582 aligned documents, 8.7M links, 128.9M tokens)" href="download.php?f=OpenSubtitles2012/he-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (11,127 aligned documents, 10.1M links, 131.4M tokens)" href="download.php?f=OpenSubtitles2012/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (12,907 aligned documents, 11.7M links, 150.1M tokens)" href="download.php?f=OpenSubtitles2012/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Indonesian' (8 aligned documents, 5.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/id-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (450 aligned documents, 0.5M links, 7.1M tokens)" href="download.php?f=OpenSubtitles2012/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (6,618 aligned documents, 6.0M links, 83.6M tokens)" href="download.php?f=OpenSubtitles2012/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (172 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ja-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Kazakh' (1.1k links, 13.8k tokens)" href="download.php?f=OpenSubtitles2012/kk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (10 aligned documents, 10.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (425 aligned documents, 0.4M links, 5.3M tokens)" href="download.php?f=OpenSubtitles2012/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (117 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Macedonian' (868 aligned documents, 0.9M links, 12.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Malay' (1,409 aligned documents, 1.5M links, 20.1M tokens)" href="download.php?f=OpenSubtitles2012/ms-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-BokmÃ¥l, Norwegian' (2,237 aligned documents, 2.3M links, 31.1M tokens)" href="download.php?f=OpenSubtitles2012/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (16,151 aligned documents, 14.4M links, 200.9M tokens)" href="download.php?f=OpenSubtitles2012/nl-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles2012/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles2012/pl-pt_br_sample.html">view</a></td><th>pl</th>
<td><a rel="nofollow" title="Polish-Romanian (sample file)" href="OpenSubtitles2012/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="OpenSubtitles2012/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="OpenSubtitles2012/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="OpenSubtitles2012/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="OpenSubtitles2012/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Albanian (sample file)" href="OpenSubtitles2012/pl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Serbian (sample file)" href="OpenSubtitles2012/pl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="OpenSubtitles2012/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Thai (sample file)" href="OpenSubtitles2012/pl-th_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="OpenSubtitles2012/pl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="OpenSubtitles2012/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Urdu (sample file)" href="OpenSubtitles2012/pl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Vietnamese (sample file)" href="OpenSubtitles2012/pl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles2012/pl-zh_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles2012/pl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles2012/pl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Afrikaans' (0.7k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2012/af-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (7,684 aligned documents, 6.0M links, 90.7M tokens)" href="download.php?f=OpenSubtitles2012/ar-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (14,289 aligned documents, 12.4M links, 177.9M tokens)" href="download.php?f=OpenSubtitles2012/bg-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (1,715 aligned documents, 1.6M links, 22.0M tokens)" href="download.php?f=OpenSubtitles2012/bs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (59 aligned documents, 60.0k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/ca-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (15,074 aligned documents, 14.0M links, 193.4M tokens)" href="download.php?f=OpenSubtitles2012/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (6,010 aligned documents, 6.0M links, 86.8M tokens)" href="download.php?f=OpenSubtitles2012/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (3,896 aligned documents, 3.5M links, 52.0M tokens)" href="download.php?f=OpenSubtitles2012/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (14,754 aligned documents, 12.6M links, 189.0M tokens)" href="download.php?f=OpenSubtitles2012/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (28,178 aligned documents, 26.5M links, 395.6M tokens)" href="download.php?f=OpenSubtitles2012/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (21,337 aligned documents, 19.1M links, 286.4M tokens)" href="download.php?f=OpenSubtitles2012/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (5,371 aligned documents, 5.2M links, 71.0M tokens)" href="download.php?f=OpenSubtitles2012/et-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Basque' (0.7k links, 8.6k tokens)" href="download.php?f=OpenSubtitles2012/eu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (8 aligned documents, 3.9k links, 93.4k tokens)" href="download.php?f=OpenSubtitles2012/fa-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (10,415 aligned documents, 9.6M links, 125.6M tokens)" href="download.php?f=OpenSubtitles2012/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (14,189 aligned documents, 12.6M links, 188.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-pt.xml.gz">ces</a></td>
<th>pt</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (12,608 aligned documents, 9.5M links, 150.3M tokens)" href="download.php?f=OpenSubtitles2012/he-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (11,370 aligned documents, 10.3M links, 142.9M tokens)" href="download.php?f=OpenSubtitles2012/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (14,593 aligned documents, 13.2M links, 179.5M tokens)" href="download.php?f=OpenSubtitles2012/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (10 aligned documents, 6.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/id-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (478 aligned documents, 0.6M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2012/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (8,544 aligned documents, 7.3M links, 109.4M tokens)" href="download.php?f=OpenSubtitles2012/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (204 aligned documents, 0.2M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/ja-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Kazakh' (1.1k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/kk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (14 aligned documents, 13.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ko-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (408 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2012/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (111 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (877 aligned documents, 0.9M links, 13.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (1,712 aligned documents, 1.9M links, 25.9M tokens)" href="download.php?f=OpenSubtitles2012/ms-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (2,243 aligned documents, 2.4M links, 33.7M tokens)" href="download.php?f=OpenSubtitles2012/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (17,839 aligned documents, 16.2M links, 238.9M tokens)" href="download.php?f=OpenSubtitles2012/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (14,591 aligned documents, 13.6M links, 187.6M tokens)" href="download.php?f=OpenSubtitles2012/pl-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Portuguese (sample file)" href="OpenSubtitles2012/pt-pt_br_sample.html">view</a></td><th>pt</th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles2012/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles2012/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles2012/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles2012/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles2012/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles2012/pt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="OpenSubtitles2012/pt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles2012/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles2012/pt-th_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles2012/pt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles2012/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Urdu (sample file)" href="OpenSubtitles2012/pt-ur_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles2012/pt-vi_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt-zh_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pt_br.tar.gz">pt_br</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (9,040 aligned documents, 7.0M links, 103.6M tokens)" href="download.php?f=OpenSubtitles2012/ar-pt_br.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (18,393 aligned documents, 15.4M links, 219.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-pt_br.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (1,997 aligned documents, 1.8M links, 24.7M tokens)" href="download.php?f=OpenSubtitles2012/bs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (62 aligned documents, 67.0k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ca-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (19,079 aligned documents, 16.7M links, 232.0M tokens)" href="download.php?f=OpenSubtitles2012/cs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (6,215 aligned documents, 6.1M links, 88.0M tokens)" href="download.php?f=OpenSubtitles2012/da-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (4,637 aligned documents, 4.0M links, 58.9M tokens)" href="download.php?f=OpenSubtitles2012/de-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (18,657 aligned documents, 15.5M links, 231.2M tokens)" href="download.php?f=OpenSubtitles2012/el-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (40,802 aligned documents, 37.7M links, 563.2M tokens)" href="download.php?f=OpenSubtitles2012/en-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (30,833 aligned documents, 27.1M links, 404.2M tokens)" href="download.php?f=OpenSubtitles2012/es-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (5,972 aligned documents, 5.6M links, 76.0M tokens)" href="download.php?f=OpenSubtitles2012/et-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Basque' (0.7k links, 8.8k tokens)" href="download.php?f=OpenSubtitles2012/eu-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (13 aligned documents, 6.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/fa-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (11,507 aligned documents, 10.4M links, 134.7M tokens)" href="download.php?f=OpenSubtitles2012/fi-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (19,190 aligned documents, 16.7M links, 248.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-pt_br.xml.gz">ces</a></td>
<th>pt_br</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (15,530 aligned documents, 11.2M links, 176.1M tokens)" href="download.php?f=OpenSubtitles2012/he-pt_br.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (13,894 aligned documents, 12.2M links, 168.3M tokens)" href="download.php?f=OpenSubtitles2012/hr-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (19,017 aligned documents, 16.7M links, 225.8M tokens)" href="download.php?f=OpenSubtitles2012/hu-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (10 aligned documents, 7.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/id-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (373 aligned documents, 0.5M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/is-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (11,721 aligned documents, 9.6M links, 142.7M tokens)" href="download.php?f=OpenSubtitles2012/it-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (230 aligned documents, 0.2M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2012/ja-pt_br.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (13 aligned documents, 13.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ko-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (422 aligned documents, 0.4M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2012/lt-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (127 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2012/lv-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (889 aligned documents, 1.0M links, 13.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (1,855 aligned documents, 2.0M links, 27.5M tokens)" href="download.php?f=OpenSubtitles2012/ms-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (2,145 aligned documents, 2.3M links, 32.1M tokens)" href="download.php?f=OpenSubtitles2012/nb-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (20,961 aligned documents, 18.6M links, 273.6M tokens)" href="download.php?f=OpenSubtitles2012/nl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (17,716 aligned documents, 15.9M links, 218.6M tokens)" href="download.php?f=OpenSubtitles2012/pl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Portuguese' (22,924 aligned documents, 21.3M links, 299.2M tokens)" href="download.php?f=OpenSubtitles2012/pt-pt_br.xml.gz">ces</a></td>
<th></th>
<th>pt_br</th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles2012/pt_br-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles2012/pt_br-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles2012/pt_br-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles2012/pt_br-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles2012/pt_br-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles2012/pt_br-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="OpenSubtitles2012/pt_br-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles2012/pt_br-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles2012/pt_br-th_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles2012/pt_br-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles2012/pt_br-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Urdu (sample file)" href="OpenSubtitles2012/pt_br-ur_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles2012/pt_br-vi_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt_br-zh_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt_br-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles2012/pt_br-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/pt_br.raw.tar.gz">pt_br</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bn</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th></th>
<th>gl</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th></th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th>zh_cn</th>
<th>zh_tw</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ro.tar.gz">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Afrikaans' (0.7k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2012/af-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Arabic' (8,994 aligned documents, 6.9M links, 105.1M tokens)" href="download.php?f=OpenSubtitles2012/ar-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (19,013 aligned documents, 16.1M links, 232.1M tokens)" href="download.php?f=OpenSubtitles2012/bg-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (2,056 aligned documents, 1.9M links, 26.0M tokens)" href="download.php?f=OpenSubtitles2012/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (65 aligned documents, 69.4k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ca-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (18,034 aligned documents, 16.4M links, 229.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (5,963 aligned documents, 6.0M links, 87.5M tokens)" href="download.php?f=OpenSubtitles2012/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (4,211 aligned documents, 3.7M links, 55.4M tokens)" href="download.php?f=OpenSubtitles2012/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (17,236 aligned documents, 14.4M links, 218.1M tokens)" href="download.php?f=OpenSubtitles2012/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (32,304 aligned documents, 30.3M links, 454.1M tokens)" href="download.php?f=OpenSubtitles2012/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (24,248 aligned documents, 21.3M links, 322.0M tokens)" href="download.php?f=OpenSubtitles2012/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (6,056 aligned documents, 5.8M links, 79.1M tokens)" href="download.php?f=OpenSubtitles2012/et-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Basque' (0.7k links, 8.7k tokens)" href="download.php?f=OpenSubtitles2012/eu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Persian' (11 aligned documents, 3.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (10,817 aligned documents, 10.0M links, 132.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (15,242 aligned documents, 13.4M links, 202.1M tokens)" href="download.php?f=OpenSubtitles2012/fr-ro.xml.gz">ces</a></td>
<th>ro</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hebrew' (14,283 aligned documents, 10.5M links, 169.2M tokens)" href="download.php?f=OpenSubtitles2012/he-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (14,258 aligned documents, 12.5M links, 175.8M tokens)" href="download.php?f=OpenSubtitles2012/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (16,456 aligned documents, 14.8M links, 202.3M tokens)" href="download.php?f=OpenSubtitles2012/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Indonesian' (12 aligned documents, 6.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/id-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (401 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (9,101 aligned documents, 7.8M links, 116.9M tokens)" href="download.php?f=OpenSubtitles2012/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (213 aligned documents, 0.2M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/ja-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Kazakh' (1.1k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/kk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (12 aligned documents, 11.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ko-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (401 aligned documents, 0.4M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2012/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (110 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (934 aligned documents, 1.0M links, 14.0M tokens)" href="download.php?f=OpenSubtitles2012/mk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Malay' (1,740 aligned documents, 1.9M links, 26.3M tokens)" href="download.php?f=OpenSubtitles2012/ms-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (2,263 aligned documents, 2.4M links, 34.2M tokens)" href="download.php?f=OpenSubtitles2012/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (19,693 aligned documents, 17.5M links, 261.9M tokens)" href="download.php?f=OpenSubtitles2012/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (18,161 aligned documents, 16.6M links, 229.8M tokens)" href="download.php?f=OpenSubtitles2012/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (18,583 aligned documents, 17.3M links, 252.5M tokens)" href="download.php?f=OpenSubtitles2012/pt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (24,378 aligned documents, 21.9M links, 318.6M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-ro.xml.gz">ces</a></td>
<th>ro</th>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="OpenSubtitles2012/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="OpenSubtitles2012/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="OpenSubtitles2012/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="OpenSubtitles2012/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="OpenSubtitles2012/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="OpenSubtitles2012/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="OpenSubtitles2012/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Thai (sample file)" href="OpenSubtitles2012/ro-th_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="OpenSubtitles2012/ro-tr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="OpenSubtitles2012/ro-uk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Urdu (sample file)" href="OpenSubtitles2012/ro-ur_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Vietnamese (sample file)" href="OpenSubtitles2012/ro-vi_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles2012/ro-zh_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles2012/ro-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles2012/ro-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ro.raw.tar.gz">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Afrikaans' (0.7k links, 14.3k tokens)" href="download.php?f=OpenSubtitles2012/af-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (2,719 aligned documents, 2.0M links, 29.7M tokens)" href="download.php?f=OpenSubtitles2012/ar-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (4,444 aligned documents, 3.7M links, 51.9M tokens)" href="download.php?f=OpenSubtitles2012/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bosnian' (548 aligned documents, 0.5M links, 6.5M tokens)" href="download.php?f=OpenSubtitles2012/bs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (36 aligned documents, 38.6k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/ca-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (4,404 aligned documents, 3.8M links, 51.8M tokens)" href="download.php?f=OpenSubtitles2012/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (1,453 aligned documents, 1.5M links, 21.1M tokens)" href="download.php?f=OpenSubtitles2012/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (1,651 aligned documents, 1.4M links, 20.5M tokens)" href="download.php?f=OpenSubtitles2012/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (4,182 aligned documents, 3.3M links, 49.6M tokens)" href="download.php?f=OpenSubtitles2012/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (7,399 aligned documents, 6.3M links, 93.3M tokens)" href="download.php?f=OpenSubtitles2012/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (5,639 aligned documents, 4.6M links, 68.8M tokens)" href="download.php?f=OpenSubtitles2012/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (1,819 aligned documents, 1.7M links, 23.1M tokens)" href="download.php?f=OpenSubtitles2012/et-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Persian' (6 aligned documents, 3.0k links, 77.9k tokens)" href="download.php?f=OpenSubtitles2012/fa-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (2,503 aligned documents, 2.3M links, 28.8M tokens)" href="download.php?f=OpenSubtitles2012/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (4,350 aligned documents, 3.6M links, 53.8M tokens)" href="download.php?f=OpenSubtitles2012/fr-ru.xml.gz">ces</a></td>
<th>ru</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hebrew' (3,688 aligned documents, 2.7M links, 41.9M tokens)" href="download.php?f=OpenSubtitles2012/he-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (3,222 aligned documents, 2.8M links, 38.2M tokens)" href="download.php?f=OpenSubtitles2012/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (4,223 aligned documents, 3.6M links, 47.8M tokens)" href="download.php?f=OpenSubtitles2012/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Indonesian' (3 aligned documents, 2.8k links, 61.7k tokens)" href="download.php?f=OpenSubtitles2012/id-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (128 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2012/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (3,578 aligned documents, 2.8M links, 42.4M tokens)" href="download.php?f=OpenSubtitles2012/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (82 aligned documents, 68.2k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/ja-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (7 aligned documents, 7.0k links, 88.9k tokens)" href="download.php?f=OpenSubtitles2012/ko-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (200 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2012/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (72 aligned documents, 84.9k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2012/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Macedonian' (335 aligned documents, 0.4M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2012/mk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Malay' (541 aligned documents, 0.6M links, 8.2M tokens)" href="download.php?f=OpenSubtitles2012/ms-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (679 aligned documents, 0.8M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2012/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (4,086 aligned documents, 3.4M links, 50.5M tokens)" href="download.php?f=OpenSubtitles2012/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (3,506 aligned documents, 3.1M links, 42.1M tokens)" href="download.php?f=OpenSubtitles2012/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (4,068 aligned documents, 3.5M links, 50.4M tokens)" href="download.php?f=OpenSubtitles2012/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (5,496 aligned documents, 4.5M links, 65.0M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (4,675 aligned documents, 4.0M links, 58.3M tokens)" href="download.php?f=OpenSubtitles2012/ro-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="OpenSubtitles2012/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="OpenSubtitles2012/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="OpenSubtitles2012/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Albanian (sample file)" href="OpenSubtitles2012/ru-sq_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Serbian (sample file)" href="OpenSubtitles2012/ru-sr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="OpenSubtitles2012/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Thai (sample file)" href="OpenSubtitles2012/ru-th_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Turkish (sample file)" href="OpenSubtitles2012/ru-tr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="OpenSubtitles2012/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Urdu (sample file)" href="OpenSubtitles2012/ru-ur_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Vietnamese (sample file)" href="OpenSubtitles2012/ru-vi_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles2012/ru-zh_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles2012/ru-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles2012/ru-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/si.tar.gz">si</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Arabic' (23 aligned documents, 28.2k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/ar-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (24 aligned documents, 28.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/bg-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bosnian' (0.6k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/bs-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (20 aligned documents, 23.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (16 aligned documents, 17.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (3 aligned documents, 3.7k links, 56.8k tokens)" href="download.php?f=OpenSubtitles2012/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (18 aligned documents, 18.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (27 aligned documents, 33.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/en-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (22 aligned documents, 25.0k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (16 aligned documents, 17.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/et-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (18 aligned documents, 19.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (16 aligned documents, 18.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-si.xml.gz">ces</a></td>
<th>si</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hebrew' (15 aligned documents, 16.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/he-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (16 aligned documents, 16.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (22 aligned documents, 25.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/hu-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (2 aligned documents, 2.0k links, 31.0k tokens)" href="download.php?f=OpenSubtitles2012/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (14 aligned documents, 14.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/it-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Japanese' (0.6k links, 3.7k tokens)" href="download.php?f=OpenSubtitles2012/ja-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (4 aligned documents, 3.2k links, 41.7k tokens)" href="download.php?f=OpenSubtitles2012/lt-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Macedonian' (5 aligned documents, 6.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Malay' (17 aligned documents, 19.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ms-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-BokmÃ¥l, Norwegian' (8 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/nb-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (18 aligned documents, 19.5k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (18 aligned documents, 21.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (21 aligned documents, 24.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/pt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (27 aligned documents, 33.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (26 aligned documents, 32.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/ro-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (13 aligned documents, 16.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ru-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="OpenSubtitles2012/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="OpenSubtitles2012/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Albanian (sample file)" href="OpenSubtitles2012/si-sq_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Serbian (sample file)" href="OpenSubtitles2012/si-sr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="OpenSubtitles2012/si-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Sinhala-Turkish (sample file)" href="OpenSubtitles2012/si-tr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="OpenSubtitles2012/si-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Sinhala-Vietnamese (sample file)" href="OpenSubtitles2012/si-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="OpenSubtitles2012/si-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="OpenSubtitles2012/si-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/si.raw.tar.gz">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sk.tar.gz">sk</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (1,909 aligned documents, 1.5M links, 21.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Azerbaijani' (36 links, 0.3k tokens)" href="download.php?f=OpenSubtitles2012/az-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (3,036 aligned documents, 2.6M links, 36.6M tokens)" href="download.php?f=OpenSubtitles2012/bg-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (463 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2012/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (21 aligned documents, 20.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ca-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (3,534 aligned documents, 3.3M links, 43.1M tokens)" href="download.php?f=OpenSubtitles2012/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (1,327 aligned documents, 1.4M links, 19.1M tokens)" href="download.php?f=OpenSubtitles2012/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (842 aligned documents, 0.7M links, 10.2M tokens)" href="download.php?f=OpenSubtitles2012/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (2,731 aligned documents, 2.3M links, 33.7M tokens)" href="download.php?f=OpenSubtitles2012/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (4,440 aligned documents, 4.1M links, 58.8M tokens)" href="download.php?f=OpenSubtitles2012/en-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (3,704 aligned documents, 3.2M links, 46.9M tokens)" href="download.php?f=OpenSubtitles2012/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (1,503 aligned documents, 1.4M links, 19.1M tokens)" href="download.php?f=OpenSubtitles2012/et-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Basque' (0.7k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/eu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Persian' (5 aligned documents, 3.0k links, 78.3k tokens)" href="download.php?f=OpenSubtitles2012/fa-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (2,069 aligned documents, 1.9M links, 23.9M tokens)" href="download.php?f=OpenSubtitles2012/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (2,746 aligned documents, 2.4M links, 35.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-sk.xml.gz">ces</a></td>
<th>sk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hebrew' (2,478 aligned documents, 2.0M links, 29.8M tokens)" href="download.php?f=OpenSubtitles2012/he-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (2,391 aligned documents, 2.2M links, 29.3M tokens)" href="download.php?f=OpenSubtitles2012/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (3,017 aligned documents, 2.7M links, 35.4M tokens)" href="download.php?f=OpenSubtitles2012/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Indonesian' (6 aligned documents, 3.2k links, 95.1k tokens)" href="download.php?f=OpenSubtitles2012/id-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (75 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (1,719 aligned documents, 1.5M links, 21.4M tokens)" href="download.php?f=OpenSubtitles2012/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (68 aligned documents, 58.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/ja-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (3 aligned documents, 4.3k links, 59.8k tokens)" href="download.php?f=OpenSubtitles2012/ko-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (167 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2012/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (50 aligned documents, 57.0k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (319 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2012/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malay' (448 aligned documents, 0.5M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/ms-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (508 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (2,929 aligned documents, 2.6M links, 37.9M tokens)" href="download.php?f=OpenSubtitles2012/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (2,831 aligned documents, 2.6M links, 34.8M tokens)" href="download.php?f=OpenSubtitles2012/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (2,857 aligned documents, 2.6M links, 37.2M tokens)" href="download.php?f=OpenSubtitles2012/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (3,596 aligned documents, 3.2M links, 44.8M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (3,446 aligned documents, 3.1M links, 44.4M tokens)" href="download.php?f=OpenSubtitles2012/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (1,058 aligned documents, 0.9M links, 12.4M tokens)" href="download.php?f=OpenSubtitles2012/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (3 aligned documents, 4.2k links, 60.0k tokens)" href="download.php?f=OpenSubtitles2012/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="OpenSubtitles2012/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="OpenSubtitles2012/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="OpenSubtitles2012/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="OpenSubtitles2012/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Thai (sample file)" href="OpenSubtitles2012/sk-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="OpenSubtitles2012/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="OpenSubtitles2012/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Urdu (sample file)" href="OpenSubtitles2012/sk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Vietnamese (sample file)" href="OpenSubtitles2012/sk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="OpenSubtitles2012/sk-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="OpenSubtitles2012/sk-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sk.raw.tar.gz">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sl.tar.gz">sl</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (5,813 aligned documents, 4.6M links, 64.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (9,843 aligned documents, 8.6M links, 115.4M tokens)" href="download.php?f=OpenSubtitles2012/bg-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (1,420 aligned documents, 1.3M links, 17.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (47 aligned documents, 49.6k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (10,097 aligned documents, 9.3M links, 120.9M tokens)" href="download.php?f=OpenSubtitles2012/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (4,915 aligned documents, 4.8M links, 66.3M tokens)" href="download.php?f=OpenSubtitles2012/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (2,580 aligned documents, 2.3M links, 32.1M tokens)" href="download.php?f=OpenSubtitles2012/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (8,589 aligned documents, 7.5M links, 104.1M tokens)" href="download.php?f=OpenSubtitles2012/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (14,818 aligned documents, 13.9M links, 196.6M tokens)" href="download.php?f=OpenSubtitles2012/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (11,788 aligned documents, 10.5M links, 148.0M tokens)" href="download.php?f=OpenSubtitles2012/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (5,029 aligned documents, 4.8M links, 61.4M tokens)" href="download.php?f=OpenSubtitles2012/et-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Basque' (0.7k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/eu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Persian' (8 aligned documents, 3.4k links, 89.5k tokens)" href="download.php?f=OpenSubtitles2012/fa-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (7,463 aligned documents, 6.9M links, 84.3M tokens)" href="download.php?f=OpenSubtitles2012/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (7,982 aligned documents, 7.3M links, 101.9M tokens)" href="download.php?f=OpenSubtitles2012/fr-sl.xml.gz">ces</a></td>
<th>sl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hebrew' (8,693 aligned documents, 6.6M links, 98.2M tokens)" href="download.php?f=OpenSubtitles2012/he-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (8,725 aligned documents, 8.0M links, 102.9M tokens)" href="download.php?f=OpenSubtitles2012/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (8,442 aligned documents, 7.8M links, 99.3M tokens)" href="download.php?f=OpenSubtitles2012/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Indonesian' (5 aligned documents, 4.2k links, 87.0k tokens)" href="download.php?f=OpenSubtitles2012/id-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (365 aligned documents, 0.5M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2012/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (4,208 aligned documents, 3.9M links, 54.4M tokens)" href="download.php?f=OpenSubtitles2012/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (178 aligned documents, 0.1M links, 1.1M tokens)" href="download.php?f=OpenSubtitles2012/ja-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (9 aligned documents, 11.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (399 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2012/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (112 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (841 aligned documents, 0.9M links, 11.8M tokens)" href="download.php?f=OpenSubtitles2012/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malay' (1,229 aligned documents, 1.4M links, 18.1M tokens)" href="download.php?f=OpenSubtitles2012/ms-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (1,817 aligned documents, 1.9M links, 25.5M tokens)" href="download.php?f=OpenSubtitles2012/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (11,120 aligned documents, 9.7M links, 135.5M tokens)" href="download.php?f=OpenSubtitles2012/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (10,418 aligned documents, 9.3M links, 119.6M tokens)" href="download.php?f=OpenSubtitles2012/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (10,167 aligned documents, 9.4M links, 128.5M tokens)" href="download.php?f=OpenSubtitles2012/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (11,269 aligned documents, 10.2M links, 138.3M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (11,409 aligned documents, 10.5M links, 144.4M tokens)" href="download.php?f=OpenSubtitles2012/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (2,558 aligned documents, 2.3M links, 31.5M tokens)" href="download.php?f=OpenSubtitles2012/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (19 aligned documents, 22.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (2,126 aligned documents, 2.0M links, 26.5M tokens)" href="download.php?f=OpenSubtitles2012/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="OpenSubtitles2012/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="OpenSubtitles2012/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="OpenSubtitles2012/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Thai (sample file)" href="OpenSubtitles2012/sl-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="OpenSubtitles2012/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="OpenSubtitles2012/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Urdu (sample file)" href="OpenSubtitles2012/sl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Vietnamese (sample file)" href="OpenSubtitles2012/sl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles2012/sl-zh_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles2012/sl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles2012/sl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sl.raw.tar.gz">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sq.tar.gz">sq</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Arabic' (650 aligned documents, 0.6M links, 9.3M tokens)" href="download.php?f=OpenSubtitles2012/ar-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (736 aligned documents, 0.8M links, 11.0M tokens)" href="download.php?f=OpenSubtitles2012/bg-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (154 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2012/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (10 aligned documents, 12.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (750 aligned documents, 0.8M links, 11.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (523 aligned documents, 0.6M links, 8.6M tokens)" href="download.php?f=OpenSubtitles2012/da-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-German' (185 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2012/de-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (765 aligned documents, 0.8M links, 11.4M tokens)" href="download.php?f=OpenSubtitles2012/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (877 aligned documents, 1.0M links, 14.7M tokens)" href="download.php?f=OpenSubtitles2012/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Spanish' (807 aligned documents, 0.9M links, 12.7M tokens)" href="download.php?f=OpenSubtitles2012/es-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (564 aligned documents, 0.6M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2012/et-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Persian' (2 aligned documents, 0.5k links, 8.6k tokens)" href="download.php?f=OpenSubtitles2012/fa-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (689 aligned documents, 0.7M links, 9.7M tokens)" href="download.php?f=OpenSubtitles2012/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (618 aligned documents, 0.7M links, 10.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-sq.xml.gz">ces</a></td>
<th>sq</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hebrew' (671 aligned documents, 0.7M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2012/he-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (642 aligned documents, 0.7M links, 9.7M tokens)" href="download.php?f=OpenSubtitles2012/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (742 aligned documents, 0.8M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2012/hu-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (68 aligned documents, 86.6k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (487 aligned documents, 0.5M links, 7.5M tokens)" href="download.php?f=OpenSubtitles2012/it-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (43 aligned documents, 41.1k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/ja-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Korean' (3 aligned documents, 5.0k links, 67.0k tokens)" href="download.php?f=OpenSubtitles2012/ko-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (64 aligned documents, 69.6k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (29 aligned documents, 36.2k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (191 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malay' (380 aligned documents, 0.4M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2012/ms-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' (247 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2012/nb-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Dutch' (801 aligned documents, 0.9M links, 12.5M tokens)" href="download.php?f=OpenSubtitles2012/nl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Polish' (734 aligned documents, 0.8M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2012/pl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (799 aligned documents, 0.9M links, 12.5M tokens)" href="download.php?f=OpenSubtitles2012/pt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (835 aligned documents, 0.9M links, 12.8M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (828 aligned documents, 0.9M links, 13.1M tokens)" href="download.php?f=OpenSubtitles2012/ro-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Russian' (254 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2012/ru-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Sinhala' (8 aligned documents, 8.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/si-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (219 aligned documents, 0.3M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2012/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (665 aligned documents, 0.7M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2012/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="OpenSubtitles2012/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swedish (sample file)" href="OpenSubtitles2012/sq-sv_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Thai (sample file)" href="OpenSubtitles2012/sq-th_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="OpenSubtitles2012/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="OpenSubtitles2012/sq-uk_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Urdu (sample file)" href="OpenSubtitles2012/sq-ur_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Vietnamese (sample file)" href="OpenSubtitles2012/sq-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles2012/sq-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles2012/sq-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sq.raw.tar.gz">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sr.tar.gz">sr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Arabic' (5,755 aligned documents, 4.6M links, 65.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (10,838 aligned documents, 9.5M links, 130.4M tokens)" href="download.php?f=OpenSubtitles2012/bg-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (1,336 aligned documents, 1.3M links, 16.8M tokens)" href="download.php?f=OpenSubtitles2012/bs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (48 aligned documents, 51.4k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' (10,671 aligned documents, 9.9M links, 132.9M tokens)" href="download.php?f=OpenSubtitles2012/cs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' (4,286 aligned documents, 4.3M links, 60.8M tokens)" href="download.php?f=OpenSubtitles2012/da-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-German' (2,717 aligned documents, 2.6M links, 36.6M tokens)" href="download.php?f=OpenSubtitles2012/de-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (10,108 aligned documents, 8.7M links, 126.0M tokens)" href="download.php?f=OpenSubtitles2012/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (16,325 aligned documents, 15.5M links, 225.2M tokens)" href="download.php?f=OpenSubtitles2012/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Spanish' (13,208 aligned documents, 11.9M links, 173.4M tokens)" href="download.php?f=OpenSubtitles2012/es-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (4,258 aligned documents, 4.2M links, 54.9M tokens)" href="download.php?f=OpenSubtitles2012/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (0.7k links, 8.2k tokens)" href="download.php?f=OpenSubtitles2012/eu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Persian' (8 aligned documents, 3.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/fa-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (7,051 aligned documents, 6.6M links, 82.5M tokens)" href="download.php?f=OpenSubtitles2012/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-French' (8,499 aligned documents, 7.9M links, 114.1M tokens)" href="download.php?f=OpenSubtitles2012/fr-sr.xml.gz">ces</a></td>
<th>sr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hebrew' (8,193 aligned documents, 6.3M links, 96.4M tokens)" href="download.php?f=OpenSubtitles2012/he-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (8,056 aligned documents, 7.9M links, 100.8M tokens)" href="download.php?f=OpenSubtitles2012/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' (9,153 aligned documents, 8.5M links, 111.2M tokens)" href="download.php?f=OpenSubtitles2012/hu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Indonesian' (5 aligned documents, 4.4k links, 85.6k tokens)" href="download.php?f=OpenSubtitles2012/id-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (347 aligned documents, 0.4M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2012/is-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Italian' (5,011 aligned documents, 4.7M links, 66.7M tokens)" href="download.php?f=OpenSubtitles2012/it-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (158 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ja-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Kazakh' (1.1k links, 13.3k tokens)" href="download.php?f=OpenSubtitles2012/kk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Korean' (8 aligned documents, 9.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (367 aligned documents, 0.4M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2012/lt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (105 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2012/lv-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (828 aligned documents, 0.9M links, 11.8M tokens)" href="download.php?f=OpenSubtitles2012/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Malay' (1,227 aligned documents, 1.3M links, 18.0M tokens)" href="download.php?f=OpenSubtitles2012/ms-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' (1,749 aligned documents, 1.9M links, 25.8M tokens)" href="download.php?f=OpenSubtitles2012/nb-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Dutch' (10,978 aligned documents, 9.9M links, 140.9M tokens)" href="download.php?f=OpenSubtitles2012/nl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Polish' (10,673 aligned documents, 9.9M links, 131.0M tokens)" href="download.php?f=OpenSubtitles2012/pl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (10,315 aligned documents, 9.7M links, 135.5M tokens)" href="download.php?f=OpenSubtitles2012/pt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (12,619 aligned documents, 11.6M links, 162.1M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-sr.xml.gz">ces</a></td>
<th>sr</th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (12,936 aligned documents, 12.0M links, 168.8M tokens)" href="download.php?f=OpenSubtitles2012/ro-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Russian' (2,823 aligned documents, 2.6M links, 35.7M tokens)" href="download.php?f=OpenSubtitles2012/ru-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Sinhala' (19 aligned documents, 22.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/si-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (2,247 aligned documents, 2.1M links, 28.2M tokens)" href="download.php?f=OpenSubtitles2012/sk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (7,652 aligned documents, 7.2M links, 93.6M tokens)" href="download.php?f=OpenSubtitles2012/sl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (668 aligned documents, 0.7M links, 10.2M tokens)" href="download.php?f=OpenSubtitles2012/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swedish (sample file)" href="OpenSubtitles2012/sr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Thai (sample file)" href="OpenSubtitles2012/sr-th_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="OpenSubtitles2012/sr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="OpenSubtitles2012/sr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Urdu (sample file)" href="OpenSubtitles2012/sr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Vietnamese (sample file)" href="OpenSubtitles2012/sr-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="OpenSubtitles2012/sr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="OpenSubtitles2012/sr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sr.raw.tar.gz">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sv.tar.gz">sv</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Arabic' (4,192 aligned documents, 3.4M links, 49.2M tokens)" href="download.php?f=OpenSubtitles2012/ar-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (6,792 aligned documents, 5.9M links, 83.7M tokens)" href="download.php?f=OpenSubtitles2012/bg-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bosnian' (1,068 aligned documents, 0.9M links, 13.1M tokens)" href="download.php?f=OpenSubtitles2012/bs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Catalan' (46 aligned documents, 45.4k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/ca-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (7,439 aligned documents, 6.7M links, 93.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (5,059 aligned documents, 4.8M links, 68.9M tokens)" href="download.php?f=OpenSubtitles2012/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (2,609 aligned documents, 2.3M links, 33.7M tokens)" href="download.php?f=OpenSubtitles2012/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (6,620 aligned documents, 5.6M links, 83.1M tokens)" href="download.php?f=OpenSubtitles2012/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (10,851 aligned documents, 9.9M links, 148.8M tokens)" href="download.php?f=OpenSubtitles2012/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (8,984 aligned documents, 7.9M links, 117.5M tokens)" href="download.php?f=OpenSubtitles2012/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (3,626 aligned documents, 3.4M links, 46.9M tokens)" href="download.php?f=OpenSubtitles2012/et-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Basque' (0.7k links, 8.8k tokens)" href="download.php?f=OpenSubtitles2012/eu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Persian' (5 aligned documents, 2.6k links, 61.2k tokens)" href="download.php?f=OpenSubtitles2012/fa-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (6,604 aligned documents, 6.0M links, 76.7M tokens)" href="download.php?f=OpenSubtitles2012/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (6,883 aligned documents, 6.1M links, 90.2M tokens)" href="download.php?f=OpenSubtitles2012/fr-sv.xml.gz">ces</a></td>
<th>sv</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hebrew' (6,242 aligned documents, 4.9M links, 74.8M tokens)" href="download.php?f=OpenSubtitles2012/he-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (5,887 aligned documents, 5.3M links, 72.8M tokens)" href="download.php?f=OpenSubtitles2012/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (6,416 aligned documents, 5.8M links, 78.5M tokens)" href="download.php?f=OpenSubtitles2012/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Indonesian' (3 aligned documents, 1.4k links, 21.8k tokens)" href="download.php?f=OpenSubtitles2012/id-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (452 aligned documents, 0.5M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2012/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (3,731 aligned documents, 3.4M links, 49.3M tokens)" href="download.php?f=OpenSubtitles2012/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (161 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/ja-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Korean' (8 aligned documents, 10.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (344 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2012/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (101 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Macedonian' (675 aligned documents, 0.7M links, 9.9M tokens)" href="download.php?f=OpenSubtitles2012/mk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Malay' (1,031 aligned documents, 1.1M links, 15.5M tokens)" href="download.php?f=OpenSubtitles2012/ms-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (2,497 aligned documents, 2.5M links, 34.8M tokens)" href="download.php?f=OpenSubtitles2012/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (8,364 aligned documents, 7.3M links, 107.3M tokens)" href="download.php?f=OpenSubtitles2012/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (6,954 aligned documents, 6.4M links, 86.5M tokens)" href="download.php?f=OpenSubtitles2012/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (7,720 aligned documents, 7.0M links, 100.9M tokens)" href="download.php?f=OpenSubtitles2012/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (8,218 aligned documents, 7.3M links, 105.4M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (7,884 aligned documents, 7.1M links, 103.8M tokens)" href="download.php?f=OpenSubtitles2012/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (2,064 aligned documents, 1.9M links, 26.2M tokens)" href="download.php?f=OpenSubtitles2012/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (15 aligned documents, 15.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (1,657 aligned documents, 1.5M links, 21.1M tokens)" href="download.php?f=OpenSubtitles2012/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (5,748 aligned documents, 5.2M links, 71.1M tokens)" href="download.php?f=OpenSubtitles2012/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Albanian' (551 aligned documents, 0.6M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2012/sq-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Serbian' (5,180 aligned documents, 4.9M links, 68.0M tokens)" href="download.php?f=OpenSubtitles2012/sr-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Thai (sample file)" href="OpenSubtitles2012/sv-th_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Turkish (sample file)" href="OpenSubtitles2012/sv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="OpenSubtitles2012/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Urdu (sample file)" href="OpenSubtitles2012/sv-ur_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Vietnamese (sample file)" href="OpenSubtitles2012/sv-vi_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles2012/sv-zh_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles2012/sv-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles2012/sv-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/sv.raw.tar.gz">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/th.tar.gz">th</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Arabic' (31 aligned documents, 29.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ar-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bulgarian' (32 aligned documents, 29.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/bg-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bosnian' (3 aligned documents, 2.1k links, 21.3k tokens)" href="download.php?f=OpenSubtitles2012/bs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Catalan' (2 aligned documents, 2.2k links, 23.8k tokens)" href="download.php?f=OpenSubtitles2012/ca-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Czech' (36 aligned documents, 32.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Danish' (25 aligned documents, 24.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/da-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-German' (11 aligned documents, 9.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/de-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Greek' (35 aligned documents, 31.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/el-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (37 aligned documents, 34.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/en-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Spanish' (35 aligned documents, 31.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/es-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Estonian' (29 aligned documents, 26.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/et-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Finnish' (28 aligned documents, 25.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/fi-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-French' (32 aligned documents, 29.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-th.xml.gz">ces</a></td>
<th>th</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hebrew' (34 aligned documents, 32.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/he-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Croatian' (27 aligned documents, 26.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/hr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hungarian' (36 aligned documents, 33.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/hu-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Icelandic' (2 aligned documents, 2.3k links, 37.9k tokens)" href="download.php?f=OpenSubtitles2012/is-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Italian' (16 aligned documents, 13.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/it-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Japanese' (3 aligned documents, 2.9k links, 8.1k tokens)" href="download.php?f=OpenSubtitles2012/ja-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Lithuanian' (3 aligned documents, 2.7k links, 24.9k tokens)" href="download.php?f=OpenSubtitles2012/lt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Latvian' (1.5k links, 12.7k tokens)" href="download.php?f=OpenSubtitles2012/lv-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Macedonian' (10 aligned documents, 10.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/mk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Malay' (20 aligned documents, 19.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ms-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-BokmÃ¥l, Norwegian' (15 aligned documents, 15.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/nb-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Dutch' (34 aligned documents, 32.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/nl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Polish' (24 aligned documents, 23.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/pl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (35 aligned documents, 32.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/pt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (35 aligned documents, 33.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Romanian' (34 aligned documents, 30.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ro-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Russian' (16 aligned documents, 14.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ru-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovak' (7 aligned documents, 4.7k links, 49.7k tokens)" href="download.php?f=OpenSubtitles2012/sk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovenian' (33 aligned documents, 30.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/sl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Albanian' (14 aligned documents, 12.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/sq-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Serbian' (31 aligned documents, 28.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/sr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Swedish' (34 aligned documents, 29.5k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/sv-th.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Thai-Turkish (sample file)" href="OpenSubtitles2012/th-tr_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Ukrainian (sample file)" href="OpenSubtitles2012/th-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Thai-Vietnamese (sample file)" href="OpenSubtitles2012/th-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Thai-Chinese (sample file)" href="OpenSubtitles2012/th-zh_cn_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/th.raw.tar.gz">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/tr.tar.gz">tr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (8,191 aligned documents, 6.2M links, 83.6M tokens)" href="download.php?f=OpenSubtitles2012/ar-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (16,056 aligned documents, 13.1M links, 169.9M tokens)" href="download.php?f=OpenSubtitles2012/bg-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (1,767 aligned documents, 1.6M links, 19.7M tokens)" href="download.php?f=OpenSubtitles2012/bs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (56 aligned documents, 60.7k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/ca-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (15,778 aligned documents, 13.9M links, 173.8M tokens)" href="download.php?f=OpenSubtitles2012/cs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' (5,438 aligned documents, 5.4M links, 71.4M tokens)" href="download.php?f=OpenSubtitles2012/da-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-German' (4,044 aligned documents, 3.5M links, 46.8M tokens)" href="download.php?f=OpenSubtitles2012/de-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (14,829 aligned documents, 12.1M links, 164.3M tokens)" href="download.php?f=OpenSubtitles2012/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (25,455 aligned documents, 22.6M links, 307.8M tokens)" href="download.php?f=OpenSubtitles2012/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Spanish' (19,788 aligned documents, 16.6M links, 227.6M tokens)" href="download.php?f=OpenSubtitles2012/es-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (5,757 aligned documents, 5.4M links, 66.3M tokens)" href="download.php?f=OpenSubtitles2012/et-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Basque' (0.6k links, 7.9k tokens)" href="download.php?f=OpenSubtitles2012/eu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Persian' (15 aligned documents, 7.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/fa-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (9,419 aligned documents, 8.5M links, 99.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-French' (13,480 aligned documents, 11.6M links, 157.9M tokens)" href="download.php?f=OpenSubtitles2012/fr-tr.xml.gz">ces</a></td>
<th>tr</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hebrew' (13,507 aligned documents, 9.6M links, 138.4M tokens)" href="download.php?f=OpenSubtitles2012/he-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (11,854 aligned documents, 10.3M links, 128.4M tokens)" href="download.php?f=OpenSubtitles2012/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' (14,176 aligned documents, 12.2M links, 149.9M tokens)" href="download.php?f=OpenSubtitles2012/hu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Indonesian' (8 aligned documents, 5.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/id-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (418 aligned documents, 0.5M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Italian' (8,230 aligned documents, 7.0M links, 94.0M tokens)" href="download.php?f=OpenSubtitles2012/it-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (212 aligned documents, 0.2M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/ja-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Korean' (9 aligned documents, 10.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ko-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (409 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2012/lt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (138 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2012/lv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (850 aligned documents, 0.9M links, 11.5M tokens)" href="download.php?f=OpenSubtitles2012/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malay' (1,515 aligned documents, 1.6M links, 20.8M tokens)" href="download.php?f=OpenSubtitles2012/ms-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-BokmÃ¥l, Norwegian' (2,061 aligned documents, 2.2M links, 28.1M tokens)" href="download.php?f=OpenSubtitles2012/nb-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Dutch' (15,837 aligned documents, 13.5M links, 181.1M tokens)" href="download.php?f=OpenSubtitles2012/nl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (14,717 aligned documents, 12.9M links, 160.0M tokens)" href="download.php?f=OpenSubtitles2012/pl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (15,191 aligned documents, 13.6M links, 178.7M tokens)" href="download.php?f=OpenSubtitles2012/pt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (19,391 aligned documents, 16.5M links, 217.1M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (18,991 aligned documents, 16.3M links, 217.0M tokens)" href="download.php?f=OpenSubtitles2012/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Russian' (4,532 aligned documents, 3.8M links, 49.1M tokens)" href="download.php?f=OpenSubtitles2012/ru-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Sinhala' (20 aligned documents, 23.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/si-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (3,086 aligned documents, 2.7M links, 34.8M tokens)" href="download.php?f=OpenSubtitles2012/sk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (9,969 aligned documents, 8.9M links, 110.0M tokens)" href="download.php?f=OpenSubtitles2012/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (730 aligned documents, 0.8M links, 10.5M tokens)" href="download.php?f=OpenSubtitles2012/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (10,861 aligned documents, 9.8M links, 123.7M tokens)" href="download.php?f=OpenSubtitles2012/sr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swedish' (6,961 aligned documents, 6.2M links, 81.6M tokens)" href="download.php?f=OpenSubtitles2012/sv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Thai' (35 aligned documents, 33.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/th-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="OpenSubtitles2012/tr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Urdu (sample file)" href="OpenSubtitles2012/tr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Vietnamese (sample file)" href="OpenSubtitles2012/tr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles2012/tr-zh_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles2012/tr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles2012/tr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/tr.raw.tar.gz">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/uk.tar.gz">uk</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Arabic' (50 aligned documents, 44.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/ar-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (70 aligned documents, 67.3k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (8 aligned documents, 7.9k links, 98.5k tokens)" href="download.php?f=OpenSubtitles2012/bs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (1.0k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/ca-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (107 aligned documents, 95.5k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (46 aligned documents, 50.1k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (34 aligned documents, 33.0k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (90 aligned documents, 74.1k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (157 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (103 aligned documents, 95.1k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (58 aligned documents, 59.4k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/et-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Persian' (0.5k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2012/fa-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (67 aligned documents, 60.9k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (74 aligned documents, 72.9k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/fr-uk.xml.gz">ces</a></td>
<th>uk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hebrew' (66 aligned documents, 60.5k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/he-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (55 aligned documents, 59.6k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (73 aligned documents, 76.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/hu-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (1.9k links, 26.1k tokens)" href="download.php?f=OpenSubtitles2012/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (47 aligned documents, 45.9k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Japanese' (4 aligned documents, 3.0k links, 22.3k tokens)" href="download.php?f=OpenSubtitles2012/ja-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (3 aligned documents, 3.3k links, 53.2k tokens)" href="download.php?f=OpenSubtitles2012/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (6 aligned documents, 8.1k links, 94.6k tokens)" href="download.php?f=OpenSubtitles2012/lv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (9 aligned documents, 7.7k links, 99.5k tokens)" href="download.php?f=OpenSubtitles2012/mk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Malay' (24 aligned documents, 31.2k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/ms-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (30 aligned documents, 35.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/nb-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (70 aligned documents, 66.8k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/nl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (88 aligned documents, 82.0k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2012/pl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (82 aligned documents, 81.3k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/pt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (95 aligned documents, 90.6k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (96 aligned documents, 90.1k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2012/ro-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (61 aligned documents, 63.1k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/ru-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (1.3k links, 20.2k tokens)" href="download.php?f=OpenSubtitles2012/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (25 aligned documents, 23.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (67 aligned documents, 71.7k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (9 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/sq-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (60 aligned documents, 66.1k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2012/sr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (45 aligned documents, 49.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/sv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Thai' (1.0k links, 9.5k tokens)" href="download.php?f=OpenSubtitles2012/th-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (73 aligned documents, 75.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/tr-uk.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Ukrainian-Vietnamese (sample file)" href="OpenSubtitles2012/uk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="OpenSubtitles2012/uk-zh_cn_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/uk.raw.tar.gz">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ur.tar.gz">ur</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Arabic' (2 aligned documents, 2.3k links, 41.2k tokens)" href="download.php?f=OpenSubtitles2012/ar-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bulgarian' (2 aligned documents, 2.3k links, 42.7k tokens)" href="download.php?f=OpenSubtitles2012/bg-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Czech' (2 aligned documents, 2.1k links, 40.9k tokens)" href="download.php?f=OpenSubtitles2012/cs-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Danish' (1.0k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2012/da-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-German' (1.4k links, 25.0k tokens)" href="download.php?f=OpenSubtitles2012/de-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Greek' (2 aligned documents, 2.2k links, 42.4k tokens)" href="download.php?f=OpenSubtitles2012/el-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (2 aligned documents, 2.3k links, 46.4k tokens)" href="download.php?f=OpenSubtitles2012/en-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Spanish' (2 aligned documents, 2.4k links, 45.0k tokens)" href="download.php?f=OpenSubtitles2012/es-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Estonian' (0.9k links, 18.1k tokens)" href="download.php?f=OpenSubtitles2012/et-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Finnish' (2 aligned documents, 2.3k links, 39.2k tokens)" href="download.php?f=OpenSubtitles2012/fi-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-French' (2 aligned documents, 2.3k links, 44.5k tokens)" href="download.php?f=OpenSubtitles2012/fr-ur.xml.gz">ces</a></td>
<th>ur</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hebrew' (1.0k links, 17.7k tokens)" href="download.php?f=OpenSubtitles2012/he-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Croatian' (2 aligned documents, 2.3k links, 41.1k tokens)" href="download.php?f=OpenSubtitles2012/hr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hungarian' (2 aligned documents, 2.4k links, 41.3k tokens)" href="download.php?f=OpenSubtitles2012/hu-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Italian' (1.3k links, 23.9k tokens)" href="download.php?f=OpenSubtitles2012/it-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Macedonian' (2 aligned documents, 2.1k links, 41.8k tokens)" href="download.php?f=OpenSubtitles2012/mk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Malay' (0.9k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2012/ms-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-BokmÃ¥l, Norwegian' (1.3k links, 23.9k tokens)" href="download.php?f=OpenSubtitles2012/nb-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Dutch' (2 aligned documents, 2.4k links, 45.8k tokens)" href="download.php?f=OpenSubtitles2012/nl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Polish' (2 aligned documents, 2.2k links, 41.1k tokens)" href="download.php?f=OpenSubtitles2012/pl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Portuguese' (2 aligned documents, 2.4k links, 43.4k tokens)" href="download.php?f=OpenSubtitles2012/pt-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Portuguese' (2 aligned documents, 2.2k links, 43.4k tokens)" href="download.php?f=OpenSubtitles2012/pt_br-ur.xml.gz">ces</a></td>
<th>ur</th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Romanian' (2 aligned documents, 2.3k links, 43.7k tokens)" href="download.php?f=OpenSubtitles2012/ro-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Russian' (1.0k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2012/ru-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovak' (1.6k links, 25.0k tokens)" href="download.php?f=OpenSubtitles2012/sk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovenian' (2 aligned documents, 2.4k links, 41.2k tokens)" href="download.php?f=OpenSubtitles2012/sl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Albanian' (0.9k links, 19.5k tokens)" href="download.php?f=OpenSubtitles2012/sq-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Serbian' (0.9k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2012/sr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Swedish' (0.9k links, 19.8k tokens)" href="download.php?f=OpenSubtitles2012/sv-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Turkish' (2 aligned documents, 2.3k links, 40.0k tokens)" href="download.php?f=OpenSubtitles2012/tr-ur.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Urdu-Vietnamese (sample file)" href="OpenSubtitles2012/ur-vi_sample.html">view</a></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/ur.raw.tar.gz">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/vi.tar.gz">vi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Afrikaans' (0.7k links, 16.4k tokens)" href="download.php?f=OpenSubtitles2012/af-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Arabic' (368 aligned documents, 0.4M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2012/ar-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bulgarian' (384 aligned documents, 0.4M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/bg-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bosnian' (73 aligned documents, 81.8k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Catalan' (6 aligned documents, 6.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ca-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Czech' (384 aligned documents, 0.4M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2012/cs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Danish' (304 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2012/da-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-German' (130 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2012/de-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Greek' (396 aligned documents, 0.4M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2012/el-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (458 aligned documents, 0.5M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2012/en-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Spanish' (422 aligned documents, 0.5M links, 7.6M tokens)" href="download.php?f=OpenSubtitles2012/es-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Estonian' (327 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2012/et-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Persian' (0.6k links, 25.4k tokens)" href="download.php?f=OpenSubtitles2012/fa-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Finnish' (357 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-French' (359 aligned documents, 0.4M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/fr-vi.xml.gz">ces</a></td>
<th>vi</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hebrew' (363 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2012/he-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Croatian' (355 aligned documents, 0.4M links, 6.2M tokens)" href="download.php?f=OpenSubtitles2012/hr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hungarian' (374 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2012/hu-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Icelandic' (36 aligned documents, 49.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/is-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Italian' (276 aligned documents, 0.3M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2012/it-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Japanese' (34 aligned documents, 30.5k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/ja-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Korean' (3 aligned documents, 3.8k links, 53.5k tokens)" href="download.php?f=OpenSubtitles2012/ko-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Lithuanian' (49 aligned documents, 54.7k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/lt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Latvian' (19 aligned documents, 25.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/lv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Macedonian' (101 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/mk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malay' (243 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2012/ms-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-BokmÃ¥l, Norwegian' (167 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2012/nb-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Dutch' (407 aligned documents, 0.4M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/nl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Polish' (381 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2012/pl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (408 aligned documents, 0.5M links, 7.4M tokens)" href="download.php?f=OpenSubtitles2012/pt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (435 aligned documents, 0.5M links, 7.6M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Romanian' (420 aligned documents, 0.5M links, 7.5M tokens)" href="download.php?f=OpenSubtitles2012/ro-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Russian' (186 aligned documents, 0.2M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2012/ru-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Sinhala' (4 aligned documents, 4.5k links, 76.0k tokens)" href="download.php?f=OpenSubtitles2012/si-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovak' (124 aligned documents, 0.1M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2012/sk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovenian' (365 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2012/sl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Albanian' (126 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2012/sq-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Serbian' (350 aligned documents, 0.4M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2012/sr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Swedish' (316 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2012/sv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Thai' (8 aligned documents, 8.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/th-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Turkish' (401 aligned documents, 0.5M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2012/tr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Ukrainian' (8 aligned documents, 8.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/uk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Urdu' (1.0k links, 21.3k tokens)" href="download.php?f=OpenSubtitles2012/ur-vi.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Vietnamese-Chinese (sample file)" href="OpenSubtitles2012/vi-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Vietnamese-Chinese (sample file)" href="OpenSubtitles2012/vi-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/vi.raw.tar.gz">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh.tar.gz">zh</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (0.9k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2012/ar-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (1.0k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2012/bg-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (1.0k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2012/cs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (0.9k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2012/da-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (1.0k links, 15.9k tokens)" href="download.php?f=OpenSubtitles2012/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (1.0k links, 17.3k tokens)" href="download.php?f=OpenSubtitles2012/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (1.0k links, 16.0k tokens)" href="download.php?f=OpenSubtitles2012/es-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (0.9k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2012/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (1.0k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2012/fr-zh.xml.gz">ces</a></td>
<th>zh</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (1.0k links, 15.7k tokens)" href="download.php?f=OpenSubtitles2012/he-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (1.0k links, 15.7k tokens)" href="download.php?f=OpenSubtitles2012/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (1.0k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2012/hu-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (1.0k links, 15.3k tokens)" href="download.php?f=OpenSubtitles2012/ms-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (1.0k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2012/nl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (0.9k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2012/pl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (1.0k links, 16.0k tokens)" href="download.php?f=OpenSubtitles2012/pt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (0.9k links, 16.0k tokens)" href="download.php?f=OpenSubtitles2012/pt_br-zh.xml.gz">ces</a></td>
<th>zh</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (1.0k links, 16.5k tokens)" href="download.php?f=OpenSubtitles2012/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (1.0k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2012/ru-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (1.0k links, 15.4k tokens)" href="download.php?f=OpenSubtitles2012/sl-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (1.0k links, 16.1k tokens)" href="download.php?f=OpenSubtitles2012/sv-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (0.9k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2012/tr-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Chinese-Chinese (sample file)" href="OpenSubtitles2012/zh-zh_cn_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh.raw.tar.gz">zh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh_cn.tar.gz">zh_cn</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (452 aligned documents, 0.5M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2012/ar-zh_cn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (605 aligned documents, 0.6M links, 9.2M tokens)" href="download.php?f=OpenSubtitles2012/bg-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (82 aligned documents, 77.9k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2012/bs-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (5 aligned documents, 4.1k links, 68.9k tokens)" href="download.php?f=OpenSubtitles2012/ca-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (610 aligned documents, 0.6M links, 9.6M tokens)" href="download.php?f=OpenSubtitles2012/cs-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (445 aligned documents, 0.4M links, 7.4M tokens)" href="download.php?f=OpenSubtitles2012/da-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (174 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2012/de-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (553 aligned documents, 0.5M links, 8.9M tokens)" href="download.php?f=OpenSubtitles2012/el-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (845 aligned documents, 0.8M links, 13.6M tokens)" href="download.php?f=OpenSubtitles2012/en-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (675 aligned documents, 0.6M links, 10.8M tokens)" href="download.php?f=OpenSubtitles2012/es-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (385 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2012/et-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Persian' (0.4k links, 6.2k tokens)" href="download.php?f=OpenSubtitles2012/fa-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (474 aligned documents, 0.5M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (557 aligned documents, 0.6M links, 9.3M tokens)" href="download.php?f=OpenSubtitles2012/fr-zh_cn.xml.gz">ces</a></td>
<th>zh_cn</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (553 aligned documents, 0.6M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2012/he-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (494 aligned documents, 0.5M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2012/hr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (489 aligned documents, 0.5M links, 7.6M tokens)" href="download.php?f=OpenSubtitles2012/hu-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (25 aligned documents, 29.7k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2012/is-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (310 aligned documents, 0.3M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2012/it-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (28 aligned documents, 24.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2012/ja-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (3 aligned documents, 3.5k links, 42.7k tokens)" href="download.php?f=OpenSubtitles2012/ko-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (43 aligned documents, 43.4k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2012/lt-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (16 aligned documents, 18.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/lv-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (87 aligned documents, 89.2k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2012/mk-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (202 aligned documents, 0.2M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2012/ms-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (203 aligned documents, 0.2M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2012/nb-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (636 aligned documents, 0.6M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2012/nl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (518 aligned documents, 0.5M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2012/pl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (593 aligned documents, 0.6M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2012/pt-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (709 aligned documents, 0.7M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-zh_cn.xml.gz">ces</a></td>
<th>zh_cn</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (592 aligned documents, 0.6M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2012/ro-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (223 aligned documents, 0.2M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2012/ru-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (5 aligned documents, 5.8k links, 82.6k tokens)" href="download.php?f=OpenSubtitles2012/si-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (187 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2012/sk-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (497 aligned documents, 0.5M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2012/sl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (105 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2012/sq-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (494 aligned documents, 0.5M links, 8.1M tokens)" href="download.php?f=OpenSubtitles2012/sr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (463 aligned documents, 0.4M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2012/sv-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Thai' (7 aligned documents, 6.9k links, 83.2k tokens)" href="download.php?f=OpenSubtitles2012/th-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (614 aligned documents, 0.6M links, 9.1M tokens)" href="download.php?f=OpenSubtitles2012/tr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (9 aligned documents, 8.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/uk-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Vietnamese' (83 aligned documents, 92.6k links, 1.7M tokens)" href="download.php?f=OpenSubtitles2012/vi-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Chinese' (1.0k links, 16.3k tokens)" href="download.php?f=OpenSubtitles2012/zh-zh_cn.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Chinese-Chinese (sample file)" href="OpenSubtitles2012/zh_cn-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh_cn.raw.tar.gz">zh_cn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh_tw.tar.gz">zh_tw</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (280 aligned documents, 0.3M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2012/ar-zh_tw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (341 aligned documents, 0.3M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2012/bg-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (43 aligned documents, 44.6k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/bs-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (4 aligned documents, 4.9k links, 73.8k tokens)" href="download.php?f=OpenSubtitles2012/ca-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (372 aligned documents, 0.3M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2012/cs-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (276 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2012/da-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (94 aligned documents, 95.9k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2012/de-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (347 aligned documents, 0.3M links, 4.9M tokens)" href="download.php?f=OpenSubtitles2012/el-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (464 aligned documents, 0.4M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2012/en-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (420 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2012/es-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (242 aligned documents, 0.2M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2012/et-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Basque' (0.6k links, 8.3k tokens)" href="download.php?f=OpenSubtitles2012/eu-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Persian' (0.5k links, 12.8k tokens)" href="download.php?f=OpenSubtitles2012/fa-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (309 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2012/fi-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (338 aligned documents, 0.3M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2012/fr-zh_tw.xml.gz">ces</a></td>
<th>zh_tw</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (340 aligned documents, 0.3M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2012/he-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (305 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2012/hr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (338 aligned documents, 0.3M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2012/hu-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (22 aligned documents, 27.6k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2012/is-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (164 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2012/it-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (24 aligned documents, 19.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2012/ja-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (1.1k links, 13.1k tokens)" href="download.php?f=OpenSubtitles2012/ko-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (22 aligned documents, 22.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2012/lt-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (6 aligned documents, 6.0k links, 81.2k tokens)" href="download.php?f=OpenSubtitles2012/lv-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (52 aligned documents, 48.0k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2012/mk-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (123 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2012/ms-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (114 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/nb-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (372 aligned documents, 0.3M links, 5.4M tokens)" href="download.php?f=OpenSubtitles2012/nl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (317 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2012/pl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (376 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2012/pt-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (407 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2012/pt_br-zh_tw.xml.gz">ces</a></td>
<th>zh_tw</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (364 aligned documents, 0.3M links, 5.4M tokens)" href="download.php?f=OpenSubtitles2012/ro-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (121 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2012/ru-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (3 aligned documents, 3.2k links, 43.9k tokens)" href="download.php?f=OpenSubtitles2012/si-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (126 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2012/sk-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (309 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2012/sl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (55 aligned documents, 61.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2012/sq-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (302 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2012/sr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (263 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2012/sv-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (377 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2012/tr-zh_tw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Vietnamese' (43 aligned documents, 47.4k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2012/vi-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Chinese' (190 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2012/zh_cn-zh_tw.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=OpenSubtitles2012/zh_tw.raw.tar.gz">zh_tw</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
<th>az</th>
<th>be</th>
<th>bg</th>
<th>bn</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th></th>
<th>gl</th>
<th>he</th>
<th>hi</th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th></th>
<th>ro</th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th>zh_cn</th>
<th>zh_tw</th>
<th></th></tr>
</table>
</div>

<!--
<p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.af.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ar.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized az plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.az.gz">az</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.be.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.bn.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.bs.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.da.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.et.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.eu.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.fa.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.gl.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.he.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.hi.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.hr.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.hu.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized id plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.id.gz">id</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.is.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ja.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.kk.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ko.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.lt.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.lv.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.mk.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ms plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ms.gz">ms</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.nb.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt_br plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.pt_br.gz">pt_br</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.si.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.sk.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.sl.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.sq.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.sr.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.sv.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.th.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.tr.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.uk.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.ur.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.vi.gz">vi</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.zh.gz">zh</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_cn plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.zh_cn.gz">zh_cn</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_tw plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.zh_tw.gz">zh_tw</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.af.gz">af</a>
</th><td>1</td> <td>7.5k</td> <td>0.7k</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Arabic (576 sentence pairs, 11.38k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ar.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Catalan (630 sentence pairs, 12.03k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ca.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-German (644 sentence pairs, 11.88k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-de.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Greek (613 sentence pairs, 11.90k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-el.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-English (620 sentence pairs, 11.35k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-en.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Spanish (580 sentence pairs, 10.77k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-es.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-French (639 sentence pairs, 12.10k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-fr.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Hebrew (575 sentence pairs, 10.97k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-he.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Hungarian (582 sentence pairs, 10.67k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-hu.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Italian (552 sentence pairs, 10.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-it.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Korean (576 sentence pairs, 10.42k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ko.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Malay (637 sentence pairs, 11.18k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ms.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Polish (630 sentence pairs, 10.91k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-pl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Portuguese (635 sentence pairs, 11.97k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-pt.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Romanian (633 sentence pairs, 12.05k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ro.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Russian (640 sentence pairs, 11.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-ru.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Vietnamese (633 sentence pairs, 13.63k words) - TMX format' href="download.php?f=OpenSubtitles2012/af-vi.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ar.gz">ar</a>
</th><td>22,813</td> <td>110.7M</td> <td>17.2M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Afrikaans (614 sentence pairs, 11.97k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ar.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Arabic-Bulgarian (4,826,780 sentence pairs, 64.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-bg.tmx.gz">4.8M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Arabic-Bosnian (730,523 sentence pairs, 9.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-bs.tmx.gz">0.7M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Arabic-Catalan (33,525 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ca.tmx.gz">33.5k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Arabic-Czech (4,758,328 sentence pairs, 62.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-cs.tmx.gz">4.8M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Arabic-Danish (2,460,351 sentence pairs, 33.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-da.tmx.gz">2.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Arabic-German (1,308,469 sentence pairs, 18.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-de.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Arabic-Greek (4,467,928 sentence pairs, 61.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-el.tmx.gz">4.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Arabic-English (6,253,776 sentence pairs, 89.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-en.tmx.gz">6.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Arabic-Spanish (5,442,749 sentence pairs, 75.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-es.tmx.gz">5.4M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Arabic-Estonian (2,646,149 sentence pairs, 34.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-et.tmx.gz">2.6M</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Arabic-Persian (3,449 sentence pairs, 92.50k words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-fa.tmx.gz">3.4k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Arabic-Finnish (3,493,745 sentence pairs, 41.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-fi.tmx.gz">3.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-French (3,916,576 sentence pairs, 55.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-fr.tmx.gz">3.9M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-Hebrew (4,371,282 sentence pairs, 53.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-he.tmx.gz">4.4M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Arabic-Croatian (3,952,705 sentence pairs, 51.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-hr.tmx.gz">4.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-Hungarian (4,397,667 sentence pairs, 55.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-hu.tmx.gz">4.4M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Indonesian (2,613 sentence pairs, 33.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-id.tmx.gz">2.6k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Arabic-Icelandic (226,564 sentence pairs, 3.03M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-is.tmx.gz">0.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Arabic-Italian (2,689,875 sentence pairs, 37.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-it.tmx.gz">2.7M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Arabic-Japanese (108,706 sentence pairs, 0.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Arabic-Korean (7,918 sentence pairs, 95.00k words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ko.tmx.gz">7.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Arabic-Lithuanian (247,478 sentence pairs, 2.98M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Arabic-Latvian (83,567 sentence pairs, 1.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-lv.tmx.gz">83.6k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Arabic-Macedonian (552,372 sentence pairs, 7.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Arabic-Malay (985,664 sentence pairs, 12.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ms.tmx.gz">1.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Arabic-BokmÃ¥l, Norwegian (1,020,084 sentence pairs, 13.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Arabic-Dutch (4,660,119 sentence pairs, 66.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-nl.tmx.gz">4.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-Polish (4,219,520 sentence pairs, 54.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-pl.tmx.gz">4.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Arabic-Portuguese (4,848,750 sentence pairs, 67.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-pt.tmx.gz">4.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Arabic-Portuguese (5,472,689 sentence pairs, 74.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-pt_br.tmx.gz">5.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Arabic-Romanian (5,527,482 sentence pairs, 77.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ro.tmx.gz">5.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Arabic-Russian (1,704,896 sentence pairs, 22.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ru.tmx.gz">1.7M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Arabic-Sinhala (24,842 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-si.tmx.gz">24.8k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Arabic-Slovak (1,239,092 sentence pairs, 16.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Arabic-Slovenian (3,671,915 sentence pairs, 46.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-sl.tmx.gz">3.7M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Arabic-Albanian (519,230 sentence pairs, 7.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Arabic-Serbian (3,709,664 sentence pairs, 49.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-sr.tmx.gz">3.7M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Arabic-Swedish (2,724,555 sentence pairs, 36.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-sv.tmx.gz">2.7M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Arabic-Thai (25,832 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-th.tmx.gz">25.8k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Arabic-Turkish (4,962,654 sentence pairs, 60.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-tr.tmx.gz">5.0M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Arabic-Ukrainian (37,168 sentence pairs, 0.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-uk.tmx.gz">37.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Urdu (2,166 sentence pairs, 33.47k words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-ur.tmx.gz">2.2k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Arabic-Vietnamese (314,051 sentence pairs, 4.92M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Chinese (829 sentence pairs, 6.70k words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-zh.tmx.gz">0.8k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Arabic-Chinese (400,494 sentence pairs, 3.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Arabic-Chinese (237,869 sentence pairs, 1.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/ar-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized az plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.az.gz">az</a>
</th><td>1</td> <td>0.2k</td> <td>34</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Czech (34 sentence pairs, 0.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-cs.tmx.gz">34</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-German (32 sentence pairs, 0.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-de.tmx.gz">32</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Spanish (31 sentence pairs, 0.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-es.tmx.gz">31</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-French (34 sentence pairs, 0.24k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-fr.tmx.gz">34</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Hebrew (24 sentence pairs, 0.20k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-he.tmx.gz">24</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Hungarian (29 sentence pairs, 0.20k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-hu.tmx.gz">29</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Polish (27 sentence pairs, 0.21k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-pl.tmx.gz">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Slovak (34 sentence pairs, 0.20k words) - TMX format' href="download.php?f=OpenSubtitles2012/az-sk.tmx.gz">34</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.be.gz">be</a>
</th><td>1</td> <td>7.0k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Belarusian-Spanish (987 sentence pairs, 10.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/be-es.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.bg.gz">bg</a>
</th><td>47,610</td> <td>264.4M</td> <td>39.7M</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Arabic (5,385,311 sentence pairs, 68.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-bg.txt.zip">5.4M</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bulgarian-Bosnian (1,296,731 sentence pairs, 15.59M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-bs.tmx.gz">1.3M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Bulgarian-Catalan (45,888 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ca.tmx.gz">45.9k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-Czech (8,969,146 sentence pairs, 108.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-cs.tmx.gz">9.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Danish (3,817,260 sentence pairs, 48.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-da.tmx.gz">3.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Bulgarian-German (2,501,509 sentence pairs, 32.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-de.tmx.gz">2.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-Greek (8,455,033 sentence pairs, 112.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-el.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (13,675,122 sentence pairs, 184.92M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-en.tmx.gz">13.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Spanish (11,244,161 sentence pairs, 149.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-es.tmx.gz">11.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Estonian (3,931,602 sentence pairs, 46.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-et.tmx.gz">3.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Basque (647 sentence pairs, 6.39k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Bulgarian-Persian (3,304 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-fa.tmx.gz">3.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Finnish (6,039,652 sentence pairs, 67.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-fi.tmx.gz">6.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bulgarian-French (7,767,571 sentence pairs, 103.59M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-fr.tmx.gz">7.8M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Bulgarian-Hebrew (6,753,517 sentence pairs, 89.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-he.tmx.gz">6.8M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Bulgarian-Croatian (7,386,580 sentence pairs, 90.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-hr.tmx.gz">7.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Hungarian (8,442,013 sentence pairs, 98.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-hu.tmx.gz">8.4M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Bulgarian-Indonesian (4,147 sentence pairs, 75.40k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-id.tmx.gz">4.1k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Icelandic (391,062 sentence pairs, 4.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-is.tmx.gz">0.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Italian (5,162,025 sentence pairs, 67.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-it.tmx.gz">5.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Bulgarian-Japanese (135,785 sentence pairs, 1.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Kazakh (969 sentence pairs, 9.59k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-kk.tmx.gz">1.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Bulgarian-Korean (9,163 sentence pairs, 98.15k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ko.tmx.gz">9.2k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bulgarian-Lithuanian (344,148 sentence pairs, 3.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Bulgarian-Latvian (108,234 sentence pairs, 1.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bulgarian-Macedonian (731,050 sentence pairs, 8.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bulgarian-Malay (1,243,311 sentence pairs, 14.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ms.tmx.gz">1.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (1,606,861 sentence pairs, 19.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Dutch (8,968,499 sentence pairs, 119.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-nl.tmx.gz">9.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bulgarian-Polish (8,647,922 sentence pairs, 104.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-pl.tmx.gz">8.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Portuguese (9,083,714 sentence pairs, 117.43M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-pt.tmx.gz">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Portuguese (11,210,215 sentence pairs, 144.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-pt_br.tmx.gz">11.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Romanian (11,703,578 sentence pairs, 153.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ro.tmx.gz">11.7M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Bulgarian-Russian (2,967,971 sentence pairs, 36.55M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ru.tmx.gz">3.0M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Bulgarian-Sinhala (24,393 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-si.tmx.gz">24.4k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Bulgarian-Slovak (2,076,930 sentence pairs, 25.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-sk.tmx.gz">2.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Slovenian (6,238,569 sentence pairs, 73.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-sl.tmx.gz">6.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Albanian (630,657 sentence pairs, 7.84M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Bulgarian-Serbian (7,144,302 sentence pairs, 88.44M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-sr.tmx.gz">7.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Bulgarian-Swedish (4,436,651 sentence pairs, 56.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-sv.tmx.gz">4.4M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Bulgarian-Thai (25,348 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-th.tmx.gz">25.3k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Bulgarian-Turkish (9,587,361 sentence pairs, 109.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-tr.tmx.gz">9.6M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Bulgarian-Ukrainian (57,178 sentence pairs, 0.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-uk.tmx.gz">57.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bulgarian-Urdu (1,796 sentence pairs, 31.98k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bulgarian-Vietnamese (365,435 sentence pairs, 5.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Chinese (881 sentence pairs, 7.46k words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bulgarian-Chinese (487,278 sentence pairs, 3.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bulgarian-Chinese (271,839 sentence pairs, 2.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/bg-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.bn.gz">bn</a>
</th><td>1</td> <td>6.3k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bengali-Persian (282 sentence pairs, 10.74k words) - TMX format' href="download.php?f=OpenSubtitles2012/bn-fa.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.bs.gz">bs</a>
</th><td>4,245</td> <td>23.9M</td> <td>3.7M</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bosnian-Arabic (771,573 sentence pairs, 9.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-bs.txt.zip">0.8M</a>
</td><td></td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Bulgarian (1,458,818 sentence pairs, 16.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-bs.txt.zip">1.5M</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Bosnian-Catalan (5,938 sentence pairs, 71.63k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ca.tmx.gz">5.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Czech (1,274,166 sentence pairs, 14.84M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-cs.tmx.gz">1.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Danish (718,393 sentence pairs, 9.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-da.tmx.gz">0.7M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bosnian-German (354,971 sentence pairs, 4.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-de.tmx.gz">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bosnian-Greek (1,084,003 sentence pairs, 13.77M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-el.tmx.gz">1.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bosnian-English (1,567,438 sentence pairs, 20.08M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-en.tmx.gz">1.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bosnian-Spanish (1,385,099 sentence pairs, 17.46M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-es.tmx.gz">1.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bosnian-Estonian (694,999 sentence pairs, 7.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-et.tmx.gz">0.7M</a>
</td><td></td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bosnian-Finnish (941,230 sentence pairs, 10.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-fi.tmx.gz">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-French (964,414 sentence pairs, 12.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-fr.tmx.gz">1.0M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Hebrew (939,308 sentence pairs, 12.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-he.tmx.gz">0.9M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Croatian (793,847 sentence pairs, 9.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-hr.tmx.gz">0.8M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Bosnian-Hungarian (1,075,893 sentence pairs, 12.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-hu.tmx.gz">1.1M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bosnian-Indonesian (1,585 sentence pairs, 53.01k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-id.tmx.gz">1.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Bosnian-Icelandic (62,063 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-is.tmx.gz">62.1k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Bosnian-Italian (652,358 sentence pairs, 8.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-it.tmx.gz">0.7M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Bosnian-Japanese (24,656 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ja.tmx.gz">24.7k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bosnian-Korean (3,204 sentence pairs, 36.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ko.tmx.gz">3.2k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Bosnian-Lithuanian (78,820 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-lt.tmx.gz">78.8k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Bosnian-Latvian (12,092 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-lv.tmx.gz">12.1k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Bosnian-Macedonian (197,813 sentence pairs, 2.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bosnian-Malay (192,517 sentence pairs, 2.28M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Bosnian-BokmÃ¥l, Norwegian (271,349 sentence pairs, 3.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Dutch (1,245,480 sentence pairs, 16.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-nl.tmx.gz">1.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Polish (1,259,915 sentence pairs, 14.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-pl.tmx.gz">1.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Portuguese (1,261,666 sentence pairs, 15.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-pt.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bosnian-Portuguese (1,413,440 sentence pairs, 17.43M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-pt_br.tmx.gz">1.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Bosnian-Romanian (1,471,226 sentence pairs, 18.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ro.tmx.gz">1.5M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bosnian-Russian (393,294 sentence pairs, 4.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-ru.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Sinhala (538 sentence pairs, 5.78k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-si.tmx.gz">0.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Bosnian-Slovak (348,306 sentence pairs, 4.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Slovenian (1,024,439 sentence pairs, 11.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Bosnian-Albanian (128,675 sentence pairs, 1.55M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Serbian (974,723 sentence pairs, 11.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-sr.tmx.gz">1.0M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Swedish (758,252 sentence pairs, 9.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-sv.tmx.gz">0.8M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bosnian-Thai (1,885 sentence pairs, 15.50k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-th.tmx.gz">1.9k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bosnian-Turkish (1,253,780 sentence pairs, 13.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-tr.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Bosnian-Ukrainian (6,258 sentence pairs, 67.73k words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-uk.tmx.gz">6.3k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Bosnian-Vietnamese (69,012 sentence pairs, 0.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-vi.tmx.gz">69.0k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bosnian-Chinese (65,461 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-zh_cn.tmx.gz">65.5k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Bosnian-Chinese (37,779 sentence pairs, 0.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/bs-zh_tw.tmx.gz">37.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ca.gz">ca</a>
</th><td>156</td> <td>1.1M</td> <td>0.1M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Afrikaans (669 sentence pairs, 12.59k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ca.txt.zip">0.7k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Catalan-Arabic (34,215 sentence pairs, 0.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ca.txt.zip">34.2k</a>
</td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Catalan-Bulgarian (47,406 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ca.txt.zip">47.4k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Bosnian (6,092 sentence pairs, 72.11k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ca.txt.zip">6.1k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Catalan-Czech (53,813 sentence pairs, 0.64M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-cs.tmx.gz">53.8k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Catalan-Danish (37,001 sentence pairs, 0.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-da.tmx.gz">37.0k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Catalan-German (28,726 sentence pairs, 0.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-de.tmx.gz">28.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Catalan-Greek (50,435 sentence pairs, 0.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-el.tmx.gz">50.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Catalan-English (79,920 sentence pairs, 1.03M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-en.tmx.gz">79.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Catalan-Spanish (88,825 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-es.tmx.gz">88.8k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Catalan-Estonian (36,011 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-et.tmx.gz">36.0k</a>
</td><td></td><td></td><td bgcolor="#fff7ef"><a rel="nofollow" title='Catalan-Finnish (45,598 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-fi.tmx.gz">45.6k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-French (60,330 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-fr.tmx.gz">60.3k</a>
</td><td></td><td bgcolor="#fff7ef"><a rel="nofollow" title='Catalan-Hebrew (39,218 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-he.tmx.gz">39.2k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Catalan-Croatian (45,844 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-hr.tmx.gz">45.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Catalan-Hungarian (52,082 sentence pairs, 0.59M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-hu.tmx.gz">52.1k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Catalan-Icelandic (8,475 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-is.tmx.gz">8.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Catalan-Italian (40,498 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-it.tmx.gz">40.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Japanese (4,972 sentence pairs, 50.40k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-ja.tmx.gz">5.0k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Korean (1,650 sentence pairs, 24.54k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-ko.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Catalan-Lithuanian (6,394 sentence pairs, 70.40k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-lt.tmx.gz">6.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Latvian (2,561 sentence pairs, 23.98k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-lv.tmx.gz">2.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Catalan-Macedonian (8,951 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-mk.tmx.gz">9.0k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Catalan-Malay (15,340 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-ms.tmx.gz">15.3k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Catalan-BokmÃ¥l, Norwegian (21,728 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-nb.tmx.gz">21.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Catalan-Dutch (54,917 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-nl.tmx.gz">54.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Catalan-Polish (53,749 sentence pairs, 0.64M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-pl.tmx.gz">53.7k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Catalan-Portuguese (51,402 sentence pairs, 0.64M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-pt.tmx.gz">51.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Catalan-Portuguese (57,311 sentence pairs, 0.70M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-pt_br.tmx.gz">57.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-Romanian (59,801 sentence pairs, 0.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-ro.tmx.gz">59.8k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Catalan-Russian (31,809 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-ru.tmx.gz">31.8k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Catalan-Slovak (18,448 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-sk.tmx.gz">18.4k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Catalan-Slovenian (42,247 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-sl.tmx.gz">42.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Albanian (10,150 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-sq.tmx.gz">10.2k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Catalan-Serbian (42,697 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-sr.tmx.gz">42.7k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Catalan-Swedish (37,497 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-sv.tmx.gz">37.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Catalan-Thai (1,761 sentence pairs, 17.31k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-th.tmx.gz">1.8k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Catalan-Turkish (49,436 sentence pairs, 0.54M words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-tr.tmx.gz">49.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Ukrainian (809 sentence pairs, 9.99k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-uk.tmx.gz">0.8k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Catalan-Vietnamese (5,507 sentence pairs, 82.92k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-vi.tmx.gz">5.5k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Catalan-Chinese (3,544 sentence pairs, 30.71k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-zh_cn.tmx.gz">3.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Catalan-Chinese (4,335 sentence pairs, 35.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/ca-zh_tw.tmx.gz">4.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.cs.gz">cs</a>
</th><td>74,779</td> <td>419.1M</td> <td>65.9M</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Arabic (5,444,927 sentence pairs, 68.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-cs.txt.zip">5.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Azerbaijani (34 sentence pairs, 0.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-cs.txt.zip">34</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Czech-Bulgarian (11,508,124 sentence pairs, 127.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-cs.txt.zip">11.5M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Czech-Bosnian (1,464,092 sentence pairs, 15.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-cs.txt.zip">1.5M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Czech-Catalan (59,981 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-cs.txt.zip">60.0k</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Czech-Danish (4,198,408 sentence pairs, 51.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-da.tmx.gz">4.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Czech-German (2,800,353 sentence pairs, 34.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-de.tmx.gz">2.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-Greek (8,476,500 sentence pairs, 108.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-el.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (14,680,777 sentence pairs, 192.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-en.tmx.gz">14.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Spanish (12,280,912 sentence pairs, 157.98M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-es.tmx.gz">12.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Czech-Estonian (4,016,199 sentence pairs, 45.64M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-et.tmx.gz">4.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Basque (612 sentence pairs, 6.16k words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Czech-Persian (2,911 sentence pairs, 82.53k words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-fa.tmx.gz">2.9k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Finnish (6,401,867 sentence pairs, 68.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-fi.tmx.gz">6.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-French (8,194,172 sentence pairs, 105.46M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-fr.tmx.gz">8.2M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Hebrew (6,628,320 sentence pairs, 86.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-he.tmx.gz">6.6M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Czech-Croatian (7,566,014 sentence pairs, 88.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-hr.tmx.gz">7.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Hungarian (8,875,032 sentence pairs, 100.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-hu.tmx.gz">8.9M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Czech-Indonesian (5,313 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-id.tmx.gz">5.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-Icelandic (464,060 sentence pairs, 5.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-is.tmx.gz">0.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Czech-Italian (5,083,137 sentence pairs, 64.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-it.tmx.gz">5.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Czech-Japanese (139,431 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Czech-Korean (11,836 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ko.tmx.gz">11.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Czech-Lithuanian (370,518 sentence pairs, 3.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Czech-Latvian (118,174 sentence pairs, 1.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Czech-Macedonian (732,893 sentence pairs, 8.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Czech-Malay (1,278,010 sentence pairs, 14.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ms.tmx.gz">1.3M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (1,841,421 sentence pairs, 21.80M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-nb.tmx.gz">1.8M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Czech-Dutch (9,251,173 sentence pairs, 119.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-nl.tmx.gz">9.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-Polish (9,487,052 sentence pairs, 110.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-pl.tmx.gz">9.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Czech-Portuguese (9,529,049 sentence pairs, 118.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-pt.tmx.gz">9.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Portuguese (11,326,823 sentence pairs, 141.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-pt_br.tmx.gz">11.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Romanian (11,239,303 sentence pairs, 141.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ro.tmx.gz">11.2M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Czech-Russian (2,987,609 sentence pairs, 35.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ru.tmx.gz">3.0M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Czech-Sinhala (19,770 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-si.tmx.gz">19.8k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Czech-Slovak (2,220,149 sentence pairs, 26.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-sk.tmx.gz">2.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Czech-Slovenian (6,444,941 sentence pairs, 73.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-sl.tmx.gz">6.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Czech-Albanian (651,353 sentence pairs, 7.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Serbian (7,154,099 sentence pairs, 85.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-sr.tmx.gz">7.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Czech-Swedish (4,854,574 sentence pairs, 59.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-sv.tmx.gz">4.9M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Czech-Thai (27,182 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-th.tmx.gz">27.2k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Turkish (9,622,514 sentence pairs, 105.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-tr.tmx.gz">9.6M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Czech-Ukrainian (83,022 sentence pairs, 0.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-uk.tmx.gz">83.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Czech-Urdu (1,816 sentence pairs, 31.91k words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-Vietnamese (372,445 sentence pairs, 5.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Chinese (903 sentence pairs, 7.95k words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Czech-Chinese (515,887 sentence pairs, 4.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Czech-Chinese (301,125 sentence pairs, 2.43M words) - TMX format' href="download.php?f=OpenSubtitles2012/cs-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.da.gz">da</a>
</th><td>13,683</td> <td>91.4M</td> <td>13.1M</td><td></td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Danish-Arabic (2,734,964 sentence pairs, 36.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-da.txt.zip">2.7M</a>
</td><td></td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-Bulgarian (4,593,001 sentence pairs, 54.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-da.txt.zip">4.6M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Danish-Bosnian (791,659 sentence pairs, 9.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-da.txt.zip">0.8M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Danish-Catalan (39,737 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-da.txt.zip">39.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Czech (5,386,728 sentence pairs, 61.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-da.txt.zip">5.4M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Danish-German (1,429,476 sentence pairs, 18.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-de.tmx.gz">1.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Danish-Greek (3,559,253 sentence pairs, 47.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-el.tmx.gz">3.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Danish-English (5,209,500 sentence pairs, 71.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-en.tmx.gz">5.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Danish-Spanish (4,697,712 sentence pairs, 62.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-es.tmx.gz">4.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Danish-Estonian (2,525,642 sentence pairs, 30.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-et.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Basque (633 sentence pairs, 6.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Danish-Persian (2,670 sentence pairs, 65.35k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-fa.tmx.gz">2.7k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Finnish (3,952,651 sentence pairs, 45.05M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-fi.tmx.gz">4.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Danish-French (3,540,795 sentence pairs, 47.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-fr.tmx.gz">3.5M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Hebrew (3,156,771 sentence pairs, 42.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-he.tmx.gz">3.2M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Croatian (3,480,807 sentence pairs, 43.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-hr.tmx.gz">3.5M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Hungarian (3,625,653 sentence pairs, 42.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-hu.tmx.gz">3.6M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Danish-Indonesian (4,018 sentence pairs, 86.87k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-id.tmx.gz">4.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Danish-Icelandic (407,834 sentence pairs, 5.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-is.tmx.gz">0.4M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Danish-Italian (2,172,702 sentence pairs, 28.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-it.tmx.gz">2.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Danish-Japanese (103,611 sentence pairs, 1.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Kazakh (1,058 sentence pairs, 10.42k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Danish-Korean (6,715 sentence pairs, 79.75k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ko.tmx.gz">6.7k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Danish-Lithuanian (283,340 sentence pairs, 3.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Danish-Latvian (94,341 sentence pairs, 1.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-lv.tmx.gz">94.3k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Danish-Macedonian (576,374 sentence pairs, 7.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Malay (869,244 sentence pairs, 10.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ms.tmx.gz">0.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (1,914,284 sentence pairs, 23.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-nb.tmx.gz">1.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Dutch (4,453,056 sentence pairs, 60.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-nl.tmx.gz">4.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Polish (4,079,575 sentence pairs, 50.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-pl.tmx.gz">4.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Portuguese (4,400,357 sentence pairs, 57.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-pt.tmx.gz">4.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Portuguese (4,417,116 sentence pairs, 57.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-pt_br.tmx.gz">4.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Romanian (4,498,665 sentence pairs, 59.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ro.tmx.gz">4.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Russian (1,204,125 sentence pairs, 14.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ru.tmx.gz">1.2M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Danish-Sinhala (15,074 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-si.tmx.gz">15.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Danish-Slovak (1,068,476 sentence pairs, 13.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Slovenian (3,554,942 sentence pairs, 43.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-sl.tmx.gz">3.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Danish-Albanian (481,577 sentence pairs, 6.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Serbian (3,310,524 sentence pairs, 42.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-sr.tmx.gz">3.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Swedish (3,509,079 sentence pairs, 45.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-sv.tmx.gz">3.5M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Danish-Thai (20,765 sentence pairs, 0.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-th.tmx.gz">20.8k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Danish-Turkish (4,027,440 sentence pairs, 46.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-tr.tmx.gz">4.0M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Danish-Ukrainian (43,563 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-uk.tmx.gz">43.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Urdu (702 sentence pairs, 13.52k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Danish-Vietnamese (303,445 sentence pairs, 4.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Chinese (902 sentence pairs, 8.14k words) - TMX format' href="download.php?f=OpenSubtitles2012/da-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Danish-Chinese (382,662 sentence pairs, 3.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Danish-Chinese (230,880 sentence pairs, 2.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/da-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.de.gz">de</a>
</th><td>10,655</td> <td>66.1M</td> <td>9.2M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Afrikaans (687 sentence pairs, 12.48k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-de.txt.zip">0.7k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='German-Arabic (1,381,554 sentence pairs, 18.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-de.txt.zip">1.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Azerbaijani (32 sentence pairs, 0.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-de.txt.zip">32</a>
</td><td></td><td bgcolor="#d2ffcd"><a rel="nofollow" title='German-Bulgarian (2,829,356 sentence pairs, 34.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-de.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='German-Bosnian (379,864 sentence pairs, 4.61M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-de.txt.zip">0.4M</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='German-Catalan (29,661 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-de.txt.zip">29.7k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='German-Czech (3,414,987 sentence pairs, 39.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-de.txt.zip">3.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='German-Danish (1,676,219 sentence pairs, 20.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-de.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='German-Greek (2,510,764 sentence pairs, 33.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-el.tmx.gz">2.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='German-English (4,166,070 sentence pairs, 56.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-en.tmx.gz">4.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='German-Spanish (3,532,772 sentence pairs, 47.80M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-es.tmx.gz">3.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Estonian (1,211,569 sentence pairs, 14.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-et.tmx.gz">1.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Basque (559 sentence pairs, 6.04k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Persian (1,765 sentence pairs, 34.53k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-fa.tmx.gz">1.8k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='German-Finnish (2,035,099 sentence pairs, 23.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-fi.tmx.gz">2.0M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='German-French (3,089,369 sentence pairs, 41.73M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-fr.tmx.gz">3.1M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='German-Hebrew (1,870,318 sentence pairs, 25.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-he.tmx.gz">1.9M</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='German-Croatian (2,213,331 sentence pairs, 27.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-hr.tmx.gz">2.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='German-Hungarian (2,673,390 sentence pairs, 32.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-hu.tmx.gz">2.7M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='German-Indonesian (3,628 sentence pairs, 89.25k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-id.tmx.gz">3.6k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='German-Icelandic (279,653 sentence pairs, 3.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-is.tmx.gz">0.3M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='German-Italian (2,284,734 sentence pairs, 30.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-it.tmx.gz">2.3M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='German-Japanese (35,287 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ja.tmx.gz">35.3k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='German-Korean (3,968 sentence pairs, 58.82k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ko.tmx.gz">4.0k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='German-Lithuanian (137,422 sentence pairs, 1.54M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='German-Latvian (58,240 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-lv.tmx.gz">58.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='German-Macedonian (230,577 sentence pairs, 2.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='German-Malay (343,229 sentence pairs, 4.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ms.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (994,754 sentence pairs, 12.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='German-Dutch (2,892,053 sentence pairs, 39.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-nl.tmx.gz">2.9M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='German-Polish (2,633,118 sentence pairs, 32.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-pl.tmx.gz">2.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='German-Portuguese (2,716,646 sentence pairs, 35.61M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-pt.tmx.gz">2.7M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='German-Portuguese (3,143,491 sentence pairs, 41.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-pt_br.tmx.gz">3.1M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='German-Romanian (2,941,343 sentence pairs, 38.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ro.tmx.gz">2.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Russian (1,144,609 sentence pairs, 14.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ru.tmx.gz">1.1M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='German-Sinhala (3,175 sentence pairs, 41.13k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-si.tmx.gz">3.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='German-Slovak (575,218 sentence pairs, 7.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='German-Slovenian (1,820,882 sentence pairs, 22.08M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='German-Albanian (162,727 sentence pairs, 2.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='German-Serbian (2,047,937 sentence pairs, 25.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-sr.tmx.gz">2.0M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='German-Swedish (1,780,651 sentence pairs, 23.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-sv.tmx.gz">1.8M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='German-Thai (8,410 sentence pairs, 93.18k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-th.tmx.gz">8.4k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Turkish (2,732,253 sentence pairs, 31.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-tr.tmx.gz">2.7M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='German-Ukrainian (28,665 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-uk.tmx.gz">28.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Urdu (1,226 sentence pairs, 19.20k words) - TMX format' href="download.php?f=OpenSubtitles2012/de-ur.tmx.gz">1.2k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='German-Vietnamese (123,722 sentence pairs, 1.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-vi.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='German-Chinese (150,777 sentence pairs, 1.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='German-Chinese (82,584 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/de-zh_tw.tmx.gz">82.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.el.gz">el</a>
</th><td>46,384</td> <td>271.1M</td> <td>37.8M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Afrikaans (654 sentence pairs, 12.50k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-el.txt.zip">0.7k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Arabic (4,979,737 sentence pairs, 66.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-el.txt.zip">5.0M</a>
</td><td></td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Bulgarian (10,250,145 sentence pairs, 126.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-el.txt.zip">10.3M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Bosnian (1,192,270 sentence pairs, 14.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-el.txt.zip">1.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Greek-Catalan (54,558 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-el.txt.zip">54.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Czech (11,108,367 sentence pairs, 130.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-el.txt.zip">11.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Danish (4,301,345 sentence pairs, 54.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-el.txt.zip">4.3M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Greek-German (2,893,059 sentence pairs, 36.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-el.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (12,984,773 sentence pairs, 186.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-en.tmx.gz">13.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (11,273,647 sentence pairs, 157.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-es.tmx.gz">11.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-Estonian (3,458,323 sentence pairs, 42.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-et.tmx.gz">3.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Basque (593 sentence pairs, 6.34k words) - TMX format' href="download.php?f=OpenSubtitles2012/el-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Greek-Persian (4,253 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-fa.tmx.gz">4.3k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Finnish (5,561,557 sentence pairs, 64.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-fi.tmx.gz">5.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Greek-French (7,990,670 sentence pairs, 112.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-fr.tmx.gz">8.0M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Hebrew (6,238,865 sentence pairs, 85.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-he.tmx.gz">6.2M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Croatian (6,916,586 sentence pairs, 88.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-hr.tmx.gz">6.9M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Hungarian (8,058,999 sentence pairs, 99.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-hu.tmx.gz">8.1M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Greek-Indonesian (4,842 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-id.tmx.gz">4.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Greek-Icelandic (364,412 sentence pairs, 4.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-is.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Italian (5,149,137 sentence pairs, 71.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-it.tmx.gz">5.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Greek-Japanese (135,437 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Greek-Korean (10,389 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ko.tmx.gz">10.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Greek-Lithuanian (294,547 sentence pairs, 3.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Greek-Latvian (96,933 sentence pairs, 1.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-lv.tmx.gz">96.9k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Greek-Macedonian (644,608 sentence pairs, 8.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Malay (1,127,518 sentence pairs, 14.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (1,571,194 sentence pairs, 20.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Dutch (8,825,783 sentence pairs, 123.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-nl.tmx.gz">8.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Polish (7,755,454 sentence pairs, 98.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-pl.tmx.gz">7.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Portuguese (8,983,980 sentence pairs, 122.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-pt.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (11,015,902 sentence pairs, 150.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-pt_br.tmx.gz">11.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Romanian (10,395,161 sentence pairs, 143.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ro.tmx.gz">10.4M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Greek-Russian (2,670,562 sentence pairs, 34.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ru.tmx.gz">2.7M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Greek-Sinhala (16,493 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-si.tmx.gz">16.5k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Greek-Slovak (1,808,233 sentence pairs, 23.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-sk.tmx.gz">1.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Slovenian (5,505,558 sentence pairs, 68.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-sl.tmx.gz">5.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Greek-Albanian (605,295 sentence pairs, 7.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Serbian (6,637,420 sentence pairs, 86.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-sr.tmx.gz">6.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Swedish (4,225,708 sentence pairs, 56.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-sv.tmx.gz">4.2M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Greek-Thai (26,115 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-th.tmx.gz">26.1k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Turkish (8,814,110 sentence pairs, 106.06M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-tr.tmx.gz">8.8M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Greek-Ukrainian (62,185 sentence pairs, 0.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-uk.tmx.gz">62.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Greek-Urdu (1,914 sentence pairs, 33.03k words) - TMX format' href="download.php?f=OpenSubtitles2012/el-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Greek-Vietnamese (349,585 sentence pairs, 5.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Chinese (815 sentence pairs, 7.64k words) - TMX format' href="download.php?f=OpenSubtitles2012/el-zh.tmx.gz">0.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Greek-Chinese (452,946 sentence pairs, 3.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Greek-Chinese (270,749 sentence pairs, 2.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/el-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.en.gz">en</a>
</th><td>217,190</td> <td>1.5G</td> <td>202.7M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Afrikaans (656 sentence pairs, 11.88k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-en.txt.zip">0.7k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='English-Arabic (7,604,068 sentence pairs, 103.32M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-en.txt.zip">7.6M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (18,840,338 sentence pairs, 226.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-en.txt.zip">18.8M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Bosnian (1,926,515 sentence pairs, 22.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-en.txt.zip">1.9M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='English-Catalan (91,034 sentence pairs, 1.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-en.txt.zip">91.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (24,118,209 sentence pairs, 276.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-en.txt.zip">24.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Danish (7,388,329 sentence pairs, 91.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-en.txt.zip">7.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-German (5,633,148 sentence pairs, 69.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-en.txt.zip">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (18,337,722 sentence pairs, 236.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-en.txt.zip">18.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (24,929,151 sentence pairs, 360.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-es.tmx.gz">24.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='English-Estonian (4,742,614 sentence pairs, 59.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-et.tmx.gz">4.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Basque (650 sentence pairs, 6.92k words) - TMX format' href="download.php?f=OpenSubtitles2012/en-eu.tmx.gz">0.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='English-Persian (8,431 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-fa.tmx.gz">8.4k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Finnish (8,790,802 sentence pairs, 107.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-fi.tmx.gz">8.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (14,850,331 sentence pairs, 212.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-fr.tmx.gz">14.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Galician (114 sentence pairs, 1.44k words) - TMX format' href="download.php?f=OpenSubtitles2012/en-gl.tmx.gz">0.1k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hebrew (9,347,879 sentence pairs, 136.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-he.tmx.gz">9.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (10,793,524 sentence pairs, 142.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-hr.tmx.gz">10.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hungarian (13,744,875 sentence pairs, 174.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-hu.tmx.gz">13.7M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='English-Indonesian (14,907 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-id.tmx.gz">14.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='English-Icelandic (541,347 sentence pairs, 6.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-is.tmx.gz">0.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Italian (8,459,942 sentence pairs, 119.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-it.tmx.gz">8.5M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='English-Japanese (183,155 sentence pairs, 1.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Kazakh (1,071 sentence pairs, 11.37k words) - TMX format' href="download.php?f=OpenSubtitles2012/en-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='English-Korean (13,740 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ko.tmx.gz">13.7k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Lithuanian (412,825 sentence pairs, 4.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='English-Latvian (139,664 sentence pairs, 1.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Macedonian (777,688 sentence pairs, 9.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Malay (1,770,428 sentence pairs, 22.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ms.tmx.gz">1.8M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (2,308,546 sentence pairs, 30.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-nb.tmx.gz">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (14,529,013 sentence pairs, 209.54M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-nl.tmx.gz">14.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Polish (14,476,664 sentence pairs, 189.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-pl.tmx.gz">14.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (15,657,782 sentence pairs, 218.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-pt.tmx.gz">15.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (21,754,259 sentence pairs, 304.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-pt_br.tmx.gz">21.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Romanian (18,376,355 sentence pairs, 257.80M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ro.tmx.gz">18.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='English-Russian (4,690,388 sentence pairs, 61.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ru.tmx.gz">4.7M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='English-Sinhala (27,811 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-si.tmx.gz">27.8k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='English-Slovak (2,847,471 sentence pairs, 36.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-sk.tmx.gz">2.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='English-Slovenian (8,478,635 sentence pairs, 108.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-sl.tmx.gz">8.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='English-Albanian (723,880 sentence pairs, 9.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Serbian (10,416,187 sentence pairs, 138.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-sr.tmx.gz">10.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Swedish (6,422,112 sentence pairs, 88.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-sv.tmx.gz">6.4M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='English-Thai (30,156 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-th.tmx.gz">30.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (14,241,178 sentence pairs, 174.98M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-tr.tmx.gz">14.2M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='English-Ukrainian (103,090 sentence pairs, 1.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Urdu (1,980 sentence pairs, 36.01k words) - TMX format' href="download.php?f=OpenSubtitles2012/en-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Vietnamese (437,076 sentence pairs, 6.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Chinese (884 sentence pairs, 8.50k words) - TMX format' href="download.php?f=OpenSubtitles2012/en-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Chinese (669,307 sentence pairs, 6.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-zh_cn.tmx.gz">0.7M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='English-Chinese (367,448 sentence pairs, 3.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/en-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.es.gz">es</a>
</th><td>103,176</td> <td>662.1M</td> <td>90.4M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Afrikaans (613 sentence pairs, 11.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-es.txt.zip">0.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-Arabic (6,184,577 sentence pairs, 82.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-es.txt.zip">6.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Azerbaijani (31 sentence pairs, 0.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-es.txt.zip">31</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Belarusian (991 sentence pairs, 10.25k words) - Moses format' href="download.php?f=OpenSubtitles2012/be-es.txt.zip">1.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Bulgarian (13,941,866 sentence pairs, 169.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-es.txt.zip">13.9M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Spanish-Bosnian (1,576,119 sentence pairs, 18.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-es.txt.zip">1.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Spanish-Catalan (102,233 sentence pairs, 1.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-es.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Czech (16,547,526 sentence pairs, 192.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-es.txt.zip">16.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-Danish (5,958,660 sentence pairs, 73.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-es.txt.zip">6.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-German (4,185,963 sentence pairs, 52.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-es.txt.zip">4.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (14,118,056 sentence pairs, 181.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-es.txt.zip">14.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (39,836,939 sentence pairs, 498.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-es.txt.zip">39.8M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Estonian (4,251,256 sentence pairs, 52.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-et.tmx.gz">4.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Basque (632 sentence pairs, 6.33k words) - TMX format' href="download.php?f=OpenSubtitles2012/es-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Spanish-Persian (6,073 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-fa.tmx.gz">6.1k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-Finnish (7,302,777 sentence pairs, 86.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-fi.tmx.gz">7.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (12,429,776 sentence pairs, 174.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-fr.tmx.gz">12.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Galician (119 sentence pairs, 1.39k words) - TMX format' href="download.php?f=OpenSubtitles2012/es-gl.tmx.gz">0.1k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Hebrew (8,126,434 sentence pairs, 113.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-he.tmx.gz">8.1M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Croatian (9,155,867 sentence pairs, 118.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-hr.tmx.gz">9.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Hungarian (11,129,329 sentence pairs, 138.46M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-hu.tmx.gz">11.1M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Spanish-Indonesian (5,098 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-id.tmx.gz">5.1k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Spanish-Icelandic (466,275 sentence pairs, 5.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-is.tmx.gz">0.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Italian (6,968,203 sentence pairs, 96.58M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-it.tmx.gz">7.0M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Spanish-Japanese (149,041 sentence pairs, 1.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Spanish-Korean (10,925 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ko.tmx.gz">10.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Spanish-Lithuanian (369,356 sentence pairs, 4.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Spanish-Latvian (118,668 sentence pairs, 1.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Spanish-Macedonian (748,975 sentence pairs, 9.54M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Spanish-Malay (1,451,497 sentence pairs, 18.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ms.tmx.gz">1.5M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (2,023,589 sentence pairs, 26.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-nb.tmx.gz">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (12,278,528 sentence pairs, 173.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-nl.tmx.gz">12.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Polish (11,309,536 sentence pairs, 144.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-pl.tmx.gz">11.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (13,109,499 sentence pairs, 179.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-pt.tmx.gz">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (18,159,829 sentence pairs, 248.61M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-pt_br.tmx.gz">18.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (14,862,301 sentence pairs, 205.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ro.tmx.gz">14.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Spanish-Russian (3,666,101 sentence pairs, 47.77M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ru.tmx.gz">3.7M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Spanish-Sinhala (21,499 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-si.tmx.gz">21.5k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Spanish-Slovak (2,447,071 sentence pairs, 31.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-sk.tmx.gz">2.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Spanish-Slovenian (7,357,949 sentence pairs, 91.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-sl.tmx.gz">7.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Spanish-Albanian (667,516 sentence pairs, 8.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Serbian (8,856,477 sentence pairs, 115.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-sr.tmx.gz">8.9M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Spanish-Swedish (5,711,841 sentence pairs, 76.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-sv.tmx.gz">5.7M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Spanish-Thai (26,731 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-th.tmx.gz">26.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Turkish (11,959,607 sentence pairs, 144.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-tr.tmx.gz">12.0M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Spanish-Ukrainian (81,909 sentence pairs, 0.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-uk.tmx.gz">81.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Urdu (1,848 sentence pairs, 33.68k words) - TMX format' href="download.php?f=OpenSubtitles2012/es-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Spanish-Vietnamese (391,732 sentence pairs, 5.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Chinese (898 sentence pairs, 7.67k words) - TMX format' href="download.php?f=OpenSubtitles2012/es-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Spanish-Chinese (548,143 sentence pairs, 4.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Spanish-Chinese (324,577 sentence pairs, 2.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/es-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.et.gz">et</a>
</th><td>12,870</td> <td>73.2M</td> <td>11.8M</td><td></td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Estonian-Arabic (2,930,842 sentence pairs, 36.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-et.txt.zip">2.9M</a>
</td><td></td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Bulgarian (4,724,537 sentence pairs, 51.44M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-et.txt.zip">4.7M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Estonian-Bosnian (768,647 sentence pairs, 8.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-et.txt.zip">0.8M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Estonian-Catalan (37,381 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-et.txt.zip">37.4k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Czech (4,928,969 sentence pairs, 51.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-et.txt.zip">4.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Estonian-Danish (3,020,879 sentence pairs, 34.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-et.txt.zip">3.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-German (1,348,120 sentence pairs, 15.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-et.txt.zip">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Greek (4,032,954 sentence pairs, 47.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-et.txt.zip">4.0M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Estonian-English (6,396,232 sentence pairs, 71.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-et.txt.zip">6.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Estonian-Spanish (5,176,918 sentence pairs, 58.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-et.txt.zip">5.2M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Basque (655 sentence pairs, 6.31k words) - TMX format' href="download.php?f=OpenSubtitles2012/et-eu.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Estonian-Persian (1,085 sentence pairs, 28.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/et-fa.tmx.gz">1.1k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Estonian-Finnish (3,380,172 sentence pairs, 35.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-fi.tmx.gz">3.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Estonian-French (3,263,612 sentence pairs, 40.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-fr.tmx.gz">3.3M</a>
</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Estonian-Hebrew (3,157,453 sentence pairs, 40.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-he.tmx.gz">3.2M</a>
</td><td></td><td bgcolor="#d0ffce"><a rel="nofollow" title='Estonian-Croatian (3,427,807 sentence pairs, 39.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-hr.tmx.gz">3.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Estonian-Hungarian (3,662,521 sentence pairs, 39.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-hu.tmx.gz">3.7M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Estonian-Indonesian (3,144 sentence pairs, 51.35k words) - TMX format' href="download.php?f=OpenSubtitles2012/et-id.tmx.gz">3.1k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Estonian-Icelandic (288,481 sentence pairs, 3.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-is.tmx.gz">0.3M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Estonian-Italian (2,188,293 sentence pairs, 26.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-it.tmx.gz">2.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Estonian-Japanese (99,400 sentence pairs, 0.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ja.tmx.gz">99.4k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Estonian-Korean (7,204 sentence pairs, 82.40k words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ko.tmx.gz">7.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Estonian-Lithuanian (293,083 sentence pairs, 3.08M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Estonian-Latvian (105,800 sentence pairs, 1.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Estonian-Macedonian (577,135 sentence pairs, 6.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Estonian-Malay (916,126 sentence pairs, 10.58M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ms.tmx.gz">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (1,090,726 sentence pairs, 12.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-nb.tmx.gz">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Dutch (3,932,557 sentence pairs, 49.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-nl.tmx.gz">3.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Polish (3,764,342 sentence pairs, 42.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-pl.tmx.gz">3.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Portuguese (3,976,617 sentence pairs, 48.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-pt.tmx.gz">4.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Portuguese (4,208,706 sentence pairs, 50.61M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-pt_br.tmx.gz">4.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Estonian-Romanian (4,377,284 sentence pairs, 53.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ro.tmx.gz">4.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Estonian-Russian (1,406,973 sentence pairs, 16.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ru.tmx.gz">1.4M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Estonian-Sinhala (15,124 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-si.tmx.gz">15.1k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Slovak (1,151,136 sentence pairs, 13.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Estonian-Slovenian (3,554,230 sentence pairs, 39.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-sl.tmx.gz">3.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Estonian-Albanian (511,502 sentence pairs, 6.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Estonian-Serbian (3,220,580 sentence pairs, 37.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-sr.tmx.gz">3.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Swedish (2,644,732 sentence pairs, 32.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-sv.tmx.gz">2.6M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Estonian-Thai (22,266 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-th.tmx.gz">22.3k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Turkish (4,049,758 sentence pairs, 43.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-tr.tmx.gz">4.0M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Estonian-Ukrainian (50,801 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-uk.tmx.gz">50.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Urdu (833 sentence pairs, 14.94k words) - TMX format' href="download.php?f=OpenSubtitles2012/et-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Estonian-Vietnamese (328,672 sentence pairs, 4.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Estonian-Chinese (344,063 sentence pairs, 2.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-zh_cn.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Estonian-Chinese (211,714 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/et-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.eu.gz">eu</a>
</th><td>1</td> <td>3.9k</td> <td>0.7k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Bulgarian (679 sentence pairs, 6.50k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-eu.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Czech (635 sentence pairs, 6.25k words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-eu.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Danish (659 sentence pairs, 6.86k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-eu.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-German (564 sentence pairs, 6.07k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-eu.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Greek (614 sentence pairs, 6.42k words) - Moses format' href="download.php?f=OpenSubtitles2012/el-eu.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-English (669 sentence pairs, 7.00k words) - Moses format' href="download.php?f=OpenSubtitles2012/en-eu.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Spanish (672 sentence pairs, 6.47k words) - Moses format' href="download.php?f=OpenSubtitles2012/es-eu.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Estonian (688 sentence pairs, 6.42k words) - Moses format' href="download.php?f=OpenSubtitles2012/et-eu.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Finnish (640 sentence pairs, 5.80k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-fi.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-French (506 sentence pairs, 5.64k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-fr.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Hebrew (520 sentence pairs, 5.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-he.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Croatian (633 sentence pairs, 6.08k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Hungarian (659 sentence pairs, 6.11k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-hu.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Dutch (635 sentence pairs, 6.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-nl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Polish (631 sentence pairs, 5.84k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-pl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Portuguese (656 sentence pairs, 6.43k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-pt.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Portuguese (623 sentence pairs, 6.64k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-pt_br.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Romanian (659 sentence pairs, 6.33k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-ro.tmx.gz">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Slovak (652 sentence pairs, 5.96k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-sk.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Slovenian (628 sentence pairs, 6.11k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-sl.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Serbian (635 sentence pairs, 6.13k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-sr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Swedish (645 sentence pairs, 6.51k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-sv.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Turkish (604 sentence pairs, 6.06k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-tr.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Chinese (523 sentence pairs, 3.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/eu-zh_tw.tmx.gz">0.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.fa.gz">fa</a>
</th><td>3,511</td> <td>24.3M</td> <td>0.6M</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Persian-Arabic (3,485 sentence pairs, 92.71k words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-fa.txt.zip">3.5k</a>
</td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Persian-Bulgarian (3,326 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-fa.txt.zip">3.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Bengali (287 sentence pairs, 10.75k words) - Moses format' href="download.php?f=OpenSubtitles2012/bn-fa.txt.zip">0.3k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Persian-Czech (2,944 sentence pairs, 82.73k words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-fa.txt.zip">2.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Persian-Danish (2,700 sentence pairs, 65.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-fa.txt.zip">2.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-German (1,789 sentence pairs, 34.60k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-fa.txt.zip">1.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Persian-Greek (4,291 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-fa.txt.zip">4.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Persian-English (8,820 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-fa.txt.zip">8.8k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Persian-Spanish (6,142 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-fa.txt.zip">6.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Estonian (1,093 sentence pairs, 28.79k words) - Moses format' href="download.php?f=OpenSubtitles2012/et-fa.txt.zip">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Finnish (2,717 sentence pairs, 58.08k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-fi.tmx.gz">2.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Persian-French (2,843 sentence pairs, 85.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-fr.tmx.gz">2.8k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Persian-Hebrew (3,064 sentence pairs, 76.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-he.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Hindi (251 sentence pairs, 16.27k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-hi.tmx.gz">0.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Persian-Croatian (3,366 sentence pairs, 86.15k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-hr.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Hungarian (2,002 sentence pairs, 57.44k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-hu.tmx.gz">2.0k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Persian-Italian (2,930 sentence pairs, 75.22k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-it.tmx.gz">2.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Lithuanian (993 sentence pairs, 32.70k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-lt.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Macedonian (616 sentence pairs, 17.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-mk.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Persian-Malay (3,127 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-ms.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Persian-BokmÃ¥l, Norwegian (1,564 sentence pairs, 40.99k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-nb.tmx.gz">1.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Persian-Dutch (3,553 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-nl.tmx.gz">3.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Persian-Polish (2,089 sentence pairs, 51.05k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-pl.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Persian-Portuguese (2,963 sentence pairs, 70.51k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-pt.tmx.gz">3.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Persian-Portuguese (4,668 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-pt_br.tmx.gz">4.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Persian-Romanian (2,758 sentence pairs, 83.95k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-ro.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Russian (2,347 sentence pairs, 54.32k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-ru.tmx.gz">2.3k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Slovak (2,299 sentence pairs, 56.91k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-sk.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Persian-Slovenian (2,520 sentence pairs, 69.17k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-sl.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Albanian (355 sentence pairs, 6.31k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-sq.tmx.gz">0.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Persian-Serbian (2,932 sentence pairs, 83.94k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-sr.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Persian-Swedish (1,896 sentence pairs, 45.03k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-sv.tmx.gz">1.9k</a>
</td><td></td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Persian-Turkish (5,282 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-tr.tmx.gz">5.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Ukrainian (433 sentence pairs, 11.65k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-uk.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Vietnamese (471 sentence pairs, 21.93k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-vi.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Chinese (227 sentence pairs, 3.06k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-zh_cn.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Chinese (394 sentence pairs, 7.90k words) - TMX format' href="download.php?f=OpenSubtitles2012/fa-zh_tw.tmx.gz">0.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.fi.gz">fi</a>
</th><td>37,121</td> <td>174.1M</td> <td>31.5M</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Arabic (3,909,492 sentence pairs, 45.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-fi.txt.zip">3.9M</a>
</td><td></td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Bulgarian (7,511,813 sentence pairs, 78.00M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-fi.txt.zip">7.5M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Finnish-Bosnian (1,034,900 sentence pairs, 10.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-fi.txt.zip">1.0M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Finnish-Catalan (48,907 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-fi.txt.zip">48.9k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Czech (8,409,118 sentence pairs, 84.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-fi.txt.zip">8.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Danish (5,067,427 sentence pairs, 53.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-fi.txt.zip">5.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Finnish-German (2,413,479 sentence pairs, 26.00M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-fi.txt.zip">2.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Greek (6,906,709 sentence pairs, 75.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-fi.txt.zip">6.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Finnish-English (12,883,433 sentence pairs, 142.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-fi.txt.zip">12.9M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Finnish-Spanish (9,390,060 sentence pairs, 102.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-fi.txt.zip">9.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Finnish-Estonian (4,106,718 sentence pairs, 40.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-fi.txt.zip">4.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Basque (661 sentence pairs, 5.89k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-fi.txt.zip">0.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Finnish-Persian (2,732 sentence pairs, 58.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-fi.txt.zip">2.7k</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-French (5,343,396 sentence pairs, 62.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-fr.tmx.gz">5.3M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Hebrew (4,617,682 sentence pairs, 54.44M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-he.tmx.gz">4.6M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Croatian (5,215,864 sentence pairs, 56.55M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-hr.tmx.gz">5.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Hungarian (5,734,017 sentence pairs, 59.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-hu.tmx.gz">5.7M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Finnish-Indonesian (4,668 sentence pairs, 90.27k words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-id.tmx.gz">4.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Finnish-Icelandic (477,980 sentence pairs, 5.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-is.tmx.gz">0.5M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Finnish-Italian (3,428,855 sentence pairs, 39.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-it.tmx.gz">3.4M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Finnish-Japanese (104,407 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Finnish-Korean (7,961 sentence pairs, 77.54k words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ko.tmx.gz">8.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Finnish-Lithuanian (311,602 sentence pairs, 3.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Finnish-Latvian (100,443 sentence pairs, 1.02M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Finnish-Macedonian (662,418 sentence pairs, 7.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Finnish-Malay (1,103,326 sentence pairs, 12.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (1,975,087 sentence pairs, 21.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-nb.tmx.gz">2.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Dutch (6,642,701 sentence pairs, 78.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-nl.tmx.gz">6.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Polish (6,919,546 sentence pairs, 74.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-pl.tmx.gz">6.9M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Portuguese (6,857,191 sentence pairs, 78.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-pt.tmx.gz">6.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Portuguese (7,310,510 sentence pairs, 83.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-pt_br.tmx.gz">7.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Romanian (7,256,290 sentence pairs, 84.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ro.tmx.gz">7.3M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Finnish-Russian (1,794,834 sentence pairs, 19.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ru.tmx.gz">1.8M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Finnish-Sinhala (16,081 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-si.tmx.gz">16.1k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-Slovak (1,479,201 sentence pairs, 16.15M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Slovenian (5,009,135 sentence pairs, 52.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Finnish-Albanian (585,085 sentence pairs, 6.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Serbian (4,948,070 sentence pairs, 54.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-sr.tmx.gz">4.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Swedish (4,378,065 sentence pairs, 49.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-sv.tmx.gz">4.4M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Finnish-Thai (21,664 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-th.tmx.gz">21.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Turkish (6,198,519 sentence pairs, 62.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-tr.tmx.gz">6.2M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Finnish-Ukrainian (51,555 sentence pairs, 0.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-uk.tmx.gz">51.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Finnish-Urdu (1,889 sentence pairs, 29.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Finnish-Vietnamese (342,591 sentence pairs, 4.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Chinese (913 sentence pairs, 6.22k words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Finnish-Chinese (402,795 sentence pairs, 2.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Finnish-Chinese (247,025 sentence pairs, 1.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/fi-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.fr.gz">fr</a>
</th><td>57,192</td> <td>363.5M</td> <td>48.6M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Afrikaans (681 sentence pairs, 12.69k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-fr.txt.zip">0.7k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='French-Arabic (4,381,835 sentence pairs, 60.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-fr.txt.zip">4.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Azerbaijani (34 sentence pairs, 0.24k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-fr.txt.zip">34</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Bulgarian (9,473,830 sentence pairs, 117.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-fr.txt.zip">9.5M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='French-Bosnian (1,069,675 sentence pairs, 13.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-fr.txt.zip">1.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='French-Catalan (64,340 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-fr.txt.zip">64.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Czech (11,041,098 sentence pairs, 131.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-fr.txt.zip">11.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-Danish (4,494,774 sentence pairs, 56.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-fr.txt.zip">4.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-German (3,715,314 sentence pairs, 47.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-fr.txt.zip">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (10,079,118 sentence pairs, 132.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-fr.txt.zip">10.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (22,859,415 sentence pairs, 292.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-fr.txt.zip">22.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (16,659,048 sentence pairs, 212.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-fr.txt.zip">16.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-Estonian (3,914,697 sentence pairs, 45.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-fr.txt.zip">3.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Basque (512 sentence pairs, 5.66k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-fr.txt.zip">0.5k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='French-Persian (2,861 sentence pairs, 85.92k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-fr.txt.zip">2.9k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='French-Finnish (6,905,125 sentence pairs, 76.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-fr.txt.zip">6.9M</a>
</td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='French-Hebrew (6,023,446 sentence pairs, 84.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-he.tmx.gz">6.0M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='French-Croatian (6,478,839 sentence pairs, 83.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-hr.tmx.gz">6.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Hungarian (8,179,861 sentence pairs, 102.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-hu.tmx.gz">8.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='French-Indonesian (5,083 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-id.tmx.gz">5.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='French-Icelandic (414,246 sentence pairs, 5.06M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-is.tmx.gz">0.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='French-Italian (5,735,120 sentence pairs, 79.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-it.tmx.gz">5.7M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='French-Japanese (127,104 sentence pairs, 1.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='French-Korean (10,621 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ko.tmx.gz">10.6k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='French-Lithuanian (327,622 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='French-Latvian (116,407 sentence pairs, 1.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='French-Macedonian (580,383 sentence pairs, 7.44M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Malay (1,102,501 sentence pairs, 13.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (1,711,674 sentence pairs, 21.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-nb.tmx.gz">1.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Dutch (8,483,918 sentence pairs, 119.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-nl.tmx.gz">8.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='French-Polish (7,316,168 sentence pairs, 93.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-pl.tmx.gz">7.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Portuguese (8,696,723 sentence pairs, 118.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-pt.tmx.gz">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (11,356,125 sentence pairs, 154.73M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-pt_br.tmx.gz">11.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Romanian (9,501,599 sentence pairs, 131.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ro.tmx.gz">9.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='French-Russian (2,854,486 sentence pairs, 37.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ru.tmx.gz">2.9M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='French-Sinhala (15,175 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-si.tmx.gz">15.2k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='French-Slovak (1,854,785 sentence pairs, 23.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-sk.tmx.gz">1.9M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Slovenian (5,160,197 sentence pairs, 64.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-sl.tmx.gz">5.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='French-Albanian (528,088 sentence pairs, 6.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='French-Serbian (5,851,460 sentence pairs, 76.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-sr.tmx.gz">5.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='French-Swedish (4,355,048 sentence pairs, 58.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-sv.tmx.gz">4.4M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='French-Thai (25,520 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-th.tmx.gz">25.5k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Turkish (8,293,840 sentence pairs, 100.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-tr.tmx.gz">8.3M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='French-Ukrainian (61,379 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-uk.tmx.gz">61.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='French-Urdu (1,837 sentence pairs, 33.64k words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='French-Vietnamese (345,639 sentence pairs, 5.08M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Chinese (911 sentence pairs, 8.18k words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='French-Chinese (469,853 sentence pairs, 4.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='French-Chinese (274,513 sentence pairs, 2.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/fr-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.gl.gz">gl</a>
</th><td>3</td> <td>10.4k</td> <td>0.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-English (114 sentence pairs, 1.44k words) - Moses format' href="download.php?f=OpenSubtitles2012/en-gl.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Spanish (119 sentence pairs, 1.39k words) - Moses format' href="download.php?f=OpenSubtitles2012/es-gl.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Polish (114 sentence pairs, 1.26k words) - TMX format' href="download.php?f=OpenSubtitles2012/gl-pl.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.he.gz">he</a>
</th><td>43,491</td> <td>228.4M</td> <td>31.8M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Afrikaans (613 sentence pairs, 11.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-he.txt.zip">0.6k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-Arabic (5,005,432 sentence pairs, 59.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-he.txt.zip">5.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Azerbaijani (24 sentence pairs, 0.20k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-he.txt.zip">24</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Hebrew-Bulgarian (8,164,362 sentence pairs, 102.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-he.txt.zip">8.2M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hebrew-Bosnian (1,035,771 sentence pairs, 12.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-he.txt.zip">1.0M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Hebrew-Catalan (41,927 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-he.txt.zip">41.9k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Hebrew-Czech (8,424,485 sentence pairs, 103.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-he.txt.zip">8.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-Danish (3,805,033 sentence pairs, 49.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-he.txt.zip">3.8M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Hebrew-German (2,110,593 sentence pairs, 28.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-he.txt.zip">2.1M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Hebrew-Greek (7,686,246 sentence pairs, 100.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-he.txt.zip">7.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hebrew-English (13,110,359 sentence pairs, 176.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-he.txt.zip">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hebrew-Spanish (10,165,123 sentence pairs, 132.82M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-he.txt.zip">10.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hebrew-Estonian (3,725,633 sentence pairs, 44.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-he.txt.zip">3.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Basque (531 sentence pairs, 5.80k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-he.txt.zip">0.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Hebrew-Persian (3,088 sentence pairs, 76.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-he.txt.zip">3.1k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Finnish (5,642,906 sentence pairs, 63.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-he.txt.zip">5.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hebrew-French (7,457,847 sentence pairs, 99.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-he.txt.zip">7.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Hebrew-Croatian (5,359,211 sentence pairs, 69.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-hr.tmx.gz">5.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hebrew-Hungarian (6,245,493 sentence pairs, 77.80M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-hu.tmx.gz">6.2M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hebrew-Indonesian (1,818 sentence pairs, 42.57k words) - TMX format' href="download.php?f=OpenSubtitles2012/he-id.tmx.gz">1.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Hebrew-Icelandic (293,865 sentence pairs, 3.81M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-is.tmx.gz">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hebrew-Italian (3,752,682 sentence pairs, 51.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-it.tmx.gz">3.8M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hebrew-Japanese (132,256 sentence pairs, 1.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Hebrew-Korean (11,670 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ko.tmx.gz">11.7k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Hebrew-Lithuanian (294,069 sentence pairs, 3.43M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Hebrew-Latvian (95,058 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-lv.tmx.gz">95.1k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hebrew-Macedonian (607,036 sentence pairs, 7.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hebrew-Malay (990,820 sentence pairs, 12.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ms.tmx.gz">1.0M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hebrew-BokmÃ¥l, Norwegian (1,282,416 sentence pairs, 16.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-nb.tmx.gz">1.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hebrew-Dutch (6,804,501 sentence pairs, 96.05M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-nl.tmx.gz">6.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hebrew-Polish (6,127,142 sentence pairs, 78.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-pl.tmx.gz">6.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hebrew-Portuguese (6,895,967 sentence pairs, 95.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-pt.tmx.gz">6.9M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hebrew-Portuguese (7,960,387 sentence pairs, 109.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-pt_br.tmx.gz">8.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hebrew-Romanian (7,776,058 sentence pairs, 108.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ro.tmx.gz">7.8M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Hebrew-Russian (2,212,740 sentence pairs, 28.77M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ru.tmx.gz">2.2M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Hebrew-Sinhala (14,925 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-si.tmx.gz">14.9k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Hebrew-Slovak (1,546,089 sentence pairs, 20.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Slovenian (4,875,462 sentence pairs, 61.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-sl.tmx.gz">4.9M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hebrew-Albanian (524,882 sentence pairs, 7.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Serbian (4,859,435 sentence pairs, 64.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-sr.tmx.gz">4.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-Swedish (3,652,467 sentence pairs, 48.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-sv.tmx.gz">3.7M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Hebrew-Thai (27,507 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-th.tmx.gz">27.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hebrew-Turkish (7,111,985 sentence pairs, 86.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-tr.tmx.gz">7.1M</a>
</td><td bgcolor="#fffaf0"><a rel="nofollow" title='Hebrew-Ukrainian (50,969 sentence pairs, 0.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-uk.tmx.gz">51.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Urdu (711 sentence pairs, 13.11k words) - TMX format' href="download.php?f=OpenSubtitles2012/he-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hebrew-Vietnamese (320,552 sentence pairs, 4.83M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Chinese (923 sentence pairs, 7.28k words) - TMX format' href="download.php?f=OpenSubtitles2012/he-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Hebrew-Chinese (480,874 sentence pairs, 3.62M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Hebrew-Chinese (284,662 sentence pairs, 2.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/he-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.hi.gz">hi</a>
</th><td>4</td> <td>46.3k</td> <td>1.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hindi-Persian (251 sentence pairs, 16.27k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-hi.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.hr.gz">hr</a>
</th><td>36,358</td> <td>200.5M</td> <td>32.3M</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Arabic (4,367,891 sentence pairs, 55.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-hr.txt.zip">4.4M</a>
</td><td></td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Bulgarian (8,895,181 sentence pairs, 99.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-hr.txt.zip">8.9M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Croatian-Bosnian (929,673 sentence pairs, 9.77M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-hr.txt.zip">0.9M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Croatian-Catalan (49,342 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-hr.txt.zip">49.3k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Czech (9,697,311 sentence pairs, 104.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-hr.txt.zip">9.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Croatian-Danish (4,134,929 sentence pairs, 48.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-hr.txt.zip">4.1M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Croatian-German (2,556,479 sentence pairs, 29.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-hr.txt.zip">2.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-Greek (8,291,380 sentence pairs, 99.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-hr.txt.zip">8.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (14,918,327 sentence pairs, 174.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-hr.txt.zip">14.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Spanish (11,310,401 sentence pairs, 133.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-hr.txt.zip">11.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Estonian (4,026,094 sentence pairs, 42.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-hr.txt.zip">4.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Basque (657 sentence pairs, 6.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-hr.txt.zip">0.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Croatian-Persian (3,402 sentence pairs, 86.33k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-hr.txt.zip">3.4k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Finnish (6,299,633 sentence pairs, 63.75M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-hr.txt.zip">6.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-French (7,896,313 sentence pairs, 94.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-hr.txt.zip">7.9M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Croatian-Hebrew (6,298,230 sentence pairs, 77.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-hr.txt.zip">6.3M</a>
</td><td></td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Croatian-Hungarian (6,806,593 sentence pairs, 77.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-hu.tmx.gz">6.8M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Croatian-Indonesian (4,025 sentence pairs, 87.82k words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-id.tmx.gz">4.0k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Croatian-Icelandic (393,449 sentence pairs, 4.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-is.tmx.gz">0.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Italian (4,092,151 sentence pairs, 51.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-it.tmx.gz">4.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Croatian-Japanese (109,947 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Kazakh (1,054 sentence pairs, 10.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Croatian-Korean (10,970 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ko.tmx.gz">11.0k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Croatian-Lithuanian (304,600 sentence pairs, 3.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Croatian-Latvian (109,309 sentence pairs, 1.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Macedonian (693,086 sentence pairs, 8.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Croatian-Malay (1,124,861 sentence pairs, 13.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (1,544,795 sentence pairs, 18.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Dutch (7,813,721 sentence pairs, 101.70M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-nl.tmx.gz">7.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Croatian-Polish (7,104,017 sentence pairs, 83.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-pl.tmx.gz">7.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-Portuguese (7,593,651 sentence pairs, 95.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-pt.tmx.gz">7.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Croatian-Portuguese (8,891,565 sentence pairs, 111.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-pt_br.tmx.gz">8.9M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Croatian-Romanian (9,249,265 sentence pairs, 117.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ro.tmx.gz">9.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Croatian-Russian (2,252,550 sentence pairs, 26.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ru.tmx.gz">2.3M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Croatian-Sinhala (14,634 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-si.tmx.gz">14.6k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Croatian-Slovak (1,709,181 sentence pairs, 20.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-sk.tmx.gz">1.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Slovenian (5,788,857 sentence pairs, 65.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-sl.tmx.gz">5.8M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Croatian-Albanian (572,197 sentence pairs, 6.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Croatian-Serbian (5,502,994 sentence pairs, 65.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-sr.tmx.gz">5.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Swedish (4,040,676 sentence pairs, 50.03M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-sv.tmx.gz">4.0M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Croatian-Thai (22,504 sentence pairs, 0.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-th.tmx.gz">22.5k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Croatian-Turkish (7,624,705 sentence pairs, 83.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-tr.tmx.gz">7.6M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Croatian-Ukrainian (50,553 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-uk.tmx.gz">50.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Urdu (1,892 sentence pairs, 31.12k words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Vietnamese (338,117 sentence pairs, 4.73M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Chinese (895 sentence pairs, 7.69k words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Croatian-Chinese (420,360 sentence pairs, 3.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Croatian-Chinese (246,631 sentence pairs, 2.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/hr-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.hu.gz">hu</a>
</th><td>51,239</td> <td>262.3M</td> <td>43.1M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Afrikaans (616 sentence pairs, 11.18k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-hu.txt.zip">0.6k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hungarian-Arabic (4,985,828 sentence pairs, 60.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-hu.txt.zip">5.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Azerbaijani (29 sentence pairs, 0.20k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-hu.txt.zip">29</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Bulgarian (10,453,002 sentence pairs, 112.43M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-hu.txt.zip">10.5M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Bosnian (1,210,615 sentence pairs, 12.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-hu.txt.zip">1.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Hungarian-Catalan (54,991 sentence pairs, 0.61M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-hu.txt.zip">55.0k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Czech (11,883,025 sentence pairs, 122.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-hu.txt.zip">11.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Danish (4,549,891 sentence pairs, 50.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-hu.txt.zip">4.5M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Hungarian-German (3,126,049 sentence pairs, 35.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-hu.txt.zip">3.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hungarian-Greek (10,210,588 sentence pairs, 117.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-hu.txt.zip">10.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-English (21,420,263 sentence pairs, 238.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-hu.txt.zip">21.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Spanish (14,719,451 sentence pairs, 165.43M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-hu.txt.zip">14.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hungarian-Estonian (4,406,109 sentence pairs, 44.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-hu.txt.zip">4.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Basque (691 sentence pairs, 6.21k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-hu.txt.zip">0.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Hungarian-Persian (2,017 sentence pairs, 57.48k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-hu.txt.zip">2.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Hungarian-Finnish (7,234,251 sentence pairs, 69.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-hu.txt.zip">7.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-French (10,607,088 sentence pairs, 122.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-hu.txt.zip">10.6M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Hebrew (7,809,242 sentence pairs, 91.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-hu.txt.zip">7.8M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Croatian (8,351,112 sentence pairs, 86.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-hu.txt.zip">8.4M</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Hungarian-Indonesian (4,251 sentence pairs, 83.63k words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-id.tmx.gz">4.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hungarian-Icelandic (435,629 sentence pairs, 4.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-is.tmx.gz">0.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hungarian-Italian (5,389,514 sentence pairs, 66.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-it.tmx.gz">5.4M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hungarian-Japanese (136,235 sentence pairs, 1.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Hungarian-Korean (9,858 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ko.tmx.gz">9.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Hungarian-Lithuanian (335,519 sentence pairs, 3.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hungarian-Latvian (109,851 sentence pairs, 1.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Hungarian-Macedonian (642,778 sentence pairs, 7.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Hungarian-Malay (1,244,363 sentence pairs, 13.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ms.tmx.gz">1.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (1,621,656 sentence pairs, 18.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Dutch (8,779,533 sentence pairs, 109.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-nl.tmx.gz">8.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Polish (7,952,319 sentence pairs, 89.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-pl.tmx.gz">8.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Portuguese (9,267,301 sentence pairs, 111.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-pt.tmx.gz">9.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Portuguese (11,255,060 sentence pairs, 135.84M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-pt_br.tmx.gz">11.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hungarian-Romanian (10,363,017 sentence pairs, 126.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ro.tmx.gz">10.4M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Hungarian-Russian (2,854,356 sentence pairs, 32.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ru.tmx.gz">2.9M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Hungarian-Sinhala (22,013 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-si.tmx.gz">22.0k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Hungarian-Slovak (2,046,657 sentence pairs, 23.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hungarian-Slovenian (5,676,019 sentence pairs, 61.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-sl.tmx.gz">5.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hungarian-Albanian (644,253 sentence pairs, 7.46M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hungarian-Serbian (6,353,452 sentence pairs, 73.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-sr.tmx.gz">6.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Swedish (4,298,503 sentence pairs, 50.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-sv.tmx.gz">4.3M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Hungarian-Thai (28,119 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-th.tmx.gz">28.1k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Turkish (8,844,735 sentence pairs, 92.81M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-tr.tmx.gz">8.8M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Hungarian-Ukrainian (65,394 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-uk.tmx.gz">65.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hungarian-Urdu (1,852 sentence pairs, 30.52k words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hungarian-Vietnamese (359,002 sentence pairs, 4.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Chinese (884 sentence pairs, 7.15k words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hungarian-Chinese (417,214 sentence pairs, 3.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Hungarian-Chinese (277,558 sentence pairs, 2.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/hu-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized id plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.id.gz">id</a>
</th><td>38</td> <td>0.3M</td> <td>29.9k</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Indonesian-Arabic (2,643 sentence pairs, 33.36k words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-id.txt.zip">2.6k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Indonesian-Bulgarian (4,214 sentence pairs, 75.66k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-id.txt.zip">4.2k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Indonesian-Bosnian (1,585 sentence pairs, 53.01k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-id.txt.zip">1.6k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Indonesian-Czech (5,377 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-id.txt.zip">5.4k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Indonesian-Danish (4,070 sentence pairs, 87.12k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-id.txt.zip">4.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Indonesian-German (3,651 sentence pairs, 89.34k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-id.txt.zip">3.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Indonesian-Greek (4,888 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-id.txt.zip">4.9k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Indonesian-English (16,356 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-id.txt.zip">16.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Indonesian-Spanish (5,227 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-id.txt.zip">5.2k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Estonian (3,185 sentence pairs, 51.56k words) - Moses format' href="download.php?f=OpenSubtitles2012/et-id.txt.zip">3.2k</a>
</td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Indonesian-Finnish (4,718 sentence pairs, 90.50k words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-id.txt.zip">4.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Indonesian-French (5,149 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-id.txt.zip">5.1k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Indonesian-Hebrew (1,821 sentence pairs, 42.58k words) - Moses format' href="download.php?f=OpenSubtitles2012/he-id.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Indonesian-Croatian (4,042 sentence pairs, 87.90k words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-id.txt.zip">4.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Indonesian-Hungarian (4,288 sentence pairs, 83.81k words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-id.txt.zip">4.3k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Indonesian-Italian (4,255 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/id-it.tmx.gz">4.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Indonesian-Lithuanian (668 sentence pairs, 22.62k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-lt.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Indonesian-Latvian (1,034 sentence pairs, 28.46k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-lv.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Malay (2,720 sentence pairs, 44.84k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-ms.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Indonesian-BokmÃ¥l, Norwegian (1,299 sentence pairs, 18.46k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-nb.tmx.gz">1.3k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Indonesian-Dutch (6,123 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/id-nl.tmx.gz">6.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Indonesian-Polish (4,436 sentence pairs, 96.70k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-pl.tmx.gz">4.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Indonesian-Portuguese (5,968 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/id-pt.tmx.gz">6.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Indonesian-Portuguese (5,838 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/id-pt_br.tmx.gz">5.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Indonesian-Romanian (6,281 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/id-ro.tmx.gz">6.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Russian (2,467 sentence pairs, 48.78k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-ru.tmx.gz">2.5k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Indonesian-Slovak (2,877 sentence pairs, 77.55k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-sk.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Indonesian-Slovenian (3,823 sentence pairs, 68.03k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-sl.tmx.gz">3.8k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Indonesian-Serbian (3,841 sentence pairs, 67.14k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-sr.tmx.gz">3.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Indonesian-Swedish (1,151 sentence pairs, 15.19k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-sv.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Indonesian-Turkish (4,716 sentence pairs, 90.28k words) - TMX format' href="download.php?f=OpenSubtitles2012/id-tr.tmx.gz">4.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.is.gz">is</a>
</th><td>582</td> <td>4.7M</td> <td>0.7M</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Icelandic-Arabic (232,770 sentence pairs, 3.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-is.txt.zip">0.2M</a>
</td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Bulgarian (424,287 sentence pairs, 4.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-is.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Icelandic-Bosnian (64,951 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-is.txt.zip">65.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Icelandic-Catalan (8,863 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-is.txt.zip">8.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Czech (520,644 sentence pairs, 5.51M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-is.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Danish (456,877 sentence pairs, 5.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-is.txt.zip">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Icelandic-German (316,322 sentence pairs, 3.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-is.txt.zip">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Greek (397,323 sentence pairs, 4.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-is.txt.zip">0.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-English (634,317 sentence pairs, 7.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-is.txt.zip">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Icelandic-Spanish (522,325 sentence pairs, 6.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-is.txt.zip">0.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Estonian (310,615 sentence pairs, 3.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-is.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Finnish (534,209 sentence pairs, 5.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-is.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-French (457,078 sentence pairs, 5.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-is.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Icelandic-Hebrew (309,184 sentence pairs, 3.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-is.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Croatian (432,378 sentence pairs, 4.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-is.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Hungarian (478,296 sentence pairs, 4.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-is.txt.zip">0.5M</a>
</td><td></td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Icelandic-Italian (315,757 sentence pairs, 3.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-it.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Icelandic-Japanese (3,192 sentence pairs, 29.38k words) - TMX format' href="download.php?f=OpenSubtitles2012/is-ja.tmx.gz">3.2k</a>
</td><td></td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Icelandic-Lithuanian (38,654 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-lt.tmx.gz">38.7k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Icelandic-Latvian (12,235 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-lv.tmx.gz">12.2k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Icelandic-Macedonian (67,039 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-mk.tmx.gz">67.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Icelandic-Malay (104,529 sentence pairs, 1.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (349,167 sentence pairs, 4.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Dutch (448,540 sentence pairs, 5.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Polish (454,112 sentence pairs, 5.06M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-pl.tmx.gz">0.5M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Portuguese (482,509 sentence pairs, 5.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-pt.tmx.gz">0.5M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Portuguese (408,417 sentence pairs, 4.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-pt_br.tmx.gz">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Romanian (436,509 sentence pairs, 5.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-ro.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Icelandic-Russian (151,343 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Icelandic-Sinhala (1,929 sentence pairs, 23.07k words) - TMX format' href="download.php?f=OpenSubtitles2012/is-si.tmx.gz">1.9k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Icelandic-Slovak (87,076 sentence pairs, 1.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-sk.tmx.gz">87.1k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-Slovenian (386,941 sentence pairs, 4.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Icelandic-Albanian (72,212 sentence pairs, 0.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-sq.tmx.gz">72.2k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Icelandic-Serbian (377,027 sentence pairs, 4.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Swedish (422,200 sentence pairs, 5.16M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Icelandic-Thai (2,039 sentence pairs, 25.05k words) - TMX format' href="download.php?f=OpenSubtitles2012/is-th.tmx.gz">2.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Icelandic-Turkish (448,827 sentence pairs, 4.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Ukrainian (1,755 sentence pairs, 19.82k words) - TMX format' href="download.php?f=OpenSubtitles2012/is-uk.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Icelandic-Vietnamese (41,743 sentence pairs, 0.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-vi.tmx.gz">41.7k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Icelandic-Chinese (25,533 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-zh_cn.tmx.gz">25.5k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Icelandic-Chinese (24,843 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/is-zh_tw.tmx.gz">24.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.it.gz">it</a>
</th><td>23,733</td> <td>144.2M</td> <td>19.9M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Afrikaans (582 sentence pairs, 11.24k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-it.txt.zip">0.6k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Italian-Arabic (2,878,342 sentence pairs, 38.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-it.txt.zip">2.9M</a>
</td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Bulgarian (5,920,203 sentence pairs, 72.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-it.txt.zip">5.9M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Italian-Bosnian (702,839 sentence pairs, 8.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-it.txt.zip">0.7M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Italian-Catalan (42,957 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-it.txt.zip">43.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Italian-Czech (6,096,337 sentence pairs, 70.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-it.txt.zip">6.1M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Italian-Danish (2,507,551 sentence pairs, 30.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-it.txt.zip">2.5M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Italian-German (2,716,867 sentence pairs, 33.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-it.txt.zip">2.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Italian-Greek (5,959,639 sentence pairs, 76.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-it.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (10,998,542 sentence pairs, 138.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-it.txt.zip">11.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Italian-Spanish (8,306,293 sentence pairs, 105.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-it.txt.zip">8.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Italian-Estonian (2,491,790 sentence pairs, 28.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-it.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Italian-Persian (3,111 sentence pairs, 77.04k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-it.txt.zip">3.1k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Italian-Finnish (3,991,696 sentence pairs, 43.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-it.txt.zip">4.0M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Italian-French (6,852,212 sentence pairs, 87.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-it.txt.zip">6.9M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Hebrew (4,279,288 sentence pairs, 56.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-it.txt.zip">4.3M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Croatian (4,709,827 sentence pairs, 55.00M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-it.txt.zip">4.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Hungarian (6,385,358 sentence pairs, 71.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-it.txt.zip">6.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Italian-Indonesian (4,313 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/id-it.txt.zip">4.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Italian-Icelandic (352,471 sentence pairs, 3.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-it.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Italian-Japanese (76,713 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ja.tmx.gz">76.7k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Italian-Korean (8,675 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ko.tmx.gz">8.7k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Italian-Lithuanian (213,944 sentence pairs, 2.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Italian-Latvian (79,375 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-lv.tmx.gz">79.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Italian-Macedonian (417,301 sentence pairs, 5.15M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Italian-Malay (773,669 sentence pairs, 9.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ms.tmx.gz">0.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (1,159,680 sentence pairs, 14.44M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-nb.tmx.gz">1.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Dutch (5,283,002 sentence pairs, 73.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-nl.tmx.gz">5.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Polish (4,502,064 sentence pairs, 56.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-pl.tmx.gz">4.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Portuguese (5,523,037 sentence pairs, 74.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-pt.tmx.gz">5.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Italian-Portuguese (7,200,867 sentence pairs, 96.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-pt_br.tmx.gz">7.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Italian-Romanian (6,036,664 sentence pairs, 81.99M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ro.tmx.gz">6.0M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Italian-Russian (2,305,506 sentence pairs, 30.06M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ru.tmx.gz">2.3M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Italian-Sinhala (13,219 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-si.tmx.gz">13.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Italian-Slovak (1,204,436 sentence pairs, 15.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Italian-Slovenian (3,111,518 sentence pairs, 37.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-sl.tmx.gz">3.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Italian-Albanian (424,703 sentence pairs, 5.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-sq.tmx.gz">0.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Italian-Serbian (3,713,325 sentence pairs, 47.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-sr.tmx.gz">3.7M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Italian-Swedish (2,654,913 sentence pairs, 34.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-sv.tmx.gz">2.7M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Italian-Thai (11,694 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-th.tmx.gz">11.7k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Turkish (5,408,899 sentence pairs, 64.03M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-tr.tmx.gz">5.4M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Italian-Ukrainian (40,085 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-uk.tmx.gz">40.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Urdu (1,135 sentence pairs, 18.21k words) - TMX format' href="download.php?f=OpenSubtitles2012/it-ur.tmx.gz">1.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Italian-Vietnamese (267,889 sentence pairs, 3.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Italian-Chinese (271,025 sentence pairs, 2.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-zh_cn.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Italian-Chinese (139,289 sentence pairs, 1.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/it-zh_tw.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ja.gz">ja</a>
</th><td>507</td> <td>0</td> <td>0.4M</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Japanese-Arabic (111,045 sentence pairs, 0.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ja.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Japanese-Bulgarian (137,097 sentence pairs, 1.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Japanese-Bosnian (24,731 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ja.txt.zip">24.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Japanese-Catalan (4,978 sentence pairs, 50.43k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-ja.txt.zip">5.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Japanese-Czech (143,825 sentence pairs, 1.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Japanese-Danish (104,548 sentence pairs, 1.00M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ja.txt.zip">0.1M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Japanese-German (35,420 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ja.txt.zip">35.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Japanese-Greek (137,251 sentence pairs, 1.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Japanese-English (187,712 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ja.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Japanese-Spanish (149,927 sentence pairs, 1.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ja.txt.zip">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Japanese-Estonian (100,659 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ja.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Japanese-Finnish (104,699 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Japanese-French (128,563 sentence pairs, 1.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Hebrew (133,964 sentence pairs, 1.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#fffeef"><a rel="nofollow" title='Japanese-Croatian (110,853 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Hungarian (137,020 sentence pairs, 1.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Japanese-Icelandic (3,198 sentence pairs, 29.41k words) - Moses format' href="download.php?f=OpenSubtitles2012/is-ja.txt.zip">3.2k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Japanese-Italian (77,613 sentence pairs, 0.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ja.txt.zip">77.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Korean (2,151 sentence pairs, 18.48k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-ko.tmx.gz">2.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Japanese-Lithuanian (13,076 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-lt.tmx.gz">13.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Japanese-Latvian (5,582 sentence pairs, 44.91k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-lv.tmx.gz">5.6k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Japanese-Macedonian (34,009 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-mk.tmx.gz">34.0k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Japanese-Malay (54,924 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-ms.tmx.gz">54.9k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Japanese-BokmÃ¥l, Norwegian (45,630 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-nb.tmx.gz">45.6k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Japanese-Dutch (140,094 sentence pairs, 1.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-nl.tmx.gz">0.1M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Japanese-Polish (113,489 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Japanese-Portuguese (142,545 sentence pairs, 1.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-pt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Japanese-Portuguese (157,619 sentence pairs, 1.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-pt_br.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Japanese-Romanian (145,608 sentence pairs, 1.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-Russian (57,509 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-ru.tmx.gz">57.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Sinhala (576 sentence pairs, 3.78k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-si.tmx.gz">0.6k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Japanese-Slovak (48,742 sentence pairs, 0.43M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-sk.tmx.gz">48.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Japanese-Slovenian (122,725 sentence pairs, 1.02M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Japanese-Albanian (34,540 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-sq.tmx.gz">34.5k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Japanese-Serbian (109,285 sentence pairs, 0.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Japanese-Swedish (110,739 sentence pairs, 1.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-sv.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Japanese-Thai (2,627 sentence pairs, 11.64k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-th.tmx.gz">2.6k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Turkish (143,971 sentence pairs, 1.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Ukrainian (2,410 sentence pairs, 21.04k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-uk.tmx.gz">2.4k</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Japanese-Vietnamese (25,514 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-vi.tmx.gz">25.5k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Japanese-Chinese (20,379 sentence pairs, 73.69k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-zh_cn.tmx.gz">20.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Japanese-Chinese (15,223 sentence pairs, 56.93k words) - TMX format' href="download.php?f=OpenSubtitles2012/ja-zh_tw.tmx.gz">15.2k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.kk.gz">kk</a>
</th><td>1</td> <td>6.3k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Bulgarian (978 sentence pairs, 9.61k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-kk.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Danish (1,097 sentence pairs, 10.54k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-kk.txt.zip">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-English (1,101 sentence pairs, 11.46k words) - Moses format' href="download.php?f=OpenSubtitles2012/en-kk.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Croatian (1,079 sentence pairs, 10.10k words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-kk.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Dutch (908 sentence pairs, 10.81k words) - TMX format' href="download.php?f=OpenSubtitles2012/kk-nl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Polish (971 sentence pairs, 10.11k words) - TMX format' href="download.php?f=OpenSubtitles2012/kk-pl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Portuguese (1,045 sentence pairs, 10.52k words) - TMX format' href="download.php?f=OpenSubtitles2012/kk-pt.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Romanian (1,055 sentence pairs, 10.26k words) - TMX format' href="download.php?f=OpenSubtitles2012/kk-ro.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Serbian (1,030 sentence pairs, 10.01k words) - TMX format' href="download.php?f=OpenSubtitles2012/kk-sr.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ko.gz">ko</a>
</th><td>29</td> <td>0.2M</td> <td>29.1k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Afrikaans (613 sentence pairs, 10.94k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ko.txt.zip">0.6k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Arabic (8,022 sentence pairs, 95.75k words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ko.txt.zip">8.0k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Bulgarian (9,338 sentence pairs, 98.76k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ko.txt.zip">9.3k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Bosnian (3,227 sentence pairs, 36.89k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ko.txt.zip">3.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Catalan (1,762 sentence pairs, 25.32k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-ko.txt.zip">1.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Czech (11,969 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ko.txt.zip">12.0k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Korean-Danish (6,791 sentence pairs, 80.06k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ko.txt.zip">6.8k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Korean-German (4,141 sentence pairs, 59.88k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ko.txt.zip">4.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Greek (10,593 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ko.txt.zip">10.6k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Korean-English (14,102 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ko.txt.zip">14.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Spanish (11,149 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ko.txt.zip">11.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Korean-Estonian (7,313 sentence pairs, 82.78k words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ko.txt.zip">7.3k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Korean-Finnish (8,021 sentence pairs, 77.76k words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ko.txt.zip">8.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-French (11,166 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ko.txt.zip">11.2k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Hebrew (11,824 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ko.txt.zip">11.8k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Croatian (11,047 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ko.txt.zip">11.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Hungarian (10,018 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ko.txt.zip">10.0k</a>
</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Italian (8,890 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ko.txt.zip">8.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Japanese (2,152 sentence pairs, 18.49k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-ko.txt.zip">2.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Macedonian (897 sentence pairs, 9.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-mk.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Korean-Malay (4,413 sentence pairs, 49.71k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-ms.tmx.gz">4.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Korean-BokmÃ¥l, Norwegian (3,990 sentence pairs, 51.14k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-nb.tmx.gz">4.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Dutch (8,565 sentence pairs, 99.82k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-nl.tmx.gz">8.6k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Polish (8,702 sentence pairs, 96.22k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-pl.tmx.gz">8.7k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Portuguese (11,357 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-pt.tmx.gz">11.4k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Korean-Portuguese (10,766 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-pt_br.tmx.gz">10.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Korean-Romanian (9,240 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-ro.tmx.gz">9.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Korean-Russian (5,746 sentence pairs, 62.76k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-ru.tmx.gz">5.7k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Slovak (3,428 sentence pairs, 42.18k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-sk.tmx.gz">3.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Slovenian (8,398 sentence pairs, 93.75k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-sl.tmx.gz">8.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Korean-Albanian (3,952 sentence pairs, 48.25k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-sq.tmx.gz">4.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Korean-Serbian (7,596 sentence pairs, 88.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-sr.tmx.gz">7.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Korean-Swedish (8,294 sentence pairs, 90.82k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-sv.tmx.gz">8.3k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Korean-Turkish (8,831 sentence pairs, 92.26k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-tr.tmx.gz">8.8k</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Vietnamese (3,039 sentence pairs, 39.30k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-vi.tmx.gz">3.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Chinese (2,649 sentence pairs, 15.54k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-zh_cn.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Chinese (958 sentence pairs, 5.43k words) - TMX format' href="download.php?f=OpenSubtitles2012/ko-zh_tw.tmx.gz">1.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.lt.gz">lt</a>
</th><td>659</td> <td>3.7M</td> <td>0.6M</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Arabic (256,430 sentence pairs, 3.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-lt.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Bulgarian (366,850 sentence pairs, 3.82M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Lithuanian-Bosnian (82,074 sentence pairs, 0.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-lt.txt.zip">82.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Lithuanian-Catalan (6,539 sentence pairs, 70.99k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-lt.txt.zip">6.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Czech (399,587 sentence pairs, 4.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Danish (302,982 sentence pairs, 3.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-lt.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Lithuanian-German (145,342 sentence pairs, 1.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-lt.txt.zip">0.1M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Greek (309,380 sentence pairs, 3.44M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-lt.txt.zip">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Lithuanian-English (461,988 sentence pairs, 4.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-lt.txt.zip">0.5M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Lithuanian-Spanish (396,059 sentence pairs, 4.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Estonian (316,227 sentence pairs, 3.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Lithuanian-Persian (1,008 sentence pairs, 32.78k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-lt.txt.zip">1.0k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Finnish (332,178 sentence pairs, 3.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-lt.txt.zip">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-French (348,145 sentence pairs, 3.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Lithuanian-Hebrew (309,411 sentence pairs, 3.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Croatian (324,984 sentence pairs, 3.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-lt.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Hungarian (359,128 sentence pairs, 3.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Lithuanian-Indonesian (668 sentence pairs, 22.62k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-lt.txt.zip">0.7k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Lithuanian-Icelandic (40,411 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-lt.txt.zip">40.4k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Lithuanian-Italian (227,181 sentence pairs, 2.43M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-lt.txt.zip">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Lithuanian-Japanese (13,086 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-lt.txt.zip">13.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Lithuanian-Latvian (37,049 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-lv.tmx.gz">37.0k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Lithuanian-Macedonian (90,104 sentence pairs, 1.02M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-mk.tmx.gz">90.1k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Lithuanian-Malay (109,438 sentence pairs, 1.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (157,576 sentence pairs, 1.76M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Dutch (340,710 sentence pairs, 4.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-nl.tmx.gz">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Lithuanian-Polish (349,493 sentence pairs, 3.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Portuguese (362,659 sentence pairs, 4.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Portuguese (363,135 sentence pairs, 4.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-pt_br.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Romanian (354,671 sentence pairs, 4.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-ro.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Lithuanian-Russian (179,558 sentence pairs, 1.84M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Lithuanian-Sinhala (2,953 sentence pairs, 30.62k words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-si.tmx.gz">3.0k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Lithuanian-Slovak (145,487 sentence pairs, 1.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Lithuanian-Slovenian (343,536 sentence pairs, 3.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-sl.tmx.gz">0.3M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Albanian (59,446 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-sq.tmx.gz">59.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Serbian (311,062 sentence pairs, 3.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Swedish (286,193 sentence pairs, 3.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Thai (2,154 sentence pairs, 17.88k words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-th.tmx.gz">2.2k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Lithuanian-Turkish (359,964 sentence pairs, 3.49M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Lithuanian-Ukrainian (2,719 sentence pairs, 39.70k words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-uk.tmx.gz">2.7k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Lithuanian-Vietnamese (46,857 sentence pairs, 0.63M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-vi.tmx.gz">46.9k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Lithuanian-Chinese (37,204 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-zh_cn.tmx.gz">37.2k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Lithuanian-Chinese (19,548 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/lt-zh_tw.tmx.gz">19.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.lv.gz">lv</a>
</th><td>191</td> <td>1.2M</td> <td>0.2M</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Latvian-Arabic (85,331 sentence pairs, 1.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-lv.txt.zip">85.3k</a>
</td><td></td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Latvian-Bulgarian (113,933 sentence pairs, 1.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-lv.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Latvian-Bosnian (12,325 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-lv.txt.zip">12.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latvian-Catalan (2,661 sentence pairs, 24.38k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-lv.txt.zip">2.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Latvian-Czech (124,279 sentence pairs, 1.32M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Danish (99,054 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-lv.txt.zip">99.1k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Latvian-German (60,460 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-lv.txt.zip">60.5k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Greek (100,661 sentence pairs, 1.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Latvian-English (154,103 sentence pairs, 1.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Latvian-Spanish (127,941 sentence pairs, 1.43M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Estonian (112,118 sentence pairs, 1.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-lv.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Latvian-Finnish (104,729 sentence pairs, 1.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Latvian-French (121,649 sentence pairs, 1.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-lv.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Hebrew (98,241 sentence pairs, 1.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-lv.txt.zip">98.2k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Latvian-Croatian (114,876 sentence pairs, 1.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Hungarian (115,755 sentence pairs, 1.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latvian-Indonesian (1,034 sentence pairs, 28.46k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-lv.txt.zip">1.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Latvian-Icelandic (12,811 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-lv.txt.zip">12.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Latvian-Italian (83,435 sentence pairs, 0.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-lv.txt.zip">83.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Latvian-Japanese (5,591 sentence pairs, 44.98k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-lv.txt.zip">5.6k</a>
</td><td></td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Latvian-Lithuanian (39,293 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-lv.txt.zip">39.3k</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Latvian-Macedonian (38,340 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-mk.tmx.gz">38.3k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Latvian-Malay (50,224 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-ms.tmx.gz">50.2k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (63,084 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-nb.tmx.gz">63.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Latvian-Dutch (112,179 sentence pairs, 1.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-nl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Latvian-Polish (105,548 sentence pairs, 1.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Latvian-Portuguese (112,523 sentence pairs, 1.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-pt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Latvian-Portuguese (121,247 sentence pairs, 1.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Latvian-Romanian (110,672 sentence pairs, 1.30M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Latvian-Russian (74,892 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-ru.tmx.gz">74.9k</a>
</td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='Latvian-Slovak (48,941 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-sk.tmx.gz">48.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Slovenian (110,681 sentence pairs, 1.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Latvian-Albanian (30,665 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-sq.tmx.gz">30.7k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Serbian (102,514 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Latvian-Swedish (92,123 sentence pairs, 1.05M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-sv.tmx.gz">92.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Thai (1,285 sentence pairs, 9.52k words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-th.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Latvian-Turkish (124,620 sentence pairs, 1.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Latvian-Ukrainian (6,955 sentence pairs, 67.69k words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-uk.tmx.gz">7.0k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Latvian-Vietnamese (22,510 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-vi.tmx.gz">22.5k</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Latvian-Chinese (16,289 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-zh_cn.tmx.gz">16.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Latvian-Chinese (4,975 sentence pairs, 35.22k words) - TMX format' href="download.php?f=OpenSubtitles2012/lv-zh_tw.tmx.gz">5.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.mk.gz">mk</a>
</th><td>1,402</td> <td>9.6M</td> <td>1.5M</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Arabic (580,165 sentence pairs, 7.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-mk.txt.zip">0.6M</a>
</td><td></td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Bulgarian (807,322 sentence pairs, 9.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-mk.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Macedonian-Bosnian (214,183 sentence pairs, 2.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-mk.txt.zip">0.2M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Catalan (9,136 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-mk.txt.zip">9.1k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Czech (804,406 sentence pairs, 8.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-mk.txt.zip">0.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Danish (626,265 sentence pairs, 7.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-mk.txt.zip">0.6M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Macedonian-German (244,175 sentence pairs, 2.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-mk.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Greek (696,789 sentence pairs, 8.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-mk.txt.zip">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-English (905,533 sentence pairs, 10.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-mk.txt.zip">0.9M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-Spanish (829,653 sentence pairs, 10.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-mk.txt.zip">0.8M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Macedonian-Estonian (634,963 sentence pairs, 7.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-mk.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Macedonian-Persian (621 sentence pairs, 17.83k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-mk.txt.zip">0.6k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Finnish (723,285 sentence pairs, 7.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-mk.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-French (634,118 sentence pairs, 7.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-mk.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Macedonian-Hebrew (647,223 sentence pairs, 8.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-mk.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Croatian (773,840 sentence pairs, 8.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-mk.txt.zip">0.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Hungarian (709,205 sentence pairs, 7.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-mk.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Macedonian-Icelandic (70,210 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-mk.txt.zip">70.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Macedonian-Italian (447,299 sentence pairs, 5.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-mk.txt.zip">0.4M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Macedonian-Japanese (34,091 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-mk.txt.zip">34.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Macedonian-Korean (899 sentence pairs, 9.02k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-mk.txt.zip">0.9k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Macedonian-Lithuanian (93,855 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-mk.txt.zip">93.9k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Macedonian-Latvian (39,955 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-mk.txt.zip">40.0k</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Macedonian-Malay (249,609 sentence pairs, 3.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Macedonian-BokmÃ¥l, Norwegian (295,822 sentence pairs, 3.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Dutch (720,895 sentence pairs, 9.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Polish (717,094 sentence pairs, 8.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-pl.tmx.gz">0.7M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Portuguese (747,663 sentence pairs, 9.33M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-pt.tmx.gz">0.7M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Macedonian-Portuguese (750,401 sentence pairs, 9.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-pt_br.tmx.gz">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-Romanian (796,017 sentence pairs, 9.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-ro.tmx.gz">0.8M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Macedonian-Russian (289,294 sentence pairs, 3.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Macedonian-Sinhala (5,994 sentence pairs, 77.01k words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-si.tmx.gz">6.0k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Macedonian-Slovak (275,228 sentence pairs, 3.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Macedonian-Slovenian (713,446 sentence pairs, 8.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Macedonian-Albanian (185,766 sentence pairs, 2.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Serbian (699,360 sentence pairs, 8.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-sr.tmx.gz">0.7M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Macedonian-Swedish (569,650 sentence pairs, 7.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-sv.tmx.gz">0.6M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Macedonian-Thai (9,443 sentence pairs, 84.53k words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-th.tmx.gz">9.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Macedonian-Turkish (728,473 sentence pairs, 8.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Macedonian-Ukrainian (6,555 sentence pairs, 73.45k words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-uk.tmx.gz">6.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Macedonian-Urdu (1,825 sentence pairs, 32.90k words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Macedonian-Vietnamese (98,749 sentence pairs, 1.40M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-vi.tmx.gz">98.7k</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Macedonian-Chinese (74,115 sentence pairs, 0.62M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-zh_cn.tmx.gz">74.1k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Macedonian-Chinese (40,889 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/mk-zh_tw.tmx.gz">40.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ms plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ms.gz">ms</a>
</th><td>3,795</td> <td>27.4M</td> <td>4.1M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malay-Afrikaans (678 sentence pairs, 11.72k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ms.txt.zip">0.7k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Arabic (1,070,204 sentence pairs, 13.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ms.txt.zip">1.1M</a>
</td><td></td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Malay-Bulgarian (1,412,728 sentence pairs, 15.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ms.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Malay-Bosnian (208,063 sentence pairs, 2.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ms.txt.zip">0.2M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Malay-Catalan (15,730 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-ms.txt.zip">15.7k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Czech (1,490,740 sentence pairs, 16.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ms.txt.zip">1.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Malay-Danish (982,572 sentence pairs, 11.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ms.txt.zip">1.0M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Malay-German (371,601 sentence pairs, 4.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ms.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Malay-Greek (1,286,243 sentence pairs, 15.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ms.txt.zip">1.3M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Malay-English (2,473,537 sentence pairs, 27.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ms.txt.zip">2.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Malay-Spanish (1,753,239 sentence pairs, 20.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ms.txt.zip">1.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Malay-Estonian (1,043,965 sentence pairs, 11.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ms.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Malay-Persian (3,167 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-ms.txt.zip">3.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Finnish (1,280,610 sentence pairs, 13.32M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ms.txt.zip">1.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Malay-French (1,290,790 sentence pairs, 15.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ms.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Hebrew (1,124,542 sentence pairs, 13.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ms.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Croatian (1,290,159 sentence pairs, 14.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ms.txt.zip">1.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Malay-Hungarian (1,470,207 sentence pairs, 15.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ms.txt.zip">1.5M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Malay-Indonesian (2,816 sentence pairs, 45.29k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-ms.txt.zip">2.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Malay-Icelandic (110,253 sentence pairs, 1.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-ms.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Malay-Italian (861,695 sentence pairs, 10.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ms.txt.zip">0.9M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Malay-Japanese (55,437 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-ms.txt.zip">55.4k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Malay-Korean (4,502 sentence pairs, 50.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-ms.txt.zip">4.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malay-Lithuanian (115,910 sentence pairs, 1.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-ms.txt.zip">0.1M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Malay-Latvian (52,924 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-ms.txt.zip">52.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Malay-Macedonian (266,382 sentence pairs, 3.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-ms.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Malay-BokmÃ¥l, Norwegian (415,846 sentence pairs, 5.04M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-nb.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Malay-Dutch (1,320,147 sentence pairs, 17.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Polish (1,158,909 sentence pairs, 13.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-pl.tmx.gz">1.2M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Malay-Portuguese (1,421,364 sentence pairs, 17.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-pt.tmx.gz">1.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Malay-Portuguese (1,495,550 sentence pairs, 18.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-pt_br.tmx.gz">1.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Malay-Romanian (1,448,934 sentence pairs, 18.09M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-ro.tmx.gz">1.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Malay-Russian (501,592 sentence pairs, 5.77M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Malay-Sinhala (18,013 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-si.tmx.gz">18.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Malay-Slovak (395,241 sentence pairs, 4.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Malay-Slovenian (1,078,726 sentence pairs, 12.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Malay-Albanian (338,803 sentence pairs, 4.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Malay-Serbian (1,046,881 sentence pairs, 12.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-sr.tmx.gz">1.0M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Malay-Swedish (875,651 sentence pairs, 10.92M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-sv.tmx.gz">0.9M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Malay-Thai (17,121 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-th.tmx.gz">17.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Turkish (1,300,211 sentence pairs, 14.15M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-tr.tmx.gz">1.3M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Malay-Ukrainian (26,717 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-uk.tmx.gz">26.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malay-Urdu (774 sentence pairs, 14.87k words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Malay-Vietnamese (242,147 sentence pairs, 3.41M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malay-Chinese (891 sentence pairs, 7.30k words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Malay-Chinese (189,037 sentence pairs, 1.58M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Malay-Chinese (108,817 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/ms-zh_tw.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.nb.gz">nb</a>
</th><td>4,225</td> <td>28.2M</td> <td>4.3M</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Arabic (1,074,715 sentence pairs, 13.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-nb.txt.zip">1.1M</a>
</td><td></td><td></td><td bgcolor="#d8ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (1,820,258 sentence pairs, 21.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-nb.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bosnian (287,043 sentence pairs, 3.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-nb.txt.zip">0.3M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Catalan (22,272 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-nb.txt.zip">22.3k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (2,154,147 sentence pairs, 24.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-nb.txt.zip">2.2M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (2,357,145 sentence pairs, 27.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-nb.txt.zip">2.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (1,159,656 sentence pairs, 13.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-nb.txt.zip">1.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (1,777,133 sentence pairs, 21.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-nb.txt.zip">1.8M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (2,913,195 sentence pairs, 35.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-nb.txt.zip">2.9M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (2,361,631 sentence pairs, 28.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-nb.txt.zip">2.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (1,214,803 sentence pairs, 13.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-nb.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Persian (1,591 sentence pairs, 41.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-nb.txt.zip">1.6k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (2,369,297 sentence pairs, 24.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-nb.txt.zip">2.4M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (2,021,454 sentence pairs, 24.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-nb.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hebrew (1,422,753 sentence pairs, 17.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-nb.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (1,751,929 sentence pairs, 19.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-nb.txt.zip">1.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (1,861,458 sentence pairs, 19.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-nb.txt.zip">1.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Indonesian (1,310 sentence pairs, 18.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-nb.txt.zip">1.3k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (393,284 sentence pairs, 4.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-nb.txt.zip">0.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (1,322,268 sentence pairs, 15.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-nb.txt.zip">1.3M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Japanese (45,762 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-nb.txt.zip">45.8k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Korean (4,020 sentence pairs, 51.27k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-nb.txt.zip">4.0k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (165,041 sentence pairs, 1.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-nb.txt.zip">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (65,856 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-nb.txt.zip">65.9k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Macedonian (314,851 sentence pairs, 3.77M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-nb.txt.zip">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Malay (446,500 sentence pairs, 5.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-nb.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (1,931,414 sentence pairs, 24.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-nl.tmx.gz">1.9M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Polish (1,811,258 sentence pairs, 21.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-pl.tmx.gz">1.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (1,852,488 sentence pairs, 23.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-pt.tmx.gz">1.9M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (1,812,849 sentence pairs, 22.64M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-pt_br.tmx.gz">1.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (1,907,657 sentence pairs, 24.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-ro.tmx.gz">1.9M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (621,117 sentence pairs, 7.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-ru.tmx.gz">0.6M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Sinhala (8,059 sentence pairs, 99.11k words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-si.tmx.gz">8.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (432,813 sentence pairs, 5.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (1,516,040 sentence pairs, 17.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-sl.tmx.gz">1.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Albanian (233,531 sentence pairs, 2.97M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Serbian (1,505,564 sentence pairs, 18.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-sr.tmx.gz">1.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (1,946,407 sentence pairs, 24.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-sv.tmx.gz">1.9M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Thai (12,751 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-th.tmx.gz">12.8k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Turkish (1,759,578 sentence pairs, 19.56M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-tr.tmx.gz">1.8M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (30,643 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-uk.tmx.gz">30.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Urdu (1,178 sentence pairs, 18.35k words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-ur.tmx.gz">1.2k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Vietnamese (174,281 sentence pairs, 2.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-vi.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (190,181 sentence pairs, 1.60M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (104,779 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/nb-zh_tw.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.nl.gz">nl</a>
</th><td>61,640</td> <td>387.2M</td> <td>53.8M</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Dutch-Arabic (5,393,898 sentence pairs, 74.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-nl.txt.zip">5.4M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Bulgarian (11,433,596 sentence pairs, 141.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-nl.txt.zip">11.4M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Dutch-Bosnian (1,404,622 sentence pairs, 17.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-nl.txt.zip">1.4M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Dutch-Catalan (58,508 sentence pairs, 0.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-nl.txt.zip">58.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Czech (13,231,734 sentence pairs, 157.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-nl.txt.zip">13.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Dutch-Danish (5,790,973 sentence pairs, 73.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-nl.txt.zip">5.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Dutch-German (3,513,561 sentence pairs, 44.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-nl.txt.zip">3.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Greek (11,630,400 sentence pairs, 152.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-nl.txt.zip">11.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (24,368,389 sentence pairs, 315.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-nl.txt.zip">24.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (17,034,902 sentence pairs, 220.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-nl.txt.zip">17.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Dutch-Estonian (4,762,073 sentence pairs, 56.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-nl.txt.zip">4.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Basque (655 sentence pairs, 6.88k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-nl.txt.zip">0.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Dutch-Persian (3,575 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-nl.txt.zip">3.6k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Dutch-Finnish (8,923,751 sentence pairs, 99.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-nl.txt.zip">8.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-French (11,872,900 sentence pairs, 154.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-nl.txt.zip">11.9M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Hebrew (8,754,242 sentence pairs, 117.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-nl.txt.zip">8.8M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Croatian (9,890,058 sentence pairs, 119.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-nl.txt.zip">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Hungarian (12,211,301 sentence pairs, 141.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-nl.txt.zip">12.2M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Dutch-Indonesian (6,191 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/id-nl.txt.zip">6.2k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Dutch-Icelandic (493,292 sentence pairs, 5.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-nl.txt.zip">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Italian (6,382,553 sentence pairs, 82.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-nl.txt.zip">6.4M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Dutch-Japanese (143,069 sentence pairs, 1.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-nl.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Kazakh (921 sentence pairs, 10.85k words) - Moses format' href="download.php?f=OpenSubtitles2012/kk-nl.txt.zip">0.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Dutch-Korean (8,673 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-nl.txt.zip">8.7k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Dutch-Lithuanian (361,556 sentence pairs, 4.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-nl.txt.zip">0.4M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Dutch-Latvian (117,356 sentence pairs, 1.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-nl.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Dutch-Macedonian (795,673 sentence pairs, 9.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-nl.txt.zip">0.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Dutch-Malay (1,575,040 sentence pairs, 19.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-nl.txt.zip">1.6M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (2,269,269 sentence pairs, 27.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-nl.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Polish (8,977,792 sentence pairs, 114.86M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-pl.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (10,598,255 sentence pairs, 145.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-pt.tmx.gz">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (11,641,852 sentence pairs, 159.49M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-pt_br.tmx.gz">11.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Romanian (11,738,200 sentence pairs, 163.31M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-ro.tmx.gz">11.7M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Dutch-Russian (2,693,405 sentence pairs, 35.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-ru.tmx.gz">2.7M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Dutch-Sinhala (16,784 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-si.tmx.gz">16.8k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Dutch-Slovak (1,980,168 sentence pairs, 25.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Slovenian (6,724,494 sentence pairs, 85.13M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-sl.tmx.gz">6.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Dutch-Albanian (655,413 sentence pairs, 8.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Dutch-Serbian (7,136,588 sentence pairs, 94.07M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-sr.tmx.gz">7.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-Swedish (5,124,831 sentence pairs, 69.02M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-sv.tmx.gz">5.1M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Dutch-Thai (26,518 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-th.tmx.gz">26.5k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Turkish (9,498,861 sentence pairs, 115.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-tr.tmx.gz">9.5M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Dutch-Ukrainian (57,109 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-uk.tmx.gz">57.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Dutch-Urdu (1,922 sentence pairs, 35.40k words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Dutch-Vietnamese (370,622 sentence pairs, 5.59M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Chinese (855 sentence pairs, 8.19k words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Dutch-Chinese (515,680 sentence pairs, 4.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Dutch-Chinese (291,569 sentence pairs, 2.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/nl-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.pl.gz">pl</a>
</th><td>142,405</td> <td>772.4M</td> <td>124.3M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Afrikaans (672 sentence pairs, 11.44k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-pl.txt.zip">0.7k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Arabic (4,737,422 sentence pairs, 58.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-pl.txt.zip">4.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Azerbaijani (27 sentence pairs, 0.21k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-pl.txt.zip">27</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Polish-Bulgarian (11,014,305 sentence pairs, 122.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-pl.txt.zip">11.0M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Polish-Bosnian (1,434,868 sentence pairs, 15.84M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-pl.txt.zip">1.4M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Polish-Catalan (56,395 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-pl.txt.zip">56.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Czech (14,319,588 sentence pairs, 149.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-pl.txt.zip">14.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Danish (5,138,265 sentence pairs, 58.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-pl.txt.zip">5.1M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Polish-German (3,164,864 sentence pairs, 36.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-pl.txt.zip">3.2M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Polish-Greek (9,994,319 sentence pairs, 117.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-pl.txt.zip">10.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-English (23,825,341 sentence pairs, 276.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-pl.txt.zip">23.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Spanish (14,897,680 sentence pairs, 173.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-pl.txt.zip">14.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Polish-Estonian (4,607,312 sentence pairs, 48.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-pl.txt.zip">4.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Basque (649 sentence pairs, 5.90k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-pl.txt.zip">0.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Persian (2,107 sentence pairs, 51.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-pl.txt.zip">2.1k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Finnish (9,498,593 sentence pairs, 94.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-pl.txt.zip">9.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Polish-French (9,653,002 sentence pairs, 114.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-pl.txt.zip">9.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Galician (114 sentence pairs, 1.26k words) - Moses format' href="download.php?f=OpenSubtitles2012/gl-pl.txt.zip">0.1k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Polish-Hebrew (7,686,715 sentence pairs, 93.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-pl.txt.zip">7.7M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Croatian (8,978,975 sentence pairs, 96.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-pl.txt.zip">9.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-Hungarian (10,476,723 sentence pairs, 108.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-pl.txt.zip">10.5M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Polish-Indonesian (4,595 sentence pairs, 99.48k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-pl.txt.zip">4.6k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Polish-Icelandic (507,123 sentence pairs, 5.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-pl.txt.zip">0.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Italian (5,311,476 sentence pairs, 61.61M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-pl.txt.zip">5.3M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Polish-Japanese (114,580 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-pl.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Kazakh (984 sentence pairs, 10.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/kk-pl.txt.zip">1.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Polish-Korean (8,795 sentence pairs, 96.80k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-pl.txt.zip">8.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Polish-Lithuanian (377,999 sentence pairs, 3.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Polish-Latvian (111,035 sentence pairs, 1.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-pl.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Polish-Macedonian (787,964 sentence pairs, 8.82M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-pl.txt.zip">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Malay (1,327,149 sentence pairs, 14.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-pl.txt.zip">1.3M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Polish-BokmÃ¥l, Norwegian (2,113,121 sentence pairs, 23.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-pl.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Dutch (12,872,489 sentence pairs, 152.43M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-pl.txt.zip">12.9M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Polish-Portuguese (9,142,845 sentence pairs, 113.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-pt.tmx.gz">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Portuguese (10,634,541 sentence pairs, 132.53M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-pt_br.tmx.gz">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-Romanian (11,032,046 sentence pairs, 138.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-ro.tmx.gz">11.0M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Polish-Russian (2,407,015 sentence pairs, 28.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-ru.tmx.gz">2.4M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Polish-Sinhala (17,823 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-si.tmx.gz">17.8k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Polish-Slovak (1,933,443 sentence pairs, 22.71M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-sk.tmx.gz">1.9M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Polish-Slovenian (6,367,841 sentence pairs, 72.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-sl.tmx.gz">6.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Polish-Albanian (613,648 sentence pairs, 7.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Polish-Serbian (7,074,143 sentence pairs, 84.20M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-sr.tmx.gz">7.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Swedish (4,520,431 sentence pairs, 54.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-sv.tmx.gz">4.5M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Polish-Thai (19,755 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-th.tmx.gz">19.8k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Turkish (8,972,970 sentence pairs, 97.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-tr.tmx.gz">9.0M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Polish-Ukrainian (69,052 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-uk.tmx.gz">69.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Polish-Urdu (1,903 sentence pairs, 32.31k words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Polish-Vietnamese (349,331 sentence pairs, 4.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Chinese (889 sentence pairs, 7.50k words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Polish-Chinese (422,443 sentence pairs, 3.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Polish-Chinese (252,108 sentence pairs, 1.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/pl-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.pt.gz">pt</a>
</th><td>61,263</td> <td>387.8M</td> <td>55.7M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Afrikaans (676 sentence pairs, 12.54k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-pt.txt.zip">0.7k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Arabic (5,430,431 sentence pairs, 72.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-pt.txt.zip">5.4M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Bulgarian (11,397,917 sentence pairs, 134.82M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-pt.txt.zip">11.4M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Bosnian (1,426,471 sentence pairs, 16.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-pt.txt.zip">1.4M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Portuguese-Catalan (53,468 sentence pairs, 0.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-pt.txt.zip">53.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (12,893,443 sentence pairs, 145.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-pt.txt.zip">12.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Danish (5,516,634 sentence pairs, 66.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-pt.txt.zip">5.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Portuguese-German (3,243,420 sentence pairs, 39.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-pt.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (11,453,565 sentence pairs, 143.63M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-pt.txt.zip">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (24,262,749 sentence pairs, 296.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-pt.txt.zip">24.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (17,729,880 sentence pairs, 215.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-pt.txt.zip">17.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Estonian (4,789,011 sentence pairs, 53.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-pt.txt.zip">4.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Basque (689 sentence pairs, 6.55k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-pt.txt.zip">0.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Portuguese-Persian (3,000 sentence pairs, 70.71k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-pt.txt.zip">3.0k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Finnish (8,830,624 sentence pairs, 94.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-pt.txt.zip">8.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (11,465,334 sentence pairs, 142.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-pt.txt.zip">11.5M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Hebrew (8,650,738 sentence pairs, 112.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-pt.txt.zip">8.7M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Croatian (9,415,775 sentence pairs, 107.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-pt.txt.zip">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hungarian (12,204,230 sentence pairs, 133.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-pt.txt.zip">12.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Indonesian (6,106 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/id-pt.txt.zip">6.1k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Portuguese-Icelandic (547,651 sentence pairs, 6.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-pt.txt.zip">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Italian (6,789,648 sentence pairs, 83.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-pt.txt.zip">6.8M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Portuguese-Japanese (143,392 sentence pairs, 1.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-pt.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Kazakh (1,066 sentence pairs, 10.59k words) - Moses format' href="download.php?f=OpenSubtitles2012/kk-pt.txt.zip">1.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Korean (11,545 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-pt.txt.zip">11.5k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Portuguese-Lithuanian (389,320 sentence pairs, 4.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-pt.txt.zip">0.4M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Portuguese-Latvian (118,623 sentence pairs, 1.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-pt.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Portuguese-Macedonian (826,769 sentence pairs, 9.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-pt.txt.zip">0.8M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Malay (1,680,239 sentence pairs, 19.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-pt.txt.zip">1.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (2,199,747 sentence pairs, 25.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-pt.txt.zip">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (14,713,149 sentence pairs, 185.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-pt.txt.zip">14.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Polish (12,234,178 sentence pairs, 139.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-pt.txt.zip">12.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (13,164,638 sentence pairs, 175.21M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-pt_br.tmx.gz">13.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (11,945,524 sentence pairs, 160.19M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-ro.tmx.gz">11.9M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Portuguese-Russian (2,751,729 sentence pairs, 34.92M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-ru.tmx.gz">2.8M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Portuguese-Sinhala (20,158 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-si.tmx.gz">20.2k</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Portuguese-Slovak (2,049,066 sentence pairs, 25.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Slovenian (6,774,669 sentence pairs, 82.44M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-sl.tmx.gz">6.8M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Albanian (688,502 sentence pairs, 8.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Serbian (7,173,216 sentence pairs, 91.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-sr.tmx.gz">7.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Swedish (5,087,381 sentence pairs, 66.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-sv.tmx.gz">5.1M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Portuguese-Thai (27,543 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-th.tmx.gz">27.5k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Turkish (9,685,707 sentence pairs, 113.49M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-tr.tmx.gz">9.7M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Portuguese-Ukrainian (68,135 sentence pairs, 0.83M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-uk.tmx.gz">68.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Urdu (1,819 sentence pairs, 32.84k words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Portuguese-Vietnamese (396,511 sentence pairs, 5.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Chinese (919 sentence pairs, 7.95k words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Portuguese-Chinese (507,400 sentence pairs, 4.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Portuguese-Chinese (304,650 sentence pairs, 2.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt_br plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.pt_br.gz">pt_br</a>
</th><td>95,541</td> <td>587.0M</td> <td>85.4M</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Arabic (6,305,931 sentence pairs, 82.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-pt_br.txt.zip">6.3M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Bulgarian (14,118,730 sentence pairs, 166.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-pt_br.txt.zip">14.1M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Bosnian (1,608,930 sentence pairs, 18.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-pt_br.txt.zip">1.6M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Portuguese-Catalan (59,710 sentence pairs, 0.71M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-pt_br.txt.zip">59.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (15,396,802 sentence pairs, 175.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-pt_br.txt.zip">15.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Danish (5,591,640 sentence pairs, 67.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-pt_br.txt.zip">5.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Portuguese-German (3,655,684 sentence pairs, 45.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-pt_br.txt.zip">3.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (14,001,011 sentence pairs, 176.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-pt_br.txt.zip">14.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (34,626,673 sentence pairs, 423.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-pt_br.txt.zip">34.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (25,203,965 sentence pairs, 305.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-pt_br.txt.zip">25.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-Estonian (5,163,055 sentence pairs, 57.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-pt_br.txt.zip">5.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Basque (643 sentence pairs, 6.72k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-pt_br.txt.zip">0.6k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Portuguese-Persian (4,709 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-pt_br.txt.zip">4.7k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Portuguese-Finnish (9,473,526 sentence pairs, 100.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-pt_br.txt.zip">9.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (15,084,465 sentence pairs, 188.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-pt_br.txt.zip">15.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hebrew (10,257,979 sentence pairs, 131.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-pt_br.txt.zip">10.3M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-Croatian (11,107,868 sentence pairs, 127.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-pt_br.txt.zip">11.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hungarian (15,373,532 sentence pairs, 168.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-pt_br.txt.zip">15.4M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Portuguese-Indonesian (6,424 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/id-pt_br.txt.zip">6.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Portuguese-Icelandic (442,792 sentence pairs, 5.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-pt_br.txt.zip">0.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Italian (8,872,416 sentence pairs, 109.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-pt_br.txt.zip">8.9M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Portuguese-Japanese (159,532 sentence pairs, 1.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-pt_br.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Portuguese-Korean (10,917 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-pt_br.txt.zip">10.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Portuguese-Lithuanian (390,043 sentence pairs, 4.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-pt_br.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Portuguese-Latvian (128,795 sentence pairs, 1.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-pt_br.txt.zip">0.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Portuguese-Macedonian (833,896 sentence pairs, 9.75M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-pt_br.txt.zip">0.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Portuguese-Malay (1,818,241 sentence pairs, 20.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-pt_br.txt.zip">1.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (2,083,405 sentence pairs, 24.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-pt_br.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (16,895,206 sentence pairs, 212.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-pt_br.txt.zip">16.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Polish (14,178,304 sentence pairs, 162.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-pt_br.txt.zip">14.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (20,243,452 sentence pairs, 230.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-pt_br.txt.zip">20.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (14,726,446 sentence pairs, 197.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-ro.tmx.gz">14.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Portuguese-Russian (3,596,276 sentence pairs, 45.38M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-ru.tmx.gz">3.6M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Portuguese-Sinhala (28,162 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-si.tmx.gz">28.2k</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Portuguese-Slovak (2,430,330 sentence pairs, 30.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-sk.tmx.gz">2.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Slovenian (7,159,525 sentence pairs, 86.72M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-sl.tmx.gz">7.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Albanian (708,524 sentence pairs, 8.95M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Serbian (8,562,841 sentence pairs, 108.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-sr.tmx.gz">8.6M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Swedish (5,284,857 sentence pairs, 68.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-sv.tmx.gz">5.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Portuguese-Thai (27,873 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-th.tmx.gz">27.9k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Turkish (11,723,066 sentence pairs, 136.94M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-tr.tmx.gz">11.7M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Portuguese-Ukrainian (76,860 sentence pairs, 0.91M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-uk.tmx.gz">76.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Urdu (2,003 sentence pairs, 34.32k words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Portuguese-Vietnamese (406,103 sentence pairs, 5.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Chinese (909 sentence pairs, 8.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Portuguese-Chinese (579,419 sentence pairs, 5.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-zh_cn.tmx.gz">0.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Portuguese-Chinese (324,694 sentence pairs, 2.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/pt_br-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ro.gz">ro</a>
</th><td>76,776</td> <td>493.5M</td> <td>69.7M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Afrikaans (675 sentence pairs, 12.65k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ro.txt.zip">0.7k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-Arabic (6,274,333 sentence pairs, 83.63M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ro.txt.zip">6.3M</a>
</td><td></td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Bulgarian (14,778,683 sentence pairs, 175.75M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ro.txt.zip">14.8M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Romanian-Bosnian (1,682,397 sentence pairs, 19.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ro.txt.zip">1.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Romanian-Catalan (62,412 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-ro.txt.zip">62.4k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Czech (15,115,751 sentence pairs, 172.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ro.txt.zip">15.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-Danish (5,432,579 sentence pairs, 66.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ro.txt.zip">5.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Romanian-German (3,381,388 sentence pairs, 42.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ro.txt.zip">3.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Greek (13,051,554 sentence pairs, 165.71M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ro.txt.zip">13.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-English (27,963,692 sentence pairs, 340.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ro.txt.zip">28.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (19,511,072 sentence pairs, 241.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ro.txt.zip">19.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Estonian (5,317,958 sentence pairs, 59.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ro.txt.zip">5.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Basque (689 sentence pairs, 6.42k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-ro.txt.zip">0.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Romanian-Persian (2,791 sentence pairs, 84.05k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-ro.txt.zip">2.8k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Finnish (9,121,115 sentence pairs, 98.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ro.txt.zip">9.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-French (12,050,465 sentence pairs, 152.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ro.txt.zip">12.1M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Romanian-Hebrew (9,633,089 sentence pairs, 125.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ro.txt.zip">9.6M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Croatian (11,454,634 sentence pairs, 132.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ro.txt.zip">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Hungarian (13,623,208 sentence pairs, 150.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ro.txt.zip">13.6M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Indonesian (6,331 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/id-ro.txt.zip">6.3k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Romanian-Icelandic (473,499 sentence pairs, 5.51M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-ro.txt.zip">0.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Italian (7,113,175 sentence pairs, 88.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ro.txt.zip">7.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Romanian-Japanese (146,951 sentence pairs, 1.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-ro.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Kazakh (1,084 sentence pairs, 10.34k words) - Moses format' href="download.php?f=OpenSubtitles2012/kk-ro.txt.zip">1.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Romanian-Korean (9,389 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-ro.txt.zip">9.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Romanian-Lithuanian (380,499 sentence pairs, 4.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-ro.txt.zip">0.4M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Romanian-Latvian (116,417 sentence pairs, 1.32M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-ro.txt.zip">0.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Romanian-Macedonian (881,482 sentence pairs, 10.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-ro.txt.zip">0.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Romanian-Malay (1,702,945 sentence pairs, 19.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-ro.txt.zip">1.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (2,157,483 sentence pairs, 26.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-ro.txt.zip">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (15,874,252 sentence pairs, 202.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-ro.txt.zip">15.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Polish (14,815,109 sentence pairs, 170.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-ro.txt.zip">14.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (15,922,570 sentence pairs, 191.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-ro.txt.zip">15.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (20,193,727 sentence pairs, 242.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-ro.txt.zip">20.2M</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Romanian-Russian (3,232,917 sentence pairs, 41.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-ru.tmx.gz">3.2M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Romanian-Sinhala (27,402 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-si.tmx.gz">27.4k</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Romanian-Slovak (2,373,579 sentence pairs, 29.87M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-sk.tmx.gz">2.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Slovenian (7,557,200 sentence pairs, 92.81M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-sl.tmx.gz">7.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Albanian (698,882 sentence pairs, 8.96M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Romanian-Serbian (8,880,788 sentence pairs, 113.83M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-sr.tmx.gz">8.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-Swedish (5,303,063 sentence pairs, 70.36M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-sv.tmx.gz">5.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Romanian-Thai (25,582 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-th.tmx.gz">25.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Turkish (11,682,209 sentence pairs, 138.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-tr.tmx.gz">11.7M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Romanian-Ukrainian (76,400 sentence pairs, 0.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-uk.tmx.gz">76.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Urdu (1,899 sentence pairs, 33.97k words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Romanian-Vietnamese (397,165 sentence pairs, 5.74M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Chinese (885 sentence pairs, 8.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Romanian-Chinese (495,936 sentence pairs, 4.39M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Romanian-Chinese (293,110 sentence pairs, 2.61M words) - TMX format' href="download.php?f=OpenSubtitles2012/ro-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ru.gz">ru</a>
</th><td>12,802</td> <td>68.0M</td> <td>10.2M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Afrikaans (685 sentence pairs, 11.80k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-ru.txt.zip">0.7k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Russian-Arabic (1,804,960 sentence pairs, 23.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ru.txt.zip">1.8M</a>
</td><td></td><td></td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Russian-Bulgarian (3,352,329 sentence pairs, 38.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ru.txt.zip">3.4M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Russian-Bosnian (418,197 sentence pairs, 4.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-ru.txt.zip">0.4M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Russian-Catalan (34,188 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-ru.txt.zip">34.2k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Russian-Czech (3,435,685 sentence pairs, 38.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ru.txt.zip">3.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Russian-Danish (1,343,806 sentence pairs, 15.82M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ru.txt.zip">1.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Russian-German (1,252,238 sentence pairs, 15.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ru.txt.zip">1.3M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Russian-Greek (2,986,268 sentence pairs, 36.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ru.txt.zip">3.0M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Russian-English (5,880,217 sentence pairs, 69.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ru.txt.zip">5.9M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Russian-Spanish (4,196,521 sentence pairs, 50.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ru.txt.zip">4.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Russian-Estonian (1,571,412 sentence pairs, 16.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ru.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Persian (2,384 sentence pairs, 54.62k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-ru.txt.zip">2.4k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Russian-Finnish (2,007,496 sentence pairs, 20.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ru.txt.zip">2.0M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Russian-French (3,240,881 sentence pairs, 40.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ru.txt.zip">3.2M</a>
</td><td></td><td bgcolor="#d3ffca"><a rel="nofollow" title='Russian-Hebrew (2,452,510 sentence pairs, 30.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ru.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Russian-Croatian (2,512,576 sentence pairs, 28.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ru.txt.zip">2.5M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Russian-Hungarian (3,241,651 sentence pairs, 34.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ru.txt.zip">3.2M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Russian-Indonesian (2,476 sentence pairs, 48.81k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-ru.txt.zip">2.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Russian-Icelandic (159,310 sentence pairs, 1.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-ru.txt.zip">0.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Russian-Italian (2,597,575 sentence pairs, 31.71M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ru.txt.zip">2.6M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Russian-Japanese (57,845 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-ru.txt.zip">57.8k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Russian-Korean (5,888 sentence pairs, 63.63k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-ru.txt.zip">5.9k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Russian-Lithuanian (191,120 sentence pairs, 1.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-ru.txt.zip">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Latvian (78,730 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-ru.txt.zip">78.7k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Russian-Macedonian (308,106 sentence pairs, 3.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-ru.txt.zip">0.3M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-Malay (554,185 sentence pairs, 6.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-ru.txt.zip">0.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (673,595 sentence pairs, 7.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-ru.txt.zip">0.7M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Russian-Dutch (3,073,138 sentence pairs, 38.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-ru.txt.zip">3.1M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Russian-Polish (2,718,041 sentence pairs, 30.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-ru.txt.zip">2.7M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Russian-Portuguese (3,158,647 sentence pairs, 37.61M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-ru.txt.zip">3.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Russian-Portuguese (4,148,106 sentence pairs, 48.84M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-ru.txt.zip">4.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Russian-Romanian (3,680,310 sentence pairs, 43.61M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-ru.txt.zip">3.7M</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Russian-Sinhala (13,588 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-si.tmx.gz">13.6k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Russian-Slovak (743,042 sentence pairs, 8.82M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Russian-Slovenian (1,878,501 sentence pairs, 21.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Russian-Albanian (236,817 sentence pairs, 2.89M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Russian-Serbian (2,088,605 sentence pairs, 25.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-sr.tmx.gz">2.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Russian-Swedish (1,482,330 sentence pairs, 18.47M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-sv.tmx.gz">1.5M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Russian-Thai (12,788 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-th.tmx.gz">12.8k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Russian-Turkish (3,014,937 sentence pairs, 33.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-tr.tmx.gz">3.0M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Russian-Ukrainian (54,406 sentence pairs, 0.58M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-uk.tmx.gz">54.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Urdu (697 sentence pairs, 13.45k words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Russian-Vietnamese (186,702 sentence pairs, 2.58M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Chinese (889 sentence pairs, 7.89k words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Russian-Chinese (193,842 sentence pairs, 1.57M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Chinese (98,130 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/ru-zh_tw.tmx.gz">98.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.si.gz">si</a>
</th><td>36</td> <td>0.3M</td> <td>44.2k</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Arabic (25,322 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-si.txt.zip">25.3k</a>
</td><td></td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Sinhala-Bulgarian (24,952 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-si.txt.zip">25.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sinhala-Bosnian (555 sentence pairs, 5.84k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-si.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Sinhala-Czech (21,297 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-si.txt.zip">21.3k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Danish (16,345 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-si.txt.zip">16.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-German (3,194 sentence pairs, 41.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-si.txt.zip">3.2k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Greek (16,813 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-si.txt.zip">16.8k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Sinhala-English (31,328 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-si.txt.zip">31.3k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Spanish (22,168 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-si.txt.zip">22.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Estonian (15,382 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-si.txt.zip">15.4k</a>
</td><td></td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Sinhala-Finnish (17,621 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-si.txt.zip">17.6k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Sinhala-French (16,034 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-si.txt.zip">16.0k</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Sinhala-Hebrew (15,210 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-si.txt.zip">15.2k</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Croatian (14,862 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-si.txt.zip">14.9k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Sinhala-Hungarian (22,487 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-si.txt.zip">22.5k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Sinhala-Icelandic (1,957 sentence pairs, 23.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/is-si.txt.zip">2.0k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Sinhala-Italian (13,487 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-si.txt.zip">13.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sinhala-Japanese (582 sentence pairs, 3.80k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-si.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Sinhala-Lithuanian (3,002 sentence pairs, 30.75k words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-si.txt.zip">3.0k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Sinhala-Macedonian (6,080 sentence pairs, 77.24k words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-si.txt.zip">6.1k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Malay (18,521 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-si.txt.zip">18.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Sinhala-BokmÃ¥l, Norwegian (8,135 sentence pairs, 99.35k words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-si.txt.zip">8.1k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Dutch (17,015 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-si.txt.zip">17.0k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Polish (18,179 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-si.txt.zip">18.2k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Portuguese (22,119 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-si.txt.zip">22.1k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Sinhala-Portuguese (30,316 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-si.txt.zip">30.3k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Sinhala-Romanian (29,271 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-si.txt.zip">29.3k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Sinhala-Russian (13,794 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-si.txt.zip">13.8k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Slovak (3,736 sentence pairs, 43.19k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-sk.tmx.gz">3.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Slovenian (19,584 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/si-sl.tmx.gz">19.6k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Sinhala-Albanian (7,171 sentence pairs, 92.70k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-sq.tmx.gz">7.2k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Serbian (18,604 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/si-sr.tmx.gz">18.6k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Swedish (13,945 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2012/si-sv.tmx.gz">13.9k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Turkish (21,144 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2012/si-tr.tmx.gz">21.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Ukrainian (1,083 sentence pairs, 14.65k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-uk.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Sinhala-Vietnamese (3,934 sentence pairs, 59.23k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-vi.tmx.gz">3.9k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Sinhala-Chinese (5,126 sentence pairs, 36.02k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-zh_cn.tmx.gz">5.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Chinese (2,648 sentence pairs, 21.32k words) - TMX format' href="download.php?f=OpenSubtitles2012/si-zh_tw.tmx.gz">2.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.sk.gz">sk</a>
</th><td>8,151</td> <td>46.8M</td> <td>7.2M</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Arabic (1,356,214 sentence pairs, 17.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-sk.txt.zip">1.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Azerbaijani (34 sentence pairs, 0.20k words) - Moses format' href="download.php?f=OpenSubtitles2012/az-sk.txt.zip">34</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='Slovak-Bulgarian (2,417,550 sentence pairs, 27.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-sk.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Slovak-Bosnian (381,099 sentence pairs, 4.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-sk.txt.zip">0.4M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Slovak-Catalan (18,960 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-sk.txt.zip">19.0k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Slovak-Czech (3,136,326 sentence pairs, 32.51M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-sk.txt.zip">3.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Danish (1,224,532 sentence pairs, 14.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-sk.txt.zip">1.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-German (629,501 sentence pairs, 7.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-sk.txt.zip">0.6M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovak-Greek (2,071,704 sentence pairs, 25.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-sk.txt.zip">2.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovak-English (3,778,165 sentence pairs, 43.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-sk.txt.zip">3.8M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Slovak-Spanish (2,940,614 sentence pairs, 34.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-sk.txt.zip">2.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Estonian (1,325,370 sentence pairs, 14.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-sk.txt.zip">1.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Basque (689 sentence pairs, 6.08k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-sk.txt.zip">0.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Slovak-Persian (2,324 sentence pairs, 57.08k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-sk.txt.zip">2.3k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Finnish (1,713,559 sentence pairs, 17.71M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-sk.txt.zip">1.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-French (2,151,213 sentence pairs, 26.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-sk.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovak-Hebrew (1,766,688 sentence pairs, 21.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-sk.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovak-Croatian (1,958,240 sentence pairs, 21.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-sk.txt.zip">2.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovak-Hungarian (2,475,263 sentence pairs, 26.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-sk.txt.zip">2.5M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Slovak-Indonesian (2,877 sentence pairs, 77.55k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-sk.txt.zip">2.9k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Slovak-Icelandic (91,081 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-sk.txt.zip">91.1k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Slovak-Italian (1,347,036 sentence pairs, 16.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-sk.txt.zip">1.3M</a>
</td><td bgcolor="#fff5ef"><a rel="nofollow" title='Slovak-Japanese (49,338 sentence pairs, 0.44M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-sk.txt.zip">49.3k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovak-Korean (3,445 sentence pairs, 42.24k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-sk.txt.zip">3.4k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Slovak-Lithuanian (154,648 sentence pairs, 1.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-sk.txt.zip">0.2M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Slovak-Latvian (51,106 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-sk.txt.zip">51.1k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-Macedonian (293,434 sentence pairs, 3.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-sk.txt.zip">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Slovak-Malay (439,428 sentence pairs, 4.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-sk.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (465,084 sentence pairs, 5.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-sk.txt.zip">0.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Slovak-Dutch (2,371,241 sentence pairs, 29.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-sk.txt.zip">2.4M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Slovak-Polish (2,325,341 sentence pairs, 25.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-sk.txt.zip">2.3M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Slovak-Portuguese (2,409,579 sentence pairs, 28.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-sk.txt.zip">2.4M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Slovak-Portuguese (2,938,200 sentence pairs, 33.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-sk.txt.zip">2.9M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Slovak-Romanian (2,876,578 sentence pairs, 33.44M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-sk.txt.zip">2.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Russian (809,641 sentence pairs, 9.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-sk.txt.zip">0.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Slovak-Sinhala (3,776 sentence pairs, 43.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-sk.txt.zip">3.8k</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Slovenian (1,544,796 sentence pairs, 17.75M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-sl.tmx.gz">1.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Slovak-Albanian (204,464 sentence pairs, 2.50M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Serbian (1,613,395 sentence pairs, 19.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-sr.tmx.gz">1.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Swedish (1,188,564 sentence pairs, 14.78M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-sv.tmx.gz">1.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovak-Thai (4,074 sentence pairs, 34.59k words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-th.tmx.gz">4.1k</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='Slovak-Turkish (2,123,958 sentence pairs, 23.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-tr.tmx.gz">2.1M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Slovak-Ukrainian (19,215 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-uk.tmx.gz">19.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Urdu (1,124 sentence pairs, 17.74k words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-ur.tmx.gz">1.1k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Slovak-Vietnamese (119,261 sentence pairs, 1.66M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-vi.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='Slovak-Chinese (153,327 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Slovak-Chinese (102,953 sentence pairs, 0.84M words) - TMX format' href="download.php?f=OpenSubtitles2012/sk-zh_tw.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.sl.gz">sl</a>
</th><td>30,746</td> <td>167.7M</td> <td>27.4M</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Arabic (4,139,230 sentence pairs, 50.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-sl.txt.zip">4.1M</a>
</td><td></td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Bulgarian (7,884,909 sentence pairs, 85.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-sl.txt.zip">7.9M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Bosnian (1,209,955 sentence pairs, 12.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-sl.txt.zip">1.2M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Slovenian-Catalan (43,765 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-sl.txt.zip">43.8k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Czech (8,525,269 sentence pairs, 89.04M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-sl.txt.zip">8.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Danish (4,409,346 sentence pairs, 49.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-sl.txt.zip">4.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovenian-German (2,087,412 sentence pairs, 23.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-sl.txt.zip">2.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Greek (6,692,658 sentence pairs, 77.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-sl.txt.zip">6.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Slovenian-English (12,760,647 sentence pairs, 144.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-sl.txt.zip">12.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovenian-Spanish (9,559,602 sentence pairs, 108.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-sl.txt.zip">9.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Estonian (4,388,358 sentence pairs, 45.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-sl.txt.zip">4.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Basque (646 sentence pairs, 6.17k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-sl.txt.zip">0.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Persian (2,544 sentence pairs, 69.26k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-sl.txt.zip">2.5k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Finnish (6,266,984 sentence pairs, 61.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-sl.txt.zip">6.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-French (6,514,112 sentence pairs, 75.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-sl.txt.zip">6.5M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Hebrew (5,984,152 sentence pairs, 71.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-sl.txt.zip">6.0M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Slovenian-Croatian (7,409,914 sentence pairs, 76.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-sl.txt.zip">7.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Hungarian (7,190,457 sentence pairs, 72.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-sl.txt.zip">7.2M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Indonesian (3,875 sentence pairs, 68.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-sl.txt.zip">3.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Slovenian-Icelandic (426,753 sentence pairs, 4.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-sl.txt.zip">0.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Slovenian-Italian (3,573,729 sentence pairs, 40.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-sl.txt.zip">3.6M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Slovenian-Japanese (124,281 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-sl.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Slovenian-Korean (8,456 sentence pairs, 93.95k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-sl.txt.zip">8.5k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Slovenian-Lithuanian (372,690 sentence pairs, 3.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Slovenian-Latvian (117,268 sentence pairs, 1.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-sl.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovenian-Macedonian (794,240 sentence pairs, 8.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-sl.txt.zip">0.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Malay (1,245,905 sentence pairs, 13.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-sl.txt.zip">1.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (1,739,673 sentence pairs, 19.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-sl.txt.zip">1.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-Dutch (8,798,957 sentence pairs, 103.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-sl.txt.zip">8.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Polish (8,323,583 sentence pairs, 86.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-sl.txt.zip">8.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Slovenian-Portuguese (8,629,376 sentence pairs, 95.77M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-sl.txt.zip">8.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-Portuguese (9,316,656 sentence pairs, 103.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-sl.txt.zip">9.3M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Slovenian-Romanian (9,602,208 sentence pairs, 107.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-sl.txt.zip">9.6M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Russian (2,106,742 sentence pairs, 22.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-sl.txt.zip">2.1M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Slovenian-Sinhala (20,052 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/si-sl.txt.zip">20.1k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Slovenian-Slovak (1,821,961 sentence pairs, 19.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-sl.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovenian-Albanian (598,520 sentence pairs, 7.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Serbian (5,237,773 sentence pairs, 60.85M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-sr.tmx.gz">5.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Swedish (3,850,112 sentence pairs, 46.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-sv.tmx.gz">3.9M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Slovenian-Thai (26,311 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-th.tmx.gz">26.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Turkish (6,413,076 sentence pairs, 68.34M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-tr.tmx.gz">6.4M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovenian-Ukrainian (60,785 sentence pairs, 0.67M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-uk.tmx.gz">60.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovenian-Urdu (1,846 sentence pairs, 30.55k words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Slovenian-Vietnamese (352,731 sentence pairs, 4.81M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Chinese (901 sentence pairs, 7.24k words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovenian-Chinese (428,420 sentence pairs, 3.32M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='Slovenian-Chinese (254,969 sentence pairs, 2.00M words) - TMX format' href="download.php?f=OpenSubtitles2012/sl-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.sq.gz">sq</a>
</th><td>1,400</td> <td>10.6M</td> <td>1.5M</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Arabic (550,558 sentence pairs, 7.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-sq.txt.zip">0.6M</a>
</td><td></td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Bulgarian (704,721 sentence pairs, 8.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-sq.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Albanian-Bosnian (139,122 sentence pairs, 1.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-sq.txt.zip">0.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Albanian-Catalan (10,355 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-sq.txt.zip">10.4k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Czech (746,398 sentence pairs, 8.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-sq.txt.zip">0.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Danish (527,618 sentence pairs, 6.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-sq.txt.zip">0.5M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Albanian-German (171,967 sentence pairs, 2.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Albanian-Greek (688,658 sentence pairs, 8.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-sq.txt.zip">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Albanian-English (928,151 sentence pairs, 11.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-sq.txt.zip">0.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Spanish (778,862 sentence pairs, 9.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-sq.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Estonian (571,184 sentence pairs, 6.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-sq.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Persian (366 sentence pairs, 6.33k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-sq.txt.zip">0.4k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Albanian-Finnish (662,253 sentence pairs, 7.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-sq.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-French (600,303 sentence pairs, 7.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-sq.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Hebrew (583,848 sentence pairs, 7.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-sq.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Albanian-Croatian (640,756 sentence pairs, 7.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-sq.txt.zip">0.6M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Albanian-Hungarian (744,375 sentence pairs, 8.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-sq.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Albanian-Icelandic (74,962 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-sq.txt.zip">75.0k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Albanian-Italian (470,243 sentence pairs, 5.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-sq.txt.zip">0.5M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Albanian-Japanese (34,727 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-sq.txt.zip">34.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Albanian-Korean (3,976 sentence pairs, 48.33k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-sq.txt.zip">4.0k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Albanian-Lithuanian (62,008 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-sq.txt.zip">62.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Albanian-Latvian (31,817 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-sq.txt.zip">31.8k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Albanian-Macedonian (198,048 sentence pairs, 2.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Malay (380,982 sentence pairs, 4.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-sq.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Albanian-BokmÃ¥l, Norwegian (254,136 sentence pairs, 3.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-sq.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Albanian-Dutch (761,393 sentence pairs, 9.65M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-sq.txt.zip">0.8M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Albanian-Polish (702,427 sentence pairs, 8.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-sq.txt.zip">0.7M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Albanian-Portuguese (799,127 sentence pairs, 9.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-sq.txt.zip">0.8M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Albanian-Portuguese (823,134 sentence pairs, 9.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-sq.txt.zip">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Albanian-Romanian (825,097 sentence pairs, 9.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-sq.txt.zip">0.8M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-Russian (252,054 sentence pairs, 2.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-sq.txt.zip">0.3M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Albanian-Sinhala (7,293 sentence pairs, 93.06k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-sq.txt.zip">7.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Albanian-Slovak (224,034 sentence pairs, 2.63M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Slovenian (671,114 sentence pairs, 7.50M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-sq.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Albanian-Serbian (587,415 sentence pairs, 7.28M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Swedish (474,326 sentence pairs, 6.17M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-sv.tmx.gz">0.5M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Albanian-Thai (10,352 sentence pairs, 96.46k words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-th.tmx.gz">10.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Turkish (652,019 sentence pairs, 7.37M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Albanian-Ukrainian (7,678 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-uk.tmx.gz">7.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Albanian-Urdu (792 sentence pairs, 16.42k words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Albanian-Vietnamese (122,352 sentence pairs, 1.80M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-vi.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Albanian-Chinese (97,080 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-zh_cn.tmx.gz">97.1k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Albanian-Chinese (52,853 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/sq-zh_tw.tmx.gz">52.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.sr.gz">sr</a>
</th><td>32,942</td> <td>194.8M</td> <td>30.0M</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Serbian-Arabic (4,071,892 sentence pairs, 52.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-sr.txt.zip">4.1M</a>
</td><td></td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-Bulgarian (8,593,289 sentence pairs, 98.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-sr.txt.zip">8.6M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Serbian-Bosnian (1,224,627 sentence pairs, 12.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-sr.txt.zip">1.2M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Serbian-Catalan (44,299 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-sr.txt.zip">44.3k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-Czech (9,041,510 sentence pairs, 99.21M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-sr.txt.zip">9.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Serbian-Danish (3,881,966 sentence pairs, 46.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-sr.txt.zip">3.9M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Serbian-German (2,332,598 sentence pairs, 27.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-sr.txt.zip">2.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-Greek (7,793,458 sentence pairs, 94.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-sr.txt.zip">7.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Serbian-English (14,187,454 sentence pairs, 167.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-sr.txt.zip">14.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Serbian-Spanish (10,789,065 sentence pairs, 129.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-sr.txt.zip">10.8M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Serbian-Estonian (3,779,626 sentence pairs, 40.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-sr.txt.zip">3.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Basque (657 sentence pairs, 6.21k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-sr.txt.zip">0.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Serbian-Persian (2,947 sentence pairs, 83.99k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-sr.txt.zip">2.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Serbian-Finnish (5,897,975 sentence pairs, 61.13M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-sr.txt.zip">5.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-French (6,993,036 sentence pairs, 85.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-sr.txt.zip">7.0M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-Hebrew (5,649,143 sentence pairs, 71.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-sr.txt.zip">5.6M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Serbian-Croatian (7,422,637 sentence pairs, 76.42M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-sr.txt.zip">7.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Hungarian (7,721,197 sentence pairs, 81.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-sr.txt.zip">7.7M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Serbian-Indonesian (3,922 sentence pairs, 67.47k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-sr.txt.zip">3.9k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Serbian-Icelandic (408,673 sentence pairs, 4.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-sr.txt.zip">0.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Serbian-Italian (4,216,526 sentence pairs, 50.08M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-sr.txt.zip">4.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Serbian-Japanese (109,634 sentence pairs, 0.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-sr.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-Kazakh (1,048 sentence pairs, 10.06k words) - Moses format' href="download.php?f=OpenSubtitles2012/kk-sr.txt.zip">1.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Serbian-Korean (7,661 sentence pairs, 88.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-sr.txt.zip">7.7k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Serbian-Lithuanian (331,518 sentence pairs, 3.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-sr.txt.zip">0.3M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Serbian-Latvian (107,740 sentence pairs, 1.16M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-sr.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Serbian-Macedonian (794,653 sentence pairs, 8.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-sr.txt.zip">0.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Serbian-Malay (1,184,675 sentence pairs, 13.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-sr.txt.zip">1.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Serbian-BokmÃ¥l, Norwegian (1,686,563 sentence pairs, 19.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-sr.txt.zip">1.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Serbian-Dutch (8,835,061 sentence pairs, 108.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-sr.txt.zip">8.8M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-Polish (8,787,138 sentence pairs, 96.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-sr.txt.zip">8.8M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Serbian-Portuguese (8,732,994 sentence pairs, 102.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-sr.txt.zip">8.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Serbian-Portuguese (10,491,847 sentence pairs, 122.77M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-sr.txt.zip">10.5M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Serbian-Romanian (10,874,940 sentence pairs, 127.38M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-sr.txt.zip">10.9M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Serbian-Russian (2,322,029 sentence pairs, 26.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-sr.txt.zip">2.3M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Serbian-Sinhala (20,049 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/si-sr.txt.zip">20.0k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Serbian-Slovak (1,854,657 sentence pairs, 20.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-sr.txt.zip">1.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Serbian-Slovenian (6,579,614 sentence pairs, 69.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-sr.txt.zip">6.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Albanian (660,018 sentence pairs, 7.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-sr.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Serbian-Swedish (3,722,659 sentence pairs, 46.93M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-sv.tmx.gz">3.7M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Serbian-Thai (24,075 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-th.tmx.gz">24.1k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Serbian-Turkish (7,273,245 sentence pairs, 81.42M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-tr.tmx.gz">7.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Serbian-Ukrainian (56,032 sentence pairs, 0.65M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-uk.tmx.gz">56.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-Urdu (688 sentence pairs, 13.91k words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Serbian-Vietnamese (330,851 sentence pairs, 4.69M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Serbian-Chinese (422,807 sentence pairs, 3.48M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#faffdb"><a rel="nofollow" title='Serbian-Chinese (242,206 sentence pairs, 2.01M words) - TMX format' href="download.php?f=OpenSubtitles2012/sr-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.sv.gz">sv</a>
</th><td>18,008</td> <td>105.6M</td> <td>15.6M</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Swedish-Arabic (3,025,624 sentence pairs, 39.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-sv.txt.zip">3.0M</a>
</td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Bulgarian (5,362,498 sentence pairs, 63.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-sv.txt.zip">5.4M</a>
</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Swedish-Bosnian (832,742 sentence pairs, 9.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-sv.txt.zip">0.8M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Swedish-Catalan (39,335 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-sv.txt.zip">39.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-Czech (6,150,841 sentence pairs, 70.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-sv.txt.zip">6.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Danish (4,514,957 sentence pairs, 53.70M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-sv.txt.zip">4.5M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Swedish-German (2,094,389 sentence pairs, 25.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-sv.txt.zip">2.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Greek (5,054,832 sentence pairs, 63.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-sv.txt.zip">5.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Swedish-English (8,928,255 sentence pairs, 111.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-sv.txt.zip">8.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Swedish-Spanish (7,136,538 sentence pairs, 88.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-sv.txt.zip">7.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Swedish-Estonian (3,103,322 sentence pairs, 35.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-sv.txt.zip">3.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Basque (672 sentence pairs, 6.60k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-sv.txt.zip">0.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Swedish-Persian (1,921 sentence pairs, 45.16k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-sv.txt.zip">1.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Finnish (5,552,224 sentence pairs, 58.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-sv.txt.zip">5.6M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Swedish-French (5,455,356 sentence pairs, 68.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-sv.txt.zip">5.5M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Hebrew (4,425,614 sentence pairs, 56.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-sv.txt.zip">4.4M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Croatian (4,755,753 sentence pairs, 55.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-sv.txt.zip">4.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Hungarian (5,309,531 sentence pairs, 58.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-sv.txt.zip">5.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Indonesian (1,182 sentence pairs, 15.35k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-sv.txt.zip">1.2k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Swedish-Icelandic (467,749 sentence pairs, 5.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-sv.txt.zip">0.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Italian (3,041,619 sentence pairs, 37.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-sv.txt.zip">3.0M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Swedish-Japanese (111,027 sentence pairs, 1.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-sv.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Swedish-Korean (8,364 sentence pairs, 91.09k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-sv.txt.zip">8.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Swedish-Lithuanian (303,320 sentence pairs, 3.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swedish-Latvian (98,737 sentence pairs, 1.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-sv.txt.zip">98.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Swedish-Macedonian (613,370 sentence pairs, 7.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-sv.txt.zip">0.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Swedish-Malay (984,058 sentence pairs, 11.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-sv.txt.zip">1.0M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (2,376,445 sentence pairs, 27.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-sv.txt.zip">2.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-Dutch (6,664,094 sentence pairs, 84.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-sv.txt.zip">6.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Polish (5,701,707 sentence pairs, 64.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-sv.txt.zip">5.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Portuguese (6,331,816 sentence pairs, 77.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-sv.txt.zip">6.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Portuguese (6,636,200 sentence pairs, 80.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-sv.txt.zip">6.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-Romanian (6,399,386 sentence pairs, 79.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-sv.txt.zip">6.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Swedish-Russian (1,647,741 sentence pairs, 19.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-sv.txt.zip">1.6M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Swedish-Sinhala (14,118 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/si-sv.txt.zip">14.1k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Swedish-Slovak (1,354,110 sentence pairs, 16.00M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-sv.txt.zip">1.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Slovenian (4,707,601 sentence pairs, 53.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-sv.txt.zip">4.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Swedish-Albanian (519,924 sentence pairs, 6.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-sv.txt.zip">0.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Serbian (4,347,336 sentence pairs, 51.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-sv.txt.zip">4.3M</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Swedish-Thai (25,439 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-th.tmx.gz">25.4k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Turkish (4,631,340 sentence pairs, 53.52M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-tr.tmx.gz">4.6M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Swedish-Ukrainian (42,747 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-uk.tmx.gz">42.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Urdu (817 sentence pairs, 16.45k words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Swedish-Vietnamese (301,720 sentence pairs, 4.46M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Chinese (887 sentence pairs, 8.06k words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Swedish-Chinese (381,209 sentence pairs, 3.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Swedish-Chinese (220,909 sentence pairs, 1.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/sv-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.th.gz">th</a>
</th><td>58</td> <td>0.3M</td> <td>54.7k</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Arabic (26,526 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-th.txt.zip">26.5k</a>
</td><td></td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Bulgarian (25,862 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-th.txt.zip">25.9k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Bosnian (1,943 sentence pairs, 15.74k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-th.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Catalan (1,761 sentence pairs, 17.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-th.txt.zip">1.8k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Thai-Czech (28,027 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-th.txt.zip">28.0k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Thai-Danish (21,104 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-th.txt.zip">21.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Thai-German (8,605 sentence pairs, 93.99k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-th.txt.zip">8.6k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Thai-Greek (27,036 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-th.txt.zip">27.0k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Thai-English (31,793 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-th.txt.zip">31.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Thai-Spanish (28,163 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-th.txt.zip">28.2k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Thai-Estonian (23,224 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-th.txt.zip">23.2k</a>
</td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Thai-Finnish (21,922 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-th.txt.zip">21.9k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Thai-French (26,035 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-th.txt.zip">26.0k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Hebrew (29,014 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-th.txt.zip">29.0k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Thai-Croatian (22,877 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-th.txt.zip">22.9k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Thai-Hungarian (28,601 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-th.txt.zip">28.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-Icelandic (2,058 sentence pairs, 25.20k words) - Moses format' href="download.php?f=OpenSubtitles2012/is-th.txt.zip">2.1k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Thai-Italian (11,918 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-th.txt.zip">11.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Japanese (2,640 sentence pairs, 11.67k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-th.txt.zip">2.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Lithuanian (2,160 sentence pairs, 17.90k words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-th.txt.zip">2.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Latvian (1,298 sentence pairs, 9.55k words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-th.txt.zip">1.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Thai-Macedonian (9,588 sentence pairs, 84.93k words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-th.txt.zip">9.6k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Thai-Malay (17,474 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-th.txt.zip">17.5k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Thai-BokmÃ¥l, Norwegian (13,293 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-th.txt.zip">13.3k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Thai-Dutch (27,275 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-th.txt.zip">27.3k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Thai-Polish (19,993 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-th.txt.zip">20.0k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Thai-Portuguese (28,066 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-th.txt.zip">28.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Thai-Portuguese (28,707 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-th.txt.zip">28.7k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Thai-Romanian (26,523 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-th.txt.zip">26.5k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Thai-Russian (13,051 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-th.txt.zip">13.1k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Slovak (4,172 sentence pairs, 34.89k words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-th.txt.zip">4.2k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Slovenian (26,935 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-th.txt.zip">26.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Thai-Albanian (10,527 sentence pairs, 96.98k words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-th.txt.zip">10.5k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Serbian (24,656 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-th.txt.zip">24.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Thai-Swedish (25,708 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-th.txt.zip">25.7k</a>
</td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Thai-Turkish (28,169 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2012/th-tr.tmx.gz">28.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Ukrainian (869 sentence pairs, 6.95k words) - TMX format' href="download.php?f=OpenSubtitles2012/th-uk.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Thai-Vietnamese (6,769 sentence pairs, 83.38k words) - TMX format' href="download.php?f=OpenSubtitles2012/th-vi.tmx.gz">6.8k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-Chinese (6,003 sentence pairs, 24.97k words) - TMX format' href="download.php?f=OpenSubtitles2012/th-zh_cn.tmx.gz">6.0k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.tr.gz">tr</a>
</th><td>53,465</td> <td>257.9M</td> <td>45.7M</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Turkish-Arabic (5,607,135 sentence pairs, 65.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-tr.txt.zip">5.6M</a>
</td><td></td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-Bulgarian (12,062,576 sentence pairs, 125.63M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-tr.txt.zip">12.1M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Turkish-Bosnian (1,409,783 sentence pairs, 14.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-tr.txt.zip">1.4M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Turkish-Catalan (54,044 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-tr.txt.zip">54.0k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-Czech (12,874,246 sentence pairs, 127.67M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-tr.txt.zip">12.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Turkish-Danish (4,971,001 sentence pairs, 53.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-tr.txt.zip">5.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Turkish-German (3,207,343 sentence pairs, 34.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-tr.txt.zip">3.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-Greek (10,976,313 sentence pairs, 121.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-tr.txt.zip">11.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (20,992,848 sentence pairs, 225.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-tr.txt.zip">21.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Spanish (15,315,412 sentence pairs, 166.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-tr.txt.zip">15.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Estonian (4,972,111 sentence pairs, 48.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-tr.txt.zip">5.0M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Basque (610 sentence pairs, 6.08k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-tr.txt.zip">0.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Turkish-Persian (5,335 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-tr.txt.zip">5.3k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Turkish-Finnish (7,742,407 sentence pairs, 72.06M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-tr.txt.zip">7.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Turkish-French (10,452,035 sentence pairs, 116.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-tr.txt.zip">10.5M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Turkish-Hebrew (8,811,306 sentence pairs, 100.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-tr.txt.zip">8.8M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Turkish-Croatian (9,379,647 sentence pairs, 94.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-tr.txt.zip">9.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Hungarian (11,362,774 sentence pairs, 108.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-tr.txt.zip">11.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Turkish-Indonesian (4,756 sentence pairs, 90.47k words) - Moses format' href="download.php?f=OpenSubtitles2012/id-tr.txt.zip">4.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Icelandic (501,357 sentence pairs, 4.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-tr.txt.zip">0.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Turkish-Italian (6,415,853 sentence pairs, 69.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-tr.txt.zip">6.4M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Turkish-Japanese (145,089 sentence pairs, 1.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-tr.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Turkish-Korean (8,945 sentence pairs, 92.65k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-tr.txt.zip">8.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Turkish-Lithuanian (390,052 sentence pairs, 3.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-tr.txt.zip">0.4M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Turkish-Latvian (132,357 sentence pairs, 1.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-tr.txt.zip">0.1M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Macedonian (802,630 sentence pairs, 8.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-tr.txt.zip">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Turkish-Malay (1,509,651 sentence pairs, 15.23M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-tr.txt.zip">1.5M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Turkish-BokmÃ¥l, Norwegian (2,005,885 sentence pairs, 21.05M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-tr.txt.zip">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Dutch (12,228,885 sentence pairs, 137.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-tr.txt.zip">12.2M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Turkish-Polish (11,568,403 sentence pairs, 115.45M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-tr.txt.zip">11.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Portuguese (12,507,883 sentence pairs, 133.07M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-tr.txt.zip">12.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Portuguese (15,246,252 sentence pairs, 162.07M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-tr.txt.zip">15.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Romanian (15,055,695 sentence pairs, 161.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-tr.txt.zip">15.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Turkish-Russian (3,450,502 sentence pairs, 35.74M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-tr.txt.zip">3.5M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Turkish-Sinhala (21,605 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2012/si-tr.txt.zip">21.6k</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Turkish-Slovak (2,509,631 sentence pairs, 25.55M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-tr.txt.zip">2.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Turkish-Slovenian (8,208,435 sentence pairs, 79.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-tr.txt.zip">8.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Turkish-Albanian (732,375 sentence pairs, 7.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-tr.txt.zip">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Turkish-Serbian (8,870,439 sentence pairs, 91.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-tr.txt.zip">8.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Turkish-Swedish (5,647,559 sentence pairs, 61.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-tr.txt.zip">5.6M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Turkish-Thai (28,634 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/th-tr.txt.zip">28.6k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Turkish-Ukrainian (64,681 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-uk.tmx.gz">64.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Turkish-Urdu (1,929 sentence pairs, 30.33k words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Vietnamese (388,854 sentence pairs, 5.03M words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-vi.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Chinese (878 sentence pairs, 6.80k words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-zh.tmx.gz">0.9k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Turkish-Chinese (513,696 sentence pairs, 3.70M words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Turkish-Chinese (310,073 sentence pairs, 2.24M words) - TMX format' href="download.php?f=OpenSubtitles2012/tr-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.uk.gz">uk</a>
</th><td>268</td> <td>1.2M</td> <td>0.2M</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Ukrainian-Arabic (37,844 sentence pairs, 0.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-uk.txt.zip">37.8k</a>
</td><td></td><td></td><td bgcolor="#fffcf2"><a rel="nofollow" title='Ukrainian-Bulgarian (60,180 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-uk.txt.zip">60.2k</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Bosnian (6,503 sentence pairs, 68.59k words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-uk.txt.zip">6.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Catalan (809 sentence pairs, 9.99k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-uk.txt.zip">0.8k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Ukrainian-Czech (86,490 sentence pairs, 0.97M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-uk.txt.zip">86.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Ukrainian-Danish (45,070 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-uk.txt.zip">45.1k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Ukrainian-German (29,794 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-uk.txt.zip">29.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Greek (64,905 sentence pairs, 0.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-uk.txt.zip">64.9k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Ukrainian-English (113,492 sentence pairs, 1.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Ukrainian-Spanish (86,376 sentence pairs, 1.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-uk.txt.zip">86.4k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Ukrainian-Estonian (52,741 sentence pairs, 0.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-uk.txt.zip">52.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Persian (436 sentence pairs, 11.66k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-uk.txt.zip">0.4k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Ukrainian-Finnish (52,809 sentence pairs, 0.57M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-uk.txt.zip">52.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-French (64,032 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-uk.txt.zip">64.0k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Ukrainian-Hebrew (52,706 sentence pairs, 0.64M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-uk.txt.zip">52.7k</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Ukrainian-Croatian (53,075 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-uk.txt.zip">53.1k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Ukrainian-Hungarian (67,889 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-uk.txt.zip">67.9k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Icelandic (1,796 sentence pairs, 19.98k words) - Moses format' href="download.php?f=OpenSubtitles2012/is-uk.txt.zip">1.8k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Ukrainian-Italian (41,594 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-uk.txt.zip">41.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Japanese (2,411 sentence pairs, 21.04k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-uk.txt.zip">2.4k</a>
</td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Lithuanian (2,782 sentence pairs, 39.91k words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-uk.txt.zip">2.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Latvian (7,138 sentence pairs, 68.26k words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-uk.txt.zip">7.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Macedonian (6,663 sentence pairs, 73.83k words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-uk.txt.zip">6.7k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Ukrainian-Malay (28,545 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-uk.txt.zip">28.5k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (31,573 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-uk.txt.zip">31.6k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Ukrainian-Dutch (59,189 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-uk.txt.zip">59.2k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Polish (72,566 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-uk.txt.zip">72.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Ukrainian-Portuguese (71,378 sentence pairs, 0.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-uk.txt.zip">71.4k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Ukrainian-Portuguese (81,708 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-uk.txt.zip">81.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Ukrainian-Romanian (80,754 sentence pairs, 0.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-uk.txt.zip">80.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Ukrainian-Russian (59,350 sentence pairs, 0.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-uk.txt.zip">59.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Sinhala (1,083 sentence pairs, 14.65k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-uk.txt.zip">1.1k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Ukrainian-Slovak (19,562 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-uk.txt.zip">19.6k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Ukrainian-Slovenian (63,229 sentence pairs, 0.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-uk.txt.zip">63.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Ukrainian-Albanian (7,777 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-uk.txt.zip">7.8k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Ukrainian-Serbian (58,582 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-uk.txt.zip">58.6k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Ukrainian-Swedish (44,008 sentence pairs, 0.51M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-uk.txt.zip">44.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Thai (876 sentence pairs, 6.97k words) - Moses format' href="download.php?f=OpenSubtitles2012/th-uk.txt.zip">0.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Ukrainian-Turkish (67,723 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-uk.txt.zip">67.7k</a>
</td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Ukrainian-Vietnamese (6,829 sentence pairs, 93.61k words) - TMX format' href="download.php?f=OpenSubtitles2012/uk-vi.tmx.gz">6.8k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Ukrainian-Chinese (6,780 sentence pairs, 66.66k words) - TMX format' href="download.php?f=OpenSubtitles2012/uk-zh_cn.tmx.gz">6.8k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.ur.gz">ur</a>
</th><td>3</td> <td>24.9k</td> <td>2.3k</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Arabic (2,194 sentence pairs, 33.53k words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-ur.txt.zip">2.2k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Bulgarian (1,799 sentence pairs, 31.99k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-ur.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Czech (1,823 sentence pairs, 31.94k words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-ur.txt.zip">1.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Danish (703 sentence pairs, 13.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-ur.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-German (1,247 sentence pairs, 19.27k words) - Moses format' href="download.php?f=OpenSubtitles2012/de-ur.txt.zip">1.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Greek (1,923 sentence pairs, 33.06k words) - Moses format' href="download.php?f=OpenSubtitles2012/el-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-English (1,995 sentence pairs, 36.07k words) - Moses format' href="download.php?f=OpenSubtitles2012/en-ur.txt.zip">2.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Spanish (1,855 sentence pairs, 33.71k words) - Moses format' href="download.php?f=OpenSubtitles2012/es-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Estonian (843 sentence pairs, 14.97k words) - Moses format' href="download.php?f=OpenSubtitles2012/et-ur.txt.zip">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Finnish (1,897 sentence pairs, 29.83k words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-French (1,848 sentence pairs, 33.67k words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-ur.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Hebrew (711 sentence pairs, 13.11k words) - Moses format' href="download.php?f=OpenSubtitles2012/he-ur.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Croatian (1,911 sentence pairs, 31.18k words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Hungarian (1,856 sentence pairs, 30.54k words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-ur.txt.zip">1.9k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Italian (1,147 sentence pairs, 18.25k words) - Moses format' href="download.php?f=OpenSubtitles2012/it-ur.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Macedonian (1,834 sentence pairs, 32.92k words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-ur.txt.zip">1.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Malay (777 sentence pairs, 14.89k words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-ur.txt.zip">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-BokmÃ¥l, Norwegian (1,198 sentence pairs, 18.40k words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-ur.txt.zip">1.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Dutch (1,946 sentence pairs, 35.48k words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Polish (1,912 sentence pairs, 32.34k words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Portuguese (1,821 sentence pairs, 32.85k words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-ur.txt.zip">1.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Portuguese (2,018 sentence pairs, 34.38k words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-ur.txt.zip">2.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Romanian (1,908 sentence pairs, 34.01k words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Russian (697 sentence pairs, 13.45k words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-ur.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Slovak (1,127 sentence pairs, 17.76k words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-ur.txt.zip">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Slovenian (1,855 sentence pairs, 30.58k words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Albanian (797 sentence pairs, 16.43k words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-ur.txt.zip">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Serbian (689 sentence pairs, 13.92k words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-ur.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Swedish (823 sentence pairs, 16.47k words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-ur.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Turkish (1,938 sentence pairs, 30.37k words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-ur.txt.zip">1.9k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Vietnamese (657 sentence pairs, 16.27k words) - TMX format' href="download.php?f=OpenSubtitles2012/ur-vi.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.vi.gz">vi</a>
</th><td>632</td> <td>5.7M</td> <td>0.7M</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Vietnamese-Afrikaans (674 sentence pairs, 14.25k words) - Moses format' href="download.php?f=OpenSubtitles2012/af-vi.txt.zip">0.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Arabic (326,665 sentence pairs, 5.02M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-vi.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Bulgarian (382,819 sentence pairs, 5.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-vi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Vietnamese-Bosnian (71,173 sentence pairs, 0.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-vi.txt.zip">71.2k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Vietnamese-Catalan (5,638 sentence pairs, 83.87k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-vi.txt.zip">5.6k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Czech (394,152 sentence pairs, 5.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Danish (317,098 sentence pairs, 4.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-vi.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Vietnamese-German (127,571 sentence pairs, 1.80M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-vi.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Greek (366,904 sentence pairs, 5.39M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-English (490,947 sentence pairs, 6.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Spanish (421,759 sentence pairs, 5.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Estonian (344,547 sentence pairs, 4.56M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-vi.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Vietnamese-Persian (490 sentence pairs, 21.98k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-vi.txt.zip">0.5k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Finnish (365,816 sentence pairs, 4.69M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-French (364,811 sentence pairs, 5.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-vi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Hebrew (334,358 sentence pairs, 4.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-vi.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Croatian (357,020 sentence pairs, 4.84M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Hungarian (385,966 sentence pairs, 4.94M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-vi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Vietnamese-Icelandic (42,651 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-vi.txt.zip">42.7k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Vietnamese-Italian (281,782 sentence pairs, 3.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-vi.txt.zip">0.3M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Vietnamese-Japanese (25,559 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-vi.txt.zip">25.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Vietnamese-Korean (3,089 sentence pairs, 39.85k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-vi.txt.zip">3.1k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Vietnamese-Lithuanian (47,942 sentence pairs, 0.63M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-vi.txt.zip">47.9k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Vietnamese-Latvian (23,130 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-vi.txt.zip">23.1k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Vietnamese-Macedonian (102,027 sentence pairs, 1.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-vi.txt.zip">0.1M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Vietnamese-Malay (256,805 sentence pairs, 3.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-vi.txt.zip">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Vietnamese-BokmÃ¥l, Norwegian (179,449 sentence pairs, 2.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-vi.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Dutch (392,283 sentence pairs, 5.75M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Polish (368,834 sentence pairs, 4.95M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Portuguese (419,170 sentence pairs, 5.81M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Portuguese (435,128 sentence pairs, 5.99M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Romanian (424,892 sentence pairs, 5.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-vi.txt.zip">0.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Vietnamese-Russian (194,959 sentence pairs, 2.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Vietnamese-Sinhala (3,954 sentence pairs, 59.29k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-vi.txt.zip">4.0k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Vietnamese-Slovak (122,759 sentence pairs, 1.68M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-vi.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Slovenian (376,669 sentence pairs, 4.96M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-vi.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Vietnamese-Albanian (127,541 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-vi.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Serbian (344,816 sentence pairs, 4.75M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-vi.txt.zip">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-Swedish (312,516 sentence pairs, 4.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-vi.txt.zip">0.3M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Vietnamese-Thai (6,821 sentence pairs, 83.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/th-vi.txt.zip">6.8k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Turkish (415,479 sentence pairs, 5.18M words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-vi.txt.zip">0.4M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Vietnamese-Ukrainian (6,890 sentence pairs, 93.85k words) - Moses format' href="download.php?f=OpenSubtitles2012/uk-vi.txt.zip">6.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Vietnamese-Urdu (658 sentence pairs, 16.29k words) - Moses format' href="download.php?f=OpenSubtitles2012/ur-vi.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Vietnamese-Chinese (81,508 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2012/vi-zh_cn.tmx.gz">81.5k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Vietnamese-Chinese (41,613 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2012/vi-zh_tw.tmx.gz">41.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.zh.gz">zh</a>
</th><td>1</td> <td>8.1k</td> <td>1.0k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Arabic (839 sentence pairs, 6.73k words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-zh.txt.zip">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Bulgarian (891 sentence pairs, 7.49k words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Czech (915 sentence pairs, 8.02k words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Danish (920 sentence pairs, 8.21k words) - Moses format' href="download.php?f=OpenSubtitles2012/da-zh.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Greek (819 sentence pairs, 7.69k words) - Moses format' href="download.php?f=OpenSubtitles2012/el-zh.txt.zip">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-English (899 sentence pairs, 8.59k words) - Moses format' href="download.php?f=OpenSubtitles2012/en-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Spanish (916 sentence pairs, 7.76k words) - Moses format' href="download.php?f=OpenSubtitles2012/es-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Finnish (931 sentence pairs, 6.30k words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-French (928 sentence pairs, 8.27k words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-zh.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Hebrew (943 sentence pairs, 7.36k words) - Moses format' href="download.php?f=OpenSubtitles2012/he-zh.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Croatian (903 sentence pairs, 7.73k words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Hungarian (901 sentence pairs, 7.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Malay (907 sentence pairs, 7.37k words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-zh.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Dutch (863 sentence pairs, 8.25k words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Polish (899 sentence pairs, 7.52k words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Portuguese (932 sentence pairs, 8.01k words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Portuguese (926 sentence pairs, 8.11k words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Romanian (901 sentence pairs, 8.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-zh.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Russian (901 sentence pairs, 7.95k words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Slovenian (917 sentence pairs, 7.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Swedish (894 sentence pairs, 8.09k words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-zh.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Turkish (895 sentence pairs, 6.86k words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-zh.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Chinese (928 sentence pairs, 4.05k words) - TMX format' href="download.php?f=OpenSubtitles2012/zh-zh_cn.tmx.gz">0.9k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_cn plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.zh_cn.gz">zh_cn</a>
</th><td>1,368</td> <td>9.1M</td> <td>1.1M</td><td></td><td bgcolor="#ebffcc"><a rel="nofollow" title='Chinese-Arabic (410,881 sentence pairs, 3.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-zh_cn.txt.zip">0.4M</a>
</td><td></td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Chinese-Bulgarian (504,862 sentence pairs, 4.01M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-zh_cn.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Chinese-Bosnian (66,469 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-zh_cn.txt.zip">66.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Catalan (3,567 sentence pairs, 30.78k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-zh_cn.txt.zip">3.6k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-Czech (536,342 sentence pairs, 4.17M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Danish (396,363 sentence pairs, 3.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Chinese-German (154,504 sentence pairs, 1.31M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Chinese-Greek (466,547 sentence pairs, 3.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-English (710,052 sentence pairs, 6.37M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-zh_cn.txt.zip">0.7M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Spanish (572,547 sentence pairs, 4.88M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-zh_cn.txt.zip">0.6M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Estonian (356,561 sentence pairs, 2.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-zh_cn.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Persian (292 sentence pairs, 3.23k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-zh_cn.txt.zip">0.3k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Finnish (414,802 sentence pairs, 2.86M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-French (486,373 sentence pairs, 4.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-zh_cn.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Hebrew (501,806 sentence pairs, 3.71M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-zh_cn.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Croatian (434,854 sentence pairs, 3.41M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Chinese-Hungarian (433,542 sentence pairs, 3.19M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-zh_cn.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Chinese-Icelandic (25,793 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-zh_cn.txt.zip">25.8k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Italian (278,920 sentence pairs, 2.40M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-zh_cn.txt.zip">0.3M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Chinese-Japanese (20,440 sentence pairs, 73.84k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-zh_cn.txt.zip">20.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Korean (2,749 sentence pairs, 15.86k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-zh_cn.txt.zip">2.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Chinese-Lithuanian (37,979 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-zh_cn.txt.zip">38.0k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Chinese-Latvian (16,562 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-zh_cn.txt.zip">16.6k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Chinese-Macedonian (75,550 sentence pairs, 0.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-zh_cn.txt.zip">75.5k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Chinese-Malay (195,942 sentence pairs, 1.60M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (195,199 sentence pairs, 1.62M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Dutch (533,748 sentence pairs, 4.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Polish (435,111 sentence pairs, 3.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-Portuguese (525,299 sentence pairs, 4.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-Portuguese (603,417 sentence pairs, 5.10M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-zh_cn.txt.zip">0.6M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-Romanian (515,290 sentence pairs, 4.47M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Chinese-Russian (199,495 sentence pairs, 1.59M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Sinhala (5,223 sentence pairs, 36.27k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-zh_cn.txt.zip">5.2k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Slovak (156,536 sentence pairs, 1.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Slovenian (443,338 sentence pairs, 3.36M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Chinese-Albanian (99,338 sentence pairs, 0.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-zh_cn.txt.zip">99.3k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Serbian (436,141 sentence pairs, 3.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Swedish (391,000 sentence pairs, 3.25M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Chinese-Thai (6,066 sentence pairs, 25.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/th-zh_cn.txt.zip">6.1k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Turkish (534,221 sentence pairs, 3.76M words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-zh_cn.txt.zip">0.5M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Chinese-Ukrainian (6,887 sentence pairs, 66.95k words) - Moses format' href="download.php?f=OpenSubtitles2012/uk-zh_cn.txt.zip">6.9k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Chinese-Vietnamese (82,791 sentence pairs, 0.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/vi-zh_cn.txt.zip">82.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Chinese (961 sentence pairs, 4.14k words) - Moses format' href="download.php?f=OpenSubtitles2012/zh-zh_cn.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#fff7f0"><a rel="nofollow" title='Chinese-Chinese (161,440 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2012/zh_cn-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_tw plain text' href="download.php?f=OpenSubtitles2012/mono/OpenSubtitles2012.raw.zh_tw.gz">zh_tw</a>
</th><td>727</td> <td>4.2M</td> <td>0.6M</td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Chinese-Arabic (245,153 sentence pairs, 1.93M words) - Moses format' href="download.php?f=OpenSubtitles2012/ar-zh_tw.txt.zip">0.2M</a>
</td><td></td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Chinese-Bulgarian (280,121 sentence pairs, 2.27M words) - Moses format' href="download.php?f=OpenSubtitles2012/bg-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Chinese-Bosnian (38,427 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2012/bs-zh_tw.txt.zip">38.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Catalan (4,415 sentence pairs, 35.95k words) - Moses format' href="download.php?f=OpenSubtitles2012/ca-zh_tw.txt.zip">4.4k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Czech (310,460 sentence pairs, 2.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/cs-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Chinese-Danish (236,786 sentence pairs, 2.09M words) - Moses format' href="download.php?f=OpenSubtitles2012/da-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Chinese-German (84,546 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/de-zh_tw.txt.zip">84.5k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Chinese-Greek (279,616 sentence pairs, 2.35M words) - Moses format' href="download.php?f=OpenSubtitles2012/el-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-English (390,497 sentence pairs, 3.52M words) - Moses format' href="download.php?f=OpenSubtitles2012/en-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Spanish (340,919 sentence pairs, 2.90M words) - Moses format' href="download.php?f=OpenSubtitles2012/es-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Chinese-Estonian (217,753 sentence pairs, 1.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/et-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Basque (530 sentence pairs, 3.83k words) - Moses format' href="download.php?f=OpenSubtitles2012/eu-zh_tw.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Persian (405 sentence pairs, 7.96k words) - Moses format' href="download.php?f=OpenSubtitles2012/fa-zh_tw.txt.zip">0.4k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Chinese-Finnish (253,117 sentence pairs, 1.78M words) - Moses format' href="download.php?f=OpenSubtitles2012/fi-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-French (282,872 sentence pairs, 2.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/fr-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Chinese-Hebrew (293,764 sentence pairs, 2.20M words) - Moses format' href="download.php?f=OpenSubtitles2012/he-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Chinese-Croatian (254,410 sentence pairs, 2.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/hr-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Chinese-Hungarian (288,251 sentence pairs, 2.15M words) - Moses format' href="download.php?f=OpenSubtitles2012/hu-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Chinese-Icelandic (25,215 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/is-zh_tw.txt.zip">25.2k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Chinese-Italian (143,073 sentence pairs, 1.22M words) - Moses format' href="download.php?f=OpenSubtitles2012/it-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Chinese-Japanese (16,223 sentence pairs, 60.31k words) - Moses format' href="download.php?f=OpenSubtitles2012/ja-zh_tw.txt.zip">16.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Korean (1,045 sentence pairs, 5.72k words) - Moses format' href="download.php?f=OpenSubtitles2012/ko-zh_tw.txt.zip">1.0k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Chinese-Lithuanian (19,804 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2012/lt-zh_tw.txt.zip">19.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Chinese-Latvian (5,047 sentence pairs, 35.40k words) - Moses format' href="download.php?f=OpenSubtitles2012/lv-zh_tw.txt.zip">5.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Chinese-Macedonian (41,487 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2012/mk-zh_tw.txt.zip">41.5k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Chinese-Malay (111,894 sentence pairs, 0.91M words) - Moses format' href="download.php?f=OpenSubtitles2012/ms-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (106,576 sentence pairs, 0.89M words) - Moses format' href="download.php?f=OpenSubtitles2012/nb-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Dutch (301,820 sentence pairs, 2.73M words) - Moses format' href="download.php?f=OpenSubtitles2012/nl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Chinese-Polish (257,875 sentence pairs, 1.98M words) - Moses format' href="download.php?f=OpenSubtitles2012/pl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Portuguese (315,463 sentence pairs, 2.72M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Portuguese (339,835 sentence pairs, 2.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/pt_br-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Romanian (304,238 sentence pairs, 2.66M words) - Moses format' href="download.php?f=OpenSubtitles2012/ro-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Chinese-Russian (100,872 sentence pairs, 0.79M words) - Moses format' href="download.php?f=OpenSubtitles2012/ru-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Sinhala (2,657 sentence pairs, 21.36k words) - Moses format' href="download.php?f=OpenSubtitles2012/si-zh_tw.txt.zip">2.7k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Chinese-Slovak (105,245 sentence pairs, 0.85M words) - Moses format' href="download.php?f=OpenSubtitles2012/sk-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Chinese-Slovenian (262,844 sentence pairs, 2.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/sl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Chinese-Albanian (53,925 sentence pairs, 0.48M words) - Moses format' href="download.php?f=OpenSubtitles2012/sq-zh_tw.txt.zip">53.9k</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Chinese-Serbian (249,166 sentence pairs, 2.03M words) - Moses format' href="download.php?f=OpenSubtitles2012/sr-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Chinese-Swedish (226,282 sentence pairs, 1.92M words) - Moses format' href="download.php?f=OpenSubtitles2012/sv-zh_tw.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Chinese-Turkish (322,115 sentence pairs, 2.28M words) - Moses format' href="download.php?f=OpenSubtitles2012/tr-zh_tw.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Chinese-Vietnamese (42,121 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2012/vi-zh_tw.txt.zip">42.1k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Chinese-Chinese (177,188 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2012/zh_cn-zh_tw.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr>
-->


<div class="footer"></div>
</body>
</html>
