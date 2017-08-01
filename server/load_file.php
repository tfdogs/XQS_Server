<?php
$httphead = explode(" ",$buf);
$filename = substr($httphead[1],1);
$files = explode("/",$filename);
//echo substr($filename,0,stripos($filename,"?"));
$base = "";
$out = array();
$msg = null;
foreach ($files as $values){
    $base = $base.$values;
}
if(file_exists($info_detail["base"]."$filename") or substr($filename,-1) == "/"){
    if($filename == null or substr($filename,-1) == "/"){
        $i = 0;
        foreach ($index_files as $value){
            if(file_exists($info_detail["base"]."$base/$value")){
                if(strstr($value,".php") and $info_detail["php_open"] == "open"){
                    $msg = null;
                    exec($info_detail["php_root"]."php-cgi.exe ".$info_detail["base"].$filename."index.php",$out, $status);
                    foreach ($out as $v){
                        $msg = $msg.$v;
                    }
                }else{
                    $msg = "<!DOCTYPE html>".file_get_contents($info_detail["base"]."$base/$value");
                    }
                $i = $i + 1;
                }
            echo date("Y-m-d l H:i:s")." [200] $value \n";
            if($i != 0){
                break;
            }
        }
        if($i == 0){
            $msg = "<!DOCTYPE html><h2>Http status 403 - Forbidden.</h2><hr><p>Server rejected your requst for '$filename'.
                   <br>XQS Server 0.1.0 run by PHP ".PHP_VERSION;
            echo date("Y-m-d l H:i:s")." [403] $filename \n";
        }
    }else{

        if(strstr($filename,".php")  and $info_detail["php_open"] == "open"){
            $msg = "1";
            exec($info_detail["php_root"]."php-cgi.exe ".$info_detail["base"].$filename,$out, $status);
            foreach ($out as $value){
                $msg = $msg.$value;
            }
        }else{
            $msg = file_get_contents($info_detail["base"]."$filename");
       }
        echo date("Y-m-d l H:i:s")." [200] $filename \n";
    }

}else{
    $msg = "<!DOCTYPE html><h2>Http status 404 - Not found.</h2><hr><p>'$filename'could not found in the server.
            <br>XQS Server 0.1.0 run by PHP ".PHP_VERSION;
    echo date("Y-m-d l H:i:s")." [404] $filename \n";
}