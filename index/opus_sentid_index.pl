#!/usr/bin/env perl

use strict;

use MCDB_File;
use XML::Parser;
use Archive::Zip::SimpleUnzip qw($SimpleUnzipError) ;

use vars qw($opt_c $opt_d $opt_l $opt_r);
use Getopt::Std;
getopts('c:d:l:r:');

my $database = $opt_d || die "need to specify a sent2id database file";
my $corpus = $opt_c   || die "need to specify a valid corpus name";
my $release = $opt_r  || die "need to specify a valid corpus release (version)";
my $language = $opt_l || die "need to specify a valid language ID";

my $storage_url_base = 'https://object.pouta.csc.fi/OPUS-';

my $file = shift(@ARGV);
my $sent2id = MCDB_File->TIEHASH($database) or die "cannot tie $database ($!)\n";
$sent2id->madvise(MCDB_File::MADV_RANDOM);

my $data_url  = $storage_url_base . $corpus . '/' . $release . '/raw/' . $language . '.zip';
my $data_file = $corpus . '_' . $release . '_raw_' . $language . '.zip';


if (not -e $data_file){
    print STDERR "Downloading $data_url\n";
    system("wget -qq -O $data_file $data_url");
}
    
my $lzip = new Archive::Zip::SimpleUnzip $data_file
    or die "Cannot open zip file: $SimpleUnzipError\n" ;
 

my $parser = new XML::Parser(Handlers => {Start => \&start_element,
					  End => \&end_element,
					  Default => \&char_data});


my ($count, $inSent, $sentStr, $sentID, $sentCount, $parCount, $parID, $document);

my %parBoundaryTags = ('p' => 1,
		       'h1' => 1,
		       'h2' => 1,
		       'h3' => 1,
		       'div' => 1);

while (my $member=$lzip->next){
    my $filename = $member->name();
    if ($filename=~/\.xml$/){

	$inSent    = 0;
        $sentStr   = '';
        $sentID    = '';
        $sentCount = 0;
        $parCount  = 0;
        $parID     = 0;

	my @path = split(/\//,$filename);
	splice(@path,0,2);
	$document  = join('/',@path);

	print STDERR "process $filename ($count sentences done)\n";

	my $fh = $member->open();
	$parser->parse($fh);	
        $count += $sentCount;
    }
}

print STDERR "A total of $count sentences found\n";





sub start_element{
    my ($p, $name, %attr) = @_;

    if ($name eq 's'){
        $inSent = 1;
        $sentCount++;
        $sentStr = '';
	if (exists $attr{'id'}){
            $sentID = $attr{'id'};
	}
	else{
            $sentID = $sentCount;
	}
        if (not $sentCount % 2000){
            print STDERR '.';
	    if (not $sentCount % 100000){
		print STDERR " $sentCount\n";
	    }
	}
    }
    elsif ($parBoundaryTags{lc($name)}){
	$parCount++;
        if (exists $attr{'id'}){
            $parID = $attr{'id'};
	}
        else{
            $parID = $parCount;
	}
    }

}


sub end_element{
    my ($p, $name) = @_;

    if ($name eq 's'){
	$sentStr=~s/^\s*//;
	$sentStr=~s/\s*$//;

	if ($sent2id->EXISTS($sentStr)) {
	    my $id = $sent2id->FETCH($sentStr);
	    print join("\t",($id,$corpus,$document,$parID,$sentID,length($sentStr))),"\n";
	}
	else{
	    print STDERR "cannot find sentence '$sentStr'\n";
	}

        $sentStr = '';
        $inSent = 0;
    }
    elsif ($parBoundaryTags{lc($name)}){
	$parID = 0;
    }

}


sub char_data{
    my ($p, $data) = @_;
    if ($inSent){
        $sentStr .= $data;
    }
}

