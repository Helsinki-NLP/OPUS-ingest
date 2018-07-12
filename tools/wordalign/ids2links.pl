#!/usr/bin/perl
#
# convert ID file in wordalign to xces format

my ($thisSrc,$thisTrg) = (undef,undef);

print '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';

while (<>){
    chomp;
    my ($srcdoc,$trgdoc,$srcids,$trgids) = split(/\t/);
    if ($srcdoc ne $thisSrc){
	if ($thisSrc){
	    print "</linkGrp>\n";
	}
	print "<linkGrp targType=\"s\" ";
	print 'fromDoc="'.$srcdoc.'" ';
	print 'toDoc="'.$trgdoc.'">'."\n";
	($thisSrc,$thisTrg) = ($srcdoc,$trgdoc);
    }
    print "<link xtargets=\"$srcids;$trgids\" />\n";
}

print "</linkGrp>\n</cesAlign>\n";
