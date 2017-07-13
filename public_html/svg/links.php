<?php

function print_links($links,$SPositions,$TPositions,$SY=210,$TY=260,$arg='rl'){

  $svg = '';
  foreach ($links as $link => $conf){
    list($src,$trg) = explode('-',$link);
    if (array_key_exists($src,$SPositions)){
      if (array_key_exists($trg,$TPositions)){
	$x1 = $SPositions[$src];
	$x2 = $TPositions[$trg];
	$svg .="<a xlink:href='?$arg=$src-$trg'>";  
	$svg .= "<line x1='$x1' y1='$SY' x2='$x2' y2='$TY' style='stroke:black;stroke-width:1' />";
	$svg .='</a>';
      }
    }
  }
  return $svg;
  }



?>