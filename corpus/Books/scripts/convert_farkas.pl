#!/usr/bin/perl
#
# USAGE: extract.pl BOOKNAME LANGUAGES < input.html
#
# for example:
#
#   convert_farkas.pl Doyle_Arthur_Conan-Adventures_of_Sherlock_Holmes en-hu-es < in.html
#
# INFO: this makes strong assumptions about the input file
#       XML::Parser didn't work for our purposes because 
#       the input HTML is not valid XML (see extract-xmlparser.pl)

use strict;
use IO::File;
use File::Basename qw/dirname basename/;
use Locale::Language;
use XML::Writer;
use LetsMT::DataProcessing::Splitter;
use LetsMT::Align;


# length-based sentence aligner
my $aligner = new LetsMT::Align (method => 'gale');

# hash of language-specific sentence splitters
my %splitter = ();

foreach my $file (@ARGV){
    my $book = basename($file);
    $book=~s/\.html//;
    my @langs=();
    while ($book=~s/\-(..)$//){
	unshift(@langs,$1);
    }
    unless (@langs){
	warn "no languages for book $file!";
	next;
    }
    convert($file,$book,@langs);
}


sub convert{
    my $infile = shift;
    my $book = shift;
    my @langs = @_;

    open F,"<$infile" || die "cannot read from $infile";

    my $XmlParser;
    my $XmlHandler;

    binmode(F, ":utf8");

    my $FirstTr = 1;

    my %CorpusWriter = ();
    foreach (@langs){
	my $file = 'raw/'.$_.'/'.$book.'.xml.gz';
	my $dir = dirname($file);
	system("mkdir -p $dir") unless (-d $dir);
	
	my $output = IO::File->new("| gzip -c > $file");
	binmode($output,":encoding(utf-8)");
	$CorpusWriter{$_} = XML::Writer->new( OUTPUT => $output,
					      DATA_MODE => 1,
					      DATA_INDENT => 1 );
	$CorpusWriter{$_}->xmlDecl("UTF-8");
	$CorpusWriter{$_}->startTag("text");
    }

    my @sortlangs = sort @langs;
    my %AH = ();
    foreach my $x (0..$#sortlangs){
	foreach my $y ($x+1..$#sortlangs){
	    my $langpair = $sortlangs[$x].'-'.$sortlangs[$y];
	    my $file = 'raw/'.$langpair.'/'.$book.'.xml.gz';
	    my $srcfile = $sortlangs[$x].'/'.$book.'.xml.gz';
	    my $trgfile = $sortlangs[$y].'/'.$book.'.xml.gz';
	    
	    my $dir = dirname($file);
	    system("mkdir -p $dir") unless (-d $dir);
	    my $fh = IO::File->new("| gzip -c > $file");
	    binmode($AH{$langpair},":encoding(utf-8)");
	    print $fh '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
	    print $fh  "<linkGrp targType=\"s\" fromDoc=\"$srcfile\" toDoc=\"$trgfile\" >\n";
	    $AH{$langpair} = $fh;
	}
    }

    my $meta = '';
    while (<F>){
	last if (/<div.*center/);
    }
    while (<F>){
	last if (/<table/);
	if (/<p/){
	    s/\<.*?\>//gs;
	    s/\s\s+/ /gs;
	    $meta.=$_."\n";
	}
    }
    chomp($meta);

    foreach (keys %CorpusWriter){
	$CorpusWriter{$_}->startTag('head');
	$CorpusWriter{$_}->startTag('meta');
	$CorpusWriter{$_}->characters($meta);
	$CorpusWriter{$_}->endTag('meta');
	$CorpusWriter{$_}->endTag('head');
	$CorpusWriter{$_}->startTag('body');
    }

    my %sent=();
    my $lang='';
    my $id=0;

    while (<F>){

	if (/\<tr\>/){
	    if ($FirstTr){
		$FirstTr=0;
		next;
	    }
	    s/^\s*//;
	    s/\s*$//;
	    my @s = split(/\<\/td\>/);
	    pop(@s);
	    foreach (@s){
		if (/class\=\"col([0-9]+)\"/){
		    my $i = $1-1;
		    my $l = $langs[$i];
		    s/\<.*?\>//gs;
		    s/&gt;/\>/gs;
		    s/&lt;/\</gs;
		    s/&amp;/\&/gs;
		    s/\s\s+/ /gs;
		    $sent{$l}=$_;
		}
	    }
	    if (keys %sent){
		$id++;
		save_sentences(\%sent,$id,\%CorpusWriter,\%AH);
		%sent=();
	    }
	}
    }
    


    foreach (keys %CorpusWriter){
	$CorpusWriter{$_}->endTag('body');
	$CorpusWriter{$_}->endTag('text');
	$CorpusWriter{$_}->end();
    }

    foreach (keys %AH){
	my $fh = $AH{$_};
	print $fh "  </linkGrp>\n</cesAlign>\n";
	close $fh;
    }

    close F;
}


sub save_sentences{
    my $sent = shift;
    my $id = shift;
    my $writer = shift;
    my $handles = shift;

    my %sentLen=();
    my %sentIDs=();

    foreach my $l (keys %{$sent}){
	unless (exists $splitter{$l}){
	    $splitter{$l} = 
		new LetsMT::DataProcessing::Splitter( method => 'europarl',
						      lang => $l );
	}
	my @sentences = $splitter{$l}->split( $$sent{$l} );
	next unless @sentences;
	if ( $#sentences ){
	    $$writer{$l}->startTag('p','id' => "p$id");
	}

	# save cumulative sentence lengths (start with length 0)
	# ---> one more length item compared to sentence IDs!
	@{$sentLen{$l}} = (0);
	foreach my $s (0..$#sentences){
	    my $sid="s$id";
	    $sid.='.'.$s if ( $#sentences );
	    $$writer{$l}->startTag('s','id'=>$sid);
	    $$writer{$l}->characters($sentences[$s]);
	    $$writer{$l}->endTag('s');
	    push(@{$sentIDs{$l}},$sid);
	    push(@{$sentLen{$l}},$sentLen{$l}[-1]+length($sentences[$s]));
	}

	if ( $#sentences ){
	    $$writer{$l}->endTag('p');
	}
    }

    foreach (keys %{$handles}){
	my $fh = $$handles{$_};
	my ($sl,$tl)=split(/\-/);
	my @links = 
	    $aligner->length_align(
		\@{$sentLen{$sl}},
		\@{$sentLen{$tl}},
		\@{$sentIDs{$sl}},
		\@{$sentIDs{$tl}});
	foreach my $l (0..$#links){
	    my $sid = exists $links[$l]{src} ? 
		join(' ',@{$links[$l]{src}}) : '';
	    my $tid = exists $links[$l]{trg} ?
		join(' ',@{$links[$l]{trg}}) : '';
	    my $lid = $id;
	    $lid .= '.'.$l if ($#links);
	    print $fh '<link xtargets="',
	    "$sid;$tid",
	    '" id="SL'.$lid.'"/>',"\n";
	}
    }
}

