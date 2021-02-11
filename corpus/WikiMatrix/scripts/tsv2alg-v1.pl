#!/usr/bin/env perl
#-*-perl-*-

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

my $SrcDB = CDB_File->TIEHASH($SrcDbFile);
my $TrgDB = CDB_File->TIEHASH($TrgDbFile);

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
    if ($SrcDB->EXISTS($src)) {
	my $sid = $SrcDB->FETCH($src);
	if ($TrgDB->EXISTS($trg)) {
	    my $tid = $TrgDB->FETCH($trg);
	    # print join("\t",$sid,$tid,$score),"\n";
	    $id++;
	    $XmlWriter->emptyTag('link',
				 'id' => 'L'.$id,
				 'xtargets' => "$sid;$tid", 
				 'score' => $score);
	    print STDERR '.' if (! ($id % 50000));
	    print STDERR " $id\n" if (! ($id % 200000));
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
