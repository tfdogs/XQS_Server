<?php
do {
    //得到一个链接
    if (($msgsock = socket_accept($sock)) === false) {
        echo "socket_accepty() failed :reason:".socket_strerror(socket_last_error($sock)) . "\n";
        break;
    }
    $buf = socket_read($msgsock, 8192);
    //echo "received message:$buf \n";
    require "load_file.php";
    socket_write($msgsock, $msg, strlen($msg));
    socket_close($msgsock);
} while(true);