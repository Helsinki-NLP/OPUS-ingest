###################################################################
###                                                             ###
###    Author: Stefan Evert                                     ###
###   Purpose: CQPDemo configuration and basic functions        ###
###   Created: Mon Apr 21 18:56:21 2003                         ###
###  Modified: Mon Mar  1 13:38:59 2004 (evert)                 ###
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


package My::Config;
use Carp;

use lib '/storage/tiedeman/local/lib/perl/5.10.0';
use lib '/storage/tiedeman/local/share/perl/5.10.0';

##
##  User configuration area: edit to match your installation and preferences.
##

## while you can usually accept the defaul values for all other configuration options,
## you must set the local base URL for the HTML pages and data files of the CQPDemo below
## (where indicated by "/EDIT/THIS/PATH").  A typical example is "/CQPDemo".
#$BaseDir = "/EDIT/THIS/PATH";	                # base URL for HTML pages and data files of the CQPDemo
$BaseDir = "/cwb/Europarl";	                # base URL for HTML pages and data files of the CQPDemo
$CacheDir = "/tmp/Europarl-Cache";		# local cache directory for persistent query results
$CacheSize = 10;				# maximal cache size in MBytes
$CacheExpire = 24;				# maximal storage time before query results expire (in hours)

$ImgDir = "$BaseDir/img";
$CSSDir = "$BaseDir/css";

$Corpus = "EN";                                # name of CWB corpus
if (CGI::param('corpus')){
    $Corpus = uc(CGI::param('corpus'));
    param('corpus',lc($Corpus));
}
# $Registry = undef;				# set to registry directory if not in standard registry
$Registry = '/home/opus/public_html/cwb/reg/Europarl3';				# set to registry directory if not in standard registry
$RegistryFlag = (defined $Registry) ? "-r $Registry" : ""; # registry flag to pass to CWB tools

$MaxMatches = 50000;				# maximum number of matches allowed in CQP queries

##
##  Load and configure CGI module (should automatically apply to other modules importing CGI.pm)
##

use CGI qw/:standard/;

$CGI::POST_MAX = 50 * 1024;			# avoid denial-of-service attacks
$CGI::DISABLE_UPLOADS = 1;			# (no file uploads, accept max. 50k of POST data)


##
##  Start CQP process and initialise persistency cache
##

use CWB::CQP;
use CWB::Web::Cache;

$CQP = new CWB::CQP;					# incurs moderate overhead for CGI scripts that do not use CQP
croak "Error: Can't start CQP backend."
  unless defined $CQP;
$CQP->set_error_handler(\&CQP_Error_Handler);	# prints HTML page with error message
$CQP->exec("set Registry '$Registry'")		# set non-standard registry directory
  if defined $Registry;

$Cache = new CWB::Web::Cache -cqp => $CQP, -cachedir => $CacheDir, -cachesize => $CacheSize, -cachetime => $CacheExpire;


##
##  Error handlers (display error message as HTML page)
##

# My::Config::Error($header, $line1, ...);
#   generic error handler, prints headline and body of error message
sub Error {
  my $header = shift;
  print(
	header,
	start_html(-title => "CQPDemo: Error",
		   -style => { -src => "$CSSDir/standard.css" }),
	"\n",
	h1({-class => "error"}, escapeHTML($header)), "\n",
	pre(join("\n", map { escapeHTML($_) } @_), "\n"), "\n",
	end_html);
  exit 0;
}

# CQP error handler for shared CQP backend (calls My::Config::Error to print CQP error message)
sub CQP_Error_Handler {
  Error("Query execution error:", @_);
}


##
##  Direct corpus access (using the CL module)
##

use CWB::CL;

%Attributes = ();				# cache requested attribute handles
$CWB::CL::Registry = $Registry			# set non-standard registry directory
  if defined $Registry;
$CorpusHandle = new CWB::CL::Corpus $Corpus;
croak "Error: can't open corpus $Corpus, aborted."
  unless defined $CorpusHandle;

# $att_handle = My::Config::GetAttribute($name);
#   get CL attribute handle for specified attribute $name (returns CL::Attribute object)
sub GetAttribute {
  croak 'Usage:  $att_handle = My::Config::GetAttribute($name);'
    unless @_ == 1;
  my $name = shift;
  return $Attributes{$name}			# retrieve attribute handle from cache
    if exists $Attributes{$name};
  my $att = $CorpusHandle->attribute($name, "p"); # try p-attribute first ...
  $att = $CorpusHandle->attribute($name, "s")	  # ... then try s-attribute
    unless defined $att;
  croak "Can't open attribute $Corpus.$name, sorry."
    unless defined $att;
  $Attributes{$name} = $att;			# store attribute handle in cache
  return $att;
}


##
##  My::Config loaded successfully
##

return 1;
