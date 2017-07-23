<?php
do {
    //得到一个链接
    if (($msgsock = socket_accept($sock)) === false) {
        echo "socket_accepty() failed :reason:".socket_strerror(socket_last_error($sock)) . "\n";
        break;
    }
    //welcome  发送到客户端
    $msg = "aa";
    //$msg = file_get_contents("welcome.html");
    socket_write($msgsock, $msg, strlen($msg));
    echo "read client message \n";
    $buf = socket_read($msgsock, 8192);
    echo "received message:$buf \n";
    /*

    if (false === socket_write($msgsock, $talkback, strlen($talkback))) {
        echo "socket_write() failed reason:" . socket_strerror(socket_last_error($sock)) ."\n";
    } else {
        echo 'send success';
    }*/
    echo "Send success \r\n";
    socket_close($msgsock);
} while(true);