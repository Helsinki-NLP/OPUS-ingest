#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use MCDB_File;

my $file = shift(@ARGV);
my $dbh = new MCDB_File::Make($file) or die "cannot tie DB hash";

binmode(STDIN);
binmode(STDOUT);

my $id = 0;
while (<>){
    chomp;
    $dbh->insert($_, $id);
    $id++;
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

$dbh->finish;
print STDERR "\nadded a total of $id sentences to the database $file\n";
