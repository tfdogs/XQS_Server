<?php
/*Get ini info*/
$info_detail = array();
$index_files = array();
$hosts = array();
$ports = array();
$dirs = array();
$sock = array();

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
echo "PHP status is        ".$info_detail["php_open"]."\n";
echo "Index pages are:     ".$info_detail["index"]."\n";

/*Get index pages*/
foreach(explode(" ",$info_detail["index"]) as $value){
    array_push($index_files,$value);
}

foreach (explode(" ",$info_detail["host"]) as $value){
    array_push($hosts,$value);
}

foreach (explode(" ",$info_detail["port"]) as $value){
    array_push($ports,$value);
}
foreach (explode(" ",$info_detail["base"]) as $value){
    array_push($dirs,$value);
}