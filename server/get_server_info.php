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
echo "Operating System is: ".php_uname()."\n";
echo "PHP version is:      ".PHP_VERSION."\n";
echo "PHP root is:         ".$info_detail["php_root"]."\n";
echo "Server listened at:  http://".$info_detail["host"].":".$info_detail["port"]."\n";
echo "Index pages are:     ".$info_detail["index"]."\n";
echo "PHP status is:       ".$info_detail["php_open"]."\n";

/*Get index pages*/
foreach(explode(" ",$info_detail["index"]) as $value){
    array_push($index_files,$value);
}