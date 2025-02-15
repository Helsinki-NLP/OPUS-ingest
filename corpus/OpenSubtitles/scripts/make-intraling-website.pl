#!/usr/bin/perl


use strict;
use CGI qw(:standard);
use File::Basename qw/basename/;
use FindBin qw($Bin);

my $corpus  = shift(@ARGV) || 'OpenSubtitles';
my $version = shift(@ARGV) || 'v2018';

my $title   = "<a href=\"$corpus-$version.php\">$corpus $version</a> - Intra-Lingual Alignments";
my $releasedir = $Bin.'/../../../OPUS/corpus/'.$corpus.'/'.$version;
# my $htmldir = "/proj/nlpl/data/OPUS/$corpus/$version";


my $header=&HtmlHeader();
$header=~s/^.*(\<\!DOCTYPE)/$1/s;     # skip Content-Type
$header=~s/\<base href=[^\>]+\>//s;   # skip <base href="..." />
print '<?php include("count.php"); ?>',"\n";
print $header;
print &h1($title);

print '
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
';

print_table();
print &HtmlEnd();





sub print_table{
    opendir(my $dh, "$releasedir/intra") || die "can't opendir .: $!";
    my @xmlfiles = grep { /xml\.gz$/ && -f "$releasedir/intra/$_" } readdir($dh);
    closedir $dh;

    my %files = ();
    my %types = ();

    foreach (@xmlfiles){
	my ($langpair,$type) = split(/\./);
	my ($src,$trg) = split(/\-/,$langpair);
	next unless ($src eq $trg);
	$type = 'all' if ($type eq 'xml');
	$types{$type}++;
	$files{$src}{xml}{$type} = $_;
	s/\.xml\.gz/.tmx.gz/;
	if (-e "$releasedir/intra/$_"){
	    $files{$src}{tmx}{$type} = $_;
	}
    }


    print '<div class="sample">';
    print '<table><tr><th>language</th><th>corpus</th>';
    foreach (sort keys %types){
	print '<th>',$_,'</th>';
    }
    print '</tr>';
    foreach my $l (sort keys %files){
	print '<tr><th>',$l,'</th>';
	if (-e "$releasedir/raw/$l.zip"){
	    print "<td><a href=\"download.php?f=$corpus/$version/raw/$l.zip",'">zip</a></td>'."\n";
	}
	else{
	    print '<td></td>';
	}
	foreach (sort keys %types){
	    print '<td>';
	    if (exists $files{$l}{xml}{$_}){
		print "<a href=\"download.php?f=$corpus/$version/intra/",$files{$l}{xml}{$_},'">xml</a>';
	    }
	    if (exists $files{$l}{tmx}{$_}){
		print " <a href=\"download.php?f=$corpus/$version/intra/",$files{$l}{tmx}{$_},'">tmx</a>';
	    }
	    print '</td>'."\n";
	}
	print '</tr>';
    }
    print '</tr></table></div>';
}


sub HtmlHeader{
    my $css="index.css";
    my $HTML=&header(-charset => 'utf-8');
    $HTML.=&start_html(-title => $title,
		       -author => 'Joerg Tiedemann',
		       -base=>'true',
		       -dtd=>1,
		       -meta=>{robots => 'NOFOLLOW'},
		       -style=>{'src'=>$css},
		       -encoding => 'utf-8');

    $HTML .= '<div class="header"><?php include("header.php"); ?></div>',"\n";
    return $HTML;
}

sub HtmlEnd{
#    my $HTML = '<script type="text/javascript">
#if (Date.parse(document.lastModified) != 0)
#            document.write('."'".'last update: '."'".' 
#                   + document.lastModified);
#</script>';
    my $HTML= '';
#    my $HTML.='OPUS, ';
#    $HTML.=&a({-href=>"http://folk.uio.no/larsnyg"},'Lars Nygaard');
#    $HTML.=' ('.&a({-href=>"http://www.hf.uio.no/tekstlab"},
#		   'The Text Laboratory').')';
#    $HTML.=' and ';
#    $HTML.=&a({-href=>"http://www.let.rug.nl/~tiedeman"},'J&ouml;rg Tiedemann');
#    $HTML.=' ('.&a({-href=>"http://www.let.ug.nl"},
#		   'Alfa-Informatica, Rijksuniversiteit Groningen').')';
    $HTML=&div({-class=>'footer'},$HTML);
    $HTML.=&end_html;
    return &hr.$HTML;
}
