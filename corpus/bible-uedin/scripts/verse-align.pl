#!/bin/env perl

use strict;


my $srcfile = shift(@ARGV);
my $trgfile = shift(@ARGV);

my ($SrcVerses,$SrcIDs) = read_verse_ids($srcfile);
my ($TrgVerses,$TrgIDs) = read_verse_ids($trgfile);



## print align file header
print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
print '<linkGrp targType="s" fromDoc="',$srcfile,'" toDoc="',$trgfile,'">',"\n";


for (0..$#{$SrcVerses}){
    next unless (exists $$SrcIDs{$$SrcVerses[$_]});
    next unless (exists $$TrgIDs{$$SrcVerses[$_]});
    print '<link id="L',$_+1,'" xtargets="';
    print join(' ',@{$$SrcIDs{$$SrcVerses[$_]}});
    print ';';
    print join(' ',@{$$TrgIDs{$$SrcVerses[$_]}});
    print '"/>',"\n";
}    

print "</linkGrp>\n</cesAlign>\n";



sub read_verse_ids{
    my $file = shift;
    if ($file=~/\.gz/){
	open F,"gzip -cd <$file |" || die "cannot read from $file!\n";
    }
    else{
	open L,"<$file" || die "cannot read from $file!\n";
    }
    my $vids = [];
    my $sids = {};
    my $vid = undef;
    while (<F>){
	if (/\<seg\s.*type=[\"\']verse[\"\']/){
	    if (/\sid=[\"\']([^\"\']+)[\"\']/){
		$vid = $1;
		$$sids{$vid} = [];
		push(@{$vids},$vid);
	    }
	}
	elsif (/\<s\s.*id=[\"\']([^\"\']+)[\"\']/){
	    push (@{$$sids{$vid}},$1);
	}
    }
    return ($vids,$sids);
}
