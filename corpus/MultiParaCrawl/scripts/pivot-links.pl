#!/usr/bin/env perl
#-*-perl-*-


use XML::Writer;

use vars qw($opt_a $opt_s);
use Getopt::Std;
getopts('as:');


my $linkfile1 = shift(@ARGV);
my $linkfile2 = shift(@ARGV);

my $fromDoc = shift(@ARGV);
my $toDoc   = shift(@ARGV);


## merge the sorted linkfiles and extract transitive links
## print links to stdout in XCES-align-like format


open S,"<$linkfile1" || die "cannot read from $linkfile1";
open T,"<$linkfile2" || die "cannot read from $linkfile2";

my $XmlWriter = XML::Writer->new( DATA_MODE => 1, DATA_INDENT => 1 );
$XmlWriter->xmlDecl("UTF-8");
$XmlWriter->doctype('cesAlign', "-//CES//DTD XML cesAlign//EN", "");
$XmlWriter->startTag('cesAlign','version' => '1.0');
$XmlWriter->startTag('linkGrp',
		     'targType' => 's',
		     'fromDoc'  => $fromDoc,
		     'toDoc'    => $toDoc);


my $line = <T>;
chomp($line);
my ($alg2_score, $alg2_pivot, $alg2_links) = split(/\t/);

my $LinkID=0;
my $LastPivot;

while (<S>){
    my ($alg1_score, $alg1_pivot, $alg1_links) = split(/\t/);
    while ($alg2_pivot lt $alg1_pivot){
	last unless ($line = <T>);
	($alg2_score, $alg2_pivot, $alg2_links) = split(/\t/, $line);
    }
    if ($alg2_pivot eq $alg1_pivot){
	if ($opt_s){
	    next if ($alg1_score < $opt_s);
	    next if ($alg2_score < $opt_s);
	}
	unless ($opt_a){
	    next if ($alg1_pivot eq $LastPivot);
	}
	chomp($alg1_links);
	chomp($alg2_links);
	$LinkID++;
	$LastPivot = $alg1_pivot;
	my $AvgScore = ($alg1_score + $alg2_score)/2;
	$XmlWriter->emptyTag( 'link',
			      'id' => 'L'.$LinkID,
			      'xtargets' => join(';',($alg1_links,$alg2_links)),
			      's2p_score' => $alg1_score,
			      'p2t_score' => $alg2_score,
			      'score' => $AvgScore );
	# print "$alg1_links\t$alg2_links\t$alg1_score\t$alg2_score\n";	
    }
}

$XmlWriter->endTag('linkGrp');
$XmlWriter->endTag('cesAlign');

close S;
close T;
