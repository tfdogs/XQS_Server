<?php
foreach ($hosts as $key=>$value){
    $msgsock = socket_accept($sock[$key]);
    $buf = socket_read($msgsock, 8192);
    require "load_file.php";
    socket_write($msgsock, $msg, strlen($msg));
    socket_close($msgsock);
}