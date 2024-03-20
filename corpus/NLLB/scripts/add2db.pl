#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use DB_File;


$DB_BTREE->{'cachesize'} = 1000000 ;

my $filename = shift(@ARGV);
my %db = ();
my $dbh = tie %db, "DB_File", $filename, O_CREAT|O_RDWR, 0666, $DB_BTREE;


binmode(STDIN,":encoding(utf-8)");
my $id = 0;
while (my $key = <>){
    chomp;
    utf8::encode($key);
    $id++;
    $db{$key} = $id;
    print STDERR '.' if (! ($id % 5000));
    print STDERR " $id\n" if (! ($id % 250000));
}

print STDERR "\nadded a total of $id sentences tothe database $filename\n";
