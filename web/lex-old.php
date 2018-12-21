<?php
@setlocale(LC_ALL,'en_US.utf8');
header('Content-Type: text/html; charset=UTF-8');
include("count.php");
?>
<html>
<head>
<title>OPUS: Search Word Alignments</title>
<link rel="stylesheet" href="lex.css" type="text/css">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" >
<meta name="robots" content="NOFOLLOW" />
</head>
<body>

<?php

$DBname = 'opus';
$DBpass = 'OOO!pus';

$link = mysql_connect( "localhost", $DBname, $DBpass);
if (! $link){
    echo "cannot connect to database!";
}
mysql_set_charset('utf8', $link);


$langs = array();
$bitexts = array();
get_lang($langs,$bitexts);



$lang = 'eng';
if (isset($_REQUEST['l'])){
   if (preg_match('/^...$/',$_REQUEST['l'])){
     $lang = $_REQUEST['l'];
   }
   else{
     echo "requested dictionary '".$_REQUEST['l']."' does not match!<br />";
   }
}

echo '<div class="diclinks">';
foreach ($langs as $l){
   if ($lang == $l){
     echo "<b>$l</b> / ";
   }
   else{
     echo "<a rel='nofollow' href='?l=$l'>$l</a> / ";
   }
}



$trgs = array();
foreach ($langs as $l){
  if ((! isset($_POST['submit']) || isset($_POST[$l])) && 
      isset($_REQUEST[$l])){
//  if (isset($_REQUEST[$l])){
    if (preg_match('/^...$/',$l)){
       if (bitext_exists($l,$lang)){
         array_push($trgs,$l);
       }
    }
  }
}
if (count($trgs) == 0){
   if ($lang == 'eng'){
     array_push($trgs,'dut');
   }
   else{
     array_push($trgs,'eng');
   }
}

if (isset($_REQUEST['ok'])){
   set_checked($_SERVER['REMOTE_ADDR'],$_REQUEST['l'],$_REQUEST['t'],
	       $_REQUEST['sid'],$_REQUEST['tid'],$_REQUEST['ok']);
}

function set_checked($ip,$srclang,$trglang,$srcID,$trgID,$ok){
  global $DBname;

    $query='INSERT IGNORE INTO user (user) VALUES ("'.$ip.'")';
    // echo $query;
    $result = mysql($DBname, $query);
    $query='SELECT ID FROM user WHERE user="'.$ip.'"';
    // echo $query;
    if ($result = mysql($DBname, $query)){
	if (mysql_num_rows($result)){
	    $row=mysql_fetch_array($result);
	    $userID = $row['ID'];
	}
	else{return false;}
    }
    else{return false;}

    if ($srclang < $trglang){
	$table = $srclang.'-'.$trglang;
    }
    else{
	$table = $trglang.'-'.$srclang;
    }

    $query='SELECT correct FROM `'.$table.'_check` WHERE ';
    $query.='userID='.$userID.' AND srcID='.$srcID.' AND trgID='.$trgID;
    // echo $query;
    if ($result = mysql($DBname, $query)){
	if (mysql_num_rows($result)){
	    $row=mysql_fetch_array($result);
	    if ($row['correct'] == $ok){
		return true;
	    }
	    $query='UPDATE `'.$table.'_check` ';
	    $query.='SET correct='.$ok.' WHERE userID='.$userID;
	    $query.=' AND srcID='.$srcID.' AND trgID='.$trgID;
	    // echo $query;
	    mysql($DBname, $query);
	    return update_feedback_counts($table,$srcID,$trgID);
	}
    }
    $query='INSERT INTO `'.$table.'_check` (userID,srcID,trgID,correct)';
    $query.=' VALUES('.$userID.','.$srcID.','.$trgID.','.$ok.')';
//    echo $query;
    mysql($DBname, $query);
    return update_feedback_counts($table,$srcID,$trgID);
}


function update_feedback_counts($table,$srcID,$trgID){
  global $DBname;
    // update counts for user feedback
    $query = 'SELECT count(correct) AS count,correct FROM ';
    $query.='`'.$table.'_check` WHERE srcID=';
    $query.=$srcID.' AND trgID='.$trgID;
    $query.=' GROUP BY correct';
    $wrong = 0;
    $correct = 0;
    if ($res = mysql($DBname, $query)){
	while ($r=mysql_fetch_array($res)){
	    if ($r['correct'] == 0){
		$wrong=$r['count'];
	    }
	    else{
		$correct=$r['count'];
	    }
	}
    }
    
    $query = 'UPDATE `'.$table.'` SET ok='.$correct.',wrong='.$wrong;
    $query.= ' WHERE srcID='.$srcID.' AND trgID='.$trgID;

    // echo $query;
    return mysql($DBname, $query);

}

?>
</div>

<h2><a href="/index.php">OPUS: </a>
Search Word Alignment Database for <i><?php echo $lang; ?></i></h2>


<?php
$first_letters=array();
if (get_initial($first_letters,$lang)>1){
    foreach ($first_letters as $l){
	echo '<a rel="nofollow" href="?l='.$lang.'&amp;f='.urlencode($l).'">';
	echo $l.'</a> - ';
    }
    echo "<p>";
}
?>

<div class="query">
<form method='post'>

<table width="100%" border="0"><tr>
<td>

<?php
$i=0;
foreach ($langs as $l){
  if ($l == $lang){continue;}
  if (bitext_exists($l,$lang)){
    if ($i && ! ($i % 8)){
	echo '<br />';
    }
    if (in_array($l,$trgs)){
      echo "<input type=\"checkbox\" checked name=\"$l\">&nbsp;<code>$l</code> ";
    }
    else{
      echo "<input type=\"checkbox\" name=\"$l\">&nbsp;<code>$l</code> ";
    }
    $i++;
  }
}
?>

</td>
<td valign="top" width="50%">
<ul>
<li> results from automatic word alignment
<li> wildcard symbols '%' and '_' allowed
<li> click on translations to query these words with their alignments
<li> click on frequencies to get concordance lines from the corpus (max 100)
<li> the concordancer does not use word alignment
<!-- <li> (concordances do not always work because of encoding problems ...) -->
</ul>

</td>
</table>

<p>
<?php
if (isset($_REQUEST['w'])){
    echo '<input name="w" value="'.$_REQUEST['w'].'">';
}
elseif ($lang == 'eng'){
    echo '<input name="w" value="honey">';
}
else{
    echo '<input name="w" value="h%">';
}
?>
<input name="submit" type="submit" value="select">

<?php

$corpora=array();
if (get_corpora($corpora)>1){
   echo " from ";
   if (! isset($_REQUEST['c']) || $_REQUEST['c'] == 'all'){
       echo "<input type=\"radio\" name=c value=\"all\" checked> <code>all</code> ";
   }
   else{
       echo "<input type=\"radio\" name=c value=\"all\"> <code>all</code> ";
   }
   if (count($corpora)>1){
     foreach ($corpora as $c){
       if (isset($_REQUEST['c']) && ($_REQUEST['c'] == $c)){
	 echo "<input type=\"radio\" name=c value=\"$c\" checked> <code>$c</code> ";
       }
       else{
	 echo "<input type=\"radio\" name=c value=\"$c\"> <code>$c</code> ";
       }
     }
   }
}


?>
</form>
</div>

<p>


<table border="0" width="100%"><tr>


<td align="left" valign="top"><div class="result">
<?php

if (isset($_REQUEST['f']) && ($_REQUEST['f'] != '')){
    print_words($lang,$_REQUEST['f']);
}


echo '<table border="1" cellpadding="10px"><tr>';

if (isset($_REQUEST['w']) && ($_REQUEST['w'] != '')){

   if (item_exists($lang,$_REQUEST['w'])){

      $i=0;

      $nrtrgs = count($trgs);
      $nrrows = ceil($nrtrgs/5);
      $nrcells = ceil($nrtrgs/$nrrows);

      foreach ($trgs as $trg){
	      if ($i && ! ($i % $nrcells)){
		 echo '</tr><tr>';
	      }
	      echo '<td valign="top">';
	      print_results($lang,$trg,$_REQUEST['w']);
	      echo '</td>';
	      $i++;
      }
   }
   else{
	print_words($lang,$_REQUEST['w']);
   }
}

?>
</tr></table>
</div></td>

<td width="50%" valign="top">
<iframe class="kwic" name="kwic" width="100%" height="100%" border="0" frameborder="0">
</iframe>
</td>

</tr>
</table>


<?php



function item_exists($lang,$word){
  global $DBname;
    $word = clean_query($word);
    $query = 'SELECT item FROM '.$lang.' WHERE item="'.$word.'"';
  //    echo $query;
    if ($result = mysql($DBname, $query)){
       return mysql_num_rows($result);
    }
    return false;
}


function print_words($lang,$first){
  global $DBname;
//    setlocale(LC_ALL, 'en_US.UTF8');
//    setlocale(LC_CTYPE, 'en_US.UTF8');
    $first = clean_query($first);
//    $lower = strtolower($first);
    $query = "SELECT distinct item FROM ";
    $query .= $lang;
//   $query .= " WHERE item REGEXP '^";
//    $query .= '('.$first.'|'.$lower.')';
//    $query .= "' ORDER BY item";

    $query .= ' WHERE item LIKE "';
    $query .= $first;
    $query .= '%" ORDER BY item';

//    echo $query;

   if ($result = mysql($DBname, $query)){
       global $trgs;
       $link = 'l='.$lang;
       foreach ($trgs as $t){
	       $link .= '&amp;'.$t.'=1';
       }
       while ($row=mysql_fetch_array($result)){
	     echo '<a rel="nofollow" href="?'.$link.'&amp;w=';
	     echo urlencode($row['item']);
	     echo '">';
	   echo $row['item'].'</a><br />';
       }
   }

}



function print_results($src,$trg,$word){

  global $bitexts,$trgs, $DBname;

   $dic = $src.'-'.$trg;
   $is_trg = false;
   if (! in_array($dic,$bitexts)){
      $tmp = $src;
      $src = $trg;
      $trg = $tmp;
      $is_trg = true;
      $dic = $src.'-'.$trg;
   }
   if (! in_array($dic,$bitexts)){
      echo "dictionray <i>$dic</i> does not exist!<br/>";
      return false;
   }

   $query = "SELECT distinct SUM(freq) AS freq,src.ID AS srcID, trg.ID AS trgID, src.item AS src,trg.item AS trg, origin.corpus,ok,wrong FROM ";
   $query .= "`$dic` AS align,$src AS src,$trg AS trg, origin ";
   $query .= "WHERE align.srcID = src.ID AND align.trgID = trg.ID";
   $query .= " AND origin.ID = align.originID";
   if (isset($_REQUEST['c']) && $_REQUEST['c']!='all'){
       $query .= " AND origin.corpus = '".$_REQUEST['c']."'";
   }   

   $word = clean_query($word);

   if ($is_trg){
      $query .= ' AND trg.item = "'.$word.'"';
      $query .= " GROUP BY src ORDER BY freq DESC";
   }
   else{
      $query .= ' AND src.item = "'.$word.'"';
      $query .= " GROUP BY trg ORDER BY freq DESC";
   }
   if (!isset($_REQUEST['all']) || count($trgs)>1){
       $query .= " LIMIT 0,5";
   }

   if ($result = mysql($DBname, $query)){

       if ($is_trg){
	   echo "<table width='100%'><tr><th></th><th>$src</th>";
	   $req = '?w='.urlencode($word);
	   $req .= '&amp;l='.urlencode($trg);
	   $req .= '&amp;'.$src.'=1&amp;all=1';
       }
       else{
	   echo "<table width='100%'><tr><th></th><th>$trg</th>";
	   $req = '?w='.urlencode($word);
	   $req .= '&amp;l='.urlencode($src);
	   $req .= '&amp;'.$trg.'=1&amp;all=1';
       }

       if (!isset($_REQUEST['all']) || count($trgs)>1){
	   if (isset($_REQUEST['c'])){
	       $req .= '&amp;c='.$_REQUEST['c'];
	   }
	   if (mysql_num_rows($result)>4){
	       echo '<td align="right"><a rel="nofollow" href="'.$req;
	       echo '">&nbsp;&nbsp;&gt;&gt;</a></td>';
	   }
       }
       echo '</tr>';

       if ($is_trg){
          $thisreq = make_dic_request($word,$trg,$src);
       }
       else{
          $thisreq = make_dic_request($word,$src,$trg);
       }
       while ($row=mysql_fetch_array($result)){

	   // get counts from user feedback
	   $correct = $row['ok'];
	   $wrong = $row['wrong'];

	   $color=feedback_color($correct,$wrong,$row['freq']);

	   $href = make_corpus_request($row['corpus'],$row['src'],$row['trg'],$src,$trg);
	   echo '<tr><td class="freq" bgcolor="#'.$color.'">';
	   echo '<a rel="nofollow" target="kwic" href="'.$href.'">';
	   echo $row['freq'].'</a></td>';
	   if ($is_trg){
	       $req = make_dic_request($row['src'],$src,$trg);
	       echo '<td class="trg" bgcolor="#'.$color.'" >';
//	       echo '<td class="trg" >';
	       echo '<a rel="nofollow" href="?'.$req.'">'.$row['src'].'</a>';
	       echo '<td align="right" bgcolor="'.$color.'"><a ';
	       echo 'rel="nofollow" title="'.$correct.'" ';
	       echo 'href="?'.$thisreq.'&amp;t='.$src.'&amp;ok=1';
	       echo '&amp;sid='.$row['srcID'].'&amp;tid='.$row['trgID'].'">';
	       echo '<img border="0" src="img/icon_accept.gif" />';
	       echo '</a><a rel="nofollow" title="'.$wrong.'" ';
	       echo 'href="?'.$thisreq.'&amp;t='.$src.'&amp;ok=0';
	       echo '&amp;sid='.$row['srcID'].'&amp;tid='.$row['trgID'].'">';
	       echo '<img border="0" src="img/action_stop.gif" />';
	       echo '</a></td></td></tr>';
	   }
	   else{
	       $req = make_dic_request($row['trg'],$trg,$src);
//	       echo '<td class="trg">';
	       echo '<td class="trg" bgcolor="#'.$color.'" >';
	       echo '<a rel="nofollow" href="?'.$req.'">'.$row['trg'].'</a>';
	       echo '<td align="right" bgcolor="'.$color.'"><a ';
	       echo 'rel="nofollow" title="'.$correct.'" ';
	       echo 'href="?'.$thisreq.'&amp;t='.$trg.'&amp;ok=1';
	       echo '&amp;sid='.$row['srcID'].'&amp;tid='.$row['trgID'].'">';
	       echo '<img border="0" src="img/icon_accept.gif" />';
	       echo '</a><a rel="nofollow" title="'.$wrong.'" ';
	       echo 'href="?'.$thisreq.'&amp;t='.$trg.'&amp;ok=0';
	       echo '&amp;sid='.$row['srcID'].'&amp;tid='.$row['trgID'].'">';
	       echo '<img border="0" src="img/action_stop.gif" />';
	       echo '</a></td></td></tr>';
	   }
       }
       echo '</table>';
   }
}

function feedback_color($correct,$wrong,$freq){

  $yes = 0;
  $no  = 0;
    if ($correct){
	$yes=$correct/($correct+$wrong);
	$yes=floor((1+log(1-1/($correct+$wrong+1)))*128*$yes);
    }
    if ($wrong){
	$no=$wrong/($correct+$wrong);
	$no=floor((1+log(1-1/($correct+$wrong+1)))*128*$no);
    }


//    if ($correct>0){$correct=floor(sqrt(1-1/($correct+1))*128);}
//    if ($wrong>0){$wrong=floor(sqrt(1-1/($wrong+1))*128);}

//    echo "$yes ... $no<br>";

    $red=255-$yes;
    $green=255-$no;
    $blue=255-(max($yes,$no));
//    $blue=255-(abs($correct-$wrong));

//    echo "$red - $green - $blue: ";

    $color=dechex($red);
    $color.=dechex($green);
    $color.=dechex($blue);
//    echo $color;
    return $color;
}

function make_dic_request($w,$s,$t){
    $query = 'w='.urlencode($w);
    $query .= '&amp;l='.urlencode($s);
    $query .= '&amp;'.$t.'=1';
    global $trgs;
    foreach ($trgs as $trg){
	if ($trg == $s){continue;}
	$query .= '&amp;'.$trg.'=1';
    }
    if (isset($_REQUEST['all']) && count($trgs) == 1){
	$query.='&amp;all=1';
    }
    if (isset($_REQUEST['c'])){
	$query.='&amp;c='.$_REQUEST['c'];
    }
    return $query;
}


function make_corpus_request2($src,$trg,$srclang,$trglang){
    $query = 'corpus='.$srclang;
    $query .= '&amp;query=%22'.$src.'%22';
    $query .= '%20:'.strtoupper($trglang);
    $query .= '%20%22'.$trg.'%22';
    $query .= '&amp;alg='.$trglang;
//    $query = urlencode($query);
    return 'http://logos.uio.no/cgi-bin/opus/subtitles/display.pl?'.$query;
}

function make_corpus_request($corpus,$src,$trg,$srclang,$trglang){

  
  //if ($corpus != 'OpenSubtitles'){
       $srclang = iso639three2two($srclang);
       $trglang = iso639three2two($trglang);
       //}
  

    $src = str_replace(' ','%22%20%22',$src);
    $trg = str_replace(' ','%22%20%22',$trg);
    $query = 'corpus='.$corpus.'&amp;showmax=100';
    $query .= '&amp;lang='.$srclang;
    $query .= '&amp;query=%22'.$src.'%22';
    $query .= '&amp;query_'.$trglang.'=';
    $query .= '%22'.$trg.'%22';
//    $query .= '%20:'.strtoupper($trglang);
//    $query .= '%20%22'.$trg.'%22';
    $query .= '&amp;alg='.$trglang;
//    $query = urlencode($query);
    return 'bin/cqp.pl?'.$query;
//    return 'http://logos.uio.no/cgi-bin/opus/cqp.pl?'.$query;
//    return 'http://logos.uio.no/cgi-bin/opus/opuscqp.pl?'.$query;
}






function clean_query($q){

   $q = str_replace('\\','',$q);  // don't allow escape symbols
   $q = str_replace('"','',$q);  // don't allow double quotes

   return $q;
}



function get_lang(&$langs,&$bitexts){
  global $DBname;
  $tabellen = mysql_list_tables( $DBname);
  $i=0;
  while ($i < mysql_num_rows($tabellen)){
    $t_name = mysql_tablename ($tabellen, $i);
    if (preg_match('/^...$/',$t_name)){
      array_push($langs,$t_name);
    }
    elseif (preg_match('/^...-...$/',$t_name)){
      array_push($bitexts,$t_name);
    }
    $i++;
  }
  sort($langs);
  sort($bitexts);
  return $i;
}



function get_corpora(&$corpora){
  global $DBname;
   $query = 'select distinct corpus from origin';
   if ($result = mysql($DBname, $query)){
     $i=0;
     while ($row=mysql_fetch_array($result)){
	 array_push($corpora,$row['corpus']);
	 $i++;
     }
   }
   return $i;

}

function get_initial(&$letters,$lang){
  global $DBname;
   $query = 'select distinct letter from '.$lang.'_first ORDER BY letter';
//   echo $query;
   $i=0;
   if ($result = mysql($DBname, $query)){
     while ($row=mysql_fetch_array($result)){
	 array_push($letters,$row['letter']);
	 $i++;
     }
   }
   return $i;
}


function bitext_exists($src,$trg){
  global $bitexts;
  if (in_array($src.'-'.$trg,$bitexts)){
     return $src.'-'.$trg;
  }
  if (in_array($trg.'-'.$src,$bitexts)){
     return $trg.'-'.$src;
  }
  return false;
}

function iso639three2two($code){
$codes = array(
'aar' => 'aa',
'abk' => 'ab',
'afr' => 'af',
'aka' => 'ak',
'alb' => 'sq',
'amh' => 'am',
'ara' => 'ar',
'arg' => 'an',
'arm' => 'hy',
'asm' => 'as',
'ava' => 'av',
'ave' => 'ae',
'aym' => 'ay',
'aze' => 'az',
'bak' => 'ba',
'bam' => 'bm',
'baq' => 'eu',
'bel' => 'be',
'ben' => 'bn',
'bih' => 'bh',
'bis' => 'bi',
'bos' => 'bs',
'bre' => 'br',
'bul' => 'bg',
'bur' => 'my',
'cat' => 'ca',
'cha' => 'ch',
'che' => 'ce',
'chi' => 'zh',
'chu' => 'cu',
'chv' => 'cv',
'cor' => 'kw',
'cos' => 'co',
'cre' => 'cr',
'cze' => 'cs',
'dan' => 'da',
'div' => 'dv',
'dut' => 'nl',
'dzo' => 'dz',
'eng' => 'en',
'epo' => 'eo',
'est' => 'et',
'ewe' => 'ee',
'fao' => 'fo',
'fij' => 'fj',
'fin' => 'fi',
'fre' => 'fr',
'fry' => 'fy',
'ful' => 'ff',
'geo' => 'ka',
'ger' => 'de',
'gla' => 'gd',
'gle' => 'ga',
'glg' => 'gl',
'glv' => 'gv',
'gre' => 'el',
'grn' => 'gn',
'guj' => 'gu',
'hat' => 'ht',
'hau' => 'ha',
'heb' => 'he',
'her' => 'hz',
'hin' => 'hi',
'hmo' => 'ho',
'hun' => 'hu',
'ibo' => 'ig',
'ice' => 'is',
'ido' => 'io',
'iii' => 'ii',
'iku' => 'iu',
'ile' => 'ie',
'ina' => 'ia',
'ind' => 'id',
'ipk' => 'ik',
'ita' => 'it',
'jav' => 'jv',
'jpn' => 'ja',
'kal' => 'kl',
'kan' => 'kn',
'kas' => 'ks',
'kau' => 'kr',
'kaz' => 'kk',
'khm' => 'km',
'kik' => 'ki',
'kin' => 'rw',
'kir' => 'ky',
'kom' => 'kv',
'kon' => 'kg',
'kor' => 'ko',
'kua' => 'kj',
'kur' => 'ku',
'lao' => 'lo',
'lat' => 'la',
'lav' => 'lv',
'lim' => 'li',
'lin' => 'ln',
'lit' => 'lt',
'ltz' => 'lb',
'lub' => 'lu',
'lug' => 'lg',
'mac' => 'mk',
'mah' => 'mh',
'mal' => 'ml',
'mao' => 'mi',
'mar' => 'mr',
'may' => 'ms',
'mlg' => 'mg',
'mlt' => 'mt',
'mol' => 'mo',
'mon' => 'mn',
'nau' => 'na',
'nav' => 'nv',
'nbl' => 'nr',
'nde' => 'nd',
'ndo' => 'ng',
'nep' => 'ne',
'nno' => 'nn',
'nob' => 'nb',
'nor' => 'no',
'nya' => 'ny',
'oci' => 'oc',
'oji' => 'oj',
'ori' => 'or',
'orm' => 'om',
'oss' => 'os',
'pan' => 'pa',
'per' => 'fa',
'pli' => 'pi',
'pol' => 'pl',
'por' => 'pt',
'pus' => 'ps',
'que' => 'qu',
'roh' => 'rm',
'rum' => 'ro',
'run' => 'rn',
'rus' => 'ru',
'sag' => 'sg',
'san' => 'sa',
'scc' => 'sr',
'scr' => 'hr',
'sin' => 'si',
'slo' => 'sk',
'slv' => 'sl',
'sme' => 'se',
'smo' => 'sm',
'sna' => 'sn',
'snd' => 'sd',
'som' => 'so',
'sot' => 'st',
'spa' => 'es',
'srd' => 'sc',
'ssw' => 'ss',
'sun' => 'su',
'swa' => 'sw',
'swe' => 'sv',
'tah' => 'ty',
'tam' => 'ta',
'tat' => 'tt',
'tel' => 'te',
'tgk' => 'tg',
'tgl' => 'tl',
'tha' => 'th',
'tib' => 'bo',
'tir' => 'ti',
'ton' => 'to',
'tsn' => 'tn',
'tso' => 'ts',
'tuk' => 'tk',
'tur' => 'tr',
'twi' => 'tw',
'uig' => 'ug',
'ukr' => 'uk',
'urd' => 'ur',
'uzb' => 'uz',
'ven' => 've',
'vie' => 'vi',
'vol' => 'vo',
'wel' => 'cy',
'wln' => 'wa',
'wol' => 'wo',
'xho' => 'xh',
'yid' => 'yi',
'yor' => 'yo',
'zha' => 'za',
'zul' => 'zu',
'sqi' => 'sq',
'hye' => 'hy',
'eus' => 'eu',
'mya' => 'my',
'zho' => 'zh',
'ces' => 'cs',
'nld' => 'nl',
'fra' => 'fr',
'kat' => 'ka',
'deu' => 'de',
'ell' => 'el',
'isl' => 'is',
'mkd' => 'mk',
'mri' => 'mi',
'msa' => 'ms',
'fas' => 'fa',
'ron' => 'ro',
'srp' => 'sr',
'hrv' => 'hr',
'slk' => 'sk',
'bod' => 'bo',
'cym' => 'cy');
return $codes[$code];

}
 
?>
