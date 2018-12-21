#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to display simple concordance         ###
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:48:40 2004 (evert)                 ###
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
use Carp;

use lib '.';
use My::Config;
use My::Param;
use My::KWIC;

use CGI qw/:standard *table *Tr *td/;

binmode (STDOUT,':encoding(utf-8)');

$query = My::Param::Get("query");
@matches = split /,/, $query;

# display simple concordance:
#  - start and end of cpos of each match are passed in "query" parameter
#  - standard context and display parameters are used 

# print header,
print header(-charset => 'utf-8'),
  start_html(-title => "CQPDemo: Simple Concordance",
	     -encoding => 'utf-8',
	     -style => { -src => "$My::Config::CSSDir/standard.css" }),
  "\n";


$AttrSpeaker = My::Config::GetAttribute("SPEAKER_NAME");
$AttrSpeakerLang = My::Config::GetAttribute("SPEAKER_LANGUAGE");
$AttrChapter = My::Config::GetAttribute("CHAPTER_ID");

print start_table, "\n";

$n = 0;
while (@matches) {
  $n++;
  $match = shift @matches;
  last if $match eq "...";			# indicates truncated list
  $match =~ /^([0-9]+):([0-9]+)$/
    or croak "Can't parse interval description '$match'.";
  ($s, $e) = ($1, $2);				# cf. display.pl
  $chapter = $AttrChapter->cpos2struc2str($s);
  $speaker = $AttrSpeaker->cpos2struc2str($s);
  $speaker_lang = $AttrSpeakerLang->cpos2struc2str($s);
  $location = 'Chapter '.$chapter;
  $location .= ", ".$speaker if defined $speaker;
  $location .= " ($speaker_lang)" if $speaker_lang;

  ($cs, $ce) = My::KWIC::Context($s, $e);

  my @alignments = CGI::param('alg');
  
  my $width = 100;
  $width = int($width/(scalar @alignments + 1) ) if (@alignments);
  my @alg_headers = ();

  print start_Tr;
  print td({-align => "right"}, b(($n+1)."."));
  print td({-class => "location", -width => "$width\%"}, escapeHTML($location));
  foreach my $l (@alignments){
      print td({-class => "location", -width => "$width\%"},$l);
  }
  print end_Tr."\n";

  
#  print Tr(td({-align => "right"}, b("$n.")),
#	   td({-class => "location"}, escapeHTML($location))), "\n";

  print start_Tr, td({-valign => "top"},
		     a({-href => "context.pl?corpus=$My::Config::Corpus\&start=$s\&end=$e#match",	# GET query to display context (and scroll down to match)
			-target => "context"}, "context"));

#  print Tr(td({-valign => "top"},
#	      a({-href => "context.pl?corpus=$My::Config::Corpus\&start=$s\&end=$e#match", -target => "context"},
#		"context")),
#	   td({-valign => "top"},
#	      My::KWIC::Format($cs, $s-1), 
#	      span({-class => "match"}, My::KWIC::Format($s, $e)),
#	      My::KWIC::Format($e+1, $ce))), "\n";

  print td({-valign => "top"},
	   My::KWIC::Format($cs, $s-1), 
	   span({-class => "match"}, My::KWIC::Format($s, $e)),
	   My::KWIC::Format($e+1, $ce));

  my $col=1;
  my $bgcolor="#ddf";
  foreach my $l (@alignments){
      if ($col%2){$bgcolor="#fdd";}
      else{$bgcolor="#ddf";}
      print td({-valign => "top",-bgcolor => $bgcolor},My::KWIC::AlignContext($cs,$ce,$l));
      $col++;
  }
  print end_Tr, "\n";

}

print end_table, "\n";

if ($match eq "...") {
  print p(b("etc.")),"\n";
}

print end_html, "\n";

exit 0;

