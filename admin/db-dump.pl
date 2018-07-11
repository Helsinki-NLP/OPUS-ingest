#!/usr/bin/perl

use DB_File;

my $dbfile = shift(@ARGV);
my %hash;

tie %hash,"DB_File",$dbfile;

foreach my $k (keys %hash){
    print "$k -> $hash{$k}\n";
}
