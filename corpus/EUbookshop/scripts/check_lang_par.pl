#!/usr/bin/env perl

use strict;
use Lingua::Identify::Blacklists qw/:all/;
use XML::Parser;
use XML::Writer;
use Getopt::Std;

our $opt_l;
getopts('l:');

my $DocLang = $opt_l || 'en';

my $parser = new XML::Parser(Handlers => {Start => \&handle_start,
					  End   => \&handle_end,
					  Char  => \&handle_char});

my $XMLHandler = $parser->parse_start();
$$XMLHandler{LANGS} = {};

# binmode(STDIN);
binmode(STDIN,":encoding(UTF-8)");
binmode(STDOUT,":encoding(UTF-8)");


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
	push(@{$p->{SENTS}},\%attr);
	$p->{SENT}='';
    }
    else{
	$XMLWriter->startTag($e,%attr);
    }
}

sub handle_end{
    my ($p,$e) = @_;
    if ($e eq 'p'){
	unless ( length( $p->{STRING} ) < 10  ){
	    my $lang = identify( $p->{STRING} );
	    unless ($lang=~/^un(known)?/){
		$p->{LANGS}->{$lang}++;
	    }
	    if ($lang eq $DocLang){
		foreach my $s (@{$p->{SENTS}}){
		    my $str = $s->{_CHAR_};
		    $str=~s/\s+/ /gs;
		    delete $s->{_CHAR_};
		    $XMLWriter->startTag('s',%{$s});
		    $XMLWriter->characters($str);
		    $XMLWriter->endTag('s');
		}
	    }
	}
	$p->{STRING}='';
	$p->{SENTS}=[];
    }
    if ($e eq 's'){
	$p->{SENTS}->[-1]->{_CHAR_}=$p->{SENT};
    } else {
	$XMLWriter->endTag($e);
    }
}

sub handle_char{
    my ($p,$str) = @_;
    $p->{STRING} .= $str;
    $p->{SENT} .= $str;
}
