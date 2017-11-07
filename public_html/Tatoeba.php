<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>Tatoeba</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1>Tatoeba</h1>This is a collection of translated sentences from <a href="http://tatoeba.org/">Tatoeba</a><p>129 languages, 890 bitexts<br>total number of files: 129<br>total number of tokens: 21.29M<br>total number of sentence fragments: 2.94M<br><p>Please <a href="http://opus.lingfil.uu.se/LREC2012.txt">cite the following article</a> if you use any part of the corpus in your own work:<br/> J&ouml;rg Tiedemann, 2012, <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf"><i>Parallel Data, Tools and Interfaces in OPUS.</i></a> In Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC 2012)<br/><h3>Download</h3>Complete download of aligned documents (in XML): <a href="download.php?f=Tatoeba/Tatoeba2014-07-28.tar.gz">Tatoeba2014-07-28.tar.gz</a> (262M
)<br><p><table><tr><td>Bottom-left triangle: download files<ul><li><i>ces</i> = sentence alignments in XCES format</li> <li><i>leftmost column language IDs</i> = tokenized corpus files in XML</li> <li>TMX and plain text files (Moses): see "Statistics" below</li> <li><i>lower row language IDs</i> = parsed corpus files (if they exist)</li></ul></td><td>Upper-right triangle: sample files <ul><li><i>view</i> = bilingual XML file samples</li> <li><i>upper row language IDs</i> = monolingual XML file samples</li> <li><i>rightmost column language IDs</i> = untokenized corpus files</li></ul></td></tr></table><p><div class="sample"><table border="0" cellpadding="0">
<tr>
<th></th>
<th><a rel="nofollow" href="Tatoeba/acm_sample.html">acm</a></th>
<th><a rel="nofollow" href="Tatoeba/af_sample.html">af</a></th>
<th><a rel="nofollow" href="Tatoeba/ain_sample.html">ain</a></th>
<th><a rel="nofollow" href="Tatoeba/ang_sample.html">ang</a></th>
<th><a rel="nofollow" href="Tatoeba/ar_sample.html">ar</a></th>
<th><a rel="nofollow" href="Tatoeba/arq_sample.html">arq</a></th>
<th><a rel="nofollow" href="Tatoeba/arz_sample.html">arz</a></th>
<th><a rel="nofollow" href="Tatoeba/ast_sample.html">ast</a></th>
<th><a rel="nofollow" href="Tatoeba/avk_sample.html">avk</a></th>
<th><a rel="nofollow" href="Tatoeba/az_sample.html">az</a></th>
<th><a rel="nofollow" href="Tatoeba/be_sample.html">be</a></th>
<th><a rel="nofollow" href="Tatoeba/ber_sample.html">ber</a></th>
<th><a rel="nofollow" href="Tatoeba/bg_sample.html">bg</a></th>
<th><a rel="nofollow" href="Tatoeba/bn_sample.html">bn</a></th>
<th><a rel="nofollow" href="Tatoeba/bod_sample.html">bod</a></th>
<th><a rel="nofollow" href="Tatoeba/br_sample.html">br</a></th>
<th><a rel="nofollow" href="Tatoeba/bs_sample.html">bs</a></th>
<th><a rel="nofollow" href="Tatoeba/ca_sample.html">ca</a></th>
<th><a rel="nofollow" href="Tatoeba/ch_sample.html">ch</a></th>
<th><a rel="nofollow" href="Tatoeba/ckt_sample.html">ckt</a></th>
<th><a rel="nofollow" href="Tatoeba/cmn_sample.html">cmn</a></th>
<th><a rel="nofollow" href="Tatoeba/cs_sample.html">cs</a></th>
<th></th>
<th><a rel="nofollow" href="Tatoeba/cy_sample.html">cy</a></th>
<th><a rel="nofollow" href="Tatoeba/cycl_sample.html">cycl</a></th>
<th><a rel="nofollow" href="Tatoeba/da_sample.html">da</a></th>
<th><a rel="nofollow" href="Tatoeba/de_sample.html">de</a></th>
<th><a rel="nofollow" href="Tatoeba/dsb_sample.html">dsb</a></th>
<th><a rel="nofollow" href="Tatoeba/ee_sample.html">ee</a></th>
<th><a rel="nofollow" href="Tatoeba/el_sample.html">el</a></th>
<th><a rel="nofollow" href="Tatoeba/en_sample.html">en</a></th>
<th><a rel="nofollow" href="Tatoeba/eo_sample.html">eo</a></th>
<th><a rel="nofollow" href="Tatoeba/es_sample.html">es</a></th>
<th><a rel="nofollow" href="Tatoeba/et_sample.html">et</a></th>
<th><a rel="nofollow" href="Tatoeba/eu_sample.html">eu</a></th>
<th><a rel="nofollow" href="Tatoeba/fi_sample.html">fi</a></th>
<th><a rel="nofollow" href="Tatoeba/fo_sample.html">fo</a></th>
<th><a rel="nofollow" href="Tatoeba/fr_sample.html">fr</a></th>
<th><a rel="nofollow" href="Tatoeba/fy_sample.html">fy</a></th>
<th><a rel="nofollow" href="Tatoeba/ga_sample.html">ga</a></th>
<th><a rel="nofollow" href="Tatoeba/gd_sample.html">gd</a></th>
<th><a rel="nofollow" href="Tatoeba/gl_sample.html">gl</a></th>
<th><a rel="nofollow" href="Tatoeba/gn_sample.html">gn</a></th>
<th><a rel="nofollow" href="Tatoeba/he_sample.html">he</a></th>
<th><a rel="nofollow" href="Tatoeba/hi_sample.html">hi</a></th>
<th><a rel="nofollow" href="Tatoeba/hil_sample.html">hil</a></th>
<th></th>
<th><a rel="nofollow" href="Tatoeba/hr_sample.html">hr</a></th>
<th><a rel="nofollow" href="Tatoeba/hsb_sample.html">hsb</a></th>
<th><a rel="nofollow" href="Tatoeba/hu_sample.html">hu</a></th>
<th><a rel="nofollow" href="Tatoeba/hy_sample.html">hy</a></th>
<th><a rel="nofollow" href="Tatoeba/ia_sample.html">ia</a></th>
<th><a rel="nofollow" href="Tatoeba/id_sample.html">id</a></th>
<th><a rel="nofollow" href="Tatoeba/ie_sample.html">ie</a></th>
<th><a rel="nofollow" href="Tatoeba/io_sample.html">io</a></th>
<th><a rel="nofollow" href="Tatoeba/is_sample.html">is</a></th>
<th><a rel="nofollow" href="Tatoeba/it_sample.html">it</a></th>
<th><a rel="nofollow" href="Tatoeba/ja_sample.html">ja</a></th>
<th><a rel="nofollow" href="Tatoeba/jbo_sample.html">jbo</a></th>
<th><a rel="nofollow" href="Tatoeba/ka_sample.html">ka</a></th>
<th><a rel="nofollow" href="Tatoeba/kk_sample.html">kk</a></th>
<th><a rel="nofollow" href="Tatoeba/km_sample.html">km</a></th>
<th><a rel="nofollow" href="Tatoeba/ko_sample.html">ko</a></th>
<th><a rel="nofollow" href="Tatoeba/ksh_sample.html">ksh</a></th>
<th><a rel="nofollow" href="Tatoeba/ku_sample.html">ku</a></th>
<th><a rel="nofollow" href="Tatoeba/kw_sample.html">kw</a></th>
<th><a rel="nofollow" href="Tatoeba/la_sample.html">la</a></th>
<th><a rel="nofollow" href="Tatoeba/lad_sample.html">lad</a></th>
<th><a rel="nofollow" href="Tatoeba/lld_sample.html">lld</a></th>
<th><a rel="nofollow" href="Tatoeba/lo_sample.html">lo</a></th>
<th></th>
<th><a rel="nofollow" href="Tatoeba/lt_sample.html">lt</a></th>
<th><a rel="nofollow" href="Tatoeba/lv_sample.html">lv</a></th>
<th><a rel="nofollow" href="Tatoeba/lzh_sample.html">lzh</a></th>
<th><a rel="nofollow" href="Tatoeba/mg_sample.html">mg</a></th>
<th><a rel="nofollow" href="Tatoeba/mi_sample.html">mi</a></th>
<th><a rel="nofollow" href="Tatoeba/ml_sample.html">ml</a></th>
<th><a rel="nofollow" href="Tatoeba/mn_sample.html">mn</a></th>
<th><a rel="nofollow" href="Tatoeba/mr_sample.html">mr</a></th>
<th><a rel="nofollow" href="Tatoeba/mt_sample.html">mt</a></th>
<th><a rel="nofollow" href="Tatoeba/nan_sample.html">nan</a></th>
<th><a rel="nofollow" href="Tatoeba/nb_sample.html">nb</a></th>
<th><a rel="nofollow" href="Tatoeba/nds_sample.html">nds</a></th>
<th><a rel="nofollow" href="Tatoeba/nl_sample.html">nl</a></th>
<th><a rel="nofollow" href="Tatoeba/non_sample.html">non</a></th>
<th><a rel="nofollow" href="Tatoeba/nov_sample.html">nov</a></th>
<th><a rel="nofollow" href="Tatoeba/npi_sample.html">npi</a></th>
<th><a rel="nofollow" href="Tatoeba/oc_sample.html">oc</a></th>
<th><a rel="nofollow" href="Tatoeba/orv_sample.html">orv</a></th>
<th><a rel="nofollow" href="Tatoeba/os_sample.html">os</a></th>
<th><a rel="nofollow" href="Tatoeba/pcd_sample.html">pcd</a></th>
<th><a rel="nofollow" href="Tatoeba/pes_sample.html">pes</a></th>
<th><a rel="nofollow" href="Tatoeba/pl_sample.html">pl</a></th>
<th><a rel="nofollow" href="Tatoeba/pms_sample.html">pms</a></th>
<th></th>
<th><a rel="nofollow" href="Tatoeba/pnb_sample.html">pnb</a></th>
<th><a rel="nofollow" href="Tatoeba/prg_sample.html">prg</a></th>
<th><a rel="nofollow" href="Tatoeba/pt_sample.html">pt</a></th>
<th><a rel="nofollow" href="Tatoeba/qu_sample.html">qu</a></th>
<th><a rel="nofollow" href="Tatoeba/qya_sample.html">qya</a></th>
<th><a rel="nofollow" href="Tatoeba/rm_sample.html">rm</a></th>
<th><a rel="nofollow" href="Tatoeba/ro_sample.html">ro</a></th>
<th><a rel="nofollow" href="Tatoeba/ru_sample.html">ru</a></th>
<th><a rel="nofollow" href="Tatoeba/sa_sample.html">sa</a></th>
<th><a rel="nofollow" href="Tatoeba/scn_sample.html">scn</a></th>
<th><a rel="nofollow" href="Tatoeba/sjn_sample.html">sjn</a></th>
<th><a rel="nofollow" href="Tatoeba/sl_sample.html">sl</a></th>
<th><a rel="nofollow" href="Tatoeba/sq_sample.html">sq</a></th>
<th><a rel="nofollow" href="Tatoeba/sr_sample.html">sr</a></th>
<th><a rel="nofollow" href="Tatoeba/sv_sample.html">sv</a></th>
<th><a rel="nofollow" href="Tatoeba/swh_sample.html">swh</a></th>
<th><a rel="nofollow" href="Tatoeba/te_sample.html">te</a></th>
<th><a rel="nofollow" href="Tatoeba/tg_sample.html">tg</a></th>
<th><a rel="nofollow" href="Tatoeba/th_sample.html">th</a></th>
<th><a rel="nofollow" href="Tatoeba/tl_sample.html">tl</a></th>
<th><a rel="nofollow" href="Tatoeba/tlh_sample.html">tlh</a></th>
<th><a rel="nofollow" href="Tatoeba/toki_sample.html">toki</a></th>
<th><a rel="nofollow" href="Tatoeba/tpi_sample.html">tpi</a></th>
<th></th>
<th><a rel="nofollow" href="Tatoeba/tpw_sample.html">tpw</a></th>
<th><a rel="nofollow" href="Tatoeba/tr_sample.html">tr</a></th>
<th><a rel="nofollow" href="Tatoeba/tt_sample.html">tt</a></th>
<th><a rel="nofollow" href="Tatoeba/ug_sample.html">ug</a></th>
<th><a rel="nofollow" href="Tatoeba/uk_sample.html">uk</a></th>
<th><a rel="nofollow" href="Tatoeba/ur_sample.html">ur</a></th>
<th><a rel="nofollow" href="Tatoeba/uz_sample.html">uz</a></th>
<th><a rel="nofollow" href="Tatoeba/vi_sample.html">vi</a></th>
<th><a rel="nofollow" href="Tatoeba/vo_sample.html">vo</a></th>
<th><a rel="nofollow" href="Tatoeba/wuu_sample.html">wuu</a></th>
<th><a rel="nofollow" href="Tatoeba/xal_sample.html">xal</a></th>
<th><a rel="nofollow" href="Tatoeba/xh_sample.html">xh</a></th>
<th><a rel="nofollow" href="Tatoeba/yi_sample.html">yi</a></th>
<th><a rel="nofollow" href="Tatoeba/yue_sample.html">yue</a></th>
<th><a rel="nofollow" href="Tatoeba/zsm_sample.html">zsm</a></th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/acm.tar.gz">acm</a></th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>acm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="acm-English (sample file)" href="Tatoeba/acm-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>acm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="acm-Japanese (sample file)" href="Tatoeba/acm-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>acm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>acm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>acm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/acm.raw.tar.gz">acm</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/af.tar.gz">af</a></th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-cmn (sample file)" href="Tatoeba/af-cmn_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Czech (sample file)" href="Tatoeba/af-cs_sample.html">view</a></td><th>af</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-German (sample file)" href="Tatoeba/af-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-English (sample file)" href="Tatoeba/af-en_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Esperanto (sample file)" href="Tatoeba/af-eo_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Spanish (sample file)" href="Tatoeba/af-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-French (sample file)" href="Tatoeba/af-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Italian (sample file)" href="Tatoeba/af-it_sample.html">view</a></td><td><a rel="nofollow" title="Afrikaans-Japanese (sample file)" href="Tatoeba/af-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td></td><td><a rel="nofollow" title="Afrikaans-Portuguese (sample file)" href="Tatoeba/af-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>af</th>
<td></td><td><a rel="nofollow" title="Afrikaans-Turkish (sample file)" href="Tatoeba/af-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Afrikaans-Vietnamese (sample file)" href="Tatoeba/af-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/af.raw.tar.gz">af</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ain.tar.gz">ain</a></th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ain</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ainu-English (sample file)" href="Tatoeba/ain-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ainu-French (sample file)" href="Tatoeba/ain-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ain</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ain</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ain</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ain</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ain.raw.tar.gz">ain</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ang.tar.gz">ang</a></th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ang</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-German (sample file)" href="Tatoeba/ang-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-English (sample file)" href="Tatoeba/ang-en_sample.html">view</a></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-Esperanto (sample file)" href="Tatoeba/ang-eo_sample.html">view</a></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-Spanish (sample file)" href="Tatoeba/ang-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-French (sample file)" href="Tatoeba/ang-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ang</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="English, Old (ca.450-1100)-Italian (sample file)" href="Tatoeba/ang-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ang</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ang</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ang</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ang.raw.tar.gz">ang</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ar.tar.gz">ar</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Berber languages) (sample file)" href="Tatoeba/ar-ber_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Bulgarian (sample file)" href="Tatoeba/ar-bg_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-cmn (sample file)" href="Tatoeba/ar-cmn_sample.html">view</a></td><td></td><th>ar</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-German (sample file)" href="Tatoeba/ar-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Greek (sample file)" href="Tatoeba/ar-el_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-English (sample file)" href="Tatoeba/ar-en_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Esperanto (sample file)" href="Tatoeba/ar-eo_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Spanish (sample file)" href="Tatoeba/ar-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-French (sample file)" href="Tatoeba/ar-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Hebrew (sample file)" href="Tatoeba/ar-he_sample.html">view</a></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Italian (sample file)" href="Tatoeba/ar-it_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Japanese (sample file)" href="Tatoeba/ar-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Korean (sample file)" href="Tatoeba/ar-ko_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Maltese (sample file)" href="Tatoeba/ar-mt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Polish (sample file)" href="Tatoeba/ar-pl_sample.html">view</a></td><td></td><th>ar</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-Russian (sample file)" href="Tatoeba/ar-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ar</th>
<td></td><td><a rel="nofollow" title="Arabic-Turkish (sample file)" href="Tatoeba/ar-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Arabic-Uighur (sample file)" href="Tatoeba/ar-ug_sample.html">view</a></td><td><a rel="nofollow" title="Arabic-Ukrainian (sample file)" href="Tatoeba/ar-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Arabic-zsm (sample file)" href="Tatoeba/ar-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ar.raw.tar.gz">ar</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/arq.tar.gz">arq</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arq-English (sample file)" href="Tatoeba/arq-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arq-French (sample file)" href="Tatoeba/arq-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arq-Japanese (sample file)" href="Tatoeba/arq-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/arq.raw.tar.gz">arq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/arz.tar.gz">arz</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arz-cmn (sample file)" href="Tatoeba/arz-cmn_sample.html">view</a></td><td></td><th>arz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arz-Greek (sample file)" href="Tatoeba/arz-el_sample.html">view</a></td><td><a rel="nofollow" title="arz-English (sample file)" href="Tatoeba/arz-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="arz-Japanese (sample file)" href="Tatoeba/arz-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>arz</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/arz.raw.tar.gz">arz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ast.tar.gz">ast</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ast</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Asturian-English (sample file)" href="Tatoeba/ast-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Asturian-Spanish (sample file)" href="Tatoeba/ast-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Asturian-French (sample file)" href="Tatoeba/ast-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ast</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ast</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ast</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ast</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ast.raw.tar.gz">ast</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/avk.tar.gz">avk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="avk-cmn (sample file)" href="Tatoeba/avk-cmn_sample.html">view</a></td><td></td><th>avk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="avk-English (sample file)" href="Tatoeba/avk-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="avk-Spanish (sample file)" href="Tatoeba/avk-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="avk-French (sample file)" href="Tatoeba/avk-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>avk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="avk-Italian (sample file)" href="Tatoeba/avk-it_sample.html">view</a></td><td><a rel="nofollow" title="avk-Japanese (sample file)" href="Tatoeba/avk-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>avk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>avk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>avk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/avk.raw.tar.gz">avk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/az.tar.gz">az</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-cmn (sample file)" href="Tatoeba/az-cmn_sample.html">view</a></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-English (sample file)" href="Tatoeba/az-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Azerbaijani-Japanese (sample file)" href="Tatoeba/az-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>az</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/az.raw.tar.gz">az</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/be.tar.gz">be</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-cmn (sample file)" href="Tatoeba/be-cmn_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Czech (sample file)" href="Tatoeba/be-cs_sample.html">view</a></td><th>be</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-German (sample file)" href="Tatoeba/be-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-English (sample file)" href="Tatoeba/be-en_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Esperanto (sample file)" href="Tatoeba/be-eo_sample.html">view</a></td><td><a rel="nofollow" title="Belarusian-Spanish (sample file)" href="Tatoeba/be-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-French (sample file)" href="Tatoeba/be-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Hebrew (sample file)" href="Tatoeba/be-he_sample.html">view</a></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Japanese (sample file)" href="Tatoeba/be-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Dutch (sample file)" href="Tatoeba/be-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Polish (sample file)" href="Tatoeba/be-pl_sample.html">view</a></td><td></td><th>be</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Russian (sample file)" href="Tatoeba/be-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Serbian (sample file)" href="Tatoeba/be-sr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>be</th>
<td></td><td><a rel="nofollow" title="Belarusian-Turkish (sample file)" href="Tatoeba/be-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Ukrainian (sample file)" href="Tatoeba/be-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Belarusian-Vietnamese (sample file)" href="Tatoeba/be-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/be.raw.tar.gz">be</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ber.tar.gz">ber</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Berber languages)-Arabic' (1.6k links, 0.6M tokens)" href="download.php?f=Tatoeba/ar-ber.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Berber languages)-cmn (sample file)" href="Tatoeba/ber-cmn_sample.html">view</a></td><td></td><th>ber</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Berber languages)-German (sample file)" href="Tatoeba/ber-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Berber languages)-English (sample file)" href="Tatoeba/ber-en_sample.html">view</a></td><td><a rel="nofollow" title="Berber languages)-Esperanto (sample file)" href="Tatoeba/ber-eo_sample.html">view</a></td><td><a rel="nofollow" title="Berber languages)-Spanish (sample file)" href="Tatoeba/ber-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Berber languages)-French (sample file)" href="Tatoeba/ber-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ber</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Berber languages)-Italian (sample file)" href="Tatoeba/ber-it_sample.html">view</a></td><td><a rel="nofollow" title="Berber languages)-Japanese (sample file)" href="Tatoeba/ber-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ber</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ber</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ber</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ber.raw.tar.gz">ber</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/bg.tar.gz">bg</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Bulgarian-Arabic' (7 links, 0.2M tokens)" href="download.php?f=Tatoeba/ar-bg.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-cmn (sample file)" href="Tatoeba/bg-cmn_sample.html">view</a></td><td></td><th>bg</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-German (sample file)" href="Tatoeba/bg-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Greek (sample file)" href="Tatoeba/bg-el_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-English (sample file)" href="Tatoeba/bg-en_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Esperanto (sample file)" href="Tatoeba/bg-eo_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Spanish (sample file)" href="Tatoeba/bg-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Finnish (sample file)" href="Tatoeba/bg-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bulgarian-French (sample file)" href="Tatoeba/bg-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td><a rel="nofollow" title="Bulgarian-Hungarian (sample file)" href="Tatoeba/bg-hu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Italian (sample file)" href="Tatoeba/bg-it_sample.html">view</a></td><td><a rel="nofollow" title="Bulgarian-Japanese (sample file)" href="Tatoeba/bg-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Dutch (sample file)" href="Tatoeba/bg-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Polish (sample file)" href="Tatoeba/bg-pl_sample.html">view</a></td><td></td><th>bg</th>
<td></td><td></td><td><a rel="nofollow" title="Bulgarian-Portuguese (sample file)" href="Tatoeba/bg-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Russian (sample file)" href="Tatoeba/bg-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bg</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bulgarian-Ukrainian (sample file)" href="Tatoeba/bg-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/bg.raw.tar.gz">bg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/bn.tar.gz">bn</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-cmn (sample file)" href="Tatoeba/bn-cmn_sample.html">view</a></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-English (sample file)" href="Tatoeba/bn-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-French (sample file)" href="Tatoeba/bn-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Italian (sample file)" href="Tatoeba/bn-it_sample.html">view</a></td><td><a rel="nofollow" title="Bengali-Japanese (sample file)" href="Tatoeba/bn-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bengali-Vietnamese (sample file)" href="Tatoeba/bn-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/bn.raw.tar.gz">bn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/bod.tar.gz">bod</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bod</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Tibetan-English (sample file)" href="Tatoeba/bod-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bod</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bod</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bod</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bod</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/bod.raw.tar.gz">bod</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/br.tar.gz">br</a></th>
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
<td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-Czech (sample file)" href="Tatoeba/br-cs_sample.html">view</a></td><th>br</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Breton-German (sample file)" href="Tatoeba/br-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-English (sample file)" href="Tatoeba/br-en_sample.html">view</a></td><td><a rel="nofollow" title="Breton-Esperanto (sample file)" href="Tatoeba/br-eo_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-French (sample file)" href="Tatoeba/br-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-Italian (sample file)" href="Tatoeba/br-it_sample.html">view</a></td><td><a rel="nofollow" title="Breton-Japanese (sample file)" href="Tatoeba/br-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Breton-Dutch (sample file)" href="Tatoeba/br-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>br</th>
<td></td><td><a rel="nofollow" title="Breton-Turkish (sample file)" href="Tatoeba/br-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/br.raw.tar.gz">br</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/bs.tar.gz">bs</a></th>
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
<td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-cmn (sample file)" href="Tatoeba/bs-cmn_sample.html">view</a></td><td></td><th>bs</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-German (sample file)" href="Tatoeba/bs-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-English (sample file)" href="Tatoeba/bs-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Bosnian-Spanish (sample file)" href="Tatoeba/bs-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-French (sample file)" href="Tatoeba/bs-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Italian (sample file)" href="Tatoeba/bs-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Bosnian-Russian (sample file)" href="Tatoeba/bs-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>bs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/bs.raw.tar.gz">bs</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ca.tar.gz">ca</a></th>
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
<td></td><td></td><td><a rel="nofollow" title="Catalan-cmn (sample file)" href="Tatoeba/ca-cmn_sample.html">view</a></td><td></td><th>ca</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-German (sample file)" href="Tatoeba/ca-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Greek (sample file)" href="Tatoeba/ca-el_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-English (sample file)" href="Tatoeba/ca-en_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Esperanto (sample file)" href="Tatoeba/ca-eo_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Spanish (sample file)" href="Tatoeba/ca-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Finnish (sample file)" href="Tatoeba/ca-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Catalan-French (sample file)" href="Tatoeba/ca-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Catalan-Italian (sample file)" href="Tatoeba/ca-it_sample.html">view</a></td><td><a rel="nofollow" title="Catalan-Japanese (sample file)" href="Tatoeba/ca-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ca</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ca.raw.tar.gz">ca</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ch.tar.gz">ch</a></th>
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
<td></td><td></td><td></td><th>ch</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Chamorro-English (sample file)" href="Tatoeba/ch-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Chamorro-French (sample file)" href="Tatoeba/ch-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ch</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ch</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ch</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ch</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ch.raw.tar.gz">ch</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ckt.tar.gz">ckt</a></th>
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
<td></td><td></td><th>ckt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="ckt-English (sample file)" href="Tatoeba/ckt-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ckt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ckt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ckt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ckt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ckt.raw.tar.gz">ckt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/cmn.tar.gz">cmn</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Afrikaans' (67 links, 0.1M tokens)" href="download.php?f=Tatoeba/af-cmn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Arabic' (57 links, 0.2M tokens)" href="download.php?f=Tatoeba/ar-cmn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-arz' (7 links, 0.1M tokens)" href="download.php?f=Tatoeba/arz-cmn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-avk' (6 links, 0.1M tokens)" href="download.php?f=Tatoeba/avk-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Azerbaijani' (1 links, 0.1M tokens)" href="download.php?f=Tatoeba/az-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Belarusian' (0.3k links, 0.1M tokens)" href="download.php?f=Tatoeba/be-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Berber languages)' (4 links, 0.6M tokens)" href="download.php?f=Tatoeba/ber-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Bulgarian' (0.3k links, 0.2M tokens)" href="download.php?f=Tatoeba/bg-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Bengali' (4 links, 0.1M tokens)" href="download.php?f=Tatoeba/bn-cmn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Bosnian' (32 links, 0.1M tokens)" href="download.php?f=Tatoeba/bs-cmn.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'cmn-Catalan' (79 links, 0.2M tokens)" href="download.php?f=Tatoeba/ca-cmn.xml.gz">ces</a></td>
<td></td>
<td></td>
<th><a rel="nofollow" title="cmn-cmn (sample file)" href="Tatoeba/cmn-cmn_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'cmn-cmn' (0.2k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-cmn.xml.gz">c</a>
</th><td><a rel="nofollow" title="cmn-Czech (sample file)" href="Tatoeba/cmn-cs_sample.html">view</a></td><th>cmn</th>
<td><a rel="nofollow" title="cmn-Welsh (sample file)" href="Tatoeba/cmn-cy_sample.html">view</a></td><td><a rel="nofollow" title="cmn-cycl (sample file)" href="Tatoeba/cmn-cycl_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Danish (sample file)" href="Tatoeba/cmn-da_sample.html">view</a></td><td><a rel="nofollow" title="cmn-German (sample file)" href="Tatoeba/cmn-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Greek (sample file)" href="Tatoeba/cmn-el_sample.html">view</a></td><td><a rel="nofollow" title="cmn-English (sample file)" href="Tatoeba/cmn-en_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Esperanto (sample file)" href="Tatoeba/cmn-eo_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Spanish (sample file)" href="Tatoeba/cmn-es_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Basque (sample file)" href="Tatoeba/cmn-eu_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Finnish (sample file)" href="Tatoeba/cmn-fi_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Faroese (sample file)" href="Tatoeba/cmn-fo_sample.html">view</a></td><td><a rel="nofollow" title="cmn-French (sample file)" href="Tatoeba/cmn-fr_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Western Frisian (sample file)" href="Tatoeba/cmn-fy_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Galician (sample file)" href="Tatoeba/cmn-gl_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Guarani (sample file)" href="Tatoeba/cmn-gn_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Hebrew (sample file)" href="Tatoeba/cmn-he_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Hindi (sample file)" href="Tatoeba/cmn-hi_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Hiligaynon (sample file)" href="Tatoeba/cmn-hil_sample.html">view</a></td><th>cmn</th>
<td><a rel="nofollow" title="cmn-Croatian (sample file)" href="Tatoeba/cmn-hr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Hungarian (sample file)" href="Tatoeba/cmn-hu_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Armenian (sample file)" href="Tatoeba/cmn-hy_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Indonesian (sample file)" href="Tatoeba/cmn-id_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Ido (sample file)" href="Tatoeba/cmn-io_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Icelandic (sample file)" href="Tatoeba/cmn-is_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Italian (sample file)" href="Tatoeba/cmn-it_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Japanese (sample file)" href="Tatoeba/cmn-ja_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Lojban (sample file)" href="Tatoeba/cmn-jbo_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Central Khmer (sample file)" href="Tatoeba/cmn-km_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Korean (sample file)" href="Tatoeba/cmn-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Kurdish (sample file)" href="Tatoeba/cmn-ku_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Latin (sample file)" href="Tatoeba/cmn-la_sample.html">view</a></td><td></td><td></td><td></td><th>cmn</th>
<td><a rel="nofollow" title="cmn-Lithuanian (sample file)" href="Tatoeba/cmn-lt_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Latvian (sample file)" href="Tatoeba/cmn-lv_sample.html">view</a></td><td><a rel="nofollow" title="cmn-lzh (sample file)" href="Tatoeba/cmn-lzh_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cmn-nan (sample file)" href="Tatoeba/cmn-nan_sample.html">view</a></td><td><a rel="nofollow" title="cmn-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/cmn-nb_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Low German (sample file)" href="Tatoeba/cmn-nds_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Dutch (sample file)" href="Tatoeba/cmn-nl_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Norse, Old (sample file)" href="Tatoeba/cmn-non_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Occitan (post 1500) (sample file)" href="Tatoeba/cmn-oc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cmn-pes (sample file)" href="Tatoeba/cmn-pes_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Polish (sample file)" href="Tatoeba/cmn-pl_sample.html">view</a></td><td></td><th>cmn</th>
<td></td><td></td><td><a rel="nofollow" title="cmn-Portuguese (sample file)" href="Tatoeba/cmn-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cmn-Romanian (sample file)" href="Tatoeba/cmn-ro_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Russian (sample file)" href="Tatoeba/cmn-ru_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cmn-Slovenian (sample file)" href="Tatoeba/cmn-sl_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Albanian (sample file)" href="Tatoeba/cmn-sq_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Serbian (sample file)" href="Tatoeba/cmn-sr_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Swedish (sample file)" href="Tatoeba/cmn-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Tajik (sample file)" href="Tatoeba/cmn-tg_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="cmn-Klingon (sample file)" href="Tatoeba/cmn-tlh_sample.html">view</a></td><td><a rel="nofollow" title="cmn-toki (sample file)" href="Tatoeba/cmn-toki_sample.html">view</a></td><td></td><th>cmn</th>
<td></td><td><a rel="nofollow" title="cmn-Turkish (sample file)" href="Tatoeba/cmn-tr_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Tatar (sample file)" href="Tatoeba/cmn-tt_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Uighur (sample file)" href="Tatoeba/cmn-ug_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Ukrainian (sample file)" href="Tatoeba/cmn-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Uzbek (sample file)" href="Tatoeba/cmn-uz_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Vietnamese (sample file)" href="Tatoeba/cmn-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-wuu (sample file)" href="Tatoeba/cmn-wuu_sample.html">view</a></td><td><a rel="nofollow" title="cmn-Kalmyk (sample file)" href="Tatoeba/cmn-xal_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cmn-Yiddish (sample file)" href="Tatoeba/cmn-yi_sample.html">view</a></td><td><a rel="nofollow" title="cmn-yue (sample file)" href="Tatoeba/cmn-yue_sample.html">view</a></td><td><a rel="nofollow" title="cmn-zsm (sample file)" href="Tatoeba/cmn-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/cmn.raw.tar.gz">cmn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/cs.tar.gz">cs</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Afrikaans' (1 links, 54.2k tokens)" href="download.php?f=Tatoeba/af-cs.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Belarusian' (6 links, 74.5k tokens)" href="download.php?f=Tatoeba/be-cs.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-Breton' (1 links, 46.5k tokens)" href="download.php?f=Tatoeba/br-cs.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Czech-cmn' (47 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-cs.xml.gz">ces</a></td>
<th></th>
<th>cs</th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Czech-German (sample file)" href="Tatoeba/cs-de_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Greek (sample file)" href="Tatoeba/cs-el_sample.html">view</a></td><td><a rel="nofollow" title="Czech-English (sample file)" href="Tatoeba/cs-en_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Esperanto (sample file)" href="Tatoeba/cs-eo_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Spanish (sample file)" href="Tatoeba/cs-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Finnish (sample file)" href="Tatoeba/cs-fi_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Faroese (sample file)" href="Tatoeba/cs-fo_sample.html">view</a></td><td><a rel="nofollow" title="Czech-French (sample file)" href="Tatoeba/cs-fr_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Western Frisian (sample file)" href="Tatoeba/cs-fy_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Hebrew (sample file)" href="Tatoeba/cs-he_sample.html">view</a></td><td></td><td></td><th>cs</th>
<td><a rel="nofollow" title="Czech-Croatian (sample file)" href="Tatoeba/cs-hr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Hungarian (sample file)" href="Tatoeba/cs-hu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Czech-Indonesian (sample file)" href="Tatoeba/cs-id_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Italian (sample file)" href="Tatoeba/cs-it_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Japanese (sample file)" href="Tatoeba/cs-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Latin (sample file)" href="Tatoeba/cs-la_sample.html">view</a></td><td></td><td></td><td></td><th>cs</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/cs-nb_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Dutch (sample file)" href="Tatoeba/cs-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Polish (sample file)" href="Tatoeba/cs-pl_sample.html">view</a></td><td></td><th>cs</th>
<td></td><td></td><td><a rel="nofollow" title="Czech-Portuguese (sample file)" href="Tatoeba/cs-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Romanian (sample file)" href="Tatoeba/cs-ro_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Russian (sample file)" href="Tatoeba/cs-ru_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Slovenian (sample file)" href="Tatoeba/cs-sl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-Klingon (sample file)" href="Tatoeba/cs-tlh_sample.html">view</a></td><td></td><td></td><th>cs</th>
<td></td><td><a rel="nofollow" title="Czech-Turkish (sample file)" href="Tatoeba/cs-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Czech-Uighur (sample file)" href="Tatoeba/cs-ug_sample.html">view</a></td><td><a rel="nofollow" title="Czech-Ukrainian (sample file)" href="Tatoeba/cs-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Czech-wuu (sample file)" href="Tatoeba/cs-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/cs.raw.tar.gz">cs</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/cy.tar.gz">cy</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Welsh-cmn' (7 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-cy.xml.gz">ces</a></td>
<td></td>
<th>cy</th>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Welsh-German (sample file)" href="Tatoeba/cy-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-English (sample file)" href="Tatoeba/cy-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Welsh-Spanish (sample file)" href="Tatoeba/cy-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-French (sample file)" href="Tatoeba/cy-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Italian (sample file)" href="Tatoeba/cy-it_sample.html">view</a></td><td><a rel="nofollow" title="Welsh-Japanese (sample file)" href="Tatoeba/cy-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Welsh-Russian (sample file)" href="Tatoeba/cy-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/cy.raw.tar.gz">cy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/cycl.tar.gz">cycl</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'cycl-cmn' (2 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-cycl.xml.gz">ces</a></td>
<td></td>
<th>cycl</th>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="cycl-German (sample file)" href="Tatoeba/cycl-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="cycl-English (sample file)" href="Tatoeba/cycl-en_sample.html">view</a></td><td></td><td><a rel="nofollow" title="cycl-Spanish (sample file)" href="Tatoeba/cycl-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cycl-French (sample file)" href="Tatoeba/cycl-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cycl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cycl-Italian (sample file)" href="Tatoeba/cycl-it_sample.html">view</a></td><td><a rel="nofollow" title="cycl-Japanese (sample file)" href="Tatoeba/cycl-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cycl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cycl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="cycl-Russian (sample file)" href="Tatoeba/cycl-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>cycl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/cycl.raw.tar.gz">cycl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/da.tar.gz">da</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Danish-cmn' (0.1k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-da.xml.gz">ces</a></td>
<td></td>
<th>da</th>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Danish-German (sample file)" href="Tatoeba/da-de_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-English (sample file)" href="Tatoeba/da-en_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Esperanto (sample file)" href="Tatoeba/da-eo_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Spanish (sample file)" href="Tatoeba/da-es_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Danish-Finnish (sample file)" href="Tatoeba/da-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Danish-French (sample file)" href="Tatoeba/da-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Italian (sample file)" href="Tatoeba/da-it_sample.html">view</a></td><td><a rel="nofollow" title="Danish-Japanese (sample file)" href="Tatoeba/da-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Dutch (sample file)" href="Tatoeba/da-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td><a rel="nofollow" title="Danish-Portuguese (sample file)" href="Tatoeba/da-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Russian (sample file)" href="Tatoeba/da-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Danish-Swedish (sample file)" href="Tatoeba/da-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>da</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/da.raw.tar.gz">da</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/de.tar.gz">de</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Afrikaans' (0.3k links, 2.4M tokens)" href="download.php?f=Tatoeba/af-de.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-English, Old (ca.450-1100)' (55 links, 2.4M tokens)" href="download.php?f=Tatoeba/ang-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Arabic' (1.1k links, 2.5M tokens)" href="download.php?f=Tatoeba/ar-de.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Belarusian' (0.5k links, 2.4M tokens)" href="download.php?f=Tatoeba/be-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Berber languages)' (0.5k links, 2.9M tokens)" href="download.php?f=Tatoeba/ber-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bulgarian' (0.2k links, 2.5M tokens)" href="download.php?f=Tatoeba/bg-de.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Breton' (18 links, 2.4M tokens)" href="download.php?f=Tatoeba/br-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Bosnian' (25 links, 2.4M tokens)" href="download.php?f=Tatoeba/bs-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Catalan' (0.6k links, 2.5M tokens)" href="download.php?f=Tatoeba/ca-de.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'German-cmn' (3.2k links, 2.5M tokens)" href="download.php?f=Tatoeba/cmn-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Czech' (2.0k links, 2.5M tokens)" href="download.php?f=Tatoeba/cs-de.xml.gz">ces</a></td>
<th>de</th>
<td><a rel="nofollow" title="sentence alignments for 'German-Welsh' (40 links, 2.4M tokens)" href="download.php?f=Tatoeba/cy-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-cycl' (6 links, 2.4M tokens)" href="download.php?f=Tatoeba/cycl-de.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'German-Danish' (6.0k links, 2.5M tokens)" href="download.php?f=Tatoeba/da-de.xml.gz">ces</a></td>
<th><a rel="nofollow" title="German-German (sample file)" href="Tatoeba/de-de_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'German-German' (3.6k links, 4.8M tokens)" href="download.php?f=Tatoeba/de-de.xml.gz">c</a>
</th><td><a rel="nofollow" title="German-Lower Sorbian (sample file)" href="Tatoeba/de-dsb_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Greek (sample file)" href="Tatoeba/de-el_sample.html">view</a></td><td><a rel="nofollow" title="German-English (sample file)" href="Tatoeba/de-en_sample.html">view</a></td><td><a rel="nofollow" title="German-Esperanto (sample file)" href="Tatoeba/de-eo_sample.html">view</a></td><td><a rel="nofollow" title="German-Spanish (sample file)" href="Tatoeba/de-es_sample.html">view</a></td><td><a rel="nofollow" title="German-Estonian (sample file)" href="Tatoeba/de-et_sample.html">view</a></td><td><a rel="nofollow" title="German-Basque (sample file)" href="Tatoeba/de-eu_sample.html">view</a></td><td><a rel="nofollow" title="German-Finnish (sample file)" href="Tatoeba/de-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-French (sample file)" href="Tatoeba/de-fr_sample.html">view</a></td><td><a rel="nofollow" title="German-Western Frisian (sample file)" href="Tatoeba/de-fy_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Gaelic (sample file)" href="Tatoeba/de-gd_sample.html">view</a></td><td><a rel="nofollow" title="German-Galician (sample file)" href="Tatoeba/de-gl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Hebrew (sample file)" href="Tatoeba/de-he_sample.html">view</a></td><td><a rel="nofollow" title="German-Hindi (sample file)" href="Tatoeba/de-hi_sample.html">view</a></td><td></td><th>de</th>
<td><a rel="nofollow" title="German-Croatian (sample file)" href="Tatoeba/de-hr_sample.html">view</a></td><td><a rel="nofollow" title="German-Upper Sorbian (sample file)" href="Tatoeba/de-hsb_sample.html">view</a></td><td><a rel="nofollow" title="German-Hungarian (sample file)" href="Tatoeba/de-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/de-ia_sample.html">view</a></td><td><a rel="nofollow" title="German-Indonesian (sample file)" href="Tatoeba/de-id_sample.html">view</a></td><td><a rel="nofollow" title="German-Interlingue (sample file)" href="Tatoeba/de-ie_sample.html">view</a></td><td><a rel="nofollow" title="German-Ido (sample file)" href="Tatoeba/de-io_sample.html">view</a></td><td><a rel="nofollow" title="German-Icelandic (sample file)" href="Tatoeba/de-is_sample.html">view</a></td><td><a rel="nofollow" title="German-Italian (sample file)" href="Tatoeba/de-it_sample.html">view</a></td><td><a rel="nofollow" title="German-Japanese (sample file)" href="Tatoeba/de-ja_sample.html">view</a></td><td><a rel="nofollow" title="German-Lojban (sample file)" href="Tatoeba/de-jbo_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-Korean (sample file)" href="Tatoeba/de-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Kurdish (sample file)" href="Tatoeba/de-ku_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Latin (sample file)" href="Tatoeba/de-la_sample.html">view</a></td><td><a rel="nofollow" title="German-Ladino (sample file)" href="Tatoeba/de-lad_sample.html">view</a></td><td></td><td></td><th>de</th>
<td><a rel="nofollow" title="German-Lithuanian (sample file)" href="Tatoeba/de-lt_sample.html">view</a></td><td><a rel="nofollow" title="German-Latvian (sample file)" href="Tatoeba/de-lv_sample.html">view</a></td><td><a rel="nofollow" title="German-lzh (sample file)" href="Tatoeba/de-lzh_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-Maltese (sample file)" href="Tatoeba/de-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/de-nb_sample.html">view</a></td><td><a rel="nofollow" title="German-Low German (sample file)" href="Tatoeba/de-nds_sample.html">view</a></td><td><a rel="nofollow" title="German-Dutch (sample file)" href="Tatoeba/de-nl_sample.html">view</a></td><td><a rel="nofollow" title="German-Norse, Old (sample file)" href="Tatoeba/de-non_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Occitan (post 1500) (sample file)" href="Tatoeba/de-oc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="German-pes (sample file)" href="Tatoeba/de-pes_sample.html">view</a></td><td><a rel="nofollow" title="German-Polish (sample file)" href="Tatoeba/de-pl_sample.html">view</a></td><td></td><th>de</th>
<td></td><td><a rel="nofollow" title="German-prg (sample file)" href="Tatoeba/de-prg_sample.html">view</a></td><td><a rel="nofollow" title="German-Portuguese (sample file)" href="Tatoeba/de-pt_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Romansh (sample file)" href="Tatoeba/de-rm_sample.html">view</a></td><td><a rel="nofollow" title="German-Romanian (sample file)" href="Tatoeba/de-ro_sample.html">view</a></td><td><a rel="nofollow" title="German-Russian (sample file)" href="Tatoeba/de-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Sicilian (sample file)" href="Tatoeba/de-scn_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Slovenian (sample file)" href="Tatoeba/de-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Serbian (sample file)" href="Tatoeba/de-sr_sample.html">view</a></td><td><a rel="nofollow" title="German-Swedish (sample file)" href="Tatoeba/de-sv_sample.html">view</a></td><td><a rel="nofollow" title="German-swh (sample file)" href="Tatoeba/de-swh_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Thai (sample file)" href="Tatoeba/de-th_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Klingon (sample file)" href="Tatoeba/de-tlh_sample.html">view</a></td><td><a rel="nofollow" title="German-toki (sample file)" href="Tatoeba/de-toki_sample.html">view</a></td><td><a rel="nofollow" title="German-Tok Pisin (sample file)" href="Tatoeba/de-tpi_sample.html">view</a></td><th>de</th>
<td></td><td><a rel="nofollow" title="German-Turkish (sample file)" href="Tatoeba/de-tr_sample.html">view</a></td><td><a rel="nofollow" title="German-Tatar (sample file)" href="Tatoeba/de-tt_sample.html">view</a></td><td><a rel="nofollow" title="German-Uighur (sample file)" href="Tatoeba/de-ug_sample.html">view</a></td><td><a rel="nofollow" title="German-Ukrainian (sample file)" href="Tatoeba/de-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="German-Uzbek (sample file)" href="Tatoeba/de-uz_sample.html">view</a></td><td><a rel="nofollow" title="German-Vietnamese (sample file)" href="Tatoeba/de-vi_sample.html">view</a></td><td><a rel="nofollow" title="German-VolapÃ¼k (sample file)" href="Tatoeba/de-vo_sample.html">view</a></td><td><a rel="nofollow" title="German-wuu (sample file)" href="Tatoeba/de-wuu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="German-Yiddish (sample file)" href="Tatoeba/de-yi_sample.html">view</a></td><td><a rel="nofollow" title="German-yue (sample file)" href="Tatoeba/de-yue_sample.html">view</a></td><td><a rel="nofollow" title="German-zsm (sample file)" href="Tatoeba/de-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/de.raw.tar.gz">de</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/dsb.tar.gz">dsb</a></th>
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
<th>dsb</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lower Sorbian-German' (0.3k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-dsb.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Lower Sorbian-English (sample file)" href="Tatoeba/dsb-en_sample.html">view</a></td><td><a rel="nofollow" title="Lower Sorbian-Esperanto (sample file)" href="Tatoeba/dsb-eo_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>dsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lower Sorbian-Japanese (sample file)" href="Tatoeba/dsb-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>dsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>dsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>dsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/dsb.raw.tar.gz">dsb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ee.tar.gz">ee</a></th>
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
<th>ee</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Ewe-English (sample file)" href="Tatoeba/ee-en_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ee</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ewe-Japanese (sample file)" href="Tatoeba/ee-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ee</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ee</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ee</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ee.raw.tar.gz">ee</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/el.tar.gz">el</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Arabic' (0.4k links, 0.1M tokens)" href="download.php?f=Tatoeba/ar-el.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-arz' (10 links, 58.6k tokens)" href="download.php?f=Tatoeba/arz-el.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Bulgarian' (47 links, 0.1M tokens)" href="download.php?f=Tatoeba/bg-el.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Catalan' (46 links, 98.2k tokens)" href="download.php?f=Tatoeba/ca-el.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-cmn' (8 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-el.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-Czech' (13 links, 97.0k tokens)" href="download.php?f=Tatoeba/cs-el.xml.gz">ces</a></td>
<th>el</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Greek-German' (4.1k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-el.xml.gz">ces</a></td>
<td></td>
<td></td>
<th><a rel="nofollow" title="Greek-Greek (sample file)" href="Tatoeba/el-el_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Greek-Greek' (61 links, 0.1M tokens)" href="download.php?f=Tatoeba/el-el.xml.gz">c</a>
</th><td><a rel="nofollow" title="Greek-English (sample file)" href="Tatoeba/el-en_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Esperanto (sample file)" href="Tatoeba/el-eo_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Spanish (sample file)" href="Tatoeba/el-es_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-French (sample file)" href="Tatoeba/el-fr_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Galician (sample file)" href="Tatoeba/el-gl_sample.html">view</a></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Italian (sample file)" href="Tatoeba/el-it_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Japanese (sample file)" href="Tatoeba/el-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Maltese (sample file)" href="Tatoeba/el-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Greek-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/el-nb_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Low German (sample file)" href="Tatoeba/el-nds_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Dutch (sample file)" href="Tatoeba/el-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-pes (sample file)" href="Tatoeba/el-pes_sample.html">view</a></td><td><a rel="nofollow" title="Greek-Polish (sample file)" href="Tatoeba/el-pl_sample.html">view</a></td><td></td><th>el</th>
<td></td><td></td><td><a rel="nofollow" title="Greek-Portuguese (sample file)" href="Tatoeba/el-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Greek-Russian (sample file)" href="Tatoeba/el-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>el</th>
<td></td><td><a rel="nofollow" title="Greek-Turkish (sample file)" href="Tatoeba/el-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Greek-Ukrainian (sample file)" href="Tatoeba/el-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/el.raw.tar.gz">el</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/en.tar.gz">en</a></th>
<td><a rel="nofollow" title="sentence alignments for 'English-acm' (11 links, 3.6M tokens)" href="download.php?f=Tatoeba/acm-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Afrikaans' (1.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/af-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Ainu' (12 links, 3.6M tokens)" href="download.php?f=Tatoeba/ain-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-English, Old (ca.450-1100)' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/ang-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Arabic' (13.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/ar-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-arq' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/arq-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-arz' (0.5k links, 3.6M tokens)" href="download.php?f=Tatoeba/arz-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Asturian' (17 links, 3.6M tokens)" href="download.php?f=Tatoeba/ast-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-avk' (50 links, 3.6M tokens)" href="download.php?f=Tatoeba/avk-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Azerbaijani' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/az-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Belarusian' (2.7k links, 3.7M tokens)" href="download.php?f=Tatoeba/be-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Berber languages)' (46.9k links, 4.2M tokens)" href="download.php?f=Tatoeba/ber-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bulgarian' (11.2k links, 3.7M tokens)" href="download.php?f=Tatoeba/bg-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bengali' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/bn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Tibetan' (36 links, 3.6M tokens)" href="download.php?f=Tatoeba/bod-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Breton' (98 links, 3.6M tokens)" href="download.php?f=Tatoeba/br-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Bosnian' (0.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/bs-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Catalan' (1.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/ca-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Chamorro' (27 links, 3.6M tokens)" href="download.php?f=Tatoeba/ch-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-ckt' (1 links, 3.6M tokens)" href="download.php?f=Tatoeba/ckt-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cmn' (31.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/cmn-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Czech' (1.5k links, 3.7M tokens)" href="download.php?f=Tatoeba/cs-en.xml.gz">ces</a></td>
<th>en</th>
<td><a rel="nofollow" title="sentence alignments for 'English-Welsh' (0.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/cy-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-cycl' (43 links, 3.6M tokens)" href="download.php?f=Tatoeba/cycl-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Danish' (8.7k links, 3.8M tokens)" href="download.php?f=Tatoeba/da-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-German' (0.1M links, 6.0M tokens)" href="download.php?f=Tatoeba/de-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Lower Sorbian' (14 links, 3.6M tokens)" href="download.php?f=Tatoeba/dsb-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Ewe' (1 links, 3.6M tokens)" href="download.php?f=Tatoeba/ee-en.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'English-Greek' (2.5k links, 3.7M tokens)" href="download.php?f=Tatoeba/el-en.xml.gz">ces</a></td>
<th><a rel="nofollow" title="English-English (sample file)" href="Tatoeba/en-en_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'English-English' (3.9k links, 7.3M tokens)" href="download.php?f=Tatoeba/en-en.xml.gz">c</a>
</th><td><a rel="nofollow" title="English-Esperanto (sample file)" href="Tatoeba/en-eo_sample.html">view</a></td><td><a rel="nofollow" title="English-Spanish (sample file)" href="Tatoeba/en-es_sample.html">view</a></td><td><a rel="nofollow" title="English-Estonian (sample file)" href="Tatoeba/en-et_sample.html">view</a></td><td><a rel="nofollow" title="English-Basque (sample file)" href="Tatoeba/en-eu_sample.html">view</a></td><td><a rel="nofollow" title="English-Finnish (sample file)" href="Tatoeba/en-fi_sample.html">view</a></td><td><a rel="nofollow" title="English-Faroese (sample file)" href="Tatoeba/en-fo_sample.html">view</a></td><td><a rel="nofollow" title="English-French (sample file)" href="Tatoeba/en-fr_sample.html">view</a></td><td><a rel="nofollow" title="English-Western Frisian (sample file)" href="Tatoeba/en-fy_sample.html">view</a></td><td><a rel="nofollow" title="English-Irish (sample file)" href="Tatoeba/en-ga_sample.html">view</a></td><td><a rel="nofollow" title="English-Gaelic (sample file)" href="Tatoeba/en-gd_sample.html">view</a></td><td><a rel="nofollow" title="English-Galician (sample file)" href="Tatoeba/en-gl_sample.html">view</a></td><td><a rel="nofollow" title="English-Guarani (sample file)" href="Tatoeba/en-gn_sample.html">view</a></td><td><a rel="nofollow" title="English-Hebrew (sample file)" href="Tatoeba/en-he_sample.html">view</a></td><td><a rel="nofollow" title="English-Hindi (sample file)" href="Tatoeba/en-hi_sample.html">view</a></td><td></td><th>en</th>
<td><a rel="nofollow" title="English-Croatian (sample file)" href="Tatoeba/en-hr_sample.html">view</a></td><td><a rel="nofollow" title="English-Upper Sorbian (sample file)" href="Tatoeba/en-hsb_sample.html">view</a></td><td><a rel="nofollow" title="English-Hungarian (sample file)" href="Tatoeba/en-hu_sample.html">view</a></td><td><a rel="nofollow" title="English-Armenian (sample file)" href="Tatoeba/en-hy_sample.html">view</a></td><td><a rel="nofollow" title="English-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/en-ia_sample.html">view</a></td><td><a rel="nofollow" title="English-Indonesian (sample file)" href="Tatoeba/en-id_sample.html">view</a></td><td><a rel="nofollow" title="English-Interlingue (sample file)" href="Tatoeba/en-ie_sample.html">view</a></td><td><a rel="nofollow" title="English-Ido (sample file)" href="Tatoeba/en-io_sample.html">view</a></td><td><a rel="nofollow" title="English-Icelandic (sample file)" href="Tatoeba/en-is_sample.html">view</a></td><td><a rel="nofollow" title="English-Italian (sample file)" href="Tatoeba/en-it_sample.html">view</a></td><td><a rel="nofollow" title="English-Japanese (sample file)" href="Tatoeba/en-ja_sample.html">view</a></td><td><a rel="nofollow" title="English-Lojban (sample file)" href="Tatoeba/en-jbo_sample.html">view</a></td><td><a rel="nofollow" title="English-Georgian (sample file)" href="Tatoeba/en-ka_sample.html">view</a></td><td><a rel="nofollow" title="English-Kazakh (sample file)" href="Tatoeba/en-kk_sample.html">view</a></td><td><a rel="nofollow" title="English-Central Khmer (sample file)" href="Tatoeba/en-km_sample.html">view</a></td><td><a rel="nofollow" title="English-Korean (sample file)" href="Tatoeba/en-ko_sample.html">view</a></td><td><a rel="nofollow" title="English-ksh (sample file)" href="Tatoeba/en-ksh_sample.html">view</a></td><td><a rel="nofollow" title="English-Kurdish (sample file)" href="Tatoeba/en-ku_sample.html">view</a></td><td><a rel="nofollow" title="English-Cornish (sample file)" href="Tatoeba/en-kw_sample.html">view</a></td><td><a rel="nofollow" title="English-Latin (sample file)" href="Tatoeba/en-la_sample.html">view</a></td><td><a rel="nofollow" title="English-Ladino (sample file)" href="Tatoeba/en-lad_sample.html">view</a></td><td><a rel="nofollow" title="English-lld (sample file)" href="Tatoeba/en-lld_sample.html">view</a></td><td><a rel="nofollow" title="English-Lao (sample file)" href="Tatoeba/en-lo_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-Lithuanian (sample file)" href="Tatoeba/en-lt_sample.html">view</a></td><td><a rel="nofollow" title="English-Latvian (sample file)" href="Tatoeba/en-lv_sample.html">view</a></td><td><a rel="nofollow" title="English-lzh (sample file)" href="Tatoeba/en-lzh_sample.html">view</a></td><td><a rel="nofollow" title="English-Malagasy (sample file)" href="Tatoeba/en-mg_sample.html">view</a></td><td><a rel="nofollow" title="English-Maori (sample file)" href="Tatoeba/en-mi_sample.html">view</a></td><td><a rel="nofollow" title="English-Malayalam (sample file)" href="Tatoeba/en-ml_sample.html">view</a></td><td><a rel="nofollow" title="English-Mongolian (sample file)" href="Tatoeba/en-mn_sample.html">view</a></td><td><a rel="nofollow" title="English-Marathi (sample file)" href="Tatoeba/en-mr_sample.html">view</a></td><td><a rel="nofollow" title="English-Maltese (sample file)" href="Tatoeba/en-mt_sample.html">view</a></td><td><a rel="nofollow" title="English-nan (sample file)" href="Tatoeba/en-nan_sample.html">view</a></td><td><a rel="nofollow" title="English-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/en-nb_sample.html">view</a></td><td><a rel="nofollow" title="English-Low German (sample file)" href="Tatoeba/en-nds_sample.html">view</a></td><td><a rel="nofollow" title="English-Dutch (sample file)" href="Tatoeba/en-nl_sample.html">view</a></td><td><a rel="nofollow" title="English-Norse, Old (sample file)" href="Tatoeba/en-non_sample.html">view</a></td><td><a rel="nofollow" title="English-nov (sample file)" href="Tatoeba/en-nov_sample.html">view</a></td><td><a rel="nofollow" title="English-npi (sample file)" href="Tatoeba/en-npi_sample.html">view</a></td><td><a rel="nofollow" title="English-Occitan (post 1500) (sample file)" href="Tatoeba/en-oc_sample.html">view</a></td><td><a rel="nofollow" title="English-orv (sample file)" href="Tatoeba/en-orv_sample.html">view</a></td><td><a rel="nofollow" title="English-Ossetian (sample file)" href="Tatoeba/en-os_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-pes (sample file)" href="Tatoeba/en-pes_sample.html">view</a></td><td><a rel="nofollow" title="English-Polish (sample file)" href="Tatoeba/en-pl_sample.html">view</a></td><td><a rel="nofollow" title="English-pms (sample file)" href="Tatoeba/en-pms_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-pnb (sample file)" href="Tatoeba/en-pnb_sample.html">view</a></td><td><a rel="nofollow" title="English-prg (sample file)" href="Tatoeba/en-prg_sample.html">view</a></td><td><a rel="nofollow" title="English-Portuguese (sample file)" href="Tatoeba/en-pt_sample.html">view</a></td><td><a rel="nofollow" title="English-Quechua (sample file)" href="Tatoeba/en-qu_sample.html">view</a></td><td><a rel="nofollow" title="English-qya (sample file)" href="Tatoeba/en-qya_sample.html">view</a></td><td><a rel="nofollow" title="English-Romansh (sample file)" href="Tatoeba/en-rm_sample.html">view</a></td><td><a rel="nofollow" title="English-Romanian (sample file)" href="Tatoeba/en-ro_sample.html">view</a></td><td><a rel="nofollow" title="English-Russian (sample file)" href="Tatoeba/en-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Sicilian (sample file)" href="Tatoeba/en-scn_sample.html">view</a></td><td><a rel="nofollow" title="English-sjn (sample file)" href="Tatoeba/en-sjn_sample.html">view</a></td><td><a rel="nofollow" title="English-Slovenian (sample file)" href="Tatoeba/en-sl_sample.html">view</a></td><td><a rel="nofollow" title="English-Albanian (sample file)" href="Tatoeba/en-sq_sample.html">view</a></td><td><a rel="nofollow" title="English-Serbian (sample file)" href="Tatoeba/en-sr_sample.html">view</a></td><td><a rel="nofollow" title="English-Swedish (sample file)" href="Tatoeba/en-sv_sample.html">view</a></td><td><a rel="nofollow" title="English-swh (sample file)" href="Tatoeba/en-swh_sample.html">view</a></td><td><a rel="nofollow" title="English-Telugu (sample file)" href="Tatoeba/en-te_sample.html">view</a></td><td></td><td><a rel="nofollow" title="English-Thai (sample file)" href="Tatoeba/en-th_sample.html">view</a></td><td><a rel="nofollow" title="English-Tagalog (sample file)" href="Tatoeba/en-tl_sample.html">view</a></td><td><a rel="nofollow" title="English-Klingon (sample file)" href="Tatoeba/en-tlh_sample.html">view</a></td><td><a rel="nofollow" title="English-toki (sample file)" href="Tatoeba/en-toki_sample.html">view</a></td><td><a rel="nofollow" title="English-Tok Pisin (sample file)" href="Tatoeba/en-tpi_sample.html">view</a></td><th>en</th>
<td><a rel="nofollow" title="English-tpw (sample file)" href="Tatoeba/en-tpw_sample.html">view</a></td><td><a rel="nofollow" title="English-Turkish (sample file)" href="Tatoeba/en-tr_sample.html">view</a></td><td><a rel="nofollow" title="English-Tatar (sample file)" href="Tatoeba/en-tt_sample.html">view</a></td><td><a rel="nofollow" title="English-Uighur (sample file)" href="Tatoeba/en-ug_sample.html">view</a></td><td><a rel="nofollow" title="English-Ukrainian (sample file)" href="Tatoeba/en-uk_sample.html">view</a></td><td><a rel="nofollow" title="English-Urdu (sample file)" href="Tatoeba/en-ur_sample.html">view</a></td><td><a rel="nofollow" title="English-Uzbek (sample file)" href="Tatoeba/en-uz_sample.html">view</a></td><td><a rel="nofollow" title="English-Vietnamese (sample file)" href="Tatoeba/en-vi_sample.html">view</a></td><td><a rel="nofollow" title="English-VolapÃ¼k (sample file)" href="Tatoeba/en-vo_sample.html">view</a></td><td><a rel="nofollow" title="English-wuu (sample file)" href="Tatoeba/en-wuu_sample.html">view</a></td><td><a rel="nofollow" title="English-Kalmyk (sample file)" href="Tatoeba/en-xal_sample.html">view</a></td><td><a rel="nofollow" title="English-Xhosa (sample file)" href="Tatoeba/en-xh_sample.html">view</a></td><td><a rel="nofollow" title="English-Yiddish (sample file)" href="Tatoeba/en-yi_sample.html">view</a></td><td><a rel="nofollow" title="English-yue (sample file)" href="Tatoeba/en-yue_sample.html">view</a></td><td><a rel="nofollow" title="English-zsm (sample file)" href="Tatoeba/en-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/en.raw.tar.gz">en</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/eo.tar.gz">eo</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Afrikaans' (0.6k links, 2.6M tokens)" href="download.php?f=Tatoeba/af-eo.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-English, Old (ca.450-1100)' (36 links, 2.6M tokens)" href="download.php?f=Tatoeba/ang-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Arabic' (0.3k links, 2.7M tokens)" href="download.php?f=Tatoeba/ar-eo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Belarusian' (0.6k links, 2.6M tokens)" href="download.php?f=Tatoeba/be-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Berber languages)' (1.4k links, 3.1M tokens)" href="download.php?f=Tatoeba/ber-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Bulgarian' (0.5k links, 2.7M tokens)" href="download.php?f=Tatoeba/bg-eo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Breton' (0.1k links, 2.6M tokens)" href="download.php?f=Tatoeba/br-eo.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Catalan' (0.4k links, 2.6M tokens)" href="download.php?f=Tatoeba/ca-eo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-cmn' (3.0k links, 2.7M tokens)" href="download.php?f=Tatoeba/cmn-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Czech' (1.8k links, 2.6M tokens)" href="download.php?f=Tatoeba/cs-eo.xml.gz">ces</a></td>
<th>eo</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Danish' (10.3k links, 2.7M tokens)" href="download.php?f=Tatoeba/da-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-German' (0.1M links, 5.0M tokens)" href="download.php?f=Tatoeba/de-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Lower Sorbian' (73 links, 2.6M tokens)" href="download.php?f=Tatoeba/dsb-eo.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-Greek' (0.3k links, 2.6M tokens)" href="download.php?f=Tatoeba/el-eo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Esperanto-English' (0.1M links, 6.2M tokens)" href="download.php?f=Tatoeba/en-eo.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Esperanto-Esperanto (sample file)" href="Tatoeba/eo-eo_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Esperanto-Esperanto' (6.9k links, 5.1M tokens)" href="download.php?f=Tatoeba/eo-eo.xml.gz">c</a>
</th><td><a rel="nofollow" title="Esperanto-Spanish (sample file)" href="Tatoeba/eo-es_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Esperanto-Basque (sample file)" href="Tatoeba/eo-eu_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Finnish (sample file)" href="Tatoeba/eo-fi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Faroese (sample file)" href="Tatoeba/eo-fo_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-French (sample file)" href="Tatoeba/eo-fr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Western Frisian (sample file)" href="Tatoeba/eo-fy_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Hebrew (sample file)" href="Tatoeba/eo-he_sample.html">view</a></td><td></td><td></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Croatian (sample file)" href="Tatoeba/eo-hr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Upper Sorbian (sample file)" href="Tatoeba/eo-hsb_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Hungarian (sample file)" href="Tatoeba/eo-hu_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Armenian (sample file)" href="Tatoeba/eo-hy_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/eo-ia_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Indonesian (sample file)" href="Tatoeba/eo-id_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Interlingue (sample file)" href="Tatoeba/eo-ie_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Ido (sample file)" href="Tatoeba/eo-io_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Icelandic (sample file)" href="Tatoeba/eo-is_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Italian (sample file)" href="Tatoeba/eo-it_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Japanese (sample file)" href="Tatoeba/eo-ja_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Lojban (sample file)" href="Tatoeba/eo-jbo_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Esperanto-Kazakh (sample file)" href="Tatoeba/eo-kk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Esperanto-Korean (sample file)" href="Tatoeba/eo-ko_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Latin (sample file)" href="Tatoeba/eo-la_sample.html">view</a></td><td></td><td></td><td></td><th>eo</th>
<td><a rel="nofollow" title="Esperanto-Lithuanian (sample file)" href="Tatoeba/eo-lt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/eo-nb_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Low German (sample file)" href="Tatoeba/eo-nds_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Dutch (sample file)" href="Tatoeba/eo-nl_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Norse, Old (sample file)" href="Tatoeba/eo-non_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-orv (sample file)" href="Tatoeba/eo-orv_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Ossetian (sample file)" href="Tatoeba/eo-os_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Esperanto-pes (sample file)" href="Tatoeba/eo-pes_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Polish (sample file)" href="Tatoeba/eo-pl_sample.html">view</a></td><td></td><th>eo</th>
<td></td><td></td><td><a rel="nofollow" title="Esperanto-Portuguese (sample file)" href="Tatoeba/eo-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Romanian (sample file)" href="Tatoeba/eo-ro_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Russian (sample file)" href="Tatoeba/eo-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Swedish (sample file)" href="Tatoeba/eo-sv_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-swh (sample file)" href="Tatoeba/eo-swh_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Thai (sample file)" href="Tatoeba/eo-th_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Tagalog (sample file)" href="Tatoeba/eo-tl_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Klingon (sample file)" href="Tatoeba/eo-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-toki (sample file)" href="Tatoeba/eo-toki_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Tok Pisin (sample file)" href="Tatoeba/eo-tpi_sample.html">view</a></td><th>eo</th>
<td></td><td><a rel="nofollow" title="Esperanto-Turkish (sample file)" href="Tatoeba/eo-tr_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-Tatar (sample file)" href="Tatoeba/eo-tt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Esperanto-Ukrainian (sample file)" href="Tatoeba/eo-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Esperanto-Vietnamese (sample file)" href="Tatoeba/eo-vi_sample.html">view</a></td><td><a rel="nofollow" title="Esperanto-VolapÃ¼k (sample file)" href="Tatoeba/eo-vo_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/eo.raw.tar.gz">eo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/es.tar.gz">es</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Afrikaans' (0.2k links, 1.7M tokens)" href="download.php?f=Tatoeba/af-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English, Old (ca.450-1100)' (11 links, 1.7M tokens)" href="download.php?f=Tatoeba/ang-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Arabic' (1.9k links, 1.8M tokens)" href="download.php?f=Tatoeba/ar-es.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Asturian' (30 links, 1.7M tokens)" href="download.php?f=Tatoeba/ast-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-avk' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/avk-es.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Belarusian' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/be-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Berber languages)' (9.2k links, 2.2M tokens)" href="download.php?f=Tatoeba/ber-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bulgarian' (0.1k links, 1.8M tokens)" href="download.php?f=Tatoeba/bg-es.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Bosnian' (23 links, 1.7M tokens)" href="download.php?f=Tatoeba/bs-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Catalan' (2.2k links, 1.7M tokens)" href="download.php?f=Tatoeba/ca-es.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-cmn' (5.1k links, 1.8M tokens)" href="download.php?f=Tatoeba/cmn-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Czech' (93 links, 1.7M tokens)" href="download.php?f=Tatoeba/cs-es.xml.gz">ces</a></td>
<th>es</th>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Welsh' (1 links, 1.7M tokens)" href="download.php?f=Tatoeba/cy-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-cycl' (3 links, 1.7M tokens)" href="download.php?f=Tatoeba/cycl-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Danish' (8.1k links, 1.8M tokens)" href="download.php?f=Tatoeba/da-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-German' (63.4k links, 4.1M tokens)" href="download.php?f=Tatoeba/de-es.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Greek' (1.7k links, 1.7M tokens)" href="download.php?f=Tatoeba/el-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-English' (0.1M links, 5.3M tokens)" href="download.php?f=Tatoeba/en-es.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Spanish-Esperanto' (51.5k links, 4.2M tokens)" href="download.php?f=Tatoeba/eo-es.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Spanish-Spanish (sample file)" href="Tatoeba/es-es_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Spanish-Spanish' (2.6k links, 3.4M tokens)" href="download.php?f=Tatoeba/es-es.xml.gz">c</a>
</th><td><a rel="nofollow" title="Spanish-Estonian (sample file)" href="Tatoeba/es-et_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Basque (sample file)" href="Tatoeba/es-eu_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Finnish (sample file)" href="Tatoeba/es-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-French (sample file)" href="Tatoeba/es-fr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Western Frisian (sample file)" href="Tatoeba/es-fy_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Gaelic (sample file)" href="Tatoeba/es-gd_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Galician (sample file)" href="Tatoeba/es-gl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Guarani (sample file)" href="Tatoeba/es-gn_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hebrew (sample file)" href="Tatoeba/es-he_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Hindi (sample file)" href="Tatoeba/es-hi_sample.html">view</a></td><td></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Croatian (sample file)" href="Tatoeba/es-hr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Hungarian (sample file)" href="Tatoeba/es-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/es-ia_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Indonesian (sample file)" href="Tatoeba/es-id_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Ido (sample file)" href="Tatoeba/es-io_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Icelandic (sample file)" href="Tatoeba/es-is_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Italian (sample file)" href="Tatoeba/es-it_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Japanese (sample file)" href="Tatoeba/es-ja_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Lojban (sample file)" href="Tatoeba/es-jbo_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Korean (sample file)" href="Tatoeba/es-ko_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Latin (sample file)" href="Tatoeba/es-la_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-lld (sample file)" href="Tatoeba/es-lld_sample.html">view</a></td><td></td><th>es</th>
<td><a rel="nofollow" title="Spanish-Lithuanian (sample file)" href="Tatoeba/es-lt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-lzh (sample file)" href="Tatoeba/es-lzh_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Mongolian (sample file)" href="Tatoeba/es-mn_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Maltese (sample file)" href="Tatoeba/es-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/es-nb_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Low German (sample file)" href="Tatoeba/es-nds_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Dutch (sample file)" href="Tatoeba/es-nl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Norse, Old (sample file)" href="Tatoeba/es-non_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Occitan (post 1500) (sample file)" href="Tatoeba/es-oc_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-pes (sample file)" href="Tatoeba/es-pes_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Polish (sample file)" href="Tatoeba/es-pl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-pms (sample file)" href="Tatoeba/es-pms_sample.html">view</a></td><th>es</th>
<td></td><td><a rel="nofollow" title="Spanish-prg (sample file)" href="Tatoeba/es-prg_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Portuguese (sample file)" href="Tatoeba/es-pt_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Romansh (sample file)" href="Tatoeba/es-rm_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Romanian (sample file)" href="Tatoeba/es-ro_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Russian (sample file)" href="Tatoeba/es-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Sicilian (sample file)" href="Tatoeba/es-scn_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Slovenian (sample file)" href="Tatoeba/es-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-Serbian (sample file)" href="Tatoeba/es-sr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Swedish (sample file)" href="Tatoeba/es-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Tagalog (sample file)" href="Tatoeba/es-tl_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Klingon (sample file)" href="Tatoeba/es-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-toki (sample file)" href="Tatoeba/es-toki_sample.html">view</a></td><td></td><th>es</th>
<td><a rel="nofollow" title="Spanish-tpw (sample file)" href="Tatoeba/es-tpw_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Turkish (sample file)" href="Tatoeba/es-tr_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Tatar (sample file)" href="Tatoeba/es-tt_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Uighur (sample file)" href="Tatoeba/es-ug_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-Ukrainian (sample file)" href="Tatoeba/es-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Vietnamese (sample file)" href="Tatoeba/es-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Spanish-wuu (sample file)" href="Tatoeba/es-wuu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Spanish-Yiddish (sample file)" href="Tatoeba/es-yi_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-yue (sample file)" href="Tatoeba/es-yue_sample.html">view</a></td><td><a rel="nofollow" title="Spanish-zsm (sample file)" href="Tatoeba/es-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/es.raw.tar.gz">es</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/et.tar.gz">et</a></th>
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
<th>et</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-German' (53 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-et.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-English' (0.7k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-et.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Estonian-Spanish' (10 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-et.xml.gz">ces</a></td>
<th></th>
<td></td><td><a rel="nofollow" title="Estonian-Finnish (sample file)" href="Tatoeba/et-fi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Estonian-French (sample file)" href="Tatoeba/et-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Japanese (sample file)" href="Tatoeba/et-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Estonian-Russian (sample file)" href="Tatoeba/et-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>et</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/et.raw.tar.gz">et</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/eu.tar.gz">eu</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Basque-cmn' (70 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-eu.xml.gz">ces</a></td>
<td></td>
<th>eu</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-German' (48 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-eu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-English' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Esperanto' (59 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-eu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Basque-Spanish' (0.9k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-eu.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Basque-French (sample file)" href="Tatoeba/eu-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Italian (sample file)" href="Tatoeba/eu-it_sample.html">view</a></td><td><a rel="nofollow" title="Basque-Japanese (sample file)" href="Tatoeba/eu-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Basque-Russian (sample file)" href="Tatoeba/eu-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>eu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/eu.raw.tar.gz">eu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/fi.tar.gz">fi</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Bulgarian' (3 links, 0.2M tokens)" href="download.php?f=Tatoeba/bg-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Catalan' (2 links, 0.2M tokens)" href="download.php?f=Tatoeba/ca-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-cmn' (95 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Czech' (6 links, 0.2M tokens)" href="download.php?f=Tatoeba/cs-fi.xml.gz">ces</a></td>
<th>fi</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Danish' (0.1k links, 0.3M tokens)" href="download.php?f=Tatoeba/da-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-German' (3.2k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-fi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-English' (12.2k links, 3.8M tokens)" href="download.php?f=Tatoeba/en-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Esperanto' (0.7k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Spanish' (1.6k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-fi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Finnish-Estonian' (33 links, 0.1M tokens)" href="download.php?f=Tatoeba/et-fi.xml.gz">ces</a></td>
<td></td>
<th><a rel="nofollow" title="Finnish-Finnish (sample file)" href="Tatoeba/fi-fi_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Finnish-Finnish' (73 links, 0.3M tokens)" href="download.php?f=Tatoeba/fi-fi.xml.gz">c</a>
</th><td></td><td><a rel="nofollow" title="Finnish-French (sample file)" href="Tatoeba/fi-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Hebrew (sample file)" href="Tatoeba/fi-he_sample.html">view</a></td><td></td><td></td><th>fi</th>
<td></td><td></td><td><a rel="nofollow" title="Finnish-Hungarian (sample file)" href="Tatoeba/fi-hu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Finnish-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/fi-ia_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Indonesian (sample file)" href="Tatoeba/fi-id_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Italian (sample file)" href="Tatoeba/fi-it_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Japanese (sample file)" href="Tatoeba/fi-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Korean (sample file)" href="Tatoeba/fi-ko_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Dutch (sample file)" href="Tatoeba/fi-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Polish (sample file)" href="Tatoeba/fi-pl_sample.html">view</a></td><td></td><th>fi</th>
<td></td><td></td><td><a rel="nofollow" title="Finnish-Portuguese (sample file)" href="Tatoeba/fi-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Romanian (sample file)" href="Tatoeba/fi-ro_sample.html">view</a></td><td><a rel="nofollow" title="Finnish-Russian (sample file)" href="Tatoeba/fi-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Swedish (sample file)" href="Tatoeba/fi-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fi</th>
<td></td><td><a rel="nofollow" title="Finnish-Turkish (sample file)" href="Tatoeba/fi-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Finnish-Vietnamese (sample file)" href="Tatoeba/fi-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/fi.raw.tar.gz">fi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/fo.tar.gz">fo</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Faroese-cmn' (1 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-fo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Faroese-Czech' (1 links, 41.4k tokens)" href="download.php?f=Tatoeba/cs-fo.xml.gz">ces</a></td>
<th>fo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Faroese-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-fo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Faroese-Esperanto' (4 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-fo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Faroese-French (sample file)" href="Tatoeba/fo-fr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fo</th>
<td></td><td><a rel="nofollow" title="Faroese-Turkish (sample file)" href="Tatoeba/fo-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/fo.raw.tar.gz">fo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/fr.tar.gz">fr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Afrikaans' (100 links, 1.3M tokens)" href="download.php?f=Tatoeba/af-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Ainu' (6 links, 1.3M tokens)" href="download.php?f=Tatoeba/ain-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English, Old (ca.450-1100)' (35 links, 1.3M tokens)" href="download.php?f=Tatoeba/ang-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Arabic' (0.6k links, 1.4M tokens)" href="download.php?f=Tatoeba/ar-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-arq' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/arq-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Asturian' (5 links, 1.3M tokens)" href="download.php?f=Tatoeba/ast-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-avk' (0.9k links, 1.3M tokens)" href="download.php?f=Tatoeba/avk-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Belarusian' (86 links, 1.3M tokens)" href="download.php?f=Tatoeba/be-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Berber languages)' (30.2k links, 1.8M tokens)" href="download.php?f=Tatoeba/ber-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bulgarian' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/bg-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bengali' (4 links, 1.3M tokens)" href="download.php?f=Tatoeba/bn-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Breton' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/br-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Bosnian' (32 links, 1.3M tokens)" href="download.php?f=Tatoeba/bs-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Catalan' (0.5k links, 1.3M tokens)" href="download.php?f=Tatoeba/ca-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Chamorro' (1 links, 1.3M tokens)" href="download.php?f=Tatoeba/ch-fr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-cmn' (15.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/cmn-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Czech' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/cs-fr.xml.gz">ces</a></td>
<th>fr</th>
<td><a rel="nofollow" title="sentence alignments for 'French-Welsh' (9 links, 1.3M tokens)" href="download.php?f=Tatoeba/cy-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-cycl' (15 links, 1.3M tokens)" href="download.php?f=Tatoeba/cycl-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Danish' (1.0k links, 1.4M tokens)" href="download.php?f=Tatoeba/da-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-German' (66.4k links, 3.7M tokens)" href="download.php?f=Tatoeba/de-fr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Greek' (0.6k links, 1.4M tokens)" href="download.php?f=Tatoeba/el-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-English' (0.1M links, 4.9M tokens)" href="download.php?f=Tatoeba/en-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Esperanto' (0.1M links, 3.9M tokens)" href="download.php?f=Tatoeba/eo-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Spanish' (33.8k links, 3.0M tokens)" href="download.php?f=Tatoeba/es-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Estonian' (6 links, 1.3M tokens)" href="download.php?f=Tatoeba/et-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Basque' (92 links, 1.3M tokens)" href="download.php?f=Tatoeba/eu-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Finnish' (0.5k links, 1.4M tokens)" href="download.php?f=Tatoeba/fi-fr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'French-Faroese' (1 links, 1.3M tokens)" href="download.php?f=Tatoeba/fo-fr.xml.gz">ces</a></td>
<th><a rel="nofollow" title="French-French (sample file)" href="Tatoeba/fr-fr_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'French-French' (1.5k links, 2.6M tokens)" href="download.php?f=Tatoeba/fr-fr.xml.gz">c</a>
</th><td><a rel="nofollow" title="French-Western Frisian (sample file)" href="Tatoeba/fr-fy_sample.html">view</a></td><td><a rel="nofollow" title="French-Irish (sample file)" href="Tatoeba/fr-ga_sample.html">view</a></td><td><a rel="nofollow" title="French-Gaelic (sample file)" href="Tatoeba/fr-gd_sample.html">view</a></td><td><a rel="nofollow" title="French-Galician (sample file)" href="Tatoeba/fr-gl_sample.html">view</a></td><td><a rel="nofollow" title="French-Guarani (sample file)" href="Tatoeba/fr-gn_sample.html">view</a></td><td><a rel="nofollow" title="French-Hebrew (sample file)" href="Tatoeba/fr-he_sample.html">view</a></td><td><a rel="nofollow" title="French-Hindi (sample file)" href="Tatoeba/fr-hi_sample.html">view</a></td><td></td><th>fr</th>
<td><a rel="nofollow" title="French-Croatian (sample file)" href="Tatoeba/fr-hr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Hungarian (sample file)" href="Tatoeba/fr-hu_sample.html">view</a></td><td><a rel="nofollow" title="French-Armenian (sample file)" href="Tatoeba/fr-hy_sample.html">view</a></td><td><a rel="nofollow" title="French-Interlingua (International Auxiliary Language Association) (sample file)" href="Tatoeba/fr-ia_sample.html">view</a></td><td><a rel="nofollow" title="French-Indonesian (sample file)" href="Tatoeba/fr-id_sample.html">view</a></td><td><a rel="nofollow" title="French-Interlingue (sample file)" href="Tatoeba/fr-ie_sample.html">view</a></td><td><a rel="nofollow" title="French-Ido (sample file)" href="Tatoeba/fr-io_sample.html">view</a></td><td><a rel="nofollow" title="French-Icelandic (sample file)" href="Tatoeba/fr-is_sample.html">view</a></td><td><a rel="nofollow" title="French-Italian (sample file)" href="Tatoeba/fr-it_sample.html">view</a></td><td><a rel="nofollow" title="French-Japanese (sample file)" href="Tatoeba/fr-ja_sample.html">view</a></td><td><a rel="nofollow" title="French-Lojban (sample file)" href="Tatoeba/fr-jbo_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Kazakh (sample file)" href="Tatoeba/fr-kk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Korean (sample file)" href="Tatoeba/fr-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Kurdish (sample file)" href="Tatoeba/fr-ku_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Latin (sample file)" href="Tatoeba/fr-la_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-lld (sample file)" href="Tatoeba/fr-lld_sample.html">view</a></td><td><a rel="nofollow" title="French-Lao (sample file)" href="Tatoeba/fr-lo_sample.html">view</a></td><th>fr</th>
<td><a rel="nofollow" title="French-Lithuanian (sample file)" href="Tatoeba/fr-lt_sample.html">view</a></td><td><a rel="nofollow" title="French-Latvian (sample file)" href="Tatoeba/fr-lv_sample.html">view</a></td><td><a rel="nofollow" title="French-lzh (sample file)" href="Tatoeba/fr-lzh_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="French-Mongolian (sample file)" href="Tatoeba/fr-mn_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Maltese (sample file)" href="Tatoeba/fr-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/fr-nb_sample.html">view</a></td><td><a rel="nofollow" title="French-Low German (sample file)" href="Tatoeba/fr-nds_sample.html">view</a></td><td><a rel="nofollow" title="French-Dutch (sample file)" href="Tatoeba/fr-nl_sample.html">view</a></td><td><a rel="nofollow" title="French-Norse, Old (sample file)" href="Tatoeba/fr-non_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Occitan (post 1500) (sample file)" href="Tatoeba/fr-oc_sample.html">view</a></td><td><a rel="nofollow" title="French-orv (sample file)" href="Tatoeba/fr-orv_sample.html">view</a></td><td><a rel="nofollow" title="French-Ossetian (sample file)" href="Tatoeba/fr-os_sample.html">view</a></td><td><a rel="nofollow" title="French-pcd (sample file)" href="Tatoeba/fr-pcd_sample.html">view</a></td><td><a rel="nofollow" title="French-pes (sample file)" href="Tatoeba/fr-pes_sample.html">view</a></td><td><a rel="nofollow" title="French-Polish (sample file)" href="Tatoeba/fr-pl_sample.html">view</a></td><td></td><th>fr</th>
<td></td><td><a rel="nofollow" title="French-prg (sample file)" href="Tatoeba/fr-prg_sample.html">view</a></td><td><a rel="nofollow" title="French-Portuguese (sample file)" href="Tatoeba/fr-pt_sample.html">view</a></td><td><a rel="nofollow" title="French-Quechua (sample file)" href="Tatoeba/fr-qu_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Romansh (sample file)" href="Tatoeba/fr-rm_sample.html">view</a></td><td><a rel="nofollow" title="French-Romanian (sample file)" href="Tatoeba/fr-ro_sample.html">view</a></td><td><a rel="nofollow" title="French-Russian (sample file)" href="Tatoeba/fr-ru_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Sicilian (sample file)" href="Tatoeba/fr-scn_sample.html">view</a></td><td></td><td><a rel="nofollow" title="French-Slovenian (sample file)" href="Tatoeba/fr-sl_sample.html">view</a></td><td><a rel="nofollow" title="French-Albanian (sample file)" href="Tatoeba/fr-sq_sample.html">view</a></td><td><a rel="nofollow" title="French-Serbian (sample file)" href="Tatoeba/fr-sr_sample.html">view</a></td><td><a rel="nofollow" title="French-Swedish (sample file)" href="Tatoeba/fr-sv_sample.html">view</a></td><td><a rel="nofollow" title="French-swh (sample file)" href="Tatoeba/fr-swh_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Thai (sample file)" href="Tatoeba/fr-th_sample.html">view</a></td><td><a rel="nofollow" title="French-Tagalog (sample file)" href="Tatoeba/fr-tl_sample.html">view</a></td><td><a rel="nofollow" title="French-Klingon (sample file)" href="Tatoeba/fr-tlh_sample.html">view</a></td><td><a rel="nofollow" title="French-toki (sample file)" href="Tatoeba/fr-toki_sample.html">view</a></td><td></td><th>fr</th>
<td><a rel="nofollow" title="French-tpw (sample file)" href="Tatoeba/fr-tpw_sample.html">view</a></td><td><a rel="nofollow" title="French-Turkish (sample file)" href="Tatoeba/fr-tr_sample.html">view</a></td><td><a rel="nofollow" title="French-Tatar (sample file)" href="Tatoeba/fr-tt_sample.html">view</a></td><td><a rel="nofollow" title="French-Uighur (sample file)" href="Tatoeba/fr-ug_sample.html">view</a></td><td><a rel="nofollow" title="French-Ukrainian (sample file)" href="Tatoeba/fr-uk_sample.html">view</a></td><td><a rel="nofollow" title="French-Urdu (sample file)" href="Tatoeba/fr-ur_sample.html">view</a></td><td><a rel="nofollow" title="French-Uzbek (sample file)" href="Tatoeba/fr-uz_sample.html">view</a></td><td><a rel="nofollow" title="French-Vietnamese (sample file)" href="Tatoeba/fr-vi_sample.html">view</a></td><td><a rel="nofollow" title="French-VolapÃ¼k (sample file)" href="Tatoeba/fr-vo_sample.html">view</a></td><td><a rel="nofollow" title="French-wuu (sample file)" href="Tatoeba/fr-wuu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="French-Yiddish (sample file)" href="Tatoeba/fr-yi_sample.html">view</a></td><td><a rel="nofollow" title="French-yue (sample file)" href="Tatoeba/fr-yue_sample.html">view</a></td><td><a rel="nofollow" title="French-zsm (sample file)" href="Tatoeba/fr-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/fr.raw.tar.gz">fr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/fy.tar.gz">fy</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-cmn' (9 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-fy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-Czech' (4 links, 41.5k tokens)" href="download.php?f=Tatoeba/cs-fy.xml.gz">ces</a></td>
<th>fy</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-German' (48 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-fy.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-fy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-Esperanto' (11 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-fy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-Spanish' (29 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-fy.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Western Frisian-French' (42 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-fy.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Western Frisian-Italian (sample file)" href="Tatoeba/fy-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Western Frisian-Dutch (sample file)" href="Tatoeba/fy-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fy</th>
<td></td><td></td><td><a rel="nofollow" title="Western Frisian-Portuguese (sample file)" href="Tatoeba/fy-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Western Frisian-Russian (sample file)" href="Tatoeba/fy-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>fy</th>
<td></td><td><a rel="nofollow" title="Western Frisian-Turkish (sample file)" href="Tatoeba/fy-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Western Frisian-Ukrainian (sample file)" href="Tatoeba/fy-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Western Frisian-Vietnamese (sample file)" href="Tatoeba/fy-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/fy.raw.tar.gz">fy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ga.tar.gz">ga</a></th>
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
<th>ga</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-English' (0.5k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ga.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Irish-French' (5 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ga.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th>ga</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ga</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ga</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ga</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ga.raw.tar.gz">ga</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/gd.tar.gz">gd</a></th>
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
<th>gd</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-German' (0.1k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-gd.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-English' (0.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-gd.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-gd.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Gaelic-French' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-gd.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th>gd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Gaelic-Italian (sample file)" href="Tatoeba/gd-it_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gd</th>
<td></td><td></td><td><a rel="nofollow" title="Gaelic-Portuguese (sample file)" href="Tatoeba/gd-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/gd.raw.tar.gz">gd</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/gl.tar.gz">gl</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Galician-cmn' (8 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-gl.xml.gz">ces</a></td>
<td></td>
<th>gl</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-German' (65 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Greek' (5 links, 87.2k tokens)" href="download.php?f=Tatoeba/el-gl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-English' (0.8k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-gl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-Spanish' (2.8k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Galician-French' (73 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-gl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Japanese (sample file)" href="Tatoeba/gl-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td><a rel="nofollow" title="Galician-Portuguese (sample file)" href="Tatoeba/gl-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Galician-Russian (sample file)" href="Tatoeba/gl-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/gl.raw.tar.gz">gl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/gn.tar.gz">gn</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Guarani-cmn' (20 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-gn.xml.gz">ces</a></td>
<td></td>
<th>gn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Guarani-English' (81 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-gn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Guarani-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-gn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Guarani-French' (9 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-gn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th>gn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>gn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/gn.raw.tar.gz">gn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/he.tar.gz">he</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Arabic' (0.9k links, 0.7M tokens)" href="download.php?f=Tatoeba/ar-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Belarusian' (35 links, 0.7M tokens)" href="download.php?f=Tatoeba/be-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-cmn' (0.4k links, 0.7M tokens)" href="download.php?f=Tatoeba/cmn-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Czech' (6 links, 0.7M tokens)" href="download.php?f=Tatoeba/cs-he.xml.gz">ces</a></td>
<th>he</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-German' (3.2k links, 3.0M tokens)" href="download.php?f=Tatoeba/de-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-English' (54.4k links, 4.2M tokens)" href="download.php?f=Tatoeba/en-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Esperanto' (20.9k links, 3.2M tokens)" href="download.php?f=Tatoeba/eo-he.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Spanish' (2.5k links, 2.3M tokens)" href="download.php?f=Tatoeba/es-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-Finnish' (0.2k links, 0.8M tokens)" href="download.php?f=Tatoeba/fi-he.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hebrew-French' (3.7k links, 1.9M tokens)" href="download.php?f=Tatoeba/fr-he.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th><a rel="nofollow" title="Hebrew-Hebrew (sample file)" href="Tatoeba/he-he_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Hebrew-Hebrew' (1.6k links, 1.2M tokens)" href="download.php?f=Tatoeba/he-he.xml.gz">c</a>
</th><td></td><td></td><th>he</th>
<td></td><td></td><td><a rel="nofollow" title="Hebrew-Hungarian (sample file)" href="Tatoeba/he-hu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Italian (sample file)" href="Tatoeba/he-it_sample.html">view</a></td><td><a rel="nofollow" title="Hebrew-Japanese (sample file)" href="Tatoeba/he-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>he</th>
<td></td><td></td><td><a rel="nofollow" title="Hebrew-lzh (sample file)" href="Tatoeba/he-lzh_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Dutch (sample file)" href="Tatoeba/he-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Polish (sample file)" href="Tatoeba/he-pl_sample.html">view</a></td><td></td><th>he</th>
<td></td><td></td><td><a rel="nofollow" title="Hebrew-Portuguese (sample file)" href="Tatoeba/he-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Russian (sample file)" href="Tatoeba/he-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Tagalog (sample file)" href="Tatoeba/he-tl_sample.html">view</a></td><td></td><td></td><td></td><th>he</th>
<td></td><td><a rel="nofollow" title="Hebrew-Turkish (sample file)" href="Tatoeba/he-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Ukrainian (sample file)" href="Tatoeba/he-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hebrew-Yiddish (sample file)" href="Tatoeba/he-yi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/he.raw.tar.gz">he</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hi.tar.gz">hi</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Hindi-cmn' (0.3k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-hi.xml.gz">ces</a></td>
<td></td>
<th>hi</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-German' (33 links, 2.5M tokens)" href="download.php?f=Tatoeba/de-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-English' (4.7k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-hi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-Spanish' (25 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hindi-French' (37 links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-hi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hindi-Japanese (sample file)" href="Tatoeba/hi-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hindi-wuu (sample file)" href="Tatoeba/hi-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hi.raw.tar.gz">hi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hil.tar.gz">hil</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Hiligaynon-cmn' (7 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-hil.xml.gz">ces</a></td>
<td></td>
<th>hil</th>
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
<th></th>
<th>hil</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hil</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hil</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hil</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hil.raw.tar.gz">hil</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hr.tar.gz">hr</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Croatian-cmn' (0.1k links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Czech' (9 links, 61.9k tokens)" href="download.php?f=Tatoeba/cs-hr.xml.gz">ces</a></td>
<th>hr</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-German' (0.3k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-hr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-English' (0.9k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Esperanto' (0.8k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-hr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-Spanish' (0.2k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-hr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Croatian-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-hr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>hr</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Italian (sample file)" href="Tatoeba/hr-it_sample.html">view</a></td><td><a rel="nofollow" title="Croatian-Japanese (sample file)" href="Tatoeba/hr-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td><a rel="nofollow" title="Croatian-Portuguese (sample file)" href="Tatoeba/hr-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Russian (sample file)" href="Tatoeba/hr-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hr</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Croatian-Ukrainian (sample file)" href="Tatoeba/hr-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hr.raw.tar.gz">hr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hsb.tar.gz">hsb</a></th>
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
<th>hsb</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Upper Sorbian-German' (0.3k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-hsb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Upper Sorbian-English' (14 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-hsb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Upper Sorbian-Esperanto' (87 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-hsb.xml.gz">ces</a></td>
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
<th>hsb</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hsb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hsb.raw.tar.gz">hsb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hu.tar.gz">hu</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Bulgarian' (28 links, 0.4M tokens)" href="download.php?f=Tatoeba/bg-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-cmn' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/cmn-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Czech' (0.2k links, 0.3M tokens)" href="download.php?f=Tatoeba/cs-hu.xml.gz">ces</a></td>
<th>hu</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-German' (4.8k links, 2.7M tokens)" href="download.php?f=Tatoeba/de-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-English' (10.0k links, 3.9M tokens)" href="download.php?f=Tatoeba/en-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Esperanto' (15.5k links, 2.8M tokens)" href="download.php?f=Tatoeba/eo-hu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Spanish' (0.9k links, 2.0M tokens)" href="download.php?f=Tatoeba/es-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Finnish' (24 links, 0.4M tokens)" href="download.php?f=Tatoeba/fi-hu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-French' (0.8k links, 1.6M tokens)" href="download.php?f=Tatoeba/fr-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Hungarian-Hebrew' (0.2k links, 0.9M tokens)" href="download.php?f=Tatoeba/he-hu.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>hu</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Hungarian-Indonesian (sample file)" href="Tatoeba/hu-id_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Italian (sample file)" href="Tatoeba/hu-it_sample.html">view</a></td><td><a rel="nofollow" title="Hungarian-Japanese (sample file)" href="Tatoeba/hu-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Dutch (sample file)" href="Tatoeba/hu-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td><a rel="nofollow" title="Hungarian-Portuguese (sample file)" href="Tatoeba/hu-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Russian (sample file)" href="Tatoeba/hu-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hu</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Ukrainian (sample file)" href="Tatoeba/hu-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Hungarian-Vietnamese (sample file)" href="Tatoeba/hu-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hu.raw.tar.gz">hu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/hy.tar.gz">hy</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Armenian-cmn' (13 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-hy.xml.gz">ces</a></td>
<td></td>
<th>hy</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Armenian-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-hy.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Armenian-Esperanto' (6 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-hy.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Armenian-French' (7 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-hy.xml.gz">ces</a></td>
<td></td>
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
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Armenian-Japanese (sample file)" href="Tatoeba/hy-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Armenian-Russian (sample file)" href="Tatoeba/hy-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>hy</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/hy.raw.tar.gz">hy</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ia.tar.gz">ia</a></th>
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
<th>ia</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-German' (0.5k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-ia.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-English' (3.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-ia.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-Esperanto' (1.0k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-ia.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-Spanish' (0.4k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-ia.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-Finnish' (4 links, 0.2M tokens)" href="download.php?f=Tatoeba/fi-ia.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingua (International Auxiliary Language Association)-French' (0.6k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-ia.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ia</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-Italian (sample file)" href="Tatoeba/ia-it_sample.html">view</a></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-Japanese (sample file)" href="Tatoeba/ia-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ia</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-Dutch (sample file)" href="Tatoeba/ia-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ia</th>
<td></td><td></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-Portuguese (sample file)" href="Tatoeba/ia-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Interlingua (International Auxiliary Language Association)-Russian (sample file)" href="Tatoeba/ia-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ia</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ia.raw.tar.gz">ia</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/id.tar.gz">id</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-cmn' (0.1k links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Czech' (1 links, 59.1k tokens)" href="download.php?f=Tatoeba/cs-id.xml.gz">ces</a></td>
<th>id</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-German' (0.2k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-English' (1.5k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Esperanto' (0.2k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-id.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Spanish' (58 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Finnish' (9 links, 0.2M tokens)" href="download.php?f=Tatoeba/fi-id.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>id</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Indonesian-Hungarian' (25 links, 0.3M tokens)" href="download.php?f=Tatoeba/hu-id.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Indonesian-Ido (sample file)" href="Tatoeba/id-io_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Indonesian-Italian (sample file)" href="Tatoeba/id-it_sample.html">view</a></td><td><a rel="nofollow" title="Indonesian-Japanese (sample file)" href="Tatoeba/id-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Korean (sample file)" href="Tatoeba/id-ko_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td><a rel="nofollow" title="Indonesian-Lithuanian (sample file)" href="Tatoeba/id-lt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Polish (sample file)" href="Tatoeba/id-pl_sample.html">view</a></td><td></td><th>id</th>
<td></td><td></td><td><a rel="nofollow" title="Indonesian-Portuguese (sample file)" href="Tatoeba/id-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Russian (sample file)" href="Tatoeba/id-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>id</th>
<td></td><td><a rel="nofollow" title="Indonesian-Turkish (sample file)" href="Tatoeba/id-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Ukrainian (sample file)" href="Tatoeba/id-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-Vietnamese (sample file)" href="Tatoeba/id-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Indonesian-zsm (sample file)" href="Tatoeba/id-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/id.raw.tar.gz">id</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ie.tar.gz">ie</a></th>
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
<th>ie</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingue-German' (0.3k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-ie.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingue-English' (0.6k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ie.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingue-Esperanto' (98 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-ie.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Interlingue-French' (0.3k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ie.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ie</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Interlingue-Japanese (sample file)" href="Tatoeba/ie-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ie</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ie</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ie</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ie.raw.tar.gz">ie</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/io.tar.gz">io</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Ido-cmn' (27 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-io.xml.gz">ces</a></td>
<td></td>
<th>io</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-German' (0.2k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-io.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-English' (2.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-io.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-Esperanto' (0.8k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-io.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-Spanish' (0.4k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-io.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-French' (81 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-io.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>io</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ido-Indonesian' (22 links, 48.5k tokens)" href="download.php?f=Tatoeba/id-io.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Ido-Italian (sample file)" href="Tatoeba/io-it_sample.html">view</a></td><td><a rel="nofollow" title="Ido-Japanese (sample file)" href="Tatoeba/io-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>io</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ido-Dutch (sample file)" href="Tatoeba/io-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>io</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ido-Russian (sample file)" href="Tatoeba/io-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>io</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/io.raw.tar.gz">io</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/is.tar.gz">is</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-cmn' (11 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-is.xml.gz">ces</a></td>
<td></td>
<th>is</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-German' (0.3k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-English' (8.1k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Esperanto' (0.2k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-is.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-Spanish' (81 links, 1.8M tokens)" href="download.php?f=Tatoeba/es-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Icelandic-French' (0.1k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-is.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>is</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Icelandic-Italian (sample file)" href="Tatoeba/is-it_sample.html">view</a></td><td><a rel="nofollow" title="Icelandic-Japanese (sample file)" href="Tatoeba/is-ja_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td><a rel="nofollow" title="Icelandic-Portuguese (sample file)" href="Tatoeba/is-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Icelandic-Russian (sample file)" href="Tatoeba/is-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>is</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/is.raw.tar.gz">is</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/it.tar.gz">it</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Afrikaans' (75 links, 1.3M tokens)" href="download.php?f=Tatoeba/af-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English, Old (ca.450-1100)' (9 links, 1.3M tokens)" href="download.php?f=Tatoeba/ang-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Arabic' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/ar-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-avk' (72 links, 1.3M tokens)" href="download.php?f=Tatoeba/avk-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Berber languages)' (83 links, 1.8M tokens)" href="download.php?f=Tatoeba/ber-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bulgarian' (0.8k links, 1.3M tokens)" href="download.php?f=Tatoeba/bg-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bengali' (11 links, 1.3M tokens)" href="download.php?f=Tatoeba/bn-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Breton' (37 links, 1.3M tokens)" href="download.php?f=Tatoeba/br-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Bosnian' (16 links, 1.3M tokens)" href="download.php?f=Tatoeba/bs-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Catalan' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/ca-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-cmn' (1.4k links, 1.4M tokens)" href="download.php?f=Tatoeba/cmn-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Czech' (0.7k links, 1.3M tokens)" href="download.php?f=Tatoeba/cs-it.xml.gz">ces</a></td>
<th>it</th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Welsh' (46 links, 1.3M tokens)" href="download.php?f=Tatoeba/cy-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-cycl' (1 links, 1.3M tokens)" href="download.php?f=Tatoeba/cycl-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Danish' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/da-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-German' (10.3k links, 3.7M tokens)" href="download.php?f=Tatoeba/de-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Greek' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/el-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-English' (0.1M links, 4.9M tokens)" href="download.php?f=Tatoeba/en-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Esperanto' (14.4k links, 3.8M tokens)" href="download.php?f=Tatoeba/eo-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Spanish' (8.4k links, 2.9M tokens)" href="download.php?f=Tatoeba/es-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Basque' (37 links, 1.3M tokens)" href="download.php?f=Tatoeba/eu-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Finnish' (0.1k links, 1.4M tokens)" href="download.php?f=Tatoeba/fi-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-French' (25.8k links, 2.6M tokens)" href="download.php?f=Tatoeba/fr-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Western Frisian' (27 links, 1.3M tokens)" href="download.php?f=Tatoeba/fy-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Gaelic' (83 links, 1.3M tokens)" href="download.php?f=Tatoeba/gd-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hebrew' (0.9k links, 1.9M tokens)" href="download.php?f=Tatoeba/he-it.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>it</th>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Croatian' (84 links, 1.3M tokens)" href="download.php?f=Tatoeba/hr-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Hungarian' (0.7k links, 1.5M tokens)" href="download.php?f=Tatoeba/hu-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Interlingua (International Auxiliary Language Association)' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/ia-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Indonesian' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/id-it.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Ido' (1.4k links, 1.3M tokens)" href="download.php?f=Tatoeba/io-it.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Italian-Icelandic' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/is-it.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Italian-Italian (sample file)" href="Tatoeba/it-it_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Italian-Italian' (0.6k links, 2.5M tokens)" href="download.php?f=Tatoeba/it-it.xml.gz">c</a>
</th><td><a rel="nofollow" title="Italian-Japanese (sample file)" href="Tatoeba/it-ja_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Lojban (sample file)" href="Tatoeba/it-jbo_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Korean (sample file)" href="Tatoeba/it-ko_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Kurdish (sample file)" href="Tatoeba/it-ku_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-Latin (sample file)" href="Tatoeba/it-la_sample.html">view</a></td><td></td><td></td><td></td><th>it</th>
<td><a rel="nofollow" title="Italian-Lithuanian (sample file)" href="Tatoeba/it-lt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Latvian (sample file)" href="Tatoeba/it-lv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Maltese (sample file)" href="Tatoeba/it-mt_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/it-nb_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Low German (sample file)" href="Tatoeba/it-nds_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Dutch (sample file)" href="Tatoeba/it-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Polish (sample file)" href="Tatoeba/it-pl_sample.html">view</a></td><td></td><th>it</th>
<td></td><td></td><td><a rel="nofollow" title="Italian-Portuguese (sample file)" href="Tatoeba/it-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Romanian (sample file)" href="Tatoeba/it-ro_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Russian (sample file)" href="Tatoeba/it-ru_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Slovenian (sample file)" href="Tatoeba/it-sl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Albanian (sample file)" href="Tatoeba/it-sq_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Serbian (sample file)" href="Tatoeba/it-sr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Swedish (sample file)" href="Tatoeba/it-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Italian-Tagalog (sample file)" href="Tatoeba/it-tl_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Klingon (sample file)" href="Tatoeba/it-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Italian-toki (sample file)" href="Tatoeba/it-toki_sample.html">view</a></td><td></td><th>it</th>
<td></td><td><a rel="nofollow" title="Italian-Turkish (sample file)" href="Tatoeba/it-tr_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Tatar (sample file)" href="Tatoeba/it-tt_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Uighur (sample file)" href="Tatoeba/it-ug_sample.html">view</a></td><td><a rel="nofollow" title="Italian-Ukrainian (sample file)" href="Tatoeba/it-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Italian-Vietnamese (sample file)" href="Tatoeba/it-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Italian-wuu (sample file)" href="Tatoeba/it-wuu_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Italian-Yiddish (sample file)" href="Tatoeba/it-yi_sample.html">view</a></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/it.raw.tar.gz">it</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ja.tar.gz">ja</a></th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-acm' (25 links, 0.4M tokens)" href="download.php?f=Tatoeba/acm-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Afrikaans' (18 links, 0.5M tokens)" href="download.php?f=Tatoeba/af-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Arabic' (1.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/ar-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-arq' (9 links, 0.4M tokens)" href="download.php?f=Tatoeba/arq-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-arz' (12 links, 0.4M tokens)" href="download.php?f=Tatoeba/arz-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-avk' (15 links, 0.5M tokens)" href="download.php?f=Tatoeba/avk-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Azerbaijani' (5 links, 0.4M tokens)" href="download.php?f=Tatoeba/az-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Belarusian' (0.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/be-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Berber languages)' (14 links, 1.0M tokens)" href="download.php?f=Tatoeba/ber-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bulgarian' (0.3k links, 0.5M tokens)" href="download.php?f=Tatoeba/bg-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Bengali' (14 links, 0.4M tokens)" href="download.php?f=Tatoeba/bn-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Breton' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/br-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Catalan' (0.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/ca-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-cmn' (2.9k links, 0.5M tokens)" href="download.php?f=Tatoeba/cmn-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Czech' (29 links, 0.5M tokens)" href="download.php?f=Tatoeba/cs-ja.xml.gz">ces</a></td>
<th>ja</th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Welsh' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/cy-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-cycl' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/cycl-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Danish' (0.8k links, 0.6M tokens)" href="download.php?f=Tatoeba/da-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-German' (28.0k links, 2.8M tokens)" href="download.php?f=Tatoeba/de-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Lower Sorbian' (1 links, 0.4M tokens)" href="download.php?f=Tatoeba/dsb-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Ewe' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ee-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Greek' (13 links, 0.5M tokens)" href="download.php?f=Tatoeba/el-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-English' (0.2M links, 4.1M tokens)" href="download.php?f=Tatoeba/en-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Esperanto' (7.3k links, 3.0M tokens)" href="download.php?f=Tatoeba/eo-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Spanish' (28.0k links, 2.1M tokens)" href="download.php?f=Tatoeba/es-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Estonian' (49 links, 0.4M tokens)" href="download.php?f=Tatoeba/et-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Basque' (49 links, 0.4M tokens)" href="download.php?f=Tatoeba/eu-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Finnish' (2.4k links, 0.6M tokens)" href="download.php?f=Tatoeba/fi-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-French' (31.2k links, 1.7M tokens)" href="download.php?f=Tatoeba/fr-ja.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Galician' (9 links, 0.5M tokens)" href="download.php?f=Tatoeba/gl-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hebrew' (0.2k links, 1.1M tokens)" href="download.php?f=Tatoeba/he-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hindi' (70 links, 0.5M tokens)" href="download.php?f=Tatoeba/hi-ja.xml.gz">ces</a></td>
<td></td>
<th>ja</th>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Croatian' (0.2k links, 0.5M tokens)" href="download.php?f=Tatoeba/hr-ja.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Hungarian' (5.0k links, 0.7M tokens)" href="download.php?f=Tatoeba/hu-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Armenian' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/hy-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Interlingua (International Auxiliary Language Association)' (21 links, 0.5M tokens)" href="download.php?f=Tatoeba/ia-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Indonesian' (0.5k links, 0.5M tokens)" href="download.php?f=Tatoeba/id-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Interlingue' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ie-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Ido' (22 links, 0.5M tokens)" href="download.php?f=Tatoeba/io-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Icelandic' (0.3k links, 0.5M tokens)" href="download.php?f=Tatoeba/is-ja.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Japanese-Italian' (2.4k links, 1.7M tokens)" href="download.php?f=Tatoeba/it-ja.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Japanese-Japanese (sample file)" href="Tatoeba/ja-ja_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Japanese-Japanese' (0.5k links, 0.9M tokens)" href="download.php?f=Tatoeba/ja-ja.xml.gz">c</a>
</th><td><a rel="nofollow" title="Japanese-Lojban (sample file)" href="Tatoeba/ja-jbo_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Georgian (sample file)" href="Tatoeba/ja-ka_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Central Khmer (sample file)" href="Tatoeba/ja-km_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Korean (sample file)" href="Tatoeba/ja-ko_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-ksh (sample file)" href="Tatoeba/ja-ksh_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Kurdish (sample file)" href="Tatoeba/ja-ku_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Latin (sample file)" href="Tatoeba/ja-la_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ladino (sample file)" href="Tatoeba/ja-lad_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Lao (sample file)" href="Tatoeba/ja-lo_sample.html">view</a></td><th>ja</th>
<td><a rel="nofollow" title="Japanese-Lithuanian (sample file)" href="Tatoeba/ja-lt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Latvian (sample file)" href="Tatoeba/ja-lv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-lzh (sample file)" href="Tatoeba/ja-lzh_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Malayalam (sample file)" href="Tatoeba/ja-ml_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Mongolian (sample file)" href="Tatoeba/ja-mn_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Marathi (sample file)" href="Tatoeba/ja-mr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Maltese (sample file)" href="Tatoeba/ja-mt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-nan (sample file)" href="Tatoeba/ja-nan_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-BokmÃ¥l, Norwegian (sample file)" href="Tatoeba/ja-nb_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Low German (sample file)" href="Tatoeba/ja-nds_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Dutch (sample file)" href="Tatoeba/ja-nl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Norse, Old (sample file)" href="Tatoeba/ja-non_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-nov (sample file)" href="Tatoeba/ja-nov_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Occitan (post 1500) (sample file)" href="Tatoeba/ja-oc_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-orv (sample file)" href="Tatoeba/ja-orv_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ossetian (sample file)" href="Tatoeba/ja-os_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-pes (sample file)" href="Tatoeba/ja-pes_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Polish (sample file)" href="Tatoeba/ja-pl_sample.html">view</a></td><td></td><th>ja</th>
<td></td><td><a rel="nofollow" title="Japanese-prg (sample file)" href="Tatoeba/ja-prg_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Portuguese (sample file)" href="Tatoeba/ja-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Romanian (sample file)" href="Tatoeba/ja-ro_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Russian (sample file)" href="Tatoeba/ja-ru_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Sanskrit (sample file)" href="Tatoeba/ja-sa_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Slovenian (sample file)" href="Tatoeba/ja-sl_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Serbian (sample file)" href="Tatoeba/ja-sr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Swedish (sample file)" href="Tatoeba/ja-sv_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Japanese-Tajik (sample file)" href="Tatoeba/ja-tg_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Thai (sample file)" href="Tatoeba/ja-th_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Tagalog (sample file)" href="Tatoeba/ja-tl_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Klingon (sample file)" href="Tatoeba/ja-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-toki (sample file)" href="Tatoeba/ja-toki_sample.html">view</a></td><td></td><th>ja</th>
<td></td><td><a rel="nofollow" title="Japanese-Turkish (sample file)" href="Tatoeba/ja-tr_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Tatar (sample file)" href="Tatoeba/ja-tt_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Uighur (sample file)" href="Tatoeba/ja-ug_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Ukrainian (sample file)" href="Tatoeba/ja-uk_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Urdu (sample file)" href="Tatoeba/ja-ur_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Uzbek (sample file)" href="Tatoeba/ja-uz_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Vietnamese (sample file)" href="Tatoeba/ja-vi_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-VolapÃ¼k (sample file)" href="Tatoeba/ja-vo_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-wuu (sample file)" href="Tatoeba/ja-wuu_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-Kalmyk (sample file)" href="Tatoeba/ja-xal_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Japanese-Yiddish (sample file)" href="Tatoeba/ja-yi_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-yue (sample file)" href="Tatoeba/ja-yue_sample.html">view</a></td><td><a rel="nofollow" title="Japanese-zsm (sample file)" href="Tatoeba/ja-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ja.raw.tar.gz">ja</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/jbo.tar.gz">jbo</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Lojban-cmn' (0.4k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-jbo.xml.gz">ces</a></td>
<td></td>
<th>jbo</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-German' (0.5k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-jbo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-English' (7.9k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-jbo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-Esperanto' (1.1k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-jbo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-Spanish' (1.4k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-jbo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-French' (1.0k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-jbo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>jbo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-Italian' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-jbo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lojban-Japanese' (0.8k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-jbo.xml.gz">ces</a></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>jbo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>jbo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lojban-Russian (sample file)" href="Tatoeba/jbo-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>jbo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/jbo.raw.tar.gz">jbo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ka.tar.gz">ka</a></th>
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
<th>ka</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Georgian-English' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ka.xml.gz">ces</a></td>
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
<th>ka</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Georgian-Japanese' (54 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ka.xml.gz">ces</a></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Georgian-Russian (sample file)" href="Tatoeba/ka-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ka</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ka.raw.tar.gz">ka</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/kk.tar.gz">kk</a></th>
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
<th>kk</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-kk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-Esperanto' (48 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-kk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kazakh-French' (10 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-kk.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Kazakh-Russian (sample file)" href="Tatoeba/kk-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kk</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/kk.raw.tar.gz">kk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/km.tar.gz">km</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-cmn' (6 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-km.xml.gz">ces</a></td>
<td></td>
<th>km</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-km.xml.gz">ces</a></td>
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
<th>km</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Central Khmer-Japanese' (9 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-km.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>km</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/km.raw.tar.gz">km</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ko.tar.gz">ko</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Arabic' (90 links, 99.0k tokens)" href="download.php?f=Tatoeba/ar-ko.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Korean-cmn' (88 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-ko.xml.gz">ces</a></td>
<td></td>
<th>ko</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-German' (0.5k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-English' (0.9k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Esperanto' (82 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Spanish' (0.4k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Finnish' (0.2k links, 0.1M tokens)" href="download.php?f=Tatoeba/fi-ko.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ko</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Indonesian' (2 links, 27.5k tokens)" href="download.php?f=Tatoeba/id-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Italian' (42 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-ko.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Korean-Japanese' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ko.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th><a rel="nofollow" title="Korean-Korean (sample file)" href="Tatoeba/ko-ko_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Korean-Korean' (59 links, 18.0k tokens)" href="download.php?f=Tatoeba/ko-ko.xml.gz">c</a>
</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ko</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Mongolian (sample file)" href="Tatoeba/ko-mn_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Dutch (sample file)" href="Tatoeba/ko-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Polish (sample file)" href="Tatoeba/ko-pl_sample.html">view</a></td><td></td><th>ko</th>
<td></td><td></td><td><a rel="nofollow" title="Korean-Portuguese (sample file)" href="Tatoeba/ko-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Romanian (sample file)" href="Tatoeba/ko-ro_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Russian (sample file)" href="Tatoeba/ko-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-Klingon (sample file)" href="Tatoeba/ko-tlh_sample.html">view</a></td><td></td><td></td><th>ko</th>
<td></td><td><a rel="nofollow" title="Korean-Turkish (sample file)" href="Tatoeba/ko-tr_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Korean-Uighur (sample file)" href="Tatoeba/ko-ug_sample.html">view</a></td><td><a rel="nofollow" title="Korean-Ukrainian (sample file)" href="Tatoeba/ko-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Korean-Vietnamese (sample file)" href="Tatoeba/ko-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Korean-yue (sample file)" href="Tatoeba/ko-yue_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ko.raw.tar.gz">ko</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ksh.tar.gz">ksh</a></th>
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
<th>ksh</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'ksh-English' (6 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ksh.xml.gz">ces</a></td>
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
<th>ksh</th>
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
<td><a rel="nofollow" title="sentence alignments for 'ksh-Japanese' (3 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ksh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th>ksh</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ksh</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ksh</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ksh.raw.tar.gz">ksh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ku.tar.gz">ku</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-cmn' (5 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-ku.xml.gz">ces</a></td>
<td></td>
<th>ku</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-German' (4 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-ku.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-English' (43 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ku.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-French' (22 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ku.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ku</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-Italian' (5 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-ku.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Kurdish-Japanese' (9 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ku.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><th>ku</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ku</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ku</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ku.raw.tar.gz">ku</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/kw.tar.gz">kw</a></th>
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
<th>kw</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Cornish-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-kw.xml.gz">ces</a></td>
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
<th>kw</th>
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
<td></td><td></td><td></td><td></td><th>kw</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kw</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>kw</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/kw.raw.tar.gz">kw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/la.tar.gz">la</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Latin-cmn' (38 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-la.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-Czech' (22 links, 0.1M tokens)" href="download.php?f=Tatoeba/cs-la.xml.gz">ces</a></td>
<th>la</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-German' (1.4k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-la.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-English' (7.0k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-la.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-Esperanto' (3.0k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-la.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-Spanish' (2.3k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-la.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-French' (2.0k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-la.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>la</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-Italian' (1.3k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-la.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latin-Japanese' (93 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-la.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><th>la</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latin-Dutch (sample file)" href="Tatoeba/la-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>la</th>
<td></td><td></td><td><a rel="nofollow" title="Latin-Portuguese (sample file)" href="Tatoeba/la-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latin-Russian (sample file)" href="Tatoeba/la-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>la</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latin-wuu (sample file)" href="Tatoeba/la-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/la.raw.tar.gz">la</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lad.tar.gz">lad</a></th>
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
<th>lad</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ladino-German' (8 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-lad.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ladino-English' (40 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-lad.xml.gz">ces</a></td>
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
<th>lad</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Ladino-Japanese' (1 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-lad.xml.gz">ces</a></td>
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
<td></td><td></td><th>lad</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lad</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lad</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lad.raw.tar.gz">lad</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lld.tar.gz">lld</a></th>
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
<th>lld</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lld-English' (12 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-lld.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lld-Spanish' (3 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-lld.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lld-French' (21 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-lld.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lld</th>
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
<th></th>
<td></td><th>lld</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lld</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lld</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lld.raw.tar.gz">lld</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lo.tar.gz">lo</a></th>
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
<th>lo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lao-English' (18 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-lo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lao-French' (1 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-lo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lo</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Lao-Japanese' (1 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-lo.xml.gz">ces</a></td>
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
<th>lo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lo</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lo.raw.tar.gz">lo</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lt.tar.gz">lt</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-cmn' (26 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-lt.xml.gz">ces</a></td>
<td></td>
<th>lt</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-German' (0.4k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-English' (6.3k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Esperanto' (0.1k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-French' (97 links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Indonesian' (1 links, 80.6k tokens)" href="download.php?f=Tatoeba/id-lt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Italian' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-lt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Lithuanian-Japanese' (0.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-lt.xml.gz">ces</a></td>
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
<th>lt</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Lithuanian-Russian (sample file)" href="Tatoeba/lt-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lt.raw.tar.gz">lt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lv.tar.gz">lv</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Latvian-cmn' (37 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-lv.xml.gz">ces</a></td>
<td></td>
<th>lv</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-German' (28 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-English' (1.0k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-French' (22 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-lv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>lv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Italian' (15 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-lv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Latvian-Japanese' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-lv.xml.gz">ces</a></td>
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
<th>lv</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latvian-Russian (sample file)" href="Tatoeba/lv-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Latvian-wuu (sample file)" href="Tatoeba/lv-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lv.raw.tar.gz">lv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/lzh.tar.gz">lzh</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'lzh-cmn' (86 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-lzh.xml.gz">ces</a></td>
<td></td>
<th>lzh</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lzh-German' (43 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-lzh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lzh-English' (0.5k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-lzh.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lzh-Spanish' (12 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-lzh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lzh-French' (80 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-lzh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'lzh-Hebrew' (67 links, 0.6M tokens)" href="download.php?f=Tatoeba/he-lzh.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>lzh</th>
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
<td><a rel="nofollow" title="sentence alignments for 'lzh-Japanese' (21 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-lzh.xml.gz">ces</a></td>
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
<th>lzh</th>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lzh</th>
<td></td><td></td><td><a rel="nofollow" title="lzh-Portuguese (sample file)" href="Tatoeba/lzh-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="lzh-Russian (sample file)" href="Tatoeba/lzh-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>lzh</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/lzh.raw.tar.gz">lzh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/mg.tar.gz">mg</a></th>
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
<th>mg</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malagasy-English' (19 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-mg.xml.gz">ces</a></td>
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
<th>mg</th>
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
<th>mg</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/mg.raw.tar.gz">mg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/mi.tar.gz">mi</a></th>
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
<th>mi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maori-English' (19 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-mi.xml.gz">ces</a></td>
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
<th>mi</th>
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
<th>mi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/mi.raw.tar.gz">mi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ml.tar.gz">ml</a></th>
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
<th>ml</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-English' (0.7k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ml.xml.gz">ces</a></td>
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
<th>ml</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Malayalam-Japanese' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ml.xml.gz">ces</a></td>
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
<th>ml</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ml</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ml</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ml.raw.tar.gz">ml</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/mn.tar.gz">mn</a></th>
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
<th>mn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-mn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-Spanish' (12 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-mn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-French' (18 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-mn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-Japanese' (54 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-mn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Mongolian-Korean' (19 links, 12.0k tokens)" href="download.php?f=Tatoeba/ko-mn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/mn.raw.tar.gz">mn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/mr.tar.gz">mr</a></th>
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
<th>mr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Marathi-English' (16.9k links, 3.8M tokens)" href="download.php?f=Tatoeba/en-mr.xml.gz">ces</a></td>
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
<th>mr</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Marathi-Japanese' (0.2k links, 0.6M tokens)" href="download.php?f=Tatoeba/ja-mr.xml.gz">ces</a></td>
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
<th>mr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mr</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/mr.raw.tar.gz">mr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/mt.tar.gz">mt</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Arabic' (27 links, 90.6k tokens)" href="download.php?f=Tatoeba/ar-mt.xml.gz">ces</a></td>
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
<th>mt</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-German' (64 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-mt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Greek' (59 links, 56.9k tokens)" href="download.php?f=Tatoeba/el-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-mt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Spanish' (72 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-mt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-French' (24 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-mt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>mt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Italian' (20 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-mt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Maltese-Japanese' (1 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-mt.xml.gz">ces</a></td>
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
<th>mt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td><a rel="nofollow" title="Maltese-Dutch (sample file)" href="Tatoeba/mt-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mt</th>
<td></td><td></td><td><a rel="nofollow" title="Maltese-Portuguese (sample file)" href="Tatoeba/mt-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>mt</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/mt.raw.tar.gz">mt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/nan.tar.gz">nan</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'nan-cmn' (7 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-nan.xml.gz">ces</a></td>
<td></td>
<th>nan</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'nan-English' (7 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-nan.xml.gz">ces</a></td>
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
<th>nan</th>
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
<td><a rel="nofollow" title="sentence alignments for 'nan-Japanese' (3 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-nan.xml.gz">ces</a></td>
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
<th>nan</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nan</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nan</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/nan.raw.tar.gz">nan</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/nb.tar.gz">nb</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-cmn' (21 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Czech' (17 links, 0.1M tokens)" href="download.php?f=Tatoeba/cs-nb.xml.gz">ces</a></td>
<th>nb</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-German' (3.4k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-nb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Greek' (4 links, 0.1M tokens)" href="download.php?f=Tatoeba/el-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-English' (5.5k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Esperanto' (3.3k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Spanish' (0.6k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-nb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-French' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-nb.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nb</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Italian' (0.8k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-nb.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'BokmÃ¥l, Norwegian-Japanese' (0.8k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-nb.xml.gz">ces</a></td>
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
<th>nb</th>
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
<td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Dutch (sample file)" href="Tatoeba/nb-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nb</th>
<td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Portuguese (sample file)" href="Tatoeba/nb-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Russian (sample file)" href="Tatoeba/nb-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="BokmÃ¥l, Norwegian-Swedish (sample file)" href="Tatoeba/nb-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/nb.raw.tar.gz">nb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/nds.tar.gz">nds</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Low German-cmn' (37 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-nds.xml.gz">ces</a></td>
<td></td>
<th>nds</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-German' (16.3k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-nds.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-Greek' (25 links, 0.2M tokens)" href="download.php?f=Tatoeba/el-nds.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-English' (4.7k links, 3.8M tokens)" href="download.php?f=Tatoeba/en-nds.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-Esperanto' (2.5k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-nds.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-Spanish' (0.6k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-nds.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-French' (0.5k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-nds.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>nds</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-Italian' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/it-nds.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Low German-Japanese' (0.2k links, 0.6M tokens)" href="download.php?f=Tatoeba/ja-nds.xml.gz">ces</a></td>
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
<th>nds</th>
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
<td><a rel="nofollow" title="Low German-Dutch (sample file)" href="Tatoeba/nds-nl_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nds</th>
<td></td><td></td><td><a rel="nofollow" title="Low German-Portuguese (sample file)" href="Tatoeba/nds-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Low German-Russian (sample file)" href="Tatoeba/nds-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nds</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Low German-Ukrainian (sample file)" href="Tatoeba/nds-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/nds.raw.tar.gz">nds</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/nl.tar.gz">nl</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Belarusian' (0.5k links, 0.3M tokens)" href="download.php?f=Tatoeba/be-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Bulgarian' (36 links, 0.4M tokens)" href="download.php?f=Tatoeba/bg-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Breton' (5 links, 0.3M tokens)" href="download.php?f=Tatoeba/br-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-cmn' (1.6k links, 0.4M tokens)" href="download.php?f=Tatoeba/cmn-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Czech' (56 links, 0.3M tokens)" href="download.php?f=Tatoeba/cs-nl.xml.gz">ces</a></td>
<th>nl</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Danish' (1.1k links, 0.4M tokens)" href="download.php?f=Tatoeba/da-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-German' (10.8k links, 2.7M tokens)" href="download.php?f=Tatoeba/de-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Greek' (39 links, 0.3M tokens)" href="download.php?f=Tatoeba/el-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-English' (18.0k links, 3.9M tokens)" href="download.php?f=Tatoeba/en-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Esperanto' (28.8k links, 2.8M tokens)" href="download.php?f=Tatoeba/eo-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Spanish' (18.6k links, 2.0M tokens)" href="download.php?f=Tatoeba/es-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Finnish' (98 links, 0.4M tokens)" href="download.php?f=Tatoeba/fi-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-French' (7.2k links, 1.6M tokens)" href="download.php?f=Tatoeba/fr-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Western Frisian' (0.1k links, 0.3M tokens)" href="download.php?f=Tatoeba/fy-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hebrew' (5.6k links, 0.9M tokens)" href="download.php?f=Tatoeba/he-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>nl</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Hungarian' (0.2k links, 0.6M tokens)" href="download.php?f=Tatoeba/hu-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Interlingua (International Auxiliary Language Association)' (0.5k links, 0.4M tokens)" href="download.php?f=Tatoeba/ia-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Ido' (30 links, 0.3M tokens)" href="download.php?f=Tatoeba/io-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Italian' (2.0k links, 1.5M tokens)" href="download.php?f=Tatoeba/it-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Japanese' (2.6k links, 0.7M tokens)" href="download.php?f=Tatoeba/ja-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Korean' (25 links, 0.3M tokens)" href="download.php?f=Tatoeba/ko-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Latin' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/la-nl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th>nl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Maltese' (5 links, 0.3M tokens)" href="download.php?f=Tatoeba/mt-nl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-BokmÃ¥l, Norwegian' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/nb-nl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Dutch-Low German' (2.4k links, 0.4M tokens)" href="download.php?f=Tatoeba/nds-nl.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Dutch-Dutch (sample file)" href="Tatoeba/nl-nl_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Dutch-Dutch' (0.3k links, 0.6M tokens)" href="download.php?f=Tatoeba/nl-nl.xml.gz">c</a>
</th><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Polish (sample file)" href="Tatoeba/nl-pl_sample.html">view</a></td><td></td><th>nl</th>
<td></td><td></td><td><a rel="nofollow" title="Dutch-Portuguese (sample file)" href="Tatoeba/nl-pt_sample.html">view</a></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Romanian (sample file)" href="Tatoeba/nl-ro_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-Russian (sample file)" href="Tatoeba/nl-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-swh (sample file)" href="Tatoeba/nl-swh_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Klingon (sample file)" href="Tatoeba/nl-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Dutch-toki (sample file)" href="Tatoeba/nl-toki_sample.html">view</a></td><td></td><th>nl</th>
<td></td><td><a rel="nofollow" title="Dutch-Turkish (sample file)" href="Tatoeba/nl-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Ukrainian (sample file)" href="Tatoeba/nl-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Dutch-Vietnamese (sample file)" href="Tatoeba/nl-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/nl.raw.tar.gz">nl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/non.tar.gz">non</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-cmn' (2 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-non.xml.gz">ces</a></td>
<td></td>
<th>non</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-German' (39 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-non.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-English' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-non.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-Esperanto' (36 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-non.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-Spanish' (28 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-non.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-French' (10 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-non.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>non</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Norse, Old-Japanese' (8 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-non.xml.gz">ces</a></td>
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
<th>non</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>non</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>non</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/non.raw.tar.gz">non</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/nov.tar.gz">nov</a></th>
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
<th>nov</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'nov-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-nov.xml.gz">ces</a></td>
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
<th>nov</th>
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
<td><a rel="nofollow" title="sentence alignments for 'nov-Japanese' (1 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-nov.xml.gz">ces</a></td>
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
<th>nov</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nov</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>nov</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/nov.raw.tar.gz">nov</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/npi.tar.gz">npi</a></th>
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
<th>npi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'npi-English' (10 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-npi.xml.gz">ces</a></td>
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
<th>npi</th>
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
<th>npi</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>npi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>npi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/npi.raw.tar.gz">npi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/oc.tar.gz">oc</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-cmn' (60 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-oc.xml.gz">ces</a></td>
<td></td>
<th>oc</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-German' (0.1k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-English' (0.8k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-oc.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Spanish' (58 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-French' (0.7k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-oc.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Occitan (post 1500)-Japanese' (58 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-oc.xml.gz">ces</a></td>
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
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th>oc</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Occitan (post 1500)-Russian (sample file)" href="Tatoeba/oc-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>oc</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/oc.raw.tar.gz">oc</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/orv.tar.gz">orv</a></th>
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
<th>orv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'orv-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-orv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'orv-Esperanto' (22 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-orv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'orv-French' (31 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-orv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>orv</th>
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
<td><a rel="nofollow" title="sentence alignments for 'orv-Japanese' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-orv.xml.gz">ces</a></td>
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
<th>orv</th>
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
<td></td><td></td><td></td><td></td><td></td><th>orv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="orv-Russian (sample file)" href="Tatoeba/orv-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>orv</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="orv-Ukrainian (sample file)" href="Tatoeba/orv-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/orv.raw.tar.gz">orv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/os.tar.gz">os</a></th>
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
<th>os</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ossetian-English' (41 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-os.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ossetian-Esperanto' (43 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-os.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ossetian-French' (12 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-os.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>os</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Ossetian-Japanese' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-os.xml.gz">ces</a></td>
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
<th>os</th>
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
<td></td><td></td><td></td><td></td><th>os</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>os</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/os.raw.tar.gz">os</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pcd.tar.gz">pcd</a></th>
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
<th>pcd</th>
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
<td><a rel="nofollow" title="sentence alignments for 'pcd-French' (100 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-pcd.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pcd</th>
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
<th>pcd</th>
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
<td></td><td></td><td></td><th>pcd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pcd</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pcd.raw.tar.gz">pcd</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pes.tar.gz">pes</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'pes-cmn' (42 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-pes.xml.gz">ces</a></td>
<td></td>
<th>pes</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-German' (0.2k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-pes.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-Greek' (6 links, 0.2M tokens)" href="download.php?f=Tatoeba/el-pes.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-English' (2.8k links, 3.8M tokens)" href="download.php?f=Tatoeba/en-pes.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-Esperanto' (9.7k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-pes.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-Spanish' (70 links, 1.8M tokens)" href="download.php?f=Tatoeba/es-pes.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pes-French' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-pes.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pes</th>
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
<td><a rel="nofollow" title="sentence alignments for 'pes-Japanese' (0.1k links, 0.6M tokens)" href="download.php?f=Tatoeba/ja-pes.xml.gz">ces</a></td>
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
<th>pes</th>
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
<th></th>
<td></td><td></td><th>pes</th>
<td></td><td></td><td><a rel="nofollow" title="pes-Portuguese (sample file)" href="Tatoeba/pes-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pes</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pes.raw.tar.gz">pes</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pl.tar.gz">pl</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Arabic' (0.2k links, 0.5M tokens)" href="download.php?f=Tatoeba/ar-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Belarusian' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/be-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Bulgarian' (63 links, 0.5M tokens)" href="download.php?f=Tatoeba/bg-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-cmn' (0.6k links, 0.5M tokens)" href="download.php?f=Tatoeba/cmn-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Czech' (0.4k links, 0.4M tokens)" href="download.php?f=Tatoeba/cs-pl.xml.gz">ces</a></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-German' (6.1k links, 2.8M tokens)" href="download.php?f=Tatoeba/de-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Greek' (71 links, 0.5M tokens)" href="download.php?f=Tatoeba/el-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-English' (21.6k links, 4.0M tokens)" href="download.php?f=Tatoeba/en-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Esperanto' (5.7k links, 3.0M tokens)" href="download.php?f=Tatoeba/eo-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Spanish' (2.9k links, 2.1M tokens)" href="download.php?f=Tatoeba/es-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Finnish' (0.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/fi-pl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-French' (3.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/fr-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Hebrew' (12.5k links, 1.0M tokens)" href="download.php?f=Tatoeba/he-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>pl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Indonesian' (15 links, 0.4M tokens)" href="download.php?f=Tatoeba/id-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Italian' (1.6k links, 1.6M tokens)" href="download.php?f=Tatoeba/it-pl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Japanese' (22.3k links, 0.8M tokens)" href="download.php?f=Tatoeba/ja-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Polish-Korean' (50 links, 0.4M tokens)" href="download.php?f=Tatoeba/ko-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>pl</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Polish-Dutch' (1.1k links, 0.7M tokens)" href="download.php?f=Tatoeba/nl-pl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th>pl</th>
<td></td><td></td><td><a rel="nofollow" title="Polish-Portuguese (sample file)" href="Tatoeba/pl-pt_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Polish-Russian (sample file)" href="Tatoeba/pl-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pl</th>
<td></td><td><a rel="nofollow" title="Polish-Turkish (sample file)" href="Tatoeba/pl-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Polish-Ukrainian (sample file)" href="Tatoeba/pl-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Polish-Vietnamese (sample file)" href="Tatoeba/pl-vi_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Polish-wuu (sample file)" href="Tatoeba/pl-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pl.raw.tar.gz">pl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pms.tar.gz">pms</a></th>
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
<th>pms</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pms-English' (11 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-pms.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pms-Spanish' (8 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-pms.xml.gz">ces</a></td>
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
<th>pms</th>
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
<th>pms</th>
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
<th></th>
<th>pms</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pms</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pms.raw.tar.gz">pms</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pnb.tar.gz">pnb</a></th>
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
<th>pnb</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'pnb-English' (20 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-pnb.xml.gz">ces</a></td>
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
<th>pnb</th>
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
<th>pnb</th>
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
<th>pnb</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>pnb</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pnb.raw.tar.gz">pnb</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/prg.tar.gz">prg</a></th>
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
<th>prg</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'prg-German' (37 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-prg.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'prg-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-prg.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'prg-Spanish' (17 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-prg.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'prg-French' (10 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-prg.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>prg</th>
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
<td><a rel="nofollow" title="sentence alignments for 'prg-Japanese' (6 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-prg.xml.gz">ces</a></td>
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
<th>prg</th>
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
<th>prg</th>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>prg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/prg.raw.tar.gz">prg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/pt.tar.gz">pt</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Afrikaans' (43 links, 1.1M tokens)" href="download.php?f=Tatoeba/af-pt.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Bulgarian' (32 links, 1.2M tokens)" href="download.php?f=Tatoeba/bg-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-cmn' (0.6k links, 1.2M tokens)" href="download.php?f=Tatoeba/cmn-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Czech' (25 links, 1.1M tokens)" href="download.php?f=Tatoeba/cs-pt.xml.gz">ces</a></td>
<th>pt</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Danish' (0.7k links, 1.2M tokens)" href="download.php?f=Tatoeba/da-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-German' (5.6k links, 3.5M tokens)" href="download.php?f=Tatoeba/de-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Greek' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/el-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-English' (60.7k links, 4.7M tokens)" href="download.php?f=Tatoeba/en-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Esperanto' (26.3k links, 3.7M tokens)" href="download.php?f=Tatoeba/eo-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Spanish' (53.0k links, 2.8M tokens)" href="download.php?f=Tatoeba/es-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Finnish' (81 links, 1.2M tokens)" href="download.php?f=Tatoeba/fi-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-French' (18.2k links, 2.4M tokens)" href="download.php?f=Tatoeba/fr-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Western Frisian' (13 links, 1.1M tokens)" href="download.php?f=Tatoeba/fy-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Gaelic' (46 links, 1.1M tokens)" href="download.php?f=Tatoeba/gd-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Galician' (0.3k links, 1.1M tokens)" href="download.php?f=Tatoeba/gl-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hebrew' (0.6k links, 1.7M tokens)" href="download.php?f=Tatoeba/he-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>pt</th>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Croatian' (68 links, 1.1M tokens)" href="download.php?f=Tatoeba/hr-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Hungarian' (0.4k links, 1.4M tokens)" href="download.php?f=Tatoeba/hu-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Interlingua (International Auxiliary Language Association)' (3.7k links, 1.2M tokens)" href="download.php?f=Tatoeba/ia-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Indonesian' (36 links, 1.1M tokens)" href="download.php?f=Tatoeba/id-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Icelandic' (43 links, 1.2M tokens)" href="download.php?f=Tatoeba/is-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Italian' (3.3k links, 2.3M tokens)" href="download.php?f=Tatoeba/it-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Japanese' (1.8k links, 1.5M tokens)" href="download.php?f=Tatoeba/ja-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Korean' (30 links, 1.1M tokens)" href="download.php?f=Tatoeba/ko-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Latin' (3.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/la-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th>pt</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-lzh' (4 links, 1.1M tokens)" href="download.php?f=Tatoeba/lzh-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Maltese' (7 links, 1.1M tokens)" href="download.php?f=Tatoeba/mt-pt.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-BokmÃ¥l, Norwegian' (0.4k links, 1.2M tokens)" href="download.php?f=Tatoeba/nb-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Low German' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/nds-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Dutch' (2.8k links, 1.4M tokens)" href="download.php?f=Tatoeba/nl-pt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-pes' (31 links, 1.2M tokens)" href="download.php?f=Tatoeba/pes-pt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Portuguese-Polish' (0.5k links, 1.5M tokens)" href="download.php?f=Tatoeba/pl-pt.xml.gz">ces</a></td>
<td></td>
<th>pt</th>
<td></td>
<td></td>
<th><a rel="nofollow" title="Portuguese-Portuguese (sample file)" href="Tatoeba/pt-pt_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Portuguese-Portuguese' (1.0k links, 2.2M tokens)" href="download.php?f=Tatoeba/pt-pt.xml.gz">c</a>
</th><td></td><td></td><td><a rel="nofollow" title="Portuguese-Romansh (sample file)" href="Tatoeba/pt-rm_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Portuguese-Russian (sample file)" href="Tatoeba/pt-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-Tagalog (sample file)" href="Tatoeba/pt-tl_sample.html">view</a></td><td></td><td></td><td></td><th>pt</th>
<td></td><td><a rel="nofollow" title="Portuguese-Turkish (sample file)" href="Tatoeba/pt-tr_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-Ukrainian (sample file)" href="Tatoeba/pt-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-Vietnamese (sample file)" href="Tatoeba/pt-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Portuguese-zsm (sample file)" href="Tatoeba/pt-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/pt.raw.tar.gz">pt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/qu.tar.gz">qu</a></th>
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
<th>qu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Quechua-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-qu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Quechua-French' (3 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-qu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>qu</th>
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
<th>qu</th>
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
<th>qu</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>qu</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/qu.raw.tar.gz">qu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/qya.tar.gz">qya</a></th>
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
<th>qya</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'qya-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-qya.xml.gz">ces</a></td>
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
<th>qya</th>
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
<th>qya</th>
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
<th>qya</th>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="qya-Russian (sample file)" href="Tatoeba/qya-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>qya</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/qya.raw.tar.gz">qya</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/rm.tar.gz">rm</a></th>
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
<th>rm</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romansh-German' (13 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-rm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romansh-English' (11 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-rm.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romansh-Spanish' (3 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-rm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romansh-French' (1 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-rm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>rm</th>
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
<th>rm</th>
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
<th>rm</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romansh-Portuguese' (1 links, 1.1M tokens)" href="download.php?f=Tatoeba/pt-rm.xml.gz">ces</a></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>rm</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/rm.raw.tar.gz">rm</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ro.tar.gz">ro</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Romanian-cmn' (26 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Czech' (8 links, 79.2k tokens)" href="download.php?f=Tatoeba/cs-ro.xml.gz">ces</a></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-German' (0.2k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-English' (3.5k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Esperanto' (0.2k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Spanish' (0.2k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Finnish' (4 links, 0.2M tokens)" href="download.php?f=Tatoeba/fi-ro.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Italian' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-ro.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Japanese' (84 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Korean' (10 links, 47.7k tokens)" href="download.php?f=Tatoeba/ko-ro.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ro</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Romanian-Dutch' (0.3k links, 0.3M tokens)" href="download.php?f=Tatoeba/nl-ro.xml.gz">ces</a></td>
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
<th>ro</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Romanian-Russian (sample file)" href="Tatoeba/ro-ru_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>ro</th>
<td></td><td><a rel="nofollow" title="Romanian-Turkish (sample file)" href="Tatoeba/ro-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Romanian-Vietnamese (sample file)" href="Tatoeba/ro-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ro.raw.tar.gz">ro</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ru.tar.gz">ru</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Arabic' (0.3k links, 1.2M tokens)" href="download.php?f=Tatoeba/ar-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Belarusian' (1.8k links, 1.2M tokens)" href="download.php?f=Tatoeba/be-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bulgarian' (0.5k links, 1.3M tokens)" href="download.php?f=Tatoeba/bg-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Bosnian' (29 links, 1.2M tokens)" href="download.php?f=Tatoeba/bs-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-cmn' (3.7k links, 1.3M tokens)" href="download.php?f=Tatoeba/cmn-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Czech' (0.8k links, 1.2M tokens)" href="download.php?f=Tatoeba/cs-ru.xml.gz">ces</a></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Welsh' (31 links, 1.2M tokens)" href="download.php?f=Tatoeba/cy-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-cycl' (1 links, 1.2M tokens)" href="download.php?f=Tatoeba/cycl-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Danish' (0.4k links, 1.3M tokens)" href="download.php?f=Tatoeba/da-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-German' (26.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/de-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Greek' (2.3k links, 1.2M tokens)" href="download.php?f=Tatoeba/el-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-English' (97.6k links, 4.8M tokens)" href="download.php?f=Tatoeba/en-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Esperanto' (25.2k links, 3.7M tokens)" href="download.php?f=Tatoeba/eo-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Spanish' (15.3k links, 2.8M tokens)" href="download.php?f=Tatoeba/es-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Estonian' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/et-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Basque' (10 links, 1.2M tokens)" href="download.php?f=Tatoeba/eu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Finnish' (0.7k links, 1.3M tokens)" href="download.php?f=Tatoeba/fi-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-French' (37.9k links, 2.5M tokens)" href="download.php?f=Tatoeba/fr-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Western Frisian' (24 links, 1.2M tokens)" href="download.php?f=Tatoeba/fy-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Galician' (22 links, 1.2M tokens)" href="download.php?f=Tatoeba/gl-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hebrew' (4.5k links, 1.8M tokens)" href="download.php?f=Tatoeba/he-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Croatian' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/hr-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Hungarian' (2.0k links, 1.4M tokens)" href="download.php?f=Tatoeba/hu-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Armenian' (24 links, 1.2M tokens)" href="download.php?f=Tatoeba/hy-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Interlingua (International Auxiliary Language Association)' (1.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/ia-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Indonesian' (44 links, 1.2M tokens)" href="download.php?f=Tatoeba/id-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Ido' (66 links, 1.2M tokens)" href="download.php?f=Tatoeba/io-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Icelandic' (0.1k links, 1.2M tokens)" href="download.php?f=Tatoeba/is-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Italian' (2.7k links, 2.4M tokens)" href="download.php?f=Tatoeba/it-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Japanese' (12.0k links, 1.6M tokens)" href="download.php?f=Tatoeba/ja-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lojban' (0.7k links, 1.2M tokens)" href="download.php?f=Tatoeba/jbo-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Georgian' (82 links, 1.2M tokens)" href="download.php?f=Tatoeba/ka-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Kazakh' (2.0k links, 1.2M tokens)" href="download.php?f=Tatoeba/kk-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Korean' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/ko-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latin' (0.5k links, 1.2M tokens)" href="download.php?f=Tatoeba/la-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th>ru</th>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Lithuanian' (2.8k links, 1.2M tokens)" href="download.php?f=Tatoeba/lt-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Latvian' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/lv-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-lzh' (0.6k links, 1.2M tokens)" href="download.php?f=Tatoeba/lzh-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-BokmÃ¥l, Norwegian' (1.0k links, 1.2M tokens)" href="download.php?f=Tatoeba/nb-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Low German' (0.4k links, 1.3M tokens)" href="download.php?f=Tatoeba/nds-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Dutch' (3.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/nl-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Occitan (post 1500)' (34 links, 1.2M tokens)" href="download.php?f=Tatoeba/oc-ru.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-orv' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/orv-ru.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Polish' (1.8k links, 1.6M tokens)" href="download.php?f=Tatoeba/pl-ru.xml.gz">ces</a></td>
<td></td>
<th>ru</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Portuguese' (3.1k links, 2.3M tokens)" href="download.php?f=Tatoeba/pt-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-qya' (53 links, 1.2M tokens)" href="download.php?f=Tatoeba/qya-ru.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Russian-Romanian' (0.4k links, 1.2M tokens)" href="download.php?f=Tatoeba/ro-ru.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Russian-Russian (sample file)" href="Tatoeba/ru-ru_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Russian-Russian' (0.9k links, 2.3M tokens)" href="download.php?f=Tatoeba/ru-ru.xml.gz">c</a>
</th><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Russian-Serbian (sample file)" href="Tatoeba/ru-sr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Swedish (sample file)" href="Tatoeba/ru-sv_sample.html">view</a></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Russian-Tagalog (sample file)" href="Tatoeba/ru-tl_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Klingon (sample file)" href="Tatoeba/ru-tlh_sample.html">view</a></td><td><a rel="nofollow" title="Russian-toki (sample file)" href="Tatoeba/ru-toki_sample.html">view</a></td><td></td><th>ru</th>
<td></td><td><a rel="nofollow" title="Russian-Turkish (sample file)" href="Tatoeba/ru-tr_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Tatar (sample file)" href="Tatoeba/ru-tt_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Uighur (sample file)" href="Tatoeba/ru-ug_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Ukrainian (sample file)" href="Tatoeba/ru-uk_sample.html">view</a></td><td></td><td><a rel="nofollow" title="Russian-Uzbek (sample file)" href="Tatoeba/ru-uz_sample.html">view</a></td><td><a rel="nofollow" title="Russian-Vietnamese (sample file)" href="Tatoeba/ru-vi_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Russian-Kalmyk (sample file)" href="Tatoeba/ru-xal_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Russian-yue (sample file)" href="Tatoeba/ru-yue_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ru.raw.tar.gz">ru</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sa.tar.gz">sa</a></th>
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
<th>sa</th>
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
<th>sa</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Sanskrit-Japanese' (8 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-sa.xml.gz">ces</a></td>
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
<th>sa</th>
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
<th>sa</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sa</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sa.raw.tar.gz">sa</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/scn.tar.gz">scn</a></th>
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
<th>scn</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sicilian-German' (4 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-scn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sicilian-English' (3 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-scn.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sicilian-Spanish' (4 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-scn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Sicilian-French' (4 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-scn.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>scn</th>
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
<th>scn</th>
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
<th>scn</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>scn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/scn.raw.tar.gz">scn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sjn.tar.gz">sjn</a></th>
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
<th>sjn</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'sjn-English' (32 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-sjn.xml.gz">ces</a></td>
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
<th>sjn</th>
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
<th>sjn</th>
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
<th>sjn</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sjn</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sjn.raw.tar.gz">sjn</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sl.tar.gz">sl</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-cmn' (26 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Czech' (0.2k links, 52.6k tokens)" href="download.php?f=Tatoeba/cs-sl.xml.gz">ces</a></td>
<th>sl</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-German' (86 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-English' (1.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-sl.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Spanish' (49 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-French' (67 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-sl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Italian' (19 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-sl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Slovenian-Japanese' (60 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-sl.xml.gz">ces</a></td>
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
<th>sl</th>
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
<th>sl</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Slovenian-Vietnamese (sample file)" href="Tatoeba/sl-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sl.raw.tar.gz">sl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sq.tar.gz">sq</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Albanian-cmn' (24 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-sq.xml.gz">ces</a></td>
<td></td>
<th>sq</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-French' (4 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-sq.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sq</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Albanian-Italian' (19 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-sq.xml.gz">ces</a></td>
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
<th>sq</th>
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
<th>sq</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sq</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Albanian-wuu (sample file)" href="Tatoeba/sq-wuu_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sq.raw.tar.gz">sq</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sr.tar.gz">sr</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Belarusian' (12 links, 80.1k tokens)" href="download.php?f=Tatoeba/be-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-cmn' (72 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-sr.xml.gz">ces</a></td>
<td></td>
<th>sr</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-German' (0.9k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-English' (0.7k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-sr.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-French' (0.1k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Italian' (51 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-sr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Japanese' (12 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-sr.xml.gz">ces</a></td>
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
<th>sr</th>
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
<th>sr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Serbian-Russian' (0.7k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-sr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sr</th>
<td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Serbian-Ukrainian (sample file)" href="Tatoeba/sr-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sr.raw.tar.gz">sr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/sv.tar.gz">sv</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Swedish-cmn' (0.4k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-sv.xml.gz">ces</a></td>
<td></td>
<th>sv</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Danish' (1.1k links, 0.2M tokens)" href="download.php?f=Tatoeba/da-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-German' (1.9k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-English' (9.8k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Esperanto' (0.9k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Spanish' (0.4k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Finnish' (5.2k links, 0.2M tokens)" href="download.php?f=Tatoeba/fi-sv.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-French' (0.7k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Italian' (0.4k links, 1.4M tokens)" href="download.php?f=Tatoeba/it-sv.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Japanese' (0.1k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-sv.xml.gz">ces</a></td>
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
<th>sv</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Swedish-BokmÃ¥l, Norwegian' (0.2k links, 0.2M tokens)" href="download.php?f=Tatoeba/nb-sv.xml.gz">ces</a></td>
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
<th>sv</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Swedish-Russian' (0.3k links, 1.3M tokens)" href="download.php?f=Tatoeba/ru-sv.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>sv</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/sv.raw.tar.gz">sv</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/swh.tar.gz">swh</a></th>
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
<th>swh</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'swh-German' (38 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-swh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'swh-English' (0.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-swh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'swh-Esperanto' (41 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-swh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'swh-French' (18 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-swh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>swh</th>
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
<th>swh</th>
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
<td><a rel="nofollow" title="sentence alignments for 'swh-Dutch' (2 links, 0.3M tokens)" href="download.php?f=Tatoeba/nl-swh.xml.gz">ces</a></td>
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
<th>swh</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><th>swh</th>
<td></td><td><a rel="nofollow" title="swh-Turkish (sample file)" href="Tatoeba/swh-tr_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/swh.raw.tar.gz">swh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/te.tar.gz">te</a></th>
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
<th>te</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Telugu-English' (47 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-te.xml.gz">ces</a></td>
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
<th>te</th>
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
<th>te</th>
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
<th>te</th>
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
<td></td><td></td><td></td><td></td><td></td><td></td><th>te</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/te.raw.tar.gz">te</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tg.tar.gz">tg</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Tajik-cmn' (1 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-tg.xml.gz">ces</a></td>
<td></td>
<th>tg</th>
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
<th>tg</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Tajik-Japanese' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-tg.xml.gz">ces</a></td>
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
<th>tg</th>
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
<th>tg</th>
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
<td></td><td></td><td></td><td></td><td></td><th>tg</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tg.raw.tar.gz">tg</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/th.tar.gz">th</a></th>
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
<th>th</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-German' (54 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-th.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-Esperanto' (47 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Thai-French' (44 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-th.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>th</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Thai-Japanese' (23 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-th.xml.gz">ces</a></td>
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
<th>th</th>
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
<th>th</th>
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
<td></td><td></td><td></td><td></td><th>th</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/th.raw.tar.gz">th</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tl.tar.gz">tl</a></th>
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
<th>tl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-English' (4.9k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Esperanto' (1.1k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Spanish' (0.4k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-French' (0.6k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Hebrew' (8 links, 0.7M tokens)" href="download.php?f=Tatoeba/he-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>tl</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Italian' (69 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-tl.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Japanese' (66 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-tl.xml.gz">ces</a></td>
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
<th>tl</th>
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
<th>tl</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Portuguese' (1.7k links, 1.2M tokens)" href="download.php?f=Tatoeba/pt-tl.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tagalog-Russian' (15 links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-tl.xml.gz">ces</a></td>
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
<td></td><td></td><td></td><th>tl</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tl.raw.tar.gz">tl</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tlh.tar.gz">tlh</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Klingon-cmn' (0.4k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-tlh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Czech' (2 links, 0.1M tokens)" href="download.php?f=Tatoeba/cs-tlh.xml.gz">ces</a></td>
<th>tlh</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-German' (1.8k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-tlh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-English' (6.5k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-tlh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Esperanto' (1.3k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-tlh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Spanish' (0.2k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-tlh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-French' (0.4k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-tlh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tlh</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Italian' (68 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-tlh.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Japanese' (0.5k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-tlh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Korean' (2 links, 77.3k tokens)" href="download.php?f=Tatoeba/ko-tlh.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tlh</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Dutch' (0.1k links, 0.4M tokens)" href="download.php?f=Tatoeba/nl-tlh.xml.gz">ces</a></td>
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
<th>tlh</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Klingon-Russian' (0.1k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-tlh.xml.gz">ces</a></td>
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
<td></td><td></td><th>tlh</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tlh.raw.tar.gz">tlh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/toki.tar.gz">toki</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'toki-cmn' (8 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-toki.xml.gz">ces</a></td>
<td></td>
<th>toki</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-German' (0.6k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-toki.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-English' (1.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-toki.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-Esperanto' (0.3k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-toki.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-toki.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-toki.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>toki</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-Italian' (23 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-toki.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-Japanese' (53 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-toki.xml.gz">ces</a></td>
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
<th>toki</th>
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
<td><a rel="nofollow" title="sentence alignments for 'toki-Dutch' (28 links, 0.3M tokens)" href="download.php?f=Tatoeba/nl-toki.xml.gz">ces</a></td>
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
<th>toki</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'toki-Russian' (0.5k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-toki.xml.gz">ces</a></td>
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
<td></td><th>toki</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/toki.raw.tar.gz">toki</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tpi.tar.gz">tpi</a></th>
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
<th>tpi</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tok Pisin-German' (26 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-tpi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tok Pisin-English' (36 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-tpi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tok Pisin-Esperanto' (11 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-tpi.xml.gz">ces</a></td>
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
<th>tpi</th>
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
<th>tpi</th>
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
<th>tpi</th>
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
<th></th>
<th>tpi</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tpi.raw.tar.gz">tpi</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tpw.tar.gz">tpw</a></th>
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
<th>tpw</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tpw-English' (28 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-tpw.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tpw-Spanish' (7 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-tpw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'tpw-French' (6 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-tpw.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tpw</th>
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
<th>tpw</th>
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
<th>tpw</th>
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
<th>tpw</th>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tpw.raw.tar.gz">tpw</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tr.tar.gz">tr</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Afrikaans' (36 links, 1.0M tokens)" href="download.php?f=Tatoeba/af-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Arabic' (0.4k links, 1.1M tokens)" href="download.php?f=Tatoeba/ar-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Belarusian' (0.1k links, 1.0M tokens)" href="download.php?f=Tatoeba/be-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Breton' (94 links, 1.0M tokens)" href="download.php?f=Tatoeba/br-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-cmn' (0.4k links, 1.1M tokens)" href="download.php?f=Tatoeba/cmn-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Czech' (22 links, 1.0M tokens)" href="download.php?f=Tatoeba/cs-tr.xml.gz">ces</a></td>
<th>tr</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-German' (3.6k links, 3.4M tokens)" href="download.php?f=Tatoeba/de-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Greek' (0.2k links, 1.1M tokens)" href="download.php?f=Tatoeba/el-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-English' (0.2M links, 4.6M tokens)" href="download.php?f=Tatoeba/en-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Esperanto' (4.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/eo-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Spanish' (17.7k links, 2.7M tokens)" href="download.php?f=Tatoeba/es-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Finnish' (1.6k links, 1.1M tokens)" href="download.php?f=Tatoeba/fi-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Faroese' (2 links, 1.0M tokens)" href="download.php?f=Tatoeba/fo-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-French' (1.9k links, 2.3M tokens)" href="download.php?f=Tatoeba/fr-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Western Frisian' (25 links, 1.0M tokens)" href="download.php?f=Tatoeba/fy-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Hebrew' (0.9k links, 1.6M tokens)" href="download.php?f=Tatoeba/he-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>tr</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Indonesian' (26 links, 1.0M tokens)" href="download.php?f=Tatoeba/id-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Italian' (0.7k links, 2.2M tokens)" href="download.php?f=Tatoeba/it-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Japanese' (0.5k links, 1.4M tokens)" href="download.php?f=Tatoeba/ja-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Korean' (0.1k links, 1.0M tokens)" href="download.php?f=Tatoeba/ko-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Dutch' (1.0k links, 1.3M tokens)" href="download.php?f=Tatoeba/nl-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Polish' (0.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/pl-tr.xml.gz">ces</a></td>
<td></td>
<th>tr</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Portuguese' (0.8k links, 2.1M tokens)" href="download.php?f=Tatoeba/pt-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Romanian' (0.2k links, 1.0M tokens)" href="download.php?f=Tatoeba/ro-tr.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-Russian' (1.1k links, 2.2M tokens)" href="download.php?f=Tatoeba/ru-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Turkish-swh' (12 links, 1.0M tokens)" href="download.php?f=Tatoeba/swh-tr.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tr</th>
<td></td>
<th></th>
<td></td><td></td><td><a rel="nofollow" title="Turkish-Ukrainian (sample file)" href="Tatoeba/tr-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Turkish-Vietnamese (sample file)" href="Tatoeba/tr-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tr.raw.tar.gz">tr</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/tt.tar.gz">tt</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Tatar-cmn' (57 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-tt.xml.gz">ces</a></td>
<td></td>
<th>tt</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-German' (2.4k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-tt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-English' (0.4k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-tt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-Esperanto' (86 links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-tt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-Spanish' (37 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-tt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-French' (83 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-tt.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>tt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-Italian' (36 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-tt.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-Japanese' (67 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-tt.xml.gz">ces</a></td>
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
<th>tt</th>
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
<th>tt</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Tatar-Russian' (0.8k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-tt.xml.gz">ces</a></td>
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
<th>tt</th>
<td></td>
<td></td>
<th></th>
<td></td><td><a rel="nofollow" title="Tatar-Ukrainian (sample file)" href="Tatoeba/tt-uk_sample.html">view</a></td><td></td><td></td><td><a rel="nofollow" title="Tatar-Vietnamese (sample file)" href="Tatoeba/tt-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/tt.raw.tar.gz">tt</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ug.tar.gz">ug</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Arabic' (8 links, 0.1M tokens)" href="download.php?f=Tatoeba/ar-ug.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Uighur-cmn' (1.9k links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-ug.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Czech' (4 links, 80.8k tokens)" href="download.php?f=Tatoeba/cs-ug.xml.gz">ces</a></td>
<th>ug</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-German' (0.2k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-ug.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-English' (3.7k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-ug.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Spanish' (37 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-ug.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-French' (0.7k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ug.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ug</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Italian' (81 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-ug.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Japanese' (57 links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-ug.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Korean' (9 links, 49.2k tokens)" href="download.php?f=Tatoeba/ko-ug.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>ug</th>
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
<th>ug</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uighur-Russian' (0.5k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-ug.xml.gz">ces</a></td>
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
<th>ug</th>
<td></td>
<td></td>
<td></td>
<th></th>
<td><a rel="nofollow" title="Uighur-Ukrainian (sample file)" href="Tatoeba/ug-uk_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ug.raw.tar.gz">ug</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/uk.tar.gz">uk</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Arabic' (56 links, 0.3M tokens)" href="download.php?f=Tatoeba/ar-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Belarusian' (1.1k links, 0.2M tokens)" href="download.php?f=Tatoeba/be-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Bulgarian' (75 links, 0.3M tokens)" href="download.php?f=Tatoeba/bg-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-cmn' (0.6k links, 0.3M tokens)" href="download.php?f=Tatoeba/cmn-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Czech' (79 links, 0.2M tokens)" href="download.php?f=Tatoeba/cs-uk.xml.gz">ces</a></td>
<th>uk</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-German' (1.7k links, 2.6M tokens)" href="download.php?f=Tatoeba/de-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Greek' (15 links, 0.2M tokens)" href="download.php?f=Tatoeba/el-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-English' (17.4k links, 3.8M tokens)" href="download.php?f=Tatoeba/en-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Esperanto' (0.9k links, 2.7M tokens)" href="download.php?f=Tatoeba/eo-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Spanish' (2.4k links, 1.8M tokens)" href="download.php?f=Tatoeba/es-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-French' (3.4k links, 1.5M tokens)" href="download.php?f=Tatoeba/fr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Western Frisian' (26 links, 0.2M tokens)" href="download.php?f=Tatoeba/fy-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hebrew' (0.4k links, 0.8M tokens)" href="download.php?f=Tatoeba/he-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>uk</th>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Croatian' (0.2k links, 0.2M tokens)" href="download.php?f=Tatoeba/hr-uk.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Hungarian' (94 links, 0.4M tokens)" href="download.php?f=Tatoeba/hu-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Indonesian' (6 links, 0.2M tokens)" href="download.php?f=Tatoeba/id-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Italian' (0.5k links, 1.4M tokens)" href="download.php?f=Tatoeba/it-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Japanese' (0.3k links, 0.6M tokens)" href="download.php?f=Tatoeba/ja-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Korean' (16 links, 0.2M tokens)" href="download.php?f=Tatoeba/ko-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uk</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Low German' (20 links, 0.3M tokens)" href="download.php?f=Tatoeba/nds-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Dutch' (1.3k links, 0.4M tokens)" href="download.php?f=Tatoeba/nl-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-orv' (0.9k links, 0.2M tokens)" href="download.php?f=Tatoeba/orv-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Polish' (1.2k links, 0.6M tokens)" href="download.php?f=Tatoeba/pl-uk.xml.gz">ces</a></td>
<td></td>
<th>uk</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Portuguese' (1.4k links, 1.3M tokens)" href="download.php?f=Tatoeba/pt-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Russian' (6.5k links, 1.3M tokens)" href="download.php?f=Tatoeba/ru-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Serbian' (33 links, 0.2M tokens)" href="download.php?f=Tatoeba/sr-uk.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uk</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Turkish' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/tr-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Tatar' (94 links, 0.2M tokens)" href="download.php?f=Tatoeba/tt-uk.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Ukrainian-Uighur' (61 links, 0.2M tokens)" href="download.php?f=Tatoeba/ug-uk.xml.gz">ces</a></td>
<th><a rel="nofollow" title="Ukrainian-Ukrainian (sample file)" href="Tatoeba/uk-uk_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Ukrainian-Ukrainian' (0.1k links, 0.3M tokens)" href="download.php?f=Tatoeba/uk-uk.xml.gz">c</a>
</th><td></td><td></td><td><a rel="nofollow" title="Ukrainian-Vietnamese (sample file)" href="Tatoeba/uk-vi_sample.html">view</a></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Ukrainian-yue (sample file)" href="Tatoeba/uk-yue_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/uk.raw.tar.gz">uk</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/ur.tar.gz">ur</a></th>
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
<th>ur</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-English' (1.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-ur.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Urdu-French' (6 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-ur.xml.gz">ces</a></td>
<td></td>
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
<td><a rel="nofollow" title="sentence alignments for 'Urdu-Japanese' (7 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-ur.xml.gz">ces</a></td>
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
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/ur.raw.tar.gz">ur</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/uz.tar.gz">uz</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-cmn' (38 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-uz.xml.gz">ces</a></td>
<td></td>
<th>uz</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-German' (21 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-uz.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-uz.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-French' (44 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-uz.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>uz</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Japanese' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-uz.xml.gz">ces</a></td>
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
<th>uz</th>
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
<th>uz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Uzbek-Russian' (65 links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-uz.xml.gz">ces</a></td>
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
<th>uz</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/uz.raw.tar.gz">uz</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/vi.tar.gz">vi</a></th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Afrikaans' (1 links, 75.3k tokens)" href="download.php?f=Tatoeba/af-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Belarusian' (3 links, 95.7k tokens)" href="download.php?f=Tatoeba/be-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Bengali' (1 links, 63.3k tokens)" href="download.php?f=Tatoeba/bn-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-cmn' (86 links, 0.2M tokens)" href="download.php?f=Tatoeba/cmn-vi.xml.gz">ces</a></td>
<td></td>
<th>vi</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-German' (0.3k links, 2.5M tokens)" href="download.php?f=Tatoeba/de-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-English' (2.2k links, 3.7M tokens)" href="download.php?f=Tatoeba/en-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Esperanto' (1.4k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Spanish' (0.3k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Finnish' (1 links, 0.2M tokens)" href="download.php?f=Tatoeba/fi-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-French' (1.2k links, 1.4M tokens)" href="download.php?f=Tatoeba/fr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Western Frisian' (1 links, 62.6k tokens)" href="download.php?f=Tatoeba/fy-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Hungarian' (15 links, 0.3M tokens)" href="download.php?f=Tatoeba/hu-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Indonesian' (1 links, 80.3k tokens)" href="download.php?f=Tatoeba/id-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Italian' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/it-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Japanese' (0.8k links, 0.5M tokens)" href="download.php?f=Tatoeba/ja-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Korean' (29 links, 70.7k tokens)" href="download.php?f=Tatoeba/ko-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vi</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Dutch' (33 links, 0.3M tokens)" href="download.php?f=Tatoeba/nl-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Polish' (16 links, 0.5M tokens)" href="download.php?f=Tatoeba/pl-vi.xml.gz">ces</a></td>
<td></td>
<th>vi</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Portuguese' (11 links, 1.2M tokens)" href="download.php?f=Tatoeba/pt-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Romanian' (1 links, 0.1M tokens)" href="download.php?f=Tatoeba/ro-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Russian' (0.2k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Slovenian' (8 links, 73.8k tokens)" href="download.php?f=Tatoeba/sl-vi.xml.gz">ces</a></td>
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
<th>vi</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Turkish' (28 links, 1.1M tokens)" href="download.php?f=Tatoeba/tr-vi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Tatar' (67 links, 95.9k tokens)" href="download.php?f=Tatoeba/tt-vi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Vietnamese-Ukrainian' (14 links, 0.2M tokens)" href="download.php?f=Tatoeba/uk-vi.xml.gz">ces</a></td>
<td></td>
<td></td>
<th><a rel="nofollow" title="Vietnamese-Vietnamese (sample file)" href="Tatoeba/vi-vi_sample.html">v\</a><a rel="nofollow" title="sentence alignments for 'Vietnamese-Vietnamese' (33 links, 0.1M tokens)" href="download.php?f=Tatoeba/vi-vi.xml.gz">c</a>
</th><td></td><td></td><td></td><td></td><td></td><td></td><td><a rel="nofollow" title="Vietnamese-zsm (sample file)" href="Tatoeba/vi-zsm_sample.html">view</a></td><th><a rel="nofollow" href="download.php?f=Tatoeba/vi.raw.tar.gz">vi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/vo.tar.gz">vo</a></th>
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
<th>vo</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'VolapÃ¼k-German' (0.1k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-vo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'VolapÃ¼k-English' (0.4k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-vo.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'VolapÃ¼k-Esperanto' (0.4k links, 2.6M tokens)" href="download.php?f=Tatoeba/eo-vo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'VolapÃ¼k-French' (19 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-vo.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>vo</th>
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
<td><a rel="nofollow" title="sentence alignments for 'VolapÃ¼k-Japanese' (2 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-vo.xml.gz">ces</a></td>
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
<th>vo</th>
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
<th>vo</th>
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
<th>vo</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><td></td><td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/vo.raw.tar.gz">vo</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/wuu.tar.gz">wuu</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'wuu-cmn' (3.2k links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-wuu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Czech' (2 links, 51.7k tokens)" href="download.php?f=Tatoeba/cs-wuu.xml.gz">ces</a></td>
<th>wuu</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-German' (23 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-wuu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-English' (1.1k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-wuu.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Spanish' (0.1k links, 1.7M tokens)" href="download.php?f=Tatoeba/es-wuu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-French' (1.3k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-wuu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Hindi' (30 links, 65.1k tokens)" href="download.php?f=Tatoeba/hi-wuu.xml.gz">ces</a></td>
<td></td>
<th>wuu</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Italian' (38 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-wuu.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Japanese' (13 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-wuu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Latin' (2 links, 81.3k tokens)" href="download.php?f=Tatoeba/la-wuu.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th>wuu</th>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'wuu-Latvian' (4 links, 18.8k tokens)" href="download.php?f=Tatoeba/lv-wuu.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'wuu-Polish' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/pl-wuu.xml.gz">ces</a></td>
<td></td>
<th>wuu</th>
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
<td><a rel="nofollow" title="sentence alignments for 'wuu-Albanian' (3 links, 14.0k tokens)" href="download.php?f=Tatoeba/sq-wuu.xml.gz">ces</a></td>
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
<th>wuu</th>
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
<td></td><td></td><td></td><td><a rel="nofollow" title="wuu-yue (sample file)" href="Tatoeba/wuu-yue_sample.html">view</a></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/wuu.raw.tar.gz">wuu</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/xal.tar.gz">xal</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Kalmyk-cmn' (28 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-xal.xml.gz">ces</a></td>
<td></td>
<th>xal</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kalmyk-English' (0.3k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-xal.xml.gz">ces</a></td>
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
<th>xal</th>
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
<td><a rel="nofollow" title="sentence alignments for 'Kalmyk-Japanese' (4 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-xal.xml.gz">ces</a></td>
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
<th>xal</th>
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
<th>xal</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Kalmyk-Russian' (0.1k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-xal.xml.gz">ces</a></td>
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
<th>xal</th>
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
<td></td><td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/xal.raw.tar.gz">xal</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/xh.tar.gz">xh</a></th>
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
<th>xh</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Xhosa-English' (99 links, 3.6M tokens)" href="download.php?f=Tatoeba/en-xh.xml.gz">ces</a></td>
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
<th>xh</th>
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
<th>xh</th>
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
<th>xh</th>
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
<th>xh</th>
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
<td></td><td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/xh.raw.tar.gz">xh</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/yi.tar.gz">yi</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-cmn' (4 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-yi.xml.gz">ces</a></td>
<td></td>
<th>yi</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-German' (68 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-yi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-English' (0.2k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-yi.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-Spanish' (11 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-yi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-French' (16 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-yi.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-Hebrew' (0.2k links, 0.6M tokens)" href="download.php?f=Tatoeba/he-yi.xml.gz">ces</a></td>
<td></td>
<td></td>
<th>yi</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-Italian' (11 links, 1.3M tokens)" href="download.php?f=Tatoeba/it-yi.xml.gz">ces</a></td>
<td><a rel="nofollow" title="sentence alignments for 'Yiddish-Japanese' (7 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-yi.xml.gz">ces</a></td>
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
<th>yi</th>
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
<th>yi</th>
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
<th>yi</th>
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
<td></td><td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/yi.raw.tar.gz">yi</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/yue.tar.gz">yue</a></th>
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
<td><a rel="nofollow" title="sentence alignments for 'yue-cmn' (0.5k links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-yue.xml.gz">ces</a></td>
<td></td>
<th>yue</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-German' (0.1k links, 2.4M tokens)" href="download.php?f=Tatoeba/de-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-English' (2.6k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-yue.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-Spanish' (36 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-French' (0.2k links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yue</th>
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
<td><a rel="nofollow" title="sentence alignments for 'yue-Japanese' (0.2k links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-Korean' (0.1k links, 17.4k tokens)" href="download.php?f=Tatoeba/ko-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>yue</th>
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
<th>yue</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-Russian' (0.1k links, 1.2M tokens)" href="download.php?f=Tatoeba/ru-yue.xml.gz">ces</a></td>
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
<th>yue</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-Ukrainian' (0.2k links, 0.2M tokens)" href="download.php?f=Tatoeba/uk-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'yue-wuu' (61 links, 19.6k tokens)" href="download.php?f=Tatoeba/wuu-yue.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<th></th>
<td></td><th><a rel="nofollow" href="download.php?f=Tatoeba/yue.raw.tar.gz">yue</a></th></tr>
<tr><th><a rel="nofollow" href="download.php?f=Tatoeba/zsm.tar.gz">zsm</a></th>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Arabic' (94 links, 97.5k tokens)" href="download.php?f=Tatoeba/ar-zsm.xml.gz">ces</a></td>
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
<td><a rel="nofollow" title="sentence alignments for 'zsm-cmn' (31 links, 0.1M tokens)" href="download.php?f=Tatoeba/cmn-zsm.xml.gz">ces</a></td>
<td></td>
<th>zsm</th>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-German' (23 links, 2.4M tokens)" href="download.php?f=Tatoeba/de-zsm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-English' (0.6k links, 3.6M tokens)" href="download.php?f=Tatoeba/en-zsm.xml.gz">ces</a></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Spanish' (23 links, 1.7M tokens)" href="download.php?f=Tatoeba/es-zsm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-French' (51 links, 1.3M tokens)" href="download.php?f=Tatoeba/fr-zsm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th>zsm</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Indonesian' (23 links, 26.0k tokens)" href="download.php?f=Tatoeba/id-zsm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Japanese' (74 links, 0.4M tokens)" href="download.php?f=Tatoeba/ja-zsm.xml.gz">ces</a></td>
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
<th>zsm</th>
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
<th>zsm</th>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Portuguese' (24 links, 1.1M tokens)" href="download.php?f=Tatoeba/pt-zsm.xml.gz">ces</a></td>
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
<th>zsm</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a rel="nofollow" title="sentence alignments for 'zsm-Vietnamese' (2 links, 69.1k tokens)" href="download.php?f=Tatoeba/vi-zsm.xml.gz">ces</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<th></th>
<th><a rel="nofollow" href="download.php?f=Tatoeba/zsm.raw.tar.gz">zsm</a></th></tr>
<tr><th></th>
<th>acm</th>
<th>af</th>
<th>ain</th>
<th>ang</th>
<th>ar</th>
<th>arq</th>
<th>arz</th>
<th>ast</th>
<th>avk</th>
<th>az</th>
<th>be</th>
<th>ber</th>
<th>bg</th>
<th>bn</th>
<th>bod</th>
<th>br</th>
<th>bs</th>
<th>ca</th>
<th>ch</th>
<th>ckt</th>
<th>cmn</th>
<th>cs</th>
<th></th>
<th>cy</th>
<th>cycl</th>
<th>da</th>
<th>de</th>
<th>dsb</th>
<th>ee</th>
<th>el</th>
<th>en</th>
<th>eo</th>
<th>es</th>
<th>et</th>
<th>eu</th>
<th>fi</th>
<th>fo</th>
<th>fr</th>
<th>fy</th>
<th>ga</th>
<th>gd</th>
<th>gl</th>
<th>gn</th>
<th>he</th>
<th>hi</th>
<th>hil</th>
<th></th>
<th>hr</th>
<th>hsb</th>
<th>hu</th>
<th>hy</th>
<th>ia</th>
<th>id</th>
<th>ie</th>
<th>io</th>
<th>is</th>
<th>it</th>
<th>ja</th>
<th>jbo</th>
<th>ka</th>
<th>kk</th>
<th>km</th>
<th>ko</th>
<th>ksh</th>
<th>ku</th>
<th>kw</th>
<th>la</th>
<th>lad</th>
<th>lld</th>
<th>lo</th>
<th></th>
<th>lt</th>
<th>lv</th>
<th>lzh</th>
<th>mg</th>
<th>mi</th>
<th>ml</th>
<th>mn</th>
<th>mr</th>
<th>mt</th>
<th>nan</th>
<th>nb</th>
<th>nds</th>
<th>nl</th>
<th>non</th>
<th>nov</th>
<th>npi</th>
<th>oc</th>
<th>orv</th>
<th>os</th>
<th>pcd</th>
<th>pes</th>
<th>pl</th>
<th>pms</th>
<th></th>
<th>pnb</th>
<th>prg</th>
<th>pt</th>
<th>qu</th>
<th>qya</th>
<th>rm</th>
<th>ro</th>
<th>ru</th>
<th>sa</th>
<th>scn</th>
<th>sjn</th>
<th>sl</th>
<th>sq</th>
<th>sr</th>
<th>sv</th>
<th>swh</th>
<th>te</th>
<th>tg</th>
<th>th</th>
<th>tl</th>
<th>tlh</th>
<th>toki</th>
<th>tpi</th>
<th></th>
<th>tpw</th>
<th>tr</th>
<th>tt</th>
<th>ug</th>
<th>uk</th>
<th>ur</th>
<th>uz</th>
<th>vi</th>
<th>vo</th>
<th>wuu</th>
<th>xal</th>
<th>xh</th>
<th>yi</th>
<th>yue</th>
<th>zsm</th>
<th></th></tr>
</table>
</div><p><h3>Statistics and TMX/Moses Downloads</h3>Number of files, tokens, and sentences per language (including non-parallel ones if they exist)<br>Number of sentence alignment units per language pair<p>Upper-right triangle: download translation memory files (TMX)<br>Bottom-left triangle: download plain text files (MOSES/GIZA++)<br>Language ID's, first row: monolingual plain text files (tokenized)<br>Language ID's, first column: monolingual plain text files (untokenized)<div class="counts"><table><caption></caption> <tr><th>language</th> <th>files</th> <th>tokens</th> <th>sentences</th><th><a rel="nofollow" title='monolingual tokenized acm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.acm.gz">acm</a>
</th><th><a rel="nofollow" title='monolingual tokenized af plain text' href="download.php?f=Tatoeba/mono/Tatoeba.af.gz">af</a>
</th><th><a rel="nofollow" title='monolingual tokenized ain plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ain.gz">ain</a>
</th><th><a rel="nofollow" title='monolingual tokenized ang plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ang.gz">ang</a>
</th><th><a rel="nofollow" title='monolingual tokenized ar plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ar.gz">ar</a>
</th><th><a rel="nofollow" title='monolingual tokenized arq plain text' href="download.php?f=Tatoeba/mono/Tatoeba.arq.gz">arq</a>
</th><th><a rel="nofollow" title='monolingual tokenized arz plain text' href="download.php?f=Tatoeba/mono/Tatoeba.arz.gz">arz</a>
</th><th><a rel="nofollow" title='monolingual tokenized ast plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ast.gz">ast</a>
</th><th><a rel="nofollow" title='monolingual tokenized avk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.avk.gz">avk</a>
</th><th><a rel="nofollow" title='monolingual tokenized az plain text' href="download.php?f=Tatoeba/mono/Tatoeba.az.gz">az</a>
</th><th><a rel="nofollow" title='monolingual tokenized be plain text' href="download.php?f=Tatoeba/mono/Tatoeba.be.gz">be</a>
</th><th><a rel="nofollow" title='monolingual tokenized ber plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ber.gz">ber</a>
</th><th><a rel="nofollow" title='monolingual tokenized bg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.bg.gz">bg</a>
</th><th><a rel="nofollow" title='monolingual tokenized bn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.bn.gz">bn</a>
</th><th><a rel="nofollow" title='monolingual tokenized bod plain text' href="download.php?f=Tatoeba/mono/Tatoeba.bod.gz">bod</a>
</th><th><a rel="nofollow" title='monolingual tokenized br plain text' href="download.php?f=Tatoeba/mono/Tatoeba.br.gz">br</a>
</th><th><a rel="nofollow" title='monolingual tokenized bs plain text' href="download.php?f=Tatoeba/mono/Tatoeba.bs.gz">bs</a>
</th><th><a rel="nofollow" title='monolingual tokenized ca plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ca.gz">ca</a>
</th><th><a rel="nofollow" title='monolingual tokenized ch plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ch.gz">ch</a>
</th><th><a rel="nofollow" title='monolingual tokenized ckt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ckt.gz">ckt</a>
</th><th><a rel="nofollow" title='monolingual tokenized cmn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.cmn.gz">cmn</a>
</th><th><a rel="nofollow" title='monolingual tokenized cs plain text' href="download.php?f=Tatoeba/mono/Tatoeba.cs.gz">cs</a>
</th><th><a rel="nofollow" title='monolingual tokenized cy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.cy.gz">cy</a>
</th><th><a rel="nofollow" title='monolingual tokenized cycl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.cycl.gz">cycl</a>
</th><th><a rel="nofollow" title='monolingual tokenized da plain text' href="download.php?f=Tatoeba/mono/Tatoeba.da.gz">da</a>
</th><th><a rel="nofollow" title='monolingual tokenized de plain text' href="download.php?f=Tatoeba/mono/Tatoeba.de.gz">de</a>
</th><th><a rel="nofollow" title='monolingual tokenized dsb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.dsb.gz">dsb</a>
</th><th><a rel="nofollow" title='monolingual tokenized ee plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ee.gz">ee</a>
</th><th><a rel="nofollow" title='monolingual tokenized el plain text' href="download.php?f=Tatoeba/mono/Tatoeba.el.gz">el</a>
</th><th><a rel="nofollow" title='monolingual tokenized en plain text' href="download.php?f=Tatoeba/mono/Tatoeba.en.gz">en</a>
</th><th><a rel="nofollow" title='monolingual tokenized eo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.eo.gz">eo</a>
</th><th><a rel="nofollow" title='monolingual tokenized es plain text' href="download.php?f=Tatoeba/mono/Tatoeba.es.gz">es</a>
</th><th><a rel="nofollow" title='monolingual tokenized et plain text' href="download.php?f=Tatoeba/mono/Tatoeba.et.gz">et</a>
</th><th><a rel="nofollow" title='monolingual tokenized eu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.eu.gz">eu</a>
</th><th><a rel="nofollow" title='monolingual tokenized fi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.fi.gz">fi</a>
</th><th><a rel="nofollow" title='monolingual tokenized fo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.fo.gz">fo</a>
</th><th><a rel="nofollow" title='monolingual tokenized fr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.fr.gz">fr</a>
</th><th><a rel="nofollow" title='monolingual tokenized fy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.fy.gz">fy</a>
</th><th><a rel="nofollow" title='monolingual tokenized ga plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ga.gz">ga</a>
</th><th><a rel="nofollow" title='monolingual tokenized gd plain text' href="download.php?f=Tatoeba/mono/Tatoeba.gd.gz">gd</a>
</th><th><a rel="nofollow" title='monolingual tokenized gl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.gl.gz">gl</a>
</th><th><a rel="nofollow" title='monolingual tokenized gn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.gn.gz">gn</a>
</th><th><a rel="nofollow" title='monolingual tokenized he plain text' href="download.php?f=Tatoeba/mono/Tatoeba.he.gz">he</a>
</th><th><a rel="nofollow" title='monolingual tokenized hi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hi.gz">hi</a>
</th><th><a rel="nofollow" title='monolingual tokenized hil plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hil.gz">hil</a>
</th><th><a rel="nofollow" title='monolingual tokenized hr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hr.gz">hr</a>
</th><th><a rel="nofollow" title='monolingual tokenized hsb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hsb.gz">hsb</a>
</th><th><a rel="nofollow" title='monolingual tokenized hu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hu.gz">hu</a>
</th><th><a rel="nofollow" title='monolingual tokenized hy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.hy.gz">hy</a>
</th><th><a rel="nofollow" title='monolingual tokenized ia plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ia.gz">ia</a>
</th><th><a rel="nofollow" title='monolingual tokenized id plain text' href="download.php?f=Tatoeba/mono/Tatoeba.id.gz">id</a>
</th><th><a rel="nofollow" title='monolingual tokenized ie plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ie.gz">ie</a>
</th><th><a rel="nofollow" title='monolingual tokenized io plain text' href="download.php?f=Tatoeba/mono/Tatoeba.io.gz">io</a>
</th><th><a rel="nofollow" title='monolingual tokenized is plain text' href="download.php?f=Tatoeba/mono/Tatoeba.is.gz">is</a>
</th><th><a rel="nofollow" title='monolingual tokenized it plain text' href="download.php?f=Tatoeba/mono/Tatoeba.it.gz">it</a>
</th><th><a rel="nofollow" title='monolingual tokenized ja plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ja.gz">ja</a>
</th><th><a rel="nofollow" title='monolingual tokenized jbo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.jbo.gz">jbo</a>
</th><th><a rel="nofollow" title='monolingual tokenized ka plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ka.gz">ka</a>
</th><th><a rel="nofollow" title='monolingual tokenized kk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.kk.gz">kk</a>
</th><th><a rel="nofollow" title='monolingual tokenized km plain text' href="download.php?f=Tatoeba/mono/Tatoeba.km.gz">km</a>
</th><th><a rel="nofollow" title='monolingual tokenized ko plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ko.gz">ko</a>
</th><th><a rel="nofollow" title='monolingual tokenized ksh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ksh.gz">ksh</a>
</th><th><a rel="nofollow" title='monolingual tokenized ku plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ku.gz">ku</a>
</th><th><a rel="nofollow" title='monolingual tokenized kw plain text' href="download.php?f=Tatoeba/mono/Tatoeba.kw.gz">kw</a>
</th><th><a rel="nofollow" title='monolingual tokenized la plain text' href="download.php?f=Tatoeba/mono/Tatoeba.la.gz">la</a>
</th><th><a rel="nofollow" title='monolingual tokenized lad plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lad.gz">lad</a>
</th><th><a rel="nofollow" title='monolingual tokenized lld plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lld.gz">lld</a>
</th><th><a rel="nofollow" title='monolingual tokenized lo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lo.gz">lo</a>
</th><th><a rel="nofollow" title='monolingual tokenized lt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lt.gz">lt</a>
</th><th><a rel="nofollow" title='monolingual tokenized lv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lv.gz">lv</a>
</th><th><a rel="nofollow" title='monolingual tokenized lzh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.lzh.gz">lzh</a>
</th><th><a rel="nofollow" title='monolingual tokenized mg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.mg.gz">mg</a>
</th><th><a rel="nofollow" title='monolingual tokenized mi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.mi.gz">mi</a>
</th><th><a rel="nofollow" title='monolingual tokenized ml plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ml.gz">ml</a>
</th><th><a rel="nofollow" title='monolingual tokenized mn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.mn.gz">mn</a>
</th><th><a rel="nofollow" title='monolingual tokenized mr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.mr.gz">mr</a>
</th><th><a rel="nofollow" title='monolingual tokenized mt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.mt.gz">mt</a>
</th><th><a rel="nofollow" title='monolingual tokenized nan plain text' href="download.php?f=Tatoeba/mono/Tatoeba.nan.gz">nan</a>
</th><th><a rel="nofollow" title='monolingual tokenized nb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.nb.gz">nb</a>
</th><th><a rel="nofollow" title='monolingual tokenized nds plain text' href="download.php?f=Tatoeba/mono/Tatoeba.nds.gz">nds</a>
</th><th><a rel="nofollow" title='monolingual tokenized nl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.nl.gz">nl</a>
</th><th><a rel="nofollow" title='monolingual tokenized non plain text' href="download.php?f=Tatoeba/mono/Tatoeba.non.gz">non</a>
</th><th><a rel="nofollow" title='monolingual tokenized nov plain text' href="download.php?f=Tatoeba/mono/Tatoeba.nov.gz">nov</a>
</th><th><a rel="nofollow" title='monolingual tokenized npi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.npi.gz">npi</a>
</th><th><a rel="nofollow" title='monolingual tokenized oc plain text' href="download.php?f=Tatoeba/mono/Tatoeba.oc.gz">oc</a>
</th><th><a rel="nofollow" title='monolingual tokenized orv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.orv.gz">orv</a>
</th><th><a rel="nofollow" title='monolingual tokenized os plain text' href="download.php?f=Tatoeba/mono/Tatoeba.os.gz">os</a>
</th><th><a rel="nofollow" title='monolingual tokenized pcd plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pcd.gz">pcd</a>
</th><th><a rel="nofollow" title='monolingual tokenized pes plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pes.gz">pes</a>
</th><th><a rel="nofollow" title='monolingual tokenized pl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pl.gz">pl</a>
</th><th><a rel="nofollow" title='monolingual tokenized pms plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pms.gz">pms</a>
</th><th><a rel="nofollow" title='monolingual tokenized pnb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pnb.gz">pnb</a>
</th><th><a rel="nofollow" title='monolingual tokenized prg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.prg.gz">prg</a>
</th><th><a rel="nofollow" title='monolingual tokenized pt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.pt.gz">pt</a>
</th><th><a rel="nofollow" title='monolingual tokenized qu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.qu.gz">qu</a>
</th><th><a rel="nofollow" title='monolingual tokenized qya plain text' href="download.php?f=Tatoeba/mono/Tatoeba.qya.gz">qya</a>
</th><th><a rel="nofollow" title='monolingual tokenized rm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.rm.gz">rm</a>
</th><th><a rel="nofollow" title='monolingual tokenized ro plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ro.gz">ro</a>
</th><th><a rel="nofollow" title='monolingual tokenized ru plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ru.gz">ru</a>
</th><th><a rel="nofollow" title='monolingual tokenized sa plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sa.gz">sa</a>
</th><th><a rel="nofollow" title='monolingual tokenized scn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.scn.gz">scn</a>
</th><th><a rel="nofollow" title='monolingual tokenized sjn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sjn.gz">sjn</a>
</th><th><a rel="nofollow" title='monolingual tokenized sl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sl.gz">sl</a>
</th><th><a rel="nofollow" title='monolingual tokenized sq plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sq.gz">sq</a>
</th><th><a rel="nofollow" title='monolingual tokenized sr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sr.gz">sr</a>
</th><th><a rel="nofollow" title='monolingual tokenized sv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.sv.gz">sv</a>
</th><th><a rel="nofollow" title='monolingual tokenized swh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.swh.gz">swh</a>
</th><th><a rel="nofollow" title='monolingual tokenized te plain text' href="download.php?f=Tatoeba/mono/Tatoeba.te.gz">te</a>
</th><th><a rel="nofollow" title='monolingual tokenized tg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tg.gz">tg</a>
</th><th><a rel="nofollow" title='monolingual tokenized th plain text' href="download.php?f=Tatoeba/mono/Tatoeba.th.gz">th</a>
</th><th><a rel="nofollow" title='monolingual tokenized tl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tl.gz">tl</a>
</th><th><a rel="nofollow" title='monolingual tokenized tlh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tlh.gz">tlh</a>
</th><th><a rel="nofollow" title='monolingual tokenized toki plain text' href="download.php?f=Tatoeba/mono/Tatoeba.toki.gz">toki</a>
</th><th><a rel="nofollow" title='monolingual tokenized tpi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tpi.gz">tpi</a>
</th><th><a rel="nofollow" title='monolingual tokenized tpw plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tpw.gz">tpw</a>
</th><th><a rel="nofollow" title='monolingual tokenized tr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tr.gz">tr</a>
</th><th><a rel="nofollow" title='monolingual tokenized tt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.tt.gz">tt</a>
</th><th><a rel="nofollow" title='monolingual tokenized ug plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ug.gz">ug</a>
</th><th><a rel="nofollow" title='monolingual tokenized uk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.uk.gz">uk</a>
</th><th><a rel="nofollow" title='monolingual tokenized ur plain text' href="download.php?f=Tatoeba/mono/Tatoeba.ur.gz">ur</a>
</th><th><a rel="nofollow" title='monolingual tokenized uz plain text' href="download.php?f=Tatoeba/mono/Tatoeba.uz.gz">uz</a>
</th><th><a rel="nofollow" title='monolingual tokenized vi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.vi.gz">vi</a>
</th><th><a rel="nofollow" title='monolingual tokenized vo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.vo.gz">vo</a>
</th><th><a rel="nofollow" title='monolingual tokenized wuu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.wuu.gz">wuu</a>
</th><th><a rel="nofollow" title='monolingual tokenized xal plain text' href="download.php?f=Tatoeba/mono/Tatoeba.xal.gz">xal</a>
</th><th><a rel="nofollow" title='monolingual tokenized xh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.xh.gz">xh</a>
</th><th><a rel="nofollow" title='monolingual tokenized yi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.yi.gz">yi</a>
</th><th><a rel="nofollow" title='monolingual tokenized yue plain text' href="download.php?f=Tatoeba/mono/Tatoeba.yue.gz">yue</a>
</th><th><a rel="nofollow" title='monolingual tokenized zsm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.zsm.gz">zsm</a>
</th></tr> <tr><th><a rel="nofollow" title='monolingual untokenized acm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.acm.gz">acm</a>
</th><td>1</td> <td>0.2k</td> <td>38</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='acm-English (11 sentence pairs, 0.13k words) - TMX format' href="download.php?f=Tatoeba/acm-en.tmx.gz">11</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='acm-Japanese (25 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/acm-ja.tmx.gz">25</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized af plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.af.gz">af</a>
</th><td>1</td> <td>13.6k</td> <td>1.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-cmn (67 sentence pairs, 0.62k words) - TMX format' href="download.php?f=Tatoeba/af-cmn.tmx.gz">67</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Czech (1 sentence pairs, 53 words) - TMX format' href="download.php?f=Tatoeba/af-cs.tmx.gz">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-German (329 sentence pairs, 3.90k words) - TMX format' href="download.php?f=Tatoeba/af-de.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Afrikaans-English (1,189 sentence pairs, 16.02k words) - TMX format' href="download.php?f=Tatoeba/af-en.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Afrikaans-Esperanto (642 sentence pairs, 8.13k words) - TMX format' href="download.php?f=Tatoeba/af-eo.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Spanish (154 sentence pairs, 1.73k words) - TMX format' href="download.php?f=Tatoeba/af-es.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-French (100 sentence pairs, 1.13k words) - TMX format' href="download.php?f=Tatoeba/af-fr.tmx.gz">100</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Italian (75 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/af-it.tmx.gz">75</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Japanese (18 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/af-ja.tmx.gz">18</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Portuguese (43 sentence pairs, 0.50k words) - TMX format' href="download.php?f=Tatoeba/af-pt.tmx.gz">43</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Turkish (36 sentence pairs, 0.43k words) - TMX format' href="download.php?f=Tatoeba/af-tr.tmx.gz">36</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Afrikaans-Vietnamese (1 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/af-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ain plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ain.gz">ain</a>
</th><td>1</td> <td>68</td> <td>14</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ainu-English (12 sentence pairs, 97 words) - TMX format' href="download.php?f=Tatoeba/ain-en.tmx.gz">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ainu-French (6 sentence pairs, 40 words) - TMX format' href="download.php?f=Tatoeba/ain-fr.tmx.gz">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ang plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ang.gz">ang</a>
</th><td>1</td> <td>1.5k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-German (55 sentence pairs, 0.82k words) - TMX format' href="download.php?f=Tatoeba/ang-de.tmx.gz">55</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-English (130 sentence pairs, 2.61k words) - TMX format' href="download.php?f=Tatoeba/ang-en.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-Esperanto (36 sentence pairs, 0.47k words) - TMX format' href="download.php?f=Tatoeba/ang-eo.tmx.gz">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-Spanish (11 sentence pairs, 0.20k words) - TMX format' href="download.php?f=Tatoeba/ang-es.tmx.gz">11</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-French (35 sentence pairs, 0.53k words) - TMX format' href="download.php?f=Tatoeba/ang-fr.tmx.gz">35</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English, Old (ca.450-1100)-Italian (9 sentence pairs, 100 words) - TMX format' href="download.php?f=Tatoeba/ang-it.tmx.gz">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ar plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ar.gz">ar</a>
</th><td>1</td> <td>90.1k</td> <td>14.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Arabic-Berber languages) (1,593 sentence pairs, 15.05k words) - TMX format' href="download.php?f=Tatoeba/ar-ber.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Bulgarian (7 sentence pairs, 70 words) - TMX format' href="download.php?f=Tatoeba/ar-bg.tmx.gz">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-cmn (57 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/ar-cmn.tmx.gz">57</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-German (1,126 sentence pairs, 10.53k words) - TMX format' href="download.php?f=Tatoeba/ar-de.tmx.gz">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Greek (408 sentence pairs, 2.79k words) - TMX format' href="download.php?f=Tatoeba/ar-el.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Arabic-English (12,943 sentence pairs, 0.15M words) - TMX format' href="download.php?f=Tatoeba/ar-en.tmx.gz">12.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Esperanto (291 sentence pairs, 2.82k words) - TMX format' href="download.php?f=Tatoeba/ar-eo.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Arabic-Spanish (1,867 sentence pairs, 17.93k words) - TMX format' href="download.php?f=Tatoeba/ar-es.tmx.gz">1.9k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-French (562 sentence pairs, 6.05k words) - TMX format' href="download.php?f=Tatoeba/ar-fr.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Arabic-Hebrew (931 sentence pairs, 8.53k words) - TMX format' href="download.php?f=Tatoeba/ar-he.tmx.gz">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Italian (136 sentence pairs, 1.30k words) - TMX format' href="download.php?f=Tatoeba/ar-it.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Japanese (1,134 sentence pairs, 6.12k words) - TMX format' href="download.php?f=Tatoeba/ar-ja.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Korean (90 sentence pairs, 0.77k words) - TMX format' href="download.php?f=Tatoeba/ar-ko.tmx.gz">90</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Maltese (27 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/ar-mt.tmx.gz">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Polish (199 sentence pairs, 1.72k words) - TMX format' href="download.php?f=Tatoeba/ar-pl.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Russian (266 sentence pairs, 2.39k words) - TMX format' href="download.php?f=Tatoeba/ar-ru.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Turkish (406 sentence pairs, 3.68k words) - TMX format' href="download.php?f=Tatoeba/ar-tr.tmx.gz">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Uighur (8 sentence pairs, 52 words) - TMX format' href="download.php?f=Tatoeba/ar-ug.tmx.gz">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-Ukrainian (56 sentence pairs, 0.51k words) - TMX format' href="download.php?f=Tatoeba/ar-uk.tmx.gz">56</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Arabic-zsm (94 sentence pairs, 1.08k words) - TMX format' href="download.php?f=Tatoeba/ar-zsm.tmx.gz">94</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized arq plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.arq.gz">arq</a>
</th><td>1</td> <td>3.4k</td> <td>0.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arq-English (379 sentence pairs, 3.80k words) - TMX format' href="download.php?f=Tatoeba/arq-en.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arq-French (163 sentence pairs, 1.83k words) - TMX format' href="download.php?f=Tatoeba/arq-fr.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arq-Japanese (9 sentence pairs, 42 words) - TMX format' href="download.php?f=Tatoeba/arq-ja.tmx.gz">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized arz plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.arz.gz">arz</a>
</th><td>1</td> <td>2.2k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arz-cmn (7 sentence pairs, 32 words) - TMX format' href="download.php?f=Tatoeba/arz-cmn.tmx.gz">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arz-Greek (10 sentence pairs, 58 words) - TMX format' href="download.php?f=Tatoeba/arz-el.tmx.gz">10</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arz-English (456 sentence pairs, 3.88k words) - TMX format' href="download.php?f=Tatoeba/arz-en.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='arz-Japanese (12 sentence pairs, 65 words) - TMX format' href="download.php?f=Tatoeba/arz-ja.tmx.gz">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ast plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ast.gz">ast</a>
</th><td>1</td> <td>0.3k</td> <td>45</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Asturian-English (17 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/ast-en.tmx.gz">17</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Asturian-Spanish (30 sentence pairs, 0.34k words) - TMX format' href="download.php?f=Tatoeba/ast-es.tmx.gz">30</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Asturian-French (5 sentence pairs, 46 words) - TMX format' href="download.php?f=Tatoeba/ast-fr.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized avk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.avk.gz">avk</a>
</th><td>1</td> <td>14.5k</td> <td>2.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='avk-cmn (6 sentence pairs, 34 words) - TMX format' href="download.php?f=Tatoeba/avk-cmn.tmx.gz">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='avk-English (50 sentence pairs, 0.52k words) - TMX format' href="download.php?f=Tatoeba/avk-en.tmx.gz">50</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='avk-Spanish (101 sentence pairs, 1.15k words) - TMX format' href="download.php?f=Tatoeba/avk-es.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='avk-French (895 sentence pairs, 11.42k words) - TMX format' href="download.php?f=Tatoeba/avk-fr.tmx.gz">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='avk-Italian (72 sentence pairs, 0.74k words) - TMX format' href="download.php?f=Tatoeba/avk-it.tmx.gz">72</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='avk-Japanese (15 sentence pairs, 86 words) - TMX format' href="download.php?f=Tatoeba/avk-ja.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized az plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.az.gz">az</a>
</th><td>1</td> <td>2.4k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-cmn (1 sentence pairs, 3 words) - TMX format' href="download.php?f=Tatoeba/az-cmn.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-English (392 sentence pairs, 3.29k words) - TMX format' href="download.php?f=Tatoeba/az-en.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Azerbaijani-Japanese (5 sentence pairs, 24 words) - TMX format' href="download.php?f=Tatoeba/az-ja.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized be plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.be.gz">be</a>
</th><td>1</td> <td>34.0k</td> <td>4.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-cmn (252 sentence pairs, 1.36k words) - TMX format' href="download.php?f=Tatoeba/be-cmn.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Czech (6 sentence pairs, 98 words) - TMX format' href="download.php?f=Tatoeba/be-cs.tmx.gz">6</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-German (452 sentence pairs, 5.28k words) - TMX format' href="download.php?f=Tatoeba/be-de.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Belarusian-English (2,687 sentence pairs, 36.86k words) - TMX format' href="download.php?f=Tatoeba/be-en.tmx.gz">2.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Belarusian-Esperanto (591 sentence pairs, 7.05k words) - TMX format' href="download.php?f=Tatoeba/be-eo.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Spanish (116 sentence pairs, 1.31k words) - TMX format' href="download.php?f=Tatoeba/be-es.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-French (86 sentence pairs, 1.00k words) - TMX format' href="download.php?f=Tatoeba/be-fr.tmx.gz">86</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Hebrew (35 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/be-he.tmx.gz">35</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Japanese (133 sentence pairs, 0.70k words) - TMX format' href="download.php?f=Tatoeba/be-ja.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Dutch (524 sentence pairs, 6.49k words) - TMX format' href="download.php?f=Tatoeba/be-nl.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Polish (200 sentence pairs, 1.90k words) - TMX format' href="download.php?f=Tatoeba/be-pl.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Belarusian-Russian (1,762 sentence pairs, 22.93k words) - TMX format' href="download.php?f=Tatoeba/be-ru.tmx.gz">1.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Serbian (12 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/be-sr.tmx.gz">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Turkish (130 sentence pairs, 1.19k words) - TMX format' href="download.php?f=Tatoeba/be-tr.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Belarusian-Ukrainian (1,094 sentence pairs, 13.12k words) - TMX format' href="download.php?f=Tatoeba/be-uk.tmx.gz">1.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Belarusian-Vietnamese (3 sentence pairs, 41 words) - TMX format' href="download.php?f=Tatoeba/be-vi.tmx.gz">3</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ber plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ber.gz">ber</a>
</th><td>1</td> <td>0.5M</td> <td>87.3k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Berber languages)-Arabic (1,593 sentence pairs, 15.05k words) - Moses format' href="download.php?f=Tatoeba/ar-ber.txt.zip">1.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Berber languages)-cmn (4 sentence pairs, 16 words) - TMX format' href="download.php?f=Tatoeba/ber-cmn.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Berber languages)-German (478 sentence pairs, 5.33k words) - TMX format' href="download.php?f=Tatoeba/ber-de.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#fff9f0"><a rel="nofollow" title='Berber languages)-English (46,769 sentence pairs, 0.57M words) - TMX format' href="download.php?f=Tatoeba/ber-en.tmx.gz">46.8k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Berber languages)-Esperanto (1,372 sentence pairs, 15.43k words) - TMX format' href="download.php?f=Tatoeba/ber-eo.tmx.gz">1.4k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Berber languages)-Spanish (9,145 sentence pairs, 0.10M words) - TMX format' href="download.php?f=Tatoeba/ber-es.tmx.gz">9.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Berber languages)-French (30,042 sentence pairs, 0.28M words) - TMX format' href="download.php?f=Tatoeba/ber-fr.tmx.gz">30.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Berber languages)-Italian (83 sentence pairs, 0.81k words) - TMX format' href="download.php?f=Tatoeba/ber-it.tmx.gz">83</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Berber languages)-Japanese (14 sentence pairs, 83 words) - TMX format' href="download.php?f=Tatoeba/ber-ja.tmx.gz">14</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.bg.gz">bg</a>
</th><td>1</td> <td>92.5k</td> <td>12.9k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Arabic (7 sentence pairs, 70 words) - Moses format' href="download.php?f=Tatoeba/ar-bg.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-cmn (314 sentence pairs, 2.28k words) - TMX format' href="download.php?f=Tatoeba/bg-cmn.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-German (219 sentence pairs, 2.52k words) - TMX format' href="download.php?f=Tatoeba/bg-de.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Greek (47 sentence pairs, 0.41k words) - TMX format' href="download.php?f=Tatoeba/bg-el.tmx.gz">47</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Bulgarian-English (11,227 sentence pairs, 0.14M words) - TMX format' href="download.php?f=Tatoeba/bg-en.tmx.gz">11.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Esperanto (509 sentence pairs, 5.91k words) - TMX format' href="download.php?f=Tatoeba/bg-eo.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Spanish (124 sentence pairs, 1.47k words) - TMX format' href="download.php?f=Tatoeba/bg-es.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Finnish (3 sentence pairs, 27 words) - TMX format' href="download.php?f=Tatoeba/bg-fi.tmx.gz">3</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-French (192 sentence pairs, 2.26k words) - TMX format' href="download.php?f=Tatoeba/bg-fr.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Hungarian (28 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/bg-hu.tmx.gz">28</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Bulgarian-Italian (836 sentence pairs, 10.28k words) - TMX format' href="download.php?f=Tatoeba/bg-it.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Japanese (288 sentence pairs, 2.12k words) - TMX format' href="download.php?f=Tatoeba/bg-ja.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Dutch (36 sentence pairs, 0.42k words) - TMX format' href="download.php?f=Tatoeba/bg-nl.tmx.gz">36</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Polish (63 sentence pairs, 0.67k words) - TMX format' href="download.php?f=Tatoeba/bg-pl.tmx.gz">63</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Portuguese (32 sentence pairs, 0.36k words) - TMX format' href="download.php?f=Tatoeba/bg-pt.tmx.gz">32</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Russian (525 sentence pairs, 5.46k words) - TMX format' href="download.php?f=Tatoeba/bg-ru.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bulgarian-Ukrainian (75 sentence pairs, 0.66k words) - TMX format' href="download.php?f=Tatoeba/bg-uk.tmx.gz">75</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.bn.gz">bn</a>
</th><td>1</td> <td>1.6k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-cmn (4 sentence pairs, 22 words) - TMX format' href="download.php?f=Tatoeba/bn-cmn.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-English (200 sentence pairs, 2.13k words) - TMX format' href="download.php?f=Tatoeba/bn-en.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-French (4 sentence pairs, 35 words) - TMX format' href="download.php?f=Tatoeba/bn-fr.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-Italian (11 sentence pairs, 82 words) - TMX format' href="download.php?f=Tatoeba/bn-it.tmx.gz">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-Japanese (14 sentence pairs, 93 words) - TMX format' href="download.php?f=Tatoeba/bn-ja.tmx.gz">14</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bengali-Vietnamese (1 sentence pairs, 14 words) - TMX format' href="download.php?f=Tatoeba/bn-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bod plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.bod.gz">bod</a>
</th><td>1</td> <td>0.7k</td> <td>39</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tibetan-English (36 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/bod-en.tmx.gz">36</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized br plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.br.gz">br</a>
</th><td>1</td> <td>5.9k</td> <td>0.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Czech (1 sentence pairs, 58 words) - TMX format' href="download.php?f=Tatoeba/br-cs.tmx.gz">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-German (18 sentence pairs, 0.21k words) - TMX format' href="download.php?f=Tatoeba/br-de.tmx.gz">18</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-English (98 sentence pairs, 0.84k words) - TMX format' href="download.php?f=Tatoeba/br-en.tmx.gz">98</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Esperanto (115 sentence pairs, 0.99k words) - TMX format' href="download.php?f=Tatoeba/br-eo.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-French (222 sentence pairs, 2.40k words) - TMX format' href="download.php?f=Tatoeba/br-fr.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Italian (37 sentence pairs, 0.32k words) - TMX format' href="download.php?f=Tatoeba/br-it.tmx.gz">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Japanese (4 sentence pairs, 21 words) - TMX format' href="download.php?f=Tatoeba/br-ja.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Dutch (5 sentence pairs, 95 words) - TMX format' href="download.php?f=Tatoeba/br-nl.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Breton-Turkish (94 sentence pairs, 0.75k words) - TMX format' href="download.php?f=Tatoeba/br-tr.tmx.gz">94</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized bs plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.bs.gz">bs</a>
</th><td>1</td> <td>1.8k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-cmn (32 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/bs-cmn.tmx.gz">32</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-German (25 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/bs-de.tmx.gz">25</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-English (284 sentence pairs, 2.53k words) - TMX format' href="download.php?f=Tatoeba/bs-en.tmx.gz">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Spanish (23 sentence pairs, 0.17k words) - TMX format' href="download.php?f=Tatoeba/bs-es.tmx.gz">23</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-French (32 sentence pairs, 0.26k words) - TMX format' href="download.php?f=Tatoeba/bs-fr.tmx.gz">32</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Italian (16 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/bs-it.tmx.gz">16</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Bosnian-Russian (29 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/bs-ru.tmx.gz">29</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ca plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ca.gz">ca</a>
</th><td>1</td> <td>41.7k</td> <td>4.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-cmn (79 sentence pairs, 0.61k words) - TMX format' href="download.php?f=Tatoeba/ca-cmn.tmx.gz">79</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-German (588 sentence pairs, 7.75k words) - TMX format' href="download.php?f=Tatoeba/ca-de.tmx.gz">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Greek (46 sentence pairs, 0.43k words) - TMX format' href="download.php?f=Tatoeba/ca-el.tmx.gz">46</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-English (972 sentence pairs, 13.36k words) - TMX format' href="download.php?f=Tatoeba/ca-en.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Esperanto (438 sentence pairs, 5.75k words) - TMX format' href="download.php?f=Tatoeba/ca-eo.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Catalan-Spanish (2,191 sentence pairs, 30.43k words) - TMX format' href="download.php?f=Tatoeba/ca-es.tmx.gz">2.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Finnish (2 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/ca-fi.tmx.gz">2</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Catalan-French (525 sentence pairs, 7.16k words) - TMX format' href="download.php?f=Tatoeba/ca-fr.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Italian (240 sentence pairs, 2.92k words) - TMX format' href="download.php?f=Tatoeba/ca-it.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Catalan-Japanese (137 sentence pairs, 1.14k words) - TMX format' href="download.php?f=Tatoeba/ca-ja.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ch plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ch.gz">ch</a>
</th><td>1</td> <td>0.2k</td> <td>27</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chamorro-English (27 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/ch-en.tmx.gz">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Chamorro-French (1 sentence pairs, 5 words) - TMX format' href="download.php?f=Tatoeba/ch-fr.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ckt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ckt.gz">ckt</a>
</th><td>1</td> <td>1.2k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='ckt-English (1 sentence pairs, 6 words) - TMX format' href="download.php?f=Tatoeba/ckt-en.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cmn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.cmn.gz">cmn</a>
</th><td>1</td> <td>0.1M</td> <td>44.3k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Afrikaans (67 sentence pairs, 0.62k words) - Moses format' href="download.php?f=Tatoeba/af-cmn.txt.zip">67</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Arabic (57 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/ar-cmn.txt.zip">57</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-arz (7 sentence pairs, 32 words) - Moses format' href="download.php?f=Tatoeba/arz-cmn.txt.zip">7</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-avk (6 sentence pairs, 34 words) - Moses format' href="download.php?f=Tatoeba/avk-cmn.txt.zip">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Azerbaijani (1 sentence pairs, 3 words) - Moses format' href="download.php?f=Tatoeba/az-cmn.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Belarusian (252 sentence pairs, 1.36k words) - Moses format' href="download.php?f=Tatoeba/be-cmn.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Berber languages) (4 sentence pairs, 16 words) - Moses format' href="download.php?f=Tatoeba/ber-cmn.txt.zip">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Bulgarian (314 sentence pairs, 2.28k words) - Moses format' href="download.php?f=Tatoeba/bg-cmn.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Bengali (4 sentence pairs, 22 words) - Moses format' href="download.php?f=Tatoeba/bn-cmn.txt.zip">4</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Bosnian (32 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/bs-cmn.txt.zip">32</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Catalan (79 sentence pairs, 0.61k words) - Moses format' href="download.php?f=Tatoeba/ca-cmn.txt.zip">79</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-cmn (210 sentence pairs, 0.45k words) - Moses format' href="download.php?f=Tatoeba/cmn-cmn.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Czech (47 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/cmn-cs.tmx.gz">47</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Welsh (7 sentence pairs, 32 words) - TMX format' href="download.php?f=Tatoeba/cmn-cy.tmx.gz">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-cycl (2 sentence pairs, 16 words) - TMX format' href="download.php?f=Tatoeba/cmn-cycl.tmx.gz">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Danish (144 sentence pairs, 0.90k words) - TMX format' href="download.php?f=Tatoeba/cmn-da.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='cmn-German (3,186 sentence pairs, 23.11k words) - TMX format' href="download.php?f=Tatoeba/cmn-de.tmx.gz">3.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Greek (8 sentence pairs, 45 words) - TMX format' href="download.php?f=Tatoeba/cmn-el.tmx.gz">8</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='cmn-English (30,997 sentence pairs, 0.26M words) - TMX format' href="download.php?f=Tatoeba/cmn-en.tmx.gz">31.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='cmn-Esperanto (2,959 sentence pairs, 20.05k words) - TMX format' href="download.php?f=Tatoeba/cmn-eo.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='cmn-Spanish (5,100 sentence pairs, 32.59k words) - TMX format' href="download.php?f=Tatoeba/cmn-es.tmx.gz">5.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Basque (70 sentence pairs, 0.36k words) - TMX format' href="download.php?f=Tatoeba/cmn-eu.tmx.gz">70</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Finnish (95 sentence pairs, 0.48k words) - TMX format' href="download.php?f=Tatoeba/cmn-fi.tmx.gz">95</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Faroese (1 sentence pairs, 26 words) - TMX format' href="download.php?f=Tatoeba/cmn-fo.tmx.gz">1</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='cmn-French (15,233 sentence pairs, 0.13M words) - TMX format' href="download.php?f=Tatoeba/cmn-fr.tmx.gz">15.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Western Frisian (9 sentence pairs, 84 words) - TMX format' href="download.php?f=Tatoeba/cmn-fy.tmx.gz">9</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Galician (8 sentence pairs, 39 words) - TMX format' href="download.php?f=Tatoeba/cmn-gl.tmx.gz">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Guarani (20 sentence pairs, 88 words) - TMX format' href="download.php?f=Tatoeba/cmn-gn.tmx.gz">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Hebrew (444 sentence pairs, 2.28k words) - TMX format' href="download.php?f=Tatoeba/cmn-he.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Hindi (293 sentence pairs, 2.54k words) - TMX format' href="download.php?f=Tatoeba/cmn-hi.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Hiligaynon (7 sentence pairs, 59 words) - TMX format' href="download.php?f=Tatoeba/cmn-hil.tmx.gz">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Croatian (120 sentence pairs, 0.74k words) - TMX format' href="download.php?f=Tatoeba/cmn-hr.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Hungarian (215 sentence pairs, 1.27k words) - TMX format' href="download.php?f=Tatoeba/cmn-hu.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Armenian (13 sentence pairs, 48 words) - TMX format' href="download.php?f=Tatoeba/cmn-hy.tmx.gz">13</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Indonesian (138 sentence pairs, 1.05k words) - TMX format' href="download.php?f=Tatoeba/cmn-id.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Ido (27 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/cmn-io.tmx.gz">27</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Icelandic (11 sentence pairs, 75 words) - TMX format' href="download.php?f=Tatoeba/cmn-is.tmx.gz">11</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='cmn-Italian (1,448 sentence pairs, 9.28k words) - TMX format' href="download.php?f=Tatoeba/cmn-it.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Japanese (2,938 sentence pairs, 5.95k words) - TMX format' href="download.php?f=Tatoeba/cmn-ja.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Lojban (403 sentence pairs, 2.54k words) - TMX format' href="download.php?f=Tatoeba/cmn-jbo.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Central Khmer (6 sentence pairs, 16 words) - TMX format' href="download.php?f=Tatoeba/cmn-km.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Korean (88 sentence pairs, 0.47k words) - TMX format' href="download.php?f=Tatoeba/cmn-ko.tmx.gz">88</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Kurdish (5 sentence pairs, 26 words) - TMX format' href="download.php?f=Tatoeba/cmn-ku.tmx.gz">5</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Latin (38 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/cmn-la.tmx.gz">38</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Lithuanian (26 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/cmn-lt.tmx.gz">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Latvian (37 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/cmn-lv.tmx.gz">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-lzh (86 sentence pairs, 0.18k words) - TMX format' href="download.php?f=Tatoeba/cmn-lzh.tmx.gz">86</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-nan (6 sentence pairs, 24 words) - TMX format' href="download.php?f=Tatoeba/cmn-nan.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-BokmÃ¥l, Norwegian (21 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/cmn-nb.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Low German (37 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/cmn-nds.tmx.gz">37</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='cmn-Dutch (1,609 sentence pairs, 13.07k words) - TMX format' href="download.php?f=Tatoeba/cmn-nl.tmx.gz">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Norse, Old (2 sentence pairs, 14 words) - TMX format' href="download.php?f=Tatoeba/cmn-non.tmx.gz">2</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Occitan (post 1500) (60 sentence pairs, 0.41k words) - TMX format' href="download.php?f=Tatoeba/cmn-oc.tmx.gz">60</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-pes (42 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/cmn-pes.tmx.gz">42</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Polish (575 sentence pairs, 3.65k words) - TMX format' href="download.php?f=Tatoeba/cmn-pl.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Portuguese (574 sentence pairs, 3.53k words) - TMX format' href="download.php?f=Tatoeba/cmn-pt.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Romanian (26 sentence pairs, 0.20k words) - TMX format' href="download.php?f=Tatoeba/cmn-ro.tmx.gz">26</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='cmn-Russian (3,690 sentence pairs, 23.60k words) - TMX format' href="download.php?f=Tatoeba/cmn-ru.tmx.gz">3.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Slovenian (26 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/cmn-sl.tmx.gz">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Albanian (24 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/cmn-sq.tmx.gz">24</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Serbian (72 sentence pairs, 0.37k words) - TMX format' href="download.php?f=Tatoeba/cmn-sr.tmx.gz">72</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Swedish (377 sentence pairs, 2.43k words) - TMX format' href="download.php?f=Tatoeba/cmn-sv.tmx.gz">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Tajik (1 sentence pairs, 4 words) - TMX format' href="download.php?f=Tatoeba/cmn-tg.tmx.gz">1</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Klingon (410 sentence pairs, 1.77k words) - TMX format' href="download.php?f=Tatoeba/cmn-tlh.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-toki (8 sentence pairs, 61 words) - TMX format' href="download.php?f=Tatoeba/cmn-toki.tmx.gz">8</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Turkish (439 sentence pairs, 2.15k words) - TMX format' href="download.php?f=Tatoeba/cmn-tr.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Tatar (57 sentence pairs, 0.25k words) - TMX format' href="download.php?f=Tatoeba/cmn-tt.tmx.gz">57</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='cmn-Uighur (1,879 sentence pairs, 10.37k words) - TMX format' href="download.php?f=Tatoeba/cmn-ug.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Ukrainian (598 sentence pairs, 3.07k words) - TMX format' href="download.php?f=Tatoeba/cmn-uk.tmx.gz">0.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Uzbek (38 sentence pairs, 0.17k words) - TMX format' href="download.php?f=Tatoeba/cmn-uz.tmx.gz">38</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Vietnamese (86 sentence pairs, 0.71k words) - TMX format' href="download.php?f=Tatoeba/cmn-vi.tmx.gz">86</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-wuu (3,237 sentence pairs, 6.50k words) - TMX format' href="download.php?f=Tatoeba/cmn-wuu.tmx.gz">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Kalmyk (28 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/cmn-xal.tmx.gz">28</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-Yiddish (4 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/cmn-yi.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-yue (450 sentence pairs, 0.91k words) - TMX format' href="download.php?f=Tatoeba/cmn-yue.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cmn-zsm (31 sentence pairs, 0.20k words) - TMX format' href="download.php?f=Tatoeba/cmn-zsm.tmx.gz">31</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cs plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.cs.gz">cs</a>
</th><td>1</td> <td>40.6k</td> <td>6.1k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Afrikaans (1 sentence pairs, 53 words) - Moses format' href="download.php?f=Tatoeba/af-cs.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Belarusian (6 sentence pairs, 98 words) - Moses format' href="download.php?f=Tatoeba/be-cs.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Breton (1 sentence pairs, 58 words) - Moses format' href="download.php?f=Tatoeba/br-cs.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-cmn (47 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/cmn-cs.txt.zip">47</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Czech-German (1,989 sentence pairs, 24.38k words) - TMX format' href="download.php?f=Tatoeba/cs-de.tmx.gz">2.0k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Greek (12 sentence pairs, 99 words) - TMX format' href="download.php?f=Tatoeba/cs-el.tmx.gz">12</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-English (1,456 sentence pairs, 18.00k words) - TMX format' href="download.php?f=Tatoeba/cs-en.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Czech-Esperanto (1,821 sentence pairs, 21.21k words) - TMX format' href="download.php?f=Tatoeba/cs-eo.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Spanish (93 sentence pairs, 1.08k words) - TMX format' href="download.php?f=Tatoeba/cs-es.tmx.gz">93</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Finnish (6 sentence pairs, 40 words) - TMX format' href="download.php?f=Tatoeba/cs-fi.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Faroese (1 sentence pairs, 50 words) - TMX format' href="download.php?f=Tatoeba/cs-fo.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-French (130 sentence pairs, 1.67k words) - TMX format' href="download.php?f=Tatoeba/cs-fr.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Western Frisian (4 sentence pairs, 73 words) - TMX format' href="download.php?f=Tatoeba/cs-fy.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Hebrew (6 sentence pairs, 82 words) - TMX format' href="download.php?f=Tatoeba/cs-he.tmx.gz">6</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Croatian (9 sentence pairs, 62 words) - TMX format' href="download.php?f=Tatoeba/cs-hr.tmx.gz">9</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Hungarian (162 sentence pairs, 1.41k words) - TMX format' href="download.php?f=Tatoeba/cs-hu.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Indonesian (1 sentence pairs, 2 words) - TMX format' href="download.php?f=Tatoeba/cs-id.tmx.gz">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Italian (707 sentence pairs, 8.79k words) - TMX format' href="download.php?f=Tatoeba/cs-it.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Japanese (29 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/cs-ja.tmx.gz">29</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Latin (22 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/cs-la.tmx.gz">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-BokmÃ¥l, Norwegian (17 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/cs-nb.tmx.gz">17</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Dutch (56 sentence pairs, 0.74k words) - TMX format' href="download.php?f=Tatoeba/cs-nl.tmx.gz">56</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Polish (356 sentence pairs, 3.55k words) - TMX format' href="download.php?f=Tatoeba/cs-pl.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Portuguese (25 sentence pairs, 0.38k words) - TMX format' href="download.php?f=Tatoeba/cs-pt.tmx.gz">25</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Romanian (8 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/cs-ro.tmx.gz">8</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Czech-Russian (773 sentence pairs, 8.32k words) - TMX format' href="download.php?f=Tatoeba/cs-ru.tmx.gz">0.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Slovenian (179 sentence pairs, 1.51k words) - TMX format' href="download.php?f=Tatoeba/cs-sl.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Klingon (2 sentence pairs, 11 words) - TMX format' href="download.php?f=Tatoeba/cs-tlh.tmx.gz">2</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Turkish (22 sentence pairs, 0.23k words) - TMX format' href="download.php?f=Tatoeba/cs-tr.tmx.gz">22</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Uighur (4 sentence pairs, 17 words) - TMX format' href="download.php?f=Tatoeba/cs-ug.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-Ukrainian (79 sentence pairs, 0.75k words) - TMX format' href="download.php?f=Tatoeba/cs-uk.tmx.gz">79</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Czech-wuu (2 sentence pairs, 10 words) - TMX format' href="download.php?f=Tatoeba/cs-wuu.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.cy.gz">cy</a>
</th><td>1</td> <td>2.4k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-cmn (7 sentence pairs, 32 words) - Moses format' href="download.php?f=Tatoeba/cmn-cy.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-German (40 sentence pairs, 0.34k words) - TMX format' href="download.php?f=Tatoeba/cy-de.tmx.gz">40</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-English (314 sentence pairs, 3.31k words) - TMX format' href="download.php?f=Tatoeba/cy-en.tmx.gz">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-Spanish (1 sentence pairs, 4 words) - TMX format' href="download.php?f=Tatoeba/cy-es.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-French (9 sentence pairs, 63 words) - TMX format' href="download.php?f=Tatoeba/cy-fr.tmx.gz">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-Italian (46 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/cy-it.tmx.gz">46</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-Japanese (2 sentence pairs, 27 words) - TMX format' href="download.php?f=Tatoeba/cy-ja.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Welsh-Russian (31 sentence pairs, 0.24k words) - TMX format' href="download.php?f=Tatoeba/cy-ru.tmx.gz">31</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized cycl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.cycl.gz">cycl</a>
</th><td>1</td> <td>0.5k</td> <td>43</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-cmn (2 sentence pairs, 16 words) - Moses format' href="download.php?f=Tatoeba/cmn-cycl.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-German (6 sentence pairs, 78 words) - TMX format' href="download.php?f=Tatoeba/cycl-de.tmx.gz">6</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-English (43 sentence pairs, 0.52k words) - TMX format' href="download.php?f=Tatoeba/cycl-en.tmx.gz">43</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-Spanish (3 sentence pairs, 30 words) - TMX format' href="download.php?f=Tatoeba/cycl-es.tmx.gz">3</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-French (15 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/cycl-fr.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-Italian (1 sentence pairs, 10 words) - TMX format' href="download.php?f=Tatoeba/cycl-it.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-Japanese (4 sentence pairs, 31 words) - TMX format' href="download.php?f=Tatoeba/cycl-ja.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='cycl-Russian (1 sentence pairs, 12 words) - TMX format' href="download.php?f=Tatoeba/cycl-ru.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized da plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.da.gz">da</a>
</th><td>1</td> <td>0.1M</td> <td>16.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-cmn (144 sentence pairs, 0.90k words) - Moses format' href="download.php?f=Tatoeba/cmn-da.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Danish-German (6,014 sentence pairs, 76.24k words) - TMX format' href="download.php?f=Tatoeba/da-de.tmx.gz">6.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdddc"><a rel="nofollow" title='Danish-English (8,680 sentence pairs, 0.11M words) - TMX format' href="download.php?f=Tatoeba/da-en.tmx.gz">8.7k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Danish-Esperanto (10,286 sentence pairs, 0.13M words) - TMX format' href="download.php?f=Tatoeba/da-eo.tmx.gz">10.3k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Danish-Spanish (8,103 sentence pairs, 97.42k words) - TMX format' href="download.php?f=Tatoeba/da-es.tmx.gz">8.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Finnish (117 sentence pairs, 1.13k words) - TMX format' href="download.php?f=Tatoeba/da-fi.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-French (982 sentence pairs, 11.28k words) - TMX format' href="download.php?f=Tatoeba/da-fr.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Italian (179 sentence pairs, 2.52k words) - TMX format' href="download.php?f=Tatoeba/da-it.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Japanese (800 sentence pairs, 5.10k words) - TMX format' href="download.php?f=Tatoeba/da-ja.tmx.gz">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Dutch (1,082 sentence pairs, 11.70k words) - TMX format' href="download.php?f=Tatoeba/da-nl.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Portuguese (712 sentence pairs, 7.09k words) - TMX format' href="download.php?f=Tatoeba/da-pt.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Danish-Russian (365 sentence pairs, 4.08k words) - TMX format' href="download.php?f=Tatoeba/da-ru.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Danish-Swedish (1,086 sentence pairs, 12.62k words) - TMX format' href="download.php?f=Tatoeba/da-sv.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized de plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.de.gz">de</a>
</th><td>1</td> <td>2.4M</td> <td>0.3M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Afrikaans (329 sentence pairs, 3.90k words) - Moses format' href="download.php?f=Tatoeba/af-de.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-English, Old (ca.450-1100) (55 sentence pairs, 0.82k words) - Moses format' href="download.php?f=Tatoeba/ang-de.txt.zip">55</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Arabic (1,126 sentence pairs, 10.53k words) - Moses format' href="download.php?f=Tatoeba/ar-de.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Belarusian (452 sentence pairs, 5.28k words) - Moses format' href="download.php?f=Tatoeba/be-de.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Berber languages) (478 sentence pairs, 5.33k words) - Moses format' href="download.php?f=Tatoeba/ber-de.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Bulgarian (219 sentence pairs, 2.52k words) - Moses format' href="download.php?f=Tatoeba/bg-de.txt.zip">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Breton (18 sentence pairs, 0.21k words) - Moses format' href="download.php?f=Tatoeba/br-de.txt.zip">18</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Bosnian (25 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/bs-de.txt.zip">25</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Catalan (588 sentence pairs, 7.75k words) - Moses format' href="download.php?f=Tatoeba/ca-de.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-cmn (3,187 sentence pairs, 23.11k words) - Moses format' href="download.php?f=Tatoeba/cmn-de.txt.zip">3.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Czech (1,989 sentence pairs, 24.38k words) - Moses format' href="download.php?f=Tatoeba/cs-de.txt.zip">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Welsh (40 sentence pairs, 0.34k words) - Moses format' href="download.php?f=Tatoeba/cy-de.txt.zip">40</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-cycl (6 sentence pairs, 78 words) - Moses format' href="download.php?f=Tatoeba/cycl-de.txt.zip">6</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='German-Danish (6,027 sentence pairs, 76.35k words) - Moses format' href="download.php?f=Tatoeba/da-de.txt.zip">6.0k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='German-German (3,638 sentence pairs, 50.71k words) - Moses format' href="download.php?f=Tatoeba/de-de.txt.zip">3.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Lower Sorbian (260 sentence pairs, 2.78k words) - TMX format' href="download.php?f=Tatoeba/de-dsb.tmx.gz">0.3k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='German-Greek (4,072 sentence pairs, 44.95k words) - TMX format' href="download.php?f=Tatoeba/de-el.tmx.gz">4.1k</a>
</td><td bgcolor="#fbffdc"><a rel="nofollow" title='German-English (143,019 sentence pairs, 2.00M words) - TMX format' href="download.php?f=Tatoeba/de-en.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='German-Esperanto (114,312 sentence pairs, 1.77M words) - TMX format' href="download.php?f=Tatoeba/de-eo.tmx.gz">0.1M</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='German-Spanish (63,301 sentence pairs, 0.86M words) - TMX format' href="download.php?f=Tatoeba/de-es.tmx.gz">63.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Estonian (53 sentence pairs, 0.56k words) - TMX format' href="download.php?f=Tatoeba/de-et.tmx.gz">53</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Basque (48 sentence pairs, 0.51k words) - TMX format' href="download.php?f=Tatoeba/de-eu.tmx.gz">48</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Finnish (3,159 sentence pairs, 34.65k words) - TMX format' href="download.php?f=Tatoeba/de-fi.tmx.gz">3.2k</a>
</td><td></td><td bgcolor="#fffff0"><a rel="nofollow" title='German-French (66,214 sentence pairs, 0.96M words) - TMX format' href="download.php?f=Tatoeba/de-fr.tmx.gz">66.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Western Frisian (48 sentence pairs, 0.52k words) - TMX format' href="download.php?f=Tatoeba/de-fy.tmx.gz">48</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Gaelic (124 sentence pairs, 1.42k words) - TMX format' href="download.php?f=Tatoeba/de-gd.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Galician (65 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/de-gl.tmx.gz">65</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='German-Hebrew (3,215 sentence pairs, 39.58k words) - TMX format' href="download.php?f=Tatoeba/de-he.tmx.gz">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Hindi (33 sentence pairs, 0.48k words) - TMX format' href="download.php?f=Tatoeba/de-hi.tmx.gz">33</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Croatian (337 sentence pairs, 4.11k words) - TMX format' href="download.php?f=Tatoeba/de-hr.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Upper Sorbian (265 sentence pairs, 2.88k words) - TMX format' href="download.php?f=Tatoeba/de-hsb.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='German-Hungarian (4,757 sentence pairs, 60.12k words) - TMX format' href="download.php?f=Tatoeba/de-hu.tmx.gz">4.8k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Interlingua (International Auxiliary Language Association) (506 sentence pairs, 8.13k words) - TMX format' href="download.php?f=Tatoeba/de-ia.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Indonesian (172 sentence pairs, 2.18k words) - TMX format' href="download.php?f=Tatoeba/de-id.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Interlingue (330 sentence pairs, 3.54k words) - TMX format' href="download.php?f=Tatoeba/de-ie.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Ido (207 sentence pairs, 2.03k words) - TMX format' href="download.php?f=Tatoeba/de-io.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Icelandic (266 sentence pairs, 3.16k words) - TMX format' href="download.php?f=Tatoeba/de-is.tmx.gz">0.3k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='German-Italian (10,293 sentence pairs, 0.14M words) - TMX format' href="download.php?f=Tatoeba/de-it.tmx.gz">10.3k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='German-Japanese (27,864 sentence pairs, 0.23M words) - TMX format' href="download.php?f=Tatoeba/de-ja.tmx.gz">27.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Lojban (548 sentence pairs, 6.70k words) - TMX format' href="download.php?f=Tatoeba/de-jbo.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Korean (537 sentence pairs, 5.60k words) - TMX format' href="download.php?f=Tatoeba/de-ko.tmx.gz">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Kurdish (4 sentence pairs, 54 words) - TMX format' href="download.php?f=Tatoeba/de-ku.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Latin (1,387 sentence pairs, 14.21k words) - TMX format' href="download.php?f=Tatoeba/de-la.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Ladino (8 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/de-lad.tmx.gz">8</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Lithuanian (424 sentence pairs, 5.33k words) - TMX format' href="download.php?f=Tatoeba/de-lt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Latvian (28 sentence pairs, 0.24k words) - TMX format' href="download.php?f=Tatoeba/de-lv.tmx.gz">28</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-lzh (43 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/de-lzh.tmx.gz">43</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Maltese (64 sentence pairs, 0.34k words) - TMX format' href="download.php?f=Tatoeba/de-mt.tmx.gz">64</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='German-BokmÃ¥l, Norwegian (3,348 sentence pairs, 55.42k words) - TMX format' href="download.php?f=Tatoeba/de-nb.tmx.gz">3.3k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='German-Low German (16,308 sentence pairs, 0.21M words) - TMX format' href="download.php?f=Tatoeba/de-nds.tmx.gz">16.3k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='German-Dutch (10,812 sentence pairs, 0.14M words) - TMX format' href="download.php?f=Tatoeba/de-nl.tmx.gz">10.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Norse, Old (39 sentence pairs, 0.62k words) - TMX format' href="download.php?f=Tatoeba/de-non.tmx.gz">39</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Occitan (post 1500) (138 sentence pairs, 1.82k words) - TMX format' href="download.php?f=Tatoeba/de-oc.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-pes (184 sentence pairs, 2.53k words) - TMX format' href="download.php?f=Tatoeba/de-pes.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='German-Polish (6,100 sentence pairs, 72.15k words) - TMX format' href="download.php?f=Tatoeba/de-pl.tmx.gz">6.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-prg (37 sentence pairs, 0.43k words) - TMX format' href="download.php?f=Tatoeba/de-prg.tmx.gz">37</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='German-Portuguese (5,639 sentence pairs, 75.43k words) - TMX format' href="download.php?f=Tatoeba/de-pt.tmx.gz">5.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Romansh (13 sentence pairs, 0.18k words) - TMX format' href="download.php?f=Tatoeba/de-rm.tmx.gz">13</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Romanian (164 sentence pairs, 2.29k words) - TMX format' href="download.php?f=Tatoeba/de-ro.tmx.gz">0.2k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='German-Russian (26,178 sentence pairs, 0.33M words) - TMX format' href="download.php?f=Tatoeba/de-ru.tmx.gz">26.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Sicilian (4 sentence pairs, 71 words) - TMX format' href="download.php?f=Tatoeba/de-scn.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Slovenian (86 sentence pairs, 0.87k words) - TMX format' href="download.php?f=Tatoeba/de-sl.tmx.gz">86</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-Serbian (949 sentence pairs, 12.93k words) - TMX format' href="download.php?f=Tatoeba/de-sr.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='German-Swedish (1,905 sentence pairs, 23.22k words) - TMX format' href="download.php?f=Tatoeba/de-sv.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-swh (38 sentence pairs, 0.24k words) - TMX format' href="download.php?f=Tatoeba/de-swh.tmx.gz">38</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Thai (54 sentence pairs, 0.35k words) - TMX format' href="download.php?f=Tatoeba/de-th.tmx.gz">54</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Klingon (1,752 sentence pairs, 15.77k words) - TMX format' href="download.php?f=Tatoeba/de-tlh.tmx.gz">1.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='German-toki (607 sentence pairs, 7.94k words) - TMX format' href="download.php?f=Tatoeba/de-toki.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Tok Pisin (26 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/de-tpi.tmx.gz">26</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Turkish (3,573 sentence pairs, 35.33k words) - TMX format' href="download.php?f=Tatoeba/de-tr.tmx.gz">3.6k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='German-Tatar (2,377 sentence pairs, 30.79k words) - TMX format' href="download.php?f=Tatoeba/de-tt.tmx.gz">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Uighur (153 sentence pairs, 1.32k words) - TMX format' href="download.php?f=Tatoeba/de-ug.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='German-Ukrainian (1,707 sentence pairs, 18.28k words) - TMX format' href="download.php?f=Tatoeba/de-uk.tmx.gz">1.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Uzbek (21 sentence pairs, 0.18k words) - TMX format' href="download.php?f=Tatoeba/de-uz.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Vietnamese (309 sentence pairs, 4.86k words) - TMX format' href="download.php?f=Tatoeba/de-vi.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-VolapÃ¼k (142 sentence pairs, 1.28k words) - TMX format' href="download.php?f=Tatoeba/de-vo.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-wuu (23 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/de-wuu.tmx.gz">23</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-Yiddish (68 sentence pairs, 0.88k words) - TMX format' href="download.php?f=Tatoeba/de-yi.tmx.gz">68</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-yue (126 sentence pairs, 0.84k words) - TMX format' href="download.php?f=Tatoeba/de-yue.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='German-zsm (23 sentence pairs, 0.31k words) - TMX format' href="download.php?f=Tatoeba/de-zsm.tmx.gz">23</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized dsb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.dsb.gz">dsb</a>
</th><td>1</td> <td>2.2k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lower Sorbian-German (260 sentence pairs, 2.78k words) - Moses format' href="download.php?f=Tatoeba/de-dsb.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lower Sorbian-English (14 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/dsb-en.tmx.gz">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lower Sorbian-Esperanto (73 sentence pairs, 0.78k words) - TMX format' href="download.php?f=Tatoeba/dsb-eo.tmx.gz">73</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lower Sorbian-Japanese (1 sentence pairs, 9 words) - TMX format' href="download.php?f=Tatoeba/dsb-ja.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ee plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ee.gz">ee</a>
</th><td>1</td> <td>0.2k</td> <td>21</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ewe-English (1 sentence pairs, 21 words) - TMX format' href="download.php?f=Tatoeba/ee-en.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ewe-Japanese (2 sentence pairs, 17 words) - TMX format' href="download.php?f=Tatoeba/ee-ja.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized el plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.el.gz">el</a>
</th><td>1</td> <td>56.4k</td> <td>8.7k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Arabic (408 sentence pairs, 2.79k words) - Moses format' href="download.php?f=Tatoeba/ar-el.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-arz (10 sentence pairs, 58 words) - Moses format' href="download.php?f=Tatoeba/arz-el.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Bulgarian (47 sentence pairs, 0.41k words) - Moses format' href="download.php?f=Tatoeba/bg-el.txt.zip">47</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Catalan (46 sentence pairs, 0.43k words) - Moses format' href="download.php?f=Tatoeba/ca-el.txt.zip">46</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-cmn (8 sentence pairs, 45 words) - Moses format' href="download.php?f=Tatoeba/cmn-el.txt.zip">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Czech (13 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/cs-el.txt.zip">13</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Greek-German (4,073 sentence pairs, 44.96k words) - Moses format' href="download.php?f=Tatoeba/de-el.txt.zip">4.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Greek (61 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/el-el.txt.zip">61</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Greek-English (2,469 sentence pairs, 25.12k words) - TMX format' href="download.php?f=Tatoeba/el-en.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Esperanto (339 sentence pairs, 3.72k words) - TMX format' href="download.php?f=Tatoeba/el-eo.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Greek-Spanish (1,732 sentence pairs, 16.43k words) - TMX format' href="download.php?f=Tatoeba/el-es.tmx.gz">1.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-French (601 sentence pairs, 6.64k words) - TMX format' href="download.php?f=Tatoeba/el-fr.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Galician (5 sentence pairs, 52 words) - TMX format' href="download.php?f=Tatoeba/el-gl.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Italian (127 sentence pairs, 1.26k words) - TMX format' href="download.php?f=Tatoeba/el-it.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Japanese (13 sentence pairs, 79 words) - TMX format' href="download.php?f=Tatoeba/el-ja.tmx.gz">13</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Maltese (59 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/el-mt.tmx.gz">59</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-BokmÃ¥l, Norwegian (4 sentence pairs, 29 words) - TMX format' href="download.php?f=Tatoeba/el-nb.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Low German (25 sentence pairs, 0.18k words) - TMX format' href="download.php?f=Tatoeba/el-nds.tmx.gz">25</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Dutch (39 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/el-nl.tmx.gz">39</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-pes (6 sentence pairs, 37 words) - TMX format' href="download.php?f=Tatoeba/el-pes.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Polish (71 sentence pairs, 0.55k words) - TMX format' href="download.php?f=Tatoeba/el-pl.tmx.gz">71</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Portuguese (169 sentence pairs, 1.68k words) - TMX format' href="download.php?f=Tatoeba/el-pt.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Greek-Russian (2,344 sentence pairs, 24.74k words) - TMX format' href="download.php?f=Tatoeba/el-ru.tmx.gz">2.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Turkish (228 sentence pairs, 1.83k words) - TMX format' href="download.php?f=Tatoeba/el-tr.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Greek-Ukrainian (15 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/el-uk.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized en plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.en.gz">en</a>
</th><td>1</td> <td>3.6M</td> <td>0.4M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-acm (11 sentence pairs, 0.13k words) - Moses format' href="download.php?f=Tatoeba/acm-en.txt.zip">11</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Afrikaans (1,189 sentence pairs, 16.02k words) - Moses format' href="download.php?f=Tatoeba/af-en.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Ainu (12 sentence pairs, 97 words) - Moses format' href="download.php?f=Tatoeba/ain-en.txt.zip">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-English, Old (ca.450-1100) (130 sentence pairs, 2.61k words) - Moses format' href="download.php?f=Tatoeba/ang-en.txt.zip">0.1k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='English-Arabic (12,953 sentence pairs, 0.15M words) - Moses format' href="download.php?f=Tatoeba/ar-en.txt.zip">13.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-arq (379 sentence pairs, 3.80k words) - Moses format' href="download.php?f=Tatoeba/arq-en.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-arz (456 sentence pairs, 3.88k words) - Moses format' href="download.php?f=Tatoeba/arz-en.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Asturian (17 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/ast-en.txt.zip">17</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-avk (50 sentence pairs, 0.52k words) - Moses format' href="download.php?f=Tatoeba/avk-en.txt.zip">50</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Azerbaijani (392 sentence pairs, 3.29k words) - Moses format' href="download.php?f=Tatoeba/az-en.txt.zip">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='English-Belarusian (2,687 sentence pairs, 36.86k words) - Moses format' href="download.php?f=Tatoeba/be-en.txt.zip">2.7k</a>
</td><td bgcolor="#fff9f0"><a rel="nofollow" title='English-Berber languages) (46,879 sentence pairs, 0.57M words) - Moses format' href="download.php?f=Tatoeba/ber-en.txt.zip">46.9k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='English-Bulgarian (11,234 sentence pairs, 0.14M words) - Moses format' href="download.php?f=Tatoeba/bg-en.txt.zip">11.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Bengali (217 sentence pairs, 2.23k words) - Moses format' href="download.php?f=Tatoeba/bn-en.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Tibetan (36 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/bod-en.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Breton (98 sentence pairs, 0.84k words) - Moses format' href="download.php?f=Tatoeba/br-en.txt.zip">98</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Bosnian (284 sentence pairs, 2.53k words) - Moses format' href="download.php?f=Tatoeba/bs-en.txt.zip">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Catalan (973 sentence pairs, 13.37k words) - Moses format' href="download.php?f=Tatoeba/ca-en.txt.zip">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Chamorro (27 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/ch-en.txt.zip">27</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-ckt (1 sentence pairs, 6 words) - Moses format' href="download.php?f=Tatoeba/ckt-en.txt.zip">1</a>
</td><td bgcolor="#ffeae6"><a rel="nofollow" title='English-cmn (31,011 sentence pairs, 0.26M words) - Moses format' href="download.php?f=Tatoeba/cmn-en.txt.zip">31.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Czech (1,460 sentence pairs, 18.04k words) - Moses format' href="download.php?f=Tatoeba/cs-en.txt.zip">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Welsh (314 sentence pairs, 3.31k words) - Moses format' href="download.php?f=Tatoeba/cy-en.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-cycl (43 sentence pairs, 0.52k words) - Moses format' href="download.php?f=Tatoeba/cycl-en.txt.zip">43</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='English-Danish (8,713 sentence pairs, 0.11M words) - Moses format' href="download.php?f=Tatoeba/da-en.txt.zip">8.7k</a>
</td><td bgcolor="#faffdb"><a rel="nofollow" title='English-German (143,320 sentence pairs, 2.00M words) - Moses format' href="download.php?f=Tatoeba/de-en.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Lower Sorbian (14 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/dsb-en.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Ewe (1 sentence pairs, 21 words) - Moses format' href="download.php?f=Tatoeba/ee-en.txt.zip">1</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-Greek (2,486 sentence pairs, 25.25k words) - Moses format' href="download.php?f=Tatoeba/el-en.txt.zip">2.5k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='English-English (3,873 sentence pairs, 51.56k words) - Moses format' href="download.php?f=Tatoeba/en-en.txt.zip">3.9k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='English-Esperanto (109,579 sentence pairs, 1.49M words) - TMX format' href="download.php?f=Tatoeba/en-eo.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='English-Spanish (136,206 sentence pairs, 1.90M words) - TMX format' href="download.php?f=Tatoeba/en-es.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Estonian (679 sentence pairs, 7.07k words) - TMX format' href="download.php?f=Tatoeba/en-et.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Basque (361 sentence pairs, 4.45k words) - TMX format' href="download.php?f=Tatoeba/en-eu.tmx.gz">0.4k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='English-Finnish (12,207 sentence pairs, 0.15M words) - TMX format' href="download.php?f=Tatoeba/en-fi.tmx.gz">12.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Faroese (102 sentence pairs, 1.32k words) - TMX format' href="download.php?f=Tatoeba/en-fo.tmx.gz">0.1k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='English-French (144,385 sentence pairs, 2.11M words) - TMX format' href="download.php?f=Tatoeba/en-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Western Frisian (112 sentence pairs, 1.55k words) - TMX format' href="download.php?f=Tatoeba/en-fy.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Irish (501 sentence pairs, 5.37k words) - TMX format' href="download.php?f=Tatoeba/en-ga.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Gaelic (309 sentence pairs, 3.95k words) - TMX format' href="download.php?f=Tatoeba/en-gd.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Galician (800 sentence pairs, 11.52k words) - TMX format' href="download.php?f=Tatoeba/en-gl.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Guarani (81 sentence pairs, 1.08k words) - TMX format' href="download.php?f=Tatoeba/en-gn.tmx.gz">81</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='English-Hebrew (54,296 sentence pairs, 0.63M words) - TMX format' href="download.php?f=Tatoeba/en-he.tmx.gz">54.3k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='English-Hindi (4,697 sentence pairs, 65.53k words) - TMX format' href="download.php?f=Tatoeba/en-hi.tmx.gz">4.7k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Croatian (879 sentence pairs, 10.84k words) - TMX format' href="download.php?f=Tatoeba/en-hr.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Upper Sorbian (14 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/en-hsb.tmx.gz">14</a>
</td><td bgcolor="#ffdfde"><a rel="nofollow" title='English-Hungarian (9,975 sentence pairs, 0.12M words) - TMX format' href="download.php?f=Tatoeba/en-hu.tmx.gz">10.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Armenian (137 sentence pairs, 1.84k words) - TMX format' href="download.php?f=Tatoeba/en-hy.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='English-Interlingua (International Auxiliary Language Association) (3,034 sentence pairs, 48.84k words) - TMX format' href="download.php?f=Tatoeba/en-ia.tmx.gz">3.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Indonesian (1,467 sentence pairs, 19.75k words) - TMX format' href="download.php?f=Tatoeba/en-id.tmx.gz">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Interlingue (592 sentence pairs, 5.51k words) - TMX format' href="download.php?f=Tatoeba/en-ie.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-Ido (2,026 sentence pairs, 24.39k words) - TMX format' href="download.php?f=Tatoeba/en-io.tmx.gz">2.0k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='English-Icelandic (8,139 sentence pairs, 0.11M words) - TMX format' href="download.php?f=Tatoeba/en-is.tmx.gz">8.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='English-Italian (134,135 sentence pairs, 1.57M words) - TMX format' href="download.php?f=Tatoeba/en-it.tmx.gz">0.1M</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='English-Japanese (184,977 sentence pairs, 1.64M words) - TMX format' href="download.php?f=Tatoeba/en-ja.tmx.gz">0.2M</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='English-Lojban (7,867 sentence pairs, 97.47k words) - TMX format' href="download.php?f=Tatoeba/en-jbo.tmx.gz">7.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Georgian (361 sentence pairs, 3.13k words) - TMX format' href="download.php?f=Tatoeba/en-ka.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Kazakh (175 sentence pairs, 1.93k words) - TMX format' href="download.php?f=Tatoeba/en-kk.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Central Khmer (118 sentence pairs, 0.97k words) - TMX format' href="download.php?f=Tatoeba/en-km.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Korean (906 sentence pairs, 10.18k words) - TMX format' href="download.php?f=Tatoeba/en-ko.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-ksh (6 sentence pairs, 47 words) - TMX format' href="download.php?f=Tatoeba/en-ksh.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Kurdish (43 sentence pairs, 0.47k words) - TMX format' href="download.php?f=Tatoeba/en-ku.tmx.gz">43</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Cornish (122 sentence pairs, 1.04k words) - TMX format' href="download.php?f=Tatoeba/en-kw.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='English-Latin (6,970 sentence pairs, 67.56k words) - TMX format' href="download.php?f=Tatoeba/en-la.tmx.gz">7.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Ladino (40 sentence pairs, 0.48k words) - TMX format' href="download.php?f=Tatoeba/en-lad.tmx.gz">40</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-lld (12 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/en-lld.tmx.gz">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Lao (18 sentence pairs, 97 words) - TMX format' href="download.php?f=Tatoeba/en-lo.tmx.gz">18</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='English-Lithuanian (6,300 sentence pairs, 69.10k words) - TMX format' href="download.php?f=Tatoeba/en-lt.tmx.gz">6.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Latvian (1,039 sentence pairs, 10.74k words) - TMX format' href="download.php?f=Tatoeba/en-lv.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-lzh (474 sentence pairs, 4.53k words) - TMX format' href="download.php?f=Tatoeba/en-lzh.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Malagasy (19 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/en-mg.tmx.gz">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Maori (19 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/en-mi.tmx.gz">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Malayalam (668 sentence pairs, 6.93k words) - TMX format' href="download.php?f=Tatoeba/en-ml.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Mongolian (226 sentence pairs, 3.22k words) - TMX format' href="download.php?f=Tatoeba/en-mn.tmx.gz">0.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='English-Marathi (16,846 sentence pairs, 0.18M words) - TMX format' href="download.php?f=Tatoeba/en-mr.tmx.gz">16.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Maltese (107 sentence pairs, 0.72k words) - TMX format' href="download.php?f=Tatoeba/en-mt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-nan (7 sentence pairs, 52 words) - TMX format' href="download.php?f=Tatoeba/en-nan.tmx.gz">7</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='English-BokmÃ¥l, Norwegian (5,480 sentence pairs, 72.36k words) - TMX format' href="download.php?f=Tatoeba/en-nb.tmx.gz">5.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Low German (4,659 sentence pairs, 56.13k words) - TMX format' href="download.php?f=Tatoeba/en-nds.tmx.gz">4.7k</a>
</td><td bgcolor="#ffe9e6"><a rel="nofollow" title='English-Dutch (17,996 sentence pairs, 0.24M words) - TMX format' href="download.php?f=Tatoeba/en-nl.tmx.gz">18.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Norse, Old (377 sentence pairs, 5.25k words) - TMX format' href="download.php?f=Tatoeba/en-non.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-nov (104 sentence pairs, 1.33k words) - TMX format' href="download.php?f=Tatoeba/en-nov.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-npi (10 sentence pairs, 74 words) - TMX format' href="download.php?f=Tatoeba/en-npi.tmx.gz">10</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Occitan (post 1500) (774 sentence pairs, 8.14k words) - TMX format' href="download.php?f=Tatoeba/en-oc.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-orv (247 sentence pairs, 2.23k words) - TMX format' href="download.php?f=Tatoeba/en-orv.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Ossetian (41 sentence pairs, 0.41k words) - TMX format' href="download.php?f=Tatoeba/en-os.tmx.gz">41</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='English-pes (2,757 sentence pairs, 42.58k words) - TMX format' href="download.php?f=Tatoeba/en-pes.tmx.gz">2.8k</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='English-Polish (21,525 sentence pairs, 0.27M words) - TMX format' href="download.php?f=Tatoeba/en-pl.tmx.gz">21.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-pms (11 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/en-pms.tmx.gz">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-pnb (20 sentence pairs, 0.25k words) - TMX format' href="download.php?f=Tatoeba/en-pnb.tmx.gz">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-prg (130 sentence pairs, 1.72k words) - TMX format' href="download.php?f=Tatoeba/en-prg.tmx.gz">0.1k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='English-Portuguese (60,620 sentence pairs, 0.81M words) - TMX format' href="download.php?f=Tatoeba/en-pt.tmx.gz">60.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Quechua (196 sentence pairs, 1.64k words) - TMX format' href="download.php?f=Tatoeba/en-qu.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-qya (105 sentence pairs, 0.68k words) - TMX format' href="download.php?f=Tatoeba/en-qya.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Romansh (11 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/en-rm.tmx.gz">11</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='English-Romanian (3,535 sentence pairs, 52.11k words) - TMX format' href="download.php?f=Tatoeba/en-ro.tmx.gz">3.5k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='English-Russian (97,214 sentence pairs, 1.19M words) - TMX format' href="download.php?f=Tatoeba/en-ru.tmx.gz">97.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Sicilian (3 sentence pairs, 40 words) - TMX format' href="download.php?f=Tatoeba/en-scn.tmx.gz">3</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-sjn (32 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/en-sjn.tmx.gz">32</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Slovenian (1,374 sentence pairs, 15.31k words) - TMX format' href="download.php?f=Tatoeba/en-sl.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Albanian (233 sentence pairs, 3.95k words) - TMX format' href="download.php?f=Tatoeba/en-sq.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-Serbian (733 sentence pairs, 8.06k words) - TMX format' href="download.php?f=Tatoeba/en-sr.tmx.gz">0.7k</a>
</td><td bgcolor="#ffdedd"><a rel="nofollow" title='English-Swedish (9,817 sentence pairs, 0.11M words) - TMX format' href="download.php?f=Tatoeba/en-sv.tmx.gz">9.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-swh (127 sentence pairs, 1.40k words) - TMX format' href="download.php?f=Tatoeba/en-swh.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Telugu (47 sentence pairs, 0.37k words) - TMX format' href="download.php?f=Tatoeba/en-te.tmx.gz">47</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Thai (173 sentence pairs, 1.20k words) - TMX format' href="download.php?f=Tatoeba/en-th.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='English-Tagalog (4,912 sentence pairs, 64.01k words) - TMX format' href="download.php?f=Tatoeba/en-tl.tmx.gz">4.9k</a>
</td><td bgcolor="#ffd8d8"><a rel="nofollow" title='English-Klingon (6,535 sentence pairs, 60.80k words) - TMX format' href="download.php?f=Tatoeba/en-tlh.tmx.gz">6.5k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-toki (1,233 sentence pairs, 16.15k words) - TMX format' href="download.php?f=Tatoeba/en-toki.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Tok Pisin (36 sentence pairs, 0.23k words) - TMX format' href="download.php?f=Tatoeba/en-tpi.tmx.gz">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-tpw (28 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/en-tpw.tmx.gz">28</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='English-Turkish (156,231 sentence pairs, 1.73M words) - TMX format' href="download.php?f=Tatoeba/en-tr.tmx.gz">0.2M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Tatar (362 sentence pairs, 3.46k words) - TMX format' href="download.php?f=Tatoeba/en-tt.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='English-Uighur (3,651 sentence pairs, 38.99k words) - TMX format' href="download.php?f=Tatoeba/en-ug.tmx.gz">3.7k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='English-Ukrainian (17,437 sentence pairs, 0.21M words) - TMX format' href="download.php?f=Tatoeba/en-uk.tmx.gz">17.4k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='English-Urdu (1,273 sentence pairs, 17.18k words) - TMX format' href="download.php?f=Tatoeba/en-ur.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Uzbek (232 sentence pairs, 1.92k words) - TMX format' href="download.php?f=Tatoeba/en-uz.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='English-Vietnamese (2,166 sentence pairs, 35.28k words) - TMX format' href="download.php?f=Tatoeba/en-vi.tmx.gz">2.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-VolapÃ¼k (441 sentence pairs, 4.21k words) - TMX format' href="download.php?f=Tatoeba/en-vo.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-wuu (1,062 sentence pairs, 8.12k words) - TMX format' href="download.php?f=Tatoeba/en-wuu.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Kalmyk (264 sentence pairs, 2.95k words) - TMX format' href="download.php?f=Tatoeba/en-xal.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Xhosa (99 sentence pairs, 0.76k words) - TMX format' href="download.php?f=Tatoeba/en-xh.tmx.gz">99</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='English-Yiddish (193 sentence pairs, 2.62k words) - TMX format' href="download.php?f=Tatoeba/en-yi.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='English-yue (2,601 sentence pairs, 22.57k words) - TMX format' href="download.php?f=Tatoeba/en-yue.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='English-zsm (566 sentence pairs, 7.40k words) - TMX format' href="download.php?f=Tatoeba/en-zsm.tmx.gz">0.6k</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.eo.gz">eo</a>
</th><td>1</td> <td>2.6M</td> <td>0.3M</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Afrikaans (642 sentence pairs, 8.13k words) - Moses format' href="download.php?f=Tatoeba/af-eo.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-English, Old (ca.450-1100) (36 sentence pairs, 0.47k words) - Moses format' href="download.php?f=Tatoeba/ang-eo.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Arabic (291 sentence pairs, 2.82k words) - Moses format' href="download.php?f=Tatoeba/ar-eo.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Belarusian (591 sentence pairs, 7.05k words) - Moses format' href="download.php?f=Tatoeba/be-eo.txt.zip">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Berber languages) (1,373 sentence pairs, 15.43k words) - Moses format' href="download.php?f=Tatoeba/ber-eo.txt.zip">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Bulgarian (509 sentence pairs, 5.91k words) - Moses format' href="download.php?f=Tatoeba/bg-eo.txt.zip">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Breton (115 sentence pairs, 0.99k words) - Moses format' href="download.php?f=Tatoeba/br-eo.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Catalan (438 sentence pairs, 5.75k words) - Moses format' href="download.php?f=Tatoeba/ca-eo.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-cmn (2,959 sentence pairs, 20.05k words) - Moses format' href="download.php?f=Tatoeba/cmn-eo.txt.zip">3.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Czech (1,821 sentence pairs, 21.21k words) - Moses format' href="download.php?f=Tatoeba/cs-eo.txt.zip">1.8k</a>
</td><td></td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Esperanto-Danish (10,312 sentence pairs, 0.13M words) - Moses format' href="download.php?f=Tatoeba/da-eo.txt.zip">10.3k</a>
</td><td bgcolor="#ffffe3"><a rel="nofollow" title='Esperanto-German (114,493 sentence pairs, 1.77M words) - Moses format' href="download.php?f=Tatoeba/de-eo.txt.zip">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Lower Sorbian (73 sentence pairs, 0.78k words) - Moses format' href="download.php?f=Tatoeba/dsb-eo.txt.zip">73</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Greek (340 sentence pairs, 3.73k words) - Moses format' href="download.php?f=Tatoeba/el-eo.txt.zip">0.3k</a>
</td><td bgcolor="#ffffe8"><a rel="nofollow" title='Esperanto-English (109,756 sentence pairs, 1.49M words) - Moses format' href="download.php?f=Tatoeba/en-eo.txt.zip">0.1M</a>
</td><td bgcolor="#ffdbda"><a rel="nofollow" title='Esperanto-Esperanto (6,930 sentence pairs, 90.27k words) - Moses format' href="download.php?f=Tatoeba/eo-eo.txt.zip">6.9k</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Esperanto-Spanish (51,404 sentence pairs, 0.68M words) - TMX format' href="download.php?f=Tatoeba/eo-es.tmx.gz">51.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Basque (59 sentence pairs, 0.54k words) - TMX format' href="download.php?f=Tatoeba/eo-eu.tmx.gz">59</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Finnish (736 sentence pairs, 8.35k words) - TMX format' href="download.php?f=Tatoeba/eo-fi.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Faroese (4 sentence pairs, 85 words) - TMX format' href="download.php?f=Tatoeba/eo-fo.tmx.gz">4</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Esperanto-French (120,817 sentence pairs, 1.74M words) - TMX format' href="download.php?f=Tatoeba/eo-fr.tmx.gz">0.1M</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Western Frisian (11 sentence pairs, 0.13k words) - TMX format' href="download.php?f=Tatoeba/eo-fy.tmx.gz">11</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffeae7"><a rel="nofollow" title='Esperanto-Hebrew (20,860 sentence pairs, 0.25M words) - TMX format' href="download.php?f=Tatoeba/eo-he.tmx.gz">20.9k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Croatian (750 sentence pairs, 9.29k words) - TMX format' href="download.php?f=Tatoeba/eo-hr.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Upper Sorbian (87 sentence pairs, 0.97k words) - TMX format' href="download.php?f=Tatoeba/eo-hsb.tmx.gz">87</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Esperanto-Hungarian (15,450 sentence pairs, 0.19M words) - TMX format' href="download.php?f=Tatoeba/eo-hu.tmx.gz">15.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Armenian (6 sentence pairs, 55 words) - TMX format' href="download.php?f=Tatoeba/eo-hy.tmx.gz">6</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Interlingua (International Auxiliary Language Association) (1,005 sentence pairs, 14.73k words) - TMX format' href="download.php?f=Tatoeba/eo-ia.tmx.gz">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Indonesian (156 sentence pairs, 2.03k words) - TMX format' href="download.php?f=Tatoeba/eo-id.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Interlingue (98 sentence pairs, 0.87k words) - TMX format' href="download.php?f=Tatoeba/eo-ie.tmx.gz">98</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Ido (840 sentence pairs, 9.27k words) - TMX format' href="download.php?f=Tatoeba/eo-io.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Icelandic (222 sentence pairs, 2.48k words) - TMX format' href="download.php?f=Tatoeba/eo-is.tmx.gz">0.2k</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Esperanto-Italian (14,361 sentence pairs, 0.20M words) - TMX format' href="download.php?f=Tatoeba/eo-it.tmx.gz">14.4k</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Esperanto-Japanese (7,239 sentence pairs, 50.74k words) - TMX format' href="download.php?f=Tatoeba/eo-ja.tmx.gz">7.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Lojban (1,090 sentence pairs, 12.44k words) - TMX format' href="download.php?f=Tatoeba/eo-jbo.tmx.gz">1.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Kazakh (48 sentence pairs, 0.51k words) - TMX format' href="download.php?f=Tatoeba/eo-kk.tmx.gz">48</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Korean (82 sentence pairs, 0.82k words) - TMX format' href="download.php?f=Tatoeba/eo-ko.tmx.gz">82</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Esperanto-Latin (2,960 sentence pairs, 29.75k words) - TMX format' href="download.php?f=Tatoeba/eo-la.tmx.gz">3.0k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Lithuanian (101 sentence pairs, 1.07k words) - TMX format' href="download.php?f=Tatoeba/eo-lt.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Esperanto-BokmÃ¥l, Norwegian (3,298 sentence pairs, 53.76k words) - TMX format' href="download.php?f=Tatoeba/eo-nb.tmx.gz">3.3k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Esperanto-Low German (2,468 sentence pairs, 28.15k words) - TMX format' href="download.php?f=Tatoeba/eo-nds.tmx.gz">2.5k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Esperanto-Dutch (28,741 sentence pairs, 0.39M words) - TMX format' href="download.php?f=Tatoeba/eo-nl.tmx.gz">28.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Norse, Old (36 sentence pairs, 0.53k words) - TMX format' href="download.php?f=Tatoeba/eo-non.tmx.gz">36</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-orv (22 sentence pairs, 0.21k words) - TMX format' href="download.php?f=Tatoeba/eo-orv.tmx.gz">22</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Ossetian (43 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/eo-os.tmx.gz">43</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='Esperanto-pes (9,683 sentence pairs, 0.13M words) - TMX format' href="download.php?f=Tatoeba/eo-pes.tmx.gz">9.7k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Esperanto-Polish (5,697 sentence pairs, 64.21k words) - TMX format' href="download.php?f=Tatoeba/eo-pl.tmx.gz">5.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#fff1ec"><a rel="nofollow" title='Esperanto-Portuguese (26,320 sentence pairs, 0.36M words) - TMX format' href="download.php?f=Tatoeba/eo-pt.tmx.gz">26.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Romanian (165 sentence pairs, 2.48k words) - TMX format' href="download.php?f=Tatoeba/eo-ro.tmx.gz">0.2k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Esperanto-Russian (25,179 sentence pairs, 0.33M words) - TMX format' href="download.php?f=Tatoeba/eo-ru.tmx.gz">25.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Swedish (875 sentence pairs, 9.92k words) - TMX format' href="download.php?f=Tatoeba/eo-sv.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-swh (41 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/eo-swh.tmx.gz">41</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Thai (47 sentence pairs, 0.30k words) - TMX format' href="download.php?f=Tatoeba/eo-th.tmx.gz">47</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Tagalog (1,054 sentence pairs, 13.84k words) - TMX format' href="download.php?f=Tatoeba/eo-tl.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Klingon (1,334 sentence pairs, 11.61k words) - TMX format' href="download.php?f=Tatoeba/eo-tlh.tmx.gz">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-toki (350 sentence pairs, 4.07k words) - TMX format' href="download.php?f=Tatoeba/eo-toki.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Tok Pisin (11 sentence pairs, 100 words) - TMX format' href="download.php?f=Tatoeba/eo-tpi.tmx.gz">11</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Esperanto-Turkish (4,126 sentence pairs, 39.59k words) - TMX format' href="download.php?f=Tatoeba/eo-tr.tmx.gz">4.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-Tatar (86 sentence pairs, 0.69k words) - TMX format' href="download.php?f=Tatoeba/eo-tt.tmx.gz">86</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Esperanto-Ukrainian (924 sentence pairs, 10.43k words) - TMX format' href="download.php?f=Tatoeba/eo-uk.tmx.gz">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Esperanto-Vietnamese (1,432 sentence pairs, 21.09k words) - TMX format' href="download.php?f=Tatoeba/eo-vi.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Esperanto-VolapÃ¼k (378 sentence pairs, 3.41k words) - TMX format' href="download.php?f=Tatoeba/eo-vo.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized es plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.es.gz">es</a>
</th><td>1</td> <td>1.7M</td> <td>0.2M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Afrikaans (154 sentence pairs, 1.73k words) - Moses format' href="download.php?f=Tatoeba/af-es.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-English, Old (ca.450-1100) (11 sentence pairs, 0.20k words) - Moses format' href="download.php?f=Tatoeba/ang-es.txt.zip">11</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Arabic (1,867 sentence pairs, 17.93k words) - Moses format' href="download.php?f=Tatoeba/ar-es.txt.zip">1.9k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Asturian (30 sentence pairs, 0.34k words) - Moses format' href="download.php?f=Tatoeba/ast-es.txt.zip">30</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-avk (101 sentence pairs, 1.15k words) - Moses format' href="download.php?f=Tatoeba/avk-es.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Belarusian (116 sentence pairs, 1.31k words) - Moses format' href="download.php?f=Tatoeba/be-es.txt.zip">0.1k</a>
</td><td bgcolor="#ffdddc"><a rel="nofollow" title='Spanish-Berber languages) (9,163 sentence pairs, 0.10M words) - Moses format' href="download.php?f=Tatoeba/ber-es.txt.zip">9.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Bulgarian (124 sentence pairs, 1.47k words) - Moses format' href="download.php?f=Tatoeba/bg-es.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Bosnian (23 sentence pairs, 0.17k words) - Moses format' href="download.php?f=Tatoeba/bs-es.txt.zip">23</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Catalan (2,191 sentence pairs, 30.43k words) - Moses format' href="download.php?f=Tatoeba/ca-es.txt.zip">2.2k</a>
</td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-cmn (5,104 sentence pairs, 32.60k words) - Moses format' href="download.php?f=Tatoeba/cmn-es.txt.zip">5.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Czech (93 sentence pairs, 1.08k words) - Moses format' href="download.php?f=Tatoeba/cs-es.txt.zip">93</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Welsh (1 sentence pairs, 4 words) - Moses format' href="download.php?f=Tatoeba/cy-es.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-cycl (3 sentence pairs, 30 words) - Moses format' href="download.php?f=Tatoeba/cycl-es.txt.zip">3</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Spanish-Danish (8,117 sentence pairs, 97.55k words) - Moses format' href="download.php?f=Tatoeba/da-es.txt.zip">8.1k</a>
</td><td bgcolor="#fffef1"><a rel="nofollow" title='Spanish-German (63,364 sentence pairs, 0.86M words) - Moses format' href="download.php?f=Tatoeba/de-es.txt.zip">63.4k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Greek (1,733 sentence pairs, 16.43k words) - Moses format' href="download.php?f=Tatoeba/el-es.txt.zip">1.7k</a>
</td><td bgcolor="#ffffe1"><a rel="nofollow" title='Spanish-English (136,355 sentence pairs, 1.90M words) - Moses format' href="download.php?f=Tatoeba/en-es.txt.zip">0.1M</a>
</td><td bgcolor="#fffbf1"><a rel="nofollow" title='Spanish-Esperanto (51,456 sentence pairs, 0.68M words) - Moses format' href="download.php?f=Tatoeba/eo-es.txt.zip">51.5k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Spanish-Spanish (2,605 sentence pairs, 37.59k words) - Moses format' href="download.php?f=Tatoeba/es-es.txt.zip">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Estonian (10 sentence pairs, 60 words) - TMX format' href="download.php?f=Tatoeba/es-et.tmx.gz">10</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Basque (898 sentence pairs, 9.61k words) - TMX format' href="download.php?f=Tatoeba/es-eu.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Finnish (1,621 sentence pairs, 17.65k words) - TMX format' href="download.php?f=Tatoeba/es-fi.tmx.gz">1.6k</a>
</td><td></td><td bgcolor="#fff6ef"><a rel="nofollow" title='Spanish-French (33,729 sentence pairs, 0.46M words) - TMX format' href="download.php?f=Tatoeba/es-fr.tmx.gz">33.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Western Frisian (29 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/es-fy.tmx.gz">29</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Gaelic (143 sentence pairs, 1.53k words) - TMX format' href="download.php?f=Tatoeba/es-gd.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Spanish-Galician (2,792 sentence pairs, 37.88k words) - TMX format' href="download.php?f=Tatoeba/es-gl.tmx.gz">2.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Guarani (149 sentence pairs, 1.89k words) - TMX format' href="download.php?f=Tatoeba/es-gn.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Hebrew (2,478 sentence pairs, 29.70k words) - TMX format' href="download.php?f=Tatoeba/es-he.tmx.gz">2.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Hindi (25 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/es-hi.tmx.gz">25</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Croatian (159 sentence pairs, 1.61k words) - TMX format' href="download.php?f=Tatoeba/es-hr.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-Hungarian (899 sentence pairs, 9.93k words) - TMX format' href="download.php?f=Tatoeba/es-hu.tmx.gz">0.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Interlingua (International Auxiliary Language Association) (387 sentence pairs, 5.23k words) - TMX format' href="download.php?f=Tatoeba/es-ia.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Indonesian (58 sentence pairs, 0.69k words) - TMX format' href="download.php?f=Tatoeba/es-id.tmx.gz">58</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Ido (373 sentence pairs, 4.22k words) - TMX format' href="download.php?f=Tatoeba/es-io.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Icelandic (81 sentence pairs, 0.83k words) - TMX format' href="download.php?f=Tatoeba/es-is.tmx.gz">81</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Spanish-Italian (8,355 sentence pairs, 0.10M words) - TMX format' href="download.php?f=Tatoeba/es-it.tmx.gz">8.4k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Spanish-Japanese (27,890 sentence pairs, 0.21M words) - TMX format' href="download.php?f=Tatoeba/es-ja.tmx.gz">27.9k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Spanish-Lojban (1,450 sentence pairs, 16.70k words) - TMX format' href="download.php?f=Tatoeba/es-jbo.tmx.gz">1.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Korean (380 sentence pairs, 4.33k words) - TMX format' href="download.php?f=Tatoeba/es-ko.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Latin (2,262 sentence pairs, 22.35k words) - TMX format' href="download.php?f=Tatoeba/es-la.tmx.gz">2.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-lld (3 sentence pairs, 28 words) - TMX format' href="download.php?f=Tatoeba/es-lld.tmx.gz">3</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Lithuanian (107 sentence pairs, 1.17k words) - TMX format' href="download.php?f=Tatoeba/es-lt.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-lzh (12 sentence pairs, 74 words) - TMX format' href="download.php?f=Tatoeba/es-lzh.tmx.gz">12</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Mongolian (12 sentence pairs, 0.13k words) - TMX format' href="download.php?f=Tatoeba/es-mn.tmx.gz">12</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Maltese (72 sentence pairs, 0.36k words) - TMX format' href="download.php?f=Tatoeba/es-mt.tmx.gz">72</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Spanish-BokmÃ¥l, Norwegian (646 sentence pairs, 8.90k words) - TMX format' href="download.php?f=Tatoeba/es-nb.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Low German (641 sentence pairs, 6.53k words) - TMX format' href="download.php?f=Tatoeba/es-nds.tmx.gz">0.6k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Spanish-Dutch (18,541 sentence pairs, 0.25M words) - TMX format' href="download.php?f=Tatoeba/es-nl.tmx.gz">18.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Norse, Old (28 sentence pairs, 0.38k words) - TMX format' href="download.php?f=Tatoeba/es-non.tmx.gz">28</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Occitan (post 1500) (58 sentence pairs, 0.81k words) - TMX format' href="download.php?f=Tatoeba/es-oc.tmx.gz">58</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-pes (70 sentence pairs, 0.88k words) - TMX format' href="download.php?f=Tatoeba/es-pes.tmx.gz">70</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Spanish-Polish (2,915 sentence pairs, 34.52k words) - TMX format' href="download.php?f=Tatoeba/es-pl.tmx.gz">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-pms (8 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/es-pms.tmx.gz">8</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-prg (17 sentence pairs, 0.21k words) - TMX format' href="download.php?f=Tatoeba/es-prg.tmx.gz">17</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Spanish-Portuguese (52,975 sentence pairs, 0.70M words) - TMX format' href="download.php?f=Tatoeba/es-pt.tmx.gz">53.0k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Romansh (3 sentence pairs, 29 words) - TMX format' href="download.php?f=Tatoeba/es-rm.tmx.gz">3</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Romanian (188 sentence pairs, 2.84k words) - TMX format' href="download.php?f=Tatoeba/es-ro.tmx.gz">0.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Spanish-Russian (15,259 sentence pairs, 0.18M words) - TMX format' href="download.php?f=Tatoeba/es-ru.tmx.gz">15.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Sicilian (4 sentence pairs, 55 words) - TMX format' href="download.php?f=Tatoeba/es-scn.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Slovenian (49 sentence pairs, 0.48k words) - TMX format' href="download.php?f=Tatoeba/es-sl.tmx.gz">49</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Serbian (102 sentence pairs, 0.98k words) - TMX format' href="download.php?f=Tatoeba/es-sr.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Swedish (399 sentence pairs, 4.38k words) - TMX format' href="download.php?f=Tatoeba/es-sv.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Tagalog (428 sentence pairs, 5.12k words) - TMX format' href="download.php?f=Tatoeba/es-tl.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Klingon (223 sentence pairs, 1.78k words) - TMX format' href="download.php?f=Tatoeba/es-tlh.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-toki (101 sentence pairs, 0.93k words) - TMX format' href="download.php?f=Tatoeba/es-toki.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-tpw (7 sentence pairs, 34 words) - TMX format' href="download.php?f=Tatoeba/es-tpw.tmx.gz">7</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Spanish-Turkish (17,623 sentence pairs, 0.16M words) - TMX format' href="download.php?f=Tatoeba/es-tr.tmx.gz">17.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Tatar (37 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/es-tt.tmx.gz">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Uighur (37 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/es-ug.tmx.gz">37</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Spanish-Ukrainian (2,361 sentence pairs, 24.42k words) - TMX format' href="download.php?f=Tatoeba/es-uk.tmx.gz">2.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Vietnamese (309 sentence pairs, 4.41k words) - TMX format' href="download.php?f=Tatoeba/es-vi.tmx.gz">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-wuu (106 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/es-wuu.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-Yiddish (11 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/es-yi.tmx.gz">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-yue (36 sentence pairs, 0.23k words) - TMX format' href="download.php?f=Tatoeba/es-yue.tmx.gz">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Spanish-zsm (23 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/es-zsm.tmx.gz">23</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized et plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.et.gz">et</a>
</th><td>1</td> <td>6.3k</td> <td>1.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-German (53 sentence pairs, 0.56k words) - Moses format' href="download.php?f=Tatoeba/de-et.txt.zip">53</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Estonian-English (680 sentence pairs, 7.08k words) - Moses format' href="download.php?f=Tatoeba/en-et.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Spanish (10 sentence pairs, 60 words) - Moses format' href="download.php?f=Tatoeba/es-et.txt.zip">10</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Finnish (33 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/et-fi.tmx.gz">33</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-French (6 sentence pairs, 0.10k words) - TMX format' href="download.php?f=Tatoeba/et-fr.tmx.gz">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Japanese (49 sentence pairs, 0.41k words) - TMX format' href="download.php?f=Tatoeba/et-ja.tmx.gz">49</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Estonian-Russian (224 sentence pairs, 2.43k words) - TMX format' href="download.php?f=Tatoeba/et-ru.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized eu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.eu.gz">eu</a>
</th><td>1</td> <td>11.2k</td> <td>1.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-cmn (70 sentence pairs, 0.36k words) - Moses format' href="download.php?f=Tatoeba/cmn-eu.txt.zip">70</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-German (48 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/de-eu.txt.zip">48</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-English (361 sentence pairs, 4.45k words) - Moses format' href="download.php?f=Tatoeba/en-eu.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Esperanto (59 sentence pairs, 0.54k words) - Moses format' href="download.php?f=Tatoeba/eo-eu.txt.zip">59</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Basque-Spanish (902 sentence pairs, 9.64k words) - Moses format' href="download.php?f=Tatoeba/es-eu.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-French (92 sentence pairs, 1.13k words) - TMX format' href="download.php?f=Tatoeba/eu-fr.tmx.gz">92</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Italian (37 sentence pairs, 0.39k words) - TMX format' href="download.php?f=Tatoeba/eu-it.tmx.gz">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Japanese (49 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/eu-ja.tmx.gz">49</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Basque-Russian (10 sentence pairs, 79 words) - TMX format' href="download.php?f=Tatoeba/eu-ru.tmx.gz">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.fi.gz">fi</a>
</th><td>1</td> <td>0.1M</td> <td>21.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Bulgarian (3 sentence pairs, 27 words) - Moses format' href="download.php?f=Tatoeba/bg-fi.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Catalan (2 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/ca-fi.txt.zip">2</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-cmn (95 sentence pairs, 0.48k words) - Moses format' href="download.php?f=Tatoeba/cmn-fi.txt.zip">95</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Czech (6 sentence pairs, 40 words) - Moses format' href="download.php?f=Tatoeba/cs-fi.txt.zip">6</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Danish (117 sentence pairs, 1.13k words) - Moses format' href="download.php?f=Tatoeba/da-fi.txt.zip">0.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Finnish-German (3,164 sentence pairs, 34.69k words) - Moses format' href="download.php?f=Tatoeba/de-fi.txt.zip">3.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffe1df"><a rel="nofollow" title='Finnish-English (12,235 sentence pairs, 0.15M words) - Moses format' href="download.php?f=Tatoeba/en-fi.txt.zip">12.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Finnish-Esperanto (736 sentence pairs, 8.35k words) - Moses format' href="download.php?f=Tatoeba/eo-fi.txt.zip">0.7k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Spanish (1,628 sentence pairs, 17.71k words) - Moses format' href="download.php?f=Tatoeba/es-fi.txt.zip">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Estonian (33 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/et-fi.txt.zip">33</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Finnish (73 sentence pairs, 0.64k words) - Moses format' href="download.php?f=Tatoeba/fi-fi.txt.zip">73</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-French (450 sentence pairs, 5.00k words) - TMX format' href="download.php?f=Tatoeba/fi-fr.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Hebrew (194 sentence pairs, 2.01k words) - TMX format' href="download.php?f=Tatoeba/fi-he.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Hungarian (24 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/fi-hu.tmx.gz">24</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Interlingua (International Auxiliary Language Association) (4 sentence pairs, 45 words) - TMX format' href="download.php?f=Tatoeba/fi-ia.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Indonesian (9 sentence pairs, 70 words) - TMX format' href="download.php?f=Tatoeba/fi-id.tmx.gz">9</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Italian (108 sentence pairs, 1.22k words) - TMX format' href="download.php?f=Tatoeba/fi-it.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Japanese (2,377 sentence pairs, 15.12k words) - TMX format' href="download.php?f=Tatoeba/fi-ja.tmx.gz">2.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Korean (206 sentence pairs, 1.67k words) - TMX format' href="download.php?f=Tatoeba/fi-ko.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Dutch (97 sentence pairs, 0.88k words) - TMX format' href="download.php?f=Tatoeba/fi-nl.tmx.gz">97</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Polish (128 sentence pairs, 1.27k words) - TMX format' href="download.php?f=Tatoeba/fi-pl.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Portuguese (81 sentence pairs, 0.75k words) - TMX format' href="download.php?f=Tatoeba/fi-pt.tmx.gz">81</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Romanian (4 sentence pairs, 32 words) - TMX format' href="download.php?f=Tatoeba/fi-ro.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Russian (698 sentence pairs, 6.95k words) - TMX format' href="download.php?f=Tatoeba/fi-ru.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Finnish-Swedish (5,225 sentence pairs, 53.37k words) - TMX format' href="download.php?f=Tatoeba/fi-sv.tmx.gz">5.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Finnish-Turkish (1,607 sentence pairs, 15.04k words) - TMX format' href="download.php?f=Tatoeba/fi-tr.tmx.gz">1.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Finnish-Vietnamese (1 sentence pairs, 10 words) - TMX format' href="download.php?f=Tatoeba/fi-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.fo.gz">fo</a>
</th><td>1</td> <td>0.9k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-cmn (1 sentence pairs, 26 words) - Moses format' href="download.php?f=Tatoeba/cmn-fo.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-Czech (1 sentence pairs, 50 words) - Moses format' href="download.php?f=Tatoeba/cs-fo.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-English (102 sentence pairs, 1.32k words) - Moses format' href="download.php?f=Tatoeba/en-fo.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-Esperanto (4 sentence pairs, 85 words) - Moses format' href="download.php?f=Tatoeba/eo-fo.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-French (1 sentence pairs, 59 words) - TMX format' href="download.php?f=Tatoeba/fo-fr.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Faroese-Turkish (2 sentence pairs, 54 words) - TMX format' href="download.php?f=Tatoeba/fo-tr.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.fr.gz">fr</a>
</th><td>1</td> <td>1.3M</td> <td>0.2M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Afrikaans (100 sentence pairs, 1.13k words) - Moses format' href="download.php?f=Tatoeba/af-fr.txt.zip">100</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Ainu (6 sentence pairs, 40 words) - Moses format' href="download.php?f=Tatoeba/ain-fr.txt.zip">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-English, Old (ca.450-1100) (35 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/ang-fr.txt.zip">35</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Arabic (564 sentence pairs, 6.07k words) - Moses format' href="download.php?f=Tatoeba/ar-fr.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-arq (163 sentence pairs, 1.83k words) - Moses format' href="download.php?f=Tatoeba/arq-fr.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Asturian (5 sentence pairs, 46 words) - Moses format' href="download.php?f=Tatoeba/ast-fr.txt.zip">5</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-avk (895 sentence pairs, 11.42k words) - Moses format' href="download.php?f=Tatoeba/avk-fr.txt.zip">0.9k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Belarusian (86 sentence pairs, 1.00k words) - Moses format' href="download.php?f=Tatoeba/be-fr.txt.zip">86</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='French-Berber languages) (30,176 sentence pairs, 0.28M words) - Moses format' href="download.php?f=Tatoeba/ber-fr.txt.zip">30.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Bulgarian (192 sentence pairs, 2.26k words) - Moses format' href="download.php?f=Tatoeba/bg-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Bengali (4 sentence pairs, 35 words) - Moses format' href="download.php?f=Tatoeba/bn-fr.txt.zip">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Breton (222 sentence pairs, 2.40k words) - Moses format' href="download.php?f=Tatoeba/br-fr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Bosnian (32 sentence pairs, 0.26k words) - Moses format' href="download.php?f=Tatoeba/bs-fr.txt.zip">32</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Catalan (525 sentence pairs, 7.16k words) - Moses format' href="download.php?f=Tatoeba/ca-fr.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Chamorro (1 sentence pairs, 5 words) - Moses format' href="download.php?f=Tatoeba/ch-fr.txt.zip">1</a>
</td><td></td><td bgcolor="#ffdfdd"><a rel="nofollow" title='French-cmn (15,242 sentence pairs, 0.13M words) - Moses format' href="download.php?f=Tatoeba/cmn-fr.txt.zip">15.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Czech (130 sentence pairs, 1.67k words) - Moses format' href="download.php?f=Tatoeba/cs-fr.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Welsh (9 sentence pairs, 63 words) - Moses format' href="download.php?f=Tatoeba/cy-fr.txt.zip">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-cycl (15 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/cycl-fr.txt.zip">15</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Danish (994 sentence pairs, 11.38k words) - Moses format' href="download.php?f=Tatoeba/da-fr.txt.zip">1.0k</a>
</td><td bgcolor="#fffff0"><a rel="nofollow" title='French-German (66,378 sentence pairs, 0.97M words) - Moses format' href="download.php?f=Tatoeba/de-fr.txt.zip">66.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Greek (603 sentence pairs, 6.66k words) - Moses format' href="download.php?f=Tatoeba/el-fr.txt.zip">0.6k</a>
</td><td bgcolor="#f5ffd6"><a rel="nofollow" title='French-English (144,663 sentence pairs, 2.11M words) - Moses format' href="download.php?f=Tatoeba/en-fr.txt.zip">0.1M</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='French-Esperanto (121,093 sentence pairs, 1.74M words) - Moses format' href="download.php?f=Tatoeba/eo-fr.txt.zip">0.1M</a>
</td><td bgcolor="#fff6ef"><a rel="nofollow" title='French-Spanish (33,802 sentence pairs, 0.46M words) - Moses format' href="download.php?f=Tatoeba/es-fr.txt.zip">33.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Estonian (6 sentence pairs, 0.10k words) - Moses format' href="download.php?f=Tatoeba/et-fr.txt.zip">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Basque (92 sentence pairs, 1.13k words) - Moses format' href="download.php?f=Tatoeba/eu-fr.txt.zip">92</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Finnish (454 sentence pairs, 5.04k words) - Moses format' href="download.php?f=Tatoeba/fi-fr.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Faroese (1 sentence pairs, 59 words) - Moses format' href="download.php?f=Tatoeba/fo-fr.txt.zip">1</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-French (1,456 sentence pairs, 20.65k words) - Moses format' href="download.php?f=Tatoeba/fr-fr.txt.zip">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Western Frisian (42 sentence pairs, 0.42k words) - TMX format' href="download.php?f=Tatoeba/fr-fy.tmx.gz">42</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Irish (5 sentence pairs, 48 words) - TMX format' href="download.php?f=Tatoeba/fr-ga.tmx.gz">5</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Gaelic (118 sentence pairs, 1.34k words) - TMX format' href="download.php?f=Tatoeba/fr-gd.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Galician (73 sentence pairs, 0.91k words) - TMX format' href="download.php?f=Tatoeba/fr-gl.tmx.gz">73</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Guarani (9 sentence pairs, 97 words) - TMX format' href="download.php?f=Tatoeba/fr-gn.tmx.gz">9</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='French-Hebrew (3,727 sentence pairs, 45.18k words) - TMX format' href="download.php?f=Tatoeba/fr-he.tmx.gz">3.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Hindi (37 sentence pairs, 0.43k words) - TMX format' href="download.php?f=Tatoeba/fr-hi.tmx.gz">37</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Croatian (236 sentence pairs, 2.78k words) - TMX format' href="download.php?f=Tatoeba/fr-hr.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Hungarian (780 sentence pairs, 9.07k words) - TMX format' href="download.php?f=Tatoeba/fr-hu.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Armenian (7 sentence pairs, 77 words) - TMX format' href="download.php?f=Tatoeba/fr-hy.tmx.gz">7</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Interlingua (International Auxiliary Language Association) (612 sentence pairs, 8.77k words) - TMX format' href="download.php?f=Tatoeba/fr-ia.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Indonesian (166 sentence pairs, 2.23k words) - TMX format' href="download.php?f=Tatoeba/fr-id.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Interlingue (264 sentence pairs, 2.57k words) - TMX format' href="download.php?f=Tatoeba/fr-ie.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Ido (81 sentence pairs, 0.86k words) - TMX format' href="download.php?f=Tatoeba/fr-io.tmx.gz">81</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Icelandic (114 sentence pairs, 1.30k words) - TMX format' href="download.php?f=Tatoeba/fr-is.tmx.gz">0.1k</a>
</td><td bgcolor="#ffede9"><a rel="nofollow" title='French-Italian (25,690 sentence pairs, 0.30M words) - TMX format' href="download.php?f=Tatoeba/fr-it.tmx.gz">25.7k</a>
</td><td bgcolor="#ffece8"><a rel="nofollow" title='French-Japanese (31,158 sentence pairs, 0.27M words) - TMX format' href="download.php?f=Tatoeba/fr-ja.tmx.gz">31.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Lojban (1,032 sentence pairs, 14.60k words) - TMX format' href="download.php?f=Tatoeba/fr-jbo.tmx.gz">1.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Kazakh (10 sentence pairs, 85 words) - TMX format' href="download.php?f=Tatoeba/fr-kk.tmx.gz">10</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Korean (183 sentence pairs, 2.09k words) - TMX format' href="download.php?f=Tatoeba/fr-ko.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Kurdish (22 sentence pairs, 0.34k words) - TMX format' href="download.php?f=Tatoeba/fr-ku.tmx.gz">22</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Latin (1,960 sentence pairs, 19.18k words) - TMX format' href="download.php?f=Tatoeba/fr-la.tmx.gz">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-lld (21 sentence pairs, 0.39k words) - TMX format' href="download.php?f=Tatoeba/fr-lld.tmx.gz">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Lao (1 sentence pairs, 39 words) - TMX format' href="download.php?f=Tatoeba/fr-lo.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Lithuanian (97 sentence pairs, 1.14k words) - TMX format' href="download.php?f=Tatoeba/fr-lt.tmx.gz">97</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Latvian (22 sentence pairs, 0.17k words) - TMX format' href="download.php?f=Tatoeba/fr-lv.tmx.gz">22</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-lzh (80 sentence pairs, 0.51k words) - TMX format' href="download.php?f=Tatoeba/fr-lzh.tmx.gz">80</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Mongolian (18 sentence pairs, 0.21k words) - TMX format' href="download.php?f=Tatoeba/fr-mn.tmx.gz">18</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Maltese (24 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/fr-mt.tmx.gz">24</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-BokmÃ¥l, Norwegian (163 sentence pairs, 2.28k words) - TMX format' href="download.php?f=Tatoeba/fr-nb.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Low German (526 sentence pairs, 5.73k words) - TMX format' href="download.php?f=Tatoeba/fr-nds.tmx.gz">0.5k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='French-Dutch (7,236 sentence pairs, 96.48k words) - TMX format' href="download.php?f=Tatoeba/fr-nl.tmx.gz">7.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Norse, Old (10 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/fr-non.tmx.gz">10</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Occitan (post 1500) (729 sentence pairs, 10.05k words) - TMX format' href="download.php?f=Tatoeba/fr-oc.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-orv (31 sentence pairs, 0.35k words) - TMX format' href="download.php?f=Tatoeba/fr-orv.tmx.gz">31</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Ossetian (12 sentence pairs, 86 words) - TMX format' href="download.php?f=Tatoeba/fr-os.tmx.gz">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-pcd (100 sentence pairs, 1.22k words) - TMX format' href="download.php?f=Tatoeba/fr-pcd.tmx.gz">100</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-pes (169 sentence pairs, 2.38k words) - TMX format' href="download.php?f=Tatoeba/fr-pes.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='French-Polish (3,069 sentence pairs, 38.50k words) - TMX format' href="download.php?f=Tatoeba/fr-pl.tmx.gz">3.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-prg (10 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/fr-prg.tmx.gz">10</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='French-Portuguese (18,121 sentence pairs, 0.21M words) - TMX format' href="download.php?f=Tatoeba/fr-pt.tmx.gz">18.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Quechua (3 sentence pairs, 21 words) - TMX format' href="download.php?f=Tatoeba/fr-qu.tmx.gz">3</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Romansh (1 sentence pairs, 61 words) - TMX format' href="download.php?f=Tatoeba/fr-rm.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Romanian (158 sentence pairs, 2.06k words) - TMX format' href="download.php?f=Tatoeba/fr-ro.tmx.gz">0.2k</a>
</td><td bgcolor="#fff4ee"><a rel="nofollow" title='French-Russian (37,458 sentence pairs, 0.42M words) - TMX format' href="download.php?f=Tatoeba/fr-ru.tmx.gz">37.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Sicilian (4 sentence pairs, 65 words) - TMX format' href="download.php?f=Tatoeba/fr-scn.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Slovenian (67 sentence pairs, 0.83k words) - TMX format' href="download.php?f=Tatoeba/fr-sl.tmx.gz">67</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Albanian (4 sentence pairs, 85 words) - TMX format' href="download.php?f=Tatoeba/fr-sq.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Serbian (135 sentence pairs, 1.49k words) - TMX format' href="download.php?f=Tatoeba/fr-sr.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Swedish (685 sentence pairs, 8.19k words) - TMX format' href="download.php?f=Tatoeba/fr-sv.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-swh (18 sentence pairs, 0.16k words) - TMX format' href="download.php?f=Tatoeba/fr-swh.tmx.gz">18</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Thai (44 sentence pairs, 0.37k words) - TMX format' href="download.php?f=Tatoeba/fr-th.tmx.gz">44</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-Tagalog (649 sentence pairs, 7.92k words) - TMX format' href="download.php?f=Tatoeba/fr-tl.tmx.gz">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Klingon (436 sentence pairs, 3.86k words) - TMX format' href="download.php?f=Tatoeba/fr-tlh.tmx.gz">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-toki (160 sentence pairs, 1.95k words) - TMX format' href="download.php?f=Tatoeba/fr-toki.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-tpw (6 sentence pairs, 35 words) - TMX format' href="download.php?f=Tatoeba/fr-tpw.tmx.gz">6</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Turkish (1,874 sentence pairs, 19.99k words) - TMX format' href="download.php?f=Tatoeba/fr-tr.tmx.gz">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Tatar (83 sentence pairs, 1.00k words) - TMX format' href="download.php?f=Tatoeba/fr-tt.tmx.gz">83</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Uighur (693 sentence pairs, 6.71k words) - TMX format' href="download.php?f=Tatoeba/fr-ug.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='French-Ukrainian (3,368 sentence pairs, 37.49k words) - TMX format' href="download.php?f=Tatoeba/fr-uk.tmx.gz">3.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Urdu (6 sentence pairs, 63 words) - TMX format' href="download.php?f=Tatoeba/fr-ur.tmx.gz">6</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Uzbek (44 sentence pairs, 0.45k words) - TMX format' href="download.php?f=Tatoeba/fr-uz.tmx.gz">44</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='French-Vietnamese (1,196 sentence pairs, 19.71k words) - TMX format' href="download.php?f=Tatoeba/fr-vi.tmx.gz">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-VolapÃ¼k (19 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/fr-vo.tmx.gz">19</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='French-wuu (1,332 sentence pairs, 11.32k words) - TMX format' href="download.php?f=Tatoeba/fr-wuu.tmx.gz">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-Yiddish (16 sentence pairs, 0.20k words) - TMX format' href="download.php?f=Tatoeba/fr-yi.tmx.gz">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-yue (195 sentence pairs, 1.57k words) - TMX format' href="download.php?f=Tatoeba/fr-yue.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='French-zsm (51 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/fr-zsm.tmx.gz">51</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized fy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.fy.gz">fy</a>
</th><td>1</td> <td>0.9k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-cmn (9 sentence pairs, 84 words) - Moses format' href="download.php?f=Tatoeba/cmn-fy.txt.zip">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Czech (4 sentence pairs, 73 words) - Moses format' href="download.php?f=Tatoeba/cs-fy.txt.zip">4</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-German (48 sentence pairs, 0.52k words) - Moses format' href="download.php?f=Tatoeba/de-fy.txt.zip">48</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-English (112 sentence pairs, 1.55k words) - Moses format' href="download.php?f=Tatoeba/en-fy.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Esperanto (11 sentence pairs, 0.13k words) - Moses format' href="download.php?f=Tatoeba/eo-fy.txt.zip">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Spanish (29 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/es-fy.txt.zip">29</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-French (42 sentence pairs, 0.42k words) - Moses format' href="download.php?f=Tatoeba/fr-fy.txt.zip">42</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Italian (27 sentence pairs, 0.23k words) - TMX format' href="download.php?f=Tatoeba/fy-it.tmx.gz">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Dutch (102 sentence pairs, 1.43k words) - TMX format' href="download.php?f=Tatoeba/fy-nl.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Portuguese (13 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/fy-pt.tmx.gz">13</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Russian (24 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/fy-ru.tmx.gz">24</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Turkish (25 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/fy-tr.tmx.gz">25</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Ukrainian (26 sentence pairs, 0.31k words) - TMX format' href="download.php?f=Tatoeba/fy-uk.tmx.gz">26</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Western Frisian-Vietnamese (1 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/fy-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ga plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ga.gz">ga</a>
</th><td>1</td> <td>3.7k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-English (502 sentence pairs, 5.37k words) - Moses format' href="download.php?f=Tatoeba/en-ga.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Irish-French (5 sentence pairs, 48 words) - Moses format' href="download.php?f=Tatoeba/fr-ga.txt.zip">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gd plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.gd.gz">gd</a>
</th><td>1</td> <td>3.4k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-German (125 sentence pairs, 1.42k words) - Moses format' href="download.php?f=Tatoeba/de-gd.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-English (310 sentence pairs, 3.96k words) - Moses format' href="download.php?f=Tatoeba/en-gd.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Spanish (143 sentence pairs, 1.53k words) - Moses format' href="download.php?f=Tatoeba/es-gd.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-French (121 sentence pairs, 1.37k words) - Moses format' href="download.php?f=Tatoeba/fr-gd.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Italian (82 sentence pairs, 0.83k words) - TMX format' href="download.php?f=Tatoeba/gd-it.tmx.gz">82</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Gaelic-Portuguese (46 sentence pairs, 0.53k words) - TMX format' href="download.php?f=Tatoeba/gd-pt.tmx.gz">46</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.gl.gz">gl</a>
</th><td>1</td> <td>30.7k</td> <td>4.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-cmn (8 sentence pairs, 39 words) - Moses format' href="download.php?f=Tatoeba/cmn-gl.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-German (65 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/de-gl.txt.zip">65</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Greek (5 sentence pairs, 52 words) - Moses format' href="download.php?f=Tatoeba/el-gl.txt.zip">5</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Galician-English (801 sentence pairs, 11.53k words) - Moses format' href="download.php?f=Tatoeba/en-gl.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Galician-Spanish (2,792 sentence pairs, 37.88k words) - Moses format' href="download.php?f=Tatoeba/es-gl.txt.zip">2.8k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-French (73 sentence pairs, 0.91k words) - Moses format' href="download.php?f=Tatoeba/fr-gl.txt.zip">73</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Japanese (9 sentence pairs, 47 words) - TMX format' href="download.php?f=Tatoeba/gl-ja.tmx.gz">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Portuguese (299 sentence pairs, 3.65k words) - TMX format' href="download.php?f=Tatoeba/gl-pt.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Galician-Russian (22 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/gl-ru.tmx.gz">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized gn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.gn.gz">gn</a>
</th><td>1</td> <td>3.2k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Guarani-cmn (20 sentence pairs, 88 words) - Moses format' href="download.php?f=Tatoeba/cmn-gn.txt.zip">20</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Guarani-English (81 sentence pairs, 1.08k words) - Moses format' href="download.php?f=Tatoeba/en-gn.txt.zip">81</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Guarani-Spanish (149 sentence pairs, 1.89k words) - Moses format' href="download.php?f=Tatoeba/es-gn.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Guarani-French (9 sentence pairs, 97 words) - Moses format' href="download.php?f=Tatoeba/fr-gn.txt.zip">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized he plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.he.gz">he</a>
</th><td>1</td> <td>0.6M</td> <td>95.8k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Arabic (931 sentence pairs, 8.53k words) - Moses format' href="download.php?f=Tatoeba/ar-he.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Belarusian (35 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/be-he.txt.zip">35</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-cmn (444 sentence pairs, 2.28k words) - Moses format' href="download.php?f=Tatoeba/cmn-he.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Czech (6 sentence pairs, 82 words) - Moses format' href="download.php?f=Tatoeba/cs-he.txt.zip">6</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Hebrew-German (3,215 sentence pairs, 39.58k words) - Moses format' href="download.php?f=Tatoeba/de-he.txt.zip">3.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#fffbf1"><a rel="nofollow" title='Hebrew-English (54,357 sentence pairs, 0.63M words) - Moses format' href="download.php?f=Tatoeba/en-he.txt.zip">54.4k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Hebrew-Esperanto (20,861 sentence pairs, 0.25M words) - Moses format' href="download.php?f=Tatoeba/eo-he.txt.zip">20.9k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hebrew-Spanish (2,478 sentence pairs, 29.70k words) - Moses format' href="download.php?f=Tatoeba/es-he.txt.zip">2.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Finnish (194 sentence pairs, 2.01k words) - Moses format' href="download.php?f=Tatoeba/fi-he.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hebrew-French (3,727 sentence pairs, 45.18k words) - Moses format' href="download.php?f=Tatoeba/fr-he.txt.zip">3.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Hebrew-Hebrew (1,581 sentence pairs, 15.20k words) - Moses format' href="download.php?f=Tatoeba/he-he.txt.zip">1.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Hungarian (188 sentence pairs, 1.86k words) - TMX format' href="download.php?f=Tatoeba/he-hu.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Italian (945 sentence pairs, 10.32k words) - TMX format' href="download.php?f=Tatoeba/he-it.tmx.gz">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Japanese (198 sentence pairs, 1.19k words) - TMX format' href="download.php?f=Tatoeba/he-ja.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-lzh (67 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/he-lzh.tmx.gz">67</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Hebrew-Dutch (5,604 sentence pairs, 69.16k words) - TMX format' href="download.php?f=Tatoeba/he-nl.tmx.gz">5.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Hebrew-Polish (12,530 sentence pairs, 0.12M words) - TMX format' href="download.php?f=Tatoeba/he-pl.tmx.gz">12.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Portuguese (566 sentence pairs, 6.52k words) - TMX format' href="download.php?f=Tatoeba/he-pt.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Hebrew-Russian (4,470 sentence pairs, 44.99k words) - TMX format' href="download.php?f=Tatoeba/he-ru.tmx.gz">4.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Tagalog (8 sentence pairs, 69 words) - TMX format' href="download.php?f=Tatoeba/he-tl.tmx.gz">8</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hebrew-Turkish (900 sentence pairs, 7.41k words) - TMX format' href="download.php?f=Tatoeba/he-tr.tmx.gz">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Ukrainian (385 sentence pairs, 3.14k words) - TMX format' href="download.php?f=Tatoeba/he-uk.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hebrew-Yiddish (190 sentence pairs, 2.30k words) - TMX format' href="download.php?f=Tatoeba/he-yi.tmx.gz">0.2k</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hi.gz">hi</a>
</th><td>1</td> <td>54.0k</td> <td>5.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-cmn (293 sentence pairs, 2.54k words) - Moses format' href="download.php?f=Tatoeba/cmn-hi.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-German (33 sentence pairs, 0.48k words) - Moses format' href="download.php?f=Tatoeba/de-hi.txt.zip">33</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Hindi-English (4,698 sentence pairs, 65.55k words) - Moses format' href="download.php?f=Tatoeba/en-hi.txt.zip">4.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Spanish (25 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/es-hi.txt.zip">25</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-French (37 sentence pairs, 0.43k words) - Moses format' href="download.php?f=Tatoeba/fr-hi.txt.zip">37</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-Japanese (70 sentence pairs, 0.54k words) - TMX format' href="download.php?f=Tatoeba/hi-ja.tmx.gz">70</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hindi-wuu (30 sentence pairs, 0.26k words) - TMX format' href="download.php?f=Tatoeba/hi-wuu.tmx.gz">30</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hil plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hil.gz">hil</a>
</th><td>1</td> <td>0.1k</td> <td>16</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hiligaynon-cmn (7 sentence pairs, 59 words) - Moses format' href="download.php?f=Tatoeba/cmn-hil.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hr.gz">hr</a>
</th><td>1</td> <td>21.4k</td> <td>3.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-cmn (120 sentence pairs, 0.74k words) - Moses format' href="download.php?f=Tatoeba/cmn-hr.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Czech (9 sentence pairs, 62 words) - Moses format' href="download.php?f=Tatoeba/cs-hr.txt.zip">9</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-German (337 sentence pairs, 4.11k words) - Moses format' href="download.php?f=Tatoeba/de-hr.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-English (880 sentence pairs, 10.84k words) - Moses format' href="download.php?f=Tatoeba/en-hr.txt.zip">0.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Croatian-Esperanto (750 sentence pairs, 9.29k words) - Moses format' href="download.php?f=Tatoeba/eo-hr.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Spanish (160 sentence pairs, 1.61k words) - Moses format' href="download.php?f=Tatoeba/es-hr.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-French (236 sentence pairs, 2.78k words) - Moses format' href="download.php?f=Tatoeba/fr-hr.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Italian (84 sentence pairs, 0.91k words) - TMX format' href="download.php?f=Tatoeba/hr-it.tmx.gz">84</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Japanese (166 sentence pairs, 1.15k words) - TMX format' href="download.php?f=Tatoeba/hr-ja.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Portuguese (68 sentence pairs, 0.66k words) - TMX format' href="download.php?f=Tatoeba/hr-pt.tmx.gz">68</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Russian (193 sentence pairs, 1.96k words) - TMX format' href="download.php?f=Tatoeba/hr-ru.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Croatian-Ukrainian (214 sentence pairs, 2.25k words) - TMX format' href="download.php?f=Tatoeba/hr-uk.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hsb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hsb.gz">hsb</a>
</th><td>1</td> <td>2.2k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Upper Sorbian-German (265 sentence pairs, 2.88k words) - Moses format' href="download.php?f=Tatoeba/de-hsb.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Upper Sorbian-English (14 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/en-hsb.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Upper Sorbian-Esperanto (87 sentence pairs, 0.97k words) - Moses format' href="download.php?f=Tatoeba/eo-hsb.txt.zip">87</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hu.gz">hu</a>
</th><td>1</td> <td>0.3M</td> <td>40.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Bulgarian (28 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/bg-hu.txt.zip">28</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-cmn (215 sentence pairs, 1.27k words) - Moses format' href="download.php?f=Tatoeba/cmn-hu.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Czech (162 sentence pairs, 1.41k words) - Moses format' href="download.php?f=Tatoeba/cs-hu.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Hungarian-German (4,757 sentence pairs, 60.12k words) - Moses format' href="download.php?f=Tatoeba/de-hu.txt.zip">4.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Hungarian-English (9,979 sentence pairs, 0.12M words) - Moses format' href="download.php?f=Tatoeba/en-hu.txt.zip">10.0k</a>
</td><td bgcolor="#ffe5e2"><a rel="nofollow" title='Hungarian-Esperanto (15,494 sentence pairs, 0.19M words) - Moses format' href="download.php?f=Tatoeba/eo-hu.txt.zip">15.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Spanish (899 sentence pairs, 9.93k words) - Moses format' href="download.php?f=Tatoeba/es-hu.txt.zip">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Finnish (24 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/fi-hu.txt.zip">24</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-French (780 sentence pairs, 9.07k words) - Moses format' href="download.php?f=Tatoeba/fr-hu.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Hebrew (188 sentence pairs, 1.86k words) - Moses format' href="download.php?f=Tatoeba/he-hu.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Indonesian (25 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/hu-id.tmx.gz">25</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Hungarian-Italian (736 sentence pairs, 7.80k words) - TMX format' href="download.php?f=Tatoeba/hu-it.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Hungarian-Japanese (5,037 sentence pairs, 34.20k words) - TMX format' href="download.php?f=Tatoeba/hu-ja.tmx.gz">5.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Dutch (150 sentence pairs, 1.89k words) - TMX format' href="download.php?f=Tatoeba/hu-nl.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Portuguese (359 sentence pairs, 4.00k words) - TMX format' href="download.php?f=Tatoeba/hu-pt.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Hungarian-Russian (1,997 sentence pairs, 23.79k words) - TMX format' href="download.php?f=Tatoeba/hu-ru.tmx.gz">2.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Ukrainian (94 sentence pairs, 0.92k words) - TMX format' href="download.php?f=Tatoeba/hu-uk.tmx.gz">94</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Hungarian-Vietnamese (15 sentence pairs, 0.21k words) - TMX format' href="download.php?f=Tatoeba/hu-vi.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized hy plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.hy.gz">hy</a>
</th><td>1</td> <td>1.2k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-cmn (13 sentence pairs, 48 words) - Moses format' href="download.php?f=Tatoeba/cmn-hy.txt.zip">13</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-English (137 sentence pairs, 1.84k words) - Moses format' href="download.php?f=Tatoeba/en-hy.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-Esperanto (6 sentence pairs, 55 words) - Moses format' href="download.php?f=Tatoeba/eo-hy.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-French (7 sentence pairs, 77 words) - Moses format' href="download.php?f=Tatoeba/fr-hy.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-Japanese (4 sentence pairs, 33 words) - TMX format' href="download.php?f=Tatoeba/hy-ja.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Armenian-Russian (24 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/hy-ru.tmx.gz">24</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ia plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ia.gz">ia</a>
</th><td>1</td> <td>89.8k</td> <td>9.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-German (507 sentence pairs, 8.15k words) - Moses format' href="download.php?f=Tatoeba/de-ia.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-English (3,034 sentence pairs, 48.84k words) - Moses format' href="download.php?f=Tatoeba/en-ia.txt.zip">3.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Esperanto (1,005 sentence pairs, 14.73k words) - Moses format' href="download.php?f=Tatoeba/eo-ia.txt.zip">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Spanish (387 sentence pairs, 5.23k words) - Moses format' href="download.php?f=Tatoeba/es-ia.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Finnish (4 sentence pairs, 45 words) - Moses format' href="download.php?f=Tatoeba/fi-ia.txt.zip">4</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-French (612 sentence pairs, 8.77k words) - Moses format' href="download.php?f=Tatoeba/fr-ia.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Italian (195 sentence pairs, 3.10k words) - TMX format' href="download.php?f=Tatoeba/ia-it.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Japanese (21 sentence pairs, 0.17k words) - TMX format' href="download.php?f=Tatoeba/ia-ja.tmx.gz">21</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Dutch (540 sentence pairs, 7.54k words) - TMX format' href="download.php?f=Tatoeba/ia-nl.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Portuguese (3,677 sentence pairs, 58.94k words) - TMX format' href="download.php?f=Tatoeba/ia-pt.tmx.gz">3.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Interlingua (International Auxiliary Language Association)-Russian (1,234 sentence pairs, 17.94k words) - TMX format' href="download.php?f=Tatoeba/ia-ru.tmx.gz">1.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized id plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.id.gz">id</a>
</th><td>1</td> <td>18.6k</td> <td>2.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-cmn (138 sentence pairs, 1.05k words) - Moses format' href="download.php?f=Tatoeba/cmn-id.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Czech (1 sentence pairs, 2 words) - Moses format' href="download.php?f=Tatoeba/cs-id.txt.zip">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-German (172 sentence pairs, 2.18k words) - Moses format' href="download.php?f=Tatoeba/de-id.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Indonesian-English (1,469 sentence pairs, 19.77k words) - Moses format' href="download.php?f=Tatoeba/en-id.txt.zip">1.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Esperanto (156 sentence pairs, 2.03k words) - Moses format' href="download.php?f=Tatoeba/eo-id.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Spanish (58 sentence pairs, 0.69k words) - Moses format' href="download.php?f=Tatoeba/es-id.txt.zip">58</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Finnish (9 sentence pairs, 70 words) - Moses format' href="download.php?f=Tatoeba/fi-id.txt.zip">9</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-French (166 sentence pairs, 2.23k words) - Moses format' href="download.php?f=Tatoeba/fr-id.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Hungarian (25 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/hu-id.txt.zip">25</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Ido (22 sentence pairs, 0.24k words) - TMX format' href="download.php?f=Tatoeba/id-io.tmx.gz">22</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Italian (118 sentence pairs, 1.37k words) - TMX format' href="download.php?f=Tatoeba/id-it.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Japanese (472 sentence pairs, 3.17k words) - TMX format' href="download.php?f=Tatoeba/id-ja.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Korean (2 sentence pairs, 10 words) - TMX format' href="download.php?f=Tatoeba/id-ko.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Lithuanian (1 sentence pairs, 14 words) - TMX format' href="download.php?f=Tatoeba/id-lt.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Polish (15 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/id-pl.tmx.gz">15</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Portuguese (36 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/id-pt.tmx.gz">36</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Russian (44 sentence pairs, 0.46k words) - TMX format' href="download.php?f=Tatoeba/id-ru.tmx.gz">44</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Turkish (26 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/id-tr.tmx.gz">26</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Ukrainian (6 sentence pairs, 63 words) - TMX format' href="download.php?f=Tatoeba/id-uk.tmx.gz">6</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-Vietnamese (1 sentence pairs, 16 words) - TMX format' href="download.php?f=Tatoeba/id-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Indonesian-zsm (23 sentence pairs, 0.20k words) - TMX format' href="download.php?f=Tatoeba/id-zsm.tmx.gz">23</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ie plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ie.gz">ie</a>
</th><td>1</td> <td>6.2k</td> <td>1.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingue-German (331 sentence pairs, 3.54k words) - Moses format' href="download.php?f=Tatoeba/de-ie.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingue-English (592 sentence pairs, 5.51k words) - Moses format' href="download.php?f=Tatoeba/en-ie.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingue-Esperanto (98 sentence pairs, 0.87k words) - Moses format' href="download.php?f=Tatoeba/eo-ie.txt.zip">98</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingue-French (265 sentence pairs, 2.58k words) - Moses format' href="download.php?f=Tatoeba/fr-ie.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Interlingue-Japanese (2 sentence pairs, 14 words) - TMX format' href="download.php?f=Tatoeba/ie-ja.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized io plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.io.gz">io</a>
</th><td>1</td> <td>30.0k</td> <td>4.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-cmn (27 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/cmn-io.txt.zip">27</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-German (207 sentence pairs, 2.03k words) - Moses format' href="download.php?f=Tatoeba/de-io.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ido-English (2,026 sentence pairs, 24.39k words) - Moses format' href="download.php?f=Tatoeba/en-io.txt.zip">2.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ido-Esperanto (841 sentence pairs, 9.30k words) - Moses format' href="download.php?f=Tatoeba/eo-io.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-Spanish (373 sentence pairs, 4.22k words) - Moses format' href="download.php?f=Tatoeba/es-io.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-French (81 sentence pairs, 0.86k words) - Moses format' href="download.php?f=Tatoeba/fr-io.txt.zip">81</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-Indonesian (22 sentence pairs, 0.24k words) - Moses format' href="download.php?f=Tatoeba/id-io.txt.zip">22</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ido-Italian (1,417 sentence pairs, 16.11k words) - TMX format' href="download.php?f=Tatoeba/io-it.tmx.gz">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-Japanese (22 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/io-ja.tmx.gz">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-Dutch (30 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/io-nl.tmx.gz">30</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ido-Russian (66 sentence pairs, 0.62k words) - TMX format' href="download.php?f=Tatoeba/io-ru.tmx.gz">66</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized is plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.is.gz">is</a>
</th><td>1</td> <td>76.2k</td> <td>10.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-cmn (11 sentence pairs, 75 words) - Moses format' href="download.php?f=Tatoeba/cmn-is.txt.zip">11</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-German (266 sentence pairs, 3.16k words) - Moses format' href="download.php?f=Tatoeba/de-is.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Icelandic-English (8,139 sentence pairs, 0.11M words) - Moses format' href="download.php?f=Tatoeba/en-is.txt.zip">8.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Esperanto (222 sentence pairs, 2.48k words) - Moses format' href="download.php?f=Tatoeba/eo-is.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Spanish (81 sentence pairs, 0.83k words) - Moses format' href="download.php?f=Tatoeba/es-is.txt.zip">81</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-French (114 sentence pairs, 1.30k words) - Moses format' href="download.php?f=Tatoeba/fr-is.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Italian (222 sentence pairs, 2.28k words) - TMX format' href="download.php?f=Tatoeba/is-it.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Japanese (251 sentence pairs, 1.56k words) - TMX format' href="download.php?f=Tatoeba/is-ja.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Portuguese (43 sentence pairs, 0.45k words) - TMX format' href="download.php?f=Tatoeba/is-pt.tmx.gz">43</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Icelandic-Russian (110 sentence pairs, 1.23k words) - TMX format' href="download.php?f=Tatoeba/is-ru.tmx.gz">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized it plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.it.gz">it</a>
</th><td>1</td> <td>1.3M</td> <td>0.2M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Afrikaans (75 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/af-it.txt.zip">75</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-English, Old (ca.450-1100) (9 sentence pairs, 100 words) - Moses format' href="download.php?f=Tatoeba/ang-it.txt.zip">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Arabic (136 sentence pairs, 1.30k words) - Moses format' href="download.php?f=Tatoeba/ar-it.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-avk (72 sentence pairs, 0.74k words) - Moses format' href="download.php?f=Tatoeba/avk-it.txt.zip">72</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Berber languages) (83 sentence pairs, 0.81k words) - Moses format' href="download.php?f=Tatoeba/ber-it.txt.zip">83</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Bulgarian (837 sentence pairs, 10.29k words) - Moses format' href="download.php?f=Tatoeba/bg-it.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Bengali (11 sentence pairs, 82 words) - Moses format' href="download.php?f=Tatoeba/bn-it.txt.zip">11</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Breton (37 sentence pairs, 0.32k words) - Moses format' href="download.php?f=Tatoeba/br-it.txt.zip">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Bosnian (16 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/bs-it.txt.zip">16</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Catalan (240 sentence pairs, 2.92k words) - Moses format' href="download.php?f=Tatoeba/ca-it.txt.zip">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-cmn (1,448 sentence pairs, 9.28k words) - Moses format' href="download.php?f=Tatoeba/cmn-it.txt.zip">1.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Czech (707 sentence pairs, 8.79k words) - Moses format' href="download.php?f=Tatoeba/cs-it.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Welsh (46 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/cy-it.txt.zip">46</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-cycl (1 sentence pairs, 10 words) - Moses format' href="download.php?f=Tatoeba/cycl-it.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Danish (179 sentence pairs, 2.52k words) - Moses format' href="download.php?f=Tatoeba/da-it.txt.zip">0.2k</a>
</td><td bgcolor="#ffe1df"><a rel="nofollow" title='Italian-German (10,308 sentence pairs, 0.14M words) - Moses format' href="download.php?f=Tatoeba/de-it.txt.zip">10.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Greek (127 sentence pairs, 1.26k words) - Moses format' href="download.php?f=Tatoeba/el-it.txt.zip">0.1k</a>
</td><td bgcolor="#ffffe6"><a rel="nofollow" title='Italian-English (134,609 sentence pairs, 1.58M words) - Moses format' href="download.php?f=Tatoeba/en-it.txt.zip">0.1M</a>
</td><td bgcolor="#ffe6e3"><a rel="nofollow" title='Italian-Esperanto (14,371 sentence pairs, 0.20M words) - Moses format' href="download.php?f=Tatoeba/eo-it.txt.zip">14.4k</a>
</td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Italian-Spanish (8,359 sentence pairs, 0.10M words) - Moses format' href="download.php?f=Tatoeba/es-it.txt.zip">8.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Basque (37 sentence pairs, 0.39k words) - Moses format' href="download.php?f=Tatoeba/eu-it.txt.zip">37</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Finnish (108 sentence pairs, 1.22k words) - Moses format' href="download.php?f=Tatoeba/fi-it.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffeeea"><a rel="nofollow" title='Italian-French (25,825 sentence pairs, 0.30M words) - Moses format' href="download.php?f=Tatoeba/fr-it.txt.zip">25.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Western Frisian (27 sentence pairs, 0.23k words) - Moses format' href="download.php?f=Tatoeba/fy-it.txt.zip">27</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Gaelic (83 sentence pairs, 0.84k words) - Moses format' href="download.php?f=Tatoeba/gd-it.txt.zip">83</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Hebrew (945 sentence pairs, 10.32k words) - Moses format' href="download.php?f=Tatoeba/he-it.txt.zip">0.9k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Croatian (84 sentence pairs, 0.91k words) - Moses format' href="download.php?f=Tatoeba/hr-it.txt.zip">84</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Hungarian (736 sentence pairs, 7.80k words) - Moses format' href="download.php?f=Tatoeba/hu-it.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Interlingua (International Auxiliary Language Association) (196 sentence pairs, 3.11k words) - Moses format' href="download.php?f=Tatoeba/ia-it.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Indonesian (118 sentence pairs, 1.37k words) - Moses format' href="download.php?f=Tatoeba/id-it.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Ido (1,417 sentence pairs, 16.11k words) - Moses format' href="download.php?f=Tatoeba/io-it.txt.zip">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Icelandic (222 sentence pairs, 2.28k words) - Moses format' href="download.php?f=Tatoeba/is-it.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-Italian (589 sentence pairs, 7.70k words) - Moses format' href="download.php?f=Tatoeba/it-it.txt.zip">0.6k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Japanese (2,397 sentence pairs, 18.79k words) - TMX format' href="download.php?f=Tatoeba/it-ja.tmx.gz">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Lojban (155 sentence pairs, 1.59k words) - TMX format' href="download.php?f=Tatoeba/it-jbo.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Korean (42 sentence pairs, 0.36k words) - TMX format' href="download.php?f=Tatoeba/it-ko.tmx.gz">42</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Kurdish (5 sentence pairs, 66 words) - TMX format' href="download.php?f=Tatoeba/it-ku.tmx.gz">5</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Latin (1,343 sentence pairs, 14.44k words) - TMX format' href="download.php?f=Tatoeba/it-la.tmx.gz">1.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Lithuanian (175 sentence pairs, 1.81k words) - TMX format' href="download.php?f=Tatoeba/it-lt.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Latvian (15 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/it-lv.tmx.gz">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Maltese (20 sentence pairs, 0.11k words) - TMX format' href="download.php?f=Tatoeba/it-mt.tmx.gz">20</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Italian-BokmÃ¥l, Norwegian (810 sentence pairs, 14.01k words) - TMX format' href="download.php?f=Tatoeba/it-nb.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Low German (233 sentence pairs, 2.48k words) - TMX format' href="download.php?f=Tatoeba/it-nds.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Italian-Dutch (1,967 sentence pairs, 22.03k words) - TMX format' href="download.php?f=Tatoeba/it-nl.tmx.gz">2.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Italian-Polish (1,629 sentence pairs, 17.24k words) - TMX format' href="download.php?f=Tatoeba/it-pl.tmx.gz">1.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Italian-Portuguese (3,248 sentence pairs, 39.11k words) - TMX format' href="download.php?f=Tatoeba/it-pt.tmx.gz">3.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Romanian (143 sentence pairs, 2.03k words) - TMX format' href="download.php?f=Tatoeba/it-ro.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Italian-Russian (2,687 sentence pairs, 33.85k words) - TMX format' href="download.php?f=Tatoeba/it-ru.tmx.gz">2.7k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Slovenian (19 sentence pairs, 0.18k words) - TMX format' href="download.php?f=Tatoeba/it-sl.tmx.gz">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Albanian (19 sentence pairs, 0.26k words) - TMX format' href="download.php?f=Tatoeba/it-sq.tmx.gz">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Serbian (51 sentence pairs, 0.53k words) - TMX format' href="download.php?f=Tatoeba/it-sr.tmx.gz">51</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Swedish (357 sentence pairs, 3.97k words) - TMX format' href="download.php?f=Tatoeba/it-sv.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Tagalog (69 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/it-tl.tmx.gz">69</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Klingon (68 sentence pairs, 0.54k words) - TMX format' href="download.php?f=Tatoeba/it-tlh.tmx.gz">68</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-toki (23 sentence pairs, 0.26k words) - TMX format' href="download.php?f=Tatoeba/it-toki.tmx.gz">23</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Turkish (662 sentence pairs, 5.90k words) - TMX format' href="download.php?f=Tatoeba/it-tr.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Tatar (36 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/it-tt.tmx.gz">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Uighur (81 sentence pairs, 0.63k words) - TMX format' href="download.php?f=Tatoeba/it-ug.tmx.gz">81</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Ukrainian (504 sentence pairs, 5.04k words) - TMX format' href="download.php?f=Tatoeba/it-uk.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Vietnamese (244 sentence pairs, 3.31k words) - TMX format' href="download.php?f=Tatoeba/it-vi.tmx.gz">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-wuu (38 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/it-wuu.tmx.gz">38</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Italian-Yiddish (11 sentence pairs, 0.12k words) - TMX format' href="download.php?f=Tatoeba/it-yi.tmx.gz">11</a>
</td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ja plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ja.gz">ja</a>
</th><td>1</td> <td>0.4M</td> <td>0.2M</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-acm (25 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/acm-ja.txt.zip">25</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Afrikaans (18 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/af-ja.txt.zip">18</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Arabic (1,134 sentence pairs, 6.12k words) - Moses format' href="download.php?f=Tatoeba/ar-ja.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-arq (9 sentence pairs, 42 words) - Moses format' href="download.php?f=Tatoeba/arq-ja.txt.zip">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-arz (12 sentence pairs, 65 words) - Moses format' href="download.php?f=Tatoeba/arz-ja.txt.zip">12</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-avk (15 sentence pairs, 86 words) - Moses format' href="download.php?f=Tatoeba/avk-ja.txt.zip">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Azerbaijani (5 sentence pairs, 24 words) - Moses format' href="download.php?f=Tatoeba/az-ja.txt.zip">5</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Belarusian (133 sentence pairs, 0.70k words) - Moses format' href="download.php?f=Tatoeba/be-ja.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Berber languages) (14 sentence pairs, 83 words) - Moses format' href="download.php?f=Tatoeba/ber-ja.txt.zip">14</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Bulgarian (289 sentence pairs, 2.12k words) - Moses format' href="download.php?f=Tatoeba/bg-ja.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Bengali (14 sentence pairs, 93 words) - Moses format' href="download.php?f=Tatoeba/bn-ja.txt.zip">14</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Breton (4 sentence pairs, 21 words) - Moses format' href="download.php?f=Tatoeba/br-ja.txt.zip">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Catalan (137 sentence pairs, 1.14k words) - Moses format' href="download.php?f=Tatoeba/ca-ja.txt.zip">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-cmn (2,941 sentence pairs, 5.95k words) - Moses format' href="download.php?f=Tatoeba/cmn-ja.txt.zip">2.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Czech (29 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/cs-ja.txt.zip">29</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Welsh (2 sentence pairs, 27 words) - Moses format' href="download.php?f=Tatoeba/cy-ja.txt.zip">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-cycl (4 sentence pairs, 31 words) - Moses format' href="download.php?f=Tatoeba/cycl-ja.txt.zip">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Danish (803 sentence pairs, 5.11k words) - Moses format' href="download.php?f=Tatoeba/da-ja.txt.zip">0.8k</a>
</td><td bgcolor="#ffe8e5"><a rel="nofollow" title='Japanese-German (27,960 sentence pairs, 0.23M words) - Moses format' href="download.php?f=Tatoeba/de-ja.txt.zip">28.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lower Sorbian (1 sentence pairs, 9 words) - Moses format' href="download.php?f=Tatoeba/dsb-ja.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ewe (2 sentence pairs, 17 words) - Moses format' href="download.php?f=Tatoeba/ee-ja.txt.zip">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Greek (13 sentence pairs, 79 words) - Moses format' href="download.php?f=Tatoeba/el-ja.txt.zip">13</a>
</td><td bgcolor="#ffffe5"><a rel="nofollow" title='Japanese-English (185,705 sentence pairs, 1.65M words) - Moses format' href="download.php?f=Tatoeba/en-ja.txt.zip">0.2M</a>
</td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Japanese-Esperanto (7,252 sentence pairs, 50.82k words) - Moses format' href="download.php?f=Tatoeba/eo-ja.txt.zip">7.3k</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Japanese-Spanish (27,985 sentence pairs, 0.21M words) - Moses format' href="download.php?f=Tatoeba/es-ja.txt.zip">28.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Estonian (49 sentence pairs, 0.41k words) - Moses format' href="download.php?f=Tatoeba/et-ja.txt.zip">49</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Basque (49 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/eu-ja.txt.zip">49</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Finnish (2,379 sentence pairs, 15.13k words) - Moses format' href="download.php?f=Tatoeba/fi-ja.txt.zip">2.4k</a>
</td><td></td><td bgcolor="#ffece8"><a rel="nofollow" title='Japanese-French (31,187 sentence pairs, 0.27M words) - Moses format' href="download.php?f=Tatoeba/fr-ja.txt.zip">31.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Galician (9 sentence pairs, 47 words) - Moses format' href="download.php?f=Tatoeba/gl-ja.txt.zip">9</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Hebrew (199 sentence pairs, 1.19k words) - Moses format' href="download.php?f=Tatoeba/he-ja.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Hindi (70 sentence pairs, 0.54k words) - Moses format' href="download.php?f=Tatoeba/hi-ja.txt.zip">70</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Croatian (166 sentence pairs, 1.15k words) - Moses format' href="download.php?f=Tatoeba/hr-ja.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Japanese-Hungarian (5,044 sentence pairs, 34.24k words) - Moses format' href="download.php?f=Tatoeba/hu-ja.txt.zip">5.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Armenian (4 sentence pairs, 33 words) - Moses format' href="download.php?f=Tatoeba/hy-ja.txt.zip">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Interlingua (International Auxiliary Language Association) (21 sentence pairs, 0.17k words) - Moses format' href="download.php?f=Tatoeba/ia-ja.txt.zip">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Indonesian (472 sentence pairs, 3.17k words) - Moses format' href="download.php?f=Tatoeba/id-ja.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Interlingue (2 sentence pairs, 14 words) - Moses format' href="download.php?f=Tatoeba/ie-ja.txt.zip">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ido (22 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/io-ja.txt.zip">22</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Icelandic (252 sentence pairs, 1.56k words) - Moses format' href="download.php?f=Tatoeba/is-ja.txt.zip">0.3k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Italian (2,400 sentence pairs, 18.81k words) - Moses format' href="download.php?f=Tatoeba/it-ja.txt.zip">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Japanese (456 sentence pairs, 0.97k words) - Moses format' href="download.php?f=Tatoeba/ja-ja.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lojban (786 sentence pairs, 5.70k words) - TMX format' href="download.php?f=Tatoeba/ja-jbo.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Georgian (54 sentence pairs, 0.28k words) - TMX format' href="download.php?f=Tatoeba/ja-ka.tmx.gz">54</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Central Khmer (9 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/ja-km.tmx.gz">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Korean (209 sentence pairs, 1.16k words) - TMX format' href="download.php?f=Tatoeba/ja-ko.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-ksh (3 sentence pairs, 15 words) - TMX format' href="download.php?f=Tatoeba/ja-ksh.tmx.gz">3</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Kurdish (9 sentence pairs, 62 words) - TMX format' href="download.php?f=Tatoeba/ja-ku.tmx.gz">9</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Latin (93 sentence pairs, 0.52k words) - TMX format' href="download.php?f=Tatoeba/ja-la.tmx.gz">93</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ladino (1 sentence pairs, 4 words) - TMX format' href="download.php?f=Tatoeba/ja-lad.tmx.gz">1</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lao (1 sentence pairs, 3 words) - TMX format' href="download.php?f=Tatoeba/ja-lo.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Lithuanian (128 sentence pairs, 0.75k words) - TMX format' href="download.php?f=Tatoeba/ja-lt.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Latvian (2 sentence pairs, 9 words) - TMX format' href="download.php?f=Tatoeba/ja-lv.tmx.gz">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-lzh (21 sentence pairs, 42 words) - TMX format' href="download.php?f=Tatoeba/ja-lzh.tmx.gz">21</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Malayalam (2 sentence pairs, 12 words) - TMX format' href="download.php?f=Tatoeba/ja-ml.tmx.gz">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Mongolian (54 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/ja-mn.tmx.gz">54</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Marathi (248 sentence pairs, 1.46k words) - TMX format' href="download.php?f=Tatoeba/ja-mr.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Maltese (1 sentence pairs, 7 words) - TMX format' href="download.php?f=Tatoeba/ja-mt.tmx.gz">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-nan (3 sentence pairs, 12 words) - TMX format' href="download.php?f=Tatoeba/ja-nan.tmx.gz">3</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-BokmÃ¥l, Norwegian (757 sentence pairs, 6.15k words) - TMX format' href="download.php?f=Tatoeba/ja-nb.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Low German (205 sentence pairs, 1.36k words) - TMX format' href="download.php?f=Tatoeba/ja-nds.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Japanese-Dutch (2,619 sentence pairs, 19.04k words) - TMX format' href="download.php?f=Tatoeba/ja-nl.tmx.gz">2.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Norse, Old (8 sentence pairs, 59 words) - TMX format' href="download.php?f=Tatoeba/ja-non.tmx.gz">8</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-nov (1 sentence pairs, 5 words) - TMX format' href="download.php?f=Tatoeba/ja-nov.tmx.gz">1</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Occitan (post 1500) (58 sentence pairs, 0.42k words) - TMX format' href="download.php?f=Tatoeba/ja-oc.tmx.gz">58</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-orv (4 sentence pairs, 18 words) - TMX format' href="download.php?f=Tatoeba/ja-orv.tmx.gz">4</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ossetian (4 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/ja-os.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-pes (109 sentence pairs, 0.88k words) - TMX format' href="download.php?f=Tatoeba/ja-pes.tmx.gz">0.1k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Japanese-Polish (22,259 sentence pairs, 0.15M words) - TMX format' href="download.php?f=Tatoeba/ja-pl.tmx.gz">22.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-prg (6 sentence pairs, 29 words) - TMX format' href="download.php?f=Tatoeba/ja-prg.tmx.gz">6</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Japanese-Portuguese (1,806 sentence pairs, 14.00k words) - TMX format' href="download.php?f=Tatoeba/ja-pt.tmx.gz">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Romanian (84 sentence pairs, 0.56k words) - TMX format' href="download.php?f=Tatoeba/ja-ro.tmx.gz">84</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Japanese-Russian (11,911 sentence pairs, 77.03k words) - TMX format' href="download.php?f=Tatoeba/ja-ru.tmx.gz">11.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Sanskrit (8 sentence pairs, 31 words) - TMX format' href="download.php?f=Tatoeba/ja-sa.tmx.gz">8</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Slovenian (60 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/ja-sl.tmx.gz">60</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Serbian (12 sentence pairs, 89 words) - TMX format' href="download.php?f=Tatoeba/ja-sr.tmx.gz">12</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Swedish (104 sentence pairs, 0.81k words) - TMX format' href="download.php?f=Tatoeba/ja-sv.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Tajik (2 sentence pairs, 13 words) - TMX format' href="download.php?f=Tatoeba/ja-tg.tmx.gz">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Thai (23 sentence pairs, 50 words) - TMX format' href="download.php?f=Tatoeba/ja-th.tmx.gz">23</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Tagalog (66 sentence pairs, 0.39k words) - TMX format' href="download.php?f=Tatoeba/ja-tl.tmx.gz">66</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Klingon (453 sentence pairs, 2.23k words) - TMX format' href="download.php?f=Tatoeba/ja-tlh.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-toki (52 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/ja-toki.tmx.gz">52</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Turkish (486 sentence pairs, 2.91k words) - TMX format' href="download.php?f=Tatoeba/ja-tr.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Tatar (67 sentence pairs, 0.38k words) - TMX format' href="download.php?f=Tatoeba/ja-tt.tmx.gz">67</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Uighur (57 sentence pairs, 0.31k words) - TMX format' href="download.php?f=Tatoeba/ja-ug.tmx.gz">57</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Ukrainian (342 sentence pairs, 2.00k words) - TMX format' href="download.php?f=Tatoeba/ja-uk.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Urdu (7 sentence pairs, 41 words) - TMX format' href="download.php?f=Tatoeba/ja-ur.tmx.gz">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Uzbek (4 sentence pairs, 14 words) - TMX format' href="download.php?f=Tatoeba/ja-uz.tmx.gz">4</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Japanese-Vietnamese (820 sentence pairs, 8.17k words) - TMX format' href="download.php?f=Tatoeba/ja-vi.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-VolapÃ¼k (2 sentence pairs, 11 words) - TMX format' href="download.php?f=Tatoeba/ja-vo.tmx.gz">2</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-wuu (13 sentence pairs, 26 words) - TMX format' href="download.php?f=Tatoeba/ja-wuu.tmx.gz">13</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Kalmyk (4 sentence pairs, 27 words) - TMX format' href="download.php?f=Tatoeba/ja-xal.tmx.gz">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-Yiddish (7 sentence pairs, 57 words) - TMX format' href="download.php?f=Tatoeba/ja-yi.tmx.gz">7</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-yue (214 sentence pairs, 0.43k words) - TMX format' href="download.php?f=Tatoeba/ja-yue.tmx.gz">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Japanese-zsm (74 sentence pairs, 0.51k words) - TMX format' href="download.php?f=Tatoeba/ja-zsm.tmx.gz">74</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized jbo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.jbo.gz">jbo</a>
</th><td>1</td> <td>79.3k</td> <td>10.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lojban-cmn (403 sentence pairs, 2.54k words) - Moses format' href="download.php?f=Tatoeba/cmn-jbo.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lojban-German (548 sentence pairs, 6.70k words) - Moses format' href="download.php?f=Tatoeba/de-jbo.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Lojban-English (7,872 sentence pairs, 97.52k words) - Moses format' href="download.php?f=Tatoeba/en-jbo.txt.zip">7.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lojban-Esperanto (1,091 sentence pairs, 12.46k words) - Moses format' href="download.php?f=Tatoeba/eo-jbo.txt.zip">1.1k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lojban-Spanish (1,450 sentence pairs, 16.70k words) - Moses format' href="download.php?f=Tatoeba/es-jbo.txt.zip">1.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Lojban-French (1,032 sentence pairs, 14.60k words) - Moses format' href="download.php?f=Tatoeba/fr-jbo.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lojban-Italian (155 sentence pairs, 1.59k words) - Moses format' href="download.php?f=Tatoeba/it-jbo.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lojban-Japanese (787 sentence pairs, 5.71k words) - Moses format' href="download.php?f=Tatoeba/ja-jbo.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Lojban-Russian (701 sentence pairs, 7.90k words) - TMX format' href="download.php?f=Tatoeba/jbo-ru.tmx.gz">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ka plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ka.gz">ka</a>
</th><td>1</td> <td>2.1k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-English (361 sentence pairs, 3.13k words) - Moses format' href="download.php?f=Tatoeba/en-ka.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Japanese (54 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/ja-ka.txt.zip">54</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Georgian-Russian (79 sentence pairs, 0.49k words) - TMX format' href="download.php?f=Tatoeba/ka-ru.tmx.gz">79</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.kk.gz">kk</a>
</th><td>1</td> <td>20.5k</td> <td>2.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kazakh-English (175 sentence pairs, 1.93k words) - Moses format' href="download.php?f=Tatoeba/en-kk.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kazakh-Esperanto (48 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/eo-kk.txt.zip">48</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kazakh-French (10 sentence pairs, 85 words) - Moses format' href="download.php?f=Tatoeba/fr-kk.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Kazakh-Russian (2,007 sentence pairs, 34.49k words) - TMX format' href="download.php?f=Tatoeba/kk-ru.tmx.gz">2.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized km plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.km.gz">km</a>
</th><td>1</td> <td>4.5k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-cmn (6 sentence pairs, 16 words) - Moses format' href="download.php?f=Tatoeba/cmn-km.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-English (121 sentence pairs, 0.98k words) - Moses format' href="download.php?f=Tatoeba/en-km.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Central Khmer-Japanese (9 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/ja-km.txt.zip">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ko plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ko.gz">ko</a>
</th><td>1</td> <td>9.0k</td> <td>1.6k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Arabic (90 sentence pairs, 0.77k words) - Moses format' href="download.php?f=Tatoeba/ar-ko.txt.zip">90</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-cmn (88 sentence pairs, 0.47k words) - Moses format' href="download.php?f=Tatoeba/cmn-ko.txt.zip">88</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-German (537 sentence pairs, 5.60k words) - Moses format' href="download.php?f=Tatoeba/de-ko.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Korean-English (909 sentence pairs, 10.21k words) - Moses format' href="download.php?f=Tatoeba/en-ko.txt.zip">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Esperanto (82 sentence pairs, 0.82k words) - Moses format' href="download.php?f=Tatoeba/eo-ko.txt.zip">82</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Spanish (382 sentence pairs, 4.35k words) - Moses format' href="download.php?f=Tatoeba/es-ko.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Finnish (207 sentence pairs, 1.68k words) - Moses format' href="download.php?f=Tatoeba/fi-ko.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-French (183 sentence pairs, 2.09k words) - Moses format' href="download.php?f=Tatoeba/fr-ko.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Indonesian (2 sentence pairs, 10 words) - Moses format' href="download.php?f=Tatoeba/id-ko.txt.zip">2</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Italian (42 sentence pairs, 0.36k words) - Moses format' href="download.php?f=Tatoeba/it-ko.txt.zip">42</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Japanese (209 sentence pairs, 1.16k words) - Moses format' href="download.php?f=Tatoeba/ja-ko.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Korean (59 sentence pairs, 0.37k words) - Moses format' href="download.php?f=Tatoeba/ko-ko.txt.zip">59</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Mongolian (19 sentence pairs, 0.19k words) - TMX format' href="download.php?f=Tatoeba/ko-mn.tmx.gz">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Dutch (25 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/ko-nl.tmx.gz">25</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Polish (50 sentence pairs, 0.52k words) - TMX format' href="download.php?f=Tatoeba/ko-pl.tmx.gz">50</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Portuguese (30 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/ko-pt.tmx.gz">30</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Romanian (10 sentence pairs, 92 words) - TMX format' href="download.php?f=Tatoeba/ko-ro.tmx.gz">10</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Russian (174 sentence pairs, 1.62k words) - TMX format' href="download.php?f=Tatoeba/ko-ru.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Klingon (2 sentence pairs, 6 words) - TMX format' href="download.php?f=Tatoeba/ko-tlh.tmx.gz">2</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Turkish (101 sentence pairs, 0.84k words) - TMX format' href="download.php?f=Tatoeba/ko-tr.tmx.gz">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Uighur (9 sentence pairs, 50 words) - TMX format' href="download.php?f=Tatoeba/ko-ug.tmx.gz">9</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Ukrainian (16 sentence pairs, 0.14k words) - TMX format' href="download.php?f=Tatoeba/ko-uk.tmx.gz">16</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-Vietnamese (29 sentence pairs, 0.29k words) - TMX format' href="download.php?f=Tatoeba/ko-vi.tmx.gz">29</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Korean-yue (111 sentence pairs, 0.59k words) - TMX format' href="download.php?f=Tatoeba/ko-yue.tmx.gz">0.1k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ksh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ksh.gz">ksh</a>
</th><td>1</td> <td>59</td> <td>11</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='ksh-English (6 sentence pairs, 47 words) - Moses format' href="download.php?f=Tatoeba/en-ksh.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='ksh-Japanese (3 sentence pairs, 15 words) - Moses format' href="download.php?f=Tatoeba/ja-ksh.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ku plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ku.gz">ku</a>
</th><td>1</td> <td>2.2k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-cmn (5 sentence pairs, 26 words) - Moses format' href="download.php?f=Tatoeba/cmn-ku.txt.zip">5</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-German (4 sentence pairs, 54 words) - Moses format' href="download.php?f=Tatoeba/de-ku.txt.zip">4</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-English (43 sentence pairs, 0.47k words) - Moses format' href="download.php?f=Tatoeba/en-ku.txt.zip">43</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-French (22 sentence pairs, 0.34k words) - Moses format' href="download.php?f=Tatoeba/fr-ku.txt.zip">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-Italian (5 sentence pairs, 66 words) - Moses format' href="download.php?f=Tatoeba/it-ku.txt.zip">5</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kurdish-Japanese (9 sentence pairs, 62 words) - Moses format' href="download.php?f=Tatoeba/ja-ku.txt.zip">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized kw plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.kw.gz">kw</a>
</th><td>1</td> <td>0.8k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Cornish-English (123 sentence pairs, 1.05k words) - Moses format' href="download.php?f=Tatoeba/en-kw.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized la plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.la.gz">la</a>
</th><td>1</td> <td>70.1k</td> <td>12.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-cmn (38 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/cmn-la.txt.zip">38</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-Czech (22 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/cs-la.txt.zip">22</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latin-German (1,390 sentence pairs, 14.23k words) - Moses format' href="download.php?f=Tatoeba/de-la.txt.zip">1.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Latin-English (6,981 sentence pairs, 67.64k words) - Moses format' href="download.php?f=Tatoeba/en-la.txt.zip">7.0k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Latin-Esperanto (2,972 sentence pairs, 29.86k words) - Moses format' href="download.php?f=Tatoeba/eo-la.txt.zip">3.0k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Latin-Spanish (2,264 sentence pairs, 22.36k words) - Moses format' href="download.php?f=Tatoeba/es-la.txt.zip">2.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latin-French (1,970 sentence pairs, 19.25k words) - Moses format' href="download.php?f=Tatoeba/fr-la.txt.zip">2.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Latin-Italian (1,343 sentence pairs, 14.44k words) - Moses format' href="download.php?f=Tatoeba/it-la.txt.zip">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-Japanese (93 sentence pairs, 0.52k words) - Moses format' href="download.php?f=Tatoeba/ja-la.txt.zip">93</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-Dutch (228 sentence pairs, 2.10k words) - TMX format' href="download.php?f=Tatoeba/la-nl.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Latin-Portuguese (3,238 sentence pairs, 33.90k words) - TMX format' href="download.php?f=Tatoeba/la-pt.tmx.gz">3.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-Russian (463 sentence pairs, 4.38k words) - TMX format' href="download.php?f=Tatoeba/la-ru.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latin-wuu (2 sentence pairs, 7 words) - TMX format' href="download.php?f=Tatoeba/la-wuu.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lad plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lad.gz">lad</a>
</th><td>1</td> <td>0.5k</td> <td>62</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ladino-German (8 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/de-lad.txt.zip">8</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ladino-English (40 sentence pairs, 0.48k words) - Moses format' href="download.php?f=Tatoeba/en-lad.txt.zip">40</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ladino-Japanese (1 sentence pairs, 4 words) - Moses format' href="download.php?f=Tatoeba/ja-lad.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lld plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lld.gz">lld</a>
</th><td>1</td> <td>0.6k</td> <td>74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lld-English (12 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/en-lld.txt.zip">12</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lld-Spanish (3 sentence pairs, 28 words) - Moses format' href="download.php?f=Tatoeba/es-lld.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lld-French (21 sentence pairs, 0.39k words) - Moses format' href="download.php?f=Tatoeba/fr-lld.txt.zip">21</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lo.gz">lo</a>
</th><td>1</td> <td>0.1k</td> <td>21</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lao-English (18 sentence pairs, 97 words) - Moses format' href="download.php?f=Tatoeba/en-lo.txt.zip">18</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lao-French (1 sentence pairs, 39 words) - Moses format' href="download.php?f=Tatoeba/fr-lo.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lao-Japanese (1 sentence pairs, 3 words) - Moses format' href="download.php?f=Tatoeba/ja-lo.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lt.gz">lt</a>
</th><td>1</td> <td>62.1k</td> <td>10.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-cmn (26 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/cmn-lt.txt.zip">26</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-German (424 sentence pairs, 5.33k words) - Moses format' href="download.php?f=Tatoeba/de-lt.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Lithuanian-English (6,302 sentence pairs, 69.12k words) - Moses format' href="download.php?f=Tatoeba/en-lt.txt.zip">6.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Esperanto (101 sentence pairs, 1.07k words) - Moses format' href="download.php?f=Tatoeba/eo-lt.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Spanish (107 sentence pairs, 1.17k words) - Moses format' href="download.php?f=Tatoeba/es-lt.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-French (97 sentence pairs, 1.14k words) - Moses format' href="download.php?f=Tatoeba/fr-lt.txt.zip">97</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Indonesian (1 sentence pairs, 14 words) - Moses format' href="download.php?f=Tatoeba/id-lt.txt.zip">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Italian (175 sentence pairs, 1.81k words) - Moses format' href="download.php?f=Tatoeba/it-lt.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Lithuanian-Japanese (128 sentence pairs, 0.75k words) - Moses format' href="download.php?f=Tatoeba/ja-lt.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Lithuanian-Russian (2,755 sentence pairs, 27.21k words) - TMX format' href="download.php?f=Tatoeba/lt-ru.tmx.gz">2.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lv.gz">lv</a>
</th><td>1</td> <td>7.6k</td> <td>1.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-cmn (37 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/cmn-lv.txt.zip">37</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-German (28 sentence pairs, 0.24k words) - Moses format' href="download.php?f=Tatoeba/de-lv.txt.zip">28</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Latvian-English (1,040 sentence pairs, 10.74k words) - Moses format' href="download.php?f=Tatoeba/en-lv.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-French (22 sentence pairs, 0.17k words) - Moses format' href="download.php?f=Tatoeba/fr-lv.txt.zip">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Italian (15 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/it-lv.txt.zip">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Japanese (2 sentence pairs, 9 words) - Moses format' href="download.php?f=Tatoeba/ja-lv.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-Russian (174 sentence pairs, 1.55k words) - TMX format' href="download.php?f=Tatoeba/lv-ru.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Latvian-wuu (4 sentence pairs, 13 words) - TMX format' href="download.php?f=Tatoeba/lv-wuu.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized lzh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.lzh.gz">lzh</a>
</th><td>1</td> <td>8.8k</td> <td>1.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-cmn (86 sentence pairs, 0.18k words) - Moses format' href="download.php?f=Tatoeba/cmn-lzh.txt.zip">86</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-German (43 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/de-lzh.txt.zip">43</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-English (474 sentence pairs, 4.53k words) - Moses format' href="download.php?f=Tatoeba/en-lzh.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-Spanish (12 sentence pairs, 74 words) - Moses format' href="download.php?f=Tatoeba/es-lzh.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-French (80 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/fr-lzh.txt.zip">80</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-Hebrew (67 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/he-lzh.txt.zip">67</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-Japanese (21 sentence pairs, 42 words) - Moses format' href="download.php?f=Tatoeba/ja-lzh.txt.zip">21</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-Portuguese (4 sentence pairs, 31 words) - TMX format' href="download.php?f=Tatoeba/lzh-pt.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='lzh-Russian (624 sentence pairs, 5.59k words) - TMX format' href="download.php?f=Tatoeba/lzh-ru.tmx.gz">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.mg.gz">mg</a>
</th><td>1</td> <td>85</td> <td>20</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malagasy-English (19 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/en-mg.txt.zip">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.mi.gz">mi</a>
</th><td>1</td> <td>0.1k</td> <td>19</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maori-English (19 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/en-mi.txt.zip">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ml plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ml.gz">ml</a>
</th><td>1</td> <td>11.4k</td> <td>0.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-English (668 sentence pairs, 6.93k words) - Moses format' href="download.php?f=Tatoeba/en-ml.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Malayalam-Japanese (2 sentence pairs, 12 words) - Moses format' href="download.php?f=Tatoeba/ja-ml.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.mn.gz">mn</a>
</th><td>1</td> <td>3.0k</td> <td>0.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Mongolian-English (226 sentence pairs, 3.22k words) - Moses format' href="download.php?f=Tatoeba/en-mn.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Mongolian-Spanish (12 sentence pairs, 0.13k words) - Moses format' href="download.php?f=Tatoeba/es-mn.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Mongolian-French (18 sentence pairs, 0.21k words) - Moses format' href="download.php?f=Tatoeba/fr-mn.txt.zip">18</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Mongolian-Japanese (54 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/ja-mn.txt.zip">54</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Mongolian-Korean (19 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/ko-mn.txt.zip">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.mr.gz">mr</a>
</th><td>1</td> <td>0.1M</td> <td>17.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Marathi-English (16,857 sentence pairs, 0.18M words) - Moses format' href="download.php?f=Tatoeba/en-mr.txt.zip">16.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Marathi-Japanese (248 sentence pairs, 1.46k words) - Moses format' href="download.php?f=Tatoeba/ja-mr.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized mt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.mt.gz">mt</a>
</th><td>1</td> <td>0.5k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Arabic (27 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/ar-mt.txt.zip">27</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-German (64 sentence pairs, 0.34k words) - Moses format' href="download.php?f=Tatoeba/de-mt.txt.zip">64</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Greek (59 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/el-mt.txt.zip">59</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-English (107 sentence pairs, 0.72k words) - Moses format' href="download.php?f=Tatoeba/en-mt.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Spanish (72 sentence pairs, 0.36k words) - Moses format' href="download.php?f=Tatoeba/es-mt.txt.zip">72</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-French (24 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/fr-mt.txt.zip">24</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Italian (20 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/it-mt.txt.zip">20</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Japanese (1 sentence pairs, 7 words) - Moses format' href="download.php?f=Tatoeba/ja-mt.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Dutch (5 sentence pairs, 26 words) - TMX format' href="download.php?f=Tatoeba/mt-nl.tmx.gz">5</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Maltese-Portuguese (7 sentence pairs, 39 words) - TMX format' href="download.php?f=Tatoeba/mt-pt.tmx.gz">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nan plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.nan.gz">nan</a>
</th><td>1</td> <td>29</td> <td>7</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='nan-cmn (7 sentence pairs, 28 words) - Moses format' href="download.php?f=Tatoeba/cmn-nan.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='nan-English (7 sentence pairs, 52 words) - Moses format' href="download.php?f=Tatoeba/en-nan.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='nan-Japanese (3 sentence pairs, 12 words) - Moses format' href="download.php?f=Tatoeba/ja-nan.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.nb.gz">nb</a>
</th><td>1</td> <td>75.9k</td> <td>9.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-cmn (21 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/cmn-nb.txt.zip">21</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Czech (17 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/cs-nb.txt.zip">17</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-German (3,351 sentence pairs, 55.45k words) - Moses format' href="download.php?f=Tatoeba/de-nb.txt.zip">3.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Greek (4 sentence pairs, 29 words) - Moses format' href="download.php?f=Tatoeba/el-nb.txt.zip">4</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='BokmÃ¥l, Norwegian-English (5,525 sentence pairs, 72.80k words) - Moses format' href="download.php?f=Tatoeba/en-nb.txt.zip">5.5k</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Esperanto (3,305 sentence pairs, 53.84k words) - Moses format' href="download.php?f=Tatoeba/eo-nb.txt.zip">3.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Spanish (647 sentence pairs, 8.91k words) - Moses format' href="download.php?f=Tatoeba/es-nb.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-French (163 sentence pairs, 2.28k words) - Moses format' href="download.php?f=Tatoeba/fr-nb.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Italian (810 sentence pairs, 14.01k words) - Moses format' href="download.php?f=Tatoeba/it-nb.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Japanese (758 sentence pairs, 6.15k words) - Moses format' href="download.php?f=Tatoeba/ja-nb.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Dutch (175 sentence pairs, 2.20k words) - TMX format' href="download.php?f=Tatoeba/nb-nl.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Portuguese (424 sentence pairs, 6.43k words) - TMX format' href="download.php?f=Tatoeba/nb-pt.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Russian (976 sentence pairs, 15.33k words) - TMX format' href="download.php?f=Tatoeba/nb-ru.tmx.gz">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='BokmÃ¥l, Norwegian-Swedish (176 sentence pairs, 2.25k words) - TMX format' href="download.php?f=Tatoeba/nb-sv.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nds plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.nds.gz">nds</a>
</th><td>1</td> <td>0.1M</td> <td>17.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-cmn (37 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/cmn-nds.txt.zip">37</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Low German-German (16,317 sentence pairs, 0.21M words) - Moses format' href="download.php?f=Tatoeba/de-nds.txt.zip">16.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Greek (25 sentence pairs, 0.18k words) - Moses format' href="download.php?f=Tatoeba/el-nds.txt.zip">25</a>
</td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Low German-English (4,670 sentence pairs, 56.24k words) - Moses format' href="download.php?f=Tatoeba/en-nds.txt.zip">4.7k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Low German-Esperanto (2,474 sentence pairs, 28.20k words) - Moses format' href="download.php?f=Tatoeba/eo-nds.txt.zip">2.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Spanish (641 sentence pairs, 6.53k words) - Moses format' href="download.php?f=Tatoeba/es-nds.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-French (528 sentence pairs, 5.75k words) - Moses format' href="download.php?f=Tatoeba/fr-nds.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Italian (233 sentence pairs, 2.48k words) - Moses format' href="download.php?f=Tatoeba/it-nds.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Japanese (205 sentence pairs, 1.36k words) - Moses format' href="download.php?f=Tatoeba/ja-nds.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Low German-Dutch (2,378 sentence pairs, 27.74k words) - TMX format' href="download.php?f=Tatoeba/nds-nl.tmx.gz">2.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Portuguese (170 sentence pairs, 1.68k words) - TMX format' href="download.php?f=Tatoeba/nds-pt.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Russian (435 sentence pairs, 4.45k words) - TMX format' href="download.php?f=Tatoeba/nds-ru.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Low German-Ukrainian (20 sentence pairs, 0.23k words) - TMX format' href="download.php?f=Tatoeba/nds-uk.tmx.gz">20</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.nl.gz">nl</a>
</th><td>1</td> <td>0.3M</td> <td>34.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Belarusian (524 sentence pairs, 6.49k words) - Moses format' href="download.php?f=Tatoeba/be-nl.txt.zip">0.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Bulgarian (36 sentence pairs, 0.42k words) - Moses format' href="download.php?f=Tatoeba/bg-nl.txt.zip">36</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Breton (5 sentence pairs, 95 words) - Moses format' href="download.php?f=Tatoeba/br-nl.txt.zip">5</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-cmn (1,609 sentence pairs, 13.07k words) - Moses format' href="download.php?f=Tatoeba/cmn-nl.txt.zip">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Czech (56 sentence pairs, 0.74k words) - Moses format' href="download.php?f=Tatoeba/cs-nl.txt.zip">56</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Danish (1,083 sentence pairs, 11.71k words) - Moses format' href="download.php?f=Tatoeba/da-nl.txt.zip">1.1k</a>
</td><td bgcolor="#ffe0de"><a rel="nofollow" title='Dutch-German (10,827 sentence pairs, 0.14M words) - Moses format' href="download.php?f=Tatoeba/de-nl.txt.zip">10.8k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Greek (39 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/el-nl.txt.zip">39</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Dutch-English (18,013 sentence pairs, 0.24M words) - Moses format' href="download.php?f=Tatoeba/en-nl.txt.zip">18.0k</a>
</td><td bgcolor="#fff2ec"><a rel="nofollow" title='Dutch-Esperanto (28,755 sentence pairs, 0.39M words) - Moses format' href="download.php?f=Tatoeba/eo-nl.txt.zip">28.8k</a>
</td><td bgcolor="#ffeae7"><a rel="nofollow" title='Dutch-Spanish (18,554 sentence pairs, 0.25M words) - Moses format' href="download.php?f=Tatoeba/es-nl.txt.zip">18.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Finnish (98 sentence pairs, 0.88k words) - Moses format' href="download.php?f=Tatoeba/fi-nl.txt.zip">98</a>
</td><td></td><td bgcolor="#ffdcdb"><a rel="nofollow" title='Dutch-French (7,248 sentence pairs, 96.59k words) - Moses format' href="download.php?f=Tatoeba/fr-nl.txt.zip">7.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Western Frisian (102 sentence pairs, 1.43k words) - Moses format' href="download.php?f=Tatoeba/fy-nl.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Dutch-Hebrew (5,604 sentence pairs, 69.16k words) - Moses format' href="download.php?f=Tatoeba/he-nl.txt.zip">5.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Hungarian (151 sentence pairs, 1.90k words) - Moses format' href="download.php?f=Tatoeba/hu-nl.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Interlingua (International Auxiliary Language Association) (540 sentence pairs, 7.54k words) - Moses format' href="download.php?f=Tatoeba/ia-nl.txt.zip">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Ido (30 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/io-nl.txt.zip">30</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-Italian (1,968 sentence pairs, 22.04k words) - Moses format' href="download.php?f=Tatoeba/it-nl.txt.zip">2.0k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Japanese (2,630 sentence pairs, 19.11k words) - Moses format' href="download.php?f=Tatoeba/ja-nl.txt.zip">2.6k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Korean (25 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/ko-nl.txt.zip">25</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Latin (228 sentence pairs, 2.10k words) - Moses format' href="download.php?f=Tatoeba/la-nl.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Maltese (5 sentence pairs, 26 words) - Moses format' href="download.php?f=Tatoeba/mt-nl.txt.zip">5</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-BokmÃ¥l, Norwegian (175 sentence pairs, 2.20k words) - Moses format' href="download.php?f=Tatoeba/nb-nl.txt.zip">0.2k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Dutch-Low German (2,378 sentence pairs, 27.74k words) - Moses format' href="download.php?f=Tatoeba/nds-nl.txt.zip">2.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Dutch (263 sentence pairs, 3.60k words) - Moses format' href="download.php?f=Tatoeba/nl-nl.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Polish (1,147 sentence pairs, 13.20k words) - TMX format' href="download.php?f=Tatoeba/nl-pl.tmx.gz">1.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Dutch-Portuguese (2,771 sentence pairs, 34.95k words) - TMX format' href="download.php?f=Tatoeba/nl-pt.tmx.gz">2.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Romanian (293 sentence pairs, 4.32k words) - TMX format' href="download.php?f=Tatoeba/nl-ro.tmx.gz">0.3k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Dutch-Russian (3,212 sentence pairs, 39.89k words) - TMX format' href="download.php?f=Tatoeba/nl-ru.tmx.gz">3.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-swh (2 sentence pairs, 58 words) - TMX format' href="download.php?f=Tatoeba/nl-swh.tmx.gz">2</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Klingon (128 sentence pairs, 1.11k words) - TMX format' href="download.php?f=Tatoeba/nl-tlh.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-toki (28 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/nl-toki.tmx.gz">28</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Dutch-Turkish (1,029 sentence pairs, 10.96k words) - TMX format' href="download.php?f=Tatoeba/nl-tr.tmx.gz">1.0k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Dutch-Ukrainian (1,251 sentence pairs, 15.34k words) - TMX format' href="download.php?f=Tatoeba/nl-uk.tmx.gz">1.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Dutch-Vietnamese (33 sentence pairs, 0.47k words) - TMX format' href="download.php?f=Tatoeba/nl-vi.tmx.gz">33</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized non plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.non.gz">non</a>
</th><td>1</td> <td>4.5k</td> <td>0.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-cmn (2 sentence pairs, 14 words) - Moses format' href="download.php?f=Tatoeba/cmn-non.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-German (39 sentence pairs, 0.62k words) - Moses format' href="download.php?f=Tatoeba/de-non.txt.zip">39</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-English (377 sentence pairs, 5.25k words) - Moses format' href="download.php?f=Tatoeba/en-non.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-Esperanto (36 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/eo-non.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-Spanish (28 sentence pairs, 0.38k words) - Moses format' href="download.php?f=Tatoeba/es-non.txt.zip">28</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-French (10 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/fr-non.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Norse, Old-Japanese (8 sentence pairs, 59 words) - Moses format' href="download.php?f=Tatoeba/ja-non.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized nov plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.nov.gz">nov</a>
</th><td>1</td> <td>0.9k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='nov-English (104 sentence pairs, 1.33k words) - Moses format' href="download.php?f=Tatoeba/en-nov.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='nov-Japanese (1 sentence pairs, 5 words) - Moses format' href="download.php?f=Tatoeba/ja-nov.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized npi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.npi.gz">npi</a>
</th><td>1</td> <td>60</td> <td>10</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='npi-English (10 sentence pairs, 74 words) - Moses format' href="download.php?f=Tatoeba/en-npi.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized oc plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.oc.gz">oc</a>
</th><td>1</td> <td>21.6k</td> <td>2.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-cmn (60 sentence pairs, 0.41k words) - Moses format' href="download.php?f=Tatoeba/cmn-oc.txt.zip">60</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-German (138 sentence pairs, 1.82k words) - Moses format' href="download.php?f=Tatoeba/de-oc.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Occitan (post 1500)-English (774 sentence pairs, 8.14k words) - Moses format' href="download.php?f=Tatoeba/en-oc.txt.zip">0.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Spanish (58 sentence pairs, 0.81k words) - Moses format' href="download.php?f=Tatoeba/es-oc.txt.zip">58</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Occitan (post 1500)-French (730 sentence pairs, 10.05k words) - Moses format' href="download.php?f=Tatoeba/fr-oc.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Japanese (58 sentence pairs, 0.42k words) - Moses format' href="download.php?f=Tatoeba/ja-oc.txt.zip">58</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Occitan (post 1500)-Russian (34 sentence pairs, 0.36k words) - TMX format' href="download.php?f=Tatoeba/oc-ru.tmx.gz">34</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized orv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.orv.gz">orv</a>
</th><td>1</td> <td>6.1k</td> <td>1.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='orv-English (247 sentence pairs, 2.23k words) - Moses format' href="download.php?f=Tatoeba/en-orv.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='orv-Esperanto (22 sentence pairs, 0.21k words) - Moses format' href="download.php?f=Tatoeba/eo-orv.txt.zip">22</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='orv-French (31 sentence pairs, 0.35k words) - Moses format' href="download.php?f=Tatoeba/fr-orv.txt.zip">31</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='orv-Japanese (4 sentence pairs, 18 words) - Moses format' href="download.php?f=Tatoeba/ja-orv.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='orv-Russian (154 sentence pairs, 1.18k words) - TMX format' href="download.php?f=Tatoeba/orv-ru.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='orv-Ukrainian (900 sentence pairs, 7.35k words) - TMX format' href="download.php?f=Tatoeba/orv-uk.tmx.gz">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized os plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.os.gz">os</a>
</th><td>1</td> <td>0.9k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ossetian-English (41 sentence pairs, 0.41k words) - Moses format' href="download.php?f=Tatoeba/en-os.txt.zip">41</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ossetian-Esperanto (43 sentence pairs, 0.40k words) - Moses format' href="download.php?f=Tatoeba/eo-os.txt.zip">43</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ossetian-French (12 sentence pairs, 86 words) - Moses format' href="download.php?f=Tatoeba/fr-os.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ossetian-Japanese (4 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/ja-os.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pcd plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pcd.gz">pcd</a>
</th><td>1</td> <td>0.8k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pcd-French (100 sentence pairs, 1.22k words) - Moses format' href="download.php?f=Tatoeba/fr-pcd.txt.zip">100</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pes plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pes.gz">pes</a>
</th><td>1</td> <td>0.1M</td> <td>13.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-cmn (42 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/cmn-pes.txt.zip">42</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-German (184 sentence pairs, 2.53k words) - Moses format' href="download.php?f=Tatoeba/de-pes.txt.zip">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-Greek (6 sentence pairs, 37 words) - Moses format' href="download.php?f=Tatoeba/el-pes.txt.zip">6</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='pes-English (2,758 sentence pairs, 42.59k words) - Moses format' href="download.php?f=Tatoeba/en-pes.txt.zip">2.8k</a>
</td><td bgcolor="#ffdfdd"><a rel="nofollow" title='pes-Esperanto (9,683 sentence pairs, 0.13M words) - Moses format' href="download.php?f=Tatoeba/eo-pes.txt.zip">9.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-Spanish (70 sentence pairs, 0.88k words) - Moses format' href="download.php?f=Tatoeba/es-pes.txt.zip">70</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-French (169 sentence pairs, 2.38k words) - Moses format' href="download.php?f=Tatoeba/fr-pes.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-Japanese (109 sentence pairs, 0.88k words) - Moses format' href="download.php?f=Tatoeba/ja-pes.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pes-Portuguese (31 sentence pairs, 0.38k words) - TMX format' href="download.php?f=Tatoeba/pes-pt.tmx.gz">31</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pl.gz">pl</a>
</th><td>1</td> <td>0.4M</td> <td>58.0k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Arabic (199 sentence pairs, 1.72k words) - Moses format' href="download.php?f=Tatoeba/ar-pl.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Belarusian (200 sentence pairs, 1.90k words) - Moses format' href="download.php?f=Tatoeba/be-pl.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Bulgarian (63 sentence pairs, 0.67k words) - Moses format' href="download.php?f=Tatoeba/bg-pl.txt.zip">63</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-cmn (575 sentence pairs, 3.65k words) - Moses format' href="download.php?f=Tatoeba/cmn-pl.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Czech (356 sentence pairs, 3.55k words) - Moses format' href="download.php?f=Tatoeba/cs-pl.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Polish-German (6,105 sentence pairs, 72.18k words) - Moses format' href="download.php?f=Tatoeba/de-pl.txt.zip">6.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Greek (71 sentence pairs, 0.55k words) - Moses format' href="download.php?f=Tatoeba/el-pl.txt.zip">71</a>
</td><td bgcolor="#ffebe7"><a rel="nofollow" title='Polish-English (21,552 sentence pairs, 0.27M words) - Moses format' href="download.php?f=Tatoeba/en-pl.txt.zip">21.6k</a>
</td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Polish-Esperanto (5,701 sentence pairs, 64.24k words) - Moses format' href="download.php?f=Tatoeba/eo-pl.txt.zip">5.7k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Polish-Spanish (2,915 sentence pairs, 34.52k words) - Moses format' href="download.php?f=Tatoeba/es-pl.txt.zip">2.9k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Finnish (128 sentence pairs, 1.27k words) - Moses format' href="download.php?f=Tatoeba/fi-pl.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Polish-French (3,070 sentence pairs, 38.52k words) - Moses format' href="download.php?f=Tatoeba/fr-pl.txt.zip">3.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffdfde"><a rel="nofollow" title='Polish-Hebrew (12,532 sentence pairs, 0.12M words) - Moses format' href="download.php?f=Tatoeba/he-pl.txt.zip">12.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Indonesian (15 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/id-pl.txt.zip">15</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Italian (1,629 sentence pairs, 17.24k words) - Moses format' href="download.php?f=Tatoeba/it-pl.txt.zip">1.6k</a>
</td><td bgcolor="#ffe2e0"><a rel="nofollow" title='Polish-Japanese (22,266 sentence pairs, 0.15M words) - Moses format' href="download.php?f=Tatoeba/ja-pl.txt.zip">22.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Korean (50 sentence pairs, 0.52k words) - Moses format' href="download.php?f=Tatoeba/ko-pl.txt.zip">50</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Dutch (1,147 sentence pairs, 13.20k words) - Moses format' href="download.php?f=Tatoeba/nl-pl.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Portuguese (452 sentence pairs, 5.15k words) - TMX format' href="download.php?f=Tatoeba/pl-pt.tmx.gz">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Polish-Russian (1,826 sentence pairs, 18.76k words) - TMX format' href="download.php?f=Tatoeba/pl-ru.tmx.gz">1.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Turkish (212 sentence pairs, 2.01k words) - TMX format' href="download.php?f=Tatoeba/pl-tr.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Polish-Ukrainian (1,205 sentence pairs, 12.01k words) - TMX format' href="download.php?f=Tatoeba/pl-uk.tmx.gz">1.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-Vietnamese (16 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/pl-vi.tmx.gz">16</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Polish-wuu (4 sentence pairs, 21 words) - TMX format' href="download.php?f=Tatoeba/pl-wuu.tmx.gz">4</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pms plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pms.gz">pms</a>
</th><td>1</td> <td>0.3k</td> <td>29</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pms-English (11 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/en-pms.txt.zip">11</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pms-Spanish (8 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/es-pms.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pnb plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pnb.gz">pnb</a>
</th><td>1</td> <td>0.2k</td> <td>21</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='pnb-English (20 sentence pairs, 0.25k words) - Moses format' href="download.php?f=Tatoeba/en-pnb.txt.zip">20</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized prg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.prg.gz">prg</a>
</th><td>1</td> <td>4.1k</td> <td>0.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='prg-German (37 sentence pairs, 0.43k words) - Moses format' href="download.php?f=Tatoeba/de-prg.txt.zip">37</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='prg-English (130 sentence pairs, 1.72k words) - Moses format' href="download.php?f=Tatoeba/en-prg.txt.zip">0.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='prg-Spanish (17 sentence pairs, 0.21k words) - Moses format' href="download.php?f=Tatoeba/es-prg.txt.zip">17</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='prg-French (10 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/fr-prg.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='prg-Japanese (6 sentence pairs, 29 words) - Moses format' href="download.php?f=Tatoeba/ja-prg.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized pt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.pt.gz">pt</a>
</th><td>1</td> <td>1.1M</td> <td>0.1M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Afrikaans (43 sentence pairs, 0.50k words) - Moses format' href="download.php?f=Tatoeba/af-pt.txt.zip">43</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Bulgarian (32 sentence pairs, 0.36k words) - Moses format' href="download.php?f=Tatoeba/bg-pt.txt.zip">32</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-cmn (574 sentence pairs, 3.53k words) - Moses format' href="download.php?f=Tatoeba/cmn-pt.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Czech (25 sentence pairs, 0.38k words) - Moses format' href="download.php?f=Tatoeba/cs-pt.txt.zip">25</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Danish (713 sentence pairs, 7.10k words) - Moses format' href="download.php?f=Tatoeba/da-pt.txt.zip">0.7k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Portuguese-German (5,647 sentence pairs, 75.48k words) - Moses format' href="download.php?f=Tatoeba/de-pt.txt.zip">5.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Greek (169 sentence pairs, 1.68k words) - Moses format' href="download.php?f=Tatoeba/el-pt.txt.zip">0.2k</a>
</td><td bgcolor="#fffdf1"><a rel="nofollow" title='Portuguese-English (60,738 sentence pairs, 0.81M words) - Moses format' href="download.php?f=Tatoeba/en-pt.txt.zip">60.7k</a>
</td><td bgcolor="#fff1ec"><a rel="nofollow" title='Portuguese-Esperanto (26,342 sentence pairs, 0.36M words) - Moses format' href="download.php?f=Tatoeba/eo-pt.txt.zip">26.3k</a>
</td><td bgcolor="#fffcf1"><a rel="nofollow" title='Portuguese-Spanish (53,047 sentence pairs, 0.70M words) - Moses format' href="download.php?f=Tatoeba/es-pt.txt.zip">53.0k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Finnish (81 sentence pairs, 0.75k words) - Moses format' href="download.php?f=Tatoeba/fi-pt.txt.zip">81</a>
</td><td></td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Portuguese-French (18,175 sentence pairs, 0.21M words) - Moses format' href="download.php?f=Tatoeba/fr-pt.txt.zip">18.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Western Frisian (13 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/fy-pt.txt.zip">13</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Gaelic (46 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/gd-pt.txt.zip">46</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Galician (299 sentence pairs, 3.65k words) - Moses format' href="download.php?f=Tatoeba/gl-pt.txt.zip">0.3k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Hebrew (566 sentence pairs, 6.52k words) - Moses format' href="download.php?f=Tatoeba/he-pt.txt.zip">0.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Croatian (68 sentence pairs, 0.66k words) - Moses format' href="download.php?f=Tatoeba/hr-pt.txt.zip">68</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Hungarian (359 sentence pairs, 4.00k words) - Moses format' href="download.php?f=Tatoeba/hu-pt.txt.zip">0.4k</a>
</td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Portuguese-Interlingua (International Auxiliary Language Association) (3,679 sentence pairs, 58.97k words) - Moses format' href="download.php?f=Tatoeba/ia-pt.txt.zip">3.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Indonesian (36 sentence pairs, 0.40k words) - Moses format' href="download.php?f=Tatoeba/id-pt.txt.zip">36</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Icelandic (43 sentence pairs, 0.45k words) - Moses format' href="download.php?f=Tatoeba/is-pt.txt.zip">43</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Portuguese-Italian (3,251 sentence pairs, 39.13k words) - Moses format' href="download.php?f=Tatoeba/it-pt.txt.zip">3.3k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Japanese (1,810 sentence pairs, 14.02k words) - Moses format' href="download.php?f=Tatoeba/ja-pt.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Korean (30 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/ko-pt.txt.zip">30</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Latin (3,244 sentence pairs, 33.94k words) - Moses format' href="download.php?f=Tatoeba/la-pt.txt.zip">3.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-lzh (4 sentence pairs, 31 words) - Moses format' href="download.php?f=Tatoeba/lzh-pt.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Maltese (7 sentence pairs, 39 words) - Moses format' href="download.php?f=Tatoeba/mt-pt.txt.zip">7</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-BokmÃ¥l, Norwegian (424 sentence pairs, 6.43k words) - Moses format' href="download.php?f=Tatoeba/nb-pt.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Low German (170 sentence pairs, 1.68k words) - Moses format' href="download.php?f=Tatoeba/nds-pt.txt.zip">0.2k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Portuguese-Dutch (2,772 sentence pairs, 34.96k words) - Moses format' href="download.php?f=Tatoeba/nl-pt.txt.zip">2.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-pes (31 sentence pairs, 0.38k words) - Moses format' href="download.php?f=Tatoeba/pes-pt.txt.zip">31</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Polish (454 sentence pairs, 5.17k words) - Moses format' href="download.php?f=Tatoeba/pl-pt.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Portuguese-Portuguese (1,008 sentence pairs, 12.87k words) - Moses format' href="download.php?f=Tatoeba/pt-pt.txt.zip">1.0k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Romansh (1 sentence pairs, 6 words) - TMX format' href="download.php?f=Tatoeba/pt-rm.tmx.gz">1</a>
</td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Portuguese-Russian (3,091 sentence pairs, 37.77k words) - TMX format' href="download.php?f=Tatoeba/pt-ru.tmx.gz">3.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Tagalog (1,688 sentence pairs, 21.10k words) - TMX format' href="download.php?f=Tatoeba/pt-tl.tmx.gz">1.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Turkish (785 sentence pairs, 6.60k words) - TMX format' href="download.php?f=Tatoeba/pt-tr.tmx.gz">0.8k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Portuguese-Ukrainian (1,409 sentence pairs, 16.87k words) - TMX format' href="download.php?f=Tatoeba/pt-uk.tmx.gz">1.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-Vietnamese (11 sentence pairs, 0.15k words) - TMX format' href="download.php?f=Tatoeba/pt-vi.tmx.gz">11</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Portuguese-zsm (24 sentence pairs, 0.27k words) - TMX format' href="download.php?f=Tatoeba/pt-zsm.tmx.gz">24</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized qu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.qu.gz">qu</a>
</th><td>1</td> <td>1.0k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Quechua-English (196 sentence pairs, 1.64k words) - Moses format' href="download.php?f=Tatoeba/en-qu.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Quechua-French (3 sentence pairs, 21 words) - Moses format' href="download.php?f=Tatoeba/fr-qu.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized qya plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.qya.gz">qya</a>
</th><td>1</td> <td>0.5k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='qya-English (105 sentence pairs, 0.68k words) - Moses format' href="download.php?f=Tatoeba/en-qya.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='qya-Russian (53 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/qya-ru.tmx.gz">53</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized rm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.rm.gz">rm</a>
</th><td>1</td> <td>0.2k</td> <td>21</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romansh-German (13 sentence pairs, 0.18k words) - Moses format' href="download.php?f=Tatoeba/de-rm.txt.zip">13</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romansh-English (11 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/en-rm.txt.zip">11</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romansh-Spanish (3 sentence pairs, 29 words) - Moses format' href="download.php?f=Tatoeba/es-rm.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romansh-French (1 sentence pairs, 61 words) - Moses format' href="download.php?f=Tatoeba/fr-rm.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romansh-Portuguese (1 sentence pairs, 6 words) - Moses format' href="download.php?f=Tatoeba/pt-rm.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ro plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ro.gz">ro</a>
</th><td>1</td> <td>38.7k</td> <td>4.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-cmn (26 sentence pairs, 0.20k words) - Moses format' href="download.php?f=Tatoeba/cmn-ro.txt.zip">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Czech (8 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/cs-ro.txt.zip">8</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-German (164 sentence pairs, 2.29k words) - Moses format' href="download.php?f=Tatoeba/de-ro.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Romanian-English (3,536 sentence pairs, 52.13k words) - Moses format' href="download.php?f=Tatoeba/en-ro.txt.zip">3.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Esperanto (165 sentence pairs, 2.48k words) - Moses format' href="download.php?f=Tatoeba/eo-ro.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Spanish (188 sentence pairs, 2.84k words) - Moses format' href="download.php?f=Tatoeba/es-ro.txt.zip">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Finnish (4 sentence pairs, 32 words) - Moses format' href="download.php?f=Tatoeba/fi-ro.txt.zip">4</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-French (158 sentence pairs, 2.06k words) - Moses format' href="download.php?f=Tatoeba/fr-ro.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Italian (143 sentence pairs, 2.03k words) - Moses format' href="download.php?f=Tatoeba/it-ro.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Japanese (84 sentence pairs, 0.56k words) - Moses format' href="download.php?f=Tatoeba/ja-ro.txt.zip">84</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Korean (10 sentence pairs, 92 words) - Moses format' href="download.php?f=Tatoeba/ko-ro.txt.zip">10</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Dutch (293 sentence pairs, 4.32k words) - Moses format' href="download.php?f=Tatoeba/nl-ro.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Russian (387 sentence pairs, 4.24k words) - TMX format' href="download.php?f=Tatoeba/ro-ru.tmx.gz">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Turkish (227 sentence pairs, 2.67k words) - TMX format' href="download.php?f=Tatoeba/ro-tr.tmx.gz">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Romanian-Vietnamese (1 sentence pairs, 20 words) - TMX format' href="download.php?f=Tatoeba/ro-vi.tmx.gz">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ru plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ru.gz">ru</a>
</th><td>1</td> <td>1.2M</td> <td>0.2M</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Arabic (266 sentence pairs, 2.39k words) - Moses format' href="download.php?f=Tatoeba/ar-ru.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Belarusian (1,762 sentence pairs, 22.93k words) - Moses format' href="download.php?f=Tatoeba/be-ru.txt.zip">1.8k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Bulgarian (526 sentence pairs, 5.46k words) - Moses format' href="download.php?f=Tatoeba/bg-ru.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Bosnian (29 sentence pairs, 0.19k words) - Moses format' href="download.php?f=Tatoeba/bs-ru.txt.zip">29</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-cmn (3,692 sentence pairs, 23.60k words) - Moses format' href="download.php?f=Tatoeba/cmn-ru.txt.zip">3.7k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Czech (775 sentence pairs, 8.34k words) - Moses format' href="download.php?f=Tatoeba/cs-ru.txt.zip">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Welsh (31 sentence pairs, 0.24k words) - Moses format' href="download.php?f=Tatoeba/cy-ru.txt.zip">31</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-cycl (1 sentence pairs, 12 words) - Moses format' href="download.php?f=Tatoeba/cycl-ru.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Danish (365 sentence pairs, 4.08k words) - Moses format' href="download.php?f=Tatoeba/da-ru.txt.zip">0.4k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Russian-German (26,339 sentence pairs, 0.33M words) - Moses format' href="download.php?f=Tatoeba/de-ru.txt.zip">26.3k</a>
</td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Greek (2,349 sentence pairs, 24.77k words) - Moses format' href="download.php?f=Tatoeba/el-ru.txt.zip">2.3k</a>
</td><td bgcolor="#ffffec"><a rel="nofollow" title='Russian-English (97,568 sentence pairs, 1.20M words) - Moses format' href="download.php?f=Tatoeba/en-ru.txt.zip">97.6k</a>
</td><td bgcolor="#ffefea"><a rel="nofollow" title='Russian-Esperanto (25,228 sentence pairs, 0.33M words) - Moses format' href="download.php?f=Tatoeba/eo-ru.txt.zip">25.2k</a>
</td><td bgcolor="#ffe4e2"><a rel="nofollow" title='Russian-Spanish (15,329 sentence pairs, 0.18M words) - Moses format' href="download.php?f=Tatoeba/es-ru.txt.zip">15.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Estonian (224 sentence pairs, 2.43k words) - Moses format' href="download.php?f=Tatoeba/et-ru.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Basque (10 sentence pairs, 79 words) - Moses format' href="download.php?f=Tatoeba/eu-ru.txt.zip">10</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Finnish (698 sentence pairs, 6.95k words) - Moses format' href="download.php?f=Tatoeba/fi-ru.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#fff4ee"><a rel="nofollow" title='Russian-French (37,934 sentence pairs, 0.42M words) - Moses format' href="download.php?f=Tatoeba/fr-ru.txt.zip">37.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Western Frisian (24 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/fy-ru.txt.zip">24</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Galician (22 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/gl-ru.txt.zip">22</a>
</td><td></td><td bgcolor="#ffd6d6"><a rel="nofollow" title='Russian-Hebrew (4,471 sentence pairs, 45.00k words) - Moses format' href="download.php?f=Tatoeba/he-ru.txt.zip">4.5k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Croatian (193 sentence pairs, 1.96k words) - Moses format' href="download.php?f=Tatoeba/hr-ru.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Hungarian (1,997 sentence pairs, 23.79k words) - Moses format' href="download.php?f=Tatoeba/hu-ru.txt.zip">2.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Armenian (24 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/hy-ru.txt.zip">24</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Interlingua (International Auxiliary Language Association) (1,234 sentence pairs, 17.94k words) - Moses format' href="download.php?f=Tatoeba/ia-ru.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Indonesian (44 sentence pairs, 0.46k words) - Moses format' href="download.php?f=Tatoeba/id-ru.txt.zip">44</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Ido (66 sentence pairs, 0.62k words) - Moses format' href="download.php?f=Tatoeba/io-ru.txt.zip">66</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Icelandic (110 sentence pairs, 1.23k words) - Moses format' href="download.php?f=Tatoeba/is-ru.txt.zip">0.1k</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Russian-Italian (2,691 sentence pairs, 33.89k words) - Moses format' href="download.php?f=Tatoeba/it-ru.txt.zip">2.7k</a>
</td><td bgcolor="#ffdad9"><a rel="nofollow" title='Russian-Japanese (11,963 sentence pairs, 77.29k words) - Moses format' href="download.php?f=Tatoeba/ja-ru.txt.zip">12.0k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Lojban (701 sentence pairs, 7.90k words) - Moses format' href="download.php?f=Tatoeba/jbo-ru.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Georgian (82 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/ka-ru.txt.zip">82</a>
</td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Russian-Kazakh (2,010 sentence pairs, 34.54k words) - Moses format' href="download.php?f=Tatoeba/kk-ru.txt.zip">2.0k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Korean (174 sentence pairs, 1.62k words) - Moses format' href="download.php?f=Tatoeba/ko-ru.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Latin (464 sentence pairs, 4.40k words) - Moses format' href="download.php?f=Tatoeba/la-ru.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Russian-Lithuanian (2,756 sentence pairs, 27.22k words) - Moses format' href="download.php?f=Tatoeba/lt-ru.txt.zip">2.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Latvian (175 sentence pairs, 1.56k words) - Moses format' href="download.php?f=Tatoeba/lv-ru.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-lzh (624 sentence pairs, 5.59k words) - Moses format' href="download.php?f=Tatoeba/lzh-ru.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-BokmÃ¥l, Norwegian (977 sentence pairs, 15.34k words) - Moses format' href="download.php?f=Tatoeba/nb-ru.txt.zip">1.0k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Low German (443 sentence pairs, 4.52k words) - Moses format' href="download.php?f=Tatoeba/nds-ru.txt.zip">0.4k</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Dutch (3,220 sentence pairs, 39.97k words) - Moses format' href="download.php?f=Tatoeba/nl-ru.txt.zip">3.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Occitan (post 1500) (34 sentence pairs, 0.36k words) - Moses format' href="download.php?f=Tatoeba/oc-ru.txt.zip">34</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-orv (154 sentence pairs, 1.18k words) - Moses format' href="download.php?f=Tatoeba/orv-ru.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Russian-Polish (1,832 sentence pairs, 18.79k words) - Moses format' href="download.php?f=Tatoeba/pl-ru.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Russian-Portuguese (3,092 sentence pairs, 37.78k words) - Moses format' href="download.php?f=Tatoeba/pt-ru.txt.zip">3.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-qya (53 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/qya-ru.txt.zip">53</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Romanian (388 sentence pairs, 4.25k words) - Moses format' href="download.php?f=Tatoeba/ro-ru.txt.zip">0.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Russian (872 sentence pairs, 9.43k words) - Moses format' href="download.php?f=Tatoeba/ru-ru.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Serbian (674 sentence pairs, 7.59k words) - TMX format' href="download.php?f=Tatoeba/ru-sr.tmx.gz">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Swedish (325 sentence pairs, 3.36k words) - TMX format' href="download.php?f=Tatoeba/ru-sv.tmx.gz">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Tagalog (15 sentence pairs, 0.17k words) - TMX format' href="download.php?f=Tatoeba/ru-tl.tmx.gz">15</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Klingon (118 sentence pairs, 0.87k words) - TMX format' href="download.php?f=Tatoeba/ru-tlh.tmx.gz">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-toki (474 sentence pairs, 5.72k words) - TMX format' href="download.php?f=Tatoeba/ru-toki.tmx.gz">0.5k</a>
</td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Turkish (1,138 sentence pairs, 9.67k words) - TMX format' href="download.php?f=Tatoeba/ru-tr.tmx.gz">1.1k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Russian-Tatar (792 sentence pairs, 12.99k words) - TMX format' href="download.php?f=Tatoeba/ru-tt.tmx.gz">0.8k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Uighur (525 sentence pairs, 4.91k words) - TMX format' href="download.php?f=Tatoeba/ru-ug.tmx.gz">0.5k</a>
</td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Russian-Ukrainian (6,463 sentence pairs, 69.32k words) - TMX format' href="download.php?f=Tatoeba/ru-uk.tmx.gz">6.5k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Uzbek (65 sentence pairs, 0.53k words) - TMX format' href="download.php?f=Tatoeba/ru-uz.tmx.gz">65</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Vietnamese (159 sentence pairs, 1.99k words) - TMX format' href="download.php?f=Tatoeba/ru-vi.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-Kalmyk (144 sentence pairs, 1.35k words) - TMX format' href="download.php?f=Tatoeba/ru-xal.tmx.gz">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Russian-yue (135 sentence pairs, 0.82k words) - TMX format' href="download.php?f=Tatoeba/ru-yue.tmx.gz">0.1k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sa plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sa.gz">sa</a>
</th><td>1</td> <td>0.2k</td> <td>24</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sanskrit-Japanese (8 sentence pairs, 31 words) - Moses format' href="download.php?f=Tatoeba/ja-sa.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized scn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.scn.gz">scn</a>
</th><td>1</td> <td>0.1k</td> <td>18</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sicilian-German (4 sentence pairs, 71 words) - Moses format' href="download.php?f=Tatoeba/de-scn.txt.zip">4</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sicilian-English (3 sentence pairs, 40 words) - Moses format' href="download.php?f=Tatoeba/en-scn.txt.zip">3</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sicilian-Spanish (4 sentence pairs, 55 words) - Moses format' href="download.php?f=Tatoeba/es-scn.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Sicilian-French (4 sentence pairs, 65 words) - Moses format' href="download.php?f=Tatoeba/fr-scn.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sjn plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sjn.gz">sjn</a>
</th><td>1</td> <td>0.2k</td> <td>37</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='sjn-English (32 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/en-sjn.txt.zip">32</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sl.gz">sl</a>
</th><td>1</td> <td>12.1k</td> <td>2.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-cmn (26 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/cmn-sl.txt.zip">26</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Czech (179 sentence pairs, 1.51k words) - Moses format' href="download.php?f=Tatoeba/cs-sl.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-German (86 sentence pairs, 0.87k words) - Moses format' href="download.php?f=Tatoeba/de-sl.txt.zip">86</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Slovenian-English (1,377 sentence pairs, 15.34k words) - Moses format' href="download.php?f=Tatoeba/en-sl.txt.zip">1.4k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Spanish (49 sentence pairs, 0.48k words) - Moses format' href="download.php?f=Tatoeba/es-sl.txt.zip">49</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-French (67 sentence pairs, 0.83k words) - Moses format' href="download.php?f=Tatoeba/fr-sl.txt.zip">67</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Italian (19 sentence pairs, 0.18k words) - Moses format' href="download.php?f=Tatoeba/it-sl.txt.zip">19</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Japanese (60 sentence pairs, 0.40k words) - Moses format' href="download.php?f=Tatoeba/ja-sl.txt.zip">60</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Slovenian-Vietnamese (8 sentence pairs, 77 words) - TMX format' href="download.php?f=Tatoeba/sl-vi.tmx.gz">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sq plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sq.gz">sq</a>
</th><td>1</td> <td>2.8k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-cmn (24 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/cmn-sq.txt.zip">24</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-English (233 sentence pairs, 3.95k words) - Moses format' href="download.php?f=Tatoeba/en-sq.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-French (4 sentence pairs, 85 words) - Moses format' href="download.php?f=Tatoeba/fr-sq.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-Italian (19 sentence pairs, 0.26k words) - Moses format' href="download.php?f=Tatoeba/it-sq.txt.zip">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Albanian-wuu (3 sentence pairs, 9 words) - TMX format' href="download.php?f=Tatoeba/sq-wuu.tmx.gz">3</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sr.gz">sr</a>
</th><td>1</td> <td>46.2k</td> <td>6.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Belarusian (12 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/be-sr.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-cmn (72 sentence pairs, 0.37k words) - Moses format' href="download.php?f=Tatoeba/cmn-sr.txt.zip">72</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-German (949 sentence pairs, 12.93k words) - Moses format' href="download.php?f=Tatoeba/de-sr.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-English (733 sentence pairs, 8.06k words) - Moses format' href="download.php?f=Tatoeba/en-sr.txt.zip">0.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Spanish (102 sentence pairs, 0.98k words) - Moses format' href="download.php?f=Tatoeba/es-sr.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-French (136 sentence pairs, 1.49k words) - Moses format' href="download.php?f=Tatoeba/fr-sr.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Italian (51 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/it-sr.txt.zip">51</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Japanese (12 sentence pairs, 89 words) - Moses format' href="download.php?f=Tatoeba/ja-sr.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Serbian-Russian (674 sentence pairs, 7.59k words) - Moses format' href="download.php?f=Tatoeba/ru-sr.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Serbian-Ukrainian (33 sentence pairs, 0.33k words) - TMX format' href="download.php?f=Tatoeba/sr-uk.tmx.gz">33</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized sv plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.sv.gz">sv</a>
</th><td>1</td> <td>0.1M</td> <td>14.8k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-cmn (377 sentence pairs, 2.43k words) - Moses format' href="download.php?f=Tatoeba/cmn-sv.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Danish (1,086 sentence pairs, 12.62k words) - Moses format' href="download.php?f=Tatoeba/da-sv.txt.zip">1.1k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Swedish-German (1,906 sentence pairs, 23.23k words) - Moses format' href="download.php?f=Tatoeba/de-sv.txt.zip">1.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffdedd"><a rel="nofollow" title='Swedish-English (9,827 sentence pairs, 0.11M words) - Moses format' href="download.php?f=Tatoeba/en-sv.txt.zip">9.8k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-Esperanto (875 sentence pairs, 9.92k words) - Moses format' href="download.php?f=Tatoeba/eo-sv.txt.zip">0.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Spanish (399 sentence pairs, 4.38k words) - Moses format' href="download.php?f=Tatoeba/es-sv.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd7d7"><a rel="nofollow" title='Swedish-Finnish (5,243 sentence pairs, 53.52k words) - Moses format' href="download.php?f=Tatoeba/fi-sv.txt.zip">5.2k</a>
</td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Swedish-French (685 sentence pairs, 8.19k words) - Moses format' href="download.php?f=Tatoeba/fr-sv.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Italian (358 sentence pairs, 3.98k words) - Moses format' href="download.php?f=Tatoeba/it-sv.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Japanese (105 sentence pairs, 0.81k words) - Moses format' href="download.php?f=Tatoeba/ja-sv.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-BokmÃ¥l, Norwegian (176 sentence pairs, 2.25k words) - Moses format' href="download.php?f=Tatoeba/nb-sv.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Swedish-Russian (325 sentence pairs, 3.36k words) - Moses format' href="download.php?f=Tatoeba/ru-sv.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized swh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.swh.gz">swh</a>
</th><td>1</td> <td>1.0k</td> <td>0.2k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-German (38 sentence pairs, 0.24k words) - Moses format' href="download.php?f=Tatoeba/de-swh.txt.zip">38</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-English (127 sentence pairs, 1.40k words) - Moses format' href="download.php?f=Tatoeba/en-swh.txt.zip">0.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-Esperanto (41 sentence pairs, 0.28k words) - Moses format' href="download.php?f=Tatoeba/eo-swh.txt.zip">41</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-French (18 sentence pairs, 0.16k words) - Moses format' href="download.php?f=Tatoeba/fr-swh.txt.zip">18</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-Dutch (2 sentence pairs, 58 words) - Moses format' href="download.php?f=Tatoeba/nl-swh.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='swh-Turkish (12 sentence pairs, 47 words) - TMX format' href="download.php?f=Tatoeba/swh-tr.tmx.gz">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized te plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.te.gz">te</a>
</th><td>1</td> <td>0.3k</td> <td>50</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Telugu-English (47 sentence pairs, 0.37k words) - Moses format' href="download.php?f=Tatoeba/en-te.txt.zip">47</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tg plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tg.gz">tg</a>
</th><td>1</td> <td>0.3k</td> <td>43</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tajik-cmn (1 sentence pairs, 4 words) - Moses format' href="download.php?f=Tatoeba/cmn-tg.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tajik-Japanese (2 sentence pairs, 13 words) - Moses format' href="download.php?f=Tatoeba/ja-tg.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized th plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.th.gz">th</a>
</th><td>1</td> <td>1.5k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-German (54 sentence pairs, 0.35k words) - Moses format' href="download.php?f=Tatoeba/de-th.txt.zip">54</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-English (173 sentence pairs, 1.20k words) - Moses format' href="download.php?f=Tatoeba/en-th.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Esperanto (47 sentence pairs, 0.30k words) - Moses format' href="download.php?f=Tatoeba/eo-th.txt.zip">47</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-French (44 sentence pairs, 0.37k words) - Moses format' href="download.php?f=Tatoeba/fr-th.txt.zip">44</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Thai-Japanese (23 sentence pairs, 50 words) - Moses format' href="download.php?f=Tatoeba/ja-th.txt.zip">23</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tl plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tl.gz">tl</a>
</th><td>1</td> <td>70.7k</td> <td>9.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd8d7"><a rel="nofollow" title='Tagalog-English (4,912 sentence pairs, 64.01k words) - Moses format' href="download.php?f=Tatoeba/en-tl.txt.zip">4.9k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-Esperanto (1,054 sentence pairs, 13.84k words) - Moses format' href="download.php?f=Tatoeba/eo-tl.txt.zip">1.1k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Spanish (428 sentence pairs, 5.12k words) - Moses format' href="download.php?f=Tatoeba/es-tl.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tagalog-French (649 sentence pairs, 7.92k words) - Moses format' href="download.php?f=Tatoeba/fr-tl.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Hebrew (8 sentence pairs, 69 words) - Moses format' href="download.php?f=Tatoeba/he-tl.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Italian (69 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/it-tl.txt.zip">69</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Japanese (66 sentence pairs, 0.39k words) - Moses format' href="download.php?f=Tatoeba/ja-tl.txt.zip">66</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Tagalog-Portuguese (1,688 sentence pairs, 21.10k words) - Moses format' href="download.php?f=Tatoeba/pt-tl.txt.zip">1.7k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tagalog-Russian (15 sentence pairs, 0.17k words) - Moses format' href="download.php?f=Tatoeba/ru-tl.txt.zip">15</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tlh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tlh.gz">tlh</a>
</th><td>1</td> <td>68.3k</td> <td>10.7k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-cmn (410 sentence pairs, 1.77k words) - Moses format' href="download.php?f=Tatoeba/cmn-tlh.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Czech (2 sentence pairs, 11 words) - Moses format' href="download.php?f=Tatoeba/cs-tlh.txt.zip">2</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Klingon-German (1,753 sentence pairs, 15.78k words) - Moses format' href="download.php?f=Tatoeba/de-tlh.txt.zip">1.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd8d8"><a rel="nofollow" title='Klingon-English (6,535 sentence pairs, 60.80k words) - Moses format' href="download.php?f=Tatoeba/en-tlh.txt.zip">6.5k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Klingon-Esperanto (1,334 sentence pairs, 11.61k words) - Moses format' href="download.php?f=Tatoeba/eo-tlh.txt.zip">1.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Spanish (223 sentence pairs, 1.78k words) - Moses format' href="download.php?f=Tatoeba/es-tlh.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-French (436 sentence pairs, 3.86k words) - Moses format' href="download.php?f=Tatoeba/fr-tlh.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Italian (68 sentence pairs, 0.54k words) - Moses format' href="download.php?f=Tatoeba/it-tlh.txt.zip">68</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Japanese (455 sentence pairs, 2.24k words) - Moses format' href="download.php?f=Tatoeba/ja-tlh.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Korean (2 sentence pairs, 6 words) - Moses format' href="download.php?f=Tatoeba/ko-tlh.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Dutch (128 sentence pairs, 1.11k words) - Moses format' href="download.php?f=Tatoeba/nl-tlh.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Klingon-Russian (118 sentence pairs, 0.87k words) - Moses format' href="download.php?f=Tatoeba/ru-tlh.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized toki plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.toki.gz">toki</a>
</th><td>1</td> <td>18.0k</td> <td>2.0k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-cmn (8 sentence pairs, 61 words) - Moses format' href="download.php?f=Tatoeba/cmn-toki.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='toki-German (607 sentence pairs, 7.94k words) - Moses format' href="download.php?f=Tatoeba/de-toki.txt.zip">0.6k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='toki-English (1,237 sentence pairs, 16.20k words) - Moses format' href="download.php?f=Tatoeba/en-toki.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Esperanto (350 sentence pairs, 4.07k words) - Moses format' href="download.php?f=Tatoeba/eo-toki.txt.zip">0.3k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Spanish (101 sentence pairs, 0.93k words) - Moses format' href="download.php?f=Tatoeba/es-toki.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-French (162 sentence pairs, 1.96k words) - Moses format' href="download.php?f=Tatoeba/fr-toki.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Italian (23 sentence pairs, 0.26k words) - Moses format' href="download.php?f=Tatoeba/it-toki.txt.zip">23</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Japanese (53 sentence pairs, 0.41k words) - Moses format' href="download.php?f=Tatoeba/ja-toki.txt.zip">53</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Dutch (28 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/nl-toki.txt.zip">28</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='toki-Russian (474 sentence pairs, 5.72k words) - Moses format' href="download.php?f=Tatoeba/ru-toki.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tpi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tpi.gz">tpi</a>
</th><td>1</td> <td>0.4k</td> <td>74</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tok Pisin-German (26 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/de-tpi.txt.zip">26</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tok Pisin-English (36 sentence pairs, 0.23k words) - Moses format' href="download.php?f=Tatoeba/en-tpi.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tok Pisin-Esperanto (11 sentence pairs, 100 words) - Moses format' href="download.php?f=Tatoeba/eo-tpi.txt.zip">11</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tpw plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tpw.gz">tpw</a>
</th><td>1</td> <td>0.1k</td> <td>34</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tpw-English (28 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/en-tpw.txt.zip">28</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tpw-Spanish (7 sentence pairs, 34 words) - Moses format' href="download.php?f=Tatoeba/es-tpw.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='tpw-French (6 sentence pairs, 35 words) - Moses format' href="download.php?f=Tatoeba/fr-tpw.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tr plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tr.gz">tr</a>
</th><td>1</td> <td>1.0M</td> <td>0.2M</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Afrikaans (36 sentence pairs, 0.43k words) - Moses format' href="download.php?f=Tatoeba/af-tr.txt.zip">36</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Arabic (406 sentence pairs, 3.68k words) - Moses format' href="download.php?f=Tatoeba/ar-tr.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Belarusian (130 sentence pairs, 1.19k words) - Moses format' href="download.php?f=Tatoeba/be-tr.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Breton (94 sentence pairs, 0.75k words) - Moses format' href="download.php?f=Tatoeba/br-tr.txt.zip">94</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-cmn (439 sentence pairs, 2.15k words) - Moses format' href="download.php?f=Tatoeba/cmn-tr.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Czech (22 sentence pairs, 0.23k words) - Moses format' href="download.php?f=Tatoeba/cs-tr.txt.zip">22</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Turkish-German (3,610 sentence pairs, 35.55k words) - Moses format' href="download.php?f=Tatoeba/de-tr.txt.zip">3.6k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Greek (228 sentence pairs, 1.83k words) - Moses format' href="download.php?f=Tatoeba/el-tr.txt.zip">0.2k</a>
</td><td bgcolor="#ffffe4"><a rel="nofollow" title='Turkish-English (156,554 sentence pairs, 1.73M words) - Moses format' href="download.php?f=Tatoeba/en-tr.txt.zip">0.2M</a>
</td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Turkish-Esperanto (4,132 sentence pairs, 39.63k words) - Moses format' href="download.php?f=Tatoeba/eo-tr.txt.zip">4.1k</a>
</td><td bgcolor="#ffe3e1"><a rel="nofollow" title='Turkish-Spanish (17,693 sentence pairs, 0.16M words) - Moses format' href="download.php?f=Tatoeba/es-tr.txt.zip">17.7k</a>
</td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-Finnish (1,616 sentence pairs, 15.09k words) - Moses format' href="download.php?f=Tatoeba/fi-tr.txt.zip">1.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Faroese (2 sentence pairs, 54 words) - Moses format' href="download.php?f=Tatoeba/fo-tr.txt.zip">2</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Turkish-French (1,879 sentence pairs, 20.02k words) - Moses format' href="download.php?f=Tatoeba/fr-tr.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Western Frisian (25 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/fy-tr.txt.zip">25</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Hebrew (901 sentence pairs, 7.42k words) - Moses format' href="download.php?f=Tatoeba/he-tr.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Indonesian (26 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/id-tr.txt.zip">26</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Italian (662 sentence pairs, 5.90k words) - Moses format' href="download.php?f=Tatoeba/it-tr.txt.zip">0.7k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Japanese (486 sentence pairs, 2.91k words) - Moses format' href="download.php?f=Tatoeba/ja-tr.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Korean (101 sentence pairs, 0.84k words) - Moses format' href="download.php?f=Tatoeba/ko-tr.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Dutch (1,031 sentence pairs, 10.98k words) - Moses format' href="download.php?f=Tatoeba/nl-tr.txt.zip">1.0k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Polish (212 sentence pairs, 2.01k words) - Moses format' href="download.php?f=Tatoeba/pl-tr.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Portuguese (786 sentence pairs, 6.60k words) - Moses format' href="download.php?f=Tatoeba/pt-tr.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Romanian (227 sentence pairs, 2.67k words) - Moses format' href="download.php?f=Tatoeba/ro-tr.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Turkish-Russian (1,139 sentence pairs, 9.67k words) - Moses format' href="download.php?f=Tatoeba/ru-tr.txt.zip">1.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-swh (12 sentence pairs, 47 words) - Moses format' href="download.php?f=Tatoeba/swh-tr.txt.zip">12</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Ukrainian (203 sentence pairs, 1.95k words) - TMX format' href="download.php?f=Tatoeba/tr-uk.tmx.gz">0.2k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Turkish-Vietnamese (28 sentence pairs, 0.40k words) - TMX format' href="download.php?f=Tatoeba/tr-vi.tmx.gz">28</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized tt plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.tt.gz">tt</a>
</th><td>1</td> <td>34.2k</td> <td>4.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-cmn (57 sentence pairs, 0.25k words) - Moses format' href="download.php?f=Tatoeba/cmn-tt.txt.zip">57</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Tatar-German (2,382 sentence pairs, 30.87k words) - Moses format' href="download.php?f=Tatoeba/de-tt.txt.zip">2.4k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-English (362 sentence pairs, 3.46k words) - Moses format' href="download.php?f=Tatoeba/en-tt.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Esperanto (86 sentence pairs, 0.69k words) - Moses format' href="download.php?f=Tatoeba/eo-tt.txt.zip">86</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Spanish (37 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/es-tt.txt.zip">37</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-French (83 sentence pairs, 1.00k words) - Moses format' href="download.php?f=Tatoeba/fr-tt.txt.zip">83</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Italian (36 sentence pairs, 0.40k words) - Moses format' href="download.php?f=Tatoeba/it-tt.txt.zip">36</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Japanese (67 sentence pairs, 0.38k words) - Moses format' href="download.php?f=Tatoeba/ja-tt.txt.zip">67</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Tatar-Russian (802 sentence pairs, 13.26k words) - Moses format' href="download.php?f=Tatoeba/ru-tt.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Ukrainian (94 sentence pairs, 0.76k words) - TMX format' href="download.php?f=Tatoeba/tt-uk.tmx.gz">94</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Tatar-Vietnamese (67 sentence pairs, 0.73k words) - TMX format' href="download.php?f=Tatoeba/tt-vi.tmx.gz">67</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ug plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ug.gz">ug</a>
</th><td>1</td> <td>40.2k</td> <td>7.2k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Arabic (8 sentence pairs, 52 words) - Moses format' href="download.php?f=Tatoeba/ar-ug.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Uighur-cmn (1,881 sentence pairs, 10.38k words) - Moses format' href="download.php?f=Tatoeba/cmn-ug.txt.zip">1.9k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Czech (4 sentence pairs, 17 words) - Moses format' href="download.php?f=Tatoeba/cs-ug.txt.zip">4</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-German (153 sentence pairs, 1.32k words) - Moses format' href="download.php?f=Tatoeba/de-ug.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Uighur-English (3,652 sentence pairs, 38.99k words) - Moses format' href="download.php?f=Tatoeba/en-ug.txt.zip">3.7k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Spanish (37 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/es-ug.txt.zip">37</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-French (693 sentence pairs, 6.71k words) - Moses format' href="download.php?f=Tatoeba/fr-ug.txt.zip">0.7k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Italian (81 sentence pairs, 0.63k words) - Moses format' href="download.php?f=Tatoeba/it-ug.txt.zip">81</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Japanese (57 sentence pairs, 0.31k words) - Moses format' href="download.php?f=Tatoeba/ja-ug.txt.zip">57</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Korean (9 sentence pairs, 50 words) - Moses format' href="download.php?f=Tatoeba/ko-ug.txt.zip">9</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Russian (525 sentence pairs, 4.91k words) - Moses format' href="download.php?f=Tatoeba/ru-ug.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uighur-Ukrainian (61 sentence pairs, 0.48k words) - TMX format' href="download.php?f=Tatoeba/ug-uk.tmx.gz">61</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uk plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.uk.gz">uk</a>
</th><td>1</td> <td>0.2M</td> <td>24.4k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Arabic (56 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/ar-uk.txt.zip">56</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Belarusian (1,094 sentence pairs, 13.12k words) - Moses format' href="download.php?f=Tatoeba/be-uk.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Bulgarian (75 sentence pairs, 0.66k words) - Moses format' href="download.php?f=Tatoeba/bg-uk.txt.zip">75</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-cmn (598 sentence pairs, 3.07k words) - Moses format' href="download.php?f=Tatoeba/cmn-uk.txt.zip">0.6k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Czech (79 sentence pairs, 0.75k words) - Moses format' href="download.php?f=Tatoeba/cs-uk.txt.zip">79</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-German (1,707 sentence pairs, 18.28k words) - Moses format' href="download.php?f=Tatoeba/de-uk.txt.zip">1.7k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Greek (15 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/el-uk.txt.zip">15</a>
</td><td bgcolor="#ffe7e4"><a rel="nofollow" title='Ukrainian-English (17,444 sentence pairs, 0.21M words) - Moses format' href="download.php?f=Tatoeba/en-uk.txt.zip">17.4k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Esperanto (924 sentence pairs, 10.43k words) - Moses format' href="download.php?f=Tatoeba/eo-uk.txt.zip">0.9k</a>
</td><td bgcolor="#ffd3d3"><a rel="nofollow" title='Ukrainian-Spanish (2,364 sentence pairs, 24.43k words) - Moses format' href="download.php?f=Tatoeba/es-uk.txt.zip">2.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd5d5"><a rel="nofollow" title='Ukrainian-French (3,372 sentence pairs, 37.52k words) - Moses format' href="download.php?f=Tatoeba/fr-uk.txt.zip">3.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Western Frisian (26 sentence pairs, 0.31k words) - Moses format' href="download.php?f=Tatoeba/fy-uk.txt.zip">26</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Hebrew (385 sentence pairs, 3.14k words) - Moses format' href="download.php?f=Tatoeba/he-uk.txt.zip">0.4k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Croatian (214 sentence pairs, 2.25k words) - Moses format' href="download.php?f=Tatoeba/hr-uk.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Hungarian (94 sentence pairs, 0.92k words) - Moses format' href="download.php?f=Tatoeba/hu-uk.txt.zip">94</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Indonesian (6 sentence pairs, 63 words) - Moses format' href="download.php?f=Tatoeba/id-uk.txt.zip">6</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Italian (504 sentence pairs, 5.04k words) - Moses format' href="download.php?f=Tatoeba/it-uk.txt.zip">0.5k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Japanese (342 sentence pairs, 2.00k words) - Moses format' href="download.php?f=Tatoeba/ja-uk.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Korean (16 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/ko-uk.txt.zip">16</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Low German (20 sentence pairs, 0.23k words) - Moses format' href="download.php?f=Tatoeba/nds-uk.txt.zip">20</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Dutch (1,251 sentence pairs, 15.34k words) - Moses format' href="download.php?f=Tatoeba/nl-uk.txt.zip">1.3k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-orv (900 sentence pairs, 7.35k words) - Moses format' href="download.php?f=Tatoeba/orv-uk.txt.zip">0.9k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Ukrainian-Polish (1,205 sentence pairs, 12.01k words) - Moses format' href="download.php?f=Tatoeba/pl-uk.txt.zip">1.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Ukrainian-Portuguese (1,409 sentence pairs, 16.87k words) - Moses format' href="download.php?f=Tatoeba/pt-uk.txt.zip">1.4k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd9d8"><a rel="nofollow" title='Ukrainian-Russian (6,470 sentence pairs, 69.36k words) - Moses format' href="download.php?f=Tatoeba/ru-uk.txt.zip">6.5k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Serbian (33 sentence pairs, 0.33k words) - Moses format' href="download.php?f=Tatoeba/sr-uk.txt.zip">33</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Turkish (203 sentence pairs, 1.95k words) - Moses format' href="download.php?f=Tatoeba/tr-uk.txt.zip">0.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Tatar (94 sentence pairs, 0.76k words) - Moses format' href="download.php?f=Tatoeba/tt-uk.txt.zip">94</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Uighur (61 sentence pairs, 0.48k words) - Moses format' href="download.php?f=Tatoeba/ug-uk.txt.zip">61</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Ukrainian (145 sentence pairs, 1.11k words) - Moses format' href="download.php?f=Tatoeba/uk-uk.txt.zip">0.1k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-Vietnamese (14 sentence pairs, 0.22k words) - TMX format' href="download.php?f=Tatoeba/uk-vi.tmx.gz">14</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Ukrainian-yue (179 sentence pairs, 1.02k words) - TMX format' href="download.php?f=Tatoeba/uk-yue.tmx.gz">0.2k</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized ur plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.ur.gz">ur</a>
</th><td>1</td> <td>11.4k</td> <td>1.4k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Urdu-English (1,275 sentence pairs, 17.20k words) - Moses format' href="download.php?f=Tatoeba/en-ur.txt.zip">1.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Urdu-French (6 sentence pairs, 63 words) - Moses format' href="download.php?f=Tatoeba/fr-ur.txt.zip">6</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Urdu-Japanese (7 sentence pairs, 41 words) - Moses format' href="download.php?f=Tatoeba/ja-ur.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized uz plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.uz.gz">uz</a>
</th><td>1</td> <td>1.3k</td> <td>0.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-cmn (38 sentence pairs, 0.17k words) - Moses format' href="download.php?f=Tatoeba/cmn-uz.txt.zip">38</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-German (21 sentence pairs, 0.18k words) - Moses format' href="download.php?f=Tatoeba/de-uz.txt.zip">21</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-English (232 sentence pairs, 1.92k words) - Moses format' href="download.php?f=Tatoeba/en-uz.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-French (44 sentence pairs, 0.45k words) - Moses format' href="download.php?f=Tatoeba/fr-uz.txt.zip">44</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-Japanese (4 sentence pairs, 14 words) - Moses format' href="download.php?f=Tatoeba/ja-uz.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Uzbek-Russian (65 sentence pairs, 0.53k words) - Moses format' href="download.php?f=Tatoeba/ru-uz.txt.zip">65</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.vi.gz">vi</a>
</th><td>1</td> <td>61.7k</td> <td>6.2k</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Afrikaans (1 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/af-vi.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Belarusian (3 sentence pairs, 41 words) - Moses format' href="download.php?f=Tatoeba/be-vi.txt.zip">3</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Bengali (1 sentence pairs, 14 words) - Moses format' href="download.php?f=Tatoeba/bn-vi.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-cmn (86 sentence pairs, 0.71k words) - Moses format' href="download.php?f=Tatoeba/cmn-vi.txt.zip">86</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-German (309 sentence pairs, 4.86k words) - Moses format' href="download.php?f=Tatoeba/de-vi.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd4d4"><a rel="nofollow" title='Vietnamese-English (2,166 sentence pairs, 35.28k words) - Moses format' href="download.php?f=Tatoeba/en-vi.txt.zip">2.2k</a>
</td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Vietnamese-Esperanto (1,432 sentence pairs, 21.09k words) - Moses format' href="download.php?f=Tatoeba/eo-vi.txt.zip">1.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Spanish (309 sentence pairs, 4.41k words) - Moses format' href="download.php?f=Tatoeba/es-vi.txt.zip">0.3k</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Finnish (1 sentence pairs, 10 words) - Moses format' href="download.php?f=Tatoeba/fi-vi.txt.zip">1</a>
</td><td></td><td bgcolor="#ffd2d2"><a rel="nofollow" title='Vietnamese-French (1,196 sentence pairs, 19.71k words) - Moses format' href="download.php?f=Tatoeba/fr-vi.txt.zip">1.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Western Frisian (1 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/fy-vi.txt.zip">1</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Hungarian (15 sentence pairs, 0.21k words) - Moses format' href="download.php?f=Tatoeba/hu-vi.txt.zip">15</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Indonesian (1 sentence pairs, 16 words) - Moses format' href="download.php?f=Tatoeba/id-vi.txt.zip">1</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Italian (244 sentence pairs, 3.31k words) - Moses format' href="download.php?f=Tatoeba/it-vi.txt.zip">0.2k</a>
</td><td bgcolor="#ffd1d1"><a rel="nofollow" title='Vietnamese-Japanese (820 sentence pairs, 8.17k words) - Moses format' href="download.php?f=Tatoeba/ja-vi.txt.zip">0.8k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Korean (29 sentence pairs, 0.29k words) - Moses format' href="download.php?f=Tatoeba/ko-vi.txt.zip">29</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Dutch (33 sentence pairs, 0.47k words) - Moses format' href="download.php?f=Tatoeba/nl-vi.txt.zip">33</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Polish (16 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/pl-vi.txt.zip">16</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Portuguese (11 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/pt-vi.txt.zip">11</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Romanian (1 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/ro-vi.txt.zip">1</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Russian (159 sentence pairs, 1.99k words) - Moses format' href="download.php?f=Tatoeba/ru-vi.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Slovenian (8 sentence pairs, 77 words) - Moses format' href="download.php?f=Tatoeba/sl-vi.txt.zip">8</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Turkish (28 sentence pairs, 0.40k words) - Moses format' href="download.php?f=Tatoeba/tr-vi.txt.zip">28</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Tatar (67 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/tt-vi.txt.zip">67</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Ukrainian (14 sentence pairs, 0.22k words) - Moses format' href="download.php?f=Tatoeba/uk-vi.txt.zip">14</a>
</td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-Vietnamese (33 sentence pairs, 0.47k words) - Moses format' href="download.php?f=Tatoeba/vi-vi.txt.zip">33</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Vietnamese-zsm (2 sentence pairs, 21 words) - TMX format' href="download.php?f=Tatoeba/vi-zsm.tmx.gz">2</a>
</td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized vo plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.vo.gz">vo</a>
</th><td>1</td> <td>2.8k</td> <td>0.6k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='VolapÃ¼k-German (142 sentence pairs, 1.28k words) - Moses format' href="download.php?f=Tatoeba/de-vo.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='VolapÃ¼k-English (441 sentence pairs, 4.21k words) - Moses format' href="download.php?f=Tatoeba/en-vo.txt.zip">0.4k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='VolapÃ¼k-Esperanto (378 sentence pairs, 3.41k words) - Moses format' href="download.php?f=Tatoeba/eo-vo.txt.zip">0.4k</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='VolapÃ¼k-French (19 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/fr-vo.txt.zip">19</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='VolapÃ¼k-Japanese (2 sentence pairs, 11 words) - Moses format' href="download.php?f=Tatoeba/ja-vo.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized wuu plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.wuu.gz">wuu</a>
</th><td>1</td> <td>11.2k</td> <td>4.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-cmn (3,237 sentence pairs, 6.50k words) - Moses format' href="download.php?f=Tatoeba/cmn-wuu.txt.zip">3.2k</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Czech (2 sentence pairs, 10 words) - Moses format' href="download.php?f=Tatoeba/cs-wuu.txt.zip">2</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-German (23 sentence pairs, 0.14k words) - Moses format' href="download.php?f=Tatoeba/de-wuu.txt.zip">23</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='wuu-English (1,062 sentence pairs, 8.12k words) - Moses format' href="download.php?f=Tatoeba/en-wuu.txt.zip">1.1k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Spanish (106 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/es-wuu.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='wuu-French (1,332 sentence pairs, 11.32k words) - Moses format' href="download.php?f=Tatoeba/fr-wuu.txt.zip">1.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Hindi (30 sentence pairs, 0.26k words) - Moses format' href="download.php?f=Tatoeba/hi-wuu.txt.zip">30</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Italian (38 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/it-wuu.txt.zip">38</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Japanese (13 sentence pairs, 26 words) - Moses format' href="download.php?f=Tatoeba/ja-wuu.txt.zip">13</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Latin (2 sentence pairs, 7 words) - Moses format' href="download.php?f=Tatoeba/la-wuu.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Latvian (4 sentence pairs, 13 words) - Moses format' href="download.php?f=Tatoeba/lv-wuu.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Polish (4 sentence pairs, 21 words) - Moses format' href="download.php?f=Tatoeba/pl-wuu.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-Albanian (3 sentence pairs, 9 words) - Moses format' href="download.php?f=Tatoeba/sq-wuu.txt.zip">3</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='wuu-yue (61 sentence pairs, 0.13k words) - TMX format' href="download.php?f=Tatoeba/wuu-yue.tmx.gz">61</a>
</td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xal plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.xal.gz">xal</a>
</th><td>1</td> <td>5.2k</td> <td>0.9k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kalmyk-cmn (28 sentence pairs, 0.15k words) - Moses format' href="download.php?f=Tatoeba/cmn-xal.txt.zip">28</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kalmyk-English (264 sentence pairs, 2.95k words) - Moses format' href="download.php?f=Tatoeba/en-xal.txt.zip">0.3k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kalmyk-Japanese (4 sentence pairs, 27 words) - Moses format' href="download.php?f=Tatoeba/ja-xal.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Kalmyk-Russian (144 sentence pairs, 1.35k words) - Moses format' href="download.php?f=Tatoeba/ru-xal.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized xh plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.xh.gz">xh</a>
</th><td>1</td> <td>0.4k</td> <td>0.1k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Xhosa-English (99 sentence pairs, 0.76k words) - Moses format' href="download.php?f=Tatoeba/en-xh.txt.zip">99</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized yi plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.yi.gz">yi</a>
</th><td>1</td> <td>4.1k</td> <td>0.5k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-cmn (4 sentence pairs, 20 words) - Moses format' href="download.php?f=Tatoeba/cmn-yi.txt.zip">4</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-German (68 sentence pairs, 0.88k words) - Moses format' href="download.php?f=Tatoeba/de-yi.txt.zip">68</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-English (193 sentence pairs, 2.62k words) - Moses format' href="download.php?f=Tatoeba/en-yi.txt.zip">0.2k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-Spanish (11 sentence pairs, 0.11k words) - Moses format' href="download.php?f=Tatoeba/es-yi.txt.zip">11</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-French (16 sentence pairs, 0.20k words) - Moses format' href="download.php?f=Tatoeba/fr-yi.txt.zip">16</a>
</td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-Hebrew (190 sentence pairs, 2.30k words) - Moses format' href="download.php?f=Tatoeba/he-yi.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-Italian (11 sentence pairs, 0.12k words) - Moses format' href="download.php?f=Tatoeba/it-yi.txt.zip">11</a>
</td><td bgcolor="#ffd0d0"><a rel="nofollow" title='Yiddish-Japanese (7 sentence pairs, 57 words) - Moses format' href="download.php?f=Tatoeba/ja-yi.txt.zip">7</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized yue plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.yue.gz">yue</a>
</th><td>1</td> <td>8.4k</td> <td>3.3k</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-cmn (450 sentence pairs, 0.91k words) - Moses format' href="download.php?f=Tatoeba/cmn-yue.txt.zip">0.5k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-German (126 sentence pairs, 0.84k words) - Moses format' href="download.php?f=Tatoeba/de-yue.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd3d3"><a rel="nofollow" title='yue-English (2,601 sentence pairs, 22.57k words) - Moses format' href="download.php?f=Tatoeba/en-yue.txt.zip">2.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-Spanish (36 sentence pairs, 0.23k words) - Moses format' href="download.php?f=Tatoeba/es-yue.txt.zip">36</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-French (195 sentence pairs, 1.57k words) - Moses format' href="download.php?f=Tatoeba/fr-yue.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-Japanese (214 sentence pairs, 0.43k words) - Moses format' href="download.php?f=Tatoeba/ja-yue.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-Korean (111 sentence pairs, 0.59k words) - Moses format' href="download.php?f=Tatoeba/ko-yue.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-Russian (135 sentence pairs, 0.82k words) - Moses format' href="download.php?f=Tatoeba/ru-yue.txt.zip">0.1k</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-Ukrainian (179 sentence pairs, 1.02k words) - Moses format' href="download.php?f=Tatoeba/uk-yue.txt.zip">0.2k</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='yue-wuu (61 sentence pairs, 0.13k words) - Moses format' href="download.php?f=Tatoeba/wuu-yue.txt.zip">61</a>
</td><td></td><td></td><td></td><td></td><td></td></tr> <tr><th><a rel="nofollow" title='monolingual untokenized zsm plain text' href="download.php?f=Tatoeba/mono/Tatoeba.raw.zsm.gz">zsm</a>
</th><td>1</td> <td>7.4k</td> <td>1.0k</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Arabic (94 sentence pairs, 1.08k words) - Moses format' href="download.php?f=Tatoeba/ar-zsm.txt.zip">94</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-cmn (31 sentence pairs, 0.20k words) - Moses format' href="download.php?f=Tatoeba/cmn-zsm.txt.zip">31</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-German (23 sentence pairs, 0.31k words) - Moses format' href="download.php?f=Tatoeba/de-zsm.txt.zip">23</a>
</td><td></td><td></td><td></td><td bgcolor="#ffd1d1"><a rel="nofollow" title='zsm-English (566 sentence pairs, 7.40k words) - Moses format' href="download.php?f=Tatoeba/en-zsm.txt.zip">0.6k</a>
</td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Spanish (23 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/es-zsm.txt.zip">23</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-French (51 sentence pairs, 0.73k words) - Moses format' href="download.php?f=Tatoeba/fr-zsm.txt.zip">51</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Indonesian (23 sentence pairs, 0.20k words) - Moses format' href="download.php?f=Tatoeba/id-zsm.txt.zip">23</a>
</td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Japanese (74 sentence pairs, 0.51k words) - Moses format' href="download.php?f=Tatoeba/ja-zsm.txt.zip">74</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Portuguese (24 sentence pairs, 0.27k words) - Moses format' href="download.php?f=Tatoeba/pt-zsm.txt.zip">24</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td bgcolor="#ffd0d0"><a rel="nofollow" title='zsm-Vietnamese (2 sentence pairs, 21 words) - Moses format' href="download.php?f=Tatoeba/vi-zsm.txt.zip">2</a>
</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div><p>Note that TMX files only contain unique translation units and, therefore, the number of aligned units is smaller than for the distributions in Moses and XML format. Moses downloads include all non-empty alignment units including duplicates. Token counts for each language also include duplicate sentences and documents.<p><hr><div class="footer"></div>
</body>
</html>