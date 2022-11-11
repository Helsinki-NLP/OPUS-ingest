#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use CDB_File;


my $filebase = shift(@ARGV);
my $count = 0;
my $found = 0;

binmode(STDIN);
binmode(STDOUT);

my $nr = 1;
my @cdb = ();
while (-e $filebase.$nr){
    push(@cdb,CDB_File->TIEHASH($filebase.$nr));
    $nr++;
}

while (<>){
    $count++;
    foreach my $db (@cdb){
	if ($db->EXISTS($_)) {
	    $found++;
	    last;
	}
    }
    print STDERR '.' if (! ($count % 50000));
    print STDERR " $count\n" if (! ($count % 2500000));
}

print $found;
