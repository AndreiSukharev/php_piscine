<?php

include 'auth.php';

$login = $_GET['login'];
$passwd = $_GET['passwd'];

session_start();

if (auth($login, $passwd)){
    $_SESSION['loggued_on_user'] = $login;
    echo "OK\n";
}
else{
    $_SESSION['loggued_on_user'] = '';

    echo "ERROR\n";
}

//test
//curl -c cook.txt "localhost:8080?login=toto1&passwd=titi1"

?>