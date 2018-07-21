#!/usr/bin/perl

use strict;
use FindBin qw($Bin);
use File::Basename;
use IPC::Open3;
use File::Spec;
use Symbol qw(gensym);
use Getopt::Std;

# -a accept-threshold .. accept alternative subtitle pairs > score
# (allow one aligned document per subtitle --> useful for series)
# -t score-threshold ... do not accept alignments below this score (default=1)
# -s sync-threshold .... try syncing when score < threshold
# -o ................... overwrite existing output files
# -l ................... store logfiles
# -r 'parameter' ....... re-alignment parameter
# -m max ............... max nr of pairs to try with synchronization
#
# re-alignment is used for re-aligning the best match with synchronization
# the same parameter are used for finding matches if all files are 
# below the score threshold
#

use vars qw/$opt_a $opt_s $opt_t $opt_o $opt_l $opt_p $opt_r $opt_m/;

getopts('a:t:olp:r:m:');


# source and target language directories with one more sutitle files for the 
# same movie

#my $srcdir=shift || 'en/2009/47645';
#my $trgdir=shift || 'de/2009/47645';

my $srcdir=shift || 'en/2001/209';
my $trgdir=shift || 'et/2001/209';
my $outdir=shift;

# some more parameters:
# - alignment program
# - MinScore = minimum link-type ratio (ratio between empty and non-empty)
# - TrySync = score threshold for trying subtitle synchronization

my $SrtAlign = $Bin.
    '/../../../tools/public/uplug-old/tools/subtitles/srtalign.pl '. $opt_p;

my $MinScore      = $opt_t || 0.5;  # min overlap score
my $MinAlignScore = $opt_a || 2;    # min align score (empty-align ratio)

# make outdir if not given

if (! $outdir){
    my @SrcPath = split(/\//,$srcdir);
    my @TrgPath = split(/\//,$trgdir);

    $TrgPath[-3] = join('-',sort ($SrcPath[-3],$TrgPath[-3]));
    $outdir = join('/',@TrgPath);
}

open(NULL, ">", File::Spec->devnull);
local *ERR;

# grep all sub-files in source and target language dir

opendir(my $dh, $srcdir) || die "can't opendir $srcdir: $!";
my @SrcSubs = grep { /\.xml.gz$/ && -f "$srcdir/$_" } readdir($dh);
closedir $dh;

opendir(my $dh, $trgdir) || die "can't opendir $trgdir: $!";
my @TrgSubs = grep { /\.xml.gz$/ && -f "$trgdir/$_" } readdir($dh);
closedir $dh;


# get all subfile pairs of the same type (if split into several CDs)

my %SubPairs = ();

foreach my $s (@SrcSubs){
    $s=~/^(.*)\_([0-9]+of[0-9]+)\./;
#    push(@{$SubPairs{$1}{src}},$s);
    $SubPairs{$2}{src}{"$1\_$2"}=$s;
}

foreach my $t (@TrgSubs){
    $t=~/^(.*)\_([0-9]+of[0-9]+)\./;
#    push(@{$SubPairs{$1}{trg}},$t);
    $SubPairs{$2}{trg}{"$1\_$2"}=$t;
}



# need to check only ties of the same type

foreach my $type (keys %SubPairs){
    next if (!keys %{$SubPairs{$type}{src}});
    next if (!keys %{$SubPairs{$type}{trg}});

    my %TimeFrames=();
    my %Overlap=();

    print STDERR "type = $type ";
    foreach my $s (keys %{$SubPairs{$type}{src}}){
	my $src = $SubPairs{$type}{src}{$s};
	foreach my $t (keys %{$SubPairs{$type}{trg}}){
	    my $trg = $SubPairs{$type}{trg}{$t};
	    if (!exists $TimeFrames{$src}){
		$TimeFrames{$src} = [];
		read_time_frames($srcdir.'/'.$src,$TimeFrames{$src});
	    }
	    if (!exists $TimeFrames{$trg}){
		$TimeFrames{$trg} = [];
		read_time_frames($trgdir.'/'.$trg,$TimeFrames{$trg});
	    }
	    $Overlap{"$src:$trg"} = time_overlap_ratio($TimeFrames{$src},
						       $TimeFrames{$trg});
	}
    }
    print STDERR "\n";

    # try to find a matching pair that aligns well
    # - try first a fast and greedy approach (without synchronization)
    # - try another approach with additional parameters (if -r is set)
    unless (greedy_align(\%Overlap,$MinScore,$type,$opt_r)){
	if ($opt_r){
	    greedy_align(\%Overlap,
			 # $MinScore,
			 0.01,                       # reduce overlap score
			 $type,
			 undef,                      # no re-alignment
			 $opt_r,                     # always use extra para's
			 1,                          # it's enough to find one!
			 $opt_m);                    # stop after x pairs
	}
    }
}

# greedy_align - greedily try to align subtitle files starting with the one
#                with the highes time overlap ratio; each file may have
#                exactly one aligned file (do not try other combinations
#                if a good match is found - this is the greedy part)
#
# %scores      = hash of time overlap ratios
# $threshold   = minimum time overlap ratio
# type         = subtitle type ('1of1' etc)
# realign_para = extra parameters to re-align subtitles (synchronization ...)
# align_para   = general alignment parameters (not combined with realign_para!)
# only_one     = do not try to align all files (one of each type is enough)
# max          = maximum number of subtitle pairs to try

sub greedy_align{
    my $scores = shift;
    my $threshold = shift || 0.7;
    my $type = shift;

    # additional align_para
    my ($realign_para, $align_para, $only_one, $max) = @_;

    # count successfully aligned subtitles
    my $algcount=0;

    my @sorted = sort {$$scores{$b} <=> $$scores{$a}} keys %{$scores};
    my %doneSrc=();
    my %doneTrg=();

    if ($$scores{$sorted[0]}<$threshold){
	print STDERR "max score $$scores{$sorted[0]} below threshold!\n";
	return 0;
    }

    my $count=0;
    foreach my $p (@sorted){
	$count++;
	last if ($max and ($count > $max));
	my ($src,$trg) = split(/:/,$p);

	# no multi-alignments!
	next if (exists $doneSrc{$src});
	next if (exists $doneTrg{$trg});

	# min score threshold
	last if $$scores{$p}<$threshold;

	my ($SrcPart)=split(/\_/,$src);
	my ($TrgPart)=split(/\_/,$trg);
	my $algfile = $SrcPart.'-'.$TrgPart.'_'.$type;

	# align the best candidate 
	# but accept only of the link score is good enough
	# otherwise: continue with other candidates

	system("mkdir -p $outdir");
	my $score = align("$srcdir/$src","$trgdir/$trg",
			  "$outdir/$algfile.xml.gz",$align_para);
	if ($score > $MinAlignScore){
	    print "srtalign:\t$outdir/$algfile.xml.gz\t$$scores{$p}\t$score\n";
	    $doneSrc{$src}=1;
	    $doneTrg{$trg}=1;
	    # re-align with additional parameters (for synchronization)
	    if ($realign_para){
		$score = align("$srcdir/$src","$trgdir/$trg",
			       "$outdir/$algfile.xml.gz",$realign_para);
		print "srtalign:\t$outdir/$algfile.xml.gz\t$$scores{$p}\t$score\n";
	    }
	    $algcount++;
	    # stop here if only one of this type should be aligned
	    return $algcount if ($only_one);
	}
	else{
	    print STDERR "skip $outdir/$algfile.xml.gz (score = $score)\n";
	    unlink("$outdir/$algfile.xml.gz");
	}
    }
    return $algcount;
}


sub align{
    my ($src,$trg,$out,$para)=@_;

    my $cmd = "$SrtAlign $para $src $trg | gzip -c > $out";
    my $pid = open3(gensym, ">&NULL", \*ERR, $cmd);

    # print STDERR "$cmd\n";
    my @stderr = <ERR>;
    waitpid($pid, 0);

    if (@stderr[-1]=~/ratio\s*=\s*(.*)$/){
	return $1;
    }
    return 0;
}



sub time_overlap_ratio{
    my ($frames1,$frames2)=@_;
    my $common=0;
    my $diff=0;

    my @time1=@{$frames1};
    my @time2=@{$frames2};

    my $start1=shift(@time1);
    my $end1=shift(@time1);

    my $start2=shift(@time2);
    my $end2=shift(@time2);

    ## TODO: should we skip extra frames in the beginning?
    ## (need to do do that here in that case)

    while ($end1 && $end2){

	# sub1 frame is completely before sub2 frame
	if ($end1 < $start2){
	    $diff+=($end1-$start1);
	    $start1=shift(@time1);
	    $end1=shift(@time1);
	    next;
	}
	# sub2 frame is completely before sub1 frame
	if ($end2 && ($end2 < $start1)){
	    $diff+=($end2-$start2);
	    $start2=shift(@time2);
	    $end2=shift(@time2);
	    next;
	}

	my $CommonStart;
	# sub1 frame starts before sub2 frame
	if ($start1 < $start2){
	    $diff+=($start2-$start1);
	    $CommonStart=$start2;
	}
	# sub2 frame starts before sub1 frame
	else{
	    $diff+=($start1-$start2);
	    $CommonStart=$start1;
	}

        # sub1 frame ends before sub2
	if ($end1 < $end2){
	    $common+=($end1-$CommonStart);
	    $start2=$end1;         # move start2 to end of sub1 frame
	    $start1=shift(@time1);
	    $end1=shift(@time1);
	}
	# sub2 frame ends before sub1
	else{
	    $common+=($end2-$CommonStart);
	    $start1=$end2;         # move start1 to end of sub2 frame
	    $start2=shift(@time2);
	    $end2=shift(@time2);
	}
    }

    ## TODO: should we skip extra frames at the end?

    # remaining sub2 frames
    if (!$start1){
	while ($start2 && $end2){
	    $diff+=($end2-$start2);
	    $start2=shift(@time2);
	    $end2=shift(@time2);
	}
    }

    # remaining sub1 frames
    if (!$start2){
	while ($start1 && $end1){
	    $diff+=($end1-$start1);
	    $start1=shift(@time1);
	    $end1=shift(@time1);
	}
    }
    if ($common || $diff){
	return $common/($common+$diff);
    }
    return 0;
}



sub read_time_frames{
    my $file=shift;
    my $time=shift;

    if ($file=~/\.gz$/){
	open F,"gzip -cd < $file |" || die "cannot open $file!\n";
    }
    else{
	open F, "<$file" || die "cannot open $file!\n";
    }
    while (<F>){
	if (/\<time.*value\=\"(.*?)\"/){
	    my $sec = time2sec($1);
	    ## sanityt check: time should always increase!
	    if ((!@{$time}) || ($$time[-1]<$sec)){
		push(@$time,time2sec($1));
	    }
	}
    }
    close F;
    print STDERR ".";
}





sub time2sec{
    my $time=shift;
    my ($h,$m,$s,$ms)=split(/[^0-9\-]/,$time);
    my $sec = 3600*$h+60*$m+$s+$ms/1000;
    return $sec;
}
