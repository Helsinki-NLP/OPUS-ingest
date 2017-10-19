#!/usr/bin/env perl
#-*-perl-*-
#
# this is a sentence aligner based on Phillip Koehn's implementation used
# for aligning the EuroParl corpus
# http://people.csail.mit.edu/koehn/publications/europarl/
# (and his aligner is based on Gale&Church's length-based alignment approach)
#
# USAGE: sentalign [OPTIONS] srcfile trgfile > alignfile
#
# OPTIONS
#
#  -h 'hard-tag-re' .......... regular expression to match hard boundary tags
#  -i min_length ............. check for identical words (set minimal length)
#  -c threshold .............. use LCSR cognate filter (with threshold)
#  -w window ................. define size of sliding window (for all filters)
#  -d dic-file ............... use dictionary filter (using dic-file)
#                              (the dictionary has to be in UTF-8!)
#  -t ........................ use time-slot length instead of char length
#  -u ........................ cognate/identical filter for upper case words
#  -v ........................ verbose mode
#
#
# TODO
#
#  - re-align + dictionary filter?
#  - distance weighted cognate filter
#  - character pair weights for LCSR
#  - add at least a warning if number of hardboundaries is not identical
#

use strict;
use vars qw($opt_h $opt_l $opt_c $opt_w $opt_d $opt_i $opt_v $opt_t $opt_u);
use Getopt::Std;
use XML::Parser;
use Encode;


getopts('h:c:w:l:i:d:vtu');

## set some global variables
## mostly command line arguments

my $VERBOSE = $opt_v;

my $SENT_TAG = 's';
my $WORD_TAG = 'w';

my $HARD_TAG = $opt_h;         # hard tag is a regular expression!

my $USE_IDENTICAL = $opt_i;    # use cognate filter (identical words)
my $USE_COGNATES = $opt_c;     # use cognate filter (lcsr)
my $USE_DICTIONARY = $opt_d;   # use dictionary filter
my $UPPER_CASE = $opt_u;       # cognate filter with upper case words only

my $TIME_LENGTH = $opt_t;      # align based on time slot length

my $MINLENGTH = $opt_l || 7;
my $WINDOW = $opt_w || 5;


my %PRIOR;
$PRIOR{1}{1} = 0.89;
$PRIOR{1}{0} = 0.01/2;
$PRIOR{0}{1} = 0.01/2;
$PRIOR{2}{1} = 0.089/2;
$PRIOR{1}{2} = 0.089/2;
$PRIOR{2}{2} = 0.011;
$PRIOR{3}{1} = 0.011/2;
$PRIOR{1}{3} = 0.011/2;

# # for subtitles:
# $PRIOR{1}{1} = 0.6829; # 896
# $PRIOR{2}{1} = 0.0762; # 100
# $PRIOR{0}{1} = 0.0694; # 91
# $PRIOR{1}{0} = 0.0564; # 74
# $PRIOR{1}{2} = 0.0549; # 72
# $PRIOR{1}{3} = 0.0183; # 24
# $PRIOR{3}{1} = 0.0122; # 16



## read dictionary if necessary

my %DIC=();
if ($USE_DICTIONARY){
    ReadDictionary(\%DIC,$USE_DICTIONARY);
}


## open source and target files

my $src_file = shift(@ARGV);
my $trg_file = shift(@ARGV);

if ($src_file=~/\.gz$/){
    open SRC,"gzip -cd < $src_file |" || die "cannot open $src_file!\n";
}
else{open SRC,"<$src_file" || die "cannot open $src_file!\n";}
if ($trg_file=~/\.gz$/){
    open TRG,"gzip -cd < $trg_file |" || die "cannot open $trg_file!\n";
}
else{
    open TRG,"<$trg_file" || die "cannot open $trg_file!\n";
}


## create & initialize XML parser instances

my $src_parser = new XML::Parser(Handlers => {Start => \&XmlStart,
					      End => \&XmlEnd,
					      Default => \&XmlChar,
					  },);


my $trg_parser = new XML::Parser(Handlers => {Start => \&XmlStart,
					      End => \&XmlEnd,
					      Default => \&XmlChar,
					  },);

my $src_ph = $src_parser->parse_start;
my $trg_ph = $trg_parser->parse_start;

if ($USE_COGNATES || $USE_IDENTICAL || $USE_DICTIONARY){
    $src_ph->{STORE_WORDS} = 1;  # we want to store the actual words
    $trg_ph->{STORE_WORDS} = 1;  # if we want to apply a filter for
}


##---------------------------------------------------------------------
## now the main part!
##   - print the XML header for sentence alignment file
##   - run through the XML documents (one section section pair at a time)
##   - close XML files and print XML footer

&print_xmlheader($src_file,$trg_file);

my ($src_len,$trg_len,$src_id,$trg_id);
my $LINK_ID=0;

my %args = ( search_window => 20,
	     pillow => 1);

%{$args{prior}} = %PRIOR;


do{
    ($src_len,$trg_len,
     $src_id,$trg_id) = 
	 &GetNextBitextSegment(*SRC,*TRG,$src_ph,$trg_ph);
    if (@{$src_len} or @{$trg_len}){
#	my @links = &sentence_align($src_len,$trg_len,$src_id,$trg_id);
	my @links = &length_align($src_len,$trg_len,$src_id,$trg_id,%args);
	print_alignments(\@links);
    }
}
until ((not @{$src_len}) && (not @{$trg_len}));


close SRC;
close TRG;


&print_xmlfooter();


## end of main part
##---------------------------------------------------------------------


sub print_xmlheader{
    my ($src_file,$trg_file) = @_;

    print '<?xml version="1.0" encoding="utf-8"?>'."\n";
    print '<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">'."\n";
    print '<cesAlign toDoc="'.$trg_file;
    print '" version="1.0" fromDoc="'.$src_file;
    print '">'."\n";
    print ' <linkGrp targType="s" toDoc="'.$trg_file;
    print '" fromDoc="'.$src_file.'">'."\n";
}

sub print_xmlfooter{
    print "</linkGrp>\n";
    print "</cesAlign>\n";
}



##---------------------------------------------------------------------
## read sections from the XML documents


## read one sentence

sub ReadNextSentence{
    my ($FH,$parser) = @_;

    $parser->{SENTENCE_END} = 0;

    while (not $parser->{SENTENCE_END}){
	my $line = <$FH>;                    # read next line
	if (not $line){                      # end of file?
	    $parser->{SENTENCE_END}=1;       # --> stop
	    $parser->{SECTION_END}=1;
	}
	else{
	    $parser->parse_more($line);      # else: parse line
	}
    }
}



## read one section

sub GetNextBitextSegment{
    my ($SFH,$TFH,$src_parser,$trg_parser) = @_;

    my @src_length=();
    my @trg_length=();

    my @src_ids=();
    my @trg_ids=();

    my $last_src = undef;    # idx of last source sentence in section
    my $last_trg = undef;    # idx of last target sentence in section


    $src_parser->{SENT_IDS} = [] unless defined $src_parser->{SENT_IDS};
    $trg_parser->{SENT_IDS} = [] unless defined $trg_parser->{SENT_IDS};

    if (not @{$src_parser->{SENT_IDS}}){          # no more sentences stored?
	$src_parser->{SENT_LENGTHS} = [0];        # start again at position 0
	$src_parser->{SECTION_END} = 0;           # reset end-of-section flag
	if ($TIME_LENGTH){
	    $src_parser->{TIME_LENGTHS} = [0];
	}
    }
    if (not @{$trg_parser->{SENT_IDS}}){
	$trg_parser->{SENT_LENGTHS} = [0];
	$trg_parser->{SECTION_END} = 0;
	if ($TIME_LENGTH){
	    $trg_parser->{TIME_LENGTHS} = [0];
	}
    }

    ## main loop to read sentences from XML files

    while ((not $src_parser->{SECTION_END}) ||
	   (not $trg_parser->{SECTION_END})){

	## we like to have about the same number of sentences in both languages
	## --> read source sentences while there are less than target sents
	## --> read target sentences while there are less than source sents
	## (stop if end-of-section reached)

	if (($#{$src_parser->{SENT_IDS}} < $#{$trg_parser->{SENT_IDS}}) && 
	    (not $src_parser->{SECTION_END})){
	    ReadNextSentence($SFH,$src_parser);
	}
	elsif (($#{$trg_parser->{SENT_IDS}} < $#{$src_parser->{SENT_IDS}}) &&
	       (not $trg_parser->{SECTION_END})){
	    ReadNextSentence($TFH,$trg_parser);
	}
	## in case we reached end-of-section in one of them
	## or we have the same amount of sentences
	## --> read from source and target
	else{
	    if (not $src_parser->{SECTION_END}){
		ReadNextSentence($SFH,$src_parser);
	    }
	    if (not $trg_parser->{SECTION_END}){
		ReadNextSentence($TFH,$trg_parser);
	    }
	}

	## apply word filter to find possible boundaries
	($last_src,$last_trg) = WordFilter($src_parser,$trg_parser);
	if ((defined $last_src) && (defined $last_trg)){last;}

    }

    # if no filter sugestion any new section borders
    # --> take all sentences!

    if (not defined $last_src){
	$last_src = $#{$src_parser->{SENT_IDS}};
    }

    if (not defined $last_trg){
	$last_trg = $#{$trg_parser->{SENT_IDS}};
    }

    # get sentence parameters from section

    if ($last_src>=0){
	foreach (0..$last_src){
	    my $time_length = shift(@{$src_parser->{TIME_LENGTHS}});
	    my $char_length = shift(@{$src_parser->{SENT_LENGTHS}});
	    shift(@{$src_parser->{TIME}});
	    if ($TIME_LENGTH){push(@src_length,$time_length);}
	    else{push(@src_length,$char_length);}
	    push(@src_ids,shift(@{$src_parser->{SENT_IDS}}));
	    if (defined $src_parser->{WORDS}){
		shift(@{$src_parser->{WORDS}});
	    }
	}
	if ($TIME_LENGTH){
	    push(@src_length,$src_parser->{TIME_LENGTHS}->[-1]);;
	}
	else{
	    push(@src_length,$src_parser->{SENT_LENGTHS}->[-1]);;
	}
    }


    if ($last_trg>=0){
	foreach (0..$last_trg){
	    my $time_length = shift(@{$trg_parser->{TIME_LENGTHS}});
	    my $char_length = shift(@{$trg_parser->{SENT_LENGTHS}});
	    shift(@{$trg_parser->{TIME}});
	    if ($TIME_LENGTH){push(@trg_length,$time_length);}
	    else{push(@trg_length,$char_length);}
	    push(@trg_ids,shift(@{$trg_parser->{SENT_IDS}}));
	    if (defined $trg_parser->{WORDS}){
		shift(@{$trg_parser->{WORDS}});
	    }
	}
	if ($TIME_LENGTH){
	    push(@trg_length,$trg_parser->{TIME_LENGTHS}->[-1]);;
	}
	else{
	    push(@trg_length,$trg_parser->{SENT_LENGTHS}->[-1]);;
	}

    }

    return (\@src_length,\@trg_length,\@src_ids,\@trg_ids);

}











##---------------------------------------------------------------------
## WordFilter
##   run with a sliding window through the bitext segment
##   and check if there are matching word pairs
##   in the sentence pairs considered


sub WordFilter{

    my ($src_parser,$trg_parser)=@_;

    my $i = $#{$src_parser->{SENT_IDS}};
    my $j = $#{$trg_parser->{SENT_IDS}};

    if (not exists $src_parser->{WORDS}){return (undef,undef);}
    if (not exists $trg_parser->{WORDS}){return (undef,undef);}

    my $src_sents = $src_parser->{WORDS};
    my $trg_sents = $trg_parser->{WORDS};

    if ($i<0){return ($i,$j);}
    if ($j<0){return ($i,$j);}

    my $w = 0;
    while ($w < $WINDOW){
	if ($i>$j){
	    if ($i-$w >= 0 && $i-$w <= $j){
		if (find_match($$src_sents[$i],$$trg_sents[$i-$w])){
		    print STDERR " in ",$i,' ',$i-$w,"!\n" if $VERBOSE;
		    return($i,$i-$w);
		}
	    }
	    if ($w > 0 && $i+$w <= $j){
		if (find_match($$src_sents[$i],$$trg_sents[$i+$w])){
		    print STDERR " in ",$i,' ',$i+$w,"!\n" if $VERBOSE;
		    return($i-$w,$j);
		}
	    }
	}
	else{
	    if ($j-$w >= 0 && $j-$w <= $i){
		if (find_match($$src_sents[$j-$w],$$trg_sents[$j])){
		    print STDERR " in ",$j-$w,' ',$j,"!\n" if $VERBOSE;
		    return($j-$w,$j);
		}
	    }
	    if ($w > 0 && $j+$w <= $i){
		if (find_match($$src_sents[$j+$w],$$trg_sents[$j])){
		    print STDERR " in ",$j+$w,' ',$j,"!\n" if $VERBOSE;
		    return($j+$w,$j);
		}
	    }
	}
	$w++;
    }
    return (undef,undef);
}



sub find_match{
    if ($USE_IDENTICAL){
	if (identical(@_,$USE_IDENTICAL)){return 1;}
    }
    if ($USE_COGNATES){
	if (cognates(@_,$MINLENGTH,$USE_COGNATES)){return 1;}
    }
    if ($USE_DICTIONARY){
	if (dictionary(@_)){return 1;}
    }
    return 0;
}



sub identical{
    my ($src,$trg,$minlength)=@_;

    ## make lower case version of first word
    ## to avoid problems with the 'only upper case words'
    ## (quite ad-hoc)
    if ($UPPER_CASE){
	$$src[0] = lc($$src[0]);
	$$trg[0] = lc($$trg[0]);
    }

    my %src_words=();
    my %trg_words=();
    foreach (@{$src}){
	$src_words{$_}++;
    }
    foreach (@{$trg}){
	$trg_words{$_}++;
    }

    foreach (keys %src_words){
	if (length($_)<$minlength){next;}
	if ($UPPER_CASE){if ($_!~/^\p{Lu}/){next;}}
	if (defined $trg_words{$_}){
	    print STDERR "found identical string '$_' " if $VERBOSE;
	    return 1;
	}
    }
    return 0;
}



sub cognates{

    my ($src,$trg,$minlength,$minscore)=@_;

    ## make lower case version of first word
    ## to avoid problems with the 'only upper case words'
    ## (quite ad-hoc)
    if ($UPPER_CASE){
	$$src[0] = lc($$src[0]);
	$$trg[0] = lc($$trg[0]);
    }

    my %src_words=();
    my %trg_words=();
    foreach (@{$src}){
	$src_words{$_}++;
    }
    foreach (@{$trg}){
	$trg_words{$_}++;
    }

    foreach my $s (keys %src_words){
	my $s_len = length($s);
	if ($s_len < $minlength){next;}
	if ($UPPER_CASE){if ($s!~/^\p{Lu}/){next;}}
	foreach my $t (keys %trg_words){
	    my $t_len = length($t);
	    if ($t_len < $minlength){next;}
	    if ($UPPER_CASE){if ($t!~/^\p{Lu}/){next;}}
	    if ($s eq $t){
		print STDERR "found cognate '$s' - '$t' " if $VERBOSE;
		return 1;
	    }
	    if ($s_len > $t_len){
		if ($t_len/$s_len < $minscore){next;}
		if (LCS($s,$t)/$s_len > $minscore){
		    print STDERR "found cognate '$s' - '$t' " if $VERBOSE;
		    return 1;
		}
	    }
	    else{
		if ($s_len/$t_len < $minscore){next;}
		if (LCS($s,$t)/$t_len > $minscore){
		    print STDERR "found cognate '$s' - '$t' " if $VERBOSE;
		    return 1;
		}
	    }
	}
    }
    return 0;
}



sub LCS {
    my ($src,$trg)=@_;
    my (@l,$i,$j);
    my @src_let=split(//,$src);		# split string into char
    my @trg_let=split(//,$trg);
    unshift (@src_let,'');
    unshift (@trg_let,'');
  for ($i=0;$i<=$#src_let;$i++){                # initialize the matrix
      $l[$i][0]=0;
  }
  for ($i=0;$i<=$#trg_let;$i++){
      $l[0][$i]=0;
  }                                                       # weight function is

    for $i (1..$#src_let){
	for $j (1..$#trg_let){
	    if ($src_let[$i] eq $trg_let[$j]){
		$l[$i][$j]=$l[$i-1][$j-1]+1;
	    }
	    else{
		if ($l[$i][$j-1]>$l[$i-1][$j]){
		    $l[$i][$j]=$l[$i][$j-1];
		}
		else{
		    $l[$i][$j]=$l[$i-1][$j];
		}
	  }
	}
    }
    return $l[$#src_let][$#trg_let];
}


sub ReadDictionary{
    my ($dic,$file)=@_;
    if (-e $file){
	if ($file=~/\.gz$/){
	    open DIC,"gzip -cd < $file |" || 
		die "cannot open dictionary file $file!\n";
	}
	else{
	    open DIC,"< $file " || die "cannot open dictionary file $file!\n";
	}
	binmode(DIC,":encoding(utf8)");
	while (<DIC>){
	    chomp;
	    my ($src,$trg) = split(/\s/);
	    $$dic{$src}{$trg}++;
	}
    }
}




sub dictionary{
    my ($src,$trg)=@_;

    my %src_words=();
    my %trg_words=();
    foreach (@{$src}){
	$src_words{$_}++;
    }
    foreach (@{$trg}){
	$trg_words{$_}++;
    }

    foreach my $s (keys %src_words){
	if (exists $DIC{$s}){
	    foreach my $t (keys %trg_words){
		if (exists $DIC{$s}{$t}){
		    print STDERR "found in dic '$s' - '$t' " if $VERBOSE;
		    return 1;
		}
	    }
	}
    }

    return 0;
}




##---------------------------------------------------------------------
## handlers for XML parser

sub XmlStart{
    my ($p,$e,%attr) = @_;
    if ($e eq $SENT_TAG){
	$p->{START2SID}->{$p->{SENT_LENGTHS}->[-1]}=$attr{id};
	push(@{$p->{SENT_IDS}},$attr{id});
	push(@{$p->{SENT_LENGTHS}},$p->{SENT_LENGTHS}->[-1]);
	$p->{SENT_OPEN} = 1;
    }
    if ($e eq $WORD_TAG){
	$p->{WORD_OPEN} = 1;
	if ($p->{STORE_WORDS}){
	    my $sidx = $#{$p->{SENT_IDS}};
	    push (@{$p->{WORDS}->[$sidx]},'');
	}
    }

    if ($TIME_LENGTH){
	if ($e eq 'time'){
	    if (ref($p->{TIME}) ne 'ARRAY'){
		$p->{TIME}=[];
		$p->{SEC_PER_CHAR} = 1;   # wild guess ....
	    }
	    my $sidx = $#{$p->{SENT_IDS}};

	    if ($sidx>=0){
		## time at sent start --> easy case: just store as start point
		if ($p->{SENT_LENGTHS}->[-1] == $p->{SENT_LENGTHS}->[-2]){
		    $p->{TIME}->[$sidx]->{start}=time2sec($attr{value});
		    $p->{TIME}->[$sidx]->{first}=$p->{TIME}->[$sidx]->{start};
		    $p->{TIME}->[$sidx]->{first_pos}=$p->{SENT_LENGTHS}->[-1];
		}
		## first time tag in this sentence but not at start position
		elsif ($#{$p->{TIME}} < $sidx){
		    $p->{TIME}->[$sidx]->{first}=time2sec($attr{value});
		    $p->{TIME}->[$sidx]->{first_pos}=$p->{SENT_LENGTHS}->[-1];
		}
		## other time events -> just store as last seen time
		else{
		    $p->{TIME}->[$sidx]->{last}=time2sec($attr{value});
		    $p->{TIME}->[$sidx]->{last_pos}=$p->{SENT_LENGTHS}->[-1];
		    ## update SEC_PER_CHAR estimation
		    my $sec = $p->{TIME}->[$sidx]->{last} - 
			$p->{TIME}->[$sidx]->{first};
		    my $chars = $p->{TIME}->[$sidx]->{last_pos} - 
			$p->{TIME}->[$sidx]->{first_pos};
		    if ($sec>0 && $chars>0){
			$p->{SEC_PER_CHAR} = $sec/$chars;
		    }
		}
	    }
	}
    }
}


sub XmlEnd{
    my $p=shift;
    my $e=shift;
    if ($e eq $SENT_TAG){
	delete $p->{SENT_OPEN};
	$p->{SENTENCE_END} = 1;         # flag to indicate end-of-sentence
    }
    elsif (defined $HARD_TAG){
	if ($e=~/$HARD_TAG/){
	    $p->{SECTION_END} = 1;	
	    print STDERR "hard boundary ($e) found!\n" if $VERBOSE;
	}
    }
    if ($e eq $WORD_TAG){
	delete $p->{WORD_OPEN};
    }

    if ($TIME_LENGTH && ($e eq $SENT_TAG)){
	my $sidx = $#{$p->{SENT_IDS}};
	## hardest case: no time at all found in this sentence	
	if ($#{$p->{TIME}}<$sidx){
	    if ($sidx == 0){
		$p->{TIME}->[$sidx]->{start} = 0;
	    }
	    else{
		## take end of last sentence as start for new one
		$p->{TIME}->[$sidx]->{start} = $p->{TIME}->[$sidx-1]->{end};
	    }
	}
	elsif (not $p->{TIME}->[$sidx]->{start}){
	    my $before = $p->{TIME}->[$sidx]->{first_pos} - 
		$p->{SENT_LENGTHS}->[-2];
	    if (defined $p->{TIME}->[$sidx]->{last}){
		my $secs = $p->{TIME}->[$sidx]->{last} - 
		    $p->{TIME}->[$sidx]->{first};
		my $chars = $p->{TIME}->[$sidx]->{last_pos} - 
		    $p->{TIME}->[$sidx]->{first_pos};
		if ($secs>0 && $chars>0){
		    $p->{TIME}->[$sidx]->{start} = 
			$p->{TIME}->[$sidx]->{first} - 
			$before*$secs/$chars;
		}
		else{
		    $p->{TIME}->[$sidx]->{start} = 
			$p->{TIME}->[$sidx]->{first}-
			$p->{SEC_PER_CHAR}*$before;
		}
	    }
	    else{
		$p->{TIME}->[$sidx]->{start} = 
		    $p->{TIME}->[$sidx]->{first} - $p->{SEC_PER_CHAR}*$before;
	    }
	}
	if (defined $p->{TIME}->[$sidx]->{last}){
	    my $after = $p->{SENT_LENGTHS}->[-1] - 
		$p->{TIME}->[$sidx]->{last_pos};
	    if ($after){
		my $secs = $p->{TIME}->[$sidx]->{last} - 
		    $p->{TIME}->[$sidx]->{first};
		my $chars = $p->{TIME}->[$sidx]->{last_pos} - 
		    $p->{TIME}->[$sidx]->{first_pos};
		if ($secs>0 && $chars>0){
		    $p->{TIME}->[$sidx]->{end} = 
			$p->{TIME}->[$sidx]->{last} + $after*$secs/$chars;
		}
		else{
		    $p->{TIME}->[$sidx]->{end} = 
			$p->{TIME}->[$sidx]->{first}+
			$after*$p->{SEC_PER_CHAR};
		}
	    }
	    else{
		$p->{TIME}->[$sidx]->{end} = $p->{TIME}->[$sidx]->{last};
	    }
	}
	else{
	    my $chars=$p->{SENT_LENGTHS}->[-1]-$p->{SENT_LENGTHS}->[-2];
	    $p->{TIME}->[$sidx]->{end} = 
		$p->{TIME}->[$sidx]->{start} + $chars*$p->{SEC_PER_CHAR};
	}
	my $time = $p->{TIME}->[$sidx]->{end}-$p->{TIME}->[$sidx]->{start};
	if ($time>0){
	    push (@{$p->{TIME_LENGTHS}},$p->{TIME_LENGTHS}->[-1]+$time);
	}
	else{
	    ## don't allow time<=0 --> add small time length ...
	    print STDERR "warning! sentence $sidx is $time seconds long\n";
	    push (@{$p->{TIME_LENGTHS}},$p->{TIME_LENGTHS}->[-1]+0.001);
	}
    }

}


sub XmlChar{
    my $p=shift;
    my $e=shift;

    if ($p->{SENT_OPEN}){
	if ($p->{WORD_OPEN}){
	    $p->{SENT_LENGTHS}->[-1] += length($e);
	}
    }

    if ($p->{STORE_WORDS}){
	if ($p->{WORD_OPEN}){
	    my $sidx = $#{$p->{SENT_IDS}};
	    $p->{WORDS}->[$sidx]->[-1] .= $e;
	}
    }
}


sub time2sec{
    my $time=shift;
    my ($h,$m,$s,$ms)=split(/[^0-9\-]/,$time);
    if (not $h){$h=0;}
    if (not $m){$m=0;}
    if (not $s){$s=0;}
    if (not $ms){$ms=0;}
    my $sec = 3600*$h+60*$m+$s+$ms/1000;
    return $sec;
}




##---------------------------------------------------------------------
## alignment related functions


# print sentence links

sub print_alignments{
    my $LINKS = shift;
    foreach my $i (0..$#{$LINKS}){
	print '<link id="SL'.$LINK_ID.'" xtargets="';
	if (ref($$LINKS[$i]{src}) eq 'ARRAY'){
	    print join(' ',@{$$LINKS[$i]{src}});
	}
	print ';';
	if (ref($$LINKS[$i]{trg}) eq 'ARRAY'){
	    print join(' ',@{$$LINKS[$i]{trg}});
	}
	print "\" />\n";
	$LINK_ID++;
    }
}







# this is a vanilla implementation of church and gale
sub sentence_align {
  my ($LEN1,$LEN2,$IDS1,$IDS2) = @_;

  if (not @{$LEN1}){
      my @LINKS=();
      $LINKS[0]{src} = [];
      foreach (0..$#{$LEN2}-1){
#	  push(@{$LINKS[0]{trg}},$$IDS2{$$LEN2[$_]});
	  push(@{$LINKS[0]{trg}},$$IDS2[$_]);
      }
      return @LINKS;
  }
  if (not @{$LEN2}){
      my @LINKS=();
      $LINKS[0]{trg} = [];
      foreach (0..$#{$LEN1}-1){
#	  push(@{$LINKS[0]{src}},$$IDS1{$$LEN1[$_]});
	  push(@{$LINKS[0]{src}},$$IDS1[$_]);
      }
      return @LINKS;
  }

  # parameters
  my %PRIOR;
#  $PRIOR{1}{1} = 0.89;
#  $PRIOR{1}{0} = 0.01/2;
#  $PRIOR{0}{1} = 0.01/2;
#  $PRIOR{2}{1} = 0.089/2;
#  $PRIOR{1}{2} = 0.089/2;
##  $PRIOR{2}{2} = 0.011;
#  $PRIOR{3}{1} = 0.011/2;
#  $PRIOR{1}{3} = 0.011/2;

# for subtitles:
  $PRIOR{1}{1} = 0.6829; # 896
  $PRIOR{2}{1} = 0.0762; # 100
  $PRIOR{0}{1} = 0.0694; # 91
  $PRIOR{1}{0} = 0.0564; # 74
  $PRIOR{1}{2} = 0.0549; # 72
  $PRIOR{1}{3} = 0.0183; # 24
  $PRIOR{3}{1} = 0.0122; # 16
 

  # dynamic programming
  my (@COST,@BACK);
  $COST[0][0] = 0;
  for(my $i1=0;$i1<=$#{$LEN1};$i1++) {
    for(my $i2=0;$i2<=$#{$LEN2};$i2++) {
      next if $i1 + $i2 == 0;
      $COST[$i1][$i2] = 1e10;
      foreach my $d1 (keys %PRIOR) {
	next if $d1>$i1;
	foreach my $d2 (keys %{$PRIOR{$d1}}) {
	  next if $d2>$i2;
	  my $cost = $COST[$i1-$d1][$i2-$d2] - log($PRIOR{$d1}{$d2}) +  
	    &match($$LEN1[$i1]-$$LEN1[$i1-$d1], $$LEN2[$i2]-$$LEN2[$i2-$d2]);
#	  print "($i1->".($i1-$d1).",$i2->".($i2-$d2).") [".($LEN1[$i1]-$LEN1[$i1-$d1]).",".($LEN2[$i2]-$LEN2[$i2-$d2])."] = $COST[$i1-$d1][$i2-$d2] - ".log($PRIOR{$d1}{$d2})." + ".&match($LEN1[$i1]-$LEN1[$i1-$d1], $LEN2[$i2]-$LEN2[$i2-$d2])." = $cost\n";
	  if ($cost < $COST[$i1][$i2]) {
	    $COST[$i1][$i2] = $cost;
	    @{$BACK[$i1][$i2]} = ($i1-$d1,$i2-$d2);
	  }
	}
      }
#      print $COST[$i1][$i2]."($i1-$BACK[$i1][$i2][0],$i2-$BACK[$i1][$i2][1]) ";
    }
#    print "\n";
  }


  # back tracking
  my %NEXT=();
  my @LINKS=();

  my $i1 = $#{$LEN1};
  my $i2 = $#{$LEN2};

  while($i1>0 || $i2>0) {
#    print "back $i1 $i2\n";
      @{$NEXT{$BACK[$i1][$i2][0]}{$BACK[$i1][$i2][1]}} = ($i1,$i2);
      ($i1,$i2) = ($BACK[$i1][$i2][0],$BACK[$i1][$i2][1]);
  }
  while($i1<$#{$LEN1} || $i2<$#{$LEN2}) {
      push(@LINKS,{});
#     print "fwd $i1 $i2\n";
#      print '<link id="SL'.$LINK_ID.'" xtargets="';
      for(my $i=$i1;$i<$NEXT{$i1}{$i2}[0];$i++) {
#	  my $sid = $$IDS1{$$LEN1[$i]};
	  my $sid = $$IDS1[$i];
	  push(@{$LINKS[-1]{src}},$sid);
#	  print " " unless $i == $i1;
#	  print $$IDS1[$i];
      }
#      print ";";
      for(my $i=$i2;$i<$NEXT{$i1}{$i2}[1];$i++) {
#	  my $sid = $$IDS2{$$LEN2[$i]};
	  my $sid = $$IDS2[$i];
	  push(@{$LINKS[-1]{trg}},$sid);
#	  push(@{$LINKS[-1]{trg}},$$LEN2[$i]);
#	  print " " unless $i == $i2;
#	  print $$IDS2[$i];
      }
#      print "\" />\n";
      ($i1,$i2) = @{$NEXT{$i1}{$i2}};
  }  

  return @LINKS;
}


#####################################
## new version of sentence_align

sub length_align {
    my ( $LEN1, $LEN2, $IDS1, $IDS2, %args ) = @_;

    if ( not @{$LEN1} ) {
        my @LINKS = ();
        $LINKS[0]{src} = [];
        foreach ( 0 .. $#{$LEN2} - 1 ) {
            push( @{ $LINKS[0]{trg} }, $$IDS2[$_] );
        }
        return @LINKS;
    }
    if ( not @{$LEN2} ) {
        my @LINKS = ();
        $LINKS[0]{trg} = [];
        foreach ( 0 .. $#{$LEN1} - 1 ) {
            push( @{ $LINKS[0]{src} }, $$IDS1[$_] );
        }
        return @LINKS;
    }

    my $window = $args{search_window} || $#{$LEN2};
    my $ratio = $#{$LEN2}/$#{$LEN1};

    # dynamic programming
    my ( %COST, %BACK );
    $COST{0}{0} = 0;
    for ( my $i1 = 0; $i1 <= $#{$LEN1}; $i1++ ) {

        # define size of the search window
        my $size = $window;
#        if ($PILLOW) {
        if ($args{pillow}) {
            my $distance = $i1 > $#{$LEN1} / 2 ? $#{$LEN1} - $i1 : $i1;
            $size += 2 * int( sqrt($distance) + 0.5 );
        }

	my $pos   = int($i1*$ratio+0.5);
        my $start = $pos - $size > 0         ? $pos - $size : 0;
        my $end   = $pos + $size < $#{$LEN2} ? $pos + $size : $#{$LEN2};

        for ( my $i2 = $start; $i2 <= $end; $i2++ ) {
            next if $i1 + $i2 == 0;
            $COST{$i1}{$i2} = 1e10;
            foreach my $d1 ( keys %{ $args{prior} } ) {
                next if $d1 > $i1;
                next if ( !ref( $COST{ $i1 - $d1 } ) );
                foreach my $d2 ( keys %{ $args{prior}{$d1} } ) {
                    next if $d2 > $i2;
                    next if ( !defined $COST{ $i1 - $d1 }{ $i2 - $d2 } );
                    my $cost
                        = $COST{ $i1 - $d1 }{ $i2 - $d2 }
                        - log( $args{prior}{$d1}{$d2} ) 
                        + &match(
                        $$LEN1[$i1] - $$LEN1[ $i1 - $d1 ],
                        $$LEN2[$i2] - $$LEN2[ $i2 - $d2 ],
                        $args{mean}, $args{variance}
                        );
                    if ( $cost < $COST{$i1}{$i2} ) {
                        $COST{$i1}{$i2} = $cost;
                        @{ $BACK{$i1}{$i2} } = ( $i1 - $d1, $i2 - $d2 );
                    }
                }
            }
        }
    }

    # back tracking
    my %NEXT  = ();
    my @LINKS = ();

    my $i1 = $#{$LEN1};
    my $i2 = $#{$LEN2};

    while ( $i1 > 0 || $i2 > 0 ) {
        @{ $NEXT{ $BACK{$i1}{$i2}[0] }{ $BACK{$i1}{$i2}[1] } } = ( $i1, $i2 );
        ( $i1, $i2 ) = ( $BACK{$i1}{$i2}[0], $BACK{$i1}{$i2}[1] );
    }
    while ( $i1 < $#{$LEN1} || $i2 < $#{$LEN2} ) {
        push( @LINKS, {} );
        for ( my $i = $i1; $i < $NEXT{$i1}{$i2}[0]; $i++ ) {
            my $sid = $$IDS1[$i];
            push( @{ $LINKS[-1]{src} }, $sid );
        }
        for ( my $i = $i2; $i < $NEXT{$i1}{$i2}[1]; $i++ ) {
            my $sid = $$IDS2[$i];
            push( @{ $LINKS[-1]{trg} }, $sid );
        }
        ( $i1, $i2 ) = @{ $NEXT{$i1}{$i2} };
    }
    return @LINKS;
}


sub match {
    my ( $len1, $len2, $mean, $var ) = @_;
    $mean = 1 unless $mean;
    $var = 6.8 unless $var;

    if ( $len1 == 0 && $len2 == 0 ) { return 0; }
    my $avg = ( $len1 + $len2 / $mean ) / 2;
    my $z   = ( $mean * $len1 - $len2 ) / sqrt( $var * $avg );
    if ( $z < 0 ) { $z = -$z; }
    my $pd = 2 * ( 1 - &pnorm($z) );
    if ( $pd > 0 ) { return -log($pd); }
    return 25;
}

sub match_old {
  my ($len1,$len2) = @_;
  my $c = 1;
  my $s2 = 6.8;

  if ($len1==0 && $len2==0) { return 0; }
  my $mean = ($len1 + $len2/$c) / 2;
  my $z = ($c * $len1 - $len2)/sqrt($s2 * $mean);
  if ($z < 0) { $z = -$z; }
  my $pd = 2 * (1 - &pnorm($z));
  if ($pd>0) { return -log($pd); }
  return 25;
}

sub pnorm {
  my ($z) = @_;
  my $t = 1/(1 + 0.2316419 * $z);
  return 1 - 0.3989423 * exp(-$z * $z / 2) *
    ((((1.330274429 * $t 
	- 1.821255978) * $t 
       + 1.781477937) * $t 
      - 0.356563782) * $t
     + 0.319381530) * $t;
}

