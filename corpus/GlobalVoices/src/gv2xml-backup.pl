#!/usr/bin/perl

use strict;


my $firstChapter=1;
my $firstSpeaker=1;
my $openP=0;
my $openSpeaker=0;
my $openChapter=0;
my $openHeadline=0;

my $Pcount=0;
my $Scount=0;
my $Wcount=0;

binmode(STDIN, ":utf8");
binmode(STDOUT, ":utf8");

print '<?xml version="1.0" encoding="utf-8"?>
<document>
';

my $Sid=0;

while (<>){

    s/\&/\&amp\;/g;

    ## delete BRK tag
    s/\<BRK\>//g;

    ## delete empty tags
    s/\<\s*\>//g;

    ## fix wrong name attributes
    # s/(<AUTHOR.*NAME=\")[^\"]+\"[^=>]+\"([\s>])/${1}unknown\"$2/;

    ## delete AUTHOR tags that do not start at beginning of line
    ## fix error in txt/en/ep-97-10-23.txt (NAME="....text...")
    # s/^(.+)<AUTHOR[^>]*>/$1/gs;

    ## remove existing end-tags
    s/<\/(P|CHAPTER)[^\>]*\>//g;

    ## remove empty AUTHOR/CHAPTER/P tags
    s/<(P|CHAPTER)[^\>]*\/\>//g;

    ## allowes tags: P,AUTHOR,CHAPTER,s
    ## add newlines around them ....
    s/<(\/?)(CHAPTER|P|s)([^>]*>)/\n<$1$2$3\n/gs;
    s/<(\/?)(CHAPTER|P|s)([^>]*>)/\n<$1$2$3\n/gs;
    s/\n\n+/\n/gs;

    my @lines=split(/\n/);
    foreach my $l (0..$#lines){
	if ($lines[$l]!~/^<.+>$/){
	    $lines[$l]=~s/</&lt;/g;
	    $lines[$l]=~s/>/&gt;/g;
	}
    }
    $_=join("\n",@lines);


    ###################

    if (/\</ && $_!~/\<\/?s/){
	if ($openP){
	    s/\</\<\/P\>\</;
	    $openP=0;
	}
    }

    if (/\<P(\s[^\>]*\>|\>)/){
	$Pcount++;
	$Scount=0;
	s/\<P\>/\<P id=\"$Pcount\"\>/;
	$openP=1;
    }

    s/(\<AUTHOR.*)\>/$1\/\>/;
    s/(\<TRANSLATOR.*)\>/$1\/\>/;

    if (/\<CHAPTER/){$openChapter=1;}
    if (/\<HEADLINE/){$openHeadline=1;}
    if (/\<SOURCE/){s/(\<SOURCE.*)\>/$1 \/\>/;}


    if (/\<s\s+id=\"(.*?)\"/s){
	$Sid=$1;
    }

    if (/\</){
	if ($openP){
	    s/^([^\<]*)\</$1<\/P>\n</;
	    $openP = 0;
	}
	print;
    }
    else{
	$Scount++;
	s/^/<s id="$Pcount.$Scount">/;
	s/$/<\/s>/;
	print;
    }
}

if ($openP){print '</P>';}
if ($openSpeaker){print '</AUTHOR>';}
if ($openChapter){print '</CHAPTER>';}

print '</document>';
