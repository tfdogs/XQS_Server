<?php
if($info_detail["port"]<= 0 or $info_detail["port"]>65535){
    die ("WARNING:Please set port number in the range of [1,65535]\n");
}
if($info_detail["index"] == null){
    die ("WARNING:Index page must be at least one.\n");
}
if (!file_exists($info_detail["base"])){
    die ("WARNING:Directory ".$info_detail["base"]." is not available.\n");
}
echo "Server directory:".$info_detail["base"]."\n";
echo "Press 'Ctrl+C' or 'X' button can shut down the server.\n";