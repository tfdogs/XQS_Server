<?php
$info_detail = array();
foreach (parse_ini_file("XQS.ini",true) as $value){
    foreach ($value as $key=>$values){
        $info_detail[$key] = $values;
    }
}
echo "Server name:".$info_detail["host"]."\n";
echo "Server port:".$info_detail["port"]."\n";
echo "Press 'Ctrl+C' or 'X' button can shut down the server.\n";