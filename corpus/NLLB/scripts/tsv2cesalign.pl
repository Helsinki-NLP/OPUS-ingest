#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;

my $srcXMLFile = shift(@ARGV) || 'src/corpus.xml.gz';
my $trgXMLFile = shift(@ARGV) || 'trg/corpus.xml.gz';

## print XML header
print '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
  <linkGrp targType="s" fromDoc="';
print $srcXMLFile;
print '" toDoc="';
print $trgXMLFile;
print '">',"\n";

## run through all sentences and print the links
binmode(STDIN);
my $lid=0;
while (<>){
    chomp;
    my ($score, $sid, $tid) = split(/\t/);
    if ($sid && $tid){
	$lid++;
	print "  <link id=\"L$lid\" xtargets=\"$sid;$tid\" score=\"$score\" />\n";
	print STDERR '.' if (! ($lid % 50000));
	print STDERR " $lid\n" if (! ($lid % 2500000));
    }
}

## print the final closing XML tags
print '  </linkGrp>',"\n";
print '</cesAlign>',"\n";


