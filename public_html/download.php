<?php

$extension = array('.gz','.tar','.ces','.xml','.txt','.srt3','.zip','.model','.mco','.dic');

if ($file = check_file()){
//     define("_BBC_PAGE_NAME", "OPUS -> $file");
//     define("_BBCLONE_DIR", "/storage/tiedeman/public_html/bbclone/");
//     define("COUNTER", _BBCLONE_DIR."mark_page.php");  
//     if (is_readable(COUNTER)) include_once(COUNTER);  
    $logfile = 'downloads.txt';
    $user = get_user_id();

    $fh = fopen($logfile, 'a') or die("can't open file $logfile");
    $string = $file."\t";
    $string .= date("Y/m/d H:i:s");
    $string .= "\t".$user."\n";
    fwrite($fh,$string);
    fclose($fh);

    header("Location: ".$file);
} else{
    header("Location: http://opus.lingfil.uu.se");
}


function check_file(){
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

        if (file_exists($file)){
            // check file extension
            if (extOK($file)){
               return $file;
            }
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
