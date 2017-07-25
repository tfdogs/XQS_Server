<?php
/*Get ini info*/
$info_detail = array();
$index_files = array();
foreach (parse_ini_file("XQS.ini",true) as $value){
    foreach ($value as $key=>$values){
        $info_detail[$key] = $values;
    }
}

/*Output ini info*/
echo "Server name:".$info_detail["host"]."\n";
echo "Server port:".$info_detail["port"]."\n";
echo "Index pages:".$info_detail["index"]."\n";


/*Get index pages*/
foreach(explode(" ",$info_detail["index"]) as $value){
    array_push($index_files,$value);
}