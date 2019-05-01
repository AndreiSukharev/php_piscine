<?php

if (!$_GET)
    exit();
foreach ($_GET as $key => $value){
    echo "$key: $value\n";
}

?>