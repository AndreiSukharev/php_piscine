<?php

//vars
$login = $_POST['login'];
$oldpw = $_POST['oldpw'];
$newpw = $_POST['newpw'];
$ok = $_POST['submit'];
$file = '../private/passwd';

function error(){
    echo "ERROR\n";
    exit();
}

//check
if ($ok !== "OK" || !$login || !$newpw || !$oldpw){
    error(1);
}

$serialized_data = file_get_contents($file);
if (!$serialized_data){
    echo "File does not exist\n";
    exit();
}


$find_user = false;
$not_serialized_data = unserialize($serialized_data);
for ($i = 0; $i < count($not_serialized_data); $i++){
    if ($not_serialized_data[$i]['login'] === $login){
        if ($not_serialized_data[$i]['passwd'] === hash('Whirlpool', $oldpw)){
            $not_serialized_data[$i]['passwd'] = hash('Whirlpool', $newpw);
            $find_user = true;
            break;
        }
        else {
            error();
        }
    }
}
if (!$find_user){
    error();
}

$serialized_data = serialize($not_serialized_data);
file_put_contents($file, $serialized_data);
echo "OK\n";


//test
//curl -d login=toto1 -d oldpw=titi1 -d newpw=1234 -d submit=OK "localhost:8080"

?>