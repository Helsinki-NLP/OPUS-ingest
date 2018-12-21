#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to execute query and display concordance 
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:35:26 2004 (evert)                 ###
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

use lib '/users1/tiedeman/Usr/lib/perl5/site_perl/5.8.6';
use locale;

use lib '.';
use My::Config;
use My::Param;
use My::KWIC;
use My::Forms;
use My::Query;

use CGI qw/:standard *table *Tr *td/;

binmode (STDOUT,':encoding(utf-8)');

$space = ' &nbsp;&nbsp; ';

$cqp = $My::Config::CQP;

# run persistent query according to current parameter settings
$id = My::Query::Auto();
($size) = $cqp->exec("size $id");

$action = lc(My::Param::Get("action"));

# if activated with distribution button, show distribution of matches across corpus
if ($action =~ /distribution/) {
  do_distribution();
  exit 0;
}
# if activated with frequencies button, compute frequencies of matching strings
elsif ($action =~ /frequenc(y|ies)/) {
  do_frequencies();
  exit 0;
}

##
##  normal operation: KWIC display
##
# print header,
print header(-charset => 'utf-8'),
    start_html(-title => "CQPDemo: Query Results",
	     -encoding => 'utf-8',
	     -style => { -src => "$My::Config::CSSDir/standard.css" }),
  "\n";

if ($size == 0) {
  print p(b("No matches.")),
    end_html;
  exit 0;
}

$first = My::Param::Get("first");		# first match to display
My::Config::Error("Match out of range.", "Sorry, match #".($first+1)." does not exist.")
  if $first >= $size;
$last = $first + 19;				# always show 20 matches on each page
$last = $size - 1
  if $last >= $size;

# special treatment for alignment checkbox group
my @alg = CGI::param('alg');
my $hidden_alg = hidden(-name => 'alg', -default => $a) if (@alg);


print p(
	table({-width => '100%'},
	      Tr(
		 td({-width => '40%', -valign => "center", -align => "left"}, My::Forms::Navbar($first, $size)),
		 td({-width => '20%', -valign => "center", -align => "center"}, b("[$size matches]")),
		 td({-width => '40%', -valign => "center", -align => "right"}, 
		    start_form(-method => "POST", -action => "display.pl"),
		    My::Forms::Hidden(qw<corpus mode query subquery casefold wordlemma sort keyword* first>), My::Forms::DisplayOptions(),
		    $hidden_alg,
		    $space,
		    submit(-name => 'action', -value => 'Apply'), end_form,
		   ),
		)
	     )
       ), "\n";

# display table of matches (with novel title)
print start_table, "\n";

$sub_movie = My::Config::GetAttribute("sub_movie");
$movie_id = My::Config::GetAttribute("sub_movieID");
$sub_id = My::Config::GetAttribute("sub_id");

$word_context = (My::Param::Get("context") =~ /word/) ? 1 : 0;

@ranges = $cqp->dump($id, $first, $last);
for $n ($first .. $last) {
  $idx = $n - $first;
  ($s, $e, $t, $k) = @{$ranges[$idx]};
  $title = $sub_movie->cpos2struc2str($s);
  $movie = $movie_id->cpos2struc2str($s);
  $sub = $sub_id->cpos2struc2str($s);
  $location = $title;
  $location .= ", movie $movie"
    if defined $movie;
  $location .= ", sub $sub"
    if defined $sub;

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

  print start_Tr, td({-valign => "top"},
		     a({-href => "context.pl?corpus=$My::Config::Corpus\&start=$s\&end=$e#match",	# GET query to display context (and scroll down to match)
			-target => "context"}, "context"));
  ($cs, $ce) = My::KWIC::Context($s, $e);	# compute context
  print start_td({-valign => "top"});
  print " ... " if $word_context;
  print My::KWIC::Format($cs, $s-1, $t, $k), " ";
  print span({-class => "match"}, My::KWIC::Format($s, $e, $t, $k)), " ";
  print My::KWIC::Format($e+1, $ce, $t, $k), " ";
  print " ... " if $word_context;
  print end_td;
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

print p(
	table({-width => '100%'},
	      Tr(
		 td({-width => '40%', -valign => "center", -align => "left"}, My::Forms::Navbar($first, $size)),
		 td({-width => '20%', -valign => "center", -align => "center"}, b("[$size matches]")),
		 td({-width => '40%', -valign => "center", -align => "right"}, 
		    start_form(-method => "POST", -action => "display.pl"),
		    My::Forms::Hidden(qw<corpus mode query subquery casefold wordlemma sort keyword* first>), My::Forms::DisplayOptions(), 
		    $space,
		    submit(-name => 'action', -value => 'Apply'), end_form,
		   ),
		)
	     )
       ), "\n";

print end_html, "\n";

exit 0;


##
##  show distribution of matches across corpus (graphically) 
##
sub do_distribution {
  $sub_movie = My::Config::GetAttribute("sub_movie");
  $N = $sub_movie->max_struc;
  for $i (0 .. $N-1) {
    $count[$i] = 0;				# number of occurrences in this novel
    ($s, $e) = $sub_movie->struc2cpos($i);
    $rsize[$i] = $e - $s + 1;			# size of novel in tokens
  }
  @matches = $cqp->dump("$id");
  foreach $m (@matches) {
    $struc = $sub_movie->cpos2struc($m->[0]);	# find novel containing start of match
    $count[$struc]++
      if defined $struc;
  }
  for $i (0 .. $N-1) {
    $ppm[$i] = $count[$i] / $rsize[$i] * 1000000;
  }
  $aspect = 1;
  while (max(map {2 * $_ / $aspect} @ppm) > 800) {
    $aspect *= 2;
  }
  # now show novel titles with absolute and relative frequencies
#  print header,
  print header(-charset => 'utf-8'),
    start_html(-title => "CQPDemo: Distribution of Query Results",
	     -encoding => 'utf-8',
	       -style => { -src => "$My::Config::CSSDir/standard.css" }),
		 "\n";
  print start_table, "\n";
  my $query = My::Param::Get("query");
  for $i (0 .. $N-1) {
      if ($ppm[$i] == 0){next;}
    $ppm = sprintf "%4.2f", $ppm[$i];
    $title = $sub_movie->struc2str($i);
    $w = int(2 * $ppm[$i] / $aspect + 0.5);
#    $h = int($rsize[$i] * sqrt(sqrt($aspect)) / 20000 + 0.5);
    $h = int($rsize[$i] * sqrt(sqrt($aspect)) / 1000 + 0.5);
    $get_url = My::Forms::MakeGETString([qw<corpus mode query casefold wordlemma sort keyword* context pos xp>],
					{action => 'show', subquery => "<match> [_.sub_movie=\"$title\" \%l] !"});
    my @alg = CGI::param('alg');
    foreach my $a (@alg){
	$get_url .= ';alg='.$a;
    }

    # the subquery above relies on the fact that novel titles don't contain metacharacters except for the apostrophe '
    print Tr(td({-align => "left", -valign => "center", -nowrap => undef}, 
		a({-href => "display.pl?$get_url"}, b(escapeHTML($title)))),
	     td({-align => "right", -valign => "center", -nowrap => undef},
		"$ppm ppm", br, "[f = $count[$i]]"),
	     td(img({-src => "$My::Config::ImgDir/orange.gif", -width => $w, -height => $h})),
	    ),"\n";
  }
  print end_table,
    end_html, "\n";
}

# $max = max(@list);
#   a small but really useful helper function
sub max {
  return 0
    unless @_;
  my $max = $_[0];
  map { $max = $_ if $_ > $max } @_;
  return $max;
}


##
##  compute frequency distribution of matching strings
##  (might be upgraded to an HTML form offering a wide range of different frequency tables => frequencies.pl)
##
sub do_frequencies {
  %Freq = ();
  %Examp = ();
  $word = My::Config::GetAttribute("word");
  for ($j = 0; $j < $size; $j += 100) {
    @matches = $cqp->dump($id, $j, $j+99);
    foreach $m (@matches) {
      $start = $m->[0];
      $end = $m->[1];
      $key = join(" ", $word->cpos2str($m->[0] .. $m->[1]));
      if (exists $Freq{$key}) {
	$Freq{$key}++;
	# record up to 20 examples of matching string in %Examp 
	if ($Freq{$key} <= 20) {
	  $Examp{$key} .= ",$start:$end";
	}
	elsif ($Freq{$key} == 21) {
	  $Examp{$key} .= ",...";
	}
      }
      else {
	$Freq{$key} = 1;
	$Examp{$key} = "$start:$end";
      }
    }
  }
  
  $sort = My::Param::Get("sort");		# use sort parameter to indicate desired sort strategy
  if ($sort eq "asc") {				# lexical ascending
    @strings = sort keys %Freq;
  }
  elsif ($sort eq "desc") {			# lexical descending
    @strings = sort { $b cmp $a } keys %Freq;
  }
  elsif ($sort eq "rev") {			# reverse lexical ascending
    @strings = map { scalar reverse $_ } sort map { scalar reverse $_ } keys %Freq;
  }
  elsif ($sort eq "drev") {			# reverse lexical descending
    @strings = map { scalar reverse $_ } sort { $b cmp $a } map { scalar reverse $_ } keys %Freq;
  }
  else {					# default = by frequency descending
    @strings = sort { $Freq{$b} <=> $Freq{$a} or $a cmp $b } keys %Freq;
  }
  $N = @strings;

  $alignment = ($sort =~ /rev/) ? "right" : "left";

#  print header,
  print header(-charset => 'utf-8'),
    start_html(-title => "CQPDemo: Frequency Table",
	     -encoding => 'utf-8',
	       -style => { -src => "$My::Config::CSSDir/standard.css" } ),
		 "\n";

  if ($N > 1000) {
    print p(b("$N unique strings found among $size matches."), br
	    "(showing only first 1000 strings)"), "\n";
    splice @strings, 1000;
  }
  else {
    print p(b("$N unique strings found among $size matches.")), "\n";
  }

  print start_table,
    Tr(th({-align => "right", -width => 200}, "f"), 
       th('&nbsp;'),
       th({-align => "left"}, "matching string")),
	 "\n";
  foreach $string (@strings) {
    $url = "kwiclist.pl?".My::Forms::MakeGETString({query => $Examp{$string}}, [qw<corpus pos xp context>]);
    my @alg = CGI::param('alg');
    foreach my $a (@alg){
	$url .= ';alg='.$a;
    }

    print Tr(
	     td({-align => "right"}, $Freq{$string}),
	     td('&nbsp;'),
	     td({-align => $alignment}, 
		a({-href => $url, -target => "context"}, My::KWIC::DecodeString($My::Confic::Corpus,$string))),
#		a({-href => $url, -target => "context"}, escapeHTML($string))),
	    ),"\n";
  }
  print end_table,
    end_html, "\n";
}
