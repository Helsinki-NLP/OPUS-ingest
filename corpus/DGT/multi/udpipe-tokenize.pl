#!/usr/bin/env perl
#-*-perl-*-
#
# run OPUS raw data through UDPipe
#
#   -l langid ..... set language
#   -L ............ lower-cased
#

use warnings;
use strict;
use open qw(:std :utf8);

use Getopt::Std;
use Ufal::UDPipe;


our ($opt_l,$opt_L);

getopts('l:L');

my $lang         = $opt_l || 'en';
# my $inputFormat  = 'horizontal';
my $inputFormat  = 'horizontal';
my $outputFormat = 'conllu';

my $OpusTools = '/home/joerg/OPUS/tools';
my $UDversion = '1.2-160523';
my $ModelDir = "$OpusTools/public/preprocess/udpipe/udpipe-ud-$UDversion";

my %UDmodels = (
# ancient-greek-proiel-ud-1.2-160523.udpipe
# ancient-greek-ud-1.2-160523.udpipe
    ar => 'arabic-ud-1.2-160523.udpipe',
    eu => 'basque-ud-1.2-160523.udpipe',
    bg => 'bulgarian-ud-1.2-160523.udpipe',
    hr => 'croatian-ud-1.2-160523.udpipe',
    cs => 'czech-ud-1.2-160523.udpipe',
    da => 'danish-ud-1.2-160523.udpipe',
    nl => 'dutch-ud-1.2-160523.udpipe',
    en => 'english-ud-1.2-160523.udpipe',
    et => 'estonian-ud-1.2-160523.udpipe',
# finnish-ftb-ud-1.2-160523.udpipe',
    fi => 'finnish-ud-1.2-160523.udpipe',
    fr => 'french-ud-1.2-160523.udpipe',
    de => 'german-ud-1.2-160523.udpipe',
# gothic-ud-1.2-160523.udpipe
    el => 'greek-ud-1.2-160523.udpipe',
    he => 'hebrew-ud-1.2-160523.udpipe',
    hi => 'hindi-ud-1.2-160523.udpipe',
    hu => 'hungarian-ud-1.2-160523.udpipe',
    id => 'indonesian-ud-1.2-160523.udpipe',
    ga => 'irish-ud-1.2-160523.udpipe',
    it => 'italian-ud-1.2-160523.udpipe',
# latin-itt-ud-1.2-160523.udpipe
# latin-proiel-ud-1.2-160523.udpipe
    la => 'latin-ud-1.2-160523.udpipe',
    nb => 'norwegian-ud-1.2-160523.udpipe',
# old-church-slavonic-ud-1.2-160523.udpipe
    fa => 'persian-ud-1.2-160523.udpipe',
    pl => 'polish-ud-1.2-160523.udpipe',
    pt => 'portuguese-ud-1.2-160523.udpipe',
    ro => 'romanian-ud-1.2-160523.udpipe',
    sl => 'slovenian-ud-1.2-160523.udpipe',
    es => 'spanish-ud-1.2-160523.udpipe',
    sv => 'swedish-ud-1.2-160523.udpipe',
    ta => 'tamil-ud-1.2-160523.udpipe'
    );

my $modelFile = $ModelDir.'/'.$UDmodels{$lang};

print STDERR "Loading model: ";
my $model = Ufal::UDPipe::Model::load($modelFile);
$model or die "Cannot load model from file '$modelFile'\n";
print STDERR "done\n";

my $tokenizer = $model->newTokenizer($Ufal::UDPipe::Model::DEFAULT);
my $conllu_output = Ufal::UDPipe::OutputFormat::newOutputFormat($outputFormat);
my $sentence = Ufal::UDPipe::Sentence->new();


my $error = Ufal::UDPipe::ProcessingError->new();

while (<>){
    chomp;
    $tokenizer->setText($_);
    my @words = ();
    while ($tokenizer->nextSentence($sentence)) {

	# $model->tag($sentence, $Ufal::UDPipe::Model::DEFAULT);
	# $model->parse($sentence, $Ufal::UDPipe::Model::DEFAULT);
	my $processed = $conllu_output->writeSentence($sentence);

	my @lines = split(/\n/,$processed);
	foreach my $line (@lines){
	    my ($id,$word,$lemma,$upos,$xpos,$feats,$head,$deprel,$deps,$misc) 
		= split(/\t/,$line);
	    ## TODO: do something more clever with multi-span tokens
	    next if ($id=~/\-/);
#	    print "$word|$lemma|$upos|$head|$deprel ";
	    # print "$word ";
	    $word = lc($word) if ($opt_L);
	    push (@words,$word);
	}
    }
    print join(' ',@words);
    print "\n";
}
