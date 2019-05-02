#!/usr/bin/php
<?php

if ($argc != 2 || !file_exists($argv[1]))
    exit();

$page = file_get_contents($argv[1]);

function title($str){

    $str[2] =  strtoupper($str[2]);
    $res = $str[1].$str[2].$str[3];
    return $res;
}


function myReplace($str){

    $pattern = "/(title=\")(.*)(\")/";
    $str[2] =  strtoupper($str[2]);
    $str[1] = preg_replace_callback($pattern, 'title', $str[1]);
    $str[3] = preg_replace_callback($pattern, 'title', $str[3]);
    $res = $str[1].$str[2].$str[3];
    return $res;
}

$pattern = "/(<a.*?>)(.*?)(<.*a>)/";
$str = preg_replace_callback($pattern, 'myReplace', $page);
echo($str);

?>
