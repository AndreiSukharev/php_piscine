#!/usr/bin/php
<?php

function errors(){
    echo "Incorrect Parameters\n";
    exit();
}

function syntax(){
    echo "Syntax Error\n";
    exit();
}

if ($argc != 2) {
    errors();
}

$argv[1] = str_replace('+', " + ", $argv[1]);
$argv[1] = str_replace('-', " - ", $argv[1]);
$argv[1] = str_replace('*', " * ", $argv[1]);
$argv[1] = str_replace('/', " / ", $argv[1]);
$argv[1] = str_replace('%', " % ", $argv[1]);

$argv[1] = trim($argv[1]);

function ft_split($str)
{
    $str = trim($str);
    $str = preg_replace("/\s{2,}/", " ", $str);
    $arr = explode(" ", $str);
    return $arr;
}

function getNumber($n){
    $n = trim($n);
    if (!ctype_digit($n))
        syntax();
    return ((int)$n);
}

function getSign($n){
    $n = trim($n);
    if ($n != '*' && $n != '+' && $n != '-' && $n != '/' && $n != '%')
        syntax();
    return ($n);
}

$str = ft_split($argv[1]);

$a = getNumber($str[0]);
$b = getNumber($str[2]);
$sign = getSign($str[1]);

//print_r($str);

switch ($sign){
    case "+":
        $res = $a + $b;
        echo "$res";
        break;
    case "-":
        $res = $a - $b;
        echo "$res";
        break;
    case "*":
        $res = $a * $b;
        echo "$res";
        break;
    case "/":
        if ($b === 0){
            echo "0";
            break;
        }
        $res = $a / $b;
        echo "$res";
        break;
    case "%":
        if ($b === 0){
            echo "0";
            break;
        }
        $res = $a % $b;
        echo "$res";
        break;
}
echo ("\n");

?>