<?php include("count.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

<html>
  <head>
    <meta name="generator" content="HTML Tidy, see www.w3.org">
    <title>OPUS - an open source parallel corpus</title>
    <link rel="stylesheet" href=
    "index.css" type="text/css">
  </head>

  <body bgcolor="#FFFFFF" text="#000000" link="#FF0000" vlink= 
  "#800000" alink="#FF00FF">

    <div class="header">
    <?php include("header.php"); ?>
    </div>

    <h1>OPUS - an open source parallel corpus</h1>


    <a name="tools"></a>
    <div class="tools">

    <h3>Tools for processing OPUS corpora</h3>

    <p>Using OPUS corpora with <a href="https://bitbucket.org/tiedemann/uplug">Uplug</a></li> is very straightforward. Here is a small selection of some simple tools to process parallel corpora from OPUS:</p>

    <ul>

    <li><b><code><a href="tools/readalign">uplug/tools/readalign</a></code></b>
<p> 
    A simple Perl script to read sentence aligned OPUS corpora and printing them in plain text format to STDOUT. It can also add some very simple HTML tags to show sentence alignments on websites. <br />
Example usage:<br />
<p>
<code>
/path/to/uplug/tools/readalign xml/de-sv.ces.gz | less
</code>
<p>
    (Note that you have to run readalign in the home directory of the corpus in order to match the relative file paths specified in the sentence alignment file xml/de-sv.ces.gz)
</li>


    <li><b><code><a href="tools/opus2moses">uplug/tools/opus2moses.pl</a></code></b>
<p>
    A simple Perl script (requires XML::Parser) to convert sentence aligned OPUS corpora to <a href="http://www.statmt.org/moses/">Moses<a> / <a href="http://code.google.com/p/giza-pp/">GIZA++</a> input format (two separate files for source and target language, one sentence per line, aligned sentences on corresponding lines). <br />
Example usage:<br />
<p>
<code>
zcat OPUS/corpus/Europarl3/xml/de-sv.ces.gz | uplug/tools/opus2moses.pl -d OPUS/corpus/Europarl3 -s word:lem:pos -t pos:word -e de-sv.src -f de-sv.trg
</code>
</p>
<p>
    (This will read aligned sentences from the German-Swedish Europarl corpus and writes factors word+lemma+POS-tag for German and factors POS-tag+word for Swedish to the files de-sv.src (German) and de-sv.trg (Swedish))
</p>
</li>

    <li><b><code><a href="tools/opus-indexer">uplug/tools/opus-indexer.pl</a></code></b>
<p>Yet another Perl script, this one for indexing OPUS corpora with the Corpus Work Bench (with support for sentence alignment)</p>

    </ul>


      <h3>Tools used for building OPUS</h3>

      <p>The following tools have been used for pre-processing, annotation
      &amp; alignment
      (not including standard <a href="http://www.gnu.org">GNU-tools</a>):</p>
      <ul>
        <li><a href="https://bitbucket.org/tiedemann/uplug">Uplug<a/>
          - tokenizer, sentence-splitter, XML-tools, sentence aligner, 
            word aligner, corpus indexer (using CWB), web search interfaces<br>
	  <a href="https://bitbucket.org/tiedemann/uplug">
	      https://bitbucket.org/tiedemann/uplug</a>
	</li><br />

     <li>align - sentence aligner (based on Gale&amp;Church, 1993)
	integrated in Uplug</li><br/>

     <li><a href="http://mokk.bme.hu/resources/hunalign">hunalign</a>
        - another sentence aligner also integrated in Uplug</li><br/>

      <li><code><a href="tools/srt2xml">srt2xml.pl</a></code>
          &amp; <code><a href="tools/srtalign">srtalign.pl</a></code> 
          - special scripts to convert and align movie subtitles 
          (also included in the latest versions of Uplug)</li><br/>

      <li><a href="http://grok.sourceforge.net/">OpenNLP &amp; Grok<a/>,
          Jason Baldridge and Gann Bierner<br>
          <a href="http://grok.sourceforge.net/">
          http://grok.sourceforge.net/</a><br>

	  <br>
          <table>
            <tr>
              <th>tool</th>
              <th>language</th>
              <th>trained on</th>
              <th>trained by</th>
            </tr>
            <tr>
              <td>tagger</td>
              <td>English</td>
              <td>WSJ+Brown</td>
              <td>Gann Bierner</td>
            </tr>
            <tr>
              <td>chunker</td>
              <td>English</td>
              <td>Penn Tree Bank</td>
              <td>J&ouml;rg Tiedemann</td>
            </tr>
          </table>
	  <br>
        </li>

        <li>
          TnT - Statistical Part-of-Speech Tagging, Thorsten
          Brants<br>
           <a href="http://www.coli.uni-sb.de/~thorsten/tnt/">
          http://www.coli.uni-sb.de/~thorsten/tnt/</a> 

	  <br>
	  <br>
          <table>
            <tr>
              <th>tool</th>
              <th>language</th>
              <th>trained on</th>
              <th>trained by</th>
            </tr>
            <tr>
              <td>tagger</td>
              <td>German</td>
              <td>NEGRA</td>
              <td>Thorsten Brants</td>
            </tr>
            <tr>
              <td>tagger</td>
              <td>English</td>
              <td>WSJ</td>
              <td>Thorsten Brants</td>
            </tr>
            <tr>
              <td>tagger</td>
              <td>Swedish</td>
              <td>SUC</td>
              <td>Be&aacute;ta Megyesi</td>
            </tr>
          </table>
	  <br>
        </li>

        <li>
          TreeTagger - Decision Tree Tagger, Helmut Schmid<br>
           <a href= 
          "http://www.ims.uni-stuttgart.de/projekte/corplex/TreeTagger/">
          http://www.ims.uni-stuttgart.de/projekte/corplex/TreeTagger/</a><br>

           (tokenizer, tagger, lemmatizer) 

	   <br>
	   <br>
          <table>
            <tr>
              <th>language</th>
              <th>trained on</th>
              <th>trained by</th>
            </tr>
            <tr>
              <td>German</td>
              <td>NEGRA</td>
              <td>Helmut Schmid</td>
            </tr>
            <tr>
              <td>English</td>
              <td>WSJ</td>
              <td>Helmut Schmid</td>
            </tr>
            <tr>
              <td>French</td>
              <td>
              </td>
              <td>Achim Stein</td>
            </tr>
            <tr>
              <td>Italian</td>
              <td>
              </td>
              <td>Achim Stein</td>
            </tr>
            <tr>
              <td>Spanish</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Dutch</td>
              <td></td>
              <td></td>
            </tr>
          </table>
          <br>
        </li>

	      <li><a href="http://www.let.rug.nl/vannoord/alp/Alpino/">Alpino and Alpino tools</a> for tokenizing (Europarl and OpenSubtitles only) and parsing Dutch (Europarl only)</li><br />

	      <li><a href="http://www.let.rug.nl/vannoord/TextCat/">TextCat</a> - for language identification (filtering) of movie subtitles</li>
	      <br />


        <li>ChaSen - japanese tokenizer + tagger<br>
         <a href="http://chasen.aist-nara.ac.jp/">
        http://chasen.aist-nara.ac.jp/</a><br>
         (tokenizer POS-tagger lemmatizer sentence splitter)</li><br>

	 <li>QTag - a probabilistic parts-of-speech tagger, Oliver Mason<br>
	 <a href="http://web.bham.ac.uk/o.mason/software/tagger/">
	 http://web.bham.ac.uk/o.mason/software/tagger/</a><br>

	  <br>
          <table>
            <tr>
              <th>language</th>
              <th>trained on</th>
              <th>trained by</th>
            </tr>
            <tr>
              <td><a href="http://web.bham.ac.uk/o.mason/software/tagger/">English</a></td>
              <td>1 Mio words</td>
              <td>Oliver Mason</td>
            </tr>
            <tr>
              <td><a href="http://lael.pucsp.br/corpora/etiquetagem/index.html">Portuguese</a></td>
              <td>500 Mio words</td>
              <td>Tony Berber Sardinha and Rod de Lima-Lopes</td>
	      </tr>
	    </table><br></li>

        <li>recode - convert between various character
        encodings<br>
         <a href=
        "http://www.iro.umontreal.ca/contrib/recode/HTML/">
        http://www.iro.umontreal.ca/contrib/recode/HTML/</a></li>

        <li>tidy - validate, correct, and pretty-print
        XML-files<br>
         <a href="http://www.w3.org/People/Raggett/tidy/">
        http://www.w3.org/People/Raggett/tidy/</a></li>

      </ul>


      <p>The following tools are used for data management:</p>
      <ul>
        <li>IMS Corpus Workbench (CWB)<br>
	<a href="http://www.ims.uni-stuttgart.de/projekte/CorpusWorkbench/index.html">http://www.ims.uni-stuttgart.de/projekte/CorpusWorkbench/index.html</a></li>
<!--	<li>The Concurrent Versions System (CVS)<br>
	<a href="http://www.cvshome.org/">http://www.cvshome.org/</a></li>
	<li>ViewCVS for viewing CVS repositories<br>
	<a href="http://viewcvs.sourceforge.net/">http://viewcvs.sourceforge.net/</a></li>
      -->
    </div>
    <hr>

    <div class="footer">
<script type="text/javascript">
if (Date.parse(document.lastModified) != 0)
            document.write('last update: ' 
                   + document.lastModified);
</script>
    </div>
  </body>
</html>
