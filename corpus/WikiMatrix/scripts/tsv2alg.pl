#!/usr/bin/env perl
#-*-perl-*-
#
# look for sentence IDs in cdb databases
# make it possible to search several partitions


use utf8;
use strict;
use CDB_File;
use XML::Writer;

use vars qw($opt_s $opt_t $opt_S $opt_T);
use Getopt::Std;
getopts('s:t:S:T:');

my $SrcDbFile = $opt_s || "corpus.xx";
my $TrgDbFile = $opt_t || "corpus.yy";

my $SrcFile = $opt_S || "xx/corpus.xml.gz";
my $TrgFile = $opt_T || "yy/corpus.xml.gz";

my @SrcDBs = ();
my @TrgDBs = ();

&open_cdbs(\@SrcDBs,$SrcDbFile);
&open_cdbs(\@TrgDBs,$TrgDbFile);

my $XmlWriter = XML::Writer->new( DATA_MODE => 1,
				  DATA_INDENT => 1 );

$XmlWriter->xmlDecl("UTF-8");
$XmlWriter->doctype('cesAlign', "-//CES//DTD XML cesAlign//EN", "");
$XmlWriter->startTag('cesAlign','version' => '1.0');
$XmlWriter->startTag('linkGrp',
		     'targType' => 's',
		     'fromDoc'  => $SrcFile,
		     'toDoc'    => $TrgFile);


my $id = 0;
while (<>){
    chomp;
    my ($score,$src,$trg) = split(/\t/);
    if (my $sid = get_id(\@SrcDBs,$src)){
	if (my $tid = get_id(\@TrgDBs,$trg)){
	    # print join("\t",$sid,$tid,$score),"\n";
	    $id++;
	    $XmlWriter->emptyTag('link',
				 'id' => 'L'.$id,
				 'xtargets' => "$sid;$tid", 
				 'score' => $score);
	    print STDERR '.' if (! ($id % 2500));
	    print STDERR " $id\n" if (! ($id % 100000));
	}
	else{
	    print STDERR "target sentence '$trg' does not exist!\n";
	}
    }
    else{
	print STDERR "source sentence '$src' does not exist!\n";
    }
}

$XmlWriter->endTag("linkGrp");
$XmlWriter->endTag("cesAlign");


sub open_cdbs{
    my ($dbs,$filebase) = @_;
    my $file = $filebase;
    my $idx = 0;
    while (-e $file){
	$$dbs[$idx] = CDB_File->TIEHASH($file);
	$idx++;
	$file=$filebase.$idx;
    }
}

sub get_id{
    foreach my $db (@{$_[0]}){
	return $db->FETCH($_[1]) if ($db->EXISTS($_[1]));
    }
    return undef;
}
