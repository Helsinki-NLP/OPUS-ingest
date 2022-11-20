#!/usr/bin/env perl

use strict;
use YAML qw(LoadFile);


my @required = ('website','license','source',
		'name','release','release date',
		'language pairs','languages');
my @recommended = ('copyright','reference','contact',
		   'number of languages','number of language pairs',
		   'alignments','sentences','tokens',
		   'moses alignments','translation units');
    

my $info = LoadFile($ARGV[0]);

foreach (@required){
    print "ERROR - required field '$_' does not exist!\n" unless (exists($$info{$_}));
}

foreach (@recommended){
    print "WARNING - recommended field '$_' does not exist!\n" unless (exists($$info{$_}));
}

    
