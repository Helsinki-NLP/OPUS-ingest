#!/usr/bin/perl

use strict;

my $Pcount=1;
my $Scount=0;

binmode(STDIN, ":utf8");
binmode(STDOUT, ":utf8");

print '<?xml version="1.0" encoding="utf-8"?>
<document>
';

my $Sid=0;
my @openTags=();


while (<>){

    # s/\&/\&amp\;/g;

    ## delete empty tags
    s/\<\s*\>//g;


    if (/\<([^\/\s\>]*)[\s\>]/){
	my $tag = $1;
	if ($openTags[-1] eq $tag){
	    print "<\/$tag>\n";
	    pop(@openTags);
	}
	push (@openTags,$tag);
	if ($tag eq 'P'){
	    s/\<P\>/\<P id=\"$Pcount\"\>/;
	    $Pcount++;
	    $Scount=0;
	}
	elsif ($tag eq 'AUTHOR' || $tag eq 'TRANSLATOR'){
	    s/(\<AUTHOR[^\>]*)\>/$1\/\>/;
	    s/(\<TRANSLATOR[^\>]*)\>/$1\/\>/;
	    pop(@openTags);
	}
    }
    if (/\<\/([^\>]*)\>/){
	my $tag = $1;
	while (@openTags && ($openTags[-1] ne $tag)){
	    my $closetag = pop(@openTags);
	    print "<\/$closetag>\n";
	}
	if (@openTags && ($openTags[-1] eq $tag)){
	    pop(@openTags);
	}
	else{
	    ## re-open tags if necessary
	    print "<$tag>\n";
	}
    }

    unless (/^</){
	$Scount++;
	s/^/<s id="$Pcount.$Scount">/;
	s/$/<\/s>/;
    }
    print;
}

foreach (@openTags){
    print "<\/$_>\n";
}

print '</document>';
