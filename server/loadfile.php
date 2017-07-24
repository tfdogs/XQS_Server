<?php
$httphead = explode(" ",$buf);
$filename = substr($httphead[1],1);
if(file_exists("./web_root/$filename")){
    $msg = file_get_contents("./web_root/$filename");
}else{
    $msg = "<h2>Http status:404 - Not found.</h2><hr><p>File '$filename'could not found in the server.<br>XQS Server 0.1.0";
}
