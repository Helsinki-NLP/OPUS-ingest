<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>OpenSubtitles2013</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OpenSubtitles2013</h1>

<p>This is an EXTENSION of the OpenSubtitles2012 collection of translated movie subtitles from <a href="http://www.opensubtitles.org/">http://www.opensubtitles.org/</a>. It contains additional subtitle pairs not covered by the previous distribution. 
<br/>
<a href="OpenSubtitles2018.php">Look at the latest package of OpenSubtitles2018!</a>
</p>


<p>
<b>IMPORTANT:</b> If you use the OpenSubtitle corpus: <br/>Please, add a link to <b>http://www.opensubtitles.org/</b> to your website and to your reports and publications produced with the data! I promised this when I got the data from the providers of that website!</p>

<p>59 languages, 1,211 bitexts<br>total number of files: 756,370<br>total number of tokens: 4.35G<br>total number of sentence fragments: 630.59M<br><p>Please <a href="http://opus.nlpl.eu/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/>

<h3>News</h3>

<ul>
  <li><b>2014-10-23:</b> <a href="https://github.com/AlJohri/OpenSubtitles">Scripts for OpenSubtitles2012/2013</a> (by Atul Johri)</li>
</ul>

<h3>Download</h3>

Note that you also need the files from <a href="OpenSubtitles-v2012.php">OpenSubtitles2012</a> if you download the XML source files of this collection. Some files are linked and aligned to the subtitles in the 2012 collection!
</p>

<table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/af_sample.html">af</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/be_sample.html">be</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/da_sample.html">da</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/de_sample.html">de</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/el_sample.html">el</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/en_sample.html">en</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/es_sample.html">es</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/et_sample.html">et</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/he_sample.html">he</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/hi_sample.html">hi</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/hy_sample.html">hy</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/id_sample.html">id</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/is_sample.html">is</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/it_sample.html">it</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/pt_br_sample.html">pt_br</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ro_sample.html">ro</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/si_sample.html">si</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/sw_sample.html">sw</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ta_sample.html">ta</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/te_sample.html">te</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/th_sample.html">th</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/zh_sample.html">zh</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/zh_cn_sample.html">zh_cn</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2013/zh_tw_sample.html">zh_tw</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/af.tar.gz">af</a></th>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Afrikaans-Bulgarian (sample file)" href="OpenSubtitles/v2013/af-bg_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Czech (sample file)" href="OpenSubtitles/v2013/af-cs_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Spanish (sample file)" href="OpenSubtitles/v2013/af-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Macedonian (sample file)" href="OpenSubtitles/v2013/af-mk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/af.raw.tar.gz">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ar.tar.gz">ar</a></th>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Arabic-Bulgarian (sample file)" href="OpenSubtitles/v2013/ar-bg_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bengali (sample file)" href="OpenSubtitles/v2013/ar-bn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bosnian (sample file)" href="OpenSubtitles/v2013/ar-bs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Catalan (sample file)" href="OpenSubtitles/v2013/ar-ca_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Czech (sample file)" href="OpenSubtitles/v2013/ar-cs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Danish (sample file)" href="OpenSubtitles/v2013/ar-da_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="OpenSubtitles/v2013/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Greek (sample file)" href="OpenSubtitles/v2013/ar-el_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="OpenSubtitles/v2013/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="OpenSubtitles/v2013/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="OpenSubtitles/v2013/ar-et_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Basque (sample file)" href="OpenSubtitles/v2013/ar-eu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Persian (sample file)" href="OpenSubtitles/v2013/ar-fa_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="OpenSubtitles/v2013/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="OpenSubtitles/v2013/ar-fr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hebrew (sample file)" href="OpenSubtitles/v2013/ar-he_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hindi (sample file)" href="OpenSubtitles/v2013/ar-hi_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="OpenSubtitles/v2013/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hungarian (sample file)" href="OpenSubtitles/v2013/ar-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Indonesian (sample file)" href="OpenSubtitles/v2013/ar-id_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Icelandic (sample file)" href="OpenSubtitles/v2013/ar-is_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="OpenSubtitles/v2013/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="OpenSubtitles/v2013/ar-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Korean (sample file)" href="OpenSubtitles/v2013/ar-ko_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="OpenSubtitles/v2013/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="OpenSubtitles/v2013/ar-lv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Macedonian (sample file)" href="OpenSubtitles/v2013/ar-mk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malayalam (sample file)" href="OpenSubtitles/v2013/ar-ml_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malay (sample file)" href="OpenSubtitles/v2013/ar-ms_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/ar-nb_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="OpenSubtitles/v2013/ar-nl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="OpenSubtitles/v2013/ar-pl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles/v2013/ar-pt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles/v2013/ar-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Romanian (sample file)" href="OpenSubtitles/v2013/ar-ro_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Russian (sample file)" href="OpenSubtitles/v2013/ar-ru_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Sinhala (sample file)" href="OpenSubtitles/v2013/ar-si_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="OpenSubtitles/v2013/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="OpenSubtitles/v2013/ar-sl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Albanian (sample file)" href="OpenSubtitles/v2013/ar-sq_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Serbian (sample file)" href="OpenSubtitles/v2013/ar-sr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Swedish (sample file)" href="OpenSubtitles/v2013/ar-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Tamil (sample file)" href="OpenSubtitles/v2013/ar-ta_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Telugu (sample file)" href="OpenSubtitles/v2013/ar-te_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Thai (sample file)" href="OpenSubtitles/v2013/ar-th_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="OpenSubtitles/v2013/ar-tr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Ukrainian (sample file)" href="OpenSubtitles/v2013/ar-uk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Urdu (sample file)" href="OpenSubtitles/v2013/ar-ur_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Vietnamese (sample file)" href="OpenSubtitles/v2013/ar-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles/v2013/ar-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles/v2013/ar-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/be.tar.gz">be</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Czech (sample file)" href="OpenSubtitles/v2013/be-cs_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-French (sample file)" href="OpenSubtitles/v2013/be-fr_sample.html">view</a></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Portuguese (sample file)" href="OpenSubtitles/v2013/be-pt_sample.html">view</a></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Turkish (sample file)" href="OpenSubtitles/v2013/be-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bg.tar.gz">bg</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Afrikaans' (0.7k links, 14.9k tokens)" href="download.php?f=OpenSubtitles2013/af-bg.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (9,151 aligned documents, 6.7M links, 99.2M tokens)" href="download.php?f=OpenSubtitles2013/ar-bg.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="OpenSubtitles/v2013/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="OpenSubtitles/v2013/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="OpenSubtitles/v2013/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="OpenSubtitles/v2013/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="OpenSubtitles/v2013/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="OpenSubtitles/v2013/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="OpenSubtitles/v2013/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="OpenSubtitles/v2013/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="OpenSubtitles/v2013/bg-et_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Basque (sample file)" href="OpenSubtitles/v2013/bg-eu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Persian (sample file)" href="OpenSubtitles/v2013/bg-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="OpenSubtitles/v2013/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="OpenSubtitles/v2013/bg-fr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hebrew (sample file)" href="OpenSubtitles/v2013/bg-he_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hindi (sample file)" href="OpenSubtitles/v2013/bg-hi_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="OpenSubtitles/v2013/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="OpenSubtitles/v2013/bg-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Indonesian (sample file)" href="OpenSubtitles/v2013/bg-id_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="OpenSubtitles/v2013/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="OpenSubtitles/v2013/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="OpenSubtitles/v2013/bg-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Kazakh (sample file)" href="OpenSubtitles/v2013/bg-kk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="OpenSubtitles/v2013/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="OpenSubtitles/v2013/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="OpenSubtitles/v2013/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="OpenSubtitles/v2013/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malayalam (sample file)" href="OpenSubtitles/v2013/bg-ml_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malay (sample file)" href="OpenSubtitles/v2013/bg-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/bg-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="OpenSubtitles/v2013/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="OpenSubtitles/v2013/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles/v2013/bg-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles/v2013/bg-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="OpenSubtitles/v2013/bg-ro_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="OpenSubtitles/v2013/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="OpenSubtitles/v2013/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="OpenSubtitles/v2013/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="OpenSubtitles/v2013/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="OpenSubtitles/v2013/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Serbian (sample file)" href="OpenSubtitles/v2013/bg-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="OpenSubtitles/v2013/bg-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Thai (sample file)" href="OpenSubtitles/v2013/bg-th_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="OpenSubtitles/v2013/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="OpenSubtitles/v2013/bg-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Urdu (sample file)" href="OpenSubtitles/v2013/bg-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Vietnamese (sample file)" href="OpenSubtitles/v2013/bg-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles/v2013/bg-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles/v2013/bg-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bg.raw.tar.gz">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bn.tar.gz">bn</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bengali-Arabic' (3 aligned documents, 2.5k links, 42.6k tokens)" href="download.php?f=OpenSubtitles2013/ar-bn.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Bengali-Czech (sample file)" href="OpenSubtitles/v2013/bn-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Danish (sample file)" href="OpenSubtitles/v2013/bn-da_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-German (sample file)" href="OpenSubtitles/v2013/bn-de_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="OpenSubtitles/v2013/bn-en_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Spanish (sample file)" href="OpenSubtitles/v2013/bn-es_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Estonian (sample file)" href="OpenSubtitles/v2013/bn-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bengali-Persian (sample file)" href="OpenSubtitles/v2013/bn-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Finnish (sample file)" href="OpenSubtitles/v2013/bn-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-French (sample file)" href="OpenSubtitles/v2013/bn-fr_sample.html">view</a></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/bn-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Dutch (sample file)" href="OpenSubtitles/v2013/bn-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Polish (sample file)" href="OpenSubtitles/v2013/bn-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Portuguese (sample file)" href="OpenSubtitles/v2013/bn-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Portuguese (sample file)" href="OpenSubtitles/v2013/bn-pt_br_sample.html">view</a></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Serbian (sample file)" href="OpenSubtitles/v2013/bn-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Swedish (sample file)" href="OpenSubtitles/v2013/bn-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Turkish (sample file)" href="OpenSubtitles/v2013/bn-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Chinese (sample file)" href="OpenSubtitles/v2013/bn-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Chinese (sample file)" href="OpenSubtitles/v2013/bn-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bn.raw.tar.gz">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bs.tar.gz">bs</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Arabic' (1,130 aligned documents, 0.9M links, 12.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-bs.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (1,375 aligned documents, 1.2M links, 16.0M tokens)" href="download.php?f=OpenSubtitles2013/bg-bs.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="OpenSubtitles/v2013/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="OpenSubtitles/v2013/bs-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Danish (sample file)" href="OpenSubtitles/v2013/bs-da_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="OpenSubtitles/v2013/bs-de_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="OpenSubtitles/v2013/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="OpenSubtitles/v2013/bs-en_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="OpenSubtitles/v2013/bs-es_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="OpenSubtitles/v2013/bs-et_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Basque (sample file)" href="OpenSubtitles/v2013/bs-eu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="OpenSubtitles/v2013/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="OpenSubtitles/v2013/bs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hebrew (sample file)" href="OpenSubtitles/v2013/bs-he_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hindi (sample file)" href="OpenSubtitles/v2013/bs-hi_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="OpenSubtitles/v2013/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="OpenSubtitles/v2013/bs-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Indonesian (sample file)" href="OpenSubtitles/v2013/bs-id_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="OpenSubtitles/v2013/bs-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="OpenSubtitles/v2013/bs-it_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Japanese (sample file)" href="OpenSubtitles/v2013/bs-ja_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="OpenSubtitles/v2013/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="OpenSubtitles/v2013/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="OpenSubtitles/v2013/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malayalam (sample file)" href="OpenSubtitles/v2013/bs-ml_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malay (sample file)" href="OpenSubtitles/v2013/bs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/bs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Dutch (sample file)" href="OpenSubtitles/v2013/bs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Polish (sample file)" href="OpenSubtitles/v2013/bs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles/v2013/bs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles/v2013/bs-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="OpenSubtitles/v2013/bs-ro_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Russian (sample file)" href="OpenSubtitles/v2013/bs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Sinhala (sample file)" href="OpenSubtitles/v2013/bs-si_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="OpenSubtitles/v2013/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="OpenSubtitles/v2013/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="OpenSubtitles/v2013/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Serbian (sample file)" href="OpenSubtitles/v2013/bs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swedish (sample file)" href="OpenSubtitles/v2013/bs-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Thai (sample file)" href="OpenSubtitles/v2013/bs-th_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="OpenSubtitles/v2013/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="OpenSubtitles/v2013/bs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Urdu (sample file)" href="OpenSubtitles/v2013/bs-ur_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Vietnamese (sample file)" href="OpenSubtitles/v2013/bs-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="OpenSubtitles/v2013/bs-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="OpenSubtitles/v2013/bs-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/bs.raw.tar.gz">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ca.tar.gz">ca</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Arabic' (138 aligned documents, 85.6k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-ca.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (132 aligned documents, 90.7k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-ca.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (26 aligned documents, 15.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Czech (sample file)" href="OpenSubtitles/v2013/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="OpenSubtitles/v2013/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="OpenSubtitles/v2013/ca-de_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="OpenSubtitles/v2013/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="OpenSubtitles/v2013/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="OpenSubtitles/v2013/ca-es_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="OpenSubtitles/v2013/ca-et_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="OpenSubtitles/v2013/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="OpenSubtitles/v2013/ca-fr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hebrew (sample file)" href="OpenSubtitles/v2013/ca-he_sample.html">view</a></td><td></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="OpenSubtitles/v2013/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="OpenSubtitles/v2013/ca-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Indonesian (sample file)" href="OpenSubtitles/v2013/ca-id_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="OpenSubtitles/v2013/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="OpenSubtitles/v2013/ca-it_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="OpenSubtitles/v2013/ca-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Korean (sample file)" href="OpenSubtitles/v2013/ca-ko_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="OpenSubtitles/v2013/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="OpenSubtitles/v2013/ca-lv_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Macedonian (sample file)" href="OpenSubtitles/v2013/ca-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Malay (sample file)" href="OpenSubtitles/v2013/ca-ms_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/ca-nb_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Dutch (sample file)" href="OpenSubtitles/v2013/ca-nl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Polish (sample file)" href="OpenSubtitles/v2013/ca-pl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles/v2013/ca-pt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles/v2013/ca-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="OpenSubtitles/v2013/ca-ro_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Russian (sample file)" href="OpenSubtitles/v2013/ca-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="OpenSubtitles/v2013/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="OpenSubtitles/v2013/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="OpenSubtitles/v2013/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Serbian (sample file)" href="OpenSubtitles/v2013/ca-sr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Swedish (sample file)" href="OpenSubtitles/v2013/ca-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Thai (sample file)" href="OpenSubtitles/v2013/ca-th_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="OpenSubtitles/v2013/ca-tr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Ukrainian (sample file)" href="OpenSubtitles/v2013/ca-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Vietnamese (sample file)" href="OpenSubtitles/v2013/ca-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="OpenSubtitles/v2013/ca-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="OpenSubtitles/v2013/ca-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ca.raw.tar.gz">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/cs.tar.gz">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Afrikaans' (0.7k links, 14.1k tokens)" href="download.php?f=OpenSubtitles2013/af-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (9,936 aligned documents, 7.1M links, 104.1M tokens)" href="download.php?f=OpenSubtitles2013/ar-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Belarusian' (1.1k links, 6.3k tokens)" href="download.php?f=OpenSubtitles2013/be-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (12,369 aligned documents, 10.2M links, 142.1M tokens)" href="download.php?f=OpenSubtitles2013/bg-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bengali' (1.6k links, 22.1k tokens)" href="download.php?f=OpenSubtitles2013/bn-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (1,431 aligned documents, 1.2M links, 16.0M tokens)" href="download.php?f=OpenSubtitles2013/bs-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (149 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/ca-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="OpenSubtitles/v2013/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="OpenSubtitles/v2013/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="OpenSubtitles/v2013/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="OpenSubtitles/v2013/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="OpenSubtitles/v2013/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="OpenSubtitles/v2013/cs-et_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Basque (sample file)" href="OpenSubtitles/v2013/cs-eu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Persian (sample file)" href="OpenSubtitles/v2013/cs-fa_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="OpenSubtitles/v2013/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="OpenSubtitles/v2013/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hebrew (sample file)" href="OpenSubtitles/v2013/cs-he_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hindi (sample file)" href="OpenSubtitles/v2013/cs-hi_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Croatian (sample file)" href="OpenSubtitles/v2013/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="OpenSubtitles/v2013/cs-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Indonesian (sample file)" href="OpenSubtitles/v2013/cs-id_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="OpenSubtitles/v2013/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="OpenSubtitles/v2013/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="OpenSubtitles/v2013/cs-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="OpenSubtitles/v2013/cs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="OpenSubtitles/v2013/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="OpenSubtitles/v2013/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="OpenSubtitles/v2013/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Malayalam (sample file)" href="OpenSubtitles/v2013/cs-ml_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Malay (sample file)" href="OpenSubtitles/v2013/cs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/cs-nb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="OpenSubtitles/v2013/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="OpenSubtitles/v2013/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles/v2013/cs-pt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles/v2013/cs-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="OpenSubtitles/v2013/cs-ro_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Russian (sample file)" href="OpenSubtitles/v2013/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="OpenSubtitles/v2013/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="OpenSubtitles/v2013/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="OpenSubtitles/v2013/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="OpenSubtitles/v2013/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Serbian (sample file)" href="OpenSubtitles/v2013/cs-sr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="OpenSubtitles/v2013/cs-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Tamil (sample file)" href="OpenSubtitles/v2013/cs-ta_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Telugu (sample file)" href="OpenSubtitles/v2013/cs-te_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Thai (sample file)" href="OpenSubtitles/v2013/cs-th_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="OpenSubtitles/v2013/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="OpenSubtitles/v2013/cs-uk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Urdu (sample file)" href="OpenSubtitles/v2013/cs-ur_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Vietnamese (sample file)" href="OpenSubtitles/v2013/cs-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles/v2013/cs-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles/v2013/cs-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/cs.raw.tar.gz">cs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/da.tar.gz">da</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Arabic' (4,087 aligned documents, 3.3M links, 49.8M tokens)" href="download.php?f=OpenSubtitles2013/ar-da.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (4,087 aligned documents, 3.8M links, 54.6M tokens)" href="download.php?f=OpenSubtitles2013/bg-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bengali' (1.7k links, 23.7k tokens)" href="download.php?f=OpenSubtitles2013/bn-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bosnian' (534 aligned documents, 0.5M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2013/bs-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (95 aligned documents, 60.9k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/ca-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (4,521 aligned documents, 4.2M links, 58.9M tokens)" href="download.php?f=OpenSubtitles2013/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="OpenSubtitles/v2013/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="OpenSubtitles/v2013/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="OpenSubtitles/v2013/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="OpenSubtitles/v2013/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="OpenSubtitles/v2013/da-et_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Basque (sample file)" href="OpenSubtitles/v2013/da-eu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Persian (sample file)" href="OpenSubtitles/v2013/da-fa_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="OpenSubtitles/v2013/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="OpenSubtitles/v2013/da-fr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hebrew (sample file)" href="OpenSubtitles/v2013/da-he_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hindi (sample file)" href="OpenSubtitles/v2013/da-hi_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Croatian (sample file)" href="OpenSubtitles/v2013/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="OpenSubtitles/v2013/da-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Indonesian (sample file)" href="OpenSubtitles/v2013/da-id_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="OpenSubtitles/v2013/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="OpenSubtitles/v2013/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="OpenSubtitles/v2013/da-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Kazakh (sample file)" href="OpenSubtitles/v2013/da-kk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Korean (sample file)" href="OpenSubtitles/v2013/da-ko_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="OpenSubtitles/v2013/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="OpenSubtitles/v2013/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="OpenSubtitles/v2013/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Malayalam (sample file)" href="OpenSubtitles/v2013/da-ml_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Malay (sample file)" href="OpenSubtitles/v2013/da-ms_sample.html">view</a></td><td><a rel="nofollow" title="Danish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/da-nb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="OpenSubtitles/v2013/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="OpenSubtitles/v2013/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles/v2013/da-pt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles/v2013/da-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="OpenSubtitles/v2013/da-ro_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Russian (sample file)" href="OpenSubtitles/v2013/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="OpenSubtitles/v2013/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="OpenSubtitles/v2013/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="OpenSubtitles/v2013/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="OpenSubtitles/v2013/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Serbian (sample file)" href="OpenSubtitles/v2013/da-sr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="OpenSubtitles/v2013/da-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Thai (sample file)" href="OpenSubtitles/v2013/da-th_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="OpenSubtitles/v2013/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="OpenSubtitles/v2013/da-uk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Urdu (sample file)" href="OpenSubtitles/v2013/da-ur_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Vietnamese (sample file)" href="OpenSubtitles/v2013/da-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles/v2013/da-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles/v2013/da-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/da.raw.tar.gz">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/de.tar.gz">de</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (2,414 aligned documents, 2.1M links, 30.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (2,924 aligned documents, 2.9M links, 41.0M tokens)" href="download.php?f=OpenSubtitles2013/bg-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bengali' (1.8k links, 24.4k tokens)" href="download.php?f=OpenSubtitles2013/bn-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (372 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2013/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (93 aligned documents, 74.8k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/ca-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (3,307 aligned documents, 3.3M links, 46.1M tokens)" href="download.php?f=OpenSubtitles2013/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (1,686 aligned documents, 1.7M links, 25.1M tokens)" href="download.php?f=OpenSubtitles2013/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="OpenSubtitles/v2013/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="OpenSubtitles/v2013/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="OpenSubtitles/v2013/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="OpenSubtitles/v2013/de-et_sample.html">view</a></td><td><a rel="nofollow" title="German-Basque (sample file)" href="OpenSubtitles/v2013/de-eu_sample.html">view</a></td><td><a rel="nofollow" title="German-Persian (sample file)" href="OpenSubtitles/v2013/de-fa_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="OpenSubtitles/v2013/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="OpenSubtitles/v2013/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hebrew (sample file)" href="OpenSubtitles/v2013/de-he_sample.html">view</a></td><td></td><th>de</th>
<td><a rel="nofollow" title="German-Croatian (sample file)" href="OpenSubtitles/v2013/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="OpenSubtitles/v2013/de-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Indonesian (sample file)" href="OpenSubtitles/v2013/de-id_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="OpenSubtitles/v2013/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="OpenSubtitles/v2013/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="OpenSubtitles/v2013/de-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Kazakh (sample file)" href="OpenSubtitles/v2013/de-kk_sample.html">view</a></td><td><a rel="nofollow" title="German-Korean (sample file)" href="OpenSubtitles/v2013/de-ko_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="OpenSubtitles/v2013/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="OpenSubtitles/v2013/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="OpenSubtitles/v2013/de-mk_sample.html">view</a></td><td><a rel="nofollow" title="German-Malayalam (sample file)" href="OpenSubtitles/v2013/de-ml_sample.html">view</a></td><td><a rel="nofollow" title="German-Malay (sample file)" href="OpenSubtitles/v2013/de-ms_sample.html">view</a></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="OpenSubtitles/v2013/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="OpenSubtitles/v2013/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles/v2013/de-pt_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles/v2013/de-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="OpenSubtitles/v2013/de-ro_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Russian (sample file)" href="OpenSubtitles/v2013/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="OpenSubtitles/v2013/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="OpenSubtitles/v2013/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="OpenSubtitles/v2013/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Albanian (sample file)" href="OpenSubtitles/v2013/de-sq_sample.html">view</a></td><td><a rel="nofollow" title="German-Serbian (sample file)" href="OpenSubtitles/v2013/de-sr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="OpenSubtitles/v2013/de-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-Thai (sample file)" href="OpenSubtitles/v2013/de-th_sample.html">view</a></td><td><a rel="nofollow" title="German-Turkish (sample file)" href="OpenSubtitles/v2013/de-tr_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="OpenSubtitles/v2013/de-uk_sample.html">view</a></td><td><a rel="nofollow" title="German-Urdu (sample file)" href="OpenSubtitles/v2013/de-ur_sample.html">view</a></td><td><a rel="nofollow" title="German-Vietnamese (sample file)" href="OpenSubtitles/v2013/de-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="OpenSubtitles/v2013/de-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="OpenSubtitles/v2013/de-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/el.tar.gz">el</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (11,373 aligned documents, 7.9M links, 121.1M tokens)" href="download.php?f=OpenSubtitles2013/ar-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (13,840 aligned documents, 11.2M links, 165.1M tokens)" href="download.php?f=OpenSubtitles2013/bg-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (1,778 aligned documents, 1.4M links, 20.6M tokens)" href="download.php?f=OpenSubtitles2013/bs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (157 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/ca-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (15,641 aligned documents, 12.4M links, 179.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (5,452 aligned documents, 4.9M links, 72.5M tokens)" href="download.php?f=OpenSubtitles2013/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (3,920 aligned documents, 3.7M links, 55.3M tokens)" href="download.php?f=OpenSubtitles2013/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="OpenSubtitles/v2013/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="OpenSubtitles/v2013/el-es_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="OpenSubtitles/v2013/el-et_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Basque (sample file)" href="OpenSubtitles/v2013/el-eu_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Persian (sample file)" href="OpenSubtitles/v2013/el-fa_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Finnish (sample file)" href="OpenSubtitles/v2013/el-fi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-French (sample file)" href="OpenSubtitles/v2013/el-fr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hebrew (sample file)" href="OpenSubtitles/v2013/el-he_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hindi (sample file)" href="OpenSubtitles/v2013/el-hi_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Croatian (sample file)" href="OpenSubtitles/v2013/el-hr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Hungarian (sample file)" href="OpenSubtitles/v2013/el-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Indonesian (sample file)" href="OpenSubtitles/v2013/el-id_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="OpenSubtitles/v2013/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="OpenSubtitles/v2013/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="OpenSubtitles/v2013/el-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Kazakh (sample file)" href="OpenSubtitles/v2013/el-kk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="OpenSubtitles/v2013/el-ko_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="OpenSubtitles/v2013/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="OpenSubtitles/v2013/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="OpenSubtitles/v2013/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Malayalam (sample file)" href="OpenSubtitles/v2013/el-ml_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Malay (sample file)" href="OpenSubtitles/v2013/el-ms_sample.html">view</a></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="OpenSubtitles/v2013/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="OpenSubtitles/v2013/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles/v2013/el-pt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles/v2013/el-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="OpenSubtitles/v2013/el-ro_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Russian (sample file)" href="OpenSubtitles/v2013/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="OpenSubtitles/v2013/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="OpenSubtitles/v2013/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="OpenSubtitles/v2013/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="OpenSubtitles/v2013/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Serbian (sample file)" href="OpenSubtitles/v2013/el-sr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="OpenSubtitles/v2013/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swahili (sample file)" href="OpenSubtitles/v2013/el-sw_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Tamil (sample file)" href="OpenSubtitles/v2013/el-ta_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Telugu (sample file)" href="OpenSubtitles/v2013/el-te_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Thai (sample file)" href="OpenSubtitles/v2013/el-th_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="OpenSubtitles/v2013/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="OpenSubtitles/v2013/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Urdu (sample file)" href="OpenSubtitles/v2013/el-ur_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Vietnamese (sample file)" href="OpenSubtitles/v2013/el-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles/v2013/el-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles/v2013/el-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/el.raw.tar.gz">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/en.tar.gz">en</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (13,694 aligned documents, 10.5M links, 167.5M tokens)" href="download.php?f=OpenSubtitles2013/ar-en.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (19,324 aligned documents, 17.8M links, 264.5M tokens)" href="download.php?f=OpenSubtitles2013/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (1.8k links, 25.5k tokens)" href="download.php?f=OpenSubtitles2013/bn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (2,303 aligned documents, 2.0M links, 29.8M tokens)" href="download.php?f=OpenSubtitles2013/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (173 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (21,972 aligned documents, 19.5M links, 285.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (7,011 aligned documents, 7.2M links, 108.2M tokens)" href="download.php?f=OpenSubtitles2013/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (5,517 aligned documents, 5.8M links, 86.1M tokens)" href="download.php?f=OpenSubtitles2013/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (25,381 aligned documents, 22.2M links, 345.1M tokens)" href="download.php?f=OpenSubtitles2013/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Spanish (sample file)" href="OpenSubtitles/v2013/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="OpenSubtitles/v2013/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="OpenSubtitles/v2013/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="OpenSubtitles/v2013/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="OpenSubtitles/v2013/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="OpenSubtitles/v2013/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="OpenSubtitles/v2013/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="OpenSubtitles/v2013/en-hi_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="OpenSubtitles/v2013/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="OpenSubtitles/v2013/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Armenian (sample file)" href="OpenSubtitles/v2013/en-hy_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="OpenSubtitles/v2013/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="OpenSubtitles/v2013/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="OpenSubtitles/v2013/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="OpenSubtitles/v2013/en-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="OpenSubtitles/v2013/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="OpenSubtitles/v2013/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="OpenSubtitles/v2013/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="OpenSubtitles/v2013/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="OpenSubtitles/v2013/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="OpenSubtitles/v2013/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="OpenSubtitles/v2013/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="OpenSubtitles/v2013/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="OpenSubtitles/v2013/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles/v2013/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles/v2013/en-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="OpenSubtitles/v2013/en-ro_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Russian (sample file)" href="OpenSubtitles/v2013/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="OpenSubtitles/v2013/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="OpenSubtitles/v2013/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="OpenSubtitles/v2013/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="OpenSubtitles/v2013/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="OpenSubtitles/v2013/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="OpenSubtitles/v2013/en-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Tamil (sample file)" href="OpenSubtitles/v2013/en-ta_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="OpenSubtitles/v2013/en-te_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="OpenSubtitles/v2013/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="OpenSubtitles/v2013/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="OpenSubtitles/v2013/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="OpenSubtitles/v2013/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="OpenSubtitles/v2013/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles/v2013/en-zh_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles/v2013/en-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles/v2013/en-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Afrikaans' (0.7k links, 14.7k tokens)" href="download.php?f=OpenSubtitles2013/af-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (12,415 aligned documents, 8.9M links, 138.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (16,020 aligned documents, 13.4M links, 201.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bengali' (1.6k links, 23.1k tokens)" href="download.php?f=OpenSubtitles2013/bn-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (1,890 aligned documents, 1.5M links, 22.3M tokens)" href="download.php?f=OpenSubtitles2013/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (166 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (18,634 aligned documents, 15.0M links, 221.8M tokens)" href="download.php?f=OpenSubtitles2013/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (5,718 aligned documents, 5.3M links, 79.9M tokens)" href="download.php?f=OpenSubtitles2013/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (4,440 aligned documents, 4.4M links, 64.9M tokens)" href="download.php?f=OpenSubtitles2013/de-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (21,691 aligned documents, 17.3M links, 269.5M tokens)" href="download.php?f=OpenSubtitles2013/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (35,617 aligned documents, 32.8M links, 513.6M tokens)" href="download.php?f=OpenSubtitles2013/en-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="OpenSubtitles/v2013/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Basque (sample file)" href="OpenSubtitles/v2013/es-eu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Persian (sample file)" href="OpenSubtitles/v2013/es-fa_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="OpenSubtitles/v2013/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="OpenSubtitles/v2013/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hebrew (sample file)" href="OpenSubtitles/v2013/es-he_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hindi (sample file)" href="OpenSubtitles/v2013/es-hi_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="OpenSubtitles/v2013/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="OpenSubtitles/v2013/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Armenian (sample file)" href="OpenSubtitles/v2013/es-hy_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Indonesian (sample file)" href="OpenSubtitles/v2013/es-id_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="OpenSubtitles/v2013/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="OpenSubtitles/v2013/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="OpenSubtitles/v2013/es-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Kazakh (sample file)" href="OpenSubtitles/v2013/es-kk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="OpenSubtitles/v2013/es-ko_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="OpenSubtitles/v2013/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="OpenSubtitles/v2013/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Macedonian (sample file)" href="OpenSubtitles/v2013/es-mk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Malayalam (sample file)" href="OpenSubtitles/v2013/es-ml_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Malay (sample file)" href="OpenSubtitles/v2013/es-ms_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="OpenSubtitles/v2013/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="OpenSubtitles/v2013/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles/v2013/es-pt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles/v2013/es-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="OpenSubtitles/v2013/es-ro_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Russian (sample file)" href="OpenSubtitles/v2013/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="OpenSubtitles/v2013/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="OpenSubtitles/v2013/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="OpenSubtitles/v2013/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Albanian (sample file)" href="OpenSubtitles/v2013/es-sq_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Serbian (sample file)" href="OpenSubtitles/v2013/es-sr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="OpenSubtitles/v2013/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swahili (sample file)" href="OpenSubtitles/v2013/es-sw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tamil (sample file)" href="OpenSubtitles/v2013/es-ta_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Telugu (sample file)" href="OpenSubtitles/v2013/es-te_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Thai (sample file)" href="OpenSubtitles/v2013/es-th_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Turkish (sample file)" href="OpenSubtitles/v2013/es-tr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="OpenSubtitles/v2013/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Urdu (sample file)" href="OpenSubtitles/v2013/es-ur_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Vietnamese (sample file)" href="OpenSubtitles/v2013/es-vi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles/v2013/es-zh_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles/v2013/es-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles/v2013/es-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/et.tar.gz">et</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (3,807 aligned documents, 3.0M links, 43.3M tokens)" href="download.php?f=OpenSubtitles2013/ar-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (3,865 aligned documents, 3.6M links, 47.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bengali' (1.6k links, 21.7k tokens)" href="download.php?f=OpenSubtitles2013/bn-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (534 aligned documents, 0.5M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2013/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (88 aligned documents, 64.3k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (4,292 aligned documents, 4.0M links, 51.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (2,354 aligned documents, 2.2M links, 31.0M tokens)" href="download.php?f=OpenSubtitles2013/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (1,458 aligned documents, 1.5M links, 20.7M tokens)" href="download.php?f=OpenSubtitles2013/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (5,104 aligned documents, 4.5M links, 62.3M tokens)" href="download.php?f=OpenSubtitles2013/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (5,938 aligned documents, 6.0M links, 84.6M tokens)" href="download.php?f=OpenSubtitles2013/en-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (5,231 aligned documents, 4.8M links, 67.2M tokens)" href="download.php?f=OpenSubtitles2013/es-et.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Estonian-Basque (sample file)" href="OpenSubtitles/v2013/et-eu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="OpenSubtitles/v2013/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="OpenSubtitles/v2013/et-fr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hebrew (sample file)" href="OpenSubtitles/v2013/et-he_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hindi (sample file)" href="OpenSubtitles/v2013/et-hi_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="OpenSubtitles/v2013/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="OpenSubtitles/v2013/et-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Indonesian (sample file)" href="OpenSubtitles/v2013/et-id_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="OpenSubtitles/v2013/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="OpenSubtitles/v2013/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="OpenSubtitles/v2013/et-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Korean (sample file)" href="OpenSubtitles/v2013/et-ko_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="OpenSubtitles/v2013/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="OpenSubtitles/v2013/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="OpenSubtitles/v2013/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malayalam (sample file)" href="OpenSubtitles/v2013/et-ml_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malay (sample file)" href="OpenSubtitles/v2013/et-ms_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/et-nb_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="OpenSubtitles/v2013/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="OpenSubtitles/v2013/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles/v2013/et-pt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles/v2013/et-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="OpenSubtitles/v2013/et-ro_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Russian (sample file)" href="OpenSubtitles/v2013/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="OpenSubtitles/v2013/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="OpenSubtitles/v2013/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="OpenSubtitles/v2013/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="OpenSubtitles/v2013/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Serbian (sample file)" href="OpenSubtitles/v2013/et-sr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="OpenSubtitles/v2013/et-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Thai (sample file)" href="OpenSubtitles/v2013/et-th_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="OpenSubtitles/v2013/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="OpenSubtitles/v2013/et-uk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Urdu (sample file)" href="OpenSubtitles/v2013/et-ur_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Vietnamese (sample file)" href="OpenSubtitles/v2013/et-vi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles/v2013/et-zh_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles/v2013/et-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles/v2013/et-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/et.raw.tar.gz">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/eu.tar.gz">eu</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Arabic' (99 aligned documents, 94.8k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-eu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bulgarian' (119 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/bg-eu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Bosnian' (16 aligned documents, 16.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-eu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Czech' (122 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Danish' (73 aligned documents, 83.8k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/da-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-German' (48 aligned documents, 55.4k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/de-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Greek' (145 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2013/el-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (161 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (162 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/es-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Estonian' (81 aligned documents, 88.7k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/et-eu.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Basque-Finnish (sample file)" href="OpenSubtitles/v2013/eu-fi_sample.html">view</a></td><td><a rel="nofollow" title="Basque-French (sample file)" href="OpenSubtitles/v2013/eu-fr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hebrew (sample file)" href="OpenSubtitles/v2013/eu-he_sample.html">view</a></td><td></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Croatian (sample file)" href="OpenSubtitles/v2013/eu-hr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Hungarian (sample file)" href="OpenSubtitles/v2013/eu-hu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Basque-Icelandic (sample file)" href="OpenSubtitles/v2013/eu-is_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Italian (sample file)" href="OpenSubtitles/v2013/eu-it_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Japanese (sample file)" href="OpenSubtitles/v2013/eu-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Basque-Korean (sample file)" href="OpenSubtitles/v2013/eu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Lithuanian (sample file)" href="OpenSubtitles/v2013/eu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Latvian (sample file)" href="OpenSubtitles/v2013/eu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Macedonian (sample file)" href="OpenSubtitles/v2013/eu-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Malay (sample file)" href="OpenSubtitles/v2013/eu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Basque-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/eu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Dutch (sample file)" href="OpenSubtitles/v2013/eu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Polish (sample file)" href="OpenSubtitles/v2013/eu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="OpenSubtitles/v2013/eu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="OpenSubtitles/v2013/eu-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Romanian (sample file)" href="OpenSubtitles/v2013/eu-ro_sample.html">view</a></td><th>eu</th>
<td><a rel="nofollow" title="Basque-Russian (sample file)" href="OpenSubtitles/v2013/eu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Sinhala (sample file)" href="OpenSubtitles/v2013/eu-si_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovak (sample file)" href="OpenSubtitles/v2013/eu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Slovenian (sample file)" href="OpenSubtitles/v2013/eu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Albanian (sample file)" href="OpenSubtitles/v2013/eu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Serbian (sample file)" href="OpenSubtitles/v2013/eu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Swedish (sample file)" href="OpenSubtitles/v2013/eu-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Thai (sample file)" href="OpenSubtitles/v2013/eu-th_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Turkish (sample file)" href="OpenSubtitles/v2013/eu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Ukrainian (sample file)" href="OpenSubtitles/v2013/eu-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Vietnamese (sample file)" href="OpenSubtitles/v2013/eu-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Basque-Chinese (sample file)" href="OpenSubtitles/v2013/eu-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Chinese (sample file)" href="OpenSubtitles/v2013/eu-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/eu.raw.tar.gz">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fa.tar.gz">fa</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Arabic' (5 aligned documents, 2.9k links, 59.6k tokens)" href="download.php?f=OpenSubtitles2013/ar-fa.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bulgarian' (6 aligned documents, 2.0k links, 69.4k tokens)" href="download.php?f=OpenSubtitles2013/bg-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bengali' (0.3k links, 12.3k tokens)" href="download.php?f=OpenSubtitles2013/bn-fa.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Czech' (3 aligned documents, 1.5k links, 24.5k tokens)" href="download.php?f=OpenSubtitles2013/cs-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Danish' (2 aligned documents, 1.7k links, 35.2k tokens)" href="download.php?f=OpenSubtitles2013/da-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-German' (2 aligned documents, 0.8k links, 19.8k tokens)" href="download.php?f=OpenSubtitles2013/de-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Greek' (7 aligned documents, 3.5k links, 83.2k tokens)" href="download.php?f=OpenSubtitles2013/el-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (11 aligned documents, 4.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/en-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Spanish' (6 aligned documents, 2.0k links, 52.3k tokens)" href="download.php?f=OpenSubtitles2013/es-fa.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Persian-Finnish (sample file)" href="OpenSubtitles/v2013/fa-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Hebrew (sample file)" href="OpenSubtitles/v2013/fa-he_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hindi (sample file)" href="OpenSubtitles/v2013/fa-hi_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Croatian (sample file)" href="OpenSubtitles/v2013/fa-hr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hungarian (sample file)" href="OpenSubtitles/v2013/fa-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Indonesian (sample file)" href="OpenSubtitles/v2013/fa-id_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Italian (sample file)" href="OpenSubtitles/v2013/fa-it_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Georgian (sample file)" href="OpenSubtitles/v2013/fa-ka_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Malayalam (sample file)" href="OpenSubtitles/v2013/fa-ml_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Malay (sample file)" href="OpenSubtitles/v2013/fa-ms_sample.html">view</a></td><td><a rel="nofollow" title="Persian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/fa-nb_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Dutch (sample file)" href="OpenSubtitles/v2013/fa-nl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Polish (sample file)" href="OpenSubtitles/v2013/fa-pl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles/v2013/fa-pt_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles/v2013/fa-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Romanian (sample file)" href="OpenSubtitles/v2013/fa-ro_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Russian (sample file)" href="OpenSubtitles/v2013/fa-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Slovak (sample file)" href="OpenSubtitles/v2013/fa-sk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Slovenian (sample file)" href="OpenSubtitles/v2013/fa-sl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Albanian (sample file)" href="OpenSubtitles/v2013/fa-sq_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Serbian (sample file)" href="OpenSubtitles/v2013/fa-sr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Swedish (sample file)" href="OpenSubtitles/v2013/fa-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Tamil (sample file)" href="OpenSubtitles/v2013/fa-ta_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Telugu (sample file)" href="OpenSubtitles/v2013/fa-te_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Turkish (sample file)" href="OpenSubtitles/v2013/fa-tr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Ukrainian (sample file)" href="OpenSubtitles/v2013/fa-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Vietnamese (sample file)" href="OpenSubtitles/v2013/fa-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Chinese (sample file)" href="OpenSubtitles/v2013/fa-zh_cn_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fa.raw.tar.gz">fa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fi.tar.gz">fi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (5,113 aligned documents, 4.2M links, 54.8M tokens)" href="download.php?f=OpenSubtitles2013/ar-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (6,156 aligned documents, 5.8M links, 73.5M tokens)" href="download.php?f=OpenSubtitles2013/bg-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bengali' (1.8k links, 22.6k tokens)" href="download.php?f=OpenSubtitles2013/bn-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (835 aligned documents, 0.8M links, 9.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (67 aligned documents, 53.6k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/ca-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (6,460 aligned documents, 6.0M links, 75.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (3,900 aligned documents, 3.7M links, 47.8M tokens)" href="download.php?f=OpenSubtitles2013/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (2,307 aligned documents, 2.5M links, 31.6M tokens)" href="download.php?f=OpenSubtitles2013/de-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Greek' (8,183 aligned documents, 7.3M links, 96.2M tokens)" href="download.php?f=OpenSubtitles2013/el-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (10,875 aligned documents, 10.9M links, 149.8M tokens)" href="download.php?f=OpenSubtitles2013/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (9,001 aligned documents, 8.2M links, 111.8M tokens)" href="download.php?f=OpenSubtitles2013/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (3,047 aligned documents, 3.0M links, 36.9M tokens)" href="download.php?f=OpenSubtitles2013/et-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Basque' (95 aligned documents, 0.1M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/eu-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Persian' (2 aligned documents, 0.8k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2013/fa-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="OpenSubtitles/v2013/fi-fr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hebrew (sample file)" href="OpenSubtitles/v2013/fi-he_sample.html">view</a></td><td></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="OpenSubtitles/v2013/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="OpenSubtitles/v2013/fi-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Indonesian (sample file)" href="OpenSubtitles/v2013/fi-id_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="OpenSubtitles/v2013/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="OpenSubtitles/v2013/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="OpenSubtitles/v2013/fi-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Kazakh (sample file)" href="OpenSubtitles/v2013/fi-kk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="OpenSubtitles/v2013/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="OpenSubtitles/v2013/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="OpenSubtitles/v2013/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="OpenSubtitles/v2013/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malayalam (sample file)" href="OpenSubtitles/v2013/fi-ml_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malay (sample file)" href="OpenSubtitles/v2013/fi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/fi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="OpenSubtitles/v2013/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="OpenSubtitles/v2013/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles/v2013/fi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles/v2013/fi-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="OpenSubtitles/v2013/fi-ro_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Russian (sample file)" href="OpenSubtitles/v2013/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="OpenSubtitles/v2013/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="OpenSubtitles/v2013/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="OpenSubtitles/v2013/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="OpenSubtitles/v2013/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Serbian (sample file)" href="OpenSubtitles/v2013/fi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="OpenSubtitles/v2013/fi-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Thai (sample file)" href="OpenSubtitles/v2013/fi-th_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="OpenSubtitles/v2013/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="OpenSubtitles/v2013/fi-uk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Urdu (sample file)" href="OpenSubtitles/v2013/fi-ur_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Vietnamese (sample file)" href="OpenSubtitles/v2013/fi-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles/v2013/fi-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles/v2013/fi-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fi.raw.tar.gz">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fr.tar.gz">fr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (9,862 aligned documents, 7.0M links, 111.7M tokens)" href="download.php?f=OpenSubtitles2013/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Belarusian' (1.1k links, 7.5k tokens)" href="download.php?f=OpenSubtitles2013/be-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (12,012 aligned documents, 10.0M links, 150.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bengali' (0.4k links, 11.3k tokens)" href="download.php?f=OpenSubtitles2013/bn-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (1,452 aligned documents, 1.2M links, 17.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (144 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (13,348 aligned documents, 10.8M links, 160.8M tokens)" href="download.php?f=OpenSubtitles2013/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (4,466 aligned documents, 4.0M links, 60.7M tokens)" href="download.php?f=OpenSubtitles2013/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (3,774 aligned documents, 3.7M links, 54.7M tokens)" href="download.php?f=OpenSubtitles2013/de-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (16,701 aligned documents, 13.1M links, 205.5M tokens)" href="download.php?f=OpenSubtitles2013/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (26,504 aligned documents, 23.9M links, 371.6M tokens)" href="download.php?f=OpenSubtitles2013/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (21,627 aligned documents, 17.8M links, 280.6M tokens)" href="download.php?f=OpenSubtitles2013/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (3,979 aligned documents, 3.7M links, 51.6M tokens)" href="download.php?f=OpenSubtitles2013/et-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Basque' (118 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/eu-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (7,427 aligned documents, 6.7M links, 89.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Hebrew (sample file)" href="OpenSubtitles/v2013/fr-he_sample.html">view</a></td><td><a rel="nofollow" title="French-Hindi (sample file)" href="OpenSubtitles/v2013/fr-hi_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Croatian (sample file)" href="OpenSubtitles/v2013/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="OpenSubtitles/v2013/fr-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Indonesian (sample file)" href="OpenSubtitles/v2013/fr-id_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="OpenSubtitles/v2013/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="OpenSubtitles/v2013/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="OpenSubtitles/v2013/fr-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Korean (sample file)" href="OpenSubtitles/v2013/fr-ko_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="OpenSubtitles/v2013/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="OpenSubtitles/v2013/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="OpenSubtitles/v2013/fr-mk_sample.html">view</a></td><td><a rel="nofollow" title="French-Malayalam (sample file)" href="OpenSubtitles/v2013/fr-ml_sample.html">view</a></td><td><a rel="nofollow" title="French-Malay (sample file)" href="OpenSubtitles/v2013/fr-ms_sample.html">view</a></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="OpenSubtitles/v2013/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="OpenSubtitles/v2013/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles/v2013/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles/v2013/fr-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="OpenSubtitles/v2013/fr-ro_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Russian (sample file)" href="OpenSubtitles/v2013/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="OpenSubtitles/v2013/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="OpenSubtitles/v2013/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="OpenSubtitles/v2013/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="OpenSubtitles/v2013/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Serbian (sample file)" href="OpenSubtitles/v2013/fr-sr_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="OpenSubtitles/v2013/fr-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Thai (sample file)" href="OpenSubtitles/v2013/fr-th_sample.html">view</a></td><td><a rel="nofollow" title="French-Turkish (sample file)" href="OpenSubtitles/v2013/fr-tr_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="OpenSubtitles/v2013/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Urdu (sample file)" href="OpenSubtitles/v2013/fr-ur_sample.html">view</a></td><td><a rel="nofollow" title="French-Vietnamese (sample file)" href="OpenSubtitles/v2013/fr-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles/v2013/fr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles/v2013/fr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/he.tar.gz">he</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Arabic' (9,177 aligned documents, 6.7M links, 95.2M tokens)" href="download.php?f=OpenSubtitles2013/ar-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bulgarian' (10,018 aligned documents, 7.5M links, 114.5M tokens)" href="download.php?f=OpenSubtitles2013/bg-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bosnian' (1,301 aligned documents, 1.0M links, 14.7M tokens)" href="download.php?f=OpenSubtitles2013/bs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Catalan' (128 aligned documents, 84.5k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Czech' (11,340 aligned documents, 8.3M links, 126.6M tokens)" href="download.php?f=OpenSubtitles2013/cs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Danish' (4,101 aligned documents, 3.5M links, 53.8M tokens)" href="download.php?f=OpenSubtitles2013/da-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-German' (2,588 aligned documents, 2.3M links, 36.1M tokens)" href="download.php?f=OpenSubtitles2013/de-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Greek' (12,928 aligned documents, 9.2M links, 146.1M tokens)" href="download.php?f=OpenSubtitles2013/el-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (16,079 aligned documents, 12.8M links, 211.1M tokens)" href="download.php?f=OpenSubtitles2013/en-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Spanish' (14,229 aligned documents, 10.4M links, 169.0M tokens)" href="download.php?f=OpenSubtitles2013/es-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Estonian' (4,060 aligned documents, 3.4M links, 49.2M tokens)" href="download.php?f=OpenSubtitles2013/et-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Basque' (102 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/eu-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Persian' (4 aligned documents, 2.2k links, 56.9k tokens)" href="download.php?f=OpenSubtitles2013/fa-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Finnish' (5,506 aligned documents, 4.7M links, 64.3M tokens)" href="download.php?f=OpenSubtitles2013/fi-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-French' (11,564 aligned documents, 8.4M links, 137.6M tokens)" href="download.php?f=OpenSubtitles2013/fr-he.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hebrew-Hindi (sample file)" href="OpenSubtitles/v2013/he-hi_sample.html">view</a></td><th>he</th>
<td><a rel="nofollow" title="Hebrew-Croatian (sample file)" href="OpenSubtitles/v2013/he-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Hungarian (sample file)" href="OpenSubtitles/v2013/he-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Indonesian (sample file)" href="OpenSubtitles/v2013/he-id_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Icelandic (sample file)" href="OpenSubtitles/v2013/he-is_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Italian (sample file)" href="OpenSubtitles/v2013/he-it_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Japanese (sample file)" href="OpenSubtitles/v2013/he-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Kazakh (sample file)" href="OpenSubtitles/v2013/he-kk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Korean (sample file)" href="OpenSubtitles/v2013/he-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Lithuanian (sample file)" href="OpenSubtitles/v2013/he-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Latvian (sample file)" href="OpenSubtitles/v2013/he-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Macedonian (sample file)" href="OpenSubtitles/v2013/he-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malayalam (sample file)" href="OpenSubtitles/v2013/he-ml_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malay (sample file)" href="OpenSubtitles/v2013/he-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/he-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Dutch (sample file)" href="OpenSubtitles/v2013/he-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Polish (sample file)" href="OpenSubtitles/v2013/he-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles/v2013/he-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles/v2013/he-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Romanian (sample file)" href="OpenSubtitles/v2013/he-ro_sample.html">view</a></td><th>he</th>
<td><a rel="nofollow" title="Hebrew-Russian (sample file)" href="OpenSubtitles/v2013/he-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Sinhala (sample file)" href="OpenSubtitles/v2013/he-si_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovak (sample file)" href="OpenSubtitles/v2013/he-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovenian (sample file)" href="OpenSubtitles/v2013/he-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Albanian (sample file)" href="OpenSubtitles/v2013/he-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Serbian (sample file)" href="OpenSubtitles/v2013/he-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Swedish (sample file)" href="OpenSubtitles/v2013/he-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Tamil (sample file)" href="OpenSubtitles/v2013/he-ta_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Telugu (sample file)" href="OpenSubtitles/v2013/he-te_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Thai (sample file)" href="OpenSubtitles/v2013/he-th_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Turkish (sample file)" href="OpenSubtitles/v2013/he-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Ukrainian (sample file)" href="OpenSubtitles/v2013/he-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Urdu (sample file)" href="OpenSubtitles/v2013/he-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Vietnamese (sample file)" href="OpenSubtitles/v2013/he-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles/v2013/he-zh_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles/v2013/he-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles/v2013/he-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/he.raw.tar.gz">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hi.tar.gz">hi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Arabic' (5 aligned documents, 2.6k links, 57.0k tokens)" href="download.php?f=OpenSubtitles2013/ar-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bulgarian' (0.4k links, 7.0k tokens)" href="download.php?f=OpenSubtitles2013/bg-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Bosnian' (0.6k links, 10.3k tokens)" href="download.php?f=OpenSubtitles2013/bs-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Czech' (3 aligned documents, 1.2k links, 22.8k tokens)" href="download.php?f=OpenSubtitles2013/cs-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Danish' (0.4k links, 7.3k tokens)" href="download.php?f=OpenSubtitles2013/da-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Greek' (4 aligned documents, 1.2k links, 23.3k tokens)" href="download.php?f=OpenSubtitles2013/el-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (13 aligned documents, 5.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/en-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Spanish' (5 aligned documents, 2.3k links, 48.3k tokens)" href="download.php?f=OpenSubtitles2013/es-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Estonian' (0.4k links, 7.2k tokens)" href="download.php?f=OpenSubtitles2013/et-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Persian' (6 aligned documents, 1.6k links, 76.3k tokens)" href="download.php?f=OpenSubtitles2013/fa-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-French' (4 aligned documents, 2.1k links, 45.5k tokens)" href="download.php?f=OpenSubtitles2013/fr-hi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Hebrew' (3 aligned documents, 1.3k links, 29.4k tokens)" href="download.php?f=OpenSubtitles2013/he-hi.xml.gz">ces</a></td>
<th></th>
<th>hi</th>
<td><a rel="nofollow" title="Hindi-Croatian (sample file)" href="OpenSubtitles/v2013/hi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Hungarian (sample file)" href="OpenSubtitles/v2013/hi-hu_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hindi-Italian (sample file)" href="OpenSubtitles/v2013/hi-it_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Japanese (sample file)" href="OpenSubtitles/v2013/hi-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hindi-Macedonian (sample file)" href="OpenSubtitles/v2013/hi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Malayalam (sample file)" href="OpenSubtitles/v2013/hi-ml_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Malay (sample file)" href="OpenSubtitles/v2013/hi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/hi-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Dutch (sample file)" href="OpenSubtitles/v2013/hi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Polish (sample file)" href="OpenSubtitles/v2013/hi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Portuguese (sample file)" href="OpenSubtitles/v2013/hi-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Portuguese (sample file)" href="OpenSubtitles/v2013/hi-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Romanian (sample file)" href="OpenSubtitles/v2013/hi-ro_sample.html">view</a></td><th>hi</th>
<td><a rel="nofollow" title="Hindi-Russian (sample file)" href="OpenSubtitles/v2013/hi-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hindi-Slovak (sample file)" href="OpenSubtitles/v2013/hi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Slovenian (sample file)" href="OpenSubtitles/v2013/hi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Albanian (sample file)" href="OpenSubtitles/v2013/hi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Serbian (sample file)" href="OpenSubtitles/v2013/hi-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Swedish (sample file)" href="OpenSubtitles/v2013/hi-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hindi-Tamil (sample file)" href="OpenSubtitles/v2013/hi-ta_sample.html">view</a></td><td><a rel="nofollow" title="Hindi-Telugu (sample file)" href="OpenSubtitles/v2013/hi-te_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hindi-Turkish (sample file)" href="OpenSubtitles/v2013/hi-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hi.raw.tar.gz">hi</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
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
<th>he</th>
<th>hi</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th>ro</th>
<th></th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>sw</th>
<th>ta</th>
<th>te</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th>zh_cn</th>
<th>zh_tw</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hr.tar.gz">hr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (8,545 aligned documents, 6.1M links, 88.6M tokens)" href="download.php?f=OpenSubtitles2013/ar-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (10,139 aligned documents, 8.5M links, 117.3M tokens)" href="download.php?f=OpenSubtitles2013/bg-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (893 aligned documents, 0.8M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2013/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (136 aligned documents, 100.0k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (11,507 aligned documents, 9.4M links, 128.1M tokens)" href="download.php?f=OpenSubtitles2013/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (4,316 aligned documents, 4.0M links, 55.4M tokens)" href="download.php?f=OpenSubtitles2013/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (2,770 aligned documents, 2.8M links, 38.3M tokens)" href="download.php?f=OpenSubtitles2013/de-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Greek' (14,145 aligned documents, 11.1M links, 160.1M tokens)" href="download.php?f=OpenSubtitles2013/el-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (18,640 aligned documents, 16.6M links, 242.5M tokens)" href="download.php?f=OpenSubtitles2013/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (15,893 aligned documents, 12.9M links, 189.5M tokens)" href="download.php?f=OpenSubtitles2013/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (4,045 aligned documents, 3.7M links, 48.4M tokens)" href="download.php?f=OpenSubtitles2013/et-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Basque' (108 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/eu-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Persian' (3 aligned documents, 1.4k links, 36.3k tokens)" href="download.php?f=OpenSubtitles2013/fa-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (6,163 aligned documents, 5.7M links, 70.1M tokens)" href="download.php?f=OpenSubtitles2013/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (12,340 aligned documents, 9.9M links, 146.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hebrew' (9,942 aligned documents, 7.4M links, 110.7M tokens)" href="download.php?f=OpenSubtitles2013/he-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hindi' (2 aligned documents, 0.9k links, 15.3k tokens)" href="download.php?f=OpenSubtitles2013/hi-hr.xml.gz">ces</a></td>
<th>hr</th>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="OpenSubtitles/v2013/hr-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Indonesian (sample file)" href="OpenSubtitles/v2013/hr-id_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="OpenSubtitles/v2013/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="OpenSubtitles/v2013/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="OpenSubtitles/v2013/hr-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="OpenSubtitles/v2013/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="OpenSubtitles/v2013/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="OpenSubtitles/v2013/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="OpenSubtitles/v2013/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malayalam (sample file)" href="OpenSubtitles/v2013/hr-ml_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malay (sample file)" href="OpenSubtitles/v2013/hr-ms_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/hr-nb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="OpenSubtitles/v2013/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="OpenSubtitles/v2013/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles/v2013/hr-pt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles/v2013/hr-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="OpenSubtitles/v2013/hr-ro_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Russian (sample file)" href="OpenSubtitles/v2013/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="OpenSubtitles/v2013/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="OpenSubtitles/v2013/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="OpenSubtitles/v2013/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="OpenSubtitles/v2013/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Serbian (sample file)" href="OpenSubtitles/v2013/hr-sr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="OpenSubtitles/v2013/hr-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Tamil (sample file)" href="OpenSubtitles/v2013/hr-ta_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Telugu (sample file)" href="OpenSubtitles/v2013/hr-te_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Thai (sample file)" href="OpenSubtitles/v2013/hr-th_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="OpenSubtitles/v2013/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="OpenSubtitles/v2013/hr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Urdu (sample file)" href="OpenSubtitles/v2013/hr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Vietnamese (sample file)" href="OpenSubtitles/v2013/hr-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles/v2013/hr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles/v2013/hr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hr.raw.tar.gz">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hu.tar.gz">hu</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Arabic' (9,773 aligned documents, 7.0M links, 99.1M tokens)" href="download.php?f=OpenSubtitles2013/ar-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (12,589 aligned documents, 10.3M links, 139.5M tokens)" href="download.php?f=OpenSubtitles2013/bg-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (1,370 aligned documents, 1.1M links, 14.6M tokens)" href="download.php?f=OpenSubtitles2013/bs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (147 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/ca-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (14,151 aligned documents, 11.3M links, 150.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (4,397 aligned documents, 4.0M links, 55.0M tokens)" href="download.php?f=OpenSubtitles2013/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (3,208 aligned documents, 3.2M links, 43.1M tokens)" href="download.php?f=OpenSubtitles2013/de-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Greek' (15,486 aligned documents, 12.1M links, 171.8M tokens)" href="download.php?f=OpenSubtitles2013/el-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (23,394 aligned documents, 20.5M links, 292.5M tokens)" href="download.php?f=OpenSubtitles2013/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (19,081 aligned documents, 15.3M links, 220.2M tokens)" href="download.php?f=OpenSubtitles2013/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (4,012 aligned documents, 3.7M links, 46.6M tokens)" href="download.php?f=OpenSubtitles2013/et-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Basque' (128 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/eu-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Persian' (5 aligned documents, 2.1k links, 48.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (6,538 aligned documents, 6.0M links, 72.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (16,074 aligned documents, 12.7M links, 183.2M tokens)" href="download.php?f=OpenSubtitles2013/fr-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Hebrew' (11,019 aligned documents, 8.0M links, 117.9M tokens)" href="download.php?f=OpenSubtitles2013/he-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Hindi' (2 aligned documents, 0.8k links, 14.9k tokens)" href="download.php?f=OpenSubtitles2013/hi-hu.xml.gz">ces</a></td>
<th>hu</th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (11,554 aligned documents, 9.3M links, 123.0M tokens)" href="download.php?f=OpenSubtitles2013/hr-hu.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Hungarian-Indonesian (sample file)" href="OpenSubtitles/v2013/hu-id_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="OpenSubtitles/v2013/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="OpenSubtitles/v2013/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="OpenSubtitles/v2013/hu-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Kazakh (sample file)" href="OpenSubtitles/v2013/hu-kk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="OpenSubtitles/v2013/hu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="OpenSubtitles/v2013/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="OpenSubtitles/v2013/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="OpenSubtitles/v2013/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Malayalam (sample file)" href="OpenSubtitles/v2013/hu-ml_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Malay (sample file)" href="OpenSubtitles/v2013/hu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/hu-nb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="OpenSubtitles/v2013/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="OpenSubtitles/v2013/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles/v2013/hu-pt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles/v2013/hu-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="OpenSubtitles/v2013/hu-ro_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="OpenSubtitles/v2013/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="OpenSubtitles/v2013/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="OpenSubtitles/v2013/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="OpenSubtitles/v2013/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="OpenSubtitles/v2013/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Serbian (sample file)" href="OpenSubtitles/v2013/hu-sr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="OpenSubtitles/v2013/hu-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Tamil (sample file)" href="OpenSubtitles/v2013/hu-ta_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Telugu (sample file)" href="OpenSubtitles/v2013/hu-te_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Thai (sample file)" href="OpenSubtitles/v2013/hu-th_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="OpenSubtitles/v2013/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="OpenSubtitles/v2013/hu-uk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Urdu (sample file)" href="OpenSubtitles/v2013/hu-ur_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Vietnamese (sample file)" href="OpenSubtitles/v2013/hu-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles/v2013/hu-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles/v2013/hu-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hu.raw.tar.gz">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hy.tar.gz">hy</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Armenian-English' (1.0k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/en-hy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Armenian-Spanish' (1.1k links, 15.7k tokens)" href="download.php?f=OpenSubtitles2013/es-hy.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hy</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Armenian-Polish (sample file)" href="OpenSubtitles/v2013/hy-pl_sample.html">view</a></td><td><a rel="nofollow" title="Armenian-Portuguese (sample file)" href="OpenSubtitles/v2013/hy-pt_sample.html">view</a></td><td><a rel="nofollow" title="Armenian-Portuguese (sample file)" href="OpenSubtitles/v2013/hy-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Armenian-Romanian (sample file)" href="OpenSubtitles/v2013/hy-ro_sample.html">view</a></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Armenian-Turkish (sample file)" href="OpenSubtitles/v2013/hy-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/hy.raw.tar.gz">hy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/id.tar.gz">id</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Arabic' (47 aligned documents, 41.3k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/ar-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bulgarian' (50 aligned documents, 46.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/bg-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bosnian' (10 aligned documents, 9.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Catalan' (5 aligned documents, 4.2k links, 65.7k tokens)" href="download.php?f=OpenSubtitles2013/ca-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Czech' (50 aligned documents, 49.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Danish' (42 aligned documents, 42.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/da-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-German' (29 aligned documents, 29.2k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/de-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Greek' (49 aligned documents, 45.7k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/el-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-English' (58 aligned documents, 56.3k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/en-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Spanish' (58 aligned documents, 53.7k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/es-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Estonian' (35 aligned documents, 33.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/et-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Persian' (0.3k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2013/fa-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Finnish' (41 aligned documents, 39.3k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-French' (40 aligned documents, 37.5k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/fr-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hebrew' (47 aligned documents, 44.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/he-id.xml.gz">ces</a></td>
<td></td>
<th>id</th>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Croatian' (44 aligned documents, 41.8k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/hr-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hungarian' (49 aligned documents, 48.7k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/hu-id.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Indonesian-Icelandic (sample file)" href="OpenSubtitles/v2013/id-is_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Italian (sample file)" href="OpenSubtitles/v2013/id-it_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Japanese (sample file)" href="OpenSubtitles/v2013/id-ja_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Lithuanian (sample file)" href="OpenSubtitles/v2013/id-lt_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Latvian (sample file)" href="OpenSubtitles/v2013/id-lv_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Macedonian (sample file)" href="OpenSubtitles/v2013/id-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Malay (sample file)" href="OpenSubtitles/v2013/id-ms_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/id-nb_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Dutch (sample file)" href="OpenSubtitles/v2013/id-nl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Polish (sample file)" href="OpenSubtitles/v2013/id-pl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles/v2013/id-pt_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles/v2013/id-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Romanian (sample file)" href="OpenSubtitles/v2013/id-ro_sample.html">view</a></td><th>id</th>
<td><a rel="nofollow" title="Indonesian-Russian (sample file)" href="OpenSubtitles/v2013/id-ru_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Sinhala (sample file)" href="OpenSubtitles/v2013/id-si_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Slovak (sample file)" href="OpenSubtitles/v2013/id-sk_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Slovenian (sample file)" href="OpenSubtitles/v2013/id-sl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Albanian (sample file)" href="OpenSubtitles/v2013/id-sq_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Serbian (sample file)" href="OpenSubtitles/v2013/id-sr_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Swedish (sample file)" href="OpenSubtitles/v2013/id-sv_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Swahili (sample file)" href="OpenSubtitles/v2013/id-sw_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Thai (sample file)" href="OpenSubtitles/v2013/id-th_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Turkish (sample file)" href="OpenSubtitles/v2013/id-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Vietnamese (sample file)" href="OpenSubtitles/v2013/id-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Chinese (sample file)" href="OpenSubtitles/v2013/id-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Chinese (sample file)" href="OpenSubtitles/v2013/id-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/id.raw.tar.gz">id</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/is.tar.gz">is</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Arabic' (554 aligned documents, 0.6M links, 8.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (615 aligned documents, 0.8M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (94 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (3 aligned documents, 4.3k links, 70.4k tokens)" href="download.php?f=OpenSubtitles2013/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (671 aligned documents, 0.9M links, 11.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (499 aligned documents, 0.6M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2013/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (361 aligned documents, 0.5M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2013/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (720 aligned documents, 0.9M links, 12.3M tokens)" href="download.php?f=OpenSubtitles2013/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (889 aligned documents, 1.2M links, 16.9M tokens)" href="download.php?f=OpenSubtitles2013/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (739 aligned documents, 0.9M links, 13.3M tokens)" href="download.php?f=OpenSubtitles2013/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (450 aligned documents, 0.6M links, 7.4M tokens)" href="download.php?f=OpenSubtitles2013/et-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Basque' (19 aligned documents, 23.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/eu-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (662 aligned documents, 0.8M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2013/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (629 aligned documents, 0.8M links, 11.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hebrew' (585 aligned documents, 0.7M links, 10.0M tokens)" href="download.php?f=OpenSubtitles2013/he-is.xml.gz">ces</a></td>
<td></td>
<th>is</th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (633 aligned documents, 0.8M links, 10.6M tokens)" href="download.php?f=OpenSubtitles2013/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (630 aligned documents, 0.8M links, 10.3M tokens)" href="download.php?f=OpenSubtitles2013/hu-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Indonesian' (8 aligned documents, 10.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/id-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="OpenSubtitles/v2013/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Japanese (sample file)" href="OpenSubtitles/v2013/is-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Kazakh (sample file)" href="OpenSubtitles/v2013/is-kk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Korean (sample file)" href="OpenSubtitles/v2013/is-ko_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="OpenSubtitles/v2013/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="OpenSubtitles/v2013/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="OpenSubtitles/v2013/is-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Malay (sample file)" href="OpenSubtitles/v2013/is-ms_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/is-nb_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="OpenSubtitles/v2013/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="OpenSubtitles/v2013/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles/v2013/is-pt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles/v2013/is-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="OpenSubtitles/v2013/is-ro_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="OpenSubtitles/v2013/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="OpenSubtitles/v2013/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="OpenSubtitles/v2013/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="OpenSubtitles/v2013/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="OpenSubtitles/v2013/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Serbian (sample file)" href="OpenSubtitles/v2013/is-sr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="OpenSubtitles/v2013/is-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Thai (sample file)" href="OpenSubtitles/v2013/is-th_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="OpenSubtitles/v2013/is-tr_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Ukrainian (sample file)" href="OpenSubtitles/v2013/is-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Vietnamese (sample file)" href="OpenSubtitles/v2013/is-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="OpenSubtitles/v2013/is-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="OpenSubtitles/v2013/is-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/is.raw.tar.gz">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/it.tar.gz">it</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (7,592 aligned documents, 5.2M links, 82.2M tokens)" href="download.php?f=OpenSubtitles2013/ar-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (9,616 aligned documents, 7.4M links, 111.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (1,130 aligned documents, 0.8M links, 12.3M tokens)" href="download.php?f=OpenSubtitles2013/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (141 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/ca-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (11,158 aligned documents, 8.5M links, 125.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (3,093 aligned documents, 2.7M links, 39.9M tokens)" href="download.php?f=OpenSubtitles2013/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (2,486 aligned documents, 2.4M links, 34.7M tokens)" href="download.php?f=OpenSubtitles2013/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (11,783 aligned documents, 8.9M links, 137.6M tokens)" href="download.php?f=OpenSubtitles2013/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (21,227 aligned documents, 17.0M links, 268.5M tokens)" href="download.php?f=OpenSubtitles2013/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (14,727 aligned documents, 11.3M links, 178.7M tokens)" href="download.php?f=OpenSubtitles2013/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (2,756 aligned documents, 2.4M links, 33.2M tokens)" href="download.php?f=OpenSubtitles2013/et-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Basque' (89 aligned documents, 98.2k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/eu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Persian' (2 aligned documents, 1.2k links, 22.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (4,221 aligned documents, 3.8M links, 50.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (12,590 aligned documents, 9.6M links, 151.8M tokens)" href="download.php?f=OpenSubtitles2013/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hebrew' (8,808 aligned documents, 6.1M links, 98.9M tokens)" href="download.php?f=OpenSubtitles2013/he-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hindi' (2 aligned documents, 0.5k links, 10.0k tokens)" href="download.php?f=OpenSubtitles2013/hi-it.xml.gz">ces</a></td>
<th>it</th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (8,947 aligned documents, 6.9M links, 100.7M tokens)" href="download.php?f=OpenSubtitles2013/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (11,832 aligned documents, 8.9M links, 127.4M tokens)" href="download.php?f=OpenSubtitles2013/hu-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Indonesian' (46 aligned documents, 41.3k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/id-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (403 aligned documents, 0.5M links, 7.3M tokens)" href="download.php?f=OpenSubtitles2013/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Japanese (sample file)" href="OpenSubtitles/v2013/it-ja_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Kazakh (sample file)" href="OpenSubtitles/v2013/it-kk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="OpenSubtitles/v2013/it-ko_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="OpenSubtitles/v2013/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="OpenSubtitles/v2013/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="OpenSubtitles/v2013/it-mk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Malayalam (sample file)" href="OpenSubtitles/v2013/it-ml_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Malay (sample file)" href="OpenSubtitles/v2013/it-ms_sample.html">view</a></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="OpenSubtitles/v2013/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="OpenSubtitles/v2013/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles/v2013/it-pt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles/v2013/it-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="OpenSubtitles/v2013/it-ro_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Russian (sample file)" href="OpenSubtitles/v2013/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="OpenSubtitles/v2013/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="OpenSubtitles/v2013/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="OpenSubtitles/v2013/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="OpenSubtitles/v2013/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Serbian (sample file)" href="OpenSubtitles/v2013/it-sr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="OpenSubtitles/v2013/it-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Thai (sample file)" href="OpenSubtitles/v2013/it-th_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Turkish (sample file)" href="OpenSubtitles/v2013/it-tr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="OpenSubtitles/v2013/it-uk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Urdu (sample file)" href="OpenSubtitles/v2013/it-ur_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Vietnamese (sample file)" href="OpenSubtitles/v2013/it-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="OpenSubtitles/v2013/it-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="OpenSubtitles/v2013/it-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ja.tar.gz">ja</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (420 aligned documents, 0.3M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (408 aligned documents, 0.3M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bosnian' (46 aligned documents, 36.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/bs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (34 aligned documents, 24.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ca-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (442 aligned documents, 0.4M links, 2.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (254 aligned documents, 0.2M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (214 aligned documents, 0.1M links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (525 aligned documents, 0.4M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2013/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (593 aligned documents, 0.4M links, 4.2M tokens)" href="download.php?f=OpenSubtitles2013/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (549 aligned documents, 0.4M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (244 aligned documents, 0.2M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/et-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Basque' (17 aligned documents, 17.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/eu-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (208 aligned documents, 0.2M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (476 aligned documents, 0.3M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hebrew' (428 aligned documents, 0.4M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2013/he-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hindi' (0.7k links, 9.8k tokens)" href="download.php?f=OpenSubtitles2013/hi-ja.xml.gz">ces</a></td>
<th>ja</th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (394 aligned documents, 0.3M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (442 aligned documents, 0.3M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/hu-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Indonesian' (6 aligned documents, 6.6k links, 50.6k tokens)" href="download.php?f=OpenSubtitles2013/id-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Icelandic' (21 aligned documents, 26.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/is-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (392 aligned documents, 0.3M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2013/it-ja.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Japanese-Korean (sample file)" href="OpenSubtitles/v2013/ja-ko_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="OpenSubtitles/v2013/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="OpenSubtitles/v2013/ja-lv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Macedonian (sample file)" href="OpenSubtitles/v2013/ja-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Malay (sample file)" href="OpenSubtitles/v2013/ja-ms_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="OpenSubtitles/v2013/ja-nl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="OpenSubtitles/v2013/ja-pl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles/v2013/ja-pt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles/v2013/ja-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="OpenSubtitles/v2013/ja-ro_sample.html">view</a></td><th>ja</th>
<td><a rel="nofollow" title="Japanese-Russian (sample file)" href="OpenSubtitles/v2013/ja-ru_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Sinhala (sample file)" href="OpenSubtitles/v2013/ja-si_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="OpenSubtitles/v2013/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="OpenSubtitles/v2013/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="OpenSubtitles/v2013/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="OpenSubtitles/v2013/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="OpenSubtitles/v2013/ja-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Tamil (sample file)" href="OpenSubtitles/v2013/ja-ta_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Telugu (sample file)" href="OpenSubtitles/v2013/ja-te_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Thai (sample file)" href="OpenSubtitles/v2013/ja-th_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="OpenSubtitles/v2013/ja-tr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ukrainian (sample file)" href="OpenSubtitles/v2013/ja-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Vietnamese (sample file)" href="OpenSubtitles/v2013/ja-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="OpenSubtitles/v2013/ja-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="OpenSubtitles/v2013/ja-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ja.raw.tar.gz">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ka.tar.gz">ka</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Persian' (0.2k links, 9.1k tokens)" href="download.php?f=OpenSubtitles2013/fa-ka.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/kk.tar.gz">kk</a></th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Bulgarian' (1.2k links, 14.4k tokens)" href="download.php?f=OpenSubtitles2013/bg-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Danish' (1.3k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2013/da-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-German' (2 aligned documents, 2.8k links, 34.5k tokens)" href="download.php?f=OpenSubtitles2013/de-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Greek' (1.1k links, 12.6k tokens)" href="download.php?f=OpenSubtitles2013/el-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (1.3k links, 16.6k tokens)" href="download.php?f=OpenSubtitles2013/en-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Spanish' (2 aligned documents, 2.4k links, 30.8k tokens)" href="download.php?f=OpenSubtitles2013/es-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Finnish' (1.3k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2013/fi-kk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Hebrew' (1.0k links, 14.3k tokens)" href="download.php?f=OpenSubtitles2013/he-kk.xml.gz">ces</a></td>
<td></td>
<th>kk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Hungarian' (1.3k links, 14.7k tokens)" href="download.php?f=OpenSubtitles2013/hu-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Icelandic' (1.3k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2013/is-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Italian' (1.2k links, 15.4k tokens)" href="download.php?f=OpenSubtitles2013/it-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/kk-nb_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Kazakh-Polish (sample file)" href="OpenSubtitles/v2013/kk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Portuguese (sample file)" href="OpenSubtitles/v2013/kk-pt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Kazakh-Romanian (sample file)" href="OpenSubtitles/v2013/kk-ro_sample.html">view</a></td><th>kk</th>
<td><a rel="nofollow" title="Kazakh-Russian (sample file)" href="OpenSubtitles/v2013/kk-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Kazakh-Slovak (sample file)" href="OpenSubtitles/v2013/kk-sk_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Swedish (sample file)" href="OpenSubtitles/v2013/kk-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Turkish (sample file)" href="OpenSubtitles/v2013/kk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Kazakh-Ukrainian (sample file)" href="OpenSubtitles/v2013/kk-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/kk.raw.tar.gz">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ko.tar.gz">ko</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Arabic' (22 aligned documents, 17.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ar-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (17 aligned documents, 14.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Catalan' (0.8k links, 11.6k tokens)" href="download.php?f=OpenSubtitles2013/ca-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (19 aligned documents, 15.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/cs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Danish' (10 aligned documents, 8.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/da-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (8 aligned documents, 9.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (24 aligned documents, 20.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (28 aligned documents, 28.1k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/en-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (18 aligned documents, 14.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/es-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Estonian' (9 aligned documents, 7.9k links, 92.7k tokens)" href="download.php?f=OpenSubtitles2013/et-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Basque' (1.5k links, 19.3k tokens)" href="download.php?f=OpenSubtitles2013/eu-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (11 aligned documents, 10.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (15 aligned documents, 11.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/fr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hebrew' (16 aligned documents, 13.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/he-ko.xml.gz">ces</a></td>
<td></td>
<th>ko</th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (17 aligned documents, 13.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (18 aligned documents, 15.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/hu-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Icelandic' (0.8k links, 10.4k tokens)" href="download.php?f=OpenSubtitles2013/is-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (11 aligned documents, 9.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Japanese' (5 aligned documents, 5.1k links, 31.4k tokens)" href="download.php?f=OpenSubtitles2013/ja-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Korean-Lithuanian (sample file)" href="OpenSubtitles/v2013/ko-lt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Macedonian (sample file)" href="OpenSubtitles/v2013/ko-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Malay (sample file)" href="OpenSubtitles/v2013/ko-ms_sample.html">view</a></td><td><a rel="nofollow" title="Korean-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/ko-nb_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="OpenSubtitles/v2013/ko-nl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="OpenSubtitles/v2013/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles/v2013/ko-pt_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles/v2013/ko-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="OpenSubtitles/v2013/ko-ro_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Russian (sample file)" href="OpenSubtitles/v2013/ko-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Slovak (sample file)" href="OpenSubtitles/v2013/ko-sk_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="OpenSubtitles/v2013/ko-sl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Albanian (sample file)" href="OpenSubtitles/v2013/ko-sq_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Serbian (sample file)" href="OpenSubtitles/v2013/ko-sr_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Swedish (sample file)" href="OpenSubtitles/v2013/ko-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Thai (sample file)" href="OpenSubtitles/v2013/ko-th_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Turkish (sample file)" href="OpenSubtitles/v2013/ko-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Korean-Vietnamese (sample file)" href="OpenSubtitles/v2013/ko-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="OpenSubtitles/v2013/ko-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Chinese (sample file)" href="OpenSubtitles/v2013/ko-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ko.raw.tar.gz">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/lt.tar.gz">lt</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (334 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2013/ar-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (336 aligned documents, 0.4M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (47 aligned documents, 57.1k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (7 aligned documents, 7.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ca-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (361 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (246 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2013/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (162 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2013/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (431 aligned documents, 0.5M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2013/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (504 aligned documents, 0.7M links, 8.9M tokens)" href="download.php?f=OpenSubtitles2013/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (431 aligned documents, 0.5M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2013/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (253 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2013/et-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Basque' (15 aligned documents, 17.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/eu-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (314 aligned documents, 0.4M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2013/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (314 aligned documents, 0.4M links, 5.3M tokens)" href="download.php?f=OpenSubtitles2013/fr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hebrew' (355 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/he-lt.xml.gz">ces</a></td>
<td></td>
<th>lt</th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (346 aligned documents, 0.4M links, 5.3M tokens)" href="download.php?f=OpenSubtitles2013/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (334 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2013/hu-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Indonesian' (6 aligned documents, 8.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/id-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (106 aligned documents, 0.2M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (207 aligned documents, 0.3M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (40 aligned documents, 44.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ja-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Korean' (1.1k links, 14.3k tokens)" href="download.php?f=OpenSubtitles2013/ko-lt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="OpenSubtitles/v2013/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="OpenSubtitles/v2013/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malayalam (sample file)" href="OpenSubtitles/v2013/lt-ml_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malay (sample file)" href="OpenSubtitles/v2013/lt-ms_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/lt-nb_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="OpenSubtitles/v2013/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="OpenSubtitles/v2013/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles/v2013/lt-pt_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles/v2013/lt-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="OpenSubtitles/v2013/lt-ro_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="OpenSubtitles/v2013/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="OpenSubtitles/v2013/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="OpenSubtitles/v2013/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="OpenSubtitles/v2013/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="OpenSubtitles/v2013/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Serbian (sample file)" href="OpenSubtitles/v2013/lt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="OpenSubtitles/v2013/lt-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Thai (sample file)" href="OpenSubtitles/v2013/lt-th_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="OpenSubtitles/v2013/lt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Ukrainian (sample file)" href="OpenSubtitles/v2013/lt-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Vietnamese (sample file)" href="OpenSubtitles/v2013/lt-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="OpenSubtitles/v2013/lt-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="OpenSubtitles/v2013/lt-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/lt.raw.tar.gz">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/lv.tar.gz">lv</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (177 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2013/ar-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (145 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (12 aligned documents, 15.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (1.6k links, 26.1k tokens)" href="download.php?f=OpenSubtitles2013/ca-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (185 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2013/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (91 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (70 aligned documents, 89.5k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (207 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2013/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (241 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2013/en-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (189 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2013/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (85 aligned documents, 0.1M links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/et-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Basque' (3 aligned documents, 2.6k links, 30.8k tokens)" href="download.php?f=OpenSubtitles2013/eu-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (106 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (152 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/fr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hebrew' (186 aligned documents, 0.2M links, 2.7M tokens)" href="download.php?f=OpenSubtitles2013/he-lv.xml.gz">ces</a></td>
<td></td>
<th>lv</th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (166 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2013/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (155 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2013/hu-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Indonesian' (5 aligned documents, 5.4k links, 82.9k tokens)" href="download.php?f=OpenSubtitles2013/id-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (39 aligned documents, 51.9k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (118 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (14 aligned documents, 15.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ja-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (32 aligned documents, 44.4k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="OpenSubtitles/v2013/lv-mk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Malay (sample file)" href="OpenSubtitles/v2013/lv-ms_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/lv-nb_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="OpenSubtitles/v2013/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="OpenSubtitles/v2013/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles/v2013/lv-pt_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles/v2013/lv-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="OpenSubtitles/v2013/lv-ro_sample.html">view</a></td><th>lv</th>
<td><a rel="nofollow" title="Latvian-Russian (sample file)" href="OpenSubtitles/v2013/lv-ru_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Sinhala (sample file)" href="OpenSubtitles/v2013/lv-si_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="OpenSubtitles/v2013/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="OpenSubtitles/v2013/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="OpenSubtitles/v2013/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Serbian (sample file)" href="OpenSubtitles/v2013/lv-sr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="OpenSubtitles/v2013/lv-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Thai (sample file)" href="OpenSubtitles/v2013/lv-th_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="OpenSubtitles/v2013/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="OpenSubtitles/v2013/lv-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Vietnamese (sample file)" href="OpenSubtitles/v2013/lv-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="OpenSubtitles/v2013/lv-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="OpenSubtitles/v2013/lv-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/lv.raw.tar.gz">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/mk.tar.gz">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Afrikaans' (0.7k links, 13.8k tokens)" href="download.php?f=OpenSubtitles2013/af-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Arabic' (628 aligned documents, 0.5M links, 7.8M tokens)" href="download.php?f=OpenSubtitles2013/ar-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (583 aligned documents, 0.6M links, 7.8M tokens)" href="download.php?f=OpenSubtitles2013/bg-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (111 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/bs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Catalan' (10 aligned documents, 7.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ca-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (624 aligned documents, 0.6M links, 8.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (416 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2013/da-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-German' (289 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2013/de-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (864 aligned documents, 0.8M links, 11.5M tokens)" href="download.php?f=OpenSubtitles2013/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (922 aligned documents, 1.0M links, 14.4M tokens)" href="download.php?f=OpenSubtitles2013/en-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Spanish' (811 aligned documents, 0.8M links, 11.4M tokens)" href="download.php?f=OpenSubtitles2013/es-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (416 aligned documents, 0.4M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2013/et-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Basque' (9 aligned documents, 7.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/eu-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (492 aligned documents, 0.5M links, 6.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-French' (620 aligned documents, 0.6M links, 8.6M tokens)" href="download.php?f=OpenSubtitles2013/fr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hebrew' (638 aligned documents, 0.6M links, 8.4M tokens)" href="download.php?f=OpenSubtitles2013/he-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hindi' (0.4k links, 7.2k tokens)" href="download.php?f=OpenSubtitles2013/hi-mk.xml.gz">ces</a></td>
<th>mk</th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (697 aligned documents, 0.7M links, 8.8M tokens)" href="download.php?f=OpenSubtitles2013/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (596 aligned documents, 0.6M links, 7.7M tokens)" href="download.php?f=OpenSubtitles2013/hu-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Indonesian' (5 aligned documents, 5.6k links, 72.3k tokens)" href="download.php?f=OpenSubtitles2013/id-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (110 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Italian' (429 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2013/it-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Japanese' (46 aligned documents, 41.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ja-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Korean' (3 aligned documents, 1.7k links, 25.2k tokens)" href="download.php?f=OpenSubtitles2013/ko-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (67 aligned documents, 80.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (25 aligned documents, 28.8k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Malayalam (sample file)" href="OpenSubtitles/v2013/mk-ml_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Malay (sample file)" href="OpenSubtitles/v2013/mk-ms_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/mk-nb_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="OpenSubtitles/v2013/mk-nl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="OpenSubtitles/v2013/mk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles/v2013/mk-pt_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles/v2013/mk-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="OpenSubtitles/v2013/mk-ro_sample.html">view</a></td><th>mk</th>
<td><a rel="nofollow" title="Macedonian-Russian (sample file)" href="OpenSubtitles/v2013/mk-ru_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Sinhala (sample file)" href="OpenSubtitles/v2013/mk-si_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="OpenSubtitles/v2013/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="OpenSubtitles/v2013/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="OpenSubtitles/v2013/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Serbian (sample file)" href="OpenSubtitles/v2013/mk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="OpenSubtitles/v2013/mk-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Macedonian-Thai (sample file)" href="OpenSubtitles/v2013/mk-th_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="OpenSubtitles/v2013/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="OpenSubtitles/v2013/mk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Urdu (sample file)" href="OpenSubtitles/v2013/mk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Vietnamese (sample file)" href="OpenSubtitles/v2013/mk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="OpenSubtitles/v2013/mk-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="OpenSubtitles/v2013/mk-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/mk.raw.tar.gz">mk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ml.tar.gz">ml</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Arabic' (4 aligned documents, 1.3k links, 17.0k tokens)" href="download.php?f=OpenSubtitles2013/ar-ml.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Bulgarian' (3 aligned documents, 1.1k links, 16.8k tokens)" href="download.php?f=OpenSubtitles2013/bg-ml.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Bosnian' (0.4k links, 4.5k tokens)" href="download.php?f=OpenSubtitles2013/bs-ml.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Czech' (3 aligned documents, 0.7k links, 9.0k tokens)" href="download.php?f=OpenSubtitles2013/cs-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Danish' (2 aligned documents, 1.0k links, 16.3k tokens)" href="download.php?f=OpenSubtitles2013/da-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-German' (0.6k links, 11.4k tokens)" href="download.php?f=OpenSubtitles2013/de-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Greek' (5 aligned documents, 1.4k links, 25.0k tokens)" href="download.php?f=OpenSubtitles2013/el-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (4 aligned documents, 1.1k links, 21.2k tokens)" href="download.php?f=OpenSubtitles2013/en-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Spanish' (5 aligned documents, 1.5k links, 26.0k tokens)" href="download.php?f=OpenSubtitles2013/es-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Estonian' (2 aligned documents, 0.9k links, 15.1k tokens)" href="download.php?f=OpenSubtitles2013/et-ml.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Persian' (6 aligned documents, 1.2k links, 45.0k tokens)" href="download.php?f=OpenSubtitles2013/fa-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Finnish' (2 aligned documents, 0.9k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2013/fi-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-French' (2 aligned documents, 0.9k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/fr-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Hebrew' (3 aligned documents, 1.6k links, 24.7k tokens)" href="download.php?f=OpenSubtitles2013/he-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Hindi' (2 aligned documents, 0.3k links, 9.7k tokens)" href="download.php?f=OpenSubtitles2013/hi-ml.xml.gz">ces</a></td>
<th>ml</th>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Croatian' (5 aligned documents, 1.4k links, 23.8k tokens)" href="download.php?f=OpenSubtitles2013/hr-ml.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Hungarian' (3 aligned documents, 1.1k links, 16.6k tokens)" href="download.php?f=OpenSubtitles2013/hu-ml.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Italian' (2 aligned documents, 0.9k links, 18.7k tokens)" href="download.php?f=OpenSubtitles2013/it-ml.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Lithuanian' (0.4k links, 4.3k tokens)" href="download.php?f=OpenSubtitles2013/lt-ml.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Macedonian' (0.4k links, 4.6k tokens)" href="download.php?f=OpenSubtitles2013/mk-ml.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malayalam-Malay (sample file)" href="OpenSubtitles/v2013/ml-ms_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malayalam-Dutch (sample file)" href="OpenSubtitles/v2013/ml-nl_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Polish (sample file)" href="OpenSubtitles/v2013/ml-pl_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Portuguese (sample file)" href="OpenSubtitles/v2013/ml-pt_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Portuguese (sample file)" href="OpenSubtitles/v2013/ml-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Romanian (sample file)" href="OpenSubtitles/v2013/ml-ro_sample.html">view</a></td><th>ml</th>
<td><a rel="nofollow" title="Malayalam-Russian (sample file)" href="OpenSubtitles/v2013/ml-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malayalam-Slovak (sample file)" href="OpenSubtitles/v2013/ml-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Slovenian (sample file)" href="OpenSubtitles/v2013/ml-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Albanian (sample file)" href="OpenSubtitles/v2013/ml-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Serbian (sample file)" href="OpenSubtitles/v2013/ml-sr_sample.html">view</a></td><td><a rel="nofollow" title="Malayalam-Swedish (sample file)" href="OpenSubtitles/v2013/ml-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Malayalam-Turkish (sample file)" href="OpenSubtitles/v2013/ml-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Malayalam-Vietnamese (sample file)" href="OpenSubtitles/v2013/ml-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malayalam-Chinese (sample file)" href="OpenSubtitles/v2013/ml-zh_cn_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ml.raw.tar.gz">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ms.tar.gz">ms</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Arabic' (1,489 aligned documents, 1.4M links, 20.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bulgarian' (1,545 aligned documents, 1.7M links, 22.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bosnian' (244 aligned documents, 0.3M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Catalan' (37 aligned documents, 28.6k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/ca-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Czech' (1,555 aligned documents, 1.7M links, 22.6M tokens)" href="download.php?f=OpenSubtitles2013/cs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Danish' (1,060 aligned documents, 1.2M links, 16.8M tokens)" href="download.php?f=OpenSubtitles2013/da-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-German' (663 aligned documents, 0.8M links, 10.5M tokens)" href="download.php?f=OpenSubtitles2013/de-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Greek' (1,857 aligned documents, 1.9M links, 27.1M tokens)" href="download.php?f=OpenSubtitles2013/el-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (2,575 aligned documents, 3.0M links, 42.5M tokens)" href="download.php?f=OpenSubtitles2013/en-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Spanish' (1,957 aligned documents, 2.1M links, 30.0M tokens)" href="download.php?f=OpenSubtitles2013/es-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Estonian' (1,031 aligned documents, 1.1M links, 15.0M tokens)" href="download.php?f=OpenSubtitles2013/et-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Basque' (55 aligned documents, 60.1k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/eu-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Persian' (9 aligned documents, 2.9k links, 92.6k tokens)" href="download.php?f=OpenSubtitles2013/fa-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Finnish' (1,163 aligned documents, 1.3M links, 16.1M tokens)" href="download.php?f=OpenSubtitles2013/fi-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-French' (1,440 aligned documents, 1.6M links, 22.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hebrew' (1,460 aligned documents, 1.5M links, 21.5M tokens)" href="download.php?f=OpenSubtitles2013/he-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hindi' (0.3k links, 7.1k tokens)" href="download.php?f=OpenSubtitles2013/hi-ms.xml.gz">ces</a></td>
<th>ms</th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Croatian' (1,535 aligned documents, 1.7M links, 22.6M tokens)" href="download.php?f=OpenSubtitles2013/hr-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hungarian' (1,506 aligned documents, 1.6M links, 21.2M tokens)" href="download.php?f=OpenSubtitles2013/hu-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Indonesian' (29 aligned documents, 30.2k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/id-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Icelandic' (267 aligned documents, 0.4M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2013/is-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Italian' (970 aligned documents, 1.0M links, 14.6M tokens)" href="download.php?f=OpenSubtitles2013/it-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Japanese' (155 aligned documents, 0.1M links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/ja-ms.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Korean' (11 aligned documents, 11.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Lithuanian' (166 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2013/lt-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Latvian' (59 aligned documents, 77.1k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/lv-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Macedonian' (268 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2013/mk-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Malayalam' (2 aligned documents, 0.9k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2013/ml-ms.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malay-BokmÃ¥l, Norwegian (sample file)" href="OpenSubtitles/v2013/ms-nb_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Dutch (sample file)" href="OpenSubtitles/v2013/ms-nl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Polish (sample file)" href="OpenSubtitles/v2013/ms-pl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles/v2013/ms-pt_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles/v2013/ms-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Romanian (sample file)" href="OpenSubtitles/v2013/ms-ro_sample.html">view</a></td><th>ms</th>
<td><a rel="nofollow" title="Malay-Russian (sample file)" href="OpenSubtitles/v2013/ms-ru_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Sinhala (sample file)" href="OpenSubtitles/v2013/ms-si_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovak (sample file)" href="OpenSubtitles/v2013/ms-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovenian (sample file)" href="OpenSubtitles/v2013/ms-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Albanian (sample file)" href="OpenSubtitles/v2013/ms-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Serbian (sample file)" href="OpenSubtitles/v2013/ms-sr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Swedish (sample file)" href="OpenSubtitles/v2013/ms-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Malay-Thai (sample file)" href="OpenSubtitles/v2013/ms-th_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Turkish (sample file)" href="OpenSubtitles/v2013/ms-tr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Ukrainian (sample file)" href="OpenSubtitles/v2013/ms-uk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Urdu (sample file)" href="OpenSubtitles/v2013/ms-ur_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Vietnamese (sample file)" href="OpenSubtitles/v2013/ms-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles/v2013/ms-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles/v2013/ms-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ms.raw.tar.gz">ms</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/nb.tar.gz">nb</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Arabic' (1,626 aligned documents, 1.4M links, 21.0M tokens)" href="download.php?f=OpenSubtitles2013/ar-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bulgarian' (1,700 aligned documents, 1.7M links, 23.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bengali' (1.5k links, 22.4k tokens)" href="download.php?f=OpenSubtitles2013/bn-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Bosnian' (220 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/bs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Catalan' (48 aligned documents, 34.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/ca-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (1,941 aligned documents, 1.9M links, 26.2M tokens)" href="download.php?f=OpenSubtitles2013/cs-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Danish' (2,172 aligned documents, 2.0M links, 27.0M tokens)" href="download.php?f=OpenSubtitles2013/da-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (981 aligned documents, 1.0M links, 14.5M tokens)" href="download.php?f=OpenSubtitles2013/de-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (2,325 aligned documents, 2.2M links, 32.1M tokens)" href="download.php?f=OpenSubtitles2013/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (3,176 aligned documents, 3.4M links, 49.4M tokens)" href="download.php?f=OpenSubtitles2013/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (2,496 aligned documents, 2.4M links, 35.9M tokens)" href="download.php?f=OpenSubtitles2013/es-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Estonian' (1,011 aligned documents, 1.0M links, 13.7M tokens)" href="download.php?f=OpenSubtitles2013/et-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Basque' (34 aligned documents, 41.3k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/eu-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Persian' (1.0k links, 18.3k tokens)" href="download.php?f=OpenSubtitles2013/fa-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Finnish' (2,309 aligned documents, 2.2M links, 27.1M tokens)" href="download.php?f=OpenSubtitles2013/fi-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (1,894 aligned documents, 1.8M links, 26.6M tokens)" href="download.php?f=OpenSubtitles2013/fr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hebrew' (1,664 aligned documents, 1.5M links, 23.1M tokens)" href="download.php?f=OpenSubtitles2013/he-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hindi' (0.4k links, 7.7k tokens)" href="download.php?f=OpenSubtitles2013/hi-nb.xml.gz">ces</a></td>
<th>nb</th>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Croatian' (1,807 aligned documents, 1.8M links, 24.1M tokens)" href="download.php?f=OpenSubtitles2013/hr-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Hungarian' (1,845 aligned documents, 1.8M links, 23.6M tokens)" href="download.php?f=OpenSubtitles2013/hu-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Indonesian' (13 aligned documents, 15.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/id-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Icelandic' (307 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2013/is-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (1,241 aligned documents, 1.2M links, 17.0M tokens)" href="download.php?f=OpenSubtitles2013/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Japanese' (117 aligned documents, 0.1M links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ja-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Kazakh' (1.2k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2013/kk-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Korean' (6 aligned documents, 6.7k links, 99.9k tokens)" href="download.php?f=OpenSubtitles2013/ko-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Lithuanian' (137 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2013/lt-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Latvian' (56 aligned documents, 71.2k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/lv-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Macedonian' (238 aligned documents, 0.2M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-nb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Malay' (526 aligned documents, 0.6M links, 8.6M tokens)" href="download.php?f=OpenSubtitles2013/ms-nb.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="OpenSubtitles/v2013/nb-nl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Polish (sample file)" href="OpenSubtitles/v2013/nb-pl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="OpenSubtitles/v2013/nb-pt_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="OpenSubtitles/v2013/nb-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Romanian (sample file)" href="OpenSubtitles/v2013/nb-ro_sample.html">view</a></td><th>nb</th>
<td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="OpenSubtitles/v2013/nb-ru_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Sinhala (sample file)" href="OpenSubtitles/v2013/nb-si_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovak (sample file)" href="OpenSubtitles/v2013/nb-sk_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Slovenian (sample file)" href="OpenSubtitles/v2013/nb-sl_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Albanian (sample file)" href="OpenSubtitles/v2013/nb-sq_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Serbian (sample file)" href="OpenSubtitles/v2013/nb-sr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="OpenSubtitles/v2013/nb-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Tamil (sample file)" href="OpenSubtitles/v2013/nb-ta_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Telugu (sample file)" href="OpenSubtitles/v2013/nb-te_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Thai (sample file)" href="OpenSubtitles/v2013/nb-th_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Turkish (sample file)" href="OpenSubtitles/v2013/nb-tr_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Ukrainian (sample file)" href="OpenSubtitles/v2013/nb-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Vietnamese (sample file)" href="OpenSubtitles/v2013/nb-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="OpenSubtitles/v2013/nb-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Chinese (sample file)" href="OpenSubtitles/v2013/nb-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/nb.raw.tar.gz">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/nl.tar.gz">nl</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (9,574 aligned documents, 6.8M links, 104.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (11,437 aligned documents, 9.4M links, 138.7M tokens)" href="download.php?f=OpenSubtitles2013/bg-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bengali' (1.7k links, 22.7k tokens)" href="download.php?f=OpenSubtitles2013/bn-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bosnian' (1,329 aligned documents, 1.1M links, 15.6M tokens)" href="download.php?f=OpenSubtitles2013/bs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Catalan' (132 aligned documents, 91.9k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/ca-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (12,464 aligned documents, 10.1M links, 146.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (4,692 aligned documents, 4.1M links, 61.5M tokens)" href="download.php?f=OpenSubtitles2013/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (3,149 aligned documents, 3.0M links, 43.9M tokens)" href="download.php?f=OpenSubtitles2013/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (14,935 aligned documents, 11.8M links, 182.1M tokens)" href="download.php?f=OpenSubtitles2013/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (20,852 aligned documents, 18.9M links, 292.1M tokens)" href="download.php?f=OpenSubtitles2013/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (16,958 aligned documents, 13.8M links, 215.0M tokens)" href="download.php?f=OpenSubtitles2013/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (4,342 aligned documents, 3.9M links, 53.6M tokens)" href="download.php?f=OpenSubtitles2013/et-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Basque' (123 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/eu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Persian' (8 aligned documents, 3.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/fa-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (6,858 aligned documents, 6.2M links, 82.0M tokens)" href="download.php?f=OpenSubtitles2013/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (13,910 aligned documents, 11.0M links, 173.2M tokens)" href="download.php?f=OpenSubtitles2013/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hebrew' (11,165 aligned documents, 8.2M links, 130.4M tokens)" href="download.php?f=OpenSubtitles2013/he-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hindi' (2 aligned documents, 0.8k links, 16.2k tokens)" href="download.php?f=OpenSubtitles2013/hi-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (11,300 aligned documents, 9.2M links, 133.0M tokens)" href="download.php?f=OpenSubtitles2013/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (12,725 aligned documents, 10.1M links, 142.4M tokens)" href="download.php?f=OpenSubtitles2013/hu-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Indonesian' (47 aligned documents, 46.5k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/id-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (645 aligned documents, 0.8M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2013/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (9,623 aligned documents, 7.3M links, 114.5M tokens)" href="download.php?f=OpenSubtitles2013/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (464 aligned documents, 0.3M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/ja-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (15 aligned documents, 12.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ko-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (356 aligned documents, 0.4M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2013/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (181 aligned documents, 0.2M links, 2.7M tokens)" href="download.php?f=OpenSubtitles2013/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Macedonian' (616 aligned documents, 0.6M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2013/mk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Malayalam' (2 aligned documents, 0.9k links, 15.1k tokens)" href="download.php?f=OpenSubtitles2013/ml-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Malay' (1,597 aligned documents, 1.7M links, 23.5M tokens)" href="download.php?f=OpenSubtitles2013/ms-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (1,932 aligned documents, 1.8M links, 26.2M tokens)" href="download.php?f=OpenSubtitles2013/nb-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Polish (sample file)" href="OpenSubtitles/v2013/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles/v2013/nl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles/v2013/nl-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="OpenSubtitles/v2013/nl-ro_sample.html">view</a></td><th>nl</th>
<td><a rel="nofollow" title="Dutch-Russian (sample file)" href="OpenSubtitles/v2013/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="OpenSubtitles/v2013/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="OpenSubtitles/v2013/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="OpenSubtitles/v2013/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Albanian (sample file)" href="OpenSubtitles/v2013/nl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Serbian (sample file)" href="OpenSubtitles/v2013/nl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="OpenSubtitles/v2013/nl-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Tamil (sample file)" href="OpenSubtitles/v2013/nl-ta_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Telugu (sample file)" href="OpenSubtitles/v2013/nl-te_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Thai (sample file)" href="OpenSubtitles/v2013/nl-th_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Turkish (sample file)" href="OpenSubtitles/v2013/nl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="OpenSubtitles/v2013/nl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Urdu (sample file)" href="OpenSubtitles/v2013/nl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Vietnamese (sample file)" href="OpenSubtitles/v2013/nl-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles/v2013/nl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles/v2013/nl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pl.tar.gz">pl</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (5,045 aligned documents, 4.0M links, 56.6M tokens)" href="download.php?f=OpenSubtitles2013/ar-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (6,016 aligned documents, 5.5M links, 74.0M tokens)" href="download.php?f=OpenSubtitles2013/bg-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bengali' (1.5k links, 20.0k tokens)" href="download.php?f=OpenSubtitles2013/bn-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bosnian' (731 aligned documents, 0.7M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2013/bs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Catalan' (83 aligned documents, 59.4k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (6,493 aligned documents, 5.9M links, 77.9M tokens)" href="download.php?f=OpenSubtitles2013/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (2,649 aligned documents, 2.6M links, 35.4M tokens)" href="download.php?f=OpenSubtitles2013/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (2,352 aligned documents, 2.4M links, 33.1M tokens)" href="download.php?f=OpenSubtitles2013/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (8,157 aligned documents, 7.2M links, 100.8M tokens)" href="download.php?f=OpenSubtitles2013/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (10,573 aligned documents, 10.9M links, 154.5M tokens)" href="download.php?f=OpenSubtitles2013/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (8,806 aligned documents, 8.0M links, 114.1M tokens)" href="download.php?f=OpenSubtitles2013/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (2,540 aligned documents, 2.5M links, 31.8M tokens)" href="download.php?f=OpenSubtitles2013/et-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Basque' (90 aligned documents, 95.8k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/eu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Persian' (2 aligned documents, 1.2k links, 21.2k tokens)" href="download.php?f=OpenSubtitles2013/fa-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (3,992 aligned documents, 4.0M links, 48.8M tokens)" href="download.php?f=OpenSubtitles2013/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (6,794 aligned documents, 6.2M links, 87.3M tokens)" href="download.php?f=OpenSubtitles2013/fr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hebrew' (5,597 aligned documents, 4.6M links, 67.4M tokens)" href="download.php?f=OpenSubtitles2013/he-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hindi' (3 aligned documents, 1.4k links, 28.0k tokens)" href="download.php?f=OpenSubtitles2013/hi-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (5,745 aligned documents, 5.2M links, 68.8M tokens)" href="download.php?f=OpenSubtitles2013/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (6,299 aligned documents, 5.7M links, 72.7M tokens)" href="download.php?f=OpenSubtitles2013/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Armenian' (1.0k links, 14.5k tokens)" href="download.php?f=OpenSubtitles2013/hy-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Indonesian' (35 aligned documents, 35.4k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/id-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (564 aligned documents, 0.7M links, 9.1M tokens)" href="download.php?f=OpenSubtitles2013/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (4,381 aligned documents, 3.8M links, 53.0M tokens)" href="download.php?f=OpenSubtitles2013/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (271 aligned documents, 0.2M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/ja-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Kazakh' (1.2k links, 15.1k tokens)" href="download.php?f=OpenSubtitles2013/kk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (13 aligned documents, 11.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (273 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (129 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Macedonian' (486 aligned documents, 0.5M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Malayalam' (2 aligned documents, 0.5k links, 8.8k tokens)" href="download.php?f=OpenSubtitles2013/ml-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Malay' (1,170 aligned documents, 1.3M links, 17.2M tokens)" href="download.php?f=OpenSubtitles2013/ms-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-BokmÃ¥l, Norwegian' (1,290 aligned documents, 1.3M links, 17.5M tokens)" href="download.php?f=OpenSubtitles2013/nb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (6,123 aligned documents, 5.3M links, 74.5M tokens)" href="download.php?f=OpenSubtitles2013/nl-pl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles/v2013/pl-pt_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles/v2013/pl-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="OpenSubtitles/v2013/pl-ro_sample.html">view</a></td><th>pl</th>
<td><a rel="nofollow" title="Polish-Russian (sample file)" href="OpenSubtitles/v2013/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="OpenSubtitles/v2013/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="OpenSubtitles/v2013/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="OpenSubtitles/v2013/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Albanian (sample file)" href="OpenSubtitles/v2013/pl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Serbian (sample file)" href="OpenSubtitles/v2013/pl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="OpenSubtitles/v2013/pl-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Tamil (sample file)" href="OpenSubtitles/v2013/pl-ta_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Telugu (sample file)" href="OpenSubtitles/v2013/pl-te_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Thai (sample file)" href="OpenSubtitles/v2013/pl-th_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="OpenSubtitles/v2013/pl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="OpenSubtitles/v2013/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Urdu (sample file)" href="OpenSubtitles/v2013/pl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Vietnamese (sample file)" href="OpenSubtitles/v2013/pl-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles/v2013/pl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles/v2013/pl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pt.tar.gz">pt</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (9,879 aligned documents, 7.4M links, 112.6M tokens)" href="download.php?f=OpenSubtitles2013/ar-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Belarusian' (1.1k links, 7.1k tokens)" href="download.php?f=OpenSubtitles2013/be-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (11,910 aligned documents, 10.5M links, 150.7M tokens)" href="download.php?f=OpenSubtitles2013/bg-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bengali' (1.7k links, 24.0k tokens)" href="download.php?f=OpenSubtitles2013/bn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (1,551 aligned documents, 1.4M links, 19.0M tokens)" href="download.php?f=OpenSubtitles2013/bs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (142 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/ca-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (13,338 aligned documents, 11.6M links, 163.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (5,174 aligned documents, 5.0M links, 72.6M tokens)" href="download.php?f=OpenSubtitles2013/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (3,386 aligned documents, 3.5M links, 50.1M tokens)" href="download.php?f=OpenSubtitles2013/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (16,281 aligned documents, 13.5M links, 203.0M tokens)" href="download.php?f=OpenSubtitles2013/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (23,392 aligned documents, 22.4M links, 336.6M tokens)" href="download.php?f=OpenSubtitles2013/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (18,524 aligned documents, 16.1M links, 243.4M tokens)" href="download.php?f=OpenSubtitles2013/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (4,954 aligned documents, 4.7M links, 64.0M tokens)" href="download.php?f=OpenSubtitles2013/et-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Basque' (141 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2013/eu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (6 aligned documents, 2.8k links, 61.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (7,382 aligned documents, 7.2M links, 92.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (14,156 aligned documents, 12.2M links, 184.4M tokens)" href="download.php?f=OpenSubtitles2013/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (11,699 aligned documents, 9.0M links, 141.6M tokens)" href="download.php?f=OpenSubtitles2013/he-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hindi' (3 aligned documents, 1.6k links, 33.5k tokens)" href="download.php?f=OpenSubtitles2013/hi-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (12,265 aligned documents, 10.6M links, 149.1M tokens)" href="download.php?f=OpenSubtitles2013/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (13,173 aligned documents, 11.4M links, 155.8M tokens)" href="download.php?f=OpenSubtitles2013/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Armenian' (1.0k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/hy-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (51 aligned documents, 47.9k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/id-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (727 aligned documents, 1.0M links, 13.0M tokens)" href="download.php?f=OpenSubtitles2013/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (10,989 aligned documents, 8.8M links, 132.1M tokens)" href="download.php?f=OpenSubtitles2013/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (496 aligned documents, 0.4M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2013/ja-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Kazakh' (1.2k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/kk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (12 aligned documents, 11.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (427 aligned documents, 0.5M links, 6.8M tokens)" href="download.php?f=OpenSubtitles2013/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (192 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (762 aligned documents, 0.8M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2013/mk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malayalam' (4 aligned documents, 1.8k links, 31.7k tokens)" href="download.php?f=OpenSubtitles2013/ml-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (1,867 aligned documents, 2.1M links, 28.7M tokens)" href="download.php?f=OpenSubtitles2013/ms-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (2,178 aligned documents, 2.3M links, 31.9M tokens)" href="download.php?f=OpenSubtitles2013/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (13,818 aligned documents, 11.9M links, 177.2M tokens)" href="download.php?f=OpenSubtitles2013/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (7,112 aligned documents, 6.8M links, 93.6M tokens)" href="download.php?f=OpenSubtitles2013/pl-pt.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Portuguese (sample file)" href="OpenSubtitles/v2013/pt-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles/v2013/pt-ro_sample.html">view</a></td><th>pt</th>
<td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles/v2013/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles/v2013/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles/v2013/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles/v2013/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles/v2013/pt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="OpenSubtitles/v2013/pt-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles/v2013/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swahili (sample file)" href="OpenSubtitles/v2013/pt-sw_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Tamil (sample file)" href="OpenSubtitles/v2013/pt-ta_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Telugu (sample file)" href="OpenSubtitles/v2013/pt-te_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles/v2013/pt-th_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles/v2013/pt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles/v2013/pt-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Urdu (sample file)" href="OpenSubtitles/v2013/pt-ur_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles/v2013/pt-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2013/pt-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2013/pt-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pt_br.tar.gz">pt_br</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (12,414 aligned documents, 9.0M links, 135.5M tokens)" href="download.php?f=OpenSubtitles2013/ar-pt_br.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (16,565 aligned documents, 14.1M links, 201.3M tokens)" href="download.php?f=OpenSubtitles2013/bg-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bengali' (1.8k links, 25.4k tokens)" href="download.php?f=OpenSubtitles2013/bn-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (2,024 aligned documents, 1.7M links, 23.4M tokens)" href="download.php?f=OpenSubtitles2013/bs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (167 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (19,171 aligned documents, 15.8M links, 222.1M tokens)" href="download.php?f=OpenSubtitles2013/cs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (5,737 aligned documents, 5.5M links, 79.0M tokens)" href="download.php?f=OpenSubtitles2013/da-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (4,306 aligned documents, 4.4M links, 62.2M tokens)" href="download.php?f=OpenSubtitles2013/de-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (22,584 aligned documents, 18.2M links, 271.1M tokens)" href="download.php?f=OpenSubtitles2013/el-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (40,332 aligned documents, 37.1M links, 554.5M tokens)" href="download.php?f=OpenSubtitles2013/en-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (29,705 aligned documents, 25.2M links, 378.2M tokens)" href="download.php?f=OpenSubtitles2013/es-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (5,314 aligned documents, 5.0M links, 66.6M tokens)" href="download.php?f=OpenSubtitles2013/et-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Basque' (163 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2013/eu-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (6 aligned documents, 1.4k links, 41.9k tokens)" href="download.php?f=OpenSubtitles2013/fa-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (9,103 aligned documents, 8.5M links, 109.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (22,480 aligned documents, 18.5M links, 278.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (14,711 aligned documents, 10.9M links, 170.1M tokens)" href="download.php?f=OpenSubtitles2013/he-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hindi' (5 aligned documents, 2.3k links, 43.5k tokens)" href="download.php?f=OpenSubtitles2013/hi-pt_br.xml.gz">ces</a></td>
<th>pt_br</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (16,538 aligned documents, 13.7M links, 191.3M tokens)" href="download.php?f=OpenSubtitles2013/hr-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (20,082 aligned documents, 16.4M links, 223.0M tokens)" href="download.php?f=OpenSubtitles2013/hu-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Armenian' (1.1k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/hy-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (54 aligned documents, 50.9k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/id-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (756 aligned documents, 1.0M links, 13.5M tokens)" href="download.php?f=OpenSubtitles2013/is-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (19,573 aligned documents, 14.7M links, 220.5M tokens)" href="download.php?f=OpenSubtitles2013/it-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (543 aligned documents, 0.4M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2013/ja-pt_br.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (19 aligned documents, 17.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ko-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (451 aligned documents, 0.6M links, 7.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (210 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2013/lv-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (809 aligned documents, 0.8M links, 11.3M tokens)" href="download.php?f=OpenSubtitles2013/mk-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malayalam' (5 aligned documents, 1.4k links, 25.4k tokens)" href="download.php?f=OpenSubtitles2013/ml-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (1,982 aligned documents, 2.2M links, 30.3M tokens)" href="download.php?f=OpenSubtitles2013/ms-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (2,538 aligned documents, 2.5M links, 35.6M tokens)" href="download.php?f=OpenSubtitles2013/nb-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (18,023 aligned documents, 15.1M links, 222.8M tokens)" href="download.php?f=OpenSubtitles2013/nl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (8,836 aligned documents, 8.3M links, 112.7M tokens)" href="download.php?f=OpenSubtitles2013/pl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Portuguese' (21,013 aligned documents, 19.0M links, 267.4M tokens)" href="download.php?f=OpenSubtitles2013/pt-pt_br.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles/v2013/pt_br-ro_sample.html">view</a></td><th>pt_br</th>
<td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles/v2013/pt_br-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles/v2013/pt_br-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles/v2013/pt_br-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles/v2013/pt_br-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles/v2013/pt_br-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Serbian (sample file)" href="OpenSubtitles/v2013/pt_br-sr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles/v2013/pt_br-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Tamil (sample file)" href="OpenSubtitles/v2013/pt_br-ta_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Telugu (sample file)" href="OpenSubtitles/v2013/pt_br-te_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles/v2013/pt_br-th_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles/v2013/pt_br-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles/v2013/pt_br-uk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Urdu (sample file)" href="OpenSubtitles/v2013/pt_br-ur_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles/v2013/pt_br-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2013/pt_br-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2013/pt_br-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/pt_br.raw.tar.gz">pt_br</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ro.tar.gz">ro</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Arabic' (12,162 aligned documents, 9.1M links, 139.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (16,420 aligned documents, 14.5M links, 209.8M tokens)" href="download.php?f=OpenSubtitles2013/bg-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (1,968 aligned documents, 1.7M links, 24.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (160 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (17,152 aligned documents, 14.9M links, 212.2M tokens)" href="download.php?f=OpenSubtitles2013/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (5,929 aligned documents, 5.9M links, 86.4M tokens)" href="download.php?f=OpenSubtitles2013/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (3,822 aligned documents, 4.0M links, 57.4M tokens)" href="download.php?f=OpenSubtitles2013/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (20,942 aligned documents, 17.5M links, 265.4M tokens)" href="download.php?f=OpenSubtitles2013/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (31,879 aligned documents, 31.3M links, 471.3M tokens)" href="download.php?f=OpenSubtitles2013/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (24,683 aligned documents, 21.8M links, 332.4M tokens)" href="download.php?f=OpenSubtitles2013/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (5,510 aligned documents, 5.4M links, 73.4M tokens)" href="download.php?f=OpenSubtitles2013/et-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Basque' (141 aligned documents, 0.2M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2013/eu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Persian' (8 aligned documents, 3.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/fa-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (8,888 aligned documents, 8.8M links, 114.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (17,969 aligned documents, 15.6M links, 238.8M tokens)" href="download.php?f=OpenSubtitles2013/fr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hebrew' (14,171 aligned documents, 10.9M links, 174.1M tokens)" href="download.php?f=OpenSubtitles2013/he-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hindi' (3 aligned documents, 1.6k links, 34.0k tokens)" href="download.php?f=OpenSubtitles2013/hi-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (15,831 aligned documents, 13.7M links, 194.0M tokens)" href="download.php?f=OpenSubtitles2013/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (17,453 aligned documents, 15.0M links, 208.3M tokens)" href="download.php?f=OpenSubtitles2013/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Armenian' (1.0k links, 15.6k tokens)" href="download.php?f=OpenSubtitles2013/hy-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Indonesian' (50 aligned documents, 48.1k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/id-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (798 aligned documents, 1.1M links, 14.5M tokens)" href="download.php?f=OpenSubtitles2013/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (13,425 aligned documents, 10.8M links, 164.5M tokens)" href="download.php?f=OpenSubtitles2013/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (484 aligned documents, 0.4M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2013/ja-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Kazakh' (1.3k links, 15.4k tokens)" href="download.php?f=OpenSubtitles2013/kk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (22 aligned documents, 20.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ko-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (472 aligned documents, 0.6M links, 7.7M tokens)" href="download.php?f=OpenSubtitles2013/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (225 aligned documents, 0.3M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2013/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (956 aligned documents, 1.0M links, 13.9M tokens)" href="download.php?f=OpenSubtitles2013/mk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Malayalam' (5 aligned documents, 1.5k links, 26.1k tokens)" href="download.php?f=OpenSubtitles2013/ml-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Malay' (2,254 aligned documents, 2.6M links, 35.4M tokens)" href="download.php?f=OpenSubtitles2013/ms-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-BokmÃ¥l, Norwegian' (2,425 aligned documents, 2.6M links, 36.7M tokens)" href="download.php?f=OpenSubtitles2013/nb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (17,353 aligned documents, 15.2M links, 229.6M tokens)" href="download.php?f=OpenSubtitles2013/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (8,880 aligned documents, 8.7M links, 119.6M tokens)" href="download.php?f=OpenSubtitles2013/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (19,069 aligned documents, 17.6M links, 258.3M tokens)" href="download.php?f=OpenSubtitles2013/pt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (26,899 aligned documents, 24.5M links, 355.7M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-ro.xml.gz">ces</a></td>
<th></th>
<th>ro</th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="OpenSubtitles/v2013/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="OpenSubtitles/v2013/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="OpenSubtitles/v2013/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="OpenSubtitles/v2013/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="OpenSubtitles/v2013/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Serbian (sample file)" href="OpenSubtitles/v2013/ro-sr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="OpenSubtitles/v2013/ro-sv_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Tamil (sample file)" href="OpenSubtitles/v2013/ro-ta_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Telugu (sample file)" href="OpenSubtitles/v2013/ro-te_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Thai (sample file)" href="OpenSubtitles/v2013/ro-th_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="OpenSubtitles/v2013/ro-tr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="OpenSubtitles/v2013/ro-uk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Urdu (sample file)" href="OpenSubtitles/v2013/ro-ur_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Vietnamese (sample file)" href="OpenSubtitles/v2013/ro-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles/v2013/ro-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles/v2013/ro-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ro.raw.tar.gz">ro</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
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
<th>he</th>
<th>hi</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th>ro</th>
<th></th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>sw</th>
<th>ta</th>
<th>te</th>
<th>th</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th>zh_cn</th>
<th>zh_tw</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ru.tar.gz">ru</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (3,843 aligned documents, 2.8M links, 41.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (4,512 aligned documents, 3.7M links, 52.1M tokens)" href="download.php?f=OpenSubtitles2013/bg-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bosnian' (413 aligned documents, 0.4M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2013/bs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (100 aligned documents, 70.4k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/ca-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (4,598 aligned documents, 3.7M links, 51.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (1,720 aligned documents, 1.6M links, 22.4M tokens)" href="download.php?f=OpenSubtitles2013/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (1,538 aligned documents, 1.5M links, 20.6M tokens)" href="download.php?f=OpenSubtitles2013/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (5,280 aligned documents, 4.2M links, 62.5M tokens)" href="download.php?f=OpenSubtitles2013/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (7,982 aligned documents, 7.1M links, 105.0M tokens)" href="download.php?f=OpenSubtitles2013/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (6,790 aligned documents, 5.6M links, 83.9M tokens)" href="download.php?f=OpenSubtitles2013/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (1,513 aligned documents, 1.4M links, 18.9M tokens)" href="download.php?f=OpenSubtitles2013/et-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Basque' (48 aligned documents, 54.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/eu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Persian' (4 aligned documents, 2.0k links, 73.9k tokens)" href="download.php?f=OpenSubtitles2013/fa-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (2,248 aligned documents, 2.0M links, 25.8M tokens)" href="download.php?f=OpenSubtitles2013/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (5,485 aligned documents, 4.5M links, 67.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hebrew' (4,183 aligned documents, 3.1M links, 47.5M tokens)" href="download.php?f=OpenSubtitles2013/he-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hindi' (0.2k links, 5.3k tokens)" href="download.php?f=OpenSubtitles2013/hi-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (3,997 aligned documents, 3.3M links, 45.9M tokens)" href="download.php?f=OpenSubtitles2013/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (5,204 aligned documents, 4.2M links, 56.6M tokens)" href="download.php?f=OpenSubtitles2013/hu-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Indonesian' (32 aligned documents, 32.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/id-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (235 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2013/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (4,472 aligned documents, 3.5M links, 51.9M tokens)" href="download.php?f=OpenSubtitles2013/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (317 aligned documents, 0.2M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/ja-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Kazakh' (1.2k links, 14.7k tokens)" href="download.php?f=OpenSubtitles2013/kk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (9 aligned documents, 8.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (148 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (103 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Macedonian' (277 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2013/mk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Malayalam' (2 aligned documents, 0.9k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2013/ml-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Malay' (676 aligned documents, 0.8M links, 10.0M tokens)" href="download.php?f=OpenSubtitles2013/ms-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (783 aligned documents, 0.8M links, 10.8M tokens)" href="download.php?f=OpenSubtitles2013/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (4,387 aligned documents, 3.5M links, 51.9M tokens)" href="download.php?f=OpenSubtitles2013/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (2,403 aligned documents, 2.1M links, 28.7M tokens)" href="download.php?f=OpenSubtitles2013/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (4,448 aligned documents, 3.8M links, 55.2M tokens)" href="download.php?f=OpenSubtitles2013/pt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (6,517 aligned documents, 5.5M links, 78.3M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (5,617 aligned documents, 4.8M links, 70.2M tokens)" href="download.php?f=OpenSubtitles2013/ro-ru.xml.gz">ces</a></td>
<th>ru</th>
<th></th>
<td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="OpenSubtitles/v2013/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="OpenSubtitles/v2013/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="OpenSubtitles/v2013/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Albanian (sample file)" href="OpenSubtitles/v2013/ru-sq_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Serbian (sample file)" href="OpenSubtitles/v2013/ru-sr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="OpenSubtitles/v2013/ru-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Russian-Thai (sample file)" href="OpenSubtitles/v2013/ru-th_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Turkish (sample file)" href="OpenSubtitles/v2013/ru-tr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="OpenSubtitles/v2013/ru-uk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Urdu (sample file)" href="OpenSubtitles/v2013/ru-ur_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Vietnamese (sample file)" href="OpenSubtitles/v2013/ru-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles/v2013/ru-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles/v2013/ru-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/si.tar.gz">si</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Arabic' (107 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/ar-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (98 aligned documents, 96.2k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bosnian' (5 aligned documents, 5.4k links, 86.8k tokens)" href="download.php?f=OpenSubtitles2013/bs-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (101 aligned documents, 94.0k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (91 aligned documents, 88.5k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (38 aligned documents, 36.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (109 aligned documents, 95.3k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (123 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/en-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (116 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (66 aligned documents, 63.8k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/et-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Basque' (10 aligned documents, 8.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/eu-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (66 aligned documents, 60.5k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (79 aligned documents, 74.6k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/fr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hebrew' (101 aligned documents, 97.0k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/he-si.xml.gz">ces</a></td>
<td></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (89 aligned documents, 83.2k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (96 aligned documents, 97.4k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/hu-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Indonesian' (1.3k links, 20.5k tokens)" href="download.php?f=OpenSubtitles2013/id-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (24 aligned documents, 26.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (75 aligned documents, 64.4k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/it-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Japanese' (30 aligned documents, 28.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ja-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (21 aligned documents, 24.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/lt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Latvian' (3 aligned documents, 2.3k links, 34.0k tokens)" href="download.php?f=OpenSubtitles2013/lv-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Macedonian' (30 aligned documents, 26.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Malay' (60 aligned documents, 66.3k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ms-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-BokmÃ¥l, Norwegian' (40 aligned documents, 41.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/nb-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (95 aligned documents, 82.6k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (83 aligned documents, 76.9k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (115 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/pt-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (107 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (117 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/ro-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (45 aligned documents, 44.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/ru-si.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Sinhala-Slovak (sample file)" href="OpenSubtitles/v2013/si-sk_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="OpenSubtitles/v2013/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Albanian (sample file)" href="OpenSubtitles/v2013/si-sq_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Serbian (sample file)" href="OpenSubtitles/v2013/si-sr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="OpenSubtitles/v2013/si-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Sinhala-Thai (sample file)" href="OpenSubtitles/v2013/si-th_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Turkish (sample file)" href="OpenSubtitles/v2013/si-tr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="OpenSubtitles/v2013/si-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Sinhala-Vietnamese (sample file)" href="OpenSubtitles/v2013/si-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="OpenSubtitles/v2013/si-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="OpenSubtitles/v2013/si-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/si.raw.tar.gz">si</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sk.tar.gz">sk</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (1,766 aligned documents, 1.3M links, 19.2M tokens)" href="download.php?f=OpenSubtitles2013/ar-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (2,031 aligned documents, 1.7M links, 23.0M tokens)" href="download.php?f=OpenSubtitles2013/bg-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (229 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (30 aligned documents, 19.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (2,131 aligned documents, 1.8M links, 24.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (905 aligned documents, 0.8M links, 11.2M tokens)" href="download.php?f=OpenSubtitles2013/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (575 aligned documents, 0.6M links, 7.7M tokens)" href="download.php?f=OpenSubtitles2013/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (2,508 aligned documents, 2.0M links, 29.4M tokens)" href="download.php?f=OpenSubtitles2013/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (3,243 aligned documents, 3.0M links, 43.1M tokens)" href="download.php?f=OpenSubtitles2013/en-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (2,734 aligned documents, 2.3M links, 33.3M tokens)" href="download.php?f=OpenSubtitles2013/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (865 aligned documents, 0.8M links, 10.0M tokens)" href="download.php?f=OpenSubtitles2013/et-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Basque' (41 aligned documents, 41.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/eu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Persian' (0.2k links, 3.3k tokens)" href="download.php?f=OpenSubtitles2013/fa-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (1,179 aligned documents, 1.1M links, 13.6M tokens)" href="download.php?f=OpenSubtitles2013/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (2,152 aligned documents, 1.8M links, 26.0M tokens)" href="download.php?f=OpenSubtitles2013/fr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hebrew' (1,830 aligned documents, 1.4M links, 20.7M tokens)" href="download.php?f=OpenSubtitles2013/he-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hindi' (0.4k links, 7.0k tokens)" href="download.php?f=OpenSubtitles2013/hi-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (1,830 aligned documents, 1.5M links, 20.8M tokens)" href="download.php?f=OpenSubtitles2013/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (2,239 aligned documents, 1.8M links, 24.1M tokens)" href="download.php?f=OpenSubtitles2013/hu-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Indonesian' (15 aligned documents, 17.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/id-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (125 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2013/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (1,652 aligned documents, 1.3M links, 18.5M tokens)" href="download.php?f=OpenSubtitles2013/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (108 aligned documents, 86.7k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/ja-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Kazakh' (1.2k links, 14.2k tokens)" href="download.php?f=OpenSubtitles2013/kk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Korean' (2 aligned documents, 1.6k links, 22.4k tokens)" href="download.php?f=OpenSubtitles2013/ko-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (65 aligned documents, 86.5k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (42 aligned documents, 46.6k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (113 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malayalam' (0.4k links, 4.2k tokens)" href="download.php?f=OpenSubtitles2013/ml-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malay' (352 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2013/ms-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-BokmÃ¥l, Norwegian' (322 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2013/nb-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (2,033 aligned documents, 1.6M links, 23.4M tokens)" href="download.php?f=OpenSubtitles2013/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (1,026 aligned documents, 0.9M links, 11.9M tokens)" href="download.php?f=OpenSubtitles2013/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (2,154 aligned documents, 1.9M links, 27.3M tokens)" href="download.php?f=OpenSubtitles2013/pt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (2,781 aligned documents, 2.4M links, 33.4M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (2,706 aligned documents, 2.4M links, 34.6M tokens)" href="download.php?f=OpenSubtitles2013/ro-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (898 aligned documents, 0.7M links, 9.9M tokens)" href="download.php?f=OpenSubtitles2013/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Sinhala' (25 aligned documents, 24.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/si-sk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="OpenSubtitles/v2013/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="OpenSubtitles/v2013/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Serbian (sample file)" href="OpenSubtitles/v2013/sk-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="OpenSubtitles/v2013/sk-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovak-Thai (sample file)" href="OpenSubtitles/v2013/sk-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="OpenSubtitles/v2013/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="OpenSubtitles/v2013/sk-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Urdu (sample file)" href="OpenSubtitles/v2013/sk-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Vietnamese (sample file)" href="OpenSubtitles/v2013/sk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="OpenSubtitles/v2013/sk-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="OpenSubtitles/v2013/sk-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sk.raw.tar.gz">sk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sl.tar.gz">sl</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (6,211 aligned documents, 4.8M links, 68.7M tokens)" href="download.php?f=OpenSubtitles2013/ar-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (7,050 aligned documents, 6.5M links, 87.1M tokens)" href="download.php?f=OpenSubtitles2013/bg-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (978 aligned documents, 0.9M links, 11.9M tokens)" href="download.php?f=OpenSubtitles2013/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (115 aligned documents, 86.3k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (7,537 aligned documents, 6.9M links, 91.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (3,697 aligned documents, 3.6M links, 49.4M tokens)" href="download.php?f=OpenSubtitles2013/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (2,338 aligned documents, 2.4M links, 32.9M tokens)" href="download.php?f=OpenSubtitles2013/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (9,050 aligned documents, 7.9M links, 110.9M tokens)" href="download.php?f=OpenSubtitles2013/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (11,212 aligned documents, 11.4M links, 161.7M tokens)" href="download.php?f=OpenSubtitles2013/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (9,717 aligned documents, 8.8M links, 125.0M tokens)" href="download.php?f=OpenSubtitles2013/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (3,641 aligned documents, 3.6M links, 45.9M tokens)" href="download.php?f=OpenSubtitles2013/et-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Basque' (103 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/eu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Persian' (0.9k links, 23.5k tokens)" href="download.php?f=OpenSubtitles2013/fa-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (5,106 aligned documents, 5.1M links, 61.5M tokens)" href="download.php?f=OpenSubtitles2013/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (7,237 aligned documents, 6.6M links, 93.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hebrew' (6,971 aligned documents, 5.7M links, 83.5M tokens)" href="download.php?f=OpenSubtitles2013/he-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hindi' (0.4k links, 7.0k tokens)" href="download.php?f=OpenSubtitles2013/hi-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (7,231 aligned documents, 6.6M links, 86.3M tokens)" href="download.php?f=OpenSubtitles2013/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (7,229 aligned documents, 6.5M links, 83.7M tokens)" href="download.php?f=OpenSubtitles2013/hu-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Indonesian' (37 aligned documents, 35.9k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/id-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (649 aligned documents, 0.9M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2013/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (4,520 aligned documents, 4.0M links, 56.4M tokens)" href="download.php?f=OpenSubtitles2013/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (292 aligned documents, 0.2M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/ja-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (14 aligned documents, 11.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (363 aligned documents, 0.5M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2013/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (127 aligned documents, 0.2M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2013/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (699 aligned documents, 0.7M links, 9.3M tokens)" href="download.php?f=OpenSubtitles2013/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malayalam' (3 aligned documents, 1.1k links, 17.2k tokens)" href="download.php?f=OpenSubtitles2013/ml-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malay' (1,453 aligned documents, 1.6M links, 21.3M tokens)" href="download.php?f=OpenSubtitles2013/ms-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-BokmÃ¥l, Norwegian' (1,634 aligned documents, 1.7M links, 22.7M tokens)" href="download.php?f=OpenSubtitles2013/nb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (8,020 aligned documents, 7.1M links, 99.5M tokens)" href="download.php?f=OpenSubtitles2013/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (4,821 aligned documents, 4.7M links, 60.4M tokens)" href="download.php?f=OpenSubtitles2013/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (8,913 aligned documents, 8.5M links, 115.4M tokens)" href="download.php?f=OpenSubtitles2013/pt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (9,743 aligned documents, 9.1M links, 123.4M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (10,343 aligned documents, 10.0M links, 137.3M tokens)" href="download.php?f=OpenSubtitles2013/ro-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (2,586 aligned documents, 2.3M links, 31.0M tokens)" href="download.php?f=OpenSubtitles2013/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (86 aligned documents, 78.5k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (1,442 aligned documents, 1.3M links, 17.4M tokens)" href="download.php?f=OpenSubtitles2013/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="OpenSubtitles/v2013/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Serbian (sample file)" href="OpenSubtitles/v2013/sl-sr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="OpenSubtitles/v2013/sl-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovenian-Thai (sample file)" href="OpenSubtitles/v2013/sl-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="OpenSubtitles/v2013/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="OpenSubtitles/v2013/sl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Urdu (sample file)" href="OpenSubtitles/v2013/sl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Vietnamese (sample file)" href="OpenSubtitles/v2013/sl-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles/v2013/sl-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles/v2013/sl-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sl.raw.tar.gz">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sq.tar.gz">sq</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Arabic' (1,180 aligned documents, 1.1M links, 17.0M tokens)" href="download.php?f=OpenSubtitles2013/ar-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (1,274 aligned documents, 1.4M links, 19.7M tokens)" href="download.php?f=OpenSubtitles2013/bg-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (216 aligned documents, 0.2M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (16 aligned documents, 20.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (1,254 aligned documents, 1.4M links, 19.5M tokens)" href="download.php?f=OpenSubtitles2013/cs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (886 aligned documents, 1.0M links, 15.0M tokens)" href="download.php?f=OpenSubtitles2013/da-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-German' (493 aligned documents, 0.6M links, 8.6M tokens)" href="download.php?f=OpenSubtitles2013/de-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (1,415 aligned documents, 1.5M links, 21.6M tokens)" href="download.php?f=OpenSubtitles2013/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (1,772 aligned documents, 2.1M links, 30.3M tokens)" href="download.php?f=OpenSubtitles2013/en-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Spanish' (1,487 aligned documents, 1.6M links, 24.0M tokens)" href="download.php?f=OpenSubtitles2013/es-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (929 aligned documents, 1.1M links, 14.7M tokens)" href="download.php?f=OpenSubtitles2013/et-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Basque' (55 aligned documents, 60.2k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/eu-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Persian' (3 aligned documents, 1.6k links, 47.6k tokens)" href="download.php?f=OpenSubtitles2013/fa-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (1,089 aligned documents, 1.2M links, 15.8M tokens)" href="download.php?f=OpenSubtitles2013/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (1,160 aligned documents, 1.3M links, 19.3M tokens)" href="download.php?f=OpenSubtitles2013/fr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hebrew' (1,169 aligned documents, 1.2M links, 18.4M tokens)" href="download.php?f=OpenSubtitles2013/he-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hindi' (0.4k links, 7.4k tokens)" href="download.php?f=OpenSubtitles2013/hi-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (1,211 aligned documents, 1.3M links, 18.5M tokens)" href="download.php?f=OpenSubtitles2013/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (1,244 aligned documents, 1.4M links, 18.5M tokens)" href="download.php?f=OpenSubtitles2013/hu-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Indonesian' (14 aligned documents, 17.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/id-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (219 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2013/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (811 aligned documents, 0.9M links, 13.2M tokens)" href="download.php?f=OpenSubtitles2013/it-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (115 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/ja-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Korean' (7 aligned documents, 7.1k links, 95.8k tokens)" href="download.php?f=OpenSubtitles2013/ko-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (189 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2013/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (56 aligned documents, 71.1k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (281 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malayalam' (0.4k links, 4.8k tokens)" href="download.php?f=OpenSubtitles2013/ml-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malay' (606 aligned documents, 0.7M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2013/ms-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-BokmÃ¥l, Norwegian' (474 aligned documents, 0.6M links, 8.0M tokens)" href="download.php?f=OpenSubtitles2013/nb-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Dutch' (1,415 aligned documents, 1.5M links, 22.2M tokens)" href="download.php?f=OpenSubtitles2013/nl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Polish' (1,084 aligned documents, 1.2M links, 16.8M tokens)" href="download.php?f=OpenSubtitles2013/pl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (1,505 aligned documents, 1.7M links, 24.0M tokens)" href="download.php?f=OpenSubtitles2013/pt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (1,582 aligned documents, 1.8M links, 24.8M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (1,750 aligned documents, 2.0M links, 28.1M tokens)" href="download.php?f=OpenSubtitles2013/ro-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Russian' (531 aligned documents, 0.6M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2013/ru-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Sinhala' (43 aligned documents, 46.0k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/si-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (341 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (1,231 aligned documents, 1.4M links, 19.0M tokens)" href="download.php?f=OpenSubtitles2013/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Serbian (sample file)" href="OpenSubtitles/v2013/sq-sr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Swedish (sample file)" href="OpenSubtitles/v2013/sq-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Albanian-Thai (sample file)" href="OpenSubtitles/v2013/sq-th_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="OpenSubtitles/v2013/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="OpenSubtitles/v2013/sq-uk_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Urdu (sample file)" href="OpenSubtitles/v2013/sq-ur_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Vietnamese (sample file)" href="OpenSubtitles/v2013/sq-vi_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles/v2013/sq-zh_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles/v2013/sq-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles/v2013/sq-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sq.raw.tar.gz">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sr.tar.gz">sr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Arabic' (7,124 aligned documents, 5.3M links, 77.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bulgarian' (9,120 aligned documents, 7.8M links, 109.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bengali' (1.6k links, 22.5k tokens)" href="download.php?f=OpenSubtitles2013/bn-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Bosnian' (760 aligned documents, 0.7M links, 9.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Catalan' (95 aligned documents, 69.2k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/ca-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Czech' (9,659 aligned documents, 8.2M links, 112.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Danish' (3,359 aligned documents, 3.2M links, 45.5M tokens)" href="download.php?f=OpenSubtitles2013/da-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-German' (2,528 aligned documents, 2.6M links, 36.4M tokens)" href="download.php?f=OpenSubtitles2013/de-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Greek' (11,480 aligned documents, 9.6M links, 139.5M tokens)" href="download.php?f=OpenSubtitles2013/el-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (15,228 aligned documents, 14.5M links, 211.8M tokens)" href="download.php?f=OpenSubtitles2013/en-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Spanish' (12,896 aligned documents, 11.2M links, 165.4M tokens)" href="download.php?f=OpenSubtitles2013/es-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Estonian' (3,355 aligned documents, 3.1M links, 41.4M tokens)" href="download.php?f=OpenSubtitles2013/et-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Basque' (121 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/eu-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Persian' (7 aligned documents, 2.5k links, 65.8k tokens)" href="download.php?f=OpenSubtitles2013/fa-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Finnish' (5,286 aligned documents, 5.1M links, 64.3M tokens)" href="download.php?f=OpenSubtitles2013/fi-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-French' (9,806 aligned documents, 8.4M links, 123.9M tokens)" href="download.php?f=OpenSubtitles2013/fr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hebrew' (7,835 aligned documents, 6.0M links, 90.6M tokens)" href="download.php?f=OpenSubtitles2013/he-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hindi' (0.4k links, 6.9k tokens)" href="download.php?f=OpenSubtitles2013/hi-sr.xml.gz">ces</a></td>
<th>sr</th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Croatian' (6,795 aligned documents, 6.2M links, 82.3M tokens)" href="download.php?f=OpenSubtitles2013/hr-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Hungarian' (9,313 aligned documents, 7.8M links, 104.3M tokens)" href="download.php?f=OpenSubtitles2013/hu-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Indonesian' (42 aligned documents, 39.2k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/id-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Icelandic' (584 aligned documents, 0.7M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2013/is-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Italian' (6,671 aligned documents, 5.5M links, 80.5M tokens)" href="download.php?f=OpenSubtitles2013/it-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (321 aligned documents, 0.3M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2013/ja-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Korean' (13 aligned documents, 11.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ko-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Lithuanian' (309 aligned documents, 0.4M links, 4.8M tokens)" href="download.php?f=OpenSubtitles2013/lt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Latvian' (129 aligned documents, 0.1M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2013/lv-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Macedonian' (520 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2013/mk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Malayalam' (3 aligned documents, 1.6k links, 24.4k tokens)" href="download.php?f=OpenSubtitles2013/ml-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Malay' (1,317 aligned documents, 1.4M links, 19.4M tokens)" href="download.php?f=OpenSubtitles2013/ms-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-BokmÃ¥l, Norwegian' (1,494 aligned documents, 1.6M links, 21.4M tokens)" href="download.php?f=OpenSubtitles2013/nb-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Dutch' (9,079 aligned documents, 7.6M links, 110.3M tokens)" href="download.php?f=OpenSubtitles2013/nl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Polish' (4,897 aligned documents, 4.5M links, 60.5M tokens)" href="download.php?f=OpenSubtitles2013/pl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (8,861 aligned documents, 8.1M links, 114.4M tokens)" href="download.php?f=OpenSubtitles2013/pt-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Portuguese' (13,285 aligned documents, 11.7M links, 164.4M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Romanian' (12,721 aligned documents, 11.5M links, 164.8M tokens)" href="download.php?f=OpenSubtitles2013/ro-sr.xml.gz">ces</a></td>
<th>sr</th>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Russian' (3,280 aligned documents, 2.8M links, 39.6M tokens)" href="download.php?f=OpenSubtitles2013/ru-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Sinhala' (104 aligned documents, 96.5k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/si-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovak' (1,534 aligned documents, 1.3M links, 17.7M tokens)" href="download.php?f=OpenSubtitles2013/sk-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Slovenian' (5,802 aligned documents, 5.5M links, 72.3M tokens)" href="download.php?f=OpenSubtitles2013/sl-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Albanian' (1,233 aligned documents, 1.4M links, 18.7M tokens)" href="download.php?f=OpenSubtitles2013/sq-sr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Serbian-Swedish (sample file)" href="OpenSubtitles/v2013/sr-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Serbian-Thai (sample file)" href="OpenSubtitles/v2013/sr-th_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Turkish (sample file)" href="OpenSubtitles/v2013/sr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="OpenSubtitles/v2013/sr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Urdu (sample file)" href="OpenSubtitles/v2013/sr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Vietnamese (sample file)" href="OpenSubtitles/v2013/sr-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="OpenSubtitles/v2013/sr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Serbian-Chinese (sample file)" href="OpenSubtitles/v2013/sr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sr.raw.tar.gz">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sv.tar.gz">sv</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Arabic' (4,099 aligned documents, 3.2M links, 46.9M tokens)" href="download.php?f=OpenSubtitles2013/ar-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (4,200 aligned documents, 3.7M links, 53.1M tokens)" href="download.php?f=OpenSubtitles2013/bg-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bengali' (1.5k links, 22.3k tokens)" href="download.php?f=OpenSubtitles2013/bn-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bosnian' (556 aligned documents, 0.5M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2013/bs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Catalan' (88 aligned documents, 58.5k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ca-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (4,705 aligned documents, 4.2M links, 58.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (3,290 aligned documents, 2.9M links, 41.7M tokens)" href="download.php?f=OpenSubtitles2013/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (1,846 aligned documents, 1.8M links, 26.4M tokens)" href="download.php?f=OpenSubtitles2013/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (5,851 aligned documents, 5.0M links, 74.1M tokens)" href="download.php?f=OpenSubtitles2013/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (7,346 aligned documents, 7.2M links, 108.0M tokens)" href="download.php?f=OpenSubtitles2013/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (6,233 aligned documents, 5.4M links, 82.4M tokens)" href="download.php?f=OpenSubtitles2013/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (2,287 aligned documents, 2.1M links, 28.4M tokens)" href="download.php?f=OpenSubtitles2013/et-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Basque' (73 aligned documents, 76.7k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/eu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Persian' (3 aligned documents, 2.4k links, 57.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (4,257 aligned documents, 3.8M links, 48.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (4,951 aligned documents, 4.3M links, 64.9M tokens)" href="download.php?f=OpenSubtitles2013/fr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hebrew' (4,238 aligned documents, 3.4M links, 52.4M tokens)" href="download.php?f=OpenSubtitles2013/he-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hindi' (0.4k links, 7.5k tokens)" href="download.php?f=OpenSubtitles2013/hi-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (4,411 aligned documents, 3.8M links, 52.9M tokens)" href="download.php?f=OpenSubtitles2013/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (4,697 aligned documents, 4.0M links, 54.5M tokens)" href="download.php?f=OpenSubtitles2013/hu-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Indonesian' (28 aligned documents, 30.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/id-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (472 aligned documents, 0.6M links, 7.8M tokens)" href="download.php?f=OpenSubtitles2013/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (3,094 aligned documents, 2.6M links, 39.1M tokens)" href="download.php?f=OpenSubtitles2013/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (209 aligned documents, 0.2M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/ja-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Kazakh' (1.1k links, 14.3k tokens)" href="download.php?f=OpenSubtitles2013/kk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Korean' (10 aligned documents, 9.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/ko-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (211 aligned documents, 0.3M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (74 aligned documents, 89.7k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Macedonian' (363 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2013/mk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Malayalam' (2 aligned documents, 0.8k links, 12.2k tokens)" href="download.php?f=OpenSubtitles2013/ml-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Malay' (960 aligned documents, 1.0M links, 14.2M tokens)" href="download.php?f=OpenSubtitles2013/ms-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (2,163 aligned documents, 1.9M links, 26.3M tokens)" href="download.php?f=OpenSubtitles2013/nb-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (4,922 aligned documents, 4.1M links, 60.6M tokens)" href="download.php?f=OpenSubtitles2013/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (2,691 aligned documents, 2.5M links, 34.3M tokens)" href="download.php?f=OpenSubtitles2013/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (5,305 aligned documents, 4.9M links, 71.0M tokens)" href="download.php?f=OpenSubtitles2013/pt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (6,174 aligned documents, 5.5M links, 79.8M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (6,235 aligned documents, 5.8M links, 85.6M tokens)" href="download.php?f=OpenSubtitles2013/ro-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (1,733 aligned documents, 1.5M links, 21.6M tokens)" href="download.php?f=OpenSubtitles2013/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (63 aligned documents, 61.7k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (874 aligned documents, 0.7M links, 10.6M tokens)" href="download.php?f=OpenSubtitles2013/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (3,910 aligned documents, 3.6M links, 49.3M tokens)" href="download.php?f=OpenSubtitles2013/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Albanian' (813 aligned documents, 0.9M links, 13.3M tokens)" href="download.php?f=OpenSubtitles2013/sq-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Serbian' (3,768 aligned documents, 3.4M links, 47.4M tokens)" href="download.php?f=OpenSubtitles2013/sr-sv.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Swedish-Thai (sample file)" href="OpenSubtitles/v2013/sv-th_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Turkish (sample file)" href="OpenSubtitles/v2013/sv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="OpenSubtitles/v2013/sv-uk_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Urdu (sample file)" href="OpenSubtitles/v2013/sv-ur_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Vietnamese (sample file)" href="OpenSubtitles/v2013/sv-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles/v2013/sv-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles/v2013/sv-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sv.raw.tar.gz">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sw.tar.gz">sw</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Greek' (0.3k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2013/el-sw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Spanish' (0.3k links, 14.5k tokens)" href="download.php?f=OpenSubtitles2013/es-sw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sw</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Indonesian' (0.4k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2013/id-sw.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Swahili-Portuguese' (0.3k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2013/pt-sw.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>sw</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Swahili-Chinese (sample file)" href="OpenSubtitles/v2013/sw-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/sw.raw.tar.gz">sw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ta.tar.gz">ta</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Arabic' (2 aligned documents, 1.1k links, 19.1k tokens)" href="download.php?f=OpenSubtitles2013/ar-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Czech' (2 aligned documents, 0.9k links, 13.3k tokens)" href="download.php?f=OpenSubtitles2013/cs-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Greek' (0.5k links, 6.8k tokens)" href="download.php?f=OpenSubtitles2013/el-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-English' (3 aligned documents, 1.8k links, 31.3k tokens)" href="download.php?f=OpenSubtitles2013/en-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Spanish' (2 aligned documents, 1.3k links, 23.2k tokens)" href="download.php?f=OpenSubtitles2013/es-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Persian' (3 aligned documents, 1.0k links, 35.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Hebrew' (0.5k links, 6.9k tokens)" href="download.php?f=OpenSubtitles2013/he-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Hindi' (15 aligned documents, 6.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/hi-ta.xml.gz">ces</a></td>
<th>ta</th>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Croatian' (0.5k links, 7.1k tokens)" href="download.php?f=OpenSubtitles2013/hr-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Hungarian' (0.5k links, 6.8k tokens)" href="download.php?f=OpenSubtitles2013/hu-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Japanese' (0.7k links, 7.5k tokens)" href="download.php?f=OpenSubtitles2013/ja-ta.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-BokmÃ¥l, Norwegian' (0.4k links, 6.6k tokens)" href="download.php?f=OpenSubtitles2013/nb-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Dutch' (0.4k links, 7.3k tokens)" href="download.php?f=OpenSubtitles2013/nl-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Polish' (2 aligned documents, 1.1k links, 18.0k tokens)" href="download.php?f=OpenSubtitles2013/pl-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Portuguese' (2 aligned documents, 1.2k links, 23.3k tokens)" href="download.php?f=OpenSubtitles2013/pt-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Portuguese' (2 aligned documents, 0.9k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2013/pt_br-ta.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tamil-Romanian' (2 aligned documents, 1.2k links, 23.9k tokens)" href="download.php?f=OpenSubtitles2013/ro-ta.xml.gz">ces</a></td>
<th>ta</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Tamil-Telugu (sample file)" href="OpenSubtitles/v2013/ta-te_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Tamil-Turkish (sample file)" href="OpenSubtitles/v2013/ta-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ta.raw.tar.gz">ta</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/te.tar.gz">te</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Arabic' (3 aligned documents, 1.8k links, 30.4k tokens)" href="download.php?f=OpenSubtitles2013/ar-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Czech' (3 aligned documents, 1.6k links, 26.0k tokens)" href="download.php?f=OpenSubtitles2013/cs-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Greek' (0.5k links, 6.7k tokens)" href="download.php?f=OpenSubtitles2013/el-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (4 aligned documents, 2.5k links, 45.6k tokens)" href="download.php?f=OpenSubtitles2013/en-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Spanish' (3 aligned documents, 2.1k links, 37.1k tokens)" href="download.php?f=OpenSubtitles2013/es-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Persian' (3 aligned documents, 1.0k links, 35.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Hebrew' (2 aligned documents, 1.2k links, 21.4k tokens)" href="download.php?f=OpenSubtitles2013/he-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Hindi' (17 aligned documents, 7.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/hi-te.xml.gz">ces</a></td>
<th>te</th>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Croatian' (0.5k links, 7.0k tokens)" href="download.php?f=OpenSubtitles2013/hr-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Hungarian' (0.5k links, 6.7k tokens)" href="download.php?f=OpenSubtitles2013/hu-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Japanese' (0.7k links, 7.5k tokens)" href="download.php?f=OpenSubtitles2013/ja-te.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-BokmÃ¥l, Norwegian' (0.4k links, 6.7k tokens)" href="download.php?f=OpenSubtitles2013/nb-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Dutch' (0.4k links, 7.2k tokens)" href="download.php?f=OpenSubtitles2013/nl-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Polish' (2 aligned documents, 1.1k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2013/pl-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Portuguese' (2 aligned documents, 1.2k links, 23.3k tokens)" href="download.php?f=OpenSubtitles2013/pt-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Portuguese' (2 aligned documents, 0.9k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2013/pt_br-te.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Romanian' (2 aligned documents, 1.3k links, 23.7k tokens)" href="download.php?f=OpenSubtitles2013/ro-te.xml.gz">ces</a></td>
<th>te</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-Tamil' (15 aligned documents, 7.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ta-te.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Telugu-Turkish (sample file)" href="OpenSubtitles/v2013/te-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/te.raw.tar.gz">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/th.tar.gz">th</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Arabic' (1,169 aligned documents, 0.8M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2013/ar-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bulgarian' (971 aligned documents, 0.6M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2013/bg-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bosnian' (121 aligned documents, 72.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/bs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Catalan' (40 aligned documents, 24.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Czech' (1,157 aligned documents, 0.7M links, 7.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Danish' (421 aligned documents, 0.3M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2013/da-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-German' (256 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/de-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Greek' (1,257 aligned documents, 0.8M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2013/el-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (1,474 aligned documents, 1.0M links, 10.7M tokens)" href="download.php?f=OpenSubtitles2013/en-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Spanish' (1,445 aligned documents, 0.9M links, 9.7M tokens)" href="download.php?f=OpenSubtitles2013/es-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Estonian' (454 aligned documents, 0.3M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2013/et-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Basque' (1.5k links, 13.2k tokens)" href="download.php?f=OpenSubtitles2013/eu-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Finnish' (419 aligned documents, 0.3M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2013/fi-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-French' (1,202 aligned documents, 0.7M links, 8.3M tokens)" href="download.php?f=OpenSubtitles2013/fr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hebrew' (1,057 aligned documents, 0.7M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2013/he-th.xml.gz">ces</a></td>
<td></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Croatian' (1,010 aligned documents, 0.6M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2013/hr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hungarian' (1,050 aligned documents, 0.7M links, 6.3M tokens)" href="download.php?f=OpenSubtitles2013/hu-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Indonesian' (2 aligned documents, 1.7k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2013/id-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Icelandic' (2 aligned documents, 2.2k links, 18.4k tokens)" href="download.php?f=OpenSubtitles2013/is-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Italian' (989 aligned documents, 0.6M links, 6.8M tokens)" href="download.php?f=OpenSubtitles2013/it-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Japanese' (131 aligned documents, 74.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ja-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Korean' (2 aligned documents, 1.9k links, 19.9k tokens)" href="download.php?f=OpenSubtitles2013/ko-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Lithuanian' (11 aligned documents, 11.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Latvian' (27 aligned documents, 24.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/lv-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Macedonian' (57 aligned documents, 39.5k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Malay' (167 aligned documents, 0.1M links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/ms-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-BokmÃ¥l, Norwegian' (183 aligned documents, 0.1M links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/nb-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Dutch' (1,125 aligned documents, 0.7M links, 7.5M tokens)" href="download.php?f=OpenSubtitles2013/nl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Polish' (491 aligned documents, 0.3M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/pl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (1,122 aligned documents, 0.7M links, 7.5M tokens)" href="download.php?f=OpenSubtitles2013/pt-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (1,337 aligned documents, 0.9M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Romanian' (1,306 aligned documents, 0.8M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2013/ro-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Russian' (579 aligned documents, 0.4M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2013/ru-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Sinhala' (15 aligned documents, 10.0k links, 85.1k tokens)" href="download.php?f=OpenSubtitles2013/si-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovak' (272 aligned documents, 0.2M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/sk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovenian' (734 aligned documents, 0.5M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2013/sl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Albanian' (81 aligned documents, 61.9k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/sq-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Serbian' (654 aligned documents, 0.4M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2013/sr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Swedish' (496 aligned documents, 0.3M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/sv-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Thai-Turkish (sample file)" href="OpenSubtitles/v2013/th-tr_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Ukrainian (sample file)" href="OpenSubtitles/v2013/th-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Thai-Vietnamese (sample file)" href="OpenSubtitles/v2013/th-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Thai-Chinese (sample file)" href="OpenSubtitles/v2013/th-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Chinese (sample file)" href="OpenSubtitles/v2013/th-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/th.raw.tar.gz">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/tr.tar.gz">tr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (10,662 aligned documents, 7.7M links, 106.3M tokens)" href="download.php?f=OpenSubtitles2013/ar-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Belarusian' (1.1k links, 5.3k tokens)" href="download.php?f=OpenSubtitles2013/be-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (13,085 aligned documents, 10.9M links, 142.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bengali' (1.6k links, 21.7k tokens)" href="download.php?f=OpenSubtitles2013/bn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (1,497 aligned documents, 1.2M links, 16.0M tokens)" href="download.php?f=OpenSubtitles2013/bs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (143 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/ca-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (14,388 aligned documents, 11.9M links, 151.9M tokens)" href="download.php?f=OpenSubtitles2013/cs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' (4,929 aligned documents, 4.6M links, 61.4M tokens)" href="download.php?f=OpenSubtitles2013/da-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-German' (3,460 aligned documents, 3.5M links, 45.3M tokens)" href="download.php?f=OpenSubtitles2013/de-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (16,600 aligned documents, 13.3M links, 181.9M tokens)" href="download.php?f=OpenSubtitles2013/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (22,631 aligned documents, 20.6M links, 283.2M tokens)" href="download.php?f=OpenSubtitles2013/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Spanish' (19,117 aligned documents, 15.8M links, 219.0M tokens)" href="download.php?f=OpenSubtitles2013/es-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (4,606 aligned documents, 4.3M links, 52.7M tokens)" href="download.php?f=OpenSubtitles2013/et-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Basque' (138 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/eu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Persian' (4 aligned documents, 1.3k links, 22.7k tokens)" href="download.php?f=OpenSubtitles2013/fa-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (7,026 aligned documents, 6.6M links, 77.7M tokens)" href="download.php?f=OpenSubtitles2013/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-French' (14,391 aligned documents, 12.0M links, 166.0M tokens)" href="download.php?f=OpenSubtitles2013/fr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hebrew' (11,808 aligned documents, 8.8M links, 125.4M tokens)" href="download.php?f=OpenSubtitles2013/he-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hindi' (2 aligned documents, 0.8k links, 14.8k tokens)" href="download.php?f=OpenSubtitles2013/hi-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (12,229 aligned documents, 10.2M links, 129.9M tokens)" href="download.php?f=OpenSubtitles2013/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' (14,334 aligned documents, 11.8M links, 147.0M tokens)" href="download.php?f=OpenSubtitles2013/hu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Armenian' (1.1k links, 14.6k tokens)" href="download.php?f=OpenSubtitles2013/hy-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Indonesian' (51 aligned documents, 49.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/id-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (669 aligned documents, 0.9M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2013/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Italian' (10,738 aligned documents, 8.4M links, 115.4M tokens)" href="download.php?f=OpenSubtitles2013/it-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (480 aligned documents, 0.4M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/ja-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Kazakh' (2 aligned documents, 2.3k links, 26.2k tokens)" href="download.php?f=OpenSubtitles2013/kk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Korean' (20 aligned documents, 16.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/ko-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (391 aligned documents, 0.5M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2013/lt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (185 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2013/lv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (692 aligned documents, 0.7M links, 8.8M tokens)" href="download.php?f=OpenSubtitles2013/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malayalam' (3 aligned documents, 0.7k links, 10.8k tokens)" href="download.php?f=OpenSubtitles2013/ml-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malay' (1,756 aligned documents, 1.9M links, 24.0M tokens)" href="download.php?f=OpenSubtitles2013/ms-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-BokmÃ¥l, Norwegian' (1,991 aligned documents, 2.0M links, 26.0M tokens)" href="download.php?f=OpenSubtitles2013/nb-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Dutch' (13,244 aligned documents, 11.0M links, 149.8M tokens)" href="download.php?f=OpenSubtitles2013/nl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (7,145 aligned documents, 6.6M links, 81.9M tokens)" href="download.php?f=OpenSubtitles2013/pl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (14,516 aligned documents, 12.8M links, 169.7M tokens)" href="download.php?f=OpenSubtitles2013/pt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (19,651 aligned documents, 16.7M links, 218.5M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (18,190 aligned documents, 16.1M links, 215.1M tokens)" href="download.php?f=OpenSubtitles2013/ro-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Russian' (4,991 aligned documents, 4.1M links, 53.9M tokens)" href="download.php?f=OpenSubtitles2013/ru-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Sinhala' (108 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/si-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (2,235 aligned documents, 1.9M links, 24.3M tokens)" href="download.php?f=OpenSubtitles2013/sk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (8,332 aligned documents, 7.7M links, 95.0M tokens)" href="download.php?f=OpenSubtitles2013/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (1,383 aligned documents, 1.5M links, 20.2M tokens)" href="download.php?f=OpenSubtitles2013/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Serbian' (10,106 aligned documents, 8.8M links, 112.6M tokens)" href="download.php?f=OpenSubtitles2013/sr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swedish' (4,988 aligned documents, 4.5M links, 59.2M tokens)" href="download.php?f=OpenSubtitles2013/sv-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Tamil' (0.5k links, 6.7k tokens)" href="download.php?f=OpenSubtitles2013/ta-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Telugu' (0.5k links, 6.6k tokens)" href="download.php?f=OpenSubtitles2013/te-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Thai' (1,264 aligned documents, 0.8M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2013/th-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="OpenSubtitles/v2013/tr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Urdu (sample file)" href="OpenSubtitles/v2013/tr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Vietnamese (sample file)" href="OpenSubtitles/v2013/tr-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles/v2013/tr-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles/v2013/tr-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/tr.raw.tar.gz">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/uk.tar.gz">uk</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Arabic' (58 aligned documents, 54.2k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/ar-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (80 aligned documents, 84.2k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/bg-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (9 aligned documents, 8.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/bs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Catalan' (2 aligned documents, 1.2k links, 18.4k tokens)" href="download.php?f=OpenSubtitles2013/ca-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (92 aligned documents, 99.3k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2013/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (46 aligned documents, 50.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (54 aligned documents, 53.6k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (101 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (134 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2013/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (103 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (53 aligned documents, 57.0k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/et-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Basque' (5 aligned documents, 6.7k links, 89.8k tokens)" href="download.php?f=OpenSubtitles2013/eu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Persian' (0.1k links, 4.6k tokens)" href="download.php?f=OpenSubtitles2013/fa-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (68 aligned documents, 74.2k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (92 aligned documents, 97.6k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/fr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hebrew' (73 aligned documents, 71.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/he-uk.xml.gz">ces</a></td>
<td></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (75 aligned documents, 81.1k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (83 aligned documents, 87.9k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/hu-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Icelandic' (12 aligned documents, 14.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/is-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (62 aligned documents, 65.5k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Japanese' (7 aligned documents, 7.0k links, 53.2k tokens)" href="download.php?f=OpenSubtitles2013/ja-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Kazakh' (1.3k links, 15.0k tokens)" href="download.php?f=OpenSubtitles2013/kk-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Lithuanian' (10 aligned documents, 10.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (4 aligned documents, 4.4k links, 52.4k tokens)" href="download.php?f=OpenSubtitles2013/lv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (8 aligned documents, 8.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/mk-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Malay' (33 aligned documents, 43.1k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2013/ms-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-BokmÃ¥l, Norwegian' (35 aligned documents, 39.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/nb-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (81 aligned documents, 88.8k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/nl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (75 aligned documents, 78.0k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/pl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (98 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2013/pt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (100 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (111 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/ro-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (60 aligned documents, 69.8k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/ru-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (4 aligned documents, 3.4k links, 46.0k tokens)" href="download.php?f=OpenSubtitles2013/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (14 aligned documents, 13.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (83 aligned documents, 90.6k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (29 aligned documents, 34.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/sq-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (77 aligned documents, 80.6k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/sr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (52 aligned documents, 58.5k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2013/sv-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Thai' (5 aligned documents, 3.7k links, 38.1k tokens)" href="download.php?f=OpenSubtitles2013/th-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (91 aligned documents, 99.5k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/tr-uk.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Ukrainian-Vietnamese (sample file)" href="OpenSubtitles/v2013/uk-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="OpenSubtitles/v2013/uk-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="OpenSubtitles/v2013/uk-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/uk.raw.tar.gz">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ur.tar.gz">ur</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Arabic' (4 aligned documents, 4.0k links, 72.0k tokens)" href="download.php?f=OpenSubtitles2013/ar-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bulgarian' (2 aligned documents, 2.3k links, 40.2k tokens)" href="download.php?f=OpenSubtitles2013/bg-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Bosnian' (0.5k links, 9.2k tokens)" href="download.php?f=OpenSubtitles2013/bs-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Czech' (3 aligned documents, 3.8k links, 66.9k tokens)" href="download.php?f=OpenSubtitles2013/cs-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Danish' (2 aligned documents, 2.2k links, 38.9k tokens)" href="download.php?f=OpenSubtitles2013/da-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-German' (3 aligned documents, 3.8k links, 69.9k tokens)" href="download.php?f=OpenSubtitles2013/de-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Greek' (4 aligned documents, 4.5k links, 85.9k tokens)" href="download.php?f=OpenSubtitles2013/el-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (6 aligned documents, 6.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/en-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Spanish' (3 aligned documents, 3.4k links, 62.6k tokens)" href="download.php?f=OpenSubtitles2013/es-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Estonian' (2 aligned documents, 2.5k links, 41.2k tokens)" href="download.php?f=OpenSubtitles2013/et-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Finnish' (2 aligned documents, 2.3k links, 38.9k tokens)" href="download.php?f=OpenSubtitles2013/fi-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-French' (3 aligned documents, 3.3k links, 64.2k tokens)" href="download.php?f=OpenSubtitles2013/fr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hebrew' (4 aligned documents, 4.1k links, 73.4k tokens)" href="download.php?f=OpenSubtitles2013/he-ur.xml.gz">ces</a></td>
<td></td>
<th>ur</th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Croatian' (2 aligned documents, 2.2k links, 40.3k tokens)" href="download.php?f=OpenSubtitles2013/hr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Hungarian' (3 aligned documents, 4.0k links, 64.7k tokens)" href="download.php?f=OpenSubtitles2013/hu-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Italian' (3 aligned documents, 3.3k links, 62.9k tokens)" href="download.php?f=OpenSubtitles2013/it-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Macedonian' (2 aligned documents, 2.1k links, 38.9k tokens)" href="download.php?f=OpenSubtitles2013/mk-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Malay' (3 aligned documents, 3.2k links, 59.5k tokens)" href="download.php?f=OpenSubtitles2013/ms-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Dutch' (2 aligned documents, 2.2k links, 40.8k tokens)" href="download.php?f=OpenSubtitles2013/nl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Polish' (4 aligned documents, 4.4k links, 76.7k tokens)" href="download.php?f=OpenSubtitles2013/pl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Portuguese' (4 aligned documents, 4.4k links, 86.1k tokens)" href="download.php?f=OpenSubtitles2013/pt-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Portuguese' (4 aligned documents, 4.4k links, 80.8k tokens)" href="download.php?f=OpenSubtitles2013/pt_br-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Romanian' (4 aligned documents, 4.5k links, 86.5k tokens)" href="download.php?f=OpenSubtitles2013/ro-ur.xml.gz">ces</a></td>
<th>ur</th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Russian' (3 aligned documents, 2.9k links, 51.9k tokens)" href="download.php?f=OpenSubtitles2013/ru-ur.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovak' (2 aligned documents, 2.5k links, 42.0k tokens)" href="download.php?f=OpenSubtitles2013/sk-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Slovenian' (3 aligned documents, 3.4k links, 61.2k tokens)" href="download.php?f=OpenSubtitles2013/sl-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Albanian' (3 aligned documents, 2.9k links, 54.9k tokens)" href="download.php?f=OpenSubtitles2013/sq-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Serbian' (2 aligned documents, 2.3k links, 40.5k tokens)" href="download.php?f=OpenSubtitles2013/sr-ur.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Swedish' (2 aligned documents, 2.3k links, 40.8k tokens)" href="download.php?f=OpenSubtitles2013/sv-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Turkish' (4 aligned documents, 4.8k links, 79.5k tokens)" href="download.php?f=OpenSubtitles2013/tr-ur.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/ur.raw.tar.gz">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/vi.tar.gz">vi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Arabic' (500 aligned documents, 0.5M links, 8.3M tokens)" href="download.php?f=OpenSubtitles2013/ar-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bulgarian' (522 aligned documents, 0.6M links, 8.8M tokens)" href="download.php?f=OpenSubtitles2013/bg-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bosnian' (69 aligned documents, 79.3k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/bs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Catalan' (21 aligned documents, 19.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Czech' (566 aligned documents, 0.6M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2013/cs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Danish' (372 aligned documents, 0.4M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2013/da-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-German' (319 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2013/de-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Greek' (672 aligned documents, 0.7M links, 11.5M tokens)" href="download.php?f=OpenSubtitles2013/el-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (839 aligned documents, 1.0M links, 15.9M tokens)" href="download.php?f=OpenSubtitles2013/en-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Spanish' (695 aligned documents, 0.8M links, 12.3M tokens)" href="download.php?f=OpenSubtitles2013/es-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Estonian' (369 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2013/et-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Basque' (14 aligned documents, 16.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/eu-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Persian' (4 aligned documents, 2.4k links, 64.6k tokens)" href="download.php?f=OpenSubtitles2013/fa-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Finnish' (455 aligned documents, 0.5M links, 7.4M tokens)" href="download.php?f=OpenSubtitles2013/fi-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-French' (543 aligned documents, 0.6M links, 9.8M tokens)" href="download.php?f=OpenSubtitles2013/fr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hebrew' (495 aligned documents, 0.5M links, 8.6M tokens)" href="download.php?f=OpenSubtitles2013/he-vi.xml.gz">ces</a></td>
<td></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Croatian' (512 aligned documents, 0.6M links, 8.8M tokens)" href="download.php?f=OpenSubtitles2013/hr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hungarian' (504 aligned documents, 0.6M links, 8.4M tokens)" href="download.php?f=OpenSubtitles2013/hu-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Indonesian' (11 aligned documents, 12.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/id-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Icelandic' (90 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2013/is-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Italian' (382 aligned documents, 0.4M links, 6.9M tokens)" href="download.php?f=OpenSubtitles2013/it-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Japanese' (52 aligned documents, 50.7k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/ja-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Korean' (0.8k links, 13.1k tokens)" href="download.php?f=OpenSubtitles2013/ko-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Lithuanian' (53 aligned documents, 76.2k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/lt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Latvian' (24 aligned documents, 31.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/lv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Macedonian' (102 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/mk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malayalam' (2 aligned documents, 0.9k links, 17.0k tokens)" href="download.php?f=OpenSubtitles2013/ml-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malay' (282 aligned documents, 0.3M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2013/ms-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-BokmÃ¥l, Norwegian' (253 aligned documents, 0.3M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2013/nb-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Dutch' (524 aligned documents, 0.6M links, 9.1M tokens)" href="download.php?f=OpenSubtitles2013/nl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Polish' (467 aligned documents, 0.5M links, 8.1M tokens)" href="download.php?f=OpenSubtitles2013/pl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (679 aligned documents, 0.8M links, 12.2M tokens)" href="download.php?f=OpenSubtitles2013/pt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (717 aligned documents, 0.8M links, 12.6M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Romanian' (770 aligned documents, 0.9M links, 13.9M tokens)" href="download.php?f=OpenSubtitles2013/ro-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Russian' (244 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2013/ru-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Sinhala' (29 aligned documents, 31.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/si-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovak' (100 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/sk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovenian' (493 aligned documents, 0.6M links, 8.7M tokens)" href="download.php?f=OpenSubtitles2013/sl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Albanian' (208 aligned documents, 0.2M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2013/sq-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Serbian' (492 aligned documents, 0.6M links, 8.5M tokens)" href="download.php?f=OpenSubtitles2013/sr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Swedish' (359 aligned documents, 0.4M links, 6.3M tokens)" href="download.php?f=OpenSubtitles2013/sv-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Thai' (39 aligned documents, 32.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/th-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Turkish' (590 aligned documents, 0.7M links, 9.6M tokens)" href="download.php?f=OpenSubtitles2013/tr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Ukrainian' (16 aligned documents, 19.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/uk-vi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Vietnamese-Chinese (sample file)" href="OpenSubtitles/v2013/vi-zh_cn_sample.html">view</a></td><td><a rel="nofollow" title="Vietnamese-Chinese (sample file)" href="OpenSubtitles/v2013/vi-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/vi.raw.tar.gz">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/zh.tar.gz">zh</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (1.0k links, 9.1k tokens)" href="download.php?f=OpenSubtitles2013/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (0.9k links, 7.1k tokens)" href="download.php?f=OpenSubtitles2013/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (0.9k links, 7.3k tokens)" href="download.php?f=OpenSubtitles2013/et-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (1.0k links, 7.6k tokens)" href="download.php?f=OpenSubtitles2013/he-zh.xml.gz">ces</a></td>
<td></td>
<th>zh</th>
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
<th>zh</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (1.0k links, 9.2k tokens)" href="download.php?f=OpenSubtitles2013/sq-zh.xml.gz">ces</a></td>
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
<td></td><td></td><th>zh</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/zh_cn.tar.gz">zh_cn</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (838 aligned documents, 0.9M links, 12.8M tokens)" href="download.php?f=OpenSubtitles2013/ar-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (941 aligned documents, 1.0M links, 15.0M tokens)" href="download.php?f=OpenSubtitles2013/bg-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bengali' (1.0k links, 22.3k tokens)" href="download.php?f=OpenSubtitles2013/bn-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (117 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/bs-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (13 aligned documents, 14.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/ca-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (966 aligned documents, 1.0M links, 15.4M tokens)" href="download.php?f=OpenSubtitles2013/cs-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (624 aligned documents, 0.7M links, 11.0M tokens)" href="download.php?f=OpenSubtitles2013/da-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (505 aligned documents, 0.5M links, 8.0M tokens)" href="download.php?f=OpenSubtitles2013/de-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (1,103 aligned documents, 1.1M links, 17.4M tokens)" href="download.php?f=OpenSubtitles2013/el-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (1,518 aligned documents, 1.5M links, 25.9M tokens)" href="download.php?f=OpenSubtitles2013/en-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (1,219 aligned documents, 1.2M links, 19.5M tokens)" href="download.php?f=OpenSubtitles2013/es-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (610 aligned documents, 0.7M links, 10.1M tokens)" href="download.php?f=OpenSubtitles2013/et-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Basque' (30 aligned documents, 33.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/eu-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Persian' (0.5k links, 13.5k tokens)" href="download.php?f=OpenSubtitles2013/fa-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (779 aligned documents, 0.8M links, 11.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (930 aligned documents, 0.9M links, 15.2M tokens)" href="download.php?f=OpenSubtitles2013/fr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (871 aligned documents, 0.9M links, 14.2M tokens)" href="download.php?f=OpenSubtitles2013/he-zh_cn.xml.gz">ces</a></td>
<td></td>
<th>zh_cn</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (873 aligned documents, 0.9M links, 13.9M tokens)" href="download.php?f=OpenSubtitles2013/hr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (857 aligned documents, 0.9M links, 13.3M tokens)" href="download.php?f=OpenSubtitles2013/hu-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Indonesian' (7 aligned documents, 9.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/id-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (103 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2013/is-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (600 aligned documents, 0.6M links, 9.5M tokens)" href="download.php?f=OpenSubtitles2013/it-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (149 aligned documents, 0.1M links, 1.0M tokens)" href="download.php?f=OpenSubtitles2013/ja-zh_cn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (4 aligned documents, 3.7k links, 58.5k tokens)" href="download.php?f=OpenSubtitles2013/ko-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (101 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2013/lt-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (42 aligned documents, 48.5k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2013/lv-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (134 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2013/mk-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malayalam' (0.7k links, 12.8k tokens)" href="download.php?f=OpenSubtitles2013/ml-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (411 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2013/ms-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (339 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2013/nb-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (968 aligned documents, 1.0M links, 15.5M tokens)" href="download.php?f=OpenSubtitles2013/nl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (693 aligned documents, 0.7M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2013/pl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (1,092 aligned documents, 1.1M links, 18.1M tokens)" href="download.php?f=OpenSubtitles2013/pt-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (1,203 aligned documents, 1.2M links, 19.4M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (1,208 aligned documents, 1.3M links, 20.5M tokens)" href="download.php?f=OpenSubtitles2013/ro-zh_cn.xml.gz">ces</a></td>
<th>zh_cn</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (438 aligned documents, 0.4M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2013/ru-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (28 aligned documents, 30.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/si-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (208 aligned documents, 0.2M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2013/sk-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (851 aligned documents, 0.9M links, 13.5M tokens)" href="download.php?f=OpenSubtitles2013/sl-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (288 aligned documents, 0.3M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/sq-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (776 aligned documents, 0.8M links, 12.7M tokens)" href="download.php?f=OpenSubtitles2013/sr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (565 aligned documents, 0.6M links, 9.7M tokens)" href="download.php?f=OpenSubtitles2013/sv-zh_cn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Thai' (77 aligned documents, 39.6k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2013/th-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (1,060 aligned documents, 1.1M links, 15.7M tokens)" href="download.php?f=OpenSubtitles2013/tr-zh_cn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (20 aligned documents, 20.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/uk-zh_cn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Vietnamese' (162 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2013/vi-zh_cn.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Chinese-Chinese (sample file)" href="OpenSubtitles/v2013/zh_cn-zh_tw_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/zh_cn.raw.tar.gz">zh_cn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/zh_tw.tar.gz">zh_tw</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (348 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2013/ar-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (364 aligned documents, 0.4M links, 5.4M tokens)" href="download.php?f=OpenSubtitles2013/bg-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bengali' (0.5k links, 9.6k tokens)" href="download.php?f=OpenSubtitles2013/bn-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (32 aligned documents, 31.7k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/bs-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (7 aligned documents, 6.1k links, 99.9k tokens)" href="download.php?f=OpenSubtitles2013/ca-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (380 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2013/cs-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (246 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2013/da-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (228 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2013/de-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (461 aligned documents, 0.4M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2013/el-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (671 aligned documents, 0.6M links, 10.2M tokens)" href="download.php?f=OpenSubtitles2013/en-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (555 aligned documents, 0.5M links, 7.8M tokens)" href="download.php?f=OpenSubtitles2013/es-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (279 aligned documents, 0.3M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2013/et-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Basque' (20 aligned documents, 21.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/eu-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (271 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2013/fi-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (428 aligned documents, 0.4M links, 6.1M tokens)" href="download.php?f=OpenSubtitles2013/fr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (385 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2013/he-zh_tw.xml.gz">ces</a></td>
<td></td>
<th>zh_tw</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (351 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2013/hr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (392 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/hu-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Indonesian' (7 aligned documents, 7.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2013/id-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (66 aligned documents, 78.0k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/is-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (287 aligned documents, 0.2M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2013/it-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (108 aligned documents, 64.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2013/ja-zh_tw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Korean' (2 aligned documents, 1.7k links, 19.4k tokens)" href="download.php?f=OpenSubtitles2013/ko-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (52 aligned documents, 64.2k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2013/lt-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (21 aligned documents, 25.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/lv-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (65 aligned documents, 75.5k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2013/mk-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (177 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2013/ms-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-BokmÃ¥l, Norwegian' (160 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2013/nb-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (351 aligned documents, 0.3M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2013/nl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (277 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2013/pl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (439 aligned documents, 0.4M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2013/pt-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (518 aligned documents, 0.5M links, 7.4M tokens)" href="download.php?f=OpenSubtitles2013/pt_br-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (494 aligned documents, 0.5M links, 7.9M tokens)" href="download.php?f=OpenSubtitles2013/ro-zh_tw.xml.gz">ces</a></td>
<th>zh_tw</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (263 aligned documents, 0.2M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2013/ru-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (15 aligned documents, 17.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/si-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (78 aligned documents, 81.4k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2013/sk-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (381 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2013/sl-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (139 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2013/sq-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Serbian' (331 aligned documents, 0.3M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2013/sr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (218 aligned documents, 0.2M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2013/sv-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swahili' (0.4k links, 14.4k tokens)" href="download.php?f=OpenSubtitles2013/sw-zh_tw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Thai' (65 aligned documents, 31.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2013/th-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (445 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2013/tr-zh_tw.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (11 aligned documents, 10.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2013/uk-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Vietnamese' (75 aligned documents, 85.4k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2013/vi-zh_tw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Chinese' (246 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2013/zh_cn-zh_tw.xml.gz">ces</a></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=OpenSubtitles2013/zh_tw.raw.tar.gz">zh_tw</a></th></tr>
<tr><th></th>
<th>af</th>
<th>ar</th>
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
<th>he</th>
<th>hi</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>hy</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ml</th>
<th>ms</th>
<th>nb</th>
<th>nl</th>
<th>pl</th>
<th>pt</th>
<th>pt_br</th>
<th>ro</th>
<th></th>
<th>ru</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>sw</th>
<th>ta</th>
<th>te</th>
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
<p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.af.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ar.gz">ar</a>
</th><th>be</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.bn.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.bs.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.da.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.et.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.eu.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fa plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.fa.gz">fa</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.he.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.hi.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.hr.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.hu.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hy plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.hy.gz">hy</a>
</th><th><a rel="nofollow" title='monolingual tokenized id plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.id.gz">id</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.is.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ja.gz">ja</a>
</th><th>ka</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.kk.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ko.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.lt.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.lv.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized mk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.mk.gz">mk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ml.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized ms plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ms.gz">ms</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.nb.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt_br plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.pt_br.gz">pt_br</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized si plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.si.gz">si</a>
</th><th><a rel="nofollow" title='monolingual tokenized sk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sk.gz">sk</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sl.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sq.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sr.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sv.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized sw plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.sw.gz">sw</a>
</th><th><a rel="nofollow" title='monolingual tokenized ta plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ta.gz">ta</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.te.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.th.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.tr.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.uk.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.ur.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.vi.gz">vi</a>
</th><th>zh</th><th><a rel="nofollow" title='monolingual tokenized zh_cn plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.zh_cn.gz">zh_cn</a>
</th><th><a rel="nofollow" title='monolingual tokenized zh_tw plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.zh_tw.gz">zh_tw</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.af.gz">af</a>
</th><td>1</td> <td>4.2k</td> <td>0.6k</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Bulgarian (607 sentence pairs, 11.63k words) - TMX format' href="download.php?f=OpenSubtitles2013/af-bg.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Czech (607 sentence pairs, 10.90k words) - TMX format' href="download.php?f=OpenSubtitles2013/af-cs.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Spanish (648 sentence pairs, 11.88k words) - TMX format' href="download.php?f=OpenSubtitles2013/af-es.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Macedonian (611 sentence pairs, 11.25k words) - TMX format' href="download.php?f=OpenSubtitles2013/af-mk.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ar.gz">ar</a>
</th><td>19,561</td> <td>92.3M</td> <td>14.0M</td><td></td><td></td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Arabic-Bulgarian (5,631,384 sentence pairs, 74.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-bg.tmx.gz">5.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Bengali (1,783 sentence pairs, 29.96k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-bn.tmx.gz">1.8k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Arabic-Bosnian (733,981 sentence pairs, 9.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-bs.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Arabic-Catalan (76,571 sentence pairs, 1.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ca.tmx.gz">76.6k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Arabic-Czech (5,890,199 sentence pairs, 77.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-cs.tmx.gz">5.9M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Arabic-Danish (2,815,565 sentence pairs, 38.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-da.tmx.gz">2.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Arabic-German (1,735,481 sentence pairs, 23.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-de.tmx.gz">1.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Arabic-Greek (6,518,865 sentence pairs, 90.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-el.tmx.gz">6.5M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Arabic-English (8,208,780 sentence pairs, 118.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-en.tmx.gz">8.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Arabic-Spanish (7,325,731 sentence pairs, 103.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-es.tmx.gz">7.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Arabic-Estonian (2,489,274 sentence pairs, 32.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-et.tmx.gz">2.5M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Arabic-Basque (82,409 sentence pairs, 1.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-eu.tmx.gz">82.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Arabic-Persian (2,080 sentence pairs, 46.66k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-fa.tmx.gz">2.1k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Arabic-Finnish (3,507,306 sentence pairs, 41.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-fi.tmx.gz">3.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Arabic-French (5,883,006 sentence pairs, 84.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-fr.tmx.gz">5.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Arabic-Hebrew (5,629,896 sentence pairs, 69.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-he.tmx.gz">5.6M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Arabic-Hindi (1,985 sentence pairs, 43.06k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-hi.tmx.gz">2.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Arabic-Croatian (5,085,258 sentence pairs, 66.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-hr.tmx.gz">5.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Arabic-Hungarian (5,837,945 sentence pairs, 73.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-hu.tmx.gz">5.8M</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Arabic-Indonesian (35,906 sentence pairs, 0.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-id.tmx.gz">35.9k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Arabic-Icelandic (527,217 sentence pairs, 7.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-is.tmx.gz">0.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Arabic-Italian (4,400,292 sentence pairs, 61.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-it.tmx.gz">4.4M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Arabic-Japanese (279,821 sentence pairs, 2.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ja.tmx.gz">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Arabic-Korean (14,992 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ko.tmx.gz">15.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Arabic-Lithuanian (312,760 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Arabic-Latvian (151,885 sentence pairs, 1.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Arabic-Macedonian (459,994 sentence pairs, 6.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Malayalam (948 sentence pairs, 12.66k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ml.tmx.gz">0.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Arabic-Malay (1,191,025 sentence pairs, 15.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ms.tmx.gz">1.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Arabic-BokmÃ¥l, Norwegian (1,239,800 sentence pairs, 16.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-nb.tmx.gz">1.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Arabic-Dutch (5,572,454 sentence pairs, 80.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-nl.tmx.gz">5.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Arabic-Polish (3,365,545 sentence pairs, 42.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-pl.tmx.gz">3.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Arabic-Portuguese (6,028,384 sentence pairs, 83.61M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-pt.tmx.gz">6.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Arabic-Portuguese (7,371,288 sentence pairs, 100.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-pt_br.tmx.gz">7.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Arabic-Romanian (7,467,768 sentence pairs, 104.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ro.tmx.gz">7.5M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Arabic-Russian (2,389,578 sentence pairs, 31.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ru.tmx.gz">2.4M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Arabic-Sinhala (90,958 sentence pairs, 1.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-si.tmx.gz">91.0k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Arabic-Slovak (1,092,254 sentence pairs, 14.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Arabic-Slovenian (3,973,292 sentence pairs, 50.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-sl.tmx.gz">4.0M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Arabic-Albanian (955,688 sentence pairs, 13.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Arabic-Serbian (4,432,708 sentence pairs, 59.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-sr.tmx.gz">4.4M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Arabic-Swedish (2,687,932 sentence pairs, 36.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-sv.tmx.gz">2.7M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Tamil (728 sentence pairs, 12.35k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ta.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Arabic-Telugu (1,193 sentence pairs, 19.11k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-te.tmx.gz">1.2k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Arabic-Thai (671,274 sentence pairs, 5.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-th.tmx.gz">0.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Arabic-Turkish (6,323,587 sentence pairs, 77.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-tr.tmx.gz">6.3M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Arabic-Ukrainian (45,791 sentence pairs, 0.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-uk.tmx.gz">45.8k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Arabic-Urdu (3,727 sentence pairs, 62.47k words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-ur.tmx.gz">3.7k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Arabic-Vietnamese (426,790 sentence pairs, 6.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Arabic-Chinese (747,940 sentence pairs, 5.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-zh_cn.tmx.gz">0.7M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Arabic-Chinese (316,444 sentence pairs, 2.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/ar-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th>be</th><td>0</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.bg.gz">bg</a>
</th><td>25,370</td> <td>139.6M</td> <td>20.9M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Afrikaans (644 sentence pairs, 12.11k words) - Moses format' href="download.php?f=OpenSubtitles2013/af-bg.txt.zip">0.6k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Arabic (6,180,718 sentence pairs, 78.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-bg.txt.zip">6.2M</a>
</td><td></td><td></td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Bosnian (959,108 sentence pairs, 11.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-bs.tmx.gz">1.0M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Bulgarian-Catalan (80,671 sentence pairs, 1.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ca.tmx.gz">80.7k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Czech (7,914,936 sentence pairs, 97.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-cs.tmx.gz">7.9M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Bulgarian-Danish (3,072,525 sentence pairs, 39.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-da.tmx.gz">3.1M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Bulgarian-German (2,349,914 sentence pairs, 29.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-de.tmx.gz">2.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Bulgarian-Greek (8,613,730 sentence pairs, 114.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-el.tmx.gz">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (12,540,004 sentence pairs, 169.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-en.tmx.gz">12.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Spanish (10,310,096 sentence pairs, 138.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-es.tmx.gz">10.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Bulgarian-Estonian (2,778,541 sentence pairs, 32.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-et.tmx.gz">2.8M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Bulgarian-Basque (108,204 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bulgarian-Persian (1,570 sentence pairs, 55.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-fa.tmx.gz">1.6k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Finnish (4,613,499 sentence pairs, 50.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-fi.tmx.gz">4.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bulgarian-French (7,779,700 sentence pairs, 105.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-fr.tmx.gz">7.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Hebrew (5,922,274 sentence pairs, 78.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-he.tmx.gz">5.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Hindi (287 sentence pairs, 5.31k words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-hi.tmx.gz">0.3k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Croatian (6,632,966 sentence pairs, 81.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-hr.tmx.gz">6.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Hungarian (8,081,781 sentence pairs, 95.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-hu.tmx.gz">8.1M</a>
</td><td></td><td bgcolor="#fff7ef"><a rel="nofollow" title='Bulgarian-Indonesian (40,574 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-id.tmx.gz">40.6k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bulgarian-Icelandic (647,112 sentence pairs, 7.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-is.tmx.gz">0.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Italian (5,877,275 sentence pairs, 78.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-it.tmx.gz">5.9M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Bulgarian-Japanese (275,560 sentence pairs, 2.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ja.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Kazakh (1,123 sentence pairs, 10.78k words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Bulgarian-Korean (11,741 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ko.tmx.gz">11.7k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bulgarian-Lithuanian (350,596 sentence pairs, 3.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Bulgarian-Latvian (137,084 sentence pairs, 1.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Bulgarian-Macedonian (473,138 sentence pairs, 5.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Malayalam (824 sentence pairs, 11.76k words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ml.tmx.gz">0.8k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Bulgarian-Malay (1,347,306 sentence pairs, 15.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ms.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bulgarian-BokmÃ¥l, Norwegian (1,396,325 sentence pairs, 17.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-nb.tmx.gz">1.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Dutch (7,147,657 sentence pairs, 96.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-nl.tmx.gz">7.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Polish (4,351,270 sentence pairs, 51.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-pl.tmx.gz">4.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bulgarian-Portuguese (7,882,840 sentence pairs, 101.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-pt.tmx.gz">7.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Portuguese (10,576,818 sentence pairs, 135.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-pt_br.tmx.gz">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-Romanian (10,863,020 sentence pairs, 141.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ro.tmx.gz">10.9M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Bulgarian-Russian (3,018,811 sentence pairs, 37.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ru.tmx.gz">3.0M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Bulgarian-Sinhala (83,993 sentence pairs, 1.05M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-si.tmx.gz">84.0k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bulgarian-Slovak (1,353,912 sentence pairs, 16.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Slovenian (4,926,961 sentence pairs, 57.61M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-sl.tmx.gz">4.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bulgarian-Albanian (1,134,300 sentence pairs, 14.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Serbian (6,158,855 sentence pairs, 76.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-sr.tmx.gz">6.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Bulgarian-Swedish (3,033,447 sentence pairs, 38.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-sv.tmx.gz">3.0M</a>
</td><td></td><td></td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bulgarian-Thai (519,234 sentence pairs, 4.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-th.tmx.gz">0.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Turkish (8,286,250 sentence pairs, 94.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-tr.tmx.gz">8.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bulgarian-Ukrainian (72,560 sentence pairs, 0.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-uk.tmx.gz">72.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bulgarian-Urdu (1,980 sentence pairs, 33.98k words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Bulgarian-Vietnamese (482,717 sentence pairs, 6.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bulgarian-Chinese (817,386 sentence pairs, 6.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Bulgarian-Chinese (311,168 sentence pairs, 2.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/bg-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.bn.gz">bn</a>
</th><td>7</td> <td>85.7k</td> <td>4.4k</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bengali-Arabic (1,835 sentence pairs, 30.09k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-bn.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Czech (1,354 sentence pairs, 15.25k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-cs.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Danish (1,368 sentence pairs, 16.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-da.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-German (1,403 sentence pairs, 17.11k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-de.tmx.gz">1.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-English (1,426 sentence pairs, 17.42k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-en.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Spanish (1,272 sentence pairs, 15.86k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-es.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Estonian (1,220 sentence pairs, 15.06k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-et.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bengali-Persian (193 sentence pairs, 8.72k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-fa.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Finnish (1,409 sentence pairs, 15.57k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-fi.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bengali-French (284 sentence pairs, 8.14k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-fr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-BokmÃ¥l, Norwegian (1,071 sentence pairs, 15.87k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-nb.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Dutch (1,363 sentence pairs, 16.10k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-nl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bengali-Polish (1,125 sentence pairs, 13.71k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-pl.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Portuguese (1,404 sentence pairs, 16.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-pt.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Portuguese (1,427 sentence pairs, 17.74k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-pt_br.tmx.gz">1.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Serbian (1,220 sentence pairs, 15.35k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-sr.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Swedish (1,080 sentence pairs, 15.79k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-sv.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bengali-Turkish (1,262 sentence pairs, 14.85k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-tr.tmx.gz">1.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bengali-Chinese (734 sentence pairs, 10.64k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-zh_cn.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-Chinese (294 sentence pairs, 4.87k words) - TMX format' href="download.php?f=OpenSubtitles2013/bn-zh_tw.tmx.gz">0.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.bs.gz">bs</a>
</th><td>2,859</td> <td>14.1M</td> <td>2.2M</td><td></td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Bosnian-Arabic (779,106 sentence pairs, 9.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-bs.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Bulgarian (1,062,312 sentence pairs, 12.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-bs.txt.zip">1.1M</a>
</td><td></td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Bosnian-Catalan (14,180 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ca.tmx.gz">14.2k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Czech (973,749 sentence pairs, 11.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-cs.tmx.gz">1.0M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Bosnian-Danish (416,985 sentence pairs, 5.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-da.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bosnian-German (307,556 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-de.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Greek (1,160,166 sentence pairs, 14.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-el.tmx.gz">1.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bosnian-English (1,560,832 sentence pairs, 20.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-en.tmx.gz">1.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Bosnian-Spanish (1,239,809 sentence pairs, 15.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-es.tmx.gz">1.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bosnian-Estonian (424,048 sentence pairs, 4.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-et.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Basque (13,525 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-eu.tmx.gz">13.5k</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Bosnian-Finnish (650,777 sentence pairs, 6.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-fi.tmx.gz">0.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-French (985,606 sentence pairs, 12.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-fr.tmx.gz">1.0M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bosnian-Hebrew (820,033 sentence pairs, 10.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-he.tmx.gz">0.8M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bosnian-Hindi (412 sentence pairs, 7.24k words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-hi.tmx.gz">0.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Bosnian-Croatian (646,002 sentence pairs, 7.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-hr.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bosnian-Hungarian (918,064 sentence pairs, 10.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-hu.tmx.gz">0.9M</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Indonesian (8,538 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-id.tmx.gz">8.5k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Bosnian-Icelandic (99,869 sentence pairs, 1.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-is.tmx.gz">99.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Italian (681,164 sentence pairs, 8.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-it.tmx.gz">0.7M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Bosnian-Japanese (31,240 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ja.tmx.gz">31.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bosnian-Lithuanian (48,790 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-lt.tmx.gz">48.8k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Bosnian-Latvian (13,447 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-lv.tmx.gz">13.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Bosnian-Macedonian (88,023 sentence pairs, 1.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-mk.tmx.gz">88.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Malayalam (275 sentence pairs, 3.02k words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ml.tmx.gz">0.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Bosnian-Malay (222,669 sentence pairs, 2.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Bosnian-BokmÃ¥l, Norwegian (183,004 sentence pairs, 2.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Dutch (882,945 sentence pairs, 11.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-nl.tmx.gz">0.9M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bosnian-Polish (546,608 sentence pairs, 6.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-pl.tmx.gz">0.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bosnian-Portuguese (1,094,036 sentence pairs, 13.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-pt.tmx.gz">1.1M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Portuguese (1,336,332 sentence pairs, 16.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-pt_br.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bosnian-Romanian (1,373,447 sentence pairs, 17.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ro.tmx.gz">1.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bosnian-Russian (301,488 sentence pairs, 3.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Bosnian-Sinhala (4,948 sentence pairs, 65.71k words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-si.tmx.gz">4.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Bosnian-Slovak (156,040 sentence pairs, 1.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Slovenian (741,912 sentence pairs, 8.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Bosnian-Albanian (206,130 sentence pairs, 2.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bosnian-Serbian (566,356 sentence pairs, 6.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bosnian-Swedish (392,446 sentence pairs, 4.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-sv.tmx.gz">0.4M</a>
</td><td></td><td></td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Bosnian-Thai (62,629 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-th.tmx.gz">62.6k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Turkish (1,021,781 sentence pairs, 11.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-tr.tmx.gz">1.0M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Bosnian-Ukrainian (7,734 sentence pairs, 90.06k words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-uk.tmx.gz">7.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bosnian-Urdu (375 sentence pairs, 7.69k words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-ur.tmx.gz">0.4k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Bosnian-Vietnamese (68,798 sentence pairs, 0.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-vi.tmx.gz">68.8k</a>
</td><td></td><td bgcolor="#fffdf0"><a rel="nofollow" title='Bosnian-Chinese (104,715 sentence pairs, 0.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-zh_cn.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Bosnian-Chinese (27,790 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/bs-zh_tw.tmx.gz">27.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ca.gz">ca</a>
</th><td>149</td> <td>0.8M</td> <td>0.1M</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Catalan-Arabic (78,746 sentence pairs, 1.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ca.txt.zip">78.7k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Catalan-Bulgarian (85,404 sentence pairs, 1.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ca.txt.zip">85.4k</a>
</td><td></td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Catalan-Bosnian (14,566 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ca.txt.zip">14.6k</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Catalan-Czech (90,216 sentence pairs, 1.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-cs.tmx.gz">90.2k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-Danish (53,623 sentence pairs, 0.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-da.tmx.gz">53.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Catalan-German (63,657 sentence pairs, 0.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-de.tmx.gz">63.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Catalan-Greek (99,790 sentence pairs, 1.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-el.tmx.gz">99.8k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Catalan-English (122,161 sentence pairs, 1.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-en.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Catalan-Spanish (105,153 sentence pairs, 1.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-es.tmx.gz">0.1M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Catalan-Estonian (56,177 sentence pairs, 0.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-et.tmx.gz">56.2k</a>
</td><td></td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='Catalan-Finnish (47,053 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-fi.tmx.gz">47.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Catalan-French (96,815 sentence pairs, 1.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-fr.tmx.gz">96.8k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Catalan-Hebrew (73,910 sentence pairs, 0.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-he.tmx.gz">73.9k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Catalan-Croatian (88,173 sentence pairs, 1.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-hr.tmx.gz">88.2k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Catalan-Hungarian (92,718 sentence pairs, 1.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-hu.tmx.gz">92.7k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Indonesian (3,812 sentence pairs, 50.22k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-id.tmx.gz">3.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Catalan-Icelandic (3,686 sentence pairs, 55.16k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-is.tmx.gz">3.7k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Catalan-Italian (88,841 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-it.tmx.gz">88.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Catalan-Japanese (21,702 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-ja.tmx.gz">21.7k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Korean (724 sentence pairs, 9.45k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-ko.tmx.gz">0.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-Lithuanian (6,919 sentence pairs, 88.25k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-lt.tmx.gz">6.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Catalan-Latvian (1,243 sentence pairs, 19.21k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-lv.tmx.gz">1.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-Macedonian (6,469 sentence pairs, 92.90k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-mk.tmx.gz">6.5k</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Catalan-Malay (25,396 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-ms.tmx.gz">25.4k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Catalan-BokmÃ¥l, Norwegian (30,923 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-nb.tmx.gz">30.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Catalan-Dutch (81,026 sentence pairs, 1.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-nl.tmx.gz">81.0k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Catalan-Polish (52,297 sentence pairs, 0.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-pl.tmx.gz">52.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Catalan-Portuguese (90,753 sentence pairs, 1.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-pt.tmx.gz">90.8k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Catalan-Portuguese (106,952 sentence pairs, 1.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Catalan-Romanian (106,286 sentence pairs, 1.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-Russian (62,094 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-ru.tmx.gz">62.1k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Catalan-Slovak (17,281 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-sk.tmx.gz">17.3k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Catalan-Slovenian (74,679 sentence pairs, 0.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-sl.tmx.gz">74.7k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Catalan-Albanian (17,264 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-sq.tmx.gz">17.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-Serbian (61,295 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-sr.tmx.gz">61.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Catalan-Swedish (52,002 sentence pairs, 0.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-sv.tmx.gz">52.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Catalan-Thai (22,372 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-th.tmx.gz">22.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Catalan-Turkish (90,238 sentence pairs, 1.05M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-tr.tmx.gz">90.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Ukrainian (1,126 sentence pairs, 14.05k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-uk.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Catalan-Vietnamese (17,400 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-vi.tmx.gz">17.4k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Catalan-Chinese (12,418 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-zh_cn.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Catalan-Chinese (5,484 sentence pairs, 50.18k words) - TMX format' href="download.php?f=OpenSubtitles2013/ca-zh_tw.tmx.gz">5.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.cs.gz">cs</a>
</th><td>29,962</td> <td>154.0M</td> <td>23.4M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Afrikaans (642 sentence pairs, 11.40k words) - Moses format' href="download.php?f=OpenSubtitles2013/af-cs.txt.zip">0.6k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Arabic (6,513,770 sentence pairs, 82.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-cs.txt.zip">6.5M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-Bulgarian (9,480,111 sentence pairs, 107.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-cs.txt.zip">9.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Bengali (1,415 sentence pairs, 15.42k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-cs.txt.zip">1.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Czech-Bosnian (1,083,266 sentence pairs, 11.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-cs.txt.zip">1.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Czech-Catalan (96,451 sentence pairs, 1.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-cs.txt.zip">96.5k</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Czech-Danish (3,347,551 sentence pairs, 41.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-da.tmx.gz">3.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Czech-German (2,676,774 sentence pairs, 32.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-de.tmx.gz">2.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Czech-Greek (9,334,678 sentence pairs, 121.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-el.tmx.gz">9.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (13,312,910 sentence pairs, 176.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-en.tmx.gz">13.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Spanish (11,331,753 sentence pairs, 149.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-es.tmx.gz">11.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Czech-Estonian (3,034,164 sentence pairs, 34.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-et.tmx.gz">3.0M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Czech-Basque (113,167 sentence pairs, 1.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Persian (1,084 sentence pairs, 17.94k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-fa.tmx.gz">1.1k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Czech-Finnish (4,796,144 sentence pairs, 51.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-fi.tmx.gz">4.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-French (8,351,928 sentence pairs, 111.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-fr.tmx.gz">8.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Hebrew (6,486,296 sentence pairs, 84.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-he.tmx.gz">6.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Hindi (875 sentence pairs, 16.52k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-hi.tmx.gz">0.9k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Croatian (7,253,059 sentence pairs, 87.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-hr.tmx.gz">7.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Hungarian (8,783,198 sentence pairs, 100.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-hu.tmx.gz">8.8M</a>
</td><td></td><td bgcolor="#fff7ef"><a rel="nofollow" title='Czech-Indonesian (41,854 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-id.tmx.gz">41.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Czech-Icelandic (732,886 sentence pairs, 8.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Italian (6,544,007 sentence pairs, 85.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-it.tmx.gz">6.5M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Czech-Japanese (303,688 sentence pairs, 2.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ja.tmx.gz">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Czech-Korean (13,118 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ko.tmx.gz">13.1k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Czech-Lithuanian (375,370 sentence pairs, 3.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Czech-Latvian (170,931 sentence pairs, 1.89M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Czech-Macedonian (513,469 sentence pairs, 6.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Malayalam (538 sentence pairs, 5.84k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ml.tmx.gz">0.5k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Czech-Malay (1,389,634 sentence pairs, 15.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ms.tmx.gz">1.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (1,589,038 sentence pairs, 18.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Dutch (7,610,436 sentence pairs, 100.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-nl.tmx.gz">7.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Czech-Polish (4,657,694 sentence pairs, 53.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-pl.tmx.gz">4.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Czech-Portuguese (8,493,604 sentence pairs, 106.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-pt.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Portuguese (11,543,692 sentence pairs, 144.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-pt_br.tmx.gz">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-Romanian (11,034,796 sentence pairs, 140.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ro.tmx.gz">11.0M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Czech-Russian (2,970,623 sentence pairs, 36.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ru.tmx.gz">3.0M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Czech-Sinhala (81,226 sentence pairs, 1.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-si.tmx.gz">81.2k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Czech-Slovak (1,422,235 sentence pairs, 16.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Czech-Slovenian (5,243,674 sentence pairs, 59.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-sl.tmx.gz">5.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Albanian (1,155,817 sentence pairs, 14.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Serbian (6,370,772 sentence pairs, 77.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-sr.tmx.gz">6.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Czech-Swedish (3,370,044 sentence pairs, 41.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-sv.tmx.gz">3.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Tamil (591 sentence pairs, 8.84k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ta.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Telugu (1,078 sentence pairs, 16.68k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-te.tmx.gz">1.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Czech-Thai (620,528 sentence pairs, 5.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Turkish (8,795,893 sentence pairs, 97.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-tr.tmx.gz">8.8M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Czech-Ukrainian (83,251 sentence pairs, 0.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-uk.tmx.gz">83.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Czech-Urdu (3,114 sentence pairs, 53.30k words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-ur.tmx.gz">3.1k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Czech-Vietnamese (552,618 sentence pairs, 7.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-vi.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Czech-Chinese (859,098 sentence pairs, 6.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-zh_cn.tmx.gz">0.9M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Czech-Chinese (344,077 sentence pairs, 2.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/cs-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.da.gz">da</a>
</th><td>6,410</td> <td>39.6M</td> <td>5.8M</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Danish-Arabic (3,009,736 sentence pairs, 39.93M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-da.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Danish-Bulgarian (3,490,947 sentence pairs, 41.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-da.txt.zip">3.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Danish-Bengali (1,429 sentence pairs, 16.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-da.txt.zip">1.4k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Danish-Bosnian (445,898 sentence pairs, 5.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-da.txt.zip">0.4M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Danish-Catalan (56,432 sentence pairs, 0.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-da.txt.zip">56.4k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Czech (3,845,673 sentence pairs, 44.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-da.txt.zip">3.8M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Danish-German (1,417,591 sentence pairs, 18.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-de.tmx.gz">1.4M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Greek (3,838,757 sentence pairs, 51.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-el.tmx.gz">3.8M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Danish-English (5,224,571 sentence pairs, 71.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-en.tmx.gz">5.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-Spanish (4,163,410 sentence pairs, 56.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-es.tmx.gz">4.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Danish-Estonian (1,795,226 sentence pairs, 21.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-et.tmx.gz">1.8M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Danish-Basque (71,075 sentence pairs, 0.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-eu.tmx.gz">71.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Danish-Persian (1,298 sentence pairs, 26.35k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-fa.tmx.gz">1.3k</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Danish-Finnish (3,045,590 sentence pairs, 33.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-fi.tmx.gz">3.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-French (3,190,178 sentence pairs, 43.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-fr.tmx.gz">3.2M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Danish-Hebrew (2,868,000 sentence pairs, 38.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-he.tmx.gz">2.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Hindi (282 sentence pairs, 5.64k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-hi.tmx.gz">0.3k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Danish-Croatian (3,189,772 sentence pairs, 39.85M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-hr.tmx.gz">3.2M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Danish-Hungarian (3,240,524 sentence pairs, 38.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-hu.tmx.gz">3.2M</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Danish-Indonesian (37,070 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-id.tmx.gz">37.1k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Danish-Icelandic (525,424 sentence pairs, 6.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-is.tmx.gz">0.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Danish-Italian (2,157,449 sentence pairs, 28.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-it.tmx.gz">2.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Danish-Japanese (187,838 sentence pairs, 1.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ja.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Kazakh (1,160 sentence pairs, 11.65k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-kk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Danish-Korean (7,770 sentence pairs, 90.13k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ko.tmx.gz">7.8k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Danish-Lithuanian (269,645 sentence pairs, 3.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Danish-Latvian (92,565 sentence pairs, 1.05M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-lv.tmx.gz">92.6k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Danish-Macedonian (355,059 sentence pairs, 4.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Malayalam (692 sentence pairs, 11.09k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Danish-Malay (991,109 sentence pairs, 12.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ms.tmx.gz">1.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Danish-BokmÃ¥l, Norwegian (1,578,692 sentence pairs, 19.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-nb.tmx.gz">1.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Dutch (3,277,775 sentence pairs, 44.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-nl.tmx.gz">3.3M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Danish-Polish (2,082,081 sentence pairs, 25.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-pl.tmx.gz">2.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Danish-Portuguese (3,904,828 sentence pairs, 51.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-pt.tmx.gz">3.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Danish-Portuguese (4,269,208 sentence pairs, 55.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-pt_br.tmx.gz">4.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Danish-Romanian (4,611,623 sentence pairs, 61.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ro.tmx.gz">4.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Danish-Russian (1,289,232 sentence pairs, 16.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ru.tmx.gz">1.3M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Danish-Sinhala (77,573 sentence pairs, 1.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-si.tmx.gz">77.6k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Danish-Slovak (655,507 sentence pairs, 8.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Danish-Slovenian (2,846,574 sentence pairs, 34.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-sl.tmx.gz">2.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Albanian (843,990 sentence pairs, 11.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-sq.tmx.gz">0.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Danish-Serbian (2,579,155 sentence pairs, 32.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-sr.tmx.gz">2.6M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Danish-Swedish (2,357,184 sentence pairs, 29.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-sv.tmx.gz">2.4M</a>
</td><td></td><td></td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Danish-Thai (240,019 sentence pairs, 2.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-th.tmx.gz">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Danish-Turkish (3,652,514 sentence pairs, 42.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-tr.tmx.gz">3.7M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Danish-Ukrainian (42,315 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-uk.tmx.gz">42.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Danish-Urdu (1,910 sentence pairs, 33.74k words) - TMX format' href="download.php?f=OpenSubtitles2013/da-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Danish-Vietnamese (360,793 sentence pairs, 5.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Danish-Chinese (593,716 sentence pairs, 5.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-zh_cn.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Danish-Chinese (230,825 sentence pairs, 1.98M words) - TMX format' href="download.php?f=OpenSubtitles2013/da-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.de.gz">de</a>
</th><td>6,537</td> <td>44.4M</td> <td>6.6M</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='German-Arabic (1,822,900 sentence pairs, 24.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-de.txt.zip">1.8M</a>
</td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Bulgarian (2,609,284 sentence pairs, 30.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-de.txt.zip">2.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Bengali (1,496 sentence pairs, 17.36k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-de.txt.zip">1.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='German-Bosnian (324,490 sentence pairs, 3.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-de.txt.zip">0.3M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='German-Catalan (67,131 sentence pairs, 0.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-de.txt.zip">67.1k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='German-Czech (3,028,435 sentence pairs, 34.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-de.txt.zip">3.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='German-Danish (1,566,705 sentence pairs, 19.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-de.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='German-Greek (3,010,968 sentence pairs, 39.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-el.tmx.gz">3.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='German-English (4,399,547 sentence pairs, 58.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-en.tmx.gz">4.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='German-Spanish (3,466,524 sentence pairs, 45.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-es.tmx.gz">3.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Estonian (1,246,493 sentence pairs, 14.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-et.tmx.gz">1.2M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='German-Basque (47,313 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-eu.tmx.gz">47.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Persian (650 sentence pairs, 14.31k words) - TMX format' href="download.php?f=OpenSubtitles2013/de-fa.tmx.gz">0.7k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='German-Finnish (2,021,653 sentence pairs, 22.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-fi.tmx.gz">2.0M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='German-French (2,960,415 sentence pairs, 39.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-fr.tmx.gz">3.0M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='German-Hebrew (1,906,829 sentence pairs, 25.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-he.tmx.gz">1.9M</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='German-Croatian (2,251,560 sentence pairs, 27.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-hr.tmx.gz">2.3M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='German-Hungarian (2,583,574 sentence pairs, 30.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-hu.tmx.gz">2.6M</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='German-Indonesian (24,810 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-id.tmx.gz">24.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='German-Icelandic (397,767 sentence pairs, 4.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-is.tmx.gz">0.4M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='German-Italian (1,899,170 sentence pairs, 24.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-it.tmx.gz">1.9M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='German-Japanese (107,646 sentence pairs, 1.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ja.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Kazakh (2,205 sentence pairs, 23.43k words) - TMX format' href="download.php?f=OpenSubtitles2013/de-kk.tmx.gz">2.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='German-Korean (7,702 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ko.tmx.gz">7.7k</a>
</td><td bgcolor="#fcffdd"><a rel="nofollow" title='German-Lithuanian (181,090 sentence pairs, 2.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='German-Latvian (77,107 sentence pairs, 0.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-lv.tmx.gz">77.1k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='German-Macedonian (257,561 sentence pairs, 3.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Malayalam (402 sentence pairs, 7.67k words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ml.tmx.gz">0.4k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='German-Malay (629,928 sentence pairs, 7.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ms.tmx.gz">0.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (856,377 sentence pairs, 10.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-nb.tmx.gz">0.9M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='German-Dutch (2,413,499 sentence pairs, 32.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-nl.tmx.gz">2.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='German-Polish (1,953,418 sentence pairs, 23.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-pl.tmx.gz">2.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='German-Portuguese (2,783,212 sentence pairs, 35.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-pt.tmx.gz">2.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='German-Portuguese (3,483,757 sentence pairs, 44.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-pt_br.tmx.gz">3.5M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='German-Romanian (3,184,734 sentence pairs, 41.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ro.tmx.gz">3.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Russian (1,203,914 sentence pairs, 14.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ru.tmx.gz">1.2M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='German-Sinhala (31,840 sentence pairs, 0.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-si.tmx.gz">31.8k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='German-Slovak (457,248 sentence pairs, 5.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='German-Slovenian (1,946,009 sentence pairs, 23.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='German-Albanian (489,271 sentence pairs, 6.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='German-Serbian (2,121,432 sentence pairs, 26.37M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-sr.tmx.gz">2.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='German-Swedish (1,497,396 sentence pairs, 19.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-sv.tmx.gz">1.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='German-Thai (131,713 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-th.tmx.gz">0.1M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Turkish (2,750,791 sentence pairs, 31.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-tr.tmx.gz">2.8M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='German-Ukrainian (45,703 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-uk.tmx.gz">45.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='German-Urdu (3,210 sentence pairs, 56.20k words) - TMX format' href="download.php?f=OpenSubtitles2013/de-ur.tmx.gz">3.2k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='German-Vietnamese (326,477 sentence pairs, 4.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='German-Chinese (428,741 sentence pairs, 3.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='German-Chinese (181,675 sentence pairs, 1.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/de-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.el.gz">el</a>
</th><td>39,052</td> <td>220.8M</td> <td>30.5M</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Arabic (7,227,497 sentence pairs, 96.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-el.txt.zip">7.2M</a>
</td><td></td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Bulgarian (10,219,777 sentence pairs, 125.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-el.txt.zip">10.2M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Bosnian (1,289,355 sentence pairs, 15.63M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-el.txt.zip">1.3M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Greek-Catalan (104,551 sentence pairs, 1.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-el.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Czech (11,332,836 sentence pairs, 136.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-el.txt.zip">11.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Danish (4,383,213 sentence pairs, 55.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-el.txt.zip">4.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-German (3,344,742 sentence pairs, 42.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-el.txt.zip">3.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (14,626,890 sentence pairs, 209.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-en.tmx.gz">14.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Spanish (12,857,989 sentence pairs, 181.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-es.tmx.gz">12.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-Estonian (3,421,933 sentence pairs, 42.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-et.tmx.gz">3.4M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Greek-Basque (125,155 sentence pairs, 1.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Greek-Persian (2,646 sentence pairs, 61.87k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-fa.tmx.gz">2.6k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-Finnish (5,693,519 sentence pairs, 66.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-fi.tmx.gz">5.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-French (10,045,149 sentence pairs, 142.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-fr.tmx.gz">10.0M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Hebrew (7,031,724 sentence pairs, 96.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-he.tmx.gz">7.0M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Hindi (840 sentence pairs, 17.43k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-hi.tmx.gz">0.8k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Greek-Croatian (8,412,549 sentence pairs, 109.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-hr.tmx.gz">8.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Greek-Hungarian (9,376,339 sentence pairs, 116.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-hu.tmx.gz">9.4M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Greek-Indonesian (39,840 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-id.tmx.gz">39.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Greek-Icelandic (743,012 sentence pairs, 9.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Italian (6,704,222 sentence pairs, 93.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-it.tmx.gz">6.7M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Greek-Japanese (323,377 sentence pairs, 3.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ja.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Kazakh (956 sentence pairs, 9.10k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-kk.tmx.gz">1.0k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Greek-Korean (17,179 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ko.tmx.gz">17.2k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Greek-Lithuanian (415,831 sentence pairs, 4.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Greek-Latvian (186,173 sentence pairs, 2.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Macedonian (655,448 sentence pairs, 8.37M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-mk.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Malayalam (1,090 sentence pairs, 17.20k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ml.tmx.gz">1.1k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Greek-Malay (1,538,431 sentence pairs, 19.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ms.tmx.gz">1.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (1,815,958 sentence pairs, 23.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-nb.tmx.gz">1.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Greek-Dutch (8,794,136 sentence pairs, 124.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-nl.tmx.gz">8.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Polish (5,589,801 sentence pairs, 69.37M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-pl.tmx.gz">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (9,705,838 sentence pairs, 132.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-pt.tmx.gz">9.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Portuguese (12,865,141 sentence pairs, 174.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-pt_br.tmx.gz">12.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-Romanian (12,577,878 sentence pairs, 173.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ro.tmx.gz">12.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-Russian (3,452,349 sentence pairs, 44.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ru.tmx.gz">3.5M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Greek-Sinhala (82,227 sentence pairs, 1.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-si.tmx.gz">82.2k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Greek-Slovak (1,625,184 sentence pairs, 20.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sk.tmx.gz">1.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Greek-Slovenian (5,886,223 sentence pairs, 73.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sl.tmx.gz">5.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Greek-Albanian (1,173,656 sentence pairs, 15.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Serbian (7,359,410 sentence pairs, 96.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sr.tmx.gz">7.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Swedish (3,977,928 sentence pairs, 53.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sv.tmx.gz">4.0M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Swahili (317 sentence pairs, 11.68k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-sw.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Tamil (310 sentence pairs, 4.42k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Telugu (314 sentence pairs, 4.35k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-te.tmx.gz">0.3k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Greek-Thai (645,936 sentence pairs, 6.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Greek-Turkish (9,835,065 sentence pairs, 118.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-tr.tmx.gz">9.8M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Greek-Ukrainian (85,538 sentence pairs, 1.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-uk.tmx.gz">85.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Greek-Urdu (3,957 sentence pairs, 70.41k words) - TMX format' href="download.php?f=OpenSubtitles2013/el-ur.tmx.gz">4.0k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Greek-Vietnamese (599,196 sentence pairs, 8.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-vi.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Greek-Chinese (919,700 sentence pairs, 7.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-zh_cn.tmx.gz">0.9M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Greek-Chinese (370,685 sentence pairs, 3.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/el-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.en.gz">en</a>
</th><td>92,826</td> <td>672.3M</td> <td>89.3M</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Arabic (9,534,176 sentence pairs, 130.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-en.txt.zip">9.5M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (16,363,028 sentence pairs, 197.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-en.txt.zip">16.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Bengali (1,587 sentence pairs, 17.89k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-en.txt.zip">1.6k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='English-Bosnian (1,870,084 sentence pairs, 22.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-en.txt.zip">1.9M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='English-Catalan (131,687 sentence pairs, 1.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-en.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (18,048,473 sentence pairs, 212.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-en.txt.zip">18.0M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Danish (6,516,118 sentence pairs, 81.63M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-en.txt.zip">6.5M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-German (5,269,507 sentence pairs, 64.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-en.txt.zip">5.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (20,050,585 sentence pairs, 259.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-en.txt.zip">20.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (21,264,730 sentence pairs, 309.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-es.tmx.gz">21.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-Estonian (4,265,663 sentence pairs, 53.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-et.tmx.gz">4.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='English-Basque (145,415 sentence pairs, 1.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='English-Persian (3,144 sentence pairs, 88.89k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-fa.tmx.gz">3.1k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Finnish (7,896,442 sentence pairs, 95.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-fi.tmx.gz">7.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (16,276,794 sentence pairs, 233.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-fr.tmx.gz">16.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='English-Hebrew (8,788,322 sentence pairs, 128.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-he.tmx.gz">8.8M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='English-Hindi (3,678 sentence pairs, 86.03k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-hi.tmx.gz">3.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Croatian (11,449,589 sentence pairs, 152.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-hr.tmx.gz">11.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hungarian (14,310,974 sentence pairs, 181.85M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-hu.tmx.gz">14.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Armenian (974 sentence pairs, 11.50k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-hy.tmx.gz">1.0k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Indonesian (46,282 sentence pairs, 0.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-id.tmx.gz">46.3k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Icelandic (944,268 sentence pairs, 11.97M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-is.tmx.gz">0.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Italian (10,710,119 sentence pairs, 153.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-it.tmx.gz">10.7M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Japanese (378,421 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ja.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Kazakh (1,179 sentence pairs, 12.20k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-kk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='English-Korean (22,883 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ko.tmx.gz">22.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='English-Lithuanian (529,972 sentence pairs, 6.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-lt.tmx.gz">0.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='English-Latvian (236,249 sentence pairs, 2.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='English-Macedonian (780,678 sentence pairs, 10.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-mk.tmx.gz">0.8M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Malayalam (804 sentence pairs, 14.22k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ml.tmx.gz">0.8k</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='English-Malay (2,231,438 sentence pairs, 28.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ms.tmx.gz">2.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (2,565,775 sentence pairs, 33.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-nb.tmx.gz">2.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (12,277,774 sentence pairs, 177.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-nl.tmx.gz">12.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Polish (7,670,517 sentence pairs, 97.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-pl.tmx.gz">7.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (13,559,185 sentence pairs, 189.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-pt.tmx.gz">13.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (21,610,040 sentence pairs, 301.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-pt_br.tmx.gz">21.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Romanian (18,591,206 sentence pairs, 261.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ro.tmx.gz">18.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Russian (5,506,285 sentence pairs, 71.92M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ru.tmx.gz">5.5M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='English-Sinhala (104,203 sentence pairs, 1.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-si.tmx.gz">0.1M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='English-Slovak (2,242,717 sentence pairs, 29.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-sk.tmx.gz">2.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='English-Slovenian (7,474,531 sentence pairs, 95.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-sl.tmx.gz">7.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='English-Albanian (1,524,596 sentence pairs, 20.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-sq.tmx.gz">1.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Serbian (10,294,276 sentence pairs, 137.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-sr.tmx.gz">10.3M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='English-Swedish (5,261,727 sentence pairs, 71.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-sv.tmx.gz">5.3M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Tamil (1,241 sentence pairs, 20.28k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ta.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Telugu (1,754 sentence pairs, 29.26k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-te.tmx.gz">1.8k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='English-Thai (801,626 sentence pairs, 7.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-th.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (13,597,901 sentence pairs, 167.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-tr.tmx.gz">13.6M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='English-Ukrainian (125,708 sentence pairs, 1.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='English-Urdu (5,256 sentence pairs, 94.88k words) - TMX format' href="download.php?f=OpenSubtitles2013/en-ur.tmx.gz">5.3k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Vietnamese (831,540 sentence pairs, 11.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-vi.tmx.gz">0.8M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='English-Chinese (1,298,608 sentence pairs, 11.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-zh_cn.tmx.gz">1.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='English-Chinese (547,901 sentence pairs, 5.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/en-zh_tw.tmx.gz">0.5M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.es.gz">es</a>
</th><td>56,597</td> <td>343.5M</td> <td>46.0M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Afrikaans (681 sentence pairs, 12.22k words) - Moses format' href="download.php?f=OpenSubtitles2013/af-es.txt.zip">0.7k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Arabic (8,139,635 sentence pairs, 109.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-es.txt.zip">8.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Bulgarian (12,401,066 sentence pairs, 151.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-es.txt.zip">12.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Bengali (1,317 sentence pairs, 15.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-es.txt.zip">1.3k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Bosnian (1,395,736 sentence pairs, 16.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-es.txt.zip">1.4M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Spanish-Catalan (115,766 sentence pairs, 1.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-es.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Czech (13,960,482 sentence pairs, 166.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-es.txt.zip">14.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Danish (4,849,447 sentence pairs, 60.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-es.txt.zip">4.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Spanish-German (3,933,146 sentence pairs, 48.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-es.txt.zip">3.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Greek (15,776,094 sentence pairs, 203.63M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-es.txt.zip">15.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (30,318,113 sentence pairs, 383.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-es.txt.zip">30.3M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Spanish-Estonian (3,640,538 sentence pairs, 45.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-et.tmx.gz">3.6M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Spanish-Basque (140,527 sentence pairs, 1.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-eu.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Persian (1,422 sentence pairs, 33.93k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-fa.tmx.gz">1.4k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Spanish-Finnish (6,448,642 sentence pairs, 76.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-fi.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-French (13,476,856 sentence pairs, 192.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-fr.tmx.gz">13.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Hebrew (7,989,828 sentence pairs, 112.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-he.tmx.gz">8.0M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Hindi (1,666 sentence pairs, 33.91k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-hi.tmx.gz">1.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Croatian (9,849,447 sentence pairs, 128.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-hr.tmx.gz">9.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Hungarian (11,851,249 sentence pairs, 149.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-hu.tmx.gz">11.9M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Armenian (980 sentence pairs, 11.30k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-hy.tmx.gz">1.0k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Spanish-Indonesian (45,051 sentence pairs, 0.63M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-id.tmx.gz">45.1k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Spanish-Icelandic (788,114 sentence pairs, 9.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-is.tmx.gz">0.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Spanish-Italian (8,685,727 sentence pairs, 123.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-it.tmx.gz">8.7M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Spanish-Japanese (344,617 sentence pairs, 3.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ja.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Kazakh (2,098 sentence pairs, 22.80k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-kk.tmx.gz">2.1k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Spanish-Korean (12,768 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ko.tmx.gz">12.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Spanish-Lithuanian (431,922 sentence pairs, 4.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Spanish-Latvian (181,212 sentence pairs, 2.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Spanish-Macedonian (641,024 sentence pairs, 8.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-mk.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Malayalam (1,097 sentence pairs, 17.43k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ml.tmx.gz">1.1k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Spanish-Malay (1,688,946 sentence pairs, 20.97M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ms.tmx.gz">1.7M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (1,986,328 sentence pairs, 25.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-nb.tmx.gz">2.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Dutch (10,257,735 sentence pairs, 146.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-nl.tmx.gz">10.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Spanish-Polish (6,169,201 sentence pairs, 77.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-pl.tmx.gz">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (11,497,554 sentence pairs, 158.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-pt.tmx.gz">11.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (17,781,082 sentence pairs, 244.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-pt_br.tmx.gz">17.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (15,519,408 sentence pairs, 216.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ro.tmx.gz">15.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Russian (4,561,050 sentence pairs, 59.63M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ru.tmx.gz">4.6M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Spanish-Sinhala (98,810 sentence pairs, 1.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-si.tmx.gz">98.8k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Spanish-Slovak (1,822,548 sentence pairs, 23.61M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sk.tmx.gz">1.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Spanish-Slovenian (6,433,372 sentence pairs, 80.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sl.tmx.gz">6.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Spanish-Albanian (1,298,988 sentence pairs, 16.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sq.tmx.gz">1.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Spanish-Serbian (8,594,151 sentence pairs, 113.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sr.tmx.gz">8.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Swedish (4,311,562 sentence pairs, 58.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sv.tmx.gz">4.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Swahili (306 sentence pairs, 12.57k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-sw.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Tamil (901 sentence pairs, 14.98k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ta.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Telugu (1,392 sentence pairs, 23.34k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-te.tmx.gz">1.4k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Spanish-Thai (766,742 sentence pairs, 7.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-th.tmx.gz">0.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Turkish (11,713,355 sentence pairs, 142.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-tr.tmx.gz">11.7M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Spanish-Ukrainian (93,232 sentence pairs, 1.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-uk.tmx.gz">93.2k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Spanish-Urdu (2,786 sentence pairs, 50.90k words) - TMX format' href="download.php?f=OpenSubtitles2013/es-ur.tmx.gz">2.8k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Spanish-Vietnamese (642,956 sentence pairs, 9.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-vi.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Spanish-Chinese (1,011,924 sentence pairs, 8.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-zh_cn.tmx.gz">1.0M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Spanish-Chinese (437,431 sentence pairs, 3.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/es-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.et.gz">et</a>
</th><td>5,454</td> <td>29.8M</td> <td>4.8M</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Estonian-Arabic (2,757,156 sentence pairs, 34.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-et.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Estonian-Bulgarian (3,287,288 sentence pairs, 35.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-et.txt.zip">3.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Bengali (1,234 sentence pairs, 15.11k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-et.txt.zip">1.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Bosnian (465,359 sentence pairs, 5.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-et.txt.zip">0.5M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Estonian-Catalan (59,449 sentence pairs, 0.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-et.txt.zip">59.4k</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Estonian-Czech (3,672,309 sentence pairs, 38.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-et.txt.zip">3.7M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Estonian-Danish (2,067,892 sentence pairs, 23.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-et.txt.zip">2.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-German (1,373,390 sentence pairs, 15.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-et.txt.zip">1.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Estonian-Greek (4,035,883 sentence pairs, 46.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-et.txt.zip">4.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Estonian-English (5,575,258 sentence pairs, 62.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-et.txt.zip">5.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Spanish (4,386,841 sentence pairs, 49.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-et.txt.zip">4.4M</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Estonian-Basque (76,143 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-eu.tmx.gz">76.1k</a>
</td><td></td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Estonian-Finnish (2,413,536 sentence pairs, 25.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-fi.tmx.gz">2.4M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Estonian-French (2,846,706 sentence pairs, 35.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-fr.tmx.gz">2.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Hebrew (2,607,213 sentence pairs, 32.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-he.tmx.gz">2.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Hindi (279 sentence pairs, 5.45k words) - TMX format' href="download.php?f=OpenSubtitles2013/et-hi.tmx.gz">0.3k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Estonian-Croatian (2,875,291 sentence pairs, 32.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-hr.tmx.gz">2.9M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Estonian-Hungarian (2,848,943 sentence pairs, 30.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-hu.tmx.gz">2.8M</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Estonian-Indonesian (28,636 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-id.tmx.gz">28.6k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Icelandic (483,707 sentence pairs, 5.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-is.tmx.gz">0.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Estonian-Italian (1,847,224 sentence pairs, 22.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-it.tmx.gz">1.8M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Estonian-Japanese (174,511 sentence pairs, 1.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ja.tmx.gz">0.2M</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Estonian-Korean (7,009 sentence pairs, 70.56k words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ko.tmx.gz">7.0k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Estonian-Lithuanian (275,486 sentence pairs, 2.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Estonian-Latvian (91,170 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-lv.tmx.gz">91.2k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Estonian-Macedonian (357,020 sentence pairs, 4.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-Malayalam (694 sentence pairs, 10.18k words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Estonian-Malay (931,209 sentence pairs, 10.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ms.tmx.gz">0.9M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Estonian-BokmÃ¥l, Norwegian (841,065 sentence pairs, 9.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-nb.tmx.gz">0.8M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Estonian-Dutch (2,909,195 sentence pairs, 36.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-nl.tmx.gz">2.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Estonian-Polish (1,975,850 sentence pairs, 21.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-pl.tmx.gz">2.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Portuguese (3,551,668 sentence pairs, 42.61M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-pt.tmx.gz">3.6M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-Portuguese (3,704,537 sentence pairs, 43.89M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-pt_br.tmx.gz">3.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Estonian-Romanian (4,114,416 sentence pairs, 49.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ro.tmx.gz">4.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Russian (1,178,094 sentence pairs, 13.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ru.tmx.gz">1.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Estonian-Sinhala (55,313 sentence pairs, 0.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-si.tmx.gz">55.3k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Estonian-Slovak (614,029 sentence pairs, 7.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Estonian-Slovenian (2,740,190 sentence pairs, 30.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-sl.tmx.gz">2.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Estonian-Albanian (884,464 sentence pairs, 10.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-sq.tmx.gz">0.9M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Estonian-Serbian (2,434,068 sentence pairs, 28.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-sr.tmx.gz">2.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Swedish (1,663,151 sentence pairs, 20.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-sv.tmx.gz">1.7M</a>
</td><td></td><td></td><td></td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Estonian-Thai (258,403 sentence pairs, 2.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-th.tmx.gz">0.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Estonian-Turkish (3,225,967 sentence pairs, 34.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-tr.tmx.gz">3.2M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Estonian-Ukrainian (48,562 sentence pairs, 0.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-uk.tmx.gz">48.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Estonian-Urdu (1,999 sentence pairs, 34.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/et-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Estonian-Vietnamese (362,469 sentence pairs, 4.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Estonian-Chinese (570,784 sentence pairs, 4.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-zh_cn.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Estonian-Chinese (250,994 sentence pairs, 1.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/et-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.eu.gz">eu</a>
</th><td>215</td> <td>1.4M</td> <td>0.2M</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Basque-Arabic (85,854 sentence pairs, 1.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-eu.txt.zip">85.9k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Basque-Bulgarian (116,340 sentence pairs, 1.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-eu.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Basque-Bosnian (14,214 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-eu.txt.zip">14.2k</a>
</td><td></td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-Czech (120,822 sentence pairs, 1.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-eu.txt.zip">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Basque-Danish (75,695 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-eu.txt.zip">75.7k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Basque-German (49,663 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-eu.txt.zip">49.7k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Basque-Greek (134,659 sentence pairs, 1.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-eu.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Basque-English (164,424 sentence pairs, 1.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-eu.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Basque-Spanish (161,784 sentence pairs, 1.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-eu.txt.zip">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Basque-Estonian (82,218 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-eu.txt.zip">82.2k</a>
</td><td></td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Basque-Finnish (85,054 sentence pairs, 0.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-fi.tmx.gz">85.1k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-French (107,476 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Basque-Hebrew (85,189 sentence pairs, 1.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-he.tmx.gz">85.2k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Basque-Croatian (99,043 sentence pairs, 1.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-hr.tmx.gz">99.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Basque-Hungarian (119,385 sentence pairs, 1.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-hu.tmx.gz">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Basque-Icelandic (20,325 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-is.tmx.gz">20.3k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Basque-Italian (82,014 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-it.tmx.gz">82.0k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Basque-Japanese (14,932 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-ja.tmx.gz">14.9k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Basque-Korean (1,055 sentence pairs, 12.99k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-ko.tmx.gz">1.1k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Basque-Lithuanian (15,416 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-lt.tmx.gz">15.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Basque-Latvian (2,442 sentence pairs, 23.12k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-lv.tmx.gz">2.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Basque-Macedonian (6,552 sentence pairs, 82.30k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-mk.tmx.gz">6.6k</a>
</td><td></td><td bgcolor="#fff9f1"><a rel="nofollow" title='Basque-Malay (51,184 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-ms.tmx.gz">51.2k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Basque-BokmÃ¥l, Norwegian (34,738 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-nb.tmx.gz">34.7k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-Dutch (109,030 sentence pairs, 1.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-nl.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Basque-Polish (80,294 sentence pairs, 0.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-pl.tmx.gz">80.3k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Basque-Portuguese (131,841 sentence pairs, 1.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-pt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Basque-Portuguese (144,381 sentence pairs, 1.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Basque-Romanian (125,829 sentence pairs, 1.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Basque-Russian (47,112 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-ru.tmx.gz">47.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Basque-Sinhala (7,932 sentence pairs, 90.17k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-si.tmx.gz">7.9k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Basque-Slovak (35,788 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-sk.tmx.gz">35.8k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Basque-Slovenian (96,518 sentence pairs, 1.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-sl.tmx.gz">96.5k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Basque-Albanian (49,590 sentence pairs, 0.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-sq.tmx.gz">49.6k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Basque-Serbian (110,757 sentence pairs, 1.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Basque-Swedish (64,317 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-sv.tmx.gz">64.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Basque-Thai (1,297 sentence pairs, 9.81k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-th.tmx.gz">1.3k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Basque-Turkish (126,459 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Basque-Ukrainian (5,512 sentence pairs, 64.29k words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-uk.tmx.gz">5.5k</a>
</td><td></td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Basque-Vietnamese (14,247 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-vi.tmx.gz">14.2k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Basque-Chinese (29,440 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-zh_cn.tmx.gz">29.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Basque-Chinese (18,911 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/eu-zh_tw.tmx.gz">18.9k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fa plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.fa.gz">fa</a>
</th><td>1,178</td> <td>7.6M</td> <td>0.2M</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Persian-Arabic (2,107 sentence pairs, 46.76k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-fa.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Bulgarian (1,578 sentence pairs, 55.47k words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-fa.txt.zip">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Bengali (196 sentence pairs, 8.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-fa.txt.zip">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Czech (1,092 sentence pairs, 17.96k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-fa.txt.zip">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Danish (1,310 sentence pairs, 26.39k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-fa.txt.zip">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-German (652 sentence pairs, 14.32k words) - Moses format' href="download.php?f=OpenSubtitles2013/de-fa.txt.zip">0.7k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Persian-Greek (2,675 sentence pairs, 61.98k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-fa.txt.zip">2.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Persian-English (3,219 sentence pairs, 89.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-fa.txt.zip">3.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Spanish (1,522 sentence pairs, 35.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-fa.txt.zip">1.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Finnish (614 sentence pairs, 11.57k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-fi.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Persian-Hebrew (1,587 sentence pairs, 43.35k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-he.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Hindi (1,233 sentence pairs, 58.13k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-hi.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Croatian (1,118 sentence pairs, 28.32k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-hr.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Hungarian (1,658 sentence pairs, 34.55k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-hu.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Indonesian (192 sentence pairs, 14.50k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-id.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Italian (877 sentence pairs, 16.74k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-it.tmx.gz">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Malayalam (923 sentence pairs, 33.73k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-ml.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Persian-Malay (2,224 sentence pairs, 72.40k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-ms.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-BokmÃ¥l, Norwegian (784 sentence pairs, 14.19k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-nb.tmx.gz">0.8k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Persian-Dutch (2,482 sentence pairs, 76.55k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-nl.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Polish (950 sentence pairs, 16.15k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Persian-Portuguese (2,097 sentence pairs, 45.65k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-pt.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Portuguese (1,128 sentence pairs, 32.93k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-pt_br.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Persian-Romanian (2,332 sentence pairs, 81.45k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-ro.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Russian (1,452 sentence pairs, 56.56k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-ru.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Slovak (172 sentence pairs, 2.62k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-sk.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Slovenian (614 sentence pairs, 16.93k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-sl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Albanian (1,158 sentence pairs, 34.50k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-sq.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Serbian (1,944 sentence pairs, 53.27k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-sr.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Persian-Swedish (1,800 sentence pairs, 43.14k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-sv.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Tamil (679 sentence pairs, 25.37k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-ta.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Telugu (680 sentence pairs, 25.37k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-te.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Turkish (979 sentence pairs, 16.91k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-tr.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Ukrainian (93 sentence pairs, 3.70k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-uk.tmx.gz">93</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Persian-Vietnamese (1,755 sentence pairs, 48.77k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-vi.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Chinese (393 sentence pairs, 7.89k words) - TMX format' href="download.php?f=OpenSubtitles2013/fa-zh_cn.tmx.gz">0.4k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.fi.gz">fi</a>
</th><td>14,043</td> <td>61.4M</td> <td>11.4M</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Arabic (3,774,944 sentence pairs, 43.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-fi.txt.zip">3.8M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Bulgarian (5,320,193 sentence pairs, 54.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-fi.txt.zip">5.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Bengali (1,522 sentence pairs, 15.88k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-fi.txt.zip">1.5k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Finnish-Bosnian (692,606 sentence pairs, 7.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-fi.txt.zip">0.7M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Finnish-Catalan (49,015 sentence pairs, 0.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-fi.txt.zip">49.0k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Finnish-Czech (5,537,622 sentence pairs, 55.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-fi.txt.zip">5.5M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Finnish-Danish (3,504,104 sentence pairs, 36.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-fi.txt.zip">3.5M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Finnish-German (2,233,904 sentence pairs, 23.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-fi.txt.zip">2.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Greek (6,558,137 sentence pairs, 71.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-fi.txt.zip">6.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Finnish-English (9,816,074 sentence pairs, 109.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-fi.txt.zip">9.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Finnish-Spanish (7,478,644 sentence pairs, 82.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-fi.txt.zip">7.5M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Finnish-Estonian (2,796,288 sentence pairs, 27.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-fi.txt.zip">2.8M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Finnish-Basque (89,972 sentence pairs, 0.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-fi.txt.zip">90.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Persian (625 sentence pairs, 11.69k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-fi.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-French (5,299,666 sentence pairs, 62.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-fr.tmx.gz">5.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Hebrew (3,788,562 sentence pairs, 43.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-he.tmx.gz">3.8M</a>
</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Croatian (4,546,157 sentence pairs, 48.63M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-hr.tmx.gz">4.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Hungarian (4,834,014 sentence pairs, 49.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-hu.tmx.gz">4.8M</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Finnish-Indonesian (34,817 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-id.tmx.gz">34.8k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Finnish-Icelandic (690,637 sentence pairs, 7.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-is.tmx.gz">0.7M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Finnish-Italian (3,089,612 sentence pairs, 35.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-it.tmx.gz">3.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Finnish-Japanese (164,747 sentence pairs, 1.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ja.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Kazakh (1,175 sentence pairs, 10.26k words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-kk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Finnish-Korean (8,892 sentence pairs, 87.73k words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ko.tmx.gz">8.9k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Finnish-Lithuanian (325,189 sentence pairs, 3.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Finnish-Latvian (112,069 sentence pairs, 1.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Finnish-Macedonian (435,627 sentence pairs, 4.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-mk.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Malayalam (697 sentence pairs, 9.26k words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Malay (1,070,516 sentence pairs, 11.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ms.tmx.gz">1.1M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-BokmÃ¥l, Norwegian (1,830,058 sentence pairs, 19.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-nb.tmx.gz">1.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Dutch (4,885,410 sentence pairs, 57.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-nl.tmx.gz">4.9M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Finnish-Polish (3,279,512 sentence pairs, 33.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-pl.tmx.gz">3.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Finnish-Portuguese (5,520,407 sentence pairs, 62.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-pt.tmx.gz">5.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Finnish-Portuguese (6,589,970 sentence pairs, 74.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-pt_br.tmx.gz">6.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Finnish-Romanian (6,745,457 sentence pairs, 77.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ro.tmx.gz">6.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-Russian (1,703,486 sentence pairs, 18.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ru.tmx.gz">1.7M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Finnish-Sinhala (53,015 sentence pairs, 0.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-si.tmx.gz">53.0k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Finnish-Slovak (888,456 sentence pairs, 9.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Finnish-Slovenian (3,949,530 sentence pairs, 40.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-sl.tmx.gz">3.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Finnish-Albanian (1,002,011 sentence pairs, 11.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Serbian (4,105,632 sentence pairs, 44.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-sr.tmx.gz">4.1M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Finnish-Swedish (3,183,892 sentence pairs, 34.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-sv.tmx.gz">3.2M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Finnish-Thai (233,469 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-th.tmx.gz">0.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Turkish (5,208,558 sentence pairs, 51.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-tr.tmx.gz">5.2M</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Finnish-Ukrainian (63,797 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-uk.tmx.gz">63.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Finnish-Urdu (1,983 sentence pairs, 32.67k words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Finnish-Vietnamese (435,622 sentence pairs, 5.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Finnish-Chinese (717,819 sentence pairs, 4.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-zh_cn.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Finnish-Chinese (258,577 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/fi-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.fr.gz">fr</a>
</th><td>42,248</td> <td>247.3M</td> <td>32.5M</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Arabic (6,391,880 sentence pairs, 88.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-fr.txt.zip">6.4M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='French-Bulgarian (9,101,576 sentence pairs, 114.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-fr.txt.zip">9.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Bengali (312 sentence pairs, 8.25k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-fr.txt.zip">0.3k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='French-Bosnian (1,074,277 sentence pairs, 13.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-fr.txt.zip">1.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='French-Catalan (102,775 sentence pairs, 1.38M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-fr.txt.zip">0.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='French-Czech (9,803,747 sentence pairs, 121.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-fr.txt.zip">9.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-Danish (3,650,488 sentence pairs, 46.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-fr.txt.zip">3.7M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='French-German (3,326,707 sentence pairs, 41.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-fr.txt.zip">3.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Greek (11,802,035 sentence pairs, 156.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-fr.txt.zip">11.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (21,631,633 sentence pairs, 278.90M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-fr.txt.zip">21.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (16,293,441 sentence pairs, 211.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-fr.txt.zip">16.3M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='French-Estonian (3,341,250 sentence pairs, 38.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-fr.txt.zip">3.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='French-Basque (114,684 sentence pairs, 1.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-fr.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Finnish (6,027,339 sentence pairs, 66.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-fr.txt.zip">6.0M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='French-Hebrew (6,626,490 sentence pairs, 94.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-he.tmx.gz">6.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='French-Hindi (1,539 sentence pairs, 33.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-hi.tmx.gz">1.5k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Croatian (7,736,900 sentence pairs, 101.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-hr.tmx.gz">7.7M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='French-Hungarian (9,926,156 sentence pairs, 126.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-hu.tmx.gz">9.9M</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='French-Indonesian (32,471 sentence pairs, 0.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-id.tmx.gz">32.5k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='French-Icelandic (662,351 sentence pairs, 8.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='French-Italian (7,204,373 sentence pairs, 103.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-it.tmx.gz">7.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='French-Japanese (290,772 sentence pairs, 2.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ja.tmx.gz">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='French-Korean (9,954 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ko.tmx.gz">10.0k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='French-Lithuanian (335,176 sentence pairs, 3.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='French-Latvian (145,717 sentence pairs, 1.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='French-Macedonian (495,714 sentence pairs, 6.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Malayalam (688 sentence pairs, 10.86k words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='French-Malay (1,264,267 sentence pairs, 15.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ms.tmx.gz">1.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (1,492,610 sentence pairs, 19.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='French-Dutch (8,471,691 sentence pairs, 121.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-nl.tmx.gz">8.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='French-Polish (4,830,299 sentence pairs, 60.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-pl.tmx.gz">4.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='French-Portuguese (9,019,450 sentence pairs, 123.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-pt.tmx.gz">9.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Portuguese (13,630,512 sentence pairs, 186.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-pt_br.tmx.gz">13.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Romanian (11,659,918 sentence pairs, 162.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ro.tmx.gz">11.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-Russian (3,622,522 sentence pairs, 48.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ru.tmx.gz">3.6M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='French-Sinhala (64,326 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-si.tmx.gz">64.3k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='French-Slovak (1,427,394 sentence pairs, 18.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='French-Slovenian (4,989,655 sentence pairs, 62.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='French-Albanian (1,058,858 sentence pairs, 13.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Serbian (6,586,239 sentence pairs, 87.37M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-sr.tmx.gz">6.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-Swedish (3,457,331 sentence pairs, 46.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-sv.tmx.gz">3.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='French-Thai (636,225 sentence pairs, 6.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='French-Turkish (9,116,688 sentence pairs, 111.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-tr.tmx.gz">9.1M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='French-Ukrainian (81,366 sentence pairs, 0.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-uk.tmx.gz">81.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='French-Urdu (2,756 sentence pairs, 52.99k words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-ur.tmx.gz">2.8k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='French-Vietnamese (517,096 sentence pairs, 7.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='French-Chinese (793,717 sentence pairs, 6.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='French-Chinese (337,531 sentence pairs, 2.97M words) - TMX format' href="download.php?f=OpenSubtitles2013/fr-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.he.gz">he</a>
</th><td>21,359</td> <td>111.0M</td> <td>15.7M</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hebrew-Arabic (6,282,793 sentence pairs, 74.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-he.txt.zip">6.3M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hebrew-Bulgarian (6,846,907 sentence pairs, 85.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-he.txt.zip">6.8M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Hebrew-Bosnian (887,976 sentence pairs, 10.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-he.txt.zip">0.9M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Hebrew-Catalan (77,116 sentence pairs, 1.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-he.txt.zip">77.1k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hebrew-Czech (7,640,735 sentence pairs, 93.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-he.txt.zip">7.6M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Hebrew-Danish (3,187,858 sentence pairs, 40.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-he.txt.zip">3.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Hebrew-German (2,076,673 sentence pairs, 26.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-he.txt.zip">2.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hebrew-Greek (8,431,272 sentence pairs, 109.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-he.txt.zip">8.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hebrew-English (11,522,997 sentence pairs, 155.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-he.txt.zip">11.5M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Hebrew-Spanish (9,542,769 sentence pairs, 125.38M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-he.txt.zip">9.5M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Hebrew-Estonian (3,077,759 sentence pairs, 36.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-he.txt.zip">3.1M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Hebrew-Basque (90,867 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-he.txt.zip">90.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hebrew-Persian (1,598 sentence pairs, 43.38k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-he.txt.zip">1.6k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-Finnish (4,254,681 sentence pairs, 47.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-he.txt.zip">4.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-French (56,926,311 sentence pairs, 46.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-he.txt.zip">56.9M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hebrew-Hindi (1,042 sentence pairs, 21.65k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-hi.tmx.gz">1.0k</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hebrew-Croatian (5,780,379 sentence pairs, 74.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-hr.tmx.gz">5.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hebrew-Hungarian (6,318,040 sentence pairs, 78.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-hu.tmx.gz">6.3M</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Hebrew-Indonesian (37,193 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-id.tmx.gz">37.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hebrew-Icelandic (573,442 sentence pairs, 7.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-is.tmx.gz">0.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Italian (4,716,230 sentence pairs, 65.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-it.tmx.gz">4.7M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Hebrew-Japanese (300,938 sentence pairs, 2.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ja.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Kazakh (926 sentence pairs, 10.66k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-kk.tmx.gz">0.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Hebrew-Korean (12,263 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ko.tmx.gz">12.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Hebrew-Lithuanian (335,543 sentence pairs, 3.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-lt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Hebrew-Latvian (156,928 sentence pairs, 1.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hebrew-Macedonian (467,908 sentence pairs, 6.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hebrew-Malayalam (1,170 sentence pairs, 16.06k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ml.tmx.gz">1.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hebrew-Malay (1,198,753 sentence pairs, 15.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ms.tmx.gz">1.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hebrew-BokmÃ¥l, Norwegian (1,284,580 sentence pairs, 16.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-nb.tmx.gz">1.3M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hebrew-Dutch (6,253,885 sentence pairs, 88.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-nl.tmx.gz">6.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-Polish (3,679,292 sentence pairs, 45.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-pl.tmx.gz">3.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hebrew-Portuguese (6,670,680 sentence pairs, 91.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-pt.tmx.gz">6.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hebrew-Portuguese (7,944,702 sentence pairs, 107.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-pt_br.tmx.gz">7.9M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hebrew-Romanian (8,205,246 sentence pairs, 114.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ro.tmx.gz">8.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Hebrew-Russian (2,584,296 sentence pairs, 33.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ru.tmx.gz">2.6M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Hebrew-Sinhala (86,790 sentence pairs, 1.00M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-si.tmx.gz">86.8k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hebrew-Slovak (1,143,617 sentence pairs, 14.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hebrew-Slovenian (4,330,475 sentence pairs, 53.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-sl.tmx.gz">4.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hebrew-Albanian (968,890 sentence pairs, 13.05M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Serbian (4,730,619 sentence pairs, 62.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-sr.tmx.gz">4.7M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Hebrew-Swedish (2,787,866 sentence pairs, 36.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-sv.tmx.gz">2.8M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Tamil (335 sentence pairs, 4.45k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Telugu (847 sentence pairs, 14.02k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-te.tmx.gz">0.8k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hebrew-Thai (613,807 sentence pairs, 4.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hebrew-Turkish (6,644,838 sentence pairs, 80.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-tr.tmx.gz">6.6M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Hebrew-Ukrainian (59,914 sentence pairs, 0.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-uk.tmx.gz">59.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Hebrew-Urdu (3,523 sentence pairs, 59.24k words) - TMX format' href="download.php?f=OpenSubtitles2013/he-ur.tmx.gz">3.5k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hebrew-Vietnamese (429,676 sentence pairs, 6.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hebrew-Chinese (814,268 sentence pairs, 6.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Hebrew-Chinese (359,020 sentence pairs, 2.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/he-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.hi.gz">hi</a>
</th><td>41</td> <td>0.3M</td> <td>16.1k</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hindi-Arabic (2,014 sentence pairs, 43.16k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-hi.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Bulgarian (289 sentence pairs, 5.32k words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-hi.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Bosnian (414 sentence pairs, 7.24k words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-hi.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hindi-Czech (893 sentence pairs, 16.57k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-hi.txt.zip">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Danish (286 sentence pairs, 5.66k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-hi.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hindi-Greek (848 sentence pairs, 17.46k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-hi.txt.zip">0.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Hindi-English (4,222 sentence pairs, 93.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-hi.txt.zip">4.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hindi-Spanish (1,728 sentence pairs, 34.12k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-hi.txt.zip">1.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Estonian (280 sentence pairs, 5.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/et-hi.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Hindi-Persian (1,249 sentence pairs, 58.18k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-hi.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hindi-French (1,551 sentence pairs, 33.86k words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-hi.txt.zip">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hindi-Hebrew (1,069 sentence pairs, 21.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-hi.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Croatian (614 sentence pairs, 11.20k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-hr.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Hungarian (616 sentence pairs, 10.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-hu.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Italian (358 sentence pairs, 7.76k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-it.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Japanese (507 sentence pairs, 9.16k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ja.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Macedonian (280 sentence pairs, 5.58k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-mk.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Malayalam (214 sentence pairs, 6.23k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ml.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Malay (287 sentence pairs, 5.50k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ms.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-BokmÃ¥l, Norwegian (252 sentence pairs, 5.65k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-nb.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Dutch (597 sentence pairs, 12.22k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-nl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hindi-Polish (1,030 sentence pairs, 19.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-pl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hindi-Portuguese (1,121 sentence pairs, 22.14k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-pt.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hindi-Portuguese (1,605 sentence pairs, 31.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-pt_br.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hindi-Romanian (1,124 sentence pairs, 22.46k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ro.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Russian (159 sentence pairs, 3.90k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ru.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Slovak (285 sentence pairs, 5.29k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-sk.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Slovenian (284 sentence pairs, 5.32k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-sl.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Albanian (290 sentence pairs, 5.67k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-sq.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Serbian (282 sentence pairs, 5.27k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-sr.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Swedish (281 sentence pairs, 5.72k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-sv.tmx.gz">0.3k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Hindi-Tamil (6,255 sentence pairs, 0.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-ta.tmx.gz">6.3k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Hindi-Telugu (6,955 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-te.tmx.gz">7.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hindi-Turkish (621 sentence pairs, 10.79k words) - TMX format' href="download.php?f=OpenSubtitles2013/hi-tr.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.hr.gz">hr</a>
</th><td>27,531</td> <td>138.6M</td> <td>21.7M</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Croatian-Arabic (5,548,706 sentence pairs, 70.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-hr.txt.zip">5.5M</a>
</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Croatian-Bulgarian (7,822,997 sentence pairs, 88.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-hr.txt.zip">7.8M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Bosnian (747,583 sentence pairs, 7.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-hr.txt.zip">0.7M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Croatian-Catalan (92,376 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-hr.txt.zip">92.4k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Croatian-Czech (8,679,310 sentence pairs, 96.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-hr.txt.zip">8.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Danish (3,595,482 sentence pairs, 42.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-hr.txt.zip">3.6M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Croatian-German (2,493,542 sentence pairs, 28.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-hr.txt.zip">2.5M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Croatian-Greek (10,063,093 sentence pairs, 121.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-hr.txt.zip">10.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-English (15,117,601 sentence pairs, 180.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-hr.txt.zip">15.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Spanish (11,888,177 sentence pairs, 142.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-hr.txt.zip">11.9M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Croatian-Estonian (3,406,255 sentence pairs, 36.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-hr.txt.zip">3.4M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Croatian-Basque (106,259 sentence pairs, 1.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-hr.txt.zip">0.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Croatian-Persian (1,128 sentence pairs, 28.35k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-hr.txt.zip">1.1k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Finnish (5,148,441 sentence pairs, 52.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-hr.txt.zip">5.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Croatian-French (8,993,595 sentence pairs, 110.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-hr.txt.zip">9.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Croatian-Hebrew (22,704,042 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-hr.txt.zip">22.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Hindi (626 sentence pairs, 11.24k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-hr.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Croatian-Hungarian (7,327,532 sentence pairs, 83.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-hu.tmx.gz">7.3M</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Croatian-Indonesian (35,935 sentence pairs, 0.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-id.tmx.gz">35.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Croatian-Icelandic (677,707 sentence pairs, 7.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Croatian-Italian (5,320,821 sentence pairs, 69.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-it.tmx.gz">5.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Croatian-Japanese (277,664 sentence pairs, 2.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ja.tmx.gz">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Korean (11,385 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ko.tmx.gz">11.4k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Croatian-Lithuanian (353,718 sentence pairs, 3.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Croatian-Latvian (161,374 sentence pairs, 1.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Croatian-Macedonian (545,833 sentence pairs, 6.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Malayalam (1,094 sentence pairs, 16.40k words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ml.tmx.gz">1.1k</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Croatian-Malay (1,382,679 sentence pairs, 16.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ms.tmx.gz">1.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Croatian-BokmÃ¥l, Norwegian (1,478,250 sentence pairs, 17.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Croatian-Dutch (6,975,250 sentence pairs, 91.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-nl.tmx.gz">7.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Croatian-Polish (4,131,921 sentence pairs, 47.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-pl.tmx.gz">4.1M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-Portuguese (7,902,386 sentence pairs, 99.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-pt.tmx.gz">7.9M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Croatian-Portuguese (10,032,810 sentence pairs, 125.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-pt_br.tmx.gz">10.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Croatian-Romanian (10,152,559 sentence pairs, 129.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ro.tmx.gz">10.2M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Croatian-Russian (2,725,669 sentence pairs, 32.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ru.tmx.gz">2.7M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Croatian-Sinhala (72,231 sentence pairs, 0.91M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-si.tmx.gz">72.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Croatian-Slovak (1,246,686 sentence pairs, 14.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Slovenian (5,005,038 sentence pairs, 57.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Croatian-Albanian (1,089,641 sentence pairs, 13.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Serbian (4,639,493 sentence pairs, 55.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-sr.tmx.gz">4.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Croatian-Swedish (3,075,920 sentence pairs, 38.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-sv.tmx.gz">3.1M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Tamil (331 sentence pairs, 4.61k words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Telugu (332 sentence pairs, 4.55k words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-te.tmx.gz">0.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Croatian-Thai (535,442 sentence pairs, 4.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-th.tmx.gz">0.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Croatian-Turkish (7,668,439 sentence pairs, 85.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-tr.tmx.gz">7.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Croatian-Ukrainian (68,646 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-uk.tmx.gz">68.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-Urdu (1,888 sentence pairs, 34.30k words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Croatian-Vietnamese (497,057 sentence pairs, 6.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Croatian-Chinese (770,265 sentence pairs, 6.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Croatian-Chinese (303,056 sentence pairs, 2.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/hr-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.hu.gz">hu</a>
</th><td>34,513</td> <td>160.1M</td> <td>25.9M</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Arabic (6,401,023 sentence pairs, 77.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-hu.txt.zip">6.4M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Hungarian-Bulgarian (9,570,824 sentence pairs, 103.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-hu.txt.zip">9.6M</a>
</td><td></td><td bgcolor="#dfffc7"><a rel="nofollow" title='Hungarian-Bosnian (1,021,631 sentence pairs, 10.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-hu.txt.zip">1.0M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hungarian-Catalan (99,031 sentence pairs, 1.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-hu.txt.zip">99.0k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Hungarian-Czech (10,635,761 sentence pairs, 111.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-hu.txt.zip">10.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Hungarian-Danish (3,711,568 sentence pairs, 41.50M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-hu.txt.zip">3.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Hungarian-German (2,908,432 sentence pairs, 32.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-hu.txt.zip">2.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Greek (11,131,489 sentence pairs, 128.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-hu.txt.zip">11.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-English (19,077,479 sentence pairs, 215.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-hu.txt.zip">19.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Spanish (14,290,588 sentence pairs, 163.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-hu.txt.zip">14.3M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Hungarian-Estonian (3,418,042 sentence pairs, 34.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-hu.txt.zip">3.4M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Hungarian-Basque (129,060 sentence pairs, 1.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-hu.txt.zip">0.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hungarian-Persian (1,678 sentence pairs, 34.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-hu.txt.zip">1.7k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Finnish (5,500,472 sentence pairs, 52.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-hu.txt.zip">5.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-French (11,643,252 sentence pairs, 133.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-hu.txt.zip">11.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Hungarian-Hebrew (15,332,504 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-hu.txt.zip">15.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Hindi (633 sentence pairs, 10.89k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-hu.txt.zip">0.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hungarian-Croatian (7,828,967 sentence pairs, 42.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-hu.txt.zip">7.8M</a>
</td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Hungarian-Indonesian (40,661 sentence pairs, 0.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-id.tmx.gz">40.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Hungarian-Icelandic (687,656 sentence pairs, 7.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-is.tmx.gz">0.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Italian (6,788,144 sentence pairs, 84.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-it.tmx.gz">6.8M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Hungarian-Japanese (285,703 sentence pairs, 2.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ja.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Kazakh (1,188 sentence pairs, 10.76k words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-kk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Hungarian-Korean (13,204 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ko.tmx.gz">13.2k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Hungarian-Lithuanian (353,434 sentence pairs, 3.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-lt.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Hungarian-Latvian (151,838 sentence pairs, 1.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-lv.tmx.gz">0.2M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Hungarian-Macedonian (495,231 sentence pairs, 5.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-mk.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Malayalam (822 sentence pairs, 10.89k words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ml.tmx.gz">0.8k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hungarian-Malay (1,347,997 sentence pairs, 14.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ms.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hungarian-BokmÃ¥l, Norwegian (1,484,601 sentence pairs, 16.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-nb.tmx.gz">1.5M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Dutch (7,731,249 sentence pairs, 97.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-nl.tmx.gz">7.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Polish (4,525,278 sentence pairs, 49.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-pl.tmx.gz">4.5M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Hungarian-Portuguese (8,485,267 sentence pairs, 102.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-pt.tmx.gz">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Portuguese (12,090,208 sentence pairs, 145.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-pt_br.tmx.gz">12.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-Romanian (11,330,323 sentence pairs, 138.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ro.tmx.gz">11.3M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Hungarian-Russian (3,435,097 sentence pairs, 39.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ru.tmx.gz">3.4M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Hungarian-Sinhala (84,900 sentence pairs, 1.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-si.tmx.gz">84.9k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Hungarian-Slovak (1,477,717 sentence pairs, 16.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Slovenian (5,052,133 sentence pairs, 55.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-sl.tmx.gz">5.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Albanian (1,130,527 sentence pairs, 13.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Hungarian-Serbian (6,157,824 sentence pairs, 71.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-sr.tmx.gz">6.2M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Hungarian-Swedish (3,247,659 sentence pairs, 38.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-sv.tmx.gz">3.2M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Tamil (331 sentence pairs, 4.39k words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Telugu (334 sentence pairs, 4.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-te.tmx.gz">0.3k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Hungarian-Thai (564,965 sentence pairs, 4.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Turkish (8,953,519 sentence pairs, 94.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-tr.tmx.gz">9.0M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Hungarian-Ukrainian (74,515 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-uk.tmx.gz">74.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hungarian-Urdu (3,197 sentence pairs, 50.79k words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-ur.tmx.gz">3.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hungarian-Vietnamese (489,350 sentence pairs, 6.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Hungarian-Chinese (760,346 sentence pairs, 5.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Hungarian-Chinese (331,549 sentence pairs, 2.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/hu-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hy plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.hy.gz">hy</a>
</th><td>1</td> <td>7.8k</td> <td>1.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-English (998 sentence pairs, 11.60k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-hy.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Spanish (1,004 sentence pairs, 11.39k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-hy.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Polish (911 sentence pairs, 10.51k words) - TMX format' href="download.php?f=OpenSubtitles2013/hy-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Portuguese (939 sentence pairs, 11.60k words) - TMX format' href="download.php?f=OpenSubtitles2013/hy-pt.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Portuguese (987 sentence pairs, 11.55k words) - TMX format' href="download.php?f=OpenSubtitles2013/hy-pt_br.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Romanian (968 sentence pairs, 11.46k words) - TMX format' href="download.php?f=OpenSubtitles2013/hy-ro.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Armenian-Turkish (798 sentence pairs, 9.59k words) - TMX format' href="download.php?f=OpenSubtitles2013/hy-tr.tmx.gz">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized id plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.id.gz">id</a>
</th><td>156</td> <td>0.6M</td> <td>62.9k</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Indonesian-Arabic (37,686 sentence pairs, 0.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-id.txt.zip">37.7k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Indonesian-Bulgarian (42,691 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-id.txt.zip">42.7k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Indonesian-Bosnian (8,684 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-id.txt.zip">8.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Catalan (3,944 sentence pairs, 50.69k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-id.txt.zip">3.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Indonesian-Czech (45,475 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-id.txt.zip">45.5k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Indonesian-Danish (38,595 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-id.txt.zip">38.6k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Indonesian-German (25,774 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-id.txt.zip">25.8k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Indonesian-Greek (41,442 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-id.txt.zip">41.4k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Indonesian-English (52,514 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-id.txt.zip">52.5k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Indonesian-Spanish (49,518 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-id.txt.zip">49.5k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Indonesian-Estonian (30,768 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-id.txt.zip">30.8k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Indonesian-Persian (192 sentence pairs, 14.50k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-id.txt.zip">0.2k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Indonesian-Finnish (36,003 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-id.txt.zip">36.0k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Indonesian-French (33,900 sentence pairs, 0.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-id.txt.zip">33.9k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Indonesian-Hebrew (39,601 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-id.txt.zip">39.6k</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Indonesian-Croatian (38,438 sentence pairs, 0.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-id.txt.zip">38.4k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Indonesian-Hungarian (45,073 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-id.txt.zip">45.1k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Indonesian-Icelandic (8,573 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-is.tmx.gz">8.6k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Indonesian-Italian (35,420 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-it.tmx.gz">35.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Japanese (5,800 sentence pairs, 49.01k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-ja.tmx.gz">5.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Indonesian-Lithuanian (6,855 sentence pairs, 74.93k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-lt.tmx.gz">6.9k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Indonesian-Latvian (4,761 sentence pairs, 63.69k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-lv.tmx.gz">4.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Indonesian-Macedonian (4,917 sentence pairs, 53.69k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-mk.tmx.gz">4.9k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Indonesian-Malay (24,894 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-ms.tmx.gz">24.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Indonesian-BokmÃ¥l, Norwegian (14,091 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-nb.tmx.gz">14.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Indonesian-Dutch (39,810 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-nl.tmx.gz">39.8k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Indonesian-Polish (29,892 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-pl.tmx.gz">29.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Indonesian-Portuguese (39,767 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-pt.tmx.gz">39.8k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Indonesian-Portuguese (43,530 sentence pairs, 0.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-pt_br.tmx.gz">43.5k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Indonesian-Romanian (42,443 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-ro.tmx.gz">42.4k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Indonesian-Russian (28,396 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-ru.tmx.gz">28.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Indonesian-Sinhala (918 sentence pairs, 14.58k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-si.tmx.gz">0.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Indonesian-Slovak (15,019 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sk.tmx.gz">15.0k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Indonesian-Slovenian (31,572 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sl.tmx.gz">31.6k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Indonesian-Albanian (14,167 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sq.tmx.gz">14.2k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Indonesian-Serbian (31,798 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sr.tmx.gz">31.8k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Indonesian-Swedish (26,848 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sv.tmx.gz">26.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Indonesian-Swahili (368 sentence pairs, 11.67k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-sw.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Indonesian-Thai (1,582 sentence pairs, 11.88k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-th.tmx.gz">1.6k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Indonesian-Turkish (42,390 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-tr.tmx.gz">42.4k</a>
</td><td></td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Indonesian-Vietnamese (10,367 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/id-vi.tmx.gz">10.4k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Indonesian-Chinese (8,177 sentence pairs, 60.07k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-zh_cn.tmx.gz">8.2k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Indonesian-Chinese (6,097 sentence pairs, 47.75k words) - TMX format' href="download.php?f=OpenSubtitles2013/id-zh_tw.tmx.gz">6.1k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.is.gz">is</a>
</th><td>716</td> <td>5.9M</td> <td>0.9M</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Icelandic-Arabic (547,284 sentence pairs, 7.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-is.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Bulgarian (712,685 sentence pairs, 7.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-is.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Icelandic-Bosnian (104,313 sentence pairs, 1.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-is.txt.zip">0.1M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Icelandic-Catalan (3,748 sentence pairs, 55.38k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-is.txt.zip">3.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Czech (809,411 sentence pairs, 8.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-is.txt.zip">0.8M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Icelandic-Danish (578,719 sentence pairs, 6.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-is.txt.zip">0.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-German (435,916 sentence pairs, 4.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-is.txt.zip">0.4M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Icelandic-Greek (804,912 sentence pairs, 9.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-is.txt.zip">0.8M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Icelandic-English (1,079,593 sentence pairs, 12.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-is.txt.zip">1.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-Spanish (870,368 sentence pairs, 10.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-is.txt.zip">0.9M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Icelandic-Estonian (534,408 sentence pairs, 5.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-is.txt.zip">0.5M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Icelandic-Basque (21,343 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-is.txt.zip">21.3k</a>
</td><td></td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Finnish (764,456 sentence pairs, 7.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-is.txt.zip">0.8M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-French (730,056 sentence pairs, 8.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-is.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Hebrew (608,884 sentence pairs, 7.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-is.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Icelandic-Croatian (744,403 sentence pairs, 8.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-is.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Hungarian (764,123 sentence pairs, 7.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-is.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Icelandic-Indonesian (8,844 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-is.txt.zip">8.8k</a>
</td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-Italian (441,695 sentence pairs, 5.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-it.tmx.gz">0.4M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Icelandic-Japanese (21,356 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-ja.tmx.gz">21.4k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Kazakh (1,166 sentence pairs, 11.94k words) - TMX format' href="download.php?f=OpenSubtitles2013/is-kk.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Korean (686 sentence pairs, 8.62k words) - TMX format' href="download.php?f=OpenSubtitles2013/is-ko.tmx.gz">0.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Icelandic-Lithuanian (130,993 sentence pairs, 1.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Icelandic-Latvian (45,790 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-lv.tmx.gz">45.8k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Icelandic-Macedonian (114,049 sentence pairs, 1.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-mk.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Malay (295,143 sentence pairs, 3.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-ms.tmx.gz">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Icelandic-BokmÃ¥l, Norwegian (316,472 sentence pairs, 3.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-nb.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Icelandic-Dutch (669,901 sentence pairs, 8.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Icelandic-Polish (587,694 sentence pairs, 6.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-pl.tmx.gz">0.6M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Icelandic-Portuguese (799,405 sentence pairs, 9.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-pt.tmx.gz">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-Portuguese (833,292 sentence pairs, 9.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-pt_br.tmx.gz">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Icelandic-Romanian (875,193 sentence pairs, 10.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-ro.tmx.gz">0.9M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Icelandic-Russian (266,056 sentence pairs, 3.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Icelandic-Sinhala (22,401 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-si.tmx.gz">22.4k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Icelandic-Slovak (135,861 sentence pairs, 1.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Slovenian (694,773 sentence pairs, 7.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-sl.tmx.gz">0.7M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Icelandic-Albanian (233,368 sentence pairs, 2.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Icelandic-Serbian (611,082 sentence pairs, 7.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-sr.tmx.gz">0.6M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Icelandic-Swedish (484,933 sentence pairs, 5.92M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-sv.tmx.gz">0.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Thai (1,943 sentence pairs, 14.53k words) - TMX format' href="download.php?f=OpenSubtitles2013/is-th.tmx.gz">1.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Icelandic-Turkish (737,474 sentence pairs, 7.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Icelandic-Ukrainian (12,574 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-uk.tmx.gz">12.6k</a>
</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Icelandic-Vietnamese (99,606 sentence pairs, 1.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-vi.tmx.gz">99.6k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Icelandic-Chinese (104,098 sentence pairs, 0.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-zh_cn.tmx.gz">0.1M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Icelandic-Chinese (68,816 sentence pairs, 0.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/is-zh_tw.tmx.gz">68.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.it.gz">it</a>
</th><td>33,311</td> <td>191.1M</td> <td>25.9M</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Arabic (4,799,583 sentence pairs, 65.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-it.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Italian-Bulgarian (6,876,111 sentence pairs, 84.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-it.txt.zip">6.9M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Italian-Bosnian (768,599 sentence pairs, 9.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-it.txt.zip">0.8M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Italian-Catalan (93,993 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-it.txt.zip">94.0k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Italian-Czech (7,973,890 sentence pairs, 95.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-it.txt.zip">8.0M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Italian-Danish (2,425,733 sentence pairs, 30.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-it.txt.zip">2.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Italian-German (2,165,380 sentence pairs, 26.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-it.txt.zip">2.2M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Italian-Greek (8,139,207 sentence pairs, 105.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-it.txt.zip">8.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-English (15,639,887 sentence pairs, 202.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-it.txt.zip">15.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Italian-Spanish (10,507,710 sentence pairs, 135.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-it.txt.zip">10.5M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Italian-Estonian (2,190,892 sentence pairs, 25.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-it.txt.zip">2.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Italian-Basque (88,161 sentence pairs, 0.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-it.txt.zip">88.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Persian (880 sentence pairs, 16.75k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-it.txt.zip">0.9k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Italian-Finnish (3,447,258 sentence pairs, 37.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-it.txt.zip">3.4M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Italian-French (8,719,091 sentence pairs, 115.90M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-it.txt.zip">8.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Hebrew (5,643,349 sentence pairs, 74.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-it.txt.zip">5.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Hindi (359 sentence pairs, 7.77k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-it.txt.zip">0.4k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Italian-Croatian (35,204,239 sentence pairs, 9.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-it.txt.zip">35.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Italian-Hungarian (32,452,562 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-it.txt.zip">32.5M</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Italian-Indonesian (36,878 sentence pairs, 0.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-it.txt.zip">36.9k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Italian-Icelandic (2,807,009 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/is-it.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Italian-Japanese (223,041 sentence pairs, 2.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ja.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Kazakh (1,140 sentence pairs, 11.74k words) - TMX format' href="download.php?f=OpenSubtitles2013/it-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Italian-Korean (8,040 sentence pairs, 93.60k words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ko.tmx.gz">8.0k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Italian-Lithuanian (227,906 sentence pairs, 2.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Italian-Latvian (113,794 sentence pairs, 1.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-lv.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Italian-Macedonian (339,105 sentence pairs, 4.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-mk.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Malayalam (663 sentence pairs, 13.36k words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Italian-Malay (855,377 sentence pairs, 10.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ms.tmx.gz">0.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (975,395 sentence pairs, 12.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-nb.tmx.gz">1.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Italian-Dutch (5,506,832 sentence pairs, 78.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-nl.tmx.gz">5.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Italian-Polish (3,001,310 sentence pairs, 37.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-pl.tmx.gz">3.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Italian-Portuguese (6,036,787 sentence pairs, 81.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-pt.tmx.gz">6.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Italian-Portuguese (9,365,543 sentence pairs, 126.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-pt_br.tmx.gz">9.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Italian-Romanian (7,927,757 sentence pairs, 108.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ro.tmx.gz">7.9M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Italian-Russian (2,832,938 sentence pairs, 37.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ru.tmx.gz">2.8M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Italian-Sinhala (55,667 sentence pairs, 0.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-si.tmx.gz">55.7k</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Italian-Slovak (1,036,600 sentence pairs, 13.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-sk.tmx.gz">1.0M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Italian-Slovenian (3,165,703 sentence pairs, 38.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-sl.tmx.gz">3.2M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Italian-Albanian (746,843 sentence pairs, 9.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-sq.tmx.gz">0.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Serbian (4,341,864 sentence pairs, 56.32M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-sr.tmx.gz">4.3M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Italian-Swedish (2,137,767 sentence pairs, 28.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-sv.tmx.gz">2.1M</a>
</td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Italian-Thai (541,992 sentence pairs, 5.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-th.tmx.gz">0.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Italian-Turkish (6,289,682 sentence pairs, 75.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-tr.tmx.gz">6.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Italian-Ukrainian (54,699 sentence pairs, 0.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-uk.tmx.gz">54.7k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Italian-Urdu (2,708 sentence pairs, 51.53k words) - TMX format' href="download.php?f=OpenSubtitles2013/it-ur.tmx.gz">2.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Italian-Vietnamese (373,474 sentence pairs, 5.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-vi.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Italian-Chinese (500,235 sentence pairs, 4.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Italian-Chinese (215,904 sentence pairs, 1.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/it-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ja.gz">ja</a>
</th><td>656</td> <td>0</td> <td>0.5M</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Japanese-Arabic (282,323 sentence pairs, 2.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ja.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Japanese-Bulgarian (279,443 sentence pairs, 2.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ja.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Japanese-Bosnian (31,305 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ja.txt.zip">31.3k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Japanese-Catalan (21,794 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-ja.txt.zip">21.8k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Japanese-Czech (308,080 sentence pairs, 2.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ja.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Japanese-Danish (189,963 sentence pairs, 1.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ja.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-German (108,152 sentence pairs, 1.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ja.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Japanese-Greek (327,293 sentence pairs, 3.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ja.txt.zip">0.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Japanese-English (385,941 sentence pairs, 3.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ja.txt.zip">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Japanese-Spanish (349,998 sentence pairs, 3.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ja.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Japanese-Estonian (176,132 sentence pairs, 1.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ja.txt.zip">0.2M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Japanese-Basque (14,974 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-ja.txt.zip">15.0k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Japanese-Finnish (166,028 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ja.txt.zip">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Japanese-French (293,220 sentence pairs, 2.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ja.txt.zip">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Japanese-Hebrew (304,854 sentence pairs, 2.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ja.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Japanese-Hindi (514 sentence pairs, 9.19k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ja.txt.zip">0.5k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Japanese-Croatian (279,505 sentence pairs, 2.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ja.txt.zip">0.3M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Japanese-Hungarian (289,161 sentence pairs, 2.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ja.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Japanese-Indonesian (5,812 sentence pairs, 49.04k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-ja.txt.zip">5.8k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Japanese-Icelandic (21,390 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-ja.txt.zip">21.4k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Japanese-Italian (224,934 sentence pairs, 2.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ja.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Japanese-Korean (4,641 sentence pairs, 34.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-ko.tmx.gz">4.6k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Japanese-Lithuanian (38,687 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-lt.tmx.gz">38.7k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Japanese-Latvian (12,884 sentence pairs, 94.12k words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-lv.tmx.gz">12.9k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Japanese-Macedonian (35,869 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-mk.tmx.gz">35.9k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Japanese-Malay (124,711 sentence pairs, 1.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Japanese-BokmÃ¥l, Norwegian (94,200 sentence pairs, 0.89M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-nb.tmx.gz">94.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Japanese-Dutch (293,529 sentence pairs, 2.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-nl.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Japanese-Polish (189,297 sentence pairs, 1.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-pl.tmx.gz">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Japanese-Portuguese (323,575 sentence pairs, 3.08M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='Japanese-Portuguese (350,182 sentence pairs, 3.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-pt_br.tmx.gz">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Japanese-Romanian (332,349 sentence pairs, 3.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-ro.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Japanese-Russian (192,834 sentence pairs, 1.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Japanese-Sinhala (25,379 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-si.tmx.gz">25.4k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Japanese-Slovak (74,688 sentence pairs, 0.66M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-sk.tmx.gz">74.7k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Japanese-Slovenian (207,669 sentence pairs, 1.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Japanese-Albanian (94,705 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-sq.tmx.gz">94.7k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Japanese-Serbian (223,412 sentence pairs, 1.98M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-sr.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Japanese-Swedish (153,681 sentence pairs, 1.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-sv.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Tamil (515 sentence pairs, 6.75k words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-ta.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Telugu (516 sentence pairs, 6.86k words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-te.tmx.gz">0.5k</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Japanese-Thai (65,801 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-th.tmx.gz">65.8k</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Japanese-Turkish (302,538 sentence pairs, 2.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Japanese-Ukrainian (5,963 sentence pairs, 61.64k words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-uk.tmx.gz">6.0k</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-Vietnamese (44,002 sentence pairs, 0.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-vi.tmx.gz">44.0k</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Japanese-Chinese (93,298 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-zh_cn.tmx.gz">93.3k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Japanese-Chinese (55,791 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/ja-zh_tw.tmx.gz">55.8k</a>
</td></tr> <tr><th>ka</th><td>0</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.kk.gz">kk</a>
</th><td>1</td> <td>7.1k</td> <td>1.3k</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Bulgarian (1,196 sentence pairs, 11.01k words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-kk.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Danish (1,272 sentence pairs, 12.05k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-kk.txt.zip">1.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Kazakh-German (2,355 sentence pairs, 23.94k words) - Moses format' href="download.php?f=OpenSubtitles2013/de-kk.txt.zip">2.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Greek (964 sentence pairs, 9.12k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-kk.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-English (1,285 sentence pairs, 12.60k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-kk.txt.zip">1.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Kazakh-Spanish (2,157 sentence pairs, 22.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-kk.txt.zip">2.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Finnish (1,243 sentence pairs, 10.48k words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-kk.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Hebrew (976 sentence pairs, 10.82k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-kk.txt.zip">1.0k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Hungarian (1,271 sentence pairs, 11.02k words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-kk.txt.zip">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Icelandic (1,244 sentence pairs, 12.22k words) - Moses format' href="download.php?f=OpenSubtitles2013/is-kk.txt.zip">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Italian (1,195 sentence pairs, 11.92k words) - Moses format' href="download.php?f=OpenSubtitles2013/it-kk.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-BokmÃ¥l, Norwegian (1,104 sentence pairs, 11.42k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-nb.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Polish (1,044 sentence pairs, 10.96k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-pl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Portuguese (1,166 sentence pairs, 11.85k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-pt.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Romanian (1,175 sentence pairs, 11.49k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-ro.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Russian (1,149 sentence pairs, 11.10k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-ru.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Slovak (963 sentence pairs, 10.23k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-sk.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Swedish (1,014 sentence pairs, 11.11k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-sv.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Kazakh-Turkish (2,147 sentence pairs, 19.31k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-tr.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Ukrainian (1,166 sentence pairs, 10.96k words) - TMX format' href="download.php?f=OpenSubtitles2013/kk-uk.tmx.gz">1.2k</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ko.gz">ko</a>
</th><td>20</td> <td>0.1M</td> <td>19.5k</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Korean-Arabic (15,207 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ko.txt.zip">15.2k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Bulgarian (11,867 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ko.txt.zip">11.9k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Catalan (726 sentence pairs, 9.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-ko.txt.zip">0.7k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Korean-Czech (13,347 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ko.txt.zip">13.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Korean-Danish (7,862 sentence pairs, 90.70k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ko.txt.zip">7.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-German (7,777 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ko.txt.zip">7.8k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Korean-Greek (17,423 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ko.txt.zip">17.4k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Korean-English (23,376 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ko.txt.zip">23.4k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Korean-Spanish (12,929 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ko.txt.zip">12.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Korean-Estonian (7,090 sentence pairs, 70.77k words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ko.txt.zip">7.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Basque (1,055 sentence pairs, 12.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-ko.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Korean-Finnish (9,021 sentence pairs, 88.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ko.txt.zip">9.0k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Korean-French (10,054 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ko.txt.zip">10.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Hebrew (12,457 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ko.txt.zip">12.5k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Croatian (11,429 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ko.txt.zip">11.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Korean-Hungarian (13,487 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ko.txt.zip">13.5k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Icelandic (687 sentence pairs, 8.62k words) - Moses format' href="download.php?f=OpenSubtitles2013/is-ko.txt.zip">0.7k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Italian (8,195 sentence pairs, 94.46k words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ko.txt.zip">8.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-Japanese (4,692 sentence pairs, 34.56k words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-ko.txt.zip">4.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Lithuanian (943 sentence pairs, 10.40k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-lt.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Macedonian (1,490 sentence pairs, 19.48k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-mk.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Malay (10,000 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-ms.tmx.gz">10.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Korean-BokmÃ¥l, Norwegian (5,917 sentence pairs, 75.79k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-nb.tmx.gz">5.9k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Korean-Dutch (10,830 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-nl.tmx.gz">10.8k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Polish (10,023 sentence pairs, 97.69k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-pl.tmx.gz">10.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Portuguese (9,842 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-pt.tmx.gz">9.8k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Korean-Portuguese (14,920 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-pt_br.tmx.gz">14.9k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Korean-Romanian (17,475 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-ro.tmx.gz">17.5k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Korean-Russian (7,012 sentence pairs, 82.00k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-ru.tmx.gz">7.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Slovak (1,434 sentence pairs, 17.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-sk.tmx.gz">1.4k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Korean-Slovenian (10,293 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-sl.tmx.gz">10.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Korean-Albanian (6,177 sentence pairs, 72.83k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-sq.tmx.gz">6.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Korean-Serbian (9,914 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-sr.tmx.gz">9.9k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Korean-Swedish (8,217 sentence pairs, 96.03k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-sv.tmx.gz">8.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Thai (1,533 sentence pairs, 14.58k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-th.tmx.gz">1.5k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Korean-Turkish (13,960 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-tr.tmx.gz">14.0k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Vietnamese (699 sentence pairs, 10.95k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-vi.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Chinese (3,399 sentence pairs, 22.07k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-zh_cn.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Chinese (1,398 sentence pairs, 7.82k words) - TMX format' href="download.php?f=OpenSubtitles2013/ko-zh_tw.tmx.gz">1.4k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.lt.gz">lt</a>
</th><td>292</td> <td>2.3M</td> <td>0.4M</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Arabic (323,150 sentence pairs, 3.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-lt.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Bulgarian (379,501 sentence pairs, 3.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Lithuanian-Bosnian (50,755 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-lt.txt.zip">50.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Lithuanian-Catalan (7,037 sentence pairs, 88.87k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-lt.txt.zip">7.0k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Czech (409,049 sentence pairs, 3.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-lt.txt.zip">0.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Danish (288,826 sentence pairs, 3.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-lt.txt.zip">0.3M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Lithuanian-German (192,511 sentence pairs, 2.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-lt.txt.zip">0.2M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Lithuanian-Greek (446,702 sentence pairs, 4.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-lt.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Lithuanian-English (615,099 sentence pairs, 6.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-lt.txt.zip">0.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Lithuanian-Spanish (480,812 sentence pairs, 5.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-lt.txt.zip">0.5M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Lithuanian-Estonian (297,409 sentence pairs, 2.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-lt.txt.zip">0.3M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Lithuanian-Basque (16,146 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-lt.txt.zip">16.1k</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Lithuanian-Finnish (350,385 sentence pairs, 3.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-lt.txt.zip">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-French (364,741 sentence pairs, 3.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-lt.txt.zip">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Hebrew (357,709 sentence pairs, 3.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Croatian (386,546 sentence pairs, 3.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-lt.txt.zip">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Lithuanian-Hungarian (384,932 sentence pairs, 3.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-lt.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Lithuanian-Indonesian (6,972 sentence pairs, 75.24k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-lt.txt.zip">7.0k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Lithuanian-Icelandic (142,536 sentence pairs, 1.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-lt.txt.zip">0.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Lithuanian-Italian (869,527 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-lt.txt.zip">0.9M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Lithuanian-Japanese (38,759 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-lt.txt.zip">38.8k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lithuanian-Korean (943 sentence pairs, 10.40k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-lt.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Lithuanian-Latvian (40,041 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-lv.tmx.gz">40.0k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Macedonian (68,444 sentence pairs, 0.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-mk.tmx.gz">68.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Malayalam (304 sentence pairs, 2.98k words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-ml.tmx.gz">0.3k</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Lithuanian-Malay (191,268 sentence pairs, 2.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Lithuanian-BokmÃ¥l, Norwegian (152,138 sentence pairs, 1.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Dutch (352,245 sentence pairs, 4.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-nl.tmx.gz">0.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Lithuanian-Polish (281,760 sentence pairs, 2.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Lithuanian-Portuguese (442,917 sentence pairs, 4.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-pt.tmx.gz">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Lithuanian-Portuguese (464,070 sentence pairs, 5.05M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-pt_br.tmx.gz">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Lithuanian-Romanian (492,027 sentence pairs, 5.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-ro.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Lithuanian-Russian (165,352 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Lithuanian-Sinhala (21,030 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-si.tmx.gz">21.0k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Lithuanian-Slovak (75,398 sentence pairs, 0.83M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-sk.tmx.gz">75.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Slovenian (379,248 sentence pairs, 3.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-sl.tmx.gz">0.4M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Lithuanian-Albanian (197,524 sentence pairs, 2.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Lithuanian-Serbian (318,965 sentence pairs, 3.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-sr.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Lithuanian-Swedish (227,485 sentence pairs, 2.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-sv.tmx.gz">0.2M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Lithuanian-Thai (10,571 sentence pairs, 82.15k words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-th.tmx.gz">10.6k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Lithuanian-Turkish (412,274 sentence pairs, 3.97M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-tr.tmx.gz">0.4M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Lithuanian-Ukrainian (8,842 sentence pairs, 91.43k words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-uk.tmx.gz">8.8k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Lithuanian-Vietnamese (67,072 sentence pairs, 0.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-vi.tmx.gz">67.1k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Chinese (107,828 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-zh_cn.tmx.gz">0.1M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Lithuanian-Chinese (57,955 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/lt-zh_tw.tmx.gz">58.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.lv.gz">lv</a>
</th><td>159</td> <td>1.1M</td> <td>0.2M</td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='Latvian-Arabic (156,119 sentence pairs, 1.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-lv.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Latvian-Bulgarian (146,948 sentence pairs, 1.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-lv.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Latvian-Bosnian (13,878 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-lv.txt.zip">13.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Catalan (1,281 sentence pairs, 19.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-lv.txt.zip">1.3k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Latvian-Czech (184,062 sentence pairs, 1.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Latvian-Danish (97,002 sentence pairs, 1.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-lv.txt.zip">97.0k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Latvian-German (81,897 sentence pairs, 0.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-lv.txt.zip">81.9k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Latvian-Greek (196,537 sentence pairs, 2.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-lv.txt.zip">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Latvian-English (261,208 sentence pairs, 2.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-lv.txt.zip">0.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Latvian-Spanish (196,007 sentence pairs, 2.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-lv.txt.zip">0.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Latvian-Estonian (97,760 sentence pairs, 0.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-lv.txt.zip">97.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latvian-Basque (2,530 sentence pairs, 23.41k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-lv.txt.zip">2.5k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Latvian-Finnish (118,554 sentence pairs, 1.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Latvian-French (156,384 sentence pairs, 1.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Latvian-Hebrew (164,168 sentence pairs, 1.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-lv.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='Latvian-Croatian (171,713 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-lv.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Latvian-Hungarian (163,432 sentence pairs, 1.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-lv.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Latvian-Indonesian (4,892 sentence pairs, 64.07k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-lv.txt.zip">4.9k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Latvian-Icelandic (49,116 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-lv.txt.zip">49.1k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Latvian-Italian (121,132 sentence pairs, 1.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-lv.txt.zip">0.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Latvian-Japanese (12,950 sentence pairs, 94.46k words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-lv.txt.zip">12.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Latvian-Lithuanian (42,232 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-lv.txt.zip">42.2k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Latvian-Macedonian (25,046 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-mk.tmx.gz">25.0k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Latvian-Malay (67,087 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-ms.tmx.gz">67.1k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Latvian-BokmÃ¥l, Norwegian (62,501 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-nb.tmx.gz">62.5k</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Latvian-Dutch (165,321 sentence pairs, 2.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-nl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Latvian-Polish (125,277 sentence pairs, 1.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Latvian-Portuguese (186,521 sentence pairs, 2.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Latvian-Portuguese (208,266 sentence pairs, 2.39M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-pt_br.tmx.gz">0.2M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Latvian-Romanian (218,181 sentence pairs, 2.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Latvian-Russian (102,729 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-ru.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latvian-Sinhala (1,992 sentence pairs, 25.61k words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-si.tmx.gz">2.0k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Latvian-Slovak (41,493 sentence pairs, 0.50M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-sk.tmx.gz">41.5k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Latvian-Slovenian (137,057 sentence pairs, 1.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Latvian-Albanian (60,747 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-sq.tmx.gz">60.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Latvian-Serbian (127,131 sentence pairs, 1.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-sr.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Latvian-Swedish (78,835 sentence pairs, 0.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-sv.tmx.gz">78.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Latvian-Thai (22,111 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-th.tmx.gz">22.1k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Latvian-Turkish (177,182 sentence pairs, 1.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Ukrainian (3,666 sentence pairs, 36.73k words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-uk.tmx.gz">3.7k</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Latvian-Vietnamese (26,202 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-vi.tmx.gz">26.2k</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Latvian-Chinese (41,948 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-zh_cn.tmx.gz">41.9k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Latvian-Chinese (22,014 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/lv-zh_tw.tmx.gz">22.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.mk.gz">mk</a>
</th><td>722</td> <td>4.3M</td> <td>0.7M</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Macedonian-Afrikaans (645 sentence pairs, 11.70k words) - Moses format' href="download.php?f=OpenSubtitles2013/af-mk.txt.zip">0.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Arabic (474,865 sentence pairs, 6.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-mk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Macedonian-Bulgarian (507,999 sentence pairs, 5.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-mk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Macedonian-Bosnian (92,974 sentence pairs, 1.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-mk.txt.zip">93.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Macedonian-Catalan (6,660 sentence pairs, 93.88k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-mk.txt.zip">6.7k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Czech (551,188 sentence pairs, 6.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-mk.txt.zip">0.6M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Macedonian-Danish (376,058 sentence pairs, 4.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-mk.txt.zip">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Macedonian-German (275,660 sentence pairs, 3.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-mk.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Greek (699,950 sentence pairs, 8.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-mk.txt.zip">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-English (881,723 sentence pairs, 10.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-mk.txt.zip">0.9M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Macedonian-Spanish (698,566 sentence pairs, 8.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-mk.txt.zip">0.7M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Macedonian-Estonian (381,588 sentence pairs, 4.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-mk.txt.zip">0.4M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Macedonian-Basque (6,687 sentence pairs, 82.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-mk.txt.zip">6.7k</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Macedonian-Finnish (459,955 sentence pairs, 4.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-mk.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-French (531,625 sentence pairs, 6.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-mk.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Hebrew (496,590 sentence pairs, 6.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-mk.txt.zip">0.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Hindi (283 sentence pairs, 5.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-mk.txt.zip">0.3k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Macedonian-Croatian (2,906,664 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-mk.txt.zip">2.9M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Macedonian-Hungarian (2,605,338 sentence pairs, 3.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-mk.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Macedonian-Indonesian (5,024 sentence pairs, 54.00k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-mk.txt.zip">5.0k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Macedonian-Icelandic (119,296 sentence pairs, 1.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-mk.txt.zip">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Macedonian-Italian (2,203,258 sentence pairs, 0.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-mk.txt.zip">2.2M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Macedonian-Japanese (35,918 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-mk.txt.zip">35.9k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Macedonian-Korean (1,529 sentence pairs, 19.89k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-mk.txt.zip">1.5k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Macedonian-Lithuanian (335,390 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-mk.txt.zip">0.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Macedonian-Latvian (25,979 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-mk.txt.zip">26.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Malayalam (295 sentence pairs, 3.25k words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-ml.tmx.gz">0.3k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Macedonian-Malay (251,091 sentence pairs, 2.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-ms.tmx.gz">0.3M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Macedonian-BokmÃ¥l, Norwegian (210,488 sentence pairs, 2.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-nb.tmx.gz">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Dutch (492,591 sentence pairs, 6.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-nl.tmx.gz">0.5M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Macedonian-Polish (398,436 sentence pairs, 4.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-pl.tmx.gz">0.4M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Macedonian-Portuguese (659,840 sentence pairs, 8.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-pt.tmx.gz">0.7M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Macedonian-Portuguese (664,637 sentence pairs, 8.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-pt_br.tmx.gz">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Macedonian-Romanian (806,628 sentence pairs, 10.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-ro.tmx.gz">0.8M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Macedonian-Russian (242,490 sentence pairs, 2.84M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Macedonian-Sinhala (23,360 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-si.tmx.gz">23.4k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Macedonian-Slovak (99,899 sentence pairs, 1.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-sk.tmx.gz">99.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Slovenian (581,773 sentence pairs, 6.62M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-sl.tmx.gz">0.6M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Macedonian-Albanian (257,600 sentence pairs, 3.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Macedonian-Serbian (439,552 sentence pairs, 5.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-sr.tmx.gz">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Macedonian-Swedish (305,172 sentence pairs, 3.78M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-sv.tmx.gz">0.3M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Macedonian-Thai (34,422 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-th.tmx.gz">34.4k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Macedonian-Turkish (572,368 sentence pairs, 6.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-tr.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Macedonian-Ukrainian (6,939 sentence pairs, 71.14k words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-uk.tmx.gz">6.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Macedonian-Urdu (1,765 sentence pairs, 30.25k words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-ur.tmx.gz">1.8k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Macedonian-Vietnamese (99,910 sentence pairs, 1.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-vi.tmx.gz">99.9k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Macedonian-Chinese (129,743 sentence pairs, 1.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-zh_cn.tmx.gz">0.1M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Macedonian-Chinese (64,828 sentence pairs, 0.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/mk-zh_tw.tmx.gz">64.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ml.gz">ml</a>
</th><td>34</td> <td>0.1M</td> <td>9.3k</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Arabic (953 sentence pairs, 12.68k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ml.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Bulgarian (826 sentence pairs, 11.77k words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ml.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Bosnian (278 sentence pairs, 3.03k words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ml.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Czech (539 sentence pairs, 5.84k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ml.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Danish (699 sentence pairs, 11.10k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ml.txt.zip">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-German (407 sentence pairs, 7.68k words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ml.txt.zip">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Greek (1,096 sentence pairs, 17.21k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ml.txt.zip">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-English (809 sentence pairs, 14.23k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ml.txt.zip">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Spanish (1,106 sentence pairs, 17.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ml.txt.zip">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Estonian (700 sentence pairs, 10.20k words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ml.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Malayalam-Persian (934 sentence pairs, 33.77k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-ml.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Finnish (700 sentence pairs, 9.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ml.txt.zip">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-French (692 sentence pairs, 10.88k words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ml.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Hebrew (1,180 sentence pairs, 16.10k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ml.txt.zip">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Hindi (271 sentence pairs, 7.83k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ml.txt.zip">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Croatian (1,103 sentence pairs, 16.42k words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ml.txt.zip">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Hungarian (830 sentence pairs, 10.91k words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ml.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Italian (665 sentence pairs, 13.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ml.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Lithuanian (306 sentence pairs, 2.98k words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-ml.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Macedonian (297 sentence pairs, 3.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-ml.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Malay (711 sentence pairs, 10.14k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-ms.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Dutch (675 sentence pairs, 10.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-nl.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Polish (434 sentence pairs, 6.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-pl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Malayalam-Portuguese (1,267 sentence pairs, 21.53k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-pt.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Portuguese (1,093 sentence pairs, 17.57k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-pt_br.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Romanian (1,072 sentence pairs, 17.46k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-ro.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Russian (707 sentence pairs, 9.81k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-ru.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Slovak (274 sentence pairs, 2.74k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-sk.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Slovenian (844 sentence pairs, 11.49k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-sl.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Albanian (294 sentence pairs, 3.41k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-sq.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malayalam-Serbian (1,093 sentence pairs, 16.53k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-sr.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Swedish (583 sentence pairs, 8.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-sv.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Turkish (557 sentence pairs, 7.28k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-tr.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malayalam-Vietnamese (660 sentence pairs, 12.41k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-vi.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Chinese (465 sentence pairs, 4.71k words) - TMX format' href="download.php?f=OpenSubtitles2013/ml-zh_cn.tmx.gz">0.5k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ms plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ms.gz">ms</a>
</th><td>2,858</td> <td>20.1M</td> <td>3.0M</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Malay-Arabic (1,269,329 sentence pairs, 15.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ms.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Bulgarian (1,495,688 sentence pairs, 16.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ms.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Malay-Bosnian (239,698 sentence pairs, 2.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ms.txt.zip">0.2M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Malay-Catalan (26,592 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-ms.txt.zip">26.6k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Czech (1,552,577 sentence pairs, 16.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ms.txt.zip">1.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Malay-Danish (1,092,458 sentence pairs, 12.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ms.txt.zip">1.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Malay-German (680,017 sentence pairs, 7.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ms.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Malay-Greek (1,715,535 sentence pairs, 20.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ms.txt.zip">1.7M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Malay-English (2,828,189 sentence pairs, 31.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ms.txt.zip">2.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Malay-Spanish (1,929,315 sentence pairs, 22.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ms.txt.zip">1.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Malay-Estonian (1,043,643 sentence pairs, 11.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ms.txt.zip">1.0M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Malay-Basque (54,646 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-ms.txt.zip">54.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Malay-Persian (2,257 sentence pairs, 72.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-ms.txt.zip">2.3k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Malay-Finnish (1,170,377 sentence pairs, 11.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ms.txt.zip">1.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-French (1,404,597 sentence pairs, 16.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ms.txt.zip">1.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Malay-Hebrew (1,312,258 sentence pairs, 15.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ms.txt.zip">1.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malay-Hindi (291 sentence pairs, 5.52k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ms.txt.zip">0.3k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Croatian (1,536,176 sentence pairs, 16.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ms.txt.zip">1.5M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Malay-Hungarian (2,715,368 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ms.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Malay-Indonesian (28,827 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-ms.txt.zip">28.8k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Malay-Icelandic (1,775,960 sentence pairs, 1.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-ms.txt.zip">1.8M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Malay-Italian (2,460,779 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-ms.txt.zip">2.5M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Malay-Japanese (255,346 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-ms.txt.zip">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Malay-Korean (10,130 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-ms.txt.zip">10.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Malay-Lithuanian (940,617 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-ms.txt.zip">0.9M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Malay-Latvian (71,075 sentence pairs, 0.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-ms.txt.zip">71.1k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Malay-Macedonian (265,922 sentence pairs, 3.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-ms.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malay-Malayalam (717 sentence pairs, 10.16k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-ms.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Malay-BokmÃ¥l, Norwegian (524,750 sentence pairs, 6.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-nb.tmx.gz">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Malay-Dutch (1,350,120 sentence pairs, 17.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-nl.tmx.gz">1.4M</a>
</td><td bgcolor="#deffc7"><a rel="nofollow" title='Malay-Polish (1,064,031 sentence pairs, 12.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-pl.tmx.gz">1.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Malay-Portuguese (1,672,037 sentence pairs, 20.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-pt.tmx.gz">1.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Malay-Portuguese (1,763,676 sentence pairs, 21.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-pt_br.tmx.gz">1.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Malay-Romanian (2,025,232 sentence pairs, 24.93M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-ro.tmx.gz">2.0M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Malay-Russian (637,467 sentence pairs, 7.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-ru.tmx.gz">0.6M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Malay-Sinhala (58,599 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-si.tmx.gz">58.6k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Malay-Slovak (321,275 sentence pairs, 3.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Malay-Slovenian (1,307,404 sentence pairs, 14.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-sl.tmx.gz">1.3M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Malay-Albanian (599,851 sentence pairs, 7.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-sq.tmx.gz">0.6M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Malay-Serbian (1,169,808 sentence pairs, 13.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-sr.tmx.gz">1.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Malay-Swedish (842,286 sentence pairs, 10.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-sv.tmx.gz">0.8M</a>
</td><td></td><td></td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Malay-Thai (106,506 sentence pairs, 0.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-th.tmx.gz">0.1M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Malay-Turkish (1,549,501 sentence pairs, 16.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-tr.tmx.gz">1.5M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Malay-Ukrainian (36,502 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-uk.tmx.gz">36.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Malay-Urdu (2,784 sentence pairs, 50.09k words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-ur.tmx.gz">2.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Malay-Vietnamese (287,658 sentence pairs, 3.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Malay-Chinese (400,402 sentence pairs, 3.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Malay-Chinese (177,419 sentence pairs, 1.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/ms-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.nb.gz">nb</a>
</th><td>2,775</td> <td>16.4M</td> <td>2.5M</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Arabic (1,298,960 sentence pairs, 16.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-nb.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#d9ffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bulgarian (1,539,736 sentence pairs, 17.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-nb.txt.zip">1.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bengali (1,078 sentence pairs, 15.90k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-nb.txt.zip">1.1k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Bosnian (191,591 sentence pairs, 2.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-nb.txt.zip">0.2M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Catalan (32,135 sentence pairs, 0.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-nb.txt.zip">32.1k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (1,763,891 sentence pairs, 19.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-nb.txt.zip">1.8M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Danish (1,872,879 sentence pairs, 21.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-nb.txt.zip">1.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (946,324 sentence pairs, 11.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-nb.txt.zip">0.9M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (1,992,512 sentence pairs, 24.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-nb.txt.zip">2.0M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (3,020,326 sentence pairs, 37.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-nb.txt.zip">3.0M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (2,217,980 sentence pairs, 27.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-nb.txt.zip">2.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Estonian (942,964 sentence pairs, 10.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-nb.txt.zip">0.9M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Basque (36,681 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-nb.txt.zip">36.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Persian (792 sentence pairs, 14.21k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-nb.txt.zip">0.8k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Finnish (2,053,223 sentence pairs, 20.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-nb.txt.zip">2.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (1,649,578 sentence pairs, 20.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-nb.txt.zip">1.6M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hebrew (1,389,676 sentence pairs, 17.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-nb.txt.zip">1.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hindi (253 sentence pairs, 5.65k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-nb.txt.zip">0.3k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Croatian (3,914,655 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-nb.txt.zip">3.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Hungarian (4,693,916 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-nb.txt.zip">4.7M</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Indonesian (14,477 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-nb.txt.zip">14.5k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Icelandic (345,479 sentence pairs, 3.93M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-nb.txt.zip">0.3M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (2,545,797 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-nb.txt.zip">2.5M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Japanese (704,146 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ja-nb.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Kazakh (1,144 sentence pairs, 11.56k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-nb.txt.zip">1.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Korean (6,004 sentence pairs, 76.36k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-nb.txt.zip">6.0k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Lithuanian (162,599 sentence pairs, 1.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-nb.txt.zip">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Latvian (65,791 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-nb.txt.zip">65.8k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Macedonian (220,796 sentence pairs, 2.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-nb.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Malay (572,874 sentence pairs, 6.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-nb.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (1,493,498 sentence pairs, 19.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-nl.tmx.gz">1.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Polish (1,078,213 sentence pairs, 12.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-pl.tmx.gz">1.1M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (1,831,031 sentence pairs, 22.94M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-pt.tmx.gz">1.8M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (2,063,551 sentence pairs, 25.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-pt_br.tmx.gz">2.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Romanian (2,086,502 sentence pairs, 26.54M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-ro.tmx.gz">2.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (654,587 sentence pairs, 7.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Sinhala (35,820 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-si.tmx.gz">35.8k</a>
</td><td bgcolor="#ebffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovak (268,446 sentence pairs, 3.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Slovenian (1,386,881 sentence pairs, 16.04M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-sl.tmx.gz">1.4M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Albanian (461,869 sentence pairs, 5.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Serbian (1,279,288 sentence pairs, 15.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-sr.tmx.gz">1.3M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (1,531,597 sentence pairs, 18.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-sv.tmx.gz">1.5M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Tamil (253 sentence pairs, 4.64k words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Telugu (256 sentence pairs, 4.72k words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-te.tmx.gz">0.3k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Thai (98,005 sentence pairs, 0.87M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-th.tmx.gz">98.0k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Turkish (1,649,454 sentence pairs, 18.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-tr.tmx.gz">1.6M</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Ukrainian (33,296 sentence pairs, 0.37M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-uk.tmx.gz">33.3k</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Vietnamese (255,944 sentence pairs, 3.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (329,844 sentence pairs, 2.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-zh_cn.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Chinese (153,731 sentence pairs, 1.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/nb-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.nl.gz">nl</a>
</th><td>25,774</td> <td>144.8M</td> <td>19.7M</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Dutch-Arabic (6,127,946 sentence pairs, 85.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-nl.txt.zip">6.1M</a>
</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Bulgarian (8,586,951 sentence pairs, 107.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-nl.txt.zip">8.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Bengali (1,432 sentence pairs, 16.29k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-nl.txt.zip">1.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Dutch-Bosnian (969,079 sentence pairs, 12.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-nl.txt.zip">1.0M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Dutch-Catalan (84,544 sentence pairs, 1.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-nl.txt.zip">84.5k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Czech (9,227,779 sentence pairs, 113.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-nl.txt.zip">9.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Dutch-Danish (3,767,734 sentence pairs, 48.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-nl.txt.zip">3.8M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Dutch-German (2,694,674 sentence pairs, 34.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-nl.txt.zip">2.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Greek (10,705,802 sentence pairs, 142.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-nl.txt.zip">10.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (16,998,762 sentence pairs, 223.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-nl.txt.zip">17.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (12,589,636 sentence pairs, 165.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-nl.txt.zip">12.6M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Dutch-Estonian (3,504,804 sentence pairs, 41.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-nl.txt.zip">3.5M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Dutch-Basque (117,684 sentence pairs, 1.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-nl.txt.zip">0.1M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Dutch-Persian (2,491 sentence pairs, 76.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-nl.txt.zip">2.5k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Finnish (5,693,520 sentence pairs, 62.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-nl.txt.zip">5.7M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Dutch-French (68,684,409 sentence pairs, 29.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-nl.txt.zip">68.7M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Dutch-Hebrew (10,708,020 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-nl.txt.zip">10.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Hindi (605 sentence pairs, 12.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-nl.txt.zip">0.6k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Dutch-Croatian (8,381,907 sentence pairs, 103.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-nl.txt.zip">8.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Hungarian (9,226,827 sentence pairs, 109.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-nl.txt.zip">9.2M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Dutch-Indonesian (42,250 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-nl.txt.zip">42.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Dutch-Icelandic (732,801 sentence pairs, 8.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-nl.txt.zip">0.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Dutch-Italian (6,691,466 sentence pairs, 89.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-nl.txt.zip">6.7M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Dutch-Japanese (601,189 sentence pairs, 1.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-nl.txt.zip">0.6M</a>
</td><td></td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Dutch-Korean (10,965 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-nl.txt.zip">11.0k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Dutch-Lithuanian (86,923 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/lt-nl.txt.zip">86.9k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Dutch-Latvian (750,399 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/lv-nl.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Dutch-Macedonian (526,035 sentence pairs, 6.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-nl.txt.zip">0.5M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Malayalam (677 sentence pairs, 10.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-nl.txt.zip">0.7k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Dutch-Malay (270,888 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ms-nl.txt.zip">0.3M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (235,446 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/nb-nl.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Dutch-Polish (4,131,429 sentence pairs, 52.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-pl.tmx.gz">4.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Portuguese (8,376,147 sentence pairs, 115.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-pt.tmx.gz">8.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Portuguese (10,466,254 sentence pairs, 142.96M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-pt_br.tmx.gz">10.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Romanian (10,797,091 sentence pairs, 150.88M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-ro.tmx.gz">10.8M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Dutch-Russian (2,873,894 sentence pairs, 38.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-ru.tmx.gz">2.9M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Dutch-Sinhala (71,302 sentence pairs, 0.98M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-si.tmx.gz">71.3k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Slovak (1,302,892 sentence pairs, 16.98M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-sk.tmx.gz">1.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Slovenian (5,197,466 sentence pairs, 65.47M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-sl.tmx.gz">5.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Dutch-Albanian (1,198,824 sentence pairs, 16.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-sq.tmx.gz">1.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Serbian (5,797,456 sentence pairs, 77.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-sr.tmx.gz">5.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Dutch-Swedish (3,265,171 sentence pairs, 44.01M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-sv.tmx.gz">3.3M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Tamil (312 sentence pairs, 5.05k words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-ta.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Telugu (315 sentence pairs, 5.02k words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-te.tmx.gz">0.3k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Dutch-Thai (600,603 sentence pairs, 5.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Dutch-Turkish (8,050,765 sentence pairs, 98.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-tr.tmx.gz">8.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Dutch-Ukrainian (74,902 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-uk.tmx.gz">74.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Dutch-Urdu (1,915 sentence pairs, 35.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Dutch-Vietnamese (481,912 sentence pairs, 7.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Dutch-Chinese (822,519 sentence pairs, 7.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Dutch-Chinese (297,903 sentence pairs, 2.61M words) - TMX format' href="download.php?f=OpenSubtitles2013/nl-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.pl.gz">pl</a>
</th><td>8,683</td> <td>48.0M</td> <td>7.6M</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Polish-Arabic (3,620,149 sentence pairs, 44.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-pl.txt.zip">3.6M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Bulgarian (5,007,557 sentence pairs, 55.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-pl.txt.zip">5.0M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Bengali (1,135 sentence pairs, 13.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-pl.txt.zip">1.1k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Polish-Bosnian (590,090 sentence pairs, 6.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-pl.txt.zip">0.6M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Polish-Catalan (54,301 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-pl.txt.zip">54.3k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Czech (5,393,277 sentence pairs, 57.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-pl.txt.zip">5.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Polish-Danish (2,314,200 sentence pairs, 26.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-pl.txt.zip">2.3M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Polish-German (2,165,365 sentence pairs, 24.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-pl.txt.zip">2.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Polish-Greek (6,453,534 sentence pairs, 75.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-pl.txt.zip">6.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Polish-English (9,745,212 sentence pairs, 113.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-pl.txt.zip">9.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Polish-Spanish (7,244,273 sentence pairs, 84.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-pl.txt.zip">7.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Polish-Estonian (2,249,603 sentence pairs, 23.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-pl.txt.zip">2.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Polish-Basque (85,266 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-pl.txt.zip">85.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Persian (959 sentence pairs, 16.18k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-pl.txt.zip">1.0k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Polish-Finnish (3,647,572 sentence pairs, 35.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-pl.txt.zip">3.6M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Polish-French (36,291,460 sentence pairs, 28.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-pl.txt.zip">36.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Hebrew (2,585,046 sentence pairs, 15.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-pl.txt.zip">2.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Hindi (1,054 sentence pairs, 19.92k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-pl.txt.zip">1.1k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Polish-Croatian (4,729,978 sentence pairs, 51.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-pl.txt.zip">4.7M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Polish-Hungarian (1,588,635 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-pl.txt.zip">1.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Armenian (930 sentence pairs, 10.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/hy-pl.txt.zip">0.9k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Polish-Indonesian (30,946 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-pl.txt.zip">30.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Polish-Icelandic (642,791 sentence pairs, 6.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-pl.txt.zip">0.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Polish-Italian (4,324,845 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-pl.txt.zip">4.3M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Polish-Japanese (193,171 sentence pairs, 1.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-pl.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Kazakh (1,051 sentence pairs, 10.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-pl.txt.zip">1.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Polish-Korean (10,195 sentence pairs, 98.51k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-pl.txt.zip">10.2k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Polish-Lithuanian (302,033 sentence pairs, 2.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-pl.txt.zip">0.3M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Polish-Latvian (131,338 sentence pairs, 1.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-pl.txt.zip">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Polish-Macedonian (425,895 sentence pairs, 4.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-pl.txt.zip">0.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Malayalam (436 sentence pairs, 6.34k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-pl.txt.zip">0.4k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Polish-Malay (1,173,126 sentence pairs, 12.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-pl.txt.zip">1.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Polish-BokmÃ¥l, Norwegian (188,198 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/nb-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Dutch (4,792,016 sentence pairs, 56.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-pl.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Portuguese (5,216,507 sentence pairs, 63.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-pt.tmx.gz">5.2M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Polish-Portuguese (6,273,662 sentence pairs, 75.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-pt_br.tmx.gz">6.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Romanian (6,573,224 sentence pairs, 80.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-ro.tmx.gz">6.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-Russian (1,751,198 sentence pairs, 20.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-ru.tmx.gz">1.8M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Polish-Sinhala (65,499 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-si.tmx.gz">65.5k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Polish-Slovak (734,763 sentence pairs, 8.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Polish-Slovenian (3,611,229 sentence pairs, 40.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-sl.tmx.gz">3.6M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Polish-Albanian (983,802 sentence pairs, 11.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-sq.tmx.gz">1.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Polish-Serbian (3,610,399 sentence pairs, 42.36M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-sr.tmx.gz">3.6M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Polish-Swedish (2,044,334 sentence pairs, 24.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-sv.tmx.gz">2.0M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Tamil (749 sentence pairs, 11.54k words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-ta.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Telugu (760 sentence pairs, 11.55k words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-te.tmx.gz">0.8k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Polish-Thai (265,225 sentence pairs, 2.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-th.tmx.gz">0.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Turkish (5,095,678 sentence pairs, 54.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-tr.tmx.gz">5.1M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Polish-Ukrainian (63,844 sentence pairs, 0.72M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-uk.tmx.gz">63.8k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Polish-Urdu (3,628 sentence pairs, 60.88k words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-ur.tmx.gz">3.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Polish-Vietnamese (456,385 sentence pairs, 6.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Polish-Chinese (615,696 sentence pairs, 4.53M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-zh_cn.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Polish-Chinese (245,601 sentence pairs, 1.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/pl-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.pt.gz">pt</a>
</th><td>32,978</td> <td>201.0M</td> <td>28.7M</td><td></td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Arabic (6,744,248 sentence pairs, 89.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-pt.txt.zip">6.7M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Bulgarian (9,671,225 sentence pairs, 114.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-pt.txt.zip">9.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Bengali (1,478 sentence pairs, 17.04k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-pt.txt.zip">1.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Portuguese-Bosnian (1,233,578 sentence pairs, 14.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-pt.txt.zip">1.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Portuguese-Catalan (96,306 sentence pairs, 1.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-pt.txt.zip">96.3k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-Czech (10,787,103 sentence pairs, 124.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-pt.txt.zip">10.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Danish (4,602,065 sentence pairs, 56.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-pt.txt.zip">4.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Portuguese-German (3,174,448 sentence pairs, 38.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-pt.txt.zip">3.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (12,354,147 sentence pairs, 155.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-pt.txt.zip">12.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (20,508,901 sentence pairs, 253.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-pt.txt.zip">20.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (14,999,668 sentence pairs, 184.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-pt.txt.zip">15.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Portuguese-Estonian (4,364,672 sentence pairs, 48.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-pt.txt.zip">4.4M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Portuguese-Basque (146,244 sentence pairs, 1.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-pt.txt.zip">0.1M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Portuguese-Persian (2,130 sentence pairs, 45.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-pt.txt.zip">2.1k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Finnish (6,558,795 sentence pairs, 69.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-pt.txt.zip">6.6M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Portuguese-French (72,067,696 sentence pairs, 9.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-pt.txt.zip">72.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Portuguese-Hebrew (1,563,744 sentence pairs, 9.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-pt.txt.zip">1.6M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Hindi (1,153 sentence pairs, 22.27k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-pt.txt.zip">1.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Croatian (2,487,811 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-pt.txt.zip">2.5M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Hungarian (5,125,720 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-pt.txt.zip">5.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Armenian (957 sentence pairs, 11.68k words) - Moses format' href="download.php?f=OpenSubtitles2013/hy-pt.txt.zip">1.0k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Portuguese-Indonesian (43,803 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-pt.txt.zip">43.8k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Icelandic (898,000 sentence pairs, 10.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-pt.txt.zip">0.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Italian (2,035,592 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-pt.txt.zip">2.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Japanese (2,389,700 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ja-pt.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Kazakh (1,222 sentence pairs, 12.04k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-pt.txt.zip">1.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Portuguese-Korean (9,912 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-pt.txt.zip">9.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Portuguese-Lithuanian (486,743 sentence pairs, 5.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-pt.txt.zip">0.5M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Portuguese-Latvian (201,289 sentence pairs, 2.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-pt.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Macedonian (715,070 sentence pairs, 8.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-pt.txt.zip">0.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Malayalam (1,279 sentence pairs, 21.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-pt.txt.zip">1.3k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Portuguese-Malay (59,821 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-pt.txt.zip">59.8k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (2,075,673 sentence pairs, 24.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-pt.txt.zip">2.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (10,869,414 sentence pairs, 138.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-pt.txt.zip">10.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Polish (6,199,599 sentence pairs, 69.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-pt.txt.zip">6.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (11,692,038 sentence pairs, 153.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-pt_br.tmx.gz">11.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (12,030,705 sentence pairs, 161.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-ro.tmx.gz">12.0M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Portuguese-Russian (3,121,221 sentence pairs, 39.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-ru.tmx.gz">3.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Portuguese-Sinhala (92,793 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-si.tmx.gz">92.8k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Portuguese-Slovak (1,546,860 sentence pairs, 19.28M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Slovenian (6,127,495 sentence pairs, 74.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sl.tmx.gz">6.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Portuguese-Albanian (1,334,106 sentence pairs, 17.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sq.tmx.gz">1.3M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Serbian (6,075,286 sentence pairs, 78.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sr.tmx.gz">6.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Swedish (3,832,356 sentence pairs, 50.02M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sv.tmx.gz">3.8M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Swahili (311 sentence pairs, 13.10k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-sw.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Tamil (867 sentence pairs, 13.87k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-ta.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Telugu (967 sentence pairs, 14.28k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-te.tmx.gz">1.0k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Portuguese-Thai (616,324 sentence pairs, 5.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-th.tmx.gz">0.6M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Turkish (9,120,838 sentence pairs, 107.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-tr.tmx.gz">9.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Portuguese-Ukrainian (96,687 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-uk.tmx.gz">96.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Portuguese-Urdu (3,963 sentence pairs, 71.08k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-ur.tmx.gz">4.0k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Portuguese-Vietnamese (661,910 sentence pairs, 9.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-vi.tmx.gz">0.7M</a>
</td><td></td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Portuguese-Chinese (964,431 sentence pairs, 8.18M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-zh_cn.tmx.gz">1.0M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Portuguese-Chinese (379,026 sentence pairs, 3.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt_br plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.pt_br.gz">pt_br</a>
</th><td>67,379</td> <td>392.3M</td> <td>57.5M</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Arabic (8,286,448 sentence pairs, 108.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-pt_br.txt.zip">8.3M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Bulgarian (13,065,827 sentence pairs, 153.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-pt_br.txt.zip">13.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Bengali (1,583 sentence pairs, 18.20k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-pt_br.txt.zip">1.6k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Portuguese-Bosnian (1,536,770 sentence pairs, 17.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-pt_br.txt.zip">1.5M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Portuguese-Catalan (114,218 sentence pairs, 1.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-pt_br.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Czech (14,725,229 sentence pairs, 168.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-pt_br.txt.zip">14.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-Danish (5,023,211 sentence pairs, 60.82M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-pt_br.txt.zip">5.0M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Portuguese-German (3,957,180 sentence pairs, 47.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-pt_br.txt.zip">4.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Greek (16,681,092 sentence pairs, 207.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-pt_br.txt.zip">16.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (34,144,414 sentence pairs, 417.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-pt_br.txt.zip">34.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (23,528,391 sentence pairs, 287.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-pt_br.txt.zip">23.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Estonian (4,602,153 sentence pairs, 50.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-pt_br.txt.zip">4.6M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Portuguese-Basque (160,387 sentence pairs, 1.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-pt_br.txt.zip">0.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Persian (1,140 sentence pairs, 33.05k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-pt_br.txt.zip">1.1k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Finnish (7,790,239 sentence pairs, 82.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-pt_br.txt.zip">7.8M</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Portuguese-French (110,260,512 sentence pairs, 2.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-pt_br.txt.zip">110.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Portuguese-Hebrew (2,064,106 sentence pairs, 12.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-pt_br.txt.zip">2.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Hindi (1,647 sentence pairs, 31.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-pt_br.txt.zip">1.6k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Croatian (2,247,713 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-pt_br.txt.zip">2.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Hungarian (15,286,631 sentence pairs, 167.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-pt_br.txt.zip">15.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Armenian (1,027 sentence pairs, 11.67k words) - Moses format' href="download.php?f=OpenSubtitles2013/hy-pt_br.txt.zip">1.0k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Portuguese-Indonesian (47,205 sentence pairs, 0.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-pt_br.txt.zip">47.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Portuguese-Icelandic (921,300 sentence pairs, 10.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-pt_br.txt.zip">0.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Portuguese-Italian (3,633,995 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-pt_br.txt.zip">3.6M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Portuguese-Japanese (356,160 sentence pairs, 3.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-pt_br.txt.zip">0.4M</a>
</td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Portuguese-Korean (15,152 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-pt_br.txt.zip">15.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Portuguese-Lithuanian (511,493 sentence pairs, 5.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-pt_br.txt.zip">0.5M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Portuguese-Latvian (225,867 sentence pairs, 2.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-pt_br.txt.zip">0.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Macedonian (728,274 sentence pairs, 8.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-pt_br.txt.zip">0.7M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Malayalam (1,101 sentence pairs, 17.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-pt_br.txt.zip">1.1k</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Portuguese-Malay (2,037,478 sentence pairs, 22.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-pt_br.txt.zip">2.0M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (2,316,892 sentence pairs, 27.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-pt_br.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (13,796,870 sentence pairs, 174.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-pt_br.txt.zip">13.8M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Portuguese-Polish (7,538,558 sentence pairs, 84.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-pt_br.txt.zip">7.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (18,084,061 sentence pairs, 206.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-pt_br.txt.zip">18.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (15,995,944 sentence pairs, 213.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-ro.tmx.gz">16.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Russian (4,439,468 sentence pairs, 55.63M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-ru.tmx.gz">4.4M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Portuguese-Sinhala (94,216 sentence pairs, 1.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-si.tmx.gz">94.2k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Portuguese-Slovak (1,907,616 sentence pairs, 23.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-sk.tmx.gz">1.9M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Slovenian (6,525,554 sentence pairs, 78.10M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-sl.tmx.gz">6.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Portuguese-Albanian (1,373,394 sentence pairs, 17.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-sq.tmx.gz">1.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Serbian (8,793,115 sentence pairs, 111.25M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-sr.tmx.gz">8.8M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Swedish (4,342,033 sentence pairs, 56.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-sv.tmx.gz">4.3M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Tamil (620 sentence pairs, 9.97k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-ta.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Telugu (631 sentence pairs, 10.07k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-te.tmx.gz">0.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Portuguese-Thai (724,142 sentence pairs, 6.45M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-th.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Turkish (11,746,554 sentence pairs, 136.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-tr.tmx.gz">11.7M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Portuguese-Ukrainian (92,812 sentence pairs, 1.07M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-uk.tmx.gz">92.8k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Portuguese-Urdu (3,910 sentence pairs, 66.63k words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-ur.tmx.gz">3.9k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Portuguese-Vietnamese (687,813 sentence pairs, 9.67M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-vi.tmx.gz">0.7M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Chinese (1,043,319 sentence pairs, 8.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-zh_cn.tmx.gz">1.0M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Portuguese-Chinese (424,357 sentence pairs, 3.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/pt_br-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ro.gz">ro</a>
</th><td>52,529</td> <td>340.2M</td> <td>48.0M</td><td></td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Arabic (8,353,169 sentence pairs, 111.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ro.txt.zip">8.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Bulgarian (13,424,548 sentence pairs, 159.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ro.txt.zip">13.4M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Romanian-Bosnian (1,574,762 sentence pairs, 18.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ro.txt.zip">1.6M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Romanian-Catalan (113,915 sentence pairs, 1.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-ro.txt.zip">0.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Czech (13,887,818 sentence pairs, 160.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ro.txt.zip">13.9M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-Danish (5,376,834 sentence pairs, 66.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ro.txt.zip">5.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Romanian-German (3,567,377 sentence pairs, 43.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ro.txt.zip">3.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Greek (16,005,339 sentence pairs, 202.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ro.txt.zip">16.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-English (28,924,241 sentence pairs, 353.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ro.txt.zip">28.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (20,192,370 sentence pairs, 251.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ro.txt.zip">20.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Romanian-Estonian (4,970,287 sentence pairs, 55.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ro.txt.zip">5.0M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Romanian-Basque (139,870 sentence pairs, 1.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-ro.txt.zip">0.1M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Romanian-Persian (2,361 sentence pairs, 81.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-ro.txt.zip">2.4k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-Finnish (7,972,940 sentence pairs, 85.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ro.txt.zip">8.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-French (14,215,803 sentence pairs, 131.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ro.txt.zip">14.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Romanian-Hebrew (9,735,135 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-ro.txt.zip">9.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Romanian-Hindi (1,165 sentence pairs, 22.61k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ro.txt.zip">1.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Croatian (12,621,579 sentence pairs, 147.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ro.txt.zip">12.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Romanian-Hungarian (6,382,914 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ro.txt.zip">6.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Armenian (1,010 sentence pairs, 11.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/hy-ro.txt.zip">1.0k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Romanian-Indonesian (45,352 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-ro.txt.zip">45.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Romanian-Icelandic (967,511 sentence pairs, 11.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-ro.txt.zip">1.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Romanian-Italian (10,015,051 sentence pairs, 125.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ro.txt.zip">10.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Romanian-Japanese (381,637 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ja-ro.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Kazakh (1,275 sentence pairs, 11.83k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-ro.txt.zip">1.3k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Romanian-Korean (17,726 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-ro.txt.zip">17.7k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Romanian-Lithuanian (550,095 sentence pairs, 5.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-ro.txt.zip">0.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Romanian-Latvian (236,178 sentence pairs, 1.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-ro.txt.zip">0.2M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Romanian-Macedonian (888,863 sentence pairs, 10.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-ro.txt.zip">0.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Romanian-Malayalam (1,081 sentence pairs, 17.49k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-ro.txt.zip">1.1k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Romanian-Malay (2,332,111 sentence pairs, 26.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-ro.txt.zip">2.3M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Romanian-BokmÃ¥l, Norwegian (2,332,130 sentence pairs, 28.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-ro.txt.zip">2.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (13,873,207 sentence pairs, 178.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-ro.txt.zip">13.9M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Polish (7,871,957 sentence pairs, 89.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-ro.txt.zip">7.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (16,339,451 sentence pairs, 197.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-ro.txt.zip">16.3M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (22,783,704 sentence pairs, 271.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-ro.txt.zip">22.8M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Romanian-Russian (3,946,621 sentence pairs, 49.99M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-ru.tmx.gz">3.9M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Romanian-Sinhala (97,749 sentence pairs, 1.27M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-si.tmx.gz">97.7k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Romanian-Slovak (1,955,731 sentence pairs, 24.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Romanian-Slovenian (7,213,286 sentence pairs, 88.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-sl.tmx.gz">7.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Romanian-Albanian (1,523,301 sentence pairs, 19.71M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-sq.tmx.gz">1.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Serbian (8,717,013 sentence pairs, 112.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-sr.tmx.gz">8.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Swedish (4,591,961 sentence pairs, 60.52M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-sv.tmx.gz">4.6M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Tamil (882 sentence pairs, 14.10k words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-ta.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Romanian-Telugu (972 sentence pairs, 14.41k words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-te.tmx.gz">1.0k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Romanian-Thai (707,233 sentence pairs, 6.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-th.tmx.gz">0.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Turkish (11,562,912 sentence pairs, 137.15M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-tr.tmx.gz">11.6M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Romanian-Ukrainian (103,782 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-uk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Romanian-Urdu (4,013 sentence pairs, 70.95k words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-ur.tmx.gz">4.0k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Romanian-Vietnamese (749,802 sentence pairs, 10.74M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-vi.tmx.gz">0.7M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Romanian-Chinese (1,076,953 sentence pairs, 9.35M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-zh_cn.tmx.gz">1.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Romanian-Chinese (437,954 sentence pairs, 3.86M words) - TMX format' href="download.php?f=OpenSubtitles2013/ro-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ru.gz">ru</a>
</th><td>10,856</td> <td>57.5M</td> <td>8.5M</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Russian-Arabic (2,528,068 sentence pairs, 32.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ru.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#d0ffce"><a rel="nofollow" title='Russian-Bulgarian (3,394,804 sentence pairs, 39.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ru.txt.zip">3.4M</a>
</td><td></td><td bgcolor="#eaffcc"><a rel="nofollow" title='Russian-Bosnian (321,100 sentence pairs, 3.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ru.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Russian-Catalan (66,026 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-ru.txt.zip">66.0k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Russian-Czech (3,338,379 sentence pairs, 38.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ru.txt.zip">3.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Russian-Danish (1,408,457 sentence pairs, 16.93M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ru.txt.zip">1.4M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Russian-German (1,314,087 sentence pairs, 15.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ru.txt.zip">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Russian-Greek (3,822,079 sentence pairs, 46.99M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ru.txt.zip">3.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Russian-English (6,593,611 sentence pairs, 77.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ru.txt.zip">6.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Russian-Spanish (5,181,678 sentence pairs, 62.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ru.txt.zip">5.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Russian-Estonian (1,310,791 sentence pairs, 13.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ru.txt.zip">1.3M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Russian-Basque (49,320 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-ru.txt.zip">49.3k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Russian-Persian (1,463 sentence pairs, 56.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-ru.txt.zip">1.5k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Russian-Finnish (1,826,341 sentence pairs, 18.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ru.txt.zip">1.8M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Russian-French (4,069,262 sentence pairs, 50.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ru.txt.zip">4.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Russian-Hebrew (2,092,400 sentence pairs, 12.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ru.txt.zip">2.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Hindi (160 sentence pairs, 3.91k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ru.txt.zip">0.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Russian-Croatian (2,785,964 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ru.txt.zip">2.8M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Russian-Hungarian (3,869,634 sentence pairs, 41.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ru.txt.zip">3.9M</a>
</td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Russian-Indonesian (29,538 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-ru.txt.zip">29.5k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Russian-Icelandic (284,768 sentence pairs, 3.09M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-ru.txt.zip">0.3M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Russian-Italian (3,199,374 sentence pairs, 39.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ru.txt.zip">3.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Russian-Japanese (193,899 sentence pairs, 1.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-ru.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Kazakh (1,227 sentence pairs, 11.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-ru.txt.zip">1.2k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Korean (7,126 sentence pairs, 82.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-ru.txt.zip">7.1k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Russian-Lithuanian (829,420 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-ru.txt.zip">0.8M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Russian-Latvian (110,215 sentence pairs, 1.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-ru.txt.zip">0.1M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Russian-Macedonian (256,090 sentence pairs, 2.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-ru.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Malayalam (713 sentence pairs, 9.83k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-ru.txt.zip">0.7k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Malay (689,709 sentence pairs, 7.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-ru.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (699,463 sentence pairs, 8.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-ru.txt.zip">0.7M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Russian-Dutch (3,166,592 sentence pairs, 39.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-ru.txt.zip">3.2M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Russian-Polish (1,914,118 sentence pairs, 21.04M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-ru.txt.zip">1.9M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Russian-Portuguese (3,527,272 sentence pairs, 41.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-ru.txt.zip">3.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Russian-Portuguese (5,064,295 sentence pairs, 59.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-ru.txt.zip">5.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Russian-Romanian (4,491,165 sentence pairs, 52.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-ru.txt.zip">4.5M</a>
</td><td></td><td bgcolor="#fff7f0"><a rel="nofollow" title='Russian-Sinhala (38,978 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-si.tmx.gz">39.0k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Russian-Slovak (610,552 sentence pairs, 7.19M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Russian-Slovenian (1,902,991 sentence pairs, 21.81M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Russian-Albanian (524,950 sentence pairs, 6.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-sq.tmx.gz">0.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Russian-Serbian (2,339,327 sentence pairs, 28.46M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-sr.tmx.gz">2.3M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Russian-Swedish (1,267,537 sentence pairs, 15.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-sv.tmx.gz">1.3M</a>
</td><td></td><td></td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Russian-Thai (314,572 sentence pairs, 2.69M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-th.tmx.gz">0.3M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Russian-Turkish (3,341,380 sentence pairs, 37.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-tr.tmx.gz">3.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Russian-Ukrainian (59,504 sentence pairs, 0.63M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-uk.tmx.gz">59.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Urdu (2,361 sentence pairs, 39.79k words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-ur.tmx.gz">2.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Russian-Vietnamese (250,808 sentence pairs, 3.44M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Russian-Chinese (363,710 sentence pairs, 2.89M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-zh_cn.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Russian-Chinese (195,879 sentence pairs, 1.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/ru-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized si plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.si.gz">si</a>
</th><td>130</td> <td>0.9M</td> <td>0.1M</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Arabic (93,552 sentence pairs, 1.09M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-si.txt.zip">93.6k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Bulgarian (86,341 sentence pairs, 1.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-si.txt.zip">86.3k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Sinhala-Bosnian (4,990 sentence pairs, 65.88k words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-si.txt.zip">5.0k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Czech (84,375 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-si.txt.zip">84.4k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Danish (79,459 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-si.txt.zip">79.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-German (32,457 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-si.txt.zip">32.5k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Sinhala-Greek (83,869 sentence pairs, 1.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-si.txt.zip">83.9k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Sinhala-English (110,010 sentence pairs, 1.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-si.txt.zip">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Spanish (102,681 sentence pairs, 1.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-si.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Sinhala-Estonian (58,117 sentence pairs, 0.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-si.txt.zip">58.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Sinhala-Basque (8,121 sentence pairs, 90.75k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-si.txt.zip">8.1k</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Sinhala-Finnish (54,271 sentence pairs, 0.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-si.txt.zip">54.3k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-French (67,039 sentence pairs, 0.90M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-si.txt.zip">67.0k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Hebrew (90,301 sentence pairs, 1.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-si.txt.zip">90.3k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Sinhala-Croatian (74,686 sentence pairs, 0.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-si.txt.zip">74.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Hungarian (87,047 sentence pairs, 1.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-si.txt.zip">87.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Indonesian (920 sentence pairs, 14.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-si.txt.zip">0.9k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Sinhala-Icelandic (22,774 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-si.txt.zip">22.8k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Sinhala-Italian (57,004 sentence pairs, 0.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-si.txt.zip">57.0k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-Japanese (25,413 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-si.txt.zip">25.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Sinhala-Lithuanian (21,314 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-si.txt.zip">21.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Sinhala-Latvian (2,020 sentence pairs, 25.71k words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-si.txt.zip">2.0k</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Sinhala-Macedonian (23,603 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-si.txt.zip">23.6k</a>
</td><td></td><td bgcolor="#fffcf1"><a rel="nofollow" title='Sinhala-Malay (60,443 sentence pairs, 0.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-si.txt.zip">60.4k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Sinhala-BokmÃ¥l, Norwegian (36,446 sentence pairs, 0.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-si.txt.zip">36.4k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Sinhala-Dutch (73,653 sentence pairs, 1.00M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-si.txt.zip">73.7k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Sinhala-Polish (68,022 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-si.txt.zip">68.0k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Sinhala-Portuguese (96,535 sentence pairs, 1.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-si.txt.zip">96.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Sinhala-Portuguese (97,251 sentence pairs, 1.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-si.txt.zip">97.3k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Sinhala-Romanian (102,456 sentence pairs, 1.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-si.txt.zip">0.1M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Sinhala-Russian (39,790 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-si.txt.zip">39.8k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Sinhala-Slovak (21,254 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-sk.tmx.gz">21.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Sinhala-Slovenian (67,303 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-sl.tmx.gz">67.3k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Sinhala-Albanian (39,232 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-sq.tmx.gz">39.2k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Serbian (83,875 sentence pairs, 1.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-sr.tmx.gz">83.9k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Sinhala-Swedish (54,118 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-sv.tmx.gz">54.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Sinhala-Thai (9,032 sentence pairs, 66.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/si-th.tmx.gz">9.0k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Sinhala-Turkish (89,273 sentence pairs, 1.03M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-tr.tmx.gz">89.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Sinhala-Ukrainian (2,906 sentence pairs, 34.02k words) - TMX format' href="download.php?f=OpenSubtitles2013/si-uk.tmx.gz">2.9k</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Sinhala-Vietnamese (28,017 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-vi.tmx.gz">28.0k</a>
</td><td></td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Sinhala-Chinese (26,636 sentence pairs, 0.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-zh_cn.tmx.gz">26.6k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Chinese (15,848 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2013/si-zh_tw.tmx.gz">15.8k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sk.gz">sk</a>
</th><td>3,418</td> <td>17.7M</td> <td>2.6M</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Arabic (1,167,268 sentence pairs, 15.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-sk.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovak-Bulgarian (1,530,915 sentence pairs, 17.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-sk.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Slovak-Bosnian (167,160 sentence pairs, 1.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-sk.txt.zip">0.2M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Slovak-Catalan (18,504 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-sk.txt.zip">18.5k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Czech (1,724,259 sentence pairs, 18.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-sk.txt.zip">1.7M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovak-Danish (718,494 sentence pairs, 8.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-sk.txt.zip">0.7M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Slovak-German (491,418 sentence pairs, 5.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-sk.txt.zip">0.5M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovak-Greek (1,838,858 sentence pairs, 22.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sk.txt.zip">1.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Slovak-English (2,740,026 sentence pairs, 32.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-sk.txt.zip">2.7M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovak-Spanish (2,079,767 sentence pairs, 24.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sk.txt.zip">2.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-Estonian (702,663 sentence pairs, 7.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-sk.txt.zip">0.7M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Slovak-Basque (37,670 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-sk.txt.zip">37.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Persian (172 sentence pairs, 2.62k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-sk.txt.zip">0.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Slovak-Finnish (969,817 sentence pairs, 10.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-sk.txt.zip">1.0M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Slovak-French (1,602,745 sentence pairs, 19.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-sk.txt.zip">1.6M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-Hebrew (7,348,138 sentence pairs, 7.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-sk.txt.zip">7.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Hindi (288 sentence pairs, 5.31k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-sk.txt.zip">0.3k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovak-Croatian (2,038,719 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-sk.txt.zip">2.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovak-Hungarian (6,796,758 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-sk.txt.zip">6.8M</a>
</td><td></td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Slovak-Indonesian (15,663 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sk.txt.zip">15.7k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovak-Icelandic (508,986 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/is-sk.txt.zip">0.5M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovak-Italian (1,597,559 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-sk.txt.zip">1.6M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Slovak-Japanese (74,922 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-sk.txt.zip">74.9k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovak-Kazakh (968 sentence pairs, 10.24k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-sk.txt.zip">1.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Korean (1,444 sentence pairs, 17.84k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-sk.txt.zip">1.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Slovak-Lithuanian (79,823 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-sk.txt.zip">79.8k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Slovak-Latvian (43,846 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-sk.txt.zip">43.8k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Slovak-Macedonian (104,725 sentence pairs, 1.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-sk.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Malayalam (274 sentence pairs, 2.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-sk.txt.zip">0.3k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-Malay (347,623 sentence pairs, 3.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-sk.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Slovak-BokmÃ¥l, Norwegian (288,889 sentence pairs, 3.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-sk.txt.zip">0.3M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Slovak-Dutch (1,465,874 sentence pairs, 18.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-sk.txt.zip">1.5M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovak-Polish (808,907 sentence pairs, 8.82M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-sk.txt.zip">0.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Slovak-Portuguese (1,776,538 sentence pairs, 20.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sk.txt.zip">1.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovak-Portuguese (2,208,658 sentence pairs, 25.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-sk.txt.zip">2.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovak-Romanian (169,721 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ro-sk.txt.zip">0.2M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-Russian (669,416 sentence pairs, 7.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-sk.txt.zip">0.7M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Slovak-Sinhala (21,676 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-sk.txt.zip">21.7k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Slovenian (1,066,941 sentence pairs, 12.21M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-Albanian (327,069 sentence pairs, 4.06M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Serbian (1,051,727 sentence pairs, 12.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Slovak-Swedish (622,207 sentence pairs, 7.76M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-sv.tmx.gz">0.6M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Slovak-Thai (155,223 sentence pairs, 1.31M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-th.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Slovak-Turkish (1,532,427 sentence pairs, 16.75M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-tr.tmx.gz">1.5M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovak-Ukrainian (11,818 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-uk.tmx.gz">11.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovak-Urdu (2,000 sentence pairs, 34.87k words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-ur.tmx.gz">2.0k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Slovak-Vietnamese (102,761 sentence pairs, 1.40M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-vi.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Slovak-Chinese (186,636 sentence pairs, 1.51M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Slovak-Chinese (71,541 sentence pairs, 0.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/sk-zh_tw.tmx.gz">71.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sl.gz">sl</a>
</th><td>13,323</td> <td>74.3M</td> <td>12.3M</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Arabic (4,361,678 sentence pairs, 53.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-sl.txt.zip">4.4M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Bulgarian (5,982,625 sentence pairs, 64.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-sl.txt.zip">6.0M</a>
</td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovenian-Bosnian (826,342 sentence pairs, 8.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-sl.txt.zip">0.8M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Slovenian-Catalan (78,454 sentence pairs, 0.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-sl.txt.zip">78.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Czech (6,383,198 sentence pairs, 67.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-sl.txt.zip">6.4M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Slovenian-Danish (3,295,129 sentence pairs, 37.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-sl.txt.zip">3.3M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Slovenian-German (2,186,807 sentence pairs, 24.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-sl.txt.zip">2.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Slovenian-Greek (7,126,153 sentence pairs, 82.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sl.txt.zip">7.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Slovenian-English (10,361,262 sentence pairs, 118.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-sl.txt.zip">10.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Spanish (8,054,248 sentence pairs, 91.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sl.txt.zip">8.1M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Slovenian-Estonian (3,303,182 sentence pairs, 33.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-sl.txt.zip">3.3M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Slovenian-Basque (103,813 sentence pairs, 1.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-sl.txt.zip">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovenian-Persian (616 sentence pairs, 16.94k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-sl.txt.zip">0.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Finnish (4,661,034 sentence pairs, 44.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-sl.txt.zip">4.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-French (5,936,750 sentence pairs, 55.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-sl.txt.zip">5.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Hebrew (5,175,097 sentence pairs, 60.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-sl.txt.zip">5.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Hindi (287 sentence pairs, 5.33k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-sl.txt.zip">0.3k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovenian-Croatian (3,832,790 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-sl.txt.zip">3.8M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Hungarian (6,043,560 sentence pairs, 60.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-sl.txt.zip">6.0M</a>
</td><td></td><td bgcolor="#fff2ec"><a rel="nofollow" title='Slovenian-Indonesian (33,186 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sl.txt.zip">33.2k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovenian-Icelandic (793,147 sentence pairs, 8.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-sl.txt.zip">0.8M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Slovenian-Italian (3,669,651 sentence pairs, 41.99M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-sl.txt.zip">3.7M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Slovenian-Japanese (211,059 sentence pairs, 1.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-sl.txt.zip">0.2M</a>
</td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovenian-Korean (10,424 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-sl.txt.zip">10.4k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovenian-Lithuanian (420,452 sentence pairs, 4.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Slovenian-Latvian (146,692 sentence pairs, 1.44M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-sl.txt.zip">0.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Slovenian-Macedonian (634,118 sentence pairs, 6.86M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-sl.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Malayalam (852 sentence pairs, 11.51k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-sl.txt.zip">0.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovenian-Malay (1,473,910 sentence pairs, 15.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-sl.txt.zip">1.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Slovenian-BokmÃ¥l, Norwegian (1,559,240 sentence pairs, 17.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-sl.txt.zip">1.6M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Slovenian-Dutch (6,444,939 sentence pairs, 75.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-sl.txt.zip">6.4M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Polish (4,258,619 sentence pairs, 44.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-sl.txt.zip">4.3M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovenian-Portuguese (353,212 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sl.txt.zip">0.4M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Slovenian-Portuguese (8,399,099 sentence pairs, 92.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-sl.txt.zip">8.4M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Slovenian-Romanian (173,282 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ro-sl.txt.zip">0.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Russian (2,099,839 sentence pairs, 22.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-sl.txt.zip">2.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Slovenian-Sinhala (70,527 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-sl.txt.zip">70.5k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Slovak (1,196,917 sentence pairs, 12.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-sl.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovenian-Albanian (1,120,304 sentence pairs, 13.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-sq.tmx.gz">1.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Serbian (4,191,722 sentence pairs, 48.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-sr.tmx.gz">4.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Slovenian-Swedish (2,841,078 sentence pairs, 34.20M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-sv.tmx.gz">2.8M</a>
</td><td></td><td></td><td></td><td bgcolor="#ebffcc"><a rel="nofollow" title='Slovenian-Thai (397,190 sentence pairs, 3.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-th.tmx.gz">0.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Turkish (5,683,566 sentence pairs, 60.41M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-tr.tmx.gz">5.7M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Slovenian-Ukrainian (77,644 sentence pairs, 0.82M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-uk.tmx.gz">77.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Slovenian-Urdu (2,779 sentence pairs, 49.93k words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-ur.tmx.gz">2.8k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Slovenian-Vietnamese (492,262 sentence pairs, 6.64M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Slovenian-Chinese (761,233 sentence pairs, 5.65M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-zh_cn.tmx.gz">0.8M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Slovenian-Chinese (330,970 sentence pairs, 2.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/sl-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sq.gz">sq</a>
</th><td>1,993</td> <td>16.0M</td> <td>2.3M</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Arabic (1,004,789 sentence pairs, 13.50M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-sq.txt.zip">1.0M</a>
</td><td></td><td bgcolor="#dbffc6"><a rel="nofollow" title='Albanian-Bulgarian (1,264,154 sentence pairs, 14.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-sq.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Albanian-Bosnian (221,052 sentence pairs, 2.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Albanian-Catalan (17,724 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-sq.txt.zip">17.7k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Albanian-Czech (1,282,184 sentence pairs, 14.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-sq.txt.zip">1.3M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Albanian-Danish (917,872 sentence pairs, 11.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-sq.txt.zip">0.9M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-German (521,194 sentence pairs, 6.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-sq.txt.zip">0.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Albanian-Greek (1,312,768 sentence pairs, 16.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sq.txt.zip">1.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Albanian-English (1,896,312 sentence pairs, 22.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-sq.txt.zip">1.9M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Albanian-Spanish (1,482,535 sentence pairs, 18.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sq.txt.zip">1.5M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Albanian-Estonian (980,339 sentence pairs, 11.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-sq.txt.zip">1.0M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Albanian-Basque (53,543 sentence pairs, 0.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-sq.txt.zip">53.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Albanian-Persian (1,161 sentence pairs, 34.51k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-sq.txt.zip">1.2k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Albanian-Finnish (1,087,212 sentence pairs, 11.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-sq.txt.zip">1.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-French (7,442,332 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/fr-sq.txt.zip">7.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Hebrew (1,060,018 sentence pairs, 13.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-sq.txt.zip">1.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Hindi (291 sentence pairs, 5.67k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-sq.txt.zip">0.3k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Croatian (1,226,823 sentence pairs, 14.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-sq.txt.zip">1.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-Hungarian (2,724,351 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-sq.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Albanian-Indonesian (14,541 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sq.txt.zip">14.5k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Albanian-Icelandic (246,760 sentence pairs, 3.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-Italian (3,593,643 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-sq.txt.zip">3.6M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Albanian-Japanese (95,066 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-sq.txt.zip">95.1k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Albanian-Korean (6,263 sentence pairs, 73.09k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-sq.txt.zip">6.3k</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Albanian-Lithuanian (211,342 sentence pairs, 2.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-sq.txt.zip">0.2M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Albanian-Latvian (63,424 sentence pairs, 0.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-sq.txt.zip">63.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Macedonian (272,913 sentence pairs, 3.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-sq.txt.zip">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Malayalam (296 sentence pairs, 3.41k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-sq.txt.zip">0.3k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Albanian-Malay (656,148 sentence pairs, 7.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-sq.txt.zip">0.7M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-BokmÃ¥l, Norwegian (493,882 sentence pairs, 6.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-sq.txt.zip">0.5M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Albanian-Dutch (1,350,867 sentence pairs, 17.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-sq.txt.zip">1.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Albanian-Polish (1,080,015 sentence pairs, 12.50M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-sq.txt.zip">1.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-Portuguese (227,718 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sq.txt.zip">0.2M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Albanian-Portuguese (1,600,665 sentence pairs, 18.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-sq.txt.zip">1.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-Romanian (206,275 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ro-sq.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Albanian-Russian (561,923 sentence pairs, 6.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-sq.txt.zip">0.6M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Albanian-Sinhala (39,963 sentence pairs, 0.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-sq.txt.zip">40.0k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Slovak (355,043 sentence pairs, 4.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-sq.txt.zip">0.4M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Albanian-Slovenian (354,922 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sl-sq.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Serbian (1,086,376 sentence pairs, 13.55M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-sr.tmx.gz">1.1M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Albanian-Swedish (753,435 sentence pairs, 9.92M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-sv.tmx.gz">0.8M</a>
</td><td></td><td></td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Albanian-Thai (53,796 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-th.tmx.gz">53.8k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Albanian-Turkish (1,239,470 sentence pairs, 14.24M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Albanian-Ukrainian (29,801 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-uk.tmx.gz">29.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Albanian-Urdu (2,315 sentence pairs, 45.45k words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-ur.tmx.gz">2.3k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Albanian-Vietnamese (212,117 sentence pairs, 3.09M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-vi.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Albanian-Chinese (287,785 sentence pairs, 2.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-zh_cn.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Albanian-Chinese (143,938 sentence pairs, 1.29M words) - TMX format' href="download.php?f=OpenSubtitles2013/sq-zh_tw.tmx.gz">0.1M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sr.gz">sr</a>
</th><td>20,439</td> <td>111.3M</td> <td>16.9M</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Serbian-Arabic (4,811,594 sentence pairs, 61.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-sr.txt.zip">4.8M</a>
</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Bulgarian (7,209,768 sentence pairs, 82.94M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-sr.txt.zip">7.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Serbian-Bengali (1,249 sentence pairs, 15.44k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-sr.txt.zip">1.2k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Serbian-Bosnian (657,428 sentence pairs, 7.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-sr.txt.zip">0.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Serbian-Catalan (64,122 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-sr.txt.zip">64.1k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Czech (7,545,395 sentence pairs, 84.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-sr.txt.zip">7.5M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Serbian-Danish (2,911,681 sentence pairs, 34.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-sr.txt.zip">2.9M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Serbian-German (2,333,752 sentence pairs, 27.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-sr.txt.zip">2.3M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Serbian-Greek (8,641,488 sentence pairs, 106.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sr.txt.zip">8.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Serbian-English (13,225,833 sentence pairs, 158.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-sr.txt.zip">13.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Serbian-Spanish (10,230,022 sentence pairs, 124.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sr.txt.zip">10.2M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Serbian-Estonian (2,869,669 sentence pairs, 31.06M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-sr.txt.zip">2.9M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Serbian-Basque (119,783 sentence pairs, 1.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-sr.txt.zip">0.1M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Serbian-Persian (1,960 sentence pairs, 53.32k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-sr.txt.zip">2.0k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Serbian-Finnish (4,643,262 sentence pairs, 47.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-sr.txt.zip">4.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Serbian-French (7,555,827 sentence pairs, 93.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-sr.txt.zip">7.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Hebrew (9,415,470 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-sr.txt.zip">9.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Hindi (285 sentence pairs, 5.28k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-sr.txt.zip">0.3k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Serbian-Croatian (5,888,750 sentence pairs, 62.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-sr.txt.zip">5.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Hungarian (14,523,532 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-sr.txt.zip">14.5M</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Serbian-Indonesian (34,949 sentence pairs, 0.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sr.txt.zip">34.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Serbian-Icelandic (666,261 sentence pairs, 7.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-sr.txt.zip">0.7M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Italian (3,235,848 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-sr.txt.zip">3.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Serbian-Japanese (225,094 sentence pairs, 1.99M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-sr.txt.zip">0.2M</a>
</td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Serbian-Korean (9,976 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-sr.txt.zip">10.0k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Lithuanian (687,516 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/lt-sr.txt.zip">0.7M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Serbian-Latvian (134,867 sentence pairs, 1.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-sr.txt.zip">0.1M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Serbian-Macedonian (486,091 sentence pairs, 5.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-sr.txt.zip">0.5M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Serbian-Malayalam (1,102 sentence pairs, 16.55k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-sr.txt.zip">1.1k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Serbian-Malay (1,302,656 sentence pairs, 14.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-sr.txt.zip">1.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Serbian-BokmÃ¥l, Norwegian (1,405,411 sentence pairs, 16.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-sr.txt.zip">1.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Dutch (6,873,499 sentence pairs, 85.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-sr.txt.zip">6.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Serbian-Polish (4,099,743 sentence pairs, 45.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-sr.txt.zip">4.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Serbian-Portuguese (7,235,084 sentence pairs, 86.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sr.txt.zip">7.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Serbian-Portuguese (10,760,909 sentence pairs, 125.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-sr.txt.zip">10.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Serbian-Romanian (10,606,066 sentence pairs, 125.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-sr.txt.zip">10.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Russian (163,351 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ru-sr.txt.zip">0.2M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Serbian-Sinhala (86,185 sentence pairs, 1.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-sr.txt.zip">86.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Serbian-Slovak (215,067 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sk-sr.txt.zip">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Serbian-Slovenian (5,021,783 sentence pairs, 53.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-sr.txt.zip">5.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Serbian-Albanian (1,227,958 sentence pairs, 14.29M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-sr.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Serbian-Swedish (2,710,281 sentence pairs, 34.16M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-sv.tmx.gz">2.7M</a>
</td><td></td><td></td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Serbian-Thai (358,861 sentence pairs, 3.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-th.tmx.gz">0.4M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Serbian-Turkish (6,674,467 sentence pairs, 74.97M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-tr.tmx.gz">6.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Serbian-Ukrainian (68,418 sentence pairs, 0.77M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-uk.tmx.gz">68.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Serbian-Urdu (1,896 sentence pairs, 34.44k words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Serbian-Vietnamese (473,740 sentence pairs, 6.59M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-vi.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Serbian-Chinese (690,353 sentence pairs, 5.57M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-zh_cn.tmx.gz">0.7M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Serbian-Chinese (293,158 sentence pairs, 2.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/sr-zh_tw.tmx.gz">0.3M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sv.gz">sv</a>
</th><td>7,220</td> <td>39.4M</td> <td>5.8M</td><td></td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Arabic (2,857,867 sentence pairs, 37.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-sv.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Swedish-Bulgarian (3,415,040 sentence pairs, 40.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-sv.txt.zip">3.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Bengali (1,088 sentence pairs, 15.82k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-sv.txt.zip">1.1k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Swedish-Bosnian (419,987 sentence pairs, 5.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-sv.txt.zip">0.4M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swedish-Catalan (53,754 sentence pairs, 0.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-sv.txt.zip">53.8k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Swedish-Czech (3,803,700 sentence pairs, 44.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-sv.txt.zip">3.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Swedish-Danish (2,753,161 sentence pairs, 32.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-sv.txt.zip">2.8M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Swedish-German (1,651,624 sentence pairs, 20.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-sv.txt.zip">1.7M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Greek (4,480,628 sentence pairs, 56.82M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sv.txt.zip">4.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Swedish-English (6,420,027 sentence pairs, 81.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-sv.txt.zip">6.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Swedish-Spanish (4,938,187 sentence pairs, 62.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sv.txt.zip">4.9M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Swedish-Estonian (1,900,168 sentence pairs, 21.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-sv.txt.zip">1.9M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Swedish-Basque (68,042 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-sv.txt.zip">68.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Swedish-Persian (1,813 sentence pairs, 43.18k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-sv.txt.zip">1.8k</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Finnish (3,606,907 sentence pairs, 37.11M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-sv.txt.zip">3.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-French (15,091,781 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/fr-sv.txt.zip">15.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-Hebrew (12,774,616 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-sv.txt.zip">12.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Hindi (285 sentence pairs, 5.74k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-sv.txt.zip">0.3k</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Swedish-Croatian (3,443,224 sentence pairs, 40.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-sv.txt.zip">3.4M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-Hungarian (11,743,944 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-sv.txt.zip">11.7M</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Swedish-Indonesian (27,802 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sv.txt.zip">27.8k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Swedish-Icelandic (3,092,384 sentence pairs, 2.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-sv.txt.zip">3.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-Italian (2,008,774 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-sv.txt.zip">2.0M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Swedish-Japanese (154,413 sentence pairs, 1.43M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-sv.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Kazakh (1,031 sentence pairs, 11.18k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-sv.txt.zip">1.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Swedish-Korean (8,306 sentence pairs, 96.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-sv.txt.zip">8.3k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Swedish-Lithuanian (242,995 sentence pairs, 2.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-sv.txt.zip">0.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-Latvian (479,966 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/lv-sv.txt.zip">0.5M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Swedish-Macedonian (325,551 sentence pairs, 3.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-sv.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Malayalam (583 sentence pairs, 8.33k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-sv.txt.zip">0.6k</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Swedish-Malay (921,933 sentence pairs, 10.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-sv.txt.zip">0.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (1,812,649 sentence pairs, 20.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-sv.txt.zip">1.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Swedish-Dutch (3,726,976 sentence pairs, 47.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-sv.txt.zip">3.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Swedish-Polish (2,260,018 sentence pairs, 25.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-sv.txt.zip">2.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Swedish-Portuguese (4,452,942 sentence pairs, 54.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sv.txt.zip">4.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Portuguese (5,043,397 sentence pairs, 61.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-sv.txt.zip">5.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Swedish-Romanian (296,901 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ro-sv.txt.zip">0.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-Russian (1,364,795 sentence pairs, 16.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-sv.txt.zip">1.4M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Swedish-Sinhala (55,040 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-sv.txt.zip">55.0k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Swedish-Slovak (679,984 sentence pairs, 8.10M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-sv.txt.zip">0.7M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Slovenian (3,271,387 sentence pairs, 37.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-sv.txt.zip">3.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Swedish-Albanian (815,383 sentence pairs, 10.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-sv.txt.zip">0.8M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Swedish-Serbian (3,028,848 sentence pairs, 36.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-sv.txt.zip">3.0M</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Swedish-Thai (261,013 sentence pairs, 2.30M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-th.tmx.gz">0.3M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Swedish-Turkish (3,568,335 sentence pairs, 41.22M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-tr.tmx.gz">3.6M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Swedish-Ukrainian (50,240 sentence pairs, 0.60M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-uk.tmx.gz">50.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Swedish-Urdu (1,898 sentence pairs, 34.84k words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-ur.tmx.gz">1.9k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Swedish-Vietnamese (339,320 sentence pairs, 4.95M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-vi.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Swedish-Chinese (530,355 sentence pairs, 4.38M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-zh_cn.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Swedish-Chinese (205,930 sentence pairs, 1.70M words) - TMX format' href="download.php?f=OpenSubtitles2013/sv-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sw plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.sw.gz">sw</a>
</th><td>1</td> <td>6.9k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Greek (317 sentence pairs, 11.68k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-sw.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Spanish (306 sentence pairs, 12.57k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-sw.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Indonesian (371 sentence pairs, 11.71k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-sw.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swahili-Portuguese (312 sentence pairs, 13.11k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-sw.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swahili-Chinese (338 sentence pairs, 6.88k words) - TMX format' href="download.php?f=OpenSubtitles2013/sw-zh_tw.tmx.gz">0.3k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ta plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ta.gz">ta</a>
</th><td>15</td> <td>0.1M</td> <td>7.1k</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tamil-Arabic (743 sentence pairs, 12.39k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ta.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tamil-Czech (603 sentence pairs, 8.87k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ta.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Greek (315 sentence pairs, 4.44k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ta.txt.zip">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tamil-English (1,339 sentence pairs, 20.63k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ta.txt.zip">1.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tamil-Spanish (953 sentence pairs, 15.13k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ta.txt.zip">1.0k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Tamil-Persian (688 sentence pairs, 25.40k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-ta.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Hebrew (349 sentence pairs, 4.49k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ta.txt.zip">0.3k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Tamil-Hindi (6,783 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-ta.txt.zip">6.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Croatian (338 sentence pairs, 4.63k words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ta.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Hungarian (349 sentence pairs, 4.45k words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ta.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Japanese (522 sentence pairs, 6.78k words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-ta.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-BokmÃ¥l, Norwegian (254 sentence pairs, 4.65k words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-ta.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Dutch (316 sentence pairs, 5.07k words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-ta.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tamil-Polish (769 sentence pairs, 11.61k words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-ta.txt.zip">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tamil-Portuguese (908 sentence pairs, 14.00k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-ta.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tamil-Portuguese (651 sentence pairs, 10.06k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-ta.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tamil-Romanian (932 sentence pairs, 14.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-ta.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Tamil-Telugu (6,423 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2013/ta-te.tmx.gz">6.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tamil-Turkish (336 sentence pairs, 4.40k words) - TMX format' href="download.php?f=OpenSubtitles2013/ta-tr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.te.gz">te</a>
</th><td>17</td> <td>0.1M</td> <td>8.2k</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Telugu-Arabic (1,209 sentence pairs, 19.15k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-te.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Telugu-Czech (1,123 sentence pairs, 16.82k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-te.txt.zip">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Greek (319 sentence pairs, 4.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-te.txt.zip">0.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Telugu-English (1,865 sentence pairs, 29.64k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-te.txt.zip">1.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Telugu-Spanish (1,479 sentence pairs, 23.60k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-te.txt.zip">1.5k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Telugu-Persian (687 sentence pairs, 25.40k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-te.txt.zip">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Telugu-Hebrew (875 sentence pairs, 14.12k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-te.txt.zip">0.9k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Telugu-Hindi (7,550 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-te.txt.zip">7.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Croatian (339 sentence pairs, 4.57k words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-te.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Hungarian (346 sentence pairs, 4.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-te.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Japanese (524 sentence pairs, 6.89k words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-te.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-BokmÃ¥l, Norwegian (257 sentence pairs, 4.72k words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-te.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Dutch (319 sentence pairs, 5.03k words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-te.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Telugu-Polish (779 sentence pairs, 11.62k words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-te.txt.zip">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Telugu-Portuguese (1,010 sentence pairs, 14.42k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-te.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Telugu-Portuguese (658 sentence pairs, 10.14k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-te.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Telugu-Romanian (1,017 sentence pairs, 14.56k words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-te.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Telugu-Tamil (6,972 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2013/ta-te.txt.zip">7.0k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-Turkish (338 sentence pairs, 4.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/te-tr.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.th.gz">th</a>
</th><td>9,144</td> <td>14.7M</td> <td>6.7M</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Thai-Arabic (695,988 sentence pairs, 5.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-th.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Thai-Bulgarian (546,531 sentence pairs, 4.59M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-th.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Thai-Bosnian (63,734 sentence pairs, 0.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-th.txt.zip">63.7k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Thai-Catalan (23,113 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-th.txt.zip">23.1k</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Thai-Czech (653,420 sentence pairs, 5.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-th.txt.zip">0.7M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Thai-Danish (248,620 sentence pairs, 2.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-th.txt.zip">0.2M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Thai-German (136,713 sentence pairs, 1.29M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-th.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Thai-Greek (677,910 sentence pairs, 6.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-th.txt.zip">0.7M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Thai-English (860,677 sentence pairs, 8.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-th.txt.zip">0.9M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Thai-Spanish (817,917 sentence pairs, 7.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-th.txt.zip">0.8M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Thai-Estonian (270,488 sentence pairs, 2.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-th.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Basque (1,310 sentence pairs, 9.84k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-th.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Thai-Finnish (240,163 sentence pairs, 1.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-th.txt.zip">0.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Thai-French (5,099,082 sentence pairs, 1.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-th.txt.zip">5.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Hebrew (1,256,940 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-th.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Thai-Croatian (559,006 sentence pairs, 4.64M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-th.txt.zip">0.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Hungarian (1,107,895 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hu-th.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Indonesian (1,604 sentence pairs, 11.93k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-th.txt.zip">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Icelandic (1,958 sentence pairs, 14.57k words) - Moses format' href="download.php?f=OpenSubtitles2013/is-th.txt.zip">2.0k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Thai-Italian (570,019 sentence pairs, 5.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-th.txt.zip">0.6M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Thai-Japanese (67,689 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-th.txt.zip">67.7k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Korean (1,542 sentence pairs, 14.60k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-th.txt.zip">1.5k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Thai-Lithuanian (10,628 sentence pairs, 82.29k words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-th.txt.zip">10.6k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Thai-Latvian (22,670 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-th.txt.zip">22.7k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Thai-Macedonian (35,229 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-th.txt.zip">35.2k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Thai-Malay (110,963 sentence pairs, 0.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-th.txt.zip">0.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Thai-BokmÃ¥l, Norwegian (100,785 sentence pairs, 0.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-th.txt.zip">0.1M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Thai-Dutch (625,441 sentence pairs, 5.99M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-th.txt.zip">0.6M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Polish (329,076 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pl-th.txt.zip">0.3M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Portuguese (378,697 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pt-th.txt.zip">0.4M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Thai-Portuguese (45,057 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-th.txt.zip">45.1k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Thai-Romanian (746,833 sentence pairs, 6.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-th.txt.zip">0.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Thai-Russian (331,355 sentence pairs, 2.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-th.txt.zip">0.3M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Thai-Sinhala (9,180 sentence pairs, 66.81k words) - Moses format' href="download.php?f=OpenSubtitles2013/si-th.txt.zip">9.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Slovak (147,706 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sk-th.txt.zip">0.1M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Thai-Slovenian (415,265 sentence pairs, 3.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-th.txt.zip">0.4M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Thai-Albanian (56,222 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-th.txt.zip">56.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Serbian (206,336 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sr-th.txt.zip">0.2M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Thai-Swedish (176,899 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sv-th.txt.zip">0.2M</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Thai-Turkish (666,880 sentence pairs, 5.11M words) - TMX format' href="download.php?f=OpenSubtitles2013/th-tr.tmx.gz">0.7M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-Ukrainian (3,102 sentence pairs, 28.64k words) - TMX format' href="download.php?f=OpenSubtitles2013/th-uk.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Thai-Vietnamese (28,671 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/th-vi.tmx.gz">28.7k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Thai-Chinese (35,667 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2013/th-zh_cn.tmx.gz">35.7k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Thai-Chinese (28,040 sentence pairs, 97.30k words) - TMX format' href="download.php?f=OpenSubtitles2013/th-zh_tw.tmx.gz">28.0k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.tr.gz">tr</a>
</th><td>31,569</td> <td>146.8M</td> <td>25.7M</td><td></td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Arabic (7,111,403 sentence pairs, 83.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-tr.txt.zip">7.1M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Turkish-Bulgarian (10,136,018 sentence pairs, 106.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-tr.txt.zip">10.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Bengali (1,300 sentence pairs, 14.96k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-tr.txt.zip">1.3k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Turkish-Bosnian (1,146,197 sentence pairs, 11.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-tr.txt.zip">1.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Turkish-Catalan (96,346 sentence pairs, 1.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-tr.txt.zip">96.3k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Czech (11,096,670 sentence pairs, 112.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-tr.txt.zip">11.1M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Danish (4,244,113 sentence pairs, 46.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-tr.txt.zip">4.2M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Turkish-German (3,148,475 sentence pairs, 33.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-tr.txt.zip">3.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Greek (12,206,404 sentence pairs, 136.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-tr.txt.zip">12.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (19,152,195 sentence pairs, 208.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-tr.txt.zip">19.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Spanish (14,708,486 sentence pairs, 162.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-tr.txt.zip">14.7M</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Turkish-Estonian (3,980,819 sentence pairs, 38.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-tr.txt.zip">4.0M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Turkish-Basque (137,900 sentence pairs, 1.32M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-tr.txt.zip">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Persian (997 sentence pairs, 16.98k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-tr.txt.zip">1.0k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Turkish-Finnish (6,081,259 sentence pairs, 56.70M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-tr.txt.zip">6.1M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-French (10,932,842 sentence pairs, 123.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-tr.txt.zip">10.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Turkish-Hebrew (6,050,654 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/he-tr.txt.zip">6.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Hindi (633 sentence pairs, 10.84k words) - Moses format' href="download.php?f=OpenSubtitles2013/hi-tr.txt.zip">0.6k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Turkish-Croatian (3,925,946 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/hr-tr.txt.zip">3.9M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Hungarian (11,085,275 sentence pairs, 107.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-tr.txt.zip">11.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Armenian (801 sentence pairs, 9.59k words) - Moses format' href="download.php?f=OpenSubtitles2013/hy-tr.txt.zip">0.8k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Turkish-Indonesian (45,903 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-tr.txt.zip">45.9k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Turkish-Icelandic (826,792 sentence pairs, 8.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-tr.txt.zip">0.8M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Turkish-Italian (4,808,641 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-tr.txt.zip">4.8M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Turkish-Japanese (306,828 sentence pairs, 2.41M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-tr.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Kazakh (2,272 sentence pairs, 19.72k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-tr.txt.zip">2.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Turkish-Korean (14,124 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-tr.txt.zip">14.1k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Turkish-Lithuanian (458,186 sentence pairs, 4.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-tr.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Turkish-Latvian (190,398 sentence pairs, 1.89M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-tr.txt.zip">0.2M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-Macedonian (625,250 sentence pairs, 6.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-tr.txt.zip">0.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Malayalam (558 sentence pairs, 7.28k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-tr.txt.zip">0.6k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Turkish-Malay (1,763,073 sentence pairs, 17.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-tr.txt.zip">1.8M</a>
</td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Turkish-BokmÃ¥l, Norwegian (1,850,901 sentence pairs, 19.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-tr.txt.zip">1.9M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Turkish-Dutch (10,035,623 sentence pairs, 114.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-tr.txt.zip">10.0M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Turkish-Polish (188,344 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pl-tr.txt.zip">0.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Turkish-Portuguese (11,910,673 sentence pairs, 127.36M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-tr.txt.zip">11.9M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Turkish-Portuguese (222,786 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-tr.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-Romanian (14,995,217 sentence pairs, 160.96M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-tr.txt.zip">15.0M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Turkish-Russian (3,815,198 sentence pairs, 39.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-tr.txt.zip">3.8M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Turkish-Sinhala (91,722 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-tr.txt.zip">91.7k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Turkish-Slovak (1,772,602 sentence pairs, 18.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-tr.txt.zip">1.8M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Turkish-Slovenian (7,064,332 sentence pairs, 69.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-tr.txt.zip">7.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Turkish-Albanian (1,404,107 sentence pairs, 15.07M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-tr.txt.zip">1.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Serbian (8,071,114 sentence pairs, 83.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-tr.txt.zip">8.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Turkish-Swedish (4,085,322 sentence pairs, 44.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-tr.txt.zip">4.1M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Tamil (350 sentence pairs, 4.46k words) - Moses format' href="download.php?f=OpenSubtitles2013/ta-tr.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Telugu (349 sentence pairs, 4.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/te-tr.txt.zip">0.3k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Turkish-Thai (705,288 sentence pairs, 5.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/th-tr.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Turkish-Ukrainian (86,140 sentence pairs, 0.89M words) - TMX format' href="download.php?f=OpenSubtitles2013/tr-uk.tmx.gz">86.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Turkish-Urdu (4,005 sentence pairs, 63.33k words) - TMX format' href="download.php?f=OpenSubtitles2013/tr-ur.tmx.gz">4.0k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Turkish-Vietnamese (571,442 sentence pairs, 7.33M words) - TMX format' href="download.php?f=OpenSubtitles2013/tr-vi.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Turkish-Chinese (911,877 sentence pairs, 6.43M words) - TMX format' href="download.php?f=OpenSubtitles2013/tr-zh_cn.tmx.gz">0.9M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Turkish-Chinese (363,465 sentence pairs, 2.58M words) - TMX format' href="download.php?f=OpenSubtitles2013/tr-zh_tw.tmx.gz">0.4M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.uk.gz">uk</a>
</th><td>104</td> <td>0.7M</td> <td>0.1M</td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Ukrainian-Arabic (46,897 sentence pairs, 0.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-uk.txt.zip">46.9k</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Ukrainian-Bulgarian (75,791 sentence pairs, 0.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-uk.txt.zip">75.8k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Ukrainian-Bosnian (7,905 sentence pairs, 90.55k words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-uk.txt.zip">7.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Catalan (1,139 sentence pairs, 14.09k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-uk.txt.zip">1.1k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Ukrainian-Czech (87,958 sentence pairs, 0.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-uk.txt.zip">88.0k</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Ukrainian-Danish (44,933 sentence pairs, 0.51M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-uk.txt.zip">44.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Ukrainian-German (49,279 sentence pairs, 0.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-uk.txt.zip">49.3k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Ukrainian-Greek (88,390 sentence pairs, 1.03M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-uk.txt.zip">88.4k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Ukrainian-English (135,172 sentence pairs, 1.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Ukrainian-Spanish (97,935 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-uk.txt.zip">97.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Ukrainian-Estonian (50,227 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-uk.txt.zip">50.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Ukrainian-Basque (5,589 sentence pairs, 64.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-uk.txt.zip">5.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Persian (93 sentence pairs, 3.70k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-uk.txt.zip">93</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Ukrainian-Finnish (65,746 sentence pairs, 0.69M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-uk.txt.zip">65.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Ukrainian-French (85,474 sentence pairs, 1.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-uk.txt.zip">85.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Hebrew (62,884 sentence pairs, 0.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-uk.txt.zip">62.9k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Croatian (71,504 sentence pairs, 0.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-uk.txt.zip">71.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Hungarian (78,391 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-uk.txt.zip">78.4k</a>
</td><td></td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Ukrainian-Icelandic (13,080 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-uk.txt.zip">13.1k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Ukrainian-Italian (58,363 sentence pairs, 0.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-uk.txt.zip">58.4k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Ukrainian-Japanese (5,972 sentence pairs, 61.67k words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-uk.txt.zip">6.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Kazakh (1,290 sentence pairs, 11.37k words) - Moses format' href="download.php?f=OpenSubtitles2013/kk-uk.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Ukrainian-Lithuanian (9,053 sentence pairs, 92.01k words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-uk.txt.zip">9.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-Latvian (3,773 sentence pairs, 37.08k words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-uk.txt.zip">3.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Macedonian (7,161 sentence pairs, 71.81k words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-uk.txt.zip">7.2k</a>
</td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Ukrainian-Malay (38,218 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-uk.txt.zip">38.2k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Ukrainian-BokmÃ¥l, Norwegian (35,542 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-uk.txt.zip">35.5k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Ukrainian-Dutch (470,771 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-uk.txt.zip">0.5M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Ukrainian-Polish (68,344 sentence pairs, 0.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-uk.txt.zip">68.3k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Ukrainian-Portuguese (101,241 sentence pairs, 1.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Ukrainian-Portuguese (122,492 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-uk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Ukrainian-Romanian (110,260 sentence pairs, 1.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-uk.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Ukrainian-Russian (65,335 sentence pairs, 0.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-uk.txt.zip">65.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Sinhala (2,967 sentence pairs, 34.21k words) - Moses format' href="download.php?f=OpenSubtitles2013/si-uk.txt.zip">3.0k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Ukrainian-Slovak (12,169 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-uk.txt.zip">12.2k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Ukrainian-Slovenian (205,321 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sl-uk.txt.zip">0.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Ukrainian-Albanian (30,829 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-uk.txt.zip">30.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-Serbian (71,198 sentence pairs, 0.78M words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-uk.txt.zip">71.2k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Ukrainian-Swedish (51,589 sentence pairs, 0.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-uk.txt.zip">51.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ukrainian-Thai (3,116 sentence pairs, 28.67k words) - Moses format' href="download.php?f=OpenSubtitles2013/th-uk.txt.zip">3.1k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Ukrainian-Turkish (90,552 sentence pairs, 0.90M words) - Moses format' href="download.php?f=OpenSubtitles2013/tr-uk.txt.zip">90.6k</a>
</td><td></td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Ukrainian-Vietnamese (17,259 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2013/uk-vi.tmx.gz">17.3k</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Ukrainian-Chinese (18,132 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2013/uk-zh_cn.tmx.gz">18.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Chinese (9,454 sentence pairs, 73.68k words) - TMX format' href="download.php?f=OpenSubtitles2013/uk-zh_tw.tmx.gz">9.5k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.ur.gz">ur</a>
</th><td>4</td> <td>35.0k</td> <td>3.6k</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Urdu-Arabic (3,768 sentence pairs, 62.62k words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-ur.txt.zip">3.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Bulgarian (1,991 sentence pairs, 34.01k words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-ur.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Bosnian (375 sentence pairs, 7.69k words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-ur.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Urdu-Czech (3,132 sentence pairs, 53.36k words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-ur.txt.zip">3.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Danish (1,915 sentence pairs, 33.75k words) - Moses format' href="download.php?f=OpenSubtitles2013/da-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Urdu-German (3,243 sentence pairs, 56.31k words) - Moses format' href="download.php?f=OpenSubtitles2013/de-ur.txt.zip">3.2k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Urdu-Greek (3,999 sentence pairs, 70.55k words) - Moses format' href="download.php?f=OpenSubtitles2013/el-ur.txt.zip">4.0k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Urdu-English (5,324 sentence pairs, 95.10k words) - Moses format' href="download.php?f=OpenSubtitles2013/en-ur.txt.zip">5.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Spanish (2,801 sentence pairs, 50.95k words) - Moses format' href="download.php?f=OpenSubtitles2013/es-ur.txt.zip">2.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Estonian (2,004 sentence pairs, 34.34k words) - Moses format' href="download.php?f=OpenSubtitles2013/et-ur.txt.zip">2.0k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Finnish (1,993 sentence pairs, 32.70k words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-ur.txt.zip">2.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Urdu-French (2,770 sentence pairs, 53.04k words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-ur.txt.zip">2.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Urdu-Hebrew (3,540 sentence pairs, 59.30k words) - Moses format' href="download.php?f=OpenSubtitles2013/he-ur.txt.zip">3.5k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Croatian (1,898 sentence pairs, 34.34k words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Hungarian (3,219 sentence pairs, 50.86k words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-ur.txt.zip">3.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Italian (2,718 sentence pairs, 51.58k words) - Moses format' href="download.php?f=OpenSubtitles2013/it-ur.txt.zip">2.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Macedonian (1,772 sentence pairs, 30.26k words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-ur.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Malay (2,804 sentence pairs, 50.17k words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-ur.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Dutch (1,922 sentence pairs, 35.46k words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Urdu-Polish (3,643 sentence pairs, 60.93k words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-ur.txt.zip">3.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Urdu-Portuguese (3,989 sentence pairs, 71.17k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-ur.txt.zip">4.0k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Urdu-Portuguese (3,942 sentence pairs, 66.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-ur.txt.zip">3.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Urdu-Romanian (4,060 sentence pairs, 71.12k words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-ur.txt.zip">4.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Urdu-Russian (2,373 sentence pairs, 39.85k words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-ur.txt.zip">2.4k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Slovak (2,008 sentence pairs, 34.90k words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-ur.txt.zip">2.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Slovenian (2,796 sentence pairs, 49.99k words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-ur.txt.zip">2.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Urdu-Albanian (2,321 sentence pairs, 45.47k words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-ur.txt.zip">2.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Serbian (1,905 sentence pairs, 34.48k words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-ur.txt.zip">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Urdu-Swedish (1,904 sentence pairs, 34.87k words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-ur.txt.zip">1.9k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Urdu-Turkish (4,036 sentence pairs, 63.43k words) - Moses format' href="download.php?f=OpenSubtitles2013/tr-ur.txt.zip">4.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.vi.gz">vi</a>
</th><td>652</td> <td>6.1M</td> <td>0.7M</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Arabic (440,843 sentence pairs, 6.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-vi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Bulgarian (508,519 sentence pairs, 6.90M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-vi.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Vietnamese-Bosnian (70,958 sentence pairs, 0.97M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-vi.txt.zip">71.0k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Vietnamese-Catalan (17,893 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-vi.txt.zip">17.9k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Vietnamese-Czech (586,210 sentence pairs, 7.67M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-vi.txt.zip">0.6M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Danish (378,854 sentence pairs, 5.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-vi.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Vietnamese-German (341,664 sentence pairs, 4.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-vi.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Vietnamese-Greek (628,725 sentence pairs, 9.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-vi.txt.zip">0.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Vietnamese-English (927,511 sentence pairs, 12.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-vi.txt.zip">0.9M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Vietnamese-Spanish (685,524 sentence pairs, 9.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-vi.txt.zip">0.7M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Estonian (385,193 sentence pairs, 5.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-vi.txt.zip">0.4M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Vietnamese-Basque (14,800 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-vi.txt.zip">14.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Vietnamese-Persian (1,772 sentence pairs, 48.85k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-vi.txt.zip">1.8k</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Vietnamese-Finnish (454,491 sentence pairs, 5.76M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Vietnamese-French (3,301,081 sentence pairs, 4.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-vi.txt.zip">3.3M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Hebrew (449,531 sentence pairs, 6.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-vi.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Croatian (524,424 sentence pairs, 6.93M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Vietnamese-Hungarian (518,950 sentence pairs, 6.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-vi.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Vietnamese-Indonesian (10,646 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/id-vi.txt.zip">10.6k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Vietnamese-Icelandic (581,527 sentence pairs, 0.47M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-vi.txt.zip">0.6M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Vietnamese-Italian (2,271,650 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-vi.txt.zip">2.3M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Vietnamese-Japanese (44,159 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-vi.txt.zip">44.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Vietnamese-Korean (700 sentence pairs, 10.95k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-vi.txt.zip">0.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Vietnamese-Lithuanian (69,391 sentence pairs, 0.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-vi.txt.zip">69.4k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Vietnamese-Latvian (26,934 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-vi.txt.zip">26.9k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Vietnamese-Macedonian (103,204 sentence pairs, 1.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-vi.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Vietnamese-Malayalam (664 sentence pairs, 12.42k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-vi.txt.zip">0.7k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Vietnamese-Malay (257,085 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ms-vi.txt.zip">0.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Vietnamese-BokmÃ¥l, Norwegian (269,050 sentence pairs, 3.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-vi.txt.zip">0.3M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Vietnamese-Dutch (504,674 sentence pairs, 7.28M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-vi.txt.zip">0.5M</a>
</td><td bgcolor="#fff2ed"><a rel="nofollow" title='Vietnamese-Polish (76,621 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-vi.txt.zip">76.6k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Vietnamese-Portuguese (704,687 sentence pairs, 9.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-vi.txt.zip">0.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Vietnamese-Portuguese (737,603 sentence pairs, 9.92M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-vi.txt.zip">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Vietnamese-Romanian (801,132 sentence pairs, 10.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-vi.txt.zip">0.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Vietnamese-Russian (262,131 sentence pairs, 3.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-vi.txt.zip">0.3M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Vietnamese-Sinhala (28,648 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-vi.txt.zip">28.6k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Vietnamese-Slovak (231,462 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sk-vi.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Slovenian (520,770 sentence pairs, 6.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-vi.txt.zip">0.5M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Vietnamese-Albanian (222,128 sentence pairs, 3.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-vi.txt.zip">0.2M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Vietnamese-Serbian (501,186 sentence pairs, 6.71M words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-vi.txt.zip">0.5M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Vietnamese-Swedish (353,798 sentence pairs, 5.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-vi.txt.zip">0.4M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Vietnamese-Thai (29,205 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/th-vi.txt.zip">29.2k</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Vietnamese-Turkish (608,834 sentence pairs, 7.48M words) - Moses format' href="download.php?f=OpenSubtitles2013/tr-vi.txt.zip">0.6M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Vietnamese-Ukrainian (17,764 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2013/uk-vi.txt.zip">17.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Vietnamese-Chinese (162,906 sentence pairs, 1.73M words) - TMX format' href="download.php?f=OpenSubtitles2013/vi-zh_cn.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Vietnamese-Chinese (75,585 sentence pairs, 0.80M words) - TMX format' href="download.php?f=OpenSubtitles2013/vi-zh_tw.tmx.gz">75.6k</a>
</td></tr> <tr><th>zh</th><td>0</td> <td>0</td> <td>0</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_cn plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.zh_cn.gz">zh_cn</a>
</th><td>1,725</td> <td>12.2M</td> <td>1.5M</td><td></td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Chinese-Arabic (772,787 sentence pairs, 5.98M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-zh_cn.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-Bulgarian (852,771 sentence pairs, 6.62M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-zh_cn.txt.zip">0.9M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Bengali (746 sentence pairs, 10.67k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-zh_cn.txt.zip">0.7k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Chinese-Bosnian (107,119 sentence pairs, 0.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-zh_cn.txt.zip">0.1M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Chinese-Catalan (12,569 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-zh_cn.txt.zip">12.6k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Chinese-Czech (900,009 sentence pairs, 6.79M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-zh_cn.txt.zip">0.9M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-Danish (616,026 sentence pairs, 5.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-zh_cn.txt.zip">0.6M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-German (442,110 sentence pairs, 3.68M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Chinese-Greek (958,423 sentence pairs, 7.82M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-zh_cn.txt.zip">1.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Chinese-English (1,396,516 sentence pairs, 12.21M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-zh_cn.txt.zip">1.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Chinese-Spanish (1,063,538 sentence pairs, 8.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-zh_cn.txt.zip">1.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-Estonian (595,792 sentence pairs, 4.46M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-zh_cn.txt.zip">0.6M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Chinese-Basque (30,166 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-zh_cn.txt.zip">30.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Persian (404 sentence pairs, 7.96k words) - Moses format' href="download.php?f=OpenSubtitles2013/fa-zh_cn.txt.zip">0.4k</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-Finnish (744,965 sentence pairs, 4.85M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-zh_cn.txt.zip">0.7M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Chinese-French (825,043 sentence pairs, 7.05M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-zh_cn.txt.zip">0.8M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-Hebrew (851,362 sentence pairs, 6.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-zh_cn.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-Croatian (801,750 sentence pairs, 6.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-zh_cn.txt.zip">0.8M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Chinese-Hungarian (793,732 sentence pairs, 5.63M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-zh_cn.txt.zip">0.8M</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Chinese-Indonesian (8,363 sentence pairs, 60.55k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-zh_cn.txt.zip">8.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Chinese-Icelandic (106,907 sentence pairs, 0.87M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-zh_cn.txt.zip">0.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Chinese-Italian (1,183,517 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/it-zh_cn.txt.zip">1.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Chinese-Japanese (93,771 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-zh_cn.txt.zip">93.8k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Chinese-Korean (3,457 sentence pairs, 22.29k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-zh_cn.txt.zip">3.5k</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Chinese-Lithuanian (111,671 sentence pairs, 0.75M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-zh_cn.txt.zip">0.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Chinese-Latvian (43,008 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-zh_cn.txt.zip">43.0k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Chinese-Macedonian (132,578 sentence pairs, 1.08M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-zh_cn.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Malayalam (473 sentence pairs, 4.73k words) - Moses format' href="download.php?f=OpenSubtitles2013/ml-zh_cn.txt.zip">0.5k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Malay (419,975 sentence pairs, 3.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/ms-zh_cn.txt.zip">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (342,139 sentence pairs, 2.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-zh_cn.txt.zip">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Dutch (1,099 sentence pairs, 8.83k words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-zh_cn.txt.zip">1.1k</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Chinese-Polish (334,263 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/pl-zh_cn.txt.zip">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Chinese-Portuguese (1,011,177 sentence pairs, 8.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-zh_cn.txt.zip">1.0M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Chinese-Portuguese (1,099,801 sentence pairs, 8.91M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-zh_cn.txt.zip">1.1M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Chinese-Romanian (1,130,605 sentence pairs, 9.54M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-zh_cn.txt.zip">1.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Chinese-Russian (307,026 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ru-zh_cn.txt.zip">0.3M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Chinese-Sinhala (26,996 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-zh_cn.txt.zip">27.0k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Chinese-Slovak (192,762 sentence pairs, 1.53M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-zh_cn.txt.zip">0.2M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Chinese-Slovenian (799,051 sentence pairs, 5.77M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-zh_cn.txt.zip">0.8M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-Albanian (297,225 sentence pairs, 2.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-zh_cn.txt.zip">0.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Chinese-Serbian (718,986 sentence pairs, 5.66M words) - Moses format' href="download.php?f=OpenSubtitles2013/sr-zh_cn.txt.zip">0.7M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Chinese-Swedish (549,235 sentence pairs, 4.45M words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-zh_cn.txt.zip">0.5M</a>
</td><td></td><td></td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-Thai (36,202 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2013/th-zh_cn.txt.zip">36.2k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Chinese-Turkish (958,501 sentence pairs, 6.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/tr-zh_cn.txt.zip">1.0M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-Ukrainian (18,420 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/uk-zh_cn.txt.zip">18.4k</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Chinese-Vietnamese (37,899 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2013/vi-zh_cn.txt.zip">37.9k</a>
</td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Chinese-Chinese (193,965 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2013/zh_cn-zh_tw.tmx.gz">0.2M</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zh_tw plain text' href="download.php?f=OpenSubtitles2013/mono/OpenSubtitles2013.raw.zh_tw.gz">zh_tw</a>
</th><td>803</td> <td>4.5M</td> <td>0.6M</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-Arabic (325,701 sentence pairs, 2.55M words) - Moses format' href="download.php?f=OpenSubtitles2013/ar-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-Bulgarian (321,622 sentence pairs, 2.56M words) - Moses format' href="download.php?f=OpenSubtitles2013/bg-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Bengali (320 sentence pairs, 4.92k words) - Moses format' href="download.php?f=OpenSubtitles2013/bn-zh_tw.txt.zip">0.3k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Chinese-Bosnian (28,277 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/bs-zh_tw.txt.zip">28.3k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Chinese-Catalan (5,554 sentence pairs, 50.44k words) - Moses format' href="download.php?f=OpenSubtitles2013/ca-zh_tw.txt.zip">5.6k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Czech (355,820 sentence pairs, 2.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/cs-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Chinese-Danish (238,928 sentence pairs, 2.01M words) - Moses format' href="download.php?f=OpenSubtitles2013/da-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Chinese-German (186,641 sentence pairs, 1.57M words) - Moses format' href="download.php?f=OpenSubtitles2013/de-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Greek (383,655 sentence pairs, 3.25M words) - Moses format' href="download.php?f=OpenSubtitles2013/el-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Chinese-English (579,197 sentence pairs, 5.15M words) - Moses format' href="download.php?f=OpenSubtitles2013/en-zh_tw.txt.zip">0.6M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Chinese-Spanish (456,349 sentence pairs, 3.84M words) - Moses format' href="download.php?f=OpenSubtitles2013/es-zh_tw.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Chinese-Estonian (260,968 sentence pairs, 1.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/et-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Chinese-Basque (19,313 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2013/eu-zh_tw.txt.zip">19.3k</a>
</td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Chinese-Finnish (266,014 sentence pairs, 1.74M words) - Moses format' href="download.php?f=OpenSubtitles2013/fi-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Chinese-French (349,420 sentence pairs, 3.02M words) - Moses format' href="download.php?f=OpenSubtitles2013/fr-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Hebrew (373,799 sentence pairs, 2.73M words) - Moses format' href="download.php?f=OpenSubtitles2013/he-zh_tw.txt.zip">0.4M</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Croatian (312,112 sentence pairs, 2.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/hr-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Hungarian (343,741 sentence pairs, 2.49M words) - Moses format' href="download.php?f=OpenSubtitles2013/hu-zh_tw.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Chinese-Indonesian (6,192 sentence pairs, 48.00k words) - Moses format' href="download.php?f=OpenSubtitles2013/id-zh_tw.txt.zip">6.2k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Chinese-Icelandic (450,345 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/is-zh_tw.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Chinese-Italian (222,558 sentence pairs, 1.88M words) - Moses format' href="download.php?f=OpenSubtitles2013/it-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Chinese-Japanese (56,121 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2013/ja-zh_tw.txt.zip">56.1k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Korean (1,401 sentence pairs, 7.83k words) - Moses format' href="download.php?f=OpenSubtitles2013/ko-zh_tw.txt.zip">1.4k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Chinese-Lithuanian (59,456 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2013/lt-zh_tw.txt.zip">59.5k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Chinese-Latvian (22,483 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2013/lv-zh_tw.txt.zip">22.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Chinese-Macedonian (66,337 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/mk-zh_tw.txt.zip">66.3k</a>
</td><td></td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Chinese-Malay (269,932 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/ms-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-BokmÃ¥l, Norwegian (158,299 sentence pairs, 1.27M words) - Moses format' href="download.php?f=OpenSubtitles2013/nb-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Dutch (307,271 sentence pairs, 2.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/nl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Chinese-Polish (252,319 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2013/pl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Chinese-Portuguese (396,014 sentence pairs, 3.33M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Chinese-Portuguese (446,592 sentence pairs, 3.65M words) - Moses format' href="download.php?f=OpenSubtitles2013/pt_br-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Chinese-Romanian (458,079 sentence pairs, 3.95M words) - Moses format' href="download.php?f=OpenSubtitles2013/ro-zh_tw.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Chinese-Russian (201,964 sentence pairs, 1.60M words) - Moses format' href="download.php?f=OpenSubtitles2013/ru-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Chinese-Sinhala (16,125 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2013/si-zh_tw.txt.zip">16.1k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Chinese-Slovak (73,058 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenSubtitles2013/sk-zh_tw.txt.zip">73.1k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-Slovenian (344,270 sentence pairs, 2.52M words) - Moses format' href="download.php?f=OpenSubtitles2013/sl-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Albanian (147,827 sentence pairs, 1.31M words) - Moses format' href="download.php?f=OpenSubtitles2013/sq-zh_tw.txt.zip">0.1M</a>
</td><td bgcolor="#ffcfcf"><a rel="nofollow" title='Chinese-Serbian (261,478 sentence pairs) - Moses format' href="download.php?f=OpenSubtitles2013/sr-zh_tw.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Chinese-Swedish (212,178 sentence pairs, 1.72M words) - Moses format' href="download.php?f=OpenSubtitles2013/sv-zh_tw.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Swahili (338 sentence pairs, 6.88k words) - Moses format' href="download.php?f=OpenSubtitles2013/sw-zh_tw.txt.zip">0.3k</a>
</td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Chinese-Thai (28,808 sentence pairs, 99.16k words) - Moses format' href="download.php?f=OpenSubtitles2013/th-zh_tw.txt.zip">28.8k</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Chinese-Turkish (378,513 sentence pairs, 2.63M words) - Moses format' href="download.php?f=OpenSubtitles2013/tr-zh_tw.txt.zip">0.4M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Chinese-Ukrainian (9,629 sentence pairs, 74.15k words) - Moses format' href="download.php?f=OpenSubtitles2013/uk-zh_tw.txt.zip">9.6k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Chinese-Vietnamese (77,285 sentence pairs, 0.81M words) - Moses format' href="download.php?f=OpenSubtitles2013/vi-zh_tw.txt.zip">77.3k</a>
</td><td></td><td bgcolor="#fffaf1"><a rel="nofollow" title='Chinese-Chinese (213,289 sentence pairs, 0.61M words) - Moses format' href="download.php?f=OpenSubtitles2013/zh_cn-zh_tw.txt.zip">0.2M</a>
</td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr>
-->

<div class="footer"></div>
</body>
</html>