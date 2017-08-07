#!/usr/bin/perl

my $old_xml = shift(@ARGV);
my $new_xml = shift(@ARGV);

binmode(STDOUT);

open O,"gzip -cd  < $old_xml |";
open N,"gzip -cd  < $new_xml |";

binmode(O);
binmode(N);

my $sentID=undef;

while (my $line = <O>){
    next unless ($line);
    if ($line=~/\<s id=\"(.*?)\">/){
	$sentID=$1;
    }
    elsif ($line=~/<\/s\>/){
	print read_sentences($sentID);
	$sentID=undef;
	$line=~s/\<\/s\>//;
    }

    print $line unless (defined $sentID);
#     print "... $line" if (defined $sentID);
}

sub read_sentences{
    my $last = shift;

    my $start = 0;
    my $txt = '';
    while (<N>){
	next unless ($_);
	s/(\<\/s\>).*$/$1/;
	if (/\<s id=\"(.*?)\">/){
	    $start = $1;
	}
	$txt .= $_ if ($start);
	if (/\<\/s>/){
	    return $txt if ($start == $last);
	    $start = 0;
	}
    }
    return $txt;
}
