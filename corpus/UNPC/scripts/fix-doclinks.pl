#!/usr/bin/env perl
#-*-perl-*-
#
# fix some file names that have some extra '_'
#

use strict;

while (<>){
    if (/fromDoc="([^"]*)"/){
	my $file = $1;
	unless ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
	    if ($file=~s/\_.xml/.xml/){
		if ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
		    print STDERR "remove '_' from $file\n";
		    s/(fromDoc=")[^"]*"/$1$file"/;
		}
	    }
	    elsif ( $file=~s/\/\_/\//){
		if ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
		    print STDERR "remove '_' from path in $file\n";
		    s/(fromDoc=")[^"]*"/$1$file"/;
		}
	    }
	    else{
		print STDERR "cannot find $file\n";
	    }
	}
    }
    if (/toDoc="([^"]*)"/){
	my $file = $1;
	unless ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
	    if ($file=~s/\_.xml/.xml/){
		if ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
		    print STDERR "remove '_' from $file\n";
		    s/(toDoc=")[^"]*"/$1$file"/;
		}
	    }
	    elsif ( $file=~s/\/\_/\//){
		if ( -e "../raw/$file" || -e "raw/$file" || -e $file ){
		    print STDERR "remove '_' from path in $file\n";
		    s/(toDoc=")[^"]*"/$1$file"/;
		}
	    }
	    else{
		print STDERR "cannot find $file\n";
	    }
	}
    }
    print;
}
