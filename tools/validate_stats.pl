#!/usr/bin/env perl

use strict;
use YAML qw(LoadFile);

my $stats = LoadFile($ARGV[0]);

check_bitexts_exist($stats);
check_bitexts_sizes($stats);

# check_download_sizes


sub check_bitexts_sizes{
    my $stats=shift;
    if (exists $$stats{bitexts}){
	foreach my $l (keys %{$$stats{bitexts}}){

	    ##----------------------------------
	    ## compare bitexts to Moses files
	    ##----------------------------------
	    
	    if (exists $$stats{moses}){
		if (exists $$stats{moses}{$l}){
		    # foreach my $f ('alignments','source language tokens','target language tokens'){
		    foreach my $f ('alignments'){
			if ($$stats{bitexts}{$l}{$f} < $$stats{moses}{$l}{$f} ){
			    print "WARNING - for '$l' moses file has more $f ($$stats{moses}{$l}{$f}) than the original bitext ($$stats{bitexts}{$l}{$f})\n";
			}
			if ($$stats{bitexts}{$l}{$f} > 0){
			    if ($$stats{moses}{$l}{$f}/$$stats{bitexts}{$l}{$f} < 0.9){
				print "WARNING - for '$l' moses file has less than 90% as many $f as the original bitext ($$stats{moses}{$l}{$f}/$$stats{bitexts}{$l}{$f})\n";
			    }
			}
		    }
		}
	    }

	    ##----------------------------------
	    ## compare bitexts to TMX files
	    ##----------------------------------
	    
	    if (exists $$stats{tmx}){
		if (exists $$stats{tmx}{$l}){
		    # foreach my $f ('alignments','source language tokens','target language tokens'){
		    foreach my $f ('alignments'){
			my $comp = $f eq 'alignments' ? 'translation units' : $f;

			if ($$stats{bitexts}{$l}{$f} < $$stats{tmx}{$l}{$comp} ){
			    print "WARNING - for '$l' tmx file has more $f ($$stats{tmx}{$l}{$comp}) than the original bitext ($$stats{bitexts}{$l}{$f})\n";
			}
			if ($$stats{bitexts}{$l}{$f} > 0){
			    if ($$stats{tmx}{$l}{$comp}/$$stats{bitexts}{$l}{$f} < 0.9){
				print "WARNING - for '$l' tmx file has less than 90% as many $f as the original bitext ($$stats{tmx}{$l}{$comp}/$$stats{bitexts}{$l}{$f})\n";
			    }
			}
		    }

		    ##----------------------------------
		    ## compare TMX files to Moses files
		    ##----------------------------------

		    foreach my $f ('alignments','source language tokens','target language tokens'){
			my $comp = $f eq 'alignments' ? 'translation units' : $f;

			if ($$stats{moses}{$l}{$f} < $$stats{tmx}{$l}{$comp} ){
			    print "WARNING - for '$l' tmx file has more $f ($$stats{tmx}{$l}{$comp}) than the moses file ($$stats{moses}{$l}{$f})\n";
			}
			if ($$stats{moses}{$l}{$f} > 0){
			    if ($$stats{tmx}{$l}{$comp}/$$stats{moses}{$l}{$f} < 0.9){
				print "WARNING - for '$l' tmx file has less than 90% as many $f as the moses file ($$stats{tmx}{$l}{$comp}/$$stats{moses}{$l}{$f})\n";
			    }
			}
		    }
		}
	    }
	}
    }
}


sub check_bitexts_exist{
    my $stats=shift;
    my @required = ('files','alignments','source language tokens','target language tokens');
    my @downloads = ('alignments','source language','target language',
		     'tokenized source language','tokenized target language');
    if (exists $$stats{bitexts}){
	foreach my $l (keys %{$$stats{bitexts}}){
	    foreach (@required){
		unless (exists $$stats{bitexts}{$l}{$_}){
		    print "ERROR - required field '$_' does not exist for '$l'!\n";
		}
	    }
	    if (exists $$stats{bitexts}{$l}{downloads}){
		foreach (@downloads){
		    unless (exists $$stats{bitexts}{$l}{downloads}{$_}){
			print "ERROR - no '$_' download for '$l'!\n";
		    }
		}
	    }
	    else{
		print "ERROR - no downloads for '$l'!\n";
	    }
	    if (exists $$stats{moses}){
		unless (exists $$stats{moses}{$l}){
		    print "WARNING - no moses file for '$l'!\n";
		}
	    }
	    if (exists $$stats{tmx}){
		unless (exists $$stats{tmx}{$l}){
		    print "WARNING - no TMX file for '$l'!\n";
		}
	    }
	}
    }
    else{
	print "ERROR - no bitexts listed!\n";
    }
}
