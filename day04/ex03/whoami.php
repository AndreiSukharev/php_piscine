<?php

session_start();
$logged = $_SESSION['loggued_on_user'];

if ($logged){
    echo "$logged\n";
}
else {
    echo "ERROR\n";
}

//curl -b cook.txt "localhost:8080"

?>