<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>&lt;a href=&quot;OpenSubtitles-v2018.php&quot;&gt;OpenSubtitles v2018&lt;/a&gt; - Intra-Lingual Alignments</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<div class="header"><?php include("header.php"); ?></div><h1><a href="OpenSubtitles-v2018.php">OpenSubtitles v2018</a> - Intra-Lingual Alignments</h1>
<p>
The following table lists alignments between subtitles in the same language. There are often various alternative subtitle files for each movie in the collection. Many of them are identical or near identical. We have processed them all and sorted the results in various ways. The resulting files are linked in the table for each language. Here is an explanation of the different columns:
</p>

<ul>
<li><b>corpus:</b> This is a compressed tar-archive with all movie subtitles for the given language in XML format.</li>
<li><b>all:</b> All links between alternative subtitle files except the ones classified as "misaligned".</li>
<li><b>insert:</b> Sentence pairs that differ only by some inserted text on one side</li>
<li><b>misaligned:</b> Probably misaligned sentences (low lexcial overlap and large differences in lengths).</li>
<li><b>other:</b> Other types of sentence pairs; probably paraphrases and/or stylistically different subtitles.</li>
<li><b>pct:</b> Sentence pairs that differ only in punctuation characters.</li>
<li><b>spell:</b> Sentence pairs that differ in a few characters only that looks suspiciously like misspellings.</li>
</ul>

<p>
Some alignment files exist as XCES only (standoff annotation of sentence alignment) and some of them are also available in TMX format (to make it easier to inspect the actual sentence pairs). If you use the XCES alignment files, then you will also need the corpus, which is linked in the first column.
</p>
<div class="sample"><table><tr><th>language</th><th>corpus</th><th>all</th><th>insert</th><th>misaligned</th><th>other</th><th>pct</th><th>spell</th></tr><tr><th>af</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/af.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/af-af.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/af-af.tmx.gz">tmx</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/af-af.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/af-af.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/af-af.other.tmx.gz">tmx</a></td>
<td></td>
<td></td>
</tr><tr><th>ar</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ar.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ar-ar.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ar-ar.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ar-ar.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ar-ar.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ar-ar.spell.tmx.gz">tmx</a></td>
</tr><tr><th>bg</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/bg.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bg-bg.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bg-bg.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bg-bg.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bg-bg.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bg-bg.spell.tmx.gz">tmx</a></td>
</tr><tr><th>bn</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/bn.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bn-bn.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bn-bn.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bn-bn.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bn-bn.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bn-bn.spell.tmx.gz">tmx</a></td>
</tr><tr><th>br</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/br.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/br-br.xml.gz">xml</a></td>
<td></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/br-br.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/br-br.other.tmx.gz">tmx</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/br-br.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/br-br.spell.tmx.gz">tmx</a></td>
</tr><tr><th>bs</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/bs.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bs-bs.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bs-bs.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bs-bs.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/bs-bs.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/bs-bs.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ca</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ca.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ca-ca.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ca-ca.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ca-ca.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ca-ca.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ca-ca.spell.tmx.gz">tmx</a></td>
</tr><tr><th>cs</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/cs.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/cs-cs.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/cs-cs.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/cs-cs.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/cs-cs.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/cs-cs.spell.tmx.gz">tmx</a></td>
</tr><tr><th>da</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/da.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/da-da.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/da-da.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/da-da.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/da-da.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/da-da.spell.tmx.gz">tmx</a></td>
</tr><tr><th>de</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/de.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/de-de.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/de-de.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/de-de.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/de-de.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/de-de.spell.tmx.gz">tmx</a></td>
</tr><tr><th>el</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/el.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/el-el.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/el-el.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/el-el.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/el-el.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/el-el.spell.tmx.gz">tmx</a></td>
</tr><tr><th>en</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/en.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/en-en.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/en-en.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/en-en.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/en-en.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/en-en.spell.tmx.gz">tmx</a></td>
</tr><tr><th>eo</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/eo.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eo-eo.xml.gz">xml</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eo-eo.misaligned.xml.gz">xml</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eo-eo.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/eo-eo.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eo-eo.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/eo-eo.spell.tmx.gz">tmx</a></td>
</tr><tr><th>es</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/es.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/es-es.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/es-es.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/es-es.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/es-es.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/es-es.spell.tmx.gz">tmx</a></td>
</tr><tr><th>et</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/et.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/et-et.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/et-et.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/et-et.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/et-et.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/et-et.spell.tmx.gz">tmx</a></td>
</tr><tr><th>eu</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/eu.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eu-eu.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eu-eu.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/eu-eu.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eu-eu.misaligned.xml.gz">xml</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eu-eu.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/eu-eu.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/eu-eu.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/eu-eu.spell.tmx.gz">tmx</a></td>
</tr><tr><th>fa</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/fa.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fa-fa.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fa-fa.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fa-fa.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fa-fa.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fa-fa.spell.tmx.gz">tmx</a></td>
</tr><tr><th>fi</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/fi.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fi-fi.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fi-fi.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fi-fi.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fi-fi.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fi-fi.spell.tmx.gz">tmx</a></td>
</tr><tr><th>fr</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/fr.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fr-fr.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fr-fr.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fr-fr.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/fr-fr.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/fr-fr.spell.tmx.gz">tmx</a></td>
</tr><tr><th>gl</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/gl.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/gl-gl.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/gl-gl.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/gl-gl.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/gl-gl.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/gl-gl.spell.tmx.gz">tmx</a></td>
</tr><tr><th>he</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/he.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/he-he.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/he-he.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/he-he.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/he-he.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/he-he.spell.tmx.gz">tmx</a></td>
</tr><tr><th>hi</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/hi.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hi-hi.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hi-hi.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hi-hi.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hi-hi.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hi-hi.spell.tmx.gz">tmx</a></td>
</tr><tr><th>hr</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/hr.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hr-hr.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hr-hr.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hr-hr.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hr-hr.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hr-hr.spell.tmx.gz">tmx</a></td>
</tr><tr><th>hu</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/hu.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hu-hu.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hu-hu.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hu-hu.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/hu-hu.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/hu-hu.spell.tmx.gz">tmx</a></td>
</tr><tr><th>id</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/id.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/id-id.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/id-id.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/id-id.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/id-id.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/id-id.spell.tmx.gz">tmx</a></td>
</tr><tr><th>is</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/is.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/is-is.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/is-is.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/is-is.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/is-is.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/is-is.spell.tmx.gz">tmx</a></td>
</tr><tr><th>it</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/it.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/it-it.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/it-it.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/it-it.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/it-it.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/it-it.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ja</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ja.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ja-ja.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ja-ja.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ja-ja.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ja-ja.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ja-ja.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ka</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ka.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ka-ka.xml.gz">xml</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr><tr><th>ko</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ko.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ko-ko.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ko-ko.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ko-ko.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ko-ko.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ko-ko.spell.tmx.gz">tmx</a></td>
</tr><tr><th>lt</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/lt.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lt-lt.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lt-lt.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lt-lt.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lt-lt.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lt-lt.spell.tmx.gz">tmx</a></td>
</tr><tr><th>lv</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/lv.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lv-lv.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lv-lv.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lv-lv.insert.tmx.gz">tmx</a></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lv-lv.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lv-lv.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lv-lv.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lv-lv.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/lv-lv.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/lv-lv.spell.tmx.gz">tmx</a></td>
</tr><tr><th>mk</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/mk.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/mk-mk.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/mk-mk.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/mk-mk.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/mk-mk.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/mk-mk.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ml</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ml.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ml-ml.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ml-ml.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ml-ml.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ml-ml.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ml-ml.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ms</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ms.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ms-ms.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ms-ms.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ms-ms.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ms-ms.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ms-ms.spell.tmx.gz">tmx</a></td>
</tr><tr><th>nl</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/nl.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/nl-nl.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/nl-nl.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/nl-nl.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/nl-nl.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/nl-nl.spell.tmx.gz">tmx</a></td>
</tr><tr><th>no</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/no.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/no-no.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/no-no.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/no-no.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/no-no.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/no-no.spell.tmx.gz">tmx</a></td>
</tr><tr><th>pl</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/pl.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pl-pl.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pl-pl.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pl-pl.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pl-pl.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pl-pl.spell.tmx.gz">tmx</a></td>
</tr><tr><th>pt</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/pt.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt-pt.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt-pt.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt-pt.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt-pt.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt-pt.spell.tmx.gz">tmx</a></td>
</tr><tr><th>pt_br</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/pt_br.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt_br-pt_br.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt_br-pt_br.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt_br-pt_br.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/pt_br-pt_br.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/pt_br-pt_br.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ro</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ro.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ro-ro.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ro-ro.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ro-ro.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ro-ro.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ro-ro.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ru</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ru.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ru-ru.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ru-ru.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ru-ru.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ru-ru.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ru-ru.spell.tmx.gz">tmx</a></td>
</tr><tr><th>si</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/si.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/si-si.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/si-si.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/si-si.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/si-si.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/si-si.spell.tmx.gz">tmx</a></td>
</tr><tr><th>sk</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/sk.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sk-sk.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sk-sk.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sk-sk.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sk-sk.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sk-sk.spell.tmx.gz">tmx</a></td>
</tr><tr><th>sl</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/sl.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sl-sl.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sl-sl.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sl-sl.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sl-sl.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sl-sl.spell.tmx.gz">tmx</a></td>
</tr><tr><th>sq</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/sq.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sq-sq.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sq-sq.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sq-sq.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sq-sq.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sq-sq.spell.tmx.gz">tmx</a></td>
</tr><tr><th>sr</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/sr.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sr-sr.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sr-sr.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sr-sr.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sr-sr.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sr-sr.spell.tmx.gz">tmx</a></td>
</tr><tr><th>sv</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/sv.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sv-sv.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sv-sv.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sv-sv.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/sv-sv.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/sv-sv.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ta</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ta.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ta-ta.xml.gz">xml</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr><tr><th>th</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/th.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/th-th.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/th-th.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/th-th.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/th-th.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/th-th.spell.tmx.gz">tmx</a></td>
</tr><tr><th>tl</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/tl.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tl-tl.xml.gz">xml</a></td>
<td></td>
<td></td>
<td></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tl-tl.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tl-tl.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tl-tl.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tl-tl.spell.tmx.gz">tmx</a></td>
</tr><tr><th>tr</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/tr.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tr-tr.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tr-tr.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tr-tr.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/tr-tr.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/tr-tr.spell.tmx.gz">tmx</a></td>
</tr><tr><th>uk</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/uk.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/uk-uk.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/uk-uk.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/uk-uk.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/uk-uk.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/uk-uk.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ur</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ur.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ur-ur.xml.gz">xml</a></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr><tr><th>vi</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/vi.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/vi-vi.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/vi-vi.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/vi-vi.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/vi-vi.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/vi-vi.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ze_en</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ze_en.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_en-ze_en.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_en-ze_en.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_en-ze_en.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_en-ze_en.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_en-ze_en.spell.tmx.gz">tmx</a></td>
</tr><tr><th>ze_zh</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/ze_zh.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_zh-ze_zh.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_zh-ze_zh.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_zh-ze_zh.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/ze_zh-ze_zh.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/ze_zh-ze_zh.spell.tmx.gz">tmx</a></td>
</tr><tr><th>zh_cn</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/zh_cn.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_cn-zh_cn.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_cn-zh_cn.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_cn-zh_cn.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_cn-zh_cn.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_cn-zh_cn.spell.tmx.gz">tmx</a></td>
</tr><tr><th>zh_tw</th><td><a href="download.php?f=OpenSubtitles/v2018/raw/zh_tw.zip">zip</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.insert.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_tw-zh_tw.insert.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.misaligned.xml.gz">xml</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.other.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_tw-zh_tw.other.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.pct.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_tw-zh_tw.pct.tmx.gz">tmx</a></td>
<td><a href="download.php?f=OpenSubtitles/v2018/xml/zh_tw-zh_tw.spell.xml.gz">xml</a> <a href="download.php?f=OpenSubtitles/v2018/tmx/zh_tw-zh_tw.spell.tmx.gz">tmx</a></td>
</tr></tr></table></div><hr><div class="footer"></div>
</body>
</html>