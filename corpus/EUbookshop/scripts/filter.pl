#!/usr/bin/env perl

#
# a simple script that filters out sentences that do not match the given
# language of the document (if there is a 'lang' attribute in sentence tags)
# (this also removes the surrounding tags if no sentence matches)
#

use strict;
use XML::Parser;
use XML::Writer;
use Getopt::Std;

our $opt_l;
getopts('l:');

# binmode(STDIN,":encoding(UTF-8)");
binmode(STDIN);
binmode(STDOUT,":encoding(UTF-8)");

my $DocLang = $opt_l || 'en';

my $parser = new XML::Parser(Handlers => {Start => \&handle_start,
					  End   => \&handle_end,
					  Char  => \&handle_char});

my $XMLHandler = $parser->parse_start();
my $XMLWriter  = XML::Writer->new(OUTPUT => *STDOUT, 
				  DATA_MODE => 1,
				  DATA_INDENT => 1);
$XMLWriter->xmlDecl("UTF-8");


while (<>){
    eval { $XMLHandler->parse_more($_); };
    if ($@){
	# die $@;
	warn $@;
	print STDERR $_;
    }
}
print STDOUT "\n";



sub handle_start{
    my ($p,$e,%attr) = @_;

#    if ($e=~/(html|head|body|text)/){
    if ($e=~/(html|body|text)/){
	$XMLWriter->startTag($e,%attr);
    }
    else{
	push(@{$p->{OPENTAG}},$e);
	my $idx = $#{$p->{OPENTAG}};
	%{$p->{TAGATTR}->[$idx]} = %attr;
	if ($e eq 's'){
	    push(@{$p->{SENT}},'');
	    if (exists $attr{lang}){
		if ($attr{lang} ne $DocLang){
		    pop(@{$p->{OPENTAG}});
		    pop(@{$p->{TAGATTR}});
		    pop(@{$p->{SENT}});
		}
	    }
	}
    }
}

sub handle_end{
    my ($p,$e) = @_;
#    if ($e=~/(html|head|body|text)/){
    if ($e=~/(html|body|text)/){
	$XMLWriter->endTag($e);
    }
    elsif ($e ne 's'){
	$p->{SENT}=[] unless (ref($p->{SENT}) eq 'ARRAY');
	if (@{$p->{SENT}}){
	    foreach (0..$#{$p->{OPENTAG}}){
		$XMLWriter->startTag($p->{OPENTAG}->[$_],
				     %{$p->{TAGATTR}->[$_]});
		if ($p->{OPENTAG}->[$_] eq 's'){
		    my $sent = shift(@{$p->{SENT}});
		    $sent=~s/\s*$//s;
		    $XMLWriter->characters($sent);
		    $XMLWriter->endTag($p->{OPENTAG}->[$_])
		}
	    }
	    while (my $t = pop(@{$p->{OPENTAG}})){
		$XMLWriter->endTag($t) unless ($t eq 's');
	    }
	}
	$p->{OPENTAG}=[];
	$p->{TAGATTR}=[];
	$p->{SENT}=[];
    }
}

sub handle_char{
    my ($p,$str) = @_;
    if ($p->{OPENTAG}->[-1] eq 's'){
	$p->{SENT}->[-1] .= $str;
    }
}
