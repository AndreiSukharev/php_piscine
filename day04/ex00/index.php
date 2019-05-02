<?php

session_start();
$ok = $_GET['submit'];
$login = $_GET['login'];
$passwd = $_GET['passwd'];

if ($ok === "OK"){
    $_SESSION['login'] = $login;
    $_SESSION['passwd'] = $passwd;
}

//test
//curl -v -c cook.txt "localhost:8000"
//get data
//curl -v -b cook.txt "localhost:8000?login=sb&passwd=beeone&submit=OK"
//reload
//curl -v -b cook.txt "localhost:8000"
?>

<html><body>
<form action="index.php" method="get" name="form1">
    Username: <input name="login" value="<?php echo ($_SESSION['login']);?>"/>
    <br />
    Password: <input name="passwd" value="<?php echo ($_SESSION['passwd']);?>"/>
    <input type="submit" value="OK"/>
</form>
</body></html>
