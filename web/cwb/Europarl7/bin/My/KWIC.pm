###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CQPDemo KWIC line formatter                      ###
###   Created: Mon Apr 21 18:56:21 2003                         ###
###  Modified: Mon Mar  1 11:50:13 2004 (evert)                 ###
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


package My::KWIC;
use Carp;

use My::Config;
use My::Param;

# use CGI qw/:standard/;
use CGI qw/:standard escapeHTML escape/;

##
##  compute context of specified region from 'context' parameter
##

# ($c_start, $c_end) = My::KWIC::Context($start, $end);
#   start and end cpos of context around region $start .. $end
sub Context {
  croak 'Usage:  ($c_start, $c_end) = My::KWIC::Context($start, $end);'
    unless @_ == 2;
  my $s = shift;
  my $e = shift;
  my $context = My::Param::Get("context");
  $context =~ /^\s*([0-9]*)\s*([a-z_][a-z0-9_-]*)\s*$/
    or croak "My::KWIC::Context: invalid context specification '$context'.";
  my $num = $1;
  my $unit = $2;
  $num = 1
    unless $num;
  croak "My::KWIC::Context: invalid context specification '$context'."
    unless $num >= 1;
  my $cs = $s;
  my $ce = $e;
  if ($unit =~ /^words?$/) {
    $cs = $s - $num;
    $ce = $e + $num;
  }
  else {
    my $att = My::Config::GetAttribute($unit);	# hope it's a structural attribute, otherwise we'll just crash
    croak "My::KWIC::Context: attribute does not exist in context specification '$context'."
      unless defined $att;
    my $struc = $att->cpos2struc($s);
    if (defined $struc) {
      $struc = $struc + 1 - $num;
      $struc = 0
	if $struc < 0;
      ($cs, undef) = $att->struc2cpos($struc);
    }
    $struc = $att->cpos2struc($e);
    if (defined $struc) {
      $struc = $struc - 1 + $num;
      my $max = $att->max_struc;
      $struc = $max - 1
	if $struc >= $max;
      (undef, $ce) = $att->struc2cpos($struc);
    }

  }
  # now make sure context doesn't extend beyond corpus limits
  my $att = My::Config::GetAttribute("word");
  my $max = $att->max_cpos;
  $cs = 0
    if $cs < 0;
  $ce = $max - 1
    if $ce >= $max;
  return ($cs, $ce);
}


##
##  format KWIC string according to relevant parameter settings
##

# $html_string = My::KWIC::Format($start, $end [, $target, $keyword]);
#   format corpus range $s .. $e as HTML string according to parameter settings
sub Format {
  croak 'Usage:  $html_string = My::KWIC::Format($start, $end [, $target, $keyword]);'
    unless @_ >= 2 and @_ <= 4;
  my $start = shift;
  my $end = shift;
  my $target = (@_) ? shift : -1 ;
  my $keyword = (@_) ? shift : -1 ;

  # display paramters: 'pos' and 'xp'
  my $par_pos = My::Param::Get("pos");
  my $par_xp = My::Param::Get("xp");

  # load relevant attributes (to avoid multiple lookups)
  my $Word = My::Config::GetAttribute("word");
  my $POS;
  my $Lemma;
#  if ($My::Config::Corpus=~/en/i){
#      eval { $POS = My::Config::GetAttribute("tnt"); };
##      eval { $POS = My::Config::GetAttribute("tree"); };
#  }
  if ($My::Config::Corpus=~/(bg|de|en|es|et|nl)/i){
      eval { $POS = My::Config::GetAttribute("tree"); };
  }
  elsif ($My::Config::Corpus=~/(cs|da|pt|sl|sv)/i){
      eval { $POS = My::Config::GetAttribute("hun"); };
  }
  else{
      eval { $POS = My::Config::GetAttribute("pos"); };
  }
  eval { $Lemma = My::Config::GetAttribute("lem"); };

  my $CHUNK;

  if ($par_xp ne "none") {
      if ($My::Config::Corpus=~/en/i){
	  eval { $CHUNK = My::Config::GetAttribute("chunk_type"); };
      }
      elsif ($My::Config::Corpus=~/sv/i){
	  eval { $CHUNK = My::Config::GetAttribute("chunk_type"); };
      }
  }

  # now go through range of cpos and format each token
  my @html = ();				# list of HTML-formatted tokens (and phrase boundaries)
  for my $cpos ($start .. $end) {

    if ($par_xp ne "none") {			# process XP start tags 

	my $struc = $CHUNK->cpos2struc($cpos);

	if (defined $struc) {
	    my $label = $CHUNK->struc2str($struc);
	    my ($temp_s) = $CHUNK->struc2cpos($struc); # find out whether $cpos is the start of a region
	    if ($cpos == $temp_s) {		# (this function is really missing in the CL)
	    # format start tag according to $par_xp
		my $html = "";
		if ($par_xp eq "brack") {
		    $html = ($label =~ /^p/) ? "[": b("[");
		}
		elsif ($par_xp eq "lbrack") {
		    $html = "[".Sub(uc $label);
		    $html = ($label =~ /[0-9]$/) ? $html : b($html);
		}
		elsif ($par_xp eq "cbrack") {
		    $html = ($label =~ /[0-9]$/) ? "[" : b("[");
		    if ($label =~ /^n/i) {
			$html = span({-class => "blue"}, $html); # NP
		    }
		    elsif ($label =~ /^p/i) {
			$html = span({-class => "green"}, $html); # PP
		    }
		}
		push @html, $html;
	    }
	}
    }

    my $html = "";				# process token annotations
    my $word = ($par_pos ne "lemmapos") ? $Word->cpos2str($cpos) : "";
    my $pos = ($par_pos ne "word") ? $POS->cpos2str($cpos) : "";
    my $lemma = ($par_pos eq "lemmapos") ? $Lemma->cpos2str($cpos) : "";
    if ($par_pos eq "word") {
      $html = DecodeString($My::Config::Corpus,$word);
    }
    elsif ($par_pos eq "wordpos") {
      $html = DecodeString($My::Config::Corpus,$word).span({-class => "grey"}, escapeHTML("/$pos"));
    }
    elsif ($par_pos eq "lemmapos") {
      $html = DecodeString($My::Config::Corpus,$lemma).span({-class => "grey"}, escapeHTML("/$pos"));
    }
    else {					# colour-coded SARA style
      my $col = "";
      $col = "blue" if $pos =~ /^N/;
      $col = "green"  if $pos =~ /^J/;
      $col = "orange"   if $pos eq "DT";
      $col = "red"    if $pos =~ /^V/;
      my @col_par = ($col) ? (-class => $col) : ();
      $html = span({@col_par, -title => $pos}, DecodeString($My::Config::Corpus,$word));
    }
    if ($cpos == $keyword) {
      $html = span({-class => 'keyword'}, $html);
    }
    if ($cpos == $target) {
      $html = span({-class => 'target'}, $html);
    }
    push @html, $html;


    if ($par_xp ne "none") {			# process XP end tags
	my $struc = $CHUNK->cpos2struc($cpos);
	if (defined $struc) {
	    my $label = $CHUNK->struc2str($struc);
	    my $temp_e = undef;
	    (undef, $temp_e) = $CHUNK->struc2cpos($struc); # find out whether $cpos is the end of a region
	    if ($cpos == $temp_e) {		# (this function is really missing in the CL)
		# format start tag according to $par_xp
		my $html = "";
		if ($par_xp eq "brack") {
		    $html = ($label =~ /^p/) ? "]": b("]");
		}
		if ($par_xp eq "lbrack") {
		    $html = ($label =~ /[0-9]$/) ? "]": b("]");
		}
		elsif ($par_xp =~ /^cbrack/) {
		    $html = ($label =~ /[0-9]$/) ? "]" : b("]");
		    if ($label =~ /^n/i) {
			$html = span({-class => "blue"}, $html); # NP
		    }
		    elsif ($label =~ /^p/i) {
			$html = span({-class => "green"}, $html); # PP
		    }
		}
		push @html, $html;
	    }
	}
    }
  }
  return "@html";
} 



#------------------------------------------------------
# FixString: convert from CWB-format 
# to UTF-8 if necessary!


sub DecodeString{
    use Encode;

    my ($lang,$string)=@_;
#    my $lang = $My::Config::Corpus;

    $string=decode('utf-8',$string);
    return escapeHTML($string);


    if ($lang=~/^(ar|az|be|bg|bs|he|id|jp|ja|ko|ku|mi|mk|ru|ta|th|uk|vi|xh|zh_tw|zu|bul|chi|rus|heb|jpn|jap)$/i){
#	decode_entities($string);
	$string=decode('utf-8',$string);
    }
#    if ($lang eq 'el'){decode_entities($string);}
    elsif ($lang=~/^(cs|hr|hu|pl|ro|sk|sl|sr|cze|hrv|rum|slv)$/i){
#	decode_entities($string);
	$string=decode('iso-8859-2',$string);
    }
    elsif ($lang=~/^(et||lt|lv|ice|lit)$/i){
#	decode_entities($string);
	$string=decode('iso-8859-4',$string);
    }
    elsif ($lang=~/^(el|gre|ell)$/i){
#	decode_entities($string);
	$string=decode('iso-8859-7',$string);
    }
    elsif ($lang=~/^(tr|tur)$/i){
#	decode_entities($string);
	$string=decode('iso-8859-9',$string);
    }
    else{
	$string=decode('iso-8859-1',$string);
    }
    return escapeHTML($string);
}

sub AlignContext{
    my ($start,$end,$lang) = @_;
    my $corpus = $My::Config::CorpusHandle;
    my $algcorpus = $corpus->attribute(lc($lang),'a');
    return '' if (not defined $algcorpus);

    my $string = '';

    if (my $alg = $algcorpus->cpos2alg($start)){
	my ($src_start, $src_end, $target_start, $target_end)
	    = $algcorpus->alg2cpos($alg);
	my ($target_start_tmp,$src_start_tmp);
	if (my $alg = $algcorpus->cpos2alg($end)){
	    ($src_start, $src_end, $target_start_tmp, $target_end)
		= $algcorpus->alg2cpos($alg);
	}

	use CWB::CL;
	$CWB::CL::Registry = $My::Config::Registry if defined $My::Config::Registry;
	my $CorpusHandle = new CWB::CL::Corpus uc($lang);
	return '' if (not defined $CorpusHandle);

	for my $cpos ($target_start .. $target_end) {
	    my $Word = $CorpusHandle->attribute("word","p");
	    $Word = $CorpusHandle->attribute("word","s") if not defined $Word;
	    $string .= DecodeString($lang,$Word->cpos2str($cpos));
	    $string .= ' ';
	}
    }
    return $string;
}


##
##  My::KWIC loaded successfully
##

return 1;
