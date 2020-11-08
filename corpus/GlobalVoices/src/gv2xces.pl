#!/usr/bin/perl

use strict;

my $src = shift(@ARGV) || 'de';
my $trg = shift(@ARGV) || 'en';


if (-e "aligned-doc/$src-$trg.txt"){
    open A,"<aligned-doc/$src-$trg.txt" || die "cannot open align-doc";
}
elsif (-e "aligned-doc/$trg-$src.txt"){
    open A,"<aligned-doc/$trg-$src.txt" || die "cannot open align-doc";
}
else{
    die "no align-doc for $src-$trg";
}


my @srcdocs=();
my @trgdocs=();

while (<A>){
    chomp;
    my ($srcfile,$trgfile) = split(/\s+/);

    $srcfile =~tr/|:%&;/_____/;
    $trgfile =~tr/|:%&;/_____/;

    $srcfile .= '.xml.gz';
    $trgfile .= '.xml.gz';

    $srcfile =~/^html\/([^\/]+)\/(.*)$/;
    $1 eq $src ? push (@srcdocs,$2) : push (@trgdocs,$2);
    $trgfile =~/^html\/([^\/]+)\/(.*)$/;
    $1 eq $trg ? push (@trgdocs,$2) : push (@srcdocs,$2);
}
close A;


my $reverse=0;
if (-e "xliff/globalvoices.$src-$trg.xliff.clean.gz"){
    open X,"gzip -cd < xliff/globalvoices.$src-$trg.xliff.clean.gz |" 
	|| die "cannot open xliff";
}
elsif (-e "xliff/globalvoices.$trg-$src.xliff.clean.gz"){
    $reverse=1;
    open X,"gzip -cd < xliff/globalvoices.$trg-$src.xliff.clean.gz |" 
	|| die "cannot open xliff";
}
elsif (-e "xliff/globalvoices.$src-$trg.xliff.gz"){
    open X,"gzip -cd < xliff/globalvoices.$src-$trg.xliff.gz |" 
	|| die "cannot open xliff";
}
elsif (-e "xliff/globalvoices.$trg-$src.xliff.gz"){
    $reverse=1;
    open X,"gzip -cd < xliff/globalvoices.$trg-$src.xliff.gz |" 
	|| die "cannot open xliff";
}
else{
    die "no xliff file for $src-$trg";
}

my %trans=();

my $source = '';
while (<X>){
    if (/<source>\s*(.*\S)\s*<\/source>/){
	$source = $1;
    }
    elsif (/<target>\s*(.*\S)\s*<\/target>/){
	if ($reverse){
	    $trans{$1} = $source;
	}
	else{
	    $trans{$source} = $1;
	}
    }
}
close X;


print'<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';


my $MaxSize = 3;


for my $i (0..$#srcdocs){

    my @srcsent=();
    my @trgsent=();

    my @srcid=();
    my @trgid=();

    readdoc("../raw/$src/$srcdocs[$i]",\@srcsent,\@srcid);
    readdoc("../raw/$trg/$trgdocs[$i]",\@trgsent,\@trgid);

    print '<linkGrp targType="s" fromDoc="';
    print "$src/$srcdocs[$i]";
    print '" toDoc="';
    print "$trg/$trgdocs[$i]\"\>\n";

    my $sidx = 0;
    my $tidx = 0;

    while ($sidx < @srcsent){

	my $srcstr = $srcsent[$sidx];
	my $s = 0;
	while ($s < $MaxSize){
	    if (exists $trans{$srcstr}){
		my $found = 0;
		while ($tidx < @trgsent){
		    my $trgstr = $trgsent[$tidx];
		    my $t = 0;
		    while ($t < $MaxSize){
			if ($trans{$srcstr} eq $trgstr){
			    ## translation found!!
			    my @sids = ();
			    my @tids = ();
			    for (0..$s){
				push (@sids,$srcid[$sidx+$_]);
			    }
			    for (0..$t){
				push (@tids,$trgid[$tidx+$_]);
			    }
			    print "<link xtargets=\"";
			    print join(' ',@sids);
			    print ";";
			    print join(' ',@tids);
			    print "\" \/>\n";
			    $sidx = $sidx+$s;
			    $tidx = $tidx+$t;
			    $found=1;
			    last;
			}
			$t++;
			$trgstr .= ' '.$trgsent[$tidx+$t];
		    }
		    $tidx++;
		    last if ($found);
		}
		$tidx = 0 if ($tidx == @trgsent);
	    }
	    $s++;
	    $srcstr .= ' '.$srcsent[$sidx+$s];
	}
	$sidx++;
    }
    print "</linkGrp>\n";
}
print "</cesAlign>\n";



sub readdoc{
    my ($name,$sents,$ids) = @_;
    open F,"gzip -cd < $name |" || die "cannot open doc";
    while (<F>){
	if (/<s id="([^\"]+)">(.*)<\/s>/){
	    push(@{$ids},$1);
	    push(@{$sents},$2);
	}
    }
    close F;
}
