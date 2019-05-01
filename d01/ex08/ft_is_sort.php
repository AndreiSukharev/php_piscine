#!/usr/bin/php
<?php

function ft_is_sort($arr){
    $buff = $arr;
    sort($arr);
    for ($i = 0; $i < count($arr); $i++){
        if ($buff[$i] != $arr[$i])
            return (false);
    }
    return (true);
}

?>