<?php
if( ($sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)) === false) {
    echo "socket_create() failed :reason:" . socket_strerror(socket_last_error()) . "\n";
}

//绑定
if (socket_bind($sock, $info_detail["host"], $info_detail["port"]) === false) {
    echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}

//监听
if (socket_listen($sock, 5) === false) {
    echo "socket_bind() failed :reason:" . socket_strerror(socket_last_error($sock)) . "\n";
}