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
      <li>2019-08-14: Various new and updated corpora</li>
    <li>2018-10-06: New corpus: <a href="memat.php">memat</a> (Xhosa/English)</li>
    <li>2018-02-15: New corpora: <a href="ParaCrawl.php">ParaCrawl</a>, <a href="XhosaNavy.php">XhosaNavy</a></li>
    <li>2017-11-06: New version: <a href="OpenSubtitles-v2018.php">OpenSubtitles2018</a></li>
    <li>2017-11-01: New server location: <a href="http://opus.nlpl.eu">http://opus.nlpl.eu</a></li>
    <li>2016-01-08: New version: <a href="OpenSubtitles-v2016.php">OpenSubtitles2016</a></li>
    <li>2015-10-15: New versions of <a href="TED2013.php">TED2013</a>, <a href="News-Commentary-v9.1.php">NCv9</a></li>
    <li>2014-10-24: New: <a href="JRC-Acquis.php">JRC-Acquis</a></li>
<!--
    <li>2014-10-20: <a href="News-Commentary-v9.0.php">NCv9</a>, <a href="TED2013.php">TED talks</a>, <a href="DGT.php">DGT</a>, <a href="WMT-News.php">WMT</a></li>
    <li>2014-08-21: New: <a href="Ubuntu.php">Ubuntu</a>, <a href="GNOME.php">GNOME</a></li>
    <li>2014-07-30: New: <a href="Books-v1.php">Translated Books</a></li>
    <li>2014-07-27: New: <a href="DOGC-v2.php">DOGC</a>, <a href="Tanzil.php">Tanzil</a></li>
    <li>2014-05-07: Parallel coref corpus <a href="/ParCor">ParCor</a></li>
-->
    </ul>
  </div>

  <h1><img src="img/opus_medium.png" width="160"> ... the open parallel corpus</h1>

  <p>OPUS is a growing collection of translated texts from the web. In the OPUS project we try to convert and align free online data, to add linguistic annotation, and to provide the community with a publicly available parallel corpus. OPUS is based on open source products and the corpus is also delivered as an open content package. We used several tools to compile the current collection. All pre-processing is done automatically. No manual corrections have been carried out.</p>

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
          <li><a href="/bin/opuscqp.pl">OPUS multilingual search interface</a></li>
	  <!--
          <li><a href="/bin/opusudcqp.pl">OPUS UD-parsed search interface</a></li>
	  -->
          <li><a href="/cwb/Europarl7/frames-cqp.html">Europarl v7 search interface</a></li>
          <li><a href="/cwb/Europarl/frames-cqp.html">Europarl v3 search interface</a></li>
          <li><a href="/cwb/OpenSubtitles/frames-cqp.html">OpenSubtitles search interface</a></li> 
          <li><a href="/cwb/OpenSubtitles2018/frames-cqp.html">OpenSubtitles 2018 search interface</a></li>
          <li><a href="/cwb/EUconst/frames-cqp.html">EUconst search interface</a></li>
          <li><a href="lex.php">Word Alignment Database</a> (<a href="/lex-old.php">old DB</a>)</li>
        </ul>

        <b>Tools &amp; Info</b>
        <ul>
          <li><a href="/trac/wiki">OPUS Wiki</a></li>
	  <li><a href="http://opus.nlpl.eu/opusapi">OPUS API</a></li>
	  <li><a href="https://opus-repository.ling.helsinki.fi/">OPUS interface</a> (<a href="https://github.com/Helsinki-NLP/OPUS-interface">@github</a>)</li>
	  <li><a href="https://translate.ling.helsinki.fi">OPUS translator</a> (<a href="https://github.com/Helsinki-NLP/OPUS-translator">@github</a>)</li>
	  <li><a href="https://pypi.org/project/opustools-pkg/">OPUS tools</a> (Python package)</li>
	  <li><a href="https://github.com/Helsinki-NLP/">OPUS tools</a> (Perl package)</li>
          <li><a href="https://github.com/Helsinki-NLP/Uplug">Uplug</a> (<a href="https://bitbucket.org/tiedemann/uplug">@bitbucket</a>)</li>
	  <!-- <li><a href="https://github.com/yonkornilov/opus-api">OPUS API</a> by Yonathan Koren</li> -->
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
	  <li><a href="https://conferences.unite.un.org/uncorpus">United Nations Parallel Corpus</a></li>
          <li><a href="http://ipsc.jrc.ec.europa.eu/?id=198">JRC-Acquis</a> and related resources</li>
	  <li><a href="http://casmacat.eu/corpus/global-voices.html">Global Voices Parallel Corpus</a> (CASMACAT)</li>
          <li><a href="http://paralela.clarin-pl.eu">Parallel corpora at PELCRA</a> <!-- (<a href="http://pelcra.pl/res/parallel/word-aligned/">word-aligned data</a>) --> </li>
	  <li><a href="http://nlp2ct.cis.umac.mo/um-corpus/">UM - a domain specific Chinese-English parallel corpus</a></li>
          <li><a href="https://www.letsmt.eu">Let's MT!</a> and its <a href="/letsmt-trac/">Resource Repository Software</a></li>

          <li><a href="/letsmt-trac/wiki/DataProcessingTools">Links</a> to alignment and MT-related tools</li>

          <li><a href="/letsmt-trac/wiki/MTResources">Links</a> to other MT-related resources</li>
        </ul>
      </td>

      <td valign="top">
        <p><b>Sub-corpora (downloads &amp; infos):</b><br></p>

	<table>
	  <tr>
	    <td>
        <ul>
          <li><a href="ada83.php">ada83</a> - Ada 83 manuals</li>
          <li><a href="Bianet.php">Bianet</a> - Translated Turkish articles</li>
          <li><a href="bible-uedin.php">Bible (uedin)</a> - Collection of Bible translations</li>
          <li><a href="Books.php">Books</a> - A collection of translated literature</li>
          <li><a href="CAPES.php">CAPES</a> - Thesis and dissertation abstracts</li>
          <li><a href="DGT.php">DGT</a> - A collection of EU Translation Memories provided by the JRC</li>
          <li><a href="DOGC.php">DOGC</a> - Documents from the Catalan Goverment</li>
          <li><a href="ECB.php">ECB - European Central Bank corpus</a></li>
          <li><a href="EhuHac.php">EhuHac</a> - Hizkuntzen Arteko Corpusa</li>
          <li><a href="Elhuyar.php">Elhuyar corpus</a></li>
          <li><a href="EMEA.php">EMEA - European Medicines Agency documents</a></li>
          <li><a href="EUbookshop.php">The EU bookshop corpus</a></li>
          <li><a href="EUconst.php">EUconst - The European constitution</a></li>
          <li><a href="Europarl.php">EUROPARL v7 - European Parliament Proceedings</a></li>
          <li><a href="Finlex.php">Finlex</a> - Legislative and other judicial information of Finland</li>
          <li><a href="fiskmo.php">fiskmo</a> - Data from the <a href="https://blogs.helsinki.fi/fiskmo-project/">fiskmö project</a></li>
          <li><a href="giga-fren.php">giga-fren</a> - French-English Gigal-Word Corpus</li>
          <li><a href="GlobalVoices.php">Global Voices</a> - News stories in various languages</li>
          <li><a href="GNOME.php">GNOME</a> - GNOME localization files</li>
          <li><a href="hrenWaC.php">The Croatian - English WaC corpus</a></li>
          <li><a href="JRC-Acquis.php">JRC-Acquis- legislative EU texts</a></li>
          <li><a href="KDE4.php">KDE4 - KDE4 localization files (v.2)</a></li>
          <li><a href="KDEdoc.php">KDEdoc - the KDE manual corpus</a></li>
          <li><a href="MBS.php">MBS - Belgisch Staatsblad corpus</a></li>
          <li><a href="memat.php">memat - Xhosa/English parallel data</a></li>
          <li><a href="MontenegrinSubs.php">MontenegrinSubs - Montenegrin movie subtitles</a></li>
          <li><a href="MultiUN.php">MultiUN</a> - Translated UN documents</li>
          <li><a href="News-Commentary.php">News Commentary</a> (<a href="News-Commentary-v1.php">v11</a>, <a href="News-Commentary-v1.php">v9.1</a>,<a href="News-Commentary-v9.php">v9</a>)</li>
        </ul>
	    </td>
	    <td>
        <ul>
          <li><a href="OfisPublik.php">OfisPublik</a> - Breton - French parallel texts</li>
          <li><a href="OpenOffice.php">OO - the OpenOffice.org corpus</a> (<a href="OpenOffice-v2.php">v2</a>)</li>
          <li><a href="OpenSubtitles.php">OpenSubtitles</a> - translated subtitles
	    (<a href="OpenSubtitles-v1.php">v1</a>,
	    <a href="OpenSubtitles-v2011.php">v2011</a>,
	    <a href="OpenSubtitles-v2012.php">v2012</a>,
	    <a href="OpenSubtitles-v2013.php">v2013</a>,
	    <a href="OpenSubtitles-v2016.php">v2016</a>)</li>
          <li><a href="ParaCrawl.php">ParaCrawl corpus</a></li>
	  <li><a href="/ParCor">ParCor - A Parallel Pronoun-Coreference Corpus</a></li>
          <li><a href="PHP.php">PHP - the PHP manual corpus</a></li>
          <li><a href="QED.php">QED</a> - The QCRI Educational Domain Corpus</li>
          <li><a href="RF.php">Regeringsf&ouml;rklaringen - a tiny example corpus</a></li>
          <li><a href="sardware.php">The sardware corpus</a></li>
          <li><a href="SciELO.php">SciELO</a> - Artciles from SciELO</li>
          <li><a href="SETIMES.php">SETIMES</a> - A parallel corpus of the Balkan languages</li>
          <li><a href="SPC.php">SPC - Stockholm Parallel Corpora</a></li>
          <li><a href="Tanzil.php">Tanzil</a> - A collection of Quran translations</li>
          <li><a href="Tatoeba.php">Tatoeba</a> - A DB of translated sentences</li>
          <li><a href="TedTalks.php">TedTalks hr-en</a></li>
          <li><a href="TED2013.php">TED Talks 2013</a></li>
          <li><a href="TildeModel.php">The Tilde MODEL corpus</a></li>
          <li><a href="TEP.php">TEP</a> - The Tehran English-Persian subtitle corpus</li>
          <li><a href="Ubuntu.php">Ubuntu</a> - Ubuntu localization files</li>
          <li><a href="UN.php">UN</a> - Translated UN documents</li>
          <li><a href="UNPC.php">UNPC</a> - The United Nations Parallel Corpus</li>
          <li><a href="wikimedia.php">Wikimedia</a> - Documents from the Wikimedia Translation project</li>
          <li><a href="Wikipedia.php">Wikipedia</a> - translated sentences from Wikipedia</li>
          <li><a href="WikiSource.php">WikiSource</a> - (small en-sv sample only</li>
          <li><a href="WMT-News.php">WMT News Test Sets</a></li>
          <li><a href="XhosaNavy.php">The Xhosa - English Navy corpus</li>
        </ul><br>
	    </td>
	  </tr>
	</table>
      </td>
    </tr>
  </table>

  Please look at the publications below for more information about OPUS.<br>
  Please cite the <a href="LREC2012.txt">first</a> one in the list if 
  you use any part of the corpus in your own work!
  <hr>

  <div class="publications">
    <a name="OO" id="OO"></a>

    <h3>Publications</h3>

    <table>
      <tr>
        <td>
          <dl>
            <dt>J&ouml;rg Tiedemann, 2012,</dt>
            <dd>Parallel Data, Tools and Interfaces in OPUS.
                <a href="http://www.lrec-conf.org/proceedings/lrec2012/pdf/463_Paper.pdf">[pdf]</a><br>
                In <cite>Proceedings of the 8th International
                Conference on Language Resources and Evaluation
                (LREC'2012)</cite></dd>

	    <dt>J&ouml;rg Tiedemann, 2016a</dt>
	    <dd><a href="http://www.bjmc.lu.lv/fileadmin/user_upload/lu_portal/projekti/bjmc/Contents/4_2_28_Products.pdf">OPUS
	    - Parallel Corpora for Everyone.</a> In <cite>Baltic
	    Journal of Modern Computing</cite> (BJMC), Vol 4, No. 2,
	    Special Issue: Proceedings of the 19th Annual Conference
	    of the European Association of Machine Translation (EAMT),
	    2016</dd>

	    <dt>J&ouml;rg Tiedemann, 2016b</dt>
	    <dd><a href="http://www.lrec-conf.org/proceedings/lrec2016/pdf/62_Paper.pdf">Finding
	    Alternative Translations in a Large Corpus of Movie
	    Subtitles.</a> In <cite>Proceedings of the 10th
	    International Conference on Language Resources and
	    Evaluation</cite> (LREC-2016), 2016.</dd>

	    <dt>Pierre Lison and J&ouml;rg Tiedemann, 2016</dt>
	    <dd><a href="http://www.lrec-conf.org/proceedings/lrec2016/pdf/947_Paper.pdf">OpenSubtitles2016:
	    Extracting Large Parallel Corpora from Movie and TV
	    Subtitles.</a> In <cite>Proceedings of the 10th
	    International Conference on Language Resources and
	    Evaluation</cite> (LREC-2016), 2016.</dd>

	    <dt>Raivis Skadi&ncedil;&#X0161;, J&ouml;rg Tiedemann,
	    Roberts Rozis and Daiga Deksne, 2014</dt>
	    <dd>Billions of Parallel Words for Free
            [<a href="eubookshop-lrec2014.txt">bib</a>]
            [<a href="eubookshop-lrec2014.pdf">pdf</a>]</br>
            In <cite>Proceedings of the 9th International Conference
            on Language Resources and Evaluation (LREC'2014)</cite>,
            Reykjavik, Iceland</dd>

            <dt>J&ouml;rg Tiedemann, 2009,</dt>
            <dd>News from OPUS - A Collection of Multilingual Parallel
            Corpora with Tools and
            Interfaces <a href="http://stp.lingfil.uu.se/~joerg/published/ranlp-V.pdf">[pdf]</a><br>
            In N. Nicolov and K. Bontcheva and G. Angelova and
            R. Mitkov (eds.) <cite>Recent Advances in Natural Language
            Processing</cite> (vol V), pages 237-248, John Benjamins,
            Amsterdam/Philadelphia</dd>

            <dt>J&ouml;rg Tiedemann, 2011,</dt>
            <dd><a href="http://dx.doi.org/10.2200/S00367ED1V01Y201106HLT014">Bitext
            Alignment</a>, Synthesis Lecture on HLT, Morgan &amp;
            Claypool Publishers
            (at <a href="http://www.amazon.com/Alignment-Synthesis-Lectures-Language-Technologies/dp/1608455106">Amazon</a>)</dd>

            <dt>J&ouml;rg Tiedemann, 2008,</dt>
            <dd>Synchronizing Translated Movie
            Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/published/lrec08.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 6th International Conference
            on Language Resources and Evaluation
            (LREC'2008)</cite></dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>
            <dd>Building a Multilingual Parallel Subtitle
            Corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/clin17.pdf">[pdf]</a><br>
            In <cite>Proceedings of CLIN 17</cite>, Leuven, Belgium,
            2007.</dd>

            <dt>J&ouml;rg Tiedemann, 2007,</dt>
            <dd>Improved Sentence Alignment for Movie
            Subtitles. <a href="http://stp.lingfil.uu.se/~joerg/paper/ranlp07-subalign.pdf">[pdf]</a><br>
            In <cite>Proceedings of RANLP '07</cite>, Borovets,
            Bulgaria, 2007.</dd>

            <dt>J&ouml;rg Tiedemann, unpublished</dt>
            <dd>OPUS - an open source parallel
            corpus. <a href="http://stp.lingfil.uu.se/~joerg/paper/Nodalida03.pdf">[pdf]</a><br>
            In <cite>Proceedings of the 13th Nordic Conference on
            Computational Linguistics</cite>, University of Iceland,
            Reykjavik, 2003.</dd>

            <dt>J&ouml;rg Tiedemann, Lars Nygaard, 2004</dt>
            <dd>The OPUS corpus - parallel &amp;
            free. <a href="http://stp.ling.uu.se/~joerg/paper/opus_lrec04.pdf">[pdf]</a><br>
            In <cite>Proceedings of the Fourth International
            Conference on Language Resources and Evaluation
            (LREC'04)</cite>. Lisbon, Portugal, May 26-28.</dd>
          </dl>
        </td>

        <td valign="top">A text book on alignment:<br>
        <br>
        <a href="http://www.morganclaypool.com/doi/abs/10.2200/S00367ED1V01Y201106HLT014"><img border="0" src="/img/bitextalign" height="200"></a></td>
      </tr>
    </table>
  </div>
  <hr>
  <div class="footer">
    <table border="0" width="100%">
      <tr>
        <td><a href="http://www.nlpl.eu"><img border="0" src="img/nlpl.png" height="160"></a></td>
        <td><a href="https://www.csc.fi"><img border="0" src="img/csc.png" height="80"></a></td>
        <td><a href="http://www.helsinki.fi"><img border="0" src="img/HY.jpg" height="120"></a></td>
        <td align="center"><a href="https://www.kielipankki.fi"><img border="0"
        src="img/kielipankki.png"
        height="40"></a><br/><br/><a href="https://neic.no"><img border="0"
        src="img/neic.png" height="35"></a></td>
        <td><a href="http://essenceofescience.se/sensordata/#nivre"><img border="0"
        src="img/essence.png"
        width="120"></a><br/><br/><a href="http://www.letsmt.eu"><img border="0"
        src="img/letsmt.jpg" width="120"></a></td>

        <td align="right">
          <a href="https://clustrmaps.com/site/19vsj" title="Visit
          tracker"><img src="//clustrmaps.com/map_v2.png?cl=ffffff&w=a&t=tt&d=jb3_gRwq0W-55WUXelIQXTVQXy4zDuu5yhp8fuyAEZw"
          /></a>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>
