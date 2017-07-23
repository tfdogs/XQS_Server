<?php
echo "XQS Server\n";
$info = parse_ini_file("XQS.ini",true);
$info_detail = array();
foreach ($info as $value){
    foreach ($value as $key=>$values){
        $info_detail[$key] = $values;
    }
}
echo "Server name:".$info_detail["host"]."\n";
echo "Server port:".$info_detail["port"]."\r\n";