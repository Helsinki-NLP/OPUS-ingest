#!/usr/bin/perl

use strict;

my $AltSrcFile = shift(@ARGV);
my $AltTrgFile = shift(@ARGV);

my $AlgFile = shift(@ARGV);


my ($fromDoc,$toDoc) = (undef,undef);

## read alternative links
my %AltLinks=();
foreach my $AltAlgFile ($AltSrcFile,$AltTrgFile){
    open F,"gzip -cd < $AltAlgFile |" || die "cannot read from $AltAlgFile";
    while (<F>){
	if (/fromDoc="([^\"]+)"/){
	    $fromDoc = $1;
	}
	if (/toDoc="([^\"]+)"/){
	    $toDoc = $1;
	}
	if (/xtargets=\"([^\"]+)\;([^\"]+)\"/){
	    $AltLinks{$fromDoc}{$1}{$toDoc} = $2;
	    $AltLinks{$toDoc}{$2}{$fromDoc} = $1;
	}
    }
    close F;
}


## read bitext and check which links are not there yet
my %NewLinks = ();
open F,"gzip -cd < $AlgFile |" || die "cannot read from $AlgFile";
while (<F>){
    if (/fromDoc="([^\"]+)"/){
	$fromDoc = $1;
    }
    if (/toDoc="([^\"]+)"/){
	$toDoc = $1;
    }
    if (/xtargets=\"([^\"]+)\;([^\"]+)\"/){
	my ($s,$t) = ($1,$2);
	if (exists $AltLinks{$fromDoc}{$s}){
	    foreach my $f (keys %{$AltLinks{$fromDoc}{$s}}){
		$NewLinks{$f}{$toDoc}{$AltLinks{$fromDoc}{$s}{$f}} = $t;
	    }
	}
	if (exists $AltLinks{$toDoc}{$t}){
	    foreach my $f (keys %{$AltLinks{$toDoc}{$t}}){
		$NewLinks{$fromDoc}{$f}{$s} = $AltLinks{$toDoc}{$t}{$f};
	    }
	}
    }
    # if (/<\/cesAlign\>/){
    # 	foreach my $s (sort keys %NewLinks){
    # 	    foreach my $t (sort keys %{$NewLinks{$s}}){
    # 		print "<linkGrp targType=\"s\" fromDoc=\"$s\" toDoc=\"$t\">\n";
    # 		my $count = 0;
    # 		foreach my $x (sort keys %{$NewLinks{$s}{$t}}){
    # 		    $count++;
    # 		    print "<link id=\"SL$count\" xtargets=\"$x;$NewLinks{$s}{$t}{$x}\" type=\"alt\" \/>\n";
    # 		}
    # 		print "</linkGrp>\n";
    # 	    }
    # 	}
    # }
    # print;
}
close F;



## print all new links

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
foreach my $s (sort keys %NewLinks){
    foreach my $t (sort keys %{$NewLinks{$s}}){
	print "<linkGrp targType=\"s\" fromDoc=\"$s\" toDoc=\"$t\">\n";
	my $count = 0;
	foreach my $x (sort keys %{$NewLinks{$s}{$t}}){
	    $count++;
	    print "<link id=\"SL$count\" xtargets=\"$x;$NewLinks{$s}{$t}{$x}\" type=\"alt\" \/>\n";
	}
	print "</linkGrp>\n";
    }
}
print "</linkAlign>\n";
