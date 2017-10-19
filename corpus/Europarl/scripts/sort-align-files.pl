#!/usr/bin/env perl

my %links = ();

my $linkstr = '';
my $fromdoc = '';
my $todoc = '';

while (<>){
    next if (/\<\?xml/);
    next if (/\<\!DOCTYPE/);
    next if (/\<cesAlign/);

    if (/fromDoc\=\"(.*?)\"/){
	$fromdoc = $1;
    }
    if (/toDoc\=\"(.*?)\"/){
	$todoc = $1;
    }

    $linkstr.=$_;

    if (/<\/linkGrp\>/){
	$links{$fromdoc."\t".$todoc}=$linkstr;
	$linkstr='';
    }
}

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';

foreach (sort keys %links){
    print $links{$_};
}

print "</cesAlign>\n";


