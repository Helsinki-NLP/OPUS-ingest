#!/usr/bin/env perl
#-*-perl-*-


use utf8;
use strict;

use vars qw($opt_s $opt_t);
use Getopt::Std;
getopts('s:t:');

use XML::Writer;

my $SrcFile = $opt_s || "xx/corpus.xml.gz";
my $TrgFile = $opt_t || "yy/corpus.xml.gz";


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
    my ($sid,$tid,$score) = split(/\t/);
    $id++;
    $XmlWriter->emptyTag('link',
			 'id' => 'L'.$id,
			 'xtargets' => "$sid;$tid", 
			 'score' => $score);

}

$XmlWriter->endTag("linkGrp");
$XmlWriter->endTag("cesAlign");

