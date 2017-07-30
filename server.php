<?php
error_reporting(E_ALL);
set_time_limit(0);
//ob_implicit_flush();

require "./server/functions.php";
echo "XQS Server (Version 0.1.0) started at ".gettime()."\n";
echo "------------------------- Server Informations -------------------------\n";

require "./server/get_server_info.php";
require "./server/check_server_info.php";
require "./server/new_socket.php";

do {
    require "./server/server_core.php";
} while(true);
//关闭socket
//socket_close($sock);