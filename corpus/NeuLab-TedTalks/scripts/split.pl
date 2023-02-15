#!/usr/bin/env perl
#-*-perl-*-

use strict;

my $header = <>;
chomp($header);
# $header=~tr/\r//d;
my @field = split(/\t/,$header);

my %fh = ();
foreach (@field){
    open $fh{$_},">$_" || die "cannnot write to $_!\n";
}

while (<>){
    chomp;
#     tr/\r//d;
    my @a = split(/\t/);
    foreach (0..$#field){
	my $f = $fh{$field[$_]};
	print $f $a[$_],"\n";
    }
}


