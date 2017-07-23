<?php
if($info_detail["port"]<= 0 or $info_detail["port"]>65535){
    die ("Wrong port!");
}