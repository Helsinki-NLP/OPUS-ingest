#!/usr/bin/env perl

use strict;


my $outdir  = shift(@ARGV) || 'linksets';
my $algdir1 = shift(@ARGV) || '../devtest-xml';
my $algdir2 = shift(@ARGV) || '../devtest-alt';

# my $outdir  = 'linksets';
# my $algdir1 = '../devtest-xml';
# my $algdir2 = '../devtest-alt';


my $MinNrOfMovies = 3;
my $MinNrOfLangs  = 3;


my %linksets = ();
my %linkscores = ();

while (<>){
    if (/^movie: (\S+)$/){
	my $line = <>;
	my $line = <>;
	chomp($line);
	my ($movieID,$langs,$score,$docs) = split(/\t/,$line);
	$linksets{$langs}{$movieID} = $docs;
	$linkscores{$langs}{$movieID} = $score;
    }
}

foreach my $langs (keys %linksets){
    my @languages = split(/\,/,$langs);
    if (scalar keys %{$linksets{$langs}} >= $MinNrOfMovies){
	if (scalar @languages >= $MinNrOfLangs){
	    extract_alignments($langs,$linksets{$langs},$linkscores{$langs});
	}
    }
}


sub extract_alignments{
    my ($langs,$linksets,$linkscores) = @_;

    my $dir = $langs;
    $dir=~tr/,/-/;
    $dir = "$outdir/$dir";
    system("mkdir -p $dir");

    open O, ">$dir/README.md" || die "cannot write to $dir/README.md\n";
    my %docs = ();
    my $countMovies=0;
    foreach my $movieID (keys %{$linksets}){
	print O "- movie: $movieID (link score = $$linkscores{$movieID})\n";
	foreach (split(/\,/,$$linksets{$movieID})){
	    print O "  - $_\n";
	    $docs{$_}++;
	}
	$countMovies++;
    }
    close O;
    
    my @languages = split(/\,/,$langs);
    my $nrOfLangs = scalar @languages;
    print STDERR "\nextract links for $countMovies movie(s) in $nrOfLangs languages in $dir\n";

    my %linkedLangs = ();
    foreach my $s (@languages){
	foreach my $t (@languages){
	    next if ($s ge $t);
	    
	    print STDERR "$s-$t ";
	    open O, ">$dir/$s-$t.xml" || die "cannot write to $dir/$s-$t.xml\n";
	    print O '<?xml version="1.0" encoding="utf-8"?>'."\n";
	    print O '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'."\n";
	    print O '<cesAlign version="1.0">'."\n";

	    my $countDocs = 0;
	    foreach my $d (($algdir1,$algdir2)){
		my $algfile = "$d/$s-$t.xml.gz";
		$algfile = "$d/$s-$t.alt.xml.gz" unless (-e "$d/$s-$t.xml.gz");
		print STDERR "cannot find $algfile\n" unless (-e $algfile);
		if (-e $algfile){
		    my $printDoc=0;
		    open I,"gzip -cd < $algfile |" || die "cannot read from $algfile\n";
		    while (<I>){
			if (/fromDoc=\"([^\"]+)\"/){
			    if (exists $docs{$1} || exists $docs{$1.'.gz'}){
				if (/toDoc=\"([^\"]+)\"/){
				    if (exists $docs{$1} || exists $docs{$1.'.gz'}){
					$printDoc=1;
					$countDocs++;
				    }
				}
			    }
			}
			print O $_ if ($printDoc);
			$printDoc = 0 if (/<\/linkGrp>/);
		    }
		}
	    }
	    print O '</cesAlign>'."\n";
	    close O;
	    print STDERR "$countDocs ";
	    if ($countDocs){
		$linkedLangs{$s}{$t}+=$countDocs;
		$linkedLangs{$t}{$s}+=$countDocs;
	    }
	    else{
		unlink("$dir/$s-$t.xml");
	    }
	}
    }
    open O, ">>$dir/README.md" || die "cannot write to $dir/README.md\n";
    print O "\n- linked languages:\n";
    foreach my $l (sort {scalar keys %{$linkedLangs{$b}} <=> scalar keys %{$linkedLangs{$a}}} keys %linkedLangs){
	print O "  - $l: ";
	print O join(' ',%{$linkedLangs{$l}});
	print O "\n";
    }
    close O;
}
