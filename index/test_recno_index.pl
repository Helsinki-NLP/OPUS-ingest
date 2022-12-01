#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use DB_File;

my $file = shift(@ARGV);
my $start = shift(@ARGV) || 100;
my $nr = shift(@ARGV) || 10;


binmode(STDOUT);

my @h;
my $db = tie @h, "DB_File", $file, O_RDONLY, 0666, $DB_RECNO
    or die "Cannot open file '$file': $!\n" ;

# $DB_RECNO->{'cachesize'} = ;

if ($nr){
    for ($start..$start+$nr-1){
	if (exists $h[$_]){
	    print "sentence $_: ", $h[$_],"\n";
	}
    }
}

untie @h;
