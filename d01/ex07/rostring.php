#!/usr/bin/php
<?php

if ($argc < 1)
    exit();

function ft_split($str){
    $str = trim($str);
    $str = preg_replace("/\s+/", " ", $str);
    $arr = explode(' ', $str);
    return ($arr);
}

$arr = ft_split($argv[1]);

$len = count($arr);
if ($len > 1){
    for ($i = 1; $i < ($len); $i++){
        echo "$arr[$i] ";
    }
}

echo "$arr[0]\n";

?>