<?php
foreach($hosts as $key=>$value){
    $sock[$key] = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    $soo = socket_bind( $sock[$key],$hosts[$key],$ports[$key]);
    socket_listen($sock[$key],5);
}