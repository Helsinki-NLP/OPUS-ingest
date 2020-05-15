#!/usr/bin/env perl
#-*-perl-*-


use utf8;
use strict;

use DB_File;
# use DBM_Filter;

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

tie %SrcLangDB, "DB_File", $SrcDbFile;
tie %TrgLangDB, "DB_File", $TrgDbFile;

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
    if (exists $SrcLangDB{$trg}){
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

