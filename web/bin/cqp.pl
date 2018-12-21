#!/usr/bin/perl
#
##############################################################
#
# a CGI-script for querying parallel corpora using
# the IMS Corpus Workbench
#
# Copyright (C) 2004 Jörg Tiedemann
#
##############################################################

# use lib '/storage/tiedeman/local/lib/perl/5.10.0';
# use lib '/storage/tiedeman/local/share/perl/5.10.0';
# use lib '/usr/local/share/perl/5.10.1';
# use lib '/usr/local/lib/perl/5.10.1';


use CWB::Web::Query;
use HTML::Entities;
use CGI qw/:standard escapeHTML escape -utf8/;
use Encode;

BEGIN { 
#    use CGI::Carp qw(carpout);
#    open(LOG, ">>/tmp/opustest3.log") or die ("could not open log\n");
#    open(LOG, ">>/tmp/opustest.log") or die ("could not open log\n");
#    carpout(LOG);
}

use strict;

my $MAXWAIT=60;
my $SHOWMAX=20;
if (param('showmax')){$SHOWMAX=param('showmax');}

# my $CWBREG='/hf/logos/site/opus/cwb/reg';
# my $CWBREG='/storage/tiedeman/public_html/OPUS/cwb/reg';
my $CWBREG='/home/opus/public_html/cwb/reg';


if (param('reg')){$CWBREG=param('reg');}
if (url_param('reg')){$CWBREG=url_param('reg');}
chdir $CWBREG;

# my $css="http://www.let.rug.nl/tiedeman/OPUS/index.css";
my $css="http://opus.lingfil.uu.se/index.css";
binmode (STDOUT,':encoding(utf-8)');


#------------------------------------------------------
# some links and text

my ($CQPSYNTAX,$CWBLINK,$CQPEXAMPLES)=
    (
     "http://www.ims.uni-stuttgart.de/projekte/CorpusWorkbench/CQPSyntax.html",
     "http://www.ims.uni-stuttgart.de/projekte/CorpusWorkbench/index.html",
     "http://www.ims.uni-stuttgart.de/projekte/CorpusWorkbench/CQPExamples.html"
    );
my $CQPtext=
    'A CQP query consists of a regular'.&br().
    'expression over '.&i('attribute expressions').'.'.&br().
    &a({-href=>$CQPSYNTAX},'Introduction of the query syntax').&br.
    &a({-href=>$CQPEXAMPLES},'Example queries');
my $PATTRtext=
    'positional annotation';
my $SATTRtext=
    'structural annotation';



#------------------------------------------------------
# main
#------------------------------------------------------

print &header(-charset => 'utf-8');
print &start_html(-title => 'corpus query (CWB)',
		  -author => 'Joerg Tiedemann',
		  -base=>'true',
		  -dtd=>1,
		  -style=>{'src'=>$css},
		  -encoding => 'utf-8',
		  -head=>meta({-http_equiv=>'Content-Type',
			       -content=>'text/html;charset=utf-8'}));

# print &h2(&a({-href=>'http://urd.let.rug.nl/tiedeman/OPUS/'},'OPUS')." - Corpus query (CWB)");

my $url=url();
my %corpora=();



my $corpus = url_param('corpus');
my $lang = url_param('lang');
my $advanced = url_param('adv');
my @alg = param('alg');

##------------------------------
## decode UTF-8 characters
## and set the parameter again
## (seems to be necessary .... not anymore)
##
# my $cqp = decode('utf-8',param('query'));
# if ($cqp){param('query',$cqp);}
my $cqp = param('query');
##------------------------------

&ReadRegistry('.',\%corpora);
my $reg=&RegistryLinks($corpus,\%corpora,$url);
my $form=&CorpusQueryForm($corpus,$lang,$advanced);

# print &table({},caption(''),
#	     &Tr([&td({-width=>"25%"},[$reg,]).&td({-width=>"75%"},[$form])]));


if (param('query')){
#    print &p(),&hr();
    my $style = param('style');
    print &CorpusQuery($corpus,$lang,$cqp,\@alg,$style);
}

print &end_html;


#------------------------------------------------------
# end
#------------------------------------------------------




#------------------------------------------------------
# FixString: convert from CWB-format 
# to UTF-8 if necessary!


sub FixString{
    my ($lang,$string)=@_;
    decode_entities($string);
    return decode('utf-8',$string);

    if ($lang=~/^(ar|az|be|bg|bs|he|id|jp|ja|ko|ku|mi|mk|ru|ta|th|uk|vi|xh|zh_tw|zh|zu|bul|chi|jap|jpn|heb|rus)$/){
	decode_entities($string);
	$string=decode('utf-8',$string);
    }
#    if ($lang eq 'el'){decode_entities($string);}
    if ($lang=~/^(cs|hr|hu|pl|ro|sk|sl|sr|cze|hrv|rum|slv)$/){
	decode_entities($string);
	$string=decode('iso-8859-2',$string);
    }
    if ($lang=~/^(et||lt|lv|ice|lit)$/){
	decode_entities($string);
	$string=decode('iso-8859-4',$string);
    }
    if ($lang=~/^(el|gre|ell)$/){
	decode_entities($string);
	$string=decode('iso-8859-7',$string);
    }
    if ($lang=~/^(tr|tur)$/){
	decode_entities($string);
	$string=decode('iso-8859-9',$string);
    }
    decode_entities($string);
    return $string;
}


sub EncodeString{
    my ($lang,$string)=@_;
    return encode('utf-8',$string);
    
#    $string=decode('utf-8',$string);

    if ($lang=~/^(ar|az|be|bg|bs|he|id|jp|ja|ko|ku|mi|mk|ru|ta|th|uk|vi|xh|zh_tw|zh|zu|bul|chi|jap|jpn|heb|rus)$/){
	$string=encode('utf-8',$string);
    }
#    if ($lang eq 'el'){decode_entities($string);}
    if ($lang=~/^(cs|hr|hu|pl|ro|sk|sl|sr|cze|hrv|rum|slv)$/){
	$string=encode('iso-8859-2',$string);
    }
    if ($lang=~/^(et||lt|lv|ice|lit)$/){
	$string=encode('iso-8859-4',$string);
    }
    if ($lang=~/^(el|gre|ell)$/){
	$string=encode('iso-8859-7',$string);
    }
    if ($lang=~/^(tr|tur)$/){
	$string=encode('iso-8859-9',$string);
    }
    $string=encode('iso-8859-1',$string);
    return $string;
}



#------------------------------------------------------
# CorpusQueryForm: show the query form
#

sub CorpusQueryForm{
    my ($corpus,$lang,$advanced)=@_;

    if (not $corpus){return;}
    if (not $lang){return;}

    my %index=%corpora;
    my $form= &startform();


    #---------------------------------------------------
    # cqp-query-field

    my $query.=&textfield(-size=>'30',-name => 'query',
		       -default=>'[word="a.*"]');

    #---------------------------------------------------
    # checkboxes for word attributes

    my $pattr=undef;
    if (ref($corpora{$corpus}{$lang}{attr}) eq 'ARRAY'){
	my @attr=sort grep ($_ ne 'word',@{$corpora{$corpus}{$lang}{attr}});
	$pattr.=&checkbox_group(-name=>'attr',
				-values=>('word'),
				-default=>('word'));
	$pattr.=&checkbox_group(-name=>'attr',
				-values=>\@attr);
    }

    #---------------------------------------------------
    # checkboxes for structural attributes

    my $sattr=undef;
    if (ref($corpora{$corpus}{$lang}{struc}) eq 'HASH'){
	my @struc=sort keys %{$corpora{$corpus}{$lang}{struc}};
	foreach (sort @struc){
	    $sattr.=&checkbox_group(-name=>'attr',-values=>($_));
	    my @strucattr=sort @{$corpora{$corpus}{$lang}{struc}{$_}};
	    $sattr.=&checkbox_group(-name=>'attr',-values=>\@strucattr);
	    $sattr.=&br();
	}
    }

    #---------------------------------------------------
    # context window

    my $context=undef;
    my @struc=('s');
    if (ref($corpora{$corpus}{$lang}{struc}) eq 'HASH'){
	@struc=sort keys %{$corpora{$corpus}{$lang}{struc}};
    }

    $context.=&popup_menu(-name=> 'bcs',
			  -default => '1',
			  -values => [1,2,3,4,5]);
    $context.=&popup_menu(-name=> 'bc',
			-default => 's',
			-values => \@struc);
    $context.=&popup_menu(-name=> 'acs',
			-default => '1',
			-values => [1,2,3,4,5]);
    $context.=&popup_menu(-name=> 'ac',
			-default => 's',
			-values => \@struc);


    #---------------------------------------------------
    # checkboxes (and input fields) for sentence aligned corpora

    my $align=undef;
    if (ref($index{$corpus}{$lang}{align}) eq 'ARRAY'){
	my @lang=sort @{$index{$corpus}{$lang}{align}};
	my $nr_col=sqrt(@lang);
	my @rows=();
	my $i=1;
	my $nr_rows=0;
	foreach my $l (sort @{$index{$corpus}{$lang}{align}}){
	    $rows[$nr_rows].=
		&td({-nowrap=>'1'},
		    [&checkbox_group(-name=>'alg',-values=>($l))]);
	    if ($advanced){

		##------------------------------
		## decode UTF-8 characters
		## and set the parameter again
		## (seems to be necessary .... not anymore)
		##
		# my $cqp = decode('utf-8',param('query_'.$l));
		# if ($cqp){param('query_'.$l,$cqp);}
		$cqp = param('query_'.$l);
		##------------------------------

		$rows[$nr_rows].=
		    &td([&textfield(-size=>'10',-name => 'query_'.$l)]);
	    }
	    $i++;
	    if ($i>$nr_col){$nr_rows++;$i=1;}
	}
	$align.=&table({-cellspacing=>"0"},caption(''),&Tr(\@rows));
    }

    #---------------------------------------------------
    # display styles

    my @styles=('vertical','KWIC');
    if (defined ($align)){push(@styles,'horizontal');}
    my $style=&radio_group(-name=>'style',
			   -values=>\@styles);

    #---------------------------------------------------
    # max number of hits

    my $show='show max '.&textfield(-size=>'4',
				    -default=>"$SHOWMAX",
				    -name => 'showmax').' hits';
#    if (defined $align){
#	$show.=' and ';
#	$show.=&checkbox(-name=>'skipnoalign',
##			  -checked=>'checked',
#			  -value=>'skip',
#			  -label=>'skip non-aligned segments');
#    }

    #---------------------------------------------------
    # submit-query-button and other stuff

    my $submit=&p().&submit(-name => 'action',-value => 'select');
    $submit.= ' '.$show.$style;
    my $link=url();
    $link=&AddUrlParam($link,'corpus',$corpus);
    $link=&AddUrlParam($link,'lang',$lang);
    if ($advanced){
	$link=&AddUrlParam($link,'adv','0');
	$submit.=&br().'('.&a({-href=>$link},'simple').' search)';
    }
    else{
	$link=&AddUrlParam($link,'adv','1');
	$submit.=&br().'('.&a({-href=>$link},'advanced').' search)';
    }


    #---------------------------------------------------
    # put everything together

    my @rows=();

    if ($advanced){
	my $header=&a({-href=>$CQPSYNTAX},'CQP query').' ';
	$header.=&a({-href=>$CWBLINK},'(CWB)');
	push (@rows,&th([$header,'show attributes']));
	push (@rows,&td([&p().'query: '.$query.
			 &p().'context: '.$context,
			 $PATTRtext.&br().$pattr.&p().
			 $SATTRtext.&br().$sattr]));
	push (@rows,&th({-colspan=>'2'},'alignments'));
	push (@rows,&td({-colspan=>'2'},$align));
	push (@rows,&td({-colspan=>'2'},$submit));
	$form.=&table({-cellspacing=>"0"},caption(''),&Tr(\@rows));
    }
    else{
	my $header=&a({-href=>$CQPSYNTAX},'CQP query').' ';
	$header.=&a({-href=>$CWBLINK},'(CWB)');
	push (@rows,&th([$header,'show attributes','alignments']));
	push (@rows,&td([$CQPtext.&p().$query,
			 $PATTRtext.&p().$pattr,
			 $align]));
	push (@rows,&td({-colspan=>'3'},$submit));
	$form.=&table({-cellspacing=>"0"},caption(''),&Tr(\@rows));
    }

    $form.= &endform();
    return &div({-class=>'query'},$form);
}



#-----------------------------------------------------------
# CorpusQuery: run the corpus query using WebCqp


sub CorpusQuery{

#    use lib ('/home/staff/joerg/user_local/lib/perl5/site_perl/5.8.0/');
#    use WebCqp::Query;

    my ($corpus,$lang,$utf8_cqp,$aligned,$style)=@_;
    my $cqp = EncodeString($lang,$utf8_cqp);


    $CWB::Web::Query::Registry = $corpus;
    my $query;
    eval { $query = new CWB::Web::Query("$lang"); };
    if ($@){print "--$@--$!--$?--";}

    #---------------------------------------------------------

    $query->on_error(sub{grep {print escapeHTML($_).&br()} @_});
    my @corpora=($lang);

    my ($bc,$bcs,$ac,$acs)=('s',1,'s',1);
    if (param('bc')){$bc=param('bc');}         # before context
    if (param('bcs')){$bcs=param('bcs');}      # before context size
    if (param('ac')){$ac=param('ac');}         # after context
    if (param('acs')){$acs=param('acs');}      # after context size

    if ($style ne 'KWIC'){
	$query->context("$bcs $bc", "$acs $ac");
    }
    if ($cqp!~/^[\"\[]/){$cqp='"'.$cqp.'"';}

    #---------------------------------------------------------
    # check queries for each alignment

    if (ref($aligned) eq 'ARRAY'){
	$query->alignments(sort @{$aligned});
	push (@corpora,@{$aligned});
	foreach (@{$aligned}){
	    if (param("query_$_")){
		my $l=uc($_);
		# my $q = decode('utf-8',param("query_$_"));
		# param("query_$_",$q);
		my $q = param("query_$_");
		my $q = EncodeString($_,$q);
		if ($q!~/^[\"\[]/){$q='"'.$q.'"';}
		$cqp.=" :$l ".$q;
	    }
	    else{
		my $l=uc($_);
		$cqp.=" :$l []";
	    }
	}
    }

    #---------------------------------------------------------
    # show certain attributes

    if (defined param('attr')){
	my @attr=param('attr');
	$query->attributes(@attr);
    }

    #---------------------------------------------------------
    # run the query
    $query->reduce($SHOWMAX);
    my @result=();
    local $SIG{ALRM}=\&timeout;
    eval {
	alarm ($MAXWAIT);
	@result = $query->query($cqp);
	alarm 0;
    };
    my $nr_result = @result;
    #---------------------------------------------------------

#    my $html="Query string: \"$utf8_cqp\"".&br();
    my $html.="<div align='center'>Examples from the <b>$corpus</b> corpus<p></div>";
#    my $html = '';

    my @rows=();
    if ($style eq 'vertical'){
	push (@rows,&th(['',@corpora]));
    }

    my $skipnoalign=param('skipnoalign');
    my $nr;my $i;
    for ($i = 0; $i < $nr_result; $i++) {
	$nr = $i + 1;
	my $m = $result[$i];
	my $pos = $m->{'cpos'};
	my $ord = &FixString($lang,$m->{'kwic'}->{'match'});
	my $res_r = &FixString($lang,$m->{'kwic'}->{'right'});
	my $res_l = &FixString($lang,$m->{'kwic'}->{'left'});
	my $noalign=0;
	my @newrows=();
	if ($style eq 'KWIC'){                       # KWIC style
	    push (@newrows,
		  &td({},[$pos]).
		  &td({-align=>'right'},[$res_l]).
		  &td({-width => '5',-align=>'center'},["<b>$ord</b>"]).
		  &td({},[$res_r]));
	}
	else{
	    push (@newrows,&td({},[$pos,"$res_l <b>$ord</b> $res_r"]));
	}

	#----------------------------
	# aligned regions

	if (ref($aligned) eq 'ARRAY'){
	    my $even=0;
	    foreach (@{$aligned}){
#		my $color='#FFEEDD';                 # align-color 1
#		if ($even){$color='#FFFFE0';}        # align-color 2
		my $color='#FFFF99';                 # align-color 1
		if ($even){$color='#FFCC99';}        # align-color 2
		$even=not $even;
		if ($m->{$_}=~/\(no alignment found\)/){$noalign++;}
		my $string=&FixString($_,$m->{$_});

		## highlight matching part (not always possible!)
		my $q = param("query_$_");
		$q=~s/\"//gs;
		if ($q){
		    $string =~s/($q)/\<b\>$q\<\/b\>/gs;
		}

		if ($style eq 'vertical'){           # vertical alignment
		    $newrows[-1].=&td({-valign=>'top'},$string);
		}
		elsif ($style eq 'KWIC'){            # KWIC style
		    push (@newrows,
			  &th({},[$_]).
			  &td({-bgcolor=>$color,
			       -colspan=>"3",
			       -align=>'center'},[$string]));
		}
		else{                                # horizontal alignment
		    push (@newrows,
			  &th({},[$_]).
			  &td({-bgcolor=>$color},[$string]));
		}
	    }
	}
	if ((not $skipnoalign) or (not $noalign)){
	    push (@rows,@newrows);
	}
	if ($nr>=$SHOWMAX){last;}
    }
    $html.=&table({-cellspacing=>'0'},caption(''),&Tr(\@rows));
    return &div({-class=>'result'},$html);
}


#--------------------------------------------------
# create a table of registry links
# (create links for each corpus)


sub RegistryLinks{
    my $corpus=shift;
    my $corpora=shift;
    my $url=shift;

    my @rows=(&th({},['corpus','languages']));
    my %trans=();
    foreach my $c (sort keys %{$corpora}){
	my $link=&AddUrlParam($url,'corpus',$c);
	my $html='';
	if ($corpus eq $c){
	    foreach my $l (sort keys %{$$corpora{$c}}){
		my $link=&AddUrlParam($link,'lang',$l);
		$html.=&a({-href=>$link},$l).' ';
		$trans{$l}{$c}=$link;
	    }
	    push (@rows,&td({},[$c,$html]));
	}
	else{
	    push (@rows,&td({},[&a({-href=>$link},$c),'']));
	}
    }
    return &div({-class=>'registry'},
		&table({-cellpadding=>"0"},caption(''),&Tr(\@rows)));
}


#-----------------------------------------
# add a URL-style parameter to the CGI-URL

sub AddUrlParam{
    my ($url,$name,$val)=@_;
    $val=escape($val);
    if ($url!~/[\?\;]$name\=/){
	if ($url!~/\?/){$url.="\?$name=$val";}
	else{$url.="\;$name=$val";}
    }
    else{$url=~s/$name\=[^\;]*(\;|\Z)/$name=$val$1/;}
    return $url;
}


#-----------------------------------------
# read all registry files
#    directory=corpus
#    language=registry-file

sub ReadRegistry{
    my $dir=shift;
    my $reg=shift;
    opendir(DIR, $dir) or die "Can't open it: $!\n";
    my @files= readdir(DIR);
    foreach my $f (@files){
	if ($f=~/^\./){next;}
	if (-d $dir.'/'.$f){
	    my $subdir=$dir.'/'.$f;
	    $subdir=~s/^\.\///;                # delete './'
	    &ReadRegistry($subdir,$reg);
	}
	if (-f $dir.'/'.$f){
	    $$reg{$dir}{$f}={};
	    open F,"<$dir/$f";
	    my @text=<F>;
	    close F;
	    foreach (@text){
		if (/ATTRIBUTE\s(.*)$/){
		    push (@{$$reg{$dir}{$f}{attr}},$1);
		}
		if (/STRUCTURE\s(.*)$/){
		    my $struc=$1;
		    if ($struc=~/^(\S+)\_(\S+)(\s|\Z)/){
			push (@{$$reg{$dir}{$f}{struc}{$1}},"$1_$2");
		    }
		    else{
			@{$$reg{$dir}{$f}{struc}{$struc}}=();
		    }
		}
		if (/ALIGNED\s(.*)$/){
		    push (@{$$reg{$dir}{$f}{align}},$1);
		}
	    }
	}
    }
}

#-----------------------------------------
# print timeout-message and die!

sub timeout{
    print &h2("Your query took more than $MAXWAIT seconds!");
    print "The process has been timed out!",&br();
    print "Possible reasons:<ul>";
    print "<li>The server is busy</li>";
    print "<li>Your query is very complicated</li>";
    print "</ul>";
    print "try<ul>";
    print "<li>another (simple) query</li>";
    print "<li>to reduce the number of results (show max)</li>";
    print "<li>to run queries without aligned regions</li>";
    print "</ul>";
    print "Sorry for any inconvenience!",&hr();
    print &end_html;
    exit;
}
