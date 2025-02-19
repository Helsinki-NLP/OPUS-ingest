#!/usr/bin/env perl

use strict;
use Getopt::Std;


use vars qw/$opt_a $opt_l $opt_m $opt_o $opt_x/;

getopts('a:l:m:o:x:');

my $outdir  = $opt_o || 'linksets/';
my $algdir1 = $opt_x || '../devtest-xml';
my $algdir2 = $opt_a || '../devtest-alt';

my $MinNrOfMovies = $opt_m || 3;
my $MinNrOfLangs  = $opt_l || 3;


## expected input format:
#
# en/2024/10071550/1961372625.xml.gz      1       0.997863247863248       en,ro   ro/2024/10071550/1961397115.xml.gz



## read all lines and sort by langs (set of languages covered)
## --> this is used to filter out lang-sets that have too few movies

my %sets = ();

while (<>){
    chomp;
    my ($pivotdoc,$nrAligned,$score,$langs,$algdocs) = split(/\t/);
    push(@{$sets{$langs}},$_);
}




my %linksets = ();
my %linkscores = ();

system("mkdir -p $outdir");
open R,">${outdir}pivot-data.tsv" || die "cannot write to ${outdir}pivot-data.tsv";


foreach my $l (keys %sets){
    next if (scalar @{$sets{$l}} < $MinNrOfMovies);
    foreach (@{$sets{$l}}){
	my ($pivotdoc,$nrAligned,$score,$langs,$algdocs) = split(/\t/);
	my @languages = split(/\,/,$langs);
	next unless (@languages >= $MinNrOfLangs);
    
	my ($pivotlang,$year,$movieID) = split(/\//,$pivotdoc);
	my @linkedlangs = grep ! /^$pivotlang$/, @languages;
	my $linkedlangs=join(' ',@linkedlangs);
	$langs=~tr/,/-/;
	print R "$year/$langs/$movieID\t$pivotlang\t$linkedlangs\n";	

	foreach my $d (split(/\,/,$algdocs)){
	    my ($alglang) = split(/\//,$d);
	    my ($srclang,$trglang) = ($pivotlang,$alglang);
	    my ($srcdoc,$trgdoc) = ($pivotdoc,$d);
	    if ($pivotlang gt $alglang){
		($srclang,$trglang) = ($alglang,$pivotlang);
		($srcdoc,$trgdoc) = ($d,$pivotdoc);
	    }
	
	    $linksets{"$srclang-$trglang"}{$srcdoc}{$trgdoc}{"${outdir}$year/$langs/$movieID"} = $score;
	}
    }
}
close R;


foreach my $langpair (sort keys %linksets){
    print STDERR "$langpair ";
    extract_alignments($langpair,$linksets{$langpair});
}


sub extract_alignments{
    my ($langpair,$linksets) = @_;

    my $countDocs = 0;
    my %outFiles = ();
    foreach my $d (($algdir1,$algdir2)){
	my $algfile = "$d/$langpair.xml.gz";
	$algfile = "$d/$langpair.alt.xml.gz" unless (-e "$d/$langpair.xml.gz");
	print STDERR "cannot find $algfile\n" unless (-e $algfile);
	if (-e $algfile){
	    my $printDoc=0;
	    open I,"gzip -cd < $algfile |" || die "cannot read from $algfile\n";
	    while (<I>){
		if (/fromDoc=\"([^\"]+)\"/){
		    my $fromDoc = $1;
		    $fromDoc = $fromDoc.'.gz' if (exists $$linksets{$fromDoc.'.gz'});
		    if (exists $$linksets{$fromDoc}){
			if (/toDoc=\"([^\"]+)\"/){
			    my $toDoc = $1;
			    $toDoc = $toDoc.'.gz' if (exists $$linksets{$fromDoc}{$toDoc.'.gz'});
			    if (exists $$linksets{$fromDoc}{$toDoc}){
				$printDoc=1;
				$countDocs++;
				%outFiles = ();
				foreach my $dir (keys %{$$linksets{$fromDoc}{$toDoc}}){
				    system("mkdir -p $dir");
				    open $outFiles{$dir}, "| gzip -c >$dir/$langpair.xml.gz" || die "cannot write to $dir/$langpair.xml.gz\n";
				    my $fh = $outFiles{$dir};
				    print $fh '<?xml version="1.0" encoding="utf-8"?>'."\n";
				    print $fh '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'."\n";
				    print $fh '<cesAlign version="1.0">'."\n";
				}
			    }
			}
		    }
		}
		if ($printDoc){
		    foreach my $f (values %outFiles){
			print $f $_;
		    }
		}
		if (/<\/linkGrp>/){
		    foreach my $f (values %outFiles){
			print $f '</cesAlign>'."\n";
			close $f;
			$printDoc = 0;
		    }
		}
	    }
	}
    }
}
