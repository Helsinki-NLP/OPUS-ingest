#!/usr/bin/perl

use LetsMT::Resource;
use LetsMT::Align::GaleChurch;

my $srcfile = shift(@ARGV);
my $trgfile = shift(@ARGV);

my $srcres = new LetsMT::Resource(path=>$srcfile);
my $trgres = new LetsMT::Resource(path=>$trgfile);

my $algfile = $srcfile;
$algfile=~s/ca/ca-es/;
$algfile=~s/\.gz//;
my $algres = new LetsMT::Resource(path=>$algfile);

my $aligner = new LetsMT::Align::GaleChurch( search_window => 20, 
					     pillow => 1 );
$aligner->align($srcres,$trgres,$algres);

print $algres;
