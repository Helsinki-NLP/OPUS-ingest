#!/usr/bin/perl

use strict;
use Locale::Language;
use XML::Writer;
use IO::File;
use File::Basename qw/basename/;
use LetsMT::DataProcessing::Splitter;
use LetsMT::Align;


# keep sentence IDs and sentence lengths for sentence alignment
my %sentIDs=();
my %sentLen=();

# length-based sentence aligner
my $aligner = new LetsMT::Align (method => 'gale');



# run through all files text files
foreach my $file (@ARGV){
    print STDERR "process $file\n";
    open I,"<$file" || die "cannot read from file $file\n";
    binmode(I,":encoding(utf8)");

    # filenames = langID.translator-name
    my ($lang,$name) = split(/\./,basename($file));
    mkdir $lang unless (-d $lang);

    # output file = XML file 'translator-name.xml.gz' in subdir 'langID'
    my $output = IO::File->new("| gzip -c > $lang/$name.xml.gz");
    binmode($output,":encoding(utf-8)");
    my $writer = XML::Writer->new( OUTPUT => $output,
				   DATA_MODE => 1,
				   DATA_INDENT => 1 );
    $writer->xmlDecl("UTF-8");
    $writer->startTag("text");

    my $splitter = 
	new LetsMT::DataProcessing::Splitter( method => 'europarl',
					      lang => $lang );


    while (<I>){
	chomp;
	my ($part,$nr,$sent) = split(/\|/);

	# some additional cleanup, see: http://stackoverflow.com/questions/1016910/how-can-i-strip-invalid-xml-characters-from-strings-in-perl
	$sent =~ tr/\x00-\x08\x0B\x0C\x0E-\x19//d;

	my @sentences = $splitter->split( $sent );
	next unless @sentences;

	if ( $#sentences ){
	    $writer->startTag('p','id' => "$part\.$nr");
	}

	# save cumulative sentence lengths (start with length 0)
	# ---> one more length item compared to sentence IDs!
	@{$sentLen{$lang}{$name}{$part}{$nr}} = (0);
	foreach my $s (0..$#sentences){
	    my $id="s$part.$nr";
	    $id.='.'.$s if ( $#sentences );
	    $writer->startTag('s','id'=>$id);
	    $writer->characters($sentences[$s]);
	    $writer->endTag('s');
	    push(@{$sentIDs{$lang}{$name}{$part}{$nr}},$id);
	    push(@{$sentLen{$lang}{$name}{$part}{$nr}},
		 $sentLen{$lang}{$name}{$part}{$nr}[-1]+length($sentences[$s]));
	}

	if ( $#sentences ){
	    $writer->endTag('p');
	}
    }

    $writer->endTag('text');
    $writer->end();

}


my %done=();

foreach my $sl (sort keys %sentIDs){
    foreach my $tl (sort keys %sentIDs){
	next if ($tl lt $sl);
	next if ($done{"$tl-$sl"});

	foreach my $sn (sort keys %{$sentIDs{$sl}}){
	    foreach my $tn (sort keys %{$sentIDs{$tl}}){
		next if (($sl eq $tl) && ($sn eq $tn));

		print STDERR "align $sl-$tl/$sn-$tn\n";
		mkdir "$sl-$tl" unless (-d "$sl-$tl");

		my $fh = IO::File->new("| gzip -c > $sl-$tl/$sn-$tn.xml.gz");
		binmode($fh,":encoding(utf-8)");

		print $fh '<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE cesAlign PUBLIC "-//CES//DTD XML cesAlign//EN" "">
<cesAlign version="1.0">
';
		print $fh  "<linkGrp targType=\"s\" fromDoc=\"$sl/$sn.xml.gz\" toDoc=\"$tl/$tn.xml.gz\" >\n";

		my $count=0;

		foreach my $p (sort {$a <=> $b} keys %{$sentIDs{$sl}{$sn}}){
		    next unless (exists $sentIDs{$tl}{$tn}{$p});
		    foreach my $n (sort {$a <=> $b} keys %{$sentIDs{$sl}{$sn}{$p}}){
			next unless (exists $sentIDs{$tl}{$tn}{$p}{$n});

			my @links = 
			    $aligner->length_align(
				\@{$sentLen{$sl}{$sn}{$p}{$n}},
				\@{$sentLen{$tl}{$tn}{$p}{$n}},
				\@{$sentIDs{$sl}{$sn}{$p}{$n}},
				\@{$sentIDs{$tl}{$tn}{$p}{$n}});
			foreach my $l (0..$#links){
			    $count++;
			    my $sid = exists $links[$l]{src} ? 
				join(' ',@{$links[$l]{src}}) : '';
			    my $tid = exists $links[$l]{trg} ?
				join(' ',@{$links[$l]{trg}}) : '';
			    print $fh '<link xtargets="',
			              "$sid;$tid",
			              '" id="SL'.$count.'"/>',"\n";
			}
		    }
		}
		print $fh "  </linkGrp>\n</cesAlign>\n";
		close $fh;
		$done{"$sl-$tl"}=1;
	    }
	}
    }
}
