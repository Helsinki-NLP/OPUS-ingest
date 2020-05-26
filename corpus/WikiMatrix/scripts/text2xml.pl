#!/usr/bin/env perl
#-*-perl-*-


use utf8;
use strict;

use XML::Writer;

my $XmlWriter = XML::Writer->new( DATA_MODE => 1,
				  DATA_INDENT => 1 );
$XmlWriter->xmlDecl("UTF-8");
$XmlWriter->startTag("text");

while (<>){
    chomp;
    my ($id,$sent) = split(/\t/);
    $XmlWriter->startTag("s", id => $id );
    $XmlWriter->characters($sent);
    $XmlWriter->endTag("s");
}

$XmlWriter->endTag("text");

