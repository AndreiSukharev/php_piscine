<?php

if (!$_GET)
    exit();

//set vars
$action = $_GET["action"];
$name = $_GET["name"];
$value = $_GET["value"];

//GET POST DEL
if ($action === "set"){
    $expire_day = time() + 86400;
    setcookie($name, $value, $expire_day);
}
elseif ($action === "get"){
    if ($_COOKIE[$name])
        echo "$_COOKIE[$name]\n";
}
elseif ($action === "del"){
    setcookie($name);
}



//tests:
//curl -c test.txt "localhost:8000?action=set&name=head&value=body"
//curl -b test.txt "localhost:8000?action=get&name=head"
//curl -c test.txt "localhost:8000?action=del&name=head"

?>