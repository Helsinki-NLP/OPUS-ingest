#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use CDB_File;

my $filebase = shift(@ARGV);
my $maxsize = 10000000;
# my $maxsize = 10000;

my %db = ();
my $nr = 1;
my $dbh = CDB_File->new($filebase.$nr, $filebase.$nr.$$) or die "cannot tie DB hash";

# binmode(STDIN,":encoding(utf-8)");
binmode(STDIN);
binmode(STDOUT);


my $id = 0;
while (my $key = <>){
    # chomp($key);
    $id++;
    $dbh->insert($key, $id);
    if (! ($id % $maxsize)){
	$nr++;
	print STDERR "create a new DB ($filebase$nr)\n";
	$dbh->finish;
	$dbh = CDB_File->new($filebase.$nr, $filebase.$nr.$$) or die "cannot tie DB hash";
    }
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

$dbh->finish;
print STDERR "\nadded a total of $id sentences to the database $filebase\n";
