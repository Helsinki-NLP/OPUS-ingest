<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>OpenSubtitles2011</title>
<link rev="made" href="mailto:Joerg%20Tiedemann" />

<meta name="robots" content="NOFOLLOW" />
<link rel="stylesheet" type="text/css" href="index.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>OpenSubtitles2011</h1>

<p>A collection of documents from <a href="http://www.opensubtitles.org/">http://www.opensubtitles.org/</a>.<br/>
<a href="OpenSubtitles2018.php">Look at the latest package of OpenSubtitles2018!</a>
</p>

<p>
<b>IMPORTANT:</b> If you use the OpenSubtitle corpus: <br/>Please, add a link to <b>http://www.opensubtitles.org/</b> to your website and to your reports and publications produced with the data! I promised this when I got the data from the providers of that website!</p>

54 languages, 1,025 bitexts<br />total number of files: 1,390,584<br />total number of tokens: 8.31G<br />total number of sentence fragments: 1.22G<br /><p />Please <a href="http://opus.nlpl.eu/RANLP_V.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2009, <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces</a>. In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) Recent Advances in Natural Language Processing (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia<br/>

<!--
<h3>News</h3>

<ul>
    <li><b>2013-08-22:</b> <a href="OpenSubtitles2012.php">A new version of the subtitle corpus is available</a></li>
    <li><b>2012-03-05:</b> <a href="OpenSubtitles/v2011/hunalign">Hunalign-based sentence alignment</a> is finished now!</li>
    <li><b>2012-02-04:</b> <a href="OpenSubtitles/v2011/srtalign">Synchronized time-based sentence alignment</a> is finished now! Files in Moses format (plain text) and TMX format are based on these alignemts!</li>
    <li><b>2012-02-01:</b> Untokenized monolingual files are available <a href="OpenSubtitles/v2011/monolingual">here</a> (look for the files *.raw.??.gz)</li>
</ul>
-->

<h3>Download</h3>

<!--
    Resources:
    <ul>

<li>Complete download (XML): <a href="download.php?f=OpenSubtitles2011/OpenSubtitles2011.tar.gz">OpenSubtitles2011.tar.gz</a> (37G)</li>
<li><a rel="nofollow" href="http://opus.nlpl.eu/OpenSubtitles2011/movies.txt">A list of movie names and their corresponding IDs (= 2nd subdir)</a>
</li>
<li><a rel="nofollow" href="http://opus.nlpl.eu/OpenSubtitles2011/wordalign/truecaser/">True caser models for all languages in OpenSubtitles2011</a>

</li><li><a rel="nofollow" href="http://opus.nlpl.eu/OpenSubtitles2011/wordalign/lm/">Monolingual data for all languages in OpenSubtitles2011</a>
</li>
    <li><a rel="nofollow" href="http://opus.nlpl.eu/OpenSubtitles2011/overlaps">Overlaps in the corpus (Estonian only)</a>; detected by <a href="http://corporal.sourceforge.net/">CorporAl</a></li><li><a rel="nofollow" href="http://opus.lingfil.uu.se/OpenSubtitles2011/srtalign">Synchronized time-based sentence alignment</a> (<a rel="nofollow" href="http://opus.lingfil.uu.se/OpenSubtitles2011/srtalign-nosync">without synchronization</a>)</li>
   <li><a rel="nofollow" href="http://opus.nlpl.eu/OpenSubtitles2011/hunalign">Sentence alignment based on hunalign</a></li>
</ul>
-->



<p /><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = parsed XML file samples (if they exist)</li></ul></td></tr></table><p /><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/cs_sample.html">cs</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/da_sample.html">da</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/de_sample.html">de</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/el_sample.html">el</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/en_sample.html">en</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/es_sample.html">es</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/et_sample.html">et</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/fa_sample.html">fa</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/he_sample.html">he</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/id_sample.html">id</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/is_sample.html">is</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/it_sample.html">it</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/lb_sample.html">lb</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/mk_sample.html">mk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ms_sample.html">ms</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/no_sample.html">no</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/oc_sample.html">oc</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/pt_sample.html">pt</a></th>
<th></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/pt_br_sample.html">pt_br</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/scc_sample.html">scc</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/scr_sample.html">scr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/si_sample.html">si</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/sk_sample.html">sk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/th_sample.html">th</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="OpenSubtitles/v2011/zh_sample.html">zh</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ar.tar.gz">ar</a></th>
<th></th>
<td></td><td><a rel="nofollow" title="Arabic-Bosnian (sample file)" href="OpenSubtitles/v2011/ar-bs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Catalan (sample file)" href="OpenSubtitles/v2011/ar-ca_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Czech (sample file)" href="OpenSubtitles/v2011/ar-cs_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Danish (sample file)" href="OpenSubtitles/v2011/ar-da_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="OpenSubtitles/v2011/ar-de_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Greek (sample file)" href="OpenSubtitles/v2011/ar-el_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="OpenSubtitles/v2011/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Esperanto (sample file)" href="OpenSubtitles/v2011/ar-eo_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="OpenSubtitles/v2011/ar-es_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Estonian (sample file)" href="OpenSubtitles/v2011/ar-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Persian (sample file)" href="OpenSubtitles/v2011/ar-fa_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Finnish (sample file)" href="OpenSubtitles/v2011/ar-fi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="OpenSubtitles/v2011/ar-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Hebrew (sample file)" href="OpenSubtitles/v2011/ar-he_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Croatian (sample file)" href="OpenSubtitles/v2011/ar-hr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Hungarian (sample file)" href="OpenSubtitles/v2011/ar-hu_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Indonesian (sample file)" href="OpenSubtitles/v2011/ar-id_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Icelandic (sample file)" href="OpenSubtitles/v2011/ar-is_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="OpenSubtitles/v2011/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="OpenSubtitles/v2011/ar-ja_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Georgian (sample file)" href="OpenSubtitles/v2011/ar-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Korean (sample file)" href="OpenSubtitles/v2011/ar-ko_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Luxembourgish (sample file)" href="OpenSubtitles/v2011/ar-lb_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Lithuanian (sample file)" href="OpenSubtitles/v2011/ar-lt_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Latvian (sample file)" href="OpenSubtitles/v2011/ar-lv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Macedonian (sample file)" href="OpenSubtitles/v2011/ar-mk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Malay (sample file)" href="OpenSubtitles/v2011/ar-ms_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Dutch (sample file)" href="OpenSubtitles/v2011/ar-nl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Norwegian (sample file)" href="OpenSubtitles/v2011/ar-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="OpenSubtitles/v2011/ar-pl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles/v2011/ar-pt_sample.html">view</a></td><th>ar</th>
<td><a rel="nofollow" title="Arabic-Portuguese (sample file)" href="OpenSubtitles/v2011/ar-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Romanian (sample file)" href="OpenSubtitles/v2011/ar-ro_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="OpenSubtitles/v2011/ar-ru_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-scc (sample file)" href="OpenSubtitles/v2011/ar-scc_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-scr (sample file)" href="OpenSubtitles/v2011/ar-scr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Sinhala (sample file)" href="OpenSubtitles/v2011/ar-si_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovak (sample file)" href="OpenSubtitles/v2011/ar-sk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Slovenian (sample file)" href="OpenSubtitles/v2011/ar-sl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Albanian (sample file)" href="OpenSubtitles/v2011/ar-sq_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Swedish (sample file)" href="OpenSubtitles/v2011/ar-sv_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Thai (sample file)" href="OpenSubtitles/v2011/ar-th_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Tagalog (sample file)" href="OpenSubtitles/v2011/ar-tl_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="OpenSubtitles/v2011/ar-tr_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Ukrainian (sample file)" href="OpenSubtitles/v2011/ar-uk_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Urdu (sample file)" href="OpenSubtitles/v2011/ar-ur_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Vietnamese (sample file)" href="OpenSubtitles/v2011/ar-vi_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Chinese (sample file)" href="OpenSubtitles/v2011/ar-zh_sample.html">view</a></td><th>ar</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/bg.tar.gz">bg</a></th>
<td></td>
<th></th>
<td><a rel="nofollow" title="Bulgarian-Bosnian (sample file)" href="OpenSubtitles/v2011/bg-bs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Catalan (sample file)" href="OpenSubtitles/v2011/bg-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Czech (sample file)" href="OpenSubtitles/v2011/bg-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Danish (sample file)" href="OpenSubtitles/v2011/bg-da_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="OpenSubtitles/v2011/bg-de_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="OpenSubtitles/v2011/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="OpenSubtitles/v2011/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Esperanto (sample file)" href="OpenSubtitles/v2011/bg-eo_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="OpenSubtitles/v2011/bg-es_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Estonian (sample file)" href="OpenSubtitles/v2011/bg-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Persian (sample file)" href="OpenSubtitles/v2011/bg-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="OpenSubtitles/v2011/bg-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="OpenSubtitles/v2011/bg-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Hebrew (sample file)" href="OpenSubtitles/v2011/bg-he_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Croatian (sample file)" href="OpenSubtitles/v2011/bg-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="OpenSubtitles/v2011/bg-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Indonesian (sample file)" href="OpenSubtitles/v2011/bg-id_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Icelandic (sample file)" href="OpenSubtitles/v2011/bg-is_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="OpenSubtitles/v2011/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="OpenSubtitles/v2011/bg-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Georgian (sample file)" href="OpenSubtitles/v2011/bg-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Korean (sample file)" href="OpenSubtitles/v2011/bg-ko_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Luxembourgish (sample file)" href="OpenSubtitles/v2011/bg-lb_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Lithuanian (sample file)" href="OpenSubtitles/v2011/bg-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Latvian (sample file)" href="OpenSubtitles/v2011/bg-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Macedonian (sample file)" href="OpenSubtitles/v2011/bg-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Malay (sample file)" href="OpenSubtitles/v2011/bg-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="OpenSubtitles/v2011/bg-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Norwegian (sample file)" href="OpenSubtitles/v2011/bg-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="OpenSubtitles/v2011/bg-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles/v2011/bg-pt_sample.html">view</a></td><th>bg</th>
<td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="OpenSubtitles/v2011/bg-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Romanian (sample file)" href="OpenSubtitles/v2011/bg-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="OpenSubtitles/v2011/bg-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-scc (sample file)" href="OpenSubtitles/v2011/bg-scc_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-scr (sample file)" href="OpenSubtitles/v2011/bg-scr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Sinhala (sample file)" href="OpenSubtitles/v2011/bg-si_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovak (sample file)" href="OpenSubtitles/v2011/bg-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Slovenian (sample file)" href="OpenSubtitles/v2011/bg-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Albanian (sample file)" href="OpenSubtitles/v2011/bg-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Swedish (sample file)" href="OpenSubtitles/v2011/bg-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Thai (sample file)" href="OpenSubtitles/v2011/bg-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Turkish (sample file)" href="OpenSubtitles/v2011/bg-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="OpenSubtitles/v2011/bg-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-Vietnamese (sample file)" href="OpenSubtitles/v2011/bg-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Chinese (sample file)" href="OpenSubtitles/v2011/bg-zh_sample.html">view</a></td><th>bg</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/bs.tar.gz">bs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Arabic' (1,131 aligned documents, 0.8M links, 10.9M tokens)" href="download.php?f=OpenSubtitles2011/ar-bs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Bosnian-Bulgarian' (2,045 aligned documents, 1.6M links, 22.2M tokens)" href="download.php?f=OpenSubtitles2011/bg-bs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Bosnian-Catalan (sample file)" href="OpenSubtitles/v2011/bs-ca_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Czech (sample file)" href="OpenSubtitles/v2011/bs-cs_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Danish (sample file)" href="OpenSubtitles/v2011/bs-da_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="OpenSubtitles/v2011/bs-de_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Greek (sample file)" href="OpenSubtitles/v2011/bs-el_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="OpenSubtitles/v2011/bs-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="OpenSubtitles/v2011/bs-es_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Estonian (sample file)" href="OpenSubtitles/v2011/bs-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Persian (sample file)" href="OpenSubtitles/v2011/bs-fa_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Finnish (sample file)" href="OpenSubtitles/v2011/bs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="OpenSubtitles/v2011/bs-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Hebrew (sample file)" href="OpenSubtitles/v2011/bs-he_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Croatian (sample file)" href="OpenSubtitles/v2011/bs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Hungarian (sample file)" href="OpenSubtitles/v2011/bs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Indonesian (sample file)" href="OpenSubtitles/v2011/bs-id_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Icelandic (sample file)" href="OpenSubtitles/v2011/bs-is_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="OpenSubtitles/v2011/bs-it_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Japanese (sample file)" href="OpenSubtitles/v2011/bs-ja_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Georgian (sample file)" href="OpenSubtitles/v2011/bs-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Korean (sample file)" href="OpenSubtitles/v2011/bs-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Lithuanian (sample file)" href="OpenSubtitles/v2011/bs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Latvian (sample file)" href="OpenSubtitles/v2011/bs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Macedonian (sample file)" href="OpenSubtitles/v2011/bs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Malay (sample file)" href="OpenSubtitles/v2011/bs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Dutch (sample file)" href="OpenSubtitles/v2011/bs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Norwegian (sample file)" href="OpenSubtitles/v2011/bs-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Polish (sample file)" href="OpenSubtitles/v2011/bs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles/v2011/bs-pt_sample.html">view</a></td><th>bs</th>
<td><a rel="nofollow" title="Bosnian-Portuguese (sample file)" href="OpenSubtitles/v2011/bs-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Romanian (sample file)" href="OpenSubtitles/v2011/bs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Russian (sample file)" href="OpenSubtitles/v2011/bs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-scc (sample file)" href="OpenSubtitles/v2011/bs-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Sinhala (sample file)" href="OpenSubtitles/v2011/bs-si_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovak (sample file)" href="OpenSubtitles/v2011/bs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Slovenian (sample file)" href="OpenSubtitles/v2011/bs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Albanian (sample file)" href="OpenSubtitles/v2011/bs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Swedish (sample file)" href="OpenSubtitles/v2011/bs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Thai (sample file)" href="OpenSubtitles/v2011/bs-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Turkish (sample file)" href="OpenSubtitles/v2011/bs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Ukrainian (sample file)" href="OpenSubtitles/v2011/bs-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Vietnamese (sample file)" href="OpenSubtitles/v2011/bs-vi_sample.html">view</a></td><td><a rel="nofollow" title="Bosnian-Chinese (sample file)" href="OpenSubtitles/v2011/bs-zh_sample.html">view</a></td><th>bs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ca.tar.gz">ca</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Arabic' (14 aligned documents, 9.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/ar-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bulgarian' (25 aligned documents, 24.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/bg-ca.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Catalan-Bosnian' (3 aligned documents, 3.2k links, 41.9k tokens)" href="download.php?f=OpenSubtitles2011/bs-ca.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Catalan-Czech (sample file)" href="OpenSubtitles/v2011/ca-cs_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Danish (sample file)" href="OpenSubtitles/v2011/ca-da_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="OpenSubtitles/v2011/ca-de_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="OpenSubtitles/v2011/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="OpenSubtitles/v2011/ca-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="OpenSubtitles/v2011/ca-es_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Estonian (sample file)" href="OpenSubtitles/v2011/ca-et_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="OpenSubtitles/v2011/ca-fi_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="OpenSubtitles/v2011/ca-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Hebrew (sample file)" href="OpenSubtitles/v2011/ca-he_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Croatian (sample file)" href="OpenSubtitles/v2011/ca-hr_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Hungarian (sample file)" href="OpenSubtitles/v2011/ca-hu_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Indonesian (sample file)" href="OpenSubtitles/v2011/ca-id_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Icelandic (sample file)" href="OpenSubtitles/v2011/ca-is_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="OpenSubtitles/v2011/ca-it_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Korean (sample file)" href="OpenSubtitles/v2011/ca-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Lithuanian (sample file)" href="OpenSubtitles/v2011/ca-lt_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Latvian (sample file)" href="OpenSubtitles/v2011/ca-lv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Dutch (sample file)" href="OpenSubtitles/v2011/ca-nl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Norwegian (sample file)" href="OpenSubtitles/v2011/ca-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-Polish (sample file)" href="OpenSubtitles/v2011/ca-pl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles/v2011/ca-pt_sample.html">view</a></td><th>ca</th>
<td><a rel="nofollow" title="Catalan-Portuguese (sample file)" href="OpenSubtitles/v2011/ca-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Romanian (sample file)" href="OpenSubtitles/v2011/ca-ro_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Russian (sample file)" href="OpenSubtitles/v2011/ca-ru_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-scc (sample file)" href="OpenSubtitles/v2011/ca-scc_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Slovak (sample file)" href="OpenSubtitles/v2011/ca-sk_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Slovenian (sample file)" href="OpenSubtitles/v2011/ca-sl_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Albanian (sample file)" href="OpenSubtitles/v2011/ca-sq_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Swedish (sample file)" href="OpenSubtitles/v2011/ca-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Turkish (sample file)" href="OpenSubtitles/v2011/ca-tr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Chinese (sample file)" href="OpenSubtitles/v2011/ca-zh_sample.html">view</a></td><th>ca</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/cs.tar.gz">cs</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Arabic' (4,955 aligned documents, 3.5M links, 51.1M tokens)" href="download.php?f=OpenSubtitles2011/ar-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bulgarian' (10,790 aligned documents, 8.9M links, 122.4M tokens)" href="download.php?f=OpenSubtitles2011/bg-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Bosnian' (1,755 aligned documents, 1.5M links, 19.9M tokens)" href="download.php?f=OpenSubtitles2011/bs-cs.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Catalan' (32 aligned documents, 30.1k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ca-cs.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Czech-Danish (sample file)" href="OpenSubtitles/v2011/cs-da_sample.html">view</a></td><td><a rel="nofollow" title="Czech-German (sample file)" href="OpenSubtitles/v2011/cs-de_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="OpenSubtitles/v2011/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="OpenSubtitles/v2011/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Esperanto (sample file)" href="OpenSubtitles/v2011/cs-eo_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="OpenSubtitles/v2011/cs-es_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Estonian (sample file)" href="OpenSubtitles/v2011/cs-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Persian (sample file)" href="OpenSubtitles/v2011/cs-fa_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="OpenSubtitles/v2011/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="OpenSubtitles/v2011/cs-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Hebrew (sample file)" href="OpenSubtitles/v2011/cs-he_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Croatian (sample file)" href="OpenSubtitles/v2011/cs-hr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="OpenSubtitles/v2011/cs-hu_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Indonesian (sample file)" href="OpenSubtitles/v2011/cs-id_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Icelandic (sample file)" href="OpenSubtitles/v2011/cs-is_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="OpenSubtitles/v2011/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="OpenSubtitles/v2011/cs-ja_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Georgian (sample file)" href="OpenSubtitles/v2011/cs-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Korean (sample file)" href="OpenSubtitles/v2011/cs-ko_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Luxembourgish (sample file)" href="OpenSubtitles/v2011/cs-lb_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Lithuanian (sample file)" href="OpenSubtitles/v2011/cs-lt_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Latvian (sample file)" href="OpenSubtitles/v2011/cs-lv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Macedonian (sample file)" href="OpenSubtitles/v2011/cs-mk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Malay (sample file)" href="OpenSubtitles/v2011/cs-ms_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="OpenSubtitles/v2011/cs-nl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Norwegian (sample file)" href="OpenSubtitles/v2011/cs-no_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/cs-oc_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="OpenSubtitles/v2011/cs-pl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles/v2011/cs-pt_sample.html">view</a></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="OpenSubtitles/v2011/cs-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="OpenSubtitles/v2011/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="OpenSubtitles/v2011/cs-ru_sample.html">view</a></td><td><a rel="nofollow" title="Czech-scc (sample file)" href="OpenSubtitles/v2011/cs-scc_sample.html">view</a></td><td><a rel="nofollow" title="Czech-scr (sample file)" href="OpenSubtitles/v2011/cs-scr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Sinhala (sample file)" href="OpenSubtitles/v2011/cs-si_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovak (sample file)" href="OpenSubtitles/v2011/cs-sk_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="OpenSubtitles/v2011/cs-sl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Albanian (sample file)" href="OpenSubtitles/v2011/cs-sq_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Swedish (sample file)" href="OpenSubtitles/v2011/cs-sv_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Thai (sample file)" href="OpenSubtitles/v2011/cs-th_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Tagalog (sample file)" href="OpenSubtitles/v2011/cs-tl_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="OpenSubtitles/v2011/cs-tr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="OpenSubtitles/v2011/cs-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Vietnamese (sample file)" href="OpenSubtitles/v2011/cs-vi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Chinese (sample file)" href="OpenSubtitles/v2011/cs-zh_sample.html">view</a></td><th>cs</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/da.tar.gz">da</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Arabic' (1,253 aligned documents, 1.1M links, 16.6M tokens)" href="download.php?f=OpenSubtitles2011/ar-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bulgarian' (2,491 aligned documents, 2.4M links, 34.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Bosnian' (482 aligned documents, 0.5M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2011/bs-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Catalan' (14 aligned documents, 15.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-da.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Danish-Czech' (2,933 aligned documents, 3.0M links, 41.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-da.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="OpenSubtitles/v2011/da-de_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Greek (sample file)" href="OpenSubtitles/v2011/da-el_sample.html">view</a></td><td><a rel="nofollow" title="Danish-English (sample file)" href="OpenSubtitles/v2011/da-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="OpenSubtitles/v2011/da-es_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Estonian (sample file)" href="OpenSubtitles/v2011/da-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Persian (sample file)" href="OpenSubtitles/v2011/da-fa_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="OpenSubtitles/v2011/da-fi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-French (sample file)" href="OpenSubtitles/v2011/da-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Hebrew (sample file)" href="OpenSubtitles/v2011/da-he_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Croatian (sample file)" href="OpenSubtitles/v2011/da-hr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Hungarian (sample file)" href="OpenSubtitles/v2011/da-hu_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Indonesian (sample file)" href="OpenSubtitles/v2011/da-id_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Icelandic (sample file)" href="OpenSubtitles/v2011/da-is_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="OpenSubtitles/v2011/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="OpenSubtitles/v2011/da-ja_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Georgian (sample file)" href="OpenSubtitles/v2011/da-ka_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Danish-Luxembourgish (sample file)" href="OpenSubtitles/v2011/da-lb_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Lithuanian (sample file)" href="OpenSubtitles/v2011/da-lt_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Latvian (sample file)" href="OpenSubtitles/v2011/da-lv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Macedonian (sample file)" href="OpenSubtitles/v2011/da-mk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Malay (sample file)" href="OpenSubtitles/v2011/da-ms_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="OpenSubtitles/v2011/da-nl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Norwegian (sample file)" href="OpenSubtitles/v2011/da-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Polish (sample file)" href="OpenSubtitles/v2011/da-pl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles/v2011/da-pt_sample.html">view</a></td><th>da</th>
<td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="OpenSubtitles/v2011/da-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Romanian (sample file)" href="OpenSubtitles/v2011/da-ro_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="OpenSubtitles/v2011/da-ru_sample.html">view</a></td><td><a rel="nofollow" title="Danish-scc (sample file)" href="OpenSubtitles/v2011/da-scc_sample.html">view</a></td><td><a rel="nofollow" title="Danish-scr (sample file)" href="OpenSubtitles/v2011/da-scr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Sinhala (sample file)" href="OpenSubtitles/v2011/da-si_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovak (sample file)" href="OpenSubtitles/v2011/da-sk_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Slovenian (sample file)" href="OpenSubtitles/v2011/da-sl_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Albanian (sample file)" href="OpenSubtitles/v2011/da-sq_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="OpenSubtitles/v2011/da-sv_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Thai (sample file)" href="OpenSubtitles/v2011/da-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Turkish (sample file)" href="OpenSubtitles/v2011/da-tr_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Ukrainian (sample file)" href="OpenSubtitles/v2011/da-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-Vietnamese (sample file)" href="OpenSubtitles/v2011/da-vi_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Chinese (sample file)" href="OpenSubtitles/v2011/da-zh_sample.html">view</a></td><th>da</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/de.tar.gz">de</a></th>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (1,396 aligned documents, 0.9M links, 13.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (2,775 aligned documents, 2.1M links, 31.0M tokens)" href="download.php?f=OpenSubtitles2011/bg-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (545 aligned documents, 0.4M links, 5.5M tokens)" href="download.php?f=OpenSubtitles2011/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (17 aligned documents, 18.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (3,057 aligned documents, 2.7M links, 37.3M tokens)" href="download.php?f=OpenSubtitles2011/cs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (1,020 aligned documents, 1.0M links, 13.9M tokens)" href="download.php?f=OpenSubtitles2011/da-de.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="German-Greek (sample file)" href="OpenSubtitles/v2011/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="OpenSubtitles/v2011/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Esperanto (sample file)" href="OpenSubtitles/v2011/de-eo_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="OpenSubtitles/v2011/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="OpenSubtitles/v2011/de-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Persian (sample file)" href="OpenSubtitles/v2011/de-fa_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="OpenSubtitles/v2011/de-fi_sample.html">view</a></td><td><a rel="nofollow" title="German-French (sample file)" href="OpenSubtitles/v2011/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Galician (sample file)" href="OpenSubtitles/v2011/de-gl_sample.html">view</a></td><td><a rel="nofollow" title="German-Hebrew (sample file)" href="OpenSubtitles/v2011/de-he_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Croatian (sample file)" href="OpenSubtitles/v2011/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="OpenSubtitles/v2011/de-hu_sample.html">view</a></td><td><a rel="nofollow" title="German-Indonesian (sample file)" href="OpenSubtitles/v2011/de-id_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="OpenSubtitles/v2011/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="OpenSubtitles/v2011/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="OpenSubtitles/v2011/de-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Korean (sample file)" href="OpenSubtitles/v2011/de-ko_sample.html">view</a></td><td><a rel="nofollow" title="German-Luxembourgish (sample file)" href="OpenSubtitles/v2011/de-lb_sample.html">view</a></td><td><a rel="nofollow" title="German-Lithuanian (sample file)" href="OpenSubtitles/v2011/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="OpenSubtitles/v2011/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-Macedonian (sample file)" href="OpenSubtitles/v2011/de-mk_sample.html">view</a></td><td><a rel="nofollow" title="German-Malay (sample file)" href="OpenSubtitles/v2011/de-ms_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="OpenSubtitles/v2011/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Norwegian (sample file)" href="OpenSubtitles/v2011/de-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Polish (sample file)" href="OpenSubtitles/v2011/de-pl_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles/v2011/de-pt_sample.html">view</a></td><th>de</th>
<td><a rel="nofollow" title="German-Portuguese (sample file)" href="OpenSubtitles/v2011/de-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="OpenSubtitles/v2011/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="OpenSubtitles/v2011/de-ru_sample.html">view</a></td><td><a rel="nofollow" title="German-scc (sample file)" href="OpenSubtitles/v2011/de-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Sinhala (sample file)" href="OpenSubtitles/v2011/de-si_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovak (sample file)" href="OpenSubtitles/v2011/de-sk_sample.html">view</a></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="OpenSubtitles/v2011/de-sl_sample.html">view</a></td><td><a rel="nofollow" title="German-Albanian (sample file)" href="OpenSubtitles/v2011/de-sq_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="OpenSubtitles/v2011/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-Thai (sample file)" href="OpenSubtitles/v2011/de-th_sample.html">view</a></td><td><a rel="nofollow" title="German-Tagalog (sample file)" href="OpenSubtitles/v2011/de-tl_sample.html">view</a></td><td><a rel="nofollow" title="German-Turkish (sample file)" href="OpenSubtitles/v2011/de-tr_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="OpenSubtitles/v2011/de-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Vietnamese (sample file)" href="OpenSubtitles/v2011/de-vi_sample.html">view</a></td><td><a rel="nofollow" title="German-Chinese (sample file)" href="OpenSubtitles/v2011/de-zh_sample.html">view</a></td><th>de</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/el.tar.gz">el</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (4,923 aligned documents, 3.3M links, 50.5M tokens)" href="download.php?f=OpenSubtitles2011/ar-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (11,408 aligned documents, 8.7M links, 129.1M tokens)" href="download.php?f=OpenSubtitles2011/bg-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bosnian' (1,902 aligned documents, 1.4M links, 21.2M tokens)" href="download.php?f=OpenSubtitles2011/bs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (34 aligned documents, 33.4k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ca-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (10,868 aligned documents, 9.1M links, 129.9M tokens)" href="download.php?f=OpenSubtitles2011/cs-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Danish' (2,623 aligned documents, 2.5M links, 37.3M tokens)" href="download.php?f=OpenSubtitles2011/da-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (2,944 aligned documents, 2.3M links, 35.5M tokens)" href="download.php?f=OpenSubtitles2011/de-el.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Greek-English (sample file)" href="OpenSubtitles/v2011/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Esperanto (sample file)" href="OpenSubtitles/v2011/el-eo_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Estonian (sample file)" href="OpenSubtitles/v2011/el-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Persian (sample file)" href="OpenSubtitles/v2011/el-fa_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Greek-Galician (sample file)" href="OpenSubtitles/v2011/el-gl_sample.html">view</a></td><td></td><th>el</th>
<td></td><td></td><td><a rel="nofollow" title="Greek-Indonesian (sample file)" href="OpenSubtitles/v2011/el-id_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Icelandic (sample file)" href="OpenSubtitles/v2011/el-is_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="OpenSubtitles/v2011/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="OpenSubtitles/v2011/el-ja_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Georgian (sample file)" href="OpenSubtitles/v2011/el-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Korean (sample file)" href="OpenSubtitles/v2011/el-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Lithuanian (sample file)" href="OpenSubtitles/v2011/el-lt_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Latvian (sample file)" href="OpenSubtitles/v2011/el-lv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Macedonian (sample file)" href="OpenSubtitles/v2011/el-mk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Malay (sample file)" href="OpenSubtitles/v2011/el-ms_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="OpenSubtitles/v2011/el-nl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Norwegian (sample file)" href="OpenSubtitles/v2011/el-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="OpenSubtitles/v2011/el-pl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles/v2011/el-pt_sample.html">view</a></td><th>el</th>
<td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="OpenSubtitles/v2011/el-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Romanian (sample file)" href="OpenSubtitles/v2011/el-ro_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="OpenSubtitles/v2011/el-ru_sample.html">view</a></td><td><a rel="nofollow" title="Greek-scc (sample file)" href="OpenSubtitles/v2011/el-scc_sample.html">view</a></td><td><a rel="nofollow" title="Greek-scr (sample file)" href="OpenSubtitles/v2011/el-scr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Sinhala (sample file)" href="OpenSubtitles/v2011/el-si_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovak (sample file)" href="OpenSubtitles/v2011/el-sk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Slovenian (sample file)" href="OpenSubtitles/v2011/el-sl_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Albanian (sample file)" href="OpenSubtitles/v2011/el-sq_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Swedish (sample file)" href="OpenSubtitles/v2011/el-sv_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Thai (sample file)" href="OpenSubtitles/v2011/el-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="OpenSubtitles/v2011/el-tr_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="OpenSubtitles/v2011/el-uk_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Urdu (sample file)" href="OpenSubtitles/v2011/el-ur_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Vietnamese (sample file)" href="OpenSubtitles/v2011/el-vi_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Chinese (sample file)" href="OpenSubtitles/v2011/el-zh_sample.html">view</a></td><th>el</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (8,256 aligned documents, 6.2M links, 97.5M tokens)" href="download.php?f=OpenSubtitles2011/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (19,420 aligned documents, 16.7M links, 248.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (2,911 aligned documents, 2.5M links, 36.3M tokens)" href="download.php?f=OpenSubtitles2011/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (63 aligned documents, 62.8k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (22,753 aligned documents, 21.0M links, 301.4M tokens)" href="download.php?f=OpenSubtitles2011/cs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (4,914 aligned documents, 5.0M links, 74.8M tokens)" href="download.php?f=OpenSubtitles2011/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (5,649 aligned documents, 5.0M links, 75.8M tokens)" href="download.php?f=OpenSubtitles2011/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (20,032 aligned documents, 17.2M links, 268.0M tokens)" href="download.php?f=OpenSubtitles2011/el-en.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="English-Esperanto (sample file)" href="OpenSubtitles/v2011/en-eo_sample.html">view</a></td><td><a rel="nofollow" title="English-Spanish (sample file)" href="OpenSubtitles/v2011/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="OpenSubtitles/v2011/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="OpenSubtitles/v2011/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Persian (sample file)" href="OpenSubtitles/v2011/en-fa_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="OpenSubtitles/v2011/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="OpenSubtitles/v2011/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="OpenSubtitles/v2011/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="OpenSubtitles/v2011/en-he_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="OpenSubtitles/v2011/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="OpenSubtitles/v2011/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="OpenSubtitles/v2011/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="OpenSubtitles/v2011/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="OpenSubtitles/v2011/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="OpenSubtitles/v2011/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Georgian (sample file)" href="OpenSubtitles/v2011/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="OpenSubtitles/v2011/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="OpenSubtitles/v2011/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-Luxembourgish (sample file)" href="OpenSubtitles/v2011/en-lb_sample.html">view</a></td><td><a rel="nofollow" title="English-Lithuanian (sample file)" href="OpenSubtitles/v2011/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="OpenSubtitles/v2011/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-Macedonian (sample file)" href="OpenSubtitles/v2011/en-mk_sample.html">view</a></td><td><a rel="nofollow" title="English-Malay (sample file)" href="OpenSubtitles/v2011/en-ms_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="OpenSubtitles/v2011/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Norwegian (sample file)" href="OpenSubtitles/v2011/en-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Polish (sample file)" href="OpenSubtitles/v2011/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles/v2011/en-pt_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Portuguese (sample file)" href="OpenSubtitles/v2011/en-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="OpenSubtitles/v2011/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="OpenSubtitles/v2011/en-ru_sample.html">view</a></td><td><a rel="nofollow" title="English-scc (sample file)" href="OpenSubtitles/v2011/en-scc_sample.html">view</a></td><td><a rel="nofollow" title="English-scr (sample file)" href="OpenSubtitles/v2011/en-scr_sample.html">view</a></td><td><a rel="nofollow" title="English-Sinhala (sample file)" href="OpenSubtitles/v2011/en-si_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovak (sample file)" href="OpenSubtitles/v2011/en-sk_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="OpenSubtitles/v2011/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="OpenSubtitles/v2011/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="OpenSubtitles/v2011/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-Thai (sample file)" href="OpenSubtitles/v2011/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Tagalog (sample file)" href="OpenSubtitles/v2011/en-tl_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="OpenSubtitles/v2011/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="OpenSubtitles/v2011/en-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="OpenSubtitles/v2011/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-Chinese (sample file)" href="OpenSubtitles/v2011/en-zh_sample.html">view</a></td><th>en</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/eo.tar.gz">eo</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Arabic' (0.3k links, 3.5k tokens)" href="download.php?f=OpenSubtitles2011/ar-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Bulgarian' (2 aligned documents, 1.3k links, 17.1k tokens)" href="download.php?f=OpenSubtitles2011/bg-eo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Czech' (3 aligned documents, 1.7k links, 22.0k tokens)" href="download.php?f=OpenSubtitles2011/cs-eo.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-German' (2 aligned documents, 1.3k links, 18.1k tokens)" href="download.php?f=OpenSubtitles2011/de-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Greek' (2 aligned documents, 0.7k links, 7.5k tokens)" href="download.php?f=OpenSubtitles2011/el-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-English' (11 aligned documents, 6.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/en-eo.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Esperanto-Spanish (sample file)" href="OpenSubtitles/v2011/eo-es_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Finnish (sample file)" href="OpenSubtitles/v2011/eo-fi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-French (sample file)" href="OpenSubtitles/v2011/eo-fr_sample.html">view</a></td><td></td><td></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Croatian (sample file)" href="OpenSubtitles/v2011/eo-hr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Hungarian (sample file)" href="OpenSubtitles/v2011/eo-hu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Italian (sample file)" href="OpenSubtitles/v2011/eo-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Lithuanian (sample file)" href="OpenSubtitles/v2011/eo-lt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Polish (sample file)" href="OpenSubtitles/v2011/eo-pl_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Portuguese (sample file)" href="OpenSubtitles/v2011/eo-pt_sample.html">view</a></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Portuguese (sample file)" href="OpenSubtitles/v2011/eo-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Romanian (sample file)" href="OpenSubtitles/v2011/eo-ro_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Russian (sample file)" href="OpenSubtitles/v2011/eo-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Slovenian (sample file)" href="OpenSubtitles/v2011/eo-sl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Turkish (sample file)" href="OpenSubtitles/v2011/eo-tr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Chinese (sample file)" href="OpenSubtitles/v2011/eo-zh_sample.html">view</a></td><th>eo</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/es.tar.gz">es</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (5,997 aligned documents, 4.3M links, 66.2M tokens)" href="download.php?f=OpenSubtitles2011/ar-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (13,970 aligned documents, 11.3M links, 168.1M tokens)" href="download.php?f=OpenSubtitles2011/bg-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (2,243 aligned documents, 1.8M links, 26.7M tokens)" href="download.php?f=OpenSubtitles2011/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (91 aligned documents, 77.7k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (15,101 aligned documents, 13.1M links, 189.3M tokens)" href="download.php?f=OpenSubtitles2011/cs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (3,747 aligned documents, 3.6M links, 53.8M tokens)" href="download.php?f=OpenSubtitles2011/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (3,979 aligned documents, 3.3M links, 50.7M tokens)" href="download.php?f=OpenSubtitles2011/de-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (38,391 aligned documents, 35.6M links, 553.5M tokens)" href="download.php?f=OpenSubtitles2011/en-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Esperanto' (5 aligned documents, 3.2k links, 51.3k tokens)" href="download.php?f=OpenSubtitles2011/eo-es.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="OpenSubtitles/v2011/es-et_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Persian (sample file)" href="OpenSubtitles/v2011/es-fa_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="OpenSubtitles/v2011/es-fi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="OpenSubtitles/v2011/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Galician (sample file)" href="OpenSubtitles/v2011/es-gl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hebrew (sample file)" href="OpenSubtitles/v2011/es-he_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="OpenSubtitles/v2011/es-hr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="OpenSubtitles/v2011/es-hu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Indonesian (sample file)" href="OpenSubtitles/v2011/es-id_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="OpenSubtitles/v2011/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="OpenSubtitles/v2011/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="OpenSubtitles/v2011/es-ja_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Georgian (sample file)" href="OpenSubtitles/v2011/es-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="OpenSubtitles/v2011/es-ko_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Luxembourgish (sample file)" href="OpenSubtitles/v2011/es-lb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="OpenSubtitles/v2011/es-lt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Latvian (sample file)" href="OpenSubtitles/v2011/es-lv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Macedonian (sample file)" href="OpenSubtitles/v2011/es-mk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Malay (sample file)" href="OpenSubtitles/v2011/es-ms_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="OpenSubtitles/v2011/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norwegian (sample file)" href="OpenSubtitles/v2011/es-no_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/es-oc_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="OpenSubtitles/v2011/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles/v2011/es-pt_sample.html">view</a></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="OpenSubtitles/v2011/es-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="OpenSubtitles/v2011/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="OpenSubtitles/v2011/es-ru_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-scc (sample file)" href="OpenSubtitles/v2011/es-scc_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-scr (sample file)" href="OpenSubtitles/v2011/es-scr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Sinhala (sample file)" href="OpenSubtitles/v2011/es-si_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovak (sample file)" href="OpenSubtitles/v2011/es-sk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="OpenSubtitles/v2011/es-sl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Albanian (sample file)" href="OpenSubtitles/v2011/es-sq_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="OpenSubtitles/v2011/es-sv_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Thai (sample file)" href="OpenSubtitles/v2011/es-th_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tagalog (sample file)" href="OpenSubtitles/v2011/es-tl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Turkish (sample file)" href="OpenSubtitles/v2011/es-tr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="OpenSubtitles/v2011/es-uk_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Urdu (sample file)" href="OpenSubtitles/v2011/es-ur_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Vietnamese (sample file)" href="OpenSubtitles/v2011/es-vi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Chinese (sample file)" href="OpenSubtitles/v2011/es-zh_sample.html">view</a></td><th>es</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/et.tar.gz">et</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Arabic' (1,821 aligned documents, 1.3M links, 18.6M tokens)" href="download.php?f=OpenSubtitles2011/ar-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bulgarian' (3,221 aligned documents, 2.7M links, 36.4M tokens)" href="download.php?f=OpenSubtitles2011/bg-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Bosnian' (665 aligned documents, 0.5M links, 7.2M tokens)" href="download.php?f=OpenSubtitles2011/bs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Catalan' (15 aligned documents, 13.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Czech' (3,100 aligned documents, 2.8M links, 36.0M tokens)" href="download.php?f=OpenSubtitles2011/cs-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Danish' (1,134 aligned documents, 1.1M links, 15.8M tokens)" href="download.php?f=OpenSubtitles2011/da-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (897 aligned documents, 0.7M links, 9.9M tokens)" href="download.php?f=OpenSubtitles2011/de-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Greek' (2,980 aligned documents, 2.4M links, 33.6M tokens)" href="download.php?f=OpenSubtitles2011/el-et.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (4,828 aligned documents, 4.5M links, 63.0M tokens)" href="download.php?f=OpenSubtitles2011/en-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (3,554 aligned documents, 3.0M links, 43.3M tokens)" href="download.php?f=OpenSubtitles2011/es-et.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-Persian (sample file)" href="OpenSubtitles/v2011/et-fa_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="OpenSubtitles/v2011/et-fi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="OpenSubtitles/v2011/et-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Hebrew (sample file)" href="OpenSubtitles/v2011/et-he_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Croatian (sample file)" href="OpenSubtitles/v2011/et-hr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Hungarian (sample file)" href="OpenSubtitles/v2011/et-hu_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Indonesian (sample file)" href="OpenSubtitles/v2011/et-id_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Icelandic (sample file)" href="OpenSubtitles/v2011/et-is_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Italian (sample file)" href="OpenSubtitles/v2011/et-it_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="OpenSubtitles/v2011/et-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Lithuanian (sample file)" href="OpenSubtitles/v2011/et-lt_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Latvian (sample file)" href="OpenSubtitles/v2011/et-lv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Macedonian (sample file)" href="OpenSubtitles/v2011/et-mk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Malay (sample file)" href="OpenSubtitles/v2011/et-ms_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Dutch (sample file)" href="OpenSubtitles/v2011/et-nl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Norwegian (sample file)" href="OpenSubtitles/v2011/et-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Polish (sample file)" href="OpenSubtitles/v2011/et-pl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles/v2011/et-pt_sample.html">view</a></td><th>et</th>
<td><a rel="nofollow" title="Estonian-Portuguese (sample file)" href="OpenSubtitles/v2011/et-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Romanian (sample file)" href="OpenSubtitles/v2011/et-ro_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="OpenSubtitles/v2011/et-ru_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-scc (sample file)" href="OpenSubtitles/v2011/et-scc_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-scr (sample file)" href="OpenSubtitles/v2011/et-scr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Sinhala (sample file)" href="OpenSubtitles/v2011/et-si_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovak (sample file)" href="OpenSubtitles/v2011/et-sk_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Slovenian (sample file)" href="OpenSubtitles/v2011/et-sl_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Albanian (sample file)" href="OpenSubtitles/v2011/et-sq_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Swedish (sample file)" href="OpenSubtitles/v2011/et-sv_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Thai (sample file)" href="OpenSubtitles/v2011/et-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Turkish (sample file)" href="OpenSubtitles/v2011/et-tr_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Ukrainian (sample file)" href="OpenSubtitles/v2011/et-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-Vietnamese (sample file)" href="OpenSubtitles/v2011/et-vi_sample.html">view</a></td><td><a rel="nofollow" title="Estonian-Chinese (sample file)" href="OpenSubtitles/v2011/et-zh_sample.html">view</a></td><th>et</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/eu.tar.gz">eu</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (0.8k links, 9.9k tokens)" href="download.php?f=OpenSubtitles2011/en-eu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Portuguese (sample file)" href="OpenSubtitles/v2011/eu-pt_sample.html">view</a></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/fa.tar.gz">fa</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Arabic' (4 aligned documents, 1.9k links, 55.7k tokens)" href="download.php?f=OpenSubtitles2011/ar-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bulgarian' (4 aligned documents, 2.2k links, 53.9k tokens)" href="download.php?f=OpenSubtitles2011/bg-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Bosnian' (3 aligned documents, 1.7k links, 44.3k tokens)" href="download.php?f=OpenSubtitles2011/bs-fa.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Czech' (4 aligned documents, 2.0k links, 50.9k tokens)" href="download.php?f=OpenSubtitles2011/cs-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Danish' (4 aligned documents, 2.5k links, 67.5k tokens)" href="download.php?f=OpenSubtitles2011/da-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-German' (2 aligned documents, 0.9k links, 22.2k tokens)" href="download.php?f=OpenSubtitles2011/de-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Greek' (8 aligned documents, 3.7k links, 89.8k tokens)" href="download.php?f=OpenSubtitles2011/el-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-English' (19 aligned documents, 6.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/en-fa.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Spanish' (7 aligned documents, 3.1k links, 74.0k tokens)" href="download.php?f=OpenSubtitles2011/es-fa.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Persian-Estonian' (0.9k links, 24.7k tokens)" href="download.php?f=OpenSubtitles2011/et-fa.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Persian-Finnish (sample file)" href="OpenSubtitles/v2011/fa-fi_sample.html">view</a></td><td><a rel="nofollow" title="Persian-French (sample file)" href="OpenSubtitles/v2011/fa-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Hebrew (sample file)" href="OpenSubtitles/v2011/fa-he_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Croatian (sample file)" href="OpenSubtitles/v2011/fa-hr_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Hungarian (sample file)" href="OpenSubtitles/v2011/fa-hu_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Indonesian (sample file)" href="OpenSubtitles/v2011/fa-id_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Italian (sample file)" href="OpenSubtitles/v2011/fa-it_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Georgian (sample file)" href="OpenSubtitles/v2011/fa-ka_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Lithuanian (sample file)" href="OpenSubtitles/v2011/fa-lt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Dutch (sample file)" href="OpenSubtitles/v2011/fa-nl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Norwegian (sample file)" href="OpenSubtitles/v2011/fa-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Persian-Polish (sample file)" href="OpenSubtitles/v2011/fa-pl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles/v2011/fa-pt_sample.html">view</a></td><th>fa</th>
<td><a rel="nofollow" title="Persian-Portuguese (sample file)" href="OpenSubtitles/v2011/fa-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Romanian (sample file)" href="OpenSubtitles/v2011/fa-ro_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Russian (sample file)" href="OpenSubtitles/v2011/fa-ru_sample.html">view</a></td><td><a rel="nofollow" title="Persian-scc (sample file)" href="OpenSubtitles/v2011/fa-scc_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Persian-Slovak (sample file)" href="OpenSubtitles/v2011/fa-sk_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Slovenian (sample file)" href="OpenSubtitles/v2011/fa-sl_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Albanian (sample file)" href="OpenSubtitles/v2011/fa-sq_sample.html">view</a></td><td><a rel="nofollow" title="Persian-Swedish (sample file)" href="OpenSubtitles/v2011/fa-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Persian-Turkish (sample file)" href="OpenSubtitles/v2011/fa-tr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Persian-Chinese (sample file)" href="OpenSubtitles/v2011/fa-zh_sample.html">view</a></td><th>fa</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/fi.tar.gz">fi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Arabic' (2,880 aligned documents, 2.1M links, 28.0M tokens)" href="download.php?f=OpenSubtitles2011/ar-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (6,224 aligned documents, 5.4M links, 68.1M tokens)" href="download.php?f=OpenSubtitles2011/bg-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bosnian' (1,110 aligned documents, 0.9M links, 11.7M tokens)" href="download.php?f=OpenSubtitles2011/bs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (26 aligned documents, 25.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (6,412 aligned documents, 5.9M links, 73.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (2,907 aligned documents, 2.8M links, 36.5M tokens)" href="download.php?f=OpenSubtitles2011/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (2,117 aligned documents, 1.8M links, 24.2M tokens)" href="download.php?f=OpenSubtitles2011/de-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (11,399 aligned documents, 10.8M links, 145.9M tokens)" href="download.php?f=OpenSubtitles2011/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Esperanto' (0.9k links, 12.4k tokens)" href="download.php?f=OpenSubtitles2011/eo-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (7,664 aligned documents, 6.9M links, 93.1M tokens)" href="download.php?f=OpenSubtitles2011/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (2,410 aligned documents, 2.1M links, 26.0M tokens)" href="download.php?f=OpenSubtitles2011/et-fi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Persian' (3 aligned documents, 2.4k links, 55.0k tokens)" href="download.php?f=OpenSubtitles2011/fa-fi.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Finnish-French (sample file)" href="OpenSubtitles/v2011/fi-fr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Hebrew (sample file)" href="OpenSubtitles/v2011/fi-he_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Croatian (sample file)" href="OpenSubtitles/v2011/fi-hr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="OpenSubtitles/v2011/fi-hu_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Indonesian (sample file)" href="OpenSubtitles/v2011/fi-id_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Icelandic (sample file)" href="OpenSubtitles/v2011/fi-is_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="OpenSubtitles/v2011/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="OpenSubtitles/v2011/fi-ja_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Georgian (sample file)" href="OpenSubtitles/v2011/fi-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="OpenSubtitles/v2011/fi-ko_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Luxembourgish (sample file)" href="OpenSubtitles/v2011/fi-lb_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Lithuanian (sample file)" href="OpenSubtitles/v2011/fi-lt_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Latvian (sample file)" href="OpenSubtitles/v2011/fi-lv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Macedonian (sample file)" href="OpenSubtitles/v2011/fi-mk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Malay (sample file)" href="OpenSubtitles/v2011/fi-ms_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="OpenSubtitles/v2011/fi-nl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Norwegian (sample file)" href="OpenSubtitles/v2011/fi-no_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/fi-oc_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="OpenSubtitles/v2011/fi-pl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles/v2011/fi-pt_sample.html">view</a></td><th>fi</th>
<td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="OpenSubtitles/v2011/fi-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="OpenSubtitles/v2011/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="OpenSubtitles/v2011/fi-ru_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-scc (sample file)" href="OpenSubtitles/v2011/fi-scc_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-scr (sample file)" href="OpenSubtitles/v2011/fi-scr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Sinhala (sample file)" href="OpenSubtitles/v2011/fi-si_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovak (sample file)" href="OpenSubtitles/v2011/fi-sk_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Slovenian (sample file)" href="OpenSubtitles/v2011/fi-sl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Albanian (sample file)" href="OpenSubtitles/v2011/fi-sq_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="OpenSubtitles/v2011/fi-sv_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Thai (sample file)" href="OpenSubtitles/v2011/fi-th_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Tagalog (sample file)" href="OpenSubtitles/v2011/fi-tl_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="OpenSubtitles/v2011/fi-tr_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Ukrainian (sample file)" href="OpenSubtitles/v2011/fi-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Vietnamese (sample file)" href="OpenSubtitles/v2011/fi-vi_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Chinese (sample file)" href="OpenSubtitles/v2011/fi-zh_sample.html">view</a></td><th>fi</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/fr.tar.gz">fr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (4,438 aligned documents, 3.1M links, 48.0M tokens)" href="download.php?f=OpenSubtitles2011/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (10,124 aligned documents, 8.1M links, 119.7M tokens)" href="download.php?f=OpenSubtitles2011/bg-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (1,572 aligned documents, 1.3M links, 18.7M tokens)" href="download.php?f=OpenSubtitles2011/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (37 aligned documents, 32.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (10,437 aligned documents, 9.1M links, 130.5M tokens)" href="download.php?f=OpenSubtitles2011/cs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (2,737 aligned documents, 2.8M links, 40.5M tokens)" href="download.php?f=OpenSubtitles2011/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (3,737 aligned documents, 3.2M links, 47.9M tokens)" href="download.php?f=OpenSubtitles2011/de-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (24,116 aligned documents, 22.0M links, 340.1M tokens)" href="download.php?f=OpenSubtitles2011/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Esperanto' (0.3k links, 4.1k tokens)" href="download.php?f=OpenSubtitles2011/eo-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (16,935 aligned documents, 14.8M links, 229.2M tokens)" href="download.php?f=OpenSubtitles2011/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (2,742 aligned documents, 2.3M links, 33.0M tokens)" href="download.php?f=OpenSubtitles2011/et-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Persian' (0.6k links, 16.0k tokens)" href="download.php?f=OpenSubtitles2011/fa-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (5,813 aligned documents, 5.3M links, 70.1M tokens)" href="download.php?f=OpenSubtitles2011/fi-fr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="French-Galician (sample file)" href="OpenSubtitles/v2011/fr-gl_sample.html">view</a></td><td><a rel="nofollow" title="French-Hebrew (sample file)" href="OpenSubtitles/v2011/fr-he_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Croatian (sample file)" href="OpenSubtitles/v2011/fr-hr_sample.html">view</a></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="OpenSubtitles/v2011/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Indonesian (sample file)" href="OpenSubtitles/v2011/fr-id_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="OpenSubtitles/v2011/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="OpenSubtitles/v2011/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="OpenSubtitles/v2011/fr-ja_sample.html">view</a></td><td><a rel="nofollow" title="French-Georgian (sample file)" href="OpenSubtitles/v2011/fr-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Korean (sample file)" href="OpenSubtitles/v2011/fr-ko_sample.html">view</a></td><td><a rel="nofollow" title="French-Luxembourgish (sample file)" href="OpenSubtitles/v2011/fr-lb_sample.html">view</a></td><td><a rel="nofollow" title="French-Lithuanian (sample file)" href="OpenSubtitles/v2011/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="OpenSubtitles/v2011/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-Macedonian (sample file)" href="OpenSubtitles/v2011/fr-mk_sample.html">view</a></td><td><a rel="nofollow" title="French-Malay (sample file)" href="OpenSubtitles/v2011/fr-ms_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="OpenSubtitles/v2011/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Norwegian (sample file)" href="OpenSubtitles/v2011/fr-no_sample.html">view</a></td><td><a rel="nofollow" title="French-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/fr-oc_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="OpenSubtitles/v2011/fr-pl_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles/v2011/fr-pt_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Portuguese (sample file)" href="OpenSubtitles/v2011/fr-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="OpenSubtitles/v2011/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="OpenSubtitles/v2011/fr-ru_sample.html">view</a></td><td><a rel="nofollow" title="French-scc (sample file)" href="OpenSubtitles/v2011/fr-scc_sample.html">view</a></td><td><a rel="nofollow" title="French-scr (sample file)" href="OpenSubtitles/v2011/fr-scr_sample.html">view</a></td><td><a rel="nofollow" title="French-Sinhala (sample file)" href="OpenSubtitles/v2011/fr-si_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovak (sample file)" href="OpenSubtitles/v2011/fr-sk_sample.html">view</a></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="OpenSubtitles/v2011/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="OpenSubtitles/v2011/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="OpenSubtitles/v2011/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-Thai (sample file)" href="OpenSubtitles/v2011/fr-th_sample.html">view</a></td><td><a rel="nofollow" title="French-Tagalog (sample file)" href="OpenSubtitles/v2011/fr-tl_sample.html">view</a></td><td><a rel="nofollow" title="French-Turkish (sample file)" href="OpenSubtitles/v2011/fr-tr_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="OpenSubtitles/v2011/fr-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Vietnamese (sample file)" href="OpenSubtitles/v2011/fr-vi_sample.html">view</a></td><td><a rel="nofollow" title="French-Chinese (sample file)" href="OpenSubtitles/v2011/fr-zh_sample.html">view</a></td><th>fr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/gl.tar.gz">gl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-German' (0.7k links, 12.9k tokens)" href="download.php?f=OpenSubtitles2011/de-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Greek' (2 aligned documents, 0.7k links, 10.4k tokens)" href="download.php?f=OpenSubtitles2011/el-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (9 aligned documents, 2.5k links, 36.9k tokens)" href="download.php?f=OpenSubtitles2011/en-gl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Spanish' (15 aligned documents, 5.5k links, 81.8k tokens)" href="download.php?f=OpenSubtitles2011/es-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-French' (3 aligned documents, 2.0k links, 28.3k tokens)" href="download.php?f=OpenSubtitles2011/fr-gl.xml.gz">ces</a></td>
<th></th>
<td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Italian (sample file)" href="OpenSubtitles/v2011/gl-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Portuguese (sample file)" href="OpenSubtitles/v2011/gl-pt_sample.html">view</a></td><th>gl</th>
<td><a rel="nofollow" title="Galician-Portuguese (sample file)" href="OpenSubtitles/v2011/gl-pt_br_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Turkish (sample file)" href="OpenSubtitles/v2011/gl-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>gl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/he.tar.gz">he</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Arabic' (4,319 aligned documents, 2.9M links, 41.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bulgarian' (8,933 aligned documents, 6.0M links, 92.8M tokens)" href="download.php?f=OpenSubtitles2011/bg-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Bosnian' (1,563 aligned documents, 1.1M links, 16.1M tokens)" href="download.php?f=OpenSubtitles2011/bs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Catalan' (21 aligned documents, 16.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Czech' (8,707 aligned documents, 6.1M links, 93.7M tokens)" href="download.php?f=OpenSubtitles2011/cs-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Danish' (2,066 aligned documents, 1.8M links, 28.0M tokens)" href="download.php?f=OpenSubtitles2011/da-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-German' (2,264 aligned documents, 1.5M links, 24.0M tokens)" href="download.php?f=OpenSubtitles2011/de-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (15,267 aligned documents, 11.1M links, 185.6M tokens)" href="download.php?f=OpenSubtitles2011/en-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Spanish' (10,874 aligned documents, 7.7M links, 125.2M tokens)" href="download.php?f=OpenSubtitles2011/es-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Estonian' (2,576 aligned documents, 1.9M links, 28.1M tokens)" href="download.php?f=OpenSubtitles2011/et-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Persian' (3 aligned documents, 1.7k links, 52.8k tokens)" href="download.php?f=OpenSubtitles2011/fa-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Finnish' (4,712 aligned documents, 3.5M links, 49.0M tokens)" href="download.php?f=OpenSubtitles2011/fi-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-French' (8,355 aligned documents, 5.9M links, 95.4M tokens)" href="download.php?f=OpenSubtitles2011/fr-he.xml.gz">ces</a></td>
<td></td>
<th></th>
<th>he</th>
<td><a rel="nofollow" title="Hebrew-Croatian (sample file)" href="OpenSubtitles/v2011/he-hr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Hungarian (sample file)" href="OpenSubtitles/v2011/he-hu_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Indonesian (sample file)" href="OpenSubtitles/v2011/he-id_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Icelandic (sample file)" href="OpenSubtitles/v2011/he-is_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Italian (sample file)" href="OpenSubtitles/v2011/he-it_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Japanese (sample file)" href="OpenSubtitles/v2011/he-ja_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Georgian (sample file)" href="OpenSubtitles/v2011/he-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Korean (sample file)" href="OpenSubtitles/v2011/he-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Luxembourgish (sample file)" href="OpenSubtitles/v2011/he-lb_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Lithuanian (sample file)" href="OpenSubtitles/v2011/he-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Latvian (sample file)" href="OpenSubtitles/v2011/he-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Macedonian (sample file)" href="OpenSubtitles/v2011/he-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Malay (sample file)" href="OpenSubtitles/v2011/he-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Dutch (sample file)" href="OpenSubtitles/v2011/he-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Norwegian (sample file)" href="OpenSubtitles/v2011/he-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Polish (sample file)" href="OpenSubtitles/v2011/he-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles/v2011/he-pt_sample.html">view</a></td><th>he</th>
<td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="OpenSubtitles/v2011/he-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Romanian (sample file)" href="OpenSubtitles/v2011/he-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Russian (sample file)" href="OpenSubtitles/v2011/he-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-scc (sample file)" href="OpenSubtitles/v2011/he-scc_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-scr (sample file)" href="OpenSubtitles/v2011/he-scr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Sinhala (sample file)" href="OpenSubtitles/v2011/he-si_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovak (sample file)" href="OpenSubtitles/v2011/he-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Slovenian (sample file)" href="OpenSubtitles/v2011/he-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Albanian (sample file)" href="OpenSubtitles/v2011/he-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Swedish (sample file)" href="OpenSubtitles/v2011/he-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Thai (sample file)" href="OpenSubtitles/v2011/he-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Turkish (sample file)" href="OpenSubtitles/v2011/he-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Ukrainian (sample file)" href="OpenSubtitles/v2011/he-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hebrew-Vietnamese (sample file)" href="OpenSubtitles/v2011/he-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Chinese (sample file)" href="OpenSubtitles/v2011/he-zh_sample.html">view</a></td><th>he</th></tr>
<tr><th></th>
<th>ar</th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th>gl</th>
<th>he</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nl</th>
<th>no</th>
<th>oc</th>
<th>pl</th>
<th>pt</th>
<th></th>
<th>pt_br</th>
<th>ro</th>
<th>ru</th>
<th>scc</th>
<th>scr</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sv</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/hr.tar.gz">hr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Arabic' (3,240 aligned documents, 2.2M links, 32.5M tokens)" href="download.php?f=OpenSubtitles2011/ar-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bulgarian' (6,733 aligned documents, 5.5M links, 76.0M tokens)" href="download.php?f=OpenSubtitles2011/bg-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Bosnian' (1,401 aligned documents, 1.2M links, 16.0M tokens)" href="download.php?f=OpenSubtitles2011/bs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Catalan' (15 aligned documents, 16.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (6,927 aligned documents, 6.1M links, 81.0M tokens)" href="download.php?f=OpenSubtitles2011/cs-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Danish' (1,918 aligned documents, 1.9M links, 26.5M tokens)" href="download.php?f=OpenSubtitles2011/da-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (1,967 aligned documents, 1.6M links, 23.3M tokens)" href="download.php?f=OpenSubtitles2011/de-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (11,254 aligned documents, 10.2M links, 147.0M tokens)" href="download.php?f=OpenSubtitles2011/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Esperanto' (0.6k links, 10.0k tokens)" href="download.php?f=OpenSubtitles2011/eo-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (8,352 aligned documents, 7.1M links, 102.8M tokens)" href="download.php?f=OpenSubtitles2011/es-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Estonian' (2,099 aligned documents, 1.8M links, 24.2M tokens)" href="download.php?f=OpenSubtitles2011/et-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Persian' (2 aligned documents, 0.9k links, 20.2k tokens)" href="download.php?f=OpenSubtitles2011/fa-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Finnish' (3,943 aligned documents, 3.6M links, 44.1M tokens)" href="download.php?f=OpenSubtitles2011/fi-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (5,952 aligned documents, 5.1M links, 73.4M tokens)" href="download.php?f=OpenSubtitles2011/fr-hr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Hebrew' (5,064 aligned documents, 3.6M links, 53.9M tokens)" href="download.php?f=OpenSubtitles2011/he-hr.xml.gz">ces</a></td>
<th>hr</th>
<th></th>
<td><a rel="nofollow" title="Croatian-Hungarian (sample file)" href="OpenSubtitles/v2011/hr-hu_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Indonesian (sample file)" href="OpenSubtitles/v2011/hr-id_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Icelandic (sample file)" href="OpenSubtitles/v2011/hr-is_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="OpenSubtitles/v2011/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="OpenSubtitles/v2011/hr-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Korean (sample file)" href="OpenSubtitles/v2011/hr-ko_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Luxembourgish (sample file)" href="OpenSubtitles/v2011/hr-lb_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Lithuanian (sample file)" href="OpenSubtitles/v2011/hr-lt_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Latvian (sample file)" href="OpenSubtitles/v2011/hr-lv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Macedonian (sample file)" href="OpenSubtitles/v2011/hr-mk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Malay (sample file)" href="OpenSubtitles/v2011/hr-ms_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Dutch (sample file)" href="OpenSubtitles/v2011/hr-nl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Norwegian (sample file)" href="OpenSubtitles/v2011/hr-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Polish (sample file)" href="OpenSubtitles/v2011/hr-pl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles/v2011/hr-pt_sample.html">view</a></td><th>hr</th>
<td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="OpenSubtitles/v2011/hr-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Romanian (sample file)" href="OpenSubtitles/v2011/hr-ro_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="OpenSubtitles/v2011/hr-ru_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-scc (sample file)" href="OpenSubtitles/v2011/hr-scc_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-scr (sample file)" href="OpenSubtitles/v2011/hr-scr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Sinhala (sample file)" href="OpenSubtitles/v2011/hr-si_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovak (sample file)" href="OpenSubtitles/v2011/hr-sk_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Slovenian (sample file)" href="OpenSubtitles/v2011/hr-sl_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Albanian (sample file)" href="OpenSubtitles/v2011/hr-sq_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Swedish (sample file)" href="OpenSubtitles/v2011/hr-sv_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Thai (sample file)" href="OpenSubtitles/v2011/hr-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Turkish (sample file)" href="OpenSubtitles/v2011/hr-tr_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="OpenSubtitles/v2011/hr-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Croatian-Vietnamese (sample file)" href="OpenSubtitles/v2011/hr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Chinese (sample file)" href="OpenSubtitles/v2011/hr-zh_sample.html">view</a></td><th>hr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/hu.tar.gz">hu</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Arabic' (4,863 aligned documents, 3.5M links, 49.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (10,821 aligned documents, 8.8M links, 117.7M tokens)" href="download.php?f=OpenSubtitles2011/bg-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bosnian' (1,761 aligned documents, 1.5M links, 19.6M tokens)" href="download.php?f=OpenSubtitles2011/bs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Catalan' (23 aligned documents, 21.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (11,014 aligned documents, 9.6M links, 124.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Danish' (2,566 aligned documents, 2.7M links, 35.9M tokens)" href="download.php?f=OpenSubtitles2011/da-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (3,069 aligned documents, 2.5M links, 34.5M tokens)" href="download.php?f=OpenSubtitles2011/de-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (22,053 aligned documents, 19.9M links, 281.4M tokens)" href="download.php?f=OpenSubtitles2011/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Esperanto' (0.3k links, 3.7k tokens)" href="download.php?f=OpenSubtitles2011/eo-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (14,587 aligned documents, 12.6M links, 177.2M tokens)" href="download.php?f=OpenSubtitles2011/es-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Estonian' (2,993 aligned documents, 2.6M links, 33.6M tokens)" href="download.php?f=OpenSubtitles2011/et-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Persian' (2 aligned documents, 0.9k links, 20.4k tokens)" href="download.php?f=OpenSubtitles2011/fa-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (5,775 aligned documents, 5.3M links, 63.4M tokens)" href="download.php?f=OpenSubtitles2011/fi-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (11,074 aligned documents, 9.4M links, 132.7M tokens)" href="download.php?f=OpenSubtitles2011/fr-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Hebrew' (8,405 aligned documents, 6.0M links, 88.2M tokens)" href="download.php?f=OpenSubtitles2011/he-hu.xml.gz">ces</a></td>
<th>hu</th>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Croatian' (6,297 aligned documents, 5.5M links, 71.6M tokens)" href="download.php?f=OpenSubtitles2011/hr-hu.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Hungarian-Indonesian (sample file)" href="OpenSubtitles/v2011/hu-id_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Icelandic (sample file)" href="OpenSubtitles/v2011/hu-is_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="OpenSubtitles/v2011/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="OpenSubtitles/v2011/hu-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Korean (sample file)" href="OpenSubtitles/v2011/hu-ko_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Luxembourgish (sample file)" href="OpenSubtitles/v2011/hu-lb_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Lithuanian (sample file)" href="OpenSubtitles/v2011/hu-lt_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Latvian (sample file)" href="OpenSubtitles/v2011/hu-lv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Macedonian (sample file)" href="OpenSubtitles/v2011/hu-mk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Malay (sample file)" href="OpenSubtitles/v2011/hu-ms_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="OpenSubtitles/v2011/hu-nl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Norwegian (sample file)" href="OpenSubtitles/v2011/hu-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Polish (sample file)" href="OpenSubtitles/v2011/hu-pl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles/v2011/hu-pt_sample.html">view</a></td><th>hu</th>
<td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="OpenSubtitles/v2011/hu-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Romanian (sample file)" href="OpenSubtitles/v2011/hu-ro_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="OpenSubtitles/v2011/hu-ru_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-scc (sample file)" href="OpenSubtitles/v2011/hu-scc_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-scr (sample file)" href="OpenSubtitles/v2011/hu-scr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Sinhala (sample file)" href="OpenSubtitles/v2011/hu-si_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovak (sample file)" href="OpenSubtitles/v2011/hu-sk_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Slovenian (sample file)" href="OpenSubtitles/v2011/hu-sl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Albanian (sample file)" href="OpenSubtitles/v2011/hu-sq_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Swedish (sample file)" href="OpenSubtitles/v2011/hu-sv_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Thai (sample file)" href="OpenSubtitles/v2011/hu-th_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Tagalog (sample file)" href="OpenSubtitles/v2011/hu-tl_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Turkish (sample file)" href="OpenSubtitles/v2011/hu-tr_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="OpenSubtitles/v2011/hu-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Hungarian-Vietnamese (sample file)" href="OpenSubtitles/v2011/hu-vi_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Chinese (sample file)" href="OpenSubtitles/v2011/hu-zh_sample.html">view</a></td><th>hu</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/id.tar.gz">id</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Arabic' (455 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2011/ar-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bulgarian' (724 aligned documents, 0.7M links, 9.9M tokens)" href="download.php?f=OpenSubtitles2011/bg-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Bosnian' (146 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/bs-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Catalan' (5 aligned documents, 4.3k links, 57.8k tokens)" href="download.php?f=OpenSubtitles2011/ca-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Czech' (664 aligned documents, 0.7M links, 9.5M tokens)" href="download.php?f=OpenSubtitles2011/cs-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Danish' (311 aligned documents, 0.3M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2011/da-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-German' (136 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2011/de-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Greek' (670 aligned documents, 0.7M links, 9.2M tokens)" href="download.php?f=OpenSubtitles2011/el-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-English' (1,422 aligned documents, 1.6M links, 22.0M tokens)" href="download.php?f=OpenSubtitles2011/en-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Spanish' (936 aligned documents, 1.0M links, 13.8M tokens)" href="download.php?f=OpenSubtitles2011/es-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Estonian' (323 aligned documents, 0.4M links, 4.9M tokens)" href="download.php?f=OpenSubtitles2011/et-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Persian' (5 aligned documents, 2.2k links, 58.0k tokens)" href="download.php?f=OpenSubtitles2011/fa-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Finnish' (568 aligned documents, 0.6M links, 7.6M tokens)" href="download.php?f=OpenSubtitles2011/fi-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-French' (621 aligned documents, 0.7M links, 9.6M tokens)" href="download.php?f=OpenSubtitles2011/fr-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hebrew' (468 aligned documents, 0.4M links, 6.6M tokens)" href="download.php?f=OpenSubtitles2011/he-id.xml.gz">ces</a></td>
<th>id</th>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Croatian' (509 aligned documents, 0.5M links, 7.0M tokens)" href="download.php?f=OpenSubtitles2011/hr-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hungarian' (753 aligned documents, 0.8M links, 10.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-id.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Indonesian-Icelandic (sample file)" href="OpenSubtitles/v2011/id-is_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Italian (sample file)" href="OpenSubtitles/v2011/id-it_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Japanese (sample file)" href="OpenSubtitles/v2011/id-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Korean (sample file)" href="OpenSubtitles/v2011/id-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Lithuanian (sample file)" href="OpenSubtitles/v2011/id-lt_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Latvian (sample file)" href="OpenSubtitles/v2011/id-lv_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Macedonian (sample file)" href="OpenSubtitles/v2011/id-mk_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Malay (sample file)" href="OpenSubtitles/v2011/id-ms_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Dutch (sample file)" href="OpenSubtitles/v2011/id-nl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Norwegian (sample file)" href="OpenSubtitles/v2011/id-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Polish (sample file)" href="OpenSubtitles/v2011/id-pl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles/v2011/id-pt_sample.html">view</a></td><th>id</th>
<td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="OpenSubtitles/v2011/id-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Romanian (sample file)" href="OpenSubtitles/v2011/id-ro_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Russian (sample file)" href="OpenSubtitles/v2011/id-ru_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-scc (sample file)" href="OpenSubtitles/v2011/id-scc_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-scr (sample file)" href="OpenSubtitles/v2011/id-scr_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Sinhala (sample file)" href="OpenSubtitles/v2011/id-si_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Slovak (sample file)" href="OpenSubtitles/v2011/id-sk_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Slovenian (sample file)" href="OpenSubtitles/v2011/id-sl_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Albanian (sample file)" href="OpenSubtitles/v2011/id-sq_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Swedish (sample file)" href="OpenSubtitles/v2011/id-sv_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Thai (sample file)" href="OpenSubtitles/v2011/id-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Turkish (sample file)" href="OpenSubtitles/v2011/id-tr_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Ukrainian (sample file)" href="OpenSubtitles/v2011/id-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Vietnamese (sample file)" href="OpenSubtitles/v2011/id-vi_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Chinese (sample file)" href="OpenSubtitles/v2011/id-zh_sample.html">view</a></td><th>id</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/is.tar.gz">is</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Arabic' (56 aligned documents, 64.5k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2011/ar-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bulgarian' (171 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2011/bg-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Bosnian' (26 aligned documents, 34.5k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/bs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Catalan' (0.8k links, 10.1k tokens)" href="download.php?f=OpenSubtitles2011/ca-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Czech' (288 aligned documents, 0.4M links, 4.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Danish' (233 aligned documents, 0.2M links, 3.4M tokens)" href="download.php?f=OpenSubtitles2011/da-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (232 aligned documents, 0.3M links, 3.7M tokens)" href="download.php?f=OpenSubtitles2011/de-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Greek' (194 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/el-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (428 aligned documents, 0.5M links, 7.7M tokens)" href="download.php?f=OpenSubtitles2011/en-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (254 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2011/es-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Estonian' (67 aligned documents, 86.9k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/et-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Finnish' (346 aligned documents, 0.4M links, 4.7M tokens)" href="download.php?f=OpenSubtitles2011/fi-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (233 aligned documents, 0.3M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2011/fr-is.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hebrew' (104 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/he-is.xml.gz">ces</a></td>
<th>is</th>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Croatian' (188 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2011/hr-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Hungarian' (242 aligned documents, 0.3M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2011/hu-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Indonesian' (14 aligned documents, 15.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/id-is.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="OpenSubtitles/v2011/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Japanese (sample file)" href="OpenSubtitles/v2011/is-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Lithuanian (sample file)" href="OpenSubtitles/v2011/is-lt_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Latvian (sample file)" href="OpenSubtitles/v2011/is-lv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Macedonian (sample file)" href="OpenSubtitles/v2011/is-mk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Malay (sample file)" href="OpenSubtitles/v2011/is-ms_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Dutch (sample file)" href="OpenSubtitles/v2011/is-nl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Norwegian (sample file)" href="OpenSubtitles/v2011/is-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Polish (sample file)" href="OpenSubtitles/v2011/is-pl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles/v2011/is-pt_sample.html">view</a></td><th>is</th>
<td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="OpenSubtitles/v2011/is-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Romanian (sample file)" href="OpenSubtitles/v2011/is-ro_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="OpenSubtitles/v2011/is-ru_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-scc (sample file)" href="OpenSubtitles/v2011/is-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Sinhala (sample file)" href="OpenSubtitles/v2011/is-si_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovak (sample file)" href="OpenSubtitles/v2011/is-sk_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Slovenian (sample file)" href="OpenSubtitles/v2011/is-sl_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Albanian (sample file)" href="OpenSubtitles/v2011/is-sq_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Swedish (sample file)" href="OpenSubtitles/v2011/is-sv_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Thai (sample file)" href="OpenSubtitles/v2011/is-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Icelandic-Turkish (sample file)" href="OpenSubtitles/v2011/is-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Vietnamese (sample file)" href="OpenSubtitles/v2011/is-vi_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Chinese (sample file)" href="OpenSubtitles/v2011/is-zh_sample.html">view</a></td><th>is</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/it.tar.gz">it</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (2,611 aligned documents, 1.7M links, 26.9M tokens)" href="download.php?f=OpenSubtitles2011/ar-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (6,147 aligned documents, 4.5M links, 68.7M tokens)" href="download.php?f=OpenSubtitles2011/bg-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (897 aligned documents, 0.7M links, 10.4M tokens)" href="download.php?f=OpenSubtitles2011/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (20 aligned documents, 17.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (5,588 aligned documents, 4.5M links, 65.8M tokens)" href="download.php?f=OpenSubtitles2011/cs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (1,295 aligned documents, 1.3M links, 18.7M tokens)" href="download.php?f=OpenSubtitles2011/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (2,698 aligned documents, 2.3M links, 34.2M tokens)" href="download.php?f=OpenSubtitles2011/de-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (6,392 aligned documents, 4.8M links, 76.2M tokens)" href="download.php?f=OpenSubtitles2011/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (11,663 aligned documents, 9.7M links, 151.0M tokens)" href="download.php?f=OpenSubtitles2011/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Esperanto' (5 aligned documents, 3.7k links, 61.6k tokens)" href="download.php?f=OpenSubtitles2011/eo-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (8,112 aligned documents, 6.4M links, 100.8M tokens)" href="download.php?f=OpenSubtitles2011/es-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Estonian' (1,527 aligned documents, 1.2M links, 17.6M tokens)" href="download.php?f=OpenSubtitles2011/et-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Persian' (2 aligned documents, 0.7k links, 16.6k tokens)" href="download.php?f=OpenSubtitles2011/fa-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (3,067 aligned documents, 2.7M links, 35.4M tokens)" href="download.php?f=OpenSubtitles2011/fi-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (7,309 aligned documents, 5.8M links, 89.9M tokens)" href="download.php?f=OpenSubtitles2011/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Galician' (5 aligned documents, 3.8k links, 52.7k tokens)" href="download.php?f=OpenSubtitles2011/gl-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hebrew' (4,436 aligned documents, 3.0M links, 48.5M tokens)" href="download.php?f=OpenSubtitles2011/he-it.xml.gz">ces</a></td>
<th>it</th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (3,349 aligned documents, 2.8M links, 39.9M tokens)" href="download.php?f=OpenSubtitles2011/hr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (6,494 aligned documents, 5.1M links, 72.7M tokens)" href="download.php?f=OpenSubtitles2011/hu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Indonesian' (313 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2011/id-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (222 aligned documents, 0.3M links, 3.7M tokens)" href="download.php?f=OpenSubtitles2011/is-it.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Italian-Japanese (sample file)" href="OpenSubtitles/v2011/it-ja_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="OpenSubtitles/v2011/it-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="OpenSubtitles/v2011/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="OpenSubtitles/v2011/it-lv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Macedonian (sample file)" href="OpenSubtitles/v2011/it-mk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Malay (sample file)" href="OpenSubtitles/v2011/it-ms_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="OpenSubtitles/v2011/it-nl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Norwegian (sample file)" href="OpenSubtitles/v2011/it-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="OpenSubtitles/v2011/it-pl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles/v2011/it-pt_sample.html">view</a></td><th>it</th>
<td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="OpenSubtitles/v2011/it-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="OpenSubtitles/v2011/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="OpenSubtitles/v2011/it-ru_sample.html">view</a></td><td><a rel="nofollow" title="Italian-scc (sample file)" href="OpenSubtitles/v2011/it-scc_sample.html">view</a></td><td><a rel="nofollow" title="Italian-scr (sample file)" href="OpenSubtitles/v2011/it-scr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Sinhala (sample file)" href="OpenSubtitles/v2011/it-si_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovak (sample file)" href="OpenSubtitles/v2011/it-sk_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="OpenSubtitles/v2011/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="OpenSubtitles/v2011/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="OpenSubtitles/v2011/it-sv_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Thai (sample file)" href="OpenSubtitles/v2011/it-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Turkish (sample file)" href="OpenSubtitles/v2011/it-tr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="OpenSubtitles/v2011/it-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Vietnamese (sample file)" href="OpenSubtitles/v2011/it-vi_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Chinese (sample file)" href="OpenSubtitles/v2011/it-zh_sample.html">view</a></td><th>it</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ja.tar.gz">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (57 aligned documents, 41.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ar-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (98 aligned documents, 65.3k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bosnian' (33 aligned documents, 22.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/bs-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (94 aligned documents, 70.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (43 aligned documents, 33.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (29 aligned documents, 17.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (110 aligned documents, 74.3k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (170 aligned documents, 0.1M links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/en-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (111 aligned documents, 78.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (51 aligned documents, 36.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/et-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (79 aligned documents, 52.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/fi-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (94 aligned documents, 67.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/fr-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hebrew' (71 aligned documents, 50.0k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/he-ja.xml.gz">ces</a></td>
<th>ja</th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (66 aligned documents, 47.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/hr-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (97 aligned documents, 67.2k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/hu-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Indonesian' (29 aligned documents, 24.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/id-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Icelandic' (0.8k links, 6.0k tokens)" href="download.php?f=OpenSubtitles2011/is-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (54 aligned documents, 37.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/it-ja.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="OpenSubtitles/v2011/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="OpenSubtitles/v2011/ja-lv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Macedonian (sample file)" href="OpenSubtitles/v2011/ja-mk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Malay (sample file)" href="OpenSubtitles/v2011/ja-ms_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="OpenSubtitles/v2011/ja-nl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Norwegian (sample file)" href="OpenSubtitles/v2011/ja-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="OpenSubtitles/v2011/ja-pl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles/v2011/ja-pt_sample.html">view</a></td><th>ja</th>
<td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="OpenSubtitles/v2011/ja-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="OpenSubtitles/v2011/ja-ro_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="OpenSubtitles/v2011/ja-ru_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-scc (sample file)" href="OpenSubtitles/v2011/ja-scc_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Slovak (sample file)" href="OpenSubtitles/v2011/ja-sk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="OpenSubtitles/v2011/ja-sl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Albanian (sample file)" href="OpenSubtitles/v2011/ja-sq_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="OpenSubtitles/v2011/ja-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="OpenSubtitles/v2011/ja-tr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ukrainian (sample file)" href="OpenSubtitles/v2011/ja-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Vietnamese (sample file)" href="OpenSubtitles/v2011/ja-vi_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Chinese (sample file)" href="OpenSubtitles/v2011/ja-zh_sample.html">view</a></td><th>ja</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ka.tar.gz">ka</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Arabic' (0.6k links, 9.8k tokens)" href="download.php?f=OpenSubtitles2011/ar-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Bulgarian' (2 aligned documents, 1.6k links, 23.1k tokens)" href="download.php?f=OpenSubtitles2011/bg-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Bosnian' (1.3k links, 17.3k tokens)" href="download.php?f=OpenSubtitles2011/bs-ka.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Czech' (2 aligned documents, 1.9k links, 26.6k tokens)" href="download.php?f=OpenSubtitles2011/cs-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Danish' (1.2k links, 17.1k tokens)" href="download.php?f=OpenSubtitles2011/da-ka.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Greek' (2 aligned documents, 1.8k links, 30.2k tokens)" href="download.php?f=OpenSubtitles2011/el-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-English' (4 aligned documents, 1.5k links, 36.4k tokens)" href="download.php?f=OpenSubtitles2011/en-ka.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Spanish' (1.3k links, 18.0k tokens)" href="download.php?f=OpenSubtitles2011/es-ka.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Persian' (0.3k links, 11.9k tokens)" href="download.php?f=OpenSubtitles2011/fa-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Finnish' (2 aligned documents, 1.3k links, 20.7k tokens)" href="download.php?f=OpenSubtitles2011/fi-ka.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-French' (1.2k links, 17.5k tokens)" href="download.php?f=OpenSubtitles2011/fr-ka.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Hebrew' (2 aligned documents, 1.8k links, 26.6k tokens)" href="download.php?f=OpenSubtitles2011/he-ka.xml.gz">ces</a></td>
<th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Georgian-Dutch (sample file)" href="OpenSubtitles/v2011/ka-nl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Norwegian (sample file)" href="OpenSubtitles/v2011/ka-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Georgian-Polish (sample file)" href="OpenSubtitles/v2011/ka-pl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Portuguese (sample file)" href="OpenSubtitles/v2011/ka-pt_sample.html">view</a></td><th>ka</th>
<td></td><td><a rel="nofollow" title="Georgian-Romanian (sample file)" href="OpenSubtitles/v2011/ka-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Georgian-scc (sample file)" href="OpenSubtitles/v2011/ka-scc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Georgian-Slovenian (sample file)" href="OpenSubtitles/v2011/ka-sl_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Albanian (sample file)" href="OpenSubtitles/v2011/ka-sq_sample.html">view</a></td><td><a rel="nofollow" title="Georgian-Swedish (sample file)" href="OpenSubtitles/v2011/ka-sv_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Georgian-Ukrainian (sample file)" href="OpenSubtitles/v2011/ka-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Georgian-Vietnamese (sample file)" href="OpenSubtitles/v2011/ka-vi_sample.html">view</a></td><td></td><th>ka</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/kk.tar.gz">kk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (1.2k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2011/en-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Portuguese (sample file)" href="OpenSubtitles/v2011/kk-pt_sample.html">view</a></td><th>kk</th>
<td></td><td><a rel="nofollow" title="Kazakh-Romanian (sample file)" href="OpenSubtitles/v2011/kk-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ko.tar.gz">ko</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Arabic' (4 aligned documents, 3.2k links, 41.8k tokens)" href="download.php?f=OpenSubtitles2011/ar-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bulgarian' (3 aligned documents, 2.7k links, 28.7k tokens)" href="download.php?f=OpenSubtitles2011/bg-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Bosnian' (0.5k links, 6.0k tokens)" href="download.php?f=OpenSubtitles2011/bs-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Catalan' (0.6k links, 12.9k tokens)" href="download.php?f=OpenSubtitles2011/ca-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Czech' (3 aligned documents, 1.7k links, 25.4k tokens)" href="download.php?f=OpenSubtitles2011/cs-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (3 aligned documents, 2.6k links, 45.8k tokens)" href="download.php?f=OpenSubtitles2011/de-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Greek' (4 aligned documents, 3.1k links, 54.3k tokens)" href="download.php?f=OpenSubtitles2011/el-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (8 aligned documents, 6.5k links, 97.7k tokens)" href="download.php?f=OpenSubtitles2011/en-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (4 aligned documents, 2.3k links, 34.2k tokens)" href="download.php?f=OpenSubtitles2011/es-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (3 aligned documents, 2.8k links, 29.2k tokens)" href="download.php?f=OpenSubtitles2011/fi-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (3 aligned documents, 4.4k links, 69.8k tokens)" href="download.php?f=OpenSubtitles2011/fr-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hebrew' (2 aligned documents, 1.5k links, 22.1k tokens)" href="download.php?f=OpenSubtitles2011/he-ko.xml.gz">ces</a></td>
<th>ko</th>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Croatian' (0.9k links, 14.9k tokens)" href="download.php?f=OpenSubtitles2011/hr-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Hungarian' (3 aligned documents, 2.5k links, 32.1k tokens)" href="download.php?f=OpenSubtitles2011/hu-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Indonesian' (0.6k links, 11.9k tokens)" href="download.php?f=OpenSubtitles2011/id-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (2 aligned documents, 1.9k links, 32.1k tokens)" href="download.php?f=OpenSubtitles2011/it-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="OpenSubtitles/v2011/ko-nl_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="OpenSubtitles/v2011/ko-pl_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles/v2011/ko-pt_sample.html">view</a></td><th>ko</th>
<td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="OpenSubtitles/v2011/ko-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="OpenSubtitles/v2011/ko-ro_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-scc (sample file)" href="OpenSubtitles/v2011/ko-scc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Slovenian (sample file)" href="OpenSubtitles/v2011/ko-sl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Turkish (sample file)" href="OpenSubtitles/v2011/ko-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>ko</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/lb.tar.gz">lb</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Arabic' (0.9k links, 12.0k tokens)" href="download.php?f=OpenSubtitles2011/ar-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Bulgarian' (2 aligned documents, 1.8k links, 23.7k tokens)" href="download.php?f=OpenSubtitles2011/bg-lb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Czech' (2 aligned documents, 2.0k links, 26.1k tokens)" href="download.php?f=OpenSubtitles2011/cs-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Danish' (1.0k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2011/da-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-German' (1.0k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2011/de-lb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-English' (2 aligned documents, 1.9k links, 25.5k tokens)" href="download.php?f=OpenSubtitles2011/en-lb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Spanish' (2 aligned documents, 1.8k links, 24.9k tokens)" href="download.php?f=OpenSubtitles2011/es-lb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Finnish' (0.8k links, 9.2k tokens)" href="download.php?f=OpenSubtitles2011/fi-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-French' (3 aligned documents, 2.9k links, 38.8k tokens)" href="download.php?f=OpenSubtitles2011/fr-lb.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Hebrew' (0.9k links, 13.1k tokens)" href="download.php?f=OpenSubtitles2011/he-lb.xml.gz">ces</a></td>
<th>lb</th>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Croatian' (2 aligned documents, 1.8k links, 22.2k tokens)" href="download.php?f=OpenSubtitles2011/hr-lb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Luxembourgish-Hungarian' (0.8k links, 9.8k tokens)" href="download.php?f=OpenSubtitles2011/hu-lb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Norwegian (sample file)" href="OpenSubtitles/v2011/lb-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Luxembourgish-Polish (sample file)" href="OpenSubtitles/v2011/lb-pl_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-Portuguese (sample file)" href="OpenSubtitles/v2011/lb-pt_sample.html">view</a></td><th>lb</th>
<td><a rel="nofollow" title="Luxembourgish-Portuguese (sample file)" href="OpenSubtitles/v2011/lb-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-Romanian (sample file)" href="OpenSubtitles/v2011/lb-ro_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-Russian (sample file)" href="OpenSubtitles/v2011/lb-ru_sample.html">view</a></td><td><a rel="nofollow" title="Luxembourgish-scc (sample file)" href="OpenSubtitles/v2011/lb-scc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Slovenian (sample file)" href="OpenSubtitles/v2011/lb-sl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Luxembourgish-Turkish (sample file)" href="OpenSubtitles/v2011/lb-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>lb</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/lt.tar.gz">lt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Arabic' (81 aligned documents, 72.4k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/ar-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bulgarian' (119 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2011/bg-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Bosnian' (37 aligned documents, 32.7k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/bs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Catalan' (4 aligned documents, 3.2k links, 41.5k tokens)" href="download.php?f=OpenSubtitles2011/ca-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Czech' (146 aligned documents, 0.2M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2011/cs-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Danish' (76 aligned documents, 76.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/da-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (54 aligned documents, 49.0k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/de-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Greek' (115 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/el-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (250 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2011/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Esperanto' (0.3k links, 3.6k tokens)" href="download.php?f=OpenSubtitles2011/eo-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (186 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2011/es-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Estonian' (79 aligned documents, 77.2k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/et-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Persian' (0.8k links, 24.3k tokens)" href="download.php?f=OpenSubtitles2011/fa-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Finnish' (124 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2011/fi-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (129 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/fr-lt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hebrew' (114 aligned documents, 94.9k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2011/he-lt.xml.gz">ces</a></td>
<th>lt</th>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Croatian' (89 aligned documents, 92.5k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/hr-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Hungarian' (124 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/hu-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Indonesian' (26 aligned documents, 24.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/id-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Icelandic' (5 aligned documents, 5.8k links, 72.8k tokens)" href="download.php?f=OpenSubtitles2011/is-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (47 aligned documents, 50.5k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (13 aligned documents, 8.4k links, 58.0k tokens)" href="download.php?f=OpenSubtitles2011/ja-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Lithuanian-Latvian (sample file)" href="OpenSubtitles/v2011/lt-lv_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Macedonian (sample file)" href="OpenSubtitles/v2011/lt-mk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Malay (sample file)" href="OpenSubtitles/v2011/lt-ms_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Dutch (sample file)" href="OpenSubtitles/v2011/lt-nl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Norwegian (sample file)" href="OpenSubtitles/v2011/lt-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Polish (sample file)" href="OpenSubtitles/v2011/lt-pl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles/v2011/lt-pt_sample.html">view</a></td><th>lt</th>
<td><a rel="nofollow" title="Lithuanian-Portuguese (sample file)" href="OpenSubtitles/v2011/lt-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Romanian (sample file)" href="OpenSubtitles/v2011/lt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="OpenSubtitles/v2011/lt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-scc (sample file)" href="OpenSubtitles/v2011/lt-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Lithuanian-Sinhala (sample file)" href="OpenSubtitles/v2011/lt-si_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovak (sample file)" href="OpenSubtitles/v2011/lt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Slovenian (sample file)" href="OpenSubtitles/v2011/lt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Albanian (sample file)" href="OpenSubtitles/v2011/lt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Swedish (sample file)" href="OpenSubtitles/v2011/lt-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Turkish (sample file)" href="OpenSubtitles/v2011/lt-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Vietnamese (sample file)" href="OpenSubtitles/v2011/lt-vi_sample.html">view</a></td><td><a rel="nofollow" title="Lithuanian-Chinese (sample file)" href="OpenSubtitles/v2011/lt-zh_sample.html">view</a></td><th>lt</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/lv.tar.gz">lv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Arabic' (19 aligned documents, 19.1k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ar-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bulgarian' (34 aligned documents, 41.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Bosnian' (9 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/bs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Catalan' (2 aligned documents, 1.7k links, 20.0k tokens)" href="download.php?f=OpenSubtitles2011/ca-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Czech' (42 aligned documents, 50.8k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Danish' (30 aligned documents, 34.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/da-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (16 aligned documents, 17.3k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/de-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Greek' (31 aligned documents, 36.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/el-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (71 aligned documents, 83.5k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/en-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Spanish' (55 aligned documents, 65.1k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2011/es-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Estonian' (32 aligned documents, 36.2k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/et-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Finnish' (29 aligned documents, 35.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/fi-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (45 aligned documents, 51.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/fr-lv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hebrew' (33 aligned documents, 29.4k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/he-lv.xml.gz">ces</a></td>
<th>lv</th>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Croatian' (32 aligned documents, 38.4k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/hr-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Hungarian' (37 aligned documents, 45.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/hu-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Indonesian' (5 aligned documents, 7.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/id-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Icelandic' (2 aligned documents, 1.9k links, 23.3k tokens)" href="download.php?f=OpenSubtitles2011/is-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (14 aligned documents, 14.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (1.4k links, 9.3k tokens)" href="download.php?f=OpenSubtitles2011/ja-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Lithuanian' (13 aligned documents, 13.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/lt-lv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Latvian-Macedonian (sample file)" href="OpenSubtitles/v2011/lv-mk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Malay (sample file)" href="OpenSubtitles/v2011/lv-ms_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Dutch (sample file)" href="OpenSubtitles/v2011/lv-nl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Norwegian (sample file)" href="OpenSubtitles/v2011/lv-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Polish (sample file)" href="OpenSubtitles/v2011/lv-pl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles/v2011/lv-pt_sample.html">view</a></td><th>lv</th>
<td><a rel="nofollow" title="Latvian-Portuguese (sample file)" href="OpenSubtitles/v2011/lv-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Romanian (sample file)" href="OpenSubtitles/v2011/lv-ro_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="OpenSubtitles/v2011/lv-ru_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-scc (sample file)" href="OpenSubtitles/v2011/lv-scc_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Slovak (sample file)" href="OpenSubtitles/v2011/lv-sk_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Slovenian (sample file)" href="OpenSubtitles/v2011/lv-sl_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Albanian (sample file)" href="OpenSubtitles/v2011/lv-sq_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Swedish (sample file)" href="OpenSubtitles/v2011/lv-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Turkish (sample file)" href="OpenSubtitles/v2011/lv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Ukrainian (sample file)" href="OpenSubtitles/v2011/lv-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Latvian-Vietnamese (sample file)" href="OpenSubtitles/v2011/lv-vi_sample.html">view</a></td><td><a rel="nofollow" title="Latvian-Chinese (sample file)" href="OpenSubtitles/v2011/lv-zh_sample.html">view</a></td><th>lv</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/mk.tar.gz">mk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Arabic' (90 aligned documents, 74.7k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/ar-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bulgarian' (191 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Bosnian' (24 aligned documents, 21.8k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/bs-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Czech' (173 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Danish' (90 aligned documents, 97.5k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/da-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-German' (44 aligned documents, 49.7k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/de-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Greek' (152 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/el-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-English' (248 aligned documents, 0.3M links, 3.7M tokens)" href="download.php?f=OpenSubtitles2011/en-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Spanish' (194 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2011/es-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Estonian' (81 aligned documents, 84.8k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/et-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Finnish' (133 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/fi-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-French' (129 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/fr-mk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hebrew' (129 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2011/he-mk.xml.gz">ces</a></td>
<th>mk</th>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Croatian' (149 aligned documents, 0.2M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/hr-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Hungarian' (136 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/hu-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Indonesian' (25 aligned documents, 21.0k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/id-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Icelandic' (8 aligned documents, 9.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/is-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Italian' (74 aligned documents, 73.7k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/it-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Japanese' (5 aligned documents, 2.9k links, 23.4k tokens)" href="download.php?f=OpenSubtitles2011/ja-mk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Lithuanian' (7 aligned documents, 6.9k links, 89.4k tokens)" href="download.php?f=OpenSubtitles2011/lt-mk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Macedonian-Latvian' (0.8k links, 9.4k tokens)" href="download.php?f=OpenSubtitles2011/lv-mk.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Macedonian-Malay (sample file)" href="OpenSubtitles/v2011/mk-ms_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Dutch (sample file)" href="OpenSubtitles/v2011/mk-nl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Norwegian (sample file)" href="OpenSubtitles/v2011/mk-no_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/mk-oc_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Polish (sample file)" href="OpenSubtitles/v2011/mk-pl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles/v2011/mk-pt_sample.html">view</a></td><th>mk</th>
<td><a rel="nofollow" title="Macedonian-Portuguese (sample file)" href="OpenSubtitles/v2011/mk-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Romanian (sample file)" href="OpenSubtitles/v2011/mk-ro_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Russian (sample file)" href="OpenSubtitles/v2011/mk-ru_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-scc (sample file)" href="OpenSubtitles/v2011/mk-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Sinhala (sample file)" href="OpenSubtitles/v2011/mk-si_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovak (sample file)" href="OpenSubtitles/v2011/mk-sk_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Slovenian (sample file)" href="OpenSubtitles/v2011/mk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Albanian (sample file)" href="OpenSubtitles/v2011/mk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Swedish (sample file)" href="OpenSubtitles/v2011/mk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Thai (sample file)" href="OpenSubtitles/v2011/mk-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Turkish (sample file)" href="OpenSubtitles/v2011/mk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Ukrainian (sample file)" href="OpenSubtitles/v2011/mk-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Macedonian-Vietnamese (sample file)" href="OpenSubtitles/v2011/mk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Macedonian-Chinese (sample file)" href="OpenSubtitles/v2011/mk-zh_sample.html">view</a></td><th>mk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ms.tar.gz">ms</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Arabic' (101 aligned documents, 88.2k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/ar-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bulgarian' (168 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/bg-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Bosnian' (43 aligned documents, 43.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/bs-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Czech' (157 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/cs-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Danish' (79 aligned documents, 84.6k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/da-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-German' (40 aligned documents, 33.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/de-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Greek' (158 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/el-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-English' (300 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2011/en-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Spanish' (183 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/es-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Estonian' (92 aligned documents, 92.7k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/et-ms.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Finnish' (144 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2011/fi-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-French' (138 aligned documents, 0.1M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/fr-ms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hebrew' (108 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/he-ms.xml.gz">ces</a></td>
<th>ms</th>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Croatian' (100 aligned documents, 0.1M links, 1.4M tokens)" href="download.php?f=OpenSubtitles2011/hr-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Hungarian' (168 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Indonesian' (123 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/id-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Icelandic' (2 aligned documents, 2.4k links, 36.2k tokens)" href="download.php?f=OpenSubtitles2011/is-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Italian' (79 aligned documents, 73.2k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/it-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Japanese' (6 aligned documents, 3.6k links, 26.4k tokens)" href="download.php?f=OpenSubtitles2011/ja-ms.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Lithuanian' (11 aligned documents, 10.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/lt-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Latvian' (1.0k links, 11.9k tokens)" href="download.php?f=OpenSubtitles2011/lv-ms.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Malay-Macedonian' (12 aligned documents, 11.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/mk-ms.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Malay-Dutch (sample file)" href="OpenSubtitles/v2011/ms-nl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Norwegian (sample file)" href="OpenSubtitles/v2011/ms-no_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malay-Polish (sample file)" href="OpenSubtitles/v2011/ms-pl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles/v2011/ms-pt_sample.html">view</a></td><th>ms</th>
<td><a rel="nofollow" title="Malay-Portuguese (sample file)" href="OpenSubtitles/v2011/ms-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Romanian (sample file)" href="OpenSubtitles/v2011/ms-ro_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Russian (sample file)" href="OpenSubtitles/v2011/ms-ru_sample.html">view</a></td><td><a rel="nofollow" title="Malay-scc (sample file)" href="OpenSubtitles/v2011/ms-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malay-Sinhala (sample file)" href="OpenSubtitles/v2011/ms-si_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovak (sample file)" href="OpenSubtitles/v2011/ms-sk_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Slovenian (sample file)" href="OpenSubtitles/v2011/ms-sl_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Albanian (sample file)" href="OpenSubtitles/v2011/ms-sq_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Swedish (sample file)" href="OpenSubtitles/v2011/ms-sv_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Thai (sample file)" href="OpenSubtitles/v2011/ms-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malay-Turkish (sample file)" href="OpenSubtitles/v2011/ms-tr_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Ukrainian (sample file)" href="OpenSubtitles/v2011/ms-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Malay-Vietnamese (sample file)" href="OpenSubtitles/v2011/ms-vi_sample.html">view</a></td><td><a rel="nofollow" title="Malay-Chinese (sample file)" href="OpenSubtitles/v2011/ms-zh_sample.html">view</a></td><th>ms</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/nl.tar.gz">nl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Arabic' (5,386 aligned documents, 3.9M links, 58.8M tokens)" href="download.php?f=OpenSubtitles2011/ar-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (11,964 aligned documents, 9.8M links, 142.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bosnian' (2,040 aligned documents, 1.6M links, 23.8M tokens)" href="download.php?f=OpenSubtitles2011/bs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Catalan' (30 aligned documents, 26.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ca-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (12,584 aligned documents, 11.2M links, 158.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (3,879 aligned documents, 3.7M links, 54.8M tokens)" href="download.php?f=OpenSubtitles2011/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (3,647 aligned documents, 3.0M links, 45.5M tokens)" href="download.php?f=OpenSubtitles2011/de-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (13,015 aligned documents, 10.5M links, 161.1M tokens)" href="download.php?f=OpenSubtitles2011/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (25,362 aligned documents, 23.8M links, 363.1M tokens)" href="download.php?f=OpenSubtitles2011/en-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (17,379 aligned documents, 15.2M links, 232.6M tokens)" href="download.php?f=OpenSubtitles2011/es-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Estonian' (3,447 aligned documents, 2.9M links, 41.1M tokens)" href="download.php?f=OpenSubtitles2011/et-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Persian' (3 aligned documents, 1.7k links, 46.2k tokens)" href="download.php?f=OpenSubtitles2011/fa-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (7,931 aligned documents, 7.0M links, 92.9M tokens)" href="download.php?f=OpenSubtitles2011/fi-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (12,824 aligned documents, 11.0M links, 168.7M tokens)" href="download.php?f=OpenSubtitles2011/fr-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hebrew' (9,684 aligned documents, 6.9M links, 110.1M tokens)" href="download.php?f=OpenSubtitles2011/he-nl.xml.gz">ces</a></td>
<th>nl</th>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Croatian' (7,889 aligned documents, 6.7M links, 95.4M tokens)" href="download.php?f=OpenSubtitles2011/hr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (12,722 aligned documents, 11.2M links, 155.5M tokens)" href="download.php?f=OpenSubtitles2011/hu-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Indonesian' (875 aligned documents, 0.9M links, 12.8M tokens)" href="download.php?f=OpenSubtitles2011/id-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Icelandic' (300 aligned documents, 0.3M links, 4.9M tokens)" href="download.php?f=OpenSubtitles2011/is-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (6,740 aligned documents, 5.4M links, 83.0M tokens)" href="download.php?f=OpenSubtitles2011/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (115 aligned documents, 79.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/ja-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Georgian' (0.7k links, 10.8k tokens)" href="download.php?f=OpenSubtitles2011/ka-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (0.5k links, 6.5k tokens)" href="download.php?f=OpenSubtitles2011/ko-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Lithuanian' (147 aligned documents, 0.1M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/lt-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latvian' (49 aligned documents, 53.7k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/lv-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Macedonian' (172 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2011/mk-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Malay' (203 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2011/ms-nl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Dutch-Norwegian (sample file)" href="OpenSubtitles/v2011/nl-no_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Occitan (post 1500) (sample file)" href="OpenSubtitles/v2011/nl-oc_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="OpenSubtitles/v2011/nl-pl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles/v2011/nl-pt_sample.html">view</a></td><th>nl</th>
<td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="OpenSubtitles/v2011/nl-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="OpenSubtitles/v2011/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="OpenSubtitles/v2011/nl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-scc (sample file)" href="OpenSubtitles/v2011/nl-scc_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-scr (sample file)" href="OpenSubtitles/v2011/nl-scr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Sinhala (sample file)" href="OpenSubtitles/v2011/nl-si_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovak (sample file)" href="OpenSubtitles/v2011/nl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Slovenian (sample file)" href="OpenSubtitles/v2011/nl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Albanian (sample file)" href="OpenSubtitles/v2011/nl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Swedish (sample file)" href="OpenSubtitles/v2011/nl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Thai (sample file)" href="OpenSubtitles/v2011/nl-th_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Tagalog (sample file)" href="OpenSubtitles/v2011/nl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Turkish (sample file)" href="OpenSubtitles/v2011/nl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="OpenSubtitles/v2011/nl-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Dutch-Vietnamese (sample file)" href="OpenSubtitles/v2011/nl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Chinese (sample file)" href="OpenSubtitles/v2011/nl-zh_sample.html">view</a></td><th>nl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/no.tar.gz">no</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Arabic' (651 aligned documents, 0.6M links, 8.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Bulgarian' (1,364 aligned documents, 1.4M links, 18.7M tokens)" href="download.php?f=OpenSubtitles2011/bg-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Bosnian' (276 aligned documents, 0.3M links, 3.5M tokens)" href="download.php?f=OpenSubtitles2011/bs-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Catalan' (8 aligned documents, 9.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/ca-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Czech' (1,618 aligned documents, 1.7M links, 22.7M tokens)" href="download.php?f=OpenSubtitles2011/cs-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Danish' (1,616 aligned documents, 1.6M links, 22.4M tokens)" href="download.php?f=OpenSubtitles2011/da-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-German' (947 aligned documents, 0.9M links, 13.2M tokens)" href="download.php?f=OpenSubtitles2011/de-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Greek' (1,501 aligned documents, 1.4M links, 20.8M tokens)" href="download.php?f=OpenSubtitles2011/el-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-English' (2,688 aligned documents, 2.8M links, 41.1M tokens)" href="download.php?f=OpenSubtitles2011/en-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Spanish' (1,945 aligned documents, 2.0M links, 28.7M tokens)" href="download.php?f=OpenSubtitles2011/es-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Estonian' (567 aligned documents, 0.6M links, 8.2M tokens)" href="download.php?f=OpenSubtitles2011/et-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Persian' (2 aligned documents, 1.5k links, 42.5k tokens)" href="download.php?f=OpenSubtitles2011/fa-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Finnish' (1,953 aligned documents, 2.0M links, 25.6M tokens)" href="download.php?f=OpenSubtitles2011/fi-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-French' (1,652 aligned documents, 1.7M links, 24.7M tokens)" href="download.php?f=OpenSubtitles2011/fr-no.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Hebrew' (1,052 aligned documents, 0.9M links, 14.0M tokens)" href="download.php?f=OpenSubtitles2011/he-no.xml.gz">ces</a></td>
<th>no</th>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Croatian' (1,088 aligned documents, 1.1M links, 15.2M tokens)" href="download.php?f=OpenSubtitles2011/hr-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Hungarian' (1,430 aligned documents, 1.5M links, 19.7M tokens)" href="download.php?f=OpenSubtitles2011/hu-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Indonesian' (176 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2011/id-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Icelandic' (293 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2011/is-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Italian' (976 aligned documents, 1.0M links, 14.2M tokens)" href="download.php?f=OpenSubtitles2011/it-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Japanese' (31 aligned documents, 24.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ja-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Georgian' (1.2k links, 18.9k tokens)" href="download.php?f=OpenSubtitles2011/ka-no.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Luxembourgish' (0.8k links, 10.7k tokens)" href="download.php?f=OpenSubtitles2011/lb-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Lithuanian' (40 aligned documents, 45.9k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/lt-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Latvian' (21 aligned documents, 24.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/lv-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Macedonian' (51 aligned documents, 53.2k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2011/mk-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Malay' (43 aligned documents, 49.2k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/ms-no.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norwegian-Dutch' (2,084 aligned documents, 2.1M links, 29.8M tokens)" href="download.php?f=OpenSubtitles2011/nl-no.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Norwegian-Polish (sample file)" href="OpenSubtitles/v2011/no-pl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Portuguese (sample file)" href="OpenSubtitles/v2011/no-pt_sample.html">view</a></td><th>no</th>
<td><a rel="nofollow" title="Norwegian-Portuguese (sample file)" href="OpenSubtitles/v2011/no-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Romanian (sample file)" href="OpenSubtitles/v2011/no-ro_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Russian (sample file)" href="OpenSubtitles/v2011/no-ru_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-scc (sample file)" href="OpenSubtitles/v2011/no-scc_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-scr (sample file)" href="OpenSubtitles/v2011/no-scr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Sinhala (sample file)" href="OpenSubtitles/v2011/no-si_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Slovak (sample file)" href="OpenSubtitles/v2011/no-sk_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Slovenian (sample file)" href="OpenSubtitles/v2011/no-sl_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Albanian (sample file)" href="OpenSubtitles/v2011/no-sq_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Swedish (sample file)" href="OpenSubtitles/v2011/no-sv_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Thai (sample file)" href="OpenSubtitles/v2011/no-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Norwegian-Turkish (sample file)" href="OpenSubtitles/v2011/no-tr_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Ukrainian (sample file)" href="OpenSubtitles/v2011/no-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Norwegian-Vietnamese (sample file)" href="OpenSubtitles/v2011/no-vi_sample.html">view</a></td><td><a rel="nofollow" title="Norwegian-Chinese (sample file)" href="OpenSubtitles/v2011/no-zh_sample.html">view</a></td><th>no</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/oc.tar.gz">oc</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Czech' (0.6k links, 5.8k tokens)" href="download.php?f=OpenSubtitles2011/cs-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Spanish' (0.5k links, 5.9k tokens)" href="download.php?f=OpenSubtitles2011/es-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Finnish' (0.6k links, 4.9k tokens)" href="download.php?f=OpenSubtitles2011/fi-oc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-French' (0.6k links, 5.7k tokens)" href="download.php?f=OpenSubtitles2011/fr-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>oc</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Macedonian' (0.6k links, 5.6k tokens)" href="download.php?f=OpenSubtitles2011/mk-oc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Dutch' (0.6k links, 5.8k tokens)" href="download.php?f=OpenSubtitles2011/nl-oc.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Occitan (post 1500)-Portuguese (sample file)" href="OpenSubtitles/v2011/oc-pt_sample.html">view</a></td><th>oc</th>
<td><a rel="nofollow" title="Occitan (post 1500)-Portuguese (sample file)" href="OpenSubtitles/v2011/oc-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Occitan (post 1500)-Romanian (sample file)" href="OpenSubtitles/v2011/oc-ro_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>oc</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/pl.tar.gz">pl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (3,648 aligned documents, 2.7M links, 37.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (9,448 aligned documents, 7.8M links, 106.0M tokens)" href="download.php?f=OpenSubtitles2011/bg-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bosnian' (1,569 aligned documents, 1.3M links, 17.2M tokens)" href="download.php?f=OpenSubtitles2011/bs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Catalan' (34 aligned documents, 35.9k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ca-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (11,828 aligned documents, 11.0M links, 142.0M tokens)" href="download.php?f=OpenSubtitles2011/cs-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Danish' (2,681 aligned documents, 2.7M links, 36.8M tokens)" href="download.php?f=OpenSubtitles2011/da-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (2,724 aligned documents, 2.4M links, 33.1M tokens)" href="download.php?f=OpenSubtitles2011/de-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (9,059 aligned documents, 7.6M links, 107.1M tokens)" href="download.php?f=OpenSubtitles2011/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (19,837 aligned documents, 19.1M links, 272.3M tokens)" href="download.php?f=OpenSubtitles2011/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Esperanto' (1.0k links, 13.6k tokens)" href="download.php?f=OpenSubtitles2011/eo-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (11,689 aligned documents, 10.4M links, 148.4M tokens)" href="download.php?f=OpenSubtitles2011/es-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Estonian' (2,783 aligned documents, 2.4M links, 31.5M tokens)" href="download.php?f=OpenSubtitles2011/et-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Persian' (2 aligned documents, 1.4k links, 36.7k tokens)" href="download.php?f=OpenSubtitles2011/fa-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (8,329 aligned documents, 7.4M links, 90.7M tokens)" href="download.php?f=OpenSubtitles2011/fi-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (7,960 aligned documents, 7.1M links, 100.6M tokens)" href="download.php?f=OpenSubtitles2011/fr-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hebrew' (7,277 aligned documents, 5.3M links, 77.7M tokens)" href="download.php?f=OpenSubtitles2011/he-pl.xml.gz">ces</a></td>
<th>pl</th>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Croatian' (6,040 aligned documents, 5.4M links, 70.8M tokens)" href="download.php?f=OpenSubtitles2011/hr-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hungarian' (8,616 aligned documents, 7.8M links, 99.9M tokens)" href="download.php?f=OpenSubtitles2011/hu-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Indonesian' (567 aligned documents, 0.6M links, 8.1M tokens)" href="download.php?f=OpenSubtitles2011/id-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Icelandic' (327 aligned documents, 0.4M links, 5.3M tokens)" href="download.php?f=OpenSubtitles2011/is-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (4,455 aligned documents, 3.9M links, 55.1M tokens)" href="download.php?f=OpenSubtitles2011/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (89 aligned documents, 62.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ja-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Georgian' (2 aligned documents, 1.6k links, 27.1k tokens)" href="download.php?f=OpenSubtitles2011/ka-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (2 aligned documents, 1.5k links, 26.7k tokens)" href="download.php?f=OpenSubtitles2011/ko-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Luxembourgish' (1.0k links, 12.7k tokens)" href="download.php?f=OpenSubtitles2011/lb-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Lithuanian' (144 aligned documents, 0.2M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/lt-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Latvian' (33 aligned documents, 40.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/lv-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Macedonian' (184 aligned documents, 0.2M links, 2.4M tokens)" href="download.php?f=OpenSubtitles2011/mk-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Malay' (131 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/ms-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (11,450 aligned documents, 10.3M links, 142.9M tokens)" href="download.php?f=OpenSubtitles2011/nl-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Norwegian' (1,615 aligned documents, 1.7M links, 22.2M tokens)" href="download.php?f=OpenSubtitles2011/no-pl.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles/v2011/pl-pt_sample.html">view</a></td><th>pl</th>
<td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="OpenSubtitles/v2011/pl-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Romanian (sample file)" href="OpenSubtitles/v2011/pl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="OpenSubtitles/v2011/pl-ru_sample.html">view</a></td><td><a rel="nofollow" title="Polish-scc (sample file)" href="OpenSubtitles/v2011/pl-scc_sample.html">view</a></td><td><a rel="nofollow" title="Polish-scr (sample file)" href="OpenSubtitles/v2011/pl-scr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Sinhala (sample file)" href="OpenSubtitles/v2011/pl-si_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovak (sample file)" href="OpenSubtitles/v2011/pl-sk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Slovenian (sample file)" href="OpenSubtitles/v2011/pl-sl_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Albanian (sample file)" href="OpenSubtitles/v2011/pl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Swedish (sample file)" href="OpenSubtitles/v2011/pl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Thai (sample file)" href="OpenSubtitles/v2011/pl-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="OpenSubtitles/v2011/pl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="OpenSubtitles/v2011/pl-uk_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Urdu (sample file)" href="OpenSubtitles/v2011/pl-ur_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Vietnamese (sample file)" href="OpenSubtitles/v2011/pl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Polish-Chinese (sample file)" href="OpenSubtitles/v2011/pl-zh_sample.html">view</a></td><th>pl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/pt.tar.gz">pt</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (5,013 aligned documents, 3.7M links, 55.6M tokens)" href="download.php?f=OpenSubtitles2011/ar-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (10,742 aligned documents, 9.1M links, 130.9M tokens)" href="download.php?f=OpenSubtitles2011/bg-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (1,729 aligned documents, 1.5M links, 21.1M tokens)" href="download.php?f=OpenSubtitles2011/bs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (30 aligned documents, 26.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ca-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (11,013 aligned documents, 10.2M links, 140.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (3,269 aligned documents, 3.3M links, 47.4M tokens)" href="download.php?f=OpenSubtitles2011/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (2,934 aligned documents, 2.5M links, 37.6M tokens)" href="download.php?f=OpenSubtitles2011/de-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (11,475 aligned documents, 9.7M links, 145.7M tokens)" href="download.php?f=OpenSubtitles2011/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (23,238 aligned documents, 22.0M links, 327.6M tokens)" href="download.php?f=OpenSubtitles2011/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Esperanto' (2 aligned documents, 0.7k links, 7.9k tokens)" href="download.php?f=OpenSubtitles2011/eo-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (16,684 aligned documents, 15.0M links, 224.4M tokens)" href="download.php?f=OpenSubtitles2011/es-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (2,989 aligned documents, 2.7M links, 37.4M tokens)" href="download.php?f=OpenSubtitles2011/et-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Basque' (0.7k links, 8.6k tokens)" href="download.php?f=OpenSubtitles2011/eu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (3 aligned documents, 1.6k links, 43.3k tokens)" href="download.php?f=OpenSubtitles2011/fa-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (6,952 aligned documents, 6.5M links, 83.9M tokens)" href="download.php?f=OpenSubtitles2011/fi-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (11,360 aligned documents, 10.1M links, 149.8M tokens)" href="download.php?f=OpenSubtitles2011/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Galician' (1.2k links, 15.9k tokens)" href="download.php?f=OpenSubtitles2011/gl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (8,743 aligned documents, 6.4M links, 101.1M tokens)" href="download.php?f=OpenSubtitles2011/he-pt.xml.gz">ces</a></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (6,771 aligned documents, 6.0M links, 84.4M tokens)" href="download.php?f=OpenSubtitles2011/hr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (11,489 aligned documents, 10.4M links, 140.5M tokens)" href="download.php?f=OpenSubtitles2011/hu-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (842 aligned documents, 0.9M links, 12.5M tokens)" href="download.php?f=OpenSubtitles2011/id-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (307 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2011/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (6,228 aligned documents, 5.1M links, 77.1M tokens)" href="download.php?f=OpenSubtitles2011/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (104 aligned documents, 75.4k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/ja-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Georgian' (1.2k links, 17.6k tokens)" href="download.php?f=OpenSubtitles2011/ka-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Kazakh' (1.1k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2011/kk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (3 aligned documents, 2.0k links, 34.3k tokens)" href="download.php?f=OpenSubtitles2011/ko-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Luxembourgish' (2 aligned documents, 1.9k links, 24.1k tokens)" href="download.php?f=OpenSubtitles2011/lb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (133 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/lt-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (36 aligned documents, 43.0k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/lv-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (191 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/mk-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (175 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/ms-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (14,525 aligned documents, 13.2M links, 194.9M tokens)" href="download.php?f=OpenSubtitles2011/nl-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Norwegian' (1,762 aligned documents, 1.9M links, 26.2M tokens)" href="download.php?f=OpenSubtitles2011/no-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Occitan (post 1500)' (0.6k links, 6.0k tokens)" href="download.php?f=OpenSubtitles2011/oc-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (9,412 aligned documents, 8.9M links, 122.4M tokens)" href="download.php?f=OpenSubtitles2011/pl-pt.xml.gz">ces</a></td>
<th></th>
<th>pt</th>
<td><a rel="nofollow" title="Portuguese-Portuguese (sample file)" href="OpenSubtitles/v2011/pt-pt_br_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles/v2011/pt-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles/v2011/pt-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-scc (sample file)" href="OpenSubtitles/v2011/pt-scc_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-scr (sample file)" href="OpenSubtitles/v2011/pt-scr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles/v2011/pt-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles/v2011/pt-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles/v2011/pt-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles/v2011/pt-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles/v2011/pt-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles/v2011/pt-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles/v2011/pt-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles/v2011/pt-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles/v2011/pt-vi_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2011/pt-zh_sample.html">view</a></td><th>pt</th></tr>
<tr><th></th>
<th>ar</th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th>gl</th>
<th>he</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nl</th>
<th>no</th>
<th>oc</th>
<th>pl</th>
<th>pt</th>
<th></th>
<th>pt_br</th>
<th>ro</th>
<th>ru</th>
<th>scc</th>
<th>scr</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sv</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/pt_br.tar.gz">pt_br</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Arabic' (6,148 aligned documents, 4.4M links, 66.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (14,297 aligned documents, 11.6M links, 166.4M tokens)" href="download.php?f=OpenSubtitles2011/bg-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bosnian' (2,288 aligned documents, 1.9M links, 26.7M tokens)" href="download.php?f=OpenSubtitles2011/bs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Catalan' (29 aligned documents, 26.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ca-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (13,877 aligned documents, 11.9M links, 166.3M tokens)" href="download.php?f=OpenSubtitles2011/cs-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (3,192 aligned documents, 3.2M links, 45.3M tokens)" href="download.php?f=OpenSubtitles2011/da-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (3,215 aligned documents, 2.5M links, 37.8M tokens)" href="download.php?f=OpenSubtitles2011/de-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (14,648 aligned documents, 11.8M links, 177.8M tokens)" href="download.php?f=OpenSubtitles2011/el-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (33,776 aligned documents, 31.2M links, 465.9M tokens)" href="download.php?f=OpenSubtitles2011/en-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Esperanto' (3 aligned documents, 1.7k links, 22.2k tokens)" href="download.php?f=OpenSubtitles2011/eo-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (23,717 aligned documents, 20.8M links, 311.1M tokens)" href="download.php?f=OpenSubtitles2011/es-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Estonian' (3,357 aligned documents, 2.9M links, 40.0M tokens)" href="download.php?f=OpenSubtitles2011/et-pt_br.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Persian' (6 aligned documents, 2.6k links, 60.5k tokens)" href="download.php?f=OpenSubtitles2011/fa-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (7,356 aligned documents, 6.6M links, 85.9M tokens)" href="download.php?f=OpenSubtitles2011/fi-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (15,255 aligned documents, 13.0M links, 194.3M tokens)" href="download.php?f=OpenSubtitles2011/fr-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Galician' (6 aligned documents, 1.0k links, 15.3k tokens)" href="download.php?f=OpenSubtitles2011/gl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (11,292 aligned documents, 7.9M links, 123.8M tokens)" href="download.php?f=OpenSubtitles2011/he-pt_br.xml.gz">ces</a></td>
<th>pt_br</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (7,865 aligned documents, 6.7M links, 94.1M tokens)" href="download.php?f=OpenSubtitles2011/hr-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (15,282 aligned documents, 13.2M links, 179.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (951 aligned documents, 1.0M links, 13.9M tokens)" href="download.php?f=OpenSubtitles2011/id-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (137 aligned documents, 0.2M links, 2.5M tokens)" href="download.php?f=OpenSubtitles2011/is-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (8,833 aligned documents, 6.7M links, 102.1M tokens)" href="download.php?f=OpenSubtitles2011/it-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (120 aligned documents, 87.0k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/ja-pt_br.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (5 aligned documents, 3.4k links, 45.5k tokens)" href="download.php?f=OpenSubtitles2011/ko-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Luxembourgish' (2 aligned documents, 1.9k links, 24.0k tokens)" href="download.php?f=OpenSubtitles2011/lb-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Lithuanian' (164 aligned documents, 0.2M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/lt-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latvian' (46 aligned documents, 50.9k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/lv-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Macedonian' (172 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/mk-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Malay' (201 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2011/ms-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (17,086 aligned documents, 15.1M links, 222.5M tokens)" href="download.php?f=OpenSubtitles2011/nl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Norwegian' (1,449 aligned documents, 1.5M links, 21.5M tokens)" href="download.php?f=OpenSubtitles2011/no-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Occitan (post 1500)' (0.6k links, 5.8k tokens)" href="download.php?f=OpenSubtitles2011/oc-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (10,985 aligned documents, 9.8M links, 135.2M tokens)" href="download.php?f=OpenSubtitles2011/pl-pt_br.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Portuguese' (18,827 aligned documents, 17.4M links, 245.7M tokens)" href="download.php?f=OpenSubtitles2011/pt-pt_br.xml.gz">ces</a></td>
<th>pt_br</th>
<th></th>
<td><a rel="nofollow" title="Portuguese-Romanian (sample file)" href="OpenSubtitles/v2011/pt_br-ro_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="OpenSubtitles/v2011/pt_br-ru_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-scc (sample file)" href="OpenSubtitles/v2011/pt_br-scc_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-scr (sample file)" href="OpenSubtitles/v2011/pt_br-scr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Sinhala (sample file)" href="OpenSubtitles/v2011/pt_br-si_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovak (sample file)" href="OpenSubtitles/v2011/pt_br-sk_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Slovenian (sample file)" href="OpenSubtitles/v2011/pt_br-sl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Albanian (sample file)" href="OpenSubtitles/v2011/pt_br-sq_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Swedish (sample file)" href="OpenSubtitles/v2011/pt_br-sv_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Thai (sample file)" href="OpenSubtitles/v2011/pt_br-th_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Tagalog (sample file)" href="OpenSubtitles/v2011/pt_br-tl_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="OpenSubtitles/v2011/pt_br-tr_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="OpenSubtitles/v2011/pt_br-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="OpenSubtitles/v2011/pt_br-vi_sample.html">view</a></td><td><a rel="nofollow" title="Portuguese-Chinese (sample file)" href="OpenSubtitles/v2011/pt_br-zh_sample.html">view</a></td><th>pt_br</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ro.tar.gz">ro</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Arabic' (6,036 aligned documents, 4.3M links, 66.6M tokens)" href="download.php?f=OpenSubtitles2011/ar-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bulgarian' (14,850 aligned documents, 12.2M links, 176.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Bosnian' (2,350 aligned documents, 1.9M links, 27.8M tokens)" href="download.php?f=OpenSubtitles2011/bs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Catalan' (32 aligned documents, 31.3k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ca-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (13,568 aligned documents, 12.1M links, 169.8M tokens)" href="download.php?f=OpenSubtitles2011/cs-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Danish' (2,998 aligned documents, 3.0M links, 44.5M tokens)" href="download.php?f=OpenSubtitles2011/da-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (3,016 aligned documents, 2.4M links, 36.9M tokens)" href="download.php?f=OpenSubtitles2011/de-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Greek' (13,634 aligned documents, 11.0M links, 168.4M tokens)" href="download.php?f=OpenSubtitles2011/el-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (26,706 aligned documents, 24.9M links, 374.0M tokens)" href="download.php?f=OpenSubtitles2011/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Esperanto' (1.1k links, 14.7k tokens)" href="download.php?f=OpenSubtitles2011/eo-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (18,109 aligned documents, 15.8M links, 239.7M tokens)" href="download.php?f=OpenSubtitles2011/es-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Estonian' (3,582 aligned documents, 3.2M links, 44.3M tokens)" href="download.php?f=OpenSubtitles2011/et-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Persian' (3 aligned documents, 1.9k links, 52.1k tokens)" href="download.php?f=OpenSubtitles2011/fa-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (7,286 aligned documents, 6.7M links, 87.8M tokens)" href="download.php?f=OpenSubtitles2011/fi-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (12,134 aligned documents, 10.4M links, 157.1M tokens)" href="download.php?f=OpenSubtitles2011/fr-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hebrew' (10,280 aligned documents, 7.3M links, 117.4M tokens)" href="download.php?f=OpenSubtitles2011/he-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Croatian' (8,363 aligned documents, 7.2M links, 102.0M tokens)" href="download.php?f=OpenSubtitles2011/hr-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Hungarian' (13,350 aligned documents, 11.7M links, 161.0M tokens)" href="download.php?f=OpenSubtitles2011/hu-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Indonesian' (869 aligned documents, 0.9M links, 13.0M tokens)" href="download.php?f=OpenSubtitles2011/id-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Icelandic' (196 aligned documents, 0.3M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2011/is-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (7,023 aligned documents, 5.5M links, 84.9M tokens)" href="download.php?f=OpenSubtitles2011/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (99 aligned documents, 70.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/ja-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Georgian' (1.4k links, 18.3k tokens)" href="download.php?f=OpenSubtitles2011/ka-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Kazakh' (1.1k links, 13.7k tokens)" href="download.php?f=OpenSubtitles2011/kk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (5 aligned documents, 2.9k links, 47.5k tokens)" href="download.php?f=OpenSubtitles2011/ko-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Luxembourgish' (0.8k links, 10.5k tokens)" href="download.php?f=OpenSubtitles2011/lb-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Lithuanian' (124 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/lt-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Latvian' (46 aligned documents, 55.8k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/lv-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Macedonian' (193 aligned documents, 0.2M links, 2.7M tokens)" href="download.php?f=OpenSubtitles2011/mk-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Malay' (196 aligned documents, 0.2M links, 2.8M tokens)" href="download.php?f=OpenSubtitles2011/ms-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (15,808 aligned documents, 13.9M links, 209.1M tokens)" href="download.php?f=OpenSubtitles2011/nl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Norwegian' (1,623 aligned documents, 1.7M links, 24.0M tokens)" href="download.php?f=OpenSubtitles2011/no-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Occitan (post 1500)' (0.6k links, 6.5k tokens)" href="download.php?f=OpenSubtitles2011/oc-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Polish' (12,271 aligned documents, 11.0M links, 153.8M tokens)" href="download.php?f=OpenSubtitles2011/pl-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (14,290 aligned documents, 13.2M links, 192.8M tokens)" href="download.php?f=OpenSubtitles2011/pt-ro.xml.gz">ces</a></td>
<th>ro</th>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Portuguese' (19,075 aligned documents, 16.8M links, 244.9M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-ro.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="OpenSubtitles/v2011/ro-ru_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-scc (sample file)" href="OpenSubtitles/v2011/ro-scc_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-scr (sample file)" href="OpenSubtitles/v2011/ro-scr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Sinhala (sample file)" href="OpenSubtitles/v2011/ro-si_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovak (sample file)" href="OpenSubtitles/v2011/ro-sk_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Slovenian (sample file)" href="OpenSubtitles/v2011/ro-sl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Albanian (sample file)" href="OpenSubtitles/v2011/ro-sq_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Swedish (sample file)" href="OpenSubtitles/v2011/ro-sv_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Thai (sample file)" href="OpenSubtitles/v2011/ro-th_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Tagalog (sample file)" href="OpenSubtitles/v2011/ro-tl_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="OpenSubtitles/v2011/ro-tr_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Ukrainian (sample file)" href="OpenSubtitles/v2011/ro-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Romanian-Vietnamese (sample file)" href="OpenSubtitles/v2011/ro-vi_sample.html">view</a></td><td><a rel="nofollow" title="Romanian-Chinese (sample file)" href="OpenSubtitles/v2011/ro-zh_sample.html">view</a></td><th>ro</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ru.tar.gz">ru</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (1,824 aligned documents, 1.2M links, 17.8M tokens)" href="download.php?f=OpenSubtitles2011/ar-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (3,232 aligned documents, 2.5M links, 35.3M tokens)" href="download.php?f=OpenSubtitles2011/bg-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bosnian' (573 aligned documents, 0.4M links, 5.9M tokens)" href="download.php?f=OpenSubtitles2011/bs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Catalan' (15 aligned documents, 14.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (3,115 aligned documents, 2.5M links, 34.8M tokens)" href="download.php?f=OpenSubtitles2011/cs-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (622 aligned documents, 0.6M links, 9.0M tokens)" href="download.php?f=OpenSubtitles2011/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (1,191 aligned documents, 0.9M links, 13.5M tokens)" href="download.php?f=OpenSubtitles2011/de-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (3,189 aligned documents, 2.4M links, 35.5M tokens)" href="download.php?f=OpenSubtitles2011/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (6,030 aligned documents, 5.0M links, 73.9M tokens)" href="download.php?f=OpenSubtitles2011/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Esperanto' (1.0k links, 14.5k tokens)" href="download.php?f=OpenSubtitles2011/eo-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (4,059 aligned documents, 3.2M links, 48.1M tokens)" href="download.php?f=OpenSubtitles2011/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (986 aligned documents, 0.8M links, 11.0M tokens)" href="download.php?f=OpenSubtitles2011/et-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Persian' (0.6k links, 15.7k tokens)" href="download.php?f=OpenSubtitles2011/fa-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (1,542 aligned documents, 1.3M links, 16.4M tokens)" href="download.php?f=OpenSubtitles2011/fi-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (3,319 aligned documents, 2.6M links, 38.8M tokens)" href="download.php?f=OpenSubtitles2011/fr-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hebrew' (2,532 aligned documents, 1.7M links, 27.0M tokens)" href="download.php?f=OpenSubtitles2011/he-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (1,857 aligned documents, 1.5M links, 20.5M tokens)" href="download.php?f=OpenSubtitles2011/hr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (3,201 aligned documents, 2.5M links, 34.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Indonesian' (213 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2011/id-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (49 aligned documents, 67.6k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2011/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (2,803 aligned documents, 2.0M links, 31.1M tokens)" href="download.php?f=OpenSubtitles2011/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (34 aligned documents, 25.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ja-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Luxembourgish' (0.9k links, 10.1k tokens)" href="download.php?f=OpenSubtitles2011/lb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (63 aligned documents, 65.3k links, 0.8M tokens)" href="download.php?f=OpenSubtitles2011/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (20 aligned documents, 20.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Macedonian' (45 aligned documents, 42.2k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/mk-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Malay' (63 aligned documents, 63.0k links, 0.9M tokens)" href="download.php?f=OpenSubtitles2011/ms-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (3,179 aligned documents, 2.5M links, 37.1M tokens)" href="download.php?f=OpenSubtitles2011/nl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Norwegian' (380 aligned documents, 0.4M links, 5.4M tokens)" href="download.php?f=OpenSubtitles2011/no-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (2,057 aligned documents, 1.7M links, 23.4M tokens)" href="download.php?f=OpenSubtitles2011/pl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (2,885 aligned documents, 2.3M links, 33.9M tokens)" href="download.php?f=OpenSubtitles2011/pt-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (4,109 aligned documents, 3.1M links, 45.8M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (3,480 aligned documents, 2.8M links, 40.8M tokens)" href="download.php?f=OpenSubtitles2011/ro-ru.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Russian-scc (sample file)" href="OpenSubtitles/v2011/ru-scc_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Sinhala (sample file)" href="OpenSubtitles/v2011/ru-si_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovak (sample file)" href="OpenSubtitles/v2011/ru-sk_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Slovenian (sample file)" href="OpenSubtitles/v2011/ru-sl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Albanian (sample file)" href="OpenSubtitles/v2011/ru-sq_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="OpenSubtitles/v2011/ru-sv_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Thai (sample file)" href="OpenSubtitles/v2011/ru-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Turkish (sample file)" href="OpenSubtitles/v2011/ru-tr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="OpenSubtitles/v2011/ru-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Vietnamese (sample file)" href="OpenSubtitles/v2011/ru-vi_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Chinese (sample file)" href="OpenSubtitles/v2011/ru-zh_sample.html">view</a></td><th>ru</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/scc.tar.gz">scc</a></th>
<td><a rel="nofollow" title="sentence alignments for 'scc-Arabic' (4,144 aligned documents, 2.9M links, 41.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Bulgarian' (9,590 aligned documents, 7.6M links, 106.2M tokens)" href="download.php?f=OpenSubtitles2011/bg-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Bosnian' (1,977 aligned documents, 1.6M links, 21.9M tokens)" href="download.php?f=OpenSubtitles2011/bs-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Catalan' (21 aligned documents, 18.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Czech' (8,736 aligned documents, 7.5M links, 101.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Danish' (2,147 aligned documents, 2.1M links, 29.8M tokens)" href="download.php?f=OpenSubtitles2011/da-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-German' (2,112 aligned documents, 1.7M links, 25.0M tokens)" href="download.php?f=OpenSubtitles2011/de-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Greek' (8,944 aligned documents, 7.0M links, 103.4M tokens)" href="download.php?f=OpenSubtitles2011/el-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-English' (15,801 aligned documents, 14.1M links, 206.6M tokens)" href="download.php?f=OpenSubtitles2011/en-scc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Spanish' (11,267 aligned documents, 9.5M links, 140.3M tokens)" href="download.php?f=OpenSubtitles2011/es-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Estonian' (2,448 aligned documents, 2.1M links, 28.3M tokens)" href="download.php?f=OpenSubtitles2011/et-scc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Persian' (3 aligned documents, 0.9k links, 32.9k tokens)" href="download.php?f=OpenSubtitles2011/fa-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Finnish' (4,786 aligned documents, 4.2M links, 53.1M tokens)" href="download.php?f=OpenSubtitles2011/fi-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-French' (7,617 aligned documents, 6.4M links, 94.3M tokens)" href="download.php?f=OpenSubtitles2011/fr-scc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Hebrew' (6,758 aligned documents, 4.6M links, 71.2M tokens)" href="download.php?f=OpenSubtitles2011/he-scc.xml.gz">ces</a></td>
<th>scc</th>
<td><a rel="nofollow" title="sentence alignments for 'scc-Croatian' (7,222 aligned documents, 6.6M links, 86.7M tokens)" href="download.php?f=OpenSubtitles2011/hr-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Hungarian' (8,386 aligned documents, 7.1M links, 94.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Indonesian' (576 aligned documents, 0.6M links, 8.1M tokens)" href="download.php?f=OpenSubtitles2011/id-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Icelandic' (150 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/is-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Italian' (4,182 aligned documents, 3.3M links, 49.1M tokens)" href="download.php?f=OpenSubtitles2011/it-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Japanese' (67 aligned documents, 46.3k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ja-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Georgian' (0.8k links, 15.3k tokens)" href="download.php?f=OpenSubtitles2011/ka-scc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Korean' (1.8k links, 21.2k tokens)" href="download.php?f=OpenSubtitles2011/ko-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Luxembourgish' (2 aligned documents, 1.8k links, 22.6k tokens)" href="download.php?f=OpenSubtitles2011/lb-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Lithuanian' (110 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/lt-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Latvian' (40 aligned documents, 48.2k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/lv-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Macedonian' (193 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/mk-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Malay' (137 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2011/ms-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Dutch' (9,987 aligned documents, 8.4M links, 120.8M tokens)" href="download.php?f=OpenSubtitles2011/nl-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Norwegian' (1,196 aligned documents, 1.2M links, 16.5M tokens)" href="download.php?f=OpenSubtitles2011/no-scc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Polish' (7,567 aligned documents, 6.6M links, 88.1M tokens)" href="download.php?f=OpenSubtitles2011/pl-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Portuguese' (8,712 aligned documents, 7.6M links, 108.1M tokens)" href="download.php?f=OpenSubtitles2011/pt-scc.xml.gz">ces</a></td>
<th>scc</th>
<td><a rel="nofollow" title="sentence alignments for 'scc-Portuguese' (11,143 aligned documents, 9.4M links, 133.3M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Romanian' (11,558 aligned documents, 9.8M links, 140.9M tokens)" href="download.php?f=OpenSubtitles2011/ro-scc.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scc-Russian' (2,337 aligned documents, 1.8M links, 25.5M tokens)" href="download.php?f=OpenSubtitles2011/ru-scc.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="scc-scr (sample file)" href="OpenSubtitles/v2011/scc-scr_sample.html">view</a></td><td><a rel="nofollow" title="scc-Sinhala (sample file)" href="OpenSubtitles/v2011/scc-si_sample.html">view</a></td><td><a rel="nofollow" title="scc-Slovak (sample file)" href="OpenSubtitles/v2011/scc-sk_sample.html">view</a></td><td><a rel="nofollow" title="scc-Slovenian (sample file)" href="OpenSubtitles/v2011/scc-sl_sample.html">view</a></td><td><a rel="nofollow" title="scc-Albanian (sample file)" href="OpenSubtitles/v2011/scc-sq_sample.html">view</a></td><td><a rel="nofollow" title="scc-Swedish (sample file)" href="OpenSubtitles/v2011/scc-sv_sample.html">view</a></td><td><a rel="nofollow" title="scc-Thai (sample file)" href="OpenSubtitles/v2011/scc-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="scc-Turkish (sample file)" href="OpenSubtitles/v2011/scc-tr_sample.html">view</a></td><td><a rel="nofollow" title="scc-Ukrainian (sample file)" href="OpenSubtitles/v2011/scc-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="scc-Vietnamese (sample file)" href="OpenSubtitles/v2011/scc-vi_sample.html">view</a></td><td><a rel="nofollow" title="scc-Chinese (sample file)" href="OpenSubtitles/v2011/scc-zh_sample.html">view</a></td><th>scc</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/scr.tar.gz">scr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'scr-Arabic' (0.9k links, 12.8k tokens)" href="download.php?f=OpenSubtitles2011/ar-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Bulgarian' (3 aligned documents, 3.7k links, 49.4k tokens)" href="download.php?f=OpenSubtitles2011/bg-scr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Czech' (3 aligned documents, 2.5k links, 31.2k tokens)" href="download.php?f=OpenSubtitles2011/cs-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Danish' (3 aligned documents, 3.6k links, 49.7k tokens)" href="download.php?f=OpenSubtitles2011/da-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Greek' (3 aligned documents, 3.3k links, 44.2k tokens)" href="download.php?f=OpenSubtitles2011/el-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-English' (6 aligned documents, 6.3k links, 85.4k tokens)" href="download.php?f=OpenSubtitles2011/en-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Spanish' (3 aligned documents, 3.6k links, 52.2k tokens)" href="download.php?f=OpenSubtitles2011/es-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Estonian' (3 aligned documents, 3.5k links, 47.4k tokens)" href="download.php?f=OpenSubtitles2011/et-scr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Finnish' (1.0k links, 12.9k tokens)" href="download.php?f=OpenSubtitles2011/fi-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-French' (3 aligned documents, 3.8k links, 51.6k tokens)" href="download.php?f=OpenSubtitles2011/fr-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Hebrew' (3 aligned documents, 3.0k links, 49.6k tokens)" href="download.php?f=OpenSubtitles2011/he-scr.xml.gz">ces</a></td>
<th>scr</th>
<td><a rel="nofollow" title="sentence alignments for 'scr-Croatian' (3 aligned documents, 3.9k links, 46.9k tokens)" href="download.php?f=OpenSubtitles2011/hr-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Hungarian' (3 aligned documents, 3.6k links, 43.8k tokens)" href="download.php?f=OpenSubtitles2011/hu-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Indonesian' (3 aligned documents, 3.5k links, 49.5k tokens)" href="download.php?f=OpenSubtitles2011/id-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Italian' (1.5k links, 22.3k tokens)" href="download.php?f=OpenSubtitles2011/it-scr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Dutch' (2 aligned documents, 2.1k links, 28.8k tokens)" href="download.php?f=OpenSubtitles2011/nl-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Norwegian' (2 aligned documents, 2.6k links, 32.7k tokens)" href="download.php?f=OpenSubtitles2011/no-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Polish' (2 aligned documents, 2.5k links, 33.9k tokens)" href="download.php?f=OpenSubtitles2011/pl-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Portuguese' (4 aligned documents, 4.6k links, 59.6k tokens)" href="download.php?f=OpenSubtitles2011/pt-scr.xml.gz">ces</a></td>
<th>scr</th>
<td><a rel="nofollow" title="sentence alignments for 'scr-Portuguese' (4 aligned documents, 4.5k links, 60.6k tokens)" href="download.php?f=OpenSubtitles2011/pt_br-scr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-Romanian' (3 aligned documents, 3.9k links, 52.0k tokens)" href="download.php?f=OpenSubtitles2011/ro-scr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'scr-scc' (4 aligned documents, 5.0k links, 60.8k tokens)" href="download.php?f=OpenSubtitles2011/scc-scr.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="scr-Slovak (sample file)" href="OpenSubtitles/v2011/scr-sk_sample.html">view</a></td><td><a rel="nofollow" title="scr-Slovenian (sample file)" href="OpenSubtitles/v2011/scr-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="scr-Swedish (sample file)" href="OpenSubtitles/v2011/scr-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="scr-Turkish (sample file)" href="OpenSubtitles/v2011/scr-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>scr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/si.tar.gz">si</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Arabic' (8 aligned documents, 9.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/ar-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bulgarian' (10 aligned documents, 10.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/bg-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Bosnian' (4 aligned documents, 4.8k links, 70.0k tokens)" href="download.php?f=OpenSubtitles2011/bs-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Czech' (10 aligned documents, 11.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Danish' (6 aligned documents, 7.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/da-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-German' (0.7k links, 11.9k tokens)" href="download.php?f=OpenSubtitles2011/de-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Greek' (11 aligned documents, 11.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/el-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-English' (17 aligned documents, 20.6k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/en-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Spanish' (14 aligned documents, 15.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/es-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Estonian' (6 aligned documents, 6.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/et-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Finnish' (6 aligned documents, 6.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/fi-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-French' (8 aligned documents, 8.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/fr-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hebrew' (4 aligned documents, 3.9k links, 58.7k tokens)" href="download.php?f=OpenSubtitles2011/he-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Croatian' (6 aligned documents, 6.4k links, 90.6k tokens)" href="download.php?f=OpenSubtitles2011/hr-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Hungarian' (11 aligned documents, 12.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/hu-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Indonesian' (6 aligned documents, 6.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/id-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Icelandic' (0.7k links, 11.3k tokens)" href="download.php?f=OpenSubtitles2011/is-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Italian' (7 aligned documents, 7.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/it-si.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Lithuanian' (0.9k links, 10.9k tokens)" href="download.php?f=OpenSubtitles2011/lt-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Macedonian' (1.2k links, 20.1k tokens)" href="download.php?f=OpenSubtitles2011/mk-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Malay' (2 aligned documents, 2.1k links, 29.1k tokens)" href="download.php?f=OpenSubtitles2011/ms-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Dutch' (8 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/nl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Norwegian' (1.3k links, 21.1k tokens)" href="download.php?f=OpenSubtitles2011/no-si.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Polish' (8 aligned documents, 9.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/pl-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (10 aligned documents, 11.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/pt-si.xml.gz">ces</a></td>
<th>si</th>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Portuguese' (15 aligned documents, 18.1k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Romanian' (12 aligned documents, 15.4k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ro-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-Russian' (4 aligned documents, 4.3k links, 64.1k tokens)" href="download.php?f=OpenSubtitles2011/ru-si.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Sinhala-scc' (10 aligned documents, 11.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/scc-si.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Sinhala-Slovenian (sample file)" href="OpenSubtitles/v2011/si-sl_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Albanian (sample file)" href="OpenSubtitles/v2011/si-sq_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Swedish (sample file)" href="OpenSubtitles/v2011/si-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Sinhala-Turkish (sample file)" href="OpenSubtitles/v2011/si-tr_sample.html">view</a></td><td><a rel="nofollow" title="Sinhala-Ukrainian (sample file)" href="OpenSubtitles/v2011/si-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Sinhala-Chinese (sample file)" href="OpenSubtitles/v2011/si-zh_sample.html">view</a></td><th>si</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/sk.tar.gz">sk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Arabic' (1,021 aligned documents, 0.7M links, 10.5M tokens)" href="download.php?f=OpenSubtitles2011/ar-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bulgarian' (1,918 aligned documents, 1.5M links, 21.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Bosnian' (426 aligned documents, 0.3M links, 4.5M tokens)" href="download.php?f=OpenSubtitles2011/bs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Catalan' (14 aligned documents, 12.1k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Czech' (2,759 aligned documents, 2.5M links, 32.8M tokens)" href="download.php?f=OpenSubtitles2011/cs-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Danish' (445 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2011/da-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-German' (554 aligned documents, 0.4M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2011/de-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Greek' (1,714 aligned documents, 1.3M links, 19.7M tokens)" href="download.php?f=OpenSubtitles2011/el-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-English' (3,286 aligned documents, 2.9M links, 41.7M tokens)" href="download.php?f=OpenSubtitles2011/en-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Spanish' (2,388 aligned documents, 2.0M links, 28.8M tokens)" href="download.php?f=OpenSubtitles2011/es-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Estonian' (707 aligned documents, 0.6M links, 7.8M tokens)" href="download.php?f=OpenSubtitles2011/et-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Persian' (2 aligned documents, 1.6k links, 41.3k tokens)" href="download.php?f=OpenSubtitles2011/fa-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Finnish' (1,011 aligned documents, 0.8M links, 10.8M tokens)" href="download.php?f=OpenSubtitles2011/fi-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-French' (1,831 aligned documents, 1.5M links, 21.4M tokens)" href="download.php?f=OpenSubtitles2011/fr-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hebrew' (1,389 aligned documents, 1.0M links, 15.1M tokens)" href="download.php?f=OpenSubtitles2011/he-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Croatian' (1,192 aligned documents, 1.0M links, 13.5M tokens)" href="download.php?f=OpenSubtitles2011/hr-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Hungarian' (2,028 aligned documents, 1.7M links, 22.2M tokens)" href="download.php?f=OpenSubtitles2011/hu-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Indonesian' (128 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/id-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Icelandic' (10 aligned documents, 12.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/is-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Italian' (1,138 aligned documents, 0.8M links, 12.7M tokens)" href="download.php?f=OpenSubtitles2011/it-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Japanese' (28 aligned documents, 21.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ja-sk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Lithuanian' (27 aligned documents, 27.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/lt-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Latvian' (7 aligned documents, 7.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/lv-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Macedonian' (42 aligned documents, 38.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/mk-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Malay' (38 aligned documents, 39.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ms-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Dutch' (1,839 aligned documents, 1.5M links, 22.5M tokens)" href="download.php?f=OpenSubtitles2011/nl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Norwegian' (253 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/no-sk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Polish' (1,499 aligned documents, 1.3M links, 17.5M tokens)" href="download.php?f=OpenSubtitles2011/pl-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (1,710 aligned documents, 1.5M links, 21.3M tokens)" href="download.php?f=OpenSubtitles2011/pt-sk.xml.gz">ces</a></td>
<th>sk</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Portuguese' (2,310 aligned documents, 1.9M links, 27.0M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Romanian' (2,260 aligned documents, 1.9M links, 27.6M tokens)" href="download.php?f=OpenSubtitles2011/ro-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-Russian' (652 aligned documents, 0.5M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2011/ru-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-scc' (1,508 aligned documents, 1.2M links, 16.8M tokens)" href="download.php?f=OpenSubtitles2011/scc-sk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovak-scr' (2 aligned documents, 2.3k links, 26.8k tokens)" href="download.php?f=OpenSubtitles2011/scr-sk.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Slovak-Slovenian (sample file)" href="OpenSubtitles/v2011/sk-sl_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Albanian (sample file)" href="OpenSubtitles/v2011/sk-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Swedish (sample file)" href="OpenSubtitles/v2011/sk-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Thai (sample file)" href="OpenSubtitles/v2011/sk-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Turkish (sample file)" href="OpenSubtitles/v2011/sk-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Ukrainian (sample file)" href="OpenSubtitles/v2011/sk-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovak-Vietnamese (sample file)" href="OpenSubtitles/v2011/sk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Slovak-Chinese (sample file)" href="OpenSubtitles/v2011/sk-zh_sample.html">view</a></td><th>sk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/sl.tar.gz">sl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Arabic' (3,372 aligned documents, 2.4M links, 34.9M tokens)" href="download.php?f=OpenSubtitles2011/ar-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bulgarian' (6,766 aligned documents, 5.7M links, 77.1M tokens)" href="download.php?f=OpenSubtitles2011/bg-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Bosnian' (1,336 aligned documents, 1.1M links, 14.4M tokens)" href="download.php?f=OpenSubtitles2011/bs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Catalan' (18 aligned documents, 16.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ca-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (6,899 aligned documents, 6.3M links, 82.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Danish' (2,420 aligned documents, 2.4M links, 33.4M tokens)" href="download.php?f=OpenSubtitles2011/da-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (1,719 aligned documents, 1.4M links, 19.7M tokens)" href="download.php?f=OpenSubtitles2011/de-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Greek' (6,168 aligned documents, 5.2M links, 73.2M tokens)" href="download.php?f=OpenSubtitles2011/el-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (11,623 aligned documents, 11.0M links, 155.9M tokens)" href="download.php?f=OpenSubtitles2011/en-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Esperanto' (2 aligned documents, 1.4k links, 17.9k tokens)" href="download.php?f=OpenSubtitles2011/eo-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (8,300 aligned documents, 7.4M links, 104.7M tokens)" href="download.php?f=OpenSubtitles2011/es-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Estonian' (2,617 aligned documents, 2.3M links, 30.3M tokens)" href="download.php?f=OpenSubtitles2011/et-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Persian' (2 aligned documents, 2.1k links, 35.5k tokens)" href="download.php?f=OpenSubtitles2011/fa-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Finnish' (4,581 aligned documents, 4.2M links, 50.9M tokens)" href="download.php?f=OpenSubtitles2011/fi-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (5,772 aligned documents, 5.2M links, 72.5M tokens)" href="download.php?f=OpenSubtitles2011/fr-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hebrew' (5,630 aligned documents, 4.1M links, 60.9M tokens)" href="download.php?f=OpenSubtitles2011/he-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Croatian' (5,458 aligned documents, 4.9M links, 63.3M tokens)" href="download.php?f=OpenSubtitles2011/hr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Hungarian' (6,066 aligned documents, 5.5M links, 70.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Indonesian' (544 aligned documents, 0.6M links, 8.0M tokens)" href="download.php?f=OpenSubtitles2011/id-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Icelandic' (176 aligned documents, 0.2M links, 2.9M tokens)" href="download.php?f=OpenSubtitles2011/is-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (2,698 aligned documents, 2.3M links, 32.4M tokens)" href="download.php?f=OpenSubtitles2011/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (76 aligned documents, 54.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ja-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Georgian' (1.2k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2011/ka-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Korean' (0.5k links, 5.2k tokens)" href="download.php?f=OpenSubtitles2011/ko-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Luxembourgish' (0.9k links, 10.3k tokens)" href="download.php?f=OpenSubtitles2011/lb-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Lithuanian' (116 aligned documents, 0.1M links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/lt-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Latvian' (34 aligned documents, 42.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/lv-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Macedonian' (173 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2011/mk-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Malay' (129 aligned documents, 0.1M links, 1.8M tokens)" href="download.php?f=OpenSubtitles2011/ms-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Dutch' (8,279 aligned documents, 7.2M links, 100.9M tokens)" href="download.php?f=OpenSubtitles2011/nl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Norwegian' (1,277 aligned documents, 1.3M links, 17.7M tokens)" href="download.php?f=OpenSubtitles2011/no-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Polish' (6,496 aligned documents, 5.8M links, 75.4M tokens)" href="download.php?f=OpenSubtitles2011/pl-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (7,243 aligned documents, 6.7M links, 90.8M tokens)" href="download.php?f=OpenSubtitles2011/pt-sl.xml.gz">ces</a></td>
<th>sl</th>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Portuguese' (7,942 aligned documents, 7.1M links, 96.6M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Romanian' (8,094 aligned documents, 7.4M links, 101.6M tokens)" href="download.php?f=OpenSubtitles2011/ro-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Russian' (1,645 aligned documents, 1.4M links, 18.8M tokens)" href="download.php?f=OpenSubtitles2011/ru-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-scc' (5,976 aligned documents, 5.3M links, 69.2M tokens)" href="download.php?f=OpenSubtitles2011/scc-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-scr' (3 aligned documents, 3.5k links, 44.4k tokens)" href="download.php?f=OpenSubtitles2011/scr-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Sinhala' (9 aligned documents, 10.6k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/si-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Slovak' (1,173 aligned documents, 1.0M links, 13.7M tokens)" href="download.php?f=OpenSubtitles2011/sk-sl.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Slovenian-Albanian (sample file)" href="OpenSubtitles/v2011/sl-sq_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Swedish (sample file)" href="OpenSubtitles/v2011/sl-sv_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Thai (sample file)" href="OpenSubtitles/v2011/sl-th_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Tagalog (sample file)" href="OpenSubtitles/v2011/sl-tl_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Turkish (sample file)" href="OpenSubtitles/v2011/sl-tr_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Ukrainian (sample file)" href="OpenSubtitles/v2011/sl-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Slovenian-Vietnamese (sample file)" href="OpenSubtitles/v2011/sl-vi_sample.html">view</a></td><td><a rel="nofollow" title="Slovenian-Chinese (sample file)" href="OpenSubtitles/v2011/sl-zh_sample.html">view</a></td><th>sl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/sq.tar.gz">sq</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Arabic' (210 aligned documents, 0.2M links, 2.7M tokens)" href="download.php?f=OpenSubtitles2011/ar-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bulgarian' (343 aligned documents, 0.3M links, 4.9M tokens)" href="download.php?f=OpenSubtitles2011/bg-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Bosnian' (96 aligned documents, 95.4k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/bs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Catalan' (1.6k links, 24.5k tokens)" href="download.php?f=OpenSubtitles2011/ca-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Czech' (337 aligned documents, 0.4M links, 5.0M tokens)" href="download.php?f=OpenSubtitles2011/cs-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Danish' (136 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/da-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-German' (61 aligned documents, 49.5k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/de-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Greek' (367 aligned documents, 0.4M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2011/el-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (531 aligned documents, 0.6M links, 8.4M tokens)" href="download.php?f=OpenSubtitles2011/en-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Spanish' (414 aligned documents, 0.4M links, 6.3M tokens)" href="download.php?f=OpenSubtitles2011/es-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Estonian' (166 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/et-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Persian' (0.3k links, 5.7k tokens)" href="download.php?f=OpenSubtitles2011/fa-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Finnish' (301 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2011/fi-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (274 aligned documents, 0.3M links, 4.2M tokens)" href="download.php?f=OpenSubtitles2011/fr-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hebrew' (213 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2011/he-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Croatian' (223 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2011/hr-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Hungarian' (361 aligned documents, 0.4M links, 5.1M tokens)" href="download.php?f=OpenSubtitles2011/hu-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Indonesian' (130 aligned documents, 0.1M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/id-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Icelandic' (7 aligned documents, 8.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/is-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (161 aligned documents, 0.2M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2011/it-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Japanese' (10 aligned documents, 9.6k links, 83.4k tokens)" href="download.php?f=OpenSubtitles2011/ja-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Georgian' (0.7k links, 10.0k tokens)" href="download.php?f=OpenSubtitles2011/ka-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Lithuanian' (11 aligned documents, 11.8k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/lt-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Latvian' (8 aligned documents, 8.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/lv-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Macedonian' (16 aligned documents, 18.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/mk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Malay' (38 aligned documents, 37.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ms-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Dutch' (408 aligned documents, 0.4M links, 6.0M tokens)" href="download.php?f=OpenSubtitles2011/nl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Norwegian' (79 aligned documents, 87.3k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/no-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Polish' (322 aligned documents, 0.3M links, 4.6M tokens)" href="download.php?f=OpenSubtitles2011/pl-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (411 aligned documents, 0.4M links, 6.2M tokens)" href="download.php?f=OpenSubtitles2011/pt-sq.xml.gz">ces</a></td>
<th>sq</th>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Portuguese' (423 aligned documents, 0.4M links, 6.2M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Romanian' (416 aligned documents, 0.4M links, 6.3M tokens)" href="download.php?f=OpenSubtitles2011/ro-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Russian' (87 aligned documents, 89.5k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/ru-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-scc' (294 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2011/scc-sq.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Sinhala' (2 aligned documents, 2.1k links, 32.8k tokens)" href="download.php?f=OpenSubtitles2011/si-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovak' (68 aligned documents, 77.4k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/sk-sq.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Slovenian' (277 aligned documents, 0.3M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2011/sl-sq.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Albanian-Swedish (sample file)" href="OpenSubtitles/v2011/sq-sv_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Thai (sample file)" href="OpenSubtitles/v2011/sq-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Albanian-Turkish (sample file)" href="OpenSubtitles/v2011/sq-tr_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Ukrainian (sample file)" href="OpenSubtitles/v2011/sq-uk_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Urdu (sample file)" href="OpenSubtitles/v2011/sq-ur_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Vietnamese (sample file)" href="OpenSubtitles/v2011/sq-vi_sample.html">view</a></td><td><a rel="nofollow" title="Albanian-Chinese (sample file)" href="OpenSubtitles/v2011/sq-zh_sample.html">view</a></td><th>sq</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/sv.tar.gz">sv</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Arabic' (2,381 aligned documents, 1.8M links, 25.7M tokens)" href="download.php?f=OpenSubtitles2011/ar-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bulgarian' (4,688 aligned documents, 3.9M links, 55.6M tokens)" href="download.php?f=OpenSubtitles2011/bg-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Bosnian' (917 aligned documents, 0.8M links, 10.6M tokens)" href="download.php?f=OpenSubtitles2011/bs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Catalan' (22 aligned documents, 20.2k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/ca-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Czech' (5,126 aligned documents, 4.6M links, 63.9M tokens)" href="download.php?f=OpenSubtitles2011/cs-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (2,910 aligned documents, 2.7M links, 39.1M tokens)" href="download.php?f=OpenSubtitles2011/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (1,980 aligned documents, 1.7M links, 24.3M tokens)" href="download.php?f=OpenSubtitles2011/de-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Greek' (4,812 aligned documents, 4.0M links, 59.2M tokens)" href="download.php?f=OpenSubtitles2011/el-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (8,889 aligned documents, 8.1M links, 121.4M tokens)" href="download.php?f=OpenSubtitles2011/en-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (6,736 aligned documents, 5.9M links, 88.0M tokens)" href="download.php?f=OpenSubtitles2011/es-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Estonian' (1,884 aligned documents, 1.6M links, 22.7M tokens)" href="download.php?f=OpenSubtitles2011/et-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Persian' (3 aligned documents, 1.1k links, 24.1k tokens)" href="download.php?f=OpenSubtitles2011/fa-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (4,684 aligned documents, 4.2M links, 53.3M tokens)" href="download.php?f=OpenSubtitles2011/fi-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (5,247 aligned documents, 4.5M links, 67.4M tokens)" href="download.php?f=OpenSubtitles2011/fr-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hebrew' (3,961 aligned documents, 3.0M links, 45.2M tokens)" href="download.php?f=OpenSubtitles2011/he-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Croatian' (3,391 aligned documents, 2.9M links, 40.7M tokens)" href="download.php?f=OpenSubtitles2011/hr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Hungarian' (4,748 aligned documents, 4.2M links, 57.0M tokens)" href="download.php?f=OpenSubtitles2011/hu-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Indonesian' (466 aligned documents, 0.5M links, 6.7M tokens)" href="download.php?f=OpenSubtitles2011/id-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Icelandic' (317 aligned documents, 0.3M links, 4.6M tokens)" href="download.php?f=OpenSubtitles2011/is-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (2,591 aligned documents, 2.2M links, 32.3M tokens)" href="download.php?f=OpenSubtitles2011/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (78 aligned documents, 54.2k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ja-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Georgian' (1.2k links, 16.5k tokens)" href="download.php?f=OpenSubtitles2011/ka-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Lithuanian' (101 aligned documents, 96.6k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/lt-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Latvian' (38 aligned documents, 40.2k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/lv-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Macedonian' (119 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/mk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Malay' (114 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2011/ms-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Dutch' (6,684 aligned documents, 5.8M links, 85.2M tokens)" href="download.php?f=OpenSubtitles2011/nl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Norwegian' (2,144 aligned documents, 2.1M links, 29.2M tokens)" href="download.php?f=OpenSubtitles2011/no-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Polish' (4,388 aligned documents, 4.0M links, 54.3M tokens)" href="download.php?f=OpenSubtitles2011/pl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (5,666 aligned documents, 5.1M links, 73.4M tokens)" href="download.php?f=OpenSubtitles2011/pt-sv.xml.gz">ces</a></td>
<th>sv</th>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Portuguese' (5,892 aligned documents, 5.1M links, 73.9M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Romanian' (5,602 aligned documents, 4.9M links, 72.1M tokens)" href="download.php?f=OpenSubtitles2011/ro-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (1,368 aligned documents, 1.1M links, 16.0M tokens)" href="download.php?f=OpenSubtitles2011/ru-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-scc' (3,882 aligned documents, 3.3M links, 47.1M tokens)" href="download.php?f=OpenSubtitles2011/scc-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-scr' (2 aligned documents, 2.1k links, 27.6k tokens)" href="download.php?f=OpenSubtitles2011/scr-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Sinhala' (4 aligned documents, 4.7k links, 70.8k tokens)" href="download.php?f=OpenSubtitles2011/si-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovak' (876 aligned documents, 0.7M links, 10.2M tokens)" href="download.php?f=OpenSubtitles2011/sk-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Slovenian' (3,823 aligned documents, 3.4M links, 46.1M tokens)" href="download.php?f=OpenSubtitles2011/sl-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Albanian' (220 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/sq-sv.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Swedish-Thai (sample file)" href="OpenSubtitles/v2011/sv-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Turkish (sample file)" href="OpenSubtitles/v2011/sv-tr_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Ukrainian (sample file)" href="OpenSubtitles/v2011/sv-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Swedish-Vietnamese (sample file)" href="OpenSubtitles/v2011/sv-vi_sample.html">view</a></td><td><a rel="nofollow" title="Swedish-Chinese (sample file)" href="OpenSubtitles/v2011/sv-zh_sample.html">view</a></td><th>sv</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/th.tar.gz">th</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Arabic' (7 aligned documents, 4.2k links, 38.0k tokens)" href="download.php?f=OpenSubtitles2011/ar-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bulgarian' (11 aligned documents, 8.5k links, 96.8k tokens)" href="download.php?f=OpenSubtitles2011/bg-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Bosnian' (6 aligned documents, 5.5k links, 54.5k tokens)" href="download.php?f=OpenSubtitles2011/bs-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Czech' (13 aligned documents, 9.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/cs-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Danish' (6 aligned documents, 4.7k links, 59.3k tokens)" href="download.php?f=OpenSubtitles2011/da-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-German' (4 aligned documents, 2.9k links, 45.6k tokens)" href="download.php?f=OpenSubtitles2011/de-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Greek' (15 aligned documents, 10.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/el-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (20 aligned documents, 16.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/en-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Spanish' (18 aligned documents, 13.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/es-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Estonian' (8 aligned documents, 5.6k links, 54.2k tokens)" href="download.php?f=OpenSubtitles2011/et-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Finnish' (12 aligned documents, 9.4k links, 91.7k tokens)" href="download.php?f=OpenSubtitles2011/fi-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-French' (11 aligned documents, 8.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/fr-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hebrew' (9 aligned documents, 9.1k links, 84.8k tokens)" href="download.php?f=OpenSubtitles2011/he-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Croatian' (5 aligned documents, 3.8k links, 47.5k tokens)" href="download.php?f=OpenSubtitles2011/hr-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Hungarian' (14 aligned documents, 10.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/hu-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Indonesian' (4 aligned documents, 2.2k links, 21.5k tokens)" href="download.php?f=OpenSubtitles2011/id-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Icelandic' (1.0k links, 22.3k tokens)" href="download.php?f=OpenSubtitles2011/is-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Italian' (7 aligned documents, 4.1k links, 59.4k tokens)" href="download.php?f=OpenSubtitles2011/it-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Macedonian' (1.0k links, 8.5k tokens)" href="download.php?f=OpenSubtitles2011/mk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Malay' (0.9k links, 9.4k tokens)" href="download.php?f=OpenSubtitles2011/ms-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Dutch' (11 aligned documents, 10.0k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/nl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Norwegian' (4 aligned documents, 4.4k links, 53.0k tokens)" href="download.php?f=OpenSubtitles2011/no-th.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Polish' (9 aligned documents, 7.9k links, 84.8k tokens)" href="download.php?f=OpenSubtitles2011/pl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (15 aligned documents, 12.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/pt-th.xml.gz">ces</a></td>
<th>th</th>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Portuguese' (12 aligned documents, 10.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Romanian' (13 aligned documents, 10.4k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/ro-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Russian' (6 aligned documents, 5.4k links, 65.7k tokens)" href="download.php?f=OpenSubtitles2011/ru-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-scc' (11 aligned documents, 8.6k links, 98.8k tokens)" href="download.php?f=OpenSubtitles2011/scc-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovak' (2 aligned documents, 0.9k links, 8.7k tokens)" href="download.php?f=OpenSubtitles2011/sk-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Slovenian' (13 aligned documents, 10.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/sl-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Albanian' (6 aligned documents, 2.7k links, 29.2k tokens)" href="download.php?f=OpenSubtitles2011/sq-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Swedish' (14 aligned documents, 9.8k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/sv-th.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Thai-Turkish (sample file)" href="OpenSubtitles/v2011/th-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Thai-Vietnamese (sample file)" href="OpenSubtitles/v2011/th-vi_sample.html">view</a></td><td><a rel="nofollow" title="Thai-Chinese (sample file)" href="OpenSubtitles/v2011/th-zh_sample.html">view</a></td><th>th</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/tl.tar.gz">tl</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Arabic' (0.6k links, 14.2k tokens)" href="download.php?f=OpenSubtitles2011/ar-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Czech' (0.6k links, 14.3k tokens)" href="download.php?f=OpenSubtitles2011/cs-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-German' (0.6k links, 14.9k tokens)" href="download.php?f=OpenSubtitles2011/de-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-English' (0.6k links, 15.5k tokens)" href="download.php?f=OpenSubtitles2011/en-tl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Spanish' (2 aligned documents, 1.1k links, 32.2k tokens)" href="download.php?f=OpenSubtitles2011/es-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Finnish' (2 aligned documents, 1.1k links, 27.4k tokens)" href="download.php?f=OpenSubtitles2011/fi-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-French' (0.5k links, 16.5k tokens)" href="download.php?f=OpenSubtitles2011/fr-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>tl</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Hungarian' (2 aligned documents, 1.1k links, 28.5k tokens)" href="download.php?f=OpenSubtitles2011/hu-tl.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Dutch' (0.6k links, 16.0k tokens)" href="download.php?f=OpenSubtitles2011/nl-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tl</th>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Portuguese' (0.6k links, 15.9k tokens)" href="download.php?f=OpenSubtitles2011/pt_br-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Romanian' (0.6k links, 15.8k tokens)" href="download.php?f=OpenSubtitles2011/ro-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Slovenian' (0.6k links, 14.4k tokens)" href="download.php?f=OpenSubtitles2011/sl-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Tagalog-Turkish (sample file)" href="OpenSubtitles/v2011/tl-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>tl</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/tr.tar.gz">tr</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (5,284 aligned documents, 3.6M links, 49.4M tokens)" href="download.php?f=OpenSubtitles2011/ar-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bulgarian' (12,326 aligned documents, 9.6M links, 125.2M tokens)" href="download.php?f=OpenSubtitles2011/bg-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Bosnian' (1,988 aligned documents, 1.6M links, 20.0M tokens)" href="download.php?f=OpenSubtitles2011/bs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Catalan' (25 aligned documents, 26.7k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ca-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (11,633 aligned documents, 9.9M links, 125.2M tokens)" href="download.php?f=OpenSubtitles2011/cs-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Danish' (2,635 aligned documents, 2.6M links, 34.9M tokens)" href="download.php?f=OpenSubtitles2011/da-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-German' (2,999 aligned documents, 2.4M links, 32.6M tokens)" href="download.php?f=OpenSubtitles2011/de-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (11,561 aligned documents, 9.0M links, 124.1M tokens)" href="download.php?f=OpenSubtitles2011/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (21,091 aligned documents, 18.4M links, 252.7M tokens)" href="download.php?f=OpenSubtitles2011/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Esperanto' (2 aligned documents, 1.4k links, 17.1k tokens)" href="download.php?f=OpenSubtitles2011/eo-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Spanish' (14,526 aligned documents, 12.0M links, 166.0M tokens)" href="download.php?f=OpenSubtitles2011/es-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Estonian' (3,246 aligned documents, 2.8M links, 34.4M tokens)" href="download.php?f=OpenSubtitles2011/et-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Persian' (6 aligned documents, 4.2k links, 90.1k tokens)" href="download.php?f=OpenSubtitles2011/fa-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (6,164 aligned documents, 5.4M links, 62.8M tokens)" href="download.php?f=OpenSubtitles2011/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-French' (10,487 aligned documents, 8.7M links, 119.4M tokens)" href="download.php?f=OpenSubtitles2011/fr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Galician' (11 links, 0.1k tokens)" href="download.php?f=OpenSubtitles2011/gl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hebrew' (9,595 aligned documents, 6.5M links, 93.5M tokens)" href="download.php?f=OpenSubtitles2011/he-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Croatian' (6,826 aligned documents, 5.7M links, 72.2M tokens)" href="download.php?f=OpenSubtitles2011/hr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hungarian' (11,142 aligned documents, 9.3M links, 114.7M tokens)" href="download.php?f=OpenSubtitles2011/hu-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Indonesian' (672 aligned documents, 0.7M links, 9.0M tokens)" href="download.php?f=OpenSubtitles2011/id-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Icelandic' (239 aligned documents, 0.3M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2011/is-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Italian' (6,286 aligned documents, 4.9M links, 67.7M tokens)" href="download.php?f=OpenSubtitles2011/it-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (108 aligned documents, 76.8k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/ja-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Korean' (0.5k links, 6.1k tokens)" href="download.php?f=OpenSubtitles2011/ko-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Luxembourgish' (0.9k links, 9.9k tokens)" href="download.php?f=OpenSubtitles2011/lb-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Lithuanian' (131 aligned documents, 0.1M links, 1.6M tokens)" href="download.php?f=OpenSubtitles2011/lt-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Latvian' (38 aligned documents, 45.0k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/lv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Macedonian' (167 aligned documents, 0.2M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/mk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Malay' (176 aligned documents, 0.2M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/ms-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Dutch' (12,526 aligned documents, 10.5M links, 141.2M tokens)" href="download.php?f=OpenSubtitles2011/nl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Norwegian' (1,448 aligned documents, 1.5M links, 19.1M tokens)" href="download.php?f=OpenSubtitles2011/no-tr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (9,578 aligned documents, 8.3M links, 102.4M tokens)" href="download.php?f=OpenSubtitles2011/pl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (11,398 aligned documents, 10.0M links, 132.1M tokens)" href="download.php?f=OpenSubtitles2011/pt-tr.xml.gz">ces</a></td>
<th>tr</th>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (14,816 aligned documents, 12.2M links, 160.9M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (14,617 aligned documents, 12.1M links, 162.4M tokens)" href="download.php?f=OpenSubtitles2011/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Russian' (3,288 aligned documents, 2.5M links, 33.2M tokens)" href="download.php?f=OpenSubtitles2011/ru-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-scc' (9,482 aligned documents, 7.7M links, 99.0M tokens)" href="download.php?f=OpenSubtitles2011/scc-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-scr' (2 aligned documents, 2.1k links, 25.1k tokens)" href="download.php?f=OpenSubtitles2011/scr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Sinhala' (8 aligned documents, 9.3k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/si-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovak' (1,936 aligned documents, 1.6M links, 20.3M tokens)" href="download.php?f=OpenSubtitles2011/sk-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Slovenian' (6,782 aligned documents, 5.9M links, 73.2M tokens)" href="download.php?f=OpenSubtitles2011/sl-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Albanian' (323 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2011/sq-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Swedish' (4,872 aligned documents, 4.2M links, 55.5M tokens)" href="download.php?f=OpenSubtitles2011/sv-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Thai' (14 aligned documents, 11.7k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/th-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Tagalog' (0.6k links, 13.9k tokens)" href="download.php?f=OpenSubtitles2011/tl-tr.xml.gz">ces</a></td>
<th></th>
<td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="OpenSubtitles/v2011/tr-uk_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Urdu (sample file)" href="OpenSubtitles/v2011/tr-ur_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Vietnamese (sample file)" href="OpenSubtitles/v2011/tr-vi_sample.html">view</a></td><td><a rel="nofollow" title="Turkish-Chinese (sample file)" href="OpenSubtitles/v2011/tr-zh_sample.html">view</a></td><th>tr</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/uk.tar.gz">uk</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Arabic' (21 aligned documents, 13.7k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/ar-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (36 aligned documents, 34.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/bg-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bosnian' (7 aligned documents, 6.7k links, 87.4k tokens)" href="download.php?f=OpenSubtitles2011/bs-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (51 aligned documents, 46.5k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/cs-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Danish' (16 aligned documents, 15.9k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/da-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (14 aligned documents, 13.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/de-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (54 aligned documents, 40.6k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (101 aligned documents, 74.7k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/en-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (48 aligned documents, 39.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/es-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Estonian' (17 aligned documents, 15.2k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/et-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Finnish' (21 aligned documents, 19.5k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/fi-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (42 aligned documents, 42.6k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/fr-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hebrew' (22 aligned documents, 17.9k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/he-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (26 aligned documents, 27.4k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/hr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (39 aligned documents, 39.8k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/hu-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Indonesian' (6 aligned documents, 7.4k links, 91.1k tokens)" href="download.php?f=OpenSubtitles2011/id-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (17 aligned documents, 14.3k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Japanese' (0.5k links, 3.7k tokens)" href="download.php?f=OpenSubtitles2011/ja-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Georgian' (4 aligned documents, 0.3k links, 22.1k tokens)" href="download.php?f=OpenSubtitles2011/ka-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Latvian' (2 aligned documents, 1.8k links, 20.9k tokens)" href="download.php?f=OpenSubtitles2011/lv-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Macedonian' (1.2k links, 16.9k tokens)" href="download.php?f=OpenSubtitles2011/mk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Malay' (4 aligned documents, 4.4k links, 54.7k tokens)" href="download.php?f=OpenSubtitles2011/ms-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (38 aligned documents, 35.6k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/nl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Norwegian' (8 aligned documents, 9.9k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/no-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (39 aligned documents, 38.9k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/pl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (38 aligned documents, 40.1k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/pt-uk.xml.gz">ces</a></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (50 aligned documents, 43.7k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Romanian' (42 aligned documents, 40.1k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/ro-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (33 aligned documents, 32.7k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/ru-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-scc' (27 aligned documents, 28.9k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/scc-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Sinhala' (1.3k links, 20.2k tokens)" href="download.php?f=OpenSubtitles2011/si-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovak' (3 aligned documents, 1.8k links, 23.0k tokens)" href="download.php?f=OpenSubtitles2011/sk-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Slovenian' (28 aligned documents, 32.8k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/sl-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Albanian' (2 aligned documents, 1.8k links, 37.8k tokens)" href="download.php?f=OpenSubtitles2011/sq-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Swedish' (19 aligned documents, 20.7k links, 0.3M tokens)" href="download.php?f=OpenSubtitles2011/sv-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (34 aligned documents, 31.5k links, 0.4M tokens)" href="download.php?f=OpenSubtitles2011/tr-uk.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Ukrainian-Vietnamese (sample file)" href="OpenSubtitles/v2011/uk-vi_sample.html">view</a></td><td><a rel="nofollow" title="Ukrainian-Chinese (sample file)" href="OpenSubtitles/v2011/uk-zh_sample.html">view</a></td><th>uk</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/ur.tar.gz">ur</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Arabic' (1.0k links, 18.5k tokens)" href="download.php?f=OpenSubtitles2011/ar-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Greek' (0.9k links, 19.5k tokens)" href="download.php?f=OpenSubtitles2011/el-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Spanish' (0.9k links, 18.9k tokens)" href="download.php?f=OpenSubtitles2011/es-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ur</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Polish' (0.9k links, 17.5k tokens)" href="download.php?f=OpenSubtitles2011/pl-ur.xml.gz">ces</a></td>
<td></td>
<th>ur</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Albanian' (0.9k links, 19.5k tokens)" href="download.php?f=OpenSubtitles2011/sq-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Turkish' (0.9k links, 17.2k tokens)" href="download.php?f=OpenSubtitles2011/tr-ur.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><th>ur</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/vi.tar.gz">vi</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Arabic' (125 aligned documents, 0.1M links, 2.0M tokens)" href="download.php?f=OpenSubtitles2011/ar-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bulgarian' (189 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/bg-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bosnian' (42 aligned documents, 41.5k links, 0.6M tokens)" href="download.php?f=OpenSubtitles2011/bs-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Czech' (185 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2011/cs-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Danish' (101 aligned documents, 0.1M links, 1.9M tokens)" href="download.php?f=OpenSubtitles2011/da-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-German' (43 aligned documents, 41.3k links, 0.7M tokens)" href="download.php?f=OpenSubtitles2011/de-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Greek' (195 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2011/el-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (316 aligned documents, 0.4M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2011/en-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Spanish' (239 aligned documents, 0.3M links, 4.3M tokens)" href="download.php?f=OpenSubtitles2011/es-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Estonian' (107 aligned documents, 0.1M links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/et-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Finnish' (157 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/fi-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-French' (179 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2011/fr-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hebrew' (141 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/he-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Croatian' (128 aligned documents, 0.1M links, 2.2M tokens)" href="download.php?f=OpenSubtitles2011/hr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hungarian' (203 aligned documents, 0.2M links, 3.3M tokens)" href="download.php?f=OpenSubtitles2011/hu-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Indonesian' (81 aligned documents, 87.8k links, 1.4M tokens)" href="download.php?f=OpenSubtitles2011/id-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Icelandic' (6 aligned documents, 8.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/is-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Italian' (79 aligned documents, 76.3k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/it-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Japanese' (13 aligned documents, 9.1k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/ja-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Georgian' (0.6k links, 11.3k tokens)" href="download.php?f=OpenSubtitles2011/ka-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Lithuanian' (12 aligned documents, 10.0k links, 0.2M tokens)" href="download.php?f=OpenSubtitles2011/lt-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Latvian' (3 aligned documents, 4.1k links, 60.7k tokens)" href="download.php?f=OpenSubtitles2011/lv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Macedonian' (8 aligned documents, 6.7k links, 98.5k tokens)" href="download.php?f=OpenSubtitles2011/mk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Malay' (34 aligned documents, 33.7k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ms-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Dutch' (233 aligned documents, 0.2M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2011/nl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Norwegian' (66 aligned documents, 84.4k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/no-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Polish' (154 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/pl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (215 aligned documents, 0.2M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2011/pt-vi.xml.gz">ces</a></td>
<th>vi</th>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (245 aligned documents, 0.3M links, 4.2M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Romanian' (222 aligned documents, 0.2M links, 4.0M tokens)" href="download.php?f=OpenSubtitles2011/ro-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Russian' (78 aligned documents, 81.7k links, 1.3M tokens)" href="download.php?f=OpenSubtitles2011/ru-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-scc' (158 aligned documents, 0.2M links, 2.6M tokens)" href="download.php?f=OpenSubtitles2011/scc-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovak' (31 aligned documents, 34.1k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/sk-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovenian' (179 aligned documents, 0.2M links, 3.1M tokens)" href="download.php?f=OpenSubtitles2011/sl-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Albanian' (34 aligned documents, 34.9k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/sq-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Swedish' (135 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/sv-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Thai' (0.9k links, 11.7k tokens)" href="download.php?f=OpenSubtitles2011/th-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Turkish' (183 aligned documents, 0.2M links, 3.0M tokens)" href="download.php?f=OpenSubtitles2011/tr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Ukrainian' (4 aligned documents, 4.7k links, 71.8k tokens)" href="download.php?f=OpenSubtitles2011/uk-vi.xml.gz">ces</a></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Vietnamese-Chinese (sample file)" href="OpenSubtitles/v2011/vi-zh_sample.html">view</a></td><th>vi</th></tr>
<tr><th><a rel="nofollow" href="download.php?f=OpenSubtitles2011/zh.tar.gz">zh</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Arabic' (214 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/ar-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bulgarian' (337 aligned documents, 0.3M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2011/bg-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Bosnian' (69 aligned documents, 69.6k links, 1.2M tokens)" href="download.php?f=OpenSubtitles2011/bs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Catalan' (4 aligned documents, 3.2k links, 54.6k tokens)" href="download.php?f=OpenSubtitles2011/ca-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Czech' (341 aligned documents, 0.3M links, 5.7M tokens)" href="download.php?f=OpenSubtitles2011/cs-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Danish' (171 aligned documents, 0.2M links, 3.2M tokens)" href="download.php?f=OpenSubtitles2011/da-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-German' (72 aligned documents, 59.5k links, 1.0M tokens)" href="download.php?f=OpenSubtitles2011/de-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Greek' (314 aligned documents, 0.3M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2011/el-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-English' (714 aligned documents, 0.7M links, 12.3M tokens)" href="download.php?f=OpenSubtitles2011/en-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Esperanto' (2 aligned documents, 0.6k links, 8.6k tokens)" href="download.php?f=OpenSubtitles2011/eo-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Spanish' (485 aligned documents, 0.5M links, 8.4M tokens)" href="download.php?f=OpenSubtitles2011/es-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Estonian' (136 aligned documents, 0.1M links, 2.3M tokens)" href="download.php?f=OpenSubtitles2011/et-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Persian' (0.4k links, 6.7k tokens)" href="download.php?f=OpenSubtitles2011/fa-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Finnish' (240 aligned documents, 0.2M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2011/fi-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-French' (323 aligned documents, 0.3M links, 5.6M tokens)" href="download.php?f=OpenSubtitles2011/fr-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hebrew' (245 aligned documents, 0.2M links, 3.8M tokens)" href="download.php?f=OpenSubtitles2011/he-zh.xml.gz">ces</a></td>
<th>zh</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Croatian' (209 aligned documents, 0.2M links, 3.6M tokens)" href="download.php?f=OpenSubtitles2011/hr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Hungarian' (359 aligned documents, 0.3M links, 5.8M tokens)" href="download.php?f=OpenSubtitles2011/hu-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Indonesian' (64 aligned documents, 65.1k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/id-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Icelandic' (7 aligned documents, 8.6k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/is-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Italian' (131 aligned documents, 0.1M links, 2.1M tokens)" href="download.php?f=OpenSubtitles2011/it-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Japanese' (8 aligned documents, 6.3k links, 60.7k tokens)" href="download.php?f=OpenSubtitles2011/ja-zh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Lithuanian' (8 aligned documents, 7.5k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/lt-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Latvian' (5 aligned documents, 7.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/lv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Macedonian' (12 aligned documents, 10.2k links, 0.1M tokens)" href="download.php?f=OpenSubtitles2011/mk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Malay' (27 aligned documents, 27.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/ms-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Dutch' (425 aligned documents, 0.4M links, 7.3M tokens)" href="download.php?f=OpenSubtitles2011/nl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Norwegian' (84 aligned documents, 86.2k links, 1.5M tokens)" href="download.php?f=OpenSubtitles2011/no-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Polish' (235 aligned documents, 0.2M links, 3.9M tokens)" href="download.php?f=OpenSubtitles2011/pl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (373 aligned documents, 0.4M links, 6.5M tokens)" href="download.php?f=OpenSubtitles2011/pt-zh.xml.gz">ces</a></td>
<th>zh</th>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Portuguese' (445 aligned documents, 0.4M links, 7.5M tokens)" href="download.php?f=OpenSubtitles2011/pt_br-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Romanian' (366 aligned documents, 0.4M links, 6.4M tokens)" href="download.php?f=OpenSubtitles2011/ro-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Russian' (107 aligned documents, 96.5k links, 1.7M tokens)" href="download.php?f=OpenSubtitles2011/ru-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-scc' (252 aligned documents, 0.2M links, 4.1M tokens)" href="download.php?f=OpenSubtitles2011/scc-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Sinhala' (3 aligned documents, 3.1k links, 49.6k tokens)" href="download.php?f=OpenSubtitles2011/si-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovak' (66 aligned documents, 61.4k links, 1.1M tokens)" href="download.php?f=OpenSubtitles2011/sk-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Slovenian' (262 aligned documents, 0.3M links, 4.4M tokens)" href="download.php?f=OpenSubtitles2011/sl-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Albanian' (28 aligned documents, 28.9k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/sq-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Swedish' (222 aligned documents, 0.2M links, 3.7M tokens)" href="download.php?f=OpenSubtitles2011/sv-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Thai' (3 aligned documents, 2.9k links, 41.8k tokens)" href="download.php?f=OpenSubtitles2011/th-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Turkish' (332 aligned documents, 0.3M links, 5.2M tokens)" href="download.php?f=OpenSubtitles2011/tr-zh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Ukrainian' (2 aligned documents, 2.6k links, 47.3k tokens)" href="download.php?f=OpenSubtitles2011/uk-zh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Chinese-Vietnamese' (26 aligned documents, 28.5k links, 0.5M tokens)" href="download.php?f=OpenSubtitles2011/vi-zh.xml.gz">ces</a></td>
<th></th>
<th>zh</th></tr>
<tr><th></th>
<th>ar</th>
<th>bg</th>
<th>bs</th>
<th>ca</th>
<th>cs</th>
<th>da</th>
<th>de</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fa</th>
<th>fi</th>
<th>fr</th>
<th>gl</th>
<th>he</th>
<th></th>
<th>hr</th>
<th>hu</th>
<th>id</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>ka</th>
<th>kk</th>
<th>ko</th>
<th>lb</th>
<th>lt</th>
<th>lv</th>
<th>mk</th>
<th>ms</th>
<th>nl</th>
<th>no</th>
<th>oc</th>
<th>pl</th>
<th>pt</th>
<th></th>
<th>pt_br</th>
<th>ro</th>
<th>ru</th>
<th>scc</th>
<th>scr</th>
<th>si</th>
<th>sk</th>
<th>sl</th>
<th>sq</th>
<th>sv</th>
<th>th</th>
<th>tl</th>
<th>tr</th>
<th>uk</th>
<th>ur</th>
<th>vi</th>
<th>zh</th>
<th></th></tr>
</table>
</div><p />

<!--
<h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br />Number of sentence alignment units per language pair<p />Upper-right triangle: download translation memory files (TMX)<br />Bottom-left triangle: download plain text files (MOSES/GIZA++)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th>ar</th><th>bg</th><th>bs</th><th>ca</th><th>cs</th><th>da</th><th>de</th><th>el</th><th>en</th><th>eo</th><th>es</th><th>et</th><th>eu</th><th>fa</th><th>fi</th><th>fr</th><th>gl</th><th>he</th><th>hr</th><th>hu</th><th>id</th><th>is</th><th>it</th><th>ja</th><th>ka</th><th>kk</th><th>ko</th><th>lb</th><th>lt</th><th>lv</th><th>mk</th><th>ms</th><th>nl</th><th>no</th><th>oc</th><th>pl</th><th>pt</th><th>pt_br</th><th>ro</th><th>ru</th><th>scc</th><th>scr</th><th>si</th><th>sk</th><th>sl</th><th>sq</th><th>sv</th><th>th</th><th>tl</th><th>tr</th><th>uk</th><th>ur</th><th>vi</th><th>zh</th></tr> <tr><th>ar</th><td>22,859</td> <td>111.3M</td> <td>17.2M</td><td></td><td></td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Arabic-Bosnian (610,083 sentence pairs, 6.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-bs.tmx.gz">0.6M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Arabic-Catalan (8,895 sentence pairs, 98.33k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ca.tmx.gz">8.9k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Arabic-Czech (2,746,452 sentence pairs, 31.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-cs.tmx.gz">2.7M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Arabic-Danish (897,064 sentence pairs, 10.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-da.tmx.gz">0.9M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Arabic-German (704,807 sentence pairs, 8.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-de.tmx.gz">0.7M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Arabic-Greek (2,633,707 sentence pairs, 32.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-el.tmx.gz">2.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Arabic-English (4,570,419 sentence pairs, 56.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-en.tmx.gz">4.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Esperanto (274 sentence pairs, 2.53k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-eo.tmx.gz">0.3k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Arabic-Spanish (3,357,832 sentence pairs, 40.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-es.tmx.gz">3.4M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Arabic-Estonian (1,077,925 sentence pairs, 12.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-et.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Persian (1,456 sentence pairs, 32.47k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-fa.tmx.gz">1.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Arabic-Finnish (1,679,961 sentence pairs, 17.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-fi.tmx.gz">1.7M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Arabic-French (2,426,422 sentence pairs, 30.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-fr.tmx.gz">2.4M</a>
</td><td></td><td bgcolor="#d5ffca"><a rel="nofollow" title='Arabic-Hebrew (2,380,776 sentence pairs, 27.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-he.tmx.gz">2.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Arabic-Croatian (1,807,013 sentence pairs, 20.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-hr.tmx.gz">1.8M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Arabic-Hungarian (2,750,965 sentence pairs, 30.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-hu.tmx.gz">2.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Arabic-Indonesian (348,001 sentence pairs, 3.92M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-id.tmx.gz">0.3M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Arabic-Icelandic (56,675 sentence pairs, 0.65M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-is.tmx.gz">56.7k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Arabic-Italian (1,391,443 sentence pairs, 17.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-it.tmx.gz">1.4M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Arabic-Japanese (34,390 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ja.tmx.gz">34.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Georgian (416 sentence pairs, 5.55k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ka.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Arabic-Korean (2,967 sentence pairs, 32.23k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ko.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Luxembourgish (833 sentence pairs, 8.62k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-lb.tmx.gz">0.8k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Arabic-Lithuanian (61,890 sentence pairs, 0.64M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-lt.tmx.gz">61.9k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Arabic-Latvian (16,878 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-lv.tmx.gz">16.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Arabic-Macedonian (64,415 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-mk.tmx.gz">64.4k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Arabic-Malay (76,367 sentence pairs, 0.87M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ms.tmx.gz">76.4k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Arabic-Dutch (2,911,312 sentence pairs, 36.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-nl.tmx.gz">2.9M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Arabic-Norwegian (482,029 sentence pairs, 5.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-no.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Arabic-Polish (2,001,378 sentence pairs, 22.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-pl.tmx.gz">2.0M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Arabic-Portuguese (2,904,724 sentence pairs, 34.95M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-pt.tmx.gz">2.9M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Arabic-Portuguese (3,421,622 sentence pairs, 40.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-pt_br.tmx.gz">3.4M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Arabic-Romanian (3,417,736 sentence pairs, 41.63M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ro.tmx.gz">3.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Arabic-Russian (997,603 sentence pairs, 11.57M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ru.tmx.gz">1.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Arabic-scc (2,269,587 sentence pairs, 26.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-scc.tmx.gz">2.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-scr (821 sentence pairs, 7.81k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-scr.tmx.gz">0.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Arabic-Sinhala (8,917 sentence pairs, 90.51k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-si.tmx.gz">8.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Arabic-Slovak (573,819 sentence pairs, 6.57M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-sk.tmx.gz">0.6M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Arabic-Slovenian (1,941,816 sentence pairs, 21.66M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-sl.tmx.gz">1.9M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Arabic-Albanian (150,245 sentence pairs, 1.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Arabic-Swedish (1,385,363 sentence pairs, 16.43M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-sv.tmx.gz">1.4M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Arabic-Thai (3,644 sentence pairs, 27.27k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-th.tmx.gz">3.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Tagalog (519 sentence pairs, 10.49k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Arabic-Turkish (2,895,950 sentence pairs, 30.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-tr.tmx.gz">2.9M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Arabic-Ukrainian (11,763 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-uk.tmx.gz">11.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Urdu (692 sentence pairs, 12.27k words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Arabic-Vietnamese (100,179 sentence pairs, 1.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Arabic-Chinese (177,844 sentence pairs, 1.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/ar-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>bg</th><td>48,014</td> <td>267.6M</td> <td>40.2M</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bulgarian-Bosnian (1,274,420 sentence pairs, 14.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-bs.tmx.gz">1.3M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Bulgarian-Catalan (20,341 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ca.tmx.gz">20.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Czech (6,351,078 sentence pairs, 70.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-cs.tmx.gz">6.4M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Bulgarian-Danish (1,853,727 sentence pairs, 21.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-da.tmx.gz">1.9M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Bulgarian-German (1,656,861 sentence pairs, 19.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-de.tmx.gz">1.7M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Greek (6,439,010 sentence pairs, 77.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-el.tmx.gz">6.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Bulgarian-English (11,165,332 sentence pairs, 137.85M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-en.tmx.gz">11.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Esperanto (1,215 sentence pairs, 12.68k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-eo.tmx.gz">1.2k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Spanish (8,260,428 sentence pairs, 99.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-es.tmx.gz">8.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Bulgarian-Estonian (2,080,211 sentence pairs, 22.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-et.tmx.gz">2.1M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bulgarian-Persian (1,575 sentence pairs, 31.79k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-fa.tmx.gz">1.6k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Bulgarian-Finnish (3,909,937 sentence pairs, 39.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-fi.tmx.gz">3.9M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-French (5,941,103 sentence pairs, 72.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-fr.tmx.gz">5.9M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Bulgarian-Hebrew (4,554,216 sentence pairs, 51.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-he.tmx.gz">4.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Bulgarian-Croatian (4,159,403 sentence pairs, 46.29M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-hr.tmx.gz">4.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Bulgarian-Hungarian (6,463,674 sentence pairs, 68.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-hu.tmx.gz">6.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bulgarian-Indonesian (581,512 sentence pairs, 6.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-id.tmx.gz">0.6M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Bulgarian-Icelandic (177,635 sentence pairs, 1.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-is.tmx.gz">0.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Bulgarian-Italian (3,571,683 sentence pairs, 43.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-it.tmx.gz">3.6M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Bulgarian-Japanese (55,369 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ja.tmx.gz">55.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Georgian (1,318 sentence pairs, 14.22k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ka.tmx.gz">1.3k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Korean (2,089 sentence pairs, 16.39k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ko.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Bulgarian-Luxembourgish (1,579 sentence pairs, 16.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-lb.tmx.gz">1.6k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Bulgarian-Lithuanian (106,314 sentence pairs, 1.03M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bulgarian-Latvian (35,575 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-lv.tmx.gz">35.6k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Bulgarian-Macedonian (156,074 sentence pairs, 1.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Bulgarian-Malay (142,832 sentence pairs, 1.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Bulgarian-Dutch (6,861,455 sentence pairs, 83.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-nl.tmx.gz">6.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bulgarian-Norwegian (1,067,907 sentence pairs, 11.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-no.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Bulgarian-Polish (5,379,297 sentence pairs, 58.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-pl.tmx.gz">5.4M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Bulgarian-Portuguese (6,612,244 sentence pairs, 77.63M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-pt.tmx.gz">6.6M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Bulgarian-Portuguese (8,372,028 sentence pairs, 98.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-pt_br.tmx.gz">8.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Bulgarian-Romanian (8,806,751 sentence pairs, 105.54M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ro.tmx.gz">8.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Bulgarian-Russian (1,983,359 sentence pairs, 22.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-ru.tmx.gz">2.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Bulgarian-scc (5,756,449 sentence pairs, 65.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-scc.tmx.gz">5.8M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bulgarian-scr (3,212 sentence pairs, 31.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-scr.tmx.gz">3.2k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Bulgarian-Sinhala (9,245 sentence pairs, 97.86k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-si.tmx.gz">9.2k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bulgarian-Slovak (1,199,278 sentence pairs, 13.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Bulgarian-Slovenian (4,191,361 sentence pairs, 44.73M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-sl.tmx.gz">4.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Bulgarian-Albanian (272,873 sentence pairs, 3.07M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Bulgarian-Swedish (2,917,789 sentence pairs, 33.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-sv.tmx.gz">2.9M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bulgarian-Thai (7,643 sentence pairs, 59.70k words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-th.tmx.gz">7.6k</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Bulgarian-Turkish (7,005,771 sentence pairs, 72.56M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-tr.tmx.gz">7.0M</a>
</td><td bgcolor="#ffeee9"><a rel="nofollow" title='Bulgarian-Ukrainian (29,507 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-uk.tmx.gz">29.5k</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bulgarian-Vietnamese (180,894 sentence pairs, 2.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Bulgarian-Chinese (282,242 sentence pairs, 1.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/bg-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>bs</th><td>6,429</td> <td>35.3M</td> <td>5.5M</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bosnian-Arabic (645,086 sentence pairs, 7.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-bs.txt.zip">0.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Bulgarian (1,406,416 sentence pairs, 14.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-bs.txt.zip">1.4M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Catalan (2,704 sentence pairs, 27.33k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ca.tmx.gz">2.7k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Czech (1,133,969 sentence pairs, 12.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-cs.tmx.gz">1.1M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Bosnian-Danish (361,283 sentence pairs, 3.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-da.tmx.gz">0.4M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bosnian-German (302,926 sentence pairs, 3.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-de.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Greek (1,146,138 sentence pairs, 13.20M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-el.tmx.gz">1.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Bosnian-English (1,857,951 sentence pairs, 21.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-en.tmx.gz">1.9M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Spanish (1,432,309 sentence pairs, 16.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-es.tmx.gz">1.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Bosnian-Estonian (437,991 sentence pairs, 4.56M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-et.tmx.gz">0.4M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Bosnian-Persian (1,254 sentence pairs, 25.80k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-fa.tmx.gz">1.3k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Bosnian-Finnish (730,267 sentence pairs, 7.03M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-fi.tmx.gz">0.7M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-French (988,841 sentence pairs, 11.65M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-fr.tmx.gz">1.0M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Bosnian-Hebrew (844,441 sentence pairs, 9.37M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-he.tmx.gz">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bosnian-Croatian (932,506 sentence pairs, 10.20M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-hr.tmx.gz">0.9M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Bosnian-Hungarian (1,166,634 sentence pairs, 11.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-hu.tmx.gz">1.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Bosnian-Indonesian (127,687 sentence pairs, 1.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-id.tmx.gz">0.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Bosnian-Icelandic (29,845 sentence pairs, 0.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-is.tmx.gz">29.8k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Bosnian-Italian (560,339 sentence pairs, 6.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-it.tmx.gz">0.6M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bosnian-Japanese (18,503 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ja.tmx.gz">18.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bosnian-Georgian (1,119 sentence pairs, 11.28k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ka.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Korean (423 sentence pairs, 4.07k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ko.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Bosnian-Lithuanian (27,799 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-lt.tmx.gz">27.8k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Bosnian-Latvian (7,774 sentence pairs, 76.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-lv.tmx.gz">7.8k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Bosnian-Macedonian (18,518 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-mk.tmx.gz">18.5k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Bosnian-Malay (36,177 sentence pairs, 0.37M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ms.tmx.gz">36.2k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Bosnian-Dutch (1,265,868 sentence pairs, 14.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-nl.tmx.gz">1.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Bosnian-Norwegian (210,890 sentence pairs, 2.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-no.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#dfffc6"><a rel="nofollow" title='Bosnian-Polish (959,957 sentence pairs, 9.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-pl.tmx.gz">1.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Portuguese (1,169,340 sentence pairs, 13.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-pt.tmx.gz">1.2M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Bosnian-Portuguese (1,446,517 sentence pairs, 16.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-pt_br.tmx.gz">1.4M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Bosnian-Romanian (1,518,876 sentence pairs, 17.42M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ro.tmx.gz">1.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Bosnian-Russian (339,081 sentence pairs, 3.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Bosnian-scc (1,247,705 sentence pairs, 14.05M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-scc.tmx.gz">1.2M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Bosnian-Sinhala (3,739 sentence pairs, 40.42k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-si.tmx.gz">3.7k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Bosnian-Slovak (255,466 sentence pairs, 2.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Bosnian-Slovenian (863,401 sentence pairs, 8.86M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-sl.tmx.gz">0.9M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Bosnian-Albanian (78,887 sentence pairs, 0.85M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-sq.tmx.gz">78.9k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Bosnian-Swedish (598,624 sentence pairs, 6.64M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-sv.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Bosnian-Thai (4,914 sentence pairs, 34.31k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-th.tmx.gz">4.9k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Bosnian-Turkish (1,230,261 sentence pairs, 12.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Bosnian-Ukrainian (5,760 sentence pairs, 54.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-uk.tmx.gz">5.8k</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Bosnian-Vietnamese (35,861 sentence pairs, 0.46M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-vi.tmx.gz">35.9k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Bosnian-Chinese (57,664 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/bs-zh.tmx.gz">57.7k</a>
</td></tr> <tr><th>ca</th><td>155</td> <td>1.0M</td> <td>0.1M</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Catalan-Arabic (9,135 sentence pairs, 99.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ca.txt.zip">9.1k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Catalan-Bulgarian (20,983 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ca.txt.zip">21.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Bosnian (2,760 sentence pairs, 27.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ca.txt.zip">2.8k</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Catalan-Czech (23,431 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-cs.tmx.gz">23.4k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Danish (12,144 sentence pairs, 0.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-da.tmx.gz">12.1k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Catalan-German (15,766 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-de.tmx.gz">15.8k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Catalan-Greek (26,823 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-el.tmx.gz">26.8k</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Catalan-English (48,339 sentence pairs, 0.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-en.tmx.gz">48.3k</a>
</td><td></td><td bgcolor="#fffdf1"><a rel="nofollow" title='Catalan-Spanish (63,426 sentence pairs, 0.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-es.tmx.gz">63.4k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Catalan-Estonian (11,644 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-et.tmx.gz">11.6k</a>
</td><td></td><td></td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Catalan-Finnish (19,401 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-fi.tmx.gz">19.4k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Catalan-French (26,499 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-fr.tmx.gz">26.5k</a>
</td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Catalan-Hebrew (12,604 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-he.tmx.gz">12.6k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Catalan-Croatian (12,098 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-hr.tmx.gz">12.1k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Catalan-Hungarian (17,293 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-hu.tmx.gz">17.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Catalan-Indonesian (3,457 sentence pairs, 37.40k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-id.tmx.gz">3.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Icelandic (701 sentence pairs, 6.61k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-is.tmx.gz">0.7k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Catalan-Italian (14,069 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-it.tmx.gz">14.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Korean (565 sentence pairs, 9.19k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-ko.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Catalan-Lithuanian (2,627 sentence pairs, 25.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-lt.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-Latvian (1,553 sentence pairs, 14.09k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-lv.tmx.gz">1.6k</a>
</td><td></td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Catalan-Dutch (22,088 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-nl.tmx.gz">22.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Catalan-Norwegian (7,740 sentence pairs, 86.69k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-no.tmx.gz">7.7k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Catalan-Polish (27,818 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-pl.tmx.gz">27.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Catalan-Portuguese (23,238 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-pt.tmx.gz">23.2k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Catalan-Portuguese (22,435 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-pt_br.tmx.gz">22.4k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Catalan-Romanian (26,924 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-ro.tmx.gz">26.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Catalan-Russian (11,121 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-ru.tmx.gz">11.1k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Catalan-scc (15,962 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-scc.tmx.gz">16.0k</a>
</td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Catalan-Slovak (10,814 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-sk.tmx.gz">10.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Catalan-Slovenian (13,868 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-sl.tmx.gz">13.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Catalan-Albanian (1,362 sentence pairs, 15.64k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-sq.tmx.gz">1.4k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Catalan-Swedish (15,425 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-sv.tmx.gz">15.4k</a>
</td><td></td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Catalan-Turkish (21,033 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-tr.tmx.gz">21.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Catalan-Chinese (2,774 sentence pairs, 20.37k words) - TMX format' href="download.php?f=OpenSubtitles2011/ca-zh.tmx.gz">2.8k</a>
</td></tr> <tr><th>cs</th><td>73,858</td> <td>412.7M</td> <td>64.9M</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Czech-Arabic (3,155,736 sentence pairs, 34.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-cs.txt.zip">3.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Czech-Bulgarian (8,088,938 sentence pairs, 83.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-cs.txt.zip">8.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Czech-Bosnian (1,296,272 sentence pairs, 13.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-cs.txt.zip">1.3M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Czech-Catalan (26,573 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-cs.txt.zip">26.6k</a>
</td><td></td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Czech-Danish (2,153,534 sentence pairs, 23.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-da.tmx.gz">2.2M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Czech-German (1,977,087 sentence pairs, 22.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-de.tmx.gz">2.0M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Greek (6,125,814 sentence pairs, 70.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-el.tmx.gz">6.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Czech-English (11,836,567 sentence pairs, 142.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-en.tmx.gz">11.8M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Esperanto (1,593 sentence pairs, 15.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-eo.tmx.gz">1.6k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Czech-Spanish (8,776,957 sentence pairs, 102.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-es.tmx.gz">8.8M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Czech-Estonian (2,068,812 sentence pairs, 21.66M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-et.tmx.gz">2.1M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Czech-Persian (1,395 sentence pairs, 29.97k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-fa.tmx.gz">1.4k</a>
</td><td bgcolor="#d0ffce"><a rel="nofollow" title='Czech-Finnish (4,032,480 sentence pairs, 38.92M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-fi.tmx.gz">4.0M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-French (5,965,058 sentence pairs, 70.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-fr.tmx.gz">6.0M</a>
</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Czech-Hebrew (4,374,849 sentence pairs, 48.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-he.tmx.gz">4.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Czech-Croatian (4,291,857 sentence pairs, 46.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-hr.tmx.gz">4.3M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Hungarian (6,544,401 sentence pairs, 67.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-hu.tmx.gz">6.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Czech-Indonesian (560,951 sentence pairs, 5.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-id.tmx.gz">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Czech-Icelandic (298,528 sentence pairs, 3.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-is.tmx.gz">0.3M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Czech-Italian (3,432,198 sentence pairs, 40.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-it.tmx.gz">3.4M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Czech-Japanese (55,940 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ja.tmx.gz">55.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Georgian (1,516 sentence pairs, 16.38k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ka.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Korean (1,596 sentence pairs, 17.69k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ko.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Luxembourgish (1,587 sentence pairs, 17.39k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-lb.tmx.gz">1.6k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Czech-Lithuanian (128,544 sentence pairs, 1.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Czech-Latvian (44,398 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-lv.tmx.gz">44.4k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Czech-Macedonian (138,914 sentence pairs, 1.42M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Czech-Malay (129,952 sentence pairs, 1.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Dutch (6,947,368 sentence pairs, 81.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-nl.tmx.gz">6.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Czech-Norwegian (1,314,190 sentence pairs, 14.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-no.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Occitan (post 1500) (378 sentence pairs, 2.86k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-oc.tmx.gz">0.4k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Czech-Polish (6,237,459 sentence pairs, 64.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-pl.tmx.gz">6.2M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Czech-Portuguese (6,753,201 sentence pairs, 76.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-pt.tmx.gz">6.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Czech-Portuguese (7,879,297 sentence pairs, 90.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-pt_br.tmx.gz">7.9M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Czech-Romanian (8,122,379 sentence pairs, 94.58M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ro.tmx.gz">8.1M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Czech-Russian (1,958,463 sentence pairs, 21.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-ru.tmx.gz">2.0M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Czech-scc (5,359,407 sentence pairs, 58.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-scc.tmx.gz">5.4M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-scr (2,247 sentence pairs, 20.84k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-scr.tmx.gz">2.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Czech-Sinhala (9,877 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-si.tmx.gz">9.9k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Czech-Slovak (1,657,454 sentence pairs, 18.54M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-sk.tmx.gz">1.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Czech-Slovenian (4,340,964 sentence pairs, 44.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-sl.tmx.gz">4.3M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Czech-Albanian (273,946 sentence pairs, 3.00M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Czech-Swedish (3,273,531 sentence pairs, 36.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-sv.tmx.gz">3.3M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Czech-Thai (8,386 sentence pairs, 61.47k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-th.tmx.gz">8.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Tagalog (531 sentence pairs, 11.66k words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Czech-Turkish (6,833,339 sentence pairs, 68.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-tr.tmx.gz">6.8M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Czech-Ukrainian (41,024 sentence pairs, 0.42M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-uk.tmx.gz">41.0k</a>
</td><td></td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Czech-Vietnamese (170,362 sentence pairs, 2.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Czech-Chinese (289,859 sentence pairs, 1.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/cs-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>da</th><td>10,636</td> <td>70.8M</td> <td>10.1M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Arabic (999,085 sentence pairs, 11.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-da.txt.zip">1.0M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Danish-Bulgarian (2,180,193 sentence pairs, 23.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-da.txt.zip">2.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Danish-Bosnian (394,012 sentence pairs, 4.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-da.txt.zip">0.4M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Danish-Catalan (13,092 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-da.txt.zip">13.1k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Danish-Czech (2,741,578 sentence pairs, 28.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-da.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Danish-German (766,201 sentence pairs, 8.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-de.tmx.gz">0.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Danish-Greek (1,870,145 sentence pairs, 22.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-el.tmx.gz">1.9M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Danish-English (3,244,096 sentence pairs, 40.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-en.tmx.gz">3.2M</a>
</td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Danish-Spanish (2,588,508 sentence pairs, 30.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-es.tmx.gz">2.6M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Danish-Estonian (907,339 sentence pairs, 9.95M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-et.tmx.gz">0.9M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Danish-Persian (1,865 sentence pairs, 42.20k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-fa.tmx.gz">1.9k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Danish-Finnish (2,069,052 sentence pairs, 21.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-fi.tmx.gz">2.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Danish-French (1,957,590 sentence pairs, 23.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-fr.tmx.gz">2.0M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Danish-Hebrew (1,383,129 sentence pairs, 15.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-he.tmx.gz">1.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Danish-Croatian (1,459,209 sentence pairs, 16.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-hr.tmx.gz">1.5M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Hungarian (1,955,069 sentence pairs, 20.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-hu.tmx.gz">2.0M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Danish-Indonesian (271,254 sentence pairs, 2.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-id.tmx.gz">0.3M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Danish-Icelandic (200,775 sentence pairs, 2.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-is.tmx.gz">0.2M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Danish-Italian (1,023,179 sentence pairs, 11.95M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-it.tmx.gz">1.0M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Danish-Japanese (29,055 sentence pairs, 0.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-ja.tmx.gz">29.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Georgian (964 sentence pairs, 10.54k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-ka.tmx.gz">1.0k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Luxembourgish (904 sentence pairs, 9.82k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-lb.tmx.gz">0.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Danish-Lithuanian (65,859 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-lt.tmx.gz">65.9k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Danish-Latvian (29,807 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-lv.tmx.gz">29.8k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Danish-Macedonian (80,921 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-mk.tmx.gz">80.9k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Danish-Malay (68,820 sentence pairs, 0.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-ms.tmx.gz">68.8k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Danish-Dutch (2,605,704 sentence pairs, 31.65M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-nl.tmx.gz">2.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Danish-Norwegian (1,252,988 sentence pairs, 14.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-no.tmx.gz">1.3M</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Polish (1,922,058 sentence pairs, 20.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-pl.tmx.gz">1.9M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Danish-Portuguese (2,404,596 sentence pairs, 28.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-pt.tmx.gz">2.4M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Danish-Portuguese (2,252,336 sentence pairs, 26.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-pt_br.tmx.gz">2.3M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Danish-Romanian (2,277,390 sentence pairs, 27.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-ro.tmx.gz">2.3M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Danish-Russian (508,080 sentence pairs, 5.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-ru.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Danish-scc (1,604,651 sentence pairs, 18.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-scc.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Danish-scr (3,045 sentence pairs, 32.13k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-scr.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Danish-Sinhala (5,813 sentence pairs, 68.77k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-si.tmx.gz">5.8k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Danish-Slovak (353,851 sentence pairs, 3.94M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Slovenian (1,812,670 sentence pairs, 19.75M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Danish-Albanian (114,862 sentence pairs, 1.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Danish-Swedish (2,023,430 sentence pairs, 23.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-sv.tmx.gz">2.0M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Danish-Thai (3,983 sentence pairs, 35.06k words) - TMX format' href="download.php?f=OpenSubtitles2011/da-th.tmx.gz">4.0k</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Danish-Turkish (1,988,649 sentence pairs, 20.62M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-tr.tmx.gz">2.0M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Danish-Ukrainian (13,933 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-uk.tmx.gz">13.9k</a>
</td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Danish-Vietnamese (101,829 sentence pairs, 1.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Danish-Chinese (151,585 sentence pairs, 1.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/da-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>de</th><td>10,524</td> <td>65.3M</td> <td>9.1M</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='German-Arabic (738,760 sentence pairs, 9.00M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-de.txt.zip">0.7M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='German-Bulgarian (1,864,988 sentence pairs, 21.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-de.txt.zip">1.9M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='German-Bosnian (321,336 sentence pairs, 3.62M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-de.txt.zip">0.3M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='German-Catalan (16,226 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-de.txt.zip">16.2k</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='German-Czech (2,420,594 sentence pairs, 25.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-de.txt.zip">2.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='German-Danish (889,807 sentence pairs, 9.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-de.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#d7ffc7"><a rel="nofollow" title='German-Greek (1,781,604 sentence pairs, 21.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-el.tmx.gz">1.8M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='German-English (3,373,830 sentence pairs, 42.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-en.tmx.gz">3.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Esperanto (1,210 sentence pairs, 12.42k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-eo.tmx.gz">1.2k</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='German-Spanish (2,504,089 sentence pairs, 31.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-es.tmx.gz">2.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='German-Estonian (569,432 sentence pairs, 6.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-et.tmx.gz">0.6M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Persian (696 sentence pairs, 12.88k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-fa.tmx.gz">0.7k</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='German-Finnish (1,395,370 sentence pairs, 14.52M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-fi.tmx.gz">1.4M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='German-French (2,337,605 sentence pairs, 29.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-fr.tmx.gz">2.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Galician (637 sentence pairs, 9.02k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-gl.tmx.gz">0.6k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='German-Hebrew (1,159,071 sentence pairs, 13.86M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-he.tmx.gz">1.2M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='German-Croatian (1,270,397 sentence pairs, 14.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-hr.tmx.gz">1.3M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='German-Hungarian (1,916,787 sentence pairs, 21.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-hu.tmx.gz">1.9M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='German-Indonesian (111,335 sentence pairs, 1.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-id.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='German-Icelandic (220,068 sentence pairs, 2.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-is.tmx.gz">0.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='German-Italian (1,757,301 sentence pairs, 21.66M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-it.tmx.gz">1.8M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='German-Japanese (14,432 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-ja.tmx.gz">14.4k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Korean (2,349 sentence pairs, 30.02k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-ko.tmx.gz">2.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Luxembourgish (843 sentence pairs, 9.01k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-lb.tmx.gz">0.8k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='German-Lithuanian (42,343 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-lt.tmx.gz">42.3k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='German-Latvian (15,607 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-lv.tmx.gz">15.6k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='German-Macedonian (42,145 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-mk.tmx.gz">42.1k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='German-Malay (28,832 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-ms.tmx.gz">28.8k</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='German-Dutch (2,231,589 sentence pairs, 27.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-nl.tmx.gz">2.2M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Norwegian (738,567 sentence pairs, 8.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-no.tmx.gz">0.7M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='German-Polish (1,746,358 sentence pairs, 19.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-pl.tmx.gz">1.7M</a>
</td><td bgcolor="#d7ffc9"><a rel="nofollow" title='German-Portuguese (1,918,954 sentence pairs, 23.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-pt.tmx.gz">1.9M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='German-Portuguese (1,957,009 sentence pairs, 23.85M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-pt_br.tmx.gz">2.0M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='German-Romanian (1,915,989 sentence pairs, 23.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-ro.tmx.gz">1.9M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='German-Russian (729,903 sentence pairs, 8.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='German-scc (1,355,655 sentence pairs, 15.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-scc.tmx.gz">1.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Sinhala (683 sentence pairs, 7.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-si.tmx.gz">0.7k</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='German-Slovak (320,153 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-sk.tmx.gz">0.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='German-Slovenian (1,110,941 sentence pairs, 12.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='German-Albanian (41,359 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-sq.tmx.gz">41.4k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='German-Swedish (1,259,055 sentence pairs, 14.85M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-sv.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Thai (2,657 sentence pairs, 25.16k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-th.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Tagalog (541 sentence pairs, 12.18k words) - TMX format' href="download.php?f=OpenSubtitles2011/de-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='German-Turkish (1,875,709 sentence pairs, 20.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-tr.tmx.gz">1.9M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='German-Ukrainian (11,571 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-uk.tmx.gz">11.6k</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='German-Vietnamese (34,671 sentence pairs, 0.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-vi.tmx.gz">34.7k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='German-Chinese (50,608 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/de-zh.tmx.gz">50.6k</a>
</td></tr> <tr><th>el</th><td>46,362</td> <td>272.2M</td> <td>37.8M</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Greek-Arabic (2,957,352 sentence pairs, 34.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-el.txt.zip">3.0M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Bulgarian (7,784,859 sentence pairs, 87.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-el.txt.zip">7.8M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Greek-Bosnian (1,266,772 sentence pairs, 13.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-el.txt.zip">1.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Greek-Catalan (28,779 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-el.txt.zip">28.8k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Czech (8,184,863 sentence pairs, 87.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-el.txt.zip">8.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Greek-Danish (2,242,047 sentence pairs, 25.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-el.txt.zip">2.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Greek-German (2,066,970 sentence pairs, 24.20M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-el.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Greek-English (10,693,456 sentence pairs, 137.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-en.tmx.gz">10.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Esperanto (558 sentence pairs, 5.16k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-eo.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Greek-Estonian (1,823,969 sentence pairs, 20.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-et.tmx.gz">1.8M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Greek-Persian (2,543 sentence pairs, 55.08k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-fa.tmx.gz">2.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Galician (498 sentence pairs, 6.38k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-gl.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Greek-Indonesian (500,632 sentence pairs, 5.64M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-id.tmx.gz">0.5M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Greek-Icelandic (189,590 sentence pairs, 2.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-is.tmx.gz">0.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Greek-Italian (3,733,347 sentence pairs, 47.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-it.tmx.gz">3.7M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Greek-Japanese (62,119 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ja.tmx.gz">62.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Georgian (1,472 sentence pairs, 18.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ka.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Greek-Korean (2,891 sentence pairs, 37.34k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ko.tmx.gz">2.9k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Greek-Lithuanian (96,039 sentence pairs, 0.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-lt.tmx.gz">96.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Greek-Latvian (31,428 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-lv.tmx.gz">31.4k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Greek-Macedonian (116,274 sentence pairs, 1.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Greek-Malay (119,324 sentence pairs, 1.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Greek-Dutch (7,044,068 sentence pairs, 89.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-nl.tmx.gz">7.0M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Greek-Norwegian (1,125,420 sentence pairs, 12.86M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-no.tmx.gz">1.1M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Greek-Polish (4,935,991 sentence pairs, 55.43M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-pl.tmx.gz">4.9M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Greek-Portuguese (6,726,715 sentence pairs, 82.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-pt.tmx.gz">6.7M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Greek-Portuguese (8,186,609 sentence pairs, 100.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-pt_br.tmx.gz">8.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Greek-Romanian (7,782,318 sentence pairs, 97.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ro.tmx.gz">7.8M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Greek-Russian (1,859,754 sentence pairs, 22.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ru.tmx.gz">1.9M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Greek-scc (5,290,829 sentence pairs, 62.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-scc.tmx.gz">5.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Greek-scr (2,955 sentence pairs, 28.82k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-scr.tmx.gz">3.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Greek-Sinhala (9,616 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-si.tmx.gz">9.6k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Greek-Slovak (1,029,108 sentence pairs, 12.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-sk.tmx.gz">1.0M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Greek-Slovenian (3,824,749 sentence pairs, 42.52M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-sl.tmx.gz">3.8M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Greek-Albanian (263,907 sentence pairs, 3.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Greek-Swedish (2,940,645 sentence pairs, 34.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-sv.tmx.gz">2.9M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Greek-Thai (9,270 sentence pairs, 79.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-th.tmx.gz">9.3k</a>
</td><td></td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Greek-Turkish (6,520,980 sentence pairs, 70.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-tr.tmx.gz">6.5M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Greek-Ukrainian (34,425 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-uk.tmx.gz">34.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Greek-Urdu (766 sentence pairs, 13.87k words) - TMX format' href="download.php?f=OpenSubtitles2011/el-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Greek-Vietnamese (165,862 sentence pairs, 2.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Greek-Chinese (250,314 sentence pairs, 1.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/el-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>en</th><td>206,055</td> <td>1.4G</td> <td>191.5M</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Arabic (5,578,833 sentence pairs, 65.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-en.txt.zip">5.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Bulgarian (15,150,736 sentence pairs, 168.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-en.txt.zip">15.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Bosnian (2,247,880 sentence pairs, 24.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-en.txt.zip">2.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Catalan (56,151 sentence pairs, 0.67M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-en.txt.zip">56.2k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Czech (19,348,164 sentence pairs, 207.30M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-en.txt.zip">19.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='English-Danish (4,552,383 sentence pairs, 51.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-en.txt.zip">4.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='English-German (4,604,146 sentence pairs, 53.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-en.txt.zip">4.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Greek (15,282,467 sentence pairs, 179.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-en.txt.zip">15.3M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Esperanto (4,338 sentence pairs, 52.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-eo.tmx.gz">4.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Spanish (20,345,605 sentence pairs, 267.44M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-es.tmx.gz">20.3M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='English-Estonian (3,124,137 sentence pairs, 36.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-et.tmx.gz">3.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Basque (646 sentence pairs, 6.40k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-eu.tmx.gz">0.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='English-Persian (4,787 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-fa.tmx.gz">4.8k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='English-Finnish (6,453,328 sentence pairs, 70.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-fi.tmx.gz">6.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-French (12,638,939 sentence pairs, 166.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-fr.tmx.gz">12.6M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-Galician (2,096 sentence pairs, 25.08k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-gl.tmx.gz">2.1k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='English-Hebrew (7,227,605 sentence pairs, 89.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-he.tmx.gz">7.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Croatian (6,807,980 sentence pairs, 81.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-hr.tmx.gz">6.8M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Hungarian (11,693,375 sentence pairs, 136.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-hu.tmx.gz">11.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='English-Indonesian (1,085,183 sentence pairs, 12.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-id.tmx.gz">1.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Icelandic (419,784 sentence pairs, 4.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-is.tmx.gz">0.4M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='English-Italian (6,728,307 sentence pairs, 87.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-it.tmx.gz">6.7M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Japanese (102,664 sentence pairs, 0.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ja.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-Georgian (1,298 sentence pairs, 23.53k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ka.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Kazakh (1,064 sentence pairs, 10.68k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-kk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='English-Korean (5,509 sentence pairs, 61.03k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ko.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Luxembourgish (1,690 sentence pairs, 17.81k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-lb.tmx.gz">1.7k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='English-Lithuanian (202,890 sentence pairs, 2.19M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Latvian (69,433 sentence pairs, 0.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-lv.tmx.gz">69.4k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='English-Macedonian (202,209 sentence pairs, 2.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='English-Malay (239,246 sentence pairs, 2.75M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Dutch (12,397,245 sentence pairs, 161.57M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-nl.tmx.gz">12.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Norwegian (2,011,510 sentence pairs, 23.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-no.tmx.gz">2.0M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-Polish (9,880,020 sentence pairs, 115.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-pl.tmx.gz">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (12,729,306 sentence pairs, 162.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-pt.tmx.gz">12.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Portuguese (17,503,236 sentence pairs, 223.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-pt_br.tmx.gz">17.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Romanian (14,924,747 sentence pairs, 193.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ro.tmx.gz">14.9M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='English-Russian (3,659,232 sentence pairs, 44.73M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-ru.tmx.gz">3.7M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='English-scc (9,450,932 sentence pairs, 116.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-scc.tmx.gz">9.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-scr (5,495 sentence pairs, 57.50k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-scr.tmx.gz">5.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='English-Sinhala (15,939 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-si.tmx.gz">15.9k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='English-Slovak (1,994,058 sentence pairs, 24.03M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-sk.tmx.gz">2.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='English-Slovenian (6,761,138 sentence pairs, 78.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-sl.tmx.gz">6.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='English-Albanian (393,278 sentence pairs, 4.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-sq.tmx.gz">0.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='English-Swedish (5,161,906 sentence pairs, 63.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-sv.tmx.gz">5.2M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='English-Thai (15,195 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-th.tmx.gz">15.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Tagalog (538 sentence pairs, 12.86k words) - TMX format' href="download.php?f=OpenSubtitles2011/en-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='English-Turkish (11,706,632 sentence pairs, 131.81M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-tr.tmx.gz">11.7M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='English-Ukrainian (62,839 sentence pairs, 0.73M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-uk.tmx.gz">62.8k</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='English-Vietnamese (292,795 sentence pairs, 3.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-vi.tmx.gz">0.3M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='English-Chinese (562,289 sentence pairs, 4.44M words) - TMX format' href="download.php?f=OpenSubtitles2011/en-zh.tmx.gz">0.6M</a>
</td></tr> <tr><th>eo</th><td>14</td> <td>66.1k</td> <td>9.5k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Arabic (290 sentence pairs, 2.58k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-eo.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Bulgarian (1,259 sentence pairs, 12.86k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-eo.txt.zip">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Czech (1,690 sentence pairs, 15.95k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-eo.txt.zip">1.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-German (1,243 sentence pairs, 12.57k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-eo.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Greek (625 sentence pairs, 5.41k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-eo.txt.zip">0.6k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Esperanto-English (6,192 sentence pairs, 70.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-eo.txt.zip">6.2k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Esperanto-Spanish (2,906 sentence pairs, 34.30k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-es.tmx.gz">2.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Finnish (860 sentence pairs, 8.41k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-fi.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-French (305 sentence pairs, 2.89k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-fr.tmx.gz">0.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Croatian (536 sentence pairs, 6.30k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-hr.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Hungarian (322 sentence pairs, 2.62k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-hu.tmx.gz">0.3k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Esperanto-Italian (2,577 sentence pairs, 32.03k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-it.tmx.gz">2.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Lithuanian (314 sentence pairs, 2.65k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-lt.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Polish (895 sentence pairs, 9.51k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Portuguese (459 sentence pairs, 4.31k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-pt.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Portuguese (1,367 sentence pairs, 14.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-pt_br.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Romanian (1,005 sentence pairs, 10.74k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-ro.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Russian (904 sentence pairs, 9.58k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-ru.tmx.gz">0.9k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Slovenian (1,257 sentence pairs, 12.62k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-sl.tmx.gz">1.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Turkish (1,282 sentence pairs, 11.99k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-tr.tmx.gz">1.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Chinese (528 sentence pairs, 3.22k words) - TMX format' href="download.php?f=OpenSubtitles2011/eo-zh.tmx.gz">0.5k</a>
</td></tr> <tr><th>es</th><td>96,772</td> <td>624.0M</td> <td>85.0M</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Spanish-Arabic (3,842,384 sentence pairs, 44.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-es.txt.zip">3.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Spanish-Bulgarian (10,120,556 sentence pairs, 112.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-es.txt.zip">10.1M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Bosnian (1,615,835 sentence pairs, 17.55M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-es.txt.zip">1.6M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Spanish-Catalan (73,632 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-es.txt.zip">73.6k</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Spanish-Czech (11,886,742 sentence pairs, 126.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-es.txt.zip">11.9M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Spanish-Danish (3,273,765 sentence pairs, 36.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-es.txt.zip">3.3M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Spanish-German (2,988,464 sentence pairs, 34.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-es.txt.zip">3.0M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-English (32,579,513 sentence pairs, 375.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-es.txt.zip">32.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Esperanto (3,160 sentence pairs, 35.58k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-es.txt.zip">3.2k</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Spanish-Estonian (2,305,174 sentence pairs, 26.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-et.tmx.gz">2.3M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Spanish-Persian (2,221 sentence pairs, 42.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-fa.tmx.gz">2.2k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Finnish (4,803,576 sentence pairs, 50.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-fi.tmx.gz">4.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Spanish-French (9,871,367 sentence pairs, 125.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-fr.tmx.gz">9.9M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Spanish-Galician (5,034 sentence pairs, 59.86k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-gl.tmx.gz">5.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Spanish-Hebrew (5,599,801 sentence pairs, 67.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-he.tmx.gz">5.6M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Croatian (5,194,774 sentence pairs, 60.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-hr.tmx.gz">5.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Hungarian (8,588,916 sentence pairs, 96.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-hu.tmx.gz">8.6M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Spanish-Indonesian (735,231 sentence pairs, 8.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-id.tmx.gz">0.7M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Spanish-Icelandic (252,539 sentence pairs, 2.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-is.tmx.gz">0.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Spanish-Italian (4,881,386 sentence pairs, 62.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-it.tmx.gz">4.9M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Spanish-Japanese (66,576 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ja.tmx.gz">66.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Georgian (1,131 sentence pairs, 11.85k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ka.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Korean (1,914 sentence pairs, 22.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ko.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Luxembourgish (1,601 sentence pairs, 16.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-lb.tmx.gz">1.6k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Spanish-Lithuanian (152,302 sentence pairs, 1.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-lt.tmx.gz">0.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Spanish-Latvian (54,456 sentence pairs, 0.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-lv.tmx.gz">54.5k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Spanish-Macedonian (155,260 sentence pairs, 1.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-mk.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Spanish-Malay (151,634 sentence pairs, 1.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ms.tmx.gz">0.2M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Spanish-Dutch (9,701,780 sentence pairs, 123.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-nl.tmx.gz">9.7M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Norwegian (1,521,306 sentence pairs, 17.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-no.tmx.gz">1.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Occitan (post 1500) (324 sentence pairs, 2.92k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-oc.tmx.gz">0.3k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Spanish-Polish (6,757,287 sentence pairs, 76.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-pl.tmx.gz">6.8M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Spanish-Portuguese (10,133,587 sentence pairs, 125.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-pt.tmx.gz">10.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Portuguese (13,681,469 sentence pairs, 170.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-pt_br.tmx.gz">13.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Spanish-Romanian (10,840,753 sentence pairs, 136.58M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ro.tmx.gz">10.8M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Spanish-Russian (2,510,252 sentence pairs, 30.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ru.tmx.gz">2.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Spanish-scc (6,988,001 sentence pairs, 83.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-scc.tmx.gz">7.0M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-scr (3,098 sentence pairs, 32.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-scr.tmx.gz">3.1k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Spanish-Sinhala (13,499 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-si.tmx.gz">13.5k</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Spanish-Slovak (1,475,047 sentence pairs, 17.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-sk.tmx.gz">1.5M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Spanish-Slovenian (5,177,176 sentence pairs, 58.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-sl.tmx.gz">5.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Spanish-Albanian (309,693 sentence pairs, 3.62M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Spanish-Swedish (4,201,276 sentence pairs, 50.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-sv.tmx.gz">4.2M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Spanish-Thai (12,390 sentence pairs, 99.97k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-th.tmx.gz">12.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Tagalog (625 sentence pairs, 15.62k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-tl.tmx.gz">0.6k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Spanish-Turkish (8,618,330 sentence pairs, 94.07M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-tr.tmx.gz">8.6M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Spanish-Ukrainian (34,094 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-uk.tmx.gz">34.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Urdu (799 sentence pairs, 13.91k words) - TMX format' href="download.php?f=OpenSubtitles2011/es-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Spanish-Vietnamese (220,730 sentence pairs, 2.87M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Spanish-Chinese (397,911 sentence pairs, 2.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/es-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th>et</th><td>12,835</td> <td>73.0M</td> <td>11.8M</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Estonian-Arabic (1,175,552 sentence pairs, 12.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-et.txt.zip">1.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Estonian-Bulgarian (2,447,659 sentence pairs, 24.80M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-et.txt.zip">2.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Estonian-Bosnian (479,342 sentence pairs, 4.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-et.txt.zip">0.5M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Estonian-Catalan (12,065 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-et.txt.zip">12.1k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Estonian-Czech (2,518,002 sentence pairs, 24.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-et.txt.zip">2.5M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Estonian-Danish (1,042,479 sentence pairs, 10.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-et.txt.zip">1.0M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Estonian-German (628,661 sentence pairs, 6.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-et.txt.zip">0.6M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Estonian-Greek (2,110,466 sentence pairs, 22.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-et.txt.zip">2.1M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Estonian-English (4,135,443 sentence pairs, 43.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-et.txt.zip">4.1M</a>
</td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='Estonian-Spanish (2,765,200 sentence pairs, 29.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-et.txt.zip">2.8M</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Estonian-Persian (626 sentence pairs, 14.16k words) - TMX format' href="download.php?f=OpenSubtitles2011/et-fa.tmx.gz">0.6k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Finnish (1,633,131 sentence pairs, 15.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-fi.tmx.gz">1.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-French (1,761,367 sentence pairs, 20.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-fr.tmx.gz">1.8M</a>
</td><td></td><td bgcolor="#dbffc7"><a rel="nofollow" title='Estonian-Hebrew (1,473,071 sentence pairs, 15.97M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-he.tmx.gz">1.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Estonian-Croatian (1,442,514 sentence pairs, 15.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-hr.tmx.gz">1.4M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Hungarian (2,026,174 sentence pairs, 20.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-hu.tmx.gz">2.0M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Estonian-Indonesian (302,225 sentence pairs, 3.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-id.tmx.gz">0.3M</a>
</td><td bgcolor="#fffdf2"><a rel="nofollow" title='Estonian-Icelandic (73,437 sentence pairs, 0.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-is.tmx.gz">73.4k</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Estonian-Italian (978,557 sentence pairs, 11.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-it.tmx.gz">1.0M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Estonian-Japanese (30,703 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-ja.tmx.gz">30.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Estonian-Lithuanian (67,278 sentence pairs, 0.65M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-lt.tmx.gz">67.3k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Estonian-Latvian (31,730 sentence pairs, 0.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-lv.tmx.gz">31.7k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Estonian-Macedonian (68,369 sentence pairs, 0.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-mk.tmx.gz">68.4k</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Estonian-Malay (78,737 sentence pairs, 0.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-ms.tmx.gz">78.7k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Estonian-Dutch (2,190,166 sentence pairs, 25.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-nl.tmx.gz">2.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Norwegian (500,881 sentence pairs, 5.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-no.tmx.gz">0.5M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Estonian-Polish (1,802,406 sentence pairs, 18.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-pl.tmx.gz">1.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Estonian-Portuguese (2,094,913 sentence pairs, 23.31M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-pt.tmx.gz">2.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Estonian-Portuguese (2,210,249 sentence pairs, 24.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-pt_br.tmx.gz">2.2M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Estonian-Romanian (2,439,631 sentence pairs, 27.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-ro.tmx.gz">2.4M</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Estonian-Russian (655,205 sentence pairs, 7.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-ru.tmx.gz">0.7M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Estonian-scc (1,659,914 sentence pairs, 17.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-scc.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Estonian-scr (3,149 sentence pairs, 31.41k words) - TMX format' href="download.php?f=OpenSubtitles2011/et-scr.tmx.gz">3.1k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Estonian-Sinhala (6,222 sentence pairs, 68.46k words) - TMX format' href="download.php?f=OpenSubtitles2011/et-si.tmx.gz">6.2k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Estonian-Slovak (470,412 sentence pairs, 5.05M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-sk.tmx.gz">0.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Estonian-Slovenian (1,781,698 sentence pairs, 18.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Estonian-Albanian (133,783 sentence pairs, 1.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Estonian-Swedish (1,272,175 sentence pairs, 13.94M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-sv.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Estonian-Thai (4,947 sentence pairs, 34.37k words) - TMX format' href="download.php?f=OpenSubtitles2011/et-th.tmx.gz">4.9k</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Estonian-Turkish (2,107,680 sentence pairs, 20.64M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-tr.tmx.gz">2.1M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Estonian-Ukrainian (13,166 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-uk.tmx.gz">13.2k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Estonian-Vietnamese (101,541 sentence pairs, 1.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Estonian-Chinese (118,709 sentence pairs, 0.81M words) - TMX format' href="download.php?f=OpenSubtitles2011/et-zh.tmx.gz">0.1M</a>
</td></tr> <tr><th>eu</th><td>1</td> <td>3.9k</td> <td>0.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-English (671 sentence pairs, 6.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-eu.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Portuguese (655 sentence pairs, 6.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/eu-pt.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>fa</th><td>2,724</td> <td>19.2M</td> <td>0.5M</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Arabic (1,465 sentence pairs, 32.52k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-fa.txt.zip">1.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Bulgarian (1,597 sentence pairs, 31.84k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-fa.txt.zip">1.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Bosnian (1,270 sentence pairs, 25.86k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-fa.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Czech (1,416 sentence pairs, 30.05k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-fa.txt.zip">1.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Persian-Danish (1,885 sentence pairs, 42.34k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-fa.txt.zip">1.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-German (710 sentence pairs, 12.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-fa.txt.zip">0.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Greek (2,568 sentence pairs, 55.16k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-fa.txt.zip">2.6k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Persian-English (4,977 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-fa.txt.zip">5.0k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Persian-Spanish (2,246 sentence pairs, 42.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-fa.txt.zip">2.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Estonian (633 sentence pairs, 14.20k words) - Moses format' href="download.php?f=OpenSubtitles2011/et-fa.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Finnish (1,778 sentence pairs, 31.84k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-fi.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-French (462 sentence pairs, 9.11k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-fr.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Hebrew (1,304 sentence pairs, 28.60k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-he.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Croatian (667 sentence pairs, 11.75k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-hr.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Hungarian (656 sentence pairs, 11.75k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-hu.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Indonesian (1,622 sentence pairs, 35.28k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-id.tmx.gz">1.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Italian (510 sentence pairs, 9.68k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-it.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Georgian (237 sentence pairs, 7.71k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-ka.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Lithuanian (643 sentence pairs, 14.28k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-lt.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Dutch (1,239 sentence pairs, 26.99k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-nl.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Norwegian (1,137 sentence pairs, 24.61k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-no.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Polish (995 sentence pairs, 21.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-pl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Portuguese (1,217 sentence pairs, 25.26k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-pt.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Portuguese (1,814 sentence pairs, 35.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-pt_br.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Persian-Romanian (1,287 sentence pairs, 30.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-ro.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Persian-Russian (481 sentence pairs, 8.90k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-ru.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-scc (739 sentence pairs, 19.89k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-scc.tmx.gz">0.7k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Persian-Slovak (1,097 sentence pairs, 23.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-sk.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Slovenian (1,475 sentence pairs, 21.39k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-sl.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Albanian (209 sentence pairs, 3.36k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-sq.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Persian-Swedish (808 sentence pairs, 14.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-sv.tmx.gz">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Persian-Turkish (3,042 sentence pairs, 55.93k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-tr.tmx.gz">3.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Persian-Chinese (226 sentence pairs, 2.79k words) - TMX format' href="download.php?f=OpenSubtitles2011/fa-zh.tmx.gz">0.2k</a>
</td></tr> <tr><th>fi</th><td>37,126</td> <td>174.1M</td> <td>31.5M</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Finnish-Arabic (1,872,869 sentence pairs, 19.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-fi.txt.zip">1.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Bulgarian (4,800,943 sentence pairs, 45.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-fi.txt.zip">4.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Finnish-Bosnian (810,291 sentence pairs, 7.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-fi.txt.zip">0.8M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Finnish-Catalan (21,118 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-fi.txt.zip">21.1k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Czech (5,355,884 sentence pairs, 48.64M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-fi.txt.zip">5.4M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Finnish-Danish (2,615,971 sentence pairs, 25.30M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-fi.txt.zip">2.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Finnish-German (1,666,826 sentence pairs, 16.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-fi.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Finnish-English (9,620,884 sentence pairs, 96.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-fi.txt.zip">9.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Esperanto (869 sentence pairs, 8.47k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-fi.txt.zip">0.9k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Finnish-Spanish (6,190,428 sentence pairs, 60.85M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-fi.txt.zip">6.2M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Finnish-Estonian (1,920,041 sentence pairs, 17.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-fi.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Finnish-Persian (1,785 sentence pairs, 31.86k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-fi.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Finnish-French (3,610,747 sentence pairs, 38.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-fr.tmx.gz">3.6M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Finnish-Hebrew (2,608,007 sentence pairs, 26.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-he.tmx.gz">2.6M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Finnish-Croatian (2,638,782 sentence pairs, 25.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-hr.tmx.gz">2.6M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Finnish-Hungarian (3,752,802 sentence pairs, 34.62M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-hu.tmx.gz">3.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Finnish-Indonesian (465,942 sentence pairs, 4.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-id.tmx.gz">0.5M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Finnish-Icelandic (309,620 sentence pairs, 3.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-is.tmx.gz">0.3M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Finnish-Italian (2,046,252 sentence pairs, 21.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-it.tmx.gz">2.0M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Finnish-Japanese (45,258 sentence pairs, 0.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ja.tmx.gz">45.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Georgian (1,118 sentence pairs, 12.93k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ka.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Korean (2,083 sentence pairs, 15.92k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ko.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Luxembourgish (686 sentence pairs, 6.12k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-lb.tmx.gz">0.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Finnish-Lithuanian (111,942 sentence pairs, 0.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Finnish-Latvian (31,902 sentence pairs, 0.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-lv.tmx.gz">31.9k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Finnish-Macedonian (111,842 sentence pairs, 1.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Finnish-Malay (120,330 sentence pairs, 1.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Dutch (4,646,435 sentence pairs, 49.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-nl.tmx.gz">4.6M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Finnish-Norwegian (1,597,238 sentence pairs, 15.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-no.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Occitan (post 1500) (346 sentence pairs, 2.58k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-oc.tmx.gz">0.3k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Finnish-Polish (4,662,271 sentence pairs, 44.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-pl.tmx.gz">4.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Portuguese (4,483,644 sentence pairs, 46.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-pt.tmx.gz">4.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Finnish-Portuguese (4,521,452 sentence pairs, 46.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-pt_br.tmx.gz">4.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Finnish-Romanian (4,713,408 sentence pairs, 49.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ro.tmx.gz">4.7M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Finnish-Russian (1,003,212 sentence pairs, 9.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-ru.tmx.gz">1.0M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Finnish-scc (3,147,085 sentence pairs, 31.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-scc.tmx.gz">3.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-scr (860 sentence pairs, 8.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-scr.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Finnish-Sinhala (5,871 sentence pairs, 60.15k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-si.tmx.gz">5.9k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Finnish-Slovak (653,324 sentence pairs, 6.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Finnish-Slovenian (3,067,124 sentence pairs, 28.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-sl.tmx.gz">3.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Finnish-Albanian (231,674 sentence pairs, 2.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Finnish-Swedish (3,030,816 sentence pairs, 30.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-sv.tmx.gz">3.0M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Finnish-Thai (8,142 sentence pairs, 55.17k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-th.tmx.gz">8.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Finnish-Tagalog (1,080 sentence pairs, 22.15k words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-tl.tmx.gz">1.1k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Finnish-Turkish (3,902,043 sentence pairs, 34.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-tr.tmx.gz">3.9M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Finnish-Ukrainian (16,536 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-uk.tmx.gz">16.5k</a>
</td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Finnish-Vietnamese (146,590 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Finnish-Chinese (204,095 sentence pairs, 1.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/fi-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>fr</th><td>56,538</td> <td>359.4M</td> <td>48.0M</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='French-Arabic (2,721,728 sentence pairs, 32.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-fr.txt.zip">2.7M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='French-Bulgarian (7,145,424 sentence pairs, 81.57M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-fr.txt.zip">7.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='French-Bosnian (1,100,503 sentence pairs, 12.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-fr.txt.zip">1.1M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='French-Catalan (29,105 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-fr.txt.zip">29.1k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Czech (8,130,191 sentence pairs, 89.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-fr.txt.zip">8.1M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='French-Danish (2,469,668 sentence pairs, 28.06M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-fr.txt.zip">2.5M</a>
</td><td bgcolor="#d2ffcc"><a rel="nofollow" title='French-German (2,835,904 sentence pairs, 33.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-fr.txt.zip">2.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-English (19,667,103 sentence pairs, 233.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-fr.txt.zip">19.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Esperanto (324 sentence pairs, 2.98k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-fr.txt.zip">0.3k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='French-Spanish (13,306,719 sentence pairs, 155.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-fr.txt.zip">13.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='French-Estonian (2,086,152 sentence pairs, 22.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-fr.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Persian (463 sentence pairs, 9.11k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-fr.txt.zip">0.5k</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='French-Finnish (4,670,857 sentence pairs, 46.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-fr.txt.zip">4.7M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Galician (1,573 sentence pairs, 18.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-gl.tmx.gz">1.6k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='French-Hebrew (4,271,043 sentence pairs, 51.64M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-he.tmx.gz">4.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='French-Croatian (3,696,465 sentence pairs, 43.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-hr.tmx.gz">3.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='French-Hungarian (6,485,184 sentence pairs, 74.20M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-hu.tmx.gz">6.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='French-Indonesian (517,739 sentence pairs, 5.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-id.tmx.gz">0.5M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='French-Icelandic (229,050 sentence pairs, 2.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-is.tmx.gz">0.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-Italian (4,319,477 sentence pairs, 55.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-it.tmx.gz">4.3M</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='French-Japanese (55,890 sentence pairs, 0.43M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ja.tmx.gz">55.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Georgian (1,118 sentence pairs, 12.07k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ka.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='French-Korean (3,835 sentence pairs, 43.15k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ko.tmx.gz">3.8k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='French-Luxembourgish (2,538 sentence pairs, 28.11k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-lb.tmx.gz">2.5k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='French-Lithuanian (107,091 sentence pairs, 1.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='French-Latvian (44,856 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-lv.tmx.gz">44.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='French-Macedonian (100,093 sentence pairs, 1.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='French-Malay (114,525 sentence pairs, 1.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Dutch (6,982,384 sentence pairs, 89.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-nl.tmx.gz">7.0M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='French-Norwegian (1,301,817 sentence pairs, 15.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-no.tmx.gz">1.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Occitan (post 1500) (392 sentence pairs, 3.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-oc.tmx.gz">0.4k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='French-Polish (4,526,710 sentence pairs, 51.61M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-pl.tmx.gz">4.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='French-Portuguese (6,787,832 sentence pairs, 84.61M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-pt.tmx.gz">6.8M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='French-Portuguese (8,653,070 sentence pairs, 108.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-pt_br.tmx.gz">8.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='French-Romanian (7,229,145 sentence pairs, 91.87M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ro.tmx.gz">7.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='French-Russian (2,009,476 sentence pairs, 24.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-ru.tmx.gz">2.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='French-scc (4,706,063 sentence pairs, 56.56M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-scc.tmx.gz">4.7M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='French-scr (3,408 sentence pairs, 35.88k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-scr.tmx.gz">3.4k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='French-Sinhala (7,241 sentence pairs, 80.22k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-si.tmx.gz">7.2k</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='French-Slovak (1,113,904 sentence pairs, 13.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='French-Slovenian (3,660,504 sentence pairs, 41.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-sl.tmx.gz">3.7M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='French-Albanian (206,699 sentence pairs, 2.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='French-Swedish (3,205,671 sentence pairs, 38.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-sv.tmx.gz">3.2M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='French-Thai (7,901 sentence pairs, 65.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-th.tmx.gz">7.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Tagalog (460 sentence pairs, 11.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='French-Turkish (6,181,267 sentence pairs, 68.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-tr.tmx.gz">6.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='French-Ukrainian (35,459 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-uk.tmx.gz">35.5k</a>
</td><td></td><td bgcolor="#f2ffd3"><a rel="nofollow" title='French-Vietnamese (169,616 sentence pairs, 2.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='French-Chinese (267,517 sentence pairs, 2.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/fr-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>gl</th><td>27</td> <td>82.5k</td> <td>12.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Galician-German (639 sentence pairs, 9.03k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-gl.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Greek (505 sentence pairs, 6.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-gl.txt.zip">0.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Galician-English (2,138 sentence pairs, 25.29k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-gl.txt.zip">2.1k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Galician-Spanish (5,437 sentence pairs, 61.56k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-gl.txt.zip">5.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Galician-French (1,633 sentence pairs, 18.79k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-gl.txt.zip">1.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Galician-Italian (3,262 sentence pairs, 34.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/gl-it.tmx.gz">3.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Galician-Portuguese (945 sentence pairs, 9.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/gl-pt.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Galician-Portuguese (831 sentence pairs, 10.89k words) - TMX format' href="download.php?f=OpenSubtitles2011/gl-pt_br.tmx.gz">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Turkish (11 sentence pairs, 0.11k words) - TMX format' href="download.php?f=OpenSubtitles2011/gl-tr.tmx.gz">11</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>he</th><td>43,480</td> <td>227.9M</td> <td>31.8M</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Hebrew-Arabic (2,686,966 sentence pairs, 29.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-he.txt.zip">2.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-Bulgarian (5,401,657 sentence pairs, 58.48M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-he.txt.zip">5.4M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Hebrew-Bosnian (915,619 sentence pairs, 9.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-he.txt.zip">0.9M</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Hebrew-Catalan (14,596 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-he.txt.zip">14.6k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-Czech (5,529,084 sentence pairs, 58.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-he.txt.zip">5.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Hebrew-Danish (1,622,317 sentence pairs, 17.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-he.txt.zip">1.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Hebrew-German (1,307,071 sentence pairs, 15.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-he.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hebrew-English (10,002,200 sentence pairs, 115.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-he.txt.zip">10.0M</a>
</td><td></td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hebrew-Spanish (6,916,436 sentence pairs, 78.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-he.txt.zip">6.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Hebrew-Estonian (1,691,340 sentence pairs, 17.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-he.txt.zip">1.7M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hebrew-Persian (1,316 sentence pairs, 28.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-he.txt.zip">1.3k</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Hebrew-Finnish (3,135,920 sentence pairs, 30.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-he.txt.zip">3.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-French (5,229,219 sentence pairs, 60.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-he.txt.zip">5.2M</a>
</td><td></td><td></td><td bgcolor="#d3ffca"><a rel="nofollow" title='Hebrew-Croatian (2,719,049 sentence pairs, 30.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-hr.tmx.gz">2.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hebrew-Hungarian (4,346,741 sentence pairs, 46.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-hu.tmx.gz">4.3M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Hebrew-Indonesian (356,090 sentence pairs, 3.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-id.tmx.gz">0.4M</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Hebrew-Icelandic (95,119 sentence pairs, 1.06M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-is.tmx.gz">95.1k</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Hebrew-Italian (2,328,847 sentence pairs, 27.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-it.tmx.gz">2.3M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Hebrew-Japanese (42,049 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ja.tmx.gz">42.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hebrew-Georgian (1,457 sentence pairs, 15.78k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ka.tmx.gz">1.5k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hebrew-Korean (1,418 sentence pairs, 14.95k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ko.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Luxembourgish (820 sentence pairs, 8.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-lb.tmx.gz">0.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Hebrew-Lithuanian (81,082 sentence pairs, 0.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-lt.tmx.gz">81.1k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Hebrew-Latvian (25,517 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-lv.tmx.gz">25.5k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Hebrew-Macedonian (88,141 sentence pairs, 0.94M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-mk.tmx.gz">88.1k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Hebrew-Malay (83,449 sentence pairs, 0.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ms.tmx.gz">83.4k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Hebrew-Dutch (4,824,349 sentence pairs, 58.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-nl.tmx.gz">4.8M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hebrew-Norwegian (748,761 sentence pairs, 8.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-no.tmx.gz">0.7M</a>
</td><td></td><td bgcolor="#d0ffce"><a rel="nofollow" title='Hebrew-Polish (3,578,938 sentence pairs, 38.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-pl.tmx.gz">3.6M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hebrew-Portuguese (4,600,562 sentence pairs, 54.07M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-pt.tmx.gz">4.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Portuguese (5,578,984 sentence pairs, 65.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-pt_br.tmx.gz">5.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hebrew-Romanian (5,366,282 sentence pairs, 63.95M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ro.tmx.gz">5.4M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Hebrew-Russian (1,407,769 sentence pairs, 15.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-ru.tmx.gz">1.4M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Hebrew-scc (3,546,504 sentence pairs, 40.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-scc.tmx.gz">3.5M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hebrew-scr (2,685 sentence pairs, 29.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-scr.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hebrew-Sinhala (3,764 sentence pairs, 39.47k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-si.tmx.gz">3.8k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Hebrew-Slovak (770,374 sentence pairs, 8.52M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-sk.tmx.gz">0.8M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Hebrew-Slovenian (3,037,393 sentence pairs, 32.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-sl.tmx.gz">3.0M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Hebrew-Albanian (148,885 sentence pairs, 1.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Hebrew-Swedish (2,212,119 sentence pairs, 25.28M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-sv.tmx.gz">2.2M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Hebrew-Thai (8,229 sentence pairs, 56.62k words) - TMX format' href="download.php?f=OpenSubtitles2011/he-th.tmx.gz">8.2k</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hebrew-Turkish (4,804,651 sentence pairs, 49.44M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-tr.tmx.gz">4.8M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Hebrew-Ukrainian (15,189 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-uk.tmx.gz">15.2k</a>
</td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Hebrew-Vietnamese (118,499 sentence pairs, 1.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Hebrew-Chinese (203,834 sentence pairs, 1.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/he-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>hr</th><td>28,339</td> <td>161.0M</td> <td>25.6M</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Croatian-Arabic (1,970,060 sentence pairs, 21.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-hr.txt.zip">2.0M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Bulgarian (4,950,143 sentence pairs, 51.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-hr.txt.zip">5.0M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Croatian-Bosnian (1,107,284 sentence pairs, 11.04M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-hr.txt.zip">1.1M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Croatian-Catalan (13,460 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-hr.txt.zip">13.5k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Czech (5,505,639 sentence pairs, 54.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-hr.txt.zip">5.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Croatian-Danish (1,697,999 sentence pairs, 17.91M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-hr.txt.zip">1.7M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Croatian-German (1,464,440 sentence pairs, 15.85M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-hr.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Croatian-English (9,161,670 sentence pairs, 99.69M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-hr.txt.zip">9.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Esperanto (538 sentence pairs, 6.31k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-hr.txt.zip">0.5k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Croatian-Spanish (6,298,734 sentence pairs, 68.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-hr.txt.zip">6.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Croatian-Estonian (1,649,446 sentence pairs, 16.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-hr.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Persian (680 sentence pairs, 11.78k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-hr.txt.zip">0.7k</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Croatian-Finnish (3,158,606 sentence pairs, 29.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-hr.txt.zip">3.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-French (4,457,877 sentence pairs, 49.55M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-hr.txt.zip">4.5M</a>
</td><td></td><td bgcolor="#d2ffcc"><a rel="nofollow" title='Croatian-Hebrew (3,144,842 sentence pairs, 33.57M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-hr.txt.zip">3.1M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Hungarian (4,068,166 sentence pairs, 42.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-hu.tmx.gz">4.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Croatian-Indonesian (412,094 sentence pairs, 4.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-id.tmx.gz">0.4M</a>
</td><td bgcolor="#faffdb"><a rel="nofollow" title='Croatian-Icelandic (191,948 sentence pairs, 2.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-is.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Croatian-Italian (2,170,454 sentence pairs, 25.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-it.tmx.gz">2.2M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Croatian-Japanese (40,019 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-ja.tmx.gz">40.0k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Korean (826 sentence pairs, 10.49k words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-ko.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Croatian-Luxembourgish (1,452 sentence pairs, 14.61k words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-lb.tmx.gz">1.5k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Croatian-Lithuanian (79,046 sentence pairs, 0.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-lt.tmx.gz">79.0k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Croatian-Latvian (33,452 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-lv.tmx.gz">33.5k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Croatian-Macedonian (127,011 sentence pairs, 1.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Croatian-Malay (85,327 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-ms.tmx.gz">85.3k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Dutch (4,741,313 sentence pairs, 55.83M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-nl.tmx.gz">4.7M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Croatian-Norwegian (888,245 sentence pairs, 9.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-no.tmx.gz">0.9M</a>
</td><td></td><td bgcolor="#d0ffce"><a rel="nofollow" title='Croatian-Polish (3,711,315 sentence pairs, 38.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-pl.tmx.gz">3.7M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Croatian-Portuguese (4,397,291 sentence pairs, 50.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-pt.tmx.gz">4.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-Portuguese (4,884,998 sentence pairs, 55.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-pt_br.tmx.gz">4.9M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Croatian-Romanian (5,278,269 sentence pairs, 61.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-ro.tmx.gz">5.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Croatian-Russian (1,171,166 sentence pairs, 12.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-ru.tmx.gz">1.2M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Croatian-scc (4,646,373 sentence pairs, 52.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-scc.tmx.gz">4.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Croatian-scr (3,577 sentence pairs, 33.82k words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-scr.tmx.gz">3.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Croatian-Sinhala (5,460 sentence pairs, 56.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-si.tmx.gz">5.5k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Croatian-Slovak (765,306 sentence pairs, 8.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-sk.tmx.gz">0.8M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Croatian-Slovenian (3,529,304 sentence pairs, 36.87M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-sl.tmx.gz">3.5M</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Croatian-Albanian (182,299 sentence pairs, 2.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Croatian-Swedish (2,228,257 sentence pairs, 24.75M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-sv.tmx.gz">2.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Croatian-Thai (3,282 sentence pairs, 25.77k words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-th.tmx.gz">3.3k</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='Croatian-Turkish (4,238,439 sentence pairs, 42.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-tr.tmx.gz">4.2M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Croatian-Ukrainian (22,250 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-uk.tmx.gz">22.2k</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Croatian-Vietnamese (119,892 sentence pairs, 1.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Croatian-Chinese (178,671 sentence pairs, 1.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/hr-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>hu</th><td>51,171</td> <td>261.5M</td> <td>43.0M</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Hungarian-Arabic (3,132,761 sentence pairs, 33.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-hu.txt.zip">3.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Bulgarian (7,918,033 sentence pairs, 78.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-hu.txt.zip">7.9M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Bosnian (1,316,318 sentence pairs, 12.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-hu.txt.zip">1.3M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Hungarian-Catalan (19,014 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-hu.txt.zip">19.0k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Hungarian-Czech (8,782,327 sentence pairs, 83.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-hu.txt.zip">8.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Hungarian-Danish (2,438,223 sentence pairs, 24.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-hu.txt.zip">2.4M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Hungarian-German (2,247,566 sentence pairs, 23.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-hu.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Hungarian-English (18,319,874 sentence pairs, 189.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-hu.txt.zip">18.3M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Esperanto (344 sentence pairs, 2.69k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-hu.txt.zip">0.3k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Hungarian-Spanish (11,374,318 sentence pairs, 116.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-hu.txt.zip">11.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Hungarian-Estonian (2,409,156 sentence pairs, 22.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-hu.txt.zip">2.4M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Persian (667 sentence pairs, 11.77k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-hu.txt.zip">0.7k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Hungarian-Finnish (4,750,121 sentence pairs, 41.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-hu.txt.zip">4.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-French (8,419,324 sentence pairs, 89.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-hu.txt.zip">8.4M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-Hebrew (5,367,269 sentence pairs, 54.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-hu.txt.zip">5.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Hungarian-Croatian (4,908,536 sentence pairs, 47.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-hu.txt.zip">4.9M</a>
</td><td></td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Hungarian-Indonesian (615,545 sentence pairs, 6.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-id.tmx.gz">0.6M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Hungarian-Icelandic (254,658 sentence pairs, 2.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-is.tmx.gz">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Hungarian-Italian (3,899,444 sentence pairs, 44.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-it.tmx.gz">3.9M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Hungarian-Japanese (57,242 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-ja.tmx.gz">57.2k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hungarian-Korean (2,065 sentence pairs, 20.03k words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-ko.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Luxembourgish (706 sentence pairs, 6.37k words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-lb.tmx.gz">0.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Hungarian-Lithuanian (107,731 sentence pairs, 0.97M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-lt.tmx.gz">0.1M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Hungarian-Latvian (40,216 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-lv.tmx.gz">40.2k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Hungarian-Macedonian (112,906 sentence pairs, 1.09M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-mk.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Hungarian-Malay (141,598 sentence pairs, 1.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Dutch (7,123,175 sentence pairs, 81.00M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-nl.tmx.gz">7.1M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Norwegian (1,195,794 sentence pairs, 12.20M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-no.tmx.gz">1.2M</a>
</td><td></td><td bgcolor="#cdffcd"><a rel="nofollow" title='Hungarian-Polish (5,038,167 sentence pairs, 50.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-pl.tmx.gz">5.0M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Hungarian-Portuguese (7,082,013 sentence pairs, 78.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-pt.tmx.gz">7.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Hungarian-Portuguese (8,689,668 sentence pairs, 95.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-pt_br.tmx.gz">8.7M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Hungarian-Romanian (8,041,980 sentence pairs, 90.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-ro.tmx.gz">8.0M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Hungarian-Russian (2,003,691 sentence pairs, 21.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-ru.tmx.gz">2.0M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Hungarian-scc (5,237,868 sentence pairs, 55.20M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-scc.tmx.gz">5.2M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hungarian-scr (3,175 sentence pairs, 27.73k words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-scr.tmx.gz">3.2k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Hungarian-Sinhala (11,094 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-si.tmx.gz">11.1k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Hungarian-Slovak (1,237,771 sentence pairs, 13.07M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-sk.tmx.gz">1.2M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Hungarian-Slovenian (4,002,322 sentence pairs, 39.61M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-sl.tmx.gz">4.0M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Hungarian-Albanian (284,642 sentence pairs, 3.00M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Hungarian-Swedish (3,070,298 sentence pairs, 32.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-sv.tmx.gz">3.1M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Hungarian-Thai (8,471 sentence pairs, 60.20k words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-th.tmx.gz">8.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Tagalog (632 sentence pairs, 13.61k words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-tl.tmx.gz">0.6k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Hungarian-Turkish (6,673,356 sentence pairs, 64.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-tr.tmx.gz">6.7M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Hungarian-Ukrainian (34,394 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-uk.tmx.gz">34.4k</a>
</td><td></td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Hungarian-Vietnamese (183,855 sentence pairs, 2.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Hungarian-Chinese (301,561 sentence pairs, 1.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/hu-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>id</th><td>2,887</td> <td>20.6M</td> <td>3.1M</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Indonesian-Arabic (380,489 sentence pairs, 4.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-id.txt.zip">0.4M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Indonesian-Bulgarian (655,367 sentence pairs, 6.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-id.txt.zip">0.7M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Indonesian-Bosnian (137,194 sentence pairs, 1.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-id.txt.zip">0.1M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Indonesian-Catalan (3,615 sentence pairs, 38.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-id.txt.zip">3.6k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Indonesian-Czech (648,533 sentence pairs, 6.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-id.txt.zip">0.6M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Indonesian-Danish (303,261 sentence pairs, 3.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-id.txt.zip">0.3M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Indonesian-German (120,954 sentence pairs, 1.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-id.txt.zip">0.1M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Indonesian-Greek (568,585 sentence pairs, 6.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-id.txt.zip">0.6M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Indonesian-English (1,490,835 sentence pairs, 15.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-id.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Indonesian-Spanish (881,380 sentence pairs, 9.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-id.txt.zip">0.9M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Indonesian-Estonian (340,783 sentence pairs, 3.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-id.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Indonesian-Persian (1,656 sentence pairs, 35.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-id.txt.zip">1.7k</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Indonesian-Finnish (536,257 sentence pairs, 4.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-id.txt.zip">0.5M</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Indonesian-French (599,175 sentence pairs, 6.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-id.txt.zip">0.6M</a>
</td><td></td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Indonesian-Hebrew (395,185 sentence pairs, 4.08M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-id.txt.zip">0.4M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Indonesian-Croatian (465,072 sentence pairs, 4.62M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-id.txt.zip">0.5M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Indonesian-Hungarian (720,160 sentence pairs, 6.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-id.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffe0de"><a rel="nofollow" title='Indonesian-Icelandic (13,229 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-is.tmx.gz">13.2k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Indonesian-Italian (247,826 sentence pairs, 2.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-it.tmx.gz">0.2M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Indonesian-Japanese (20,669 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-ja.tmx.gz">20.7k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Indonesian-Korean (568 sentence pairs, 8.46k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-ko.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Indonesian-Lithuanian (21,433 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-lt.tmx.gz">21.4k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Indonesian-Latvian (6,774 sentence pairs, 69.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-lv.tmx.gz">6.8k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Indonesian-Macedonian (17,865 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-mk.tmx.gz">17.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Indonesian-Malay (109,801 sentence pairs, 1.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-ms.tmx.gz">0.1M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Indonesian-Dutch (671,747 sentence pairs, 7.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-nl.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Indonesian-Norwegian (179,132 sentence pairs, 1.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-no.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#e7ffca"><a rel="nofollow" title='Indonesian-Polish (467,291 sentence pairs, 4.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-pl.tmx.gz">0.5M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Indonesian-Portuguese (687,935 sentence pairs, 7.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-pt.tmx.gz">0.7M</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Indonesian-Portuguese (754,353 sentence pairs, 8.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-pt_br.tmx.gz">0.8M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Indonesian-Romanian (715,770 sentence pairs, 7.99M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-ro.tmx.gz">0.7M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Indonesian-Russian (179,778 sentence pairs, 1.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-ru.tmx.gz">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Indonesian-scc (467,926 sentence pairs, 4.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-scc.tmx.gz">0.5M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Indonesian-scr (3,156 sentence pairs, 32.02k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-scr.tmx.gz">3.2k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Indonesian-Sinhala (6,117 sentence pairs, 68.12k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-si.tmx.gz">6.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Indonesian-Slovak (113,864 sentence pairs, 1.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-sk.tmx.gz">0.1M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Indonesian-Slovenian (478,002 sentence pairs, 4.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-sl.tmx.gz">0.5M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Indonesian-Albanian (112,307 sentence pairs, 1.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Indonesian-Swedish (379,396 sentence pairs, 4.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-sv.tmx.gz">0.4M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Indonesian-Thai (1,825 sentence pairs, 13.37k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-th.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Indonesian-Turkish (571,527 sentence pairs, 5.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-tr.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Indonesian-Ukrainian (6,297 sentence pairs, 60.13k words) - TMX format' href="download.php?f=OpenSubtitles2011/id-uk.tmx.gz">6.3k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Indonesian-Vietnamese (76,599 sentence pairs, 0.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-vi.tmx.gz">76.6k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Indonesian-Chinese (55,228 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/id-zh.tmx.gz">55.2k</a>
</td></tr> <tr><th>is</th><td>576</td> <td>4.7M</td> <td>0.7M</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Icelandic-Arabic (57,900 sentence pairs, 0.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-is.txt.zip">57.9k</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Icelandic-Bulgarian (191,957 sentence pairs, 1.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-is.txt.zip">0.2M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Icelandic-Bosnian (30,788 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-is.txt.zip">30.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Catalan (725 sentence pairs, 6.71k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-is.txt.zip">0.7k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Czech (335,782 sentence pairs, 3.30M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-is.txt.zip">0.3M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Icelandic-Danish (228,347 sentence pairs, 2.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-is.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Icelandic-German (250,659 sentence pairs, 2.68M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-is.txt.zip">0.3M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Icelandic-Greek (208,854 sentence pairs, 2.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-is.txt.zip">0.2M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Icelandic-English (495,117 sentence pairs, 5.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-is.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Icelandic-Spanish (284,784 sentence pairs, 3.05M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-is.txt.zip">0.3M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Icelandic-Estonian (77,425 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-is.txt.zip">77.4k</a>
</td><td></td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Finnish (350,458 sentence pairs, 3.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-is.txt.zip">0.4M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Icelandic-French (254,048 sentence pairs, 2.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-is.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Icelandic-Hebrew (99,898 sentence pairs, 1.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-is.txt.zip">99.9k</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Icelandic-Croatian (211,511 sentence pairs, 2.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-is.txt.zip">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Icelandic-Hungarian (279,672 sentence pairs, 2.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-is.txt.zip">0.3M</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Icelandic-Indonesian (13,863 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-is.txt.zip">13.9k</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Icelandic-Italian (228,937 sentence pairs, 2.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-it.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Japanese (675 sentence pairs, 4.65k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-ja.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Icelandic-Lithuanian (5,129 sentence pairs, 49.51k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-lt.tmx.gz">5.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Icelandic-Latvian (1,747 sentence pairs, 16.75k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-lv.tmx.gz">1.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Icelandic-Macedonian (8,644 sentence pairs, 89.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-mk.tmx.gz">8.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Icelandic-Malay (1,864 sentence pairs, 22.23k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-ms.tmx.gz">1.9k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Dutch (286,114 sentence pairs, 3.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-nl.tmx.gz">0.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Icelandic-Norwegian (260,764 sentence pairs, 2.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-no.tmx.gz">0.3M</a>
</td><td></td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Polish (338,019 sentence pairs, 3.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-pl.tmx.gz">0.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Icelandic-Portuguese (298,852 sentence pairs, 3.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-pt.tmx.gz">0.3M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Icelandic-Portuguese (149,612 sentence pairs, 1.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Icelandic-Romanian (214,800 sentence pairs, 2.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Icelandic-Russian (58,186 sentence pairs, 0.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-ru.tmx.gz">58.2k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Icelandic-scc (164,936 sentence pairs, 1.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-scc.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Sinhala (673 sentence pairs, 7.27k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-si.tmx.gz">0.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Icelandic-Slovak (10,533 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-sk.tmx.gz">10.5k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Icelandic-Slovenian (186,704 sentence pairs, 1.92M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-sl.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Icelandic-Albanian (7,206 sentence pairs, 80.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-sq.tmx.gz">7.2k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Icelandic-Swedish (271,751 sentence pairs, 3.03M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-sv.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Icelandic-Thai (886 sentence pairs, 10.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-th.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Icelandic-Turkish (255,940 sentence pairs, 2.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/is-tr.tmx.gz">0.3M</a>
</td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Icelandic-Vietnamese (6,625 sentence pairs, 86.04k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-vi.tmx.gz">6.6k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Icelandic-Chinese (7,197 sentence pairs, 52.25k words) - TMX format' href="download.php?f=OpenSubtitles2011/is-zh.tmx.gz">7.2k</a>
</td></tr> <tr><th>it</th><td>23,596</td> <td>146.1M</td> <td>19.8M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Italian-Arabic (1,493,478 sentence pairs, 17.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-it.txt.zip">1.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Italian-Bulgarian (4,083,341 sentence pairs, 46.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-it.txt.zip">4.1M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Italian-Bosnian (608,138 sentence pairs, 6.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-it.txt.zip">0.6M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Italian-Catalan (15,610 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-it.txt.zip">15.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Italian-Czech (4,153,276 sentence pairs, 44.75M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-it.txt.zip">4.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Italian-Danish (1,168,232 sentence pairs, 12.91M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-it.txt.zip">1.2M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Italian-German (2,115,364 sentence pairs, 24.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-it.txt.zip">2.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Greek (4,363,918 sentence pairs, 51.75M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-it.txt.zip">4.4M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Italian-English (8,863,198 sentence pairs, 102.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-it.txt.zip">8.9M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Italian-Esperanto (3,425 sentence pairs, 39.80k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-it.txt.zip">3.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Italian-Spanish (5,848,155 sentence pairs, 68.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-it.txt.zip">5.8M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Italian-Estonian (1,105,184 sentence pairs, 11.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-it.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Persian (515 sentence pairs, 9.70k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-it.txt.zip">0.5k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Italian-Finnish (2,402,708 sentence pairs, 23.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-it.txt.zip">2.4M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-French (5,201,882 sentence pairs, 62.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-it.txt.zip">5.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Italian-Galician (3,349 sentence pairs, 35.08k words) - Moses format' href="download.php?f=OpenSubtitles2011/gl-it.txt.zip">3.3k</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Italian-Hebrew (2,643,965 sentence pairs, 30.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-it.txt.zip">2.6M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Italian-Croatian (2,483,014 sentence pairs, 26.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-it.txt.zip">2.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Italian-Hungarian (4,633,621 sentence pairs, 48.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-it.txt.zip">4.6M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Italian-Indonesian (275,652 sentence pairs, 2.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-it.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Italian-Icelandic (256,760 sentence pairs, 2.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-it.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffeae6"><a rel="nofollow" title='Italian-Japanese (31,643 sentence pairs, 0.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-ja.tmx.gz">31.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Korean (1,843 sentence pairs, 21.07k words) - TMX format' href="download.php?f=OpenSubtitles2011/it-ko.tmx.gz">1.8k</a>
</td><td></td><td bgcolor="#fff5ee"><a rel="nofollow" title='Italian-Lithuanian (43,663 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-lt.tmx.gz">43.7k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Italian-Latvian (12,961 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-lv.tmx.gz">13.0k</a>
</td><td bgcolor="#fffcf2"><a rel="nofollow" title='Italian-Macedonian (61,807 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-mk.tmx.gz">61.8k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Italian-Malay (60,732 sentence pairs, 0.68M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-ms.tmx.gz">60.7k</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Italian-Dutch (3,954,169 sentence pairs, 50.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-nl.tmx.gz">4.0M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Italian-Norwegian (799,912 sentence pairs, 9.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-no.tmx.gz">0.8M</a>
</td><td></td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Italian-Polish (2,839,357 sentence pairs, 31.66M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-pl.tmx.gz">2.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Italian-Portuguese (3,761,700 sentence pairs, 46.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-pt.tmx.gz">3.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Italian-Portuguese (4,910,852 sentence pairs, 61.47M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-pt_br.tmx.gz">4.9M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Italian-Romanian (4,220,273 sentence pairs, 53.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-ro.tmx.gz">4.2M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Russian (1,620,210 sentence pairs, 19.65M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-ru.tmx.gz">1.6M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Italian-scc (2,617,422 sentence pairs, 31.01M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-scc.tmx.gz">2.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-scr (1,334 sentence pairs, 14.34k words) - TMX format' href="download.php?f=OpenSubtitles2011/it-scr.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Italian-Sinhala (6,751 sentence pairs, 75.66k words) - TMX format' href="download.php?f=OpenSubtitles2011/it-si.tmx.gz">6.8k</a>
</td><td bgcolor="#e1ffc6"><a rel="nofollow" title='Italian-Slovak (688,331 sentence pairs, 8.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-sk.tmx.gz">0.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Slovenian (1,796,938 sentence pairs, 19.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-sl.tmx.gz">1.8M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Italian-Albanian (118,405 sentence pairs, 1.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-sq.tmx.gz">0.1M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Italian-Swedish (1,684,847 sentence pairs, 19.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-sv.tmx.gz">1.7M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Italian-Thai (3,774 sentence pairs, 34.16k words) - TMX format' href="download.php?f=OpenSubtitles2011/it-th.tmx.gz">3.8k</a>
</td><td></td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Italian-Turkish (3,759,039 sentence pairs, 41.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-tr.tmx.gz">3.8M</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Italian-Ukrainian (12,417 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-uk.tmx.gz">12.4k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Italian-Vietnamese (66,323 sentence pairs, 0.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-vi.tmx.gz">66.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Italian-Chinese (99,288 sentence pairs, 0.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/it-zh.tmx.gz">99.3k</a>
</td></tr> <tr><th>ja</th><td>510</td> <td>0</td> <td>0.4M</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Japanese-Arabic (35,222 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ja.txt.zip">35.2k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Japanese-Bulgarian (56,752 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ja.txt.zip">56.8k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Japanese-Bosnian (19,220 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ja.txt.zip">19.2k</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Japanese-Czech (60,402 sentence pairs, 0.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ja.txt.zip">60.4k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Japanese-Danish (29,372 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-ja.txt.zip">29.4k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Japanese-German (14,555 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-ja.txt.zip">14.6k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Japanese-Greek (63,936 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ja.txt.zip">63.9k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Japanese-English (107,677 sentence pairs, 0.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ja.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-Spanish (67,643 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ja.txt.zip">67.6k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Japanese-Estonian (31,973 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-ja.txt.zip">32.0k</a>
</td><td></td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Japanese-Finnish (45,644 sentence pairs, 0.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ja.txt.zip">45.6k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Japanese-French (57,070 sentence pairs, 0.44M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ja.txt.zip">57.1k</a>
</td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Japanese-Hebrew (43,209 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ja.txt.zip">43.2k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Japanese-Croatian (40,501 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-ja.txt.zip">40.5k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Japanese-Hungarian (58,412 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-ja.txt.zip">58.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Japanese-Indonesian (20,852 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-ja.txt.zip">20.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Icelandic (679 sentence pairs, 4.65k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-ja.txt.zip">0.7k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Japanese-Italian (32,569 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-ja.txt.zip">32.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Japanese-Lithuanian (6,860 sentence pairs, 43.34k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-lt.tmx.gz">6.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Japanese-Latvian (1,213 sentence pairs, 7.13k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-lv.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Macedonian (2,533 sentence pairs, 19.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-mk.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Malay (2,865 sentence pairs, 19.11k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-ms.tmx.gz">2.9k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-Dutch (66,786 sentence pairs, 0.54M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-nl.tmx.gz">66.8k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Japanese-Norwegian (20,893 sentence pairs, 0.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-no.tmx.gz">20.9k</a>
</td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Japanese-Polish (53,114 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-pl.tmx.gz">53.1k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Japanese-Portuguese (64,093 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-pt.tmx.gz">64.1k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Japanese-Portuguese (74,223 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-pt_br.tmx.gz">74.2k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Japanese-Romanian (59,323 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-ro.tmx.gz">59.3k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Japanese-Russian (21,163 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-ru.tmx.gz">21.2k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Japanese-scc (39,576 sentence pairs, 0.29M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-scc.tmx.gz">39.6k</a>
</td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Japanese-Slovak (17,505 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-sk.tmx.gz">17.5k</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Japanese-Slovenian (46,140 sentence pairs, 0.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-sl.tmx.gz">46.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Japanese-Albanian (7,941 sentence pairs, 63.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-sq.tmx.gz">7.9k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Japanese-Swedish (47,304 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-sv.tmx.gz">47.3k</a>
</td><td></td><td></td><td bgcolor="#fff3ed"><a rel="nofollow" title='Japanese-Turkish (66,261 sentence pairs, 0.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-tr.tmx.gz">66.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ukrainian (478 sentence pairs, 3.17k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-uk.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Japanese-Vietnamese (7,846 sentence pairs, 80.22k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-vi.tmx.gz">7.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Chinese (5,457 sentence pairs, 16.48k words) - TMX format' href="download.php?f=OpenSubtitles2011/ja-zh.tmx.gz">5.5k</a>
</td></tr> <tr><th>ka</th><td>60</td> <td>0.4M</td> <td>18.5k</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Arabic (446 sentence pairs, 5.68k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ka.txt.zip">0.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Georgian-Bulgarian (1,345 sentence pairs, 14.32k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ka.txt.zip">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Bosnian (1,143 sentence pairs, 11.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ka.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Georgian-Czech (1,568 sentence pairs, 16.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ka.txt.zip">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Danish (968 sentence pairs, 10.58k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-ka.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Georgian-Greek (1,491 sentence pairs, 18.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ka.txt.zip">1.5k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Georgian-English (1,332 sentence pairs, 23.63k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ka.txt.zip">1.3k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Spanish (1,159 sentence pairs, 11.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ka.txt.zip">1.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Persian (240 sentence pairs, 7.72k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-ka.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Finnish (1,125 sentence pairs, 12.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ka.txt.zip">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-French (1,127 sentence pairs, 12.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ka.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Georgian-Hebrew (1,512 sentence pairs, 15.95k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ka.txt.zip">1.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Dutch (408 sentence pairs, 5.90k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-nl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Norwegian (1,151 sentence pairs, 12.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-no.tmx.gz">1.2k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Georgian-Polish (1,432 sentence pairs, 17.14k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-pl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Portuguese (1,107 sentence pairs, 11.73k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-pt.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Romanian (1,004 sentence pairs, 11.07k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-ro.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-scc (564 sentence pairs, 8.58k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-scc.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Slovenian (1,039 sentence pairs, 9.24k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-sl.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Albanian (406 sentence pairs, 5.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-sq.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Swedish (1,072 sentence pairs, 11.08k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-sv.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Georgian-Ukrainian (203 sentence pairs, 13.04k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-uk.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Vietnamese (405 sentence pairs, 6.39k words) - TMX format' href="download.php?f=OpenSubtitles2011/ka-vi.tmx.gz">0.4k</a>
</td><td></td></tr> <tr><th>kk</th><td>1</td> <td>6.3k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-English (1,101 sentence pairs, 10.79k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-kk.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Portuguese (1,039 sentence pairs, 9.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/kk-pt.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Kazakh-Romanian (1,048 sentence pairs, 9.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/kk-ro.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>ko</th><td>27</td> <td>0.1M</td> <td>29.9k</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-Arabic (3,036 sentence pairs, 32.85k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ko.txt.zip">3.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Bulgarian (2,108 sentence pairs, 16.44k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ko.txt.zip">2.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Bosnian (426 sentence pairs, 4.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ko.txt.zip">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Catalan (599 sentence pairs, 9.63k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-ko.txt.zip">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Czech (1,627 sentence pairs, 17.79k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ko.txt.zip">1.6k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-German (2,425 sentence pairs, 30.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-ko.txt.zip">2.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-Greek (3,044 sentence pairs, 38.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ko.txt.zip">3.0k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Korean-English (5,592 sentence pairs, 61.37k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ko.txt.zip">5.6k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Spanish (1,949 sentence pairs, 22.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ko.txt.zip">1.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Finnish (2,106 sentence pairs, 15.99k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ko.txt.zip">2.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Korean-French (3,978 sentence pairs, 43.74k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ko.txt.zip">4.0k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Hebrew (1,470 sentence pairs, 15.47k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ko.txt.zip">1.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Croatian (836 sentence pairs, 10.51k words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-ko.txt.zip">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Hungarian (2,105 sentence pairs, 20.14k words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-ko.txt.zip">2.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-Indonesian (604 sentence pairs, 8.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-ko.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Italian (1,882 sentence pairs, 21.21k words) - Moses format' href="download.php?f=OpenSubtitles2011/it-ko.txt.zip">1.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Dutch (455 sentence pairs, 4.68k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-nl.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Korean-Polish (1,369 sentence pairs, 17.91k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-pl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Korean-Portuguese (1,884 sentence pairs, 24.45k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-pt.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-Portuguese (3,004 sentence pairs, 30.07k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-pt_br.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Korean-Romanian (2,619 sentence pairs, 32.93k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-ro.tmx.gz">2.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-scc (1,384 sentence pairs, 12.36k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-scc.tmx.gz">1.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Slovenian (400 sentence pairs, 3.45k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-sl.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Turkish (380 sentence pairs, 3.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/ko-tr.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>lb</th><td>3</td> <td>19.5k</td> <td>3.0k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Arabic (854 sentence pairs, 8.70k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-lb.txt.zip">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Bulgarian (1,639 sentence pairs, 16.45k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-lb.txt.zip">1.6k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Czech (1,647 sentence pairs, 17.65k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-lb.txt.zip">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Danish (961 sentence pairs, 10.05k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-lb.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-German (869 sentence pairs, 9.15k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-lb.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-English (1,898 sentence pairs, 18.41k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-lb.txt.zip">1.9k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Spanish (1,756 sentence pairs, 17.08k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-lb.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Luxembourgish-Finnish (724 sentence pairs, 6.23k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-lb.txt.zip">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Luxembourgish-French (2,736 sentence pairs, 28.88k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-lb.txt.zip">2.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Hebrew (843 sentence pairs, 8.82k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-lb.txt.zip">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Croatian (1,527 sentence pairs, 14.84k words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-lb.txt.zip">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Luxembourgish-Hungarian (789 sentence pairs, 6.57k words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-lb.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Norwegian (719 sentence pairs, 7.42k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-no.tmx.gz">0.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Polish (857 sentence pairs, 8.58k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-pl.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Portuguese (1,633 sentence pairs, 16.80k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-pt.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-Portuguese (1,619 sentence pairs, 16.50k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-pt_br.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Luxembourgish-Romanian (679 sentence pairs, 7.01k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-ro.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Luxembourgish-Russian (785 sentence pairs, 6.81k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-ru.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Luxembourgish-scc (1,580 sentence pairs, 15.50k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-scc.tmx.gz">1.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Luxembourgish-Slovenian (739 sentence pairs, 6.98k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-sl.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Luxembourgish-Turkish (766 sentence pairs, 6.65k words) - TMX format' href="download.php?f=OpenSubtitles2011/lb-tr.tmx.gz">0.8k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>lt</th><td>660</td> <td>3.8M</td> <td>0.6M</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Lithuanian-Arabic (65,112 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-lt.txt.zip">65.1k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Lithuanian-Bulgarian (112,011 sentence pairs, 1.05M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-lt.txt.zip">0.1M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Lithuanian-Bosnian (28,947 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-lt.txt.zip">28.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Lithuanian-Catalan (2,714 sentence pairs, 26.15k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-lt.txt.zip">2.7k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Lithuanian-Czech (139,046 sentence pairs, 1.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-lt.txt.zip">0.1M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Lithuanian-Danish (69,503 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-lt.txt.zip">69.5k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Lithuanian-German (44,688 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-lt.txt.zip">44.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Lithuanian-Greek (100,350 sentence pairs, 0.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-lt.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Lithuanian-English (229,927 sentence pairs, 2.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-lt.txt.zip">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Esperanto (340 sentence pairs, 2.72k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-lt.txt.zip">0.3k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Lithuanian-Spanish (163,445 sentence pairs, 1.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-lt.txt.zip">0.2M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Lithuanian-Estonian (72,099 sentence pairs, 0.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-lt.txt.zip">72.1k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lithuanian-Persian (654 sentence pairs, 14.33k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-lt.txt.zip">0.7k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Lithuanian-Finnish (119,077 sentence pairs, 1.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-lt.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Lithuanian-French (112,283 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-lt.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Lithuanian-Hebrew (85,931 sentence pairs, 0.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-lt.txt.zip">85.9k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Lithuanian-Croatian (83,569 sentence pairs, 0.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-lt.txt.zip">83.6k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Lithuanian-Hungarian (114,348 sentence pairs, 1.00M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-lt.txt.zip">0.1M</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Lithuanian-Indonesian (22,562 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-lt.txt.zip">22.6k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Lithuanian-Icelandic (5,300 sentence pairs, 50.18k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-lt.txt.zip">5.3k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Lithuanian-Italian (45,465 sentence pairs, 0.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-lt.txt.zip">45.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Lithuanian-Japanese (6,911 sentence pairs, 43.45k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-lt.txt.zip">6.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Lithuanian-Latvian (12,149 sentence pairs, 0.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-lv.tmx.gz">12.1k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Lithuanian-Macedonian (6,172 sentence pairs, 60.14k words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-mk.tmx.gz">6.2k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Lithuanian-Malay (9,557 sentence pairs, 92.35k words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-ms.tmx.gz">9.6k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Lithuanian-Dutch (124,961 sentence pairs, 1.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-nl.tmx.gz">0.1M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Lithuanian-Norwegian (39,422 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-no.tmx.gz">39.4k</a>
</td><td></td><td bgcolor="#ffffee"><a rel="nofollow" title='Lithuanian-Polish (121,559 sentence pairs, 1.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Lithuanian-Portuguese (120,916 sentence pairs, 1.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-pt.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Lithuanian-Portuguese (137,102 sentence pairs, 1.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Lithuanian-Romanian (111,410 sentence pairs, 1.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-ro.tmx.gz">0.1M</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Lithuanian-Russian (55,453 sentence pairs, 0.53M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-ru.tmx.gz">55.5k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Lithuanian-scc (93,479 sentence pairs, 0.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-scc.tmx.gz">93.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Sinhala (761 sentence pairs, 6.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-si.tmx.gz">0.8k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Lithuanian-Slovak (24,645 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-sk.tmx.gz">24.6k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Lithuanian-Slovenian (100,503 sentence pairs, 0.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lithuanian-Albanian (10,094 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-sq.tmx.gz">10.1k</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Lithuanian-Swedish (81,897 sentence pairs, 0.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-sv.tmx.gz">81.9k</a>
</td><td></td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Lithuanian-Turkish (117,687 sentence pairs, 1.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-tr.tmx.gz">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Lithuanian-Vietnamese (9,236 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-vi.tmx.gz">9.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Lithuanian-Chinese (6,787 sentence pairs, 41.20k words) - TMX format' href="download.php?f=OpenSubtitles2011/lt-zh.tmx.gz">6.8k</a>
</td></tr> <tr><th>lv</th><td>176</td> <td>1.1M</td> <td>0.2M</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Latvian-Arabic (17,204 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-lv.txt.zip">17.2k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Latvian-Bulgarian (36,851 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-lv.txt.zip">36.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Latvian-Bosnian (7,923 sentence pairs, 76.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-lv.txt.zip">7.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Catalan (1,592 sentence pairs, 14.27k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-lv.txt.zip">1.6k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Latvian-Czech (46,474 sentence pairs, 0.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-lv.txt.zip">46.5k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Latvian-Danish (31,054 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-lv.txt.zip">31.1k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Latvian-German (16,206 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-lv.txt.zip">16.2k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Latvian-Greek (32,571 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-lv.txt.zip">32.6k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Latvian-English (77,826 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-lv.txt.zip">77.8k</a>
</td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Latvian-Spanish (59,411 sentence pairs, 0.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-lv.txt.zip">59.4k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Latvian-Estonian (33,402 sentence pairs, 0.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-lv.txt.zip">33.4k</a>
</td><td></td><td></td><td bgcolor="#ffede9"><a rel="nofollow" title='Latvian-Finnish (32,911 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-lv.txt.zip">32.9k</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Latvian-French (46,867 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-lv.txt.zip">46.9k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Latvian-Hebrew (26,214 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-lv.txt.zip">26.2k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Latvian-Croatian (34,936 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-lv.txt.zip">34.9k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Latvian-Hungarian (41,952 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-lv.txt.zip">42.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Latvian-Indonesian (6,952 sentence pairs, 70.47k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-lv.txt.zip">7.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latvian-Icelandic (1,775 sentence pairs, 16.90k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-lv.txt.zip">1.8k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Latvian-Italian (13,451 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-lv.txt.zip">13.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Japanese (1,218 sentence pairs, 7.15k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-lv.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Latvian-Lithuanian (13,469 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-lv.txt.zip">13.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Macedonian (794 sentence pairs, 6.35k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-mk.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Malay (941 sentence pairs, 8.50k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-ms.tmx.gz">0.9k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Latvian-Dutch (45,827 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-nl.tmx.gz">45.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Latvian-Norwegian (20,765 sentence pairs, 0.21M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-no.tmx.gz">20.8k</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Latvian-Polish (33,826 sentence pairs, 0.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-pl.tmx.gz">33.8k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Latvian-Portuguese (37,478 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-pt.tmx.gz">37.5k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Latvian-Portuguese (44,250 sentence pairs, 0.48M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-pt_br.tmx.gz">44.2k</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Latvian-Romanian (47,550 sentence pairs, 0.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-ro.tmx.gz">47.5k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Latvian-Russian (18,900 sentence pairs, 0.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-ru.tmx.gz">18.9k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Latvian-scc (41,092 sentence pairs, 0.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-scc.tmx.gz">41.1k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Latvian-Slovak (6,746 sentence pairs, 69.52k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-sk.tmx.gz">6.7k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Latvian-Slovenian (37,497 sentence pairs, 0.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-sl.tmx.gz">37.5k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Latvian-Albanian (7,698 sentence pairs, 81.14k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-sq.tmx.gz">7.7k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Latvian-Swedish (32,385 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-sv.tmx.gz">32.4k</a>
</td><td></td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Latvian-Turkish (38,717 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-tr.tmx.gz">38.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-Ukrainian (1,333 sentence pairs, 11.96k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-uk.tmx.gz">1.3k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Vietnamese (3,312 sentence pairs, 40.17k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-vi.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Latvian-Chinese (6,373 sentence pairs, 43.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/lv-zh.tmx.gz">6.4k</a>
</td></tr> <tr><th>mk</th><td>845</td> <td>5.7M</td> <td>0.9M</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Macedonian-Arabic (67,784 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-mk.txt.zip">67.8k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Macedonian-Bulgarian (170,529 sentence pairs, 1.74M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-mk.txt.zip">0.2M</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Macedonian-Bosnian (19,542 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-mk.txt.zip">19.5k</a>
</td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Macedonian-Czech (153,643 sentence pairs, 1.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-mk.txt.zip">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Macedonian-Danish (85,729 sentence pairs, 0.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-mk.txt.zip">85.7k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Macedonian-German (44,637 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-mk.txt.zip">44.6k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Macedonian-Greek (127,682 sentence pairs, 1.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-mk.txt.zip">0.1M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Macedonian-English (239,867 sentence pairs, 2.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-mk.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='Macedonian-Spanish (172,175 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-mk.txt.zip">0.2M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Macedonian-Estonian (77,951 sentence pairs, 0.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-mk.txt.zip">78.0k</a>
</td><td></td><td></td><td bgcolor="#ffffed"><a rel="nofollow" title='Macedonian-Finnish (124,145 sentence pairs, 1.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-mk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Macedonian-French (110,464 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-mk.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='Macedonian-Hebrew (94,650 sentence pairs, 0.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-mk.txt.zip">94.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Macedonian-Croatian (140,292 sentence pairs, 1.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-mk.txt.zip">0.1M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Macedonian-Hungarian (124,927 sentence pairs, 1.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-mk.txt.zip">0.1M</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Macedonian-Indonesian (19,031 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-mk.txt.zip">19.0k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Macedonian-Icelandic (9,028 sentence pairs, 90.69k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-mk.txt.zip">9.0k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Macedonian-Italian (65,911 sentence pairs, 0.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-mk.txt.zip">65.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Macedonian-Japanese (2,535 sentence pairs, 19.29k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-mk.txt.zip">2.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Macedonian-Lithuanian (6,348 sentence pairs, 60.66k words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-mk.txt.zip">6.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Latvian (818 sentence pairs, 6.45k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-mk.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Macedonian-Malay (9,431 sentence pairs, 0.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-ms.tmx.gz">9.4k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Macedonian-Dutch (136,026 sentence pairs, 1.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-nl.tmx.gz">0.1M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Macedonian-Norwegian (44,151 sentence pairs, 0.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-no.tmx.gz">44.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Occitan (post 1500) (350 sentence pairs, 2.85k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-oc.tmx.gz">0.3k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Macedonian-Polish (146,662 sentence pairs, 1.49M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Macedonian-Portuguese (150,867 sentence pairs, 1.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Macedonian-Portuguese (133,045 sentence pairs, 1.46M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-pt_br.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Macedonian-Romanian (155,961 sentence pairs, 1.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Macedonian-Russian (34,289 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-ru.tmx.gz">34.3k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Macedonian-scc (158,143 sentence pairs, 1.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-scc.tmx.gz">0.2M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Macedonian-Sinhala (1,025 sentence pairs, 12.08k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-si.tmx.gz">1.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Macedonian-Slovak (32,993 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-sk.tmx.gz">33.0k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Macedonian-Slovenian (137,769 sentence pairs, 1.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Macedonian-Albanian (15,000 sentence pairs, 0.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-sq.tmx.gz">15.0k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Macedonian-Swedish (97,319 sentence pairs, 1.08M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-sv.tmx.gz">97.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Macedonian-Thai (895 sentence pairs, 4.81k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-th.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Macedonian-Turkish (131,171 sentence pairs, 1.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Macedonian-Ukrainian (1,051 sentence pairs, 11.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-uk.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Macedonian-Vietnamese (5,451 sentence pairs, 66.14k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-vi.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Macedonian-Chinese (8,099 sentence pairs, 58.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/mk-zh.tmx.gz">8.1k</a>
</td></tr> <tr><th>ms</th><td>622</td> <td>4.5M</td> <td>0.6M</td><td bgcolor="#fffef0"><a rel="nofollow" title='Malay-Arabic (78,749 sentence pairs, 0.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ms.txt.zip">78.7k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Malay-Bulgarian (153,104 sentence pairs, 1.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ms.txt.zip">0.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Malay-Bosnian (38,356 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ms.txt.zip">38.4k</a>
</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Malay-Czech (142,094 sentence pairs, 1.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ms.txt.zip">0.1M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Malay-Danish (75,150 sentence pairs, 0.80M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-ms.txt.zip">75.2k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Malay-German (30,562 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-ms.txt.zip">30.6k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Malay-Greek (128,716 sentence pairs, 1.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ms.txt.zip">0.1M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Malay-English (298,979 sentence pairs, 3.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ms.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Malay-Spanish (168,744 sentence pairs, 1.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ms.txt.zip">0.2M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Malay-Estonian (84,060 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-ms.txt.zip">84.1k</a>
</td><td></td><td></td><td bgcolor="#ffffec"><a rel="nofollow" title='Malay-Finnish (132,021 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ms.txt.zip">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Malay-French (125,478 sentence pairs, 1.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ms.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Malay-Hebrew (90,621 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ms.txt.zip">90.6k</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Malay-Croatian (93,578 sentence pairs, 0.95M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-ms.txt.zip">93.6k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Malay-Hungarian (156,900 sentence pairs, 1.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-ms.txt.zip">0.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malay-Indonesian (128,081 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-ms.txt.zip">0.1M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Malay-Icelandic (1,872 sentence pairs, 22.26k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-ms.txt.zip">1.9k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Malay-Italian (65,162 sentence pairs, 0.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-ms.txt.zip">65.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malay-Japanese (2,973 sentence pairs, 19.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-ms.txt.zip">3.0k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffdbda"><a rel="nofollow" title='Malay-Lithuanian (9,975 sentence pairs, 93.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-ms.txt.zip">10.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Malay-Latvian (1,027 sentence pairs, 8.79k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-ms.txt.zip">1.0k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Malay-Macedonian (10,408 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-ms.txt.zip">10.4k</a>
</td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='Malay-Dutch (163,429 sentence pairs, 1.86M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-nl.tmx.gz">0.2M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Malay-Norwegian (42,051 sentence pairs, 0.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-no.tmx.gz">42.1k</a>
</td><td></td><td bgcolor="#ffffef"><a rel="nofollow" title='Malay-Polish (105,714 sentence pairs, 1.06M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-pl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Malay-Portuguese (155,671 sentence pairs, 1.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-pt.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Malay-Portuguese (165,421 sentence pairs, 1.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-pt_br.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Malay-Romanian (161,809 sentence pairs, 1.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-ro.tmx.gz">0.2M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Malay-Russian (53,110 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-ru.tmx.gz">53.1k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Malay-scc (118,206 sentence pairs, 1.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-scc.tmx.gz">0.1M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Malay-Sinhala (1,849 sentence pairs, 18.53k words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-si.tmx.gz">1.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Malay-Slovak (32,060 sentence pairs, 0.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-sk.tmx.gz">32.1k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Malay-Slovenian (112,224 sentence pairs, 1.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-sl.tmx.gz">0.1M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Malay-Albanian (29,852 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-sq.tmx.gz">29.9k</a>
</td><td bgcolor="#ffffef"><a rel="nofollow" title='Malay-Swedish (94,072 sentence pairs, 1.04M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-sv.tmx.gz">94.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malay-Thai (830 sentence pairs, 5.88k words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-th.tmx.gz">0.8k</a>
</td><td></td><td bgcolor="#ffffe8"><a rel="nofollow" title='Malay-Turkish (149,459 sentence pairs, 1.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-tr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Malay-Ukrainian (3,132 sentence pairs, 29.92k words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-uk.tmx.gz">3.1k</a>
</td><td></td><td bgcolor="#fff2ed"><a rel="nofollow" title='Malay-Vietnamese (29,968 sentence pairs, 0.37M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-vi.tmx.gz">30.0k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Malay-Chinese (24,311 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/ms-zh.tmx.gz">24.3k</a>
</td></tr> <tr><th>nl</th><td>60,570</td> <td>382.3M</td> <td>52.9M</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Dutch-Arabic (3,423,459 sentence pairs, 41.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-nl.txt.zip">3.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Dutch-Bulgarian (8,666,366 sentence pairs, 98.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-nl.txt.zip">8.7M</a>
</td><td bgcolor="#dbffc7"><a rel="nofollow" title='Dutch-Bosnian (1,428,130 sentence pairs, 16.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-nl.txt.zip">1.4M</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='Dutch-Catalan (23,475 sentence pairs, 0.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-nl.txt.zip">23.5k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Czech (10,038,573 sentence pairs, 109.74M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-nl.txt.zip">10.0M</a>
</td><td bgcolor="#d1ffcf"><a rel="nofollow" title='Dutch-Danish (3,364,131 sentence pairs, 38.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-nl.txt.zip">3.4M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Dutch-German (2,727,284 sentence pairs, 32.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-nl.txt.zip">2.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Greek (9,367,825 sentence pairs, 111.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-nl.txt.zip">9.4M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-English (21,066,129 sentence pairs, 249.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-nl.txt.zip">21.1M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Dutch-Spanish (13,514,545 sentence pairs, 158.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-nl.txt.zip">13.5M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Dutch-Estonian (2,618,059 sentence pairs, 28.54M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-nl.txt.zip">2.6M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-Persian (1,255 sentence pairs, 27.03k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-nl.txt.zip">1.3k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Finnish (6,314,229 sentence pairs, 63.80M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-nl.txt.zip">6.3M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-French (9,829,907 sentence pairs, 117.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-nl.txt.zip">9.8M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Dutch-Hebrew (6,140,972 sentence pairs, 71.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-nl.txt.zip">6.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Dutch-Croatian (5,921,461 sentence pairs, 65.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-nl.txt.zip">5.9M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Hungarian (10,002,291 sentence pairs, 106.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-nl.txt.zip">10.0M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Dutch-Indonesian (802,212 sentence pairs, 8.74M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-nl.txt.zip">0.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Dutch-Icelandic (317,993 sentence pairs, 3.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-nl.txt.zip">0.3M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Dutch-Italian (4,842,676 sentence pairs, 57.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-nl.txt.zip">4.8M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Dutch-Japanese (69,482 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-nl.txt.zip">69.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Georgian (443 sentence pairs, 6.04k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-nl.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Korean (472 sentence pairs, 4.81k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-nl.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Dutch-Lithuanian (132,437 sentence pairs, 1.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-nl.txt.zip">0.1M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Dutch-Latvian (47,800 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-nl.txt.zip">47.8k</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Dutch-Macedonian (151,929 sentence pairs, 1.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-nl.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Dutch-Malay (181,811 sentence pairs, 1.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-nl.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Dutch-Norwegian (1,616,894 sentence pairs, 18.89M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-no.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Occitan (post 1500) (364 sentence pairs, 3.09k words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-oc.tmx.gz">0.4k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Dutch-Polish (5,997,347 sentence pairs, 68.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-pl.tmx.gz">6.0M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Dutch-Portuguese (8,393,419 sentence pairs, 104.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-pt.tmx.gz">8.4M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Dutch-Portuguese (9,080,468 sentence pairs, 113.03M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-pt_br.tmx.gz">9.1M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Dutch-Romanian (9,080,588 sentence pairs, 114.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-ro.tmx.gz">9.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Dutch-Russian (1,933,782 sentence pairs, 23.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-ru.tmx.gz">1.9M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Dutch-scc (5,927,223 sentence pairs, 71.06M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-scc.tmx.gz">5.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-scr (1,895 sentence pairs, 19.73k words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-scr.tmx.gz">1.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Dutch-Sinhala (8,006 sentence pairs, 92.56k words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-si.tmx.gz">8.0k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Dutch-Slovak (1,126,579 sentence pairs, 13.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Dutch-Slovenian (4,967,886 sentence pairs, 56.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Dutch-Albanian (293,922 sentence pairs, 3.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Dutch-Swedish (3,982,756 sentence pairs, 48.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-sv.tmx.gz">4.0M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Dutch-Thai (8,866 sentence pairs, 75.51k words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-th.tmx.gz">8.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Tagalog (540 sentence pairs, 13.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Dutch-Turkish (7,274,206 sentence pairs, 80.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-tr.tmx.gz">7.3M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Dutch-Ukrainian (30,054 sentence pairs, 0.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-uk.tmx.gz">30.1k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Dutch-Vietnamese (204,205 sentence pairs, 2.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Dutch-Chinese (345,479 sentence pairs, 2.74M words) - TMX format' href="download.php?f=OpenSubtitles2011/nl-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>no</th><td>4,621</td> <td>31.0M</td> <td>4.7M</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Norwegian-Arabic (507,956 sentence pairs, 5.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-no.txt.zip">0.5M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Norwegian-Bulgarian (1,202,143 sentence pairs, 12.61M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-no.txt.zip">1.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Norwegian-Bosnian (222,145 sentence pairs, 2.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-no.txt.zip">0.2M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Norwegian-Catalan (7,857 sentence pairs, 87.15k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-no.txt.zip">7.9k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Norwegian-Czech (1,535,394 sentence pairs, 15.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-no.txt.zip">1.5M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Norwegian-Danish (1,524,695 sentence pairs, 16.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-no.txt.zip">1.5M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Norwegian-German (863,321 sentence pairs, 9.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-no.txt.zip">0.9M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Norwegian-Greek (1,278,456 sentence pairs, 14.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-no.txt.zip">1.3M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Norwegian-English (2,525,328 sentence pairs, 28.00M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-no.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Norwegian-Spanish (1,771,623 sentence pairs, 19.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-no.txt.zip">1.8M</a>
</td><td bgcolor="#e5ffc8"><a rel="nofollow" title='Norwegian-Estonian (543,611 sentence pairs, 5.54M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-no.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Norwegian-Persian (1,162 sentence pairs, 24.72k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-no.txt.zip">1.2k</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Norwegian-Finnish (1,914,586 sentence pairs, 17.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-no.txt.zip">1.9M</a>
</td><td bgcolor="#daffc7"><a rel="nofollow" title='Norwegian-French (1,535,383 sentence pairs, 17.06M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-no.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Norwegian-Hebrew (827,058 sentence pairs, 9.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-no.txt.zip">0.8M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Norwegian-Croatian (1,001,545 sentence pairs, 10.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-no.txt.zip">1.0M</a>
</td><td bgcolor="#ddffc7"><a rel="nofollow" title='Norwegian-Hungarian (1,361,588 sentence pairs, 13.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-no.txt.zip">1.4M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Norwegian-Indonesian (189,744 sentence pairs, 1.95M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-no.txt.zip">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Norwegian-Icelandic (299,259 sentence pairs, 3.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-no.txt.zip">0.3M</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Norwegian-Italian (916,377 sentence pairs, 9.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-no.txt.zip">0.9M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Norwegian-Japanese (21,026 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-no.txt.zip">21.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian-Georgian (1,175 sentence pairs, 13.03k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-no.txt.zip">1.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian-Luxembourgish (784 sentence pairs, 7.61k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-no.txt.zip">0.8k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Norwegian-Lithuanian (40,511 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-no.txt.zip">40.5k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Norwegian-Latvian (21,518 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-no.txt.zip">21.5k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Norwegian-Macedonian (46,496 sentence pairs, 0.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-no.txt.zip">46.5k</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Norwegian-Malay (43,634 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-no.txt.zip">43.6k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Norwegian-Dutch (1,894,168 sentence pairs, 21.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-no.txt.zip">1.9M</a>
</td><td></td><td></td><td bgcolor="#dcffc6"><a rel="nofollow" title='Norwegian-Polish (1,281,857 sentence pairs, 13.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-pl.tmx.gz">1.3M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Norwegian-Portuguese (1,423,249 sentence pairs, 16.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-pt.tmx.gz">1.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Norwegian-Portuguese (1,187,754 sentence pairs, 13.44M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-pt_br.tmx.gz">1.2M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Norwegian-Romanian (1,317,908 sentence pairs, 15.12M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-ro.tmx.gz">1.3M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Norwegian-Russian (319,968 sentence pairs, 3.44M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-ru.tmx.gz">0.3M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Norwegian-scc (951,125 sentence pairs, 10.46M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-scc.tmx.gz">1.0M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Norwegian-scr (2,240 sentence pairs, 21.09k words) - TMX format' href="download.php?f=OpenSubtitles2011/no-scr.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Norwegian-Sinhala (1,150 sentence pairs, 13.55k words) - TMX format' href="download.php?f=OpenSubtitles2011/no-si.tmx.gz">1.1k</a>
</td><td bgcolor="#fcffdd"><a rel="nofollow" title='Norwegian-Slovak (184,281 sentence pairs, 2.00M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-sk.tmx.gz">0.2M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Norwegian-Slovenian (1,045,383 sentence pairs, 10.91M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-sl.tmx.gz">1.0M</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Norwegian-Albanian (68,196 sentence pairs, 0.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-sq.tmx.gz">68.2k</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Norwegian-Swedish (1,638,706 sentence pairs, 18.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-sv.tmx.gz">1.6M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Norwegian-Thai (4,006 sentence pairs, 32.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/no-th.tmx.gz">4.0k</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Norwegian-Turkish (1,183,735 sentence pairs, 11.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Norwegian-Ukrainian (8,732 sentence pairs, 88.21k words) - TMX format' href="download.php?f=OpenSubtitles2011/no-uk.tmx.gz">8.7k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Norwegian-Vietnamese (72,746 sentence pairs, 0.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-vi.tmx.gz">72.7k</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Norwegian-Chinese (74,474 sentence pairs, 0.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/no-zh.tmx.gz">74.5k</a>
</td></tr> <tr><th>oc</th><td>1</td> <td>2.8k</td> <td>0.6k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Czech (472 sentence pairs, 3.14k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-oc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Spanish (402 sentence pairs, 3.17k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-oc.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Finnish (440 sentence pairs, 2.87k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-oc.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-French (553 sentence pairs, 4.10k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-oc.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Macedonian (461 sentence pairs, 3.17k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-oc.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Dutch (460 sentence pairs, 3.39k words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-oc.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Portuguese (379 sentence pairs, 3.25k words) - TMX format' href="download.php?f=OpenSubtitles2011/oc-pt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Portuguese (360 sentence pairs, 2.96k words) - TMX format' href="download.php?f=OpenSubtitles2011/oc-pt_br.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Romanian (389 sentence pairs, 3.29k words) - TMX format' href="download.php?f=OpenSubtitles2011/oc-ro.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th>pl</th><td>142,085</td> <td>770.6M</td> <td>124.0M</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Polish-Arabic (2,249,745 sentence pairs, 24.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-pl.txt.zip">2.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Polish-Bulgarian (6,814,072 sentence pairs, 68.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-pl.txt.zip">6.8M</a>
</td><td bgcolor="#dfffc7"><a rel="nofollow" title='Polish-Bosnian (1,080,297 sentence pairs, 10.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-pl.txt.zip">1.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Polish-Catalan (29,568 sentence pairs, 0.30M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-pl.txt.zip">29.6k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Czech (9,791,835 sentence pairs, 93.55M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-pl.txt.zip">9.8M</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Polish-Danish (2,400,328 sentence pairs, 24.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-pl.txt.zip">2.4M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Polish-German (2,114,958 sentence pairs, 21.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-pl.txt.zip">2.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Polish-Greek (6,551,993 sentence pairs, 68.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-pl.txt.zip">6.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Polish-English (16,683,584 sentence pairs, 176.72M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-pl.txt.zip">16.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Esperanto (907 sentence pairs, 9.57k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-pl.txt.zip">0.9k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Spanish (9,019,403 sentence pairs, 94.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-pl.txt.zip">9.0M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Polish-Estonian (2,160,152 sentence pairs, 20.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-pl.txt.zip">2.2M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Polish-Persian (1,002 sentence pairs, 21.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-pl.txt.zip">1.0k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Polish-Finnish (6,561,912 sentence pairs, 58.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-pl.txt.zip">6.6M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-French (6,109,535 sentence pairs, 65.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-pl.txt.zip">6.1M</a>
</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Polish-Hebrew (4,496,822 sentence pairs, 46.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-pl.txt.zip">4.5M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Polish-Croatian (4,684,607 sentence pairs, 45.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-pl.txt.zip">4.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Hungarian (6,760,481 sentence pairs, 63.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-pl.txt.zip">6.8M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Polish-Indonesian (535,711 sentence pairs, 5.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-pl.txt.zip">0.5M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Polish-Icelandic (377,030 sentence pairs, 3.68M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-pl.txt.zip">0.4M</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='Polish-Italian (3,378,045 sentence pairs, 35.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-pl.txt.zip">3.4M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Polish-Japanese (54,392 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-pl.txt.zip">54.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Georgian (1,441 sentence pairs, 17.18k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-pl.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Korean (1,405 sentence pairs, 18.32k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-pl.txt.zip">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Luxembourgish (893 sentence pairs, 8.73k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-pl.txt.zip">0.9k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Polish-Lithuanian (132,391 sentence pairs, 1.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-pl.txt.zip">0.1M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Polish-Latvian (35,900 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-pl.txt.zip">35.9k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Polish-Macedonian (164,505 sentence pairs, 1.62M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-pl.txt.zip">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Polish-Malay (116,521 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-pl.txt.zip">0.1M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Polish-Dutch (8,940,043 sentence pairs, 95.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-pl.txt.zip">8.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Polish-Norwegian (1,492,007 sentence pairs, 14.85M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-pl.txt.zip">1.5M</a>
</td><td></td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Polish-Portuguese (5,645,219 sentence pairs, 62.61M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-pt.tmx.gz">5.6M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Polish-Portuguese (6,096,092 sentence pairs, 67.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-pt_br.tmx.gz">6.1M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Polish-Romanian (6,974,322 sentence pairs, 78.81M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-ro.tmx.gz">7.0M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Polish-Russian (1,285,127 sentence pairs, 13.57M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-ru.tmx.gz">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Polish-scc (4,559,315 sentence pairs, 48.75M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-scc.tmx.gz">4.6M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-scr (2,215 sentence pairs, 20.74k words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-scr.tmx.gz">2.2k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Polish-Sinhala (8,026 sentence pairs, 80.20k words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-si.tmx.gz">8.0k</a>
</td><td bgcolor="#e0ffc7"><a rel="nofollow" title='Polish-Slovak (923,174 sentence pairs, 9.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Polish-Slovenian (3,983,350 sentence pairs, 40.10M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-sl.tmx.gz">4.0M</a>
</td><td bgcolor="#efffd0"><a rel="nofollow" title='Polish-Albanian (241,327 sentence pairs, 2.60M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffcb"><a rel="nofollow" title='Polish-Swedish (2,768,146 sentence pairs, 29.67M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-sv.tmx.gz">2.8M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Polish-Thai (6,678 sentence pairs, 50.38k words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-th.tmx.gz">6.7k</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='Polish-Turkish (5,594,422 sentence pairs, 54.06M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-tr.tmx.gz">5.6M</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Polish-Ukrainian (32,118 sentence pairs, 0.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-uk.tmx.gz">32.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Urdu (712 sentence pairs, 11.95k words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-ur.tmx.gz">0.7k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Polish-Vietnamese (140,811 sentence pairs, 1.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Polish-Chinese (199,103 sentence pairs, 1.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/pl-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>pt</th><td>60,434</td> <td>382.5M</td> <td>54.9M</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Portuguese-Arabic (3,271,636 sentence pairs, 37.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-pt.txt.zip">3.3M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Bulgarian (8,236,225 sentence pairs, 89.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-pt.txt.zip">8.2M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Portuguese-Bosnian (1,312,430 sentence pairs, 14.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-pt.txt.zip">1.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Portuguese-Catalan (24,180 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-pt.txt.zip">24.2k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Czech (9,274,732 sentence pairs, 96.72M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-pt.txt.zip">9.3M</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Portuguese-Danish (2,990,731 sentence pairs, 32.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-pt.txt.zip">3.0M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Portuguese-German (2,310,418 sentence pairs, 26.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-pt.txt.zip">2.3M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Greek (8,688,603 sentence pairs, 98.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-pt.txt.zip">8.7M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (19,898,376 sentence pairs, 225.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-pt.txt.zip">19.9M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Esperanto (682 sentence pairs, 5.82k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-pt.txt.zip">0.7k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (13,713,551 sentence pairs, 153.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-pt.txt.zip">13.7M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Portuguese-Estonian (2,495,982 sentence pairs, 25.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-pt.txt.zip">2.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Basque (689 sentence pairs, 6.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/eu-pt.txt.zip">0.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Persian (1,228 sentence pairs, 25.31k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-pt.txt.zip">1.2k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Finnish (5,841,226 sentence pairs, 56.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-pt.txt.zip">5.8M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Portuguese-French (9,012,801 sentence pairs, 103.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-pt.txt.zip">9.0M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Galician (959 sentence pairs, 9.81k words) - Moses format' href="download.php?f=OpenSubtitles2011/gl-pt.txt.zip">1.0k</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Hebrew (5,726,170 sentence pairs, 63.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-pt.txt.zip">5.7M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-Croatian (5,401,977 sentence pairs, 57.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-pt.txt.zip">5.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Portuguese-Hungarian (9,411,108 sentence pairs, 95.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-pt.txt.zip">9.4M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Portuguese-Indonesian (811,057 sentence pairs, 8.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-pt.txt.zip">0.8M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Portuguese-Icelandic (343,892 sentence pairs, 3.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-pt.txt.zip">0.3M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Italian (4,672,373 sentence pairs, 53.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-pt.txt.zip">4.7M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Portuguese-Japanese (65,372 sentence pairs, 0.48M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-pt.txt.zip">65.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Georgian (1,115 sentence pairs, 11.77k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-pt.txt.zip">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Kazakh (1,060 sentence pairs, 10.01k words) - Moses format' href="download.php?f=OpenSubtitles2011/kk-pt.txt.zip">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Portuguese-Korean (1,961 sentence pairs, 25.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-pt.txt.zip">2.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Luxembourgish (1,755 sentence pairs, 17.19k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-pt.txt.zip">1.8k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Portuguese-Lithuanian (129,595 sentence pairs, 1.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-pt.txt.zip">0.1M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Portuguese-Latvian (39,211 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-pt.txt.zip">39.2k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Portuguese-Macedonian (169,746 sentence pairs, 1.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-pt.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Portuguese-Malay (169,646 sentence pairs, 1.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-pt.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (11,796,551 sentence pairs, 136.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-pt.txt.zip">11.8M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Portuguese-Norwegian (1,695,163 sentence pairs, 18.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-pt.txt.zip">1.7M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Occitan (post 1500) (517 sentence pairs, 3.70k words) - Moses format' href="download.php?f=OpenSubtitles2011/oc-pt.txt.zip">0.5k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Polish (7,834,641 sentence pairs, 80.44M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-pt.txt.zip">7.8M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (10,723,553 sentence pairs, 134.13M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-pt_br.tmx.gz">10.7M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Portuguese-Romanian (8,901,816 sentence pairs, 109.59M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-ro.tmx.gz">8.9M</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Portuguese-Russian (1,822,252 sentence pairs, 21.25M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-ru.tmx.gz">1.8M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-scc (5,581,976 sentence pairs, 65.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-scc.tmx.gz">5.6M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Portuguese-scr (3,899 sentence pairs, 38.66k words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-scr.tmx.gz">3.9k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Portuguese-Sinhala (9,750 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-si.tmx.gz">9.8k</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Portuguese-Slovak (1,139,412 sentence pairs, 13.16M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-sk.tmx.gz">1.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Portuguese-Slovenian (4,757,557 sentence pairs, 52.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-sl.tmx.gz">4.8M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Portuguese-Albanian (326,597 sentence pairs, 3.79M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Portuguese-Swedish (3,617,284 sentence pairs, 42.41M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-sv.tmx.gz">3.6M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Portuguese-Thai (11,108 sentence pairs, 89.76k words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-th.tmx.gz">11.1k</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Portuguese-Turkish (7,058,660 sentence pairs, 75.32M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-tr.tmx.gz">7.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Portuguese-Ukrainian (34,433 sentence pairs, 0.37M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-uk.tmx.gz">34.4k</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Portuguese-Vietnamese (200,467 sentence pairs, 2.63M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Portuguese-Chinese (316,022 sentence pairs, 2.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>pt_br</th><td>95,563</td> <td>586.8M</td> <td>85.4M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Portuguese-Arabic (3,975,000 sentence pairs, 45.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-pt_br.txt.zip">4.0M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Bulgarian (10,475,693 sentence pairs, 113.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-pt_br.txt.zip">10.5M</a>
</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Portuguese-Bosnian (1,670,261 sentence pairs, 17.87M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-pt_br.txt.zip">1.7M</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Portuguese-Catalan (23,555 sentence pairs, 0.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-pt_br.txt.zip">23.6k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Portuguese-Czech (10,858,045 sentence pairs, 114.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-pt_br.txt.zip">10.9M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Portuguese-Danish (2,842,901 sentence pairs, 31.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-pt_br.txt.zip">2.8M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Portuguese-German (2,287,205 sentence pairs, 26.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-pt_br.txt.zip">2.3M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-Greek (10,560,874 sentence pairs, 121.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-pt_br.txt.zip">10.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-English (28,299,812 sentence pairs, 320.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-pt_br.txt.zip">28.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Esperanto (1,599 sentence pairs, 16.08k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-pt_br.txt.zip">1.6k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Spanish (19,064,337 sentence pairs, 213.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-pt_br.txt.zip">19.1M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Portuguese-Estonian (2,678,436 sentence pairs, 27.62M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-pt_br.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Persian (1,841 sentence pairs, 35.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-pt_br.txt.zip">1.8k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Portuguese-Finnish (5,956,632 sentence pairs, 57.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-pt_br.txt.zip">6.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-French (11,623,572 sentence pairs, 134.74M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-pt_br.txt.zip">11.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Galician (857 sentence pairs, 11.11k words) - Moses format' href="download.php?f=OpenSubtitles2011/gl-pt_br.txt.zip">0.9k</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-Hebrew (7,086,252 sentence pairs, 78.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-pt_br.txt.zip">7.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Portuguese-Croatian (6,004,071 sentence pairs, 64.00M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-pt_br.txt.zip">6.0M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Portuguese-Hungarian (12,001,646 sentence pairs, 121.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-pt_br.txt.zip">12.0M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Portuguese-Indonesian (919,728 sentence pairs, 9.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-pt_br.txt.zip">0.9M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Portuguese-Icelandic (159,134 sentence pairs, 1.72M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-pt_br.txt.zip">0.2M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Portuguese-Italian (6,150,351 sentence pairs, 70.69M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-pt_br.txt.zip">6.2M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Portuguese-Japanese (76,379 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-pt_br.txt.zip">76.4k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Korean (3,062 sentence pairs, 30.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-pt_br.txt.zip">3.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Luxembourgish (1,721 sentence pairs, 16.88k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-pt_br.txt.zip">1.7k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Portuguese-Lithuanian (147,636 sentence pairs, 1.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-pt_br.txt.zip">0.1M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Portuguese-Latvian (46,070 sentence pairs, 0.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-pt_br.txt.zip">46.1k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Portuguese-Macedonian (148,152 sentence pairs, 1.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-pt_br.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Portuguese-Malay (190,358 sentence pairs, 1.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-pt_br.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Dutch (13,474,373 sentence pairs, 155.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-pt_br.txt.zip">13.5M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Portuguese-Norwegian (1,366,738 sentence pairs, 14.74M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-pt_br.txt.zip">1.4M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Occitan (post 1500) (433 sentence pairs, 3.19k words) - Moses format' href="download.php?f=OpenSubtitles2011/oc-pt_br.txt.zip">0.4k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Polish (8,450,453 sentence pairs, 87.61M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-pt_br.txt.zip">8.5M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Portuguese (16,389,552 sentence pairs, 177.87M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-pt_br.txt.zip">16.4M</a>
</td><td></td><td bgcolor="#bfffbf"><a rel="nofollow" title='Portuguese-Romanian (10,919,415 sentence pairs, 134.42M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-ro.tmx.gz">10.9M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Portuguese-Russian (2,472,663 sentence pairs, 28.94M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-ru.tmx.gz">2.5M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Portuguese-scc (6,829,572 sentence pairs, 79.46M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-scc.tmx.gz">6.8M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Portuguese-scr (3,941 sentence pairs, 39.60k words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-scr.tmx.gz">3.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Portuguese-Sinhala (14,982 sentence pairs, 0.17M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-si.tmx.gz">15.0k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Portuguese-Slovak (1,417,594 sentence pairs, 16.30M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Portuguese-Slovenian (4,954,776 sentence pairs, 54.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-sl.tmx.gz">5.0M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Portuguese-Albanian (329,821 sentence pairs, 3.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Portuguese-Swedish (3,578,182 sentence pairs, 41.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-sv.tmx.gz">3.6M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Portuguese-Thai (9,149 sentence pairs, 70.98k words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-th.tmx.gz">9.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Tagalog (539 sentence pairs, 13.11k words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-tl.tmx.gz">0.5k</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Portuguese-Turkish (8,532,650 sentence pairs, 90.76M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-tr.tmx.gz">8.5M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Portuguese-Ukrainian (36,592 sentence pairs, 0.40M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-uk.tmx.gz">36.6k</a>
</td><td></td><td bgcolor="#edffce"><a rel="nofollow" title='Portuguese-Vietnamese (220,478 sentence pairs, 2.84M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Portuguese-Chinese (369,124 sentence pairs, 2.70M words) - TMX format' href="download.php?f=OpenSubtitles2011/pt_br-zh.tmx.gz">0.4M</a>
</td></tr> <tr><th>ro</th><td>75,828</td> <td>487.3M</td> <td>68.8M</td><td bgcolor="#ceffce"><a rel="nofollow" title='Romanian-Arabic (3,905,302 sentence pairs, 45.68M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ro.txt.zip">3.9M</a>
</td><td bgcolor="#c0ffc0"><a rel="nofollow" title='Romanian-Bulgarian (11,023,002 sentence pairs, 121.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ro.txt.zip">11.0M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Romanian-Bosnian (1,728,373 sentence pairs, 18.69M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ro.txt.zip">1.7M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Romanian-Catalan (28,232 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-ro.txt.zip">28.2k</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Romanian-Czech (11,005,532 sentence pairs, 116.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ro.txt.zip">11.0M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Romanian-Danish (2,730,247 sentence pairs, 30.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-ro.txt.zip">2.7M</a>
</td><td bgcolor="#d5ffc8"><a rel="nofollow" title='Romanian-German (2,192,750 sentence pairs, 25.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-ro.txt.zip">2.2M</a>
</td><td bgcolor="#c1ffc1"><a rel="nofollow" title='Romanian-Greek (9,884,585 sentence pairs, 114.73M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ro.txt.zip">9.9M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-English (22,652,124 sentence pairs, 258.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ro.txt.zip">22.7M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Esperanto (1,038 sentence pairs, 10.88k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-ro.txt.zip">1.0k</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Spanish (14,247,698 sentence pairs, 162.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ro.txt.zip">14.2M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Romanian-Estonian (2,937,255 sentence pairs, 30.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-ro.txt.zip">2.9M</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Persian (1,299 sentence pairs, 30.59k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-ro.txt.zip">1.3k</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Finnish (5,963,956 sentence pairs, 58.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ro.txt.zip">6.0M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-French (9,199,374 sentence pairs, 108.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ro.txt.zip">9.2M</a>
</td><td></td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Romanian-Hebrew (6,581,879 sentence pairs, 74.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ro.txt.zip">6.6M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Romanian-Croatian (6,451,871 sentence pairs, 69.55M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-ro.txt.zip">6.5M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Romanian-Hungarian (10,639,749 sentence pairs, 109.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-ro.txt.zip">10.6M</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Romanian-Indonesian (839,360 sentence pairs, 8.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-ro.txt.zip">0.8M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Romanian-Icelandic (232,072 sentence pairs, 2.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-ro.txt.zip">0.2M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Italian (5,001,766 sentence pairs, 58.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-ro.txt.zip">5.0M</a>
</td><td bgcolor="#fff5ee"><a rel="nofollow" title='Romanian-Japanese (60,921 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-ro.txt.zip">60.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Georgian (1,009 sentence pairs, 11.08k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-ro.txt.zip">1.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Kazakh (1,078 sentence pairs, 9.71k words) - Moses format' href="download.php?f=OpenSubtitles2011/kk-ro.txt.zip">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-Korean (2,691 sentence pairs, 33.53k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-ro.txt.zip">2.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Luxembourgish (708 sentence pairs, 7.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-ro.txt.zip">0.7k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Romanian-Lithuanian (119,374 sentence pairs, 1.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-ro.txt.zip">0.1M</a>
</td><td bgcolor="#fff7f0"><a rel="nofollow" title='Romanian-Latvian (50,091 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-ro.txt.zip">50.1k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Romanian-Macedonian (175,147 sentence pairs, 1.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-ro.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Romanian-Malay (183,249 sentence pairs, 1.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-ro.txt.zip">0.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Dutch (12,404,459 sentence pairs, 145.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-ro.txt.zip">12.4M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Romanian-Norwegian (1,491,112 sentence pairs, 16.29M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-ro.txt.zip">1.5M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Occitan (post 1500) (505 sentence pairs, 3.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/oc-ro.txt.zip">0.5k</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Romanian-Polish (9,623,737 sentence pairs, 100.61M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-ro.txt.zip">9.6M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (11,960,178 sentence pairs, 133.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-ro.txt.zip">12.0M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Romanian-Portuguese (15,242,518 sentence pairs, 170.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-ro.txt.zip">15.2M</a>
</td><td></td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Romanian-Russian (2,221,680 sentence pairs, 26.46M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-ru.tmx.gz">2.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Romanian-scc (7,217,082 sentence pairs, 85.43M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-scc.tmx.gz">7.2M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Romanian-scr (3,519 sentence pairs, 35.04k words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-scr.tmx.gz">3.5k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Romanian-Sinhala (12,357 sentence pairs, 0.14M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-si.tmx.gz">12.4k</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Romanian-Slovak (1,437,334 sentence pairs, 16.80M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-sk.tmx.gz">1.4M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Romanian-Slovenian (5,290,423 sentence pairs, 58.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-sl.tmx.gz">5.3M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Romanian-Albanian (320,592 sentence pairs, 3.72M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-sq.tmx.gz">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Romanian-Swedish (3,600,250 sentence pairs, 42.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-sv.tmx.gz">3.6M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Romanian-Thai (9,344 sentence pairs, 76.68k words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-th.tmx.gz">9.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Romanian-Tagalog (431 sentence pairs, 10.80k words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Romanian-Turkish (8,594,715 sentence pairs, 93.77M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-tr.tmx.gz">8.6M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Romanian-Ukrainian (34,171 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-uk.tmx.gz">34.2k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Romanian-Vietnamese (207,516 sentence pairs, 2.71M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Romanian-Chinese (307,316 sentence pairs, 2.34M words) - TMX format' href="download.php?f=OpenSubtitles2011/ro-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>ru</th><td>12,664</td> <td>67.3M</td> <td>10.1M</td><td bgcolor="#deffc6"><a rel="nofollow" title='Russian-Arabic (1,052,603 sentence pairs, 11.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ru.txt.zip">1.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Russian-Bulgarian (2,211,153 sentence pairs, 23.80M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-ru.txt.zip">2.2M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Russian-Bosnian (356,836 sentence pairs, 3.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-ru.txt.zip">0.4M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Russian-Catalan (12,528 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-ru.txt.zip">12.5k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Russian-Czech (2,257,803 sentence pairs, 23.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-ru.txt.zip">2.3M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Russian-Danish (560,107 sentence pairs, 5.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-ru.txt.zip">0.6M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Russian-German (796,890 sentence pairs, 9.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-ru.txt.zip">0.8M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Russian-Greek (2,083,457 sentence pairs, 23.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ru.txt.zip">2.1M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Russian-English (4,624,629 sentence pairs, 51.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-ru.txt.zip">4.6M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Esperanto (910 sentence pairs, 9.63k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-ru.txt.zip">0.9k</a>
</td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Russian-Spanish (2,859,922 sentence pairs, 32.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ru.txt.zip">2.9M</a>
</td><td bgcolor="#e2ffc7"><a rel="nofollow" title='Russian-Estonian (720,181 sentence pairs, 7.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-ru.txt.zip">0.7M</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Persian (486 sentence pairs, 8.92k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-ru.txt.zip">0.5k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Russian-Finnish (1,120,607 sentence pairs, 10.62M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-ru.txt.zip">1.1M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Russian-French (2,288,309 sentence pairs, 26.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-ru.txt.zip">2.3M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Russian-Hebrew (1,543,508 sentence pairs, 16.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-ru.txt.zip">1.5M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Russian-Croatian (1,287,774 sentence pairs, 13.55M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-ru.txt.zip">1.3M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Russian-Hungarian (2,271,961 sentence pairs, 22.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-ru.txt.zip">2.3M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Russian-Indonesian (201,752 sentence pairs, 1.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-ru.txt.zip">0.2M</a>
</td><td bgcolor="#fffaf1"><a rel="nofollow" title='Russian-Icelandic (60,781 sentence pairs, 0.61M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-ru.txt.zip">60.8k</a>
</td><td bgcolor="#d8ffc8"><a rel="nofollow" title='Russian-Italian (1,830,846 sentence pairs, 20.85M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-ru.txt.zip">1.8M</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Russian-Japanese (21,567 sentence pairs, 0.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-ru.txt.zip">21.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Luxembourgish (847 sentence pairs, 6.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-ru.txt.zip">0.8k</a>
</td><td bgcolor="#fff8f0"><a rel="nofollow" title='Russian-Lithuanian (58,579 sentence pairs, 0.54M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-ru.txt.zip">58.6k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Russian-Latvian (19,624 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-ru.txt.zip">19.6k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Russian-Macedonian (36,735 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-ru.txt.zip">36.7k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Russian-Malay (57,468 sentence pairs, 0.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-ru.txt.zip">57.5k</a>
</td><td bgcolor="#d6ffc9"><a rel="nofollow" title='Russian-Dutch (2,211,652 sentence pairs, 25.44M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-ru.txt.zip">2.2M</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Russian-Norwegian (343,364 sentence pairs, 3.57M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-ru.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#dcffc7"><a rel="nofollow" title='Russian-Polish (1,445,366 sentence pairs, 14.63M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-ru.txt.zip">1.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Russian-Portuguese (2,080,002 sentence pairs, 22.93M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-ru.txt.zip">2.1M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Russian-Portuguese (2,857,383 sentence pairs, 31.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-ru.txt.zip">2.9M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Russian-Romanian (2,520,790 sentence pairs, 28.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-ru.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#daffc6"><a rel="nofollow" title='Russian-scc (1,447,304 sentence pairs, 16.18M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-scc.tmx.gz">1.4M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Sinhala (3,710 sentence pairs, 38.59k words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-si.tmx.gz">3.7k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Russian-Slovak (387,523 sentence pairs, 4.33M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-sk.tmx.gz">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Russian-Slovenian (1,094,831 sentence pairs, 11.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-sl.tmx.gz">1.1M</a>
</td><td bgcolor="#fffdf0"><a rel="nofollow" title='Russian-Albanian (73,162 sentence pairs, 0.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-sq.tmx.gz">73.2k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Russian-Swedish (885,984 sentence pairs, 9.93M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-sv.tmx.gz">0.9M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Thai (4,889 sentence pairs, 38.20k words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-th.tmx.gz">4.9k</a>
</td><td></td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Russian-Turkish (1,997,387 sentence pairs, 20.57M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-tr.tmx.gz">2.0M</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Russian-Ukrainian (28,202 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-uk.tmx.gz">28.2k</a>
</td><td></td><td bgcolor="#fffef0"><a rel="nofollow" title='Russian-Vietnamese (70,325 sentence pairs, 0.88M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-vi.tmx.gz">70.3k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Russian-Chinese (80,819 sentence pairs, 0.56M words) - TMX format' href="download.php?f=OpenSubtitles2011/ru-zh.tmx.gz">80.8k</a>
</td></tr> <tr><th>scc</th><td>39,742</td> <td>227.8M</td> <td>35.1M</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='scc-Arabic (2,509,092 sentence pairs, 28.07M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-scc.txt.zip">2.5M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='scc-Bulgarian (6,804,053 sentence pairs, 71.95M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-scc.txt.zip">6.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='scc-Bosnian (1,498,116 sentence pairs, 15.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-scc.txt.zip">1.5M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='scc-Catalan (16,975 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-scc.txt.zip">17.0k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='scc-Czech (6,735,169 sentence pairs, 68.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-scc.txt.zip">6.7M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='scc-Danish (1,875,312 sentence pairs, 20.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-scc.txt.zip">1.9M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='scc-German (1,532,824 sentence pairs, 16.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-scc.txt.zip">1.5M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='scc-Greek (6,241,182 sentence pairs, 69.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-scc.txt.zip">6.2M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='scc-English (12,699,765 sentence pairs, 140.48M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-scc.txt.zip">12.7M</a>
</td><td></td><td bgcolor="#c4ffc4"><a rel="nofollow" title='scc-Spanish (8,487,414 sentence pairs, 93.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-scc.txt.zip">8.5M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='scc-Estonian (1,910,130 sentence pairs, 19.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-scc.txt.zip">1.9M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scc-Persian (745 sentence pairs, 19.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-scc.txt.zip">0.7k</a>
</td><td bgcolor="#d2ffcd"><a rel="nofollow" title='scc-Finnish (3,718,886 sentence pairs, 34.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-scc.txt.zip">3.7M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='scc-French (5,630,346 sentence pairs, 63.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-scc.txt.zip">5.6M</a>
</td><td></td><td bgcolor="#cfffcf"><a rel="nofollow" title='scc-Hebrew (4,092,230 sentence pairs, 44.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-scc.txt.zip">4.1M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='scc-Croatian (6,201,428 sentence pairs, 61.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-scc.txt.zip">6.2M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='scc-Hungarian (6,365,498 sentence pairs, 62.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-scc.txt.zip">6.4M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='scc-Indonesian (529,241 sentence pairs, 5.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-scc.txt.zip">0.5M</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='scc-Icelandic (176,329 sentence pairs, 1.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-scc.txt.zip">0.2M</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='scc-Italian (2,962,977 sentence pairs, 32.91M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-scc.txt.zip">3.0M</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='scc-Japanese (39,897 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-scc.txt.zip">39.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='scc-Georgian (580 sentence pairs, 8.63k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-scc.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='scc-Korean (1,391 sentence pairs, 12.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-scc.txt.zip">1.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scc-Luxembourgish (1,669 sentence pairs, 15.75k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-scc.txt.zip">1.7k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='scc-Lithuanian (97,984 sentence pairs, 0.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-scc.txt.zip">98.0k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='scc-Latvian (42,932 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-scc.txt.zip">42.9k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='scc-Macedonian (182,976 sentence pairs, 1.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-scc.txt.zip">0.2M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='scc-Malay (128,046 sentence pairs, 1.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-scc.txt.zip">0.1M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='scc-Dutch (7,354,011 sentence pairs, 82.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-scc.txt.zip">7.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='scc-Norwegian (1,054,509 sentence pairs, 11.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-scc.txt.zip">1.1M</a>
</td><td></td><td bgcolor="#ccffcc"><a rel="nofollow" title='scc-Polish (5,670,021 sentence pairs, 56.80M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-scc.txt.zip">5.7M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='scc-Portuguese (6,780,520 sentence pairs, 73.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-scc.txt.zip">6.8M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='scc-Portuguese (8,394,715 sentence pairs, 90.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-scc.txt.zip">8.4M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='scc-Romanian (8,827,188 sentence pairs, 96.26M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-scc.txt.zip">8.8M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='scc-Russian (1,596,426 sentence pairs, 16.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-scc.txt.zip">1.6M</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='scc-scr (4,390 sentence pairs, 43.12k words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-scr.tmx.gz">4.4k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='scc-Sinhala (9,444 sentence pairs, 0.11M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-si.tmx.gz">9.4k</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='scc-Slovak (937,776 sentence pairs, 10.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-sk.tmx.gz">0.9M</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='scc-Slovenian (3,869,883 sentence pairs, 41.15M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-sl.tmx.gz">3.9M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='scc-Albanian (240,779 sentence pairs, 2.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='scc-Swedish (2,523,839 sentence pairs, 28.54M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-sv.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='scc-Thai (7,386 sentence pairs, 58.16k words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-th.tmx.gz">7.4k</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='scc-Turkish (5,721,900 sentence pairs, 58.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-tr.tmx.gz">5.7M</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='scc-Ukrainian (24,107 sentence pairs, 0.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-uk.tmx.gz">24.1k</a>
</td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='scc-Vietnamese (142,874 sentence pairs, 1.82M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='scc-Chinese (205,801 sentence pairs, 1.45M words) - TMX format' href="download.php?f=OpenSubtitles2011/scc-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>scr</th><td>11</td> <td>72.8k</td> <td>11.9k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='scr-Arabic (843 sentence pairs, 7.87k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-scr.txt.zip">0.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Bulgarian (3,257 sentence pairs, 31.78k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-scr.txt.zip">3.3k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Czech (2,276 sentence pairs, 20.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-scr.txt.zip">2.3k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Danish (3,082 sentence pairs, 32.28k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-scr.txt.zip">3.1k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Greek (3,021 sentence pairs, 29.04k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-scr.txt.zip">3.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='scr-English (5,750 sentence pairs, 58.39k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-scr.txt.zip">5.8k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Spanish (3,149 sentence pairs, 32.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-scr.txt.zip">3.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Estonian (3,207 sentence pairs, 31.66k words) - Moses format' href="download.php?f=OpenSubtitles2011/et-scr.txt.zip">3.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='scr-Finnish (875 sentence pairs, 8.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-scr.txt.zip">0.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='scr-French (3,553 sentence pairs, 36.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-scr.txt.zip">3.6k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Hebrew (2,725 sentence pairs, 29.69k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-scr.txt.zip">2.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Croatian (3,929 sentence pairs, 34.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-scr.txt.zip">3.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='scr-Hungarian (3,247 sentence pairs, 27.98k words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-scr.txt.zip">3.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Indonesian (3,203 sentence pairs, 32.19k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-scr.txt.zip">3.2k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Italian (1,341 sentence pairs, 14.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/it-scr.txt.zip">1.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Dutch (1,979 sentence pairs, 20.02k words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-scr.txt.zip">2.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Norwegian (2,253 sentence pairs, 21.14k words) - Moses format' href="download.php?f=OpenSubtitles2011/no-scr.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Polish (2,239 sentence pairs, 20.80k words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-scr.txt.zip">2.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='scr-Portuguese (3,969 sentence pairs, 38.93k words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-scr.txt.zip">4.0k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='scr-Portuguese (4,032 sentence pairs, 39.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-scr.txt.zip">4.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Romanian (3,624 sentence pairs, 35.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-scr.txt.zip">3.6k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='scr-scc (4,798 sentence pairs, 44.37k words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-scr.txt.zip">4.8k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Slovak (2,058 sentence pairs, 17.66k words) - TMX format' href="download.php?f=OpenSubtitles2011/scr-sk.tmx.gz">2.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='scr-Slovenian (3,226 sentence pairs, 29.98k words) - TMX format' href="download.php?f=OpenSubtitles2011/scr-sl.tmx.gz">3.2k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Swedish (1,841 sentence pairs, 18.84k words) - TMX format' href="download.php?f=OpenSubtitles2011/scr-sv.tmx.gz">1.8k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='scr-Turkish (1,858 sentence pairs, 15.99k words) - TMX format' href="download.php?f=OpenSubtitles2011/scr-tr.tmx.gz">1.9k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>si</th><td>36</td> <td>0.3M</td> <td>45.5k</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Sinhala-Arabic (9,120 sentence pairs, 91.34k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-si.txt.zip">9.1k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Sinhala-Bulgarian (9,462 sentence pairs, 98.68k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-si.txt.zip">9.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Bosnian (4,016 sentence pairs, 42.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-si.txt.zip">4.0k</a>
</td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Czech (10,828 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-si.txt.zip">10.8k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Sinhala-Danish (6,522 sentence pairs, 77.35k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-si.txt.zip">6.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Sinhala-German (696 sentence pairs, 7.54k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-si.txt.zip">0.7k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Sinhala-Greek (9,759 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-si.txt.zip">9.8k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Sinhala-English (18,975 sentence pairs, 0.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-si.txt.zip">19.0k</a>
</td><td></td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Sinhala-Spanish (14,011 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-si.txt.zip">14.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Sinhala-Estonian (6,287 sentence pairs, 68.66k words) - Moses format' href="download.php?f=OpenSubtitles2011/et-si.txt.zip">6.3k</a>
</td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Sinhala-Finnish (6,128 sentence pairs, 62.59k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-si.txt.zip">6.1k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Sinhala-French (8,045 sentence pairs, 88.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-si.txt.zip">8.0k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Hebrew (3,838 sentence pairs, 39.70k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-si.txt.zip">3.8k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Sinhala-Croatian (5,528 sentence pairs, 56.83k words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-si.txt.zip">5.5k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Hungarian (11,350 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-si.txt.zip">11.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Sinhala-Indonesian (6,263 sentence pairs, 68.56k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-si.txt.zip">6.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Sinhala-Icelandic (685 sentence pairs, 7.29k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-si.txt.zip">0.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Sinhala-Italian (6,859 sentence pairs, 75.97k words) - Moses format' href="download.php?f=OpenSubtitles2011/it-si.txt.zip">6.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sinhala-Lithuanian (764 sentence pairs, 6.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-si.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Sinhala-Macedonian (1,030 sentence pairs, 12.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-si.txt.zip">1.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Malay (1,904 sentence pairs, 18.67k words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-si.txt.zip">1.9k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Sinhala-Dutch (8,076 sentence pairs, 92.79k words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-si.txt.zip">8.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Sinhala-Norwegian (1,156 sentence pairs, 13.57k words) - Moses format' href="download.php?f=OpenSubtitles2011/no-si.txt.zip">1.2k</a>
</td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Sinhala-Polish (8,246 sentence pairs, 81.28k words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-si.txt.zip">8.2k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-Portuguese (10,319 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-si.txt.zip">10.3k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Sinhala-Portuguese (16,467 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-si.txt.zip">16.5k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Sinhala-Romanian (13,720 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-si.txt.zip">13.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Sinhala-Russian (3,776 sentence pairs, 38.75k words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-si.txt.zip">3.8k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Sinhala-scc (10,565 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-si.txt.zip">10.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Sinhala-Slovenian (9,287 sentence pairs, 97.37k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-sl.tmx.gz">9.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Albanian (1,793 sentence pairs, 21.28k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-sq.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Sinhala-Swedish (4,041 sentence pairs, 45.94k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-sv.tmx.gz">4.0k</a>
</td><td></td><td></td><td bgcolor="#ffdad9"><a rel="nofollow" title='Sinhala-Turkish (8,313 sentence pairs, 79.99k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-tr.tmx.gz">8.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Sinhala-Ukrainian (1,083 sentence pairs, 12.48k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-uk.tmx.gz">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Sinhala-Chinese (2,580 sentence pairs, 17.21k words) - TMX format' href="download.php?f=OpenSubtitles2011/si-zh.tmx.gz">2.6k</a>
</td></tr> <tr><th>sk</th><td>8,155</td> <td>46.8M</td> <td>7.2M</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovak-Arabic (634,911 sentence pairs, 7.08M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-sk.txt.zip">0.6M</a>
</td><td bgcolor="#dcffc7"><a rel="nofollow" title='Slovak-Bulgarian (1,393,509 sentence pairs, 14.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-sk.txt.zip">1.4M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Slovak-Bosnian (279,031 sentence pairs, 2.93M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-sk.txt.zip">0.3M</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Slovak-Catalan (11,115 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-sk.txt.zip">11.1k</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovak-Czech (2,392,324 sentence pairs, 23.72M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-sk.txt.zip">2.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Slovak-Danish (404,995 sentence pairs, 4.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-sk.txt.zip">0.4M</a>
</td><td bgcolor="#e9ffcb"><a rel="nofollow" title='Slovak-German (351,974 sentence pairs, 3.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-sk.txt.zip">0.4M</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Slovak-Greek (1,193,281 sentence pairs, 13.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-sk.txt.zip">1.2M</a>
</td><td bgcolor="#d4ffca"><a rel="nofollow" title='Slovak-English (2,663,488 sentence pairs, 28.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-sk.txt.zip">2.7M</a>
</td><td></td><td bgcolor="#d8ffc6"><a rel="nofollow" title='Slovak-Spanish (1,786,139 sentence pairs, 19.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-sk.txt.zip">1.8M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Slovak-Estonian (535,931 sentence pairs, 5.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-sk.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Slovak-Persian (1,106 sentence pairs, 23.61k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-sk.txt.zip">1.1k</a>
</td><td bgcolor="#e3ffc8"><a rel="nofollow" title='Slovak-Finnish (760,168 sentence pairs, 7.20M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-sk.txt.zip">0.8M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-French (1,303,599 sentence pairs, 14.73M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-sk.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Hebrew (881,920 sentence pairs, 9.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-sk.txt.zip">0.9M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovak-Croatian (876,564 sentence pairs, 9.05M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-sk.txt.zip">0.9M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Hungarian (1,521,725 sentence pairs, 15.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-sk.txt.zip">1.5M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Slovak-Indonesian (124,148 sentence pairs, 1.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-sk.txt.zip">0.1M</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Slovak-Icelandic (10,743 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-sk.txt.zip">10.7k</a>
</td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovak-Italian (768,819 sentence pairs, 8.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-sk.txt.zip">0.8M</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Slovak-Japanese (18,112 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-sk.txt.zip">18.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Slovak-Lithuanian (25,999 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-sk.txt.zip">26.0k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovak-Latvian (6,987 sentence pairs, 70.28k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-sk.txt.zip">7.0k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Slovak-Macedonian (34,698 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-sk.txt.zip">34.7k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Slovak-Malay (35,498 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-sk.txt.zip">35.5k</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Dutch (1,378,803 sentence pairs, 15.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-sk.txt.zip">1.4M</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='Slovak-Norwegian (199,485 sentence pairs, 2.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-sk.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovak-Polish (1,138,898 sentence pairs, 11.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-sk.txt.zip">1.1M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Slovak-Portuguese (1,358,812 sentence pairs, 14.66M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-sk.txt.zip">1.4M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Portuguese (1,747,668 sentence pairs, 18.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-sk.txt.zip">1.7M</a>
</td><td bgcolor="#d9ffc7"><a rel="nofollow" title='Slovak-Romanian (1,768,848 sentence pairs, 19.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-sk.txt.zip">1.8M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Slovak-Russian (424,633 sentence pairs, 4.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-sk.txt.zip">0.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovak-scc (1,067,445 sentence pairs, 11.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-sk.txt.zip">1.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-scr (2,170 sentence pairs, 17.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/scr-sk.txt.zip">2.2k</a>
</td><td></td><td></td><td bgcolor="#e1ffc7"><a rel="nofollow" title='Slovak-Slovenian (790,173 sentence pairs, 8.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-sl.tmx.gz">0.8M</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Slovak-Albanian (62,279 sentence pairs, 0.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-sq.tmx.gz">62.3k</a>
</td><td bgcolor="#e4ffc8"><a rel="nofollow" title='Slovak-Swedish (560,004 sentence pairs, 6.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-sv.tmx.gz">0.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovak-Thai (836 sentence pairs, 5.39k words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-th.tmx.gz">0.8k</a>
</td><td></td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovak-Turkish (1,216,281 sentence pairs, 12.24M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-tr.tmx.gz">1.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovak-Ukrainian (1,656 sentence pairs, 15.69k words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-uk.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#fff0eb"><a rel="nofollow" title='Slovak-Vietnamese (29,624 sentence pairs, 0.35M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-vi.tmx.gz">29.6k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Slovak-Chinese (53,704 sentence pairs, 0.38M words) - TMX format' href="download.php?f=OpenSubtitles2011/sk-zh.tmx.gz">53.7k</a>
</td></tr> <tr><th>sl</th><td>31,095</td> <td>169.8M</td> <td>27.7M</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Slovenian-Arabic (2,180,550 sentence pairs, 23.51M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-sl.txt.zip">2.2M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Slovenian-Bulgarian (5,150,845 sentence pairs, 51.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-sl.txt.zip">5.2M</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovenian-Bosnian (975,638 sentence pairs, 9.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-sl.txt.zip">1.0M</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Slovenian-Catalan (14,440 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-sl.txt.zip">14.4k</a>
</td><td bgcolor="#ccffcc"><a rel="nofollow" title='Slovenian-Czech (5,691,291 sentence pairs, 54.72M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-sl.txt.zip">5.7M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Slovenian-Danish (2,189,825 sentence pairs, 22.44M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-sl.txt.zip">2.2M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-German (1,255,127 sentence pairs, 13.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-sl.txt.zip">1.3M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Greek (4,615,510 sentence pairs, 48.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-sl.txt.zip">4.6M</a>
</td><td bgcolor="#c3ffc3"><a rel="nofollow" title='Slovenian-English (9,976,970 sentence pairs, 103.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-sl.txt.zip">10.0M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Esperanto (1,312 sentence pairs, 12.84k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-sl.txt.zip">1.3k</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Spanish (6,635,539 sentence pairs, 68.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-sl.txt.zip">6.6M</a>
</td><td bgcolor="#d8ffc7"><a rel="nofollow" title='Slovenian-Estonian (2,122,524 sentence pairs, 20.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-sl.txt.zip">2.1M</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Slovenian-Persian (1,504 sentence pairs, 21.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-sl.txt.zip">1.5k</a>
</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Slovenian-Finnish (3,723,175 sentence pairs, 33.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-sl.txt.zip">3.7M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-French (4,557,921 sentence pairs, 48.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-sl.txt.zip">4.6M</a>
</td><td></td><td bgcolor="#d1ffce"><a rel="nofollow" title='Slovenian-Hebrew (3,652,650 sentence pairs, 37.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-sl.txt.zip">3.7M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Slovenian-Croatian (4,443,178 sentence pairs, 42.75M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-sl.txt.zip">4.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Hungarian (4,991,856 sentence pairs, 45.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-sl.txt.zip">5.0M</a>
</td><td bgcolor="#e6ffc9"><a rel="nofollow" title='Slovenian-Indonesian (547,254 sentence pairs, 5.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-sl.txt.zip">0.5M</a>
</td><td bgcolor="#f7ffd8"><a rel="nofollow" title='Slovenian-Icelandic (205,585 sentence pairs, 2.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-sl.txt.zip">0.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Slovenian-Italian (2,057,030 sentence pairs, 21.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-sl.txt.zip">2.1M</a>
</td><td bgcolor="#ffeeea"><a rel="nofollow" title='Slovenian-Japanese (46,959 sentence pairs, 0.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-sl.txt.zip">47.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Georgian (1,049 sentence pairs, 9.26k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-sl.txt.zip">1.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Korean (402 sentence pairs, 3.45k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-sl.txt.zip">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Luxembourgish (837 sentence pairs, 7.23k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-sl.txt.zip">0.8k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Slovenian-Lithuanian (108,953 sentence pairs, 1.00M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-sl.txt.zip">0.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Slovenian-Latvian (38,987 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-sl.txt.zip">39.0k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Slovenian-Macedonian (154,441 sentence pairs, 1.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-sl.txt.zip">0.2M</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Slovenian-Malay (121,225 sentence pairs, 1.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-sl.txt.zip">0.1M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Dutch (6,410,196 sentence pairs, 68.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-sl.txt.zip">6.4M</a>
</td><td bgcolor="#deffc6"><a rel="nofollow" title='Slovenian-Norwegian (1,180,031 sentence pairs, 11.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-sl.txt.zip">1.2M</a>
</td><td></td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-Polish (5,122,136 sentence pairs, 48.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-sl.txt.zip">5.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Slovenian-Portuguese (5,995,532 sentence pairs, 60.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-sl.txt.zip">6.0M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Slovenian-Portuguese (6,382,144 sentence pairs, 64.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-sl.txt.zip">6.4M</a>
</td><td bgcolor="#c9ffc9"><a rel="nofollow" title='Slovenian-Romanian (6,621,562 sentence pairs, 68.04M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-sl.txt.zip">6.6M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Slovenian-Russian (1,213,716 sentence pairs, 12.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-sl.txt.zip">1.2M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Slovenian-scc (4,742,192 sentence pairs, 46.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-sl.txt.zip">4.7M</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Slovenian-scr (3,327 sentence pairs, 30.30k words) - Moses format' href="download.php?f=OpenSubtitles2011/scr-sl.txt.zip">3.3k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Slovenian-Sinhala (9,528 sentence pairs, 98.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-sl.txt.zip">9.5k</a>
</td><td bgcolor="#e0ffc6"><a rel="nofollow" title='Slovenian-Slovak (922,486 sentence pairs, 9.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-sl.txt.zip">0.9M</a>
</td><td></td><td bgcolor="#efffd0"><a rel="nofollow" title='Slovenian-Albanian (235,383 sentence pairs, 2.51M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-sq.tmx.gz">0.2M</a>
</td><td bgcolor="#d5ffc9"><a rel="nofollow" title='Slovenian-Swedish (2,491,505 sentence pairs, 26.90M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-sv.tmx.gz">2.5M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Slovenian-Thai (9,329 sentence pairs, 68.73k words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-th.tmx.gz">9.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Slovenian-Tagalog (432 sentence pairs, 9.50k words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Slovenian-Turkish (4,261,957 sentence pairs, 40.98M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-tr.tmx.gz">4.3M</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Slovenian-Ukrainian (28,205 sentence pairs, 0.27M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-uk.tmx.gz">28.2k</a>
</td><td></td><td bgcolor="#f6ffd7"><a rel="nofollow" title='Slovenian-Vietnamese (169,887 sentence pairs, 2.07M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Slovenian-Chinese (223,529 sentence pairs, 1.50M words) - TMX format' href="download.php?f=OpenSubtitles2011/sl-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>sq</th><td>1,402</td> <td>10.7M</td> <td>1.5M</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Albanian-Arabic (163,495 sentence pairs, 1.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Bulgarian (310,455 sentence pairs, 3.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-sq.txt.zip">0.3M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Albanian-Bosnian (85,479 sentence pairs, 0.89M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-sq.txt.zip">85.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Albanian-Catalan (1,401 sentence pairs, 15.74k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-sq.txt.zip">1.4k</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Czech (328,717 sentence pairs, 3.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-sq.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Albanian-Danish (129,555 sentence pairs, 1.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-sq.txt.zip">0.1M</a>
</td><td bgcolor="#fff7ef"><a rel="nofollow" title='Albanian-German (43,836 sentence pairs, 0.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-sq.txt.zip">43.8k</a>
</td><td bgcolor="#eaffcc"><a rel="nofollow" title='Albanian-Greek (314,036 sentence pairs, 3.54M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-sq.txt.zip">0.3M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Albanian-English (542,402 sentence pairs, 5.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-sq.txt.zip">0.5M</a>
</td><td></td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Spanish (386,085 sentence pairs, 4.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-sq.txt.zip">0.4M</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Albanian-Estonian (153,572 sentence pairs, 1.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-sq.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Persian (220 sentence pairs, 3.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-sq.txt.zip">0.2k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Albanian-Finnish (276,223 sentence pairs, 2.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-sq.txt.zip">0.3M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-French (251,768 sentence pairs, 2.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-sq.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffe1"><a rel="nofollow" title='Albanian-Hebrew (172,518 sentence pairs, 1.88M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-sq.txt.zip">0.2M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Albanian-Croatian (205,327 sentence pairs, 2.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-sq.txt.zip">0.2M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Albanian-Hungarian (346,738 sentence pairs, 3.45M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-sq.txt.zip">0.3M</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Albanian-Indonesian (129,942 sentence pairs, 1.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-sq.txt.zip">0.1M</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Icelandic (7,454 sentence pairs, 81.45k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-sq.txt.zip">7.5k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Albanian-Italian (136,632 sentence pairs, 1.53M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-sq.txt.zip">0.1M</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Albanian-Japanese (8,163 sentence pairs, 64.76k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-sq.txt.zip">8.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Georgian (447 sentence pairs, 5.86k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-sq.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Albanian-Lithuanian (10,467 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-sq.txt.zip">10.5k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Albanian-Latvian (7,898 sentence pairs, 81.76k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-sq.txt.zip">7.9k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Albanian-Macedonian (16,798 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-sq.txt.zip">16.8k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Albanian-Malay (33,150 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-sq.txt.zip">33.1k</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Dutch (365,650 sentence pairs, 4.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-sq.txt.zip">0.4M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Albanian-Norwegian (77,698 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-sq.txt.zip">77.7k</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Albanian-Polish (296,109 sentence pairs, 3.06M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-sq.txt.zip">0.3M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Portuguese (398,444 sentence pairs, 4.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-sq.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Portuguese (403,524 sentence pairs, 4.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-sq.txt.zip">0.4M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Albanian-Romanian (399,383 sentence pairs, 4.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-sq.txt.zip">0.4M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Albanian-Russian (79,691 sentence pairs, 0.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-sq.txt.zip">79.7k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Albanian-scc (277,513 sentence pairs, 2.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-sq.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Albanian-Sinhala (1,810 sentence pairs, 21.32k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-sq.txt.zip">1.8k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Albanian-Slovak (71,276 sentence pairs, 0.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-sq.txt.zip">71.3k</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Albanian-Slovenian (268,684 sentence pairs, 2.71M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-sq.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffe0"><a rel="nofollow" title='Albanian-Swedish (169,175 sentence pairs, 1.96M words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-sv.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Albanian-Thai (2,454 sentence pairs, 18.35k words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-th.tmx.gz">2.5k</a>
</td><td></td><td bgcolor="#eeffcf"><a rel="nofollow" title='Albanian-Turkish (268,702 sentence pairs, 2.78M words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-tr.tmx.gz">0.3M</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Albanian-Ukrainian (1,631 sentence pairs, 25.92k words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-uk.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Albanian-Urdu (790 sentence pairs, 14.43k words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Albanian-Vietnamese (29,846 sentence pairs, 0.39M words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-vi.tmx.gz">29.8k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Albanian-Chinese (24,518 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2011/sq-zh.tmx.gz">24.5k</a>
</td></tr> <tr><th>sv</th><td>18,013</td> <td>105.6M</td> <td>15.6M</td><td bgcolor="#d9ffc6"><a rel="nofollow" title='Swedish-Arabic (1,549,904 sentence pairs, 17.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-sv.txt.zip">1.5M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Bulgarian (3,499,795 sentence pairs, 37.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-sv.txt.zip">3.5M</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Swedish-Bosnian (645,941 sentence pairs, 6.95M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-sv.txt.zip">0.6M</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Swedish-Catalan (16,634 sentence pairs, 0.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-sv.txt.zip">16.6k</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Swedish-Czech (4,173,224 sentence pairs, 43.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-sv.txt.zip">4.2M</a>
</td><td bgcolor="#d4ffc9"><a rel="nofollow" title='Swedish-Danish (2,559,754 sentence pairs, 28.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-sv.txt.zip">2.6M</a>
</td><td bgcolor="#daffc6"><a rel="nofollow" title='Swedish-German (1,489,263 sentence pairs, 16.76M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-sv.txt.zip">1.5M</a>
</td><td bgcolor="#d0ffcf"><a rel="nofollow" title='Swedish-Greek (3,546,165 sentence pairs, 40.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-sv.txt.zip">3.5M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Swedish-English (7,216,832 sentence pairs, 81.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-sv.txt.zip">7.2M</a>
</td><td></td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Spanish (5,263,125 sentence pairs, 58.86M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-sv.txt.zip">5.3M</a>
</td><td bgcolor="#dbffc6"><a rel="nofollow" title='Swedish-Estonian (1,471,375 sentence pairs, 15.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-sv.txt.zip">1.5M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-Persian (824 sentence pairs, 14.34k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-sv.txt.zip">0.8k</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Swedish-Finnish (3,852,395 sentence pairs, 36.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-sv.txt.zip">3.9M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Swedish-French (4,027,513 sentence pairs, 46.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-sv.txt.zip">4.0M</a>
</td><td></td><td bgcolor="#d4ffca"><a rel="nofollow" title='Swedish-Hebrew (2,641,997 sentence pairs, 29.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-sv.txt.zip">2.6M</a>
</td><td bgcolor="#d5ffca"><a rel="nofollow" title='Swedish-Croatian (2,587,175 sentence pairs, 27.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-sv.txt.zip">2.6M</a>
</td><td bgcolor="#d1ffce"><a rel="nofollow" title='Swedish-Hungarian (3,795,156 sentence pairs, 38.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-sv.txt.zip">3.8M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Swedish-Indonesian (424,691 sentence pairs, 4.44M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-sv.txt.zip">0.4M</a>
</td><td bgcolor="#ebffcd"><a rel="nofollow" title='Swedish-Icelandic (306,344 sentence pairs, 3.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-sv.txt.zip">0.3M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Swedish-Italian (1,941,319 sentence pairs, 21.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-sv.txt.zip">1.9M</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Swedish-Japanese (47,882 sentence pairs, 0.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-sv.txt.zip">47.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Georgian (1,082 sentence pairs, 11.11k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-sv.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#fffef1"><a rel="nofollow" title='Swedish-Lithuanian (85,842 sentence pairs, 0.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-sv.txt.zip">85.8k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Swedish-Latvian (36,585 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-sv.txt.zip">36.6k</a>
</td><td bgcolor="#ffffed"><a rel="nofollow" title='Swedish-Macedonian (104,642 sentence pairs, 1.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-sv.txt.zip">0.1M</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Swedish-Malay (101,459 sentence pairs, 1.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-sv.txt.zip">0.1M</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Swedish-Dutch (5,218,104 sentence pairs, 59.81M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-sv.txt.zip">5.2M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Swedish-Norwegian (1,990,758 sentence pairs, 21.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-sv.txt.zip">2.0M</a>
</td><td></td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Swedish-Polish (3,527,013 sentence pairs, 35.87M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-sv.txt.zip">3.5M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Portuguese (4,556,671 sentence pairs, 50.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-sv.txt.zip">4.6M</a>
</td><td bgcolor="#cdffcd"><a rel="nofollow" title='Swedish-Portuguese (4,577,258 sentence pairs, 50.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-sv.txt.zip">4.6M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Swedish-Romanian (4,369,522 sentence pairs, 48.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-sv.txt.zip">4.4M</a>
</td><td bgcolor="#dfffc6"><a rel="nofollow" title='Swedish-Russian (979,457 sentence pairs, 10.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-sv.txt.zip">1.0M</a>
</td><td bgcolor="#d3ffcb"><a rel="nofollow" title='Swedish-scc (2,938,062 sentence pairs, 31.61M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-sv.txt.zip">2.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Swedish-scr (1,872 sentence pairs, 18.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/scr-sv.txt.zip">1.9k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Swedish-Sinhala (4,072 sentence pairs, 46.04k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-sv.txt.zip">4.1k</a>
</td><td bgcolor="#e3ffc7"><a rel="nofollow" title='Swedish-Slovak (641,796 sentence pairs, 6.87M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-sv.txt.zip">0.6M</a>
</td><td bgcolor="#d3ffca"><a rel="nofollow" title='Swedish-Slovenian (3,003,141 sentence pairs, 30.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-sv.txt.zip">3.0M</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Swedish-Albanian (192,625 sentence pairs, 2.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-sv.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Swedish-Thai (8,905 sentence pairs, 68.08k words) - TMX format' href="download.php?f=OpenSubtitles2011/sv-th.tmx.gz">8.9k</a>
</td><td></td><td bgcolor="#d3ffcc"><a rel="nofollow" title='Swedish-Turkish (3,120,267 sentence pairs, 32.22M words) - TMX format' href="download.php?f=OpenSubtitles2011/sv-tr.tmx.gz">3.1M</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Swedish-Ukrainian (18,023 sentence pairs, 0.19M words) - TMX format' href="download.php?f=OpenSubtitles2011/sv-uk.tmx.gz">18.0k</a>
</td><td></td><td bgcolor="#ffffe7"><a rel="nofollow" title='Swedish-Vietnamese (119,214 sentence pairs, 1.55M words) - TMX format' href="download.php?f=OpenSubtitles2011/sv-vi.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Swedish-Chinese (183,861 sentence pairs, 1.36M words) - TMX format' href="download.php?f=OpenSubtitles2011/sv-zh.tmx.gz">0.2M</a>
</td></tr> <tr><th>th</th><td>58</td> <td>0.3M</td> <td>54.7k</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-Arabic (3,678 sentence pairs, 27.41k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-th.txt.zip">3.7k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Thai-Bulgarian (7,824 sentence pairs, 60.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-th.txt.zip">7.8k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Bosnian (4,968 sentence pairs, 34.54k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-th.txt.zip">5.0k</a>
</td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Thai-Czech (8,535 sentence pairs, 62.06k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-th.txt.zip">8.5k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Danish (4,041 sentence pairs, 35.28k words) - Moses format' href="download.php?f=OpenSubtitles2011/da-th.txt.zip">4.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-German (2,713 sentence pairs, 25.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-th.txt.zip">2.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Thai-Greek (9,430 sentence pairs, 80.16k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-th.txt.zip">9.4k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Thai-English (15,684 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-th.txt.zip">15.7k</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Thai-Spanish (12,658 sentence pairs, 0.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-th.txt.zip">12.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Estonian (5,024 sentence pairs, 34.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/et-th.txt.zip">5.0k</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Thai-Finnish (8,231 sentence pairs, 55.47k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-th.txt.zip">8.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Thai-French (8,038 sentence pairs, 65.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-th.txt.zip">8.0k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Thai-Hebrew (8,420 sentence pairs, 57.20k words) - Moses format' href="download.php?f=OpenSubtitles2011/he-th.txt.zip">8.4k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Thai-Croatian (3,440 sentence pairs, 26.30k words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-th.txt.zip">3.4k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Thai-Hungarian (8,661 sentence pairs, 60.86k words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-th.txt.zip">8.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Indonesian (1,861 sentence pairs, 13.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-th.txt.zip">1.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Icelandic (902 sentence pairs, 10.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-th.txt.zip">0.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Italian (3,860 sentence pairs, 34.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/it-th.txt.zip">3.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Macedonian (944 sentence pairs, 4.95k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-th.txt.zip">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Malay (842 sentence pairs, 5.92k words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-th.txt.zip">0.8k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Thai-Dutch (8,946 sentence pairs, 75.83k words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-th.txt.zip">8.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Thai-Norwegian (4,077 sentence pairs, 32.56k words) - Moses format' href="download.php?f=OpenSubtitles2011/no-th.txt.zip">4.1k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Thai-Polish (6,765 sentence pairs, 50.71k words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-th.txt.zip">6.8k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Thai-Portuguese (11,288 sentence pairs, 90.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-th.txt.zip">11.3k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Thai-Portuguese (9,285 sentence pairs, 71.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-th.txt.zip">9.3k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Thai-Romanian (9,537 sentence pairs, 77.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-th.txt.zip">9.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Thai-Russian (4,991 sentence pairs, 38.64k words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-th.txt.zip">5.0k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Thai-scc (7,547 sentence pairs, 58.57k words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-th.txt.zip">7.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Slovak (851 sentence pairs, 5.42k words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-th.txt.zip">0.9k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Thai-Slovenian (9,493 sentence pairs, 69.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-th.txt.zip">9.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Thai-Albanian (2,493 sentence pairs, 18.47k words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-th.txt.zip">2.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Thai-Swedish (9,027 sentence pairs, 68.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/sv-th.txt.zip">9.0k</a>
</td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Thai-Turkish (10,519 sentence pairs, 69.84k words) - TMX format' href="download.php?f=OpenSubtitles2011/th-tr.tmx.gz">10.5k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Vietnamese (801 sentence pairs, 7.63k words) - TMX format' href="download.php?f=OpenSubtitles2011/th-vi.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Thai-Chinese (2,593 sentence pairs, 8.88k words) - TMX format' href="download.php?f=OpenSubtitles2011/th-zh.tmx.gz">2.6k</a>
</td></tr> <tr><th>tl</th><td>2</td> <td>15.8k</td> <td>1.2k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Arabic (519 sentence pairs, 10.49k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-tl.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Czech (539 sentence pairs, 11.72k words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-tl.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-German (549 sentence pairs, 12.23k words) - Moses format' href="download.php?f=OpenSubtitles2011/de-tl.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-English (546 sentence pairs, 12.92k words) - Moses format' href="download.php?f=OpenSubtitles2011/en-tl.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Tagalog-Spanish (1,106 sentence pairs, 26.84k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-tl.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Tagalog-Finnish (1,111 sentence pairs, 22.40k words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-tl.txt.zip">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-French (460 sentence pairs, 11.52k words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-tl.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Tagalog-Hungarian (1,118 sentence pairs, 23.50k words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-tl.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Dutch (546 sentence pairs, 13.34k words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-tl.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Portuguese (547 sentence pairs, 13.18k words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-tl.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Romanian (431 sentence pairs, 10.80k words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-tl.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Slovenian (432 sentence pairs, 9.50k words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-tl.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Turkish (548 sentence pairs, 11.34k words) - TMX format' href="download.php?f=OpenSubtitles2011/tl-tr.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>tr</th><td>53,457</td> <td>258.1M</td> <td>45.7M</td><td bgcolor="#d2ffcb"><a rel="nofollow" title='Turkish-Arabic (3,257,726 sentence pairs, 33.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-tr.txt.zip">3.3M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Bulgarian (8,706,238 sentence pairs, 83.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-tr.txt.zip">8.7M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Turkish-Bosnian (1,385,163 sentence pairs, 13.01M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-tr.txt.zip">1.4M</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Turkish-Catalan (23,426 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-tr.txt.zip">23.4k</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Czech (9,118,003 sentence pairs, 83.75M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-tr.txt.zip">9.1M</a>
</td><td bgcolor="#d6ffc8"><a rel="nofollow" title='Turkish-Danish (2,396,820 sentence pairs, 23.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-tr.txt.zip">2.4M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Turkish-German (2,174,061 sentence pairs, 22.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-tr.txt.zip">2.2M</a>
</td><td bgcolor="#c6ffc6"><a rel="nofollow" title='Turkish-Greek (8,127,407 sentence pairs, 82.10M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-tr.txt.zip">8.1M</a>
</td><td bgcolor="#bfffbf"><a rel="nofollow" title='Turkish-English (16,931,392 sentence pairs, 169.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-tr.txt.zip">16.9M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Esperanto (1,347 sentence pairs, 12.22k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-tr.txt.zip">1.3k</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Spanish (10,930,686 sentence pairs, 109.21M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-tr.txt.zip">10.9M</a>
</td><td bgcolor="#d7ffc8"><a rel="nofollow" title='Turkish-Estonian (2,532,269 sentence pairs, 23.06M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-tr.txt.zip">2.5M</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Turkish-Persian (3,093 sentence pairs, 56.09k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-tr.txt.zip">3.1k</a>
</td><td bgcolor="#d0ffd0"><a rel="nofollow" title='Turkish-Finnish (4,831,100 sentence pairs, 40.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-tr.txt.zip">4.8M</a>
</td><td bgcolor="#c7ffc7"><a rel="nofollow" title='Turkish-French (7,762,140 sentence pairs, 79.97M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-tr.txt.zip">7.8M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Galician (11 sentence pairs, 0.11k words) - Moses format' href="download.php?f=OpenSubtitles2011/gl-tr.txt.zip">11</a>
</td><td bgcolor="#cbffcb"><a rel="nofollow" title='Turkish-Hebrew (5,845,974 sentence pairs, 57.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-tr.txt.zip">5.8M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Croatian (5,127,209 sentence pairs, 47.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-tr.txt.zip">5.1M</a>
</td><td bgcolor="#c8ffc8"><a rel="nofollow" title='Turkish-Hungarian (8,498,395 sentence pairs, 75.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-tr.txt.zip">8.5M</a>
</td><td bgcolor="#e5ffc9"><a rel="nofollow" title='Turkish-Indonesian (651,862 sentence pairs, 5.93M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-tr.txt.zip">0.7M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Turkish-Icelandic (285,707 sentence pairs, 2.64M words) - Moses format' href="download.php?f=OpenSubtitles2011/is-tr.txt.zip">0.3M</a>
</td><td bgcolor="#cfffcf"><a rel="nofollow" title='Turkish-Italian (4,455,882 sentence pairs, 45.05M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-tr.txt.zip">4.5M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Turkish-Japanese (67,147 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-tr.txt.zip">67.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Korean (380 sentence pairs, 3.43k words) - Moses format' href="download.php?f=OpenSubtitles2011/ko-tr.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Luxembourgish (870 sentence pairs, 6.91k words) - Moses format' href="download.php?f=OpenSubtitles2011/lb-tr.txt.zip">0.9k</a>
</td><td bgcolor="#ffffee"><a rel="nofollow" title='Turkish-Lithuanian (127,127 sentence pairs, 1.08M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-tr.txt.zip">0.1M</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Turkish-Latvian (40,684 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-tr.txt.zip">40.7k</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Turkish-Macedonian (146,064 sentence pairs, 1.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-tr.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Turkish-Malay (163,021 sentence pairs, 1.50M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-tr.txt.zip">0.2M</a>
</td><td bgcolor="#c4ffc4"><a rel="nofollow" title='Turkish-Dutch (9,325,054 sentence pairs, 96.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-tr.txt.zip">9.3M</a>
</td><td bgcolor="#ddffc6"><a rel="nofollow" title='Turkish-Norwegian (1,341,587 sentence pairs, 12.78M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-tr.txt.zip">1.3M</a>
</td><td></td><td bgcolor="#caffca"><a rel="nofollow" title='Turkish-Polish (7,207,416 sentence pairs, 64.95M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-tr.txt.zip">7.2M</a>
</td><td bgcolor="#c5ffc5"><a rel="nofollow" title='Turkish-Portuguese (9,078,275 sentence pairs, 89.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-tr.txt.zip">9.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Portuguese (11,060,408 sentence pairs, 108.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-tr.txt.zip">11.1M</a>
</td><td bgcolor="#c2ffc2"><a rel="nofollow" title='Turkish-Romanian (11,031,840 sentence pairs, 109.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-tr.txt.zip">11.0M</a>
</td><td bgcolor="#d7ffc7"><a rel="nofollow" title='Turkish-Russian (2,273,802 sentence pairs, 21.96M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-tr.txt.zip">2.3M</a>
</td><td bgcolor="#caffca"><a rel="nofollow" title='Turkish-scc (6,896,320 sentence pairs, 65.49M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-tr.txt.zip">6.9M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-scr (1,905 sentence pairs, 16.12k words) - Moses format' href="download.php?f=OpenSubtitles2011/scr-tr.txt.zip">1.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Turkish-Sinhala (8,459 sentence pairs, 80.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-tr.txt.zip">8.5k</a>
</td><td bgcolor="#dcffc6"><a rel="nofollow" title='Turkish-Slovak (1,444,689 sentence pairs, 13.60M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-tr.txt.zip">1.4M</a>
</td><td bgcolor="#ceffce"><a rel="nofollow" title='Turkish-Slovenian (5,369,672 sentence pairs, 47.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-tr.txt.zip">5.4M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Turkish-Albanian (306,221 sentence pairs, 2.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-tr.txt.zip">0.3M</a>
</td><td bgcolor="#d1ffcd"><a rel="nofollow" title='Turkish-Swedish (3,772,732 sentence pairs, 36.89M words) - Moses format' href="download.php?f=OpenSubtitles2011/sv-tr.txt.zip">3.8M</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Turkish-Thai (10,743 sentence pairs, 70.67k words) - Moses format' href="download.php?f=OpenSubtitles2011/th-tr.txt.zip">10.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Tagalog (556 sentence pairs, 11.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/tl-tr.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Turkish-Ukrainian (27,496 sentence pairs, 0.26M words) - TMX format' href="download.php?f=OpenSubtitles2011/tr-uk.tmx.gz">27.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Urdu (809 sentence pairs, 12.48k words) - TMX format' href="download.php?f=OpenSubtitles2011/tr-ur.tmx.gz">0.8k</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Turkish-Vietnamese (171,851 sentence pairs, 2.02M words) - TMX format' href="download.php?f=OpenSubtitles2011/tr-vi.tmx.gz">0.2M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Turkish-Chinese (279,459 sentence pairs, 1.69M words) - TMX format' href="download.php?f=OpenSubtitles2011/tr-zh.tmx.gz">0.3M</a>
</td></tr> <tr><th>uk</th><td>273</td> <td>1.2M</td> <td>0.2M</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Ukrainian-Arabic (11,927 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-uk.txt.zip">11.9k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Ukrainian-Bulgarian (30,657 sentence pairs, 0.32M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-uk.txt.zip">30.7k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Ukrainian-Bosnian (5,860 sentence pairs, 55.27k words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-uk.txt.zip">5.9k</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Ukrainian-Czech (42,515 sentence pairs, 0.43M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-uk.txt.zip">42.5k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Ukrainian-Danish (14,324 sentence pairs, 0.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-uk.txt.zip">14.3k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='Ukrainian-German (11,970 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-uk.txt.zip">12.0k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Ukrainian-Greek (36,137 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-uk.txt.zip">36.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Ukrainian-English (69,550 sentence pairs, 0.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-uk.txt.zip">69.5k</a>
</td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Ukrainian-Spanish (35,611 sentence pairs, 0.37M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-uk.txt.zip">35.6k</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='Ukrainian-Estonian (13,615 sentence pairs, 0.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-uk.txt.zip">13.6k</a>
</td><td></td><td></td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Ukrainian-Finnish (16,776 sentence pairs, 0.15M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-uk.txt.zip">16.8k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Ukrainian-French (37,058 sentence pairs, 0.39M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-uk.txt.zip">37.1k</a>
</td><td></td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Ukrainian-Hebrew (15,991 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-uk.txt.zip">16.0k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Ukrainian-Croatian (23,702 sentence pairs, 0.22M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-uk.txt.zip">23.7k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Ukrainian-Hungarian (35,644 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-uk.txt.zip">35.6k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Ukrainian-Indonesian (6,577 sentence pairs, 60.98k words) - Moses format' href="download.php?f=OpenSubtitles2011/id-uk.txt.zip">6.6k</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Ukrainian-Italian (12,923 sentence pairs, 0.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-uk.txt.zip">12.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Japanese (479 sentence pairs, 3.17k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-uk.txt.zip">0.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Georgian (203 sentence pairs, 13.04k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-uk.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Latvian (1,340 sentence pairs, 11.98k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-uk.txt.zip">1.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Macedonian (1,052 sentence pairs, 11.59k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-uk.txt.zip">1.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Ukrainian-Malay (3,433 sentence pairs, 32.69k words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-uk.txt.zip">3.4k</a>
</td><td bgcolor="#fff0eb"><a rel="nofollow" title='Ukrainian-Dutch (31,261 sentence pairs, 0.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-uk.txt.zip">31.3k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Ukrainian-Norwegian (8,961 sentence pairs, 89.06k words) - Moses format' href="download.php?f=OpenSubtitles2011/no-uk.txt.zip">9.0k</a>
</td><td></td><td bgcolor="#ffefea"><a rel="nofollow" title='Ukrainian-Polish (34,213 sentence pairs, 0.33M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-uk.txt.zip">34.2k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Ukrainian-Portuguese (36,524 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-uk.txt.zip">36.5k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='Ukrainian-Portuguese (39,330 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-uk.txt.zip">39.3k</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Ukrainian-Romanian (36,026 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-uk.txt.zip">36.0k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='Ukrainian-Russian (31,460 sentence pairs, 0.29M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-uk.txt.zip">31.5k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Ukrainian-scc (24,794 sentence pairs, 0.24M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-uk.txt.zip">24.8k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Sinhala (1,083 sentence pairs, 12.48k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-uk.txt.zip">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Slovak (1,722 sentence pairs, 16.04k words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-uk.txt.zip">1.7k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='Ukrainian-Slovenian (29,233 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-uk.txt.zip">29.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ukrainian-Albanian (1,690 sentence pairs, 26.12k words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-uk.txt.zip">1.7k</a>
</td><td bgcolor="#ffe5e3"><a rel="nofollow" title='Ukrainian-Swedish (18,376 sentence pairs, 0.19M words) - Moses format' href="download.php?f=OpenSubtitles2011/sv-uk.txt.zip">18.4k</a>
</td><td></td><td></td><td bgcolor="#ffebe7"><a rel="nofollow" title='Ukrainian-Turkish (28,426 sentence pairs, 0.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/tr-uk.txt.zip">28.4k</a>
</td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Ukrainian-Vietnamese (4,176 sentence pairs, 49.69k words) - TMX format' href="download.php?f=OpenSubtitles2011/uk-vi.tmx.gz">4.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Chinese (2,241 sentence pairs, 16.03k words) - TMX format' href="download.php?f=OpenSubtitles2011/uk-zh.tmx.gz">2.2k</a>
</td></tr> <tr><th>ur</th><td>3</td> <td>24.9k</td> <td>2.3k</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Arabic (692 sentence pairs, 12.27k words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-ur.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Greek (772 sentence pairs, 13.89k words) - Moses format' href="download.php?f=OpenSubtitles2011/el-ur.txt.zip">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Spanish (806 sentence pairs, 13.94k words) - Moses format' href="download.php?f=OpenSubtitles2011/es-ur.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Polish (712 sentence pairs, 11.95k words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-ur.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-Albanian (797 sentence pairs, 14.44k words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-ur.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Urdu-Turkish (816 sentence pairs, 12.51k words) - Moses format' href="download.php?f=OpenSubtitles2011/tr-ur.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td></tr> <tr><th>vi</th><td>634</td> <td>5.8M</td> <td>0.7M</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Vietnamese-Arabic (105,535 sentence pairs, 1.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-vi.txt.zip">0.1M</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Vietnamese-Bulgarian (189,079 sentence pairs, 2.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-vi.txt.zip">0.2M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Vietnamese-Bosnian (37,034 sentence pairs, 0.46M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-vi.txt.zip">37.0k</a>
</td><td></td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Vietnamese-Czech (180,255 sentence pairs, 2.14M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ffffea"><a rel="nofollow" title='Vietnamese-Danish (105,629 sentence pairs, 1.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-vi.txt.zip">0.1M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='Vietnamese-German (36,221 sentence pairs, 0.48M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-vi.txt.zip">36.2k</a>
</td><td bgcolor="#f2ffd3"><a rel="nofollow" title='Vietnamese-Greek (175,656 sentence pairs, 2.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-vi.txt.zip">0.2M</a>
</td><td bgcolor="#e8ffca"><a rel="nofollow" title='Vietnamese-English (333,315 sentence pairs, 4.18M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-vi.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ecffcd"><a rel="nofollow" title='Vietnamese-Spanish (242,409 sentence pairs, 3.04M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Vietnamese-Estonian (106,024 sentence pairs, 1.25M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-vi.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#ffffe2"><a rel="nofollow" title='Vietnamese-Finnish (159,155 sentence pairs, 1.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-vi.txt.zip">0.2M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Vietnamese-French (181,627 sentence pairs, 2.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-vi.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffffe6"><a rel="nofollow" title='Vietnamese-Hebrew (124,442 sentence pairs, 1.57M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-vi.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Vietnamese-Croatian (126,924 sentence pairs, 1.54M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-vi.txt.zip">0.1M</a>
</td><td bgcolor="#f1ffd2"><a rel="nofollow" title='Vietnamese-Hungarian (201,678 sentence pairs, 2.31M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-vi.txt.zip">0.2M</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='Vietnamese-Indonesian (81,710 sentence pairs, 0.99M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-vi.txt.zip">81.7k</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Vietnamese-Icelandic (6,682 sentence pairs, 86.31k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-vi.txt.zip">6.7k</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Vietnamese-Italian (68,893 sentence pairs, 0.92M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-vi.txt.zip">68.9k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Vietnamese-Japanese (7,891 sentence pairs, 80.36k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-vi.txt.zip">7.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Georgian (438 sentence pairs, 6.50k words) - Moses format' href="download.php?f=OpenSubtitles2011/ka-vi.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Vietnamese-Lithuanian (9,588 sentence pairs, 0.11M words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-vi.txt.zip">9.6k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Vietnamese-Latvian (3,351 sentence pairs, 40.33k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-vi.txt.zip">3.4k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Vietnamese-Macedonian (5,684 sentence pairs, 66.90k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-vi.txt.zip">5.7k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Vietnamese-Malay (31,022 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-vi.txt.zip">31.0k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Vietnamese-Dutch (216,798 sentence pairs, 2.84M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-vi.txt.zip">0.2M</a>
</td><td bgcolor="#fffeef"><a rel="nofollow" title='Vietnamese-Norwegian (74,736 sentence pairs, 0.94M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-vi.txt.zip">74.7k</a>
</td><td></td><td bgcolor="#ffffe3"><a rel="nofollow" title='Vietnamese-Polish (149,505 sentence pairs, 1.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-vi.txt.zip">0.1M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Vietnamese-Portuguese (212,894 sentence pairs, 2.70M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Vietnamese-Portuguese (239,333 sentence pairs, 2.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-vi.txt.zip">0.2M</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Vietnamese-Romanian (223,353 sentence pairs, 2.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-vi.txt.zip">0.2M</a>
</td><td bgcolor="#fffef0"><a rel="nofollow" title='Vietnamese-Russian (74,046 sentence pairs, 0.90M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-vi.txt.zip">74.0k</a>
</td><td bgcolor="#ffffe2"><a rel="nofollow" title='Vietnamese-scc (149,811 sentence pairs, 1.85M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-vi.txt.zip">0.1M</a>
</td><td></td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Vietnamese-Slovak (30,698 sentence pairs, 0.36M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-vi.txt.zip">30.7k</a>
</td><td bgcolor="#f3ffd4"><a rel="nofollow" title='Vietnamese-Slovenian (182,406 sentence pairs, 2.16M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-vi.txt.zip">0.2M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Vietnamese-Albanian (31,678 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-vi.txt.zip">31.7k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Vietnamese-Swedish (123,572 sentence pairs, 1.58M words) - Moses format' href="download.php?f=OpenSubtitles2011/sv-vi.txt.zip">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Vietnamese-Thai (811 sentence pairs, 7.65k words) - Moses format' href="download.php?f=OpenSubtitles2011/th-vi.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Vietnamese-Turkish (186,636 sentence pairs, 2.12M words) - Moses format' href="download.php?f=OpenSubtitles2011/tr-vi.txt.zip">0.2M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Vietnamese-Ukrainian (4,235 sentence pairs, 49.93k words) - Moses format' href="download.php?f=OpenSubtitles2011/uk-vi.txt.zip">4.2k</a>
</td><td></td><td></td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Vietnamese-Chinese (25,106 sentence pairs, 0.23M words) - TMX format' href="download.php?f=OpenSubtitles2011/vi-zh.tmx.gz">25.1k</a>
</td></tr> <tr><th>zh</th><td>2,055</td> <td>16.3M</td> <td>1.8M</td><td bgcolor="#ffffea"><a rel="nofollow" title='Chinese-Arabic (184,275 sentence pairs, 1.35M words) - Moses format' href="download.php?f=OpenSubtitles2011/ar-zh.txt.zip">0.2M</a>
</td><td bgcolor="#f9ffda"><a rel="nofollow" title='Chinese-Bulgarian (292,918 sentence pairs, 2.02M words) - Moses format' href="download.php?f=OpenSubtitles2011/bg-zh.txt.zip">0.3M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Chinese-Bosnian (58,771 sentence pairs, 0.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/bs-zh.txt.zip">58.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Catalan (2,826 sentence pairs, 20.55k words) - Moses format' href="download.php?f=OpenSubtitles2011/ca-zh.txt.zip">2.8k</a>
</td><td bgcolor="#f8ffd9"><a rel="nofollow" title='Chinese-Czech (302,785 sentence pairs, 2.03M words) - Moses format' href="download.php?f=OpenSubtitles2011/cs-zh.txt.zip">0.3M</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Chinese-Danish (156,576 sentence pairs, 1.20M words) - Moses format' href="download.php?f=OpenSubtitles2011/da-zh.txt.zip">0.2M</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Chinese-German (51,430 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/de-zh.txt.zip">51.4k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Chinese-Greek (260,845 sentence pairs, 1.93M words) - Moses format' href="download.php?f=OpenSubtitles2011/el-zh.txt.zip">0.3M</a>
</td><td bgcolor="#e7ffca"><a rel="nofollow" title='Chinese-English (608,134 sentence pairs, 4.65M words) - Moses format' href="download.php?f=OpenSubtitles2011/en-zh.txt.zip">0.6M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Esperanto (581 sentence pairs, 3.38k words) - Moses format' href="download.php?f=OpenSubtitles2011/eo-zh.txt.zip">0.6k</a>
</td><td bgcolor="#ecffcd"><a rel="nofollow" title='Chinese-Spanish (422,326 sentence pairs, 3.09M words) - Moses format' href="download.php?f=OpenSubtitles2011/es-zh.txt.zip">0.4M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Chinese-Estonian (123,255 sentence pairs, 0.83M words) - Moses format' href="download.php?f=OpenSubtitles2011/et-zh.txt.zip">0.1M</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chinese-Persian (292 sentence pairs, 2.96k words) - Moses format' href="download.php?f=OpenSubtitles2011/fa-zh.txt.zip">0.3k</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Finnish (212,065 sentence pairs, 1.27M words) - Moses format' href="download.php?f=OpenSubtitles2011/fi-zh.txt.zip">0.2M</a>
</td><td bgcolor="#f4ffd5"><a rel="nofollow" title='Chinese-French (278,150 sentence pairs, 2.13M words) - Moses format' href="download.php?f=OpenSubtitles2011/fr-zh.txt.zip">0.3M</a>
</td><td></td><td bgcolor="#ffffe9"><a rel="nofollow" title='Chinese-Hebrew (212,459 sentence pairs, 1.42M words) - Moses format' href="download.php?f=OpenSubtitles2011/he-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffffeb"><a rel="nofollow" title='Chinese-Croatian (184,202 sentence pairs, 1.28M words) - Moses format' href="download.php?f=OpenSubtitles2011/hr-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffffe0"><a rel="nofollow" title='Chinese-Hungarian (316,006 sentence pairs, 1.98M words) - Moses format' href="download.php?f=OpenSubtitles2011/hu-zh.txt.zip">0.3M</a>
</td><td bgcolor="#fff3ed"><a rel="nofollow" title='Chinese-Indonesian (57,912 sentence pairs, 0.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/id-zh.txt.zip">57.9k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Chinese-Icelandic (7,273 sentence pairs, 52.53k words) - Moses format' href="download.php?f=OpenSubtitles2011/is-zh.txt.zip">7.3k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Chinese-Italian (102,292 sentence pairs, 0.79M words) - Moses format' href="download.php?f=OpenSubtitles2011/it-zh.txt.zip">0.1M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Japanese (5,495 sentence pairs, 16.56k words) - Moses format' href="download.php?f=OpenSubtitles2011/ja-zh.txt.zip">5.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Chinese-Lithuanian (6,916 sentence pairs, 41.58k words) - Moses format' href="download.php?f=OpenSubtitles2011/lt-zh.txt.zip">6.9k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Chinese-Latvian (6,446 sentence pairs, 43.62k words) - Moses format' href="download.php?f=OpenSubtitles2011/lv-zh.txt.zip">6.4k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Chinese-Macedonian (8,231 sentence pairs, 59.01k words) - Moses format' href="download.php?f=OpenSubtitles2011/mk-zh.txt.zip">8.2k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Chinese-Malay (25,055 sentence pairs, 0.17M words) - Moses format' href="download.php?f=OpenSubtitles2011/ms-zh.txt.zip">25.1k</a>
</td><td bgcolor="#edffce"><a rel="nofollow" title='Chinese-Dutch (361,234 sentence pairs, 2.82M words) - Moses format' href="download.php?f=OpenSubtitles2011/nl-zh.txt.zip">0.4M</a>
</td><td bgcolor="#fff9f1"><a rel="nofollow" title='Chinese-Norwegian (76,646 sentence pairs, 0.56M words) - Moses format' href="download.php?f=OpenSubtitles2011/no-zh.txt.zip">76.6k</a>
</td><td></td><td bgcolor="#ffffea"><a rel="nofollow" title='Chinese-Polish (205,511 sentence pairs, 1.34M words) - Moses format' href="download.php?f=OpenSubtitles2011/pl-zh.txt.zip">0.2M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Portuguese (330,304 sentence pairs, 2.41M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt-zh.txt.zip">0.3M</a>
</td><td bgcolor="#eeffcf"><a rel="nofollow" title='Chinese-Portuguese (387,993 sentence pairs, 2.77M words) - Moses format' href="download.php?f=OpenSubtitles2011/pt_br-zh.txt.zip">0.4M</a>
</td><td bgcolor="#f0ffd1"><a rel="nofollow" title='Chinese-Romanian (322,516 sentence pairs, 2.40M words) - Moses format' href="download.php?f=OpenSubtitles2011/ro-zh.txt.zip">0.3M</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='Chinese-Russian (84,944 sentence pairs, 0.59M words) - Moses format' href="download.php?f=OpenSubtitles2011/ru-zh.txt.zip">84.9k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Chinese-scc (211,854 sentence pairs, 1.47M words) - Moses format' href="download.php?f=OpenSubtitles2011/scc-zh.txt.zip">0.2M</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Sinhala (2,616 sentence pairs, 17.30k words) - Moses format' href="download.php?f=OpenSubtitles2011/si-zh.txt.zip">2.6k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Chinese-Slovak (54,917 sentence pairs, 0.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/sk-zh.txt.zip">54.9k</a>
</td><td bgcolor="#ffffe7"><a rel="nofollow" title='Chinese-Slovenian (231,601 sentence pairs, 1.52M words) - Moses format' href="download.php?f=OpenSubtitles2011/sl-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Chinese-Albanian (25,178 sentence pairs, 0.20M words) - Moses format' href="download.php?f=OpenSubtitles2011/sq-zh.txt.zip">25.2k</a>
</td><td bgcolor="#ffffe9"><a rel="nofollow" title='Chinese-Swedish (188,888 sentence pairs, 1.38M words) - Moses format' href="download.php?f=OpenSubtitles2011/sv-zh.txt.zip">0.2M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Chinese-Thai (2,640 sentence pairs, 8.99k words) - Moses format' href="download.php?f=OpenSubtitles2011/th-zh.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#ffffe4"><a rel="nofollow" title='Chinese-Turkish (290,617 sentence pairs, 1.73M words) - Moses format' href="download.php?f=OpenSubtitles2011/tr-zh.txt.zip">0.3M</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Chinese-Ukrainian (2,276 sentence pairs, 16.12k words) - Moses format' href="download.php?f=OpenSubtitles2011/uk-zh.txt.zip">2.3k</a>
</td><td></td><td bgcolor="#ffe9e6"><a rel="nofollow" title='Chinese-Vietnamese (25,503 sentence pairs, 0.23M words) - Moses format' href="download.php?f=OpenSubtitles2011/vi-zh.txt.zip">25.5k</a>
</td><td></td></tr></table></div><p />Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p />
-->
<hr /><div class="footer"></div>
</body>
</html>