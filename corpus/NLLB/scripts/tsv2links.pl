#!/usr/bin/env perl
#-*-perl-*-

use utf8;
use strict;
use CDB_File;

my $srcDBFile = shift(@ARGV);
my $trgDBFile = shift(@ARGV);

my $srcXMLFile = shift(@ARGV) || 'src/corpus.xml.gz';
my $trgXMLFile = shift(@ARGV) || 'trg/corpus.xml.gz';


my @srcDB = open_dbs($srcDBFile);
my @trgDB = open_dbs($trgDBFile);

my $srclang = $srcDBFile;


## print XML header
print '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
  <linkGrp targType="s" fromDoc="';
print $srcXMLFile;
print '" toDoc="';
print $trgXMLFile;
print '">',"\n";



## run through all sentences and print the links
binmode(STDIN);
my $lid=0;
while (<>){
    chomp;
    my ($score, $src, $trg) = split(/\t/);
    my $sid = find_sentence(\@srcDB, $src);
    my $tid = find_sentence(\@trgDB, $trg);
    if ($sid && $tid){
	$lid++;
	print "  <link id=\"L$lid\" xtargets=\"$sid;$tid\" score=\"$score\" />\n";
	print STDERR '.' if (! ($lid % 50000));
	print STDERR " $lid\n" if (! ($lid % 2500000));
    }
}


## print the final closing XML tags
print '  </linkGrp>',"\n";
print '</cesAlign>',"\n";




sub find_sentence{
    my ($dbs, $sent) = @_;
    foreach my $db (@{$dbs}){
#	if (exists $db->{$sent}) {
#	    # print STDERR "found ID for $sent!\n";
#	    return $db->{$sent};
#	}	
	if ($db->EXISTS($sent)) {
	    # print STDERR "found ID for $sent!\n";
	    return $db->FETCH($sent);
	}
    }
    print STDERR "no ID found for $sent!\n";
    return undef;
}

sub open_dbs{
    my ($filebase, $dbs) = @_;
    my @dbfiles = glob "$filebase\[0-9\]*";
    my @dbs = ();
    foreach (0..$#dbfiles){
	$dbs[$_] = {};
#	tie %{$dbs[$_]}, 'CDB_File', $dbfiles[$_] || die "cannot tie $dbfiles[$_]\n";
	$dbs[$_] = CDB_File->TIEHASH($dbfiles[$_]);
    }
    return @dbs;
}

