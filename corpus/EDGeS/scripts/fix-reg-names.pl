#!/bin/env perl
#
# quick fix:
# add names to CWB registry files

my %names = (
    de01 => 'de01_mentelin',
    de02 => 'de02_koelner',
    de05 => 'de05_rosalino',
    de06 => 'de06_elberfelder',
    de07 => 'de07_slachter',
    en01 => 'en01_wycliffe',
    en02 => 'en02_coverdale',
    en03 => 'en03_great',
    en04 => 'en04_geneva',
    en05 => 'en05_bishop',
    en06 => 'en06_kjv',
    en07 => 'en07_challoner',
    en08 => 'en08_webster',
    en09 => 'en09_darby',
    nl01 => 'nl01_hernse',
    nl02 => 'nl02_nnnt',
    nl03 => 'nl03_delftse',
    nl04 => 'nl04_vorsterman',
    nl05 => 'nl05_liesvelt',
    nl06 => 'nl06_leuvense',
    nl08 => 'nl08_deuxaes',
    nl09 => 'nl09_staten',
    nl10 => 'nl10_lutherse',
    nl11 => 'nl11_hamelsveld',
    nl12 => 'nl12_professoren',
    nl13 => 'nl13_canisius',
    nl14 => 'nl14_nbg',
    nl15 => 'nl15_willibrord',
    nl16 => 'nl16_nbv',
    sv02 => 'sv02_karlxii',
    sv03 => 'sv03_kyrko',
    sv04 => 'sv04_sfb' );

foreach (keys %names){
    if (-e $_){
	system("sed -i 's/NAME.*\$/NAME \"$names{$_}\"/' $_");
    }
}
