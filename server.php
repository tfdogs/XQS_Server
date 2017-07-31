<?php
error_reporting(E_ALL);
set_time_limit(0);
//date_default_timezone_set('Asia/Shanghai');
//ob_implicit_flush();
echo "XQS Server (Version 0.1.0) started at ".date("Y-m-d l H:i:s")."\n";
echo "------------------------- Server Informations -------------------------\n";

require "./server/get_server_info.php";
require "./server/check_server_info.php";

$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_bind($sock, $info_detail["host"], $info_detail["port"]);
socket_listen($sock, 5);
require "./server/server_core.php";

//关闭socket
socket_close($sock);