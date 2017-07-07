#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to display extended match context (total of 13 paragraphs)
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:36:20 2004 (evert)                 ###
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
use lib '.';
use My::Config;
use My::Param;
use My::KWIC;

use CGI qw/:standard/;

binmode (STDOUT,':encoding(utf-8)');

$P = My::Config::GetAttribute("P");
# $P = My::Config::GetAttribute("time");
# $TITLE = My::Config::GetAttribute("title");
$max_P = $P->max_struc;

$start = My::Param::Get("start");
$end = My::Param::Get("end");


# determine and format "local" context (1 paragraph), in which match will be embedded
My::Param::Set("context", "1 s");		# set paragraph context
# My::Param::Set("context", "1 p");		# set paragraph context
# My::Param::Set("context", "1 time");		# set paragraph context
# My::Param::Set("context", "4 s");		# set paragraph context
($context_start, $context_end) = My::KWIC::Context($start, $end);

$html = join(" ",
	     My::KWIC::Format($context_start, $start - 1), "\n",
	     a({-name => "match", -class => "match"}, My::KWIC::Format($start, $end)), "\n",
	     My::KWIC::Format($end + 1, $context_end), "\n"
	    );
#if (defined $TITLE->cpos2struc($context_start)) {
#  @html_match = (h2($html), "\n");
#}
#else {
  @html_match = (p($html), "\n");
#}

# determine and format extended left context = six preceding paragraphs
$p_start = $P->cpos2struc($context_start);
if (not defined $p_start) {
  @html_lc = (p("..."), "\n");
}
else {
  @html_lc = ();
  foreach $p ($p_start-6 .. $p_start-1) {
    next if $p < 0;
    ($s, $e) = $P->struc2cpos($p);
    $html = My::KWIC::Format($s, $e);
#    if (defined $TITLE->cpos2struc($s)) {
#      push @html_lc, h2($html), "\n";
#    }
#    else {
#      push @html_lc, p($html), "\n";
#    }
      push @html_lc, $html;
  }
}

# determine and format extended right context = six following paragraphs
$p_end = $P->cpos2struc($context_end);
if (not defined $p_end) {
  @html_rc = (p("..."), "\n");
}
else {
  @html_rc = ();
  foreach $p ($p_end+1 .. $p_end+6) {
    next if $p >= $max_P;
    ($s, $e) = $P->struc2cpos($p);
    $html = My::KWIC::Format($s, $e);
#    if (defined $TITLE->cpos2struc($s)) {
#      push @html_rc, h2($html), "\n";
#    }
#    else {
#      push @html_rc, p($html), "\n";
#    }
      push @html_rc, $html;
  }
}

# now generate HTML page
#print header,
print header(-charset => 'utf-8'),
  start_html(-title => "CQPDemo: Extended Match Context",
	     -encoding => 'utf-8',
	     -style => { -src => "$My::Config::CSSDir/standard.css" }),
  "\n",
  @html_lc,
  @html_match,
  @html_rc,
  end_html, "\n";

exit 0;

