#!/usr/bin/env perl

use strict;
use Lingua::Identify::Blacklists qw/:all/;
use XML::Parser;
use XML::Writer;
use Getopt::Std;

our $opt_l;
getopts('l:');

# binmode(STDIN);
binmode(STDIN,":encoding(UTF-8)");
binmode(STDOUT,":encoding(UTF-8)");

my $DocLang = $opt_l || 'en';


# correct some misspelled language codes

$DocLang = 'nl' if ($DocLang eq 'vl');  # Vlaams
$DocLang = 'fr' if ($DocLang eq 'fb');  # Belgian Franch
$DocLang = 'nb' if ($DocLang eq 'no');  # Norwegian
$DocLang = 'lb' if ($DocLang eq 'lx');  # Luxembourgish
$DocLang = 'el' if ($DocLang eq 'gr');  # Greek
$DocLang = 'hu' if ($DocLang eq 'ho');  # Hungarian

# some language I cannot handle anyway ...

if ($DocLang=~/^(gd|tc|sh)$/){
    while (<>){ print; }
    exit 1;
}



my $parser = new XML::Parser(Handlers => {Start => \&handle_start,
					  End   => \&handle_end,
					  Char  => \&handle_char});

my $XMLHandler = $parser->parse_start();
$$XMLHandler{LANGS} = {};


my $XMLWriter = XML::Writer->new(OUTPUT => *STDOUT, 
				 DATA_MODE => 1,
				 DATA_INDENT => 1);
$XMLWriter->xmlDecl("UTF-8");


while (<>){
    eval { $XMLHandler->parse_more($_); };
    if ($@){
	warn $@;
	print STDERR $_;
    }
}



print STDERR "\n\ndetected languages:\n";
foreach my $l (keys %{$$XMLHandler{LANGS}}){
    print STDERR "$l: $$XMLHandler{LANGS}{$l}\n";
}


sub handle_start{
    my ($p,$e,%attr) = @_;
    if ($e eq 's'){
	$p->{SENT} = \%attr;
    }
    else{
	$XMLWriter->startTag($e,%attr);
    }
}

sub handle_end{
    my ($p,$e) = @_;
    if ($e eq 's'){
	unless ( length( $p->{STRING} ) < 10  ){
	    my $lang = identify( $p->{STRING} );
	    unless ($lang=~/^un(known)?/){
		$p->{LANGS}->{$lang}++;
	    }
#	    if ($lang eq $DocLang){
		$p->{STRING}=~s/\s+/ /gs;
		$p->{STRING}=~s/^\s+//gs;
		$XMLWriter->startTag('s',%{$p->{SENT}},'lang' => $lang);
		$XMLWriter->characters($p->{STRING});
		$XMLWriter->endTag('s');
#	    }
	}
	$p->{STRING}='';
    }
    else {
	$XMLWriter->endTag($e);
    }
}

sub handle_char{
    my ($p,$str) = @_;
    $p->{STRING} .= $str;
}
