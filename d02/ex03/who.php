#!/usr/bin/php
<?php

$filename = "/var/run/utmpx";
$fd = fopen("/var/run/utmpx", "rb");

function print_data($arr){
    $month = date('M', $arr['f1']);
    $day = date('d', $arr['f1']);
    $hour = date('H', $arr['f1']);
    $minutes = date('i', $arr['f1']);
    $res = $arr['a']." ".$arr['c']."  ".$month." ".$day." ".$hour.":".$minutes."\n";
    echo ($res);
}

date_default_timezone_set("Europe/Moscow");
while($binary = fread($fd, 628)){
    $arr = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $binary);
    if ($arr['e'] == 7){
        print_data($arr);
    }
}

fclose($fd);
?>