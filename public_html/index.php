<?php include("count.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org">

  <title>OPUS - an open source parallel corpus</title>
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19943693-2']);
  _gaq.push(['_trackPageview']);

  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink="#800000" alink="#FF00FF">
  <div class="header">
    <?php include("header.php"); ?>
  </div>

  <div class="news">
    <h3>Latest News</h3>

    <ul>
    <li>2016-01-08: New version: <a href="OpenSubtitles2016.php">OpenSubtitles2016</a></li>
    <li>2015-10-15: New versions of <a href="/TED2013.php">TED2013</a>, <a href="/News-Commentary.php">NCv9</a></li>
    <li>2014-10-24: New: <a href="/JRC-Acquis.php">JRC-Acquis</a></li>
    <li>2014-10-20: <a href="News-Commentary.php">NCv9</a>, <a href="TED2013.php">TED talks</a>, <a href="DGT.php">DGT</a>, <a href="WMT-News.php">WMT</a></li>
      <li>2014-08-21: New: <a href="Ubuntu.php">Ubuntu</a>, <a href="GNOME.php">GNOME</a></li>
      <li>2014-07-30: New: <a href="Books.php">Translated Books</a></li>
      <li>2014-07-27: New: <a href="DOGC.php">DOGC</a>, <a href="Tanzil.php">Tanzil</a></li>
      <li>2014-05-07: Parallel coref corpus <a href="/ParCor">ParCor</a></li>

<!--
      <li>2013-02-08: New version: <a href="/EUbookshop.php">EUbookshop</a></li>

      <li>2013-02-01: New version: <a href="/Tatoeba.php">Tatoeba</a></li>
-->
<!--
      <li>2013-11-18: Extended corpus: <a href="OpenSubtitles2013.php">Subs2013</a></li>

      <li>2013-09-16: New version: <a href="Europarl.php">Europarl v7</a></li>

      <li>2013-08-22: Improved: <a href="OpenSubtitles2012.php">OpenSubs2012</a></li>

      <li>2013-07-01: New corpus <a href="EUbookshop.php">EUbookshop</a></li>

      <li>2013-02-26: Added <a href="UN.php">UN</a> and <a href="MultiUN.php">MultiUN</a></li>
-->
<!--  <li>2013-01-29: ACL workshop: <a href="http://www.idiap.ch/workshop/DiscoMT/">DiscoMT</a></li> -->
      <!--  <li>2013-01-13: New corpus: <a href="/Tatoeba.php">Tatoeba</a></li> -->

<!--      <li>2013-01-10: New corpus: <a href="/TedTalks.php">TedTalks hr-en</a></li> -->

<!--      <li>2012-12-20: New corpus: <a href="OfisPublik.php">OfisPublik</a></li> -->
<!--   <li>2012-08-22: Server upgrade</li> -->
      <!--  <li>2012-07-09: New version: <a href="SETIMES2.php">SETIMES</a> -->

<!--      <li>2012-07-08: New corpus: <a href="hrenWaC.php">hrenWaC</a> -->
<!--
  <li>2011-06-30: New corpus: <a href="TEP.php">TEP</a>
  <li>2011-06-20: New corpora: <a href="MBS.php">Belgisch Staatsblad</a> and <a href="ECB.php">European Central Bank</a></li>
-->
      <!--    <li>2011-05-05: <a href="OpenSubtitles_v2.php">OpenSubtitles v.2</a></li> -->
      <!--    <li>2011-04-11: First test with data from <a href="WikiSource.php">WikiSource</a> (English-Swedish Bible)</li> -->
      <!--    <li>2011-03-09: <a href="OpenOffice3.php">OpenOffice v3 corpus</a></li>-->
      <!--    <li>2011-02-07: A small test corpus with <a href="RF.php">dependency annotation</a> -->
      <!--    <li>2011-01-19: A <a href="trac">Wiki for OPUS</a> with more <a href="trac/wiki/Tagging%20and%20Parsing">information</a> and <a href="trac/wiki/DownloadTools">links</a></li> -->
       <!--
    <li>2010-04-06: New sub-corpus: <a href="SETIMES.php">SETIMES</a> -  A
    parallel corpus of the Balkan languages</li>
    <li>2010-03-21: New sub-corpus: <a href="SPC.php">SPC - Stockholm
    Parallel Corpora</a> (English-Greek &amp; English-Chinese)</li>
    <li>2010-02-24: A new version of the <a href="KDE4.php">KDE4 corpus</a>
    is available (v.2)</li>
    <li>A new version of the <a href="EMEA.php">EMEA corpus</a> is available! (v0.3):<br/> 22 languages, 310 million tokens; also available in MOSES/GIZA++ &amp; TMX format!</li>
--></li>
    </ul>
  </div>

  <h1><img src="img/opus_medium.png" width="160"> ... the open parallel corpus</h1>

  <p>OPUS is a growing collection of translated texts from the web. In the OPUS project we try to convert and align free online data, to add linguistic annotation, and to provide the community with a publicly available parallel corpus. OPUS is based on open source products and the corpus is also delivered as an open content package. We used several tools to compile the current collection. All pre-processing is done automatically. No manual corrections have been carried out.</p><!--
   <p>OPUS has no funding but is kindly supported by the Department of
    Information Science and Humanities Computing at the University of
    Groningen and by the Department of Linguistics and Philology at Uppsala
    University. Let us know if you want to support the development of the
    project in any way.</p>
-->

  <p>The OPUS collection is growing! Check this page from time to time to see new data arriving ...<br>
  Contributions are very welcome! Please contact &lt;jorg.tiedemann<?php
     echo '&#64;'; 
  ?>helsinki.fi
  &gt;</p>

  <p><?php include("search.php"); ?></p><a name="download" id="download"></a>

  <table align="center" width="100%">
    <tr>
      <td valign="top">
        <b>Search &amp; Browse</b>

        <ul>
          <li><a href="bin/opuscqp.pl">OPUS multilingual search interface</a></li>
          <li><a href="bin/opusudcqp.pl">OPUS UD-parsed search interface</a></li>
          <li><a href="cwb/Europarl7/frames-cqp.html">Europarl v7 search interface</a></li>
          <li><a href="cwb/Europarl/frames-cqp.html">Europarl v3 search interface</a></li>
          <li><a href="cwb/OpenSubtitles/frames-cqp.html">OpenSubtitles search interface</a></li>
          <li><a href="cwb/EUconst/frames-cqp.html">EUconst search interface</a></li>
	  <!--
          <li>OPUS multilingual search interface (currently down)</li>
          <li>Europarl search interface (currently down)</a></li>
          <li>OpenSubtitles search interface (currently down)</a></li>
          <li>EUconst search interface (currently down)</a></li>
          -->

          <li><a href="lex.php">Word Alignment Database</a></li>
        </ul><b>Tools &amp; Info</b>

        <ul>
          <li><a href="trac/wiki">OPUS Wiki</a></li>

          <li><a href="trac/wiki/Tagging%20and%20Parsing">Tools for tagging and parsing</a></li>

          <li><a href="trac/wiki/Tagging%20and%20Parsing"></a><a href="trac/wiki/Tagging%20and%20Parsing"></a><a href="trac/wiki/DownloadTools">Downloads (tools and models)</a></li>

          <li><a href="trac/wiki/Tagging%20and%20Parsing"></a><a href="trac/wiki/Tagging%20and%20Parsing"></a><a href="tools.php">Other annotation and corpus tools</a></li>

          <li>Experimental visualization tool<br>
          for <a href="svg/malt2svg.php">monolingual</a> and <a href="svg/parallel.php">parallel</a> treebanks (demo)</li>

          <li><a href="https://bitbucket.org/tiedemann/uplug">Uplug at bitbucket</a></li>

          <li>A reliable <a href="https://bitbucket.org/tiedemann/blacklist-classifier">Language Identifier</a></li>

	  <li><a href="https://github.com/AlJohri/OpenSubtitles">Scripts for OpenSubtitles2012/2013</a></li>

        </ul>


<b>Some Projects using OPUS</b>

        <ul>
	  <li><a href="http://www.letsmt.eu">Let'sMT!</a> - On-line SMT toolkit</a></li>
          <li><a href="http://www.casmacat.eu">CASMACAT</a> - Computer-Aided Translation</li>
	  <li><a href="http://www.statmt.org/wmt16/">WMT</a> - A conference on statistical MT</a></li>
	  <li><a href="http://context.reverso.net/translation">Reverso</a> - Translations in context</li>
	  <li><a href="http://www.sketchengine.co.uk">SketchEngine</a> - Tools for lexicographers</a></li>
	  <li><a href="https://subasub.com">sub-a-sub</a> - Translations in colloquial language</li>
	</ul>


<b>Links to other Resources</b>

        <ul>
          <li>The <a href="http://statmt.org/europarl/">EuroParl corpus</a> and <a href="http://www.statmt.org/wmt13/translation-task.html">WMT data</a></li>
	  <li><a href="https://pub.cl.uzh.ch/wiki/public/costep/start">CoStEP</a>: A cleaner and structured version of the Europarl corpus</li>
          <li><a href="http://ipsc.jrc.ec.europa.eu/?id=198">JRC-Acquis</a> and related resources</li>

          <li><a href="http://pelcra.pl/res/parallel/">Parallel corpora at PELCRA</a> (<a href="http://pelcra.pl/res/parallel/word-aligned/">word-aligned data</a>)</li>
	  <li><a href="http://nlp2ct.cis.umac.mo/um-corpus/">UM - a domain specific Chinese-English parallel corpus</a></li>
          <li><a href="https://www.letsmt.eu">Let's MT!</a> and its <a href="/letsmt-trac/">Resource Repository Software</a></li>

          <li><a href="/letsmt-trac/wiki/DataProcessingTools">Links</a> to alignment and MT-related tools</li>

          <li><a href="/letsmt-trac/wiki/MTResources">Links</a> to other MT-related resources</li>
        </ul>
      </td>

      <td valign="top">
        <p><b>Sub-corpora (downloads &amp; infos):</b><br></p>

        <ul>
          <li><a href="Books.php">Books</a> - A collection of translated literature (<a href="download.php?f=Books/Books2014-07-30.tar.gz" rel="nofollow">DOGC2014-07-17.tar.gz</a> - 236 MB)</li>

          <li><a href="DGT.php">DGT</a> - A collection of EU Translation Memories provided by the JRC</li>

          <li><a href="DOGC.php">DOGC</a> - Documents from the Catalan Goverment (<a href="download.php?f=DOGC/DOGC2014-07-17.tar.gz" rel="nofollow">DOGC2014-07-17.tar.gz</a> - 702 MB)</li>

          <li><a href="ECB.php">ECB - European Central Bank corpus</a></li>

          <li><a href="EMEA.php">EMEA - European Medicines Agency documents</a> (<a href="download.php?f=EMEA/EMEA0.3.tar.gz" rel="nofollow">EMEA0.3.tar.gz</a> - 5.0 GB)</li>

          <li><a href="EUbookshop.php">The EU bookshop corpus</a> (<a href="http://opus.lingfil.uu.se/download.php?f=EUbookshop/EUbookshop0.2.tar.gz" rel="nofollow">EUbookshop/EUbookshop0.2.tar.gz</a> - 33 GB)</li>

          <li><a href="EUconst.php">EUconst - The European constitution</a> (<a href="download.php?f=EUconst/EUconst0.1.tar.gz" rel="nofollow">EUconst0.1.tar.gz</a> - 67 MB)</li>

          <li><a href="Europarl.php">EUROPARL v7 - European Parliament Proceedings</a> (<a href="download.php?f=Europarl/Europarlv7.tar.gz" rel="nofollow">Europarlv7.tar.gz</a> - 8.4 GB)</li>

          <li><a href="Europarl3.php">EUROPARL - European Parliament Proceedings</a> (<a href="download.php?f=Europarl3/Europarl3.tar.gz" rel="nofollow">Europarl3.tar.gz</a> - 3.6 GB)</li>

          <li><a href="GNOME.php">GNOME</a> - GNOME localization files (<a href="download.php?f=GNOME/GNOME2014-08-20.tar.gz" rel="nofollow">GNOME2014-08-20.tar.gz</a> - 9 GB)</li>

          <li><a href="/GlobalVoices.php">Global Voices</a> - News stories in various languages (<a href="http://opus.lingfil.uu.se/download.php?f=GlobalVoices/GlobalVoices2015.tar.gz" rel="nofollow">GlobalVoices2015.tar.gz</a> - 1.1 GB)</li>

          <li><a href="hrenWaC.php">The Croatian - English WaC corpus</a> (<a href="download.php?f=hrenWaC/hrenWaC1.tar.gz" rel="nofollow">hrenWaC1.tar.gz</a> - 48 MB)</li>

          <li><a href="http://opus.lingfil.uu.se/JRC-Acquis.php">JRC-Acquis- legislative EU texts</a></li>
          <li><a href="KDE4.php">KDE4 - KDE4 localization files (v.2)</a> (<a href="download.php?f=KDE4/KDE4.tar.gz" rel="nofollow">KDE4.tar.gz</a> - 1.4 GB)</li>

          <li><a href="KDEdoc.php">KDEdoc - the KDE manual corpus</a> ( <a href="download.php?f=KDEdoc/KDEdoc.tar.gz" rel="nofollow">KDEdoc.tar.gz</a> - 35 MB)</li>

          <li><a href="MBS.php">MBS - Belgisch Staatsblad corpus</a></li>

          <li><a href="MultiUN.php">MultiUN</a> - Translated UN documents <!-- (<a href="http://opus.lingfil.uu.se/download.php?f=MultiUN/MultiUN1.tar.gz">MultiUN1.tar.gz</a> - 25 GB) --></li>

          <li><a href="/News-Commentary.php">News Commentary</a> (<a href="download.php?f=News-Commentary/News-Commentary9.tar.gz" rel="nofollow">News-Commentary9.tar.gz</a> - 2.2 GB)</li>

          <li><a href="/News-Commentary11.php">News Commentary</a> (<a href="http://opus.lingfil.uu.se/download.php?f=News-Commentary11/News-Commentary11.tar.gz" rel="nofollow">News-Commentary11.tar.gz</a> - 741 MB)</li>

          <li><a href="OpenOffice.php">OO - the OpenOffice.org corpus</a> (<a href="download.php?f=OpenOffice/OpenOffice.tar.gz" rel="nofollow">OpenOffice.tar.gz</a> - 34 MB)</li>

          <li><a href="OfisPublik.php">OfisPublik</a> - Breton - French parallel texts (<a href="http://opus.lingfil.uu.se/download.php?f=OfisPublik/OfisPublik0.1.tar.gz" rel="nofollow">OfisPublik0.1.tar.gz</a> - 19MB)</li>

          <li><a href="OpenOffice3.php">OpenOffice.org 3 corpus</a></li>

          <li><a href="OpenSubtitles.php">OpenSubtitles</a> - the opensubtitles.org corpus <!--
          (<a href="download.php?f=OpenSubtitles/OpenSubtitles.tar.gz"
          rel="nofollow">OpenSubtitles.tar.gz</a> - 1.3 GB) --></li>

          <li><a href="OpenSubtitles_v2.php">OpenSubtitles2011</a> - opensubtitles.org 2011 <!-- (<a href="http://opus.lingfil.uu.se/download.php?f=OpenSubtitles2011/OpenSubtitles2011.tar.gz">OpenSubtitles2011.tar.gz</a> - 37 GB)--></li>

          <li><a href="OpenSubtitles2012.php">OpenSubtitles2012</a> - opensubtitles.org 2012 <!--(<a href="http://opus.lingfil.uu.se/download.php?f=OpenSubtitles2012/OpenSubtitles2012.tar.gz">OpenSubtitles2012.tar.gz</a> - 123 GB)--></li>

          <li><a href="OpenSubtitles2013.php">OpenSubtitles2013</a> - opensubtitles.org 2013 (extending OpenSubtitles2012) <!--(<a href="http://opus.lingfil.uu.se/download.php?f=OpenSubtitles2012/OpenSubtitles2012.tar.gz">OpenSubtitles2012.tar.gz</a> - 123 GB)--></li>
          <li><a href="OpenSubtitles2016.php">OpenSubtitles2016</a> - opensubtitles.org 2016 (including all previous data files)</li>

          <li><a href="PHP.php">PHP - the PHP manual corpus</a> ( <a href="download.php?f=PHP/PHP.tar.gz" rel="nofollow">PHP.tar.gz</a> - 172 MB)</li>
	  <li><a href="ParCor">ParCor - A Parallel Pronoun-Coreference Corpus</a></li>
          <li><a href="RF.php">Regeringsf&ouml;rklaringen - a tiny example corpus</a></li>

          <li><a href="SETIMES.php">SETIMES</a> - A parallel corpus of the Balkan languages ( <a href="download.php?f=SETIMES/SETIMES1.tar.gz" rel="nofollow">SETIMES1.tar.gz</a> - 2.3 GB)</li>

          <li><a href="SETIMES2.php">SETIMES2</a> - A new version of SETIMES ( <a href="download.php?f=SETIMES2/SETIMES2.tar.gz" rel="nofollow">SETIMES2.tar.gz</a> - 2.9 GB)</li>

          <li><a href="SPC.php">SPC - Stockholm Parallel Corpora</a> ( <a href="download.php?f=SPC/SPCv1.tar.gz" rel="nofollow">SPCv1.tar.gz</a> - 3.5 MB)</li><!--      <li><a href="/Tatoeba.php">Tatoeba</a> - A DB of translated sentences (<a href="download.php?f=TedTalks/Tatoeba2013-01-13.tar.gz">Tatoeba2013-01-13.tar.gz</a> - 124MB MB)</li> -->

          <li><a href="/Tatoeba.php">Tatoeba</a> - A DB of translated sentences (<a href="download.php?f=Tatoeba/Tatoeba2014-07-28.tar.gz" rel="nofollow">Tatoeba2014-07-28.tar.gz</a> - 262MB MB)</li>

          <li><a href="/TedTalks.php">TedTalks hr-en</a> (<a href="download.php?f=TedTalks/TedTalks0.1.tar.gz" rel="nofollow">TedTalks0.1.tar.gz</a> - 26 MB)</li>

          <li><a href="/TED2013.php">TED Talks</a> (<a href="download.php?f=TED2013/TED2013v1.tar.gz" rel="nofollow">TED2013v1.tar.gz</a> - 781 MB)</li>

          <li><a href="Tanzil.php">Tanzil</a> - A collection of Quran translations</li>

          <li><a href="TEP.php">TEP</a> - The Tehran English-Persian subtitle corpus ( <a href="download.php?f=TEP/TEP0.1.tar.gz" rel="nofollow">TEP0.1.tar.gz</a> - 49 MB)</li>

          <li><a href="Ubuntu.php">Ubuntu</a> - Ubuntu localization files (<a href="download.php?f=Ubuntu/Ubuntu14.10.tar.gz" rel="nofollow">Ubuntu14.10.tar.gz</a> - 1.3 GB)</li>
          <li><a href="UN.php">UN</a> - Translated UN documents (<a href="http://opus.lingfil.uu.se/download.php?f=UN/UN20090831.tar.gz" rel="nofollow">UN20090831.tar.gz</a> - 208MB)</li>

          <li><a href="WikiSource.php">WikiSource</a> (small en-sv sample only)</li>
          <li><a href="Wikipedia.php">Wikipedia</a> - translated sentences from Wikipedia (<a href="http://opus.lingfil.uu.se/download.php?f=Wikipedia/Wikipedia1.0.tar.gz" rel="nofollow">Wikipedia1.0.tar.gz</a> - 7.8GB)</li>

          <li><a href="WMT-News.php">WMT News Test Sets</a> (<a href="http://opus.lingfil.uu.se/download.php?f=WMT-News/WMT-News1.tar.gz" rel="nofollow">WMT-News1.tar.gz</a> - 34MB)</li>


        </ul><br>
      </td>

<!--
        <td valign="top">
          <b>Documentation &amp; FAQ's:</b>
          <ul>
          <li>the <a href="/cgi-bin/opus/wiki">OpusWiki</a></li>
          <li>... hopefully soon</li>
          </ul>
           <b>Project members:</b>
          <ul>
            <li><a href="stp.lingfil.uu.se/~joerg">J&ouml;rg
            Tiedemann</a></li>
            <li><a href="http://folk.uio.no/larsnyg">Lars
            Nygaaard</a></li>
          </ul>
        </td>
-->
    </tr>
  </table>

<!--
    <p>OPUS so far includes about 30,000,000 words in 60 languages
    which have been collected from three sources: OpenOffice.org
    documentation (OO), PHP manuals (PHP) and KDE manuals (KDEdoc)
    including KDE system messages (KDE).</p>
-->
  Please look at the publications below for more information about OPUS.<br>
  Please cite the <!-- <a href="RANLP_V.txt"> -->
  <a href="LREC2012.txt">first</a> one in the list if you use any part of the corpus in your own work!
  <hr>

  <div class="publications">
    <a name="OO" id="OO"></a>

    <h3>Publications</h3>

    <table>
      <tr>
        <td>
          <dl>

            <dt>J&ouml;rg Tiedemann, 2012,</dt>

            <dd>Parallel Data, Tools and Interfaces in OPUS. <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 8th International Conference on Language Resources and Evaluation (LREC'2012)</cite></dd>
	    <dt>Raivis Skadi&ncedil;&#X0161;, J&ouml;rg Tiedemann, Roberts Rozis and Daiga Deksne, 2014</dt> 
	    <dd>Billions of Parallel Words for Free [<a href="eubookshop-lrec2014.txt">bib</a>] [<a href="eubookshop-lrec2014.pdf">pdf</a>]</br> 
            In <cite>Proceedings of the 9th International Conference on Language Resources and Evaluation (LREC'2014)</cite>, Reykjavik, Iceland</dd>

            <dt>J&ouml;rg Tiedemann, 2009,</dt>

            <dd>News from OPUS - A Collection of Multilingual Parallel Corpora with Tools and Interfaces <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">[pdf]</a><br>
            In N. Nicolov and K. Bontcheva and G. Angelova and R. Mitkov (eds.) <cite>Recent Advances in Natural Language Processing</cite> (vol V), pages 237-248, John Benjamins, Amsterdam/Philadelphia</dd>

            <dt>J&ouml;rg Tiedemann, 2011,</dt>

<!--
<a href="http://dx.doi.org/10.2200/S00367ED1V01Y201106HLT014"><img border="0"
   src="http://stp.lingfil.uu.se/~joerg/img/bitextalign" height="100" /></a>
-->

            <dd><a href="http://dx.doi.org/10.2200/S00367ED1V01Y201106HLT014">Bitext Alignment</a>, Synthesis Lecture on HLT, Morgan &amp; Claypool Publishers (at <a href="http://www.amazon.com/Alignment-Synthesis-Lectures-Language-Technologies/dp/1608455106">Amazon</a>)</dd>

            <dt>J&ouml;rg Tiedemann, 2008,</dt>

            <dd>Synchronizing Translated Movie Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/published/lrec08.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 6th International Conference on Language Resources and Evaluation (LREC'2008)</cite></dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>

            <dd>Building a Multilingual Parallel Subtitle Corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/clin17.pdf">[pdf]</a><br>
            In <cite>Proceedings of CLIN 17</cite>, Leuven, Belgium, 2007.</dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>

            <dd>Improved Sentence Alignment for Movie Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/paper/ranlp07-subalign.pdf">[pdf]</a><br>
            In <cite>Proceedings of RANLP '07</cite>, Borovets, Bulgaria, 2007.</dd>

            <dt>J&ouml;rg Tiedemann, unpublished</dt>

            <dd>OPUS - an open source parallel corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/Nodalida03.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 13th Nordic Conference on Computational Linguistics</cite>, University of Iceland, Reykjavik, 2003.</dd>

            <dt>J&ouml;rg Tiedemann, Lars Nygaard, 2004</dt>

            <dd>The OPUS corpus - parallel &amp; free. <a href="http://stp.ling.uu.se/~joerg/paper/opus_lrec04.pdf">[pdf]</a><br>
            In <cite>Proceedings of the Fourth International Conference on Language Resources and Evaluation (LREC'04)</cite>. Lisbon, Portugal, May 26-28.</dd>
          </dl>
        </td>

        <td valign="top">A text book on alignment:<br>
        <br>
        <a href="http://www.morganclaypool.com/doi/abs/10.2200/S00367ED1V01Y201106HLT014"><img border="0" src="http://stp.lingfil.uu.se/~joerg/img/bitextalign" height="200"></a></td>
      </tr>
    </table>
  </div><!--
    <hr>
    <a name="OO"></a>
    <h3><a href="OO.html">OO - the OpenOffice.org corpus</a></h3>

    <p>The original documentation of the office package
    OpenOffice.org (<a href=
    "http://www.openoffice.org/">http://www.openoffice.org/</a>)
    contains 2014 English documents which have been partly
    translated into 5 languages: French, Spanish, Swedish, German,
    and Japanese. The original documentation in English comprises
    about 500,000 words and translations contain between 400,000
    and 500,000 words per language. All documents have been
    tokenized and, except of the Spanish part, tagged with parts of
    speech. The English part of the corpus has been marked with
    syntactic chunks as well.</p>

    <a name="PHP"></a>
    <h3><a href="php.html">PHP - the PHP manual corpus</a></h3>

    <p>PHP manuals and translations have been downloaded from (<a
    href=
    "http://www.php.net/download-docs.php">http://www.php.net/download-docs.php</a>).
    The original documents are written in English and have been
    partly translated into 21 languages. The original manuals
    contain about 500,000 words. The amount of actually translated
    texts varies for different languages between 50,000 and 380,000
    words. The corpus is rather noisy and may include parts from
    the English original in some of the translations. The corpus is
    tokenized and each language pair has been sentence aligned.</p>

    <a name="KDE"></a>
    <h3><a href="kde.html">KDE - the corpus of KDE system messages</a></h3>
    source: <a href="http://i18n.kde.org/">http://i18n.kde.org/</a>
    

    <a name="KDEdoc"></a>
    <h3><a href="kdedoc.html">KDEdoc - the KDE manual corpus</a></h3>

    <p>source: <a href="http://i18n.kde.org/">
    http://i18n.kde.org/</a></p>


   <a name="EUROPARL"></a>
    <h3><a href="europarl3.html">EUROPARL - European Parliament Proceedings
    1996-2003</a></h3>

    <p>source: <a href="http://www.isi.edu/~koehn/europarl/">
    http://www.isi.edu/~koehn/europarl/</a> <br>(a parallel corpus
    compiled by Philipp Koehn)</p>
-->
  <hr>

  <div class="footer">
    <!--
<script type="text/javascript">
if (Date.parse(document.lastModified) != 0)
            document.write('last update: ' 
                           + document.lastModified);
</script>
-->

    <table border="0" width="100%">
      <tr>
        <td><a href="http://www.nlpl.eu"><img border="0" src="img/nlpl.png" height="160"></a></td>
        <td><a href="https://www.csc.fi"><img border="0" src="img/csc.png" height="80"></a></td>
        <td><a href="http://www.helsinki.fi"><img border="0" src="img/HY.jpg" height="120"></a></td>
        <td align="center"><a href="https://www.kielipankki.fi"><img border="0" src="img/kielipankki.png" height="40"></a><br/><br/><a href="https://neic.no"><img border="0" src="img/neic.png" height="35"></a></td>
	<!--
        <td><a href="http://www.uu.se"><img border="0" src="img/uulogo_white.gif" height="120"></a></td>
	-->
        <td><a href="http://essenceofescience.se/sensordata/#nivre"><img border="0" src="img/essence.png" width="120"></a><br/><br/><a href="http://www.letsmt.eu"><img border="0" src="img/letsmt.jpg" width="120"></a></td>

        <td align="right"><a href="http://www2.clustrmaps.com/counter/maps.php?url=http://opus.lingfil.uu.se" id="clustrMapsLink" name="clustrMapsLink"><img src="http://www2.clustrmaps.com/counter/index2.php?url=http://opus.lingfil.uu.se" style="border:0px;" alt="Locations of visitors to this page" title="Locations of visitors to this page" id="clustrMapsImg" onerror="this.onerror=null; this.src='http://clustrmaps.com/images/clustrmaps-back-soon.jpg'; document.getElementById('clustrMapsLink').href='http://clustrmaps.com';" name="clustrMapsImg"></a></td>
      </tr>
    </table>
  </div>
</body>
</html>
