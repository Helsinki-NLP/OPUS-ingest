<?php include("count.php"); ?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	 "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>ParCor - A Paralell Pronoun-Coreference Corpus</title>
<link rev="made" href="mailto:Joerg%20Tiedemann">

<meta name="robots" content="NOFOLLOW">
<link rel="stylesheet" type="text/css" href="../index.css">
</head>
<body>
<div class="header"><?php include("../header.php"); ?></div>

<h1>ParCor - A Parallel Pronoun-Coreference Corpus</h1>


<table border="0">
<tr>
<td>
<p>
ParCor 1.0 is a parallel corpus of texts in which pronoun coreference -- reduced coreference in which pronouns are used as referring expressions -- has been annotated. It consists of a collection of parallel English-German documents from two different text genres: TED Talks (transcribed planned speech), and EU Bookshop publications (written text). All documents in the corpus have been manually annotated with respect to the type and location of each pronoun and, where relevant, its antecedent.
</p>

<p>
The corpus is intended to be used both as a resource from which to learn systematic differences in pronoun use between languages and ultimately for developing and testing informed Statistical Machine Translation systems aimed at addressing the problem of pronoun coreference in translation.
</p>

<p>
If you make use of the ParCor corpus in your work, please cite the following article:
</p>

<ul>
<li>Liane Guillou, Christian Hardmeier, Aaron Smith, J&ouml;rg Tiedemann and Bonnie Webber (2014): <i>ParCor 1.0: A Parallel Pronoun-Coreference Corpus to Support Statistical MT</i>, In Proceedings of <a href="http://lrec2014.lrec-conf.org/">LREC 2014</a>, Reykjavik, Iceland [<a href="poster.pdf">poster</a>] [<a href="lrec2014.txt">bib</a>] [<a href="LREC2014.pdf">pdf</a>]</li>
</ul>
</td>
<td><a href="poster.pdf"><img border="0" src="poster-small.jpg" width="150"/></a></td>
</tr>
</table>

<hr/>

<h2>Release v1.0</h2>

<h3>Download and Browse</h3>

<ul>
<li>Complete download: <a rel="nofollow" href="../download.php?f=ParCor/ParCor_v1.0.tar.gz">ParCor_v1.0.tar.gz</a> or <a rel="nofollow" href="../download.php?f=ParCor/ParCor_v1.0.zip">ParCor_v1.0.zip</a></li>
<li><a href="Documentation/AnnotationGuidelines.pdf">Annotation Guidelines</a></li>
<li>Download from <a href="https://bitbucket.org/tiedemann/parcor">bitbucket</a></li>
<li>Browse <a href="Annotated_Texts">directory with annotated texts</a></li>
<li>Browse <a href="Raw_Texts">directory with raw texts</a></li>
<li>Browse <a href="Sentence_Aligned_Texts">directory with sentence aligned texts</a></li>
</ul>

<p>Please see the <a href="README">README</a> file for more information.</p>


<h3>Release Information</h3>

<p>
The release contains the following:
</p>

<ul>
<li> The annotated English and German texts (in folder: "Annotated_Texts")</li>
<li> The annotation guidelines used by our human annotators (in folder: "Documentation")</li>
<li> Copies of the texts without annotation (in folder: "Raw_Texts")</li>
<li> Sentence aligned texts, also without annotation (in folder: "Sentence_Aligned_Texts"
)</li>
</ul>

<p>
ORIGINAL SOURCE OF DATA
</p>

<p>
The following TED Talks were downloaded from <a href="https://wit3.fbk.eu/">WIT3</a>:
They form the test set of the IWSLT13 Shared Task dataset.
</p>

<pre>
767 - Bill Gates on Energy: Innovating to Zero!
769 - Aimee Mullins: The Opportunity of Adversity
779 - Daniel Kahneman: The Riddle of Experience vs. Memory
783 - Gary Flake: Is Pivot a Turning Point for Web Exploration?
785 - James Cameron: Before Avatar ... a Curious Boy
790 - Dan Barber: How I Fell in Love With a Fish
792 - Eric Mead: The Magic of the Placebo
799 - Jane McGonigal: Gaming Can Make a Better World
805 - Robert Gupta: Music is Medicine, Music is Sanity
824 - Michael Specter: The Danger of Science Denial
837 - Tom Wujec: Build a Tower, Build a Team
</pre>

<p>
The following EU Bookshop documents were downloaded from the <a href="https://bookshop.europa.eu/en/home/">EU Bookshop online archive</a> in E-Book format:
The raw text was extracted using the <a href="http://www.calibre-ebook.com/">Calibre E-Book Management tool</a>
</p>

<pre>
KEBC11002 - Social Dialogue
KEBC12001 - Demography, Active Ageing and Pensions
KH7911105 - Soil
MI3112464 - Road Transport
MJ3011331 - Energy
NA3211776 - Europe in 12 Lessons
QE3011322 - Shaping Europe
QE3211790 - Active citizenship
</pre>


<h2>Release v1.0pre</h2>

<ul>
<li>Complete download: <a href="ParCor_v1.0pre.tar.gz">ParCor_v1.0pre.tar.gz</a> or <a href="ParCor_v1.0pre.zip">ParCor_v1.0pre.zip</a></li>
</ul>


<h2>Acknowledgments</h2>

We would like to thank our annotators, Susanne Tauber, Petra Strom, Samuel Gibbon, David Lawrence and Aaron Smith for their many hours of painstaking work and Yannick Versley for making his German pre-processing pipeline available to us.
The work was suppored by the European Union Seventh Framework Programme (FP7/2007-2013) under grant agreement 287658 (<a href="https://www.eu-bridge.eu">EU BRIDGE</a>) and by the Swedish Research Council (Vetenskapsr&aring;det) through the project on <a href="http://stp.lingfil.uu.se/~joerg/?project=DiscoMT">Discourse-Oriented Machine Translation</a> (2012- 916).

<hr/>
<div class="footer"></div>
</body>
</html>
