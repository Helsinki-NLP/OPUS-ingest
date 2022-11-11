#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use MCDB_File ();


my $file = shift(@ARGV);
my $count = 0;
my $found = 0;

binmode(STDIN);
binmode(STDOUT);

my %db = ();
my $mcdb = MCDB_File->TIEHASH($file);
while (<>){
    $count++;
    if ($mcdb->EXISTS($_)) {
	$found++;
    }
    print STDERR '.' if (! ($count % 50000));
    print STDERR " $count\n" if (! ($count % 2500000));
}

undef $mcdb;
print "$count\t$found";
