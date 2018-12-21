###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CQPDemo query-related functionality              ###
###   Created: Mon Apr 21 18:56:21 2003                         ###
###  Modified: Mon Mar  1 11:51:56 2004 (evert)                 ###
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


package My::Query;
use Carp;

use My::Config;
use My::Param;


# $id = My::Query::CQP();
#   execute CQP query, sort, and set keyword according to relevant parameter settings;
#   returns name of query result
sub CQP {
  my $cqp = $My::Config::CQP;
  my $cache = $My::Config::Cache;
  my $corpus = $My::Config::Corpus;

  my $query = My::Param::Get("query");
  $query =~ s/\s+/ /g;				# CQP doesn't take kindly to carriage returns, so normalise whitespace in query

  ## add dummy queries for aligned corpora 
  ## to make sure to get only aligned units
#  my $action = lc(My::Param::Get("action"));
#  if ($action !~ /(distribution|frequenc(y|ies))/) {
      my @alg = CGI::param('alg');
      foreach my $a (@alg){
	  my $lang = uc($a);
	  if (not /:$lang/){
	      $query .= " :$lang []";
	  }
      }
#  }

  my $subquery = My::Param::Get("subquery");
  $subquery =~ s/\s+/ /g;
  $subquery = "" if $subquery =~ /^\s*$/;

  my $sort = My::Param::Get("sort");
  my $sort_clause = "";
  $sort_clause = 'by word %cd ascending'
    if $sort eq "asc";
  $sort_clause = 'by word %cd descending'
    if $sort eq "desc";
  $sort_clause = 'by word %cd descending reverse'
    if $sort eq "drev";
  $sort_clause = 'by word %cd reverse'
    if $sort eq "rev";

  my $keyword = My::Param::Get("keyword");
  my $setk_cmd = "";
  if ($keyword) {
    my $strategy = My::Param::Get("keyword_strategy");
    my $condition = My::Param::Get("keyword_cond");
    my $direction = My::Param::Get("keyword_dir");
    my $size = My::Param::Get("keyword_size");
    my $base = My::Param::Get("keyword_base");
    $condition = "[ $condition ]"		# dwim brackets around keyword search pattern
      unless $condition =~ /^\s*[\[\"\']/;
    $setk_cmd = "$strategy $condition within $direction $size from $base";
    $setk_cmd .= " inclusive"
      if My::Param::Get("keyword_inclusive");
  }
  return $cache->query(-corpus => $corpus, 
		       -query => $query, -subquery => $subquery,
		       -sort => $sort_clause, -keyword => $setk_cmd, 
		       -cut => $My::Config::MaxMatches);
}


# package variables for My::Query::Simple(), used when reporting syntax errors
@SQtok = ();					# tokenised simple query (holds remaining tokens while processing query)
@SQdone = ();					# query string tokens that have already been processed

# internal helper subroutines for My::Query::Simple()
# SQerror("msg1", "msg2", ...); ... report syntax error in simple query
sub SQerror {
  My::Config::Error("Syntax error in simple query expression.",
		    "  @SQdone  <==",
		    @_);
}
# $expr = string2cqp($string [, $flags]); 
#    ... translate $string into CQP literal string or regular expression (if it contains wildcards or $flags are specified)
sub string2cqp {
  my $string = shift;
  my $flags = (@_) ? shift : "";
  $flags = "\%$flags" unless $flags eq "";
  if ($string =~ /[*+?]/ or $flags) {		# string contains wildcards -> translate to regular expression
    my $regex = Wildcards($string);
    return "\"$regex\" $flags";
  }
  else {					# no wildcards -> literal string, disallowing only unsafe characters
    My::Config::Error("Invalid string.", "Sorry, the string", "  $string", 
		      "may not contain the special characters \" and \\ ")
	if $string =~ /[\"\\]/;
    return "\"$string\" \%l";
  }
}


# $id = My::Query::Simple();
#   execute simple query and sort results, according to relevant parameter settings;
#   the simple query expression is syntax-checked and converted into an equivalent CQP query;
#   returns name of query result
sub Simple {
  my $cqp = $My::Config::CQP;
  my $cache = $My::Config::Cache;
  my $corpus = $My::Config::Corpus;

  my $query = My::Param::Get("query");
  my $flags = My::Param::Get("casefold");
  my $wordlemma = My::Param::Get("wordlemma");

  my $subquery = My::Param::Get("subquery");
  $subquery =~ s/\s+/ /g;
  $subquery = "" if $subquery =~ /^\s*$/;

  # normalise simple query expression and transform it into a CQP query
  $query =~ s/([\[\]\(\)\{\}\|])/ $1 /g;	# insert whitespace around metacharacters,
  $query =~ tr[\x00-\x1f][ ];			# replace control characters by whitespace
  $query =~ s/^\s+//;				# then delete leading and trailing whitespace
  $query =~ s/\s+$//;
  @SQtok = split /\s+/, $query;			# split simple query into (whitespace-delimited) tokens
  @SQdone = ();					# query string tokens that have already been processed (for error messages)
  my @query = ();				# equivalent CQP query expression, which will be built incrementally
  my @stack = ();				# metacharacter stack for syntax-checking (..|..), [...], and {...}
  my %poscode = ("A" => "JJ.*", "N" => "N.*", "V" => "VB.*", # abbreviated part-of-speech code
		 "Det" => "DT", "Adv" => "RB.*", "Pro" => "PP.*",
		 "Prep" => "IN|TO", "Wh" => "W.*", "\$" => '"|\(|\)|,|:|``|SENT');

  while (@SQtok) {
    my $t = shift @SQtok;
    push @SQdone, $t;
    if ($t =~ /^[\(\[\{]$/)	{		# (, [, {
      push @stack, $t;
      push @query, "(";
    }
    elsif ($t eq "|") {				# |
      SQerror("Disjunction character '|' may only be used within (...), [...], or {...}")
	unless @stack;
      push @query, "|";
    }
    elsif ($t =~ /^[\)\]\}]$/) {		# ), ], }
      my %matching = (")" => "(", "]" => "[", "}" => "{"); # map to matching opening bracket
      my %action = (")" => ")", "]" => ")?", "}" => ")*"); # element that will be inserted into CQP query
      SQerror("Unbalanced closing bracket '$t'")
	unless @stack and $stack[-1] eq $matching{$t};
      pop @stack;
      push @query, $action{$t};
    }
    elsif ($t =~ /^\.{2,4}$/) {			# .. (0-2), ... (1-5), .... (2 - 10)
      if ($t eq "..") {
	push @query, "[]{0,2}"
      }
      elsif ($t eq "...") {
	push @query, "[]{1,5}"
      }
      else {
	push @query, "[]{2,10}"
      }
    }
    elsif ($t =~ /^([NP]P)(=(.+))?$/) {		# NP, PP, NP=time, PP=for
      my $xp = lc($1);
      my $head = $3;
      if ($head) {
	my $constraint = string2cqp($head, $flags);
	$xp .= "_h";				# use np_h or pp_h s-attribute to match head
	push @query, "<$xp $constraint> []+ </$xp>";
      }
      else {
	push @query, "<$xp> []+ </$xp>";
      }
    }
    elsif (exists $poscode{$t}) {		# abbreviated part of speech: A N V Det Adv Pro Prep Wh $
      my $rx = $poscode{$t};
      push @query, "[pos = '$rx']";
    }
    elsif ($t =~ /^[A-Z]+$/) {			# uppercase letters only -> assume part of speech tag
      push @query, "[pos = '$t']";
    }
    elsif ($t =~ /^(.+)\/([^\/]+)$/) {		# fully specified: <word>/<pos> (<pos> may be abbreviated code)
      my ($w, $pos) = ($1, $2);
      my $c_w = string2cqp($w, $flags);		# interpret <word> pattern with current $flags
      my $c_p = (exists $poscode{$pos}) ? "'$poscode{$pos}'" : string2cqp($pos); 
      if ($wordlemma eq "auto") {
	push @query, "[ (word = $c_w | lemma = $c_w) \& (pos = $c_p) ]";
      }
      else {
	push @query, "[ ($wordlemma = $c_w) \& (pos = $c_p) ]";
      }
    }
    else {					# otherwise match as word form (or lemma)
      my $constraint = string2cqp($t, $flags);
      if ($wordlemma eq "auto") {
	push @query, "[ word = $constraint | lemma = $constraint ]";
      }
      else {
	push @query, "[ $wordlemma = $constraint ]";
      }
    }
  }
  SQerror("Unbalanced opening bracket(s) '".join(" ... ", @stack)."'")
    if @stack;
  push @query, "within s";
  # "@query" should be a well-formed CQP query now (keep fingers crossed :)

  # determine sort clause according to "sort" parameter
  my $sort = My::Param::Get("sort");
  my $sort_clause = "";
  $sort_clause = 'by word %cd ascending'
    if $sort eq "asc";
  $sort_clause = 'by word %cd descending'
    if $sort eq "desc";
  $sort_clause = 'by word %cd descending reverse'
    if $sort eq "drev";
  $sort_clause = 'by word %cd reverse'
    if $sort eq "rev";

  # execute CQP query and return result
  return $cache->query(-corpus => $corpus, 
		       -query => "@query", -subquery => $subquery, -sort => $sort_clause,
		       -cut => $My::Config::MaxMatches);
}


# $id = My::Query::Auto();
#   execute CQP or simple query (according to "mode" parameter) and return name of query result
sub Auto {
  my $mode = My::Param::Get("mode");
  if ($mode eq "cqp") {
    return CQP();
  }
  else {
    return Simple();
  }
}


# $regex = My::Query::Wildcards($pattern);
#   converts $pattern with wildcards ?, *, and + into regular expression;  all regex special characters and other
#   potentially dangerous characters will raise an error so it should be safe to use $regex in a double-quoted
#   string either within CQP or in a shell command
sub Wildcards {
  croak 'Usage:  My::Query::Wildcards($pattern);'
    unless @_ == 1;
  my $pattern = shift;
  $pattern =~ s/([\x00-\x1f]|\s)+//g;		# remove control characters and whitespace
  My::Config::Error("Invalid pattern.", "Sorry, the pattern", "  $pattern", 
		    "may not contain the follwing special characters:",
		    '  . ! " ` $ % & ( ) { } [ ] | \ ')
      if $pattern =~ /[\.\!\"\`\$\%\&\(\)\{\}\[\]\|\\]/;
  $pattern =~ s/\?/./g;
  $pattern =~ s/\*/.*/g;
  $pattern =~ s/\+/.+/g;
  return $pattern;
}



##
##  My::Query loaded successfully
##

return 1;
