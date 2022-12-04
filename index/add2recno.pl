#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use DB_File;

my $file = shift(@ARGV);

binmode(STDIN);
binmode(STDOUT);

my @h ;
tie @h, "DB_File", $file, O_RDWR|O_CREAT, 0666, $DB_RECNO
    or die "Cannot open file '$file': $!\n" ;

$h[0] = "sentence index for $file";

my $id = 0;
while (my $sent = <>){
    chomp($sent);
    $id++;
    $h[$id] = $sent;
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

untie @h;
print STDERR "\nadded a total of $id sentences to the database $file\n";
