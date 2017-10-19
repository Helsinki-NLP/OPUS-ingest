#!/usr/bin/perl


use Getopt::Std;
use File::Basename qw/basename dirname/;
use FindBin qw($Bin);

use vars qw/$opt_a $opt_d $opt_s $opt_t $opt_S $opt_T/;

getopts('a:s:t:S:T:');


my $algfile = $opt_a || 'ca-en.xml.gz';
my $src = $opt_s;
my $trg = $opt_t;
my $srcdir = $opt_S;
my $trgdir = $opt_T;
my $dic = $opt_d;

# srt align program with very low minimal time overlap threshold (0.01)
# and standard alignment type ratio threshold (2)

my $SRTALIGN = $Bin.'/subalign.pl -t 0.01 -a 2';


# set languages (taken from alignment file

unless ($src && $trg){
    my $base = basename($algfile);
    ($src,$trg) = split(/[\-\.]/,$base);
}

# set language directories

unless ($srcdir && $trgdir){
    my $base = dirname($algfile);
    $srcdir = $base.'/'.$src;
    $trgdir = $base.'/'.$trg;
}

unless (-e $dic){
    my $base = dirname($algfile);
    $dic = $base.'/../dic/'.$src.'-'.$trg.'.dic';
}


# read alignment file (to get list of all aligned movies)

if ($algfile=~/\.gz/){
    open F,"gzip -cd <$algfile |";
}
else{
    open F,"<$algfile";
}

my %MovieIDs = ();

while (<F>){
    if (/fromDoc\s*\=\s*['"](.*?)['"](\s|\>)/){
	my $fromdoc = $1;
	my @parts = split(/\/+/,$fromdoc);
	pop(@parts);
	shift(@parts);
	my $movie = join('/',@parts);
	$MovieIDs{$movie}++;
    }
}



opendir(my $dh, $srcdir) || die "can't opendir $srcdir: $!";
my @SrcYears = grep { $_!~/^\.+$/ } readdir($dh);
closedir $dh;


my @TranslatedMovies = ();

foreach my $year (@SrcYears){
    opendir(my $dh, $srcdir.'/'.$year) || 
	die "can't opendir $srcdir/$year: $!";
    my @movies = grep { $_!~/^\.+$/ } readdir($dh);
    closedir $dh;
    foreach (@movies){
	if (-d $trgdir.'/'.$year.'/'.$_){
	    push(@TranslatedMovies,$year.'/'.$_);
	}
    }
}

foreach my $id (@TranslatedMovies){
    if (exists $MovieIDs{$id}){
	print STDERR "Movie $id is already aligned! -> skip\n";
	next;
    }
    else{
	print STDERR "Movie $id is not aligned! Try to synchronize ....\n";
	system("$SRTALIGN -p '-b -i 5 -L -d $dic' $srcdir/$id $trgdir/$id")
    }
}





