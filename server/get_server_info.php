<?php
/*Get ini info*/
$info_detail = array();
$index_files = array();
foreach (parse_ini_file("XQS.ini",true) as $value){
    foreach ($value as $key=>$values){
        $info_detail[$key] = $values;
    }
}
//print_r($info_detail);
/*Output ini info*/
echo "Server host address is: ".$info_detail["host"]."\n";
echo "Server port is: ".$info_detail["port"]."\n";
echo "Index pages are: ".$info_detail["index"]."\n";
echo "PHP status is:  ".$info_detail["php_open"]."\n";

/*Get index pages*/
foreach(explode(" ",$info_detail["index"]) as $value){
    array_push($index_files,$value);
}