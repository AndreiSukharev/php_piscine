#!/usr/bin/php
<?php

$weeks = array(
    "lundi" => 1,
    "mardi" => 2,
    "mercredi" => 3,
    "jeudi" => 4,
    "vendredi" => 5,
    "samedi" => 6,
    "dimanche" => 7
);
$months = array(
    "janvier" => 1,
    "fevrier" => 2,
    "mars" => 3,
    "avril" => 4,
    "mai" => 5,
    "juin" => 6,
    "juillet" => 7,
    "aout" => 8,
    "septembre" => 9,
    "octobre" => 10,
    "novembre" => 11,
    "decembre" => 12
);

function error(){
    echo("Wrong Format\n");
    exit();
}

if ($argc != 2){
    exit();
}

function check_format($array){
    if (!ctype_alpha($array[0]) || !ctype_alpha($array[2])){
        error();
    }
    elseif (!ctype_digit($array[1]) || !ctype_digit($array[3])){
        error();
    }
    else {
       $date = explode(":", $array[4]);
       foreach ($date as $d){
           if (strlen($d) != 2 || !ctype_digit($d)){
               error();
           }
       }
    }
}

function check_keys($array, $weeks, $months){
    if (!array_key_exists($array[0], $weeks)){
        error();
    }
    if (!array_key_exists($array[2], $months)){
        error();
    }
}

function count_res($array){
    date_default_timezone_set("Europe/Moscow");
    $time = explode(":", $array[4]);
    $res = mktime($time[0], $time[1], $time[2], $array[2], $array[1], $array[3]);
    return $res;
}

$array = explode(" ", $argv[1]);
//check
check_format($array);
$array[0] = strtolower($array[0]);
$array[2] = strtolower($array[2]);
check_keys($array, $weeks, $months);

//get_keys
$array[0] = $weeks[$array[0]];
$array[2] = $months[$array[2]];


$res = count_res($array);
echo "$res\n";

?>