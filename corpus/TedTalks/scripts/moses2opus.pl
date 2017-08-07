#!/usr/bin/env perl

use strict;
use Locale::Language;
use XML::Writer;
use IO::File;
use File::Basename;

my $srcfile  = shift(@ARGV);
my $trgfile  = shift(@ARGV);

my ($srcbase,$srclang,$trglang);

if ($srcfile=~/^(.*)\.([a-z]+).gz$/){
    $srcbase = $1;
    $srclang = $2;
}
elsif ($srcfile=~/^(.*)\.([a-z]+)$/){
    $srcbase = $1;
    $srclang = $2;
}
$trgfile=~/\.([a-z]+)(\.gz)?$/;
$trglang = $1;

my $basename = shift(@ARGV) || basename($srcbase);



($srcfile=~/\.gz$/) ?
    open S,"gzip -cd <$srcfile |" || die "cannot open $srcfile\n" :
    open S,"<$srcfile" || die "cannot open $srcfile\n";
($trgfile=~/\.gz$/) ?
    open T,"gzip -cd <$trgfile |" || die "cannot open $srcfile\n" :
    open T,"<$trgfile" || die "cannot open $srcfile\n";

binmode(S,":encoding(utf8)");
binmode(T,":encoding(utf8)");

my $SrcHandle = open_corpus($srclang,$basename);
my $TrgHandle = open_corpus($trglang,$basename);

my $AlgHandle = open_align_file($srclang,$trglang,$basename);

my %SentSplitter=();
my %SentIDs=();

print STDERR "read all sentence pairs ...\n";

my $count=0;
while (<S>){
    $count++;
    chomp;
    my $TrgSent = <T>;
    chomp($TrgSent);

    my @SrcIds = print_sentence($SrcHandle,$srclang,$_);
    my @TrgIds = print_sentence($TrgHandle,$trglang,$TrgSent);

    print $AlgHandle '<link xtargets="';
    print $AlgHandle join(' ',@SrcIds),';',join(' ',@TrgIds);
    print $AlgHandle '" id="SL'.$count.'"/>',"\n";
}
close S;
close T;

$SrcHandle->endTag('text');
$TrgHandle->endTag('text');

$SrcHandle->end;
$TrgHandle->end;

print $AlgHandle "  </linkGrp>\n</cesAlign>\n";
close $AlgHandle;







sub open_corpus{
    my ($lang,$filebase)=@_;
    mkdir $lang unless (-d $lang);
    my $output = IO::File->new("| gzip -c > $lang/$filebase.xml.gz");
    binmode($output,":encoding(utf-8)");
    my $handle = XML::Writer->new( OUTPUT => $output,
				   DATA_MODE => 1,
				   DATA_INDENT => 1 );
    $handle->xmlDecl("UTF-8");
    $handle->startTag("text");
    return $handle;
}

sub open_align_file{
    my ($srclang,$trglang,$filebase)=@_;
    my $langpair = $srclang.'-'.$trglang;
    mkdir $langpair unless (-d $langpair);

    my $handle;
#    open $handle,"| gzip -c > $langpair/$filebase.xml.gz";
    open $handle,"| gzip -c > $langpair.xml.gz";
    print $handle '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
    print $handle  "<linkGrp targType=\"s\" fromDoc=\"$srclang/$filebase.xml.gz\" toDoc=\"$trglang/$filebase.xml.gz\" >\n";
    return $handle;
}


sub convert_lang_id{
    my $lang = shift;
    $lang=~s/[^a-z]//gs;
    my $langID = language_code2code($lang,'alpha-3','alpha-2') || $lang;
    $langID = 'unknown' unless ($langID);
    return $langID;
}


# TODO: here we could also add a sentence splitter!

use LetsMT::DataProcessing::Splitter;

sub print_sentence{
    my ($handle,$lang,$sent) = @_;

    unless (exists $SentSplitter{$lang}){
	$SentSplitter{$lang} = 
	    new LetsMT::DataProcessing::Splitter( method => 'europarl',
						  lang => $lang )
    }

    # some additional cleanup, see: http://stackoverflow.com/questions/1016910/how-can-i-strip-invalid-xml-characters-from-strings-in-perl
    $sent =~ tr/\x00-\x08\x0B\x0C\x0E-\x19//d;

    $SentIDs{$lang}++;

    my @sentences = $SentSplitter{$lang}->split( $sent );
    if ( $#sentences ){
	$handle->startTag('p','id' => $SentIDs{$lang});
    }

    my @ids = ();
    foreach my $s (0..$#sentences){
	$ids[$s] = $#sentences ? 
	    's'.$SentIDs{$lang}.'.'.$s : 's'.$SentIDs{$lang};
	$handle->startTag('s','id'=>$ids[$s]);
	$handle->characters($sentences[$s]);
	$handle->endTag('s');
    }

    if ( $#sentences ){
	$handle->endTag('p');
    }
    return @ids;
}


