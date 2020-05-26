#!/usr/bin/env perl
#-*-perl-*-


use utf8;
use strict;

# use BerkeleyDB;
# use DB_File;
# use DBM_Filter;
# use KyotoCabinet;
use TokyoCabinet;


use vars qw($opt_l $opt_s $opt_t $opt_S $opt_T);
use Getopt::Std;
getopts('l:s:t:S:T:');

my $SrcLang = $opt_s || "xx";
my $TrgLang = $opt_t || "yy";
($SrcLang,$TrgLang) = split(/\-/,$opt_l) if ($opt_l);

my $SrcOutFile = $opt_S || "corpus.$SrcLang";
my $TrgOutFile = $opt_T || "corpus.$TrgLang";

open S,">>$SrcOutFile" || die "cannot open SrcOutFile";
open T,">>$TrgOutFile" || die "cannot open TrgOutFile";

# binmode(STDIN,":encoding(utf-8)");
# binmode(STDOUT,":encoding(utf-8)");
# binmode(STDERR,":encoding(utf-8)");


my %SrcLangDB = ();
my %TrgLangDB = ();

my $SrcDbFile = "sent.".$SrcLang;
my $TrgDbFile = "sent.".$TrgLang;


# tie %SrcLangDB, 'BerkeleyDB::Hash', -Filename => $SrcDbFile, -Flags => DB_CREATE, -Cachesize => 64000000;
# tie %TrgLangDB, 'BerkeleyDB::Hash', -Filename => $TrgDbFile, -Flags => DB_CREATE, -Cachesize => 64000000;

# tie %SrcLangDB, "DB_File", $SrcDbFile;
# tie %TrgLangDB, "DB_File", $TrgDbFile;


my $sdb = tie(%SrcLangDB, "TokyoCabinet::HDB", $SrcDbFile, 
	      TokyoCabinet::HDB::OWRITER | TokyoCabinet::HDB::OCREAT,,,
	      TokyoCabinet::HDB::TLARGE) ||
    die "tie sdb error\n";
my $tdb = tie(%TrgLangDB, "TokyoCabinet::HDB", $TrgDbFile, 
	      TokyoCabinet::HDB::OWRITER | TokyoCabinet::HDB::OCREAT,,,
	      TokyoCabinet::HDB::TLARGE) ||
    die "tie tdb error\n";

$sdb->setcache(12000000);
$tdb->setcache(12000000);

$sdb->setxmsiz(750000000);
$tdb->setxmsiz(750000000);


my $SrcID = 0;
my $TrgID = 0;

$SrcID = $SrcLangDB{__lastkey__} if (exists($SrcLangDB{__lastkey__}));
$TrgID = $TrgLangDB{__lastkey__} if (exists($TrgLangDB{__lastkey__}));


while (<>){
    chomp;
    my ($score,$src,$trg) = split(/\t/);
    if (exists $SrcLangDB{$src}){
	$SrcID = $SrcLangDB{$src};
    }
    else{
	$SrcID++;
	$SrcLangDB{$src} = $SrcID;
	print S join("\t",$SrcID,$src),"\n";
    }
    if (exists $TrgLangDB{$trg}){
	$TrgID = $TrgLangDB{$trg};
    }
    else{
	$TrgID++;
	$TrgLangDB{$trg} = $TrgID;
	print T join("\t",$TrgID,$trg),"\n";
    }
    print join("\t",$SrcLangDB{$src},$TrgLangDB{$trg},$score),"\n";
}

$SrcLangDB{__lastkey__} = $SrcID;
$TrgLangDB{__lastkey__} = $TrgID;

