#!/usr/bin/env perl
#-*-perl-*-
#
# OPTIONS
#
#  -r ......... reverse model (swap source and target from TSV file)
#

use strict;

use XML::Writer;
use XML::Parser;

use vars qw($opt_r);
use Getopt::Std;
getopts('r');


binmode(STDIN,":utf8");
binmode(STDOUT,":utf8");
binmode(STDERR,":utf8");

my $srcxml = shift(@ARGV);
my $trgxml = shift(@ARGV);


my @xmlsent = ();
my @srcsent = ();
my @trgsent = ();
read_xml($srcxml,\@srcsent);
read_xml($trgxml,\@trgsent);

my $XmlWriter = XML::Writer->new( DATA_MODE => 1,
				  DATA_INDENT => 1 );

$XmlWriter->xmlDecl("UTF-8");
$XmlWriter->doctype('cesAlign', "-//CES//DTD XML cesAlign//EN", "");
$XmlWriter->startTag('cesAlign','version' => '1.0');
$XmlWriter->startTag('linkGrp',
		     'targType' => 's',
		     'fromDoc'  => $srcxml,
		     'toDoc'    => $trgxml);


my $sid = 0;
my $tid = 0;
my $lid = 0;

while (<>){
    chomp;
    s/\<P\>//g;

    my ($src,$trg,$score) = split(/\t/);
    ($src, $trg) = ($trg, $src) if ($opt_r);

    $src=~s/\s//g;
    $trg=~s/\s//g;
    next unless ($src && $trg);

    my @sids = ();
    my @tids = ();

    $sid = find_sentences($src, \@srcsent, \@sids, $sid);
    $tid = find_sentences($trg, \@trgsent, \@tids, $tid);

    if (@sids || @tids){
	my $link = join(' ',@sids);
	$link .= ';';
	$link .= join(' ',@tids);

	$XmlWriter->emptyTag('link',
			     'id' => 'L'.$lid,
			     'xtargets' => $link, 
			     score => $score );
    }
}

$XmlWriter->endTag('linkGrp');
$XmlWriter->endTag('cesAlign');


sub find_sentences{
    my $str   = shift;
    my $sent  = shift;
    my $ids   = shift;
    my $start = shift;

    my $id = $start;
    while ($str=~/\S/){
	while ($id<$#{$sent}){
	    last if $$sent[$id];
	    $id++;
	}
	my $idx = index($str,$$sent[$id]);
	if ($idx >= 0){
	    push(@{$ids},$id);
	    substr($str, $idx, length($$sent[$id])) = '';
	    $id++;
	}
	else{
	    $id++;
	}
	if ($str=~/\S/ && $id > $#{$sent}){
	    print STDERR "could not find sentences for $str\n";
	    $id = $start;
	    last;
	}
    }
    return $id;
}



sub read_xml{
    my ($file,$sent) = @_;
    my $XmlParser = new XML::Parser(Handlers => {Start => \&XmlTagStart,
						 End => \&XmlTagEnd,
						 Char => \&XmlChar});

    my $XmlHandler = $XmlParser->parse_start;
    @xmlsent = ();

    open F,"gzip -cd < $file |" || die "cannot read from $file";
    binmode F;

    while (<F>){
	eval { $XmlHandler->parse_more($_); };
	if ($@){
	    print STDERR $_;
	    die $@;
	}
    }

    @{$sent} = @xmlsent;
}


sub XmlTagStart{
    my ($p,$e,%a)=@_;
    if ($e eq 's'){
	$p->{__ID__} = $a{id};
    }
}

sub XmlTagEnd{
    my ($p,$e)=@_;
    if ($e eq 's'){
	$xmlsent[$p->{__ID__}] =~ s/\s*//sg;
	delete $p->{__ID__};
    }
}

sub XmlChar{
    my ($p,$c)=@_;
    if (exists $p->{__ID__}){
	$xmlsent[$p->{__ID__}] .= $c;
    }
}
