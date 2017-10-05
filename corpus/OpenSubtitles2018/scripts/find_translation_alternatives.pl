#!/usr/bin/perl

use lib $ENV{HOME}.'/OPUS/tools/public/aligner/subalign/lib';

use strict;
use Text::SRT::Align qw/:all/;
use IO::File;
use Getopt::Std;
use File::Basename qw/dirname/;

use vars qw($opt_T $opt_a $opt_t $opt_b $opt_m $opt_B $opt_v $opt_M);
getopts('a:t:b:B:mM:vT:');

binmode(STDOUT,":utf8");
binmode(STDERR,":utf8");

# my @ops;
# my %c;
# print edit_distance(['What','an','idoit','..'],['What','an','idiot','..'],\@ops,\%c);

# print edit_distance('aabsrdrfffg','abscdefgh',\@ops);
# print edit_distance('abscdefgh','aabsrdrfffg',\@ops);
# print edit_distance('aabsrdrfffg','abscd',\@ops);
# print edit_distance('abscd','aabsrdrfffg',\@ops);
# print edit_distance(['a','s','s','b'],'abscdefg',\@ops);
# print edit_distance(['a','s','s','b'],['aa','a','s'],\@ops);

my $MIN_ALG_SCORE = $opt_a || 1;
my $MIN_TIME_OVERLAP = $opt_t || 0.5;
my $BLEU_THR = $opt_T || 0.5;          # BLEU threshold for aligning
my $MIN_BLEU = $opt_b || 0.2;          # BLEU threshold for skipping before synchronising
my $LOW_BLEU = $opt_B || 0.8;          # BLEU threshold for when to try synchronising
my $MAX_ALTERNATIVES = $opt_M || 20;

my $srtdir  = shift(@ARGV) || 'en/2001/14818';
my $outbase = shift(@ARGV);

unless ($outbase){
    $outbase = $srtdir;
    $outbase =~s/^(.*?)\//$1-$1\//;
}

opendir(my $dh, $srtdir) || die "can't opendir $srtdir: $!";
my @subs = grep { /\.xml.gz$/ && -f "$srtdir/$_" } readdir($dh);
closedir $dh;

unless ($#subs){
    print STDERR "I need more than 1 subtitle as input!\n" if ($opt_v);
    exit 0;
}

unless (-d dirname($outbase)){
    system("mkdir -p ".dirname($outbase));
}

my $diff_punct_file = $outbase.'.pct.xml.gz';
my $diff_insert_file = $outbase.'.insert.xml.gz';
my $diff_spelling_file = $outbase.'.spell.xml.gz';
my $diff_other_file = $outbase.'.other.xml.gz';
my $diff_misaligned_file = $outbase.'.misaligned.xml.gz';
my $align_file = $outbase.'.all.xml.gz';

my ($FP,$FI,$FL,$FO,$FA,$FM);

open $FP,"| gzip -c > $diff_punct_file" || 
    die "cannot open $diff_punct_file!\n";
open $FI,"| gzip -c > $diff_insert_file" || 
    die "cannot open $diff_insert_file!\n";
open $FL,"| gzip -c > $diff_spelling_file" || 
    die "cannot open $diff_spelling_file!\n";
open $FO,"| gzip -c > $diff_other_file" || 
    die "cannot open $diff_other_file!\n";
open $FM,"| gzip -c > $diff_misaligned_file" || 
    die "cannot open $diff_misaligned_file!\n";
open $FA,"| gzip -c > $align_file" || 
    die "cannot open $align_file!\n";

&print_ces_header($FP);
&print_ces_header($FI);
&print_ces_header($FL);
&print_ces_header($FO);
&print_ces_header($FM);
&print_ces_header($FA);

my %COUNT=();


# read all time frames

my @TimeFrames=();
foreach my $s (0..$#subs){
    $TimeFrames[$s] = [];
    Text::SRT::Align::read_time_frames("$srtdir/$subs[$s]",$TimeFrames[$s]);
}



foreach my $s (0..$#subs){

    $subs[$s]=~/\_([0-9]+of[0-9]+)\./;
    my $srcCD = $1;

    # check time overlap ratios and keep only a limited number of 
    # similar movies (the ones with the highest overlap ratios)
    my %overlaps=();
    foreach my $t ($s+1..$#subs){

	$subs[$t]=~/\_([0-9]+of[0-9]+)\./;
	next unless ($1 eq $srcCD);

	my $overlap = Text::SRT::Align::time_overlap_ratio($TimeFrames[$s],
							   $TimeFrames[$t]);
	if ($overlap < $MIN_TIME_OVERLAP){
	    print STDERR "overlap($subs[$s],$subs[$t] = $overlap  --> skip\n"
		if ($opt_v);
	}
	else{
	    $overlaps{$t} = $overlap;
	}
    }
    my @sorted = sort {$overlaps{$b}<=>$overlaps{$a}} keys %overlaps;
    if (@sorted > $MAX_ALTERNATIVES){
	splice(@sorted,$MAX_ALTERNATIVES);
    }
    next unless (@sorted);


    print STDERR '.';
    foreach my $t (@sorted){

	print STDERR "align $srtdir/$subs[$s] - $srtdir/$subs[$t]\n" if ($opt_v);
	my @alignments = ();
	my $score = &align("$srtdir/$subs[$s]",
			   "$srtdir/$subs[$t]",
			   \@alignments);
	if ($score > $MIN_ALG_SCORE){
	    my (%srcsent,%trgsent) = ((),());
	    read_xml("$srtdir/$subs[$s]",\%srcsent);
	    read_xml("$srtdir/$subs[$t]",\%trgsent);
	    my @srcalg = ();
	    my @trgalg = ();

	    print STDERR "make TU's and compute BLEU\n" if ($opt_v);
	    &make_translation_units(\%srcsent,\%trgsent,
				   \@alignments,
				   \@srcalg,\@trgalg);

	    my $bleu = 0;
	    if (@srcalg && @trgalg){
		$bleu = &compute_bleu(\@srcalg,\@trgalg);
	    }

	    next if ($bleu < $MIN_BLEU);

	    print STDERR "bleu ( $subs[$s],$subs[$t] ) = $bleu\n";

	    ## if the BLEU score is quite low:
	    ## check if we need to synchronize!
	    if ($bleu < $LOW_BLEU){

		print STDERR "re-align with lexical time-syncing\n" if ($opt_v);
		my @alignments2=();
		my $score = &align("$srtdir/$subs[$s]",
				   "$srtdir/$subs[$t]",
				   \@alignments2,
				   VERBOSE       => $opt_v,
				   BEST_ALIGN    => $opt_m,
				   USE_IDENTICAL => 1,
				   TOK_LEN       => 5,
				   MAX_MATCHES   => 10,
				   # UPPER_CASE    => 1,
				   WINDOW        => 20);

		my @srcalg2 = ();
		my @trgalg2 = ();

		print STDERR "make TU's and compute new BLEU\n" if ($opt_v);
		make_translation_units(\%srcsent,\%trgsent,
				       \@alignments2,
				       \@srcalg2,\@trgalg2);
		
		my $bleu2 = 0;
		if (@srcalg2 && @trgalg2){
		    $bleu2 = &compute_bleu(\@srcalg2,\@trgalg2);
		}
		# my $bleu2 = &compute_bleu(\@srcalg2,\@trgalg2);

		## better BLEU score? --> use this alignment
		if ($bleu2 > $bleu){
		    print STDERR "bleu2( $subs[$s],$subs[$t] ) = $bleu2\n";
		    @alignments = @alignments2;
		    @srcalg = @srcalg2;
		    @trgalg = @trgalg2;
		    $bleu = $bleu2;
		}
	    }

	    if ($bleu > $BLEU_THR){

		## yet another check with the algignment:
		## see if neighboring sentences are better matches.
		print STDERR "optimize alignment (check neighbors)\n" if ($opt_v);
		&check_link_neighbors(\%srcsent,\%trgsent,
				      \@alignments,
				      \@srcalg,\@trgalg);


		# ## print all alignments to stdout
		# &Text::SRT::Align::print_ces("$srtdir/$subs[$s]",
		# 			     "$srtdir/$subs[$t]",
		# 			     \@alignments);

		## print selected
		&print_ces("$srtdir/$subs[$s]",
			   "$srtdir/$subs[$t]",
			   \@srcalg,\@trgalg,
			   \@alignments);
	    }
	}
    }
}


&print_ces_tail($FP);
&print_ces_tail($FI);
&print_ces_tail($FL);
&print_ces_tail($FO);
&print_ces_tail($FM);
&print_ces_tail($FA);

close $FP;
close $FI;
close $FL;
close $FO;
close $FM;
close $FA;

unlink($diff_insert_file) unless ($COUNT{INSERT});
unlink($diff_punct_file) unless ($COUNT{PCT});
unlink($diff_spelling_file) unless ($COUNT{SPELLING});
unlink($diff_other_file) unless ($COUNT{OTHER});
unlink($diff_misaligned_file) unless ($COUNT{MISALIGNED});
# unlink($align_file) unless ($COUNT{ALL});


sub make_translation_units{
    my ($srcsent,$trgsent,$alignments,$srcalg,$trgalg)=@_;
    foreach my $a (@$alignments){
	my $i = scalar @$srcalg;
	foreach my $s (@{$$a{src}}){
	    warn "src sent $s does not exist" unless (exists $$srcsent{$s});
	    $$srcalg[$i] .= $$srcsent{$s}.' ';
	}
	foreach my $t (@{$$a{trg}}){
	    warn "trg sent $t does not exist" unless (exists $$trgsent{$t});
	    $$trgalg[$i] .= $$trgsent{$t}.' ';
	}
	$$srcalg[$i]=~s/\s*$//;
	$$trgalg[$i]=~s/\s*$//;
    }
}



# check if some sentences fit better to neighboring sentences in other TUs
# move them if this is the case ....

sub check_link_neighbors{
    my ($srcsent,$trgsent,$alignments,$srcalg,$trgalg)=@_;

    my @new = ();
    my $modifications=0;

    foreach my $i (0..$#{$alignments}-1){

	## skip completely empty translation units
	## (this can happen because we move some sentences around below)
	next unless (@{$$alignments[$i]{src}} || @{$$alignments[$i]{trg}});

	## identical strings ---> this must be correct ...
	if ($$srcalg[$i] eq $$trgalg[$i]){
	    push(@new,$$alignments[$i]);
	    next;
	}

	## check if we find matches between individual sentences
	## TODO: do we need more than simple identity check?
	##       (but LCSR is too slow I guess)
	## TODO: what is if there is a 1:n match or even n:m?

	my %matchedTrg=();
	foreach my $s (0..$#{$$alignments[$i]{src}}){
	    my $match = 0;
	    foreach my $t (0..$#{$$alignments[$i]{trg}}){
		if ($$srcsent{$$alignments[$i]{src}[$s]} eq 
		    $$trgsent{$$alignments[$i]{trg}[$t]}){
		    push( @new, {src => [$$alignments[$i]{src}[$s]],
			         trg => [$$alignments[$i]{trg}[$t]]} );
		    splice(@{$$alignments[$i]{src}},$s,1);
		    splice(@{$$alignments[$i]{trg}},$t,1);
		    delete $$alignments[$i]{overlap}; # overlap is now incorrect
		    $modifications++;
		    $match = 1;
		    $matchedTrg{$t}=1;
		    last;
		}
	    }
	    next if ($match);

	    ## no match --> check trg sent's in next translation unit
	    foreach my $t (0..$#{$$alignments[$i+1]{trg}}){
		## source sentence matches sentence in next TU?
		## --> align them and create new TU
		if ($$srcsent{$$alignments[$i]{src}[$s]} eq 
		    $$trgsent{$$alignments[$i+1]{trg}[$t]}){
		    push( @new, {src => [$$alignments[$i]{src}[$s]],
			         trg => [$$alignments[$i+1]{trg}[$t]]} );
		    splice(@{$$alignments[$i]{src}},$s,1);
		    splice(@{$$alignments[$i+1]{trg}},$t,1);
		    delete $$alignments[$i]{overlap};
		    delete $$alignments[$i+1]{overlap};
		    $modifications++;
		    last;
		}
		last if ($t>$#{$$alignments[$i+1]{trg}});
	    }
	    last if ($s>$#{$$alignments[$i]{src}});
	}

	## check if there are still unmatched target sentences
	foreach my $t (0..$#{$$alignments[$i]{trg}}){
	    next if ($matchedTrg{$t});
	    ## not matched with any source sentence?
	    ## --> check source sent's from next TU
	    foreach my $s (0..$#{$$alignments[$i+1]{src}}){
		if ($$srcsent{$$alignments[$i+1]{src}[$s]} eq 
		    $$trgsent{$$alignments[$i]{trg}[$t]}){
		    push( @new, {src => [$$alignments[$i+1]{src}[$s]],
			         trg => [$$alignments[$i]{trg}[$t]]} );
		    splice(@{$$alignments[$i+1]{src}},$s,1);
		    splice(@{$$alignments[$i]{trg}},$t,1);
		    delete $$alignments[$i]{overlap};
		    delete $$alignments[$i+1]{overlap};
		    $modifications++;
		    last;
		}
	    }
	    last if ($t>$#{$$alignments[$i]{trg}});
	}
	push(@new,$$alignments[$i]);
    }
    push(@new,$$alignments[-1]);

    ## copy the new information and make new TUs
    ## if there were any modifications
    if ($modifications){
	# @{$alignments} = @new;
	my @sorted = ();
	foreach (sort { $new[$a]{src}[0] <=> $new[$b]{src}[0] } (0..$#new)){
	    # skip empty alignments ....
	    next unless (@{$new[$_]{src}} && @{$new[$_]{trg}});
	    push (@sorted,$new[$_]);
	}
	@{$alignments} = @sorted;
	@{$srcalg}=();
	@{$trgalg}=();
	make_translation_units($srcsent,$trgsent,
			       $alignments,
			       $srcalg,$trgalg);
    }
    return $modifications;
}


# edit distance
#-----------------------
# edit costs:
#   insertion     = 1
#   deletion      = 1
#   substitution  = 1.5
#   match         = 0

sub edit_distance {
    my ($src,$trg,$operations,$counts,$editCounts)=@_;

    my $backtrack = ref($operations) eq 'ARRAY' ? 1 : 0;

    # split into characters if necessary
    unless (ref($src) eq 'ARRAY'){my @a = split(//,$src);$src=[];@{$src}=@a;}
    unless (ref($trg) eq 'ARRAY'){my @a = split(//,$trg);$trg=[];@{$trg}=@a;}

    my (@l,@back,$i,$j);

    foreach my $i (0..@{$src}){ $l[$i][0]=$i;$back[$i][0]=[$i-1,0,'insert']; }
    foreach my $i (0..@{$trg}){ $l[0][$i]=$i;$back[0][$i]=[0,$i-1,'delete']; }

    for $i (1..@{$src}){
	for $j (1..@{$trg}){
	    if ($$src[$i-1] eq $$trg[$j-1]){
		if ($l[$i][$j-1]+1 < $l[$i-1][$j-1]){
		    if ($l[$i-1][$j] < $l[$i][$j-1]){
			$l[$i][$j]=$l[$i-1][$j]+1;
			if ($backtrack){
			    $back[$i][$j][0]=$i-1;
			    $back[$i][$j][1]=$j;
			    $back[$i][$j][2]='insert';
			}
		    }
		    else{
			$l[$i][$j]=$l[$i][$j-1]+1;
			if ($backtrack){
			    $back[$i][$j][0]=$i;
			    $back[$i][$j][1]=$j-1;
			    $back[$i][$j][2]='delete';
			}
		    }
		}
		elsif ($l[$i-1][$j]+1 < $l[$i-1][$j-1]){
		    $l[$i][$j]=$l[$i-1][$j]+1;
		    if ($backtrack){
			$back[$i][$j][0]=$i-1;
			$back[$i][$j][1]=$j;
			$back[$i][$j][2]='insert';
		    }
		}
		else{
		    $l[$i][$j]=$l[$i-1][$j-1];
		    if ($backtrack){
			$back[$i][$j][0]=$i-1;
			$back[$i][$j][1]=$j-1;
			$back[$i][$j][2]='match';
		    }
		}
	    }
	    else{
		## substitute costs a bit more (1.5 operations!)
		# if ($l[$i][$j-1] < $l[$i-1][$j-1]+0.5){
		if ($l[$i][$j-1] < $l[$i-1][$j-1]){
		    if ($l[$i-1][$j] < $l[$i][$j-1]){
			$l[$i][$j]=$l[$i-1][$j]+1;
			if ($backtrack){
			    $back[$i][$j][0]=$i-1;
			    $back[$i][$j][1]=$j;
			    $back[$i][$j][2]='insert';
			}
		    }
		    else{
			$l[$i][$j]=$l[$i][$j-1]+1;
			if ($backtrack){
			    $back[$i][$j][0]=$i;
			    $back[$i][$j][1]=$j-1;
			    $back[$i][$j][2]='delete';
			}
		    }
		}
		# elsif ($l[$i-1][$j] < $l[$i-1][$j-1]+0.5){
		elsif ($l[$i-1][$j] < $l[$i-1][$j-1]){
		    $l[$i][$j]=$l[$i-1][$j]+1;
		    if ($backtrack){
			$back[$i][$j][0]=$i-1;
			$back[$i][$j][1]=$j;
			$back[$i][$j][2]='insert';
		    }
		}
		else{
		    # $l[$i][$j]=$l[$i-1][$j-1]+1.5;
		    $l[$i][$j]=$l[$i-1][$j-1]+1;
		    if ($backtrack){
			$back[$i][$j][0]=$i-1;
			$back[$i][$j][1]=$j-1;
			$back[$i][$j][2]='substitute';
		    }
		}
	    }
	}
    }
    my $InARow=0;
    if ($backtrack){
	@{$operations}=();
	$counts={} unless (ref($counts) eq 'HASH');
	my $i = @{$src};
	my $j = @{$trg};
	while ($i>0 || $j>0){
	    unshift(@{$operations},[$back[$i][$j][2],$i-1,$j-1]);
	    $$counts{$back[$i][$j][2]}++;
	    #----------------
	    # count number of non-match operations in a row
	    if ($back[$i][$j][2] eq 'match'){
		if ($InARow){
		    if ($InARow > $$counts{NonMatchInARow}){
			$$counts{NonMatchInARow} = $InARow;
		    }
		    $$counts{EditPositions}++;
		    $InARow=0;
		}
	    }
	    else{
		## NEW: safe frequency counts for each actual edit
		if (ref($editCounts) eq 'HASH'){
		    my ($ss,$tt)=('','');
		    if ($back[$i][$j][0]<$i){
			$ss = join('',@{$src}[$back[$i][$j][0]..$i-1]);
		    }
		    if ($back[$i][$j][1]<$j){
			$tt = join('',@{$trg}[$back[$i][$j][1]..$j-1]);
		    }
		    $$editCounts{"$ss:$tt"}++;
		    $$editCounts{"ALLEDITS"}++;
		}
		$InARow++;
	    }
	    ($i,$j)=($back[$i][$j][0],$back[$i][$j][1]);
	}
	if ($InARow){
	    if ($InARow > $$counts{NonMatchInARow}){
		$$counts{"NonMatchInARow"} = $InARow;
	    }
	    $$counts{EditPositions}++;
	    $InARow=0;
	}
    }
    $l[-1][-1];
}




sub print_ces_header{
    my $fh = shift;
    print $fh '<?xml version="1.0" encoding="utf-8"?>'."\n";
    print $fh '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'."\n";
    print $fh '<cesAlign version="1.0">'."\n";
}

sub simple_sim{
    return 0 if (length($_[0]) != length($_[1]));
    my $safe = 0;
    $safe = 1 if (ref($_[2]) eq 'HASH');
    my @c1 = split(//,$_[0]);
    my @c2 = split(//,$_[1]);
    my $diff=0;
    my %ch=();
    for (0..$#c1){
	if ($c1[$_] ne $c2[$_]){
	    $diff++;
	    $ch{"$c1[$_]:$c2[$_]"}++;
	    if ($safe){
		${$_[2]}{"$c1[$_]:$c2[$_]"}++;
		${$_[2]}{"ALLEDITS"}++;
	    }
	}
    }
    return 1 if (keys %ch < 2);
    return 1 if ((keys %ch < 3) && ($#c1 > 6));
    return 1 if ((keys %ch < 4) && ($#c1 > 12));
    return 0;
#    return 1 if ((keys %ch < 3) && ($#c1 > 6));
}


sub print_ces{
    my ($src,$trg,$srcalg,$trgalg,$alg)=@_;

    print $FP "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FI "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FL "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FO "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FM "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FA "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";

    my %diffCounts=();
    my %categoryCounts=();
    my @categoryList=();
    my $category = undef;
    my $countMisaligned = 0;

    foreach my $i (0..$#{$alg}){
	# next unless ($$srcalg[$i]);
	# next unless ($$trgalg[$i]);

	## identical strings
	if ($$srcalg[$i] eq $$trgalg[$i]){
	    $countMisaligned=0;
	    $categoryList[$i] = 'identical';
	    next;
	}
	unless ($$srcalg[$i] && $$trgalg[$i]){
	    $categoryList[$i] = 'empty';
	    next;
	}

	## decide what kind of category to write to ....
	# my $fh;
	my $srctmp = $$srcalg[$i];
	my $trgtmp = $$trgalg[$i];

	$srctmp=~s/\P{IsAlnum}//g;
	$trgtmp=~s/\P{IsAlnum}//g;

#	$srctmp=~s/\P{IsL}//g;
#	$trgtmp=~s/\P{IsL}//g;

	my $srctmp2 = $$srcalg[$i];
	my $trgtmp2 = $$trgalg[$i];

	$srctmp2=~s/\s//g;
	$trgtmp2=~s/\s//g;

	if ($srctmp eq $trgtmp){
	    # $COUNT{PCT}++;
	    # $fh = $FP;
	    $category = 'pct';
	}
	elsif ( (split(/\s+/,$$srcalg[$i]) != split(/\s+/,$$trgalg[$i])) &&
		( simple_sim($srctmp,$trgtmp) || simple_sim($srctmp2,$trgtmp2) )){
	    # $COUNT{SPELLING}++;
	    # $fh = $FL;
	    $category = 'spelling';
	}
	else{
#	    my @srctok = split(/\s+/,$$srcalg[$i]);
#	    my @trgtok = split(/\s+/,$$trgalg[$i]);
	    # my @srctok = grep(/^\p{IsL}+$/,split(/\s+/,lc($$srcalg[$i])));
	    # my @trgtok = grep(/^\p{IsL}+$/,split(/\s+/,lc($$trgalg[$i])));
	    my @srctok = grep(/\P{IsP}/,split(/\s+/,lc($$srcalg[$i])));
	    my @trgtok = grep(/\P{IsP}/,split(/\s+/,lc($$trgalg[$i])));
	    my @operations = ();
	    my %counts = ();
	    my $dist = edit_distance(\@srctok,\@trgtok,\@operations,\%counts);
	    my $minsize = @srctok>@trgtok ? @trgtok : @srctok;
	    # my $maxsize = @srctok<@trgtok ? @trgtok : @srctok;

	    $diffCounts{INSERT} += $counts{insert};
	    $diffCounts{DELETE} += $counts{delete};

	    ## only some inserted text!
	    if ( ($#srctok != $#trgtok) && ($counts{match} == $minsize)){
		# $COUNT{INSERT}++;
		# $fh = $FI;
		$category = 'insert';
	    }

	    ## only substitutions --> check if this is spelling differences only
	    elsif ( (!$counts{insert}) and (!$counts{delete}) ){
		my $similar = 1;
		foreach my $o (@operations){
		    if ($$o[0] eq 'substitute'){
			next if (simple_sim($srctok[$$o[1]],
					    $trgtok[$$o[2]],
					    \%diffCounts));
			my @CharOps=();
			my %CharCounts=();
			my $dist = edit_distance($srctok[$$o[1]],
						 $trgtok[$$o[2]],
						 \@CharOps,
						 \%CharCounts,
						 \%diffCounts);
			my $maxlen = 
			    length($srctok[$$o[1]]) > length($trgtok[$$o[2]]) ?
			    length($srctok[$$o[1]]) : length($trgtok[$$o[2]]);

#			if ( ($dist/($maxlen*1.5) > 0.7) || 
#			     ($CharCounts{NonMatchInARow} > 2) ){

			## check cases that seem to indicate
			## that there is more than just a spelling error

			## more than one edit and distance > 0.5
			if ( ($dist>1) && ($dist/$maxlen > 0.5) ){
			    $similar = 0;
			}
			## for longer words: distance > 0.4
			elsif ( ($maxlen > 5) && ($dist>1) && 
				($dist/$maxlen > 0.4) ){
			    $similar = 0;
			}
			## more than one place has changed: distance > 0.3
			elsif ( ($CharCounts{EditPositions} > 1) &&
				($dist/$maxlen > 0.3) ){
			    $similar = 0;
			}
			## more than 2 edit operations in a row
			elsif ($CharCounts{NonMatchInARow} > 2){
			    $similar = 0;
			}
			## otherwise: assume it is a spelling error
			else{
			    print "spelling: $srctok[$$o[1]] - $trgtok[$$o[2]]\n";
			}
		    }
		}
		if ($similar){
		    # $COUNT{SPELLING}++;
		    # $fh = $FL;
		    $category = 'spelling';
		}
		else{
		    # $COUNT{OTHER}++;
		    # $fh = $FO;
		    $category = 'other';
		}
	    }
	    else{
		# $COUNT{OTHER}++;
		# $fh = $FO;
		$category = 'other';
	    }
	}


	if ($category eq 'other'){

	    ## one sentence is more than twice as long?
	    ## probably a mistake! 
	    ## (unless we have almost perfect overlap and no previous misalign)
	    if (length($$srcalg[$i]) > 2 * length($$trgalg[$i])){
		unless ( ($countMisaligned == 0) &&
			 (exists $$alg[$i]{overlap}) &&
			 $$alg[$i]{overlap} > 0.9){
		    $category = 'misaligned';
		    $countMisaligned++;
		}
	    }
	    elsif (length($$trgalg[$i]) > 2 * length($$srcalg[$i])){
		unless ( ($countMisaligned == 0) &&
			 (exists $$alg[$i]{overlap}) &&
			 $$alg[$i]{overlap} > 0.9){
		    $category = 'misaligned';
		    $countMisaligned++;
		}
	    }
	    ## check, if there are some matching words
	    ## --> if not? good indication of a misalignment!
	    else{
		my @srcsent = split(/\s+/,$$srcalg[$i]);
		my @trgsent = split(/\s+/,$$trgalg[$i]);
		my %words=();
		foreach (@srcsent){
		    $words{$_}++;
		}
		my $match = 0;
		my $lowLetterExists = $$trgalg[$i]=~/\p{IsLl}/ ? 1 : 0;
		foreach (@trgsent){
		    if (exists $words{$_}){
			## some ad-hoc heuristics to make different types 
			## of tokens more important than others
			## TODO: this should be more properly been done ....
			#
			# right now:
			# - if the token includes a non-punctuation character:
			#   * count matches weighted by a length-factor (lf)
			#   * if there are lower-case letters in the sentece
			#     and the token starts with upper-case:
			#     mulitply with 1.2 (extra reward)
			# - if the token is a question or exclamation mark:
			#   count as 0.8 match
			# - other punctuation only count as 0.3
			# 
			if (/\P{IsP}/){
			# if (/\p{IsAlnum}/){
			    my $lf = (length($_)+15)/20;
			    if ($lowLetterExists && /^\p{IsLu}/){
				$lf*=1.2;
			    }
			    $match+=$lf;
			    # $match++;
			}
			elsif (/[?!]/){
			    $match+=0.8;
			}
			else {
			    $match+=0.3;
			}
		    }
		}
		if (keys %words){
		    unless (($match/(keys %words)) > 
			    (1-0.9**($countMisaligned+1))){

			## if previous alignment was OK
			## and the time overlap is above 0.6
			## --> say that this one is OK as well
			unless ( ($i > 0) && ($countMisaligned == 0) &&
				 (exists $$alg[$i]{overlap}) &&
				 $$alg[$i]{overlap} > 0.6){

			    ## if this is the first alignment
			    ## and the time overlap is over 0.8
			    ## --> say that this is also still OK
			    unless ( ($i == 0) && 
				     (exists $$alg[$i]{overlap}) &&
				     $$alg[$i]{overlap} > 0.8){
				$category = 'misaligned';
				$countMisaligned++;
			    }
			}
		    }
		}
	    }
	}
	else{
	    ## reset subsequent misaligned units counter
	    $countMisaligned=0;
	}

	$categoryCounts{$category}++;
	$categoryList[$i] = $category;

        # print $fh "<link id=\"SL$i\" xtargets=\"";
        # if (ref($alg->[$i]->{src}) eq 'ARRAY'){
        #     print $fh join(' ',@{$alg->[$i]->{src}});
        # }
        # print $fh ';';
        # if (ref($alg->[$i]->{trg}) eq 'ARRAY'){
        #     print $fh join(' ',@{$alg->[$i]->{trg}});
        # }
        # print $fh "\" />\n";
    }


    ## if there are many alignments that are marked with "spelling"
    ## --> assume that the entire file is full of spelling errors
    ## if there are many alignments that are marked with "misaligned"
    ## --> assume that the entire file is full of misalignments
    ##
    my $category='mixed';
    if (($categoryCounts{spelling} > 
	 ($categoryCounts{insert} + $categoryCounts{other})) && 
	($categoryCounts{spelling} > $categoryCounts{misaligned})){
	    $category = 'spelling';
    }
    elsif (($categoryCounts{misaligned} > 
	    ($categoryCounts{insert} + $categoryCounts{other})) && 
	   ($categoryCounts{spelling} <= $categoryCounts{misaligned})){
	$category = 'misaligned';
    }
    ## if there is only a few things that are always different
    ## (= many edits but only a few edit types (not more than 10) )
    ## + at least 10 times more edits than categories
    ## + at least 10 times more edits than insertions + deletions
    elsif ($diffCounts{ALLEDITS} && (scalar %diffCounts < 12 )){
	if (((scalar %diffCounts)/$diffCounts{ALLEDITS}) < 0.1){
	    if ((($diffCounts{INSERT} + $diffCounts{DELETE} ) /
		 $diffCounts{ALLEDITS}) < 0.1){
		$category = 'spelling';
	    }
	}
    }

    ## print some log information about edit frequencies
    if ($category eq 'spelling'){
	my $count=0;
	foreach (sort {$diffCounts{$b} <=> $diffCounts{$a}} keys %diffCounts){
	    next if (/(INSERT|DELETE|ALLEDITS)/);
	    print "edit frequencies: $_ ($diffCounts{$_})\n";
	    $count++;
	    last if ($count>20);
	}
    }

    # category spelling/misaligned overwrites insert/other
    foreach my $i (0..$#{$alg}){
	if (($categoryList[$i] eq 'insert') || ($categoryList[$i] eq 'other')){
	    if (($category eq 'spelling') || ($category eq 'misaligned')){
		$categoryList[$i] = $category;
	    }
	}
    }

    foreach my $i (0..$#{$alg}){
	# next unless ($$srcalg[$i]);
	# next unless ($$trgalg[$i]);
	# next if ($$srcalg[$i] eq $$trgalg[$i]);

	## choose the best category:
	## - punctuation differences are always OK
	## - insertions/other: only of the subtitle pair is not otherwise 
	##                     marked as "full of spelling errors"
	## - otherwise: spelling!

	my $fh;
	if ($categoryList[$i] eq 'pct'){
	    $fh = $FP;
	    $COUNT{PCT}++;
	}
	elsif ($categoryList[$i] eq 'misaligned'){
	    $fh = $FM;
	    $COUNT{MISALIGNED}++;
	}
	elsif ($categoryList[$i] eq 'spelling'){
	    $fh = $FL;
	    $COUNT{SPELLING}++;
	}
	elsif ($categoryList[$i] eq 'insert'){
	    $fh = $FI;
	    $COUNT{INSERT}++;
	}
	elsif ($categoryList[$i] eq 'other'){
	    $fh = $FO;
	    $COUNT{OTHER}++;
	}

	## print all alignments (unless marked as misaligned)
	unless ($categoryList[$i] eq 'misaligned'){
	    print $FA "<link id=\"SL$i\" xtargets=\"";
	    if (ref($alg->[$i]->{src}) eq 'ARRAY'){
		print $FA join(' ',@{$alg->[$i]->{src}});
	    }
	    print $FA ';';
	    if (ref($alg->[$i]->{trg}) eq 'ARRAY'){
		print $FA join(' ',@{$alg->[$i]->{trg}});
	    }
	    print $FA "\" ";
	    if (exists $alg->[$i]->{overlap}){
		printf $FA "overlap=\"%5.3f\" ",$alg->[$i]->{overlap};
	    }
	    print $FA "/>\n";
	    # print $FA "\" />\n";
	    $COUNT{ALL}++;
	}

	next if ($categoryList[$i] eq 'identical');
	next if ($categoryList[$i] eq 'empty');

	## finally: print to the selected file!
        print $fh "<link id=\"SL$i\" xtargets=\"";
        if (ref($alg->[$i]->{src}) eq 'ARRAY'){
            print $fh join(' ',@{$alg->[$i]->{src}});
        }
        print $fh ';';
        if (ref($alg->[$i]->{trg}) eq 'ARRAY'){
            print $fh join(' ',@{$alg->[$i]->{trg}});
        }
	print $fh "\" ";
	if (exists $alg->[$i]->{overlap}){
	    printf $fh "overlap=\"%5.3f\" ",$alg->[$i]->{overlap};
	}
	print $fh "/>\n";
        # print $fh "\" />\n";

    }


    print $FP "</linkGrp>\n";
    print $FI "</linkGrp>\n";
    print $FL "</linkGrp>\n";
    print $FO "</linkGrp>\n";
    print $FM "</linkGrp>\n";
    print $FA "</linkGrp>\n";
}



sub print_ces_old{
    my ($src,$trg,$srcalg,$trgalg,$alg)=@_;

    print "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";

    foreach my $i (0..$#{$alg}){
	next unless ($$srcalg[$i]);
	next unless ($$trgalg[$i]);
	next if ($$srcalg[$i] eq $$trgalg[$i]);
        print "<link id=\"SL$i\" xtargets=\"";
        if (ref($alg->[$i]->{src}) eq 'ARRAY'){
            print join(' ',@{$alg->[$i]->{src}});
        }
        print ';';
        if (ref($alg->[$i]->{trg}) eq 'ARRAY'){
            print join(' ',@{$alg->[$i]->{trg}});
        }
        print "\" />\n";
    }
    print "</linkGrp>\n";
}



sub print_ces_tail{
    my $fh = shift;
    print $fh "</cesAlign>\n";
}

sub compute_bleu{
    my ($srcsent,$trgsent) = @_;

    my $lowercase = 0;
    my @REF=();
    my $s=0;
    my $ref=1;

    foreach (@{$trgsent}){
	chomp;
	push @{$REF[$s++]}, $_;
    }


    my(@CORRECT,@TOTAL,$length_translation,$length_reference);
    my $s=0;
    foreach (@{$srcsent}){
	chomp;
	$_ = lc if $lowercase;
	my @WORD = split;
	my %REF_NGRAM = ();
	my $length_translation_this_sentence = scalar(@WORD);
	my ($closest_diff,$closest_length) = (9999,9999);
	foreach my $reference (@{$REF[$s]}) {
#      print "$s $_ <=> $reference\n";
	    $reference = lc($reference) if $lowercase;
	    my @WORD = split(' ',$reference);
	    my $length = scalar(@WORD);
	    my $diff = abs($length_translation_this_sentence-$length);
	    if ($diff < $closest_diff) {
		$closest_diff = $diff;
		$closest_length = $length;
		# print STDERR "$s: closest diff ".abs($length_translation_this_sentence-$length)." = abs($length_translation_this_sentence-$length), setting len: $closest_length\n";
	    } elsif ($diff == $closest_diff) {
		$closest_length = $length if $length < $closest_length;
		# from two references with the same closeness to me
		# take the *shorter* into account, not the "first" one.
	    }
	    for(my $n=1;$n<=4;$n++) {
		my %REF_NGRAM_N = ();
		for(my $start=0;$start<=$#WORD-($n-1);$start++) {
		    my $ngram = "$n";
		    for(my $w=0;$w<$n;$w++) {
			$ngram .= " ".$WORD[$start+$w];
		    }
		    $REF_NGRAM_N{$ngram}++;
		}
		foreach my $ngram (keys %REF_NGRAM_N) {
		    if (!defined($REF_NGRAM{$ngram}) || 
			$REF_NGRAM{$ngram} < $REF_NGRAM_N{$ngram}) {
			$REF_NGRAM{$ngram} = $REF_NGRAM_N{$ngram};
#	    print "$i: REF_NGRAM{$ngram} = $REF_NGRAM{$ngram}<BR>\n";
		    }
		}
	    }
	}
	$length_translation += $length_translation_this_sentence;
	$length_reference += $closest_length;
	for(my $n=1;$n<=4;$n++) {
	    my %T_NGRAM = ();
	    for(my $start=0;$start<=$#WORD-($n-1);$start++) {
		my $ngram = "$n";
		for(my $w=0;$w<$n;$w++) {
		    $ngram .= " ".$WORD[$start+$w];
		}
		$T_NGRAM{$ngram}++;
	    }
	    foreach my $ngram (keys %T_NGRAM) {
		$ngram =~ /^(\d+) /;
		my $n = $1;
		# my $corr = 0;
#	print "$i e $ngram $T_NGRAM{$ngram}<BR>\n";
		$TOTAL[$n] += $T_NGRAM{$ngram};
		if (defined($REF_NGRAM{$ngram})) {
		    if ($REF_NGRAM{$ngram} >= $T_NGRAM{$ngram}) {
			$CORRECT[$n] += $T_NGRAM{$ngram};
			# $corr =  $T_NGRAM{$ngram};
#	    print "$i e correct1 $T_NGRAM{$ngram}<BR>\n";
		    }
		    else {
			$CORRECT[$n] += $REF_NGRAM{$ngram};
			# $corr =  $REF_NGRAM{$ngram};
#	    print "$i e correct2 $REF_NGRAM{$ngram}<BR>\n";
		    }
		}
		# $REF_NGRAM{$ngram} = 0 if !defined $REF_NGRAM{$ngram};
		# print STDERR "$ngram: {$s, $REF_NGRAM{$ngram}, $T_NGRAM{$ngram}, $corr}\n"
	    }
	}
	$s++;
    }
    my $brevity_penalty = 1;
    my $bleu = 0;

    my @bleu=();

    for(my $n=1;$n<=4;$n++) {
	if (defined ($TOTAL[$n])){
	    $bleu[$n]=($TOTAL[$n])?$CORRECT[$n]/$TOTAL[$n]:0;
	    # print STDERR "CORRECT[$n]:$CORRECT[$n] TOTAL[$n]:$TOTAL[$n]\n";
	}else{
	    $bleu[$n]=0;
	}
    }

    if ($length_reference==0){
	printf STDERR "BLEU = 0, 0/0/0/0 (BP=0, ratio=0, hyp_len=0, ref_len=0)\n" if ($opt_v);
	return 0;
    }

    if ($length_translation<$length_reference) {
	$brevity_penalty = exp(1-$length_reference/$length_translation);
    }
    $bleu = $brevity_penalty * exp((my_log( $bleu[1] ) +
				    my_log( $bleu[2] ) +
				    my_log( $bleu[3] ) +
				    my_log( $bleu[4] ) ) / 4) ;
    if ($opt_v){
	printf STDERR "BLEU = %.2f, %.1f/%.1f/%.1f/%.1f (BP=%.3f, ratio=%.3f, hyp_len=%d, ref_len=%d)\n",
	100*$bleu,
	100*$bleu[1],
	100*$bleu[2],
	100*$bleu[3],
	100*$bleu[4],
	$brevity_penalty,
	$length_translation / $length_reference,
	$length_translation,
	$length_reference;
    }

    return $bleu;
}

sub my_log {
  return -9999999999 unless $_[0];
  return log($_[0]);
}



sub read_xml{
    my $file = shift;
    my $sent = shift;

    my $fh = new IO::File;
    if ($file=~/\.gz$/){
        $fh->open("gzip -cd < $file |") || die "cannot open $file!\n";
    }
    else{
        $fh->open("<$file") || die "cannot open $file!\n";
    }
#     binmode($fh,":utf8");                                                      

    my $p = new XML::Parser(Handlers => {Start => \&xml_start,
                                         End   => \&xml_end,
                                         Char  => \&xml_char});
    my $ph = $p->parse_start;

    $sent = {} unless (ref($sent) eq 'HASH');
    $ph->{SENT} = $sent;
    %{$ph->{SENT}} = ();

    while (<$fh>){
        # some additional cleanup, see: http://stackoverflow.com/questions/1016910/how-can-i-strip-invalid-xml-characters-from-strings-in-perl                             
	tr/\e\x00-\x08\x0A\x0B\x0C\x0E-\x19//d;
	$ph->parse_more($_);
    }
    $fh->close;
}

sub xml_start{
    my ($p,$e,%a) = @_;
    if ($e eq 's'){
	$p->{SENTID} = $a{id};
	$p->{WORDS} = [];
    }
    if (exists $p->{SENTID}){
	if ($e eq 'w'){
	    $p->{WORD} = '';
	}
    }
}

sub xml_char{
    my ($p,$c) = @_;
    if (exists $p->{WORD}){
	$p->{WORD} .= $c;
    }
}

sub xml_end{
    my ($p,$e) = @_;
    if ($e eq 's'){
	if (@{$p->{WORDS}}){
	    $p->{SENT}->{$p->{SENTID}} = join(' ',@{$p->{WORDS}});
	}
	delete $p->{WORDS};
	delete $p->{SENTID};
    }
    elsif ($e eq 'w'){
	if ($p->{WORD}){
	    push(@{$p->{WORDS}},$p->{WORD});
	    delete $p->{WORD};
	}
    }
}

