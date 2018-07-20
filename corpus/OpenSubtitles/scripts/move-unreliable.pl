#!/usr/bin/perl

use Getopt::Std;
use File::Basename qw/dirname/;

use vars qw/$opt_t/;
getopts('t:');

my $threshold = $opt_t || 0.1;

my $skip = 'bs|sr|uk|lv';

foreach my $f (@ARGV){

    next if ($f=~/\/($skip)\//);

    my $ok = 1;
    open F,"gzip -cd < $f |" || die "cannot open $f";
    while (<F>){
	next unless (/<confidence>/);
	if (/<confidence>(.*)<\/confidence>/){
	    if ($1 < $threshold){
		$ok = 0;
		last;
	    }
	}
    }
    close F;
    next if ($ok);

    print STDERR "move unreliable: $f\n";

    my $dest = 'unreliable/'.$f;
    my $dir = dirname($dest);
    system("mkdir -p $dir");
    system("mv $f $dir");
    
    $f =~s/xml\//raw\//;
    $dest =~s/xml\//raw\//;
    $dir =~s/xml\//raw\//;

    system("mkdir -p $dir");
    system("mv $f $dir");
}
