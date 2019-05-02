#!/usr/bin/php
<?php

if ($argc < 3)
    exit();

$res = [];
for ($i = 3; $i < $argc; $i++){
    $split = explode(":", $argv[$i]);
    $array =  [$split[0] => $split[1]];
    $ar = array_merge($res, $array);
}
//echo $ar[$argv[1]];
print_r($ar);