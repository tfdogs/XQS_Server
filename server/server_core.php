<?php
do {
    //得到一个链接
    if (($msgsock = socket_accept($sock)) === false) {
        echo "socket_accepty() failed :reason:".socket_strerror(socket_last_error($sock)) . "\n";
        break;
    }
    //welcome  发送到客户端
    //$msg = fseek("‪C:\Users\dell\Desktop\CPO32CI400AJ0003.jpg",1024);
   // $msg = file_get_contents("welcome.html");

    //echo "read client message \n";
    $buf = socket_read($msgsock, 8192);
    echo "received message:$buf \n";

    require "loadfile.php";
    /*

    if (false === socket_write($msgsock, $talkback, strlen($talkback))) {
        echo "socket_write() failed reason:" . socket_strerror(socket_last_error($sock)) ."\n";
    } else {
        echo 'send success';
    }*/
    socket_write($msgsock, $msg, strlen($msg));
    echo "Send success \r\n";
    socket_close($msgsock);
} while(true);