###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CQPDemo automatic generation of HTML forms       ###
###   Created: Mon Apr 21 18:56:21 2003                         ###
###  Modified: Mon Mar  1 11:50:47 2004 (evert)                 ###
###                                                             ###
###################################################################


## This software is provided AS IS and the author makes no warranty as to
## its use and performance. You may use this library, redistribute and
## modify it under the same terms as Perl itself.
## 
## IN NO EVENT WILL THE AUTHOR BE LIABLE TO YOU FOR ANY CONSEQUENTIAL,
## INCIDENTAL OR SPECIAL DAMAGES, INCLUDING ANY LOST PROFITS OR LOST
## SAVINGS, EVEN IF AN IMS REPRESENTATIVE HAS BEEN ADVISED OF THE
## POSSIBILITY OF SUCH DAMAGES, OR FOR ANY CLAIM BY ANY THIRD PARTY.


package My::Forms;
use Carp;

use My::Config;
use My::Param;
use CGI qw/:standard/;


##
##  encode query string for GET method
##

# $url_string = My::Forms::MakeGETString([$par1, ...], {$par => $val, ...}, ...);
#   encode specified parameters as GET string that can be appended to a URL (for a CGI script)
#   [...] = standard params from My::Param with current values, allowing shell-style wildcards * and ?
#   {...} = explicit key-value pairs)
sub MakeGETString {
  my @url = ();
  foreach my $arg (@_) {
    my $r = ref $arg;
    my ($par, $val);
    if (not $r) {				# simple scalar -> assume it's the name of a standard parameter
      push @url, par2url($arg);
    }
    elsif ($r eq "ARRAY") {			# [ ... ] -> list of standard parameters (insert current values)
      push @url, par2url(@$arg);
    }
    elsif ($r eq "HASH") {			# { ... } -> explicit key-value pairs
      foreach $par (keys %$arg) {
	$val = $arg->{$par};
	push @url, "$par=".escapeGET($val);
      }
    }
    else {
      croak 'Usage:  $url_string = My::Forms::MakeGETString([$par1, ...], {$par => $val, ...}, ...);';
    }
  }
  return join("&", @url);
}

# helper functions for MakeGETString
sub escapeGET {
  my $str = shift;
  $str =~ s/([^A-Za-z0-9_])/sprintf "%s%02x", "%", ord($1)/ge;
  return $str;
}

sub par2url {
  my @url = ();
  foreach my $arg (@_) {
    my @pars = My::Param::Matching($arg);
    foreach my $par (@pars) {
      my $val = My::Param::Get($par);
      push @url, "$par=".escapeGET($val);
    }
  }
  return @url;
}


##
##  create entry buttons and hidden files for standard parameters
##

# print My::Forms::Hidden($param, ...);
#   create HTML form hidden field for parameter(s) $param, ... with current value(s) 
#   groups of parameters can be specified with shell-style wildcards * and ?
sub Hidden {
  my @html;
  while (@_) {
    my $par = shift;
    foreach my $p (My::Param::Matching($par)) {
      my $val = My::Param::Get($p);
      push @html, hidden(-name => $p, -default => $val);
    }
  }
  return @html;
}

# print My::Forms::PopupMenu($param);
#   create HTML form popup menu for standard parameter $param (must be of type "code")
sub PopupMenu {
  croak 'print My::Forms::PopupMenu($param);'
    unless @_ == 1;
  my $par = shift;
  my $default = My::Param::Get($par);		# use current value as default (if not handled correctly by CGI library)
  # the previous line also checks whether $par is a valid parameter
  croak "My::Forms::PopupMenu: '$par' parameter not of type 'code'."
    unless $My::Param::ParamDefs{$par}{'type'} eq "code";
  my @values = @{$My::Param::ParamDefs{$par}{'values'}};
  my @desc = @values;
  @desc = @{$My::Param::ParamDefs{$par}{'desc'}}
    if exists $My::Param::ParamDefs{$par}{'desc'};
  croak "My::Forms::PopupMenu: internal error, #(descriptions) != #(values) for parameter '$par'"
    unless @values == @desc;
  my %labels = ();
  for my $i (0 .. $#values) {
    $labels{$values[$i]} = $desc[$i];
  }
#  return popup_menu($par, \@values, $default, \%labels);
  my @java=();
  if (my $onChange = $My::Param::ParamDefs{$par}{'onChange'}){
      push(@java,'-onChange',$onChange);
  }
  return popup_menu(-name => $par, 
		    -values => \@values, 
		    -default => $default, 
		    -labels => \%labels,
		    @java);
}

# print My::Forms::Checkbox($param [, $label]);
#   create HTML form checkbox for standard parameter $param (must be of type "boolean")
sub Checkbox {
  croak 'print My::Forms::Checkbox($param [, $label]);'
    unless @_ == 1 or @_ == 2;
  my $par = shift;
  my $label = (@_) ? shift : "";
  my $default = My::Param::Get($par);		# use current value as default (if not handled correctly by CGI library)
  # the previous line also checks whether $par is a valid parameter
  croak "My::Forms::Checkbox: '$par' parameter not of type 'boolean'."
    unless $My::Param::ParamDefs{$par}{'type'} eq "boolean";
  return checkbox(-name => $par, -checked => $default, -value => "1", -label => $label);
}


##
##  some "standard" forms or parts of forms
##

# print My::Forms::Navbar($first, $size); 
#   create navigation bar for query results ($first = first match currently displayed, $size = number of matches)
#   use of "display.pl" as target CGI script and 20 matches per page are hardcoded
sub Navbar {
  croak 'Usage:  print My::Forms::Navbar($first, $size);'
    unless @_ == 2;
  my $first = shift;
  my $size = shift;
  my $page = int($first / 20);
  my $last_page = int(($size - 1) / 20);
  my $imgdir = $My::Config::ImgDir;
  my $space = '&nbsp;&nbsp;';
  my $url_string = "display.pl?".MakeGETString(qw<corpus mode query subquery wordlemma casefold sort keyword* context pos xp>);
  
  # special treatment for alignment checkbox group
  my @alg = CGI::param('alg');
  foreach my $a (@alg){
      $url_string .= ';alg='.$a;
  }

  my @html = ();
  push @html, start_form(-method => "POST", -action => "display.pl");
  push @html, Hidden(qw<corpus mode query subquery wordlemma casefold sort keyword* context pos xp>);
  if (@alg){
      push @html, hidden(-name => 'alg', -default => $a);
  }

  if ($page > 0) {
    push @html, a({-href => "$url_string\&first=0"}, img({-src => "$imgdir/start.gif", -alt => "|<<"}));
    push @html, a({-href => "$url_string\&first=".(20*($page-1))}, img({-src => "$imgdir/left.gif", -alt => "<<"}));
  }
  else {
    push @html, img({-src => "$imgdir/start-grey.gif", -alt => ""});
    push @html, img({-src => "$imgdir/left-grey.gif", -alt => ""});
  }
  push @html, $space;
  my $page1 = $page - 20;
  $page1 = 0 
    if $page1 < 0;
  my $page2 = $page + 20;
  $page2 = $last_page
    if $page2 > $last_page;
  my %labels = ();				# construct values and labels for popup menu
  my @values = ();
  foreach my $p ($page1 .. $page2) {
    my $f = 20 * $p;
    my $l = $f + 20;
    $l = $size 
      if $l > $size;
    $labels{$f} = ($f+1)." - $l";
    push @values, $f;
  }
  push @html, popup_menu("first", \@values, $first, \%labels);
  push @html, submit(-name => "action", -value => "Go");
  push @html, $space;
  if ($page < $last_page) {
    push @html, a({-href => "$url_string\&first=".(20*($page+1))}, img({-src => "$imgdir/right.gif", -alt => ">>"}));
    push @html, a({-href => "$url_string\&first=".(20*($last_page))}, img({-src => "$imgdir/end.gif", -alt => ">>|"}));
  }
  else {
    push @html, img({-src => "$imgdir/right-grey.gif", -alt => ""});
    push @html, img({-src => "$imgdir/end-grey.gif", -alt => ""});
  }
  push @html, end_form, "\n";
  return "@html";
}

# print My::Forms::DisplayOptions();
#   create popup menu buttons for KWIC display options (no complete form)
sub DisplayOptions {
  my $space = '&nbsp;';
  my @html = ();

  my @values = @{$My::Param::ParamDefs{"pos"}{'values'}};
  if (@values>1){
      push @html, "tokens&nbsp;=&nbsp;".PopupMenu("pos"), $space;
  }
  else{
      push(@html,hidden('pos',My::Param::Get('pos')));
  }
  my @values = @{$My::Param::ParamDefs{"xp"}{'values'}};
  if (@values>1){
      push @html, "phrases&nbsp;=&nbsp;".PopupMenu("xp"), $space;
  }
  else{
      push(@html,hidden('xp',My::Param::Get('xp')));
  }
  push @html, "context&nbsp;=&nbsp;".PopupMenu("context");
#  push @html, AlignMenu($My::Config::Corpus,$My::Config::Registry);
  return "@html";
}



sub AlignMenu{
    my ($corpus,$registry)=@_;
    my $regfile = "$registry/".lc($corpus);
    return "cannot find $regfile!" if (not -f $regfile);

    open F,"<$regfile";
    my @reg=grep { /ALIGNED/ } <F>;
    close F;
    my @alg=();
    foreach (@reg){
	if (/ALIGNED\s*(\S.*)$/){
	    push(@alg,$1);
	}
    }
    return checkbox_group(-name=>'alg',
			  -values=>\@alg,
			  -default=>[],
			  -linebreak=>0);
#			  -labels=>\%labels);
}


##
##  My::Forms loaded successfully
##

return 1;
