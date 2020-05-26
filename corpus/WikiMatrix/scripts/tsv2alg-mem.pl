#!/usr/bin/env perl
#-*-perl-*-
#
# no key-value storage but just in-memory hash tables ...


use utf8;
use strict;
use XML::Writer;

use vars qw($opt_s $opt_t $opt_S $opt_T);
use Getopt::Std;
getopts('s:t:S:T:');

my $SrcSentFile = $opt_s || "corpus.xx";
my $TrgSentFile = $opt_t || "corpus.yy";

my $SrcFile = $opt_S || "xx/corpus.xml.gz";
my $TrgFile = $opt_T || "yy/corpus.xml.gz";

my %SrcSents = ();
my %TrgSents = ();

read_sent(\%SrcSents,$SrcSentFile);
read_sent(\%TrgSents,$TrgSentFile);


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
    if (exists $SrcSents{$src}){
	if (exists $TrgSents{$trg}){
	    $id++;
	    $XmlWriter->emptyTag('link',
				 'id' => 'L'.$id,
				 'xtargets' => $SrcSents{$src}.";".$TrgSents{$trg},
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


sub read_sent{
    my ($hash,$file) = @_;
    open F,"<$file" || die "cannot read from $file";
    print STDERR "read sentences from $file ...\n";
    while (<F>){
	chomp;
	my ($id,$sent) = split(/\t/);
	$$hash{$sent} = $id;
    }
}
