<?php

/*

An example script that shows how to visualize a parallel treebank with 
dependency markup

 - reads two files ni CONLL format
 - assumes that sentences are aligned one-by-one
 - allows to edit trees & labels
 - allows to add word aligments

TODO:
 - check for cycles and connectiveness when changing the graph
 - optionally: restrict to projective trees
 - read word alignments from file (or database)
 - save changes

LAYOUT:
 - optimize arc-height
 - ....

 */

session_start();
if (isset($_REQUEST['reset'])){
    session_destroy();
    session_start();
}

header('Content-type: text/xml');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Parallel Treebanks</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="deprels.css" />
</head>
<body>
<?php

$Sfile = '12004V_da.tag_parsed.xml';
$Tfile = '12004V_de.tag_parsed.xml';


$lang = array('S' => 'da', 'T' => 'de');

include_once('depgraph.php');
include_once('conll.php');
include_once('links.php');

//  read the dependency graphs

if (!isset($_SESSION['Swords']) || 
    isset($_REQUEST['next']) || isset($_REQUEST['prev'])){
  $prev = isset($_REQUEST['prev']);
  read_deprels($Sfile,
	       $_SESSION['Swords'],
	       $_SESSION['Sheads'],
	       $_SESSION['Sdeprels'],
	       $_SESSION['SFILEPOS'],$prev);
  unset($_SESSION['Slabel']);
  unset($_SESSION['Sword']);
  unset($_SESSION['undo']);
  unset($_SESSION['redo']);
  unset($_SESSION['links']);
  unset($_SESSION['SVGWIDTH']);
  unset($_SESSION['SVGHEIGHT']);
}

if (!isset($_SESSION['Twords']) || 
    isset($_REQUEST['next']) || isset($_REQUEST['prev'])){
  $prev = isset($_REQUEST['prev']);
  read_deprels($Tfile,
	       $_SESSION['Twords'],
	       $_SESSION['Theads'],
	       $_SESSION['Tdeprels'],
	       $_SESSION['TFILEPOS'],$prev);
  unset($_SESSION['Tlabel']);
  unset($_SESSION['Tword']);
}


$svg='';
$labels='';


if (!isset($_SESSION['undo'])){ $_SESSION['undo'] = array(); }
if (!isset($_SESSION['redo'])){ $_SESSION['redo'] = array(); }


// check parameters for source and target graphs



if (isset($_REQUEST['undo'])){
  $undo = array_pop($_SESSION['undo']);
  $changes = explode(' && ',$undo);
}
if (isset($_REQUEST['redo'])){
  $redo = array_pop($_SESSION['redo']);
  $changes = explode(' && ',$redo);
}

$changed=array();
foreach ($changes as $change){
  $parts = explode(' => ',$change);
  $key=$parts[0].' => '.$parts[1];
  $val=$_SESSION[$parts[0]][$parts[1]];
  array_push($changed,"$key => $val");
  $_SESSION[$parts[0]][$parts[1]]=$parts[2];
}
$redo=implode(' && ',$changed);
if (isset($_REQUEST['undo'])){
  array_push($_SESSION['redo'],$redo);
} elseif (isset($_REQUEST['redo'])){
  array_push($_SESSION['undo'],$redo);
}


// word aligments

if (!isset($_SESSION['links'])){
  $_SESSION['links'] = array();
 }

// remove a link
if (isset($_REQUEST['rl'])){
  if (isset($_SESSION['links'][$_REQUEST['rl']])){
    unset($_SESSION['links'][$_REQUEST['rl']]);
  }
 }

// add / remove links (selected words on both sides)
if (isset($_REQUEST['Sw'])){
  if (isset($_SESSION['Tword'])){
    if (isset($_SESSION['links'][$_REQUEST['Sw'].'-'.$_SESSION['Tword']])){
      unset($_SESSION['links'][$_REQUEST['Sw'].'-'.$_SESSION['Tword']]);
    } else {
      $_SESSION['links'][$_REQUEST['Sw'].'-'.$_SESSION['Tword']]=1;
    }
    unset($_REQUEST['Sw']);
    unset($_SESSION['Tword']);
  }
 }
elseif (isset($_REQUEST['Tw'])){
  if (isset($_SESSION['Sword'])){
    if (isset($_SESSION['links'][$_SESSION['Sword'].'-'.$_REQUEST['Tw']])){
      unset($_SESSION['links'][$_SESSION['Sword'].'-'.$_REQUEST['Tw']]);
    } else {
      $_SESSION['links'][$_SESSION['Sword'].'-'.$_REQUEST['Tw']]=1;
    }
    unset($_REQUEST['Tw']);
    unset($_SESSION['Sword']);
  }
 }



$prefix = array('S','T');    // add prefix for source/target
foreach ($prefix as $l){     // check arguments for both

  // word selected!

  if (isset($_REQUEST[$l.'w'])){
    unset($_SESSION[$l.'label']);
    if (isset($_SESSION[$l.'word']) && 
	$_SESSION[$l.'word'] === $_REQUEST[$l.'w']){
      unset($_SESSION[$l.'word']);
    }
    else{
      if (isset($_SESSION[$l.'word'])){
	if ($_SESSION[$l.'heads'][$_SESSION[$l.'word']]!=$_REQUEST[$l.'w']){
	  if ($_SESSION[$l.'heads'][$_REQUEST[$l.'w']]!=$_SESSION[$l.'word']){

	    // move/create an arc
	    //
	    // TODO: check for cycles and connectiveness!!!!
	    // OPTION: allow only projective trees

	    $k1 = $l.'heads => '.$_SESSION[$l.'word'];
	    $v1 = $_SESSION[$l.'heads'][$_SESSION[$l.'word']];
	    $k2 = $l.'deprels => '.$_SESSION[$l.'word'];
	    $v2 = $_SESSION[$l.'deprels'][$_SESSION[$l.'word']];
	    array_push($_SESSION['undo'],"$k1 => $v1 && $k2 => $v2");

	    $_SESSION[$l.'heads'][$_SESSION[$l.'word']] = $_REQUEST[$l.'w'];
	    $_SESSION[$l.'deprels'][$_SESSION[$l.'word']] = 'unknown';
	    $_REQUEST[$l.'l']=$_SESSION[$l.'word'];
	    unset($_SESSION[$l.'word']);
	  }
	}
      }
      // root must not have any head!
      elseif ($_REQUEST[$l.'w'] != 0){
	$_SESSION[$l.'word'] = $_REQUEST[$l.'w'];
      }
    }
  }


  // remove edge

  if (isset($_REQUEST[$l.'re'])){
      $k1 = $l.'heads => '.$_REQUEST[$l.'re'];
      $v1 = $_SESSION[$l.'heads'][$_REQUEST[$l.'re']];
      $k2 = $l.'deprels => '.$_REQUEST[$l.'re'];
      $v2 = $_SESSION[$l.'deprels'][$_REQUEST[$l.'re']];
      array_push($_SESSION['undo'],"$k1 => $v1 && $k2 => $v2");
      $_SESSION[$l.'heads'][$_REQUEST[$l.'re']] = NULL;
      $_SESSION[$l.'deprels'][$_REQUEST[$l.'re']] = NULL;
      unset($_SESSION[$l.'label']);
  }

  // new edge label

  if (isset($_REQUEST[$l.'nl'])){
    $k1 = $l.'deprels => '.$_SESSION[$l.'label'];
    $v1 = $_SESSION[$l.'deprels'][$_SESSION[$l.'label']];
    array_push($_SESSION['undo'],"$k1 => $v1");
    $_SESSION[$l.'deprels'][$_SESSION[$l.'label']] = $_REQUEST[$l.'nl'];
    $labels="<a href='?${l}re=".$_SESSION[$l.'label']."'>remove</a><br/><br/>";
    $labels.= '<b>new label:</b><br/>';
    $labels.=show_labels($_SESSION[$l.'label'],
		      $_SESSION[$l.'deprels'][$_SESSION[$l.'label']],
		      'deprels.'.$lang[$l],$l.'e',$l.'nl');
  }

  // label selected

  if (isset($_REQUEST[$l.'l'])){
    unset($_SESSION[$l.'word']);
    if (isset($_SESSION[$l.'label']) && 
	$_SESSION[$l.'label'] === $_REQUEST[$l.'l']){
      unset($_SESSION[$l.'label']);
    }
    else {
      unset($_SESSION['Slabel']);    // unset labels on both sides!
      unset($_SESSION['Tlabel']);
      $_SESSION[$l.'label'] = $_REQUEST[$l.'l']; 
    }
  }

  if (isset($_SESSION[$l.'label'])){
    $labels="<a href='?${l}re=".$_SESSION[$l.'label']."'>remove</a><br/>";
    $labels.= '<b>new label:</b><br/>';
    $labels.= show_labels($_REQUEST[$l.'l'],
			  $_SESSION[$l.'deprels'][$_SESSION[$l.'label']],
			  'deprels.'.$lang[$l],$l.'e',$l.'nl');
  }
}


// global variables for the boundary box:
//
// boxX, boxY1 boxY2

$boxX=1200;  // view box width
$boxY1=0;   // view box start Y
$boxY2=600; // view box end Y

// finally: print dependency graphs

$svg .= print_graph($_SESSION['Swords'],
		    $_SESSION['Sheads'],
		    $_SESSION['Sdeprels'],
		    $_SESSION['Sword'],
		    $_SESSION['Slabel'],
		    0,200,1,'Sw','Se','Sl');
$SanchorX = $anchorPos;

// print the target language graph upside-down (flip=-1)

$svg .= print_graph($_SESSION['Twords'],
		    $_SESSION['Theads'],
		    $_SESSION['Tdeprels'],
		    $_SESSION['Tword'],
		    $_SESSION['Tlabel'],
		    0,280,-1,'Tw','Te','Tl');
$TanchorX = $anchorPos;


// print word alignments

// $links=array('1-1','0-2');
if (isset($_SESSION['links'])){
  $svg .= print_links($_SESSION['links'],$SanchorX,$TanchorX,210,260);
 }

$sizeX = $boxX;
$sizeY = $boxY2-$boxY1;


//////////////////////////////////////////////////////////////////////

echo '<div class="links"><p>';
echo "<a href='?reset'>start</a>\n";
if (isset($_SESSION['SFILEPOS']) && (count($_SESSION['SFILEPOS'])>1)){
    echo " / <a href='?prev'>prev</a>\n";
}
else{ echo " / prev"; }
echo " / <a href='?next'>next</a>\n";
if (isset($_SESSION['undo']) && (count($_SESSION['undo'])>0)){
    echo " / <a href='?undo'>undo</a>";
}
if (isset($_SESSION['redo']) && (count($_SESSION['redo'])>0)){
    echo " / <a href='?redo'>redo</a>";
}
echo " / <a href='?zoomin'>zoom in</a>\n";
echo " / <a href='?zoomout'>zoom out</a>\n";
/*
if ($sizeX>1600){ echo " / <a href='?zoomin'>zoom in</a>\n"; }
if (isset($_SESSION['SVGWIDTH']) && $_SESSION['SVGWIDTH']>100){
  echo " / <a href='?zoomout'>zoom out</a>\n";
}
*/
echo '</p></div>';

//////////////////////////////////////////////////////////////////////

$width = '100';
$height = '80';
if (isset($_SESSION['SVGWIDTH'])){ $width = $_SESSION['SVGWIDTH']; }
if (isset($_SESSION['SVGHEIGHT'])){ $height = $_SESSION['SVGHEIGHT']; }
if (isset($_REQUEST['zoomin'])){
  $width = 1.5*$width;
  $height = 1.5*$height;
}
if (isset($_REQUEST['zoomout'])){
  $width = $width/1.5;
  $height = $height/1.5;
}
$_SESSION['SVGWIDTH'] = $width;
$_SESSION['SVGHEIGHT'] = $height;


echo '<div class="labels">';
echo $labels;
echo '</div><div class="graph">';

echo "<svg width='$width%' height='$height%' viewBox='0 $boxY1 $sizeX $sizeY'";
// echo "<svg width='$width%' height='$height%' viewBox='0 $boxY1 $sizeX $sizeY'";
// echo "<svg width='$sizeX' height='$sizeY' viewBox='0 $boxY1 $boxX $boxY2'";
echo '
     xmlns="http://www.w3.org/2000/svg" 
     xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <marker id="arrow" viewBox="0 0 10 10" refX="1" refY="5" 
	    markerUnits="strokeWidth" orient="auto"
	    markerWidth="10" markerHeight="8">
      <polyline points="0,0 10,5 0,10 1,5" fill="black" />
    </marker>
  </defs>
';
echo $svg;
echo '</svg></div>';

?>

</body>
</html>