#!/usr/bin/env perl

use strict;
use Locale::Language;
use XML::Writer;
use IO::File;
use Lingua::Sentence;


my $SentFile    = shift(@ARGV) || 'sentences_detailed.csv.gz';
# my $SentFile    = shift(@ARGV) || 'sentences.csv.gz';
my $LinkFile    = shift(@ARGV) || 'links.csv.gz';
my $TagFile     = shift(@ARGV) || 'tags.csv.gz';
my $ListFile    = shift(@ARGV) || 'sentences_in_lists.csv.gz';
# my $RatingsFile = shift(@ARGV) || 'users_sentences.csv.gz';


my ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime();
my $today = sprintf("%04d-%02d-%02d", $year+1900, $mon+1, $mday);


print STDERR "read all links ...\n";
my $links = read_links($LinkFile);
print STDERR "read all tags ...\n";
my $tags = read_tags($TagFile);
print STDERR "read all lists ...\n";
my $lists = read_lists($ListFile);
# print STDERR "read all user ratings ...\n";
# my $ratings = read_ratings($RatingsFile);



my %XMLFiles = ();
my %SentLang = ();
my %Id2Sent  = ();
my %SentSplitter = ();

# some non-standard language IDs and their 2-code variant

my %OtherLangIds = ( ces => 'cs',
		     cycl => 'cycl',
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
		     mkd => 'mk',
		     nld => 'nl',
		     ron => 'ro',
		     slk => 'sl',
		     sqi => 'sq',
		     toki => 'toki');

# ignore the following language IDs

my %IgnoreIds = ( unknown => 1 );


# run through the list of sentences and 
# print them to language-specific files
# (save sentence IDs and langIDs for later)

if ($SentFile=~/\.gz$/){
    open F,"gzip -cd <$SentFile |" || die "cannot open link file $SentFile\n";
}
else{
    open F,"<$SentFile" || die "cannot open link file $SentFile\n";
}
binmode(F,":encoding(utf8)");
print STDERR "read all sentences ...\n";

my $count=0;
while (<F>){
    chomp;
    my ($id,$lang,$sent,$user,$created,$modified) = split(/\t/);
    my $langID = convert_lang_id($lang);
    unless (exists $IgnoreIds{$langID}){
	$count++;
	print STDERR '.' unless ($count % 10000);
 	print STDERR "$count\n" unless ($count % 500000);

	my %attr = ();
	if ($id){
	    if (exists($$tags{$id})){
		$attr{tags} = join(' ',@{$$tags{$id}});
	    }
	    if (exists($$lists{$id})){
		$attr{lists} = join(' ',@{$$lists{$id}});
	    }
	}
	$attr{user} = $user if ($user);
	$attr{created} = $created if ($created=~/[1-9]/);
	if (($modified ne $created) && ($modified=~/[1-9]/)){
	    $attr{modified} = $modified;
	}
	$Id2Sent{$id} = print_sentence($langID,$id,$sent,%attr);
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
	    mkdir $langPair unless (-d $langPair);
	    open $XcesFiles{$langPair},"| gzip -c > $langPair/$today.xml.gz";
	    # open $XcesFiles{$langPair},"| gzip -c > $langPair.xml.gz";
	    my $fh = $XcesFiles{$langPair};
	    print $fh '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
	    print $fh  "<linkGrp targType=\"s\" fromDoc=\"$langs[0]/tatoeba.xml.gz\" toDoc=\"$langs[1]/tatoeba.xml.gz\" >\n";
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



sub convert_lang_id{
    my $lang = shift;
    return $OtherLangIds{$lang} if (exists $OtherLangIds{$lang});

    $lang=~s/[^a-z]//gs;
    my $langID = language_code2code($lang,'alpha-3','alpha-2') || $lang;
    $langID = 'unknown' unless ($langID);
    return $OtherLangIds{$langID} if (exists $OtherLangIds{$langID});
    return $langID;
}



sub print_sentence{
    my ($langID,$sentID,$sent,%attr) = @_;

    unless (exists $XMLFiles{$langID}){
	mkdir $langID unless (-d $langID);
	my $output = IO::File->new("| gzip -c > $langID/$today.xml.gz");
	binmode($output,":encoding(utf-8)");
	$XMLFiles{$langID} = XML::Writer->new( OUTPUT => $output,
					       DATA_MODE => 1,
					       DATA_INDENT => 1 );
        $XMLFiles{$langID}->xmlDecl("UTF-8");
	$XMLFiles{$langID}->startTag("text");
    }

    unless (exists $SentSplitter{$langID}){
	my $isolang = $langID;
	$isolang =~s/[-_].+$//;
	$isolang = 'en' unless ($isolang =~ /^[a-z][a-z]$/i);
	$SentSplitter{$langID} = Lingua::Sentence->new($isolang);
    }

    # some additional cleanup, see: http://stackoverflow.com/questions/1016910/how-can-i-strip-invalid-xml-characters-from-strings-in-perl
    $sent =~ tr/\x00-\x08\x0B\x0C\x0E-\x19//d;

    my @sentences = $SentSplitter{$langID}->split_array( $sent );
    if ( $#sentences ){
	$attr{id} = 'p'.$sentID;
	$XMLFiles{$langID}->startTag('p',%attr);
    }

    my @ids = ();
    foreach my $s (0..$#sentences){
	$attr{id} = $#sentences ? $sentID.'.'.$s : $sentID;
	( $#sentences == 0) ?
	    $XMLFiles{$langID}->startTag('s',%attr) :
	    $XMLFiles{$langID}->startTag('s','id'=>$attr{id});
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
    if ($LinkFile=~/\.gz$/){
	open F,"gzip -cd <$LinkFile |" || die "cannot open link file $LinkFile\n";
    }
    else{
	open F,"<$LinkFile" || die "cannot open link file $LinkFile\n";
    }
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
    if ($TagFile=~/\.gz$/){
	open F,"gzip -cd <$TagFile |" || die "cannot open tag file $TagFile\n";
    }
    else{
	open F,"<$TagFile" || die "cannot open tag file $TagFile\n";
    }
    binmode(F,":encoding(utf8)");
    while (<F>){
	chomp;
	my ($id,$tag) = split(/\t/);
	push(@{$$tags{$id}},$tag);
    }
    close F;
    return $tags;
}


sub read_lists{
    my $file = shift;
    my $lists = shift || {};
    if ($file=~/\.gz$/){
	open F,"gzip -cd <$file |" || die "cannot open list file $file\n";
    }
    else{
	open F,"<$file" || die "cannot open tag file $file\n";
    }
    binmode(F,":encoding(utf8)");
    while (<F>){
	chomp;
	my ($listID,$id) = split(/\t/);
	push(@{$$lists{$id}},$listID);
    }
    close F;
    return $lists;
}

