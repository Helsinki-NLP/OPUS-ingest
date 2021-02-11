#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use TokyoCabinet;
use XML::Writer;

use vars qw($opt_e $opt_f $opt_l $opt_s $opt_t $opt_S $opt_T);
use Getopt::Std;
getopts('e:f:l:s:t:S:T:');

my $SrcFile = $opt_e || "xx/corpus.xml.gz";
my $TrgFile = $opt_f || "yy/corpus.xml.gz";

my $SrcLang = $opt_s || "xx";
my $TrgLang = $opt_t || "yy";
($SrcLang,$TrgLang) = split(/\-/,$opt_l) if ($opt_l);

my $SrcDbFile = $opt_S || "corpus.$SrcLang";
my $TrgDbFile = $opt_T || "corpus.$TrgLang";

my $SrcDB = TokyoCabinet::HDB->new();
my $TrgDB = TokyoCabinet::HDB->new();

die $SrcDB->errmsg($SrcDB->ecode()) unless $SrcDB->open($SrcDbFile, $SrcDB->OREADER);
die $TrgDB->errmsg($TrgDB->ecode()) unless $TrgDB->open($TrgDbFile, $TrgDB->OREADER);

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

    my $sid = $SrcDB->get($src);
    my $tid = $TrgDB->get($trg);
    if ($sid && $tid){
	# print join("\t",$sid,$tid,$score),"\n";
	$id++;
	$XmlWriter->emptyTag('link',
			     'id' => 'L'.$id,
			     'xtargets' => "$sid;$tid", 
			     'score' => $score);
	print STDERR '.' if (! ($id % 20000));
	print STDERR " $id\n" if (! ($id % 1000000));
    }
}

$XmlWriter->endTag("linkGrp");
$XmlWriter->endTag("cesAlign");
