#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to run various corpus tools           ###
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:49:01 2004 (evert)                 ###
###                                                             ###
###################################################################


## This software is provided AS IS and the author makes no warranty as to
## its use and performance. You may use this script, redistribute and
## modify it under the same terms as Perl itself.
## 
## IN NO EVENT WILL THE AUTHOR BE LIABLE TO YOU FOR ANY CONSEQUENTIAL,
## INCIDENTAL OR SPECIAL DAMAGES, INCLUDING ANY LOST PROFITS OR LOST
## SAVINGS, EVEN IF AN IMS REPRESENTATIVE HAS BEEN ADVISED OF THE
## POSSIBILITY OF SUCH DAMAGES, OR FOR ANY CLAIM BY ANY THIRD PARTY.

# use lib '/users1/tiedeman/Usr/lib/perl5/site_perl/5.8.6';
use locale;

use lib '.';
use My::Config;
use My::Param;
use My::Forms;
use My::Query;

use CWB;

use CGI qw/:standard *table/;

$corpus = $My::Config::Corpus;

$tool = My::Param::Get("tool");
$attribute = My::Param::Get("attribute");
$length = My::Param::Get("phraselen");
$filter = My::Param::Get("phrasefilter");
$wlfilter = My::Param::Get("wlfilter");
$wlfold = My::Param::Get("casefold");
$cutoff = My::Param::Get("wlcutoff");
$sort = My::Param::Get("wlsort");

$pos_filter = "";				# regular expression POS filter in phrases tool

# run specified corpus tool and store result in temporary file
$tf = new CWB::TempFile "CQPDemo.gz";
$tf->finish;
$tempfile = $tf->name;
if ($tool eq "wordlist") {
  $filter_flag = ($wlfilter eq "*") ? "" : '-O -p "'.My::Query::Wildcards($wlfilter).'"';
  $filter_flag .= " -$wlfold"
    unless ($wlfold eq "") or ($filter_flag eq "");
  $cmd = "$CWB::Lexdecode $My::Config::RegistryFlag -f -P $attribute $filter_flag $corpus | gzip > $tempfile";
  CWB::Shell::Cmd($cmd);
}
elsif ($tool eq "phrases") {
  My::Config::Error("Sorry", 'Unfiltered phrase search allowed for attribute="pos" and length=3 only.')
      if $filter eq "none" and ($attribute ne "pos" or $length > 3);
  if ($filter eq "noun") {
    $pos_filter = "N.*";
  }
  elsif ($filter eq "closed") {
    $pos_filter = "[CDEMPRTW].*";
  }
  elsif ($filter eq "open") {
    $pos_filter = "[JNV].*";
  }
  @keys = ();					# construct list of scan keys
  for $i (0 .. $length-1) {
    push @keys, "'$attribute+$i'";
    push @keys, "'?pos+$i=/$pos_filter/'"
      unless $pos_filter eq "";
  }
  $cmd = "$CWB::ScanCorpus $My::Config::RegistryFlag $corpus @keys | awk '\$1 >= $cutoff' | gzip > $tempfile";
  CWB::Shell::Cmd($cmd);
}
else {
  die "Internal error: no handler for corpus tool '$tool'.";
}

# read data from temporary file into word list + frequency hash
@words = ();
%freq = ();
while ($line = $tf->read) {
  chomp $line;
  $line =~ /^\s*([0-9]+)\s+(\S.*?)\s*$/
    or die "Internal error parsing output of cwb-lexdecode or cwb-scan-corpus.\nOffending line: ``$line''";
  $f = $1;
  $word = $2;
  $word =~ s/[\x00-\x20]+/ /g;			# normalise whitespace and control characters
  next if $f < $cutoff;
  $word = lc $word
    if $sort eq "case";
  $freq{$word} += $f;
  push @words, $word;
}
$tf->close;

# sort word list according to specification
if ($sort eq "freq") {				# freq -> sort by descending frequency
  @words = sort {$freq{$b} <=> $freq{$a} or $a cmp $b} @words;
}
else {						# lexical, case -> sort lexically (according to locale)
  @words = sort @words;
}

# finally, prepare HTML page
print header,
  start_html(-title => "CQPDemo: Tool Results",
	     -style => { -src => "$My::Config::CSSDir/standard.css" }),
  "\n";

print start_table,
  Tr(th({-align => "right", -width => 200}, "f"), 
     th('&nbsp;'),
     th({-align => "left"}, ($tool eq "phrases") ? "phrase" : $attribute)), 
  "\n";

foreach $word (@words) {
  $wordlink = escapeHTML($word);		# HTML encoding of $word with link to display of instances
  if ($word !~ /[\"\\]/ and $sort ne "case") {	
    # all characters except " and \ are safe in a double-quoted literal string 
    # (but we can't do case-insensitive matching, so there are no links for case-folded list)
    $query = "";				# construct CQP query to look up instances
    @w = split " ", $word;
    $pos_cond = ($pos_filter eq "") ? "" : "\& pos = \"$pos_filter\"";
    foreach $w (@w) {
      $query .= " [$attribute = \"$w\"\%l $pos_cond]";
    }
    $url = "display.pl?".My::Forms::MakeGETString({mode => "cqp", query => $query, corpus => $corpus});
    $wordlink = a({-href => $url}, $wordlink);
  }
  print Tr(
	   td({-align => "right"}, $freq{$word}),
	   td('&nbsp;'),
	   td({-align => "left"}, $wordlink),
	  ),"\n";
}
print end_table, "\n";

print end_html, "\n";

exit 0;

