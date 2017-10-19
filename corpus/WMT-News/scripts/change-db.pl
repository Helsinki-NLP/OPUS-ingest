#!/usr/bin/perl
#
# a small script to remove NewsTest (the old name for WMT-News from the DBs)


use DB_File;

my $downloaddir='/srv/OPUS/html/tmp';

tie my %LangNames,"DB_File",$downloaddir.'/LangNames.db';
tie my %Corpora,"DB_File",$downloaddir.'/Corpora.db';
tie my %LangPairs,"DB_File",$downloaddir.'/LangPairs.db';
tie my %Bitexts,"DB_File",$downloaddir.'/Bitexts.db';
tie my %Info,"DB_File",$downloaddir.'/Info.db';


print '';

foreach (keys %Bitexts){
    $Bitexts{$_}=~s/NewsTest//;
}

foreach (keys %Corpora){
    $Corpora{$_}=~s/NewsTest//;
}

foreach (keys %Info){
    if (/NewsTest/){
	delete $Info{$_};
    }
}
