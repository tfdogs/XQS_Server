<?php
$httphead = explode(" ",$buf);
$filename = substr($httphead[1],1);
$files = explode("/",$filename);
$last =  substr($filename,-1);
$base = "";
foreach ($files as $values){
    $base = $base.$values;
}
echo $base;
if(file_exists("./web_root/$filename") or $last == "/"){
    if($filename == null or $last == "/"){
        $i = 0;
        foreach ($index_files as $value){
            if(file_exists("./web_root/$base/$value")){
            $msg = "<!DOCTYPE html>".file_get_contents("./web_root/$base/$value");
            $i = $i + 1;
            }
        }
        if($i == 0){
            $msg = "<!DOCTYPE html><h2>Http status 403 - Forbidden.</h2><hr><p>Server rejected your requst for '$filename'.<br>XQS Server 0.1.0";
        }
    }else{
        $msg = file_get_contents("./web_root/$filename");
    }
}else{
    $msg = "<!DOCTYPE html><h2>Http status 404 - Not found.</h2><hr><p>File '$filename'could not found in the server.<br>XQS Server 0.1.0";
}