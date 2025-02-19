#!/usr/bin/env perl


use strict;
use List::Util 'sum';


my %links = ();
my $movie = undef;

while (<>){
    chomp;
    my ($doc1,$doc2,$score) = split(/\t/);
    my ($l1,$y1,$m1) = split(/\//,$doc1);
    my ($l2,$y2,$m2) = split(/\//,$doc2);
    next if ($l1 eq $l2);

    if ($m1 ne $movie){
	if ($movie){
	    my @sorted = sort { scalar keys %{$links{$b}} <=> scalar keys %{$links{$a}} } keys %links;
	    my $maxsize = scalar keys %{$links{$sorted[0]}};

	    my $bestscore = 0;
	    my $bestpivot = undef;
	    my $bestdocs = undef;
	    my $bestlangs = undef;
	    
	    foreach my $s (@sorted){
		last if (scalar keys %{$links{$s}} < $maxsize);
		my $score = 0;
		my @docs = ();
		my @langs = ();
		foreach my $l (keys %{$links{$s}}){
		    my ($best) = sort { $links{$s}{$l}{$b} <=> $links{$s}{$l}{$b} } keys %{$links{$s}{$l}};
		    $score += $links{$s}{$l}{$best};
		    push(@docs,$best);
		    push(@langs,$l);
		}
		if ($score > $bestscore){
		    $bestscore=$score;
		    $bestpivot=$s;
		    my ($bestpivotlang) = split(/\//,$bestpivot);
		    push(@langs,$bestpivotlang);
		    $bestdocs=join(',',sort @docs);
		    $bestlangs=join(',',sort @langs);
		}
	    }
	    print $bestpivot,"\t",$maxsize,"\t",$bestscore/$maxsize,"\t",$bestlangs,"\t",$bestdocs,"\n";
	    %links = ();
	}
	$movie = $m1;
    }
    
    $links{$doc1}{$l2}{$doc2} = $score;
    $links{$doc2}{$l1}{$doc1} = $score;
    
}
