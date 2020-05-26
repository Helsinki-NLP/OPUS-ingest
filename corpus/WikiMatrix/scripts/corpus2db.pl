#!/usr/bin/env perl
#-*-perl-*-
#
# Problem: too slow!
#

use utf8;
use strict;
# use CDB_File;
use TokyoCabinet;

my $file = shift(@ARGV);

# create the object
my $hdb = TokyoCabinet::HDB->new();
 
 # open the database
if(!$hdb->open($file, $hdb->OWRITER | $hdb->OCREAT)){
    my $ecode = $hdb->ecode();
    printf STDERR ("open error: %s\n", $hdb->errmsg($ecode));
}
$hdb->tune(128000000,,,$hdb->TLARGE);
$hdb->setcache(12000000);
$hdb->setxmsiz(750000000);


# Add the new values; remember which keys we've seen.
my $count=0;
while (<>) {
    chomp;
    my ($v, $k) = split(/\t/);
    if(!$hdb->put($k, $v)){
	my $ecode = $hdb->ecode();
	printf STDERR ("put error: %s\n", $hdb->errmsg($ecode));
    }
    $count++;
    print STDERR '.' if (! ($count % 100000));
    print STDERR " $count\n" if (! ($count % 5000000));
}

# close the database
if(!$hdb->close()){
    my $ecode = $hdb->ecode();
    printf STDERR ("close error: %s\n", $hdb->errmsg($ecode));
}
