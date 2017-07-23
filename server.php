<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(E_ALL);
set_time_limit(0);
//ob_implicit_flush();
require "./server/get_server_info.php";
require "./server/check_server_info.php";
require "./server/new_socket.php";
require "./server/server_core.php";

//关闭socket
socket_close($sock);