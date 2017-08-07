#!/usr/bin/env perl

use strict;
use Locale::Language;
use XML::Writer;
use IO::File;


my $SentFile = shift(@ARGV) || 'sentences.csv';
my $LinkFile = shift(@ARGV) || 'links.csv';
my $TagFile  = shift(@ARGV) || 'tags.csv';

my $CorpusBasename = mtime2date($SentFile);
my $LinkBasename   = mtime2date($LinkFile);

print STDERR "read all links ...\n";
my $links = read_links($LinkFile);
print STDERR "read all tags ...\n";
my $tags = read_tags($TagFile);

my %XMLFiles = ();
my %SentLang = ();
my %Id2Sent  = ();
my %SentSplitter = ();

# some non-standard language IDs and their 2-code variant

my %OtherLangIds = ( ces => 'cs',
		     cym => 'cy',
		     ell => 'el',
		     eus => 'eu',
		     deu => 'de',
		     fra => 'fr',
		     hye => 'hy',
		     isl => 'is',
		     kat => 'ka',
		     lvs => 'lv',
		     mri => 'mi',
		     nld => 'nl',
		     ron => 'ro',
		     slk => 'sl',
		     sqi => 'sq' );

# ignore the following language IDs

my %IgnoreIds = ( unknown => 1 );


# run through the list of sentences and 
# print them to language-specific files
# (save sentence IDs and langIDs for later)

open F,"<$SentFile" || die "cannot open link file $SentFile\n";
binmode(F,":encoding(utf8)");
print STDERR "read all sentences ...\n";

my $count=0;
while (<F>){
    chomp;
    my ($id,$lang,$sent) = split(/\t/);
    my $langID = convert_lang_id($lang);
    unless (exists $IgnoreIds{$langID}){
	$count++;
	print STDERR '.' unless ($count % 10000);
 	print STDERR "$count\n" unless ($count % 500000);
	my $tag = $id && exists($$tags{$id}) ? join(' ',@{$$tags{$id}}) : '';
	$Id2Sent{$id} = print_sentence($langID,$id,$sent,$tag);
	$SentLang{$id} = $langID;
    }
}
close F;

foreach my $id (keys %XMLFiles){
    $XMLFiles{$id}->endTag('text');
    $XMLFiles{$id}->end();
}


# run through all links and print alignment files

my %XcesFiles = ();
my %LinkCount = ();
print STDERR "print all links ...\n";

$count=0;
foreach my $s (sort {$a <=> $b} keys %{$links}){
    foreach my $t (sort {$a <=> $b} keys %{$$links{$s}}){
	next if ($s == $t);
	next unless ($$links{$s}{$t});
	my $srcLang = $SentLang{$s};
	my $trgLang = $SentLang{$t};
	next unless ($srcLang);
	next unless ($trgLang);
	my @langs = sort($srcLang,$trgLang);
	my $langPair = join('-',sort(@langs));
	unless (exists $XcesFiles{$langPair}){
#	    mkdir $langPair unless (-d $langPair);
#	    open $XcesFiles{$langPair},"| gzip -c > $langPair/$LinkBasename.xml.gz";
	    open $XcesFiles{$langPair},"| gzip -c > $langPair.xml.gz";
	    my $fh = $XcesFiles{$langPair};
	    print $fh '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
	    print $fh  "<linkGrp targType=\"s\" fromDoc=\"$langs[0]/tatoeba.xml.gz\" toDoc=\"$langs[1]/tatoeba.xml.gz\" >\n";
#	    print $fh  "<linkGrp targType=\"s\" fromDoc=\"$langs[0]/$CorpusBasename.xml.gz\" toDoc=\"$langs[1]/$CorpusBasename.xml.gz\" >\n";
	}

	my $fh = $XcesFiles{$langPair};
	$LinkCount{$langPair}++;
	my $sid = exists $Id2Sent{$s} ? $Id2Sent{$s} : 's'.$s;
	my $tid = exists $Id2Sent{$t} ? $Id2Sent{$t} : 's'.$t;
	print $fh '<link xtargets="';
	print $fh $langs[0] eq $srcLang ? "$sid;$tid" : "$tid;$sid";
	# print $fh $langs[0] eq $srcLang ? "s$s;s$t" : "s$t;s$s";
	print $fh '" id="SL'.$LinkCount{$langPair}.'"/>',"\n";

	# avoid adding the link twice!
	$$links{$t}{$s} = 0;

	$count++;
	print STDERR '.' unless ($count % 10000);
 	print STDERR "$count\n" unless ($count % 500000);
    }
}



foreach (keys %XcesFiles){
    my $fh = $XcesFiles{$_};
    print $fh "  </linkGrp>\n</cesAlign>\n";
    close $fh;
}



sub mtime2date{
    my $file = shift;
    my $mtime = (stat($file))[9];
    my @time  = localtime($mtime);
    my $year  = $time[5]+1900;
    my $month = sprintf("%02d",$time[4]+1);
    my $day   = sprintf("%02d",$time[3]);
    return "$year-$month-$day";
}

sub convert_lang_id{
    my $lang = shift;
    $lang=~s/[^a-z]//gs;
    my $langID = language_code2code($lang,'alpha-3','alpha-2') || $lang;
    $langID = 'unknown' unless ($langID);
    return $OtherLangIds{$langID} if (exists $OtherLangIds{$langID});
    return $langID;
}


# TODO: here we could also add a sentence splitter!

use LetsMT::DataProcessing::Splitter;

sub print_sentence{
    my ($langID,$sentID,$sent,$tag) = @_;

    unless (exists $XMLFiles{$langID}){
	mkdir $langID unless (-d $langID);
	my $output = IO::File->new("| gzip -c > $langID/tatoeba.xml.gz");
#	my $output = IO::File->new("| gzip -c > $langID/$CorpusBasename.xml.gz");
	binmode($output,":encoding(utf-8)");
	$XMLFiles{$langID} = XML::Writer->new( OUTPUT => $output,
					       DATA_MODE => 1,
					       DATA_INDENT => 1 );
        $XMLFiles{$langID}->xmlDecl("UTF-8");
	$XMLFiles{$langID}->startTag("text");
    }

    unless (exists $SentSplitter{$langID}){
	$SentSplitter{$langID} = 
	    new LetsMT::DataProcessing::Splitter( method => 'europarl',
						  lang => $langID )
    }

    # some additional cleanup, see: http://stackoverflow.com/questions/1016910/how-can-i-strip-invalid-xml-characters-from-strings-in-perl
    $sent =~ tr/\x00-\x08\x0B\x0C\x0E-\x19//d;

    my @sentences = $SentSplitter{$langID}->split( $sent );
    if ( $#sentences ){
	$tag ?
	    $XMLFiles{$langID}->startTag('p','tag' => $tag,'id' => $sentID) :
	    $XMLFiles{$langID}->startTag('p','id' => $sentID);
    }

    my @ids = ();
    foreach my $s (0..$#sentences){
	$ids[$s] = $#sentences ? 's'.$sentID.'.'.$s : 's'.$sentID;
	( $tag && $#sentences == 0) ?
	    $XMLFiles{$langID}->startTag('s','tag'=>$tag,'id'=>$ids[$s]) :
	    $XMLFiles{$langID}->startTag('s','id'=>$ids[$s]);
	$XMLFiles{$langID}->characters($sentences[$s]);
	$XMLFiles{$langID}->endTag('s');
    }

    if ( $#sentences ){
	$XMLFiles{$langID}->endTag('p');
    }
    return join(' ',@ids);
}



sub read_links{
    my $LinkFile = shift;
    my $links = shift || {};
    open F,"<$LinkFile" || die "cannot open link file $LinkFile\n";
    while (<F>){
	chomp;
	my ($src,$trg) = split(/\t/);
	$$links{$src}{$trg} = 1;
    }
    close F;
    return $links;
}

sub read_tags{
    my $TagFile = shift;
    my $tags = shift || {};
    open F,"<$TagFile" || die "cannot open tag file $TagFile\n";
    binmode(F,":encoding(utf8)");
    while (<F>){
	chomp;
	my ($id,$tag) = split(/\t/);
	push(@{$$tags{$id}},$tag);
    }
    close F;
    return $tags;
}

