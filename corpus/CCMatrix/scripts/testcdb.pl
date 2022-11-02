#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use CDB_File;

my $filebase = shift(@ARGV);

my %db = ();
my $nr = 1;

my $dbh = tie %db, "CDB_File", $filebase.$nr;

while (my @data = each %db){
    print "$data[1]\t$data[0]\n";
}
