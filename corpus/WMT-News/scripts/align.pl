#!/usr/bin/perl


use Getopt::Long;
my $srcfile;
my $trgfile;
my $outfile;
my ($src,$trg);

GetOptions ("src=s" => \$srcfile,
	    "trg=s" => \$trgfile,
	    "s=s" => \$src,
	    "t=s" => \$trg,
	    "out=s"   => \$outfile);

if ($outfile=~/\.gz$/){
    open O,"| gzip -c >$outfile" || die "cannot write to $outfile\n";
}
else{
    open O,">$outfile" || die "cannot write to $outfile\n";
}

my @srcIDs = read_sent_ids($srcfile);
my @trgIDs = read_sent_ids($trgfile);

if ($#srcIDs != $#trgIDs){
    print STDERR "non-identical number of sentences in $srcfile and $trgfile\n";
} 

print O '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
 <linkGrp targType="s" ';
print O "fromDoc=\"$srcfile\" toDoc=\"$trgfile\">\n";

my $count=0;
foreach (@srcIDs){
    my $t=shift(@trgIDs);
    $count++;
    print O "<link xtargets=\"$_;$t\" id=\"SL$count\" \/>\n";
}

print O "</linkGrp>\n</cesAlign>\n";
close O;

sub read_sent_ids{
    my $file=shift;
    my @ids=();
    if ($file=~/\.gz$/){
	open F,"gzip -cd <$file |";
    }
    else{
	open F,"<$file";
    }
    while (<F>){
	if (/\<s\s/){
	    if (/id=\"([0-9]+)\"/){
		push(@ids,$1);
	    }
	}
    }
    close F;
    return @ids;
}

