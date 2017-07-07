#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to display tools form                 ### 
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:47:57 2004 (evert)                 ###
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
use My::Forms;

use CGI qw/:standard *table *Tr *td *form/;

$css = $My::Config::CSSDir;
$base = $My::Config::BaseDir;
$img = $My::Config::ImgDir;

$dash = ' &ndash; ';
$space = ' &nbsp;&nbsp; ';

print header,
  start_html(-title => "CQPDemo: Corpus Tools",
	     -style => { -src => "$css/standard.css" }),
  "\n";

print start_table({-width => '100%', class => "header"}), 
  start_Tr, start_td({-align => "left"});
print a({-href => "$base/index.html", -target => "_top"}, "Home"), $dash;
print a({-href => "form-query.pl?mode=cqp"}, "CQP Mode"), $dash;
print a({-href => "form-query.pl?mode=simple"}, "Simple Mode"), $dash;
print b({-class => "brightred"}, "Tools"), $dash;
print a({-href => "$base/help-tools.html", -target => "kwic"}, "Help Page");
print end_td, 
  td({-align => "right"}, "Corpus: ", b({-class => "blue"}, code(escapeHTML($My::Config::Corpus)))),
  end_Tr, end_table, "\n";


My::Param::Set("tool", "wordlist");

print 
  start_form(-method => "POST", -action => "tools.pl", -target => "kwic"),
  table({-width => '100%'},
	Tr(td({-align => "left", -valign => "bottom", -nowrap => undef},
	      My::Forms::Hidden("tool"),
	      hidden('corpus',$My::Config::Corpus),
	      b("Word list:")),
	   td('&nbsp;'),
	   td({-align => "left", -valign => "bottom"},
#	      'attribute&nbsp;=&nbsp;'.My::Forms::PopupMenu("attribute"), $space,
	      'sort&nbsp;=&nbsp;'.My::Forms::PopupMenu("wlsort"), $space,
	      'f&nbsp;&gt;=&nbsp;', My::Forms::PopupMenu("wlcutoff"), $space,
	      'filter&nbsp;=&nbsp;'.textfield(-name => "wlfilter", -size => 20, -default => "*"), 
	      My::Forms::PopupMenu("casefold"), $space,
	      submit(-name => "action", -value => "Go"), $space,
	     ),
	   td({-align => "right", -valign => "bottom"}, 
	      reset(-value => "Reset Form"),
	      )
	  )),
  end_form,
  "\n";

# slightly complicated way of producing a nicely formatted separator bar
print p({-class => "separator", -align => "center", -width => '100%'},
	img({-src => "$img/separator.gif", -width => '95%', -height => "5", -border => 0, -alt => "[separator]"})
	), "\n";

My::Param::Set("tool", "phrases");

print
  start_form(-method => "POST", -action => "tools.pl", -target => "kwic"),
  table({-width => '100%'},
	Tr(td({-align => "left", -valign => "bottom", -nowrap => undef},
	      My::Forms::Hidden("tool"),
	      b("Phrases:")),
	   td('&nbsp;'),
	   td({-align => "left", -valign => "bottom"},
	      'attribute&nbsp;=&nbsp;'.My::Forms::PopupMenu("attribute"), $space,
	      'length&nbsp;=&nbsp;'.My::Forms::PopupMenu("phraselen"), $space,
	      'filter&nbsp;=&nbsp;'.My::Forms::PopupMenu("phrasefilter"), $space,
	      'sort&nbsp;=&nbsp;'.My::Forms::PopupMenu("wlsort"), $space,
	      'f&nbsp;&gt;=&nbsp;'.My::Forms::PopupMenu("wlcutoff"), $space,
	      submit(-name => "action", -value => "Go"), 
	     ),
	   td({-align => "right", -valign => "bottom"}, 
	      reset(-value => "Reset Form"),
	     )
	  )),
  end_form,
  "\n";

print end_html, "\n";

exit 0;
