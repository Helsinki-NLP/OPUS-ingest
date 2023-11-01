#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use MCDB_File;

my $file = shift(@ARGV);
my $start = shift(@ARGV) || 100;
my $nr = shift(@ARGV) || 10;

binmode(STDOUT);

my $mcdb = MCDB_File->TIEHASH($file) or die "cannot tie $file ($!)\n";

if ($nr){
    for ($start..$start+$nr-1){
	if ($mcdb->EXISTS($_)) {
	    print "sentence $_: ", $mcdb->FETCH($_), "\n";
	}
    }
}

undef $mcdb;

