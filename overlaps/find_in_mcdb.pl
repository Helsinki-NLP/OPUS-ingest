#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use Getopt::Std;
use MCDB_File ();

our($opt_t);
getopts('t');

my $file = shift(@ARGV);
binmode(STDIN);
binmode(STDOUT);

if ($opt_t){
    find_with_standard_tie($file);
}
else{
    find_with_mcdb_tie($file);
}



sub find_with_mcdb_tie{
    my $file = shift();
    my $count = 0;
    my $found = 0;

    my %db = ();
    my $mcdb = MCDB_File->TIEHASH($file);
    $mcdb->madvise(MCDB_File::MADV_RANDOM);
    while (<>){
	$count++;
	if ($mcdb->EXISTS($_)) {
	    $found++;
	}
	print STDERR '.' if (! ($count % 50000));
	print STDERR " $count\n" if (! ($count % 2500000));
    }
    
    undef $mcdb;
    print $found;
}

sub find_with_standard_tie{
    my $file = shift();
    my $count = 0;
    my $found = 0;
    
    my %db = ();
    my $mcdb = tie %db, 'MCDB_File', $file or die "cannot tie $file\n";
    $mcdb->madvise(MCDB_File::MADV_RANDOM);

    while (<>){
	$count++;
	$found++ if (exists $db{$_});
	print STDERR '.' if (! ($count % 50000));
	print STDERR " $count\n" if (! ($count % 2500000));
    }

    undef $mcdb;
    untie %db;
    print $found;
}
