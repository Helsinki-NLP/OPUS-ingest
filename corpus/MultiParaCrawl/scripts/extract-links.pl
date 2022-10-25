#!/usr/bin/env perl
#-*-perl-*-
#

use XML::Parser;
use vars qw($opt_l $opt_c);
use Getopt::Std;
getopts('l:c:');

my $langpair   = $opt_l || 'en-xx';
my $firstcol   = $opt_c || 'en';
my ($src,$trg) = split(/\-/,$langpair);

my $XMLParser = new XML::Parser(Handlers => {Start => \&XmlTagStart});
my $XMLHandler = $XMLParser->parse_start;
$XMLHandler->{REVERSE} = $firstcol eq $src ? 0 : 1;

while (<>){
    eval { $XMLHandler->parse_more($_); };
    if ($@){
	print STDERR $_;
	die $@;
    }
}
$XMLHandler->parse_done();


sub XmlTagStart{
    my ($p,$e,%a)=@_;
    if ($e eq 'link'){
	my ($s,$t) = split(/\;/, $a{xtargets});
	my $score = 0;
	my ($ScoreAttr) = grep(/(score|certainty|likelihood|prob)/,keys %a);
	if ($ScoreAttr){
	    if (defined $a{$ScoreAttr}){
		$score = $a{$ScoreAttr};
	    }
	}
	if ($p->{REVERSE}){
	    print "$score\t$t\t$s\n";
	}
	else{
	    print "$score\t$s\t$t\n";
	}
    }
}

