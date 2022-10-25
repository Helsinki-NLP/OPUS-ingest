#!/usr/bin/env perl
#-*-perl-*-

use XML::Writer;

binmode(STDIN,":utf8");
binmode(STDOUT,":utf8");
binmode(STDERR,":utf8");

my $XmlWriter = XML::Writer->new( DATA_MODE => 1,
				  DATA_INDENT => 1 );


$XmlWriter->xmlDecl("UTF-8");
$XmlWriter->startTag("text");

my $pid = 0;
my $sid = 0;
my $OpenPar = 0;
while (<>){
    chomp;
    if (/\<P\>/){
	if ($OpenPar){
	    $XmlWriter->endTag('p');
	}
	$pid++;
	$XmlWriter->startTag('p', 'id' => $pid);
	$OpenPar = 1;
    }
    else{
	$sid++;
	$XmlWriter->startTag('s', 'id' => $sid);
	$XmlWriter->characters($_);
	$XmlWriter->endTag('s');
    }
}

if ($OpenPar){
    $XmlWriter->endTag('p');
}
$XmlWriter->endTag('text');
