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

print '<?xml version="1.0" encoding="UTF-8"?>',"\n";
print '<text>',"\n";

my $id = 0;
while (my $key = <>){
    chomp($key);
    $id++;
    $dbh->insert($key, $id);
    $key-~s/\&/\&amp;/g;
    $key-~s/\>/\&gt;/g;
    $key-~s/\</\&lt;/g;
    print "<s id=\"$id\">$key</s>\n";
    if (! ($id % $maxsize)){
	$nr++;
	print STDERR "create a new DB ($filebase.$nr)\n";
	$dbh->finish;
	$dbh = CDB_File->new($filebase.$nr, $filebase.$nr.$$) or die "cannot tie DB hash";
    }
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

print '</text>',"\n";
$dbh->finish;
print STDERR "\nadded a total of $id sentences to the database $filebase\n";


