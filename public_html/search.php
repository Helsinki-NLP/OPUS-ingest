<?php

$opuspub = "/home/opus/public_html";
$opusdownloads = "download/";

$src = NULL;
$trg = NULL;
$minsize = NULL;

if (array_key_exists('src',$_REQUEST)){
  $src = $_REQUEST['src'];
 }
if (array_key_exists('trg',$_REQUEST)){
  $trg = $_REQUEST['trg'];
 }
if (array_key_exists('minsize',$_REQUEST)){
  $minsize = $_REQUEST['minsize'];
 }

/*
if ($trg == $src){
  $trg=NULL;
  //  unset($trg);
 }
*/

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
  echo "<th>$src tokens</th><th>";
  if ( $src != $trg ){
     echo "$trg tokens";
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
//			 $sort_by='moses'){

    $resources = array();
    find_resources($src,$trg,$resources);

    $sorted = array();
    foreach ($resources as $corpus => $res){
      if ($sort_by == 'xces-links'){
	$sorted[$corpus] = $res['xces'][4];
      }
      elseif ($sort_by == 'xces'){
	$sorted[$corpus] = $res['xces'][5] + $res['xces'][6];
      }
      else{
	$sorted[$corpus] = $res['moses'][2] + $res['moses'][3];
      }
    }
    arsort($sorted,SORT_NUMERIC);

    foreach ($sorted as $bitext => $size){
      if ($size < $minsize){ break; }
      list($corpus,$src,$trg) = explode(':',$bitext);
      print_resource($corpus,$src,$trg,$resources[$bitext]);
    }
}




function find_resources($src,$trg,&$resources){

  if ($src > $trg){
    $tmp = $trg; $trg = $src; $src = $tmp;
  }

  $corpora = array();
  get_corpora($src,$trg,$corpora);

  foreach ($corpora as $corpus){
    $res = array();
    get_resources($corpus,$src,$trg,$res);
    foreach ($res as $format => $descr){
      $resources["$corpus:$src:$trg"][$format] = explode(':',$descr);
    }
  }
}




function print_resource($corpus,$src,$trg,$resource){

  global $TotalDocs,$TotalLinks,$TotalSrcTok,$TotalTrgTok,
    $TotalTmxLinks,$TotalTxtLinks,$opusdownloads;

  foreach ($resource as $format => $parts){

      $link = 'download.php?f='.urlencode($parts[0]);
      if ($format == 'xces'){
	$nrDocs = $parts[3];
	$nrLinks=$parts[4];
	$title = $nrDocs." aligned documents,";
	$title = pretty_number($nrLinks)." sentence alignments";
	$ResourceHtml[$format]='<a href="'.$link.'" title="'.$title.'">';
	$ResourceHtml[$format].=$format."</a>&nbsp;";

	$nrSrcTok=$parts[5];
	$title = pretty_number($nrSrcTok)." source language tokens";
	$link = 'download.php?f='.urlencode($parts[1]);
	$ResourceHtml[$format].='<a href="'.$link.'" title="'.$title.'">';
	$ResourceHtml[$format].=$src."</a>";

	$rawsrc = preg_replace('/\.tar\.gz/','.raw.tar.gz',$parts[1]);
	if (file_exists($opusdownloads.$rawsrc)){
	  $link = 'download.php?f='.urlencode($rawsrc);
	  $ResourceHtml['raw']='<a href="'.$link.'" title="'.$title.'">';
	  $ResourceHtml['raw'].=$src."</a>";
	}

	if ( $src != $trg ){
	  $nrTrgTok=$parts[6];
	  $title = pretty_number($nrTrgTok)." target language tokens";
	  $link = 'download.php?f='.urlencode($parts[2]);
	  $ResourceHtml[$format].='&nbsp;<a href="'.$link.'" title="'.$title.'">';
	  $ResourceHtml[$format].=$trg."</a>";

	  $rawtrg = preg_replace('/\.tar\.gz/','.raw.tar.gz',$parts[2]);
	  if (file_exists($opusdownloads.$rawtrg)){
	     $link = 'download.php?f='.urlencode($rawtrg);
	     $ResourceHtml['raw'].='&nbsp;<a href="'.$link.'" title="'.$title.'">';
	     $ResourceHtml['raw'].=$trg."</a>";
	  }
	}
      }

      elseif ($format == 'tmx'){
	$nrTMXLinks=$parts[1];
	$nrTMXSrcTok=$parts[2];
	$nrTMXTrgTok=$parts[3];
        if (file_exists($opusdownloads.$corpus.'/'.$src.'-'.$trg.'.tmx.gz')){
	    $title = pretty_number($nrTMXLinks)." sentence alignments, ";
	    $title .= pretty_number($nrTMXSrcTok)." source tokens,";
	    $title .= pretty_number($nrTMXTrgTok)." target tokens";
	    // $title .= pretty_number($nrTMXSrcTok+$nrTMXTrgTok)." tokens";
	    $ResourceHtml[$format]='<a href="'.$link.'" title="'.$title.'">';
	    $ResourceHtml[$format].=$format."</a>";
	}
	$TotalTmxLinks+=$nrTMXLinks;
      }

      elseif ($format == 'moses'){
	$nrTXTLinks=$parts[1];
	$nrTXTSrcTok=$parts[2];
	$nrTXTTrgTok=$parts[3];
        if (file_exists($opusdownloads.$corpus.'/'.$src.'-'.$trg.'.txt.zip')){
	    $title = pretty_number($nrTXTLinks)." sentence alignments, ";
	    $title .= pretty_number($nrTXTSrcTok)." source tokens,";
	    $title .= pretty_number($nrTXTTrgTok)." target tokens";
	    // $title .= pretty_number($nrTXTSrcTok+$nrTXTTrgTok)." tokens";
	    $ResourceHtml[$format]='<a href="'.$link.'" title="'.$title.'">';
	    $ResourceHtml[$format].=$format."</a>";
	}
	$TotalTxtLinks+=$nrTXTLinks;
      }
    }
    echo '<tr><td><a href="'.$corpus.'.php"><b>';
    echo $corpus.'</b></a></td>';
    echo "<td align='right'>$nrDocs</td>";
    //echo "<td align='right'>".pretty_number($nrTXTLinks)."</td>";
    //echo "<td align='right'>".pretty_number($nrTXTSrcTok)."</td>";
    //echo "<td align='right'>".pretty_number($nrTXTTrgTok)."</td>";
    echo "<td align='right'>".pretty_number($nrLinks)."</td>";
    echo "<td align='right'>".pretty_number($nrSrcTok)."</td>";
    echo "<td align='right'>".pretty_number($nrTrgTok)."</td>";
    // echo '<td bgcolor="'.size_color($nrLinks).'">[&nbsp;';

    ////////////////////////////////////////////////////////////////////////
    // XML files
    ////////////////////////////////////////////////////////////////////////

    echo '<td bgcolor="'.size_color($nrSrcTok+$nrTrgTok).'">[&nbsp;';
    echo $ResourceHtml['xces'].'&nbsp;]</td>';
    if (isset($ResourceHtml['raw'])){
      echo '<td bgcolor="'.size_color($nrSrcTok+$nrTrgTok).'">[&nbsp;';
      echo $ResourceHtml['raw'].'&nbsp;]</td>';
    }
    else{
      echo '<td></td>';
    }

    ////////////////////////////////////////////////////////////////////////
    // TMX files
    ////////////////////////////////////////////////////////////////////////

    if (isset($ResourceHtml['tmx'])){
	//echo '<td bgcolor="'.size_color($nrTMXLinks).'">[&nbsp;';
	echo '<td bgcolor="'.size_color($nrTMXSrcTok+$nrTMXTrgTok).'">[&nbsp;';
	echo $ResourceHtml['tmx'].'&nbsp;]</td>';
    }
    else{
      echo '<td></td>';
    }

    ////////////////////////////////////////////////////////////////////////
    // Moses files
    ////////////////////////////////////////////////////////////////////////

    if (isset($ResourceHtml['moses'])){
	//echo '<td bgcolor="'.size_color($nrTXTLinks).'">[&nbsp;';
	echo '<td bgcolor="'.size_color($nrTXTSrcTok+$nrTXTTrgTok).'">[&nbsp;';
	echo $ResourceHtml['moses'].'&nbsp;]</td>';
    }
    else{
      echo '<td></td>';
    }

    ////////////////////////////////////////////////////////////////////////
    // monolingual files
    ////////////////////////////////////////////////////////////////////////

    $monobase = $corpus.'/mono/'.$corpus.'.';
    echo '<td>';
    if (file_exists($opusdownloads.$monobase.$src.'.gz')){
      $link = 'download.php?f='.urlencode($monobase.$src.'.gz');
      echo '<a href="'.$link.'" title="tokenized '.$src.'">'.$src."</a>&nbsp;";
    }
    if ( $src != $trg ){
       if (file_exists($opusdownloads.$monobase.$trg.'.gz')){
       	  $link = 'download.php?f='.urlencode($monobase.$trg.'.gz');
      	  echo '<a href="'.$link.'" title="tokenized '.$trg.'">'.$trg."</a>&nbsp;";
       }
    }
    echo '</td>';
    $monobase = $corpus.'/mono/'.$corpus.'.raw.';
    echo '<td>';
    if (file_exists($opusdownloads.$monobase.$src.'.gz')){
      $link = 'download.php?f='.urlencode($monobase.$src.'.gz');
      echo '<a href="'.$link.'" title="tokenized '.$src.'">'.$src."</a>&nbsp;";
    }
    if ( $src != $trg ){
       if (file_exists($opusdownloads.$monobase.$trg.'.gz')){
       	  $link = 'download.php?f='.urlencode($monobase.$trg.'.gz');
      	  echo '<a href="'.$link.'" title="tokenized '.$trg.'">'.$trg."</a>&nbsp;";
       }
    }
    echo '</td>';

    echo '<td>';
    $srcparsed = $corpus.'/'.$src.'.parsed.tar.gz';
    if (file_exists($opusdownloads.$srcparsed)){
      $link = 'download.php?f='.urlencode($srcparsed);
      echo '<a href="'.$link.'" title="parsed '.$src.'">'.$src."</a>&nbsp;";
    }
    if ( $src != $trg ){
       $trgparsed = $corpus.'/'.$trg.'.parsed.tar.gz';
       if (file_exists($opusdownloads.$trgparsed)){
       	  $link = 'download.php?f='.urlencode($trgparsed);
      	  echo '<a href="'.$link.'" title="parsed '.$trg.'">'.$trg."</a>&nbsp;";
       }
    }
    /*
    $truedir = $corpus.'/wordalign/truecaser/';
    if (file_exists($opusdownloads.$truedir.$src.'.gz')){
      $link = 'download.php?f='.urlencode($truedir.$src.'.gz');
      echo '<a href="'.$link.'" title="truecaser '.$src.'">'.$src."</a>&nbsp;";
    }
    if (file_exists($opusdownloads.$truedir.$trg.'.gz')){
      $link = 'download.php?f='.urlencode($truedir.$trg.'.gz');
      echo '<a href="'.$link.'" title="truecaser '.$trg.'">'.$trg."</a>&nbsp;";
    }
    */
    echo '</td>';

    echo '<td>';
    if (is_dir("$opusdownloads$corpus/$src-$trg")){
      echo "<a rel='nofollow' href='$opusdownloads$corpus/$src-$trg'>$src-$trg</a>";
    }
    elseif (is_dir("$corpus/wordalign/$src-$trg")){
      echo "<a rel='nofollow' href='$corpus/wordalign/$src-$trg'>$src-$trg</a>";
    }
    echo '</td>';

    // dictionary files
    $dicfile = $corpus.'/dic/'.$src.'-'.$trg.'.dic.gz';
    echo '<td>';
    if (file_exists($opusdownloads.$dicfile)){
      $link = 'download.php?f='.urlencode($dicfile);
      echo '<a href="'.$link.'" title="dictionary">dic</a>&nbsp;';
    }
    echo '</td>';

    // freq files
    $freqbase = $corpus.'/freq/'.$corpus.'.';
    echo '<td>';
    if (file_exists($opusdownloads.$freqbase.$src.'.gz')){
      $link = 'download.php?f='.urlencode($freqbase.$src.'.gz');
      echo '<a href="'.$link.'" title="lowercased frequencies '.$src.'">'.$src."</a>&nbsp;";
    }
    if ( $src != $trg ){
       if (file_exists($opusdownloads.$freqbase.$trg.'.gz')){
       	  $link = 'download.php?f='.urlencode($freqbase.$trg.'.gz');
      	  echo '<a href="'.$link.'" title="lowercased frequencies '.$trg.'">'.$trg."</a>&nbsp;";
       }
    }
    echo '</td>';


    ////////////////////////////////////////////////////////////////////////
    // query and browse
    ////////////////////////////////////////////////////////////////////////

    if (file_exists('cwb/reg/'.$corpus.'/'.$src)){
      echo '<td>[<a href="bin/opuscqp.pl';
      echo '?corpus='.$corpus.';lang='.$src.'">query</a>';
      echo ']</td>';;
    }
    else{ echo '<td></td>'; }

    if (file_exists($corpus.'/'.$src.'-'.$trg.'_sample.html')){
      echo '<td>[';
      echo '<a href="'.$corpus.'/'.$src.'-'.$trg.'_sample.html">sample</a>';
      echo ']</td>';;
    }
    else{ echo '<td></td>'; }

    echo '<td style="text-align:left;">';

    // alternative alignments
    $altlinks = $corpus.'/'.$src.'-'.$trg.'.alt.xml.gz';
    if (file_exists($opusdownloads.$altlinks)){
      echo "[<a rel='nofollow' href='$altlinks'>alt</a>]";
    }

    // intra-lingual links with different categories
    $ext = array( 'insert', 'pct' , 'spell', 'other');     
    foreach( $ext as $e ) {
        $altlinks = $corpus.'/'.$src.'-'.$trg.'.'.$e.'.xml.gz';
        $alttmx   = $corpus.'/'.$src.'-'.$trg.'.'.$e.'.tmx.gz';
        $altmoses = $corpus.'/'.$src.'-'.$trg.'.'.$e.'.txt.zip';
   	if (file_exists($opusdownloads.$altlinks)){
      	   echo "[<a rel='nofollow' href='$altlinks'>$e</a>";
   	   if (file_exists($opusdownloads.$alttmx)){
      	      echo " <a rel='nofollow' href='$alttmx'>tmx</a>";
	   }
   	   if (file_exists($opusdownloads.$altmoses)){
      	      echo " <a rel='nofollow' href='$altmoses'>txt</a>";
	   }
	   echo "]";
    	}
    }

    // source directories of the exist
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

    $TotalDocs+=$nrDocs;
    $TotalLinks+=$nrLinks;
    $TotalSrcTok+=$nrSrcTok;
    $TotalTrgTok+=$nrTrgTok;
}


function get_corpora($src,$trg,&$corpora){
  global $opuspub;
  $dbh = dba_open( $opuspub."/Bitexts.db", "r", "db4") or die('ssss');
  if (dba_exists("$src-$trg",$dbh)){
    $string=dba_fetch("$src-$trg",$dbh);
    $corpora = explode(':',$string);
  }
  dba_close($dbh);
}




function get_resources($corpus,$src,$trg,&$resources){
  global $opuspub;
  $key = $corpus.'/'.$src.'-'.$trg;
  $dbh = dba_open( $opuspub."/Info.db", "r", "db4") or die('');
  if (dba_exists($key,$dbh)){
    $string=dba_fetch($key, $dbh);
    $info = explode('+',$string);
    foreach ($info as $res){
      $parts = explode('=',$res);
      $resources[$parts[0]] = $parts[1];
    }
  }
  dba_close($dbh);
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
    $trgs['any'] = '-- any language --';
    dba_close($dbh);
    return true;
  }
  dba_close($dbh);
  return false;
}


function print_db($name){
  global $opuspub;
  $dbh = dba_open( $opuspub."/".$name, "r", "db4") or die('');
  $id=dba_firstkey($dbh);
  while ($id != NULL){
    $name = dba_fetch($id, $dbh);
    echo "...$id... = $name <br/>";
    $id=dba_nextkey($dbh);
  }
  dba_close($dbh);
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


?>
