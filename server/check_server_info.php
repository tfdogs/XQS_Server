<?php
if($info_detail["port"]<= 0 or $info_detail["port"]>65535){
    die ("FATAL: Port number in out of  the range of [1,65535].\n");
}
if($info_detail["index"] == null){
    die ("FATAL: Index pages are empty in XQS.ini it must be at least one.\n");
}
if(count($hosts) != count($ports) or count($ports) != count($dirs) or count($dirs) != count($hosts)){
    die ("FATAL: Hosts.ports,directions are not be One-to-one correspondence.\n");
}

foreach ($dirs as $value) {
    if (!file_exists($value)) {
        die ("FATAL:Directory '$value ' is not available.\n");
    }
}

foreach($ports as $key=>$value){
    echo "Server listened address,directory is: ".$hosts[$key].":".$ports[$key].",".$dirs[$key]."\n";
}

echo "Tip: Press 'Ctrl+C' or 'X' button can shut down the server.\n";
echo "------------------------ Server Running Status ------------------------\n";