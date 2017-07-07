#!/usr/bin/perl -w
###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CGI script to display query form                 ### 
###   Created: Mon Apr 21 19:26:39 2003                         ###
###  Modified: Mon Mar  1 11:37:05 2004 (evert)                 ###
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

use CGI qw/:standard *table *Tr *td *form/;

$mode = My::Param::Get("mode");
$simple = $mode eq "simple";

$css = $My::Config::CSSDir;
$base = $My::Config::BaseDir;

$dash = ' &ndash; ';
$space = ' &nbsp;&nbsp; ';

%DefaultQuery = (DA => '"euro.*"',
		 DE => '"so" [tree="ADJ.*"] "wie"',
		 EL => '"e.*"',
		 EN => '"as" [tree="JJ.*"]',
		 ES => '"euro.*"',
		 FI => '"euro.*"',
		 FR => '[lem="le"] [pos="NOM"] "euro.*"',
		 IT => '[lem="il"] [pos="NOM"] "euro.*"',
		 NL => '"euro.*"',
		 PT => '"euro.*"',
		 SV => '"euro.*"'
		 );

print header,
  start_html(-title => ($simple ? "CQPDemo: Simple Query" : "CQPDemo: CQP Query"),
	     -style => { -src => "$css/standard.css" }),
  "\n";

print start_table({-width => '100%', class => "header"}), 
  start_Tr, start_td({-align => "left"});
if ($simple) {
  print a({-href => "$base/index.html", -target => "_top"}, "Home"), $dash;
  print a({-href => "form-query.pl?mode=cqp"}, "CQP Mode"), $dash;
#  print b({-class => "brightred"}, "Simple Mode"), $dash;
  print a({-href => "form-tools.pl"}, "Tools"), $dash;
  print a({-href => "$base/help-simple.html", -target => "kwic"}, "Help Page");
}
else {
  print a({-href => "$base/index.html", -target => "_top"}, "Home"), $dash;
  print b({-class => "brightred"}, "CQP Mode"), $dash;
#  print a({-href => "form-query.pl?mode=simple"}, "Simple Mode"), $dash;
  print a({-href => "form-tools.pl?corpus=$My::Config::Corpus"}, "Tools"), $dash;
  print a({-href => "$base/help-cqp.html", -target => "kwic"}, "Help Page");
}
print td({-align => "center"},b("EUconst"));
print end_td, 
#  td({-align => "right"}, "Corpus: ", b({-class => "blue"}, code(escapeHTML($My::Config::Corpus)))),
  start_form(-method => "POST", -action => "form-query.pl", -target => "query"),
  td({-align => "right"},"lang = ".My::Forms::PopupMenu("corpus")),
  end_form(),  
  end_Tr, end_table, "\n";

print 
  start_form(-method => "POST", -action => "display.pl", -target => "kwic"),
  My::Forms::Hidden("mode"),
  start_table, start_Tr;

if ($simple) {
  print td({-align => "left", -valign => "bottom"},
	   textarea(-name => "query", 
#		    -default => '(It|it) was [ Det ] N of { A } N', 
		    -default => '(Al|al)', 
		    -rows => 2, -cols => 60),
	   br, 
	   "matching ",
	   My::Forms::PopupMenu("wordlemma"),
	   My::Forms::PopupMenu("casefold"),
	  ), "\n";
}
else {
    my $defq = '"e.*"';
    if (defined $DefaultQuery{$My::Config::Corpus}){
	$defq = $DefaultQuery{$My::Config::Corpus};
    }
  print td({-align => "left", -valign => "top"},
	   textarea(-name => "query", 
		    -default => $defq,
#		    -default => '"as" [pos="JJ.*"] "as" <np> []+ </np>',
#		    -default => '"as" [tnt="JJ.*"] "as" <chunk_type="NP"> []+ </chunk>',
#		    -default => '"10.*"',
		    -rows => 3, -cols => 60),
	  ), "\n";
}

print start_td({-align => "left", -valign => "bottom"}),
  start_table, start_Tr,
  td({-align => "right", -nowrap => undef}, "sort = "), 
  td(My::Forms::PopupMenu("sort")),
#  td("lang = ".My::Forms::PopupMenu("corpus")),
    td(hidden('corpus',$My::Config::Corpus)),
  td({-align => "right"}, reset(-value => "Reset Form")), 
  end_Tr, "\n",
  start_Tr,
  td,
  td(submit(-name => "action", -value => "Run Query")),
  td(submit(-name => "action", -value => "Distribution")),
  td(submit(-name => "action", -value => "Frequencies")),
  end_Tr, end_table, "\n";
print end_td, end_Tr, end_table, "\n";

print p(b("Display:"), $space, My::Forms::DisplayOptions()), "\n";

# unless ($simple) {
#   print p(
# 	  b("Keyword:"), $space,
# 	  My::Forms::Checkbox("keyword"), ' &nbsp; ',
# 	  My::Forms::PopupMenu("keyword_strategy"),
# 	  "[", textfield(-name => "keyword_cond", -size => 30, -default => ""), "]",
# 	  "within",
# 	  My::Forms::PopupMenu("keyword_dir"),
# 	  My::Forms::PopupMenu("keyword_size"),
# 	  "from",
# 	  My::Forms::PopupMenu("keyword_base"),
# 	  My::Forms::Checkbox("keyword_inclusive", "inclusive"),
# 	 ), "\n";
# }

print p(
	b("Alignments:"), $space,
	My::Forms::AlignMenu($My::Config::Corpus,$My::Config::Registry),
	),"\n";

print end_form;
print end_html, "\n";

exit 0;
