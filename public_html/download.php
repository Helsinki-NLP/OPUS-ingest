<?php

// file extensions that we allow to download
$extension = array('.gz','.tar','.ces','.xml','.txt','.srt3','.zip','.model','.mco','.dic');

if ($file = validate_filename()){
    $logfile = 'downloads.txt';
    $user = get_user_id();
    $fh = fopen($logfile, 'a') or die("can't open file $logfile");
    $string = $file."\t";
    $string .= date("Y/m/d H:i:s");
    $string .= "\t".$user."\n";
    fwrite($fh,$string);
    fclose($fh);

    // check if the file exists on the local server
    if (file_exists($file)){
      header("Location: ".$file);
    }
    elseif (file_exists("/media/download/".$file)){
      header("Location: /download/".$file);
    }
    // otherwise: download from the old OPUS server
    // TODO: change this to the new download location!
    else{
      $file = old2new($file);
      // echo $file;return;
      header("Location: https://object.pouta.csc.fi/OPUS-".$file);
    }

// not a valid filename? go back to home page
// TODO: show some kind of error message? Error page?
} else{
    header("Location: /index.php");
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
   if (count($parts) == 4){
     if ($parts[2] == 'mono'){
       $ext = explode('.',$parts[3]);
       if ($ext[1] == 'raw'){
         $file = implode( '/', array($parts[0],$parts[1],'mono',$ext[2].'.txt.gz') );
       } elseif ($ext[1] != 'txt' && $ext[1] != 'tok'){
         $file = implode( '/', array($parts[0],$parts[1],'mono',$ext[1].'.tok.gz') );
       }
     }
   }
   return $file;
}


// validate filenames

function validate_filename(){
    global $downdir;
    if (isset($_REQUEST["f"])){
        $file = $_REQUEST["f"];
        $dirname = dirname($file);
        $basename = basename($file);

        // don't allow '.' in dirname
        if ($dirname !== '.' && strpos('.',$dirname) !== FALSE){return false;}
        // don't allow '/' in dirname
        if (strpos('/',$dirname) !== FALSE){return false;}
        // don't allow filenames that start with '.'
        if (strpos('.',$basename) === 0){return false;}

	// check file extension
        if (extOK($file)){
            return $file;
        }
    }
    return false;
}


function extOk($file) {
    global $extension;

    $ext = strtolower(strrchr($file,"."));

    if ($ext) {
      foreach ($extension as $key) {
        if($ext == $key) {
          return true;
        }
      }
    }
    return false;
};

function get_user_id(){
    //    $user = implode(':',array($_SERVER['REMOTE_ADDR'],
    //                            $_SERVER['REMOTE_HOST'],
    //                            $_SERVER['REMOTE_PORT']));
    //    $user = implode(':',array($_SERVER['REMOTE_ADDR'],
    //                            $_SERVER['REMOTE_HOST']));
    $remote_host = '';
    if (array_key_exists('REMOTE_HOST',$_SERVER)){
        $remote_host = $_SERVER['REMOTE_HOST'];
    }
    $user = implode(':',array(getip(),$remote_host));
    //  echo $user;
    //  dump_db('user');
    return $user;
}

// from http://www.teachmejoomla.net/code/php/remote-ip-detection-with-php.html

function validip($ip) {
    if (!empty($ip) && ip2long($ip)!=-1) {
        $reserved_ips = array (
            array('0.0.0.0','2.255.255.255'),
            array('10.0.0.0','10.255.255.255'),
            array('127.0.0.0','127.255.255.255'),
            array('169.254.0.0','169.254.255.255'),
            array('172.16.0.0','172.31.255.255'),
            array('192.0.2.0','192.0.2.255'),
            array('192.168.0.0','192.168.255.255'),
            array('255.255.255.0','255.255.255.255')
        );

        foreach ($reserved_ips as $r) {
            $min = ip2long($r[0]);
            $max = ip2long($r[1]);
            if ((ip2long($ip) >= $min) && (ip2long($ip) <= $max))
                return false;
        }
        return true;
    } else {
         return false;
    }
}


function getip() {
    if (array_key_exists("HTTP_CLIENT_IP",$_SERVER)){
        if (validip($_SERVER["HTTP_CLIENT_IP"])) {
            return $_SERVER["HTTP_CLIENT_IP"];
        }
    }
    if (array_key_exists("HTTP_X_FORWARDED_FOR",$_SERVER)){
        foreach (explode(",",$_SERVER["HTTP_X_FORWARDED_FOR"]) as $ip) {
            if (validip(trim($ip))) {
                return $ip;
            }
        }
    }
    if (
           array_key_exists("HTTP_X_FORWARDED",$_SERVER)
        && validip($_SERVER["HTTP_X_FORWARDED"])
    ) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } elseif (
           array_key_exists("HTTP_FORWARDED_FOR",$_SERVER)
        && validip($_SERVER["HTTP_FORWARDED_FOR"])
    ) {
        return $_SERVER["HTTP_FORWARDED_FOR"];
    } elseif (
           array_key_exists("HTTP_FORWARDED",$_SERVER) 
        && validip($_SERVER["HTTP_FORWARDED"])
    ) {
        return $_SERVER["HTTP_FORWARDED"];
    } elseif (
           array_key_exists("HTTP_X_FORWARDED",$_SERVER) 
        && validip($_SERVER["HTTP_X_FORWARDED"])
    ) {
        return $_SERVER["HTTP_X_FORWARDED"];
    } else {
        return $_SERVER["REMOTE_ADDR"];
    }
}


function is_banned($uid){
    return false;
}
