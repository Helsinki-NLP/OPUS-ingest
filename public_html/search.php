<?php

$opuspub = "/home/opus/public_html";

$src = NULL;
$trg = NULL;
$minsize = NULL;
$version = 'latest';

if (array_key_exists('src',$_REQUEST)){
  $src = $_REQUEST['src'];
 }
if (array_key_exists('trg',$_REQUEST)){
  $trg = $_REQUEST['trg'];
 }
if (array_key_exists('minsize',$_REQUEST)){
  $minsize = $_REQUEST['minsize'];
 }
if (array_key_exists('version',$_REQUEST)){
  if ($_REQUEST['version'] != ''){
    $version = $_REQUEST['version'];
  }
 }



echo '<div class="query">';
echo "\n<form method='post'>\n";

$srclang=array();
$trglang=array();

get_languages($srclang);
asort($srclang);
echo "<b>Search &amp; download resources: </b>";
print_select($srclang,'src',$src);

if (isset($src) && get_trg_languages($src,$srclang,$trglang)){
  if (is_array($trglang)){
    asort($trglang);
  }
  print_select($trglang,'trg',$trg);
 } else {
  print_select($srclang,'trg',$trg);
 }
$sizes = array('all' => 'all',
	       1000000 => '>1M',
	       10000000 => '>10M',
	       100000000 => '>100M', 
	       250000000 => '>250M', 
	       500000000 => '>500M');
print_select($sizes,'minsize',$minsize,1,1,1);
print '<input type="checkbox" name="version" value="all"';
if ($version == 'all'){ print ' checked'; }
print '> show all versions';
echo "</form></div>\n";

if (isset($src) && isset($trg) && $src != 'unknown' && $trg != 'unknown'){
  echo '<div class="query">';
  echo '<b>Language resources: </b>click on [ tmx | moses | xces | lang-id ] to download the data! (raw = untokenized, ud = parsed with universal dependencies, alg = word alignments and phrase tables)</br></br>';
  echo '</div>';
  echo '<div class="counts">';
  show_resources($src,$trg,$minsize);
  echo '</div>';
 }


function show_resources($src,$trg,$minsize='all'){

  if ($trg == 'any'){
    $srclangs=array();
    $trglangs=array();
    get_languages($srclangs);
    get_trg_languages($src,$srclangs,$trglangs);
  } else {
    $trglangs = array($trg => $trg);
  }

  table_header($src,$trg);  
  foreach ($trglangs as $trg => $TrgName){
    print_resources($src,$trg,$minsize);
  }
  table_tail();
}



function table_header($src,$trg){

  global $TotalDocs,$TotalLinks,$TotalSrcTok,$TotalTrgTok,
    $TotalTmxLinks,$TotalTxtLinks;

  echo '<table>';
  echo "<tr><th>corpus</th>";
  echo "<th>doc's</th>";
  echo "<th>sent's</th>";
  if ($src > $trg){
     echo "<th>$trg tokens</th><th>";
  } else{
     echo "<th>$src tokens</th><th>";
  }
  if ( $src != $trg ){
    if ($src > $trg){
      echo "$src tokens";
    } else {
      echo "$trg tokens";
    }
  }
  echo "</th><th>XCES/XML</th><th>raw</th><th>TMX</th><th>Moses</th><th>mono</th><th>raw</th>";
  echo "<th>ud</th><th>alg</th><th>dic</th><th>freq</th>";
  echo "<th></th><th></th><th>other files</th></tr>";

  $TotalDocs=0;
  $TotalLinks=0;
  $TotalSrcTok=0;
  $TotalTrgTok=0;
  $TotalTmxLinks=0;
  $TotalTxtLinks=0;
}


function table_tail(){

  global $TotalDocs,$TotalLinks,$TotalSrcTok,$TotalTrgTok,
    $TotalTmxLinks,$TotalTxtLinks;

  echo '<tr><th><i>total</i></th>';
  echo "<th align='right'>$TotalDocs</td>";
  echo "<th align='right'>".pretty_number($TotalLinks)."</th>";
  echo "<th align='right'>".pretty_number($TotalSrcTok)."</th><th align='right'>";
  if ($TotalTrgTok > 0){
    echo pretty_number($TotalTrgTok);
  }
  echo "</th><th align='right'>".pretty_number($TotalLinks)."</th>";
  echo '<th></th>';
  echo "<th align='right'>".pretty_number($TotalTmxLinks)."</th>";
  echo "<th align='right'>".pretty_number($TotalTxtLinks)."</th>";
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '<th></th>';
  echo '</tr>';
  echo '</table>';
}






function print_resources($src,$trg,$minsize='all',
			 $sort_by='xces'){

  $resources = array();
  find_opus_resources($src,$trg,$resources);

  $sorted = array();
  foreach ($resources as $corpus => $versions){
    foreach ($versions as $version => $types){
      // echo var_dump($types);
      if ($sort_by == 'xces-links' || $sort_by == 'xces'){
	$type = $types['xces'];
      }
      else{
	$type = $types['moses'];
      }
      foreach ($type as $lang => $res){
	if ($sort_by == 'xces-links'){
	  $sorted["$corpus:$version:$lang"] = $res['alignment_pairs'];
	}
	else{
	  $sorted["$corpus:$version:$lang"] = $res['source_tokens'] + $res['target_tokens'];
	}
      }
    }
  }
  arsort($sorted,SORT_NUMERIC);
  // echo var_dump($sorted);

  foreach ($sorted as $bitext => $size){
    if ($size < $minsize){ break; }
    list($corpus,$version,$src,$trg) = explode(':',$bitext);
    // echo "$corpus $src $trg $version";
    print_resource($corpus,$version,$src,$trg,$resources[$corpus][$version]);
  }
}






function print_resource($corpus,$version,$src,$trg,$resource){

  global $TotalDocs,$TotalLinks,$TotalSrcTok,$TotalTrgTok,
    $TotalTmxLinks,$TotalTxtLinks;

  if ($src > $trg){
    $tmp = $trg;
    $trg = $src;
    $src = $tmp;
  }

  // bilingual data sets
  $langpair = "$src:$trg";
  foreach (array('xces','tmx','moses','alg','smt','dic') as $format){
    if (array_key_exists($format,$resource)){
      $res = $resource[$format];
      if (array_key_exists($langpair,$res)){
	$parts = $res[$langpair];

	$nrDocs[$format]   = $parts['documents'];
	$nrLinks[$format]  = $parts['alignment_pairs'];
	$nrSrcTok[$format] = $parts['source_tokens'];
	$nrTrgTok[$format] = $parts['target_tokens'];

	$title   = $nrDocs[$format]." aligned documents,";
	$title  .= pretty_number($nrLinks[$format])." sentence alignments";
	if ($format == 'alg'){
	  $ResourceHtml['smt'].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	  $ResourceHtml['smt'].=$format."</a>&nbsp;";
	}
	else{
	  $ResourceHtml[$format].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	  $ResourceHtml[$format].=$format."</a>&nbsp;";
	}
      }
    }
  }

  // monolingual data sets
  foreach (array('xml','raw','mono','monotok','freq') as $format){
    if (array_key_exists($format,$resource)){
      $res = $resource[$format];
      // echo var_dump($xml);
      if (array_key_exists("$src:",$res)){
	$parts = $res["$src:"];
	$nrSrcTok[$format]=$parts['source_tokens'];
	$title = $parts['documents']." documents,";
	$title .= pretty_number($parts['source_tokens'])." tokens";
	if ($format == 'xml'){
	  $ResourceHtml['xces'].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	  $ResourceHtml['xces'].=$src."</a>&nbsp;";
	}
	else{
	  $ResourceHtml[$format].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	  $ResourceHtml[$format].=$src."</a>&nbsp;";
	}
      }
      if ( $src != $trg ){
	if (array_key_exists("$trg:",$res)){
	  $parts = $res["$trg:"];
	  $nrTrgTok[$format]=$parts['source_tokens'];
	  $title = $parts['documents']." documents,";
	  $title .= pretty_number($parts['source_tokens'])." tokens";
	  if ($format == 'xml'){
	    $ResourceHtml['xces'].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	    $ResourceHtml['xces'].=$trg."</a>";
	  }
	  else{
	    $ResourceHtml[$format].='<a rel="nofollow" href="'.$parts['url'].'" title="'.$title.'">';
	    $ResourceHtml[$format].=$trg."</a>";
	  }
	}
      }
    }
  }

  echo '<tr><td><a href="'.$corpus.'-'.$version.'.php"><b>';
  echo $corpus.'</b>&nbsp;'.$version.'</a></td>';
  echo "<td align='right'>".$nrDocs['xces']."</td>";
  echo "<td align='right'>".pretty_number($nrLinks['xces'])."</td>";
  echo "<td align='right'>".pretty_number($nrSrcTok['xces'])."</td>";
  echo "<td align='right'>".pretty_number($nrTrgTok['xces'])."</td>";

  ////////////////////////////////////////////////////////////////////////
  // XML files
  ////////////////////////////////////////////////////////////////////////

  echo '<td bgcolor="'.size_color($nrSrcTok['xces']+$nrTrgTok['xces']).'">&nbsp;';
  echo $ResourceHtml['xces'].'&nbsp;</td>';
  if (isset($ResourceHtml['raw'])){
    echo '<td bgcolor="'.size_color($nrSrcTok['raw']+$nrTrgTok['raw']).'">&nbsp;';
    echo $ResourceHtml['raw'].'&nbsp;</td>';
  }
  else{
    echo '<td></td>';
  }

  ////////////////////////////////////////////////////////////////////////
  // all other formats
  ////////////////////////////////////////////////////////////////////////

  foreach (array('tmx','moses','monotok','mono','ud','smt','dic','freq') as $format){  
    if (isset($ResourceHtml[$format])){
      if (in_array($format,array('smt','dic','freq'))){
	echo '<td>&nbsp;'.$ResourceHtml[$format].'</td>';
      }
      else{
	echo '<td bgcolor="'.size_color($nrSrcTok[$format]+$nrTrgTok[$format]).'">&nbsp;';
	echo $ResourceHtml[$format].'</td>';
      }
    }
    else{
      echo '<td></td>';
    }
  }

  ////////////////////////////////////////////////////////////////////////
  // query and browse
  ////////////////////////////////////////////////////////////////////////


  $oldname = new2old($corpus,$version);
  if (file_exists('cwb/reg/'.$oldname.'/'.$src)){
    echo '<td><a href="bin/opuscqp.pl';
    echo '?corpus='.$oldname.';lang='.$src.'">query</a>';
    echo '</td>';
  }
  elseif (file_exists('cwb/reg/'.$corpus.'-'.$version.'/'.$src)){
    echo '<td><a href="bin/opuscqp.pl';
    echo '?corpus='.$corpus.'-'.$version.';lang='.$src.'">query</a>';
    echo '</td>';
  }
  else{ echo '<td></td>'; }
  
  if (file_exists($corpus.'/'.$version.'/'.$src.'-'.$trg.'_sample.html')){
    echo '<td>';
    echo '<a href="'.$corpus.'/'.$version.'/'.$src.'-'.$trg.'_sample.html">sample</a>';
    echo '</td>';;
  }
  else{ echo '<td></td>'; }

  echo '<td style="text-align:left;">';



  // alternative alignments
  foreach (array('xces/alt', 'moses/strict',
		 'xces/insert','tmx/insert','moses/insert',
		 'xces/pct',   'tmx/pct',   'moses/pct',
		 'xces/spell', 'tmx/spell', 'moses/spell',
		 'xces/other', 'tmx/other', 'moses/other',) as $format){

    if (array_key_exists($format,$resource)){
      $res = $resource[$format];
      if (array_key_exists($langpair,$res)){
	$parts = $res[$langpair];
	echo '<a rel="nofollow" href="'.$parts['url'].'">'.$format."</a>&nbsp;";
      }
    }
  }

  // links to source directories of they exist
  if (is_dir("$corpus/xml/$src")){
    echo "[<a rel='nofollow' href='$corpus/xml/$src'>xml/$src</a>]";
  }
  if (is_dir("$corpus/xml/$trg")){
    echo "[<a rel='nofollow' href='$corpus/xml/$trg'>xml/$trg</a>]";
  }
  if (is_dir("$corpus/xml/$src-$trg")){
    echo "[<a rel='nofollow' href='$corpus/xml/$src-$trg'>xml/$src-$trg</a>]";
  }
  if (is_dir("$corpus/raw/$src")){
    echo "[<a rel='nofollow' href='$corpus/raw/$src'>raw/$src</a>]";
  }
  if (is_dir("$corpus/raw/$trg")){
    echo "[<a rel='nofollow' href='$corpus/raw/$trg'>raw/$trg</a>]";
  }
  echo '</td>';


  echo "</tr>\n";

  $TotalLinks    += $nrLinks['xces'];
  $TotalTxtLinks += $nrLinks['moses'];
  $TotalTmxLinks += $nrLinks['tmx'];

  $TotalDocs     += $nrDocs['xces'];
  $TotalSrcTok   += $nrSrcTok['xces'];
  $TotalTrgTok   += $nrTrgTok['xces'];
}




function print_select($options,$name,$default='unknown',$omitKey=0,$skipSort=false,$skipUnknown=false){
  echo "<select name='$name' onchange='submit()'>";
  if (! $skipUnknown){
    echo "<option value='unknown'>-- select --</option>\n";
  }
  // asort($lang);
  if (! $skipSort){
    asort($options);
  }
  foreach ($options as $key => $value){
    //$name = utf8_encode($value);
    $name = $value;
    $opt = "$key ($name)";
    if ($omitKey){
      $opt = "$name";
    }
    if ($default == $key){
      echo "<option value='$key' selected='selected'>$opt</option>\n";
    } else {
      echo "<option value='$key'>$opt</option>\n";
    }
  }
  echo "</select>\n";
}




function get_languages(&$lang){
  global $opuspub;
  $dbh = dba_open( $opuspub."/LangNames.db", "r", "db4") or die('');
  $id=dba_firstkey($dbh);
  while ($id != NULL){
    $name = dba_fetch($id, $dbh);
    $lang[$id] = preg_replace('/\(.*\)/', '', $name);
    $id=dba_nextkey($dbh);
  }
  dba_close($dbh);
}


function get_trg_languages($lang,$srclang,&$trgs){
  global $opuspub;

  $dbh = dba_open( $opuspub."/LangPairs.db", "r", "db4") or die('');
  if (dba_exists($lang,$dbh)){
    $trg=dba_fetch($lang,$dbh);
    $ids = explode(':',$trg);
    foreach ($ids as $id){
      $trgs[$id] = $srclang[$id];
    }
    // $trgs['any'] = '-- any language --';
    dba_close($dbh);
    return true;
  }
  dba_close($dbh);
  return false;
}



function pretty_number($nr,$dec=1){
    if ($nr>1000000000){
      return sprintf("%.${dec}fG",$nr/1000000000);
    }
    if ($nr>100000){
      return sprintf("%.${dec}fM",$nr/1000000);
    }
    if ($nr>100){
      return sprintf("%.${dec}fk",$nr/1000);
    }
    return $nr;
}

function size_color($nr){
    $avg = 2000000;
    $good = 20*$avg;

    $diff = $nr-$avg;

    $red=255;
    $green=255;
    $blue=255;

    if ($diff<0){
      $change1 = abs(pow((0-$diff/$avg),6)*48);
      $change2 = abs(($diff/$avg+1)*32);
      $green-=$change1;
      $blue-=$change1+$change2;
    }
    else{
      $change1 = abs(pow(($diff/$good),0.25)*48);
      $change2 = 0;
      if ($diff<$good){
	$change2 = abs((1-$diff/$good)*32);
      }
      if ($change1>64){
	$change1 = 64;
      }
      $red-=$change1;
      $blue-=$change1+$change2;
    }
    return sprintf("#%x%x%x",$red,$green,$blue);
}


function find_opus_resources($src,$trg,&$resources){
  // $OPUSAPI = 'https://translate.ling.helsinki.fi/opusapi';
  // $OPUSAPI = 'http://vm1637.kaj.pouta.csc.fi/opusapi';
  $OPUSAPI = 'http://opus.nlpl.eu/opusapi';
  global $version;

  $url = $OPUSAPI.'/?source='.$src.'&target='.$trg;
  if ( $version != 'all' ){
    $url .= '&version='.$version;
  }
  $lines_array=file($url);
  // turn array into one variable
  $string=implode('',$lines_array);
  $json = json_decode($string, true);
  foreach ($json['corpora'] as $c){
    if ($c['preprocessing'] != 'info'){
      $file = basename($c['url']);
      $parts = explode('.',$file);
      $ext = $parts[1];

      $type = $c['preprocessing'];
      if ($type == 'xml' && $c['source'] != "" && $c['target'] != ""){
	$type = 'xces';
      }
      elseif ($type == 'mono' && $ext == 'tok'){
	$type = 'monotok';
      }
      elseif ($type == 'smt' && $ext == 'alg'){
	$type = 'alg';
      }

      // alternative links
      if (($type == 'xces' || $type == 'tmx' || $type == 'moses') && 
	  ($ext != 'xml' && $ext != 'txt' && $ext != 'tmx') ){
	$type = $type.'/'.$ext;
      }

      $lang = $c['source'].':'.$c['target'];
      $resources[$c['corpus']][$c['version']][$type][$lang] = $c;
      // $resources[$c['corpus']][$c['version']][$type] = $c;
    }
  }
}



// this is too slow!

function storage_exists($file){
  $file = old2new($file);
  $storagehome = 'https://object.pouta.csc.fi/OPUS-';
  $url = $storagehome.$file;

  $file_headers = @get_headers($url);
  if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    return false;
  }
  return true;
}



function old2new($file) {

   // latest version of each corpus in OPUS
   $versions = array(
		     "Books" => "Books/v1",
		     "DGT" => "DGT/v4",
		     "DOGC" => "DOGC/v2",
		     "ECB" => "ECB/v1",
		     "EhuHac" => "EhuHac/v1",
		     "Elhuyar" => "Elhuyar/v1",
		     "EMEA" => "EMEA/v3",
		     "EUbookshop" => "EUbookshop/v2",
		     "EUconst" => "EUconst/v1",
		     "Europarl3" => "Europarl/v3",
		     "Europarl" => "Europarl/v7",
		     "giga-fren" => "giga-fren/v2",
		     // "GlobalVoices" => "GlobalVoices/v2017q3",
		     "GlobalVoices" => "GlobalVoices/v2015",
		     "GNOME" => "GNOME/v1",
		     "hrenWaC" => "hrenWaC/v1",
		     "JRC-Acquis" => "JRC-Acquis/v3.0",
		     "KDE4" => "KDE4/v2",
		     "KDEdoc" => "KDEdoc/v1",
		     "MBS" => "MBS/v1",
		     "memat" => "memat/v1",
		     "MontenegrinSubs" => "MontenegrinSubs/v1",
		     "MPC1" => "MPC1/v1",
		     "MultiUN" => "MultiUN/v1",
		     "News-Commentary" => "News-Commentary/v9.1",
		     "News-Commentary11" => "News-Commentary/v11",
		     "OfisPublik" => "OfisPublik/v1",
		     "OpenOffice" => "OpenOffice/v2",
		     "OpenOffice3" => "OpenOffice/v3",
		     "OpenSubtitles" => "OpenSubtitles/v1",
		     "OpenSubtitles2011" => "OpenSubtitles/v2011",
		     "OpenSubtitles2012" => "OpenSubtitles/v2012",
		     "OpenSubtitles2013" => "OpenSubtitles/v2013",
		     "OpenSubtitles2015" => "OpenSubtitles/v2015",
		     "OpenSubtitles2016" => "OpenSubtitles/v2016",
		     "OpenSubtitles2018" => "OpenSubtitles/v2018",
		     "ParaCrawl" => "ParaCrawl/v1",
		     "PHP" => "PHP/v1",
		     "RF" => "RF/v1",
		     "SETIMES" => "SETIMES/v1",
		     "SETIMES2" => "SETIMES/v2",
		     "SPC" => "SPC/v1",
		     "Tanzil" => "Tanzil/v1",
		     "Tatoeba" => "Tatoeba/v2",
		     "TED2013" => "TED2013/v1.1",
		     "TedTalks" => "TedTalks/v1",
		     "TEP" => "TEP/v1",
		     "Ubuntu" => "Ubuntu/v14.10",
		     "UN" => "UN/v20090831",
		     "Wikipedia" => "Wikipedia/v1.0",
		     "WikiSource" => "WikiSource/v1",
		     "WMT-News" => "WMT-News/v2014",
		     "XhosaNavy" => "XhosaNavy/v1",
		     );

    // map between old and new formats
    //
    // <corpus>/<id>.tar.gz                --> <corpus>/<version>/xml/<id>.zip
    // <corpus>/<id>.raw.tar.gz            --> <corpus>/<version>/raw/<id>.zip
    // <corpus>/<id>.parsed.tar.gz         --> <corpus>/<version>/parsed/<id>.zip
    // <corpus>/<ss>-<tt>.xml.gz           --> <corpus>/<version>/xml/<ss>-<tt>.xml.gz
    // <corpus>/mono/<corpus>.<id>.gz      --> <corpus>/<version>/mono/<id>.tok.gz
    // <corpus>/mono/<corpus>.raw.<id>.gz  --> <corpus>/<version>/mono/<id>.txt.gz
    // <corpus>/<ss>-<tt>.tmx.gz           --> <corpus>/<version>/tmx/<ss>-<tt>.tmx.gz
    // <corpus>/<ss>-<tt>.txt.zip          --> <corpus>/<version>/moses/<ss>-<tt>.txt.zip

   $parts = explode('/',$file);
   $version = $versions[$parts[0]];

   if (count($parts) == 2){
     $version = $versions[$parts[0]];
     $ext = explode('.',$parts[1]);
     if ($ext[1] == 'tar'){
       $file = implode( '/', array($version,'xml',$ext[0].'.zip') );
     } elseif ($ext[1] == 'raw'){
       $file = implode( '/', array($version,'raw',$ext[0].'.zip') );
     } elseif ($ext[1] == 'parsed'){
       $file = implode( '/', array($version,'parsed',$ext[0].'.zip') );
     } elseif ($ext[1] == 'xml'){
       $file = implode( '/', array($version,'xml',$ext[0].'.xml.gz') );
     } elseif ($ext[1] == 'tmx'){
       $file = implode( '/', array($version,'tmx',$ext[0].'.tmx.gz') );
     } elseif ($ext[1] == 'txt'){
       $file = implode( '/', array($version,'moses',$ext[0].'.txt.zip') );
     } else {
       $file = implode( '/', array($version,'mono',$ext[2].'.tok.gz') );
     }
   }
   if (count($parts) == 3){
     if ($parts[1] == 'mono'){
       $ext = explode('.',$parts[2]);
       if ($ext[1] == 'raw'){
	 $file = implode( '/', array($version,'mono',$ext[2].'.txt.gz') );
       } elseif ($ext[1] != 'txt' && $ext[1] != 'tok'){
	 $file = implode( '/', array($version,'mono',$ext[1].'.tok.gz') );
       }
     } elseif ($parts[1] == 'dic'){
       $file = implode( '/', array($version,'dic',$parts[2]) );
     } elseif ($parts[1] == 'freq'){
       $ext = explode('.',$parts[2]);
       $file = implode( '/', array($version,'freq',$ext[1].'.freq.gz') );
     }
   }
   return $file;
}

function new2old($corpus,$version) {

   // latest version of each corpus in OPUS
   $versions = array(
		     "Books" => "Books/v1",
		     "DGT" => "DGT/v4",
		     "DOGC" => "DOGC/v2",
		     "ECB" => "ECB/v1",
		     "EhuHac" => "EhuHac/v1",
		     "Elhuyar" => "Elhuyar/v1",
		     "EMEA" => "EMEA/v3",
		     "EUbookshop" => "EUbookshop/v2",
		     "EUconst" => "EUconst/v1",
		     "Europarl3" => "Europarl/v3",
		     "Europarl" => "Europarl/v7",
		     "giga-fren" => "giga-fren/v2",
		     // "GlobalVoices" => "GlobalVoices/v2017q3",
		     "GlobalVoices" => "GlobalVoices/v2015",
		     "GNOME" => "GNOME/v1",
		     "hrenWaC" => "hrenWaC/v1",
		     "JRC-Acquis" => "JRC-Acquis/v3.0",
		     "KDE4" => "KDE4/v2",
		     "KDEdoc" => "KDEdoc/v1",
		     "MBS" => "MBS/v1",
		     "memat" => "memat/v1",
		     "MontenegrinSubs" => "MontenegrinSubs/v1",
		     "MPC1" => "MPC1/v1",
		     "MultiUN" => "MultiUN/v1",
		     "News-Commentary" => "News-Commentary/v9.1",
		     "News-Commentary11" => "News-Commentary/v11",
		     "OfisPublik" => "OfisPublik/v1",
		     "OpenOffice" => "OpenOffice/v2",
		     "OpenOffice3" => "OpenOffice/v3",
		     "OpenSubtitles" => "OpenSubtitles/v1",
		     "OpenSubtitles2011" => "OpenSubtitles/v2011",
		     "OpenSubtitles2012" => "OpenSubtitles/v2012",
		     "OpenSubtitles2013" => "OpenSubtitles/v2013",
		     "OpenSubtitles2015" => "OpenSubtitles/v2015",
		     "OpenSubtitles2016" => "OpenSubtitles/v2016",
		     "OpenSubtitles2018" => "OpenSubtitles/v2018",
		     "ParaCrawl" => "ParaCrawl/v1",
		     "PHP" => "PHP/v1",
		     "RF" => "RF/v1",
		     "SETIMES" => "SETIMES/v1",
		     "SETIMES2" => "SETIMES/v2",
		     "SPC" => "SPC/v1",
		     "Tanzil" => "Tanzil/v1",
		     "Tatoeba" => "Tatoeba/v2",
		     "TED2013" => "TED2013/v1.1",
		     "TedTalks" => "TedTalks/v1",
		     "TEP" => "TEP/v1",
		     "Ubuntu" => "Ubuntu/v14.10",
		     "UN" => "UN/v20090831",
		     "Wikipedia" => "Wikipedia/v1.0",
		     "WikiSource" => "WikiSource/v1",
		     "WMT-News" => "WMT-News/v2014",
		     "XhosaNavy" => "XhosaNavy/v1",
		     );

   $flipped=array_flip($versions);
   return $flipped[$corpus.'/'.$version];
}

?>
