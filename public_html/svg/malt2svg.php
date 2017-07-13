<?php

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


$file = '1988en.tag_parsed.xml';
$deprelfile = 'deprels.sv';

include_once('depgraph.php');
include_once('conll.php');

if (!isset($_SESSION['words']) || 
    isset($_REQUEST['next']) || isset($_REQUEST['prev'])){
  $prev = isset($_REQUEST['prev']);
  read_deprels($file,
	       $_SESSION['words'],
	       $_SESSION['heads'],
	       $_SESSION['deprels'],
	       $_SESSION['FILEPOS'],$prev);
  unset($_SESSION['label']);
  unset($_SESSION['word']);
  unset($_SESSION['undo']);
  unset($_SESSION['redo']);
  unset($_SESSION['SVGWIDTH']);
  unset($_SESSION['SVGHEIGHT']);
}

if (!isset($_SESSION['undo'])){ $_SESSION['undo'] = array(); }
if (!isset($_SESSION['redo'])){ $_SESSION['redo'] = array(); }


$svg='';
$labels='';


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


if (isset($_REQUEST['w'])){
  unset($_SESSION['label']);
  if (isset($_SESSION['word']) && $_SESSION['word'] === $_REQUEST['w']){
    unset($_SESSION['word']);
  }
  else{
    if (isset($_SESSION['word'])){
      if ($_SESSION['heads'][$_SESSION['word']] != $_REQUEST['w']){
	if ($_SESSION['heads'][$_REQUEST['w']] != $_SESSION['word']){

	  $k1 = 'heads => '.$_SESSION['word'];
	  $v1 = $_SESSION['heads'][$_SESSION['word']];
	  $k2 = 'deprels => '.$_SESSION['word'];
	  $v2 = $_SESSION['deprels'][$_SESSION[$l.'word']];
	  array_push($_SESSION['undo'],"$k1 => $v1 && $k2 => $v2");

	  $_SESSION['heads'][$_SESSION['word']] = $_REQUEST['w'];
	  $_SESSION['deprels'][$_SESSION['word']] = 'unknown';
	  $_REQUEST['l']=$_SESSION['word'];
	  unset($_SESSION['word']);
	}
      }
    }
    // root must not have any head!
    elseif ($_REQUEST['w'] != 0){
      $_SESSION['word'] = $_REQUEST['w'];
    }
  }
}

// remove edge

if (isset($_REQUEST['re'])){
  $k1 = 'heads => '.$_REQUEST['re'];
  $v1 = $_SESSION['heads'][$_REQUEST['re']];
  $k2 = 'deprels => '.$_REQUEST['re'];
  $v2 = $_SESSION['deprels'][$_REQUEST['re']];
  array_push($_SESSION['undo'],"$k1 => $v1 && $k2 => $v2");
  $_SESSION['heads'][$_REQUEST['re']] = NULL;
  $_SESSION['deprels'][$_REQUEST['re']] = NULL;
  unset($_SESSION['label']);
}

// new edge label

if (isset($_REQUEST['nl'])){
  $k1 = 'deprels => '.$_SESSION['label'];
  $v1 = $_SESSION['deprels'][$_SESSION['label']];
  array_push($_SESSION['undo'],"$k1 => $v1");
  $_SESSION['deprels'][$_SESSION['label']] = $_REQUEST['nl'];
}

// label selected

if (isset($_REQUEST['l'])){
  unset($_SESSION['word']);
  if (isset($_SESSION['label']) && 
      $_SESSION['label'] === $_REQUEST['l']){
    unset($_SESSION['label']);
  }
  else { $_SESSION['label'] = $_REQUEST['l']; }
}

if (isset($_SESSION['label'])){
  $labels="<a href='?${l}re=".$_SESSION['label']."'>remove</a><br/>";
  $labels.= '<b>new label:</b><br/>';
  $labels.= show_labels($_REQUEST['l'],
			$_SESSION['deprels'][$_SESSION['label']],
			$deprelfile,'e','nl');
}

$boxX=1200;  // view box width
$boxY1=0;   // view box start Y
$boxY2=600; // view box end Y

// print dependency graph

$svg.=print_graph($_SESSION['words'],$_SESSION['heads'],
		  $_SESSION['deprels'],
		  $_SESSION['word'],$_SESSION['label']);


$sizeX = $boxX;
$sizeY = $boxY2-$boxY1;

//////////////////////////////////////////////////////////////////////

echo '<div class="links"><p>';
echo "<a href='?reset'>start</a>\n";
if (isset($_SESSION['FILEPOS']) && (count($_SESSION['FILEPOS'])>1)){
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
echo '</p></div>';

//////////////////////////////////////////////////////////////////////

$width = '100';
$height = '100';
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


echo "<svg width='$width%' height='$height%' viewBox='0 $boxY1 $boxX $boxY2'";
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