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


my $OPUSHOME = '/usit/abel/u1/joerg/OPUS/corpus/OpenSubtitles2016';
my $PIERREHOME = '/projects/researchers/researchers01/plison/data/opensubs2015/';
my $DATAHOME = @ARGV ? shift(@ARGV) : 
    '/usit/abel/u1/joerg/work/OpenSubtitles2016';

my @languages = @ARGV ? @ARGV : sort keys %codes;
# @languages = ('per');
# @languages = ('chi','eng','pob','rum');



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

    print STDERR "processing $_: copy to $lang ...\n";

    system("mkdir -p $DATAHOME/raw/$lang");
    system("cp $PIERREHOME/$_-raw.tar.gz $DATAHOME/raw/$lang/");
}



