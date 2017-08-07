#!/usr/bin/perl

use lib '/home/joerg/OPUS/tools/public/aligner/subalign/lib';

use strict;
use Text::SRT::Align qw/:all/;
use IO::File;
use Getopt::Std;
use File::Basename qw/dirname/;

use vars qw($opt_a $opt_t $opt_b $opt_B $opt_v);
getopts('a:t:b:B:v');

# my @ops;
# print edit_distance('aabsrdrfffg','abscdefgh',\@ops);
# print edit_distance('abscdefgh','aabsrdrfffg',\@ops);
# print edit_distance('aabsrdrfffg','abscd',\@ops);
# print edit_distance('abscd','aabsrdrfffg',\@ops);
# print edit_distance(['a','s','s','b'],'abscdefg',\@ops);
# print edit_distance(['a','s','s','b'],['aa','a','s'],\@ops);

my $MIN_ALG_SCORE = $opt_a || 1;
my $MIN_TIME_OVERLAP = $opt_t || 0.5;
my $MIN_BLEU = $opt_b || 0.5;
my $LOW_BLEU = $opt_B || 0.8;

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
    print STDERR "I need more than 1 subtitle as input!\n";
    exit 0;
}

unless (-d dirname($outbase)){
    system("mkdir -p ".dirname($outbase));
}

my $diff_punct_file = $outbase.'.pct.xml.gz';
my $diff_space_file = $outbase.'.space.xml.gz';
my $diff_spelling_file = $outbase.'.spell.xml.gz';
my $diff_other_file = $outbase.'.other.xml.gz';

my ($FP,$FS,$FL,$FO);

open $FP,"| gzip -c > $diff_punct_file" || 
    die "cannot open $diff_punct_file!\n";
open $FS,"| gzip -c > $diff_space_file" || 
    die "cannot open $diff_space_file!\n";
open $FL,"| gzip -c > $diff_spelling_file" || 
    die "cannot open $diff_spelling_file!\n";
open $FO,"| gzip -c > $diff_other_file" || 
    die "cannot open $diff_other_file!\n";

&print_ces_header($FP);
&print_ces_header($FS);
&print_ces_header($FL);
&print_ces_header($FO);

my %COUNT=();


# read all time frames

my @TimeFrames=();
foreach my $s (0..$#subs){
    $TimeFrames[$s] = [];
    Text::SRT::Align::read_time_frames("$srtdir/$subs[$s]",$TimeFrames[$s]);
}
my $reldir=$srtdir;
$reldir=~s/^xml\///;

foreach my $s (0..$#subs){
    foreach my $t ($s+1..$#subs){

	my $overlap = Text::SRT::Align::time_overlap_ratio($TimeFrames[$s],
							   $TimeFrames[$t]);
	if ($overlap < $MIN_TIME_OVERLAP){
	    print STDERR "overlap($subs[$s],$subs[$t] = $overlap  --> skip\n"
		if ($opt_v);
	    next;
	}

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
	    &make_translation_units(\%srcsent,\%trgsent,
				   \@alignments,
				   \@srcalg,\@trgalg);

	    my $bleu = &compute_bleu(\@srcalg,\@trgalg);

	    if ($bleu > $MIN_BLEU){

		print STDERR "bleu ( $subs[$s],$subs[$t] ) = $bleu\n";

		## if the BLEU score is quite low:
		## check if we need to synchronize!
		if ($bleu < $LOW_BLEU){

		    my @alignments2=();
		    my $score = &align("$srtdir/$subs[$s]",
				       "$srtdir/$subs[$t]",
				       \@alignments2,
				       VERBOSE       => $opt_v,
				       BEST_ALIGN    => 1,
				       USE_IDENTICAL => 1,
				       TOK_LEN       => 5,
				       MAX_MATCHES   => 10,
				       # UPPER_CASE    => 1,
				       WINDOW        => 20);

		    my @srcalg2 = ();
		    my @trgalg2 = ();
		    make_translation_units(\%srcsent,\%trgsent,
					   \@alignments2,
					   \@srcalg2,\@trgalg2);
		    my $bleu2 = &compute_bleu(\@srcalg2,\@trgalg2);

		    ## better BLEU score? --> use this alignment
		    if ($bleu2 > $bleu){
			print STDERR "bleu2( $subs[$s],$subs[$t] ) = $bleu2\n";
			@alignments = @alignments2;
			@srcalg = @srcalg2;
			@trgalg = @trgalg2;
		    }
		}

		## yet another check with the algignment:
		## see if neighboring sentences are better matches.
		&check_link_neighbors(\%srcsent,\%trgsent,
				      \@alignments,
				      \@srcalg,\@trgalg);


		&print_ces("$reldir/$subs[$s]",
			   "$reldir/$subs[$t]",
			   \@srcalg,\@trgalg,
			   \@alignments);
	    }
	}
    }
}


&print_ces_tail($FP);
&print_ces_tail($FS);
&print_ces_tail($FL);
&print_ces_tail($FO);

close $FP;
close $FS;
close $FL;
close $FO;

unlink($diff_space_file) unless ($COUNT{SPACE});
unlink($diff_punct_file) unless ($COUNT{PCT});
unlink($diff_spelling_file) unless ($COUNT{SPELLING});
unlink($diff_other_file) unless ($COUNT{OTHER});


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
		    $modifications++;
		    last;
		}
	    }
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
		    $modifications++;
		    last;
		}
	    }
	}
    }
    push(@new,$$alignments[-1]);

    ## copy the new information and make new TUs
    ## if there were any modifications
    if ($modifications){
	@{$alignments} = @new;
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
    my ($src,$trg,$operations)=@_;

    my $backtrack = ref($operations) eq 'ARRAY' ? 1 : 0;

    # split into characters if necessary
    unless (ref($src) eq 'ARRAY'){my @a = split(//,$src);$src=[];@{$src}=@a;}
    unless (ref($trg) eq 'ARRAY'){my @a = split(//,$trg);$trg=[];@{$trg}=@a;}

    my (@l,@back,$i,$j);

    foreach my $i (0..$#{$src}){ $l[$i][0]=$i;$back[$i][0]=[$i-1,0,'insert']; }
    foreach my $i (0..$#{$trg}){ $l[0][$i]=$i;$back[0][$i]=[0,$i-1,'delete']; }

    for $i (1..$#{$src}){
	for $j (1..$#{$trg}){
	    if ($$src[$i] eq $$trg[$j]){
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
		if ($l[$i][$j-1] < $l[$i-1][$j-1]+0.5){
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
		elsif ($l[$i-1][$j] < $l[$i-1][$j-1]+0.5){
		    $l[$i][$j]=$l[$i-1][$j]+1;
		    if ($backtrack){
			$back[$i][$j][0]=$i-1;
			$back[$i][$j][1]=$j;
			$back[$i][$j][2]='insert';
		    }
		}
		else{
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
    if ($backtrack){
	@{$operations}=();
	my $i = $#{$src};
	my $j = $#{$trg};
	while ($i>0 || $j>0){
	    unshift(@{$operations},[$back[$i][$j][2],$i,$j]);
	    ($i,$j)=($back[$i][$j][0],$back[$i][$j][1]);
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



sub print_ces{
    my ($src,$trg,$srcalg,$trgalg,$alg)=@_;

    print $FP "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FS "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FL "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";
    print $FO "<linkGrp targType=\"s\" fromDoc=\"$src\" toDoc=\"$trg\">\n";

    foreach my $i (0..$#{$alg}){
	next unless ($$srcalg[$i]);
	next unless ($$trgalg[$i]);
	next if ($$srcalg[$i] eq $$trgalg[$i]);

	## decide what kind of category to write to ....
	my $fh;
	my $srctmp = $$srcalg[$i];
	my $trgtmp = $$trgalg[$i];
	$srctmp=~s/\p{IsSpace}//g;
	$trgtmp=~s/\p{IsSpace}//g;
	if ($srctmp eq $trgtmp){
	    $COUNT{SPACE}++;
	    $fh = $FS;
	}
	else{
	    $srctmp = $$srcalg[$i];
	    $trgtmp = $$trgalg[$i];
	    $srctmp=~s/\P{IsL}//g;
	    $trgtmp=~s/\P{IsL}//g;
	    if ($srctmp eq $trgtmp){
		$COUNT{PCT}++;
		$fh = $FP;
	    }
	    else{
		my $len = length($srctmp);
		$len = length($trgtmp) if (length($trgtmp)>$len);
		if (Text::SRT::Align::LCS($srctmp,$trgtmp)/$len > 0.9 ){
		    $COUNT{SPELLING}++;
		    $fh = $FL;
		}
		else{
		    $COUNT{OTHER}++;
		    $fh = $FO;
		}
	    }
	}

        print $fh "<link id=\"SL$i\" xtargets=\"";
        if (ref($alg->[$i]->{src}) eq 'ARRAY'){
            print $fh join(' ',@{$alg->[$i]->{src}});
        }
        print $fh ';';
        if (ref($alg->[$i]->{trg}) eq 'ARRAY'){
            print $fh join(' ',@{$alg->[$i]->{trg}});
        }
        print $fh "\" />\n";
    }

    print $FP "</linkGrp>\n";
    print $FS "</linkGrp>\n";
    print $FL "</linkGrp>\n";
    print $FO "</linkGrp>\n";
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
	chop;
	push @{$REF[$s++]}, $_;
    }


    my(@CORRECT,@TOTAL,$length_translation,$length_reference);
    my $s=0;
    foreach (@{$srcsent}){
	chop;
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
	$ph->parse_more($_);
    }
    $fh->close;

    return %{$ph->{SENT}};
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

