<?php
if($info_detail["port"]<= 0 or $info_detail["port"]>65535){
    die ("FATAL: Port number in out of  the range of [1,65535].\n");
}
if($info_detail["index"] == null){
    die ("FATAL: Index pages are empty in XQS.ini it must be at least one.\n");
}
if (!file_exists($info_detail["base"])){
    echo ("WARNING:Directory ".$info_detail["base"]." is not available.Now server use the default directory.\n");
    $info_detail["base"] = "./web_root/";
}

echo "Server directory is: ".$info_detail["base"]."\n";
echo "Tip: Press 'Ctrl+C' or 'X' button can shut down the server.\n";
echo "------------------------ Server Running Status ------------------------\n";