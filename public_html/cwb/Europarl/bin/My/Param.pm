###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CQPDemo parameter handler with default values and error checking
###   Created: Mon Apr 21 18:56:21 2003                         ###
###  Modified: Mon Mar  1 11:51:30 2004 (evert)                 ###
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


package My::Param;
use Carp;

use My::Config;

%Par = ();					# data structure for parameter values

##
##  Interface routines
##

# $value = My::Param::Get($param);
#   retrieve parameter value (default value, CGI parameter, or set explicitly)
sub Get {
  croak 'Usage:  $value = My::Param::Get($param);'
    unless @_ == 1;
  my $param = shift;
  My::Config::Error("Internal error.", "My::Param::Get: Unknown parameter '$param'.")
      unless exists $Par{$param};
  return $Par{$param};
}

# My::Param::Set($param, $value);
#   explicitly set parameter value (with validation, shows HTML error page if invalid)
sub Set {
  croak 'Usage:  My::Param::Set($param, $value);'
    unless @_ == 2;
  my $param = shift;
  my $value = shift;
  SetLocal($param, $value);			# if this succeeds, the parameter name and value must be valid
  param($param, $value);			# also set parameter in CGI module, to allow explicit overrides for CGI-generated forms
}

# My::Param::SetLocal($param, $value);
#   set local parameter value only, don't "write back" to CGI module
sub SetLocal {
  croak 'Usage:  My::Param::SetLocal($param, $value);'
    unless @_ == 2;
  my $param = shift;
  my $value = shift;
  My::Config::Error("Internal error.", "My::Param::Set: Unknown parameter '$param'.")
      unless exists $ParamDefs{$param};
  my $type = $ParamDefs{$param}{'type'};
  my $vals = $ParamDefs{$param}{'values'};
  if ($type eq "integer") {
    My::Config::Error("Internal error.", "Invalid value '$value' for parameter '$param'.")
	unless $value =~ /^-?[0-9]+$/;
    if (defined $vals) {
      my ($lower, $upper) = @$vals;
      my $ok = 1;
      if ($lower eq "") {
	$lower = "-Inf";
      } else {
	$ok = 0
	  unless $lower <= $value;
      }
      if ($upper eq "") {
	$upper = "Inf";
      } else {
	$ok = 0
	  unless $value <= $upper;
      }
      My::Config::Error("Internal error.", "Value '$value' out of range [$lower, $upper] for parameter '$param'.")
	  unless $ok;
    }
  } elsif ($type eq "code") {
    my %vals = map {$_ => 1} @$vals;
    My::Config::Error("Internal error.", "Value '$value' not valid for parameter '$param'.")
	unless exists $vals{$value};
  } elsif ($type eq "string") {
    # no validation necessary for string parameters
  } elsif ($type eq "boolean") {
    My::Config::Error("Internal error.", "Value '$value' not valid for parameter '$param'.")
	unless $value eq "1" or $value eq "0" or $value eq "";
    $value = 0
      unless $value;				# set "false" state to canonical numeric 0
  } else {
    croak "Error: Unknown parameter type '$type' for parameter '$param'.";
  }
  $Par{$param} = $value;
}

# @list = My::Param::Values($param);
#   returns list of acceptable values for parameter (codes or end points of numeric range)
sub Values {
  croak 'Usage:  @list = My::Param::Values($param);'
    unless @_ == 1;
  My::Config::Error("Internal error.", "My::Param::Values: Unknown parameter '$param'.")
      unless exists $Par{$param};
  My::Config::Error("Internal error.", "My::Param::Values: No value list found for parameter '$param'.")
      unless exists $Par{$param}{'values'};
  return @{$Par{$param}{'values'}};
}

# @names = My::Param::Matching($pattern);
#   returns names of parameters matching $pattern with shell-style wildcards ? and *
sub Matching {
  croak 'Usage:  @names = My::Param::Matching($pattern);'
    unless @_ == 1;
  my $pattern = shift;
  return $pattern
    unless $pattern =~ /[*?]/;
  my $regex = "^";
  while ($pattern =~ /[*?]/) {
    $regex .= quotemeta($`);
    $regex .= ($& eq "*") ? ".*" : ".";
    $pattern = $';
  }
  $regex .= "$pattern\$";
  my $rx = qr/$regex/;
  return grep { /$rx/ } keys %ParamDefs;
}


##
##  Parameter definitions, including type, range of values, and default value.
##

%ParamDefs = (
	      "action" => {			# this is the parameter transmitted by a submit button (may or may not be used)
			   type => "string",	# (string = arbitrary character string)
			   default => "",
			  },
	      "mode" => {			# query mode (CQP query or simple query)
			 type => "code",	# (code = code from list below)
			 values => [qw<cqp simple>],
			 default => "cqp",
			},
	      "query" => {			# query expression (CQP query or simple query, depending on mode)
			  type => "string",
			  default => "",
			 },
	      "subquery" => {			# subquery (for filtering query results, always a CQP query)
			     type => "string",
			     default => "",
			    },
	      "casefold" => {			# case-folding (for simple search and word lists)
			     type => "code",
			     values => ["", "c"],
			     desc => ["literal", "case-folded"],
			     default => "",
			    },
	      "wordlemma" => {			# search on word forms or lemmata? (simple search)
			     type => "code",
			     values => ["word", "lemma", "auto"],
			     desc => ["word forms", "lemmata", "automatic"],
			     default => "word",
			    },
	      "context" => {			# KWIC context
			    type => "code",
			    values => ["5 words", "1 s", "2 s"], # parameter values
			    desc => ["5 words", "sentence", "2 sentences"], # value descriptions shown in HTML form
			    default => "1 s",
			   },
	      "sort" => {			# sort mode
			 type => "code",
			 values => [qw<none asc desc rev drev>],
			 desc => ["unsorted", "ascending", "descending", "reverse", "reverse desc."],
			 default => "none",
			},
	      "first" => {			# first match to display
			  type => "integer",	# (simple integer value)
			  values => [0, ""],	# (non-negative, i.e. within range 0 .. infinity)
			  default => 0,
			 },
	      "xp" => {				# display s-attributes for XPs
		       type => "code",
# 		       values => [qw<none brack lbrack cbrack cbrackhd>],
#		       desc => ["off", "brackets", "labelled", "colour-coded", "colour + head"],
 		       values => [qw<none>],
		       desc => ["off"],
		       default => "none",
		      },
	      "pos" => {			# display p-attributes (token annotations)
			type => "code",
			values => [qw<word>],
			desc => ["word"],
#			values => [qw<word wordpos sara lemmapos>],
#			desc => ["word", "word/POS", "SARA style", "lemma/POS"],
			default => "word",
		       },
	      "start" => {			# start and end cpos (of match) for context display
			  type => "integer",
			  values => [0, ""],
			  default => 0,
			 },
	      "end" => {
			type => "integer",
			values => [0, ""],
			default => 0,
		       },
	      "tool" => {			# name of corpus tool (hidden input)
			 type => "code",
			 values => ["wordlist", "phrases"],
			 default => "wordlist",
			},
	      "attribute" => {			# selected p-attribute (word list etc.)
			      type => "code",
#			      values => ["word", "pos", "lemma"],
			      values => ["word"],
#			      desc => ["word form", "POS", "lemma"],
			      desc => ["word form"],
			      default => "word",
			     },
	      "wlsort" => {			# word list sort options (also used by phrases)
			   type => "code",
			   values => ["lexical", "freq", "case"],
			   desc => ["lexical", "by frequency", "case-folded"],
			   default => "lexical",
			  },
	      "wlcutoff" => {			# word list frequency cutoff (also used by phrases)
			     type => "code",
			     values => [qw<1 2 3 4 5 10 20 50 100 500 1000>],
			     default => "1",
			    },
	      "wlfilter" => {			# fiter pattern for word list (allows wildcards)
			     type => "string",
			     default => "*",
			    },
	      "phraselen" => {			# length of phrases (number of consecutive tokens)
			      type => "code",
			      values => [qw<3 4 5 6>],
			      default => "3",
			     },
	      "phrasefilter" => {		# filter phrases (by POS tags)
				 type => "code",
				 values => ["none", "noun", "closed", "open"],
				 desc => ["none", "nouns only", "closed-class", "open-class"],
				 default => "none",
				},
	      "keyword" => {			# execute set keyword command?
			    type => "boolean",	# (boolean = yes/no switch, implemented as checkbox)
			    default => 0,	# defaults to false
			   },
	      "keyword_strategy" => {		# keyword search strategy
				     type => "code",
				     values => ["nearest", "leftmost", "rightmost"],
				     default => "nearest",
				    },
	      "keyword_cond" => {		# pattern which keyword must match
				 type => "string",
				 default => "",
				},
	      "keyword_dir" => {		# keyword search direction
				type => "code",
				values => ["", "left", "right"],
				default => "",
			       },
	      "keyword_size" => {		# size of keyword search space
				 type => "code",
				 values => ["5 words", "10 words", "1 s"],
				 default => "5 words",
				},
	      "keyword_base" => {		# keyword search base position
				 type => "code",
				 values => ["match", "matchend", "target"],
				 default => "match",
				},
	      "keyword_inclusive" => {		# whether to include base in search
				      type => "boolean", 
				      default => 0, # defaults to false (= exclusive)
				     },
# 	      "alg" => {
#			 type => "string",
#                         default => '',
#				},
 	      "corpus" => {
				 type => "code",
                                 onChange => "submit()",
				},
	     );

    my $dir = $My::Config::Registry;
    my @langs = ();
    if (opendir(DIR, $dir)){
	@langs = sort grep { /^[^\.]/ } readdir(DIR);
	closedir DIR;
    }
    $ParamDefs{corpus}{values} = \@langs;
    $ParamDefs{corpus}{default} = lc($My::Config::Corpus);
#    $ParamDefs{corpus}{default} = $langs[0];
#    my ($eng) = grep { /^en/i } @langs;
#    $ParamDefs{corpus}{default} = $eng if (defined $eng);

if ($My::Config::Corpus=~/(de|en|fr|it|pt|sv)/i){
    push (@{$ParamDefs{pos}{values}},'wordpos');
    push (@{$ParamDefs{pos}{desc}},'word/POS');
    push (@{$ParamDefs{pos}{values}},'sara');
    push (@{$ParamDefs{pos}{desc}},'SARA style');
}
if ($My::Config::Corpus=~/(de|en|fr|it)/i){
    push (@{$ParamDefs{pos}{values}},'lemmapos');
    push (@{$ParamDefs{pos}{desc}},'lemma/POS');
}
if ($My::Config::Corpus=~/(en|sv)/i){
    push (@{$ParamDefs{xp}{values}},('brack','lbrack','cbrack'));
    push (@{$ParamDefs{xp}{desc}},('brackets','labelled','colour-coded'));
}
#if ($My::Config::Corpus=~/(de|en|fr|it|pt|sv)/i){
if ($My::Config::Corpus=~/(de|en|fr|it)/i){
    push (@{$ParamDefs{attribute}{values}},('tree','lem'));
    push (@{$ParamDefs{attribute}{desc}},('POS','lemma'));
}
if ($My::Config::Corpus=~/(sv|pt)/i){
    push (@{$ParamDefs{attribute}{values}},('pos'));
    push (@{$ParamDefs{attribute}{desc}},('POS'));
}




##
##  Initialise defined parameters with default values / CGI parameters
##

use CGI qw/:standard/;

# set default values
foreach $p (keys %ParamDefs) {
  next if ($p eq 'alg');
  SetLocal($p, $ParamDefs{$p}{'default'});
}

# accept and set CGI parameters
foreach $p (param()) {
  next if ($p eq 'alg');
  SetLocal($p, param($p));
}



##
##  My::Param loaded successfully
##

return 1;
