#!/usr/bin/env perl

use strict;
use File::Basename;
use ISO::639::3 qw/:all/;



my %subPath=();
my %subFormat=();


## read all metadata files

foreach (@ARGV){
    my $file = shift(@ARGV);
    read_info($file);
}


## read file names from STDIN (for example, output of find)

while (<>){
    chomp;
    my $basename = basename($_);
    $basename=~s/\.gz$//;
    if (exists($subPath{$basename})){
	my $format = $subFormat{$basename};
	my $path = join('/',$format,$subPath{$basename});

	if (! -d $path){
	    system("mkdir -p $path");
	}
	print("mv $_ $path/$basename.gz\n");
	system("mv $_ $path/$basename.gz\n");
    }
}


sub read_info{
    my $infoFile = shift;
    print("reading $infoFile\n");
    open F,"gzip -cd < $infoFile |" || return 0;
    
    my %MovieYear = ();
    my %ImdbYear = ();
    my @UnknownYear = ();
    
    while (<F>){
	chomp;
	my @parts = /^\"/ ? split(/\",\"/) : split(/\t/);;
	next if ($#parts < 15);
	next unless ($parts[1]=~/[0-9]/);

	my $movieID = $parts[0];
	my $subID = $parts[1];
	my $lang = convert_iso639('iso639-1',$parts[2],1);
	$lang = 'pt_BR' if ($lang eq 'pob');
	$lang = 'ze' if ($lang eq 'zhe');
	my $format = $parts[6];
	my $year = $parts[8];
	my $ImdbID = $parts[9];
	if ($parts[12]){
	    $ImdbID = join('_',$parts[9],$parts[12],$parts[13],$parts[14]);
	}
	$ImdbID = $parts[0] unless ($ImdbID);
	
	if ($year){
	    $MovieYear{$movieID} = $year;
	    $ImdbYear{$ImdbID} = $year;
	}
	else{
	    $year = 'unknown';
	    push(@UnknownYear,$subID);
	}

	$year = 'unknown' unless ($year=~/\S/);
	$ImdbID = 'unknown' unless ($ImdbID=~/\S/);

	my $path = join('/',$lang,$year,$ImdbID);
	$subPath{$subID} = $path;
	$subFormat{$subID} = $format;
    }
    close F;

    foreach my $subID (@UnknownYear){
	my ($lang,$year,$id) = split(/\//,$subPath{$subID});
	if (exists $ImdbYear{$id}){
	    $year = $ImdbYear{$id};
	    my $path = join('/',$lang,$year,$id);
	    $subPath{$subID} = $path;
	}
	elsif (exists $MovieYear{$id}){
	    $year = $ImdbYear{$id};
	    my $path = join('/',$lang,$year,$id);
	    $subPath{$subID} = $path;
	}
    }
}

