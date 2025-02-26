#!/usr/bin/env perl
#
#  -o ......... overwrite existing files
#  -b ......... backup existing files and overwrite
#

use strict;
use File::Copy;
use File::Basename;
use Getopt::Std;
use YAML qw(DumpFile);


our($opt_o, $opt_b);
getopts('ob');

my $corpusdir   = shift(@ARGV);
my %statistics  = ();
my %info        = ();
my %GeneralInfo = ();
my $storagehome = 'https://object.pouta.csc.fi/OPUS-';


## read info and file statistics

if (-e "$corpusdir/releases.txt"){
    read_releases_file("$corpusdir/releases.txt");
}
if (-e "$corpusdir/info.txt"){
    read_info_file("$corpusdir/info.txt");
}
my $baseurl = $storagehome.basename($corpusdir);
if (-e "$corpusdir/index-filesize.txt"){
    read_index_file("$corpusdir/index-filesize.txt");
}
foreach my $v (keys %info){
    if (-e "$corpusdir/$v/README"){
	read_readme_file("$corpusdir/$v/README",$v);
    }
}

## dump info and statistics into YAML files
## macke backup copies if those files exist already

foreach my $v (keys %info){
    mkdir "$corpusdir/$v" unless (-d "$corpusdir/$v");
    my $InfoFile = "$corpusdir/$v/info.yaml";
    my $StatsFile = "$corpusdir/$v/statistics.yaml";
    if ($opt_b){
	move($InfoFile,$InfoFile.".".time()) if (-e $InfoFile);
	move($StatsFile,$StatsFile.".".time()) if (-e $StatsFile);
    }
    if ((! -e $InfoFile) || $opt_o){
	print "print corpus info to $InfoFile\n";
	DumpFile($InfoFile,$info{$v}) || die "cannot write to $InfoFile\n";
    }
    if ((!-e $StatsFile) || $opt_o){
	print "print corpus statistics to $StatsFile\n";
	DumpFile($StatsFile,$statistics{$v}) || die "cannot write to $StatsFile\n";
    }
}


## always write the general info file! (need to update release info)

if (exists $GeneralInfo{'latest_release'}){
    my $latest = $GeneralInfo{'latest_release'};
    $GeneralInfo{'number_of_languages'} = $info{$latest}{'number of languages'};
    $GeneralInfo{'bitexts'} = $info{$latest}{'number of language pairs'};
    $GeneralInfo{'number_of_files'} = $statistics{$latest}{'files'};
    ## if we want commas for thousands: uncomment next line
    # while($GeneralInfo{'number_of_files'} =~ s/(\d+)(\d\d\d)/$1\,$2/){};
    $GeneralInfo{'total_number_of_tokens'} = `numfmt --to=iec $info{$latest}{'tokens'}`;
    $GeneralInfo{'total_sentence_fragments'} = `numfmt --to=iec $info{$latest}{'sentences'}`;
    chomp($GeneralInfo{'total_number_of_tokens'});
    chomp($GeneralInfo{'total_sentence_fragments'});
}

my $GeneralInfoFile = "$corpusdir/info.yaml";
move($GeneralInfoFile,$GeneralInfoFile.".".time()) if (-e $GeneralInfoFile);
DumpFile($GeneralInfoFile,\%GeneralInfo) || die "cannot write to $GeneralInfoFile\n";



sub read_releases_file{
    my $file = shift;
    open(F,"<$file") || die "cannot read from $file";
    while (<F>){
	chomp;
	my ($version,$date) = split(/\t/);
	$info{$version}{'release date'} = $date;
	$GeneralInfo{releases}{$version} = $date;
	$GeneralInfo{'latest_release'} = $version;
    }
    close F;
}

sub read_readme_file{
    my $file = shift;
    my $version = shift;
    open(F,"<$file") || die "cannot read from $file";
    binmode(F,":utf8");

    my %counts = ();
    while (<F>){
	chomp;
	if (/^\s*(Website|Release date|License|Copyright|Source|Reference|Original source|Contact):\s+(.*)$/){
	    $info{$version}{lc($1)} = $2;
	    $GeneralInfo{lc($1)} = $2;
	}
	if (/^\s*Corpus Name:\s+(.*)$/){
	    $info{$version}{name} = $1;
	    $GeneralInfo{name} = $1;
	}
	
	## the following is very ad-hoc and may break in the future
	if (/^OPUS Website:/){
	    <F>;
	    $_ = <F>;
	    if (/\s+cite\s+/){
		$GeneralInfo{cite} = $_;
		<F>;
		$_ = <F>;
	    }
	    $GeneralInfo{description} = $_;
	    if ($_ = <F>){
		$GeneralInfo{description} .= $_;
	    }
	}
    }
    $GeneralInfo{website}=~s/\-[^\-]*?\.php/.php/ if (exists $GeneralInfo{website});
    delete $GeneralInfo{'release date'};
    close F;
}

sub read_index_file{
    my $file=shift;
    open(F,"<$file") || die "cannot read from $file";

    my %counts = ();
    while (<F>){
	chomp;
	s/^\s*//;
	my ($value,$key) = split(/\s+/);
	my ($version,$dir,$file) = split(/\//,$key);
	my ($langstr,$ext) = split(/\./,$file);
	next unless ($langstr && $ext);
	if ($dir eq 'raw'){
	    if ($ext eq 'zip'){
		# $statistics{$version}{monolingual}{$langstr}{download_size_xml} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{xml}{size} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{xml}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'xml'){
	    my @langs = split(/\-/,$langstr);
	    if ($#langs){
		if ($ext eq 'xml'){
		    # $statistics{$version}{bitexts}{$langstr}{download_size_alignments} = $value;
		    $statistics{$version}{bitexts}{$langstr}{downloads}{alignments}{size} = $value;
		    $statistics{$version}{bitexts}{$langstr}{downloads}{alignments}{url} = "$baseurl/$key";
		}
	    }
	    else{
		if ($ext eq 'zip'){
		    # $statistics{$version}{monolingual}{$langstr}{download_size_xml_tokenized} = $value;
		    $statistics{$version}{monolingual}{$langstr}{downloads}{'tokenized xml'}{size} = $value;
		    $statistics{$version}{monolingual}{$langstr}{downloads}{'tokenized xml'}{url} = "$baseurl/$key";
		}
	    }
	}
	elsif ($dir eq 'mono'){
	    if ($ext eq 'tok'){
		# $statistics{$version}{monolingual}{$langstr}{download_size_text_tokenized} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'tokenized text'}{size} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'tokenized text'}{url} = "$baseurl/$key";
	    }
	    elsif ($ext eq 'txt'){
		# $statistics{$version}{monolingual}{$langstr}{download_size_text} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'plain text'}{size} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'plain text'}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'moses'){
	    if ($ext eq 'txt'){
		$statistics{$version}{moses}{$langstr}{'download size'} = $value;
		$statistics{$version}{moses}{$langstr}{'download url'} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'parsed'){
	    if ($ext eq 'zip'){
		# $statistics{$version}{monolingual}{$langstr}{download_size_xml_parsed} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{parsed}{size} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{parsed}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'freq'){
	    if ($ext eq 'freq'){
		# $statistics{$version}{monolingual}{$langstr}{download_size_frequency_list} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'frequency list'}{size} = $value;
		$statistics{$version}{monolingual}{$langstr}{downloads}{'frequency list'}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'dic'){
	    if ($ext eq 'dic'){
		# $statistics{$version}{bitexts}{$langstr}{download_size_dictionary} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'word alignment dictionary'}{size} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'word alignment dictionary'}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'smt'){
	    if ($ext eq 'alg'){
		# $statistics{$version}{bitexts}{$langstr}{download_size_word_alignments} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'word alignments'}{size} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'word alignments'}{url} = "$baseurl/$key";
	    }
	    else{
		# $statistics{$version}{bitexts}{$langstr}{download_size_smt_phrase_table} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'smt phrase table'}{size} = $value;
		$statistics{$version}{bitexts}{$langstr}{downloads}{'smt phrase table'}{url} = "$baseurl/$key";
	    }
	}
	elsif ($dir eq 'tmx'){
	    if ($ext eq 'tmx'){
		# $statistics{$version}{tmx}{$langstr}{download_size} = $value;
		$statistics{$version}{tmx}{$langstr}{'download size'} = $value;
		$statistics{$version}{tmx}{$langstr}{'download url'} = "$baseurl/$key";
	    }
	}
    }
    close F;
    foreach my $v (keys %statistics){
	foreach my $l (keys %{$statistics{$v}{bitexts}}){
	    my ($src,$trg) = split(/\-/,$l);
	    if (exists $statistics{$v}{monolingual}{$src}){
		# $statistics{$v}{bitexts}{$l}{download_size_xml_source_language} = $statistics{$v}{monolingual}{$src}{download_size_xml};
		$statistics{$v}{bitexts}{$l}{downloads}{'tokenized source language'}{size} = $statistics{$v}{monolingual}{$src}{downloads}{'tokenized xml'}{size};
		$statistics{$v}{bitexts}{$l}{downloads}{'tokenized source language'}{url} = $statistics{$v}{monolingual}{$src}{downloads}{'tokenized xml'}{url};
		$statistics{$v}{bitexts}{$l}{downloads}{'source language'}{size} = $statistics{$v}{monolingual}{$src}{downloads}{xml}{size};
		$statistics{$v}{bitexts}{$l}{downloads}{'source language'}{url} = $statistics{$v}{monolingual}{$src}{downloads}{xml}{url};
	    };
	    if (exists $statistics{$v}{monolingual}{$trg}){
		# $statistics{$v}{bitexts}{$l}{download_size_xml_target_language} = $statistics{$v}{monolingual}{$trg}{download_size_xml};
		$statistics{$v}{bitexts}{$l}{downloads}{'tokenized target language'}{size} = $statistics{$v}{monolingual}{$trg}{downloads}{'tokenized xml'}{size};
		$statistics{$v}{bitexts}{$l}{downloads}{'tokenized target language'}{url} = $statistics{$v}{monolingual}{$trg}{downloads}{'tokenized xml'}{url};
		$statistics{$v}{bitexts}{$l}{downloads}{'target language'}{size} = $statistics{$v}{monolingual}{$trg}{downloads}{xml}{size};
		$statistics{$v}{bitexts}{$l}{downloads}{'target language'}{url} = $statistics{$v}{monolingual}{$trg}{downloads}{xml}{url};
	    }
	}
    }
}

sub read_info_file{
    my $file=shift;
    open(F,"<$file") || die "cannot read from $file";

    my %counts = ();
    while (<F>){
	chomp;
	my ($key,$value) = split(/\:/);
	my ($corpus,$version,$dir,$file) = split(/\//,$key);
	my ($langstr,$type) = split(/\./,$file);
	my @langs = split(/\-/,$langstr);
	if ($type eq 'tmx'){
	    push(@{$counts{$corpus}{$version}{bitexts}{$langstr}{tmx}},$value);
	}
	elsif ($type eq 'txt'){
	    push(@{$counts{$corpus}{$version}{bitexts}{$langstr}{text}},$value);
	}
	elsif ($type eq 'info'){
	    if ($#langs){
		push(@{$counts{$corpus}{$version}{bitexts}{$langstr}{xml}},$value);
	    }
	    else{
		push(@{$counts{$corpus}{$version}{monolingual}{$langstr}{xml}},$value);
	    }
	}
	else{
	    if ($#langs){
		push(@{$counts{$corpus}{$version}{bitexts}{$langstr}{$type}},$value);
	    }
	    else{
		push(@{$counts{$corpus}{$version}{monolingual}{$langstr}{$type}},$value);
	    }
	}
    }
    close F;
    
    foreach my $c (keys %counts){
	foreach my $v (keys %{$counts{$c}}){
	    $info{$v}{name} = $c;
	    $info{$v}{release} = $v;
	    $GeneralInfo{name} = $c;
	    foreach my $l (keys %{$counts{$c}{$v}{monolingual}}){
		push(@{$info{$v}{languages}},$l);
		my @values = sort {$a <=> $b} @{$counts{$c}{$v}{monolingual}{$l}{xml}};
		if ($#values == 2){
		    $statistics{$v}{monolingual}{$l}{files} = $values[0];
		    $statistics{$v}{monolingual}{$l}{sentences} = $values[1];
		    $statistics{$v}{monolingual}{$l}{tokens} = $values[2];
		    $statistics{$v}{files} += $values[0];
		}
		else{
		    print STDERR "unexpected number of counts for monotexts in $c/$v/$l/xml\n";
		}
	    };
	    foreach my $l (keys %{$counts{$c}{$v}{bitexts}}){
		push(@{$info{$v}{'language pairs'}},$l);
		if (exists $counts{$c}{$v}{bitexts}{$l}{xml}){
		    # my @values = sort {$a <=> $b} @{$counts{$c}{$v}{bitexts}{$l}{xml}};
		    my @values = @{$counts{$c}{$v}{bitexts}{$l}{xml}};
		    if ($#values == 3){
			$statistics{$v}{bitexts}{$l}{files} = $values[0];
			$statistics{$v}{bitexts}{$l}{alignments} = $values[1];
			$statistics{$v}{bitexts}{$l}{'source language tokens'} = $values[2];
			$statistics{$v}{bitexts}{$l}{'target language tokens'} = $values[3];
		    }
		    else{
			print STDERR "unexpected number of counts for bitexts in $c/$v/$l/xml\n";
		    }
		}
		if (exists $counts{$c}{$v}{bitexts}{$l}{text}){
		    # my @values = sort {$a <=> $b} @{$counts{$c}{$v}{bitexts}{$l}{text}};
		    my @values = @{$counts{$c}{$v}{bitexts}{$l}{text}};
		    if ($#values == 2){
			$statistics{$v}{moses}{$l}{alignments} = $values[0];
			$statistics{$v}{moses}{$l}{'source language tokens'} = $values[1];
			$statistics{$v}{moses}{$l}{'target language tokens'} = $values[2];
		    }
		    else{
			print STDERR "unexpected number of counts for bitexts in $c/$v/$l/txt\n";
		    }
		}
		if (exists $counts{$c}{$v}{bitexts}{$l}{tmx}){
		   #  my @values = sort {$a <=> $b} @{$counts{$c}{$v}{bitexts}{$l}{tmx}};
		    my @values = @{$counts{$c}{$v}{bitexts}{$l}{tmx}};
		    if ($#values == 2){
			$statistics{$v}{tmx}{$l}{'translation units'} = $values[0];
			$statistics{$v}{tmx}{$l}{'source language tokens'} = $values[1];
			$statistics{$v}{tmx}{$l}{'target language tokens'} = $values[2];
		    }
		    else{
			print STDERR "unexpected number of counts for bitexts in $c/$v/$l/tmx\n";
		    }
		}
	    }
	}
    }

    foreach my $c (keys %counts){
	foreach my $v (keys %{$counts{$c}}){
	    $info{$v}{sentences} = 0;
	    $info{$v}{tokens} = 0;
	    foreach my $l (keys %{$counts{$c}{$v}{monolingual}}){
		$info{$v}{tokens} += $statistics{$v}{monolingual}{$l}{tokens};
		$info{$v}{sentences} += $statistics{$v}{monolingual}{$l}{sentences};
	    }
	    $info{$v}{alignments} = 0;
	    $info{$v}{'moses alignments'} = 0;
	    $info{$v}{'translation units'} = 0;
	    foreach my $l (keys %{$counts{$c}{$v}{bitexts}}){
		$info{$v}{alignments} += $statistics{$v}{bitexts}{$l}{alignments};
		$info{$v}{'moses alignments'} += $statistics{$v}{moses}{$l}{alignments};
		$info{$v}{'translation units'} += $statistics{$v}{tmx}{$l}{'translation units'};
	    }
	}
    }
    foreach my $c (keys %counts){
	foreach my $v (keys %{$counts{$c}}){
	    $info{$v}{'number of languages'} = scalar keys %{$counts{$c}{$v}{monolingual}};
	    $info{$v}{'number of language pairs'} = scalar keys %{$counts{$c}{$v}{bitexts}};
	}
    }
}
