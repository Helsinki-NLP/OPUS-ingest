#!/usr/bin/perl

use strict;
use FindBin qw($Bin);
use File::Basename;
use IPC::Open3;
use File::Spec;
use Symbol qw(gensym);
use Getopt::Std;
use Time::Local;

# -a accept-threshold .. accept alternative subtitle pairs > score
# (allow one aligned document per subtitle --> useful for series)
# -d duration-thr ...... max duration difference (default=0.1)
# -t score-threshold ... do not accept alignments below this score (default=1)
# -s sync-threshold .... try syncing when score < threshold
# -o ................... overwrite existing output files
# -l ................... store logfiles
# -r 'parameter' ....... re-alignment parameter
# -m max ............... max nr of pairs to try with synchronization
# -L ................... skip PAIRS of symbolically linked files
#
# re-alignment is used for re-aligning the best match with synchronization
# the same parameter are used for finding matches if all files are 
# below the score threshold
#

use vars qw/$opt_a $opt_d $opt_s $opt_t $opt_o 
            $opt_l $opt_p $opt_r $opt_m $opt_L $opt_O/;

getopts('a:d:t:olp:r:m:LO:');

my %ScoreWeight = ( utf8 => 0.1,
		    durationdiff => -0.5,
		    rating => 0.2,
		    recency => 0.1,
		    corrected => -0.01,
		    langid => 0.1 );
		    

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

my $SrtAlign = 'srtalign -P '. $opt_p;

# my $SrtAlign = $Bin.
#    '/../../../tools/public/uplug-old/tools/subtitles/srtalign.pl '. $opt_p;

my $MinScore      = $opt_t || 0.2;   # min overlap score
my $MinAlignScore = $opt_a || 0.75;  # min align score (empty-align proportion)
my $MinOverlap    = $opt_O || 0.8;   # min time overlap

my $MaxDurationDiff = $opt_d || 0.1; # max relative difference in duration

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



## new: all combinations are possible!!

my %TimeFrames=();
my %MetaData=();
my %Overlap=();

foreach my $src (@SrcSubs){

    ## check if the source file is just a symbolic link
    my $SymbolicLink = 0;
    $SymbolicLink = 1 if (-l $srcdir.'/'.$src);

    foreach my $trg (@TrgSubs){

	## skip sub-pair if both files are symbolic links
	## and option -L is set
	if ($opt_L && $SymbolicLink){
	    next if (-l $trgdir.'/'.$trg);
	}

	if (!exists $TimeFrames{$src}){
	    $TimeFrames{$src} = [];
	    $MetaData{$src} = {};
	    read_time_frames($srcdir.'/'.$src,
			     $TimeFrames{$src},
			     $MetaData{$src});
	}
	if (!exists $TimeFrames{$trg}){
	    $TimeFrames{$trg} = [];
	    $MetaData{$trg} = {};
	    read_time_frames($trgdir.'/'.$trg,
			     $TimeFrames{$trg},
			     $MetaData{$trg});
	}
	$Overlap{"$src:$trg"} = time_overlap_ratio($TimeFrames{$src},
						   $TimeFrames{$trg});
    }
}

my %CandidateScores=();
my %CombinedScore=();
make_candidate_scores(\%Overlap,\%CandidateScores,\%CombinedScore,
		      \%MetaData);

print STDERR "\n";
next unless (keys %Overlap);


# try to find a matching pair that aligns well
# - try first a fast and greedy approach (without synchronization)
# - try another approach with additional parameters (if -r is set)
best_align(\%CombinedScore,
	   $MinScore,
	   \%Overlap,
	   \%CandidateScores,
	   $opt_r,                     # extra para's
	   $opt_m);                    # stop after x pairs



sub make_candidate_scores{
    my $overlap=shift;
    my $scores=shift;
    my $combined=shift;
    my $meta=shift;

    my $first_date=0;
    my $last_date=0;
    foreach (keys %{$meta}){
	if ($$meta{$_}{upload_date}>$last_date){
	    $last_date = $$meta{$_}{upload_date};
	}
	$first_date = $last_date unless ($first_date);
	if ($$meta{$_}{upload_date}<$first_date){
	    $first_date = $$meta{$_}{upload_date};
	}
    }
    my $period = $last_date - $first_date;
    foreach (keys %{$meta}){
	if ($period && $first_date && $last_date){
	    $$meta{$_}{recency} = ($$meta{$_}{upload_date}-$first_date)/$period;
	}
	else{
	    $$meta{$_}{recency} = 1;
	}
	if ($$meta{$_}{encoding} eq 'utf-8'){
	    $$meta{$_}{utf8}=1;
	}
    }

# add factors to the scoring function

    foreach my $pair (keys %{$overlap}){
	my ($src,$trg) = split(/:/,$pair);
	$$scores{$pair} = $ScoreWeight{utf8} * $$meta{$src}{utf8};
	$$scores{$pair} += $ScoreWeight{utf8} * $$meta{$trg}{utf8};
	$$scores{$pair} += $ScoreWeight{recency} * $$meta{$src}{recency};
	$$scores{$pair} += $ScoreWeight{recency} * $$meta{$trg}{recency};
	if ($$meta{$src}{duration_seconds} || $$meta{$trg}{duration_seconds}){
	    if ($$meta{$src}{duration_seconds}>$$meta{$trg}{duration_seconds}){
		$$scores{"$pair:durationdiff"} =
		    ($$meta{$src}{duration_seconds}-
		     $$meta{$trg}{duration_seconds}) / 
		     $$meta{$src}{duration_seconds};
	    }
	    else{
		$$scores{"$pair:durationdiff"} =
		    ($$meta{$trg}{duration_seconds}-
		     $$meta{$src}{duration_seconds}) / 
		     $$meta{$trg}{duration_seconds};
	    }
	    $$scores{$pair} += 
		$ScoreWeight{durationdiff} * $$scores{"$pair:durationdiff"};

	}
	$$scores{$pair} += 
	    $ScoreWeight{corrected} * $$meta{$src}{corrected_words};
	$$scores{$pair} += 
	    $ScoreWeight{corrected} * $$meta{$trg}{corrected_words};

	$$scores{$pair} += $ScoreWeight{langid} * $$meta{$src}{confidence};
	$$scores{$pair} += $ScoreWeight{langid} * $$meta{$trg}{confidence};

	$$combined{$pair} = $$overlap{$pair} + $$scores{$pair};
    }
}


# %scores      = hash of time overlap ratios
# $threshold   = minimum time overlap ratio
# type         = subtitle type ('1of1' etc)
# realign_para = extra parameters to re-align subtitles (synchronization ...)
# align_para   = general alignment parameters (not combined with realign_para!)
# max          = maximum number of subtitle pairs to try

sub best_align{
    my $scores = shift;
    my $threshold = shift || 0.7;
    my $overlap = shift;
    my $metascore = shift;

    # additional align_para
    my ($align_para, $max) = @_;

    my @sorted = sort {$$scores{$b} <=> $$scores{$a}} keys %{$scores};

    if ($$scores{$sorted[0]}<$threshold){
	print STDERR "max score $$scores{$sorted[0]} below threshold!\n";
	return 0;
    }

    my $count=0;
    my $bestscore=0;
    my $bestalign=undef;

    foreach my $p (@sorted){
	$count++;
	last if ($max and ($count > $max));
	my ($src,$trg) = split(/:/,$p);

	# min score threshold
	last if $$scores{$p}<$threshold;

	# skip subtitles that differ significantly in length
	next if ($$metascore{"$p:durationdiff"} > $MaxDurationDiff);

	my ($SrcPart)=split(/\./,$src);
	my ($TrgPart)=split(/\./,$trg);
	my $algfile = $SrcPart.'-'.$TrgPart;

	# align the best candidate 
	# but accept only of the link score is good enough
	# otherwise: continue with other candidates

	system("mkdir -p $outdir");

	my ($score,$overlap) = 
	    align("$srcdir/$src","$trgdir/$trg",
		  "$outdir/$algfile.xml.gz",$align_para);

	if ($score > $MinAlignScore){
	    print "srtalign:\t$outdir/$algfile.xml.gz\t$$scores{$p}\t$score\n";
	    
	    $score += $$metascore{$p};
	    if ($score > $bestscore){
		unlink($bestalign) if (-e $bestalign);
		$bestscore = $score;
		$bestalign = "$outdir/$algfile.xml.gz";
	    }
	    else{
		unlink("$outdir/$algfile.xml.gz");
	    }
	}
	else{
	    unlink("$outdir/$algfile.xml.gz");
	}
    }
    return $bestscore;
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
    my $overlap = shift;
    my $metascore = shift;

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
	my $algfile = $SrcPart.'-'.$TrgPart;

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

    my $score = 0;
    my $overlap = 0;

    if (@stderr[-1]=~/ratio\s*=\s*(.*)$/){
	$score = $1;
    }
    if (@stderr && (@stderr[-2]=~/overlap\s*=\s*(.*)$/)){
	$overlap = $1;
    }

    return wantarray ? ($score,$overlap) : $score;
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
    my $meta=shift;

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
	if (/<meta>/){
	    while (<F>){
		if (/\<(.*?)>(.*)<\//){
		    $$meta{$1}=$2;
		}
		last if (/<\/meta>/);
	    }
	    if (exists $$meta{date}){
		my ($yy,$mm,$dd) = split(/-/,$$meta{date});
		$$meta{upload_date} = timelocal(0,0,0,$dd,$mm-1,$yy);
	    }
	    if (exists $$meta{duration}){
		my ($hh,$mm,$ss) = split(/:/,$$meta{duration});
		$$meta{duration_seconds} = $ss+60*$mm+3600*$hh;
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
