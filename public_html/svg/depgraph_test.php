<?php

function print_graph($words,$heads,$deprels,
		     $MarkedWord=NULL,$MarkedLabel=NULL,
		     $PosX=50,$PosY=200,$flip=1,
		     $WordArg='w',$EdgeArg='e',$LabelArg='l'){

  global $boxX,$boxY1,$boxY2,$anchorPos;

  $svg = '';
  $pos=$PosX;
  $wordpos = array();
  $wordlen = array();

  // anchor position stores the horizontal anchor positions for each word
  $anchorPos = array();

  for ($i=0;$i<count($words);$i++){

    $word=$words[$i];
    // a little hack to allow larger space for upper-case letters
    $len=strlen($word)*6;
    preg_match_all('/[A-Z]/',$word,$matches);
    $len+=1.3*count($matches[0]);

    // maybe better: use unicode lowercasing?!
    /*
    if (mb_strtolower($word, 'UTF-8') != $word){
      $len=strlen($word)*6;
    } else{
      $len=strlen($word)*5;
    }
    */

    $pos+=$len;

    $color='black';
    if (isset($MarkedWord)){
      if ($MarkedWord == $i){
	$color='red';
      }
      elseif (isset($heads[$MarkedWord]) && $heads[$MarkedWord]==$i){
	$color='blue';
      }
    }
    elseif (isset($MarkedLabel)){
      if ($MarkedLabel==$i){
	$color='blue';
      }
      elseif ($heads[$MarkedLabel]==$i){
	$color='blue';
      }
    }

    // font-family = 'sans-serif'
    // font-family = 'monospace'

    // $utf8 = utf8_decode($word);
    //    $utf8 = utf8_decode(mb_strtolower($word, 'UTF-8'));

    //    $svg.="<text x='$pos' y='$PosY' textLength='$len' lengthAdjust='spacingAndGlyphs' font-size='20' fill='$color' text-anchor='middle'><a xlink:href='?$WordArg=$i'>$word</a></text>";
    $svg.="<text x='$pos' y='$PosY' font-family='sans-serif' font-size='20' fill='$color' text-anchor='middle'><a xlink:href='?$WordArg=$i'>$word</a></text>";


    //    $svg.="<text x='$pos' y='$PosY' font-size='20' fill='$color' text-anchor='middle'><a xlink:href='?$WordArg=$i'>$utf8</a></text>";

    array_push($wordpos,$pos);
    array_push($wordlen,$len);
    array_push($anchorPos,$pos);
    $pos+=$len+5;
  }

  for ($i=0;$i<count($words);$i++){
    if ($heads[$i] == NULL){ continue;}

    //    $start = $wordpos[$i];
    //    $end = $wordpos[$heads[$i]];
    $start = $wordpos[$heads[$i]];
    $end = $wordpos[$i];


    if ($end && $start>$end){
      $end+=5;
    } elseif ($end && $start<$end){
      $end-=5;
    }

    $middle = $start+($end-$start)/2;

    $height = $PosY-20*$flip-abs($start-$end)/4*$flip;
    if ($height-15 < $boxY1) { $boxY1 = $height-15; }
    if ($height > $boxY2) { 
      //$svg .= "<circle cx='$middle' cy='$height' r='20' stroke='black' stroke-width='2' fill='red'/>";
      //      $svg .= "<text x='10' y='$height' fill='black'>$height</text>";
      $boxY2 = $height; 
      //      echo "---".$height;
    }

    $StartPosY = $PosY-20*$flip;
    $EndPosY = $PosY-25*$flip;

    $color='black';
    if (isset($MarkedWord) && $MarkedWord == $i){
      $color='blue';
    }
    elseif (isset($MarkedLabel) && $MarkedLabel == $i){
      $color='blue';
    }

    $svg.="<a xlink:href='?$EdgeArg=$i'>";  
    $svg.="<path style='fill:none;stroke:$color;' d='M$start $StartPosY ";
    $svg.=" C$start $StartPosY $start $height $middle $height ";
    $svg.=" C$middle $height $end $height $end $EndPosY' ";
    $svg.='marker-end="url(#arrow)"/>';
    // $svg.='marker-start="url(#arrow)"/>';
    $svg.="</a>";

    $color='blue';
    if (isset($MarkedLabel) && $MarkedLabel == $i){
      $color='red';
    }
    $svg.="\n<text x='$middle' y='";
    $svg.=$height-4;
    $svg.="' font-size='12' fill='$color' text-anchor='middle'>";
    $svg.="<a xlink:href='?$LabelArg=$i'>";
    $svg.=$deprels[$i];
    $svg.="</a></text>\n";
  }
  if ($pos > $boxX) { $boxX = $pos; }
  return $svg;
}

function show_labels($i,$OldLabel,$file='deprels.txt',
		     $EdgeArg='e',$LabelArg='nl'){
  $html = '';
  $deprels = file($file);
  //  $html.="<a href='?$EdgeArg=$i'>delete selected relation</a>";
  foreach ($deprels as $dep){
    $dep = trim($dep);
    if ($OldLabel == $dep){ $html.="$dep<br/>"; }
    else {
      $str=urlencode($dep);
      $html.="<a href='?$LabelArg=$str'>$dep</a><br/>";
    }
  }
  return $html;
}


function show_labels_svg($i,$OldLabel,$file='deprels.txt',
		     $EdgeArg='e',$LabelArg='nl',
		     $PosX=10,$PosY=40){
  $svg = '';
  $deprels = file($file);

   $svg.="<text x='$PosX' y='$PosY' font-size='16' fill='black'><a xlink:href='?$EdgeArg=$i'>delete selected relation</a></text>";
   $PosY+=20;
   $svg.="<text x='$PosX' y='$PosY' font-size='16' fill='black'>set new relation type:</text>";


  $PosY+=20;
  foreach ($deprels as $dep){
    $dep = trim($dep);
    if ($OldLabel == $dep){
      $svg.="<text x='$PosX' y='$PosY' font-size='12' fill='gray'>$dep</text>";
    }
    else {
      $str=urlencode($dep);
      $svg.="<text x='$PosX' y='$PosY' font-size='12' fill='black'><a xlink:href='?$LabelArg=$str'>$dep</a></text>";
    }
    $PosY+=10;
  }
  return $svg;
}

?>