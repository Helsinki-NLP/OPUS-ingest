#!/usr/bin/env perl
#
# move srt-files into individual language sub-dirs'
# with correct path for the OPUS collection
#
# the script can also be used to re-organize the files from the v2018 release
# (move XML files into new sub-directories with compatible names for the new release)


use strict;
use File::Basename;
use ISO::639::3 qw/:all/;


my %subPath=();
my %subFormat=();
my %fileIDs=();


## read all metadata files

while (@ARGV){
    my $file = shift(@ARGV);
    read_info($file);
}


## read file names from STDIN (for example, output of find)

while (<>){
    chomp;
    my $basename = basename($_);
    $basename=~s/\.(gz|xml)$//;
    my $ext = $1;
    my $subID = $ext eq 'gz' ? $basename : $fileIDs{$basename};
    if (exists($subPath{$subID})){
	my $format = $ext == 'gz' ? $subFormat{$subID} : $ext;
	my $path = join('/',$format,$subPath{$subID});
	if ($ext eq 'xml'){
	    my @parts = split(/\//,$path);
	    $parts[0] = 'xml';
	    $path = join('/',@parts);
	}
	if (! -d $path){
	    system("mkdir -p $path");
	}
	print("mv $_ $path/$subID.$ext\n");
	# system("mv $_ $path/$subID.$ext");
	rename $_,"$path/$subID.$ext";
    }
    else{
	print("don't know how to handle $_\n");
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
	s/\\N/""/g;
	my @parts = /^\"/ ? split(/\",\"/) : split(/\t/);
	next if ($#parts < 15);
	next unless ($parts[1]=~/[0-9]/);

	my $movieID = $parts[0];
	my $fileID = $parts[1];
	my $subID = $parts[3];
	my $lang = convert_iso639('iso639-1',$parts[2],1);
	$lang = 'pt_BR' if ($lang eq 'pob');
	$lang = 'pt_MZ' if ($lang eq 'pom');
	$lang = 'ze' if ($lang eq 'zhe');
	$lang = 'yue' if ($lang eq 'zhc');
	$lang = 'zh_TW' if ($lang eq 'zht');
	$lang = 'zh_CN' if ($lang eq 'zh');
	$lang = 'sr' if ($lang eq 'scc');
	$lang = 'es_ES' if ($lang eq 'spn');
	$lang = 'es_149' if ($lang eq 'spl');
	$lang = 'me' if ($lang eq 'mne');
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
	    push(@UnknownYear,$fileID);
	}

	$year = 'unknown' unless ($year=~/\S/);
	$ImdbID = 'unknown' unless ($ImdbID=~/\S/);

	my $path = join('/',$lang,$year,$ImdbID);
	$subPath{$fileID} = $path;
	$subFormat{$fileID} = $format;
	$fileIDs{$subID} = $fileID;
    }
    close F;

    foreach my $fileID (@UnknownYear){
	my ($lang,$year,$id) = split(/\//,$subPath{$fileID});
	if (exists $ImdbYear{$id}){
	    $year = $ImdbYear{$id};
	    my $path = join('/',$lang,$year,$id);
	    $subPath{$fileID} = $path;
	}
	elsif (exists $MovieYear{$id}){
	    $year = $ImdbYear{$id};
	    my $path = join('/',$lang,$year,$id);
	    $subPath{$fileID} = $path;
	}
    }
}

