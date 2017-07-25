<?php
error_reporting(E_ALL);
set_time_limit(0);
//ob_implicit_flush();
echo "XQS Server (Version 0.1.0) started at ".date("Y-m-d l H:i:s")."\n";
require "./server/get_server_info.php";
require "./server/check_server_info.php";
require "./server/new_socket.php";
require "./server/server_core.php";

//关闭socket
socket_close($sock);