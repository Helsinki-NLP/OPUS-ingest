<?php

$opuspub = "/home/opus/OPUS/html";


$key = $corpus.'/'.$src.'-'.$trg;
$dbh = dba_open( $opuspub."/Info.db", "r", "db4") or die('');

for ($k = dba_firstkey($dbh); $k != false; $k = dba_nextkey($dbh)) {
  $resource = dba_fetch($k, $dbh);
  $info = explode('+',$resource);

  $nrBitexts++;
  list($corpus,$lang) = explode('/',$k);

  // count languages
  list($src,$trg) = explode('-',$lang);
  list($s) = explode('_',$src);
  $langs[$s]=1;
  list($t) = explode('_',$trg);
  $langs[$t]=1;

  // count language pairs
  $bitexts["$s-$t"]++;


  foreach ($info as $res){
    list($format,$descr) = explode('=',$res);
    $parts = explode(':',$descr);

    if ($format == 'xces'){
      $nrDocs += $parts[3];
      $nrLinks += $parts[4];
      $nrSrcTok += $parts[5];
      $nrTrgTok += $parts[6];
      $sizeXCES[$lang] += $parts[5] + $parts[6];
	$nrXCESLinks[$lang] += $parts[4];
    }
    elseif ($format == 'tmx'){
      $nrTMXLinks += $parts[1];
      $nrTMXSrcTok += $parts[2];
      $nrTMXTrgTok += $parts[3];
      $sizeTMX[$lang] += $parts[2] + $parts[3];
	$nrTMXLinks2[$lang] += $parts[1];
    }
    elseif ($format == 'moses'){
      $nrTXTLinks += $parts[1];
      $nrTXTSrcTok += $parts[2];
      $nrTXTTrgTok += $parts[3];
      $sizeTXT[$lang] += $parts[2] + $parts[3];
    }
  }
 }

dba_close();

echo "nr languages: ".count($langs).'<br />';
echo "nr language pairs: ".count($bitexts).'<br />';
echo "nr bitexts: ".$nrBitexts.'<br />';
echo "nr documents: ".pretty_number($nrDocs,3).'<br /><br />';

echo "nr sentence alignment: ".pretty_number($nrLinks,3).'<br />';
echo "nr source language tokens: ".pretty_number($nrSrcTok,3).'<br />';
echo "nr target language tokens: ".pretty_number($nrTrgTok,3).'<br /><br />';

echo "nr sentence alignments (Moses): ".pretty_number($nrTXTLinks,3).'<br />';
echo "nr source language tokens (Moses): ".pretty_number($nrTXTSrcTok,3).'<br />';
echo "nr target language tokens (Moses): ".pretty_number($nrTXTTrgTok,3).'<br /><br />';

echo "nr translation units (TMX): ".pretty_number($nrTMXLinks,3).'<br />';
echo "nr source language tokens (TMX): ".pretty_number($nrTMXSrcTok,3).'<br />';
echo "nr target language tokens (TMX): ".pretty_number($nrTMXTrgTok,3).'<br /><br />';




arsort($sizeXCES,SORT_NUMERIC);
arsort($sizeTMX,SORT_NUMERIC);
arsort($sizeTXT,SORT_NUMERIC);

echo '<table border="5"><tr>';

echo '<th>XCES</th><th>TMX</th><th>Moses</th></tr><tr>';

echo '<td align="right" valign="top">';
$max = 20;
$count = 0;
$minsize = 100000000;

foreach ($sizeXCES as $lang => $size){
  $count++;
  //  if ($count>$max){break;}
  if ($size<$minsize){break;}
  echo $lang.': '.pretty_number($size,2).' ('.$count.' , '.pretty_number($nrXCESLinks[$lang]).' links)&nbsp;&nbsp;<br />';
}
echo '</td>';

echo '<td align="right" valign="top">';
$count = 0;
foreach ($sizeTMX as $lang => $size){
  $count++;
  // if ($count>$max){break;}
  if ($size<$minsize){break;}
  echo $lang.': '.pretty_number($size,2).' ('.$count.' , '.pretty_number($nrTMXLinks2[$lang]).' links)&nbsp;&nbsp;<br />';
}
echo '</td>';

echo '<td align="right" valign="top">';
$count = 0;
foreach ($sizeTXT as $lang => $size){
  $count++;
  if ($size<$minsize){break;}
  echo $lang.': '.pretty_number($size,2).' ('.$count.')&nbsp;&nbsp;<br />';
}
echo '</td>';

echo '</tr></table>';

echo $count.'<hr/>';

/*
$count = 0;
$total = 0;
foreach ($sizeTXT as $lang => $size){
  if ($size<1000000){$count++;}
  $total++;
}

echo "below 1 million: $count ($total) ";
echo $count/$total;
*/


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


?>
