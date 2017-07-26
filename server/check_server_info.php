<?php
if($info_detail["port"]<= 0 or $info_detail["port"]>65535){
    die ("WARNING:Please set port number in the range of [1,65535]\n");
}
if($info_detail["index"] == null){
    die ("WARNING:Index page must be at least one.\n");
}
if (!file_exists($info_detail["base"])){
    echo ("WARNING:Directory ".$info_detail["base"]." is not available.Now server use the default directory\n");
    $info_detail["base"] = "./web_root/";
}
if(!file_exists($info_detail["php_root"])){
    die ("WARNING:PHP root ".$info_detail["php_root"]." is not available.Please change it.\n");
}

echo "Server directory is: ".$info_detail["base"]."\n";
echo "PHP root is: ".$info_detail["php_root"]."\n";
echo "Tip: Press 'Ctrl+C' or 'X' button can shut down the server.\n";
echo "------------------------ Server Running Status ------------------------\n";