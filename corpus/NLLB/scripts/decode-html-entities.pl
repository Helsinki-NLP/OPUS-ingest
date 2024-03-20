#!/usr/bin/env perl
#-*-perl-*-

use strict;
use open qw(:std :utf8);

use HTML::Entities;

while (<>){
    if (/^( *\<s [^\>]*>)(.*)(\<\/s\> *$)/){
	my ($a,$b,$c) = ($1,$2,$3);
	decode_entities($b);
	encode_entities($b,'<>&');
	print "$a$b$c\n";
    }
    else{
	print;
    }
}
