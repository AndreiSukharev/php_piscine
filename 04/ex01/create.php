<?php

$login = $_POST['login'];
$passwd = $_POST['passwd'];
$ok = $_POST['submit'];

//check
if ($ok !== "OK" || !$login || !$passwd){
    echo "ERROR\n";
    exit();
}

//create path
$path = '../private/';
$file = $path.'passwd';
if (!file_exists($path))
    mkdir($path);

//get data from file
if (file_exists($file)){
    $serialized_data = file_get_contents($file);
    $not_serialized_data = unserialize($serialized_data);
    for ($i = 0; $i < count($not_serialized_data); $i++){
        if ($not_serialized_data[$i]['login'] === $login){
            echo "ERROR\n";
            exit();
        }
    }
}

//create new user
$passwd = hash('Whirlpool', $passwd);
$not_serialized_data[] = ['login' => $login, 'passwd' => $passwd];
$serialized_data = serialize($not_serialized_data);
file_put_contents($file, $serialized_data);
echo "OK\n";
//curl -d login=toto1 -d passwd=titi1 -d submit=OK "localhost:8000"
?>
