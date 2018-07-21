#!/usr/bin/perl

use lib '/home/joerg/OPUS/tools/public/aligner/subalign/lib';

use strict;
use Text::SRT::Align qw/:all/;
use IO::File;
use Getopt::Std;

use vars qw($opt_v);

getopts('v');

my $MIN_ALG_SCORE = 1;
my $MIN_TIME_OVERLAP = 0.5;
my $MIN_BLEU = 0.5;
my $LOW_BLEU = 0.8;

# my $srtdir=shift(@ARGV) || '../xml/en/2011/65889';
my $srtdir=shift(@ARGV) || '../xml/en/2001/14818';

opendir(my $dh, $srtdir) || die "can't opendir $srtdir: $!";
my @subs = grep { /\.xml.gz$/ && -f "$srtdir/$_" } readdir($dh);
closedir $dh;

unless ($#subs){
    print STDERR "I need more than 1 subtitle as input!\n";
    exit 0;
}


&print_ces_header();

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

		&print_ces("$reldir/$subs[$s]",
			   "$reldir/$subs[$t]",
			   \@srcalg,\@trgalg,
			   \@alignments);
	    }
	}
    }
}


&print_ces_tail();



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

sub print_ces_header{
    print '<?xml version="1.0" encoding="utf-8"?>'."\n";
    print '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'."\n";
    print '<cesAlign version="1.0">'."\n";
}

sub print_ces{
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
    print "</cesAlign>\n";
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

