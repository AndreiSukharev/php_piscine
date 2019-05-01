#!/usr/bin/php
<?php

    if ($argc < 2)
        exit();

    function ft_push(&$res, $arr){
        for ($i = 0; $i < count($arr); $i++){
            array_push($res, $arr[$i]);
        }
    }

    function ft_split($str){
        $str = trim($str);
        $str = preg_replace('/\s+/', ' ', $str);
        $arr = explode(" ", $str);
        return ($arr);
    }

    $res = array();
    for ($i = 1; $i < $argc; $i++){
        $arr = ft_split($argv[$i]);
        ft_push($res, $arr);
    }
    sort($res);

    for ($i = 0; $i < count($res); $i++){

        echo "$res[$i]\n";
}
?>
