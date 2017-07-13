<?php


function read_sentence($fp,&$lines){
  while ($line = fgets($fp)){
    $line = trim($line);
    if (!strlen($line)){
      return count($lines);
    }
    array_push($lines,$line);
  }
  return false;
}

function read_next($file,&$fpos,&$lines){
  // opens a file and read some data
  $fp = fopen($file, "r");
  if (!isset($fpos)){
    $fpos = array();
  }
  elseif ($id=count($fpos)){
    $id--;
    fseek($fp,$fpos[$id]);
  }

  if (read_sentence($fp,$lines)){
    array_push($fpos,ftell($fp));
  }
  fclose($fp);
}

function read_prev($file,&$fpos,&$lines){
  // opens a file and read some data
  $fp = fopen($file, "r");
  if (!isset($fpos)){
    $fpos = array();
  }
  elseif (count($fpos)>2){
    array_pop($fpos);
    array_pop($fpos);
    $id=count($fpos)-1;
    fseek($fp,$fpos[$id]);
  }
  elseif (count($fpos)>0){
    $fpos = array();
  }
  if (read_sentence($fp,$lines)){
    array_push($fpos,ftell($fp));
  }
  fclose($fp);
}




function read_deprels($file,&$words,&$heads,&$deprels,
		      &$fpos,$prev){

  $lines = array();
  if ($prev){
    read_prev($file,$fpos,$lines);
  } else {
    read_next($file,$fpos,$lines);
  }
  //  $lines = file($file);

  $words = array('-root-');
  $heads = array(NULL);
  $deprels = array(NULL);

  foreach ($lines as $line){
    $parts = explode("\t",$line);
    $id = count($words);
    //    $head = $parts[6]-1;
    $head = $parts[6];
    array_push($words,$parts[1]);
    array_push($heads,$head);
    array_push($deprels,$parts[7]);
  }
}



function read_deprels_old($file,&$words,&$heads,&$deprels){
  $lines = file($file);

  $words = array('-root-');
  $heads = array(NULL);
  $deprels = array(NULL);


  foreach ($lines as $line){
    $parts = explode("\t",$line);
    $id = count($words);
    //    $head = $parts[6]-1;
    $head = $parts[6];
    array_push($words,$parts[1]);
    array_push($heads,$head);
    array_push($deprels,$parts[7]);
  }
}



?>