#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use open qw(:std :utf8);
use HTML::Entities;

# binmode(STDIN);
# binmode(STDOUT);

print '<?xml version="1.0" encoding="UTF-8"?>',"\n";
print '<text>',"\n";

my $id = 0;
while (<>){
    chomp;
    my ($key, $langid, $source, $url) = split(/\t/);
    $id++;
    decode_entities($key);
    encode_entities($key,'<>&');
    encode_entities($source,'<>&"');
    encode_entities($url,'<>&"');
#    $key=~s/^\s*//;
#    $key=~s/\s*$//;
#    print "<s id=\"$id\">$key</s>\n";
    print "<s id=\"$id\" langidscore=\"$langid\" source=\"$source\" url=\"$url\">$key</s>\n";
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

print '</text>',"\n";


