#!/usr/bin/perl

my %codes = (
afr => 'af',
alb => 'sq',
ara => 'ar',
arm => 'hy',
baq => 'eu',
ben => 'bn',
bos => 'bs',
bre => 'br',
bul => 'bg',
cat => 'ca',
chi => 'zh',
cze => 'cs',
dan => 'da',
dut => 'nl',
ell => 'el',
eng => 'en',
epo => 'eo',
est => 'et',
fin => 'fi',
fre => 'fr',
geo => 'ka',
ger => 'de',
glg => 'gl',
heb => 'he',
hin => 'hi',
hrv => 'hr',
hun => 'hu',
ice => 'is',
ind => 'id',
ita => 'it',
jpn => 'ja',
kaz => 'kk',
kor => 'ko',
lav => 'lv',
lit => 'lt',
mac => 'mk',
mal => 'ml',
may => 'ms',
nor => 'no',
per => 'fa',
pob => 'pt_br',
pol => 'pl',
por => 'pt',
rum => 'ro',
rus => 'ru',
scc => 'sr',
sin => 'si',
slo => 'sk',
slv => 'sl',
spa => 'es',
swe => 'sv',
tam => 'ta',
tel => 'te',
tgl => 'tl',
tha => 'th',
tur => 'tr',
    ukr => 'uk',
    urd => 'ur',
    vie => 'vi',
    zhe_en => 'zh_en',
    zhe_zh => 'zh_zh',
    zht => 'zh_tw',
    zt => 'zh_tw');

my %reverse = reverse %codes;


# my $OPUSHOME = '/usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2016';
# my $PIERREHOME = '/projects/researchers/researchers01/plison/data/opensubs2015/';
# my $DATAHOME = @ARGV ? shift(@ARGV) : 
#     '/usit/abel/u1/joerg/work/OpenSubtitles2016';

use Getopt::Std;
use vars qw($opt_d);
getopts('d:');


my $OPUSHOME = '/home/opus/OPUS/corpus/OpenSubtitles2016';
my $PIERREHOME = '/home/opus/OPUS/corpus/OpenSubtitles2016/plison';

my $DATAHOME  = $opt_d || '/srv/OPUS/corpus/OpenSubtitles2016';
my @languages = @ARGV ? @ARGV : sort keys %codes;



foreach (@languages){

    my $lang;
    if (exists $codes{$_}){
	$lang=$codes{$_};
    }
    elsif (exists $reverse{$_}){
	$lang=$_;
	$_ = $reverse{$_};
    }
    else{
	die "unknown language!";
    }

    if (-e "$PIERREHOME/$lang.tar.gz"){
	$_=$lang;
    }
    elsif (-e "$PIERREHOME/$lang-raw.tar.gz"){
	$_=$lang;
    }

    if (-e "$PIERREHOME/$_.tar.gz"){

	print STDERR "processing $_: copy to $lang ...\n";

	system("mkdir -p $DATAHOME/xml/$lang");
	system("mv $PIERREHOME/$_.tar.gz $DATAHOME/xml/$lang/");
	chdir("$DATAHOME/xml/$lang/");
	system("tar -xzf $_.tar.gz");
	system("rm -f $_.tar.gz");
	system("find . -name '*.xml' | xargs gzip -f");
	system("ln -s $DATAHOME/xml/$lang $OPUSHOME/xml/$lang")
	    unless (-e "$OPUSHOME/xml/$lang");
    }
    if (-e "$PIERREHOME/$_-raw.tar.gz"){

	print STDERR "processing raw $_: copy to $lang ...\n";

	system("mkdir -p $DATAHOME/raw/$lang");
	system("mv $PIERREHOME/$_-raw.tar.gz $DATAHOME/raw/$lang/");
	chdir("$DATAHOME/raw/$lang/");
	system("tar -xzf $_-raw.tar.gz");
	system("rm -f $_-raw.tar.gz");
	system("find . -name '*.xml' | xargs gzip -f");
	system("ln -s $DATAHOME/raw/$lang $OPUSHOME/raw/$lang")
	    unless (-e "$OPUSHOME/raw/$lang");
    }
}



