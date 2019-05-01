#!/usr/bin/php
<?php

if ($argc < 2)
    exit();

function ft_push(&$res, $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
            array_push($res, $arr[$i]);
        }
}

function ft_split($str)
{
    $str = trim($str);
    $str = preg_replace('/\s+/', ' ', $str);
    $arr = explode(" ", $str);
    return ($arr);
}

function kostyl($a, $b){

        $i = 0;
        $line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        while (($i < strlen($a)) || ($i < strlen($b)))
        {
            $posa = stripos($line, $a[$i]);
            $posb = stripos($line, $b[$i]);
            if ($posa > $posb)
                return 1;
            else if ($posa < $posb)
                return -1;
            $i++;
        }
}

$array = [];

for ($i = 1; $i < $argc; $i++) {
    $split = ft_split($argv[$i]);
    ft_push($array, $split);
}
usort($array, "kostyl");
foreach ($array as $val){
    echo "$val\n";
}

?>