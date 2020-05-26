#!/bin/env perl

binmode(STDIN,":utf8");
binmode(STDOUT,":utf8");

while (<STDIN>){
    chomp;
    s/^\s*//;
    my @tokens = split(/\s+/);
    my $sid = shift(@tokens);
    print '<s id="',$sid,'">',"\n";
    for $i (0..$#tokens){
	print '  <w id="',$sid,'.',$i+1,'">',$tokens[$i],'</w>',"\n";
    }
    print '</s>',"\n";
}
