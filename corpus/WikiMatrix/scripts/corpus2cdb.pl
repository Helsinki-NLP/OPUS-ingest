#!/usr/bin/env perl
#-*-perl-*-
#
#
# Problem: fails for DBs larger than 4GB!


use utf8;
use strict;
use CDB_File;

my $file = shift(@ARGV);
my $new = new CDB_File($file, "$file.$$") or
    die "$0: new CDB_File failed: $!\n";
 
# Add the new values; remember which keys we've seen.
my $count=0;
while (<>) {
    chomp;
    my ($v, $k) = split(/\t/);
    $new->insert($k, $v);

    $count++;
    print STDERR '.' if (! ($count % 100000));
    print STDERR " $count\n" if (! ($count % 5000000));
}

$new->finish or die "$0: CDB_File finish failed: $!\n";
