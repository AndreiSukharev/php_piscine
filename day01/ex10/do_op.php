#!/usr/bin/php
<?php

function errors(){
    echo "Incorrect Parameters\n";
    exit();
}

if ($argc == 0 || $argc > 4) {
    errors();
}

function getNumber($n){
    $n = trim($n);
    if (!ctype_digit($n))
        errors();
    return ((int)$n);
}

function getSign($n){
    $n = trim($n);
    if ($n != '*' && $n != '+' && $n != '-' && $n != '/' && $n != '%')
        errors();
    return ($n);
}

$a = getNumber($argv[1]);
$b = getNumber($argv[3]);
$sign = getSign($argv[2]);

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
        $res = $a / $b;
        echo "$res";
        break;
    case "%":
        $res = $a % $b;
        echo "$res";
        break;
}
echo ("\n");

?>