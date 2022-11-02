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
while (my $key = <>){
    chomp($key);
    $id++;
    decode_entities($key);
    encode_entities($key,'<>&');
#    $key=~s/\&nbsp;/ /g;
#    $key-~s/\&/\&amp;/g;
#    $key-~s/\>/\&gt;/g;
#    $key-~s/\</\&lt;/g;
    $key=~s/^\s*//;
    $key=~s/\s*$$//;
    print "<s id=\"$id\">$key</s>\n";
    print STDERR '.' if (! ($id % 50000));
    print STDERR " $id\n" if (! ($id % 2500000));
}

print '</text>',"\n";


