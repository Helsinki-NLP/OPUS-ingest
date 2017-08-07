#!/usr/bin/perl                                                                 
#-*-perl-*-                                                                     


use strict;
use XML::Parser;
use File::Basename qw/dirname basename/;
use IO::File;
use Locale::Language;
use XML::Writer;
use LetsMT::DataProcessing::Splitter;
use LetsMT::Align;
use HTML::Entities;


binmode(STDOUT,":utf8");

my $AlgParser = new XML::Parser(Handlers => {Start => \&alg_start,
					     End   => \&alg_end});

my $AlgPH = $AlgParser->parse_start();


our ($SrcDoc,$TrgDoc) = (undef,undef);
our (%SrcCelex,%TrgCelex) = ((),());
our ($SrcLang,$TrgLang) = ('src','trg');

our (%SrcSentLengths,%SrcSentIDs) = ((),());
our (%TrgSentLengths,%TrgSentIDs) = ((),());

our $CorpusWriter = undef;

# length-based sentence aligner
our $aligner = new LetsMT::Align (method => 'gale');


print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
while (<>){
    $AlgPH->parse_more($_);
}
$AlgPH->parse_done();
print "</cesAlign>\n";




sub alg_end{
    my ($p,$e) = @_;
    if ($e eq 'linkGrp'){
	print "  </linkGrp>\n";
    }
}



sub alg_start{
    my ($parser,$e,%attr) = @_;
    if ($e eq 'linkGrp'){
	if (exists $attr{xtargets}){

	    ($SrcDoc,$TrgDoc) = split(/\;/,$attr{xtargets});
	    $SrcDoc = basename($SrcDoc);
	    $TrgDoc = basename($TrgDoc);

	    $SrcDoc = $SrcCelex{$SrcDoc};
	    $TrgDoc = $TrgCelex{$TrgDoc};

	    $SrcDoc = $SrcLang.'/'.$SrcDoc;
	    $TrgDoc = $TrgLang.'/'.$TrgDoc;

	    return 0 unless ( (-e $SrcDoc) && (-e $TrgDoc) );

	    (%SrcSentLengths,%SrcSentIDs) = ((),());
	    (%TrgSentLengths,%TrgSentIDs) = ((),());

	    &read_doc($SrcDoc,\%SrcSentLengths,\%SrcSentIDs,$SrcLang);
	    &read_doc($TrgDoc,\%TrgSentLengths,\%TrgSentIDs,$TrgLang);

	    print "<linkGrp targType=\"s\" fromDoc=\"$SrcDoc.gz\" toDoc=\"$TrgDoc.gz\" >\n";
	}
    }
    elsif ($e eq 'link'){
	if (exists $attr{xtargets}){
	    $attr{xtargets}=~s/^\s+//;
	    $attr{xtargets}=~s/\s+$//;
	    my ($SrcP,$TrgP) = split(/\;/,$attr{xtargets});

	    my @SrcPars = split(/\s+/,$SrcP);
	    my @TrgPars = split(/\s+/,$TrgP);

	    my @SrcLengths = (0);
	    my @TrgLengths = (0);
	    my @SrcIds = ();
	    my @TrgIds = ();

	    foreach my $p (@SrcPars){
		next unless (exists $SrcSentLengths{$p});
		foreach (@{$SrcSentLengths{$p}}){
		    push (@SrcLengths,$SrcLengths[-1]+$_);
		}
		push (@SrcIds,@{$SrcSentIDs{$p}});
	    }
	    foreach my $p (@TrgPars){
		next unless (exists $TrgSentLengths{$p});
		foreach (@{$TrgSentLengths{$p}}){
		    push (@TrgLengths,$TrgLengths[-1]+$_);
		}
		push (@TrgIds,@{$TrgSentIDs{$p}});
	    }

	    $$parser{LINKCOUNT}++;
	    my @links=();
	    if ($#SrcIds && $#TrgIds){
		@links = 
		    $aligner->length_align(\@SrcLengths,\@TrgLengths,
					   \@SrcIds,\@TrgIds);
	    }
	    else{
		@{$links[0]{src}} = @SrcIds;
		@{$links[0]{trg}} = @TrgIds;
	    }
	    foreach my $l (0..$#links){
		my $sid = exists $links[$l]{src} ? 
		    join(' ',@{$links[$l]{src}}) : '';
		my $tid = exists $links[$l]{trg} ?
		    join(' ',@{$links[$l]{trg}}) : '';
		my $lid = $$parser{LINKCOUNT};
		$lid .= '.'.$l if ($#links);
		print '<link xtargets="',
		"$sid;$tid",
		'" id="SL'.$lid.'"/>',"\n";
	    }
	}
    }
    elsif($e eq 'TEI.2'){
	if (exists $attr{select}){
	    ($SrcLang,$TrgLang) = split(/\s+/,$attr{select})
	}
	&read_celex_ids("$SrcLang/jrc-$SrcLang.xml",\%SrcCelex);
	&read_celex_ids("$TrgLang/jrc-$TrgLang.xml",\%TrgCelex);
    }
}



sub read_doc{
    my ($file,$lengths,$ids,$lang) = @_;

    my $NewFile = '../raw/'.$file.'.gz';
    my $NewDir = dirname($NewFile);
    system("mkdir -p $NewDir");

    if ($file=~/\.gz$/){
	open I,"gzip -cd < $file |" || die "cannot read from '$file'!\n";
    }
    else{
	open I,"<$file" || die "cannot read from '$file'!\n";
    }

    my $CorpusParser = new XML::Parser(Handlers => {Start => \&tag_start,
						    End   => \&tag_end,
						    Char  => \&xml_char});
    my $CorpusReader = $CorpusParser->parse_start();
    $$CorpusReader{SENT_LENGTHS} = $lengths;
    $$CorpusReader{SENT_IDS} = $ids;

    my $output = IO::File->new("| tidy -xml -utf8 -i -w 0 | gzip -c > $NewFile");
    binmode($output,":encoding(utf-8)");
    $CorpusWriter = XML::Writer->new( OUTPUT => $output );
#				      NEWLINES => 1 );
#				      DATA_MODE => 1,
#				      DATA_INDENT => 1 );
    $CorpusWriter->xmlDecl("UTF-8");


    while (<I>){
	$CorpusReader->parse_more($_);
    }
    $CorpusReader->parse_done();
    $CorpusWriter->end();

}



sub tag_start{
    my ($parser,$e,%attr) = @_;
    $CorpusWriter->startTag($e,%attr);
    if ($e eq 'p'){
	$$parser{OPENPAR} = $attr{n};
	$$parser{PARAGRAPH} = '';
    }
    elsif ($e eq 'TEI.2'){
	$$parser{LANG} = $attr{lang} if (exists $attr{lang});
	$$parser{SENT_SPLITTER} = 
	    new LetsMT::DataProcessing::Splitter( method => 'europarl',
						  lang => $$parser{LANG} );
    }
}

sub tag_end{
    my ($parser,$e) = @_;
    if ($e eq 'p'){
	my @sents = $parser->{SENT_SPLITTER}->split( $$parser{PARAGRAPH} );
	my $id = 0;
#	$CorpusWriter->characters("\n") if (@sents);

	@{$$parser{SENT_IDS}{$$parser{OPENPAR}}} = ();
	@{$$parser{SENT_LENGTHS}{$$parser{OPENPAR}}} = ();

	foreach (@sents){
	    my $sid = $$parser{OPENPAR};
	    $sid.='.'.$id if ($#sents);

	    push (@{$$parser{SENT_IDS}{$$parser{OPENPAR}}},$sid);
	    push (@{$$parser{SENT_LENGTHS}{$$parser{OPENPAR}}},length($_));
#		  $$parser{SENT_LENGTHS}{$$parser{OPENPAR}}[-1]+length($_));

	    $CorpusWriter->startTag('s', 'id' => $sid);
	    $CorpusWriter->characters($_);
	    $CorpusWriter->endTag('s');
	    $CorpusWriter->characters("\n");
	    $id++;
	}
	$$parser{PARAGRAPH} = '';
    }
    $CorpusWriter->endTag($e);
#    $CorpusWriter->characters("\n");
}

sub xml_char{
    my ($parser,$c) = @_;
    if ($$parser{OPENPAR}){
	my $nr=0;
	while ($c=~s/\%([^\%\s]{0,5})\%/\&$1\;/){
	    $nr++;
	}
	if ($nr){
	    $c=decode_entities($c);
	}
	$$parser{PARAGRAPH}.=$c;
#	$c=~s/\%quot\%/'/sg
#	$c=~s/\%amp\%/&/sg
#	$c=~s/\%gt\%/>/sg
#	$c=~s/\%lt\%/</sg
    }
    else{
	$CorpusWriter->characters($c);
    }
}





sub read_celex_ids{
    my $file = shift;
    my $ids = shift;
    open F,"$file" || die "cannot read from $file\n";
    while (<F>){
	if (/ENTITY\s+(jrc\S+)\s.*\s\"(\S+jrc\S+\.xml)\"/){
	    $$ids{$1} = $2;
	}
    }
    close F;
}


